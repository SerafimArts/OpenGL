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
 *
 * @version 4.4
 */
class GL44 extends GL43
{
    /**
     * Implementation-dependent state which constrains the maximum value of stride parameters to vertex array
     * pointer-setting commands.
     *
     * @since 4.4
     * @var int
     */
    public const GL_MAX_VERTEX_ATTRIB_STRIDE = 0x82E5;

    /**
     * Implementations are not required to support primitive restart for separate patch primitives
     * (primitive type PATCHES). Support can be queried by calling GetBooleanv with the symbolic constant
     * PRIMITIVE_RESTART_FOR_PATCHES_SUPPORTED. A value of FALSE indicates that primitive restart is treated as disabled
     * when drawing patches, no matter the value of the enables. A value of TRUE indicates that primitive restart
     * behaves normally for patches.
     *
     * @since 4.4
     * @var int
     */
    public const GL_PRIMITIVE_RESTART_FOR_PATCHES_SUPPORTED = 0x8221;

    /**
     * Equivalent to {@link ARBTextureBufferObject#GL_TEXTURE_BUFFER_ARB TEXTURE_BUFFER_ARB} query, but named more
     * consistently.
     *
     * @since 4.4
     * @var int
     */
    public const GL_TEXTURE_BUFFER_BINDING = 0x8C2A;

    /**
     * Accepted in the $flags parameter of {@link #glBufferStorage BufferStorage} and
     * {@link ARBBufferStorage#glNamedBufferStorageEXT NamedBufferStorageEXT}.
     *
     * @since 4.4
     * @var int
     */
    public const
        GL_MAP_PERSISTENT_BIT = 0x40,
        GL_MAP_COHERENT_BIT = 0x80,
        GL_DYNAMIC_STORAGE_BIT = 0x100,
        GL_CLIENT_STORAGE_BIT = 0x200;

    /**
     * Accepted by the $pname parameter of {@code GetBufferParameter&#123;i|i64&#125;v}.
     *
     * @since 4.4
     * @var int
     */
    public const
        GL_BUFFER_IMMUTABLE_STORAGE = 0x821F,
        GL_BUFFER_STORAGE_FLAGS = 0x8220;

    /**
     * Accepted by the $barriers parameter of {@link GL42::memoryBarrier MemoryBarrier}.
     *
     * @since 4.4
     * @var int
     */
    public const GL_CLIENT_MAPPED_BUFFER_BARRIER_BIT = 0x4000;

    /**
     * Accepted by the $pname parameter for {@link GL42::getInternalformativ GetInternalformativ} and
     * {@link GL43::getInternalformati64v GetInternalformati64v}.
     *
     * @since 4.4
     * @var int
     */
    public const GL_CLEAR_TEXTURE = 0x9365;

    /**
     * Accepted in the $props array of {@link GL43::getProgramResourceiv GetProgramResourceiv}.
     *
     * @since 4.4
     * @var int
     */
    public const
        GL_LOCATION_COMPONENT = 0x934A,
        GL_TRANSFORM_FEEDBACK_BUFFER_INDEX = 0x934B,
        GL_TRANSFORM_FEEDBACK_BUFFER_STRIDE = 0x934C;

    /**
     * Accepted by the $pname parameter of {@link GL15::getQueryObjectiv GetQueryObjectiv},
     * {@link GL15::getQueryObjectuiv GetQueryObjectuiv}, {@link GL33::getQueryObjecti64v GetQueryObjecti64v} and
     * {@link GL33::getQueryObjectui64v GetQueryObjectui64v}.
     *
     * @since 4.4
     * @var int
     */
    public const GL_QUERY_RESULT_NO_WAIT = 0x9194;

    /**
     * Accepted by the $target parameter of
     * {@link GL15::bindBuffer BindBuffer},
     * {@link GL15::bufferData BufferData},
     * {@link GL15::bufferSubData BufferSubData},
     * {@link GL15::mapBuffer MapBuffer},
     * {@link GL15::unmapBuffer UnmapBuffer},
     * {@link GL30::mapBufferRange MapBufferRange},
     * {@link GL15::getBufferSubData GetBufferSubData},
     * {@link GL15::getBufferParameteriv GetBufferParameteriv},
     * {@link GL32::getBufferParameteri64v GetBufferParameteri64v},
     * {@link GL15::getBufferPointerv GetBufferPointerv},
     * {@link GL43::clearBufferSubData ClearBufferSubData}
     *
     * and the $readtarget and $writetarget parameters of {@link GL31::copyBufferSubData CopyBufferSubData}.
     *
     * @since 4.4
     * @var int
     */
    public const GL_QUERY_BUFFER = 0x9192;

    /**
     * Accepted by the $pname parameter of {@link GL11::getBooleanv GetBooleanv},
     * {@link GL11::getIntegerv GetIntegerv}, {@link GL11::getFloatv GetFloatv},
     * and {@link GL11::getDoublev GetDoublev}.
     *
     * @since 4.4
     * @var int
     */
    public const GL_QUERY_BUFFER_BINDING = 0x9193;

    /**
     * Accepted in the $barriers bitfield in {@link GL42::memoryBarrier MemoryBarrier}.
     *
     * @since 4.4
     * @var int
     */
    public const GL_QUERY_BUFFER_BARRIER_BIT = 0x8000;

    /**
     * Accepted by the $param parameter of TexParameter{if}, SamplerParameter{if} and SamplerParameter{if}v, and
     * by the $params parameter of TexParameter{if}v, TexParameterI{i ui}v and SamplerParameterI{i ui}v when
     * their $pname parameter is {@link GL11#GL_TEXTURE_WRAP_S TEXTURE_WRAP_S},
     * {@link GL11#GL_TEXTURE_WRAP_T TEXTURE_WRAP_T}, or {@link GL12#GL_TEXTURE_WRAP_R TEXTURE_WRAP_R},
     *
     * @since 4.4
     * @var int
     */
    public const GL_MIRROR_CLAMP_TO_EDGE = 0x8743;

    /**
     * {@see GL44::bindBuffersBase} binds a set of $count buffer objects whose names are given in the array
     * $buffers to the $count consecutive binding points starting from index $first of the array of targets specified
     * by $target. If $buffers is {@see GL46::NULL} then {@see GL44::bindBuffersBase} unbinds any buffers that are
     * currently bound to the referenced binding points. Assuming no errors are generated, it is equivalent to the
     * following pseudo-code, which calls {@see GL44::bindBufferBase}, with the exception that the non-indexed
     * $target is not changed by {@see GL44::bindBuffersBase}:
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
     * @param int $target
     * @param int $first
     * @param int $count
     * @param CData|null $buffers
     * @return void
     */
    public function bindBuffersBase(int $target, int $first, int $count, ?CData $buffers): void
    {
        $__proc = $this->proc('glBindBuffersBase',
            'void (*)(GLenum target, GLuint first, GLsizei count, const GLuint *buffers)');
        $__proc($target, $first, $count, $buffers);
    }

    /**
     * {@see GL44::bindBuffersRange} binds a set of $count ranges from buffer objects whose names are given in the
     * array $buffers to the $count consecutive binding points starting from index $first of the array of targets
     * specified by $target. $offsets specifies the address of an array containing $count starting offsets within the
     * buffers, and $sizes specifies the address of an array of $count sizes of the ranges. If $buffers is
     * {@see GL46::NULL} then $offsets and $sizes are ignored and {@see GL44::bindBuffersRange} unbinds any buffers
     * that are currently bound to the referenced binding points. Assuming no errors are generated, it is equivalent
     * to the following pseudo-code, which calls {@see GL44::bindBufferRange}, with the exception that the
     * non-indexed $target is not changed by {@see GL44::bindBuffersRange}:
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
     * @param int $target
     * @param int $first
     * @param int $count
     * @param CData|null $buffers
     * @param CData|null $offsets
     * @param CData|null $sizes
     * @return void
     */
    public function bindBuffersRange(
        int $target,
        int $first,
        int $count,
        ?CData $buffers,
        ?CData $offsets,
        ?CData $sizes
    ): void {
        $__proc = $this->proc('glBindBuffersRange',
            'void (*)(GLenum target, GLuint first, GLsizei count, const GLuint *buffers, const GLintptr *offsets, const GLsizeiptr *sizes)');
        $__proc($target, $first, $count, $buffers, $offsets, $sizes);
    }

    /**
     * {@see GL44::bindImageTextures} binds images from an array of existing texture objects to a specified number
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
     * {@see GL44::bindImageTextures} is equivalent to the following pseudo code:
     *
     * <code>
     *     for (i = 0; i < count; i++) {
     *         if (textures == NULL || textures[i] = 0) {
     *             glBindImageTexture(first + i, 0, 0, GL_FALSE, 0, GL_READ_ONLY, GL_R8);
     *         } else {
     *             glBindImageTexture(first + i, textures[i], 0, GL_TRUE, 0, GL_READ_WRITE,
     * lookupInternalFormat(textures[i]));
     *         }
     *     }
     * </code>
     * Each entry in $textures will be checked individually and if found to be invalid, the state for that image unit
     * will not be changed and an error will be generated. However, the state for other texture image units
     * referenced by the command will still be updated.
     *
     * @see http://docs.gl/gl4/glBindImageTextures
     * @since 4.4
     * @param int $first
     * @param int $count
     * @param CData|null $textures
     * @return void
     */
    public function bindImageTextures(int $first, int $count, ?CData $textures): void
    {
        $__proc = $this->proc('glBindImageTextures',
            'void (*)(GLuint first, GLsizei count, const GLuint *textures)');
        $__proc($first, $count, $textures);
    }

    /**
     * {@see GL44::bindSamplers} binds samplers from an array of existing sampler objects to a specified number of
     * consecutive sampler units. $count specifies the number of sampler objects whose names are stored in the array
     * $samplers. That number of sampler names is read from the array and bound to the $count consecutive sampler
     * units starting from $first.
     *
     * If the name zero appears in the $samplers array, any existing binding to the sampler unit is reset. Any
     * non-zero entry in $samplers must be the name of an existing sampler object. When a non-zero entry in $samplers
     * is present, that sampler object is bound to the corresponding sampler unit. If $samplers is {@see GL46::NULL}
     * then it is as if an appropriately sized array containing only zeros had been specified.
     *
     * {@see GL44::bindSamplers} is equivalent to the following pseudo code:
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
     * @param int $first
     * @param int $count
     * @param CData|null $samplers
     * @return void
     */
    public function bindSamplers(int $first, int $count, ?CData $samplers): void
    {
        $__proc = $this->proc('glBindSamplers', 'void (*)(GLuint first, GLsizei count, const GLuint *samplers)');
        $__proc($first, $count, $samplers);
    }

    /**
     * {@see GL44::bindTextures} binds an array of existing texture objects to a specified number of consecutive
     * texture units. $count specifies the number of texture objects whose names are stored in the array $textures.
     * That number of texture names are read from the array and bound to the $count consecutive texture units
     * starting from $first. The target, or type of texture is deduced from the texture object and each texture is
     * bound to the corresponding target of the texture unit. If the name zero appears in the $textures array, any
     * existing binding to any target of the texture unit is reset and the default texture for that target is bound
     * in its place. Any non-zero entry in $textures must be the name of an existing texture object. If $textures is
     * {@see GL46::NULL} then it is as if an appropriately sized array containing only zeros had been specified.
     *
     * With the exception that the active texture selector maintains its current value, {@see GL44::bindTextures}
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
     * @param int $first
     * @param int $count
     * @param CData|null $textures
     * @return void
     */
    public function bindTextures(int $first, int $count, ?CData $textures): void
    {
        $__proc = $this->proc('glBindTextures', 'void (*)(GLuint first, GLsizei count, const GLuint *textures)');
        $__proc($first, $count, $textures);
    }

    /**
     * {@see GL44::bindVertexBuffers} and {@see GL44::vertexArrayVertexBuffers} bind storage from an array of
     * existing buffer objects to a specified number of consecutive vertex buffer binding points units in a vertex
     * array object. For {@see GL44::bindVertexBuffers}, the vertex array object is the currently bound vertex
     * array object. For {@see GL44::vertexArrayVertexBuffers}, $vaobj is the name of the vertex array object.
     *
     * $count existing buffer objects are bound to vertex buffer binding points numbered $first$ through $first +
     * count - 1$. If $buffers is not NULL, it specifies an array of $count values, each of which must be zero or the
     * name of an existing buffer object. $offsets and $strides specify arrays of $count values indicating the offset
     * of the first element and stride between elements in each buffer, respectively. If $buffers is NULL, each
     * affected vertex buffer binding point from $first$ through $first + count - 1$ will be reset to have no bound
     * buffer object. In this case, the offsets and strides associated with the binding points are set to default
     * values, ignoring $offsets and $strides.
     *
     * {@see GL44::bindVertexBuffers} is equivalent (assuming no errors are generated) to:
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
     * {@see GL44::vertexArrayVertexBuffers} is equivalent to the pseudocode above, but replacing
     * {@see GL44::bindVertexBuffers}(args) with {@see GL44::vertexArrayVertexBuffers}(vaobj, args).
     *
     * The values specified in $buffers, $offsets, and $strides will be checked separately for each vertex buffer
     * binding point. When a value for a specific vertex buffer binding point is invalid, the state for that binding
     * point will be unchanged and an error will be generated. However, state for other vertex buffer binding points
     * will still be changed if their corresponding values are valid.
     *
     * @see http://docs.gl/gl4/glBindVertexBuffers
     * @since 4.4
     * @param int $first
     * @param int $count
     * @param CData|null $buffers
     * @param CData|null $offsets
     * @param CData|null $strides
     * @return void
     */
    public function bindVertexBuffers(
        int $first,
        int $count,
        ?CData $buffers,
        ?CData $offsets,
        ?CData $strides
    ): void {
        $__proc = $this->proc('glBindVertexBuffers',
            'void (*)(GLuint first, GLsizei count, const GLuint *buffers, const GLintptr *offsets, const GLsizei *strides)');
        $__proc($first, $count, $buffers, $offsets, $strides);
    }

    /**
     * {@see GL44::bufferStorage} and {@see GL44::namedBufferStorage} create a new immutable data store. For
     * {@see GL44::bufferStorage}, the buffer object currently bound to $target will be initialized. For
     * {@see GL44::namedBufferStorage}, $buffer is the name of the buffer object that will be configured. The size
     * of the data store is specified by $size. If an initial data is available, its address may be supplied in
     * $data. Otherwise, to create an uninitialized data store, $data should be {@see GL46::NULL}.
     *
     * The $flags parameters specifies the intended usage of the buffer's data store. It must be a bitwise
     * combination of a subset of the following flags:   {@see GL44::GL_DYNAMIC_STORAGE_BIT}  The contents of the
     * data store may be updated after creation through calls to {@see GL44::bufferSubData}. If this bit is not
     * set, the buffer content may not be directly updated by the client. The data argument may be used to specify
     * the initial content of the buffer's data store regardless of the presence of the
     * {@see GL44::GL_DYNAMIC_STORAGE_BIT}. Regardless of the presence of this bit, buffers may always be updated
     * with server-side calls such as {@see GL44::copyBufferSubData} and {@see GL44::clearBufferSubData}.
     * {@see GL44::GL_MAP_READ_BIT}  The data store may be mapped by the client for read access and a pointer in the
     * client's address space obtained that may be read from.    {@see GL44::GL_MAP_WRITE_BIT}  The data store may be
     * mapped by the client for write access and a pointer in the client's address space obtained that may be written
     * through.    {@see GL44::GL_MAP_PERSISTENT_BIT}  The client may request that the server read from or write to
     * the buffer while it is mapped. The client's pointer to the data store remains valid so long as the data store
     * is mapped, even during execution of drawing or dispatch commands.    {@see GL44::GL_MAP_COHERENT_BIT}  Shared
     * access to buffers that are simultaneously mapped for client access and are used by the server will be
     * coherent, so long as that mapping is performed using {@see GL44::mapBufferRange}. That is, data written to
     * the store by either the client or server will be immediately visible to the other with no further action taken
     * by the application. In particular,   If {@see GL44::GL_MAP_COHERENT_BIT} is not set and the client performs a
     * write followed by a call to the {@see GL44::memoryBarrier} command with the
     * {@see GL44::GL_CLIENT_MAPPED_BUFFER_BARRIER_BIT} set, then in subsequent commands the server will see the
     * writes.   If {@see GL44::GL_MAP_COHERENT_BIT} is set and the client performs a write, then in subsequent
     * commands the server will see the writes.   If {@see GL44::GL_MAP_COHERENT_BIT} is not set and the server
     * performs a write, the application must call {@see GL44::memoryBarrier} with the
     * {@see GL44::GL_CLIENT_MAPPED_BUFFER_BARRIER_BIT} set and then call {@see GL44::fenceSync} with
     * {@see GL44::GL_SYNC_GPU_COMMANDS_COMPLETE} (or {@see GL44::finish}). Then the CPU will see the writes after
     * the sync is complete.   If {@see GL44::GL_MAP_COHERENT_BIT} is set and the server does a write, the app must
     * call {@see GL44::fenceSync} with {@see GL44::GL_SYNC_GPU_COMMANDS_COMPLETE} (or {@see GL44::finish}). Then
     * the CPU will see the writes after the sync is complete.      {@see GL44::GL_CLIENT_STORAGE_BIT}  When all
     * other criteria for the buffer storage allocation are met, this bit may be used by an implementation to
     * determine whether to use storage that is local to the server or to the client to serve as the backing store
     * for the buffer.
     *
     * The allowed combinations of flags are subject to certain restrictions. They are as follows:   If $flags
     * contains {@see GL44::GL_MAP_PERSISTENT_BIT}, it must also contain at least one of {@see GL44::GL_MAP_READ_BIT}
     * or {@see GL44::GL_MAP_WRITE_BIT}.   If $flags contains {@see GL44::GL_MAP_COHERENT_BIT}, it must also contain
     * {@see GL44::GL_MAP_PERSISTENT_BIT}.
     *
     * @see http://docs.gl/gl4/glBufferStorage
     * @since 4.4
     * @param int $target
     * @param int $size
     * @param CData|null $data
     * @param int $flags
     * @return void
     */
    public function bufferStorage(int $target, int $size, ?CData $data, int $flags): void
    {
        $__proc = $this->proc('glBufferStorage',
            'void (*)(GLenum target, GLsizeiptr size, const void *data, GLbitfield flags)');
        $__proc($target, $size, $data, $flags);
    }

    /**
     * {@see GL44::clearTexImage} fills all an image contained in a texture with an application supplied value.
     * $texture must be the name of an existing texture. Further, $texture may not be the name of a buffer texture,
     * nor may its internal format be compressed.
     *
     * $format and $type specify the format and type of the source data and are interpreted as they are for
     * {@see GL44::texImage3D}. Textures with a base internal format of {@see GL44::GL_DEPTH_COMPONENT},
     * {@see GL44::GL_STENCIL_INDEX}, or {@see GL44::GL_DEPTH_STENCIL} require depth component, stencil, or
     * depth-stencil component data respectively. Textures with other base internal formats require RGBA formats.
     * Textures with integer internal formats require integer data.
     *
     * $data is a pointer to an array of between one and four components of texel data that will be used as the
     * source for the constant fill value. The elements of data are converted by the GL into the internal format of
     * the texture image (that was specified when the level was defined by any of the {@see GL44::texImage*},
     * {@see GL44::texStorage*} or {@see GL44::copyTexImage*} commands), and then used to fill the specified
     * range of the destination texture level. If $data is {@see GL46::NULL}, then the pointer is ignored and the
     * sub-range of the texture image is filled with zeros. If texture is a multisample texture, all the samples in a
     * texel are cleared to the value specified by data.
     *
     * @see http://docs.gl/gl4/glClearTexImage
     * @since 4.4
     * @param int $texture
     * @param int $level
     * @param int $format
     * @param int $type
     * @param CData|null $data
     * @return void
     */
    public function clearTexImage(int $texture, int $level, int $format, int $type, ?CData $data): void
    {
        $__proc = $this->proc('glClearTexImage',
            'void (*)(GLuint texture, GLint level, GLenum format, GLenum type, const void *data)');
        $__proc($texture, $level, $format, $type, $data);
    }

    /**
     * {@see GL44::clearTexSubImage} fills all or part of an image contained in a texture with an application
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
     * a {@see GL44::GL_INVALID_OPERATION} error:      x &lt;  w b          x + w &gt;  w s  -  w b          y &lt; -
     *  h b          y + h &gt;  h s  -  h b          z &lt; -  d b          z + d &gt;  d s  -  d b
     *
     * For texture types that do not have certain dimensions, this command treats those dimensions as having a size
     * of 1. For example, to clear a portion of a two-dimensional texture, use $zoffset equal to zero and $depth
     * equal to one.
     *
     * $format and $type specify the format and type of the source data and are interpreted as they are for
     * {@see GL44::texImage3D}. Textures with a base internal format of {@see GL44::GL_DEPTH_COMPONENT},
     * {@see GL44::GL_STENCIL_INDEX}, or {@see GL44::GL_DEPTH_STENCIL} require depth component, stencil, or
     * depth-stencil component data respectively. Textures with other base internal formats require RGBA formats.
     * Textures with integer internal formats require integer data.
     *
     * $data is a pointer to an array of between one and four components of texel data that will be used as the
     * source for the constant fill value. The elements of data are converted by the GL into the internal format of
     * the texture image (that was specified when the level was defined by any of the {@see GL44::texImage*},
     * {@see GL44::texStorage*} or {@see GL44::copyTexImage*} commands), and then used to fill the specified
     * range of the destination texture level. If $data is {@see GL46::NULL}, then the pointer is ignored and the
     * sub-range of the texture image is filled with zeros. If texture is a multisample texture, all the samples in a
     * texel are cleared to the value specified by data.
     *
     * @see http://docs.gl/gl4/glClearTexSubImage
     * @since 4.4
     * @param int $texture
     * @param int $level
     * @param int $xoffset
     * @param int $yoffset
     * @param int $zoffset
     * @param int $width
     * @param int $height
     * @param int $depth
     * @param int $format
     * @param int $type
     * @param CData|null $data
     * @return void
     */
    public function clearTexSubImage(
        int $texture,
        int $level,
        int $xoffset,
        int $yoffset,
        int $zoffset,
        int $width,
        int $height,
        int $depth,
        int $format,
        int $type,
        ?CData $data
    ): void {
        $__proc = $this->proc('glClearTexSubImage',
            'void (*)(GLuint texture, GLint level, GLint xoffset, GLint yoffset, GLint zoffset, GLsizei width, GLsizei height, GLsizei depth, GLenum format, GLenum type, const void *data)');
        $__proc($texture, $level, $xoffset, $yoffset, $zoffset, $width, $height, $depth, $format, $type, $data);
    }
}
