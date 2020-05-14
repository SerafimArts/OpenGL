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
 * @version 4.2
 */
class GL42 extends GL41
{
    /**
     * @since 4.2
     * @var int
     */
    public const GL_COPY_READ_BUFFER_BINDING = 0x8F36;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_COPY_WRITE_BUFFER_BINDING = 0x8F37;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_TRANSFORM_FEEDBACK_ACTIVE = 0x8E24;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_TRANSFORM_FEEDBACK_PAUSED = 0x8E23;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_UNPACK_COMPRESSED_BLOCK_WIDTH = 0x9127;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_UNPACK_COMPRESSED_BLOCK_HEIGHT = 0x9128;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_UNPACK_COMPRESSED_BLOCK_DEPTH = 0x9129;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_UNPACK_COMPRESSED_BLOCK_SIZE = 0x912A;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_PACK_COMPRESSED_BLOCK_WIDTH = 0x912B;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_PACK_COMPRESSED_BLOCK_HEIGHT = 0x912C;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_PACK_COMPRESSED_BLOCK_DEPTH = 0x912D;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_PACK_COMPRESSED_BLOCK_SIZE = 0x912E;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_NUM_SAMPLE_COUNTS = 0x9380;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_MIN_MAP_BUFFER_ALIGNMENT = 0x90BC;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_ATOMIC_COUNTER_BUFFER = 0x92C0;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_ATOMIC_COUNTER_BUFFER_BINDING = 0x92C1;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_ATOMIC_COUNTER_BUFFER_START = 0x92C2;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_ATOMIC_COUNTER_BUFFER_SIZE = 0x92C3;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_ATOMIC_COUNTER_BUFFER_DATA_SIZE = 0x92C4;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_ATOMIC_COUNTER_BUFFER_ACTIVE_ATOMIC_COUNTERS = 0x92C5;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_ATOMIC_COUNTER_BUFFER_ACTIVE_ATOMIC_COUNTER_INDICES = 0x92C6;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_ATOMIC_COUNTER_BUFFER_REFERENCED_BY_VERTEX_SHADER = 0x92C7;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_ATOMIC_COUNTER_BUFFER_REFERENCED_BY_TESS_CONTROL_SHADER = 0x92C8;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_ATOMIC_COUNTER_BUFFER_REFERENCED_BY_TESS_EVALUATION_SHADER = 0x92C9;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_ATOMIC_COUNTER_BUFFER_REFERENCED_BY_GEOMETRY_SHADER = 0x92CA;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_ATOMIC_COUNTER_BUFFER_REFERENCED_BY_FRAGMENT_SHADER = 0x92CB;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_MAX_VERTEX_ATOMIC_COUNTER_BUFFERS = 0x92CC;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_MAX_TESS_CONTROL_ATOMIC_COUNTER_BUFFERS = 0x92CD;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_MAX_TESS_EVALUATION_ATOMIC_COUNTER_BUFFERS = 0x92CE;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_MAX_GEOMETRY_ATOMIC_COUNTER_BUFFERS = 0x92CF;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_MAX_FRAGMENT_ATOMIC_COUNTER_BUFFERS = 0x92D0;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_MAX_COMBINED_ATOMIC_COUNTER_BUFFERS = 0x92D1;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_MAX_VERTEX_ATOMIC_COUNTERS = 0x92D2;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_MAX_TESS_CONTROL_ATOMIC_COUNTERS = 0x92D3;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_MAX_TESS_EVALUATION_ATOMIC_COUNTERS = 0x92D4;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_MAX_GEOMETRY_ATOMIC_COUNTERS = 0x92D5;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_MAX_FRAGMENT_ATOMIC_COUNTERS = 0x92D6;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_MAX_COMBINED_ATOMIC_COUNTERS = 0x92D7;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_MAX_ATOMIC_COUNTER_BUFFER_SIZE = 0x92D8;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_MAX_ATOMIC_COUNTER_BUFFER_BINDINGS = 0x92DC;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_ACTIVE_ATOMIC_COUNTER_BUFFERS = 0x92D9;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_UNIFORM_ATOMIC_COUNTER_BUFFER_INDEX = 0x92DA;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_UNSIGNED_INT_ATOMIC_COUNTER = 0x92DB;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_VERTEX_ATTRIB_ARRAY_BARRIER_BIT = 0x0001;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_ELEMENT_ARRAY_BARRIER_BIT = 0x0002;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_UNIFORM_BARRIER_BIT = 0x0004;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_TEXTURE_FETCH_BARRIER_BIT = 0x0008;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_SHADER_IMAGE_ACCESS_BARRIER_BIT = 0x0020;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_COMMAND_BARRIER_BIT = 0x0040;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_PIXEL_BUFFER_BARRIER_BIT = 0x0080;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_TEXTURE_UPDATE_BARRIER_BIT = 0x0100;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_BUFFER_UPDATE_BARRIER_BIT = 0x0200;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_FRAMEBUFFER_BARRIER_BIT = 0x0400;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_TRANSFORM_FEEDBACK_BARRIER_BIT = 0x0800;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_ATOMIC_COUNTER_BARRIER_BIT = 0x1000;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_ALL_BARRIER_BITS = 0xFFFF_FFFF;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_MAX_IMAGE_UNITS = 0x8F38;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_MAX_COMBINED_IMAGE_UNITS_AND_FRAGMENT_OUTPUTS = 0x8F39;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_IMAGE_BINDING_NAME = 0x8F3A;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_IMAGE_BINDING_LEVEL = 0x8F3B;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_IMAGE_BINDING_LAYERED = 0x8F3C;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_IMAGE_BINDING_LAYER = 0x8F3D;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_IMAGE_BINDING_ACCESS = 0x8F3E;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_IMAGE_1D = 0x904C;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_IMAGE_2D = 0x904D;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_IMAGE_3D = 0x904E;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_IMAGE_2D_RECT = 0x904F;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_IMAGE_CUBE = 0x9050;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_IMAGE_BUFFER = 0x9051;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_IMAGE_1D_ARRAY = 0x9052;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_IMAGE_2D_ARRAY = 0x9053;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_IMAGE_CUBE_MAP_ARRAY = 0x9054;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_IMAGE_2D_MULTISAMPLE = 0x9055;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_IMAGE_2D_MULTISAMPLE_ARRAY = 0x9056;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_INT_IMAGE_1D = 0x9057;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_INT_IMAGE_2D = 0x9058;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_INT_IMAGE_3D = 0x9059;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_INT_IMAGE_2D_RECT = 0x905A;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_INT_IMAGE_CUBE = 0x905B;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_INT_IMAGE_BUFFER = 0x905C;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_INT_IMAGE_1D_ARRAY = 0x905D;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_INT_IMAGE_2D_ARRAY = 0x905E;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_INT_IMAGE_CUBE_MAP_ARRAY = 0x905F;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_INT_IMAGE_2D_MULTISAMPLE = 0x9060;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_INT_IMAGE_2D_MULTISAMPLE_ARRAY = 0x9061;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_UNSIGNED_INT_IMAGE_1D = 0x9062;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_UNSIGNED_INT_IMAGE_2D = 0x9063;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_UNSIGNED_INT_IMAGE_3D = 0x9064;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_UNSIGNED_INT_IMAGE_2D_RECT = 0x9065;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_UNSIGNED_INT_IMAGE_CUBE = 0x9066;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_UNSIGNED_INT_IMAGE_BUFFER = 0x9067;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_UNSIGNED_INT_IMAGE_1D_ARRAY = 0x9068;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_UNSIGNED_INT_IMAGE_2D_ARRAY = 0x9069;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_UNSIGNED_INT_IMAGE_CUBE_MAP_ARRAY = 0x906A;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_UNSIGNED_INT_IMAGE_2D_MULTISAMPLE = 0x906B;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_UNSIGNED_INT_IMAGE_2D_MULTISAMPLE_ARRAY = 0x906C;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_MAX_IMAGE_SAMPLES = 0x906D;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_IMAGE_BINDING_FORMAT = 0x906E;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_IMAGE_FORMAT_COMPATIBILITY_TYPE = 0x90C7;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_IMAGE_FORMAT_COMPATIBILITY_BY_SIZE = 0x90C8;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_IMAGE_FORMAT_COMPATIBILITY_BY_CLASS = 0x90C9;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_MAX_VERTEX_IMAGE_UNIFORMS = 0x90CA;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_MAX_TESS_CONTROL_IMAGE_UNIFORMS = 0x90CB;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_MAX_TESS_EVALUATION_IMAGE_UNIFORMS = 0x90CC;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_MAX_GEOMETRY_IMAGE_UNIFORMS = 0x90CD;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_MAX_FRAGMENT_IMAGE_UNIFORMS = 0x90CE;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_MAX_COMBINED_IMAGE_UNIFORMS = 0x90CF;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_COMPRESSED_RGBA_BPTC_UNORM = 0x8E8C;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_COMPRESSED_SRGB_ALPHA_BPTC_UNORM = 0x8E8D;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_COMPRESSED_RGB_BPTC_SIGNED_FLOAT = 0x8E8E;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_COMPRESSED_RGB_BPTC_UNSIGNED_FLOAT = 0x8E8F;
    /**
     * @since 4.2
     * @var int
     */
    public const GL_TEXTURE_IMMUTABLE_FORMAT = 0x912F;

    /**
     * {@see GL46::glBindImageTexture} binds a single level of a texture to an image unit for the purpose of reading
     * and writing it from shaders. $unit specifies the zero-based index of the image unit to which to bind the
     * texture level. $texture specifies the name of an existing texture object to bind to the image unit. If
     * $texture is zero, then any existing binding to the image unit is broken. $level specifies the level of the
     * texture to bind to the image unit.
     *
     * If $texture is the name of a one-, two-, or three-dimensional array texture, a cube map or cube map array
     * texture, or a two-dimensional multisample array texture, then it is possible to bind either the entire array,
     * or only a single layer of the array to the image unit. In such cases, if $layered is {@see GL46::GL_TRUE}, the
     * entire array is attached to the image unit and $layer is ignored. However, if $layered is
     * {@see GL46::GL_FALSE} then $layer specifies the layer of the array to attach to the image unit.
     *
     * $access specifies the access types to be performed by shaders and may be set to {@see GL46::GL_READ_ONLY},
     * {@see GL46::GL_WRITE_ONLY}, or {@see GL46::GL_READ_WRITE} to indicate read-only, write-only or read-write
     * access, respectively. Violation of the access type specified in $access (for example, if a shader writes to an
     * image bound with $access set to {@see GL46::GL_READ_ONLY}) will lead to undefined results, possibly including
     * program termination.
     *
     * $format specifies the format that is to be used when performing formatted stores into the image from shaders.
     * $format must be compatible with the texture's internal format and must be one of the formats listed in the
     * following table.
     *
     *  Internal Image Formats        Image Unit Format     Format Qualifier       {@see GL46::GL_RGBA32F} `rgba32f`
     *  {@see GL46::GL_RGBA16F} `rgba16f`   {@see GL46::GL_RG32F} `rg32f`   {@see GL46::GL_RG16F} `rg16f`
     * {@see GL46::GL_R11F_G11F_B10F} `r11f_g11f_b10f`   {@see GL46::GL_R32F} `r32f`   {@see GL46::GL_R16F} `r16f`
     * {@see GL46::GL_RGBA32UI} `rgba32ui`   {@see GL46::GL_RGBA16UI} `rgba16ui`   {@see GL46::GL_RGB10_A2UI}
     * `rgb10_a2ui`   {@see GL46::GL_RGBA8UI} `rgba8ui`   {@see GL46::GL_RG32UI} `rg32ui`   {@see GL46::GL_RG16UI}
     * `rg16ui`   {@see GL46::GL_RG8UI} `rg8ui`   {@see GL46::GL_R32UI} `r32ui`   {@see GL46::GL_R16UI} `r16ui`
     * {@see GL46::GL_R8UI} `r8ui`   {@see GL46::GL_RGBA32I} `rgba32i`   {@see GL46::GL_RGBA16I} `rgba16i`
     * {@see GL46::GL_RGBA8I} `rgba8i`   {@see GL46::GL_RG32I} `rg32i`   {@see GL46::GL_RG16I} `rg16i`
     * {@see GL46::GL_RG8I} `rg8i`   {@see GL46::GL_R32I} `r32i`   {@see GL46::GL_R16I} `r16i`   {@see GL46::GL_R8I}
     * `r8i`   {@see GL46::GL_RGBA16} `rgba16`   {@see GL46::GL_RGB10_A2} `rgb10_a2`   {@see GL46::GL_RGBA8} `rgba8`
     *  {@see GL46::GL_RG16} `rg16`   {@see GL46::GL_RG8} `rg8`   {@see GL46::GL_R16} `r16`   {@see GL46::GL_R8} `r8`
     *   {@see GL46::GL_RGBA16_SNORM} `rgba16_snorm`   {@see GL46::GL_RGBA8_SNORM} `rgba8_snorm`
     * {@see GL46::GL_RG16_SNORM} `rg16_snorm`   {@see GL46::GL_RG8_SNORM} `rg8_snorm`   {@see GL46::GL_R16_SNORM}
     * `r16_snorm`   {@see GL46::GL_R8_SNORM} `r8_snorm`
     *
     * When a texture is bound to an image unit, the $format parameter for the image unit need not exactly match the
     * texture internal format as long as the formats are considered compatible as defined in the OpenGL
     * Specification. The matching criterion used for a given texture may be determined by calling
     * {@see GL46::glGetTexParameter} with $value set to {@see GL46::GL_IMAGE_FORMAT_COMPATIBILITY_TYPE}, with return
     * values of {@see GL46::GL_IMAGE_FORMAT_COMPATIBILITY_BY_SIZE} and
     * {@see GL46::GL_IMAGE_FORMAT_COMPATIBILITY_BY_CLASS}, specifying matches by size and class, respectively.
     *
     * @see http://docs.gl/gl4/glBindImageTexture
     * @since 4.2
     * @param int $unit
     * @param int $texture
     * @param int $level
     * @param int $layered
     * @param int $layer
     * @param int $access
     * @param int $format
     * @return void
     */
    public function bindImageTexture(int $unit, int $texture, int $level, int $layered, int $layer, int $access, int $format): void
    {
        $__proc = $this->getProcAs('glBindImageTexture', 'void (*)(GLuint unit, GLuint texture, GLint level, GLboolean layered, GLint layer, GLenum access, GLenum format)');
        $__proc($unit, $texture, $level, $layered, $layer, $access, $format);
    }

    /**
     * {@see GL46::glDrawArraysInstancedBaseInstance} behaves identically to {@see GL46::glDrawArrays} except that
     * $instancecount instances of the range of elements are executed and the value of the internal counter
     * $instanceID advances for each iteration. $instanceID is an internal 32-bit integer counter that may be read by
     * a vertex shader as {@see GL46::gl_InstanceID}.
     *
     * {@see GL46::glDrawArraysInstancedBaseInstance} has the same effect as:
     *
     * <code>
     *     if ( mode or count is invalid )
     *         generate appropriate error
     *     else {
     *         for (int i = 0; i < instancecount ; i++) {
     *             instanceID = i;
     *             glDrawArrays(mode, first, count);
     *         }
     *         instanceID = 0;
     *     }
     * </code>
     *
     * Specific vertex attributes may be classified as instanced through the use of
     * {@see GL46::glVertexAttribDivisor}. Instanced vertex attributes supply per-instance vertex data to the vertex
     * shader. The index of the vertex fetched from the enabled instanced vertex attribute arrays is calculated as:
     *     gl _ InstanceID  divisor   &amp;plus; baseInstance   . Note that $baseinstance does not affect the
     * shader-visible value of {@see GL46::gl_InstanceID}.
     *
     * @see http://docs.gl/gl4/glDrawArraysInstancedBaseInstance
     * @since 4.2
     * @param int $mode
     * @param int $first
     * @param int $count
     * @param int $instancecount
     * @param int $baseinstance
     * @return void
     */
    public function drawArraysInstancedBaseInstance(int $mode, int $first, int $count, int $instancecount, int $baseinstance): void
    {
        $__proc = $this->getProcAs('glDrawArraysInstancedBaseInstance', 'void (*)(GLenum mode, GLint first, GLsizei count, GLsizei instancecount, GLuint baseinstance)');
        $__proc($mode, $first, $count, $instancecount, $baseinstance);
    }

    /**
     * {@see GL46::glDrawElementsInstancedBaseInstance} behaves identically to {@see GL46::glDrawElements} except
     * that $instancecount instances of the set of elements are executed and the value of the internal counter
     * $instanceID advances for each iteration. $instanceID is an internal 32-bit integer counter that may be read by
     * a vertex shader as {@see GL46::gl_InstanceID}.
     *
     * {@see GL46::glDrawElementsInstancedBaseInstance} has the same effect as:
     *
     * <code>
     *     if (mode, count, or type is invalid )
     *         generate appropriate error
     *     else {
     *         for (int i = 0; i < instancecount ; i++) {
     *             instanceID = i;
     *             glDrawElements(mode, count, type, indices);
     *         }
     *         instanceID = 0;
     *     }
     * </code>
     *
     * Specific vertex attributes may be classified as instanced through the use of
     * {@see GL46::glVertexAttribDivisor}. Instanced vertex attributes supply per-instance vertex data to the vertex
     * shader. The index of the vertex fetched from the enabled instanced vertex attribute arrays is calculated as
     *    gl _ InstanceID  divisor   &amp;plus; baseInstance   . Note that $baseinstance does not affect the
     * shader-visible value of {@see GL46::gl_InstanceID}.
     *
     * @see http://docs.gl/gl4/glDrawElementsInstancedBaseInstance
     * @since 4.2
     * @param int $mode
     * @param int $count
     * @param int $type
     * @param \FFI\CData|null $indices
     * @param int $instancecount
     * @param int $baseinstance
     * @return void
     */
    public function drawElementsInstancedBaseInstance(int $mode, int $count, int $type, ?\FFI\CData $indices, int $instancecount, int $baseinstance): void
    {
        $__proc = $this->getProcAs('glDrawElementsInstancedBaseInstance', 'void (*)(GLenum mode, GLsizei count, GLenum type, const void *indices, GLsizei instancecount, GLuint baseinstance)');
        $__proc($mode, $count, $type, $indices, $instancecount, $baseinstance);
    }

    /**
     * {@see GL46::glDrawElementsInstancedBaseVertexBaseInstance} behaves identically to
     * {@see GL46::glDrawElementsInstanced} except that the ith element transferred by the corresponding draw call
     * will be taken from element $indices[i] + $basevertex of each enabled array. If the resulting value is larger
     * than the maximum value representable by $type, it is as if the calculation were upconverted to 32-bit unsigned
     * integers (with wrapping on overflow conditions). The operation is undefined if the sum would be negative.
     *
     * Specific vertex attributes may be classified as instanced through the use of
     * {@see GL46::glVertexAttribDivisor}. Instanced vertex attributes supply per-instance vertex data to the vertex
     * shader. The index of the vertex fetched from the enabled instanced vertex attribute arrays is calculated as
     *    gl _ InstanceID  divisor   &amp;plus; baseInstance   . Note that $baseinstance does not affect the
     * shader-visible value of {@see GL46::gl_InstanceID}.
     *
     * @see http://docs.gl/gl4/glDrawElementsInstancedBaseVertexBaseInstance
     * @since 4.2
     * @param int $mode
     * @param int $count
     * @param int $type
     * @param \FFI\CData|null $indices
     * @param int $instancecount
     * @param int $basevertex
     * @param int $baseinstance
     * @return void
     */
    public function drawElementsInstancedBaseVertexBaseInstance(int $mode, int $count, int $type, ?\FFI\CData $indices, int $instancecount, int $basevertex, int $baseinstance): void
    {
        $__proc = $this->getProcAs('glDrawElementsInstancedBaseVertexBaseInstance', 'void (*)(GLenum mode, GLsizei count, GLenum type, const void *indices, GLsizei instancecount, GLint basevertex, GLuint baseinstance)');
        $__proc($mode, $count, $type, $indices, $instancecount, $basevertex, $baseinstance);
    }

    /**
     * {@see GL46::glDrawTransformFeedbackInstanced} draws multiple copies of a range of primitives of a type
     * specified by $mode using a count retrieved from the transform feedback stream specified by $stream of the
     * transform feedback object specified by $id. Calling {@see GL46::glDrawTransformFeedbackInstanced} is
     * equivalent to calling {@see GL46::glDrawArraysInstanced} with $mode and $instancecount as specified, $first
     * set to zero, and $count set to the number of vertices captured on vertex stream zero the last time transform
     * feedback was active on the transform feedback object named by $id.
     *
     * Calling {@see GL46::glDrawTransformFeedbackInstanced} is equivalent to calling
     * {@see GL46::glDrawTransformFeedbackStreamInstanced} with $stream set to zero.
     *
     * @see http://docs.gl/gl4/glDrawTransformFeedbackInstanced
     * @since 4.2
     * @param int $mode
     * @param int $id
     * @param int $instancecount
     * @return void
     */
    public function drawTransformFeedbackInstanced(int $mode, int $id, int $instancecount): void
    {
        $__proc = $this->getProcAs('glDrawTransformFeedbackInstanced', 'void (*)(GLenum mode, GLuint id, GLsizei instancecount)');
        $__proc($mode, $id, $instancecount);
    }

    /**
     * {@see GL46::glDrawTransformFeedbackStreamInstanced} draws multiple copies of a range of primitives of a type
     * specified by $mode using a count retrieved from the transform feedback stream specified by $stream of the
     * transform feedback object specified by $id. Calling {@see GL46::glDrawTransformFeedbackStreamInstanced} is
     * equivalent to calling {@see GL46::glDrawArraysInstanced} with $mode and $instancecount as specified, $first
     * set to zero, and $count set to the number of vertices captured on vertex stream $stream the last time
     * transform feedback was active on the transform feedback object named by $id.
     *
     * Calling {@see GL46::glDrawTransformFeedbackInstanced} is equivalent to calling
     * {@see GL46::glDrawTransformFeedbackStreamInstanced} with $stream set to zero.
     *
     * @see http://docs.gl/gl4/glDrawTransformFeedbackStreamInstanced
     * @since 4.2
     * @param int $mode
     * @param int $id
     * @param int $stream
     * @param int $instancecount
     * @return void
     */
    public function drawTransformFeedbackStreamInstanced(int $mode, int $id, int $stream, int $instancecount): void
    {
        $__proc = $this->getProcAs('glDrawTransformFeedbackStreamInstanced', 'void (*)(GLenum mode, GLuint id, GLuint stream, GLsizei instancecount)');
        $__proc($mode, $id, $stream, $instancecount);
    }

    /**
     * {@see GL46::glGetActiveAtomicCounterBufferiv} retrieves information about the set of active atomic counter
     * buffers for a program object. $program is the name of a program object for which the command
     * {@see GL46::glLinkProgram} has been issued in the past. It is not necessary for $program to have been linked
     * successfully. The link may have failed because the number of active atomic counters exceeded the limits.
     *
     * $bufferIndex specifies the index of an active atomic counter buffer and must be in the range zero to the value
     * of {@see GL46::GL_ACTIVE_ATOMIC_COUNTER_BUFFERS} minus one. The value of
     * {@see GL46::GL_ACTIVE_ATOMIC_COUNTER_BUFFERS} for $program indicates the number of active atomic counter
     * buffer and can be queried with {@see GL46::glGetProgram}.
     *
     * If no error occurs, the parameter(s) specified by $pname are returned in $params. If an error is generated,
     * the contents of $params are not modified.
     *
     * If $pname is {@see GL46::GL_ATOMIC_COUNTER_BUFFER_BINDING}, then the index of the counter buffer binding point
     * associated with the active atomic counter buffer $bufferIndex for $program is returned.
     *
     * If $pname is {@see GL46::GL_ATOMIC_COUNTER_BUFFER_DATA_SIZE}, then the implementation-dependent minimum total
     * buffer object size, in baseic machine units, required to hold all active atomic counters in the atomic counter
     * binding point identified by $bufferIndex is returned.
     *
     * If $pname is {@see GL46::GL_ATOMIC_COUNTER_BUFFER_ACTIVE_ATOMIC_COUNTERS}, then the number of active atomic
     * counters for the atomic counter buffer identified by $bufferIndex is returned.
     *
     * If $pname is {@see GL46::GL_ATOMIC_COUNTER_BUFFER_ACTIVE_ATOMIC_COUNTER_INDICES}, then a list of the active
     * atomic counter indices for the atomic counter buffer identified by $bufferIndex is returned. The number of
     * elements that will be written into $params is the value of
     * {@see GL46::GL_ATOMIC_COUNTER_BUFFER_ACTIVE_ATOMIC_COUNTERS} for $bufferIndex.
     *
     * If $pname is {@see GL46::GL_ATOMIC_COUNTER_BUFFER_REFERENCED_BY_VERTEX_SHADER},
     * {@see GL46::GL_ATOMIC_COUNTER_BUFFER_REFERENCED_BY_TESS_CONTROL_SHADER},
     * {@see GL46::GL_ATOMIC_COUNTER_BUFFER_REFERENCED_BY_TESS_EVALUATION_SHADER},
     * {@see GL46::GL_ATOMIC_COUNTER_BUFFER_REFERENCED_BY_GEOMETRY_SHADER},
     * {@see GL46::GL_ATOMIC_COUNTER_BUFFER_REFERENCED_BY_FRAGMENT_SHADER},
     * {@see GL46::GL_ATOMIC_COUNTER_BUFFER_REFERENCED_BY_COMPUTE_SHADER} then a boolean value indicating whether the
     * atomic counter buffer identified by $bufferIndex is referenced by the vertex, tessellation control,
     * tessellation evaluation, geometry, fragment or compute processing stages of $program, respectively, is
     * returned.
     *
     * @see http://docs.gl/gl4/glGetActiveAtomicCounterBufferiv
     * @since 4.2
     * @param int $program
     * @param int $bufferIndex
     * @param int $pname
     * @param int|null $params
     * @return void
     */
    public function getActiveAtomicCounterBufferiv(int $program, int $bufferIndex, int $pname, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->getProcAs('glGetActiveAtomicCounterBufferiv', 'void (*)(GLuint program, GLuint bufferIndex, GLenum pname, GLint *params)');
            $__proc($program, $bufferIndex, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL46::glGetInternalformativ} and {@see GL46::glGetInternalformati64v} retrieve information about
     * implementation-dependent support for internal formats. $target indicates the target with which the internal
     * format will be used and must be one of {@see GL46::GL_RENDERBUFFER}, {@see GL46::GL_TEXTURE_2D_MULTISAMPLE},
     * or {@see GL46::GL_TEXTURE_2D_MULTISAMPLE_ARRAY}, corresponding to usage as a renderbuffer, two-dimensional
     * multisample texture or two-dimensional multisample array texture, respectively.
     *
     * $internalformat specifies the internal format about which to retrieve information and must be a
     * color-renderable, depth-renderable or stencil-renderable format.
     *
     * The information retrieved will be written to memory addressed by the pointer specified in $params. No more
     * than $bufSize integers will be written to this memory.
     *
     * If $pname is {@see GL46::GL_NUM_SAMPLE_COUNTS}, the number of sample counts that would be returned by querying
     * {@see GL46::GL_SAMPLES} will be returned in $params.
     *
     * If $pname is {@see GL46::GL_SAMPLES}, the sample counts supported for $internalformat and $target are written
     * into $params in descending numeric order. Only positive values are returned. Querying {@see GL46::GL_SAMPLES}
     * with $bufSize of one will return just the maximum supported number of samples for this format. The maximum
     * value in {@see GL46::GL_SAMPLES} is guaranteed to be at least the lowest of the following:    The value of
     * {@see GL46::GL_MAX_INTEGER_SAMPLES} if $internalformat is a signed or unsigned integer format.     The value
     * of {@see GL46::GL_MAX_DEPTH_TEXTURE_SAMPLES} if $internalformat is a depth- or stencil-renderable format and
     * $target is {@see GL46::GL_TEXTURE_2D_MULTISAMPLE}, {@see GL46::GL_TEXTURE_2D_MULTISAMPLE_ARRAY}.     The value
     * of {@see GL46::GL_MAX_COLOR_TEXTURE_SAMPLES} if $internalformat is a color-renderable format and $target is
     * {@see GL46::GL_TEXTURE_2D_MULTISAMPLE} or {@see GL46::GL_TEXTURE_2D_MULTISAMPLE_ARRAY}.    The value of
     * {@see GL46::GL_MAX_SAMPLES}.
     *
     * If $pname is {@see GL46::GL_INTERNALFORMAT_SUPPORTED}, $params is set to {@see GL46::GL_TRUE} if
     * $internalformat is a supported internal format for $target and to {@see GL46::GL_FALSE} otherwise.
     *
     * If $pname is {@see GL46::GL_INTERNALFORMAT_PREFERRED}, $params is set to {@see GL46::GL_TRUE} if
     * $internalformat is an format for $target that is preferred by the implementation and to {@see GL46::GL_FALSE}
     * otherwise.
     *
     * If $pname is {@see GL46::GL_INTERNALFORMAT_RED_SIZE}, {@see GL46::GL_INTERNALFORMAT_GREEN_SIZE},
     * {@see GL46::GL_INTERNALFORMAT_BLUE_SIZE}, {@see GL46::GL_INTERNALFORMAT_ALPHA_SIZE},
     * {@see GL46::GL_INTERNALFORMAT_DEPTH_SIZE}, {@see GL46::GL_INTERNALFORMAT_STENCIL_SIZE}, or
     * {@see GL46::GL_INTERNALFORMAT_SHARED_SIZE} then $params is set to the actual resolutions that would be used
     * for storing image array components for the resource for the red, green, blue, alpha, depth, stencil and shared
     * channels respectively. If $internalformat is a compressed internal format, then $params is set to the
     * component resolution of an uncompressed internal format that produces an image of roughly the same quality as
     * the compressed algorithm. If the internal format is unsupported, or if a particular component is not present
     * in the format, 0 is written to $params.
     *
     * If $pname is {@see GL46::GL_INTERNALFORMAT_RED_TYPE}, {@see GL46::GL_INTERNALFORMAT_GREEN_TYPE},
     * {@see GL46::GL_INTERNALFORMAT_BLUE_TYPE}, {@see GL46::GL_INTERNALFORMAT_ALPHA_TYPE},
     * {@see GL46::GL_INTERNALFORMAT_DEPTH_TYPE}, or {@see GL46::GL_INTERNALFORMAT_STENCIL_TYPE} then $params is set
     * to a token identifying the data type used to store the respective component. If the $internalformat represents
     * a compressed internal format then the types returned specify how components are interpreted after
     * decompression.
     *
     * If $pname is {@see GL46::GL_MAX_WIDTH}, {@see GL46::GL_MAX_HEIGHT}, {@see GL46::GL_MAX_DEPTH}, or
     * {@see GL46::GL_MAX_LAYERS} then $pname is filled with the maximum width, height, depth or layer count for
     * textures with internal format $internalformat, respectively. If $pname is
     * {@see GL46::GL_MAX_COMBINED_DIMENSIONS} then $pname is filled with the maximum combined dimensions of a
     * texture of the specified internal format.
     *
     * If $pname is {@see GL46::GL_COLOR_COMPONENTS} then $params is set to the value {@see GL46::GL_TRUE} if the
     * internal format contains any color component (i.e., red, green, blue or alpha) and to {@see GL46::GL_FALSE}
     * otherwise. If $pname is {@see GL46::GL_DEPTH_COMPONENTS} or {@see GL46::GL_STENCIL_COMPONENTS} then $params is
     * set to {@see GL46::GL_TRUE} if the internal format contains a depth or stencil component, respectively, and to
     * {@see GL46::GL_FALSE} otherwise.
     *
     * If $pname is {@see GL46::GL_COLOR_RENDERABLE}, {@see GL46::GL_DEPTH_RENDERABLE} or
     * {@see GL46::GL_STENCIL_RENDERABLE} then $params is set to {@see GL46::GL_TRUE} if the specified internal
     * format is color, depth or stencil renderable, respectively, and to {@see GL46::GL_FALSE} otherwise.
     *
     * If $pname is {@see GL46::GL_FRAMEBUFFER_RENDERABLE} or {@see GL46::GL_FRAMEBUFFER_RENDERABLE_LAYERED} then
     * $params is set to one of {@see GL46::GL_FULL_SUPPORT}, {@see GL46::GL_CAVEAT_SUPPORT} or {@see GL46::GL_NONE}
     * to indicate that framebuffer attachments (layered attachments in the case of
     * {@see GL46::GL_FRAMEBUFFER_RENDERABLE_LAYERED}) with that internal format are either renderable with no
     * restrictions, renderable with some restrictions or not renderable at all.
     *
     * If $pname is {@see GL46::GL_FRAMEBUFFER_BLEND}, $params is set to {@see GL46::GL_TRUE} to indicate that the
     * internal format is supported for blending operations when attached to a framebuffer, and to
     * {@see GL46::GL_FALSE} otherwise.
     *
     * If $pname is {@see GL46::GL_READ_PIXELS} then $params is set to {@see GL46::GL_FULL_SUPPORT},
     * {@see GL46::GL_CAVEAT_SUPPORT} or {@see GL46::GL_NONE} to that either full support, limited support or no
     * support at all is supplied for reading pixels from framebuffer attachments in the specified internal format.
     *
     * If $pname is {@see GL46::GL_READ_PIXELS_FORMAT} or {@see GL46::GL_READ_PIXELS_TYPE} then $params is filled
     * with the format or type, respectively, most recommended to obtain the highest image quality and performance.
     * For {@see GL46::GL_READ_PIXELS_FORMAT}, the value returned in $params is a token that is accepted for the
     * $format argument to {@see GL46::glReadPixels}. For {@see GL46::GL_READ_PIXELS_TYPE}, the value returned in
     * $params is a token that is accepted for the $type argument to {@see GL46::glReadPixels}.
     *
     * If $pname is {@see GL46::GL_TEXTURE_IMAGE_FORMAT} or {@see GL46::GL_TEXTURE_IMAGE_TYPE} then $params is filled
     * with the implementation-recommended format or type to be used in calls to {@see GL46::glTexImage2D} and other
     * similar functions. For {@see GL46::GL_TEXTURE_IMAGE_FORMAT}, $params is filled with a token suitable for use
     * as the $format argument to {@see GL46::glTexImage2D}. For {@see GL46::GL_TEXTURE_IMAGE_TYPE}, $params is
     * filled with a token suitable for use as the $type argument to {@see GL46::glTexImage2D}.
     *
     * If $pname is {@see GL46::GL_GET_TEXTURE_IMAGE_FORMAT} or {@see GL46::GL_GET_TEXTURE_IMAGE_TYPE} then $params
     * is filled with the implementation-recommended format or type to be used in calls to {@see GL46::glGetTexImage}
     * and other similar functions. For {@see GL46::GL_GET_TEXTURE_IMAGE_FORMAT}, $params is filled with a token
     * suitable for use as the $format argument to {@see GL46::glGetTexImage}. For
     * {@see GL46::GL_GET_TEXTURE_IMAGE_TYPE}, $params is filled with a token suitable for use as the $type argument
     * to {@see GL46::glGetTexImage}.
     *
     * If $pname is {@see GL46::GL_MIPMAP} then $pname is set to {@see GL46::GL_TRUE} to indicate that the specified
     * internal format supports mipmaps and to {@see GL46::GL_FALSE} otherwise.
     *
     * If $pname is {@see GL46::GL_GENERATE_MIPMAP} or {@see GL46::GL_AUTO_GENERATE_MIPMAP} then $params is indicates
     * the level of support for manual or automatic mipmap generation for the specified internal format,
     * respectively. Returned values may be one of {@see GL46::GL_FULL_SUPPORT}, {@see GL46::GL_CAVEAT_SUPPORT} and
     * {@see GL46::GL_NONE} to indicate either full support, limited support or no support at all.
     *
     * If $pname is {@see GL46::GL_COLOR_ENCODING} then the color encoding for the resource is returned in $params.
     * Possible values for color buffers are {@see GL46::GL_LINEAR} or {@see GL46::GL_SRGB}, for linear or
     * sRGB-encoded color components, respectively. For non-color formats (such as depth or stencil), or for
     * unsupported resources, the value {@see GL46::GL_NONE} is returned.
     *
     * If $pname is {@see GL46::GL_SRGB_READ}, or {@see GL46::GL_SRGB_WRITE} then $params indicates the level of
     * support for reading and writing to sRGB encoded images, respectively. For {@see GL46::GL_SRGB_READ}, support
     * for converting from sRGB colorspace on read operations is returned in $params and for
     * {@see GL46::GL_SRGB_WRITE}, support for converting to sRGB colorspace on write operations to the resource is
     * returned in $params. $params may be set to {@see GL46::GL_FULL_SUPPORT}, {@see GL46::GL_CAVEAT_SUPPORT}, or
     * {@see GL46::GL_NONE} to indicate full support, limited support or no support at all, respecitively.
     *
     * If $pname is {@see GL46::GL_FILTER} the $params is set to either {@see GL46::GL_TRUE} or {@see GL46::GL_FALSE}
     * to indicate support or lack thereof for filter modes other than {@see GL46::GL_NEAREST} or
     * {@see GL46::GL_NEAREST_MIPMAP} for the specified internal format.
     *
     * If $pname is {@see GL46::GL_VERTEX_TEXTURE}, {@see GL46::GL_TESS_CONTROL_TEXTURE},
     * {@see GL46::GL_TESS_EVALUATION_TEXTURE}, {@see GL46::GL_GEOMETRY_TEXTURE}, {@see GL46::GL_FRAGMENT_TEXTURE},
     * or {@see GL46::GL_COMPUTE_TEXTURE}, then the value written to $params indicates support for use of the
     * resource as a source of texturing in the vertex, tessellation control, tessellation evaluation, geometry,
     * fragment and compute shader stages, respectively. $params may be set to {@see GL46::GL_FULL_SUPPORT},
     * {@see GL46::GL_CAVEAT_SUPPORT} or {@see GL46::GL_NONE} to indicate full support, limited support or no support
     * at all, respectively.
     *
     * If $pname is {@see GL46::GL_TEXTURE_SHADOW}, {@see GL46::GL_TEXTURE_GATHER} or
     * {@see GL46::GL_TEXTURE_GATHER_SHADOW} then the value written to $params indicates the level of support for
     * using the resource with a shadow sampler, in gather operations or as a shadow sampler in gather operations,
     * respectively. Returned values may be {@see GL46::GL_FULL_SUPPORT}, {@see GL46::GL_CAVEAT_SUPPORT} or
     * {@see GL46::GL_NONE} to indicate full support, limited support or no support at all, respectively.
     *
     * If $pname is {@see GL46::GL_SHADER_IMAGE_LOAD}, {@see GL46::GL_SHADER_IMAGE_STORE} or
     * {@see GL46::GL_SHADER_IMAGE_ATOMIC} then the value returned in $params indicates the level of support for
     * image loads, stores and atomics for resources of the specified internal format. Returned values may be
     * {@see GL46::GL_FULL_SUPPORT}, {@see GL46::GL_CAVEAT_SUPPORT} or {@see GL46::GL_NONE} to indicate full support,
     * limited support or no support at all, respectively.
     *
     * If $pname is {@see GL46::GL_IMAGE_TEXEL_SIZE} then the size of a texel when the resource when used as an image
     * texture is returned in $params. If the resource is not supported for image textures zero is returned.
     *
     * If $pname is {@see GL46::GL_IMAGE_COMPATIBILITY_CLASS} then the compatibility class of the resource when used
     * as an image texture is returned in $params. The possible values returned are
     * {@see GL46::GL_IMAGE_CLASS_4_X_32}, {@see GL46::GL_IMAGE_CLASS_2_X_32}, {@see GL46::GL_IMAGE_CLASS_1_X_32},
     * {@see GL46::GL_IMAGE_CLASS_4_X_16}, {@see GL46::GL_IMAGE_CLASS_2_X_16}, {@see GL46::GL_IMAGE_CLASS_1_X_16},
     * {@see GL46::GL_IMAGE_CLASS_4_X_8}, {@see GL46::GL_IMAGE_CLASS_2_X_8}, {@see GL46::GL_IMAGE_CLASS_1_X_8},
     * {@see GL46::GL_IMAGE_CLASS_11_11_10}, and {@see GL46::GL_IMAGE_CLASS_10_10_10_2}, which correspond to the
     * 4x32, 2x32, 1x32, 4x16, 2x16, 1x16, 4x8, 2x8, 1x8, the class (a) 11/11/10 packed floating-point format, and
     * the class (b) 10/10/10/2 packed formats, respectively. If the resource is not supported for image textures,
     * {@see GL46::GL_NONE} is returned.
     *
     * If $pname is {@see GL46::GL_IMAGE_PIXEL_FORMAT} or {@see GL46::GL_IMAGE_PIXEL_TYPE} then the pixel format or
     * type of the resource when used as an image texture is returned in $params, respectively. In either case, the
     * resource is not supported for image textures {@see GL46::GL_NONE} is returned.
     *
     * If $pname is {@see GL46::GL_IMAGE_FORMAT_COMPATIBILITY_TYPE}, the matching criteria use for the resource when
     * used as an image textures is returned in $params. Possible values returned in $params are
     * {@see GL46::GL_IMAGE_FORMAT_COMPATIBILITY_BY_SIZE} or {@see GL46::GL_IMAGE_FORMAT_COMPATIBILITY_BY_CLASS}. If
     * the resource is not supported for image textures, {@see GL46::GL_NONE} is returned.
     *
     * If $pname is {@see GL46::GL_SIMULTANEOUS_TEXTURE_AND_DEPTH_TEST} or
     * {@see GL46::GL_SIMULTANEOUS_TEXTURE_AND_STENCIL_TEST}, support for using the resource both as a source for
     * texture sampling while it is bound as a buffer for depth or stencil test, respectively, is written to $params.
     * Possible values returned are {@see GL46::GL_FULL_SUPPORT}, {@see GL46::GL_CAVEAT_SUPPORT}, or
     * {@see GL46::GL_NONE} to indicate full support, limited support or no support at all. If the resource or
     * operation is not supported, {@see GL46::GL_NONE} is returned.
     *
     * If $pname is {@see GL46::GL_SIMULTANEOUS_TEXTURE_AND_DEPTH_WRITE} or
     * {@see GL46::GL_SIMULTANEOUS_TEXTURE_AND_STENCIL_WRITE}, support for using the resource both as a source for
     * texture sampling while performing depth or stencil writes to the resources, respectively, is written to
     * $params. Possible values returned are {@see GL46::GL_FULL_SUPPORT}, {@see GL46::GL_CAVEAT_SUPPORT}, or
     * {@see GL46::GL_NONE} to indicate full support, limited support or no support at all. If the resource or
     * operation is not supported, {@see GL46::GL_NONE} is returned.
     *
     * If $pname is {@see GL46::GL_TEXTURE_COMPRESSED} then {@see GL46::GL_TRUE} is returned in $params if
     * $internalformat is a compressed internal format. {@see GL46::GL_FALSE} is returned in $params otherwise.
     *
     * If $pname is {@see GL46::GL_TEXTURE_COMPRESSED_BLOCK_WIDTH}, {@see GL46::GL_TEXTURE_COMPRESSED_BLOCK_HEIGHT}
     * or {@see GL46::GL_TEXTURE_COMPRESSED_BLOCK_SIZE} then the width, height or total size, respectively of a block
     * (in basic machine units) is returned in $params. If the internal format is not compressed, or the resource is
     * not supported, 0 is returned.
     *
     * If $pname is {@see GL46::GL_CLEAR_BUFFER}, the level of support for using the resource with
     * {@see GL46::glClearBufferData} and {@see GL46::glClearBufferSubData} is returned in $params. Possible values
     * returned are {@see GL46::GL_FULL_SUPPORT}, {@see GL46::GL_CAVEAT_SUPPORT}, or {@see GL46::GL_NONE} to indicate
     * full support, limited support or no support at all, respectively. If the resource or operation is not
     * supported, {@see GL46::GL_NONE} is returned.
     *
     * If $pname is {@see GL46::GL_TEXTURE_VIEW}, the level of support for using the resource with the
     * {@see GL46::glTextureView} command is returned in $params. Possible values returned are
     * {@see GL46::GL_FULL_SUPPORT}, {@see GL46::GL_CAVEAT_SUPPORT}, or {@see GL46::GL_NONE} to indicate full
     * support, limited support or no support at all, respectively. If the resource or operation is not supported,
     * {@see GL46::GL_NONE} is returned.
     *
     * If $pname is {@see GL46::GL_VIEW_COMPATIBILITY_CLASS} then the compatibility class of the resource when used
     * as a texture view is returned in $params. The possible values returned are
     * {@see GL46::GL_VIEW_CLASS_128_BITS}, {@see GL46::GL_VIEW_CLASS_96_BITS}, {@see GL46::GL_VIEW_CLASS_64_BITS},
     * {@see GL46::GL_VIEW_CLASS_48_BITS}, {@see GL46::GL_VIEW_CLASS_32_BITS}, {@see GL46::GL_VIEW_CLASS_24_BITS},
     * {@see GL46::GL_VIEW_CLASS_16_BITS}, {@see GL46::GL_VIEW_CLASS_8_BITS},
     * {@see GL46::GL_VIEW_CLASS_S3TC_DXT1_RGB}, {@see GL46::GL_VIEW_CLASS_S3TC_DXT1_RGBA},
     * {@see GL46::GL_VIEW_CLASS_S3TC_DXT3_RGBA}, {@see GL46::GL_VIEW_CLASS_S3TC_DXT5_RGBA},
     * {@see GL46::GL_VIEW_CLASS_RGTC1_RED}, {@see GL46::GL_VIEW_CLASS_RGTC2_RG},
     * {@see GL46::GL_VIEW_CLASS_BPTC_UNORM}, and {@see GL46::GL_VIEW_CLASS_BPTC_FLOAT}.
     *
     * If $pname is {@see GL46::GL_CLEAR_TEXTURE} then the presence of support for using the
     * {@see GL46::glClearTexImage} and {@see GL46::glClearTexSubImage} commands with the resource is written to
     * $params. Possible values written are {@see GL46::GL_FULL_SUPPORT}, {@see GL46::GL_CAVEAT_SUPPORT}, or
     * {@see GL46::GL_NONE} to indicate full support, limited support or no support at all, respectively. If the
     * resource or operation is not supported, {@see GL46::GL_NONE} is returned.
     *
     * @see http://docs.gl/gl4/glGetInternalformat
     * @since 4.2
     * @param int $target
     * @param int $internalformat
     * @param int $pname
     * @param int $bufSize
     * @param int|null $params
     * @return void
     */
    public function getInternalformativ(int $target, int $internalformat, int $pname, int $bufSize, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->getProcAs('glGetInternalformativ', 'void (*)(GLenum target, GLenum internalformat, GLenum pname, GLsizei bufSize, GLint *params)');
            $__proc($target, $internalformat, $pname, $bufSize, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL46::glMemoryBarrier} defines a barrier ordering the memory transactions issued prior to the command
     * relative to those issued after the barrier. For the purposes of this ordering, memory transactions performed
     * by shaders are considered to be issued by the rendering command that triggered the execution of the shader.
     * $barriers is a bitfield indicating the set of operations that are synchronized with shader stores; the bits
     * used in $barriers are as follows:
     *
     *   {@see GL46::GL_VERTEX_ATTRIB_ARRAY_BARRIER_BIT}   If set, vertex data sourced from buffer objects after the
     * barrier will reflect data written by shaders prior to the barrier. The set of buffer objects affected by this
     * bit is derived from the buffer object bindings used for generic vertex attributes derived from the
     * {@see GL46::GL_VERTEX_ATTRIB_ARRAY_BUFFER} bindings.     {@see GL46::GL_ELEMENT_ARRAY_BARRIER_BIT}   If set,
     * vertex array indices sourced from buffer objects after the barrier will reflect data written by shaders prior
     * to the barrier. The buffer objects affected by this bit are derived from the
     * {@see GL46::GL_ELEMENT_ARRAY_BUFFER} binding.     {@see GL46::GL_UNIFORM_BARRIER_BIT}   Shader uniforms
     * sourced from buffer objects after the barrier will reflect data written by shaders prior to the barrier.
     * {@see GL46::GL_TEXTURE_FETCH_BARRIER_BIT}   Texture fetches from shaders, including fetches from buffer object
     * memory via buffer textures, after the barrier will reflect data written by shaders prior to the barrier.
     * {@see GL46::GL_SHADER_IMAGE_ACCESS_BARRIER_BIT}   Memory accesses using shader image load, store, and atomic
     * built-in functions issued after the barrier will reflect data written by shaders prior to the barrier.
     * Additionally, image stores and atomics issued after the barrier will not execute until all memory accesses
     * (e.g., loads, stores, texture fetches, vertex fetches) initiated prior to the barrier complete.
     * {@see GL46::GL_COMMAND_BARRIER_BIT}   Command data sourced from buffer objects by Draw*Indirect commands after
     * the barrier will reflect data written by shaders prior to the barrier. The buffer objects affected by this bit
     * are derived from the {@see GL46::GL_DRAW_INDIRECT_BUFFER} binding.
     * {@see GL46::GL_PIXEL_BUFFER_BARRIER_BIT}   Reads and writes of buffer objects via the
     * {@see GL46::GL_PIXEL_PACK_BUFFER} and {@see GL46::GL_PIXEL_UNPACK_BUFFER} bindings (via
     * {@see GL46::glReadPixels}, {@see GL46::glTexSubImage1D}, etc.) after the barrier will reflect data written by
     * shaders prior to the barrier. Additionally, buffer object writes issued after the barrier will wait on the
     * completion of all shader writes initiated prior to the barrier.     {@see GL46::GL_TEXTURE_UPDATE_BARRIER_BIT}
     *   Writes to a texture via {@see GL46::glTex(Sub)Image*}, {@see GL46::glCopyTex(Sub)Image*},
     * {@see GL46::glCompressedTex(Sub)Image*}, and reads via {@see GL46::glGetTexImage} after the barrier will
     * reflect data written by shaders prior to the barrier. Additionally, texture writes from these commands issued
     * after the barrier will not execute until all shader writes initiated prior to the barrier complete.
     * {@see GL46::GL_BUFFER_UPDATE_BARRIER_BIT}   Reads or writes via {@see GL46::glBufferSubData},
     * {@see GL46::glCopyBufferSubData}, or {@see GL46::glGetBufferSubData}, or to buffer object memory mapped by
     * {@see GL46::glMapBuffer} or {@see GL46::glMapBufferRange} after the barrier will reflect data written by
     * shaders prior to the barrier. Additionally, writes via these commands issued after the barrier will wait on
     * the completion of any shader writes to the same memory initiated prior to the barrier.
     * {@see GL46::GL_FRAMEBUFFER_BARRIER_BIT}   Reads and writes via framebuffer object attachments after the
     * barrier will reflect data written by shaders prior to the barrier. Additionally, framebuffer writes issued
     * after the barrier will wait on the completion of all shader writes issued prior to the barrier.
     * {@see GL46::GL_TRANSFORM_FEEDBACK_BARRIER_BIT}   Writes via transform feedback bindings after the barrier will
     * reflect data written by shaders prior to the barrier. Additionally, transform feedback writes issued after the
     * barrier will wait on the completion of all shader writes issued prior to the barrier.
     * {@see GL46::GL_ATOMIC_COUNTER_BARRIER_BIT}   Accesses to atomic counters after the barrier will reflect writes
     * prior to the barrier.     {@see GL46::GL_SHADER_STORAGE_BARRIER_BIT}   Accesses to shader storage blocks after
     * the barrier will reflect writes prior to the barrier.     {@see GL46::GL_QUERY_BUFFER_BARRIER_BIT}   Writes of
     * buffer objects via the {@see GL46::GL_QUERY_BUFFER} binding after the barrier will reflect data written by
     * shaders prior to the barrier. Additionally, buffer object writes issued after the barrier will wait on the
     * completion of all shader writes initiated prior to the barrier.
     *
     * If $barriers is {@see GL46::GL_ALL_BARRIER_BITS}, shader memory accesses will be synchronized relative to all
     * the operations described above.
     *
     * Implementations may cache buffer object and texture image memory that could be written by shaders in multiple
     * caches; for example, there may be separate caches for texture, vertex fetching, and one or more caches for
     * shader memory accesses. Implementations are not required to keep these caches coherent with shader memory
     * writes. Stores issued by one invocation may not be immediately observable by other pipeline stages or other
     * shader invocations because the value stored may remain in a cache local to the processor executing the store,
     * or because data overwritten by the store is still in a cache elsewhere in the system. When
     * {@see GL46::glMemoryBarrier} is called, the GL flushes and/or invalidates any caches relevant to the
     * operations specified by the $barriers parameter to ensure consistent ordering of operations across the
     * barrier.
     *
     * To allow for independent shader invocations to communicate by reads and writes to a common memory address,
     * image variables in the OpenGL Shading Language may be declared as "coherent". Buffer object or texture image
     * memory accessed through such variables may be cached only if caches are automatically updated due to stores
     * issued by any other shader invocation. If the same address is accessed using both coherent and non-coherent
     * variables, the accesses using variables declared as coherent will observe the results stored using coherent
     * variables in other invocations. Using variables declared as "coherent" guarantees only that the results of
     * stores will be immediately visible to shader invocations using similarly-declared variables; calling
     * {@see GL46::glMemoryBarrier} is required to ensure that the stores are visible to other operations.
     *
     * The following guidelines may be helpful in choosing when to use coherent memory accesses and when to use
     * barriers.
     *
     *    Data that are read-only or constant may be accessed without using coherent variables or calling
     * {@see GL46::MemoryBarrier}(). Updates to the read-only data via API calls such as {@see GL46::glBufferSubData}
     * will invalidate shader caches implicitly as required.     Data that are shared between shader invocations at a
     * fine granularity (e.g., written by one invocation, consumed by another invocation) should use coherent
     * variables to read and write the shared data.     Data written by one shader invocation and consumed by other
     * shader invocations launched as a result of its execution ("dependent invocations") should use coherent
     * variables in the producing shader invocation and call {@see GL46::memoryBarrier}() after the last write. The
     * consuming shader invocation should also use coherent variables.     Data written to image variables in one
     * rendering pass and read by the shader in a later pass need not use coherent variables or memoryBarrier().
     * Calling {@see GL46::glMemoryBarrier} with the SHADER_IMAGE_ACCESS_BARRIER_BIT set in $barriers between passes
     * is necessary.     Data written by the shader in one rendering pass and read by another mechanism (e.g., vertex
     * or index buffer pulling) in a later pass need not use coherent variables or {@see GL46::memoryBarrier}().
     * Calling {@see GL46::glMemoryBarrier} with the appropriate bits set in $barriers between passes is necessary.
     *
     * @see http://docs.gl/gl4/glMemoryBarrier
     * @since 4.2
     * @param int $barriers
     * @return void
     */
    public function memoryBarrier(int $barriers): void
    {
        $__proc = $this->getProcAs('glMemoryBarrier', 'void (*)(GLbitfield barriers)');
        $__proc($barriers);
    }

    /**
     * {@see GL46::glTexStorage1D} and {@see GL46::glTextureStorage1D} specify the storage requirements for all
     * levels of a one-dimensional texture simultaneously. Once a texture is specified with this command, the format
     * and dimensions of all levels become immutable unless it is a proxy texture. The contents of the image may
     * still be modified, however, its storage requirements may not change. Such a texture is referred to as an
     * immutable-format texture.
     *
     * Calling {@see GL46::glTexStorage1D} is equivalent, assuming no errors are generated, to executing the
     * following pseudo-code:
     *
     * <code>
     *     for (i = 0; i < levels; i++) {
     *         glTexImage1D(target, i, internalformat, width, 0, format, type, NULL);
     *         width = max(1, (width / 2));
     *     }
     * </code>
     * Calling {@see GL46::glTextureStorage1D} is equivalent to the above pseudo-code, where $target is the effective
     * target of $texture and it is as if $texture were bound to $target for the purposes of
     * {@see GL46::glTexImage1D}.
     *
     * Since no texture data is actually provided, the values used in the pseudo-code for $format and $type are
     * irrelevant and may be considered to be any values that are legal for the chosen $internalformat enumerant.
     * $internalformat must be one of the sized internal formats given in Table 1 below, one of the sized
     * depth-component formats {@see GL46::GL_DEPTH_COMPONENT32F}, {@see GL46::GL_DEPTH_COMPONENT24}, or
     * {@see GL46::GL_DEPTH_COMPONENT16}, one of the combined depth-stencil formats,
     * {@see GL46::GL_DEPTH32F_STENCIL8}, or {@see GL46::GL_DEPTH24_STENCIL8}, or the stencil-only format,
     * {@see GL46::GL_STENCIL_INDEX8}. Upon success, the value of {@see GL46::GL_TEXTURE_IMMUTABLE_FORMAT} becomes
     * {@see GL46::GL_TRUE}. The value of {@see GL46::GL_TEXTURE_IMMUTABLE_FORMAT} may be discovered by calling
     * {@see GL46::glGetTexParameter} with $pname set to {@see GL46::GL_TEXTURE_IMMUTABLE_FORMAT}. No further changes
     * to the dimensions or format of the texture object may be made. Using any command that might alter the
     * dimensions or format of the texture object (such as {@see GL46::glTexImage1D} or another call to
     * {@see GL46::glTexStorage1D}) will result in the generation of a {@see GL46::GL_INVALID_OPERATION} error, even
     * if it would not, in fact, alter the dimensions or format of the object.
     *
     * @see http://docs.gl/gl4/glTexStorage1D
     * @since 4.2
     * @param int $target
     * @param int $levels
     * @param int $internalformat
     * @param int $width
     * @return void
     */
    public function texStorage1D(int $target, int $levels, int $internalformat, int $width): void
    {
        $__proc = $this->getProcAs('glTexStorage1D', 'void (*)(GLenum target, GLsizei levels, GLenum internalformat, GLsizei width)');
        $__proc($target, $levels, $internalformat, $width);
    }

    /**
     * {@see GL46::glTexStorage2D} and {@see GL46::glTextureStorage2D} specify the storage requirements for all
     * levels of a two-dimensional texture or one-dimensional texture array simultaneously. Once a texture is
     * specified with this command, the format and dimensions of all levels become immutable unless it is a proxy
     * texture. The contents of the image may still be modified, however, its storage requirements may not change.
     * Such a texture is referred to as an immutable-format texture.
     *
     * The behavior of {@see GL46::glTexStorage2D} depends on the $target parameter. When $target is
     * {@see GL46::GL_TEXTURE_2D}, {@see GL46::GL_PROXY_TEXTURE_2D}, {@see GL46::GL_TEXTURE_RECTANGLE},
     * {@see GL46::GL_PROXY_TEXTURE_RECTANGLE} or {@see GL46::GL_PROXY_TEXTURE_CUBE_MAP}, calling
     * {@see GL46::glTexStorage2D} is equivalent, assuming no errors are generated, to executing the following
     * pseudo-code:
     *
     * <code>
     *     for (i = 0; i < levels; i++) {
     *         glTexImage2D(target, i, internalformat, width, height, 0, format, type, NULL);
     *         width = max(1, (width / 2));
     *         height = max(1, (height / 2));
     *     }
     * </code>
     * When $target is {@see GL46::GL_TEXTURE_CUBE_MAP}, {@see GL46::glTexStorage2D} is equivalent to:
     *
     * <code>
     *     for (i = 0; i < levels; i++) {
     *         for (face in (+X, -X, +Y, -Y, +Z, -Z)) {
     *             glTexImage2D(face, i, internalformat, width, height, 0, format, type, NULL);
     *         }
     *         width = max(1, (width / 2));
     *         height = max(1, (height / 2));
     *     }
     * </code>
     * When $target is {@see GL46::GL_TEXTURE_1D_ARRAY} or {@see GL46::GL_PROXY_TEXTURE_1D_ARRAY},
     * {@see GL46::glTexStorage2D} is equivalent to:
     *
     * <code>
     *     for (i = 0; i < levels; i++) {
     *         glTexImage2D(target, i, internalformat, width, height, 0, format, type, NULL);
     *         width = max(1, (width / 2));
     *     }
     * </code>
     * Calling {@see GL46::glTextureStorage2D} is equivalent to the above pseudo-code, where $target is the effective
     * target of $texture and it is as if $texture were bound to $target for the purposes of
     * {@see GL46::glTexImage2D}.
     *
     * Since no texture data is actually provided, the values used in the pseudo-code for $format and $type are
     * irrelevant and may be considered to be any values that are legal for the chosen $internalformat enumerant.
     * $internalformat must be one of the sized internal formats given in Table 1 below, one of the sized
     * depth-component formats {@see GL46::GL_DEPTH_COMPONENT32F}, {@see GL46::GL_DEPTH_COMPONENT24}, or
     * {@see GL46::GL_DEPTH_COMPONENT16}, one of the combined depth-stencil formats,
     * {@see GL46::GL_DEPTH32F_STENCIL8}, or {@see GL46::GL_DEPTH24_STENCIL8}, or the stencil-only format,
     * {@see GL46::GL_STENCIL_INDEX8}. Upon success, the value of {@see GL46::GL_TEXTURE_IMMUTABLE_FORMAT} becomes
     * {@see GL46::GL_TRUE}. The value of {@see GL46::GL_TEXTURE_IMMUTABLE_FORMAT} may be discovered by calling
     * {@see GL46::glGetTexParameter} with $pname set to {@see GL46::GL_TEXTURE_IMMUTABLE_FORMAT}. No further changes
     * to the dimensions or format of the texture object may be made. Using any command that might alter the
     * dimensions or format of the texture object (such as {@see GL46::glTexImage2D} or another call to
     * {@see GL46::glTexStorage2D}) will result in the generation of a {@see GL46::GL_INVALID_OPERATION} error, even
     * if it would not, in fact, alter the dimensions or format of the object.
     *
     * @see http://docs.gl/gl4/glTexStorage2D
     * @since 4.2
     * @param int $target
     * @param int $levels
     * @param int $internalformat
     * @param int $width
     * @param int $height
     * @return void
     */
    public function texStorage2D(int $target, int $levels, int $internalformat, int $width, int $height): void
    {
        $__proc = $this->getProcAs('glTexStorage2D', 'void (*)(GLenum target, GLsizei levels, GLenum internalformat, GLsizei width, GLsizei height)');
        $__proc($target, $levels, $internalformat, $width, $height);
    }

    /**
     * {@see GL46::glTexStorage3D} and {@see GL46::glTextureStorage3D} specify the storage requirements for all
     * levels of a three-dimensional, two-dimensional array or cube-map array texture simultaneously. Once a texture
     * is specified with this command, the format and dimensions of all levels become immutable unless it is a proxy
     * texture. The contents of the image may still be modified, however, its storage requirements may not change.
     * Such a texture is referred to as an immutable-format texture.
     *
     * The behavior of {@see GL46::glTexStorage3D} depends on the $target parameter. When $target is
     * {@see GL46::GL_TEXTURE_3D}, or {@see GL46::GL_PROXY_TEXTURE_3D}, calling {@see GL46::glTexStorage3D} is
     * equivalent, assuming no errors are generated, to executing the following pseudo-code:
     *
     * <code>
     *     for (i = 0; i < levels; i++) {
     *         glTexImage3D(target, i, internalformat, width, height, depth, 0, format, type, NULL);
     *         width = max(1, (width / 2));
     *         height = max(1, (height / 2));
     *         depth = max(1, (depth / 2));
     *     }
     * </code>
     * When $target is {@see GL46::GL_TEXTURE_2D_ARRAY}, {@see GL46::GL_PROXY_TEXTURE_2D_ARRAY},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_ARRAY}, or {@see GL46::GL_PROXY_TEXTURE_CUBE_MAP_ARRAY},
     * {@see GL46::glTexStorage3D} is equivalent to:
     *
     * <code>
     *     for (i = 0; i < levels; i++) {
     *         glTexImage3D(target, i, internalformat, width, height, depth, 0, format, type, NULL);
     *         width = max(1, (width / 2));
     *         height = max(1, (height / 2));
     *     }
     * </code>
     * Calling {@see GL46::glTextureStorage3D} is equivalent to the above pseudo-code, where $target is the effective
     * target of $texture and it is as if $texture were bound to $target for the purposes of
     * {@see GL46::glTexImage3D}.
     *
     * Since no texture data is actually provided, the values used in the pseudo-code for $format and $type are
     * irrelevant and may be considered to be any values that are legal for the chosen $internalformat enumerant.
     * $internalformat must be one of the sized internal formats given in Table 1 below, one of the sized
     * depth-component formats {@see GL46::GL_DEPTH_COMPONENT32F}, {@see GL46::GL_DEPTH_COMPONENT24}, or
     * {@see GL46::GL_DEPTH_COMPONENT16}, one of the combined depth-stencil formats,
     * {@see GL46::GL_DEPTH32F_STENCIL8}, or {@see GL46::GL_DEPTH24_STENCIL8}, or the stencil-only format,
     * {@see GL46::GL_STENCIL_INDEX8}. Upon success, the value of {@see GL46::GL_TEXTURE_IMMUTABLE_FORMAT} becomes
     * {@see GL46::GL_TRUE}. The value of {@see GL46::GL_TEXTURE_IMMUTABLE_FORMAT} may be discovered by calling
     * {@see GL46::glGetTexParameter} with $pname set to {@see GL46::GL_TEXTURE_IMMUTABLE_FORMAT}. No further changes
     * to the dimensions or format of the texture object may be made. Using any command that might alter the
     * dimensions or format of the texture object (such as {@see GL46::glTexImage3D} or another call to
     * {@see GL46::glTexStorage3D}) will result in the generation of a {@see GL46::GL_INVALID_OPERATION} error, even
     * if it would not, in fact, alter the dimensions or format of the object.
     *
     * @see http://docs.gl/gl4/glTexStorage3D
     * @since 4.2
     * @param int $target
     * @param int $levels
     * @param int $internalformat
     * @param int $width
     * @param int $height
     * @param int $depth
     * @return void
     */
    public function texStorage3D(int $target, int $levels, int $internalformat, int $width, int $height, int $depth): void
    {
        $__proc = $this->getProcAs('glTexStorage3D', 'void (*)(GLenum target, GLsizei levels, GLenum internalformat, GLsizei width, GLsizei height, GLsizei depth)');
        $__proc($target, $levels, $internalformat, $width, $height, $depth);
    }
}
