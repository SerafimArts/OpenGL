<?php

/**
 * This file is part of Generator package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace CodeGenerator;

use CodeGenerator\Body\MethodBodyInterface;
use CodeGenerator\Body\NativeBody;
use CodeGenerator\Body\OverrideBody;
use CodeGenerator\Body\VirtualBody;
use Documentation\Documentation;
use Documentation\DocumentationInterface;
use CodeGenerator\Type\OutputTypeInterface;
use CodeGenerator\Type\Registry;
use CodeGenerator\Type\InputTypeInterface;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Literal;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\PhpNamespace;
use Nette\PhpGenerator\PsrPrinter;

/**
 * Class CodeGenerator
 */
class CodeGenerator
{
    /**
     * @var string
     */
    private const FMT_FINALLY = "try {\n%s\n} finally {\n%s\n}";

    /**
     * @var string
     */
    private const ERROR_FMT_RETURN = '%s in %s::%s() return type';

    /**
     * @var string
     */
    private const ERROR_FMT_ARGUMENT = '%s in %s::%s() argument type';

    /**
     * @var DocumentationInterface
     */
    public DocumentationInterface $docs;

    /**
     * @var Registry
     */
    public Registry $types;

    /**
     * CodeGenerator constructor.
     *
     * @param Registry|null $arguments
     * @param DocumentationInterface|null $docs
     */
    public function __construct(Registry $arguments = null, DocumentationInterface $docs = null)
    {
        $this->types = $arguments ?? new Registry();

        $this->docs = $docs ?? new Documentation();
    }

    /**
     * @param array $meta
     * @return string
     */
    public function generate(array $meta): string
    {
        $file = new PhpFile();
        $file->addComment($this->docs->forFile($meta));
        $file->setStrictTypes(true);

        $this->addNamespace($file, $meta);

        return (new PsrPrinter())->printFile($file);
    }

    /**
     * @param string $class
     * @return string
     */
    private function getNamespaceName(string $class): string
    {
        $chunks = \explode('\\', $class);

        \array_pop($chunks);

        return \implode('\\', $chunks);
    }

    /**
     * @param PhpFile $file
     * @param array $meta
     * @return void
     */
    private function addNamespace(PhpFile $file, array $meta): void
    {
        $namespace = $file->addNamespace($this->getNamespaceName($meta['name']));

        foreach ($meta['use'] ?? []  as $use) {
            $namespace->addUse($use);
        }

        $this->addClass($namespace, $meta);
    }

    /**
     * @param PhpNamespace $namespace
     * @param array $meta
     * @return void
     */
    private function addClass(PhpNamespace $namespace, array $meta): void
    {
        $class = $namespace->addClass(\class_basename($meta['name']));
        $class->setComment($this->docs->forClass($meta));

        if ($meta['extends'] ?? null) {
            $namespace->addUse($meta['extends']);
            $class->setExtends($meta['extends']);
        }

        foreach ($meta['implements'] ?? [] as $implement) {
            $namespace->addUse($implement);
            $class->addImplement($implement);
        }

        $this->addConstants($class, $meta);
        $this->addMethods($class, $meta);
    }

    /**
     * @param ClassType $class
     * @param array $meta
     * @return void
     */
    private function addConstants(ClassType $class, array $meta): void
    {
        foreach ($meta['constants'] ?? [] as $name => $value) {
            $this->addConstant($class, $meta, $name, $value);
        }
    }

    /**
     * @param ClassType $class
     * @param array $meta
     * @param string $name
     * @param mixed $value
     * @return void
     */
    private function addConstant(ClassType $class, array $meta, string $name, $value): void
    {
        $class->addConstant($name, $this->toLiteral($value))
            ->setComment($this->docs->forConstant($meta, $name, $value))
            ->setPublic()
        ;
    }

    /**
     * @param mixed $value
     * @return Literal
     */
    private function toLiteral($value)
    {
        if (\is_int($value)) {
            return new Literal(Util::toHexString($value));
        }

        return $value;
    }

    /**
     * @param ClassType $class
     * @param array $meta
     * @return void
     */
    private function addMethods(ClassType $class, array $meta): void
    {
        foreach ($meta['methods'] ?? [] as $name => $method) {
            $this->addMethod($class, $name, $method, $meta);
        }
    }

    /**
     * @param string $class
     * @param string $function
     * @param array $meta
     * @return array
     */
    private function fetchTypes(string $class, string $function, array $meta): array
    {
        try {
            $output = $this->types->output($meta['type'] ?? 'void');
        } catch (\InvalidArgumentException $e) {
            throw new \InvalidArgumentException(\vsprintf(self::ERROR_FMT_RETURN, [
                $e->getMessage(),
                $class,
                $function
            ]));
        }

        try {
            $input = $this->getArguments($meta);
        } catch (\InvalidArgumentException $e) {
            throw new \InvalidArgumentException(\vsprintf(self::ERROR_FMT_ARGUMENT, [
                $e->getMessage(),
                $class,
                $function
            ]));
        }

        return [$input, $output];
    }

    /**
     * @param ClassType $class
     * @param string $function
     * @param array $meta
     * @param array $parent
     * @return void
     */
    private function addMethod(ClassType $class, string $function, array $meta, array $parent): void
    {
        /**
         * @var InputTypeInterface[] $input
         * @var OutputTypeInterface $output
         */
        [$input, $output] = $this->fetchTypes($class->getName(), $function, $meta);

        $body = $this->getBody($meta, $input, $output);

        $method = $class->addMethod($meta['name'] ?? $function)
            ->addComment($this->docs->forMethod($function, $meta, $parent))
            ->setPublic()
        ;

        foreach ($input as $name => $argument) {
            $parameter = $method->addComment(\sprintf('@param %s $%s', $argument->getDocBlock(), $name))
                ->addBody($argument->prepare($name))
                ->addParameter($name)
                ->setType($argument->getTypeHint())
                ->setNullable($argument->isNullable())
                ->setReference($argument->isPassedByRef())
            ;
        }

        $method
            ->addBody($this->wrap($input, $body->generate($function)))
            ->addComment(\sprintf('@return %s', $output->getDocBlock()))
            ->setReturnType($output->getTypeHint())
            ->setReturnNullable($output->isNullable())
        ;
    }

    /**
     * @param iterable|InputTypeInterface[] $input
     * @param string $body
     * @return string
     */
    private function wrap(iterable $input, string $body): string
    {
        $finally = [];

        foreach ($input as $name => $type) {
            if ($cast = $type->finally($name)) {
                $finally[] = $cast;
            }
        }

        if (\count($finally)) {
            return \vsprintf(self::FMT_FINALLY, [
                Util::format($body),
                Util::format(\implode("\n", $finally))
            ]);
        }

        return $body;
    }

    /**
     * @param array $meta
     * @return string
     */
    private function getProc(array $meta): string
    {
        $args = $meta['args'] ?? [];
        $fmt  = fn (string $name, string $value) => Util::formatType($value . ' ' . $name);

        return \vsprintf('%s (*)(%s)', [
            $meta['type'] ?? 'void',
            \implode(', ', \array_map($fmt, \array_keys($args), \array_values($args)))
        ]);
    }

    /**
     * @param array $meta
     * @return array|InputTypeInterface[]
     */
    private function getArguments(array $meta): array
    {
        $result = [];

        foreach ($meta['args'] ?? [] as $name => $type) {
            $result[$name] = $this->types->input($type);
        }

        return $result;
    }

    /**
     * @param array $meta
     * @param iterable $input
     * @param OutputTypeInterface $output
     * @return MethodBodyInterface
     */
    private function getBody(array $meta, iterable $input, OutputTypeInterface $output): MethodBodyInterface
    {
        if (isset($meta['override'])) {
            return new OverrideBody($meta['override']);
        }

        $proc = $this->getProc($meta);

        $isVirtual = $meta['virtual'] ?? false;

        return $isVirtual
            ? new VirtualBody($input, $output, $proc)
            : new NativeBody($input, $output, $proc);
    }
}
