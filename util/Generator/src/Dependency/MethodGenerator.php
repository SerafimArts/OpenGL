<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace CodeGenerator\Dependency;

use CodeGenerator\GeneratedInterface;
use CodeGenerator\Generator;
use CodeGenerator\Info;
use Illuminate\Support\Str;
use Nette\PhpGenerator\ClassType;

/**
 * Class MethodGenerator
 */
class MethodGenerator extends Generator implements GeneratedInterface
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var array
     */
    private array $api;

    /**
     * MethodGenerator constructor.
     *
     * @param Info $info
     * @param string $name
     * @param array $api
     */
    public function __construct(Info $info, string $name, array $api)
    {
        parent::__construct($info);

        $this->name = $name;
        $this->api = $api;
    }

    /**
     * @param ClassType $class
     * @return void
     */
    public function attachTo(ClassType $class): void
    {
        $this->generate($class);
    }

    /**
     * @param ClassType $class
     * @return void
     */
    private function generate(ClassType $class): void
    {
        $return = $this->getNativeTypeName($this->api['return'] ?? 'void') ?? 'void';
        $arguments = [];

        $name = Str::startsWith($this->name, 'gl')
            ? \lcfirst(Str::substr($this->name, 2))
            : $this->name;

        $method = $class->addMethod($name);
        $method->setReturnType($return);

        foreach ($this->getMethodArguments() as $arg) {
            $parameter = $method->addParameter($arg->name);
            $parameter->setNullable($arg->nullable);

            if ($arg->phpType !== null && $arg->phpType !== 'mixed' && ! $this->isCastAllowed($arg)) {
                $parameter->setType($arg->phpType);
            }

            $arguments[] = $arg->def;
        }

        $method->setComment($this->getMethodDocBlock());

        $body = $this->api['virtual'] ?? false
                ? $this->getVirtualCallBody($arguments)
                : $this->getNativeCallBody($arguments);

        $method->setBody($this->getMethodBody($body));
    }

    /**
     * @return iterable|ArgumentInfo[]
     */
    protected function getMethodArguments(): iterable
    {
        foreach ($this->api['args'] ?? [] as $signature) {
            if ($signature === 'void') {
                break;
            }

            yield new ArgumentInfo($this->info, $signature);
        }
    }

    /**
     * @param ArgumentInfo $arg
     * @return bool
     */
    private function isCastAllowed(ArgumentInfo $arg): bool
    {
        $types = ['int', 'float', 'bool', 'string'];

        return \in_array($arg->phpType, $types, true);
    }

    /**
     * @return string
     */
    protected function getMethodDocBlock(): string
    {
        $comment = [
            $this->info->docs->forFunction($this->name),
            'since' => $this->getVersion(),
        ];

        foreach ($this->getMethodArguments() as $arg) {
            $comment[] = '@param ' . $arg->docblock . ' ' . $arg->def;
        }

        $comment['return'] = $this->getDocBlockTypeName($this->getReturnTypeName());

        return $this->getDocBlock($comment);
    }

    /**
     * @return string
     */
    private function getReturnTypeName(): string
    {
        return $this->api['return'] ?? 'void';
    }

    /**
     * @param array $arguments
     * @return string
     */
    private function getNativeCallBody(array $arguments): string
    {
        return \vsprintf('%s$this->info->ffi->%s(%s);', [
            $this->getReturnPrefix(),
            $this->name,
            \implode(', ', $arguments),
        ]);
    }

    /**
     * @return string
     */
    private function getReturnPrefix(): string
    {
        return $this->shouldReturn() ? 'return ' : '';
    }

    /**
     * @return bool
     */
    private function shouldReturn(): bool
    {
        return $this->getReturnTypeName() !== 'void';
    }

    /**
     * @param array $arguments
     * @return string
     */
    private function getVirtualCallBody(array $arguments): string
    {
        $body = $this->getReturnTypeName() . ' (*)(' . \implode(', ', $this->api['args'] ?? []) . ')';

        return \implode("\n", [
            \sprintf('$proc = $this->getProcAddress(\'%s\', \'%s\');', $this->name, $body),
            $this->getReturnPrefix() . '$proc(' . \implode(', ', $arguments) . ');',
        ]);
    }

    /**
     * @param string $call
     * @return string
     */
    private function getMethodBody(string $call): string
    {
        $lines = [];

        foreach ($this->getMethodArguments() as $arg) {
            if ($cast = $this->getAutoCast($arg)) {
                $lines[] = $cast;
            }
        }

        if (\count($lines)) {
            $lines[] = '';
        }

        foreach ($this->getMethodArguments() as $arg) {
            if ($assertion = $arg->getAssertionCode()) {
                $lines[] = $assertion;
            }
        }

        return \implode("\n", [...$lines, '', $call]);
    }

    /**
     * @param ArgumentInfo $arg
     * @return iterable|string[]
     */
    private function getAutoCast(ArgumentInfo $arg): ?string
    {
        if ($this->isCastAllowed($arg)) {
            $cast = '%s = %1$s instanceof \\FFI\\CData ? %1$s->cdata : %1$s;';

            return \sprintf($cast, $arg->def);
        }

        return null;
    }

}
