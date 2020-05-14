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
 * @version 4.6
 */
class GL46 extends GL45
{
    /**
     * @since 4.6
     * @var int
     */
    public const GL_SHADER_BINARY_FORMAT_SPIR_V = 0x9551;
    /**
     * @since 4.6
     * @var int
     */
    public const GL_SPIR_V_BINARY = 0x9552;
    /**
     * @since 4.6
     * @var int
     */
    public const GL_PARAMETER_BUFFER = 0x80EE;
    /**
     * @since 4.6
     * @var int
     */
    public const GL_PARAMETER_BUFFER_BINDING = 0x80EF;
    /**
     * @since 4.6
     * @var int
     */
    public const GL_CONTEXT_FLAG_NO_ERROR_BIT = 0x0008;
    /**
     * @since 4.6
     * @var int
     */
    public const GL_VERTICES_SUBMITTED = 0x82EE;
    /**
     * @since 4.6
     * @var int
     */
    public const GL_PRIMITIVES_SUBMITTED = 0x82EF;
    /**
     * @since 4.6
     * @var int
     */
    public const GL_VERTEX_SHADER_INVOCATIONS = 0x82F0;
    /**
     * @since 4.6
     * @var int
     */
    public const GL_TESS_CONTROL_SHADER_PATCHES = 0x82F1;
    /**
     * @since 4.6
     * @var int
     */
    public const GL_TESS_EVALUATION_SHADER_INVOCATIONS = 0x82F2;
    /**
     * @since 4.6
     * @var int
     */
    public const GL_GEOMETRY_SHADER_PRIMITIVES_EMITTED = 0x82F3;
    /**
     * @since 4.6
     * @var int
     */
    public const GL_FRAGMENT_SHADER_INVOCATIONS = 0x82F4;
    /**
     * @since 4.6
     * @var int
     */
    public const GL_COMPUTE_SHADER_INVOCATIONS = 0x82F5;
    /**
     * @since 4.6
     * @var int
     */
    public const GL_CLIPPING_INPUT_PRIMITIVES = 0x82F6;
    /**
     * @since 4.6
     * @var int
     */
    public const GL_CLIPPING_OUTPUT_PRIMITIVES = 0x82F7;
    /**
     * @since 4.6
     * @var int
     */
    public const GL_POLYGON_OFFSET_CLAMP = 0x8E1B;
    /**
     * @since 4.6
     * @var int
     */
    public const GL_SPIR_V_EXTENSIONS = 0x9553;
    /**
     * @since 4.6
     * @var int
     */
    public const GL_NUM_SPIR_V_EXTENSIONS = 0x9554;
    /**
     * @since 4.6
     * @var int
     */
    public const GL_TEXTURE_MAX_ANISOTROPY = 0x84FE;
    /**
     * @since 4.6
     * @var int
     */
    public const GL_MAX_TEXTURE_MAX_ANISOTROPY = 0x84FF;
    /**
     * @since 4.6
     * @var int
     */
    public const GL_TRANSFORM_FEEDBACK_OVERFLOW = 0x82EC;
    /**
     * @since 4.6
     * @var int
     */
    public const GL_TRANSFORM_FEEDBACK_STREAM_OVERFLOW = 0x82ED;

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
     * @param int $mode
     * @param \FFI\CData|null $indirect
     * @param int $drawcount
     * @param int $maxdrawcount
     * @param int $stride
     * @return void
     */
    public function multiDrawArraysIndirectCount(int $mode, ?\FFI\CData $indirect, int $drawcount, int $maxdrawcount, int $stride): void
    {
        $__proc = $this->getProcAs('glMultiDrawArraysIndirectCount', 'void (*)(GLenum mode, const void *indirect, GLintptr drawcount, GLsizei maxdrawcount, GLsizei stride)');
        $__proc($mode, $indirect, $drawcount, $maxdrawcount, $stride);
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
     * @param int $mode
     * @param int $type
     * @param \FFI\CData|null $indirect
     * @param int $drawcount
     * @param int $maxdrawcount
     * @param int $stride
     * @return void
     */
    public function multiDrawElementsIndirectCount(int $mode, int $type, ?\FFI\CData $indirect, int $drawcount, int $maxdrawcount, int $stride): void
    {
        $__proc = $this->getProcAs('glMultiDrawElementsIndirectCount', 'void (*)(GLenum mode, GLenum type, const void *indirect, GLintptr drawcount, GLsizei maxdrawcount, GLsizei stride)');
        $__proc($mode, $type, $indirect, $drawcount, $maxdrawcount, $stride);
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
     * @param float $factor
     * @param float $units
     * @param float $clamp
     * @return void
     */
    public function polygonOffsetClamp(float $factor, float $units, float $clamp): void
    {
        $__proc = $this->getProcAs('glPolygonOffsetClamp', 'void (*)(GLfloat factor, GLfloat units, GLfloat clamp)');
        $__proc($factor, $units, $clamp);
    }

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
     * @param int $shader
     * @param \FFI\CData|null $pEntryPoint
     * @param int $numSpecializationConstants
     * @param \FFI\CData|null $pConstantIndex
     * @param \FFI\CData|null $pConstantValue
     * @return void
     */
    public function specializeShader(
        int $shader,
        ?\FFI\CData $pEntryPoint,
        int $numSpecializationConstants,
        ?\FFI\CData $pConstantIndex,
        ?\FFI\CData $pConstantValue
    ): void {
        $__proc = $this->getProcAs('glSpecializeShader', 'void (*)(GLuint shader, const GLchar *pEntryPoint, GLuint numSpecializationConstants, const GLuint *pConstantIndex, const GLuint *pConstantValue)');
        $__proc($shader, $pEntryPoint, $numSpecializationConstants, $pConstantIndex, $pConstantValue);
    }
}
