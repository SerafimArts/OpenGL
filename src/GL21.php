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
 * @version 2.1
 */
class GL21 extends GL20
{
    /**
     * @since 2.1
     * @var int
     */
    public const GL_PIXEL_PACK_BUFFER = 0x88EB;
    /**
     * @since 2.1
     * @var int
     */
    public const GL_PIXEL_UNPACK_BUFFER = 0x88EC;
    /**
     * @since 2.1
     * @var int
     */
    public const GL_PIXEL_PACK_BUFFER_BINDING = 0x88ED;
    /**
     * @since 2.1
     * @var int
     */
    public const GL_PIXEL_UNPACK_BUFFER_BINDING = 0x88EF;
    /**
     * @since 2.1
     * @var int
     */
    public const GL_FLOAT_MAT2x3 = 0x8B65;
    /**
     * @since 2.1
     * @var int
     */
    public const GL_FLOAT_MAT2x4 = 0x8B66;
    /**
     * @since 2.1
     * @var int
     */
    public const GL_FLOAT_MAT3x2 = 0x8B67;
    /**
     * @since 2.1
     * @var int
     */
    public const GL_FLOAT_MAT3x4 = 0x8B68;
    /**
     * @since 2.1
     * @var int
     */
    public const GL_FLOAT_MAT4x2 = 0x8B69;
    /**
     * @since 2.1
     * @var int
     */
    public const GL_FLOAT_MAT4x3 = 0x8B6A;
    /**
     * @since 2.1
     * @var int
     */
    public const GL_SRGB = 0x8C40;
    /**
     * @since 2.1
     * @var int
     */
    public const GL_SRGB8 = 0x8C41;
    /**
     * @since 2.1
     * @var int
     */
    public const GL_SRGB_ALPHA = 0x8C42;
    /**
     * @since 2.1
     * @var int
     */
    public const GL_SRGB8_ALPHA8 = 0x8C43;
    /**
     * @since 2.1
     * @var int
     */
    public const GL_COMPRESSED_SRGB = 0x8C48;
    /**
     * @since 2.1
     * @var int
     */
    public const GL_COMPRESSED_SRGB_ALPHA = 0x8C49;

    /**
     * {@see GL46::glUniformSubroutines} loads all active subroutine uniforms for shader stage $shadertype of the
     * current program with subroutine indices from $indices, storing $indices[i] into the uniform at location $i.
     * $count must be equal to the value of {@see GL46::GL_ACTIVE_SUBROUTINE_UNIFORM_LOCATIONS} for the program
     * currently in use at shader stage $shadertype. Furthermore, all values in $indices must be less than the value
     * of {@see GL46::GL_ACTIVE_SUBROUTINES} for the shader stage.
     *
     * @see http://docs.gl/gl4/glUniformSubroutines
     * @since 2.1
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|null $value
     * @return void
     */
    public function uniformMatrix2x3fv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        $__proc = $this->getProcAs('glUniformMatrix2x3fv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $__proc($location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glUniformSubroutines} loads all active subroutine uniforms for shader stage $shadertype of the
     * current program with subroutine indices from $indices, storing $indices[i] into the uniform at location $i.
     * $count must be equal to the value of {@see GL46::GL_ACTIVE_SUBROUTINE_UNIFORM_LOCATIONS} for the program
     * currently in use at shader stage $shadertype. Furthermore, all values in $indices must be less than the value
     * of {@see GL46::GL_ACTIVE_SUBROUTINES} for the shader stage.
     *
     * @see http://docs.gl/gl4/glUniformSubroutines
     * @since 2.1
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|null $value
     * @return void
     */
    public function uniformMatrix2x4fv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        $__proc = $this->getProcAs('glUniformMatrix2x4fv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $__proc($location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glUniformSubroutines} loads all active subroutine uniforms for shader stage $shadertype of the
     * current program with subroutine indices from $indices, storing $indices[i] into the uniform at location $i.
     * $count must be equal to the value of {@see GL46::GL_ACTIVE_SUBROUTINE_UNIFORM_LOCATIONS} for the program
     * currently in use at shader stage $shadertype. Furthermore, all values in $indices must be less than the value
     * of {@see GL46::GL_ACTIVE_SUBROUTINES} for the shader stage.
     *
     * @see http://docs.gl/gl4/glUniformSubroutines
     * @since 2.1
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|null $value
     * @return void
     */
    public function uniformMatrix3x2fv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        $__proc = $this->getProcAs('glUniformMatrix3x2fv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $__proc($location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glUniformSubroutines} loads all active subroutine uniforms for shader stage $shadertype of the
     * current program with subroutine indices from $indices, storing $indices[i] into the uniform at location $i.
     * $count must be equal to the value of {@see GL46::GL_ACTIVE_SUBROUTINE_UNIFORM_LOCATIONS} for the program
     * currently in use at shader stage $shadertype. Furthermore, all values in $indices must be less than the value
     * of {@see GL46::GL_ACTIVE_SUBROUTINES} for the shader stage.
     *
     * @see http://docs.gl/gl4/glUniformSubroutines
     * @since 2.1
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|null $value
     * @return void
     */
    public function uniformMatrix3x4fv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        $__proc = $this->getProcAs('glUniformMatrix3x4fv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $__proc($location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glUniformSubroutines} loads all active subroutine uniforms for shader stage $shadertype of the
     * current program with subroutine indices from $indices, storing $indices[i] into the uniform at location $i.
     * $count must be equal to the value of {@see GL46::GL_ACTIVE_SUBROUTINE_UNIFORM_LOCATIONS} for the program
     * currently in use at shader stage $shadertype. Furthermore, all values in $indices must be less than the value
     * of {@see GL46::GL_ACTIVE_SUBROUTINES} for the shader stage.
     *
     * @see http://docs.gl/gl4/glUniformSubroutines
     * @since 2.1
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|null $value
     * @return void
     */
    public function uniformMatrix4x2fv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        $__proc = $this->getProcAs('glUniformMatrix4x2fv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $__proc($location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glUniformSubroutines} loads all active subroutine uniforms for shader stage $shadertype of the
     * current program with subroutine indices from $indices, storing $indices[i] into the uniform at location $i.
     * $count must be equal to the value of {@see GL46::GL_ACTIVE_SUBROUTINE_UNIFORM_LOCATIONS} for the program
     * currently in use at shader stage $shadertype. Furthermore, all values in $indices must be less than the value
     * of {@see GL46::GL_ACTIVE_SUBROUTINES} for the shader stage.
     *
     * @see http://docs.gl/gl4/glUniformSubroutines
     * @since 2.1
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|null $value
     * @return void
     */
    public function uniformMatrix4x3fv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        $__proc = $this->getProcAs('glUniformMatrix4x3fv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $__proc($location, $count, $transpose, $value);
    }
}
