<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace CodeGenerator;

use FFI\CData;
use Serafim\OpenGL\Util;

/**
 * Class Generator
 */
abstract class Generator
{
    /**
     * @var Info
     */
    protected Info $info;

    /**
     * Generator constructor.
     *
     * @param Info $info
     */
    public function __construct(Info $info)
    {
        $this->info = $info;
    }

    /**
     * @return string
     */
    protected function getVersion(): string
    {
        return $this->info->data['version'] ?? '1.0';
    }

    /**
     * @return string
     */
    protected function getFullQualifiedClassName(): string
    {
        if (! isset($this->info->data['class'])) {
            throw new \LogicException('Unknown class name');
        }

        return $this->info->data['class'];
    }

    /**
     * @return string
     */
    protected function getClassName(): string
    {
        $chunks = \explode('\\', $this->getFullQualifiedClassName());

        return \array_pop($chunks);
    }

    /**
     * @return string
     */
    protected function getNamespaceName(): string
    {
        $chunks = \explode('\\', $this->getFullQualifiedClassName());

        \array_pop($chunks);

        return \implode('\\', $chunks);
    }

    /**
     * @param mixed $value
     * @param int $length
     * @return string
     */
    protected function toHexString($value, int $length = 4): string
    {
        $hex = \is_string($value)
            ? \gmp_strval(\gmp_init((string)$value), 16)
            : \dechex((int)$value);

        return '0x' . \str_pad($hex, $length, '0', \STR_PAD_LEFT);
    }

    /**
     * @param mixed $value
     * @return string
     */
    protected function getTypeName($value): string
    {
        switch (true) {
            case $value instanceof CData:
                return Util::typeName($value);

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
     * @param array $lines
     * @return string
     */
    protected function getDocBlock(array $lines): string
    {
        $comment = [];

        foreach ($lines as $tag => $value) {
            if ($value === null) {
                continue;
            }

            $comment[] = \is_string($tag) ? '@' . $tag . ' ' . $value : $value;
        }

        return \implode("\n", $comment);
    }

    /**
     * @param string $type
     * @return string|null
     */
    protected function getAssertionByTypeName(string $type): ?string
    {
        $name = $this->getNormalTypeName($type);

        return $this->info->types[$name]['assert'] ?? null;
    }

    /**
     * @param string $input
     * @return string
     */
    protected function getDocBlockTypeName(string $input): string
    {
        $name = $this->getNormalTypeName($input);

        return \implode('|', $this->info->types[$name]['type'] ?? ['mixed']);
    }

    /**
     * @param string $input
     * @return string
     */
    protected function getNativeTypeName(string $input): string
    {
        $name = $this->getNormalTypeName($input);
        $types = $this->info->types[$name]['type'] ?? [];

        if (! $types) {
            throw new \LogicException('Can not found native type ' . $name);
        }

        $type = \reset($types);

        return $type === 'mixed' ? '' : $type;
    }

    /**
     * @param string $name
     * @return string
     */
    protected function getNormalTypeName(string $name): string
    {
        $name = \str_replace(['const', ' '], '', $name);

        return \preg_replace('/\h+/u', '', $name);
    }
}
