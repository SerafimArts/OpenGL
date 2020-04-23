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

use Serafim\OpenGL\Type\Type;

/**
 * The OpenGL functionality up to version 4.6. Includes the deprecated symbols of the Compatibility Profile.
 *
 * OpenGL 4.6 implementations support revision 4.60 of the OpenGL Shading Language.
 *
 * Extensions promoted to core in this release:
 *
 * - ARB_indirect_parameters @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_indirect_parameters.txt
 * - ARB_pipeline_statistics_query @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_pipeline_statistics_query.txt
 * - ARB_polygon_offset_clamp @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_polygon_offset_clamp.txt
 * - KHR_no_error @see https://www.khronos.org/registry/OpenGL/extensions/KHR/KHR_no_error.txt
 * - ARB_shader_atomic_counter_ops @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_shader_atomic_counter_ops.txt
 * - ARB_shader_draw_parameters @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_shader_draw_parameters.txt
 * - ARB_shader_group_vote @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_shader_group_vote.txt
 * - ARB_gl_spirv @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_gl_spirv.txt
 * - ARB_spirv_extensions @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_spirv_extensions.txt
 * - ARB_texture_filter_anisotropic @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_texture_filter_anisotropic.txt
 * - ARB_transform_feedback_overflow_query @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_transform_feedback_overflow_query.txt
 */
class GL46 extends GL45
{
    /**
     * @var int
     * @since 4.6
     */
    public const GL_SHADER_BINARY_FORMAT_SPIR_V = 0x9551;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_SPIR_V_BINARY = 0x9552;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_PARAMETER_BUFFER = 0x80ee;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_PARAMETER_BUFFER_BINDING = 0x80ef;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_CONTEXT_FLAG_NO_ERROR_BIT = 0x0008;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_VERTICES_SUBMITTED = 0x82ee;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_PRIMITIVES_SUBMITTED = 0x82ef;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_VERTEX_SHADER_INVOCATIONS = 0x82f0;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_TESS_CONTROL_SHADER_PATCHES = 0x82f1;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_TESS_EVALUATION_SHADER_INVOCATIONS = 0x82f2;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_GEOMETRY_SHADER_PRIMITIVES_EMITTED = 0x82f3;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_FRAGMENT_SHADER_INVOCATIONS = 0x82f4;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_COMPUTE_SHADER_INVOCATIONS = 0x82f5;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_CLIPPING_INPUT_PRIMITIVES = 0x82f6;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_CLIPPING_OUTPUT_PRIMITIVES = 0x82f7;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_POLYGON_OFFSET_CLAMP = 0x8e1b;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_SPIR_V_EXTENSIONS = 0x9553;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_NUM_SPIR_V_EXTENSIONS = 0x9554;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_TEXTURE_MAX_ANISOTROPY = 0x84fe;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_MAX_TEXTURE_MAX_ANISOTROPY = 0x84ff;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_TRANSFORM_FEEDBACK_OVERFLOW = 0x82ec;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_TRANSFORM_FEEDBACK_STREAM_OVERFLOW = 0x82ed;

    /**
     * {@see GL46::glDeleteShader} frees the memory and invalidates the name associated with the shader object
     * specified by $shader. This command effectively undoes the effects of a call to {@see GL46::glCreateShader}.
     *
     * If a shader object to be deleted is attached to a program object, it will be flagged for deletion, but it will
     * not be deleted until it is no longer attached to any program object, for any rendering context (i.e., it must
     * be detached from wherever it was attached before it will be deleted). A value of 0 for $shader will be
     * silently ignored.
     *
     * To determine whether an object has been flagged for deletion, call {@see GL46::glGetShader} with arguments
     * $shader and {@see GL46::GL_DELETE_STATUS}.
     *
     * @see http://docs.gl/gl2/glCompileShader
     * @see http://docs.gl/gl2/glCreateShader
     * @see http://docs.gl/gl2/glDeleteShader
     * @see http://docs.gl/gl4/glCompileShader
     * @see http://docs.gl/gl4/glCreateShader
     * @see http://docs.gl/gl4/glDeleteShader
     * @since 4.6
     * @param int|\FFI\CData|\FFI\CInt $shader
     * @param \FFI\CData|\FFI\CIntPtr|null $pEntryPoint
     * @param int|\FFI\CData|\FFI\CInt $numSpecializationConstants
     * @param \FFI\CData|\FFI\CIntPtr|null $pConstantIndex
     * @param \FFI\CData|\FFI\CIntPtr|null $pConstantValue
     * @return void
     */
    public function specializeShader($shader, ?\FFI\CData $pEntryPoint, $numSpecializationConstants, ?\FFI\CData $pConstantIndex, ?\FFI\CData $pConstantValue): void
    {
        $shader = $shader instanceof \FFI\CData ? $shader->cdata : $shader;
        $numSpecializationConstants = $numSpecializationConstants instanceof \FFI\CData ? $numSpecializationConstants->cdata : $numSpecializationConstants;

        assert(Type::isUint16($shader), 'Argument $shader must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($numSpecializationConstants), 'Argument $numSpecializationConstants must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glSpecializeShader', 'void (*)(GLuint shader, const GLchar *pEntryPoint, GLuint numSpecializationConstants, const GLuint *pConstantIndex, const GLuint *pConstantValue)');
        $proc($shader, $pEntryPoint, $numSpecializationConstants, $pConstantIndex, $pConstantValue);
    }

    /**
     * {@see GL46::glMultiDrawArraysIndirect} specifies multiple geometric primitives with very few subroutine calls.
     * {@see GL46::glMultiDrawArraysIndirect} behaves similarly to a multitude of calls to
     * {@see GL46::glDrawArraysInstancedBaseInstance}, execept that the parameters to each call to
     * {@see GL46::glDrawArraysInstancedBaseInstance} are stored in an array in memory at the address given by
     * $indirect, separated by the stride, in basic machine units, specified by $stride. If $stride is zero, then the
     * array is assumed to be tightly packed in memory.
     *
     * The parameters addressed by $indirect are packed into an array of structures, each element of which takes the
     * form (in C):
     *
     * <code>
     *     typedef  struct {
     *         uint  count;
     *         uint  instanceCount;
     *         uint  first;
     *         uint  baseInstance;
     *     } DrawArraysIndirectCommand;
     * </code>
     *
     * A single call to {@see GL46::glMultiDrawArraysIndirect} is equivalent, assuming no errors are generated to:
     *
     * <code>
     *     GLsizei n;
     *     for (n = 0; n < drawcount; n++) {
     *         const DrawArraysIndirectCommand *cmd;
     *         if (stride != 0) {
     *             cmd = (const DrawArraysIndirectCommand  *)((uintptr)indirect + n * stride);
     *         } else  {
     *             cmd = (const DrawArraysIndirectCommand  *)indirect + n;
     *         }
     *
     *         glDrawArraysInstancedBaseInstance(mode, cmd->first, cmd->count, cmd->instanceCount,
     * cmd->baseInstance);
     *     }
     * </code>
     *
     * If a buffer is bound to the {@see GL46::GL_DRAW_INDIRECT_BUFFER} binding at the time of a call to
     * {@see GL46::glMultiDrawArraysIndirect}, $indirect is interpreted as an offset, in basic machine units, into
     * that buffer and the parameter data is read from the buffer rather than from client memory.
     *
     * In contrast to {@see GL46::glDrawArraysInstancedBaseInstance}, the `first` member of the parameter structure
     * is unsigned, and out-of-range indices do not generate an error.
     *
     * Vertex attributes that are modified by {@see GL46::glMultiDrawArraysIndirect} have an unspecified value after
     * {@see GL46::glMultiDrawArraysIndirect} returns. Attributes that aren't modified remain well defined.
     *
     * @see http://docs.gl/gl4/glMultiDrawArraysIndirect
     * @since 4.6
     * @param int|\FFI\CData|\FFI\CInt $mode
     * @param \FFI\CData|\FFI\CPtr|null $indirect
     * @param mixed|float|string|int|\FFI\CData|\FFI\CInt $drawcount
     * @param int|\FFI\CData|\FFI\CInt $maxdrawcount
     * @param int|\FFI\CData|\FFI\CInt $stride
     * @return void
     */
    public function multiDrawArraysIndirectCount($mode, ?\FFI\CData $indirect, $drawcount, $maxdrawcount, $stride): void
    {
        $mode = $mode instanceof \FFI\CData ? $mode->cdata : $mode;
        $maxdrawcount = $maxdrawcount instanceof \FFI\CData ? $maxdrawcount->cdata : $maxdrawcount;
        $stride = $stride instanceof \FFI\CData ? $stride->cdata : $stride;

        assert(Type::isUint16($mode), 'Argument $mode must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isInt64($drawcount), 'Argument $drawcount must be a C-like GLintptr, but incompatible or overflow value given');
        assert(Type::isInt16($maxdrawcount), 'Argument $maxdrawcount must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Type::isInt16($stride), 'Argument $stride must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glMultiDrawArraysIndirectCount', 'void (*)(GLenum mode, const void *indirect, GLintptr drawcount, GLsizei maxdrawcount, GLsizei stride)');
        $proc($mode, $indirect, $drawcount, $maxdrawcount, $stride);
    }

    /**
     * {@see GL46::glMultiDrawElementsIndirect} specifies multiple indexed geometric primitives with very few
     * subroutine calls. {@see GL46::glMultiDrawElementsIndirect} behaves similarly to a multitude of calls to
     * {@see GL46::glDrawElementsInstancedBaseVertexBaseInstance}, execpt that the parameters to
     * {@see GL46::glDrawElementsInstancedBaseVertexBaseInstance} are stored in an array in memory at the address
     * given by $indirect, separated by the stride, in basic machine units, specified by $stride. If $stride is zero,
     * then the array is assumed to be tightly packed in memory.
     *
     * The parameters addressed by $indirect are packed into a structure that takes the form (in C):
     *
     * <code>
     *     typedef  struct {
     *         uint  count;
     *         uint  instanceCount;
     *         uint  firstIndex;
     *         uint  baseVertex;
     *         uint  baseInstance;
     *     } DrawElementsIndirectCommand;
     * </code>
     *
     * A single call to {@see GL46::glMultiDrawElementsIndirect} is equivalent, assuming no errors are generated to:
     *
     * <code>
     *     GLsizei n;
     *     for (n = 0; n < drawcount; n++) {
     *         const DrawElementsIndirectCommand *cmd;
     *         if (stride != 0) {
     *             cmd = (const DrawElementsIndirectCommand  *)((uintptr)indirect + n * stride);
     *         } else {
     *             cmd = (const DrawElementsIndirectCommand  *)indirect + n;
     *         }
     *
     *         glDrawElementsInstancedBaseVertexBaseInstance(mode,
     *                                                       cmd->count,
     *                                                       type,
     *                                                       cmd->firstIndex * size-of-type,
     *                                                       cmd->instanceCount,
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
     * @see http://docs.gl/gl4/glMultiDrawElementsIndirect
     * @since 4.6
     * @param int|\FFI\CData|\FFI\CInt $mode
     * @param int|\FFI\CData|\FFI\CInt $type
     * @param \FFI\CData|\FFI\CPtr|null $indirect
     * @param mixed|float|string|int|\FFI\CData|\FFI\CInt $drawcount
     * @param int|\FFI\CData|\FFI\CInt $maxdrawcount
     * @param int|\FFI\CData|\FFI\CInt $stride
     * @return void
     */
    public function multiDrawElementsIndirectCount($mode, $type, ?\FFI\CData $indirect, $drawcount, $maxdrawcount, $stride): void
    {
        $mode = $mode instanceof \FFI\CData ? $mode->cdata : $mode;
        $type = $type instanceof \FFI\CData ? $type->cdata : $type;
        $maxdrawcount = $maxdrawcount instanceof \FFI\CData ? $maxdrawcount->cdata : $maxdrawcount;
        $stride = $stride instanceof \FFI\CData ? $stride->cdata : $stride;

        assert(Type::isUint16($mode), 'Argument $mode must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($type), 'Argument $type must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isInt64($drawcount), 'Argument $drawcount must be a C-like GLintptr, but incompatible or overflow value given');
        assert(Type::isInt16($maxdrawcount), 'Argument $maxdrawcount must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Type::isInt16($stride), 'Argument $stride must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glMultiDrawElementsIndirectCount', 'void (*)(GLenum mode, GLenum type, const void *indirect, GLintptr drawcount, GLsizei maxdrawcount, GLsizei stride)');
        $proc($mode, $type, $indirect, $drawcount, $maxdrawcount, $stride);
    }

    /**
     * When {@see GL46::GL_POLYGON_OFFSET_FILL}, {@see GL46::GL_POLYGON_OFFSET_LINE}, or
     * {@see GL46::GL_POLYGON_OFFSET_POINT} is enabled, each fragment's depth value will be offset after it is
     * interpolated from the depth values of the appropriate vertices. The value of the offset is     factor × DZ  +
     *  r × units   , where   DZ  is a measurement of the change in depth relative to the screen area of the
     * polygon, and r is the smallest value that is guaranteed to produce a resolvable offset for a given
     * implementation. The offset is added before the depth test is performed and before the value is written into
     * the depth buffer.
     *
     * {@see GL46::glPolygonOffset} is useful for rendering hidden-line images, for applying decals to surfaces, and
     * for rendering solids with highlighted edges.
     *
     * @see http://docs.gl/gl2/glPolygonOffset
     * @see http://docs.gl/gl4/glPolygonOffset
     * @since 4.6
     * @param float|\FFI\CData|\FFI\CFloat $factor
     * @param float|\FFI\CData|\FFI\CFloat $units
     * @param float|\FFI\CData|\FFI\CFloat $clamp
     * @return void
     */
    public function polygonOffsetClamp($factor, $units, $clamp): void
    {
        $factor = $factor instanceof \FFI\CData ? $factor->cdata : $factor;
        $units = $units instanceof \FFI\CData ? $units->cdata : $units;
        $clamp = $clamp instanceof \FFI\CData ? $clamp->cdata : $clamp;

        assert(Type::isFloat32($factor), 'Argument $factor must be a C-like GLfloat, but incompatible or overflow value given');
        assert(Type::isFloat32($units), 'Argument $units must be a C-like GLfloat, but incompatible or overflow value given');
        assert(Type::isFloat32($clamp), 'Argument $clamp must be a C-like GLfloat, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glPolygonOffsetClamp', 'void (*)(GLfloat factor, GLfloat units, GLfloat clamp)');
        $proc($factor, $units, $clamp);
    }
}
