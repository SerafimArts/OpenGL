<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\OpenGL\Type;

/**
 * Interface CArrayTypeInterface
 */
interface CArrayTypeInterface extends
    CTypeInterface,
    \Countable,
    \IteratorAggregate,
    \ArrayAccess
{

}
