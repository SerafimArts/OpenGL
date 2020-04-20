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
 */
class GL32 extends GL31
{
    /**
     * @var int
     * @since 3.2
     */
    public const GL_CONTEXT_CORE_PROFILE_BIT = 0x0001;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_CONTEXT_COMPATIBILITY_PROFILE_BIT = 0x0002;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_LINES_ADJACENCY = 0x000a;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_LINE_STRIP_ADJACENCY = 0x000b;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_TRIANGLES_ADJACENCY = 0x000c;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_TRIANGLE_STRIP_ADJACENCY = 0x000d;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_PROGRAM_POINT_SIZE = 0x8642;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_MAX_GEOMETRY_TEXTURE_IMAGE_UNITS = 0x8c29;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_FRAMEBUFFER_ATTACHMENT_LAYERED = 0x8da7;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_FRAMEBUFFER_INCOMPLETE_LAYER_TARGETS = 0x8da8;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_GEOMETRY_SHADER = 0x8dd9;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_GEOMETRY_VERTICES_OUT = 0x8916;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_GEOMETRY_INPUT_TYPE = 0x8917;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_GEOMETRY_OUTPUT_TYPE = 0x8918;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_MAX_GEOMETRY_UNIFORM_COMPONENTS = 0x8ddf;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_MAX_GEOMETRY_OUTPUT_VERTICES = 0x8de0;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_MAX_GEOMETRY_TOTAL_OUTPUT_COMPONENTS = 0x8de1;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_MAX_VERTEX_OUTPUT_COMPONENTS = 0x9122;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_MAX_GEOMETRY_INPUT_COMPONENTS = 0x9123;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_MAX_GEOMETRY_OUTPUT_COMPONENTS = 0x9124;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_MAX_FRAGMENT_INPUT_COMPONENTS = 0x9125;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_CONTEXT_PROFILE_MASK = 0x9126;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_DEPTH_CLAMP = 0x864f;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_QUADS_FOLLOW_PROVOKING_VERTEX_CONVENTION = 0x8e4c;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_FIRST_VERTEX_CONVENTION = 0x8e4d;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_LAST_VERTEX_CONVENTION = 0x8e4e;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_PROVOKING_VERTEX = 0x8e4f;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_TEXTURE_CUBE_MAP_SEAMLESS = 0x884f;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_MAX_SERVER_WAIT_TIMEOUT = 0x9111;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_OBJECT_TYPE = 0x9112;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_SYNC_CONDITION = 0x9113;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_SYNC_STATUS = 0x9114;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_SYNC_FLAGS = 0x9115;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_SYNC_FENCE = 0x9116;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_SYNC_GPU_COMMANDS_COMPLETE = 0x9117;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_UNSIGNALED = 0x9118;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_SIGNALED = 0x9119;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_ALREADY_SIGNALED = 0x911a;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_TIMEOUT_EXPIRED = 0x911b;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_CONDITION_SATISFIED = 0x911c;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_WAIT_FAILED = 0x911d;
    /**
     * @var string
     * @since 3.2
     */
    public const GL_TIMEOUT_IGNORED = 0xffffffffffffffff;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_SYNC_FLUSH_COMMANDS_BIT = 0x0001;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_SAMPLE_POSITION = 0x8e50;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_SAMPLE_MASK = 0x8e51;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_SAMPLE_MASK_VALUE = 0x8e52;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_MAX_SAMPLE_MASK_WORDS = 0x8e59;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_TEXTURE_2D_MULTISAMPLE = 0x9100;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_PROXY_TEXTURE_2D_MULTISAMPLE = 0x9101;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_TEXTURE_2D_MULTISAMPLE_ARRAY = 0x9102;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_PROXY_TEXTURE_2D_MULTISAMPLE_ARRAY = 0x9103;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_TEXTURE_BINDING_2D_MULTISAMPLE = 0x9104;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_TEXTURE_BINDING_2D_MULTISAMPLE_ARRAY = 0x9105;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_TEXTURE_SAMPLES = 0x9106;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_TEXTURE_FIXED_SAMPLE_LOCATIONS = 0x9107;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_SAMPLER_2D_MULTISAMPLE = 0x9108;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_INT_SAMPLER_2D_MULTISAMPLE = 0x9109;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_UNSIGNED_INT_SAMPLER_2D_MULTISAMPLE = 0x910a;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_SAMPLER_2D_MULTISAMPLE_ARRAY = 0x910b;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_INT_SAMPLER_2D_MULTISAMPLE_ARRAY = 0x910c;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_UNSIGNED_INT_SAMPLER_2D_MULTISAMPLE_ARRAY = 0x910d;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_MAX_COLOR_TEXTURE_SAMPLES = 0x910e;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_MAX_DEPTH_TEXTURE_SAMPLES = 0x910f;
    /**
     * @var int
     * @since 3.2
     */
    public const GL_MAX_INTEGER_SAMPLES = 0x9110;

    /**
     * Behaves identically to {@see glDrawElements} except that the *i*th element transferred by the
     * corresponding draw call will be taken from element *`indices`*[i] + *`basevertex`* of each enabled array. If
     * the resulting value is larger than the maximum value representable by *`type`*, it is as if the calculation
     * were upconverted to 32-bit unsigned integers (with wrapping on overflow conditions). The operation is
     * undefined if the sum would be negative.
     *
     * @see http://docs.gl/gl3/glDrawElementsBaseVertex
     * @see http://docs.gl/gl4/glDrawElementsBaseVertex
     * @since 3.2
     * @param int $mode
     * @param int $count
     * @param int $type
     * @param \FFI\CData|\FFI\CPtr|null $indices
     * @param int $basevertex
     * @return void
     */
    public static function glDrawElementsBaseVertex(int $mode, int $count, int $type, ?\FFI\CData $indices, int $basevertex): void
    {
        assert(version_compare(self::$info->version, '3.2') >= 0, __FUNCTION__ . ' is available since OpenGL 3.2, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');
        assert($basevertex >= \PHP_INT_MIN && $basevertex <= \PHP_INT_MAX, 'Argument $basevertex overflow: C type GLint is required');

        $proc = self::getProc('glDrawElementsBaseVertex', 'void (*)(GLenum mode, GLsizei count, GLenum type, const void *indices, GLint basevertex)');
        $proc($mode, $count, $type, $indices, $basevertex);
    }

    /**
     * Is a restricted form of {@see glDrawElementsBaseVertex}. *`mode`*, *`start`*, *`end`*,
     * *`count`* and *`basevertex`* match the corresponding arguments to
     * {@see glDrawElementsBaseVertex}, with the additional constraint that all values in the
     * array *`indices`* must lie between *`start`* and *`end`*, inclusive, prior to adding *`basevertex`*. Index
     * values lying outside the range [*`start`*, *`end`*] are treated in the same way as
     * {@see glDrawElementsBaseVertex}. The *i*th element transferred by the corresponding draw
     * call will be taken from element *`indices`*[i] + *`basevertex`* of each enabled array. If the resulting value
     * is larger than the maximum value representable by *`type`*, it is as if the calculation were upconverted to
     * 32-bit unsigned integers (with wrapping on overflow conditions). The operation is undefined if the sum would
     * be negative.
     *
     * @see http://docs.gl/gl3/glDrawRangeElementsBaseVertex
     * @see http://docs.gl/gl4/glDrawRangeElementsBaseVertex
     * @since 3.2
     * @param int $mode
     * @param int $start
     * @param int $end
     * @param int $count
     * @param int $type
     * @param \FFI\CData|\FFI\CPtr|null $indices
     * @param int $basevertex
     * @return void
     */
    public static function glDrawRangeElementsBaseVertex(int $mode, int $start, int $end, int $count, int $type, ?\FFI\CData $indices, int $basevertex): void
    {
        assert(version_compare(self::$info->version, '3.2') >= 0, __FUNCTION__ . ' is available since OpenGL 3.2, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');
        assert($start >= 0 && $start <= 4_294_967_295, 'Argument $start overflow: C type GLuint is required');
        assert($end >= 0 && $end <= 4_294_967_295, 'Argument $end overflow: C type GLuint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');
        assert($basevertex >= \PHP_INT_MIN && $basevertex <= \PHP_INT_MAX, 'Argument $basevertex overflow: C type GLint is required');

        $proc = self::getProc('glDrawRangeElementsBaseVertex', 'void (*)(GLenum mode, GLuint start, GLuint end, GLsizei count, GLenum type, const void *indices, GLint basevertex)');
        $proc($mode, $start, $end, $count, $type, $indices, $basevertex);
    }

    /**
     * Behaves identically to {@see glDrawElementsInstanced} except that the *i*th element
     * transferred by the corresponding draw call will be taken from element *`indices`*[i] + *`basevertex`* of each
     * enabled array. If the resulting value is larger than the maximum value representable by *`type`*, it is as if
     * the calculation were upconverted to 32-bit unsigned integers (with wrapping on overflow conditions). The
     * operation is undefined if the sum would be negative.
     *
     * @see http://docs.gl/gl3/glDrawElementsInstancedBaseVertex
     * @see http://docs.gl/gl4/glDrawElementsInstancedBaseVertex
     * @since 3.2
     * @param int $mode
     * @param int $count
     * @param int $type
     * @param \FFI\CData|\FFI\CPtr|null $indices
     * @param int $instancecount
     * @param int $basevertex
     * @return void
     */
    public static function glDrawElementsInstancedBaseVertex(int $mode, int $count, int $type, ?\FFI\CData $indices, int $instancecount, int $basevertex): void
    {
        assert(version_compare(self::$info->version, '3.2') >= 0, __FUNCTION__ . ' is available since OpenGL 3.2, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');
        assert($instancecount >= \PHP_INT_MIN && $instancecount <= \PHP_INT_MAX, 'Argument $instancecount overflow: C type GLsizei is required');
        assert($basevertex >= \PHP_INT_MIN && $basevertex <= \PHP_INT_MAX, 'Argument $basevertex overflow: C type GLint is required');

        $proc = self::getProc('glDrawElementsInstancedBaseVertex', 'void (*)(GLenum mode, GLsizei count, GLenum type, const void *indices, GLsizei instancecount, GLint basevertex)');
        $proc($mode, $count, $type, $indices, $instancecount, $basevertex);
    }

    /**
     * Behaves identically to {@see glDrawElementsBaseVertex}, except that *`primcount`*
     * separate lists of elements are specifried instead.
     *
     * It has the same effect as:
     *
     *  - ```
     * for (int i = 0; i < primcount; i++)
     * if (count[i] > 0)
     * glDrawElementsBaseVertex(mode,
     * count[i],
     * type,
     * indices[i],
     * basevertex[i]);
     *  - ```
     *
     * @see http://docs.gl/gl3/glMultiDrawElementsBaseVertex
     * @see http://docs.gl/gl4/glMultiDrawElementsBaseVertex
     * @since 3.2
     * @param int $mode
     * @param \FFI\CData|\FFI\CIntPtr|null $count
     * @param int $type
     * @param \FFI\CData|\FFI\CPtrPtr|null $indices
     * @param int $drawcount
     * @param \FFI\CData|\FFI\CIntPtr|null $basevertex
     * @return void
     */
    public static function glMultiDrawElementsBaseVertex(int $mode, ?\FFI\CData $count, int $type, ?\FFI\CData $indices, int $drawcount, ?\FFI\CData $basevertex): void
    {
        assert(version_compare(self::$info->version, '3.2') >= 0, __FUNCTION__ . ' is available since OpenGL 3.2, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');
        assert($drawcount >= \PHP_INT_MIN && $drawcount <= \PHP_INT_MAX, 'Argument $drawcount overflow: C type GLsizei is required');

        $proc = self::getProc('glMultiDrawElementsBaseVertex', 'void (*)(GLenum mode, const GLsizei *count, GLenum type, const void *const*indices, GLsizei drawcount, const GLint *basevertex)');
        $proc($mode, $count, $type, $indices, $drawcount, $basevertex);
    }

    /**
     * *Flatshading* a vertex shader varying output means to assign all vetices of the primitive the same value for
     * that output. The vertex from which these values is derived is known as the *provoking vertex* and
     * `glProvokingVertex` specifies which vertex is to be used as the source of data for flat shaded varyings.
     *
     * *`provokeMode`* must be either `GL_FIRST_VERTEX_CONVENTION` or `GL_LAST_VERTEX_CONVENTION`, and controls the
     * selection of the vertex whose values are assigned to flatshaded varying outputs. The interpretation of these
     * values for the supported primitive types is:
     *
     * **Primitive Type of Polygon *i*** **First Vertex Convention** **Last Vertex Convention** point *i* *i*
     * independent line 2*i* - 1 2*i* line loop *i* *i* + 1, if *i* &lt; *n*
     *
     * 1, if *i* = *n*
     *
     * line strip *i* *i* + 1 independent triangle 3*i* - 2 3*i* triangle strip *i* *i* + 2 triangle fan *i* + 1 *i*
     * + 2 line adjacency 4*i* - 2 4*i* - 1 line strip adjacency *i* + 1 *i* + 2 triangle adjacency 6*i* - 5 6*i* - 1
     * triangle strip adjacency 2*i* - 1 2*i* + 3
     *
     * If a vertex or geometry shader is active, user-defined varying outputs may be flatshaded by using the `flat`
     * qualifier when declaring the output.
     *
     * @see http://docs.gl/gl3/glProvokingVertex
     * @see http://docs.gl/gl4/glProvokingVertex
     * @since 3.2
     * @param int $mode
     * @return void
     */
    public static function glProvokingVertex(int $mode): void
    {
        assert(version_compare(self::$info->version, '3.2') >= 0, __FUNCTION__ . ' is available since OpenGL 3.2, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');

        $proc = self::getProc('glProvokingVertex', 'void (*)(GLenum mode)');
        $proc($mode);
    }

    /**
     * Creates a new fence sync object, inserts a fence command into the GL command stream and associates it with
     * that sync object, and returns a non-zero name corresponding to the sync object.
     *
     * When the specified *`condition`* of the sync object is satisfied by the fence command, the sync object is
     * signaled by the GL, causing any {@see glWaitSync}, {@see glClientWaitSync} commands
     * blocking in *`sync`* to *unblock*. No other state is affected by `glFenceSync` or by the execution of the
     * associated fence command.
     *
     * *`condition`* must be `GL_SYNC_GPU_COMMANDS_COMPLETE`. This condition is satisfied by completion of the fence
     * command corresponding to the sync object and all preceding commands in the same command stream. The sync
     * object will not be signaled until all effects from these commands on GL client and server state and the
     * framebuffer are fully realized. Note that completion of the fence command occurs once the state of the
     * corresponding sync object has been changed, but commands waiting on that sync object may not be unblocked
     * until after the fence command completes.
     *
     * @see http://docs.gl/gl3/glFenceSync
     * @see http://docs.gl/gl4/glFenceSync
     * @since 3.2
     * @param int $condition
     * @param int $flags
     * @return \FFI\CData|\FFI\CStruct|GLsync|null
     */
    public static function glFenceSync(int $condition, int $flags): \FFI\CData
    {
        assert(version_compare(self::$info->version, '3.2') >= 0, __FUNCTION__ . ' is available since OpenGL 3.2, but only OpenGL '. self::$info->version . ' is available');
        assert($condition >= 0 && $condition <= 4_294_967_295, 'Argument $condition overflow: C type GLenum is required');
        assert($flags >= 0 && $flags <= 4_294_967_295, 'Argument $flags overflow: C type GLbitfield is required');

        $proc = self::getProc('glFenceSync', 'GLsync (*)(GLenum condition, GLbitfield flags)');
        return $proc($condition, $flags);
    }

    /**
     * Returns `GL_TRUE` if *`sync`* is currently the name of a sync object. If *`sync`* is not the name of a sync
     * object, or if an error occurs, `glIsSync` returns `GL_FALSE`. Note that zero is not the name of a sync object.
     *
     * @see http://docs.gl/gl3/glIsSync
     * @see http://docs.gl/gl4/glIsSync
     * @since 3.2
     * @param \FFI\CData|\FFI\CStruct|GLsync|null $sync
     * @return int
     */
    public static function glIsSync(\FFI\CData $sync): int
    {
        assert(version_compare(self::$info->version, '3.2') >= 0, __FUNCTION__ . ' is available since OpenGL 3.2, but only OpenGL '. self::$info->version . ' is available');

        $proc = self::getProc('glIsSync', 'GLboolean (*)(GLsync sync)');
        return $proc($sync);
    }

    /**
     * Deletes the sync object specified by *`sync`*. If the fence command corresponding to the specified sync object
     * has completed, or if no {@see glWaitSync} or {@see glClientWaitSync} commands are blocking
     * on *`sync`*, the object is deleted immediately. Otherwise, *`sync`* is flagged for deletion and will be
     * deleted when it is no longer associated with any fence command and is no longer blocking any
     * {@see glWaitSync} or {@see glClientWaitSync} command. In either case, after `glDeleteSync`
     * returns, the name *`sync`* is invalid and can no longer be used to refer to the sync object.
     *
     *  - `glDeleteSync` will silently ignore a *`sync`* value of zero.
     *
     * @see http://docs.gl/gl3/glDeleteSync
     * @see http://docs.gl/gl4/glDeleteSync
     * @since 3.2
     * @param \FFI\CData|\FFI\CStruct|GLsync|null $sync
     * @return void
     */
    public static function glDeleteSync(\FFI\CData $sync): void
    {
        assert(version_compare(self::$info->version, '3.2') >= 0, __FUNCTION__ . ' is available since OpenGL 3.2, but only OpenGL '. self::$info->version . ' is available');

        $proc = self::getProc('glDeleteSync', 'void (*)(GLsync sync)');
        $proc($sync);
    }

    /**
     * Causes the client to block and wait for the sync object specified by *`sync`* to become signaled. If *`sync`*
     * is signaled when `glClientWaitSync` is called, `glClientWaitSync` returns immediately, otherwise it will block
     * and wait for up to *`timeout`* nanoseconds for *`sync`* to become signaled.
     *
     * The return value is one of four status values:
     *
     * - `GL_ALREADY_SIGNALED` indicates that *`sync`* was signaled at the time that `glClientWaitSync` was called.
     * - `GL_TIMEOUT_EXPIRED` indicates that at least *`timeout`* nanoseconds passed and *`sync`* did not become
     * signaled.
     * - `GL_CONDITION_SATISFIED` indicates that *`sync`* was signaled before the timeout expired.
     * - `GL_WAIT_FAILED` indicates that an error occurred. Additionally, an OpenGL error will be generated.
     *
     * @see http://docs.gl/gl3/glClientWaitSync
     * @see http://docs.gl/gl4/glClientWaitSync
     * @since 3.2
     * @param \FFI\CData|\FFI\CStruct|GLsync|null $sync
     * @param int $flags
     * @param int $timeout
     * @return int
     */
    public static function glClientWaitSync(\FFI\CData $sync, int $flags, int $timeout): int
    {
        assert(version_compare(self::$info->version, '3.2') >= 0, __FUNCTION__ . ' is available since OpenGL 3.2, but only OpenGL '. self::$info->version . ' is available');
        assert($flags >= 0 && $flags <= 4_294_967_295, 'Argument $flags overflow: C type GLbitfield is required');
        assert($timeout >= 0 && $timeout <= 18_446_744_073_709_551_615, 'Argument $timeout overflow: C type GLuint64 is required');

        $proc = self::getProc('glClientWaitSync', 'GLenum (*)(GLsync sync, GLbitfield flags, GLuint64 timeout)');
        return $proc($sync, $flags, $timeout);
    }

    /**
     * Causes the GL server to block and wait until *`sync`* becomes signaled. *`sync`* is the name of an existing
     * sync object upon which to wait. *`flags`* and *`timeout`* are currently not used and must be set to zero and
     * the special value `GL_TIMEOUT_IGNORED`, respectively{@see [1]}. `glWaitSync` will always wait no
     * longer than an implementation-dependent timeout. The duration of this timeout in nanoseconds may be queried by
     * calling {@see glGet} with the parameter `GL_MAX_SERVER_WAIT_TIMEOUT`. There is currently no way to determine
     * whether `glWaitSync` unblocked because the timeout expired or because the sync object being waited on was
     * signaled.
     *
     * If an error occurs, `glWaitSync` does not cause the GL server to block.
     *
     * @see http://docs.gl/gl3/glWaitSync
     * @see http://docs.gl/gl4/glWaitSync
     * @since 3.2
     * @param \FFI\CData|\FFI\CStruct|GLsync|null $sync
     * @param int $flags
     * @param int $timeout
     * @return void
     */
    public static function glWaitSync(\FFI\CData $sync, int $flags, int $timeout): void
    {
        assert(version_compare(self::$info->version, '3.2') >= 0, __FUNCTION__ . ' is available since OpenGL 3.2, but only OpenGL '. self::$info->version . ' is available');
        assert($flags >= 0 && $flags <= 4_294_967_295, 'Argument $flags overflow: C type GLbitfield is required');
        assert($timeout >= 0 && $timeout <= 18_446_744_073_709_551_615, 'Argument $timeout overflow: C type GLuint64 is required');

        $proc = self::getProc('glWaitSync', 'void (*)(GLsync sync, GLbitfield flags, GLuint64 timeout)');
        $proc($sync, $flags, $timeout);
    }

    /**
     * @since 3.2
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $data
     * @return void
     */
    public static function glGetInteger64v(int $pname, ?\FFI\CData $data): void
    {
        assert(version_compare(self::$info->version, '3.2') >= 0, __FUNCTION__ . ' is available since OpenGL 3.2, but only OpenGL '. self::$info->version . ' is available');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetInteger64v', 'void (*)(GLenum pname, GLint64 *data)');
        $proc($pname, $data);
    }

    /**
     * @since 3.2
     * @param \FFI\CData|\FFI\CStruct|GLsync|null $sync
     * @param int $pname
     * @param int $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @param \FFI\CData|\FFI\CIntPtr|null $values
     * @return void
     */
    public static function glGetSynciv(\FFI\CData $sync, int $pname, int $bufSize, ?\FFI\CData $length, ?\FFI\CData $values): void
    {
        assert(version_compare(self::$info->version, '3.2') >= 0, __FUNCTION__ . ' is available since OpenGL 3.2, but only OpenGL '. self::$info->version . ' is available');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($bufSize >= \PHP_INT_MIN && $bufSize <= \PHP_INT_MAX, 'Argument $bufSize overflow: C type GLsizei is required');

        $proc = self::getProc('glGetSynciv', 'void (*)(GLsync sync, GLenum pname, GLsizei bufSize, GLsizei *length, GLint *values)');
        $proc($sync, $pname, $bufSize, $length, $values);
    }

    /**
     * @since 3.2
     * @param int $target
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $data
     * @return void
     */
    public static function glGetInteger64i_v(int $target, int $index, ?\FFI\CData $data): void
    {
        assert(version_compare(self::$info->version, '3.2') >= 0, __FUNCTION__ . ' is available since OpenGL 3.2, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glGetInteger64i_v', 'void (*)(GLenum target, GLuint index, GLint64 *data)');
        $proc($target, $index, $data);
    }

    /**
     * @since 3.2
     * @param int $target
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetBufferParameteri64v(int $target, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '3.2') >= 0, __FUNCTION__ . ' is available since OpenGL 3.2, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetBufferParameteri64v', 'void (*)(GLenum target, GLenum pname, GLint64 *params)');
        $proc($target, $pname, $params);
    }

    /**
     * - `glFramebufferTexture`, `glFramebufferTexture1D`, `glFramebufferTexture2D`, and `glFramebufferTexture`
     * attach a selected mipmap level or image of a texture object as one of the logical buffers of the framebuffer
     * object currently bound to *`target`*. *`target`* must be `GL_DRAW_FRAMEBUFFER`, `GL_READ_FRAMEBUFFER`, or
     * `GL_FRAMEBUFFER`. `GL_FRAMEBUFFER` is equivalent to `GL_DRAW_FRAMEBUFFER`.
     *
     * *`attachment`* specifies the logical attachment of the framebuffer and must be `GL_COLOR_ATTACHMENTi`,
     * `GL_DEPTH_ATTACHMENT`, `GL_STENCIL_ATTACHMENT` or `GL_DEPTH_STENCIL_ATTACHMENT`. *i* in `GL_COLOR_ATTACHMENTi`
     * may range from zero to the value of `GL_MAX_COLOR_ATTACHMENTS` - 1. Attaching a level of a texture to
     * `GL_DEPTH_STENCIL_ATTACHMENT` is equivalent to attaching that level to both the `GL_DEPTH_ATTACHMENT` *and*
     * the `GL_STENCIL_ATTACHMENT` attachment points simultaneously.
     *
     * *`textarget`* specifies what type of texture is named by *`texture`*, and for cube map textures, specifies the
     * face that is to be attached. If *`texture`* is not zero, it must be the name of an existing texture with type
     * *`textarget`*, unless it is a cube map texture, in which case *`textarget`* must be
     * `GL_TEXTURE_CUBE_MAP_POSITIVE_X` `GL_TEXTURE_CUBE_MAP_NEGATIVE_X`, `GL_TEXTURE_CUBE_MAP_POSITIVE_Y`,
     * `GL_TEXTURE_CUBE_MAP_NEGATIVE_Y`, `GL_TEXTURE_CUBE_MAP_POSITIVE_Z`, or `GL_TEXTURE_CUBE_MAP_NEGATIVE_Z`.
     *
     * If *`texture`* is non-zero, the specified *`level`* of the texture object named *`texture`* is attached to the
     * framebfufer attachment point named by *`attachment`*. For `glFramebufferTexture1D`, `glFramebufferTexture2D`,
     * and `glFramebufferTexture3D`, *`texture`* must be zero or the name of an existing texture with a target of
     * *`textarget`*, or *`texture`* must be the name of an existing cube-map texture and *`textarget`* must be one
     * of `GL_TEXTURE_CUBE_MAP_POSITIVE_X`, `GL_TEXTURE_CUBE_MAP_POSITIVE_Y`, `GL_TEXTURE_CUBE_MAP_POSITIVE_Z`,
     * `GL_TEXTURE_CUBE_MAP_NEGATIVE_X`, `GL_TEXTURE_CUBE_MAP_NEGATIVE_Y`, or `GL_TEXTURE_CUBE_MAP_NEGATIVE_Z`.
     *
     * If *`textarget`* is `GL_TEXTURE_RECTANGLE`, `GL_TEXTURE_2D_MULTISAMPLE`, or `GL_TEXTURE_2D_MULTISAMPLE_ARRAY`,
     * then *`level`* must be zero. If *`textarget`* is `GL_TEXTURE_3D`, then level must be greater than or equal to
     * zero and less than or equal to log2 of the value of `GL_MAX_3D_TEXTURE_SIZE`. If *`textarget`* is one of
     * `GL_TEXTURE_CUBE_MAP_POSITIVE_X`, `GL_TEXTURE_CUBE_MAP_POSITIVE_Y`, `GL_TEXTURE_CUBE_MAP_POSITIVE_Z`,
     * `GL_TEXTURE_CUBE_MAP_NEGATIVE_X`, `GL_TEXTURE_CUBE_MAP_NEGATIVE_Y`, or `GL_TEXTURE_CUBE_MAP_NEGATIVE_Z`, then
     * *`level`* must be greater than or equal to zero and less than or equal to log2 of the value of
     * `GL_MAX_CUBE_MAP_TEXTURE_SIZE`. For all other values of *`textarget`*, *`level`* must be greater than or equal
     * to zero and no larger than log2 of the value of `GL_MAX_TEXTURE_SIZE`.
     *
     * *`layer`* specifies the layer of a 2-dimensional image within a 3-dimensional texture.
     *
     * For `glFramebufferTexture1D`, if *`texture`* is not zero, then *`textarget`* must be `GL_TEXTURE_1D`. For
     * `glFramebufferTexture2D`, if *`texture`* is not zero, *`textarget`* must be one of `GL_TEXTURE_2D`,
     * `GL_TEXTURE_RECTANGLE`, `GL_TEXTURE_CUBE_MAP_POSITIVE_X`, `GL_TEXTURE_CUBE_MAP_POSITIVE_Y`,
     * `GL_TEXTURE_CUBE_MAP_POSITIVE_Z`, `GL_TEXTURE_CUBE_MAP_NEGATIVE_X`, `GL_TEXTURE_CUBE_MAP_NEGATIVE_Y`,
     * `GL_TEXTURE_CUBE_MAP_NEGATIVE_Z`, or `GL_TEXTURE_2D_MULTISAMPLE`. For `glFramebufferTexture3D`, if *`texture`*
     * is not zero, then *`textarget`* must be `GL_TEXTURE_3D`.
     *
     * @see http://docs.gl/gl3/glFramebufferTexture
     * @see http://docs.gl/gl4/glFramebufferTexture
     * @since 3.2
     * @param int $target
     * @param int $attachment
     * @param int $texture
     * @param int $level
     * @return void
     */
    public static function glFramebufferTexture(int $target, int $attachment, int $texture, int $level): void
    {
        assert(version_compare(self::$info->version, '3.2') >= 0, __FUNCTION__ . ' is available since OpenGL 3.2, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($attachment >= 0 && $attachment <= 4_294_967_295, 'Argument $attachment overflow: C type GLenum is required');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');

        $proc = self::getProc('glFramebufferTexture', 'void (*)(GLenum target, GLenum attachment, GLuint texture, GLint level)');
        $proc($target, $attachment, $texture, $level);
    }

    /**
     * Establishes the data storage, format, dimensions and number of samples of a multisample texture's image.
     *
     * *`target`* must be `GL_TEXTURE_2D_MULTISAMPLE` or `GL_PROXY_TEXTURE_2D_MULTISAMPLE`. *`width`* and *`height`*
     * are the dimensions in texels of the texture, and must be in the range zero to `GL_MAX_TEXTURE_SIZE` - 1.
     * *`samples`* specifies the number of samples in the image and must be in the range zero to `GL_MAX_SAMPLES` -
     * 1.
     *
     * *`internalformat`* must be a color-renderable, depth-renderable, or stencil-renderable format.
     *
     * If *`fixedsamplelocations`* is `GL_TRUE`, the image will use identical sample locations and the same number of
     * samples for all texels in the image, and the sample locations will not depend on the internal format or size
     * of the image.
     *
     * When a multisample texture is accessed in a shader, the access takes one vector of integers describing which
     * texel to fetch and an integer corresponding to the sample numbers describing which sample within the texel to
     * fetch. No standard sampling instructions are allowed on the multisample texture targets.
     *
     * @see http://docs.gl/gl3/glTexImage2DMultisample
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
    public static function glTexImage2DMultisample(int $target, int $samples, int $internalformat, int $width, int $height, int $fixedsamplelocations): void
    {
        assert(version_compare(self::$info->version, '3.2') >= 0, __FUNCTION__ . ' is available since OpenGL 3.2, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($samples >= \PHP_INT_MIN && $samples <= \PHP_INT_MAX, 'Argument $samples overflow: C type GLsizei is required');
        assert($internalformat >= 0 && $internalformat <= 4_294_967_295, 'Argument $internalformat overflow: C type GLenum is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');
        assert($fixedsamplelocations >= 0 && $fixedsamplelocations <= 255, 'Argument $fixedsamplelocations overflow: C type GLboolean is required');

        $proc = self::getProc('glTexImage2DMultisample', 'void (*)(GLenum target, GLsizei samples, GLenum internalformat, GLsizei width, GLsizei height, GLboolean fixedsamplelocations)');
        $proc($target, $samples, $internalformat, $width, $height, $fixedsamplelocations);
    }

    /**
     * Establishes the data storage, format, dimensions and number of samples of a multisample texture's image.
     *
     * *`target`* must be `GL_TEXTURE_2D_MULTISAMPLE_ARRAY` or `GL_PROXY_TEXTURE_2D_MULTISAMPLE_ARRAY`. *`width`* and
     * *`height`*are the dimensions in texels of the texture, and must be in the range zero to `GL_MAX_TEXTURE_SIZE`
     * - 1. *`depth`* is the number of array slices in the array texture's image. *`samples`* specifies the number of
     * samples in the image and must be in the range zero to `GL_MAX_SAMPLES` - 1.
     *
     * *`internalformat`* must be a color-renderable, depth-renderable, or stencil-renderable format.
     *
     * If *`fixedsamplelocations`* is `GL_TRUE`, the image will use identical sample locations and the same number of
     * samples for all texels in the image, and the sample locations will not depend on the internal format or size
     * of the image.
     *
     * When a multisample texture is accessed in a shader, the access takes one vector of integers describing which
     * texel to fetch and an integer corresponding to the sample numbers describing which sample within the texel to
     * fetch. No standard sampling instructions are allowed on the multisample texture targets.
     *
     * @see http://docs.gl/gl3/glTexImage3DMultisample
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
    public static function glTexImage3DMultisample(int $target, int $samples, int $internalformat, int $width, int $height, int $depth, int $fixedsamplelocations): void
    {
        assert(version_compare(self::$info->version, '3.2') >= 0, __FUNCTION__ . ' is available since OpenGL 3.2, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($samples >= \PHP_INT_MIN && $samples <= \PHP_INT_MAX, 'Argument $samples overflow: C type GLsizei is required');
        assert($internalformat >= 0 && $internalformat <= 4_294_967_295, 'Argument $internalformat overflow: C type GLenum is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');
        assert($depth >= \PHP_INT_MIN && $depth <= \PHP_INT_MAX, 'Argument $depth overflow: C type GLsizei is required');
        assert($fixedsamplelocations >= 0 && $fixedsamplelocations <= 255, 'Argument $fixedsamplelocations overflow: C type GLboolean is required');

        $proc = self::getProc('glTexImage3DMultisample', 'void (*)(GLenum target, GLsizei samples, GLenum internalformat, GLsizei width, GLsizei height, GLsizei depth, GLboolean fixedsamplelocations)');
        $proc($target, $samples, $internalformat, $width, $height, $depth, $fixedsamplelocations);
    }

    /**
     * @since 3.2
     * @param int $pname
     * @param int $index
     * @param \FFI\CData|\FFI\CFloatPtr|null $val
     * @return void
     */
    public static function glGetMultisamplefv(int $pname, int $index, ?\FFI\CData $val): void
    {
        assert(version_compare(self::$info->version, '3.2') >= 0, __FUNCTION__ . ' is available since OpenGL 3.2, but only OpenGL '. self::$info->version . ' is available');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glGetMultisamplefv', 'void (*)(GLenum pname, GLuint index, GLfloat *val)');
        $proc($pname, $index, $val);
    }

    /**
     * Sets one 32-bit sub-word of the multi-word sample mask, `GL_SAMPLE_MASK_VALUE`.
     *
     * *`maskIndex`* specifies which 32-bit sub-word of the sample mask to update, and *`mask`* specifies the new
     * value to use for that sub-word. *`maskIndex`* must be less than the value of `GL_MAX_SAMPLE_MASK_WORDS`. Bit
     * *B* of mask word *M* corresponds to sample 32 x *M* + *B*.
     *
     * @see http://docs.gl/gl3/glSampleMaski
     * @see http://docs.gl/gl4/glSampleMaski
     * @since 3.2
     * @param int $maskNumber
     * @param int $mask
     * @return void
     */
    public static function glSampleMaski(int $maskNumber, int $mask): void
    {
        assert(version_compare(self::$info->version, '3.2') >= 0, __FUNCTION__ . ' is available since OpenGL 3.2, but only OpenGL '. self::$info->version . ' is available');
        assert($maskNumber >= 0 && $maskNumber <= 4_294_967_295, 'Argument $maskNumber overflow: C type GLuint is required');
        assert($mask >= 0 && $mask <= 4_294_967_295, 'Argument $mask overflow: C type GLbitfield is required');

        $proc = self::getProc('glSampleMaski', 'void (*)(GLuint maskNumber, GLbitfield mask)');
        $proc($maskNumber, $mask);
    }
}
