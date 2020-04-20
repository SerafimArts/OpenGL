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
use Serafim\FFILoader\LibraryInterface;
use Serafim\FFILoader\Loader;

/**
 * Trait KernelTrait
 */
trait KernelTrait
{
    /**
     * @var \FFI|mixed
     */
    public static \FFI $ffi;

    /**
     * @var LibraryInformation
     */
    public static LibraryInformation $info;

    /**
     * @param LibraryInterface $library
     * @return void
     */
    public static function init(LibraryInterface $library): void
    {
        $loader = new Loader();

        self::$info = $loader->load($library);
        self::$ffi = &self::$info->ffi;
    }

    /**
     * @param string $type
     * @param array $data
     * @return CData
     */
    public static function arrayOf(string $type, array $data): CData
    {
        $instance = self::new($type . '[' . \count($data) . ']');

        foreach ($data as $i => $value) {
            $instance[$i] = $value;
        }

        return $instance;
    }

    /**
     * @param string $string
     * @return CData
     */
    public static function charPtr(string $string): CData
    {
        $charArray = self::stringOf($string);

        return \FFI::addr($charArray[0]);
    }

    /**
     * @param string $string
     * @return CData
     */
    public static function stringOf(string $string): CData
    {
        $nullTerminated = $string . "\0";

        $length = \strlen($nullTerminated);

        $instance = self::new('char[' . $length . ']', false);

        \FFI::memcpy($instance, $nullTerminated, $length);

        return $instance;
    }

    /**
     * @param string|CType $type
     * @param bool $owned
     * @param bool $persistent
     * @return CData
     */
    public static function new($type, bool $owned = true, bool $persistent = false): CData
    {
        /** @noinspection StaticInvocationViaThisInspection */
        return self::$ffi->new($type, $owned, $persistent);
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
    public static function cast($type, CData $pointer): CData
    {
        /** @noinspection StaticInvocationViaThisInspection */
        return self::$ffi->cast($type, $pointer);
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
    public static function type($type): CType
    {
        /** @noinspection StaticInvocationViaThisInspection */
        return self::$ffi->type($type);
    }
}
