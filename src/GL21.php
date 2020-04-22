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

use Serafim\OpenGL\Support\Assert;

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
     * {@see GL46::glUniformSubroutines} loads all active subroutine uniforms
     * for shader stage $shadertype of the current program with subroutine
     * indices from $indices, storing $indices[i] into the uniform at
     * location $i. $count must be equal to the value of
     * {@see GL46::GL_ACTIVE_SUBROUTINE_UNIFORM_LOCATIONS} for the program
     * currently in use at shader stage $shadertype. Furthermore, all values
     * in $indices must be less than the value of
     * {@see GL46::GL_ACTIVE_SUBROUTINES} for the shader stage.
     *
     * @see http://docs.gl/gl4/glUniformSubroutines
     * @since 2.1
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function glUniformMatrix2x3fv($location, $count, $transpose, ?\FFI\CData $value): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $transpose = $transpose instanceof \FFI\CData ? $transpose->cdata : $transpose;

        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint8($transpose), 'Argument $transpose must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniformMatrix2x3fv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glUniformSubroutines} loads all active subroutine uniforms
     * for shader stage $shadertype of the current program with subroutine
     * indices from $indices, storing $indices[i] into the uniform at
     * location $i. $count must be equal to the value of
     * {@see GL46::GL_ACTIVE_SUBROUTINE_UNIFORM_LOCATIONS} for the program
     * currently in use at shader stage $shadertype. Furthermore, all values
     * in $indices must be less than the value of
     * {@see GL46::GL_ACTIVE_SUBROUTINES} for the shader stage.
     *
     * @see http://docs.gl/gl4/glUniformSubroutines
     * @since 2.1
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function glUniformMatrix3x2fv($location, $count, $transpose, ?\FFI\CData $value): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $transpose = $transpose instanceof \FFI\CData ? $transpose->cdata : $transpose;

        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint8($transpose), 'Argument $transpose must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniformMatrix3x2fv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glUniformSubroutines} loads all active subroutine uniforms
     * for shader stage $shadertype of the current program with subroutine
     * indices from $indices, storing $indices[i] into the uniform at
     * location $i. $count must be equal to the value of
     * {@see GL46::GL_ACTIVE_SUBROUTINE_UNIFORM_LOCATIONS} for the program
     * currently in use at shader stage $shadertype. Furthermore, all values
     * in $indices must be less than the value of
     * {@see GL46::GL_ACTIVE_SUBROUTINES} for the shader stage.
     *
     * @see http://docs.gl/gl4/glUniformSubroutines
     * @since 2.1
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function glUniformMatrix2x4fv($location, $count, $transpose, ?\FFI\CData $value): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $transpose = $transpose instanceof \FFI\CData ? $transpose->cdata : $transpose;

        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint8($transpose), 'Argument $transpose must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniformMatrix2x4fv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glUniformSubroutines} loads all active subroutine uniforms
     * for shader stage $shadertype of the current program with subroutine
     * indices from $indices, storing $indices[i] into the uniform at
     * location $i. $count must be equal to the value of
     * {@see GL46::GL_ACTIVE_SUBROUTINE_UNIFORM_LOCATIONS} for the program
     * currently in use at shader stage $shadertype. Furthermore, all values
     * in $indices must be less than the value of
     * {@see GL46::GL_ACTIVE_SUBROUTINES} for the shader stage.
     *
     * @see http://docs.gl/gl4/glUniformSubroutines
     * @since 2.1
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function glUniformMatrix4x2fv($location, $count, $transpose, ?\FFI\CData $value): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $transpose = $transpose instanceof \FFI\CData ? $transpose->cdata : $transpose;

        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint8($transpose), 'Argument $transpose must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniformMatrix4x2fv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glUniformSubroutines} loads all active subroutine uniforms
     * for shader stage $shadertype of the current program with subroutine
     * indices from $indices, storing $indices[i] into the uniform at
     * location $i. $count must be equal to the value of
     * {@see GL46::GL_ACTIVE_SUBROUTINE_UNIFORM_LOCATIONS} for the program
     * currently in use at shader stage $shadertype. Furthermore, all values
     * in $indices must be less than the value of
     * {@see GL46::GL_ACTIVE_SUBROUTINES} for the shader stage.
     *
     * @see http://docs.gl/gl4/glUniformSubroutines
     * @since 2.1
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function glUniformMatrix3x4fv($location, $count, $transpose, ?\FFI\CData $value): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $transpose = $transpose instanceof \FFI\CData ? $transpose->cdata : $transpose;

        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint8($transpose), 'Argument $transpose must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniformMatrix3x4fv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glUniformSubroutines} loads all active subroutine uniforms
     * for shader stage $shadertype of the current program with subroutine
     * indices from $indices, storing $indices[i] into the uniform at
     * location $i. $count must be equal to the value of
     * {@see GL46::GL_ACTIVE_SUBROUTINE_UNIFORM_LOCATIONS} for the program
     * currently in use at shader stage $shadertype. Furthermore, all values
     * in $indices must be less than the value of
     * {@see GL46::GL_ACTIVE_SUBROUTINES} for the shader stage.
     *
     * @see http://docs.gl/gl4/glUniformSubroutines
     * @since 2.1
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function glUniformMatrix4x3fv($location, $count, $transpose, ?\FFI\CData $value): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $transpose = $transpose instanceof \FFI\CData ? $transpose->cdata : $transpose;

        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint8($transpose), 'Argument $transpose must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniformMatrix4x3fv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($location, $count, $transpose, $value);
    }
}
