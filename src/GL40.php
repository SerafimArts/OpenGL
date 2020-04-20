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
 * The OpenGL functionality up to version 4.0. Includes the deprecated symbols of the Compatibility Profile.
 *
 * OpenGL 4.0 implementations support revision 4.00 of the OpenGL Shading Language.
 *
 * Extensions promoted to core in this release:
 *
 * - ARB_texture_query_lod @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_texture_query_lod.txt
 * - ARB_draw_buffers_blend @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_draw_buffers_blend.txt
 * - ARB_draw_indirect @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_draw_indirect.txt
 * - ARB_gpu_shader5 @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_gpu_shader5.txt
 * - ARB_gpu_shader_fp64 @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_gpu_shader_fp64.txt
 * - ARB_sample_shading @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_sample_shading.txt
 * - ARB_shader_subroutine @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_shader_subroutine.txt
 * - ARB_tessellation_shader @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_tessellation_shader.txt
 * - ARB_texture_buffer_object_rgb32 @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_texture_buffer_object_rgb32.txt
 * - ARB_texture_cube_map_array @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_texture_cube_map_array.txt
 * - ARB_texture_gather @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_texture_gather.txt
 * - ARB_transform_feedback2 @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_transform_feedback2.txt
 * - ARB_transform_feedback3 @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_transform_feedback3.txt
 */
class GL40 extends GL33
{
    /**
     * @var int
     * @since 4.0
     */
    public const GL_SAMPLE_SHADING = 0x8c36;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_MIN_SAMPLE_SHADING_VALUE = 0x8c37;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_MIN_PROGRAM_TEXTURE_GATHER_OFFSET = 0x8e5e;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_MAX_PROGRAM_TEXTURE_GATHER_OFFSET = 0x8e5f;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_TEXTURE_CUBE_MAP_ARRAY = 0x9009;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_TEXTURE_BINDING_CUBE_MAP_ARRAY = 0x900a;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_PROXY_TEXTURE_CUBE_MAP_ARRAY = 0x900b;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_SAMPLER_CUBE_MAP_ARRAY = 0x900c;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_SAMPLER_CUBE_MAP_ARRAY_SHADOW = 0x900d;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_INT_SAMPLER_CUBE_MAP_ARRAY = 0x900e;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_UNSIGNED_INT_SAMPLER_CUBE_MAP_ARRAY = 0x900f;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_DRAW_INDIRECT_BUFFER = 0x8f3f;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_DRAW_INDIRECT_BUFFER_BINDING = 0x8f43;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_GEOMETRY_SHADER_INVOCATIONS = 0x887f;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_MAX_GEOMETRY_SHADER_INVOCATIONS = 0x8e5a;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_MIN_FRAGMENT_INTERPOLATION_OFFSET = 0x8e5b;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_MAX_FRAGMENT_INTERPOLATION_OFFSET = 0x8e5c;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_FRAGMENT_INTERPOLATION_OFFSET_BITS = 0x8e5d;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_MAX_VERTEX_STREAMS = 0x8e71;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_DOUBLE_VEC2 = 0x8ffc;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_DOUBLE_VEC3 = 0x8ffd;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_DOUBLE_VEC4 = 0x8ffe;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_DOUBLE_MAT2 = 0x8f46;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_DOUBLE_MAT3 = 0x8f47;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_DOUBLE_MAT4 = 0x8f48;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_DOUBLE_MAT2x3 = 0x8f49;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_DOUBLE_MAT2x4 = 0x8f4a;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_DOUBLE_MAT3x2 = 0x8f4b;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_DOUBLE_MAT3x4 = 0x8f4c;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_DOUBLE_MAT4x2 = 0x8f4d;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_DOUBLE_MAT4x3 = 0x8f4e;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_ACTIVE_SUBROUTINES = 0x8de5;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_ACTIVE_SUBROUTINE_UNIFORMS = 0x8de6;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_ACTIVE_SUBROUTINE_UNIFORM_LOCATIONS = 0x8e47;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_ACTIVE_SUBROUTINE_MAX_LENGTH = 0x8e48;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_ACTIVE_SUBROUTINE_UNIFORM_MAX_LENGTH = 0x8e49;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_MAX_SUBROUTINES = 0x8de7;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_MAX_SUBROUTINE_UNIFORM_LOCATIONS = 0x8de8;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_NUM_COMPATIBLE_SUBROUTINES = 0x8e4a;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_COMPATIBLE_SUBROUTINES = 0x8e4b;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_PATCHES = 0x000e;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_PATCH_VERTICES = 0x8e72;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_PATCH_DEFAULT_INNER_LEVEL = 0x8e73;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_PATCH_DEFAULT_OUTER_LEVEL = 0x8e74;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_TESS_CONTROL_OUTPUT_VERTICES = 0x8e75;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_TESS_GEN_MODE = 0x8e76;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_TESS_GEN_SPACING = 0x8e77;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_TESS_GEN_VERTEX_ORDER = 0x8e78;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_TESS_GEN_POINT_MODE = 0x8e79;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_ISOLINES = 0x8e7a;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_FRACTIONAL_ODD = 0x8e7b;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_FRACTIONAL_EVEN = 0x8e7c;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_MAX_PATCH_VERTICES = 0x8e7d;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_MAX_TESS_GEN_LEVEL = 0x8e7e;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_MAX_TESS_CONTROL_UNIFORM_COMPONENTS = 0x8e7f;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_MAX_TESS_EVALUATION_UNIFORM_COMPONENTS = 0x8e80;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_MAX_TESS_CONTROL_TEXTURE_IMAGE_UNITS = 0x8e81;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_MAX_TESS_EVALUATION_TEXTURE_IMAGE_UNITS = 0x8e82;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_MAX_TESS_CONTROL_OUTPUT_COMPONENTS = 0x8e83;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_MAX_TESS_PATCH_COMPONENTS = 0x8e84;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_MAX_TESS_CONTROL_TOTAL_OUTPUT_COMPONENTS = 0x8e85;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_MAX_TESS_EVALUATION_OUTPUT_COMPONENTS = 0x8e86;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_MAX_TESS_CONTROL_UNIFORM_BLOCKS = 0x8e89;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_MAX_TESS_EVALUATION_UNIFORM_BLOCKS = 0x8e8a;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_MAX_TESS_CONTROL_INPUT_COMPONENTS = 0x886c;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_MAX_TESS_EVALUATION_INPUT_COMPONENTS = 0x886d;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_MAX_COMBINED_TESS_CONTROL_UNIFORM_COMPONENTS = 0x8e1e;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_MAX_COMBINED_TESS_EVALUATION_UNIFORM_COMPONENTS = 0x8e1f;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_UNIFORM_BLOCK_REFERENCED_BY_TESS_CONTROL_SHADER = 0x84f0;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_UNIFORM_BLOCK_REFERENCED_BY_TESS_EVALUATION_SHADER = 0x84f1;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_TESS_EVALUATION_SHADER = 0x8e87;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_TESS_CONTROL_SHADER = 0x8e88;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_TRANSFORM_FEEDBACK = 0x8e22;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_TRANSFORM_FEEDBACK_BUFFER_PAUSED = 0x8e23;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_TRANSFORM_FEEDBACK_BUFFER_ACTIVE = 0x8e24;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_TRANSFORM_FEEDBACK_BINDING = 0x8e25;
    /**
     * @var int
     * @since 4.0
     */
    public const GL_MAX_TRANSFORM_FEEDBACK_BUFFERS = 0x8e70;

    /**
     * Specifies the rate at which samples are shaded within a covered pixel. Sample-rate shading is enabled by
     * calling {@see glEnable} with the parameter `GL_SAMPLE_SHADING`. If `GL_MULTISAMPLE` or
     * `GL_SAMPLE_SHADING` is disabled, sample shading has no effect. Otherwise, an implementation must provide at
     * least as many unique color values for each covered fragment as specified by *`value`* times *`samples`* where
     * *`samples`* is the value of `GL_SAMPLES` for the current framebuffer. At least 1 sample for each covered
     * fragment is generated.
     *
     * A *`value`* of 1.0 indicates that each sample in the framebuffer should be indpendently shaded. A *`value`* of
     * 0.0 effectively allows the GL to ignore sample rate shading. Any value between 0.0 and 1.0 allows the GL to
     * shade only a subset of the total samples within each covered fragment. Which samples are shaded and the
     * algorithm used to select that subset of the fragment's samples is implementation dependent.
     *
     * @see http://docs.gl/gl4/glMinSampleShading
     * @since 4.0
     * @param float $value
     * @return void
     */
    public static function glMinSampleShading(float $value): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($value >= -3.40282e38 && $value <= 3.40282e38, 'Argument $value overflow: C type GLfloat is required');

        $proc = self::getProc('glMinSampleShading', 'void (*)(GLfloat value)');
        $proc($value);
    }

    /**
     * @since 4.0
     * @param int $buf
     * @param int $mode
     * @return void
     */
    public static function glBlendEquationi(int $buf, int $mode): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($buf >= 0 && $buf <= 4_294_967_295, 'Argument $buf overflow: C type GLuint is required');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');

        $proc = self::getProc('glBlendEquationi', 'void (*)(GLuint buf, GLenum mode)');
        $proc($buf, $mode);
    }

    /**
     * @since 4.0
     * @param int $buf
     * @param int $modeRGB
     * @param int $modeAlpha
     * @return void
     */
    public static function glBlendEquationSeparatei(int $buf, int $modeRGB, int $modeAlpha): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($buf >= 0 && $buf <= 4_294_967_295, 'Argument $buf overflow: C type GLuint is required');
        assert($modeRGB >= 0 && $modeRGB <= 4_294_967_295, 'Argument $modeRGB overflow: C type GLenum is required');
        assert($modeAlpha >= 0 && $modeAlpha <= 4_294_967_295, 'Argument $modeAlpha overflow: C type GLenum is required');

        $proc = self::getProc('glBlendEquationSeparatei', 'void (*)(GLuint buf, GLenum modeRGB, GLenum modeAlpha)');
        $proc($buf, $modeRGB, $modeAlpha);
    }

    /**
     * @since 4.0
     * @param int $buf
     * @param int $src
     * @param int $dst
     * @return void
     */
    public static function glBlendFunci(int $buf, int $src, int $dst): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($buf >= 0 && $buf <= 4_294_967_295, 'Argument $buf overflow: C type GLuint is required');
        assert($src >= 0 && $src <= 4_294_967_295, 'Argument $src overflow: C type GLenum is required');
        assert($dst >= 0 && $dst <= 4_294_967_295, 'Argument $dst overflow: C type GLenum is required');

        $proc = self::getProc('glBlendFunci', 'void (*)(GLuint buf, GLenum src, GLenum dst)');
        $proc($buf, $src, $dst);
    }

    /**
     * @since 4.0
     * @param int $buf
     * @param int $srcRGB
     * @param int $dstRGB
     * @param int $srcAlpha
     * @param int $dstAlpha
     * @return void
     */
    public static function glBlendFuncSeparatei(int $buf, int $srcRGB, int $dstRGB, int $srcAlpha, int $dstAlpha): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($buf >= 0 && $buf <= 4_294_967_295, 'Argument $buf overflow: C type GLuint is required');
        assert($srcRGB >= 0 && $srcRGB <= 4_294_967_295, 'Argument $srcRGB overflow: C type GLenum is required');
        assert($dstRGB >= 0 && $dstRGB <= 4_294_967_295, 'Argument $dstRGB overflow: C type GLenum is required');
        assert($srcAlpha >= 0 && $srcAlpha <= 4_294_967_295, 'Argument $srcAlpha overflow: C type GLenum is required');
        assert($dstAlpha >= 0 && $dstAlpha <= 4_294_967_295, 'Argument $dstAlpha overflow: C type GLenum is required');

        $proc = self::getProc('glBlendFuncSeparatei', 'void (*)(GLuint buf, GLenum srcRGB, GLenum dstRGB, GLenum srcAlpha, GLenum dstAlpha)');
        $proc($buf, $srcRGB, $dstRGB, $srcAlpha, $dstAlpha);
    }

    /**
     * Specifies multiple geometric primitives with very few subroutine calls. `glDrawArraysIndirect` behaves
     * similarly to {@see glDrawArraysInstancedBaseInstance}, execept that the
     * parameters to {@see glDrawArraysInstancedBaseInstance} are stored in memory at
     * the address given by *`indirect`*.
     *
     * The parameters addressed by *`indirect`* are packed into a structure that takes the form (in C):
     *
     *  - ```
     * typedef struct {
     * uint count;
     * uint primCount;
     * uint first;
     * uint baseInstance;
     * } DrawArraysIndirectCommand;
     *
     * const DrawArraysIndirectCommand *cmd = (const DrawArraysIndirectCommand *)indirect;
     * glDrawArraysInstancedBaseInstance(mode, cmd->first, cmd->count, cmd->primCount, cmd->baseInstance);
     *  - ```
     *
     * If a buffer is bound to the `GL_DRAW_INDIRECT_BUFFER` binding at the time of a call to `glDrawArraysIndirect`,
     * *`indirect`* is interpreted as an offset, in basic machine units, into that buffer and the parameter data is
     * read from the buffer rather than from client memory.
     *
     * In contrast to {@see glDrawArraysInstancedBaseInstance}, the `first` member of
     * the parameter structure is unsigned, and out-of-range indices do not generate an error.
     *
     * Vertex attributes that are modified by `glDrawArraysIndirect` have an unspecified value after
     * `glDrawArraysIndirect` returns. Attributes that aren't modified remain well defined.
     *
     * @see http://docs.gl/gl4/glDrawArraysIndirect
     * @since 4.0
     * @param int $mode
     * @param \FFI\CData|\FFI\CPtr|null $indirect
     * @return void
     */
    public static function glDrawArraysIndirect(int $mode, ?\FFI\CData $indirect): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');

        $proc = self::getProc('glDrawArraysIndirect', 'void (*)(GLenum mode, const void *indirect)');
        $proc($mode, $indirect);
    }

    /**
     * Specifies multiple indexed geometric primitives with very few subroutine calls. `glDrawElementsIndirect`
     * behaves similarly to
     * {@see glDrawElementsInstancedBaseVertexBaseInstance}, execpt that
     * the parameters to
     * {@see glDrawElementsInstancedBaseVertexBaseInstance} are stored in
     * memory at the address given by *`indirect`*.
     *
     * The parameters addressed by *`indirect`* are packed into a structure that takes the form (in C):
     *
     *  - ```
     * typedef struct {
     * uint count;
     * uint primCount;
     * uint firstIndex;
     * uint baseVertex;
     * uint baseInstance;
     * } DrawElementsIndirectCommand;
     *  - ```
     *
     *  - `glDrawElementsIndirect` is equivalent to:
     *
     *  - ```
     * void glDrawElementsIndirect(GLenum mode, GLenum type, const void * indirect) {
     * const DrawElementsIndirectCommand *cmd = (const DrawElementsIndirectCommand *)indirect;
     * glDrawElementsInstancedBaseVertexBaseInstance(mode,
     * cmd->count,
     * type,
     * cmd->firstIndex * size-of-type,
     * cmd->primCount,
     * cmd->baseVertex,
     * cmd->baseInstance);
     * }
     *  - ```
     *
     * If a buffer is bound to the `GL_DRAW_INDIRECT_BUFFER` binding at the time of a call to
     * `glDrawElementsIndirect`, *`indirect`* is interpreted as an offset, in basic machine units, into that buffer
     * and the parameter data is read from the buffer rather than from client memory.
     *
     * Note that indices stored in client memory are not supported. If no buffer is bound to the
     * `GL_ELEMENT_ARRAY_BUFFER` binding, an error will be generated.
     *
     * The results of the operation are undefined if the `reservedMustBeZero` member of the parameter structure is
     * non-zero. However, no error is generated in this case.
     *
     * Vertex attributes that are modified by `glDrawElementsIndirect` have an unspecified value after
     * `glDrawElementsIndirect` returns. Attributes that aren't modified remain well defined.
     *
     * @see http://docs.gl/gl4/glDrawElementsIndirect
     * @since 4.0
     * @param int $mode
     * @param int $type
     * @param \FFI\CData|\FFI\CPtr|null $indirect
     * @return void
     */
    public static function glDrawElementsIndirect(int $mode, int $type, ?\FFI\CData $indirect): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');

        $proc = self::getProc('glDrawElementsIndirect', 'void (*)(GLenum mode, GLenum type, const void *indirect)');
        $proc($mode, $type, $indirect);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glUniform` operates on the program object that was made part of
     * current state by calling {@see glUseProgram}.
     *
     * The commands `glUniform{1|2|3|4}{f|i}` are used to change the value of the uniform variable specified by
     * *`location`* using the values passed as arguments. The number specified in the command should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The suffix `f` indicates that floating-point values are being passed; the suffix
     * `i` indicates that integer values are being passed, and this type should also match the data type of the
     * specified uniform variable. The `i` variants of this function should be used to provide values for uniform
     * variables defined as int, ivec2, ivec3, ivec4, or arrays of these. The `f` variants should be used to provide
     * values for uniform variables of type float, vec2, vec3, vec4, or arrays of these. Either the `i` or the `f`
     * variants may be used to provide values for uniform variables of type bool, bvec2, bvec3, bvec4, or arrays of
     * these. The uniform variable will be set to false if the input value is 0 or 0.0f, and it will be set to true
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glUniform ` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glUniform{1|2|3|4}{f|i}v` can be used to modify a single uniform variable or a uniform variable
     * array. These commands pass a count and a pointer to the values to be loaded into a uniform variable or a
     * uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable, and a
     * count of 1 or greater can be used to modify an entire array or part of an array. When loading *n* elements
     * starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the array will be
     * replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in *`value`*, and it should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match the data type for the
     * specified uniform variable as described previously for `glUniform{1|2|3|4}{f|i}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glUniform3f` or `glUniform3fv` can be used to load a uniform variable array of type
     * vec3). The number of elements of the uniform variable array to be modified is specified by *`count`*
     *
     * The commands `glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array of
     * matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number `2`
     * indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and the
     * number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with the
     * first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl3/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 4.0
     * @param int $location
     * @param float $x
     * @return void
     */
    public static function glUniform1d(int $location, float $x): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($x >= \PHP_FLOAT_MIN && $x <= \PHP_FLOAT_MAX, 'Argument $x overflow: C type GLdouble is required');

        $proc = self::getProc('glUniform1d', 'void (*)(GLint location, GLdouble x)');
        $proc($location, $x);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glUniform` operates on the program object that was made part of
     * current state by calling {@see glUseProgram}.
     *
     * The commands `glUniform{1|2|3|4}{f|i}` are used to change the value of the uniform variable specified by
     * *`location`* using the values passed as arguments. The number specified in the command should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The suffix `f` indicates that floating-point values are being passed; the suffix
     * `i` indicates that integer values are being passed, and this type should also match the data type of the
     * specified uniform variable. The `i` variants of this function should be used to provide values for uniform
     * variables defined as int, ivec2, ivec3, ivec4, or arrays of these. The `f` variants should be used to provide
     * values for uniform variables of type float, vec2, vec3, vec4, or arrays of these. Either the `i` or the `f`
     * variants may be used to provide values for uniform variables of type bool, bvec2, bvec3, bvec4, or arrays of
     * these. The uniform variable will be set to false if the input value is 0 or 0.0f, and it will be set to true
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glUniform ` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glUniform{1|2|3|4}{f|i}v` can be used to modify a single uniform variable or a uniform variable
     * array. These commands pass a count and a pointer to the values to be loaded into a uniform variable or a
     * uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable, and a
     * count of 1 or greater can be used to modify an entire array or part of an array. When loading *n* elements
     * starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the array will be
     * replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in *`value`*, and it should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match the data type for the
     * specified uniform variable as described previously for `glUniform{1|2|3|4}{f|i}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glUniform3f` or `glUniform3fv` can be used to load a uniform variable array of type
     * vec3). The number of elements of the uniform variable array to be modified is specified by *`count`*
     *
     * The commands `glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array of
     * matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number `2`
     * indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and the
     * number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with the
     * first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl3/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 4.0
     * @param int $location
     * @param float $x
     * @param float $y
     * @return void
     */
    public static function glUniform2d(int $location, float $x, float $y): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($x >= \PHP_FLOAT_MIN && $x <= \PHP_FLOAT_MAX, 'Argument $x overflow: C type GLdouble is required');
        assert($y >= \PHP_FLOAT_MIN && $y <= \PHP_FLOAT_MAX, 'Argument $y overflow: C type GLdouble is required');

        $proc = self::getProc('glUniform2d', 'void (*)(GLint location, GLdouble x, GLdouble y)');
        $proc($location, $x, $y);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glUniform` operates on the program object that was made part of
     * current state by calling {@see glUseProgram}.
     *
     * The commands `glUniform{1|2|3|4}{f|i}` are used to change the value of the uniform variable specified by
     * *`location`* using the values passed as arguments. The number specified in the command should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The suffix `f` indicates that floating-point values are being passed; the suffix
     * `i` indicates that integer values are being passed, and this type should also match the data type of the
     * specified uniform variable. The `i` variants of this function should be used to provide values for uniform
     * variables defined as int, ivec2, ivec3, ivec4, or arrays of these. The `f` variants should be used to provide
     * values for uniform variables of type float, vec2, vec3, vec4, or arrays of these. Either the `i` or the `f`
     * variants may be used to provide values for uniform variables of type bool, bvec2, bvec3, bvec4, or arrays of
     * these. The uniform variable will be set to false if the input value is 0 or 0.0f, and it will be set to true
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glUniform ` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glUniform{1|2|3|4}{f|i}v` can be used to modify a single uniform variable or a uniform variable
     * array. These commands pass a count and a pointer to the values to be loaded into a uniform variable or a
     * uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable, and a
     * count of 1 or greater can be used to modify an entire array or part of an array. When loading *n* elements
     * starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the array will be
     * replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in *`value`*, and it should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match the data type for the
     * specified uniform variable as described previously for `glUniform{1|2|3|4}{f|i}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glUniform3f` or `glUniform3fv` can be used to load a uniform variable array of type
     * vec3). The number of elements of the uniform variable array to be modified is specified by *`count`*
     *
     * The commands `glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array of
     * matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number `2`
     * indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and the
     * number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with the
     * first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl3/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 4.0
     * @param int $location
     * @param float $x
     * @param float $y
     * @param float $z
     * @return void
     */
    public static function glUniform3d(int $location, float $x, float $y, float $z): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($x >= \PHP_FLOAT_MIN && $x <= \PHP_FLOAT_MAX, 'Argument $x overflow: C type GLdouble is required');
        assert($y >= \PHP_FLOAT_MIN && $y <= \PHP_FLOAT_MAX, 'Argument $y overflow: C type GLdouble is required');
        assert($z >= \PHP_FLOAT_MIN && $z <= \PHP_FLOAT_MAX, 'Argument $z overflow: C type GLdouble is required');

        $proc = self::getProc('glUniform3d', 'void (*)(GLint location, GLdouble x, GLdouble y, GLdouble z)');
        $proc($location, $x, $y, $z);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glUniform` operates on the program object that was made part of
     * current state by calling {@see glUseProgram}.
     *
     * The commands `glUniform{1|2|3|4}{f|i}` are used to change the value of the uniform variable specified by
     * *`location`* using the values passed as arguments. The number specified in the command should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The suffix `f` indicates that floating-point values are being passed; the suffix
     * `i` indicates that integer values are being passed, and this type should also match the data type of the
     * specified uniform variable. The `i` variants of this function should be used to provide values for uniform
     * variables defined as int, ivec2, ivec3, ivec4, or arrays of these. The `f` variants should be used to provide
     * values for uniform variables of type float, vec2, vec3, vec4, or arrays of these. Either the `i` or the `f`
     * variants may be used to provide values for uniform variables of type bool, bvec2, bvec3, bvec4, or arrays of
     * these. The uniform variable will be set to false if the input value is 0 or 0.0f, and it will be set to true
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glUniform ` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glUniform{1|2|3|4}{f|i}v` can be used to modify a single uniform variable or a uniform variable
     * array. These commands pass a count and a pointer to the values to be loaded into a uniform variable or a
     * uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable, and a
     * count of 1 or greater can be used to modify an entire array or part of an array. When loading *n* elements
     * starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the array will be
     * replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in *`value`*, and it should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match the data type for the
     * specified uniform variable as described previously for `glUniform{1|2|3|4}{f|i}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glUniform3f` or `glUniform3fv` can be used to load a uniform variable array of type
     * vec3). The number of elements of the uniform variable array to be modified is specified by *`count`*
     *
     * The commands `glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array of
     * matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number `2`
     * indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and the
     * number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with the
     * first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl3/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 4.0
     * @param int $location
     * @param float $x
     * @param float $y
     * @param float $z
     * @param float $w
     * @return void
     */
    public static function glUniform4d(int $location, float $x, float $y, float $z, float $w): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($x >= \PHP_FLOAT_MIN && $x <= \PHP_FLOAT_MAX, 'Argument $x overflow: C type GLdouble is required');
        assert($y >= \PHP_FLOAT_MIN && $y <= \PHP_FLOAT_MAX, 'Argument $y overflow: C type GLdouble is required');
        assert($z >= \PHP_FLOAT_MIN && $z <= \PHP_FLOAT_MAX, 'Argument $z overflow: C type GLdouble is required');
        assert($w >= \PHP_FLOAT_MIN && $w <= \PHP_FLOAT_MAX, 'Argument $w overflow: C type GLdouble is required');

        $proc = self::getProc('glUniform4d', 'void (*)(GLint location, GLdouble x, GLdouble y, GLdouble z, GLdouble w)');
        $proc($location, $x, $y, $z, $w);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glUniform` operates on the program object that was made part of
     * current state by calling {@see glUseProgram}.
     *
     * The commands `glUniform{1|2|3|4}{f|i}` are used to change the value of the uniform variable specified by
     * *`location`* using the values passed as arguments. The number specified in the command should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The suffix `f` indicates that floating-point values are being passed; the suffix
     * `i` indicates that integer values are being passed, and this type should also match the data type of the
     * specified uniform variable. The `i` variants of this function should be used to provide values for uniform
     * variables defined as int, ivec2, ivec3, ivec4, or arrays of these. The `f` variants should be used to provide
     * values for uniform variables of type float, vec2, vec3, vec4, or arrays of these. Either the `i` or the `f`
     * variants may be used to provide values for uniform variables of type bool, bvec2, bvec3, bvec4, or arrays of
     * these. The uniform variable will be set to false if the input value is 0 or 0.0f, and it will be set to true
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glUniform ` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glUniform{1|2|3|4}{f|i}v` can be used to modify a single uniform variable or a uniform variable
     * array. These commands pass a count and a pointer to the values to be loaded into a uniform variable or a
     * uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable, and a
     * count of 1 or greater can be used to modify an entire array or part of an array. When loading *n* elements
     * starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the array will be
     * replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in *`value`*, and it should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match the data type for the
     * specified uniform variable as described previously for `glUniform{1|2|3|4}{f|i}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glUniform3f` or `glUniform3fv` can be used to load a uniform variable array of type
     * vec3). The number of elements of the uniform variable array to be modified is specified by *`count`*
     *
     * The commands `glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array of
     * matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number `2`
     * indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and the
     * number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with the
     * first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl3/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glUniform1dv(int $location, int $count, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glUniform1dv', 'void (*)(GLint location, GLsizei count, const GLdouble *value)');
        $proc($location, $count, $value);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glUniform` operates on the program object that was made part of
     * current state by calling {@see glUseProgram}.
     *
     * The commands `glUniform{1|2|3|4}{f|i}` are used to change the value of the uniform variable specified by
     * *`location`* using the values passed as arguments. The number specified in the command should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The suffix `f` indicates that floating-point values are being passed; the suffix
     * `i` indicates that integer values are being passed, and this type should also match the data type of the
     * specified uniform variable. The `i` variants of this function should be used to provide values for uniform
     * variables defined as int, ivec2, ivec3, ivec4, or arrays of these. The `f` variants should be used to provide
     * values for uniform variables of type float, vec2, vec3, vec4, or arrays of these. Either the `i` or the `f`
     * variants may be used to provide values for uniform variables of type bool, bvec2, bvec3, bvec4, or arrays of
     * these. The uniform variable will be set to false if the input value is 0 or 0.0f, and it will be set to true
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glUniform ` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glUniform{1|2|3|4}{f|i}v` can be used to modify a single uniform variable or a uniform variable
     * array. These commands pass a count and a pointer to the values to be loaded into a uniform variable or a
     * uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable, and a
     * count of 1 or greater can be used to modify an entire array or part of an array. When loading *n* elements
     * starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the array will be
     * replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in *`value`*, and it should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match the data type for the
     * specified uniform variable as described previously for `glUniform{1|2|3|4}{f|i}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glUniform3f` or `glUniform3fv` can be used to load a uniform variable array of type
     * vec3). The number of elements of the uniform variable array to be modified is specified by *`count`*
     *
     * The commands `glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array of
     * matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number `2`
     * indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and the
     * number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with the
     * first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl3/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glUniform2dv(int $location, int $count, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glUniform2dv', 'void (*)(GLint location, GLsizei count, const GLdouble *value)');
        $proc($location, $count, $value);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glUniform` operates on the program object that was made part of
     * current state by calling {@see glUseProgram}.
     *
     * The commands `glUniform{1|2|3|4}{f|i}` are used to change the value of the uniform variable specified by
     * *`location`* using the values passed as arguments. The number specified in the command should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The suffix `f` indicates that floating-point values are being passed; the suffix
     * `i` indicates that integer values are being passed, and this type should also match the data type of the
     * specified uniform variable. The `i` variants of this function should be used to provide values for uniform
     * variables defined as int, ivec2, ivec3, ivec4, or arrays of these. The `f` variants should be used to provide
     * values for uniform variables of type float, vec2, vec3, vec4, or arrays of these. Either the `i` or the `f`
     * variants may be used to provide values for uniform variables of type bool, bvec2, bvec3, bvec4, or arrays of
     * these. The uniform variable will be set to false if the input value is 0 or 0.0f, and it will be set to true
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glUniform ` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glUniform{1|2|3|4}{f|i}v` can be used to modify a single uniform variable or a uniform variable
     * array. These commands pass a count and a pointer to the values to be loaded into a uniform variable or a
     * uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable, and a
     * count of 1 or greater can be used to modify an entire array or part of an array. When loading *n* elements
     * starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the array will be
     * replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in *`value`*, and it should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match the data type for the
     * specified uniform variable as described previously for `glUniform{1|2|3|4}{f|i}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glUniform3f` or `glUniform3fv` can be used to load a uniform variable array of type
     * vec3). The number of elements of the uniform variable array to be modified is specified by *`count`*
     *
     * The commands `glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array of
     * matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number `2`
     * indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and the
     * number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with the
     * first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl3/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glUniform3dv(int $location, int $count, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glUniform3dv', 'void (*)(GLint location, GLsizei count, const GLdouble *value)');
        $proc($location, $count, $value);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glUniform` operates on the program object that was made part of
     * current state by calling {@see glUseProgram}.
     *
     * The commands `glUniform{1|2|3|4}{f|i}` are used to change the value of the uniform variable specified by
     * *`location`* using the values passed as arguments. The number specified in the command should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The suffix `f` indicates that floating-point values are being passed; the suffix
     * `i` indicates that integer values are being passed, and this type should also match the data type of the
     * specified uniform variable. The `i` variants of this function should be used to provide values for uniform
     * variables defined as int, ivec2, ivec3, ivec4, or arrays of these. The `f` variants should be used to provide
     * values for uniform variables of type float, vec2, vec3, vec4, or arrays of these. Either the `i` or the `f`
     * variants may be used to provide values for uniform variables of type bool, bvec2, bvec3, bvec4, or arrays of
     * these. The uniform variable will be set to false if the input value is 0 or 0.0f, and it will be set to true
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glUniform ` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glUniform{1|2|3|4}{f|i}v` can be used to modify a single uniform variable or a uniform variable
     * array. These commands pass a count and a pointer to the values to be loaded into a uniform variable or a
     * uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable, and a
     * count of 1 or greater can be used to modify an entire array or part of an array. When loading *n* elements
     * starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the array will be
     * replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in *`value`*, and it should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match the data type for the
     * specified uniform variable as described previously for `glUniform{1|2|3|4}{f|i}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glUniform3f` or `glUniform3fv` can be used to load a uniform variable array of type
     * vec3). The number of elements of the uniform variable array to be modified is specified by *`count`*
     *
     * The commands `glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array of
     * matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number `2`
     * indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and the
     * number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with the
     * first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl3/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glUniform4dv(int $location, int $count, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glUniform4dv', 'void (*)(GLint location, GLsizei count, const GLdouble *value)');
        $proc($location, $count, $value);
    }

    /**
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glUniformMatrix2dv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glUniformMatrix2dv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $proc($location, $count, $transpose, $value);
    }

    /**
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glUniformMatrix3dv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glUniformMatrix3dv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $proc($location, $count, $transpose, $value);
    }

    /**
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glUniformMatrix4dv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glUniformMatrix4dv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $proc($location, $count, $transpose, $value);
    }

    /**
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glUniformMatrix2x3dv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glUniformMatrix2x3dv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $proc($location, $count, $transpose, $value);
    }

    /**
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glUniformMatrix2x4dv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glUniformMatrix2x4dv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $proc($location, $count, $transpose, $value);
    }

    /**
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glUniformMatrix3x2dv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glUniformMatrix3x2dv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $proc($location, $count, $transpose, $value);
    }

    /**
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glUniformMatrix3x4dv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glUniformMatrix3x4dv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $proc($location, $count, $transpose, $value);
    }

    /**
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glUniformMatrix4x2dv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glUniformMatrix4x2dv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $proc($location, $count, $transpose, $value);
    }

    /**
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glUniformMatrix4x3dv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glUniformMatrix4x3dv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $proc($location, $count, $transpose, $value);
    }

    /**
     * @since 4.0
     * @param int $program
     * @param int $location
     * @param \FFI\CData|\FFI\CFloatPtr|null $params
     * @return void
     */
    public static function glGetUniformdv(int $program, int $location, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');

        $proc = self::getProc('glGetUniformdv', 'void (*)(GLuint program, GLint location, GLdouble *params)');
        $proc($program, $location, $params);
    }

    /**
     * Returns the location of the subroutine uniform variable *`name`* in the shader stage of type *`shadertype`*
     * attached to *`program`*, with behavior otherwise identical to {@see glGetUniformLocation}.
     *
     * If *`name`* is not the name of a subroutine uniform in the shader stage, -1 is returned, but no error is
     * generated. If *`name`* is the name of a subroutine uniform in the shader stage, a value between zero and the
     * value of `GL_ACTIVE_SUBROUTINE_LOCATIONS` minus one will be returned. Subroutine locations are assigned using
     * consecutive integers in the range from zero to the value of `GL_ACTIVE_SUBROUTINE_LOCATIONS` minus one for the
     * shader stage. For active subroutine uniforms declared as arrays, the declared array elements are assigned
     * consecutive locations.
     *
     * @see http://docs.gl/gl4/glGetSubroutineUniformLocation
     * @since 4.0
     * @param int $program
     * @param int $shadertype
     * @param \FFI\CData|\FFI\CIntPtr|null $name
     * @return int
     */
    public static function glGetSubroutineUniformLocation(int $program, int $shadertype, ?\FFI\CData $name): int
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($shadertype >= 0 && $shadertype <= 4_294_967_295, 'Argument $shadertype overflow: C type GLenum is required');

        $proc = self::getProc('glGetSubroutineUniformLocation', 'GLint (*)(GLuint program, GLenum shadertype, const GLchar *name)');
        return $proc($program, $shadertype, $name);
    }

    /**
     * Returns the index of a subroutine uniform within a shader stage attached to a program object. *`program`*
     * contains the name of the program to which the shader is attached. *`shadertype`* specifies the stage from
     * which to query shader subroutine index. *`name`* contains the null-terminated name of the subroutine uniform
     * whose name to query.
     *
     * If *`name`* is not the name of a subroutine uniform in the shader stage, `GL_INVALID_INDEX` is returned, but
     * no error is generated. If *`name`* is the name of a subroutine uniform in the shader stage, a value between
     * zero and the value of `GL_ACTIVE_SUBROUTINES` minus one will be returned. Subroutine indices are assigned
     * using consecutive integers in the range from zero to the value of `GL_ACTIVE_SUBROUTINES` minus one for the
     * shader stage.
     *
     * @see http://docs.gl/gl4/glGetSubroutineIndex
     * @since 4.0
     * @param int $program
     * @param int $shadertype
     * @param \FFI\CData|\FFI\CIntPtr|null $name
     * @return int
     */
    public static function glGetSubroutineIndex(int $program, int $shadertype, ?\FFI\CData $name): int
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($shadertype >= 0 && $shadertype <= 4_294_967_295, 'Argument $shadertype overflow: C type GLenum is required');

        $proc = self::getProc('glGetSubroutineIndex', 'GLuint (*)(GLuint program, GLenum shadertype, const GLchar *name)');
        return $proc($program, $shadertype, $name);
    }

    /**
     * @since 4.0
     * @param int $program
     * @param int $shadertype
     * @param int $index
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $values
     * @return void
     */
    public static function glGetActiveSubroutineUniformiv(int $program, int $shadertype, int $index, int $pname, ?\FFI\CData $values): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($shadertype >= 0 && $shadertype <= 4_294_967_295, 'Argument $shadertype overflow: C type GLenum is required');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetActiveSubroutineUniformiv', 'void (*)(GLuint program, GLenum shadertype, GLuint index, GLenum pname, GLint *values)');
        $proc($program, $shadertype, $index, $pname, $values);
    }

    /**
     * Retrieves the name of an active shader subroutine uniform. *`program`* contains the name of the program
     * containing the uniform. *`shadertype`* specifies the stage for which which the uniform location, given by
     * *`index`*, is valid. *`index`* must be between zero and the value of `GL_ACTIVE_SUBROUTINE_UNIFORMS` minus one
     * for the shader stage.
     *
     * The uniform name is returned as a null-terminated string in *`name`*. The actual number of characters written
     * into *`name`*, excluding the null terminator is returned in *`length`*. If *`length`* is `NULL`, no length is
     * returned. The maximum number of characters that may be written into *`name`*, including the null terminator,
     * is specified by *`bufsize`*. The length of the longest subroutine uniform name in *`program`* and
     * *`shadertype`* is given by the value of `GL_ACTIVE_SUBROUTINE_UNIFORM_MAX_LENGTH`, which can be queried with
     * {@see glGetProgramStage}.
     *
     * @see http://docs.gl/gl4/glGetActiveSubroutineUniformName
     * @since 4.0
     * @param int $program
     * @param int $shadertype
     * @param int $index
     * @param int $bufsize
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @param \FFI\CData|\FFI\CIntPtr|null $name
     * @return void
     */
    public static function glGetActiveSubroutineUniformName(int $program, int $shadertype, int $index, int $bufsize, ?\FFI\CData $length, ?\FFI\CData $name): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($shadertype >= 0 && $shadertype <= 4_294_967_295, 'Argument $shadertype overflow: C type GLenum is required');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($bufsize >= \PHP_INT_MIN && $bufsize <= \PHP_INT_MAX, 'Argument $bufsize overflow: C type GLsizei is required');

        $proc = self::getProc('glGetActiveSubroutineUniformName', 'void (*)(GLuint program, GLenum shadertype, GLuint index, GLsizei bufsize, GLsizei *length, GLchar *name)');
        $proc($program, $shadertype, $index, $bufsize, $length, $name);
    }

    /**
     * Queries the name of an active shader subroutine uniform from the program object given in *`program`*.
     * *`index`* specifies the index of the shader subroutine uniform within the shader stage given by *`stage`*, and
     * must between zero and the value of `GL_ACTIVE_SUBROUTINES` minus one for the shader stage.
     *
     * The name of the selected subroutine is returned as a null-terminated string in *`name`*. The actual number of
     * characters written into *`name`*, not including the null-terminator, is is returned in *`length`*. If
     * *`length`* is `NULL`, no length is returned. The maximum number of characters that may be written into
     * *`name`*, including the null-terminator, is given in *`bufsize`*.
     *
     * @see http://docs.gl/gl4/glGetActiveSubroutineName
     * @since 4.0
     * @param int $program
     * @param int $shadertype
     * @param int $index
     * @param int $bufsize
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @param \FFI\CData|\FFI\CIntPtr|null $name
     * @return void
     */
    public static function glGetActiveSubroutineName(int $program, int $shadertype, int $index, int $bufsize, ?\FFI\CData $length, ?\FFI\CData $name): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($shadertype >= 0 && $shadertype <= 4_294_967_295, 'Argument $shadertype overflow: C type GLenum is required');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($bufsize >= \PHP_INT_MIN && $bufsize <= \PHP_INT_MAX, 'Argument $bufsize overflow: C type GLsizei is required');

        $proc = self::getProc('glGetActiveSubroutineName', 'void (*)(GLuint program, GLenum shadertype, GLuint index, GLsizei bufsize, GLsizei *length, GLchar *name)');
        $proc($program, $shadertype, $index, $bufsize, $length, $name);
    }

    /**
     * @since 4.0
     * @param int $shadertype
     * @param int $count
     * @param \FFI\CData|\FFI\CIntPtr|null $indices
     * @return void
     */
    public static function glUniformSubroutinesuiv(int $shadertype, int $count, ?\FFI\CData $indices): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($shadertype >= 0 && $shadertype <= 4_294_967_295, 'Argument $shadertype overflow: C type GLenum is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glUniformSubroutinesuiv', 'void (*)(GLenum shadertype, GLsizei count, const GLuint *indices)');
        $proc($shadertype, $count, $indices);
    }

    /**
     * @since 4.0
     * @param int $shadertype
     * @param int $location
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetUniformSubroutineuiv(int $shadertype, int $location, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($shadertype >= 0 && $shadertype <= 4_294_967_295, 'Argument $shadertype overflow: C type GLenum is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');

        $proc = self::getProc('glGetUniformSubroutineuiv', 'void (*)(GLenum shadertype, GLint location, GLuint *params)');
        $proc($shadertype, $location, $params);
    }

    /**
     * @since 4.0
     * @param int $program
     * @param int $shadertype
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $values
     * @return void
     */
    public static function glGetProgramStageiv(int $program, int $shadertype, int $pname, ?\FFI\CData $values): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($shadertype >= 0 && $shadertype <= 4_294_967_295, 'Argument $shadertype overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetProgramStageiv', 'void (*)(GLuint program, GLenum shadertype, GLenum pname, GLint *values)');
        $proc($program, $shadertype, $pname, $values);
    }

    /**
     * @since 4.0
     * @param int $pname
     * @param int $value
     * @return void
     */
    public static function glPatchParameteri(int $pname, int $value): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($value >= \PHP_INT_MIN && $value <= \PHP_INT_MAX, 'Argument $value overflow: C type GLint is required');

        $proc = self::getProc('glPatchParameteri', 'void (*)(GLenum pname, GLint value)');
        $proc($pname, $value);
    }

    /**
     * @since 4.0
     * @param int $pname
     * @param \FFI\CData|\FFI\CFloatPtr|null $values
     * @return void
     */
    public static function glPatchParameterfv(int $pname, ?\FFI\CData $values): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glPatchParameterfv', 'void (*)(GLenum pname, const GLfloat *values)');
        $proc($pname, $values);
    }

    /**
     * Binds the transform feedback object with name *`id`* to the current GL state. *`id`* must be a name previously
     * returned from a call to {@see glGenTransformFeedbacks}. If *`id`* has not previously been
     * bound, a new transform feedback object with name *`id`* and initialized with with the default transform state
     * vector is created.
     *
     * In the initial state, a default transform feedback object is bound and treated as a transform feedback object
     * with a name of zero. If the name zero is subsequently bound, the default transform feedback object is again
     * bound to the GL state.
     *
     * While a transform feedback buffer object is bound, GL operations on the target to which it is bound affect the
     * bound transform feedback object, and queries of the target to which a transform feedback object is bound
     * return state from the bound object. When buffer objects are bound for transform feedback, they are attached to
     * the currently bound transform feedback object. Buffer objects are used for trans- form feedback only if they
     * are attached to the currently bound transform feedback object.
     *
     * @see http://docs.gl/gl4/glBindTransformFeedback
     * @since 4.0
     * @param int $target
     * @param int $id
     * @return void
     */
    public static function glBindTransformFeedback(int $target, int $id): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($id >= 0 && $id <= 4_294_967_295, 'Argument $id overflow: C type GLuint is required');

        $proc = self::getProc('glBindTransformFeedback', 'void (*)(GLenum target, GLuint id)');
        $proc($target, $id);
    }

    /**
     * Deletes the *`n`* transform feedback objects whose names are stored in the array *`ids`*. Unused names in
     * *`ids`* are ignored, as is the name zero. After a transform feedback object is deleted, its name is again
     * unused and it has no contents. If an active transform feedback object is deleted, its name immediately becomes
     * unused, but the underlying object is not deleted until it is no longer active.
     *
     * @see http://docs.gl/gl4/glDeleteTransformFeedbacks
     * @since 4.0
     * @param int $n
     * @param \FFI\CData|\FFI\CIntPtr|null $ids
     * @return void
     */
    public static function glDeleteTransformFeedbacks(int $n, ?\FFI\CData $ids): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($n >= \PHP_INT_MIN && $n <= \PHP_INT_MAX, 'Argument $n overflow: C type GLsizei is required');

        $proc = self::getProc('glDeleteTransformFeedbacks', 'void (*)(GLsizei n, const GLuint *ids)');
        $proc($n, $ids);
    }

    /**
     * Returns *`n`* previously unused transform feedback object names in *`ids`*. These names are marked as used,
     * for the purposes of `glGenTransformFeedbacks` only, but they acquire transform feedback state only when they
     * are first bound.
     *
     * @see http://docs.gl/gl4/glGenTransformFeedbacks
     * @since 4.0
     * @param int $n
     * @param \FFI\CData|\FFI\CIntPtr|null $ids
     * @return void
     */
    public static function glGenTransformFeedbacks(int $n, ?\FFI\CData $ids): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($n >= \PHP_INT_MIN && $n <= \PHP_INT_MAX, 'Argument $n overflow: C type GLsizei is required');

        $proc = self::getProc('glGenTransformFeedbacks', 'void (*)(GLsizei n, GLuint *ids)');
        $proc($n, $ids);
    }

    /**
     * Returns `GL_TRUE` if *`id`* is currently the name of a transform feedback object. If *`id`* is zero, or if
     * `id` is not the name of a transform feedback object, or if an error occurs, `glIsTransformFeedback` returns
     * `GL_FALSE`. If *`id`* is a name returned by {@see glGenTransformFeedbacks}, but that has
     * not yet been bound through a call to {@see glBindTransformFeedback}, then the name is not
     * a transform feedback object and `glIsTransformFeedback` returns `GL_FALSE`.
     *
     * @see http://docs.gl/gl4/glIsTransformFeedback
     * @since 4.0
     * @param int $id
     * @return int
     */
    public static function glIsTransformFeedback(int $id): int
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($id >= 0 && $id <= 4_294_967_295, 'Argument $id overflow: C type GLuint is required');

        $proc = self::getProc('glIsTransformFeedback', 'GLboolean (*)(GLuint id)');
        return $proc($id);
    }

    /**
     * Pauses transform feedback operations on the currently active transform feedback object. When transform
     * feedback operations are paused, transform feedback is still considered active and changing most transform
     * feedback state related to the object results in an error. However, a new transform feedback object may be
     * bound while transform feedback is paused.
     *
     * @see http://docs.gl/gl4/glPauseTransformFeedback
     * @since 4.0
     * @return void
     */
    public static function glPauseTransformFeedback(): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');

        $proc = self::getProc('glPauseTransformFeedback', 'void (*)(void)');
        $proc();
    }

    /**
     * Resumes transform feedback operations on the currently active transform feedback object. When transform
     * feedback operations are paused, transform feedback is still considered active and changing most transform
     * feedback state related to the object results in an error. However, a new transform feedback object may be
     * bound while transform feedback is paused.
     *
     * @see http://docs.gl/gl4/glResumeTransformFeedback
     * @since 4.0
     * @return void
     */
    public static function glResumeTransformFeedback(): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');

        $proc = self::getProc('glResumeTransformFeedback', 'void (*)(void)');
        $proc();
    }

    /**
     * Draws primitives of a type specified by *`mode`* using a count retrieved from the transform feedback specified
     * by *`id`*. Calling `glDrawTransformFeedback` is equivalent to calling {@see glDrawArrays} with
     * *`mode`* as specified, *`first`* set to zero, and *`count`* set to the number of vertices captured on vertex
     * stream zero the last time transform feedback was active on the transform feedback object named by *`id`*.
     *
     * @see http://docs.gl/gl4/glDrawTransformFeedback
     * @since 4.0
     * @param int $mode
     * @param int $id
     * @return void
     */
    public static function glDrawTransformFeedback(int $mode, int $id): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');
        assert($id >= 0 && $id <= 4_294_967_295, 'Argument $id overflow: C type GLuint is required');

        $proc = self::getProc('glDrawTransformFeedback', 'void (*)(GLenum mode, GLuint id)');
        $proc($mode, $id);
    }

    /**
     * Draws primitives of a type specified by *`mode`* using a count retrieved from the transform feedback stream
     * specified by *`stream`* of the transform feedback object specified by *`id`*. Calling
     * `glDrawTransformFeedbackStream` is equivalent to calling {@see glDrawArrays} with *`mode`* as
     * specified, *`first`* set to zero, and *`count`* set to the number of vertices captured on vertex stream
     * *`stream`* the last time transform feedback was active on the transform feedback object named by *`id`*.
     *
     * Calling {@see glDrawTransformFeedback} is equivalent to calling
     * `glDrawTransformFeedbackStream` with *`stream`* set to zero.
     *
     * @see http://docs.gl/gl4/glDrawTransformFeedbackStream
     * @since 4.0
     * @param int $mode
     * @param int $id
     * @param int $stream
     * @return void
     */
    public static function glDrawTransformFeedbackStream(int $mode, int $id, int $stream): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');
        assert($id >= 0 && $id <= 4_294_967_295, 'Argument $id overflow: C type GLuint is required');
        assert($stream >= 0 && $stream <= 4_294_967_295, 'Argument $stream overflow: C type GLuint is required');

        $proc = self::getProc('glDrawTransformFeedbackStream', 'void (*)(GLenum mode, GLuint id, GLuint stream)');
        $proc($mode, $id, $stream);
    }

    /**
     * And {@see glEndQueryIndexed} delimit the boundaries of a query object. *`query`* must be a name
     * previously returned from a call to {@see glGenQueries}. If a query object with name *`id`* does not
     * yet exist it is created with the type determined by *`target`*. *`target`* must be one of `GL_SAMPLES_PASSED`,
     * `GL_ANY_SAMPLES_PASSED`, `GL_PRIMITIVES_GENERATED`, `GL_TRANSFORM_FEEDBACK_PRIMITIVES_WRITTEN`, or
     * `GL_TIME_ELAPSED`. The behavior of the query object depends on its type and is as follows.
     *
     * *`index`* specifies the index of the query target and must be between a *`target`*-specific maximum.
     *
     * If *`target`* is `GL_SAMPLES_PASSED`, *`id`* must be an unused name, or the name of an existing occlusion
     * query object. When `glBeginQueryIndexed` is executed, the query object's samples-passed counter is reset to 0.
     * Subsequent rendering will increment the counter for every sample that passes the depth test. If the value of
     * `GL_SAMPLE_BUFFERS` is 0, then the samples-passed count is incremented by 1 for each fragment. If the value of
     * `GL_SAMPLE_BUFFERS` is 1, then the samples-passed count is incremented by the number of samples whose coverage
     * bit is set. However, implementations, at their discression may instead increase the samples-passed count by
     * the value of `GL_SAMPLES` if any sample in the fragment is covered. When `glEndQueryIndexed` is executed, the
     * samples-passed counter is assigned to the query object's result value. This value can be queried by calling
     * {@see glGetQueryObject} with *`pname`* `GL_QUERY_RESULT`. When *`target`* is `GL_SAMPLES_PASSED`,
     * *`index`* must be zero.
     *
     * If *`target`* is `GL_ANY_SAMPLES_PASSED`, *`id`* must be an unused name, or the name of an existing boolean
     * occlusion query object. When `glBeginQueryIndexed` is executed, the query object's samples-passed flag is
     * reset to `GL_FALSE`. Subsequent rendering causes the flag to be set to `GL_TRUE` if any sample passes the
     * depth test. When `glEndQueryIndexed` is executed, the samples-passed flag is assigned to the query object's
     * result value. This value can be queried by calling {@see glGetQueryObject} with *`pname`*
     * `GL_QUERY_RESULT`. When *`target`* is `GL_ANY_SAMPLES_PASSED`, *`index`* must be zero.
     *
     * If *`target`* is `GL_PRIMITIVES_GENERATED`, *`id`* must be an unused name, or the name of an existing
     * primitive query object previously bound to the `GL_PRIMITIVES_GENERATED` query binding. When
     * `glBeginQueryIndexed` is executed, the query object's primitives-generated counter is reset to 0. Subsequent
     * rendering will increment the counter once for every vertex that is emitted from the geometry shader to the
     * stream given by *`index`*, or from the vertex shader if *`index`* is zero and no geometry shader is present.
     * When `glEndQueryIndexed` is executed, the primitives-generated counter for stream *`index`* is assigned to the
     * query object's result value. This value can be queried by calling {@see glGetQueryObject} with
     * *`pname`* `GL_QUERY_RESULT`. When *`target`* is `GL_PRIMITIVES_GENERATED`, *`index`* must be less than the
     * value of `GL_MAX_VERTEX_STREAMS`.
     *
     * If *`target`* is `GL_TRANSFORM_FEEDBACK_PRIMITIVES_WRITTEN`, *`id`* must be an unused name, or the name of an
     * existing primitive query object previously bound to the `GL_TRANSFORM_FEEDBACK_PRIMITIVES_WRITTEN` query
     * binding. When `glBeginQueryIndexed` is executed, the query object's primitives-written counter for the stream
     * specified by *`index`* is reset to 0. Subsequent rendering will increment the counter once for every vertex
     * that is written into the bound transform feedback buffer(s) for stream *`index`*. If transform feedback mode
     * is not activated between the call to `glBeginQueryIndexed` and `glEndQueryIndexed`, the counter will not be
     * incremented. When `glEndQueryIndexed` is executed, the primitives-written counter for stream *`index`* is
     * assigned to the query object's result value. This value can be queried by calling
     * {@see glGetQueryObject} with *`pname`* `GL_QUERY_RESULT`. When *`target`* is
     * `GL_TRANSFORM_FEEDBACK_PRIMITIVES_WRITTEN`, *`index`* must be less than the value of `GL_MAX_VERTEX_STREAMS`.
     *
     * If *`target`* is `GL_TIME_ELAPSED`, *`id`* must be an unused name, or the name of an existing timer query
     * object previously bound to the `GL_TIME_ELAPSED` query binding. When `glBeginQueryIndexed` is executed, the
     * query object's time counter is reset to 0. When `glEndQueryIndexed` is executed, the elapsed server time that
     * has passed since the call to `glBeginQueryIndexed` is written into the query object's time counter. This value
     * can be queried by calling {@see glGetQueryObject} with *`pname`* `GL_QUERY_RESULT`. When
     * *`target`* is `GL_TIME_ELAPSED`, *`index`* must be zero.
     *
     * Querying the `GL_QUERY_RESULT` implicitly flushes the GL pipeline until the rendering delimited by the query
     * object has completed and the result is available. `GL_QUERY_RESULT_AVAILABLE` can be queried to determine if
     * the result is immediately available or if the rendering is not yet complete.
     *
     * @see http://docs.gl/gl4/glBeginQueryIndexed
     * @since 4.0
     * @param int $target
     * @param int $index
     * @param int $id
     * @return void
     */
    public static function glBeginQueryIndexed(int $target, int $index, int $id): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($id >= 0 && $id <= 4_294_967_295, 'Argument $id overflow: C type GLuint is required');

        $proc = self::getProc('glBeginQueryIndexed', 'void (*)(GLenum target, GLuint index, GLuint id)');
        $proc($target, $index, $id);
    }

    /**
     * @see http://docs.gl/gl4/glEndQueryIndexed
     * @since 4.0
     * @param int $target
     * @param int $index
     * @return void
     */
    public static function glEndQueryIndexed(int $target, int $index): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glEndQueryIndexed', 'void (*)(GLenum target, GLuint index)');
        $proc($target, $index);
    }

    /**
     * @since 4.0
     * @param int $target
     * @param int $index
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetQueryIndexediv(int $target, int $index, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '4.0') >= 0, __FUNCTION__ . ' is available since OpenGL 4.0, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetQueryIndexediv', 'void (*)(GLenum target, GLuint index, GLenum pname, GLint *params)');
        $proc($target, $index, $pname, $params);
    }
}
