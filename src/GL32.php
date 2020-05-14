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
 * The OpenGL functionality up to version 3.2. Includes the deprecated symbols of the Compatibility Profile.
 *
 * OpenGL 3.2 implementations support revision 1.50 of the OpenGL Shading Language.
 *
 * Extensions promoted to core in this release:
 *
 * - ARB_vertex_array_bgra @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_vertex_array_bgra.txt
 * - ARB_draw_elements_base_vertex @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_draw_elements_base_vertex.txt
 * - ARB_fragment_coord_conventions @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_fragment_coord_conventions.txt
 * - ARB_provoking_vertex @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_provoking_vertex.txt
 * - ARB_seamless_cube_map @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_seamless_cube_map.txt
 * - ARB_texture_multisample @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_texture_multisample.txt
 * - ARB_depth_clamp @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_depth_clamp.txt
 * - ARB_geometry_shader4 @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_geometry_shader4.txt
 * - ARB_sync @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_sync.txt
 *
 * @version 3.2
 */
class GL32 extends GL31
{
    /**
     * Accepted by the $pname parameter of GetIntegerv.
     *
     * @since 3.2
     * @var int 
    */
    public const GL_CONTEXT_PROFILE_MASK = 0x9126;

    /**
     * Context profile bits.
     *
     * @since 3.2
     * @var int 
    */
    public const
        GL_CONTEXT_CORE_PROFILE_BIT          = 0x1,
        GL_CONTEXT_COMPATIBILITY_PROFILE_BIT = 0x2;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetIntegerv, GetFloatv, and GetDoublev.
     *
     * @since 3.2
     * @var int 
    */
    public const
        GL_MAX_VERTEX_OUTPUT_COMPONENTS   = 0x9122,
        GL_MAX_GEOMETRY_INPUT_COMPONENTS  = 0x9123,
        GL_MAX_GEOMETRY_OUTPUT_COMPONENTS = 0x9124,
        GL_MAX_FRAGMENT_INPUT_COMPONENTS  = 0x9125;

    /**
     * Accepted by the $mode parameter of ProvokingVertex.
     *
     * @since 3.2
     * @var int 
    */
    public const
        GL_FIRST_VERTEX_CONVENTION = 0x8E4D,
        GL_LAST_VERTEX_CONVENTION  = 0x8E4E;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetIntegerv, GetFloatv, and GetDoublev.
     *
     * @since 3.2
     * @var int 
    */
    public const
        GL_PROVOKING_VERTEX                         = 0x8E4F,
        GL_QUADS_FOLLOW_PROVOKING_VERTEX_CONVENTION = 0x8E4C;

    /**
     * Accepted by the $cap parameter of Enable, Disable and IsEnabled, and by the $pname parameter of
     * GetBooleanv, GetIntegerv, GetFloatv and
     * GetDoublev.
     *
     * @since 3.2
     * @var int 
    */
    public const GL_TEXTURE_CUBE_MAP_SEAMLESS = 0x884F;

    /**
     * Accepted by the $pname parameter of GetMultisamplefv.
     *
     * @since 3.2
     * @var int 
    */
    public const GL_SAMPLE_POSITION = 0x8E50;

    /**
     * Accepted by the $cap parameter of Enable, Disable, and IsEnabled, and by the $pname parameter of
     * GetBooleanv, GetIntegerv, GetFloatv, and GetDoublev.
     *
     * @since 3.2
     * @var int 
    */
    public const GL_SAMPLE_MASK = 0x8E51;

    /**
     * Accepted by the $target parameter of GetBooleani_v and GetIntegeri_v.
     *
     * @since 3.2
     * @var int 
    */
    public const GL_SAMPLE_MASK_VALUE = 0x8E52;

    /**
     * Accepted by the $target parameter of BindTexture and TexImage2DMultisample.
     *
     * @since 3.2
     * @var int 
    */
    public const GL_TEXTURE_2D_MULTISAMPLE = 0x9100;

    /**
     * Accepted by the $target parameter of TexImage2DMultisample.
     *
     * @since 3.2
     * @var int 
    */
    public const GL_PROXY_TEXTURE_2D_MULTISAMPLE = 0x9101;

    /**
     * Accepted by the $target parameter of BindTexture and TexImage3DMultisample.
     *
     * @since 3.2
     * @var int 
    */
    public const GL_TEXTURE_2D_MULTISAMPLE_ARRAY = 0x9102;

    /**
     * Accepted by the $target parameter of TexImage3DMultisample.
     *
     * @since 3.2
     * @var int 
    */
    public const GL_PROXY_TEXTURE_2D_MULTISAMPLE_ARRAY = 0x9103;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetDoublev, GetIntegerv, and GetFloatv.
     *
     * @since 3.2
     * @var int 
    */
    public const
        GL_MAX_SAMPLE_MASK_WORDS                = 0x8E59,
        GL_MAX_COLOR_TEXTURE_SAMPLES            = 0x910E,
        GL_MAX_DEPTH_TEXTURE_SAMPLES            = 0x910F,
        GL_MAX_INTEGER_SAMPLES                  = 0x9110,
        GL_TEXTURE_BINDING_2D_MULTISAMPLE       = 0x9104,
        GL_TEXTURE_BINDING_2D_MULTISAMPLE_ARRAY = 0x9105;

    /**
     * Accepted by the $pname parameter of GetTexLevelParameter.
     *
     * @since 3.2
     * @var int 
    */
    public const
        GL_TEXTURE_SAMPLES                = 0x9106,
        GL_TEXTURE_FIXED_SAMPLE_LOCATIONS = 0x9107;

    /**
     * Returned by the $type parameter of GetActiveUniform.
     *
     * @since 3.2
     * @var int 
    */
    public const
        GL_SAMPLER_2D_MULTISAMPLE                    = 0x9108,
        GL_INT_SAMPLER_2D_MULTISAMPLE                = 0x9109,
        GL_UNSIGNED_INT_SAMPLER_2D_MULTISAMPLE       = 0x910A,
        GL_SAMPLER_2D_MULTISAMPLE_ARRAY              = 0x910B,
        GL_INT_SAMPLER_2D_MULTISAMPLE_ARRAY          = 0x910C,
        GL_UNSIGNED_INT_SAMPLER_2D_MULTISAMPLE_ARRAY = 0x910D;

    /**
     * Accepted by the $cap parameter of Enable, Disable, and IsEnabled, and by the $pname parameter of
     * GetBooleanv, GetIntegerv, GetFloatv, and GetDoublev.
     *
     * @since 3.2
     * @var int 
    */
    public const GL_DEPTH_CLAMP = 0x864F;

    /**
     * Accepted by the $type parameter of CreateShader and returned by the $params parameter of
     * GetShaderiv.
     *
     * @since 3.2
     * @var int 
    */
    public const GL_GEOMETRY_SHADER = 0x8DD9;

    /**
     * Accepted by the $pname parameter of ProgramParameteri and GetProgramiv.
     *
     * @since 3.2
     * @var int 
    */
    public const
        GL_GEOMETRY_VERTICES_OUT = 0x8DDA,
        GL_GEOMETRY_INPUT_TYPE   = 0x8DDB,
        GL_GEOMETRY_OUTPUT_TYPE  = 0x8DDC;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetIntegerv, GetFloatv, and GetDoublev.
     *
     * @since 3.2
     * @var int 
    */
    public const
        GL_MAX_GEOMETRY_TEXTURE_IMAGE_UNITS     = 0x8C29,
        GL_MAX_GEOMETRY_UNIFORM_COMPONENTS      = 0x8DDF,
        GL_MAX_GEOMETRY_OUTPUT_VERTICES         = 0x8DE0,
        GL_MAX_GEOMETRY_TOTAL_OUTPUT_COMPONENTS = 0x8DE1;

    /**
     * Accepted by the $mode parameter of Begin, DrawArrays, MultiDrawArrays, DrawElements, MultiDrawElements,
     * and DrawRangeElements.
     *
     * @since 3.2
     * @var int 
    */
    public const
        GL_LINES_ADJACENCY          = 0xA,
        GL_LINE_STRIP_ADJACENCY     = 0xB,
        GL_TRIANGLES_ADJACENCY      = 0xC,
        GL_TRIANGLE_STRIP_ADJACENCY = 0xD;

    /**
     * Returned by CheckFramebufferStatus.
     *
     * @since 3.2
     * @var int 
    */
    public const GL_FRAMEBUFFER_INCOMPLETE_LAYER_TARGETS = 0x8DA8;

    /**
     * Accepted by the $pname parameter of GetFramebufferAttachment - Parameteriv.
     *
     * @since 3.2
     * @var int 
    */
    public const GL_FRAMEBUFFER_ATTACHMENT_LAYERED = 0x8DA7;

    /**
     * Accepted by the $cap parameter of Enable, Disable, and IsEnabled, and by the $pname parameter of
     * GetIntegerv, GetFloatv, GetDoublev, and GetBooleanv.
     *
     * @since 3.2
     * @var int 
    */
    public const GL_PROGRAM_POINT_SIZE = 0x8642;

    /**
     * Accepted as the $pname parameter of GetInteger64v.
     *
     * @since 3.2
     * @var int 
    */
    public const GL_MAX_SERVER_WAIT_TIMEOUT = 0x9111;

    /**
     * Accepted as the $pname parameter of GetSynciv.
     *
     * @since 3.2
     * @var int 
    */
    public const
        GL_OBJECT_TYPE    = 0x9112,
        GL_SYNC_CONDITION = 0x9113,
        GL_SYNC_STATUS    = 0x9114,
        GL_SYNC_FLAGS     = 0x9115;

    /**
     * Returned in $values for GetSynciv $pname OBJECT_TYPE.
     *
     * @since 3.2
     * @var int 
    */
    public const GL_SYNC_FENCE = 0x9116;

    /**
     * Returned in $values for GetSynciv $pname SYNC_CONDITION.
     *
     * @since 3.2
     * @var int 
    */
    public const GL_SYNC_GPU_COMMANDS_COMPLETE = 0x9117;

    /**
     * Returned in $values for GetSynciv $pname SYNC_STATUS.
     *
     * @since 3.2
     * @var int 
    */
    public const
        GL_UNSIGNALED = 0x9118,
        GL_SIGNALED   = 0x9119;

    /**
     * Accepted in the $flags parameter of ClientWaitSync.
     *
     * @since 3.2
     * @var int 
    */
    public const GL_SYNC_FLUSH_COMMANDS_BIT = 0x1;

    /**
     * Accepted in the $timeout parameter of WaitSync.
     *
     * @todo CAN NOT BE SUPPORT BY PHP (int64_t overflow)
     * @since 3.2
     * @var float
    */
    public const GL_TIMEOUT_IGNORED = 0xFFFF_FFFF_FFFF_FFFF;

    /**
     * Returned by ClientWaitSync.
     *
     * @since 3.2
     * @var int 
    */
    public const
        GL_ALREADY_SIGNALED    = 0x911A,
        GL_TIMEOUT_EXPIRED     = 0x911B,
        GL_CONDITION_SATISFIED = 0x911C,
        GL_WAIT_FAILED         = 0x911D;

    /**
     * {@see GL32::clientWaitSync} causes the client to block and wait for the sync object specified by $sync to
     * become signaled. If $sync is signaled when {@see GL32::clientWaitSync} is called,
     * {@see GL32::clientWaitSync} returns immediately, otherwise it will block and wait for up to $timeout
     * nanoseconds for $sync to become signaled.
     *
     * The return value is one of four status values:    {@see GL32::GL_ALREADY_SIGNALED} indicates that $sync was
     * signaled at the time that {@see GL32::clientWaitSync} was called.     {@see GL32::GL_TIMEOUT_EXPIRED}
     * indicates that at least $timeout nanoseconds passed and $sync did not become signaled.
     * {@see GL32::GL_CONDITION_SATISFIED} indicates that $sync was signaled before the timeout expired.
     * {@see GL32::GL_WAIT_FAILED} indicates that an error occurred. Additionally, an OpenGL error will be generated.
     *
     * @see http://docs.gl/gl4/glClientWaitSync
     * @since 3.2
     * @param CData|null $sync
     * @param int $flags
     * @param int $timeout
     * @return int
     */
    public function clientWaitSync(?CData $sync, int $flags, int $timeout): int
    {
        $__proc = $this->proc('glClientWaitSync', 'GLenum (*)(GLsync sync, GLbitfield flags, GLuint64 timeout)');
        return $__proc($sync, $flags, $timeout);
    }

    /**
     * {@see GL32::deleteSync} deletes the sync object specified by $sync. If the fence command corresponding to
     * the specified sync object has completed, or if no {@see GL32::waitSync} or {@see GL32::clientWaitSync}
     * commands are blocking on $sync, the object is deleted immediately. Otherwise, $sync is flagged for deletion
     * and will be deleted when it is no longer associated with any fence command and is no longer blocking any
     * {@see GL32::waitSync} or {@see GL32::clientWaitSync} command. In either case, after
     * {@see GL32::deleteSync} returns, the name $sync is invalid and can no longer be used to refer to the sync
     * object.
     *
     * {@see GL32::deleteSync} will silently ignore a $sync value of zero.
     *
     * @see http://docs.gl/gl4/glDeleteSync
     * @since 3.2
     * @param CData|null $sync
     * @return void
     */
    public function deleteSync(?CData $sync): void
    {
        $__proc = $this->proc('glDeleteSync', 'void (*)(GLsync sync)');
        $__proc($sync);
    }

    /**
     * {@see GL32::drawElementsBaseVertex} behaves identically to {@see GL32::drawElements} except that the ith
     * element transferred by the corresponding draw call will be taken from element $indices[i] + $basevertex of
     * each enabled array. If the resulting value is larger than the maximum value representable by $type, it is as
     * if the calculation were upconverted to 32-bit unsigned integers (with wrapping on overflow conditions). The
     * operation is undefined if the sum would be negative.
     *
     * @see http://docs.gl/gl4/glDrawElementsBaseVertex
     * @since 3.2
     * @param int $mode
     * @param int $count
     * @param int $type
     * @param CData|null $indices
     * @param int $basevertex
     * @return void
     */
    public function drawElementsBaseVertex(int $mode, int $count, int $type, ?CData $indices, int $basevertex): void
    {
        $__proc = $this->proc('glDrawElementsBaseVertex', 'void (*)(GLenum mode, GLsizei count, GLenum type, const void *indices, GLint basevertex)');
        $__proc($mode, $count, $type, $indices, $basevertex);
    }

    /**
     * {@see GL32::drawElementsInstancedBaseVertex} behaves identically to {@see GL32::drawElementsInstanced}
     * except that the ith element transferred by the corresponding draw call will be taken from element $indices[i]
     * + $basevertex of each enabled array. If the resulting value is larger than the maximum value representable by
     * $type, it is as if the calculation were upconverted to 32-bit unsigned integers (with wrapping on overflow
     * conditions). The operation is undefined if the sum would be negative.
     *
     * @see http://docs.gl/gl4/glDrawElementsInstancedBaseVertex
     * @since 3.2
     * @param int $mode
     * @param int $count
     * @param int $type
     * @param CData|null $indices
     * @param int $instancecount
     * @param int $basevertex
     * @return void
     */
    public function drawElementsInstancedBaseVertex(int $mode, int $count, int $type, ?CData $indices, int $instancecount, int $basevertex): void
    {
        $__proc = $this->proc('glDrawElementsInstancedBaseVertex', 'void (*)(GLenum mode, GLsizei count, GLenum type, const void *indices, GLsizei instancecount, GLint basevertex)');
        $__proc($mode, $count, $type, $indices, $instancecount, $basevertex);
    }

    /**
     * {@see GL32::drawRangeElementsBaseVertex} is a restricted form of {@see GL32::drawElementsBaseVertex}.
     * $mode, $count and $basevertex match the corresponding arguments to {@see GL32::drawElementsBaseVertex}, with
     * the additional constraint that all values in the array $indices must lie between $start and $end, inclusive,
     * prior to adding $basevertex. Index values lying outside the range [$start, $end] are treated in the same way
     * as {@see GL32::drawElementsBaseVertex}. The ith element transferred by the corresponding draw call will be
     * taken from element $indices[i] + $basevertex of each enabled array. If the resulting value is larger than the
     * maximum value representable by $type, it is as if the calculation were upconverted to 32-bit unsigned integers
     * (with wrapping on overflow conditions). The operation is undefined if the sum would be negative.
     *
     * @see http://docs.gl/gl4/glDrawRangeElementsBaseVertex
     * @since 3.2
     * @param int $mode
     * @param int $start
     * @param int $end
     * @param int $count
     * @param int $type
     * @param CData|null $indices
     * @param int $basevertex
     * @return void
     */
    public function drawRangeElementsBaseVertex(int $mode, int $start, int $end, int $count, int $type, ?CData $indices, int $basevertex): void
    {
        $__proc = $this->proc('glDrawRangeElementsBaseVertex', 'void (*)(GLenum mode, GLuint start, GLuint end, GLsizei count, GLenum type, const void *indices, GLint basevertex)');
        $__proc($mode, $start, $end, $count, $type, $indices, $basevertex);
    }

    /**
     * {@see GL32::fenceSync} creates a new fence sync object, inserts a fence command into the GL command stream
     * and associates it with that sync object, and returns a non-zero name corresponding to the sync object.
     *
     * When the specified $condition of the sync object is satisfied by the fence command, the sync object is
     * signaled by the GL, causing any {@see GL32::waitSync}, {@see GL32::clientWaitSync} commands blocking in
     * $sync to unblock. No other state is affected by {@see GL32::fenceSync} or by the execution of the associated
     * fence command.
     *
     * $condition must be {@see GL32::GL_SYNC_GPU_COMMANDS_COMPLETE}. This condition is satisfied by completion of
     * the fence command corresponding to the sync object and all preceding commands in the same command stream. The
     * sync object will not be signaled until all effects from these commands on GL client and server state and the
     * framebuffer are fully realized. Note that completion of the fence command occurs once the state of the
     * corresponding sync object has been changed, but commands waiting on that sync object may not be unblocked
     * until after the fence command completes.
     *
     * @see http://docs.gl/gl4/glFenceSync
     * @since 3.2
     * @param int $condition
     * @param int $flags
     * @return CData
     */
    public function fenceSync(int $condition, int $flags): CData
    {
        $__proc = $this->proc('glFenceSync', 'GLsync (*)(GLenum condition, GLbitfield flags)');
        return $__proc($condition, $flags);
    }

    /**
     * These commands attach a selected mipmap level or image of a texture object as one of the logical buffers of
     * the specified framebuffer object. Textures cannot be attached to the default draw and read framebuffer, so
     * they are not valid targets of these commands.
     *
     * For all commands except {@see GL32::namedFramebufferTexture}, the framebuffer object is that bound to
     * $target, which must be {@see GL32::GL_DRAW_FRAMEBUFFER}, {@see GL32::GL_READ_FRAMEBUFFER}, or
     * {@see GL32::GL_FRAMEBUFFER}. {@see GL32::GL_FRAMEBUFFER} is equivalent to {@see GL32::GL_DRAW_FRAMEBUFFER}.
     *
     * For {@see GL32::namedFramebufferTexture}, $framebuffer is the name of the framebuffer object.
     *
     * $attachment specifies the logical attachment of the framebuffer and must be {@see GL32::GL_COLOR_ATTACHMENT}i,
     * {@see GL32::GL_DEPTH_ATTACHMENT}, {@see GL32::GL_STENCIL_ATTACHMENT} or
     * {@see GL32::GL_DEPTH_STENCIL_ATTACHMENT}. i in {@see GL32::GL_COLOR_ATTACHMENT}i may range from zero to the
     * value of {@see GL32::GL_MAX_COLOR_ATTACHMENTS} minus one. Attaching a level of a texture to
     * {@see GL32::GL_DEPTH_STENCIL_ATTACHMENT} is equivalent to attaching that level to both the
     * {@see GL32::GL_DEPTH_ATTACHMENT} and the {@see GL32::GL_STENCIL_ATTACHMENT} attachment points simultaneously.
     *
     * For {@see GL32::framebufferTexture1D}, {@see GL32::framebufferTexture2D} and
     * {@see GL32::framebufferTexture3D}, $textarget specifies what type of texture is named by $texture, and for
     * cube map textures, specifies the face that is to be attached. If $texture is not zero, it must be the name of
     * an existing texture object with effective target $textarget unless it is a cube map texture, in which case
     * $textarget must be {@see GL32::GL_TEXTURE_CUBE_MAP_POSITIVE_X} {@see GL32::GL_TEXTURE_CUBE_MAP_NEGATIVE_X},
     * {@see GL32::GL_TEXTURE_CUBE_MAP_POSITIVE_Y}, {@see GL32::GL_TEXTURE_CUBE_MAP_NEGATIVE_Y},
     * {@see GL32::GL_TEXTURE_CUBE_MAP_POSITIVE_Z}, or {@see GL32::GL_TEXTURE_CUBE_MAP_NEGATIVE_Z}.
     *
     * If $texture is non-zero, the specified $level of the texture object named $texture is attached to the
     * framebfufer attachment point named by $attachment. For {@see GL32::framebufferTexture1D},
     * {@see GL32::framebufferTexture2D}, and {@see GL32::framebufferTexture3D}, $texture must be zero or the
     * name of an existing texture with an effective target of $textarget, or $texture must be the name of an
     * existing cube-map texture and $textarget must be one of {@see GL32::GL_TEXTURE_CUBE_MAP_POSITIVE_X},
     * {@see GL32::GL_TEXTURE_CUBE_MAP_POSITIVE_Y}, {@see GL32::GL_TEXTURE_CUBE_MAP_POSITIVE_Z},
     * {@see GL32::GL_TEXTURE_CUBE_MAP_NEGATIVE_X}, {@see GL32::GL_TEXTURE_CUBE_MAP_NEGATIVE_Y}, or
     * {@see GL32::GL_TEXTURE_CUBE_MAP_NEGATIVE_Z}.
     *
     * If $textarget is {@see GL32::GL_TEXTURE_RECTANGLE}, {@see GL32::GL_TEXTURE_2D_MULTISAMPLE}, or
     * {@see GL32::GL_TEXTURE_2D_MULTISAMPLE_ARRAY}, then $level must be zero.
     *
     * If $textarget is {@see GL32::GL_TEXTURE_3D}, then $level must be greater than or equal to zero and less than
     * or equal to $log_2$ of the value of {@see GL32::GL_MAX_3D_TEXTURE_SIZE}.
     *
     * If $textarget is one of {@see GL32::GL_TEXTURE_CUBE_MAP_POSITIVE_X},
     * {@see GL32::GL_TEXTURE_CUBE_MAP_POSITIVE_Y}, {@see GL32::GL_TEXTURE_CUBE_MAP_POSITIVE_Z},
     * {@see GL32::GL_TEXTURE_CUBE_MAP_NEGATIVE_X}, {@see GL32::GL_TEXTURE_CUBE_MAP_NEGATIVE_Y}, or
     * {@see GL32::GL_TEXTURE_CUBE_MAP_NEGATIVE_Z}, then $level must be greater than or equal to zero and less than
     * or equal to $log_2$ of the value of {@see GL32::GL_MAX_CUBE_MAP_TEXTURE_SIZE}.
     *
     * For all other values of $textarget, $level must be greater than or equal to zero and less than or equal to
     * $log_2$ of the value of {@see GL32::GL_MAX_TEXTURE_SIZE}.
     *
     * $layer specifies the layer of a 2-dimensional image within a 3-dimensional texture.
     *
     * For {@see GL32::framebufferTexture1D}, if $texture is not zero, then $textarget must be
     * {@see GL32::GL_TEXTURE_1D}. For {@see GL32::framebufferTexture2D}, if $texture is not zero, $textarget must
     * be one of {@see GL32::GL_TEXTURE_2D}, {@see GL32::GL_TEXTURE_RECTANGLE},
     * {@see GL32::GL_TEXTURE_CUBE_MAP_POSITIVE_X}, {@see GL32::GL_TEXTURE_CUBE_MAP_POSITIVE_Y},
     * {@see GL32::GL_TEXTURE_CUBE_MAP_POSITIVE_Z}, {@see GL32::GL_TEXTURE_CUBE_MAP_NEGATIVE_X},
     * {@see GL32::GL_TEXTURE_CUBE_MAP_NEGATIVE_Y}, {@see GL32::GL_TEXTURE_CUBE_MAP_NEGATIVE_Z}, or
     * {@see GL32::GL_TEXTURE_2D_MULTISAMPLE}. For {@see GL32::framebufferTexture3D}, if $texture is not zero, then
     * $textarget must be {@see GL32::GL_TEXTURE_3D}.
     *
     * For {@see GL32::framebufferTexture} and {@see GL32::namedFramebufferTexture}, if $texture is the name of a
     * three-dimensional, cube map array, cube map, one- or two-dimensional array, or two-dimensional multisample
     * array texture, the specified texture level is an array of images, and the framebuffer attachment is considered
     * to be layered.
     *
     * @see http://docs.gl/gl4/glFramebufferTexture
     * @since 3.2
     * @param int $target
     * @param int $attachment
     * @param int $texture
     * @param int $level
     * @return void
     */
    public function framebufferTexture(int $target, int $attachment, int $texture, int $level): void
    {
        $__proc = $this->proc('glFramebufferTexture', 'void (*)(GLenum target, GLenum attachment, GLuint texture, GLint level)');
        $__proc($target, $attachment, $texture, $level);
    }

    /**
     * {@see GL32::getBufferParameteriv} returns in $data a selected parameter of the buffer object specified by
     * $target.
     *
     * $value names a specific buffer object parameter, as follows:
     *
     *  - {@see GL32::GL_BUFFER_ACCESS}: $params returns the access policy set
     *    while mapping the buffer object. The initial value is
     *    {@see GL32::GL_READ_WRITE}.
     *
     *  - {@see GL32::GL_BUFFER_MAPPED}: $params returns a flag indicating
     *    whether the buffer object is currently mapped. The initial value is
     *    {@see GL32::GL_FALSE}.
     *
     *  - {@see GL32::GL_BUFFER_SIZE}: $params returns the size of the buffer
     *    object, measured in bytes. The initial value is 0.
     *
     *  - {@see GL32::GL_BUFFER_USAGE}: $params returns the buffer object's
     *    usage pattern. The initial value is {@see GL32::GL_STATIC_DRAW}.
     *
     * @see http://docs.gl/gl2/glGetBufferParameteriv
     * @since 3.2
     * @param int $target
     * @param int $pname
     * @param int|null $params
     * @return void
     */
    public function getBufferParameteri64v(int $target, int $pname, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLint64', false);
        try {
            $__proc = $this->proc('glGetBufferParameteri64v', 'void (*)(GLenum target, GLenum pname, GLint64 *params)');
            $__proc($target, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL32::getQueryiv} returns in $params a selected parameter of the query object target specified by
     * $target.
     *
     * $pname names a specific query object target parameter. When $pname is {@see GL32::GL_CURRENT_QUERY}, the name
     * of the currently active query for $target, or zero if no query is active, will be placed in $params. If $pname
     * is {@see GL32::GL_QUERY_COUNTER_BITS}, the implementation-dependent number of bits used to hold the result of
     * queries for $target is returned in $params.
     *
     * @see http://docs.gl/gl2/glGetMaterial
     * @see http://docs.gl/gl2/glGetQueryiv
     * @see http://docs.gl/gl4/glGetQueryiv
     * @since 3.2
     * @param int $target
     * @param int $index
     * @param int|null $data
     * @return void
     */
    public function getInteger64i_v(int $target, int $index, ?int &$data): void
    {
        $dataCType = $this->info->ffi->new('GLint64', false);
        try {
            $__proc = $this->proc('glGetInteger64i_v', 'void (*)(GLenum target, GLuint index, GLint64 *data)');
            $__proc($target, $index, \FFI::addr($dataCType));
        } finally {
            $data = $dataCType->cdata;
            \FFI::free($dataCType);
        }
    }

    /**
     * {@see GL32::getQueryiv} returns in $params a selected parameter of the query object target specified by
     * $target.
     *
     * $pname names a specific query object target parameter. When $pname is {@see GL32::GL_CURRENT_QUERY}, the name
     * of the currently active query for $target, or zero if no query is active, will be placed in $params. If $pname
     * is {@see GL32::GL_QUERY_COUNTER_BITS}, the implementation-dependent number of bits used to hold the result of
     * queries for $target is returned in $params.
     *
     * @see http://docs.gl/gl2/glGetMaterial
     * @see http://docs.gl/gl2/glGetPointerv
     * @see http://docs.gl/gl2/glGetQueryiv
     * @see http://docs.gl/gl4/glGetPointerv
     * @see http://docs.gl/gl4/glGetQueryiv
     * @since 3.2
     * @param int $pname
     * @param int|null $data
     * @return void
     */
    public function getInteger64v(int $pname, ?int &$data): void
    {
        $dataCType = $this->info->ffi->new('GLint64', false);
        try {
            $__proc = $this->proc('glGetInteger64v', 'void (*)(GLenum pname, GLint64 *data)');
            $__proc($pname, \FFI::addr($dataCType));
        } finally {
            $data = $dataCType->cdata;
            \FFI::free($dataCType);
        }
    }

    /**
     * {@see GL32::getMultisamplefv} queries the location of a given sample. $pname specifies the sample parameter
     * to retrieve and must be {@see GL32::GL_SAMPLE_POSITION}. $index corresponds to the sample for which the
     * location should be returned. The sample location is returned as two floating-point values in $val[0] and
     * $val[1], each between 0 and 1, corresponding to the $x and $y locations respectively in the GL pixel space of
     * that sample. (0.5, 0.5) this corresponds to the pixel center. $index must be between zero and the value of
     * {@see GL32::GL_SAMPLES} minus one.
     *
     * If the multisample mode does not have fixed sample locations, the returned values may only reflect the
     * locations of samples within some pixels.
     *
     * @see http://docs.gl/gl4/glGetMultisample
     * @since 3.2
     * @param int $pname
     * @param int $index
     * @param float|null $val
     * @return void
     */
    public function getMultisamplefv(int $pname, int $index, ?float &$val): void
    {
        $valCType = $this->info->ffi->new('GLfloat', false);
        try {
            $__proc = $this->proc('glGetMultisamplefv', 'void (*)(GLenum pname, GLuint index, GLfloat *val)');
            $__proc($pname, $index, \FFI::addr($valCType));
        } finally {
            $val = $valCType->cdata;
            \FFI::free($valCType);
        }
    }

    /**
     * {@see GL32::getSynciv} retrieves properties of a sync object. $sync specifies the name of the sync object
     * whose properties to retrieve.
     *
     * On success, {@see GL32::getSynciv} replaces up to $bufSize integers in $values with the corresponding
     * property values of the object being queried. The actual number of integers replaced is returned in the
     * variable whose address is specified in $length. If $length is `NULL`, no length is returned.
     *
     * If $pname is {@see GL32::GL_OBJECT_TYPE}, a single value representing the specific type of the sync object is
     * placed in $values. The only type supported is {@see GL32::GL_SYNC_FENCE}.
     *
     * If $pname is {@see GL32::GL_SYNC_STATUS}, a single value representing the status of the sync object
     * ({@see GL32::GL_SIGNALED} or {@see GL32::GL_UNSIGNALED}) is placed in $values.
     *
     * If $pname is {@see GL32::GL_SYNC_CONDITION}, a single value representing the condition of the sync object is
     * placed in $values. The only condition supported is {@see GL32::GL_SYNC_GPU_COMMANDS_COMPLETE}.
     *
     * If $pname is {@see GL32::GL_SYNC_FLAGS}, a single value representing the flags with which the sync object was
     * created is placed in $values. No flags are currently supported$flags is expected to be used in future
     * extensions to the sync objects..
     *
     * If an error occurs, nothing will be written to $values or $length.
     *
     * @see http://docs.gl/gl4/glGetSync
     * @since 3.2
     * @param CData|null $sync
     * @param int $pname
     * @param int $bufSize
     * @param int|null $length
     * @param int|null $values
     * @return void
     */
    public function getSynciv(?CData $sync, int $pname, int $bufSize, ?int &$length, ?int &$values): void
    {
        $lengthCType = $this->info->ffi->new('GLsizei', false);
        $valuesCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->proc('glGetSynciv', 'void (*)(GLsync sync, GLenum pname, GLsizei bufSize, GLsizei *length, GLint *values)');
            $__proc($sync, $pname, $bufSize, \FFI::addr($lengthCType), \FFI::addr($valuesCType));
        } finally {
            $length = $lengthCType->cdata;
            \FFI::free($lengthCType);
            $values = $valuesCType->cdata;
            \FFI::free($valuesCType);
        }
    }

    /**
     * {@see GL32::isSync} returns {@see GL32::GL_TRUE} if $sync is currently the name of a sync object. If $sync
     * is not the name of a sync object, or if an error occurs, {@see GL32::isSync} returns {@see GL32::GL_FALSE}.
     * Note that zero is not the name of a sync object.
     *
     * @see http://docs.gl/gl4/glIsSync
     * @since 3.2
     * @param CData|null $sync
     * @return bool
     */
    public function isSync(?CData $sync): bool
    {
        $__proc = $this->proc('glIsSync', 'GLboolean (*)(GLsync sync)');
        return $__proc($sync) !== 0;
    }

    /**
     * {@see GL32::multiDrawElementsBaseVertex} behaves identically to {@see GL32::drawElementsBaseVertex},
     * except that $drawcount separate lists of elements are specifried instead.
     *
     * <code>
     *     for (int i = 0; i < <parameter>drawcount</parameter>; i++)
     *         if (<parameter>count</parameter>[i] > 0)
     *             glDrawElementsBaseVertex(<parameter>mode</parameter>,
     *                                      <parameter>count</parameter>[i],
     *                                      <parameter>type</parameter>,
     *                                      <parameter>indices[i]</parameter>,
     *                                      <parameter>basevertex[i]</parameter>);
     * </code>
     *
     * @see http://docs.gl/gl4/glMultiDrawElementsBaseVertex
     * @since 3.2
     * @param int $mode
     * @param CData|null $count
     * @param int $type
     * @param CData|null $indices
     * @param int $drawcount
     * @param CData|null $basevertex
     * @return void
     */
    public function multiDrawElementsBaseVertex(int $mode, ?CData $count, int $type, ?CData $indices, int $drawcount, ?CData $basevertex): void
    {
        $__proc = $this->proc('glMultiDrawElementsBaseVertex', 'void (*)(GLenum mode, const GLsizei *count, GLenum type, const void *const *indices, GLsizei drawcount, const GLint *basevertex)');
        $__proc($mode, $count, $type, $indices, $drawcount, $basevertex);
    }

    /**
     * Flatshading a vertex shader varying output means to assign all vetices of the primitive the same value for
     * that output. The vertex from which these values is derived is known as the provoking vertex and
     * {@see GL32::provokingVertex} specifies which vertex is to be used as the source of data for flat shaded
     * varyings.
     *
     * $provokeMode must be either {@see GL32::GL_FIRST_VERTEX_CONVENTION} or {@see GL32::GL_LAST_VERTEX_CONVENTION},
     * and controls the selection of the vertex whose values are assigned to flatshaded varying outputs. The
     * interpretation of these values for the supported primitive types is:          Primitive Type of Polygon i
     * First Vertex Convention     Last Vertex Convention        point   i   i     independent line   2i - 1   2i
     * line loop   i    i + 1, if i &lt; n   1, if i = n      line strip   i   i + 1     independent triangle   3i -
     * 2   3i     triangle strip   i   i + 2     triangle fan   i + 1   i + 2     line adjacency   4i - 2   4i - 1
     *  line strip adjacency   i + 1   i + 2     triangle adjacency   6i - 5   6i - 1     triangle strip adjacency
     * 2i - 1   2i + 3
     *
     * If a vertex or geometry shader is active, user-defined varying outputs may be flatshaded by using the `flat`
     * qualifier when declaring the output.
     *
     * @see http://docs.gl/gl4/glProvokingVertex
     * @since 3.2
     * @param int $mode
     * @return void
     */
    public function provokingVertex(int $mode): void
    {
        $__proc = $this->proc('glProvokingVertex', 'void (*)(GLenum mode)');
        $__proc($mode);
    }

    /**
     * {@see GL32::sampleMaski} sets one 32-bit sub-word of the multi-word sample mask,
     * {@see GL32::GL_SAMPLE_MASK_VALUE}.
     *
     * $maskIndex specifies which 32-bit sub-word of the sample mask to update, and $mask specifies the new value to
     * use for that sub-word. $maskIndex must be less than the value of {@see GL32::GL_MAX_SAMPLE_MASK_WORDS}. Bit B
     * of mask word M corresponds to sample 32 x M + B.
     *
     * @see http://docs.gl/gl4/glSampleMaski
     * @since 3.2
     * @param int $maskNumber
     * @param int $mask
     * @return void
     */
    public function sampleMaski(int $maskNumber, int $mask): void
    {
        $__proc = $this->proc('glSampleMaski', 'void (*)(GLuint maskNumber, GLbitfield mask)');
        $__proc($maskNumber, $mask);
    }

    /**
     * {@see GL32::texImage2DMultisample} establishes the data storage, format, dimensions and number of samples of
     * a multisample texture's image.
     *
     * $target must be {@see GL32::GL_TEXTURE_2D_MULTISAMPLE} or {@see GL32::GL_PROXY_TEXTURE_2D_MULTISAMPLE}. $width
     * and $height are the dimensions in texels of the texture, and must be in the range zero to the value of
     * {@see GL32::GL_MAX_TEXTURE_SIZE} minus one. $samples specifies the number of samples in the image and must be
     * in the range zero to the value of {@see GL32::GL_MAX_SAMPLES} minus one.
     *
     * $internalformat must be a color-renderable, depth-renderable, or stencil-renderable format.
     *
     * If $fixedsamplelocations is {@see GL32::GL_TRUE}, the image will use identical sample locations and the same
     * number of samples for all texels in the image, and the sample locations will not depend on the internal format
     * or size of the image.
     *
     * When a multisample texture is accessed in a shader, the access takes one vector of integers describing which
     * texel to fetch and an integer corresponding to the sample numbers describing which sample within the texel to
     * fetch. No standard sampling instructions are allowed on the multisample texture targets.
     *
     * @see http://docs.gl/gl4/glTexImage2DMultisample
     * @since 3.2
     * @param int $target
     * @param int $samples
     * @param int $internalformat
     * @param int $width
     * @param int $height
     * @param int $fixedsamplelocations
     * @return void
     */
    public function texImage2DMultisample(int $target, int $samples, int $internalformat, int $width, int $height, int $fixedsamplelocations): void
    {
        $__proc = $this->proc('glTexImage2DMultisample', 'void (*)(GLenum target, GLsizei samples, GLenum internalformat, GLsizei width, GLsizei height, GLboolean fixedsamplelocations)');
        $__proc($target, $samples, $internalformat, $width, $height, $fixedsamplelocations);
    }

    /**
     * {@see GL32::texImage3DMultisample} establishes the data storage, format, dimensions and number of samples of
     * a multisample texture's image.
     *
     * $target must be {@see GL32::GL_TEXTURE_2D_MULTISAMPLE_ARRAY} or
     * {@see GL32::GL_PROXY_TEXTURE_2D_MULTISAMPLE_ARRAY}. $width and $heightare the dimensions in texels of the
     * texture, and must be in the range zero to the value of {@see GL32::GL_MAX_TEXTURE_SIZE} minus one. $depth is
     * the number of array slices in the array texture's image. $samples specifies the number of samples in the image
     * and must be in the range zero to the value of {@see GL32::GL_MAX_SAMPLES} minus one.
     *
     * $internalformat must be a color-renderable, depth-renderable, or stencil-renderable format.
     *
     * If $fixedsamplelocations is {@see GL32::GL_TRUE}, the image will use identical sample locations and the same
     * number of samples for all texels in the image, and the sample locations will not depend on the internal format
     * or size of the image.
     *
     * When a multisample texture is accessed in a shader, the access takes one vector of integers describing which
     * texel to fetch and an integer corresponding to the sample numbers describing which sample within the texel to
     * fetch. No standard sampling instructions are allowed on the multisample texture targets.
     *
     * @see http://docs.gl/gl4/glTexImage3DMultisample
     * @since 3.2
     * @param int $target
     * @param int $samples
     * @param int $internalformat
     * @param int $width
     * @param int $height
     * @param int $depth
     * @param int $fixedsamplelocations
     * @return void
     */
    public function texImage3DMultisample(int $target, int $samples, int $internalformat, int $width, int $height, int $depth, int $fixedsamplelocations): void
    {
        $__proc = $this->proc('glTexImage3DMultisample', 'void (*)(GLenum target, GLsizei samples, GLenum internalformat, GLsizei width, GLsizei height, GLsizei depth, GLboolean fixedsamplelocations)');
        $__proc($target, $samples, $internalformat, $width, $height, $depth, $fixedsamplelocations);
    }

    /**
     * {@see GL32::waitSync} causes the GL server to block and wait until $sync becomes signaled. $sync is the name
     * of an existing sync object upon which to wait. $flags and $timeout are currently not used and must be set to
     * zero and the special value {@see GL32::GL_TIMEOUT_IGNORED}, respectively$flags and $timeout are placeholders
     * for anticipated future extensions of sync object capabilities. They must have these reserved values in order
     * that existing code calling {@see GL32::waitSync} operate properly in the presence of such extensions..
     * {@see GL32::waitSync} will always wait no longer than an implementation-dependent timeout. The duration of
     * this timeout in nanoseconds may be queried by calling {@see GL32::get} with the parameter
     * {@see GL32::GL_MAX_SERVER_WAIT_TIMEOUT}. There is currently no way to determine whether
     * {@see GL32::waitSync} unblocked because the timeout expired or because the sync object being waited on was
     * signaled.
     *
     * If an error occurs, {@see GL32::waitSync} does not cause the GL server to block.
     *
     * @see http://docs.gl/gl4/glWaitSync
     * @since 3.2
     * @param CData|null $sync
     * @param int $flags
     * @param int $timeout
     * @return void
     */
    public function waitSync(?CData $sync, int $flags, int $timeout): void
    {
        $__proc = $this->proc('glWaitSync', 'void (*)(GLsync sync, GLbitfield flags, GLuint64 timeout)');
        $__proc($sync, $flags, $timeout);
    }
}
