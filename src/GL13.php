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
 * The OpenGL functionality up to version 1.3. Includes the deprecated symbols of the Compatibility Profile.
 *
 * Extensions promoted to core in this release:
 *
 * - ARB_texture_compression @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_texture_compression.txt
 * - ARB_texture_cube_map @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_texture_cube_map.txt
 * - ARB_multisample @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_multisample.txt
 * - ARB_multitexture @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_multitexture.txt
 * - ARB_texture_env_add @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_texture_env_add.txt
 * - ARB_texture_env_combine @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_texture_env_combine.txt
 * - ARB_texture_env_dot3 @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_texture_env_dot3.txt
 * - ARB_texture_border_clamp @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_texture_border_clamp.txt
 * - ARB_transpose_matrix @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_transpose_matrix.txt
 */
class GL13 extends GL12
{
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE0 = 0x84c0;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE1 = 0x84c1;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE2 = 0x84c2;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE3 = 0x84c3;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE4 = 0x84c4;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE5 = 0x84c5;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE6 = 0x84c6;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE7 = 0x84c7;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE8 = 0x84c8;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE9 = 0x84c9;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE10 = 0x84ca;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE11 = 0x84cb;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE12 = 0x84cc;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE13 = 0x84cd;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE14 = 0x84ce;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE15 = 0x84cf;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE16 = 0x84d0;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE17 = 0x84d1;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE18 = 0x84d2;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE19 = 0x84d3;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE20 = 0x84d4;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE21 = 0x84d5;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE22 = 0x84d6;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE23 = 0x84d7;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE24 = 0x84d8;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE25 = 0x84d9;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE26 = 0x84da;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE27 = 0x84db;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE28 = 0x84dc;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE29 = 0x84dd;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE30 = 0x84de;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE31 = 0x84df;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_ACTIVE_TEXTURE = 0x84e0;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_MULTISAMPLE = 0x809d;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_SAMPLE_ALPHA_TO_COVERAGE = 0x809e;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_SAMPLE_ALPHA_TO_ONE = 0x809f;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_SAMPLE_COVERAGE = 0x80a0;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_SAMPLE_BUFFERS = 0x80a8;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_SAMPLES = 0x80a9;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_SAMPLE_COVERAGE_VALUE = 0x80aa;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_SAMPLE_COVERAGE_INVERT = 0x80ab;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE_CUBE_MAP = 0x8513;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE_BINDING_CUBE_MAP = 0x8514;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE_CUBE_MAP_POSITIVE_X = 0x8515;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE_CUBE_MAP_NEGATIVE_X = 0x8516;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE_CUBE_MAP_POSITIVE_Y = 0x8517;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE_CUBE_MAP_NEGATIVE_Y = 0x8518;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE_CUBE_MAP_POSITIVE_Z = 0x8519;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE_CUBE_MAP_NEGATIVE_Z = 0x851a;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_PROXY_TEXTURE_CUBE_MAP = 0x851b;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_MAX_CUBE_MAP_TEXTURE_SIZE = 0x851c;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_COMPRESSED_RGB = 0x84ed;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_COMPRESSED_RGBA = 0x84ee;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE_COMPRESSION_HINT = 0x84ef;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE_COMPRESSED_IMAGE_SIZE = 0x86a0;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_TEXTURE_COMPRESSED = 0x86a1;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_NUM_COMPRESSED_TEXTURE_FORMATS = 0x86a2;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_COMPRESSED_TEXTURE_FORMATS = 0x86a3;
    /**
     * @var int
     * @since 1.3
     */
    public const GL_CLAMP_TO_BORDER = 0x812d;

    /**
     * Selects which texture unit subsequent texture state calls will affect. The number of texture units an
     * implementation supports is implementation dependent, but must be at least 2.
     *
     * Vertex arrays are client-side GL resources, which are selected by the
     * {@see glClientActiveTexture} routine.
     *
     * @see http://docs.gl/gl2/glActiveTexture
     * @see http://docs.gl/gl3/glActiveTexture
     * @see http://docs.gl/gl4/glActiveTexture
     * @since 1.3
     * @param int $texture
     * @return void
     */
    public static function glActiveTexture(int $texture): void
    {
        assert(version_compare(self::$info->version, '1.3') >= 0, __FUNCTION__ . ' is available since OpenGL 1.3, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLenum is required');

        $proc = self::getProc('glActiveTexture', 'void (*)(GLenum texture)');
        $proc($texture);
    }

    /**
     * Multisampling samples a pixel multiple times at various implementation-dependent subpixel locations to
     * generate antialiasing effects. Multisampling transparently antialiases points, lines, polygons, bitmaps, and
     * images if it is enabled.
     *
     * *`value`* is used in constructing a temporary mask used in determining which samples will be used in resolving
     * the final fragment color. This mask is bitwise-anded with the coverage mask generated from the multisampling
     * computation. If the *`invert`* flag is set, the temporary mask is inverted (all bits flipped) and then the
     * bitwise-and is computed.
     *
     * If an implementation does not have any multisample buffers available, or multisampling is disabled,
     * rasterization occurs with only a single sample computing a pixel's final RGB color.
     *
     * Provided an implementation supports multisample buffers, and multisampling is enabled, then a pixel's final
     * color is generated by combining several samples per pixel. Each sample contains color, depth, and stencil
     * information, allowing those operations to be performed on each sample.
     *
     * @see http://docs.gl/gl2/glSampleCoverage
     * @see http://docs.gl/gl3/glSampleCoverage
     * @see http://docs.gl/gl4/glSampleCoverage
     * @since 1.3
     * @param float $value
     * @param int $invert
     * @return void
     */
    public static function glSampleCoverage(float $value, int $invert): void
    {
        assert(version_compare(self::$info->version, '1.3') >= 0, __FUNCTION__ . ' is available since OpenGL 1.3, but only OpenGL '. self::$info->version . ' is available');
        assert($value >= -3.40282e38 && $value <= 3.40282e38, 'Argument $value overflow: C type GLfloat is required');
        assert($invert >= 0 && $invert <= 255, 'Argument $invert overflow: C type GLboolean is required');

        $proc = self::getProc('glSampleCoverage', 'void (*)(GLfloat value, GLboolean invert)');
        $proc($value, $invert);
    }

    /**
     * Texturing maps a portion of a specified texture image onto each graphical primitive for which texturing is
     * enabled. To enable and disable three-dimensional texturing, call {@see glEnable} and
     * {@see glDisable} with argument `GL_TEXTURE_3D`.
     *
     *  - `glCompressedTexImage3D` loads a previously defined, and retrieved, compressed three-dimensional texture
     * image if *`target`* is `GL_TEXTURE_3D` (see {@see glTexImage3D}).
     *
     * If *`target`* is `GL_PROXY_TEXTURE_3D`, no data is read from *`data`*, but all of the texture image state is
     * recalculated, checked for consistency, and checked against the implementation's capabilities. If the
     * implementation cannot handle a texture of the requested texture size, it sets all of the image state to 0, but
     * does not generate an error (see {@see glGetError}). To query for an entire mipmap array, use an image
     * array level greater than or equal to 1.
     *
     * *`internalformat`* must be an extension-specified compressed-texture format. When a texture is loaded with
     * {@see glTexImage2D} using a generic compressed texture format (e.g., `GL_COMPRESSED_RGB`), the GL
     * selects from one of its extensions supporting compressed textures. In order to load the compressed texture
     * image using `glCompressedTexImage3D`, query the compressed texture image's size and format using
     * {@see glGetTexLevelParameter}.
     *
     * If a non-zero named buffer object is bound to the `GL_PIXEL_UNPACK_BUFFER` target (see
     * {@see glBindBuffer}) while a texture image is specified, *`data`* is treated as a byte offset into
     * the buffer object's data store.
     *
     * @see http://docs.gl/gl2/glCompressedTexImage3D
     * @see http://docs.gl/gl3/glCompressedTexImage3D
     * @see http://docs.gl/gl4/glCompressedTexImage3D
     * @since 1.3
     * @param int $target
     * @param int $level
     * @param int $internalformat
     * @param int $width
     * @param int $height
     * @param int $depth
     * @param int $border
     * @param int $imageSize
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @return void
     */
    public static function glCompressedTexImage3D(
        int $target,
        int $level,
        int $internalformat,
        int $width,
        int $height,
        int $depth,
        int $border,
        int $imageSize,
        ?\FFI\CData $data
    ): void {
        assert(version_compare(self::$info->version, '1.3') >= 0, __FUNCTION__ . ' is available since OpenGL 1.3, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($internalformat >= 0 && $internalformat <= 4_294_967_295, 'Argument $internalformat overflow: C type GLenum is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');
        assert($depth >= \PHP_INT_MIN && $depth <= \PHP_INT_MAX, 'Argument $depth overflow: C type GLsizei is required');
        assert($border >= \PHP_INT_MIN && $border <= \PHP_INT_MAX, 'Argument $border overflow: C type GLint is required');
        assert($imageSize >= \PHP_INT_MIN && $imageSize <= \PHP_INT_MAX, 'Argument $imageSize overflow: C type GLsizei is required');

        $proc = self::getProc('glCompressedTexImage3D', 'void (*)(GLenum target, GLint level, GLenum internalformat, GLsizei width, GLsizei height, GLsizei depth, GLint border, GLsizei imageSize, const void *data)');
        $proc($target, $level, $internalformat, $width, $height, $depth, $border, $imageSize, $data);
    }

    /**
     * Texturing maps a portion of a specified texture image onto each graphical primitive for which texturing is
     * enabled. To enable and disable two-dimensional texturing, call {@see glEnable} and {@see glDisable}
     * with argument `GL_TEXTURE_2D`. To enable and disable texturing using cube-mapped textures, call
     * {@see glEnable} and {@see glDisable} with argument `GL_TEXTURE_CUBE_MAP`.
     *
     *  - `glCompressedTexImage2D` loads a previously defined, and retrieved, compressed two-dimensional texture
     * image if *`target`* is `GL_TEXTURE_2D` (see {@see glTexImage2D}).
     *
     * If *`target`* is `GL_PROXY_TEXTURE_2D`, no data is read from *`data`*, but all of the texture image state is
     * recalculated, checked for consistency, and checked against the implementation's capabilities. If the
     * implementation cannot handle a texture of the requested texture size, it sets all of the image state to 0, but
     * does not generate an error (see {@see glGetError}). To query for an entire mipmap array, use an image
     * array level greater than or equal to 1.
     *
     * *`internalformat`* must be an extension-specified compressed-texture format. When a texture is loaded with
     * {@see glTexImage2D} using a generic compressed texture format (e.g., `GL_COMPRESSED_RGB`), the GL
     * selects from one of its extensions supporting compressed textures. In order to load the compressed texture
     * image using `glCompressedTexImage2D`, query the compressed texture image's size and format using
     * {@see glGetTexLevelParameter}.
     *
     * If a non-zero named buffer object is bound to the `GL_PIXEL_UNPACK_BUFFER` target (see
     * {@see glBindBuffer}) while a texture image is specified, *`data`* is treated as a byte offset into
     * the buffer object's data store.
     *
     * @see http://docs.gl/gl2/glCompressedTexImage2D
     * @see http://docs.gl/gl3/glCompressedTexImage2D
     * @see http://docs.gl/gl4/glCompressedTexImage2D
     * @since 1.3
     * @param int $target
     * @param int $level
     * @param int $internalformat
     * @param int $width
     * @param int $height
     * @param int $border
     * @param int $imageSize
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @return void
     */
    public static function glCompressedTexImage2D(int $target, int $level, int $internalformat, int $width, int $height, int $border, int $imageSize, ?\FFI\CData $data): void
    {
        assert(version_compare(self::$info->version, '1.3') >= 0, __FUNCTION__ . ' is available since OpenGL 1.3, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($internalformat >= 0 && $internalformat <= 4_294_967_295, 'Argument $internalformat overflow: C type GLenum is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');
        assert($border >= \PHP_INT_MIN && $border <= \PHP_INT_MAX, 'Argument $border overflow: C type GLint is required');
        assert($imageSize >= \PHP_INT_MIN && $imageSize <= \PHP_INT_MAX, 'Argument $imageSize overflow: C type GLsizei is required');

        $proc = self::getProc('glCompressedTexImage2D', 'void (*)(GLenum target, GLint level, GLenum internalformat, GLsizei width, GLsizei height, GLint border, GLsizei imageSize, const void *data)');
        $proc($target, $level, $internalformat, $width, $height, $border, $imageSize, $data);
    }

    /**
     * Texturing maps a portion of a specified texture image onto each graphical primitive for which texturing is
     * enabled. To enable and disable one-dimensional texturing, call {@see glEnable} and {@see glDisable}
     * with argument `GL_TEXTURE_1D`.
     *
     *  - `glCompressedTexImage1D` loads a previously defined, and retrieved, compressed one-dimensional texture
     * image if *`target`* is `GL_TEXTURE_1D` (see {@see glTexImage1D}).
     *
     * If *`target`* is `GL_PROXY_TEXTURE_1D`, no data is read from *`data`*, but all of the texture image state is
     * recalculated, checked for consistency, and checked against the implementation's capabilities. If the
     * implementation cannot handle a texture of the requested texture size, it sets all of the image state to 0, but
     * does not generate an error (see {@see glGetError}). To query for an entire mipmap array, use an image
     * array level greater than or equal to 1.
     *
     * *`internalformat`* must be extension-specified compressed-texture format. When a texture is loaded with
     * {@see glTexImage1D} using a generic compressed texture format (e.g., `GL_COMPRESSED_RGB`) the GL
     * selects from one of its extensions supporting compressed textures. In order to load the compressed texture
     * image using `glCompressedTexImage1D`, query the compressed texture image's size and format using
     * {@see glGetTexLevelParameter}.
     *
     * If a non-zero named buffer object is bound to the `GL_PIXEL_UNPACK_BUFFER` target (see
     * {@see glBindBuffer}) while a texture image is specified, *`data`* is treated as a byte offset into
     * the buffer object's data store.
     *
     * @see http://docs.gl/gl2/glCompressedTexImage1D
     * @see http://docs.gl/gl3/glCompressedTexImage1D
     * @see http://docs.gl/gl4/glCompressedTexImage1D
     * @since 1.3
     * @param int $target
     * @param int $level
     * @param int $internalformat
     * @param int $width
     * @param int $border
     * @param int $imageSize
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @return void
     */
    public static function glCompressedTexImage1D(int $target, int $level, int $internalformat, int $width, int $border, int $imageSize, ?\FFI\CData $data): void
    {
        assert(version_compare(self::$info->version, '1.3') >= 0, __FUNCTION__ . ' is available since OpenGL 1.3, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($internalformat >= 0 && $internalformat <= 4_294_967_295, 'Argument $internalformat overflow: C type GLenum is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($border >= \PHP_INT_MIN && $border <= \PHP_INT_MAX, 'Argument $border overflow: C type GLint is required');
        assert($imageSize >= \PHP_INT_MIN && $imageSize <= \PHP_INT_MAX, 'Argument $imageSize overflow: C type GLsizei is required');

        $proc = self::getProc('glCompressedTexImage1D', 'void (*)(GLenum target, GLint level, GLenum internalformat, GLsizei width, GLint border, GLsizei imageSize, const void *data)');
        $proc($target, $level, $internalformat, $width, $border, $imageSize, $data);
    }

    /**
     * Texturing maps a portion of a specified texture image onto each graphical primitive for which texturing is
     * enabled. To enable and disable three-dimensional texturing, call {@see glEnable} and
     * {@see glDisable} with argument `GL_TEXTURE_3D`.
     *
     *  - `glCompressedTexSubImage3D` redefines a contiguous subregion of an existing three-dimensional texture
     * image. The texels referenced by *`data`* replace the portion of the existing texture array with x indices
     * *`xoffset`* and xoffset + width - 1 , and the y indices *`yoffset`* and yoffset + height - 1 , and the z
     * indices *`zoffset`* and zoffset + depth - 1 , inclusive. This region may not include any texels outside the
     * range of the texture array as it was originally specified. It is not an error to specify a subtexture with
     * width of 0, but such a specification has no effect.
     *
     * *`format`* must be an extension-specified compressed-texture format. The *`format`* of the compressed texture
     * image is selected by the GL implementation that compressed it (see {@see glTexImage3D}) and should be
     * queried at the time the texture was compressed with {@see glGetTexLevelParameter}.
     *
     * If a non-zero named buffer object is bound to the `GL_PIXEL_UNPACK_BUFFER` target (see
     * {@see glBindBuffer}) while a texture image is specified, *`data`* is treated as a byte offset into
     * the buffer object's data store.
     *
     * @see http://docs.gl/gl2/glCompressedTexSubImage3D
     * @see http://docs.gl/gl3/glCompressedTexSubImage3D
     * @see http://docs.gl/gl4/glCompressedTexSubImage3D
     * @since 1.3
     * @param int $target
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
    public static function glCompressedTexSubImage3D(
        int $target,
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
        assert(version_compare(self::$info->version, '1.3') >= 0, __FUNCTION__ . ' is available since OpenGL 1.3, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($xoffset >= \PHP_INT_MIN && $xoffset <= \PHP_INT_MAX, 'Argument $xoffset overflow: C type GLint is required');
        assert($yoffset >= \PHP_INT_MIN && $yoffset <= \PHP_INT_MAX, 'Argument $yoffset overflow: C type GLint is required');
        assert($zoffset >= \PHP_INT_MIN && $zoffset <= \PHP_INT_MAX, 'Argument $zoffset overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');
        assert($depth >= \PHP_INT_MIN && $depth <= \PHP_INT_MAX, 'Argument $depth overflow: C type GLsizei is required');
        assert($format >= 0 && $format <= 4_294_967_295, 'Argument $format overflow: C type GLenum is required');
        assert($imageSize >= \PHP_INT_MIN && $imageSize <= \PHP_INT_MAX, 'Argument $imageSize overflow: C type GLsizei is required');

        $proc = self::getProc('glCompressedTexSubImage3D', 'void (*)(GLenum target, GLint level, GLint xoffset, GLint yoffset, GLint zoffset, GLsizei width, GLsizei height, GLsizei depth, GLenum format, GLsizei imageSize, const void *data)');
        $proc($target, $level, $xoffset, $yoffset, $zoffset, $width, $height, $depth, $format, $imageSize, $data);
    }

    /**
     * Texturing maps a portion of a specified texture image onto each graphical primitive for which texturing is
     * enabled. To enable and disable two-dimensional texturing, call {@see glEnable} and {@see glDisable}
     * with argument `GL_TEXTURE_2D`. To enable and disable texturing using cube-mapped texture, call
     * {@see glEnable} and {@see glDisable} with argument `GL_TEXTURE_CUBE_MAP`.
     *
     *  - `glCompressedTexSubImage2D` redefines a contiguous subregion of an existing two-dimensional texture image.
     * The texels referenced by *`data`* replace the portion of the existing texture array with x indices *`xoffset`*
     * and xoffset + width - 1 , and the y indices *`yoffset`* and yoffset + height - 1 , inclusive. This region may
     * not include any texels outside the range of the texture array as it was originally specified. It is not an
     * error to specify a subtexture with width of 0, but such a specification has no effect.
     *
     * *`format`* must be an extension-specified compressed-texture format. The *`format`* of the compressed texture
     * image is selected by the GL implementation that compressed it (see {@see glTexImage2D}) and should be
     * queried at the time the texture was compressed with {@see glGetTexLevelParameter}.
     *
     * If a non-zero named buffer object is bound to the `GL_PIXEL_UNPACK_BUFFER` target (see
     * {@see glBindBuffer}) while a texture image is specified, *`data`* is treated as a byte offset into
     * the buffer object's data store.
     *
     * @see http://docs.gl/gl2/glCompressedTexSubImage2D
     * @see http://docs.gl/gl3/glCompressedTexSubImage2D
     * @see http://docs.gl/gl4/glCompressedTexSubImage2D
     * @since 1.3
     * @param int $target
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
    public static function glCompressedTexSubImage2D(
        int $target,
        int $level,
        int $xoffset,
        int $yoffset,
        int $width,
        int $height,
        int $format,
        int $imageSize,
        ?\FFI\CData $data
    ): void {
        assert(version_compare(self::$info->version, '1.3') >= 0, __FUNCTION__ . ' is available since OpenGL 1.3, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($xoffset >= \PHP_INT_MIN && $xoffset <= \PHP_INT_MAX, 'Argument $xoffset overflow: C type GLint is required');
        assert($yoffset >= \PHP_INT_MIN && $yoffset <= \PHP_INT_MAX, 'Argument $yoffset overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');
        assert($format >= 0 && $format <= 4_294_967_295, 'Argument $format overflow: C type GLenum is required');
        assert($imageSize >= \PHP_INT_MIN && $imageSize <= \PHP_INT_MAX, 'Argument $imageSize overflow: C type GLsizei is required');

        $proc = self::getProc('glCompressedTexSubImage2D', 'void (*)(GLenum target, GLint level, GLint xoffset, GLint yoffset, GLsizei width, GLsizei height, GLenum format, GLsizei imageSize, const void *data)');
        $proc($target, $level, $xoffset, $yoffset, $width, $height, $format, $imageSize, $data);
    }

    /**
     * Texturing maps a portion of a specified texture image onto each graphical primitive for which texturing is
     * enabled. To enable and disable one-dimensional texturing, call {@see glEnable} and {@see glDisable}
     * with argument `GL_TEXTURE_1D`.
     *
     *  - `glCompressedTexSubImage1D` redefines a contiguous subregion of an existing one-dimensional texture image.
     * The texels referenced by *`data`* replace the portion of the existing texture array with x indices *`xoffset`*
     * and xoffset + width - 1 , inclusive. This region may not include any texels outside the range of the texture
     * array as it was originally specified. It is not an error to specify a subtexture with width of 0, but such a
     * specification has no effect.
     *
     * *`format`* must be an extension-specified compressed-texture format. The *`format`* of the compressed texture
     * image is selected by the GL implementation that compressed it (see {@see glTexImage1D}), and should
     * be queried at the time the texture was compressed with {@see glGetTexLevelParameter}.
     *
     * If a non-zero named buffer object is bound to the `GL_PIXEL_UNPACK_BUFFER` target (see
     * {@see glBindBuffer}) while a texture image is specified, *`data`* is treated as a byte offset into
     * the buffer object's data store.
     *
     * @see http://docs.gl/gl2/glCompressedTexSubImage1D
     * @see http://docs.gl/gl3/glCompressedTexSubImage1D
     * @see http://docs.gl/gl4/glCompressedTexSubImage1D
     * @since 1.3
     * @param int $target
     * @param int $level
     * @param int $xoffset
     * @param int $width
     * @param int $format
     * @param int $imageSize
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @return void
     */
    public static function glCompressedTexSubImage1D(int $target, int $level, int $xoffset, int $width, int $format, int $imageSize, ?\FFI\CData $data): void
    {
        assert(version_compare(self::$info->version, '1.3') >= 0, __FUNCTION__ . ' is available since OpenGL 1.3, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($xoffset >= \PHP_INT_MIN && $xoffset <= \PHP_INT_MAX, 'Argument $xoffset overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($format >= 0 && $format <= 4_294_967_295, 'Argument $format overflow: C type GLenum is required');
        assert($imageSize >= \PHP_INT_MIN && $imageSize <= \PHP_INT_MAX, 'Argument $imageSize overflow: C type GLsizei is required');

        $proc = self::getProc('glCompressedTexSubImage1D', 'void (*)(GLenum target, GLint level, GLint xoffset, GLsizei width, GLenum format, GLsizei imageSize, const void *data)');
        $proc($target, $level, $xoffset, $width, $format, $imageSize, $data);
    }

    /**
     * Returns the compressed texture image associated with *`target`* and *`lod`* into *`img`*. *`img`* should be an
     * array of `GL_TEXTURE_COMPRESSED_IMAGE_SIZE` bytes. *`target`* specifies whether the desired texture image was
     * one specified by {@see glTexImage1D} (`GL_TEXTURE_1D`), {@see glTexImage2D} (`GL_TEXTURE_2D`
     * or any of `GL_TEXTURE_CUBE_MAP_*`), or {@see glTexImage3D} (`GL_TEXTURE_3D`). *`lod`* specifies the
     * level-of-detail number of the desired image.
     *
     * If a non-zero named buffer object is bound to the `GL_PIXEL_PACK_BUFFER` target (see
     * {@see glBindBuffer}) while a texture image is requested, *`img`* is treated as a byte offset into the
     * buffer object's data store.
     *
     * To minimize errors, first verify that the texture is compressed by calling
     * {@see glGetTexLevelParameter} with argument `GL_TEXTURE_COMPRESSED`. If the texture is
     * compressed, then determine the amount of memory required to store the compressed texture by calling
     * {@see glGetTexLevelParameter} with argument `GL_TEXTURE_COMPRESSED_IMAGE_SIZE`. Finally,
     * retrieve the internal format of the texture by calling {@see glGetTexLevelParameter} with
     * argument `GL_TEXTURE_INTERNAL_FORMAT`. To store the texture for later use, associate the internal format and
     * size with the retrieved texture image. These data can be used by the respective texture or subtexture loading
     * routine used for loading *`target`* textures.
     *
     * @see http://docs.gl/gl2/glGetCompressedTexImage
     * @see http://docs.gl/gl3/glGetCompressedTexImage
     * @see http://docs.gl/gl4/glGetCompressedTexImage
     * @since 1.3
     * @param int $target
     * @param int $level
     * @param \FFI\CData|\FFI\CPtr|null $img
     * @return void
     */
    public static function glGetCompressedTexImage(int $target, int $level, ?\FFI\CData $img): void
    {
        assert(version_compare(self::$info->version, '1.3') >= 0, __FUNCTION__ . ' is available since OpenGL 1.3, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');

        $proc = self::getProc('glGetCompressedTexImage', 'void (*)(GLenum target, GLint level, void *img)');
        $proc($target, $level, $img);
    }
}
