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
     * {@see GL46::glDrawElementsBaseVertex} behaves identically to {@see GL46::glDrawElements} except that the ith
     * element transferred by the corresponding draw call will be taken from element $indices[i] + $basevertex of
     * each enabled array. If the resulting value is larger than the maximum value representable by $type, it is as
     * if the calculation were upconverted to 32-bit unsigned integers (with wrapping on overflow conditions). The
     * operation is undefined if the sum would be negative.
     *
     * @see http://docs.gl/gl4/glDrawElementsBaseVertex
     * @since 3.2
     * @param int|\FFI\CData|\FFI\CInt $mode
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $type
     * @param \FFI\CData|\FFI\CPtr|null $indices
     * @param int|\FFI\CData|\FFI\CInt $basevertex
     * @return void
     */
    public function glDrawElementsBaseVertex($mode, $count, $type, ?\FFI\CData $indices, $basevertex): void
    {
        $mode = $mode instanceof \FFI\CData ? $mode->cdata : $mode;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $type = $type instanceof \FFI\CData ? $type->cdata : $type;
        $basevertex = $basevertex instanceof \FFI\CData ? $basevertex->cdata : $basevertex;

        assert(Assert::uint16($mode), 'Argument $mode must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint16($type), 'Argument $type must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($basevertex), 'Argument $basevertex must be a C-like GLint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glDrawElementsBaseVertex', 'void (*)(GLenum mode, GLsizei count, GLenum type, const void *indices, GLint basevertex)');
        $proc($mode, $count, $type, $indices, $basevertex);
    }

    /**
     * {@see GL46::glDrawRangeElementsBaseVertex} is a restricted form of {@see GL46::glDrawElementsBaseVertex}.
     * $mode, $count and $basevertex match the corresponding arguments to {@see GL46::glDrawElementsBaseVertex}, with
     * the additional constraint that all values in the array $indices must lie between $start and $end, inclusive,
     * prior to adding $basevertex. Index values lying outside the range [$start, $end] are treated in the same way
     * as {@see GL46::glDrawElementsBaseVertex}. The ith element transferred by the corresponding draw call will be
     * taken from element $indices[i] + $basevertex of each enabled array. If the resulting value is larger than the
     * maximum value representable by $type, it is as if the calculation were upconverted to 32-bit unsigned integers
     * (with wrapping on overflow conditions). The operation is undefined if the sum would be negative.
     *
     * @see http://docs.gl/gl4/glDrawRangeElementsBaseVertex
     * @since 3.2
     * @param int|\FFI\CData|\FFI\CInt $mode
     * @param int|\FFI\CData|\FFI\CInt $start
     * @param int|\FFI\CData|\FFI\CInt $end
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $type
     * @param \FFI\CData|\FFI\CPtr|null $indices
     * @param int|\FFI\CData|\FFI\CInt $basevertex
     * @return void
     */
    public function glDrawRangeElementsBaseVertex($mode, $start, $end, $count, $type, ?\FFI\CData $indices, $basevertex): void
    {
        $mode = $mode instanceof \FFI\CData ? $mode->cdata : $mode;
        $start = $start instanceof \FFI\CData ? $start->cdata : $start;
        $end = $end instanceof \FFI\CData ? $end->cdata : $end;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $type = $type instanceof \FFI\CData ? $type->cdata : $type;
        $basevertex = $basevertex instanceof \FFI\CData ? $basevertex->cdata : $basevertex;

        assert(Assert::uint16($mode), 'Argument $mode must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($start), 'Argument $start must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($end), 'Argument $end must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint16($type), 'Argument $type must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($basevertex), 'Argument $basevertex must be a C-like GLint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glDrawRangeElementsBaseVertex', 'void (*)(GLenum mode, GLuint start, GLuint end, GLsizei count, GLenum type, const void *indices, GLint basevertex)');
        $proc($mode, $start, $end, $count, $type, $indices, $basevertex);
    }

    /**
     * {@see GL46::glDrawElementsInstancedBaseVertex} behaves identically to {@see GL46::glDrawElementsInstanced}
     * except that the ith element transferred by the corresponding draw call will be taken from element $indices[i]
     * + $basevertex of each enabled array. If the resulting value is larger than the maximum value representable by
     * $type, it is as if the calculation were upconverted to 32-bit unsigned integers (with wrapping on overflow
     * conditions). The operation is undefined if the sum would be negative.
     *
     * @see http://docs.gl/gl4/glDrawElementsInstancedBaseVertex
     * @since 3.2
     * @param int|\FFI\CData|\FFI\CInt $mode
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $type
     * @param \FFI\CData|\FFI\CPtr|null $indices
     * @param int|\FFI\CData|\FFI\CInt $instancecount
     * @param int|\FFI\CData|\FFI\CInt $basevertex
     * @return void
     */
    public function glDrawElementsInstancedBaseVertex($mode, $count, $type, ?\FFI\CData $indices, $instancecount, $basevertex): void
    {
        $mode = $mode instanceof \FFI\CData ? $mode->cdata : $mode;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $type = $type instanceof \FFI\CData ? $type->cdata : $type;
        $instancecount = $instancecount instanceof \FFI\CData ? $instancecount->cdata : $instancecount;
        $basevertex = $basevertex instanceof \FFI\CData ? $basevertex->cdata : $basevertex;

        assert(Assert::uint16($mode), 'Argument $mode must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint16($type), 'Argument $type must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($instancecount), 'Argument $instancecount must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::int16($basevertex), 'Argument $basevertex must be a C-like GLint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glDrawElementsInstancedBaseVertex', 'void (*)(GLenum mode, GLsizei count, GLenum type, const void *indices, GLsizei instancecount, GLint basevertex)');
        $proc($mode, $count, $type, $indices, $instancecount, $basevertex);
    }

    /**
     * {@see GL46::glMultiDrawElementsBaseVertex} behaves identically to {@see GL46::glDrawElementsBaseVertex},
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
     * @param int|\FFI\CData|\FFI\CInt $mode
     * @param \FFI\CData|\FFI\CIntPtr|null $count
     * @param int|\FFI\CData|\FFI\CInt $type
     * @param \FFI\CData|\FFI\CPtrPtr|null $indices
     * @param int|\FFI\CData|\FFI\CInt $drawcount
     * @param \FFI\CData|\FFI\CIntPtr|null $basevertex
     * @return void
     */
    public function glMultiDrawElementsBaseVertex($mode, ?\FFI\CData $count, $type, ?\FFI\CData $indices, $drawcount, ?\FFI\CData $basevertex): void
    {
        $mode = $mode instanceof \FFI\CData ? $mode->cdata : $mode;
        $type = $type instanceof \FFI\CData ? $type->cdata : $type;
        $drawcount = $drawcount instanceof \FFI\CData ? $drawcount->cdata : $drawcount;

        assert(Assert::uint16($mode), 'Argument $mode must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($type), 'Argument $type must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($drawcount), 'Argument $drawcount must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glMultiDrawElementsBaseVertex', 'void (*)(GLenum mode, const GLsizei *count, GLenum type, const void *const*indices, GLsizei drawcount, const GLint *basevertex)');
        $proc($mode, $count, $type, $indices, $drawcount, $basevertex);
    }

    /**
     * Flatshading a vertex shader varying output means to assign all vetices of the primitive the same value for
     * that output. The vertex from which these values is derived is known as the provoking vertex and
     * {@see GL46::glProvokingVertex} specifies which vertex is to be used as the source of data for flat shaded
     * varyings.
     *
     * $provokeMode must be either {@see GL46::GL_FIRST_VERTEX_CONVENTION} or {@see GL46::GL_LAST_VERTEX_CONVENTION},
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
     * @param int|\FFI\CData|\FFI\CInt $mode
     * @return void
     */
    public function glProvokingVertex($mode): void
    {
        $mode = $mode instanceof \FFI\CData ? $mode->cdata : $mode;

        assert(Assert::uint16($mode), 'Argument $mode must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProvokingVertex', 'void (*)(GLenum mode)');
        $proc($mode);
    }

    /**
     * {@see GL46::glFenceSync} creates a new fence sync object, inserts a fence command into the GL command stream
     * and associates it with that sync object, and returns a non-zero name corresponding to the sync object.
     *
     * When the specified $condition of the sync object is satisfied by the fence command, the sync object is
     * signaled by the GL, causing any {@see GL46::glWaitSync}, {@see GL46::glClientWaitSync} commands blocking in
     * $sync to unblock. No other state is affected by {@see GL46::glFenceSync} or by the execution of the associated
     * fence command.
     *
     * $condition must be {@see GL46::GL_SYNC_GPU_COMMANDS_COMPLETE}. This condition is satisfied by completion of
     * the fence command corresponding to the sync object and all preceding commands in the same command stream. The
     * sync object will not be signaled until all effects from these commands on GL client and server state and the
     * framebuffer are fully realized. Note that completion of the fence command occurs once the state of the
     * corresponding sync object has been changed, but commands waiting on that sync object may not be unblocked
     * until after the fence command completes.
     *
     * @see http://docs.gl/gl4/glFenceSync
     * @since 3.2
     * @param int|\FFI\CData|\FFI\CInt $condition
     * @param int|\FFI\CData|\FFI\CInt $flags
     * @return \FFI\CData|\FFI\CStruct|GLsync|null
     */
    public function glFenceSync($condition, $flags): \FFI\CData
    {
        $condition = $condition instanceof \FFI\CData ? $condition->cdata : $condition;
        $flags = $flags instanceof \FFI\CData ? $flags->cdata : $flags;

        assert(Assert::uint16($condition), 'Argument $condition must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($flags), 'Argument $flags must be a C-like GLbitfield, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glFenceSync', 'GLsync (*)(GLenum condition, GLbitfield flags)');
        return $proc($condition, $flags);
    }

    /**
     * {@see GL46::glIsSync} returns {@see GL46::GL_TRUE} if $sync is currently the name of a sync object. If $sync
     * is not the name of a sync object, or if an error occurs, {@see GL46::glIsSync} returns {@see GL46::GL_FALSE}.
     * Note that zero is not the name of a sync object.
     *
     * @see http://docs.gl/gl4/glIsSync
     * @since 3.2
     * @param \FFI\CData|\FFI\CStruct|GLsync|null $sync
     * @return int|\FFI\CData|\FFI\CInt
     */
    public function glIsSync(\FFI\CData $sync): int
    {
        $proc = $this->getProcAddress('glIsSync', 'GLboolean (*)(GLsync sync)');
        return $proc($sync);
    }

    /**
     * {@see GL46::glDeleteSync} deletes the sync object specified by $sync. If the fence command corresponding to
     * the specified sync object has completed, or if no {@see GL46::glWaitSync} or {@see GL46::glClientWaitSync}
     * commands are blocking on $sync, the object is deleted immediately. Otherwise, $sync is flagged for deletion
     * and will be deleted when it is no longer associated with any fence command and is no longer blocking any
     * {@see GL46::glWaitSync} or {@see GL46::glClientWaitSync} command. In either case, after
     * {@see GL46::glDeleteSync} returns, the name $sync is invalid and can no longer be used to refer to the sync
     * object.
     *
     * {@see GL46::glDeleteSync} will silently ignore a $sync value of zero.
     *
     * @see http://docs.gl/gl4/glDeleteSync
     * @since 3.2
     * @param \FFI\CData|\FFI\CStruct|GLsync|null $sync
     * @return void
     */
    public function glDeleteSync(\FFI\CData $sync): void
    {
        $proc = $this->getProcAddress('glDeleteSync', 'void (*)(GLsync sync)');
        $proc($sync);
    }

    /**
     * {@see GL46::glClientWaitSync} causes the client to block and wait for the sync object specified by $sync to
     * become signaled. If $sync is signaled when {@see GL46::glClientWaitSync} is called,
     * {@see GL46::glClientWaitSync} returns immediately, otherwise it will block and wait for up to $timeout
     * nanoseconds for $sync to become signaled.
     *
     * The return value is one of four status values:    {@see GL46::GL_ALREADY_SIGNALED} indicates that $sync was
     * signaled at the time that {@see GL46::glClientWaitSync} was called.     {@see GL46::GL_TIMEOUT_EXPIRED}
     * indicates that at least $timeout nanoseconds passed and $sync did not become signaled.
     * {@see GL46::GL_CONDITION_SATISFIED} indicates that $sync was signaled before the timeout expired.
     * {@see GL46::GL_WAIT_FAILED} indicates that an error occurred. Additionally, an OpenGL error will be generated.
     *
     * @see http://docs.gl/gl4/glClientWaitSync
     * @since 3.2
     * @param \FFI\CData|\FFI\CStruct|GLsync|null $sync
     * @param int|\FFI\CData|\FFI\CInt $flags
     * @param mixed|float|string|int|\FFI\CData|\FFI\CInt $timeout
     * @return int|\FFI\CData|\FFI\CInt
     */
    public function glClientWaitSync(\FFI\CData $sync, $flags, $timeout): int
    {
        $flags = $flags instanceof \FFI\CData ? $flags->cdata : $flags;

        assert(Assert::uint16($flags), 'Argument $flags must be a C-like GLbitfield, but incompatible or overflow value given');
        assert(Assert::uint64($timeout), 'Argument $timeout must be a C-like GLuint64, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glClientWaitSync', 'GLenum (*)(GLsync sync, GLbitfield flags, GLuint64 timeout)');
        return $proc($sync, $flags, $timeout);
    }

    /**
     * {@see GL46::glWaitSync} causes the GL server to block and wait until $sync becomes signaled. $sync is the name
     * of an existing sync object upon which to wait. $flags and $timeout are currently not used and must be set to
     * zero and the special value {@see GL46::GL_TIMEOUT_IGNORED}, respectively$flags and $timeout are placeholders
     * for anticipated future extensions of sync object capabilities. They must have these reserved values in order
     * that existing code calling {@see GL46::glWaitSync} operate properly in the presence of such extensions..
     * {@see GL46::glWaitSync} will always wait no longer than an implementation-dependent timeout. The duration of
     * this timeout in nanoseconds may be queried by calling {@see GL46::glGet} with the parameter
     * {@see GL46::GL_MAX_SERVER_WAIT_TIMEOUT}. There is currently no way to determine whether
     * {@see GL46::glWaitSync} unblocked because the timeout expired or because the sync object being waited on was
     * signaled.
     *
     * If an error occurs, {@see GL46::glWaitSync} does not cause the GL server to block.
     *
     * @see http://docs.gl/gl4/glWaitSync
     * @since 3.2
     * @param \FFI\CData|\FFI\CStruct|GLsync|null $sync
     * @param int|\FFI\CData|\FFI\CInt $flags
     * @param mixed|float|string|int|\FFI\CData|\FFI\CInt $timeout
     * @return void
     */
    public function glWaitSync(\FFI\CData $sync, $flags, $timeout): void
    {
        $flags = $flags instanceof \FFI\CData ? $flags->cdata : $flags;

        assert(Assert::uint16($flags), 'Argument $flags must be a C-like GLbitfield, but incompatible or overflow value given');
        assert(Assert::uint64($timeout), 'Argument $timeout must be a C-like GLuint64, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glWaitSync', 'void (*)(GLsync sync, GLbitfield flags, GLuint64 timeout)');
        $proc($sync, $flags, $timeout);
    }

    /**
     * {@see GL46::glGetQueryiv} returns in $params a selected parameter of the query object target specified by
     * $target.
     *
     * $pname names a specific query object target parameter. When $pname is {@see GL46::GL_CURRENT_QUERY}, the name
     * of the currently active query for $target, or zero if no query is active, will be placed in $params. If $pname
     * is {@see GL46::GL_QUERY_COUNTER_BITS}, the implementation-dependent number of bits used to hold the result of
     * queries for $target is returned in $params.
     *
     * @see http://docs.gl/gl2/glGetMaterial
     * @see http://docs.gl/gl2/glGetPointerv
     * @see http://docs.gl/gl2/glGetQueryiv
     * @see http://docs.gl/gl4/glGetPointerv
     * @see http://docs.gl/gl4/glGetQueryiv
     * @since 3.2
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $data
     * @return void
     */
    public function glGetInteger64v($pname, ?\FFI\CData $data): void
    {
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;

        assert(Assert::uint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetInteger64v', 'void (*)(GLenum pname, GLint64 *data)');
        $proc($pname, $data);
    }

    /**
     * {@see GL46::glGetSynciv} retrieves properties of a sync object. $sync specifies the name of the sync object
     * whose properties to retrieve.
     *
     * On success, {@see GL46::glGetSynciv} replaces up to $bufSize integers in $values with the corresponding
     * property values of the object being queried. The actual number of integers replaced is returned in the
     * variable whose address is specified in $length. If $length is `NULL`, no length is returned.
     *
     * If $pname is {@see GL46::GL_OBJECT_TYPE}, a single value representing the specific type of the sync object is
     * placed in $values. The only type supported is {@see GL46::GL_SYNC_FENCE}.
     *
     * If $pname is {@see GL46::GL_SYNC_STATUS}, a single value representing the status of the sync object
     * ({@see GL46::GL_SIGNALED} or {@see GL46::GL_UNSIGNALED}) is placed in $values.
     *
     * If $pname is {@see GL46::GL_SYNC_CONDITION}, a single value representing the condition of the sync object is
     * placed in $values. The only condition supported is {@see GL46::GL_SYNC_GPU_COMMANDS_COMPLETE}.
     *
     * If $pname is {@see GL46::GL_SYNC_FLAGS}, a single value representing the flags with which the sync object was
     * created is placed in $values. No flags are currently supported$flags is expected to be used in future
     * extensions to the sync objects..
     *
     * If an error occurs, nothing will be written to $values or $length.
     *
     * @see http://docs.gl/gl4/glGetSync
     * @since 3.2
     * @param \FFI\CData|\FFI\CStruct|GLsync|null $sync
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param int|\FFI\CData|\FFI\CInt $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @param \FFI\CData|\FFI\CIntPtr|null $values
     * @return void
     */
    public function glGetSynciv(\FFI\CData $sync, $pname, $bufSize, ?\FFI\CData $length, ?\FFI\CData $values): void
    {
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;
        $bufSize = $bufSize instanceof \FFI\CData ? $bufSize->cdata : $bufSize;

        assert(Assert::uint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($bufSize), 'Argument $bufSize must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetSynciv', 'void (*)(GLsync sync, GLenum pname, GLsizei bufSize, GLsizei *length, GLint *values)');
        $proc($sync, $pname, $bufSize, $length, $values);
    }

    /**
     * {@see GL46::glGetQueryiv} returns in $params a selected parameter of the query object target specified by
     * $target.
     *
     * $pname names a specific query object target parameter. When $pname is {@see GL46::GL_CURRENT_QUERY}, the name
     * of the currently active query for $target, or zero if no query is active, will be placed in $params. If $pname
     * is {@see GL46::GL_QUERY_COUNTER_BITS}, the implementation-dependent number of bits used to hold the result of
     * queries for $target is returned in $params.
     *
     * @see http://docs.gl/gl2/glGetMaterial
     * @see http://docs.gl/gl2/glGetQueryiv
     * @see http://docs.gl/gl4/glGetQueryiv
     * @since 3.2
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CIntPtr|null $data
     * @return void
     */
    public function glGetInteger64i_v($target, $index, ?\FFI\CData $data): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Assert::uint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetInteger64i_v', 'void (*)(GLenum target, GLuint index, GLint64 *data)');
        $proc($target, $index, $data);
    }

    /**
     * {@see GL46::glGetBufferParameteriv} returns in $data a selected parameter of the buffer object specified by
     * $target.
     *
     * $value names a specific buffer object parameter, as follows:
     *
     *  - {@see GL46::GL_BUFFER_ACCESS}: $params returns the access policy set
     *    while mapping the buffer object. The initial value is
     *    {@see GL46::GL_READ_WRITE}.
     *
     *  - {@see GL46::GL_BUFFER_MAPPED}: $params returns a flag indicating
     *    whether the buffer object is currently mapped. The initial value is
     *    {@see GL46::GL_FALSE}.
     *
     *  - {@see GL46::GL_BUFFER_SIZE}: $params returns the size of the buffer
     *    object, measured in bytes. The initial value is 0.
     *
     *  - {@see GL46::GL_BUFFER_USAGE}: $params returns the buffer object's
     *    usage pattern. The initial value is {@see GL46::GL_STATIC_DRAW}.
     *
     * @see http://docs.gl/gl2/glGetBufferParameteriv
     * @since 3.2
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public function glGetBufferParameteri64v($target, $pname, ?\FFI\CData $params): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;

        assert(Assert::uint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetBufferParameteri64v', 'void (*)(GLenum target, GLenum pname, GLint64 *params)');
        $proc($target, $pname, $params);
    }

    /**
     * These commands attach a selected mipmap level or image of a texture object as one of the logical buffers of
     * the specified framebuffer object. Textures cannot be attached to the default draw and read framebuffer, so
     * they are not valid targets of these commands.
     *
     * For all commands except {@see GL46::glNamedFramebufferTexture}, the framebuffer object is that bound to
     * $target, which must be {@see GL46::GL_DRAW_FRAMEBUFFER}, {@see GL46::GL_READ_FRAMEBUFFER}, or
     * {@see GL46::GL_FRAMEBUFFER}. {@see GL46::GL_FRAMEBUFFER} is equivalent to {@see GL46::GL_DRAW_FRAMEBUFFER}.
     *
     * For {@see GL46::glNamedFramebufferTexture}, $framebuffer is the name of the framebuffer object.
     *
     * $attachment specifies the logical attachment of the framebuffer and must be {@see GL46::GL_COLOR_ATTACHMENT}i,
     * {@see GL46::GL_DEPTH_ATTACHMENT}, {@see GL46::GL_STENCIL_ATTACHMENT} or
     * {@see GL46::GL_DEPTH_STENCIL_ATTACHMENT}. i in {@see GL46::GL_COLOR_ATTACHMENT}i may range from zero to the
     * value of {@see GL46::GL_MAX_COLOR_ATTACHMENTS} minus one. Attaching a level of a texture to
     * {@see GL46::GL_DEPTH_STENCIL_ATTACHMENT} is equivalent to attaching that level to both the
     * {@see GL46::GL_DEPTH_ATTACHMENT} and the {@see GL46::GL_STENCIL_ATTACHMENT} attachment points simultaneously.
     *
     * For {@see GL46::glFramebufferTexture1D}, {@see GL46::glFramebufferTexture2D} and
     * {@see GL46::glFramebufferTexture3D}, $textarget specifies what type of texture is named by $texture, and for
     * cube map textures, specifies the face that is to be attached. If $texture is not zero, it must be the name of
     * an existing texture object with effective target $textarget unless it is a cube map texture, in which case
     * $textarget must be {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_X} {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_X},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_Y}, {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_Y},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_Z}, or {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_Z}.
     *
     * If $texture is non-zero, the specified $level of the texture object named $texture is attached to the
     * framebfufer attachment point named by $attachment. For {@see GL46::glFramebufferTexture1D},
     * {@see GL46::glFramebufferTexture2D}, and {@see GL46::glFramebufferTexture3D}, $texture must be zero or the
     * name of an existing texture with an effective target of $textarget, or $texture must be the name of an
     * existing cube-map texture and $textarget must be one of {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_X},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_Y}, {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_Z},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_X}, {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_Y}, or
     * {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_Z}.
     *
     * If $textarget is {@see GL46::GL_TEXTURE_RECTANGLE}, {@see GL46::GL_TEXTURE_2D_MULTISAMPLE}, or
     * {@see GL46::GL_TEXTURE_2D_MULTISAMPLE_ARRAY}, then $level must be zero.
     *
     * If $textarget is {@see GL46::GL_TEXTURE_3D}, then $level must be greater than or equal to zero and less than
     * or equal to $log_2$ of the value of {@see GL46::GL_MAX_3D_TEXTURE_SIZE}.
     *
     * If $textarget is one of {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_X},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_Y}, {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_Z},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_X}, {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_Y}, or
     * {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_Z}, then $level must be greater than or equal to zero and less than
     * or equal to $log_2$ of the value of {@see GL46::GL_MAX_CUBE_MAP_TEXTURE_SIZE}.
     *
     * For all other values of $textarget, $level must be greater than or equal to zero and less than or equal to
     * $log_2$ of the value of {@see GL46::GL_MAX_TEXTURE_SIZE}.
     *
     * $layer specifies the layer of a 2-dimensional image within a 3-dimensional texture.
     *
     * For {@see GL46::glFramebufferTexture1D}, if $texture is not zero, then $textarget must be
     * {@see GL46::GL_TEXTURE_1D}. For {@see GL46::glFramebufferTexture2D}, if $texture is not zero, $textarget must
     * be one of {@see GL46::GL_TEXTURE_2D}, {@see GL46::GL_TEXTURE_RECTANGLE},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_X}, {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_Y},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_Z}, {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_X},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_Y}, {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_Z}, or
     * {@see GL46::GL_TEXTURE_2D_MULTISAMPLE}. For {@see GL46::glFramebufferTexture3D}, if $texture is not zero, then
     * $textarget must be {@see GL46::GL_TEXTURE_3D}.
     *
     * For {@see GL46::glFramebufferTexture} and {@see GL46::glNamedFramebufferTexture}, if $texture is the name of a
     * three-dimensional, cube map array, cube map, one- or two-dimensional array, or two-dimensional multisample
     * array texture, the specified texture level is an array of images, and the framebuffer attachment is considered
     * to be layered.
     *
     * @see http://docs.gl/gl4/glFramebufferTexture
     * @since 3.2
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $attachment
     * @param int|\FFI\CData|\FFI\CInt $texture
     * @param int|\FFI\CData|\FFI\CInt $level
     * @return void
     */
    public function glFramebufferTexture($target, $attachment, $texture, $level): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $attachment = $attachment instanceof \FFI\CData ? $attachment->cdata : $attachment;
        $texture = $texture instanceof \FFI\CData ? $texture->cdata : $texture;
        $level = $level instanceof \FFI\CData ? $level->cdata : $level;

        assert(Assert::uint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($attachment), 'Argument $attachment must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($texture), 'Argument $texture must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($level), 'Argument $level must be a C-like GLint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glFramebufferTexture', 'void (*)(GLenum target, GLenum attachment, GLuint texture, GLint level)');
        $proc($target, $attachment, $texture, $level);
    }

    /**
     * {@see GL46::glTexImage2DMultisample} establishes the data storage, format, dimensions and number of samples of
     * a multisample texture's image.
     *
     * $target must be {@see GL46::GL_TEXTURE_2D_MULTISAMPLE} or {@see GL46::GL_PROXY_TEXTURE_2D_MULTISAMPLE}. $width
     * and $height are the dimensions in texels of the texture, and must be in the range zero to the value of
     * {@see GL46::GL_MAX_TEXTURE_SIZE} minus one. $samples specifies the number of samples in the image and must be
     * in the range zero to the value of {@see GL46::GL_MAX_SAMPLES} minus one.
     *
     * $internalformat must be a color-renderable, depth-renderable, or stencil-renderable format.
     *
     * If $fixedsamplelocations is {@see GL46::GL_TRUE}, the image will use identical sample locations and the same
     * number of samples for all texels in the image, and the sample locations will not depend on the internal format
     * or size of the image.
     *
     * When a multisample texture is accessed in a shader, the access takes one vector of integers describing which
     * texel to fetch and an integer corresponding to the sample numbers describing which sample within the texel to
     * fetch. No standard sampling instructions are allowed on the multisample texture targets.
     *
     * @see http://docs.gl/gl4/glTexImage2DMultisample
     * @since 3.2
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $samples
     * @param int|\FFI\CData|\FFI\CInt $internalformat
     * @param int|\FFI\CData|\FFI\CInt $width
     * @param int|\FFI\CData|\FFI\CInt $height
     * @param int|\FFI\CData|\FFI\CInt $fixedsamplelocations
     * @return void
     */
    public function glTexImage2DMultisample($target, $samples, $internalformat, $width, $height, $fixedsamplelocations): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $samples = $samples instanceof \FFI\CData ? $samples->cdata : $samples;
        $internalformat = $internalformat instanceof \FFI\CData ? $internalformat->cdata : $internalformat;
        $width = $width instanceof \FFI\CData ? $width->cdata : $width;
        $height = $height instanceof \FFI\CData ? $height->cdata : $height;
        $fixedsamplelocations = $fixedsamplelocations instanceof \FFI\CData ? $fixedsamplelocations->cdata : $fixedsamplelocations;

        assert(Assert::uint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($samples), 'Argument $samples must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint16($internalformat), 'Argument $internalformat must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($width), 'Argument $width must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::int16($height), 'Argument $height must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint8($fixedsamplelocations), 'Argument $fixedsamplelocations must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glTexImage2DMultisample', 'void (*)(GLenum target, GLsizei samples, GLenum internalformat, GLsizei width, GLsizei height, GLboolean fixedsamplelocations)');
        $proc($target, $samples, $internalformat, $width, $height, $fixedsamplelocations);
    }

    /**
     * {@see GL46::glTexImage3DMultisample} establishes the data storage, format, dimensions and number of samples of
     * a multisample texture's image.
     *
     * $target must be {@see GL46::GL_TEXTURE_2D_MULTISAMPLE_ARRAY} or
     * {@see GL46::GL_PROXY_TEXTURE_2D_MULTISAMPLE_ARRAY}. $width and $heightare the dimensions in texels of the
     * texture, and must be in the range zero to the value of {@see GL46::GL_MAX_TEXTURE_SIZE} minus one. $depth is
     * the number of array slices in the array texture's image. $samples specifies the number of samples in the image
     * and must be in the range zero to the value of {@see GL46::GL_MAX_SAMPLES} minus one.
     *
     * $internalformat must be a color-renderable, depth-renderable, or stencil-renderable format.
     *
     * If $fixedsamplelocations is {@see GL46::GL_TRUE}, the image will use identical sample locations and the same
     * number of samples for all texels in the image, and the sample locations will not depend on the internal format
     * or size of the image.
     *
     * When a multisample texture is accessed in a shader, the access takes one vector of integers describing which
     * texel to fetch and an integer corresponding to the sample numbers describing which sample within the texel to
     * fetch. No standard sampling instructions are allowed on the multisample texture targets.
     *
     * @see http://docs.gl/gl4/glTexImage3DMultisample
     * @since 3.2
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $samples
     * @param int|\FFI\CData|\FFI\CInt $internalformat
     * @param int|\FFI\CData|\FFI\CInt $width
     * @param int|\FFI\CData|\FFI\CInt $height
     * @param int|\FFI\CData|\FFI\CInt $depth
     * @param int|\FFI\CData|\FFI\CInt $fixedsamplelocations
     * @return void
     */
    public function glTexImage3DMultisample($target, $samples, $internalformat, $width, $height, $depth, $fixedsamplelocations): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $samples = $samples instanceof \FFI\CData ? $samples->cdata : $samples;
        $internalformat = $internalformat instanceof \FFI\CData ? $internalformat->cdata : $internalformat;
        $width = $width instanceof \FFI\CData ? $width->cdata : $width;
        $height = $height instanceof \FFI\CData ? $height->cdata : $height;
        $depth = $depth instanceof \FFI\CData ? $depth->cdata : $depth;
        $fixedsamplelocations = $fixedsamplelocations instanceof \FFI\CData ? $fixedsamplelocations->cdata : $fixedsamplelocations;

        assert(Assert::uint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($samples), 'Argument $samples must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint16($internalformat), 'Argument $internalformat must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($width), 'Argument $width must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::int16($height), 'Argument $height must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::int16($depth), 'Argument $depth must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint8($fixedsamplelocations), 'Argument $fixedsamplelocations must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glTexImage3DMultisample', 'void (*)(GLenum target, GLsizei samples, GLenum internalformat, GLsizei width, GLsizei height, GLsizei depth, GLboolean fixedsamplelocations)');
        $proc($target, $samples, $internalformat, $width, $height, $depth, $fixedsamplelocations);
    }

    /**
     * {@see GL46::glGetMultisamplefv} queries the location of a given sample. $pname specifies the sample parameter
     * to retrieve and must be {@see GL46::GL_SAMPLE_POSITION}. $index corresponds to the sample for which the
     * location should be returned. The sample location is returned as two floating-point values in $val[0] and
     * $val[1], each between 0 and 1, corresponding to the $x and $y locations respectively in the GL pixel space of
     * that sample. (0.5, 0.5) this corresponds to the pixel center. $index must be between zero and the value of
     * {@see GL46::GL_SAMPLES} minus one.
     *
     * If the multisample mode does not have fixed sample locations, the returned values may only reflect the
     * locations of samples within some pixels.
     *
     * @see http://docs.gl/gl4/glGetMultisample
     * @since 3.2
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CFloatPtr|null $val
     * @return void
     */
    public function glGetMultisamplefv($pname, $index, ?\FFI\CData $val): void
    {
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Assert::uint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetMultisamplefv', 'void (*)(GLenum pname, GLuint index, GLfloat *val)');
        $proc($pname, $index, $val);
    }

    /**
     * {@see GL46::glSampleMaski} sets one 32-bit sub-word of the multi-word sample mask,
     * {@see GL46::GL_SAMPLE_MASK_VALUE}.
     *
     * $maskIndex specifies which 32-bit sub-word of the sample mask to update, and $mask specifies the new value to
     * use for that sub-word. $maskIndex must be less than the value of {@see GL46::GL_MAX_SAMPLE_MASK_WORDS}. Bit B
     * of mask word M corresponds to sample 32 x M + B.
     *
     * @see http://docs.gl/gl4/glSampleMaski
     * @since 3.2
     * @param int|\FFI\CData|\FFI\CInt $maskNumber
     * @param int|\FFI\CData|\FFI\CInt $mask
     * @return void
     */
    public function glSampleMaski($maskNumber, $mask): void
    {
        $maskNumber = $maskNumber instanceof \FFI\CData ? $maskNumber->cdata : $maskNumber;
        $mask = $mask instanceof \FFI\CData ? $mask->cdata : $mask;

        assert(Assert::uint16($maskNumber), 'Argument $maskNumber must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($mask), 'Argument $mask must be a C-like GLbitfield, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glSampleMaski', 'void (*)(GLuint maskNumber, GLbitfield mask)');
        $proc($maskNumber, $mask);
    }
}
