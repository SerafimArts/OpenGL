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
 * @version 1.3
 */
class GL13 extends GL12
{
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE0 = 0x84C0;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE1 = 0x84C1;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE2 = 0x84C2;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE3 = 0x84C3;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE4 = 0x84C4;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE5 = 0x84C5;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE6 = 0x84C6;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE7 = 0x84C7;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE8 = 0x84C8;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE9 = 0x84C9;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE10 = 0x84CA;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE11 = 0x84CB;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE12 = 0x84CC;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE13 = 0x84CD;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE14 = 0x84CE;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE15 = 0x84CF;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE16 = 0x84D0;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE17 = 0x84D1;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE18 = 0x84D2;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE19 = 0x84D3;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE20 = 0x84D4;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE21 = 0x84D5;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE22 = 0x84D6;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE23 = 0x84D7;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE24 = 0x84D8;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE25 = 0x84D9;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE26 = 0x84DA;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE27 = 0x84DB;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE28 = 0x84DC;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE29 = 0x84DD;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE30 = 0x84DE;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE31 = 0x84DF;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_ACTIVE_TEXTURE = 0x84E0;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_MULTISAMPLE = 0x809D;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_SAMPLE_ALPHA_TO_COVERAGE = 0x809E;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_SAMPLE_ALPHA_TO_ONE = 0x809F;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_SAMPLE_COVERAGE = 0x80A0;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_SAMPLE_BUFFERS = 0x80A8;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_SAMPLES = 0x80A9;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_SAMPLE_COVERAGE_VALUE = 0x80AA;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_SAMPLE_COVERAGE_INVERT = 0x80AB;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE_CUBE_MAP = 0x8513;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE_BINDING_CUBE_MAP = 0x8514;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE_CUBE_MAP_POSITIVE_X = 0x8515;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE_CUBE_MAP_NEGATIVE_X = 0x8516;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE_CUBE_MAP_POSITIVE_Y = 0x8517;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE_CUBE_MAP_NEGATIVE_Y = 0x8518;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE_CUBE_MAP_POSITIVE_Z = 0x8519;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE_CUBE_MAP_NEGATIVE_Z = 0x851A;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_PROXY_TEXTURE_CUBE_MAP = 0x851B;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_MAX_CUBE_MAP_TEXTURE_SIZE = 0x851C;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_COMPRESSED_RGB = 0x84ED;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_COMPRESSED_RGBA = 0x84EE;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE_COMPRESSION_HINT = 0x84EF;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE_COMPRESSED_IMAGE_SIZE = 0x86A0;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE_COMPRESSED = 0x86A1;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_NUM_COMPRESSED_TEXTURE_FORMATS = 0x86A2;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_COMPRESSED_TEXTURE_FORMATS = 0x86A3;
    /**
     * @since 1.3
     * @var int
     */
    public const GL_CLAMP_TO_BORDER = 0x812D;

    /**
     * {@see GL46::glActiveTexture} selects which texture unit subsequent texture state calls will affect. The number
     * of texture units an implementation supports is implementation dependent, but must be at least 80.
     *
     * @see http://docs.gl/gl2/glActiveTexture
     * @see http://docs.gl/gl4/glActiveTexture
     * @since 1.3
     * @param int $texture
     * @return void
     */
    public function activeTexture(int $texture): void
    {
        $__proc = $this->getProcAs('glActiveTexture', 'void (*)(GLenum texture)');
        $__proc($texture);
    }

    /**
     * Texturing allows elements of an image array to be read by shaders.
     *
     * {@see GL46::glCompressedTexImage1D} loads a previously defined, and retrieved, compressed one-dimensional
     * texture image if $target is {@see GL46::GL_TEXTURE_1D} (see {@see GL46::glTexImage1D}).
     *
     * If $target is {@see GL46::GL_PROXY_TEXTURE_1D}, no data is read from $data, but all of the texture image state
     * is recalculated, checked for consistency, and checked against the implementation's capabilities. If the
     * implementation cannot handle a texture of the requested texture size, it sets all of the image state to 0, but
     * does not generate an error (see {@see GL46::glGetError}). To query for an entire mipmap array, use an image
     * array level greater than or equal to 1.
     *
     * $internalformat must be an extension-specified compressed-texture format. When a texture is loaded with
     * {@see GL46::glTexImage1D} using a generic compressed texture format (e.g., {@see GL46::GL_COMPRESSED_RGB}) the
     * GL selects from one of its extensions supporting compressed textures. In order to load the compressed texture
     * image using {@see GL46::glCompressedTexImage1D}, query the compressed texture image's size and format using
     * {@see GL46::glGetTexLevelParameter}.
     *
     * If a non-zero named buffer object is bound to the {@see GL46::GL_PIXEL_UNPACK_BUFFER} target (see
     * {@see GL46::glBindBuffer}) while a texture image is specified, $data is treated as a byte offset into the
     * buffer object's data store.
     *
     * If the compressed data are arranged into fixed-size blocks of texels, the pixel storage modes can be used to
     * select a sub-rectangle from a larger containing rectangle. These pixel storage modes operate in the same way
     * as they do for {@see GL46::glTexImage1D}. In the following description, denote by  bs ,  bw ,  bh , and  bd
     * the values of pixel storage modes {@see GL46::GL_UNPACK_COMPRESSED_BLOCK_SIZE},
     * {@see GL46::GL_UNPACK_COMPRESSED_BLOCK_WIDTH}, {@see GL46::GL_UNPACK_COMPRESSED_BLOCK_HEIGHT}, and
     * {@see GL46::GL_UNPACK_COMPRESSED_BLOCK_DEPTH}, respectively.  bs  is the compressed block size in bytes;  bw ,
     *  bh , and  bd  are the compressed block width, height, and depth in pixels.
     *
     * By default the pixel storage modes {@see GL46::GL_UNPACK_ROW_LENGTH}, {@see GL46::GL_UNPACK_SKIP_ROWS},
     * {@see GL46::GL_UNPACK_SKIP_PIXELS}, {@see GL46::GL_UNPACK_IMAGE_HEIGHT} and {@see GL46::GL_UNPACK_SKIP_IMAGES}
     * are ignored for compressed images. To enable {@see GL46::GL_UNPACK_SKIP_PIXELS} and
     * {@see GL46::GL_UNPACK_ROW_LENGTH},  bs  and  bw  must both be non-zero. To also enable
     * {@see GL46::GL_UNPACK_SKIP_ROWS} and {@see GL46::GL_UNPACK_IMAGE_HEIGHT},  bh  must be non-zero. To also
     * enable {@see GL46::GL_UNPACK_SKIP_IMAGES},  bd  must be non-zero. All parameters must be consistent with the
     * compressed format to produce the desired results.
     *
     * When selecting a sub-rectangle from a compressed image,    the value of {@see GL46::GL_UNPACK_SKIP_PIXELS}
     * must be a multiple of  bw
     *
     * $imageSize must be equal to:
     *
     *     b s  ×   width  b w
     *
     * @see http://docs.gl/gl2/glCompressedTexImage1D
     * @see http://docs.gl/gl4/glCompressedTexImage1D
     * @since 1.3
     * @param int $target
     * @param int $level
     * @param int $internalformat
     * @param int $width
     * @param int $border
     * @param int $imageSize
     * @param \FFI\CData|null $data
     * @return void
     */
    public function compressedTexImage1D(int $target, int $level, int $internalformat, int $width, int $border, int $imageSize, ?\FFI\CData $data): void
    {
        $__proc = $this->getProcAs('glCompressedTexImage1D', 'void (*)(GLenum target, GLint level, GLenum internalformat, GLsizei width, GLint border, GLsizei imageSize, const void *data)');
        $__proc($target, $level, $internalformat, $width, $border, $imageSize, $data);
    }

    /**
     * Texturing allows elements of an image array to be read by shaders.
     *
     * {@see GL46::glCompressedTexImage2D} loads a previously defined, and retrieved, compressed two-dimensional
     * texture image if $target is {@see GL46::GL_TEXTURE_2D}, or one of the cube map faces such as
     * {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_X}. (see {@see GL46::glTexImage2D}).
     *
     * If $target is {@see GL46::GL_TEXTURE_1D_ARRAY}, $data is treated as an array of compressed 1D textures.
     *
     * If $target is {@see GL46::GL_PROXY_TEXTURE_2D}, {@see GL46::GL_PROXY_TEXTURE_1D_ARRAY} or
     * {@see GL46::GL_PROXY_TEXTURE_CUBE_MAP}, no data is read from $data, but all of the texture image state is
     * recalculated, checked for consistency, and checked against the implementation's capabilities. If the
     * implementation cannot handle a texture of the requested texture size, it sets all of the image state to 0, but
     * does not generate an error (see {@see GL46::glGetError}). To query for an entire mipmap array, use an image
     * array level greater than or equal to 1.
     *
     * $internalformat must be a known compressed image format (such as {@see GL46::GL_RGTC}) or an
     * extension-specified compressed-texture format. When a texture is loaded with {@see GL46::glTexImage2D} using a
     * generic compressed texture format (e.g., {@see GL46::GL_COMPRESSED_RGB}), the GL selects from one of its
     * extensions supporting compressed textures. In order to load the compressed texture image using
     * {@see GL46::glCompressedTexImage2D}, query the compressed texture image's size and format using
     * {@see GL46::glGetTexLevelParameter}.
     *
     * If a non-zero named buffer object is bound to the {@see GL46::GL_PIXEL_UNPACK_BUFFER} target (see
     * {@see GL46::glBindBuffer}) while a texture image is specified, $data is treated as a byte offset into the
     * buffer object's data store.
     *
     * If the compressed data are arranged into fixed-size blocks of texels, the pixel storage modes can be used to
     * select a sub-rectangle from a larger containing rectangle. These pixel storage modes operate in the same way
     * as they do for {@see GL46::glTexImage2D}. In the following description, denote by  bs ,  bw ,  bh , and  bd ,
     * the values of pixel storage modes {@see GL46::GL_UNPACK_COMPRESSED_BLOCK_SIZE},
     * {@see GL46::GL_UNPACK_COMPRESSED_BLOCK_WIDTH}, {@see GL46::GL_UNPACK_COMPRESSED_BLOCK_HEIGHT}, and
     * {@see GL46::GL_UNPACK_COMPRESSED_BLOCK_DEPTH}, respectively.  bs  is the compressed block size in bytes;  bw ,
     *  bh , and  bd  are the compressed block width, height, and depth in pixels.
     *
     * By default the pixel storage modes {@see GL46::GL_UNPACK_ROW_LENGTH}, {@see GL46::GL_UNPACK_SKIP_ROWS},
     * {@see GL46::GL_UNPACK_SKIP_PIXELS}, {@see GL46::GL_UNPACK_IMAGE_HEIGHT} and {@see GL46::GL_UNPACK_SKIP_IMAGES}
     * are ignored for compressed images. To enable {@see GL46::GL_UNPACK_SKIP_PIXELS} and
     * {@see GL46::GL_UNPACK_ROW_LENGTH},  bs  and  bw  must both be non-zero. To also enable
     * {@see GL46::GL_UNPACK_SKIP_ROWS} and {@see GL46::GL_UNPACK_IMAGE_HEIGHT},  bh  must be non-zero. To also
     * enable {@see GL46::GL_UNPACK_SKIP_IMAGES},  bd  must be non-zero. All parameters must be consistent with the
     * compressed format to produce the desired results.
     *
     * When selecting a sub-rectangle from a compressed image:    The value of {@see GL46::GL_UNPACK_SKIP_PIXELS}
     * must be a multiple of  bw ;     the value of {@see GL46::GL_UNPACK_SKIP_ROWS} must be a multiple of  bw .
     *
     * $imageSize must be equal to:
     *
     *     b s  ×   width  b w    ×   height  b h
     *
     * @see http://docs.gl/gl2/glCompressedTexImage2D
     * @see http://docs.gl/gl4/glCompressedTexImage2D
     * @since 1.3
     * @param int $target
     * @param int $level
     * @param int $internalformat
     * @param int $width
     * @param int $height
     * @param int $border
     * @param int $imageSize
     * @param \FFI\CData|null $data
     * @return void
     */
    public function compressedTexImage2D(int $target, int $level, int $internalformat, int $width, int $height, int $border, int $imageSize, ?\FFI\CData $data): void
    {
        $__proc = $this->getProcAs('glCompressedTexImage2D', 'void (*)(GLenum target, GLint level, GLenum internalformat, GLsizei width, GLsizei height, GLint border, GLsizei imageSize, const void *data)');
        $__proc($target, $level, $internalformat, $width, $height, $border, $imageSize, $data);
    }

    /**
     * Texturing allows elements of an image array to be read by shaders.
     *
     * {@see GL46::glCompressedTexImage3D} loads a previously defined, and retrieved, compressed three-dimensional
     * texture image if $target is {@see GL46::GL_TEXTURE_3D} (see {@see GL46::glTexImage3D}).
     *
     * If $target is {@see GL46::GL_TEXTURE_2D_ARRAY}, $data is treated as an array of compressed 2D textures.
     *
     * If $target is {@see GL46::GL_PROXY_TEXTURE_3D} or {@see GL46::GL_PROXY_TEXTURE_2D_ARRAY}, no data is read from
     * $data, but all of the texture image state is recalculated, checked for consistency, and checked against the
     * implementation's capabilities. If the implementation cannot handle a texture of the requested texture size, it
     * sets all of the image state to 0, but does not generate an error (see {@see GL46::glGetError}). To query for
     * an entire mipmap array, use an image array level greater than or equal to 1.
     *
     * $internalformat must be a known compressed image format (such as {@see GL46::GL_RGTC}) or an
     * extension-specified compressed-texture format. When a texture is loaded with {@see GL46::glTexImage2D} using a
     * generic compressed texture format (e.g., {@see GL46::GL_COMPRESSED_RGB}), the GL selects from one of its
     * extensions supporting compressed textures. In order to load the compressed texture image using
     * {@see GL46::glCompressedTexImage3D}, query the compressed texture image's size and format using
     * {@see GL46::glGetTexLevelParameter}.
     *
     * If a non-zero named buffer object is bound to the {@see GL46::GL_PIXEL_UNPACK_BUFFER} target (see
     * {@see GL46::glBindBuffer}) while a texture image is specified, $data is treated as a byte offset into the
     * buffer object's data store.
     *
     * If the compressed data are arranged into fixed-size blocks of texels, the pixel storage modes can be used to
     * select a sub-rectangle from a larger containing rectangle. These pixel storage modes operate in the same way
     * as they do for {@see GL46::glTexImage1D}. In the following description, denote by  bs ,  bw ,  bh , and  bd
     * the values of pixel storage modes {@see GL46::GL_UNPACK_COMPRESSED_BLOCK_SIZE},
     * {@see GL46::GL_UNPACK_COMPRESSED_BLOCK_WIDTH}, {@see GL46::GL_UNPACK_COMPRESSED_BLOCK_HEIGHT}, and
     * {@see GL46::GL_UNPACK_COMPRESSED_BLOCK_DEPTH}, respectively.  bs  is the compressed block size in bytes;  bw ,
     *  bh , and  bd  are the compressed block width, height, and depth in pixels.
     *
     * By default the pixel storage modes {@see GL46::GL_UNPACK_ROW_LENGTH}, {@see GL46::GL_UNPACK_SKIP_ROWS},
     * {@see GL46::GL_UNPACK_SKIP_PIXELS}, {@see GL46::GL_UNPACK_IMAGE_HEIGHT} and {@see GL46::GL_UNPACK_SKIP_IMAGES}
     * are ignored for compressed images. To enable {@see GL46::GL_UNPACK_SKIP_PIXELS} and
     * {@see GL46::GL_UNPACK_ROW_LENGTH},  bs  and  bw  must both be non-zero. To also enable
     * {@see GL46::GL_UNPACK_SKIP_ROWS} and {@see GL46::GL_UNPACK_IMAGE_HEIGHT},  bh  must be non-zero. To also
     * enable {@see GL46::GL_UNPACK_SKIP_IMAGES},  bd  must be non-zero. All parameters must be consistent with the
     * compressed format to produce the desired results.
     *
     * When selecting a sub-rectangle from a compressed image:    the value of {@see GL46::GL_UNPACK_SKIP_PIXELS}
     * must be a multiple of  bw ;     the value of {@see GL46::GL_UNPACK_SKIP_ROWS} must be a multiple of  bw ;
     * the value of {@see GL46::GL_UNPACK_SKIP_IMAGES} must be a multiple of  bw .
     *
     * $imageSize must be equal to:
     *
     *     b s  ×   width  b w    ×   height  b h    ×   depth  b d
     *
     * @see http://docs.gl/gl2/glCompressedTexImage3D
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
     * @param \FFI\CData|null $data
     * @return void
     */
    public function compressedTexImage3D(
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
        $__proc = $this->getProcAs('glCompressedTexImage3D', 'void (*)(GLenum target, GLint level, GLenum internalformat, GLsizei width, GLsizei height, GLsizei depth, GLint border, GLsizei imageSize, const void *data)');
        $__proc($target, $level, $internalformat, $width, $height, $depth, $border, $imageSize, $data);
    }

    /**
     * Texturing allows elements of an image array to be read by shaders.
     *
     * {@see GL46::glCompressedTexSubImage1D} and {@see GL46::glCompressedTextureSubImage1D} redefine a contiguous
     * subregion of an existing one-dimensional texture image. The texels referenced by $data replace the portion of
     * the existing texture array with x indices $xoffset and    xoffset + width - 1  , inclusive. This region may
     * not include any texels outside the range of the texture array as it was originally specified. It is not an
     * error to specify a subtexture with width of 0, but such a specification has no effect.
     *
     * $internalformat must be a known compressed image format (such as {@see GL46::GL_RGTC}) or an
     * extension-specified compressed-texture format. The $format of the compressed texture image is selected by the
     * GL implementation that compressed it (see {@see GL46::glTexImage1D}), and should be queried at the time the
     * texture was compressed with {@see GL46::glGetTexLevelParameter}.
     *
     * If a non-zero named buffer object is bound to the {@see GL46::GL_PIXEL_UNPACK_BUFFER} target (see
     * {@see GL46::glBindBuffer}) while a texture image is specified, $data is treated as a byte offset into the
     * buffer object's data store.
     *
     * @see http://docs.gl/gl2/glCompressedTexSubImage1D
     * @see http://docs.gl/gl4/glCompressedTexSubImage1D
     * @since 1.3
     * @param int $target
     * @param int $level
     * @param int $xoffset
     * @param int $width
     * @param int $format
     * @param int $imageSize
     * @param \FFI\CData|null $data
     * @return void
     */
    public function compressedTexSubImage1D(int $target, int $level, int $xoffset, int $width, int $format, int $imageSize, ?\FFI\CData $data): void
    {
        $__proc = $this->getProcAs('glCompressedTexSubImage1D', 'void (*)(GLenum target, GLint level, GLint xoffset, GLsizei width, GLenum format, GLsizei imageSize, const void *data)');
        $__proc($target, $level, $xoffset, $width, $format, $imageSize, $data);
    }

    /**
     * Texturing allows elements of an image array to be read by shaders.
     *
     * {@see GL46::glCompressedTexSubImage2D} and {@see GL46::glCompressedTextureSubImage2D} redefine a contiguous
     * subregion of an existing two-dimensional texture image. The texels referenced by $data replace the portion of
     * the existing texture array with x indices $xoffset and    xoffset + width - 1  , and the y indices $yoffset
     * and    yoffset + height - 1  , inclusive. This region may not include any texels outside the range of the
     * texture array as it was originally specified. It is not an error to specify a subtexture with width of 0, but
     * such a specification has no effect.
     *
     * $internalformat must be a known compressed image format (such as {@see GL46::GL_RGTC}) or an
     * extension-specified compressed-texture format. The $format of the compressed texture image is selected by the
     * GL implementation that compressed it (see {@see GL46::glTexImage2D}) and should be queried at the time the
     * texture was compressed with {@see GL46::glGetTexLevelParameter}.
     *
     * If a non-zero named buffer object is bound to the {@see GL46::GL_PIXEL_UNPACK_BUFFER} target (see
     * {@see GL46::glBindBuffer}) while a texture image is specified, $data is treated as a byte offset into the
     * buffer object's data store.
     *
     * @see http://docs.gl/gl2/glCompressedTexSubImage2D
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
     * @param \FFI\CData|null $data
     * @return void
     */
    public function compressedTexSubImage2D(
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
        $__proc = $this->getProcAs('glCompressedTexSubImage2D', 'void (*)(GLenum target, GLint level, GLint xoffset, GLint yoffset, GLsizei width, GLsizei height, GLenum format, GLsizei imageSize, const void *data)');
        $__proc($target, $level, $xoffset, $yoffset, $width, $height, $format, $imageSize, $data);
    }

    /**
     * Texturing allows elements of an image array to be read by shaders.
     *
     * {@see GL46::glCompressedTexSubImage3D} and {@see GL46::glCompressedTextureSubImage3D} redefine a contiguous
     * subregion of an existing three-dimensional texture image. The texels referenced by $data replace the portion
     * of the existing texture array with x indices $xoffset and    xoffset + width - 1  , and the y indices $yoffset
     * and    yoffset + height - 1  , and the z indices $zoffset and    zoffset + depth - 1  , inclusive. This region
     * may not include any texels outside the range of the texture array as it was originally specified. It is not an
     * error to specify a subtexture with width of 0, but such a specification has no effect.
     *
     * $internalformat must be a known compressed image format (such as {@see GL46::GL_RGTC}) or an
     * extension-specified compressed-texture format. The $format of the compressed texture image is selected by the
     * GL implementation that compressed it (see {@see GL46::glTexImage3D}) and should be queried at the time the
     * texture was compressed with {@see GL46::glGetTexLevelParameter}.
     *
     * If a non-zero named buffer object is bound to the {@see GL46::GL_PIXEL_UNPACK_BUFFER} target (see
     * {@see GL46::glBindBuffer}) while a texture image is specified, $data is treated as a byte offset into the
     * buffer object's data store.
     *
     * @see http://docs.gl/gl2/glCompressedTexSubImage3D
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
     * @param \FFI\CData|null $data
     * @return void
     */
    public function compressedTexSubImage3D(
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
        $__proc = $this->getProcAs('glCompressedTexSubImage3D', 'void (*)(GLenum target, GLint level, GLint xoffset, GLint yoffset, GLint zoffset, GLsizei width, GLsizei height, GLsizei depth, GLenum format, GLsizei imageSize, const void *data)');
        $__proc($target, $level, $xoffset, $yoffset, $zoffset, $width, $height, $depth, $format, $imageSize, $data);
    }

    /**
     * {@see GL46::glGetCompressedTexImage} and {@see GL46::glGetnCompressedTexImage} return the compressed texture
     * image associated with $target and $lod into $pixels. {@see GL46::glGetCompressedTextureImage} serves the same
     * purpose, but instead of taking a texture target, it takes the ID of the texture object. $pixels should be an
     * array of $bufSize bytes for {@see GL46::glGetnCompresedTexImage} and {@see GL46::glGetCompressedTextureImage}
     * functions, and of {@see GL46::GL_TEXTURE_COMPRESSED_IMAGE_SIZE} bytes in case of
     * {@see GL46::glGetCompressedTexImage}. If the actual data takes less space than $bufSize, the remaining bytes
     * will not be touched. $target specifies the texture target, to which the texture the data the function should
     * extract the data from is bound to. $lod specifies the level-of-detail number of the desired image.
     *
     * If a non-zero named buffer object is bound to the {@see GL46::GL_PIXEL_PACK_BUFFER} target (see
     * {@see GL46::glBindBuffer}) while a texture image is requested, $pixels is treated as a byte offset into the
     * buffer object's data store.
     *
     * To minimize errors, first verify that the texture is compressed by calling {@see GL46::glGetTexLevelParameter}
     * with argument {@see GL46::GL_TEXTURE_COMPRESSED}. If the texture is compressed, you can determine the amount
     * of memory required to store the compressed texture by calling {@see GL46::glGetTexLevelParameter} with
     * argument {@see GL46::GL_TEXTURE_COMPRESSED_IMAGE_SIZE}. Finally, retrieve the internal format of the texture
     * by calling {@see GL46::glGetTexLevelParameter} with argument {@see GL46::GL_TEXTURE_INTERNAL_FORMAT}. To store
     * the texture for later use, associate the internal format and size with the retrieved texture image. These data
     * can be used by the respective texture or subtexture loading routine used for loading $target textures.
     *
     * @see http://docs.gl/gl2/glGetCompressedTexImage
     * @see http://docs.gl/gl4/glGetCompressedTexImage
     * @since 1.3
     * @param int $target
     * @param int $level
     * @param \FFI\CData|null $img
     * @return void
     */
    public function getCompressedTexImage(int $target, int $level, ?\FFI\CData $img): void
    {
        $__proc = $this->getProcAs('glGetCompressedTexImage', 'void (*)(GLenum target, GLint level, void *img)');
        $__proc($target, $level, $img);
    }

    /**
     * Multisampling samples a pixel multiple times at various implementation-dependent subpixel locations to
     * generate antialiasing effects. Multisampling transparently antialiases points, lines, polygons, and images if
     * it is enabled.
     *
     * $value is used in constructing a temporary mask used in determining which samples will be used in resolving
     * the final fragment color. This mask is bitwise-anded with the coverage mask generated from the multisampling
     * computation. If the $invert flag is set, the temporary mask is inverted (all bits flipped) and then the
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
     * @see http://docs.gl/gl4/glSampleCoverage
     * @since 1.3
     * @param float $value
     * @param int $invert
     * @return void
     */
    public function sampleCoverage(float $value, int $invert): void
    {
        $__proc = $this->getProcAs('glSampleCoverage', 'void (*)(GLfloat value, GLboolean invert)');
        $__proc($value, $invert);
    }
}
