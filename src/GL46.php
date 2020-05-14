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
 *
 * @version 4.6
 */
class GL46 extends GL45
{
    /**
     * Accepted by the $target parameters of BindBuffer, BufferData, BufferSubData, MapBuffer, UnmapBuffer,
     * GetBufferSubData, GetBufferPointerv, MapBufferRange, FlushMappedBufferRange, GetBufferParameteriv, and
     * CopyBufferSubData.
     *
     * @since 4.6
     * @var int
     */
    public const GL_PARAMETER_BUFFER = 0x80EE;

    /**
     * Accepted by the $value parameter of GetIntegerv, GetBooleanv, GetFloatv, and GetDoublev.
     *
     * @since 4.6
     * @var int
     */
    public const GL_PARAMETER_BUFFER_BINDING = 0x80EF;

    /**
     * Accepted by the $target parameter of {@see GL15::beginQuery}, {@see GL15::endQuery}, {@see GL15::getQueryiv},
     * {@see GL40::beginQueryIndexed}, {@see GL40::endQueryIndexed} and {@see GL40::getQueryIndexediv}.
     *
     * @since 4.6
     * @var int
     */
    public const
        GL_VERTICES_SUBMITTED = 0x82EE,
        GL_PRIMITIVES_SUBMITTED = 0x82EF,
        GL_VERTEX_SHADER_INVOCATIONS = 0x82F0,
        GL_TESS_CONTROL_SHADER_PATCHES = 0x82F1,
        GL_TESS_EVALUATION_SHADER_INVOCATIONS = 0x82F2,
        GL_GEOMETRY_SHADER_PRIMITIVES_EMITTED = 0x82F3,
        GL_FRAGMENT_SHADER_INVOCATIONS = 0x82F4,
        GL_COMPUTE_SHADER_INVOCATIONS = 0x82F5,
        GL_CLIPPING_INPUT_PRIMITIVES = 0x82F6,
        GL_CLIPPING_OUTPUT_PRIMITIVES = 0x82F7;

    /**
     * Accepted by the $pname parameters of GetBooleanv, GetIntegerv, GetInteger64v, GetFloatv, and GetDoublev.
     *
     * @since 4.6
     * @var int
     */
    public const GL_POLYGON_OFFSET_CLAMP = 0x8E1B;

    /**
     * If set in {@see GL30::GL_CONTEXT_FLAGS}, then no error behavior is enabled for this context.
     *
     * @since 4.6
     * @var int
     */
    public const GL_CONTEXT_FLAG_NO_ERROR_BIT = 0x8;

    /**
     * Accepted by the $binaryformat parameter of {@see GL41::shaderBinary}.
     *
     * @since 4.6
     * @var int
     */
    public const GL_SHADER_BINARY_FORMAT_SPIR_V = 0x9551;

    /**
     * Accepted by the $pname parameter of {@see GL20::getShaderiv}.
     *
     * @since 4.6
     * @var int
     */
    public const GL_SPIR_V_BINARY = 0x9552;

    /**
     * Accepted by the $name parameter of {@see GL30::getStringi}.
     *
     * @since 4.6
     * @var int
     */
    public const GL_SPIR_V_EXTENSIONS = 0x9553;

    /**
     * Accepted by the $pname parameter of {@see GL11::getIntegerv}.
     *
     * @since 4.6
     * @var int
     */
    public const GL_NUM_SPIR_V_EXTENSIONS = 0x9554;

    /**
     * Accepted by the $pname parameters of GetTexParameterfv, GetTexParameteriv, TexParameterf, TexParameterfv,
     * TexParameteri, and TexParameteriv.
     *
     * @since 4.6
     * @var int
     */
    public const GL_TEXTURE_MAX_ANISOTROPY = 0x84FE;

    /**
     * Accepted by the $pname parameters of GetBooleanv, GetDoublev, GetFloatv, and GetIntegerv.
     *
     * @since 4.6
     * @var int
     */
    public const GL_MAX_TEXTURE_MAX_ANISOTROPY = 0x84FF;

    /**
     * Accepted by the $target parameter of {@see GL15::beginQuery}, {@see GL15::endQuery},
     * {@see GL15::getQueryiv}, {@see GL40::beginQueryIndexed}, {@see GL40::endQueryIndexed} and
     * {@see GL40::getQueryIndexediv}.
     *
     * @since 4.6
     * @var int
     */
    public const
        GL_TRANSFORM_FEEDBACK_OVERFLOW = 0x82EC,
        GL_TRANSFORM_FEEDBACK_STREAM_OVERFLOW = 0x82ED;

    /**
     * {@see GL46::multiDrawArraysIndirect} specifies multiple geometric primitives with very few subroutine calls.
     * {@see GL46::multiDrawArraysIndirect} behaves similarly to a multitude of calls to
     * {@see GL46::drawArraysInstancedBaseInstance}, execept that the parameters to each call to
     * {@see GL46::drawArraysInstancedBaseInstance} are stored in an array in memory at the address given by
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
     * A single call to {@see GL46::multiDrawArraysIndirect} is equivalent, assuming no errors are generated to:
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
     * {@see GL46::multiDrawArraysIndirect}, $indirect is interpreted as an offset, in basic machine units, into
     * that buffer and the parameter data is read from the buffer rather than from client memory.
     *
     * In contrast to {@see GL46::drawArraysInstancedBaseInstance}, the `first` member of the parameter structure
     * is unsigned, and out-of-range indices do not generate an error.
     *
     * Vertex attributes that are modified by {@see GL46::multiDrawArraysIndirect} have an unspecified value after
     * {@see GL46::multiDrawArraysIndirect} returns. Attributes that aren't modified remain well defined.
     *
     * @see http://docs.gl/gl4/glMultiDrawArraysIndirect
     * @since 4.6
     * @param int $mode
     * @param CData|null $indirect
     * @param int $drawcount
     * @param int $maxdrawcount
     * @param int $stride
     * @return void
     */
    public function multiDrawArraysIndirectCount(
        int $mode,
        ?CData $indirect,
        int $drawcount,
        int $maxdrawcount,
        int $stride
    ): void {
        $__proc = $this->proc('glMultiDrawArraysIndirectCount',
            'void (*)(GLenum mode, const void *indirect, GLintptr drawcount, GLsizei maxdrawcount, GLsizei stride)');
        $__proc($mode, $indirect, $drawcount, $maxdrawcount, $stride);
    }

    /**
     * {@see GL46::multiDrawElementsIndirect} specifies multiple indexed geometric primitives with very few
     * subroutine calls. {@see GL46::multiDrawElementsIndirect} behaves similarly to a multitude of calls to
     * {@see GL46::drawElementsInstancedBaseVertexBaseInstance}, execpt that the parameters to
     * {@see GL46::drawElementsInstancedBaseVertexBaseInstance} are stored in an array in memory at the address
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
     * A single call to {@see GL46::multiDrawElementsIndirect} is equivalent, assuming no errors are generated to:
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
     * {@see GL46::drawElementsIndirect}, $indirect is interpreted as an offset, in basic machine units, into that
     * buffer and the parameter data is read from the buffer rather than from client memory.
     *
     * Note that indices stored in client memory are not supported. If no buffer is bound to the
     * {@see GL46::GL_ELEMENT_ARRAY_BUFFER} binding, an error will be generated.
     *
     * The results of the operation are undefined if the `reservedMustBeZero` member of the parameter structure is
     * non-zero. However, no error is generated in this case.
     *
     * Vertex attributes that are modified by {@see GL46::drawElementsIndirect} have an unspecified value after
     * {@see GL46::drawElementsIndirect} returns. Attributes that aren't modified remain well defined.
     *
     * @see http://docs.gl/gl4/glMultiDrawElementsIndirect
     * @since 4.6
     * @param int $mode
     * @param int $type
     * @param CData|null $indirect
     * @param int $drawcount
     * @param int $maxdrawcount
     * @param int $stride
     * @return void
     */
    public function multiDrawElementsIndirectCount(
        int $mode,
        int $type,
        ?CData $indirect,
        int $drawcount,
        int $maxdrawcount,
        int $stride
    ): void {
        $__proc = $this->proc('glMultiDrawElementsIndirectCount',
            'void (*)(GLenum mode, GLenum type, const void *indirect, GLintptr drawcount, GLsizei maxdrawcount, GLsizei stride)');
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
     * {@see GL46::polygonOffset} is useful for rendering hidden-line images, for applying decals to surfaces, and
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
        $__proc = $this->proc('glPolygonOffsetClamp', 'void (*)(GLfloat factor, GLfloat units, GLfloat clamp)');
        $__proc($factor, $units, $clamp);
    }

    /**
     * {@see GL46::deleteShader} frees the memory and invalidates the name associated with the shader object
     * specified by $shader. This command effectively undoes the effects of a call to {@see GL46::createShader}.
     *
     * If a shader object to be deleted is attached to a program object, it will be flagged for deletion, but it will
     * not be deleted until it is no longer attached to any program object, for any rendering context (i.e., it must
     * be detached from wherever it was attached before it will be deleted). A value of 0 for $shader will be
     * silently ignored.
     *
     * To determine whether an object has been flagged for deletion, call {@see GL46::getShader} with arguments
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
     * @param CData|null $pEntryPoint
     * @param int $numSpecializationConstants
     * @param CData|null $pConstantIndex
     * @param CData|null $pConstantValue
     * @return void
     */
    public function specializeShader(
        int $shader,
        ?CData $pEntryPoint,
        int $numSpecializationConstants,
        ?CData $pConstantIndex,
        ?CData $pConstantValue
    ): void {
        $__proc = $this->proc('glSpecializeShader',
            'void (*)(GLuint shader, const GLchar *pEntryPoint, GLuint numSpecializationConstants, const GLuint *pConstantIndex, const GLuint *pConstantValue)');
        $__proc($shader, $pEntryPoint, $numSpecializationConstants, $pConstantIndex, $pConstantValue);
    }
}
