<?php

/**
 * This file is part of OpenGL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * MACHINE GENERATED FILE, DO NOT EDIT
 */

declare(strict_types=1);

namespace Serafim\OpenGL;

/**
 * The OpenGL functionality up to version 2.1. Includes the deprecated symbols of the Compatibility Profile.
 *
 * OpenGL 2.1 implementations must support at least revision 1.20 of the OpenGL Shading Language.
 *
 * Extensions promoted to core in this release:
 *
 * - ARB_pixel_buffer_object @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_pixel_buffer_object.txt
 * - EXT_texture_sRGB @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_texture_sRGB.txt
 */
class GL21 extends GL20
{
    /**
     * @var int
     * @since 2.1
     */
    public const GL_PIXEL_PACK_BUFFER = 0x88eb;
    /**
     * @var int
     * @since 2.1
     */
    public const GL_PIXEL_UNPACK_BUFFER = 0x88ec;
    /**
     * @var int
     * @since 2.1
     */
    public const GL_PIXEL_PACK_BUFFER_BINDING = 0x88ed;
    /**
     * @var int
     * @since 2.1
     */
    public const GL_PIXEL_UNPACK_BUFFER_BINDING = 0x88ef;
    /**
     * @var int
     * @since 2.1
     */
    public const GL_FLOAT_MAT2x3 = 0x8b65;
    /**
     * @var int
     * @since 2.1
     */
    public const GL_FLOAT_MAT2x4 = 0x8b66;
    /**
     * @var int
     * @since 2.1
     */
    public const GL_FLOAT_MAT3x2 = 0x8b67;
    /**
     * @var int
     * @since 2.1
     */
    public const GL_FLOAT_MAT3x4 = 0x8b68;
    /**
     * @var int
     * @since 2.1
     */
    public const GL_FLOAT_MAT4x2 = 0x8b69;
    /**
     * @var int
     * @since 2.1
     */
    public const GL_FLOAT_MAT4x3 = 0x8b6a;
    /**
     * @var int
     * @since 2.1
     */
    public const GL_SRGB = 0x8c40;
    /**
     * @var int
     * @since 2.1
     */
    public const GL_SRGB8 = 0x8c41;
    /**
     * @var int
     * @since 2.1
     */
    public const GL_SRGB_ALPHA = 0x8c42;
    /**
     * @var int
     * @since 2.1
     */
    public const GL_SRGB8_ALPHA8 = 0x8c43;
    /**
     * @var int
     * @since 2.1
     */
    public const GL_COMPRESSED_SRGB = 0x8c48;
    /**
     * @var int
     * @since 2.1
     */
    public const GL_COMPRESSED_SRGB_ALPHA = 0x8c49;

    /**
     * @since 2.1
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glUniformMatrix2x3fv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '2.1') >= 0, __FUNCTION__ . ' is available since OpenGL 2.1, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glUniformMatrix2x3fv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($location, $count, $transpose, $value);
    }

    /**
     * @since 2.1
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glUniformMatrix3x2fv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '2.1') >= 0, __FUNCTION__ . ' is available since OpenGL 2.1, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glUniformMatrix3x2fv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($location, $count, $transpose, $value);
    }

    /**
     * @since 2.1
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glUniformMatrix2x4fv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '2.1') >= 0, __FUNCTION__ . ' is available since OpenGL 2.1, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glUniformMatrix2x4fv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($location, $count, $transpose, $value);
    }

    /**
     * @since 2.1
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glUniformMatrix4x2fv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '2.1') >= 0, __FUNCTION__ . ' is available since OpenGL 2.1, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glUniformMatrix4x2fv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($location, $count, $transpose, $value);
    }

    /**
     * @since 2.1
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glUniformMatrix3x4fv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '2.1') >= 0, __FUNCTION__ . ' is available since OpenGL 2.1, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glUniformMatrix3x4fv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($location, $count, $transpose, $value);
    }

    /**
     * @since 2.1
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glUniformMatrix4x3fv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '2.1') >= 0, __FUNCTION__ . ' is available since OpenGL 2.1, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glUniformMatrix4x3fv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($location, $count, $transpose, $value);
    }
}
