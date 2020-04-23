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
class Float64Array extends Float32Array
{
    /**
     * @var float
     */
    public const MIN_VALUE = -2.225074e308;

    /**
     * @var float
     */
    public const MAX_VALUE = 1.797693e+308;

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'double';
    }
}
