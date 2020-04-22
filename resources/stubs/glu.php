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
class GLUquadric extends CData
{
}

/**
 * @mixin CStruct
 * @mixin CPtr
 * @mixin GLUquadric
 */
class GLUquadricPtr extends CData
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): GLUquadric
    {
    }

    private function offsetSet(int $i, GLUquadric $d): void
    {
    }
}

/**
 * @mixin CStruct
 */
class GLUtesselator extends CData
{
}

/**
 * @mixin CStruct
 * @mixin CPtr
 * @mixin GLUtesselator
 */
class GLUtesselatorPtr extends CData
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): GLUtesselator
    {
    }

    private function offsetSet(int $i, GLUtesselator $d): void
    {
    }
}

/**
 * @mixin CStruct
 */
class GLUnurbs extends CData
{
}

/**
 * @mixin CStruct
 * @mixin CPtr
 * @mixin GLUnurbs
 */
class GLUnurbsPtr extends CData
{
    private function __construct()
    {
    }

    private function offsetGet(int $i): GLUnurbs
    {
    }

    private function offsetSet(int $i, GLUnurbs $d): void
    {
    }
}

