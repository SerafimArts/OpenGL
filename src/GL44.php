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
 * The OpenGL functionality up to version 4.4. Includes the deprecated symbols of the Compatibility Profile.
 *
 * OpenGL 4.4 implementations support revision 4.40 of the OpenGL Shading Language.
 *
 * Extensions promoted to core in this release:
 *
 * - ARB_buffer_storage @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_buffer_storage.txt
 * - ARB_clear_texture @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_clear_texture.txt
 * - ARB_enhanced_layouts @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_enhanced_layouts.txt
 * - ARB_multi_bind @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_multi_bind.txt
 * - ARB_query_buffer_object @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_query_buffer_object.txt
 * - ARB_texture_mirror_clamp_to_edge @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_texture_mirror_clamp_to_edge.txt
 * - ARB_texture_stencil8 @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_texture_stencil8.txt
 * - ARB_vertex_type_10f_11f_11f_rev @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_vertex_type_10f_11f_11f_rev.txt
 */
class GL44 extends GL43
{
    /**
     * @var int
     * @since 4.4
     */
    public const GL_MAX_VERTEX_ATTRIB_STRIDE = 0x82e5;
    /**
     * @var int
     * @since 4.4
     */
    public const GL_PRIMITIVE_RESTART_FOR_PATCHES_SUPPORTED = 0x8221;
    /**
     * @var int
     * @since 4.4
     */
    public const GL_TEXTURE_BUFFER_BINDING = 0x8c2a;
    /**
     * @var int
     * @since 4.4
     */
    public const GL_MAP_PERSISTENT_BIT = 0x0040;
    /**
     * @var int
     * @since 4.4
     */
    public const GL_MAP_COHERENT_BIT = 0x0080;
    /**
     * @var int
     * @since 4.4
     */
    public const GL_DYNAMIC_STORAGE_BIT = 0x0100;
    /**
     * @var int
     * @since 4.4
     */
    public const GL_CLIENT_STORAGE_BIT = 0x0200;
    /**
     * @var int
     * @since 4.4
     */
    public const GL_CLIENT_MAPPED_BUFFER_BARRIER_BIT = 0x4000;
    /**
     * @var int
     * @since 4.4
     */
    public const GL_BUFFER_IMMUTABLE_STORAGE = 0x821f;
    /**
     * @var int
     * @since 4.4
     */
    public const GL_BUFFER_STORAGE_FLAGS = 0x8220;
    /**
     * @var int
     * @since 4.4
     */
    public const GL_CLEAR_TEXTURE = 0x9365;
    /**
     * @var int
     * @since 4.4
     */
    public const GL_LOCATION_COMPONENT = 0x934a;
    /**
     * @var int
     * @since 4.4
     */
    public const GL_TRANSFORM_FEEDBACK_BUFFER_INDEX = 0x934b;
    /**
     * @var int
     * @since 4.4
     */
    public const GL_TRANSFORM_FEEDBACK_BUFFER_STRIDE = 0x934c;
    /**
     * @var int
     * @since 4.4
     */
    public const GL_QUERY_BUFFER = 0x9192;
    /**
     * @var int
     * @since 4.4
     */
    public const GL_QUERY_BUFFER_BARRIER_BIT = 0x8000;
    /**
     * @var int
     * @since 4.4
     */
    public const GL_QUERY_BUFFER_BINDING = 0x9193;
    /**
     * @var int
     * @since 4.4
     */
    public const GL_QUERY_RESULT_NO_WAIT = 0x9194;
    /**
     * @var int
     * @since 4.4
     */
    public const GL_MIRROR_CLAMP_TO_EDGE = 0x8743;

    /**
     * {@see GL46::glBufferStorage} and {@see GL46::glNamedBufferStorage} create a new immutable data store. For
     * {@see GL46::glBufferStorage}, the buffer object currently bound to $target will be initialized. For
     * {@see GL46::glNamedBufferStorage}, $buffer is the name of the buffer object that will be configured. The size
     * of the data store is specified by $size. If an initial data is available, its address may be supplied in
     * $data. Otherwise, to create an uninitialized data store, $data should be {@see GL46::NULL}.
     *
     * The $flags parameters specifies the intended usage of the buffer's data store. It must be a bitwise
     * combination of a subset of the following flags:   {@see GL46::GL_DYNAMIC_STORAGE_BIT}  The contents of the
     * data store may be updated after creation through calls to {@see GL46::glBufferSubData}. If this bit is not
     * set, the buffer content may not be directly updated by the client. The data argument may be used to specify
     * the initial content of the buffer's data store regardless of the presence of the
     * {@see GL46::GL_DYNAMIC_STORAGE_BIT}. Regardless of the presence of this bit, buffers may always be updated
     * with server-side calls such as {@see GL46::glCopyBufferSubData} and {@see GL46::glClearBufferSubData}.
     * {@see GL46::GL_MAP_READ_BIT}  The data store may be mapped by the client for read access and a pointer in the
     * client's address space obtained that may be read from.    {@see GL46::GL_MAP_WRITE_BIT}  The data store may be
     * mapped by the client for write access and a pointer in the client's address space obtained that may be written
     * through.    {@see GL46::GL_MAP_PERSISTENT_BIT}  The client may request that the server read from or write to
     * the buffer while it is mapped. The client's pointer to the data store remains valid so long as the data store
     * is mapped, even during execution of drawing or dispatch commands.    {@see GL46::GL_MAP_COHERENT_BIT}  Shared
     * access to buffers that are simultaneously mapped for client access and are used by the server will be
     * coherent, so long as that mapping is performed using {@see GL46::glMapBufferRange}. That is, data written to
     * the store by either the client or server will be immediately visible to the other with no further action taken
     * by the application. In particular,   If {@see GL46::GL_MAP_COHERENT_BIT} is not set and the client performs a
     * write followed by a call to the {@see GL46::glMemoryBarrier} command with the
     * {@see GL46::GL_CLIENT_MAPPED_BUFFER_BARRIER_BIT} set, then in subsequent commands the server will see the
     * writes.   If {@see GL46::GL_MAP_COHERENT_BIT} is set and the client performs a write, then in subsequent
     * commands the server will see the writes.   If {@see GL46::GL_MAP_COHERENT_BIT} is not set and the server
     * performs a write, the application must call {@see GL46::glMemoryBarrier} with the
     * {@see GL46::GL_CLIENT_MAPPED_BUFFER_BARRIER_BIT} set and then call {@see GL46::glFenceSync} with
     * {@see GL46::GL_SYNC_GPU_COMMANDS_COMPLETE} (or {@see GL46::glFinish}). Then the CPU will see the writes after
     * the sync is complete.   If {@see GL46::GL_MAP_COHERENT_BIT} is set and the server does a write, the app must
     * call {@see GL46::glFenceSync} with {@see GL46::GL_SYNC_GPU_COMMANDS_COMPLETE} (or {@see GL46::glFinish}). Then
     * the CPU will see the writes after the sync is complete.      {@see GL46::GL_CLIENT_STORAGE_BIT}  When all
     * other criteria for the buffer storage allocation are met, this bit may be used by an implementation to
     * determine whether to use storage that is local to the server or to the client to serve as the backing store
     * for the buffer.
     *
     * The allowed combinations of flags are subject to certain restrictions. They are as follows:   If $flags
     * contains {@see GL46::GL_MAP_PERSISTENT_BIT}, it must also contain at least one of {@see GL46::GL_MAP_READ_BIT}
     * or {@see GL46::GL_MAP_WRITE_BIT}.   If $flags contains {@see GL46::GL_MAP_COHERENT_BIT}, it must also contain
     * {@see GL46::GL_MAP_PERSISTENT_BIT}.
     *
     * @see http://docs.gl/gl4/glBufferStorage
     * @since 4.4
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param mixed|float|string|int|\FFI\CData|\FFI\CInt $size
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @param int|\FFI\CData|\FFI\CInt $flags
     * @return void
     */
    public function glBufferStorage($target, $size, ?\FFI\CData $data, $flags): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $flags = $flags instanceof \FFI\CData ? $flags->cdata : $flags;

        assert(Assert::uint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int64($size), 'Argument $size must be a C-like GLsizeiptr, but incompatible or overflow value given');
        assert(Assert::uint16($flags), 'Argument $flags must be a C-like GLbitfield, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glBufferStorage', 'void (*)(GLenum target, GLsizeiptr size, const void *data, GLbitfield flags)');
        $proc($target, $size, $data, $flags);
    }

    /**
     * {@see GL46::glClearTexImage} fills all an image contained in a texture with an application supplied value.
     * $texture must be the name of an existing texture. Further, $texture may not be the name of a buffer texture,
     * nor may its internal format be compressed.
     *
     * $format and $type specify the format and type of the source data and are interpreted as they are for
     * {@see GL46::glTexImage3D}. Textures with a base internal format of {@see GL46::GL_DEPTH_COMPONENT},
     * {@see GL46::GL_STENCIL_INDEX}, or {@see GL46::GL_DEPTH_STENCIL} require depth component, stencil, or
     * depth-stencil component data respectively. Textures with other base internal formats require RGBA formats.
     * Textures with integer internal formats require integer data.
     *
     * $data is a pointer to an array of between one and four components of texel data that will be used as the
     * source for the constant fill value. The elements of data are converted by the GL into the internal format of
     * the texture image (that was specified when the level was defined by any of the {@see GL46::glTexImage*},
     * {@see GL46::glTexStorage*} or {@see GL46::glCopyTexImage*} commands), and then used to fill the specified
     * range of the destination texture level. If $data is {@see GL46::NULL}, then the pointer is ignored and the
     * sub-range of the texture image is filled with zeros. If texture is a multisample texture, all the samples in a
     * texel are cleared to the value specified by data.
     *
     * @see http://docs.gl/gl4/glClearTexImage
     * @since 4.4
     * @param int|\FFI\CData|\FFI\CInt $texture
     * @param int|\FFI\CData|\FFI\CInt $level
     * @param int|\FFI\CData|\FFI\CInt $format
     * @param int|\FFI\CData|\FFI\CInt $type
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @return void
     */
    public function glClearTexImage($texture, $level, $format, $type, ?\FFI\CData $data): void
    {
        $texture = $texture instanceof \FFI\CData ? $texture->cdata : $texture;
        $level = $level instanceof \FFI\CData ? $level->cdata : $level;
        $format = $format instanceof \FFI\CData ? $format->cdata : $format;
        $type = $type instanceof \FFI\CData ? $type->cdata : $type;

        assert(Assert::uint16($texture), 'Argument $texture must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($level), 'Argument $level must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::uint16($format), 'Argument $format must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($type), 'Argument $type must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glClearTexImage', 'void (*)(GLuint texture, GLint level, GLenum format, GLenum type, const void *data)');
        $proc($texture, $level, $format, $type, $data);
    }

    /**
     * {@see GL46::glClearTexSubImage} fills all or part of an image contained in a texture with an application
     * supplied value. $texture must be the name of an existing texture. Further, $texture may not be the name of a
     * buffer texture, nor may its internal format be compressed.
     *
     * Arguments $xoffset, $yoffset, and $zoffset specify the lower left texel coordinates of a width-wide by
     * height-high by depth-deep rectangular subregion of the texel array.
     *
     * For one-dimensional array textures, $yoffset is interpreted as the first layer to be cleared and $height is
     * the number of layers to clear. For two-dimensional array textures, $zoffset is interpreted as the first layer
     * to be cleared and $depth is the number of layers to clear. Cube map textures are treated as an array of six
     * slices in the z-dimension, where the value of $zoffset is interpreted as specifying the cube map face for the
     * corresponding layer and $depth is the number of faces to clear. For cube map array textures, $zoffset is the
     * first layer-face to clear, and $depth is the number of layer-faces to clear. Each layer-face is translated
     * into an array layer and a cube map face as described in the OpenGL Specification.
     *
     * Negative values of $xoffset, $yoffset, and $zoffset correspond to the coordinates of border texels. Taking  ws
     * ,  hs ,  ds ,  wb ,  hb , and  db  to be the specified $width, $height, $depth, and the border width, border
     * height, and border depth of the texel array and taking  x ,  y ,  z ,  w ,  h , and  d  to be the $xoffset,
     * $yoffset, $zoffset, $width, $height, and $depth argument values, any of the following relationships generates
     * a {@see GL46::GL_INVALID_OPERATION} error:      x &lt;  w b          x + w &gt;  w s  -  w b          y &lt; -
     *  h b          y + h &gt;  h s  -  h b          z &lt; -  d b          z + d &gt;  d s  -  d b
     *
     * For texture types that do not have certain dimensions, this command treats those dimensions as having a size
     * of 1. For example, to clear a portion of a two-dimensional texture, use $zoffset equal to zero and $depth
     * equal to one.
     *
     * $format and $type specify the format and type of the source data and are interpreted as they are for
     * {@see GL46::glTexImage3D}. Textures with a base internal format of {@see GL46::GL_DEPTH_COMPONENT},
     * {@see GL46::GL_STENCIL_INDEX}, or {@see GL46::GL_DEPTH_STENCIL} require depth component, stencil, or
     * depth-stencil component data respectively. Textures with other base internal formats require RGBA formats.
     * Textures with integer internal formats require integer data.
     *
     * $data is a pointer to an array of between one and four components of texel data that will be used as the
     * source for the constant fill value. The elements of data are converted by the GL into the internal format of
     * the texture image (that was specified when the level was defined by any of the {@see GL46::glTexImage*},
     * {@see GL46::glTexStorage*} or {@see GL46::glCopyTexImage*} commands), and then used to fill the specified
     * range of the destination texture level. If $data is {@see GL46::NULL}, then the pointer is ignored and the
     * sub-range of the texture image is filled with zeros. If texture is a multisample texture, all the samples in a
     * texel are cleared to the value specified by data.
     *
     * @see http://docs.gl/gl4/glClearTexSubImage
     * @since 4.4
     * @param int|\FFI\CData|\FFI\CInt $texture
     * @param int|\FFI\CData|\FFI\CInt $level
     * @param int|\FFI\CData|\FFI\CInt $xoffset
     * @param int|\FFI\CData|\FFI\CInt $yoffset
     * @param int|\FFI\CData|\FFI\CInt $zoffset
     * @param int|\FFI\CData|\FFI\CInt $width
     * @param int|\FFI\CData|\FFI\CInt $height
     * @param int|\FFI\CData|\FFI\CInt $depth
     * @param int|\FFI\CData|\FFI\CInt $format
     * @param int|\FFI\CData|\FFI\CInt $type
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @return void
     */
    public function glClearTexSubImage($texture, $level, $xoffset, $yoffset, $zoffset, $width, $height, $depth, $format, $type, ?\FFI\CData $data): void
    {
        $texture = $texture instanceof \FFI\CData ? $texture->cdata : $texture;
        $level = $level instanceof \FFI\CData ? $level->cdata : $level;
        $xoffset = $xoffset instanceof \FFI\CData ? $xoffset->cdata : $xoffset;
        $yoffset = $yoffset instanceof \FFI\CData ? $yoffset->cdata : $yoffset;
        $zoffset = $zoffset instanceof \FFI\CData ? $zoffset->cdata : $zoffset;
        $width = $width instanceof \FFI\CData ? $width->cdata : $width;
        $height = $height instanceof \FFI\CData ? $height->cdata : $height;
        $depth = $depth instanceof \FFI\CData ? $depth->cdata : $depth;
        $format = $format instanceof \FFI\CData ? $format->cdata : $format;
        $type = $type instanceof \FFI\CData ? $type->cdata : $type;

        assert(Assert::uint16($texture), 'Argument $texture must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($level), 'Argument $level must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($xoffset), 'Argument $xoffset must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($yoffset), 'Argument $yoffset must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($zoffset), 'Argument $zoffset must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($width), 'Argument $width must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::int16($height), 'Argument $height must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::int16($depth), 'Argument $depth must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint16($format), 'Argument $format must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($type), 'Argument $type must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glClearTexSubImage', 'void (*)(GLuint texture, GLint level, GLint xoffset, GLint yoffset, GLint zoffset, GLsizei width, GLsizei height, GLsizei depth, GLenum format, GLenum type, const void *data)');
        $proc($texture, $level, $xoffset, $yoffset, $zoffset, $width, $height, $depth, $format, $type, $data);
    }

    /**
     * {@see GL46::glBindBuffersBase} binds a set of $count buffer objects whose names are given in the array
     * $buffers to the $count consecutive binding points starting from index $first of the array of targets specified
     * by $target. If $buffers is {@see GL46::NULL} then {@see GL46::glBindBuffersBase} unbinds any buffers that are
     * currently bound to the referenced binding points. Assuming no errors are generated, it is equivalent to the
     * following pseudo-code, which calls {@see GL46::glBindBufferBase}, with the exception that the non-indexed
     * $target is not changed by {@see GL46::glBindBuffersBase}:
     *
     * <code>
     *     for (i = 0; i < count; i++) {
     *         if (buffers != NULL) {
     *             glBindBufferBase(target, first + i, buffers[i]);
     *         } else {
     *             glBindBufferBase(target, first + i, 0);
     *         }
     *     }
     * </code>
     * Each entry in $buffers will be checked individually and if found to be invalid, the state for that buffer
     * binding index will not be changed and an error will be generated. However, the state for other buffer binding
     * indices referenced by the command will still be updated.
     *
     * @see http://docs.gl/gl4/glBindBuffersBase
     * @since 4.4
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $first
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CIntPtr|null $buffers
     * @return void
     */
    public function glBindBuffersBase($target, $first, $count, ?\FFI\CData $buffers): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $first = $first instanceof \FFI\CData ? $first->cdata : $first;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Assert::uint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($first), 'Argument $first must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glBindBuffersBase', 'void (*)(GLenum target, GLuint first, GLsizei count, const GLuint *buffers)');
        $proc($target, $first, $count, $buffers);
    }

    /**
     * {@see GL46::glBindBuffersRange} binds a set of $count ranges from buffer objects whose names are given in the
     * array $buffers to the $count consecutive binding points starting from index $first of the array of targets
     * specified by $target. $offsets specifies the address of an array containing $count starting offsets within the
     * buffers, and $sizes specifies the address of an array of $count sizes of the ranges. If $buffers is
     * {@see GL46::NULL} then $offsets and $sizes are ignored and {@see GL46::glBindBuffersRange} unbinds any buffers
     * that are currently bound to the referenced binding points. Assuming no errors are generated, it is equivalent
     * to the following pseudo-code, which calls {@see GL46::glBindBufferRange}, with the exception that the
     * non-indexed $target is not changed by {@see GL46::glBindBuffersRange}:
     *
     * <code>
     *     for (i = 0; i < count; i++) {
     *         if (buffers != NULL) {
     *             glBindBufferRange(target, first + i, buffers[i], offsets[i], sizes[i]);
     *         } else {
     *             glBindBufferRange(target, first + i, 0);
     *         }
     *     }
     * </code>
     * Each entry in $buffers, $offsets, and $sizes will be checked individually and if found to be invalid, the
     * state for that buffer binding index will not be changed and an error will be generated. However, the state for
     * other buffer binding indices referenced by the command will still be updated.
     *
     * @see http://docs.gl/gl4/glBindBuffersRange
     * @since 4.4
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $first
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CIntPtr|null $buffers
     * @param \FFI\CData|\FFI\CIntPtr|null $offsets
     * @param \FFI\CData|\FFI\CIntPtr|null $sizes
     * @return void
     */
    public function glBindBuffersRange($target, $first, $count, ?\FFI\CData $buffers, ?\FFI\CData $offsets, ?\FFI\CData $sizes): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $first = $first instanceof \FFI\CData ? $first->cdata : $first;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Assert::uint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($first), 'Argument $first must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glBindBuffersRange', 'void (*)(GLenum target, GLuint first, GLsizei count, const GLuint *buffers, const GLintptr *offsets, const GLsizeiptr *sizes)');
        $proc($target, $first, $count, $buffers, $offsets, $sizes);
    }

    /**
     * {@see GL46::glBindTextures} binds an array of existing texture objects to a specified number of consecutive
     * texture units. $count specifies the number of texture objects whose names are stored in the array $textures.
     * That number of texture names are read from the array and bound to the $count consecutive texture units
     * starting from $first. The target, or type of texture is deduced from the texture object and each texture is
     * bound to the corresponding target of the texture unit. If the name zero appears in the $textures array, any
     * existing binding to any target of the texture unit is reset and the default texture for that target is bound
     * in its place. Any non-zero entry in $textures must be the name of an existing texture object. If $textures is
     * {@see GL46::NULL} then it is as if an appropriately sized array containing only zeros had been specified.
     *
     * With the exception that the active texture selector maintains its current value, {@see GL46::glBindTextures}
     * is equivalent to the following pseudo code:
     *
     * <code>
     *     for (i = 0; i < count; i++) {
     *         GLuint texture;
     *         if (textures == NULL) {
     *             texture = 0;
     *         } else {
     *             texture = textures[i];
     *         }
     *         glActiveTexture(GL_TEXTURE0 + first + i);
     *         if (texture != 0) {
     *             GLenum target = /* target of textures[i] *\/;
     *             glBindTexture(target, textures[i]);
     *         } else {
     *             for (target in all supported targets) {
     *                 glBindTexture(target, 0);
     *             }
     *         }
     *     }
     * </code>
     * Each entry in $textures will be checked individually and if found to be invalid, the state for that texture
     * unit will not be changed and an error will be generated. However, the state for other texture units referenced
     * by the command will still be updated.
     *
     * @see http://docs.gl/gl4/glBindTextures
     * @since 4.4
     * @param int|\FFI\CData|\FFI\CInt $first
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CIntPtr|null $textures
     * @return void
     */
    public function glBindTextures($first, $count, ?\FFI\CData $textures): void
    {
        $first = $first instanceof \FFI\CData ? $first->cdata : $first;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Assert::uint16($first), 'Argument $first must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glBindTextures', 'void (*)(GLuint first, GLsizei count, const GLuint *textures)');
        $proc($first, $count, $textures);
    }

    /**
     * {@see GL46::glBindSamplers} binds samplers from an array of existing sampler objects to a specified number of
     * consecutive sampler units. $count specifies the number of sampler objects whose names are stored in the array
     * $samplers. That number of sampler names is read from the array and bound to the $count consecutive sampler
     * units starting from $first.
     *
     * If the name zero appears in the $samplers array, any existing binding to the sampler unit is reset. Any
     * non-zero entry in $samplers must be the name of an existing sampler object. When a non-zero entry in $samplers
     * is present, that sampler object is bound to the corresponding sampler unit. If $samplers is {@see GL46::NULL}
     * then it is as if an appropriately sized array containing only zeros had been specified.
     *
     * {@see GL46::glBindSamplers} is equivalent to the following pseudo code:
     *
     * <code>
     *     for (i = 0; i < count; i++) {
     *         if (samplers == NULL) {
     *             glBindSampler(first + i, 0);
     *         } else {
     *             glBindSampler(first + i, samplers[i]);
     *         }
     *     }
     * </code>
     * Each entry in $samplers will be checked individually and if found to be invalid, the state for that sampler
     * unit will not be changed and an error will be generated. However, the state for other sampler units referenced
     * by the command will still be updated.
     *
     * @see http://docs.gl/gl4/glBindSamplers
     * @since 4.4
     * @param int|\FFI\CData|\FFI\CInt $first
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CIntPtr|null $samplers
     * @return void
     */
    public function glBindSamplers($first, $count, ?\FFI\CData $samplers): void
    {
        $first = $first instanceof \FFI\CData ? $first->cdata : $first;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Assert::uint16($first), 'Argument $first must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glBindSamplers', 'void (*)(GLuint first, GLsizei count, const GLuint *samplers)');
        $proc($first, $count, $samplers);
    }

    /**
     * {@see GL46::glBindImageTextures} binds images from an array of existing texture objects to a specified number
     * of consecutive image units. $count specifies the number of texture objects whose names are stored in the array
     * $textures. That number of texture names are read from the array and bound to the $count consecutive texture
     * units starting from $first. If the name zero appears in the $textures array, any existing binding to the image
     * unit is reset. Any non-zero entry in $textures must be the name of an existing texture object. When a non-zero
     * entry in $textures is present, the image at level zero is bound, the binding is considered layered, with the
     * first layer set to zero, and the image is bound for read-write access. The image unit format parameter is
     * taken from the internal format of the image at level zero of the texture object. For cube map textures, the
     * internal format of the positive X image of level zero is used. If $textures is {@see GL46::NULL} then it is as
     * if an appropriately sized array containing only zeros had been specified.
     *
     * {@see GL46::glBindImageTextures} is equivalent to the following pseudo code:
     *
     * <code>
     *     for (i = 0; i < count; i++) {
     *         if (textures == NULL || textures[i] = 0) {
     *             glBindImageTexture(first + i, 0, 0, GL_FALSE, 0, GL_READ_ONLY, GL_R8);
     *         } else {
     *             glBindImageTexture(first + i, textures[i], 0, GL_TRUE, 0, GL_READ_WRITE, lookupInternalFormat(textures[i]));
     *         }
     *     }
     * </code>
     * Each entry in $textures will be checked individually and if found to be invalid, the state for that image unit
     * will not be changed and an error will be generated. However, the state for other texture image units
     * referenced by the command will still be updated.
     *
     * @see http://docs.gl/gl4/glBindImageTextures
     * @since 4.4
     * @param int|\FFI\CData|\FFI\CInt $first
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CIntPtr|null $textures
     * @return void
     */
    public function glBindImageTextures($first, $count, ?\FFI\CData $textures): void
    {
        $first = $first instanceof \FFI\CData ? $first->cdata : $first;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Assert::uint16($first), 'Argument $first must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glBindImageTextures', 'void (*)(GLuint first, GLsizei count, const GLuint *textures)');
        $proc($first, $count, $textures);
    }

    /**
     * {@see GL46::glBindVertexBuffers} and {@see GL46::glVertexArrayVertexBuffers} bind storage from an array of
     * existing buffer objects to a specified number of consecutive vertex buffer binding points units in a vertex
     * array object. For {@see GL46::glBindVertexBuffers}, the vertex array object is the currently bound vertex
     * array object. For {@see GL46::glVertexArrayVertexBuffers}, $vaobj is the name of the vertex array object.
     *
     * $count existing buffer objects are bound to vertex buffer binding points numbered $first$ through $first +
     * count - 1$. If $buffers is not NULL, it specifies an array of $count values, each of which must be zero or the
     * name of an existing buffer object. $offsets and $strides specify arrays of $count values indicating the offset
     * of the first element and stride between elements in each buffer, respectively. If $buffers is NULL, each
     * affected vertex buffer binding point from $first$ through $first + count - 1$ will be reset to have no bound
     * buffer object. In this case, the offsets and strides associated with the binding points are set to default
     * values, ignoring $offsets and $strides.
     *
     * {@see GL46::glBindVertexBuffers} is equivalent (assuming no errors are generated) to:
     *
     * <code>
     *     for (i = 0; i < count; i++) {
     *         if (buffers == NULL) {
     *             glBindVertexBuffer(first + i, 0, 0, 16);
     *         } else {
     *             glBindVertexBuffer(first + i, buffers[i], offsets[i], strides[i]);
     *         }
     *     }
     * </code>
     *
     *  except that buffers will not be created if they do not exist.
     *
     * {@see GL46::glVertexArrayVertexBuffers} is equivalent to the pseudocode above, but replacing
     * {@see GL46::glBindVertexBuffers}(args) with {@see GL46::glVertexArrayVertexBuffers}(vaobj, args).
     *
     * The values specified in $buffers, $offsets, and $strides will be checked separately for each vertex buffer
     * binding point. When a value for a specific vertex buffer binding point is invalid, the state for that binding
     * point will be unchanged and an error will be generated. However, state for other vertex buffer binding points
     * will still be changed if their corresponding values are valid.
     *
     * @see http://docs.gl/gl4/glBindVertexBuffers
     * @since 4.4
     * @param int|\FFI\CData|\FFI\CInt $first
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CIntPtr|null $buffers
     * @param \FFI\CData|\FFI\CIntPtr|null $offsets
     * @param \FFI\CData|\FFI\CIntPtr|null $strides
     * @return void
     */
    public function glBindVertexBuffers($first, $count, ?\FFI\CData $buffers, ?\FFI\CData $offsets, ?\FFI\CData $strides): void
    {
        $first = $first instanceof \FFI\CData ? $first->cdata : $first;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Assert::uint16($first), 'Argument $first must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glBindVertexBuffers', 'void (*)(GLuint first, GLsizei count, const GLuint *buffers, const GLintptr *offsets, const GLsizei *strides)');
        $proc($first, $count, $buffers, $offsets, $strides);
    }
}
