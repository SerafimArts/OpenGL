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
 * @method \Traversable|int[] getIterator()
 * @method int offsetGet(int $offset)
 * @method int offsetSet(int $offset, int|CData|CTypeInterface $value)
 */
class Int8Array extends CArrayType
{
    /**
     * @var int
     */
    public const MIN_VALUE = -2 ** 7;

    /**
     * @var int
     */
    public const MAX_VALUE = 2 ** 7 - 1;

    /**
     * Int8Array constructor.
     *
     * @param int ...$elements
     */
    public function __construct(int ...$elements)
    {
        parent::__construct($elements);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'int8_t';
    }

    /**
     * @param mixed $value
     * @return bool
     */
    protected function assert($value): bool
    {
        return \is_int($value) && $value >= static::MIN_VALUE && $value <= static::MAX_VALUE;
    }
}
