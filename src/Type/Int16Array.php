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
class Int16Array extends UInt8Array
{
    /**
     * @var int
     */
    public const MIN_VALUE = -2 ** 15;

    /**
     * @var int
     */
    public const MAX_VALUE = 2 ** 15 - 1;

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'int16_t';
    }
}
