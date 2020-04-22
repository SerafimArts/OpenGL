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
 * The OpenGL functionality up to version 1.4. Includes the deprecated symbols of the Compatibility Profile.
 *
 * Extensions promoted to core in this release:
 *
 * - SGIS_generate_mipmap @see https://www.khronos.org/registry/OpenGL/extensions/SGIS/SGIS_generate_mipmap.txt
 * - NV_blend_square @see https://www.khronos.org/registry/OpenGL/extensions/NV/NV_blend_square.txt
 * - ARB_depth_texture @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_depth_texture.txt
 * - ARB_shadow @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_shadow.txt
 * - EXT_fog_coord @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_fog_coord.txt
 * - EXT_multi_draw_arrays @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_multi_draw_arrays.txt
 * - ARB_point_parameters @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_point_parameters.txt
 * - EXT_secondary_color @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_secondary_color.txt
 * - EXT_blend_func_separate @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_blend_func_separate.txt
 * - EXT_stencil_wrap @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_stencil_wrap.txt
 * - ARB_texture_env_crossbar @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_texture_env_crossbar.txt
 * - EXT_texture_lod_bias @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_texture_lod_bias.txt
 * - ARB_texture_mirrored_repeat @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_texture_mirrored_repeat.txt
 * - ARB_window_pos @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_window_pos.txt
 */
class GL14 extends GL13
{
    /**
     * @var int
     * @since 1.4
     */
    public const GL_BLEND_DST_RGB = 0x80c8;
    /**
     * @var int
     * @since 1.4
     */
    public const GL_BLEND_SRC_RGB = 0x80c9;
    /**
     * @var int
     * @since 1.4
     */
    public const GL_BLEND_DST_ALPHA = 0x80ca;
    /**
     * @var int
     * @since 1.4
     */
    public const GL_BLEND_SRC_ALPHA = 0x80cb;
    /**
     * @var int
     * @since 1.4
     */
    public const GL_POINT_FADE_THRESHOLD_SIZE = 0x8128;
    /**
     * @var int
     * @since 1.4
     */
    public const GL_DEPTH_COMPONENT16 = 0x81a5;
    /**
     * @var int
     * @since 1.4
     */
    public const GL_DEPTH_COMPONENT24 = 0x81a6;
    /**
     * @var int
     * @since 1.4
     */
    public const GL_DEPTH_COMPONENT32 = 0x81a7;
    /**
     * @var int
     * @since 1.4
     */
    public const GL_MIRRORED_REPEAT = 0x8370;
    /**
     * @var int
     * @since 1.4
     */
    public const GL_MAX_TEXTURE_LOD_BIAS = 0x84fd;
    /**
     * @var int
     * @since 1.4
     */
    public const GL_TEXTURE_LOD_BIAS = 0x8501;
    /**
     * @var int
     * @since 1.4
     */
    public const GL_INCR_WRAP = 0x8507;
    /**
     * @var int
     * @since 1.4
     */
    public const GL_DECR_WRAP = 0x8508;
    /**
     * @var int
     * @since 1.4
     */
    public const GL_TEXTURE_DEPTH_SIZE = 0x884a;
    /**
     * @var int
     * @since 1.4
     */
    public const GL_TEXTURE_COMPARE_MODE = 0x884c;
    /**
     * @var int
     * @since 1.4
     */
    public const GL_TEXTURE_COMPARE_FUNC = 0x884d;
    /**
     * @var int
     * @since 1.4
     */
    public const GL_FUNC_ADD = 0x8006;
    /**
     * @var int
     * @since 1.4
     */
    public const GL_FUNC_SUBTRACT = 0x800a;
    /**
     * @var int
     * @since 1.4
     */
    public const GL_FUNC_REVERSE_SUBTRACT = 0x800b;
    /**
     * @var int
     * @since 1.4
     */
    public const GL_MIN = 0x8007;
    /**
     * @var int
     * @since 1.4
     */
    public const GL_MAX = 0x8008;
    /**
     * @var int
     * @since 1.4
     */
    public const GL_CONSTANT_COLOR = 0x8001;
    /**
     * @var int
     * @since 1.4
     */
    public const GL_ONE_MINUS_CONSTANT_COLOR = 0x8002;
    /**
     * @var int
     * @since 1.4
     */
    public const GL_CONSTANT_ALPHA = 0x8003;
    /**
     * @var int
     * @since 1.4
     */
    public const GL_ONE_MINUS_CONSTANT_ALPHA = 0x8004;

    /**
     * Pixels can be drawn using a function that blends the incoming (source)
     * RGBA values with the RGBA values that are already in the frame buffer
     * (the destination values). Blending is initially disabled. Use
     * {@see GL46::glEnable} and  {@see GL46::glDisable} with argument
     * {@see GL46::GL_BLEND} to enable and disable blending.
     *
     * {@see GL46::glBlendFuncSeparate} defines the operation of blending for
     * all draw buffers when it is enabled. {@see GL46::glBlendFuncSeparatei}
     * defines the operation of blending for a single draw buffer specified
     * by $buf when enabled for that draw buffer. $srcRGB specifies which
     * method is used to scale the source RGB-color components. $dstRGB
     * specifies which method is used to scale the destination RGB-color
     * components. Likewise, $srcAlpha specifies which method is used to
     * scale the source alpha color component, and $dstAlpha specifies which
     * method is used to scale the destination alpha component. The possible
     * methods are described in the following table. Each method defines four
     * scale factors, one each for red, green, blue, and alpha.
     *
     * In the table and in subsequent equations, first source, second source
     * and destination color components are referred to as    R s0  G s0  B
     * s0  A s0   ,    R s1  G s1  B s1  A s1   , and    R d  G d  B d  A d
     * , respectively. The color specified by {@see GL46::glBlendColor} is
     * referred to as    R c  G c  B c  A c   . They are understood to have
     * integer values between 0 and    k R  k G  k B  k A   , where
     *
     *    k c  =  2  m c    - 1
     *
     * and    m R  m G  m B  m A    is the number of red, green, blue, and
     * alpha bitplanes.
     *
     * Source and destination scale factors are referred to as    s R  s G  s
     * B  s A    and    d R  d G  d B  d A   . All scale factors have range
     *  0 1  .
     *
     * | {@see GL46::GL_ZERO}                     |    0 0 0                                             |   0               |
     * | {@see GL46::GL_ONE}                      |    1 1 1                                             |   1               |
     * | {@see GL46::GL_SRC_COLOR}                |     R s0  k R    G s0  k G    B s0  k B              |    A s0  k A      |
     * | {@see GL46::GL_ONE_MINUS_SRC_COLOR}      |     1 1 1  -   R s0  k R    G s0  k G    B s0  k B   |    1 -  A s0  k A |
     * | {@see GL46::GL_DST_COLOR}                |     R d  k R    G d  k G    B d  k B                 |    A d  k A       |
     * | {@see GL46::GL_ONE_MINUS_DST_COLOR}      |     1 1 1  -   R d  k R    G d  k G    B d  k B      |    1 -  A d  k A  |
     * | {@see GL46::GL_SRC_ALPHA}                |     A s0  k A    A s0  k A    A s0  k A              |    A s0  k A      |
     * | {@see GL46::GL_ONE_MINUS_SRC_ALPHA}      |     1 1 1  -   A s0  k A    A s0  k A    A s0  k A   |    1 -  A s0  k A |
     * | {@see GL46::GL_DST_ALPHA}                |     A d  k A    A d  k A    A d  k A                 |    A d  k A       |
     * | {@see GL46::GL_ONE_MINUS_DST_ALPHA}      |     1 1 1  -   A d  k A    A d  k A    A d  k A      |    1 -  A d  k A  |
     * | {@see GL46::GL_CONSTANT_COLOR}           |    R c  G c  B c                                     |   A c             |
     * | {@see GL46::GL_ONE_MINUS_CONSTANT_COLOR} |     1 1 1  -  R c  G c  B c                          |    1 - A c        |
     * | {@see GL46::GL_CONSTANT_ALPHA}           |    A c  A c  A c                                     |   A c             |
     * | {@see GL46::GL_ONE_MINUS_CONSTANT_ALPHA} |     1 1 1  -  A c  A c  A c                          |    1 - A c        |
     * | {@see GL46::GL_SRC_ALPHA_SATURATE}       |    i i i                                             |   1               |
     * | {@see GL46::GL_SRC1_COLOR}               |     R s1  k R    G s1  k G    B s1  k B              |    A s1  k A      |
     * | {@see GL46::GL_ONE_MINUS_SRC1_COLOR}     |     1 1 1 1  -   R s1  k R    G s1  k G    B s1  k B |    1 -  A s1  k A |
     * | {@see GL46::GL_SRC1_ALPHA}               |     A s1  k A    A s1  k A    A s1  k A              |    A s1  k A      |
     * | {@see GL46::GL_ONE_MINUS_SRC1_ALPHA}     |     1 1 1  -   A s1  k A    A s1  k A    A s1  k A   |    1 -  A s1  k A |
     * In the table,
     *
     *    i =  min &amp;af;  A s   1 -  A d
     *
     * To determine the blended RGBA values of a pixel, the system uses the
     * following equations:
     *
     *    R d  =  min &amp;af;  k R   R s  &amp;it; s R  + R d  &amp;it; d R
     *         G d  =  min &amp;af;  k G   G s  &amp;it; s G  + G d  &amp;it;
     * d G          B d  =  min &amp;af;  k B   B s  &amp;it; s B  + B d
     * &amp;it; d B          A d  =  min &amp;af;  k A   A s  &amp;it; s A  +
     * A d  &amp;it; d A
     *
     * Despite the apparent precision of the above equations, blending
     * arithmetic is not exactly specified, because blending operates with
     * imprecise integer color values. However, a blend factor that should be
     * equal to 1 is guaranteed not to modify its multiplicand, and a blend
     * factor equal to 0 reduces its multiplicand to 0. For example, when
     * $srcRGB is {@see GL46::GL_SRC_ALPHA}, $dstRGB is
     * {@see GL46::GL_ONE_MINUS_SRC_ALPHA}, and   A s   is equal to   k A  ,
     * the equations reduce to simple replacement:
     *
     *    R d  = R s       G d  = G s       B d  = B s       A d  = A s
     *
     * @see http://docs.gl/gl2/glBlendFuncSeparate
     * @see http://docs.gl/gl4/glBlendFuncSeparate
     * @since 1.4
     * @param int|\FFI\CData|\FFI\CInt $sfactorRGB
     * @param int|\FFI\CData|\FFI\CInt $dfactorRGB
     * @param int|\FFI\CData|\FFI\CInt $sfactorAlpha
     * @param int|\FFI\CData|\FFI\CInt $dfactorAlpha
     * @return void
     */
    public function glBlendFuncSeparate($sfactorRGB, $dfactorRGB, $sfactorAlpha, $dfactorAlpha): void
    {
        $sfactorRGB = $sfactorRGB instanceof \FFI\CData ? $sfactorRGB->cdata : $sfactorRGB;
        $dfactorRGB = $dfactorRGB instanceof \FFI\CData ? $dfactorRGB->cdata : $dfactorRGB;
        $sfactorAlpha = $sfactorAlpha instanceof \FFI\CData ? $sfactorAlpha->cdata : $sfactorAlpha;
        $dfactorAlpha = $dfactorAlpha instanceof \FFI\CData ? $dfactorAlpha->cdata : $dfactorAlpha;

        assert(Assert::uint16($sfactorRGB), 'Argument $sfactorRGB must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($dfactorRGB), 'Argument $dfactorRGB must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($sfactorAlpha), 'Argument $sfactorAlpha must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($dfactorAlpha), 'Argument $dfactorAlpha must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glBlendFuncSeparate', 'void (*)(GLenum sfactorRGB, GLenum dfactorRGB, GLenum sfactorAlpha, GLenum dfactorAlpha)');
        $proc($sfactorRGB, $dfactorRGB, $sfactorAlpha, $dfactorAlpha);
    }

    /**
     * {@see GL46::glMultiDrawArrays} specifies multiple sets of geometric
     * primitives with very few subroutine calls. Instead of calling a GL
     * procedure to pass each individual vertex, normal, texture coordinate,
     * edge flag, or color, you can prespecify separate arrays of vertices,
     * normals, and colors and use them to construct a sequence of primitives
     * with a single call to {@see GL46::glMultiDrawArrays}.
     *
     * {@see GL46::glMultiDrawArrays} behaves identically to
     * {@see GL46::glDrawArrays} except that $drawcount separate ranges of
     * elements are specified instead.
     *
     * When {@see GL46::glMultiDrawArrays} is called, it uses $count
     * sequential elements from each enabled array to construct a sequence of
     * geometric primitives, beginning with element $first. $mode specifies
     * what kind of primitives are constructed, and how the array elements
     * construct those primitives.
     *
     * Vertex attributes that are modified by {@see GL46::glMultiDrawArrays}
     * have an unspecified value after {@see GL46::glMultiDrawArrays}
     * returns. Attributes that aren't modified remain well defined.
     *
     * @see http://docs.gl/gl2/glMultiDrawArrays
     * @see http://docs.gl/gl4/glMultiDrawArrays
     * @since 1.4
     * @param int|\FFI\CData|\FFI\CInt $mode
     * @param \FFI\CData|\FFI\CIntPtr|null $first
     * @param \FFI\CData|\FFI\CIntPtr|null $count
     * @param int|\FFI\CData|\FFI\CInt $drawcount
     * @return void
     */
    public function glMultiDrawArrays($mode, ?\FFI\CData $first, ?\FFI\CData $count, $drawcount): void
    {
        $mode = $mode instanceof \FFI\CData ? $mode->cdata : $mode;
        $drawcount = $drawcount instanceof \FFI\CData ? $drawcount->cdata : $drawcount;

        assert(Assert::uint16($mode), 'Argument $mode must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($drawcount), 'Argument $drawcount must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glMultiDrawArrays', 'void (*)(GLenum mode, const GLint *first, const GLsizei *count, GLsizei drawcount)');
        $proc($mode, $first, $count, $drawcount);
    }

    /**
     * {@see GL46::glMultiDrawElements} specifies multiple sets of geometric
     * primitives with very few subroutine calls. Instead of calling a GL
     * function to pass each individual vertex, normal, texture coordinate,
     * edge flag, or color, you can prespecify separate arrays of vertices,
     * normals, and so on, and use them to construct a sequence of primitives
     * with a single call to {@see GL46::glMultiDrawElements}.
     *
     * {@see GL46::glMultiDrawElements} is identical in operation to
     * {@see GL46::glDrawElements} except that $drawcount separate lists of
     * elements are specified.
     *
     * Vertex attributes that are modified by
     * {@see GL46::glMultiDrawElements} have an unspecified value after
     * {@see GL46::glMultiDrawElements} returns. Attributes that aren't
     * modified maintain their previous values.
     *
     * @see http://docs.gl/gl2/glMultiDrawElements
     * @see http://docs.gl/gl4/glMultiDrawElements
     * @since 1.4
     * @param int|\FFI\CData|\FFI\CInt $mode
     * @param \FFI\CData|\FFI\CIntPtr|null $count
     * @param int|\FFI\CData|\FFI\CInt $type
     * @param \FFI\CData|\FFI\CPtrPtr|null $indices
     * @param int|\FFI\CData|\FFI\CInt $drawcount
     * @return void
     */
    public function glMultiDrawElements($mode, ?\FFI\CData $count, $type, ?\FFI\CData $indices, $drawcount): void
    {
        $mode = $mode instanceof \FFI\CData ? $mode->cdata : $mode;
        $type = $type instanceof \FFI\CData ? $type->cdata : $type;
        $drawcount = $drawcount instanceof \FFI\CData ? $drawcount->cdata : $drawcount;

        assert(Assert::uint16($mode), 'Argument $mode must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($type), 'Argument $type must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($drawcount), 'Argument $drawcount must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glMultiDrawElements', 'void (*)(GLenum mode, const GLsizei *count, GLenum type, const void *const*indices, GLsizei drawcount)');
        $proc($mode, $count, $type, $indices, $drawcount);
    }

    /**
     * The following values are accepted for $pname:
     *
     *  - {@see GL46::GL_POINT_FADE_THRESHOLD_SIZE}: $params is a single
     *    floating-point value that specifies the
     *    threshold value to which point sizes are clamped if they exceed the
     *    specified value. The default value is 1.0.
     *
     *  - {@see GL46::GL_POINT_SPRITE_COORD_ORIGIN}: $params is a single enum
     *    specifying the point sprite texture
     *    coordinate origin, either {@see GL46::GL_LOWER_LEFT} or
     *    {@see GL46::GL_UPPER_LEFT}. The default value is
     *    {@see GL46::GL_UPPER_LEFT}.
     *
     * @see http://docs.gl/gl2/glPointParameter
     * @see http://docs.gl/gl4/glPointParameter
     * @since 1.4
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param float|\FFI\CData|\FFI\CFloat $param
     * @return void
     */
    public function glPointParameterf($pname, $param): void
    {
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;
        $param = $param instanceof \FFI\CData ? $param->cdata : $param;

        assert(Assert::uint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::float32($param), 'Argument $param must be a C-like GLfloat, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glPointParameterf', 'void (*)(GLenum pname, GLfloat param)');
        $proc($pname, $param);
    }

    /**
     * The following values are accepted for $pname:
     *
     *  - {@see GL46::GL_POINT_FADE_THRESHOLD_SIZE}: $params is a single
     *    floating-point value that specifies the
     *    threshold value to which point sizes are clamped if they exceed the
     *    specified value. The default value is 1.0.
     *
     *  - {@see GL46::GL_POINT_SPRITE_COORD_ORIGIN}: $params is a single enum
     *    specifying the point sprite texture
     *    coordinate origin, either {@see GL46::GL_LOWER_LEFT} or
     *    {@see GL46::GL_UPPER_LEFT}. The default value is
     *    {@see GL46::GL_UPPER_LEFT}.
     *
     * @see http://docs.gl/gl2/glPointParameter
     * @see http://docs.gl/gl4/glPointParameter
     * @since 1.4
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param \FFI\CData|\FFI\CFloatPtr|null $params
     * @return void
     */
    public function glPointParameterfv($pname, ?\FFI\CData $params): void
    {
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;

        assert(Assert::uint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glPointParameterfv', 'void (*)(GLenum pname, const GLfloat *params)');
        $proc($pname, $params);
    }

    /**
     * The following values are accepted for $pname:
     *
     *  - {@see GL46::GL_POINT_FADE_THRESHOLD_SIZE}: $params is a single
     *    floating-point value that specifies the
     *    threshold value to which point sizes are clamped if they exceed the
     *    specified value. The default value is 1.0.
     *
     *  - {@see GL46::GL_POINT_SPRITE_COORD_ORIGIN}: $params is a single enum
     *    specifying the point sprite texture
     *    coordinate origin, either {@see GL46::GL_LOWER_LEFT} or
     *    {@see GL46::GL_UPPER_LEFT}. The default value is
     *    {@see GL46::GL_UPPER_LEFT}.
     *
     * @see http://docs.gl/gl2/glPointParameter
     * @see http://docs.gl/gl4/glPointParameter
     * @since 1.4
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param int|\FFI\CData|\FFI\CInt $param
     * @return void
     */
    public function glPointParameteri($pname, $param): void
    {
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;
        $param = $param instanceof \FFI\CData ? $param->cdata : $param;

        assert(Assert::uint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($param), 'Argument $param must be a C-like GLint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glPointParameteri', 'void (*)(GLenum pname, GLint param)');
        $proc($pname, $param);
    }

    /**
     * The following values are accepted for $pname:
     *
     *  - {@see GL46::GL_POINT_FADE_THRESHOLD_SIZE}: $params is a single
     *    floating-point value that specifies the
     *    threshold value to which point sizes are clamped if they exceed the
     *    specified value. The default value is 1.0.
     *
     *  - {@see GL46::GL_POINT_SPRITE_COORD_ORIGIN}: $params is a single enum
     *    specifying the point sprite texture
     *    coordinate origin, either {@see GL46::GL_LOWER_LEFT} or
     *    {@see GL46::GL_UPPER_LEFT}. The default value is
     *    {@see GL46::GL_UPPER_LEFT}.
     *
     * @see http://docs.gl/gl2/glPointParameter
     * @see http://docs.gl/gl4/glPointParameter
     * @since 1.4
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public function glPointParameteriv($pname, ?\FFI\CData $params): void
    {
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;

        assert(Assert::uint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glPointParameteriv', 'void (*)(GLenum pname, const GLint *params)');
        $proc($pname, $params);
    }

    /**
     * The {@see GL46::GL_BLEND_COLOR} may be used to calculate the source
     * and destination blending factors. The color components are clamped to
     * the range    0 1   before being stored. See {@see GL46::glBlendFunc}
     * for a complete description of the blending operations. Initially the
     * {@see GL46::GL_BLEND_COLOR} is set to (0, 0, 0, 0).
     *
     * @see http://docs.gl/gl2/glBlendColor
     * @see http://docs.gl/gl4/glBlendColor
     * @since 1.4
     * @param float|\FFI\CData|\FFI\CFloat $red
     * @param float|\FFI\CData|\FFI\CFloat $green
     * @param float|\FFI\CData|\FFI\CFloat $blue
     * @param float|\FFI\CData|\FFI\CFloat $alpha
     * @return void
     */
    public function glBlendColor($red, $green, $blue, $alpha): void
    {
        $red = $red instanceof \FFI\CData ? $red->cdata : $red;
        $green = $green instanceof \FFI\CData ? $green->cdata : $green;
        $blue = $blue instanceof \FFI\CData ? $blue->cdata : $blue;
        $alpha = $alpha instanceof \FFI\CData ? $alpha->cdata : $alpha;

        assert(Assert::float32($red), 'Argument $red must be a C-like GLfloat, but incompatible or overflow value given');
        assert(Assert::float32($green), 'Argument $green must be a C-like GLfloat, but incompatible or overflow value given');
        assert(Assert::float32($blue), 'Argument $blue must be a C-like GLfloat, but incompatible or overflow value given');
        assert(Assert::float32($alpha), 'Argument $alpha must be a C-like GLfloat, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glBlendColor', 'void (*)(GLfloat red, GLfloat green, GLfloat blue, GLfloat alpha)');
        $proc($red, $green, $blue, $alpha);
    }

    /**
     * The blend equations determine how a new pixel (the ''source'' color)
     * is combined with a pixel already in the framebuffer (the
     * ''destination'' color). This function sets both the RGB blend equation
     * and the alpha blend equation to a single equation.
     * {@see GL46::glBlendEquationi} specifies the blend equation for a
     * single draw buffer whereas {@see GL46::glBlendEquation} sets the blend
     * equation for all draw buffers.
     *
     * These equations use the source and destination blend factors specified
     * by either {@see GL46::glBlendFunc} or
     * {@see GL46::glBlendFuncSeparate}. See {@see GL46::glBlendFunc} or
     * {@see GL46::glBlendFuncSeparate} for a description of the various
     * blend factors.
     *
     * In the equations that follow, source and destination color components
     * are referred to as    R s  G s  B s  A s    and    R d  G d  B d  A d
     *  , respectively. The result color is referred to as    R r  G r  B r
     * A r   . The source and destination blend factors are denoted    s R  s
     * G  s B  s A    and    d R  d G  d B  d A   , respectively. For these
     * equations all color components are understood to have values in the
     * range    0 1  .          Mode     RGB Components     Alpha Component
     *      {@see GL46::GL_FUNC_ADD}      Rr =  R s  &amp;it; s R  + R d
     * &amp;it; d R        Gr =  G s  &amp;it; s G  + G d  &amp;it; d G
     *  Br =  B s  &amp;it; s B  + B d  &amp;it; d B          Ar =  A s
     * &amp;it; s A  + A d  &amp;it; d A
     * {@see GL46::GL_FUNC_SUBTRACT}      Rr =  R s  &amp;it; s R  - R d
     * &amp;it; d R        Gr =  G s  &amp;it; s G  - G d  &amp;it; d G
     *  Br =  B s  &amp;it; s B  - B d  &amp;it; d B          Ar =  A s
     * &amp;it; s A  - A d  &amp;it; d A
     * {@see GL46::GL_FUNC_REVERSE_SUBTRACT}      Rr =  R d  &amp;it; d R  -
     * R s  &amp;it; s R        Gr =  G d  &amp;it; d G  - G s  &amp;it; s G
     *       Br =  B d  &amp;it; d B  - B s  &amp;it; s B          Ar =  A d
     * &amp;it; d A  - A s  &amp;it; s A         {@see GL46::GL_MIN}      Rr
     * =  min &amp;af;   R s    R d          Gr =  min &amp;af;   G s    G d
     *         Br =  min &amp;af;   B s    B d            Ar =  min &amp;af;
     *  A s    A d           {@see GL46::GL_MAX}      Rr =  max &amp;af;   R
     * s    R d          Gr =  max &amp;af;   G s    G d          Br =  max
     * &amp;af;   B s    B d            Ar =  max &amp;af;   A s    A d
     *
     * The results of these equations are clamped to the range    0 1  .
     *
     * The {@see GL46::GL_MIN} and {@see GL46::GL_MAX} equations are useful
     * for applications that analyze image data (image thresholding against a
     * constant color, for example). The {@see GL46::GL_FUNC_ADD} equation is
     * useful for antialiasing and transparency, among other things.
     *
     * Initially, both the RGB blend equation and the alpha blend equation
     * are set to {@see GL46::GL_FUNC_ADD}.
     *
     * @see http://docs.gl/gl2/glBlendEquation
     * @see http://docs.gl/gl4/glBlendEquation
     * @since 1.4
     * @param int|\FFI\CData|\FFI\CInt $mode
     * @return void
     */
    public function glBlendEquation($mode): void
    {
        $mode = $mode instanceof \FFI\CData ? $mode->cdata : $mode;

        assert(Assert::uint16($mode), 'Argument $mode must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glBlendEquation', 'void (*)(GLenum mode)');
        $proc($mode);
    }
}
