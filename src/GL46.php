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
 */
class GL46 extends GL45
{
    /**
     * @var int
     * @since 4.6
     */
    public const GL_SHADER_BINARY_FORMAT_SPIR_V = 0x9551;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_SPIR_V_BINARY = 0x9552;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_PARAMETER_BUFFER = 0x80ee;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_PARAMETER_BUFFER_BINDING = 0x80ef;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_CONTEXT_FLAG_NO_ERROR_BIT = 0x0008;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_VERTICES_SUBMITTED = 0x82ee;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_PRIMITIVES_SUBMITTED = 0x82ef;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_VERTEX_SHADER_INVOCATIONS = 0x82f0;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_TESS_CONTROL_SHADER_PATCHES = 0x82f1;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_TESS_EVALUATION_SHADER_INVOCATIONS = 0x82f2;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_GEOMETRY_SHADER_PRIMITIVES_EMITTED = 0x82f3;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_FRAGMENT_SHADER_INVOCATIONS = 0x82f4;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_COMPUTE_SHADER_INVOCATIONS = 0x82f5;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_CLIPPING_INPUT_PRIMITIVES = 0x82f6;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_CLIPPING_OUTPUT_PRIMITIVES = 0x82f7;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_POLYGON_OFFSET_CLAMP = 0x8e1b;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_SPIR_V_EXTENSIONS = 0x9553;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_NUM_SPIR_V_EXTENSIONS = 0x9554;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_TEXTURE_MAX_ANISOTROPY = 0x84fe;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_MAX_TEXTURE_MAX_ANISOTROPY = 0x84ff;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_TRANSFORM_FEEDBACK_OVERFLOW = 0x82ec;
    /**
     * @var int
     * @since 4.6
     */
    public const GL_TRANSFORM_FEEDBACK_STREAM_OVERFLOW = 0x82ed;

    /**
     * @since 4.6
     * @param int $shader
     * @param \FFI\CData|\FFI\CIntPtr|null $pEntryPoint
     * @param int $numSpecializationConstants
     * @param \FFI\CData|\FFI\CIntPtr|null $pConstantIndex
     * @param \FFI\CData|\FFI\CIntPtr|null $pConstantValue
     * @return void
     */
    public static function glSpecializeShader(
        int $shader,
        ?\FFI\CData $pEntryPoint,
        int $numSpecializationConstants,
        ?\FFI\CData $pConstantIndex,
        ?\FFI\CData $pConstantValue
    ): void {
        assert(version_compare(self::$info->version, '4.6') >= 0, __FUNCTION__ . ' is available since OpenGL 4.6, but only OpenGL '. self::$info->version . ' is available');
        assert($shader >= 0 && $shader <= 4_294_967_295, 'Argument $shader overflow: C type GLuint is required');
        assert($numSpecializationConstants >= 0 && $numSpecializationConstants <= 4_294_967_295, 'Argument $numSpecializationConstants overflow: C type GLuint is required');

        $proc = self::getProc('glSpecializeShader', 'void (*)(GLuint shader, const GLchar *pEntryPoint, GLuint numSpecializationConstants, const GLuint *pConstantIndex, const GLuint *pConstantValue)');
        $proc($shader, $pEntryPoint, $numSpecializationConstants, $pConstantIndex, $pConstantValue);
    }

    /**
     * @since 4.6
     * @param int $mode
     * @param \FFI\CData|\FFI\CPtr|null $indirect
     * @param int $drawcount
     * @param int $maxdrawcount
     * @param int $stride
     * @return void
     */
    public static function glMultiDrawArraysIndirectCount(int $mode, ?\FFI\CData $indirect, int $drawcount, int $maxdrawcount, int $stride): void
    {
        assert(version_compare(self::$info->version, '4.6') >= 0, __FUNCTION__ . ' is available since OpenGL 4.6, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');
        assert($drawcount >= 0 && $drawcount <= \PHP_INT_MAX, 'Argument $drawcount overflow: C type GLintptr is required');
        assert($maxdrawcount >= \PHP_INT_MIN && $maxdrawcount <= \PHP_INT_MAX, 'Argument $maxdrawcount overflow: C type GLsizei is required');
        assert($stride >= \PHP_INT_MIN && $stride <= \PHP_INT_MAX, 'Argument $stride overflow: C type GLsizei is required');

        $proc = self::getProc('glMultiDrawArraysIndirectCount', 'void (*)(GLenum mode, const void *indirect, GLintptr drawcount, GLsizei maxdrawcount, GLsizei stride)');
        $proc($mode, $indirect, $drawcount, $maxdrawcount, $stride);
    }

    /**
     * @since 4.6
     * @param int $mode
     * @param int $type
     * @param \FFI\CData|\FFI\CPtr|null $indirect
     * @param int $drawcount
     * @param int $maxdrawcount
     * @param int $stride
     * @return void
     */
    public static function glMultiDrawElementsIndirectCount(int $mode, int $type, ?\FFI\CData $indirect, int $drawcount, int $maxdrawcount, int $stride): void
    {
        assert(version_compare(self::$info->version, '4.6') >= 0, __FUNCTION__ . ' is available since OpenGL 4.6, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');
        assert($drawcount >= 0 && $drawcount <= \PHP_INT_MAX, 'Argument $drawcount overflow: C type GLintptr is required');
        assert($maxdrawcount >= \PHP_INT_MIN && $maxdrawcount <= \PHP_INT_MAX, 'Argument $maxdrawcount overflow: C type GLsizei is required');
        assert($stride >= \PHP_INT_MIN && $stride <= \PHP_INT_MAX, 'Argument $stride overflow: C type GLsizei is required');

        $proc = self::getProc('glMultiDrawElementsIndirectCount', 'void (*)(GLenum mode, GLenum type, const void *indirect, GLintptr drawcount, GLsizei maxdrawcount, GLsizei stride)');
        $proc($mode, $type, $indirect, $drawcount, $maxdrawcount, $stride);
    }

    /**
     * @since 4.6
     * @param float $factor
     * @param float $units
     * @param float $clamp
     * @return void
     */
    public static function glPolygonOffsetClamp(float $factor, float $units, float $clamp): void
    {
        assert(version_compare(self::$info->version, '4.6') >= 0, __FUNCTION__ . ' is available since OpenGL 4.6, but only OpenGL '. self::$info->version . ' is available');
        assert($factor >= -3.40282e38 && $factor <= 3.40282e38, 'Argument $factor overflow: C type GLfloat is required');
        assert($units >= -3.40282e38 && $units <= 3.40282e38, 'Argument $units overflow: C type GLfloat is required');
        assert($clamp >= -3.40282e38 && $clamp <= 3.40282e38, 'Argument $clamp overflow: C type GLfloat is required');

        $proc = self::getProc('glPolygonOffsetClamp', 'void (*)(GLfloat factor, GLfloat units, GLfloat clamp)');
        $proc($factor, $units, $clamp);
    }
}
