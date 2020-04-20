<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\OpenGL\Support;

use Nette\PhpGenerator\Literal;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\PsrPrinter;

/**
 * Class ClassGenerator
 */
class ClassGenerator
{
    /**
     * @var string
     */
    private const FILE_COMMENT = <<<'comment'
    This file is part of OpenGL package.
    
    For the full copyright and license information, please view the LICENSE
    file that was distributed with this source code.
    
    MACHINE GENERATED FILE, DO NOT EDIT
    comment;

    /**
     * @var array
     */
    private array $api;

    /**
     * @var DocsGeneratorInterface
     */
    private DocsGeneratorInterface $docs;

    /**
     * @var array
     */
    private array $types;

    /**
     * ClassGenerator constructor.
     *
     * @param DocsGeneratorInterface $docs
     * @param array $data
     * @param array $types
     */
    public function __construct(DocsGeneratorInterface $docs, array $data, array $types)
    {
        $this->api = $data;
        $this->docs = $docs;
        $this->types = $types;
    }

    /**
     * @param string $out
     * @return void
     */
    public function generate(string $out): void
    {
        $printer = new PsrPrinter();

        \file_put_contents($out, $printer->printFile($this->build()));
    }

    /**
     * @return PhpFile
     */
    private function build(): PhpFile
    {
        $file = new PhpFile();
        $file->addComment(self::FILE_COMMENT);
        $file->setStrictTypes(true);

        $class = $file->addClass($this->api['class'] ?? 'Unknown');

        if (isset($this->api['comment'])) {
            $class->addComment($this->api['comment']);
        }

        if (isset($this->api['extends'])) {
            $class->addExtend($this->api['extends']);
        }

        foreach ($this->api['constants'] ?? [] as $name => $value) {
            $const = $class->addConstant($name, new Literal($this->toHex($value)));
            $const->setPublic();
            $const->setComment(\implode("\n", [
                '@var ' . $this->type($value),
                '@since ' . $this->api['version'],
            ]));
        }

        foreach ($this->api['functions'] ?? [] as $name => $info) {
            $comment = [$this->docs->forFunction($name), '@since ' . $this->api['version']];
            $return = $this->getNativeTypeName($info['return'] ?? 'void') ?? 'void';
            $assertions = $arguments = [];

            $assertions[] = 'assert(version_compare(self::$info->version, \'' . $this->api['version'] . '\') >= 0, '.
                '__FUNCTION__ . \' is available since OpenGL ' . $this->api['version'] . ', but only OpenGL \'. self::$info->version . \' is available\');';

            $method = $class->addMethod($name);
            $method->setStatic();
            $method->setReturnType($return);

            foreach ($info['args'] as $signature) {
                if ($signature === 'void') {
                    continue;
                }

                [$type, $arg] = $this->getArgInfo($signature);

                $parameter = $method->addParameter($arg);
                if (\strpos($signature, '*') !== false) {
                    $parameter->setNullable(true);
                }
                $parameter->setType($this->getNativeTypeName($type));

                // Other
                if ($assertion = $this->getTypeAssertion($type)) {
                    $assertions[] = 'assert(' . \sprintf($assertion, '$' . $arg) . ', \'Argument $' . $arg . ' overflow: C type ' . $type . ' is required\');';
                }

                $arguments[] = '$' . $arg;
                $comment[] = '@param ' . $this->getDocBlockType($type) . ' $' . $arg;
            }

            $comment[] = '@return ' . $this->getDocBlockType($info['return'] ?? 'void') ?? 'void';

            $method->setComment(\implode("\n", $comment));

            $argsExpr = '(' . \implode(', ', $arguments) . ')';
            $returnExpr = $return !== 'void' ? 'return ' : '';

            if ($info['virtual'] ?? false) {
                $body = ($info['return'] ?? 'void') . ' (*)(' . \implode(', ', $info['args'] ?? []) . ')';

                $call = \implode("\n", [
                    '$proc = self::getProc(\'' . $name . '\', \'' . $body . '\');',
                    $returnExpr . '$proc' . $argsExpr . ';',
                ]);
            } else {
                $call = $returnExpr . 'self::$ffi->' . $name . $argsExpr . ';';
            }

            $method->setBody(\implode("\n", [
                ...$assertions,
                '',
                $call,
            ]));
        }

        return $file;
    }

    /**
     * @param mixed $value
     * @return string
     */
    private function toHex($value): string
    {
        $hex = \is_string($value)
            ? \gmp_strval(\gmp_init((string)$value), 16)
            : \dechex((int)$value);

        return '0x' . \str_pad($hex, 4, '0', \STR_PAD_LEFT);
    }

    /**
     * @param mixed $value
     * @return string
     */
    private function type($value): string
    {
        switch (true) {
            case \is_int($value):
                return 'int';
            case \is_string($value):
                return 'string';
            case \is_float($value):
                return 'float';
            case \is_bool($value):
                return 'bool';
            case \is_array($value):
                return 'array';
            case \is_object($value):
                return 'object';
            case $value === null:
                return 'void';
            case \is_resource($value);
                return 'resource';
            default:
                return 'mixed';
        }
    }

    /**
     * @param string $input
     * @return string
     */
    private function getNativeTypeName(string $input): string
    {
        $name = $this->getTypeNormalName($input);
        $types = $this->types[$name]['type'] ?? [];

        if (! $types) {
            throw new \LogicException('Can not found native type ' . $name);
        }

        return \reset($types);
    }

    /**
     * @param string $name
     * @return string
     */
    private function getTypeNormalName(string $name): string
    {
        $name = \str_replace(['const', ' '], '', $name);

        return \preg_replace('/\h+/u', '', $name);
    }

    /**
     * @param string $arg
     * @return array
     */
    private function getArgInfo(string $arg): array
    {
        \preg_match('/^(.+?)\b(\w+)$/u', $arg, $matches);

        if (\count($matches) !== 3) {
            throw new \InvalidArgumentException('Invalid argument definition ' . $arg);
        }

        return [
            \trim($matches[1]),
            $matches[2],
        ];
    }

    /**
     * @param string $type
     * @return string|null
     */
    private function getTypeAssertion(string $type): ?string
    {
        $name = $this->getTypeNormalName($type);

        return $this->types[$name]['assert'] ?? null;
    }

    /**
     * @param string $input
     * @return string
     */
    private function getDocBlockType(string $input): string
    {
        $name = $this->getTypeNormalName($input);

        return \implode('|', $this->types[$name]['type'] ?? ['mixed']);
    }
}
