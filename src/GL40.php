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
 *
 * @version 4.0
 */
class GL40 extends GL33
{
    /**
     * Accepted by the $target parameters of BindBuffer, BufferData, BufferSubData, MapBuffer, UnmapBuffer,
     * GetBufferSubData, GetBufferPointerv, MapBufferRange, FlushMappedBufferRange, GetBufferParameteriv, and
     * CopyBufferSubData.
     *
     * @since 4.0
     * @var int
     */
    public const GL_DRAW_INDIRECT_BUFFER = 0x8F3F;

    /**
     * Accepted by the $value parameter of GetIntegerv, GetBooleanv, GetFloatv, and GetDoublev.
     *
     * @since 4.0
     * @var int
     */
    public const GL_DRAW_INDIRECT_BUFFER_BINDING = 0x8F43;

    /**
     * Accepted by the $pname parameter of GetProgramiv.
     *
     * @since 4.0
     * @var int
     */
    public const GL_GEOMETRY_SHADER_INVOCATIONS = 0x887F;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetIntegerv, GetFloatv, GetDoublev, and GetInteger64v.
     *
     * @since 4.0
     * @var int
     */
    public const
        GL_MAX_GEOMETRY_SHADER_INVOCATIONS = 0x8E5A,
        GL_MIN_FRAGMENT_INTERPOLATION_OFFSET = 0x8E5B,
        GL_MAX_FRAGMENT_INTERPOLATION_OFFSET = 0x8E5C,
        GL_FRAGMENT_INTERPOLATION_OFFSET_BITS = 0x8E5D;

    /**
     * Returned in the $type parameter of GetActiveUniform, and GetTransformFeedbackVarying.
     *
     * @since 4.0
     * @var int
     */
    public const
        GL_DOUBLE_VEC2 = 0x8FFC,
        GL_DOUBLE_VEC3 = 0x8FFD,
        GL_DOUBLE_VEC4 = 0x8FFE,
        GL_DOUBLE_MAT2 = 0x8F46,
        GL_DOUBLE_MAT3 = 0x8F47,
        GL_DOUBLE_MAT4 = 0x8F48,
        GL_DOUBLE_MAT2x3 = 0x8F49,
        GL_DOUBLE_MAT2x4 = 0x8F4A,
        GL_DOUBLE_MAT3x2 = 0x8F4B,
        GL_DOUBLE_MAT3x4 = 0x8F4C,
        GL_DOUBLE_MAT4x2 = 0x8F4D,
        GL_DOUBLE_MAT4x3 = 0x8F4E;

    /**
     * Accepted by the $cap parameter of Enable, Disable, and IsEnabled, and by the $pname parameter of
     * GetBooleanv, GetIntegerv, GetFloatv, and GetDoublev.
     *
     * @since 4.0
     * @var int
     */
    public const GL_SAMPLE_SHADING = 0x8C36;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetDoublev, GetIntegerv, and GetFloatv.
     *
     * @since 4.0
     * @var int
     */
    public const GL_MIN_SAMPLE_SHADING_VALUE = 0x8C37;

    /**
     * Accepted by the $pname parameter of GetProgramStageiv.
     *
     * @since 4.0
     * @var int
     */
    public const
        GL_ACTIVE_SUBROUTINES = 0x8DE5,
        GL_ACTIVE_SUBROUTINE_UNIFORMS = 0x8DE6,
        GL_ACTIVE_SUBROUTINE_UNIFORM_LOCATIONS = 0x8E47,
        GL_ACTIVE_SUBROUTINE_MAX_LENGTH = 0x8E48,
        GL_ACTIVE_SUBROUTINE_UNIFORM_MAX_LENGTH = 0x8E49;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetIntegerv, GetFloatv, GetDoublev, and GetInteger64v.
     *
     * @since 4.0
     * @var int
     */
    public const
        GL_MAX_SUBROUTINES = 0x8DE7,
        GL_MAX_SUBROUTINE_UNIFORM_LOCATIONS = 0x8DE8;

    /**
     * Accepted by the $pname parameter of GetActiveSubroutineUniformiv.
     *
     * @since 4.0
     * @var int
     */
    public const
        GL_NUM_COMPATIBLE_SUBROUTINES = 0x8E4A,
        GL_COMPATIBLE_SUBROUTINES = 0x8E4B;

    /**
     * Accepted by the $mode parameter of Begin and all vertex array functions that implicitly call Begin.
     *
     * @since 4.0
     * @var int
     */
    public const GL_PATCHES = 0xE;

    /**
     * Accepted by the $pname parameter of PatchParameteri, GetBooleanv, GetDoublev, GetFloatv, GetIntegerv, and GetInteger64v.
     *
     * @since 4.0
     * @var int
     */
    public const GL_PATCH_VERTICES = 0x8E72;

    /**
     * Accepted by the $pname parameter of PatchParameterfv, GetBooleanv, GetDoublev, GetFloatv, and GetIntegerv, and GetInteger64v.
     *
     * @since 4.0
     * @var int
     */
    public const
        GL_PATCH_DEFAULT_INNER_LEVEL = 0x8E73,
        GL_PATCH_DEFAULT_OUTER_LEVEL = 0x8E74;

    /**
     * Accepted by the $pname parameter of GetProgramiv.
     *
     * @since 4.0
     * @var int
     */
    public const
        GL_TESS_CONTROL_OUTPUT_VERTICES = 0x8E75,
        GL_TESS_GEN_MODE = 0x8E76,
        GL_TESS_GEN_SPACING = 0x8E77,
        GL_TESS_GEN_VERTEX_ORDER = 0x8E78,
        GL_TESS_GEN_POINT_MODE = 0x8E79;

    /**
     * Returned by GetProgramiv when $pname is TESS_GEN_MODE.
     *
     * @since 4.0
     * @var int
     */
    public const GL_ISOLINES = 0x8E7A;

    /**
     * Returned by GetProgramiv when $pname is TESS_GEN_SPACING.
     *
     * @since 4.0
     * @var int
     */
    public const
        GL_FRACTIONAL_ODD = 0x8E7B,
        GL_FRACTIONAL_EVEN = 0x8E7C;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetDoublev, GetFloatv, GetIntegerv, and GetInteger64v.
     *
     * @since 4.0
     * @var int
     */
    public const
        GL_MAX_PATCH_VERTICES = 0x8E7D,
        GL_MAX_TESS_GEN_LEVEL = 0x8E7E,
        GL_MAX_TESS_CONTROL_UNIFORM_COMPONENTS = 0x8E7F,
        GL_MAX_TESS_EVALUATION_UNIFORM_COMPONENTS = 0x8E80,
        GL_MAX_TESS_CONTROL_TEXTURE_IMAGE_UNITS = 0x8E81,
        GL_MAX_TESS_EVALUATION_TEXTURE_IMAGE_UNITS = 0x8E82,
        GL_MAX_TESS_CONTROL_OUTPUT_COMPONENTS = 0x8E83,
        GL_MAX_TESS_PATCH_COMPONENTS = 0x8E84,
        GL_MAX_TESS_CONTROL_TOTAL_OUTPUT_COMPONENTS = 0x8E85,
        GL_MAX_TESS_EVALUATION_OUTPUT_COMPONENTS = 0x8E86,
        GL_MAX_TESS_CONTROL_UNIFORM_BLOCKS = 0x8E89,
        GL_MAX_TESS_EVALUATION_UNIFORM_BLOCKS = 0x8E8A,
        GL_MAX_TESS_CONTROL_INPUT_COMPONENTS = 0x886C,
        GL_MAX_TESS_EVALUATION_INPUT_COMPONENTS = 0x886D,
        GL_MAX_COMBINED_TESS_CONTROL_UNIFORM_COMPONENTS = 0x8E1E,
        GL_MAX_COMBINED_TESS_EVALUATION_UNIFORM_COMPONENTS = 0x8E1F;

    /**
     * Accepted by the $pname parameter of GetActiveUniformBlockiv.
     *
     * @since 4.0
     * @var int
     */
    public const
        GL_UNIFORM_BLOCK_REFERENCED_BY_TESS_CONTROL_SHADER = 0x84F0,
        GL_UNIFORM_BLOCK_REFERENCED_BY_TESS_EVALUATION_SHADER = 0x84F1;

    /**
     * Accepted by the $type parameter of CreateShader and returned by the $params parameter of GetShaderiv.
     *
     * @since 4.0
     * @var int
     */
    public const
        GL_TESS_EVALUATION_SHADER = 0x8E87,
        GL_TESS_CONTROL_SHADER = 0x8E88;

    /**
     * Accepted by the $target parameter of TexParameteri, TexParameteriv, TexParameterf, TexParameterfv,
     * BindTexture, and GenerateMipmap.
     *
     * @since 4.0
     * @var int
     */
    public const GL_TEXTURE_CUBE_MAP_ARRAY = 0x9009;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetDoublev, GetIntegerv and GetFloatv.
     *
     * @since 4.0
     * @var int
     */
    public const GL_TEXTURE_BINDING_CUBE_MAP_ARRAY = 0x900A;

    /**
     * Accepted by the $target parameter of TexImage3D, TexSubImage3D, CompressedTeximage3D,
     * CompressedTexSubImage3D and CopyTexSubImage3D.
     *
     * @since 4.0
     * @var int
     */
    public const GL_PROXY_TEXTURE_CUBE_MAP_ARRAY = 0x900B;

    /**
     * Returned by the $type parameter of GetActiveUniform.
     *
     * @since 4.0
     * @var int
     */
    public const
        GL_SAMPLER_CUBE_MAP_ARRAY = 0x900C,
        GL_SAMPLER_CUBE_MAP_ARRAY_SHADOW = 0x900D,
        GL_INT_SAMPLER_CUBE_MAP_ARRAY = 0x900E,
        GL_UNSIGNED_INT_SAMPLER_CUBE_MAP_ARRAY = 0x900F;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetIntegerv, GetFloatv, and GetDoublev.
     *
     * @since 4.0
     * @var int
     */
    public const
        GL_MIN_PROGRAM_TEXTURE_GATHER_OFFSET = 0x8E5E,
        GL_MAX_PROGRAM_TEXTURE_GATHER_OFFSET = 0x8E5F;

    /**
     * Accepted by the $target parameter of BindTransformFeedback.
     *
     * @since 4.0
     * @var int
     */
    public const GL_TRANSFORM_FEEDBACK = 0x8E22;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetDoublev, GetIntegerv, and GetFloatv.
     *
     * @since 4.0
     * @var int
     */
    public const
        GL_TRANSFORM_FEEDBACK_BUFFER_PAUSED = 0x8E23,
        GL_TRANSFORM_FEEDBACK_BUFFER_ACTIVE = 0x8E24,
        GL_TRANSFORM_FEEDBACK_BINDING = 0x8E25;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetDoublev, GetIntegerv, and GetFloatv.
     *
     * @since 4.0
     * @var int
     */
    public const
        GL_MAX_TRANSFORM_FEEDBACK_BUFFERS = 0x8E70,
        GL_MAX_VERTEX_STREAMS = 0x8E71;

    /**
     * {@see GL40::beginQueryIndexed} and  {@see GL40::endQueryIndexed} delimit the boundaries of a query object.
     * $query must be a name previously returned from a call to {@see GL40::genQueries}. If a query object with
     * name $id does not yet exist it is created with the type determined by $target. $target must be one of
     * {@see GL40::GL_SAMPLES_PASSED}, {@see GL40::GL_ANY_SAMPLES_PASSED}, {@see GL40::GL_PRIMITIVES_GENERATED},
     * {@see GL40::GL_TRANSFORM_FEEDBACK_PRIMITIVES_WRITTEN}, or {@see GL40::GL_TIME_ELAPSED}. The behavior of the
     * query object depends on its type and is as follows.
     *
     * $index specifies the index of the query target and must be between a $target-specific maximum.
     *
     * If $target is {@see GL40::GL_SAMPLES_PASSED}, $id must be an unused name, or the name of an existing occlusion
     * query object. When {@see GL40::beginQueryIndexed} is executed, the query object's samples-passed counter is
     * reset to 0. Subsequent rendering will increment the counter for every sample that passes the depth test. If
     * the value of {@see GL40::GL_SAMPLE_BUFFERS} is 0, then the samples-passed count is incremented by 1 for each
     * fragment. If the value of {@see GL40::GL_SAMPLE_BUFFERS} is 1, then the samples-passed count is incremented by
     * the number of samples whose coverage bit is set. However, implementations, at their discression may instead
     * increase the samples-passed count by the value of {@see GL40::GL_SAMPLES} if any sample in the fragment is
     * covered. When {@see GL40::endQueryIndexed} is executed, the samples-passed counter is assigned to the query
     * object's result value. This value can be queried by calling {@see GL40::getQueryObject} with $pname
     * {@see GL40::GL_QUERY_RESULT}. When $target is {@see GL40::GL_SAMPLES_PASSED}, $index must be zero.
     *
     * If $target is {@see GL40::GL_ANY_SAMPLES_PASSED}, $id must be an unused name, or the name of an existing
     * boolean occlusion query object. When {@see GL40::beginQueryIndexed} is executed, the query object's
     * samples-passed flag is reset to {@see GL40::GL_FALSE}. Subsequent rendering causes the flag to be set to
     * {@see GL40::GL_TRUE} if any sample passes the depth test. When {@see GL40::endQueryIndexed} is executed, the
     * samples-passed flag is assigned to the query object's result value. This value can be queried by calling
     * {@see GL40::getQueryObject} with $pname {@see GL40::GL_QUERY_RESULT}. When $target is
     * {@see GL40::GL_ANY_SAMPLES_PASSED}, $index must be zero.
     *
     * If $target is {@see GL40::GL_PRIMITIVES_GENERATED}, $id must be an unused name, or the name of an existing
     * primitive query object previously bound to the {@see GL40::GL_PRIMITIVES_GENERATED} query binding. When
     * {@see GL40::beginQueryIndexed} is executed, the query object's primitives-generated counter is reset to 0.
     * Subsequent rendering will increment the counter once for every vertex that is emitted from the geometry shader
     * to the stream given by $index, or from the vertex shader if $index is zero and no geometry shader is present.
     * When {@see GL40::endQueryIndexed} is executed, the primitives-generated counter for stream $index is
     * assigned to the query object's result value. This value can be queried by calling
     * {@see GL40::getQueryObject} with $pname {@see GL40::GL_QUERY_RESULT}. When $target is
     * {@see GL40::GL_PRIMITIVES_GENERATED}, $index must be less than the value of
     * {@see GL40::GL_MAX_VERTEX_STREAMS}.
     *
     * If $target is {@see GL40::GL_TRANSFORM_FEEDBACK_PRIMITIVES_WRITTEN}, $id must be an unused name, or the name
     * of an existing primitive query object previously bound to the
     * {@see GL40::GL_TRANSFORM_FEEDBACK_PRIMITIVES_WRITTEN} query binding. When {@see GL40::beginQueryIndexed} is
     * executed, the query object's primitives-written counter for the stream specified by $index is reset to 0.
     * Subsequent rendering will increment the counter once for every vertex that is written into the bound transform
     * feedback buffer(s) for stream $index. If transform feedback mode is not activated between the call to
     * {@see GL40::beginQueryIndexed} and {@see GL40::endQueryIndexed}, the counter will not be incremented. When
     * {@see GL40::endQueryIndexed} is executed, the primitives-written counter for stream $index is assigned to
     * the query object's result value. This value can be queried by calling {@see GL40::getQueryObject} with
     * $pname {@see GL40::GL_QUERY_RESULT}. When $target is {@see GL40::GL_TRANSFORM_FEEDBACK_PRIMITIVES_WRITTEN},
     * $index must be less than the value of {@see GL40::GL_MAX_VERTEX_STREAMS}.
     *
     * If $target is {@see GL40::GL_TIME_ELAPSED}, $id must be an unused name, or the name of an existing timer query
     * object previously bound to the {@see GL40::GL_TIME_ELAPSED} query binding. When
     * {@see GL40::beginQueryIndexed} is executed, the query object's time counter is reset to 0. When
     * {@see GL40::endQueryIndexed} is executed, the elapsed server time that has passed since the call to
     * {@see GL40::beginQueryIndexed} is written into the query object's time counter. This value can be queried by
     * calling {@see GL40::getQueryObject} with $pname {@see GL40::GL_QUERY_RESULT}. When $target is
     * {@see GL40::GL_TIME_ELAPSED}, $index must be zero.
     *
     * Querying the {@see GL40::GL_QUERY_RESULT} implicitly flushes the GL pipeline until the rendering delimited by
     * the query object has completed and the result is available. {@see GL40::GL_QUERY_RESULT_AVAILABLE} can be
     * queried to determine if the result is immediately available or if the rendering is not yet complete.
     *
     * @see http://docs.gl/gl4/glBeginQueryIndexed
     * @since 4.0
     * @param int $target
     * @param int $index
     * @param int $id
     * @return void
     */
    public function beginQueryIndexed(int $target, int $index, int $id): void
    {
        $__proc = $this->proc('glBeginQueryIndexed', 'void (*)(GLenum target, GLuint index, GLuint id)');
        $__proc($target, $index, $id);
    }

    /**
     * {@see GL40::bindTransformFeedback} binds the transform feedback object with name $id to the current GL
     * state. $id must be a name previously returned from a call to {@see GL40::genTransformFeedbacks}. If $id has
     * not previously been bound, a new transform feedback object with name $id and initialized with the default
     * transform state vector is created.
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
    public function bindTransformFeedback(int $target, int $id): void
    {
        $__proc = $this->proc('glBindTransformFeedback', 'void (*)(GLenum target, GLuint id)');
        $__proc($target, $id);
    }

    /**
     * The blend equations determines how a new pixel (the ''source'' color) is combined with a pixel already in the
     * framebuffer (the ''destination'' color). These functions specify one blend equation for the RGB-color
     * components and one blend equation for the alpha component. {@see GL40::blendEquationSeparatei} specifies the
     * blend equations for a single draw buffer whereas {@see GL40::blendEquationSeparate} sets the blend equations
     * for all draw buffers.
     *
     * The blend equations use the source and destination blend factors specified by either {@see GL40::blendFunc}
     * or {@see GL40::blendFuncSeparate}. See {@see GL40::blendFunc} or {@see GL40::blendFuncSeparate} for a
     * description of the various blend factors.
     *
     * In the equations that follow, source and destination color components are referred to as    R s  G s  B s  A s
     *    and    R d  G d  B d  A d   , respectively. The result color is referred to as    R r  G r  B r  A r   .
     * The source and destination blend factors are denoted    s R  s G  s B  s A    and    d R  d G  d B  d A   ,
     * respectively. For these equations all color components are understood to have values in the range    0 1  .
     *       Mode     RGB Components     Alpha Component        {@see GL40::GL_FUNC_ADD}      Rr =  R s  &amp;it; s R
     *  + R d  &amp;it; d R        Gr =  G s  &amp;it; s G  + G d  &amp;it; d G        Br =  B s  &amp;it; s B  + B d
     *  &amp;it; d B          Ar =  A s  &amp;it; s A  + A d  &amp;it; d A         {@see GL40::GL_FUNC_SUBTRACT}
     * Rr =  R s  &amp;it; s R  - R d  &amp;it; d R        Gr =  G s  &amp;it; s G  - G d  &amp;it; d G        Br =
     * B s  &amp;it; s B  - B d  &amp;it; d B          Ar =  A s  &amp;it; s A  - A d  &amp;it; d A
     * {@see GL40::GL_FUNC_REVERSE_SUBTRACT}      Rr =  R d  &amp;it; d R  - R s  &amp;it; s R        Gr =  G d
     * &amp;it; d G  - G s  &amp;it; s G        Br =  B d  &amp;it; d B  - B s  &amp;it; s B          Ar =  A d
     * &amp;it; d A  - A s  &amp;it; s A         {@see GL40::GL_MIN}      Rr =  min &amp;af;   R s    R d          Gr
     * =  min &amp;af;   G s    G d          Br =  min &amp;af;   B s    B d            Ar =  min &amp;af;   A s    A
     * d           {@see GL40::GL_MAX}      Rr =  max &amp;af;   R s    R d          Gr =  max &amp;af;   G s    G d
     *         Br =  max &amp;af;   B s    B d            Ar =  max &amp;af;   A s    A d
     *
     * The results of these equations are clamped to the range    0 1  .
     *
     * The {@see GL40::GL_MIN} and {@see GL40::GL_MAX} equations are useful for applications that analyze image data
     * (image thresholding against a constant color, for example). The {@see GL40::GL_FUNC_ADD} equation is useful
     * for antialiasing and transparency, among other things.
     *
     * Initially, both the RGB blend equation and the alpha blend equation are set to {@see GL40::GL_FUNC_ADD}.
     *
     * @see http://docs.gl/gl2/glBlendEquationSeparate
     * @see http://docs.gl/gl4/glBlendEquationSeparate
     * @since 4.0
     * @param int $buf
     * @param int $modeRGB
     * @param int $modeAlpha
     * @return void
     */
    public function blendEquationSeparatei(int $buf, int $modeRGB, int $modeAlpha): void
    {
        $__proc = $this->proc('glBlendEquationSeparatei',
            'void (*)(GLuint buf, GLenum modeRGB, GLenum modeAlpha)');
        $__proc($buf, $modeRGB, $modeAlpha);
    }

    /**
     * The blend equations determine how a new pixel (the ''source'' color) is combined with a pixel already in the
     * framebuffer (the ''destination'' color). This function sets both the RGB blend equation and the alpha blend
     * equation to a single equation. {@see GL40::blendEquationi} specifies the blend equation for a single draw
     * buffer whereas {@see GL40::blendEquation} sets the blend equation for all draw buffers.
     *
     * These equations use the source and destination blend factors specified by either {@see GL40::blendFunc} or
     * {@see GL40::blendFuncSeparate}. See {@see GL40::blendFunc} or {@see GL40::blendFuncSeparate} for a
     * description of the various blend factors.
     *
     * In the equations that follow, source and destination color components are referred to as    R s  G s  B s  A s
     *    and    R d  G d  B d  A d   , respectively. The result color is referred to as    R r  G r  B r  A r   .
     * The source and destination blend factors are denoted    s R  s G  s B  s A    and    d R  d G  d B  d A   ,
     * respectively. For these equations all color components are understood to have values in the range    0 1  .
     *       Mode     RGB Components     Alpha Component        {@see GL40::GL_FUNC_ADD}      Rr =  R s  &amp;it; s R
     *  + R d  &amp;it; d R        Gr =  G s  &amp;it; s G  + G d  &amp;it; d G        Br =  B s  &amp;it; s B  + B d
     *  &amp;it; d B          Ar =  A s  &amp;it; s A  + A d  &amp;it; d A         {@see GL40::GL_FUNC_SUBTRACT}
     * Rr =  R s  &amp;it; s R  - R d  &amp;it; d R        Gr =  G s  &amp;it; s G  - G d  &amp;it; d G        Br =
     * B s  &amp;it; s B  - B d  &amp;it; d B          Ar =  A s  &amp;it; s A  - A d  &amp;it; d A
     * {@see GL40::GL_FUNC_REVERSE_SUBTRACT}      Rr =  R d  &amp;it; d R  - R s  &amp;it; s R        Gr =  G d
     * &amp;it; d G  - G s  &amp;it; s G        Br =  B d  &amp;it; d B  - B s  &amp;it; s B          Ar =  A d
     * &amp;it; d A  - A s  &amp;it; s A         {@see GL40::GL_MIN}      Rr =  min &amp;af;   R s    R d          Gr
     * =  min &amp;af;   G s    G d          Br =  min &amp;af;   B s    B d            Ar =  min &amp;af;   A s    A
     * d           {@see GL40::GL_MAX}      Rr =  max &amp;af;   R s    R d          Gr =  max &amp;af;   G s    G d
     *         Br =  max &amp;af;   B s    B d            Ar =  max &amp;af;   A s    A d
     *
     * The results of these equations are clamped to the range    0 1  .
     *
     * The {@see GL40::GL_MIN} and {@see GL40::GL_MAX} equations are useful for applications that analyze image data
     * (image thresholding against a constant color, for example). The {@see GL40::GL_FUNC_ADD} equation is useful
     * for antialiasing and transparency, among other things.
     *
     * Initially, both the RGB blend equation and the alpha blend equation are set to {@see GL40::GL_FUNC_ADD}.
     *
     * @see http://docs.gl/gl2/glBlendEquation
     * @see http://docs.gl/gl4/glBlendEquation
     * @since 4.0
     * @param int $buf
     * @param int $mode
     * @return void
     */
    public function blendEquationi(int $buf, int $mode): void
    {
        $__proc = $this->proc('glBlendEquationi', 'void (*)(GLuint buf, GLenum mode)');
        $__proc($buf, $mode);
    }

    /**
     * Pixels can be drawn using a function that blends the incoming (source) RGBA values with the RGBA values that
     * are already in the frame buffer (the destination values). Blending is initially disabled. Use
     * {@see GL40::enable} and  {@see GL40::disable} with argument {@see GL40::GL_BLEND} to enable and disable
     * blending.
     *
     * {@see GL40::blendFuncSeparate} defines the operation of blending for all draw buffers when it is enabled.
     * {@see GL40::blendFuncSeparatei} defines the operation of blending for a single draw buffer specified by $buf
     * when enabled for that draw buffer. $srcRGB specifies which method is used to scale the source RGB-color
     * components. $dstRGB specifies which method is used to scale the destination RGB-color components. Likewise,
     * $srcAlpha specifies which method is used to scale the source alpha color component, and $dstAlpha specifies
     * which method is used to scale the destination alpha component. The possible methods are described in the
     * following table. Each method defines four scale factors, one each for red, green, blue, and alpha.
     *
     * In the table and in subsequent equations, first source, second source and destination color components are
     * referred to as    R s0  G s0  B s0  A s0   ,    R s1  G s1  B s1  A s1   , and    R d  G d  B d  A d   ,
     * respectively. The color specified by {@see GL40::blendColor} is referred to as    R c  G c  B c  A c   .
     * They are understood to have integer values between 0 and    k R  k G  k B  k A   , where
     *
     *    k c  =  2  m c    - 1
     *
     * and    m R  m G  m B  m A    is the number of red, green, blue, and alpha bitplanes.
     *
     * Source and destination scale factors are referred to as    s R  s G  s B  s A    and    d R  d G  d B  d A   .
     * All scale factors have range    0 1  .
     *
     * | {@see GL40::GL_ZERO}                     |    0 0 0                                             |   0
     *      |
     * | {@see GL40::GL_ONE}                      |    1 1 1                                             |   1
     *      |
     * | {@see GL40::GL_SRC_COLOR}                |     R s0  k R    G s0  k G    B s0  k B              |    A s0  k A
     *      |
     * | {@see GL40::GL_ONE_MINUS_SRC_COLOR}      |     1 1 1  -   R s0  k R    G s0  k G    B s0  k B   |    1 -  A s0
     *  k A |
     * | {@see GL40::GL_DST_COLOR}                |     R d  k R    G d  k G    B d  k B                 |    A d  k A
     *      |
     * | {@see GL40::GL_ONE_MINUS_DST_COLOR}      |     1 1 1  -   R d  k R    G d  k G    B d  k B      |    1 -  A d
     * k A  |
     * | {@see GL40::GL_SRC_ALPHA}                |     A s0  k A    A s0  k A    A s0  k A              |    A s0  k A
     *      |
     * | {@see GL40::GL_ONE_MINUS_SRC_ALPHA}      |     1 1 1  -   A s0  k A    A s0  k A    A s0  k A   |    1 -  A s0
     *  k A |
     * | {@see GL40::GL_DST_ALPHA}                |     A d  k A    A d  k A    A d  k A                 |    A d  k A
     *      |
     * | {@see GL40::GL_ONE_MINUS_DST_ALPHA}      |     1 1 1  -   A d  k A    A d  k A    A d  k A      |    1 -  A d
     * k A  |
     * | {@see GL40::GL_CONSTANT_COLOR}           |    R c  G c  B c                                     |   A c
     *      |
     * | {@see GL40::GL_ONE_MINUS_CONSTANT_COLOR} |     1 1 1  -  R c  G c  B c                          |    1 - A c
     *      |
     * | {@see GL40::GL_CONSTANT_ALPHA}           |    A c  A c  A c                                     |   A c
     *      |
     * | {@see GL40::GL_ONE_MINUS_CONSTANT_ALPHA} |     1 1 1  -  A c  A c  A c                          |    1 - A c
     *      |
     * | {@see GL40::GL_SRC_ALPHA_SATURATE}       |    i i i                                             |   1
     *      |
     * | {@see GL40::GL_SRC1_COLOR}               |     R s1  k R    G s1  k G    B s1  k B              |    A s1  k A
     *      |
     * | {@see GL40::GL_ONE_MINUS_SRC1_COLOR}     |     1 1 1 1  -   R s1  k R    G s1  k G    B s1  k B |    1 -  A s1
     *  k A |
     * | {@see GL40::GL_SRC1_ALPHA}               |     A s1  k A    A s1  k A    A s1  k A              |    A s1  k A
     *      |
     * | {@see GL40::GL_ONE_MINUS_SRC1_ALPHA}     |     1 1 1  -   A s1  k A    A s1  k A    A s1  k A   |    1 -  A s1
     *  k A | In the table,
     *
     *    i =  min &amp;af;  A s   1 -  A d
     *
     * To determine the blended RGBA values of a pixel, the system uses the following equations:
     *
     *    R d  =  min &amp;af;  k R   R s  &amp;it; s R  + R d  &amp;it; d R          G d  =  min &amp;af;  k G   G s
     *  &amp;it; s G  + G d  &amp;it; d G          B d  =  min &amp;af;  k B   B s  &amp;it; s B  + B d  &amp;it; d B
     *          A d  =  min &amp;af;  k A   A s  &amp;it; s A  + A d  &amp;it; d A
     *
     * Despite the apparent precision of the above equations, blending arithmetic is not exactly specified, because
     * blending operates with imprecise integer color values. However, a blend factor that should be equal to 1 is
     * guaranteed not to modify its multiplicand, and a blend factor equal to 0 reduces its multiplicand to 0. For
     * example, when $srcRGB is {@see GL40::GL_SRC_ALPHA}, $dstRGB is {@see GL40::GL_ONE_MINUS_SRC_ALPHA}, and   A s
     *  is equal to   k A  , the equations reduce to simple replacement:
     *
     *    R d  = R s       G d  = G s       B d  = B s       A d  = A s
     *
     * @see http://docs.gl/gl2/glBlendFuncSeparate
     * @see http://docs.gl/gl4/glBlendFuncSeparate
     * @since 4.0
     * @param int $buf
     * @param int $srcRGB
     * @param int $dstRGB
     * @param int $srcAlpha
     * @param int $dstAlpha
     * @return void
     */
    public function blendFuncSeparatei(int $buf, int $srcRGB, int $dstRGB, int $srcAlpha, int $dstAlpha): void
    {
        $__proc = $this->proc('glBlendFuncSeparatei',
            'void (*)(GLuint buf, GLenum srcRGB, GLenum dstRGB, GLenum srcAlpha, GLenum dstAlpha)');
        $__proc($buf, $srcRGB, $dstRGB, $srcAlpha, $dstAlpha);
    }

    /**
     * Pixels can be drawn using a function that blends the incoming (source) RGBA values with the RGBA values that
     * are already in the frame buffer (the destination values). Blending is initially disabled. Use
     * {@see GL40::enable} and  {@see GL40::disable} with argument {@see GL40::GL_BLEND} to enable and disable
     * blending.
     *
     * {@see GL40::blendFunc} defines the operation of blending for all draw buffers when it is enabled.
     * {@see GL40::blendFunci} defines the operation of blending for a single draw buffer specified by $buf when
     * enabled for that draw buffer. $sfactor specifies which method is used to scale the source color components.
     * $dfactor specifies which method is used to scale the destination color components. Both parameters must be one
     * of the following symbolic constants: {@see GL40::GL_ZERO}, {@see GL40::GL_ONE}, {@see GL40::GL_SRC_COLOR},
     * {@see GL40::GL_ONE_MINUS_SRC_COLOR}, {@see GL40::GL_DST_COLOR}, {@see GL40::GL_ONE_MINUS_DST_COLOR},
     * {@see GL40::GL_SRC_ALPHA}, {@see GL40::GL_ONE_MINUS_SRC_ALPHA}, {@see GL40::GL_DST_ALPHA},
     * {@see GL40::GL_ONE_MINUS_DST_ALPHA}, {@see GL40::GL_CONSTANT_COLOR}, {@see GL40::GL_ONE_MINUS_CONSTANT_COLOR},
     * {@see GL40::GL_CONSTANT_ALPHA}, {@see GL40::GL_ONE_MINUS_CONSTANT_ALPHA}, {@see GL40::GL_SRC_ALPHA_SATURATE},
     * {@see GL40::GL_SRC1_COLOR}, {@see GL40::GL_ONE_MINUS_SRC1_COLOR}, {@see GL40::GL_SRC1_ALPHA}, and
     * {@see GL40::GL_ONE_MINUS_SRC1_ALPHA}. The possible methods are described in the following table. Each method
     * defines four scale factors, one each for red, green, blue, and alpha. In the table and in subsequent
     * equations, first source, second source and destination color components are referred to as    R s0  G s0  B s0
     *  A s0   ,    R s1  G s1  B s1  A s1    and    R d  G d  B d  A d   , respectively. The color specified by
     * {@see GL40::blendColor} is referred to as    R c  G c  B c  A c   . They are understood to have integer
     * values between 0 and    k R  k G  k B  k A   , where
     *
     *    k c  =  2  m c    - 1
     *
     * and    m R  m G  m B  m A    is the number of red, green, blue, and alpha bitplanes.
     *
     * Source and destination scale factors are referred to as    s R  s G  s B  s A    and    d R  d G  d B  d A   .
     * The scale factors described in the table, denoted    f R  f G  f B  f A   , represent either source or
     * destination factors. All scale factors have range    0 1  .
     *
     * | {@see GL40::GL_ZERO}                     |    0 0 0 0                                                        |
     * | {@see GL40::GL_ONE}                      |    1 1 1 1                                                        |
     * | {@see GL40::GL_SRC_COLOR}                |     R s0  k R    G s0  k G    B s0  k B    A s0  k A              |
     * | {@see GL40::GL_ONE_MINUS_SRC_COLOR}      |     1 1 1 1  -   R s0  k R    G s0  k G    B s0  k B    A s0  k A |
     * | {@see GL40::GL_DST_COLOR}                |     R d  k R    G d  k G    B d  k B    A d  k A                  |
     * | {@see GL40::GL_ONE_MINUS_DST_COLOR}      |     1 1 1 1  -   R d  k R    G d  k G    B d  k B    A d  k A     |
     * | {@see GL40::GL_SRC_ALPHA}                |     A s0  k A    A s0  k A    A s0  k A    A s0  k A              |
     * | {@see GL40::GL_ONE_MINUS_SRC_ALPHA}      |     1 1 1 1  -   A s0  k A    A s0  k A    A s0  k A    A s0  k A |
     * | {@see GL40::GL_DST_ALPHA}                |     A d  k A    A d  k A    A d  k A    A d  k A                  |
     * | {@see GL40::GL_ONE_MINUS_DST_ALPHA}      |     1 1 1 1  -   A d  k A    A d  k A    A d  k A    A d  k A     |
     * | {@see GL40::GL_CONSTANT_COLOR}           |    R c  G c  B c  A c                                             |
     * | {@see GL40::GL_ONE_MINUS_CONSTANT_COLOR} |     1 1 1 1  -  R c  G c  B c  A c                                |
     * | {@see GL40::GL_CONSTANT_ALPHA}           |    A c  A c  A c  A c                                             |
     * | {@see GL40::GL_ONE_MINUS_CONSTANT_ALPHA} |     1 1 1 1  -  A c  A c  A c  A c                                |
     * | {@see GL40::GL_SRC_ALPHA_SATURATE}       |    i i i 1                                                        |
     * | {@see GL40::GL_SRC1_COLOR}               |     R s1  k R    G s1  k G    B s1  k B    A s1  k A              |
     * | {@see GL40::GL_ONE_MINUS_SRC1_COLOR}     |     1 1 1 1  -   R s1  k R    G s1  k G    B s1  k B    A s1  k A |
     * | {@see GL40::GL_SRC1_ALPHA}               |     A s1  k A    A s1  k A    A s1  k A    A s1  k A              |
     * | {@see GL40::GL_ONE_MINUS_SRC1_ALPHA}     |     1 1 1 1  -   A s1  k A    A s1  k A    A s1  k A    A s1  k A |
     * In the table,
     *
     *    i =   min &amp;af;  A s   k A  - A d     k A
     *
     * To determine the blended RGBA values of a pixel, the system uses the following equations:
     *
     *    R d  =  min &amp;af;  k R   R s  &amp;it; s R  + R d  &amp;it; d R          G d  =  min &amp;af;  k G   G s
     *  &amp;it; s G  + G d  &amp;it; d G          B d  =  min &amp;af;  k B   B s  &amp;it; s B  + B d  &amp;it; d B
     *          A d  =  min &amp;af;  k A   A s  &amp;it; s A  + A d  &amp;it; d A
     *
     * Despite the apparent precision of the above equations, blending arithmetic is not exactly specified, because
     * blending operates with imprecise integer color values. However, a blend factor that should be equal to 1 is
     * guaranteed not to modify its multiplicand, and a blend factor equal to 0 reduces its multiplicand to 0. For
     * example, when $sfactor is {@see GL40::GL_SRC_ALPHA}, $dfactor is {@see GL40::GL_ONE_MINUS_SRC_ALPHA}, and   A
     * s   is equal to   k A  , the equations reduce to simple replacement:
     *
     *    R d  = R s       G d  = G s       B d  = B s       A d  = A s
     *
     * @see http://docs.gl/gl2/glBlendFunc
     * @see http://docs.gl/gl4/glBlendFunc
     * @since 4.0
     * @param int $buf
     * @param int $src
     * @param int $dst
     * @return void
     */
    public function blendFunci(int $buf, int $src, int $dst): void
    {
        $__proc = $this->proc('glBlendFunci', 'void (*)(GLuint buf, GLenum src, GLenum dst)');
        $__proc($buf, $src, $dst);
    }

    /**
     * {@see GL40::deleteTransformFeedbacks} deletes the $n transform feedback objects whose names are stored in
     * the array $ids. Unused names in $ids are ignored, as is the name zero. After a transform feedback object is
     * deleted, its name is again unused and it has no contents. If an active transform feedback object is deleted,
     * its name immediately becomes unused, but the underlying object is not deleted until it is no longer active.
     *
     * @see http://docs.gl/gl4/glDeleteTransformFeedbacks
     * @since 4.0
     * @param int $n
     * @param CData|null $ids
     * @return void
     */
    public function deleteTransformFeedbacks(int $n, ?CData $ids): void
    {
        $__proc = $this->proc('glDeleteTransformFeedbacks', 'void (*)(GLsizei n, const GLuint *ids)');
        $__proc($n, $ids);
    }

    /**
     * {@see GL40::drawArraysIndirect} specifies multiple geometric primitives with very few subroutine calls.
     * {@see GL40::drawArraysIndirect} behaves similarly to {@see GL40::drawArraysInstancedBaseInstance}, execept
     * that the parameters to {@see GL40::drawArraysInstancedBaseInstance} are stored in memory at the address
     * given by $indirect.
     *
     * The parameters addressed by $indirect are packed into a structure that takes the form (in C):
     *
     * <code>
     *     typedef  struct {
     *         uint  count;
     *         uint  primCount;
     *         uint  first;
     *         uint  baseInstance;
     *     } DrawArraysIndirectCommand;
     *
     *     const DrawArraysIndirectCommand *cmd = (const DrawArraysIndirectCommand *)indirect;
     *     glDrawArraysInstancedBaseInstance(mode, cmd->first, cmd->count, cmd->primCount, cmd->baseInstance);
     * </code>
     *
     * If a buffer is bound to the {@see GL40::GL_DRAW_INDIRECT_BUFFER} binding at the time of a call to
     * {@see GL40::drawArraysIndirect}, $indirect is interpreted as an offset, in basic machine units, into that
     * buffer and the parameter data is read from the buffer rather than from client memory.
     *
     * In contrast to {@see GL40::drawArraysInstancedBaseInstance}, the `first` member of the parameter structure
     * is unsigned, and out-of-range indices do not generate an error.
     *
     * Vertex attributes that are modified by {@see GL40::drawArraysIndirect} have an unspecified value after
     * {@see GL40::drawArraysIndirect} returns. Attributes that aren't modified remain well defined.
     *
     * @see http://docs.gl/gl4/glDrawArraysIndirect
     * @since 4.0
     * @param int $mode
     * @param CData|null $indirect
     * @return void
     */
    public function drawArraysIndirect(int $mode, ?CData $indirect): void
    {
        $__proc = $this->proc('glDrawArraysIndirect', 'void (*)(GLenum mode, const void *indirect)');
        $__proc($mode, $indirect);
    }

    /**
     * {@see GL40::drawElementsIndirect} specifies multiple indexed geometric primitives with very few subroutine
     * calls. {@see GL40::drawElementsIndirect} behaves similarly to
     * {@see GL40::drawElementsInstancedBaseVertexBaseInstance}, execpt that the parameters to
     * {@see GL40::drawElementsInstancedBaseVertexBaseInstance} are stored in memory at the address given by
     * $indirect.
     *
     * The parameters addressed by $indirect are packed into a structure that takes the form (in C):
     *
     * <code>
     *     typedef  struct {
     *         uint  count;
     *         uint  primCount;
     *         uint  firstIndex;
     *         uint  baseVertex;
     *         uint  baseInstance;
     *     } DrawElementsIndirectCommand;
     * </code>
     * {@see GL40::drawElementsIndirect} is equivalent to:
     *
     * <code>
     *     void glDrawElementsIndirect(GLenum mode, GLenum type, const void * indirect) {
     *         const DrawElementsIndirectCommand *cmd  = (const DrawElementsIndirectCommand *)indirect;
     *         glDrawElementsInstancedBaseVertexBaseInstance(mode,
     *                                                       cmd->count,
     *                                                       type,
     *                                                       cmd->firstIndex * size-of-type,
     *                                                       cmd->primCount,
     *                                                       cmd->baseVertex,
     *                                                       cmd->baseInstance);
     *     }
     * </code>
     *
     * If a buffer is bound to the {@see GL40::GL_DRAW_INDIRECT_BUFFER} binding at the time of a call to
     * {@see GL40::drawElementsIndirect}, $indirect is interpreted as an offset, in basic machine units, into that
     * buffer and the parameter data is read from the buffer rather than from client memory.
     *
     * Note that indices stored in client memory are not supported. If no buffer is bound to the
     * {@see GL40::GL_ELEMENT_ARRAY_BUFFER} binding, an error will be generated.
     *
     * The results of the operation are undefined if the `reservedMustBeZero` member of the parameter structure is
     * non-zero. However, no error is generated in this case.
     *
     * Vertex attributes that are modified by {@see GL40::drawElementsIndirect} have an unspecified value after
     * {@see GL40::drawElementsIndirect} returns. Attributes that aren't modified remain well defined.
     *
     * @see http://docs.gl/gl4/glDrawElementsIndirect
     * @since 4.0
     * @param int $mode
     * @param int $type
     * @param CData|null $indirect
     * @return void
     */
    public function drawElementsIndirect(int $mode, int $type, ?CData $indirect): void
    {
        $__proc = $this->proc('glDrawElementsIndirect',
            'void (*)(GLenum mode, GLenum type, const void *indirect)');
        $__proc($mode, $type, $indirect);
    }

    /**
     * {@see GL40::drawTransformFeedback} draws primitives of a type specified by $mode using a count retrieved
     * from the transform feedback specified by $id. Calling {@see GL40::drawTransformFeedback} is equivalent to
     * calling {@see GL40::drawArrays} with $mode as specified, $first set to zero, and $count set to the number of
     * vertices captured on vertex stream zero the last time transform feedback was active on the transform feedback
     * object named by $id.
     *
     * @see http://docs.gl/gl4/glDrawTransformFeedback
     * @since 4.0
     * @param int $mode
     * @param int $id
     * @return void
     */
    public function drawTransformFeedback(int $mode, int $id): void
    {
        $__proc = $this->proc('glDrawTransformFeedback', 'void (*)(GLenum mode, GLuint id)');
        $__proc($mode, $id);
    }

    /**
     * {@see GL40::drawTransformFeedbackStream} draws primitives of a type specified by $mode using a count
     * retrieved from the transform feedback stream specified by $stream of the transform feedback object specified
     * by $id. Calling {@see GL40::drawTransformFeedbackStream} is equivalent to calling {@see GL40::drawArrays}
     * with $mode as specified, $first set to zero, and $count set to the number of vertices captured on vertex
     * stream $stream the last time transform feedback was active on the transform feedback object named by $id.
     *
     * Calling {@see GL40::drawTransformFeedback} is equivalent to calling
     * {@see GL40::drawTransformFeedbackStream} with $stream set to zero.
     *
     * @see http://docs.gl/gl4/glDrawTransformFeedbackStream
     * @since 4.0
     * @param int $mode
     * @param int $id
     * @param int $stream
     * @return void
     */
    public function drawTransformFeedbackStream(int $mode, int $id, int $stream): void
    {
        $__proc = $this->proc('glDrawTransformFeedbackStream', 'void (*)(GLenum mode, GLuint id, GLuint stream)');
        $__proc($mode, $id, $stream);
    }

    /**
     * {@see GL40::getQueryIndexediv} returns in $params a selected parameter of the indexed query object target
     * specified by $target and $index. $index specifies the index of the query object target and must be between
     * zero and a target-specific maxiumum.
     *
     * $pname names a specific query object target parameter. When $pname is {@see GL40::GL_CURRENT_QUERY}, the name
     * of the currently active query for the specified $index of $target, or zero if no query is active, will be
     * placed in $params. If $pname is {@see GL40::GL_QUERY_COUNTER_BITS}, the implementation-dependent number of
     * bits used to hold the result of queries for $target is returned in $params.
     *
     * @see http://docs.gl/gl4/glGetQueryIndexed
     * @since 4.0
     * @param int $target
     * @param int $index
     * @return void
     */
    public function endQueryIndexed(int $target, int $index): void
    {
        $__proc = $this->proc('glEndQueryIndexed', 'void (*)(GLenum target, GLuint index)');
        $__proc($target, $index);
    }

    /**
     * {@see GL40::genTransformFeedbacks} returns $n previously unused transform feedback object names in $ids.
     * These names are marked as used, for the purposes of {@see GL40::genTransformFeedbacks} only, but they
     * acquire transform feedback state only when they are first bound.
     *
     * @see http://docs.gl/gl4/glGenTransformFeedbacks
     * @since 4.0
     * @param int $n
     * @param int|null $ids
     * @return void
     */
    public function genTransformFeedbacks(int $n, ?int &$ids): void
    {
        $idsCType = $this->info->ffi->new('GLuint', false);
        try {
            $__proc = $this->proc('glGenTransformFeedbacks', 'void (*)(GLsizei n, GLuint *ids)');
            $__proc($n, \FFI::addr($idsCType));
        } finally {
            $ids = $idsCType->cdata;
            \FFI::free($idsCType);
        }
    }

    /**
     * {@see GL40::getActiveSubroutineName} queries the name of an active shader subroutine uniform from the
     * program object given in $program. $index specifies the index of the shader subroutine uniform within the
     * shader stage given by $stage, and must between zero and the value of {@see GL40::GL_ACTIVE_SUBROUTINES} minus
     * one for the shader stage.
     *
     * The name of the selected subroutine is returned as a null-terminated string in $name. The actual number of
     * characters written into $name, not including the null-terminator, is returned in $length. If $length is
     * {@see GL46::NULL}, no length is returned. The maximum number of characters that may be written into $name,
     * including the null-terminator, is given in $bufSize.
     *
     * @see http://docs.gl/gl4/glGetActiveSubroutineName
     * @since 4.0
     * @param int $program
     * @param int $shadertype
     * @param int $index
     * @param int $bufSize
     * @param int|null $length
     * @param string|null $name
     * @return void
     */
    public function getActiveSubroutineName(
        int $program,
        int $shadertype,
        int $index,
        int $bufSize,
        ?int &$length,
        ?string &$name
    ): void {
        $lengthCType = $this->info->ffi->new('GLsizei', false);
        $nameCType = \FFI::addr($this->info->ffi->new('GLchar[' . $bufSize . ']', false)[0]);
        try {
            $__proc = $this->proc('glGetActiveSubroutineName',
                'void (*)(GLuint program, GLenum shadertype, GLuint index, GLsizei bufsize, GLsizei *length, GLchar *name)');
            $__proc($program, $shadertype, $index, $bufSize, \FFI::addr($lengthCType), $nameCType);
        } finally {
            $length = $lengthCType->cdata;
            \FFI::free($lengthCType);
            $name = \FFI::string($nameCType);
            \FFI::free($nameCType);
        }
    }

    /**
     * {@see GL40::getActiveSubroutineUniformName} retrieves the name of an active shader subroutine uniform.
     * $program contains the name of the program containing the uniform. $shadertype specifies the stage for which
     * the uniform location, given by $index, is valid. $index must be between zero and the value of
     * {@see GL40::GL_ACTIVE_SUBROUTINE_UNIFORMS} minus one for the shader stage.
     *
     * The uniform name is returned as a null-terminated string in $name. The actual number of characters written
     * into $name, excluding the null terminator is returned in $length. If $length is {@see GL46::NULL}, no length
     * is returned. The maximum number of characters that may be written into $name, including the null terminator,
     * is specified by $bufSize. The length of the longest subroutine uniform name in $program and $shadertype is
     * given by the value of {@see GL40::GL_ACTIVE_SUBROUTINE_UNIFORM_MAX_LENGTH}, which can be queried with
     * {@see GL40::getProgramStage}.
     *
     * @see http://docs.gl/gl4/glGetActiveSubroutineUniformName
     * @since 4.0
     * @param int $program
     * @param int $shadertype
     * @param int $index
     * @param int $bufSize
     * @param int|null $length
     * @param string|null $name
     * @return void
     */
    public function getActiveSubroutineUniformName(
        int $program,
        int $shadertype,
        int $index,
        int $bufSize,
        ?int &$length,
        ?string &$name
    ): void {
        $lengthCType = $this->info->ffi->new('GLsizei', false);
        $nameCType = \FFI::addr($this->info->ffi->new('GLchar[' . $bufSize . ']', false)[0]);
        try {
            $__proc = $this->proc('glGetActiveSubroutineUniformName',
                'void (*)(GLuint program, GLenum shadertype, GLuint index, GLsizei bufsize, GLsizei *length, GLchar *name)');
            $__proc($program, $shadertype, $index, $bufSize, \FFI::addr($lengthCType), $nameCType);
        } finally {
            $length = $lengthCType->cdata;
            \FFI::free($lengthCType);
            $name = \FFI::string($nameCType);
            \FFI::free($nameCType);
        }
    }

    /**
     * {@see GL40::getActiveSubroutineUniform} queries a parameter of an active shader subroutine uniform. $program
     * contains the name of the program containing the uniform. $shadertype specifies the stage which the uniform
     * location, given by $index, is valid. $index must be between zero and the value of
     * {@see GL40::GL_ACTIVE_SUBROUTINE_UNIFORMS} minus one for the shader stage.
     *
     * If $pname is {@see GL40::GL_NUM_COMPATIBLE_SUBROUTINES}, a single integer indicating the number of subroutines
     * that can be assigned to the uniform is returned in $values.
     *
     * If $pname is {@see GL40::GL_COMPATIBLE_SUBROUTINES}, an array of integers is returned in $values, with each
     * integer specifying the index of an active subroutine that can be assigned to the selected subroutine uniform.
     * The number of integers returned is the same as the value returned for
     * {@see GL40::GL_NUM_COMPATIBLE_SUBROUTINES}.
     *
     * If $pname is {@see GL40::GL_UNIFORM_SIZE}, a single integer is returned in $values. If the selected subroutine
     * uniform is an array, the declared size of the array is returned; otherwise, one is returned.
     *
     * If $pname is {@see GL40::GL_UNIFORM_NAME_LENGTH}, a single integer specifying the length of the subroutine
     * uniform name (including the terminating null character) is returned in $values.
     *
     * @see http://docs.gl/gl4/glGetActiveSubroutineUniform
     * @since 4.0
     * @param int $program
     * @param int $shadertype
     * @param int $index
     * @param int $pname
     * @param int|null $values
     * @return void
     */
    public function getActiveSubroutineUniformiv(
        int $program,
        int $shadertype,
        int $index,
        int $pname,
        ?int &$values
    ): void {
        $valuesCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->proc('glGetActiveSubroutineUniformiv',
                'void (*)(GLuint program, GLenum shadertype, GLuint index, GLenum pname, GLint *values)');
            $__proc($program, $shadertype, $index, $pname, \FFI::addr($valuesCType));
        } finally {
            $values = $valuesCType->cdata;
            \FFI::free($valuesCType);
        }
    }

    /**
     * {@see GL40::getProgramStage} queries a parameter of a shader stage attached to a program object. $program
     * contains the name of the program to which the shader is attached. $shadertype specifies the stage from which
     * to query the parameter. $pname specifies which parameter should be queried. The value or values of the
     * parameter to be queried is returned in the variable whose address is given in $values.
     *
     * If $pname is {@see GL40::GL_ACTIVE_SUBROUTINE_UNIFORMS}, the number of active subroutine variables in the
     * stage is returned in $values.
     *
     * If $pname is {@see GL40::GL_ACTIVE_SUBROUTINE_UNIFORM_LOCATIONS}, the number of active subroutine variable
     * locations in the stage is returned in $values.
     *
     * If $pname is {@see GL40::GL_ACTIVE_SUBROUTINES}, the number of active subroutines in the stage is returned in
     * $values.
     *
     * If $pname is {@see GL40::GL_ACTIVE_SUBROUTINE_UNIFORM_MAX_LENGTH}, the length of the longest subroutine
     * uniform for the stage is returned in $values.
     *
     * If $pname is {@see GL40::GL_ACTIVE_SUBROUTINE_MAX_LENGTH}, the length of the longest subroutine name for the
     * stage is returned in $values. The returned name length includes space for the null-terminator.
     *
     * If there is no shader present of type $shadertype, the returned value will be consistent with a shader
     * containing no subroutines or subroutine uniforms.
     *
     * @see http://docs.gl/gl4/glGetProgramStage
     * @since 4.0
     * @param int $program
     * @param int $shadertype
     * @param int $pname
     * @param int|null $values
     * @return void
     */
    public function getProgramStageiv(int $program, int $shadertype, int $pname, ?int &$values): void
    {
        $valuesCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->proc('glGetProgramStageiv',
                'void (*)(GLuint program, GLenum shadertype, GLenum pname, GLint *values)');
            $__proc($program, $shadertype, $pname, \FFI::addr($valuesCType));
        } finally {
            $values = $valuesCType->cdata;
            \FFI::free($valuesCType);
        }
    }

    /**
     * {@see GL40::getQueryIndexediv} returns in $params a selected parameter of the indexed query object target
     * specified by $target and $index. $index specifies the index of the query object target and must be between
     * zero and a target-specific maxiumum.
     *
     * $pname names a specific query object target parameter. When $pname is {@see GL40::GL_CURRENT_QUERY}, the name
     * of the currently active query for the specified $index of $target, or zero if no query is active, will be
     * placed in $params. If $pname is {@see GL40::GL_QUERY_COUNTER_BITS}, the implementation-dependent number of
     * bits used to hold the result of queries for $target is returned in $params.
     *
     * @see http://docs.gl/gl4/glGetQueryIndexed
     * @since 4.0
     * @param int $target
     * @param int $index
     * @param int $pname
     * @param int|null $params
     * @return void
     */
    public function getQueryIndexediv(int $target, int $index, int $pname, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->proc('glGetQueryIndexediv',
                'void (*)(GLenum target, GLuint index, GLenum pname, GLint *params)');
            $__proc($target, $index, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL40::getSubroutineIndex} returns the index of a subroutine uniform within a shader stage attached to
     * a program object. $program contains the name of the program to which the shader is attached. $shadertype
     * specifies the stage from which to query shader subroutine index. $name contains the null-terminated name of
     * the subroutine uniform whose name to query.
     *
     * If $name is not the name of a subroutine uniform in the shader stage, {@see GL40::GL_INVALID_INDEX} is
     * returned, but no error is generated. If $name is the name of a subroutine uniform in the shader stage, a value
     * between zero and the value of {@see GL40::GL_ACTIVE_SUBROUTINES} minus one will be returned. Subroutine
     * indices are assigned using consecutive integers in the range from zero to the value of
     * {@see GL40::GL_ACTIVE_SUBROUTINES} minus one for the shader stage.
     *
     * @see http://docs.gl/gl4/glGetSubroutineIndex
     * @since 4.0
     * @param int $program
     * @param int $shadertype
     * @param CData|null $name
     * @return int
     */
    public function getSubroutineIndex(int $program, int $shadertype, ?CData $name): int
    {
        $__proc = $this->proc('glGetSubroutineIndex',
            'GLuint (*)(GLuint program, GLenum shadertype, const GLchar *name)');

        return $__proc($program, $shadertype, $name);
    }

    /**
     * {@see GL40::getSubroutineUniformLocation} returns the location of the subroutine uniform variable $name in
     * the shader stage of type $shadertype attached to $program, with behavior otherwise identical to
     * {@see GL40::getUniformLocation}.
     *
     * If $name is not the name of a subroutine uniform in the shader stage, -1 is returned, but no error is
     * generated. If $name is the name of a subroutine uniform in the shader stage, a value between zero and the
     * value of {@see GL40::GL_ACTIVE_SUBROUTINE_LOCATIONS} minus one will be returned. Subroutine locations are
     * assigned using consecutive integers in the range from zero to the value of
     * {@see GL40::GL_ACTIVE_SUBROUTINE_LOCATIONS} minus one for the shader stage. For active subroutine uniforms
     * declared as arrays, the declared array elements are assigned consecutive locations.
     *
     * @see http://docs.gl/gl4/glGetSubroutineUniformLocation
     * @since 4.0
     * @param int $program
     * @param int $shadertype
     * @param CData|null $name
     * @return int
     */
    public function getSubroutineUniformLocation(int $program, int $shadertype, ?CData $name): int
    {
        $__proc = $this->proc('glGetSubroutineUniformLocation',
            'GLint (*)(GLuint program, GLenum shadertype, const GLchar *name)');

        return $__proc($program, $shadertype, $name);
    }

    /**
     * {@see GL40::getUniformSubroutine} retrieves the value of the subroutine uniform at location $location for
     * shader stage $shadertype of the current program. $location must be less than the value of
     * {@see GL40::GL_ACTIVE_SUBROUTINE_UNIFORM_LOCATIONS} for the shader currently in use at shader stage
     * $shadertype. The value of the subroutine uniform is returned in $values.
     *
     * @see http://docs.gl/gl4/glGetUniformSubroutine
     * @since 4.0
     * @param int $shadertype
     * @param int $location
     * @param int|null $params
     * @return void
     */
    public function getUniformSubroutineuiv(int $shadertype, int $location, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLuint', false);
        try {
            $__proc = $this->proc('glGetUniformSubroutineuiv',
                'void (*)(GLenum shadertype, GLint location, GLuint *params)');
            $__proc($shadertype, $location, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL40::getUniform} and {@see GL40::getnUniform} return in $params the value(s) of the specified
     * uniform variable. The type of the uniform variable specified by $location determines the number of values
     * returned. If the uniform variable is defined in the shader as a boolean, int, or float, a single value will be
     * returned. If it is defined as a vec2, ivec2, or bvec2, two values will be returned. If it is defined as a
     * vec3, ivec3, or bvec3, three values will be returned, and so on. To query values stored in uniform variables
     * declared as arrays, call {@see GL40::getUniform} for each element of the array. To query values stored in
     * uniform variables declared as structures, call {@see GL40::getUniform} for each field in the structure. The
     * values for uniform variables declared as a matrix will be returned in column major order.
     *
     * The locations assigned to uniform variables are not known until the program object is linked. After linking
     * has occurred, the command {@see GL40::getUniformLocation} can be used to obtain the location of a uniform
     * variable. This location value can then be passed to {@see GL40::getUniform} or {@see GL40::getnUniform} in
     * order to query the current value of the uniform variable. After a program object has been linked successfully,
     * the index values for uniform variables remain fixed until the next link command occurs. The uniform variable
     * values can only be queried after a link if the link was successful.
     *
     * The only difference between {@see GL40::getUniform} and {@see GL40::getnUniform} is that
     * {@see GL40::getnUniform} will generate an error if size of the $params buffer,as described by $bufSize, is
     * not large enough to hold the result data.
     *
     * @see http://docs.gl/gl2/glGetUniform
     * @see http://docs.gl/gl4/glGetUniform
     * @since 4.0
     * @param int $program
     * @param int $location
     * @param float|null $params
     * @return void
     */
    public function getUniformdv(int $program, int $location, ?float &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLdouble', false);
        try {
            $__proc = $this->proc('glGetUniformdv', 'void (*)(GLuint program, GLint location, GLdouble *params)');
            $__proc($program, $location, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL40::isTransformFeedback} returns {@see GL40::GL_TRUE} if $id is currently the name of a transform
     * feedback object. If $id is zero, or if {@see GL46::id} is not the name of a transform feedback object, or if
     * an error occurs, {@see GL40::isTransformFeedback} returns {@see GL40::GL_FALSE}. If $id is a name returned
     * by {@see GL40::genTransformFeedbacks}, but that has not yet been bound through a call to
     * {@see GL40::bindTransformFeedback}, then the name is not a transform feedback object and
     * {@see GL40::isTransformFeedback} returns {@see GL40::GL_FALSE}.
     *
     * @see http://docs.gl/gl4/glIsTransformFeedback
     * @since 4.0
     * @param int $id
     * @return bool
     */
    public function isTransformFeedback(int $id): bool
    {
        $__proc = $this->proc('glIsTransformFeedback', 'GLboolean (*)(GLuint id)');

        return $__proc($id) !== 0;
    }

    /**
     * {@see GL40::minSampleShading} specifies the rate at which samples are shaded within a covered pixel.
     * Sample-rate shading is enabled by calling {@see GL40::enable} with the parameter
     * {@see GL40::GL_SAMPLE_SHADING}. If {@see GL40::GL_MULTISAMPLE} or {@see GL40::GL_SAMPLE_SHADING} is disabled,
     * sample shading has no effect. Otherwise, an implementation must provide at least as many unique color values
     * for each covered fragment as specified by $value times $samples where $samples is the value of
     * {@see GL40::GL_SAMPLES} for the current framebuffer. At least 1 sample for each covered fragment is generated.
     *
     * A $value of 1.0 indicates that each sample in the framebuffer should be independently shaded. A $value of 0.0
     * effectively allows the GL to ignore sample rate shading. Any value between 0.0 and 1.0 allows the GL to shade
     * only a subset of the total samples within each covered fragment. Which samples are shaded and the algorithm
     * used to select that subset of the fragment's samples is implementation dependent.
     *
     * @see http://docs.gl/gl4/glMinSampleShading
     * @since 4.0
     * @param float $value
     * @return void
     */
    public function minSampleShading(float $value): void
    {
        $__proc = $this->proc('glMinSampleShading', 'void (*)(GLfloat value)');
        $__proc($value);
    }

    /**
     * {@see GL40::patchParameter} specifies the parameters that will be used for patch primitives. $pname
     * specifies the parameter to modify and must be either {@see GL40::GL_PATCH_VERTICES},
     * {@see GL40::GL_PATCH_DEFAULT_OUTER_LEVEL} or {@see GL40::GL_PATCH_DEFAULT_INNER_LEVEL}. For
     * {@see GL40::patchParameteri}, $value specifies the new value for the parameter specified by $pname. For
     * {@see GL40::patchParameterfv}, $values specifies the address of an array containing the new values for the
     * parameter specified by $pname.
     *
     * When $pname is {@see GL40::GL_PATCH_VERTICES}, $value specifies the number of vertices that will be used to
     * make up a single patch primitive. Patch primitives are consumed by the tessellation control shader (if
     * present) and subsequently used for tessellation. When primitives are specified using {@see GL40::drawArrays}
     * or a similar function, each patch will be made from $parameter control points, each represented by a vertex
     * taken from the enabeld vertex arrays. $parameter must be greater than zero, and less than or equal to the
     * value of {@see GL40::GL_MAX_PATCH_VERTICES}.
     *
     * When $pname is {@see GL40::GL_PATCH_DEFAULT_OUTER_LEVEL} or {@see GL40::GL_PATCH_DEFAULT_INNER_LEVEL}, $values
     * contains the address of an array contiaining the default outer or inner tessellation levels, respectively, to
     * be used when no tessellation control shader is present.
     *
     * @see http://docs.gl/gl4/glPatchParameter
     * @since 4.0
     * @param int $pname
     * @param CData|null $values
     * @return void
     */
    public function patchParameterfv(int $pname, ?CData $values): void
    {
        $__proc = $this->proc('glPatchParameterfv', 'void (*)(GLenum pname, const GLfloat *values)');
        $__proc($pname, $values);
    }

    /**
     * {@see GL40::patchParameter} specifies the parameters that will be used for patch primitives. $pname
     * specifies the parameter to modify and must be either {@see GL40::GL_PATCH_VERTICES},
     * {@see GL40::GL_PATCH_DEFAULT_OUTER_LEVEL} or {@see GL40::GL_PATCH_DEFAULT_INNER_LEVEL}. For
     * {@see GL40::patchParameteri}, $value specifies the new value for the parameter specified by $pname. For
     * {@see GL40::patchParameterfv}, $values specifies the address of an array containing the new values for the
     * parameter specified by $pname.
     *
     * When $pname is {@see GL40::GL_PATCH_VERTICES}, $value specifies the number of vertices that will be used to
     * make up a single patch primitive. Patch primitives are consumed by the tessellation control shader (if
     * present) and subsequently used for tessellation. When primitives are specified using {@see GL40::drawArrays}
     * or a similar function, each patch will be made from $parameter control points, each represented by a vertex
     * taken from the enabeld vertex arrays. $parameter must be greater than zero, and less than or equal to the
     * value of {@see GL40::GL_MAX_PATCH_VERTICES}.
     *
     * When $pname is {@see GL40::GL_PATCH_DEFAULT_OUTER_LEVEL} or {@see GL40::GL_PATCH_DEFAULT_INNER_LEVEL}, $values
     * contains the address of an array contiaining the default outer or inner tessellation levels, respectively, to
     * be used when no tessellation control shader is present.
     *
     * @see http://docs.gl/gl4/glPatchParameter
     * @since 4.0
     * @param int $pname
     * @param int $value
     * @return void
     */
    public function patchParameteri(int $pname, int $value): void
    {
        $__proc = $this->proc('glPatchParameteri', 'void (*)(GLenum pname, GLint value)');
        $__proc($pname, $value);
    }

    /**
     * {@see GL40::pauseTransformFeedback} pauses transform feedback operations on the currently active transform
     * feedback object. When transform feedback operations are paused, transform feedback is still considered active
     * and changing most transform feedback state related to the object results in an error. However, a new transform
     * feedback object may be bound while transform feedback is paused.
     *
     * @see http://docs.gl/gl4/glPauseTransformFeedback
     * @since 4.0
     * @return void
     */
    public function pauseTransformFeedback(): void
    {
        $__proc = $this->proc('glPauseTransformFeedback', 'void (*)()');
        $__proc();
    }

    /**
     * {@see GL40::resumeTransformFeedback} resumes transform feedback operations on the currently active transform
     * feedback object. When transform feedback operations are paused, transform feedback is still considered active
     * and changing most transform feedback state related to the object results in an error. However, a new transform
     * feedback object may be bound while transform feedback is paused.
     *
     * @see http://docs.gl/gl4/glResumeTransformFeedback
     * @since 4.0
     * @return void
     */
    public function resumeTransformFeedback(): void
    {
        $__proc = $this->proc('glResumeTransformFeedback', 'void (*)()');
        $__proc();
    }

    /**
     * {@see GL40::uniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL40::getUniformLocation}. {@see GL40::uniform} operates on the program object that was made part of
     * current state by calling {@see GL40::useProgram}.
     *
     * The commands {@see GL40::uniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
     * specified by $location using the values passed as arguments. The number specified in the command should match
     * the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix
     * {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i} indicates that
     * integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified uniform variable. The {@see GL46::i}
     * variants of this function should be used to provide values for uniform variables defined as `int`, `ivec2`,
     * `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be used to provide
     * values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays of these. The
     * {@see GL46::f} variants should be used to provide values for uniform variables of type `float`, `vec2`,
     * `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f} variants may
     * be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these.
     * The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL40::uniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL40::uniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
     * uniform variable array. These commands pass a count and a pointer to the values to be loaded into a uniform
     * variable or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform
     * variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When loading
     * n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the array
     * will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in $value, and it should match the number of
     * components in the data type of the specified uniform variable (e.g., {@see GL46::1} for float, int, bool;
     * {@see GL46::2} for vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match
     * the data type for the specified uniform variable as described previously for
     * {@see GL40::uniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL40::uniform3f} or {@see GL40::uniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL40::uniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL40::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL40::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 4.0
     * @param int $location
     * @param float $x
     * @return void
     */
    public function uniform1d(int $location, float $x): void
    {
        $__proc = $this->proc('glUniform1d', 'void (*)(GLint location, GLdouble x)');
        $__proc($location, $x);
    }

    /**
     * {@see GL40::uniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL40::getUniformLocation}. {@see GL40::uniform} operates on the program object that was made part of
     * current state by calling {@see GL40::useProgram}.
     *
     * The commands {@see GL40::uniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
     * specified by $location using the values passed as arguments. The number specified in the command should match
     * the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix
     * {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i} indicates that
     * integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified uniform variable. The {@see GL46::i}
     * variants of this function should be used to provide values for uniform variables defined as `int`, `ivec2`,
     * `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be used to provide
     * values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays of these. The
     * {@see GL46::f} variants should be used to provide values for uniform variables of type `float`, `vec2`,
     * `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f} variants may
     * be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these.
     * The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL40::uniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL40::uniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
     * uniform variable array. These commands pass a count and a pointer to the values to be loaded into a uniform
     * variable or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform
     * variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When loading
     * n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the array
     * will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in $value, and it should match the number of
     * components in the data type of the specified uniform variable (e.g., {@see GL46::1} for float, int, bool;
     * {@see GL46::2} for vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match
     * the data type for the specified uniform variable as described previously for
     * {@see GL40::uniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL40::uniform3f} or {@see GL40::uniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL40::uniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL40::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL40::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param CData|null $value
     * @return void
     */
    public function uniform1dv(int $location, int $count, ?CData $value): void
    {
        $__proc = $this->proc('glUniform1dv', 'void (*)(GLint location, GLsizei count, const GLdouble *value)');
        $__proc($location, $count, $value);
    }

    /**
     * {@see GL40::uniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL40::getUniformLocation}. {@see GL40::uniform} operates on the program object that was made part of
     * current state by calling {@see GL40::useProgram}.
     *
     * The commands {@see GL40::uniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
     * specified by $location using the values passed as arguments. The number specified in the command should match
     * the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix
     * {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i} indicates that
     * integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified uniform variable. The {@see GL46::i}
     * variants of this function should be used to provide values for uniform variables defined as `int`, `ivec2`,
     * `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be used to provide
     * values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays of these. The
     * {@see GL46::f} variants should be used to provide values for uniform variables of type `float`, `vec2`,
     * `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f} variants may
     * be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these.
     * The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL40::uniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL40::uniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
     * uniform variable array. These commands pass a count and a pointer to the values to be loaded into a uniform
     * variable or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform
     * variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When loading
     * n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the array
     * will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in $value, and it should match the number of
     * components in the data type of the specified uniform variable (e.g., {@see GL46::1} for float, int, bool;
     * {@see GL46::2} for vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match
     * the data type for the specified uniform variable as described previously for
     * {@see GL40::uniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL40::uniform3f} or {@see GL40::uniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL40::uniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL40::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL40::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 4.0
     * @param int $location
     * @param float $x
     * @param float $y
     * @return void
     */
    public function uniform2d(int $location, float $x, float $y): void
    {
        $__proc = $this->proc('glUniform2d', 'void (*)(GLint location, GLdouble x, GLdouble y)');
        $__proc($location, $x, $y);
    }

    /**
     * {@see GL40::uniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL40::getUniformLocation}. {@see GL40::uniform} operates on the program object that was made part of
     * current state by calling {@see GL40::useProgram}.
     *
     * The commands {@see GL40::uniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
     * specified by $location using the values passed as arguments. The number specified in the command should match
     * the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix
     * {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i} indicates that
     * integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified uniform variable. The {@see GL46::i}
     * variants of this function should be used to provide values for uniform variables defined as `int`, `ivec2`,
     * `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be used to provide
     * values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays of these. The
     * {@see GL46::f} variants should be used to provide values for uniform variables of type `float`, `vec2`,
     * `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f} variants may
     * be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these.
     * The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL40::uniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL40::uniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
     * uniform variable array. These commands pass a count and a pointer to the values to be loaded into a uniform
     * variable or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform
     * variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When loading
     * n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the array
     * will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in $value, and it should match the number of
     * components in the data type of the specified uniform variable (e.g., {@see GL46::1} for float, int, bool;
     * {@see GL46::2} for vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match
     * the data type for the specified uniform variable as described previously for
     * {@see GL40::uniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL40::uniform3f} or {@see GL40::uniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL40::uniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL40::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL40::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param CData|null $value
     * @return void
     */
    public function uniform2dv(int $location, int $count, ?CData $value): void
    {
        $__proc = $this->proc('glUniform2dv', 'void (*)(GLint location, GLsizei count, const GLdouble *value)');
        $__proc($location, $count, $value);
    }

    /**
     * {@see GL40::uniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL40::getUniformLocation}. {@see GL40::uniform} operates on the program object that was made part of
     * current state by calling {@see GL40::useProgram}.
     *
     * The commands {@see GL40::uniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
     * specified by $location using the values passed as arguments. The number specified in the command should match
     * the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix
     * {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i} indicates that
     * integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified uniform variable. The {@see GL46::i}
     * variants of this function should be used to provide values for uniform variables defined as `int`, `ivec2`,
     * `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be used to provide
     * values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays of these. The
     * {@see GL46::f} variants should be used to provide values for uniform variables of type `float`, `vec2`,
     * `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f} variants may
     * be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these.
     * The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL40::uniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL40::uniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
     * uniform variable array. These commands pass a count and a pointer to the values to be loaded into a uniform
     * variable or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform
     * variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When loading
     * n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the array
     * will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in $value, and it should match the number of
     * components in the data type of the specified uniform variable (e.g., {@see GL46::1} for float, int, bool;
     * {@see GL46::2} for vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match
     * the data type for the specified uniform variable as described previously for
     * {@see GL40::uniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL40::uniform3f} or {@see GL40::uniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL40::uniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL40::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL40::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 4.0
     * @param int $location
     * @param float $x
     * @param float $y
     * @param float $z
     * @return void
     */
    public function uniform3d(int $location, float $x, float $y, float $z): void
    {
        $__proc = $this->proc('glUniform3d', 'void (*)(GLint location, GLdouble x, GLdouble y, GLdouble z)');
        $__proc($location, $x, $y, $z);
    }

    /**
     * {@see GL40::uniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL40::getUniformLocation}. {@see GL40::uniform} operates on the program object that was made part of
     * current state by calling {@see GL40::useProgram}.
     *
     * The commands {@see GL40::uniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
     * specified by $location using the values passed as arguments. The number specified in the command should match
     * the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix
     * {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i} indicates that
     * integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified uniform variable. The {@see GL46::i}
     * variants of this function should be used to provide values for uniform variables defined as `int`, `ivec2`,
     * `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be used to provide
     * values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays of these. The
     * {@see GL46::f} variants should be used to provide values for uniform variables of type `float`, `vec2`,
     * `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f} variants may
     * be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these.
     * The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL40::uniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL40::uniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
     * uniform variable array. These commands pass a count and a pointer to the values to be loaded into a uniform
     * variable or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform
     * variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When loading
     * n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the array
     * will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in $value, and it should match the number of
     * components in the data type of the specified uniform variable (e.g., {@see GL46::1} for float, int, bool;
     * {@see GL46::2} for vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match
     * the data type for the specified uniform variable as described previously for
     * {@see GL40::uniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL40::uniform3f} or {@see GL40::uniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL40::uniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL40::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL40::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param CData|null $value
     * @return void
     */
    public function uniform3dv(int $location, int $count, ?CData $value): void
    {
        $__proc = $this->proc('glUniform3dv', 'void (*)(GLint location, GLsizei count, const GLdouble *value)');
        $__proc($location, $count, $value);
    }

    /**
     * {@see GL40::uniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL40::getUniformLocation}. {@see GL40::uniform} operates on the program object that was made part of
     * current state by calling {@see GL40::useProgram}.
     *
     * The commands {@see GL40::uniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
     * specified by $location using the values passed as arguments. The number specified in the command should match
     * the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix
     * {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i} indicates that
     * integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified uniform variable. The {@see GL46::i}
     * variants of this function should be used to provide values for uniform variables defined as `int`, `ivec2`,
     * `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be used to provide
     * values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays of these. The
     * {@see GL46::f} variants should be used to provide values for uniform variables of type `float`, `vec2`,
     * `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f} variants may
     * be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these.
     * The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL40::uniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL40::uniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
     * uniform variable array. These commands pass a count and a pointer to the values to be loaded into a uniform
     * variable or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform
     * variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When loading
     * n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the array
     * will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in $value, and it should match the number of
     * components in the data type of the specified uniform variable (e.g., {@see GL46::1} for float, int, bool;
     * {@see GL46::2} for vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match
     * the data type for the specified uniform variable as described previously for
     * {@see GL40::uniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL40::uniform3f} or {@see GL40::uniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL40::uniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL40::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL40::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 4.0
     * @param int $location
     * @param float $x
     * @param float $y
     * @param float $z
     * @param float $w
     * @return void
     */
    public function uniform4d(int $location, float $x, float $y, float $z, float $w): void
    {
        $__proc = $this->proc('glUniform4d',
            'void (*)(GLint location, GLdouble x, GLdouble y, GLdouble z, GLdouble w)');
        $__proc($location, $x, $y, $z, $w);
    }

    /**
     * {@see GL40::uniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL40::getUniformLocation}. {@see GL40::uniform} operates on the program object that was made part of
     * current state by calling {@see GL40::useProgram}.
     *
     * The commands {@see GL40::uniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
     * specified by $location using the values passed as arguments. The number specified in the command should match
     * the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix
     * {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i} indicates that
     * integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified uniform variable. The {@see GL46::i}
     * variants of this function should be used to provide values for uniform variables defined as `int`, `ivec2`,
     * `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be used to provide
     * values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays of these. The
     * {@see GL46::f} variants should be used to provide values for uniform variables of type `float`, `vec2`,
     * `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f} variants may
     * be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these.
     * The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL40::uniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL40::uniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
     * uniform variable array. These commands pass a count and a pointer to the values to be loaded into a uniform
     * variable or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform
     * variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When loading
     * n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the array
     * will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in $value, and it should match the number of
     * components in the data type of the specified uniform variable (e.g., {@see GL46::1} for float, int, bool;
     * {@see GL46::2} for vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match
     * the data type for the specified uniform variable as described previously for
     * {@see GL40::uniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL40::uniform3f} or {@see GL40::uniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL40::uniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL40::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL40::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param CData|null $value
     * @return void
     */
    public function uniform4dv(int $location, int $count, ?CData $value): void
    {
        $__proc = $this->proc('glUniform4dv', 'void (*)(GLint location, GLsizei count, const GLdouble *value)');
        $__proc($location, $count, $value);
    }

    /**
     * {@see GL40::uniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL40::getUniformLocation}. {@see GL40::uniform} operates on the program object that was made part of
     * current state by calling {@see GL40::useProgram}.
     *
     * The commands {@see GL40::uniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
     * specified by $location using the values passed as arguments. The number specified in the command should match
     * the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix
     * {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i} indicates that
     * integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified uniform variable. The {@see GL46::i}
     * variants of this function should be used to provide values for uniform variables defined as `int`, `ivec2`,
     * `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be used to provide
     * values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays of these. The
     * {@see GL46::f} variants should be used to provide values for uniform variables of type `float`, `vec2`,
     * `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f} variants may
     * be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these.
     * The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL40::uniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL40::uniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
     * uniform variable array. These commands pass a count and a pointer to the values to be loaded into a uniform
     * variable or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform
     * variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When loading
     * n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the array
     * will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in $value, and it should match the number of
     * components in the data type of the specified uniform variable (e.g., {@see GL46::1} for float, int, bool;
     * {@see GL46::2} for vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match
     * the data type for the specified uniform variable as described previously for
     * {@see GL40::uniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL40::uniform3f} or {@see GL40::uniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL40::uniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL40::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL40::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glLoadMatrix
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl2/gluPickMatrix
     * @see http://docs.gl/gl4/glUniform
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function uniformMatrix2dv(int $location, int $count, int $transpose, ?CData $value): void
    {
        $__proc = $this->proc('glUniformMatrix2dv',
            'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $__proc($location, $count, $transpose, $value);
    }

    /**
     * {@see GL40::uniformSubroutines} loads all active subroutine uniforms for shader stage $shadertype of the
     * current program with subroutine indices from $indices, storing $indices[i] into the uniform at location $i.
     * $count must be equal to the value of {@see GL40::GL_ACTIVE_SUBROUTINE_UNIFORM_LOCATIONS} for the program
     * currently in use at shader stage $shadertype. Furthermore, all values in $indices must be less than the value
     * of {@see GL40::GL_ACTIVE_SUBROUTINES} for the shader stage.
     *
     * @see http://docs.gl/gl4/glUniformSubroutines
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function uniformMatrix2x3dv(int $location, int $count, int $transpose, ?CData $value): void
    {
        $__proc = $this->proc('glUniformMatrix2x3dv',
            'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $__proc($location, $count, $transpose, $value);
    }

    /**
     * {@see GL40::uniformSubroutines} loads all active subroutine uniforms for shader stage $shadertype of the
     * current program with subroutine indices from $indices, storing $indices[i] into the uniform at location $i.
     * $count must be equal to the value of {@see GL40::GL_ACTIVE_SUBROUTINE_UNIFORM_LOCATIONS} for the program
     * currently in use at shader stage $shadertype. Furthermore, all values in $indices must be less than the value
     * of {@see GL40::GL_ACTIVE_SUBROUTINES} for the shader stage.
     *
     * @see http://docs.gl/gl4/glUniformSubroutines
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function uniformMatrix2x4dv(int $location, int $count, int $transpose, ?CData $value): void
    {
        $__proc = $this->proc('glUniformMatrix2x4dv',
            'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $__proc($location, $count, $transpose, $value);
    }

    /**
     * {@see GL40::uniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL40::getUniformLocation}. {@see GL40::uniform} operates on the program object that was made part of
     * current state by calling {@see GL40::useProgram}.
     *
     * The commands {@see GL40::uniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
     * specified by $location using the values passed as arguments. The number specified in the command should match
     * the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix
     * {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i} indicates that
     * integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified uniform variable. The {@see GL46::i}
     * variants of this function should be used to provide values for uniform variables defined as `int`, `ivec2`,
     * `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be used to provide
     * values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays of these. The
     * {@see GL46::f} variants should be used to provide values for uniform variables of type `float`, `vec2`,
     * `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f} variants may
     * be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these.
     * The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL40::uniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL40::uniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
     * uniform variable array. These commands pass a count and a pointer to the values to be loaded into a uniform
     * variable or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform
     * variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When loading
     * n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the array
     * will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in $value, and it should match the number of
     * components in the data type of the specified uniform variable (e.g., {@see GL46::1} for float, int, bool;
     * {@see GL46::2} for vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match
     * the data type for the specified uniform variable as described previously for
     * {@see GL40::uniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL40::uniform3f} or {@see GL40::uniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL40::uniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL40::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL40::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glLoadMatrix
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl2/gluPickMatrix
     * @see http://docs.gl/gl4/glUniform
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function uniformMatrix3dv(int $location, int $count, int $transpose, ?CData $value): void
    {
        $__proc = $this->proc('glUniformMatrix3dv',
            'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $__proc($location, $count, $transpose, $value);
    }

    /**
     * {@see GL40::uniformSubroutines} loads all active subroutine uniforms for shader stage $shadertype of the
     * current program with subroutine indices from $indices, storing $indices[i] into the uniform at location $i.
     * $count must be equal to the value of {@see GL40::GL_ACTIVE_SUBROUTINE_UNIFORM_LOCATIONS} for the program
     * currently in use at shader stage $shadertype. Furthermore, all values in $indices must be less than the value
     * of {@see GL40::GL_ACTIVE_SUBROUTINES} for the shader stage.
     *
     * @see http://docs.gl/gl4/glUniformSubroutines
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function uniformMatrix3x2dv(int $location, int $count, int $transpose, ?CData $value): void
    {
        $__proc = $this->proc('glUniformMatrix3x2dv',
            'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $__proc($location, $count, $transpose, $value);
    }

    /**
     * {@see GL40::uniformSubroutines} loads all active subroutine uniforms for shader stage $shadertype of the
     * current program with subroutine indices from $indices, storing $indices[i] into the uniform at location $i.
     * $count must be equal to the value of {@see GL40::GL_ACTIVE_SUBROUTINE_UNIFORM_LOCATIONS} for the program
     * currently in use at shader stage $shadertype. Furthermore, all values in $indices must be less than the value
     * of {@see GL40::GL_ACTIVE_SUBROUTINES} for the shader stage.
     *
     * @see http://docs.gl/gl4/glUniformSubroutines
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function uniformMatrix3x4dv(int $location, int $count, int $transpose, ?CData $value): void
    {
        $__proc = $this->proc('glUniformMatrix3x4dv',
            'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $__proc($location, $count, $transpose, $value);
    }

    /**
     * {@see GL40::uniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL40::getUniformLocation}. {@see GL40::uniform} operates on the program object that was made part of
     * current state by calling {@see GL40::useProgram}.
     *
     * The commands {@see GL40::uniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
     * specified by $location using the values passed as arguments. The number specified in the command should match
     * the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix
     * {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i} indicates that
     * integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified uniform variable. The {@see GL46::i}
     * variants of this function should be used to provide values for uniform variables defined as `int`, `ivec2`,
     * `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be used to provide
     * values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays of these. The
     * {@see GL46::f} variants should be used to provide values for uniform variables of type `float`, `vec2`,
     * `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f} variants may
     * be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these.
     * The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL40::uniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL40::uniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
     * uniform variable array. These commands pass a count and a pointer to the values to be loaded into a uniform
     * variable or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform
     * variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When loading
     * n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the array
     * will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in $value, and it should match the number of
     * components in the data type of the specified uniform variable (e.g., {@see GL46::1} for float, int, bool;
     * {@see GL46::2} for vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match
     * the data type for the specified uniform variable as described previously for
     * {@see GL40::uniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL40::uniform3f} or {@see GL40::uniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL40::uniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL40::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL40::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glLoadMatrix
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl2/gluPickMatrix
     * @see http://docs.gl/gl4/glUniform
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function uniformMatrix4dv(int $location, int $count, int $transpose, ?CData $value): void
    {
        $__proc = $this->proc('glUniformMatrix4dv',
            'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $__proc($location, $count, $transpose, $value);
    }

    /**
     * {@see GL40::uniformSubroutines} loads all active subroutine uniforms for shader stage $shadertype of the
     * current program with subroutine indices from $indices, storing $indices[i] into the uniform at location $i.
     * $count must be equal to the value of {@see GL40::GL_ACTIVE_SUBROUTINE_UNIFORM_LOCATIONS} for the program
     * currently in use at shader stage $shadertype. Furthermore, all values in $indices must be less than the value
     * of {@see GL40::GL_ACTIVE_SUBROUTINES} for the shader stage.
     *
     * @see http://docs.gl/gl4/glUniformSubroutines
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function uniformMatrix4x2dv(int $location, int $count, int $transpose, ?CData $value): void
    {
        $__proc = $this->proc('glUniformMatrix4x2dv',
            'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $__proc($location, $count, $transpose, $value);
    }

    /**
     * {@see GL40::uniformSubroutines} loads all active subroutine uniforms for shader stage $shadertype of the
     * current program with subroutine indices from $indices, storing $indices[i] into the uniform at location $i.
     * $count must be equal to the value of {@see GL40::GL_ACTIVE_SUBROUTINE_UNIFORM_LOCATIONS} for the program
     * currently in use at shader stage $shadertype. Furthermore, all values in $indices must be less than the value
     * of {@see GL40::GL_ACTIVE_SUBROUTINES} for the shader stage.
     *
     * @see http://docs.gl/gl4/glUniformSubroutines
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function uniformMatrix4x3dv(int $location, int $count, int $transpose, ?CData $value): void
    {
        $__proc = $this->proc('glUniformMatrix4x3dv',
            'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $__proc($location, $count, $transpose, $value);
    }

    /**
     * {@see GL40::uniformSubroutines} loads all active subroutine uniforms for shader stage $shadertype of the
     * current program with subroutine indices from $indices, storing $indices[i] into the uniform at location $i.
     * $count must be equal to the value of {@see GL40::GL_ACTIVE_SUBROUTINE_UNIFORM_LOCATIONS} for the program
     * currently in use at shader stage $shadertype. Furthermore, all values in $indices must be less than the value
     * of {@see GL40::GL_ACTIVE_SUBROUTINES} for the shader stage.
     *
     * @see http://docs.gl/gl4/glUniformSubroutines
     * @since 4.0
     * @param int $shadertype
     * @param int $count
     * @param CData|null $indices
     * @return void
     */
    public function uniformSubroutinesuiv(int $shadertype, int $count, ?CData $indices): void
    {
        $__proc = $this->proc('glUniformSubroutinesuiv',
            'void (*)(GLenum shadertype, GLsizei count, const GLuint *indices)');
        $__proc($shadertype, $count, $indices);
    }
}
