<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\OpenGL;

use FFI\CData;
use FFI\CPtr;
use FFI\CStruct;

/**
 * @mixin CStruct
 */
class GLsync extends CData
{
}

/**
 * @mixin CStruct
 * @mixin CPtr
 * @mixin GLsync
 */
class GLsyncPtr extends CData
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): GLsync
    {
    }

    private function offsetSet(int $i, GLsync $d): void
    {
    }
}
