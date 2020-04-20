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
     * In RGBA mode, pixels can be drawn using a function that blends the incoming (source) RGBA values with the RGBA
     * values that are already in the frame buffer (the destination values). Blending is initially disabled. Use
     * {@see glEnable} and {@see glDisable} with argument `GL_BLEND` to enable and disable blending.
     *
     *  - `glBlendFuncSeparate` defines the operation of blending when it is enabled. *`srcRGB`* specifies which
     * method is used to scale the source RGB-color components. *`dstRGB`* specifies which method is used to scale
     * the destination RGB-color components. Likewise, *`srcAlpha`* specifies which method is used to scale the
     * source alpha color component, and *`dstAlpha`* specifies which method is used to scale the destination alpha
     * component. The possible methods are described in the following table. Each method defines four scale factors,
     * one each for red, green, blue, and alpha.
     *
     * In the table and in subsequent equations, source and destination color components are referred to as R s G s B
     * s A s and R d G d B d A d . The color specified by {@see glBlendColor} is referred to as R c G c B c
     * A c . They are understood to have integer values between 0 and k R k G k B k A , where
     *
     * k c = 2 m c - 1
     *
     * and m R m G m B m A is the number of red, green, blue, and alpha bitplanes.
     *
     * Source and destination scale factors are referred to as s R s G s B s A and d R d G d B d A . All scale
     * factors have range 0 1 .
     *
     * **Parameter** **RGB Factor** **Alpha Factor** `GL_ZERO` 0 0 0 0 `GL_ONE` 1 1 1 1 `GL_SRC_COLOR` R s k R G s k
     * G B s k B A s k A `GL_ONE_MINUS_SRC_COLOR` 1 1 1 1 - R s k R G s k G B s k B 1 - A s k A `GL_DST_COLOR` R d k
     * R G d k G B d k B A d k A `GL_ONE_MINUS_DST_COLOR` 1 1 1 - R d k R G d k G B d k B 1 - A d k A `GL_SRC_ALPHA`
     * A s k A A s k A A s k A A s k A `GL_ONE_MINUS_SRC_ALPHA` 1 1 1 - A s k A A s k A A s k A 1 - A s k A
     * `GL_DST_ALPHA` A d k A A d k A A d k A A d k A `GL_ONE_MINUS_DST_ALPHA` 1 1 1 - A d k A A d k A A d k A 1 - A
     * d k A `GL_CONSTANT_COLOR` R c G c B c A c `GL_ONE_MINUS_CONSTANT_COLOR` 1 1 1 - R c G c B c 1 - A c
     * `GL_CONSTANT_ALPHA` A c A c A c A c `GL_ONE_MINUS_CONSTANT_ALPHA` 1 1 1 - A c A c A c 1 - A c
     * `GL_SRC_ALPHA_SATURATE` i i i 1
     *
     * In the table,
     *
     * i = min ⁡ A s 1 - A d
     *
     * To determine the blended RGBA values of a pixel when drawing in RGBA mode, the system uses the following
     * equations:
     *
     * R d = min ⁡ k R R s ⁢ s R + R d ⁢ d R G d = min ⁡ k G G s ⁢ s G + G d ⁢ d G B d = min ⁡ k B B s
     * ⁢ s B + B d ⁢ d B A d = min ⁡ k A A s ⁢ s A + A d ⁢ d A
     *
     * Despite the apparent precision of the above equations, blending arithmetic is not exactly specified, because
     * blending operates with imprecise integer color values. However, a blend factor that should be equal to 1 is
     * guaranteed not to modify its multiplicand, and a blend factor equal to 0 reduces its multiplicand to 0. For
     * example, when *`srcRGB`* is `GL_SRC_ALPHA`, *`dstRGB`* is `GL_ONE_MINUS_SRC_ALPHA`, and A s is equal to k A ,
     * the equations reduce to simple replacement:
     *
     * R d = R s G d = G s B d = B s A d = A s
     *
     * @see http://docs.gl/gl2/glBlendFuncSeparate
     * @see http://docs.gl/gl3/glBlendFuncSeparate
     * @see http://docs.gl/gl4/glBlendFuncSeparate
     * @since 1.4
     * @param int $sfactorRGB
     * @param int $dfactorRGB
     * @param int $sfactorAlpha
     * @param int $dfactorAlpha
     * @return void
     */
    public static function glBlendFuncSeparate(int $sfactorRGB, int $dfactorRGB, int $sfactorAlpha, int $dfactorAlpha): void
    {
        assert(version_compare(self::$info->version, '1.4') >= 0, __FUNCTION__ . ' is available since OpenGL 1.4, but only OpenGL '. self::$info->version . ' is available');
        assert($sfactorRGB >= 0 && $sfactorRGB <= 4_294_967_295, 'Argument $sfactorRGB overflow: C type GLenum is required');
        assert($dfactorRGB >= 0 && $dfactorRGB <= 4_294_967_295, 'Argument $dfactorRGB overflow: C type GLenum is required');
        assert($sfactorAlpha >= 0 && $sfactorAlpha <= 4_294_967_295, 'Argument $sfactorAlpha overflow: C type GLenum is required');
        assert($dfactorAlpha >= 0 && $dfactorAlpha <= 4_294_967_295, 'Argument $dfactorAlpha overflow: C type GLenum is required');

        $proc = self::getProc('glBlendFuncSeparate', 'void (*)(GLenum sfactorRGB, GLenum dfactorRGB, GLenum sfactorAlpha, GLenum dfactorAlpha)');
        $proc($sfactorRGB, $dfactorRGB, $sfactorAlpha, $dfactorAlpha);
    }

    /**
     * Specifies multiple sets of geometric primitives with very few subroutine calls. Instead of calling a GL
     * procedure to pass each individual vertex, normal, texture coordinate, edge flag, or color, you can prespecify
     * separate arrays of vertices, normals, and colors and use them to construct a sequence of primitives with a
     * single call to `glMultiDrawArrays`.
     *
     *  - `glMultiDrawArrays` behaves identically to {@see glDrawArrays} except that *`primcount`* separate
     * ranges of elements are specified instead.
     *
     * When `glMultiDrawArrays` is called, it uses *`count`* sequential elements from each enabled array to construct
     * a sequence of geometric primitives, beginning with element *`first`*. *`mode`* specifies what kind of
     * primitives are constructed, and how the array elements construct those primitives. If `GL_VERTEX_ARRAY` is not
     * enabled, no geometric primitives are generated.
     *
     * Vertex attributes that are modified by `glMultiDrawArrays` have an unspecified value after `glMultiDrawArrays`
     * returns. For example, if `GL_COLOR_ARRAY` is enabled, the value of the current color is undefined after
     * `glMultiDrawArrays` executes. Attributes that aren't modified remain well defined.
     *
     * @see http://docs.gl/gl2/glMultiDrawArrays
     * @see http://docs.gl/gl3/glMultiDrawArrays
     * @see http://docs.gl/gl4/glMultiDrawArrays
     * @since 1.4
     * @param int $mode
     * @param \FFI\CData|\FFI\CIntPtr|null $first
     * @param \FFI\CData|\FFI\CIntPtr|null $count
     * @param int $drawcount
     * @return void
     */
    public static function glMultiDrawArrays(int $mode, ?\FFI\CData $first, ?\FFI\CData $count, int $drawcount): void
    {
        assert(version_compare(self::$info->version, '1.4') >= 0, __FUNCTION__ . ' is available since OpenGL 1.4, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');
        assert($drawcount >= \PHP_INT_MIN && $drawcount <= \PHP_INT_MAX, 'Argument $drawcount overflow: C type GLsizei is required');

        $proc = self::getProc('glMultiDrawArrays', 'void (*)(GLenum mode, const GLint *first, const GLsizei *count, GLsizei drawcount)');
        $proc($mode, $first, $count, $drawcount);
    }

    /**
     * Specifies multiple sets of geometric primitives with very few subroutine calls. Instead of calling a GL
     * function to pass each individual vertex, normal, texture coordinate, edge flag, or color, you can prespecify
     * separate arrays of vertices, normals, and so on, and use them to construct a sequence of primitives with a
     * single call to `glMultiDrawElements`.
     *
     *  - `glMultiDrawElements` is identical in operation to {@see glDrawElements} except that
     * *`primcount`* separate lists of elements are specified.
     *
     * Vertex attributes that are modified by `glMultiDrawElements` have an unspecified value after
     * `glMultiDrawElements` returns. For example, if `GL_COLOR_ARRAY` is enabled, the value of the current color is
     * undefined after `glMultiDrawElements` executes. Attributes that aren't modified maintain their previous
     * values.
     *
     * @see http://docs.gl/gl2/glMultiDrawElements
     * @see http://docs.gl/gl3/glMultiDrawElements
     * @see http://docs.gl/gl4/glMultiDrawElements
     * @since 1.4
     * @param int $mode
     * @param \FFI\CData|\FFI\CIntPtr|null $count
     * @param int $type
     * @param \FFI\CData|\FFI\CPtrPtr|null $indices
     * @param int $drawcount
     * @return void
     */
    public static function glMultiDrawElements(int $mode, ?\FFI\CData $count, int $type, ?\FFI\CData $indices, int $drawcount): void
    {
        assert(version_compare(self::$info->version, '1.4') >= 0, __FUNCTION__ . ' is available since OpenGL 1.4, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');
        assert($drawcount >= \PHP_INT_MIN && $drawcount <= \PHP_INT_MAX, 'Argument $drawcount overflow: C type GLsizei is required');

        $proc = self::getProc('glMultiDrawElements', 'void (*)(GLenum mode, const GLsizei *count, GLenum type, const void *const*indices, GLsizei drawcount)');
        $proc($mode, $count, $type, $indices, $drawcount);
    }

    /**
     * @since 1.4
     * @param int $pname
     * @param float $param
     * @return void
     */
    public static function glPointParameterf(int $pname, float $param): void
    {
        assert(version_compare(self::$info->version, '1.4') >= 0, __FUNCTION__ . ' is available since OpenGL 1.4, but only OpenGL '. self::$info->version . ' is available');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($param >= -3.40282e38 && $param <= 3.40282e38, 'Argument $param overflow: C type GLfloat is required');

        $proc = self::getProc('glPointParameterf', 'void (*)(GLenum pname, GLfloat param)');
        $proc($pname, $param);
    }

    /**
     * @since 1.4
     * @param int $pname
     * @param \FFI\CData|\FFI\CFloatPtr|null $params
     * @return void
     */
    public static function glPointParameterfv(int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.4') >= 0, __FUNCTION__ . ' is available since OpenGL 1.4, but only OpenGL '. self::$info->version . ' is available');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glPointParameterfv', 'void (*)(GLenum pname, const GLfloat *params)');
        $proc($pname, $params);
    }

    /**
     * @since 1.4
     * @param int $pname
     * @param int $param
     * @return void
     */
    public static function glPointParameteri(int $pname, int $param): void
    {
        assert(version_compare(self::$info->version, '1.4') >= 0, __FUNCTION__ . ' is available since OpenGL 1.4, but only OpenGL '. self::$info->version . ' is available');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($param >= \PHP_INT_MIN && $param <= \PHP_INT_MAX, 'Argument $param overflow: C type GLint is required');

        $proc = self::getProc('glPointParameteri', 'void (*)(GLenum pname, GLint param)');
        $proc($pname, $param);
    }

    /**
     * @since 1.4
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glPointParameteriv(int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.4') >= 0, __FUNCTION__ . ' is available since OpenGL 1.4, but only OpenGL '. self::$info->version . ' is available');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glPointParameteriv', 'void (*)(GLenum pname, const GLint *params)');
        $proc($pname, $params);
    }

    /**
     * The `GL_BLEND_COLOR` may be used to calculate the source and destination blending factors. The color
     * components are clamped to the range 0 1 before being stored. See {@see glBlendFunc} for a complete
     * description of the blending operations. Initially the `GL_BLEND_COLOR` is set to (0, 0, 0, 0).
     *
     * @see http://docs.gl/gl2/glBlendColor
     * @see http://docs.gl/gl3/glBlendColor
     * @see http://docs.gl/gl4/glBlendColor
     * @since 1.4
     * @param float $red
     * @param float $green
     * @param float $blue
     * @param float $alpha
     * @return void
     */
    public static function glBlendColor(float $red, float $green, float $blue, float $alpha): void
    {
        assert(version_compare(self::$info->version, '1.4') >= 0, __FUNCTION__ . ' is available since OpenGL 1.4, but only OpenGL '. self::$info->version . ' is available');
        assert($red >= -3.40282e38 && $red <= 3.40282e38, 'Argument $red overflow: C type GLfloat is required');
        assert($green >= -3.40282e38 && $green <= 3.40282e38, 'Argument $green overflow: C type GLfloat is required');
        assert($blue >= -3.40282e38 && $blue <= 3.40282e38, 'Argument $blue overflow: C type GLfloat is required');
        assert($alpha >= -3.40282e38 && $alpha <= 3.40282e38, 'Argument $alpha overflow: C type GLfloat is required');

        $proc = self::getProc('glBlendColor', 'void (*)(GLfloat red, GLfloat green, GLfloat blue, GLfloat alpha)');
        $proc($red, $green, $blue, $alpha);
    }

    /**
     * The blend equations determine how a new pixel (the ''source'' color) is combined with a pixel already in the
     * framebuffer (the ''destination'' color). This function sets both the RGB blend equation and the alpha blend
     * equation to a single equation.
     *
     * These equations use the source and destination blend factors specified by either {@see glBlendFunc} or
     * {@see glBlendFuncSeparate}. See {@see glBlendFunc} or
     * {@see glBlendFuncSeparate} for a description of the various blend factors.
     *
     * In the equations that follow, source and destination color components are referred to as R s G s B s A s and R
     * d G d B d A d , respectively. The result color is referred to as R r G r B r A r . The source and destination
     * blend factors are denoted s R s G s B s A and d R d G d B d A , respectively. For these equations all color
     * components are understood to have values in the range 0 1 .
     *
     * **Mode** **RGB Components** **Alpha Component** `GL_FUNC_ADD` Rr = R s ⁢ s R + R d ⁢ d R
     *
     * Gr = G s ⁢ s G + G d ⁢ d G
     *
     * Br = B s ⁢ s B + B d ⁢ d B
     *
     * Ar = A s ⁢ s A + A d ⁢ d A
     *
     *  - `GL_FUNC_SUBTRACT` Rr = R s ⁢ s R - R d ⁢ d R
     *
     * Gr = G s ⁢ s G - G d ⁢ d G
     *
     * Br = B s ⁢ s B - B d ⁢ d B
     *
     * Ar = A s ⁢ s A - A d ⁢ d A
     *
     *  - `GL_FUNC_REVERSE_SUBTRACT` Rr = R d ⁢ d R - R s ⁢ s R
     *
     * Gr = G d ⁢ d G - G s ⁢ s G
     *
     * Br = B d ⁢ d B - B s ⁢ s B
     *
     * Ar = A d ⁢ d A - A s ⁢ s A
     *
     *  - `GL_MIN` Rr = min ⁡ R s R d
     *
     * Gr = min ⁡ G s G d
     *
     * Br = min ⁡ B s B d
     *
     * Ar = min ⁡ A s A d
     *
     *  - `GL_MAX` Rr = max ⁡ R s R d
     *
     * Gr = max ⁡ G s G d
     *
     * Br = max ⁡ B s B d
     *
     * Ar = max ⁡ A s A d
     *
     * The results of these equations are clamped to the range 0 1 .
     *
     * The `GL_MIN` and `GL_MAX` equations are useful for applications that analyze image data (image thresholding
     * against a constant color, for example). The `GL_FUNC_ADD` equation is useful for antialiasing and
     * transparency, among other things.
     *
     * Initially, both the RGB blend equation and the alpha blend equation are set to `GL_FUNC_ADD`.
     *
     * @see http://docs.gl/gl2/glBlendEquation
     * @see http://docs.gl/gl3/glBlendEquation
     * @see http://docs.gl/gl4/glBlendEquation
     * @since 1.4
     * @param int $mode
     * @return void
     */
    public static function glBlendEquation(int $mode): void
    {
        assert(version_compare(self::$info->version, '1.4') >= 0, __FUNCTION__ . ' is available since OpenGL 1.4, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');

        $proc = self::getProc('glBlendEquation', 'void (*)(GLenum mode)');
        $proc($mode);
    }
}
