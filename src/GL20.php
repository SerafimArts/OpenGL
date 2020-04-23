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

use Serafim\OpenGL\Type\Type;

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
     * framebuffer (the ''destination'' color). These functions specify one blend equation for the RGB-color
     * components and one blend equation for the alpha component. {@see GL46::glBlendEquationSeparatei} specifies the
     * blend equations for a single draw buffer whereas {@see GL46::glBlendEquationSeparate} sets the blend equations
     * for all draw buffers.
     *
     * The blend equations use the source and destination blend factors specified by either {@see GL46::glBlendFunc}
     * or {@see GL46::glBlendFuncSeparate}. See {@see GL46::glBlendFunc} or {@see GL46::glBlendFuncSeparate} for a
     * description of the various blend factors.
     *
     * In the equations that follow, source and destination color components are referred to as    R s  G s  B s  A s
     *    and    R d  G d  B d  A d   , respectively. The result color is referred to as    R r  G r  B r  A r   .
     * The source and destination blend factors are denoted    s R  s G  s B  s A    and    d R  d G  d B  d A   ,
     * respectively. For these equations all color components are understood to have values in the range    0 1  .
     *       Mode     RGB Components     Alpha Component        {@see GL46::GL_FUNC_ADD}      Rr =  R s  &amp;it; s R
     *  + R d  &amp;it; d R        Gr =  G s  &amp;it; s G  + G d  &amp;it; d G        Br =  B s  &amp;it; s B  + B d
     *  &amp;it; d B          Ar =  A s  &amp;it; s A  + A d  &amp;it; d A         {@see GL46::GL_FUNC_SUBTRACT}
     * Rr =  R s  &amp;it; s R  - R d  &amp;it; d R        Gr =  G s  &amp;it; s G  - G d  &amp;it; d G        Br =
     * B s  &amp;it; s B  - B d  &amp;it; d B          Ar =  A s  &amp;it; s A  - A d  &amp;it; d A
     * {@see GL46::GL_FUNC_REVERSE_SUBTRACT}      Rr =  R d  &amp;it; d R  - R s  &amp;it; s R        Gr =  G d
     * &amp;it; d G  - G s  &amp;it; s G        Br =  B d  &amp;it; d B  - B s  &amp;it; s B          Ar =  A d
     * &amp;it; d A  - A s  &amp;it; s A         {@see GL46::GL_MIN}      Rr =  min &amp;af;   R s    R d          Gr
     * =  min &amp;af;   G s    G d          Br =  min &amp;af;   B s    B d            Ar =  min &amp;af;   A s    A
     * d           {@see GL46::GL_MAX}      Rr =  max &amp;af;   R s    R d          Gr =  max &amp;af;   G s    G d
     *         Br =  max &amp;af;   B s    B d            Ar =  max &amp;af;   A s    A d
     *
     * The results of these equations are clamped to the range    0 1  .
     *
     * The {@see GL46::GL_MIN} and {@see GL46::GL_MAX} equations are useful for applications that analyze image data
     * (image thresholding against a constant color, for example). The {@see GL46::GL_FUNC_ADD} equation is useful
     * for antialiasing and transparency, among other things.
     *
     * Initially, both the RGB blend equation and the alpha blend equation are set to {@see GL46::GL_FUNC_ADD}.
     *
     * @see http://docs.gl/gl2/glBlendEquationSeparate
     * @see http://docs.gl/gl4/glBlendEquationSeparate
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $modeRGB
     * @param int|\FFI\CData|\FFI\CInt $modeAlpha
     * @return void
     */
    public function blendEquationSeparate($modeRGB, $modeAlpha): void
    {
        $modeRGB = $modeRGB instanceof \FFI\CData ? $modeRGB->cdata : $modeRGB;
        $modeAlpha = $modeAlpha instanceof \FFI\CData ? $modeAlpha->cdata : $modeAlpha;

        assert(Type::isUint16($modeRGB), 'Argument $modeRGB must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($modeAlpha), 'Argument $modeAlpha must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glBlendEquationSeparate', 'void (*)(GLenum modeRGB, GLenum modeAlpha)');
        $proc($modeRGB, $modeAlpha);
    }

    /**
     * {@see GL46::glDrawBuffers} and {@see GL46::glNamedFramebufferDrawBuffers} define an array of buffers into
     * which outputs from the fragment shader data will be written. If a fragment shader writes a value to one or
     * more user defined output variables, then the value of each variable will be written into the buffer specified
     * at a location within $bufs corresponding to the location assigned to that user defined output. The draw buffer
     * used for user defined outputs assigned to locations greater than or equal to $n is implicitly set to
     * {@see GL46::GL_NONE} and any data written to such an output is discarded.
     *
     * For {@see GL46::glDrawBuffers}, the framebuffer object that is bound to the {@see GL46::GL_DRAW_FRAMEBUFFER}
     * binding will be used. For {@see GL46::glNamedFramebufferDrawBuffers}, $framebuffer is the name of the
     * framebuffer object. If $framebuffer is zero, then the default framebuffer is affected.
     *
     * The symbolic constants contained in $bufs may be any of the following:
     *
     *  - {@see GL46::GL_NONE}: The fragment shader output value is not written
     *    into any color buffer.
     *
     *  - {@see GL46::GL_FRONT_LEFT}: The fragment shader output value is
     *    written into the front left color buffer.
     *
     *  - {@see GL46::GL_FRONT_RIGHT}: The fragment shader output value is
     *    written into the front right color buffer.
     *
     *  - {@see GL46::GL_BACK_LEFT}: The fragment shader output value is written
     *    into the back left color buffer.
     *
     *  - {@see GL46::GL_BACK_RIGHT}: The fragment shader output value is
     *    written into the back right color buffer.
     *
     *  - {@see GL46::GL_COLOR_ATTACHMENTn}: The fragment shader output value is
     *    written into the nth color attachment of the current framebuffer. n
     *    may
     *    range from zero to the value of {@see GL46::GL_MAX_COLOR_ATTACHMENTS}.
     *
     * Except for {@see GL46::GL_NONE}, the preceding symbolic constants may not appear more than once in $bufs. The
     * maximum number of draw buffers supported is implementation dependent and can be queried by calling
     * {@see GL46::glGet} with the argument {@see GL46::GL_MAX_DRAW_BUFFERS}.
     *
     * @see http://docs.gl/gl2/glDrawBuffers
     * @see http://docs.gl/gl4/glDrawBuffers
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $n
     * @param \FFI\CData|\FFI\CIntPtr|null $bufs
     * @return void
     */
    public function drawBuffers($n, ?\FFI\CData $bufs): void
    {
        $n = $n instanceof \FFI\CData ? $n->cdata : $n;

        assert(Type::isInt16($n), 'Argument $n must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glDrawBuffers', 'void (*)(GLsizei n, const GLenum *bufs)');
        $proc($n, $bufs);
    }

    /**
     * Stenciling, like depth-buffering, enables and disables drawing on a per-pixel basis. You draw into the stencil
     * planes using GL drawing primitives, then render geometry and images, using the stencil planes to mask out
     * portions of the screen. Stenciling is typically used in multipass rendering algorithms to achieve special
     * effects, such as decals, outlining, and constructive solid geometry rendering.
     *
     * The stencil test conditionally eliminates a pixel based on the outcome of a comparison between the value in
     * the stencil buffer and a reference value. To enable and disable the test, call {@see GL46::glEnable} and
     * {@see GL46::glDisable} with argument {@see GL46::GL_STENCIL_TEST}; to control it, call
     * {@see GL46::glStencilFunc} or {@see GL46::glStencilFuncSeparate}.
     *
     * There can be two separate sets of $sfail, $dpfail, and $dppass parameters; one affects back-facing polygons,
     * and the other affects front-facing polygons as well as other non-polygon primitives. {@see GL46::glStencilOp}
     * sets both front and back stencil state to the same values, as if {@see GL46::glStencilOpSeparate} were called
     * with $face set to {@see GL46::GL_FRONT_AND_BACK}.
     *
     * {@see GL46::glStencilOpSeparate} takes three arguments that indicate what happens to the stored stencil value
     * while stenciling is enabled. If the stencil test fails, no change is made to the pixel's color or depth
     * buffers, and $sfail specifies what happens to the stencil buffer contents. The following eight actions are
     * possible.
     *
     *  - {@see GL46::GL_KEEP}: Keeps the current value.
     *
     *  - {@see GL46::GL_ZERO}: Sets the stencil buffer value to 0.
     *
     *  - {@see GL46::GL_REPLACE}: Sets the stencil buffer value to ref, as
     *    specified by {@see GL46::glStencilFunc}.
     *
     *  - {@see GL46::GL_INCR}: Increments the current stencil buffer value.
     *    Clamps to the maximum representable unsigned value.
     *
     *  - {@see GL46::GL_INCR_WRAP}: Increments the current stencil buffer
     *    value. Wraps stencil buffer value to zero when incrementing the
     *    maximum
     *    representable unsigned value.
     *
     *  - {@see GL46::GL_DECR}: Decrements the current stencil buffer value.
     *    Clamps to 0.
     *
     *  - {@see GL46::GL_DECR_WRAP}: Decrements the current stencil buffer
     *    value. Wraps stencil buffer value to the maximum representable
     *    unsigned
     *    value when decrementing a stencil buffer value of zero.
     *
     *  - {@see GL46::GL_INVERT}: Bitwise inverts the current stencil buffer
     *    value.
     *
     * Stencil buffer values are treated as unsigned integers. When incremented and decremented, values are clamped
     * to 0 and    2 n  - 1  , where n is the value returned by querying {@see GL46::GL_STENCIL_BITS}.
     *
     * The other two arguments to {@see GL46::glStencilOpSeparate} specify stencil buffer actions that depend on
     * whether subsequent depth buffer tests succeed ($dppass) or fail ($dpfail) (see {@see GL46::glDepthFunc}). The
     * actions are specified using the same eight symbolic constants as $sfail. Note that $dpfail is ignored when
     * there is no depth buffer, or when the depth buffer is not enabled. In these cases, $sfail and $dppass specify
     * stencil action when the stencil test fails and passes, respectively.
     *
     * @see http://docs.gl/gl2/glStencilOpSeparate
     * @see http://docs.gl/gl4/glStencilOpSeparate
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $face
     * @param int|\FFI\CData|\FFI\CInt $sfail
     * @param int|\FFI\CData|\FFI\CInt $dpfail
     * @param int|\FFI\CData|\FFI\CInt $dppass
     * @return void
     */
    public function stencilOpSeparate($face, $sfail, $dpfail, $dppass): void
    {
        $face = $face instanceof \FFI\CData ? $face->cdata : $face;
        $sfail = $sfail instanceof \FFI\CData ? $sfail->cdata : $sfail;
        $dpfail = $dpfail instanceof \FFI\CData ? $dpfail->cdata : $dpfail;
        $dppass = $dppass instanceof \FFI\CData ? $dppass->cdata : $dppass;

        assert(Type::isUint16($face), 'Argument $face must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($sfail), 'Argument $sfail must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($dpfail), 'Argument $dpfail must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($dppass), 'Argument $dppass must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glStencilOpSeparate', 'void (*)(GLenum face, GLenum sfail, GLenum dpfail, GLenum dppass)');
        $proc($face, $sfail, $dpfail, $dppass);
    }

    /**
     * Stenciling, like depth-buffering, enables and disables drawing on a per-pixel basis. You draw into the stencil
     * planes using GL drawing primitives, then render geometry and images, using the stencil planes to mask out
     * portions of the screen. Stenciling is typically used in multipass rendering algorithms to achieve special
     * effects, such as decals, outlining, and constructive solid geometry rendering.
     *
     * The stencil test conditionally eliminates a pixel based on the outcome of a comparison between the reference
     * value and the value in the stencil buffer. To enable and disable the test, call {@see GL46::glEnable} and
     * {@see GL46::glDisable} with argument {@see GL46::GL_STENCIL_TEST}. To specify actions based on the outcome of
     * the stencil test, call {@see GL46::glStencilOp} or {@see GL46::glStencilOpSeparate}.
     *
     * There can be two separate sets of $func, $ref, and $mask parameters; one affects back-facing polygons, and the
     * other affects front-facing polygons as well as other non-polygon primitives. {@see GL46::glStencilFunc} sets
     * both front and back stencil state to the same values, as if {@see GL46::glStencilFuncSeparate} were called
     * with $face set to {@see GL46::GL_FRONT_AND_BACK}.
     *
     * $func is a symbolic constant that determines the stencil comparison function. It accepts one of eight values,
     * shown in the following list. $ref is an integer reference value that is used in the stencil comparison. It is
     * clamped to the range    0  2 n  - 1   , where n is the number of bitplanes in the stencil buffer. $mask is
     * bitwise ANDed with both the reference value and the stored stencil value, with the ANDed values participating
     * in the comparison.
     *
     * If stencil represents the value stored in the corresponding stencil buffer location, the following list shows
     * the effect of each comparison function that can be specified by $func. Only if the comparison succeeds is the
     * pixel passed through to the next stage in the rasterization process (see {@see GL46::glStencilOp}). All tests
     * treat stencil values as unsigned integers in the range    0  2 n  - 1   , where n is the number of bitplanes
     * in the stencil buffer.
     *
     * The following values are accepted by $func:
     *
     *  - {@see GL46::GL_NEVER}: Always fails.
     *
     *  - {@see GL46::GL_LESS}: Passes if ( $ref &amp; $mask ) &lt; ( stencil
     *    &amp; $mask ).
     *
     *  - {@see GL46::GL_LEQUAL}: Passes if ( $ref &amp; $mask ) &lt;= ( stencil
     *    &amp; $mask ).
     *
     *  - {@see GL46::GL_GREATER}: Passes if ( $ref &amp; $mask ) &gt; ( stencil
     *    &amp; $mask ).
     *
     *  - {@see GL46::GL_GEQUAL}: Passes if ( $ref &amp; $mask ) &gt;= ( stencil
     *    &amp; $mask ).
     *
     *  - {@see GL46::GL_EQUAL}: Passes if ( $ref &amp; $mask ) = ( stencil
     *    &amp; $mask ).
     *
     *  - {@see GL46::GL_NOTEQUAL}: Passes if ( $ref &amp; $mask ) != ( stencil
     *    &amp; $mask ).
     *
     *  - {@see GL46::GL_ALWAYS}: Always passes.
     *
     * @see http://docs.gl/gl2/glStencilFuncSeparate
     * @see http://docs.gl/gl4/glStencilFuncSeparate
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $face
     * @param int|\FFI\CData|\FFI\CInt $func
     * @param int|\FFI\CData|\FFI\CInt $ref
     * @param int|\FFI\CData|\FFI\CInt $mask
     * @return void
     */
    public function stencilFuncSeparate($face, $func, $ref, $mask): void
    {
        $face = $face instanceof \FFI\CData ? $face->cdata : $face;
        $func = $func instanceof \FFI\CData ? $func->cdata : $func;
        $ref = $ref instanceof \FFI\CData ? $ref->cdata : $ref;
        $mask = $mask instanceof \FFI\CData ? $mask->cdata : $mask;

        assert(Type::isUint16($face), 'Argument $face must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($func), 'Argument $func must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isInt16($ref), 'Argument $ref must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isUint16($mask), 'Argument $mask must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glStencilFuncSeparate', 'void (*)(GLenum face, GLenum func, GLint ref, GLuint mask)');
        $proc($face, $func, $ref, $mask);
    }

    /**
     * {@see GL46::glStencilMaskSeparate} controls the writing of individual bits in the stencil planes. The least
     * significant n bits of $mask, where n is the number of bits in the stencil buffer, specify a mask. Where a 1
     * appears in the mask, it's possible to write to the corresponding bit in the stencil buffer. Where a 0 appears,
     * the corresponding bit is write-protected. Initially, all bits are enabled for writing.
     *
     * There can be two separate $mask writemasks; one affects back-facing polygons, and the other affects
     * front-facing polygons as well as other non-polygon primitives. {@see GL46::glStencilMask} sets both front and
     * back stencil writemasks to the same values, as if {@see GL46::glStencilMaskSeparate} were called with $face
     * set to {@see GL46::GL_FRONT_AND_BACK}.
     *
     * @see http://docs.gl/gl2/glStencilMaskSeparate
     * @see http://docs.gl/gl4/glStencilMaskSeparate
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $face
     * @param int|\FFI\CData|\FFI\CInt $mask
     * @return void
     */
    public function stencilMaskSeparate($face, $mask): void
    {
        $face = $face instanceof \FFI\CData ? $face->cdata : $face;
        $mask = $mask instanceof \FFI\CData ? $mask->cdata : $mask;

        assert(Type::isUint16($face), 'Argument $face must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($mask), 'Argument $mask must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glStencilMaskSeparate', 'void (*)(GLenum face, GLuint mask)');
        $proc($face, $mask);
    }

    /**
     * In order to create a complete shader program, there must be a way to specify the list of things that will be
     * linked together. Program objects provide this mechanism. Shaders that are to be linked together in a program
     * object must first be attached to that program object. {@see GL46::glAttachShader} attaches the shader object
     * specified by $shader to the program object specified by $program. This indicates that $shader will be included
     * in link operations that will be performed on $program.
     *
     * All operations that can be performed on a shader object are valid whether or not the shader object is attached
     * to a program object. It is permissible to attach a shader object to a program object before source code has
     * been loaded into the shader object or before the shader object has been compiled. It is permissible to attach
     * multiple shader objects of the same type because each may contain a portion of the complete shader. It is also
     * permissible to attach a shader object to more than one program object. If a shader object is deleted while it
     * is attached to a program object, it will be flagged for deletion, and deletion will not occur until
     * {@see GL46::glDetachShader} is called to detach it from all program objects to which it is attached.
     *
     * @see http://docs.gl/gl2/glAttachShader
     * @see http://docs.gl/gl4/glAttachShader
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $shader
     * @return void
     */
    public function attachShader($program, $shader): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $shader = $shader instanceof \FFI\CData ? $shader->cdata : $shader;

        assert(Type::isUint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($shader), 'Argument $shader must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glAttachShader', 'void (*)(GLuint program, GLuint shader)');
        $proc($program, $shader);
    }

    /**
     * {@see GL46::glBindAttribLocation} is used to associate a user-defined attribute variable in the program object
     * specified by $program with a generic vertex attribute index. The name of the user-defined attribute variable
     * is passed as a null terminated string in $name. The generic vertex attribute index to be bound to this
     * variable is specified by $index. When $program is made part of current state, values provided via the generic
     * vertex attribute $index will modify the value of the user-defined attribute variable specified by $name.
     *
     * If $name refers to a matrix attribute variable, $index refers to the first column of the matrix. Other matrix
     * columns are then automatically bound to locations $index+1 for a matrix of type {@see GL46::mat2}; $index+1
     * and $index+2 for a matrix of type {@see GL46::mat3}; and $index+1, $index+2, and $index+3 for a matrix of type
     * {@see GL46::mat4}.
     *
     * This command makes it possible for vertex shaders to use descriptive names for attribute variables rather than
     * generic variables that are numbered from zero to the value of {@see GL46::GL_MAX_VERTEX_ATTRIBS} minus one.
     * The values sent to each generic attribute index are part of current state. If a different program object is
     * made current by calling {@see GL46::glUseProgram}, the generic vertex attributes are tracked in such a way
     * that the same values will be observed by attributes in the new program object that are also bound to $index.
     *
     * Attribute variable name-to-generic attribute index bindings for a program object can be explicitly assigned at
     * any time by calling {@see GL46::glBindAttribLocation}. Attribute bindings do not go into effect until
     * {@see GL46::glLinkProgram} is called. After a program object has been linked successfully, the index values
     * for generic attributes remain fixed (and their values can be queried) until the next link command occurs.
     *
     * Any attribute binding that occurs after the program object has been linked will not take effect until the next
     * time the program object is linked.
     *
     * @see http://docs.gl/gl2/glBindAttribLocation
     * @see http://docs.gl/gl4/glBindAttribLocation
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CIntPtr|null $name
     * @return void
     */
    public function bindAttribLocation($program, $index, ?\FFI\CData $name): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glBindAttribLocation', 'void (*)(GLuint program, GLuint index, const GLchar *name)');
        $proc($program, $index, $name);
    }

    /**
     * {@see GL46::glCompileShader} compiles the source code strings that have been stored in the shader object
     * specified by $shader.
     *
     * The compilation status will be stored as part of the shader object's state. This value will be set to
     * {@see GL46::GL_TRUE} if the shader was compiled without errors and is ready for use, and {@see GL46::GL_FALSE}
     * otherwise. It can be queried by calling {@see GL46::glGetShader} with arguments $shader and
     * {@see GL46::GL_COMPILE_STATUS}.
     *
     * Compilation of a shader can fail for a number of reasons as specified by the OpenGL Shading Language
     * Specification. Whether or not the compilation was successful, information about the compilation can be
     * obtained from the shader object's information log by calling {@see GL46::glGetShaderInfoLog}.
     *
     * @see http://docs.gl/gl2/glCompileShader
     * @see http://docs.gl/gl4/glCompileShader
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $shader
     * @return void
     */
    public function compileShader($shader): void
    {
        $shader = $shader instanceof \FFI\CData ? $shader->cdata : $shader;

        assert(Type::isUint16($shader), 'Argument $shader must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glCompileShader', 'void (*)(GLuint shader)');
        $proc($shader);
    }

    /**
     * {@see GL46::glCreateProgram} creates an empty program object and returns a non-zero value by which it can be
     * referenced. A program object is an object to which shader objects can be attached. This provides a mechanism
     * to specify the shader objects that will be linked to create a program. It also provides a means for checking
     * the compatibility of the shaders that will be used to create a program (for instance, checking the
     * compatibility between a vertex shader and a fragment shader). When no longer needed as part of a program
     * object, shader objects can be detached.
     *
     * One or more executables are created in a program object by successfully attaching shader objects to it with
     * {@see GL46::glAttachShader}, successfully compiling the shader objects with {@see GL46::glCompileShader}, and
     * successfully linking the program object with {@see GL46::glLinkProgram}. These executables are made part of
     * current state when {@see GL46::glUseProgram} is called. Program objects can be deleted by calling
     * {@see GL46::glDeleteProgram}. The memory associated with the program object will be deleted when it is no
     * longer part of current rendering state for any context.
     *
     * @see http://docs.gl/gl2/glCreateProgram
     * @see http://docs.gl/gl4/glCreateProgram
     * @since 2.0
     * @return int|\FFI\CData|\FFI\CInt
     */
    public function createProgram(): int
    {
        $proc = $this->getProcAddress('glCreateProgram', 'GLuint (*)(void)');
        return $proc();
    }

    /**
     * {@see GL46::glCreateShader} creates an empty shader object and returns a non-zero value by which it can be
     * referenced. A shader object is used to maintain the source code strings that define a shader. $shaderType
     * indicates the type of shader to be created. Five types of shader are supported. A shader of type
     * {@see GL46::GL_COMPUTE_SHADER} is a shader that is intended to run on the programmable compute processor. A
     * shader of type {@see GL46::GL_VERTEX_SHADER} is a shader that is intended to run on the programmable vertex
     * processor. A shader of type {@see GL46::GL_TESS_CONTROL_SHADER} is a shader that is intended to run on the
     * programmable tessellation processor in the control stage. A shader of type
     * {@see GL46::GL_TESS_EVALUATION_SHADER} is a shader that is intended to run on the programmable tessellation
     * processor in the evaluation stage. A shader of type {@see GL46::GL_GEOMETRY_SHADER} is a shader that is
     * intended to run on the programmable geometry processor. A shader of type {@see GL46::GL_FRAGMENT_SHADER} is a
     * shader that is intended to run on the programmable fragment processor.
     *
     * When created, a shader object's {@see GL46::GL_SHADER_TYPE} parameter is set to either
     * {@see GL46::GL_COMPUTE_SHADER}, {@see GL46::GL_VERTEX_SHADER}, {@see GL46::GL_TESS_CONTROL_SHADER},
     * {@see GL46::GL_TESS_EVALUATION_SHADER}, {@see GL46::GL_GEOMETRY_SHADER} or {@see GL46::GL_FRAGMENT_SHADER},
     * depending on the value of $shaderType.
     *
     * @see http://docs.gl/gl2/glCreateShader
     * @see http://docs.gl/gl4/glCreateShader
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $type
     * @return int|\FFI\CData|\FFI\CInt
     */
    public function createShader($type): int
    {
        $type = $type instanceof \FFI\CData ? $type->cdata : $type;

        assert(Type::isUint16($type), 'Argument $type must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glCreateShader', 'GLuint (*)(GLenum type)');
        return $proc($type);
    }

    /**
     * {@see GL46::glDeleteProgram} frees the memory and invalidates the name associated with the program object
     * specified by $program. This command effectively undoes the effects of a call to {@see GL46::glCreateProgram}.
     *
     * If a program object is in use as part of current rendering state, it will be flagged for deletion, but it will
     * not be deleted until it is no longer part of current state for any rendering context. If a program object to
     * be deleted has shader objects attached to it, those shader objects will be automatically detached but not
     * deleted unless they have already been flagged for deletion by a previous call to {@see GL46::glDeleteShader}.
     * A value of 0 for $program will be silently ignored.
     *
     * To determine whether a program object has been flagged for deletion, call {@see GL46::glGetProgram} with
     * arguments $program and {@see GL46::GL_DELETE_STATUS}.
     *
     * @see http://docs.gl/gl2/glDeleteProgram
     * @see http://docs.gl/gl4/glDeleteProgram
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $program
     * @return void
     */
    public function deleteProgram($program): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;

        assert(Type::isUint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glDeleteProgram', 'void (*)(GLuint program)');
        $proc($program);
    }

    /**
     * {@see GL46::glDeleteShader} frees the memory and invalidates the name associated with the shader object
     * specified by $shader. This command effectively undoes the effects of a call to {@see GL46::glCreateShader}.
     *
     * If a shader object to be deleted is attached to a program object, it will be flagged for deletion, but it will
     * not be deleted until it is no longer attached to any program object, for any rendering context (i.e., it must
     * be detached from wherever it was attached before it will be deleted). A value of 0 for $shader will be
     * silently ignored.
     *
     * To determine whether an object has been flagged for deletion, call {@see GL46::glGetShader} with arguments
     * $shader and {@see GL46::GL_DELETE_STATUS}.
     *
     * @see http://docs.gl/gl2/glDeleteShader
     * @see http://docs.gl/gl4/glDeleteShader
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $shader
     * @return void
     */
    public function deleteShader($shader): void
    {
        $shader = $shader instanceof \FFI\CData ? $shader->cdata : $shader;

        assert(Type::isUint16($shader), 'Argument $shader must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glDeleteShader', 'void (*)(GLuint shader)');
        $proc($shader);
    }

    /**
     * {@see GL46::glDetachShader} detaches the shader object specified by $shader from the program object specified
     * by $program. This command can be used to undo the effect of the command {@see GL46::glAttachShader}.
     *
     * If $shader has already been flagged for deletion by a call to {@see GL46::glDeleteShader} and it is not
     * attached to any other program object, it will be deleted after it has been detached.
     *
     * @see http://docs.gl/gl2/glDetachShader
     * @see http://docs.gl/gl4/glDetachShader
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $shader
     * @return void
     */
    public function detachShader($program, $shader): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $shader = $shader instanceof \FFI\CData ? $shader->cdata : $shader;

        assert(Type::isUint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($shader), 'Argument $shader must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glDetachShader', 'void (*)(GLuint program, GLuint shader)');
        $proc($program, $shader);
    }

    /**
     * {@see GL46::glEnableVertexAttribArray} and {@see GL46::glEnableVertexArrayAttrib} enable the generic vertex
     * attribute array specified by $index. {@see GL46::glEnableVertexAttribArray} uses currently bound vertex array
     * object for the operation, whereas {@see GL46::glEnableVertexArrayAttrib} updates state of the vertex array
     * object with ID $vaobj.
     *
     * {@see GL46::glDisableVertexAttribArray} and {@see GL46::glDisableVertexArrayAttrib} disable the generic vertex
     * attribute array specified by $index. {@see GL46::glDisableVertexAttribArray} uses currently bound vertex array
     * object for the operation, whereas {@see GL46::glDisableVertexArrayAttrib} updates state of the vertex array
     * object with ID $vaobj.
     *
     * By default, all client-side capabilities are disabled, including all generic vertex attribute arrays. If
     * enabled, the values in the generic vertex attribute array will be accessed and used for rendering when calls
     * are made to vertex array commands such as {@see GL46::glDrawArrays}, {@see GL46::glDrawElements},
     * {@see GL46::glDrawRangeElements}, {@see GL46::glMultiDrawElements}, or {@see GL46::glMultiDrawArrays}.
     *
     * @see http://docs.gl/gl2/glEnableVertexAttribArray
     * @see http://docs.gl/gl4/glEnableVertexAttribArray
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @return void
     */
    public function disableVertexAttribArray($index): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glDisableVertexAttribArray', 'void (*)(GLuint index)');
        $proc($index);
    }

    /**
     * {@see GL46::glEnableVertexAttribArray} and {@see GL46::glEnableVertexArrayAttrib} enable the generic vertex
     * attribute array specified by $index. {@see GL46::glEnableVertexAttribArray} uses currently bound vertex array
     * object for the operation, whereas {@see GL46::glEnableVertexArrayAttrib} updates state of the vertex array
     * object with ID $vaobj.
     *
     * {@see GL46::glDisableVertexAttribArray} and {@see GL46::glDisableVertexArrayAttrib} disable the generic vertex
     * attribute array specified by $index. {@see GL46::glDisableVertexAttribArray} uses currently bound vertex array
     * object for the operation, whereas {@see GL46::glDisableVertexArrayAttrib} updates state of the vertex array
     * object with ID $vaobj.
     *
     * By default, all client-side capabilities are disabled, including all generic vertex attribute arrays. If
     * enabled, the values in the generic vertex attribute array will be accessed and used for rendering when calls
     * are made to vertex array commands such as {@see GL46::glDrawArrays}, {@see GL46::glDrawElements},
     * {@see GL46::glDrawRangeElements}, {@see GL46::glMultiDrawElements}, or {@see GL46::glMultiDrawArrays}.
     *
     * @see http://docs.gl/gl2/glEnableVertexAttribArray
     * @see http://docs.gl/gl4/glEnableVertexAttribArray
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @return void
     */
    public function enableVertexAttribArray($index): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glEnableVertexAttribArray', 'void (*)(GLuint index)');
        $proc($index);
    }

    /**
     * {@see GL46::glGetActiveAttrib} returns information about an active attribute variable in the program object
     * specified by $program. The number of active attributes can be obtained by calling {@see GL46::glGetProgram}
     * with the value {@see GL46::GL_ACTIVE_ATTRIBUTES}. A value of 0 for $index selects the first active attribute
     * variable. Permissible values for $index range from zero to the number of active attribute variables minus one.
     *
     * A vertex shader may use either built-in attribute variables, user-defined attribute variables, or both.
     * Built-in attribute variables have a prefix of "gl_" and reference conventional OpenGL vertex attribtes (e.g.,
     * $gl_Vertex, $gl_Normal, etc., see the OpenGL Shading Language specification for a complete list.) User-defined
     * attribute variables have arbitrary names and obtain their values through numbered generic vertex attributes.
     * An attribute variable (either built-in or user-defined) is considered active if it is determined during the
     * link operation that it may be accessed during program execution. Therefore, $program should have previously
     * been the target of a call to {@see GL46::glLinkProgram}, but it is not necessary for it to have been linked
     * successfully.
     *
     * The size of the character buffer required to store the longest attribute variable name in $program can be
     * obtained by calling {@see GL46::glGetProgram} with the value {@see GL46::GL_ACTIVE_ATTRIBUTE_MAX_LENGTH}. This
     * value should be used to allocate a buffer of sufficient size to store the returned attribute name. The size of
     * this character buffer is passed in $bufSize, and a pointer to this character buffer is passed in $name.
     *
     * {@see GL46::glGetActiveAttrib} returns the name of the attribute variable indicated by $index, storing it in
     * the character buffer specified by $name. The string returned will be null terminated. The actual number of
     * characters written into this buffer is returned in $length, and this count does not include the null
     * termination character. If the length of the returned string is not required, a value of {@see GL46::NULL} can
     * be passed in the $length argument.
     *
     * The $type argument specifies a pointer to a variable into which the attribute variable's data type will be
     * written. The symbolic constants {@see GL46::GL_FLOAT}, {@see GL46::GL_FLOAT_VEC2}, {@see GL46::GL_FLOAT_VEC3},
     * {@see GL46::GL_FLOAT_VEC4}, {@see GL46::GL_FLOAT_MAT2}, {@see GL46::GL_FLOAT_MAT3},
     * {@see GL46::GL_FLOAT_MAT4}, {@see GL46::GL_FLOAT_MAT2x3}, {@see GL46::GL_FLOAT_MAT2x4},
     * {@see GL46::GL_FLOAT_MAT3x2}, {@see GL46::GL_FLOAT_MAT3x4}, {@see GL46::GL_FLOAT_MAT4x2},
     * {@see GL46::GL_FLOAT_MAT4x3}, {@see GL46::GL_INT}, {@see GL46::GL_INT_VEC2}, {@see GL46::GL_INT_VEC3},
     * {@see GL46::GL_INT_VEC4}, {@see GL46::GL_UNSIGNED_INT}, {@see GL46::GL_UNSIGNED_INT_VEC2},
     * {@see GL46::GL_UNSIGNED_INT_VEC3}, {@see GL46::GL_UNSIGNED_INT_VEC4}, {@see GL46::GL_DOUBLE},
     * {@see GL46::GL_DOUBLE_VEC2}, {@see GL46::GL_DOUBLE_VEC3}, {@see GL46::GL_DOUBLE_VEC4},
     * {@see GL46::GL_DOUBLE_MAT2}, {@see GL46::GL_DOUBLE_MAT3}, {@see GL46::GL_DOUBLE_MAT4},
     * {@see GL46::GL_DOUBLE_MAT2x3}, {@see GL46::GL_DOUBLE_MAT2x4}, {@see GL46::GL_DOUBLE_MAT3x2},
     * {@see GL46::GL_DOUBLE_MAT3x4}, {@see GL46::GL_DOUBLE_MAT4x2}, or {@see GL46::GL_DOUBLE_MAT4x3} may be
     * returned. The $size argument will return the size of the attribute, in units of the type returned in $type.
     *
     * The list of active attribute variables may include both built-in attribute variables (which begin with the
     * prefix "gl_") as well as user-defined attribute variable names.
     *
     * This function will return as much information as it can about the specified active attribute variable. If no
     * information is available, $length will be 0, and $name will be an empty string. This situation could occur if
     * this function is called after a link operation that failed. If an error occurs, the return values $length,
     * $size, $type, and $name will be unmodified.
     *
     * @see http://docs.gl/gl2/glGetActiveAttrib
     * @see http://docs.gl/gl4/glGetActiveAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param int|\FFI\CData|\FFI\CInt $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @param \FFI\CData|\FFI\CIntPtr|null $size
     * @param \FFI\CData|\FFI\CIntPtr|null $type
     * @param \FFI\CData|\FFI\CIntPtr|null $name
     * @return void
     */
    public function getActiveAttrib($program, $index, $bufSize, ?\FFI\CData $length, ?\FFI\CData $size, ?\FFI\CData $type, ?\FFI\CData $name): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $bufSize = $bufSize instanceof \FFI\CData ? $bufSize->cdata : $bufSize;

        assert(Type::isUint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isInt16($bufSize), 'Argument $bufSize must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetActiveAttrib', 'void (*)(GLuint program, GLuint index, GLsizei bufSize, GLsizei *length, GLint *size, GLenum *type, GLchar *name)');
        $proc($program, $index, $bufSize, $length, $size, $type, $name);
    }

    /**
     * {@see GL46::glGetActiveUniform} returns information about an active uniform variable in the program object
     * specified by $program. The number of active uniform variables can be obtained by calling
     * {@see GL46::glGetProgram} with the value {@see GL46::GL_ACTIVE_UNIFORMS}. A value of 0 for $index selects the
     * first active uniform variable. Permissible values for $index range from zero to the number of active uniform
     * variables minus one.
     *
     * Shaders may use either built-in uniform variables, user-defined uniform variables, or both. Built-in uniform
     * variables have a prefix of "gl_" and reference existing OpenGL state or values derived from such state (e.g.,
     * $gl_DepthRangeParameters, see the OpenGL Shading Language specification for a complete list.) User-defined
     * uniform variables have arbitrary names and obtain their values from the application through calls to
     * {@see GL46::glUniform}. A uniform variable (either built-in or user-defined) is considered active if it is
     * determined during the link operation that it may be accessed during program execution. Therefore, $program
     * should have previously been the target of a call to {@see GL46::glLinkProgram}, but it is not necessary for it
     * to have been linked successfully.
     *
     * The size of the character buffer required to store the longest uniform variable name in $program can be
     * obtained by calling {@see GL46::glGetProgram} with the value {@see GL46::GL_ACTIVE_UNIFORM_MAX_LENGTH}. This
     * value should be used to allocate a buffer of sufficient size to store the returned uniform variable name. The
     * size of this character buffer is passed in $bufSize, and a pointer to this character buffer is passed in
     * $name.
     *
     * {@see GL46::glGetActiveUniform} returns the name of the uniform variable indicated by $index, storing it in
     * the character buffer specified by $name. The string returned will be null terminated. The actual number of
     * characters written into this buffer is returned in $length, and this count does not include the null
     * termination character. If the length of the returned string is not required, a value of {@see GL46::NULL} can
     * be passed in the $length argument.
     *
     * The $type argument will return a pointer to the uniform variable's data type. The symbolic constants returned
     * for uniform types are shown in the table below.         Returned Symbolic Contant     Shader Uniform Type
     *   {@see GL46::GL_FLOAT}   {@see GL46::float}     {@see GL46::GL_FLOAT_VEC2}   {@see GL46::vec2}
     * {@see GL46::GL_FLOAT_VEC3}   {@see GL46::vec3}     {@see GL46::GL_FLOAT_VEC4}   {@see GL46::vec4}
     * {@see GL46::GL_DOUBLE}   {@see GL46::double}     {@see GL46::GL_DOUBLE_VEC2}   {@see GL46::dvec2}
     * {@see GL46::GL_DOUBLE_VEC3}   {@see GL46::dvec3}     {@see GL46::GL_DOUBLE_VEC4}   {@see GL46::dvec4}
     * {@see GL46::GL_INT}   {@see GL46::int}     {@see GL46::GL_INT_VEC2}   {@see GL46::ivec2}
     * {@see GL46::GL_INT_VEC3}   {@see GL46::ivec3}     {@see GL46::GL_INT_VEC4}   {@see GL46::ivec4}
     * {@see GL46::GL_UNSIGNED_INT}   {@see GL46::unsigned int}     {@see GL46::GL_UNSIGNED_INT_VEC2}
     * {@see GL46::uvec2}     {@see GL46::GL_UNSIGNED_INT_VEC3}   {@see GL46::uvec3}
     * {@see GL46::GL_UNSIGNED_INT_VEC4}   {@see GL46::uvec4}     {@see GL46::GL_BOOL}   {@see GL46::bool}
     * {@see GL46::GL_BOOL_VEC2}   {@see GL46::bvec2}     {@see GL46::GL_BOOL_VEC3}   {@see GL46::bvec3}
     * {@see GL46::GL_BOOL_VEC4}   {@see GL46::bvec4}     {@see GL46::GL_FLOAT_MAT2}   {@see GL46::mat2}
     * {@see GL46::GL_FLOAT_MAT3}   {@see GL46::mat3}     {@see GL46::GL_FLOAT_MAT4}   {@see GL46::mat4}
     * {@see GL46::GL_FLOAT_MAT2x3}   {@see GL46::mat2x3}     {@see GL46::GL_FLOAT_MAT2x4}   {@see GL46::mat2x4}
     * {@see GL46::GL_FLOAT_MAT3x2}   {@see GL46::mat3x2}     {@see GL46::GL_FLOAT_MAT3x4}   {@see GL46::mat3x4}
     * {@see GL46::GL_FLOAT_MAT4x2}   {@see GL46::mat4x2}     {@see GL46::GL_FLOAT_MAT4x3}   {@see GL46::mat4x3}
     * {@see GL46::GL_DOUBLE_MAT2}   {@see GL46::dmat2}     {@see GL46::GL_DOUBLE_MAT3}   {@see GL46::dmat3}
     * {@see GL46::GL_DOUBLE_MAT4}   {@see GL46::dmat4}     {@see GL46::GL_DOUBLE_MAT2x3}   {@see GL46::dmat2x3}
     * {@see GL46::GL_DOUBLE_MAT2x4}   {@see GL46::dmat2x4}     {@see GL46::GL_DOUBLE_MAT3x2}   {@see GL46::dmat3x2}
     *    {@see GL46::GL_DOUBLE_MAT3x4}   {@see GL46::dmat3x4}     {@see GL46::GL_DOUBLE_MAT4x2}
     * {@see GL46::dmat4x2}     {@see GL46::GL_DOUBLE_MAT4x3}   {@see GL46::dmat4x3}     {@see GL46::GL_SAMPLER_1D}
     * {@see GL46::sampler1D}     {@see GL46::GL_SAMPLER_2D}   {@see GL46::sampler2D}     {@see GL46::GL_SAMPLER_3D}
     *  {@see GL46::sampler3D}     {@see GL46::GL_SAMPLER_CUBE}   {@see GL46::samplerCube}
     * {@see GL46::GL_SAMPLER_1D_SHADOW}   {@see GL46::sampler1DShadow}     {@see GL46::GL_SAMPLER_2D_SHADOW}
     * {@see GL46::sampler2DShadow}     {@see GL46::GL_SAMPLER_1D_ARRAY}   {@see GL46::sampler1DArray}
     * {@see GL46::GL_SAMPLER_2D_ARRAY}   {@see GL46::sampler2DArray}     {@see GL46::GL_SAMPLER_1D_ARRAY_SHADOW}
     * {@see GL46::sampler1DArrayShadow}     {@see GL46::GL_SAMPLER_2D_ARRAY_SHADOW}
     * {@see GL46::sampler2DArrayShadow}     {@see GL46::GL_SAMPLER_2D_MULTISAMPLE}   {@see GL46::sampler2DMS}
     * {@see GL46::GL_SAMPLER_2D_MULTISAMPLE_ARRAY}   {@see GL46::sampler2DMSArray}
     * {@see GL46::GL_SAMPLER_CUBE_SHADOW}   {@see GL46::samplerCubeShadow}     {@see GL46::GL_SAMPLER_BUFFER}
     * {@see GL46::samplerBuffer}     {@see GL46::GL_SAMPLER_2D_RECT}   {@see GL46::sampler2DRect}
     * {@see GL46::GL_SAMPLER_2D_RECT_SHADOW}   {@see GL46::sampler2DRectShadow}     {@see GL46::GL_INT_SAMPLER_1D}
     * {@see GL46::isampler1D}     {@see GL46::GL_INT_SAMPLER_2D}   {@see GL46::isampler2D}
     * {@see GL46::GL_INT_SAMPLER_3D}   {@see GL46::isampler3D}     {@see GL46::GL_INT_SAMPLER_CUBE}
     * {@see GL46::isamplerCube}     {@see GL46::GL_INT_SAMPLER_1D_ARRAY}   {@see GL46::isampler1DArray}
     * {@see GL46::GL_INT_SAMPLER_2D_ARRAY}   {@see GL46::isampler2DArray}
     * {@see GL46::GL_INT_SAMPLER_2D_MULTISAMPLE}   {@see GL46::isampler2DMS}
     * {@see GL46::GL_INT_SAMPLER_2D_MULTISAMPLE_ARRAY}   {@see GL46::isampler2DMSArray}
     * {@see GL46::GL_INT_SAMPLER_BUFFER}   {@see GL46::isamplerBuffer}     {@see GL46::GL_INT_SAMPLER_2D_RECT}
     * {@see GL46::isampler2DRect}     {@see GL46::GL_UNSIGNED_INT_SAMPLER_1D}   {@see GL46::usampler1D}
     * {@see GL46::GL_UNSIGNED_INT_SAMPLER_2D}   {@see GL46::usampler2D}     {@see GL46::GL_UNSIGNED_INT_SAMPLER_3D}
     *  {@see GL46::usampler3D}     {@see GL46::GL_UNSIGNED_INT_SAMPLER_CUBE}   {@see GL46::usamplerCube}
     * {@see GL46::GL_UNSIGNED_INT_SAMPLER_1D_ARRAY}   {@see GL46::usampler2DArray}
     * {@see GL46::GL_UNSIGNED_INT_SAMPLER_2D_ARRAY}   {@see GL46::usampler2DArray}
     * {@see GL46::GL_UNSIGNED_INT_SAMPLER_2D_MULTISAMPLE}   {@see GL46::usampler2DMS}
     * {@see GL46::GL_UNSIGNED_INT_SAMPLER_2D_MULTISAMPLE_ARRAY}   {@see GL46::usampler2DMSArray}
     * {@see GL46::GL_UNSIGNED_INT_SAMPLER_BUFFER}   {@see GL46::usamplerBuffer}
     * {@see GL46::GL_UNSIGNED_INT_SAMPLER_2D_RECT}   {@see GL46::usampler2DRect}     {@see GL46::GL_IMAGE_1D}
     * {@see GL46::image1D}     {@see GL46::GL_IMAGE_2D}   {@see GL46::image2D}     {@see GL46::GL_IMAGE_3D}
     * {@see GL46::image3D}     {@see GL46::GL_IMAGE_2D_RECT}   {@see GL46::image2DRect}
     * {@see GL46::GL_IMAGE_CUBE}   {@see GL46::imageCube}     {@see GL46::GL_IMAGE_BUFFER}
     * {@see GL46::imageBuffer}     {@see GL46::GL_IMAGE_1D_ARRAY}   {@see GL46::image1DArray}
     * {@see GL46::GL_IMAGE_2D_ARRAY}   {@see GL46::image2DArray}     {@see GL46::GL_IMAGE_2D_MULTISAMPLE}
     * {@see GL46::image2DMS}     {@see GL46::GL_IMAGE_2D_MULTISAMPLE_ARRAY}   {@see GL46::image2DMSArray}
     * {@see GL46::GL_INT_IMAGE_1D}   {@see GL46::iimage1D}     {@see GL46::GL_INT_IMAGE_2D}   {@see GL46::iimage2D}
     *    {@see GL46::GL_INT_IMAGE_3D}   {@see GL46::iimage3D}     {@see GL46::GL_INT_IMAGE_2D_RECT}
     * {@see GL46::iimage2DRect}     {@see GL46::GL_INT_IMAGE_CUBE}   {@see GL46::iimageCube}
     * {@see GL46::GL_INT_IMAGE_BUFFER}   {@see GL46::iimageBuffer}     {@see GL46::GL_INT_IMAGE_1D_ARRAY}
     * {@see GL46::iimage1DArray}     {@see GL46::GL_INT_IMAGE_2D_ARRAY}   {@see GL46::iimage2DArray}
     * {@see GL46::GL_INT_IMAGE_2D_MULTISAMPLE}   {@see GL46::iimage2DMS}
     * {@see GL46::GL_INT_IMAGE_2D_MULTISAMPLE_ARRAY}   {@see GL46::iimage2DMSArray}
     * {@see GL46::GL_UNSIGNED_INT_IMAGE_1D}   {@see GL46::uimage1D}     {@see GL46::GL_UNSIGNED_INT_IMAGE_2D}
     * {@see GL46::uimage2D}     {@see GL46::GL_UNSIGNED_INT_IMAGE_3D}   {@see GL46::uimage3D}
     * {@see GL46::GL_UNSIGNED_INT_IMAGE_2D_RECT}   {@see GL46::uimage2DRect}
     * {@see GL46::GL_UNSIGNED_INT_IMAGE_CUBE}   {@see GL46::uimageCube}
     * {@see GL46::GL_UNSIGNED_INT_IMAGE_BUFFER}   {@see GL46::uimageBuffer}
     * {@see GL46::GL_UNSIGNED_INT_IMAGE_1D_ARRAY}   {@see GL46::uimage1DArray}
     * {@see GL46::GL_UNSIGNED_INT_IMAGE_2D_ARRAY}   {@see GL46::uimage2DArray}
     * {@see GL46::GL_UNSIGNED_INT_IMAGE_2D_MULTISAMPLE}   {@see GL46::uimage2DMS}
     * {@see GL46::GL_UNSIGNED_INT_IMAGE_2D_MULTISAMPLE_ARRAY}   {@see GL46::uimage2DMSArray}
     * {@see GL46::GL_UNSIGNED_INT_ATOMIC_COUNTER}   {@see GL46::atomic_uint}
     *
     * If one or more elements of an array are active, the name of the array is returned in $name, the type is
     * returned in $type, and the $size parameter returns the highest array element index used, plus one, as
     * determined by the compiler and/or linker. Only one active uniform variable will be reported for a uniform
     * array.
     *
     * Uniform variables that are declared as structures or arrays of structures will not be returned directly by
     * this function. Instead, each of these uniform variables will be reduced to its fundamental components
     * containing the "." and "[]" operators such that each of the names is valid as an argument to
     * {@see GL46::glGetUniformLocation}. Each of these reduced uniform variables is counted as one active uniform
     * variable and is assigned an index. A valid name cannot be a structure, an array of structures, or a
     * subcomponent of a vector or matrix.
     *
     * The size of the uniform variable will be returned in $size. Uniform variables other than arrays will have a
     * size of 1. Structures and arrays of structures will be reduced as described earlier, such that each of the
     * names returned will be a data type in the earlier list. If this reduction results in an array, the size
     * returned will be as described for uniform arrays; otherwise, the size returned will be 1.
     *
     * The list of active uniform variables may include both built-in uniform variables (which begin with the prefix
     * "gl_") as well as user-defined uniform variable names.
     *
     * This function will return as much information as it can about the specified active uniform variable. If no
     * information is available, $length will be 0, and $name will be an empty string. This situation could occur if
     * this function is called after a link operation that failed. If an error occurs, the return values $length,
     * $size, $type, and $name will be unmodified.
     *
     * @see http://docs.gl/gl2/glGetActiveUniform
     * @see http://docs.gl/gl4/glGetActiveUniform
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param int|\FFI\CData|\FFI\CInt $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @param \FFI\CData|\FFI\CIntPtr|null $size
     * @param \FFI\CData|\FFI\CIntPtr|null $type
     * @param \FFI\CData|\FFI\CIntPtr|null $name
     * @return void
     */
    public function getActiveUniform($program, $index, $bufSize, ?\FFI\CData $length, ?\FFI\CData $size, ?\FFI\CData $type, ?\FFI\CData $name): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $bufSize = $bufSize instanceof \FFI\CData ? $bufSize->cdata : $bufSize;

        assert(Type::isUint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isInt16($bufSize), 'Argument $bufSize must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetActiveUniform', 'void (*)(GLuint program, GLuint index, GLsizei bufSize, GLsizei *length, GLint *size, GLenum *type, GLchar *name)');
        $proc($program, $index, $bufSize, $length, $size, $type, $name);
    }

    /**
     * {@see GL46::glGetAttachedShaders} returns the names of the shader objects attached to $program. The names of
     * shader objects that are attached to $program will be returned in $shaders. The actual number of shader names
     * written into $shaders is returned in $count. If no shader objects are attached to $program, $count is set to
     * 0. The maximum number of shader names that may be returned in $shaders is specified by $maxCount.
     *
     * If the number of names actually returned is not required (for instance, if it has just been obtained by
     * calling {@see GL46::glGetProgram}), a value of {@see GL46::NULL} may be passed for count. If no shader objects
     * are attached to $program, a value of 0 will be returned in $count. The actual number of attached shaders can
     * be obtained by calling {@see GL46::glGetProgram} with the value {@see GL46::GL_ATTACHED_SHADERS}.
     *
     * @see http://docs.gl/gl2/glGetAttachedShaders
     * @see http://docs.gl/gl4/glGetAttachedShaders
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $maxCount
     * @param \FFI\CData|\FFI\CIntPtr|null $count
     * @param \FFI\CData|\FFI\CIntPtr|null $shaders
     * @return void
     */
    public function getAttachedShaders($program, $maxCount, ?\FFI\CData $count, ?\FFI\CData $shaders): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $maxCount = $maxCount instanceof \FFI\CData ? $maxCount->cdata : $maxCount;

        assert(Type::isUint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isInt16($maxCount), 'Argument $maxCount must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetAttachedShaders', 'void (*)(GLuint program, GLsizei maxCount, GLsizei *count, GLuint *shaders)');
        $proc($program, $maxCount, $count, $shaders);
    }

    /**
     * {@see GL46::glGetAttribLocation} queries the previously linked program object specified by $program for the
     * attribute variable specified by $name and returns the index of the generic vertex attribute that is bound to
     * that attribute variable. If $name is a matrix attribute variable, the index of the first column of the matrix
     * is returned. If the named attribute variable is not an active attribute in the specified program object or if
     * $name starts with the reserved prefix "gl_", a value of -1 is returned.
     *
     * The association between an attribute variable name and a generic attribute index can be specified at any time
     * by calling {@see GL46::glBindAttribLocation}. Attribute bindings do not go into effect until
     * {@see GL46::glLinkProgram} is called. After a program object has been linked successfully, the index values
     * for attribute variables remain fixed until the next link command occurs. The attribute values can only be
     * queried after a link if the link was successful. {@see GL46::glGetAttribLocation} returns the binding that
     * actually went into effect the last time {@see GL46::glLinkProgram} was called for the specified program
     * object. Attribute bindings that have been specified since the last link operation are not returned by
     * {@see GL46::glGetAttribLocation}.
     *
     * @see http://docs.gl/gl2/glGetAttribLocation
     * @see http://docs.gl/gl4/glGetAttribLocation
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param \FFI\CData|\FFI\CIntPtr|null $name
     * @return int|\FFI\CData|\FFI\CInt
     */
    public function getAttribLocation($program, ?\FFI\CData $name): int
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;

        assert(Type::isUint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetAttribLocation', 'GLint (*)(GLuint program, const GLchar *name)');
        return $proc($program, $name);
    }

    /**
     * {@see GL46::glGetProgram} returns in $params the value of a parameter for a specific program object. The
     * following parameters are defined:
     *
     *  - {@see GL46::GL_DELETE_STATUS}: $params returns {@see GL46::GL_TRUE} if
     *    $program is currently flagged for deletion, and
     *    {@see GL46::GL_FALSE} otherwise.
     *
     *  - {@see GL46::GL_LINK_STATUS}: $params returns {@see GL46::GL_TRUE} if
     *    the last link operation on $program was successful, and
     *    {@see GL46::GL_FALSE} otherwise.
     *
     *  - {@see GL46::GL_VALIDATE_STATUS}: $params returns {@see GL46::GL_TRUE}
     *    or if the last validation operation on $program was successful, and
     *    {@see GL46::GL_FALSE} otherwise.
     *
     *  - {@see GL46::GL_INFO_LOG_LENGTH}: $params returns the number of
     *    characters in the information log for $program including the null
     *    termination
     *    character (i.e., the size of the character buffer required to store
     *    the information log). If $program has no
     *    information log, a value of 0 is returned.
     *
     *  - {@see GL46::GL_ATTACHED_SHADERS}: $params returns the number of shader
     *    objects attached to $program.
     *
     *  - {@see GL46::GL_ACTIVE_ATOMIC_COUNTER_BUFFERS}: $params returns the
     *    number of active attribute atomic counter buffers used by $program.
     *
     *  - {@see GL46::GL_ACTIVE_ATTRIBUTES}: $params returns the number of
     *    active attribute variables for $program.
     *
     *  - {@see GL46::GL_ACTIVE_ATTRIBUTE_MAX_LENGTH}: $params returns the
     *    length of the longest active attribute name for $program, including
     *    the null
     *    termination character (i.e., the size of the character buffer required
     *    to store the longest attribute name).
     *    If no active attributes exist, 0 is returned.
     *
     *  - {@see GL46::GL_ACTIVE_UNIFORMS}: $params returns the number of active
     *    uniform variables for $program.
     *
     *  - {@see GL46::GL_ACTIVE_UNIFORM_MAX_LENGTH}: $params returns the length
     *    of the longest active uniform variable name for $program, including
     *    the null
     *    termination character (i.e., the size of the character buffer required
     *    to store the longest uniform variable
     *    name). If no active uniform variables exist, 0 is returned.
     *
     *  - {@see GL46::GL_PROGRAM_BINARY_LENGTH}: $params returns the length of
     *    the program binary, in bytes that will be returned by a call to
     *    {@see GL46::glGetProgramBinary}. When a progam's {@see
     *    GL46::GL_LINK_STATUS} is {@see GL46::GL_FALSE}, its
     *    program binary length is zero.
     *
     *  - {@see GL46::GL_COMPUTE_WORK_GROUP_SIZE}: $params returns an array of
     *    three integers containing the local work group size of the compute
     *    program as
     *    specified by its input layout qualifier(s). $program must be the name
     *    of a program object that has been
     *    previously linked successfully and contains a binary for the compute
     *    shader stage.
     *
     *  - {@see GL46::GL_TRANSFORM_FEEDBACK_BUFFER_MODE}: $params returns a
     *    symbolic constant indicating the buffer mode used when transform
     *    feedback is active. This
     *    may be {@see GL46::GL_SEPARATE_ATTRIBS} or {@see
     *    GL46::GL_INTERLEAVED_ATTRIBS}.
     *
     *  - {@see GL46::GL_TRANSFORM_FEEDBACK_VARYINGS}: $params returns the
     *    number of varying variables to capture in transform feedback mode for
     *    the program.
     *
     *  - {@see GL46::GL_TRANSFORM_FEEDBACK_VARYING_MAX_LENGTH}: $params returns
     *    the length of the longest variable name to be used for transform
     *    feedback, including the
     *    null-terminator.
     *
     *  - {@see GL46::GL_GEOMETRY_VERTICES_OUT}: $params returns the maximum
     *    number of vertices that the geometry shader in $program will output.
     *
     *  - {@see GL46::GL_GEOMETRY_INPUT_TYPE}: $params returns a symbolic
     *    constant indicating the primitive type accepted as input to the
     *    geometry shader
     *    contained in $program.
     *
     *  - {@see GL46::GL_GEOMETRY_OUTPUT_TYPE}: $params returns a symbolic
     *    constant indicating the primitive type that will be output by the
     *    geometry
     *    shader contained in $program.
     *
     * @see http://docs.gl/gl2/glGetProgram
     * @see http://docs.gl/gl4/glGetProgram
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public function getProgramiv($program, $pname, ?\FFI\CData $params): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;

        assert(Type::isUint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetProgramiv', 'void (*)(GLuint program, GLenum pname, GLint *params)');
        $proc($program, $pname, $params);
    }

    /**
     * {@see GL46::glGetProgramInfoLog} returns the information log for the specified program object. The information
     * log for a program object is modified when the program object is linked or validated. The string that is
     * returned will be null terminated.
     *
     * {@see GL46::glGetProgramInfoLog} returns in $infoLog as much of the information log as it can, up to a maximum
     * of $maxLength characters. The number of characters actually returned, excluding the null termination
     * character, is specified by $length. If the length of the returned string is not required, a value of
     * {@see GL46::NULL} can be passed in the $length argument. The size of the buffer required to store the returned
     * information log can be obtained by calling {@see GL46::glGetProgram} with the value
     * {@see GL46::GL_INFO_LOG_LENGTH}.
     *
     * The information log for a program object is either an empty string, or a string containing information about
     * the last link operation, or a string containing information about the last validation operation. It may
     * contain diagnostic messages, warning messages, and other information. When a program object is created, its
     * information log will be a string of length 0.
     *
     * @see http://docs.gl/gl2/glGetProgramInfoLog
     * @see http://docs.gl/gl4/glGetProgramInfoLog
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @param \FFI\CData|\FFI\CIntPtr|null $infoLog
     * @return void
     */
    public function getProgramInfoLog($program, $bufSize, ?\FFI\CData $length, ?\FFI\CData $infoLog): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $bufSize = $bufSize instanceof \FFI\CData ? $bufSize->cdata : $bufSize;

        assert(Type::isUint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isInt16($bufSize), 'Argument $bufSize must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetProgramInfoLog', 'void (*)(GLuint program, GLsizei bufSize, GLsizei *length, GLchar *infoLog)');
        $proc($program, $bufSize, $length, $infoLog);
    }

    /**
     * {@see GL46::glGetShader} returns in $params the value of a parameter for a specific shader object. The
     * following parameters are defined:
     *
     *  - {@see GL46::GL_SHADER_TYPE}: $params returns {@see
     *    GL46::GL_VERTEX_SHADER} if $shader is a vertex shader object,
     *    {@see GL46::GL_GEOMETRY_SHADER} if $shader is a geometry shader
     *    object, and {@see GL46::GL_FRAGMENT_SHADER} if
     *    $shader is a fragment shader object.
     *
     *  - {@see GL46::GL_DELETE_STATUS}: $params returns {@see GL46::GL_TRUE} if
     *    $shader is currently flagged for deletion, and {@see GL46::GL_FALSE}
     *    otherwise.
     *
     *  - {@see GL46::GL_COMPILE_STATUS}: $params returns {@see GL46::GL_TRUE}
     *    if the last compile operation on $shader was successful, and
     *    {@see GL46::GL_FALSE} otherwise.
     *
     *  - {@see GL46::GL_INFO_LOG_LENGTH}: $params returns the number of
     *    characters in the information log for $shader including the null
     *    termination
     *    character (i.e., the size of the character buffer required to store
     *    the information log). If $shader has no
     *    information log, a value of 0 is returned.
     *
     *  - {@see GL46::GL_SHADER_SOURCE_LENGTH}: $params returns the length of
     *    the concatenation of the source strings that make up the shader source
     *    for the
     *    $shader, including the null termination character. (i.e., the size of
     *    the character buffer required to store
     *    the shader source). If no source code exists, 0 is returned.
     *
     * @see http://docs.gl/gl2/glGetShader
     * @see http://docs.gl/gl4/glGetShader
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $shader
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public function getShaderiv($shader, $pname, ?\FFI\CData $params): void
    {
        $shader = $shader instanceof \FFI\CData ? $shader->cdata : $shader;
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;

        assert(Type::isUint16($shader), 'Argument $shader must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetShaderiv', 'void (*)(GLuint shader, GLenum pname, GLint *params)');
        $proc($shader, $pname, $params);
    }

    /**
     * {@see GL46::glGetShaderInfoLog} returns the information log for the specified shader object. The information
     * log for a shader object is modified when the shader is compiled. The string that is returned will be null
     * terminated.
     *
     * {@see GL46::glGetShaderInfoLog} returns in $infoLog as much of the information log as it can, up to a maximum
     * of $maxLength characters. The number of characters actually returned, excluding the null termination
     * character, is specified by $length. If the length of the returned string is not required, a value of
     * {@see GL46::NULL} can be passed in the $length argument. The size of the buffer required to store the returned
     * information log can be obtained by calling {@see GL46::glGetShader} with the value
     * {@see GL46::GL_INFO_LOG_LENGTH}.
     *
     * The information log for a shader object is a string that may contain diagnostic messages, warning messages,
     * and other information about the last compile operation. When a shader object is created, its information log
     * will be a string of length 0.
     *
     * @see http://docs.gl/gl2/glGetShaderInfoLog
     * @see http://docs.gl/gl4/glGetShaderInfoLog
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $shader
     * @param int|\FFI\CData|\FFI\CInt $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @param \FFI\CData|\FFI\CIntPtr|null $infoLog
     * @return void
     */
    public function getShaderInfoLog($shader, $bufSize, ?\FFI\CData $length, ?\FFI\CData $infoLog): void
    {
        $shader = $shader instanceof \FFI\CData ? $shader->cdata : $shader;
        $bufSize = $bufSize instanceof \FFI\CData ? $bufSize->cdata : $bufSize;

        assert(Type::isUint16($shader), 'Argument $shader must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isInt16($bufSize), 'Argument $bufSize must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetShaderInfoLog', 'void (*)(GLuint shader, GLsizei bufSize, GLsizei *length, GLchar *infoLog)');
        $proc($shader, $bufSize, $length, $infoLog);
    }

    /**
     * {@see GL46::glGetShaderSource} returns the concatenation of the source code strings from the shader object
     * specified by $shader. The source code strings for a shader object are the result of a previous call to
     * {@see GL46::glShaderSource}. The string returned by the function will be null terminated.
     *
     * {@see GL46::glGetShaderSource} returns in $source as much of the source code string as it can, up to a maximum
     * of $bufSize characters. The number of characters actually returned, excluding the null termination character,
     * is specified by $length. If the length of the returned string is not required, a value of {@see GL46::NULL}
     * can be passed in the $length argument. The size of the buffer required to store the returned source code
     * string can be obtained by calling {@see GL46::glGetShader} with the value
     * {@see GL46::GL_SHADER_SOURCE_LENGTH}.
     *
     * @see http://docs.gl/gl2/glGetShaderSource
     * @see http://docs.gl/gl4/glGetShaderSource
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $shader
     * @param int|\FFI\CData|\FFI\CInt $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @param \FFI\CData|\FFI\CIntPtr|null $source
     * @return void
     */
    public function getShaderSource($shader, $bufSize, ?\FFI\CData $length, ?\FFI\CData $source): void
    {
        $shader = $shader instanceof \FFI\CData ? $shader->cdata : $shader;
        $bufSize = $bufSize instanceof \FFI\CData ? $bufSize->cdata : $bufSize;

        assert(Type::isUint16($shader), 'Argument $shader must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isInt16($bufSize), 'Argument $bufSize must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetShaderSource', 'void (*)(GLuint shader, GLsizei bufSize, GLsizei *length, GLchar *source)');
        $proc($shader, $bufSize, $length, $source);
    }

    /**
     * {@see GL46::glGetUniformLocation } returns an integer that represents the location of a specific uniform
     * variable within a program object. $name must be a null terminated string that contains no white space. $name
     * must be an active uniform variable name in $program that is not a structure, an array of structures, or a
     * subcomponent of a vector or a matrix. This function returns -1 if $name does not correspond to an active
     * uniform variable in $program, if $name starts with the reserved prefix "gl_", or if $name is associated with
     * an atomic counter or a named uniform block.
     *
     * Uniform variables that are structures or arrays of structures may be queried by calling
     * {@see GL46::glGetUniformLocation} for each field within the structure. The array element operator "[]" and the
     * structure field operator "." may be used in $name in order to select elements within an array or fields within
     * a structure. The result of using these operators is not allowed to be another structure, an array of
     * structures, or a subcomponent of a vector or a matrix. Except if the last part of $name indicates a uniform
     * variable array, the location of the first element of an array can be retrieved by using the name of the array,
     * or by using the name appended by "[0]".
     *
     * The actual locations assigned to uniform variables are not known until the program object is linked
     * successfully. After linking has occurred, the command {@see GL46::glGetUniformLocation} can be used to obtain
     * the location of a uniform variable. This location value can then be passed to {@see GL46::glUniform} to set
     * the value of the uniform variable or to {@see GL46::glGetUniform} in order to query the current value of the
     * uniform variable. After a program object has been linked successfully, the index values for uniform variables
     * remain fixed until the next link command occurs. Uniform variable locations and values can only be queried
     * after a link if the link was successful.
     *
     * @see http://docs.gl/gl2/glGetUniformLocation
     * @see http://docs.gl/gl4/glGetUniformLocation
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param \FFI\CData|\FFI\CIntPtr|null $name
     * @return int|\FFI\CData|\FFI\CInt
     */
    public function getUniformLocation($program, ?\FFI\CData $name): int
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;

        assert(Type::isUint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetUniformLocation', 'GLint (*)(GLuint program, const GLchar *name)');
        return $proc($program, $name);
    }

    /**
     * {@see GL46::glGetUniform} and {@see GL46::glGetnUniform} return in $params the value(s) of the specified
     * uniform variable. The type of the uniform variable specified by $location determines the number of values
     * returned. If the uniform variable is defined in the shader as a boolean, int, or float, a single value will be
     * returned. If it is defined as a vec2, ivec2, or bvec2, two values will be returned. If it is defined as a
     * vec3, ivec3, or bvec3, three values will be returned, and so on. To query values stored in uniform variables
     * declared as arrays, call {@see GL46::glGetUniform} for each element of the array. To query values stored in
     * uniform variables declared as structures, call {@see GL46::glGetUniform} for each field in the structure. The
     * values for uniform variables declared as a matrix will be returned in column major order.
     *
     * The locations assigned to uniform variables are not known until the program object is linked. After linking
     * has occurred, the command {@see GL46::glGetUniformLocation} can be used to obtain the location of a uniform
     * variable. This location value can then be passed to {@see GL46::glGetUniform} or {@see GL46::glGetnUniform} in
     * order to query the current value of the uniform variable. After a program object has been linked successfully,
     * the index values for uniform variables remain fixed until the next link command occurs. The uniform variable
     * values can only be queried after a link if the link was successful.
     *
     * The only difference between {@see GL46::glGetUniform} and {@see GL46::glGetnUniform} is that
     * {@see GL46::glGetnUniform} will generate an error if size of the $params buffer,as described by $bufSize, is
     * not large enough to hold the result data.
     *
     * @see http://docs.gl/gl2/glGetUniform
     * @see http://docs.gl/gl4/glGetUniform
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param \FFI\CData|\FFI\CFloatPtr|null $params
     * @return void
     */
    public function getUniformfv($program, $location, ?\FFI\CData $params): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;

        assert(Type::isUint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isInt16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetUniformfv', 'void (*)(GLuint program, GLint location, GLfloat *params)');
        $proc($program, $location, $params);
    }

    /**
     * {@see GL46::glGetUniform} and {@see GL46::glGetnUniform} return in $params the value(s) of the specified
     * uniform variable. The type of the uniform variable specified by $location determines the number of values
     * returned. If the uniform variable is defined in the shader as a boolean, int, or float, a single value will be
     * returned. If it is defined as a vec2, ivec2, or bvec2, two values will be returned. If it is defined as a
     * vec3, ivec3, or bvec3, three values will be returned, and so on. To query values stored in uniform variables
     * declared as arrays, call {@see GL46::glGetUniform} for each element of the array. To query values stored in
     * uniform variables declared as structures, call {@see GL46::glGetUniform} for each field in the structure. The
     * values for uniform variables declared as a matrix will be returned in column major order.
     *
     * The locations assigned to uniform variables are not known until the program object is linked. After linking
     * has occurred, the command {@see GL46::glGetUniformLocation} can be used to obtain the location of a uniform
     * variable. This location value can then be passed to {@see GL46::glGetUniform} or {@see GL46::glGetnUniform} in
     * order to query the current value of the uniform variable. After a program object has been linked successfully,
     * the index values for uniform variables remain fixed until the next link command occurs. The uniform variable
     * values can only be queried after a link if the link was successful.
     *
     * The only difference between {@see GL46::glGetUniform} and {@see GL46::glGetnUniform} is that
     * {@see GL46::glGetnUniform} will generate an error if size of the $params buffer,as described by $bufSize, is
     * not large enough to hold the result data.
     *
     * @see http://docs.gl/gl2/glGetUniform
     * @see http://docs.gl/gl4/glGetUniform
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public function getUniformiv($program, $location, ?\FFI\CData $params): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;

        assert(Type::isUint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isInt16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetUniformiv', 'void (*)(GLuint program, GLint location, GLint *params)');
        $proc($program, $location, $params);
    }

    /**
     * {@see GL46::glGetVertexAttrib} returns in $params the value of a generic vertex attribute parameter. The
     * generic vertex attribute to be queried is specified by $index, and the parameter to be queried is specified by
     * $pname.
     *
     * The accepted parameter names are as follows:
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_BUFFER_BINDING}: $params returns a
     *    single value, the name of the buffer object currently bound to the
     *    binding point
     *    corresponding to generic vertex attribute array $index. If no buffer
     *    object is bound, 0 is returned. The
     *    initial value is 0.
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_ENABLED}: $params returns a single
     *    value that is non-zero (true) if the vertex attribute array for $index
     *    is enabled
     *    and 0 (false) if it is disabled. The initial value is {@see
     *    GL46::GL_FALSE}.
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_SIZE}: $params returns a single
     *    value, the size of the vertex attribute array for $index. The size is
     *    the number
     *    of values for each element of the vertex attribute array, and it will
     *    be 1, 2, 3, or 4. The initial value is
     *    4.
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_STRIDE}: $params returns a single
     *    value, the array stride for (number of bytes between successive
     *    elements in) the
     *    vertex attribute array for $index. A value of 0 indicates that the
     *    array elements are stored sequentially in
     *    memory. The initial value is 0.
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_TYPE}: $params returns a single
     *    value, a symbolic constant indicating the array type for the vertex
     *    attribute
     *    array for $index. Possible values are {@see GL46::GL_BYTE}, {@see
     *    GL46::GL_UNSIGNED_BYTE},
     *    {@see GL46::GL_SHORT}, {@see GL46::GL_UNSIGNED_SHORT}, {@see
     *    GL46::GL_INT}, {@see GL46::GL_UNSIGNED_INT},
     *    {@see GL46::GL_FLOAT}, and {@see GL46::GL_DOUBLE}. The initial value
     *    is {@see GL46::GL_FLOAT}.
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_NORMALIZED}: $params returns a
     *    single value that is non-zero (true) if fixed-point data types for the
     *    vertex attribute
     *    array indicated by $index are normalized when they are converted to
     *    floating point, and 0 (false) otherwise.
     *    The initial value is {@see GL46::GL_FALSE}.
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_INTEGER}: $params returns a single
     *    value that is non-zero (true) if fixed-point data types for the vertex
     *    attribute
     *    array indicated by $index have integer data types, and 0 (false)
     *    otherwise. The initial value is 0
     *    ({@see GL46::GL_FALSE}).
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_LONG}: $param returns a single
     *    value that is non-zero (true) if a vertex attribute is stored as an
     *    unconverted
     *    double, and 0 (false) otherwise. The initial value is 0 ({@see
     *    GL46::GL_FALSE}).
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_DIVISOR}: $params returns a single
     *    value that is the frequency divisor used for instanced rendering. See
     *    {@see GL46::glVertexAttribDivisor}. The initial value is 0.
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_BINDING}: $params returns a single value,
     *    the vertex buffer binding of the vertex attribute array $index.
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_RELATIVE_OFFSET}: $params returns a
     *    single value that is the byte offset of the first element relative to
     *    the start of the
     *    vertex buffer binding specified attribute fetches from. The initial
     *    value is 0.
     *
     *  - {@see GL46::GL_CURRENT_VERTEX_ATTRIB}: $params returns four values
     *    that represent the current value for the generic vertex attribute
     *    specified by
     *    index. Generic vertex attribute 0 is unique in that it has no current
     *    state, so an error will be generated if
     *    $index is 0. The initial value for all other generic vertex attributes
     *    is (0,0,0,1).
     *    {@see GL46::glGetVertexAttribdv} and {@see GL46::glGetVertexAttribfv}
     *    return the current attribute values as
     *    four single-precision floating-point values; {@see
     *    GL46::glGetVertexAttribiv} reads them as floating-point
     *    values and converts them to four integer values; {@see
     *    GL46::glGetVertexAttribIiv} and
     *    {@see GL46::glGetVertexAttribIuiv} read and return them as signed or
     *    unsigned integer values, respectively;
     *    {@see GL46::glGetVertexAttribLdv} reads and returns them as four
     *    double-precision floating-point values.
     *
     * All of the parameters except {@see GL46::GL_CURRENT_VERTEX_ATTRIB} represent state stored in the currently
     * bound vertex array object.
     *
     * @see http://docs.gl/gl2/glGetVertexAttrib
     * @see http://docs.gl/gl4/glGetVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param \FFI\CData|\FFI\CFloatPtr|null $params
     * @return void
     */
    public function getVertexAttribdv($index, $pname, ?\FFI\CData $params): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetVertexAttribdv', 'void (*)(GLuint index, GLenum pname, GLdouble *params)');
        $proc($index, $pname, $params);
    }

    /**
     * {@see GL46::glGetVertexAttrib} returns in $params the value of a generic vertex attribute parameter. The
     * generic vertex attribute to be queried is specified by $index, and the parameter to be queried is specified by
     * $pname.
     *
     * The accepted parameter names are as follows:
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_BUFFER_BINDING}: $params returns a
     *    single value, the name of the buffer object currently bound to the
     *    binding point
     *    corresponding to generic vertex attribute array $index. If no buffer
     *    object is bound, 0 is returned. The
     *    initial value is 0.
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_ENABLED}: $params returns a single
     *    value that is non-zero (true) if the vertex attribute array for $index
     *    is enabled
     *    and 0 (false) if it is disabled. The initial value is {@see
     *    GL46::GL_FALSE}.
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_SIZE}: $params returns a single
     *    value, the size of the vertex attribute array for $index. The size is
     *    the number
     *    of values for each element of the vertex attribute array, and it will
     *    be 1, 2, 3, or 4. The initial value is
     *    4.
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_STRIDE}: $params returns a single
     *    value, the array stride for (number of bytes between successive
     *    elements in) the
     *    vertex attribute array for $index. A value of 0 indicates that the
     *    array elements are stored sequentially in
     *    memory. The initial value is 0.
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_TYPE}: $params returns a single
     *    value, a symbolic constant indicating the array type for the vertex
     *    attribute
     *    array for $index. Possible values are {@see GL46::GL_BYTE}, {@see
     *    GL46::GL_UNSIGNED_BYTE},
     *    {@see GL46::GL_SHORT}, {@see GL46::GL_UNSIGNED_SHORT}, {@see
     *    GL46::GL_INT}, {@see GL46::GL_UNSIGNED_INT},
     *    {@see GL46::GL_FLOAT}, and {@see GL46::GL_DOUBLE}. The initial value
     *    is {@see GL46::GL_FLOAT}.
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_NORMALIZED}: $params returns a
     *    single value that is non-zero (true) if fixed-point data types for the
     *    vertex attribute
     *    array indicated by $index are normalized when they are converted to
     *    floating point, and 0 (false) otherwise.
     *    The initial value is {@see GL46::GL_FALSE}.
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_INTEGER}: $params returns a single
     *    value that is non-zero (true) if fixed-point data types for the vertex
     *    attribute
     *    array indicated by $index have integer data types, and 0 (false)
     *    otherwise. The initial value is 0
     *    ({@see GL46::GL_FALSE}).
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_LONG}: $param returns a single
     *    value that is non-zero (true) if a vertex attribute is stored as an
     *    unconverted
     *    double, and 0 (false) otherwise. The initial value is 0 ({@see
     *    GL46::GL_FALSE}).
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_DIVISOR}: $params returns a single
     *    value that is the frequency divisor used for instanced rendering. See
     *    {@see GL46::glVertexAttribDivisor}. The initial value is 0.
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_BINDING}: $params returns a single value,
     *    the vertex buffer binding of the vertex attribute array $index.
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_RELATIVE_OFFSET}: $params returns a
     *    single value that is the byte offset of the first element relative to
     *    the start of the
     *    vertex buffer binding specified attribute fetches from. The initial
     *    value is 0.
     *
     *  - {@see GL46::GL_CURRENT_VERTEX_ATTRIB}: $params returns four values
     *    that represent the current value for the generic vertex attribute
     *    specified by
     *    index. Generic vertex attribute 0 is unique in that it has no current
     *    state, so an error will be generated if
     *    $index is 0. The initial value for all other generic vertex attributes
     *    is (0,0,0,1).
     *    {@see GL46::glGetVertexAttribdv} and {@see GL46::glGetVertexAttribfv}
     *    return the current attribute values as
     *    four single-precision floating-point values; {@see
     *    GL46::glGetVertexAttribiv} reads them as floating-point
     *    values and converts them to four integer values; {@see
     *    GL46::glGetVertexAttribIiv} and
     *    {@see GL46::glGetVertexAttribIuiv} read and return them as signed or
     *    unsigned integer values, respectively;
     *    {@see GL46::glGetVertexAttribLdv} reads and returns them as four
     *    double-precision floating-point values.
     *
     * All of the parameters except {@see GL46::GL_CURRENT_VERTEX_ATTRIB} represent state stored in the currently
     * bound vertex array object.
     *
     * @see http://docs.gl/gl2/glGetVertexAttrib
     * @see http://docs.gl/gl4/glGetVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param \FFI\CData|\FFI\CFloatPtr|null $params
     * @return void
     */
    public function getVertexAttribfv($index, $pname, ?\FFI\CData $params): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetVertexAttribfv', 'void (*)(GLuint index, GLenum pname, GLfloat *params)');
        $proc($index, $pname, $params);
    }

    /**
     * {@see GL46::glGetVertexAttrib} returns in $params the value of a generic vertex attribute parameter. The
     * generic vertex attribute to be queried is specified by $index, and the parameter to be queried is specified by
     * $pname.
     *
     * The accepted parameter names are as follows:
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_BUFFER_BINDING}: $params returns a
     *    single value, the name of the buffer object currently bound to the
     *    binding point
     *    corresponding to generic vertex attribute array $index. If no buffer
     *    object is bound, 0 is returned. The
     *    initial value is 0.
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_ENABLED}: $params returns a single
     *    value that is non-zero (true) if the vertex attribute array for $index
     *    is enabled
     *    and 0 (false) if it is disabled. The initial value is {@see
     *    GL46::GL_FALSE}.
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_SIZE}: $params returns a single
     *    value, the size of the vertex attribute array for $index. The size is
     *    the number
     *    of values for each element of the vertex attribute array, and it will
     *    be 1, 2, 3, or 4. The initial value is
     *    4.
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_STRIDE}: $params returns a single
     *    value, the array stride for (number of bytes between successive
     *    elements in) the
     *    vertex attribute array for $index. A value of 0 indicates that the
     *    array elements are stored sequentially in
     *    memory. The initial value is 0.
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_TYPE}: $params returns a single
     *    value, a symbolic constant indicating the array type for the vertex
     *    attribute
     *    array for $index. Possible values are {@see GL46::GL_BYTE}, {@see
     *    GL46::GL_UNSIGNED_BYTE},
     *    {@see GL46::GL_SHORT}, {@see GL46::GL_UNSIGNED_SHORT}, {@see
     *    GL46::GL_INT}, {@see GL46::GL_UNSIGNED_INT},
     *    {@see GL46::GL_FLOAT}, and {@see GL46::GL_DOUBLE}. The initial value
     *    is {@see GL46::GL_FLOAT}.
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_NORMALIZED}: $params returns a
     *    single value that is non-zero (true) if fixed-point data types for the
     *    vertex attribute
     *    array indicated by $index are normalized when they are converted to
     *    floating point, and 0 (false) otherwise.
     *    The initial value is {@see GL46::GL_FALSE}.
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_INTEGER}: $params returns a single
     *    value that is non-zero (true) if fixed-point data types for the vertex
     *    attribute
     *    array indicated by $index have integer data types, and 0 (false)
     *    otherwise. The initial value is 0
     *    ({@see GL46::GL_FALSE}).
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_LONG}: $param returns a single
     *    value that is non-zero (true) if a vertex attribute is stored as an
     *    unconverted
     *    double, and 0 (false) otherwise. The initial value is 0 ({@see
     *    GL46::GL_FALSE}).
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_DIVISOR}: $params returns a single
     *    value that is the frequency divisor used for instanced rendering. See
     *    {@see GL46::glVertexAttribDivisor}. The initial value is 0.
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_BINDING}: $params returns a single value,
     *    the vertex buffer binding of the vertex attribute array $index.
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_RELATIVE_OFFSET}: $params returns a
     *    single value that is the byte offset of the first element relative to
     *    the start of the
     *    vertex buffer binding specified attribute fetches from. The initial
     *    value is 0.
     *
     *  - {@see GL46::GL_CURRENT_VERTEX_ATTRIB}: $params returns four values
     *    that represent the current value for the generic vertex attribute
     *    specified by
     *    index. Generic vertex attribute 0 is unique in that it has no current
     *    state, so an error will be generated if
     *    $index is 0. The initial value for all other generic vertex attributes
     *    is (0,0,0,1).
     *    {@see GL46::glGetVertexAttribdv} and {@see GL46::glGetVertexAttribfv}
     *    return the current attribute values as
     *    four single-precision floating-point values; {@see
     *    GL46::glGetVertexAttribiv} reads them as floating-point
     *    values and converts them to four integer values; {@see
     *    GL46::glGetVertexAttribIiv} and
     *    {@see GL46::glGetVertexAttribIuiv} read and return them as signed or
     *    unsigned integer values, respectively;
     *    {@see GL46::glGetVertexAttribLdv} reads and returns them as four
     *    double-precision floating-point values.
     *
     * All of the parameters except {@see GL46::GL_CURRENT_VERTEX_ATTRIB} represent state stored in the currently
     * bound vertex array object.
     *
     * @see http://docs.gl/gl2/glGetVertexAttrib
     * @see http://docs.gl/gl4/glGetVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public function getVertexAttribiv($index, $pname, ?\FFI\CData $params): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetVertexAttribiv', 'void (*)(GLuint index, GLenum pname, GLint *params)');
        $proc($index, $pname, $params);
    }

    /**
     * {@see GL46::glGetVertexAttribPointerv} returns pointer information. $index is the generic vertex attribute to
     * be queried, $pname is a symbolic constant indicating the pointer to be returned, and $params is a pointer to a
     * location in which to place the returned data.
     *
     * The $pointer returned is a byte offset into the data store of the buffer object that was bound to the
     * {@see GL46::GL_ARRAY_BUFFER} target (see {@see GL46::glBindBuffer}) when the desired pointer was previously
     * specified.
     *
     * @see http://docs.gl/gl2/glGetVertexAttribPointerv
     * @see http://docs.gl/gl4/glGetVertexAttribPointerv
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param \FFI\CData|\FFI\CPtrPtr|null $pointer
     * @return void
     */
    public function getVertexAttribPointerv($index, $pname, ?\FFI\CData $pointer): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetVertexAttribPointerv', 'void (*)(GLuint index, GLenum pname, void **pointer)');
        $proc($index, $pname, $pointer);
    }

    /**
     * {@see GL46::glIsProgram} returns {@see GL46::GL_TRUE} if $program is the name of a program object previously
     * created with {@see GL46::glCreateProgram} and not yet deleted with {@see GL46::glDeleteProgram}. If $program
     * is zero or a non-zero value that is not the name of a program object, or if an error occurs,
     * {@see GL46::glIsProgram} returns {@see GL46::GL_FALSE}.
     *
     * @see http://docs.gl/gl2/glIsProgram
     * @see http://docs.gl/gl4/glIsProgram
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $program
     * @return int|\FFI\CData|\FFI\CInt
     */
    public function isProgram($program): int
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;

        assert(Type::isUint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glIsProgram', 'GLboolean (*)(GLuint program)');
        return $proc($program);
    }

    /**
     * {@see GL46::glIsShader} returns {@see GL46::GL_TRUE} if $shader is the name of a shader object previously
     * created with {@see GL46::glCreateShader} and not yet deleted with {@see GL46::glDeleteShader}. If $shader is
     * zero or a non-zero value that is not the name of a shader object, or if an error occurs,
     * {@see GL46::glIsShader } returns {@see GL46::GL_FALSE}.
     *
     * @see http://docs.gl/gl2/glIsShader
     * @see http://docs.gl/gl4/glIsShader
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $shader
     * @return int|\FFI\CData|\FFI\CInt
     */
    public function isShader($shader): int
    {
        $shader = $shader instanceof \FFI\CData ? $shader->cdata : $shader;

        assert(Type::isUint16($shader), 'Argument $shader must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glIsShader', 'GLboolean (*)(GLuint shader)');
        return $proc($shader);
    }

    /**
     * {@see GL46::glLinkProgram} links the program object specified by $program. If any shader objects of type
     * {@see GL46::GL_VERTEX_SHADER} are attached to $program, they will be used to create an executable that will
     * run on the programmable vertex processor. If any shader objects of type {@see GL46::GL_GEOMETRY_SHADER} are
     * attached to $program, they will be used to create an executable that will run on the programmable geometry
     * processor. If any shader objects of type {@see GL46::GL_FRAGMENT_SHADER} are attached to $program, they will
     * be used to create an executable that will run on the programmable fragment processor.
     *
     * The status of the link operation will be stored as part of the program object's state. This value will be set
     * to {@see GL46::GL_TRUE} if the program object was linked without errors and is ready for use, and
     * {@see GL46::GL_FALSE} otherwise. It can be queried by calling {@see GL46::glGetProgram} with arguments
     * $program and {@see GL46::GL_LINK_STATUS}.
     *
     * As a result of a successful link operation, all active user-defined uniform variables belonging to $program
     * will be initialized to 0, and each of the program object's active uniform variables will be assigned a
     * location that can be queried by calling {@see GL46::glGetUniformLocation}. Also, any active user-defined
     * attribute variables that have not been bound to a generic vertex attribute index will be bound to one at this
     * time.
     *
     * Linking of a program object can fail for a number of reasons as specified in the OpenGL Shading Language
     * Specification. The following lists some of the conditions that will cause a link error.
     *
     *  - The number of active attribute variables supported by the implementation has been exceeded.
     *  - The storage limit for uniform variables has been exceeded.
     *  - The number of active uniform variables supported by the implementation has been exceeded.
     *  - The {@see GL46::main} function is missing for the vertex, geometry or fragment shader.
     *  - A varying variable actually used in the fragment shader is not declared in the same way (or is not declared at
     *    all) in the vertex shader, or geometry shader if present.
     *  - A reference to a function or variable name is unresolved.
     *  - A shared global is declared with two different types or two different initial values.
     *  - One or more of the attached shader objects has not been successfully compiled.
     *  - Binding a generic attribute matrix caused some rows of the matrix to fall outside the allowed maximum of
     *    {@see GL46::GL_MAX_VERTEX_ATTRIBS}.
     *  - Not enough contiguous vertex attribute slots could be found to bind attribute matrices.
     *  - The program object contains objects to form a fragment shader but does not contain objects to form a vertex
     *    shader.
     *  - The program object contains objects to form a geometry shader but does not contain objects to form a vertex
     *    shader.
     *  - The program object contains objects to form a geometry shader and the input primitive type, output primitive
     *    type, or maximum output vertex count is not specified in any compiled geometry shader object.
     *  - The program object contains objects to form a geometry shader and the input primitive type, output primitive
     *    type, or maximum output vertex count is specified differently in multiple geometry shader objects.
     *  - The number of active outputs in the fragment shader is greater than the value of
     *    {@see GL46::GL_MAX_DRAW_BUFFERS}.
     *  - The program has an active output assigned to a location greater than or equal to the value of
     *    {@see GL46::GL_MAX_DUAL_SOURCE_DRAW_BUFFERS} and has an active output assigned an index greater than or equal
     *    to one.
     *  - More than one varying out variable is bound to the same number and index.
     *  - The explicit binding assigments do not leave enough space for the linker to automatically assign a location
     *    for a varying out array, which requires multiple contiguous locations.
     *  - The $count specified by {@see GL46::glTransformFeedbackVaryings} is non-zero, but the program object has no
     *    vertex or geometry shader.
     *  - Any variable name specified to {@see GL46::glTransformFeedbackVaryings} in the $varyings array is not declared
     *    as an output in the vertex shader (or the geometry shader, if active).
     *  - Any two entries in the $varyings array given {@see GL46::glTransformFeedbackVaryings} specify the same varying
     *    variable.
     *  - The total number of components to capture in any transform feedback varying variable is greater than the
     *    constant {@see GL46::GL_MAX_TRANSFORM_FEEDBACK_SEPARATE_COMPONENTS} and the buffer mode is
     *    {@see GL46::GL_SEPARATE_ATTRIBS}.
     *
     * When a program object has been successfully linked, the program object can be made part of current state by
     * calling {@see GL46::glUseProgram}. Whether or not the link operation was successful, the program object's
     * information log will be overwritten. The information log can be retrieved by calling
     * {@see GL46::glGetProgramInfoLog}.
     *
     * {@see GL46::glLinkProgram} will also install the generated executables as part of the current rendering state
     * if the link operation was successful and the specified program object is already currently in use as a result
     * of a previous call to {@see GL46::glUseProgram}. If the program object currently in use is relinked
     * unsuccessfully, its link status will be set to {@see GL46::GL_FALSE} , but the executables and associated
     * state will remain part of the current state until a subsequent call to {@see GL46::glUseProgram} removes it
     * from use. After it is removed from use, it cannot be made part of current state until it has been successfully
     * relinked.
     *
     * If $program contains shader objects of type {@see GL46::GL_VERTEX_SHADER}, and optionally of type
     * {@see GL46::GL_GEOMETRY_SHADER}, but does not contain shader objects of type {@see GL46::GL_FRAGMENT_SHADER},
     * the vertex shader executable will be installed on the programmable vertex processor, the geometry shader
     * executable, if present, will be installed on the programmable geometry processor, but no executable will be
     * installed on the fragment processor. The results of rasterizing primitives with such a program will be
     * undefined.
     *
     * The program object's information log is updated and the program is generated at the time of the link
     * operation. After the link operation, applications are free to modify attached shader objects, compile attached
     * shader objects, detach shader objects, delete shader objects, and attach additional shader objects. None of
     * these operations affects the information log or the program that is part of the program object.
     *
     * @see http://docs.gl/gl2/glLinkProgram
     * @see http://docs.gl/gl4/glLinkProgram
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $program
     * @return void
     */
    public function linkProgram($program): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;

        assert(Type::isUint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glLinkProgram', 'void (*)(GLuint program)');
        $proc($program);
    }

    /**
     * {@see GL46::glShaderSource} sets the source code in $shader to the source code in the array of strings
     * specified by $string. Any source code previously stored in the shader object is completely replaced. The
     * number of strings in the array is specified by $count. If $length is {@see GL46::NULL}, each string is assumed
     * to be null terminated. If $length is a value other than {@see GL46::NULL}, it points to an array containing a
     * string length for each of the corresponding elements of $string. Each element in the $length array may contain
     * the length of the corresponding string (the null character is not counted as part of the string length) or a
     * value less than 0 to indicate that the string is null terminated. The source code strings are not scanned or
     * parsed at this time; they are simply copied into the specified shader object.
     *
     * @see http://docs.gl/gl2/glShaderSource
     * @see http://docs.gl/gl4/glShaderSource
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $shader
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CIntPtrPtr|null $string
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @return void
     */
    public function shaderSource($shader, $count, ?\FFI\CData $string, ?\FFI\CData $length): void
    {
        $shader = $shader instanceof \FFI\CData ? $shader->cdata : $shader;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Type::isUint16($shader), 'Argument $shader must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isInt16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glShaderSource', 'void (*)(GLuint shader, GLsizei count, const GLchar *const*string, const GLint *length)');
        $proc($shader, $count, $string, $length);
    }

    /**
     * {@see GL46::glUseProgram} installs the program object specified by $program as part of current rendering
     * state. One or more executables are created in a program object by successfully attaching shader objects to it
     * with {@see GL46::glAttachShader}, successfully compiling the shader objects with {@see GL46::glCompileShader},
     * and successfully linking the program object with {@see GL46::glLinkProgram}.
     *
     * A program object will contain an executable that will run on the vertex processor if it contains one or more
     * shader objects of type {@see GL46::GL_VERTEX_SHADER} that have been successfully compiled and linked. A
     * program object will contain an executable that will run on the geometry processor if it contains one or more
     * shader objects of type {@see GL46::GL_GEOMETRY_SHADER} that have been successfully compiled and linked.
     * Similarly, a program object will contain an executable that will run on the fragment processor if it contains
     * one or more shader objects of type {@see GL46::GL_FRAGMENT_SHADER} that have been successfully compiled and
     * linked.
     *
     * While a program object is in use, applications are free to modify attached shader objects, compile attached
     * shader objects, attach additional shader objects, and detach or delete shader objects. None of these
     * operations will affect the executables that are part of the current state. However, relinking the program
     * object that is currently in use will install the program object as part of the current rendering state if the
     * link operation was successful (see {@see GL46::glLinkProgram} ). If the program object currently in use is
     * relinked unsuccessfully, its link status will be set to {@see GL46::GL_FALSE}, but the executables and
     * associated state will remain part of the current state until a subsequent call to {@see GL46::glUseProgram}
     * removes it from use. After it is removed from use, it cannot be made part of current state until it has been
     * successfully relinked.
     *
     * If $program is zero, then the current rendering state refers to an invalid program object and the results of
     * shader execution are undefined. However, this is not an error.
     *
     * If $program does not contain shader objects of type {@see GL46::GL_FRAGMENT_SHADER}, an executable will be
     * installed on the vertex, and possibly geometry processors, but the results of fragment shader execution will
     * be undefined.
     *
     * @see http://docs.gl/gl2/glUseProgram
     * @see http://docs.gl/gl4/glUseProgram
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $program
     * @return void
     */
    public function useProgram($program): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;

        assert(Type::isUint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUseProgram', 'void (*)(GLuint program)');
        $proc($program);
    }

    /**
     * {@see GL46::glUniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL46::glGetUniformLocation}. {@see GL46::glUniform} operates on the program object that was made part of
     * current state by calling {@see GL46::glUseProgram}.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
     * specified by $location using the values passed as arguments. The number specified in the command should match
     * the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix
     * {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i} indicates that
     * integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified uniform variable. The {@see GL46::i}
     * variants of this function should be used to provide values for uniform variables defined as `int`, `ivec2`,
     * `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be used to provide
     * values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays of these. The
     * {@see GL46::f} variants should be used to provide values for uniform variables of type `float`, `vec2`,
     * `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f} variants may
     * be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these.
     * The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL46::glUniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
     * uniform variable array. These commands pass a count and a pointer to the values to be loaded into a uniform
     * variable or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform
     * variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When loading
     * n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the array
     * will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in $value, and it should match the number of
     * components in the data type of the specified uniform variable (e.g., {@see GL46::1} for float, int, bool;
     * {@see GL46::2} for vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match
     * the data type for the specified uniform variable as described previously for
     * {@see GL46::glUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL46::glUniform3f} or {@see GL46::glUniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL46::glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL46::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param float|\FFI\CData|\FFI\CFloat $v0
     * @return void
     */
    public function uniform1f($location, $v0): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $v0 = $v0 instanceof \FFI\CData ? $v0->cdata : $v0;

        assert(Type::isInt16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isFloat32($v0), 'Argument $v0 must be a C-like GLfloat, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniform1f', 'void (*)(GLint location, GLfloat v0)');
        $proc($location, $v0);
    }

    /**
     * {@see GL46::glUniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL46::glGetUniformLocation}. {@see GL46::glUniform} operates on the program object that was made part of
     * current state by calling {@see GL46::glUseProgram}.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
     * specified by $location using the values passed as arguments. The number specified in the command should match
     * the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix
     * {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i} indicates that
     * integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified uniform variable. The {@see GL46::i}
     * variants of this function should be used to provide values for uniform variables defined as `int`, `ivec2`,
     * `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be used to provide
     * values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays of these. The
     * {@see GL46::f} variants should be used to provide values for uniform variables of type `float`, `vec2`,
     * `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f} variants may
     * be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these.
     * The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL46::glUniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
     * uniform variable array. These commands pass a count and a pointer to the values to be loaded into a uniform
     * variable or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform
     * variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When loading
     * n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the array
     * will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in $value, and it should match the number of
     * components in the data type of the specified uniform variable (e.g., {@see GL46::1} for float, int, bool;
     * {@see GL46::2} for vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match
     * the data type for the specified uniform variable as described previously for
     * {@see GL46::glUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL46::glUniform3f} or {@see GL46::glUniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL46::glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL46::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param float|\FFI\CData|\FFI\CFloat $v0
     * @param float|\FFI\CData|\FFI\CFloat $v1
     * @return void
     */
    public function uniform2f($location, $v0, $v1): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $v0 = $v0 instanceof \FFI\CData ? $v0->cdata : $v0;
        $v1 = $v1 instanceof \FFI\CData ? $v1->cdata : $v1;

        assert(Type::isInt16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isFloat32($v0), 'Argument $v0 must be a C-like GLfloat, but incompatible or overflow value given');
        assert(Type::isFloat32($v1), 'Argument $v1 must be a C-like GLfloat, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniform2f', 'void (*)(GLint location, GLfloat v0, GLfloat v1)');
        $proc($location, $v0, $v1);
    }

    /**
     * {@see GL46::glUniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL46::glGetUniformLocation}. {@see GL46::glUniform} operates on the program object that was made part of
     * current state by calling {@see GL46::glUseProgram}.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
     * specified by $location using the values passed as arguments. The number specified in the command should match
     * the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix
     * {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i} indicates that
     * integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified uniform variable. The {@see GL46::i}
     * variants of this function should be used to provide values for uniform variables defined as `int`, `ivec2`,
     * `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be used to provide
     * values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays of these. The
     * {@see GL46::f} variants should be used to provide values for uniform variables of type `float`, `vec2`,
     * `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f} variants may
     * be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these.
     * The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL46::glUniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
     * uniform variable array. These commands pass a count and a pointer to the values to be loaded into a uniform
     * variable or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform
     * variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When loading
     * n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the array
     * will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in $value, and it should match the number of
     * components in the data type of the specified uniform variable (e.g., {@see GL46::1} for float, int, bool;
     * {@see GL46::2} for vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match
     * the data type for the specified uniform variable as described previously for
     * {@see GL46::glUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL46::glUniform3f} or {@see GL46::glUniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL46::glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL46::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param float|\FFI\CData|\FFI\CFloat $v0
     * @param float|\FFI\CData|\FFI\CFloat $v1
     * @param float|\FFI\CData|\FFI\CFloat $v2
     * @return void
     */
    public function uniform3f($location, $v0, $v1, $v2): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $v0 = $v0 instanceof \FFI\CData ? $v0->cdata : $v0;
        $v1 = $v1 instanceof \FFI\CData ? $v1->cdata : $v1;
        $v2 = $v2 instanceof \FFI\CData ? $v2->cdata : $v2;

        assert(Type::isInt16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isFloat32($v0), 'Argument $v0 must be a C-like GLfloat, but incompatible or overflow value given');
        assert(Type::isFloat32($v1), 'Argument $v1 must be a C-like GLfloat, but incompatible or overflow value given');
        assert(Type::isFloat32($v2), 'Argument $v2 must be a C-like GLfloat, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniform3f', 'void (*)(GLint location, GLfloat v0, GLfloat v1, GLfloat v2)');
        $proc($location, $v0, $v1, $v2);
    }

    /**
     * {@see GL46::glUniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL46::glGetUniformLocation}. {@see GL46::glUniform} operates on the program object that was made part of
     * current state by calling {@see GL46::glUseProgram}.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
     * specified by $location using the values passed as arguments. The number specified in the command should match
     * the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix
     * {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i} indicates that
     * integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified uniform variable. The {@see GL46::i}
     * variants of this function should be used to provide values for uniform variables defined as `int`, `ivec2`,
     * `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be used to provide
     * values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays of these. The
     * {@see GL46::f} variants should be used to provide values for uniform variables of type `float`, `vec2`,
     * `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f} variants may
     * be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these.
     * The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL46::glUniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
     * uniform variable array. These commands pass a count and a pointer to the values to be loaded into a uniform
     * variable or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform
     * variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When loading
     * n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the array
     * will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in $value, and it should match the number of
     * components in the data type of the specified uniform variable (e.g., {@see GL46::1} for float, int, bool;
     * {@see GL46::2} for vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match
     * the data type for the specified uniform variable as described previously for
     * {@see GL46::glUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL46::glUniform3f} or {@see GL46::glUniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL46::glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL46::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param float|\FFI\CData|\FFI\CFloat $v0
     * @param float|\FFI\CData|\FFI\CFloat $v1
     * @param float|\FFI\CData|\FFI\CFloat $v2
     * @param float|\FFI\CData|\FFI\CFloat $v3
     * @return void
     */
    public function uniform4f($location, $v0, $v1, $v2, $v3): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $v0 = $v0 instanceof \FFI\CData ? $v0->cdata : $v0;
        $v1 = $v1 instanceof \FFI\CData ? $v1->cdata : $v1;
        $v2 = $v2 instanceof \FFI\CData ? $v2->cdata : $v2;
        $v3 = $v3 instanceof \FFI\CData ? $v3->cdata : $v3;

        assert(Type::isInt16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isFloat32($v0), 'Argument $v0 must be a C-like GLfloat, but incompatible or overflow value given');
        assert(Type::isFloat32($v1), 'Argument $v1 must be a C-like GLfloat, but incompatible or overflow value given');
        assert(Type::isFloat32($v2), 'Argument $v2 must be a C-like GLfloat, but incompatible or overflow value given');
        assert(Type::isFloat32($v3), 'Argument $v3 must be a C-like GLfloat, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniform4f', 'void (*)(GLint location, GLfloat v0, GLfloat v1, GLfloat v2, GLfloat v3)');
        $proc($location, $v0, $v1, $v2, $v3);
    }

    /**
     * {@see GL46::glUniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL46::glGetUniformLocation}. {@see GL46::glUniform} operates on the program object that was made part of
     * current state by calling {@see GL46::glUseProgram}.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
     * specified by $location using the values passed as arguments. The number specified in the command should match
     * the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix
     * {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i} indicates that
     * integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified uniform variable. The {@see GL46::i}
     * variants of this function should be used to provide values for uniform variables defined as `int`, `ivec2`,
     * `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be used to provide
     * values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays of these. The
     * {@see GL46::f} variants should be used to provide values for uniform variables of type `float`, `vec2`,
     * `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f} variants may
     * be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these.
     * The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL46::glUniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
     * uniform variable array. These commands pass a count and a pointer to the values to be loaded into a uniform
     * variable or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform
     * variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When loading
     * n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the array
     * will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in $value, and it should match the number of
     * components in the data type of the specified uniform variable (e.g., {@see GL46::1} for float, int, bool;
     * {@see GL46::2} for vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match
     * the data type for the specified uniform variable as described previously for
     * {@see GL46::glUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL46::glUniform3f} or {@see GL46::glUniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL46::glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL46::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $v0
     * @return void
     */
    public function uniform1i($location, $v0): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $v0 = $v0 instanceof \FFI\CData ? $v0->cdata : $v0;

        assert(Type::isInt16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($v0), 'Argument $v0 must be a C-like GLint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniform1i', 'void (*)(GLint location, GLint v0)');
        $proc($location, $v0);
    }

    /**
     * {@see GL46::glUniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL46::glGetUniformLocation}. {@see GL46::glUniform} operates on the program object that was made part of
     * current state by calling {@see GL46::glUseProgram}.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
     * specified by $location using the values passed as arguments. The number specified in the command should match
     * the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix
     * {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i} indicates that
     * integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified uniform variable. The {@see GL46::i}
     * variants of this function should be used to provide values for uniform variables defined as `int`, `ivec2`,
     * `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be used to provide
     * values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays of these. The
     * {@see GL46::f} variants should be used to provide values for uniform variables of type `float`, `vec2`,
     * `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f} variants may
     * be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these.
     * The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL46::glUniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
     * uniform variable array. These commands pass a count and a pointer to the values to be loaded into a uniform
     * variable or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform
     * variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When loading
     * n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the array
     * will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in $value, and it should match the number of
     * components in the data type of the specified uniform variable (e.g., {@see GL46::1} for float, int, bool;
     * {@see GL46::2} for vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match
     * the data type for the specified uniform variable as described previously for
     * {@see GL46::glUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL46::glUniform3f} or {@see GL46::glUniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL46::glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL46::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $v0
     * @param int|\FFI\CData|\FFI\CInt $v1
     * @return void
     */
    public function uniform2i($location, $v0, $v1): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $v0 = $v0 instanceof \FFI\CData ? $v0->cdata : $v0;
        $v1 = $v1 instanceof \FFI\CData ? $v1->cdata : $v1;

        assert(Type::isInt16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($v0), 'Argument $v0 must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($v1), 'Argument $v1 must be a C-like GLint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniform2i', 'void (*)(GLint location, GLint v0, GLint v1)');
        $proc($location, $v0, $v1);
    }

    /**
     * {@see GL46::glUniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL46::glGetUniformLocation}. {@see GL46::glUniform} operates on the program object that was made part of
     * current state by calling {@see GL46::glUseProgram}.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
     * specified by $location using the values passed as arguments. The number specified in the command should match
     * the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix
     * {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i} indicates that
     * integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified uniform variable. The {@see GL46::i}
     * variants of this function should be used to provide values for uniform variables defined as `int`, `ivec2`,
     * `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be used to provide
     * values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays of these. The
     * {@see GL46::f} variants should be used to provide values for uniform variables of type `float`, `vec2`,
     * `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f} variants may
     * be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these.
     * The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL46::glUniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
     * uniform variable array. These commands pass a count and a pointer to the values to be loaded into a uniform
     * variable or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform
     * variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When loading
     * n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the array
     * will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in $value, and it should match the number of
     * components in the data type of the specified uniform variable (e.g., {@see GL46::1} for float, int, bool;
     * {@see GL46::2} for vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match
     * the data type for the specified uniform variable as described previously for
     * {@see GL46::glUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL46::glUniform3f} or {@see GL46::glUniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL46::glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL46::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $v0
     * @param int|\FFI\CData|\FFI\CInt $v1
     * @param int|\FFI\CData|\FFI\CInt $v2
     * @return void
     */
    public function uniform3i($location, $v0, $v1, $v2): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $v0 = $v0 instanceof \FFI\CData ? $v0->cdata : $v0;
        $v1 = $v1 instanceof \FFI\CData ? $v1->cdata : $v1;
        $v2 = $v2 instanceof \FFI\CData ? $v2->cdata : $v2;

        assert(Type::isInt16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($v0), 'Argument $v0 must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($v1), 'Argument $v1 must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($v2), 'Argument $v2 must be a C-like GLint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniform3i', 'void (*)(GLint location, GLint v0, GLint v1, GLint v2)');
        $proc($location, $v0, $v1, $v2);
    }

    /**
     * {@see GL46::glUniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL46::glGetUniformLocation}. {@see GL46::glUniform} operates on the program object that was made part of
     * current state by calling {@see GL46::glUseProgram}.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
     * specified by $location using the values passed as arguments. The number specified in the command should match
     * the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix
     * {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i} indicates that
     * integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified uniform variable. The {@see GL46::i}
     * variants of this function should be used to provide values for uniform variables defined as `int`, `ivec2`,
     * `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be used to provide
     * values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays of these. The
     * {@see GL46::f} variants should be used to provide values for uniform variables of type `float`, `vec2`,
     * `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f} variants may
     * be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these.
     * The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL46::glUniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
     * uniform variable array. These commands pass a count and a pointer to the values to be loaded into a uniform
     * variable or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform
     * variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When loading
     * n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the array
     * will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in $value, and it should match the number of
     * components in the data type of the specified uniform variable (e.g., {@see GL46::1} for float, int, bool;
     * {@see GL46::2} for vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match
     * the data type for the specified uniform variable as described previously for
     * {@see GL46::glUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL46::glUniform3f} or {@see GL46::glUniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL46::glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL46::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $v0
     * @param int|\FFI\CData|\FFI\CInt $v1
     * @param int|\FFI\CData|\FFI\CInt $v2
     * @param int|\FFI\CData|\FFI\CInt $v3
     * @return void
     */
    public function uniform4i($location, $v0, $v1, $v2, $v3): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $v0 = $v0 instanceof \FFI\CData ? $v0->cdata : $v0;
        $v1 = $v1 instanceof \FFI\CData ? $v1->cdata : $v1;
        $v2 = $v2 instanceof \FFI\CData ? $v2->cdata : $v2;
        $v3 = $v3 instanceof \FFI\CData ? $v3->cdata : $v3;

        assert(Type::isInt16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($v0), 'Argument $v0 must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($v1), 'Argument $v1 must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($v2), 'Argument $v2 must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($v3), 'Argument $v3 must be a C-like GLint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniform4i', 'void (*)(GLint location, GLint v0, GLint v1, GLint v2, GLint v3)');
        $proc($location, $v0, $v1, $v2, $v3);
    }

    /**
     * {@see GL46::glUniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL46::glGetUniformLocation}. {@see GL46::glUniform} operates on the program object that was made part of
     * current state by calling {@see GL46::glUseProgram}.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
     * specified by $location using the values passed as arguments. The number specified in the command should match
     * the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix
     * {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i} indicates that
     * integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified uniform variable. The {@see GL46::i}
     * variants of this function should be used to provide values for uniform variables defined as `int`, `ivec2`,
     * `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be used to provide
     * values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays of these. The
     * {@see GL46::f} variants should be used to provide values for uniform variables of type `float`, `vec2`,
     * `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f} variants may
     * be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these.
     * The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL46::glUniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
     * uniform variable array. These commands pass a count and a pointer to the values to be loaded into a uniform
     * variable or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform
     * variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When loading
     * n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the array
     * will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in $value, and it should match the number of
     * components in the data type of the specified uniform variable (e.g., {@see GL46::1} for float, int, bool;
     * {@see GL46::2} for vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match
     * the data type for the specified uniform variable as described previously for
     * {@see GL46::glUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL46::glUniform3f} or {@see GL46::glUniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL46::glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL46::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function uniform1fv($location, $count, ?\FFI\CData $value): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Type::isInt16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniform1fv', 'void (*)(GLint location, GLsizei count, const GLfloat *value)');
        $proc($location, $count, $value);
    }

    /**
     * {@see GL46::glUniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL46::glGetUniformLocation}. {@see GL46::glUniform} operates on the program object that was made part of
     * current state by calling {@see GL46::glUseProgram}.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
     * specified by $location using the values passed as arguments. The number specified in the command should match
     * the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix
     * {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i} indicates that
     * integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified uniform variable. The {@see GL46::i}
     * variants of this function should be used to provide values for uniform variables defined as `int`, `ivec2`,
     * `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be used to provide
     * values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays of these. The
     * {@see GL46::f} variants should be used to provide values for uniform variables of type `float`, `vec2`,
     * `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f} variants may
     * be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these.
     * The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL46::glUniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
     * uniform variable array. These commands pass a count and a pointer to the values to be loaded into a uniform
     * variable or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform
     * variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When loading
     * n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the array
     * will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in $value, and it should match the number of
     * components in the data type of the specified uniform variable (e.g., {@see GL46::1} for float, int, bool;
     * {@see GL46::2} for vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match
     * the data type for the specified uniform variable as described previously for
     * {@see GL46::glUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL46::glUniform3f} or {@see GL46::glUniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL46::glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL46::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function uniform2fv($location, $count, ?\FFI\CData $value): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Type::isInt16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniform2fv', 'void (*)(GLint location, GLsizei count, const GLfloat *value)');
        $proc($location, $count, $value);
    }

    /**
     * {@see GL46::glUniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL46::glGetUniformLocation}. {@see GL46::glUniform} operates on the program object that was made part of
     * current state by calling {@see GL46::glUseProgram}.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
     * specified by $location using the values passed as arguments. The number specified in the command should match
     * the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix
     * {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i} indicates that
     * integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified uniform variable. The {@see GL46::i}
     * variants of this function should be used to provide values for uniform variables defined as `int`, `ivec2`,
     * `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be used to provide
     * values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays of these. The
     * {@see GL46::f} variants should be used to provide values for uniform variables of type `float`, `vec2`,
     * `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f} variants may
     * be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these.
     * The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL46::glUniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
     * uniform variable array. These commands pass a count and a pointer to the values to be loaded into a uniform
     * variable or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform
     * variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When loading
     * n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the array
     * will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in $value, and it should match the number of
     * components in the data type of the specified uniform variable (e.g., {@see GL46::1} for float, int, bool;
     * {@see GL46::2} for vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match
     * the data type for the specified uniform variable as described previously for
     * {@see GL46::glUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL46::glUniform3f} or {@see GL46::glUniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL46::glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL46::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function uniform3fv($location, $count, ?\FFI\CData $value): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Type::isInt16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniform3fv', 'void (*)(GLint location, GLsizei count, const GLfloat *value)');
        $proc($location, $count, $value);
    }

    /**
     * {@see GL46::glUniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL46::glGetUniformLocation}. {@see GL46::glUniform} operates on the program object that was made part of
     * current state by calling {@see GL46::glUseProgram}.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
     * specified by $location using the values passed as arguments. The number specified in the command should match
     * the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix
     * {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i} indicates that
     * integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified uniform variable. The {@see GL46::i}
     * variants of this function should be used to provide values for uniform variables defined as `int`, `ivec2`,
     * `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be used to provide
     * values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays of these. The
     * {@see GL46::f} variants should be used to provide values for uniform variables of type `float`, `vec2`,
     * `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f} variants may
     * be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these.
     * The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL46::glUniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
     * uniform variable array. These commands pass a count and a pointer to the values to be loaded into a uniform
     * variable or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform
     * variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When loading
     * n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the array
     * will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in $value, and it should match the number of
     * components in the data type of the specified uniform variable (e.g., {@see GL46::1} for float, int, bool;
     * {@see GL46::2} for vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match
     * the data type for the specified uniform variable as described previously for
     * {@see GL46::glUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL46::glUniform3f} or {@see GL46::glUniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL46::glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL46::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function uniform4fv($location, $count, ?\FFI\CData $value): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Type::isInt16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniform4fv', 'void (*)(GLint location, GLsizei count, const GLfloat *value)');
        $proc($location, $count, $value);
    }

    /**
     * {@see GL46::glUniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL46::glGetUniformLocation}. {@see GL46::glUniform} operates on the program object that was made part of
     * current state by calling {@see GL46::glUseProgram}.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
     * specified by $location using the values passed as arguments. The number specified in the command should match
     * the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix
     * {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i} indicates that
     * integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified uniform variable. The {@see GL46::i}
     * variants of this function should be used to provide values for uniform variables defined as `int`, `ivec2`,
     * `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be used to provide
     * values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays of these. The
     * {@see GL46::f} variants should be used to provide values for uniform variables of type `float`, `vec2`,
     * `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f} variants may
     * be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these.
     * The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL46::glUniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
     * uniform variable array. These commands pass a count and a pointer to the values to be loaded into a uniform
     * variable or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform
     * variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When loading
     * n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the array
     * will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in $value, and it should match the number of
     * components in the data type of the specified uniform variable (e.g., {@see GL46::1} for float, int, bool;
     * {@see GL46::2} for vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match
     * the data type for the specified uniform variable as described previously for
     * {@see GL46::glUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL46::glUniform3f} or {@see GL46::glUniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL46::glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL46::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public function uniform1iv($location, $count, ?\FFI\CData $value): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Type::isInt16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniform1iv', 'void (*)(GLint location, GLsizei count, const GLint *value)');
        $proc($location, $count, $value);
    }

    /**
     * {@see GL46::glUniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL46::glGetUniformLocation}. {@see GL46::glUniform} operates on the program object that was made part of
     * current state by calling {@see GL46::glUseProgram}.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
     * specified by $location using the values passed as arguments. The number specified in the command should match
     * the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix
     * {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i} indicates that
     * integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified uniform variable. The {@see GL46::i}
     * variants of this function should be used to provide values for uniform variables defined as `int`, `ivec2`,
     * `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be used to provide
     * values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays of these. The
     * {@see GL46::f} variants should be used to provide values for uniform variables of type `float`, `vec2`,
     * `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f} variants may
     * be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these.
     * The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL46::glUniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
     * uniform variable array. These commands pass a count and a pointer to the values to be loaded into a uniform
     * variable or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform
     * variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When loading
     * n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the array
     * will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in $value, and it should match the number of
     * components in the data type of the specified uniform variable (e.g., {@see GL46::1} for float, int, bool;
     * {@see GL46::2} for vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match
     * the data type for the specified uniform variable as described previously for
     * {@see GL46::glUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL46::glUniform3f} or {@see GL46::glUniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL46::glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL46::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public function uniform2iv($location, $count, ?\FFI\CData $value): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Type::isInt16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniform2iv', 'void (*)(GLint location, GLsizei count, const GLint *value)');
        $proc($location, $count, $value);
    }

    /**
     * {@see GL46::glUniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL46::glGetUniformLocation}. {@see GL46::glUniform} operates on the program object that was made part of
     * current state by calling {@see GL46::glUseProgram}.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
     * specified by $location using the values passed as arguments. The number specified in the command should match
     * the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix
     * {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i} indicates that
     * integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified uniform variable. The {@see GL46::i}
     * variants of this function should be used to provide values for uniform variables defined as `int`, `ivec2`,
     * `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be used to provide
     * values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays of these. The
     * {@see GL46::f} variants should be used to provide values for uniform variables of type `float`, `vec2`,
     * `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f} variants may
     * be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these.
     * The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL46::glUniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
     * uniform variable array. These commands pass a count and a pointer to the values to be loaded into a uniform
     * variable or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform
     * variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When loading
     * n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the array
     * will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in $value, and it should match the number of
     * components in the data type of the specified uniform variable (e.g., {@see GL46::1} for float, int, bool;
     * {@see GL46::2} for vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match
     * the data type for the specified uniform variable as described previously for
     * {@see GL46::glUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL46::glUniform3f} or {@see GL46::glUniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL46::glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL46::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public function uniform3iv($location, $count, ?\FFI\CData $value): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Type::isInt16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniform3iv', 'void (*)(GLint location, GLsizei count, const GLint *value)');
        $proc($location, $count, $value);
    }

    /**
     * {@see GL46::glUniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL46::glGetUniformLocation}. {@see GL46::glUniform} operates on the program object that was made part of
     * current state by calling {@see GL46::glUseProgram}.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
     * specified by $location using the values passed as arguments. The number specified in the command should match
     * the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix
     * {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i} indicates that
     * integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified uniform variable. The {@see GL46::i}
     * variants of this function should be used to provide values for uniform variables defined as `int`, `ivec2`,
     * `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be used to provide
     * values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays of these. The
     * {@see GL46::f} variants should be used to provide values for uniform variables of type `float`, `vec2`,
     * `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f} variants may
     * be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these.
     * The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL46::glUniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
     * uniform variable array. These commands pass a count and a pointer to the values to be loaded into a uniform
     * variable or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform
     * variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When loading
     * n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the array
     * will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in $value, and it should match the number of
     * components in the data type of the specified uniform variable (e.g., {@see GL46::1} for float, int, bool;
     * {@see GL46::2} for vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match
     * the data type for the specified uniform variable as described previously for
     * {@see GL46::glUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL46::glUniform3f} or {@see GL46::glUniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL46::glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL46::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public function uniform4iv($location, $count, ?\FFI\CData $value): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Type::isInt16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniform4iv', 'void (*)(GLint location, GLsizei count, const GLint *value)');
        $proc($location, $count, $value);
    }

    /**
     * {@see GL46::glUniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL46::glGetUniformLocation}. {@see GL46::glUniform} operates on the program object that was made part of
     * current state by calling {@see GL46::glUseProgram}.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
     * specified by $location using the values passed as arguments. The number specified in the command should match
     * the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix
     * {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i} indicates that
     * integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified uniform variable. The {@see GL46::i}
     * variants of this function should be used to provide values for uniform variables defined as `int`, `ivec2`,
     * `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be used to provide
     * values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays of these. The
     * {@see GL46::f} variants should be used to provide values for uniform variables of type `float`, `vec2`,
     * `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f} variants may
     * be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these.
     * The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL46::glUniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
     * uniform variable array. These commands pass a count and a pointer to the values to be loaded into a uniform
     * variable or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform
     * variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When loading
     * n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the array
     * will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in $value, and it should match the number of
     * components in the data type of the specified uniform variable (e.g., {@see GL46::1} for float, int, bool;
     * {@see GL46::2} for vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match
     * the data type for the specified uniform variable as described previously for
     * {@see GL46::glUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL46::glUniform3f} or {@see GL46::glUniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL46::glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL46::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glLoadMatrix
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl2/gluPickMatrix
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function uniformMatrix2fv($location, $count, $transpose, ?\FFI\CData $value): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $transpose = $transpose instanceof \FFI\CData ? $transpose->cdata : $transpose;

        assert(Type::isInt16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Type::isUint8($transpose), 'Argument $transpose must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniformMatrix2fv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glUniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL46::glGetUniformLocation}. {@see GL46::glUniform} operates on the program object that was made part of
     * current state by calling {@see GL46::glUseProgram}.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
     * specified by $location using the values passed as arguments. The number specified in the command should match
     * the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix
     * {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i} indicates that
     * integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified uniform variable. The {@see GL46::i}
     * variants of this function should be used to provide values for uniform variables defined as `int`, `ivec2`,
     * `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be used to provide
     * values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays of these. The
     * {@see GL46::f} variants should be used to provide values for uniform variables of type `float`, `vec2`,
     * `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f} variants may
     * be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these.
     * The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL46::glUniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
     * uniform variable array. These commands pass a count and a pointer to the values to be loaded into a uniform
     * variable or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform
     * variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When loading
     * n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the array
     * will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in $value, and it should match the number of
     * components in the data type of the specified uniform variable (e.g., {@see GL46::1} for float, int, bool;
     * {@see GL46::2} for vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match
     * the data type for the specified uniform variable as described previously for
     * {@see GL46::glUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL46::glUniform3f} or {@see GL46::glUniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL46::glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL46::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glLoadMatrix
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl2/gluPickMatrix
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function uniformMatrix3fv($location, $count, $transpose, ?\FFI\CData $value): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $transpose = $transpose instanceof \FFI\CData ? $transpose->cdata : $transpose;

        assert(Type::isInt16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Type::isUint8($transpose), 'Argument $transpose must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniformMatrix3fv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glUniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL46::glGetUniformLocation}. {@see GL46::glUniform} operates on the program object that was made part of
     * current state by calling {@see GL46::glUseProgram}.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
     * specified by $location using the values passed as arguments. The number specified in the command should match
     * the number of components in the data type of the specified uniform variable (e.g., {@see GL46::1} for `float`,
     * `int`, `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix
     * {@see GL46::f} indicates that floating-point values are being passed; the suffix {@see GL46::i} indicates that
     * integer values are being passed; the suffix {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified uniform variable. The {@see GL46::i}
     * variants of this function should be used to provide values for uniform variables defined as `int`, `ivec2`,
     * `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui} variants of this function should be used to provide
     * values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or arrays of these. The
     * {@see GL46::f} variants should be used to provide values for uniform variables of type `float`, `vec2`,
     * `vec3`, `vec4`, or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or {@see GL46::f} variants may
     * be used to provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these.
     * The uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to {@see GL46::glUniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL46::glUniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
     * uniform variable array. These commands pass a count and a pointer to the values to be loaded into a uniform
     * variable or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform
     * variable, and a count of 1 or greater can be used to modify an entire array or part of an array. When loading
     * n elements starting at an arbitrary position m in a uniform variable array, elements m + n - 1 in the array
     * will be replaced with the new values. If $m + $n - 1 is larger than the size of the uniform variable array,
     * values for all array elements beyond the end of the array will be ignored. The number specified in the name of
     * the command indicates the number of components for each element in $value, and it should match the number of
     * components in the data type of the specified uniform variable (e.g., {@see GL46::1} for float, int, bool;
     * {@see GL46::2} for vec2, ivec2, bvec2, etc.). The data type specified in the name of the command must match
     * the data type for the specified uniform variable as described previously for
     * {@see GL46::glUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL46::glUniform3f} or {@see GL46::glUniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL46::glUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL46::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glLoadMatrix
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl2/gluPickMatrix
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function uniformMatrix4fv($location, $count, $transpose, ?\FFI\CData $value): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $transpose = $transpose instanceof \FFI\CData ? $transpose->cdata : $transpose;

        assert(Type::isInt16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Type::isUint8($transpose), 'Argument $transpose must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniformMatrix4fv', 'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glValidateProgram} checks to see whether the executables contained in $program can execute given
     * the current OpenGL state. The information generated by the validation process will be stored in $program's
     * information log. The validation information may consist of an empty string, or it may be a string containing
     * information about how the current program object interacts with the rest of current OpenGL state. This
     * provides a way for OpenGL implementers to convey more information about why the current program is
     * inefficient, suboptimal, failing to execute, and so on.
     *
     * The status of the validation operation will be stored as part of the program object's state. This value will
     * be set to {@see GL46::GL_TRUE} if the validation succeeded, and {@see GL46::GL_FALSE} otherwise. It can be
     * queried by calling {@see GL46::glGetProgram} with arguments $program and {@see GL46::GL_VALIDATE_STATUS}. If
     * validation is successful, $program is guaranteed to execute given the current state. Otherwise, $program is
     * guaranteed to not execute.
     *
     * This function is typically useful only during application development. The informational string stored in the
     * information log is completely implementation dependent; therefore, an application should not expect different
     * OpenGL implementations to produce identical information strings.
     *
     * @see http://docs.gl/gl2/glValidateProgram
     * @see http://docs.gl/gl4/glValidateProgram
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $program
     * @return void
     */
    public function validateProgram($program): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;

        assert(Type::isUint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glValidateProgram', 'void (*)(GLuint program)');
        $proc($program);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param float|\FFI\CData|\FFI\CFloat $x
     * @return void
     */
    public function vertexAttrib1d($index, $x): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $x = $x instanceof \FFI\CData ? $x->cdata : $x;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isFloat64($x), 'Argument $x must be a C-like GLdouble, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib1d', 'void (*)(GLuint index, GLdouble x)');
        $proc($index, $x);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public function vertexAttrib1dv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib1dv', 'void (*)(GLuint index, const GLdouble *v)');
        $proc($index, $v);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param float|\FFI\CData|\FFI\CFloat $x
     * @return void
     */
    public function vertexAttrib1f($index, $x): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $x = $x instanceof \FFI\CData ? $x->cdata : $x;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isFloat32($x), 'Argument $x must be a C-like GLfloat, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib1f', 'void (*)(GLuint index, GLfloat x)');
        $proc($index, $x);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public function vertexAttrib1fv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib1fv', 'void (*)(GLuint index, const GLfloat *v)');
        $proc($index, $v);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param int|\FFI\CData|\FFI\CInt $x
     * @return void
     */
    public function vertexAttrib1s($index, $x): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $x = $x instanceof \FFI\CData ? $x->cdata : $x;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isInt16($x), 'Argument $x must be a C-like GLshort, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib1s', 'void (*)(GLuint index, GLshort x)');
        $proc($index, $x);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public function vertexAttrib1sv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib1sv', 'void (*)(GLuint index, const GLshort *v)');
        $proc($index, $v);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param float|\FFI\CData|\FFI\CFloat $x
     * @param float|\FFI\CData|\FFI\CFloat $y
     * @return void
     */
    public function vertexAttrib2d($index, $x, $y): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $x = $x instanceof \FFI\CData ? $x->cdata : $x;
        $y = $y instanceof \FFI\CData ? $y->cdata : $y;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isFloat64($x), 'Argument $x must be a C-like GLdouble, but incompatible or overflow value given');
        assert(Type::isFloat64($y), 'Argument $y must be a C-like GLdouble, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib2d', 'void (*)(GLuint index, GLdouble x, GLdouble y)');
        $proc($index, $x, $y);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public function vertexAttrib2dv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib2dv', 'void (*)(GLuint index, const GLdouble *v)');
        $proc($index, $v);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param float|\FFI\CData|\FFI\CFloat $x
     * @param float|\FFI\CData|\FFI\CFloat $y
     * @return void
     */
    public function vertexAttrib2f($index, $x, $y): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $x = $x instanceof \FFI\CData ? $x->cdata : $x;
        $y = $y instanceof \FFI\CData ? $y->cdata : $y;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isFloat32($x), 'Argument $x must be a C-like GLfloat, but incompatible or overflow value given');
        assert(Type::isFloat32($y), 'Argument $y must be a C-like GLfloat, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib2f', 'void (*)(GLuint index, GLfloat x, GLfloat y)');
        $proc($index, $x, $y);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public function vertexAttrib2fv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib2fv', 'void (*)(GLuint index, const GLfloat *v)');
        $proc($index, $v);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param int|\FFI\CData|\FFI\CInt $x
     * @param int|\FFI\CData|\FFI\CInt $y
     * @return void
     */
    public function vertexAttrib2s($index, $x, $y): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $x = $x instanceof \FFI\CData ? $x->cdata : $x;
        $y = $y instanceof \FFI\CData ? $y->cdata : $y;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isInt16($x), 'Argument $x must be a C-like GLshort, but incompatible or overflow value given');
        assert(Type::isInt16($y), 'Argument $y must be a C-like GLshort, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib2s', 'void (*)(GLuint index, GLshort x, GLshort y)');
        $proc($index, $x, $y);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public function vertexAttrib2sv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib2sv', 'void (*)(GLuint index, const GLshort *v)');
        $proc($index, $v);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param float|\FFI\CData|\FFI\CFloat $x
     * @param float|\FFI\CData|\FFI\CFloat $y
     * @param float|\FFI\CData|\FFI\CFloat $z
     * @return void
     */
    public function vertexAttrib3d($index, $x, $y, $z): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $x = $x instanceof \FFI\CData ? $x->cdata : $x;
        $y = $y instanceof \FFI\CData ? $y->cdata : $y;
        $z = $z instanceof \FFI\CData ? $z->cdata : $z;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isFloat64($x), 'Argument $x must be a C-like GLdouble, but incompatible or overflow value given');
        assert(Type::isFloat64($y), 'Argument $y must be a C-like GLdouble, but incompatible or overflow value given');
        assert(Type::isFloat64($z), 'Argument $z must be a C-like GLdouble, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib3d', 'void (*)(GLuint index, GLdouble x, GLdouble y, GLdouble z)');
        $proc($index, $x, $y, $z);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public function vertexAttrib3dv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib3dv', 'void (*)(GLuint index, const GLdouble *v)');
        $proc($index, $v);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param float|\FFI\CData|\FFI\CFloat $x
     * @param float|\FFI\CData|\FFI\CFloat $y
     * @param float|\FFI\CData|\FFI\CFloat $z
     * @return void
     */
    public function vertexAttrib3f($index, $x, $y, $z): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $x = $x instanceof \FFI\CData ? $x->cdata : $x;
        $y = $y instanceof \FFI\CData ? $y->cdata : $y;
        $z = $z instanceof \FFI\CData ? $z->cdata : $z;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isFloat32($x), 'Argument $x must be a C-like GLfloat, but incompatible or overflow value given');
        assert(Type::isFloat32($y), 'Argument $y must be a C-like GLfloat, but incompatible or overflow value given');
        assert(Type::isFloat32($z), 'Argument $z must be a C-like GLfloat, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib3f', 'void (*)(GLuint index, GLfloat x, GLfloat y, GLfloat z)');
        $proc($index, $x, $y, $z);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public function vertexAttrib3fv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib3fv', 'void (*)(GLuint index, const GLfloat *v)');
        $proc($index, $v);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param int|\FFI\CData|\FFI\CInt $x
     * @param int|\FFI\CData|\FFI\CInt $y
     * @param int|\FFI\CData|\FFI\CInt $z
     * @return void
     */
    public function vertexAttrib3s($index, $x, $y, $z): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $x = $x instanceof \FFI\CData ? $x->cdata : $x;
        $y = $y instanceof \FFI\CData ? $y->cdata : $y;
        $z = $z instanceof \FFI\CData ? $z->cdata : $z;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isInt16($x), 'Argument $x must be a C-like GLshort, but incompatible or overflow value given');
        assert(Type::isInt16($y), 'Argument $y must be a C-like GLshort, but incompatible or overflow value given');
        assert(Type::isInt16($z), 'Argument $z must be a C-like GLshort, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib3s', 'void (*)(GLuint index, GLshort x, GLshort y, GLshort z)');
        $proc($index, $x, $y, $z);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public function vertexAttrib3sv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib3sv', 'void (*)(GLuint index, const GLshort *v)');
        $proc($index, $v);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public function vertexAttrib4Nbv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib4Nbv', 'void (*)(GLuint index, const GLbyte *v)');
        $proc($index, $v);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public function vertexAttrib4Niv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib4Niv', 'void (*)(GLuint index, const GLint *v)');
        $proc($index, $v);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public function vertexAttrib4Nsv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib4Nsv', 'void (*)(GLuint index, const GLshort *v)');
        $proc($index, $v);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param int|\FFI\CData|\FFI\CInt $x
     * @param int|\FFI\CData|\FFI\CInt $y
     * @param int|\FFI\CData|\FFI\CInt $z
     * @param int|\FFI\CData|\FFI\CInt $w
     * @return void
     */
    public function vertexAttrib4Nub($index, $x, $y, $z, $w): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $x = $x instanceof \FFI\CData ? $x->cdata : $x;
        $y = $y instanceof \FFI\CData ? $y->cdata : $y;
        $z = $z instanceof \FFI\CData ? $z->cdata : $z;
        $w = $w instanceof \FFI\CData ? $w->cdata : $w;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint8($x), 'Argument $x must be a C-like GLubyte, but incompatible or overflow value given');
        assert(Type::isUint8($y), 'Argument $y must be a C-like GLubyte, but incompatible or overflow value given');
        assert(Type::isUint8($z), 'Argument $z must be a C-like GLubyte, but incompatible or overflow value given');
        assert(Type::isUint8($w), 'Argument $w must be a C-like GLubyte, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib4Nub', 'void (*)(GLuint index, GLubyte x, GLubyte y, GLubyte z, GLubyte w)');
        $proc($index, $x, $y, $z, $w);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public function vertexAttrib4Nubv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib4Nubv', 'void (*)(GLuint index, const GLubyte *v)');
        $proc($index, $v);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public function vertexAttrib4Nuiv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib4Nuiv', 'void (*)(GLuint index, const GLuint *v)');
        $proc($index, $v);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public function vertexAttrib4Nusv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib4Nusv', 'void (*)(GLuint index, const GLushort *v)');
        $proc($index, $v);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public function vertexAttrib4bv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib4bv', 'void (*)(GLuint index, const GLbyte *v)');
        $proc($index, $v);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param float|\FFI\CData|\FFI\CFloat $x
     * @param float|\FFI\CData|\FFI\CFloat $y
     * @param float|\FFI\CData|\FFI\CFloat $z
     * @param float|\FFI\CData|\FFI\CFloat $w
     * @return void
     */
    public function vertexAttrib4d($index, $x, $y, $z, $w): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $x = $x instanceof \FFI\CData ? $x->cdata : $x;
        $y = $y instanceof \FFI\CData ? $y->cdata : $y;
        $z = $z instanceof \FFI\CData ? $z->cdata : $z;
        $w = $w instanceof \FFI\CData ? $w->cdata : $w;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isFloat64($x), 'Argument $x must be a C-like GLdouble, but incompatible or overflow value given');
        assert(Type::isFloat64($y), 'Argument $y must be a C-like GLdouble, but incompatible or overflow value given');
        assert(Type::isFloat64($z), 'Argument $z must be a C-like GLdouble, but incompatible or overflow value given');
        assert(Type::isFloat64($w), 'Argument $w must be a C-like GLdouble, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib4d', 'void (*)(GLuint index, GLdouble x, GLdouble y, GLdouble z, GLdouble w)');
        $proc($index, $x, $y, $z, $w);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public function vertexAttrib4dv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib4dv', 'void (*)(GLuint index, const GLdouble *v)');
        $proc($index, $v);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param float|\FFI\CData|\FFI\CFloat $x
     * @param float|\FFI\CData|\FFI\CFloat $y
     * @param float|\FFI\CData|\FFI\CFloat $z
     * @param float|\FFI\CData|\FFI\CFloat $w
     * @return void
     */
    public function vertexAttrib4f($index, $x, $y, $z, $w): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $x = $x instanceof \FFI\CData ? $x->cdata : $x;
        $y = $y instanceof \FFI\CData ? $y->cdata : $y;
        $z = $z instanceof \FFI\CData ? $z->cdata : $z;
        $w = $w instanceof \FFI\CData ? $w->cdata : $w;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isFloat32($x), 'Argument $x must be a C-like GLfloat, but incompatible or overflow value given');
        assert(Type::isFloat32($y), 'Argument $y must be a C-like GLfloat, but incompatible or overflow value given');
        assert(Type::isFloat32($z), 'Argument $z must be a C-like GLfloat, but incompatible or overflow value given');
        assert(Type::isFloat32($w), 'Argument $w must be a C-like GLfloat, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib4f', 'void (*)(GLuint index, GLfloat x, GLfloat y, GLfloat z, GLfloat w)');
        $proc($index, $x, $y, $z, $w);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public function vertexAttrib4fv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib4fv', 'void (*)(GLuint index, const GLfloat *v)');
        $proc($index, $v);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public function vertexAttrib4iv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib4iv', 'void (*)(GLuint index, const GLint *v)');
        $proc($index, $v);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param int|\FFI\CData|\FFI\CInt $x
     * @param int|\FFI\CData|\FFI\CInt $y
     * @param int|\FFI\CData|\FFI\CInt $z
     * @param int|\FFI\CData|\FFI\CInt $w
     * @return void
     */
    public function vertexAttrib4s($index, $x, $y, $z, $w): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $x = $x instanceof \FFI\CData ? $x->cdata : $x;
        $y = $y instanceof \FFI\CData ? $y->cdata : $y;
        $z = $z instanceof \FFI\CData ? $z->cdata : $z;
        $w = $w instanceof \FFI\CData ? $w->cdata : $w;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isInt16($x), 'Argument $x must be a C-like GLshort, but incompatible or overflow value given');
        assert(Type::isInt16($y), 'Argument $y must be a C-like GLshort, but incompatible or overflow value given');
        assert(Type::isInt16($z), 'Argument $z must be a C-like GLshort, but incompatible or overflow value given');
        assert(Type::isInt16($w), 'Argument $w must be a C-like GLshort, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib4s', 'void (*)(GLuint index, GLshort x, GLshort y, GLshort z, GLshort w)');
        $proc($index, $x, $y, $z, $w);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public function vertexAttrib4sv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib4sv', 'void (*)(GLuint index, const GLshort *v)');
        $proc($index, $v);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public function vertexAttrib4ubv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib4ubv', 'void (*)(GLuint index, const GLubyte *v)');
        $proc($index, $v);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public function vertexAttrib4uiv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib4uiv', 'void (*)(GLuint index, const GLuint *v)');
        $proc($index, $v);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL46::glVertexAttrib} call that specifies the index of the element to be modified and a value for that
     * element.
     *
     * These commands can be used to specify one, two, three, or all four components of the generic vertex attribute
     * specified by $index. A {@see GL46::1} in the name of the command indicates that only one value is passed, and
     * it will be used to modify the first component of the generic vertex attribute. The second and third components
     * will be set to 0, and the fourth component will be set to 1. Similarly, a {@see GL46::2} in the name of the
     * command indicates that values are provided for the first two components, the third component will be set to 0,
     * and the fourth component will be set to 1. A {@see GL46::3} in the name of the command indicates that values
     * are provided for the first three components and the fourth component will be set to 1, whereas a
     * {@see GL46::4} in the name indicates that values are provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i}, {@see GL46::d}, {@see GL46::ub}, {@see GL46::us},
     * and {@see GL46::ui} indicate whether the arguments are of type short, float, int, double, unsigned byte,
     * unsigned short, or unsigned int. When {@see GL46::v} is appended to the name, the commands can take a pointer
     * to an array of such values.
     *
     * Additional capitalized letters can indicate further alterations to the default behavior of the glVertexAttrib
     * function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments will be passed as fixed-point values that
     * are scaled to a normalized range according to the component conversion rules defined by the OpenGL
     * specification. Signed values are understood to represent fixed-point values in the range [-1,1], and unsigned
     * values are understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are extended to full signed or unsigned
     * integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are stored as packed components within a
     * larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are full 64-bit quantities and should be
     * passed directly to shader inputs declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type mat2, mat3, or mat4. Attributes of these
     * types may be loaded using the {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL46::glBindAttribLocation}. This allows an application to use more descriptive variable names
     * in a vertex shader. A subsequent change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the vertex shader.
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
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public function vertexAttrib4usv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttrib4usv', 'void (*)(GLuint index, const GLushort *v)');
        $proc($index, $v);
    }

    /**
     * {@see GL46::glVertexAttribPointer}, {@see GL46::glVertexAttribIPointer} and
     * {@see GL46::glVertexAttribLPointer} specify the location and data format of the array of generic vertex
     * attributes at index $index to use when rendering. $size specifies the number of components per attribute and
     * must be 1, 2, 3, 4, or {@see GL46::GL_BGRA}. $type specifies the data type of each component, and $stride
     * specifies the byte stride from one attribute to the next, allowing vertices and attributes to be packed into a
     * single array or stored in separate arrays.
     *
     * For {@see GL46::glVertexAttribPointer}, if $normalized is set to {@see GL46::GL_TRUE}, it indicates that
     * values stored in an integer format are to be mapped to the range [-1,1] (for signed values) or [0,1] (for
     * unsigned values) when they are accessed and converted to floating point. Otherwise, values will be converted
     * to floats directly without normalization.
     *
     * For {@see GL46::glVertexAttribIPointer}, only the integer types {@see GL46::GL_BYTE},
     * {@see GL46::GL_UNSIGNED_BYTE}, {@see GL46::GL_SHORT}, {@see GL46::GL_UNSIGNED_SHORT}, {@see GL46::GL_INT},
     * {@see GL46::GL_UNSIGNED_INT} are accepted. Values are always left as integer values.
     *
     * {@see GL46::glVertexAttribLPointer} specifies state for a generic vertex attribute array associated with a
     * shader attribute variable declared with 64-bit double precision components. $type must be
     * {@see GL46::GL_DOUBLE}. $index, $size, and $stride behave as described for {@see GL46::glVertexAttribPointer}
     * and {@see GL46::glVertexAttribIPointer}.
     *
     * If $pointer is not `NULL`, a non-zero named buffer object must be bound to the {@see GL46::GL_ARRAY_BUFFER}
     * target (see {@see GL46::glBindBuffer}), otherwise an error is generated. $pointer is treated as a byte offset
     * into the buffer object's data store. The buffer object binding ({@see GL46::GL_ARRAY_BUFFER_BINDING}) is saved
     * as generic vertex attribute array state ({@see GL46::GL_VERTEX_ATTRIB_ARRAY_BUFFER_BINDING}) for index $index.
     *
     * When a generic vertex attribute array is specified, $size, $type, $normalized, $stride, and $pointer are saved
     * as vertex array state, in addition to the current vertex array buffer object binding.
     *
     * To enable and disable a generic vertex attribute array, call {@see GL46::glEnableVertexAttribArray} and
     * {@see GL46::glDisableVertexAttribArray} with $index. If enabled, the generic vertex attribute array is used
     * when {@see GL46::glDrawArrays}, {@see GL46::glMultiDrawArrays}, {@see GL46::glDrawElements},
     * {@see GL46::glMultiDrawElements}, or {@see GL46::glDrawRangeElements} is called.
     *
     * @see http://docs.gl/gl2/glVertexAttribPointer
     * @see http://docs.gl/gl4/glVertexAttribPointer
     * @since 2.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param int|\FFI\CData|\FFI\CInt $size
     * @param int|\FFI\CData|\FFI\CInt $type
     * @param int|\FFI\CData|\FFI\CInt $normalized
     * @param int|\FFI\CData|\FFI\CInt $stride
     * @param \FFI\CData|\FFI\CPtr|null $pointer
     * @return void
     */
    public function vertexAttribPointer($index, $size, $type, $normalized, $stride, ?\FFI\CData $pointer): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $size = $size instanceof \FFI\CData ? $size->cdata : $size;
        $type = $type instanceof \FFI\CData ? $type->cdata : $type;
        $normalized = $normalized instanceof \FFI\CData ? $normalized->cdata : $normalized;
        $stride = $stride instanceof \FFI\CData ? $stride->cdata : $stride;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isInt16($size), 'Argument $size must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isUint16($type), 'Argument $type must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint8($normalized), 'Argument $normalized must be a C-like GLboolean, but incompatible or overflow value given');
        assert(Type::isInt16($stride), 'Argument $stride must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribPointer', 'void (*)(GLuint index, GLint size, GLenum type, GLboolean normalized, GLsizei stride, const void *pointer)');
        $proc($index, $size, $type, $normalized, $stride, $pointer);
    }
}
