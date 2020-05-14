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

use FFI\CData;

/**
 * The OpenGL functionality up to version 2.1. Includes the deprecated symbols of the Compatibility Profile.
 *
 * OpenGL 2.1 implementations must support at least revision 1.20 of the OpenGL Shading Language.
 *
 * Extensions promoted to core in this release:
 *
 * - ARB_pixel_buffer_object @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_pixel_buffer_object.txt
 * - EXT_texture_sRGB @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_texture_sRGB.txt
 *
 * @version 2.1
 */
class GL21 extends GL20
{
    /**
     * Accepted by the $pname parameter of GetBooleanv, GetIntegerv, GetFloatv, and GetDoublev.
     *
     * @since 2.1
     * @var int
     */
    public const GL_CURRENT_RASTER_SECONDARY_COLOR = 0x845F;

    /**
     * Returned by the $type parameter of GetActiveUniform.
     *
     * @since 2.1
     * @var int
     */
    public const
        GL_FLOAT_MAT2x3 = 0x8B65,
        GL_FLOAT_MAT2x4 = 0x8B66,
        GL_FLOAT_MAT3x2 = 0x8B67,
        GL_FLOAT_MAT3x4 = 0x8B68,
        GL_FLOAT_MAT4x2 = 0x8B69,
        GL_FLOAT_MAT4x3 = 0x8B6A;

    /**
     * Accepted by the $target parameters of BindBuffer, BufferData, BufferSubData, MapBuffer, UnmapBuffer,
     * GetBufferSubData, GetBufferParameteriv, and GetBufferPointerv.
     *
     * @since 2.1
     * @var int
     */
    public const
        GL_PIXEL_PACK_BUFFER = 0x88EB,
        GL_PIXEL_UNPACK_BUFFER = 0x88EC;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetIntegerv, GetFloatv, and GetDoublev.
     *
     * @since 2.1
     * @var int
     */
    public const
        GL_PIXEL_PACK_BUFFER_BINDING = 0x88ED,
        GL_PIXEL_UNPACK_BUFFER_BINDING = 0x88EF;

    /**
     * Accepted by the $internalformat parameter of TexImage1D, TexImage2D, TexImage3D, CopyTexImage1D, CopyTexImage2D.
     *
     * @since 2.1
     * @var int
     */
    public const
        GL_SRGB = 0x8C40,
        GL_SRGB8 = 0x8C41,
        GL_SRGB_ALPHA = 0x8C42,
        GL_SRGB8_ALPHA8 = 0x8C43,
        GL_SLUMINANCE_ALPHA = 0x8C44,
        GL_SLUMINANCE8_ALPHA8 = 0x8C45,
        GL_SLUMINANCE = 0x8C46,
        GL_SLUMINANCE8 = 0x8C47,
        GL_COMPRESSED_SRGB = 0x8C48,
        GL_COMPRESSED_SRGB_ALPHA = 0x8C49,
        GL_COMPRESSED_SLUMINANCE = 0x8C4A,
        GL_COMPRESSED_SLUMINANCE_ALPHA = 0x8C4B;

    /**
     * {@see GL21::uniformSubroutines} loads all active subroutine uniforms for shader stage $shadertype of the
     * current program with subroutine indices from $indices, storing $indices[i] into the uniform at location $i.
     * $count must be equal to the value of {@see GL21::GL_ACTIVE_SUBROUTINE_UNIFORM_LOCATIONS} for the program
     * currently in use at shader stage $shadertype. Furthermore, all values in $indices must be less than the value
     * of {@see GL21::GL_ACTIVE_SUBROUTINES} for the shader stage.
     *
     * @see http://docs.gl/gl4/glUniformSubroutines
     * @since 2.1
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function uniformMatrix2x3fv(int $location, int $count, int $transpose, ?CData $value): void
    {
        $__proc = $this->proc('glUniformMatrix2x3fv',
            'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $__proc($location, $count, $transpose, $value);
    }

    /**
     * {@see GL21::uniformSubroutines} loads all active subroutine uniforms for shader stage $shadertype of the
     * current program with subroutine indices from $indices, storing $indices[i] into the uniform at location $i.
     * $count must be equal to the value of {@see GL21::GL_ACTIVE_SUBROUTINE_UNIFORM_LOCATIONS} for the program
     * currently in use at shader stage $shadertype. Furthermore, all values in $indices must be less than the value
     * of {@see GL21::GL_ACTIVE_SUBROUTINES} for the shader stage.
     *
     * @see http://docs.gl/gl4/glUniformSubroutines
     * @since 2.1
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function uniformMatrix2x4fv(int $location, int $count, int $transpose, ?CData $value): void
    {
        $__proc = $this->proc('glUniformMatrix2x4fv',
            'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $__proc($location, $count, $transpose, $value);
    }

    /**
     * {@see GL21::uniformSubroutines} loads all active subroutine uniforms for shader stage $shadertype of the
     * current program with subroutine indices from $indices, storing $indices[i] into the uniform at location $i.
     * $count must be equal to the value of {@see GL21::GL_ACTIVE_SUBROUTINE_UNIFORM_LOCATIONS} for the program
     * currently in use at shader stage $shadertype. Furthermore, all values in $indices must be less than the value
     * of {@see GL21::GL_ACTIVE_SUBROUTINES} for the shader stage.
     *
     * @see http://docs.gl/gl4/glUniformSubroutines
     * @since 2.1
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function uniformMatrix3x2fv(int $location, int $count, int $transpose, ?CData $value): void
    {
        $__proc = $this->proc('glUniformMatrix3x2fv',
            'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $__proc($location, $count, $transpose, $value);
    }

    /**
     * {@see GL21::uniformSubroutines} loads all active subroutine uniforms for shader stage $shadertype of the
     * current program with subroutine indices from $indices, storing $indices[i] into the uniform at location $i.
     * $count must be equal to the value of {@see GL21::GL_ACTIVE_SUBROUTINE_UNIFORM_LOCATIONS} for the program
     * currently in use at shader stage $shadertype. Furthermore, all values in $indices must be less than the value
     * of {@see GL21::GL_ACTIVE_SUBROUTINES} for the shader stage.
     *
     * @see http://docs.gl/gl4/glUniformSubroutines
     * @since 2.1
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function uniformMatrix3x4fv(int $location, int $count, int $transpose, ?CData $value): void
    {
        $__proc = $this->proc('glUniformMatrix3x4fv',
            'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $__proc($location, $count, $transpose, $value);
    }

    /**
     * {@see GL21::uniformSubroutines} loads all active subroutine uniforms for shader stage $shadertype of the
     * current program with subroutine indices from $indices, storing $indices[i] into the uniform at location $i.
     * $count must be equal to the value of {@see GL21::GL_ACTIVE_SUBROUTINE_UNIFORM_LOCATIONS} for the program
     * currently in use at shader stage $shadertype. Furthermore, all values in $indices must be less than the value
     * of {@see GL21::GL_ACTIVE_SUBROUTINES} for the shader stage.
     *
     * @see http://docs.gl/gl4/glUniformSubroutines
     * @since 2.1
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function uniformMatrix4x2fv(int $location, int $count, int $transpose, ?CData $value): void
    {
        $__proc = $this->proc('glUniformMatrix4x2fv',
            'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $__proc($location, $count, $transpose, $value);
    }

    /**
     * {@see GL21::uniformSubroutines} loads all active subroutine uniforms for shader stage $shadertype of the
     * current program with subroutine indices from $indices, storing $indices[i] into the uniform at location $i.
     * $count must be equal to the value of {@see GL21::GL_ACTIVE_SUBROUTINE_UNIFORM_LOCATIONS} for the program
     * currently in use at shader stage $shadertype. Furthermore, all values in $indices must be less than the value
     * of {@see GL21::GL_ACTIVE_SUBROUTINES} for the shader stage.
     *
     * @see http://docs.gl/gl4/glUniformSubroutines
     * @since 2.1
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function uniformMatrix4x3fv(int $location, int $count, int $transpose, ?CData $value): void
    {
        $__proc = $this->proc('glUniformMatrix4x3fv',
            'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $__proc($location, $count, $transpose, $value);
    }
}
