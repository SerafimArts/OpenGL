<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\OpenGL\Support;

use FFI\CData;
use FFI\CPtr;
use FFI\CType;
use Serafim\FFILoader\LibraryInformation;
use Serafim\OpenGL\Util;

/**
 * Trait KernelTrait
 */
trait KernelTrait
{
    /**
     * @var LibraryInformation
     */
    public LibraryInformation $info;

    /**
     * @param string $type
     * @param array $data
     * @return CData
     */
    public function array(string $type, array $data): CData
    {
        return Util::array($type, $data, $this->info->ffi);
    }

    /**
     * @param string $string
     * @return CData
     */
    public function charPtr(string $string): CData
    {
        return Util::charPtr($string);
    }

    /**
     * @param string $string
     * @return CData
     */
    public function string(string $string): CData
    {
        return Util::string($string);
    }

    /**
     * @param string $struct
     * @param array $initializer
     * @return CData
     */
    public function struct(string $struct, array $initializer = []): CData
    {
        return Util::struct($struct, $initializer, $this->info->ffi);
    }

    /**
     * @param string|CType $type
     * @param bool $owned
     * @param bool $persistent
     * @return CData
     */
    public function new($type, bool $owned = true, bool $persistent = false): CData
    {
        /** @noinspection StaticInvocationViaThisInspection */
        return $this->info->ffi->new($type, $owned, $persistent);
    }

    /**
     * Casts given $pointer to another C type, specified by C declaration
     * string or FFI\CType object.
     *
     * This function may be called statically and use only predefined
     * types, or as a method of previously created FFI object. In last
     * case the first argument may reuse all type and tag names
     * defined in FFI::cdef().
     *
     * @param string|CType $type
     * @param CData|CPtr $pointer
     * @return CData
     */
    public function cast($type, CData $pointer): CData
    {
        /** @noinspection StaticInvocationViaThisInspection */
        return $this->info->ffi->cast($type, $pointer);
    }

    /**
     * This function creates and returns a FFI\CType object, representng
     * type of the given C type declaration string.
     *
     * FFI::type() may be called statically and use only predefined types,
     * or as a method of previously created FFI object. In last case the
     * first argument may reuse all type and tag names defined in
     * FFI::cdef().
     *
     * @param string|CType $type
     * @return CType
     */
    public function type($type): CType
    {
        /** @noinspection StaticInvocationViaThisInspection */
        return $this->info->ffi->type($type);
    }
}
