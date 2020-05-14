<?php

/**
 * This file is part of Generator package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Documentation;

/**
 * Class Documentation
 */
class Documentation implements DocumentationInterface
{
    /**
     * @var string
     */
    private const DESCRIPTION_FILE = <<<'description'
    This file is part of OpenGL package.
    
    For the full copyright and license information, please view the LICENSE
    file that was distributed with this source code.
    
    MACHINE GENERATED FILE, DO NOT EDIT
    description;

    private const DEPRECATION_METHOD_TEMPLATE = <<<'template'
    Method %s is deprecated
    template;

    /**
     * {@inheritDoc}
     */
    public function forFile(array $meta): string
    {
        return self::DESCRIPTION_FILE;
    }

    /**
     * {@inheritDoc}
     */
    public function forClass(array $meta): string
    {
        return $this->comment([$meta['description'] ?? ''], [
            'version' => $meta['version'] ?? null,
        ]);
    }

    /**
     * {@inheritDoc}
     */
    public function forConstant(array $meta, string $name, $value): string
    {
        return $this->comment([
            'since' => $meta['version'] ?? $parent['version'] ?? null,
            'var'   => $this->getTypeByValue($value),
        ]);
    }

    /**
     * @param mixed $value
     * @return string
     */
    protected function getTypeByValue($value): string
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
     * {@inheritDoc}
     */
    public function forMethod(string $name, array $method, array $parent): string
    {
        $deprecation = \trim(\sprintf(self::DEPRECATION_METHOD_TEMPLATE, $method['name'] ?? $name));

        return $this->comment([
            $method['description'] ?? '',
            'since'      => $method['version'] ?? $parent['version'] ?? null,
            'deprecated' => isset($method['deprecated']) ? $deprecation : null,
        ]);
    }


    /**
     * @param array ...$groups
     * @return string
     */
    protected function comment(iterable ...$groups): string
    {
        $comment = [];

        foreach ($groups as $group) {
            foreach ($group as $tag => $value) {
                if ($value === null) {
                    continue;
                }

                $comment[] = \is_string($tag) ? '@' . $tag . ' ' . $value : $value;
            }

            $comment[] = '';
        }

        return \trim(\implode("\n", $comment));
    }
}
