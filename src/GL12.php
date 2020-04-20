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
 * The OpenGL functionality up to version 1.2. Includes the deprecated symbols of the Compatibility Profile.
 *
 * Extensions promoted to core in this release:
 * - EXT_texture3D @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_texture3D.txt
 * - EXT_bgra @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_bgra.txt
 * - EXT_packed_pixels @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_packed_pixels.txt
 * - EXT_rescale_normal @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_rescale_normal.txt
 * - EXT_separate_specular_color @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_separate_specular_color.txt
 * - SGIS_texture_edge_clamp @see https://www.khronos.org/registry/OpenGL/extensions/SGIS/SGIS_texture_edge_clamp.txt
 * - SGIS_texture_lod @see https://www.khronos.org/registry/OpenGL/extensions/SGIS/SGIS_texture_lod.txt
 * - EXT_draw_range_elements @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_draw_range_elements.txt
 *
 * Extensions part of the imaging subset:
 *
 * - EXT_color_table @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_color_table.txt
 * - EXT_color_subtable @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_color_subtable.txt
 * - EXT_convolution @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_convolution.txt
 * - HP_convolution_border_modes @see https://www.khronos.org/registry/OpenGL/extensions/HP/HP_convolution_border_modes.txt
 * - SGI_color_matrix @see https://www.khronos.org/registry/OpenGL/extensions/SGI/SGI_color_matrix.txt
 * - EXT_histogram @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_histogram.txt
 * - EXT_blend_color @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_blend_color.txt
 * - EXT_blend_minmax @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_blend_minmax.txt
 * - EXT_blend_subtract @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_blend_subtract.txt
 */
class GL12 extends GL11
{
    /**
     * @var int
     * @since 1.2
     */
    public const GL_ALIASED_POINT_SIZE_RANGE = 0x846d;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_ALIASED_LINE_WIDTH_RANGE = 0x846e;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_SMOOTH_POINT_SIZE_RANGE = 0x0b12;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_SMOOTH_POINT_SIZE_GRANULARITY = 0x0b13;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_SMOOTH_LINE_WIDTH_RANGE = 0x0b22;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_SMOOTH_LINE_WIDTH_GRANULARITY = 0x0b23;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_TEXTURE_BINDING_3D = 0x806a;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_PACK_SKIP_IMAGES = 0x806b;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_PACK_IMAGE_HEIGHT = 0x806c;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_UNPACK_SKIP_IMAGES = 0x806d;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_UNPACK_IMAGE_HEIGHT = 0x806e;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_TEXTURE_3D = 0x806f;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_PROXY_TEXTURE_3D = 0x8070;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_TEXTURE_DEPTH = 0x8071;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_TEXTURE_WRAP_R = 0x8072;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_MAX_3D_TEXTURE_SIZE = 0x8073;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_BGR = 0x80e0;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_BGRA = 0x80e1;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_UNSIGNED_BYTE_3_3_2 = 0x8032;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_UNSIGNED_BYTE_2_3_3_REV = 0x8362;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_UNSIGNED_SHORT_5_6_5 = 0x8363;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_UNSIGNED_SHORT_5_6_5_REV = 0x8364;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_UNSIGNED_SHORT_4_4_4_4 = 0x8033;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_UNSIGNED_SHORT_4_4_4_4_REV = 0x8365;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_UNSIGNED_SHORT_5_5_5_1 = 0x8034;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_UNSIGNED_SHORT_1_5_5_5_REV = 0x8366;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_UNSIGNED_INT_8_8_8_8 = 0x8035;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_UNSIGNED_INT_8_8_8_8_REV = 0x8367;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_UNSIGNED_INT_10_10_10_2 = 0x8036;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_UNSIGNED_INT_2_10_10_10_REV = 0x8368;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_RESCALE_NORMAL = 0x803a;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_LIGHT_MODEL_COLOR_CONTROL = 0x81f8;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_SINGLE_COLOR = 0x81f9;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_SEPARATE_SPECULAR_COLOR = 0x81fa;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_CLAMP_TO_EDGE = 0x812f;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_TEXTURE_MIN_LOD = 0x813a;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_TEXTURE_MAX_LOD = 0x813b;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_TEXTURE_BASE_LEVEL = 0x813c;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_TEXTURE_MAX_LEVEL = 0x813d;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_MAX_ELEMENTS_VERTICES = 0x80e8;
    /**
     * @var int
     * @since 1.2
     */
    public const GL_MAX_ELEMENTS_INDICES = 0x80e9;

    /**
     * Is a restricted form of {@see glDrawElements}. *`mode`*, *`start`*, *`end`*, and *`count`* match
     * the corresponding arguments to {@see glDrawElements}, with the additional constraint that all
     * values in the arrays *`count`* must lie between *`start`* and *`end`*, inclusive.
     *
     * Implementations denote recommended maximum amounts of vertex and index data, which may be queried by calling
     * {@see glGet} with argument `GL_MAX_ELEMENTS_VERTICES` and `GL_MAX_ELEMENTS_INDICES`. If end - start + 1 is
     * greater than the value of `GL_MAX_ELEMENTS_VERTICES`, or if *`count`* is greater than the value of
     * `GL_MAX_ELEMENTS_INDICES`, then the call may operate at reduced performance. There is no requirement that all
     * vertices in the range start end be referenced. However, the implementation may partially process unused
     * vertices, reducing performance from what could be achieved with an optimal index set.
     *
     * When `glDrawRangeElements` is called, it uses *`count`* sequential elements from an enabled array, starting at
     * *`start`* to construct a sequence of geometric primitives. *`mode`* specifies what kind of primitives are
     * constructed, and how the array elements construct these primitives. If more than one array is enabled, each is
     * used. If `GL_VERTEX_ARRAY` is not enabled, no geometric primitives are constructed.
     *
     * Vertex attributes that are modified by `glDrawRangeElements` have an unspecified value after
     * `glDrawRangeElements` returns. For example, if `GL_COLOR_ARRAY` is enabled, the value of the current color is
     * undefined after `glDrawRangeElements` executes. Attributes that aren't modified maintain their previous
     * values.
     *
     * @see http://docs.gl/gl2/glDrawRangeElements
     * @see http://docs.gl/gl3/glDrawRangeElements
     * @see http://docs.gl/gl4/glDrawRangeElements
     * @since 1.2
     * @param int $mode
     * @param int $start
     * @param int $end
     * @param int $count
     * @param int $type
     * @param \FFI\CData|\FFI\CPtr|null $indices
     * @return void
     */
    public static function glDrawRangeElements(int $mode, int $start, int $end, int $count, int $type, ?\FFI\CData $indices): void
    {
        assert(version_compare(self::$info->version, '1.2') >= 0, __FUNCTION__ . ' is available since OpenGL 1.2, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');
        assert($start >= 0 && $start <= 4_294_967_295, 'Argument $start overflow: C type GLuint is required');
        assert($end >= 0 && $end <= 4_294_967_295, 'Argument $end overflow: C type GLuint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');

        $proc = self::getProc('glDrawRangeElements', 'void (*)(GLenum mode, GLuint start, GLuint end, GLsizei count, GLenum type, const void *indices)');
        $proc($mode, $start, $end, $count, $type, $indices);
    }

    /**
     * Texturing maps a portion of a specified texture image onto each graphical primitive for which texturing is
     * enabled. To enable and disable three-dimensional texturing, call {@see glEnable} and
     * {@see glDisable} with argument `GL_TEXTURE_3D`.
     *
     * To define texture images, call `glTexImage3D`. The arguments describe the parameters of the texture image,
     * such as height, width, depth, width of the border, level-of-detail number (see
     * {@see glTexParameter}), and number of color components provided. The last three arguments describe
     * how the image is represented in memory; they are identical to the pixel formats used for
     * {@see glDrawPixels}.
     *
     * If *`target`* is `GL_PROXY_TEXTURE_3D`, no data is read from *`data`*, but all of the texture image state is
     * recalculated, checked for consistency, and checked against the implementation's capabilities. If the
     * implementation cannot handle a texture of the requested texture size, it sets all of the image state to 0, but
     * does not generate an error (see {@see glGetError}). To query for an entire mipmap array, use an image
     * array level greater than or equal to 1.
     *
     * If *`target`* is `GL_TEXTURE_3D`, data is read from *`data`* as a sequence of signed or unsigned bytes,
     * shorts, or longs, or single-precision floating-point values, depending on *`type`*. These values are grouped
     * into sets of one, two, three, or four values, depending on *`format`*, to form elements. If *`type`* is
     * `GL_BITMAP`, the data is considered as a string of unsigned bytes (and *`format`* must be `GL_COLOR_INDEX`).
     * Each data byte is treated as eight 1-bit elements, with bit ordering determined by `GL_UNPACK_LSB_FIRST` (see
     * {@see glPixelStore}).
     *
     * If a non-zero named buffer object is bound to the `GL_PIXEL_UNPACK_BUFFER` target (see
     * {@see glBindBuffer}) while a texture image is specified, *`data`* is treated as a byte offset into
     * the buffer object's data store.
     *
     * The first element corresponds to the lower left corner of the texture image. Subsequent elements progress
     * left-to-right through the remaining texels in the lowest row of the texture image, and then in successively
     * higher rows of the texture image. The final element corresponds to the upper right corner of the texture
     * image.
     *
     * *`format`* determines the composition of each element in *`data`*. It can assume one of these symbolic values:
     *
     *  - `GL_COLOR_INDEX` Each element is a single value, a color index. The GL converts it to fixed point (with an
     * unspecified number of zero bits to the right of the binary point), shifted left or right depending on the
     * value and sign of `GL_INDEX_SHIFT`, and added to `GL_INDEX_OFFSET` (see {@see glPixelTransfer}).
     * The resulting index is converted to a set of color components using the `GL_PIXEL_MAP_I_TO_R`,
     * `GL_PIXEL_MAP_I_TO_G`, `GL_PIXEL_MAP_I_TO_B`, and `GL_PIXEL_MAP_I_TO_A` tables, and clamped to the range
     * [0,1].
     *
     *  - `GL_RED` Each element is a single red component. The GL converts it to floating point and assembles it into
     * an RGBA element by attaching 0 for green and blue, and 1 for alpha. Each component is then multiplied by the
     * signed scale factor `GL_c_SCALE`, added to the signed bias `GL_c_BIAS`, and clamped to the range [0,1] (see
     * {@see glPixelTransfer}).
     *
     *  - `GL_GREEN` Each element is a single green component. The GL converts it to floating point and assembles it
     * into an RGBA element by attaching 0 for red and blue, and 1 for alpha. Each component is then multiplied by
     * the signed scale factor `GL_c_SCALE`, added to the signed bias `GL_c_BIAS`, and clamped to the range [0,1]
     * (see {@see glPixelTransfer}).
     *
     *  - `GL_BLUE` Each element is a single blue component. The GL converts it to floating point and assembles it
     * into an RGBA element by attaching 0 for red and green, and 1 for alpha. Each component is then multiplied by
     * the signed scale factor `GL_c_SCALE`, added to the signed bias `GL_c_BIAS`, and clamped to the range [0,1]
     * (see {@see glPixelTransfer}).
     *
     *  - `GL_ALPHA` Each element is a single alpha component. The GL converts it to floating point and assembles it
     * into an RGBA element by attaching 0 for red, green, and blue. Each component is then multiplied by the signed
     * scale factor `GL_c_SCALE`, added to the signed bias `GL_c_BIAS`, and clamped to the range [0,1] (see
     * {@see glPixelTransfer}).
     *
     *  - `GL_INTENSITY` Each element is a single intensity value. The GL converts it to floating point, then
     * assembles it into an RGBA element by replicating the intensity value three times for red, green, blue, and
     * alpha. Each component is then multiplied by the signed scale factor `GL_c_SCALE`, added to the signed bias
     * `GL_c_BIAS`, and clamped to the range {@see 0,1] (see [glPixelTransfer}).
     *
     *  - `GL_RGB``GL_BGR` Each element is an RGB triple. The GL converts it to floating point and assembles it into
     * an RGBA element by attaching 1 for alpha. Each component is then multiplied by the signed scale factor
     * `GL_c_SCALE`, added to the signed bias `GL_c_BIAS`, and clamped to the range [0,1] (see
     * {@see glPixelTransfer}).
     *
     *  - `GL_RGBA``GL_BGRA` Each element contains all four components. Each component is multiplied by the signed
     * scale factor `GL_c_SCALE`, added to the signed bias `GL_c_BIAS`, and clamped to the range [0,1] (see
     * {@see glPixelTransfer}).
     *
     *  - `GL_LUMINANCE` Each element is a single luminance value. The GL converts it to floating point, then
     * assembles it into an RGBA element by replicating the luminance value three times for red, green, and blue and
     * attaching 1 for alpha. Each component is then multiplied by the signed scale factor `GL_c_SCALE`, added to the
     * signed bias `GL_c_BIAS`, and clamped to the range {@see 0,1] (see [glPixelTransfer}).
     *
     *  - `GL_LUMINANCE_ALPHA` Each element is a luminance/alpha pair. The GL converts it to floating point, then
     * assembles it into an RGBA element by replicating the luminance value three times for red, green, and blue.
     * Each component is then multiplied by the signed scale factor `GL_c_SCALE`, added to the signed bias
     * `GL_c_BIAS`, and clamped to the range {@see 0,1] (see [glPixelTransfer}).
     *
     * Refer to the {@see glDrawPixels} reference page for a description of the acceptable values for the
     * *`type`* parameter.
     *
     * If an application wants to store the texture at a certain resolution or in a certain format, it can request
     * the resolution and format with *`internalFormat`*. The GL will choose an internal representation that closely
     * approximates that requested by *`internalFormat`*, but it may not match exactly. (The representations
     * specified by `GL_LUMINANCE`, `GL_LUMINANCE_ALPHA`, `GL_RGB`, and `GL_RGBA` must match exactly. The numeric
     * values 1, 2, 3, and 4 may also be used to specify the above representations.)
     *
     * If the *`internalFormat`* parameter is one of the generic compressed formats, `GL_COMPRESSED_ALPHA`,
     * `GL_COMPRESSED_INTENSITY`, `GL_COMPRESSED_LUMINANCE`, `GL_COMPRESSED_LUMINANCE_ALPHA`, `GL_COMPRESSED_RGB`, or
     * `GL_COMPRESSED_RGBA`, the GL will replace the internal format with the symbolic constant for a specific
     * internal format and compress the texture before storage. If no corresponding internal format is available, or
     * the GL can not compress that image for any reason, the internal format is instead replaced with a
     * corresponding base internal format.
     *
     * If the *`internalFormat`* parameter is `GL_SRGB`, `GL_SRGB8`, `GL_SRGB_ALPHA`, `GL_SRGB8_ALPHA8`,
     * `GL_SLUMINANCE`, `GL_SLUMINANCE8`, `GL_SLUMINANCE_ALPHA`, or `GL_SLUMINANCE8_ALPHA8`, the texture is treated
     * as if the red, green, blue, or luminance components are encoded in the sRGB color space. Any alpha component
     * is left unchanged. The conversion from the sRGB encoded component c s to a linear component c l is:
     *
     * c l = { c s 12.92 if c s ≤ 0.04045 ( c s + 0.055 1.055 ) 2.4 if c s &gt; 0.04045
     *
     * Assume c s is the sRGB component in the range [0,1].
     *
     * Use the `GL_PROXY_TEXTURE_3D` target to try out a resolution and format. The implementation will update and
     * recompute its best match for the requested storage resolution and format. To then query this state, call
     * {@see glGetTexLevelParameter}. If the texture cannot be accommodated, texture state is set
     * to 0.
     *
     * A one-component texture image uses only the red component of the RGBA color extracted from *`data`*. A
     * two-component image uses the R and A values. A three-component image uses the R, G, and B values. A
     * four-component image uses all of the RGBA components.
     *
     * @see http://docs.gl/gl2/glTexImage3D
     * @see http://docs.gl/gl3/glTexImage3D
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
     * @param \FFI\CData|\FFI\CPtr|null $pixels
     * @return void
     */
    public static function glTexImage3D(
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
        assert(version_compare(self::$info->version, '1.2') >= 0, __FUNCTION__ . ' is available since OpenGL 1.2, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($internalformat >= \PHP_INT_MIN && $internalformat <= \PHP_INT_MAX, 'Argument $internalformat overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');
        assert($depth >= \PHP_INT_MIN && $depth <= \PHP_INT_MAX, 'Argument $depth overflow: C type GLsizei is required');
        assert($border >= \PHP_INT_MIN && $border <= \PHP_INT_MAX, 'Argument $border overflow: C type GLint is required');
        assert($format >= 0 && $format <= 4_294_967_295, 'Argument $format overflow: C type GLenum is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');

        $proc = self::getProc('glTexImage3D', 'void (*)(GLenum target, GLint level, GLint internalformat, GLsizei width, GLsizei height, GLsizei depth, GLint border, GLenum format, GLenum type, const void *pixels)');
        $proc($target, $level, $internalformat, $width, $height, $depth, $border, $format, $type, $pixels);
    }

    /**
     * Texturing maps a portion of a specified texture image onto each graphical primitive for which texturing is
     * enabled. To enable and disable three-dimensional texturing, call {@see glEnable} and
     * {@see glDisable} with argument `GL_TEXTURE_3D`.
     *
     *  - `glTexSubImage3D` redefines a contiguous subregion of an existing three-dimensional texture image. The
     * texels referenced by *`data`* replace the portion of the existing texture array with x indices *`xoffset`* and
     * xoffset + width - 1 , inclusive, y indices *`yoffset`* and yoffset + height - 1 , inclusive, and z indices
     * *`zoffset`* and zoffset + depth - 1 , inclusive. This region may not include any texels outside the range of
     * the texture array as it was originally specified. It is not an error to specify a subtexture with zero width,
     * height, or depth but such a specification has no effect.
     *
     * If a non-zero named buffer object is bound to the `GL_PIXEL_UNPACK_BUFFER` target (see
     * {@see glBindBuffer}) while a texture image is specified, *`data`* is treated as a byte offset into
     * the buffer object's data store.
     *
     * @see http://docs.gl/gl2/glTexSubImage3D
     * @see http://docs.gl/gl3/glTexSubImage3D
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
     * @param \FFI\CData|\FFI\CPtr|null $pixels
     * @return void
     */
    public static function glTexSubImage3D(
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
        assert(version_compare(self::$info->version, '1.2') >= 0, __FUNCTION__ . ' is available since OpenGL 1.2, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($xoffset >= \PHP_INT_MIN && $xoffset <= \PHP_INT_MAX, 'Argument $xoffset overflow: C type GLint is required');
        assert($yoffset >= \PHP_INT_MIN && $yoffset <= \PHP_INT_MAX, 'Argument $yoffset overflow: C type GLint is required');
        assert($zoffset >= \PHP_INT_MIN && $zoffset <= \PHP_INT_MAX, 'Argument $zoffset overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');
        assert($depth >= \PHP_INT_MIN && $depth <= \PHP_INT_MAX, 'Argument $depth overflow: C type GLsizei is required');
        assert($format >= 0 && $format <= 4_294_967_295, 'Argument $format overflow: C type GLenum is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');

        $proc = self::getProc('glTexSubImage3D', 'void (*)(GLenum target, GLint level, GLint xoffset, GLint yoffset, GLint zoffset, GLsizei width, GLsizei height, GLsizei depth, GLenum format, GLenum type, const void *pixels)');
        $proc($target, $level, $xoffset, $yoffset, $zoffset, $width, $height, $depth, $format, $type, $pixels);
    }

    /**
     * Replaces a rectangular portion of a three-dimensional texture image with pixels from the current
     * `GL_READ_BUFFER` (rather than from main memory, as is the case for {@see glTexSubImage3D}).
     *
     * The screen-aligned pixel rectangle with lower left corner at (*`x`*,\\ *`y`*) and with width *`width`* and
     * height *`height`* replaces the portion of the texture array with x indices *`xoffset`* through xoffset + width
     * - 1 , inclusive, and y indices *`yoffset`* through yoffset + height - 1 , inclusive, at z index *`zoffset`*
     * and at the mipmap level specified by *`level`*.
     *
     * The pixels in the rectangle are processed exactly as if {@see glCopyPixels} had been called, but the
     * process stops just before final conversion. At this point, all pixel component values are clamped to the range
     * 0 1 and then converted to the texture's internal format for storage in the texel array.
     *
     * The destination rectangle in the texture array may not include any texels outside the texture array as it was
     * originally specified. It is not an error to specify a subtexture with zero width or height, but such a
     * specification has no effect.
     *
     * If any of the pixels within the specified rectangle of the current `GL_READ_BUFFER` are outside the read
     * window associated with the current rendering context, then the values obtained for those pixels are undefined.
     *
     * No change is made to the *internalformat*, *width*, *height*, *depth*, or *border* parameters of the specified
     * texture array or to texel values outside the specified subregion.
     *
     * @see http://docs.gl/gl2/glCopyTexSubImage3D
     * @see http://docs.gl/gl3/glCopyTexSubImage3D
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
    public static function glCopyTexSubImage3D(int $target, int $level, int $xoffset, int $yoffset, int $zoffset, int $x, int $y, int $width, int $height): void
    {
        assert(version_compare(self::$info->version, '1.2') >= 0, __FUNCTION__ . ' is available since OpenGL 1.2, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($xoffset >= \PHP_INT_MIN && $xoffset <= \PHP_INT_MAX, 'Argument $xoffset overflow: C type GLint is required');
        assert($yoffset >= \PHP_INT_MIN && $yoffset <= \PHP_INT_MAX, 'Argument $yoffset overflow: C type GLint is required');
        assert($zoffset >= \PHP_INT_MIN && $zoffset <= \PHP_INT_MAX, 'Argument $zoffset overflow: C type GLint is required');
        assert($x >= \PHP_INT_MIN && $x <= \PHP_INT_MAX, 'Argument $x overflow: C type GLint is required');
        assert($y >= \PHP_INT_MIN && $y <= \PHP_INT_MAX, 'Argument $y overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');

        $proc = self::getProc('glCopyTexSubImage3D', 'void (*)(GLenum target, GLint level, GLint xoffset, GLint yoffset, GLint zoffset, GLint x, GLint y, GLsizei width, GLsizei height)');
        $proc($target, $level, $xoffset, $yoffset, $zoffset, $x, $y, $width, $height);
    }
}
