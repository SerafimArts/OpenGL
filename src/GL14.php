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
 *
 * @version 1.4
 */
class GL14 extends GL13
{
    /**
     * Accepted by the $pname parameter of TexParameteri, TexParameterf, TexParameteriv, TexParameterfv,
     * GetTexParameteriv, and GetTexParameterfv.
     *
     * @since 1.4
     * @var int
     */
    public const GL_GENERATE_MIPMAP = 0x8191;

    /**
     * Accepted by the $target parameter of Hint, and by the $pname parameter of GetBooleanv, GetIntegerv, GetFloatv,
     * and GetDoublev.
     *
     * @since 1.4
     * @var int
     */
    public const GL_GENERATE_MIPMAP_HINT = 0x8192;

    /**
     * Accepted by the $sfactor and $dfactor parameters of BlendFunc.
     *
     * @since 1.4
     * @var int
     */
    public const
        GL_CONSTANT_COLOR           = 0x8001,
        GL_ONE_MINUS_CONSTANT_COLOR = 0x8002,
        GL_CONSTANT_ALPHA           = 0x8003,
        GL_ONE_MINUS_CONSTANT_ALPHA = 0x8004;

    /**
     * Accepted by the $mode parameter of BlendEquation.
     *
     * @since 1.4
     * @var int
     */
    public const
        GL_FUNC_ADD = 0x8006,
        GL_MIN      = 0x8007,
        GL_MAX      = 0x8008;

    /**
     * Accepted by the $mode parameter of BlendEquation.
     *
     * @since 1.4
     * @var int
     */
    public const
        GL_FUNC_SUBTRACT         = 0x800A,
        GL_FUNC_REVERSE_SUBTRACT = 0x800B;

    /**
     * Accepted by the $internalFormat parameter of TexImage1D, TexImage2D, CopyTexImage1D and CopyTexImage2D.
     *
     * @since 1.4
     * @var int
     */
    public const
        GL_DEPTH_COMPONENT16 = 0x81A5,
        GL_DEPTH_COMPONENT24 = 0x81A6,
        GL_DEPTH_COMPONENT32 = 0x81A7;

    /**
     * Accepted by the $pname parameter of GetTexLevelParameterfv and GetTexLevelParameteriv.
     *
     * @since 1.4
     * @var int
     */
    public const GL_TEXTURE_DEPTH_SIZE = 0x884A;

    /**
     * Accepted by the $pname parameter of TexParameterf, TexParameteri, TexParameterfv, TexParameteriv,
     * GetTexParameterfv, and GetTexParameteriv.
     *
     * @since 1.4
     * @var int
     */
    public const GL_DEPTH_TEXTURE_MODE = 0x884B;

    /**
     * Accepted by the $pname parameter of TexParameterf, TexParameteri, TexParameterfv, TexParameteriv,
     * GetTexParameterfv, and GetTexParameteriv.
     *
     * @since 1.4
     * @var int
     */
    public const
        GL_TEXTURE_COMPARE_MODE = 0x884C,
        GL_TEXTURE_COMPARE_FUNC = 0x884D;

    /**
     * Accepted by the $param parameter of TexParameterf, TexParameteri, TexParameterfv, and TexParameteriv when the
     * $pname parameter is TEXTURE_COMPARE_MODE.
     *
     * @since 1.4
     * @var int
     */
    public const GL_COMPARE_R_TO_TEXTURE = 0x884E;

    /**
     * Accepted by the $pname parameter of Fogi and Fogf.
     *
     * @since 1.4
     * @var int
     */
    public const GL_FOG_COORDINATE_SOURCE = 0x8450;

    /**
     * Accepted by the $param parameter of Fogi and Fogf.
     *
     * @since 1.4
     * @var int
     */
    public const
        GL_FOG_COORDINATE = 0x8451,
        GL_FRAGMENT_DEPTH = 0x8452;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetIntegerv, GetFloatv, and GetDoublev.
     *
     * @since 1.4
     * @var int
     */
    public const
        GL_CURRENT_FOG_COORDINATE      = 0x8453,
        GL_FOG_COORDINATE_ARRAY_TYPE   = 0x8454,
        GL_FOG_COORDINATE_ARRAY_STRIDE = 0x8455;

    /**
     * Accepted by the $pname parameter of GetPointerv.
     *
     * @since 1.4
     * @var int
     */
    public const GL_FOG_COORDINATE_ARRAY_POINTER = 0x8456;

    /**
     * Accepted by the $array parameter of EnableClientState and DisableClientState.
     *
     * @since 1.4
     * @var int
     */
    public const GL_FOG_COORDINATE_ARRAY = 0x8457;

    /**
     * Accepted by the $pname parameter of PointParameterfARB, and the $pname of Get.
     *
     * @since 1.4
     * @var int
     */
    public const
        GL_POINT_SIZE_MIN             = 0x8126,
        GL_POINT_SIZE_MAX             = 0x8127,
        GL_POINT_FADE_THRESHOLD_SIZE  = 0x8128,
        GL_POINT_DISTANCE_ATTENUATION = 0x8129;

    /**
     * Accepted by the $cap parameter of Enable, Disable, and IsEnabled, and by the $pname parameter of GetBooleanv,
     * GetIntegerv, GetFloatv, and GetDoublev.
     *
     * @since 1.4
     * @var int
     */
    public const GL_COLOR_SUM = 0x8458;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetIntegerv, GetFloatv, and GetDoublev.
     *
     * @since 1.4
     * @var int
     */
    public const
        GL_CURRENT_SECONDARY_COLOR      = 0x8459,
        GL_SECONDARY_COLOR_ARRAY_SIZE   = 0x845A,
        GL_SECONDARY_COLOR_ARRAY_TYPE   = 0x845B,
        GL_SECONDARY_COLOR_ARRAY_STRIDE = 0x845C;

    /**
     * Accepted by the $pname parameter of GetPointerv.
     *
     * @since 1.4
     * @var int
     */
    public const GL_SECONDARY_COLOR_ARRAY_POINTER = 0x845D;

    /**
     * Accepted by the $array parameter of EnableClientState and DisableClientState.
     *
     * @since 1.4
     * @var int
     */
    public const GL_SECONDARY_COLOR_ARRAY = 0x845E;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetIntegerv, GetFloatv, and GetDoublev.
     *
     * @since 1.4
     * @var int
     */
    public const
        GL_BLEND_DST_RGB   = 0x80C8,
        GL_BLEND_SRC_RGB   = 0x80C9,
        GL_BLEND_DST_ALPHA = 0x80CA,
        GL_BLEND_SRC_ALPHA = 0x80CB;

    /**
     * Accepted by the $sfail, $dpfail, and $dppass parameter of StencilOp.
     *
     * @since 1.4
     * @var int
     */
    public const
        GL_INCR_WRAP = 0x8507,
        GL_DECR_WRAP = 0x8508;

    /**
     * Accepted by the $target parameters of GetTexEnvfv, GetTexEnviv, TexEnvi, TexEnvf, Texenviv, and TexEnvfv.
     *
     * @since 1.4
     * @var int
     */
    public const GL_TEXTURE_FILTER_CONTROL = 0x8500;

    /**
     * When the $target parameter of GetTexEnvfv, GetTexEnviv, TexEnvi, TexEnvf, TexEnviv, and TexEnvfv is
     * TEXTURE_FILTER_CONTROL, then the value of $pname may be.
     *
     * @since 1.4
     * @var int
     */
    public const GL_TEXTURE_LOD_BIAS = 0x8501;

    /**
     * Accepted by the $pname parameters of GetBooleanv, GetIntegerv, GetFloatv, and GetDoublev.
     *
     * @since 1.4
     * @var int
     */
    public const GL_MAX_TEXTURE_LOD_BIAS = 0x84FD;

    /**
     * Accepted by the $param parameter of TexParameteri and TexParameterf, and by the $params parameter of
     * TexParameteriv and TexParameterfv, when their $pname parameter is TEXTURE_WRAP_S, TEXTURE_WRAP_T, or
     * TEXTURE_WRAP_R.
     *
     * @since 1.4
     * @var int
     */
    public const GL_MIRRORED_REPEAT = 0x8370;

    /**
     * The {@see GL14::GL_BLEND_COLOR} may be used to calculate the source and destination blending factors. The
     * color components are clamped to the range    0 1   before being stored. See {@see GL14::blendFunc} for a
     * complete description of the blending operations. Initially the {@see GL14::GL_BLEND_COLOR}
     * is set to (0, 0, 0, 0).
     *
     * @see http://docs.gl/gl2/glBlendColor
     * @see http://docs.gl/gl4/glBlendColor
     * @since 1.4
     * @param float $red
     * @param float $green
     * @param float $blue
     * @param float $alpha
     * @return void
     */
    public function blendColor(float $red, float $green, float $blue, float $alpha): void
    {
        $__proc = $this->proc('glBlendColor', 'void (*)(GLfloat red, GLfloat green, GLfloat blue, GLfloat alpha)');
        $__proc($red, $green, $blue, $alpha);
    }

    /**
     * The blend equations determine how a new pixel (the ''source'' color) is combined with a pixel already in the
     * framebuffer (the ''destination'' color). This function sets both the RGB blend equation and the alpha blend
     * equation to a single equation. {@see GL14::blendEquationi} specifies the blend equation for a single draw
     * buffer whereas {@see GL14::blendEquation} sets the blend equation for all draw buffers.
     *
     * These equations use the source and destination blend factors specified by either {@see GL14::blendFunc} or
     * {@see GL14::blendFuncSeparate}. See {@see GL14::blendFunc} or {@see GL14::blendFuncSeparate} for a
     * description of the various blend factors.
     *
     * In the equations that follow, source and destination color components are referred to as    R s  G s  B s  A s
     *    and    R d  G d  B d  A d   , respectively. The result color is referred to as    R r  G r  B r  A r   .
     * The source and destination blend factors are denoted    s R  s G  s B  s A    and    d R  d G  d B  d A   ,
     * respectively. For these equations all color components are understood to have values in the range    0 1  .
     *       Mode     RGB Components     Alpha Component        {@see GL14::GL_FUNC_ADD}      Rr =  R s  &amp;it; s R
     *  + R d  &amp;it; d R        Gr =  G s  &amp;it; s G  + G d  &amp;it; d G        Br =  B s  &amp;it; s B  + B d
     *  &amp;it; d B          Ar =  A s  &amp;it; s A  + A d  &amp;it; d A         {@see GL14::GL_FUNC_SUBTRACT}
     * Rr =  R s  &amp;it; s R  - R d  &amp;it; d R        Gr =  G s  &amp;it; s G  - G d  &amp;it; d G        Br =
     * B s  &amp;it; s B  - B d  &amp;it; d B          Ar =  A s  &amp;it; s A  - A d  &amp;it; d A
     * {@see GL14::GL_FUNC_REVERSE_SUBTRACT}      Rr =  R d  &amp;it; d R  - R s  &amp;it; s R        Gr =  G d
     * &amp;it; d G  - G s  &amp;it; s G        Br =  B d  &amp;it; d B  - B s  &amp;it; s B          Ar =  A d
     * &amp;it; d A  - A s  &amp;it; s A         {@see GL14::GL_MIN}      Rr =  min &amp;af;   R s    R d          Gr
     * =  min &amp;af;   G s    G d          Br =  min &amp;af;   B s    B d            Ar =  min &amp;af;   A s    A
     * d           {@see GL14::GL_MAX}      Rr =  max &amp;af;   R s    R d          Gr =  max &amp;af;   G s    G d
     *         Br =  max &amp;af;   B s    B d            Ar =  max &amp;af;   A s    A d
     *
     * The results of these equations are clamped to the range    0 1  .
     *
     * The {@see GL14::GL_MIN} and {@see GL14::GL_MAX} equations are useful for applications that analyze image data
     * (image thresholding against a constant color, for example). The {@see GL14::GL_FUNC_ADD} equation is useful
     * for antialiasing and transparency, among other things.
     *
     * Initially, both the RGB blend equation and the alpha blend equation are set to {@see GL14::GL_FUNC_ADD}.
     *
     * @see http://docs.gl/gl2/glBlendEquation
     * @see http://docs.gl/gl4/glBlendEquation
     * @since 1.4
     * @param int $mode
     * @return void
     */
    public function blendEquation(int $mode): void
    {
        $__proc = $this->proc('glBlendEquation', 'void (*)(GLenum mode)');
        $__proc($mode);
    }

    /**
     * Pixels can be drawn using a function that blends the incoming (source) RGBA values with the RGBA values that
     * are already in the frame buffer (the destination values). Blending is initially disabled. Use
     * {@see GL14::enable} and  {@see GL14::disable} with argument {@see GL14::GL_BLEND} to enable and disable
     * blending.
     *
     * {@see GL14::blendFuncSeparate} defines the operation of blending for all draw buffers when it is enabled.
     * {@see GL14::blendFuncSeparatei} defines the operation of blending for a single draw buffer specified by $buf
     * when enabled for that draw buffer. $srcRGB specifies which method is used to scale the source RGB-color
     * components. $dstRGB specifies which method is used to scale the destination RGB-color components. Likewise,
     * $srcAlpha specifies which method is used to scale the source alpha color component, and $dstAlpha specifies
     * which method is used to scale the destination alpha component. The possible methods are described in the
     * following table. Each method defines four scale factors, one each for red, green, blue, and alpha.
     *
     * In the table and in subsequent equations, first source, second source and destination color components are
     * referred to as    R s0  G s0  B s0  A s0   ,    R s1  G s1  B s1  A s1   , and    R d  G d  B d  A d   ,
     * respectively. The color specified by {@see GL14::blendColor} is referred to as    R c  G c  B c  A c   .
     * They are understood to have integer values between 0 and    k R  k G  k B  k A   , where
     *
     *    k c  =  2  m c    - 1
     *
     * and    m R  m G  m B  m A    is the number of red, green, blue, and alpha bitplanes.
     *
     * Source and destination scale factors are referred to as    s R  s G  s B  s A    and    d R  d G  d B  d A   .
     * All scale factors have range    0 1  .
     *
     * | {@see GL14::GL_ZERO}                     |    0 0 0                                             |   0               |
     * | {@see GL14::GL_ONE}                      |    1 1 1                                             |   1               |
     * | {@see GL14::GL_SRC_COLOR}                |     R s0  k R    G s0  k G    B s0  k B              |    A s0  k A      |
     * | {@see GL14::GL_ONE_MINUS_SRC_COLOR}      |     1 1 1  -   R s0  k R    G s0  k G    B s0  k B   |    1 -  A s0  k A |
     * | {@see GL14::GL_DST_COLOR}                |     R d  k R    G d  k G    B d  k B                 |    A d  k A       |
     * | {@see GL14::GL_ONE_MINUS_DST_COLOR}      |     1 1 1  -   R d  k R    G d  k G    B d  k B      |    1 -  A d  k A  |
     * | {@see GL14::GL_SRC_ALPHA}                |     A s0  k A    A s0  k A    A s0  k A              |    A s0  k A      |
     * | {@see GL14::GL_ONE_MINUS_SRC_ALPHA}      |     1 1 1  -   A s0  k A    A s0  k A    A s0  k A   |    1 -  A s0  k A |
     * | {@see GL14::GL_DST_ALPHA}                |     A d  k A    A d  k A    A d  k A                 |    A d  k A       |
     * | {@see GL14::GL_ONE_MINUS_DST_ALPHA}      |     1 1 1  -   A d  k A    A d  k A    A d  k A      |    1 -  A d  k A  |
     * | {@see GL14::GL_CONSTANT_COLOR}           |    R c  G c  B c                                     |   A c             |
     * | {@see GL14::GL_ONE_MINUS_CONSTANT_COLOR} |     1 1 1  -  R c  G c  B c                          |    1 - A c        |
     * | {@see GL14::GL_CONSTANT_ALPHA}           |    A c  A c  A c                                     |   A c             |
     * | {@see GL14::GL_ONE_MINUS_CONSTANT_ALPHA} |     1 1 1  -  A c  A c  A c                          |    1 - A c        |
     * | {@see GL14::GL_SRC_ALPHA_SATURATE}       |    i i i                                             |   1               |
     * | {@see GL14::GL_SRC1_COLOR}               |     R s1  k R    G s1  k G    B s1  k B              |    A s1  k A      |
     * | {@see GL14::GL_ONE_MINUS_SRC1_COLOR}     |     1 1 1 1  -   R s1  k R    G s1  k G    B s1  k B |    1 -  A s1  k A |
     * | {@see GL14::GL_SRC1_ALPHA}               |     A s1  k A    A s1  k A    A s1  k A              |    A s1  k A      |
     * | {@see GL14::GL_ONE_MINUS_SRC1_ALPHA}     |     1 1 1  -   A s1  k A    A s1  k A    A s1  k A   |    1 -  A s1  k A |
     * In the table,
     *
     *    i =  min &amp;af;  A s   1 -  A d
     *
     * To determine the blended RGBA values of a pixel, the system uses the following equations:
     *
     *    R d  =  min &amp;af;  k R   R s  &amp;it; s R  + R d  &amp;it; d R          G d  =  min &amp;af;  k G   G s
     *  &amp;it; s G  + G d  &amp;it; d G          B d  =  min &amp;af;  k B   B s  &amp;it; s B  + B d  &amp;it; d B
     *          A d  =  min &amp;af;  k A   A s  &amp;it; s A  + A d  &amp;it; d A
     *
     * Despite the apparent precision of the above equations, blending arithmetic is not exactly specified, because
     * blending operates with imprecise integer color values. However, a blend factor that should be equal to 1 is
     * guaranteed not to modify its multiplicand, and a blend factor equal to 0 reduces its multiplicand to 0. For
     * example, when $srcRGB is {@see GL14::GL_SRC_ALPHA}, $dstRGB is {@see GL14::GL_ONE_MINUS_SRC_ALPHA}, and   A s
     *  is equal to   k A  , the equations reduce to simple replacement:
     *
     *    R d  = R s       G d  = G s       B d  = B s       A d  = A s
     *
     * @see http://docs.gl/gl2/glBlendFuncSeparate
     * @see http://docs.gl/gl4/glBlendFuncSeparate
     * @since 1.4
     * @param int $sfactorRGB
     * @param int $dfactorRGB
     * @param int $sfactorAlpha
     * @param int $dfactorAlpha
     * @return void
     */
    public function blendFuncSeparate(int $sfactorRGB, int $dfactorRGB, int $sfactorAlpha, int $dfactorAlpha): void
    {
        $__proc = $this->proc('glBlendFuncSeparate', 'void (*)(GLenum sfactorRGB, GLenum dfactorRGB, GLenum sfactorAlpha, GLenum dfactorAlpha)');
        $__proc($sfactorRGB, $dfactorRGB, $sfactorAlpha, $dfactorAlpha);
    }

    /**
     * {@see GL14::multiDrawArrays} specifies multiple sets of geometric primitives with very few subroutine calls.
     * Instead of calling a GL procedure to pass each individual vertex, normal, texture coordinate, edge flag, or
     * color, you can prespecify separate arrays of vertices, normals, and colors and use them to construct a
     * sequence of primitives with a single call to {@see GL14::multiDrawArrays}.
     *
     * {@see GL14::multiDrawArrays} behaves identically to {@see GL14::drawArrays} except that $drawcount
     * separate ranges of elements are specified instead.
     *
     * When {@see GL14::multiDrawArrays} is called, it uses $count sequential elements from each enabled array to
     * construct a sequence of geometric primitives, beginning with element $first. $mode specifies what kind of
     * primitives are constructed, and how the array elements construct those primitives.
     *
     * Vertex attributes that are modified by {@see GL14::multiDrawArrays} have an unspecified value after
     * {@see GL14::multiDrawArrays} returns. Attributes that aren't modified remain well defined.
     *
     * @see http://docs.gl/gl2/glMultiDrawArrays
     * @see http://docs.gl/gl4/glMultiDrawArrays
     * @since 1.4
     * @param int $mode
     * @param CData|null $first
     * @param CData|null $count
     * @param int $drawcount
     * @return void
     */
    public function multiDrawArrays(int $mode, ?CData $first, ?CData $count, int $drawcount): void
    {
        $__proc = $this->proc('glMultiDrawArrays', 'void (*)(GLenum mode, const GLint *first, const GLsizei *count, GLsizei drawcount)');
        $__proc($mode, $first, $count, $drawcount);
    }

    /**
     * {@see GL14::multiDrawElements} specifies multiple sets of geometric primitives with very few subroutine
     * calls. Instead of calling a GL function to pass each individual vertex, normal, texture coordinate, edge flag,
     * or color, you can prespecify separate arrays of vertices, normals, and so on, and use them to construct a
     * sequence of primitives with a single call to {@see GL14::multiDrawElements}.
     *
     * {@see GL14::multiDrawElements} is identical in operation to {@see GL14::drawElements} except that
     * $drawcount separate lists of elements are specified.
     *
     * Vertex attributes that are modified by {@see GL14::multiDrawElements} have an unspecified value after
     * {@see GL14::multiDrawElements} returns. Attributes that aren't modified maintain their previous values.
     *
     * @see http://docs.gl/gl2/glMultiDrawElements
     * @see http://docs.gl/gl4/glMultiDrawElements
     * @since 1.4
     * @param int $mode
     * @param CData|null $count
     * @param int $type
     * @param CData|null $indices
     * @param int $drawcount
     * @return void
     */
    public function multiDrawElements(int $mode, ?CData $count, int $type, ?CData $indices, int $drawcount): void
    {
        $__proc = $this->proc('glMultiDrawElements', 'void (*)(GLenum mode, const GLsizei *count, GLenum type, const void *const *indices, GLsizei drawcount)');
        $__proc($mode, $count, $type, $indices, $drawcount);
    }

    /**
     * The following values are accepted for $pname:
     *
     *  - {@see GL14::GL_POINT_FADE_THRESHOLD_SIZE}: $params is a single
     *    floating-point value that specifies the threshold value to which point
     *    sizes are
     *    clamped if they exceed the specified value. The default value is 1.0.
     *
     *  - {@see GL14::GL_POINT_SPRITE_COORD_ORIGIN}: $params is a single enum
     *    specifying the point sprite texture coordinate origin, either
     *    {@see GL14::GL_LOWER_LEFT} or {@see GL14::GL_UPPER_LEFT}. The default
     *    value is {@see GL14::GL_UPPER_LEFT}.
     *
     * @see http://docs.gl/gl2/glPointParameter
     * @see http://docs.gl/gl4/glPointParameter
     * @since 1.4
     * @param int $pname
     * @param float $param
     * @return void
     */
    public function pointParameterf(int $pname, float $param): void
    {
        $__proc = $this->proc('glPointParameterf', 'void (*)(GLenum pname, GLfloat param)');
        $__proc($pname, $param);
    }

    /**
     * The following values are accepted for $pname:
     *
     *  - {@see GL14::GL_POINT_FADE_THRESHOLD_SIZE}: $params is a single
     *    floating-point value that specifies the threshold value to which point
     *    sizes are
     *    clamped if they exceed the specified value. The default value is 1.0.
     *
     *  - {@see GL14::GL_POINT_SPRITE_COORD_ORIGIN}: $params is a single enum
     *    specifying the point sprite texture coordinate origin, either
     *    {@see GL14::GL_LOWER_LEFT} or {@see GL14::GL_UPPER_LEFT}. The default
     *    value is {@see GL14::GL_UPPER_LEFT}.
     *
     * @see http://docs.gl/gl2/glPointParameter
     * @see http://docs.gl/gl4/glPointParameter
     * @since 1.4
     * @param int $pname
     * @param CData|null $params
     * @return void
     */
    public function pointParameterfv(int $pname, ?CData $params): void
    {
        $__proc = $this->proc('glPointParameterfv', 'void (*)(GLenum pname, const GLfloat *params)');
        $__proc($pname, $params);
    }

    /**
     * The following values are accepted for $pname:
     *
     *  - {@see GL14::GL_POINT_FADE_THRESHOLD_SIZE}: $params is a single
     *    floating-point value that specifies the threshold value to which point
     *    sizes are
     *    clamped if they exceed the specified value. The default value is 1.0.
     *
     *  - {@see GL14::GL_POINT_SPRITE_COORD_ORIGIN}: $params is a single enum
     *    specifying the point sprite texture coordinate origin, either
     *    {@see GL14::GL_LOWER_LEFT} or {@see GL14::GL_UPPER_LEFT}. The default
     *    value is {@see GL14::GL_UPPER_LEFT}.
     *
     * @see http://docs.gl/gl2/glPointParameter
     * @see http://docs.gl/gl4/glPointParameter
     * @since 1.4
     * @param int $pname
     * @param int $param
     * @return void
     */
    public function pointParameteri(int $pname, int $param): void
    {
        $__proc = $this->proc('glPointParameteri', 'void (*)(GLenum pname, GLint param)');
        $__proc($pname, $param);
    }

    /**
     * The following values are accepted for $pname:
     *
     *  - {@see GL14::GL_POINT_FADE_THRESHOLD_SIZE}: $params is a single
     *    floating-point value that specifies the threshold value to which point
     *    sizes are
     *    clamped if they exceed the specified value. The default value is 1.0.
     *
     *  - {@see GL14::GL_POINT_SPRITE_COORD_ORIGIN}: $params is a single enum
     *    specifying the point sprite texture coordinate origin, either
     *    {@see GL14::GL_LOWER_LEFT} or {@see GL14::GL_UPPER_LEFT}. The default
     *    value is {@see GL14::GL_UPPER_LEFT}.
     *
     * @see http://docs.gl/gl2/glPointParameter
     * @see http://docs.gl/gl4/glPointParameter
     * @since 1.4
     * @param int $pname
     * @param CData|null $params
     * @return void
     */
    public function pointParameteriv(int $pname, ?CData $params): void
    {
        $__proc = $this->proc('glPointParameteriv', 'void (*)(GLenum pname, const GLint *params)');
        $__proc($pname, $params);
    }
}
