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
 * @mixin CData
 */
abstract class CType implements CTypeInterface
{
    /**
     * @var CData
     */
    public CData $cdata;

    /**
     * @return int
     */
    public function sizeOf(): int
    {
        return \FFI::sizeof($this->cdata);
    }
}
