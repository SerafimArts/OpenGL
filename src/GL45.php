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
 *
 * @version 4.5
 */
class GL45 extends GL44
{
    /**
     * Accepted by the $depth parameter of {@see GL45::clipControl}.
     *
     * @since 4.5
     * @var int
     */
    public const
        GL_NEGATIVE_ONE_TO_ONE = 0x935E,
        GL_ZERO_TO_ONE = 0x935F;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetIntegerv, GetFloatv, and GetDoublev.
     *
     * @since 4.5
     * @var int
     */
    public const
        GL_CLIP_ORIGIN = 0x935C,
        GL_CLIP_DEPTH_MODE = 0x935D;

    /**
     * Accepted by the $mode parameter of {@see GL30::beginConditionalRender}.
     *
     * @since 4.5
     * @var int
     */
    public const
        GL_QUERY_WAIT_INVERTED = 0x8E17,
        GL_QUERY_NO_WAIT_INVERTED = 0x8E18,
        GL_QUERY_BY_REGION_WAIT_INVERTED = 0x8E19,
        GL_QUERY_BY_REGION_NO_WAIT_INVERTED = 0x8E1A;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetDoublev, GetFloatv, GetIntegerv, and GetInteger64v.
     *
     * @since 4.5
     * @var int
     */
    public const
        GL_MAX_CULL_DISTANCES = 0x82F9,
        GL_MAX_COMBINED_CLIP_AND_CULL_DISTANCES = 0x82FA;

    /**
     * Accepted by the $pname parameter of GetTextureParameter{if}v and GetTextureParameterI{i ui}v.
     *
     * @since 4.5
     * @var int
     */
    public const GL_TEXTURE_TARGET = 0x1006;

    /**
     * Accepted by the $pname parameter of GetQueryObjectiv.
     *
     * @since 4.5
     * @var int
     */
    public const GL_QUERY_TARGET = 0x82EA;

    /**
     * Accepted by the $pname parameter of GetIntegerv, GetFloatv, GetBooleanv GetDoublev and GetInteger64v.
     *
     * @since 4.5
     * @var int
     */
    public const GL_CONTEXT_RELEASE_BEHAVIOR = 0x82FB;

    /**
     * Returned in $data by GetIntegerv, GetFloatv, GetBooleanv GetDoublev and GetInteger64v when $pname
     * is {@see GL45::GL_CONTEXT_RELEASE_BEHAVIOR}.
     *
     * @since 4.5
     * @var int
     */
    public const GL_CONTEXT_RELEASE_BEHAVIOR_FLUSH = 0x82FC;

    /**
     * Returned by {@see GL45::getGraphicsResetStatus}.
     *
     * @since 4.5
     * @var int
     */
    public const
        GL_GUILTY_CONTEXT_RESET = 0x8253,
        GL_INNOCENT_CONTEXT_RESET = 0x8254,
        GL_UNKNOWN_CONTEXT_RESET = 0x8255;

    /**
     * Accepted by the $value parameter of GetBooleanv, GetIntegerv, and GetFloatv.
     *
     * @since 4.5
     * @var int
     */
    public const GL_RESET_NOTIFICATION_STRATEGY = 0x8256;

    /**
     * Returned by GetIntegerv and related simple queries when $value is {@see GL45::GL_RESET_NOTIFICATION_STRATEGY}.
     *
     * @since 4.5
     * @var int
     */
    public const
        GL_LOSE_CONTEXT_ON_RESET = 0x8252,
        GL_NO_RESET_NOTIFICATION = 0x8261;

    /**
     * Returned by GetIntegerv when $pname is CONTEXT_FLAGS.
     *
     * @since 4.5
     * @var int
     */
    public const GL_CONTEXT_FLAG_ROBUST_ACCESS_BIT = 0x4;

    /**
     * Returned by {@see GL11::getError}.
     *
     * @since 4.5
     * @var int
     */
    public const GL_CONTEXT_LOST = 0x507;

    /**
     * {@see GL45::bindTextureUnit} binds an existing texture object to the texture unit numbered $unit.
     *
     * $texture must be zero or the name of an existing texture object. When $texture is the name of an existing
     * texture object, that object is bound to the target, in the corresponding texture unit, that was specified when
     * the object was created. When $texture is zero, each of the targets enumerated at the beginning of this section
     * is reset to its default texture for the corresponding texture image unit.
     *
     * @see http://docs.gl/gl4/glBindTextureUnit
     * @since 4.5
     * @param int $unit
     * @param int $texture
     * @return void
     */
    public function bindTextureUnit(int $unit, int $texture): void
    {
        $__proc = $this->proc('glBindTextureUnit', 'void (*)(GLuint unit, GLuint texture)');
        $__proc($unit, $texture);
    }

    /**
     * {@see GL45::blitFramebuffer} and {@see GL45::blitNamedFramebuffer} transfer a rectangle of pixel values
     * from one region of a read framebuffer to another region of a draw framebuffer.
     *
     * For {@see GL45::blitFramebuffer}, the read and draw framebuffers are those bound to the
     * {@see GL45::GL_READ_FRAMEBUFFER} and {@see GL45::GL_DRAW_FRAMEBUFFER} targets respectively.
     *
     * For {@see GL45::blitNamedFramebuffer}, $readFramebuffer and $drawFramebuffer are the names of the read and
     * draw framebuffer objects respectively. If $readFramebuffer or $drawFramebuffer is zero, then the default read
     * or draw framebuffer respectively is used.
     *
     * $mask is the bitwise OR of a number of values indicating which buffers are to be copied. The values are
     * {@see GL45::GL_COLOR_BUFFER_BIT}, {@see GL45::GL_DEPTH_BUFFER_BIT}, and {@see GL45::GL_STENCIL_BUFFER_BIT}.
     * The pixels corresponding to these buffers are copied from the source rectangle bounded by the locations
     * ($srcX0, $srcY0) and ($srcX1, $srcY1) to the destination rectangle bounded by the locations ($dstX0, $dstY0)
     * and ($dstX1, $dstY1). The lower bounds of the rectangle are inclusive, while the upper bounds are exclusive.
     *
     * The actual region taken from the read framebuffer is limited to the intersection of the source buffers being
     * transferred, which may include the color buffer selected by the read buffer, the depth buffer, and/or the
     * stencil buffer depending on mask. The actual region written to the draw framebuffer is limited to the
     * intersection of the destination buffers being written, which may include multiple draw buffers, the depth
     * buffer, and/or the stencil buffer depending on mask. Whether or not the source or destination regions are
     * altered due to these limits, the scaling and offset applied to pixels being transferred is performed as though
     * no such limits were present.
     *
     * If the sizes of the source and destination rectangles are not equal, $filter specifies the interpolation
     * method that will be applied to resize the source image , and must be {@see GL45::GL_NEAREST} or
     * {@see GL45::GL_LINEAR}. {@see GL45::GL_LINEAR} is only a valid interpolation method for the color buffer. If
     * $filter is not {@see GL45::GL_NEAREST} and $mask includes {@see GL45::GL_DEPTH_BUFFER_BIT} or
     * {@see GL45::GL_STENCIL_BUFFER_BIT}, no data is transferred and a {@see GL45::GL_INVALID_OPERATION} error is
     * generated.
     *
     * If $filter is {@see GL45::GL_LINEAR} and the source rectangle would require sampling outside the bounds of the
     * source framebuffer, values are read as if the {@see GL45::GL_CLAMP_TO_EDGE} texture wrapping mode were
     * applied.
     *
     * When the color buffer is transferred, values are taken from the read buffer of the specified read framebuffer
     * and written to each of the draw buffers of the specified draw framebuffer.
     *
     * If the source and destination rectangles overlap or are the same, and the read and draw buffers are the same,
     * the result of the operation is undefined.
     *
     * @see http://docs.gl/gl4/glBlitFramebuffer
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
    public function blitNamedFramebuffer(
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
        $__proc = $this->proc('glBlitNamedFramebuffer',
            'void (*)(GLuint readFramebuffer, GLuint drawFramebuffer, GLint srcX0, GLint srcY0, GLint srcX1, GLint srcY1, GLint dstX0, GLint dstY0, GLint dstX1, GLint dstY1, GLbitfield mask, GLenum filter)');
        $__proc($readFramebuffer, $drawFramebuffer, $srcX0, $srcY0, $srcX1, $srcY1, $dstX0, $dstY0, $dstX1, $dstY1,
            $mask, $filter);
    }

    /**
     * {@see GL45::checkFramebufferStatus} and {@see GL45::checkNamedFramebufferStatus} return the completeness
     * status of a framebuffer object when treated as a read or draw framebuffer, depending on the value of $target.
     *
     * For {@see GL45::checkFramebufferStatus}, the framebuffer checked is that bound to $target, which must be
     * {@see GL45::GL_DRAW_FRAMEBUFFER}, {@see GL45::GL_READ_FRAMEBUFFER} or {@see GL45::GL_FRAMEBUFFER}.
     * {@see GL45::GL_FRAMEBUFFER} is equivalent to {@see GL45::GL_DRAW_FRAMEBUFFER}.
     *
     * For {@see GL45::checkNamedFramebufferStatus}, $framebuffer is zero or the name of the framebuffer object to
     * check. If $framebuffer is zero, then the status of the default read or draw framebuffer, as determined by
     * $target, is returned.
     *
     * The return value is {@see GL45::GL_FRAMEBUFFER_COMPLETE} if the specified framebuffer is complete. Otherwise,
     * the return value is determined as follows:    {@see GL45::GL_FRAMEBUFFER_UNDEFINED} is returned if the
     * specified framebuffer is the default read or draw framebuffer, but the default framebuffer does not exist.
     * {@see GL45::GL_FRAMEBUFFER_INCOMPLETE_ATTACHMENT} is returned if any of the framebuffer attachment points are
     * framebuffer incomplete.     {@see GL45::GL_FRAMEBUFFER_INCOMPLETE_MISSING_ATTACHMENT} is returned if the
     * framebuffer does not have at least one image attached to it.
     * {@see GL45::GL_FRAMEBUFFER_INCOMPLETE_DRAW_BUFFER} is returned if the value of
     * {@see GL45::GL_FRAMEBUFFER_ATTACHMENT_OBJECT_TYPE} is {@see GL45::GL_NONE} for any color attachment point(s)
     * named by {@see GL45::GL_DRAW_BUFFERi}.     {@see GL45::GL_FRAMEBUFFER_INCOMPLETE_READ_BUFFER} is returned if
     * {@see GL45::GL_READ_BUFFER} is not {@see GL45::GL_NONE} and the value of
     * {@see GL45::GL_FRAMEBUFFER_ATTACHMENT_OBJECT_TYPE} is {@see GL45::GL_NONE} for the color attachment point
     * named by {@see GL45::GL_READ_BUFFER}.     {@see GL45::GL_FRAMEBUFFER_UNSUPPORTED} is returned if the
     * combination of internal formats of the attached images violates an implementation-dependent set of
     * restrictions.     {@see GL45::GL_FRAMEBUFFER_INCOMPLETE_MULTISAMPLE} is returned if the value of
     * {@see GL45::GL_RENDERBUFFER_SAMPLES} is not the same for all attached renderbuffers; if the value of
     * {@see GL45::GL_TEXTURE_SAMPLES} is the not same for all attached textures; or, if the attached images are a
     * mix of renderbuffers and textures, the value of {@see GL45::GL_RENDERBUFFER_SAMPLES} does not match the value
     * of {@see GL45::GL_TEXTURE_SAMPLES}.     {@see GL45::GL_FRAMEBUFFER_INCOMPLETE_MULTISAMPLE} is also returned if
     * the value of {@see GL45::GL_TEXTURE_FIXED_SAMPLE_LOCATIONS} is not the same for all attached textures; or, if
     * the attached images are a mix of renderbuffers and textures, the value of
     * {@see GL45::GL_TEXTURE_FIXED_SAMPLE_LOCATIONS} is not {@see GL45::GL_TRUE} for all attached textures.
     * {@see GL45::GL_FRAMEBUFFER_INCOMPLETE_LAYER_TARGETS} is returned if any framebuffer attachment is layered, and
     * any populated attachment is not layered, or if all populated color attachments are not from textures of the
     * same target.
     *
     * Additionally, if an error occurs, zero is returned.
     *
     * @see http://docs.gl/gl4/glCheckFramebufferStatus
     * @since 4.5
     * @param int $framebuffer
     * @param int $target
     * @return int
     */
    public function checkNamedFramebufferStatus(int $framebuffer, int $target): int
    {
        $__proc = $this->proc('glCheckNamedFramebufferStatus', 'GLenum (*)(GLuint framebuffer, GLenum target)');

        return $__proc($framebuffer, $target);
    }

    /**
     * {@see GL45::clearBufferData} and {@see GL45::clearNamedBufferData} fill the entirety of a buffer object's
     * data store with data from client memory.
     *
     * Data, initially supplied in a format specified by $format in data type $type is read from the memory address
     * given by $data and converted into the internal representation given by $internalformat, which must be one of
     * the following sized internal formats:
     *
     * | {@see GL45::GL_R8}       | ubyte  | 1 | YES | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R16}      | ushort | 1 | YES | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R16F}     | half   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R32F}     | float  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R8I}      | byte   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R16I}     | short  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R32I}     | int    | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R8UI}     | ubyte  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R16UI}    | ushort | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R32UI}    | uint   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL45::GL_RG8}      | ubyte  | 2 | YES | R | G | 0 | 1 |
     * | {@see GL45::GL_RG16}     | ushort | 2 | YES | R | G | 0 | 1 |
     * | {@see GL45::GL_RG16F}    | half   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL45::GL_RG32F}    | float  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL45::GL_RG8I}     | byte   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL45::GL_RG16I}    | short  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL45::GL_RG32I}    | int    | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL45::GL_RG8UI}    | ubyte  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL45::GL_RG16UI}   | ushort | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL45::GL_RG32UI}   | uint   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL45::GL_RGB32F}   | float  | 3 | NO  | R | G | B | 1 |
     * | {@see GL45::GL_RGB32I}   | int    | 3 | NO  | R | G | B | 1 |
     * | {@see GL45::GL_RGB32UI}  | uint   | 3 | NO  | R | G | B | 1 |
     * | {@see GL45::GL_RGBA8}    | uint   | 4 | YES | R | G | B | A |
     * | {@see GL45::GL_RGBA16}   | short  | 4 | YES | R | G | B | A |
     * | {@see GL45::GL_RGBA16F}  | half   | 4 | NO  | R | G | B | A |
     * | {@see GL45::GL_RGBA32F}  | float  | 4 | NO  | R | G | B | A |
     * | {@see GL45::GL_RGBA8I}   | byte   | 4 | NO  | R | G | B | A |
     * | {@see GL45::GL_RGBA16I}  | short  | 4 | NO  | R | G | B | A |
     * | {@see GL45::GL_RGBA32I}  | int    | 4 | NO  | R | G | B | A |
     * | {@see GL45::GL_RGBA8UI}  | ubyte  | 4 | NO  | R | G | B | A |
     * | {@see GL45::GL_RGBA16UI} | ushort | 4 | NO  | R | G | B | A |
     * | {@see GL45::GL_RGBA32UI} | uint   | 4 | NO  | R | G | B | A |
     *
     * This converted data is then replicated throughout the buffer object's data store. If $data is NULL, then the
     * buffer's data store is filled with zeros.
     *
     * @see http://docs.gl/gl4/glClearBufferData
     * @since 4.5
     * @param int $buffer
     * @param int $internalformat
     * @param int $format
     * @param int $type
     * @param CData|null $data
     * @return void
     */
    public function clearNamedBufferData(
        int $buffer,
        int $internalformat,
        int $format,
        int $type,
        ?CData $data
    ): void {
        $__proc = $this->proc('glClearNamedBufferData',
            'void (*)(GLuint buffer, GLenum internalformat, GLenum format, GLenum type, const void *data)');
        $__proc($buffer, $internalformat, $format, $type, $data);
    }

    /**
     * {@see GL45::clearBufferSubData} and {@see GL45::clearNamedBufferSubData} fill a specified region of a
     * buffer object's data store with data from client memory.
     *
     * $offset and $size specify the extent of the region within the data store of the buffer object to fill with
     * data. Data, initially supplied in a format specified by $format in data type $type is read from the memory
     * address given by $data and converted into the internal representation given by $internalformat, which must be
     * one of the following sized internal formats:
     *
     * | {@see GL45::GL_R8}       | ubyte  | 1 | YES | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R16}      | ushort | 1 | YES | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R16F}     | half   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R32F}     | float  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R8I}      | byte   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R16I}     | short  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R32I}     | int    | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R8UI}     | ubyte  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R16UI}    | ushort | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R32UI}    | uint   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL45::GL_RG8}      | ubyte  | 2 | YES | R | G | 0 | 1 |
     * | {@see GL45::GL_RG16}     | ushort | 2 | YES | R | G | 0 | 1 |
     * | {@see GL45::GL_RG16F}    | half   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL45::GL_RG32F}    | float  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL45::GL_RG8I}     | byte   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL45::GL_RG16I}    | short  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL45::GL_RG32I}    | int    | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL45::GL_RG8UI}    | ubyte  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL45::GL_RG16UI}   | ushort | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL45::GL_RG32UI}   | uint   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL45::GL_RGB32F}   | float  | 3 | NO  | R | G | B | 1 |
     * | {@see GL45::GL_RGB32I}   | int    | 3 | NO  | R | G | B | 1 |
     * | {@see GL45::GL_RGB32UI}  | uint   | 3 | NO  | R | G | B | 1 |
     * | {@see GL45::GL_RGBA8}    | uint   | 4 | YES | R | G | B | A |
     * | {@see GL45::GL_RGBA16}   | short  | 4 | YES | R | G | B | A |
     * | {@see GL45::GL_RGBA16F}  | half   | 4 | NO  | R | G | B | A |
     * | {@see GL45::GL_RGBA32F}  | float  | 4 | NO  | R | G | B | A |
     * | {@see GL45::GL_RGBA8I}   | byte   | 4 | NO  | R | G | B | A |
     * | {@see GL45::GL_RGBA16I}  | short  | 4 | NO  | R | G | B | A |
     * | {@see GL45::GL_RGBA32I}  | int    | 4 | NO  | R | G | B | A |
     * | {@see GL45::GL_RGBA8UI}  | ubyte  | 4 | NO  | R | G | B | A |
     * | {@see GL45::GL_RGBA16UI} | ushort | 4 | NO  | R | G | B | A |
     * | {@see GL45::GL_RGBA32UI} | uint   | 4 | NO  | R | G | B | A |
     *
     * This converted data is then replicated throughout the specified region of the buffer object's data store. If
     * $data is NULL, then the subrange of the buffer's data store is filled with zeros.
     *
     * @see http://docs.gl/gl4/glClearBufferSubData
     * @since 4.5
     * @param int $buffer
     * @param int $internalformat
     * @param int $offset
     * @param int $size
     * @param int $format
     * @param int $type
     * @param CData|null $data
     * @return void
     */
    public function clearNamedBufferSubData(
        int $buffer,
        int $internalformat,
        int $offset,
        int $size,
        int $format,
        int $type,
        ?CData $data
    ): void {
        $__proc = $this->proc('glClearNamedBufferSubData',
            'void (*)(GLuint buffer, GLenum internalformat, GLintptr offset, GLsizeiptr size, GLenum format, GLenum type, const void *data)');
        $__proc($buffer, $internalformat, $offset, $size, $format, $type, $data);
    }

    /**
     * {@see GL45::createFramebuffers} returns $n previously unused framebuffer names in $framebuffers, each
     * representing a new framebuffer object initialized to the default state.
     *
     * @see http://docs.gl/gl4/glCreateFramebuffers
     * @since 4.5
     * @param int $framebuffer
     * @param int $buffer
     * @param int $drawbuffer
     * @param float $depth
     * @param int $stencil
     * @return void
     */
    public function clearNamedFramebufferfi(
        int $framebuffer,
        int $buffer,
        int $drawbuffer,
        float $depth,
        int $stencil
    ): void {
        $__proc = $this->proc('glClearNamedFramebufferfi',
            'void (*)(GLuint framebuffer, GLenum buffer, GLint drawbuffer, GLfloat depth, GLint stencil)');
        $__proc($framebuffer, $buffer, $drawbuffer, $depth, $stencil);
    }

    /**
     * {@see GL45::createFramebuffers} returns $n previously unused framebuffer names in $framebuffers, each
     * representing a new framebuffer object initialized to the default state.
     *
     * @see http://docs.gl/gl4/glCreateFramebuffers
     * @since 4.5
     * @param int $framebuffer
     * @param int $buffer
     * @param int $drawbuffer
     * @param CData|null $value
     * @return void
     */
    public function clearNamedFramebufferfv(int $framebuffer, int $buffer, int $drawbuffer, ?CData $value): void
    {
        $__proc = $this->proc('glClearNamedFramebufferfv',
            'void (*)(GLuint framebuffer, GLenum buffer, GLint drawbuffer, const GLfloat *value)');
        $__proc($framebuffer, $buffer, $drawbuffer, $value);
    }

    /**
     * {@see GL45::createFramebuffers} returns $n previously unused framebuffer names in $framebuffers, each
     * representing a new framebuffer object initialized to the default state.
     *
     * @see http://docs.gl/gl4/glCreateFramebuffers
     * @since 4.5
     * @param int $framebuffer
     * @param int $buffer
     * @param int $drawbuffer
     * @param CData|null $value
     * @return void
     */
    public function clearNamedFramebufferiv(int $framebuffer, int $buffer, int $drawbuffer, ?CData $value): void
    {
        $__proc = $this->proc('glClearNamedFramebufferiv',
            'void (*)(GLuint framebuffer, GLenum buffer, GLint drawbuffer, const GLint *value)');
        $__proc($framebuffer, $buffer, $drawbuffer, $value);
    }

    /**
     * {@see GL45::createFramebuffers} returns $n previously unused framebuffer names in $framebuffers, each
     * representing a new framebuffer object initialized to the default state.
     *
     * @see http://docs.gl/gl4/glCreateFramebuffers
     * @since 4.5
     * @param int $framebuffer
     * @param int $buffer
     * @param int $drawbuffer
     * @param CData|null $value
     * @return void
     */
    public function clearNamedFramebufferuiv(int $framebuffer, int $buffer, int $drawbuffer, ?CData $value): void
    {
        $__proc = $this->proc('glClearNamedFramebufferuiv',
            'void (*)(GLuint framebuffer, GLenum buffer, GLint drawbuffer, const GLuint *value)');
        $__proc($framebuffer, $buffer, $drawbuffer, $value);
    }

    /**
     * {@see GL45::clipControl} controls the clipping volume behavior and the clip coordinate to window coordinate
     * transformation behavior.
     *
     * The view volume is defined by $$z_{min} \\leq z_c \\leq w_c$$ where $z_{min} = -w_c$ when $depth is
     * {@see GL45::GL_NEGATIVE_ONE_TO_ONE}, and $z_{min} = 0$ when $depth is {@see GL45::GL_ZERO_TO_ONE}.
     *
     * The normalized device coordinate $y_d$ is given by $$y_d = { { f \\times y_c } \\over w_c }$$ where $f = 1$
     * when $origin is {@see GL45::GL_LOWER_LEFT}, and $f = -1$ when $origin is {@see GL45::GL_UPPER_LEFT}.
     *
     * The window coordinate $z_w$ is given by $$z_w = s \\times z_d + b$$ where $s = { { f - n } \\over 2 }$ and $b
     * = { {n + f} \\over 2 }$ when $depth is {@see GL45::GL_NEGATIVE_ONE_TO_ONE}, and $s = f - n$ and $b = n$ when
     * $depth is {@see GL45::GL_ZERO_TO_ONE}. $n$ and $f$ are the near and far depth range values set with
     * {@see GL45::depthRange}.
     *
     * Finally, the polygon area computation defined by {@see GL45::_FrontFacing} to determine if a polygon is
     * front- or back-facing has its sign negated when $origin is {@see GL45::GL_UPPER_LEFT}.
     *
     * @see http://docs.gl/gl4/glClipControl
     * @since 4.5
     * @param int $origin
     * @param int $depth
     * @return void
     */
    public function clipControl(int $origin, int $depth): void
    {
        $__proc = $this->proc('glClipControl', 'void (*)(GLenum origin, GLenum depth)');
        $__proc($origin, $depth);
    }

    /**
     * Texturing allows elements of an image array to be read by shaders.
     *
     * {@see GL45::compressedTexSubImage1D} and {@see GL45::compressedTextureSubImage1D} redefine a contiguous
     * subregion of an existing one-dimensional texture image. The texels referenced by $data replace the portion of
     * the existing texture array with x indices $xoffset and    xoffset + width - 1  , inclusive. This region may
     * not include any texels outside the range of the texture array as it was originally specified. It is not an
     * error to specify a subtexture with width of 0, but such a specification has no effect.
     *
     * $internalformat must be a known compressed image format (such as {@see GL45::GL_RGTC}) or an
     * extension-specified compressed-texture format. The $format of the compressed texture image is selected by the
     * GL implementation that compressed it (see {@see GL45::texImage1D}), and should be queried at the time the
     * texture was compressed with {@see GL45::getTexLevelParameter}.
     *
     * If a non-zero named buffer object is bound to the {@see GL45::GL_PIXEL_UNPACK_BUFFER} target (see
     * {@see GL45::bindBuffer}) while a texture image is specified, $data is treated as a byte offset into the
     * buffer object's data store.
     *
     * @see http://docs.gl/gl2/glCompressedTexSubImage1D
     * @see http://docs.gl/gl4/glCompressedTexSubImage1D
     * @since 4.5
     * @param int $texture
     * @param int $level
     * @param int $xoffset
     * @param int $width
     * @param int $format
     * @param int $imageSize
     * @param CData|null $data
     * @return void
     */
    public function compressedTextureSubImage1D(
        int $texture,
        int $level,
        int $xoffset,
        int $width,
        int $format,
        int $imageSize,
        ?CData $data
    ): void {
        $__proc = $this->proc('glCompressedTextureSubImage1D',
            'void (*)(GLuint texture, GLint level, GLint xoffset, GLsizei width, GLenum format, GLsizei imageSize, const void *data)');
        $__proc($texture, $level, $xoffset, $width, $format, $imageSize, $data);
    }

    /**
     * Texturing allows elements of an image array to be read by shaders.
     *
     * {@see GL45::compressedTexSubImage2D} and {@see GL45::compressedTextureSubImage2D} redefine a contiguous
     * subregion of an existing two-dimensional texture image. The texels referenced by $data replace the portion of
     * the existing texture array with x indices $xoffset and    xoffset + width - 1  , and the y indices $yoffset
     * and    yoffset + height - 1  , inclusive. This region may not include any texels outside the range of the
     * texture array as it was originally specified. It is not an error to specify a subtexture with width of 0, but
     * such a specification has no effect.
     *
     * $internalformat must be a known compressed image format (such as {@see GL45::GL_RGTC}) or an
     * extension-specified compressed-texture format. The $format of the compressed texture image is selected by the
     * GL implementation that compressed it (see {@see GL45::texImage2D}) and should be queried at the time the
     * texture was compressed with {@see GL45::getTexLevelParameter}.
     *
     * If a non-zero named buffer object is bound to the {@see GL45::GL_PIXEL_UNPACK_BUFFER} target (see
     * {@see GL45::bindBuffer}) while a texture image is specified, $data is treated as a byte offset into the
     * buffer object's data store.
     *
     * @see http://docs.gl/gl2/glCompressedTexSubImage2D
     * @see http://docs.gl/gl4/glCompressedTexSubImage2D
     * @since 4.5
     * @param int $texture
     * @param int $level
     * @param int $xoffset
     * @param int $yoffset
     * @param int $width
     * @param int $height
     * @param int $format
     * @param int $imageSize
     * @param CData|null $data
     * @return void
     */
    public function compressedTextureSubImage2D(
        int $texture,
        int $level,
        int $xoffset,
        int $yoffset,
        int $width,
        int $height,
        int $format,
        int $imageSize,
        ?CData $data
    ): void {
        $__proc = $this->proc('glCompressedTextureSubImage2D',
            'void (*)(GLuint texture, GLint level, GLint xoffset, GLint yoffset, GLsizei width, GLsizei height, GLenum format, GLsizei imageSize, const void *data)');
        $__proc($texture, $level, $xoffset, $yoffset, $width, $height, $format, $imageSize, $data);
    }

    /**
     * Texturing allows elements of an image array to be read by shaders.
     *
     * {@see GL45::compressedTexSubImage3D} and {@see GL45::compressedTextureSubImage3D} redefine a contiguous
     * subregion of an existing three-dimensional texture image. The texels referenced by $data replace the portion
     * of the existing texture array with x indices $xoffset and    xoffset + width - 1  , and the y indices $yoffset
     * and    yoffset + height - 1  , and the z indices $zoffset and    zoffset + depth - 1  , inclusive. This region
     * may not include any texels outside the range of the texture array as it was originally specified. It is not an
     * error to specify a subtexture with width of 0, but such a specification has no effect.
     *
     * $internalformat must be a known compressed image format (such as {@see GL45::GL_RGTC}) or an
     * extension-specified compressed-texture format. The $format of the compressed texture image is selected by the
     * GL implementation that compressed it (see {@see GL45::texImage3D}) and should be queried at the time the
     * texture was compressed with {@see GL45::getTexLevelParameter}.
     *
     * If a non-zero named buffer object is bound to the {@see GL45::GL_PIXEL_UNPACK_BUFFER} target (see
     * {@see GL45::bindBuffer}) while a texture image is specified, $data is treated as a byte offset into the
     * buffer object's data store.
     *
     * @see http://docs.gl/gl2/glCompressedTexSubImage3D
     * @see http://docs.gl/gl4/glCompressedTexSubImage3D
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
     * @param CData|null $data
     * @return void
     */
    public function compressedTextureSubImage3D(
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
        ?CData $data
    ): void {
        $__proc = $this->proc('glCompressedTextureSubImage3D',
            'void (*)(GLuint texture, GLint level, GLint xoffset, GLint yoffset, GLint zoffset, GLsizei width, GLsizei height, GLsizei depth, GLenum format, GLsizei imageSize, const void *data)');
        $__proc($texture, $level, $xoffset, $yoffset, $zoffset, $width, $height, $depth, $format, $imageSize, $data);
    }

    /**
     * {@see GL45::copyBufferSubData} and {@see GL45::copyNamedBufferSubData} copy part of the data store
     * attached to a source buffer object to the data store attached to a destination buffer object. The number of
     * basic machine units indicated by $size is copied from the source at offset $readOffset to the destination at
     * $writeOffset. $readOffset, $writeOffset and $size are in terms of basic machine units.
     *
     * For {@see GL45::copyBufferSubData}, $readTarget and $writeTarget specify the targets to which the source and
     * destination buffer objects are bound, and must each be one of the buffer binding targets in the following
     * table:
     *
     * | {@see GL45::GL_ARRAY_BUFFER}              | Vertex attributes                  |
     * | {@see GL45::GL_ATOMIC_COUNTER_BUFFER}     | Atomic counter storage             |
     * | {@see GL45::GL_COPY_READ_BUFFER}          | Buffer copy source                 |
     * | {@see GL45::GL_COPY_WRITE_BUFFER}         | Buffer copy destination            |
     * | {@see GL45::GL_DISPATCH_INDIRECT_BUFFER}  | Indirect compute dispatch commands |
     * | {@see GL45::GL_DRAW_INDIRECT_BUFFER}      | Indirect command arguments         |
     * | {@see GL45::GL_ELEMENT_ARRAY_BUFFER}      | Vertex array indices               |
     * | {@see GL45::GL_PIXEL_PACK_BUFFER}         | Pixel read target                  |
     * | {@see GL45::GL_PIXEL_UNPACK_BUFFER}       | Texture data source                |
     * | {@see GL45::GL_QUERY_BUFFER}              | Query result buffer                |
     * | {@see GL45::GL_SHADER_STORAGE_BUFFER}     | Read-write storage for shaders     |
     * | {@see GL45::GL_TEXTURE_BUFFER}            | Texture data buffer                |
     * | {@see GL45::GL_TRANSFORM_FEEDBACK_BUFFER} | Transform feedback buffer          |
     * | {@see GL45::GL_UNIFORM_BUFFER}            | Uniform block storage              |
     *
     * Any of these targets may be used, but the targets {@see GL45::GL_COPY_READ_BUFFER} and
     * {@see GL45::GL_COPY_WRITE_BUFFER} are provided specifically to allow copies between buffers without disturbing
     * other GL state.
     *
     * $readOffset, $writeOffset and $size must all be greater than or equal to zero. Furthermore, $readOffset+size$
     * must not exceeed the size of the source buffer object, and $writeOffset+size$ must not exceeed the size of the
     * buffer bound to $writeTarget. If the source and destination are the same buffer object, then the source and
     * destination ranges must not overlap.
     *
     * @see http://docs.gl/gl4/glCopyBufferSubData
     * @since 4.5
     * @param int $readBuffer
     * @param int $writeBuffer
     * @param int $readOffset
     * @param int $writeOffset
     * @param int $size
     * @return void
     */
    public function copyNamedBufferSubData(
        int $readBuffer,
        int $writeBuffer,
        int $readOffset,
        int $writeOffset,
        int $size
    ): void {
        $__proc = $this->proc('glCopyNamedBufferSubData',
            'void (*)(GLuint readBuffer, GLuint writeBuffer, GLintptr readOffset, GLintptr writeOffset, GLsizeiptr size)');
        $__proc($readBuffer, $writeBuffer, $readOffset, $writeOffset, $size);
    }

    /**
     * {@see GL45::copyTexSubImage1D} and {@see GL45::copyTextureSubImage1D} replace a portion of a
     * one-dimensional texture image with pixels from the current {@see GL45::GL_READ_BUFFER} (rather than from main
     * memory, as is the case for {@see GL45::texSubImage1D}). For {@see GL45::copyTexSubImage1D}, the texture
     * object that is bound to $target will be used for the process. For {@see GL45::copyTextureSubImage1D},
     * $texture tells which texture object should be used for the purpose of the call.
     *
     * The screen-aligned pixel row with left corner at ($x,\\ $y), and with length $width replaces the portion of
     * the texture array with x indices $xoffset through    xoffset + width - 1   , inclusive. The destination in the
     * texture array may not include any texels outside the texture array as it was originally specified.
     *
     * The pixels in the row are processed exactly as if {@see GL45::readPixels} had been called, but the process
     * stops just before final conversion. At this point, all pixel component values are clamped to the range    0 1
     *   and then converted to the texture's internal format for storage in the texel array.
     *
     * It is not an error to specify a subtexture with zero width, but such a specification has no effect. If any of
     * the pixels within the specified row of the current {@see GL45::GL_READ_BUFFER} are outside the read window
     * associated with the current rendering context, then the values obtained for those pixels are undefined.
     *
     * No change is made to the internalformat or width parameters of the specified texture array or to texel values
     * outside the specified subregion.
     *
     * @see http://docs.gl/gl2/glCopyTexSubImage1D
     * @see http://docs.gl/gl4/glCopyTexSubImage1D
     * @since 4.5
     * @param int $texture
     * @param int $level
     * @param int $xoffset
     * @param int $x
     * @param int $y
     * @param int $width
     * @return void
     */
    public function copyTextureSubImage1D(int $texture, int $level, int $xoffset, int $x, int $y, int $width): void
    {
        $__proc = $this->proc('glCopyTextureSubImage1D',
            'void (*)(GLuint texture, GLint level, GLint xoffset, GLint x, GLint y, GLsizei width)');
        $__proc($texture, $level, $xoffset, $x, $y, $width);
    }

    /**
     * {@see GL45::copyTexSubImage2D} and {@see GL45::copyTextureSubImage2D} replace a rectangular portion of a
     * two-dimensional texture image, cube-map texture image, rectangular image, or a linear portion of a number of
     * slices of a one-dimensional array texture with pixels from the current {@see GL45::GL_READ_BUFFER} (rather
     * than from main memory, as is the case for {@see GL45::texSubImage2D}).
     *
     * The screen-aligned pixel rectangle with lower left corner at    x y   and with width $width and height $height
     * replaces the portion of the texture array with x indices $xoffset through    xoffset + width - 1  , inclusive,
     * and y indices $yoffset through    yoffset + height - 1  , inclusive, at the mipmap level specified by $level.
     *
     * The pixels in the rectangle are processed exactly as if {@see GL45::readPixels} had been called, but the
     * process stops just before final conversion. At this point, all pixel component values are clamped to the range
     * $[0,1]$ and then converted to the texture's internal format for storage in the texel array.
     *
     * The destination rectangle in the texture array may not include any texels outside the texture array as it was
     * originally specified. It is not an error to specify a subtexture with zero width or height, but such a
     * specification has no effect.
     *
     * When $target is {@see GL45::GL_TEXTURE_1D_ARRAY} then the y coordinate and height are treated as the start
     * slice and number of slices to modify.
     *
     * If any of the pixels within the specified rectangle of the current {@see GL45::GL_READ_BUFFER} are outside the
     * read window associated with the current rendering context, then the values obtained for those pixels are
     * undefined.
     *
     * No change is made to the internalformat, width, or height, parameters of the specified texture array or to
     * texel values outside the specified subregion.
     *
     * @see http://docs.gl/gl2/glCopyTexSubImage2D
     * @see http://docs.gl/gl4/glCopyTexSubImage2D
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
    public function copyTextureSubImage2D(
        int $texture,
        int $level,
        int $xoffset,
        int $yoffset,
        int $x,
        int $y,
        int $width,
        int $height
    ): void {
        $__proc = $this->proc('glCopyTextureSubImage2D',
            'void (*)(GLuint texture, GLint level, GLint xoffset, GLint yoffset, GLint x, GLint y, GLsizei width, GLsizei height)');
        $__proc($texture, $level, $xoffset, $yoffset, $x, $y, $width, $height);
    }

    /**
     * {@see GL45::copyTexSubImage3D} and {@see GL45::copyTextureSubImage3D} functions replace a rectangular
     * portion of a three-dimensional or two-dimensional array texture image with pixels from the current
     * {@see GL45::GL_READ_BUFFER} (rather than from main memory, as is the case for {@see GL45::texSubImage3D}).
     *
     * The screen-aligned pixel rectangle with lower left corner at ($x, $y) and with width $width and height $height
     * replaces the portion of the texture array with x indices $xoffset through    xoffset + width - 1  , inclusive,
     * and y indices $yoffset through    yoffset + height - 1  , inclusive, at z index $zoffset and at the mipmap
     * level specified by $level.
     *
     * The pixels in the rectangle are processed exactly as if {@see GL45::readPixels} had been called, but the
     * process stops just before final conversion. At this point, all pixel component values are clamped to the range
     *    0 1   and then converted to the texture's internal format for storage in the texel array.
     *
     * The destination rectangle in the texture array may not include any texels outside the texture array as it was
     * originally specified. It is not an error to specify a subtexture with zero width or height, but such a
     * specification has no effect.
     *
     * If any of the pixels within the specified rectangle of the current {@see GL45::GL_READ_BUFFER} are outside the
     * read window associated with the current rendering context, then the values obtained for those pixels are
     * undefined.
     *
     * No change is made to the internalformat, width, height, depth, or border parameters of the specified texture
     * array or to texel values outside the specified subregion.
     *
     * @see http://docs.gl/gl2/glCopyTexSubImage3D
     * @see http://docs.gl/gl4/glCopyTexSubImage3D
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
    public function copyTextureSubImage3D(
        int $texture,
        int $level,
        int $xoffset,
        int $yoffset,
        int $zoffset,
        int $x,
        int $y,
        int $width,
        int $height
    ): void {
        $__proc = $this->proc('glCopyTextureSubImage3D',
            'void (*)(GLuint texture, GLint level, GLint xoffset, GLint yoffset, GLint zoffset, GLint x, GLint y, GLsizei width, GLsizei height)');
        $__proc($texture, $level, $xoffset, $yoffset, $zoffset, $x, $y, $width, $height);
    }

    /**
     * {@see GL45::createBuffers} returns $n previously unused buffer names in $buffers, each representing a new
     * buffer object initialized as if it had been bound to an unspecified target.
     *
     * @see http://docs.gl/gl4/glCreateBuffers
     * @since 4.5
     * @param int $n
     * @param int|null $buffers
     * @return void
     */
    public function createBuffers(int $n, ?int &$buffers): void
    {
        $buffersCType = $this->info->ffi->new('GLuint', false);
        try {
            $__proc = $this->proc('glCreateBuffers', 'void (*)(GLsizei n, GLuint *buffers)');
            $__proc($n, \FFI::addr($buffersCType));
        } finally {
            $buffers = $buffersCType->cdata;
            \FFI::free($buffersCType);
        }
    }

    /**
     * {@see GL45::createFramebuffers} returns $n previously unused framebuffer names in $framebuffers, each
     * representing a new framebuffer object initialized to the default state.
     *
     * @see http://docs.gl/gl4/glCreateFramebuffers
     * @since 4.5
     * @param int $n
     * @param int|null $framebuffers
     * @return void
     */
    public function createFramebuffers(int $n, ?int &$framebuffers): void
    {
        $framebuffersCType = $this->info->ffi->new('GLuint', false);
        try {
            $__proc = $this->proc('glCreateFramebuffers', 'void (*)(GLsizei n, GLuint *framebuffers)');
            $__proc($n, \FFI::addr($framebuffersCType));
        } finally {
            $framebuffers = $framebuffersCType->cdata;
            \FFI::free($framebuffersCType);
        }
    }

    /**
     * {@see GL45::createProgramPipelines} returns $n previously unused program pipeline names in $pipelines, each
     * representing a new program pipeline object initialized to the default state.
     *
     * @see http://docs.gl/gl4/glCreateProgramPipelines
     * @since 4.5
     * @param int $n
     * @param int|null $pipelines
     * @return void
     */
    public function createProgramPipelines(int $n, ?int &$pipelines): void
    {
        $pipelinesCType = $this->info->ffi->new('GLuint', false);
        try {
            $__proc = $this->proc('glCreateProgramPipelines', 'void (*)(GLsizei n, GLuint *pipelines)');
            $__proc($n, \FFI::addr($pipelinesCType));
        } finally {
            $pipelines = $pipelinesCType->cdata;
            \FFI::free($pipelinesCType);
        }
    }

    /**
     * {@see GL45::createQueries} returns $n previously unused query object names in $ids, each representing a new
     * query object with the specified $target.
     *
     * $target may be one of {@see GL45::GL_SAMPLES_PASSED}, {@see GL45::GL_ANY_SAMPLES_PASSED},
     * {@see GL45::GL_ANY_SAMPLES_PASSED_CONSERVATIVE}, {@see GL45::GL_TIME_ELAPSED}, {@see GL45::GL_TIMESTAMP},
     * {@see GL45::GL_PRIMITIVES_GENERATED} or {@see GL45::GL_TRANSFORM_FEEDBACK_PRIMITIVES_WRITTEN}.
     *
     * @see http://docs.gl/gl4/glCreateQueries
     * @since 4.5
     * @param int $target
     * @param int $n
     * @param int|null $ids
     * @return void
     */
    public function createQueries(int $target, int $n, ?int &$ids): void
    {
        $idsCType = $this->info->ffi->new('GLuint', false);
        try {
            $__proc = $this->proc('glCreateQueries', 'void (*)(GLenum target, GLsizei n, GLuint *ids)');
            $__proc($target, $n, \FFI::addr($idsCType));
        } finally {
            $ids = $idsCType->cdata;
            \FFI::free($idsCType);
        }
    }

    /**
     * {@see GL45::createRenderbuffers} returns $n previously unused renderbuffer object names in $renderbuffers,
     * each representing a new renderbuffer object initialized to the default state.
     *
     * @see http://docs.gl/gl4/glCreateRenderbuffers
     * @since 4.5
     * @param int $n
     * @param int|null $renderbuffers
     * @return void
     */
    public function createRenderbuffers(int $n, ?int &$renderbuffers): void
    {
        $renderbuffersCType = $this->info->ffi->new('GLuint', false);
        try {
            $__proc = $this->proc('glCreateRenderbuffers', 'void (*)(GLsizei n, GLuint *renderbuffers)');
            $__proc($n, \FFI::addr($renderbuffersCType));
        } finally {
            $renderbuffers = $renderbuffersCType->cdata;
            \FFI::free($renderbuffersCType);
        }
    }

    /**
     * {@see GL45::createSamplers} returns $n previously unused sampler names in $samplers, each representing a new
     * sampler object initialized to the default state.
     *
     * @see http://docs.gl/gl4/glCreateSamplers
     * @since 4.5
     * @param int $n
     * @param int|null $samplers
     * @return void
     */
    public function createSamplers(int $n, ?int &$samplers): void
    {
        $samplersCType = $this->info->ffi->new('GLuint', false);
        try {
            $__proc = $this->proc('glCreateSamplers', 'void (*)(GLsizei n, GLuint *samplers)');
            $__proc($n, \FFI::addr($samplersCType));
        } finally {
            $samplers = $samplersCType->cdata;
            \FFI::free($samplersCType);
        }
    }

    /**
     * {@see GL45::createTextures} returns $n previously unused texture names in $textures, each representing a new
     * texture object of the dimensionality and type specified by $target and initialized to the default values for
     * that texture type.
     *
     * $target must be one of {@see GL45::GL_TEXTURE_1D}, {@see GL45::GL_TEXTURE_2D}, {@see GL45::GL_TEXTURE_3D},
     * {@see GL45::GL_TEXTURE_1D_ARRAY}, {@see GL45::GL_TEXTURE_2D_ARRAY}, {@see GL45::GL_TEXTURE_RECTANGLE},
     * {@see GL45::GL_TEXTURE_CUBE_MAP}, {@see GL45::GL_TEXTURE_CUBE_MAP_ARRAY}, {@see GL45::GL_TEXTURE_BUFFER},
     * {@see GL45::GL_TEXTURE_2D_MULTISAMPLE} or {@see GL45::GL_TEXTURE_2D_MULTISAMPLE_ARRAY}.
     *
     * @see http://docs.gl/gl4/glCreateTextures
     * @since 4.5
     * @param int $target
     * @param int $n
     * @param int|null $textures
     * @return void
     */
    public function createTextures(int $target, int $n, ?int &$textures): void
    {
        $texturesCType = $this->info->ffi->new('GLuint', false);
        try {
            $__proc = $this->proc('glCreateTextures', 'void (*)(GLenum target, GLsizei n, GLuint *textures)');
            $__proc($target, $n, \FFI::addr($texturesCType));
        } finally {
            $textures = $texturesCType->cdata;
            \FFI::free($texturesCType);
        }
    }

    /**
     * {@see GL45::createTransformFeedbacks} returns $n previously unused transform feedback object names in $ids,
     * each representing a new transform feedback object initialized to the default state.
     *
     * @see http://docs.gl/gl4/glCreateTransformFeedbacks
     * @since 4.5
     * @param int $n
     * @param int|null $ids
     * @return void
     */
    public function createTransformFeedbacks(int $n, ?int &$ids): void
    {
        $idsCType = $this->info->ffi->new('GLuint', false);
        try {
            $__proc = $this->proc('glCreateTransformFeedbacks', 'void (*)(GLsizei n, GLuint *ids)');
            $__proc($n, \FFI::addr($idsCType));
        } finally {
            $ids = $idsCType->cdata;
            \FFI::free($idsCType);
        }
    }

    /**
     * {@see GL45::createVertexArrays} returns $n previously unused vertex array object names in $arrays, each
     * representing a new vertex array object initialized to the default state.
     *
     * @see http://docs.gl/gl4/glCreateVertexArrays
     * @since 4.5
     * @param int $n
     * @param int|null $arrays
     * @return void
     */
    public function createVertexArrays(int $n, ?int &$arrays): void
    {
        $arraysCType = $this->info->ffi->new('GLuint', false);
        try {
            $__proc = $this->proc('glCreateVertexArrays', 'void (*)(GLsizei n, GLuint *arrays)');
            $__proc($n, \FFI::addr($arraysCType));
        } finally {
            $arrays = $arraysCType->cdata;
            \FFI::free($arraysCType);
        }
    }

    /**
     * {@see GL45::enableVertexAttribArray} and {@see GL45::enableVertexArrayAttrib} enable the generic vertex
     * attribute array specified by $index. {@see GL45::enableVertexAttribArray} uses currently bound vertex array
     * object for the operation, whereas {@see GL45::enableVertexArrayAttrib} updates state of the vertex array
     * object with ID $vaobj.
     *
     * {@see GL45::disableVertexAttribArray} and {@see GL45::disableVertexArrayAttrib} disable the generic vertex
     * attribute array specified by $index. {@see GL45::disableVertexAttribArray} uses currently bound vertex array
     * object for the operation, whereas {@see GL45::disableVertexArrayAttrib} updates state of the vertex array
     * object with ID $vaobj.
     *
     * By default, all client-side capabilities are disabled, including all generic vertex attribute arrays. If
     * enabled, the values in the generic vertex attribute array will be accessed and used for rendering when calls
     * are made to vertex array commands such as {@see GL45::drawArrays}, {@see GL45::drawElements},
     * {@see GL45::drawRangeElements}, {@see GL45::multiDrawElements}, or {@see GL45::multiDrawArrays}.
     *
     * @see http://docs.gl/gl2/glEnableVertexAttribArray
     * @see http://docs.gl/gl4/glCreateVertexArrays
     * @see http://docs.gl/gl4/glDeleteVertexArrays
     * @see http://docs.gl/gl4/glEnableVertexAttribArray
     * @since 4.5
     * @param int $vaobj
     * @param int $index
     * @return void
     */
    public function disableVertexArrayAttrib(int $vaobj, int $index): void
    {
        $__proc = $this->proc('glDisableVertexArrayAttrib', 'void (*)(GLuint vaobj, GLuint index)');
        $__proc($vaobj, $index);
    }

    /**
     * {@see GL45::enableVertexAttribArray} and {@see GL45::enableVertexArrayAttrib} enable the generic vertex
     * attribute array specified by $index. {@see GL45::enableVertexAttribArray} uses currently bound vertex array
     * object for the operation, whereas {@see GL45::enableVertexArrayAttrib} updates state of the vertex array
     * object with ID $vaobj.
     *
     * {@see GL45::disableVertexAttribArray} and {@see GL45::disableVertexArrayAttrib} disable the generic vertex
     * attribute array specified by $index. {@see GL45::disableVertexAttribArray} uses currently bound vertex array
     * object for the operation, whereas {@see GL45::disableVertexArrayAttrib} updates state of the vertex array
     * object with ID $vaobj.
     *
     * By default, all client-side capabilities are disabled, including all generic vertex attribute arrays. If
     * enabled, the values in the generic vertex attribute array will be accessed and used for rendering when calls
     * are made to vertex array commands such as {@see GL45::drawArrays}, {@see GL45::drawElements},
     * {@see GL45::drawRangeElements}, {@see GL45::multiDrawElements}, or {@see GL45::multiDrawArrays}.
     *
     * @see http://docs.gl/gl2/glEnableVertexAttribArray
     * @see http://docs.gl/gl4/glEnableVertexAttribArray
     * @since 4.5
     * @param int $vaobj
     * @param int $index
     * @return void
     */
    public function enableVertexArrayAttrib(int $vaobj, int $index): void
    {
        $__proc = $this->proc('glEnableVertexArrayAttrib', 'void (*)(GLuint vaobj, GLuint index)');
        $__proc($vaobj, $index);
    }

    /**
     * {@see GL45::flushMappedBufferRange} indicates that modifications have been made to a range of a mapped
     * buffer object. The buffer object must previously have been mapped with the
     * {@see GL45::GL_MAP_FLUSH_EXPLICIT_BIT} flag.
     *
     * $offset and $length indicate the modified subrange of the mapping, in basic machine units. The specified
     * subrange to flush is relative to the start of the currently mapped range of the buffer. These commands may be
     * called multiple times to indicate distinct subranges of the mapping which require flushing.
     *
     * If a buffer range is mapped with both {@see GL45::GL_MAP_PERSISTENT_BIT} and
     * {@see GL45::GL_MAP_FLUSH_EXPLICIT_BIT} set, then these commands may be called to ensure that data written by
     * the client into the flushed region becomes visible to the server. Data written to a coherent store will always
     * become visible to the server after an unspecified period of time.
     *
     * @see http://docs.gl/gl4/glFlushMappedBufferRange
     * @since 4.5
     * @param int $buffer
     * @param int $offset
     * @param int $length
     * @return void
     */
    public function flushMappedNamedBufferRange(int $buffer, int $offset, int $length): void
    {
        $__proc = $this->proc('glFlushMappedNamedBufferRange',
            'void (*)(GLuint buffer, GLintptr offset, GLsizeiptr length)');
        $__proc($buffer, $offset, $length);
    }

    /**
     * {@see GL45::generateMipmap} and {@see GL45::generateTextureMipmap} generates mipmaps for the specified
     * texture object. For {@see GL45::generateMipmap}, the texture object that is bound to $target. For
     * {@see GL45::generateTextureMipmap}, $texture is the name of the texture object.
     *
     * For cube map and cube map array textures, the texture object must be cube complete or cube array complete
     * respectively.
     *
     * Mipmap generation replaces texel image levels $level_{base} + 1$ through $q$ with images derived from the
     * $level_{base}$ image, regardless of their previous contents. All other mimap images, including the
     * $level_{base}+1$ image, are left unchanged by this computation.
     *
     * The internal formats of the derived mipmap images all match those of the $level_{base}$ image. The contents of
     * the derived images are computed by repeated, filtered reduction of the $level_{base} + 1$ image. For one- and
     * two-dimensional array and cube map array textures, each layer is filtered independently.
     *
     * @see http://docs.gl/gl4/glGenerateMipmap
     * @since 4.5
     * @param int $texture
     * @return void
     */
    public function generateTextureMipmap(int $texture): void
    {
        $__proc = $this->proc('glGenerateTextureMipmap', 'void (*)(GLuint texture)');
        $__proc($texture);
    }

    /**
     * {@see GL45::getCompressedTextureSubImage} can be used to obtain a sub-region of a compressed texture image
     * instead of the whole image, as long as the compressed data are arranged into fixed-size blocks of texels.
     * $texture is the name of the texture object, and must not be a buffer or multisample texture. The effective
     * $target is the value of {@see GL45::GL_TEXTURE_TARGET} for texture. $level and $pixels have the same meaning
     * as the corresponding arguments of {@see GL45::compressedTexSubImage3D}. $bufSize indicates the size of the
     * buffer to receive the retrieved pixel data.
     *
     * For cube map textures, the behavior is as though {@see GL45::getCompressedTexImage} were called once for
     * each requested face (selected by $zoffset and $depth, as described below) with target corresponding to the
     * requested texture cube map face as indicated by the table presented below. $pixels is offset appropriately for
     * each successive image.
     *
     * | Layer number | Cube Map Face                               |
     * | 0            | {@see GL45::GL_TEXTURE_CUBE_MAP_POSITIVE_X} |
     * | 1            | {@see GL45::GL_TEXTURE_CUBE_MAP_NEGATIVE_X} |
     * | 2            | {@see GL45::GL_TEXTURE_CUBE_MAP_POSITIVE_Y} |
     * | 3            | {@see GL45::GL_TEXTURE_CUBE_MAP_NEGATIVE_Y} |
     * | 4            | {@see GL45::GL_TEXTURE_CUBE_MAP_POSITIVE_Z} |
     * | 5            | {@see GL45::GL_TEXTURE_CUBE_MAP_NEGATIVE_Z} |
     * $xoffset, $yoffset and $zoffset indicate the position of the subregion to return. $width, $height and $depth
     * indicate the size of the region to return. These arguments have the same meaning as for
     * {@see GL45::compressedTexSubImage3D}, though there are extra restrictions, described in the errors section
     * below.
     *
     * The mapping between the $xoffset, $yoffset, $zoffset, $width, $height and $depth parameters and the faces,
     * layers, and layer-faces for cube map, array, and cube map array textures is the same as for
     * glGetTextureSubImage.
     *
     * The $xoffset, $yoffset, $zoffset offsets and $width, $height and $depth sizes must be multiples of the values
     * of {@see GL45::GL_PACK_COMPRESSED_BLOCK_WIDTH}, {@see GL45::GL_PACK_COMPRESSED_BLOCK_HEIGHT}, and
     * {@see GL45::GL_PACK_COMPRESSED_BLOCK_DEPTH} respectively, unless $offset is zero and the corresponding $size
     * is the same as the texture size in that dimension.
     *
     * Pixel storage modes are treated as for {@see GL45::getCompressedTexSubImage}. The texel at ($xoffset,
     * $yoffset, $zoffset) will be stored at the location indicated by $pixels and the current pixel packing
     * parameters.
     *
     * @see http://docs.gl/gl4/glGetCompressedTextureSubImage
     * @since 4.5
     * @param int $texture
     * @param int $level
     * @param int $bufSize
     * @param CData|null $pixels
     * @return void
     */
    public function getCompressedTextureImage(int $texture, int $level, int $bufSize, ?CData $pixels): void
    {
        $__proc = $this->proc('glGetCompressedTextureImage',
            'void (*)(GLuint texture, GLint level, GLsizei bufSize, void *pixels)');
        $__proc($texture, $level, $bufSize, $pixels);
    }

    /**
     * {@see GL45::getCompressedTextureSubImage} can be used to obtain a sub-region of a compressed texture image
     * instead of the whole image, as long as the compressed data are arranged into fixed-size blocks of texels.
     * $texture is the name of the texture object, and must not be a buffer or multisample texture. The effective
     * $target is the value of {@see GL45::GL_TEXTURE_TARGET} for texture. $level and $pixels have the same meaning
     * as the corresponding arguments of {@see GL45::compressedTexSubImage3D}. $bufSize indicates the size of the
     * buffer to receive the retrieved pixel data.
     *
     * For cube map textures, the behavior is as though {@see GL45::getCompressedTexImage} were called once for
     * each requested face (selected by $zoffset and $depth, as described below) with target corresponding to the
     * requested texture cube map face as indicated by the table presented below. $pixels is offset appropriately for
     * each successive image.
     *
     * | Layer number | Cube Map Face                               |
     * | 0            | {@see GL45::GL_TEXTURE_CUBE_MAP_POSITIVE_X} |
     * | 1            | {@see GL45::GL_TEXTURE_CUBE_MAP_NEGATIVE_X} |
     * | 2            | {@see GL45::GL_TEXTURE_CUBE_MAP_POSITIVE_Y} |
     * | 3            | {@see GL45::GL_TEXTURE_CUBE_MAP_NEGATIVE_Y} |
     * | 4            | {@see GL45::GL_TEXTURE_CUBE_MAP_POSITIVE_Z} |
     * | 5            | {@see GL45::GL_TEXTURE_CUBE_MAP_NEGATIVE_Z} |
     * $xoffset, $yoffset and $zoffset indicate the position of the subregion to return. $width, $height and $depth
     * indicate the size of the region to return. These arguments have the same meaning as for
     * {@see GL45::compressedTexSubImage3D}, though there are extra restrictions, described in the errors section
     * below.
     *
     * The mapping between the $xoffset, $yoffset, $zoffset, $width, $height and $depth parameters and the faces,
     * layers, and layer-faces for cube map, array, and cube map array textures is the same as for
     * glGetTextureSubImage.
     *
     * The $xoffset, $yoffset, $zoffset offsets and $width, $height and $depth sizes must be multiples of the values
     * of {@see GL45::GL_PACK_COMPRESSED_BLOCK_WIDTH}, {@see GL45::GL_PACK_COMPRESSED_BLOCK_HEIGHT}, and
     * {@see GL45::GL_PACK_COMPRESSED_BLOCK_DEPTH} respectively, unless $offset is zero and the corresponding $size
     * is the same as the texture size in that dimension.
     *
     * Pixel storage modes are treated as for {@see GL45::getCompressedTexSubImage}. The texel at ($xoffset,
     * $yoffset, $zoffset) will be stored at the location indicated by $pixels and the current pixel packing
     * parameters.
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
     * @param CData|null $pixels
     * @return void
     */
    public function getCompressedTextureSubImage(
        int $texture,
        int $level,
        int $xoffset,
        int $yoffset,
        int $zoffset,
        int $width,
        int $height,
        int $depth,
        int $bufSize,
        ?CData $pixels
    ): void {
        $__proc = $this->proc('glGetCompressedTextureSubImage',
            'void (*)(GLuint texture, GLint level, GLint xoffset, GLint yoffset, GLint zoffset, GLsizei width, GLsizei height, GLsizei depth, GLsizei bufSize, void *pixels)');
        $__proc($texture, $level, $xoffset, $yoffset, $zoffset, $width, $height, $depth, $bufSize, $pixels);
    }

    /**
     * Certain events can result in a reset of the GL context. Such a reset causes all context state to be lost and
     * requires the application to recreate all objects in the affected context.
     *
     * {@see GL45::getGraphicsResetStatus} can return one of the following constants:
     *
     *  - {@see GL45::GL_NO_ERROR}: Indicates that the GL context has not been
     *    in a reset state since the last call.
     *
     *  - {@see GL45::GL_GUILTY_CONTEXT_RESET}: Indicates that a reset has been
     *    detected that is attributable to the current GL context.
     *
     *  - {@see GL45::GL_INNOCENT_CONTEXT_RESET}: Indicates a reset has been
     *    detected that is not attributable to the current GL context.
     *
     *  - {@see GL45::GL_UNKNOWN_CONTEXT_RESET}: Indicates a detected graphics
     *    reset whose cause is unknown.
     *
     * If a reset status other than {@see GL45::GL_NO_ERROR} is returned and subsequent calls return
     * {@see GL45::GL_NO_ERROR}, the context reset was encountered and completed. If a reset status is repeatedly
     * returned, the context may be in the process of resetting.
     *
     * Reset notification behavior is determined at context creation time, and may be queried by calling
     * {@see GL46::GetIntegerv} with the symbolic constant {@see GL45::GL_RESET_NOTIFICATION_STRATEGY}.
     *
     * If the reset notification behavior is {@see GL45::GL_NO_RESET_NOTIFICATION}, then the implementation will
     * never deliver notification of reset events, and {@see GL45::getGraphicsResetStatus} will always return
     * {@see GL45::GL_NO_ERROR}.
     *
     * If the behavior is {@see GL45::GL_LOSE_CONTEXT_ON_RESET}, a graphics reset will result in the loss of all
     * context state, requiring the recreation of all associated objects. In this case
     * {@see GL45::getGraphicsResetStatus} may return any of the values described above.
     *
     * If a graphics reset notification occurs in a context, a notification must also occur in all other contexts
     * which share objects with that context.
     *
     * After a graphics reset has occurred on a context, subsequent GL commands on that context (or any context which
     * shares with that context) will generate a {@see GL45::GL_CONTEXT_LOST} error. Such commands will not have side
     * effects (in particular, they will not modify memory passed by pointer for query results), and will not block
     * indefinitely or cause termination of the application. There are two important exceptions to this behavior:
     *
     *    {@see GL45::getError} and {@see GL45::getGraphicsResetStatus} behave normally following a graphics
     * reset, so that the application can determine a reset has occurred, and when it is safe to destroy and
     * re-create the context.     Any commands which might cause a polling application to block indefinitely will
     * generate a {@see GL45::GL_CONTEXT_LOST} error, but will also return a value indicating completion to the
     * application. Such commands include:    {@see GL45::getSynciv} with pname {@see GL45::GL_SYNC_STATUS} ignores
     * the other parameters and returns {@see GL45::GL_SIGNALED} in $values.     {@see GL45::getQueryObjectuiv}
     * with pname {@see GL45::GL_QUERY_RESULT_AVAILABLE} ignores the other parameters and returns {@see GL46::TRUE}
     * in $params.
     *
     * @see http://docs.gl/gl4/glGetGraphicsResetStatus
     * @since 4.5
     * @return int
     */
    public function getGraphicsResetStatus(): int
    {
        $__proc = $this->proc('glGetGraphicsResetStatus', 'GLenum (*)()');

        return $__proc();
    }

    /**
     * {@see GL45::getBufferParameteriv} returns in $data a selected parameter of the buffer object specified by
     * $target.
     *
     * $value names a specific buffer object parameter, as follows:
     *
     *  - {@see GL45::GL_BUFFER_ACCESS}: $params returns the access policy set
     *    while mapping the buffer object. The initial value is
     *    {@see GL45::GL_READ_WRITE}.
     *
     *  - {@see GL45::GL_BUFFER_MAPPED}: $params returns a flag indicating
     *    whether the buffer object is currently mapped. The initial value is
     *    {@see GL45::GL_FALSE}.
     *
     *  - {@see GL45::GL_BUFFER_SIZE}: $params returns the size of the buffer
     *    object, measured in bytes. The initial value is 0.
     *
     *  - {@see GL45::GL_BUFFER_USAGE}: $params returns the buffer object's
     *    usage pattern. The initial value is {@see GL45::GL_STATIC_DRAW}.
     *
     * @see http://docs.gl/gl2/glGetBufferParameteriv
     * @since 4.5
     * @param int $buffer
     * @param int $pname
     * @param int|null $params
     * @return void
     */
    public function getNamedBufferParameteri64v(int $buffer, int $pname, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLint64', false);
        try {
            $__proc = $this->proc('glGetNamedBufferParameteri64v',
                'void (*)(GLuint buffer, GLenum pname, GLint64 *params)');
            $__proc($buffer, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL45::getBufferParameteriv} returns in $data a selected parameter of the buffer object specified by
     * $target.
     *
     * $value names a specific buffer object parameter, as follows:
     *
     *  - {@see GL45::GL_BUFFER_ACCESS}: $params returns the access policy set
     *    while mapping the buffer object. The initial value is
     *    {@see GL45::GL_READ_WRITE}.
     *
     *  - {@see GL45::GL_BUFFER_MAPPED}: $params returns a flag indicating
     *    whether the buffer object is currently mapped. The initial value is
     *    {@see GL45::GL_FALSE}.
     *
     *  - {@see GL45::GL_BUFFER_SIZE}: $params returns the size of the buffer
     *    object, measured in bytes. The initial value is 0.
     *
     *  - {@see GL45::GL_BUFFER_USAGE}: $params returns the buffer object's
     *    usage pattern. The initial value is {@see GL45::GL_STATIC_DRAW}.
     *
     * @see http://docs.gl/gl2/glGetBufferParameteriv
     * @since 4.5
     * @param int $buffer
     * @param int $pname
     * @param int|null $params
     * @return void
     */
    public function getNamedBufferParameteriv(int $buffer, int $pname, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->proc('glGetNamedBufferParameteriv',
                'void (*)(GLuint buffer, GLenum pname, GLint *params)');
            $__proc($buffer, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL45::getBufferPointerv} and {@see GL45::getNamedBufferPointerv} return the buffer pointer $pname,
     * which must be {@see GL45::GL_BUFFER_MAP_POINTER}. The single buffer map pointer is returned in $params. A
     * {@see GL46::NULL} pointer is returned if the buffer object's data store is not currently mapped; or if the
     * requesting context did not map the buffer object's data store, and the implementation is unable to support
     * mappings on multiple clients.
     *
     * @see http://docs.gl/gl2/glGetBufferPointerv
     * @see http://docs.gl/gl4/glGetBufferPointerv
     * @since 4.5
     * @param int $buffer
     * @param int $pname
     * @param CData|null $params
     * @return void
     */
    public function getNamedBufferPointerv(int $buffer, int $pname, ?CData $params): void
    {
        $__proc = $this->proc('glGetNamedBufferPointerv', 'void (*)(GLuint buffer, GLenum pname, void **params)');
        $__proc($buffer, $pname, $params);
    }

    /**
     * {@see GL45::getBufferSubData} and {@see GL45::getNamedBufferSubData} return some or all of the data
     * contents of the data store of the specified buffer object. Data starting at byte offset $offset and extending
     * for $size bytes is copied from the buffer object's data store to the memory pointed to by $data. An error is
     * thrown if the buffer object is currently mapped, or if $offset and $size together define a range beyond the
     * bounds of the buffer object's data store.
     *
     * @see http://docs.gl/gl2/glGetBufferSubData
     * @see http://docs.gl/gl4/glGetBufferSubData
     * @since 4.5
     * @param int $buffer
     * @param int $offset
     * @param int $size
     * @param CData|null $data
     * @return void
     */
    public function getNamedBufferSubData(int $buffer, int $offset, int $size, ?CData $data): void
    {
        $__proc = $this->proc('glGetNamedBufferSubData',
            'void (*)(GLuint buffer, GLintptr offset, GLsizeiptr size, void *data)');
        $__proc($buffer, $offset, $size, $data);
    }

    /**
     * {@see GL45::getFramebufferAttachmentParameteriv} and {@see GL45::getNamedFramebufferAttachmentParameteriv}
     * return parameters of attachments of a specified framebuffer object.
     *
     * For {@see GL45::getFramebufferAttachmentParameteriv}, the framebuffer object is that bound to $target, which
     * must be one of {@see GL45::GL_DRAW_FRAMEBUFFER}, {@see GL45::GL_READ_FRAMEBUFFER} or
     * {@see GL45::GL_FRAMEBUFFER}. {@see GL45::GL_FRAMEBUFFER} is equivalent to {@see GL45::GL_DRAW_FRAMEBUFFER}.
     * Buffers of default framebuffers may also be queried if bound to $target.
     *
     * For {@see GL45::getNamedFramebufferAttachmentParameteriv}, $framebuffer is the name of the framebuffer
     * object. If $framebuffer is zero, the default draw framebuffer is queried.
     *
     * If the specified framebuffer is a framebuffer object, $attachment must be one of
     * {@see GL45::GL_DEPTH_ATTACHMENT}, {@see GL45::GL_STENCIL_ATTACHMENT} {@see GL45::GL_DEPTH_STENCIL_ATTACHMENT},
     * or {@see GL45::GL_COLOR_ATTACHMENT}i, where i is between zero and the value of
     * {@see GL45::GL_MAX_COLOR_ATTACHMENTS} minus one.
     *
     * If the specified framebuffer is a default framebuffer, $target, $attachment must be one of
     * {@see GL45::GL_FRONT_LEFT}, {@see GL45::GL_FRONT_RIGHT}, {@see GL45::GL_BACK_LEFT},
     * {@see GL45::GL_BACK_RIGHT}, {@see GL45::GL_DEPTH} or {@see GL45::GL_STENCIL}, identifying the corresponding
     * buffer.
     *
     * If $attachment is {@see GL45::GL_DEPTH_STENCIL_ATTACHMENT}, the same object must be bound to both the depth
     * and stencil attachment points of the framebuffer object, and information about that object is returned.
     *
     * Upon successful return, if $pname is {@see GL45::GL_FRAMEBUFFER_ATTACHMENT_OBJECT_TYPE}, then $params will
     * contain one of {@see GL45::GL_NONE}, {@see GL45::GL_FRAMEBUFFER_DEFAULT}, {@see GL45::GL_TEXTURE}, or
     * {@see GL45::GL_RENDERBUFFER}, identifying the type of object which contains the attached image. Other values
     * accepted for $pname depend on the type of object, as described below.
     *
     * If the value of {@see GL45::GL_FRAMEBUFFER_ATTACHMENT_OBJECT_TYPE} is {@see GL45::GL_NONE}, then either no
     * framebuffer is bound to $target; or a default framebuffer is queried, $attachment is {@see GL45::GL_DEPTH} or
     * {@see GL45::GL_STENCIL}, and the number of depth or stencil bits, respectively, is zero. In this case querying
     * $pname {@see GL45::GL_FRAMEBUFFER_ATTACHMENT_OBJECT_NAME} will return zero, and all other queries will
     * generate an error.
     *
     * If the value of {@see GL45::GL_FRAMEBUFFER_ATTACHMENT_OBJECT_TYPE} is not {@see GL45::GL_NONE}, these queries
     * apply to all other framebuffer types:
     *
     *  -  If $pname is {@see GL45::GL_FRAMEBUFFER_ATTACHMENT_RED_SIZE},
     *    {@see GL45::GL_FRAMEBUFFER_ATTACHMENT_GREEN_SIZE}, {@see GL45::GL_FRAMEBUFFER_ATTACHMENT_BLUE_SIZE},
     *    {@see GL45::GL_FRAMEBUFFER_ATTACHMENT_ALPHA_SIZE}, {@see GL45::GL_FRAMEBUFFER_ATTACHMENT_DEPTH_SIZE} or
     *    {@see GL45::GL_FRAMEBUFFER_ATTACHMENT_STENCIL_SIZE}, then $params will contain the number of bits in the
     *    corresponding red, green, blue, alpha, depth, or stencil component of the specified attachment. If the
     *    requested component is not present in the attachment, or if no data storage or texture image has been
     *    specified for the attachment, then $params will contain zero.
     *  -  If $pname is {@see GL45::GL_FRAMEBUFFER_ATTACHMENT_COMPONENT_TYPE}, then $params will contain the format of
     *    components of the specified attachment, one of {@see GL45::GL_FLOAT}, {@see GL45::GL_INT},
     *    {@see GL45::GL_UNSIGNED_INT}, {@see GL45::GL_SIGNED_NORMALIZED}, or {@see GL45::GL_UNSIGNED_NORMALIZED} for
     *    floating-point, signed integer, unsigned integer, signed normalized fixed-point, or unsigned normalized
     *    fixed-point components respectively. Only color buffers may have integer components. If no data storage or
     *    texture image has been specified for the attachment, then $params will contain {@see GL45::GL_NONE}. This
     *    query cannot be performed for a combined depth+stencil attachment, since it does not have a single format.
     *  -  If $pname is {@see GL45::GL_FRAMEBUFFER_ATTACHMENT_COLOR_ENCODING}, then $params will contain the encoding of
     *    components of the specified attachment, one of {@see GL45::GL_LINEAR} or {@see GL45::GL_SRGB} for linear or
     *    sRGB-encoded components, respectively. Only color buffer components may be sRGB-encoded; such components are
     *    treated as described in the OpenGL Specification. For a default framebuffer, color encoding is determined by
     *    the implementation. For framebuffer objects, components are sRGB-encoded if the internal format of a color
     *    attachment is one of the color-renderable SRGB formats. If the attachment is not a color attachment, or if no
     *    data storage or texture image has been specified for the attachment, then $params will contain
     *    {@see GL45::GL_LINEAR}.
     *
     * If the value of {@see GL45::GL_FRAMEBUFFER_ATTACHMENT_OBJECT_TYPE} is {@see GL45::GL_RENDERBUFFER}, then
     *
     *  -  If $pname is {@see GL45::GL_FRAMEBUFFER_ATTACHMENT_OBJECT_NAME}, $params will contain the name of the
     *    renderbuffer object which contains the attached image.
     *
     * If the value of {@see GL45::GL_FRAMEBUFFER_ATTACHMENT_OBJECT_TYPE} is {@see GL45::GL_TEXTURE}, then
     *
     *  -  If $pname is {@see GL45::GL_FRAMEBUFFER_ATTACHMENT_OBJECT_NAME}, then $params will contain the name of the
     *    texture object which contains the attached image.
     *  -  If $pname is {@see GL45::GL_FRAMEBUFFER_ATTACHMENT_TEXTURE_LEVEL}, then $params will contain the mipmap level
     *    of the texture object which contains the attached image.
     *  -  If $pname is {@see GL45::GL_FRAMEBUFFER_ATTACHMENT_TEXTURE_CUBE_MAP_FACE} and the value of
     *    {@see GL45::GL_FRAMEBUFFER_ATTACHMENT_OBJECT_NAME} is the name of a cube map texture object, then $params will
     *    contain the cube map face of the cubemap texture object which contains the attached image. Otherwise $params
     *    will contain zero.
     *  -  If $pname is {@see GL45::GL_FRAMEBUFFER_ATTACHMENT_LAYERED}, then $params will contain {@see GL45::GL_TRUE}
     *    if an entire level of a three-dimensional texture, cube map texture, or one-or two-dimensional array texture
     *    is attached. Otherwise, $params will contain {@see GL45::GL_FALSE}.
     *  -  If $pname is {@see GL45::GL_FRAMEBUFFER_ATTACHMENT_TEXTURE_LAYER}; the value of
     *    {@see GL45::GL_FRAMEBUFFER_ATTACHMENT_OBJECT_NAME} is the name of a three-dimensional, or a one- or
     *    two-dimensional array texture; and the value of {@see GL45::GL_FRAMEBUFFER_ATTACHMENT_LAYERED} is
     *    {@see GL45::GL_FALSE}, then $params will contain the texture layer which contains the attached image.
     *    Otherwise $params will contain zero.
     *
     * @see http://docs.gl/gl4/glGetFramebufferAttachmentParameter
     * @since 4.5
     * @param int $framebuffer
     * @param int $attachment
     * @param int $pname
     * @param int|null $params
     * @return void
     */
    public function getNamedFramebufferAttachmentParameteriv(
        int $framebuffer,
        int $attachment,
        int $pname,
        ?int &$params
    ): void {
        $paramsCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->proc('glGetNamedFramebufferAttachmentParameteriv',
                'void (*)(GLuint framebuffer, GLenum attachment, GLenum pname, GLint *params)');
            $__proc($framebuffer, $attachment, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL45::getFramebufferParameteriv} and {@see GL45::getNamedFramebufferParameteriv} query parameters of
     * a specified framebuffer object.
     *
     * For {@see GL45::getFramebufferParameteriv}, the framebuffer object is that bound to $target, which must be
     * one of {@see GL45::GL_DRAW_FRAMEBUFFER}, {@see GL45::GL_READ_FRAMEBUFFER} or {@see GL45::GL_FRAMEBUFFER}.
     * {@see GL45::GL_FRAMEBUFFER} is equivalent to {@see GL45::GL_DRAW_FRAMEBUFFER}. Default framebuffers may also
     * be queried if bound to $target.
     *
     * For {@see GL45::getNamedFramebufferParameteriv}, $framebuffer is the name of the framebuffer object. If
     * $framebuffer is zero, the default draw framebuffer is queried.
     *
     * Upon successful return, $param will contain the value of the framebuffer parameter specified by $pname, as
     * described below.
     *
     * The following parameters can only be queried for framebuffer objects:
     *
     *  - {@see GL45::GL_FRAMEBUFFER_DEFAULT_WIDTH}: $params returns the value
     *    of {@see GL45::GL_FRAMEBUFFER_DEFAULT_WIDTH} for the framebuffer
     *    object.
     *
     *  - {@see GL45::GL_FRAMEBUFFER_DEFAULT_HEIGHT}: $params returns the value
     *    of {@see GL45::GL_FRAMEBUFFER_DEFAULT_HEIGHT} for the framebuffer
     *    object.
     *
     *  - {@see GL45::GL_FRAMEBUFFER_DEFAULT_LAYERS}: $params returns the value
     *    of {@see GL45::GL_FRAMEBUFFER_DEFAULT_LAYERS} for the framebuffer
     *    object.
     *
     *  - {@see GL45::GL_FRAMEBUFFER_DEFAULT_SAMPLES}: $params returns the value
     *    of {@see GL45::GL_FRAMEBUFFER_DEFAULT_SAMPLES} for the framebuffer
     *    object.
     *
     *  - {@see GL45::GL_FRAMEBUFFER_DEFAULT_FIXED_SAMPLE_LOCATIONS}: $params
     *    returns the boolean value of {@see
     *    GL45::GL_FRAMEBUFFER_DEFAULT_FIXED_SAMPLE_LOCATIONS}.
     *
     * The following parameters can be queried for both default framebuffers and framebuffer objects:
     *
     *  - {@see GL45::GL_DOUBLEBUFFER}: $param returns a boolean value
     *    indicating whether double buffering is supported for the framebuffer
     *    object.
     *
     *  - {@see GL45::GL_IMPLEMENTATION_COLOR_READ_FORMAT}: $param returns a
     *    GLenum value indicating the preferred pixel data format for the
     *    framebuffer object. See
     *    {@see GL45::readPixels}.
     *
     *  - {@see GL45::GL_IMPLEMENTATION_COLOR_READ_TYPE}: $param returns a
     *    GLenum value indicating the implementation's preferred pixel data type
     *    for the framebuffer
     *    object. See {@see GL45::readPixels}.
     *
     *  - {@see GL45::GL_SAMPLES}: $param returns an integer value indicating
     *    the coverage mask size for the framebuffer object. See
     *    {@see GL45::sampleCoverage}.
     *
     *  - {@see GL45::GL_SAMPLE_BUFFERS}: $param returns an integer value
     *    indicating the number of sample buffers associated with the
     *    framebuffer
     *    object. See {@see GL45::sampleCoverage}.
     *
     *  - {@see GL45::GL_STEREO}: $param returns a boolean value indicating
     *    whether stereo buffers (left and right) are supported for the
     *    framebuffer object.
     *
     * @see http://docs.gl/gl4/glGetFramebufferParameter
     * @since 4.5
     * @param int $framebuffer
     * @param int $pname
     * @param int|null $param
     * @return void
     */
    public function getNamedFramebufferParameteriv(int $framebuffer, int $pname, ?int &$param): void
    {
        $paramCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->proc('glGetNamedFramebufferParameteriv',
                'void (*)(GLuint framebuffer, GLenum pname, GLint *param)');
            $__proc($framebuffer, $pname, \FFI::addr($paramCType));
        } finally {
            $param = $paramCType->cdata;
            \FFI::free($paramCType);
        }
    }

    /**
     * {@see GL45::getRenderbufferParameteriv} and {@see GL45::getNamedRenderbufferParameteriv} query parameters
     * of a specified renderbuffer object.
     *
     * For {@see GL45::getRenderbufferParameteriv}, the renderbuffer object is that bound to $target, which must be
     * {@see GL45::GL_RENDERBUFFER}.
     *
     * For {@see GL45::getNamedRenderbufferParameteriv}, $renderbuffer is the name of the renderbuffer object.
     *
     * Upon successful return, $param will contain the value of the renderbuffer parameter specified by $pname, as
     * described below.
     *
     *  - {@see GL45::GL_RENDERBUFFER_WIDTH, GL_RENDERBUFFER_HEIGHT,
     *    GL_RENDERBUFFER_INTERNAL_FORMAT or GL_RENDERBUFFER_SAMPLES}: $params
     *    returns the width in pixels, the height in pixels, internal format, or
     *    the number of samples,
     *    respectively, of the image of the specified renderbuffer object.
     *
     *  - {@see GL45::GL_RENDERBUFFER_RED_SIZE, GL_RENDERBUFFER_GREEN_SIZE,
     *    GL_RENDERBUFFER_BLUE_SIZE, GL_RENDERBUFFER_ALPHA_SIZE,
     *    GL_RENDERBUFFER_DEPTH_SIZE or GL_RENDERBUFFER_STENCIL_SIZE}: $params
     *    returns the actual resolution in bits (not the resolution specified
     *    when the image was defined) for
     *    the red, green, blue, alpha, depth or stencil components,
     *    respectively, of the image of the renderbuffer
     *    object.
     *
     * @see http://docs.gl/gl4/glGetRenderbufferParameter
     * @since 4.5
     * @param int $renderbuffer
     * @param int $pname
     * @param int|null $params
     * @return void
     */
    public function getNamedRenderbufferParameteriv(int $renderbuffer, int $pname, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->proc('glGetNamedRenderbufferParameteriv',
                'void (*)(GLuint renderbuffer, GLenum pname, GLint *params)');
            $__proc($renderbuffer, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * These commands return a selected parameter of the query object specified by $id. {@see GL45::getQueryObject}
     * returns in $params a selected parameter of the query object specified by $id.
     * {@see GL45::getQueryBufferObject} returns in $buffer a selected parameter of the query object specified by
     * $id, by writing it to $buffer's data store at the byte offset specified by $offset.
     *
     * $pname names a specific query object parameter. $pname can be as follows:
     *
     *  - {@see GL45::GL_QUERY_RESULT}: $params or $buffer returns the value of
     *    the query object's passed samples counter. The initial value is 0.
     *
     *  - {@see GL45::GL_QUERY_RESULT_NO_WAIT}: If the result of the query is
     *    available (that is, a query of {@see GL45::GL_QUERY_RESULT_AVAILABLE}
     *    would
     *    return non-zero), then $params or $buffer returns the value of the
     *    query object's passed samples counter,
     *    otherwise, the data referred to by $params or $buffer is not modified.
     *    The initial value is 0.
     *
     *  - {@see GL45::GL_QUERY_RESULT_AVAILABLE}: $params or $buffer returns
     *    whether the passed samples counter is immediately available. If a
     *    delay would
     *    occur waiting for the query result, {@see GL45::GL_FALSE} is returned.
     *    Otherwise, {@see GL45::GL_TRUE} is
     *    returned, which also indicates that the results of all previous
     *    queries are available as well.
     *
     * @see http://docs.gl/gl2/glGetQueryObject
     * @see http://docs.gl/gl4/glGetQueryObject
     * @since 4.5
     * @param int $id
     * @param int $buffer
     * @param int $pname
     * @param int $offset
     * @return void
     */
    public function getQueryBufferObjecti64v(int $id, int $buffer, int $pname, int $offset): void
    {
        $__proc = $this->proc('glGetQueryBufferObjecti64v',
            'void (*)(GLuint id, GLuint buffer, GLenum pname, GLintptr offset)');
        $__proc($id, $buffer, $pname, $offset);
    }

    /**
     * These commands return a selected parameter of the query object specified by $id. {@see GL45::getQueryObject}
     * returns in $params a selected parameter of the query object specified by $id.
     * {@see GL45::getQueryBufferObject} returns in $buffer a selected parameter of the query object specified by
     * $id, by writing it to $buffer's data store at the byte offset specified by $offset.
     *
     * $pname names a specific query object parameter. $pname can be as follows:
     *
     *  - {@see GL45::GL_QUERY_RESULT}: $params or $buffer returns the value of
     *    the query object's passed samples counter. The initial value is 0.
     *
     *  - {@see GL45::GL_QUERY_RESULT_NO_WAIT}: If the result of the query is
     *    available (that is, a query of {@see GL45::GL_QUERY_RESULT_AVAILABLE}
     *    would
     *    return non-zero), then $params or $buffer returns the value of the
     *    query object's passed samples counter,
     *    otherwise, the data referred to by $params or $buffer is not modified.
     *    The initial value is 0.
     *
     *  - {@see GL45::GL_QUERY_RESULT_AVAILABLE}: $params or $buffer returns
     *    whether the passed samples counter is immediately available. If a
     *    delay would
     *    occur waiting for the query result, {@see GL45::GL_FALSE} is returned.
     *    Otherwise, {@see GL45::GL_TRUE} is
     *    returned, which also indicates that the results of all previous
     *    queries are available as well.
     *
     * @see http://docs.gl/gl2/glGetQueryObject
     * @see http://docs.gl/gl4/glGetQueryObject
     * @since 4.5
     * @param int $id
     * @param int $buffer
     * @param int $pname
     * @param int $offset
     * @return void
     */
    public function getQueryBufferObjectiv(int $id, int $buffer, int $pname, int $offset): void
    {
        $__proc = $this->proc('glGetQueryBufferObjectiv',
            'void (*)(GLuint id, GLuint buffer, GLenum pname, GLintptr offset)');
        $__proc($id, $buffer, $pname, $offset);
    }

    /**
     * These commands return a selected parameter of the query object specified by $id. {@see GL45::getQueryObject}
     * returns in $params a selected parameter of the query object specified by $id.
     * {@see GL45::getQueryBufferObject} returns in $buffer a selected parameter of the query object specified by
     * $id, by writing it to $buffer's data store at the byte offset specified by $offset.
     *
     * $pname names a specific query object parameter. $pname can be as follows:
     *
     *  - {@see GL45::GL_QUERY_RESULT}: $params or $buffer returns the value of
     *    the query object's passed samples counter. The initial value is 0.
     *
     *  - {@see GL45::GL_QUERY_RESULT_NO_WAIT}: If the result of the query is
     *    available (that is, a query of {@see GL45::GL_QUERY_RESULT_AVAILABLE}
     *    would
     *    return non-zero), then $params or $buffer returns the value of the
     *    query object's passed samples counter,
     *    otherwise, the data referred to by $params or $buffer is not modified.
     *    The initial value is 0.
     *
     *  - {@see GL45::GL_QUERY_RESULT_AVAILABLE}: $params or $buffer returns
     *    whether the passed samples counter is immediately available. If a
     *    delay would
     *    occur waiting for the query result, {@see GL45::GL_FALSE} is returned.
     *    Otherwise, {@see GL45::GL_TRUE} is
     *    returned, which also indicates that the results of all previous
     *    queries are available as well.
     *
     * @see http://docs.gl/gl2/glGetQueryObject
     * @see http://docs.gl/gl4/glGetQueryObject
     * @since 4.5
     * @param int $id
     * @param int $buffer
     * @param int $pname
     * @param int $offset
     * @return void
     */
    public function getQueryBufferObjectui64v(int $id, int $buffer, int $pname, int $offset): void
    {
        $__proc = $this->proc('glGetQueryBufferObjectui64v',
            'void (*)(GLuint id, GLuint buffer, GLenum pname, GLintptr offset)');
        $__proc($id, $buffer, $pname, $offset);
    }

    /**
     * These commands return a selected parameter of the query object specified by $id. {@see GL45::getQueryObject}
     * returns in $params a selected parameter of the query object specified by $id.
     * {@see GL45::getQueryBufferObject} returns in $buffer a selected parameter of the query object specified by
     * $id, by writing it to $buffer's data store at the byte offset specified by $offset.
     *
     * $pname names a specific query object parameter. $pname can be as follows:
     *
     *  - {@see GL45::GL_QUERY_RESULT}: $params or $buffer returns the value of
     *    the query object's passed samples counter. The initial value is 0.
     *
     *  - {@see GL45::GL_QUERY_RESULT_NO_WAIT}: If the result of the query is
     *    available (that is, a query of {@see GL45::GL_QUERY_RESULT_AVAILABLE}
     *    would
     *    return non-zero), then $params or $buffer returns the value of the
     *    query object's passed samples counter,
     *    otherwise, the data referred to by $params or $buffer is not modified.
     *    The initial value is 0.
     *
     *  - {@see GL45::GL_QUERY_RESULT_AVAILABLE}: $params or $buffer returns
     *    whether the passed samples counter is immediately available. If a
     *    delay would
     *    occur waiting for the query result, {@see GL45::GL_FALSE} is returned.
     *    Otherwise, {@see GL45::GL_TRUE} is
     *    returned, which also indicates that the results of all previous
     *    queries are available as well.
     *
     * @see http://docs.gl/gl2/glGetQueryObject
     * @see http://docs.gl/gl4/glGetQueryObject
     * @since 4.5
     * @param int $id
     * @param int $buffer
     * @param int $pname
     * @param int $offset
     * @return void
     */
    public function getQueryBufferObjectuiv(int $id, int $buffer, int $pname, int $offset): void
    {
        $__proc = $this->proc('glGetQueryBufferObjectuiv',
            'void (*)(GLuint id, GLuint buffer, GLenum pname, GLintptr offset)');
        $__proc($id, $buffer, $pname, $offset);
    }

    /**
     * {@see GL45::getTextureSubImage} returns a texture subimage into pixels.
     *
     * $texture is the name of the source texture object and must not be a buffer or multisample texture. The
     * effective $target parameter is the value of {@see GL45::GL_TEXTURE_TARGET} for texture. $Level, $format, $type
     * and $pixels have the same meaning as for {@see GL45::getTexImage}. $bufSize is the size of the buffer to
     * receive the retrieved pixel data.
     *
     * For cube map textures, the behavior is as though {@see GL46::GetTextureImage} were called, but only texels
     * from the requested cube map faces (selected by $zoffset and $depth, as described below) were returned.
     *
     * $xoffset, $yoffset and $zoffset values indicate the position of the subregion to return. $width, $height and
     * $depth indicate the size of the region to return. These parameters have the same meaning as for
     * {@see GL45::texSubImage3D}, though for one- and two-dimensional textures there are extra restrictions,
     * described in the errors section below.
     *
     * For one-dimensional array textures, $yoffset is interpreted as the first layer to access and $height is the
     * number of layers to access.
     *
     * For two-dimensional array textures, $zoffset is interpreted as the first layer to access and $depth is the
     * number of layers to access.
     *
     * Cube map textures are treated as an array of six slices in the z-dimension, where the value of $zoffset is
     * interpreted as specifying the cube map face for the corresponding layer (as presented in the table below) and
     * $depth is the number of faces to access:
     *
     *     Layer number Cube Map Face   0 GL_TEXTURE_CUBE_MAP_POSITIVE_X   1 GL_TEXTURE_CUBE_MAP_NEGATIVE_X   2
     * GL_TEXTURE_CUBE_MAP_POSITIVE_Y   3 GL_TEXTURE_CUBE_MAP_NEGATIVE_Y   4 GL_TEXTURE_CUBE_MAP_POSITIVE_Z   5
     * GL_TEXTURE_CUBE_MAP_NEGATIVE_Z
     *
     * For cube map array textures, $zoffset is the first layer-face to access, and $depth is the number of
     * layer-faces to access. A layer-face described by $k$ is translated into an array layer and face according to
     * $$ layer = \\left\\lfloor { layer \\over 6 } \\right\\rfloor$$ and $$ face = k \\bmod 6. $$
     *
     * Component groups from the specified sub-region are packed and placed into memory as described for
     * {@see GL45::getTextureImage}, starting with the texel at ($xoffset, $yoffset, $zoffset).
     *
     * @see http://docs.gl/gl4/glGetTextureSubImage
     * @since 4.5
     * @param int $texture
     * @param int $level
     * @param int $format
     * @param int $type
     * @param int $bufSize
     * @param CData|null $pixels
     * @return void
     */
    public function getTextureImage(
        int $texture,
        int $level,
        int $format,
        int $type,
        int $bufSize,
        ?CData $pixels
    ): void {
        $__proc = $this->proc('glGetTextureImage',
            'void (*)(GLuint texture, GLint level, GLenum format, GLenum type, GLsizei bufSize, void *pixels)');
        $__proc($texture, $level, $format, $type, $bufSize, $pixels);
    }

    /**
     * {@see GL45::getTexLevelParameterfv}, {@see GL45::getTexLevelParameteriv},
     * {@see GL45::getTextureLevelParameterfv} and {@see GL45::getTextureLevelParameteriv} return in $params
     * texture parameter values for a specific level-of-detail value, specified as $level. For the first two
     * functions, $target defines the target texture, either {@see GL45::GL_TEXTURE_1D}, {@see GL45::GL_TEXTURE_2D},
     * {@see GL45::GL_TEXTURE_3D}, {@see GL45::GL_PROXY_TEXTURE_1D}, {@see GL45::GL_PROXY_TEXTURE_2D},
     * {@see GL45::GL_PROXY_TEXTURE_3D}, {@see GL45::GL_TEXTURE_CUBE_MAP_POSITIVE_X},
     * {@see GL45::GL_TEXTURE_CUBE_MAP_NEGATIVE_X}, {@see GL45::GL_TEXTURE_CUBE_MAP_POSITIVE_Y},
     * {@see GL45::GL_TEXTURE_CUBE_MAP_NEGATIVE_Y}, {@see GL45::GL_TEXTURE_CUBE_MAP_POSITIVE_Z},
     * {@see GL45::GL_TEXTURE_CUBE_MAP_NEGATIVE_Z}, or {@see GL45::GL_PROXY_TEXTURE_CUBE_MAP}. The remaining two take
     * a $texture argument which specifies the name of the texture object.
     *
     * {@see GL45::GL_MAX_TEXTURE_SIZE}, and {@see GL45::GL_MAX_3D_TEXTURE_SIZE} are not really descriptive enough.
     * It has to report the largest square texture image that can be accommodated with mipmaps but a long skinny
     * texture, or a texture without mipmaps may easily fit in texture memory. The proxy targets allow the user to
     * more accurately query whether the GL can accommodate a texture of a given configuration. If the texture cannot
     * be accommodated, the texture state variables, which may be queried with {@see GL45::getTexLevelParameter}
     * and {@see GL45::getTextureLevelParameter}, are set to 0. If the texture can be accommodated, the texture
     * state values will be set as they would be set for a non-proxy target.
     *
     * $pname specifies the texture parameter whose value or values will be returned.
     *
     * The accepted parameter names are as follows:
     *
     *  - {@see GL45::GL_TEXTURE_WIDTH}: $params returns a single value, the
     *    width of the texture image. The initial value is 0.
     *
     *  - {@see GL45::GL_TEXTURE_HEIGHT}: $params returns a single value, the
     *    height of the texture image. The initial value is 0.
     *
     *  - {@see GL45::GL_TEXTURE_DEPTH}: $params returns a single value, the
     *    depth of the texture image. The initial value is 0.
     *
     *  - {@see GL45::GL_TEXTURE_INTERNAL_FORMAT}: $params returns a single
     *    value, the internal format of the texture image.
     *
     *  - {@see GL45::GL_TEXTURE_RED_TYPE, GL_TEXTURE_GREEN_TYPE,
     *    GL_TEXTURE_BLUE_TYPE, GL_TEXTURE_ALPHA_TYPE, GL_TEXTURE_DEPTH_TYPE}:
     *    The data type used to store the component. The types {@see
     *    GL45::GL_NONE}, {@see GL45::GL_SIGNED_NORMALIZED},
     *    {@see GL45::GL_UNSIGNED_NORMALIZED}, {@see GL45::GL_FLOAT}, {@see
     *    GL45::GL_INT}, and
     *    {@see GL45::GL_UNSIGNED_INT} may be returned to indicate signed
     *    normalized fixed-point, unsigned normalized
     *    fixed-point, floating-point, integer unnormalized, and unsigned
     *    integer unnormalized components, respectively.
     *
     *  - {@see GL45::GL_TEXTURE_RED_SIZE, GL_TEXTURE_GREEN_SIZE,
     *    GL_TEXTURE_BLUE_SIZE, GL_TEXTURE_ALPHA_SIZE, GL_TEXTURE_DEPTH_SIZE}:
     *    The internal storage resolution of an individual component. The
     *    resolution chosen by the GL will be a close
     *    match for the resolution requested by the user with the component
     *    argument of {@see GL45::texImage1D},
     *    {@see GL45::texImage2D}, {@see GL45::texImage3D}, {@see
     *    GL45::copyTexImage1D}, and
     *    {@see GL45::copyTexImage2D}. The initial value is 0.
     *
     *  - {@see GL45::GL_TEXTURE_COMPRESSED}: $params returns a single boolean
     *    value indicating if the texture image is stored in a compressed
     *    internal
     *    format. The initiali value is {@see GL45::GL_FALSE}.
     *
     *  - {@see GL45::GL_TEXTURE_COMPRESSED_IMAGE_SIZE}: $params returns a
     *    single integer value, the number of unsigned bytes of the compressed
     *    texture image that
     *    would be returned from {@see GL45::getCompressedTexImage}.
     *
     *  - {@see GL45::GL_TEXTURE_BUFFER_OFFSET}: $params returns a single
     *    integer value, the offset into the data store of the buffer bound to a
     *    buffer
     *    texture. {@see GL45::texBufferRange}.
     *
     *  - {@see GL45::GL_TEXTURE_BUFFER_SIZE}: $params returns a single integer
     *    value, the size of the range of a data store of the buffer bound to a
     *    buffer
     *    texture. {@see GL45::texBufferRange}.
     *
     * @see http://docs.gl/gl2/glGetTexLevelParameter
     * @see http://docs.gl/gl4/glGetTexLevelParameter
     * @since 4.5
     * @param int $texture
     * @param int $level
     * @param int $pname
     * @param float|null $params
     * @return void
     */
    public function getTextureLevelParameterfv(int $texture, int $level, int $pname, ?float &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLfloat', false);
        try {
            $__proc = $this->proc('glGetTextureLevelParameterfv',
                'void (*)(GLuint texture, GLint level, GLenum pname, GLfloat *params)');
            $__proc($texture, $level, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL45::getTexLevelParameterfv}, {@see GL45::getTexLevelParameteriv},
     * {@see GL45::getTextureLevelParameterfv} and {@see GL45::getTextureLevelParameteriv} return in $params
     * texture parameter values for a specific level-of-detail value, specified as $level. For the first two
     * functions, $target defines the target texture, either {@see GL45::GL_TEXTURE_1D}, {@see GL45::GL_TEXTURE_2D},
     * {@see GL45::GL_TEXTURE_3D}, {@see GL45::GL_PROXY_TEXTURE_1D}, {@see GL45::GL_PROXY_TEXTURE_2D},
     * {@see GL45::GL_PROXY_TEXTURE_3D}, {@see GL45::GL_TEXTURE_CUBE_MAP_POSITIVE_X},
     * {@see GL45::GL_TEXTURE_CUBE_MAP_NEGATIVE_X}, {@see GL45::GL_TEXTURE_CUBE_MAP_POSITIVE_Y},
     * {@see GL45::GL_TEXTURE_CUBE_MAP_NEGATIVE_Y}, {@see GL45::GL_TEXTURE_CUBE_MAP_POSITIVE_Z},
     * {@see GL45::GL_TEXTURE_CUBE_MAP_NEGATIVE_Z}, or {@see GL45::GL_PROXY_TEXTURE_CUBE_MAP}. The remaining two take
     * a $texture argument which specifies the name of the texture object.
     *
     * {@see GL45::GL_MAX_TEXTURE_SIZE}, and {@see GL45::GL_MAX_3D_TEXTURE_SIZE} are not really descriptive enough.
     * It has to report the largest square texture image that can be accommodated with mipmaps but a long skinny
     * texture, or a texture without mipmaps may easily fit in texture memory. The proxy targets allow the user to
     * more accurately query whether the GL can accommodate a texture of a given configuration. If the texture cannot
     * be accommodated, the texture state variables, which may be queried with {@see GL45::getTexLevelParameter}
     * and {@see GL45::getTextureLevelParameter}, are set to 0. If the texture can be accommodated, the texture
     * state values will be set as they would be set for a non-proxy target.
     *
     * $pname specifies the texture parameter whose value or values will be returned.
     *
     * The accepted parameter names are as follows:
     *
     *  - {@see GL45::GL_TEXTURE_WIDTH}: $params returns a single value, the
     *    width of the texture image. The initial value is 0.
     *
     *  - {@see GL45::GL_TEXTURE_HEIGHT}: $params returns a single value, the
     *    height of the texture image. The initial value is 0.
     *
     *  - {@see GL45::GL_TEXTURE_DEPTH}: $params returns a single value, the
     *    depth of the texture image. The initial value is 0.
     *
     *  - {@see GL45::GL_TEXTURE_INTERNAL_FORMAT}: $params returns a single
     *    value, the internal format of the texture image.
     *
     *  - {@see GL45::GL_TEXTURE_RED_TYPE, GL_TEXTURE_GREEN_TYPE,
     *    GL_TEXTURE_BLUE_TYPE, GL_TEXTURE_ALPHA_TYPE, GL_TEXTURE_DEPTH_TYPE}:
     *    The data type used to store the component. The types {@see
     *    GL45::GL_NONE}, {@see GL45::GL_SIGNED_NORMALIZED},
     *    {@see GL45::GL_UNSIGNED_NORMALIZED}, {@see GL45::GL_FLOAT}, {@see
     *    GL45::GL_INT}, and
     *    {@see GL45::GL_UNSIGNED_INT} may be returned to indicate signed
     *    normalized fixed-point, unsigned normalized
     *    fixed-point, floating-point, integer unnormalized, and unsigned
     *    integer unnormalized components, respectively.
     *
     *  - {@see GL45::GL_TEXTURE_RED_SIZE, GL_TEXTURE_GREEN_SIZE,
     *    GL_TEXTURE_BLUE_SIZE, GL_TEXTURE_ALPHA_SIZE, GL_TEXTURE_DEPTH_SIZE}:
     *    The internal storage resolution of an individual component. The
     *    resolution chosen by the GL will be a close
     *    match for the resolution requested by the user with the component
     *    argument of {@see GL45::texImage1D},
     *    {@see GL45::texImage2D}, {@see GL45::texImage3D}, {@see
     *    GL45::copyTexImage1D}, and
     *    {@see GL45::copyTexImage2D}. The initial value is 0.
     *
     *  - {@see GL45::GL_TEXTURE_COMPRESSED}: $params returns a single boolean
     *    value indicating if the texture image is stored in a compressed
     *    internal
     *    format. The initiali value is {@see GL45::GL_FALSE}.
     *
     *  - {@see GL45::GL_TEXTURE_COMPRESSED_IMAGE_SIZE}: $params returns a
     *    single integer value, the number of unsigned bytes of the compressed
     *    texture image that
     *    would be returned from {@see GL45::getCompressedTexImage}.
     *
     *  - {@see GL45::GL_TEXTURE_BUFFER_OFFSET}: $params returns a single
     *    integer value, the offset into the data store of the buffer bound to a
     *    buffer
     *    texture. {@see GL45::texBufferRange}.
     *
     *  - {@see GL45::GL_TEXTURE_BUFFER_SIZE}: $params returns a single integer
     *    value, the size of the range of a data store of the buffer bound to a
     *    buffer
     *    texture. {@see GL45::texBufferRange}.
     *
     * @see http://docs.gl/gl2/glGetTexLevelParameter
     * @see http://docs.gl/gl4/glGetTexLevelParameter
     * @since 4.5
     * @param int $texture
     * @param int $level
     * @param int $pname
     * @param int|null $params
     * @return void
     */
    public function getTextureLevelParameteriv(int $texture, int $level, int $pname, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->proc('glGetTextureLevelParameteriv',
                'void (*)(GLuint texture, GLint level, GLenum pname, GLint *params)');
            $__proc($texture, $level, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL45::getTexParameter} and {@see GL45::getTextureParameter} return in $params the value or values of
     * the texture parameter specified as $pname. $target defines the target texture. {@see GL45::GL_TEXTURE_1D},
     * {@see GL45::GL_TEXTURE_2D}, {@see GL45::GL_TEXTURE_3D}, {@see GL45::GL_TEXTURE_1D_ARRAY},
     * {@see GL45::GL_TEXTURE_2D_ARRAY}, {@see GL45::GL_TEXTURE_RECTANGLE}, {@see GL45::GL_TEXTURE_CUBE_MAP},
     * {@see GL45::GL_TEXTURE_CUBE_MAP_ARRAY}, {@see GL45::GL_TEXTURE_2D_MULTISAMPLE}, or
     * {@see GL45::GL_TEXTURE_2D_MULTISAMPLE_ARRAY} specify one-, two-, or three-dimensional, one-dimensional array,
     * two-dimensional array, rectangle, cube-mapped or cube-mapped array, two-dimensional multisample, or
     * two-dimensional multisample array texturing, respectively. $pname accepts the same symbols as
     * {@see GL45::texParameter}, with the same interpretations:
     *
     *  - {@see GL45::GL_DEPTH_STENCIL_TEXTURE_MODE}: Returns the single-value
     *    depth stencil texture mode, a symbolic constant. The initial value is
     *    {@see GL45::GL_DEPTH_COMPONENT}.
     *
     *  - {@see GL45::GL_TEXTURE_MAG_FILTER}: Returns the single-valued texture
     *    magnification filter, a symbolic constant. The initial value is
     *    {@see GL45::GL_LINEAR}.
     *
     *  - {@see GL45::GL_TEXTURE_MIN_FILTER}: Returns the single-valued texture
     *    minification filter, a symbolic constant. The initial value is
     *    {@see GL45::GL_NEAREST_MIPMAP_LINEAR}.
     *
     *  - {@see GL45::GL_TEXTURE_MIN_LOD}: Returns the single-valued texture
     *    minimum level-of-detail value. The initial value is   -1000  .
     *
     *  - {@see GL45::GL_TEXTURE_MAX_LOD}: Returns the single-valued texture
     *    maximum level-of-detail value. The initial value is 1000.
     *
     *  - {@see GL45::GL_TEXTURE_BASE_LEVEL}: Returns the single-valued base
     *    texture mipmap level. The initial value is 0.
     *
     *  - {@see GL45::GL_TEXTURE_MAX_LEVEL}: Returns the single-valued maximum
     *    texture mipmap array level. The initial value is 1000.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_R}: Returns the red component swizzle.
     *    The initial value is {@see GL45::GL_RED}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_G}: Returns the green component
     *    swizzle. The initial value is {@see GL45::GL_GREEN}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_B}: Returns the blue component swizzle.
     *    The initial value is {@see GL45::GL_BLUE}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_A}: Returns the alpha component
     *    swizzle. The initial value is {@see GL45::GL_ALPHA}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_RGBA}: Returns the component swizzle
     *    for all channels in a single query.
     *
     *  - {@see GL45::GL_TEXTURE_WRAP_S}: Returns the single-valued wrapping
     *    function for texture coordinate s, a symbolic constant. The initial
     *    value
     *    is {@see GL45::GL_REPEAT}.
     *
     *  - {@see GL45::GL_TEXTURE_WRAP_T}: Returns the single-valued wrapping
     *    function for texture coordinate t, a symbolic constant. The initial
     *    value
     *    is {@see GL45::GL_REPEAT}.
     *
     *  - {@see GL45::GL_TEXTURE_WRAP_R}: Returns the single-valued wrapping
     *    function for texture coordinate r, a symbolic constant. The initial
     *    value
     *    is {@see GL45::GL_REPEAT}.
     *
     *  - {@see GL45::GL_TEXTURE_BORDER_COLOR}: Returns four integer or
     *    floating-point numbers that comprise the RGBA color of the texture
     *    border.
     *    Floating-point values are returned in the range    0 1  . Integer
     *    values are returned as a linear mapping of
     *    the internal floating-point representation such that 1.0 maps to the
     *    most positive representable integer and
     *    -1.0  maps to the most negative representable integer. The initial
     *    value is (0, 0, 0, 0).
     *
     *  - {@see GL45::GL_TEXTURE_COMPARE_MODE}: Returns a single-valued texture
     *    comparison mode, a symbolic constant. The initial value is
     *    {@see GL45::GL_NONE}. See {@see GL45::texParameter}.
     *
     *  - {@see GL45::GL_TEXTURE_COMPARE_FUNC}: Returns a single-valued texture
     *    comparison function, a symbolic constant. The initial value is
     *    {@see GL45::GL_LEQUAL}. See {@see GL45::texParameter}.
     *
     *  - {@see GL45::GL_TEXTURE_VIEW_MIN_LEVEL}: Returns a single-valued base
     *    level of a texture view relative to its parent. The initial value is
     *    0. See
     *    {@see GL45::textureView}.
     *
     *  - {@see GL45::GL_TEXTURE_VIEW_NUM_LEVELS}: Returns a single-valued
     *    number of levels of detail of a texture view. See {@see
     *    GL45::textureView}.
     *
     *  - {@see GL45::GL_TEXTURE_VIEW_MIN_LAYER}: Returns a single-valued first
     *    level of a texture array view relative to its parent. See
     *    {@see GL45::textureView}.
     *
     *  - {@see GL45::GL_TEXTURE_VIEW_NUM_LAYERS}: Returns a single-valued
     *    number of layers in a texture array view. See {@see
     *    GL45::textureView}.
     *
     *  - {@see GL45::GL_TEXTURE_IMMUTABLE_LEVELS}: Returns a single-valued
     *    number of immutable texture levels in a texture view. See {@see
     *    GL45::textureView}.
     *
     * In addition to the parameters that may be set with {@see GL45::texParameter}, {@see GL45::getTexParameter}
     * and {@see GL45::getTextureParameter} accept the following read-only parameters:
     *
     *  - {@see GL45::GL_IMAGE_FORMAT_COMPATIBILITY_TYPE}: Returns the matching
     *    criteria use for the texture when used as an image texture. Can return
     *    {@see GL45::GL_IMAGE_FORMAT_COMPATIBILITY_BY_SIZE}, {@see
     *    GL45::GL_IMAGE_FORMAT_COMPATIBILITY_BY_CLASS} or
     *    {@see GL45::GL_NONE}.
     *
     *  - {@see GL45::GL_TEXTURE_IMMUTABLE_FORMAT}: Returns non-zero if the
     *    texture has an immutable format. Textures become immutable if their
     *    storage is
     *    specified with {@see GL45::texStorage1D}, {@see
     *    GL45::texStorage2D} or {@see GL45::texStorage3D}. The
     *    initial value is {@see GL45::GL_FALSE}.
     *
     *  - {@see GL45::GL_TEXTURE_TARGET}: Returns the effective target of the
     *    texture object. For {@see GL45::getTex*Parameter} functions, this is
     *    the
     *    target parameter. For {@see GL45::getTextureParameter*}, it is the
     *    target to which the texture was initially
     *    bound when it was created, or the value of the target parameter to the
     *    call to {@see GL45::createTextures}
     *    which created the texture.
     *
     * @see http://docs.gl/gl2/glGetBufferParameteriv
     * @see http://docs.gl/gl2/glGetTexLevelParameter
     * @see http://docs.gl/gl2/glGetTexParameter
     * @see http://docs.gl/gl4/glGetTexLevelParameter
     * @see http://docs.gl/gl4/glGetTexParameter
     * @since 4.5
     * @param int $texture
     * @param int $pname
     * @param int|null $params
     * @return void
     */
    public function getTextureParameterIiv(int $texture, int $pname, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->proc('glGetTextureParameterIiv',
                'void (*)(GLuint texture, GLenum pname, GLint *params)');
            $__proc($texture, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL45::getTexParameter} and {@see GL45::getTextureParameter} return in $params the value or values of
     * the texture parameter specified as $pname. $target defines the target texture. {@see GL45::GL_TEXTURE_1D},
     * {@see GL45::GL_TEXTURE_2D}, {@see GL45::GL_TEXTURE_3D}, {@see GL45::GL_TEXTURE_1D_ARRAY},
     * {@see GL45::GL_TEXTURE_2D_ARRAY}, {@see GL45::GL_TEXTURE_RECTANGLE}, {@see GL45::GL_TEXTURE_CUBE_MAP},
     * {@see GL45::GL_TEXTURE_CUBE_MAP_ARRAY}, {@see GL45::GL_TEXTURE_2D_MULTISAMPLE}, or
     * {@see GL45::GL_TEXTURE_2D_MULTISAMPLE_ARRAY} specify one-, two-, or three-dimensional, one-dimensional array,
     * two-dimensional array, rectangle, cube-mapped or cube-mapped array, two-dimensional multisample, or
     * two-dimensional multisample array texturing, respectively. $pname accepts the same symbols as
     * {@see GL45::texParameter}, with the same interpretations:
     *
     *  - {@see GL45::GL_DEPTH_STENCIL_TEXTURE_MODE}: Returns the single-value
     *    depth stencil texture mode, a symbolic constant. The initial value is
     *    {@see GL45::GL_DEPTH_COMPONENT}.
     *
     *  - {@see GL45::GL_TEXTURE_MAG_FILTER}: Returns the single-valued texture
     *    magnification filter, a symbolic constant. The initial value is
     *    {@see GL45::GL_LINEAR}.
     *
     *  - {@see GL45::GL_TEXTURE_MIN_FILTER}: Returns the single-valued texture
     *    minification filter, a symbolic constant. The initial value is
     *    {@see GL45::GL_NEAREST_MIPMAP_LINEAR}.
     *
     *  - {@see GL45::GL_TEXTURE_MIN_LOD}: Returns the single-valued texture
     *    minimum level-of-detail value. The initial value is   -1000  .
     *
     *  - {@see GL45::GL_TEXTURE_MAX_LOD}: Returns the single-valued texture
     *    maximum level-of-detail value. The initial value is 1000.
     *
     *  - {@see GL45::GL_TEXTURE_BASE_LEVEL}: Returns the single-valued base
     *    texture mipmap level. The initial value is 0.
     *
     *  - {@see GL45::GL_TEXTURE_MAX_LEVEL}: Returns the single-valued maximum
     *    texture mipmap array level. The initial value is 1000.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_R}: Returns the red component swizzle.
     *    The initial value is {@see GL45::GL_RED}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_G}: Returns the green component
     *    swizzle. The initial value is {@see GL45::GL_GREEN}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_B}: Returns the blue component swizzle.
     *    The initial value is {@see GL45::GL_BLUE}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_A}: Returns the alpha component
     *    swizzle. The initial value is {@see GL45::GL_ALPHA}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_RGBA}: Returns the component swizzle
     *    for all channels in a single query.
     *
     *  - {@see GL45::GL_TEXTURE_WRAP_S}: Returns the single-valued wrapping
     *    function for texture coordinate s, a symbolic constant. The initial
     *    value
     *    is {@see GL45::GL_REPEAT}.
     *
     *  - {@see GL45::GL_TEXTURE_WRAP_T}: Returns the single-valued wrapping
     *    function for texture coordinate t, a symbolic constant. The initial
     *    value
     *    is {@see GL45::GL_REPEAT}.
     *
     *  - {@see GL45::GL_TEXTURE_WRAP_R}: Returns the single-valued wrapping
     *    function for texture coordinate r, a symbolic constant. The initial
     *    value
     *    is {@see GL45::GL_REPEAT}.
     *
     *  - {@see GL45::GL_TEXTURE_BORDER_COLOR}: Returns four integer or
     *    floating-point numbers that comprise the RGBA color of the texture
     *    border.
     *    Floating-point values are returned in the range    0 1  . Integer
     *    values are returned as a linear mapping of
     *    the internal floating-point representation such that 1.0 maps to the
     *    most positive representable integer and
     *    -1.0  maps to the most negative representable integer. The initial
     *    value is (0, 0, 0, 0).
     *
     *  - {@see GL45::GL_TEXTURE_COMPARE_MODE}: Returns a single-valued texture
     *    comparison mode, a symbolic constant. The initial value is
     *    {@see GL45::GL_NONE}. See {@see GL45::texParameter}.
     *
     *  - {@see GL45::GL_TEXTURE_COMPARE_FUNC}: Returns a single-valued texture
     *    comparison function, a symbolic constant. The initial value is
     *    {@see GL45::GL_LEQUAL}. See {@see GL45::texParameter}.
     *
     *  - {@see GL45::GL_TEXTURE_VIEW_MIN_LEVEL}: Returns a single-valued base
     *    level of a texture view relative to its parent. The initial value is
     *    0. See
     *    {@see GL45::textureView}.
     *
     *  - {@see GL45::GL_TEXTURE_VIEW_NUM_LEVELS}: Returns a single-valued
     *    number of levels of detail of a texture view. See {@see
     *    GL45::textureView}.
     *
     *  - {@see GL45::GL_TEXTURE_VIEW_MIN_LAYER}: Returns a single-valued first
     *    level of a texture array view relative to its parent. See
     *    {@see GL45::textureView}.
     *
     *  - {@see GL45::GL_TEXTURE_VIEW_NUM_LAYERS}: Returns a single-valued
     *    number of layers in a texture array view. See {@see
     *    GL45::textureView}.
     *
     *  - {@see GL45::GL_TEXTURE_IMMUTABLE_LEVELS}: Returns a single-valued
     *    number of immutable texture levels in a texture view. See {@see
     *    GL45::textureView}.
     *
     * In addition to the parameters that may be set with {@see GL45::texParameter}, {@see GL45::getTexParameter}
     * and {@see GL45::getTextureParameter} accept the following read-only parameters:
     *
     *  - {@see GL45::GL_IMAGE_FORMAT_COMPATIBILITY_TYPE}: Returns the matching
     *    criteria use for the texture when used as an image texture. Can return
     *    {@see GL45::GL_IMAGE_FORMAT_COMPATIBILITY_BY_SIZE}, {@see
     *    GL45::GL_IMAGE_FORMAT_COMPATIBILITY_BY_CLASS} or
     *    {@see GL45::GL_NONE}.
     *
     *  - {@see GL45::GL_TEXTURE_IMMUTABLE_FORMAT}: Returns non-zero if the
     *    texture has an immutable format. Textures become immutable if their
     *    storage is
     *    specified with {@see GL45::texStorage1D}, {@see
     *    GL45::texStorage2D} or {@see GL45::texStorage3D}. The
     *    initial value is {@see GL45::GL_FALSE}.
     *
     *  - {@see GL45::GL_TEXTURE_TARGET}: Returns the effective target of the
     *    texture object. For {@see GL45::getTex*Parameter} functions, this is
     *    the
     *    target parameter. For {@see GL45::getTextureParameter*}, it is the
     *    target to which the texture was initially
     *    bound when it was created, or the value of the target parameter to the
     *    call to {@see GL45::createTextures}
     *    which created the texture.
     *
     * @see http://docs.gl/gl2/glGetBufferParameteriv
     * @see http://docs.gl/gl2/glGetTexLevelParameter
     * @see http://docs.gl/gl2/glGetTexParameter
     * @see http://docs.gl/gl4/glGetTexLevelParameter
     * @see http://docs.gl/gl4/glGetTexParameter
     * @since 4.5
     * @param int $texture
     * @param int $pname
     * @param int|null $params
     * @return void
     */
    public function getTextureParameterIuiv(int $texture, int $pname, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLuint', false);
        try {
            $__proc = $this->proc('glGetTextureParameterIuiv',
                'void (*)(GLuint texture, GLenum pname, GLuint *params)');
            $__proc($texture, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL45::getTexParameter} and {@see GL45::getTextureParameter} return in $params the value or values of
     * the texture parameter specified as $pname. $target defines the target texture. {@see GL45::GL_TEXTURE_1D},
     * {@see GL45::GL_TEXTURE_2D}, {@see GL45::GL_TEXTURE_3D}, {@see GL45::GL_TEXTURE_1D_ARRAY},
     * {@see GL45::GL_TEXTURE_2D_ARRAY}, {@see GL45::GL_TEXTURE_RECTANGLE}, {@see GL45::GL_TEXTURE_CUBE_MAP},
     * {@see GL45::GL_TEXTURE_CUBE_MAP_ARRAY}, {@see GL45::GL_TEXTURE_2D_MULTISAMPLE}, or
     * {@see GL45::GL_TEXTURE_2D_MULTISAMPLE_ARRAY} specify one-, two-, or three-dimensional, one-dimensional array,
     * two-dimensional array, rectangle, cube-mapped or cube-mapped array, two-dimensional multisample, or
     * two-dimensional multisample array texturing, respectively. $pname accepts the same symbols as
     * {@see GL45::texParameter}, with the same interpretations:
     *
     *  - {@see GL45::GL_DEPTH_STENCIL_TEXTURE_MODE}: Returns the single-value
     *    depth stencil texture mode, a symbolic constant. The initial value is
     *    {@see GL45::GL_DEPTH_COMPONENT}.
     *
     *  - {@see GL45::GL_TEXTURE_MAG_FILTER}: Returns the single-valued texture
     *    magnification filter, a symbolic constant. The initial value is
     *    {@see GL45::GL_LINEAR}.
     *
     *  - {@see GL45::GL_TEXTURE_MIN_FILTER}: Returns the single-valued texture
     *    minification filter, a symbolic constant. The initial value is
     *    {@see GL45::GL_NEAREST_MIPMAP_LINEAR}.
     *
     *  - {@see GL45::GL_TEXTURE_MIN_LOD}: Returns the single-valued texture
     *    minimum level-of-detail value. The initial value is   -1000  .
     *
     *  - {@see GL45::GL_TEXTURE_MAX_LOD}: Returns the single-valued texture
     *    maximum level-of-detail value. The initial value is 1000.
     *
     *  - {@see GL45::GL_TEXTURE_BASE_LEVEL}: Returns the single-valued base
     *    texture mipmap level. The initial value is 0.
     *
     *  - {@see GL45::GL_TEXTURE_MAX_LEVEL}: Returns the single-valued maximum
     *    texture mipmap array level. The initial value is 1000.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_R}: Returns the red component swizzle.
     *    The initial value is {@see GL45::GL_RED}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_G}: Returns the green component
     *    swizzle. The initial value is {@see GL45::GL_GREEN}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_B}: Returns the blue component swizzle.
     *    The initial value is {@see GL45::GL_BLUE}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_A}: Returns the alpha component
     *    swizzle. The initial value is {@see GL45::GL_ALPHA}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_RGBA}: Returns the component swizzle
     *    for all channels in a single query.
     *
     *  - {@see GL45::GL_TEXTURE_WRAP_S}: Returns the single-valued wrapping
     *    function for texture coordinate s, a symbolic constant. The initial
     *    value
     *    is {@see GL45::GL_REPEAT}.
     *
     *  - {@see GL45::GL_TEXTURE_WRAP_T}: Returns the single-valued wrapping
     *    function for texture coordinate t, a symbolic constant. The initial
     *    value
     *    is {@see GL45::GL_REPEAT}.
     *
     *  - {@see GL45::GL_TEXTURE_WRAP_R}: Returns the single-valued wrapping
     *    function for texture coordinate r, a symbolic constant. The initial
     *    value
     *    is {@see GL45::GL_REPEAT}.
     *
     *  - {@see GL45::GL_TEXTURE_BORDER_COLOR}: Returns four integer or
     *    floating-point numbers that comprise the RGBA color of the texture
     *    border.
     *    Floating-point values are returned in the range    0 1  . Integer
     *    values are returned as a linear mapping of
     *    the internal floating-point representation such that 1.0 maps to the
     *    most positive representable integer and
     *    -1.0  maps to the most negative representable integer. The initial
     *    value is (0, 0, 0, 0).
     *
     *  - {@see GL45::GL_TEXTURE_COMPARE_MODE}: Returns a single-valued texture
     *    comparison mode, a symbolic constant. The initial value is
     *    {@see GL45::GL_NONE}. See {@see GL45::texParameter}.
     *
     *  - {@see GL45::GL_TEXTURE_COMPARE_FUNC}: Returns a single-valued texture
     *    comparison function, a symbolic constant. The initial value is
     *    {@see GL45::GL_LEQUAL}. See {@see GL45::texParameter}.
     *
     *  - {@see GL45::GL_TEXTURE_VIEW_MIN_LEVEL}: Returns a single-valued base
     *    level of a texture view relative to its parent. The initial value is
     *    0. See
     *    {@see GL45::textureView}.
     *
     *  - {@see GL45::GL_TEXTURE_VIEW_NUM_LEVELS}: Returns a single-valued
     *    number of levels of detail of a texture view. See {@see
     *    GL45::textureView}.
     *
     *  - {@see GL45::GL_TEXTURE_VIEW_MIN_LAYER}: Returns a single-valued first
     *    level of a texture array view relative to its parent. See
     *    {@see GL45::textureView}.
     *
     *  - {@see GL45::GL_TEXTURE_VIEW_NUM_LAYERS}: Returns a single-valued
     *    number of layers in a texture array view. See {@see
     *    GL45::textureView}.
     *
     *  - {@see GL45::GL_TEXTURE_IMMUTABLE_LEVELS}: Returns a single-valued
     *    number of immutable texture levels in a texture view. See {@see
     *    GL45::textureView}.
     *
     * In addition to the parameters that may be set with {@see GL45::texParameter}, {@see GL45::getTexParameter}
     * and {@see GL45::getTextureParameter} accept the following read-only parameters:
     *
     *  - {@see GL45::GL_IMAGE_FORMAT_COMPATIBILITY_TYPE}: Returns the matching
     *    criteria use for the texture when used as an image texture. Can return
     *    {@see GL45::GL_IMAGE_FORMAT_COMPATIBILITY_BY_SIZE}, {@see
     *    GL45::GL_IMAGE_FORMAT_COMPATIBILITY_BY_CLASS} or
     *    {@see GL45::GL_NONE}.
     *
     *  - {@see GL45::GL_TEXTURE_IMMUTABLE_FORMAT}: Returns non-zero if the
     *    texture has an immutable format. Textures become immutable if their
     *    storage is
     *    specified with {@see GL45::texStorage1D}, {@see
     *    GL45::texStorage2D} or {@see GL45::texStorage3D}. The
     *    initial value is {@see GL45::GL_FALSE}.
     *
     *  - {@see GL45::GL_TEXTURE_TARGET}: Returns the effective target of the
     *    texture object. For {@see GL45::getTex*Parameter} functions, this is
     *    the
     *    target parameter. For {@see GL45::getTextureParameter*}, it is the
     *    target to which the texture was initially
     *    bound when it was created, or the value of the target parameter to the
     *    call to {@see GL45::createTextures}
     *    which created the texture.
     *
     * @see http://docs.gl/gl2/glGetTexLevelParameter
     * @see http://docs.gl/gl2/glGetTexParameter
     * @see http://docs.gl/gl4/glGetTexLevelParameter
     * @see http://docs.gl/gl4/glGetTexParameter
     * @since 4.5
     * @param int $texture
     * @param int $pname
     * @param float|null $params
     * @return void
     */
    public function getTextureParameterfv(int $texture, int $pname, ?float &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLfloat', false);
        try {
            $__proc = $this->proc('glGetTextureParameterfv',
                'void (*)(GLuint texture, GLenum pname, GLfloat *params)');
            $__proc($texture, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL45::getTexParameter} and {@see GL45::getTextureParameter} return in $params the value or values of
     * the texture parameter specified as $pname. $target defines the target texture. {@see GL45::GL_TEXTURE_1D},
     * {@see GL45::GL_TEXTURE_2D}, {@see GL45::GL_TEXTURE_3D}, {@see GL45::GL_TEXTURE_1D_ARRAY},
     * {@see GL45::GL_TEXTURE_2D_ARRAY}, {@see GL45::GL_TEXTURE_RECTANGLE}, {@see GL45::GL_TEXTURE_CUBE_MAP},
     * {@see GL45::GL_TEXTURE_CUBE_MAP_ARRAY}, {@see GL45::GL_TEXTURE_2D_MULTISAMPLE}, or
     * {@see GL45::GL_TEXTURE_2D_MULTISAMPLE_ARRAY} specify one-, two-, or three-dimensional, one-dimensional array,
     * two-dimensional array, rectangle, cube-mapped or cube-mapped array, two-dimensional multisample, or
     * two-dimensional multisample array texturing, respectively. $pname accepts the same symbols as
     * {@see GL45::texParameter}, with the same interpretations:
     *
     *  - {@see GL45::GL_DEPTH_STENCIL_TEXTURE_MODE}: Returns the single-value
     *    depth stencil texture mode, a symbolic constant. The initial value is
     *    {@see GL45::GL_DEPTH_COMPONENT}.
     *
     *  - {@see GL45::GL_TEXTURE_MAG_FILTER}: Returns the single-valued texture
     *    magnification filter, a symbolic constant. The initial value is
     *    {@see GL45::GL_LINEAR}.
     *
     *  - {@see GL45::GL_TEXTURE_MIN_FILTER}: Returns the single-valued texture
     *    minification filter, a symbolic constant. The initial value is
     *    {@see GL45::GL_NEAREST_MIPMAP_LINEAR}.
     *
     *  - {@see GL45::GL_TEXTURE_MIN_LOD}: Returns the single-valued texture
     *    minimum level-of-detail value. The initial value is   -1000  .
     *
     *  - {@see GL45::GL_TEXTURE_MAX_LOD}: Returns the single-valued texture
     *    maximum level-of-detail value. The initial value is 1000.
     *
     *  - {@see GL45::GL_TEXTURE_BASE_LEVEL}: Returns the single-valued base
     *    texture mipmap level. The initial value is 0.
     *
     *  - {@see GL45::GL_TEXTURE_MAX_LEVEL}: Returns the single-valued maximum
     *    texture mipmap array level. The initial value is 1000.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_R}: Returns the red component swizzle.
     *    The initial value is {@see GL45::GL_RED}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_G}: Returns the green component
     *    swizzle. The initial value is {@see GL45::GL_GREEN}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_B}: Returns the blue component swizzle.
     *    The initial value is {@see GL45::GL_BLUE}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_A}: Returns the alpha component
     *    swizzle. The initial value is {@see GL45::GL_ALPHA}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_RGBA}: Returns the component swizzle
     *    for all channels in a single query.
     *
     *  - {@see GL45::GL_TEXTURE_WRAP_S}: Returns the single-valued wrapping
     *    function for texture coordinate s, a symbolic constant. The initial
     *    value
     *    is {@see GL45::GL_REPEAT}.
     *
     *  - {@see GL45::GL_TEXTURE_WRAP_T}: Returns the single-valued wrapping
     *    function for texture coordinate t, a symbolic constant. The initial
     *    value
     *    is {@see GL45::GL_REPEAT}.
     *
     *  - {@see GL45::GL_TEXTURE_WRAP_R}: Returns the single-valued wrapping
     *    function for texture coordinate r, a symbolic constant. The initial
     *    value
     *    is {@see GL45::GL_REPEAT}.
     *
     *  - {@see GL45::GL_TEXTURE_BORDER_COLOR}: Returns four integer or
     *    floating-point numbers that comprise the RGBA color of the texture
     *    border.
     *    Floating-point values are returned in the range    0 1  . Integer
     *    values are returned as a linear mapping of
     *    the internal floating-point representation such that 1.0 maps to the
     *    most positive representable integer and
     *    -1.0  maps to the most negative representable integer. The initial
     *    value is (0, 0, 0, 0).
     *
     *  - {@see GL45::GL_TEXTURE_COMPARE_MODE}: Returns a single-valued texture
     *    comparison mode, a symbolic constant. The initial value is
     *    {@see GL45::GL_NONE}. See {@see GL45::texParameter}.
     *
     *  - {@see GL45::GL_TEXTURE_COMPARE_FUNC}: Returns a single-valued texture
     *    comparison function, a symbolic constant. The initial value is
     *    {@see GL45::GL_LEQUAL}. See {@see GL45::texParameter}.
     *
     *  - {@see GL45::GL_TEXTURE_VIEW_MIN_LEVEL}: Returns a single-valued base
     *    level of a texture view relative to its parent. The initial value is
     *    0. See
     *    {@see GL45::textureView}.
     *
     *  - {@see GL45::GL_TEXTURE_VIEW_NUM_LEVELS}: Returns a single-valued
     *    number of levels of detail of a texture view. See {@see
     *    GL45::textureView}.
     *
     *  - {@see GL45::GL_TEXTURE_VIEW_MIN_LAYER}: Returns a single-valued first
     *    level of a texture array view relative to its parent. See
     *    {@see GL45::textureView}.
     *
     *  - {@see GL45::GL_TEXTURE_VIEW_NUM_LAYERS}: Returns a single-valued
     *    number of layers in a texture array view. See {@see
     *    GL45::textureView}.
     *
     *  - {@see GL45::GL_TEXTURE_IMMUTABLE_LEVELS}: Returns a single-valued
     *    number of immutable texture levels in a texture view. See {@see
     *    GL45::textureView}.
     *
     * In addition to the parameters that may be set with {@see GL45::texParameter}, {@see GL45::getTexParameter}
     * and {@see GL45::getTextureParameter} accept the following read-only parameters:
     *
     *  - {@see GL45::GL_IMAGE_FORMAT_COMPATIBILITY_TYPE}: Returns the matching
     *    criteria use for the texture when used as an image texture. Can return
     *    {@see GL45::GL_IMAGE_FORMAT_COMPATIBILITY_BY_SIZE}, {@see
     *    GL45::GL_IMAGE_FORMAT_COMPATIBILITY_BY_CLASS} or
     *    {@see GL45::GL_NONE}.
     *
     *  - {@see GL45::GL_TEXTURE_IMMUTABLE_FORMAT}: Returns non-zero if the
     *    texture has an immutable format. Textures become immutable if their
     *    storage is
     *    specified with {@see GL45::texStorage1D}, {@see
     *    GL45::texStorage2D} or {@see GL45::texStorage3D}. The
     *    initial value is {@see GL45::GL_FALSE}.
     *
     *  - {@see GL45::GL_TEXTURE_TARGET}: Returns the effective target of the
     *    texture object. For {@see GL45::getTex*Parameter} functions, this is
     *    the
     *    target parameter. For {@see GL45::getTextureParameter*}, it is the
     *    target to which the texture was initially
     *    bound when it was created, or the value of the target parameter to the
     *    call to {@see GL45::createTextures}
     *    which created the texture.
     *
     * @see http://docs.gl/gl2/glGetBufferParameteriv
     * @see http://docs.gl/gl2/glGetTexLevelParameter
     * @see http://docs.gl/gl2/glGetTexParameter
     * @see http://docs.gl/gl4/glGetTexLevelParameter
     * @see http://docs.gl/gl4/glGetTexParameter
     * @since 4.5
     * @param int $texture
     * @param int $pname
     * @param int|null $params
     * @return void
     */
    public function getTextureParameteriv(int $texture, int $pname, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->proc('glGetTextureParameteriv',
                'void (*)(GLuint texture, GLenum pname, GLint *params)');
            $__proc($texture, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL45::getTextureSubImage} returns a texture subimage into pixels.
     *
     * $texture is the name of the source texture object and must not be a buffer or multisample texture. The
     * effective $target parameter is the value of {@see GL45::GL_TEXTURE_TARGET} for texture. $Level, $format, $type
     * and $pixels have the same meaning as for {@see GL45::getTexImage}. $bufSize is the size of the buffer to
     * receive the retrieved pixel data.
     *
     * For cube map textures, the behavior is as though {@see GL46::GetTextureImage} were called, but only texels
     * from the requested cube map faces (selected by $zoffset and $depth, as described below) were returned.
     *
     * $xoffset, $yoffset and $zoffset values indicate the position of the subregion to return. $width, $height and
     * $depth indicate the size of the region to return. These parameters have the same meaning as for
     * {@see GL45::texSubImage3D}, though for one- and two-dimensional textures there are extra restrictions,
     * described in the errors section below.
     *
     * For one-dimensional array textures, $yoffset is interpreted as the first layer to access and $height is the
     * number of layers to access.
     *
     * For two-dimensional array textures, $zoffset is interpreted as the first layer to access and $depth is the
     * number of layers to access.
     *
     * Cube map textures are treated as an array of six slices in the z-dimension, where the value of $zoffset is
     * interpreted as specifying the cube map face for the corresponding layer (as presented in the table below) and
     * $depth is the number of faces to access:
     *
     *     Layer number Cube Map Face   0 GL_TEXTURE_CUBE_MAP_POSITIVE_X   1 GL_TEXTURE_CUBE_MAP_NEGATIVE_X   2
     * GL_TEXTURE_CUBE_MAP_POSITIVE_Y   3 GL_TEXTURE_CUBE_MAP_NEGATIVE_Y   4 GL_TEXTURE_CUBE_MAP_POSITIVE_Z   5
     * GL_TEXTURE_CUBE_MAP_NEGATIVE_Z
     *
     * For cube map array textures, $zoffset is the first layer-face to access, and $depth is the number of
     * layer-faces to access. A layer-face described by $k$ is translated into an array layer and face according to
     * $$ layer = \\left\\lfloor { layer \\over 6 } \\right\\rfloor$$ and $$ face = k \\bmod 6. $$
     *
     * Component groups from the specified sub-region are packed and placed into memory as described for
     * {@see GL45::getTextureImage}, starting with the texel at ($xoffset, $yoffset, $zoffset).
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
     * @param CData|null $pixels
     * @return void
     */
    public function getTextureSubImage(
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
        ?CData $pixels
    ): void {
        $__proc = $this->proc('glGetTextureSubImage',
            'void (*)(GLuint texture, GLint level, GLint xoffset, GLint yoffset, GLint zoffset, GLsizei width, GLsizei height, GLsizei depth, GLenum format, GLenum type, GLsizei bufSize, void *pixels)');
        $__proc($texture, $level, $xoffset, $yoffset, $zoffset, $width, $height, $depth, $format, $type, $bufSize,
            $pixels);
    }

    /**
     * In order to use the Transform Feedback functionality, you need to configure the Transform Feedback Buffer
     * indexed bindings. This can be achieved by either using {@see GL45::bindBufferBase} or
     * {@see GL45::bindBuffersBase} to associate whole buffer object storage to one of the Transform Feedback
     * Binding Points, or by calling {@see GL45::bindBufferRange} or {@see GL45::bindBuffersRange} to use a
     * region of a buffer object storage for the binding. You may want to (but are not required to) bind a Transform
     * Feedback Object first, in order to cache the binding configuration. This usually allows you to restore the
     * Transform Feedback configuration faster, than if you were to execute a list of API calls necessary to set up
     * the Transform Feedback state of your liking.
     *
     * This reference page discusses two types of getters that operate on Transform Feedback Objects and their
     * bindings.
     *
     * The first class operates on general Transform Feedback binding point and includes
     * {@see GL45::getTransformFeedbackiv} function. {@see GL45::getTransformFeedbackiv} can be used to retrieve
     * information about Transform Feedback object bound to the general Transform Feedback binding point, as
     * configured with a {@see GL45::bindTransformFeedback} call. In this case, you can check:
     *
     *   What the ID of the currently bound Transform Feedback Object is;
     * ({@see GL45::GL_TRANSFORM_FEEDBACK_BUFFER_BINDING})   Whether the Transform Feedback process is currently
     * paused; ({@see GL45::GL_TRANSFORM_FEEDBACK_PAUSED})   Whether the Transform Feedback process has been begun
     * and is currently undergoing; ({@see GL45::GL_TRANSFORM_FEEDBACK_ACTIVE})
     *
     * The latter class, which includes {@see GL45::getTransformFeedbacki_v} and
     * {@see GL45::getTransformFeedbacki64_v} functions, can be used to check what the current configuration of
     * each of the buffer object regions bound to Transform Feedback Buffer binding points is. This allows you to
     * query for the following information:
     *
     *   {@see GL45::getTransformFeedbacki_v} only: What the ID of the Buffer Object bound to a Transform Feedback
     * Binding Point of user-specified index is; ({@see GL45::GL_TRANSFORM_FEEDBACK_BUFFER_BINDING}).
     * {@see GL45::getTransformFeedbacki64_v} only: What the start offset configured for the binding is;
     * ({@see GL45::GL_TRANSFORM_FEEDBACK_BUFFER_START});   {@see GL45::getTransformFeedbacki64_v} only: What the
     * length of the region used for the binding is; ({@see GL45::GL_TRANSFORM_FEEDBACK_BUFFER_SIZE});
     *
     * @see http://docs.gl/gl4/glGetTransformFeedback
     * @since 4.5
     * @param int $xfb
     * @param int $pname
     * @param int $index
     * @param int|null $param
     * @return void
     */
    public function getTransformFeedbacki64_v(int $xfb, int $pname, int $index, ?int &$param): void
    {
        $paramCType = $this->info->ffi->new('GLint64', false);
        try {
            $__proc = $this->proc('glGetTransformFeedbacki64_v',
                'void (*)(GLuint xfb, GLenum pname, GLuint index, GLint64 *param)');
            $__proc($xfb, $pname, $index, \FFI::addr($paramCType));
        } finally {
            $param = $paramCType->cdata;
            \FFI::free($paramCType);
        }
    }

    /**
     * In order to use the Transform Feedback functionality, you need to configure the Transform Feedback Buffer
     * indexed bindings. This can be achieved by either using {@see GL45::bindBufferBase} or
     * {@see GL45::bindBuffersBase} to associate whole buffer object storage to one of the Transform Feedback
     * Binding Points, or by calling {@see GL45::bindBufferRange} or {@see GL45::bindBuffersRange} to use a
     * region of a buffer object storage for the binding. You may want to (but are not required to) bind a Transform
     * Feedback Object first, in order to cache the binding configuration. This usually allows you to restore the
     * Transform Feedback configuration faster, than if you were to execute a list of API calls necessary to set up
     * the Transform Feedback state of your liking.
     *
     * This reference page discusses two types of getters that operate on Transform Feedback Objects and their
     * bindings.
     *
     * The first class operates on general Transform Feedback binding point and includes
     * {@see GL45::getTransformFeedbackiv} function. {@see GL45::getTransformFeedbackiv} can be used to retrieve
     * information about Transform Feedback object bound to the general Transform Feedback binding point, as
     * configured with a {@see GL45::bindTransformFeedback} call. In this case, you can check:
     *
     *   What the ID of the currently bound Transform Feedback Object is;
     * ({@see GL45::GL_TRANSFORM_FEEDBACK_BUFFER_BINDING})   Whether the Transform Feedback process is currently
     * paused; ({@see GL45::GL_TRANSFORM_FEEDBACK_PAUSED})   Whether the Transform Feedback process has been begun
     * and is currently undergoing; ({@see GL45::GL_TRANSFORM_FEEDBACK_ACTIVE})
     *
     * The latter class, which includes {@see GL45::getTransformFeedbacki_v} and
     * {@see GL45::getTransformFeedbacki64_v} functions, can be used to check what the current configuration of
     * each of the buffer object regions bound to Transform Feedback Buffer binding points is. This allows you to
     * query for the following information:
     *
     *   {@see GL45::getTransformFeedbacki_v} only: What the ID of the Buffer Object bound to a Transform Feedback
     * Binding Point of user-specified index is; ({@see GL45::GL_TRANSFORM_FEEDBACK_BUFFER_BINDING}).
     * {@see GL45::getTransformFeedbacki64_v} only: What the start offset configured for the binding is;
     * ({@see GL45::GL_TRANSFORM_FEEDBACK_BUFFER_START});   {@see GL45::getTransformFeedbacki64_v} only: What the
     * length of the region used for the binding is; ({@see GL45::GL_TRANSFORM_FEEDBACK_BUFFER_SIZE});
     *
     * @see http://docs.gl/gl4/glGetTransformFeedback
     * @since 4.5
     * @param int $xfb
     * @param int $pname
     * @param int $index
     * @param int|null $param
     * @return void
     */
    public function getTransformFeedbacki_v(int $xfb, int $pname, int $index, ?int &$param): void
    {
        $paramCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->proc('glGetTransformFeedbacki_v',
                'void (*)(GLuint xfb, GLenum pname, GLuint index, GLint *param)');
            $__proc($xfb, $pname, $index, \FFI::addr($paramCType));
        } finally {
            $param = $paramCType->cdata;
            \FFI::free($paramCType);
        }
    }

    /**
     * In order to use the Transform Feedback functionality, you need to configure the Transform Feedback Buffer
     * indexed bindings. This can be achieved by either using {@see GL45::bindBufferBase} or
     * {@see GL45::bindBuffersBase} to associate whole buffer object storage to one of the Transform Feedback
     * Binding Points, or by calling {@see GL45::bindBufferRange} or {@see GL45::bindBuffersRange} to use a
     * region of a buffer object storage for the binding. You may want to (but are not required to) bind a Transform
     * Feedback Object first, in order to cache the binding configuration. This usually allows you to restore the
     * Transform Feedback configuration faster, than if you were to execute a list of API calls necessary to set up
     * the Transform Feedback state of your liking.
     *
     * This reference page discusses two types of getters that operate on Transform Feedback Objects and their
     * bindings.
     *
     * The first class operates on general Transform Feedback binding point and includes
     * {@see GL45::getTransformFeedbackiv} function. {@see GL45::getTransformFeedbackiv} can be used to retrieve
     * information about Transform Feedback object bound to the general Transform Feedback binding point, as
     * configured with a {@see GL45::bindTransformFeedback} call. In this case, you can check:
     *
     *   What the ID of the currently bound Transform Feedback Object is;
     * ({@see GL45::GL_TRANSFORM_FEEDBACK_BUFFER_BINDING})   Whether the Transform Feedback process is currently
     * paused; ({@see GL45::GL_TRANSFORM_FEEDBACK_PAUSED})   Whether the Transform Feedback process has been begun
     * and is currently undergoing; ({@see GL45::GL_TRANSFORM_FEEDBACK_ACTIVE})
     *
     * The latter class, which includes {@see GL45::getTransformFeedbacki_v} and
     * {@see GL45::getTransformFeedbacki64_v} functions, can be used to check what the current configuration of
     * each of the buffer object regions bound to Transform Feedback Buffer binding points is. This allows you to
     * query for the following information:
     *
     *   {@see GL45::getTransformFeedbacki_v} only: What the ID of the Buffer Object bound to a Transform Feedback
     * Binding Point of user-specified index is; ({@see GL45::GL_TRANSFORM_FEEDBACK_BUFFER_BINDING}).
     * {@see GL45::getTransformFeedbacki64_v} only: What the start offset configured for the binding is;
     * ({@see GL45::GL_TRANSFORM_FEEDBACK_BUFFER_START});   {@see GL45::getTransformFeedbacki64_v} only: What the
     * length of the region used for the binding is; ({@see GL45::GL_TRANSFORM_FEEDBACK_BUFFER_SIZE});
     *
     * @see http://docs.gl/gl4/glGetTransformFeedback
     * @since 4.5
     * @param int $xfb
     * @param int $pname
     * @param int|null $param
     * @return void
     */
    public function getTransformFeedbackiv(int $xfb, int $pname, ?int &$param): void
    {
        $paramCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->proc('glGetTransformFeedbackiv', 'void (*)(GLuint xfb, GLenum pname, GLint *param)');
            $__proc($xfb, $pname, \FFI::addr($paramCType));
        } finally {
            $param = $paramCType->cdata;
            \FFI::free($paramCType);
        }
    }

    /**
     * {@see GL45::getVertexArrayIndexediv} and {@see GL45::getVertexArrayIndexed64iv} provide a way of querying
     * parameters of an attribute at an user-specified index of a vertex array object. The vertex array object does
     * not have to be bound to the rendering context at the time of the call, but must have been bound at least once
     * prior to this call.
     *
     * The following parameter values can be retrieved with {@see GL45::getVertexArrayIndexediv} for each of the
     * attributes defined for a vertex array object:
     *
     *   {@see GL45::GL_VERTEX_ATTRIB_ARRAY_ENABLED}: $param returns a value that is non-zero (true) if the vertex
     * attribute array for index is enabled and 0 (false) if it is disabled. The initial value is
     * {@see GL45::GL_FALSE}.   {@see GL45::GL_VERTEX_ATTRIB_ARRAY_SIZE}: $param returns a single value, the size of
     * the vertex attribute array for index. The size is the number of values for each element of the vertex
     * attribute array, and it will be 1, 2, 3 or 4. The initial value is 4.
     * {@see GL45::GL_VERTEX_ATTRIB_ARRAY_STRIDE}: $param returns a single value, the array stride for (number of
     * bytes between successive elements in) the vertex attribute array for index. A value of 0 indicates the array
     * elements are stored sequentially in memory. The initial value is 0.
     * {@see GL45::GL_VERTEX_ATTRIB_ARRAY_TYPE}: $param returns a single value, a symbolic constant indicating the
     * array type for the vertex attribute array for index. Possible values are {@see GL45::GL_BYTE},
     * {@see GL45::GL_DOUBLE}, {@see GL45::GL_FIXED}, {@see GL45::GL_FLOAT}, {@see GL45::GL_HALF_FLOAT},
     * {@see GL45::GL_INT}, {@see GL45::GL_INT_2_10_10_10_REV}, {@see GL45::GL_SHORT}, {@see GL45::GL_UNSIGNED_BYTE},
     * {@see GL45::GL_UNSIGNED_SHORT}, {@see GL45::GL_UNSIGNED_INT}, {@see GL45::GL_UNSIGNED_INT_2_10_10_10_REV}, and
     * {@see GL45::GL_UNSIGNED_INT_10F_11F_11F_REV} . The initial value is {@see GL45::GL_FLOAT}.
     * {@see GL45::GL_VERTEX_ATTRIB_ARRAY_NORMALIZED}: $param returns a single value that is non-zero (true) if
     * fixed-point data types for the vertex attribute array indicated by index are normalized when they are
     * converted to floating-point, and 0 (false) otherwise. The initial value is {@see GL45::GL_FALSE}.
     * {@see GL45::GL_VERTEX_ATTRIB_ARRAY_INTEGER}: $param returns a single value that is non-zero (true) if
     * fixed-point data types for the vertex attribute array indicated by index have integer data type, and 0 (false)
     * otherwise. The initial value is 0 ({@see GL45::GL_FALSE}).   {@see GL45::GL_VERTEX_ATTRIB_ARRAY_LONG}: $param
     * returns a single value that is non-zero (true) if a vertex attribute is stored as an unconverted double, and 0
     * (false) otherwise. The initial value is 0 ({@see GL45::GL_FALSE}).
     * {@see GL45::GL_VERTEX_ATTRIB_ARRAY_DIVISOR}: $param returns a single value that is the frequency divisor used
     * for instanced rendering. See glVertexAttribDivisor. The initial value is 0.
     * {@see GL45::GL_VERTEX_ATTRIB_RELATIVE_OFFSET}: $param returns a single value that is the byte offset of the
     * first element relative to the start of the vertex buffer binding specified attribute fetches from. The initial
     * value is 0.  {@see GL45::getVertexArrayIndexed64iv} can be used to retrieve
     * {@see GL45::GL_VERTEX_BINDING_OFFSET} parameter value for any of the attributes defined for a vertex array
     * object. When $pname is set to {@see GL45::GL_VERTEX_BINDING_OFFSET}, $param returns a single value that is the
     * byte offset of the first element in the bound buffer's data store. The initial value for this parameter is 0.
     *
     * @see http://docs.gl/gl4/glGetVertexArrayIndexed
     * @since 4.5
     * @param int $vaobj
     * @param int $index
     * @param int $pname
     * @param int|null $param
     * @return void
     */
    public function getVertexArrayIndexed64iv(int $vaobj, int $index, int $pname, ?int &$param): void
    {
        $paramCType = $this->info->ffi->new('GLint64', false);
        try {
            $__proc = $this->proc('glGetVertexArrayIndexed64iv',
                'void (*)(GLuint vaobj, GLuint index, GLenum pname, GLint64 *param)');
            $__proc($vaobj, $index, $pname, \FFI::addr($paramCType));
        } finally {
            $param = $paramCType->cdata;
            \FFI::free($paramCType);
        }
    }

    /**
     * {@see GL45::getVertexArrayIndexediv} and {@see GL45::getVertexArrayIndexed64iv} provide a way of querying
     * parameters of an attribute at an user-specified index of a vertex array object. The vertex array object does
     * not have to be bound to the rendering context at the time of the call, but must have been bound at least once
     * prior to this call.
     *
     * The following parameter values can be retrieved with {@see GL45::getVertexArrayIndexediv} for each of the
     * attributes defined for a vertex array object:
     *
     *   {@see GL45::GL_VERTEX_ATTRIB_ARRAY_ENABLED}: $param returns a value that is non-zero (true) if the vertex
     * attribute array for index is enabled and 0 (false) if it is disabled. The initial value is
     * {@see GL45::GL_FALSE}.   {@see GL45::GL_VERTEX_ATTRIB_ARRAY_SIZE}: $param returns a single value, the size of
     * the vertex attribute array for index. The size is the number of values for each element of the vertex
     * attribute array, and it will be 1, 2, 3 or 4. The initial value is 4.
     * {@see GL45::GL_VERTEX_ATTRIB_ARRAY_STRIDE}: $param returns a single value, the array stride for (number of
     * bytes between successive elements in) the vertex attribute array for index. A value of 0 indicates the array
     * elements are stored sequentially in memory. The initial value is 0.
     * {@see GL45::GL_VERTEX_ATTRIB_ARRAY_TYPE}: $param returns a single value, a symbolic constant indicating the
     * array type for the vertex attribute array for index. Possible values are {@see GL45::GL_BYTE},
     * {@see GL45::GL_DOUBLE}, {@see GL45::GL_FIXED}, {@see GL45::GL_FLOAT}, {@see GL45::GL_HALF_FLOAT},
     * {@see GL45::GL_INT}, {@see GL45::GL_INT_2_10_10_10_REV}, {@see GL45::GL_SHORT}, {@see GL45::GL_UNSIGNED_BYTE},
     * {@see GL45::GL_UNSIGNED_SHORT}, {@see GL45::GL_UNSIGNED_INT}, {@see GL45::GL_UNSIGNED_INT_2_10_10_10_REV}, and
     * {@see GL45::GL_UNSIGNED_INT_10F_11F_11F_REV} . The initial value is {@see GL45::GL_FLOAT}.
     * {@see GL45::GL_VERTEX_ATTRIB_ARRAY_NORMALIZED}: $param returns a single value that is non-zero (true) if
     * fixed-point data types for the vertex attribute array indicated by index are normalized when they are
     * converted to floating-point, and 0 (false) otherwise. The initial value is {@see GL45::GL_FALSE}.
     * {@see GL45::GL_VERTEX_ATTRIB_ARRAY_INTEGER}: $param returns a single value that is non-zero (true) if
     * fixed-point data types for the vertex attribute array indicated by index have integer data type, and 0 (false)
     * otherwise. The initial value is 0 ({@see GL45::GL_FALSE}).   {@see GL45::GL_VERTEX_ATTRIB_ARRAY_LONG}: $param
     * returns a single value that is non-zero (true) if a vertex attribute is stored as an unconverted double, and 0
     * (false) otherwise. The initial value is 0 ({@see GL45::GL_FALSE}).
     * {@see GL45::GL_VERTEX_ATTRIB_ARRAY_DIVISOR}: $param returns a single value that is the frequency divisor used
     * for instanced rendering. See glVertexAttribDivisor. The initial value is 0.
     * {@see GL45::GL_VERTEX_ATTRIB_RELATIVE_OFFSET}: $param returns a single value that is the byte offset of the
     * first element relative to the start of the vertex buffer binding specified attribute fetches from. The initial
     * value is 0.  {@see GL45::getVertexArrayIndexed64iv} can be used to retrieve
     * {@see GL45::GL_VERTEX_BINDING_OFFSET} parameter value for any of the attributes defined for a vertex array
     * object. When $pname is set to {@see GL45::GL_VERTEX_BINDING_OFFSET}, $param returns a single value that is the
     * byte offset of the first element in the bound buffer's data store. The initial value for this parameter is 0.
     *
     * @see http://docs.gl/gl4/glGetVertexArrayIndexed
     * @since 4.5
     * @param int $vaobj
     * @param int $index
     * @param int $pname
     * @param int|null $param
     * @return void
     */
    public function getVertexArrayIndexediv(int $vaobj, int $index, int $pname, ?int &$param): void
    {
        $paramCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->proc('glGetVertexArrayIndexediv',
                'void (*)(GLuint vaobj, GLuint index, GLenum pname, GLint *param)');
            $__proc($vaobj, $index, $pname, \FFI::addr($paramCType));
        } finally {
            $param = $paramCType->cdata;
            \FFI::free($paramCType);
        }
    }

    /**
     * This function provides a mean of querying properties of an existing vertex array object. The vertex array
     * object does not have to be bound to the rendering context at the time of the call, but must have been bound at
     * least once prior to this call.
     *
     * {@see GL45::getVertexArrayiv} can be used to retrieve ID of a buffer object that will be bound to the
     * {@see GL45::GL_ELEMENT_ARRAY_BUFFER} binding point whenever the queried vertex array object is bound to the
     * rendering context. The binding can be changed for an active vertex array object with a
     * {@see GL45::bindBuffer} call.
     *
     * @see http://docs.gl/gl4/glGetVertexArrayiv
     * @since 4.5
     * @param int $vaobj
     * @param int $pname
     * @param int|null $param
     * @return void
     */
    public function getVertexArrayiv(int $vaobj, int $pname, ?int &$param): void
    {
        $paramCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->proc('glGetVertexArrayiv', 'void (*)(GLuint vaobj, GLenum pname, GLint *param)');
            $__proc($vaobj, $pname, \FFI::addr($paramCType));
        } finally {
            $param = $paramCType->cdata;
            \FFI::free($paramCType);
        }
    }

    /**
     * {@see GL45::getCompressedTexImage} and {@see GL45::getnCompressedTexImage} return the compressed texture
     * image associated with $target and $lod into $pixels. {@see GL45::getCompressedTextureImage} serves the same
     * purpose, but instead of taking a texture target, it takes the ID of the texture object. $pixels should be an
     * array of $bufSize bytes for {@see GL45::getnCompresedTexImage} and {@see GL45::getCompressedTextureImage}
     * functions, and of {@see GL45::GL_TEXTURE_COMPRESSED_IMAGE_SIZE} bytes in case of
     * {@see GL45::getCompressedTexImage}. If the actual data takes less space than $bufSize, the remaining bytes
     * will not be touched. $target specifies the texture target, to which the texture the data the function should
     * extract the data from is bound to. $lod specifies the level-of-detail number of the desired image.
     *
     * If a non-zero named buffer object is bound to the {@see GL45::GL_PIXEL_PACK_BUFFER} target (see
     * {@see GL45::bindBuffer}) while a texture image is requested, $pixels is treated as a byte offset into the
     * buffer object's data store.
     *
     * To minimize errors, first verify that the texture is compressed by calling {@see GL45::getTexLevelParameter}
     * with argument {@see GL45::GL_TEXTURE_COMPRESSED}. If the texture is compressed, you can determine the amount
     * of memory required to store the compressed texture by calling {@see GL45::getTexLevelParameter} with
     * argument {@see GL45::GL_TEXTURE_COMPRESSED_IMAGE_SIZE}. Finally, retrieve the internal format of the texture
     * by calling {@see GL45::getTexLevelParameter} with argument {@see GL45::GL_TEXTURE_INTERNAL_FORMAT}. To store
     * the texture for later use, associate the internal format and size with the retrieved texture image. These data
     * can be used by the respective texture or subtexture loading routine used for loading $target textures.
     *
     * @see http://docs.gl/gl2/glGetCompressedTexImage
     * @see http://docs.gl/gl4/glGetCompressedTexImage
     * @since 4.5
     * @param int $target
     * @param int $lod
     * @param int $bufSize
     * @param CData|null $pixels
     * @return void
     */
    public function getnCompressedTexImage(int $target, int $lod, int $bufSize, ?CData $pixels): void
    {
        $__proc = $this->proc('glGetnCompressedTexImage',
            'void (*)(GLenum target, GLint lod, GLsizei bufSize, void *pixels)');
        $__proc($target, $lod, $bufSize, $pixels);
    }

    /**
     * {@see GL45::getTexImage}, {@see GL45::getnTexImage} and {@see GL45::getTextureImage} functions return a
     * texture image into $pixels. For {@see GL45::getTexImage} and {@see GL45::getnTexImage}, $target specifies
     * whether the desired texture image is one specified by {@see GL45::texImage1D} ({@see GL45::GL_TEXTURE_1D}),
     * {@see GL45::texImage2D} ({@see GL45::GL_TEXTURE_1D_ARRAY}, {@see GL45::GL_TEXTURE_RECTANGLE},
     * {@see GL45::GL_TEXTURE_2D} or any of {@see GL45::GL_TEXTURE_CUBE_MAP_*}), or {@see GL45::texImage3D}
     * ({@see GL45::GL_TEXTURE_2D_ARRAY}, {@see GL45::GL_TEXTURE_3D}, {@see GL45::GL_TEXTURE_CUBE_MAP_ARRAY}). For
     * {@see GL45::getTextureImage}, $texture specifies the texture object name. In addition to types of textures
     * accepted by {@see GL45::getTexImage} and {@see GL45::getnTexImage}, the function also accepts cube map
     * texture objects (with effective target {@see GL45::GL_TEXTURE_CUBE_MAP}). $level specifies the level-of-detail
     * number of the desired image. $format and $type specify the format and type of the desired image array. See the
     * reference page for {@see GL45::texImage1D}  for a description of the acceptable values for the $format and
     * $type parameters, respectively. For glGetnTexImage and glGetTextureImage functions, bufSize tells the size of
     * the buffer to receive the retrieved pixel data. {@see GL45::getnTexImage} and {@see GL45::getTextureImage}
     * do not write more than $bufSize bytes into $pixels.
     *
     * If a non-zero named buffer object is bound to the {@see GL45::GL_PIXEL_PACK_BUFFER} target (see
     * {@see GL45::bindBuffer}) while a texture image is requested, $pixels is treated as a byte offset into the
     * buffer object's data store.
     *
     * To understand the operation of {@see GL45::getTexImage}, consider the selected internal four-component
     * texture image to be an RGBA color buffer the size of the image. The semantics of {@see GL45::getTexImage}
     * are then identical to those of {@see GL45::readPixels}, with the exception that no pixel transfer operations
     * are performed, when called with the same $format and $type, with x and y set to 0, width set to the width of
     * the texture image and height set to 1 for 1D images, or to the height of the texture image for 2D images.
     *
     * If the selected texture image does not contain four components, the following mappings are applied.
     * Single-component textures are treated as RGBA buffers with red set to the single-component value, green set to
     * 0, blue set to 0, and alpha set to 1. Two-component textures are treated as RGBA buffers with red set to the
     * value of component zero, alpha set to the value of component one, and green and blue set to 0. Finally,
     * three-component textures are treated as RGBA buffers with red set to component zero, green set to component
     * one, blue set to component two, and alpha set to 1.
     *
     * To determine the required size of $pixels, use {@see GL45::getTexLevelParameter} to determine the dimensions
     * of the internal texture image, then scale the required number of pixels by the storage required for each
     * pixel, based on $format and $type. Be sure to take the pixel storage parameters into account, especially
     * {@see GL45::GL_PACK_ALIGNMENT}.
     *
     * If {@see GL45::getTextureImage} is used against a cube map texture object, the texture is treated as a
     * three-dimensional image of a depth of 6, where the cube map faces are ordered as image layers, in an order
     * presented in the table below:
     *
     * | 0 | GL_TEXTURE_CUBE_MAP_POSITIVE_X |
     * | 1 | GL_TEXTURE_CUBE_MAP_NEGATIVE_X |
     * | 2 | GL_TEXTURE_CUBE_MAP_POSITIVE_Y |
     * | 3 | GL_TEXTURE_CUBE_MAP_NEGATIVE_Y |
     * | 4 | GL_TEXTURE_CUBE_MAP_POSITIVE_Z |
     * | 5 | GL_TEXTURE_CUBE_MAP_NEGATIVE_Z |
     *
     * @see http://docs.gl/gl2/glGetTexImage
     * @see http://docs.gl/gl4/glGetTexImage
     * @since 4.5
     * @param int $target
     * @param int $level
     * @param int $format
     * @param int $type
     * @param int $bufSize
     * @param CData|null $pixels
     * @return void
     */
    public function getnTexImage(
        int $target,
        int $level,
        int $format,
        int $type,
        int $bufSize,
        ?CData $pixels
    ): void {
        $__proc = $this->proc('glGetnTexImage',
            'void (*)(GLenum target, GLint level, GLenum format, GLenum type, GLsizei bufSize, void *pixels)');
        $__proc($target, $level, $format, $type, $bufSize, $pixels);
    }

    /**
     * {@see GL45::getUniform} and {@see GL45::getnUniform} return in $params the value(s) of the specified
     * uniform variable. The type of the uniform variable specified by $location determines the number of values
     * returned. If the uniform variable is defined in the shader as a boolean, int, or float, a single value will be
     * returned. If it is defined as a vec2, ivec2, or bvec2, two values will be returned. If it is defined as a
     * vec3, ivec3, or bvec3, three values will be returned, and so on. To query values stored in uniform variables
     * declared as arrays, call {@see GL45::getUniform} for each element of the array. To query values stored in
     * uniform variables declared as structures, call {@see GL45::getUniform} for each field in the structure. The
     * values for uniform variables declared as a matrix will be returned in column major order.
     *
     * The locations assigned to uniform variables are not known until the program object is linked. After linking
     * has occurred, the command {@see GL45::getUniformLocation} can be used to obtain the location of a uniform
     * variable. This location value can then be passed to {@see GL45::getUniform} or {@see GL45::getnUniform} in
     * order to query the current value of the uniform variable. After a program object has been linked successfully,
     * the index values for uniform variables remain fixed until the next link command occurs. The uniform variable
     * values can only be queried after a link if the link was successful.
     *
     * The only difference between {@see GL45::getUniform} and {@see GL45::getnUniform} is that
     * {@see GL45::getnUniform} will generate an error if size of the $params buffer,as described by $bufSize, is
     * not large enough to hold the result data.
     *
     * @see http://docs.gl/gl2/glGetUniform
     * @see http://docs.gl/gl4/glGetUniform
     * @since 4.5
     * @param int $program
     * @param int $location
     * @param int $bufSize
     * @param float|null $params
     * @return void
     */
    public function getnUniformdv(int $program, int $location, int $bufSize, ?float &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLdouble', false);
        try {
            $__proc = $this->proc('glGetnUniformdv',
                'void (*)(GLuint program, GLint location, GLsizei bufSize, GLdouble *params)');
            $__proc($program, $location, $bufSize, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL45::getUniform} and {@see GL45::getnUniform} return in $params the value(s) of the specified
     * uniform variable. The type of the uniform variable specified by $location determines the number of values
     * returned. If the uniform variable is defined in the shader as a boolean, int, or float, a single value will be
     * returned. If it is defined as a vec2, ivec2, or bvec2, two values will be returned. If it is defined as a
     * vec3, ivec3, or bvec3, three values will be returned, and so on. To query values stored in uniform variables
     * declared as arrays, call {@see GL45::getUniform} for each element of the array. To query values stored in
     * uniform variables declared as structures, call {@see GL45::getUniform} for each field in the structure. The
     * values for uniform variables declared as a matrix will be returned in column major order.
     *
     * The locations assigned to uniform variables are not known until the program object is linked. After linking
     * has occurred, the command {@see GL45::getUniformLocation} can be used to obtain the location of a uniform
     * variable. This location value can then be passed to {@see GL45::getUniform} or {@see GL45::getnUniform} in
     * order to query the current value of the uniform variable. After a program object has been linked successfully,
     * the index values for uniform variables remain fixed until the next link command occurs. The uniform variable
     * values can only be queried after a link if the link was successful.
     *
     * The only difference between {@see GL45::getUniform} and {@see GL45::getnUniform} is that
     * {@see GL45::getnUniform} will generate an error if size of the $params buffer,as described by $bufSize, is
     * not large enough to hold the result data.
     *
     * @see http://docs.gl/gl2/glGetUniform
     * @see http://docs.gl/gl4/glGetUniform
     * @since 4.5
     * @param int $program
     * @param int $location
     * @param int $bufSize
     * @param float|null $params
     * @return void
     */
    public function getnUniformfv(int $program, int $location, int $bufSize, ?float &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLfloat', false);
        try {
            $__proc = $this->proc('glGetnUniformfv',
                'void (*)(GLuint program, GLint location, GLsizei bufSize, GLfloat *params)');
            $__proc($program, $location, $bufSize, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL45::getUniform} and {@see GL45::getnUniform} return in $params the value(s) of the specified
     * uniform variable. The type of the uniform variable specified by $location determines the number of values
     * returned. If the uniform variable is defined in the shader as a boolean, int, or float, a single value will be
     * returned. If it is defined as a vec2, ivec2, or bvec2, two values will be returned. If it is defined as a
     * vec3, ivec3, or bvec3, three values will be returned, and so on. To query values stored in uniform variables
     * declared as arrays, call {@see GL45::getUniform} for each element of the array. To query values stored in
     * uniform variables declared as structures, call {@see GL45::getUniform} for each field in the structure. The
     * values for uniform variables declared as a matrix will be returned in column major order.
     *
     * The locations assigned to uniform variables are not known until the program object is linked. After linking
     * has occurred, the command {@see GL45::getUniformLocation} can be used to obtain the location of a uniform
     * variable. This location value can then be passed to {@see GL45::getUniform} or {@see GL45::getnUniform} in
     * order to query the current value of the uniform variable. After a program object has been linked successfully,
     * the index values for uniform variables remain fixed until the next link command occurs. The uniform variable
     * values can only be queried after a link if the link was successful.
     *
     * The only difference between {@see GL45::getUniform} and {@see GL45::getnUniform} is that
     * {@see GL45::getnUniform} will generate an error if size of the $params buffer,as described by $bufSize, is
     * not large enough to hold the result data.
     *
     * @see http://docs.gl/gl2/glGetUniform
     * @see http://docs.gl/gl4/glGetUniform
     * @since 4.5
     * @param int $program
     * @param int $location
     * @param int $bufSize
     * @param int|null $params
     * @return void
     */
    public function getnUniformiv(int $program, int $location, int $bufSize, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->proc('glGetnUniformiv',
                'void (*)(GLuint program, GLint location, GLsizei bufSize, GLint *params)');
            $__proc($program, $location, $bufSize, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL45::getUniform} and {@see GL45::getnUniform} return in $params the value(s) of the specified
     * uniform variable. The type of the uniform variable specified by $location determines the number of values
     * returned. If the uniform variable is defined in the shader as a boolean, int, or float, a single value will be
     * returned. If it is defined as a vec2, ivec2, or bvec2, two values will be returned. If it is defined as a
     * vec3, ivec3, or bvec3, three values will be returned, and so on. To query values stored in uniform variables
     * declared as arrays, call {@see GL45::getUniform} for each element of the array. To query values stored in
     * uniform variables declared as structures, call {@see GL45::getUniform} for each field in the structure. The
     * values for uniform variables declared as a matrix will be returned in column major order.
     *
     * The locations assigned to uniform variables are not known until the program object is linked. After linking
     * has occurred, the command {@see GL45::getUniformLocation} can be used to obtain the location of a uniform
     * variable. This location value can then be passed to {@see GL45::getUniform} or {@see GL45::getnUniform} in
     * order to query the current value of the uniform variable. After a program object has been linked successfully,
     * the index values for uniform variables remain fixed until the next link command occurs. The uniform variable
     * values can only be queried after a link if the link was successful.
     *
     * The only difference between {@see GL45::getUniform} and {@see GL45::getnUniform} is that
     * {@see GL45::getnUniform} will generate an error if size of the $params buffer,as described by $bufSize, is
     * not large enough to hold the result data.
     *
     * @see http://docs.gl/gl2/glGetUniform
     * @see http://docs.gl/gl4/glGetUniform
     * @since 4.5
     * @param int $program
     * @param int $location
     * @param int $bufSize
     * @param int|null $params
     * @return void
     */
    public function getnUniformuiv(int $program, int $location, int $bufSize, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLuint', false);
        try {
            $__proc = $this->proc('glGetnUniformuiv',
                'void (*)(GLuint program, GLint location, GLsizei bufSize, GLuint *params)');
            $__proc($program, $location, $bufSize, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL45::invalidateSubFramebuffer} and {@see GL45::invalidateNamedFramebufferSubData} invalidate the
     * contents of a specified region of a specified set of attachments of a framebuffer.
     *
     * For {@see GL45::invalidateSubFramebuffer}, the framebuffer object is that bound to $target, which must be
     * one of {@see GL45::GL_FRAMEBUFFER}, {@see GL45::GL_READ_FRAMEBUFFER} or {@see GL45::GL_DRAW_FRAMEBUFFER}.
     * {@see GL45::GL_FRAMEBUFFER} is equivalent to {@see GL45::GL_DRAW_FRAMEBUFFER}. Default framebuffers may also
     * be invalidated if bound to $target.
     *
     * For {@see GL45::invalidateNamedFramebufferSubData}, $framebuffer is the name of the framebuffer object. If
     * $framebuffer is zero, the default draw framebuffer is affected.
     *
     * The set of attachments of which a region is to be invalidated are specified in the $attachments array, which
     * contains $numAttachments elements.
     *
     * If the specified framebuffer is a framebuffer object, each element of $attachments must be one of
     * {@see GL45::GL_DEPTH_ATTACHMENT}, {@see GL45::GL_STENCIL_ATTACHMENT} {@see GL45::GL_DEPTH_STENCIL_ATTACHMENT},
     * or {@see GL45::GL_COLOR_ATTACHMENT}i, where i is between zero and the value of
     * {@see GL45::GL_MAX_FRAMEBUFFER_ATTACHMENTS} minus one.
     *
     * If the specified framebuffer is a default framebuffer, each element of $attachments must be one of
     * {@see GL45::GL_FRONT_LEFT}, {@see GL45::GL_FRONT_RIGHT}, {@see GL45::GL_BACK_LEFT},
     * {@see GL45::GL_BACK_RIGHT}, {@see GL45::GL_AUX}i, {@see GL45::GL_ACCUM}, {@see GL45::GL_COLOR},
     * {@see GL45::GL_DEPTH}, or {@see GL45::GL_STENCIL}. {@see GL45::GL_COLOR}, is treated as
     * {@see GL45::GL_BACK_LEFT} for a double-buffered context and {@see GL45::GL_FRONT_LEFT} for a single-buffered
     * context. The other attachments identify the corresponding specific buffer.
     *
     * The contents of the specified region of each specified attachment become undefined after execution of
     * {@see GL45::invalidateSubFramebuffer} or {@see GL45::invalidateNamedFramebufferSubData}. The region to be
     * invalidated is specified by $x, $y, $width and $height where $x and $y give the offset from the origin (with
     * lower-left corner at $(0,0)$) and $width and $height are the width and height, respectively, of the region.
     * Any pixels lying outside of the window allocated to the current GL context (for the default framebuffer), or
     * outside of the attachments of the framebuffer object, are ignored. If the framebuffer object is not complete,
     * these commands may be ignored.
     *
     * If the framebuffer object is not complete, {@see GL45::invalidateSubFramebuffer} and
     * {@see GL45::invalidateNamedFramebufferSubData} may be ignored. This is not an error.
     *
     * @see http://docs.gl/gl4/glInvalidateFramebuffer
     * @see http://docs.gl/gl4/glInvalidateSubFramebuffer
     * @since 4.5
     * @param int $framebuffer
     * @param int $numAttachments
     * @param CData|null $attachments
     * @return void
     */
    public function invalidateNamedFramebufferData(
        int $framebuffer,
        int $numAttachments,
        ?CData $attachments
    ): void {
        $__proc = $this->proc('glInvalidateNamedFramebufferData',
            'void (*)(GLuint framebuffer, GLsizei numAttachments, const GLenum *attachments)');
        $__proc($framebuffer, $numAttachments, $attachments);
    }

    /**
     * {@see GL45::invalidateBufferSubData} invalidates all or part of the content of the data store of a buffer
     * object. After invalidation, the content of the specified range of the buffer's data store becomes undefined.
     * The start of the range is given by $offset and its size is given by $length, both measured in basic machine
     * units.
     *
     * @see http://docs.gl/gl4/glInvalidateBufferSubData
     * @since 4.5
     * @param int $framebuffer
     * @param int $numAttachments
     * @param CData|null $attachments
     * @param int $x
     * @param int $y
     * @param int $width
     * @param int $height
     * @return void
     */
    public function invalidateNamedFramebufferSubData(
        int $framebuffer,
        int $numAttachments,
        ?CData $attachments,
        int $x,
        int $y,
        int $width,
        int $height
    ): void {
        $__proc = $this->proc('glInvalidateNamedFramebufferSubData',
            'void (*)(GLuint framebuffer, GLsizei numAttachments, const GLenum *attachments, GLint x, GLint y, GLsizei width, GLsizei height)');
        $__proc($framebuffer, $numAttachments, $attachments, $x, $y, $width, $height);
    }

    /**
     * {@see GL45::mapBuffer} and {@see GL45::mapNamedBuffer} map the entire data store of a specified buffer
     * object into the client's address space. The data can then be directly read and/or written relative to the
     * returned pointer, depending on the specified $access policy.
     *
     * A pointer to the beginning of the mapped range is returned once all pending operations on that buffer object
     * have completed, and may be used to modify and/or query the corresponding range of the data store according to
     * the value of $access:    {@see GL45::GL_READ_ONLY} indicates that the returned pointer may be used to read
     * buffer object data.     {@see GL45::GL_WRITE_ONLY} indicates that the returned pointer may be used to modify
     * buffer object data.     {@see GL45::GL_READ_WRITE} indicates that the returned pointer may be used to read and
     * to modify buffer object data.
     *
     * If an error is generated, a `NULL` pointer is returned.
     *
     * If no error occurs, the returned pointer will reflect an allocation aligned to the value of
     * {@see GL45::GL_MIN_MAP_BUFFER_ALIGNMENT} basic machine units.
     *
     * The returned pointer values may not be passed as parameter values to GL commands. For example, they may not be
     * used to specify array pointers, or to specify or query pixel or texture image data; such actions produce
     * undefined results, although implementations may not check for such behavior for performance reasons.
     *
     * No GL error is generated if the returned pointer is accessed in a way inconsistent with $access (e.g. used to
     * read from a mapping made with $access {@see GL45::GL_WRITE_ONLY} or write to a mapping made with $access
     * {@see GL45::GL_READ_ONLY}), but the result is undefined and system errors (possibly including program
     * termination) may occur.
     *
     * Mappings to the data stores of buffer objects may have nonstandard performance characteristics. For example,
     * such mappings may be marked as uncacheable regions of memory, and in such cases reading from them may be very
     * slow. To ensure optimal performance, the client should use the mapping in a fashion consistent with the values
     * of {@see GL45::GL_BUFFER_USAGE} for the buffer object and of $access. Using a mapping in a fashion
     * inconsistent with these values is liable to be multiple orders of magnitude slower than using normal memory.
     *
     * @see http://docs.gl/gl2/glMapBuffer
     * @see http://docs.gl/gl4/glMapBuffer
     * @since 4.5
     * @param int $buffer
     * @param int $access
     * @return CData
     */
    public function mapNamedBuffer(int $buffer, int $access): CData
    {
        $__proc = $this->proc('glMapNamedBuffer', 'void * (*)(GLuint buffer, GLenum access)');

        return $__proc($buffer, $access);
    }

    /**
     * {@see GL45::mapBufferRange} and {@see GL45::mapNamedBufferRange} map all or part of the data store of a
     * specified buffer object into the client's address space. $offset and $length indicate the range of data in the
     * buffer object that is to be mapped, in terms of basic machine units. $access is a bitfield containing flags
     * which describe the requested mapping. These flags are described below.
     *
     * A pointer to the beginning of the mapped range is returned once all pending operations on the buffer object
     * have completed, and may be used to modify and/or query the corresponding range of the data store according to
     * the following flag bits set in $access:    {@see GL45::GL_MAP_READ_BIT} indicates that the returned pointer
     * may be used to read buffer object data. No GL error is generated if the pointer is used to query a mapping
     * which excludes this flag, but the result is undefined and system errors (possibly including program
     * termination) may occur.     {@see GL45::GL_MAP_WRITE_BIT} indicates that the returned pointer may be used to
     * modify buffer object data. No GL error is generated if the pointer is used to modify a mapping which excludes
     * this flag, but the result is undefined and system errors (possibly including program termination) may occur.
     *   {@see GL45::GL_MAP_PERSISTENT_BIT} indicates that the mapping is to be made in a persistent fassion and that
     * the client intends to hold and use the returned pointer during subsequent GL operation. It is not an error to
     * call drawing commands (render) while buffers are mapped using this flag. It is an error to specify this flag
     * if the buffer's data store was not allocated through a call to the {@see GL45::bufferStorage} command in
     * which the {@see GL45::GL_MAP_PERSISTENT_BIT} was also set.     {@see GL45::GL_MAP_COHERENT_BIT} indicates that
     * a persistent mapping is also to be coherent. Coherent maps guarantee that the effect of writes to a buffer's
     * data store by either the client or server will eventually become visible to the other without further
     * intervention from the application. In the absence of this bit, persistent mappings are not coherent and
     * modified ranges of the buffer store must be explicitly communicated to the GL, either by unmapping the buffer,
     * or through a call to {@see GL45::flushMappedBufferRange} or {@see GL45::memoryBarrier}.
     *
     * The following optional flag bits in $access may be used to modify the mapping:
     * {@see GL45::GL_MAP_INVALIDATE_RANGE_BIT} indicates that the previous contents of the specified range may be
     * discarded. Data within this range are undefined with the exception of subsequently written data. No GL error
     * is generated if subsequent GL operations access unwritten data, but the result is undefined and system errors
     * (possibly including program termination) may occur. This flag may not be used in combination with
     * {@see GL45::GL_MAP_READ_BIT}.     {@see GL45::GL_MAP_INVALIDATE_BUFFER_BIT} indicates that the previous
     * contents of the entire buffer may be discarded. Data within the entire buffer are undefined with the exception
     * of subsequently written data. No GL error is generated if subsequent GL operations access unwritten data, but
     * the result is undefined and system errors (possibly including program termination) may occur. This flag may
     * not be used in combination with {@see GL45::GL_MAP_READ_BIT}.     {@see GL45::GL_MAP_FLUSH_EXPLICIT_BIT}
     * indicates that one or more discrete subranges of the mapping may be modified. When this flag is set,
     * modifications to each subrange must be explicitly flushed by calling {@see GL45::flushMappedBufferRange}. No
     * GL error is set if a subrange of the mapping is modified and not flushed, but data within the corresponding
     * subrange of the buffer are undefined. This flag may only be used in conjunction with
     * {@see GL45::GL_MAP_WRITE_BIT}. When this option is selected, flushing is strictly limited to regions that are
     * explicitly indicated with calls to {@see GL45::flushMappedBufferRange} prior to unmap; if this option is not
     * selected {@see GL45::unmapBuffer} will automatically flush the entire mapped range when called.
     * {@see GL45::GL_MAP_UNSYNCHRONIZED_BIT} indicates that the GL should not attempt to synchronize pending
     * operations on the buffer prior to returning from {@see GL45::mapBufferRange} or
     * {@see GL45::mapNamedBufferRange}. No GL error is generated if pending operations which source or modify the
     * buffer overlap the mapped region, but the result of such previous and any subsequent operations is undefined.
     *
     * If an error occurs, a `NULL` pointer is returned.
     *
     * If no error occurs, the returned pointer will reflect an allocation aligned to the value of
     * {@see GL45::GL_MIN_MAP_BUFFER_ALIGNMENT} basic machine units. Subtracting $offset from this returned pointer
     * will always produce a multiple of the value of {@see GL45::GL_MIN_MAP_BUFFER_ALIGNMENT}.
     *
     * The returned pointer values may not be passed as parameter values to GL commands. For example, they may not be
     * used to specify array pointers, or to specify or query pixel or texture image data; such actions produce
     * undefined results, although implementations may not check for such behavior for performance reasons.
     *
     * Mappings to the data stores of buffer objects may have nonstandard performance characteristics. For example,
     * such mappings may be marked as uncacheable regions of memory, and in such cases reading from them may be very
     * slow. To ensure optimal performance, the client should use the mapping in a fashion consistent with the values
     * of {@see GL45::GL_BUFFER_USAGE} for the buffer object and of $access. Using a mapping in a fashion
     * inconsistent with these values is liable to be multiple orders of magnitude slower than using normal memory.
     *
     * @see http://docs.gl/gl4/glMapBufferRange
     * @since 4.5
     * @param int $buffer
     * @param int $offset
     * @param int $length
     * @param int $access
     * @return CData
     */
    public function mapNamedBufferRange(int $buffer, int $offset, int $length, int $access): CData
    {
        $__proc = $this->proc('glMapNamedBufferRange',
            'void * (*)(GLuint buffer, GLintptr offset, GLsizeiptr length, GLbitfield access)');

        return $__proc($buffer, $offset, $length, $access);
    }

    /**
     * {@see GL45::memoryBarrier} defines a barrier ordering the memory transactions issued prior to the command
     * relative to those issued after the barrier. For the purposes of this ordering, memory transactions performed
     * by shaders are considered to be issued by the rendering command that triggered the execution of the shader.
     * $barriers is a bitfield indicating the set of operations that are synchronized with shader stores; the bits
     * used in $barriers are as follows:
     *
     *   {@see GL45::GL_VERTEX_ATTRIB_ARRAY_BARRIER_BIT}   If set, vertex data sourced from buffer objects after the
     * barrier will reflect data written by shaders prior to the barrier. The set of buffer objects affected by this
     * bit is derived from the buffer object bindings used for generic vertex attributes derived from the
     * {@see GL45::GL_VERTEX_ATTRIB_ARRAY_BUFFER} bindings.     {@see GL45::GL_ELEMENT_ARRAY_BARRIER_BIT}   If set,
     * vertex array indices sourced from buffer objects after the barrier will reflect data written by shaders prior
     * to the barrier. The buffer objects affected by this bit are derived from the
     * {@see GL45::GL_ELEMENT_ARRAY_BUFFER} binding.     {@see GL45::GL_UNIFORM_BARRIER_BIT}   Shader uniforms
     * sourced from buffer objects after the barrier will reflect data written by shaders prior to the barrier.
     * {@see GL45::GL_TEXTURE_FETCH_BARRIER_BIT}   Texture fetches from shaders, including fetches from buffer object
     * memory via buffer textures, after the barrier will reflect data written by shaders prior to the barrier.
     * {@see GL45::GL_SHADER_IMAGE_ACCESS_BARRIER_BIT}   Memory accesses using shader image load, store, and atomic
     * built-in functions issued after the barrier will reflect data written by shaders prior to the barrier.
     * Additionally, image stores and atomics issued after the barrier will not execute until all memory accesses
     * (e.g., loads, stores, texture fetches, vertex fetches) initiated prior to the barrier complete.
     * {@see GL45::GL_COMMAND_BARRIER_BIT}   Command data sourced from buffer objects by Draw*Indirect commands after
     * the barrier will reflect data written by shaders prior to the barrier. The buffer objects affected by this bit
     * are derived from the {@see GL45::GL_DRAW_INDIRECT_BUFFER} binding.
     * {@see GL45::GL_PIXEL_BUFFER_BARRIER_BIT}   Reads and writes of buffer objects via the
     * {@see GL45::GL_PIXEL_PACK_BUFFER} and {@see GL45::GL_PIXEL_UNPACK_BUFFER} bindings (via
     * {@see GL45::readPixels}, {@see GL45::texSubImage1D}, etc.) after the barrier will reflect data written by
     * shaders prior to the barrier. Additionally, buffer object writes issued after the barrier will wait on the
     * completion of all shader writes initiated prior to the barrier.     {@see GL45::GL_TEXTURE_UPDATE_BARRIER_BIT}
     *   Writes to a texture via {@see GL45::tex(Sub)Image*}, {@see GL45::copyTex(Sub)Image*},
     * {@see GL45::compressedTex(Sub)Image*}, and reads via {@see GL45::getTexImage} after the barrier will
     * reflect data written by shaders prior to the barrier. Additionally, texture writes from these commands issued
     * after the barrier will not execute until all shader writes initiated prior to the barrier complete.
     * {@see GL45::GL_BUFFER_UPDATE_BARRIER_BIT}   Reads or writes via {@see GL45::bufferSubData},
     * {@see GL45::copyBufferSubData}, or {@see GL45::getBufferSubData}, or to buffer object memory mapped by
     * {@see GL45::mapBuffer} or {@see GL45::mapBufferRange} after the barrier will reflect data written by
     * shaders prior to the barrier. Additionally, writes via these commands issued after the barrier will wait on
     * the completion of any shader writes to the same memory initiated prior to the barrier.
     * {@see GL45::GL_FRAMEBUFFER_BARRIER_BIT}   Reads and writes via framebuffer object attachments after the
     * barrier will reflect data written by shaders prior to the barrier. Additionally, framebuffer writes issued
     * after the barrier will wait on the completion of all shader writes issued prior to the barrier.
     * {@see GL45::GL_TRANSFORM_FEEDBACK_BARRIER_BIT}   Writes via transform feedback bindings after the barrier will
     * reflect data written by shaders prior to the barrier. Additionally, transform feedback writes issued after the
     * barrier will wait on the completion of all shader writes issued prior to the barrier.
     * {@see GL45::GL_ATOMIC_COUNTER_BARRIER_BIT}   Accesses to atomic counters after the barrier will reflect writes
     * prior to the barrier.     {@see GL45::GL_SHADER_STORAGE_BARRIER_BIT}   Accesses to shader storage blocks after
     * the barrier will reflect writes prior to the barrier.     {@see GL45::GL_QUERY_BUFFER_BARRIER_BIT}   Writes of
     * buffer objects via the {@see GL45::GL_QUERY_BUFFER} binding after the barrier will reflect data written by
     * shaders prior to the barrier. Additionally, buffer object writes issued after the barrier will wait on the
     * completion of all shader writes initiated prior to the barrier.
     *
     * If $barriers is {@see GL45::GL_ALL_BARRIER_BITS}, shader memory accesses will be synchronized relative to all
     * the operations described above.
     *
     * Implementations may cache buffer object and texture image memory that could be written by shaders in multiple
     * caches; for example, there may be separate caches for texture, vertex fetching, and one or more caches for
     * shader memory accesses. Implementations are not required to keep these caches coherent with shader memory
     * writes. Stores issued by one invocation may not be immediately observable by other pipeline stages or other
     * shader invocations because the value stored may remain in a cache local to the processor executing the store,
     * or because data overwritten by the store is still in a cache elsewhere in the system. When
     * {@see GL45::memoryBarrier} is called, the GL flushes and/or invalidates any caches relevant to the
     * operations specified by the $barriers parameter to ensure consistent ordering of operations across the
     * barrier.
     *
     * To allow for independent shader invocations to communicate by reads and writes to a common memory address,
     * image variables in the OpenGL Shading Language may be declared as "coherent". Buffer object or texture image
     * memory accessed through such variables may be cached only if caches are automatically updated due to stores
     * issued by any other shader invocation. If the same address is accessed using both coherent and non-coherent
     * variables, the accesses using variables declared as coherent will observe the results stored using coherent
     * variables in other invocations. Using variables declared as "coherent" guarantees only that the results of
     * stores will be immediately visible to shader invocations using similarly-declared variables; calling
     * {@see GL45::memoryBarrier} is required to ensure that the stores are visible to other operations.
     *
     * The following guidelines may be helpful in choosing when to use coherent memory accesses and when to use
     * barriers.
     *
     *    Data that are read-only or constant may be accessed without using coherent variables or calling
     * {@see GL46::MemoryBarrier}(). Updates to the read-only data via API calls such as {@see GL45::bufferSubData}
     * will invalidate shader caches implicitly as required.     Data that are shared between shader invocations at a
     * fine granularity (e.g., written by one invocation, consumed by another invocation) should use coherent
     * variables to read and write the shared data.     Data written by one shader invocation and consumed by other
     * shader invocations launched as a result of its execution ("dependent invocations") should use coherent
     * variables in the producing shader invocation and call {@see GL46::memoryBarrier}() after the last write. The
     * consuming shader invocation should also use coherent variables.     Data written to image variables in one
     * rendering pass and read by the shader in a later pass need not use coherent variables or memoryBarrier().
     * Calling {@see GL45::memoryBarrier} with the SHADER_IMAGE_ACCESS_BARRIER_BIT set in $barriers between passes
     * is necessary.     Data written by the shader in one rendering pass and read by another mechanism (e.g., vertex
     * or index buffer pulling) in a later pass need not use coherent variables or {@see GL46::memoryBarrier}().
     * Calling {@see GL45::memoryBarrier} with the appropriate bits set in $barriers between passes is necessary.
     *
     * @see http://docs.gl/gl4/glMemoryBarrier
     * @since 4.5
     * @param int $barriers
     * @return void
     */
    public function memoryBarrierByRegion(int $barriers): void
    {
        $__proc = $this->proc('glMemoryBarrierByRegion', 'void (*)(GLbitfield barriers)');
        $__proc($barriers);
    }

    /**
     * {@see GL45::clearBufferData} and {@see GL45::clearNamedBufferData} fill the entirety of a buffer object's
     * data store with data from client memory.
     *
     * Data, initially supplied in a format specified by $format in data type $type is read from the memory address
     * given by $data and converted into the internal representation given by $internalformat, which must be one of
     * the following sized internal formats:
     *
     * | {@see GL45::GL_R8}       | ubyte  | 1 | YES | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R16}      | ushort | 1 | YES | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R16F}     | half   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R32F}     | float  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R8I}      | byte   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R16I}     | short  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R32I}     | int    | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R8UI}     | ubyte  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R16UI}    | ushort | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R32UI}    | uint   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL45::GL_RG8}      | ubyte  | 2 | YES | R | G | 0 | 1 |
     * | {@see GL45::GL_RG16}     | ushort | 2 | YES | R | G | 0 | 1 |
     * | {@see GL45::GL_RG16F}    | half   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL45::GL_RG32F}    | float  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL45::GL_RG8I}     | byte   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL45::GL_RG16I}    | short  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL45::GL_RG32I}    | int    | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL45::GL_RG8UI}    | ubyte  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL45::GL_RG16UI}   | ushort | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL45::GL_RG32UI}   | uint   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL45::GL_RGB32F}   | float  | 3 | NO  | R | G | B | 1 |
     * | {@see GL45::GL_RGB32I}   | int    | 3 | NO  | R | G | B | 1 |
     * | {@see GL45::GL_RGB32UI}  | uint   | 3 | NO  | R | G | B | 1 |
     * | {@see GL45::GL_RGBA8}    | uint   | 4 | YES | R | G | B | A |
     * | {@see GL45::GL_RGBA16}   | short  | 4 | YES | R | G | B | A |
     * | {@see GL45::GL_RGBA16F}  | half   | 4 | NO  | R | G | B | A |
     * | {@see GL45::GL_RGBA32F}  | float  | 4 | NO  | R | G | B | A |
     * | {@see GL45::GL_RGBA8I}   | byte   | 4 | NO  | R | G | B | A |
     * | {@see GL45::GL_RGBA16I}  | short  | 4 | NO  | R | G | B | A |
     * | {@see GL45::GL_RGBA32I}  | int    | 4 | NO  | R | G | B | A |
     * | {@see GL45::GL_RGBA8UI}  | ubyte  | 4 | NO  | R | G | B | A |
     * | {@see GL45::GL_RGBA16UI} | ushort | 4 | NO  | R | G | B | A |
     * | {@see GL45::GL_RGBA32UI} | uint   | 4 | NO  | R | G | B | A |
     *
     * This converted data is then replicated throughout the buffer object's data store. If $data is NULL, then the
     * buffer's data store is filled with zeros.
     *
     * @see http://docs.gl/gl2/glBufferData
     * @see http://docs.gl/gl4/glBufferData
     * @see http://docs.gl/gl4/glClearBufferData
     * @since 4.5
     * @param int $buffer
     * @param int $size
     * @param CData|null $data
     * @param int $usage
     * @return void
     */
    public function namedBufferData(int $buffer, int $size, ?CData $data, int $usage): void
    {
        $__proc = $this->proc('glNamedBufferData',
            'void (*)(GLuint buffer, GLsizeiptr size, const void *data, GLenum usage)');
        $__proc($buffer, $size, $data, $usage);
    }

    /**
     * {@see GL45::bufferStorage} and {@see GL45::namedBufferStorage} create a new immutable data store. For
     * {@see GL45::bufferStorage}, the buffer object currently bound to $target will be initialized. For
     * {@see GL45::namedBufferStorage}, $buffer is the name of the buffer object that will be configured. The size
     * of the data store is specified by $size. If an initial data is available, its address may be supplied in
     * $data. Otherwise, to create an uninitialized data store, $data should be {@see GL46::NULL}.
     *
     * The $flags parameters specifies the intended usage of the buffer's data store. It must be a bitwise
     * combination of a subset of the following flags:   {@see GL45::GL_DYNAMIC_STORAGE_BIT}  The contents of the
     * data store may be updated after creation through calls to {@see GL45::bufferSubData}. If this bit is not
     * set, the buffer content may not be directly updated by the client. The data argument may be used to specify
     * the initial content of the buffer's data store regardless of the presence of the
     * {@see GL45::GL_DYNAMIC_STORAGE_BIT}. Regardless of the presence of this bit, buffers may always be updated
     * with server-side calls such as {@see GL45::copyBufferSubData} and {@see GL45::clearBufferSubData}.
     * {@see GL45::GL_MAP_READ_BIT}  The data store may be mapped by the client for read access and a pointer in the
     * client's address space obtained that may be read from.    {@see GL45::GL_MAP_WRITE_BIT}  The data store may be
     * mapped by the client for write access and a pointer in the client's address space obtained that may be written
     * through.    {@see GL45::GL_MAP_PERSISTENT_BIT}  The client may request that the server read from or write to
     * the buffer while it is mapped. The client's pointer to the data store remains valid so long as the data store
     * is mapped, even during execution of drawing or dispatch commands.    {@see GL45::GL_MAP_COHERENT_BIT}  Shared
     * access to buffers that are simultaneously mapped for client access and are used by the server will be
     * coherent, so long as that mapping is performed using {@see GL45::mapBufferRange}. That is, data written to
     * the store by either the client or server will be immediately visible to the other with no further action taken
     * by the application. In particular,   If {@see GL45::GL_MAP_COHERENT_BIT} is not set and the client performs a
     * write followed by a call to the {@see GL45::memoryBarrier} command with the
     * {@see GL45::GL_CLIENT_MAPPED_BUFFER_BARRIER_BIT} set, then in subsequent commands the server will see the
     * writes.   If {@see GL45::GL_MAP_COHERENT_BIT} is set and the client performs a write, then in subsequent
     * commands the server will see the writes.   If {@see GL45::GL_MAP_COHERENT_BIT} is not set and the server
     * performs a write, the application must call {@see GL45::memoryBarrier} with the
     * {@see GL45::GL_CLIENT_MAPPED_BUFFER_BARRIER_BIT} set and then call {@see GL45::fenceSync} with
     * {@see GL45::GL_SYNC_GPU_COMMANDS_COMPLETE} (or {@see GL45::finish}). Then the CPU will see the writes after
     * the sync is complete.   If {@see GL45::GL_MAP_COHERENT_BIT} is set and the server does a write, the app must
     * call {@see GL45::fenceSync} with {@see GL45::GL_SYNC_GPU_COMMANDS_COMPLETE} (or {@see GL45::finish}). Then
     * the CPU will see the writes after the sync is complete.      {@see GL45::GL_CLIENT_STORAGE_BIT}  When all
     * other criteria for the buffer storage allocation are met, this bit may be used by an implementation to
     * determine whether to use storage that is local to the server or to the client to serve as the backing store
     * for the buffer.
     *
     * The allowed combinations of flags are subject to certain restrictions. They are as follows:   If $flags
     * contains {@see GL45::GL_MAP_PERSISTENT_BIT}, it must also contain at least one of {@see GL45::GL_MAP_READ_BIT}
     * or {@see GL45::GL_MAP_WRITE_BIT}.   If $flags contains {@see GL45::GL_MAP_COHERENT_BIT}, it must also contain
     * {@see GL45::GL_MAP_PERSISTENT_BIT}.
     *
     * @see http://docs.gl/gl4/glBufferStorage
     * @since 4.5
     * @param int $buffer
     * @param int $size
     * @param CData|null $data
     * @param int $flags
     * @return void
     */
    public function namedBufferStorage(int $buffer, int $size, ?CData $data, int $flags): void
    {
        $__proc = $this->proc('glNamedBufferStorage',
            'void (*)(GLuint buffer, GLsizeiptr size, const void *data, GLbitfield flags)');
        $__proc($buffer, $size, $data, $flags);
    }

    /**
     * {@see GL45::getBufferSubData} and {@see GL45::getNamedBufferSubData} return some or all of the data
     * contents of the data store of the specified buffer object. Data starting at byte offset $offset and extending
     * for $size bytes is copied from the buffer object's data store to the memory pointed to by $data. An error is
     * thrown if the buffer object is currently mapped, or if $offset and $size together define a range beyond the
     * bounds of the buffer object's data store.
     *
     * @see http://docs.gl/gl2/glGetBufferSubData
     * @see http://docs.gl/gl4/glGetBufferSubData
     * @since 4.5
     * @param int $buffer
     * @param int $offset
     * @param int $size
     * @param CData|null $data
     * @return void
     */
    public function namedBufferSubData(int $buffer, int $offset, int $size, ?CData $data): void
    {
        $__proc = $this->proc('glNamedBufferSubData',
            'void (*)(GLuint buffer, GLintptr offset, GLsizeiptr size, const void *data)');
        $__proc($buffer, $offset, $size, $data);
    }

    /**
     * {@see GL45::getFramebufferParameteriv} and {@see GL45::getNamedFramebufferParameteriv} query parameters of
     * a specified framebuffer object.
     *
     * For {@see GL45::getFramebufferParameteriv}, the framebuffer object is that bound to $target, which must be
     * one of {@see GL45::GL_DRAW_FRAMEBUFFER}, {@see GL45::GL_READ_FRAMEBUFFER} or {@see GL45::GL_FRAMEBUFFER}.
     * {@see GL45::GL_FRAMEBUFFER} is equivalent to {@see GL45::GL_DRAW_FRAMEBUFFER}. Default framebuffers may also
     * be queried if bound to $target.
     *
     * For {@see GL45::getNamedFramebufferParameteriv}, $framebuffer is the name of the framebuffer object. If
     * $framebuffer is zero, the default draw framebuffer is queried.
     *
     * Upon successful return, $param will contain the value of the framebuffer parameter specified by $pname, as
     * described below.
     *
     * The following parameters can only be queried for framebuffer objects:
     *
     *  - {@see GL45::GL_FRAMEBUFFER_DEFAULT_WIDTH}: $params returns the value
     *    of {@see GL45::GL_FRAMEBUFFER_DEFAULT_WIDTH} for the framebuffer
     *    object.
     *
     *  - {@see GL45::GL_FRAMEBUFFER_DEFAULT_HEIGHT}: $params returns the value
     *    of {@see GL45::GL_FRAMEBUFFER_DEFAULT_HEIGHT} for the framebuffer
     *    object.
     *
     *  - {@see GL45::GL_FRAMEBUFFER_DEFAULT_LAYERS}: $params returns the value
     *    of {@see GL45::GL_FRAMEBUFFER_DEFAULT_LAYERS} for the framebuffer
     *    object.
     *
     *  - {@see GL45::GL_FRAMEBUFFER_DEFAULT_SAMPLES}: $params returns the value
     *    of {@see GL45::GL_FRAMEBUFFER_DEFAULT_SAMPLES} for the framebuffer
     *    object.
     *
     *  - {@see GL45::GL_FRAMEBUFFER_DEFAULT_FIXED_SAMPLE_LOCATIONS}: $params
     *    returns the boolean value of {@see
     *    GL45::GL_FRAMEBUFFER_DEFAULT_FIXED_SAMPLE_LOCATIONS}.
     *
     * The following parameters can be queried for both default framebuffers and framebuffer objects:
     *
     *  - {@see GL45::GL_DOUBLEBUFFER}: $param returns a boolean value
     *    indicating whether double buffering is supported for the framebuffer
     *    object.
     *
     *  - {@see GL45::GL_IMPLEMENTATION_COLOR_READ_FORMAT}: $param returns a
     *    GLenum value indicating the preferred pixel data format for the
     *    framebuffer object. See
     *    {@see GL45::readPixels}.
     *
     *  - {@see GL45::GL_IMPLEMENTATION_COLOR_READ_TYPE}: $param returns a
     *    GLenum value indicating the implementation's preferred pixel data type
     *    for the framebuffer
     *    object. See {@see GL45::readPixels}.
     *
     *  - {@see GL45::GL_SAMPLES}: $param returns an integer value indicating
     *    the coverage mask size for the framebuffer object. See
     *    {@see GL45::sampleCoverage}.
     *
     *  - {@see GL45::GL_SAMPLE_BUFFERS}: $param returns an integer value
     *    indicating the number of sample buffers associated with the
     *    framebuffer
     *    object. See {@see GL45::sampleCoverage}.
     *
     *  - {@see GL45::GL_STEREO}: $param returns a boolean value indicating
     *    whether stereo buffers (left and right) are supported for the
     *    framebuffer object.
     *
     * @see http://docs.gl/gl4/glGetFramebufferParameter
     * @since 4.5
     * @param int $framebuffer
     * @param int $buf
     * @return void
     */
    public function namedFramebufferDrawBuffer(int $framebuffer, int $buf): void
    {
        $__proc = $this->proc('glNamedFramebufferDrawBuffer', 'void (*)(GLuint framebuffer, GLenum buf)');
        $__proc($framebuffer, $buf);
    }

    /**
     * {@see GL45::getFramebufferParameteriv} and {@see GL45::getNamedFramebufferParameteriv} query parameters of
     * a specified framebuffer object.
     *
     * For {@see GL45::getFramebufferParameteriv}, the framebuffer object is that bound to $target, which must be
     * one of {@see GL45::GL_DRAW_FRAMEBUFFER}, {@see GL45::GL_READ_FRAMEBUFFER} or {@see GL45::GL_FRAMEBUFFER}.
     * {@see GL45::GL_FRAMEBUFFER} is equivalent to {@see GL45::GL_DRAW_FRAMEBUFFER}. Default framebuffers may also
     * be queried if bound to $target.
     *
     * For {@see GL45::getNamedFramebufferParameteriv}, $framebuffer is the name of the framebuffer object. If
     * $framebuffer is zero, the default draw framebuffer is queried.
     *
     * Upon successful return, $param will contain the value of the framebuffer parameter specified by $pname, as
     * described below.
     *
     * The following parameters can only be queried for framebuffer objects:
     *
     *  - {@see GL45::GL_FRAMEBUFFER_DEFAULT_WIDTH}: $params returns the value
     *    of {@see GL45::GL_FRAMEBUFFER_DEFAULT_WIDTH} for the framebuffer
     *    object.
     *
     *  - {@see GL45::GL_FRAMEBUFFER_DEFAULT_HEIGHT}: $params returns the value
     *    of {@see GL45::GL_FRAMEBUFFER_DEFAULT_HEIGHT} for the framebuffer
     *    object.
     *
     *  - {@see GL45::GL_FRAMEBUFFER_DEFAULT_LAYERS}: $params returns the value
     *    of {@see GL45::GL_FRAMEBUFFER_DEFAULT_LAYERS} for the framebuffer
     *    object.
     *
     *  - {@see GL45::GL_FRAMEBUFFER_DEFAULT_SAMPLES}: $params returns the value
     *    of {@see GL45::GL_FRAMEBUFFER_DEFAULT_SAMPLES} for the framebuffer
     *    object.
     *
     *  - {@see GL45::GL_FRAMEBUFFER_DEFAULT_FIXED_SAMPLE_LOCATIONS}: $params
     *    returns the boolean value of {@see
     *    GL45::GL_FRAMEBUFFER_DEFAULT_FIXED_SAMPLE_LOCATIONS}.
     *
     * The following parameters can be queried for both default framebuffers and framebuffer objects:
     *
     *  - {@see GL45::GL_DOUBLEBUFFER}: $param returns a boolean value
     *    indicating whether double buffering is supported for the framebuffer
     *    object.
     *
     *  - {@see GL45::GL_IMPLEMENTATION_COLOR_READ_FORMAT}: $param returns a
     *    GLenum value indicating the preferred pixel data format for the
     *    framebuffer object. See
     *    {@see GL45::readPixels}.
     *
     *  - {@see GL45::GL_IMPLEMENTATION_COLOR_READ_TYPE}: $param returns a
     *    GLenum value indicating the implementation's preferred pixel data type
     *    for the framebuffer
     *    object. See {@see GL45::readPixels}.
     *
     *  - {@see GL45::GL_SAMPLES}: $param returns an integer value indicating
     *    the coverage mask size for the framebuffer object. See
     *    {@see GL45::sampleCoverage}.
     *
     *  - {@see GL45::GL_SAMPLE_BUFFERS}: $param returns an integer value
     *    indicating the number of sample buffers associated with the
     *    framebuffer
     *    object. See {@see GL45::sampleCoverage}.
     *
     *  - {@see GL45::GL_STEREO}: $param returns a boolean value indicating
     *    whether stereo buffers (left and right) are supported for the
     *    framebuffer object.
     *
     * @see http://docs.gl/gl4/glGetFramebufferParameter
     * @since 4.5
     * @param int $framebuffer
     * @param int $n
     * @param CData|null $bufs
     * @return void
     */
    public function namedFramebufferDrawBuffers(int $framebuffer, int $n, ?CData $bufs): void
    {
        $__proc = $this->proc('glNamedFramebufferDrawBuffers',
            'void (*)(GLuint framebuffer, GLsizei n, const GLenum *bufs)');
        $__proc($framebuffer, $n, $bufs);
    }

    /**
     * {@see GL45::getFramebufferParameteriv} and {@see GL45::getNamedFramebufferParameteriv} query parameters of
     * a specified framebuffer object.
     *
     * For {@see GL45::getFramebufferParameteriv}, the framebuffer object is that bound to $target, which must be
     * one of {@see GL45::GL_DRAW_FRAMEBUFFER}, {@see GL45::GL_READ_FRAMEBUFFER} or {@see GL45::GL_FRAMEBUFFER}.
     * {@see GL45::GL_FRAMEBUFFER} is equivalent to {@see GL45::GL_DRAW_FRAMEBUFFER}. Default framebuffers may also
     * be queried if bound to $target.
     *
     * For {@see GL45::getNamedFramebufferParameteriv}, $framebuffer is the name of the framebuffer object. If
     * $framebuffer is zero, the default draw framebuffer is queried.
     *
     * Upon successful return, $param will contain the value of the framebuffer parameter specified by $pname, as
     * described below.
     *
     * The following parameters can only be queried for framebuffer objects:
     *
     *  - {@see GL45::GL_FRAMEBUFFER_DEFAULT_WIDTH}: $params returns the value
     *    of {@see GL45::GL_FRAMEBUFFER_DEFAULT_WIDTH} for the framebuffer
     *    object.
     *
     *  - {@see GL45::GL_FRAMEBUFFER_DEFAULT_HEIGHT}: $params returns the value
     *    of {@see GL45::GL_FRAMEBUFFER_DEFAULT_HEIGHT} for the framebuffer
     *    object.
     *
     *  - {@see GL45::GL_FRAMEBUFFER_DEFAULT_LAYERS}: $params returns the value
     *    of {@see GL45::GL_FRAMEBUFFER_DEFAULT_LAYERS} for the framebuffer
     *    object.
     *
     *  - {@see GL45::GL_FRAMEBUFFER_DEFAULT_SAMPLES}: $params returns the value
     *    of {@see GL45::GL_FRAMEBUFFER_DEFAULT_SAMPLES} for the framebuffer
     *    object.
     *
     *  - {@see GL45::GL_FRAMEBUFFER_DEFAULT_FIXED_SAMPLE_LOCATIONS}: $params
     *    returns the boolean value of {@see
     *    GL45::GL_FRAMEBUFFER_DEFAULT_FIXED_SAMPLE_LOCATIONS}.
     *
     * The following parameters can be queried for both default framebuffers and framebuffer objects:
     *
     *  - {@see GL45::GL_DOUBLEBUFFER}: $param returns a boolean value
     *    indicating whether double buffering is supported for the framebuffer
     *    object.
     *
     *  - {@see GL45::GL_IMPLEMENTATION_COLOR_READ_FORMAT}: $param returns a
     *    GLenum value indicating the preferred pixel data format for the
     *    framebuffer object. See
     *    {@see GL45::readPixels}.
     *
     *  - {@see GL45::GL_IMPLEMENTATION_COLOR_READ_TYPE}: $param returns a
     *    GLenum value indicating the implementation's preferred pixel data type
     *    for the framebuffer
     *    object. See {@see GL45::readPixels}.
     *
     *  - {@see GL45::GL_SAMPLES}: $param returns an integer value indicating
     *    the coverage mask size for the framebuffer object. See
     *    {@see GL45::sampleCoverage}.
     *
     *  - {@see GL45::GL_SAMPLE_BUFFERS}: $param returns an integer value
     *    indicating the number of sample buffers associated with the
     *    framebuffer
     *    object. See {@see GL45::sampleCoverage}.
     *
     *  - {@see GL45::GL_STEREO}: $param returns a boolean value indicating
     *    whether stereo buffers (left and right) are supported for the
     *    framebuffer object.
     *
     * @see http://docs.gl/gl4/glFramebufferParameteri
     * @see http://docs.gl/gl4/glGetFramebufferParameter
     * @since 4.5
     * @param int $framebuffer
     * @param int $pname
     * @param int $param
     * @return void
     */
    public function namedFramebufferParameteri(int $framebuffer, int $pname, int $param): void
    {
        $__proc = $this->proc('glNamedFramebufferParameteri',
            'void (*)(GLuint framebuffer, GLenum pname, GLint param)');
        $__proc($framebuffer, $pname, $param);
    }

    /**
     * {@see GL45::framebufferRenderbuffer} and {@see GL45::namedFramebufferRenderbuffer} attaches a renderbuffer
     * as one of the logical buffers of the specified framebuffer object. Renderbuffers cannot be attached to the
     * default draw and read framebuffer, so they are not valid targets of these commands.
     *
     * For {@see GL45::framebufferRenderbuffer}, the framebuffer object is that bound to $target, which must be
     * {@see GL45::GL_DRAW_FRAMEBUFFER}, {@see GL45::GL_READ_FRAMEBUFFER} or {@see GL45::GL_FRAMEBUFFER}.
     * {@see GL45::GL_FRAMEBUFFER} is equivalent to {@see GL45::GL_DRAW_FRAMEBUFFER}.
     *
     * For {@see GL45::namedFramebufferRenderbuffer}, $framebuffer is the name of the framebuffer object.
     *
     * $renderbuffertarget must be {@see GL45::GL_RENDERBUFFER}.
     *
     * $renderbuffer must be zero or the name of an existing renderbuffer object of type $renderbuffertarget. If
     * $renderbuffer is not zero, then the specified renderbuffer will be used as the logical buffer identified by
     * $attachment of the specified framebuffer object. If $renderbuffer is zero, then the value of
     * $renderbuffertarget is ignored.
     *
     * $attachment specifies the logical attachment of the framebuffer and must be {@see GL45::GL_COLOR_ATTACHMENT}i,
     * {@see GL45::GL_DEPTH_ATTACHMENT}, {@see GL45::GL_STENCIL_ATTACHMENT} or
     * {@see GL45::GL_DEPTH_STENCIL_ATTACHMENT}. i in may range from zero to the value of
     * {@see GL45::GL_MAX_COLOR_ATTACHMENTS} minus one. Setting $attachment to the value
     * {@see GL45::GL_DEPTH_STENCIL_ATTACHMENT} is a special case causing both the depth and stencil attachments of
     * the specified framebuffer object to be set to $renderbuffer, which should have the base internal format
     * {@see GL45::GL_DEPTH_STENCIL}.
     *
     * The value of {@see GL45::GL_FRAMEBUFFER_ATTACHMENT_OBJECT_TYPE} for the specified attachment point is set to
     * {@see GL45::GL_RENDERBUFFER} and the value of {@see GL45::GL_FRAMEBUFFER_ATTACHMENT_OBJECT_NAME} is set to
     * $renderbuffer. All other state values of specified attachment point are set to their default values. No change
     * is made to the state of the renderbuuffer object and any previous attachment to the $attachment logical buffer
     * of the specified framebuffer object is broken.
     *
     * If $renderbuffer is zero, these commands will detach the image, if any, identified by the specified attachment
     * point of the specified framebuffer object. All state values of the attachment point are set to their default
     * values.
     *
     * @see http://docs.gl/gl4/glFramebufferRenderbuffer
     * @since 4.5
     * @param int $framebuffer
     * @param int $src
     * @return void
     */
    public function namedFramebufferReadBuffer(int $framebuffer, int $src): void
    {
        $__proc = $this->proc('glNamedFramebufferReadBuffer', 'void (*)(GLuint framebuffer, GLenum src)');
        $__proc($framebuffer, $src);
    }

    /**
     * {@see GL45::framebufferRenderbuffer} and {@see GL45::namedFramebufferRenderbuffer} attaches a renderbuffer
     * as one of the logical buffers of the specified framebuffer object. Renderbuffers cannot be attached to the
     * default draw and read framebuffer, so they are not valid targets of these commands.
     *
     * For {@see GL45::framebufferRenderbuffer}, the framebuffer object is that bound to $target, which must be
     * {@see GL45::GL_DRAW_FRAMEBUFFER}, {@see GL45::GL_READ_FRAMEBUFFER} or {@see GL45::GL_FRAMEBUFFER}.
     * {@see GL45::GL_FRAMEBUFFER} is equivalent to {@see GL45::GL_DRAW_FRAMEBUFFER}.
     *
     * For {@see GL45::namedFramebufferRenderbuffer}, $framebuffer is the name of the framebuffer object.
     *
     * $renderbuffertarget must be {@see GL45::GL_RENDERBUFFER}.
     *
     * $renderbuffer must be zero or the name of an existing renderbuffer object of type $renderbuffertarget. If
     * $renderbuffer is not zero, then the specified renderbuffer will be used as the logical buffer identified by
     * $attachment of the specified framebuffer object. If $renderbuffer is zero, then the value of
     * $renderbuffertarget is ignored.
     *
     * $attachment specifies the logical attachment of the framebuffer and must be {@see GL45::GL_COLOR_ATTACHMENT}i,
     * {@see GL45::GL_DEPTH_ATTACHMENT}, {@see GL45::GL_STENCIL_ATTACHMENT} or
     * {@see GL45::GL_DEPTH_STENCIL_ATTACHMENT}. i in may range from zero to the value of
     * {@see GL45::GL_MAX_COLOR_ATTACHMENTS} minus one. Setting $attachment to the value
     * {@see GL45::GL_DEPTH_STENCIL_ATTACHMENT} is a special case causing both the depth and stencil attachments of
     * the specified framebuffer object to be set to $renderbuffer, which should have the base internal format
     * {@see GL45::GL_DEPTH_STENCIL}.
     *
     * The value of {@see GL45::GL_FRAMEBUFFER_ATTACHMENT_OBJECT_TYPE} for the specified attachment point is set to
     * {@see GL45::GL_RENDERBUFFER} and the value of {@see GL45::GL_FRAMEBUFFER_ATTACHMENT_OBJECT_NAME} is set to
     * $renderbuffer. All other state values of specified attachment point are set to their default values. No change
     * is made to the state of the renderbuuffer object and any previous attachment to the $attachment logical buffer
     * of the specified framebuffer object is broken.
     *
     * If $renderbuffer is zero, these commands will detach the image, if any, identified by the specified attachment
     * point of the specified framebuffer object. All state values of the attachment point are set to their default
     * values.
     *
     * @see http://docs.gl/gl4/glFramebufferRenderbuffer
     * @since 4.5
     * @param int $framebuffer
     * @param int $attachment
     * @param int $renderbuffertarget
     * @param int $renderbuffer
     * @return void
     */
    public function namedFramebufferRenderbuffer(
        int $framebuffer,
        int $attachment,
        int $renderbuffertarget,
        int $renderbuffer
    ): void {
        $__proc = $this->proc('glNamedFramebufferRenderbuffer',
            'void (*)(GLuint framebuffer, GLenum attachment, GLenum renderbuffertarget, GLuint renderbuffer)');
        $__proc($framebuffer, $attachment, $renderbuffertarget, $renderbuffer);
    }

    /**
     * These commands attach a selected mipmap level or image of a texture object as one of the logical buffers of
     * the specified framebuffer object. Textures cannot be attached to the default draw and read framebuffer, so
     * they are not valid targets of these commands.
     *
     * For all commands except {@see GL45::namedFramebufferTexture}, the framebuffer object is that bound to
     * $target, which must be {@see GL45::GL_DRAW_FRAMEBUFFER}, {@see GL45::GL_READ_FRAMEBUFFER}, or
     * {@see GL45::GL_FRAMEBUFFER}. {@see GL45::GL_FRAMEBUFFER} is equivalent to {@see GL45::GL_DRAW_FRAMEBUFFER}.
     *
     * For {@see GL45::namedFramebufferTexture}, $framebuffer is the name of the framebuffer object.
     *
     * $attachment specifies the logical attachment of the framebuffer and must be {@see GL45::GL_COLOR_ATTACHMENT}i,
     * {@see GL45::GL_DEPTH_ATTACHMENT}, {@see GL45::GL_STENCIL_ATTACHMENT} or
     * {@see GL45::GL_DEPTH_STENCIL_ATTACHMENT}. i in {@see GL45::GL_COLOR_ATTACHMENT}i may range from zero to the
     * value of {@see GL45::GL_MAX_COLOR_ATTACHMENTS} minus one. Attaching a level of a texture to
     * {@see GL45::GL_DEPTH_STENCIL_ATTACHMENT} is equivalent to attaching that level to both the
     * {@see GL45::GL_DEPTH_ATTACHMENT} and the {@see GL45::GL_STENCIL_ATTACHMENT} attachment points simultaneously.
     *
     * For {@see GL45::framebufferTexture1D}, {@see GL45::framebufferTexture2D} and
     * {@see GL45::framebufferTexture3D}, $textarget specifies what type of texture is named by $texture, and for
     * cube map textures, specifies the face that is to be attached. If $texture is not zero, it must be the name of
     * an existing texture object with effective target $textarget unless it is a cube map texture, in which case
     * $textarget must be {@see GL45::GL_TEXTURE_CUBE_MAP_POSITIVE_X} {@see GL45::GL_TEXTURE_CUBE_MAP_NEGATIVE_X},
     * {@see GL45::GL_TEXTURE_CUBE_MAP_POSITIVE_Y}, {@see GL45::GL_TEXTURE_CUBE_MAP_NEGATIVE_Y},
     * {@see GL45::GL_TEXTURE_CUBE_MAP_POSITIVE_Z}, or {@see GL45::GL_TEXTURE_CUBE_MAP_NEGATIVE_Z}.
     *
     * If $texture is non-zero, the specified $level of the texture object named $texture is attached to the
     * framebfufer attachment point named by $attachment. For {@see GL45::framebufferTexture1D},
     * {@see GL45::framebufferTexture2D}, and {@see GL45::framebufferTexture3D}, $texture must be zero or the
     * name of an existing texture with an effective target of $textarget, or $texture must be the name of an
     * existing cube-map texture and $textarget must be one of {@see GL45::GL_TEXTURE_CUBE_MAP_POSITIVE_X},
     * {@see GL45::GL_TEXTURE_CUBE_MAP_POSITIVE_Y}, {@see GL45::GL_TEXTURE_CUBE_MAP_POSITIVE_Z},
     * {@see GL45::GL_TEXTURE_CUBE_MAP_NEGATIVE_X}, {@see GL45::GL_TEXTURE_CUBE_MAP_NEGATIVE_Y}, or
     * {@see GL45::GL_TEXTURE_CUBE_MAP_NEGATIVE_Z}.
     *
     * If $textarget is {@see GL45::GL_TEXTURE_RECTANGLE}, {@see GL45::GL_TEXTURE_2D_MULTISAMPLE}, or
     * {@see GL45::GL_TEXTURE_2D_MULTISAMPLE_ARRAY}, then $level must be zero.
     *
     * If $textarget is {@see GL45::GL_TEXTURE_3D}, then $level must be greater than or equal to zero and less than
     * or equal to $log_2$ of the value of {@see GL45::GL_MAX_3D_TEXTURE_SIZE}.
     *
     * If $textarget is one of {@see GL45::GL_TEXTURE_CUBE_MAP_POSITIVE_X},
     * {@see GL45::GL_TEXTURE_CUBE_MAP_POSITIVE_Y}, {@see GL45::GL_TEXTURE_CUBE_MAP_POSITIVE_Z},
     * {@see GL45::GL_TEXTURE_CUBE_MAP_NEGATIVE_X}, {@see GL45::GL_TEXTURE_CUBE_MAP_NEGATIVE_Y}, or
     * {@see GL45::GL_TEXTURE_CUBE_MAP_NEGATIVE_Z}, then $level must be greater than or equal to zero and less than
     * or equal to $log_2$ of the value of {@see GL45::GL_MAX_CUBE_MAP_TEXTURE_SIZE}.
     *
     * For all other values of $textarget, $level must be greater than or equal to zero and less than or equal to
     * $log_2$ of the value of {@see GL45::GL_MAX_TEXTURE_SIZE}.
     *
     * $layer specifies the layer of a 2-dimensional image within a 3-dimensional texture.
     *
     * For {@see GL45::framebufferTexture1D}, if $texture is not zero, then $textarget must be
     * {@see GL45::GL_TEXTURE_1D}. For {@see GL45::framebufferTexture2D}, if $texture is not zero, $textarget must
     * be one of {@see GL45::GL_TEXTURE_2D}, {@see GL45::GL_TEXTURE_RECTANGLE},
     * {@see GL45::GL_TEXTURE_CUBE_MAP_POSITIVE_X}, {@see GL45::GL_TEXTURE_CUBE_MAP_POSITIVE_Y},
     * {@see GL45::GL_TEXTURE_CUBE_MAP_POSITIVE_Z}, {@see GL45::GL_TEXTURE_CUBE_MAP_NEGATIVE_X},
     * {@see GL45::GL_TEXTURE_CUBE_MAP_NEGATIVE_Y}, {@see GL45::GL_TEXTURE_CUBE_MAP_NEGATIVE_Z}, or
     * {@see GL45::GL_TEXTURE_2D_MULTISAMPLE}. For {@see GL45::framebufferTexture3D}, if $texture is not zero, then
     * $textarget must be {@see GL45::GL_TEXTURE_3D}.
     *
     * For {@see GL45::framebufferTexture} and {@see GL45::namedFramebufferTexture}, if $texture is the name of a
     * three-dimensional, cube map array, cube map, one- or two-dimensional array, or two-dimensional multisample
     * array texture, the specified texture level is an array of images, and the framebuffer attachment is considered
     * to be layered.
     *
     * @see http://docs.gl/gl4/glFramebufferTexture
     * @since 4.5
     * @param int $framebuffer
     * @param int $attachment
     * @param int $texture
     * @param int $level
     * @return void
     */
    public function namedFramebufferTexture(int $framebuffer, int $attachment, int $texture, int $level): void
    {
        $__proc = $this->proc('glNamedFramebufferTexture',
            'void (*)(GLuint framebuffer, GLenum attachment, GLuint texture, GLint level)');
        $__proc($framebuffer, $attachment, $texture, $level);
    }

    /**
     * {@see GL45::framebufferTextureLayer} and {@see GL45::namedFramebufferTextureLayer} attach a single layer
     * of a three-dimensional or array texture object as one of the logical buffers of the specified framebuffer
     * object. Textures cannot be attached to the default draw and read framebuffer, so they are not valid targets of
     * these commands.
     *
     * For {@see GL45::framebufferTextureLayer}, the framebuffer object is that bound to $target, which must be
     * {@see GL45::GL_DRAW_FRAMEBUFFER}, {@see GL45::GL_READ_FRAMEBUFFER}, or {@see GL45::GL_FRAMEBUFFER}.
     * {@see GL45::GL_FRAMEBUFFER} is equivalent to {@see GL45::GL_DRAW_FRAMEBUFFER}.
     *
     * For {@see GL45::namedFramebufferTextureLayer}, $framebuffer is the name of the framebuffer object.
     *
     * $attachment specifies the logical attachment of the framebuffer and must be {@see GL45::GL_COLOR_ATTACHMENT}i,
     * {@see GL45::GL_DEPTH_ATTACHMENT}, {@see GL45::GL_STENCIL_ATTACHMENT} or
     * {@see GL45::GL_DEPTH_STENCIL_ATTACHMENT}. i in {@see GL45::GL_COLOR_ATTACHMENT}i may range from zero to the
     * value of {@see GL45::GL_MAX_COLOR_ATTACHMENTS} minus one. Attaching a level of a texture to
     * {@see GL45::GL_DEPTH_STENCIL_ATTACHMENT} is equivalent to attaching that level to both the
     * {@see GL45::GL_DEPTH_ATTACHMENT} and the {@see GL45::GL_STENCIL_ATTACHMENT} attachment points simultaneously.
     *
     * If $texture is not zero, it must be the name of a three-dimensional, two-dimensional multisample array, one-
     * or two-dimensional array, or cube map array texture.
     *
     * If $texture is a three-dimensional texture, then $level must be greater than or equal to zero and less than or
     * equal to $log_2$ of the value of {@see GL45::GL_MAX_3D_TEXTURE_SIZE}.
     *
     * If $texture is a two-dimensional array texture, then $level must be greater than or equal to zero and less
     * than or equal to $log_2$ of the value of {@see GL45::GL_MAX_TEXTURE_SIZE}.
     *
     * For cube map textures, $layer is translated into a cube map face according to $$ face = k \\bmod 6. $$ For
     * cube map array textures, $layer is translated into an array layer and face according to $$ layer =
     * \\left\\lfloor { layer \\over 6 } \\right\\rfloor$$ and $$ face = k \\bmod 6. $$
     *
     * @see http://docs.gl/gl4/glFramebufferTextureLayer
     * @since 4.5
     * @param int $framebuffer
     * @param int $attachment
     * @param int $texture
     * @param int $level
     * @param int $layer
     * @return void
     */
    public function namedFramebufferTextureLayer(
        int $framebuffer,
        int $attachment,
        int $texture,
        int $level,
        int $layer
    ): void {
        $__proc = $this->proc('glNamedFramebufferTextureLayer',
            'void (*)(GLuint framebuffer, GLenum attachment, GLuint texture, GLint level, GLint layer)');
        $__proc($framebuffer, $attachment, $texture, $level, $layer);
    }

    /**
     * {@see GL45::renderbufferStorage} is equivalent to calling {@see GL45::renderbufferStorageMultisample} with
     * the $samples set to zero, and {@see GL45::namedRenderbufferStorage} is equivalent to calling
     * {@see GL45::namedRenderbufferStorageMultisample} with the samples set to zero.
     *
     * For {@see GL45::renderbufferStorage}, the target of the operation, specified by $target must be
     * {@see GL45::GL_RENDERBUFFER}. For {@see GL45::namedRenderbufferStorage}, $renderbuffer must be a name of an
     * existing renderbuffer object. $internalformat specifies the internal format to be used for the renderbuffer
     * object's storage and must be a color-renderable, depth-renderable, or stencil-renderable format. $width and
     * $height are the dimensions, in pixels, of the renderbuffer. Both $width and $height must be less than or equal
     * to the value of {@see GL45::GL_MAX_RENDERBUFFER_SIZE}.
     *
     * Upon success, {@see GL45::renderbufferStorage} and {@see GL45::namedRenderbufferStorage} delete any
     * existing data store for the renderbuffer image and the contents of the data store after calling
     * {@see GL45::renderbufferStorage} are undefined.
     *
     * @see http://docs.gl/gl4/glRenderbufferStorage
     * @since 4.5
     * @param int $renderbuffer
     * @param int $internalformat
     * @param int $width
     * @param int $height
     * @return void
     */
    public function namedRenderbufferStorage(int $renderbuffer, int $internalformat, int $width, int $height): void
    {
        $__proc = $this->proc('glNamedRenderbufferStorage',
            'void (*)(GLuint renderbuffer, GLenum internalformat, GLsizei width, GLsizei height)');
        $__proc($renderbuffer, $internalformat, $width, $height);
    }

    /**
     * {@see GL45::renderbufferStorageMultisample} and {@see GL45::namedRenderbufferStorageMultisample} establish
     * the data storage, format, dimensions and number of samples of a renderbuffer object's image.
     *
     * For {@see GL45::renderbufferStorageMultisample}, the target of the operation, specified by $target must be
     * {@see GL45::GL_RENDERBUFFER}. For {@see GL45::namedRenderbufferStorageMultisample}, $renderbuffer must be an
     * ID of an existing renderbuffer object. $internalformat specifies the internal format to be used for the
     * renderbuffer object's storage and must be a color-renderable, depth-renderable, or stencil-renderable format.
     * $width and $height are the dimensions, in pixels, of the renderbuffer. Both $width and $height must be less
     * than or equal to the value of {@see GL45::GL_MAX_RENDERBUFFER_SIZE}. $samples specifies the number of samples
     * to be used for the renderbuffer object's image, and must be less than or equal to the value of
     * {@see GL45::GL_MAX_SAMPLES}. If $internalformat is a signed or unsigned integer format then $samples must be
     * less than or equal to the value of {@see GL45::GL_MAX_INTEGER_SAMPLES}.
     *
     * Upon success, {@see GL45::renderbufferStorageMultisample} and
     * {@see GL45::namedRenderbufferStorageMultisample} delete any existing data store for the renderbuffer image
     * and the contents of the data store after calling either of the functions are undefined.
     *
     * @see http://docs.gl/gl4/glRenderbufferStorageMultisample
     * @since 4.5
     * @param int $renderbuffer
     * @param int $samples
     * @param int $internalformat
     * @param int $width
     * @param int $height
     * @return void
     */
    public function namedRenderbufferStorageMultisample(
        int $renderbuffer,
        int $samples,
        int $internalformat,
        int $width,
        int $height
    ): void {
        $__proc = $this->proc('glNamedRenderbufferStorageMultisample',
            'void (*)(GLuint renderbuffer, GLsizei samples, GLenum internalformat, GLsizei width, GLsizei height)');
        $__proc($renderbuffer, $samples, $internalformat, $width, $height);
    }

    /**
     * {@see GL45::readPixels} and {@see GL45::readnPixels} return pixel data from the frame buffer, starting
     * with the pixel whose lower left corner is at location ($x, $y), into client memory starting at location $data.
     * Several parameters control the processing of the pixel data before it is placed into client memory. These
     * parameters are set with {@see GL45::pixelStore}. This reference page describes the effects on
     * {@see GL45::readPixels} and {@see GL45::readnPixels} of most, but not all of the parameters specified by
     * these three commands.
     *
     * If a non-zero named buffer object is bound to the {@see GL45::GL_PIXEL_PACK_BUFFER} target (see
     * {@see GL45::bindBuffer}) while a block of pixels is requested, $data is treated as a byte offset into the
     * buffer object's data store rather than a pointer to client memory.
     *
     * {@see GL45::readPixels} and {@see GL45::readnPixels} return values from each pixel with lower left corner
     * at     x + i   y + j    for    0 &lt;= i &lt; width   and    0 &lt;= j &lt; height  . This pixel is said to be
     * the ith pixel in the jth row. Pixels are returned in row order from the lowest to the highest row, left to
     * right in each row.
     *
     * $format specifies the format for the returned pixel values; accepted values are:
     *
     *  - {@see GL45::GL_STENCIL_INDEX}: Stencil values are read from the
     *    stencil buffer.
     *
     *  - {@see GL45::GL_DEPTH_COMPONENT}: Depth values are read from the depth
     *    buffer. Each component is converted to floating point such that the
     *    minimum depth value maps to 0 and the maximum value maps to 1. Each
     *    component is clamped to the range    0 1
     *    .
     *
     *  - {@see GL45::GL_DEPTH_STENCIL}: Values are taken from both the depth
     *    and stencil buffers. The $type parameter must be
     *    {@see GL45::GL_UNSIGNED_INT_24_8} or {@see
     *    GL45::GL_FLOAT_32_UNSIGNED_INT_24_8_REV}.
     *
     *  - {@see GL45::GL_RED, GL_GREEN, GL_BLUE, GL_RGB, GL_BGR, GL_RGBA,
     *    GL_BGRA}: Color values are taken from the color buffer.
     *
     * Finally, the indices or components are converted to the proper format, as specified by $type. If $format is
     * {@see GL45::GL_STENCIL_INDEX} and $type is not {@see GL45::GL_FLOAT}, each index is masked with the mask value
     * given in the following table. If $type is {@see GL45::GL_FLOAT}, then each integer index is converted to
     * single-precision floating-point format.
     *
     * If $format is {@see GL45::GL_RED}, {@see GL45::GL_GREEN}, {@see GL45::GL_BLUE}, {@see GL45::GL_RGB},
     * {@see GL45::GL_BGR}, {@see GL45::GL_RGBA}, or {@see GL45::GL_BGRA} and $type is not {@see GL45::GL_FLOAT},
     * each component is multiplied by the multiplier shown in the following table. If type is {@see GL45::GL_FLOAT},
     * then each component is passed as is (or converted to the client's single-precision floating-point format if it
     * is different from the one used by the GL).
     *
     * | {@see GL45::GL_UNSIGNED_BYTE}                  |    2 8  - 1  |      2 8  - 1   &amp;it; c            |
     * | {@see GL45::GL_BYTE}                           |    2 7  - 1  |        2 8  - 1   &amp;it; c - 1   2  |
     * | {@see GL45::GL_UNSIGNED_SHORT}                 |    2 16  - 1 |      2 16  - 1   &amp;it; c           |
     * | {@see GL45::GL_SHORT}                          |    2 15  - 1 |        2 16  - 1   &amp;it; c - 1   2 |
     * | {@see GL45::GL_UNSIGNED_INT}                   |    2 32  - 1 |      2 32  - 1   &amp;it; c           |
     * | {@see GL45::GL_INT}                            |    2 31  - 1 |        2 32  - 1   &amp;it; c - 1   2 |
     * | {@see GL45::GL_HALF_FLOAT}                     | none         | c                                     |
     * | {@see GL45::GL_FLOAT}                          | none         | c                                     |
     * | {@see GL45::GL_UNSIGNED_BYTE_3_3_2}            |    2 N  - 1  |      2 N  - 1   &amp;it; c            |
     * | {@see GL45::GL_UNSIGNED_BYTE_2_3_3_REV}        |    2 N  - 1  |      2 N  - 1   &amp;it; c            |
     * | {@see GL45::GL_UNSIGNED_SHORT_5_6_5}           |    2 N  - 1  |      2 N  - 1   &amp;it; c            |
     * | {@see GL45::GL_UNSIGNED_SHORT_5_6_5_REV}       |    2 N  - 1  |      2 N  - 1   &amp;it; c            |
     * | {@see GL45::GL_UNSIGNED_SHORT_4_4_4_4}         |    2 N  - 1  |      2 N  - 1   &amp;it; c            |
     * | {@see GL45::GL_UNSIGNED_SHORT_4_4_4_4_REV}     |    2 N  - 1  |      2 N  - 1   &amp;it; c            |
     * | {@see GL45::GL_UNSIGNED_SHORT_5_5_5_1}         |    2 N  - 1  |      2 N  - 1   &amp;it; c            |
     * | {@see GL45::GL_UNSIGNED_SHORT_1_5_5_5_REV}     |    2 N  - 1  |      2 N  - 1   &amp;it; c            |
     * | {@see GL45::GL_UNSIGNED_INT_8_8_8_8}           |    2 N  - 1  |      2 N  - 1   &amp;it; c            |
     * | {@see GL45::GL_UNSIGNED_INT_8_8_8_8_REV}       |    2 N  - 1  |      2 N  - 1   &amp;it; c            |
     * | {@see GL45::GL_UNSIGNED_INT_10_10_10_2}        |    2 N  - 1  |      2 N  - 1   &amp;it; c            |
     * | {@see GL45::GL_UNSIGNED_INT_2_10_10_10_REV}    |    2 N  - 1  |      2 N  - 1   &amp;it; c            |
     * | {@see GL45::GL_UNSIGNED_INT_24_8}              |    2 N  - 1  |      2 N  - 1   &amp;it; c            |
     * | {@see GL45::GL_UNSIGNED_INT_10F_11F_11F_REV}   | --           | Special                               |
     * | {@see GL45::GL_UNSIGNED_INT_5_9_9_9_REV}       | --           | Special                               |
     * | {@see GL45::GL_FLOAT_32_UNSIGNED_INT_24_8_REV} | none         | c (Depth Only)                        |
     * Return values are placed in memory as follows. If $format is {@see GL45::GL_STENCIL_INDEX},
     * {@see GL45::GL_DEPTH_COMPONENT}, {@see GL45::GL_RED}, {@see GL45::GL_GREEN}, or {@see GL45::GL_BLUE}, a single
     * value is returned and the data for the ith pixel in the jth row is placed in location     j  &amp;it; width +
     * i  . {@see GL45::GL_RGB} and {@see GL45::GL_BGR} return three values, {@see GL45::GL_RGBA} and
     * {@see GL45::GL_BGRA} return four values for each pixel, with all values corresponding to a single pixel
     * occupying contiguous space in $data. Storage parameters set by {@see GL45::pixelStore}, such as
     * {@see GL45::GL_PACK_LSB_FIRST} and {@see GL45::GL_PACK_SWAP_BYTES}, affect the way that data is written into
     * memory. See {@see GL45::pixelStore}  for a description.
     *
     * {@see GL45::readnPixels} function will only handle the call if $bufSize is at least of the size required to
     * store the requested data. Otherwise, it will generate a {@see GL45::GL_INVALID_OPERATION} error.
     *
     * @see http://docs.gl/gl2/glReadPixels
     * @see http://docs.gl/gl4/glReadPixels
     * @since 4.5
     * @param int $x
     * @param int $y
     * @param int $width
     * @param int $height
     * @param int $format
     * @param int $type
     * @param int $bufSize
     * @param CData|null $data
     * @return void
     */
    public function readnPixels(
        int $x,
        int $y,
        int $width,
        int $height,
        int $format,
        int $type,
        int $bufSize,
        ?CData $data
    ): void {
        $__proc = $this->proc('glReadnPixels',
            'void (*)(GLint x, GLint y, GLsizei width, GLsizei height, GLenum format, GLenum type, GLsizei bufSize, void *data)');
        $__proc($x, $y, $width, $height, $format, $type, $bufSize, $data);
    }

    /**
     * The values of rendered fragments are undefined when a shader stage fetches texels and the same texels are
     * written via fragment shader outputs, even if the reads and writes are not in the same drawing command. To
     * safely read the result of a written texel via a texel fetch in a subsequent drawing command, call
     * {@see GL45::textureBarrier} between the two drawing commands to guarantee that writes have completed and
     * caches have been invalidated before subsequent drawing commands are executed.
     *
     * @see http://docs.gl/gl4/glTextureBarrier
     * @since 4.5
     * @return void
     */
    public function textureBarrier(): void
    {
        $__proc = $this->proc('glTextureBarrier', 'void (*)()');
        $__proc();
    }

    /**
     * The values of rendered fragments are undefined when a shader stage fetches texels and the same texels are
     * written via fragment shader outputs, even if the reads and writes are not in the same drawing command. To
     * safely read the result of a written texel via a texel fetch in a subsequent drawing command, call
     * {@see GL45::textureBarrier} between the two drawing commands to guarantee that writes have completed and
     * caches have been invalidated before subsequent drawing commands are executed.
     *
     * @see http://docs.gl/gl4/glTexBuffer
     * @see http://docs.gl/gl4/glTextureBarrier
     * @since 4.5
     * @param int $texture
     * @param int $internalformat
     * @param int $buffer
     * @return void
     */
    public function textureBuffer(int $texture, int $internalformat, int $buffer): void
    {
        $__proc = $this->proc('glTextureBuffer', 'void (*)(GLuint texture, GLenum internalformat, GLuint buffer)');
        $__proc($texture, $internalformat, $buffer);
    }

    /**
     * {@see GL45::texBufferRange} and {@see GL45::textureBufferRange} attach a range of the data store of a
     * specified buffer object to a specified texture object, and specify the storage format for the texture image
     * found in the buffer object. The texture object must be a buffer texture.
     *
     * If $buffer is zero, any buffer object attached to the buffer texture is detached and no new buffer object is
     * attached. If $buffer is non-zero, it must be the name of an existing buffer object.
     *
     * The start and size of the range are specified by $offset and $size respectively, both measured in basic
     * machine units. $offset must be greater than or equal to zero, $size must be greater than zero, and the sum of
     * $offset and $size must not exceed the value of {@see GL45::GL_BUFFER_SIZE} for $buffer. Furthermore, $offset
     * must be an integer multiple of the value of {@see GL45::GL_TEXTURE_BUFFER_OFFSET_ALIGNMENT}.
     *
     * $internalformat specifies the storage format, and must be one of the following sized internal formats:
     *
     * | {@see GL45::GL_R8}       | ubyte  | 1 | YES | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R16}      | ushort | 1 | YES | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R16F}     | half   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R32F}     | float  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R8I}      | byte   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R16I}     | short  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R32I}     | int    | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R8UI}     | ubyte  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R16UI}    | ushort | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL45::GL_R32UI}    | uint   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL45::GL_RG8}      | ubyte  | 2 | YES | R | G | 0 | 1 |
     * | {@see GL45::GL_RG16}     | ushort | 2 | YES | R | G | 0 | 1 |
     * | {@see GL45::GL_RG16F}    | half   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL45::GL_RG32F}    | float  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL45::GL_RG8I}     | byte   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL45::GL_RG16I}    | short  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL45::GL_RG32I}    | int    | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL45::GL_RG8UI}    | ubyte  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL45::GL_RG16UI}   | ushort | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL45::GL_RG32UI}   | uint   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL45::GL_RGB32F}   | float  | 3 | NO  | R | G | B | 1 |
     * | {@see GL45::GL_RGB32I}   | int    | 3 | NO  | R | G | B | 1 |
     * | {@see GL45::GL_RGB32UI}  | uint   | 3 | NO  | R | G | B | 1 |
     * | {@see GL45::GL_RGBA8}    | uint   | 4 | YES | R | G | B | A |
     * | {@see GL45::GL_RGBA16}   | short  | 4 | YES | R | G | B | A |
     * | {@see GL45::GL_RGBA16F}  | half   | 4 | NO  | R | G | B | A |
     * | {@see GL45::GL_RGBA32F}  | float  | 4 | NO  | R | G | B | A |
     * | {@see GL45::GL_RGBA8I}   | byte   | 4 | NO  | R | G | B | A |
     * | {@see GL45::GL_RGBA16I}  | short  | 4 | NO  | R | G | B | A |
     * | {@see GL45::GL_RGBA32I}  | int    | 4 | NO  | R | G | B | A |
     * | {@see GL45::GL_RGBA8UI}  | ubyte  | 4 | NO  | R | G | B | A |
     * | {@see GL45::GL_RGBA16UI} | ushort | 4 | NO  | R | G | B | A |
     * | {@see GL45::GL_RGBA32UI} | uint   | 4 | NO  | R | G | B | A |
     *
     * When a range of a buffer object is attached to a buffer texture, the specified range of the buffer object's
     * data store is taken as the texture's texel array. The number of texels in the buffer texture's texel array is
     * given by $$ \\left\\lfloor { size \\over { components \\times sizeof(base\\_type) } } \\right\\rfloor $$ where
     * $components$ and $base\\_type$ are the element count and base data type for elements, as specified in the
     * table above. The number of texels in the texel array is then clamped to the value of the
     * implementation-dependent limit {@see GL45::GL_MAX_TEXTURE_BUFFER_SIZE}. When a buffer texture is accessed in a
     * shader, the results of a texel fetch are undefined if the specified texel coordinate is negative, or greater
     * than or equal to the clamped number of texels in the texel array.
     *
     * @see http://docs.gl/gl4/glTexBufferRange
     * @since 4.5
     * @param int $texture
     * @param int $internalformat
     * @param int $buffer
     * @param int $offset
     * @param int $size
     * @return void
     */
    public function textureBufferRange(int $texture, int $internalformat, int $buffer, int $offset, int $size): void
    {
        $__proc = $this->proc('glTextureBufferRange',
            'void (*)(GLuint texture, GLenum internalformat, GLuint buffer, GLintptr offset, GLsizeiptr size)');
        $__proc($texture, $internalformat, $buffer, $offset, $size);
    }

    /**
     * {@see GL45::texParameter} and {@see GL45::textureParameter} assign the value or values in $params to the
     * texture parameter specified as $pname. For {@see GL45::texParameter}, $target defines the target texture,
     * either {@see GL45::GL_TEXTURE_1D}, {@see GL45::GL_TEXTURE_1D_ARRAY}, {@see GL45::GL_TEXTURE_2D},
     * {@see GL45::GL_TEXTURE_2D_ARRAY}, {@see GL45::GL_TEXTURE_2D_MULTISAMPLE},
     * {@see GL45::GL_TEXTURE_2D_MULTISAMPLE_ARRAY}, {@see GL45::GL_TEXTURE_3D}, {@see GL45::GL_TEXTURE_CUBE_MAP},
     * {@see GL45::GL_TEXTURE_CUBE_MAP_ARRAY}, or {@see GL45::GL_TEXTURE_RECTANGLE}. The following symbols are
     * accepted in $pname:
     *
     *  - {@see GL45::GL_DEPTH_STENCIL_TEXTURE_MODE}: Specifies the mode used to
     *    read from depth-stencil format textures. $params must be one of
     *    {@see GL45::GL_DEPTH_COMPONENT} or {@see GL45::GL_STENCIL_INDEX}. If
     *    the depth stencil mode is
     *    {@see GL45::GL_DEPTH_COMPONENT}, then reads from depth-stencil format
     *    textures will return the depth component
     *    of the texel in Rt and the stencil component will be discarded. If the
     *    depth stencil mode is
     *    {@see GL45::GL_STENCIL_INDEX} then the stencil component is returned
     *    in Rt and the depth component is
     *    discarded. The initial value is {@see GL45::GL_DEPTH_COMPONENT}.
     *
     *  - {@see GL45::GL_TEXTURE_BASE_LEVEL}: Specifies the index of the lowest
     *    defined mipmap level. This is an integer value. The initial value is
     *    0.
     *
     *  - {@see GL45::GL_TEXTURE_BORDER_COLOR}: The data in $params specifies
     *    four values that define the border values that should be used for
     *    border
     *    texels. If a texel is sampled from the border of the texture, the
     *    values of
     *    {@see GL45::GL_TEXTURE_BORDER_COLOR} are interpreted as an RGBA color
     *    to match the texture's internal format
     *    and substituted for the non-existent texel data. If the texture
     *    contains depth components, the first component
     *    of {@see GL45::GL_TEXTURE_BORDER_COLOR} is interpreted as a depth
     *    value. The initial value is     0.0 , 0.0 ,
     *    0.0 , 0.0    .   If the values for {@see
     *    GL45::GL_TEXTURE_BORDER_COLOR} are specified with
     *    {@see GL45::texParameterIiv} or {@see GL45::texParameterIuiv}, the
     *    values are stored unmodified with an
     *    internal data type of integer. If specified with {@see
     *    GL45::texParameteriv}, they are converted to floating
     *    point with the following equation:   f =   2 c + 1    2 b  - 1    . If
     *    specified with
     *    {@see GL45::texParameterfv}, they are stored unmodified as
     *    floating-point values.
     *
     *  - {@see GL45::GL_TEXTURE_COMPARE_FUNC}: Specifies the comparison
     *    operator used when {@see GL45::GL_TEXTURE_COMPARE_MODE} is set to
     *    {@see GL45::GL_COMPARE_REF_TO_TEXTURE}. Permissible values are:
     *     Texture Comparison Function
     *    Computed result        {@see GL45::GL_LEQUAL}      result =     1.0
     *    0.0   &amp;it;     r &lt;=  D t       r
     *    &gt;  D t              {@see GL45::GL_GEQUAL}      result =     1.0
     *    0.0   &amp;it;     r &gt;=  D t       r
     *    &lt;  D t              {@see GL45::GL_LESS}      result =     1.0
     *    0.0   &amp;it;     r &lt;  D t       r
     *    &gt;=  D t              {@see GL45::GL_GREATER}      result =     1.0
     *     0.0   &amp;it;     r &gt;  D t       r
     *    &lt;=  D t              {@see GL45::GL_EQUAL}      result =     1.0
     *    0.0   &amp;it;     r =  D t       r ≠
     *    D t              {@see GL45::GL_NOTEQUAL}      result =     1.0   0.0
     *     &amp;it;     r ≠  D t       r =  D t
     *                 {@see GL45::GL_ALWAYS}      result = 1.0        {@see
     *    GL45::GL_NEVER}      result = 0.0
     *    where r is the current interpolated texture coordinate, and   D t   is
     *    the depth texture value sampled from
     *    the currently bound depth texture. result is assigned to the red
     *    channel.
     *
     *  - {@see GL45::GL_TEXTURE_COMPARE_MODE}: Specifies the texture comparison
     *    mode for currently bound depth textures. That is, a texture whose
     *    internal
     *    format is {@see GL45::GL_DEPTH_COMPONENT_*}; see {@see
     *    GL45::texImage2D}) Permissible values are:
     *    {@see GL45::GL_COMPARE_REF_TO_TEXTURE}   Specifies that the
     *    interpolated and clamped r texture coordinate
     *    should be compared to the value in the currently bound depth texture.
     *    See the discussion of
     *    {@see GL45::GL_TEXTURE_COMPARE_FUNC} for details of how the comparison
     *    is evaluated. The result of the
     *    comparison is assigned to the red channel.     {@see GL45::GL_NONE}
     *    Specifies that the red channel should be
     *    assigned the appropriate value from the currently bound depth texture.
     *
     *  - {@see GL45::GL_TEXTURE_LOD_BIAS}: $params specifies a fixed bias value
     *    that is to be added to the level-of-detail parameter for the texture
     *    before texture sampling. The specified value is added to the
     *    shader-supplied bias value (if any) and
     *    subsequently clamped into the implementation-defined range     -  bias
     *    max        bias max      , where   bias
     *    max    is the value of the implementation defined constant {@see
     *    GL45::GL_MAX_TEXTURE_LOD_BIAS}. The initial
     *    value is 0.0.
     *
     *  - {@see GL45::GL_TEXTURE_MIN_FILTER}: The texture minifying function is
     *    used whenever the level-of-detail function used when sampling from the
     *    texture determines that the texture should be minified. There are six
     *    defined minifying functions. Two of them
     *    use either the nearest texture elements or a weighted average of
     *    multiple texture elements to compute the
     *    texture value. The other four use mipmaps.   A mipmap is an ordered
     *    set of arrays representing the same image
     *    at progressively lower resolutions. If the texture has dimensions    2
     *    n  × 2 m   , there are     max
     *    &amp;af;  n m   + 1   mipmaps. The first mipmap is the original
     *    texture, with dimensions    2 n  × 2 m   .
     *    Each subsequent mipmap has dimensions    2   k - 1    × 2   l - 1
     *    , where    2 k  × 2 l    are the
     *    dimensions of the previous mipmap, until either    k = 0   or    l = 0
     *     . At that point, subsequent mipmaps
     *    have dimension    1 × 2   l - 1      or    2   k - 1    × 1   until
     *    the final mipmap, which has dimension
     *    1 × 1  . To define the mipmaps, call {@see GL45::texImage1D}, {@see
     *    GL45::texImage2D},
     *    {@see GL45::texImage3D}, {@see GL45::copyTexImage1D}, or {@see
     *    GL45::copyTexImage2D} with the level
     *    argument indicating the order of the mipmaps. Level 0 is the original
     *    texture; level    max &amp;af;  n m
     *    is the final    1 × 1   mipmap.   $params supplies a function for
     *    minifying the texture as one of the
     *    following:   {@see GL45::GL_NEAREST}   Returns the value of the
     *    texture element that is nearest (in Manhattan
     *    distance) to the specified texture coordinates.     {@see
     *    GL45::GL_LINEAR}   Returns the weighted average of
     *    the four texture elements that are closest to the specified texture
     *    coordinates. These can include items
     *    wrapped or repeated from other parts of a texture, depending on the
     *    values of {@see GL45::GL_TEXTURE_WRAP_S}
     *    and {@see GL45::GL_TEXTURE_WRAP_T}, and on the exact mapping.
     *    {@see GL45::GL_NEAREST_MIPMAP_NEAREST}
     *    Chooses the mipmap that most closely matches the size of the pixel
     *    being textured and uses the
     *    {@see GL45::GL_NEAREST} criterion (the texture element closest to the
     *    specified texture coordinates) to
     *    produce a texture value.     {@see GL45::GL_LINEAR_MIPMAP_NEAREST}
     *    Chooses the mipmap that most closely
     *    matches the size of the pixel being textured and uses the {@see
     *    GL45::GL_LINEAR} criterion (a weighted average
     *    of the four texture elements that are closest to the specified texture
     *    coordinates) to produce a texture
     *    value.     {@see GL45::GL_NEAREST_MIPMAP_LINEAR}   Chooses the two
     *    mipmaps that most closely match the size of
     *    the pixel being textured and uses the {@see GL45::GL_NEAREST}
     *    criterion (the texture element closest to the
     *    specified texture coordinates ) to produce a texture value from each
     *    mipmap. The final texture value is a
     *    weighted average of those two values.     {@see
     *    GL45::GL_LINEAR_MIPMAP_LINEAR}   Chooses the two mipmaps that
     *    most closely match the size of the pixel being textured and uses the
     *    {@see GL45::GL_LINEAR} criterion (a
     *    weighted average of the texture elements that are closest to the
     *    specified texture coordinates) to produce a
     *    texture value from each mipmap. The final texture value is a weighted
     *    average of those two values.       As
     *    more texture elements are sampled in the minification process, fewer
     *    aliasing artifacts will be apparent.
     *    While the {@see GL45::GL_NEAREST} and {@see GL45::GL_LINEAR}
     *    minification functions can be faster than the
     *    other four, they sample only one or multiple texture elements to
     *    determine the texture value of the pixel
     *    being rendered and can produce moire patterns or ragged transitions.
     *    The initial value of
     *    {@see GL45::GL_TEXTURE_MIN_FILTER} is {@see
     *    GL45::GL_NEAREST_MIPMAP_LINEAR}.
     *
     *  - {@see GL45::GL_TEXTURE_MAG_FILTER}: The texture magnification function
     *    is used whenever the level-of-detail function used when sampling from
     *    the
     *    texture determines that the texture should be magified. It sets the
     *    texture magnification function to either
     *    {@see GL45::GL_NEAREST} or {@see GL45::GL_LINEAR} (see below). {@see
     *    GL45::GL_NEAREST} is generally faster
     *    than {@see GL45::GL_LINEAR}, but it can produce textured images with
     *    sharper edges because the transition
     *    between texture elements is not as smooth. The initial value of {@see
     *    GL45::GL_TEXTURE_MAG_FILTER} is
     *    {@see GL45::GL_LINEAR}.   {@see GL45::GL_NEAREST}   Returns the value
     *    of the texture element that is nearest
     *    (in Manhattan distance) to the specified texture coordinates.
     *    {@see GL45::GL_LINEAR}   Returns the
     *    weighted average of the texture elements that are closest to the
     *    specified texture coordinates. These can
     *    include items wrapped or repeated from other parts of a texture,
     *    depending on the values of
     *    {@see GL45::GL_TEXTURE_WRAP_S} and {@see GL45::GL_TEXTURE_WRAP_T}, and
     *    on the exact mapping.
     *
     *  - {@see GL45::GL_TEXTURE_MIN_LOD}: Sets the minimum level-of-detail
     *    parameter. This floating-point value limits the selection of highest
     *    resolution mipmap (lowest mipmap level). The initial value is -1000.
     *
     *  - {@see GL45::GL_TEXTURE_MAX_LOD}: Sets the maximum level-of-detail
     *    parameter. This floating-point value limits the selection of the
     *    lowest
     *    resolution mipmap (highest mipmap level). The initial value is 1000.
     *
     *  - {@see GL45::GL_TEXTURE_MAX_LEVEL}: Sets the index of the highest
     *    defined mipmap level. This is an integer value. The initial value is
     *    1000.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_R}: Sets the swizzle that will be
     *    applied to the r component of a texel before it is returned to the
     *    shader.
     *    Valid values for $param are {@see GL45::GL_RED}, {@see
     *    GL45::GL_GREEN}, {@see GL45::GL_BLUE},
     *    {@see GL45::GL_ALPHA}, {@see GL45::GL_ZERO} and {@see GL45::GL_ONE}.
     *    If {@see GL45::GL_TEXTURE_SWIZZLE_R} is
     *    {@see GL45::GL_RED}, the value for r will be taken from the first
     *    channel of the fetched texel. If
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R} is {@see GL45::GL_GREEN}, the value
     *    for r will be taken from the second
     *    channel of the fetched texel. If {@see GL45::GL_TEXTURE_SWIZZLE_R} is
     *    {@see GL45::GL_BLUE}, the value for r
     *    will be taken from the third channel of the fetched texel. If {@see
     *    GL45::GL_TEXTURE_SWIZZLE_R} is
     *    {@see GL45::GL_ALPHA}, the value for r will be taken from the fourth
     *    channel of the fetched texel. If
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R} is {@see GL45::GL_ZERO}, the value
     *    for r will be subtituted with 0.0. If
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R} is {@see GL45::GL_ONE}, the value
     *    for r will be subtituted with 1.0. The
     *    initial value is {@see GL45::GL_RED}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_G}: Sets the swizzle that will be
     *    applied to the g component of a texel before it is returned to the
     *    shader.
     *    Valid values for $param and their effects are similar to those of
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R}. The
     *    initial value is {@see GL45::GL_GREEN}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_B}: Sets the swizzle that will be
     *    applied to the b component of a texel before it is returned to the
     *    shader.
     *    Valid values for $param and their effects are similar to those of
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R}. The
     *    initial value is {@see GL45::GL_BLUE}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_A}: Sets the swizzle that will be
     *    applied to the a component of a texel before it is returned to the
     *    shader.
     *    Valid values for $param and their effects are similar to those of
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R}. The
     *    initial value is {@see GL45::GL_ALPHA}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_RGBA}: Sets the swizzles that will be
     *    applied to the r, g, b, and a components of a texel before they are
     *    returned
     *    to the shader. Valid values for $params and their effects are similar
     *    to those of
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R}, except that all channels are
     *    specified simultaneously. Setting the value of
     *    {@see GL45::GL_TEXTURE_SWIZZLE_RGBA} is equivalent (assuming no errors
     *    are generated) to setting the
     *    parameters of each of {@see GL45::GL_TEXTURE_SWIZZLE_R}, {@see
     *    GL45::GL_TEXTURE_SWIZZLE_G},
     *    {@see GL45::GL_TEXTURE_SWIZZLE_B}, and {@see
     *    GL45::GL_TEXTURE_SWIZZLE_A} successively.
     *
     *  - {@see GL45::GL_TEXTURE_WRAP_S}: Sets the wrap parameter for texture
     *    coordinate s to either {@see GL45::GL_CLAMP_TO_EDGE},
     *    {@see GL45::GL_CLAMP_TO_BORDER}, {@see GL45::GL_MIRRORED_REPEAT},
     *    {@see GL45::GL_REPEAT}, or
     *    {@see GL45::GL_MIRROR_CLAMP_TO_EDGE}. {@see GL45::GL_CLAMP_TO_EDGE}
     *    causes s coordinates to be clamped to the
     *    range       1  2N      1 -    1  2N       , where N is the size of the
     *    texture in the direction of clamping.
     *    {@see GL45::GL_CLAMP_TO_BORDER} evaluates s coordinates in a similar
     *    manner to {@see GL45::GL_CLAMP_TO_EDGE}.
     *    However, in cases where clamping would have occurred in {@see
     *    GL45::GL_CLAMP_TO_EDGE} mode, the fetched texel
     *    data is substituted with the values specified by {@see
     *    GL45::GL_TEXTURE_BORDER_COLOR}. {@see GL45::GL_REPEAT}
     *    causes the integer part of the s coordinate to be ignored; the GL uses
     *    only the fractional part, thereby
     *    creating a repeating pattern. {@see GL45::GL_MIRRORED_REPEAT} causes
     *    the s coordinate to be set to the
     *    fractional part of the texture coordinate if the integer part of s is
     *    even; if the integer part of s is odd,
     *    then the s texture coordinate is set to    1 -  frac &amp;af;  s    ,
     *    where    frac &amp;af;  s    represents
     *    the fractional part of s. {@see GL45::GL_MIRROR_CLAMP_TO_EDGE} causes
     *    the s coordinate to be repeated as for
     *    {@see GL45::GL_MIRRORED_REPEAT} for one repetition of the texture, at
     *    which point the coordinate to be clamped
     *    as in {@see GL45::GL_CLAMP_TO_EDGE}. Initially, {@see
     *    GL45::GL_TEXTURE_WRAP_S} is set to
     *    {@see GL45::GL_REPEAT}.
     *
     *  - {@see GL45::GL_TEXTURE_WRAP_T}: Sets the wrap parameter for texture
     *    coordinate t to either {@see GL45::GL_CLAMP_TO_EDGE},
     *    {@see GL45::GL_CLAMP_TO_BORDER}, {@see GL45::GL_MIRRORED_REPEAT},
     *    {@see GL45::GL_REPEAT}, or
     *    {@see GL45::GL_MIRROR_CLAMP_TO_EDGE}. See the discussion under {@see
     *    GL45::GL_TEXTURE_WRAP_S}. Initially,
     *    {@see GL45::GL_TEXTURE_WRAP_T} is set to {@see GL45::GL_REPEAT}.
     *
     *  - {@see GL45::GL_TEXTURE_WRAP_R}: Sets the wrap parameter for texture
     *    coordinate r to either {@see GL45::GL_CLAMP_TO_EDGE},
     *    {@see GL45::GL_CLAMP_TO_BORDER}, {@see GL45::GL_MIRRORED_REPEAT},
     *    {@see GL45::GL_REPEAT}, or
     *    {@see GL45::GL_MIRROR_CLAMP_TO_EDGE}. See the discussion under {@see
     *    GL45::GL_TEXTURE_WRAP_S}. Initially,
     *    {@see GL45::GL_TEXTURE_WRAP_R} is set to {@see GL45::GL_REPEAT}.
     *
     * @see http://docs.gl/gl2/glGetBufferParameteriv
     * @see http://docs.gl/gl2/glTexParameter
     * @see http://docs.gl/gl4/glTexParameter
     * @since 4.5
     * @param int $texture
     * @param int $pname
     * @param CData|null $params
     * @return void
     */
    public function textureParameterIiv(int $texture, int $pname, ?CData $params): void
    {
        $__proc = $this->proc('glTextureParameterIiv',
            'void (*)(GLuint texture, GLenum pname, const GLint *params)');
        $__proc($texture, $pname, $params);
    }

    /**
     * {@see GL45::texParameter} and {@see GL45::textureParameter} assign the value or values in $params to the
     * texture parameter specified as $pname. For {@see GL45::texParameter}, $target defines the target texture,
     * either {@see GL45::GL_TEXTURE_1D}, {@see GL45::GL_TEXTURE_1D_ARRAY}, {@see GL45::GL_TEXTURE_2D},
     * {@see GL45::GL_TEXTURE_2D_ARRAY}, {@see GL45::GL_TEXTURE_2D_MULTISAMPLE},
     * {@see GL45::GL_TEXTURE_2D_MULTISAMPLE_ARRAY}, {@see GL45::GL_TEXTURE_3D}, {@see GL45::GL_TEXTURE_CUBE_MAP},
     * {@see GL45::GL_TEXTURE_CUBE_MAP_ARRAY}, or {@see GL45::GL_TEXTURE_RECTANGLE}. The following symbols are
     * accepted in $pname:
     *
     *  - {@see GL45::GL_DEPTH_STENCIL_TEXTURE_MODE}: Specifies the mode used to
     *    read from depth-stencil format textures. $params must be one of
     *    {@see GL45::GL_DEPTH_COMPONENT} or {@see GL45::GL_STENCIL_INDEX}. If
     *    the depth stencil mode is
     *    {@see GL45::GL_DEPTH_COMPONENT}, then reads from depth-stencil format
     *    textures will return the depth component
     *    of the texel in Rt and the stencil component will be discarded. If the
     *    depth stencil mode is
     *    {@see GL45::GL_STENCIL_INDEX} then the stencil component is returned
     *    in Rt and the depth component is
     *    discarded. The initial value is {@see GL45::GL_DEPTH_COMPONENT}.
     *
     *  - {@see GL45::GL_TEXTURE_BASE_LEVEL}: Specifies the index of the lowest
     *    defined mipmap level. This is an integer value. The initial value is
     *    0.
     *
     *  - {@see GL45::GL_TEXTURE_BORDER_COLOR}: The data in $params specifies
     *    four values that define the border values that should be used for
     *    border
     *    texels. If a texel is sampled from the border of the texture, the
     *    values of
     *    {@see GL45::GL_TEXTURE_BORDER_COLOR} are interpreted as an RGBA color
     *    to match the texture's internal format
     *    and substituted for the non-existent texel data. If the texture
     *    contains depth components, the first component
     *    of {@see GL45::GL_TEXTURE_BORDER_COLOR} is interpreted as a depth
     *    value. The initial value is     0.0 , 0.0 ,
     *    0.0 , 0.0    .   If the values for {@see
     *    GL45::GL_TEXTURE_BORDER_COLOR} are specified with
     *    {@see GL45::texParameterIiv} or {@see GL45::texParameterIuiv}, the
     *    values are stored unmodified with an
     *    internal data type of integer. If specified with {@see
     *    GL45::texParameteriv}, they are converted to floating
     *    point with the following equation:   f =   2 c + 1    2 b  - 1    . If
     *    specified with
     *    {@see GL45::texParameterfv}, they are stored unmodified as
     *    floating-point values.
     *
     *  - {@see GL45::GL_TEXTURE_COMPARE_FUNC}: Specifies the comparison
     *    operator used when {@see GL45::GL_TEXTURE_COMPARE_MODE} is set to
     *    {@see GL45::GL_COMPARE_REF_TO_TEXTURE}. Permissible values are:
     *     Texture Comparison Function
     *    Computed result        {@see GL45::GL_LEQUAL}      result =     1.0
     *    0.0   &amp;it;     r &lt;=  D t       r
     *    &gt;  D t              {@see GL45::GL_GEQUAL}      result =     1.0
     *    0.0   &amp;it;     r &gt;=  D t       r
     *    &lt;  D t              {@see GL45::GL_LESS}      result =     1.0
     *    0.0   &amp;it;     r &lt;  D t       r
     *    &gt;=  D t              {@see GL45::GL_GREATER}      result =     1.0
     *     0.0   &amp;it;     r &gt;  D t       r
     *    &lt;=  D t              {@see GL45::GL_EQUAL}      result =     1.0
     *    0.0   &amp;it;     r =  D t       r ≠
     *    D t              {@see GL45::GL_NOTEQUAL}      result =     1.0   0.0
     *     &amp;it;     r ≠  D t       r =  D t
     *                 {@see GL45::GL_ALWAYS}      result = 1.0        {@see
     *    GL45::GL_NEVER}      result = 0.0
     *    where r is the current interpolated texture coordinate, and   D t   is
     *    the depth texture value sampled from
     *    the currently bound depth texture. result is assigned to the red
     *    channel.
     *
     *  - {@see GL45::GL_TEXTURE_COMPARE_MODE}: Specifies the texture comparison
     *    mode for currently bound depth textures. That is, a texture whose
     *    internal
     *    format is {@see GL45::GL_DEPTH_COMPONENT_*}; see {@see
     *    GL45::texImage2D}) Permissible values are:
     *    {@see GL45::GL_COMPARE_REF_TO_TEXTURE}   Specifies that the
     *    interpolated and clamped r texture coordinate
     *    should be compared to the value in the currently bound depth texture.
     *    See the discussion of
     *    {@see GL45::GL_TEXTURE_COMPARE_FUNC} for details of how the comparison
     *    is evaluated. The result of the
     *    comparison is assigned to the red channel.     {@see GL45::GL_NONE}
     *    Specifies that the red channel should be
     *    assigned the appropriate value from the currently bound depth texture.
     *
     *  - {@see GL45::GL_TEXTURE_LOD_BIAS}: $params specifies a fixed bias value
     *    that is to be added to the level-of-detail parameter for the texture
     *    before texture sampling. The specified value is added to the
     *    shader-supplied bias value (if any) and
     *    subsequently clamped into the implementation-defined range     -  bias
     *    max        bias max      , where   bias
     *    max    is the value of the implementation defined constant {@see
     *    GL45::GL_MAX_TEXTURE_LOD_BIAS}. The initial
     *    value is 0.0.
     *
     *  - {@see GL45::GL_TEXTURE_MIN_FILTER}: The texture minifying function is
     *    used whenever the level-of-detail function used when sampling from the
     *    texture determines that the texture should be minified. There are six
     *    defined minifying functions. Two of them
     *    use either the nearest texture elements or a weighted average of
     *    multiple texture elements to compute the
     *    texture value. The other four use mipmaps.   A mipmap is an ordered
     *    set of arrays representing the same image
     *    at progressively lower resolutions. If the texture has dimensions    2
     *    n  × 2 m   , there are     max
     *    &amp;af;  n m   + 1   mipmaps. The first mipmap is the original
     *    texture, with dimensions    2 n  × 2 m   .
     *    Each subsequent mipmap has dimensions    2   k - 1    × 2   l - 1
     *    , where    2 k  × 2 l    are the
     *    dimensions of the previous mipmap, until either    k = 0   or    l = 0
     *     . At that point, subsequent mipmaps
     *    have dimension    1 × 2   l - 1      or    2   k - 1    × 1   until
     *    the final mipmap, which has dimension
     *    1 × 1  . To define the mipmaps, call {@see GL45::texImage1D}, {@see
     *    GL45::texImage2D},
     *    {@see GL45::texImage3D}, {@see GL45::copyTexImage1D}, or {@see
     *    GL45::copyTexImage2D} with the level
     *    argument indicating the order of the mipmaps. Level 0 is the original
     *    texture; level    max &amp;af;  n m
     *    is the final    1 × 1   mipmap.   $params supplies a function for
     *    minifying the texture as one of the
     *    following:   {@see GL45::GL_NEAREST}   Returns the value of the
     *    texture element that is nearest (in Manhattan
     *    distance) to the specified texture coordinates.     {@see
     *    GL45::GL_LINEAR}   Returns the weighted average of
     *    the four texture elements that are closest to the specified texture
     *    coordinates. These can include items
     *    wrapped or repeated from other parts of a texture, depending on the
     *    values of {@see GL45::GL_TEXTURE_WRAP_S}
     *    and {@see GL45::GL_TEXTURE_WRAP_T}, and on the exact mapping.
     *    {@see GL45::GL_NEAREST_MIPMAP_NEAREST}
     *    Chooses the mipmap that most closely matches the size of the pixel
     *    being textured and uses the
     *    {@see GL45::GL_NEAREST} criterion (the texture element closest to the
     *    specified texture coordinates) to
     *    produce a texture value.     {@see GL45::GL_LINEAR_MIPMAP_NEAREST}
     *    Chooses the mipmap that most closely
     *    matches the size of the pixel being textured and uses the {@see
     *    GL45::GL_LINEAR} criterion (a weighted average
     *    of the four texture elements that are closest to the specified texture
     *    coordinates) to produce a texture
     *    value.     {@see GL45::GL_NEAREST_MIPMAP_LINEAR}   Chooses the two
     *    mipmaps that most closely match the size of
     *    the pixel being textured and uses the {@see GL45::GL_NEAREST}
     *    criterion (the texture element closest to the
     *    specified texture coordinates ) to produce a texture value from each
     *    mipmap. The final texture value is a
     *    weighted average of those two values.     {@see
     *    GL45::GL_LINEAR_MIPMAP_LINEAR}   Chooses the two mipmaps that
     *    most closely match the size of the pixel being textured and uses the
     *    {@see GL45::GL_LINEAR} criterion (a
     *    weighted average of the texture elements that are closest to the
     *    specified texture coordinates) to produce a
     *    texture value from each mipmap. The final texture value is a weighted
     *    average of those two values.       As
     *    more texture elements are sampled in the minification process, fewer
     *    aliasing artifacts will be apparent.
     *    While the {@see GL45::GL_NEAREST} and {@see GL45::GL_LINEAR}
     *    minification functions can be faster than the
     *    other four, they sample only one or multiple texture elements to
     *    determine the texture value of the pixel
     *    being rendered and can produce moire patterns or ragged transitions.
     *    The initial value of
     *    {@see GL45::GL_TEXTURE_MIN_FILTER} is {@see
     *    GL45::GL_NEAREST_MIPMAP_LINEAR}.
     *
     *  - {@see GL45::GL_TEXTURE_MAG_FILTER}: The texture magnification function
     *    is used whenever the level-of-detail function used when sampling from
     *    the
     *    texture determines that the texture should be magified. It sets the
     *    texture magnification function to either
     *    {@see GL45::GL_NEAREST} or {@see GL45::GL_LINEAR} (see below). {@see
     *    GL45::GL_NEAREST} is generally faster
     *    than {@see GL45::GL_LINEAR}, but it can produce textured images with
     *    sharper edges because the transition
     *    between texture elements is not as smooth. The initial value of {@see
     *    GL45::GL_TEXTURE_MAG_FILTER} is
     *    {@see GL45::GL_LINEAR}.   {@see GL45::GL_NEAREST}   Returns the value
     *    of the texture element that is nearest
     *    (in Manhattan distance) to the specified texture coordinates.
     *    {@see GL45::GL_LINEAR}   Returns the
     *    weighted average of the texture elements that are closest to the
     *    specified texture coordinates. These can
     *    include items wrapped or repeated from other parts of a texture,
     *    depending on the values of
     *    {@see GL45::GL_TEXTURE_WRAP_S} and {@see GL45::GL_TEXTURE_WRAP_T}, and
     *    on the exact mapping.
     *
     *  - {@see GL45::GL_TEXTURE_MIN_LOD}: Sets the minimum level-of-detail
     *    parameter. This floating-point value limits the selection of highest
     *    resolution mipmap (lowest mipmap level). The initial value is -1000.
     *
     *  - {@see GL45::GL_TEXTURE_MAX_LOD}: Sets the maximum level-of-detail
     *    parameter. This floating-point value limits the selection of the
     *    lowest
     *    resolution mipmap (highest mipmap level). The initial value is 1000.
     *
     *  - {@see GL45::GL_TEXTURE_MAX_LEVEL}: Sets the index of the highest
     *    defined mipmap level. This is an integer value. The initial value is
     *    1000.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_R}: Sets the swizzle that will be
     *    applied to the r component of a texel before it is returned to the
     *    shader.
     *    Valid values for $param are {@see GL45::GL_RED}, {@see
     *    GL45::GL_GREEN}, {@see GL45::GL_BLUE},
     *    {@see GL45::GL_ALPHA}, {@see GL45::GL_ZERO} and {@see GL45::GL_ONE}.
     *    If {@see GL45::GL_TEXTURE_SWIZZLE_R} is
     *    {@see GL45::GL_RED}, the value for r will be taken from the first
     *    channel of the fetched texel. If
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R} is {@see GL45::GL_GREEN}, the value
     *    for r will be taken from the second
     *    channel of the fetched texel. If {@see GL45::GL_TEXTURE_SWIZZLE_R} is
     *    {@see GL45::GL_BLUE}, the value for r
     *    will be taken from the third channel of the fetched texel. If {@see
     *    GL45::GL_TEXTURE_SWIZZLE_R} is
     *    {@see GL45::GL_ALPHA}, the value for r will be taken from the fourth
     *    channel of the fetched texel. If
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R} is {@see GL45::GL_ZERO}, the value
     *    for r will be subtituted with 0.0. If
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R} is {@see GL45::GL_ONE}, the value
     *    for r will be subtituted with 1.0. The
     *    initial value is {@see GL45::GL_RED}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_G}: Sets the swizzle that will be
     *    applied to the g component of a texel before it is returned to the
     *    shader.
     *    Valid values for $param and their effects are similar to those of
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R}. The
     *    initial value is {@see GL45::GL_GREEN}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_B}: Sets the swizzle that will be
     *    applied to the b component of a texel before it is returned to the
     *    shader.
     *    Valid values for $param and their effects are similar to those of
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R}. The
     *    initial value is {@see GL45::GL_BLUE}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_A}: Sets the swizzle that will be
     *    applied to the a component of a texel before it is returned to the
     *    shader.
     *    Valid values for $param and their effects are similar to those of
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R}. The
     *    initial value is {@see GL45::GL_ALPHA}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_RGBA}: Sets the swizzles that will be
     *    applied to the r, g, b, and a components of a texel before they are
     *    returned
     *    to the shader. Valid values for $params and their effects are similar
     *    to those of
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R}, except that all channels are
     *    specified simultaneously. Setting the value of
     *    {@see GL45::GL_TEXTURE_SWIZZLE_RGBA} is equivalent (assuming no errors
     *    are generated) to setting the
     *    parameters of each of {@see GL45::GL_TEXTURE_SWIZZLE_R}, {@see
     *    GL45::GL_TEXTURE_SWIZZLE_G},
     *    {@see GL45::GL_TEXTURE_SWIZZLE_B}, and {@see
     *    GL45::GL_TEXTURE_SWIZZLE_A} successively.
     *
     *  - {@see GL45::GL_TEXTURE_WRAP_S}: Sets the wrap parameter for texture
     *    coordinate s to either {@see GL45::GL_CLAMP_TO_EDGE},
     *    {@see GL45::GL_CLAMP_TO_BORDER}, {@see GL45::GL_MIRRORED_REPEAT},
     *    {@see GL45::GL_REPEAT}, or
     *    {@see GL45::GL_MIRROR_CLAMP_TO_EDGE}. {@see GL45::GL_CLAMP_TO_EDGE}
     *    causes s coordinates to be clamped to the
     *    range       1  2N      1 -    1  2N       , where N is the size of the
     *    texture in the direction of clamping.
     *    {@see GL45::GL_CLAMP_TO_BORDER} evaluates s coordinates in a similar
     *    manner to {@see GL45::GL_CLAMP_TO_EDGE}.
     *    However, in cases where clamping would have occurred in {@see
     *    GL45::GL_CLAMP_TO_EDGE} mode, the fetched texel
     *    data is substituted with the values specified by {@see
     *    GL45::GL_TEXTURE_BORDER_COLOR}. {@see GL45::GL_REPEAT}
     *    causes the integer part of the s coordinate to be ignored; the GL uses
     *    only the fractional part, thereby
     *    creating a repeating pattern. {@see GL45::GL_MIRRORED_REPEAT} causes
     *    the s coordinate to be set to the
     *    fractional part of the texture coordinate if the integer part of s is
     *    even; if the integer part of s is odd,
     *    then the s texture coordinate is set to    1 -  frac &amp;af;  s    ,
     *    where    frac &amp;af;  s    represents
     *    the fractional part of s. {@see GL45::GL_MIRROR_CLAMP_TO_EDGE} causes
     *    the s coordinate to be repeated as for
     *    {@see GL45::GL_MIRRORED_REPEAT} for one repetition of the texture, at
     *    which point the coordinate to be clamped
     *    as in {@see GL45::GL_CLAMP_TO_EDGE}. Initially, {@see
     *    GL45::GL_TEXTURE_WRAP_S} is set to
     *    {@see GL45::GL_REPEAT}.
     *
     *  - {@see GL45::GL_TEXTURE_WRAP_T}: Sets the wrap parameter for texture
     *    coordinate t to either {@see GL45::GL_CLAMP_TO_EDGE},
     *    {@see GL45::GL_CLAMP_TO_BORDER}, {@see GL45::GL_MIRRORED_REPEAT},
     *    {@see GL45::GL_REPEAT}, or
     *    {@see GL45::GL_MIRROR_CLAMP_TO_EDGE}. See the discussion under {@see
     *    GL45::GL_TEXTURE_WRAP_S}. Initially,
     *    {@see GL45::GL_TEXTURE_WRAP_T} is set to {@see GL45::GL_REPEAT}.
     *
     *  - {@see GL45::GL_TEXTURE_WRAP_R}: Sets the wrap parameter for texture
     *    coordinate r to either {@see GL45::GL_CLAMP_TO_EDGE},
     *    {@see GL45::GL_CLAMP_TO_BORDER}, {@see GL45::GL_MIRRORED_REPEAT},
     *    {@see GL45::GL_REPEAT}, or
     *    {@see GL45::GL_MIRROR_CLAMP_TO_EDGE}. See the discussion under {@see
     *    GL45::GL_TEXTURE_WRAP_S}. Initially,
     *    {@see GL45::GL_TEXTURE_WRAP_R} is set to {@see GL45::GL_REPEAT}.
     *
     * @see http://docs.gl/gl2/glGetBufferParameteriv
     * @see http://docs.gl/gl2/glTexParameter
     * @see http://docs.gl/gl4/glTexParameter
     * @since 4.5
     * @param int $texture
     * @param int $pname
     * @param CData|null $params
     * @return void
     */
    public function textureParameterIuiv(int $texture, int $pname, ?CData $params): void
    {
        $__proc = $this->proc('glTextureParameterIuiv',
            'void (*)(GLuint texture, GLenum pname, const GLuint *params)');
        $__proc($texture, $pname, $params);
    }

    /**
     * {@see GL45::texParameter} and {@see GL45::textureParameter} assign the value or values in $params to the
     * texture parameter specified as $pname. For {@see GL45::texParameter}, $target defines the target texture,
     * either {@see GL45::GL_TEXTURE_1D}, {@see GL45::GL_TEXTURE_1D_ARRAY}, {@see GL45::GL_TEXTURE_2D},
     * {@see GL45::GL_TEXTURE_2D_ARRAY}, {@see GL45::GL_TEXTURE_2D_MULTISAMPLE},
     * {@see GL45::GL_TEXTURE_2D_MULTISAMPLE_ARRAY}, {@see GL45::GL_TEXTURE_3D}, {@see GL45::GL_TEXTURE_CUBE_MAP},
     * {@see GL45::GL_TEXTURE_CUBE_MAP_ARRAY}, or {@see GL45::GL_TEXTURE_RECTANGLE}. The following symbols are
     * accepted in $pname:
     *
     *  - {@see GL45::GL_DEPTH_STENCIL_TEXTURE_MODE}: Specifies the mode used to
     *    read from depth-stencil format textures. $params must be one of
     *    {@see GL45::GL_DEPTH_COMPONENT} or {@see GL45::GL_STENCIL_INDEX}. If
     *    the depth stencil mode is
     *    {@see GL45::GL_DEPTH_COMPONENT}, then reads from depth-stencil format
     *    textures will return the depth component
     *    of the texel in Rt and the stencil component will be discarded. If the
     *    depth stencil mode is
     *    {@see GL45::GL_STENCIL_INDEX} then the stencil component is returned
     *    in Rt and the depth component is
     *    discarded. The initial value is {@see GL45::GL_DEPTH_COMPONENT}.
     *
     *  - {@see GL45::GL_TEXTURE_BASE_LEVEL}: Specifies the index of the lowest
     *    defined mipmap level. This is an integer value. The initial value is
     *    0.
     *
     *  - {@see GL45::GL_TEXTURE_BORDER_COLOR}: The data in $params specifies
     *    four values that define the border values that should be used for
     *    border
     *    texels. If a texel is sampled from the border of the texture, the
     *    values of
     *    {@see GL45::GL_TEXTURE_BORDER_COLOR} are interpreted as an RGBA color
     *    to match the texture's internal format
     *    and substituted for the non-existent texel data. If the texture
     *    contains depth components, the first component
     *    of {@see GL45::GL_TEXTURE_BORDER_COLOR} is interpreted as a depth
     *    value. The initial value is     0.0 , 0.0 ,
     *    0.0 , 0.0    .   If the values for {@see
     *    GL45::GL_TEXTURE_BORDER_COLOR} are specified with
     *    {@see GL45::texParameterIiv} or {@see GL45::texParameterIuiv}, the
     *    values are stored unmodified with an
     *    internal data type of integer. If specified with {@see
     *    GL45::texParameteriv}, they are converted to floating
     *    point with the following equation:   f =   2 c + 1    2 b  - 1    . If
     *    specified with
     *    {@see GL45::texParameterfv}, they are stored unmodified as
     *    floating-point values.
     *
     *  - {@see GL45::GL_TEXTURE_COMPARE_FUNC}: Specifies the comparison
     *    operator used when {@see GL45::GL_TEXTURE_COMPARE_MODE} is set to
     *    {@see GL45::GL_COMPARE_REF_TO_TEXTURE}. Permissible values are:
     *     Texture Comparison Function
     *    Computed result        {@see GL45::GL_LEQUAL}      result =     1.0
     *    0.0   &amp;it;     r &lt;=  D t       r
     *    &gt;  D t              {@see GL45::GL_GEQUAL}      result =     1.0
     *    0.0   &amp;it;     r &gt;=  D t       r
     *    &lt;  D t              {@see GL45::GL_LESS}      result =     1.0
     *    0.0   &amp;it;     r &lt;  D t       r
     *    &gt;=  D t              {@see GL45::GL_GREATER}      result =     1.0
     *     0.0   &amp;it;     r &gt;  D t       r
     *    &lt;=  D t              {@see GL45::GL_EQUAL}      result =     1.0
     *    0.0   &amp;it;     r =  D t       r ≠
     *    D t              {@see GL45::GL_NOTEQUAL}      result =     1.0   0.0
     *     &amp;it;     r ≠  D t       r =  D t
     *                 {@see GL45::GL_ALWAYS}      result = 1.0        {@see
     *    GL45::GL_NEVER}      result = 0.0
     *    where r is the current interpolated texture coordinate, and   D t   is
     *    the depth texture value sampled from
     *    the currently bound depth texture. result is assigned to the red
     *    channel.
     *
     *  - {@see GL45::GL_TEXTURE_COMPARE_MODE}: Specifies the texture comparison
     *    mode for currently bound depth textures. That is, a texture whose
     *    internal
     *    format is {@see GL45::GL_DEPTH_COMPONENT_*}; see {@see
     *    GL45::texImage2D}) Permissible values are:
     *    {@see GL45::GL_COMPARE_REF_TO_TEXTURE}   Specifies that the
     *    interpolated and clamped r texture coordinate
     *    should be compared to the value in the currently bound depth texture.
     *    See the discussion of
     *    {@see GL45::GL_TEXTURE_COMPARE_FUNC} for details of how the comparison
     *    is evaluated. The result of the
     *    comparison is assigned to the red channel.     {@see GL45::GL_NONE}
     *    Specifies that the red channel should be
     *    assigned the appropriate value from the currently bound depth texture.
     *
     *  - {@see GL45::GL_TEXTURE_LOD_BIAS}: $params specifies a fixed bias value
     *    that is to be added to the level-of-detail parameter for the texture
     *    before texture sampling. The specified value is added to the
     *    shader-supplied bias value (if any) and
     *    subsequently clamped into the implementation-defined range     -  bias
     *    max        bias max      , where   bias
     *    max    is the value of the implementation defined constant {@see
     *    GL45::GL_MAX_TEXTURE_LOD_BIAS}. The initial
     *    value is 0.0.
     *
     *  - {@see GL45::GL_TEXTURE_MIN_FILTER}: The texture minifying function is
     *    used whenever the level-of-detail function used when sampling from the
     *    texture determines that the texture should be minified. There are six
     *    defined minifying functions. Two of them
     *    use either the nearest texture elements or a weighted average of
     *    multiple texture elements to compute the
     *    texture value. The other four use mipmaps.   A mipmap is an ordered
     *    set of arrays representing the same image
     *    at progressively lower resolutions. If the texture has dimensions    2
     *    n  × 2 m   , there are     max
     *    &amp;af;  n m   + 1   mipmaps. The first mipmap is the original
     *    texture, with dimensions    2 n  × 2 m   .
     *    Each subsequent mipmap has dimensions    2   k - 1    × 2   l - 1
     *    , where    2 k  × 2 l    are the
     *    dimensions of the previous mipmap, until either    k = 0   or    l = 0
     *     . At that point, subsequent mipmaps
     *    have dimension    1 × 2   l - 1      or    2   k - 1    × 1   until
     *    the final mipmap, which has dimension
     *    1 × 1  . To define the mipmaps, call {@see GL45::texImage1D}, {@see
     *    GL45::texImage2D},
     *    {@see GL45::texImage3D}, {@see GL45::copyTexImage1D}, or {@see
     *    GL45::copyTexImage2D} with the level
     *    argument indicating the order of the mipmaps. Level 0 is the original
     *    texture; level    max &amp;af;  n m
     *    is the final    1 × 1   mipmap.   $params supplies a function for
     *    minifying the texture as one of the
     *    following:   {@see GL45::GL_NEAREST}   Returns the value of the
     *    texture element that is nearest (in Manhattan
     *    distance) to the specified texture coordinates.     {@see
     *    GL45::GL_LINEAR}   Returns the weighted average of
     *    the four texture elements that are closest to the specified texture
     *    coordinates. These can include items
     *    wrapped or repeated from other parts of a texture, depending on the
     *    values of {@see GL45::GL_TEXTURE_WRAP_S}
     *    and {@see GL45::GL_TEXTURE_WRAP_T}, and on the exact mapping.
     *    {@see GL45::GL_NEAREST_MIPMAP_NEAREST}
     *    Chooses the mipmap that most closely matches the size of the pixel
     *    being textured and uses the
     *    {@see GL45::GL_NEAREST} criterion (the texture element closest to the
     *    specified texture coordinates) to
     *    produce a texture value.     {@see GL45::GL_LINEAR_MIPMAP_NEAREST}
     *    Chooses the mipmap that most closely
     *    matches the size of the pixel being textured and uses the {@see
     *    GL45::GL_LINEAR} criterion (a weighted average
     *    of the four texture elements that are closest to the specified texture
     *    coordinates) to produce a texture
     *    value.     {@see GL45::GL_NEAREST_MIPMAP_LINEAR}   Chooses the two
     *    mipmaps that most closely match the size of
     *    the pixel being textured and uses the {@see GL45::GL_NEAREST}
     *    criterion (the texture element closest to the
     *    specified texture coordinates ) to produce a texture value from each
     *    mipmap. The final texture value is a
     *    weighted average of those two values.     {@see
     *    GL45::GL_LINEAR_MIPMAP_LINEAR}   Chooses the two mipmaps that
     *    most closely match the size of the pixel being textured and uses the
     *    {@see GL45::GL_LINEAR} criterion (a
     *    weighted average of the texture elements that are closest to the
     *    specified texture coordinates) to produce a
     *    texture value from each mipmap. The final texture value is a weighted
     *    average of those two values.       As
     *    more texture elements are sampled in the minification process, fewer
     *    aliasing artifacts will be apparent.
     *    While the {@see GL45::GL_NEAREST} and {@see GL45::GL_LINEAR}
     *    minification functions can be faster than the
     *    other four, they sample only one or multiple texture elements to
     *    determine the texture value of the pixel
     *    being rendered and can produce moire patterns or ragged transitions.
     *    The initial value of
     *    {@see GL45::GL_TEXTURE_MIN_FILTER} is {@see
     *    GL45::GL_NEAREST_MIPMAP_LINEAR}.
     *
     *  - {@see GL45::GL_TEXTURE_MAG_FILTER}: The texture magnification function
     *    is used whenever the level-of-detail function used when sampling from
     *    the
     *    texture determines that the texture should be magified. It sets the
     *    texture magnification function to either
     *    {@see GL45::GL_NEAREST} or {@see GL45::GL_LINEAR} (see below). {@see
     *    GL45::GL_NEAREST} is generally faster
     *    than {@see GL45::GL_LINEAR}, but it can produce textured images with
     *    sharper edges because the transition
     *    between texture elements is not as smooth. The initial value of {@see
     *    GL45::GL_TEXTURE_MAG_FILTER} is
     *    {@see GL45::GL_LINEAR}.   {@see GL45::GL_NEAREST}   Returns the value
     *    of the texture element that is nearest
     *    (in Manhattan distance) to the specified texture coordinates.
     *    {@see GL45::GL_LINEAR}   Returns the
     *    weighted average of the texture elements that are closest to the
     *    specified texture coordinates. These can
     *    include items wrapped or repeated from other parts of a texture,
     *    depending on the values of
     *    {@see GL45::GL_TEXTURE_WRAP_S} and {@see GL45::GL_TEXTURE_WRAP_T}, and
     *    on the exact mapping.
     *
     *  - {@see GL45::GL_TEXTURE_MIN_LOD}: Sets the minimum level-of-detail
     *    parameter. This floating-point value limits the selection of highest
     *    resolution mipmap (lowest mipmap level). The initial value is -1000.
     *
     *  - {@see GL45::GL_TEXTURE_MAX_LOD}: Sets the maximum level-of-detail
     *    parameter. This floating-point value limits the selection of the
     *    lowest
     *    resolution mipmap (highest mipmap level). The initial value is 1000.
     *
     *  - {@see GL45::GL_TEXTURE_MAX_LEVEL}: Sets the index of the highest
     *    defined mipmap level. This is an integer value. The initial value is
     *    1000.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_R}: Sets the swizzle that will be
     *    applied to the r component of a texel before it is returned to the
     *    shader.
     *    Valid values for $param are {@see GL45::GL_RED}, {@see
     *    GL45::GL_GREEN}, {@see GL45::GL_BLUE},
     *    {@see GL45::GL_ALPHA}, {@see GL45::GL_ZERO} and {@see GL45::GL_ONE}.
     *    If {@see GL45::GL_TEXTURE_SWIZZLE_R} is
     *    {@see GL45::GL_RED}, the value for r will be taken from the first
     *    channel of the fetched texel. If
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R} is {@see GL45::GL_GREEN}, the value
     *    for r will be taken from the second
     *    channel of the fetched texel. If {@see GL45::GL_TEXTURE_SWIZZLE_R} is
     *    {@see GL45::GL_BLUE}, the value for r
     *    will be taken from the third channel of the fetched texel. If {@see
     *    GL45::GL_TEXTURE_SWIZZLE_R} is
     *    {@see GL45::GL_ALPHA}, the value for r will be taken from the fourth
     *    channel of the fetched texel. If
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R} is {@see GL45::GL_ZERO}, the value
     *    for r will be subtituted with 0.0. If
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R} is {@see GL45::GL_ONE}, the value
     *    for r will be subtituted with 1.0. The
     *    initial value is {@see GL45::GL_RED}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_G}: Sets the swizzle that will be
     *    applied to the g component of a texel before it is returned to the
     *    shader.
     *    Valid values for $param and their effects are similar to those of
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R}. The
     *    initial value is {@see GL45::GL_GREEN}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_B}: Sets the swizzle that will be
     *    applied to the b component of a texel before it is returned to the
     *    shader.
     *    Valid values for $param and their effects are similar to those of
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R}. The
     *    initial value is {@see GL45::GL_BLUE}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_A}: Sets the swizzle that will be
     *    applied to the a component of a texel before it is returned to the
     *    shader.
     *    Valid values for $param and their effects are similar to those of
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R}. The
     *    initial value is {@see GL45::GL_ALPHA}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_RGBA}: Sets the swizzles that will be
     *    applied to the r, g, b, and a components of a texel before they are
     *    returned
     *    to the shader. Valid values for $params and their effects are similar
     *    to those of
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R}, except that all channels are
     *    specified simultaneously. Setting the value of
     *    {@see GL45::GL_TEXTURE_SWIZZLE_RGBA} is equivalent (assuming no errors
     *    are generated) to setting the
     *    parameters of each of {@see GL45::GL_TEXTURE_SWIZZLE_R}, {@see
     *    GL45::GL_TEXTURE_SWIZZLE_G},
     *    {@see GL45::GL_TEXTURE_SWIZZLE_B}, and {@see
     *    GL45::GL_TEXTURE_SWIZZLE_A} successively.
     *
     *  - {@see GL45::GL_TEXTURE_WRAP_S}: Sets the wrap parameter for texture
     *    coordinate s to either {@see GL45::GL_CLAMP_TO_EDGE},
     *    {@see GL45::GL_CLAMP_TO_BORDER}, {@see GL45::GL_MIRRORED_REPEAT},
     *    {@see GL45::GL_REPEAT}, or
     *    {@see GL45::GL_MIRROR_CLAMP_TO_EDGE}. {@see GL45::GL_CLAMP_TO_EDGE}
     *    causes s coordinates to be clamped to the
     *    range       1  2N      1 -    1  2N       , where N is the size of the
     *    texture in the direction of clamping.
     *    {@see GL45::GL_CLAMP_TO_BORDER} evaluates s coordinates in a similar
     *    manner to {@see GL45::GL_CLAMP_TO_EDGE}.
     *    However, in cases where clamping would have occurred in {@see
     *    GL45::GL_CLAMP_TO_EDGE} mode, the fetched texel
     *    data is substituted with the values specified by {@see
     *    GL45::GL_TEXTURE_BORDER_COLOR}. {@see GL45::GL_REPEAT}
     *    causes the integer part of the s coordinate to be ignored; the GL uses
     *    only the fractional part, thereby
     *    creating a repeating pattern. {@see GL45::GL_MIRRORED_REPEAT} causes
     *    the s coordinate to be set to the
     *    fractional part of the texture coordinate if the integer part of s is
     *    even; if the integer part of s is odd,
     *    then the s texture coordinate is set to    1 -  frac &amp;af;  s    ,
     *    where    frac &amp;af;  s    represents
     *    the fractional part of s. {@see GL45::GL_MIRROR_CLAMP_TO_EDGE} causes
     *    the s coordinate to be repeated as for
     *    {@see GL45::GL_MIRRORED_REPEAT} for one repetition of the texture, at
     *    which point the coordinate to be clamped
     *    as in {@see GL45::GL_CLAMP_TO_EDGE}. Initially, {@see
     *    GL45::GL_TEXTURE_WRAP_S} is set to
     *    {@see GL45::GL_REPEAT}.
     *
     *  - {@see GL45::GL_TEXTURE_WRAP_T}: Sets the wrap parameter for texture
     *    coordinate t to either {@see GL45::GL_CLAMP_TO_EDGE},
     *    {@see GL45::GL_CLAMP_TO_BORDER}, {@see GL45::GL_MIRRORED_REPEAT},
     *    {@see GL45::GL_REPEAT}, or
     *    {@see GL45::GL_MIRROR_CLAMP_TO_EDGE}. See the discussion under {@see
     *    GL45::GL_TEXTURE_WRAP_S}. Initially,
     *    {@see GL45::GL_TEXTURE_WRAP_T} is set to {@see GL45::GL_REPEAT}.
     *
     *  - {@see GL45::GL_TEXTURE_WRAP_R}: Sets the wrap parameter for texture
     *    coordinate r to either {@see GL45::GL_CLAMP_TO_EDGE},
     *    {@see GL45::GL_CLAMP_TO_BORDER}, {@see GL45::GL_MIRRORED_REPEAT},
     *    {@see GL45::GL_REPEAT}, or
     *    {@see GL45::GL_MIRROR_CLAMP_TO_EDGE}. See the discussion under {@see
     *    GL45::GL_TEXTURE_WRAP_S}. Initially,
     *    {@see GL45::GL_TEXTURE_WRAP_R} is set to {@see GL45::GL_REPEAT}.
     *
     * @see http://docs.gl/gl2/glTexParameter
     * @see http://docs.gl/gl4/glTexParameter
     * @since 4.5
     * @param int $texture
     * @param int $pname
     * @param float $param
     * @return void
     */
    public function textureParameterf(int $texture, int $pname, float $param): void
    {
        $__proc = $this->proc('glTextureParameterf', 'void (*)(GLuint texture, GLenum pname, GLfloat param)');
        $__proc($texture, $pname, $param);
    }

    /**
     * {@see GL45::texParameter} and {@see GL45::textureParameter} assign the value or values in $params to the
     * texture parameter specified as $pname. For {@see GL45::texParameter}, $target defines the target texture,
     * either {@see GL45::GL_TEXTURE_1D}, {@see GL45::GL_TEXTURE_1D_ARRAY}, {@see GL45::GL_TEXTURE_2D},
     * {@see GL45::GL_TEXTURE_2D_ARRAY}, {@see GL45::GL_TEXTURE_2D_MULTISAMPLE},
     * {@see GL45::GL_TEXTURE_2D_MULTISAMPLE_ARRAY}, {@see GL45::GL_TEXTURE_3D}, {@see GL45::GL_TEXTURE_CUBE_MAP},
     * {@see GL45::GL_TEXTURE_CUBE_MAP_ARRAY}, or {@see GL45::GL_TEXTURE_RECTANGLE}. The following symbols are
     * accepted in $pname:
     *
     *  - {@see GL45::GL_DEPTH_STENCIL_TEXTURE_MODE}: Specifies the mode used to
     *    read from depth-stencil format textures. $params must be one of
     *    {@see GL45::GL_DEPTH_COMPONENT} or {@see GL45::GL_STENCIL_INDEX}. If
     *    the depth stencil mode is
     *    {@see GL45::GL_DEPTH_COMPONENT}, then reads from depth-stencil format
     *    textures will return the depth component
     *    of the texel in Rt and the stencil component will be discarded. If the
     *    depth stencil mode is
     *    {@see GL45::GL_STENCIL_INDEX} then the stencil component is returned
     *    in Rt and the depth component is
     *    discarded. The initial value is {@see GL45::GL_DEPTH_COMPONENT}.
     *
     *  - {@see GL45::GL_TEXTURE_BASE_LEVEL}: Specifies the index of the lowest
     *    defined mipmap level. This is an integer value. The initial value is
     *    0.
     *
     *  - {@see GL45::GL_TEXTURE_BORDER_COLOR}: The data in $params specifies
     *    four values that define the border values that should be used for
     *    border
     *    texels. If a texel is sampled from the border of the texture, the
     *    values of
     *    {@see GL45::GL_TEXTURE_BORDER_COLOR} are interpreted as an RGBA color
     *    to match the texture's internal format
     *    and substituted for the non-existent texel data. If the texture
     *    contains depth components, the first component
     *    of {@see GL45::GL_TEXTURE_BORDER_COLOR} is interpreted as a depth
     *    value. The initial value is     0.0 , 0.0 ,
     *    0.0 , 0.0    .   If the values for {@see
     *    GL45::GL_TEXTURE_BORDER_COLOR} are specified with
     *    {@see GL45::texParameterIiv} or {@see GL45::texParameterIuiv}, the
     *    values are stored unmodified with an
     *    internal data type of integer. If specified with {@see
     *    GL45::texParameteriv}, they are converted to floating
     *    point with the following equation:   f =   2 c + 1    2 b  - 1    . If
     *    specified with
     *    {@see GL45::texParameterfv}, they are stored unmodified as
     *    floating-point values.
     *
     *  - {@see GL45::GL_TEXTURE_COMPARE_FUNC}: Specifies the comparison
     *    operator used when {@see GL45::GL_TEXTURE_COMPARE_MODE} is set to
     *    {@see GL45::GL_COMPARE_REF_TO_TEXTURE}. Permissible values are:
     *     Texture Comparison Function
     *    Computed result        {@see GL45::GL_LEQUAL}      result =     1.0
     *    0.0   &amp;it;     r &lt;=  D t       r
     *    &gt;  D t              {@see GL45::GL_GEQUAL}      result =     1.0
     *    0.0   &amp;it;     r &gt;=  D t       r
     *    &lt;  D t              {@see GL45::GL_LESS}      result =     1.0
     *    0.0   &amp;it;     r &lt;  D t       r
     *    &gt;=  D t              {@see GL45::GL_GREATER}      result =     1.0
     *     0.0   &amp;it;     r &gt;  D t       r
     *    &lt;=  D t              {@see GL45::GL_EQUAL}      result =     1.0
     *    0.0   &amp;it;     r =  D t       r ≠
     *    D t              {@see GL45::GL_NOTEQUAL}      result =     1.0   0.0
     *     &amp;it;     r ≠  D t       r =  D t
     *                 {@see GL45::GL_ALWAYS}      result = 1.0        {@see
     *    GL45::GL_NEVER}      result = 0.0
     *    where r is the current interpolated texture coordinate, and   D t   is
     *    the depth texture value sampled from
     *    the currently bound depth texture. result is assigned to the red
     *    channel.
     *
     *  - {@see GL45::GL_TEXTURE_COMPARE_MODE}: Specifies the texture comparison
     *    mode for currently bound depth textures. That is, a texture whose
     *    internal
     *    format is {@see GL45::GL_DEPTH_COMPONENT_*}; see {@see
     *    GL45::texImage2D}) Permissible values are:
     *    {@see GL45::GL_COMPARE_REF_TO_TEXTURE}   Specifies that the
     *    interpolated and clamped r texture coordinate
     *    should be compared to the value in the currently bound depth texture.
     *    See the discussion of
     *    {@see GL45::GL_TEXTURE_COMPARE_FUNC} for details of how the comparison
     *    is evaluated. The result of the
     *    comparison is assigned to the red channel.     {@see GL45::GL_NONE}
     *    Specifies that the red channel should be
     *    assigned the appropriate value from the currently bound depth texture.
     *
     *  - {@see GL45::GL_TEXTURE_LOD_BIAS}: $params specifies a fixed bias value
     *    that is to be added to the level-of-detail parameter for the texture
     *    before texture sampling. The specified value is added to the
     *    shader-supplied bias value (if any) and
     *    subsequently clamped into the implementation-defined range     -  bias
     *    max        bias max      , where   bias
     *    max    is the value of the implementation defined constant {@see
     *    GL45::GL_MAX_TEXTURE_LOD_BIAS}. The initial
     *    value is 0.0.
     *
     *  - {@see GL45::GL_TEXTURE_MIN_FILTER}: The texture minifying function is
     *    used whenever the level-of-detail function used when sampling from the
     *    texture determines that the texture should be minified. There are six
     *    defined minifying functions. Two of them
     *    use either the nearest texture elements or a weighted average of
     *    multiple texture elements to compute the
     *    texture value. The other four use mipmaps.   A mipmap is an ordered
     *    set of arrays representing the same image
     *    at progressively lower resolutions. If the texture has dimensions    2
     *    n  × 2 m   , there are     max
     *    &amp;af;  n m   + 1   mipmaps. The first mipmap is the original
     *    texture, with dimensions    2 n  × 2 m   .
     *    Each subsequent mipmap has dimensions    2   k - 1    × 2   l - 1
     *    , where    2 k  × 2 l    are the
     *    dimensions of the previous mipmap, until either    k = 0   or    l = 0
     *     . At that point, subsequent mipmaps
     *    have dimension    1 × 2   l - 1      or    2   k - 1    × 1   until
     *    the final mipmap, which has dimension
     *    1 × 1  . To define the mipmaps, call {@see GL45::texImage1D}, {@see
     *    GL45::texImage2D},
     *    {@see GL45::texImage3D}, {@see GL45::copyTexImage1D}, or {@see
     *    GL45::copyTexImage2D} with the level
     *    argument indicating the order of the mipmaps. Level 0 is the original
     *    texture; level    max &amp;af;  n m
     *    is the final    1 × 1   mipmap.   $params supplies a function for
     *    minifying the texture as one of the
     *    following:   {@see GL45::GL_NEAREST}   Returns the value of the
     *    texture element that is nearest (in Manhattan
     *    distance) to the specified texture coordinates.     {@see
     *    GL45::GL_LINEAR}   Returns the weighted average of
     *    the four texture elements that are closest to the specified texture
     *    coordinates. These can include items
     *    wrapped or repeated from other parts of a texture, depending on the
     *    values of {@see GL45::GL_TEXTURE_WRAP_S}
     *    and {@see GL45::GL_TEXTURE_WRAP_T}, and on the exact mapping.
     *    {@see GL45::GL_NEAREST_MIPMAP_NEAREST}
     *    Chooses the mipmap that most closely matches the size of the pixel
     *    being textured and uses the
     *    {@see GL45::GL_NEAREST} criterion (the texture element closest to the
     *    specified texture coordinates) to
     *    produce a texture value.     {@see GL45::GL_LINEAR_MIPMAP_NEAREST}
     *    Chooses the mipmap that most closely
     *    matches the size of the pixel being textured and uses the {@see
     *    GL45::GL_LINEAR} criterion (a weighted average
     *    of the four texture elements that are closest to the specified texture
     *    coordinates) to produce a texture
     *    value.     {@see GL45::GL_NEAREST_MIPMAP_LINEAR}   Chooses the two
     *    mipmaps that most closely match the size of
     *    the pixel being textured and uses the {@see GL45::GL_NEAREST}
     *    criterion (the texture element closest to the
     *    specified texture coordinates ) to produce a texture value from each
     *    mipmap. The final texture value is a
     *    weighted average of those two values.     {@see
     *    GL45::GL_LINEAR_MIPMAP_LINEAR}   Chooses the two mipmaps that
     *    most closely match the size of the pixel being textured and uses the
     *    {@see GL45::GL_LINEAR} criterion (a
     *    weighted average of the texture elements that are closest to the
     *    specified texture coordinates) to produce a
     *    texture value from each mipmap. The final texture value is a weighted
     *    average of those two values.       As
     *    more texture elements are sampled in the minification process, fewer
     *    aliasing artifacts will be apparent.
     *    While the {@see GL45::GL_NEAREST} and {@see GL45::GL_LINEAR}
     *    minification functions can be faster than the
     *    other four, they sample only one or multiple texture elements to
     *    determine the texture value of the pixel
     *    being rendered and can produce moire patterns or ragged transitions.
     *    The initial value of
     *    {@see GL45::GL_TEXTURE_MIN_FILTER} is {@see
     *    GL45::GL_NEAREST_MIPMAP_LINEAR}.
     *
     *  - {@see GL45::GL_TEXTURE_MAG_FILTER}: The texture magnification function
     *    is used whenever the level-of-detail function used when sampling from
     *    the
     *    texture determines that the texture should be magified. It sets the
     *    texture magnification function to either
     *    {@see GL45::GL_NEAREST} or {@see GL45::GL_LINEAR} (see below). {@see
     *    GL45::GL_NEAREST} is generally faster
     *    than {@see GL45::GL_LINEAR}, but it can produce textured images with
     *    sharper edges because the transition
     *    between texture elements is not as smooth. The initial value of {@see
     *    GL45::GL_TEXTURE_MAG_FILTER} is
     *    {@see GL45::GL_LINEAR}.   {@see GL45::GL_NEAREST}   Returns the value
     *    of the texture element that is nearest
     *    (in Manhattan distance) to the specified texture coordinates.
     *    {@see GL45::GL_LINEAR}   Returns the
     *    weighted average of the texture elements that are closest to the
     *    specified texture coordinates. These can
     *    include items wrapped or repeated from other parts of a texture,
     *    depending on the values of
     *    {@see GL45::GL_TEXTURE_WRAP_S} and {@see GL45::GL_TEXTURE_WRAP_T}, and
     *    on the exact mapping.
     *
     *  - {@see GL45::GL_TEXTURE_MIN_LOD}: Sets the minimum level-of-detail
     *    parameter. This floating-point value limits the selection of highest
     *    resolution mipmap (lowest mipmap level). The initial value is -1000.
     *
     *  - {@see GL45::GL_TEXTURE_MAX_LOD}: Sets the maximum level-of-detail
     *    parameter. This floating-point value limits the selection of the
     *    lowest
     *    resolution mipmap (highest mipmap level). The initial value is 1000.
     *
     *  - {@see GL45::GL_TEXTURE_MAX_LEVEL}: Sets the index of the highest
     *    defined mipmap level. This is an integer value. The initial value is
     *    1000.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_R}: Sets the swizzle that will be
     *    applied to the r component of a texel before it is returned to the
     *    shader.
     *    Valid values for $param are {@see GL45::GL_RED}, {@see
     *    GL45::GL_GREEN}, {@see GL45::GL_BLUE},
     *    {@see GL45::GL_ALPHA}, {@see GL45::GL_ZERO} and {@see GL45::GL_ONE}.
     *    If {@see GL45::GL_TEXTURE_SWIZZLE_R} is
     *    {@see GL45::GL_RED}, the value for r will be taken from the first
     *    channel of the fetched texel. If
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R} is {@see GL45::GL_GREEN}, the value
     *    for r will be taken from the second
     *    channel of the fetched texel. If {@see GL45::GL_TEXTURE_SWIZZLE_R} is
     *    {@see GL45::GL_BLUE}, the value for r
     *    will be taken from the third channel of the fetched texel. If {@see
     *    GL45::GL_TEXTURE_SWIZZLE_R} is
     *    {@see GL45::GL_ALPHA}, the value for r will be taken from the fourth
     *    channel of the fetched texel. If
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R} is {@see GL45::GL_ZERO}, the value
     *    for r will be subtituted with 0.0. If
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R} is {@see GL45::GL_ONE}, the value
     *    for r will be subtituted with 1.0. The
     *    initial value is {@see GL45::GL_RED}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_G}: Sets the swizzle that will be
     *    applied to the g component of a texel before it is returned to the
     *    shader.
     *    Valid values for $param and their effects are similar to those of
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R}. The
     *    initial value is {@see GL45::GL_GREEN}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_B}: Sets the swizzle that will be
     *    applied to the b component of a texel before it is returned to the
     *    shader.
     *    Valid values for $param and their effects are similar to those of
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R}. The
     *    initial value is {@see GL45::GL_BLUE}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_A}: Sets the swizzle that will be
     *    applied to the a component of a texel before it is returned to the
     *    shader.
     *    Valid values for $param and their effects are similar to those of
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R}. The
     *    initial value is {@see GL45::GL_ALPHA}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_RGBA}: Sets the swizzles that will be
     *    applied to the r, g, b, and a components of a texel before they are
     *    returned
     *    to the shader. Valid values for $params and their effects are similar
     *    to those of
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R}, except that all channels are
     *    specified simultaneously. Setting the value of
     *    {@see GL45::GL_TEXTURE_SWIZZLE_RGBA} is equivalent (assuming no errors
     *    are generated) to setting the
     *    parameters of each of {@see GL45::GL_TEXTURE_SWIZZLE_R}, {@see
     *    GL45::GL_TEXTURE_SWIZZLE_G},
     *    {@see GL45::GL_TEXTURE_SWIZZLE_B}, and {@see
     *    GL45::GL_TEXTURE_SWIZZLE_A} successively.
     *
     *  - {@see GL45::GL_TEXTURE_WRAP_S}: Sets the wrap parameter for texture
     *    coordinate s to either {@see GL45::GL_CLAMP_TO_EDGE},
     *    {@see GL45::GL_CLAMP_TO_BORDER}, {@see GL45::GL_MIRRORED_REPEAT},
     *    {@see GL45::GL_REPEAT}, or
     *    {@see GL45::GL_MIRROR_CLAMP_TO_EDGE}. {@see GL45::GL_CLAMP_TO_EDGE}
     *    causes s coordinates to be clamped to the
     *    range       1  2N      1 -    1  2N       , where N is the size of the
     *    texture in the direction of clamping.
     *    {@see GL45::GL_CLAMP_TO_BORDER} evaluates s coordinates in a similar
     *    manner to {@see GL45::GL_CLAMP_TO_EDGE}.
     *    However, in cases where clamping would have occurred in {@see
     *    GL45::GL_CLAMP_TO_EDGE} mode, the fetched texel
     *    data is substituted with the values specified by {@see
     *    GL45::GL_TEXTURE_BORDER_COLOR}. {@see GL45::GL_REPEAT}
     *    causes the integer part of the s coordinate to be ignored; the GL uses
     *    only the fractional part, thereby
     *    creating a repeating pattern. {@see GL45::GL_MIRRORED_REPEAT} causes
     *    the s coordinate to be set to the
     *    fractional part of the texture coordinate if the integer part of s is
     *    even; if the integer part of s is odd,
     *    then the s texture coordinate is set to    1 -  frac &amp;af;  s    ,
     *    where    frac &amp;af;  s    represents
     *    the fractional part of s. {@see GL45::GL_MIRROR_CLAMP_TO_EDGE} causes
     *    the s coordinate to be repeated as for
     *    {@see GL45::GL_MIRRORED_REPEAT} for one repetition of the texture, at
     *    which point the coordinate to be clamped
     *    as in {@see GL45::GL_CLAMP_TO_EDGE}. Initially, {@see
     *    GL45::GL_TEXTURE_WRAP_S} is set to
     *    {@see GL45::GL_REPEAT}.
     *
     *  - {@see GL45::GL_TEXTURE_WRAP_T}: Sets the wrap parameter for texture
     *    coordinate t to either {@see GL45::GL_CLAMP_TO_EDGE},
     *    {@see GL45::GL_CLAMP_TO_BORDER}, {@see GL45::GL_MIRRORED_REPEAT},
     *    {@see GL45::GL_REPEAT}, or
     *    {@see GL45::GL_MIRROR_CLAMP_TO_EDGE}. See the discussion under {@see
     *    GL45::GL_TEXTURE_WRAP_S}. Initially,
     *    {@see GL45::GL_TEXTURE_WRAP_T} is set to {@see GL45::GL_REPEAT}.
     *
     *  - {@see GL45::GL_TEXTURE_WRAP_R}: Sets the wrap parameter for texture
     *    coordinate r to either {@see GL45::GL_CLAMP_TO_EDGE},
     *    {@see GL45::GL_CLAMP_TO_BORDER}, {@see GL45::GL_MIRRORED_REPEAT},
     *    {@see GL45::GL_REPEAT}, or
     *    {@see GL45::GL_MIRROR_CLAMP_TO_EDGE}. See the discussion under {@see
     *    GL45::GL_TEXTURE_WRAP_S}. Initially,
     *    {@see GL45::GL_TEXTURE_WRAP_R} is set to {@see GL45::GL_REPEAT}.
     *
     * @see http://docs.gl/gl2/glTexParameter
     * @see http://docs.gl/gl4/glTexParameter
     * @since 4.5
     * @param int $texture
     * @param int $pname
     * @param CData|null $param
     * @return void
     */
    public function textureParameterfv(int $texture, int $pname, ?CData $param): void
    {
        $__proc = $this->proc('glTextureParameterfv',
            'void (*)(GLuint texture, GLenum pname, const GLfloat *param)');
        $__proc($texture, $pname, $param);
    }

    /**
     * {@see GL45::texParameter} and {@see GL45::textureParameter} assign the value or values in $params to the
     * texture parameter specified as $pname. For {@see GL45::texParameter}, $target defines the target texture,
     * either {@see GL45::GL_TEXTURE_1D}, {@see GL45::GL_TEXTURE_1D_ARRAY}, {@see GL45::GL_TEXTURE_2D},
     * {@see GL45::GL_TEXTURE_2D_ARRAY}, {@see GL45::GL_TEXTURE_2D_MULTISAMPLE},
     * {@see GL45::GL_TEXTURE_2D_MULTISAMPLE_ARRAY}, {@see GL45::GL_TEXTURE_3D}, {@see GL45::GL_TEXTURE_CUBE_MAP},
     * {@see GL45::GL_TEXTURE_CUBE_MAP_ARRAY}, or {@see GL45::GL_TEXTURE_RECTANGLE}. The following symbols are
     * accepted in $pname:
     *
     *  - {@see GL45::GL_DEPTH_STENCIL_TEXTURE_MODE}: Specifies the mode used to
     *    read from depth-stencil format textures. $params must be one of
     *    {@see GL45::GL_DEPTH_COMPONENT} or {@see GL45::GL_STENCIL_INDEX}. If
     *    the depth stencil mode is
     *    {@see GL45::GL_DEPTH_COMPONENT}, then reads from depth-stencil format
     *    textures will return the depth component
     *    of the texel in Rt and the stencil component will be discarded. If the
     *    depth stencil mode is
     *    {@see GL45::GL_STENCIL_INDEX} then the stencil component is returned
     *    in Rt and the depth component is
     *    discarded. The initial value is {@see GL45::GL_DEPTH_COMPONENT}.
     *
     *  - {@see GL45::GL_TEXTURE_BASE_LEVEL}: Specifies the index of the lowest
     *    defined mipmap level. This is an integer value. The initial value is
     *    0.
     *
     *  - {@see GL45::GL_TEXTURE_BORDER_COLOR}: The data in $params specifies
     *    four values that define the border values that should be used for
     *    border
     *    texels. If a texel is sampled from the border of the texture, the
     *    values of
     *    {@see GL45::GL_TEXTURE_BORDER_COLOR} are interpreted as an RGBA color
     *    to match the texture's internal format
     *    and substituted for the non-existent texel data. If the texture
     *    contains depth components, the first component
     *    of {@see GL45::GL_TEXTURE_BORDER_COLOR} is interpreted as a depth
     *    value. The initial value is     0.0 , 0.0 ,
     *    0.0 , 0.0    .   If the values for {@see
     *    GL45::GL_TEXTURE_BORDER_COLOR} are specified with
     *    {@see GL45::texParameterIiv} or {@see GL45::texParameterIuiv}, the
     *    values are stored unmodified with an
     *    internal data type of integer. If specified with {@see
     *    GL45::texParameteriv}, they are converted to floating
     *    point with the following equation:   f =   2 c + 1    2 b  - 1    . If
     *    specified with
     *    {@see GL45::texParameterfv}, they are stored unmodified as
     *    floating-point values.
     *
     *  - {@see GL45::GL_TEXTURE_COMPARE_FUNC}: Specifies the comparison
     *    operator used when {@see GL45::GL_TEXTURE_COMPARE_MODE} is set to
     *    {@see GL45::GL_COMPARE_REF_TO_TEXTURE}. Permissible values are:
     *     Texture Comparison Function
     *    Computed result        {@see GL45::GL_LEQUAL}      result =     1.0
     *    0.0   &amp;it;     r &lt;=  D t       r
     *    &gt;  D t              {@see GL45::GL_GEQUAL}      result =     1.0
     *    0.0   &amp;it;     r &gt;=  D t       r
     *    &lt;  D t              {@see GL45::GL_LESS}      result =     1.0
     *    0.0   &amp;it;     r &lt;  D t       r
     *    &gt;=  D t              {@see GL45::GL_GREATER}      result =     1.0
     *     0.0   &amp;it;     r &gt;  D t       r
     *    &lt;=  D t              {@see GL45::GL_EQUAL}      result =     1.0
     *    0.0   &amp;it;     r =  D t       r ≠
     *    D t              {@see GL45::GL_NOTEQUAL}      result =     1.0   0.0
     *     &amp;it;     r ≠  D t       r =  D t
     *                 {@see GL45::GL_ALWAYS}      result = 1.0        {@see
     *    GL45::GL_NEVER}      result = 0.0
     *    where r is the current interpolated texture coordinate, and   D t   is
     *    the depth texture value sampled from
     *    the currently bound depth texture. result is assigned to the red
     *    channel.
     *
     *  - {@see GL45::GL_TEXTURE_COMPARE_MODE}: Specifies the texture comparison
     *    mode for currently bound depth textures. That is, a texture whose
     *    internal
     *    format is {@see GL45::GL_DEPTH_COMPONENT_*}; see {@see
     *    GL45::texImage2D}) Permissible values are:
     *    {@see GL45::GL_COMPARE_REF_TO_TEXTURE}   Specifies that the
     *    interpolated and clamped r texture coordinate
     *    should be compared to the value in the currently bound depth texture.
     *    See the discussion of
     *    {@see GL45::GL_TEXTURE_COMPARE_FUNC} for details of how the comparison
     *    is evaluated. The result of the
     *    comparison is assigned to the red channel.     {@see GL45::GL_NONE}
     *    Specifies that the red channel should be
     *    assigned the appropriate value from the currently bound depth texture.
     *
     *  - {@see GL45::GL_TEXTURE_LOD_BIAS}: $params specifies a fixed bias value
     *    that is to be added to the level-of-detail parameter for the texture
     *    before texture sampling. The specified value is added to the
     *    shader-supplied bias value (if any) and
     *    subsequently clamped into the implementation-defined range     -  bias
     *    max        bias max      , where   bias
     *    max    is the value of the implementation defined constant {@see
     *    GL45::GL_MAX_TEXTURE_LOD_BIAS}. The initial
     *    value is 0.0.
     *
     *  - {@see GL45::GL_TEXTURE_MIN_FILTER}: The texture minifying function is
     *    used whenever the level-of-detail function used when sampling from the
     *    texture determines that the texture should be minified. There are six
     *    defined minifying functions. Two of them
     *    use either the nearest texture elements or a weighted average of
     *    multiple texture elements to compute the
     *    texture value. The other four use mipmaps.   A mipmap is an ordered
     *    set of arrays representing the same image
     *    at progressively lower resolutions. If the texture has dimensions    2
     *    n  × 2 m   , there are     max
     *    &amp;af;  n m   + 1   mipmaps. The first mipmap is the original
     *    texture, with dimensions    2 n  × 2 m   .
     *    Each subsequent mipmap has dimensions    2   k - 1    × 2   l - 1
     *    , where    2 k  × 2 l    are the
     *    dimensions of the previous mipmap, until either    k = 0   or    l = 0
     *     . At that point, subsequent mipmaps
     *    have dimension    1 × 2   l - 1      or    2   k - 1    × 1   until
     *    the final mipmap, which has dimension
     *    1 × 1  . To define the mipmaps, call {@see GL45::texImage1D}, {@see
     *    GL45::texImage2D},
     *    {@see GL45::texImage3D}, {@see GL45::copyTexImage1D}, or {@see
     *    GL45::copyTexImage2D} with the level
     *    argument indicating the order of the mipmaps. Level 0 is the original
     *    texture; level    max &amp;af;  n m
     *    is the final    1 × 1   mipmap.   $params supplies a function for
     *    minifying the texture as one of the
     *    following:   {@see GL45::GL_NEAREST}   Returns the value of the
     *    texture element that is nearest (in Manhattan
     *    distance) to the specified texture coordinates.     {@see
     *    GL45::GL_LINEAR}   Returns the weighted average of
     *    the four texture elements that are closest to the specified texture
     *    coordinates. These can include items
     *    wrapped or repeated from other parts of a texture, depending on the
     *    values of {@see GL45::GL_TEXTURE_WRAP_S}
     *    and {@see GL45::GL_TEXTURE_WRAP_T}, and on the exact mapping.
     *    {@see GL45::GL_NEAREST_MIPMAP_NEAREST}
     *    Chooses the mipmap that most closely matches the size of the pixel
     *    being textured and uses the
     *    {@see GL45::GL_NEAREST} criterion (the texture element closest to the
     *    specified texture coordinates) to
     *    produce a texture value.     {@see GL45::GL_LINEAR_MIPMAP_NEAREST}
     *    Chooses the mipmap that most closely
     *    matches the size of the pixel being textured and uses the {@see
     *    GL45::GL_LINEAR} criterion (a weighted average
     *    of the four texture elements that are closest to the specified texture
     *    coordinates) to produce a texture
     *    value.     {@see GL45::GL_NEAREST_MIPMAP_LINEAR}   Chooses the two
     *    mipmaps that most closely match the size of
     *    the pixel being textured and uses the {@see GL45::GL_NEAREST}
     *    criterion (the texture element closest to the
     *    specified texture coordinates ) to produce a texture value from each
     *    mipmap. The final texture value is a
     *    weighted average of those two values.     {@see
     *    GL45::GL_LINEAR_MIPMAP_LINEAR}   Chooses the two mipmaps that
     *    most closely match the size of the pixel being textured and uses the
     *    {@see GL45::GL_LINEAR} criterion (a
     *    weighted average of the texture elements that are closest to the
     *    specified texture coordinates) to produce a
     *    texture value from each mipmap. The final texture value is a weighted
     *    average of those two values.       As
     *    more texture elements are sampled in the minification process, fewer
     *    aliasing artifacts will be apparent.
     *    While the {@see GL45::GL_NEAREST} and {@see GL45::GL_LINEAR}
     *    minification functions can be faster than the
     *    other four, they sample only one or multiple texture elements to
     *    determine the texture value of the pixel
     *    being rendered and can produce moire patterns or ragged transitions.
     *    The initial value of
     *    {@see GL45::GL_TEXTURE_MIN_FILTER} is {@see
     *    GL45::GL_NEAREST_MIPMAP_LINEAR}.
     *
     *  - {@see GL45::GL_TEXTURE_MAG_FILTER}: The texture magnification function
     *    is used whenever the level-of-detail function used when sampling from
     *    the
     *    texture determines that the texture should be magified. It sets the
     *    texture magnification function to either
     *    {@see GL45::GL_NEAREST} or {@see GL45::GL_LINEAR} (see below). {@see
     *    GL45::GL_NEAREST} is generally faster
     *    than {@see GL45::GL_LINEAR}, but it can produce textured images with
     *    sharper edges because the transition
     *    between texture elements is not as smooth. The initial value of {@see
     *    GL45::GL_TEXTURE_MAG_FILTER} is
     *    {@see GL45::GL_LINEAR}.   {@see GL45::GL_NEAREST}   Returns the value
     *    of the texture element that is nearest
     *    (in Manhattan distance) to the specified texture coordinates.
     *    {@see GL45::GL_LINEAR}   Returns the
     *    weighted average of the texture elements that are closest to the
     *    specified texture coordinates. These can
     *    include items wrapped or repeated from other parts of a texture,
     *    depending on the values of
     *    {@see GL45::GL_TEXTURE_WRAP_S} and {@see GL45::GL_TEXTURE_WRAP_T}, and
     *    on the exact mapping.
     *
     *  - {@see GL45::GL_TEXTURE_MIN_LOD}: Sets the minimum level-of-detail
     *    parameter. This floating-point value limits the selection of highest
     *    resolution mipmap (lowest mipmap level). The initial value is -1000.
     *
     *  - {@see GL45::GL_TEXTURE_MAX_LOD}: Sets the maximum level-of-detail
     *    parameter. This floating-point value limits the selection of the
     *    lowest
     *    resolution mipmap (highest mipmap level). The initial value is 1000.
     *
     *  - {@see GL45::GL_TEXTURE_MAX_LEVEL}: Sets the index of the highest
     *    defined mipmap level. This is an integer value. The initial value is
     *    1000.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_R}: Sets the swizzle that will be
     *    applied to the r component of a texel before it is returned to the
     *    shader.
     *    Valid values for $param are {@see GL45::GL_RED}, {@see
     *    GL45::GL_GREEN}, {@see GL45::GL_BLUE},
     *    {@see GL45::GL_ALPHA}, {@see GL45::GL_ZERO} and {@see GL45::GL_ONE}.
     *    If {@see GL45::GL_TEXTURE_SWIZZLE_R} is
     *    {@see GL45::GL_RED}, the value for r will be taken from the first
     *    channel of the fetched texel. If
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R} is {@see GL45::GL_GREEN}, the value
     *    for r will be taken from the second
     *    channel of the fetched texel. If {@see GL45::GL_TEXTURE_SWIZZLE_R} is
     *    {@see GL45::GL_BLUE}, the value for r
     *    will be taken from the third channel of the fetched texel. If {@see
     *    GL45::GL_TEXTURE_SWIZZLE_R} is
     *    {@see GL45::GL_ALPHA}, the value for r will be taken from the fourth
     *    channel of the fetched texel. If
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R} is {@see GL45::GL_ZERO}, the value
     *    for r will be subtituted with 0.0. If
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R} is {@see GL45::GL_ONE}, the value
     *    for r will be subtituted with 1.0. The
     *    initial value is {@see GL45::GL_RED}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_G}: Sets the swizzle that will be
     *    applied to the g component of a texel before it is returned to the
     *    shader.
     *    Valid values for $param and their effects are similar to those of
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R}. The
     *    initial value is {@see GL45::GL_GREEN}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_B}: Sets the swizzle that will be
     *    applied to the b component of a texel before it is returned to the
     *    shader.
     *    Valid values for $param and their effects are similar to those of
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R}. The
     *    initial value is {@see GL45::GL_BLUE}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_A}: Sets the swizzle that will be
     *    applied to the a component of a texel before it is returned to the
     *    shader.
     *    Valid values for $param and their effects are similar to those of
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R}. The
     *    initial value is {@see GL45::GL_ALPHA}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_RGBA}: Sets the swizzles that will be
     *    applied to the r, g, b, and a components of a texel before they are
     *    returned
     *    to the shader. Valid values for $params and their effects are similar
     *    to those of
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R}, except that all channels are
     *    specified simultaneously. Setting the value of
     *    {@see GL45::GL_TEXTURE_SWIZZLE_RGBA} is equivalent (assuming no errors
     *    are generated) to setting the
     *    parameters of each of {@see GL45::GL_TEXTURE_SWIZZLE_R}, {@see
     *    GL45::GL_TEXTURE_SWIZZLE_G},
     *    {@see GL45::GL_TEXTURE_SWIZZLE_B}, and {@see
     *    GL45::GL_TEXTURE_SWIZZLE_A} successively.
     *
     *  - {@see GL45::GL_TEXTURE_WRAP_S}: Sets the wrap parameter for texture
     *    coordinate s to either {@see GL45::GL_CLAMP_TO_EDGE},
     *    {@see GL45::GL_CLAMP_TO_BORDER}, {@see GL45::GL_MIRRORED_REPEAT},
     *    {@see GL45::GL_REPEAT}, or
     *    {@see GL45::GL_MIRROR_CLAMP_TO_EDGE}. {@see GL45::GL_CLAMP_TO_EDGE}
     *    causes s coordinates to be clamped to the
     *    range       1  2N      1 -    1  2N       , where N is the size of the
     *    texture in the direction of clamping.
     *    {@see GL45::GL_CLAMP_TO_BORDER} evaluates s coordinates in a similar
     *    manner to {@see GL45::GL_CLAMP_TO_EDGE}.
     *    However, in cases where clamping would have occurred in {@see
     *    GL45::GL_CLAMP_TO_EDGE} mode, the fetched texel
     *    data is substituted with the values specified by {@see
     *    GL45::GL_TEXTURE_BORDER_COLOR}. {@see GL45::GL_REPEAT}
     *    causes the integer part of the s coordinate to be ignored; the GL uses
     *    only the fractional part, thereby
     *    creating a repeating pattern. {@see GL45::GL_MIRRORED_REPEAT} causes
     *    the s coordinate to be set to the
     *    fractional part of the texture coordinate if the integer part of s is
     *    even; if the integer part of s is odd,
     *    then the s texture coordinate is set to    1 -  frac &amp;af;  s    ,
     *    where    frac &amp;af;  s    represents
     *    the fractional part of s. {@see GL45::GL_MIRROR_CLAMP_TO_EDGE} causes
     *    the s coordinate to be repeated as for
     *    {@see GL45::GL_MIRRORED_REPEAT} for one repetition of the texture, at
     *    which point the coordinate to be clamped
     *    as in {@see GL45::GL_CLAMP_TO_EDGE}. Initially, {@see
     *    GL45::GL_TEXTURE_WRAP_S} is set to
     *    {@see GL45::GL_REPEAT}.
     *
     *  - {@see GL45::GL_TEXTURE_WRAP_T}: Sets the wrap parameter for texture
     *    coordinate t to either {@see GL45::GL_CLAMP_TO_EDGE},
     *    {@see GL45::GL_CLAMP_TO_BORDER}, {@see GL45::GL_MIRRORED_REPEAT},
     *    {@see GL45::GL_REPEAT}, or
     *    {@see GL45::GL_MIRROR_CLAMP_TO_EDGE}. See the discussion under {@see
     *    GL45::GL_TEXTURE_WRAP_S}. Initially,
     *    {@see GL45::GL_TEXTURE_WRAP_T} is set to {@see GL45::GL_REPEAT}.
     *
     *  - {@see GL45::GL_TEXTURE_WRAP_R}: Sets the wrap parameter for texture
     *    coordinate r to either {@see GL45::GL_CLAMP_TO_EDGE},
     *    {@see GL45::GL_CLAMP_TO_BORDER}, {@see GL45::GL_MIRRORED_REPEAT},
     *    {@see GL45::GL_REPEAT}, or
     *    {@see GL45::GL_MIRROR_CLAMP_TO_EDGE}. See the discussion under {@see
     *    GL45::GL_TEXTURE_WRAP_S}. Initially,
     *    {@see GL45::GL_TEXTURE_WRAP_R} is set to {@see GL45::GL_REPEAT}.
     *
     * @see http://docs.gl/gl2/glTexParameter
     * @see http://docs.gl/gl4/glTexParameter
     * @since 4.5
     * @param int $texture
     * @param int $pname
     * @param int $param
     * @return void
     */
    public function textureParameteri(int $texture, int $pname, int $param): void
    {
        $__proc = $this->proc('glTextureParameteri', 'void (*)(GLuint texture, GLenum pname, GLint param)');
        $__proc($texture, $pname, $param);
    }

    /**
     * {@see GL45::texParameter} and {@see GL45::textureParameter} assign the value or values in $params to the
     * texture parameter specified as $pname. For {@see GL45::texParameter}, $target defines the target texture,
     * either {@see GL45::GL_TEXTURE_1D}, {@see GL45::GL_TEXTURE_1D_ARRAY}, {@see GL45::GL_TEXTURE_2D},
     * {@see GL45::GL_TEXTURE_2D_ARRAY}, {@see GL45::GL_TEXTURE_2D_MULTISAMPLE},
     * {@see GL45::GL_TEXTURE_2D_MULTISAMPLE_ARRAY}, {@see GL45::GL_TEXTURE_3D}, {@see GL45::GL_TEXTURE_CUBE_MAP},
     * {@see GL45::GL_TEXTURE_CUBE_MAP_ARRAY}, or {@see GL45::GL_TEXTURE_RECTANGLE}. The following symbols are
     * accepted in $pname:
     *
     *  - {@see GL45::GL_DEPTH_STENCIL_TEXTURE_MODE}: Specifies the mode used to
     *    read from depth-stencil format textures. $params must be one of
     *    {@see GL45::GL_DEPTH_COMPONENT} or {@see GL45::GL_STENCIL_INDEX}. If
     *    the depth stencil mode is
     *    {@see GL45::GL_DEPTH_COMPONENT}, then reads from depth-stencil format
     *    textures will return the depth component
     *    of the texel in Rt and the stencil component will be discarded. If the
     *    depth stencil mode is
     *    {@see GL45::GL_STENCIL_INDEX} then the stencil component is returned
     *    in Rt and the depth component is
     *    discarded. The initial value is {@see GL45::GL_DEPTH_COMPONENT}.
     *
     *  - {@see GL45::GL_TEXTURE_BASE_LEVEL}: Specifies the index of the lowest
     *    defined mipmap level. This is an integer value. The initial value is
     *    0.
     *
     *  - {@see GL45::GL_TEXTURE_BORDER_COLOR}: The data in $params specifies
     *    four values that define the border values that should be used for
     *    border
     *    texels. If a texel is sampled from the border of the texture, the
     *    values of
     *    {@see GL45::GL_TEXTURE_BORDER_COLOR} are interpreted as an RGBA color
     *    to match the texture's internal format
     *    and substituted for the non-existent texel data. If the texture
     *    contains depth components, the first component
     *    of {@see GL45::GL_TEXTURE_BORDER_COLOR} is interpreted as a depth
     *    value. The initial value is     0.0 , 0.0 ,
     *    0.0 , 0.0    .   If the values for {@see
     *    GL45::GL_TEXTURE_BORDER_COLOR} are specified with
     *    {@see GL45::texParameterIiv} or {@see GL45::texParameterIuiv}, the
     *    values are stored unmodified with an
     *    internal data type of integer. If specified with {@see
     *    GL45::texParameteriv}, they are converted to floating
     *    point with the following equation:   f =   2 c + 1    2 b  - 1    . If
     *    specified with
     *    {@see GL45::texParameterfv}, they are stored unmodified as
     *    floating-point values.
     *
     *  - {@see GL45::GL_TEXTURE_COMPARE_FUNC}: Specifies the comparison
     *    operator used when {@see GL45::GL_TEXTURE_COMPARE_MODE} is set to
     *    {@see GL45::GL_COMPARE_REF_TO_TEXTURE}. Permissible values are:
     *     Texture Comparison Function
     *    Computed result        {@see GL45::GL_LEQUAL}      result =     1.0
     *    0.0   &amp;it;     r &lt;=  D t       r
     *    &gt;  D t              {@see GL45::GL_GEQUAL}      result =     1.0
     *    0.0   &amp;it;     r &gt;=  D t       r
     *    &lt;  D t              {@see GL45::GL_LESS}      result =     1.0
     *    0.0   &amp;it;     r &lt;  D t       r
     *    &gt;=  D t              {@see GL45::GL_GREATER}      result =     1.0
     *     0.0   &amp;it;     r &gt;  D t       r
     *    &lt;=  D t              {@see GL45::GL_EQUAL}      result =     1.0
     *    0.0   &amp;it;     r =  D t       r ≠
     *    D t              {@see GL45::GL_NOTEQUAL}      result =     1.0   0.0
     *     &amp;it;     r ≠  D t       r =  D t
     *                 {@see GL45::GL_ALWAYS}      result = 1.0        {@see
     *    GL45::GL_NEVER}      result = 0.0
     *    where r is the current interpolated texture coordinate, and   D t   is
     *    the depth texture value sampled from
     *    the currently bound depth texture. result is assigned to the red
     *    channel.
     *
     *  - {@see GL45::GL_TEXTURE_COMPARE_MODE}: Specifies the texture comparison
     *    mode for currently bound depth textures. That is, a texture whose
     *    internal
     *    format is {@see GL45::GL_DEPTH_COMPONENT_*}; see {@see
     *    GL45::texImage2D}) Permissible values are:
     *    {@see GL45::GL_COMPARE_REF_TO_TEXTURE}   Specifies that the
     *    interpolated and clamped r texture coordinate
     *    should be compared to the value in the currently bound depth texture.
     *    See the discussion of
     *    {@see GL45::GL_TEXTURE_COMPARE_FUNC} for details of how the comparison
     *    is evaluated. The result of the
     *    comparison is assigned to the red channel.     {@see GL45::GL_NONE}
     *    Specifies that the red channel should be
     *    assigned the appropriate value from the currently bound depth texture.
     *
     *  - {@see GL45::GL_TEXTURE_LOD_BIAS}: $params specifies a fixed bias value
     *    that is to be added to the level-of-detail parameter for the texture
     *    before texture sampling. The specified value is added to the
     *    shader-supplied bias value (if any) and
     *    subsequently clamped into the implementation-defined range     -  bias
     *    max        bias max      , where   bias
     *    max    is the value of the implementation defined constant {@see
     *    GL45::GL_MAX_TEXTURE_LOD_BIAS}. The initial
     *    value is 0.0.
     *
     *  - {@see GL45::GL_TEXTURE_MIN_FILTER}: The texture minifying function is
     *    used whenever the level-of-detail function used when sampling from the
     *    texture determines that the texture should be minified. There are six
     *    defined minifying functions. Two of them
     *    use either the nearest texture elements or a weighted average of
     *    multiple texture elements to compute the
     *    texture value. The other four use mipmaps.   A mipmap is an ordered
     *    set of arrays representing the same image
     *    at progressively lower resolutions. If the texture has dimensions    2
     *    n  × 2 m   , there are     max
     *    &amp;af;  n m   + 1   mipmaps. The first mipmap is the original
     *    texture, with dimensions    2 n  × 2 m   .
     *    Each subsequent mipmap has dimensions    2   k - 1    × 2   l - 1
     *    , where    2 k  × 2 l    are the
     *    dimensions of the previous mipmap, until either    k = 0   or    l = 0
     *     . At that point, subsequent mipmaps
     *    have dimension    1 × 2   l - 1      or    2   k - 1    × 1   until
     *    the final mipmap, which has dimension
     *    1 × 1  . To define the mipmaps, call {@see GL45::texImage1D}, {@see
     *    GL45::texImage2D},
     *    {@see GL45::texImage3D}, {@see GL45::copyTexImage1D}, or {@see
     *    GL45::copyTexImage2D} with the level
     *    argument indicating the order of the mipmaps. Level 0 is the original
     *    texture; level    max &amp;af;  n m
     *    is the final    1 × 1   mipmap.   $params supplies a function for
     *    minifying the texture as one of the
     *    following:   {@see GL45::GL_NEAREST}   Returns the value of the
     *    texture element that is nearest (in Manhattan
     *    distance) to the specified texture coordinates.     {@see
     *    GL45::GL_LINEAR}   Returns the weighted average of
     *    the four texture elements that are closest to the specified texture
     *    coordinates. These can include items
     *    wrapped or repeated from other parts of a texture, depending on the
     *    values of {@see GL45::GL_TEXTURE_WRAP_S}
     *    and {@see GL45::GL_TEXTURE_WRAP_T}, and on the exact mapping.
     *    {@see GL45::GL_NEAREST_MIPMAP_NEAREST}
     *    Chooses the mipmap that most closely matches the size of the pixel
     *    being textured and uses the
     *    {@see GL45::GL_NEAREST} criterion (the texture element closest to the
     *    specified texture coordinates) to
     *    produce a texture value.     {@see GL45::GL_LINEAR_MIPMAP_NEAREST}
     *    Chooses the mipmap that most closely
     *    matches the size of the pixel being textured and uses the {@see
     *    GL45::GL_LINEAR} criterion (a weighted average
     *    of the four texture elements that are closest to the specified texture
     *    coordinates) to produce a texture
     *    value.     {@see GL45::GL_NEAREST_MIPMAP_LINEAR}   Chooses the two
     *    mipmaps that most closely match the size of
     *    the pixel being textured and uses the {@see GL45::GL_NEAREST}
     *    criterion (the texture element closest to the
     *    specified texture coordinates ) to produce a texture value from each
     *    mipmap. The final texture value is a
     *    weighted average of those two values.     {@see
     *    GL45::GL_LINEAR_MIPMAP_LINEAR}   Chooses the two mipmaps that
     *    most closely match the size of the pixel being textured and uses the
     *    {@see GL45::GL_LINEAR} criterion (a
     *    weighted average of the texture elements that are closest to the
     *    specified texture coordinates) to produce a
     *    texture value from each mipmap. The final texture value is a weighted
     *    average of those two values.       As
     *    more texture elements are sampled in the minification process, fewer
     *    aliasing artifacts will be apparent.
     *    While the {@see GL45::GL_NEAREST} and {@see GL45::GL_LINEAR}
     *    minification functions can be faster than the
     *    other four, they sample only one or multiple texture elements to
     *    determine the texture value of the pixel
     *    being rendered and can produce moire patterns or ragged transitions.
     *    The initial value of
     *    {@see GL45::GL_TEXTURE_MIN_FILTER} is {@see
     *    GL45::GL_NEAREST_MIPMAP_LINEAR}.
     *
     *  - {@see GL45::GL_TEXTURE_MAG_FILTER}: The texture magnification function
     *    is used whenever the level-of-detail function used when sampling from
     *    the
     *    texture determines that the texture should be magified. It sets the
     *    texture magnification function to either
     *    {@see GL45::GL_NEAREST} or {@see GL45::GL_LINEAR} (see below). {@see
     *    GL45::GL_NEAREST} is generally faster
     *    than {@see GL45::GL_LINEAR}, but it can produce textured images with
     *    sharper edges because the transition
     *    between texture elements is not as smooth. The initial value of {@see
     *    GL45::GL_TEXTURE_MAG_FILTER} is
     *    {@see GL45::GL_LINEAR}.   {@see GL45::GL_NEAREST}   Returns the value
     *    of the texture element that is nearest
     *    (in Manhattan distance) to the specified texture coordinates.
     *    {@see GL45::GL_LINEAR}   Returns the
     *    weighted average of the texture elements that are closest to the
     *    specified texture coordinates. These can
     *    include items wrapped or repeated from other parts of a texture,
     *    depending on the values of
     *    {@see GL45::GL_TEXTURE_WRAP_S} and {@see GL45::GL_TEXTURE_WRAP_T}, and
     *    on the exact mapping.
     *
     *  - {@see GL45::GL_TEXTURE_MIN_LOD}: Sets the minimum level-of-detail
     *    parameter. This floating-point value limits the selection of highest
     *    resolution mipmap (lowest mipmap level). The initial value is -1000.
     *
     *  - {@see GL45::GL_TEXTURE_MAX_LOD}: Sets the maximum level-of-detail
     *    parameter. This floating-point value limits the selection of the
     *    lowest
     *    resolution mipmap (highest mipmap level). The initial value is 1000.
     *
     *  - {@see GL45::GL_TEXTURE_MAX_LEVEL}: Sets the index of the highest
     *    defined mipmap level. This is an integer value. The initial value is
     *    1000.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_R}: Sets the swizzle that will be
     *    applied to the r component of a texel before it is returned to the
     *    shader.
     *    Valid values for $param are {@see GL45::GL_RED}, {@see
     *    GL45::GL_GREEN}, {@see GL45::GL_BLUE},
     *    {@see GL45::GL_ALPHA}, {@see GL45::GL_ZERO} and {@see GL45::GL_ONE}.
     *    If {@see GL45::GL_TEXTURE_SWIZZLE_R} is
     *    {@see GL45::GL_RED}, the value for r will be taken from the first
     *    channel of the fetched texel. If
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R} is {@see GL45::GL_GREEN}, the value
     *    for r will be taken from the second
     *    channel of the fetched texel. If {@see GL45::GL_TEXTURE_SWIZZLE_R} is
     *    {@see GL45::GL_BLUE}, the value for r
     *    will be taken from the third channel of the fetched texel. If {@see
     *    GL45::GL_TEXTURE_SWIZZLE_R} is
     *    {@see GL45::GL_ALPHA}, the value for r will be taken from the fourth
     *    channel of the fetched texel. If
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R} is {@see GL45::GL_ZERO}, the value
     *    for r will be subtituted with 0.0. If
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R} is {@see GL45::GL_ONE}, the value
     *    for r will be subtituted with 1.0. The
     *    initial value is {@see GL45::GL_RED}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_G}: Sets the swizzle that will be
     *    applied to the g component of a texel before it is returned to the
     *    shader.
     *    Valid values for $param and their effects are similar to those of
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R}. The
     *    initial value is {@see GL45::GL_GREEN}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_B}: Sets the swizzle that will be
     *    applied to the b component of a texel before it is returned to the
     *    shader.
     *    Valid values for $param and their effects are similar to those of
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R}. The
     *    initial value is {@see GL45::GL_BLUE}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_A}: Sets the swizzle that will be
     *    applied to the a component of a texel before it is returned to the
     *    shader.
     *    Valid values for $param and their effects are similar to those of
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R}. The
     *    initial value is {@see GL45::GL_ALPHA}.
     *
     *  - {@see GL45::GL_TEXTURE_SWIZZLE_RGBA}: Sets the swizzles that will be
     *    applied to the r, g, b, and a components of a texel before they are
     *    returned
     *    to the shader. Valid values for $params and their effects are similar
     *    to those of
     *    {@see GL45::GL_TEXTURE_SWIZZLE_R}, except that all channels are
     *    specified simultaneously. Setting the value of
     *    {@see GL45::GL_TEXTURE_SWIZZLE_RGBA} is equivalent (assuming no errors
     *    are generated) to setting the
     *    parameters of each of {@see GL45::GL_TEXTURE_SWIZZLE_R}, {@see
     *    GL45::GL_TEXTURE_SWIZZLE_G},
     *    {@see GL45::GL_TEXTURE_SWIZZLE_B}, and {@see
     *    GL45::GL_TEXTURE_SWIZZLE_A} successively.
     *
     *  - {@see GL45::GL_TEXTURE_WRAP_S}: Sets the wrap parameter for texture
     *    coordinate s to either {@see GL45::GL_CLAMP_TO_EDGE},
     *    {@see GL45::GL_CLAMP_TO_BORDER}, {@see GL45::GL_MIRRORED_REPEAT},
     *    {@see GL45::GL_REPEAT}, or
     *    {@see GL45::GL_MIRROR_CLAMP_TO_EDGE}. {@see GL45::GL_CLAMP_TO_EDGE}
     *    causes s coordinates to be clamped to the
     *    range       1  2N      1 -    1  2N       , where N is the size of the
     *    texture in the direction of clamping.
     *    {@see GL45::GL_CLAMP_TO_BORDER} evaluates s coordinates in a similar
     *    manner to {@see GL45::GL_CLAMP_TO_EDGE}.
     *    However, in cases where clamping would have occurred in {@see
     *    GL45::GL_CLAMP_TO_EDGE} mode, the fetched texel
     *    data is substituted with the values specified by {@see
     *    GL45::GL_TEXTURE_BORDER_COLOR}. {@see GL45::GL_REPEAT}
     *    causes the integer part of the s coordinate to be ignored; the GL uses
     *    only the fractional part, thereby
     *    creating a repeating pattern. {@see GL45::GL_MIRRORED_REPEAT} causes
     *    the s coordinate to be set to the
     *    fractional part of the texture coordinate if the integer part of s is
     *    even; if the integer part of s is odd,
     *    then the s texture coordinate is set to    1 -  frac &amp;af;  s    ,
     *    where    frac &amp;af;  s    represents
     *    the fractional part of s. {@see GL45::GL_MIRROR_CLAMP_TO_EDGE} causes
     *    the s coordinate to be repeated as for
     *    {@see GL45::GL_MIRRORED_REPEAT} for one repetition of the texture, at
     *    which point the coordinate to be clamped
     *    as in {@see GL45::GL_CLAMP_TO_EDGE}. Initially, {@see
     *    GL45::GL_TEXTURE_WRAP_S} is set to
     *    {@see GL45::GL_REPEAT}.
     *
     *  - {@see GL45::GL_TEXTURE_WRAP_T}: Sets the wrap parameter for texture
     *    coordinate t to either {@see GL45::GL_CLAMP_TO_EDGE},
     *    {@see GL45::GL_CLAMP_TO_BORDER}, {@see GL45::GL_MIRRORED_REPEAT},
     *    {@see GL45::GL_REPEAT}, or
     *    {@see GL45::GL_MIRROR_CLAMP_TO_EDGE}. See the discussion under {@see
     *    GL45::GL_TEXTURE_WRAP_S}. Initially,
     *    {@see GL45::GL_TEXTURE_WRAP_T} is set to {@see GL45::GL_REPEAT}.
     *
     *  - {@see GL45::GL_TEXTURE_WRAP_R}: Sets the wrap parameter for texture
     *    coordinate r to either {@see GL45::GL_CLAMP_TO_EDGE},
     *    {@see GL45::GL_CLAMP_TO_BORDER}, {@see GL45::GL_MIRRORED_REPEAT},
     *    {@see GL45::GL_REPEAT}, or
     *    {@see GL45::GL_MIRROR_CLAMP_TO_EDGE}. See the discussion under {@see
     *    GL45::GL_TEXTURE_WRAP_S}. Initially,
     *    {@see GL45::GL_TEXTURE_WRAP_R} is set to {@see GL45::GL_REPEAT}.
     *
     * @see http://docs.gl/gl2/glGetBufferParameteriv
     * @see http://docs.gl/gl2/glTexParameter
     * @see http://docs.gl/gl4/glTexParameter
     * @since 4.5
     * @param int $texture
     * @param int $pname
     * @param CData|null $param
     * @return void
     */
    public function textureParameteriv(int $texture, int $pname, ?CData $param): void
    {
        $__proc = $this->proc('glTextureParameteriv',
            'void (*)(GLuint texture, GLenum pname, const GLint *param)');
        $__proc($texture, $pname, $param);
    }

    /**
     * {@see GL45::texStorage1D} and {@see GL45::textureStorage1D} specify the storage requirements for all
     * levels of a one-dimensional texture simultaneously. Once a texture is specified with this command, the format
     * and dimensions of all levels become immutable unless it is a proxy texture. The contents of the image may
     * still be modified, however, its storage requirements may not change. Such a texture is referred to as an
     * immutable-format texture.
     *
     * Calling {@see GL45::texStorage1D} is equivalent, assuming no errors are generated, to executing the
     * following pseudo-code:
     *
     * <code>
     *     for (i = 0; i < levels; i++) {
     *         glTexImage1D(target, i, internalformat, width, 0, format, type, NULL);
     *         width = max(1, (width / 2));
     *     }
     * </code>
     * Calling {@see GL45::textureStorage1D} is equivalent to the above pseudo-code, where $target is the effective
     * target of $texture and it is as if $texture were bound to $target for the purposes of
     * {@see GL45::texImage1D}.
     *
     * Since no texture data is actually provided, the values used in the pseudo-code for $format and $type are
     * irrelevant and may be considered to be any values that are legal for the chosen $internalformat enumerant.
     * $internalformat must be one of the sized internal formats given in Table 1 below, one of the sized
     * depth-component formats {@see GL45::GL_DEPTH_COMPONENT32F}, {@see GL45::GL_DEPTH_COMPONENT24}, or
     * {@see GL45::GL_DEPTH_COMPONENT16}, one of the combined depth-stencil formats,
     * {@see GL45::GL_DEPTH32F_STENCIL8}, or {@see GL45::GL_DEPTH24_STENCIL8}, or the stencil-only format,
     * {@see GL45::GL_STENCIL_INDEX8}. Upon success, the value of {@see GL45::GL_TEXTURE_IMMUTABLE_FORMAT} becomes
     * {@see GL45::GL_TRUE}. The value of {@see GL45::GL_TEXTURE_IMMUTABLE_FORMAT} may be discovered by calling
     * {@see GL45::getTexParameter} with $pname set to {@see GL45::GL_TEXTURE_IMMUTABLE_FORMAT}. No further changes
     * to the dimensions or format of the texture object may be made. Using any command that might alter the
     * dimensions or format of the texture object (such as {@see GL45::texImage1D} or another call to
     * {@see GL45::texStorage1D}) will result in the generation of a {@see GL45::GL_INVALID_OPERATION} error, even
     * if it would not, in fact, alter the dimensions or format of the object.
     *
     * @see http://docs.gl/gl4/glTexStorage1D
     * @since 4.5
     * @param int $texture
     * @param int $levels
     * @param int $internalformat
     * @param int $width
     * @return void
     */
    public function textureStorage1D(int $texture, int $levels, int $internalformat, int $width): void
    {
        $__proc = $this->proc('glTextureStorage1D',
            'void (*)(GLuint texture, GLsizei levels, GLenum internalformat, GLsizei width)');
        $__proc($texture, $levels, $internalformat, $width);
    }

    /**
     * {@see GL45::texStorage2D} and {@see GL45::textureStorage2D} specify the storage requirements for all
     * levels of a two-dimensional texture or one-dimensional texture array simultaneously. Once a texture is
     * specified with this command, the format and dimensions of all levels become immutable unless it is a proxy
     * texture. The contents of the image may still be modified, however, its storage requirements may not change.
     * Such a texture is referred to as an immutable-format texture.
     *
     * The behavior of {@see GL45::texStorage2D} depends on the $target parameter. When $target is
     * {@see GL45::GL_TEXTURE_2D}, {@see GL45::GL_PROXY_TEXTURE_2D}, {@see GL45::GL_TEXTURE_RECTANGLE},
     * {@see GL45::GL_PROXY_TEXTURE_RECTANGLE} or {@see GL45::GL_PROXY_TEXTURE_CUBE_MAP}, calling
     * {@see GL45::texStorage2D} is equivalent, assuming no errors are generated, to executing the following
     * pseudo-code:
     *
     * <code>
     *     for (i = 0; i < levels; i++) {
     *         glTexImage2D(target, i, internalformat, width, height, 0, format, type, NULL);
     *         width = max(1, (width / 2));
     *         height = max(1, (height / 2));
     *     }
     * </code>
     * When $target is {@see GL45::GL_TEXTURE_CUBE_MAP}, {@see GL45::texStorage2D} is equivalent to:
     *
     * <code>
     *     for (i = 0; i < levels; i++) {
     *         for (face in (+X, -X, +Y, -Y, +Z, -Z)) {
     *             glTexImage2D(face, i, internalformat, width, height, 0, format, type, NULL);
     *         }
     *         width = max(1, (width / 2));
     *         height = max(1, (height / 2));
     *     }
     * </code>
     * When $target is {@see GL45::GL_TEXTURE_1D_ARRAY} or {@see GL45::GL_PROXY_TEXTURE_1D_ARRAY},
     * {@see GL45::texStorage2D} is equivalent to:
     *
     * <code>
     *     for (i = 0; i < levels; i++) {
     *         glTexImage2D(target, i, internalformat, width, height, 0, format, type, NULL);
     *         width = max(1, (width / 2));
     *     }
     * </code>
     * Calling {@see GL45::textureStorage2D} is equivalent to the above pseudo-code, where $target is the effective
     * target of $texture and it is as if $texture were bound to $target for the purposes of
     * {@see GL45::texImage2D}.
     *
     * Since no texture data is actually provided, the values used in the pseudo-code for $format and $type are
     * irrelevant and may be considered to be any values that are legal for the chosen $internalformat enumerant.
     * $internalformat must be one of the sized internal formats given in Table 1 below, one of the sized
     * depth-component formats {@see GL45::GL_DEPTH_COMPONENT32F}, {@see GL45::GL_DEPTH_COMPONENT24}, or
     * {@see GL45::GL_DEPTH_COMPONENT16}, one of the combined depth-stencil formats,
     * {@see GL45::GL_DEPTH32F_STENCIL8}, or {@see GL45::GL_DEPTH24_STENCIL8}, or the stencil-only format,
     * {@see GL45::GL_STENCIL_INDEX8}. Upon success, the value of {@see GL45::GL_TEXTURE_IMMUTABLE_FORMAT} becomes
     * {@see GL45::GL_TRUE}. The value of {@see GL45::GL_TEXTURE_IMMUTABLE_FORMAT} may be discovered by calling
     * {@see GL45::getTexParameter} with $pname set to {@see GL45::GL_TEXTURE_IMMUTABLE_FORMAT}. No further changes
     * to the dimensions or format of the texture object may be made. Using any command that might alter the
     * dimensions or format of the texture object (such as {@see GL45::texImage2D} or another call to
     * {@see GL45::texStorage2D}) will result in the generation of a {@see GL45::GL_INVALID_OPERATION} error, even
     * if it would not, in fact, alter the dimensions or format of the object.
     *
     * @see http://docs.gl/gl4/glTexStorage2D
     * @since 4.5
     * @param int $texture
     * @param int $levels
     * @param int $internalformat
     * @param int $width
     * @param int $height
     * @return void
     */
    public function textureStorage2D(int $texture, int $levels, int $internalformat, int $width, int $height): void
    {
        $__proc = $this->proc('glTextureStorage2D',
            'void (*)(GLuint texture, GLsizei levels, GLenum internalformat, GLsizei width, GLsizei height)');
        $__proc($texture, $levels, $internalformat, $width, $height);
    }

    /**
     * {@see GL45::texStorage2DMultisample} and {@see GL45::textureStorage2DMultisample} specify the storage
     * requirements for a two-dimensional multisample texture. Once a texture is specified with this command, its
     * format and dimensions become immutable unless it is a proxy texture. The contents of the image may still be
     * modified, however, its storage requirements may not change. Such a texture is referred to as an
     * immutable-format texture.
     *
     * $samples specifies the number of samples to be used for the texture and must be greater than zero and less
     * than or equal to the value of {@see GL45::GL_MAX_SAMPLES}. $internalformat must be a color-renderable,
     * depth-renderable, or stencil-renderable format. $width and $height specify the width and height, respectively,
     * of the texture. If $fixedsamplelocations is {@see GL45::GL_TRUE}, the image will use identical sample
     * locations and the same number of samples for all texels in the image, and the sample locations will not depend
     * on the internal format or size of the image.
     *
     * @see http://docs.gl/gl4/glTexStorage2DMultisample
     * @since 4.5
     * @param int $texture
     * @param int $samples
     * @param int $internalformat
     * @param int $width
     * @param int $height
     * @param int $fixedsamplelocations
     * @return void
     */
    public function textureStorage2DMultisample(
        int $texture,
        int $samples,
        int $internalformat,
        int $width,
        int $height,
        int $fixedsamplelocations
    ): void {
        $__proc = $this->proc('glTextureStorage2DMultisample',
            'void (*)(GLuint texture, GLsizei samples, GLenum internalformat, GLsizei width, GLsizei height, GLboolean fixedsamplelocations)');
        $__proc($texture, $samples, $internalformat, $width, $height, $fixedsamplelocations);
    }

    /**
     * {@see GL45::texStorage3D} and {@see GL45::textureStorage3D} specify the storage requirements for all
     * levels of a three-dimensional, two-dimensional array or cube-map array texture simultaneously. Once a texture
     * is specified with this command, the format and dimensions of all levels become immutable unless it is a proxy
     * texture. The contents of the image may still be modified, however, its storage requirements may not change.
     * Such a texture is referred to as an immutable-format texture.
     *
     * The behavior of {@see GL45::texStorage3D} depends on the $target parameter. When $target is
     * {@see GL45::GL_TEXTURE_3D}, or {@see GL45::GL_PROXY_TEXTURE_3D}, calling {@see GL45::texStorage3D} is
     * equivalent, assuming no errors are generated, to executing the following pseudo-code:
     *
     * <code>
     *     for (i = 0; i < levels; i++) {
     *         glTexImage3D(target, i, internalformat, width, height, depth, 0, format, type, NULL);
     *         width = max(1, (width / 2));
     *         height = max(1, (height / 2));
     *         depth = max(1, (depth / 2));
     *     }
     * </code>
     * When $target is {@see GL45::GL_TEXTURE_2D_ARRAY}, {@see GL45::GL_PROXY_TEXTURE_2D_ARRAY},
     * {@see GL45::GL_TEXTURE_CUBE_MAP_ARRAY}, or {@see GL45::GL_PROXY_TEXTURE_CUBE_MAP_ARRAY},
     * {@see GL45::texStorage3D} is equivalent to:
     *
     * <code>
     *     for (i = 0; i < levels; i++) {
     *         glTexImage3D(target, i, internalformat, width, height, depth, 0, format, type, NULL);
     *         width = max(1, (width / 2));
     *         height = max(1, (height / 2));
     *     }
     * </code>
     * Calling {@see GL45::textureStorage3D} is equivalent to the above pseudo-code, where $target is the effective
     * target of $texture and it is as if $texture were bound to $target for the purposes of
     * {@see GL45::texImage3D}.
     *
     * Since no texture data is actually provided, the values used in the pseudo-code for $format and $type are
     * irrelevant and may be considered to be any values that are legal for the chosen $internalformat enumerant.
     * $internalformat must be one of the sized internal formats given in Table 1 below, one of the sized
     * depth-component formats {@see GL45::GL_DEPTH_COMPONENT32F}, {@see GL45::GL_DEPTH_COMPONENT24}, or
     * {@see GL45::GL_DEPTH_COMPONENT16}, one of the combined depth-stencil formats,
     * {@see GL45::GL_DEPTH32F_STENCIL8}, or {@see GL45::GL_DEPTH24_STENCIL8}, or the stencil-only format,
     * {@see GL45::GL_STENCIL_INDEX8}. Upon success, the value of {@see GL45::GL_TEXTURE_IMMUTABLE_FORMAT} becomes
     * {@see GL45::GL_TRUE}. The value of {@see GL45::GL_TEXTURE_IMMUTABLE_FORMAT} may be discovered by calling
     * {@see GL45::getTexParameter} with $pname set to {@see GL45::GL_TEXTURE_IMMUTABLE_FORMAT}. No further changes
     * to the dimensions or format of the texture object may be made. Using any command that might alter the
     * dimensions or format of the texture object (such as {@see GL45::texImage3D} or another call to
     * {@see GL45::texStorage3D}) will result in the generation of a {@see GL45::GL_INVALID_OPERATION} error, even
     * if it would not, in fact, alter the dimensions or format of the object.
     *
     * @see http://docs.gl/gl4/glTexStorage3D
     * @since 4.5
     * @param int $texture
     * @param int $levels
     * @param int $internalformat
     * @param int $width
     * @param int $height
     * @param int $depth
     * @return void
     */
    public function textureStorage3D(
        int $texture,
        int $levels,
        int $internalformat,
        int $width,
        int $height,
        int $depth
    ): void {
        $__proc = $this->proc('glTextureStorage3D',
            'void (*)(GLuint texture, GLsizei levels, GLenum internalformat, GLsizei width, GLsizei height, GLsizei depth)');
        $__proc($texture, $levels, $internalformat, $width, $height, $depth);
    }

    /**
     * {@see GL45::texStorage3DMultisample} and {@see GL45::textureStorage3DMultisample} specify the storage
     * requirements for a two-dimensional multisample array texture. Once a texture is specified with this command,
     * its format and dimensions become immutable unless it is a proxy texture. The contents of the image may still
     * be modified, however, its storage requirements may not change. Such a texture is referred to as an
     * immutable-format texture.
     *
     * $samples specifies the number of samples to be used for the texture and must be greater than zero and less
     * than or equal to the value of {@see GL45::GL_MAX_SAMPLES}. $internalformat must be a color-renderable,
     * depth-renderable, or stencil-renderable format. $width and $height specify the width and height, respectively,
     * of the texture and $depth specifies the depth (or the number of layers) of the texture. If
     * $fixedsamplelocations is {@see GL45::GL_TRUE}, the image will use identical sample locations and the same
     * number of samples for all texels in the image, and the sample locations will not depend on the internal format
     * or size of the image.
     *
     * @see http://docs.gl/gl4/glTexStorage3DMultisample
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
    public function textureStorage3DMultisample(
        int $texture,
        int $samples,
        int $internalformat,
        int $width,
        int $height,
        int $depth,
        int $fixedsamplelocations
    ): void {
        $__proc = $this->proc('glTextureStorage3DMultisample',
            'void (*)(GLuint texture, GLsizei samples, GLenum internalformat, GLsizei width, GLsizei height, GLsizei depth, GLboolean fixedsamplelocations)');
        $__proc($texture, $samples, $internalformat, $width, $height, $depth, $fixedsamplelocations);
    }

    /**
     * Texturing maps a portion of a specified texture image onto each graphical primitive for which texturing is
     * enabled. To enable or disable one-dimensional texturing, call {@see GL45::enable} and
     * {@see GL45::disable} with argument {@see GL45::GL_TEXTURE_1D}.
     *
     * {@see GL45::texSubImage1D} and {@see GL45::textureSubImage1D} redefine a contiguous subregion of an
     * existing one-dimensional texture image. The texels referenced by $pixels replace the portion of the existing
     * texture array with x indices $xoffset and    xoffset + width - 1  , inclusive. This region may not include any
     * texels outside the range of the texture array as it was originally specified. It is not an error to specify a
     * subtexture with width of 0, but such a specification has no effect.
     *
     * If a non-zero named buffer object is bound to the {@see GL45::GL_PIXEL_UNPACK_BUFFER} target (see
     * {@see GL45::bindBuffer}) while a texture image is specified, $pixels is treated as a byte offset into the
     * buffer object's data store.
     *
     * @see http://docs.gl/gl2/glTexSubImage1D
     * @see http://docs.gl/gl4/glTexSubImage1D
     * @since 4.5
     * @param int $texture
     * @param int $level
     * @param int $xoffset
     * @param int $width
     * @param int $format
     * @param int $type
     * @param CData|null $pixels
     * @return void
     */
    public function textureSubImage1D(
        int $texture,
        int $level,
        int $xoffset,
        int $width,
        int $format,
        int $type,
        ?CData $pixels
    ): void {
        $__proc = $this->proc('glTextureSubImage1D',
            'void (*)(GLuint texture, GLint level, GLint xoffset, GLsizei width, GLenum format, GLenum type, const void *pixels)');
        $__proc($texture, $level, $xoffset, $width, $format, $type, $pixels);
    }

    /**
     * Texturing maps a portion of a specified texture image onto each graphical primitive for which texturing is
     * enabled.
     *
     * {@see GL45::texSubImage2D} and {@see GL45::textureSubImage2D} redefine a contiguous subregion of an
     * existing two-dimensional or one-dimensional array texture image. The texels referenced by $pixels replace the
     * portion of the existing texture array with x indices $xoffset and    xoffset + width - 1  , inclusive, and y
     * indices $yoffset and    yoffset + height - 1  , inclusive. This region may not include any texels outside the
     * range of the texture array as it was originally specified. It is not an error to specify a subtexture with
     * zero width or height, but such a specification has no effect.
     *
     * If a non-zero named buffer object is bound to the {@see GL45::GL_PIXEL_UNPACK_BUFFER} target (see
     * {@see GL45::bindBuffer}) while a texture image is specified, $pixels is treated as a byte offset into the
     * buffer object's data store.
     *
     * @see http://docs.gl/gl2/glTexSubImage2D
     * @see http://docs.gl/gl4/glTexSubImage2D
     * @since 4.5
     * @param int $texture
     * @param int $level
     * @param int $xoffset
     * @param int $yoffset
     * @param int $width
     * @param int $height
     * @param int $format
     * @param int $type
     * @param CData|null $pixels
     * @return void
     */
    public function textureSubImage2D(
        int $texture,
        int $level,
        int $xoffset,
        int $yoffset,
        int $width,
        int $height,
        int $format,
        int $type,
        ?CData $pixels
    ): void {
        $__proc = $this->proc('glTextureSubImage2D',
            'void (*)(GLuint texture, GLint level, GLint xoffset, GLint yoffset, GLsizei width, GLsizei height, GLenum format, GLenum type, const void *pixels)');
        $__proc($texture, $level, $xoffset, $yoffset, $width, $height, $format, $type, $pixels);
    }

    /**
     * Texturing maps a portion of a specified texture image onto each graphical primitive for which texturing is
     * enabled.
     *
     * {@see GL45::texSubImage3D} and {@see GL45::textureSubImage3D} redefine a contiguous subregion of an
     * existing three-dimensional or two-dimensioanl array texture image. The texels referenced by $pixels replace
     * the portion of the existing texture array with x indices $xoffset and    xoffset + width - 1  , inclusive, y
     * indices $yoffset and    yoffset + height - 1  , inclusive, and z indices $zoffset and    zoffset + depth - 1
     * , inclusive. For three-dimensional textures, the z index refers to the third dimension. For two-dimensional
     * array textures, the z index refers to the slice index. This region may not include any texels outside the
     * range of the texture array as it was originally specified. It is not an error to specify a subtexture with
     * zero width, height, or depth but such a specification has no effect.
     *
     * If a non-zero named buffer object is bound to the {@see GL45::GL_PIXEL_UNPACK_BUFFER} target (see
     * {@see GL45::bindBuffer}) while a texture image is specified, $pixels is treated as a byte offset into the
     * buffer object's data store.
     *
     * @see http://docs.gl/gl2/glTexSubImage3D
     * @see http://docs.gl/gl4/glTexSubImage3D
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
     * @param CData|null $pixels
     * @return void
     */
    public function textureSubImage3D(
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
        ?CData $pixels
    ): void {
        $__proc = $this->proc('glTextureSubImage3D',
            'void (*)(GLuint texture, GLint level, GLint xoffset, GLint yoffset, GLint zoffset, GLsizei width, GLsizei height, GLsizei depth, GLenum format, GLenum type, const void *pixels)');
        $__proc($texture, $level, $xoffset, $yoffset, $zoffset, $width, $height, $depth, $format, $type, $pixels);
    }

    /**
     * {@see GL45::transformFeedbackBufferBase} binds the buffer object $buffer to the binding point at index
     * $index of the transform feedback object $xfb.
     *
     * @see http://docs.gl/gl4/glTransformFeedbackBufferBase
     * @since 4.5
     * @param int $xfb
     * @param int $index
     * @param int $buffer
     * @return void
     */
    public function transformFeedbackBufferBase(int $xfb, int $index, int $buffer): void
    {
        $__proc = $this->proc('glTransformFeedbackBufferBase',
            'void (*)(GLuint xfb, GLuint index, GLuint buffer)');
        $__proc($xfb, $index, $buffer);
    }

    /**
     * {@see GL45::transformFeedbackBufferRange} binds a range of the buffer object $buffer represented by $offset
     * and $size to the binding point at index $index of the transform feedback object $xfb.
     *
     * $offset specifies the offset in basic machine units into the buffer object $buffer and $size specifies the
     * amount of data that can be read from the buffer object while used as an indexed target.
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
    public function transformFeedbackBufferRange(int $xfb, int $index, int $buffer, int $offset, int $size): void
    {
        $__proc = $this->proc('glTransformFeedbackBufferRange',
            'void (*)(GLuint xfb, GLuint index, GLuint buffer, GLintptr offset, GLsizeiptr size)');
        $__proc($xfb, $index, $buffer, $offset, $size);
    }

    /**
     * {@see GL45::unmapBuffer} and {@see GL45::unmapNamedBuffer} unmap (release) any mapping of a specified
     * buffer object into the client's address space (see {@see GL45::mapBufferRange} and
     * {@see GL45::mapBuffer}).
     *
     * If a mapping is not unmapped before the corresponding buffer object's data store is used by the GL, an error
     * will be generated by any GL command that attempts to dereference the buffer object's data store, unless the
     * buffer was successfully mapped with {@see GL45::GL_MAP_PERSISTENT_BIT} (see {@see GL45::mapBufferRange}).
     * When a data store is unmapped, the mapped pointer becomes invalid.
     *
     * {@see GL45::unmapBuffer} returns {@see GL45::GL_TRUE} unless the data store contents have become corrupt
     * during the time the data store was mapped. This can occur for system-specific reasons that affect the
     * availability of graphics memory, such as screen mode changes. In such situations, {@see GL45::GL_FALSE} is
     * returned and the data store contents are undefined. An application must detect this rare condition and
     * reinitialize the data store.
     *
     * A buffer object's mapped data store is automatically unmapped when the buffer object is deleted or its data
     * store is recreated with {@see GL45::bufferData}).
     *
     * @see http://docs.gl/gl4/glUnmapBuffer
     * @since 4.5
     * @param int $buffer
     * @return bool
     */
    public function unmapNamedBuffer(int $buffer): bool
    {
        $__proc = $this->proc('glUnmapNamedBuffer', 'GLboolean (*)(GLuint buffer)');

        return $__proc($buffer) !== 0;
    }

    /**
     * {@see GL45::vertexAttribBinding} and {@see GL45::vertexArrayAttribBinding} establishes an association
     * between the generic vertex attribute of a vertex array object whose index is given by $attribindex, and a
     * vertex buffer binding whose index is given by $bindingindex. For {@see GL45::vertexAttribBinding}, the
     * vertex array object affected is that currently bound. For {@see GL45::vertexArrayAttribBinding}, $vaobj is
     * the name of the vertex array object.
     *
     * $attribindex must be less than the value of {@see GL45::GL_MAX_VERTEX_ATTRIBS} and $bindingindex must be less
     * than the value of {@see GL45::GL_MAX_VERTEX_ATTRIB_BINDINGS}.
     *
     * @see http://docs.gl/gl4/glVertexAttribBinding
     * @since 4.5
     * @param int $vaobj
     * @param int $attribindex
     * @param int $bindingindex
     * @return void
     */
    public function vertexArrayAttribBinding(int $vaobj, int $attribindex, int $bindingindex): void
    {
        $__proc = $this->proc('glVertexArrayAttribBinding',
            'void (*)(GLuint vaobj, GLuint attribindex, GLuint bindingindex)');
        $__proc($vaobj, $attribindex, $bindingindex);
    }

    /**
     * {@see GL45::vertexAttribFormat}, {@see GL45::vertexAttribIFormat} and {@see GL45::vertexAttribLFormat},
     * as well as {@see GL45::vertexArrayAttribFormat}, {@see GL45::vertexArrayAttribIFormat} and
     * {@see GL45::vertexArrayAttribLFormat} specify the organization of data in vertex arrays. The first three
     * calls operate on the bound vertex array object, whereas the last three ones modify the state of a vertex array
     * object with ID $vaobj. $attribindex specifies the index of the generic vertex attribute array whose data
     * layout is being described, and must be less than the value of {@see GL45::GL_MAX_VERTEX_ATTRIBS}.
     *
     * $size determines the number of components per vertex are allocated to the specified attribute and must be 1,
     * 2, 3 or 4. $type indicates the type of the data. If $type is one of {@see GL45::GL_BYTE},
     * {@see GL45::GL_SHORT}, {@see GL45::GL_INT}, {@see GL45::GL_FIXED}, {@see GL45::GL_FLOAT},
     * {@see GL45::GL_HALF_FLOAT}, and {@see GL45::GL_DOUBLE} indicate types `GLbyte`, `GLshort`, `GLint`, `GLfixed`,
     * `GLfloat`, `GLhalf`, and `GLdouble`, respectively; the values {@see GL45::GL_UNSIGNED_BYTE},
     * {@see GL45::GL_UNSIGNED_SHORT}, and {@see GL45::GL_UNSIGNED_INT} indicate types `GLubyte`, `GLushort`, and
     * `GLuint`, respectively; the values {@see GL45::GL_INT_2_10_10_10_REV} and
     * {@see GL45::GL_UNSIGNED_INT_2_10_10_10_REV} indicating respectively four signed or unsigned elements packed
     * into a single `GLuint`; and the value {@see GL45::GL_UNSIGNED_INT_10F_11F_11F_REV} indicating three floating
     * point values packed into a single `GLuint`.
     *
     * {@see GL45::vertexAttribLFormat} and {@see GL45::vertexArrayAttribLFormat} is used to specify layout for
     * data associated with a generic attribute variable declared as 64-bit double precision components. For
     * {@see GL45::vertexAttribLFormat} and {@see GL45::vertexArrayAttribLFormat}, $type must be
     * {@see GL45::GL_DOUBLE}. In contrast to {@see GL45::vertexAttribFormat} or
     * {@see GL45::vertexArrayAttribFormat}, which will cause data declared as {@see GL45::GL_DOUBLE} to be
     * converted to 32-bit representation, {@see GL45::vertexAttribLFormat} and
     * {@see GL45::vertexArrayAttribLFormat} cause such data to be left in its natural, 64-bit representation.
     *
     * For {@see GL45::vertexAttribFormat} and {@see GL45::vertexArrayAttribFormat}, if $normalized is
     * {@see GL45::GL_TRUE}, then integer data is normalized to the range [-1, 1] or [0, 1] if it is signed or
     * unsigned, respectively. If $normalized is {@see GL45::GL_FALSE} then integer data is directly converted to
     * floating point.
     *
     * $relativeoffset is the offset, measured in basic machine units of the first element relative to the start of
     * the vertex buffer binding this attribute fetches from.
     *
     * {@see GL45::vertexAttribFormat} and {@see GL45::vertexArrayAttribFormat} should be used to describe vertex
     * attribute layout for floating-point vertex attributes, {@see GL45::vertexAttribIFormat} and
     * {@see GL45::vertexArrayAttribIFormat} should be used to describe vertex attribute layout for integer vertex
     * attribute, and {@see GL45::vertexAttribLFormat} and {@see GL45::vertexArrayAttribLFormat} should be used
     * to describe the layout for 64-bit vertex attributes. Data for an array specified by
     * {@see GL45::vertexAttribIFormat} and {@see GL45::vertexArrayAttribIFormat} will always be left as integer
     * values; such data are referred to as pure integers.
     *
     * @see http://docs.gl/gl4/glVertexAttribFormat
     * @since 4.5
     * @param int $vaobj
     * @param int $attribindex
     * @param int $size
     * @param int $type
     * @param int $normalized
     * @param int $relativeoffset
     * @return void
     */
    public function vertexArrayAttribFormat(
        int $vaobj,
        int $attribindex,
        int $size,
        int $type,
        int $normalized,
        int $relativeoffset
    ): void {
        $__proc = $this->proc('glVertexArrayAttribFormat',
            'void (*)(GLuint vaobj, GLuint attribindex, GLint size, GLenum type, GLboolean normalized, GLuint relativeoffset)');
        $__proc($vaobj, $attribindex, $size, $type, $normalized, $relativeoffset);
    }

    /**
     * {@see GL45::vertexAttribFormat}, {@see GL45::vertexAttribIFormat} and {@see GL45::vertexAttribLFormat},
     * as well as {@see GL45::vertexArrayAttribFormat}, {@see GL45::vertexArrayAttribIFormat} and
     * {@see GL45::vertexArrayAttribLFormat} specify the organization of data in vertex arrays. The first three
     * calls operate on the bound vertex array object, whereas the last three ones modify the state of a vertex array
     * object with ID $vaobj. $attribindex specifies the index of the generic vertex attribute array whose data
     * layout is being described, and must be less than the value of {@see GL45::GL_MAX_VERTEX_ATTRIBS}.
     *
     * $size determines the number of components per vertex are allocated to the specified attribute and must be 1,
     * 2, 3 or 4. $type indicates the type of the data. If $type is one of {@see GL45::GL_BYTE},
     * {@see GL45::GL_SHORT}, {@see GL45::GL_INT}, {@see GL45::GL_FIXED}, {@see GL45::GL_FLOAT},
     * {@see GL45::GL_HALF_FLOAT}, and {@see GL45::GL_DOUBLE} indicate types `GLbyte`, `GLshort`, `GLint`, `GLfixed`,
     * `GLfloat`, `GLhalf`, and `GLdouble`, respectively; the values {@see GL45::GL_UNSIGNED_BYTE},
     * {@see GL45::GL_UNSIGNED_SHORT}, and {@see GL45::GL_UNSIGNED_INT} indicate types `GLubyte`, `GLushort`, and
     * `GLuint`, respectively; the values {@see GL45::GL_INT_2_10_10_10_REV} and
     * {@see GL45::GL_UNSIGNED_INT_2_10_10_10_REV} indicating respectively four signed or unsigned elements packed
     * into a single `GLuint`; and the value {@see GL45::GL_UNSIGNED_INT_10F_11F_11F_REV} indicating three floating
     * point values packed into a single `GLuint`.
     *
     * {@see GL45::vertexAttribLFormat} and {@see GL45::vertexArrayAttribLFormat} is used to specify layout for
     * data associated with a generic attribute variable declared as 64-bit double precision components. For
     * {@see GL45::vertexAttribLFormat} and {@see GL45::vertexArrayAttribLFormat}, $type must be
     * {@see GL45::GL_DOUBLE}. In contrast to {@see GL45::vertexAttribFormat} or
     * {@see GL45::vertexArrayAttribFormat}, which will cause data declared as {@see GL45::GL_DOUBLE} to be
     * converted to 32-bit representation, {@see GL45::vertexAttribLFormat} and
     * {@see GL45::vertexArrayAttribLFormat} cause such data to be left in its natural, 64-bit representation.
     *
     * For {@see GL45::vertexAttribFormat} and {@see GL45::vertexArrayAttribFormat}, if $normalized is
     * {@see GL45::GL_TRUE}, then integer data is normalized to the range [-1, 1] or [0, 1] if it is signed or
     * unsigned, respectively. If $normalized is {@see GL45::GL_FALSE} then integer data is directly converted to
     * floating point.
     *
     * $relativeoffset is the offset, measured in basic machine units of the first element relative to the start of
     * the vertex buffer binding this attribute fetches from.
     *
     * {@see GL45::vertexAttribFormat} and {@see GL45::vertexArrayAttribFormat} should be used to describe vertex
     * attribute layout for floating-point vertex attributes, {@see GL45::vertexAttribIFormat} and
     * {@see GL45::vertexArrayAttribIFormat} should be used to describe vertex attribute layout for integer vertex
     * attribute, and {@see GL45::vertexAttribLFormat} and {@see GL45::vertexArrayAttribLFormat} should be used
     * to describe the layout for 64-bit vertex attributes. Data for an array specified by
     * {@see GL45::vertexAttribIFormat} and {@see GL45::vertexArrayAttribIFormat} will always be left as integer
     * values; such data are referred to as pure integers.
     *
     * @see http://docs.gl/gl4/glVertexAttribFormat
     * @since 4.5
     * @param int $vaobj
     * @param int $attribindex
     * @param int $size
     * @param int $type
     * @param int $relativeoffset
     * @return void
     */
    public function vertexArrayAttribIFormat(
        int $vaobj,
        int $attribindex,
        int $size,
        int $type,
        int $relativeoffset
    ): void {
        $__proc = $this->proc('glVertexArrayAttribIFormat',
            'void (*)(GLuint vaobj, GLuint attribindex, GLint size, GLenum type, GLuint relativeoffset)');
        $__proc($vaobj, $attribindex, $size, $type, $relativeoffset);
    }

    /**
     * {@see GL45::vertexAttribFormat}, {@see GL45::vertexAttribIFormat} and {@see GL45::vertexAttribLFormat},
     * as well as {@see GL45::vertexArrayAttribFormat}, {@see GL45::vertexArrayAttribIFormat} and
     * {@see GL45::vertexArrayAttribLFormat} specify the organization of data in vertex arrays. The first three
     * calls operate on the bound vertex array object, whereas the last three ones modify the state of a vertex array
     * object with ID $vaobj. $attribindex specifies the index of the generic vertex attribute array whose data
     * layout is being described, and must be less than the value of {@see GL45::GL_MAX_VERTEX_ATTRIBS}.
     *
     * $size determines the number of components per vertex are allocated to the specified attribute and must be 1,
     * 2, 3 or 4. $type indicates the type of the data. If $type is one of {@see GL45::GL_BYTE},
     * {@see GL45::GL_SHORT}, {@see GL45::GL_INT}, {@see GL45::GL_FIXED}, {@see GL45::GL_FLOAT},
     * {@see GL45::GL_HALF_FLOAT}, and {@see GL45::GL_DOUBLE} indicate types `GLbyte`, `GLshort`, `GLint`, `GLfixed`,
     * `GLfloat`, `GLhalf`, and `GLdouble`, respectively; the values {@see GL45::GL_UNSIGNED_BYTE},
     * {@see GL45::GL_UNSIGNED_SHORT}, and {@see GL45::GL_UNSIGNED_INT} indicate types `GLubyte`, `GLushort`, and
     * `GLuint`, respectively; the values {@see GL45::GL_INT_2_10_10_10_REV} and
     * {@see GL45::GL_UNSIGNED_INT_2_10_10_10_REV} indicating respectively four signed or unsigned elements packed
     * into a single `GLuint`; and the value {@see GL45::GL_UNSIGNED_INT_10F_11F_11F_REV} indicating three floating
     * point values packed into a single `GLuint`.
     *
     * {@see GL45::vertexAttribLFormat} and {@see GL45::vertexArrayAttribLFormat} is used to specify layout for
     * data associated with a generic attribute variable declared as 64-bit double precision components. For
     * {@see GL45::vertexAttribLFormat} and {@see GL45::vertexArrayAttribLFormat}, $type must be
     * {@see GL45::GL_DOUBLE}. In contrast to {@see GL45::vertexAttribFormat} or
     * {@see GL45::vertexArrayAttribFormat}, which will cause data declared as {@see GL45::GL_DOUBLE} to be
     * converted to 32-bit representation, {@see GL45::vertexAttribLFormat} and
     * {@see GL45::vertexArrayAttribLFormat} cause such data to be left in its natural, 64-bit representation.
     *
     * For {@see GL45::vertexAttribFormat} and {@see GL45::vertexArrayAttribFormat}, if $normalized is
     * {@see GL45::GL_TRUE}, then integer data is normalized to the range [-1, 1] or [0, 1] if it is signed or
     * unsigned, respectively. If $normalized is {@see GL45::GL_FALSE} then integer data is directly converted to
     * floating point.
     *
     * $relativeoffset is the offset, measured in basic machine units of the first element relative to the start of
     * the vertex buffer binding this attribute fetches from.
     *
     * {@see GL45::vertexAttribFormat} and {@see GL45::vertexArrayAttribFormat} should be used to describe vertex
     * attribute layout for floating-point vertex attributes, {@see GL45::vertexAttribIFormat} and
     * {@see GL45::vertexArrayAttribIFormat} should be used to describe vertex attribute layout for integer vertex
     * attribute, and {@see GL45::vertexAttribLFormat} and {@see GL45::vertexArrayAttribLFormat} should be used
     * to describe the layout for 64-bit vertex attributes. Data for an array specified by
     * {@see GL45::vertexAttribIFormat} and {@see GL45::vertexArrayAttribIFormat} will always be left as integer
     * values; such data are referred to as pure integers.
     *
     * @see http://docs.gl/gl4/glVertexAttribFormat
     * @since 4.5
     * @param int $vaobj
     * @param int $attribindex
     * @param int $size
     * @param int $type
     * @param int $relativeoffset
     * @return void
     */
    public function vertexArrayAttribLFormat(
        int $vaobj,
        int $attribindex,
        int $size,
        int $type,
        int $relativeoffset
    ): void {
        $__proc = $this->proc('glVertexArrayAttribLFormat',
            'void (*)(GLuint vaobj, GLuint attribindex, GLint size, GLenum type, GLuint relativeoffset)');
        $__proc($vaobj, $attribindex, $size, $type, $relativeoffset);
    }

    /**
     * {@see GL45::vertexBindingDivisor} and {@see GL45::vertexArrayBindingDivisor} modify the rate at which
     * generic vertex attributes advance when rendering multiple instances of primitives in a single draw command. If
     * $divisor is zero, the attributes using the buffer bound to $bindingindex advance once per vertex. If $divisor
     * is non-zero, the attributes advance once per $divisor instances of the set(s) of vertices being rendered. An
     * attribute is referred to as instanced if the corresponding $divisor value is non-zero.
     *
     * {@see GL45::vertexBindingDivisor} uses currently bound vertex array object , whereas
     * {@see GL45::vertexArrayBindingDivisor} updates state of the vertex array object with ID $vaobj.
     *
     * @see http://docs.gl/gl4/glVertexBindingDivisor
     * @since 4.5
     * @param int $vaobj
     * @param int $bindingindex
     * @param int $divisor
     * @return void
     */
    public function vertexArrayBindingDivisor(int $vaobj, int $bindingindex, int $divisor): void
    {
        $__proc = $this->proc('glVertexArrayBindingDivisor',
            'void (*)(GLuint vaobj, GLuint bindingindex, GLuint divisor)');
        $__proc($vaobj, $bindingindex, $divisor);
    }

    /**
     * {@see GL45::vertexArrayElementBuffer} binds a buffer object with id $buffer to the element array buffer bind
     * point of a vertex array object with id $vaobj. If $buffer is zero, any existing element array buffer binding
     * to $vaobj is removed.
     *
     * @see http://docs.gl/gl4/glVertexArrayElementBuffer
     * @since 4.5
     * @param int $vaobj
     * @param int $buffer
     * @return void
     */
    public function vertexArrayElementBuffer(int $vaobj, int $buffer): void
    {
        $__proc = $this->proc('glVertexArrayElementBuffer', 'void (*)(GLuint vaobj, GLuint buffer)');
        $__proc($vaobj, $buffer);
    }

    /**
     * {@see GL45::vertexArrayElementBuffer} binds a buffer object with id $buffer to the element array buffer bind
     * point of a vertex array object with id $vaobj. If $buffer is zero, any existing element array buffer binding
     * to $vaobj is removed.
     *
     * @see http://docs.gl/gl4/glVertexArrayElementBuffer
     * @since 4.5
     * @param int $vaobj
     * @param int $bindingindex
     * @param int $buffer
     * @param int $offset
     * @param int $stride
     * @return void
     */
    public function vertexArrayVertexBuffer(int $vaobj, int $bindingindex, int $buffer, int $offset, int $stride): void
    {
        $__proc = $this->proc('glVertexArrayVertexBuffer',
            'void (*)(GLuint vaobj, GLuint bindingindex, GLuint buffer, GLintptr offset, GLsizei stride)');
        $__proc($vaobj, $bindingindex, $buffer, $offset, $stride);
    }

    /**
     * {@see GL45::vertexArrayElementBuffer} binds a buffer object with id $buffer to the element array buffer bind
     * point of a vertex array object with id $vaobj. If $buffer is zero, any existing element array buffer binding
     * to $vaobj is removed.
     *
     * @see http://docs.gl/gl4/glVertexArrayElementBuffer
     * @since 4.5
     * @param int $vaobj
     * @param int $first
     * @param int $count
     * @param CData|null $buffers
     * @param CData|null $offsets
     * @param CData|null $strides
     * @return void
     */
    public function vertexArrayVertexBuffers(
        int $vaobj,
        int $first,
        int $count,
        ?CData $buffers,
        ?CData $offsets,
        ?CData $strides
    ): void {
        $__proc = $this->proc('glVertexArrayVertexBuffers',
            'void (*)(GLuint vaobj, GLuint first, GLsizei count, const GLuint *buffers, const GLintptr *offsets, const GLsizei *strides)');
        $__proc($vaobj, $first, $count, $buffers, $offsets, $strides);
    }
}
