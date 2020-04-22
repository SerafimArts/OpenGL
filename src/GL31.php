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

use Serafim\OpenGL\Support\Assert;

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
 */
class GL31 extends GL30
{
    /**
     * @var int
     * @since 3.1
     */
    public const GL_SAMPLER_2D_RECT = 0x8b63;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_SAMPLER_2D_RECT_SHADOW = 0x8b64;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_SAMPLER_BUFFER = 0x8dc2;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_INT_SAMPLER_2D_RECT = 0x8dcd;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_INT_SAMPLER_BUFFER = 0x8dd0;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_UNSIGNED_INT_SAMPLER_2D_RECT = 0x8dd5;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_UNSIGNED_INT_SAMPLER_BUFFER = 0x8dd8;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_TEXTURE_BUFFER = 0x8c2a;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_MAX_TEXTURE_BUFFER_SIZE = 0x8c2b;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_TEXTURE_BINDING_BUFFER = 0x8c2c;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_TEXTURE_BUFFER_DATA_STORE_BINDING = 0x8c2d;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_TEXTURE_RECTANGLE = 0x84f5;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_TEXTURE_BINDING_RECTANGLE = 0x84f6;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_PROXY_TEXTURE_RECTANGLE = 0x84f7;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_MAX_RECTANGLE_TEXTURE_SIZE = 0x84f8;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_R8_SNORM = 0x8f94;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_RG8_SNORM = 0x8f95;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_RGB8_SNORM = 0x8f96;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_RGBA8_SNORM = 0x8f97;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_R16_SNORM = 0x8f98;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_RG16_SNORM = 0x8f99;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_RGB16_SNORM = 0x8f9a;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_RGBA16_SNORM = 0x8f9b;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_SIGNED_NORMALIZED = 0x8f9c;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_PRIMITIVE_RESTART = 0x8f9d;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_PRIMITIVE_RESTART_INDEX = 0x8f9e;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_COPY_READ_BUFFER = 0x8f36;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_COPY_WRITE_BUFFER = 0x8f37;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_UNIFORM_BUFFER = 0x8a11;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_UNIFORM_BUFFER_BINDING = 0x8a28;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_UNIFORM_BUFFER_START = 0x8a29;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_UNIFORM_BUFFER_SIZE = 0x8a2a;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_MAX_VERTEX_UNIFORM_BLOCKS = 0x8a2b;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_MAX_GEOMETRY_UNIFORM_BLOCKS = 0x8a2c;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_MAX_FRAGMENT_UNIFORM_BLOCKS = 0x8a2d;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_MAX_COMBINED_UNIFORM_BLOCKS = 0x8a2e;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_MAX_UNIFORM_BUFFER_BINDINGS = 0x8a2f;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_MAX_UNIFORM_BLOCK_SIZE = 0x8a30;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_MAX_COMBINED_VERTEX_UNIFORM_COMPONENTS = 0x8a31;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_MAX_COMBINED_GEOMETRY_UNIFORM_COMPONENTS = 0x8a32;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_MAX_COMBINED_FRAGMENT_UNIFORM_COMPONENTS = 0x8a33;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_UNIFORM_BUFFER_OFFSET_ALIGNMENT = 0x8a34;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_ACTIVE_UNIFORM_BLOCK_MAX_NAME_LENGTH = 0x8a35;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_ACTIVE_UNIFORM_BLOCKS = 0x8a36;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_UNIFORM_TYPE = 0x8a37;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_UNIFORM_SIZE = 0x8a38;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_UNIFORM_NAME_LENGTH = 0x8a39;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_UNIFORM_BLOCK_INDEX = 0x8a3a;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_UNIFORM_OFFSET = 0x8a3b;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_UNIFORM_ARRAY_STRIDE = 0x8a3c;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_UNIFORM_MATRIX_STRIDE = 0x8a3d;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_UNIFORM_IS_ROW_MAJOR = 0x8a3e;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_UNIFORM_BLOCK_BINDING = 0x8a3f;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_UNIFORM_BLOCK_DATA_SIZE = 0x8a40;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_UNIFORM_BLOCK_NAME_LENGTH = 0x8a41;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_UNIFORM_BLOCK_ACTIVE_UNIFORMS = 0x8a42;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_UNIFORM_BLOCK_ACTIVE_UNIFORM_INDICES = 0x8a43;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_UNIFORM_BLOCK_REFERENCED_BY_VERTEX_SHADER = 0x8a44;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_UNIFORM_BLOCK_REFERENCED_BY_GEOMETRY_SHADER = 0x8a45;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_UNIFORM_BLOCK_REFERENCED_BY_FRAGMENT_SHADER = 0x8a46;
    /**
     * @var int
     * @since 3.1
     */
    public const GL_INVALID_INDEX = 0xffffffff;

    /**
     * {@see GL46::glDrawArraysInstanced} behaves identically to
     * {@see GL46::glDrawArrays} except that $instancecount instances of the
     * range of elements are executed and the value of the internal counter
     * $instanceID advances for each iteration. $instanceID is an internal
     * 32-bit integer counter that may be read by a vertex shader as
     * {@see GL46::gl_InstanceID}.
     *
     * {@see GL46::glDrawArraysInstanced} has the same effect as:
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
     * @param int|\FFI\CData|\FFI\CInt $mode
     * @param int|\FFI\CData|\FFI\CInt $first
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $instancecount
     * @return void
     */
    public function glDrawArraysInstanced($mode, $first, $count, $instancecount): void
    {
        $mode = $mode instanceof \FFI\CData ? $mode->cdata : $mode;
        $first = $first instanceof \FFI\CData ? $first->cdata : $first;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $instancecount = $instancecount instanceof \FFI\CData ? $instancecount->cdata : $instancecount;

        assert(Assert::uint16($mode), 'Argument $mode must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($first), 'Argument $first must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::int16($instancecount), 'Argument $instancecount must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glDrawArraysInstanced', 'void (*)(GLenum mode, GLint first, GLsizei count, GLsizei instancecount)');
        $proc($mode, $first, $count, $instancecount);
    }

    /**
     * {@see GL46::glDrawElementsInstanced} behaves identically to
     * {@see GL46::glDrawElements} except that $instancecount instances of
     * the set of elements are executed and the value of the internal counter
     * $instanceID advances for each iteration. $instanceID is an internal
     * 32-bit integer counter that may be read by a vertex shader as
     * {@see GL46::gl_InstanceID}.
     *
     * {@see GL46::glDrawElementsInstanced} has the same effect as:
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
     * @param int|\FFI\CData|\FFI\CInt $mode
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $type
     * @param \FFI\CData|\FFI\CPtr|null $indices
     * @param int|\FFI\CData|\FFI\CInt $instancecount
     * @return void
     */
    public function glDrawElementsInstanced($mode, $count, $type, ?\FFI\CData $indices, $instancecount): void
    {
        $mode = $mode instanceof \FFI\CData ? $mode->cdata : $mode;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $type = $type instanceof \FFI\CData ? $type->cdata : $type;
        $instancecount = $instancecount instanceof \FFI\CData ? $instancecount->cdata : $instancecount;

        assert(Assert::uint16($mode), 'Argument $mode must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint16($type), 'Argument $type must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($instancecount), 'Argument $instancecount must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glDrawElementsInstanced', 'void (*)(GLenum mode, GLsizei count, GLenum type, const void *indices, GLsizei instancecount)');
        $proc($mode, $count, $type, $indices, $instancecount);
    }

    /**
     * {@see GL46::glTexBuffer} and {@see GL46::glTextureBuffer} attaches the
     * data store of a specified buffer object to a specified texture object,
     * and specify the storage format for the texture image found in the
     * buffer object. The texture object must be a buffer texture.
     *
     * If $buffer is zero, any buffer object attached to the buffer texture
     * is detached and no new buffer object is attached. If $buffer is
     * non-zero, it must be the name of an existing buffer object.
     *
     * $internalformat specifies the storage format, and must be one of the
     * following sized internal formats:
     *
     * $internalformat specifies the storage format, and must be one of the
     * following sized internal formats:
     *
     * | {@see GL46::GL_R8}       | ubyte  | 1 | YES | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R16}      | ushort | 1 | YES | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R16F}     | half   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R32F}     | float  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R8I}      | byte   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R16I}     | short  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R32I}     | int    | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R8UI}     | ubyte  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R16UI}    | ushort | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R32UI}    | uint   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL46::GL_RG8}      | ubyte  | 2 | YES | R | G | 0 | 1 |
     * | {@see GL46::GL_RG16}     | ushort | 2 | YES | R | G | 0 | 1 |
     * | {@see GL46::GL_RG16F}    | half   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL46::GL_RG32F}    | float  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL46::GL_RG8I}     | byte   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL46::GL_RG16I}    | short  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL46::GL_RG32I}    | int    | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL46::GL_RG8UI}    | ubyte  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL46::GL_RG16UI}   | ushort | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL46::GL_RG32UI}   | uint   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL46::GL_RGB32F}   | float  | 3 | NO  | R | G | B | 1 |
     * | {@see GL46::GL_RGB32I}   | int    | 3 | NO  | R | G | B | 1 |
     * | {@see GL46::GL_RGB32UI}  | uint   | 3 | NO  | R | G | B | 1 |
     * | {@see GL46::GL_RGBA8}    | uint   | 4 | YES | R | G | B | A |
     * | {@see GL46::GL_RGBA16}   | short  | 4 | YES | R | G | B | A |
     * | {@see GL46::GL_RGBA16F}  | half   | 4 | NO  | R | G | B | A |
     * | {@see GL46::GL_RGBA32F}  | float  | 4 | NO  | R | G | B | A |
     * | {@see GL46::GL_RGBA8I}   | byte   | 4 | NO  | R | G | B | A |
     * | {@see GL46::GL_RGBA16I}  | short  | 4 | NO  | R | G | B | A |
     * | {@see GL46::GL_RGBA32I}  | int    | 4 | NO  | R | G | B | A |
     * | {@see GL46::GL_RGBA8UI}  | ubyte  | 4 | NO  | R | G | B | A |
     * | {@see GL46::GL_RGBA16UI} | ushort | 4 | NO  | R | G | B | A |
     * | {@see GL46::GL_RGBA32UI} | uint   | 4 | NO  | R | G | B | A |
     *
     * When a buffer object is attached to a buffer texture, the buffer
     * object's data store is taken as the texture's texel array. The number
     * of texels in the buffer texture's texel array is given by $$
     * \\left\\lfloor { size \\over { components \\times sizeof(base\\_type)
     * } } \\right\\rfloor $$ where $size$ is the size of the buffer object
     * in basic machine units (the value of {@see GL46::GL_BUFFER_SIZE} for
     * $buffer), and $components$ and $base\\_type$ are the element count and
     * base data type for elements, as specified in the table above. The
     * number of texels in the texel array is then clamped to the value of
     * the implementation-dependent limit
     * {@see GL46::GL_MAX_TEXTURE_BUFFER_SIZE}. When a buffer texture is
     * accessed in a shader, the results of a texel fetch are undefined if
     * the specified texel coordinate is negative, or greater than or equal
     * to the clamped number of texels in the texel array.
     *
     * @see http://docs.gl/gl4/glTexBuffer
     * @since 3.1
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $internalformat
     * @param int|\FFI\CData|\FFI\CInt $buffer
     * @return void
     */
    public function glTexBuffer($target, $internalformat, $buffer): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $internalformat = $internalformat instanceof \FFI\CData ? $internalformat->cdata : $internalformat;
        $buffer = $buffer instanceof \FFI\CData ? $buffer->cdata : $buffer;

        assert(Assert::uint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($internalformat), 'Argument $internalformat must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($buffer), 'Argument $buffer must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glTexBuffer', 'void (*)(GLenum target, GLenum internalformat, GLuint buffer)');
        $proc($target, $internalformat, $buffer);
    }

    /**
     * {@see GL46::glPrimitiveRestartIndex} specifies a vertex array element
     * that is treated specially when primitive restarting is enabled. This
     * is known as the primitive restart index.
     *
     * When one of the {@see GL46::Draw*} commands transfers a set of generic
     * attribute array elements to the GL, if the index within the vertex
     * arrays corresponding to that set is equal to the primitive restart
     * index, then the GL does not process those elements as a vertex.
     * Instead, it is as if the drawing command ended with the immediately
     * preceding transfer, and another drawing command is immediately started
     * with the same parameters, but only transferring the immediately
     * following element through the end of the originally specified
     * elements.
     *
     * When either {@see GL46::glDrawElementsBaseVertex},
     * {@see GL46::glDrawElementsInstancedBaseVertex} or
     * {@see GL46::glMultiDrawElementsBaseVertex} is used, the primitive
     * restart comparison occurs before the basevertex offset is added to the
     * array index.
     *
     * @see http://docs.gl/gl4/glPrimitiveRestartIndex
     * @since 3.1
     * @param int|\FFI\CData|\FFI\CInt $index
     * @return void
     */
    public function glPrimitiveRestartIndex($index): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Assert::uint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glPrimitiveRestartIndex', 'void (*)(GLuint index)');
        $proc($index);
    }

    /**
     * {@see GL46::glCopyBufferSubData} and
     * {@see GL46::glCopyNamedBufferSubData} copy part of the data store
     * attached to a source buffer object to the data store attached to a
     * destination buffer object. The number of basic machine units indicated
     * by $size is copied from the source at offset $readOffset to the
     * destination at $writeOffset. $readOffset, $writeOffset and $size are
     * in terms of basic machine units.
     *
     * For {@see GL46::glCopyBufferSubData}, $readTarget and $writeTarget
     * specify the targets to which the source and destination buffer objects
     * are bound, and must each be one of the buffer binding targets in the
     * following table:
     *
     * | {@see GL46::GL_ARRAY_BUFFER}              | Vertex attributes                  |
     * | {@see GL46::GL_ATOMIC_COUNTER_BUFFER}     | Atomic counter storage             |
     * | {@see GL46::GL_COPY_READ_BUFFER}          | Buffer copy source                 |
     * | {@see GL46::GL_COPY_WRITE_BUFFER}         | Buffer copy destination            |
     * | {@see GL46::GL_DISPATCH_INDIRECT_BUFFER}  | Indirect compute dispatch commands |
     * | {@see GL46::GL_DRAW_INDIRECT_BUFFER}      | Indirect command arguments         |
     * | {@see GL46::GL_ELEMENT_ARRAY_BUFFER}      | Vertex array indices               |
     * | {@see GL46::GL_PIXEL_PACK_BUFFER}         | Pixel read target                  |
     * | {@see GL46::GL_PIXEL_UNPACK_BUFFER}       | Texture data source                |
     * | {@see GL46::GL_QUERY_BUFFER}              | Query result buffer                |
     * | {@see GL46::GL_SHADER_STORAGE_BUFFER}     | Read-write storage for shaders     |
     * | {@see GL46::GL_TEXTURE_BUFFER}            | Texture data buffer                |
     * | {@see GL46::GL_TRANSFORM_FEEDBACK_BUFFER} | Transform feedback buffer          |
     * | {@see GL46::GL_UNIFORM_BUFFER}            | Uniform block storage              |
     *
     * Any of these targets may be used, but the targets
     * {@see GL46::GL_COPY_READ_BUFFER} and {@see GL46::GL_COPY_WRITE_BUFFER}
     * are provided specifically to allow copies between buffers without
     * disturbing other GL state.
     *
     * $readOffset, $writeOffset and $size must all be greater than or equal
     * to zero. Furthermore, $readOffset+size$ must not exceeed the size of
     * the source buffer object, and $writeOffset+size$ must not exceeed the
     * size of the buffer bound to $writeTarget. If the source and
     * destination are the same buffer object, then the source and
     * destination ranges must not overlap.
     *
     * @see http://docs.gl/gl4/glCopyBufferSubData
     * @since 3.1
     * @param int|\FFI\CData|\FFI\CInt $readTarget
     * @param int|\FFI\CData|\FFI\CInt $writeTarget
     * @param mixed|float|string|int|\FFI\CData|\FFI\CInt $readOffset
     * @param mixed|float|string|int|\FFI\CData|\FFI\CInt $writeOffset
     * @param mixed|float|string|int|\FFI\CData|\FFI\CInt $size
     * @return void
     */
    public function glCopyBufferSubData($readTarget, $writeTarget, $readOffset, $writeOffset, $size): void
    {
        $readTarget = $readTarget instanceof \FFI\CData ? $readTarget->cdata : $readTarget;
        $writeTarget = $writeTarget instanceof \FFI\CData ? $writeTarget->cdata : $writeTarget;

        assert(Assert::uint16($readTarget), 'Argument $readTarget must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($writeTarget), 'Argument $writeTarget must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int64($readOffset), 'Argument $readOffset must be a C-like GLintptr, but incompatible or overflow value given');
        assert(Assert::int64($writeOffset), 'Argument $writeOffset must be a C-like GLintptr, but incompatible or overflow value given');
        assert(Assert::int64($size), 'Argument $size must be a C-like GLsizeiptr, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glCopyBufferSubData', 'void (*)(GLenum readTarget, GLenum writeTarget, GLintptr readOffset, GLintptr writeOffset, GLsizeiptr size)');
        $proc($readTarget, $writeTarget, $readOffset, $writeOffset, $size);
    }

    /**
     * {@see GL46::glGetUniformIndices} retrieves the indices of a number of
     * uniforms within $program.
     *
     * $program must be the name of a program object for which the command
     * {@see GL46::glLinkProgram} must have been called in the past, although
     * it is not required that {@see GL46::glLinkProgram} must have
     * succeeded. The link could have failed because the number of active
     * uniforms exceeded the limit.
     *
     * $uniformCount indicates both the number of elements in the array of
     * names $uniformNames and the number of indices that may be written to
     * $uniformIndices.
     *
     * $uniformNames contains a list of $uniformCount name strings
     * identifying the uniform names to be queried for indices. For each name
     * string in $uniformNames, the index assigned to the active uniform of
     * that name will be written to the corresponding element of
     * $uniformIndices. If a string in $uniformNames is not the name of an
     * active uniform, the special value {@see GL46::GL_INVALID_INDEX} will
     * be written to the corresponding element of $uniformIndices.
     *
     * If an error occurs, nothing is written to $uniformIndices.
     *
     * @see http://docs.gl/gl4/glGetUniformIndices
     * @since 3.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $uniformCount
     * @param \FFI\CData|\FFI\CIntPtrPtr|null $uniformNames
     * @param \FFI\CData|\FFI\CIntPtr|null $uniformIndices
     * @return void
     */
    public function glGetUniformIndices($program, $uniformCount, ?\FFI\CData $uniformNames, ?\FFI\CData $uniformIndices): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $uniformCount = $uniformCount instanceof \FFI\CData ? $uniformCount->cdata : $uniformCount;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($uniformCount), 'Argument $uniformCount must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetUniformIndices', 'void (*)(GLuint program, GLsizei uniformCount, const GLchar *const*uniformNames, GLuint *uniformIndices)');
        $proc($program, $uniformCount, $uniformNames, $uniformIndices);
    }

    /**
     * {@see GL46::glGetActiveUniformsiv} queries the value of the parameter
     * named $pname for each of the uniforms within $program whose indices
     * are specified in the array of $uniformCount unsigned integers
     * $uniformIndices. Upon success, the value of the parameter for each
     * uniform is written into the corresponding entry in the array whose
     * address is given in $params. If an error is generated, nothing is
     * written into $params.
     *
     * If $pname is {@see GL46::GL_UNIFORM_TYPE}, then an array identifying
     * the types of uniforms specified by the corresponding array of
     * $uniformIndices is returned. The returned types can be any of the
     * values from the following table:         Returned Symbolic Contant
     * Shader Uniform Type        {@see GL46::GL_FLOAT}   {@see GL46::float}
     *    {@see GL46::GL_FLOAT_VEC2}   {@see GL46::vec2}
     * {@see GL46::GL_FLOAT_VEC3}   {@see GL46::vec3}
     * {@see GL46::GL_FLOAT_VEC4}   {@see GL46::vec4}
     * {@see GL46::GL_DOUBLE}   {@see GL46::double}
     * {@see GL46::GL_DOUBLE_VEC2}   {@see GL46::dvec2}
     * {@see GL46::GL_DOUBLE_VEC3}   {@see GL46::dvec3}
     * {@see GL46::GL_DOUBLE_VEC4}   {@see GL46::dvec4}
     * {@see GL46::GL_INT}   {@see GL46::int}     {@see GL46::GL_INT_VEC2}
     * {@see GL46::ivec2}     {@see GL46::GL_INT_VEC3}   {@see GL46::ivec3}
     *   {@see GL46::GL_INT_VEC4}   {@see GL46::ivec4}
     * {@see GL46::GL_UNSIGNED_INT}   {@see GL46::unsigned int}
     * {@see GL46::GL_UNSIGNED_INT_VEC2}   {@see GL46::uvec2}
     * {@see GL46::GL_UNSIGNED_INT_VEC3}   {@see GL46::uvec3}
     * {@see GL46::GL_UNSIGNED_INT_VEC4}   {@see GL46::uvec4}
     * {@see GL46::GL_BOOL}   {@see GL46::bool}     {@see GL46::GL_BOOL_VEC2}
     *   {@see GL46::bvec2}     {@see GL46::GL_BOOL_VEC3}
     * {@see GL46::bvec3}     {@see GL46::GL_BOOL_VEC4}   {@see GL46::bvec4}
     *    {@see GL46::GL_FLOAT_MAT2}   {@see GL46::mat2}
     * {@see GL46::GL_FLOAT_MAT3}   {@see GL46::mat3}
     * {@see GL46::GL_FLOAT_MAT4}   {@see GL46::mat4}
     * {@see GL46::GL_FLOAT_MAT2x3}   {@see GL46::mat2x3}
     * {@see GL46::GL_FLOAT_MAT2x4}   {@see GL46::mat2x4}
     * {@see GL46::GL_FLOAT_MAT3x2}   {@see GL46::mat3x2}
     * {@see GL46::GL_FLOAT_MAT3x4}   {@see GL46::mat3x4}
     * {@see GL46::GL_FLOAT_MAT4x2}   {@see GL46::mat4x2}
     * {@see GL46::GL_FLOAT_MAT4x3}   {@see GL46::mat4x3}
     * {@see GL46::GL_DOUBLE_MAT2}   {@see GL46::dmat2}
     * {@see GL46::GL_DOUBLE_MAT3}   {@see GL46::dmat3}
     * {@see GL46::GL_DOUBLE_MAT4}   {@see GL46::dmat4}
     * {@see GL46::GL_DOUBLE_MAT2x3}   {@see GL46::dmat2x3}
     * {@see GL46::GL_DOUBLE_MAT2x4}   {@see GL46::dmat2x4}
     * {@see GL46::GL_DOUBLE_MAT3x2}   {@see GL46::dmat3x2}
     * {@see GL46::GL_DOUBLE_MAT3x4}   {@see GL46::dmat3x4}
     * {@see GL46::GL_DOUBLE_MAT4x2}   {@see GL46::dmat4x2}
     * {@see GL46::GL_DOUBLE_MAT4x3}   {@see GL46::dmat4x3}
     * {@see GL46::GL_SAMPLER_1D}   {@see GL46::sampler1D}
     * {@see GL46::GL_SAMPLER_2D}   {@see GL46::sampler2D}
     * {@see GL46::GL_SAMPLER_3D}   {@see GL46::sampler3D}
     * {@see GL46::GL_SAMPLER_CUBE}   {@see GL46::samplerCube}
     * {@see GL46::GL_SAMPLER_1D_SHADOW}   {@see GL46::sampler1DShadow}
     * {@see GL46::GL_SAMPLER_2D_SHADOW}   {@see GL46::sampler2DShadow}
     * {@see GL46::GL_SAMPLER_1D_ARRAY}   {@see GL46::sampler1DArray}
     * {@see GL46::GL_SAMPLER_2D_ARRAY}   {@see GL46::sampler2DArray}
     * {@see GL46::GL_SAMPLER_1D_ARRAY_SHADOW}
     * {@see GL46::sampler1DArrayShadow}
     * {@see GL46::GL_SAMPLER_2D_ARRAY_SHADOW}
     * {@see GL46::sampler2DArrayShadow}
     * {@see GL46::GL_SAMPLER_2D_MULTISAMPLE}   {@see GL46::sampler2DMS}
     * {@see GL46::GL_SAMPLER_2D_MULTISAMPLE_ARRAY}
     * {@see GL46::sampler2DMSArray}     {@see GL46::GL_SAMPLER_CUBE_SHADOW}
     *  {@see GL46::samplerCubeShadow}     {@see GL46::GL_SAMPLER_BUFFER}
     * {@see GL46::samplerBuffer}     {@see GL46::GL_SAMPLER_2D_RECT}
     * {@see GL46::sampler2DRect}     {@see GL46::GL_SAMPLER_2D_RECT_SHADOW}
     *  {@see GL46::sampler2DRectShadow}     {@see GL46::GL_INT_SAMPLER_1D}
     * {@see GL46::isampler1D}     {@see GL46::GL_INT_SAMPLER_2D}
     * {@see GL46::isampler2D}     {@see GL46::GL_INT_SAMPLER_3D}
     * {@see GL46::isampler3D}     {@see GL46::GL_INT_SAMPLER_CUBE}
     * {@see GL46::isamplerCube}     {@see GL46::GL_INT_SAMPLER_1D_ARRAY}
     * {@see GL46::isampler1DArray}     {@see GL46::GL_INT_SAMPLER_2D_ARRAY}
     *  {@see GL46::isampler2DArray}
     * {@see GL46::GL_INT_SAMPLER_2D_MULTISAMPLE}   {@see GL46::isampler2DMS}
     *     {@see GL46::GL_INT_SAMPLER_2D_MULTISAMPLE_ARRAY}
     * {@see GL46::isampler2DMSArray}     {@see GL46::GL_INT_SAMPLER_BUFFER}
     *  {@see GL46::isamplerBuffer}     {@see GL46::GL_INT_SAMPLER_2D_RECT}
     * {@see GL46::isampler2DRect}
     * {@see GL46::GL_UNSIGNED_INT_SAMPLER_1D}   {@see GL46::usampler1D}
     * {@see GL46::GL_UNSIGNED_INT_SAMPLER_2D}   {@see GL46::usampler2D}
     * {@see GL46::GL_UNSIGNED_INT_SAMPLER_3D}   {@see GL46::usampler3D}
     * {@see GL46::GL_UNSIGNED_INT_SAMPLER_CUBE}   {@see GL46::usamplerCube}
     *    {@see GL46::GL_UNSIGNED_INT_SAMPLER_1D_ARRAY}
     * {@see GL46::usampler2DArray}
     * {@see GL46::GL_UNSIGNED_INT_SAMPLER_2D_ARRAY}
     * {@see GL46::usampler2DArray}
     * {@see GL46::GL_UNSIGNED_INT_SAMPLER_2D_MULTISAMPLE}
     * {@see GL46::usampler2DMS}
     * {@see GL46::GL_UNSIGNED_INT_SAMPLER_2D_MULTISAMPLE_ARRAY}
     * {@see GL46::usampler2DMSArray}
     * {@see GL46::GL_UNSIGNED_INT_SAMPLER_BUFFER}
     * {@see GL46::usamplerBuffer}
     * {@see GL46::GL_UNSIGNED_INT_SAMPLER_2D_RECT}
     * {@see GL46::usampler2DRect}
     *
     * If $pname is {@see GL46::GL_UNIFORM_SIZE}, then an array identifying
     * the size of the uniforms specified by the corresponding array of
     * $uniformIndices is returned. The sizes returned are in units of the
     * type returned by a query of {@see GL46::GL_UNIFORM_TYPE}. For active
     * uniforms that are arrays, the size is the number of active elements in
     * the array; for all other uniforms, the size is one.
     *
     * If $pname is {@see GL46::GL_UNIFORM_NAME_LENGTH}, then an array
     * identifying the length, including the terminating null character, of
     * the uniform name strings specified by the corresponding array of
     * $uniformIndices is returned.
     *
     * If $pname is {@see GL46::GL_UNIFORM_BLOCK_INDEX}, then an array
     * identifying the uniform block index of each of the uniforms specified
     * by the corresponding array of $uniformIndices is returned. The uniform
     * block index of a uniform associated with the default uniform block is
     * -1.
     *
     * If $pname is {@see GL46::GL_UNIFORM_OFFSET}, then an array of uniform
     * buffer offsets is returned. For uniforms in a named uniform block, the
     * returned value will be its offset, in basic machine units, relative to
     * the beginning of the uniform block in the buffer object data store.
     * For atomic counter uniforms, the returned value will be its offset
     * relative to the beginning of its active atomic counter buffer. For all
     * other uniforms, -1 will be returned.
     *
     * If $pname is {@see GL46::GL_UNIFORM_ARRAY_STRIDE}, then an array
     * identifying the stride between elements of each of the uniforms
     * specified by the corresponding array of $uniformIndices is returned.
     * For uniforms in named uniform blocks and for uniforms declared as
     * atomic counters, the stride is the difference, in basic machine units,
     * of consecutive elements in an array, or zero for uniforms not declared
     * as an array. For all other uniforms, a stride of -1 will be returned.
     *
     * If $pname is {@see GL46::GL_UNIFORM_MATRIX_STRIDE}, then an array
     * identifying the stride between columns of a column-major matrix or
     * rows of a row-major matrix, in basic machine units, of each of the
     * uniforms specified by the corresponding array of $uniformIndices is
     * returned. The matrix stride of a uniform associated with the default
     * uniform block is -1. Note that this information only makes sense for
     * uniforms that are matrices. For uniforms that are not matrices, but
     * are declared in a named uniform block, a matrix stride of zero is
     * returned.
     *
     * If $pname is {@see GL46::GL_UNIFORM_IS_ROW_MAJOR}, then an array
     * identifying whether each of the uniforms specified by the
     * corresponding array of $uniformIndices is a row-major matrix or not is
     * returned. A value of one indicates a row-major matrix, and a value of
     * zero indicates a column-major matrix, a matrix in the default uniform
     * block, or a non-matrix.
     *
     * If $pname is {@see GL46::GL_UNIFORM_ATOMIC_COUNTER_BUFFER_INDEX}, then
     * an array identifying the active atomic counter buffer index of each of
     * the uniforms specified by the corresponding array of $uniformIndices
     * is returned. For uniforms other than atomic counters, the returned
     * buffer index is -1. The returned indices may be passed to
     * {@see GL46::glGetActiveAtomicCounterBufferiv} to query the properties
     * of the associated buffer, and not necessarily the binding point
     * specified in the uniform declaration.
     *
     * @see http://docs.gl/gl4/glGetActiveUniformsiv
     * @since 3.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $uniformCount
     * @param \FFI\CData|\FFI\CIntPtr|null $uniformIndices
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public function glGetActiveUniformsiv($program, $uniformCount, ?\FFI\CData $uniformIndices, $pname, ?\FFI\CData $params): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $uniformCount = $uniformCount instanceof \FFI\CData ? $uniformCount->cdata : $uniformCount;
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($uniformCount), 'Argument $uniformCount must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetActiveUniformsiv', 'void (*)(GLuint program, GLsizei uniformCount, const GLuint *uniformIndices, GLenum pname, GLint *params)');
        $proc($program, $uniformCount, $uniformIndices, $pname, $params);
    }

    /**
     * {@see GL46::glGetActiveUniformName} returns the name of the active
     * uniform at $uniformIndex within $program. If $uniformName is not
     * `NULL`, up to $bufSize characters (including a nul-terminator) will be
     * written into the array whose address is specified by $uniformName. If
     * $length is not `NULL`, the number of characters that were (or would
     * have been) written into $uniformName (not including the
     * nul-terminator) will be placed in the variable whose address is
     * specified in $length. If $length is `NULL`, no length is returned. The
     * length of the longest uniform name in $program is given by the value
     * of {@see GL46::GL_ACTIVE_UNIFORM_MAX_LENGTH}, which can be queried
     * with {@see GL46::glGetProgram}.
     *
     * If {@see GL46::glGetActiveUniformName} is not successful, nothing is
     * written to $length or $uniformName.
     *
     * $program must be the name of a program for which the command
     * {@see GL46::glLinkProgram} has been issued in the past. It is not
     * necessary for $program to have been linked successfully. The link
     * could have failed because the number of active uniforms exceeded the
     * limit.
     *
     * $uniformIndex must be an active uniform index of the program $program,
     * in the range zero to the value of {@see GL46::GL_ACTIVE_UNIFORMS}
     * minus one. The value of {@see GL46::GL_ACTIVE_UNIFORMS} can be queried
     * with {@see GL46::glGetProgram}.
     *
     * @see http://docs.gl/gl4/glGetActiveUniformName
     * @since 3.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $uniformIndex
     * @param int|\FFI\CData|\FFI\CInt $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @param \FFI\CData|\FFI\CIntPtr|null $uniformName
     * @return void
     */
    public function glGetActiveUniformName($program, $uniformIndex, $bufSize, ?\FFI\CData $length, ?\FFI\CData $uniformName): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $uniformIndex = $uniformIndex instanceof \FFI\CData ? $uniformIndex->cdata : $uniformIndex;
        $bufSize = $bufSize instanceof \FFI\CData ? $bufSize->cdata : $bufSize;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($uniformIndex), 'Argument $uniformIndex must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($bufSize), 'Argument $bufSize must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetActiveUniformName', 'void (*)(GLuint program, GLuint uniformIndex, GLsizei bufSize, GLsizei *length, GLchar *uniformName)');
        $proc($program, $uniformIndex, $bufSize, $length, $uniformName);
    }

    /**
     * {@see GL46::glGetUniformBlockIndex} retrieves the index of a uniform
     * block within $program.
     *
     * $program must be the name of a program object for which the command
     * {@see GL46::glLinkProgram} must have been called in the past, although
     * it is not required that {@see GL46::glLinkProgram} must have
     * succeeded. The link could have failed because the number of active
     * uniforms exceeded the limit.
     *
     * $uniformBlockName must contain a nul-terminated string specifying the
     * name of the uniform block.
     *
     * {@see GL46::glGetUniformBlockIndex} returns the uniform block index
     * for the uniform block named $uniformBlockName of $program. If
     * $uniformBlockName does not identify an active uniform block of
     * $program, {@see GL46::glGetUniformBlockIndex} returns the special
     * identifier, {@see GL46::GL_INVALID_INDEX}. Indices of the active
     * uniform blocks of a program are assigned in consecutive order,
     * beginning with zero.
     *
     * @see http://docs.gl/gl4/glGetUniformBlockIndex
     * @since 3.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param \FFI\CData|\FFI\CIntPtr|null $uniformBlockName
     * @return int|\FFI\CData|\FFI\CInt
     */
    public function glGetUniformBlockIndex($program, ?\FFI\CData $uniformBlockName): int
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetUniformBlockIndex', 'GLuint (*)(GLuint program, const GLchar *uniformBlockName)');
        return $proc($program, $uniformBlockName);
    }

    /**
     * {@see GL46::glGetActiveUniformBlockiv} retrieves information about an
     * active uniform block within $program.
     *
     * $program must be the name of a program object for which the command
     * {@see GL46::glLinkProgram} must have been called in the past, although
     * it is not required that {@see GL46::glLinkProgram} must have
     * succeeded. The link could have failed because the number of active
     * uniforms exceeded the limit.
     *
     * $uniformBlockIndex is an active uniform block index of $program, and
     * must be less than the value of {@see GL46::GL_ACTIVE_UNIFORM_BLOCKS}.
     *
     * Upon success, the uniform block parameter(s) specified by $pname are
     * returned in $params. If an error occurs, nothing will be written to
     * $params.
     *
     * If $pname is {@see GL46::GL_UNIFORM_BLOCK_BINDING}, then the index of
     * the uniform buffer binding point last selected by the uniform block
     * specified by $uniformBlockIndex for $program is returned. If no
     * uniform block has been previously specified, zero is returned.
     *
     * If $pname is {@see GL46::GL_UNIFORM_BLOCK_DATA_SIZE}, then the
     * implementation-dependent minimum total buffer object size, in basic
     * machine units, required to hold all active uniforms in the uniform
     * block identified by $uniformBlockIndex is returned. It is neither
     * guaranteed nor expected that a given implementation will arrange
     * uniform values as tightly packed in a buffer object. The exception to
     * this is the std140 uniform block layout, which guarantees specific
     * packing behavior and does not require the application to query for
     * offsets and strides. In this case the minimum size may still be
     * queried, even though it is determined in advance based only on the
     * uniform block declaration.
     *
     * If $pname is {@see GL46::GL_UNIFORM_BLOCK_NAME_LENGTH}, then the total
     * length (including the nul terminator) of the name of the uniform block
     * identified by $uniformBlockIndex is returned.
     *
     * If $pname is {@see GL46::GL_UNIFORM_BLOCK_ACTIVE_UNIFORMS}, then the
     * number of active uniforms in the uniform block identified by
     * $uniformBlockIndex is returned.
     *
     * If $pname is {@see GL46::GL_UNIFORM_BLOCK_ACTIVE_UNIFORM_INDICES},
     * then a list of the active uniform indices for the uniform block
     * identified by $uniformBlockIndex is returned. The number of elements
     * that will be written to $params is the value of
     * {@see GL46::GL_UNIFORM_BLOCK_ACTIVE_UNIFORMS} for $uniformBlockIndex.
     *
     * If $pname is
     * {@see GL46::GL_UNIFORM_BLOCK_REFERENCED_BY_VERTEX_SHADER},
     * {@see GL46::GL_UNIFORM_BLOCK_REFERENCED_BY_TESS_CONTROL_SHADER},
     * {@see GL46::GL_UNIFORM_BLOCK_REFERENCED_BY_TESS_EVALUATION_SHADER},
     * {@see GL46::GL_UNIFORM_BLOCK_REFERENCED_BY_GEOMETRY_SHADER},
     * {@see GL46::GL_UNIFORM_BLOCK_REFERENCED_BY_FRAGMENT_SHADER}, or
     * {@see GL46::GL_UNIFORM_BLOCK_REFERENCED_BY_COMPUTE_SHADER} then a
     * boolean value indicating whether the uniform block identified by
     * $uniformBlockIndex is referenced by the vertex, tessellation control,
     * tessellation evaluation, geometry, fragment or compute programming
     * stages of program, respectively, is returned.
     *
     * @see http://docs.gl/gl4/glGetActiveUniformBlock
     * @since 3.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $uniformBlockIndex
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public function glGetActiveUniformBlockiv($program, $uniformBlockIndex, $pname, ?\FFI\CData $params): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $uniformBlockIndex = $uniformBlockIndex instanceof \FFI\CData ? $uniformBlockIndex->cdata : $uniformBlockIndex;
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($uniformBlockIndex), 'Argument $uniformBlockIndex must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetActiveUniformBlockiv', 'void (*)(GLuint program, GLuint uniformBlockIndex, GLenum pname, GLint *params)');
        $proc($program, $uniformBlockIndex, $pname, $params);
    }

    /**
     * {@see GL46::glGetActiveUniformBlockName} retrieves the name of the
     * active uniform block at $uniformBlockIndex within $program.
     *
     * $program must be the name of a program object for which the command
     * {@see GL46::glLinkProgram} must have been called in the past, although
     * it is not required that {@see GL46::glLinkProgram} must have
     * succeeded. The link could have failed because the number of active
     * uniforms exceeded the limit.
     *
     * $uniformBlockIndex is an active uniform block index of $program, and
     * must be less than the value of {@see GL46::GL_ACTIVE_UNIFORM_BLOCKS}.
     *
     * Upon success, the name of the uniform block identified by
     * $unifomBlockIndex is returned into $uniformBlockName. The name is
     * nul-terminated. The actual number of characters written into
     * $uniformBlockName, excluding the nul terminator, is returned in
     * $length. If $length is `NULL`, no length is returned.
     *
     * $bufSize contains the maximum number of characters (including the nul
     * terminator) that will be written into $uniformBlockName.
     *
     * If an error occurs, nothing will be written to $uniformBlockName or
     * $length.
     *
     * @see http://docs.gl/gl4/glGetActiveUniformBlockName
     * @since 3.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $uniformBlockIndex
     * @param int|\FFI\CData|\FFI\CInt $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @param \FFI\CData|\FFI\CIntPtr|null $uniformBlockName
     * @return void
     */
    public function glGetActiveUniformBlockName($program, $uniformBlockIndex, $bufSize, ?\FFI\CData $length, ?\FFI\CData $uniformBlockName): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $uniformBlockIndex = $uniformBlockIndex instanceof \FFI\CData ? $uniformBlockIndex->cdata : $uniformBlockIndex;
        $bufSize = $bufSize instanceof \FFI\CData ? $bufSize->cdata : $bufSize;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($uniformBlockIndex), 'Argument $uniformBlockIndex must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($bufSize), 'Argument $bufSize must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetActiveUniformBlockName', 'void (*)(GLuint program, GLuint uniformBlockIndex, GLsizei bufSize, GLsizei *length, GLchar *uniformBlockName)');
        $proc($program, $uniformBlockIndex, $bufSize, $length, $uniformBlockName);
    }

    /**
     * Binding points for active uniform blocks are assigned using
     * {@see GL46::glUniformBlockBinding}. Each of a program's active uniform
     * blocks has a corresponding uniform buffer binding point. $program is
     * the name of a program object for which the command
     * {@see GL46::glLinkProgram} has been issued in the past.
     *
     * If successful, {@see GL46::glUniformBlockBinding} specifies that
     * $program will use the data store of the buffer object bound to the
     * binding point $uniformBlockBinding to extract the values of the
     * uniforms in the uniform block identified by $uniformBlockIndex.
     *
     * When a program object is linked or re-linked, the uniform buffer
     * object binding point assigned to each of its active uniform blocks is
     * reset to zero.
     *
     * @see http://docs.gl/gl4/glUniformBlockBinding
     * @since 3.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $uniformBlockIndex
     * @param int|\FFI\CData|\FFI\CInt $uniformBlockBinding
     * @return void
     */
    public function glUniformBlockBinding($program, $uniformBlockIndex, $uniformBlockBinding): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $uniformBlockIndex = $uniformBlockIndex instanceof \FFI\CData ? $uniformBlockIndex->cdata : $uniformBlockIndex;
        $uniformBlockBinding = $uniformBlockBinding instanceof \FFI\CData ? $uniformBlockBinding->cdata : $uniformBlockBinding;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($uniformBlockIndex), 'Argument $uniformBlockIndex must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($uniformBlockBinding), 'Argument $uniformBlockBinding must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniformBlockBinding', 'void (*)(GLuint program, GLuint uniformBlockIndex, GLuint uniformBlockBinding)');
        $proc($program, $uniformBlockIndex, $uniformBlockBinding);
    }
}
