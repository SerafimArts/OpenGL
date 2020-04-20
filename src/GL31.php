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
     * Behaves identically to {@see glDrawArrays} except that *`primcount`* instances of the range of
     * elements are executed and the value of the internal counter *`instanceID`* advances for each iteration.
     * *`instanceID`* is an internal 32-bit integer counter that may be read by a vertex shader as `gl_InstanceID`.
     *
     *  - `glDrawArraysInstanced` has the same effect as:
     *
     *  - ```
     * if ( mode or count is invalid )
     * generate appropriate error
     * else {
     * for (int i = 0; i < primcount ; i++) {
     * instanceID = i;
     * glDrawArrays(mode, first, count);
     * }
     * instanceID = 0;
     * }
     *  - ```
     *
     * @see http://docs.gl/gl3/glDrawArraysInstanced
     * @see http://docs.gl/gl4/glDrawArraysInstanced
     * @since 3.1
     * @param int $mode
     * @param int $first
     * @param int $count
     * @param int $instancecount
     * @return void
     */
    public static function glDrawArraysInstanced(int $mode, int $first, int $count, int $instancecount): void
    {
        assert(version_compare(self::$info->version, '3.1') >= 0, __FUNCTION__ . ' is available since OpenGL 3.1, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');
        assert($first >= \PHP_INT_MIN && $first <= \PHP_INT_MAX, 'Argument $first overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($instancecount >= \PHP_INT_MIN && $instancecount <= \PHP_INT_MAX, 'Argument $instancecount overflow: C type GLsizei is required');

        $proc = self::getProc('glDrawArraysInstanced', 'void (*)(GLenum mode, GLint first, GLsizei count, GLsizei instancecount)');
        $proc($mode, $first, $count, $instancecount);
    }

    /**
     * Behaves identically to {@see glDrawElements} except that *`primcount`* instances of the set of
     * elements are executed and the value of the internal counter *`instanceID`* advances for each iteration.
     * *`instanceID`* is an internal 32-bit integer counter that may be read by a vertex shader as `gl_InstanceID`.
     *
     *  - `glDrawElementsInstanced` has the same effect as:
     *
     *  - ```
     * if (mode, count, or type is invalid )
     * generate appropriate error
     * else {
     * for (int i = 0; i < primcount ; i++) {
     * instanceID = i;
     * glDrawElements(mode, count, type, indices);
     * }
     * instanceID = 0;
     * }
     *  - ```
     *
     * @see http://docs.gl/gl3/glDrawElementsInstanced
     * @see http://docs.gl/gl4/glDrawElementsInstanced
     * @since 3.1
     * @param int $mode
     * @param int $count
     * @param int $type
     * @param \FFI\CData|\FFI\CPtr|null $indices
     * @param int $instancecount
     * @return void
     */
    public static function glDrawElementsInstanced(int $mode, int $count, int $type, ?\FFI\CData $indices, int $instancecount): void
    {
        assert(version_compare(self::$info->version, '3.1') >= 0, __FUNCTION__ . ' is available since OpenGL 3.1, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');
        assert($instancecount >= \PHP_INT_MIN && $instancecount <= \PHP_INT_MAX, 'Argument $instancecount overflow: C type GLsizei is required');

        $proc = self::getProc('glDrawElementsInstanced', 'void (*)(GLenum mode, GLsizei count, GLenum type, const void *indices, GLsizei instancecount)');
        $proc($mode, $count, $type, $indices, $instancecount);
    }

    /**
     * Attaches the storage for the buffer object named *`buffer`* to the active buffer texture, and specifies the
     * internal format for the texel array found in the attached buffer object. If *`buffer`* is zero, any buffer
     * object attached to the buffer texture is detached and no new buffer object is attached. If *`buffer`* is
     * non-zero, it must be the name of an existing buffer object. *`target`* must be `GL_TEXTURE_BUFFER`.
     * *`internalformat`* specifies the storage format, and must be one of the following sized internal formats:
     *
     * **Sized Internal Format****Base Type****Components****Norm** **Component**
     * 0123`GL_R8`ubyte1YESR001`GL_R16`ushort1YESR001`GL_R16F`half1NOR001`GL_R32F`float1NOR001`GL_R8I`byte1NOR001`GL_R16I`short1NOR001`GL_R32I`int1NOR001`GL_R8UI`ubyte1NOR001`GL_R16UI`ushort1NOR001`GL_R32UI`uint1NOR001`GL_RG8`ubyte2YESRG01`GL_RG16`ushort2YESRG01`GL_RG16F`half2NORG01`GL_RG32F`float2NORG01`GL_RG8I`byte2NORG01`GL_RG16I`short2NORG01`GL_RG32I`int2NORG01`GL_RG8UI`ubyte2NORG01`GL_RG16UI`ushort2NORG01`GL_RG32UI`uint2NORG01`GL_RGBA8`uint4YESRGBA`GL_RGBA16`short4YESRGBA`GL_RGBA16F`half4NORGBA`GL_RGBA32F`float4NORGBA`GL_RGBA8I`byte4NORGBA`GL_RGBA16I`short4NORGBA`GL_RGBA32I`int4NORGBA`GL_RGBA8UI`ubyte4NORGBA`GL_RGBA16UI`ushort4NORGBA`GL_RGBA32UI`uint4NORGBA
     *
     * When a buffer object is attached to a buffer texture, the buffer object's data store is taken as the texture's
     * texel array. The number of texels in the buffer texture's texel array is given by
     *
     * ⌊ buffer_size components×sizeof(base_type) ⌋ where *buffer_size* is the size of the buffer object, in
     * basic machine units and components and base type are the element count and base data type for elements, as
     * specified in the table above. The number of texels in the texel array is then clamped to the
     * implementation-dependent limit `GL_MAX_TEXTURE_BUFFER_SIZE`. When a buffer texture is accessed in a shader,
     * the results of a texel fetch are undefined if the specified texel coordinate is negative, or greater than or
     * equal to the clamped number of texels in the texel array.
     *
     * @see http://docs.gl/gl3/glTexBuffer
     * @see http://docs.gl/gl4/glTexBuffer
     * @since 3.1
     * @param int $target
     * @param int $internalformat
     * @param int $buffer
     * @return void
     */
    public static function glTexBuffer(int $target, int $internalformat, int $buffer): void
    {
        assert(version_compare(self::$info->version, '3.1') >= 0, __FUNCTION__ . ' is available since OpenGL 3.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($internalformat >= 0 && $internalformat <= 4_294_967_295, 'Argument $internalformat overflow: C type GLenum is required');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLuint is required');

        $proc = self::getProc('glTexBuffer', 'void (*)(GLenum target, GLenum internalformat, GLuint buffer)');
        $proc($target, $internalformat, $buffer);
    }

    /**
     * Specifies a vertex array element that is treated specially when primitive restarting is enabled. This is known
     * as the primitive restart index.
     *
     * When one of the `Draw*` commands transfers a set of generic attribute array elements to the GL, if the index
     * within the vertex arrays corresponding to that set is equal to the primitive restart index, then the GL does
     * not process those elements as a vertex. Instead, it is as if the drawing command ended with the immediately
     * preceding transfer, and another drawing command is immediately started with the same parameters, but only
     * transferring the immediately following element through the end of the originally specified elements.
     *
     * When either {@see glDrawElementsBaseVertex},
     * {@see glDrawElementsInstancedBaseVertex} or
     * {@see glMultiDrawElementsBaseVertex} is used, the primitive restart comparison
     * occurs before the basevertex offset is added to the array index.
     *
     * @see http://docs.gl/gl3/glPrimitiveRestartIndex
     * @see http://docs.gl/gl4/glPrimitiveRestartIndex
     * @since 3.1
     * @param int $index
     * @return void
     */
    public static function glPrimitiveRestartIndex(int $index): void
    {
        assert(version_compare(self::$info->version, '3.1') >= 0, __FUNCTION__ . ' is available since OpenGL 3.1, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glPrimitiveRestartIndex', 'void (*)(GLuint index)');
        $proc($index);
    }

    /**
     * Copies part of the data store attached to *`readtarget`* to the data store attached to *`writetarget`*. The
     * number of basic machine units indicated by *`size`* is copied from the source, at offset *`readoffset`* to the
     * destination at *`writeoffset`*, also in basic machine units.
     *
     * *`readtarget`* and *`writetarget`* must be `GL_ARRAY_BUFFER`, `GL_COPY_READ_BUFFER`, `GL_COPY_WRITE_BUFFER`,
     * `GL_ELEMENT_ARRAY_BUFFER`, `GL_PIXEL_PACK_BUFFER`, `GL_PIXEL_UNPACK_BUFFER`, `GL_TEXTURE_BUFFER`,
     * `GL_TRANSFORM_FEEDBACK_BUFFER` or `GL_UNIFORM_BUFFER`. Any of these targets may be used, although the targets
     * `GL_COPY_READ_BUFFER` and `GL_COPY_WRITE_BUFFER` are provided specifically to allow copies between buffers
     * without disturbing other GL state.
     *
     * *`readoffset`*, *`writeoffset`* and *`size`* must all be greater than or equal to zero. Furthermore,
     * *`readoffset`* + *`size`* must not exceeed the size of the buffer object bound to *`readtarget`*, and
     * *`readoffset`* + *`size`* must not exceeed the size of the buffer bound to *`writetarget`*. If the same buffer
     * object is bound to both *`readtarget`* and *`writetarget`*, then the ranges specified by *`readoffset`*,
     * *`writeoffset`* and *`size`* must not overlap.
     *
     * @see http://docs.gl/gl3/glCopyBufferSubData
     * @see http://docs.gl/gl4/glCopyBufferSubData
     * @since 3.1
     * @param int $readTarget
     * @param int $writeTarget
     * @param int $readOffset
     * @param int $writeOffset
     * @param int $size
     * @return void
     */
    public static function glCopyBufferSubData(int $readTarget, int $writeTarget, int $readOffset, int $writeOffset, int $size): void
    {
        assert(version_compare(self::$info->version, '3.1') >= 0, __FUNCTION__ . ' is available since OpenGL 3.1, but only OpenGL '. self::$info->version . ' is available');
        assert($readTarget >= 0 && $readTarget <= 4_294_967_295, 'Argument $readTarget overflow: C type GLenum is required');
        assert($writeTarget >= 0 && $writeTarget <= 4_294_967_295, 'Argument $writeTarget overflow: C type GLenum is required');
        assert($readOffset >= 0 && $readOffset <= \PHP_INT_MAX, 'Argument $readOffset overflow: C type GLintptr is required');
        assert($writeOffset >= 0 && $writeOffset <= \PHP_INT_MAX, 'Argument $writeOffset overflow: C type GLintptr is required');
        assert($size >= 0 && $size <= \PHP_INT_MAX, 'Argument $size overflow: C type GLsizeiptr is required');

        $proc = self::getProc('glCopyBufferSubData', 'void (*)(GLenum readTarget, GLenum writeTarget, GLintptr readOffset, GLintptr writeOffset, GLsizeiptr size)');
        $proc($readTarget, $writeTarget, $readOffset, $writeOffset, $size);
    }

    /**
     * Retrieves the indices of a number of uniforms within *`program`*.
     *
     * *`program`* must be the name of a program object for which the command {@see glLinkProgram} must
     * have been called in the past, although it is not required that {@see glLinkProgram} must have
     * succeeded. The link could have failed because the number of active uniforms exceeded the limit.
     *
     * *`uniformCount`* indicates both the number of elements in the array of names *`uniformNames`* and the number
     * of indices that may be written to *`uniformIndices`*.
     *
     * *`uniformNames`* contains a list of *`uniformCount`* name strings identifying the uniform names to be queried
     * for indices. For each name string in *`uniformNames`*, the index assigned to the active uniform of that name
     * will be written to the corresponding element of *`uniformIndices`*. If a string in *`uniformNames`* is not the
     * name of an active uniform, the special value `GL_INVALID_INDEX` will be written to the corresponding element
     * of *`uniformIndices`*.
     *
     * If an error occurs, nothing is written to *`uniformIndices`*.
     *
     * @see http://docs.gl/gl3/glGetUniformIndices
     * @see http://docs.gl/gl4/glGetUniformIndices
     * @since 3.1
     * @param int $program
     * @param int $uniformCount
     * @param \FFI\CData|\FFI\CIntPtrPtr|null $uniformNames
     * @param \FFI\CData|\FFI\CIntPtr|null $uniformIndices
     * @return void
     */
    public static function glGetUniformIndices(int $program, int $uniformCount, ?\FFI\CData $uniformNames, ?\FFI\CData $uniformIndices): void
    {
        assert(version_compare(self::$info->version, '3.1') >= 0, __FUNCTION__ . ' is available since OpenGL 3.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($uniformCount >= \PHP_INT_MIN && $uniformCount <= \PHP_INT_MAX, 'Argument $uniformCount overflow: C type GLsizei is required');

        $proc = self::getProc('glGetUniformIndices', 'void (*)(GLuint program, GLsizei uniformCount, const GLchar *const*uniformNames, GLuint *uniformIndices)');
        $proc($program, $uniformCount, $uniformNames, $uniformIndices);
    }

    /**
     * Queries the value of the parameter named *`pname`* for each of the uniforms within *`program`* whose indices
     * are specified in the array of *`uniformCount`* unsigned integers *`uniformIndices`*. Upon success, the value
     * of the parameter for each uniform is written into the corresponding entry in the array whose address is given
     * in *`params`*. If an error is generated, nothing is written into *`params`*.
     *
     * If *`pname`* is `GL_UNIFORM_TYPE`, then an array identifying the types of uniforms specified by the
     * corresponding array of *`uniformIndices`* is returned. The returned types can be any of the values from the
     * following table:
     *
     * **Returned Symbolic Contant** **Shader Uniform Type** `GL_FLOAT` `float` `GL_FLOAT_VEC2` `vec2`
     * `GL_FLOAT_VEC3` `vec3` `GL_FLOAT_VEC4` `vec4` `GL_INT` `int` `GL_INT_VEC2` `ivec2` `GL_INT_VEC3` `ivec3`
     * `GL_INT_VEC4` `ivec4` `GL_UNSIGNED_INT` `unsigned int` `GL_UNSIGNED_INT_VEC2` `uvec2` `GL_UNSIGNED_INT_VEC3`
     * `uvec3` `GL_UNSIGNED_INT_VEC4` `uvec4` `GL_BOOL` `bool` `GL_BOOL_VEC2` `bvec2` `GL_BOOL_VEC3` `bvec3`
     * `GL_BOOL_VEC4` `bvec4` `GL_FLOAT_MAT2` `mat2` `GL_FLOAT_MAT3` `mat3` `GL_FLOAT_MAT4` `mat4` `GL_FLOAT_MAT2x3`
     * `mat2x3` `GL_FLOAT_MAT2x4` `mat2x4` `GL_FLOAT_MAT3x2` `mat3x2` `GL_FLOAT_MAT3x4` `mat3x4` `GL_FLOAT_MAT4x2`
     * `mat4x2` `GL_FLOAT_MAT4x3` `mat4x3` `GL_SAMPLER_1D` `sampler1D` `GL_SAMPLER_2D` `sampler2D` `GL_SAMPLER_3D`
     * `sampler3D` `GL_SAMPLER_CUBE` `samplerCube` `GL_SAMPLER_1D_SHADOW` `sampler1DShadow` `GL_SAMPLER_2D_SHADOW`
     * `sampler2DShadow` `GL_SAMPLER_1D_ARRAY` `sampler1DArray` `GL_SAMPLER_2D_ARRAY` `sampler2DArray`
     * `GL_SAMPLER_1D_ARRAY_SHADOW` `sampler1DArrayShadow` `GL_SAMPLER_2D_ARRAY_SHADOW` `sampler2DArrayShadow`
     * `GL_SAMPLER_2D_MULTISAMPLE` `sampler2DMS` `GL_SAMPLER_2D_MULTISAMPLE_ARRAY` `sampler2DMSArray`
     * `GL_SAMPLER_CUBE_SHADOW` `samplerCubeShadow` `GL_SAMPLER_BUFFER` `samplerBuffer` `GL_SAMPLER_2D_RECT`
     * `sampler2DRect` `GL_SAMPLER_2D_RECT_SHADOW` `sampler2DRectShadow` `GL_INT_SAMPLER_1D` `isampler1D`
     * `GL_INT_SAMPLER_2D` `isampler2D` `GL_INT_SAMPLER_3D` `isampler3D` `GL_INT_SAMPLER_CUBE` `isamplerCube`
     * `GL_INT_SAMPLER_1D_ARRAY` `isampler1DArray` `GL_INT_SAMPLER_2D_ARRAY` `isampler2DArray`
     * `GL_INT_SAMPLER_2D_MULTISAMPLE` `isampler2DMS` `GL_INT_SAMPLER_2D_MULTISAMPLE_ARRAY` `isampler2DMSArray`
     * `GL_INT_SAMPLER_BUFFER` `isamplerBuffer` `GL_INT_SAMPLER_2D_RECT` `isampler2DRect`
     * `GL_UNSIGNED_INT_SAMPLER_1D` `usampler1D` `GL_UNSIGNED_INT_SAMPLER_2D` `usampler2D`
     * `GL_UNSIGNED_INT_SAMPLER_3D` `usampler3D` `GL_UNSIGNED_INT_SAMPLER_CUBE` `usamplerCube`
     * `GL_UNSIGNED_INT_SAMPLER_1D_ARRAY` `usampler2DArray` `GL_UNSIGNED_INT_SAMPLER_2D_ARRAY` `usampler2DArray`
     * `GL_UNSIGNED_INT_SAMPLER_2D_MULTISAMPLE` `usampler2DMS` `GL_UNSIGNED_INT_SAMPLER_2D_MULTISAMPLE_ARRAY`
     * `usampler2DMSArray` `GL_UNSIGNED_INT_SAMPLER_BUFFER` `usamplerBuffer` `GL_UNSIGNED_INT_SAMPLER_2D_RECT`
     * `usampler2DRect`
     *
     * If *`pname`* is `GL_UNIFORM_SIZE`, then an array identifying the size of the uniforms specified by the
     * corresponding array of *`uniformIndices`* is returned. The sizes returned are in units of the type returned by
     * a query of `GL_UNIFORM_TYPE`. For active uniforms that are arrays, the size is the number of active elements
     * in the array; for all other uniforms, the size is one.
     *
     * If *`pname`* is `GL_UNIFORM_NAME_LENGTH`, then an array identifying the length, including the terminating null
     * character, of the uniform name strings specified by the corresponding array of *`uniformIndices`* is returned.
     *
     * If *`pname`* is `GL_UNIFORM_BLOCK_INDEX`, then an array identifying the the uniform block index of each of the
     * uniforms specified by the corresponding array of *`uniformIndices`* is returned. The uniform block index of a
     * uniform associated with the default uniform block is -1.
     *
     * If *`pname`* is `GL_UNIFORM_OFFSET`, then an array of uniform buffer offsets is returned. For uniforms in a
     * named uniform block, the returned value will be its offset, in basic machine units, relative to the beginning
     * of the uniform block in the buffer object data store. For uniforms in the default uniform block, -1 will be
     * returned.
     *
     * If *`pname`* is `GL_UNIFORM_ARRAY_STRIDE`, then an array identifying the stride between elements, in basic
     * machine units, of each of the uniforms specified by the corresponding array of *`uniformIndices`* is returned.
     * The stride of a uniform associated with the default uniform block is -1. Note that this information only makes
     * sense for uniforms that are arrays. For uniforms that are not arrays, but are declared in a named uniform
     * block, an array stride of zero is returned.
     *
     * If *`pname`* is `GL_UNIFORM_MATRIX_STRIDE`, then an array identifying the stride between columns of a
     * column-major matrix or rows of a row-major matrix, in basic machine units, of each of the uniforms specified
     * by the corresponding array of *`uniformIndices`* is returned. The matrix stride of a uniform associated with
     * the default uniform block is -1. Note that this information only makes sense for uniforms that are matrices.
     * For uniforms that are not matrices, but are declared in a named uniform block, a matrix stride of zero is
     * returned.
     *
     * If *`pname`* is `GL_UNIFORM_IS_ROW_MAJOR`, then an array identifying whether each of the uniforms specified by
     * the corresponding array of *`uniformIndices`* is a row-major matrix or not is returned. A value of one
     * indicates a row-major matrix, and a value of zero indicates a column-major matrix, a matrix in the default
     * uniform block, or a non-matrix.
     *
     * @see http://docs.gl/gl3/glGetActiveUniformsiv
     * @see http://docs.gl/gl4/glGetActiveUniformsiv
     * @since 3.1
     * @param int $program
     * @param int $uniformCount
     * @param \FFI\CData|\FFI\CIntPtr|null $uniformIndices
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetActiveUniformsiv(int $program, int $uniformCount, ?\FFI\CData $uniformIndices, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '3.1') >= 0, __FUNCTION__ . ' is available since OpenGL 3.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($uniformCount >= \PHP_INT_MIN && $uniformCount <= \PHP_INT_MAX, 'Argument $uniformCount overflow: C type GLsizei is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetActiveUniformsiv', 'void (*)(GLuint program, GLsizei uniformCount, const GLuint *uniformIndices, GLenum pname, GLint *params)');
        $proc($program, $uniformCount, $uniformIndices, $pname, $params);
    }

    /**
     * Returns the name of the active uniform at *`uniformIndex`* within *`program`*. If *`uniformName`* is not
     * `NULL`, up to *`bufSize`* characters (including a nul-terminator) will be written into the array whose address
     * is specified by *`uniformName`*. If *`length`* is not `NULL`, the number of characters that were (or would
     * have been) written into *`uniformName`* (not including the nul-terminator) will be placed in the variable
     * whose address is specified in *`length`*. If *`length`* is `NULL`, no length is returned. The length of the
     * longest uniform name in *`program`* is given by the value of `GL_ACTIVE_UNIFORM_MAX_LENGTH`, which can be
     * queried with {@see glGetProgram}.
     *
     * If `glGetActiveUniformName` is not successful, nothing is written to *`length`* or *`uniformName`*.
     *
     * *`program`* must be the name of a program for which the command {@see glLinkProgram} has been issued
     * in the past. It is not necessary for *`program`* to have been linked successfully. The link could have failed
     * because the number of active uniforms exceeded the limit.
     *
     * *`uniformIndex`* must be an active uniform index of the program *`program`*, in the range zero to
     * `GL_ACTIVE_UNIFORMS` - 1. The value of `GL_ACTIVE_UNIFORMS` can be queried with {@see glGetProgram}.
     *
     * @see http://docs.gl/gl3/glGetActiveUniformName
     * @see http://docs.gl/gl4/glGetActiveUniformName
     * @since 3.1
     * @param int $program
     * @param int $uniformIndex
     * @param int $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @param \FFI\CData|\FFI\CIntPtr|null $uniformName
     * @return void
     */
    public static function glGetActiveUniformName(int $program, int $uniformIndex, int $bufSize, ?\FFI\CData $length, ?\FFI\CData $uniformName): void
    {
        assert(version_compare(self::$info->version, '3.1') >= 0, __FUNCTION__ . ' is available since OpenGL 3.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($uniformIndex >= 0 && $uniformIndex <= 4_294_967_295, 'Argument $uniformIndex overflow: C type GLuint is required');
        assert($bufSize >= \PHP_INT_MIN && $bufSize <= \PHP_INT_MAX, 'Argument $bufSize overflow: C type GLsizei is required');

        $proc = self::getProc('glGetActiveUniformName', 'void (*)(GLuint program, GLuint uniformIndex, GLsizei bufSize, GLsizei *length, GLchar *uniformName)');
        $proc($program, $uniformIndex, $bufSize, $length, $uniformName);
    }

    /**
     * Retrieves the index of a uniform block within *`program`*.
     *
     * *`program`* must be the name of a program object for which the command {@see glLinkProgram} must
     * have been called in the past, although it is not required that {@see glLinkProgram} must have
     * succeeded. The link could have failed because the number of active uniforms exceeded the limit.
     *
     * *`uniformBlockName`* must contain a nul-terminated string specifying the name of the uniform block.
     *
     *  - `glGetUniformBlockIndex` returns the uniform block index for the uniform block named *`uniformBlockName`*
     * of *`program`*. If *`uniformBlockName`* does not identify an active uniform block of *`program`*,
     * `glGetUniformBlockIndex` returns the special identifier, `GL_INVALID_INDEX`. Indices of the active uniform
     * blocks of a program are assigned in consecutive order, beginning with zero.
     *
     * @see http://docs.gl/gl3/glGetUniformBlockIndex
     * @see http://docs.gl/gl4/glGetUniformBlockIndex
     * @since 3.1
     * @param int $program
     * @param \FFI\CData|\FFI\CIntPtr|null $uniformBlockName
     * @return int
     */
    public static function glGetUniformBlockIndex(int $program, ?\FFI\CData $uniformBlockName): int
    {
        assert(version_compare(self::$info->version, '3.1') >= 0, __FUNCTION__ . ' is available since OpenGL 3.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');

        $proc = self::getProc('glGetUniformBlockIndex', 'GLuint (*)(GLuint program, const GLchar *uniformBlockName)');
        return $proc($program, $uniformBlockName);
    }

    /**
     * @since 3.1
     * @param int $program
     * @param int $uniformBlockIndex
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetActiveUniformBlockiv(int $program, int $uniformBlockIndex, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '3.1') >= 0, __FUNCTION__ . ' is available since OpenGL 3.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($uniformBlockIndex >= 0 && $uniformBlockIndex <= 4_294_967_295, 'Argument $uniformBlockIndex overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetActiveUniformBlockiv', 'void (*)(GLuint program, GLuint uniformBlockIndex, GLenum pname, GLint *params)');
        $proc($program, $uniformBlockIndex, $pname, $params);
    }

    /**
     * Retrieves the name of the active uniform block at *`uniformBlockIndex`* within *`program`*.
     *
     * *`program`* must be the name of a program object for which the command {@see glLinkProgram} must
     * have been called in the past, although it is not required that {@see glLinkProgram} must have
     * succeeded. The link could have failed because the number of active uniforms exceeded the limit.
     *
     * *`uniformBlockIndex`* is an active uniform block index of *`program`*, and must be less than the value of
     * `GL_ACTIVE_UNIFORM_BLOCKS`.
     *
     * Upon success, the name of the uniform block identified by *`unifomBlockIndex`* is returned into
     * *`uniformBlockName`*. The name is nul-terminated. The actual number of characters written into
     * *`uniformBlockName`*, excluding the nul terminator, is returned in *`length`*. If *`length`* is `NULL`, no
     * length is returned.
     *
     * *`bufSize`* contains the maximum number of characters (including the nul terminator) that will be written into
     * *`uniformBlockName`*.
     *
     * If an error occurs, nothing will be written to *`uniformBlockName`* or *`length`*.
     *
     * @see http://docs.gl/gl3/glGetActiveUniformBlockName
     * @see http://docs.gl/gl4/glGetActiveUniformBlockName
     * @since 3.1
     * @param int $program
     * @param int $uniformBlockIndex
     * @param int $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @param \FFI\CData|\FFI\CIntPtr|null $uniformBlockName
     * @return void
     */
    public static function glGetActiveUniformBlockName(int $program, int $uniformBlockIndex, int $bufSize, ?\FFI\CData $length, ?\FFI\CData $uniformBlockName): void
    {
        assert(version_compare(self::$info->version, '3.1') >= 0, __FUNCTION__ . ' is available since OpenGL 3.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($uniformBlockIndex >= 0 && $uniformBlockIndex <= 4_294_967_295, 'Argument $uniformBlockIndex overflow: C type GLuint is required');
        assert($bufSize >= \PHP_INT_MIN && $bufSize <= \PHP_INT_MAX, 'Argument $bufSize overflow: C type GLsizei is required');

        $proc = self::getProc('glGetActiveUniformBlockName', 'void (*)(GLuint program, GLuint uniformBlockIndex, GLsizei bufSize, GLsizei *length, GLchar *uniformBlockName)');
        $proc($program, $uniformBlockIndex, $bufSize, $length, $uniformBlockName);
    }

    /**
     * Binding points for active uniform blocks are assigned using `glUniformBlockBinding`. Each of a program's
     * active uniform blocks has a corresponding uniform buffer binding point. *`program`* is the name of a program
     * object for which the command {@see glLinkProgram} has been issued in the past.
     *
     * If successful, `glUniformBlockBinding` specifies that *`program`* will use the data store of the buffer object
     * bound to the binding point *`uniformBlockBinding`* to extract the values of the uniforms in the uniform block
     * identified by *`uniformBlockIndex`*.
     *
     * When a program object is linked or re-linked, the uniform buffer object binding point assigned to each of its
     * active uniform blocks is reset to zero.
     *
     * @see http://docs.gl/gl3/glUniformBlockBinding
     * @see http://docs.gl/gl4/glUniformBlockBinding
     * @since 3.1
     * @param int $program
     * @param int $uniformBlockIndex
     * @param int $uniformBlockBinding
     * @return void
     */
    public static function glUniformBlockBinding(int $program, int $uniformBlockIndex, int $uniformBlockBinding): void
    {
        assert(version_compare(self::$info->version, '3.1') >= 0, __FUNCTION__ . ' is available since OpenGL 3.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($uniformBlockIndex >= 0 && $uniformBlockIndex <= 4_294_967_295, 'Argument $uniformBlockIndex overflow: C type GLuint is required');
        assert($uniformBlockBinding >= 0 && $uniformBlockBinding <= 4_294_967_295, 'Argument $uniformBlockBinding overflow: C type GLuint is required');

        $proc = self::getProc('glUniformBlockBinding', 'void (*)(GLuint program, GLuint uniformBlockIndex, GLuint uniformBlockBinding)');
        $proc($program, $uniformBlockIndex, $uniformBlockBinding);
    }
}
