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
 * The OpenGL functionality up to version 2.0. Includes the deprecated symbols of the Compatibility Profile.
 *
 * Extensions promoted to core in this release:
 *
 * - ARB_shader_objects @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_shader_objects.txt
 * - ARB_vertex_shader @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_vertex_shader.txt
 * - ARB_fragment_shader @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_fragment_shader.txt
 * - ARB_shading_language_100 @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_shading_language_100.txt
 * - ARB_draw_buffers @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_draw_buffers.txt
 * - ARB_texture_non_power_of_two @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_texture_non_power_of_two.txt
 * - ARB_point_sprite @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_point_sprite.txt
 * - ATI_separate_stencil @see https://www.khronos.org/registry/OpenGL/extensions/ATI/ATI_separate_stencil.txt
 * - EXT_stencil_two_side @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_stencil_two_side.txt
 */
class GL20 extends GL15
{
    /**
     * @var int
     * @since 2.0
     */
    public const GL_BLEND_EQUATION_RGB = 0x8009;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_VERTEX_ATTRIB_ARRAY_ENABLED = 0x8622;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_VERTEX_ATTRIB_ARRAY_SIZE = 0x8623;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_VERTEX_ATTRIB_ARRAY_STRIDE = 0x8624;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_VERTEX_ATTRIB_ARRAY_TYPE = 0x8625;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_CURRENT_VERTEX_ATTRIB = 0x8626;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_VERTEX_PROGRAM_POINT_SIZE = 0x8642;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_VERTEX_ATTRIB_ARRAY_POINTER = 0x8645;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_STENCIL_BACK_FUNC = 0x8800;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_STENCIL_BACK_FAIL = 0x8801;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_STENCIL_BACK_PASS_DEPTH_FAIL = 0x8802;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_STENCIL_BACK_PASS_DEPTH_PASS = 0x8803;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_MAX_DRAW_BUFFERS = 0x8824;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_DRAW_BUFFER0 = 0x8825;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_DRAW_BUFFER1 = 0x8826;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_DRAW_BUFFER2 = 0x8827;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_DRAW_BUFFER3 = 0x8828;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_DRAW_BUFFER4 = 0x8829;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_DRAW_BUFFER5 = 0x882a;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_DRAW_BUFFER6 = 0x882b;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_DRAW_BUFFER7 = 0x882c;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_DRAW_BUFFER8 = 0x882d;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_DRAW_BUFFER9 = 0x882e;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_DRAW_BUFFER10 = 0x882f;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_DRAW_BUFFER11 = 0x8830;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_DRAW_BUFFER12 = 0x8831;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_DRAW_BUFFER13 = 0x8832;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_DRAW_BUFFER14 = 0x8833;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_DRAW_BUFFER15 = 0x8834;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_BLEND_EQUATION_ALPHA = 0x883d;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_MAX_VERTEX_ATTRIBS = 0x8869;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_VERTEX_ATTRIB_ARRAY_NORMALIZED = 0x886a;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_MAX_TEXTURE_IMAGE_UNITS = 0x8872;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_FRAGMENT_SHADER = 0x8b30;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_VERTEX_SHADER = 0x8b31;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_MAX_FRAGMENT_UNIFORM_COMPONENTS = 0x8b49;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_MAX_VERTEX_UNIFORM_COMPONENTS = 0x8b4a;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_MAX_VARYING_FLOATS = 0x8b4b;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_MAX_VERTEX_TEXTURE_IMAGE_UNITS = 0x8b4c;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_MAX_COMBINED_TEXTURE_IMAGE_UNITS = 0x8b4d;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_SHADER_TYPE = 0x8b4f;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_FLOAT_VEC2 = 0x8b50;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_FLOAT_VEC3 = 0x8b51;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_FLOAT_VEC4 = 0x8b52;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_INT_VEC2 = 0x8b53;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_INT_VEC3 = 0x8b54;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_INT_VEC4 = 0x8b55;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_BOOL = 0x8b56;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_BOOL_VEC2 = 0x8b57;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_BOOL_VEC3 = 0x8b58;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_BOOL_VEC4 = 0x8b59;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_FLOAT_MAT2 = 0x8b5a;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_FLOAT_MAT3 = 0x8b5b;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_FLOAT_MAT4 = 0x8b5c;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_SAMPLER_1D = 0x8b5d;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_SAMPLER_2D = 0x8b5e;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_SAMPLER_3D = 0x8b5f;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_SAMPLER_CUBE = 0x8b60;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_SAMPLER_1D_SHADOW = 0x8b61;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_SAMPLER_2D_SHADOW = 0x8b62;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_DELETE_STATUS = 0x8b80;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_COMPILE_STATUS = 0x8b81;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_LINK_STATUS = 0x8b82;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_VALIDATE_STATUS = 0x8b83;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_INFO_LOG_LENGTH = 0x8b84;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_ATTACHED_SHADERS = 0x8b85;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_ACTIVE_UNIFORMS = 0x8b86;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_ACTIVE_UNIFORM_MAX_LENGTH = 0x8b87;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_SHADER_SOURCE_LENGTH = 0x8b88;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_ACTIVE_ATTRIBUTES = 0x8b89;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_ACTIVE_ATTRIBUTE_MAX_LENGTH = 0x8b8a;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_FRAGMENT_SHADER_DERIVATIVE_HINT = 0x8b8b;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_SHADING_LANGUAGE_VERSION = 0x8b8c;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_CURRENT_PROGRAM = 0x8b8d;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_POINT_SPRITE_COORD_ORIGIN = 0x8ca0;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_LOWER_LEFT = 0x8ca1;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_UPPER_LEFT = 0x8ca2;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_STENCIL_BACK_REF = 0x8ca3;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_STENCIL_BACK_VALUE_MASK = 0x8ca4;
    /**
     * @var int
     * @since 2.0
     */
    public const GL_STENCIL_BACK_WRITEMASK = 0x8ca5;

    /**
     * The blend equations determines how a new pixel (the ''source'' color) is combined with a pixel already in the
     * framebuffer (the ''destination'' color). This function specifies one blend equation for the RGB-color
     * components and one blend equation for the alpha component.
     *
     * The blend equations use the source and destination blend factors specified by either
     * {@see glBlendFunc} or {@see glBlendFuncSeparate}. See {@see glBlendFunc} or
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
     * @see http://docs.gl/gl2/glBlendEquationSeparate
     * @see http://docs.gl/gl3/glBlendEquationSeparate
     * @see http://docs.gl/gl4/glBlendEquationSeparate
     * @since 2.0
     * @param int $modeRGB
     * @param int $modeAlpha
     * @return void
     */
    public static function glBlendEquationSeparate(int $modeRGB, int $modeAlpha): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($modeRGB >= 0 && $modeRGB <= 4_294_967_295, 'Argument $modeRGB overflow: C type GLenum is required');
        assert($modeAlpha >= 0 && $modeAlpha <= 4_294_967_295, 'Argument $modeAlpha overflow: C type GLenum is required');

        $proc = self::getProc('glBlendEquationSeparate', 'void (*)(GLenum modeRGB, GLenum modeAlpha)');
        $proc($modeRGB, $modeAlpha);
    }

    /**
     * Defines an array of buffers into which fragment color values or fragment data will be written. If no fragment
     * shader is active, rendering operations will generate only one fragment color per fragment and it will be
     * written into each of the buffers specified by *`bufs`*. If a fragment shader is active and it writes a value
     * to the output variable `gl_FragColor`, then that value will be written into each of the buffers specified by
     * *`bufs`*. If a fragment shader is active and it writes a value to one or more elements of the output array
     * variable `gl_FragData[]`, then the value of `gl_FragData[0] ` will be written into the first buffer specified
     * by *`bufs`*, the value of `gl_FragData[1] ` will be written into the second buffer specified by *`bufs`*, and
     * so on up to `gl_FragData[n-1]`. The draw buffer used for `gl_FragData[n]` and beyond is implicitly set to be
     * `GL_NONE`.
     *
     * The symbolic constants contained in *`bufs`* may be any of the following:
     *
     *  - `GL_NONE`The fragment color/data value is not written into any color buffer.
     *
     *  - `GL_FRONT_LEFT`The fragment color/data value is written into the front left color buffer.
     *
     *  - `GL_FRONT_RIGHT`The fragment color/data value is written into the front right color buffer.
     *
     *  - `GL_BACK_LEFT`The fragment color/data value is written into the back left color buffer.
     *
     *  - `GL_BACK_RIGHT`The fragment color/data value is written into the back right color buffer.
     *
     *  - `GL_AUXi`The fragment color/data value is written into auxiliary buffer `i`.
     *
     * Except for `GL_NONE`, the preceding symbolic constants may not appear more than once in *`bufs`*. The maximum
     * number of draw buffers supported is implementation dependent and can be queried by calling {@see glGet} with
     * the argument `GL_MAX_DRAW_BUFFERS`. The number of auxiliary buffers can be queried by calling {@see glGet}
     * with the argument `GL_AUX_BUFFERS`.
     *
     * @see http://docs.gl/gl2/glDrawBuffers
     * @see http://docs.gl/gl3/glDrawBuffers
     * @see http://docs.gl/gl4/glDrawBuffers
     * @since 2.0
     * @param int $n
     * @param \FFI\CData|\FFI\CIntPtr|null $bufs
     * @return void
     */
    public static function glDrawBuffers(int $n, ?\FFI\CData $bufs): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($n >= \PHP_INT_MIN && $n <= \PHP_INT_MAX, 'Argument $n overflow: C type GLsizei is required');

        $proc = self::getProc('glDrawBuffers', 'void (*)(GLsizei n, const GLenum *bufs)');
        $proc($n, $bufs);
    }

    /**
     * Stenciling, like depth-buffering, enables and disables drawing on a per-pixel basis. You draw into the stencil
     * planes using GL drawing primitives, then render geometry and images, using the stencil planes to mask out
     * portions of the screen. Stenciling is typically used in multipass rendering algorithms to achieve special
     * effects, such as decals, outlining, and constructive solid geometry rendering.
     *
     * The stencil test conditionally eliminates a pixel based on the outcome of a comparison between the value in
     * the stencil buffer and a reference value. To enable and disable the test, call {@see glEnable} and
     * {@see glDisable} with argument `GL_STENCIL_TEST`; to control it, call {@see glStencilFunc} or
     * {@see glStencilFuncSeparate}.
     *
     * There can be two separate sets of *`sfail`*, *`dpfail`*, and *`dppass`* parameters; one affects back-facing
     * polygons, and the other affects front-facing polygons as well as other non-polygon primitives.
     * {@see glStencilOp} sets both front and back stencil state to the same values, as if
     * {@see glStencilOpSeparate} were called with *`face`* set to `GL_FRONT_AND_BACK`.
     *
     *  - `glStencilOpSeparate` takes three arguments that indicate what happens to the stored stencil value while
     * stenciling is enabled. If the stencil test fails, no change is made to the pixel's color or depth buffers, and
     * *`sfail`* specifies what happens to the stencil buffer contents. The following eight actions are possible.
     *
     *  - `GL_KEEP` Keeps the current value.
     *
     *  - `GL_ZERO` Sets the stencil buffer value to 0.
     *
     *  - `GL_REPLACE` Sets the stencil buffer value to *ref*, as specified by {@see glStencilFunc}.
     *
     *  - `GL_INCR` Increments the current stencil buffer value. Clamps to the maximum representable unsigned value.
     *
     *  - `GL_INCR_WRAP` Increments the current stencil buffer value. Wraps stencil buffer value to zero when
     * incrementing the maximum representable unsigned value.
     *
     *  - `GL_DECR` Decrements the current stencil buffer value. Clamps to 0.
     *
     *  - `GL_DECR_WRAP` Decrements the current stencil buffer value. Wraps stencil buffer value to the maximum
     * representable unsigned value when decrementing a stencil buffer value of zero.
     *
     *  - `GL_INVERT` Bitwise inverts the current stencil buffer value.
     *
     * Stencil buffer values are treated as unsigned integers. When incremented and decremented, values are clamped
     * to 0 and 2 n - 1 , where n is the value returned by querying `GL_STENCIL_BITS`.
     *
     * The other two arguments to `glStencilOpSeparate` specify stencil buffer actions that depend on whether
     * subsequent depth buffer tests succeed (*`dppass`*) or fail (*`dpfail`*) (see {@see glDepthFunc}). The
     * actions are specified using the same eight symbolic constants as *`sfail`*. Note that *`dpfail`* is ignored
     * when there is no depth buffer, or when the depth buffer is not enabled. In these cases, *`sfail`* and
     * *`dppass`* specify stencil action when the stencil test fails and passes, respectively.
     *
     * @see http://docs.gl/gl2/glStencilOpSeparate
     * @see http://docs.gl/gl3/glStencilOpSeparate
     * @see http://docs.gl/gl4/glStencilOpSeparate
     * @since 2.0
     * @param int $face
     * @param int $sfail
     * @param int $dpfail
     * @param int $dppass
     * @return void
     */
    public static function glStencilOpSeparate(int $face, int $sfail, int $dpfail, int $dppass): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($face >= 0 && $face <= 4_294_967_295, 'Argument $face overflow: C type GLenum is required');
        assert($sfail >= 0 && $sfail <= 4_294_967_295, 'Argument $sfail overflow: C type GLenum is required');
        assert($dpfail >= 0 && $dpfail <= 4_294_967_295, 'Argument $dpfail overflow: C type GLenum is required');
        assert($dppass >= 0 && $dppass <= 4_294_967_295, 'Argument $dppass overflow: C type GLenum is required');

        $proc = self::getProc('glStencilOpSeparate', 'void (*)(GLenum face, GLenum sfail, GLenum dpfail, GLenum dppass)');
        $proc($face, $sfail, $dpfail, $dppass);
    }

    /**
     * Stenciling, like depth-buffering, enables and disables drawing on a per-pixel basis. You draw into the stencil
     * planes using GL drawing primitives, then render geometry and images, using the stencil planes to mask out
     * portions of the screen. Stenciling is typically used in multipass rendering algorithms to achieve special
     * effects, such as decals, outlining, and constructive solid geometry rendering.
     *
     * The stencil test conditionally eliminates a pixel based on the outcome of a comparison between the reference
     * value and the value in the stencil buffer. To enable and disable the test, call {@see glEnable} and
     * {@see glDisable} with argument `GL_STENCIL_TEST`. To specify actions based on the outcome of the stencil
     * test, call {@see glStencilOp} or {@see glStencilOpSeparate}.
     *
     * There can be two separate sets of *`func`*, *`ref`*, and *`mask`* parameters; one affects back-facing
     * polygons, and the other affects front-facing polygons as well as other non-polygon primitives.
     * {@see glStencilFunc} sets both front and back stencil state to the same values, as if
     * {@see glStencilFuncSeparate} were called with *`face`* set to `GL_FRONT_AND_BACK`.
     *
     * *`func`* is a symbolic constant that determines the stencil comparison function. It accepts one of eight
     * values, shown in the following list. *`ref`* is an integer reference value that is used in the stencil
     * comparison. It is clamped to the range 0 2 n - 1 , where n is the number of bitplanes in the stencil buffer.
     * *`mask`* is bitwise ANDed with both the reference value and the stored stencil value, with the ANDed values
     * participating in the comparison.
     *
     * If *stencil* represents the value stored in the corresponding stencil buffer location, the following list
     * shows the effect of each comparison function that can be specified by *`func`*. Only if the comparison
     * succeeds is the pixel passed through to the next stage in the rasterization process (see
     * {@see glStencilOp}). All tests treat *stencil* values as unsigned integers in the range 0 2 n - 1 ,
     * where n is the number of bitplanes in the stencil buffer.
     *
     * The following values are accepted by *`func`*:
     *
     *  - `GL_NEVER` Always fails.
     *
     *  - `GL_LESS` Passes if ( *`ref`* &amp; *`mask`* ) &lt; ( *stencil* &amp; *`mask`* ).
     *
     *  - `GL_LEQUAL` Passes if ( *`ref`* &amp; *`mask`* ) &lt;= ( *stencil* &amp; *`mask`* ).
     *
     *  - `GL_GREATER` Passes if ( *`ref`* &amp; *`mask`* ) &gt; ( *stencil* &amp; *`mask`* ).
     *
     *  - `GL_GEQUAL` Passes if ( *`ref`* &amp; *`mask`* ) &gt;= ( *stencil* &amp; *`mask`* ).
     *
     *  - `GL_EQUAL` Passes if ( *`ref`* &amp; *`mask`* ) = ( *stencil* &amp; *`mask`* ).
     *
     *  - `GL_NOTEQUAL` Passes if ( *`ref`* &amp; *`mask`* ) != ( *stencil* &amp; *`mask`* ).
     *
     *  - `GL_ALWAYS` Always passes.
     *
     * @see http://docs.gl/gl2/glStencilFuncSeparate
     * @see http://docs.gl/gl3/glStencilFuncSeparate
     * @see http://docs.gl/gl4/glStencilFuncSeparate
     * @since 2.0
     * @param int $face
     * @param int $func
     * @param int $ref
     * @param int $mask
     * @return void
     */
    public static function glStencilFuncSeparate(int $face, int $func, int $ref, int $mask): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($face >= 0 && $face <= 4_294_967_295, 'Argument $face overflow: C type GLenum is required');
        assert($func >= 0 && $func <= 4_294_967_295, 'Argument $func overflow: C type GLenum is required');
        assert($ref >= \PHP_INT_MIN && $ref <= \PHP_INT_MAX, 'Argument $ref overflow: C type GLint is required');
        assert($mask >= 0 && $mask <= 4_294_967_295, 'Argument $mask overflow: C type GLuint is required');

        $proc = self::getProc('glStencilFuncSeparate', 'void (*)(GLenum face, GLenum func, GLint ref, GLuint mask)');
        $proc($face, $func, $ref, $mask);
    }

    /**
     * Controls the writing of individual bits in the stencil planes. The least significant n bits of *`mask`*, where
     * n is the number of bits in the stencil buffer, specify a mask. Where a 1 appears in the mask, it's possible to
     * write to the corresponding bit in the stencil buffer. Where a 0 appears, the corresponding bit is
     * write-protected. Initially, all bits are enabled for writing.
     *
     * There can be two separate *`mask`* writemasks; one affects back-facing polygons, and the other affects
     * front-facing polygons as well as other non-polygon primitives. {@see glStencilMask} sets both front
     * and back stencil writemasks to the same values, as if {@see glStencilMaskSeparate} were
     * called with *`face`* set to `GL_FRONT_AND_BACK`.
     *
     * @see http://docs.gl/gl2/glStencilMaskSeparate
     * @see http://docs.gl/gl3/glStencilMaskSeparate
     * @see http://docs.gl/gl4/glStencilMaskSeparate
     * @since 2.0
     * @param int $face
     * @param int $mask
     * @return void
     */
    public static function glStencilMaskSeparate(int $face, int $mask): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($face >= 0 && $face <= 4_294_967_295, 'Argument $face overflow: C type GLenum is required');
        assert($mask >= 0 && $mask <= 4_294_967_295, 'Argument $mask overflow: C type GLuint is required');

        $proc = self::getProc('glStencilMaskSeparate', 'void (*)(GLenum face, GLuint mask)');
        $proc($face, $mask);
    }

    /**
     * In order to create an executable, there must be a way to specify the list of things that will be linked
     * together. Program objects provide this mechanism. Shaders that are to be linked together in a program object
     * must first be attached to that program object. `glAttachShader` attaches the shader object specified by
     * *`shader`* to the program object specified by *`program`*. This indicates that *`shader`* will be included in
     * link operations that will be performed on *`program`*.
     *
     * All operations that can be performed on a shader object are valid whether or not the shader object is attached
     * to a program object. It is permissible to attach a shader object to a program object before source code has
     * been loaded into the shader object or before the shader object has been compiled. It is permissible to attach
     * multiple shader objects of the same type because each may contain a portion of the complete shader. It is also
     * permissible to attach a shader object to more than one program object. If a shader object is deleted while it
     * is attached to a program object, it will be flagged for deletion, and deletion will not occur until
     * {@see glDetachShader} is called to detach it from all program objects to which it is attached.
     *
     * @see http://docs.gl/gl2/glAttachShader
     * @see http://docs.gl/gl3/glAttachShader
     * @see http://docs.gl/gl4/glAttachShader
     * @since 2.0
     * @param int $program
     * @param int $shader
     * @return void
     */
    public static function glAttachShader(int $program, int $shader): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($shader >= 0 && $shader <= 4_294_967_295, 'Argument $shader overflow: C type GLuint is required');

        $proc = self::getProc('glAttachShader', 'void (*)(GLuint program, GLuint shader)');
        $proc($program, $shader);
    }

    /**
     * Is used to associate a user-defined attribute variable in the program object specified by *`program`* with a
     * generic vertex attribute index. The name of the user-defined attribute variable is passed as a null terminated
     * string in *`name`*. The generic vertex attribute index to be bound to this variable is specified by *`index`*.
     * When *`program`* is made part of current state, values provided via the generic vertex attribute *`index`*
     * will modify the value of the user-defined attribute variable specified by *`name`*.
     *
     * If *`name`* refers to a matrix attribute variable, *`index`* refers to the first column of the matrix. Other
     * matrix columns are then automatically bound to locations *`index+1`* for a matrix of type mat2; *`index+1`*
     * and *`index+2`* for a matrix of type mat3; and *`index+1`*, *`index+2`*, and *`index+3`* for a matrix of type
     * mat4.
     *
     * This command makes it possible for vertex shaders to use descriptive names for attribute variables rather than
     * generic variables that are numbered from 0 to `GL_MAX_VERTEX_ATTRIBS` -1. The values sent to each generic
     * attribute index are part of current state, just like standard vertex attributes such as color, normal, and
     * vertex position. If a different program object is made current by calling {@see glUseProgram}, the
     * generic vertex attributes are tracked in such a way that the same values will be observed by attributes in the
     * new program object that are also bound to *`index`*.
     *
     * Attribute variable name-to-generic attribute index bindings for a program object can be explicitly assigned at
     * any time by calling `glBindAttribLocation`. Attribute bindings do not go into effect until
     * {@see glLinkProgram} is called. After a program object has been linked successfully, the index
     * values for generic attributes remain fixed (and their values can be queried) until the next link command
     * occurs.
     *
     * Applications are not allowed to bind any of the standard OpenGL vertex attributes using this command, as they
     * are bound automatically when needed. Any attribute binding that occurs after the program object has been
     * linked will not take effect until the next time the program object is linked.
     *
     * @see http://docs.gl/gl2/glBindAttribLocation
     * @see http://docs.gl/gl3/glBindAttribLocation
     * @see http://docs.gl/gl4/glBindAttribLocation
     * @since 2.0
     * @param int $program
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $name
     * @return void
     */
    public static function glBindAttribLocation(int $program, int $index, ?\FFI\CData $name): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glBindAttribLocation', 'void (*)(GLuint program, GLuint index, const GLchar *name)');
        $proc($program, $index, $name);
    }

    /**
     * Compiles the source code strings that have been stored in the shader object specified by *`shader`*.
     *
     * The compilation status will be stored as part of the shader object's state. This value will be set to
     * `GL_TRUE` if the shader was compiled without errors and is ready for use, and `GL_FALSE` otherwise. It can be
     * queried by calling {@see glGetShader} with arguments *`shader`* and `GL_COMPILE_STATUS`.
     *
     * Compilation of a shader can fail for a number of reasons as specified by the OpenGL Shading Language
     * Specification. Whether or not the compilation was successful, information about the compilation can be
     * obtained from the shader object's information log by calling {@see glGetShaderInfoLog}.
     *
     * @see http://docs.gl/gl2/glCompileShader
     * @see http://docs.gl/gl3/glCompileShader
     * @see http://docs.gl/gl4/glCompileShader
     * @since 2.0
     * @param int $shader
     * @return void
     */
    public static function glCompileShader(int $shader): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($shader >= 0 && $shader <= 4_294_967_295, 'Argument $shader overflow: C type GLuint is required');

        $proc = self::getProc('glCompileShader', 'void (*)(GLuint shader)');
        $proc($shader);
    }

    /**
     * Creates an empty program object and returns a non-zero value by which it can be referenced. A program object
     * is an object to which shader objects can be attached. This provides a mechanism to specify the shader objects
     * that will be linked to create a program. It also provides a means for checking the compatibility of the
     * shaders that will be used to create a program (for instance, checking the compatibility between a vertex
     * shader and a fragment shader). When no longer needed as part of a program object, shader objects can be
     * detached.
     *
     * One or more executables are created in a program object by successfully attaching shader objects to it with
     * {@see glAttachShader}, successfully compiling the shader objects with
     * {@see glCompileShader}, and successfully linking the program object with
     * {@see glLinkProgram}. These executables are made part of current state when
     * {@see glUseProgram} is called. Program objects can be deleted by calling
     * {@see glDeleteProgram}. The memory associated with the program object will be deleted when it is
     * no longer part of current rendering state for any context.
     *
     * @see http://docs.gl/gl2/glCreateProgram
     * @see http://docs.gl/gl3/glCreateProgram
     * @see http://docs.gl/gl4/glCreateProgram
     * @since 2.0
     * @return int
     */
    public static function glCreateProgram(): int
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');

        $proc = self::getProc('glCreateProgram', 'GLuint (*)(void)');
        return $proc();
    }

    /**
     * Creates an empty shader object and returns a non-zero value by which it can be referenced. A shader object is
     * used to maintain the source code strings that define a shader. *`shaderType`* indicates the type of shader to
     * be created. Two types of shaders are supported. A shader of type `GL_VERTEX_SHADER` is a shader that is
     * intended to run on the programmable vertex processor and replace the fixed functionality vertex processing in
     * OpenGL. A shader of type `GL_FRAGMENT_SHADER` is a shader that is intended to run on the programmable fragment
     * processor and replace the fixed functionality fragment processing in OpenGL.
     *
     * When created, a shader object's `GL_SHADER_TYPE` parameter is set to either `GL_VERTEX_SHADER` or
     * `GL_FRAGMENT_SHADER`, depending on the value of *`shaderType`*.
     *
     * @see http://docs.gl/gl2/glCreateShader
     * @see http://docs.gl/gl3/glCreateShader
     * @see http://docs.gl/gl4/glCreateShader
     * @since 2.0
     * @param int $type
     * @return int
     */
    public static function glCreateShader(int $type): int
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');

        $proc = self::getProc('glCreateShader', 'GLuint (*)(GLenum type)');
        return $proc($type);
    }

    /**
     * Frees the memory and invalidates the name associated with the program object specified by *`program.`* This
     * command effectively undoes the effects of a call to {@see glCreateProgram}.
     *
     * If a program object is in use as part of current rendering state, it will be flagged for deletion, but it will
     * not be deleted until it is no longer part of current state for any rendering context. If a program object to
     * be deleted has shader objects attached to it, those shader objects will be automatically detached but not
     * deleted unless they have already been flagged for deletion by a previous call to
     * {@see glDeleteShader}. A value of 0 for *`program`* will be silently ignored.
     *
     * To determine whether a program object has been flagged for deletion, call {@see glGetProgram} with
     * arguments *`program`* and `GL_DELETE_STATUS`.
     *
     * @see http://docs.gl/gl2/glDeleteProgram
     * @see http://docs.gl/gl3/glDeleteProgram
     * @see http://docs.gl/gl4/glDeleteProgram
     * @since 2.0
     * @param int $program
     * @return void
     */
    public static function glDeleteProgram(int $program): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');

        $proc = self::getProc('glDeleteProgram', 'void (*)(GLuint program)');
        $proc($program);
    }

    /**
     * Frees the memory and invalidates the name associated with the shader object specified by *`shader`*. This
     * command effectively undoes the effects of a call to {@see glCreateShader}.
     *
     * If a shader object to be deleted is attached to a program object, it will be flagged for deletion, but it will
     * not be deleted until it is no longer attached to any program object, for any rendering context (i.e., it must
     * be detached from wherever it was attached before it will be deleted). A value of 0 for *`shader`* will be
     * silently ignored.
     *
     * To determine whether an object has been flagged for deletion, call {@see glGetShader} with arguments
     * *`shader`* and `GL_DELETE_STATUS`.
     *
     * @see http://docs.gl/gl2/glDeleteShader
     * @see http://docs.gl/gl3/glDeleteShader
     * @see http://docs.gl/gl4/glDeleteShader
     * @since 2.0
     * @param int $shader
     * @return void
     */
    public static function glDeleteShader(int $shader): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($shader >= 0 && $shader <= 4_294_967_295, 'Argument $shader overflow: C type GLuint is required');

        $proc = self::getProc('glDeleteShader', 'void (*)(GLuint shader)');
        $proc($shader);
    }

    /**
     * Detaches the shader object specified by *`shader`* from the program object specified by *`program`*. This
     * command can be used to undo the effect of the command {@see glAttachShader}.
     *
     * If *`shader`* has already been flagged for deletion by a call to {@see glDeleteShader} and it is
     * not attached to any other program object, it will be deleted after it has been detached.
     *
     * @see http://docs.gl/gl2/glDetachShader
     * @see http://docs.gl/gl3/glDetachShader
     * @see http://docs.gl/gl4/glDetachShader
     * @since 2.0
     * @param int $program
     * @param int $shader
     * @return void
     */
    public static function glDetachShader(int $program, int $shader): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($shader >= 0 && $shader <= 4_294_967_295, 'Argument $shader overflow: C type GLuint is required');

        $proc = self::getProc('glDetachShader', 'void (*)(GLuint program, GLuint shader)');
        $proc($program, $shader);
    }

    /**
     * @see http://docs.gl/gl2/glDisableVertexAttribArray
     * @see http://docs.gl/gl3/glDisableVertexAttribArray
     * @see http://docs.gl/gl4/glDisableVertexAttribArray
     * @since 2.0
     * @param int $index
     * @return void
     */
    public static function glDisableVertexAttribArray(int $index): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glDisableVertexAttribArray', 'void (*)(GLuint index)');
        $proc($index);
    }

    /**
     * Enables the generic vertex attribute array specified by *`index`*. `glDisableVertexAttribArray` disables the
     * generic vertex attribute array specified by *`index`*. By default, all client-side capabilities are disabled,
     * including all generic vertex attribute arrays. If enabled, the values in the generic vertex attribute array
     * will be accessed and used for rendering when calls are made to vertex array commands such as
     * {@see glDrawArrays}, {@see glDrawElements}, {@see glDrawRangeElements},
     * {@see glArrayElement}, {@see glMultiDrawElements}, or
     * {@see glMultiDrawArrays}.
     *
     * @see http://docs.gl/gl2/glEnableVertexAttribArray
     * @see http://docs.gl/gl3/glEnableVertexAttribArray
     * @see http://docs.gl/gl4/glEnableVertexAttribArray
     * @since 2.0
     * @param int $index
     * @return void
     */
    public static function glEnableVertexAttribArray(int $index): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glEnableVertexAttribArray', 'void (*)(GLuint index)');
        $proc($index);
    }

    /**
     * Returns information about an active attribute variable in the program object specified by *`program`*. The
     * number of active attributes can be obtained by calling {@see glGetProgram} with the value
     * `GL_ACTIVE_ATTRIBUTES`. A value of 0 for *`index`* selects the first active attribute variable. Permissible
     * values for *`index`* range from 0 to the number of active attribute variables minus 1.
     *
     * A vertex shader may use either built-in attribute variables, user-defined attribute variables, or both.
     * Built-in attribute variables have a prefix of "gl_" and reference conventional OpenGL vertex attribtes (e.g.,
     * *`gl_Vertex`*, *`gl_Normal`*, etc., see the OpenGL Shading Language specification for a complete list.)
     * User-defined attribute variables have arbitrary names and obtain their values through numbered generic vertex
     * attributes. An attribute variable (either built-in or user-defined) is considered active if it is determined
     * during the link operation that it may be accessed during program execution. Therefore, *`program`* should have
     * previously been the target of a call to {@see glLinkProgram}, but it is not necessary for it to have
     * been linked successfully.
     *
     * The size of the character buffer required to store the longest attribute variable name in *`program`* can be
     * obtained by calling {@see glGetProgram} with the value `GL_ACTIVE_ATTRIBUTE_MAX_LENGTH`. This value
     * should be used to allocate a buffer of sufficient size to store the returned attribute name. The size of this
     * character buffer is passed in *`bufSize`*, and a pointer to this character buffer is passed in *`name`*.
     *
     *  - `glGetActiveAttrib` returns the name of the attribute variable indicated by *`index`*, storing it in the
     * character buffer specified by *`name`*. The string returned will be null terminated. The actual number of
     * characters written into this buffer is returned in *`length`*, and this count does not include the null
     * termination character. If the length of the returned string is not required, a value of `NULL` can be passed
     * in the *`length`* argument.
     *
     * The *`type`* argument will return a pointer to the attribute variable's data type. The symbolic constants
     * `GL_FLOAT`, `GL_FLOAT_VEC2`, `GL_FLOAT_VEC3`, `GL_FLOAT_VEC4`, `GL_FLOAT_MAT2`, `GL_FLOAT_MAT3`,
     * `GL_FLOAT_MAT4`, `GL_FLOAT_MAT2x3`, `GL_FLOAT_MAT2x4`, `GL_FLOAT_MAT3x2`, `GL_FLOAT_MAT3x4`,
     * `GL_FLOAT_MAT4x2`, or `GL_FLOAT_MAT4x3` may be returned. The *`size`* argument will return the size of the
     * attribute, in units of the type returned in *`type`*.
     *
     * The list of active attribute variables may include both built-in attribute variables (which begin with the
     * prefix "gl_") as well as user-defined attribute variable names.
     *
     * This function will return as much information as it can about the specified active attribute variable. If no
     * information is available, *`length`* will be 0, and *`name`* will be an empty string. This situation could
     * occur if this function is called after a link operation that failed. If an error occurs, the return values
     * *`length`*, *`size`*, *`type`*, and *`name`* will be unmodified.
     *
     * @see http://docs.gl/gl2/glGetActiveAttrib
     * @see http://docs.gl/gl3/glGetActiveAttrib
     * @see http://docs.gl/gl4/glGetActiveAttrib
     * @since 2.0
     * @param int $program
     * @param int $index
     * @param int $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @param \FFI\CData|\FFI\CIntPtr|null $size
     * @param \FFI\CData|\FFI\CIntPtr|null $type
     * @param \FFI\CData|\FFI\CIntPtr|null $name
     * @return void
     */
    public static function glGetActiveAttrib(int $program, int $index, int $bufSize, ?\FFI\CData $length, ?\FFI\CData $size, ?\FFI\CData $type, ?\FFI\CData $name): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($bufSize >= \PHP_INT_MIN && $bufSize <= \PHP_INT_MAX, 'Argument $bufSize overflow: C type GLsizei is required');

        $proc = self::getProc('glGetActiveAttrib', 'void (*)(GLuint program, GLuint index, GLsizei bufSize, GLsizei *length, GLint *size, GLenum *type, GLchar *name)');
        $proc($program, $index, $bufSize, $length, $size, $type, $name);
    }

    /**
     * Returns information about an active uniform variable in the program object specified by *`program`*. The
     * number of active uniform variables can be obtained by calling {@see glGetProgram} with the value
     * `GL_ACTIVE_UNIFORMS`. A value of 0 for *`index`* selects the first active uniform variable. Permissible values
     * for *`index`* range from 0 to the number of active uniform variables minus 1.
     *
     * Shaders may use either built-in uniform variables, user-defined uniform variables, or both. Built-in uniform
     * variables have a prefix of "gl_" and reference existing OpenGL state or values derived from such state (e.g.,
     * *`gl_Fog`*, *`gl_ModelViewMatrix`*, etc., see the OpenGL Shading Language specification for a complete list.)
     * User-defined uniform variables have arbitrary names and obtain their values from the application through calls
     * to {@see glUniform}. A uniform variable (either built-in or user-defined) is considered active if it is
     * determined during the link operation that it may be accessed during program execution. Therefore, *`program`*
     * should have previously been the target of a call to {@see glLinkProgram}, but it is not necessary
     * for it to have been linked successfully.
     *
     * The size of the character buffer required to store the longest uniform variable name in *`program`* can be
     * obtained by calling {@see glGetProgram} with the value `GL_ACTIVE_UNIFORM_MAX_LENGTH`. This value
     * should be used to allocate a buffer of sufficient size to store the returned uniform variable name. The size
     * of this character buffer is passed in *`bufSize`*, and a pointer to this character buffer is passed in
     * *`name.`*
     *
     *  - `glGetActiveUniform` returns the name of the uniform variable indicated by *`index`*, storing it in the
     * character buffer specified by *`name`*. The string returned will be null terminated. The actual number of
     * characters written into this buffer is returned in *`length`*, and this count does not include the null
     * termination character. If the length of the returned string is not required, a value of `NULL` can be passed
     * in the *`length`* argument.
     *
     * The *`type`* argument will return a pointer to the uniform variable's data type. The symbolic constants
     * `GL_FLOAT`, `GL_FLOAT_VEC2`, `GL_FLOAT_VEC3`, `GL_FLOAT_VEC4`, `GL_INT`, `GL_INT_VEC2`, `GL_INT_VEC3`,
     * `GL_INT_VEC4`, `GL_BOOL`, `GL_BOOL_VEC2`, `GL_BOOL_VEC3`, `GL_BOOL_VEC4`, `GL_FLOAT_MAT2`, `GL_FLOAT_MAT3`,
     * `GL_FLOAT_MAT4`, `GL_FLOAT_MAT2x3`, `GL_FLOAT_MAT2x4`, `GL_FLOAT_MAT3x2`, `GL_FLOAT_MAT3x4`,
     * `GL_FLOAT_MAT4x2`, `GL_FLOAT_MAT4x3`, `GL_SAMPLER_1D`, `GL_SAMPLER_2D`, `GL_SAMPLER_3D`, `GL_SAMPLER_CUBE`,
     * `GL_SAMPLER_1D_SHADOW`, or `GL_SAMPLER_2D_SHADOW` may be returned.
     *
     * If one or more elements of an array are active, the name of the array is returned in *`name`*, the type is
     * returned in *`type`*, and the *`size`* parameter returns the highest array element index used, plus one, as
     * determined by the compiler and/or linker. Only one active uniform variable will be reported for a uniform
     * array.
     *
     * Uniform variables that are declared as structures or arrays of structures will not be returned directly by
     * this function. Instead, each of these uniform variables will be reduced to its fundamental components
     * containing the "." and "[]" operators such that each of the names is valid as an argument to
     * {@see glGetUniformLocation}. Each of these reduced uniform variables is counted as one active
     * uniform variable and is assigned an index. A valid name cannot be a structure, an array of structures, or a
     * subcomponent of a vector or matrix.
     *
     * The size of the uniform variable will be returned in *`size`*. Uniform variables other than arrays will have a
     * size of 1. Structures and arrays of structures will be reduced as described earlier, such that each of the
     * names returned will be a data type in the earlier list. If this reduction results in an array, the size
     * returned will be as described for uniform arrays; otherwise, the size returned will be 1.
     *
     * The list of active uniform variables may include both built-in uniform variables (which begin with the prefix
     * "gl_") as well as user-defined uniform variable names.
     *
     * This function will return as much information as it can about the specified active uniform variable. If no
     * information is available, *`length`* will be 0, and *`name`* will be an empty string. This situation could
     * occur if this function is called after a link operation that failed. If an error occurs, the return values
     * *`length`*, *`size`*, *`type`*, and *`name`* will be unmodified.
     *
     * @see http://docs.gl/gl2/glGetActiveUniform
     * @see http://docs.gl/gl3/glGetActiveUniform
     * @see http://docs.gl/gl4/glGetActiveUniform
     * @since 2.0
     * @param int $program
     * @param int $index
     * @param int $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @param \FFI\CData|\FFI\CIntPtr|null $size
     * @param \FFI\CData|\FFI\CIntPtr|null $type
     * @param \FFI\CData|\FFI\CIntPtr|null $name
     * @return void
     */
    public static function glGetActiveUniform(int $program, int $index, int $bufSize, ?\FFI\CData $length, ?\FFI\CData $size, ?\FFI\CData $type, ?\FFI\CData $name): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($bufSize >= \PHP_INT_MIN && $bufSize <= \PHP_INT_MAX, 'Argument $bufSize overflow: C type GLsizei is required');

        $proc = self::getProc('glGetActiveUniform', 'void (*)(GLuint program, GLuint index, GLsizei bufSize, GLsizei *length, GLint *size, GLenum *type, GLchar *name)');
        $proc($program, $index, $bufSize, $length, $size, $type, $name);
    }

    /**
     * Returns the names of the shader objects attached to *`program`*. The names of shader objects that are attached
     * to *`program`* will be returned in *`shaders.`* The actual number of shader names written into *`shaders`* is
     * returned in *`count.`* If no shader objects are attached to *`program`*, *`count`* is set to 0. The maximum
     * number of shader names that may be returned in *`shaders`* is specified by *`maxCount`*.
     *
     * If the number of names actually returned is not required (for instance, if it has just been obtained by
     * calling {@see glGetProgram}), a value of `NULL` may be passed for count. If no shader objects are
     * attached to *`program`*, a value of 0 will be returned in *`count`*. The actual number of attached shaders can
     * be obtained by calling {@see glGetProgram} with the value `GL_ATTACHED_SHADERS`.
     *
     * @see http://docs.gl/gl2/glGetAttachedShaders
     * @see http://docs.gl/gl3/glGetAttachedShaders
     * @see http://docs.gl/gl4/glGetAttachedShaders
     * @since 2.0
     * @param int $program
     * @param int $maxCount
     * @param \FFI\CData|\FFI\CIntPtr|null $count
     * @param \FFI\CData|\FFI\CIntPtr|null $shaders
     * @return void
     */
    public static function glGetAttachedShaders(int $program, int $maxCount, ?\FFI\CData $count, ?\FFI\CData $shaders): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($maxCount >= \PHP_INT_MIN && $maxCount <= \PHP_INT_MAX, 'Argument $maxCount overflow: C type GLsizei is required');

        $proc = self::getProc('glGetAttachedShaders', 'void (*)(GLuint program, GLsizei maxCount, GLsizei *count, GLuint *shaders)');
        $proc($program, $maxCount, $count, $shaders);
    }

    /**
     * Queries the previously linked program object specified by *`program`* for the attribute variable specified by
     * *`name`* and returns the index of the generic vertex attribute that is bound to that attribute variable. If
     * *`name`* is a matrix attribute variable, the index of the first column of the matrix is returned. If the named
     * attribute variable is not an active attribute in the specified program object or if *`name`* starts with the
     * reserved prefix "gl_", a value of -1 is returned.
     *
     * The association between an attribute variable name and a generic attribute index can be specified at any time
     * by calling {@see glBindAttribLocation}. Attribute bindings do not go into effect until
     * {@see glLinkProgram} is called. After a program object has been linked successfully, the index
     * values for attribute variables remain fixed until the next link command occurs. The attribute values can only
     * be queried after a link if the link was successful. `glGetAttribLocation` returns the binding that actually
     * went into effect the last time {@see glLinkProgram} was called for the specified program object.
     * Attribute bindings that have been specified since the last link operation are not returned by
     * `glGetAttribLocation`.
     *
     * @see http://docs.gl/gl2/glGetAttribLocation
     * @see http://docs.gl/gl3/glGetAttribLocation
     * @see http://docs.gl/gl4/glGetAttribLocation
     * @since 2.0
     * @param int $program
     * @param \FFI\CData|\FFI\CIntPtr|null $name
     * @return int
     */
    public static function glGetAttribLocation(int $program, ?\FFI\CData $name): int
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');

        $proc = self::getProc('glGetAttribLocation', 'GLint (*)(GLuint program, const GLchar *name)');
        return $proc($program, $name);
    }

    /**
     * @since 2.0
     * @param int $program
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetProgramiv(int $program, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetProgramiv', 'void (*)(GLuint program, GLenum pname, GLint *params)');
        $proc($program, $pname, $params);
    }

    /**
     * Returns the information log for the specified program object. The information log for a program object is
     * modified when the program object is linked or validated. The string that is returned will be null terminated.
     *
     *  - `glGetProgramInfoLog` returns in *`infoLog`* as much of the information log as it can, up to a maximum of
     * *`maxLength`* characters. The number of characters actually returned, excluding the null termination
     * character, is specified by *`length`*. If the length of the returned string is not required, a value of `NULL`
     * can be passed in the *`length`* argument. The size of the buffer required to store the returned information
     * log can be obtained by calling {@see glGetProgram} with the value `GL_INFO_LOG_LENGTH`.
     *
     * The information log for a program object is either an empty string, or a string containing information about
     * the last link operation, or a string containing information about the last validation operation. It may
     * contain diagnostic messages, warning messages, and other information. When a program object is created, its
     * information log will be a string of length 0.
     *
     * @see http://docs.gl/gl2/glGetProgramInfoLog
     * @see http://docs.gl/gl3/glGetProgramInfoLog
     * @see http://docs.gl/gl4/glGetProgramInfoLog
     * @since 2.0
     * @param int $program
     * @param int $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @param \FFI\CData|\FFI\CIntPtr|null $infoLog
     * @return void
     */
    public static function glGetProgramInfoLog(int $program, int $bufSize, ?\FFI\CData $length, ?\FFI\CData $infoLog): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($bufSize >= \PHP_INT_MIN && $bufSize <= \PHP_INT_MAX, 'Argument $bufSize overflow: C type GLsizei is required');

        $proc = self::getProc('glGetProgramInfoLog', 'void (*)(GLuint program, GLsizei bufSize, GLsizei *length, GLchar *infoLog)');
        $proc($program, $bufSize, $length, $infoLog);
    }

    /**
     * @since 2.0
     * @param int $shader
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetShaderiv(int $shader, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($shader >= 0 && $shader <= 4_294_967_295, 'Argument $shader overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetShaderiv', 'void (*)(GLuint shader, GLenum pname, GLint *params)');
        $proc($shader, $pname, $params);
    }

    /**
     * Returns the information log for the specified shader object. The information log for a shader object is
     * modified when the shader is compiled. The string that is returned will be null terminated.
     *
     *  - `glGetShaderInfoLog` returns in *`infoLog`* as much of the information log as it can, up to a maximum of
     * *`maxLength`* characters. The number of characters actually returned, excluding the null termination
     * character, is specified by *`length`*. If the length of the returned string is not required, a value of `NULL`
     * can be passed in the *`length`* argument. The size of the buffer required to store the returned information
     * log can be obtained by calling {@see glGetShader} with the value `GL_INFO_LOG_LENGTH`.
     *
     * The information log for a shader object is a string that may contain diagnostic messages, warning messages,
     * and other information about the last compile operation. When a shader object is created, its information log
     * will be a string of length 0.
     *
     * @see http://docs.gl/gl2/glGetShaderInfoLog
     * @see http://docs.gl/gl3/glGetShaderInfoLog
     * @see http://docs.gl/gl4/glGetShaderInfoLog
     * @since 2.0
     * @param int $shader
     * @param int $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @param \FFI\CData|\FFI\CIntPtr|null $infoLog
     * @return void
     */
    public static function glGetShaderInfoLog(int $shader, int $bufSize, ?\FFI\CData $length, ?\FFI\CData $infoLog): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($shader >= 0 && $shader <= 4_294_967_295, 'Argument $shader overflow: C type GLuint is required');
        assert($bufSize >= \PHP_INT_MIN && $bufSize <= \PHP_INT_MAX, 'Argument $bufSize overflow: C type GLsizei is required');

        $proc = self::getProc('glGetShaderInfoLog', 'void (*)(GLuint shader, GLsizei bufSize, GLsizei *length, GLchar *infoLog)');
        $proc($shader, $bufSize, $length, $infoLog);
    }

    /**
     * Returns the concatenation of the source code strings from the shader object specified by *`shader`*. The
     * source code strings for a shader object are the result of a previous call to {@see glShaderSource}.
     * The string returned by the function will be null terminated.
     *
     *  - `glGetShaderSource` returns in *`source`* as much of the source code string as it can, up to a maximum of
     * *`bufSize`* characters. The number of characters actually returned, excluding the null termination character,
     * is specified by *`length`*. If the length of the returned string is not required, a value of `NULL` can be
     * passed in the *`length`* argument. The size of the buffer required to store the returned source code string
     * can be obtained by calling {@see glGetShader} with the value `GL_SHADER_SOURCE_LENGTH`.
     *
     * @see http://docs.gl/gl2/glGetShaderSource
     * @see http://docs.gl/gl3/glGetShaderSource
     * @see http://docs.gl/gl4/glGetShaderSource
     * @since 2.0
     * @param int $shader
     * @param int $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @param \FFI\CData|\FFI\CIntPtr|null $source
     * @return void
     */
    public static function glGetShaderSource(int $shader, int $bufSize, ?\FFI\CData $length, ?\FFI\CData $source): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($shader >= 0 && $shader <= 4_294_967_295, 'Argument $shader overflow: C type GLuint is required');
        assert($bufSize >= \PHP_INT_MIN && $bufSize <= \PHP_INT_MAX, 'Argument $bufSize overflow: C type GLsizei is required');

        $proc = self::getProc('glGetShaderSource', 'void (*)(GLuint shader, GLsizei bufSize, GLsizei *length, GLchar *source)');
        $proc($shader, $bufSize, $length, $source);
    }

    /**
     * - `glGetUniformLocation ` returns an integer that represents the location of a specific uniform variable
     * within a program object. *`name`* must be a null terminated string that contains no white space. *`name`* must
     * be an active uniform variable name in *`program`* that is not a structure, an array of structures, or a
     * subcomponent of a vector or a matrix. This function returns -1 if *`name`* does not correspond to an active
     * uniform variable in *`program`* or if *`name`* starts with the reserved prefix "gl_".
     *
     * Uniform variables that are structures or arrays of structures may be queried by calling `glGetUniformLocation`
     * for each field within the structure. The array element operator "[]" and the structure field operator "." may
     * be used in *`name`* in order to select elements within an array or fields within a structure. The result of
     * using these operators is not allowed to be another structure, an array of structures, or a subcomponent of a
     * vector or a matrix. Except if the last part of *`name`* indicates a uniform variable array, the location of
     * the first element of an array can be retrieved by using the name of the array, or by using the name appended
     * by "[0]".
     *
     * The actual locations assigned to uniform variables are not known until the program object is linked
     * successfully. After linking has occurred, the command `glGetUniformLocation` can be used to obtain the
     * location of a uniform variable. This location value can then be passed to {@see glUniform} to set the
     * value of the uniform variable or to {@see glGetUniform} in order to query the current value of the
     * uniform variable. After a program object has been linked successfully, the index values for uniform variables
     * remain fixed until the next link command occurs. Uniform variable locations and values can only be queried
     * after a link if the link was successful.
     *
     * @see http://docs.gl/gl2/glGetUniformLocation
     * @see http://docs.gl/gl3/glGetUniformLocation
     * @see http://docs.gl/gl4/glGetUniformLocation
     * @since 2.0
     * @param int $program
     * @param \FFI\CData|\FFI\CIntPtr|null $name
     * @return int
     */
    public static function glGetUniformLocation(int $program, ?\FFI\CData $name): int
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');

        $proc = self::getProc('glGetUniformLocation', 'GLint (*)(GLuint program, const GLchar *name)');
        return $proc($program, $name);
    }

    /**
     * @since 2.0
     * @param int $program
     * @param int $location
     * @param \FFI\CData|\FFI\CFloatPtr|null $params
     * @return void
     */
    public static function glGetUniformfv(int $program, int $location, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');

        $proc = self::getProc('glGetUniformfv', 'void (*)(GLuint program, GLint location, GLfloat *params)');
        $proc($program, $location, $params);
    }

    /**
     * @since 2.0
     * @param int $program
     * @param int $location
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetUniformiv(int $program, int $location, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');

        $proc = self::getProc('glGetUniformiv', 'void (*)(GLuint program, GLint location, GLint *params)');
        $proc($program, $location, $params);
    }

    /**
     * @since 2.0
     * @param int $index
     * @param int $pname
     * @param \FFI\CData|\FFI\CFloatPtr|null $params
     * @return void
     */
    public static function glGetVertexAttribdv(int $index, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetVertexAttribdv', 'void (*)(GLuint index, GLenum pname, GLdouble *params)');
        $proc($index, $pname, $params);
    }

    /**
     * @since 2.0
     * @param int $index
     * @param int $pname
     * @param \FFI\CData|\FFI\CFloatPtr|null $params
     * @return void
     */
    public static function glGetVertexAttribfv(int $index, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetVertexAttribfv', 'void (*)(GLuint index, GLenum pname, GLfloat *params)');
        $proc($index, $pname, $params);
    }

    /**
     * @since 2.0
     * @param int $index
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetVertexAttribiv(int $index, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetVertexAttribiv', 'void (*)(GLuint index, GLenum pname, GLint *params)');
        $proc($index, $pname, $params);
    }

    /**
     * Returns pointer information. *`index`* is the generic vertex attribute to be queried, *`pname`* is a symbolic
     * constant indicating the pointer to be returned, and *`params`* is a pointer to a location in which to place
     * the returned data.
     *
     * If a non-zero named buffer object was bound to the `GL_ARRAY_BUFFER` target (see {@see glBindBuffer})
     * when the desired pointer was previously specified, the *`pointer`* returned is a byte offset into the buffer
     * object's data store.
     *
     * @see http://docs.gl/gl2/glGetVertexAttribPointerv
     * @see http://docs.gl/gl3/glGetVertexAttribPointerv
     * @see http://docs.gl/gl4/glGetVertexAttribPointerv
     * @since 2.0
     * @param int $index
     * @param int $pname
     * @param \FFI\CData|\FFI\CPtrPtr|null $pointer
     * @return void
     */
    public static function glGetVertexAttribPointerv(int $index, int $pname, ?\FFI\CData $pointer): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetVertexAttribPointerv', 'void (*)(GLuint index, GLenum pname, void **pointer)');
        $proc($index, $pname, $pointer);
    }

    /**
     * Returns `GL_TRUE` if *`program`* is the name of a program object previously created with
     * {@see glCreateProgram} and not yet deleted with {@see glDeleteProgram}. If *`program`*
     * is zero or a non-zero value that is not the name of a program object, or if an error occurs, `glIsProgram`
     * returns `GL_FALSE`.
     *
     * @see http://docs.gl/gl2/glIsProgram
     * @see http://docs.gl/gl3/glIsProgram
     * @see http://docs.gl/gl4/glIsProgram
     * @since 2.0
     * @param int $program
     * @return int
     */
    public static function glIsProgram(int $program): int
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');

        $proc = self::getProc('glIsProgram', 'GLboolean (*)(GLuint program)');
        return $proc($program);
    }

    /**
     * Returns `GL_TRUE` if *`shader`* is the name of a shader object previously created with
     * {@see glCreateShader} and not yet deleted with {@see glDeleteShader}. If *`shader`* is
     * zero or a non-zero value that is not the name of a shader object, or if an error occurs, `glIsShader ` returns
     * `GL_FALSE`.
     *
     * @see http://docs.gl/gl2/glIsShader
     * @see http://docs.gl/gl3/glIsShader
     * @see http://docs.gl/gl4/glIsShader
     * @since 2.0
     * @param int $shader
     * @return int
     */
    public static function glIsShader(int $shader): int
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($shader >= 0 && $shader <= 4_294_967_295, 'Argument $shader overflow: C type GLuint is required');

        $proc = self::getProc('glIsShader', 'GLboolean (*)(GLuint shader)');
        return $proc($shader);
    }

    /**
     * Links the program object specified by *`program`*. If any shader objects of type `GL_VERTEX_SHADER` are
     * attached to *`program`*, they will be used to create an executable that will run on the programmable vertex
     * processor. If any shader objects of type `GL_FRAGMENT_SHADER` are attached to *`program`*, they will be used
     * to create an executable that will run on the programmable fragment processor.
     *
     * The status of the link operation will be stored as part of the program object's state. This value will be set
     * to `GL_TRUE` if the program object was linked without errors and is ready for use, and `GL_FALSE` otherwise.
     * It can be queried by calling {@see glGetProgram} with arguments *`program`* and `GL_LINK_STATUS`.
     *
     * As a result of a successful link operation, all active user-defined uniform variables belonging to *`program`*
     * will be initialized to 0, and each of the program object's active uniform variables will be assigned a
     * location that can be queried by calling {@see glGetUniformLocation}. Also, any active
     * user-defined attribute variables that have not been bound to a generic vertex attribute index will be bound to
     * one at this time.
     *
     * Linking of a program object can fail for a number of reasons as specified in the *OpenGL Shading Language
     * Specification*. The following lists some of the conditions that will cause a link error.
     *
     * - The number of active attribute variables supported by the implementation has been exceeded.
     * - The storage limit for uniform variables has been exceeded.
     * - The number of active uniform variables supported by the implementation has been exceeded.
     * - The `main` function is missing for the vertex shader or the fragment shader.
     * - A varying variable actually used in the fragment shader is not declared in the same way (or is not declared
     * at all) in the vertex shader.
     * - A reference to a function or variable name is unresolved.
     * - A shared global is declared with two different types or two different initial values.
     * - One or more of the attached shader objects has not been successfully compiled.
     * - Binding a generic attribute matrix caused some rows of the matrix to fall outside the allowed maximum of
     * `GL_MAX_VERTEX_ATTRIBS`.
     * - Not enough contiguous vertex attribute slots could be found to bind attribute matrices.
     *
     * When a program object has been successfully linked, the program object can be made part of current state by
     * calling {@see glUseProgram}. Whether or not the link operation was successful, the program object's
     * information log will be overwritten. The information log can be retrieved by calling
     * {@see glGetProgramInfoLog}.
     *
     *  - `glLinkProgram` will also install the generated executables as part of the current rendering state if the
     * link operation was successful and the specified program object is already currently in use as a result of a
     * previous call to {@see glUseProgram}. If the program object currently in use is relinked
     * unsuccessfully, its link status will be set to `GL_FALSE` , but the executables and associated state will
     * remain part of the current state until a subsequent call to `glUseProgram` removes it from use. After it is
     * removed from use, it cannot be made part of current state until it has been successfully relinked.
     *
     * If *`program`* contains shader objects of type `GL_VERTEX_SHADER` but does not contain shader objects of type
     * `GL_FRAGMENT_SHADER`, the vertex shader will be linked against the implicit interface for fixed functionality
     * fragment processing. Similarly, if *`program`* contains shader objects of type `GL_FRAGMENT_SHADER` but it
     * does not contain shader objects of type `GL_VERTEX_SHADER`, the fragment shader will be linked against the
     * implicit interface for fixed functionality vertex processing.
     *
     * The program object's information log is updated and the program is generated at the time of the link
     * operation. After the link operation, applications are free to modify attached shader objects, compile attached
     * shader objects, detach shader objects, delete shader objects, and attach additional shader objects. None of
     * these operations affects the information log or the program that is part of the program object.
     *
     * @see http://docs.gl/gl2/glLinkProgram
     * @see http://docs.gl/gl3/glLinkProgram
     * @see http://docs.gl/gl4/glLinkProgram
     * @since 2.0
     * @param int $program
     * @return void
     */
    public static function glLinkProgram(int $program): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');

        $proc = self::getProc('glLinkProgram', 'void (*)(GLuint program)');
        $proc($program);
    }

    /**
     * Sets the source code in *`shader`* to the source code in the array of strings specified by *`string`*. Any
     * source code previously stored in the shader object is completely replaced. The number of strings in the array
     * is specified by *`count`*. If *`length`* is `NULL`, each string is assumed to be null terminated. If
     * *`length`* is a value other than `NULL`, it points to an array containing a string length for each of the
     * corresponding elements of *`string`*. Each element in the *`length`* array may contain the length of the
     * corresponding string (the null character is not counted as part of the string length) or a value less than 0
     * to indicate that the string is null terminated. The source code strings are not scanned or parsed at this
     * time; they are simply copied into the specified shader object.
     *
     * @see http://docs.gl/gl2/glShaderSource
     * @see http://docs.gl/gl3/glShaderSource
     * @see http://docs.gl/gl4/glShaderSource
     * @since 2.0
     * @param int $shader
     * @param int $count
     * @param \FFI\CData|\FFI\CIntPtrPtr|null $string
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @return void
     */
    public static function glShaderSource(int $shader, int $count, ?\FFI\CData $string, ?\FFI\CData $length): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($shader >= 0 && $shader <= 4_294_967_295, 'Argument $shader overflow: C type GLuint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glShaderSource', 'void (*)(GLuint shader, GLsizei count, const GLchar *const*string, const GLint *length)');
        $proc($shader, $count, $string, $length);
    }

    /**
     * Installs the program object specified by *`program`* as part of current rendering state. One or more
     * executables are created in a program object by successfully attaching shader objects to it with
     * {@see glAttachShader}, successfully compiling the shader objects with
     * {@see glCompileShader}, and successfully linking the program object with
     * {@see glLinkProgram}.
     *
     * A program object will contain an executable that will run on the vertex processor if it contains one or more
     * shader objects of type `GL_VERTEX_SHADER` that have been successfully compiled and linked. Similarly, a
     * program object will contain an executable that will run on the fragment processor if it contains one or more
     * shader objects of type `GL_FRAGMENT_SHADER` that have been successfully compiled and linked.
     *
     * Successfully installing an executable on a programmable processor will cause the corresponding fixed
     * functionality of OpenGL to be disabled. Specifically, if an executable is installed on the vertex processor,
     * the OpenGL fixed functionality will be disabled as follows.
     *
     * - The modelview matrix is not applied to vertex coordinates.
     * - The projection matrix is not applied to vertex coordinates.
     * - The texture matrices are not applied to texture coordinates.
     * - Normals are not transformed to eye coordinates.
     * - Normals are not rescaled or normalized.
     * - Normalization of `GL_AUTO_NORMAL` evaluated normals is not performed.
     * - Texture coordinates are not generated automatically.
     * - Per-vertex lighting is not performed.
     * - Color material computations are not performed.
     * - Color index lighting is not performed.
     * - This list also applies when setting the current raster position.
     *
     * The executable that is installed on the vertex processor is expected to implement any or all of the desired
     * functionality from the preceding list. Similarly, if an executable is installed on the fragment processor, the
     * OpenGL fixed functionality will be disabled as follows.
     *
     * - Texture environment and texture functions are not applied.
     * - Texture application is not applied.
     * - Color sum is not applied.
     * - Fog is not applied.
     *
     * Again, the fragment shader that is installed is expected to implement any or all of the desired functionality
     * from the preceding list.
     *
     * While a program object is in use, applications are free to modify attached shader objects, compile attached
     * shader objects, attach additional shader objects, and detach or delete shader objects. None of these
     * operations will affect the executables that are part of the current state. However, relinking the program
     * object that is currently in use will install the program object as part of the current rendering state if the
     * link operation was successful (see {@see glLinkProgram} ). If the program object currently in use is
     * relinked unsuccessfully, its link status will be set to `GL_FALSE`, but the executables and associated state
     * will remain part of the current state until a subsequent call to `glUseProgram` removes it from use. After it
     * is removed from use, it cannot be made part of current state until it has been successfully relinked.
     *
     * If *`program`* contains shader objects of type `GL_VERTEX_SHADER` but it does not contain shader objects of
     * type `GL_FRAGMENT_SHADER`, an executable will be installed on the vertex processor, but fixed functionality
     * will be used for fragment processing. Similarly, if *`program`* contains shader objects of type
     * `GL_FRAGMENT_SHADER` but it does not contain shader objects of type `GL_VERTEX_SHADER`, an executable will be
     * installed on the fragment processor, but fixed functionality will be used for vertex processing. If
     * *`program`* is 0, the programmable processors will be disabled, and fixed functionality will be used for both
     * vertex and fragment processing.
     *
     * @see http://docs.gl/gl2/glUseProgram
     * @see http://docs.gl/gl3/glUseProgram
     * @see http://docs.gl/gl4/glUseProgram
     * @since 2.0
     * @param int $program
     * @return void
     */
    public static function glUseProgram(int $program): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');

        $proc = self::getProc('glUseProgram', 'void (*)(GLuint program)');
        $proc($program);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glUniform` operates on the program object that was made part of
     * current state by calling {@see glUseProgram}.
     *
     * The commands `glUniform{1|2|3|4}{f|i}` are used to change the value of the uniform variable specified by
     * *`location`* using the values passed as arguments. The number specified in the command should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The suffix `f` indicates that floating-point values are being passed; the suffix
     * `i` indicates that integer values are being passed, and this type should also match the data type of the
     * specified uniform variable. The `i` variants of this function should be used to provide values for uniform
     * variables defined as int, ivec2, ivec3, ivec4, or arrays of these. The `f` variants should be used to provide
     * values for uniform variables of type float, vec2, vec3, vec4, or arrays of these. Either the `i` or the `f`
     * variants may be used to provide values for uniform variables of type bool, bvec2, bvec3, bvec4, or arrays of
     * these. The uniform variable will be set to false if the input value is 0 or 0.0f, and it will be set to true
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glUniform ` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glUniform{1|2|3|4}{f|i}v` can be used to modify a single uniform variable or a uniform variable
     * array. These commands pass a count and a pointer to the values to be loaded into a uniform variable or a
     * uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable, and a
     * count of 1 or greater can be used to modify an entire array or part of an array. When loading *n* elements
     * starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the array will be
     * replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in *`value`*, and it should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match the data type for the
     * specified uniform variable as described previously for `glUniform{1|2|3|4}{f|i}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glUniform3f` or `glUniform3fv` can be used to load a uniform variable array of type
     * vec3). The number of elements of the uniform variable array to be modified is specified by *`count`*
     *
     * The commands `glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array of
     * matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number `2`
     * indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and the
     * number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with the
     * first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl3/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param float $v0
     * @return void
     */
    public static function glUniform1f(int $location, float $v0): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($v0 >= -3.40282e38 && $v0 <= 3.40282e38, 'Argument $v0 overflow: C type GLfloat is required');

        $proc = self::getProc('glUniform1f', 'void (*)(GLint location, GLfloat v0)');
        $proc($location, $v0);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glUniform` operates on the program object that was made part of
     * current state by calling {@see glUseProgram}.
     *
     * The commands `glUniform{1|2|3|4}{f|i}` are used to change the value of the uniform variable specified by
     * *`location`* using the values passed as arguments. The number specified in the command should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The suffix `f` indicates that floating-point values are being passed; the suffix
     * `i` indicates that integer values are being passed, and this type should also match the data type of the
     * specified uniform variable. The `i` variants of this function should be used to provide values for uniform
     * variables defined as int, ivec2, ivec3, ivec4, or arrays of these. The `f` variants should be used to provide
     * values for uniform variables of type float, vec2, vec3, vec4, or arrays of these. Either the `i` or the `f`
     * variants may be used to provide values for uniform variables of type bool, bvec2, bvec3, bvec4, or arrays of
     * these. The uniform variable will be set to false if the input value is 0 or 0.0f, and it will be set to true
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glUniform ` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glUniform{1|2|3|4}{f|i}v` can be used to modify a single uniform variable or a uniform variable
     * array. These commands pass a count and a pointer to the values to be loaded into a uniform variable or a
     * uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable, and a
     * count of 1 or greater can be used to modify an entire array or part of an array. When loading *n* elements
     * starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the array will be
     * replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in *`value`*, and it should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match the data type for the
     * specified uniform variable as described previously for `glUniform{1|2|3|4}{f|i}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glUniform3f` or `glUniform3fv` can be used to load a uniform variable array of type
     * vec3). The number of elements of the uniform variable array to be modified is specified by *`count`*
     *
     * The commands `glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array of
     * matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number `2`
     * indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and the
     * number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with the
     * first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl3/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param float $v0
     * @param float $v1
     * @return void
     */
    public static function glUniform2f(int $location, float $v0, float $v1): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($v0 >= -3.40282e38 && $v0 <= 3.40282e38, 'Argument $v0 overflow: C type GLfloat is required');
        assert($v1 >= -3.40282e38 && $v1 <= 3.40282e38, 'Argument $v1 overflow: C type GLfloat is required');

        $proc = self::getProc('glUniform2f', 'void (*)(GLint location, GLfloat v0, GLfloat v1)');
        $proc($location, $v0, $v1);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glUniform` operates on the program object that was made part of
     * current state by calling {@see glUseProgram}.
     *
     * The commands `glUniform{1|2|3|4}{f|i}` are used to change the value of the uniform variable specified by
     * *`location`* using the values passed as arguments. The number specified in the command should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The suffix `f` indicates that floating-point values are being passed; the suffix
     * `i` indicates that integer values are being passed, and this type should also match the data type of the
     * specified uniform variable. The `i` variants of this function should be used to provide values for uniform
     * variables defined as int, ivec2, ivec3, ivec4, or arrays of these. The `f` variants should be used to provide
     * values for uniform variables of type float, vec2, vec3, vec4, or arrays of these. Either the `i` or the `f`
     * variants may be used to provide values for uniform variables of type bool, bvec2, bvec3, bvec4, or arrays of
     * these. The uniform variable will be set to false if the input value is 0 or 0.0f, and it will be set to true
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glUniform ` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glUniform{1|2|3|4}{f|i}v` can be used to modify a single uniform variable or a uniform variable
     * array. These commands pass a count and a pointer to the values to be loaded into a uniform variable or a
     * uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable, and a
     * count of 1 or greater can be used to modify an entire array or part of an array. When loading *n* elements
     * starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the array will be
     * replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in *`value`*, and it should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match the data type for the
     * specified uniform variable as described previously for `glUniform{1|2|3|4}{f|i}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glUniform3f` or `glUniform3fv` can be used to load a uniform variable array of type
     * vec3). The number of elements of the uniform variable array to be modified is specified by *`count`*
     *
     * The commands `glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array of
     * matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number `2`
     * indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and the
     * number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with the
     * first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl3/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param float $v0
     * @param float $v1
     * @param float $v2
     * @return void
     */
    public static function glUniform3f(int $location, float $v0, float $v1, float $v2): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($v0 >= -3.40282e38 && $v0 <= 3.40282e38, 'Argument $v0 overflow: C type GLfloat is required');
        assert($v1 >= -3.40282e38 && $v1 <= 3.40282e38, 'Argument $v1 overflow: C type GLfloat is required');
        assert($v2 >= -3.40282e38 && $v2 <= 3.40282e38, 'Argument $v2 overflow: C type GLfloat is required');

        $proc = self::getProc('glUniform3f', 'void (*)(GLint location, GLfloat v0, GLfloat v1, GLfloat v2)');
        $proc($location, $v0, $v1, $v2);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glUniform` operates on the program object that was made part of
     * current state by calling {@see glUseProgram}.
     *
     * The commands `glUniform{1|2|3|4}{f|i}` are used to change the value of the uniform variable specified by
     * *`location`* using the values passed as arguments. The number specified in the command should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The suffix `f` indicates that floating-point values are being passed; the suffix
     * `i` indicates that integer values are being passed, and this type should also match the data type of the
     * specified uniform variable. The `i` variants of this function should be used to provide values for uniform
     * variables defined as int, ivec2, ivec3, ivec4, or arrays of these. The `f` variants should be used to provide
     * values for uniform variables of type float, vec2, vec3, vec4, or arrays of these. Either the `i` or the `f`
     * variants may be used to provide values for uniform variables of type bool, bvec2, bvec3, bvec4, or arrays of
     * these. The uniform variable will be set to false if the input value is 0 or 0.0f, and it will be set to true
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glUniform ` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glUniform{1|2|3|4}{f|i}v` can be used to modify a single uniform variable or a uniform variable
     * array. These commands pass a count and a pointer to the values to be loaded into a uniform variable or a
     * uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable, and a
     * count of 1 or greater can be used to modify an entire array or part of an array. When loading *n* elements
     * starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the array will be
     * replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in *`value`*, and it should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match the data type for the
     * specified uniform variable as described previously for `glUniform{1|2|3|4}{f|i}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glUniform3f` or `glUniform3fv` can be used to load a uniform variable array of type
     * vec3). The number of elements of the uniform variable array to be modified is specified by *`count`*
     *
     * The commands `glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array of
     * matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number `2`
     * indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and the
     * number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with the
     * first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl3/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param float $v0
     * @param float $v1
     * @param float $v2
     * @param float $v3
     * @return void
     */
    public static function glUniform4f(int $location, float $v0, float $v1, float $v2, float $v3): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($v0 >= -3.40282e38 && $v0 <= 3.40282e38, 'Argument $v0 overflow: C type GLfloat is required');
        assert($v1 >= -3.40282e38 && $v1 <= 3.40282e38, 'Argument $v1 overflow: C type GLfloat is required');
        assert($v2 >= -3.40282e38 && $v2 <= 3.40282e38, 'Argument $v2 overflow: C type GLfloat is required');
        assert($v3 >= -3.40282e38 && $v3 <= 3.40282e38, 'Argument $v3 overflow: C type GLfloat is required');

        $proc = self::getProc('glUniform4f', 'void (*)(GLint location, GLfloat v0, GLfloat v1, GLfloat v2, GLfloat v3)');
        $proc($location, $v0, $v1, $v2, $v3);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glUniform` operates on the program object that was made part of
     * current state by calling {@see glUseProgram}.
     *
     * The commands `glUniform{1|2|3|4}{f|i}` are used to change the value of the uniform variable specified by
     * *`location`* using the values passed as arguments. The number specified in the command should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The suffix `f` indicates that floating-point values are being passed; the suffix
     * `i` indicates that integer values are being passed, and this type should also match the data type of the
     * specified uniform variable. The `i` variants of this function should be used to provide values for uniform
     * variables defined as int, ivec2, ivec3, ivec4, or arrays of these. The `f` variants should be used to provide
     * values for uniform variables of type float, vec2, vec3, vec4, or arrays of these. Either the `i` or the `f`
     * variants may be used to provide values for uniform variables of type bool, bvec2, bvec3, bvec4, or arrays of
     * these. The uniform variable will be set to false if the input value is 0 or 0.0f, and it will be set to true
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glUniform ` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glUniform{1|2|3|4}{f|i}v` can be used to modify a single uniform variable or a uniform variable
     * array. These commands pass a count and a pointer to the values to be loaded into a uniform variable or a
     * uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable, and a
     * count of 1 or greater can be used to modify an entire array or part of an array. When loading *n* elements
     * starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the array will be
     * replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in *`value`*, and it should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match the data type for the
     * specified uniform variable as described previously for `glUniform{1|2|3|4}{f|i}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glUniform3f` or `glUniform3fv` can be used to load a uniform variable array of type
     * vec3). The number of elements of the uniform variable array to be modified is specified by *`count`*
     *
     * The commands `glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array of
     * matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number `2`
     * indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and the
     * number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with the
     * first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl3/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param int $v0
     * @return void
     */
    public static function glUniform1i(int $location, int $v0): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($v0 >= \PHP_INT_MIN && $v0 <= \PHP_INT_MAX, 'Argument $v0 overflow: C type GLint is required');

        $proc = self::getProc('glUniform1i', 'void (*)(GLint location, GLint v0)');
        $proc($location, $v0);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glUniform` operates on the program object that was made part of
     * current state by calling {@see glUseProgram}.
     *
     * The commands `glUniform{1|2|3|4}{f|i}` are used to change the value of the uniform variable specified by
     * *`location`* using the values passed as arguments. The number specified in the command should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The suffix `f` indicates that floating-point values are being passed; the suffix
     * `i` indicates that integer values are being passed, and this type should also match the data type of the
     * specified uniform variable. The `i` variants of this function should be used to provide values for uniform
     * variables defined as int, ivec2, ivec3, ivec4, or arrays of these. The `f` variants should be used to provide
     * values for uniform variables of type float, vec2, vec3, vec4, or arrays of these. Either the `i` or the `f`
     * variants may be used to provide values for uniform variables of type bool, bvec2, bvec3, bvec4, or arrays of
     * these. The uniform variable will be set to false if the input value is 0 or 0.0f, and it will be set to true
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glUniform ` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glUniform{1|2|3|4}{f|i}v` can be used to modify a single uniform variable or a uniform variable
     * array. These commands pass a count and a pointer to the values to be loaded into a uniform variable or a
     * uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable, and a
     * count of 1 or greater can be used to modify an entire array or part of an array. When loading *n* elements
     * starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the array will be
     * replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in *`value`*, and it should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match the data type for the
     * specified uniform variable as described previously for `glUniform{1|2|3|4}{f|i}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glUniform3f` or `glUniform3fv` can be used to load a uniform variable array of type
     * vec3). The number of elements of the uniform variable array to be modified is specified by *`count`*
     *
     * The commands `glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array of
     * matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number `2`
     * indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and the
     * number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with the
     * first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl3/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param int $v0
     * @param int $v1
     * @return void
     */
    public static function glUniform2i(int $location, int $v0, int $v1): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($v0 >= \PHP_INT_MIN && $v0 <= \PHP_INT_MAX, 'Argument $v0 overflow: C type GLint is required');
        assert($v1 >= \PHP_INT_MIN && $v1 <= \PHP_INT_MAX, 'Argument $v1 overflow: C type GLint is required');

        $proc = self::getProc('glUniform2i', 'void (*)(GLint location, GLint v0, GLint v1)');
        $proc($location, $v0, $v1);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glUniform` operates on the program object that was made part of
     * current state by calling {@see glUseProgram}.
     *
     * The commands `glUniform{1|2|3|4}{f|i}` are used to change the value of the uniform variable specified by
     * *`location`* using the values passed as arguments. The number specified in the command should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The suffix `f` indicates that floating-point values are being passed; the suffix
     * `i` indicates that integer values are being passed, and this type should also match the data type of the
     * specified uniform variable. The `i` variants of this function should be used to provide values for uniform
     * variables defined as int, ivec2, ivec3, ivec4, or arrays of these. The `f` variants should be used to provide
     * values for uniform variables of type float, vec2, vec3, vec4, or arrays of these. Either the `i` or the `f`
     * variants may be used to provide values for uniform variables of type bool, bvec2, bvec3, bvec4, or arrays of
     * these. The uniform variable will be set to false if the input value is 0 or 0.0f, and it will be set to true
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glUniform ` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glUniform{1|2|3|4}{f|i}v` can be used to modify a single uniform variable or a uniform variable
     * array. These commands pass a count and a pointer to the values to be loaded into a uniform variable or a
     * uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable, and a
     * count of 1 or greater can be used to modify an entire array or part of an array. When loading *n* elements
     * starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the array will be
     * replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in *`value`*, and it should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match the data type for the
     * specified uniform variable as described previously for `glUniform{1|2|3|4}{f|i}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glUniform3f` or `glUniform3fv` can be used to load a uniform variable array of type
     * vec3). The number of elements of the uniform variable array to be modified is specified by *`count`*
     *
     * The commands `glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array of
     * matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number `2`
     * indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and the
     * number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with the
     * first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl3/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param int $v0
     * @param int $v1
     * @param int $v2
     * @return void
     */
    public static function glUniform3i(int $location, int $v0, int $v1, int $v2): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($v0 >= \PHP_INT_MIN && $v0 <= \PHP_INT_MAX, 'Argument $v0 overflow: C type GLint is required');
        assert($v1 >= \PHP_INT_MIN && $v1 <= \PHP_INT_MAX, 'Argument $v1 overflow: C type GLint is required');
        assert($v2 >= \PHP_INT_MIN && $v2 <= \PHP_INT_MAX, 'Argument $v2 overflow: C type GLint is required');

        $proc = self::getProc('glUniform3i', 'void (*)(GLint location, GLint v0, GLint v1, GLint v2)');
        $proc($location, $v0, $v1, $v2);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glUniform` operates on the program object that was made part of
     * current state by calling {@see glUseProgram}.
     *
     * The commands `glUniform{1|2|3|4}{f|i}` are used to change the value of the uniform variable specified by
     * *`location`* using the values passed as arguments. The number specified in the command should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The suffix `f` indicates that floating-point values are being passed; the suffix
     * `i` indicates that integer values are being passed, and this type should also match the data type of the
     * specified uniform variable. The `i` variants of this function should be used to provide values for uniform
     * variables defined as int, ivec2, ivec3, ivec4, or arrays of these. The `f` variants should be used to provide
     * values for uniform variables of type float, vec2, vec3, vec4, or arrays of these. Either the `i` or the `f`
     * variants may be used to provide values for uniform variables of type bool, bvec2, bvec3, bvec4, or arrays of
     * these. The uniform variable will be set to false if the input value is 0 or 0.0f, and it will be set to true
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glUniform ` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glUniform{1|2|3|4}{f|i}v` can be used to modify a single uniform variable or a uniform variable
     * array. These commands pass a count and a pointer to the values to be loaded into a uniform variable or a
     * uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable, and a
     * count of 1 or greater can be used to modify an entire array or part of an array. When loading *n* elements
     * starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the array will be
     * replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in *`value`*, and it should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match the data type for the
     * specified uniform variable as described previously for `glUniform{1|2|3|4}{f|i}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glUniform3f` or `glUniform3fv` can be used to load a uniform variable array of type
     * vec3). The number of elements of the uniform variable array to be modified is specified by *`count`*
     *
     * The commands `glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array of
     * matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number `2`
     * indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and the
     * number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with the
     * first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl3/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param int $v0
     * @param int $v1
     * @param int $v2
     * @param int $v3
     * @return void
     */
    public static function glUniform4i(int $location, int $v0, int $v1, int $v2, int $v3): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($v0 >= \PHP_INT_MIN && $v0 <= \PHP_INT_MAX, 'Argument $v0 overflow: C type GLint is required');
        assert($v1 >= \PHP_INT_MIN && $v1 <= \PHP_INT_MAX, 'Argument $v1 overflow: C type GLint is required');
        assert($v2 >= \PHP_INT_MIN && $v2 <= \PHP_INT_MAX, 'Argument $v2 overflow: C type GLint is required');
        assert($v3 >= \PHP_INT_MIN && $v3 <= \PHP_INT_MAX, 'Argument $v3 overflow: C type GLint is required');

        $proc = self::getProc('glUniform4i', 'void (*)(GLint location, GLint v0, GLint v1, GLint v2, GLint v3)');
        $proc($location, $v0, $v1, $v2, $v3);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glUniform` operates on the program object that was made part of
     * current state by calling {@see glUseProgram}.
     *
     * The commands `glUniform{1|2|3|4}{f|i}` are used to change the value of the uniform variable specified by
     * *`location`* using the values passed as arguments. The number specified in the command should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The suffix `f` indicates that floating-point values are being passed; the suffix
     * `i` indicates that integer values are being passed, and this type should also match the data type of the
     * specified uniform variable. The `i` variants of this function should be used to provide values for uniform
     * variables defined as int, ivec2, ivec3, ivec4, or arrays of these. The `f` variants should be used to provide
     * values for uniform variables of type float, vec2, vec3, vec4, or arrays of these. Either the `i` or the `f`
     * variants may be used to provide values for uniform variables of type bool, bvec2, bvec3, bvec4, or arrays of
     * these. The uniform variable will be set to false if the input value is 0 or 0.0f, and it will be set to true
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glUniform ` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glUniform{1|2|3|4}{f|i}v` can be used to modify a single uniform variable or a uniform variable
     * array. These commands pass a count and a pointer to the values to be loaded into a uniform variable or a
     * uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable, and a
     * count of 1 or greater can be used to modify an entire array or part of an array. When loading *n* elements
     * starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the array will be
     * replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in *`value`*, and it should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match the data type for the
     * specified uniform variable as described previously for `glUniform{1|2|3|4}{f|i}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glUniform3f` or `glUniform3fv` can be used to load a uniform variable array of type
     * vec3). The number of elements of the uniform variable array to be modified is specified by *`count`*
     *
     * The commands `glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array of
     * matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number `2`
     * indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and the
     * number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with the
     * first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl3/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param int $count
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glUniform1fv(int $location, int $count, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glUniform1fv', 'void (*)(GLint location, GLsizei count, const GLfloat *value)');
        $proc($location, $count, $value);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glUniform` operates on the program object that was made part of
     * current state by calling {@see glUseProgram}.
     *
     * The commands `glUniform{1|2|3|4}{f|i}` are used to change the value of the uniform variable specified by
     * *`location`* using the values passed as arguments. The number specified in the command should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The suffix `f` indicates that floating-point values are being passed; the suffix
     * `i` indicates that integer values are being passed, and this type should also match the data type of the
     * specified uniform variable. The `i` variants of this function should be used to provide values for uniform
     * variables defined as int, ivec2, ivec3, ivec4, or arrays of these. The `f` variants should be used to provide
     * values for uniform variables of type float, vec2, vec3, vec4, or arrays of these. Either the `i` or the `f`
     * variants may be used to provide values for uniform variables of type bool, bvec2, bvec3, bvec4, or arrays of
     * these. The uniform variable will be set to false if the input value is 0 or 0.0f, and it will be set to true
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glUniform ` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glUniform{1|2|3|4}{f|i}v` can be used to modify a single uniform variable or a uniform variable
     * array. These commands pass a count and a pointer to the values to be loaded into a uniform variable or a
     * uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable, and a
     * count of 1 or greater can be used to modify an entire array or part of an array. When loading *n* elements
     * starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the array will be
     * replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in *`value`*, and it should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match the data type for the
     * specified uniform variable as described previously for `glUniform{1|2|3|4}{f|i}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glUniform3f` or `glUniform3fv` can be used to load a uniform variable array of type
     * vec3). The number of elements of the uniform variable array to be modified is specified by *`count`*
     *
     * The commands `glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array of
     * matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number `2`
     * indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and the
     * number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with the
     * first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl3/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param int $count
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glUniform2fv(int $location, int $count, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glUniform2fv', 'void (*)(GLint location, GLsizei count, const GLfloat *value)');
        $proc($location, $count, $value);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glUniform` operates on the program object that was made part of
     * current state by calling {@see glUseProgram}.
     *
     * The commands `glUniform{1|2|3|4}{f|i}` are used to change the value of the uniform variable specified by
     * *`location`* using the values passed as arguments. The number specified in the command should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The suffix `f` indicates that floating-point values are being passed; the suffix
     * `i` indicates that integer values are being passed, and this type should also match the data type of the
     * specified uniform variable. The `i` variants of this function should be used to provide values for uniform
     * variables defined as int, ivec2, ivec3, ivec4, or arrays of these. The `f` variants should be used to provide
     * values for uniform variables of type float, vec2, vec3, vec4, or arrays of these. Either the `i` or the `f`
     * variants may be used to provide values for uniform variables of type bool, bvec2, bvec3, bvec4, or arrays of
     * these. The uniform variable will be set to false if the input value is 0 or 0.0f, and it will be set to true
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glUniform ` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glUniform{1|2|3|4}{f|i}v` can be used to modify a single uniform variable or a uniform variable
     * array. These commands pass a count and a pointer to the values to be loaded into a uniform variable or a
     * uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable, and a
     * count of 1 or greater can be used to modify an entire array or part of an array. When loading *n* elements
     * starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the array will be
     * replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in *`value`*, and it should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match the data type for the
     * specified uniform variable as described previously for `glUniform{1|2|3|4}{f|i}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glUniform3f` or `glUniform3fv` can be used to load a uniform variable array of type
     * vec3). The number of elements of the uniform variable array to be modified is specified by *`count`*
     *
     * The commands `glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array of
     * matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number `2`
     * indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and the
     * number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with the
     * first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl3/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param int $count
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glUniform3fv(int $location, int $count, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glUniform3fv', 'void (*)(GLint location, GLsizei count, const GLfloat *value)');
        $proc($location, $count, $value);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glUniform` operates on the program object that was made part of
     * current state by calling {@see glUseProgram}.
     *
     * The commands `glUniform{1|2|3|4}{f|i}` are used to change the value of the uniform variable specified by
     * *`location`* using the values passed as arguments. The number specified in the command should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The suffix `f` indicates that floating-point values are being passed; the suffix
     * `i` indicates that integer values are being passed, and this type should also match the data type of the
     * specified uniform variable. The `i` variants of this function should be used to provide values for uniform
     * variables defined as int, ivec2, ivec3, ivec4, or arrays of these. The `f` variants should be used to provide
     * values for uniform variables of type float, vec2, vec3, vec4, or arrays of these. Either the `i` or the `f`
     * variants may be used to provide values for uniform variables of type bool, bvec2, bvec3, bvec4, or arrays of
     * these. The uniform variable will be set to false if the input value is 0 or 0.0f, and it will be set to true
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glUniform ` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glUniform{1|2|3|4}{f|i}v` can be used to modify a single uniform variable or a uniform variable
     * array. These commands pass a count and a pointer to the values to be loaded into a uniform variable or a
     * uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable, and a
     * count of 1 or greater can be used to modify an entire array or part of an array. When loading *n* elements
     * starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the array will be
     * replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in *`value`*, and it should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match the data type for the
     * specified uniform variable as described previously for `glUniform{1|2|3|4}{f|i}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glUniform3f` or `glUniform3fv` can be used to load a uniform variable array of type
     * vec3). The number of elements of the uniform variable array to be modified is specified by *`count`*
     *
     * The commands `glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array of
     * matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number `2`
     * indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and the
     * number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with the
     * first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl3/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param int $count
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glUniform4fv(int $location, int $count, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glUniform4fv', 'void (*)(GLint location, GLsizei count, const GLfloat *value)');
        $proc($location, $count, $value);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glUniform` operates on the program object that was made part of
     * current state by calling {@see glUseProgram}.
     *
     * The commands `glUniform{1|2|3|4}{f|i}` are used to change the value of the uniform variable specified by
     * *`location`* using the values passed as arguments. The number specified in the command should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The suffix `f` indicates that floating-point values are being passed; the suffix
     * `i` indicates that integer values are being passed, and this type should also match the data type of the
     * specified uniform variable. The `i` variants of this function should be used to provide values for uniform
     * variables defined as int, ivec2, ivec3, ivec4, or arrays of these. The `f` variants should be used to provide
     * values for uniform variables of type float, vec2, vec3, vec4, or arrays of these. Either the `i` or the `f`
     * variants may be used to provide values for uniform variables of type bool, bvec2, bvec3, bvec4, or arrays of
     * these. The uniform variable will be set to false if the input value is 0 or 0.0f, and it will be set to true
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glUniform ` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glUniform{1|2|3|4}{f|i}v` can be used to modify a single uniform variable or a uniform variable
     * array. These commands pass a count and a pointer to the values to be loaded into a uniform variable or a
     * uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable, and a
     * count of 1 or greater can be used to modify an entire array or part of an array. When loading *n* elements
     * starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the array will be
     * replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in *`value`*, and it should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match the data type for the
     * specified uniform variable as described previously for `glUniform{1|2|3|4}{f|i}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glUniform3f` or `glUniform3fv` can be used to load a uniform variable array of type
     * vec3). The number of elements of the uniform variable array to be modified is specified by *`count`*
     *
     * The commands `glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array of
     * matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number `2`
     * indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and the
     * number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with the
     * first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl3/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param int $count
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public static function glUniform1iv(int $location, int $count, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glUniform1iv', 'void (*)(GLint location, GLsizei count, const GLint *value)');
        $proc($location, $count, $value);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glUniform` operates on the program object that was made part of
     * current state by calling {@see glUseProgram}.
     *
     * The commands `glUniform{1|2|3|4}{f|i}` are used to change the value of the uniform variable specified by
     * *`location`* using the values passed as arguments. The number specified in the command should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The suffix `f` indicates that floating-point values are being passed; the suffix
     * `i` indicates that integer values are being passed, and this type should also match the data type of the
     * specified uniform variable. The `i` variants of this function should be used to provide values for uniform
     * variables defined as int, ivec2, ivec3, ivec4, or arrays of these. The `f` variants should be used to provide
     * values for uniform variables of type float, vec2, vec3, vec4, or arrays of these. Either the `i` or the `f`
     * variants may be used to provide values for uniform variables of type bool, bvec2, bvec3, bvec4, or arrays of
     * these. The uniform variable will be set to false if the input value is 0 or 0.0f, and it will be set to true
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glUniform ` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glUniform{1|2|3|4}{f|i}v` can be used to modify a single uniform variable or a uniform variable
     * array. These commands pass a count and a pointer to the values to be loaded into a uniform variable or a
     * uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable, and a
     * count of 1 or greater can be used to modify an entire array or part of an array. When loading *n* elements
     * starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the array will be
     * replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in *`value`*, and it should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match the data type for the
     * specified uniform variable as described previously for `glUniform{1|2|3|4}{f|i}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glUniform3f` or `glUniform3fv` can be used to load a uniform variable array of type
     * vec3). The number of elements of the uniform variable array to be modified is specified by *`count`*
     *
     * The commands `glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array of
     * matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number `2`
     * indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and the
     * number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with the
     * first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl3/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param int $count
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public static function glUniform2iv(int $location, int $count, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glUniform2iv', 'void (*)(GLint location, GLsizei count, const GLint *value)');
        $proc($location, $count, $value);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glUniform` operates on the program object that was made part of
     * current state by calling {@see glUseProgram}.
     *
     * The commands `glUniform{1|2|3|4}{f|i}` are used to change the value of the uniform variable specified by
     * *`location`* using the values passed as arguments. The number specified in the command should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The suffix `f` indicates that floating-point values are being passed; the suffix
     * `i` indicates that integer values are being passed, and this type should also match the data type of the
     * specified uniform variable. The `i` variants of this function should be used to provide values for uniform
     * variables defined as int, ivec2, ivec3, ivec4, or arrays of these. The `f` variants should be used to provide
     * values for uniform variables of type float, vec2, vec3, vec4, or arrays of these. Either the `i` or the `f`
     * variants may be used to provide values for uniform variables of type bool, bvec2, bvec3, bvec4, or arrays of
     * these. The uniform variable will be set to false if the input value is 0 or 0.0f, and it will be set to true
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glUniform ` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glUniform{1|2|3|4}{f|i}v` can be used to modify a single uniform variable or a uniform variable
     * array. These commands pass a count and a pointer to the values to be loaded into a uniform variable or a
     * uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable, and a
     * count of 1 or greater can be used to modify an entire array or part of an array. When loading *n* elements
     * starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the array will be
     * replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in *`value`*, and it should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match the data type for the
     * specified uniform variable as described previously for `glUniform{1|2|3|4}{f|i}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glUniform3f` or `glUniform3fv` can be used to load a uniform variable array of type
     * vec3). The number of elements of the uniform variable array to be modified is specified by *`count`*
     *
     * The commands `glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array of
     * matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number `2`
     * indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and the
     * number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with the
     * first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl3/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param int $count
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public static function glUniform3iv(int $location, int $count, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glUniform3iv', 'void (*)(GLint location, GLsizei count, const GLint *value)');
        $proc($location, $count, $value);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glUniform` operates on the program object that was made part of
     * current state by calling {@see glUseProgram}.
     *
     * The commands `glUniform{1|2|3|4}{f|i}` are used to change the value of the uniform variable specified by
     * *`location`* using the values passed as arguments. The number specified in the command should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The suffix `f` indicates that floating-point values are being passed; the suffix
     * `i` indicates that integer values are being passed, and this type should also match the data type of the
     * specified uniform variable. The `i` variants of this function should be used to provide values for uniform
     * variables defined as int, ivec2, ivec3, ivec4, or arrays of these. The `f` variants should be used to provide
     * values for uniform variables of type float, vec2, vec3, vec4, or arrays of these. Either the `i` or the `f`
     * variants may be used to provide values for uniform variables of type bool, bvec2, bvec3, bvec4, or arrays of
     * these. The uniform variable will be set to false if the input value is 0 or 0.0f, and it will be set to true
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glUniform ` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glUniform{1|2|3|4}{f|i}v` can be used to modify a single uniform variable or a uniform variable
     * array. These commands pass a count and a pointer to the values to be loaded into a uniform variable or a
     * uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable, and a
     * count of 1 or greater can be used to modify an entire array or part of an array. When loading *n* elements
     * starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the array will be
     * replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in *`value`*, and it should match the number
     * of components in the data type of the specified uniform variable (e.g., `1` for float, int, bool; `2` for
     * vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match the data type for the
     * specified uniform variable as described previously for `glUniform{1|2|3|4}{f|i}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glUniform3f` or `glUniform3fv` can be used to load a uniform variable array of type
     * vec3). The number of elements of the uniform variable array to be modified is specified by *`count`*
     *
     * The commands `glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array of
     * matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number `2`
     * indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and the
     * number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with the
     * first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl3/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param int $count
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public static function glUniform4iv(int $location, int $count, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glUniform4iv', 'void (*)(GLint location, GLsizei count, const GLint *value)');
        $proc($location, $count, $value);
    }

    /**
     * @since 2.0
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glUniformMatrix2fv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glUniformMatrix2fv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($location, $count, $transpose, $value);
    }

    /**
     * @since 2.0
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glUniformMatrix3fv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glUniformMatrix3fv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($location, $count, $transpose, $value);
    }

    /**
     * @since 2.0
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glUniformMatrix4fv(int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glUniformMatrix4fv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($location, $count, $transpose, $value);
    }

    /**
     * Checks to see whether the executables contained in *`program`* can execute given the current OpenGL state. The
     * information generated by the validation process will be stored in *`program`*'s information log. The
     * validation information may consist of an empty string, or it may be a string containing information about how
     * the current program object interacts with the rest of current OpenGL state. This provides a way for OpenGL
     * implementers to convey more information about why the current program is inefficient, suboptimal, failing to
     * execute, and so on.
     *
     * The status of the validation operation will be stored as part of the program object's state. This value will
     * be set to `GL_TRUE` if the validation succeeded, and `GL_FALSE` otherwise. It can be queried by calling
     * {@see glGetProgram} with arguments *`program`* and `GL_VALIDATE_STATUS`. If validation is successful,
     * *`program`* is guaranteed to execute given the current state. Otherwise, *`program`* is guaranteed to not
     * execute.
     *
     * This function is typically useful only during application development. The informational string stored in the
     * information log is completely implementation dependent; therefore, an application should not expect different
     * OpenGL implementations to produce identical information strings.
     *
     * @see http://docs.gl/gl2/glValidateProgram
     * @see http://docs.gl/gl3/glValidateProgram
     * @see http://docs.gl/gl4/glValidateProgram
     * @since 2.0
     * @param int $program
     * @return void
     */
    public static function glValidateProgram(int $program): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');

        $proc = self::getProc('glValidateProgram', 'void (*)(GLuint program)');
        $proc($program);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param float $x
     * @return void
     */
    public static function glVertexAttrib1d(int $index, float $x): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($x >= \PHP_FLOAT_MIN && $x <= \PHP_FLOAT_MAX, 'Argument $x overflow: C type GLdouble is required');

        $proc = self::getProc('glVertexAttrib1d', 'void (*)(GLuint index, GLdouble x)');
        $proc($index, $x);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glVertexAttrib1dv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttrib1dv', 'void (*)(GLuint index, const GLdouble *v)');
        $proc($index, $v);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param float $x
     * @return void
     */
    public static function glVertexAttrib1f(int $index, float $x): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($x >= -3.40282e38 && $x <= 3.40282e38, 'Argument $x overflow: C type GLfloat is required');

        $proc = self::getProc('glVertexAttrib1f', 'void (*)(GLuint index, GLfloat x)');
        $proc($index, $x);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glVertexAttrib1fv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttrib1fv', 'void (*)(GLuint index, const GLfloat *v)');
        $proc($index, $v);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param int $x
     * @return void
     */
    public static function glVertexAttrib1s(int $index, int $x): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($x >= -32768 && $x <= 32767, 'Argument $x overflow: C type GLshort is required');

        $proc = self::getProc('glVertexAttrib1s', 'void (*)(GLuint index, GLshort x)');
        $proc($index, $x);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertexAttrib1sv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttrib1sv', 'void (*)(GLuint index, const GLshort *v)');
        $proc($index, $v);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param float $x
     * @param float $y
     * @return void
     */
    public static function glVertexAttrib2d(int $index, float $x, float $y): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($x >= \PHP_FLOAT_MIN && $x <= \PHP_FLOAT_MAX, 'Argument $x overflow: C type GLdouble is required');
        assert($y >= \PHP_FLOAT_MIN && $y <= \PHP_FLOAT_MAX, 'Argument $y overflow: C type GLdouble is required');

        $proc = self::getProc('glVertexAttrib2d', 'void (*)(GLuint index, GLdouble x, GLdouble y)');
        $proc($index, $x, $y);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glVertexAttrib2dv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttrib2dv', 'void (*)(GLuint index, const GLdouble *v)');
        $proc($index, $v);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param float $x
     * @param float $y
     * @return void
     */
    public static function glVertexAttrib2f(int $index, float $x, float $y): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($x >= -3.40282e38 && $x <= 3.40282e38, 'Argument $x overflow: C type GLfloat is required');
        assert($y >= -3.40282e38 && $y <= 3.40282e38, 'Argument $y overflow: C type GLfloat is required');

        $proc = self::getProc('glVertexAttrib2f', 'void (*)(GLuint index, GLfloat x, GLfloat y)');
        $proc($index, $x, $y);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glVertexAttrib2fv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttrib2fv', 'void (*)(GLuint index, const GLfloat *v)');
        $proc($index, $v);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param int $x
     * @param int $y
     * @return void
     */
    public static function glVertexAttrib2s(int $index, int $x, int $y): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($x >= -32768 && $x <= 32767, 'Argument $x overflow: C type GLshort is required');
        assert($y >= -32768 && $y <= 32767, 'Argument $y overflow: C type GLshort is required');

        $proc = self::getProc('glVertexAttrib2s', 'void (*)(GLuint index, GLshort x, GLshort y)');
        $proc($index, $x, $y);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertexAttrib2sv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttrib2sv', 'void (*)(GLuint index, const GLshort *v)');
        $proc($index, $v);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param float $x
     * @param float $y
     * @param float $z
     * @return void
     */
    public static function glVertexAttrib3d(int $index, float $x, float $y, float $z): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($x >= \PHP_FLOAT_MIN && $x <= \PHP_FLOAT_MAX, 'Argument $x overflow: C type GLdouble is required');
        assert($y >= \PHP_FLOAT_MIN && $y <= \PHP_FLOAT_MAX, 'Argument $y overflow: C type GLdouble is required');
        assert($z >= \PHP_FLOAT_MIN && $z <= \PHP_FLOAT_MAX, 'Argument $z overflow: C type GLdouble is required');

        $proc = self::getProc('glVertexAttrib3d', 'void (*)(GLuint index, GLdouble x, GLdouble y, GLdouble z)');
        $proc($index, $x, $y, $z);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glVertexAttrib3dv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttrib3dv', 'void (*)(GLuint index, const GLdouble *v)');
        $proc($index, $v);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param float $x
     * @param float $y
     * @param float $z
     * @return void
     */
    public static function glVertexAttrib3f(int $index, float $x, float $y, float $z): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($x >= -3.40282e38 && $x <= 3.40282e38, 'Argument $x overflow: C type GLfloat is required');
        assert($y >= -3.40282e38 && $y <= 3.40282e38, 'Argument $y overflow: C type GLfloat is required');
        assert($z >= -3.40282e38 && $z <= 3.40282e38, 'Argument $z overflow: C type GLfloat is required');

        $proc = self::getProc('glVertexAttrib3f', 'void (*)(GLuint index, GLfloat x, GLfloat y, GLfloat z)');
        $proc($index, $x, $y, $z);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glVertexAttrib3fv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttrib3fv', 'void (*)(GLuint index, const GLfloat *v)');
        $proc($index, $v);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param int $x
     * @param int $y
     * @param int $z
     * @return void
     */
    public static function glVertexAttrib3s(int $index, int $x, int $y, int $z): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($x >= -32768 && $x <= 32767, 'Argument $x overflow: C type GLshort is required');
        assert($y >= -32768 && $y <= 32767, 'Argument $y overflow: C type GLshort is required');
        assert($z >= -32768 && $z <= 32767, 'Argument $z overflow: C type GLshort is required');

        $proc = self::getProc('glVertexAttrib3s', 'void (*)(GLuint index, GLshort x, GLshort y, GLshort z)');
        $proc($index, $x, $y, $z);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertexAttrib3sv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttrib3sv', 'void (*)(GLuint index, const GLshort *v)');
        $proc($index, $v);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertexAttrib4Nbv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttrib4Nbv', 'void (*)(GLuint index, const GLbyte *v)');
        $proc($index, $v);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertexAttrib4Niv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttrib4Niv', 'void (*)(GLuint index, const GLint *v)');
        $proc($index, $v);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertexAttrib4Nsv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttrib4Nsv', 'void (*)(GLuint index, const GLshort *v)');
        $proc($index, $v);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param int $x
     * @param int $y
     * @param int $z
     * @param int $w
     * @return void
     */
    public static function glVertexAttrib4Nub(int $index, int $x, int $y, int $z, int $w): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($x >= 0 && $x <= 255, 'Argument $x overflow: C type GLubyte is required');
        assert($y >= 0 && $y <= 255, 'Argument $y overflow: C type GLubyte is required');
        assert($z >= 0 && $z <= 255, 'Argument $z overflow: C type GLubyte is required');
        assert($w >= 0 && $w <= 255, 'Argument $w overflow: C type GLubyte is required');

        $proc = self::getProc('glVertexAttrib4Nub', 'void (*)(GLuint index, GLubyte x, GLubyte y, GLubyte z, GLubyte w)');
        $proc($index, $x, $y, $z, $w);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertexAttrib4Nubv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttrib4Nubv', 'void (*)(GLuint index, const GLubyte *v)');
        $proc($index, $v);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertexAttrib4Nuiv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttrib4Nuiv', 'void (*)(GLuint index, const GLuint *v)');
        $proc($index, $v);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertexAttrib4Nusv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttrib4Nusv', 'void (*)(GLuint index, const GLushort *v)');
        $proc($index, $v);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertexAttrib4bv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttrib4bv', 'void (*)(GLuint index, const GLbyte *v)');
        $proc($index, $v);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param float $x
     * @param float $y
     * @param float $z
     * @param float $w
     * @return void
     */
    public static function glVertexAttrib4d(int $index, float $x, float $y, float $z, float $w): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($x >= \PHP_FLOAT_MIN && $x <= \PHP_FLOAT_MAX, 'Argument $x overflow: C type GLdouble is required');
        assert($y >= \PHP_FLOAT_MIN && $y <= \PHP_FLOAT_MAX, 'Argument $y overflow: C type GLdouble is required');
        assert($z >= \PHP_FLOAT_MIN && $z <= \PHP_FLOAT_MAX, 'Argument $z overflow: C type GLdouble is required');
        assert($w >= \PHP_FLOAT_MIN && $w <= \PHP_FLOAT_MAX, 'Argument $w overflow: C type GLdouble is required');

        $proc = self::getProc('glVertexAttrib4d', 'void (*)(GLuint index, GLdouble x, GLdouble y, GLdouble z, GLdouble w)');
        $proc($index, $x, $y, $z, $w);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glVertexAttrib4dv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttrib4dv', 'void (*)(GLuint index, const GLdouble *v)');
        $proc($index, $v);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param float $x
     * @param float $y
     * @param float $z
     * @param float $w
     * @return void
     */
    public static function glVertexAttrib4f(int $index, float $x, float $y, float $z, float $w): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($x >= -3.40282e38 && $x <= 3.40282e38, 'Argument $x overflow: C type GLfloat is required');
        assert($y >= -3.40282e38 && $y <= 3.40282e38, 'Argument $y overflow: C type GLfloat is required');
        assert($z >= -3.40282e38 && $z <= 3.40282e38, 'Argument $z overflow: C type GLfloat is required');
        assert($w >= -3.40282e38 && $w <= 3.40282e38, 'Argument $w overflow: C type GLfloat is required');

        $proc = self::getProc('glVertexAttrib4f', 'void (*)(GLuint index, GLfloat x, GLfloat y, GLfloat z, GLfloat w)');
        $proc($index, $x, $y, $z, $w);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glVertexAttrib4fv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttrib4fv', 'void (*)(GLuint index, const GLfloat *v)');
        $proc($index, $v);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertexAttrib4iv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttrib4iv', 'void (*)(GLuint index, const GLint *v)');
        $proc($index, $v);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param int $x
     * @param int $y
     * @param int $z
     * @param int $w
     * @return void
     */
    public static function glVertexAttrib4s(int $index, int $x, int $y, int $z, int $w): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($x >= -32768 && $x <= 32767, 'Argument $x overflow: C type GLshort is required');
        assert($y >= -32768 && $y <= 32767, 'Argument $y overflow: C type GLshort is required');
        assert($z >= -32768 && $z <= 32767, 'Argument $z overflow: C type GLshort is required');
        assert($w >= -32768 && $w <= 32767, 'Argument $w overflow: C type GLshort is required');

        $proc = self::getProc('glVertexAttrib4s', 'void (*)(GLuint index, GLshort x, GLshort y, GLshort z, GLshort w)');
        $proc($index, $x, $y, $z, $w);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertexAttrib4sv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttrib4sv', 'void (*)(GLuint index, const GLshort *v)');
        $proc($index, $v);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertexAttrib4ubv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttrib4ubv', 'void (*)(GLuint index, const GLubyte *v)');
        $proc($index, $v);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertexAttrib4uiv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttrib4uiv', 'void (*)(GLuint index, const GLuint *v)');
        $proc($index, $v);
    }

    /**
     * OpenGL defines a number of standard vertex attributes that applications can modify with standard API entry
     * points (color, normal, texture coordinates, etc.). The `glVertexAttrib` family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * `GL_MAX_VERTEX_ATTRIBS`. Individual elements of this array can be modified with a `glVertexAttrib` call that
     * specifies the index of the element to be modified and a value for that element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by *`index`*. A `1` in the name of the command indicates that only one value is passed, and it will
     * be used to modify the first component of the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a `2` in the name of the command indicates
     * that values are provided for the first two components, the third component will be set to 0, and the fourth
     * component will be set to 1. A `3` in the name of the command indicates that values are provided for the first
     * three components and the fourth component will be set to 1, whereas a `4` in the name indicates that values
     * are provided for all four components.
     *
     * The letters `s`, `f`, `i`, `d`, `ub`, `us`, and `ui` indicate whether the arguments are of type short, float,
     * int, double, unsigned byte, unsigned short, or unsigned int. When `v` is appended to the name, the commands
     * can take a pointer to an array of such values. The commands containing `N` indicate that the arguments will be
     * passed as fixed-point values that are scaled to a normalized range according to the component conversion rules
     * defined by the OpenGL specification. Signed values are understood to represent fixed-point values in the range
     * [-1,1], and unsigned values are understood to represent fixed-point values in the range [0,1].
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the `glVertexAttrib` entry points. Matrices must be loaded into successive generic
     * attribute slots in column major order, with one column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see glBindAttribLocation}. This allows an application to use more descriptive
     * variable names in a vertex shader. A subsequent change to the specified generic vertex attribute will be
     * immediately reflected as a change to the corresponding attribute variable in the vertex shader.
     *
     * The binding between a generic vertex attribute index and a user-defined attribute variable in a vertex shader
     * is part of the state of a program object, but the current value of the generic vertex attribute is not. The
     * value of each generic vertex attribute is part of current state, just like standard vertex attributes, and it
     * is maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are not bound to a named vertex shader
     * attribute variable. These values are simply maintained as part of current state and will not be accessed by
     * the vertex shader. If a generic vertex attribute bound to an attribute variable in a vertex shader is not
     * updated while the vertex shader is executing, the vertex shader will repeatedly use the current value for the
     * generic vertex attribute.
     *
     * The generic vertex attribute with index 0 is the same as the vertex position attribute previously defined by
     * OpenGL. A {@see glVertex2}, {@see glVertex3}, or {@see glVertex4} command is completely
     * equivalent to the corresponding `glVertexAttrib` command with an index argument of 0. A vertex shader can
     * access generic vertex attribute 0 by using the built-in attribute variable *`gl_Vertex`*. There are no current
     * values for generic vertex attribute 0. This is the only generic vertex attribute with this property; calls to
     * set other standard vertex attributes can be freely mixed with calls to set any of the other generic vertex
     * attributes.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl3/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertexAttrib4usv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttrib4usv', 'void (*)(GLuint index, const GLushort *v)');
        $proc($index, $v);
    }

    /**
     * Specifies the location and data format of the array of generic vertex attributes at index *`index`* to use
     * when rendering. *`size`* specifies the number of components per attribute and must be 1, 2, 3, or 4. *`type`*
     * specifies the data type of each component, and *`stride`* specifies the byte stride from one attribute to the
     * next, allowing vertices and attributes to be packed into a single array or stored in separate arrays. If set
     * to `GL_TRUE`, *`normalized`* indicates that values stored in an integer format are to be mapped to the range
     * [-1,1] (for signed values) or [0,1] (for unsigned values) when they are accessed and converted to floating
     * point. Otherwise, values will be converted to floats directly without normalization.
     *
     * If a non-zero named buffer object is bound to the `GL_ARRAY_BUFFER` target (see {@see glBindBuffer})
     * while a generic vertex attribute array is specified, *`pointer`* is treated as a byte offset into the buffer
     * object's data store. Also, the buffer object binding (`GL_ARRAY_BUFFER_BINDING`) is saved as generic vertex
     * attribute array client-side state (`GL_VERTEX_ATTRIB_ARRAY_BUFFER_BINDING`) for index *`index`*.
     *
     * When a generic vertex attribute array is specified, *`size`*, *`type`*, *`normalized`*, *`stride`*, and
     * *`pointer`* are saved as client-side state, in addition to the current vertex array buffer object binding.
     *
     * To enable and disable a generic vertex attribute array, call
     * {@see glEnableVertexAttribArray} and
     * {@see glDisableVertexAttribArray} with *`index`*. If enabled, the generic vertex
     * attribute array is used when {@see glArrayElement}, {@see glDrawArrays},
     * {@see glMultiDrawArrays}, {@see glDrawElements},
     * {@see glMultiDrawElements}, or {@see glDrawRangeElements} is called.
     *
     * @see http://docs.gl/gl2/glVertexAttribPointer
     * @see http://docs.gl/gl3/glVertexAttribPointer
     * @see http://docs.gl/gl4/glVertexAttribPointer
     * @since 2.0
     * @param int $index
     * @param int $size
     * @param int $type
     * @param int $normalized
     * @param int $stride
     * @param \FFI\CData|\FFI\CPtr|null $pointer
     * @return void
     */
    public static function glVertexAttribPointer(int $index, int $size, int $type, int $normalized, int $stride, ?\FFI\CData $pointer): void
    {
        assert(version_compare(self::$info->version, '2.0') >= 0, __FUNCTION__ . ' is available since OpenGL 2.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($size >= \PHP_INT_MIN && $size <= \PHP_INT_MAX, 'Argument $size overflow: C type GLint is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');
        assert($normalized >= 0 && $normalized <= 255, 'Argument $normalized overflow: C type GLboolean is required');
        assert($stride >= \PHP_INT_MIN && $stride <= \PHP_INT_MAX, 'Argument $stride overflow: C type GLsizei is required');

        $proc = self::getProc('glVertexAttribPointer', 'void (*)(GLuint index, GLint size, GLenum type, GLboolean normalized, GLsizei stride, const void *pointer)');
        $proc($index, $size, $type, $normalized, $stride, $pointer);
    }
}
