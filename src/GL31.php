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
 * The OpenGL functionality up to version 3.1. Includes the deprecated symbols of the Compatibility Profile.
 *
 * OpenGL 3.1 implementations support revision 1.40 of the OpenGL Shading Language.
 *
 * Extensions promoted to core in this release:
 *
 * - ARB_draw_instanced @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_draw_instanced.txt
 * - ARB_copy_buffer @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_copy_buffer.txt
 * - NV_primitive_restart @see https://www.khronos.org/registry/OpenGL/extensions/NV/NV_primitive_restart.txt
 * - ARB_texture_buffer_object @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_texture_buffer_object.txt
 * - ARB_texture_rectangle @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_texture_rectangle.txt
 * - ARB_uniform_buffer_object @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_uniform_buffer_object.txt
 *
 * @version 3.1
 */
class GL31 extends GL30
{
    /**
     * Accepted by the $internalFormat parameter of TexImage1D, TexImage2D, and TexImage3D.
     *
     * @since 3.1
     * @var int 
    */
    public const
        GL_R8_SNORM     = 0x8F94,
        GL_RG8_SNORM    = 0x8F95,
        GL_RGB8_SNORM   = 0x8F96,
        GL_RGBA8_SNORM  = 0x8F97,
        GL_R16_SNORM    = 0x8F98,
        GL_RG16_SNORM   = 0x8F99,
        GL_RGB16_SNORM  = 0x8F9A,
        GL_RGBA16_SNORM = 0x8F9B;

    /**
     * Returned by GetTexLevelParameter and GetFramebufferAttachmentParameter.
     *
     * @since 3.1
     * @var int 
    */
    public const GL_SIGNED_NORMALIZED = 0x8F9C;

    /**
     * Returned by the $type parameter of GetActiveUniform.
     *
     * @since 3.1
     * @var int 
    */
    public const
        GL_SAMPLER_BUFFER               = 0x8DC2,
        GL_INT_SAMPLER_2D_RECT          = 0x8DCD,
        GL_INT_SAMPLER_BUFFER           = 0x8DD0,
        GL_UNSIGNED_INT_SAMPLER_2D_RECT = 0x8DD5,
        GL_UNSIGNED_INT_SAMPLER_BUFFER  = 0x8DD8;

    /**
     * Accepted by the target parameters of BindBuffer, BufferData, BufferSubData, MapBuffer, UnmapBuffer,
     * GetBufferSubData, GetBufferPointerv, MapBufferRange, FlushMappedBufferRange, GetBufferParameteriv,
     * BindBufferRange, BindBufferBase, and CopyBufferSubData.
     *
     * @since 3.1
     * @var int 
    */
    public const
        GL_COPY_READ_BUFFER  = 0x8F36,
        GL_COPY_WRITE_BUFFER = 0x8F37;

    /**
     * Accepted by the $cap parameter of Enable, Disable and IsEnabled.
     *
     * @since 3.1
     * @var int 
    */
    public const GL_PRIMITIVE_RESTART = 0x8F9D;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetIntegerv, GetFloatv, and GetDoublev.
     *
     * @since 3.1
     * @var int 
    */
    public const GL_PRIMITIVE_RESTART_INDEX = 0x8F9E;

    /**
     * Accepted by the $target parameter of BindBuffer, BufferData, BufferSubData, MapBuffer, MapBufferRange,
     * BindTexture, UnmapBuffer, GetBufferSubData, GetBufferParameteriv, GetBufferPointerv, and TexBuffer, and the
     * $pname parameter of GetBooleanv, GetDoublev, GetFloatv, and GetIntegerv.
     *
     * @since 3.1
     * @var int 
    */
    public const GL_TEXTURE_BUFFER = 0x8C2A;

    /**
     * Accepted by the $pname parameters of GetBooleanv, GetDoublev, GetFloatv, and GetIntegerv.
     *
     * @since 3.1
     * @var int 
    */
    public const
        GL_MAX_TEXTURE_BUFFER_SIZE           = 0x8C2B,
        GL_TEXTURE_BINDING_BUFFER            = 0x8C2C,
        GL_TEXTURE_BUFFER_DATA_STORE_BINDING = 0x8C2D;

    /**
     * Accepted by the $cap parameter of Enable, Disable and IsEnabled; by the $pname parameter of
     * GetBooleanv, GetIntegerv, GetFloatv and GetDoublev; and by the $target parameter of BindTexture,
     * GetTexParameterfv, GetTexParameteriv, TexParameterf, TexParameteri, TexParameterfv and TexParameteriv.
     *
     * @since 3.1
     * @var int 
    */
    public const GL_TEXTURE_RECTANGLE = 0x84F5;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetIntegerv, GetFloatv and GetDoublev.
     *
     * @since 3.1
     * @var int 
    */
    public const GL_TEXTURE_BINDING_RECTANGLE = 0x84F6;

    /**
     * Accepted by the $target parameter of GetTexLevelParameteriv, GetTexLevelParameterfv, GetTexParameteriv
     * and TexImage2D.
     *
     * @since 3.1
     * @var int 
    */
    public const GL_PROXY_TEXTURE_RECTANGLE = 0x84F7;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetDoublev, GetIntegerv and GetFloatv.
     *
     * @since 3.1
     * @var int 
    */
    public const GL_MAX_RECTANGLE_TEXTURE_SIZE = 0x84F8;

    /**
     * Returned by $type parameter of GetActiveUniform when the location $index for program object
     * $program is of type sampler2DRect.
     *
     * @since 3.1
     * @var int 
    */
    public const GL_SAMPLER_2D_RECT = 0x8B63;

    /**
     * Returned by $type parameter of GetActiveUniform when the location $index for program object
     * $program is of type sampler2DRectShadow.
     *
     * @since 3.1
     * @var int 
    */
    public const GL_SAMPLER_2D_RECT_SHADOW = 0x8B64;

    /**
     * Accepted by the $target parameters of BindBuffer, BufferData, BufferSubData, MapBuffer, UnmapBuffer,
     * GetBufferSubData, and GetBufferPointerv.
     *
     * @since 3.1
     * @var int 
    */
    public const GL_UNIFORM_BUFFER = 0x8A11;

    /**
     * Accepted by the $pname parameter of GetIntegeri_v, GetBooleanv, GetIntegerv, GetFloatv, and GetDoublev.
     *
     * @since 3.1
     * @var int 
    */
    public const GL_UNIFORM_BUFFER_BINDING = 0x8A28;

    /**
     * Accepted by the $pname parameter of GetIntegeri_v.
     *
     * @since 3.1
     * @var int 
    */
    public const
        GL_UNIFORM_BUFFER_START = 0x8A29,
        GL_UNIFORM_BUFFER_SIZE  = 0x8A2A;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetIntegerv, GetFloatv, and GetDoublev.
     *
     * @since 3.1
     * @var int 
    */
    public const
        GL_MAX_VERTEX_UNIFORM_BLOCKS                = 0x8A2B,
        GL_MAX_GEOMETRY_UNIFORM_BLOCKS              = 0x8A2C,
        GL_MAX_FRAGMENT_UNIFORM_BLOCKS              = 0x8A2D,
        GL_MAX_COMBINED_UNIFORM_BLOCKS              = 0x8A2E,
        GL_MAX_UNIFORM_BUFFER_BINDINGS              = 0x8A2F,
        GL_MAX_UNIFORM_BLOCK_SIZE                   = 0x8A30,
        GL_MAX_COMBINED_VERTEX_UNIFORM_COMPONENTS   = 0x8A31,
        GL_MAX_COMBINED_GEOMETRY_UNIFORM_COMPONENTS = 0x8A32,
        GL_MAX_COMBINED_FRAGMENT_UNIFORM_COMPONENTS = 0x8A33,
        GL_UNIFORM_BUFFER_OFFSET_ALIGNMENT          = 0x8A34;

    /**
     * Accepted by the $pname parameter of GetProgramiv.
     *
     * @since 3.1
     * @var int 
    */
    public const
        GL_ACTIVE_UNIFORM_BLOCK_MAX_NAME_LENGTH = 0x8A35,
        GL_ACTIVE_UNIFORM_BLOCKS                = 0x8A36;

    /**
     * Accepted by the $pname parameter of GetActiveUniformsiv.
     *
     * @since 3.1
     * @var int 
    */
    public const
        GL_UNIFORM_TYPE          = 0x8A37,
        GL_UNIFORM_SIZE          = 0x8A38,
        GL_UNIFORM_NAME_LENGTH   = 0x8A39,
        GL_UNIFORM_BLOCK_INDEX   = 0x8A3A,
        GL_UNIFORM_OFFSET        = 0x8A3B,
        GL_UNIFORM_ARRAY_STRIDE  = 0x8A3C,
        GL_UNIFORM_MATRIX_STRIDE = 0x8A3D,
        GL_UNIFORM_IS_ROW_MAJOR  = 0x8A3E;

    /**
     * Accepted by the $pname parameter of GetActiveUniformBlockiv.
     *
     * @since 3.1
     * @var int 
    */
    public const
        GL_UNIFORM_BLOCK_BINDING                       = 0x8A3F,
        GL_UNIFORM_BLOCK_DATA_SIZE                     = 0x8A40,
        GL_UNIFORM_BLOCK_NAME_LENGTH                   = 0x8A41,
        GL_UNIFORM_BLOCK_ACTIVE_UNIFORMS               = 0x8A42,
        GL_UNIFORM_BLOCK_ACTIVE_UNIFORM_INDICES        = 0x8A43,
        GL_UNIFORM_BLOCK_REFERENCED_BY_VERTEX_SHADER   = 0x8A44,
        GL_UNIFORM_BLOCK_REFERENCED_BY_GEOMETRY_SHADER = 0x8A45,
        GL_UNIFORM_BLOCK_REFERENCED_BY_FRAGMENT_SHADER = 0x8A46;

    /**
     * Returned by GetActiveUniformsiv and GetUniformBlockIndex.
     *
     * @since 3.1
     * @var int 
    */
    public const GL_INVALID_INDEX = 0xFFFF_FFFF;


    /**
     * {@see GL31::copyBufferSubData} and {@see GL31::copyNamedBufferSubData} copy part of the data store
     * attached to a source buffer object to the data store attached to a destination buffer object. The number of
     * basic machine units indicated by $size is copied from the source at offset $readOffset to the destination at
     * $writeOffset. $readOffset, $writeOffset and $size are in terms of basic machine units.
     *
     * For {@see GL31::copyBufferSubData}, $readTarget and $writeTarget specify the targets to which the source and
     * destination buffer objects are bound, and must each be one of the buffer binding targets in the following
     * table:
     *
     * | {@see GL31::GL_ARRAY_BUFFER}              | Vertex attributes                  |
     * | {@see GL31::GL_ATOMIC_COUNTER_BUFFER}     | Atomic counter storage             |
     * | {@see GL31::GL_COPY_READ_BUFFER}          | Buffer copy source                 |
     * | {@see GL31::GL_COPY_WRITE_BUFFER}         | Buffer copy destination            |
     * | {@see GL31::GL_DISPATCH_INDIRECT_BUFFER}  | Indirect compute dispatch commands |
     * | {@see GL31::GL_DRAW_INDIRECT_BUFFER}      | Indirect command arguments         |
     * | {@see GL31::GL_ELEMENT_ARRAY_BUFFER}      | Vertex array indices               |
     * | {@see GL31::GL_PIXEL_PACK_BUFFER}         | Pixel read target                  |
     * | {@see GL31::GL_PIXEL_UNPACK_BUFFER}       | Texture data source                |
     * | {@see GL31::GL_QUERY_BUFFER}              | Query result buffer                |
     * | {@see GL31::GL_SHADER_STORAGE_BUFFER}     | Read-write storage for shaders     |
     * | {@see GL31::GL_TEXTURE_BUFFER}            | Texture data buffer                |
     * | {@see GL31::GL_TRANSFORM_FEEDBACK_BUFFER} | Transform feedback buffer          |
     * | {@see GL31::GL_UNIFORM_BUFFER}            | Uniform block storage              |
     *
     * Any of these targets may be used, but the targets {@see GL31::GL_COPY_READ_BUFFER} and
     * {@see GL31::GL_COPY_WRITE_BUFFER} are provided specifically to allow copies between buffers without disturbing
     * other GL state.
     *
     * $readOffset, $writeOffset and $size must all be greater than or equal to zero. Furthermore, $readOffset+size$
     * must not exceeed the size of the source buffer object, and $writeOffset+size$ must not exceeed the size of the
     * buffer bound to $writeTarget. If the source and destination are the same buffer object, then the source and
     * destination ranges must not overlap.
     *
     * @see http://docs.gl/gl4/glCopyBufferSubData
     * @since 3.1
     * @param int $readTarget
     * @param int $writeTarget
     * @param int $readOffset
     * @param int $writeOffset
     * @param int $size
     * @return void
     */
    public function copyBufferSubData(int $readTarget, int $writeTarget, int $readOffset, int $writeOffset, int $size): void
    {
        $__proc = $this->proc('glCopyBufferSubData', 'void (*)(GLenum readTarget, GLenum writeTarget, GLintptr readOffset, GLintptr writeOffset, GLsizeiptr size)');
        $__proc($readTarget, $writeTarget, $readOffset, $writeOffset, $size);
    }

    /**
     * {@see GL31::drawArraysInstanced} behaves identically to {@see GL31::drawArrays} except that $instancecount
     * instances of the range of elements are executed and the value of the internal counter $instanceID advances for
     * each iteration. $instanceID is an internal 32-bit integer counter that may be read by a vertex shader as
     * {@see GL31::_InstanceID}.
     *
     * {@see GL31::drawArraysInstanced} has the same effect as:
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
     * @see http://docs.gl/gl4/glDrawArraysInstanced
     * @since 3.1
     * @param int $mode
     * @param int $first
     * @param int $count
     * @param int $instancecount
     * @return void
     */
    public function drawArraysInstanced(int $mode, int $first, int $count, int $instancecount): void
    {
        $__proc = $this->proc('glDrawArraysInstanced', 'void (*)(GLenum mode, GLint first, GLsizei count, GLsizei instancecount)');
        $__proc($mode, $first, $count, $instancecount);
    }

    /**
     * {@see GL31::drawElementsInstanced} behaves identically to {@see GL31::drawElements} except that
     * $instancecount instances of the set of elements are executed and the value of the internal counter $instanceID
     * advances for each iteration. $instanceID is an internal 32-bit integer counter that may be read by a vertex
     * shader as {@see GL31::_InstanceID}.
     *
     * {@see GL31::drawElementsInstanced} has the same effect as:
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
     * @see http://docs.gl/gl4/glDrawElementsInstanced
     * @since 3.1
     * @param int $mode
     * @param int $count
     * @param int $type
     * @param CData|null $indices
     * @param int $instancecount
     * @return void
     */
    public function drawElementsInstanced(int $mode, int $count, int $type, ?CData $indices, int $instancecount): void
    {
        $__proc = $this->proc('glDrawElementsInstanced', 'void (*)(GLenum mode, GLsizei count, GLenum type, const void *indices, GLsizei instancecount)');
        $__proc($mode, $count, $type, $indices, $instancecount);
    }

    /**
     * {@see GL31::getActiveUniformBlockName} retrieves the name of the active uniform block at $uniformBlockIndex
     * within $program.
     *
     * $program must be the name of a program object for which the command {@see GL31::linkProgram} must have been
     * called in the past, although it is not required that {@see GL31::linkProgram} must have succeeded. The link
     * could have failed because the number of active uniforms exceeded the limit.
     *
     * $uniformBlockIndex is an active uniform block index of $program, and must be less than the value of
     * {@see GL31::GL_ACTIVE_UNIFORM_BLOCKS}.
     *
     * Upon success, the name of the uniform block identified by $unifomBlockIndex is returned into
     * $uniformBlockName. The name is nul-terminated. The actual number of characters written into $uniformBlockName,
     * excluding the nul terminator, is returned in $length. If $length is `NULL`, no length is returned.
     *
     * $bufSize contains the maximum number of characters (including the nul terminator) that will be written into
     * $uniformBlockName.
     *
     * If an error occurs, nothing will be written to $uniformBlockName or $length.
     *
     * @see http://docs.gl/gl4/glGetActiveUniformBlockName
     * @since 3.1
     * @param int $program
     * @param int $uniformBlockIndex
     * @param int $bufSize
     * @param int|null $length
     * @param string|null $uniformBlockName
     * @return void
     */
    public function getActiveUniformBlockName(int $program, int $uniformBlockIndex, int $bufSize, ?int &$length, ?string &$uniformBlockName): void
    {
        $lengthCType = $this->info->ffi->new('GLsizei', false);
        $uniformBlockNameCType = \FFI::addr($this->info->ffi->new('GLchar[' . $bufSize . ']', false)[0]);
        try {
            $__proc = $this->proc('glGetActiveUniformBlockName', 'void (*)(GLuint program, GLuint uniformBlockIndex, GLsizei bufSize, GLsizei *length, GLchar *uniformBlockName)');
            $__proc($program, $uniformBlockIndex, $bufSize, \FFI::addr($lengthCType), $uniformBlockNameCType);
        } finally {
            $length = $lengthCType->cdata;
            \FFI::free($lengthCType);
            $uniformBlockName = \FFI::string($uniformBlockNameCType);
            \FFI::free($uniformBlockNameCType);
        }
    }

    /**
     * {@see GL31::getActiveUniformBlockiv} retrieves information about an active uniform block within $program.
     *
     * $program must be the name of a program object for which the command {@see GL31::linkProgram} must have been
     * called in the past, although it is not required that {@see GL31::linkProgram} must have succeeded. The link
     * could have failed because the number of active uniforms exceeded the limit.
     *
     * $uniformBlockIndex is an active uniform block index of $program, and must be less than the value of
     * {@see GL31::GL_ACTIVE_UNIFORM_BLOCKS}.
     *
     * Upon success, the uniform block parameter(s) specified by $pname are returned in $params. If an error occurs,
     * nothing will be written to $params.
     *
     * If $pname is {@see GL31::GL_UNIFORM_BLOCK_BINDING}, then the index of the uniform buffer binding point last
     * selected by the uniform block specified by $uniformBlockIndex for $program is returned. If no uniform block
     * has been previously specified, zero is returned.
     *
     * If $pname is {@see GL31::GL_UNIFORM_BLOCK_DATA_SIZE}, then the implementation-dependent minimum total buffer
     * object size, in basic machine units, required to hold all active uniforms in the uniform block identified by
     * $uniformBlockIndex is returned. It is neither guaranteed nor expected that a given implementation will arrange
     * uniform values as tightly packed in a buffer object. The exception to this is the std140 uniform block layout,
     * which guarantees specific packing behavior and does not require the application to query for offsets and
     * strides. In this case the minimum size may still be queried, even though it is determined in advance based
     * only on the uniform block declaration.
     *
     * If $pname is {@see GL31::GL_UNIFORM_BLOCK_NAME_LENGTH}, then the total length (including the nul terminator)
     * of the name of the uniform block identified by $uniformBlockIndex is returned.
     *
     * If $pname is {@see GL31::GL_UNIFORM_BLOCK_ACTIVE_UNIFORMS}, then the number of active uniforms in the uniform
     * block identified by $uniformBlockIndex is returned.
     *
     * If $pname is {@see GL31::GL_UNIFORM_BLOCK_ACTIVE_UNIFORM_INDICES}, then a list of the active uniform indices
     * for the uniform block identified by $uniformBlockIndex is returned. The number of elements that will be
     * written to $params is the value of {@see GL31::GL_UNIFORM_BLOCK_ACTIVE_UNIFORMS} for $uniformBlockIndex.
     *
     * If $pname is {@see GL31::GL_UNIFORM_BLOCK_REFERENCED_BY_VERTEX_SHADER},
     * {@see GL31::GL_UNIFORM_BLOCK_REFERENCED_BY_TESS_CONTROL_SHADER},
     * {@see GL31::GL_UNIFORM_BLOCK_REFERENCED_BY_TESS_EVALUATION_SHADER},
     * {@see GL31::GL_UNIFORM_BLOCK_REFERENCED_BY_GEOMETRY_SHADER},
     * {@see GL31::GL_UNIFORM_BLOCK_REFERENCED_BY_FRAGMENT_SHADER}, or
     * {@see GL31::GL_UNIFORM_BLOCK_REFERENCED_BY_COMPUTE_SHADER} then a boolean value indicating whether the uniform
     * block identified by $uniformBlockIndex is referenced by the vertex, tessellation control, tessellation
     * evaluation, geometry, fragment or compute programming stages of program, respectively, is returned.
     *
     * @see http://docs.gl/gl4/glGetActiveUniformBlock
     * @since 3.1
     * @param int $program
     * @param int $uniformBlockIndex
     * @param int $pname
     * @param int|null $params
     * @return void
     */
    public function getActiveUniformBlockiv(int $program, int $uniformBlockIndex, int $pname, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->proc('glGetActiveUniformBlockiv', 'void (*)(GLuint program, GLuint uniformBlockIndex, GLenum pname, GLint *params)');
            $__proc($program, $uniformBlockIndex, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL31::getActiveUniformName} returns the name of the active uniform at $uniformIndex within $program.
     * If $uniformName is not `NULL`, up to $bufSize characters (including a nul-terminator) will be written into the
     * array whose address is specified by $uniformName. If $length is not `NULL`, the number of characters that were
     * (or would have been) written into $uniformName (not including the nul-terminator) will be placed in the
     * variable whose address is specified in $length. If $length is `NULL`, no length is returned. The length of the
     * longest uniform name in $program is given by the value of {@see GL31::GL_ACTIVE_UNIFORM_MAX_LENGTH}, which can
     * be queried with {@see GL31::getProgram}.
     *
     * If {@see GL31::getActiveUniformName} is not successful, nothing is written to $length or $uniformName.
     *
     * $program must be the name of a program for which the command {@see GL31::linkProgram} has been issued in the
     * past. It is not necessary for $program to have been linked successfully. The link could have failed because
     * the number of active uniforms exceeded the limit.
     *
     * $uniformIndex must be an active uniform index of the program $program, in the range zero to the value of
     * {@see GL31::GL_ACTIVE_UNIFORMS} minus one. The value of {@see GL31::GL_ACTIVE_UNIFORMS} can be queried with
     * {@see GL31::getProgram}.
     *
     * @see http://docs.gl/gl4/glGetActiveUniformName
     * @since 3.1
     * @param int $program
     * @param int $uniformIndex
     * @param int $bufSize
     * @param int|null $length
     * @param string|null $uniformName
     * @return void
     */
    public function getActiveUniformName(int $program, int $uniformIndex, int $bufSize, ?int &$length, ?string &$uniformName): void
    {
        $lengthCType = $this->info->ffi->new('GLsizei', false);
        $uniformNameCType = \FFI::addr($this->info->ffi->new('GLchar[' . $bufSize . ']', false)[0]);
        try {
            $__proc = $this->proc('glGetActiveUniformName', 'void (*)(GLuint program, GLuint uniformIndex, GLsizei bufSize, GLsizei *length, GLchar *uniformName)');
            $__proc($program, $uniformIndex, $bufSize, \FFI::addr($lengthCType), $uniformNameCType);
        } finally {
            $length = $lengthCType->cdata;
            \FFI::free($lengthCType);
            $uniformName = \FFI::string($uniformNameCType);
            \FFI::free($uniformNameCType);
        }
    }

    /**
     * {@see GL31::getActiveUniformsiv} queries the value of the parameter named $pname for each of the uniforms
     * within $program whose indices are specified in the array of $uniformCount unsigned integers $uniformIndices.
     * Upon success, the value of the parameter for each uniform is written into the corresponding entry in the array
     * whose address is given in $params. If an error is generated, nothing is written into $params.
     *
     * If $pname is {@see GL31::GL_UNIFORM_TYPE}, then an array identifying the types of uniforms specified by the
     * corresponding array of $uniformIndices is returned. The returned types can be any of the values from the
     * following table:         Returned Symbolic Contant     Shader Uniform Type        {@see GL31::GL_FLOAT}
     * {@see GL46::float}     {@see GL31::GL_FLOAT_VEC2}   {@see GL46::vec2}     {@see GL31::GL_FLOAT_VEC3}
     * {@see GL46::vec3}     {@see GL31::GL_FLOAT_VEC4}   {@see GL46::vec4}     {@see GL31::GL_DOUBLE}
     * {@see GL46::double}     {@see GL31::GL_DOUBLE_VEC2}   {@see GL46::dvec2}     {@see GL31::GL_DOUBLE_VEC3}
     * {@see GL46::dvec3}     {@see GL31::GL_DOUBLE_VEC4}   {@see GL46::dvec4}     {@see GL31::GL_INT}
     * {@see GL46::int}     {@see GL31::GL_INT_VEC2}   {@see GL46::ivec2}     {@see GL31::GL_INT_VEC3}
     * {@see GL46::ivec3}     {@see GL31::GL_INT_VEC4}   {@see GL46::ivec4}     {@see GL31::GL_UNSIGNED_INT}
     * {@see GL46::unsigned int}     {@see GL31::GL_UNSIGNED_INT_VEC2}   {@see GL46::uvec2}
     * {@see GL31::GL_UNSIGNED_INT_VEC3}   {@see GL46::uvec3}     {@see GL31::GL_UNSIGNED_INT_VEC4}
     * {@see GL46::uvec4}     {@see GL31::GL_BOOL}   {@see GL46::bool}     {@see GL31::GL_BOOL_VEC2}
     * {@see GL46::bvec2}     {@see GL31::GL_BOOL_VEC3}   {@see GL46::bvec3}     {@see GL31::GL_BOOL_VEC4}
     * {@see GL46::bvec4}     {@see GL31::GL_FLOAT_MAT2}   {@see GL46::mat2}     {@see GL31::GL_FLOAT_MAT3}
     * {@see GL46::mat3}     {@see GL31::GL_FLOAT_MAT4}   {@see GL46::mat4}     {@see GL31::GL_FLOAT_MAT2x3}
     * {@see GL46::mat2x3}     {@see GL31::GL_FLOAT_MAT2x4}   {@see GL46::mat2x4}     {@see GL31::GL_FLOAT_MAT3x2}
     * {@see GL46::mat3x2}     {@see GL31::GL_FLOAT_MAT3x4}   {@see GL46::mat3x4}     {@see GL31::GL_FLOAT_MAT4x2}
     * {@see GL46::mat4x2}     {@see GL31::GL_FLOAT_MAT4x3}   {@see GL46::mat4x3}     {@see GL31::GL_DOUBLE_MAT2}
     * {@see GL46::dmat2}     {@see GL31::GL_DOUBLE_MAT3}   {@see GL46::dmat3}     {@see GL31::GL_DOUBLE_MAT4}
     * {@see GL46::dmat4}     {@see GL31::GL_DOUBLE_MAT2x3}   {@see GL46::dmat2x3}     {@see GL31::GL_DOUBLE_MAT2x4}
     *  {@see GL46::dmat2x4}     {@see GL31::GL_DOUBLE_MAT3x2}   {@see GL46::dmat3x2}
     * {@see GL31::GL_DOUBLE_MAT3x4}   {@see GL46::dmat3x4}     {@see GL31::GL_DOUBLE_MAT4x2}   {@see GL46::dmat4x2}
     *    {@see GL31::GL_DOUBLE_MAT4x3}   {@see GL46::dmat4x3}     {@see GL31::GL_SAMPLER_1D}
     * {@see GL46::sampler1D}     {@see GL31::GL_SAMPLER_2D}   {@see GL46::sampler2D}     {@see GL31::GL_SAMPLER_3D}
     *  {@see GL46::sampler3D}     {@see GL31::GL_SAMPLER_CUBE}   {@see GL46::samplerCube}
     * {@see GL31::GL_SAMPLER_1D_SHADOW}   {@see GL46::sampler1DShadow}     {@see GL31::GL_SAMPLER_2D_SHADOW}
     * {@see GL46::sampler2DShadow}     {@see GL31::GL_SAMPLER_1D_ARRAY}   {@see GL46::sampler1DArray}
     * {@see GL31::GL_SAMPLER_2D_ARRAY}   {@see GL46::sampler2DArray}     {@see GL31::GL_SAMPLER_1D_ARRAY_SHADOW}
     * {@see GL46::sampler1DArrayShadow}     {@see GL31::GL_SAMPLER_2D_ARRAY_SHADOW}
     * {@see GL46::sampler2DArrayShadow}     {@see GL31::GL_SAMPLER_2D_MULTISAMPLE}   {@see GL46::sampler2DMS}
     * {@see GL31::GL_SAMPLER_2D_MULTISAMPLE_ARRAY}   {@see GL46::sampler2DMSArray}
     * {@see GL31::GL_SAMPLER_CUBE_SHADOW}   {@see GL46::samplerCubeShadow}     {@see GL31::GL_SAMPLER_BUFFER}
     * {@see GL46::samplerBuffer}     {@see GL31::GL_SAMPLER_2D_RECT}   {@see GL46::sampler2DRect}
     * {@see GL31::GL_SAMPLER_2D_RECT_SHADOW}   {@see GL46::sampler2DRectShadow}     {@see GL31::GL_INT_SAMPLER_1D}
     * {@see GL46::isampler1D}     {@see GL31::GL_INT_SAMPLER_2D}   {@see GL46::isampler2D}
     * {@see GL31::GL_INT_SAMPLER_3D}   {@see GL46::isampler3D}     {@see GL31::GL_INT_SAMPLER_CUBE}
     * {@see GL46::isamplerCube}     {@see GL31::GL_INT_SAMPLER_1D_ARRAY}   {@see GL46::isampler1DArray}
     * {@see GL31::GL_INT_SAMPLER_2D_ARRAY}   {@see GL46::isampler2DArray}
     * {@see GL31::GL_INT_SAMPLER_2D_MULTISAMPLE}   {@see GL46::isampler2DMS}
     * {@see GL31::GL_INT_SAMPLER_2D_MULTISAMPLE_ARRAY}   {@see GL46::isampler2DMSArray}
     * {@see GL31::GL_INT_SAMPLER_BUFFER}   {@see GL46::isamplerBuffer}     {@see GL31::GL_INT_SAMPLER_2D_RECT}
     * {@see GL46::isampler2DRect}     {@see GL31::GL_UNSIGNED_INT_SAMPLER_1D}   {@see GL46::usampler1D}
     * {@see GL31::GL_UNSIGNED_INT_SAMPLER_2D}   {@see GL46::usampler2D}     {@see GL31::GL_UNSIGNED_INT_SAMPLER_3D}
     *  {@see GL46::usampler3D}     {@see GL31::GL_UNSIGNED_INT_SAMPLER_CUBE}   {@see GL46::usamplerCube}
     * {@see GL31::GL_UNSIGNED_INT_SAMPLER_1D_ARRAY}   {@see GL46::usampler2DArray}
     * {@see GL31::GL_UNSIGNED_INT_SAMPLER_2D_ARRAY}   {@see GL46::usampler2DArray}
     * {@see GL31::GL_UNSIGNED_INT_SAMPLER_2D_MULTISAMPLE}   {@see GL46::usampler2DMS}
     * {@see GL31::GL_UNSIGNED_INT_SAMPLER_2D_MULTISAMPLE_ARRAY}   {@see GL46::usampler2DMSArray}
     * {@see GL31::GL_UNSIGNED_INT_SAMPLER_BUFFER}   {@see GL46::usamplerBuffer}
     * {@see GL31::GL_UNSIGNED_INT_SAMPLER_2D_RECT}   {@see GL46::usampler2DRect}
     *
     * If $pname is {@see GL31::GL_UNIFORM_SIZE}, then an array identifying the size of the uniforms specified by the
     * corresponding array of $uniformIndices is returned. The sizes returned are in units of the type returned by a
     * query of {@see GL31::GL_UNIFORM_TYPE}. For active uniforms that are arrays, the size is the number of active
     * elements in the array; for all other uniforms, the size is one.
     *
     * If $pname is {@see GL31::GL_UNIFORM_NAME_LENGTH}, then an array identifying the length, including the
     * terminating null character, of the uniform name strings specified by the corresponding array of
     * $uniformIndices is returned.
     *
     * If $pname is {@see GL31::GL_UNIFORM_BLOCK_INDEX}, then an array identifying the uniform block index of each of
     * the uniforms specified by the corresponding array of $uniformIndices is returned. The uniform block index of a
     * uniform associated with the default uniform block is -1.
     *
     * If $pname is {@see GL31::GL_UNIFORM_OFFSET}, then an array of uniform buffer offsets is returned. For uniforms
     * in a named uniform block, the returned value will be its offset, in basic machine units, relative to the
     * beginning of the uniform block in the buffer object data store. For atomic counter uniforms, the returned
     * value will be its offset relative to the beginning of its active atomic counter buffer. For all other
     * uniforms, -1 will be returned.
     *
     * If $pname is {@see GL31::GL_UNIFORM_ARRAY_STRIDE}, then an array identifying the stride between elements of
     * each of the uniforms specified by the corresponding array of $uniformIndices is returned. For uniforms in
     * named uniform blocks and for uniforms declared as atomic counters, the stride is the difference, in basic
     * machine units, of consecutive elements in an array, or zero for uniforms not declared as an array. For all
     * other uniforms, a stride of -1 will be returned.
     *
     * If $pname is {@see GL31::GL_UNIFORM_MATRIX_STRIDE}, then an array identifying the stride between columns of a
     * column-major matrix or rows of a row-major matrix, in basic machine units, of each of the uniforms specified
     * by the corresponding array of $uniformIndices is returned. The matrix stride of a uniform associated with the
     * default uniform block is -1. Note that this information only makes sense for uniforms that are matrices. For
     * uniforms that are not matrices, but are declared in a named uniform block, a matrix stride of zero is
     * returned.
     *
     * If $pname is {@see GL31::GL_UNIFORM_IS_ROW_MAJOR}, then an array identifying whether each of the uniforms
     * specified by the corresponding array of $uniformIndices is a row-major matrix or not is returned. A value of
     * one indicates a row-major matrix, and a value of zero indicates a column-major matrix, a matrix in the default
     * uniform block, or a non-matrix.
     *
     * If $pname is {@see GL31::GL_UNIFORM_ATOMIC_COUNTER_BUFFER_INDEX}, then an array identifying the active atomic
     * counter buffer index of each of the uniforms specified by the corresponding array of $uniformIndices is
     * returned. For uniforms other than atomic counters, the returned buffer index is -1. The returned indices may
     * be passed to {@see GL31::getActiveAtomicCounterBufferiv} to query the properties of the associated buffer,
     * and not necessarily the binding point specified in the uniform declaration.
     *
     * @see http://docs.gl/gl4/glGetActiveUniformsiv
     * @since 3.1
     * @param int $program
     * @param int $uniformCount
     * @param CData|null $uniformIndices
     * @param int $pname
     * @param int|null $params
     * @return void
     */
    public function getActiveUniformsiv(int $program, int $uniformCount, ?CData $uniformIndices, int $pname, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->proc('glGetActiveUniformsiv', 'void (*)(GLuint program, GLsizei uniformCount, const GLuint *uniformIndices, GLenum pname, GLint *params)');
            $__proc($program, $uniformCount, $uniformIndices, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL31::getUniformBlockIndex} retrieves the index of a uniform block within $program.
     *
     * $program must be the name of a program object for which the command {@see GL31::linkProgram} must have been
     * called in the past, although it is not required that {@see GL31::linkProgram} must have succeeded. The link
     * could have failed because the number of active uniforms exceeded the limit.
     *
     * $uniformBlockName must contain a nul-terminated string specifying the name of the uniform block.
     *
     * {@see GL31::getUniformBlockIndex} returns the uniform block index for the uniform block named
     * $uniformBlockName of $program. If $uniformBlockName does not identify an active uniform block of $program,
     * {@see GL31::getUniformBlockIndex} returns the special identifier, {@see GL31::GL_INVALID_INDEX}. Indices of
     * the active uniform blocks of a program are assigned in consecutive order, beginning with zero.
     *
     * @see http://docs.gl/gl4/glGetUniformBlockIndex
     * @since 3.1
     * @param int $program
     * @param CData|null $uniformBlockName
     * @return int
     */
    public function getUniformBlockIndex(int $program, ?CData $uniformBlockName): int
    {
        $__proc = $this->proc('glGetUniformBlockIndex', 'GLuint (*)(GLuint program, const GLchar *uniformBlockName)');
        return $__proc($program, $uniformBlockName);
    }

    /**
     * {@see GL31::getUniformIndices} retrieves the indices of a number of uniforms within $program.
     *
     * $program must be the name of a program object for which the command {@see GL31::linkProgram} must have been
     * called in the past, although it is not required that {@see GL31::linkProgram} must have succeeded. The link
     * could have failed because the number of active uniforms exceeded the limit.
     *
     * $uniformCount indicates both the number of elements in the array of names $uniformNames and the number of
     * indices that may be written to $uniformIndices.
     *
     * $uniformNames contains a list of $uniformCount name strings identifying the uniform names to be queried for
     * indices. For each name string in $uniformNames, the index assigned to the active uniform of that name will be
     * written to the corresponding element of $uniformIndices. If a string in $uniformNames is not the name of an
     * active uniform, the special value {@see GL31::GL_INVALID_INDEX} will be written to the corresponding element
     * of $uniformIndices.
     *
     * If an error occurs, nothing is written to $uniformIndices.
     *
     * @see http://docs.gl/gl4/glGetUniformIndices
     * @since 3.1
     * @param int $program
     * @param int $uniformCount
     * @param array|string[] $uniformNames
     * @param int|null $uniformIndices
     * @return void
     */
    public function getUniformIndices(int $program, int $uniformCount, array $uniformNames, ?int &$uniformIndices): void
    {
        $uniformNamesCType = \FFI::new('char*[' . \count($uniformNames) . ']');
        foreach ($uniformNames as $i => $v) {
            $uniformNamesCType[$i] = Util::charPtr($v);
        }
        $uniformIndicesCType = $this->info->ffi->new('GLuint', false);
        try {
            $__proc = $this->proc('glGetUniformIndices', 'void (*)(GLuint program, GLsizei uniformCount, const GLchar *const *uniformNames, GLuint *uniformIndices)');
            $__proc($program, $uniformCount, $uniformNamesCType, \FFI::addr($uniformIndicesCType));
        } finally {
            $uniformIndices = $uniformIndicesCType->cdata;
            \FFI::free($uniformIndicesCType);
        }
    }

    /**
     * {@see GL31::primitiveRestartIndex} specifies a vertex array element that is treated specially when primitive
     * restarting is enabled. This is known as the primitive restart index.
     *
     * When one of the {@see GL46::Draw*} commands transfers a set of generic attribute array elements to the GL, if
     * the index within the vertex arrays corresponding to that set is equal to the primitive restart index, then the
     * GL does not process those elements as a vertex. Instead, it is as if the drawing command ended with the
     * immediately preceding transfer, and another drawing command is immediately started with the same parameters,
     * but only transferring the immediately following element through the end of the originally specified elements.
     *
     * When either {@see GL31::drawElementsBaseVertex}, {@see GL31::drawElementsInstancedBaseVertex} or
     * {@see GL31::multiDrawElementsBaseVertex} is used, the primitive restart comparison occurs before the
     * basevertex offset is added to the array index.
     *
     * @see http://docs.gl/gl4/glPrimitiveRestartIndex
     * @since 3.1
     * @param int $index
     * @return void
     */
    public function primitiveRestartIndex(int $index): void
    {
        $__proc = $this->proc('glPrimitiveRestartIndex', 'void (*)(GLuint index)');
        $__proc($index);
    }

    /**
     * {@see GL31::texBuffer} and {@see GL31::textureBuffer} attaches the data store of a specified buffer object
     * to a specified texture object, and specify the storage format for the texture image found in the buffer
     * object. The texture object must be a buffer texture.
     *
     * If $buffer is zero, any buffer object attached to the buffer texture is detached and no new buffer object is
     * attached. If $buffer is non-zero, it must be the name of an existing buffer object.
     *
     * $internalformat specifies the storage format, and must be one of the following sized internal formats:
     *
     * $internalformat specifies the storage format, and must be one of the following sized internal formats:
     *
     * | {@see GL31::GL_R8}       | ubyte  | 1 | YES | R | 0 | 0 | 1 |
     * | {@see GL31::GL_R16}      | ushort | 1 | YES | R | 0 | 0 | 1 |
     * | {@see GL31::GL_R16F}     | half   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL31::GL_R32F}     | float  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL31::GL_R8I}      | byte   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL31::GL_R16I}     | short  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL31::GL_R32I}     | int    | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL31::GL_R8UI}     | ubyte  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL31::GL_R16UI}    | ushort | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL31::GL_R32UI}    | uint   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL31::GL_RG8}      | ubyte  | 2 | YES | R | G | 0 | 1 |
     * | {@see GL31::GL_RG16}     | ushort | 2 | YES | R | G | 0 | 1 |
     * | {@see GL31::GL_RG16F}    | half   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL31::GL_RG32F}    | float  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL31::GL_RG8I}     | byte   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL31::GL_RG16I}    | short  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL31::GL_RG32I}    | int    | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL31::GL_RG8UI}    | ubyte  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL31::GL_RG16UI}   | ushort | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL31::GL_RG32UI}   | uint   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL31::GL_RGB32F}   | float  | 3 | NO  | R | G | B | 1 |
     * | {@see GL31::GL_RGB32I}   | int    | 3 | NO  | R | G | B | 1 |
     * | {@see GL31::GL_RGB32UI}  | uint   | 3 | NO  | R | G | B | 1 |
     * | {@see GL31::GL_RGBA8}    | uint   | 4 | YES | R | G | B | A |
     * | {@see GL31::GL_RGBA16}   | short  | 4 | YES | R | G | B | A |
     * | {@see GL31::GL_RGBA16F}  | half   | 4 | NO  | R | G | B | A |
     * | {@see GL31::GL_RGBA32F}  | float  | 4 | NO  | R | G | B | A |
     * | {@see GL31::GL_RGBA8I}   | byte   | 4 | NO  | R | G | B | A |
     * | {@see GL31::GL_RGBA16I}  | short  | 4 | NO  | R | G | B | A |
     * | {@see GL31::GL_RGBA32I}  | int    | 4 | NO  | R | G | B | A |
     * | {@see GL31::GL_RGBA8UI}  | ubyte  | 4 | NO  | R | G | B | A |
     * | {@see GL31::GL_RGBA16UI} | ushort | 4 | NO  | R | G | B | A |
     * | {@see GL31::GL_RGBA32UI} | uint   | 4 | NO  | R | G | B | A |
     *
     * When a buffer object is attached to a buffer texture, the buffer object's data store is taken as the texture's
     * texel array. The number of texels in the buffer texture's texel array is given by $$ \\left\\lfloor { size
     * \\over { components \\times sizeof(base\\_type) } } \\right\\rfloor $$ where $size$ is the size of the buffer
     * object in basic machine units (the value of {@see GL31::GL_BUFFER_SIZE} for $buffer), and $components$ and
     * $base\\_type$ are the element count and base data type for elements, as specified in the table above. The
     * number of texels in the texel array is then clamped to the value of the implementation-dependent limit
     * {@see GL31::GL_MAX_TEXTURE_BUFFER_SIZE}. When a buffer texture is accessed in a shader, the results of a texel
     * fetch are undefined if the specified texel coordinate is negative, or greater than or equal to the clamped
     * number of texels in the texel array.
     *
     * @see http://docs.gl/gl4/glTexBuffer
     * @since 3.1
     * @param int $target
     * @param int $internalformat
     * @param int $buffer
     * @return void
     */
    public function texBuffer(int $target, int $internalformat, int $buffer): void
    {
        $__proc = $this->proc('glTexBuffer', 'void (*)(GLenum target, GLenum internalformat, GLuint buffer)');
        $__proc($target, $internalformat, $buffer);
    }

    /**
     * Binding points for active uniform blocks are assigned using {@see GL31::uniformBlockBinding}. Each of a
     * program's active uniform blocks has a corresponding uniform buffer binding point. $program is the name of a
     * program object for which the command {@see GL31::linkProgram} has been issued in the past.
     *
     * If successful, {@see GL31::uniformBlockBinding} specifies that $program will use the data store of the
     * buffer object bound to the binding point $uniformBlockBinding to extract the values of the uniforms in the
     * uniform block identified by $uniformBlockIndex.
     *
     * When a program object is linked or re-linked, the uniform buffer object binding point assigned to each of its
     * active uniform blocks is reset to zero.
     *
     * @see http://docs.gl/gl4/glUniformBlockBinding
     * @since 3.1
     * @param int $program
     * @param int $uniformBlockIndex
     * @param int $uniformBlockBinding
     * @return void
     */
    public function uniformBlockBinding(int $program, int $uniformBlockIndex, int $uniformBlockBinding): void
    {
        $__proc = $this->proc('glUniformBlockBinding', 'void (*)(GLuint program, GLuint uniformBlockIndex, GLuint uniformBlockBinding)');
        $__proc($program, $uniformBlockIndex, $uniformBlockBinding);
    }
}
