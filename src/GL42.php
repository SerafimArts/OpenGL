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
 * The OpenGL functionality up to version 4.2. Includes the deprecated symbols of the Compatibility Profile.
 *
 * OpenGL 4.2 implementations support revision 4.20 of the OpenGL Shading Language.
 *
 * Extensions promoted to core in this release:
 *
 * - ARB_texture_compression_bptc @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_texture_compression_bptc.txt
 * - ARB_compressed_texture_pixel_storage @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_compressed_texture_pixel_storage.txt
 * - ARB_shader_atomic_counters @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_shader_atomic_counters.txt
 * - ARB_texture_storage @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_texture_storage.txt
 * - ARB_transform_feedback_instanced @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_transform_feedback_instanced.txt
 * - ARB_base_instance @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_base_instance.txt
 * - ARB_shader_image_load_store @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_shader_image_load_store.txt
 * - ARB_conservative_depth @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_conservative_depth.txt
 * - ARB_shading_language_420pack @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_shading_language_420pack.txt
 * - ARB_internalformat_query @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_internalformat_query.txt
 * - ARB_map_buffer_alignment @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_map_buffer_alignment.txt
 */
class GL42 extends GL41
{
    /**
     * @var int
     * @since 4.2
     */
    public const GL_COPY_READ_BUFFER_BINDING = 0x8f36;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_COPY_WRITE_BUFFER_BINDING = 0x8f37;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_TRANSFORM_FEEDBACK_ACTIVE = 0x8e24;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_TRANSFORM_FEEDBACK_PAUSED = 0x8e23;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_UNPACK_COMPRESSED_BLOCK_WIDTH = 0x9127;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_UNPACK_COMPRESSED_BLOCK_HEIGHT = 0x9128;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_UNPACK_COMPRESSED_BLOCK_DEPTH = 0x9129;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_UNPACK_COMPRESSED_BLOCK_SIZE = 0x912a;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_PACK_COMPRESSED_BLOCK_WIDTH = 0x912b;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_PACK_COMPRESSED_BLOCK_HEIGHT = 0x912c;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_PACK_COMPRESSED_BLOCK_DEPTH = 0x912d;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_PACK_COMPRESSED_BLOCK_SIZE = 0x912e;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_NUM_SAMPLE_COUNTS = 0x9380;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_MIN_MAP_BUFFER_ALIGNMENT = 0x90bc;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_ATOMIC_COUNTER_BUFFER = 0x92c0;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_ATOMIC_COUNTER_BUFFER_BINDING = 0x92c1;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_ATOMIC_COUNTER_BUFFER_START = 0x92c2;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_ATOMIC_COUNTER_BUFFER_SIZE = 0x92c3;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_ATOMIC_COUNTER_BUFFER_DATA_SIZE = 0x92c4;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_ATOMIC_COUNTER_BUFFER_ACTIVE_ATOMIC_COUNTERS = 0x92c5;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_ATOMIC_COUNTER_BUFFER_ACTIVE_ATOMIC_COUNTER_INDICES = 0x92c6;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_ATOMIC_COUNTER_BUFFER_REFERENCED_BY_VERTEX_SHADER = 0x92c7;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_ATOMIC_COUNTER_BUFFER_REFERENCED_BY_TESS_CONTROL_SHADER = 0x92c8;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_ATOMIC_COUNTER_BUFFER_REFERENCED_BY_TESS_EVALUATION_SHADER = 0x92c9;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_ATOMIC_COUNTER_BUFFER_REFERENCED_BY_GEOMETRY_SHADER = 0x92ca;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_ATOMIC_COUNTER_BUFFER_REFERENCED_BY_FRAGMENT_SHADER = 0x92cb;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_MAX_VERTEX_ATOMIC_COUNTER_BUFFERS = 0x92cc;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_MAX_TESS_CONTROL_ATOMIC_COUNTER_BUFFERS = 0x92cd;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_MAX_TESS_EVALUATION_ATOMIC_COUNTER_BUFFERS = 0x92ce;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_MAX_GEOMETRY_ATOMIC_COUNTER_BUFFERS = 0x92cf;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_MAX_FRAGMENT_ATOMIC_COUNTER_BUFFERS = 0x92d0;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_MAX_COMBINED_ATOMIC_COUNTER_BUFFERS = 0x92d1;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_MAX_VERTEX_ATOMIC_COUNTERS = 0x92d2;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_MAX_TESS_CONTROL_ATOMIC_COUNTERS = 0x92d3;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_MAX_TESS_EVALUATION_ATOMIC_COUNTERS = 0x92d4;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_MAX_GEOMETRY_ATOMIC_COUNTERS = 0x92d5;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_MAX_FRAGMENT_ATOMIC_COUNTERS = 0x92d6;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_MAX_COMBINED_ATOMIC_COUNTERS = 0x92d7;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_MAX_ATOMIC_COUNTER_BUFFER_SIZE = 0x92d8;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_MAX_ATOMIC_COUNTER_BUFFER_BINDINGS = 0x92dc;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_ACTIVE_ATOMIC_COUNTER_BUFFERS = 0x92d9;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_UNIFORM_ATOMIC_COUNTER_BUFFER_INDEX = 0x92da;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_UNSIGNED_INT_ATOMIC_COUNTER = 0x92db;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_VERTEX_ATTRIB_ARRAY_BARRIER_BIT = 0x0001;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_ELEMENT_ARRAY_BARRIER_BIT = 0x0002;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_UNIFORM_BARRIER_BIT = 0x0004;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_TEXTURE_FETCH_BARRIER_BIT = 0x0008;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_SHADER_IMAGE_ACCESS_BARRIER_BIT = 0x0020;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_COMMAND_BARRIER_BIT = 0x0040;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_PIXEL_BUFFER_BARRIER_BIT = 0x0080;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_TEXTURE_UPDATE_BARRIER_BIT = 0x0100;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_BUFFER_UPDATE_BARRIER_BIT = 0x0200;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_FRAMEBUFFER_BARRIER_BIT = 0x0400;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_TRANSFORM_FEEDBACK_BARRIER_BIT = 0x0800;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_ATOMIC_COUNTER_BARRIER_BIT = 0x1000;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_ALL_BARRIER_BITS = 0xffffffff;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_MAX_IMAGE_UNITS = 0x8f38;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_MAX_COMBINED_IMAGE_UNITS_AND_FRAGMENT_OUTPUTS = 0x8f39;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_IMAGE_BINDING_NAME = 0x8f3a;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_IMAGE_BINDING_LEVEL = 0x8f3b;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_IMAGE_BINDING_LAYERED = 0x8f3c;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_IMAGE_BINDING_LAYER = 0x8f3d;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_IMAGE_BINDING_ACCESS = 0x8f3e;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_IMAGE_1D = 0x904c;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_IMAGE_2D = 0x904d;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_IMAGE_3D = 0x904e;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_IMAGE_2D_RECT = 0x904f;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_IMAGE_CUBE = 0x9050;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_IMAGE_BUFFER = 0x9051;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_IMAGE_1D_ARRAY = 0x9052;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_IMAGE_2D_ARRAY = 0x9053;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_IMAGE_CUBE_MAP_ARRAY = 0x9054;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_IMAGE_2D_MULTISAMPLE = 0x9055;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_IMAGE_2D_MULTISAMPLE_ARRAY = 0x9056;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_INT_IMAGE_1D = 0x9057;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_INT_IMAGE_2D = 0x9058;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_INT_IMAGE_3D = 0x9059;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_INT_IMAGE_2D_RECT = 0x905a;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_INT_IMAGE_CUBE = 0x905b;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_INT_IMAGE_BUFFER = 0x905c;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_INT_IMAGE_1D_ARRAY = 0x905d;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_INT_IMAGE_2D_ARRAY = 0x905e;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_INT_IMAGE_CUBE_MAP_ARRAY = 0x905f;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_INT_IMAGE_2D_MULTISAMPLE = 0x9060;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_INT_IMAGE_2D_MULTISAMPLE_ARRAY = 0x9061;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_UNSIGNED_INT_IMAGE_1D = 0x9062;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_UNSIGNED_INT_IMAGE_2D = 0x9063;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_UNSIGNED_INT_IMAGE_3D = 0x9064;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_UNSIGNED_INT_IMAGE_2D_RECT = 0x9065;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_UNSIGNED_INT_IMAGE_CUBE = 0x9066;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_UNSIGNED_INT_IMAGE_BUFFER = 0x9067;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_UNSIGNED_INT_IMAGE_1D_ARRAY = 0x9068;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_UNSIGNED_INT_IMAGE_2D_ARRAY = 0x9069;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_UNSIGNED_INT_IMAGE_CUBE_MAP_ARRAY = 0x906a;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_UNSIGNED_INT_IMAGE_2D_MULTISAMPLE = 0x906b;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_UNSIGNED_INT_IMAGE_2D_MULTISAMPLE_ARRAY = 0x906c;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_MAX_IMAGE_SAMPLES = 0x906d;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_IMAGE_BINDING_FORMAT = 0x906e;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_IMAGE_FORMAT_COMPATIBILITY_TYPE = 0x90c7;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_IMAGE_FORMAT_COMPATIBILITY_BY_SIZE = 0x90c8;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_IMAGE_FORMAT_COMPATIBILITY_BY_CLASS = 0x90c9;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_MAX_VERTEX_IMAGE_UNIFORMS = 0x90ca;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_MAX_TESS_CONTROL_IMAGE_UNIFORMS = 0x90cb;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_MAX_TESS_EVALUATION_IMAGE_UNIFORMS = 0x90cc;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_MAX_GEOMETRY_IMAGE_UNIFORMS = 0x90cd;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_MAX_FRAGMENT_IMAGE_UNIFORMS = 0x90ce;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_MAX_COMBINED_IMAGE_UNIFORMS = 0x90cf;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_COMPRESSED_RGBA_BPTC_UNORM = 0x8e8c;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_COMPRESSED_SRGB_ALPHA_BPTC_UNORM = 0x8e8d;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_COMPRESSED_RGB_BPTC_SIGNED_FLOAT = 0x8e8e;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_COMPRESSED_RGB_BPTC_UNSIGNED_FLOAT = 0x8e8f;
    /**
     * @var int
     * @since 4.2
     */
    public const GL_TEXTURE_IMMUTABLE_FORMAT = 0x912f;

    /**
     * Behaves identically to {@see glDrawArrays} except that *`primcount`* instances of the range of
     * elements are executed and the value of the internal counter *`instanceID`* advances for each iteration.
     * *`instanceID`* is an internal 32-bit integer counter that may be read by a vertex shader as `gl_InstanceID`.
     *
     *  - `glDrawArraysInstancedBaseInstance` has the same effect as:
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
     * Specific vertex attributes may be classified as *instanced* through the use of
     * {@see glVertexAttribDivisor}. Instanced vertex attributes supply per-instance vertex data to
     * the vertex shader. The index of the vertex fetched from the enabled instanced vertex attribute arrays is
     * calculated as: gl _ InstanceID divisor + baseInstance . Note that *`baseinstance`* does not affect the
     * shader-visible value of `gl_InstanceID`.
     *
     * @see http://docs.gl/gl4/glDrawArraysInstancedBaseInstance
     * @since 4.2
     * @param int $mode
     * @param int $first
     * @param int $count
     * @param int $instancecount
     * @param int $baseinstance
     * @return void
     */
    public static function glDrawArraysInstancedBaseInstance(int $mode, int $first, int $count, int $instancecount, int $baseinstance): void
    {
        assert(version_compare(self::$info->version, '4.2') >= 0, __FUNCTION__ . ' is available since OpenGL 4.2, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');
        assert($first >= \PHP_INT_MIN && $first <= \PHP_INT_MAX, 'Argument $first overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($instancecount >= \PHP_INT_MIN && $instancecount <= \PHP_INT_MAX, 'Argument $instancecount overflow: C type GLsizei is required');
        assert($baseinstance >= 0 && $baseinstance <= 4_294_967_295, 'Argument $baseinstance overflow: C type GLuint is required');

        $proc = self::getProc('glDrawArraysInstancedBaseInstance', 'void (*)(GLenum mode, GLint first, GLsizei count, GLsizei instancecount, GLuint baseinstance)');
        $proc($mode, $first, $count, $instancecount, $baseinstance);
    }

    /**
     * Behaves identically to {@see glDrawElements} except that *`primcount`* instances of the set of
     * elements are executed and the value of the internal counter *`instanceID`* advances for each iteration.
     * *`instanceID`* is an internal 32-bit integer counter that may be read by a vertex shader as `gl_InstanceID`.
     *
     *  - `glDrawElementsInstancedBaseInstance` has the same effect as:
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
     * Specific vertex attributes may be classified as *instanced* through the use of
     * {@see glVertexAttribDivisor}. Instanced vertex attributes supply per-instance vertex data to
     * the vertex shader. The index of the vertex fetched from the enabled instanced vertex attribute arrays is
     * calculated as gl _ InstanceID divisor + baseInstance . Note that *`baseinstance`* does not affect the
     * shader-visible value of `gl_InstanceID`.
     *
     * @see http://docs.gl/gl4/glDrawElementsInstancedBaseInstance
     * @since 4.2
     * @param int $mode
     * @param int $count
     * @param int $type
     * @param \FFI\CData|\FFI\CPtr|null $indices
     * @param int $instancecount
     * @param int $baseinstance
     * @return void
     */
    public static function glDrawElementsInstancedBaseInstance(int $mode, int $count, int $type, ?\FFI\CData $indices, int $instancecount, int $baseinstance): void
    {
        assert(version_compare(self::$info->version, '4.2') >= 0, __FUNCTION__ . ' is available since OpenGL 4.2, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');
        assert($instancecount >= \PHP_INT_MIN && $instancecount <= \PHP_INT_MAX, 'Argument $instancecount overflow: C type GLsizei is required');
        assert($baseinstance >= 0 && $baseinstance <= 4_294_967_295, 'Argument $baseinstance overflow: C type GLuint is required');

        $proc = self::getProc('glDrawElementsInstancedBaseInstance', 'void (*)(GLenum mode, GLsizei count, GLenum type, const void *indices, GLsizei instancecount, GLuint baseinstance)');
        $proc($mode, $count, $type, $indices, $instancecount, $baseinstance);
    }

    /**
     * Behaves identically to {@see glDrawElementsInstanced} except that the *i*th element
     * transferred by the corresponding draw call will be taken from element *`indices`*[i] + *`basevertex`* of each
     * enabled array. If the resulting value is larger than the maximum value representable by *`type`*, it is as if
     * the calculation were upconverted to 32-bit unsigned integers (with wrapping on overflow conditions). The
     * operation is undefined if the sum would be negative. The *`basevertex`* has no effect on the shader-visible
     * value of `gl_VertexID`.
     *
     * Specific vertex attributes may be classified as *instanced* through the use of
     * {@see glVertexAttribDivisor}. Instanced vertex attributes supply per-instance vertex data to
     * the vertex shader. The index of the vertex fetched from the enabled instanced vertex attribute arrays is
     * calculated as gl _ InstanceID divisor + baseInstance . Note that *`baseinstance`* does not affect the
     * shader-visible value of `gl_InstanceID`.
     *
     * @see http://docs.gl/gl4/glDrawElementsInstancedBaseVertexBaseInstance
     * @since 4.2
     * @param int $mode
     * @param int $count
     * @param int $type
     * @param \FFI\CData|\FFI\CPtr|null $indices
     * @param int $instancecount
     * @param int $basevertex
     * @param int $baseinstance
     * @return void
     */
    public static function glDrawElementsInstancedBaseVertexBaseInstance(int $mode, int $count, int $type, ?\FFI\CData $indices, int $instancecount, int $basevertex, int $baseinstance): void
    {
        assert(version_compare(self::$info->version, '4.2') >= 0, __FUNCTION__ . ' is available since OpenGL 4.2, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');
        assert($instancecount >= \PHP_INT_MIN && $instancecount <= \PHP_INT_MAX, 'Argument $instancecount overflow: C type GLsizei is required');
        assert($basevertex >= \PHP_INT_MIN && $basevertex <= \PHP_INT_MAX, 'Argument $basevertex overflow: C type GLint is required');
        assert($baseinstance >= 0 && $baseinstance <= 4_294_967_295, 'Argument $baseinstance overflow: C type GLuint is required');

        $proc = self::getProc('glDrawElementsInstancedBaseVertexBaseInstance', 'void (*)(GLenum mode, GLsizei count, GLenum type, const void *indices, GLsizei instancecount, GLint basevertex, GLuint baseinstance)');
        $proc($mode, $count, $type, $indices, $instancecount, $basevertex, $baseinstance);
    }

    /**
     * @since 4.2
     * @param int $target
     * @param int $internalformat
     * @param int $pname
     * @param int $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetInternalformativ(int $target, int $internalformat, int $pname, int $bufSize, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '4.2') >= 0, __FUNCTION__ . ' is available since OpenGL 4.2, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($internalformat >= 0 && $internalformat <= 4_294_967_295, 'Argument $internalformat overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($bufSize >= \PHP_INT_MIN && $bufSize <= \PHP_INT_MAX, 'Argument $bufSize overflow: C type GLsizei is required');

        $proc = self::getProc('glGetInternalformativ', 'void (*)(GLenum target, GLenum internalformat, GLenum pname, GLsizei bufSize, GLint *params)');
        $proc($target, $internalformat, $pname, $bufSize, $params);
    }

    /**
     * Retrieves information about the set of active atomic counter buffers for a program object. *`program`* is the
     * name of a program object for which the command {@see glLinkProgram} has been issued in the past. It
     * is not necessary for *`program`* to have been linked successfully. The link may have failed because the number
     * of active atomic counters exceeded the limits.
     *
     * *`bufferIndex`* specifies the index of an active atomic counter buffer and must be in the range zero to the
     * value of `GL_ACTIVE_ATOMIC_COUNTER_BUFFERS` minus one. The value of `GL_ACTIVE_ATOMIC_COUNTER_BUFFERS` for
     * *`program`* indicates the number of active atomic counter buffer and can be queried with
     * {@see glGetProgram}.
     *
     * If no error occurs, the parameter(s) specified by *`pname`* are returned in *`params`*. If an error is
     * generated, the contents of *`params`* are not modified.
     *
     * If *`pname`* is `GL_ATOMIC_COUNTER_BUFFER_BINDING`, then the index of the counter buffer binding point
     * associated with the active atomic counter buffer *`bufferIndex`* for *`program`* is returned.
     *
     * If *`pname`* is `GL_ATOMIC_COUNTER_BUFFER_DATA_SIZE`, then the implementation-dependent minimum total buffer
     * object size, in baseic machine units, required to hold all active atomic counters in the atomic counter
     * binding point identified by *`bufferIndex`* is returned.
     *
     * If *`pname`* is `GL_ATOMIC_COUNTER_BUFFER_ACTIVE_ATOMIC_COUNTERS`, then the number of active atomic counters
     * for the atomic counter buffer identified by *`bufferIndex`* is returned.
     *
     * If *`pname`* is `GL_ATOMIC_COUNTER_BUFFER_ACTIVE_ATOMIC_COUNTER_INDICES`, then a list of the active atomic
     * counter indices for the atomic counter buffer identified by *`bufferIndex`* is returned. The number of
     * elements that will be written into *`params`* is the value of
     * `GL_ATOMIC_COUNTER_BUFFER_ACTIVE_ATOMIC_COUNTERS` for *`bufferIndex`*.
     *
     * If *`pname`* is `GL_ATOMIC_COUNTER_BUFFER_REFERENCED_BY_VERTEX_SHADER`,
     * `GL_ATOMIC_COUNTER_BUFFER_REFERENCED_BY_TESS_CONTROL_SHADER`,
     * `GL_ATOMIC_COUNTER_BUFFER_REFERENCED_BY_TESS_EVALUATION_SHADER`,
     * `GL_ATOMIC_COUNTER_BUFFER_REFERENCED_BY_GEOMETRY_SHADER`,
     * `GL_ATOMIC_COUNTER_BUFFER_REFERENCED_BY_FRAGMENT_SHADER`,
     * `GL_ATOMIC_COUNTER_BUFFER_REFERENCED_BY_COMPUTE_SHADER` then a boolean value indicating whether the atomic
     * counter buffer identified by *`bufferIndex`* is referenced by the vertex, tessellation control, tessellation
     * evaluation, geometry, fragment or compute processing stages of *`program`*, respectively, is returned.
     *
     * @see http://docs.gl/gl4/glGetActiveAtomicCounterBufferiv
     * @since 4.2
     * @param int $program
     * @param int $bufferIndex
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetActiveAtomicCounterBufferiv(int $program, int $bufferIndex, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '4.2') >= 0, __FUNCTION__ . ' is available since OpenGL 4.2, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($bufferIndex >= 0 && $bufferIndex <= 4_294_967_295, 'Argument $bufferIndex overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetActiveAtomicCounterBufferiv', 'void (*)(GLuint program, GLuint bufferIndex, GLenum pname, GLint *params)');
        $proc($program, $bufferIndex, $pname, $params);
    }

    /**
     * Binds a single level of a texture to an image unit for the purpose of reading and writing it from shaders.
     * *`unit`* specifies the zero-based index of the image unit to which to bind the texture level. *`texture`*
     * specifies the name of an existing texture object to bind to the image unit. If *`texture`* is zero, then any
     * existing binding to the image unit is broken. *`level`* specifies the level of the texture to bind to the
     * image unit.
     *
     * If *`texture`* is the name of a one-, two-, or three-dimensional array texture, a cube map or cube map array
     * texture, or a two-dimensional multisample array texture, then it is possible to bind either the entire array,
     * or only a single layer of the array to the image unit. In such cases, if *`layered`* is `GL_TRUE`, the entire
     * array is attached to the image unit and *`layer`* is ignored. However, if *`layered`* is `GL_FALSE` then
     * *`layer`* specifies the layer of the array to attach to the image unit.
     *
     * *`access`* specifies the access types to be performed by shaders and may be set to `GL_READ_ONLY`,
     * `GL_WRITE_ONLY`, or `GL_READ_WRITE` to indicate read-only, write-only or read-write access, respectively.
     * Violation of the access type specified in *`access`* (for example, if a shader writes to an image bound with
     * *`access`* set to `GL_READ_ONLY`) will lead to undefined results, possibly including program termination.
     *
     * *`format`* specifies the format that is to be used when performing formatted stores into the image from
     * shaders. *`format`* must be compatible with the texture's internal format and must be one of the formats
     * listed in the following table.
     *
     * Table 1. Internal Image Formats
     *
     * **Image Unit Format** **Format Qualifier** `GL_RGBA32F` `rgba32f` `GL_RGBA16F` `rgba16f` `GL_RG32F` `rg32f`
     * `GL_RG16F` `rg16f` `GL_R11F_G11F_B10F` `r11f_g11f_b10f` `GL_R32F` `r32f` `GL_R16F` `r16f` `GL_RGBA32UI`
     * `rgba32ui` `GL_RGBA16UI` `rgba16ui` `GL_RGB10_A2UI` `rgb10_a2ui` `GL_RGBA8UI` `rgba8ui` `GL_RG32UI` `rg32ui`
     * `GL_RG16UI` `rg16ui` `GL_RG8UI` `rg8ui` `GL_R32UI` `r32ui` `GL_R16UI` `r16ui` `GL_R8UI` `r8ui` `GL_RGBA32I`
     * `rgba32i` `GL_RGBA16I` `rgba16i` `GL_RGBA8I` `rgba8i` `GL_RG32I` `rg32i` `GL_RG16I` `rg16i` `GL_RG8I` `rg8i`
     * `GL_R32I` `r32i` `GL_R16I` `r16i` `GL_R8I` `r8i` `GL_RGBA16` `rgba16` `GL_RGB10_A2` `rgb10_a2` `GL_RGBA8`
     * `rgba8` `GL_RG16` `rg16` `GL_RG8` `rg8` `GL_R16` `r16` `GL_R8` `r8` `GL_RGBA16_SNORM` `rgba16_snorm`
     * `GL_RGBA8_SNORM` `rgba8_snorm` `GL_RG16_SNORM` `rg16_snorm` `GL_RG8_SNORM` `rg8_snorm` `GL_R16_SNORM`
     * `r16_snorm` `GL_R8_SNORM` `r8_snorm`
     *
     *
     *
     * When a texture is bound to an image unit, the *`format`* parameter for the image unit need not exactly match
     * the texture internal format as long as the formats are considered compatible as defined in the OpenGL
     * Specification. The matching criterion used for a given texture may be determined by calling
     * {@see glGetTexParameter} with *`value`* set to `GL_IMAGE_FORMAT_COMPATIBILITY_TYPE`, with return
     * values of `GL_IMAGE_FORMAT_COMPATIBILITY_BY_SIZE` and `GL_IMAGE_FORMAT_COMPATIBILITY_BY_CLASS`, specifying
     * matches by size and class, respectively.
     *
     * @see http://docs.gl/gl4/glBindImageTexture
     * @since 4.2
     * @param int $unit
     * @param int $texture
     * @param int $level
     * @param int $layered
     * @param int $layer
     * @param int $access
     * @param int $format
     * @return void
     */
    public static function glBindImageTexture(int $unit, int $texture, int $level, int $layered, int $layer, int $access, int $format): void
    {
        assert(version_compare(self::$info->version, '4.2') >= 0, __FUNCTION__ . ' is available since OpenGL 4.2, but only OpenGL '. self::$info->version . ' is available');
        assert($unit >= 0 && $unit <= 4_294_967_295, 'Argument $unit overflow: C type GLuint is required');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($layered >= 0 && $layered <= 255, 'Argument $layered overflow: C type GLboolean is required');
        assert($layer >= \PHP_INT_MIN && $layer <= \PHP_INT_MAX, 'Argument $layer overflow: C type GLint is required');
        assert($access >= 0 && $access <= 4_294_967_295, 'Argument $access overflow: C type GLenum is required');
        assert($format >= 0 && $format <= 4_294_967_295, 'Argument $format overflow: C type GLenum is required');

        $proc = self::getProc('glBindImageTexture', 'void (*)(GLuint unit, GLuint texture, GLint level, GLboolean layered, GLint layer, GLenum access, GLenum format)');
        $proc($unit, $texture, $level, $layered, $layer, $access, $format);
    }

    /**
     * @see http://docs.gl/gl4/glMemoryBarrier
     * @since 4.2
     * @param int $barriers
     * @return void
     */
    public static function glMemoryBarrier(int $barriers): void
    {
        assert(version_compare(self::$info->version, '4.2') >= 0, __FUNCTION__ . ' is available since OpenGL 4.2, but only OpenGL '. self::$info->version . ' is available');
        assert($barriers >= 0 && $barriers <= 4_294_967_295, 'Argument $barriers overflow: C type GLbitfield is required');

        $proc = self::getProc('glMemoryBarrier', 'void (*)(GLbitfield barriers)');
        $proc($barriers);
    }

    /**
     * And `glTextureStorage1D` specify the storage requirements for all levels of a one-dimensional texture
     * simultaneously. Once a texture is specified with this command, the format and dimensions of all levels become
     * immutable unless it is a proxy texture. The contents of the image may still be modified, however, its storage
     * requirements may not change. Such a texture is referred to as an *immutable-format* texture.
     *
     * Calling `glTexStorage1D` is equivalent, assuming no errors are generated, to executing the following
     * pseudo-code:
     *
     *  - ```
     * for (i = 0; i < levels; i++) {
     * glTexImage1D(target, i, internalformat, width, 0, format, type, NULL);
     * width = max(1, (width / 2));
     * }
     *  - ```
     *
     * Calling `glTextureStorage1D` is equivalent to the above pseudo-code, where *`target`* is the effective target
     * of *`texture`* and it is as if *`texture`* were bound to *`target`* for the purposes of `glTexImage1D`.
     *
     * Since no texture data is actually provided, the values used in the pseudo-code for *`format`* and *`type`* are
     * irrelevant and may be considered to be any values that are legal for the chosen *`internalformat`* enumerant.
     * *`internalformat`* must be one of the sized internal formats given in Table 1 below, one of the sized
     * depth-component formats `GL_DEPTH_COMPONENT32F`, `GL_DEPTH_COMPONENT24`, or `GL_DEPTH_COMPONENT16`, one of the
     * combined depth-stencil formats, `GL_DEPTH32F_STENCIL8`, or `GL_DEPTH24_STENCIL8`, or the stencil-only format,
     * `GL_STENCIL_INDEX8`. Upon success, the value of `GL_TEXTURE_IMMUTABLE_FORMAT` becomes `GL_TRUE`. The value of
     * `GL_TEXTURE_IMMUTABLE_FORMAT` may be discovered by calling {@see glGetTexParameter} with
     * *`pname`* set to `GL_TEXTURE_IMMUTABLE_FORMAT`. No further changes to the dimensions or format of the texture
     * object may be made. Using any command that might alter the dimensions or format of the texture object (such as
     * {@see glTexImage1D} or another call to `glTexStorage1D`) will result in the generation of a
     * `GL_INVALID_OPERATION` error, even if it would not, in fact, alter the dimensions or format of the object.
     *
     * Table 1. Sized Internal Formats
     *
     * **Sized Internal Format** **Base Internal Format** **Red Bits** **Green Bits** **Blue Bits** **Alpha Bits**
     * **Shared Bits** `GL_R8` `GL_RED` 8 `GL_R8_SNORM` `GL_RED` s8 `GL_R16` `GL_RED` 16 `GL_R16_SNORM` `GL_RED` s16
     * `GL_RG8` `GL_RG` 8 8 `GL_RG8_SNORM` `GL_RG` s8 s8 `GL_RG16` `GL_RG` 16 16 `GL_RG16_SNORM` `GL_RG` s16 s16
     * `GL_R3_G3_B2` `GL_RGB` 3 3 2 `GL_RGB4` `GL_RGB` 4 4 4 `GL_RGB5` `GL_RGB` 5 5 5 `GL_RGB8` `GL_RGB` 8 8 8
     * `GL_RGB8_SNORM` `GL_RGB` s8 s8 s8 `GL_RGB10` `GL_RGB` 10 10 10 `GL_RGB12` `GL_RGB` 12 12 12 `GL_RGB16_SNORM`
     * `GL_RGB` 16 16 16 `GL_RGBA2` `GL_RGB` 2 2 2 2 `GL_RGBA4` `GL_RGB` 4 4 4 4 `GL_RGB5_A1` `GL_RGBA` 5 5 5 1
     * `GL_RGBA8` `GL_RGBA` 8 8 8 8 `GL_RGBA8_SNORM` `GL_RGBA` s8 s8 s8 s8 `GL_RGB10_A2` `GL_RGBA` 10 10 10 2
     * `GL_RGB10_A2UI` `GL_RGBA` ui10 ui10 ui10 ui2 `GL_RGBA12` `GL_RGBA` 12 12 12 12 `GL_RGBA16` `GL_RGBA` 16 16 16
     * 16 `GL_SRGB8` `GL_RGB` 8 8 8 `GL_SRGB8_ALPHA8` `GL_RGBA` 8 8 8 8 `GL_R16F` `GL_RED` f16 `GL_RG16F` `GL_RG` f16
     * f16 `GL_RGB16F` `GL_RGB` f16 f16 f16 `GL_RGBA16F` `GL_RGBA` f16 f16 f16 f16 `GL_R32F` `GL_RED` f32 `GL_RG32F`
     * `GL_RG` f32 f32 `GL_RGB32F` `GL_RGB` f32 f32 f32 `GL_RGBA32F` `GL_RGBA` f32 f32 f32 f32 `GL_R11F_G11F_B10F`
     * `GL_RGB` f11 f11 f10 `GL_RGB9_E5` `GL_RGB` 9 9 9 5 `GL_R8I` `GL_RED` i8 `GL_R8UI` `GL_RED` ui8 `GL_R16I`
     * `GL_RED` i16 `GL_R16UI` `GL_RED` ui16 `GL_R32I` `GL_RED` i32 `GL_R32UI` `GL_RED` ui32 `GL_RG8I` `GL_RG` i8 i8
     * `GL_RG8UI` `GL_RG` ui8 ui8 `GL_RG16I` `GL_RG` i16 i16 `GL_RG16UI` `GL_RG` ui16 ui16 `GL_RG32I` `GL_RG` i32 i32
     * `GL_RG32UI` `GL_RG` ui32 ui32 `GL_RGB8I` `GL_RGB` i8 i8 i8 `GL_RGB8UI` `GL_RGB` ui8 ui8 ui8 `GL_RGB16I`
     * `GL_RGB` i16 i16 i16 `GL_RGB16UI` `GL_RGB` ui16 ui16 ui16 `GL_RGB32I` `GL_RGB` i32 i32 i32 `GL_RGB32UI`
     * `GL_RGB` ui32 ui32 ui32 `GL_RGBA8I` `GL_RGBA` i8 i8 i8 i8 `GL_RGBA8UI` `GL_RGBA` ui8 ui8 ui8 ui8 `GL_RGBA16I`
     * `GL_RGBA` i16 i16 i16 i16 `GL_RGBA16UI` `GL_RGBA` ui16 ui16 ui16 ui16 `GL_RGBA32I` `GL_RGBA` i32 i32 i32 i32
     * `GL_RGBA32UI` `GL_RGBA` ui32 ui32 ui32 ui32
     *
     * @see http://docs.gl/gl4/glTexStorage1D
     * @since 4.2
     * @param int $target
     * @param int $levels
     * @param int $internalformat
     * @param int $width
     * @return void
     */
    public static function glTexStorage1D(int $target, int $levels, int $internalformat, int $width): void
    {
        assert(version_compare(self::$info->version, '4.2') >= 0, __FUNCTION__ . ' is available since OpenGL 4.2, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($levels >= \PHP_INT_MIN && $levels <= \PHP_INT_MAX, 'Argument $levels overflow: C type GLsizei is required');
        assert($internalformat >= 0 && $internalformat <= 4_294_967_295, 'Argument $internalformat overflow: C type GLenum is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');

        $proc = self::getProc('glTexStorage1D', 'void (*)(GLenum target, GLsizei levels, GLenum internalformat, GLsizei width)');
        $proc($target, $levels, $internalformat, $width);
    }

    /**
     * And `glTextureStorage2D` specify the storage requirements for all levels of a two-dimensional texture or
     * one-dimensional texture array simultaneously. Once a texture is specified with this command, the format and
     * dimensions of all levels become immutable unless it is a proxy texture. The contents of the image may still be
     * modified, however, its storage requirements may not change. Such a texture is referred to as an
     * *immutable-format* texture.
     *
     * The behavior of `glTexStorage2D` depends on the *`target`* parameter. When *`target`* is `GL_TEXTURE_2D`,
     * `GL_PROXY_TEXTURE_2D`, `GL_TEXTURE_RECTANGLE`, `GL_PROXY_TEXTURE_RECTANGLE` or `GL_PROXY_TEXTURE_CUBE_MAP`,
     * calling `glTexStorage2D` is equivalent, assuming no errors are generated, to executing the following
     * pseudo-code:
     *
     *  - ```
     * for (i = 0; i < levels; i++) {
     * glTexImage2D(target, i, internalformat, width, height, 0, format, type, NULL);
     * width = max(1, (width / 2));
     * height = max(1, (height / 2));
     * }
     *  - ```
     *
     * When *`target`* is `GL_TEXTURE_CUBE_MAP`, `glTexStorage2D` is equivalent to:
     *
     *  - ```
     * for (i = 0; i < levels; i++) {
     * for (face in (+X, -X, +Y, -Y, +Z, -Z)) {
     * glTexImage2D(face, i, internalformat, width, height, 0, format, type, NULL);
     * }
     * width = max(1, (width / 2));
     * height = max(1, (height / 2));
     * }
     *  - ```
     *
     * When *`target`* is `GL_TEXTURE_1D` or `GL_TEXTURE_1D_ARRAY`, `glTexStorage2D` is equivalent to:
     *
     *  - ```
     * for (i = 0; i < levels; i++) {
     * glTexImage2D(target, i, internalformat, width, height, 0, format, type, NULL);
     * width = max(1, (width / 2));
     * }
     *  - ```
     *
     * Calling `glTextureStorage2D` is equivalent to the above pseudo-code, where *`target`* is the effective target
     * of *`texture`* and it is as if *`texture`* were bound to *`target`* for the purposes of `glTexImage2D`.
     *
     * Since no texture data is actually provided, the values used in the pseudo-code for *`format`* and *`type`* are
     * irrelevant and may be considered to be any values that are legal for the chosen *`internalformat`* enumerant.
     * *`internalformat`* must be one of the sized internal formats given in Table 1 below, one of the sized
     * depth-component formats `GL_DEPTH_COMPONENT32F`, `GL_DEPTH_COMPONENT24`, or `GL_DEPTH_COMPONENT16`, one of the
     * combined depth-stencil formats, `GL_DEPTH32F_STENCIL8`, or `GL_DEPTH24_STENCIL8`, or the stencil-only format,
     * `GL_STENCIL_INDEX8`. Upon success, the value of `GL_TEXTURE_IMMUTABLE_FORMAT` becomes `GL_TRUE`. The value of
     * `GL_TEXTURE_IMMUTABLE_FORMAT` may be discovered by calling {@see glGetTexParameter} with
     * *`pname`* set to `GL_TEXTURE_IMMUTABLE_FORMAT`. No further changes to the dimensions or format of the texture
     * object may be made. Using any command that might alter the dimensions or format of the texture object (such as
     * {@see glTexImage2D} or another call to `glTexStorage2D`) will result in the generation of a
     * `GL_INVALID_OPERATION` error, even if it would not, in fact, alter the dimensions or format of the object.
     *
     * Table 1. Sized Internal Formats
     *
     * **Sized Internal Format** **Base Internal Format** **Red Bits** **Green Bits** **Blue Bits** **Alpha Bits**
     * **Shared Bits** `GL_R8` `GL_RED` 8 `GL_R8_SNORM` `GL_RED` s8 `GL_R16` `GL_RED` 16 `GL_R16_SNORM` `GL_RED` s16
     * `GL_RG8` `GL_RG` 8 8 `GL_RG8_SNORM` `GL_RG` s8 s8 `GL_RG16` `GL_RG` 16 16 `GL_RG16_SNORM` `GL_RG` s16 s16
     * `GL_R3_G3_B2` `GL_RGB` 3 3 2 `GL_RGB4` `GL_RGB` 4 4 4 `GL_RGB5` `GL_RGB` 5 5 5 `GL_RGB8` `GL_RGB` 8 8 8
     * `GL_RGB8_SNORM` `GL_RGB` s8 s8 s8 `GL_RGB10` `GL_RGB` 10 10 10 `GL_RGB12` `GL_RGB` 12 12 12 `GL_RGB16_SNORM`
     * `GL_RGB` 16 16 16 `GL_RGBA2` `GL_RGB` 2 2 2 2 `GL_RGBA4` `GL_RGB` 4 4 4 4 `GL_RGB5_A1` `GL_RGBA` 5 5 5 1
     * `GL_RGBA8` `GL_RGBA` 8 8 8 8 `GL_RGBA8_SNORM` `GL_RGBA` s8 s8 s8 s8 `GL_RGB10_A2` `GL_RGBA` 10 10 10 2
     * `GL_RGB10_A2UI` `GL_RGBA` ui10 ui10 ui10 ui2 `GL_RGBA12` `GL_RGBA` 12 12 12 12 `GL_RGBA16` `GL_RGBA` 16 16 16
     * 16 `GL_SRGB8` `GL_RGB` 8 8 8 `GL_SRGB8_ALPHA8` `GL_RGBA` 8 8 8 8 `GL_R16F` `GL_RED` f16 `GL_RG16F` `GL_RG` f16
     * f16 `GL_RGB16F` `GL_RGB` f16 f16 f16 `GL_RGBA16F` `GL_RGBA` f16 f16 f16 f16 `GL_R32F` `GL_RED` f32 `GL_RG32F`
     * `GL_RG` f32 f32 `GL_RGB32F` `GL_RGB` f32 f32 f32 `GL_RGBA32F` `GL_RGBA` f32 f32 f32 f32 `GL_R11F_G11F_B10F`
     * `GL_RGB` f11 f11 f10 `GL_RGB9_E5` `GL_RGB` 9 9 9 5 `GL_R8I` `GL_RED` i8 `GL_R8UI` `GL_RED` ui8 `GL_R16I`
     * `GL_RED` i16 `GL_R16UI` `GL_RED` ui16 `GL_R32I` `GL_RED` i32 `GL_R32UI` `GL_RED` ui32 `GL_RG8I` `GL_RG` i8 i8
     * `GL_RG8UI` `GL_RG` ui8 ui8 `GL_RG16I` `GL_RG` i16 i16 `GL_RG16UI` `GL_RG` ui16 ui16 `GL_RG32I` `GL_RG` i32 i32
     * `GL_RG32UI` `GL_RG` ui32 ui32 `GL_RGB8I` `GL_RGB` i8 i8 i8 `GL_RGB8UI` `GL_RGB` ui8 ui8 ui8 `GL_RGB16I`
     * `GL_RGB` i16 i16 i16 `GL_RGB16UI` `GL_RGB` ui16 ui16 ui16 `GL_RGB32I` `GL_RGB` i32 i32 i32 `GL_RGB32UI`
     * `GL_RGB` ui32 ui32 ui32 `GL_RGBA8I` `GL_RGBA` i8 i8 i8 i8 `GL_RGBA8UI` `GL_RGBA` ui8 ui8 ui8 ui8 `GL_RGBA16I`
     * `GL_RGBA` i16 i16 i16 i16 `GL_RGBA16UI` `GL_RGBA` ui16 ui16 ui16 ui16 `GL_RGBA32I` `GL_RGBA` i32 i32 i32 i32
     * `GL_RGBA32UI` `GL_RGBA` ui32 ui32 ui32 ui32
     *
     * @see http://docs.gl/gl4/glTexStorage2D
     * @since 4.2
     * @param int $target
     * @param int $levels
     * @param int $internalformat
     * @param int $width
     * @param int $height
     * @return void
     */
    public static function glTexStorage2D(int $target, int $levels, int $internalformat, int $width, int $height): void
    {
        assert(version_compare(self::$info->version, '4.2') >= 0, __FUNCTION__ . ' is available since OpenGL 4.2, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($levels >= \PHP_INT_MIN && $levels <= \PHP_INT_MAX, 'Argument $levels overflow: C type GLsizei is required');
        assert($internalformat >= 0 && $internalformat <= 4_294_967_295, 'Argument $internalformat overflow: C type GLenum is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');

        $proc = self::getProc('glTexStorage2D', 'void (*)(GLenum target, GLsizei levels, GLenum internalformat, GLsizei width, GLsizei height)');
        $proc($target, $levels, $internalformat, $width, $height);
    }

    /**
     * And `glTextureStorage3D` specify specify the storage requirements for all levels of a three-dimensional,
     * two-dimensional array or cube-map array texture simultaneously. Once a texture is specified with this command,
     * the format and dimensions of all levels become immutable unless it is a proxy texture. The contents of the
     * image may still be modified, however, its storage requirements may not change. Such a texture is referred to
     * as an *immutable-format* texture.
     *
     * The behavior of `glTexStorage3D` depends on the *`target`* parameter. When *`target`* is `GL_TEXTURE_3D`, or
     * `GL_PROXY_TEXTURE_3D`, calling `glTexStorage3D` is equivalent, assuming no errors are generated, to executing
     * the following pseudo-code:
     *
     *  - ```
     * for (i = 0; i < levels; i++) {
     * glTexImage3D(target, i, internalformat, width, height, depth, 0, format, type, NULL);
     * width = max(1, (width / 2));
     * height = max(1, (height / 2));
     * depth = max(1, (depth / 2));
     * }
     *  - ```
     *
     * When *`target`* is `GL_TEXTURE_2D_ARRAY`, `GL_PROXY_TEXTURE_2D_ARRAY`, `GL_TEXTURE_CUBE_MAP_ARRAY`, or
     * `GL_PROXY_TEXTURE_CUBE_MAP_ARRAY`, `glTexStorage3D` is equivalent to:
     *
     *  - ```
     * for (i = 0; i < levels; i++) {
     * glTexImage3D(target, i, internalformat, width, height, depth, 0, format, type, NULL);
     * width = max(1, (width / 2));
     * height = max(1, (height / 2));
     * }
     *  - ```
     *
     * Calling `glTextureStorage3D` is equivalent to the above pseudo-code, where *`target`* is the effective target
     * of *`texture`* and it is as if *`texture`* were bound to *`target`* for the purposes of `glTexImage3D`.
     *
     * Since no texture data is actually provided, the values used in the pseudo-code for *`format`* and *`type`* are
     * irrelevant and may be considered to be any values that are legal for the chosen *`internalformat`* enumerant.
     * *`internalformat`* must be one of the sized internal formats given in Table 1 below, one of the sized
     * depth-component formats `GL_DEPTH_COMPONENT32F`, `GL_DEPTH_COMPONENT24`, or `GL_DEPTH_COMPONENT16`, one of the
     * combined depth-stencil formats, `GL_DEPTH32F_STENCIL8`, or `GL_DEPTH24_STENCIL8`, or the stencil-only format,
     * `GL_STENCIL_INDEX8`. Upon success, the value of `GL_TEXTURE_IMMUTABLE_FORMAT` becomes `GL_TRUE`. The value of
     * `GL_TEXTURE_IMMUTABLE_FORMAT` may be discovered by calling {@see glGetTexParameter} with
     * *`pname`* set to `GL_TEXTURE_IMMUTABLE_FORMAT`. No further changes to the dimensions or format of the texture
     * object may be made. Using any command that might alter the dimensions or format of the texture object (such as
     * {@see glTexImage3D} or another call to `glTexStorage3D`) will result in the generation of a
     * `GL_INVALID_OPERATION` error, even if it would not, in fact, alter the dimensions or format of the object.
     *
     * Table 1. Sized Internal Formats
     *
     * **Sized Internal Format** **Base Internal Format** **Red Bits** **Green Bits** **Blue Bits** **Alpha Bits**
     * **Shared Bits** `GL_R8` `GL_RED` 8 `GL_R8_SNORM` `GL_RED` s8 `GL_R16` `GL_RED` 16 `GL_R16_SNORM` `GL_RED` s16
     * `GL_RG8` `GL_RG` 8 8 `GL_RG8_SNORM` `GL_RG` s8 s8 `GL_RG16` `GL_RG` 16 16 `GL_RG16_SNORM` `GL_RG` s16 s16
     * `GL_R3_G3_B2` `GL_RGB` 3 3 2 `GL_RGB4` `GL_RGB` 4 4 4 `GL_RGB5` `GL_RGB` 5 5 5 `GL_RGB8` `GL_RGB` 8 8 8
     * `GL_RGB8_SNORM` `GL_RGB` s8 s8 s8 `GL_RGB10` `GL_RGB` 10 10 10 `GL_RGB12` `GL_RGB` 12 12 12 `GL_RGB16_SNORM`
     * `GL_RGB` 16 16 16 `GL_RGBA2` `GL_RGB` 2 2 2 2 `GL_RGBA4` `GL_RGB` 4 4 4 4 `GL_RGB5_A1` `GL_RGBA` 5 5 5 1
     * `GL_RGBA8` `GL_RGBA` 8 8 8 8 `GL_RGBA8_SNORM` `GL_RGBA` s8 s8 s8 s8 `GL_RGB10_A2` `GL_RGBA` 10 10 10 2
     * `GL_RGB10_A2UI` `GL_RGBA` ui10 ui10 ui10 ui2 `GL_RGBA12` `GL_RGBA` 12 12 12 12 `GL_RGBA16` `GL_RGBA` 16 16 16
     * 16 `GL_SRGB8` `GL_RGB` 8 8 8 `GL_SRGB8_ALPHA8` `GL_RGBA` 8 8 8 8 `GL_R16F` `GL_RED` f16 `GL_RG16F` `GL_RG` f16
     * f16 `GL_RGB16F` `GL_RGB` f16 f16 f16 `GL_RGBA16F` `GL_RGBA` f16 f16 f16 f16 `GL_R32F` `GL_RED` f32 `GL_RG32F`
     * `GL_RG` f32 f32 `GL_RGB32F` `GL_RGB` f32 f32 f32 `GL_RGBA32F` `GL_RGBA` f32 f32 f32 f32 `GL_R11F_G11F_B10F`
     * `GL_RGB` f11 f11 f10 `GL_RGB9_E5` `GL_RGB` 9 9 9 5 `GL_R8I` `GL_RED` i8 `GL_R8UI` `GL_RED` ui8 `GL_R16I`
     * `GL_RED` i16 `GL_R16UI` `GL_RED` ui16 `GL_R32I` `GL_RED` i32 `GL_R32UI` `GL_RED` ui32 `GL_RG8I` `GL_RG` i8 i8
     * `GL_RG8UI` `GL_RG` ui8 ui8 `GL_RG16I` `GL_RG` i16 i16 `GL_RG16UI` `GL_RG` ui16 ui16 `GL_RG32I` `GL_RG` i32 i32
     * `GL_RG32UI` `GL_RG` ui32 ui32 `GL_RGB8I` `GL_RGB` i8 i8 i8 `GL_RGB8UI` `GL_RGB` ui8 ui8 ui8 `GL_RGB16I`
     * `GL_RGB` i16 i16 i16 `GL_RGB16UI` `GL_RGB` ui16 ui16 ui16 `GL_RGB32I` `GL_RGB` i32 i32 i32 `GL_RGB32UI`
     * `GL_RGB` ui32 ui32 ui32 `GL_RGBA8I` `GL_RGBA` i8 i8 i8 i8 `GL_RGBA8UI` `GL_RGBA` ui8 ui8 ui8 ui8 `GL_RGBA16I`
     * `GL_RGBA` i16 i16 i16 i16 `GL_RGBA16UI` `GL_RGBA` ui16 ui16 ui16 ui16 `GL_RGBA32I` `GL_RGBA` i32 i32 i32 i32
     * `GL_RGBA32UI` `GL_RGBA` ui32 ui32 ui32 ui32
     *
     * @see http://docs.gl/gl4/glTexStorage3D
     * @since 4.2
     * @param int $target
     * @param int $levels
     * @param int $internalformat
     * @param int $width
     * @param int $height
     * @param int $depth
     * @return void
     */
    public static function glTexStorage3D(int $target, int $levels, int $internalformat, int $width, int $height, int $depth): void
    {
        assert(version_compare(self::$info->version, '4.2') >= 0, __FUNCTION__ . ' is available since OpenGL 4.2, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($levels >= \PHP_INT_MIN && $levels <= \PHP_INT_MAX, 'Argument $levels overflow: C type GLsizei is required');
        assert($internalformat >= 0 && $internalformat <= 4_294_967_295, 'Argument $internalformat overflow: C type GLenum is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');
        assert($depth >= \PHP_INT_MIN && $depth <= \PHP_INT_MAX, 'Argument $depth overflow: C type GLsizei is required');

        $proc = self::getProc('glTexStorage3D', 'void (*)(GLenum target, GLsizei levels, GLenum internalformat, GLsizei width, GLsizei height, GLsizei depth)');
        $proc($target, $levels, $internalformat, $width, $height, $depth);
    }

    /**
     * Draws multiple copies of a range of primitives of a type specified by *`mode`* using a count retrieved from
     * the transform feedback stream specified by *`stream`* of the transform feedback object specified by *`id`*.
     * Calling `glDrawTransformFeedbackInstanced` is equivalent to calling
     * {@see glDrawArraysInstanced} with *`mode`* and *`primcount`* as specified, *`first`* set to
     * zero, and *`count`* set to the number of vertices captured on vertex stream zero the last time transform
     * feedback was active on the transform feedback object named by *`id`*.
     *
     * Calling `glDrawTransformFeedbackInstanced` is equivalent to calling
     * {@see glDrawTransformFeedbackStreamInstanced} with *`stream`* set to zero.
     *
     * @see http://docs.gl/gl4/glDrawTransformFeedbackInstanced
     * @since 4.2
     * @param int $mode
     * @param int $id
     * @param int $instancecount
     * @return void
     */
    public static function glDrawTransformFeedbackInstanced(int $mode, int $id, int $instancecount): void
    {
        assert(version_compare(self::$info->version, '4.2') >= 0, __FUNCTION__ . ' is available since OpenGL 4.2, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');
        assert($id >= 0 && $id <= 4_294_967_295, 'Argument $id overflow: C type GLuint is required');
        assert($instancecount >= \PHP_INT_MIN && $instancecount <= \PHP_INT_MAX, 'Argument $instancecount overflow: C type GLsizei is required');

        $proc = self::getProc('glDrawTransformFeedbackInstanced', 'void (*)(GLenum mode, GLuint id, GLsizei instancecount)');
        $proc($mode, $id, $instancecount);
    }

    /**
     * Draws multiple copies of a range of primitives of a type specified by *`mode`* using a count retrieved from
     * the transform feedback stream specified by *`stream`* of the transform feedback object specified by *`id`*.
     * Calling `glDrawTransformFeedbackStreamInstanced` is equivalent to calling
     * {@see glDrawArraysInstanced} with *`mode`* and *`primcount`* as specified, *`first`* set to
     * zero, and *`count`* set to the number of vertices captured on vertex stream *`stream`* the last time transform
     * feedback was active on the transform feedback object named by *`id`*.
     *
     * Calling {@see glDrawTransformFeedbackInstanced} is equivalent to calling
     * `glDrawTransformFeedbackStreamInstanced` with *`stream`* set to zero.
     *
     * @see http://docs.gl/gl4/glDrawTransformFeedbackStreamInstanced
     * @since 4.2
     * @param int $mode
     * @param int $id
     * @param int $stream
     * @param int $instancecount
     * @return void
     */
    public static function glDrawTransformFeedbackStreamInstanced(int $mode, int $id, int $stream, int $instancecount): void
    {
        assert(version_compare(self::$info->version, '4.2') >= 0, __FUNCTION__ . ' is available since OpenGL 4.2, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');
        assert($id >= 0 && $id <= 4_294_967_295, 'Argument $id overflow: C type GLuint is required');
        assert($stream >= 0 && $stream <= 4_294_967_295, 'Argument $stream overflow: C type GLuint is required');
        assert($instancecount >= \PHP_INT_MIN && $instancecount <= \PHP_INT_MAX, 'Argument $instancecount overflow: C type GLsizei is required');

        $proc = self::getProc('glDrawTransformFeedbackStreamInstanced', 'void (*)(GLenum mode, GLuint id, GLuint stream, GLsizei instancecount)');
        $proc($mode, $id, $stream, $instancecount);
    }
}
