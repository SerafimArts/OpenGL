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
 * @version 1.2
 */
class GL12 extends GL11
{
    /**
     * @since 1.2
     * @var int
     */
    public const GL_ALIASED_POINT_SIZE_RANGE = 0x846D;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_ALIASED_LINE_WIDTH_RANGE = 0x846E;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_SMOOTH_POINT_SIZE_RANGE = 0x0B12;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_SMOOTH_POINT_SIZE_GRANULARITY = 0x0B13;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_SMOOTH_LINE_WIDTH_RANGE = 0x0B22;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_SMOOTH_LINE_WIDTH_GRANULARITY = 0x0B23;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_TEXTURE_BINDING_3D = 0x806A;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_PACK_SKIP_IMAGES = 0x806B;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_PACK_IMAGE_HEIGHT = 0x806C;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_UNPACK_SKIP_IMAGES = 0x806D;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_UNPACK_IMAGE_HEIGHT = 0x806E;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_TEXTURE_3D = 0x806F;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_PROXY_TEXTURE_3D = 0x8070;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_TEXTURE_DEPTH = 0x8071;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_TEXTURE_WRAP_R = 0x8072;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_MAX_3D_TEXTURE_SIZE = 0x8073;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_BGR = 0x80E0;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_BGRA = 0x80E1;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_UNSIGNED_BYTE_3_3_2 = 0x8032;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_UNSIGNED_BYTE_2_3_3_REV = 0x8362;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_UNSIGNED_SHORT_5_6_5 = 0x8363;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_UNSIGNED_SHORT_5_6_5_REV = 0x8364;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_UNSIGNED_SHORT_4_4_4_4 = 0x8033;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_UNSIGNED_SHORT_4_4_4_4_REV = 0x8365;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_UNSIGNED_SHORT_5_5_5_1 = 0x8034;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_UNSIGNED_SHORT_1_5_5_5_REV = 0x8366;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_UNSIGNED_INT_8_8_8_8 = 0x8035;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_UNSIGNED_INT_8_8_8_8_REV = 0x8367;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_UNSIGNED_INT_10_10_10_2 = 0x8036;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_UNSIGNED_INT_2_10_10_10_REV = 0x8368;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_RESCALE_NORMAL = 0x803A;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_LIGHT_MODEL_COLOR_CONTROL = 0x81F8;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_SINGLE_COLOR = 0x81F9;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_SEPARATE_SPECULAR_COLOR = 0x81FA;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_CLAMP_TO_EDGE = 0x812F;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_TEXTURE_MIN_LOD = 0x813A;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_TEXTURE_MAX_LOD = 0x813B;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_TEXTURE_BASE_LEVEL = 0x813C;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_TEXTURE_MAX_LEVEL = 0x813D;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_MAX_ELEMENTS_VERTICES = 0x80E8;
    /**
     * @since 1.2
     * @var int
     */
    public const GL_MAX_ELEMENTS_INDICES = 0x80E9;

    /**
     * {@see GL46::glCopyTexSubImage3D} and {@see GL46::glCopyTextureSubImage3D} functions replace a rectangular
     * portion of a three-dimensional or two-dimensional array texture image with pixels from the current
     * {@see GL46::GL_READ_BUFFER} (rather than from main memory, as is the case for {@see GL46::glTexSubImage3D}).
     *
     * The screen-aligned pixel rectangle with lower left corner at ($x, $y) and with width $width and height $height
     * replaces the portion of the texture array with x indices $xoffset through    xoffset + width - 1  , inclusive,
     * and y indices $yoffset through    yoffset + height - 1  , inclusive, at z index $zoffset and at the mipmap
     * level specified by $level.
     *
     * The pixels in the rectangle are processed exactly as if {@see GL46::glReadPixels} had been called, but the
     * process stops just before final conversion. At this point, all pixel component values are clamped to the range
     *    0 1   and then converted to the texture's internal format for storage in the texel array.
     *
     * The destination rectangle in the texture array may not include any texels outside the texture array as it was
     * originally specified. It is not an error to specify a subtexture with zero width or height, but such a
     * specification has no effect.
     *
     * If any of the pixels within the specified rectangle of the current {@see GL46::GL_READ_BUFFER} are outside the
     * read window associated with the current rendering context, then the values obtained for those pixels are
     * undefined.
     *
     * No change is made to the internalformat, width, height, depth, or border parameters of the specified texture
     * array or to texel values outside the specified subregion.
     *
     * @see http://docs.gl/gl2/glCopyTexSubImage3D
     * @see http://docs.gl/gl4/glCopyTexSubImage3D
     * @since 1.2
     * @param int $target
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
    public function copyTexSubImage3D(int $target, int $level, int $xoffset, int $yoffset, int $zoffset, int $x, int $y, int $width, int $height): void
    {
        $__proc = $this->getProcAs('glCopyTexSubImage3D', 'void (*)(GLenum target, GLint level, GLint xoffset, GLint yoffset, GLint zoffset, GLint x, GLint y, GLsizei width, GLsizei height)');
        $__proc($target, $level, $xoffset, $yoffset, $zoffset, $x, $y, $width, $height);
    }

    /**
     * {@see GL46::glDrawRangeElements} is a restricted form of {@see GL46::glDrawElements}. $mode, and $count match
     * the corresponding arguments to {@see GL46::glDrawElements}, with the additional constraint that all values in
     * the arrays $count must lie between $start and $end, inclusive.
     *
     * Implementations denote recommended maximum amounts of vertex and index data, which may be queried by calling
     * {@see GL46::glGet} with argument {@see GL46::GL_MAX_ELEMENTS_VERTICES} and
     * {@see GL46::GL_MAX_ELEMENTS_INDICES}. If    end - start + 1   is greater than the value of
     * {@see GL46::GL_MAX_ELEMENTS_VERTICES}, or if $count is greater than the value of
     * {@see GL46::GL_MAX_ELEMENTS_INDICES}, then the call may operate at reduced performance. There is no
     * requirement that all vertices in the range    start end   be referenced. However, the implementation may
     * partially process unused vertices, reducing performance from what could be achieved with an optimal index set.
     *
     * When {@see GL46::glDrawRangeElements} is called, it uses $count sequential elements from an enabled array,
     * starting at $start to construct a sequence of geometric primitives. $mode specifies what kind of primitives
     * are constructed, and how the array elements construct these primitives. If more than one array is enabled,
     * each is used.
     *
     * Vertex attributes that are modified by {@see GL46::glDrawRangeElements} have an unspecified value after
     * {@see GL46::glDrawRangeElements} returns. Attributes that aren't modified maintain their previous values.
     *
     * @see http://docs.gl/gl2/glDrawRangeElements
     * @see http://docs.gl/gl4/glDrawRangeElements
     * @since 1.2
     * @param int $mode
     * @param int $start
     * @param int $end
     * @param int $count
     * @param int $type
     * @param \FFI\CData|null $indices
     * @return void
     */
    public function drawRangeElements(int $mode, int $start, int $end, int $count, int $type, ?\FFI\CData $indices): void
    {
        $__proc = $this->getProcAs('glDrawRangeElements', 'void (*)(GLenum mode, GLuint start, GLuint end, GLsizei count, GLenum type, const void *indices)');
        $__proc($mode, $start, $end, $count, $type, $indices);
    }

    /**
     * Texturing maps a portion of a specified texture image onto each graphical primitive for which texturing is
     * enabled. To enable and disable three-dimensional texturing, call {@see GL46::glEnable} and
     * {@see GL46::glDisable} with argument {@see GL46::GL_TEXTURE_3D}.
     *
     * To define texture images, call {@see GL46::glTexImage3D}. The arguments describe the parameters of the texture
     * image, such as height, width, depth, width of the border, level-of-detail number (see
     * {@see GL46::glTexParameter}), and number of color components provided. The last three arguments describe how
     * the image is represented in memory.
     *
     * If $target is {@see GL46::GL_PROXY_TEXTURE_3D}, no data is read from $data, but all of the texture image state
     * is recalculated, checked for consistency, and checked against the implementation's capabilities. If the
     * implementation cannot handle a texture of the requested texture size, it sets all of the image state to 0, but
     * does not generate an error (see {@see GL46::glGetError}). To query for an entire mipmap array, use an image
     * array level greater than or equal to 1.
     *
     * If $target is {@see GL46::GL_TEXTURE_3D}, data is read from $data as a sequence of signed or unsigned bytes,
     * shorts, or longs, or single-precision floating-point values, depending on $type. These values are grouped into
     * sets of one, two, three, or four values, depending on $format, to form elements. Each data byte is treated as
     * eight 1-bit elements, with bit ordering determined by {@see GL46::GL_UNPACK_LSB_FIRST} (see
     * {@see GL46::glPixelStore}).
     *
     * If a non-zero named buffer object is bound to the {@see GL46::GL_PIXEL_UNPACK_BUFFER} target (see
     * {@see GL46::glBindBuffer}) while a texture image is specified, $data is treated as a byte offset into the
     * buffer object's data store.
     *
     * The first element corresponds to the lower left corner of the texture image. Subsequent elements progress
     * left-to-right through the remaining texels in the lowest row of the texture image, and then in successively
     * higher rows of the texture image. The final element corresponds to the upper right corner of the texture
     * image.
     *
     * $format determines the composition of each element in $data. It can assume one of these symbolic values:
     *
     *  - {@see GL46::GL_RED}: Each element is a single red component. The GL
     *    converts it to floating point and assembles it into an RGBA
     *    element by attaching 0 for green and blue, and 1 for alpha. Each
     *    component is clamped to the range [0,1].
     *
     *  - {@see GL46::GL_RG}: Each element is a red and green pair. The GL
     *    converts each to floating point and assembles it into an RGBA
     *    element by attaching 0 for blue, and 1 for alpha. Each component is
     *    clamped to the range [0,1].
     *
     *  - {@see GL46::GL_RGB}: Each element is an RGB triple. The GL converts it
     *    to floating point and assembles it into an RGBA element by
     *    attaching 1 for alpha. Each component is clamped to the range [0,1].
     *
     *  - {@see GL46::GL_RGBA}: Each element contains all four components. Each
     *    component is clamped to the range [0,1].
     *
     * If an application wants to store the texture at a certain resolution or in a certain format, it can request
     * the resolution and format with $internalformat. The GL will choose an internal representation that closely
     * approximates that requested by $internalformat, but it may not match exactly. (The representations specified
     * by {@see GL46::GL_RED}, {@see GL46::GL_RG}, {@see GL46::GL_RGB}, and {@see GL46::GL_RGBA} must match exactly.)
     *
     * $internalformat may be one of the base internal formats shown in Table 1, below
     *
     * $internalformat may also be one of the sized internal formats shown in Table 2, below
     *
     * Finally, $internalformat may also be one of the generic or compressed texture formats shown in Table 3 below
     *
     * If the $internalformat parameter is one of the generic compressed formats, {@see GL46::GL_COMPRESSED_RED},
     * {@see GL46::GL_COMPRESSED_RG}, {@see GL46::GL_COMPRESSED_RGB}, or {@see GL46::GL_COMPRESSED_RGBA}, the GL will
     * replace the internal format with the symbolic constant for a specific internal format and compress the texture
     * before storage. If no corresponding internal format is available, or the GL can not compress that image for
     * any reason, the internal format is instead replaced with a corresponding base internal format.
     *
     * If the $internalformat parameter is {@see GL46::GL_SRGB}, {@see GL46::GL_SRGB8}, {@see GL46::GL_SRGB_ALPHA},
     * or {@see GL46::GL_SRGB8_ALPHA8}, the texture is treated as if the red, green, blue, or luminance components
     * are encoded in the sRGB color space. Any alpha component is left unchanged. The conversion from the sRGB
     * encoded component  c s   to a linear component  c l   is:
     *
     *    c l  =  {      c s  12.92      if    c s  ≤ 0.04045       (    c s  + 0.055  1.055  )  2.4      if    c s
     *  &gt; 0.04045
     *
     * Assume  c s   is the sRGB component in the range [0,1].
     *
     * Use the {@see GL46::GL_PROXY_TEXTURE_3D} target to try out a resolution and format. The implementation will
     * update and recompute its best match for the requested storage resolution and format. To then query this state,
     * call {@see GL46::glGetTexLevelParameter}. If the texture cannot be accommodated, texture state is set to 0.
     *
     * A one-component texture image uses only the red component of the RGBA color extracted from $data. A
     * two-component image uses the R and A values. A three-component image uses the R, G, and B values. A
     * four-component image uses all of the RGBA components.
     *
     * @see http://docs.gl/gl2/glTexImage3D
     * @see http://docs.gl/gl4/glTexImage3D
     * @since 1.2
     * @param int $target
     * @param int $level
     * @param int $internalformat
     * @param int $width
     * @param int $height
     * @param int $depth
     * @param int $border
     * @param int $format
     * @param int $type
     * @param \FFI\CData|null $pixels
     * @return void
     */
    public function texImage3D(
        int $target,
        int $level,
        int $internalformat,
        int $width,
        int $height,
        int $depth,
        int $border,
        int $format,
        int $type,
        ?\FFI\CData $pixels
    ): void {
        $__proc = $this->getProcAs('glTexImage3D', 'void (*)(GLenum target, GLint level, GLint internalformat, GLsizei width, GLsizei height, GLsizei depth, GLint border, GLenum format, GLenum type, const void *pixels)');
        $__proc($target, $level, $internalformat, $width, $height, $depth, $border, $format, $type, $pixels);
    }

    /**
     * Texturing maps a portion of a specified texture image onto each graphical primitive for which texturing is
     * enabled.
     *
     * {@see GL46::glTexSubImage3D} and {@see GL46::glTextureSubImage3D} redefine a contiguous subregion of an
     * existing three-dimensional or two-dimensioanl array texture image. The texels referenced by $pixels replace
     * the portion of the existing texture array with x indices $xoffset and    xoffset + width - 1  , inclusive, y
     * indices $yoffset and    yoffset + height - 1  , inclusive, and z indices $zoffset and    zoffset + depth - 1
     * , inclusive. For three-dimensional textures, the z index refers to the third dimension. For two-dimensional
     * array textures, the z index refers to the slice index. This region may not include any texels outside the
     * range of the texture array as it was originally specified. It is not an error to specify a subtexture with
     * zero width, height, or depth but such a specification has no effect.
     *
     * If a non-zero named buffer object is bound to the {@see GL46::GL_PIXEL_UNPACK_BUFFER} target (see
     * {@see GL46::glBindBuffer}) while a texture image is specified, $pixels is treated as a byte offset into the
     * buffer object's data store.
     *
     * @see http://docs.gl/gl2/glTexSubImage3D
     * @see http://docs.gl/gl4/glTexSubImage3D
     * @since 1.2
     * @param int $target
     * @param int $level
     * @param int $xoffset
     * @param int $yoffset
     * @param int $zoffset
     * @param int $width
     * @param int $height
     * @param int $depth
     * @param int $format
     * @param int $type
     * @param \FFI\CData|null $pixels
     * @return void
     */
    public function texSubImage3D(
        int $target,
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
        $__proc = $this->getProcAs('glTexSubImage3D', 'void (*)(GLenum target, GLint level, GLint xoffset, GLint yoffset, GLint zoffset, GLsizei width, GLsizei height, GLsizei depth, GLenum format, GLenum type, const void *pixels)');
        $__proc($target, $level, $xoffset, $yoffset, $zoffset, $width, $height, $depth, $format, $type, $pixels);
    }
}
