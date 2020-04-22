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
     * {@see GL46::glActiveTexture} selects which texture unit subsequent
     * texture state calls will affect. The number of texture units an
     * implementation supports is implementation dependent, but must be at
     * least 80.
     *
     * @see http://docs.gl/gl2/glActiveTexture
     * @see http://docs.gl/gl4/glActiveTexture
     * @since 1.3
     * @param int|\FFI\CData|\FFI\CInt $texture
     * @return void
     */
    public function glActiveTexture($texture): void
    {
        $texture = $texture instanceof \FFI\CData ? $texture->cdata : $texture;

        assert(Assert::uint16($texture), 'Argument $texture must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glActiveTexture', 'void (*)(GLenum texture)');
        $proc($texture);
    }

    /**
     * Multisampling samples a pixel multiple times at various
     * implementation-dependent subpixel locations to generate antialiasing
     * effects. Multisampling transparently antialiases points, lines,
     * polygons, and images if it is enabled.
     *
     * $value is used in constructing a temporary mask used in determining
     * which samples will be used in resolving the final fragment color. This
     * mask is bitwise-anded with the coverage mask generated from the
     * multisampling computation. If the $invert flag is set, the temporary
     * mask is inverted (all bits flipped) and then the bitwise-and is
     * computed.
     *
     * If an implementation does not have any multisample buffers available,
     * or multisampling is disabled, rasterization occurs with only a single
     * sample computing a pixel's final RGB color.
     *
     * Provided an implementation supports multisample buffers, and
     * multisampling is enabled, then a pixel's final color is generated by
     * combining several samples per pixel. Each sample contains color,
     * depth, and stencil information, allowing those operations to be
     * performed on each sample.
     *
     * @see http://docs.gl/gl2/glSampleCoverage
     * @see http://docs.gl/gl4/glSampleCoverage
     * @since 1.3
     * @param float|\FFI\CData|\FFI\CFloat $value
     * @param int|\FFI\CData|\FFI\CInt $invert
     * @return void
     */
    public function glSampleCoverage($value, $invert): void
    {
        $value = $value instanceof \FFI\CData ? $value->cdata : $value;
        $invert = $invert instanceof \FFI\CData ? $invert->cdata : $invert;

        assert(Assert::float32($value), 'Argument $value must be a C-like GLfloat, but incompatible or overflow value given');
        assert(Assert::uint8($invert), 'Argument $invert must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glSampleCoverage', 'void (*)(GLfloat value, GLboolean invert)');
        $proc($value, $invert);
    }

    /**
     * Texturing allows elements of an image array to be read by shaders.
     *
     * {@see GL46::glCompressedTexImage3D} loads a previously defined, and
     * retrieved, compressed three-dimensional texture image if $target is
     * {@see GL46::GL_TEXTURE_3D} (see {@see GL46::glTexImage3D}).
     *
     * If $target is {@see GL46::GL_TEXTURE_2D_ARRAY}, $data is treated as an
     * array of compressed 2D textures.
     *
     * If $target is {@see GL46::GL_PROXY_TEXTURE_3D} or
     * {@see GL46::GL_PROXY_TEXTURE_2D_ARRAY}, no data is read from $data,
     * but all of the texture image state is recalculated, checked for
     * consistency, and checked against the implementation's capabilities. If
     * the implementation cannot handle a texture of the requested texture
     * size, it sets all of the image state to 0, but does not generate an
     * error (see {@see GL46::glGetError}). To query for an entire mipmap
     * array, use an image array level greater than or equal to 1.
     *
     * $internalformat must be a known compressed image format (such as
     * {@see GL46::GL_RGTC}) or an extension-specified compressed-texture
     * format. When a texture is loaded with {@see GL46::glTexImage2D} using
     * a generic compressed texture format (e.g.,
     * {@see GL46::GL_COMPRESSED_RGB}), the GL selects from one of its
     * extensions supporting compressed textures. In order to load the
     * compressed texture image using {@see GL46::glCompressedTexImage3D},
     * query the compressed texture image's size and format using
     * {@see GL46::glGetTexLevelParameter}.
     *
     * If a non-zero named buffer object is bound to the
     * {@see GL46::GL_PIXEL_UNPACK_BUFFER} target (see
     * {@see GL46::glBindBuffer}) while a texture image is specified, $data
     * is treated as a byte offset into the buffer object's data store.
     *
     * If the compressed data are arranged into fixed-size blocks of texels,
     * the pixel storage modes can be used to select a sub-rectangle from a
     * larger containing rectangle. These pixel storage modes operate in the
     * same way as they do for {@see GL46::glTexImage1D}. In the following
     * description, denote by  bs ,  bw ,  bh , and  bd  the values of pixel
     * storage modes {@see GL46::GL_UNPACK_COMPRESSED_BLOCK_SIZE},
     * {@see GL46::GL_UNPACK_COMPRESSED_BLOCK_WIDTH},
     * {@see GL46::GL_UNPACK_COMPRESSED_BLOCK_HEIGHT}, and
     * {@see GL46::GL_UNPACK_COMPRESSED_BLOCK_DEPTH}, respectively.  bs  is
     * the compressed block size in bytes;  bw ,  bh , and  bd  are the
     * compressed block width, height, and depth in pixels.
     *
     * By default the pixel storage modes {@see GL46::GL_UNPACK_ROW_LENGTH},
     * {@see GL46::GL_UNPACK_SKIP_ROWS}, {@see GL46::GL_UNPACK_SKIP_PIXELS},
     * {@see GL46::GL_UNPACK_IMAGE_HEIGHT} and
     * {@see GL46::GL_UNPACK_SKIP_IMAGES} are ignored for compressed images.
     * To enable {@see GL46::GL_UNPACK_SKIP_PIXELS} and
     * {@see GL46::GL_UNPACK_ROW_LENGTH},  bs  and  bw  must both be
     * non-zero. To also enable {@see GL46::GL_UNPACK_SKIP_ROWS} and
     * {@see GL46::GL_UNPACK_IMAGE_HEIGHT},  bh  must be non-zero. To also
     * enable {@see GL46::GL_UNPACK_SKIP_IMAGES},  bd  must be non-zero. All
     * parameters must be consistent with the compressed format to produce
     * the desired results.
     *
     * When selecting a sub-rectangle from a compressed image:    the value
     * of {@see GL46::GL_UNPACK_SKIP_PIXELS} must be a multiple of  bw ;
     * the value of {@see GL46::GL_UNPACK_SKIP_ROWS} must be a multiple of
     * bw ;     the value of {@see GL46::GL_UNPACK_SKIP_IMAGES} must be a
     * multiple of  bw .
     *
     * $imageSize must be equal to:
     *
     *     b s  ×   width  b w    ×   height  b h    ×   depth  b d
     *
     * @see http://docs.gl/gl2/glCompressedTexImage3D
     * @see http://docs.gl/gl4/glCompressedTexImage3D
     * @since 1.3
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $level
     * @param int|\FFI\CData|\FFI\CInt $internalformat
     * @param int|\FFI\CData|\FFI\CInt $width
     * @param int|\FFI\CData|\FFI\CInt $height
     * @param int|\FFI\CData|\FFI\CInt $depth
     * @param int|\FFI\CData|\FFI\CInt $border
     * @param int|\FFI\CData|\FFI\CInt $imageSize
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @return void
     */
    public function glCompressedTexImage3D($target, $level, $internalformat, $width, $height, $depth, $border, $imageSize, ?\FFI\CData $data): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $level = $level instanceof \FFI\CData ? $level->cdata : $level;
        $internalformat = $internalformat instanceof \FFI\CData ? $internalformat->cdata : $internalformat;
        $width = $width instanceof \FFI\CData ? $width->cdata : $width;
        $height = $height instanceof \FFI\CData ? $height->cdata : $height;
        $depth = $depth instanceof \FFI\CData ? $depth->cdata : $depth;
        $border = $border instanceof \FFI\CData ? $border->cdata : $border;
        $imageSize = $imageSize instanceof \FFI\CData ? $imageSize->cdata : $imageSize;

        assert(Assert::uint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($level), 'Argument $level must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::uint16($internalformat), 'Argument $internalformat must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($width), 'Argument $width must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::int16($height), 'Argument $height must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::int16($depth), 'Argument $depth must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::int16($border), 'Argument $border must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($imageSize), 'Argument $imageSize must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glCompressedTexImage3D', 'void (*)(GLenum target, GLint level, GLenum internalformat, GLsizei width, GLsizei height, GLsizei depth, GLint border, GLsizei imageSize, const void *data)');
        $proc($target, $level, $internalformat, $width, $height, $depth, $border, $imageSize, $data);
    }

    /**
     * Texturing allows elements of an image array to be read by shaders.
     *
     * {@see GL46::glCompressedTexImage2D} loads a previously defined, and
     * retrieved, compressed two-dimensional texture image if $target is
     * {@see GL46::GL_TEXTURE_2D}, or one of the cube map faces such as
     * {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_X}. (see
     * {@see GL46::glTexImage2D}).
     *
     * If $target is {@see GL46::GL_TEXTURE_1D_ARRAY}, $data is treated as an
     * array of compressed 1D textures.
     *
     * If $target is {@see GL46::GL_PROXY_TEXTURE_2D},
     * {@see GL46::GL_PROXY_TEXTURE_1D_ARRAY} or
     * {@see GL46::GL_PROXY_TEXTURE_CUBE_MAP}, no data is read from $data,
     * but all of the texture image state is recalculated, checked for
     * consistency, and checked against the implementation's capabilities. If
     * the implementation cannot handle a texture of the requested texture
     * size, it sets all of the image state to 0, but does not generate an
     * error (see {@see GL46::glGetError}). To query for an entire mipmap
     * array, use an image array level greater than or equal to 1.
     *
     * $internalformat must be a known compressed image format (such as
     * {@see GL46::GL_RGTC}) or an extension-specified compressed-texture
     * format. When a texture is loaded with {@see GL46::glTexImage2D} using
     * a generic compressed texture format (e.g.,
     * {@see GL46::GL_COMPRESSED_RGB}), the GL selects from one of its
     * extensions supporting compressed textures. In order to load the
     * compressed texture image using {@see GL46::glCompressedTexImage2D},
     * query the compressed texture image's size and format using
     * {@see GL46::glGetTexLevelParameter}.
     *
     * If a non-zero named buffer object is bound to the
     * {@see GL46::GL_PIXEL_UNPACK_BUFFER} target (see
     * {@see GL46::glBindBuffer}) while a texture image is specified, $data
     * is treated as a byte offset into the buffer object's data store.
     *
     * If the compressed data are arranged into fixed-size blocks of texels,
     * the pixel storage modes can be used to select a sub-rectangle from a
     * larger containing rectangle. These pixel storage modes operate in the
     * same way as they do for {@see GL46::glTexImage2D}. In the following
     * description, denote by  bs ,  bw ,  bh , and  bd , the values of pixel
     * storage modes {@see GL46::GL_UNPACK_COMPRESSED_BLOCK_SIZE},
     * {@see GL46::GL_UNPACK_COMPRESSED_BLOCK_WIDTH},
     * {@see GL46::GL_UNPACK_COMPRESSED_BLOCK_HEIGHT}, and
     * {@see GL46::GL_UNPACK_COMPRESSED_BLOCK_DEPTH}, respectively.  bs  is
     * the compressed block size in bytes;  bw ,  bh , and  bd  are the
     * compressed block width, height, and depth in pixels.
     *
     * By default the pixel storage modes {@see GL46::GL_UNPACK_ROW_LENGTH},
     * {@see GL46::GL_UNPACK_SKIP_ROWS}, {@see GL46::GL_UNPACK_SKIP_PIXELS},
     * {@see GL46::GL_UNPACK_IMAGE_HEIGHT} and
     * {@see GL46::GL_UNPACK_SKIP_IMAGES} are ignored for compressed images.
     * To enable {@see GL46::GL_UNPACK_SKIP_PIXELS} and
     * {@see GL46::GL_UNPACK_ROW_LENGTH},  bs  and  bw  must both be
     * non-zero. To also enable {@see GL46::GL_UNPACK_SKIP_ROWS} and
     * {@see GL46::GL_UNPACK_IMAGE_HEIGHT},  bh  must be non-zero. To also
     * enable {@see GL46::GL_UNPACK_SKIP_IMAGES},  bd  must be non-zero. All
     * parameters must be consistent with the compressed format to produce
     * the desired results.
     *
     * When selecting a sub-rectangle from a compressed image:    The value
     * of {@see GL46::GL_UNPACK_SKIP_PIXELS} must be a multiple of  bw ;
     * the value of {@see GL46::GL_UNPACK_SKIP_ROWS} must be a multiple of
     * bw .
     *
     * $imageSize must be equal to:
     *
     *     b s  ×   width  b w    ×   height  b h
     *
     * @see http://docs.gl/gl2/glCompressedTexImage2D
     * @see http://docs.gl/gl4/glCompressedTexImage2D
     * @since 1.3
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $level
     * @param int|\FFI\CData|\FFI\CInt $internalformat
     * @param int|\FFI\CData|\FFI\CInt $width
     * @param int|\FFI\CData|\FFI\CInt $height
     * @param int|\FFI\CData|\FFI\CInt $border
     * @param int|\FFI\CData|\FFI\CInt $imageSize
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @return void
     */
    public function glCompressedTexImage2D($target, $level, $internalformat, $width, $height, $border, $imageSize, ?\FFI\CData $data): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $level = $level instanceof \FFI\CData ? $level->cdata : $level;
        $internalformat = $internalformat instanceof \FFI\CData ? $internalformat->cdata : $internalformat;
        $width = $width instanceof \FFI\CData ? $width->cdata : $width;
        $height = $height instanceof \FFI\CData ? $height->cdata : $height;
        $border = $border instanceof \FFI\CData ? $border->cdata : $border;
        $imageSize = $imageSize instanceof \FFI\CData ? $imageSize->cdata : $imageSize;

        assert(Assert::uint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($level), 'Argument $level must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::uint16($internalformat), 'Argument $internalformat must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($width), 'Argument $width must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::int16($height), 'Argument $height must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::int16($border), 'Argument $border must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($imageSize), 'Argument $imageSize must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glCompressedTexImage2D', 'void (*)(GLenum target, GLint level, GLenum internalformat, GLsizei width, GLsizei height, GLint border, GLsizei imageSize, const void *data)');
        $proc($target, $level, $internalformat, $width, $height, $border, $imageSize, $data);
    }

    /**
     * Texturing allows elements of an image array to be read by shaders.
     *
     * {@see GL46::glCompressedTexImage1D} loads a previously defined, and
     * retrieved, compressed one-dimensional texture image if $target is
     * {@see GL46::GL_TEXTURE_1D} (see {@see GL46::glTexImage1D}).
     *
     * If $target is {@see GL46::GL_PROXY_TEXTURE_1D}, no data is read from
     * $data, but all of the texture image state is recalculated, checked for
     * consistency, and checked against the implementation's capabilities. If
     * the implementation cannot handle a texture of the requested texture
     * size, it sets all of the image state to 0, but does not generate an
     * error (see {@see GL46::glGetError}). To query for an entire mipmap
     * array, use an image array level greater than or equal to 1.
     *
     * $internalformat must be an extension-specified compressed-texture
     * format. When a texture is loaded with {@see GL46::glTexImage1D} using
     * a generic compressed texture format (e.g.,
     * {@see GL46::GL_COMPRESSED_RGB}) the GL selects from one of its
     * extensions supporting compressed textures. In order to load the
     * compressed texture image using {@see GL46::glCompressedTexImage1D},
     * query the compressed texture image's size and format using
     * {@see GL46::glGetTexLevelParameter}.
     *
     * If a non-zero named buffer object is bound to the
     * {@see GL46::GL_PIXEL_UNPACK_BUFFER} target (see
     * {@see GL46::glBindBuffer}) while a texture image is specified, $data
     * is treated as a byte offset into the buffer object's data store.
     *
     * If the compressed data are arranged into fixed-size blocks of texels,
     * the pixel storage modes can be used to select a sub-rectangle from a
     * larger containing rectangle. These pixel storage modes operate in the
     * same way as they do for {@see GL46::glTexImage1D}. In the following
     * description, denote by  bs ,  bw ,  bh , and  bd  the values of pixel
     * storage modes {@see GL46::GL_UNPACK_COMPRESSED_BLOCK_SIZE},
     * {@see GL46::GL_UNPACK_COMPRESSED_BLOCK_WIDTH},
     * {@see GL46::GL_UNPACK_COMPRESSED_BLOCK_HEIGHT}, and
     * {@see GL46::GL_UNPACK_COMPRESSED_BLOCK_DEPTH}, respectively.  bs  is
     * the compressed block size in bytes;  bw ,  bh , and  bd  are the
     * compressed block width, height, and depth in pixels.
     *
     * By default the pixel storage modes {@see GL46::GL_UNPACK_ROW_LENGTH},
     * {@see GL46::GL_UNPACK_SKIP_ROWS}, {@see GL46::GL_UNPACK_SKIP_PIXELS},
     * {@see GL46::GL_UNPACK_IMAGE_HEIGHT} and
     * {@see GL46::GL_UNPACK_SKIP_IMAGES} are ignored for compressed images.
     * To enable {@see GL46::GL_UNPACK_SKIP_PIXELS} and
     * {@see GL46::GL_UNPACK_ROW_LENGTH},  bs  and  bw  must both be
     * non-zero. To also enable {@see GL46::GL_UNPACK_SKIP_ROWS} and
     * {@see GL46::GL_UNPACK_IMAGE_HEIGHT},  bh  must be non-zero. To also
     * enable {@see GL46::GL_UNPACK_SKIP_IMAGES},  bd  must be non-zero. All
     * parameters must be consistent with the compressed format to produce
     * the desired results.
     *
     * When selecting a sub-rectangle from a compressed image,    the value
     * of {@see GL46::GL_UNPACK_SKIP_PIXELS} must be a multiple of  bw
     *
     * $imageSize must be equal to:
     *
     *     b s  ×   width  b w
     *
     * @see http://docs.gl/gl2/glCompressedTexImage1D
     * @see http://docs.gl/gl4/glCompressedTexImage1D
     * @since 1.3
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $level
     * @param int|\FFI\CData|\FFI\CInt $internalformat
     * @param int|\FFI\CData|\FFI\CInt $width
     * @param int|\FFI\CData|\FFI\CInt $border
     * @param int|\FFI\CData|\FFI\CInt $imageSize
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @return void
     */
    public function glCompressedTexImage1D($target, $level, $internalformat, $width, $border, $imageSize, ?\FFI\CData $data): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $level = $level instanceof \FFI\CData ? $level->cdata : $level;
        $internalformat = $internalformat instanceof \FFI\CData ? $internalformat->cdata : $internalformat;
        $width = $width instanceof \FFI\CData ? $width->cdata : $width;
        $border = $border instanceof \FFI\CData ? $border->cdata : $border;
        $imageSize = $imageSize instanceof \FFI\CData ? $imageSize->cdata : $imageSize;

        assert(Assert::uint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($level), 'Argument $level must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::uint16($internalformat), 'Argument $internalformat must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($width), 'Argument $width must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::int16($border), 'Argument $border must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($imageSize), 'Argument $imageSize must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glCompressedTexImage1D', 'void (*)(GLenum target, GLint level, GLenum internalformat, GLsizei width, GLint border, GLsizei imageSize, const void *data)');
        $proc($target, $level, $internalformat, $width, $border, $imageSize, $data);
    }

    /**
     * Texturing allows elements of an image array to be read by shaders.
     *
     * {@see GL46::glCompressedTexSubImage3D} and
     * {@see GL46::glCompressedTextureSubImage3D} redefine a contiguous
     * subregion of an existing three-dimensional texture image. The texels
     * referenced by $data replace the portion of the existing texture array
     * with x indices $xoffset and    xoffset + width - 1  , and the y
     * indices $yoffset and    yoffset + height - 1  , and the z indices
     * $zoffset and    zoffset + depth - 1  , inclusive. This region may not
     * include any texels outside the range of the texture array as it was
     * originally specified. It is not an error to specify a subtexture with
     * width of 0, but such a specification has no effect.
     *
     * $internalformat must be a known compressed image format (such as
     * {@see GL46::GL_RGTC}) or an extension-specified compressed-texture
     * format. The $format of the compressed texture image is selected by the
     * GL implementation that compressed it (see {@see GL46::glTexImage3D})
     * and should be queried at the time the texture was compressed with
     * {@see GL46::glGetTexLevelParameter}.
     *
     * If a non-zero named buffer object is bound to the
     * {@see GL46::GL_PIXEL_UNPACK_BUFFER} target (see
     * {@see GL46::glBindBuffer}) while a texture image is specified, $data
     * is treated as a byte offset into the buffer object's data store.
     *
     * @see http://docs.gl/gl2/glCompressedTexSubImage3D
     * @see http://docs.gl/gl4/glCompressedTexSubImage3D
     * @since 1.3
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $level
     * @param int|\FFI\CData|\FFI\CInt $xoffset
     * @param int|\FFI\CData|\FFI\CInt $yoffset
     * @param int|\FFI\CData|\FFI\CInt $zoffset
     * @param int|\FFI\CData|\FFI\CInt $width
     * @param int|\FFI\CData|\FFI\CInt $height
     * @param int|\FFI\CData|\FFI\CInt $depth
     * @param int|\FFI\CData|\FFI\CInt $format
     * @param int|\FFI\CData|\FFI\CInt $imageSize
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @return void
     */
    public function glCompressedTexSubImage3D($target, $level, $xoffset, $yoffset, $zoffset, $width, $height, $depth, $format, $imageSize, ?\FFI\CData $data): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $level = $level instanceof \FFI\CData ? $level->cdata : $level;
        $xoffset = $xoffset instanceof \FFI\CData ? $xoffset->cdata : $xoffset;
        $yoffset = $yoffset instanceof \FFI\CData ? $yoffset->cdata : $yoffset;
        $zoffset = $zoffset instanceof \FFI\CData ? $zoffset->cdata : $zoffset;
        $width = $width instanceof \FFI\CData ? $width->cdata : $width;
        $height = $height instanceof \FFI\CData ? $height->cdata : $height;
        $depth = $depth instanceof \FFI\CData ? $depth->cdata : $depth;
        $format = $format instanceof \FFI\CData ? $format->cdata : $format;
        $imageSize = $imageSize instanceof \FFI\CData ? $imageSize->cdata : $imageSize;

        assert(Assert::uint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($level), 'Argument $level must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($xoffset), 'Argument $xoffset must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($yoffset), 'Argument $yoffset must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($zoffset), 'Argument $zoffset must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($width), 'Argument $width must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::int16($height), 'Argument $height must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::int16($depth), 'Argument $depth must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint16($format), 'Argument $format must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($imageSize), 'Argument $imageSize must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glCompressedTexSubImage3D', 'void (*)(GLenum target, GLint level, GLint xoffset, GLint yoffset, GLint zoffset, GLsizei width, GLsizei height, GLsizei depth, GLenum format, GLsizei imageSize, const void *data)');
        $proc($target, $level, $xoffset, $yoffset, $zoffset, $width, $height, $depth, $format, $imageSize, $data);
    }

    /**
     * Texturing allows elements of an image array to be read by shaders.
     *
     * {@see GL46::glCompressedTexSubImage2D} and
     * {@see GL46::glCompressedTextureSubImage2D} redefine a contiguous
     * subregion of an existing two-dimensional texture image. The texels
     * referenced by $data replace the portion of the existing texture array
     * with x indices $xoffset and    xoffset + width - 1  , and the y
     * indices $yoffset and    yoffset + height - 1  , inclusive. This region
     * may not include any texels outside the range of the texture array as
     * it was originally specified. It is not an error to specify a
     * subtexture with width of 0, but such a specification has no effect.
     *
     * $internalformat must be a known compressed image format (such as
     * {@see GL46::GL_RGTC}) or an extension-specified compressed-texture
     * format. The $format of the compressed texture image is selected by the
     * GL implementation that compressed it (see {@see GL46::glTexImage2D})
     * and should be queried at the time the texture was compressed with
     * {@see GL46::glGetTexLevelParameter}.
     *
     * If a non-zero named buffer object is bound to the
     * {@see GL46::GL_PIXEL_UNPACK_BUFFER} target (see
     * {@see GL46::glBindBuffer}) while a texture image is specified, $data
     * is treated as a byte offset into the buffer object's data store.
     *
     * @see http://docs.gl/gl2/glCompressedTexSubImage2D
     * @see http://docs.gl/gl4/glCompressedTexSubImage2D
     * @since 1.3
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $level
     * @param int|\FFI\CData|\FFI\CInt $xoffset
     * @param int|\FFI\CData|\FFI\CInt $yoffset
     * @param int|\FFI\CData|\FFI\CInt $width
     * @param int|\FFI\CData|\FFI\CInt $height
     * @param int|\FFI\CData|\FFI\CInt $format
     * @param int|\FFI\CData|\FFI\CInt $imageSize
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @return void
     */
    public function glCompressedTexSubImage2D($target, $level, $xoffset, $yoffset, $width, $height, $format, $imageSize, ?\FFI\CData $data): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $level = $level instanceof \FFI\CData ? $level->cdata : $level;
        $xoffset = $xoffset instanceof \FFI\CData ? $xoffset->cdata : $xoffset;
        $yoffset = $yoffset instanceof \FFI\CData ? $yoffset->cdata : $yoffset;
        $width = $width instanceof \FFI\CData ? $width->cdata : $width;
        $height = $height instanceof \FFI\CData ? $height->cdata : $height;
        $format = $format instanceof \FFI\CData ? $format->cdata : $format;
        $imageSize = $imageSize instanceof \FFI\CData ? $imageSize->cdata : $imageSize;

        assert(Assert::uint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($level), 'Argument $level must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($xoffset), 'Argument $xoffset must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($yoffset), 'Argument $yoffset must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($width), 'Argument $width must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::int16($height), 'Argument $height must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint16($format), 'Argument $format must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($imageSize), 'Argument $imageSize must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glCompressedTexSubImage2D', 'void (*)(GLenum target, GLint level, GLint xoffset, GLint yoffset, GLsizei width, GLsizei height, GLenum format, GLsizei imageSize, const void *data)');
        $proc($target, $level, $xoffset, $yoffset, $width, $height, $format, $imageSize, $data);
    }

    /**
     * Texturing allows elements of an image array to be read by shaders.
     *
     * {@see GL46::glCompressedTexSubImage1D} and
     * {@see GL46::glCompressedTextureSubImage1D} redefine a contiguous
     * subregion of an existing one-dimensional texture image. The texels
     * referenced by $data replace the portion of the existing texture array
     * with x indices $xoffset and    xoffset + width - 1  , inclusive. This
     * region may not include any texels outside the range of the texture
     * array as it was originally specified. It is not an error to specify a
     * subtexture with width of 0, but such a specification has no effect.
     *
     * $internalformat must be a known compressed image format (such as
     * {@see GL46::GL_RGTC}) or an extension-specified compressed-texture
     * format. The $format of the compressed texture image is selected by the
     * GL implementation that compressed it (see {@see GL46::glTexImage1D}),
     * and should be queried at the time the texture was compressed with
     * {@see GL46::glGetTexLevelParameter}.
     *
     * If a non-zero named buffer object is bound to the
     * {@see GL46::GL_PIXEL_UNPACK_BUFFER} target (see
     * {@see GL46::glBindBuffer}) while a texture image is specified, $data
     * is treated as a byte offset into the buffer object's data store.
     *
     * @see http://docs.gl/gl2/glCompressedTexSubImage1D
     * @see http://docs.gl/gl4/glCompressedTexSubImage1D
     * @since 1.3
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $level
     * @param int|\FFI\CData|\FFI\CInt $xoffset
     * @param int|\FFI\CData|\FFI\CInt $width
     * @param int|\FFI\CData|\FFI\CInt $format
     * @param int|\FFI\CData|\FFI\CInt $imageSize
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @return void
     */
    public function glCompressedTexSubImage1D($target, $level, $xoffset, $width, $format, $imageSize, ?\FFI\CData $data): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $level = $level instanceof \FFI\CData ? $level->cdata : $level;
        $xoffset = $xoffset instanceof \FFI\CData ? $xoffset->cdata : $xoffset;
        $width = $width instanceof \FFI\CData ? $width->cdata : $width;
        $format = $format instanceof \FFI\CData ? $format->cdata : $format;
        $imageSize = $imageSize instanceof \FFI\CData ? $imageSize->cdata : $imageSize;

        assert(Assert::uint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($level), 'Argument $level must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($xoffset), 'Argument $xoffset must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($width), 'Argument $width must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint16($format), 'Argument $format must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($imageSize), 'Argument $imageSize must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glCompressedTexSubImage1D', 'void (*)(GLenum target, GLint level, GLint xoffset, GLsizei width, GLenum format, GLsizei imageSize, const void *data)');
        $proc($target, $level, $xoffset, $width, $format, $imageSize, $data);
    }

    /**
     * {@see GL46::glGetCompressedTexImage} and
     * {@see GL46::glGetnCompressedTexImage} return the compressed texture
     * image associated with $target and $lod into $pixels.
     * {@see GL46::glGetCompressedTextureImage} serves the same purpose, but
     * instead of taking a texture target, it takes the ID of the texture
     * object. $pixels should be an array of $bufSize bytes for
     * {@see GL46::glGetnCompresedTexImage} and
     * {@see GL46::glGetCompressedTextureImage} functions, and of
     * {@see GL46::GL_TEXTURE_COMPRESSED_IMAGE_SIZE} bytes in case of
     * {@see GL46::glGetCompressedTexImage}. If the actual data takes less
     * space than $bufSize, the remaining bytes will not be touched. $target
     * specifies the texture target, to which the texture the data the
     * function should extract the data from is bound to. $lod specifies the
     * level-of-detail number of the desired image.
     *
     * If a non-zero named buffer object is bound to the
     * {@see GL46::GL_PIXEL_PACK_BUFFER} target (see
     * {@see GL46::glBindBuffer}) while a texture image is requested, $pixels
     * is treated as a byte offset into the buffer object's data store.
     *
     * To minimize errors, first verify that the texture is compressed by
     * calling {@see GL46::glGetTexLevelParameter} with argument
     * {@see GL46::GL_TEXTURE_COMPRESSED}. If the texture is compressed, you
     * can determine the amount of memory required to store the compressed
     * texture by calling {@see GL46::glGetTexLevelParameter} with argument
     * {@see GL46::GL_TEXTURE_COMPRESSED_IMAGE_SIZE}. Finally, retrieve the
     * internal format of the texture by calling
     * {@see GL46::glGetTexLevelParameter} with argument
     * {@see GL46::GL_TEXTURE_INTERNAL_FORMAT}. To store the texture for
     * later use, associate the internal format and size with the retrieved
     * texture image. These data can be used by the respective texture or
     * subtexture loading routine used for loading $target textures.
     *
     * @see http://docs.gl/gl2/glGetCompressedTexImage
     * @see http://docs.gl/gl4/glGetCompressedTexImage
     * @since 1.3
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $level
     * @param \FFI\CData|\FFI\CPtr|null $img
     * @return void
     */
    public function glGetCompressedTexImage($target, $level, ?\FFI\CData $img): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $level = $level instanceof \FFI\CData ? $level->cdata : $level;

        assert(Assert::uint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($level), 'Argument $level must be a C-like GLint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetCompressedTexImage', 'void (*)(GLenum target, GLint level, void *img)');
        $proc($target, $level, $img);
    }
}
