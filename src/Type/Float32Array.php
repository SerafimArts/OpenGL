<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\OpenGL\Type;

use FFI\CData;

/**
 * @method \Traversable|float[] getIterator()
 * @method int offsetGet(int $offset)
 * @method int offsetSet(int $offset, float|CData|CTypeInterface $value)
 */
class Float32Array extends CArrayType
{
    /**
     * @var float
     */
    public const MIN_VALUE = -1.175494e+38;

    /**
     * @var float
     */
    public const MAX_VALUE = 3.402823e+38;

    /**
     * Float32Array constructor.
     *
     * @param float ...$elements
     */
    public function __construct(float ...$elements)
    {
        parent::__construct(...$elements);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'float';
    }

    /**
     * @param mixed $value
     * @return bool
     */
    protected function assert($value): bool
    {
        return \is_float($value) && $value >= static::MIN_VALUE && $value <= static::MAX_VALUE;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        $name = $this->getName() . '[' . $this->size . ']';

        $values = '';

        foreach ($this as $value) {
            $values .= \sprintf('%e', $value) . ', ';
        }

        return $name . '{' . \rtrim($values, ', ') . '}';
    }

    /**
     * @param mixed $value
     * @return bool
     */
    protected function assertType(&$value): bool
    {
        if (\is_int($value)) {
            $value = (float)$value;
        }

        return parent::assertType($value);
    }
}
