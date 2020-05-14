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
 * @version 4.0
 */
class GL40 extends GL33
{
    /**
     * @since 4.0
     * @var int
     */
    public const GL_SAMPLE_SHADING = 0x8C36;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_MIN_SAMPLE_SHADING_VALUE = 0x8C37;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_MIN_PROGRAM_TEXTURE_GATHER_OFFSET = 0x8E5E;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_MAX_PROGRAM_TEXTURE_GATHER_OFFSET = 0x8E5F;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_TEXTURE_CUBE_MAP_ARRAY = 0x9009;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_TEXTURE_BINDING_CUBE_MAP_ARRAY = 0x900A;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_PROXY_TEXTURE_CUBE_MAP_ARRAY = 0x900B;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_SAMPLER_CUBE_MAP_ARRAY = 0x900C;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_SAMPLER_CUBE_MAP_ARRAY_SHADOW = 0x900D;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_INT_SAMPLER_CUBE_MAP_ARRAY = 0x900E;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_UNSIGNED_INT_SAMPLER_CUBE_MAP_ARRAY = 0x900F;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_DRAW_INDIRECT_BUFFER = 0x8F3F;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_DRAW_INDIRECT_BUFFER_BINDING = 0x8F43;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_GEOMETRY_SHADER_INVOCATIONS = 0x887F;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_MAX_GEOMETRY_SHADER_INVOCATIONS = 0x8E5A;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_MIN_FRAGMENT_INTERPOLATION_OFFSET = 0x8E5B;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_MAX_FRAGMENT_INTERPOLATION_OFFSET = 0x8E5C;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_FRAGMENT_INTERPOLATION_OFFSET_BITS = 0x8E5D;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_MAX_VERTEX_STREAMS = 0x8E71;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_DOUBLE_VEC2 = 0x8FFC;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_DOUBLE_VEC3 = 0x8FFD;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_DOUBLE_VEC4 = 0x8FFE;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_DOUBLE_MAT2 = 0x8F46;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_DOUBLE_MAT3 = 0x8F47;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_DOUBLE_MAT4 = 0x8F48;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_DOUBLE_MAT2x3 = 0x8F49;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_DOUBLE_MAT2x4 = 0x8F4A;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_DOUBLE_MAT3x2 = 0x8F4B;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_DOUBLE_MAT3x4 = 0x8F4C;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_DOUBLE_MAT4x2 = 0x8F4D;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_DOUBLE_MAT4x3 = 0x8F4E;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_ACTIVE_SUBROUTINES = 0x8DE5;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_ACTIVE_SUBROUTINE_UNIFORMS = 0x8DE6;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_ACTIVE_SUBROUTINE_UNIFORM_LOCATIONS = 0x8E47;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_ACTIVE_SUBROUTINE_MAX_LENGTH = 0x8E48;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_ACTIVE_SUBROUTINE_UNIFORM_MAX_LENGTH = 0x8E49;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_MAX_SUBROUTINES = 0x8DE7;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_MAX_SUBROUTINE_UNIFORM_LOCATIONS = 0x8DE8;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_NUM_COMPATIBLE_SUBROUTINES = 0x8E4A;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_COMPATIBLE_SUBROUTINES = 0x8E4B;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_PATCHES = 0x000E;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_PATCH_VERTICES = 0x8E72;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_PATCH_DEFAULT_INNER_LEVEL = 0x8E73;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_PATCH_DEFAULT_OUTER_LEVEL = 0x8E74;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_TESS_CONTROL_OUTPUT_VERTICES = 0x8E75;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_TESS_GEN_MODE = 0x8E76;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_TESS_GEN_SPACING = 0x8E77;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_TESS_GEN_VERTEX_ORDER = 0x8E78;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_TESS_GEN_POINT_MODE = 0x8E79;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_ISOLINES = 0x8E7A;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_FRACTIONAL_ODD = 0x8E7B;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_FRACTIONAL_EVEN = 0x8E7C;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_MAX_PATCH_VERTICES = 0x8E7D;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_MAX_TESS_GEN_LEVEL = 0x8E7E;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_MAX_TESS_CONTROL_UNIFORM_COMPONENTS = 0x8E7F;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_MAX_TESS_EVALUATION_UNIFORM_COMPONENTS = 0x8E80;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_MAX_TESS_CONTROL_TEXTURE_IMAGE_UNITS = 0x8E81;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_MAX_TESS_EVALUATION_TEXTURE_IMAGE_UNITS = 0x8E82;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_MAX_TESS_CONTROL_OUTPUT_COMPONENTS = 0x8E83;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_MAX_TESS_PATCH_COMPONENTS = 0x8E84;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_MAX_TESS_CONTROL_TOTAL_OUTPUT_COMPONENTS = 0x8E85;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_MAX_TESS_EVALUATION_OUTPUT_COMPONENTS = 0x8E86;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_MAX_TESS_CONTROL_UNIFORM_BLOCKS = 0x8E89;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_MAX_TESS_EVALUATION_UNIFORM_BLOCKS = 0x8E8A;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_MAX_TESS_CONTROL_INPUT_COMPONENTS = 0x886C;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_MAX_TESS_EVALUATION_INPUT_COMPONENTS = 0x886D;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_MAX_COMBINED_TESS_CONTROL_UNIFORM_COMPONENTS = 0x8E1E;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_MAX_COMBINED_TESS_EVALUATION_UNIFORM_COMPONENTS = 0x8E1F;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_UNIFORM_BLOCK_REFERENCED_BY_TESS_CONTROL_SHADER = 0x84F0;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_UNIFORM_BLOCK_REFERENCED_BY_TESS_EVALUATION_SHADER = 0x84F1;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_TESS_EVALUATION_SHADER = 0x8E87;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_TESS_CONTROL_SHADER = 0x8E88;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_TRANSFORM_FEEDBACK = 0x8E22;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_TRANSFORM_FEEDBACK_BUFFER_PAUSED = 0x8E23;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_TRANSFORM_FEEDBACK_BUFFER_ACTIVE = 0x8E24;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_TRANSFORM_FEEDBACK_BINDING = 0x8E25;
    /**
     * @since 4.0
     * @var int
     */
    public const GL_MAX_TRANSFORM_FEEDBACK_BUFFERS = 0x8E70;

    /**
     * {@see GL46::glBeginQueryIndexed} and  {@see GL46::glEndQueryIndexed} delimit the boundaries of a query object.
     * $query must be a name previously returned from a call to {@see GL46::glGenQueries}. If a query object with
     * name $id does not yet exist it is created with the type determined by $target. $target must be one of
     * {@see GL46::GL_SAMPLES_PASSED}, {@see GL46::GL_ANY_SAMPLES_PASSED}, {@see GL46::GL_PRIMITIVES_GENERATED},
     * {@see GL46::GL_TRANSFORM_FEEDBACK_PRIMITIVES_WRITTEN}, or {@see GL46::GL_TIME_ELAPSED}. The behavior of the
     * query object depends on its type and is as follows.
     *
     * $index specifies the index of the query target and must be between a $target-specific maximum.
     *
     * If $target is {@see GL46::GL_SAMPLES_PASSED}, $id must be an unused name, or the name of an existing occlusion
     * query object. When {@see GL46::glBeginQueryIndexed} is executed, the query object's samples-passed counter is
     * reset to 0. Subsequent rendering will increment the counter for every sample that passes the depth test. If
     * the value of {@see GL46::GL_SAMPLE_BUFFERS} is 0, then the samples-passed count is incremented by 1 for each
     * fragment. If the value of {@see GL46::GL_SAMPLE_BUFFERS} is 1, then the samples-passed count is incremented by
     * the number of samples whose coverage bit is set. However, implementations, at their discression may instead
     * increase the samples-passed count by the value of {@see GL46::GL_SAMPLES} if any sample in the fragment is
     * covered. When {@see GL46::glEndQueryIndexed} is executed, the samples-passed counter is assigned to the query
     * object's result value. This value can be queried by calling {@see GL46::glGetQueryObject} with $pname
     * {@see GL46::GL_QUERY_RESULT}. When $target is {@see GL46::GL_SAMPLES_PASSED}, $index must be zero.
     *
     * If $target is {@see GL46::GL_ANY_SAMPLES_PASSED}, $id must be an unused name, or the name of an existing
     * boolean occlusion query object. When {@see GL46::glBeginQueryIndexed} is executed, the query object's
     * samples-passed flag is reset to {@see GL46::GL_FALSE}. Subsequent rendering causes the flag to be set to
     * {@see GL46::GL_TRUE} if any sample passes the depth test. When {@see GL46::glEndQueryIndexed} is executed, the
     * samples-passed flag is assigned to the query object's result value. This value can be queried by calling
     * {@see GL46::glGetQueryObject} with $pname {@see GL46::GL_QUERY_RESULT}. When $target is
     * {@see GL46::GL_ANY_SAMPLES_PASSED}, $index must be zero.
     *
     * If $target is {@see GL46::GL_PRIMITIVES_GENERATED}, $id must be an unused name, or the name of an existing
     * primitive query object previously bound to the {@see GL46::GL_PRIMITIVES_GENERATED} query binding. When
     * {@see GL46::glBeginQueryIndexed} is executed, the query object's primitives-generated counter is reset to 0.
     * Subsequent rendering will increment the counter once for every vertex that is emitted from the geometry shader
     * to the stream given by $index, or from the vertex shader if $index is zero and no geometry shader is present.
     * When {@see GL46::glEndQueryIndexed} is executed, the primitives-generated counter for stream $index is
     * assigned to the query object's result value. This value can be queried by calling
     * {@see GL46::glGetQueryObject} with $pname {@see GL46::GL_QUERY_RESULT}. When $target is
     * {@see GL46::GL_PRIMITIVES_GENERATED}, $index must be less than the value of
     * {@see GL46::GL_MAX_VERTEX_STREAMS}.
     *
     * If $target is {@see GL46::GL_TRANSFORM_FEEDBACK_PRIMITIVES_WRITTEN}, $id must be an unused name, or the name
     * of an existing primitive query object previously bound to the
     * {@see GL46::GL_TRANSFORM_FEEDBACK_PRIMITIVES_WRITTEN} query binding. When {@see GL46::glBeginQueryIndexed} is
     * executed, the query object's primitives-written counter for the stream specified by $index is reset to 0.
     * Subsequent rendering will increment the counter once for every vertex that is written into the bound transform
     * feedback buffer(s) for stream $index. If transform feedback mode is not activated between the call to
     * {@see GL46::glBeginQueryIndexed} and {@see GL46::glEndQueryIndexed}, the counter will not be incremented. When
     * {@see GL46::glEndQueryIndexed} is executed, the primitives-written counter for stream $index is assigned to
     * the query object's result value. This value can be queried by calling {@see GL46::glGetQueryObject} with
     * $pname {@see GL46::GL_QUERY_RESULT}. When $target is {@see GL46::GL_TRANSFORM_FEEDBACK_PRIMITIVES_WRITTEN},
     * $index must be less than the value of {@see GL46::GL_MAX_VERTEX_STREAMS}.
     *
     * If $target is {@see GL46::GL_TIME_ELAPSED}, $id must be an unused name, or the name of an existing timer query
     * object previously bound to the {@see GL46::GL_TIME_ELAPSED} query binding. When
     * {@see GL46::glBeginQueryIndexed} is executed, the query object's time counter is reset to 0. When
     * {@see GL46::glEndQueryIndexed} is executed, the elapsed server time that has passed since the call to
     * {@see GL46::glBeginQueryIndexed} is written into the query object's time counter. This value can be queried by
     * calling {@see GL46::glGetQueryObject} with $pname {@see GL46::GL_QUERY_RESULT}. When $target is
     * {@see GL46::GL_TIME_ELAPSED}, $index must be zero.
     *
     * Querying the {@see GL46::GL_QUERY_RESULT} implicitly flushes the GL pipeline until the rendering delimited by
     * the query object has completed and the result is available. {@see GL46::GL_QUERY_RESULT_AVAILABLE} can be
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
        $__proc = $this->getProcAs('glBeginQueryIndexed', 'void (*)(GLenum target, GLuint index, GLuint id)');
        $__proc($target, $index, $id);
    }

    /**
     * {@see GL46::glBindTransformFeedback} binds the transform feedback object with name $id to the current GL
     * state. $id must be a name previously returned from a call to {@see GL46::glGenTransformFeedbacks}. If $id has
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
        $__proc = $this->getProcAs('glBindTransformFeedback', 'void (*)(GLenum target, GLuint id)');
        $__proc($target, $id);
    }

    /**
     * The blend equations determines how a new pixel (the ''source'' color) is combined with a pixel already in the
     * framebuffer (the ''destination'' color). These functions specify one blend equation for the RGB-color
     * components and one blend equation for the alpha component. {@see GL46::glBlendEquationSeparatei} specifies the
     * blend equations for a single draw buffer whereas {@see GL46::glBlendEquationSeparate} sets the blend equations
     * for all draw buffers.
     *
     * The blend equations use the source and destination blend factors specified by either {@see GL46::glBlendFunc}
     * or {@see GL46::glBlendFuncSeparate}. See {@see GL46::glBlendFunc} or {@see GL46::glBlendFuncSeparate} for a
     * description of the various blend factors.
     *
     * In the equations that follow, source and destination color components are referred to as    R s  G s  B s  A s
     *    and    R d  G d  B d  A d   , respectively. The result color is referred to as    R r  G r  B r  A r   .
     * The source and destination blend factors are denoted    s R  s G  s B  s A    and    d R  d G  d B  d A   ,
     * respectively. For these equations all color components are understood to have values in the range    0 1  .
     *       Mode     RGB Components     Alpha Component        {@see GL46::GL_FUNC_ADD}      Rr =  R s  &amp;it; s R
     *  + R d  &amp;it; d R        Gr =  G s  &amp;it; s G  + G d  &amp;it; d G        Br =  B s  &amp;it; s B  + B d
     *  &amp;it; d B          Ar =  A s  &amp;it; s A  + A d  &amp;it; d A         {@see GL46::GL_FUNC_SUBTRACT}
     * Rr =  R s  &amp;it; s R  - R d  &amp;it; d R        Gr =  G s  &amp;it; s G  - G d  &amp;it; d G        Br =
     * B s  &amp;it; s B  - B d  &amp;it; d B          Ar =  A s  &amp;it; s A  - A d  &amp;it; d A
     * {@see GL46::GL_FUNC_REVERSE_SUBTRACT}      Rr =  R d  &amp;it; d R  - R s  &amp;it; s R        Gr =  G d
     * &amp;it; d G  - G s  &amp;it; s G        Br =  B d  &amp;it; d B  - B s  &amp;it; s B          Ar =  A d
     * &amp;it; d A  - A s  &amp;it; s A         {@see GL46::GL_MIN}      Rr =  min &amp;af;   R s    R d          Gr
     * =  min &amp;af;   G s    G d          Br =  min &amp;af;   B s    B d            Ar =  min &amp;af;   A s    A
     * d           {@see GL46::GL_MAX}      Rr =  max &amp;af;   R s    R d          Gr =  max &amp;af;   G s    G d
     *         Br =  max &amp;af;   B s    B d            Ar =  max &amp;af;   A s    A d
     *
     * The results of these equations are clamped to the range    0 1  .
     *
     * The {@see GL46::GL_MIN} and {@see GL46::GL_MAX} equations are useful for applications that analyze image data
     * (image thresholding against a constant color, for example). The {@see GL46::GL_FUNC_ADD} equation is useful
     * for antialiasing and transparency, among other things.
     *
     * Initially, both the RGB blend equation and the alpha blend equation are set to {@see GL46::GL_FUNC_ADD}.
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
        $__proc = $this->getProcAs('glBlendEquationSeparatei', 'void (*)(GLuint buf, GLenum modeRGB, GLenum modeAlpha)');
        $__proc($buf, $modeRGB, $modeAlpha);
    }

    /**
     * The blend equations determine how a new pixel (the ''source'' color) is combined with a pixel already in the
     * framebuffer (the ''destination'' color). This function sets both the RGB blend equation and the alpha blend
     * equation to a single equation. {@see GL46::glBlendEquationi} specifies the blend equation for a single draw
     * buffer whereas {@see GL46::glBlendEquation} sets the blend equation for all draw buffers.
     *
     * These equations use the source and destination blend factors specified by either {@see GL46::glBlendFunc} or
     * {@see GL46::glBlendFuncSeparate}. See {@see GL46::glBlendFunc} or {@see GL46::glBlendFuncSeparate} for a
     * description of the various blend factors.
     *
     * In the equations that follow, source and destination color components are referred to as    R s  G s  B s  A s
     *    and    R d  G d  B d  A d   , respectively. The result color is referred to as    R r  G r  B r  A r   .
     * The source and destination blend factors are denoted    s R  s G  s B  s A    and    d R  d G  d B  d A   ,
     * respectively. For these equations all color components are understood to have values in the range    0 1  .
     *       Mode     RGB Components     Alpha Component        {@see GL46::GL_FUNC_ADD}      Rr =  R s  &amp;it; s R
     *  + R d  &amp;it; d R        Gr =  G s  &amp;it; s G  + G d  &amp;it; d G        Br =  B s  &amp;it; s B  + B d
     *  &amp;it; d B          Ar =  A s  &amp;it; s A  + A d  &amp;it; d A         {@see GL46::GL_FUNC_SUBTRACT}
     * Rr =  R s  &amp;it; s R  - R d  &amp;it; d R        Gr =  G s  &amp;it; s G  - G d  &amp;it; d G        Br =
     * B s  &amp;it; s B  - B d  &amp;it; d B          Ar =  A s  &amp;it; s A  - A d  &amp;it; d A
     * {@see GL46::GL_FUNC_REVERSE_SUBTRACT}      Rr =  R d  &amp;it; d R  - R s  &amp;it; s R        Gr =  G d
     * &amp;it; d G  - G s  &amp;it; s G        Br =  B d  &amp;it; d B  - B s  &amp;it; s B          Ar =  A d
     * &amp;it; d A  - A s  &amp;it; s A         {@see GL46::GL_MIN}      Rr =  min &amp;af;   R s    R d          Gr
     * =  min &amp;af;   G s    G d          Br =  min &amp;af;   B s    B d            Ar =  min &amp;af;   A s    A
     * d           {@see GL46::GL_MAX}      Rr =  max &amp;af;   R s    R d          Gr =  max &amp;af;   G s    G d
     *         Br =  max &amp;af;   B s    B d            Ar =  max &amp;af;   A s    A d
     *
     * The results of these equations are clamped to the range    0 1  .
     *
     * The {@see GL46::GL_MIN} and {@see GL46::GL_MAX} equations are useful for applications that analyze image data
     * (image thresholding against a constant color, for example). The {@see GL46::GL_FUNC_ADD} equation is useful
     * for antialiasing and transparency, among other things.
     *
     * Initially, both the RGB blend equation and the alpha blend equation are set to {@see GL46::GL_FUNC_ADD}.
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
        $__proc = $this->getProcAs('glBlendEquationi', 'void (*)(GLuint buf, GLenum mode)');
        $__proc($buf, $mode);
    }

    /**
     * Pixels can be drawn using a function that blends the incoming (source) RGBA values with the RGBA values that
     * are already in the frame buffer (the destination values). Blending is initially disabled. Use
     * {@see GL46::glEnable} and  {@see GL46::glDisable} with argument {@see GL46::GL_BLEND} to enable and disable
     * blending.
     *
     * {@see GL46::glBlendFuncSeparate} defines the operation of blending for all draw buffers when it is enabled.
     * {@see GL46::glBlendFuncSeparatei} defines the operation of blending for a single draw buffer specified by $buf
     * when enabled for that draw buffer. $srcRGB specifies which method is used to scale the source RGB-color
     * components. $dstRGB specifies which method is used to scale the destination RGB-color components. Likewise,
     * $srcAlpha specifies which method is used to scale the source alpha color component, and $dstAlpha specifies
     * which method is used to scale the destination alpha component. The possible methods are described in the
     * following table. Each method defines four scale factors, one each for red, green, blue, and alpha.
     *
     * In the table and in subsequent equations, first source, second source and destination color components are
     * referred to as    R s0  G s0  B s0  A s0   ,    R s1  G s1  B s1  A s1   , and    R d  G d  B d  A d   ,
     * respectively. The color specified by {@see GL46::glBlendColor} is referred to as    R c  G c  B c  A c   .
     * They are understood to have integer values between 0 and    k R  k G  k B  k A   , where
     *
     *    k c  =  2  m c    - 1
     *
     * and    m R  m G  m B  m A    is the number of red, green, blue, and alpha bitplanes.
     *
     * Source and destination scale factors are referred to as    s R  s G  s B  s A    and    d R  d G  d B  d A   .
     * All scale factors have range    0 1  .
     *
     * | {@see GL46::GL_ZERO}                     |    0 0 0                                             |   0               |
     * | {@see GL46::GL_ONE}                      |    1 1 1                                             |   1               |
     * | {@see GL46::GL_SRC_COLOR}                |     R s0  k R    G s0  k G    B s0  k B              |    A s0  k A      |
     * | {@see GL46::GL_ONE_MINUS_SRC_COLOR}      |     1 1 1  -   R s0  k R    G s0  k G    B s0  k B   |    1 -  A s0  k A |
     * | {@see GL46::GL_DST_COLOR}                |     R d  k R    G d  k G    B d  k B                 |    A d  k A       |
     * | {@see GL46::GL_ONE_MINUS_DST_COLOR}      |     1 1 1  -   R d  k R    G d  k G    B d  k B      |    1 -  A d  k A  |
     * | {@see GL46::GL_SRC_ALPHA}                |     A s0  k A    A s0  k A    A s0  k A              |    A s0  k A      |
     * | {@see GL46::GL_ONE_MINUS_SRC_ALPHA}      |     1 1 1  -   A s0  k A    A s0  k A    A s0  k A   |    1 -  A s0  k A |
     * | {@see GL46::GL_DST_ALPHA}                |     A d  k A    A d  k A    A d  k A                 |    A d  k A       |
     * | {@see GL46::GL_ONE_MINUS_DST_ALPHA}      |     1 1 1  -   A d  k A    A d  k A    A d  k A      |    1 -  A d  k A  |
     * | {@see GL46::GL_CONSTANT_COLOR}           |    R c  G c  B c                                     |   A c             |
     * | {@see GL46::GL_ONE_MINUS_CONSTANT_COLOR} |     1 1 1  -  R c  G c  B c                          |    1 - A c        |
     * | {@see GL46::GL_CONSTANT_ALPHA}           |    A c  A c  A c                                     |   A c             |
     * | {@see GL46::GL_ONE_MINUS_CONSTANT_ALPHA} |     1 1 1  -  A c  A c  A c                          |    1 - A c        |
     * | {@see GL46::GL_SRC_ALPHA_SATURATE}       |    i i i                                             |   1               |
     * | {@see GL46::GL_SRC1_COLOR}               |     R s1  k R    G s1  k G    B s1  k B              |    A s1  k A      |
     * | {@see GL46::GL_ONE_MINUS_SRC1_COLOR}     |     1 1 1 1  -   R s1  k R    G s1  k G    B s1  k B |    1 -  A s1  k A |
     * | {@see GL46::GL_SRC1_ALPHA}               |     A s1  k A    A s1  k A    A s1  k A              |    A s1  k A      |
     * | {@see GL46::GL_ONE_MINUS_SRC1_ALPHA}     |     1 1 1  -   A s1  k A    A s1  k A    A s1  k A   |    1 -  A s1  k A |
     * In the table,
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
     * example, when $srcRGB is {@see GL46::GL_SRC_ALPHA}, $dstRGB is {@see GL46::GL_ONE_MINUS_SRC_ALPHA}, and   A s
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
        $__proc = $this->getProcAs('glBlendFuncSeparatei', 'void (*)(GLuint buf, GLenum srcRGB, GLenum dstRGB, GLenum srcAlpha, GLenum dstAlpha)');
        $__proc($buf, $srcRGB, $dstRGB, $srcAlpha, $dstAlpha);
    }

    /**
     * Pixels can be drawn using a function that blends the incoming (source) RGBA values with the RGBA values that
     * are already in the frame buffer (the destination values). Blending is initially disabled. Use
     * {@see GL46::glEnable} and  {@see GL46::glDisable} with argument {@see GL46::GL_BLEND} to enable and disable
     * blending.
     *
     * {@see GL46::glBlendFunc} defines the operation of blending for all draw buffers when it is enabled.
     * {@see GL46::glBlendFunci} defines the operation of blending for a single draw buffer specified by $buf when
     * enabled for that draw buffer. $sfactor specifies which method is used to scale the source color components.
     * $dfactor specifies which method is used to scale the destination color components. Both parameters must be one
     * of the following symbolic constants: {@see GL46::GL_ZERO}, {@see GL46::GL_ONE}, {@see GL46::GL_SRC_COLOR},
     * {@see GL46::GL_ONE_MINUS_SRC_COLOR}, {@see GL46::GL_DST_COLOR}, {@see GL46::GL_ONE_MINUS_DST_COLOR},
     * {@see GL46::GL_SRC_ALPHA}, {@see GL46::GL_ONE_MINUS_SRC_ALPHA}, {@see GL46::GL_DST_ALPHA},
     * {@see GL46::GL_ONE_MINUS_DST_ALPHA}, {@see GL46::GL_CONSTANT_COLOR}, {@see GL46::GL_ONE_MINUS_CONSTANT_COLOR},
     * {@see GL46::GL_CONSTANT_ALPHA}, {@see GL46::GL_ONE_MINUS_CONSTANT_ALPHA}, {@see GL46::GL_SRC_ALPHA_SATURATE},
     * {@see GL46::GL_SRC1_COLOR}, {@see GL46::GL_ONE_MINUS_SRC1_COLOR}, {@see GL46::GL_SRC1_ALPHA}, and
     * {@see GL46::GL_ONE_MINUS_SRC1_ALPHA}. The possible methods are described in the following table. Each method
     * defines four scale factors, one each for red, green, blue, and alpha. In the table and in subsequent
     * equations, first source, second source and destination color components are referred to as    R s0  G s0  B s0
     *  A s0   ,    R s1  G s1  B s1  A s1    and    R d  G d  B d  A d   , respectively. The color specified by
     * {@see GL46::glBlendColor} is referred to as    R c  G c  B c  A c   . They are understood to have integer
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
     * | {@see GL46::GL_ZERO}                     |    0 0 0 0                                                        |
     * | {@see GL46::GL_ONE}                      |    1 1 1 1                                                        |
     * | {@see GL46::GL_SRC_COLOR}                |     R s0  k R    G s0  k G    B s0  k B    A s0  k A              |
     * | {@see GL46::GL_ONE_MINUS_SRC_COLOR}      |     1 1 1 1  -   R s0  k R    G s0  k G    B s0  k B    A s0  k A |
     * | {@see GL46::GL_DST_COLOR}                |     R d  k R    G d  k G    B d  k B    A d  k A                  |
     * | {@see GL46::GL_ONE_MINUS_DST_COLOR}      |     1 1 1 1  -   R d  k R    G d  k G    B d  k B    A d  k A     |
     * | {@see GL46::GL_SRC_ALPHA}                |     A s0  k A    A s0  k A    A s0  k A    A s0  k A              |
     * | {@see GL46::GL_ONE_MINUS_SRC_ALPHA}      |     1 1 1 1  -   A s0  k A    A s0  k A    A s0  k A    A s0  k A |
     * | {@see GL46::GL_DST_ALPHA}                |     A d  k A    A d  k A    A d  k A    A d  k A                  |
     * | {@see GL46::GL_ONE_MINUS_DST_ALPHA}      |     1 1 1 1  -   A d  k A    A d  k A    A d  k A    A d  k A     |
     * | {@see GL46::GL_CONSTANT_COLOR}           |    R c  G c  B c  A c                                             |
     * | {@see GL46::GL_ONE_MINUS_CONSTANT_COLOR} |     1 1 1 1  -  R c  G c  B c  A c                                |
     * | {@see GL46::GL_CONSTANT_ALPHA}           |    A c  A c  A c  A c                                             |
     * | {@see GL46::GL_ONE_MINUS_CONSTANT_ALPHA} |     1 1 1 1  -  A c  A c  A c  A c                                |
     * | {@see GL46::GL_SRC_ALPHA_SATURATE}       |    i i i 1                                                        |
     * | {@see GL46::GL_SRC1_COLOR}               |     R s1  k R    G s1  k G    B s1  k B    A s1  k A              |
     * | {@see GL46::GL_ONE_MINUS_SRC1_COLOR}     |     1 1 1 1  -   R s1  k R    G s1  k G    B s1  k B    A s1  k A |
     * | {@see GL46::GL_SRC1_ALPHA}               |     A s1  k A    A s1  k A    A s1  k A    A s1  k A              |
     * | {@see GL46::GL_ONE_MINUS_SRC1_ALPHA}     |     1 1 1 1  -   A s1  k A    A s1  k A    A s1  k A    A s1  k A |
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
     * example, when $sfactor is {@see GL46::GL_SRC_ALPHA}, $dfactor is {@see GL46::GL_ONE_MINUS_SRC_ALPHA}, and   A
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
        $__proc = $this->getProcAs('glBlendFunci', 'void (*)(GLuint buf, GLenum src, GLenum dst)');
        $__proc($buf, $src, $dst);
    }

    /**
     * {@see GL46::glDeleteTransformFeedbacks} deletes the $n transform feedback objects whose names are stored in
     * the array $ids. Unused names in $ids are ignored, as is the name zero. After a transform feedback object is
     * deleted, its name is again unused and it has no contents. If an active transform feedback object is deleted,
     * its name immediately becomes unused, but the underlying object is not deleted until it is no longer active.
     *
     * @see http://docs.gl/gl4/glDeleteTransformFeedbacks
     * @since 4.0
     * @param int $n
     * @param \FFI\CData|null $ids
     * @return void
     */
    public function deleteTransformFeedbacks(int $n, ?\FFI\CData $ids): void
    {
        $__proc = $this->getProcAs('glDeleteTransformFeedbacks', 'void (*)(GLsizei n, const GLuint *ids)');
        $__proc($n, $ids);
    }

    /**
     * {@see GL46::glDrawArraysIndirect} specifies multiple geometric primitives with very few subroutine calls.
     * {@see GL46::glDrawArraysIndirect} behaves similarly to {@see GL46::glDrawArraysInstancedBaseInstance}, execept
     * that the parameters to {@see GL46::glDrawArraysInstancedBaseInstance} are stored in memory at the address
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
     * If a buffer is bound to the {@see GL46::GL_DRAW_INDIRECT_BUFFER} binding at the time of a call to
     * {@see GL46::glDrawArraysIndirect}, $indirect is interpreted as an offset, in basic machine units, into that
     * buffer and the parameter data is read from the buffer rather than from client memory.
     *
     * In contrast to {@see GL46::glDrawArraysInstancedBaseInstance}, the `first` member of the parameter structure
     * is unsigned, and out-of-range indices do not generate an error.
     *
     * Vertex attributes that are modified by {@see GL46::glDrawArraysIndirect} have an unspecified value after
     * {@see GL46::glDrawArraysIndirect} returns. Attributes that aren't modified remain well defined.
     *
     * @see http://docs.gl/gl4/glDrawArraysIndirect
     * @since 4.0
     * @param int $mode
     * @param \FFI\CData|null $indirect
     * @return void
     */
    public function drawArraysIndirect(int $mode, ?\FFI\CData $indirect): void
    {
        $__proc = $this->getProcAs('glDrawArraysIndirect', 'void (*)(GLenum mode, const void *indirect)');
        $__proc($mode, $indirect);
    }

    /**
     * {@see GL46::glDrawElementsIndirect} specifies multiple indexed geometric primitives with very few subroutine
     * calls. {@see GL46::glDrawElementsIndirect} behaves similarly to
     * {@see GL46::glDrawElementsInstancedBaseVertexBaseInstance}, execpt that the parameters to
     * {@see GL46::glDrawElementsInstancedBaseVertexBaseInstance} are stored in memory at the address given by
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
     * {@see GL46::glDrawElementsIndirect} is equivalent to:
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
     * If a buffer is bound to the {@see GL46::GL_DRAW_INDIRECT_BUFFER} binding at the time of a call to
     * {@see GL46::glDrawElementsIndirect}, $indirect is interpreted as an offset, in basic machine units, into that
     * buffer and the parameter data is read from the buffer rather than from client memory.
     *
     * Note that indices stored in client memory are not supported. If no buffer is bound to the
     * {@see GL46::GL_ELEMENT_ARRAY_BUFFER} binding, an error will be generated.
     *
     * The results of the operation are undefined if the `reservedMustBeZero` member of the parameter structure is
     * non-zero. However, no error is generated in this case.
     *
     * Vertex attributes that are modified by {@see GL46::glDrawElementsIndirect} have an unspecified value after
     * {@see GL46::glDrawElementsIndirect} returns. Attributes that aren't modified remain well defined.
     *
     * @see http://docs.gl/gl4/glDrawElementsIndirect
     * @since 4.0
     * @param int $mode
     * @param int $type
     * @param \FFI\CData|null $indirect
     * @return void
     */
    public function drawElementsIndirect(int $mode, int $type, ?\FFI\CData $indirect): void
    {
        $__proc = $this->getProcAs('glDrawElementsIndirect', 'void (*)(GLenum mode, GLenum type, const void *indirect)');
        $__proc($mode, $type, $indirect);
    }

    /**
     * {@see GL46::glDrawTransformFeedback} draws primitives of a type specified by $mode using a count retrieved
     * from the transform feedback specified by $id. Calling {@see GL46::glDrawTransformFeedback} is equivalent to
     * calling {@see GL46::glDrawArrays} with $mode as specified, $first set to zero, and $count set to the number of
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
        $__proc = $this->getProcAs('glDrawTransformFeedback', 'void (*)(GLenum mode, GLuint id)');
        $__proc($mode, $id);
    }

    /**
     * {@see GL46::glDrawTransformFeedbackStream} draws primitives of a type specified by $mode using a count
     * retrieved from the transform feedback stream specified by $stream of the transform feedback object specified
     * by $id. Calling {@see GL46::glDrawTransformFeedbackStream} is equivalent to calling {@see GL46::glDrawArrays}
     * with $mode as specified, $first set to zero, and $count set to the number of vertices captured on vertex
     * stream $stream the last time transform feedback was active on the transform feedback object named by $id.
     *
     * Calling {@see GL46::glDrawTransformFeedback} is equivalent to calling
     * {@see GL46::glDrawTransformFeedbackStream} with $stream set to zero.
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
        $__proc = $this->getProcAs('glDrawTransformFeedbackStream', 'void (*)(GLenum mode, GLuint id, GLuint stream)');
        $__proc($mode, $id, $stream);
    }

    /**
     * {@see GL46::glGetQueryIndexediv} returns in $params a selected parameter of the indexed query object target
     * specified by $target and $index. $index specifies the index of the query object target and must be between
     * zero and a target-specific maxiumum.
     *
     * $pname names a specific query object target parameter. When $pname is {@see GL46::GL_CURRENT_QUERY}, the name
     * of the currently active query for the specified $index of $target, or zero if no query is active, will be
     * placed in $params. If $pname is {@see GL46::GL_QUERY_COUNTER_BITS}, the implementation-dependent number of
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
        $__proc = $this->getProcAs('glEndQueryIndexed', 'void (*)(GLenum target, GLuint index)');
        $__proc($target, $index);
    }

    /**
     * {@see GL46::glGenTransformFeedbacks} returns $n previously unused transform feedback object names in $ids.
     * These names are marked as used, for the purposes of {@see GL46::glGenTransformFeedbacks} only, but they
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
            $__proc = $this->getProcAs('glGenTransformFeedbacks', 'void (*)(GLsizei n, GLuint *ids)');
            $__proc($n, \FFI::addr($idsCType));
        } finally {
            $ids = $idsCType->cdata;
            \FFI::free($idsCType);
        }
    }

    /**
     * {@see GL46::glGetActiveSubroutineName} queries the name of an active shader subroutine uniform from the
     * program object given in $program. $index specifies the index of the shader subroutine uniform within the
     * shader stage given by $stage, and must between zero and the value of {@see GL46::GL_ACTIVE_SUBROUTINES} minus
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
     * @param int $bufsize
     * @param int|null $length
     * @param string|null $name
     * @return void
     */
    public function getActiveSubroutineName(int $program, int $shadertype, int $index, int $bufsize, ?int &$length, ?string &$name): void
    {
        $lengthCType = $this->info->ffi->new('GLsizei', false);
        $nameCType = \FFI::addr($this->info->ffi->new('GLchar[' . $bufSize . ']', false)[0]);
        try {
            $__proc = $this->getProcAs('glGetActiveSubroutineName', 'void (*)(GLuint program, GLenum shadertype, GLuint index, GLsizei bufsize, GLsizei *length, GLchar *name)');
            $__proc($program, $shadertype, $index, $bufsize, \FFI::addr($lengthCType), $nameCType);
        } finally {
            $length = $lengthCType->cdata;
            \FFI::free($lengthCType);
            $name = \FFI::string($nameCType);
            \FFI::free($nameCType);
        }
    }

    /**
     * {@see GL46::glGetActiveSubroutineUniformName} retrieves the name of an active shader subroutine uniform.
     * $program contains the name of the program containing the uniform. $shadertype specifies the stage for which
     * the uniform location, given by $index, is valid. $index must be between zero and the value of
     * {@see GL46::GL_ACTIVE_SUBROUTINE_UNIFORMS} minus one for the shader stage.
     *
     * The uniform name is returned as a null-terminated string in $name. The actual number of characters written
     * into $name, excluding the null terminator is returned in $length. If $length is {@see GL46::NULL}, no length
     * is returned. The maximum number of characters that may be written into $name, including the null terminator,
     * is specified by $bufSize. The length of the longest subroutine uniform name in $program and $shadertype is
     * given by the value of {@see GL46::GL_ACTIVE_SUBROUTINE_UNIFORM_MAX_LENGTH}, which can be queried with
     * {@see GL46::glGetProgramStage}.
     *
     * @see http://docs.gl/gl4/glGetActiveSubroutineUniformName
     * @since 4.0
     * @param int $program
     * @param int $shadertype
     * @param int $index
     * @param int $bufsize
     * @param int|null $length
     * @param string|null $name
     * @return void
     */
    public function getActiveSubroutineUniformName(int $program, int $shadertype, int $index, int $bufsize, ?int &$length, ?string &$name): void
    {
        $lengthCType = $this->info->ffi->new('GLsizei', false);
        $nameCType = \FFI::addr($this->info->ffi->new('GLchar[' . $bufSize . ']', false)[0]);
        try {
            $__proc = $this->getProcAs('glGetActiveSubroutineUniformName', 'void (*)(GLuint program, GLenum shadertype, GLuint index, GLsizei bufsize, GLsizei *length, GLchar *name)');
            $__proc($program, $shadertype, $index, $bufsize, \FFI::addr($lengthCType), $nameCType);
        } finally {
            $length = $lengthCType->cdata;
            \FFI::free($lengthCType);
            $name = \FFI::string($nameCType);
            \FFI::free($nameCType);
        }
    }

    /**
     * {@see GL46::glGetActiveSubroutineUniform} queries a parameter of an active shader subroutine uniform. $program
     * contains the name of the program containing the uniform. $shadertype specifies the stage which the uniform
     * location, given by $index, is valid. $index must be between zero and the value of
     * {@see GL46::GL_ACTIVE_SUBROUTINE_UNIFORMS} minus one for the shader stage.
     *
     * If $pname is {@see GL46::GL_NUM_COMPATIBLE_SUBROUTINES}, a single integer indicating the number of subroutines
     * that can be assigned to the uniform is returned in $values.
     *
     * If $pname is {@see GL46::GL_COMPATIBLE_SUBROUTINES}, an array of integers is returned in $values, with each
     * integer specifying the index of an active subroutine that can be assigned to the selected subroutine uniform.
     * The number of integers returned is the same as the value returned for
     * {@see GL46::GL_NUM_COMPATIBLE_SUBROUTINES}.
     *
     * If $pname is {@see GL46::GL_UNIFORM_SIZE}, a single integer is returned in $values. If the selected subroutine
     * uniform is an array, the declared size of the array is returned; otherwise, one is returned.
     *
     * If $pname is {@see GL46::GL_UNIFORM_NAME_LENGTH}, a single integer specifying the length of the subroutine
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
    public function getActiveSubroutineUniformiv(int $program, int $shadertype, int $index, int $pname, ?int &$values): void
    {
        $valuesCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->getProcAs('glGetActiveSubroutineUniformiv', 'void (*)(GLuint program, GLenum shadertype, GLuint index, GLenum pname, GLint *values)');
            $__proc($program, $shadertype, $index, $pname, \FFI::addr($valuesCType));
        } finally {
            $values = $valuesCType->cdata;
            \FFI::free($valuesCType);
        }
    }

    /**
     * {@see GL46::glGetProgramStage} queries a parameter of a shader stage attached to a program object. $program
     * contains the name of the program to which the shader is attached. $shadertype specifies the stage from which
     * to query the parameter. $pname specifies which parameter should be queried. The value or values of the
     * parameter to be queried is returned in the variable whose address is given in $values.
     *
     * If $pname is {@see GL46::GL_ACTIVE_SUBROUTINE_UNIFORMS}, the number of active subroutine variables in the
     * stage is returned in $values.
     *
     * If $pname is {@see GL46::GL_ACTIVE_SUBROUTINE_UNIFORM_LOCATIONS}, the number of active subroutine variable
     * locations in the stage is returned in $values.
     *
     * If $pname is {@see GL46::GL_ACTIVE_SUBROUTINES}, the number of active subroutines in the stage is returned in
     * $values.
     *
     * If $pname is {@see GL46::GL_ACTIVE_SUBROUTINE_UNIFORM_MAX_LENGTH}, the length of the longest subroutine
     * uniform for the stage is returned in $values.
     *
     * If $pname is {@see GL46::GL_ACTIVE_SUBROUTINE_MAX_LENGTH}, the length of the longest subroutine name for the
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
            $__proc = $this->getProcAs('glGetProgramStageiv', 'void (*)(GLuint program, GLenum shadertype, GLenum pname, GLint *values)');
            $__proc($program, $shadertype, $pname, \FFI::addr($valuesCType));
        } finally {
            $values = $valuesCType->cdata;
            \FFI::free($valuesCType);
        }
    }

    /**
     * {@see GL46::glGetQueryIndexediv} returns in $params a selected parameter of the indexed query object target
     * specified by $target and $index. $index specifies the index of the query object target and must be between
     * zero and a target-specific maxiumum.
     *
     * $pname names a specific query object target parameter. When $pname is {@see GL46::GL_CURRENT_QUERY}, the name
     * of the currently active query for the specified $index of $target, or zero if no query is active, will be
     * placed in $params. If $pname is {@see GL46::GL_QUERY_COUNTER_BITS}, the implementation-dependent number of
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
            $__proc = $this->getProcAs('glGetQueryIndexediv', 'void (*)(GLenum target, GLuint index, GLenum pname, GLint *params)');
            $__proc($target, $index, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL46::glGetSubroutineIndex} returns the index of a subroutine uniform within a shader stage attached to
     * a program object. $program contains the name of the program to which the shader is attached. $shadertype
     * specifies the stage from which to query shader subroutine index. $name contains the null-terminated name of
     * the subroutine uniform whose name to query.
     *
     * If $name is not the name of a subroutine uniform in the shader stage, {@see GL46::GL_INVALID_INDEX} is
     * returned, but no error is generated. If $name is the name of a subroutine uniform in the shader stage, a value
     * between zero and the value of {@see GL46::GL_ACTIVE_SUBROUTINES} minus one will be returned. Subroutine
     * indices are assigned using consecutive integers in the range from zero to the value of
     * {@see GL46::GL_ACTIVE_SUBROUTINES} minus one for the shader stage.
     *
     * @see http://docs.gl/gl4/glGetSubroutineIndex
     * @since 4.0
     * @param int $program
     * @param int $shadertype
     * @param \FFI\CData|null $name
     * @return int
     */
    public function getSubroutineIndex(int $program, int $shadertype, ?\FFI\CData $name): int
    {
        $__proc = $this->getProcAs('glGetSubroutineIndex', 'GLuint (*)(GLuint program, GLenum shadertype, const GLchar *name)');
        return $__proc($program, $shadertype, $name);
    }

    /**
     * {@see GL46::glGetSubroutineUniformLocation} returns the location of the subroutine uniform variable $name in
     * the shader stage of type $shadertype attached to $program, with behavior otherwise identical to
     * {@see GL46::glGetUniformLocation}.
     *
     * If $name is not the name of a subroutine uniform in the shader stage, -1 is returned, but no error is
     * generated. If $name is the name of a subroutine uniform in the shader stage, a value between zero and the
     * value of {@see GL46::GL_ACTIVE_SUBROUTINE_LOCATIONS} minus one will be returned. Subroutine locations are
     * assigned using consecutive integers in the range from zero to the value of
     * {@see GL46::GL_ACTIVE_SUBROUTINE_LOCATIONS} minus one for the shader stage. For active subroutine uniforms
     * declared as arrays, the declared array elements are assigned consecutive locations.
     *
     * @see http://docs.gl/gl4/glGetSubroutineUniformLocation
     * @since 4.0
     * @param int $program
     * @param int $shadertype
     * @param \FFI\CData|null $name
     * @return int
     */
    public function getSubroutineUniformLocation(int $program, int $shadertype, ?\FFI\CData $name): int
    {
        $__proc = $this->getProcAs('glGetSubroutineUniformLocation', 'GLint (*)(GLuint program, GLenum shadertype, const GLchar *name)');
        return $__proc($program, $shadertype, $name);
    }

    /**
     * {@see GL46::glGetUniformSubroutine} retrieves the value of the subroutine uniform at location $location for
     * shader stage $shadertype of the current program. $location must be less than the value of
     * {@see GL46::GL_ACTIVE_SUBROUTINE_UNIFORM_LOCATIONS} for the shader currently in use at shader stage
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
            $__proc = $this->getProcAs('glGetUniformSubroutineuiv', 'void (*)(GLenum shadertype, GLint location, GLuint *params)');
            $__proc($shadertype, $location, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL46::glGetUniform} and {@see GL46::glGetnUniform} return in $params the value(s) of the specified
     * uniform variable. The type of the uniform variable specified by $location determines the number of values
     * returned. If the uniform variable is defined in the shader as a boolean, int, or float, a single value will be
     * returned. If it is defined as a vec2, ivec2, or bvec2, two values will be returned. If it is defined as a
     * vec3, ivec3, or bvec3, three values will be returned, and so on. To query values stored in uniform variables
     * declared as arrays, call {@see GL46::glGetUniform} for each element of the array. To query values stored in
     * uniform variables declared as structures, call {@see GL46::glGetUniform} for each field in the structure. The
     * values for uniform variables declared as a matrix will be returned in column major order.
     *
     * The locations assigned to uniform variables are not known until the program object is linked. After linking
     * has occurred, the command {@see GL46::glGetUniformLocation} can be used to obtain the location of a uniform
     * variable. This location value can then be passed to {@see GL46::glGetUniform} or {@see GL46::glGetnUniform} in
     * order to query the current value of the uniform variable. After a program object has been linked successfully,
     * the index values for uniform variables remain fixed until the next link command occurs. The uniform variable
     * values can only be queried after a link if the link was successful.
     *
     * The only difference between {@see GL46::glGetUniform} and {@see GL46::glGetnUniform} is that
     * {@see GL46::glGetnUniform} will generate an error if size of the $params buffer,as described by $bufSize, is
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
            $__proc = $this->getProcAs('glGetUniformdv', 'void (*)(GLuint program, GLint location, GLdouble *params)');
            $__proc($program, $location, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL46::glIsTransformFeedback} returns {@see GL46::GL_TRUE} if $id is currently the name of a transform
     * feedback object. If $id is zero, or if {@see GL46::id} is not the name of a transform feedback object, or if
     * an error occurs, {@see GL46::glIsTransformFeedback} returns {@see GL46::GL_FALSE}. If $id is a name returned
     * by {@see GL46::glGenTransformFeedbacks}, but that has not yet been bound through a call to
     * {@see GL46::glBindTransformFeedback}, then the name is not a transform feedback object and
     * {@see GL46::glIsTransformFeedback} returns {@see GL46::GL_FALSE}.
     *
     * @see http://docs.gl/gl4/glIsTransformFeedback
     * @since 4.0
     * @param int $id
     * @return bool
     */
    public function isTransformFeedback(int $id): bool
    {
        $__proc = $this->getProcAs('glIsTransformFeedback', 'GLboolean (*)(GLuint id)');
        return $__proc($id) !== 0;
    }

    /**
     * {@see GL46::glMinSampleShading} specifies the rate at which samples are shaded within a covered pixel.
     * Sample-rate shading is enabled by calling {@see GL46::glEnable} with the parameter
     * {@see GL46::GL_SAMPLE_SHADING}. If {@see GL46::GL_MULTISAMPLE} or {@see GL46::GL_SAMPLE_SHADING} is disabled,
     * sample shading has no effect. Otherwise, an implementation must provide at least as many unique color values
     * for each covered fragment as specified by $value times $samples where $samples is the value of
     * {@see GL46::GL_SAMPLES} for the current framebuffer. At least 1 sample for each covered fragment is generated.
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
        $__proc = $this->getProcAs('glMinSampleShading', 'void (*)(GLfloat value)');
        $__proc($value);
    }

    /**
     * {@see GL46::glPatchParameter} specifies the parameters that will be used for patch primitives. $pname
     * specifies the parameter to modify and must be either {@see GL46::GL_PATCH_VERTICES},
     * {@see GL46::GL_PATCH_DEFAULT_OUTER_LEVEL} or {@see GL46::GL_PATCH_DEFAULT_INNER_LEVEL}. For
     * {@see GL46::glPatchParameteri}, $value specifies the new value for the parameter specified by $pname. For
     * {@see GL46::glPatchParameterfv}, $values specifies the address of an array containing the new values for the
     * parameter specified by $pname.
     *
     * When $pname is {@see GL46::GL_PATCH_VERTICES}, $value specifies the number of vertices that will be used to
     * make up a single patch primitive. Patch primitives are consumed by the tessellation control shader (if
     * present) and subsequently used for tessellation. When primitives are specified using {@see GL46::glDrawArrays}
     * or a similar function, each patch will be made from $parameter control points, each represented by a vertex
     * taken from the enabeld vertex arrays. $parameter must be greater than zero, and less than or equal to the
     * value of {@see GL46::GL_MAX_PATCH_VERTICES}.
     *
     * When $pname is {@see GL46::GL_PATCH_DEFAULT_OUTER_LEVEL} or {@see GL46::GL_PATCH_DEFAULT_INNER_LEVEL}, $values
     * contains the address of an array contiaining the default outer or inner tessellation levels, respectively, to
     * be used when no tessellation control shader is present.
     *
     * @see http://docs.gl/gl4/glPatchParameter
     * @since 4.0
     * @param int $pname
     * @param \FFI\CData|null $values
     * @return void
     */
    public function patchParameterfv(int $pname, ?\FFI\CData $values): void
    {
        $__proc = $this->getProcAs('glPatchParameterfv', 'void (*)(GLenum pname, const GLfloat *values)');
        $__proc($pname, $values);
    }

    /**
     * {@see GL46::glPatchParameter} specifies the parameters that will be used for patch primitives. $pname
     * specifies the parameter to modify and must be either {@see GL46::GL_PATCH_VERTICES},
     * {@see GL46::GL_PATCH_DEFAULT_OUTER_LEVEL} or {@see GL46::GL_PATCH_DEFAULT_INNER_LEVEL}. For
     * {@see GL46::glPatchParameteri}, $value specifies the new value for the parameter specified by $pname. For
     * {@see GL46::glPatchParameterfv}, $values specifies the address of an array containing the new values for the
     * parameter specified by $pname.
     *
     * When $pname is {@see GL46::GL_PATCH_VERTICES}, $value specifies the number of vertices that will be used to
     * make up a single patch primitive. Patch primitives are consumed by the tessellation control shader (if
     * present) and subsequently used for tessellation. When primitives are specified using {@see GL46::glDrawArrays}
     * or a similar function, each patch will be made from $parameter control points, each represented by a vertex
     * taken from the enabeld vertex arrays. $parameter must be greater than zero, and less than or equal to the
     * value of {@see GL46::GL_MAX_PATCH_VERTICES}.
     *
     * When $pname is {@see GL46::GL_PATCH_DEFAULT_OUTER_LEVEL} or {@see GL46::GL_PATCH_DEFAULT_INNER_LEVEL}, $values
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
        $__proc = $this->getProcAs('glPatchParameteri', 'void (*)(GLenum pname, GLint value)');
        $__proc($pname, $value);
    }

    /**
     * {@see GL46::glPauseTransformFeedback} pauses transform feedback operations on the currently active transform
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
        $__proc = $this->getProcAs('glPauseTransformFeedback', 'void (*)()');
        $__proc();
    }

    /**
     * {@see GL46::glResumeTransformFeedback} resumes transform feedback operations on the currently active transform
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
        $__proc = $this->getProcAs('glResumeTransformFeedback', 'void (*)()');
        $__proc();
    }

    /**
     * {@see GL46::glUniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL46::glGetUniformLocation}. {@see GL46::glUniform} operates on the program object that was made part of
     * current state by calling {@see GL46::glUseProgram}.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
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
     * linked successfully. They retain the values assigned to them by a call to {@see GL46::glUniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
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
     * {@see GL46::glUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL46::glUniform3f} or {@see GL46::glUniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL46::glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL46::GL_TRUE}, each matrix is assumed to be supplied in row major
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
        $__proc = $this->getProcAs('glUniform1d', 'void (*)(GLint location, GLdouble x)');
        $__proc($location, $x);
    }

    /**
     * {@see GL46::glUniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL46::glGetUniformLocation}. {@see GL46::glUniform} operates on the program object that was made part of
     * current state by calling {@see GL46::glUseProgram}.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
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
     * linked successfully. They retain the values assigned to them by a call to {@see GL46::glUniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
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
     * {@see GL46::glUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL46::glUniform3f} or {@see GL46::glUniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL46::glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL46::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param \FFI\CData|null $value
     * @return void
     */
    public function uniform1dv(int $location, int $count, ?\FFI\CData $value): void
    {
        $__proc = $this->getProcAs('glUniform1dv', 'void (*)(GLint location, GLsizei count, const GLdouble *value)');
        $__proc($location, $count, $value);
    }

    /**
     * {@see GL46::glUniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL46::glGetUniformLocation}. {@see GL46::glUniform} operates on the program object that was made part of
     * current state by calling {@see GL46::glUseProgram}.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
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
     * linked successfully. They retain the values assigned to them by a call to {@see GL46::glUniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
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
     * {@see GL46::glUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL46::glUniform3f} or {@see GL46::glUniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL46::glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL46::GL_TRUE}, each matrix is assumed to be supplied in row major
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
        $__proc = $this->getProcAs('glUniform2d', 'void (*)(GLint location, GLdouble x, GLdouble y)');
        $__proc($location, $x, $y);
    }

    /**
     * {@see GL46::glUniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL46::glGetUniformLocation}. {@see GL46::glUniform} operates on the program object that was made part of
     * current state by calling {@see GL46::glUseProgram}.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
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
     * linked successfully. They retain the values assigned to them by a call to {@see GL46::glUniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
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
     * {@see GL46::glUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL46::glUniform3f} or {@see GL46::glUniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL46::glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL46::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param \FFI\CData|null $value
     * @return void
     */
    public function uniform2dv(int $location, int $count, ?\FFI\CData $value): void
    {
        $__proc = $this->getProcAs('glUniform2dv', 'void (*)(GLint location, GLsizei count, const GLdouble *value)');
        $__proc($location, $count, $value);
    }

    /**
     * {@see GL46::glUniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL46::glGetUniformLocation}. {@see GL46::glUniform} operates on the program object that was made part of
     * current state by calling {@see GL46::glUseProgram}.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
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
     * linked successfully. They retain the values assigned to them by a call to {@see GL46::glUniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
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
     * {@see GL46::glUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL46::glUniform3f} or {@see GL46::glUniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL46::glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL46::GL_TRUE}, each matrix is assumed to be supplied in row major
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
        $__proc = $this->getProcAs('glUniform3d', 'void (*)(GLint location, GLdouble x, GLdouble y, GLdouble z)');
        $__proc($location, $x, $y, $z);
    }

    /**
     * {@see GL46::glUniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL46::glGetUniformLocation}. {@see GL46::glUniform} operates on the program object that was made part of
     * current state by calling {@see GL46::glUseProgram}.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
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
     * linked successfully. They retain the values assigned to them by a call to {@see GL46::glUniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
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
     * {@see GL46::glUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL46::glUniform3f} or {@see GL46::glUniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL46::glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL46::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param \FFI\CData|null $value
     * @return void
     */
    public function uniform3dv(int $location, int $count, ?\FFI\CData $value): void
    {
        $__proc = $this->getProcAs('glUniform3dv', 'void (*)(GLint location, GLsizei count, const GLdouble *value)');
        $__proc($location, $count, $value);
    }

    /**
     * {@see GL46::glUniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL46::glGetUniformLocation}. {@see GL46::glUniform} operates on the program object that was made part of
     * current state by calling {@see GL46::glUseProgram}.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
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
     * linked successfully. They retain the values assigned to them by a call to {@see GL46::glUniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
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
     * {@see GL46::glUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL46::glUniform3f} or {@see GL46::glUniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL46::glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL46::GL_TRUE}, each matrix is assumed to be supplied in row major
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
        $__proc = $this->getProcAs('glUniform4d', 'void (*)(GLint location, GLdouble x, GLdouble y, GLdouble z, GLdouble w)');
        $__proc($location, $x, $y, $z, $w);
    }

    /**
     * {@see GL46::glUniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL46::glGetUniformLocation}. {@see GL46::glUniform} operates on the program object that was made part of
     * current state by calling {@see GL46::glUseProgram}.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
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
     * linked successfully. They retain the values assigned to them by a call to {@see GL46::glUniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
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
     * {@see GL46::glUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL46::glUniform3f} or {@see GL46::glUniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL46::glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL46::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param \FFI\CData|null $value
     * @return void
     */
    public function uniform4dv(int $location, int $count, ?\FFI\CData $value): void
    {
        $__proc = $this->getProcAs('glUniform4dv', 'void (*)(GLint location, GLsizei count, const GLdouble *value)');
        $__proc($location, $count, $value);
    }

    /**
     * {@see GL46::glUniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL46::glGetUniformLocation}. {@see GL46::glUniform} operates on the program object that was made part of
     * current state by calling {@see GL46::glUseProgram}.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
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
     * linked successfully. They retain the values assigned to them by a call to {@see GL46::glUniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
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
     * {@see GL46::glUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL46::glUniform3f} or {@see GL46::glUniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL46::glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL46::GL_TRUE}, each matrix is assumed to be supplied in row major
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
     * @param \FFI\CData|null $value
     * @return void
     */
    public function uniformMatrix2dv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        $__proc = $this->getProcAs('glUniformMatrix2dv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
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
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|null $value
     * @return void
     */
    public function uniformMatrix2x3dv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        $__proc = $this->getProcAs('glUniformMatrix2x3dv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
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
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|null $value
     * @return void
     */
    public function uniformMatrix2x4dv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        $__proc = $this->getProcAs('glUniformMatrix2x4dv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $__proc($location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glUniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL46::glGetUniformLocation}. {@see GL46::glUniform} operates on the program object that was made part of
     * current state by calling {@see GL46::glUseProgram}.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
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
     * linked successfully. They retain the values assigned to them by a call to {@see GL46::glUniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
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
     * {@see GL46::glUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL46::glUniform3f} or {@see GL46::glUniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL46::glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL46::GL_TRUE}, each matrix is assumed to be supplied in row major
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
     * @param \FFI\CData|null $value
     * @return void
     */
    public function uniformMatrix3dv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        $__proc = $this->getProcAs('glUniformMatrix3dv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
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
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|null $value
     * @return void
     */
    public function uniformMatrix3x2dv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        $__proc = $this->getProcAs('glUniformMatrix3x2dv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
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
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|null $value
     * @return void
     */
    public function uniformMatrix3x4dv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        $__proc = $this->getProcAs('glUniformMatrix3x4dv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $__proc($location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glUniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL46::glGetUniformLocation}. {@see GL46::glUniform} operates on the program object that was made part of
     * current state by calling {@see GL46::glUseProgram}.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
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
     * linked successfully. They retain the values assigned to them by a call to {@see GL46::glUniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
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
     * {@see GL46::glUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL46::glUniform3f} or {@see GL46::glUniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL46::glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL46::GL_TRUE}, each matrix is assumed to be supplied in row major
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
     * @param \FFI\CData|null $value
     * @return void
     */
    public function uniformMatrix4dv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        $__proc = $this->getProcAs('glUniformMatrix4dv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
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
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|null $value
     * @return void
     */
    public function uniformMatrix4x2dv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        $__proc = $this->getProcAs('glUniformMatrix4x2dv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
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
     * @since 4.0
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|null $value
     * @return void
     */
    public function uniformMatrix4x3dv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        $__proc = $this->getProcAs('glUniformMatrix4x3dv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
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
     * @since 4.0
     * @param int $shadertype
     * @param int $count
     * @param \FFI\CData|null $indices
     * @return void
     */
    public function uniformSubroutinesuiv(int $shadertype, int $count, ?\FFI\CData $indices): void
    {
        $__proc = $this->getProcAs('glUniformSubroutinesuiv', 'void (*)(GLenum shadertype, GLsizei count, const GLuint *indices)');
        $__proc($shadertype, $count, $indices);
    }
}
