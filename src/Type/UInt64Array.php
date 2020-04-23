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
class UInt64Array extends Int64Array
{
    /**
     * @var int
     */
    public const MIN_VALUE = 0;

    /**
     * @var int
     */
    public const MAX_VALUE = 2 ** 64 - 1;

    /**
     * @var string
     */
    private const MESSAGE_TYPE_WARNING =
        'Please note that in the PHP it is impossible to determine ' .
        'the max uint64 value (18_446_744_073_709_551_615 or 0xffffffffffffffff)';

    /**
     * UInt64Array constructor.
     *
     * @param mixed ...$elements
     */
    public function __construct(...$elements)
    {
        @\trigger_error(self::MESSAGE_TYPE_WARNING);

        if (\PHP_INT_SIZE < 8) {
            throw new \LogicException('Your platform does not support an [uint64_t] types');
        }

        parent::__construct(...$elements);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'uint64_t';
    }
}
