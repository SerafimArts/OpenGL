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
 * The OpenGL functionality up to version 4.5. Includes the deprecated symbols of the Compatibility Profile.
 *
 * OpenGL 4.5 implementations support revision 4.50 of the OpenGL Shading Language.
 *
 * Extensions promoted to core in this release:
 *
 * - ARB_clip_control @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_clip_control.txt
 * - ARB_cull_distance @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_cull_distance.txt
 * - ARB_ES3_1_compatibility @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_ES3_1_compatibility.txt
 * - ARB_conditional_render_inverted @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_conditional_render_inverted.txt
 * - KHR_context_flush_control @see https://www.khronos.org/registry/OpenGL/extensions/KHR/KHR_context_flush_control.txt
 * - ARB_derivative_control @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_derivative_control.txt
 * - ARB_direct_state_access @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_direct_state_access.txt
 * - ARB_get_texture_sub_image @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_get_texture_sub_image.txt
 * - KHR_robustness @see https://www.khronos.org/registry/OpenGL/extensions/KHR/KHR_robustness.txt
 * - ARB_shader_texture_image_samples @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_shader_texture_image_samples.txt
 * - ARB_texture_barrier @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_texture_barrier.txt
 */
class GL45 extends GL44
{
    /**
     * @var int
     * @since 4.5
     */
    public const GL_CONTEXT_LOST = 0x0507;
    /**
     * @var int
     * @since 4.5
     */
    public const GL_NEGATIVE_ONE_TO_ONE = 0x935e;
    /**
     * @var int
     * @since 4.5
     */
    public const GL_ZERO_TO_ONE = 0x935f;
    /**
     * @var int
     * @since 4.5
     */
    public const GL_CLIP_ORIGIN = 0x935c;
    /**
     * @var int
     * @since 4.5
     */
    public const GL_CLIP_DEPTH_MODE = 0x935d;
    /**
     * @var int
     * @since 4.5
     */
    public const GL_QUERY_WAIT_INVERTED = 0x8e17;
    /**
     * @var int
     * @since 4.5
     */
    public const GL_QUERY_NO_WAIT_INVERTED = 0x8e18;
    /**
     * @var int
     * @since 4.5
     */
    public const GL_QUERY_BY_REGION_WAIT_INVERTED = 0x8e19;
    /**
     * @var int
     * @since 4.5
     */
    public const GL_QUERY_BY_REGION_NO_WAIT_INVERTED = 0x8e1a;
    /**
     * @var int
     * @since 4.5
     */
    public const GL_MAX_CULL_DISTANCES = 0x82f9;
    /**
     * @var int
     * @since 4.5
     */
    public const GL_MAX_COMBINED_CLIP_AND_CULL_DISTANCES = 0x82fa;
    /**
     * @var int
     * @since 4.5
     */
    public const GL_TEXTURE_TARGET = 0x1006;
    /**
     * @var int
     * @since 4.5
     */
    public const GL_QUERY_TARGET = 0x82ea;
    /**
     * @var int
     * @since 4.5
     */
    public const GL_GUILTY_CONTEXT_RESET = 0x8253;
    /**
     * @var int
     * @since 4.5
     */
    public const GL_INNOCENT_CONTEXT_RESET = 0x8254;
    /**
     * @var int
     * @since 4.5
     */
    public const GL_UNKNOWN_CONTEXT_RESET = 0x8255;
    /**
     * @var int
     * @since 4.5
     */
    public const GL_RESET_NOTIFICATION_STRATEGY = 0x8256;
    /**
     * @var int
     * @since 4.5
     */
    public const GL_LOSE_CONTEXT_ON_RESET = 0x8252;
    /**
     * @var int
     * @since 4.5
     */
    public const GL_NO_RESET_NOTIFICATION = 0x8261;
    /**
     * @var int
     * @since 4.5
     */
    public const GL_CONTEXT_FLAG_ROBUST_ACCESS_BIT = 0x0004;
    /**
     * @var int
     * @since 4.5
     */
    public const GL_CONTEXT_RELEASE_BEHAVIOR = 0x82fb;
    /**
     * @var int
     * @since 4.5
     */
    public const GL_CONTEXT_RELEASE_BEHAVIOR_FLUSH = 0x82fc;

    /**
     * Controls the clipping volume behavior and the clip coordinate to window coordinate transformation behavior.
     *
     * The view volume is defined by $$z_{min} \\leq z_c \\leq w_c$$ where $z_{min} = -w_c$ when *`depth`* is
     * `GL_NEGATIVE_ONE_TO_ONE`, and $z_{min} = 0$ when *`depth`* is `GL_ZERO_TO_ONE`.
     *
     * The normalized device coordinate $y_d$ is given by $$y_d = { { f \\times y_c } \\over w_c }$$ where $f = 1$
     * when *`origin`* is `GL_LOWER_LEFT`, and $f = -1$ when *`origin`* is `GL_UPPER_LEFT`.
     *
     * The window coordinate $z_w$ is given by $$z_w = s \\times z_d + b$$ where $s = { { f - n } \\over 2 }$ and $b
     * = { {n + f} \\over 2 }$ when *`depth`* is `GL_NEGATIVE_ONE_TO_ONE`, and $s = f - n$ and $b = n$ when *`depth`*
     * is `GL_ZERO_TO_ONE`. $n$ and $f$ are the near and far depth range values set with
     * {@see glDepthRange}.
     *
     * Finally, the polygon area computation defined by {@see gl_FrontFacing} to determine if a polygon is
     * front- or back-facing has its sign negated when *`origin`* is `GL_UPPER_LEFT`.
     *
     * @see http://docs.gl/gl4/glClipControl
     * @since 4.5
     * @param int $origin
     * @param int $depth
     * @return void
     */
    public static function glClipControl(int $origin, int $depth): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($origin >= 0 && $origin <= 4_294_967_295, 'Argument $origin overflow: C type GLenum is required');
        assert($depth >= 0 && $depth <= 4_294_967_295, 'Argument $depth overflow: C type GLenum is required');

        $proc = self::getProc('glClipControl', 'void (*)(GLenum origin, GLenum depth)');
        $proc($origin, $depth);
    }

    /**
     * Returns *`n`* previously unused transform feedback object names in *`ids`*, each representing a new transform
     * feedback object initialized to the default state.
     *
     * @see http://docs.gl/gl4/glCreateTransformFeedbacks
     * @since 4.5
     * @param int $n
     * @param \FFI\CData|\FFI\CIntPtr|null $ids
     * @return void
     */
    public static function glCreateTransformFeedbacks(int $n, ?\FFI\CData $ids): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($n >= \PHP_INT_MIN && $n <= \PHP_INT_MAX, 'Argument $n overflow: C type GLsizei is required');

        $proc = self::getProc('glCreateTransformFeedbacks', 'void (*)(GLsizei n, GLuint *ids)');
        $proc($n, $ids);
    }

    /**
     * Binds the buffer object *`buffer`* to the binding point at index *`index`* of the transform feedback object
     * *`xfb`*.
     *
     * @see http://docs.gl/gl4/glTransformFeedbackBufferBase
     * @since 4.5
     * @param int $xfb
     * @param int $index
     * @param int $buffer
     * @return void
     */
    public static function glTransformFeedbackBufferBase(int $xfb, int $index, int $buffer): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($xfb >= 0 && $xfb <= 4_294_967_295, 'Argument $xfb overflow: C type GLuint is required');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLuint is required');

        $proc = self::getProc('glTransformFeedbackBufferBase', 'void (*)(GLuint xfb, GLuint index, GLuint buffer)');
        $proc($xfb, $index, $buffer);
    }

    /**
     * Binds a range of the buffer object *`buffer`* represented by *`offset`* and *`size`* to the binding point at
     * index *`index`* of the transform feedback object *`xfb`*.
     *
     * *`offset`* specifies the offset in basic machine units into the buffer object *`buffer`* and *`size`*
     * specifies the amount of data that can be read from the buffer object while used as an indexed target.
     *
     * @see http://docs.gl/gl4/glTransformFeedbackBufferRange
     * @since 4.5
     * @param int $xfb
     * @param int $index
     * @param int $buffer
     * @param int $offset
     * @param int $size
     * @return void
     */
    public static function glTransformFeedbackBufferRange(int $xfb, int $index, int $buffer, int $offset, int $size): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($xfb >= 0 && $xfb <= 4_294_967_295, 'Argument $xfb overflow: C type GLuint is required');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLuint is required');
        assert($offset >= 0 && $offset <= \PHP_INT_MAX, 'Argument $offset overflow: C type GLintptr is required');
        assert($size >= 0 && $size <= \PHP_INT_MAX, 'Argument $size overflow: C type GLsizeiptr is required');

        $proc = self::getProc('glTransformFeedbackBufferRange', 'void (*)(GLuint xfb, GLuint index, GLuint buffer, GLintptr offset, GLsizeiptr size)');
        $proc($xfb, $index, $buffer, $offset, $size);
    }

    /**
     * @since 4.5
     * @param int $xfb
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $param
     * @return void
     */
    public static function glGetTransformFeedbackiv(int $xfb, int $pname, ?\FFI\CData $param): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($xfb >= 0 && $xfb <= 4_294_967_295, 'Argument $xfb overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetTransformFeedbackiv', 'void (*)(GLuint xfb, GLenum pname, GLint *param)');
        $proc($xfb, $pname, $param);
    }

    /**
     * @since 4.5
     * @param int $xfb
     * @param int $pname
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $param
     * @return void
     */
    public static function glGetTransformFeedbacki_v(int $xfb, int $pname, int $index, ?\FFI\CData $param): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($xfb >= 0 && $xfb <= 4_294_967_295, 'Argument $xfb overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glGetTransformFeedbacki_v', 'void (*)(GLuint xfb, GLenum pname, GLuint index, GLint *param)');
        $proc($xfb, $pname, $index, $param);
    }

    /**
     * @since 4.5
     * @param int $xfb
     * @param int $pname
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $param
     * @return void
     */
    public static function glGetTransformFeedbacki64_v(int $xfb, int $pname, int $index, ?\FFI\CData $param): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($xfb >= 0 && $xfb <= 4_294_967_295, 'Argument $xfb overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glGetTransformFeedbacki64_v', 'void (*)(GLuint xfb, GLenum pname, GLuint index, GLint64 *param)');
        $proc($xfb, $pname, $index, $param);
    }

    /**
     * Returns *`n`* previously unused buffer names in *`buffers`*, each representing a new buffer object initialized
     * as if it had been bound to an unspecified target.
     *
     * @see http://docs.gl/gl4/glCreateBuffers
     * @since 4.5
     * @param int $n
     * @param \FFI\CData|\FFI\CIntPtr|null $buffers
     * @return void
     */
    public static function glCreateBuffers(int $n, ?\FFI\CData $buffers): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($n >= \PHP_INT_MIN && $n <= \PHP_INT_MAX, 'Argument $n overflow: C type GLsizei is required');

        $proc = self::getProc('glCreateBuffers', 'void (*)(GLsizei n, GLuint *buffers)');
        $proc($n, $buffers);
    }

    /**
     * @since 4.5
     * @param int $buffer
     * @param int $size
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @param int $flags
     * @return void
     */
    public static function glNamedBufferStorage(int $buffer, int $size, ?\FFI\CData $data, int $flags): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLuint is required');
        assert($size >= 0 && $size <= \PHP_INT_MAX, 'Argument $size overflow: C type GLsizeiptr is required');
        assert($flags >= 0 && $flags <= 4_294_967_295, 'Argument $flags overflow: C type GLbitfield is required');

        $proc = self::getProc('glNamedBufferStorage', 'void (*)(GLuint buffer, GLsizeiptr size, const void *data, GLbitfield flags)');
        $proc($buffer, $size, $data, $flags);
    }

    /**
     * @since 4.5
     * @param int $buffer
     * @param int $size
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @param int $usage
     * @return void
     */
    public static function glNamedBufferData(int $buffer, int $size, ?\FFI\CData $data, int $usage): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLuint is required');
        assert($size >= 0 && $size <= \PHP_INT_MAX, 'Argument $size overflow: C type GLsizeiptr is required');
        assert($usage >= 0 && $usage <= 4_294_967_295, 'Argument $usage overflow: C type GLenum is required');

        $proc = self::getProc('glNamedBufferData', 'void (*)(GLuint buffer, GLsizeiptr size, const void *data, GLenum usage)');
        $proc($buffer, $size, $data, $usage);
    }

    /**
     * @since 4.5
     * @param int $buffer
     * @param int $offset
     * @param int $size
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @return void
     */
    public static function glNamedBufferSubData(int $buffer, int $offset, int $size, ?\FFI\CData $data): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLuint is required');
        assert($offset >= 0 && $offset <= \PHP_INT_MAX, 'Argument $offset overflow: C type GLintptr is required');
        assert($size >= 0 && $size <= \PHP_INT_MAX, 'Argument $size overflow: C type GLsizeiptr is required');

        $proc = self::getProc('glNamedBufferSubData', 'void (*)(GLuint buffer, GLintptr offset, GLsizeiptr size, const void *data)');
        $proc($buffer, $offset, $size, $data);
    }

    /**
     * @since 4.5
     * @param int $readBuffer
     * @param int $writeBuffer
     * @param int $readOffset
     * @param int $writeOffset
     * @param int $size
     * @return void
     */
    public static function glCopyNamedBufferSubData(int $readBuffer, int $writeBuffer, int $readOffset, int $writeOffset, int $size): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($readBuffer >= 0 && $readBuffer <= 4_294_967_295, 'Argument $readBuffer overflow: C type GLuint is required');
        assert($writeBuffer >= 0 && $writeBuffer <= 4_294_967_295, 'Argument $writeBuffer overflow: C type GLuint is required');
        assert($readOffset >= 0 && $readOffset <= \PHP_INT_MAX, 'Argument $readOffset overflow: C type GLintptr is required');
        assert($writeOffset >= 0 && $writeOffset <= \PHP_INT_MAX, 'Argument $writeOffset overflow: C type GLintptr is required');
        assert($size >= 0 && $size <= \PHP_INT_MAX, 'Argument $size overflow: C type GLsizeiptr is required');

        $proc = self::getProc('glCopyNamedBufferSubData', 'void (*)(GLuint readBuffer, GLuint writeBuffer, GLintptr readOffset, GLintptr writeOffset, GLsizeiptr size)');
        $proc($readBuffer, $writeBuffer, $readOffset, $writeOffset, $size);
    }

    /**
     * @since 4.5
     * @param int $buffer
     * @param int $internalformat
     * @param int $format
     * @param int $type
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @return void
     */
    public static function glClearNamedBufferData(int $buffer, int $internalformat, int $format, int $type, ?\FFI\CData $data): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLuint is required');
        assert($internalformat >= 0 && $internalformat <= 4_294_967_295, 'Argument $internalformat overflow: C type GLenum is required');
        assert($format >= 0 && $format <= 4_294_967_295, 'Argument $format overflow: C type GLenum is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');

        $proc = self::getProc('glClearNamedBufferData', 'void (*)(GLuint buffer, GLenum internalformat, GLenum format, GLenum type, const void *data)');
        $proc($buffer, $internalformat, $format, $type, $data);
    }

    /**
     * @since 4.5
     * @param int $buffer
     * @param int $internalformat
     * @param int $offset
     * @param int $size
     * @param int $format
     * @param int $type
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @return void
     */
    public static function glClearNamedBufferSubData(int $buffer, int $internalformat, int $offset, int $size, int $format, int $type, ?\FFI\CData $data): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLuint is required');
        assert($internalformat >= 0 && $internalformat <= 4_294_967_295, 'Argument $internalformat overflow: C type GLenum is required');
        assert($offset >= 0 && $offset <= \PHP_INT_MAX, 'Argument $offset overflow: C type GLintptr is required');
        assert($size >= 0 && $size <= \PHP_INT_MAX, 'Argument $size overflow: C type GLsizeiptr is required');
        assert($format >= 0 && $format <= 4_294_967_295, 'Argument $format overflow: C type GLenum is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');

        $proc = self::getProc('glClearNamedBufferSubData', 'void (*)(GLuint buffer, GLenum internalformat, GLintptr offset, GLsizeiptr size, GLenum format, GLenum type, const void *data)');
        $proc($buffer, $internalformat, $offset, $size, $format, $type, $data);
    }

    /**
     * @since 4.5
     * @param int $buffer
     * @param int $access
     * @return \FFI\CData|\FFI\CPtr|null
     */
    public static function glMapNamedBuffer(int $buffer, int $access): \FFI\CData
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLuint is required');
        assert($access >= 0 && $access <= 4_294_967_295, 'Argument $access overflow: C type GLenum is required');

        $proc = self::getProc('glMapNamedBuffer', 'void * (*)(GLuint buffer, GLenum access)');
        return $proc($buffer, $access);
    }

    /**
     * @since 4.5
     * @param int $buffer
     * @param int $offset
     * @param int $length
     * @param int $access
     * @return \FFI\CData|\FFI\CPtr|null
     */
    public static function glMapNamedBufferRange(int $buffer, int $offset, int $length, int $access): \FFI\CData
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLuint is required');
        assert($offset >= 0 && $offset <= \PHP_INT_MAX, 'Argument $offset overflow: C type GLintptr is required');
        assert($length >= 0 && $length <= \PHP_INT_MAX, 'Argument $length overflow: C type GLsizeiptr is required');
        assert($access >= 0 && $access <= 4_294_967_295, 'Argument $access overflow: C type GLbitfield is required');

        $proc = self::getProc('glMapNamedBufferRange', 'void * (*)(GLuint buffer, GLintptr offset, GLsizeiptr length, GLbitfield access)');
        return $proc($buffer, $offset, $length, $access);
    }

    /**
     * @since 4.5
     * @param int $buffer
     * @return int
     */
    public static function glUnmapNamedBuffer(int $buffer): int
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLuint is required');

        $proc = self::getProc('glUnmapNamedBuffer', 'GLboolean (*)(GLuint buffer)');
        return $proc($buffer);
    }

    /**
     * @since 4.5
     * @param int $buffer
     * @param int $offset
     * @param int $length
     * @return void
     */
    public static function glFlushMappedNamedBufferRange(int $buffer, int $offset, int $length): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLuint is required');
        assert($offset >= 0 && $offset <= \PHP_INT_MAX, 'Argument $offset overflow: C type GLintptr is required');
        assert($length >= 0 && $length <= \PHP_INT_MAX, 'Argument $length overflow: C type GLsizeiptr is required');

        $proc = self::getProc('glFlushMappedNamedBufferRange', 'void (*)(GLuint buffer, GLintptr offset, GLsizeiptr length)');
        $proc($buffer, $offset, $length);
    }

    /**
     * @since 4.5
     * @param int $buffer
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetNamedBufferParameteriv(int $buffer, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetNamedBufferParameteriv', 'void (*)(GLuint buffer, GLenum pname, GLint *params)');
        $proc($buffer, $pname, $params);
    }

    /**
     * @since 4.5
     * @param int $buffer
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetNamedBufferParameteri64v(int $buffer, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetNamedBufferParameteri64v', 'void (*)(GLuint buffer, GLenum pname, GLint64 *params)');
        $proc($buffer, $pname, $params);
    }

    /**
     * @since 4.5
     * @param int $buffer
     * @param int $pname
     * @param \FFI\CData|\FFI\CPtrPtr|null $params
     * @return void
     */
    public static function glGetNamedBufferPointerv(int $buffer, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetNamedBufferPointerv', 'void (*)(GLuint buffer, GLenum pname, void **params)');
        $proc($buffer, $pname, $params);
    }

    /**
     * @since 4.5
     * @param int $buffer
     * @param int $offset
     * @param int $size
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @return void
     */
    public static function glGetNamedBufferSubData(int $buffer, int $offset, int $size, ?\FFI\CData $data): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLuint is required');
        assert($offset >= 0 && $offset <= \PHP_INT_MAX, 'Argument $offset overflow: C type GLintptr is required');
        assert($size >= 0 && $size <= \PHP_INT_MAX, 'Argument $size overflow: C type GLsizeiptr is required');

        $proc = self::getProc('glGetNamedBufferSubData', 'void (*)(GLuint buffer, GLintptr offset, GLsizeiptr size, void *data)');
        $proc($buffer, $offset, $size, $data);
    }

    /**
     * Returns *`n`* previously unused framebuffer names in *`framebuffers`*, each representing a new framebuffer
     * object initialized to the default state.
     *
     * @see http://docs.gl/gl4/glCreateFramebuffers
     * @since 4.5
     * @param int $n
     * @param \FFI\CData|\FFI\CIntPtr|null $framebuffers
     * @return void
     */
    public static function glCreateFramebuffers(int $n, ?\FFI\CData $framebuffers): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($n >= \PHP_INT_MIN && $n <= \PHP_INT_MAX, 'Argument $n overflow: C type GLsizei is required');

        $proc = self::getProc('glCreateFramebuffers', 'void (*)(GLsizei n, GLuint *framebuffers)');
        $proc($n, $framebuffers);
    }

    /**
     * @since 4.5
     * @param int $framebuffer
     * @param int $attachment
     * @param int $renderbuffertarget
     * @param int $renderbuffer
     * @return void
     */
    public static function glNamedFramebufferRenderbuffer(int $framebuffer, int $attachment, int $renderbuffertarget, int $renderbuffer): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($framebuffer >= 0 && $framebuffer <= 4_294_967_295, 'Argument $framebuffer overflow: C type GLuint is required');
        assert($attachment >= 0 && $attachment <= 4_294_967_295, 'Argument $attachment overflow: C type GLenum is required');
        assert($renderbuffertarget >= 0 && $renderbuffertarget <= 4_294_967_295, 'Argument $renderbuffertarget overflow: C type GLenum is required');
        assert($renderbuffer >= 0 && $renderbuffer <= 4_294_967_295, 'Argument $renderbuffer overflow: C type GLuint is required');

        $proc = self::getProc('glNamedFramebufferRenderbuffer', 'void (*)(GLuint framebuffer, GLenum attachment, GLenum renderbuffertarget, GLuint renderbuffer)');
        $proc($framebuffer, $attachment, $renderbuffertarget, $renderbuffer);
    }

    /**
     * @since 4.5
     * @param int $framebuffer
     * @param int $pname
     * @param int $param
     * @return void
     */
    public static function glNamedFramebufferParameteri(int $framebuffer, int $pname, int $param): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($framebuffer >= 0 && $framebuffer <= 4_294_967_295, 'Argument $framebuffer overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($param >= \PHP_INT_MIN && $param <= \PHP_INT_MAX, 'Argument $param overflow: C type GLint is required');

        $proc = self::getProc('glNamedFramebufferParameteri', 'void (*)(GLuint framebuffer, GLenum pname, GLint param)');
        $proc($framebuffer, $pname, $param);
    }

    /**
     * @since 4.5
     * @param int $framebuffer
     * @param int $attachment
     * @param int $texture
     * @param int $level
     * @return void
     */
    public static function glNamedFramebufferTexture(int $framebuffer, int $attachment, int $texture, int $level): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($framebuffer >= 0 && $framebuffer <= 4_294_967_295, 'Argument $framebuffer overflow: C type GLuint is required');
        assert($attachment >= 0 && $attachment <= 4_294_967_295, 'Argument $attachment overflow: C type GLenum is required');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');

        $proc = self::getProc('glNamedFramebufferTexture', 'void (*)(GLuint framebuffer, GLenum attachment, GLuint texture, GLint level)');
        $proc($framebuffer, $attachment, $texture, $level);
    }

    /**
     * @since 4.5
     * @param int $framebuffer
     * @param int $attachment
     * @param int $texture
     * @param int $level
     * @param int $layer
     * @return void
     */
    public static function glNamedFramebufferTextureLayer(int $framebuffer, int $attachment, int $texture, int $level, int $layer): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($framebuffer >= 0 && $framebuffer <= 4_294_967_295, 'Argument $framebuffer overflow: C type GLuint is required');
        assert($attachment >= 0 && $attachment <= 4_294_967_295, 'Argument $attachment overflow: C type GLenum is required');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($layer >= \PHP_INT_MIN && $layer <= \PHP_INT_MAX, 'Argument $layer overflow: C type GLint is required');

        $proc = self::getProc('glNamedFramebufferTextureLayer', 'void (*)(GLuint framebuffer, GLenum attachment, GLuint texture, GLint level, GLint layer)');
        $proc($framebuffer, $attachment, $texture, $level, $layer);
    }

    /**
     * @since 4.5
     * @param int $framebuffer
     * @param int $buf
     * @return void
     */
    public static function glNamedFramebufferDrawBuffer(int $framebuffer, int $buf): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($framebuffer >= 0 && $framebuffer <= 4_294_967_295, 'Argument $framebuffer overflow: C type GLuint is required');
        assert($buf >= 0 && $buf <= 4_294_967_295, 'Argument $buf overflow: C type GLenum is required');

        $proc = self::getProc('glNamedFramebufferDrawBuffer', 'void (*)(GLuint framebuffer, GLenum buf)');
        $proc($framebuffer, $buf);
    }

    /**
     * @since 4.5
     * @param int $framebuffer
     * @param int $n
     * @param \FFI\CData|\FFI\CIntPtr|null $bufs
     * @return void
     */
    public static function glNamedFramebufferDrawBuffers(int $framebuffer, int $n, ?\FFI\CData $bufs): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($framebuffer >= 0 && $framebuffer <= 4_294_967_295, 'Argument $framebuffer overflow: C type GLuint is required');
        assert($n >= \PHP_INT_MIN && $n <= \PHP_INT_MAX, 'Argument $n overflow: C type GLsizei is required');

        $proc = self::getProc('glNamedFramebufferDrawBuffers', 'void (*)(GLuint framebuffer, GLsizei n, const GLenum *bufs)');
        $proc($framebuffer, $n, $bufs);
    }

    /**
     * @since 4.5
     * @param int $framebuffer
     * @param int $src
     * @return void
     */
    public static function glNamedFramebufferReadBuffer(int $framebuffer, int $src): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($framebuffer >= 0 && $framebuffer <= 4_294_967_295, 'Argument $framebuffer overflow: C type GLuint is required');
        assert($src >= 0 && $src <= 4_294_967_295, 'Argument $src overflow: C type GLenum is required');

        $proc = self::getProc('glNamedFramebufferReadBuffer', 'void (*)(GLuint framebuffer, GLenum src)');
        $proc($framebuffer, $src);
    }

    /**
     * @since 4.5
     * @param int $framebuffer
     * @param int $numAttachments
     * @param \FFI\CData|\FFI\CIntPtr|null $attachments
     * @return void
     */
    public static function glInvalidateNamedFramebufferData(int $framebuffer, int $numAttachments, ?\FFI\CData $attachments): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($framebuffer >= 0 && $framebuffer <= 4_294_967_295, 'Argument $framebuffer overflow: C type GLuint is required');
        assert($numAttachments >= \PHP_INT_MIN && $numAttachments <= \PHP_INT_MAX, 'Argument $numAttachments overflow: C type GLsizei is required');

        $proc = self::getProc('glInvalidateNamedFramebufferData', 'void (*)(GLuint framebuffer, GLsizei numAttachments, const GLenum *attachments)');
        $proc($framebuffer, $numAttachments, $attachments);
    }

    /**
     * @since 4.5
     * @param int $framebuffer
     * @param int $numAttachments
     * @param \FFI\CData|\FFI\CIntPtr|null $attachments
     * @param int $x
     * @param int $y
     * @param int $width
     * @param int $height
     * @return void
     */
    public static function glInvalidateNamedFramebufferSubData(int $framebuffer, int $numAttachments, ?\FFI\CData $attachments, int $x, int $y, int $width, int $height): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($framebuffer >= 0 && $framebuffer <= 4_294_967_295, 'Argument $framebuffer overflow: C type GLuint is required');
        assert($numAttachments >= \PHP_INT_MIN && $numAttachments <= \PHP_INT_MAX, 'Argument $numAttachments overflow: C type GLsizei is required');
        assert($x >= \PHP_INT_MIN && $x <= \PHP_INT_MAX, 'Argument $x overflow: C type GLint is required');
        assert($y >= \PHP_INT_MIN && $y <= \PHP_INT_MAX, 'Argument $y overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');

        $proc = self::getProc('glInvalidateNamedFramebufferSubData', 'void (*)(GLuint framebuffer, GLsizei numAttachments, const GLenum *attachments, GLint x, GLint y, GLsizei width, GLsizei height)');
        $proc($framebuffer, $numAttachments, $attachments, $x, $y, $width, $height);
    }

    /**
     * @since 4.5
     * @param int $framebuffer
     * @param int $buffer
     * @param int $drawbuffer
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public static function glClearNamedFramebufferiv(int $framebuffer, int $buffer, int $drawbuffer, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($framebuffer >= 0 && $framebuffer <= 4_294_967_295, 'Argument $framebuffer overflow: C type GLuint is required');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLenum is required');
        assert($drawbuffer >= \PHP_INT_MIN && $drawbuffer <= \PHP_INT_MAX, 'Argument $drawbuffer overflow: C type GLint is required');

        $proc = self::getProc('glClearNamedFramebufferiv', 'void (*)(GLuint framebuffer, GLenum buffer, GLint drawbuffer, const GLint *value)');
        $proc($framebuffer, $buffer, $drawbuffer, $value);
    }

    /**
     * @since 4.5
     * @param int $framebuffer
     * @param int $buffer
     * @param int $drawbuffer
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public static function glClearNamedFramebufferuiv(int $framebuffer, int $buffer, int $drawbuffer, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($framebuffer >= 0 && $framebuffer <= 4_294_967_295, 'Argument $framebuffer overflow: C type GLuint is required');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLenum is required');
        assert($drawbuffer >= \PHP_INT_MIN && $drawbuffer <= \PHP_INT_MAX, 'Argument $drawbuffer overflow: C type GLint is required');

        $proc = self::getProc('glClearNamedFramebufferuiv', 'void (*)(GLuint framebuffer, GLenum buffer, GLint drawbuffer, const GLuint *value)');
        $proc($framebuffer, $buffer, $drawbuffer, $value);
    }

    /**
     * @since 4.5
     * @param int $framebuffer
     * @param int $buffer
     * @param int $drawbuffer
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glClearNamedFramebufferfv(int $framebuffer, int $buffer, int $drawbuffer, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($framebuffer >= 0 && $framebuffer <= 4_294_967_295, 'Argument $framebuffer overflow: C type GLuint is required');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLenum is required');
        assert($drawbuffer >= \PHP_INT_MIN && $drawbuffer <= \PHP_INT_MAX, 'Argument $drawbuffer overflow: C type GLint is required');

        $proc = self::getProc('glClearNamedFramebufferfv', 'void (*)(GLuint framebuffer, GLenum buffer, GLint drawbuffer, const GLfloat *value)');
        $proc($framebuffer, $buffer, $drawbuffer, $value);
    }

    /**
     * @since 4.5
     * @param int $framebuffer
     * @param int $buffer
     * @param int $drawbuffer
     * @param float $depth
     * @param int $stencil
     * @return void
     */
    public static function glClearNamedFramebufferfi(int $framebuffer, int $buffer, int $drawbuffer, float $depth, int $stencil): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($framebuffer >= 0 && $framebuffer <= 4_294_967_295, 'Argument $framebuffer overflow: C type GLuint is required');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLenum is required');
        assert($drawbuffer >= \PHP_INT_MIN && $drawbuffer <= \PHP_INT_MAX, 'Argument $drawbuffer overflow: C type GLint is required');
        assert($depth >= -3.40282e38 && $depth <= 3.40282e38, 'Argument $depth overflow: C type GLfloat is required');
        assert($stencil >= \PHP_INT_MIN && $stencil <= \PHP_INT_MAX, 'Argument $stencil overflow: C type GLint is required');

        $proc = self::getProc('glClearNamedFramebufferfi', 'void (*)(GLuint framebuffer, GLenum buffer, GLint drawbuffer, GLfloat depth, GLint stencil)');
        $proc($framebuffer, $buffer, $drawbuffer, $depth, $stencil);
    }

    /**
     * @since 4.5
     * @param int $readFramebuffer
     * @param int $drawFramebuffer
     * @param int $srcX0
     * @param int $srcY0
     * @param int $srcX1
     * @param int $srcY1
     * @param int $dstX0
     * @param int $dstY0
     * @param int $dstX1
     * @param int $dstY1
     * @param int $mask
     * @param int $filter
     * @return void
     */
    public static function glBlitNamedFramebuffer(
        int $readFramebuffer,
        int $drawFramebuffer,
        int $srcX0,
        int $srcY0,
        int $srcX1,
        int $srcY1,
        int $dstX0,
        int $dstY0,
        int $dstX1,
        int $dstY1,
        int $mask,
        int $filter
    ): void {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($readFramebuffer >= 0 && $readFramebuffer <= 4_294_967_295, 'Argument $readFramebuffer overflow: C type GLuint is required');
        assert($drawFramebuffer >= 0 && $drawFramebuffer <= 4_294_967_295, 'Argument $drawFramebuffer overflow: C type GLuint is required');
        assert($srcX0 >= \PHP_INT_MIN && $srcX0 <= \PHP_INT_MAX, 'Argument $srcX0 overflow: C type GLint is required');
        assert($srcY0 >= \PHP_INT_MIN && $srcY0 <= \PHP_INT_MAX, 'Argument $srcY0 overflow: C type GLint is required');
        assert($srcX1 >= \PHP_INT_MIN && $srcX1 <= \PHP_INT_MAX, 'Argument $srcX1 overflow: C type GLint is required');
        assert($srcY1 >= \PHP_INT_MIN && $srcY1 <= \PHP_INT_MAX, 'Argument $srcY1 overflow: C type GLint is required');
        assert($dstX0 >= \PHP_INT_MIN && $dstX0 <= \PHP_INT_MAX, 'Argument $dstX0 overflow: C type GLint is required');
        assert($dstY0 >= \PHP_INT_MIN && $dstY0 <= \PHP_INT_MAX, 'Argument $dstY0 overflow: C type GLint is required');
        assert($dstX1 >= \PHP_INT_MIN && $dstX1 <= \PHP_INT_MAX, 'Argument $dstX1 overflow: C type GLint is required');
        assert($dstY1 >= \PHP_INT_MIN && $dstY1 <= \PHP_INT_MAX, 'Argument $dstY1 overflow: C type GLint is required');
        assert($mask >= 0 && $mask <= 4_294_967_295, 'Argument $mask overflow: C type GLbitfield is required');
        assert($filter >= 0 && $filter <= 4_294_967_295, 'Argument $filter overflow: C type GLenum is required');

        $proc = self::getProc('glBlitNamedFramebuffer', 'void (*)(GLuint readFramebuffer, GLuint drawFramebuffer, GLint srcX0, GLint srcY0, GLint srcX1, GLint srcY1, GLint dstX0, GLint dstY0, GLint dstX1, GLint dstY1, GLbitfield mask, GLenum filter)');
        $proc($readFramebuffer, $drawFramebuffer, $srcX0, $srcY0, $srcX1, $srcY1, $dstX0, $dstY0, $dstX1, $dstY1, $mask, $filter);
    }

    /**
     * @since 4.5
     * @param int $framebuffer
     * @param int $target
     * @return int
     */
    public static function glCheckNamedFramebufferStatus(int $framebuffer, int $target): int
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($framebuffer >= 0 && $framebuffer <= 4_294_967_295, 'Argument $framebuffer overflow: C type GLuint is required');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');

        $proc = self::getProc('glCheckNamedFramebufferStatus', 'GLenum (*)(GLuint framebuffer, GLenum target)');
        return $proc($framebuffer, $target);
    }

    /**
     * @since 4.5
     * @param int $framebuffer
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $param
     * @return void
     */
    public static function glGetNamedFramebufferParameteriv(int $framebuffer, int $pname, ?\FFI\CData $param): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($framebuffer >= 0 && $framebuffer <= 4_294_967_295, 'Argument $framebuffer overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetNamedFramebufferParameteriv', 'void (*)(GLuint framebuffer, GLenum pname, GLint *param)');
        $proc($framebuffer, $pname, $param);
    }

    /**
     * @since 4.5
     * @param int $framebuffer
     * @param int $attachment
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetNamedFramebufferAttachmentParameteriv(int $framebuffer, int $attachment, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($framebuffer >= 0 && $framebuffer <= 4_294_967_295, 'Argument $framebuffer overflow: C type GLuint is required');
        assert($attachment >= 0 && $attachment <= 4_294_967_295, 'Argument $attachment overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetNamedFramebufferAttachmentParameteriv', 'void (*)(GLuint framebuffer, GLenum attachment, GLenum pname, GLint *params)');
        $proc($framebuffer, $attachment, $pname, $params);
    }

    /**
     * Returns *`n`* previously unused renderbuffer object names in *`renderbuffers`*, each representing a new
     * renderbuffer object initialized to the default state.
     *
     * @see http://docs.gl/gl4/glCreateRenderbuffers
     * @since 4.5
     * @param int $n
     * @param \FFI\CData|\FFI\CIntPtr|null $renderbuffers
     * @return void
     */
    public static function glCreateRenderbuffers(int $n, ?\FFI\CData $renderbuffers): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($n >= \PHP_INT_MIN && $n <= \PHP_INT_MAX, 'Argument $n overflow: C type GLsizei is required');

        $proc = self::getProc('glCreateRenderbuffers', 'void (*)(GLsizei n, GLuint *renderbuffers)');
        $proc($n, $renderbuffers);
    }

    /**
     * @since 4.5
     * @param int $renderbuffer
     * @param int $internalformat
     * @param int $width
     * @param int $height
     * @return void
     */
    public static function glNamedRenderbufferStorage(int $renderbuffer, int $internalformat, int $width, int $height): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($renderbuffer >= 0 && $renderbuffer <= 4_294_967_295, 'Argument $renderbuffer overflow: C type GLuint is required');
        assert($internalformat >= 0 && $internalformat <= 4_294_967_295, 'Argument $internalformat overflow: C type GLenum is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');

        $proc = self::getProc('glNamedRenderbufferStorage', 'void (*)(GLuint renderbuffer, GLenum internalformat, GLsizei width, GLsizei height)');
        $proc($renderbuffer, $internalformat, $width, $height);
    }

    /**
     * @since 4.5
     * @param int $renderbuffer
     * @param int $samples
     * @param int $internalformat
     * @param int $width
     * @param int $height
     * @return void
     */
    public static function glNamedRenderbufferStorageMultisample(int $renderbuffer, int $samples, int $internalformat, int $width, int $height): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($renderbuffer >= 0 && $renderbuffer <= 4_294_967_295, 'Argument $renderbuffer overflow: C type GLuint is required');
        assert($samples >= \PHP_INT_MIN && $samples <= \PHP_INT_MAX, 'Argument $samples overflow: C type GLsizei is required');
        assert($internalformat >= 0 && $internalformat <= 4_294_967_295, 'Argument $internalformat overflow: C type GLenum is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');

        $proc = self::getProc('glNamedRenderbufferStorageMultisample', 'void (*)(GLuint renderbuffer, GLsizei samples, GLenum internalformat, GLsizei width, GLsizei height)');
        $proc($renderbuffer, $samples, $internalformat, $width, $height);
    }

    /**
     * @since 4.5
     * @param int $renderbuffer
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetNamedRenderbufferParameteriv(int $renderbuffer, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($renderbuffer >= 0 && $renderbuffer <= 4_294_967_295, 'Argument $renderbuffer overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetNamedRenderbufferParameteriv', 'void (*)(GLuint renderbuffer, GLenum pname, GLint *params)');
        $proc($renderbuffer, $pname, $params);
    }

    /**
     * Returns *`n`* previously unused texture names in *`textures`*, each representing a new texture object of the
     * dimensionality and type specified by *`target`* and initialized to the default values for that texture type.
     *
     * *`target`* must be one of `GL_TEXTURE_1D`, `GL_TEXTURE_2D`, `GL_TEXTURE_3D`, `GL_TEXTURE_1D_ARRAY`,
     * `GL_TEXTURE_2D_ARRAY`, `GL_TEXTURE_RECTANGLE`, `GL_TEXTURE_CUBE_MAP`, `GL_TEXTURE_CUBE_MAP_ARRAY`,
     * `GL_TEXTURE_BUFFER`, `GL_TEXTURE_2D_MULTISAMPLE` or `GL_TEXTURE_2D_MULTISAMPLE_ARRAY`.
     *
     * @see http://docs.gl/gl4/glCreateTextures
     * @since 4.5
     * @param int $target
     * @param int $n
     * @param \FFI\CData|\FFI\CIntPtr|null $textures
     * @return void
     */
    public static function glCreateTextures(int $target, int $n, ?\FFI\CData $textures): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($n >= \PHP_INT_MIN && $n <= \PHP_INT_MAX, 'Argument $n overflow: C type GLsizei is required');

        $proc = self::getProc('glCreateTextures', 'void (*)(GLenum target, GLsizei n, GLuint *textures)');
        $proc($target, $n, $textures);
    }

    /**
     * @since 4.5
     * @param int $texture
     * @param int $internalformat
     * @param int $buffer
     * @return void
     */
    public static function glTextureBuffer(int $texture, int $internalformat, int $buffer): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($internalformat >= 0 && $internalformat <= 4_294_967_295, 'Argument $internalformat overflow: C type GLenum is required');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLuint is required');

        $proc = self::getProc('glTextureBuffer', 'void (*)(GLuint texture, GLenum internalformat, GLuint buffer)');
        $proc($texture, $internalformat, $buffer);
    }

    /**
     * @since 4.5
     * @param int $texture
     * @param int $internalformat
     * @param int $buffer
     * @param int $offset
     * @param int $size
     * @return void
     */
    public static function glTextureBufferRange(int $texture, int $internalformat, int $buffer, int $offset, int $size): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($internalformat >= 0 && $internalformat <= 4_294_967_295, 'Argument $internalformat overflow: C type GLenum is required');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLuint is required');
        assert($offset >= 0 && $offset <= \PHP_INT_MAX, 'Argument $offset overflow: C type GLintptr is required');
        assert($size >= 0 && $size <= \PHP_INT_MAX, 'Argument $size overflow: C type GLsizeiptr is required');

        $proc = self::getProc('glTextureBufferRange', 'void (*)(GLuint texture, GLenum internalformat, GLuint buffer, GLintptr offset, GLsizeiptr size)');
        $proc($texture, $internalformat, $buffer, $offset, $size);
    }

    /**
     * @since 4.5
     * @param int $texture
     * @param int $levels
     * @param int $internalformat
     * @param int $width
     * @return void
     */
    public static function glTextureStorage1D(int $texture, int $levels, int $internalformat, int $width): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($levels >= \PHP_INT_MIN && $levels <= \PHP_INT_MAX, 'Argument $levels overflow: C type GLsizei is required');
        assert($internalformat >= 0 && $internalformat <= 4_294_967_295, 'Argument $internalformat overflow: C type GLenum is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');

        $proc = self::getProc('glTextureStorage1D', 'void (*)(GLuint texture, GLsizei levels, GLenum internalformat, GLsizei width)');
        $proc($texture, $levels, $internalformat, $width);
    }

    /**
     * @since 4.5
     * @param int $texture
     * @param int $levels
     * @param int $internalformat
     * @param int $width
     * @param int $height
     * @return void
     */
    public static function glTextureStorage2D(int $texture, int $levels, int $internalformat, int $width, int $height): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($levels >= \PHP_INT_MIN && $levels <= \PHP_INT_MAX, 'Argument $levels overflow: C type GLsizei is required');
        assert($internalformat >= 0 && $internalformat <= 4_294_967_295, 'Argument $internalformat overflow: C type GLenum is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');

        $proc = self::getProc('glTextureStorage2D', 'void (*)(GLuint texture, GLsizei levels, GLenum internalformat, GLsizei width, GLsizei height)');
        $proc($texture, $levels, $internalformat, $width, $height);
    }

    /**
     * @since 4.5
     * @param int $texture
     * @param int $levels
     * @param int $internalformat
     * @param int $width
     * @param int $height
     * @param int $depth
     * @return void
     */
    public static function glTextureStorage3D(int $texture, int $levels, int $internalformat, int $width, int $height, int $depth): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($levels >= \PHP_INT_MIN && $levels <= \PHP_INT_MAX, 'Argument $levels overflow: C type GLsizei is required');
        assert($internalformat >= 0 && $internalformat <= 4_294_967_295, 'Argument $internalformat overflow: C type GLenum is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');
        assert($depth >= \PHP_INT_MIN && $depth <= \PHP_INT_MAX, 'Argument $depth overflow: C type GLsizei is required');

        $proc = self::getProc('glTextureStorage3D', 'void (*)(GLuint texture, GLsizei levels, GLenum internalformat, GLsizei width, GLsizei height, GLsizei depth)');
        $proc($texture, $levels, $internalformat, $width, $height, $depth);
    }

    /**
     * @since 4.5
     * @param int $texture
     * @param int $samples
     * @param int $internalformat
     * @param int $width
     * @param int $height
     * @param int $fixedsamplelocations
     * @return void
     */
    public static function glTextureStorage2DMultisample(int $texture, int $samples, int $internalformat, int $width, int $height, int $fixedsamplelocations): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($samples >= \PHP_INT_MIN && $samples <= \PHP_INT_MAX, 'Argument $samples overflow: C type GLsizei is required');
        assert($internalformat >= 0 && $internalformat <= 4_294_967_295, 'Argument $internalformat overflow: C type GLenum is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');
        assert($fixedsamplelocations >= 0 && $fixedsamplelocations <= 255, 'Argument $fixedsamplelocations overflow: C type GLboolean is required');

        $proc = self::getProc('glTextureStorage2DMultisample', 'void (*)(GLuint texture, GLsizei samples, GLenum internalformat, GLsizei width, GLsizei height, GLboolean fixedsamplelocations)');
        $proc($texture, $samples, $internalformat, $width, $height, $fixedsamplelocations);
    }

    /**
     * @since 4.5
     * @param int $texture
     * @param int $samples
     * @param int $internalformat
     * @param int $width
     * @param int $height
     * @param int $depth
     * @param int $fixedsamplelocations
     * @return void
     */
    public static function glTextureStorage3DMultisample(int $texture, int $samples, int $internalformat, int $width, int $height, int $depth, int $fixedsamplelocations): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($samples >= \PHP_INT_MIN && $samples <= \PHP_INT_MAX, 'Argument $samples overflow: C type GLsizei is required');
        assert($internalformat >= 0 && $internalformat <= 4_294_967_295, 'Argument $internalformat overflow: C type GLenum is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');
        assert($depth >= \PHP_INT_MIN && $depth <= \PHP_INT_MAX, 'Argument $depth overflow: C type GLsizei is required');
        assert($fixedsamplelocations >= 0 && $fixedsamplelocations <= 255, 'Argument $fixedsamplelocations overflow: C type GLboolean is required');

        $proc = self::getProc('glTextureStorage3DMultisample', 'void (*)(GLuint texture, GLsizei samples, GLenum internalformat, GLsizei width, GLsizei height, GLsizei depth, GLboolean fixedsamplelocations)');
        $proc($texture, $samples, $internalformat, $width, $height, $depth, $fixedsamplelocations);
    }

    /**
     * @since 4.5
     * @param int $texture
     * @param int $level
     * @param int $xoffset
     * @param int $width
     * @param int $format
     * @param int $type
     * @param \FFI\CData|\FFI\CPtr|null $pixels
     * @return void
     */
    public static function glTextureSubImage1D(int $texture, int $level, int $xoffset, int $width, int $format, int $type, ?\FFI\CData $pixels): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($xoffset >= \PHP_INT_MIN && $xoffset <= \PHP_INT_MAX, 'Argument $xoffset overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($format >= 0 && $format <= 4_294_967_295, 'Argument $format overflow: C type GLenum is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');

        $proc = self::getProc('glTextureSubImage1D', 'void (*)(GLuint texture, GLint level, GLint xoffset, GLsizei width, GLenum format, GLenum type, const void *pixels)');
        $proc($texture, $level, $xoffset, $width, $format, $type, $pixels);
    }

    /**
     * @since 4.5
     * @param int $texture
     * @param int $level
     * @param int $xoffset
     * @param int $yoffset
     * @param int $width
     * @param int $height
     * @param int $format
     * @param int $type
     * @param \FFI\CData|\FFI\CPtr|null $pixels
     * @return void
     */
    public static function glTextureSubImage2D(
        int $texture,
        int $level,
        int $xoffset,
        int $yoffset,
        int $width,
        int $height,
        int $format,
        int $type,
        ?\FFI\CData $pixels
    ): void {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($xoffset >= \PHP_INT_MIN && $xoffset <= \PHP_INT_MAX, 'Argument $xoffset overflow: C type GLint is required');
        assert($yoffset >= \PHP_INT_MIN && $yoffset <= \PHP_INT_MAX, 'Argument $yoffset overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');
        assert($format >= 0 && $format <= 4_294_967_295, 'Argument $format overflow: C type GLenum is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');

        $proc = self::getProc('glTextureSubImage2D', 'void (*)(GLuint texture, GLint level, GLint xoffset, GLint yoffset, GLsizei width, GLsizei height, GLenum format, GLenum type, const void *pixels)');
        $proc($texture, $level, $xoffset, $yoffset, $width, $height, $format, $type, $pixels);
    }

    /**
     * @since 4.5
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
     * @param \FFI\CData|\FFI\CPtr|null $pixels
     * @return void
     */
    public static function glTextureSubImage3D(
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
        ?\FFI\CData $pixels
    ): void {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($xoffset >= \PHP_INT_MIN && $xoffset <= \PHP_INT_MAX, 'Argument $xoffset overflow: C type GLint is required');
        assert($yoffset >= \PHP_INT_MIN && $yoffset <= \PHP_INT_MAX, 'Argument $yoffset overflow: C type GLint is required');
        assert($zoffset >= \PHP_INT_MIN && $zoffset <= \PHP_INT_MAX, 'Argument $zoffset overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');
        assert($depth >= \PHP_INT_MIN && $depth <= \PHP_INT_MAX, 'Argument $depth overflow: C type GLsizei is required');
        assert($format >= 0 && $format <= 4_294_967_295, 'Argument $format overflow: C type GLenum is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');

        $proc = self::getProc('glTextureSubImage3D', 'void (*)(GLuint texture, GLint level, GLint xoffset, GLint yoffset, GLint zoffset, GLsizei width, GLsizei height, GLsizei depth, GLenum format, GLenum type, const void *pixels)');
        $proc($texture, $level, $xoffset, $yoffset, $zoffset, $width, $height, $depth, $format, $type, $pixels);
    }

    /**
     * @since 4.5
     * @param int $texture
     * @param int $level
     * @param int $xoffset
     * @param int $width
     * @param int $format
     * @param int $imageSize
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @return void
     */
    public static function glCompressedTextureSubImage1D(int $texture, int $level, int $xoffset, int $width, int $format, int $imageSize, ?\FFI\CData $data): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($xoffset >= \PHP_INT_MIN && $xoffset <= \PHP_INT_MAX, 'Argument $xoffset overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($format >= 0 && $format <= 4_294_967_295, 'Argument $format overflow: C type GLenum is required');
        assert($imageSize >= \PHP_INT_MIN && $imageSize <= \PHP_INT_MAX, 'Argument $imageSize overflow: C type GLsizei is required');

        $proc = self::getProc('glCompressedTextureSubImage1D', 'void (*)(GLuint texture, GLint level, GLint xoffset, GLsizei width, GLenum format, GLsizei imageSize, const void *data)');
        $proc($texture, $level, $xoffset, $width, $format, $imageSize, $data);
    }

    /**
     * @since 4.5
     * @param int $texture
     * @param int $level
     * @param int $xoffset
     * @param int $yoffset
     * @param int $width
     * @param int $height
     * @param int $format
     * @param int $imageSize
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @return void
     */
    public static function glCompressedTextureSubImage2D(
        int $texture,
        int $level,
        int $xoffset,
        int $yoffset,
        int $width,
        int $height,
        int $format,
        int $imageSize,
        ?\FFI\CData $data
    ): void {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($xoffset >= \PHP_INT_MIN && $xoffset <= \PHP_INT_MAX, 'Argument $xoffset overflow: C type GLint is required');
        assert($yoffset >= \PHP_INT_MIN && $yoffset <= \PHP_INT_MAX, 'Argument $yoffset overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');
        assert($format >= 0 && $format <= 4_294_967_295, 'Argument $format overflow: C type GLenum is required');
        assert($imageSize >= \PHP_INT_MIN && $imageSize <= \PHP_INT_MAX, 'Argument $imageSize overflow: C type GLsizei is required');

        $proc = self::getProc('glCompressedTextureSubImage2D', 'void (*)(GLuint texture, GLint level, GLint xoffset, GLint yoffset, GLsizei width, GLsizei height, GLenum format, GLsizei imageSize, const void *data)');
        $proc($texture, $level, $xoffset, $yoffset, $width, $height, $format, $imageSize, $data);
    }

    /**
     * @since 4.5
     * @param int $texture
     * @param int $level
     * @param int $xoffset
     * @param int $yoffset
     * @param int $zoffset
     * @param int $width
     * @param int $height
     * @param int $depth
     * @param int $format
     * @param int $imageSize
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @return void
     */
    public static function glCompressedTextureSubImage3D(
        int $texture,
        int $level,
        int $xoffset,
        int $yoffset,
        int $zoffset,
        int $width,
        int $height,
        int $depth,
        int $format,
        int $imageSize,
        ?\FFI\CData $data
    ): void {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($xoffset >= \PHP_INT_MIN && $xoffset <= \PHP_INT_MAX, 'Argument $xoffset overflow: C type GLint is required');
        assert($yoffset >= \PHP_INT_MIN && $yoffset <= \PHP_INT_MAX, 'Argument $yoffset overflow: C type GLint is required');
        assert($zoffset >= \PHP_INT_MIN && $zoffset <= \PHP_INT_MAX, 'Argument $zoffset overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');
        assert($depth >= \PHP_INT_MIN && $depth <= \PHP_INT_MAX, 'Argument $depth overflow: C type GLsizei is required');
        assert($format >= 0 && $format <= 4_294_967_295, 'Argument $format overflow: C type GLenum is required');
        assert($imageSize >= \PHP_INT_MIN && $imageSize <= \PHP_INT_MAX, 'Argument $imageSize overflow: C type GLsizei is required');

        $proc = self::getProc('glCompressedTextureSubImage3D', 'void (*)(GLuint texture, GLint level, GLint xoffset, GLint yoffset, GLint zoffset, GLsizei width, GLsizei height, GLsizei depth, GLenum format, GLsizei imageSize, const void *data)');
        $proc($texture, $level, $xoffset, $yoffset, $zoffset, $width, $height, $depth, $format, $imageSize, $data);
    }

    /**
     * @since 4.5
     * @param int $texture
     * @param int $level
     * @param int $xoffset
     * @param int $x
     * @param int $y
     * @param int $width
     * @return void
     */
    public static function glCopyTextureSubImage1D(int $texture, int $level, int $xoffset, int $x, int $y, int $width): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($xoffset >= \PHP_INT_MIN && $xoffset <= \PHP_INT_MAX, 'Argument $xoffset overflow: C type GLint is required');
        assert($x >= \PHP_INT_MIN && $x <= \PHP_INT_MAX, 'Argument $x overflow: C type GLint is required');
        assert($y >= \PHP_INT_MIN && $y <= \PHP_INT_MAX, 'Argument $y overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');

        $proc = self::getProc('glCopyTextureSubImage1D', 'void (*)(GLuint texture, GLint level, GLint xoffset, GLint x, GLint y, GLsizei width)');
        $proc($texture, $level, $xoffset, $x, $y, $width);
    }

    /**
     * @since 4.5
     * @param int $texture
     * @param int $level
     * @param int $xoffset
     * @param int $yoffset
     * @param int $x
     * @param int $y
     * @param int $width
     * @param int $height
     * @return void
     */
    public static function glCopyTextureSubImage2D(int $texture, int $level, int $xoffset, int $yoffset, int $x, int $y, int $width, int $height): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($xoffset >= \PHP_INT_MIN && $xoffset <= \PHP_INT_MAX, 'Argument $xoffset overflow: C type GLint is required');
        assert($yoffset >= \PHP_INT_MIN && $yoffset <= \PHP_INT_MAX, 'Argument $yoffset overflow: C type GLint is required');
        assert($x >= \PHP_INT_MIN && $x <= \PHP_INT_MAX, 'Argument $x overflow: C type GLint is required');
        assert($y >= \PHP_INT_MIN && $y <= \PHP_INT_MAX, 'Argument $y overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');

        $proc = self::getProc('glCopyTextureSubImage2D', 'void (*)(GLuint texture, GLint level, GLint xoffset, GLint yoffset, GLint x, GLint y, GLsizei width, GLsizei height)');
        $proc($texture, $level, $xoffset, $yoffset, $x, $y, $width, $height);
    }

    /**
     * @since 4.5
     * @param int $texture
     * @param int $level
     * @param int $xoffset
     * @param int $yoffset
     * @param int $zoffset
     * @param int $x
     * @param int $y
     * @param int $width
     * @param int $height
     * @return void
     */
    public static function glCopyTextureSubImage3D(int $texture, int $level, int $xoffset, int $yoffset, int $zoffset, int $x, int $y, int $width, int $height): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($xoffset >= \PHP_INT_MIN && $xoffset <= \PHP_INT_MAX, 'Argument $xoffset overflow: C type GLint is required');
        assert($yoffset >= \PHP_INT_MIN && $yoffset <= \PHP_INT_MAX, 'Argument $yoffset overflow: C type GLint is required');
        assert($zoffset >= \PHP_INT_MIN && $zoffset <= \PHP_INT_MAX, 'Argument $zoffset overflow: C type GLint is required');
        assert($x >= \PHP_INT_MIN && $x <= \PHP_INT_MAX, 'Argument $x overflow: C type GLint is required');
        assert($y >= \PHP_INT_MIN && $y <= \PHP_INT_MAX, 'Argument $y overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');

        $proc = self::getProc('glCopyTextureSubImage3D', 'void (*)(GLuint texture, GLint level, GLint xoffset, GLint yoffset, GLint zoffset, GLint x, GLint y, GLsizei width, GLsizei height)');
        $proc($texture, $level, $xoffset, $yoffset, $zoffset, $x, $y, $width, $height);
    }

    /**
     * @since 4.5
     * @param int $texture
     * @param int $pname
     * @param float $param
     * @return void
     */
    public static function glTextureParameterf(int $texture, int $pname, float $param): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($param >= -3.40282e38 && $param <= 3.40282e38, 'Argument $param overflow: C type GLfloat is required');

        $proc = self::getProc('glTextureParameterf', 'void (*)(GLuint texture, GLenum pname, GLfloat param)');
        $proc($texture, $pname, $param);
    }

    /**
     * @since 4.5
     * @param int $texture
     * @param int $pname
     * @param \FFI\CData|\FFI\CFloatPtr|null $param
     * @return void
     */
    public static function glTextureParameterfv(int $texture, int $pname, ?\FFI\CData $param): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glTextureParameterfv', 'void (*)(GLuint texture, GLenum pname, const GLfloat *param)');
        $proc($texture, $pname, $param);
    }

    /**
     * @since 4.5
     * @param int $texture
     * @param int $pname
     * @param int $param
     * @return void
     */
    public static function glTextureParameteri(int $texture, int $pname, int $param): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($param >= \PHP_INT_MIN && $param <= \PHP_INT_MAX, 'Argument $param overflow: C type GLint is required');

        $proc = self::getProc('glTextureParameteri', 'void (*)(GLuint texture, GLenum pname, GLint param)');
        $proc($texture, $pname, $param);
    }

    /**
     * @since 4.5
     * @param int $texture
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glTextureParameterIiv(int $texture, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glTextureParameterIiv', 'void (*)(GLuint texture, GLenum pname, const GLint *params)');
        $proc($texture, $pname, $params);
    }

    /**
     * @since 4.5
     * @param int $texture
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glTextureParameterIuiv(int $texture, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glTextureParameterIuiv', 'void (*)(GLuint texture, GLenum pname, const GLuint *params)');
        $proc($texture, $pname, $params);
    }

    /**
     * @since 4.5
     * @param int $texture
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $param
     * @return void
     */
    public static function glTextureParameteriv(int $texture, int $pname, ?\FFI\CData $param): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glTextureParameteriv', 'void (*)(GLuint texture, GLenum pname, const GLint *param)');
        $proc($texture, $pname, $param);
    }

    /**
     * @since 4.5
     * @param int $texture
     * @return void
     */
    public static function glGenerateTextureMipmap(int $texture): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');

        $proc = self::getProc('glGenerateTextureMipmap', 'void (*)(GLuint texture)');
        $proc($texture);
    }

    /**
     * Binds an existing texture object to the texture unit numbered *`unit`*.
     *
     * *`texture`* must be zero or the name of an existing texture object. When *`texture`* is the name of an
     * existing texture object, that object is bound to the target, in the corresponding texture unit, that was
     * specified when the object was created. When *`texture`* is zero, each of the targets enumerated at the
     * beginning of this section is reset to its default texture for the corresponding texture image unit.
     *
     * @see http://docs.gl/gl4/glBindTextureUnit
     * @since 4.5
     * @param int $unit
     * @param int $texture
     * @return void
     */
    public static function glBindTextureUnit(int $unit, int $texture): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($unit >= 0 && $unit <= 4_294_967_295, 'Argument $unit overflow: C type GLuint is required');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');

        $proc = self::getProc('glBindTextureUnit', 'void (*)(GLuint unit, GLuint texture)');
        $proc($unit, $texture);
    }

    /**
     * @since 4.5
     * @param int $texture
     * @param int $level
     * @param int $format
     * @param int $type
     * @param int $bufSize
     * @param \FFI\CData|\FFI\CPtr|null $pixels
     * @return void
     */
    public static function glGetTextureImage(int $texture, int $level, int $format, int $type, int $bufSize, ?\FFI\CData $pixels): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($format >= 0 && $format <= 4_294_967_295, 'Argument $format overflow: C type GLenum is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');
        assert($bufSize >= \PHP_INT_MIN && $bufSize <= \PHP_INT_MAX, 'Argument $bufSize overflow: C type GLsizei is required');

        $proc = self::getProc('glGetTextureImage', 'void (*)(GLuint texture, GLint level, GLenum format, GLenum type, GLsizei bufSize, void *pixels)');
        $proc($texture, $level, $format, $type, $bufSize, $pixels);
    }

    /**
     * @since 4.5
     * @param int $texture
     * @param int $level
     * @param int $bufSize
     * @param \FFI\CData|\FFI\CPtr|null $pixels
     * @return void
     */
    public static function glGetCompressedTextureImage(int $texture, int $level, int $bufSize, ?\FFI\CData $pixels): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($bufSize >= \PHP_INT_MIN && $bufSize <= \PHP_INT_MAX, 'Argument $bufSize overflow: C type GLsizei is required');

        $proc = self::getProc('glGetCompressedTextureImage', 'void (*)(GLuint texture, GLint level, GLsizei bufSize, void *pixels)');
        $proc($texture, $level, $bufSize, $pixels);
    }

    /**
     * @since 4.5
     * @param int $texture
     * @param int $level
     * @param int $pname
     * @param \FFI\CData|\FFI\CFloatPtr|null $params
     * @return void
     */
    public static function glGetTextureLevelParameterfv(int $texture, int $level, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetTextureLevelParameterfv', 'void (*)(GLuint texture, GLint level, GLenum pname, GLfloat *params)');
        $proc($texture, $level, $pname, $params);
    }

    /**
     * @since 4.5
     * @param int $texture
     * @param int $level
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetTextureLevelParameteriv(int $texture, int $level, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetTextureLevelParameteriv', 'void (*)(GLuint texture, GLint level, GLenum pname, GLint *params)');
        $proc($texture, $level, $pname, $params);
    }

    /**
     * @since 4.5
     * @param int $texture
     * @param int $pname
     * @param \FFI\CData|\FFI\CFloatPtr|null $params
     * @return void
     */
    public static function glGetTextureParameterfv(int $texture, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetTextureParameterfv', 'void (*)(GLuint texture, GLenum pname, GLfloat *params)');
        $proc($texture, $pname, $params);
    }

    /**
     * @since 4.5
     * @param int $texture
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetTextureParameterIiv(int $texture, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetTextureParameterIiv', 'void (*)(GLuint texture, GLenum pname, GLint *params)');
        $proc($texture, $pname, $params);
    }

    /**
     * @since 4.5
     * @param int $texture
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetTextureParameterIuiv(int $texture, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetTextureParameterIuiv', 'void (*)(GLuint texture, GLenum pname, GLuint *params)');
        $proc($texture, $pname, $params);
    }

    /**
     * @since 4.5
     * @param int $texture
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetTextureParameteriv(int $texture, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetTextureParameteriv', 'void (*)(GLuint texture, GLenum pname, GLint *params)');
        $proc($texture, $pname, $params);
    }

    /**
     * Returns *`n`* previously unused vertex array object names in *`arrays`*, each representing a new vertex array
     * object initialized to the default state.
     *
     * @see http://docs.gl/gl4/glCreateVertexArrays
     * @since 4.5
     * @param int $n
     * @param \FFI\CData|\FFI\CIntPtr|null $arrays
     * @return void
     */
    public static function glCreateVertexArrays(int $n, ?\FFI\CData $arrays): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($n >= \PHP_INT_MIN && $n <= \PHP_INT_MAX, 'Argument $n overflow: C type GLsizei is required');

        $proc = self::getProc('glCreateVertexArrays', 'void (*)(GLsizei n, GLuint *arrays)');
        $proc($n, $arrays);
    }

    /**
     * @since 4.5
     * @param int $vaobj
     * @param int $index
     * @return void
     */
    public static function glDisableVertexArrayAttrib(int $vaobj, int $index): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($vaobj >= 0 && $vaobj <= 4_294_967_295, 'Argument $vaobj overflow: C type GLuint is required');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glDisableVertexArrayAttrib', 'void (*)(GLuint vaobj, GLuint index)');
        $proc($vaobj, $index);
    }

    /**
     * @since 4.5
     * @param int $vaobj
     * @param int $index
     * @return void
     */
    public static function glEnableVertexArrayAttrib(int $vaobj, int $index): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($vaobj >= 0 && $vaobj <= 4_294_967_295, 'Argument $vaobj overflow: C type GLuint is required');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glEnableVertexArrayAttrib', 'void (*)(GLuint vaobj, GLuint index)');
        $proc($vaobj, $index);
    }

    /**
     * Binds a buffer object with id *`buffer`* to the element array buffer bind point of a vertex array object with
     * id *`vaobj`*. If *`buffer`* is zero, any existing element array buffer binding to *`vaobj`* is removed.
     *
     * @see http://docs.gl/gl4/glVertexArrayElementBuffer
     * @since 4.5
     * @param int $vaobj
     * @param int $buffer
     * @return void
     */
    public static function glVertexArrayElementBuffer(int $vaobj, int $buffer): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($vaobj >= 0 && $vaobj <= 4_294_967_295, 'Argument $vaobj overflow: C type GLuint is required');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLuint is required');

        $proc = self::getProc('glVertexArrayElementBuffer', 'void (*)(GLuint vaobj, GLuint buffer)');
        $proc($vaobj, $buffer);
    }

    /**
     * @since 4.5
     * @param int $vaobj
     * @param int $bindingindex
     * @param int $buffer
     * @param int $offset
     * @param int $stride
     * @return void
     */
    public static function glVertexArrayVertexBuffer(int $vaobj, int $bindingindex, int $buffer, int $offset, int $stride): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($vaobj >= 0 && $vaobj <= 4_294_967_295, 'Argument $vaobj overflow: C type GLuint is required');
        assert($bindingindex >= 0 && $bindingindex <= 4_294_967_295, 'Argument $bindingindex overflow: C type GLuint is required');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLuint is required');
        assert($offset >= 0 && $offset <= \PHP_INT_MAX, 'Argument $offset overflow: C type GLintptr is required');
        assert($stride >= \PHP_INT_MIN && $stride <= \PHP_INT_MAX, 'Argument $stride overflow: C type GLsizei is required');

        $proc = self::getProc('glVertexArrayVertexBuffer', 'void (*)(GLuint vaobj, GLuint bindingindex, GLuint buffer, GLintptr offset, GLsizei stride)');
        $proc($vaobj, $bindingindex, $buffer, $offset, $stride);
    }

    /**
     * @since 4.5
     * @param int $vaobj
     * @param int $first
     * @param int $count
     * @param \FFI\CData|\FFI\CIntPtr|null $buffers
     * @param \FFI\CData|\FFI\CIntPtrPtr|null $offsets
     * @param \FFI\CData|\FFI\CIntPtr|null $strides
     * @return void
     */
    public static function glVertexArrayVertexBuffers(int $vaobj, int $first, int $count, ?\FFI\CData $buffers, ?\FFI\CData $offsets, ?\FFI\CData $strides): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($vaobj >= 0 && $vaobj <= 4_294_967_295, 'Argument $vaobj overflow: C type GLuint is required');
        assert($first >= 0 && $first <= 4_294_967_295, 'Argument $first overflow: C type GLuint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glVertexArrayVertexBuffers', 'void (*)(GLuint vaobj, GLuint first, GLsizei count, const GLuint *buffers, const GLintptr *offsets, const GLsizei *strides)');
        $proc($vaobj, $first, $count, $buffers, $offsets, $strides);
    }

    /**
     * @since 4.5
     * @param int $vaobj
     * @param int $attribindex
     * @param int $bindingindex
     * @return void
     */
    public static function glVertexArrayAttribBinding(int $vaobj, int $attribindex, int $bindingindex): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($vaobj >= 0 && $vaobj <= 4_294_967_295, 'Argument $vaobj overflow: C type GLuint is required');
        assert($attribindex >= 0 && $attribindex <= 4_294_967_295, 'Argument $attribindex overflow: C type GLuint is required');
        assert($bindingindex >= 0 && $bindingindex <= 4_294_967_295, 'Argument $bindingindex overflow: C type GLuint is required');

        $proc = self::getProc('glVertexArrayAttribBinding', 'void (*)(GLuint vaobj, GLuint attribindex, GLuint bindingindex)');
        $proc($vaobj, $attribindex, $bindingindex);
    }

    /**
     * @since 4.5
     * @param int $vaobj
     * @param int $attribindex
     * @param int $size
     * @param int $type
     * @param int $normalized
     * @param int $relativeoffset
     * @return void
     */
    public static function glVertexArrayAttribFormat(int $vaobj, int $attribindex, int $size, int $type, int $normalized, int $relativeoffset): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($vaobj >= 0 && $vaobj <= 4_294_967_295, 'Argument $vaobj overflow: C type GLuint is required');
        assert($attribindex >= 0 && $attribindex <= 4_294_967_295, 'Argument $attribindex overflow: C type GLuint is required');
        assert($size >= \PHP_INT_MIN && $size <= \PHP_INT_MAX, 'Argument $size overflow: C type GLint is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');
        assert($normalized >= 0 && $normalized <= 255, 'Argument $normalized overflow: C type GLboolean is required');
        assert($relativeoffset >= 0 && $relativeoffset <= 4_294_967_295, 'Argument $relativeoffset overflow: C type GLuint is required');

        $proc = self::getProc('glVertexArrayAttribFormat', 'void (*)(GLuint vaobj, GLuint attribindex, GLint size, GLenum type, GLboolean normalized, GLuint relativeoffset)');
        $proc($vaobj, $attribindex, $size, $type, $normalized, $relativeoffset);
    }

    /**
     * @since 4.5
     * @param int $vaobj
     * @param int $attribindex
     * @param int $size
     * @param int $type
     * @param int $relativeoffset
     * @return void
     */
    public static function glVertexArrayAttribIFormat(int $vaobj, int $attribindex, int $size, int $type, int $relativeoffset): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($vaobj >= 0 && $vaobj <= 4_294_967_295, 'Argument $vaobj overflow: C type GLuint is required');
        assert($attribindex >= 0 && $attribindex <= 4_294_967_295, 'Argument $attribindex overflow: C type GLuint is required');
        assert($size >= \PHP_INT_MIN && $size <= \PHP_INT_MAX, 'Argument $size overflow: C type GLint is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');
        assert($relativeoffset >= 0 && $relativeoffset <= 4_294_967_295, 'Argument $relativeoffset overflow: C type GLuint is required');

        $proc = self::getProc('glVertexArrayAttribIFormat', 'void (*)(GLuint vaobj, GLuint attribindex, GLint size, GLenum type, GLuint relativeoffset)');
        $proc($vaobj, $attribindex, $size, $type, $relativeoffset);
    }

    /**
     * @since 4.5
     * @param int $vaobj
     * @param int $attribindex
     * @param int $size
     * @param int $type
     * @param int $relativeoffset
     * @return void
     */
    public static function glVertexArrayAttribLFormat(int $vaobj, int $attribindex, int $size, int $type, int $relativeoffset): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($vaobj >= 0 && $vaobj <= 4_294_967_295, 'Argument $vaobj overflow: C type GLuint is required');
        assert($attribindex >= 0 && $attribindex <= 4_294_967_295, 'Argument $attribindex overflow: C type GLuint is required');
        assert($size >= \PHP_INT_MIN && $size <= \PHP_INT_MAX, 'Argument $size overflow: C type GLint is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');
        assert($relativeoffset >= 0 && $relativeoffset <= 4_294_967_295, 'Argument $relativeoffset overflow: C type GLuint is required');

        $proc = self::getProc('glVertexArrayAttribLFormat', 'void (*)(GLuint vaobj, GLuint attribindex, GLint size, GLenum type, GLuint relativeoffset)');
        $proc($vaobj, $attribindex, $size, $type, $relativeoffset);
    }

    /**
     * @since 4.5
     * @param int $vaobj
     * @param int $bindingindex
     * @param int $divisor
     * @return void
     */
    public static function glVertexArrayBindingDivisor(int $vaobj, int $bindingindex, int $divisor): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($vaobj >= 0 && $vaobj <= 4_294_967_295, 'Argument $vaobj overflow: C type GLuint is required');
        assert($bindingindex >= 0 && $bindingindex <= 4_294_967_295, 'Argument $bindingindex overflow: C type GLuint is required');
        assert($divisor >= 0 && $divisor <= 4_294_967_295, 'Argument $divisor overflow: C type GLuint is required');

        $proc = self::getProc('glVertexArrayBindingDivisor', 'void (*)(GLuint vaobj, GLuint bindingindex, GLuint divisor)');
        $proc($vaobj, $bindingindex, $divisor);
    }

    /**
     * This function provides a mean of querying properties of an existing vertex array object. The vertex array
     * object does not have to be bound to the rendering context at the time of the call, but must have been bound at
     * least once prior to this call.
     *
     *  - `glGetVertexArrayiv` can be used to retrieve ID of a buffer object that will be bound to the
     * `GL_ELEMENT_ARRAY_BUFFER` binding point whenever the queried vertex array object is bound to the rendering
     * context. The binding can be changed for an active vertex array object with a `glBindBuffer` call.
     *
     * @see http://docs.gl/gl4/glGetVertexArrayiv
     * @since 4.5
     * @param int $vaobj
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $param
     * @return void
     */
    public static function glGetVertexArrayiv(int $vaobj, int $pname, ?\FFI\CData $param): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($vaobj >= 0 && $vaobj <= 4_294_967_295, 'Argument $vaobj overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetVertexArrayiv', 'void (*)(GLuint vaobj, GLenum pname, GLint *param)');
        $proc($vaobj, $pname, $param);
    }

    /**
     * @since 4.5
     * @param int $vaobj
     * @param int $index
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $param
     * @return void
     */
    public static function glGetVertexArrayIndexediv(int $vaobj, int $index, int $pname, ?\FFI\CData $param): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($vaobj >= 0 && $vaobj <= 4_294_967_295, 'Argument $vaobj overflow: C type GLuint is required');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetVertexArrayIndexediv', 'void (*)(GLuint vaobj, GLuint index, GLenum pname, GLint *param)');
        $proc($vaobj, $index, $pname, $param);
    }

    /**
     * And `glGetVertexArrayIndexed64iv` provide a way of querying parameters of an attribute at an user-specified
     * index of a vertex array object. The vertex array object does not have to be bound to the rendering context at
     * the time of the call, but must have been bound at least once prior to this call.
     *
     * The following parameter values can be retrieved with `glGetVertexArrayIndexediv` for each of the attributes
     * defined for a vertex array object:
     *
     * - `GL_VERTEX_ATTRIB_ARRAY_ENABLED`: *`param`* returns a value that is non-zero (true) if the vertex attribute
     * array for index is enabled and 0 (false) if it is disabled. The initial value is `GL_FALSE`.
     * - `GL_VERTEX_ATTRIB_ARRAY_SIZE`: *`param`* returns a single value, the size of the vertex attribute array for
     * index. The size is the number of values for each element of the vertex attribute array, and it will be 1, 2, 3
     * or 4. The initial value is 4.
     * - `GL_VERTEX_ATTRIB_ARRAY_STRIDE`: *`param`* returns a single value, the array stride for (number of bytes
     * between successive elements in) the vertex attribute array for index. A value of 0 indicates the array
     * elements are stored sequentially in memory. The initial value is 0.
     * - `GL_VERTEX_ATTRIB_ARRAY_TYPE`: *`param`* returns a single value, a symbolic constant indicating the array
     * type for the vertex attribute array for index. Possible values are `GL_BYTE`, `GL_DOUBLE`, `GL_FIXED`,
     * `GL_FLOAT`, `GL_HALF_FLOAT`, `GL_INT`, `GL_INT_2_10_10_10_REV`, `GL_SHORT`, `GL_UNSIGNED_BYTE`,
     * `GL_UNSIGNED_SHORT`, `GL_UNSIGNED_INT`, `GL_UNSIGNED_INT_2_10_10_10_REV`, and
     * `GL_UNSIGNED_INT_10F_11F_11F_REV` . The initial value is `GL_FLOAT`.
     * - `GL_VERTEX_ATTRIB_ARRAY_NORMALIZED`: *`param`* returns a single value that is non-zero (true) if fixed-point
     * data types for the vertex attribute array indicated by index are normalized when they are converted to
     * floating-point, and 0 (false) otherwise. The initial value is `GL_FALSE`.
     * - `GL_VERTEX_ATTRIB_ARRAY_INTEGER`: *`param`* returns a single value that is non-zero (true) if fixed-point
     * data types for the vertex attribute array indicated by index have integer data type, and 0 (false) otherwise.
     * The initial value is 0 (`GL_FALSE`).
     * - `GL_VERTEX_ATTRIB_ARRAY_LONG`: *`param`* returns a single value that is non-zero (true) if a vertex
     * attribute is stored as an unconverted double, and 0 (false) otherwise. The initial value is 0 (`GL_FALSE`).
     * - `GL_VERTEX_ATTRIB_ARRAY_DIVISOR`: *`param`* returns a single value that is the frequency divisor used for
     * instanced rendering. See glVertexAttribDivisor. The initial value is 0.
     * - `GL_VERTEX_ATTRIB_RELATIVE_OFFSET`: *`param`* returns a single value that is the byte offset of the first
     * element relative to the start of the vertex buffer binding specified attribute fetches from. The initial value
     * is 0.
     *
     *
     *
     *  - `glGetVertexArrayIndexed64iv` can be used to retrieve `GL_VERTEX_BINDING_OFFSET` parameter value for any of
     * the attributes defined for a vertex array object. When *`pname`* is set to `GL_VERTEX_BINDING_OFFSET`,
     * *`param`* returns a single value that is the byte offset of the first element in the bound buffer's data
     * store. The initial value for this parameter is 0.
     *
     * @see http://docs.gl/gl4/glGetVertexArrayIndexed
     * @since 4.5
     * @param int $vaobj
     * @param int $index
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $param
     * @return void
     */
    public static function glGetVertexArrayIndexed64iv(int $vaobj, int $index, int $pname, ?\FFI\CData $param): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($vaobj >= 0 && $vaobj <= 4_294_967_295, 'Argument $vaobj overflow: C type GLuint is required');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetVertexArrayIndexed64iv', 'void (*)(GLuint vaobj, GLuint index, GLenum pname, GLint64 *param)');
        $proc($vaobj, $index, $pname, $param);
    }

    /**
     * Returns *`n`* previously unused sampler names in *`samplers`*, each representing a new sampler object
     * initialized to the default state.
     *
     * @see http://docs.gl/gl4/glCreateSamplers
     * @since 4.5
     * @param int $n
     * @param \FFI\CData|\FFI\CIntPtr|null $samplers
     * @return void
     */
    public static function glCreateSamplers(int $n, ?\FFI\CData $samplers): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($n >= \PHP_INT_MIN && $n <= \PHP_INT_MAX, 'Argument $n overflow: C type GLsizei is required');

        $proc = self::getProc('glCreateSamplers', 'void (*)(GLsizei n, GLuint *samplers)');
        $proc($n, $samplers);
    }

    /**
     * Returns *`n`* previously unused program pipeline names in *`pipelines`*, each representing a new program
     * pipeline object initialized to the default state.
     *
     * @see http://docs.gl/gl4/glCreateProgramPipelines
     * @since 4.5
     * @param int $n
     * @param \FFI\CData|\FFI\CIntPtr|null $pipelines
     * @return void
     */
    public static function glCreateProgramPipelines(int $n, ?\FFI\CData $pipelines): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($n >= \PHP_INT_MIN && $n <= \PHP_INT_MAX, 'Argument $n overflow: C type GLsizei is required');

        $proc = self::getProc('glCreateProgramPipelines', 'void (*)(GLsizei n, GLuint *pipelines)');
        $proc($n, $pipelines);
    }

    /**
     * Returns *`n`* previously unused query object names in *`ids`*, each representing a new query object with the
     * specified *`target`*.
     *
     * *`target`* may be one of `GL_SAMPLES_PASSED`, `GL_ANY_SAMPLES_PASSED`, `GL_ANY_SAMPLES_PASSED_CONSERVATIVE`,
     * `GL_TIME_ELAPSED`, `GL_TIMESTAMP`, `GL_PRIMITIVES_GENERATED` or `GL_TRANSFORM_FEEDBACK_PRIMITIVES_WRITTEN`.
     *
     * @see http://docs.gl/gl4/glCreateQueries
     * @since 4.5
     * @param int $target
     * @param int $n
     * @param \FFI\CData|\FFI\CIntPtr|null $ids
     * @return void
     */
    public static function glCreateQueries(int $target, int $n, ?\FFI\CData $ids): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($n >= \PHP_INT_MIN && $n <= \PHP_INT_MAX, 'Argument $n overflow: C type GLsizei is required');

        $proc = self::getProc('glCreateQueries', 'void (*)(GLenum target, GLsizei n, GLuint *ids)');
        $proc($target, $n, $ids);
    }

    /**
     * @since 4.5
     * @param int $id
     * @param int $buffer
     * @param int $pname
     * @param int $offset
     * @return void
     */
    public static function glGetQueryBufferObjecti64v(int $id, int $buffer, int $pname, int $offset): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($id >= 0 && $id <= 4_294_967_295, 'Argument $id overflow: C type GLuint is required');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($offset >= 0 && $offset <= \PHP_INT_MAX, 'Argument $offset overflow: C type GLintptr is required');

        $proc = self::getProc('glGetQueryBufferObjecti64v', 'void (*)(GLuint id, GLuint buffer, GLenum pname, GLintptr offset)');
        $proc($id, $buffer, $pname, $offset);
    }

    /**
     * @since 4.5
     * @param int $id
     * @param int $buffer
     * @param int $pname
     * @param int $offset
     * @return void
     */
    public static function glGetQueryBufferObjectiv(int $id, int $buffer, int $pname, int $offset): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($id >= 0 && $id <= 4_294_967_295, 'Argument $id overflow: C type GLuint is required');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($offset >= 0 && $offset <= \PHP_INT_MAX, 'Argument $offset overflow: C type GLintptr is required');

        $proc = self::getProc('glGetQueryBufferObjectiv', 'void (*)(GLuint id, GLuint buffer, GLenum pname, GLintptr offset)');
        $proc($id, $buffer, $pname, $offset);
    }

    /**
     * @since 4.5
     * @param int $id
     * @param int $buffer
     * @param int $pname
     * @param int $offset
     * @return void
     */
    public static function glGetQueryBufferObjectui64v(int $id, int $buffer, int $pname, int $offset): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($id >= 0 && $id <= 4_294_967_295, 'Argument $id overflow: C type GLuint is required');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($offset >= 0 && $offset <= \PHP_INT_MAX, 'Argument $offset overflow: C type GLintptr is required');

        $proc = self::getProc('glGetQueryBufferObjectui64v', 'void (*)(GLuint id, GLuint buffer, GLenum pname, GLintptr offset)');
        $proc($id, $buffer, $pname, $offset);
    }

    /**
     * @since 4.5
     * @param int $id
     * @param int $buffer
     * @param int $pname
     * @param int $offset
     * @return void
     */
    public static function glGetQueryBufferObjectuiv(int $id, int $buffer, int $pname, int $offset): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($id >= 0 && $id <= 4_294_967_295, 'Argument $id overflow: C type GLuint is required');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($offset >= 0 && $offset <= \PHP_INT_MAX, 'Argument $offset overflow: C type GLintptr is required');

        $proc = self::getProc('glGetQueryBufferObjectuiv', 'void (*)(GLuint id, GLuint buffer, GLenum pname, GLintptr offset)');
        $proc($id, $buffer, $pname, $offset);
    }

    /**
     * @since 4.5
     * @param int $barriers
     * @return void
     */
    public static function glMemoryBarrierByRegion(int $barriers): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($barriers >= 0 && $barriers <= 4_294_967_295, 'Argument $barriers overflow: C type GLbitfield is required');

        $proc = self::getProc('glMemoryBarrierByRegion', 'void (*)(GLbitfield barriers)');
        $proc($barriers);
    }

    /**
     * Returns a texture subimage into pixels.
     *
     * *`texture`* is the name of the source texture object and must not be a buffer or multisample texture. The
     * effective *`target`* parameter is the value of `GL_TEXTURE_TARGET` for texture. *`Level`*, *`format`*,
     * *`type`* and *`pixels`* have the same meaning as for `glGetTexImage`. *`bufSize`* is the size of the buffer to
     * receive the retrieved pixel data.
     *
     * For cube map textures, the behavior is as though `GetTextureImage` were called, but only texels from the
     * requested cube map faces (selected by *`zoffset`* and *`depth`*, as described below) were returned.
     *
     * *`xoffset`*, *`yoffset`* and *`zoffset`* values indicate the position of the subregion to return. *`width`*,
     * *`height`* and *`depth`* indicate the size of the region to return. These parameters have the same meaning as
     * for `glTexSubImage3D`, though for one- and two-dimensional textures there are extra restrictions, described in
     * the errors section below.
     *
     * For one-dimensional array textures, *`yoffset`* is interpreted as the first layer to access and *`height`* is
     * the number of layers to access.
     *
     * For two-dimensional array textures, *`zoffset`* is interpreted as the first layer to access and *`depth`* is
     * the number of layers to access.
     *
     * Cube map textures are treated as an array of six slices in the z-dimension, where the value of *`zoffset`* is
     * interpreted as specifying the cube map face for the corresponding layer (as presented in the table below) and
     * *`depth`* is the number of faces to access:
     *
     * Layer number Cube Map Face 0 GL_TEXTURE_CUBE_MAP_POSITIVE_X 1 GL_TEXTURE_CUBE_MAP_NEGATIVE_X 2
     * GL_TEXTURE_CUBE_MAP_POSITIVE_Y 3 GL_TEXTURE_CUBE_MAP_NEGATIVE_Y 4 GL_TEXTURE_CUBE_MAP_POSITIVE_Z 5
     * GL_TEXTURE_CUBE_MAP_NEGATIVE_Z
     *
     * For cube map array textures, *`zoffset`* is the first layer-face to access, and *`depth`* is the number of
     * layer-faces to access. A layer-face described by $k$ is translated into an array layer and face according to
     * $$ layer = \\left\\lfloor { layer \\over 6 } \\right\\rfloor$$ and $$ face = k \\bmod 6. $$
     *
     * Component groups from the specified sub-region are packed and placed into memory as described for
     * `glGetTextureImage`, starting with the texel at (*`xoffset`*, *`yoffset`*, *`zoffset`*).
     *
     * @see http://docs.gl/gl4/glGetTextureSubImage
     * @since 4.5
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
     * @param int $bufSize
     * @param \FFI\CData|\FFI\CPtr|null $pixels
     * @return void
     */
    public static function glGetTextureSubImage(
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
        int $bufSize,
        ?\FFI\CData $pixels
    ): void {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($xoffset >= \PHP_INT_MIN && $xoffset <= \PHP_INT_MAX, 'Argument $xoffset overflow: C type GLint is required');
        assert($yoffset >= \PHP_INT_MIN && $yoffset <= \PHP_INT_MAX, 'Argument $yoffset overflow: C type GLint is required');
        assert($zoffset >= \PHP_INT_MIN && $zoffset <= \PHP_INT_MAX, 'Argument $zoffset overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');
        assert($depth >= \PHP_INT_MIN && $depth <= \PHP_INT_MAX, 'Argument $depth overflow: C type GLsizei is required');
        assert($format >= 0 && $format <= 4_294_967_295, 'Argument $format overflow: C type GLenum is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');
        assert($bufSize >= \PHP_INT_MIN && $bufSize <= \PHP_INT_MAX, 'Argument $bufSize overflow: C type GLsizei is required');

        $proc = self::getProc('glGetTextureSubImage', 'void (*)(GLuint texture, GLint level, GLint xoffset, GLint yoffset, GLint zoffset, GLsizei width, GLsizei height, GLsizei depth, GLenum format, GLenum type, GLsizei bufSize, void *pixels)');
        $proc($texture, $level, $xoffset, $yoffset, $zoffset, $width, $height, $depth, $format, $type, $bufSize, $pixels);
    }

    /**
     * Can be used to obtain a sub-region of a compressed texture image instead of the whole image, as long as the
     * compressed data are arranged into fixed-size blocks of texels. *`texture`* is the name of the texture object,
     * and must not be a buffer or multisample texture. The effective *`target`* is the value of `GL_TEXTURE_TARGET`
     * for texture. *`level`* and *`pixels`* have the same meaning as the corresponding arguments of
     * `glCompressedTexSubImage3D`. *`bufSize`* indicates the size of the buffer to receive the retrieved pixel data.
     *
     * For cube map textures, the behavior is as though `glGetCompressedTexImage` were called once for each requested
     * face (selected by *`zoffset`* and *`depth`*, as described below) with target corresponding to the requested
     * texture cube map face as indicated by the table presented below. *`pixels`* is offset appropriately for each
     * successive image.
     *
     * Layer number Cube Map Face 0 `GL_TEXTURE_CUBE_MAP_POSITIVE_X` 1 `GL_TEXTURE_CUBE_MAP_NEGATIVE_X` 2
     * `GL_TEXTURE_CUBE_MAP_POSITIVE_Y` 3 `GL_TEXTURE_CUBE_MAP_NEGATIVE_Y` 4 `GL_TEXTURE_CUBE_MAP_POSITIVE_Z` 5
     * `GL_TEXTURE_CUBE_MAP_NEGATIVE_Z`
     *
     * *`xoffset`*, *`yoffset`* and *`zoffset`* indicate the position of the subregion to return. *`width`*,
     * *`height`* and *`depth`* indicate the size of the region to return. These arguments have the same meaning as
     * for `glCompressedTexSubImage3D`, though there are extra restrictions, described in the errors section below.
     *
     * The mapping between the *`xoffset`*, *`yoffset`*, *`zoffset`*, *`width`*, *`height`* and *`depth`* parameters
     * and the faces, layers, and layer-faces for cube map, array, and cube map array textures is the same as for
     * glGetTextureSubImage.
     *
     * The *`xoffset`*, *`yoffset`*, *`zoffset`* offsets and *`width`*, *`height`* and *`depth`* sizes must be
     * multiples of the values of `GL_PACK_COMPRESSED_BLOCK_WIDTH`, `GL_PACK_COMPRESSED_BLOCK_HEIGHT`, and
     * `GL_PACK_COMPRESSED_BLOCK_DEPTH` respectively, unless *`offset`* is zero and the corresponding *`size`* is the
     * same as the texture size in that dimension.
     *
     * Pixel storage modes are treated as for `glGetCompressedTexSubImage`. The texel at (*`xoffset`*, *`yoffset`*,
     * *`zoffset`*) will be stored at the location indicated by *`pixels`* and the current pixel packing parameters.
     *
     * @see http://docs.gl/gl4/glGetCompressedTextureSubImage
     * @since 4.5
     * @param int $texture
     * @param int $level
     * @param int $xoffset
     * @param int $yoffset
     * @param int $zoffset
     * @param int $width
     * @param int $height
     * @param int $depth
     * @param int $bufSize
     * @param \FFI\CData|\FFI\CPtr|null $pixels
     * @return void
     */
    public static function glGetCompressedTextureSubImage(
        int $texture,
        int $level,
        int $xoffset,
        int $yoffset,
        int $zoffset,
        int $width,
        int $height,
        int $depth,
        int $bufSize,
        ?\FFI\CData $pixels
    ): void {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($xoffset >= \PHP_INT_MIN && $xoffset <= \PHP_INT_MAX, 'Argument $xoffset overflow: C type GLint is required');
        assert($yoffset >= \PHP_INT_MIN && $yoffset <= \PHP_INT_MAX, 'Argument $yoffset overflow: C type GLint is required');
        assert($zoffset >= \PHP_INT_MIN && $zoffset <= \PHP_INT_MAX, 'Argument $zoffset overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');
        assert($depth >= \PHP_INT_MIN && $depth <= \PHP_INT_MAX, 'Argument $depth overflow: C type GLsizei is required');
        assert($bufSize >= \PHP_INT_MIN && $bufSize <= \PHP_INT_MAX, 'Argument $bufSize overflow: C type GLsizei is required');

        $proc = self::getProc('glGetCompressedTextureSubImage', 'void (*)(GLuint texture, GLint level, GLint xoffset, GLint yoffset, GLint zoffset, GLsizei width, GLsizei height, GLsizei depth, GLsizei bufSize, void *pixels)');
        $proc($texture, $level, $xoffset, $yoffset, $zoffset, $width, $height, $depth, $bufSize, $pixels);
    }

    /**
     * Certain events can result in a reset of the GL context. Such a reset causes all context state to be lost and
     * requires the application to recreate all objects in the affected context.
     *
     *  - `glGetGraphicsResetStatus` can return one of the following constants:
     *
     *  - `GL_NO_ERROR` Indicates that the GL context has not been in a reset state since the last call.
     *
     *  - `GL_GUILTY_CONTEXT_RESET` Indicates that a reset has been detected that is attributable to the current GL
     * context.
     *
     *  - `GL_INNOCENT_CONTEXT_RESET` Indicates a reset has been detected that is not attributable to the current GL
     * context.
     *
     *  - `GL_UNKNOWN_CONTEXT_RESET` Indicates a detected graphics reset whose cause is unknown.
     *
     *
     *
     * If a reset status other than `GL_NO_ERROR` is returned and subsequent calls return `GL_NO_ERROR`, the context
     * reset was encountered and completed. If a reset status is repeatedly returned, the context may be in the
     * process of resetting.
     *
     * Reset notification behavior is determined at context creation time, and may be queried by calling
     * `GetIntegerv` with the symbolic constant `GL_RESET_NOTIFICATION_STRATEGY`.
     *
     * If the reset notification behavior is `GL_NO_RESET_NOTIFICATION`, then the implementation will never deliver
     * notification of reset events, and `glGetGraphicsResetStatus` will always return `GL_NO_ERROR`.
     *
     * If the behavior is `GL_LOSE_CONTEXT_ON_RESET`, a graphics reset will result in the loss of all context state,
     * requiring the recreation of all associated objects. In this case `glGetGraphicsResetStatus` may return any of
     * the values described above.
     *
     * If a graphics reset notification occurs in a context, a notification must also occur in all other contexts
     * which share objects with that context.
     *
     * After a graphics reset has occurred on a context, subsequent GL commands on that context (or any context which
     * shares with that context) will generate a `GL_CONTEXT_LOST` error. Such commands will not have side effects
     * (in particular, they will not modify memory passed by pointer for query results), and will not block
     * indefinitely or cause termination of the application. There are two important exceptions to this behavior:
     *
     * - `glGetError` and `glGetGraphicsResetStatus` behave normally following a graphics reset, so that the
     * application can determine a reset has occurred, and when it is safe to destroy and re-create the context.
     * - Any commands which might cause a polling application to block indefinitely will generate a `GL_CONTEXT_LOST`
     * error, but will also return a value indicating completion to the application. Such commands include:
     *
     *
     * - `glGetSynciv` with pname `GL_SYNC_STATUS` ignores the other parameters and returns `GL_SIGNALED` in
     * *`values`*.
     * - `glGetQueryObjectuiv` with pname `GL_QUERY_RESULT_AVAILABLE` ignores the other parameters and returns `TRUE`
     * in *`params`*.
     *
     * @see http://docs.gl/gl4/glGetGraphicsResetStatus
     * @since 4.5
     * @return int
     */
    public static function glGetGraphicsResetStatus(): int
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');

        $proc = self::getProc('glGetGraphicsResetStatus', 'GLenum (*)(void)');
        return $proc();
    }

    /**
     * @since 4.5
     * @param int $target
     * @param int $lod
     * @param int $bufSize
     * @param \FFI\CData|\FFI\CPtr|null $pixels
     * @return void
     */
    public static function glGetnCompressedTexImage(int $target, int $lod, int $bufSize, ?\FFI\CData $pixels): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($lod >= \PHP_INT_MIN && $lod <= \PHP_INT_MAX, 'Argument $lod overflow: C type GLint is required');
        assert($bufSize >= \PHP_INT_MIN && $bufSize <= \PHP_INT_MAX, 'Argument $bufSize overflow: C type GLsizei is required');

        $proc = self::getProc('glGetnCompressedTexImage', 'void (*)(GLenum target, GLint lod, GLsizei bufSize, void *pixels)');
        $proc($target, $lod, $bufSize, $pixels);
    }

    /**
     * @since 4.5
     * @param int $target
     * @param int $level
     * @param int $format
     * @param int $type
     * @param int $bufSize
     * @param \FFI\CData|\FFI\CPtr|null $pixels
     * @return void
     */
    public static function glGetnTexImage(int $target, int $level, int $format, int $type, int $bufSize, ?\FFI\CData $pixels): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($format >= 0 && $format <= 4_294_967_295, 'Argument $format overflow: C type GLenum is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');
        assert($bufSize >= \PHP_INT_MIN && $bufSize <= \PHP_INT_MAX, 'Argument $bufSize overflow: C type GLsizei is required');

        $proc = self::getProc('glGetnTexImage', 'void (*)(GLenum target, GLint level, GLenum format, GLenum type, GLsizei bufSize, void *pixels)');
        $proc($target, $level, $format, $type, $bufSize, $pixels);
    }

    /**
     * @since 4.5
     * @param int $program
     * @param int $location
     * @param int $bufSize
     * @param \FFI\CData|\FFI\CFloatPtr|null $params
     * @return void
     */
    public static function glGetnUniformdv(int $program, int $location, int $bufSize, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($bufSize >= \PHP_INT_MIN && $bufSize <= \PHP_INT_MAX, 'Argument $bufSize overflow: C type GLsizei is required');

        $proc = self::getProc('glGetnUniformdv', 'void (*)(GLuint program, GLint location, GLsizei bufSize, GLdouble *params)');
        $proc($program, $location, $bufSize, $params);
    }

    /**
     * @since 4.5
     * @param int $program
     * @param int $location
     * @param int $bufSize
     * @param \FFI\CData|\FFI\CFloatPtr|null $params
     * @return void
     */
    public static function glGetnUniformfv(int $program, int $location, int $bufSize, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($bufSize >= \PHP_INT_MIN && $bufSize <= \PHP_INT_MAX, 'Argument $bufSize overflow: C type GLsizei is required');

        $proc = self::getProc('glGetnUniformfv', 'void (*)(GLuint program, GLint location, GLsizei bufSize, GLfloat *params)');
        $proc($program, $location, $bufSize, $params);
    }

    /**
     * @since 4.5
     * @param int $program
     * @param int $location
     * @param int $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetnUniformiv(int $program, int $location, int $bufSize, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($bufSize >= \PHP_INT_MIN && $bufSize <= \PHP_INT_MAX, 'Argument $bufSize overflow: C type GLsizei is required');

        $proc = self::getProc('glGetnUniformiv', 'void (*)(GLuint program, GLint location, GLsizei bufSize, GLint *params)');
        $proc($program, $location, $bufSize, $params);
    }

    /**
     * @since 4.5
     * @param int $program
     * @param int $location
     * @param int $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetnUniformuiv(int $program, int $location, int $bufSize, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($bufSize >= \PHP_INT_MIN && $bufSize <= \PHP_INT_MAX, 'Argument $bufSize overflow: C type GLsizei is required');

        $proc = self::getProc('glGetnUniformuiv', 'void (*)(GLuint program, GLint location, GLsizei bufSize, GLuint *params)');
        $proc($program, $location, $bufSize, $params);
    }

    /**
     * @since 4.5
     * @param int $x
     * @param int $y
     * @param int $width
     * @param int $height
     * @param int $format
     * @param int $type
     * @param int $bufSize
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @return void
     */
    public static function glReadnPixels(int $x, int $y, int $width, int $height, int $format, int $type, int $bufSize, ?\FFI\CData $data): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= \PHP_INT_MIN && $x <= \PHP_INT_MAX, 'Argument $x overflow: C type GLint is required');
        assert($y >= \PHP_INT_MIN && $y <= \PHP_INT_MAX, 'Argument $y overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');
        assert($format >= 0 && $format <= 4_294_967_295, 'Argument $format overflow: C type GLenum is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');
        assert($bufSize >= \PHP_INT_MIN && $bufSize <= \PHP_INT_MAX, 'Argument $bufSize overflow: C type GLsizei is required');

        $proc = self::getProc('glReadnPixels', 'void (*)(GLint x, GLint y, GLsizei width, GLsizei height, GLenum format, GLenum type, GLsizei bufSize, void *data)');
        $proc($x, $y, $width, $height, $format, $type, $bufSize, $data);
    }

    /**
     * The values of rendered fragments are undefined when a shader stage fetches texels and the same texels are
     * written via fragment shader outputs, even if the reads and writes are not in the same drawing command. To
     * safely read the result of a written texel via a texel fetch in a subsequent drawing command, call
     * `glTextureBarrier` between the two drawing commands to guarantee that writes have completed and caches have
     * been invalidated before subsequent drawing commands are executed.
     *
     * @see http://docs.gl/gl4/glTextureBarrier
     * @since 4.5
     * @return void
     */
    public static function glTextureBarrier(): void
    {
        assert(version_compare(self::$info->version, '4.5') >= 0, __FUNCTION__ . ' is available since OpenGL 4.5, but only OpenGL '. self::$info->version . ' is available');

        $proc = self::getProc('glTextureBarrier', 'void (*)(void)');
        $proc();
    }
}
