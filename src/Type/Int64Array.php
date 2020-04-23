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
class Int64Array extends UInt32Array
{
    /**
     * @var int
     */
    public const MIN_VALUE = -2 ** 63;

    /**
     * @var int
     */
    public const MAX_VALUE = 2 ** 63 - 1;

    /**
     * Int64Array constructor.
     *
     * @param mixed ...$elements
     */
    public function __construct(...$elements)
    {
        if (\PHP_INT_SIZE < 8) {
            throw new \LogicException('Your platform does not support an [int64_t] types');
        }

        parent::__construct(...$elements);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'int64_t';
    }
}
