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
class Float80Array extends Float64Array
{
    /**
     * @var float
     */
    public const MIN_VALUE = -3.362103e4932;

    /**
     * @var float
     */
    public const MAX_VALUE = 1.189731e+4932;

    /**
     * Float80Array constructor.
     *
     * @param mixed ...$elements
     */
    public function __construct(...$elements)
    {
        if (\PHP_INT_SIZE < 8) {
            throw new \LogicException('Your platform does not support a [long double] types');
        }

        parent::__construct(...$elements);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'long double';
    }
}
