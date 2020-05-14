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
 *
 * @version 1.3
 */
class GL13 extends GL12
{
    /**
     * Accepted by the $internalformat parameter of TexImage1D, TexImage2D, TexImage3D, CopyTexImage1D, and
     * CopyTexImage2D.
     *
     * @since 1.3
     * @var int
     */
    public const
        GL_COMPRESSED_ALPHA           = 0x84E9,
        GL_COMPRESSED_LUMINANCE       = 0x84EA,
        GL_COMPRESSED_LUMINANCE_ALPHA = 0x84EB,
        GL_COMPRESSED_INTENSITY       = 0x84EC,
        GL_COMPRESSED_RGB             = 0x84ED,
        GL_COMPRESSED_RGBA            = 0x84EE;

    /**
     * Accepted by the $target parameter of Hint and the $value parameter of GetIntegerv, GetBooleanv, GetFloatv, and
     * GetDoublev.
     *
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE_COMPRESSION_HINT = 0x84EF;

    /**
     * Accepted by the $value parameter of GetTexLevelParameter.
     *
     * @since 1.3
     * @var int
     */
    public const
        GL_TEXTURE_COMPRESSED_IMAGE_SIZE = 0x86A0,
        GL_TEXTURE_COMPRESSED            = 0x86A1;

    /**
     * Accepted by the $value parameter of GetIntegerv, GetBooleanv, GetFloatv, and GetDoublev.
     *
     * @since 1.3
     * @var int
     */
    public const
        GL_NUM_COMPRESSED_TEXTURE_FORMATS = 0x86A2,
        GL_COMPRESSED_TEXTURE_FORMATS     = 0x86A3;

    /**
     * Accepted by the $param parameters of TexGend, TexGenf, and TexGeni when $pname parameter is TEXTURE_GEN_MODE.
     *
     * @since 1.3
     * @var int
     */
    public const
        GL_NORMAL_MAP     = 0x8511,
        GL_REFLECTION_MAP = 0x8512;

    /**
     * When the $pname parameter of TexGendv, TexGenfv, and TexGeniv is TEXTURE_GEN_MODE, then the array $params may
     * also contain NORMAL_MAP or REFLECTION_MAP. Accepted by the $cap parameter of Enable, Disable, IsEnabled, and by
     * the $pname parameter of GetBooleanv, GetIntegerv, GetFloatv, and GetDoublev, and by the $target parameter of
     * BindTexture, GetTexParameterfv, GetTexParameteriv, TexParameterf, TexParameteri, TexParameterfv, and
     * TexParameteriv.
     *
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE_CUBE_MAP = 0x8513;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetIntegerv, GetFloatv, and GetDoublev.
     *
     * @since 1.3
     * @var int
     */
    public const GL_TEXTURE_BINDING_CUBE_MAP = 0x8514;

    /**
     * Accepted by the $target parameter of GetTexImage, GetTexLevelParameteriv, GetTexLevelParameterfv, TexImage2D,
     * CopyTexImage2D, TexSubImage2D, and CopySubTexImage2D.
     *
     * @since 1.3
     * @var int
     */
    public const
        GL_TEXTURE_CUBE_MAP_POSITIVE_X = 0x8515,
        GL_TEXTURE_CUBE_MAP_NEGATIVE_X = 0x8516,
        GL_TEXTURE_CUBE_MAP_POSITIVE_Y = 0x8517,
        GL_TEXTURE_CUBE_MAP_NEGATIVE_Y = 0x8518,
        GL_TEXTURE_CUBE_MAP_POSITIVE_Z = 0x8519,
        GL_TEXTURE_CUBE_MAP_NEGATIVE_Z = 0x851A;

    /**
     * Accepted by the $target parameter of GetTexLevelParameteriv, GetTexLevelParameterfv, GetTexParameteriv, and
     * TexImage2D.
     *
     * @since 1.3
     * @var int
     */
    public const GL_PROXY_TEXTURE_CUBE_MAP = 0x851B;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetDoublev, GetIntegerv, and GetFloatv.
     *
     * @since 1.3
     * @var int
     */
    public const GL_MAX_CUBE_MAP_TEXTURE_SIZE = 0x851C;

    /**
     * Accepted by the $cap parameter of Enable, Disable, and IsEnabled, and by the $pname parameter of GetBooleanv,
     * GetIntegerv, GetFloatv, and GetDoublev.
     *
     * @since 1.3
     * @var int
     */
    public const
        GL_MULTISAMPLE              = 0x809D,
        GL_SAMPLE_ALPHA_TO_COVERAGE = 0x809E,
        GL_SAMPLE_ALPHA_TO_ONE      = 0x809F,
        GL_SAMPLE_COVERAGE          = 0x80A0;

    /**
     * Accepted by the $mask parameter of PushAttrib.
     *
     * @since 1.3
     * @var int
     */
    public const GL_MULTISAMPLE_BIT = 0x2000_0000;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetDoublev, GetIntegerv, and GetFloatv.
     *
     * @since 1.3
     * @var int
     */
    public const
        GL_SAMPLE_BUFFERS         = 0x80A8,
        GL_SAMPLES                = 0x80A9,
        GL_SAMPLE_COVERAGE_VALUE  = 0x80AA,
        GL_SAMPLE_COVERAGE_INVERT = 0x80AB;

    /**
     * Accepted by the $texture parameter of ActiveTexture and MultiTexCoord.
     *
     * @since 1.3
     * @var int
     */
    public const
        GL_TEXTURE0  = 0x84C0,
        GL_TEXTURE1  = 0x84C1,
        GL_TEXTURE2  = 0x84C2,
        GL_TEXTURE3  = 0x84C3,
        GL_TEXTURE4  = 0x84C4,
        GL_TEXTURE5  = 0x84C5,
        GL_TEXTURE6  = 0x84C6,
        GL_TEXTURE7  = 0x84C7,
        GL_TEXTURE8  = 0x84C8,
        GL_TEXTURE9  = 0x84C9,
        GL_TEXTURE10 = 0x84CA,
        GL_TEXTURE11 = 0x84CB,
        GL_TEXTURE12 = 0x84CC,
        GL_TEXTURE13 = 0x84CD,
        GL_TEXTURE14 = 0x84CE,
        GL_TEXTURE15 = 0x84CF,
        GL_TEXTURE16 = 0x84D0,
        GL_TEXTURE17 = 0x84D1,
        GL_TEXTURE18 = 0x84D2,
        GL_TEXTURE19 = 0x84D3,
        GL_TEXTURE20 = 0x84D4,
        GL_TEXTURE21 = 0x84D5,
        GL_TEXTURE22 = 0x84D6,
        GL_TEXTURE23 = 0x84D7,
        GL_TEXTURE24 = 0x84D8,
        GL_TEXTURE25 = 0x84D9,
        GL_TEXTURE26 = 0x84DA,
        GL_TEXTURE27 = 0x84DB,
        GL_TEXTURE28 = 0x84DC,
        GL_TEXTURE29 = 0x84DD,
        GL_TEXTURE30 = 0x84DE,
        GL_TEXTURE31 = 0x84DF;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetDoublev, GetIntegerv, and GetFloatv.
     *
     * @since 1.3
     * @var int
     */
    public const
        GL_ACTIVE_TEXTURE        = 0x84E0,
        GL_CLIENT_ACTIVE_TEXTURE = 0x84E1,
        GL_MAX_TEXTURE_UNITS     = 0x84E2;

    /**
     * Accepted by the $params parameter of TexEnvf, TexEnvi, TexEnvfv, and TexEnviv when the $pname parameter value is
     * TEXTURE_ENV_MODE.
     *
     * @since 1.3
     * @var int
     */
    public const GL_COMBINE = 0x8570;

    /** Accepted by the $pname parameter of TexEnvf, TexEnvi, TexEnvfv, and TexEnviv when the $target parameter value
     * is TEXTURE_ENV.
     *
     * @since 1.3
     * @var int
     */
    public const
        GL_COMBINE_RGB    = 0x8571,
        GL_COMBINE_ALPHA  = 0x8572,
        GL_SOURCE0_RGB    = 0x8580,
        GL_SOURCE1_RGB    = 0x8581,
        GL_SOURCE2_RGB    = 0x8582,
        GL_SOURCE0_ALPHA  = 0x8588,
        GL_SOURCE1_ALPHA  = 0x8589,
        GL_SOURCE2_ALPHA  = 0x858A,
        GL_OPERAND0_RGB   = 0x8590,
        GL_OPERAND1_RGB   = 0x8591,
        GL_OPERAND2_RGB   = 0x8592,
        GL_OPERAND0_ALPHA = 0x8598,
        GL_OPERAND1_ALPHA = 0x8599,
        GL_OPERAND2_ALPHA = 0x859A,
        GL_RGB_SCALE      = 0x8573;

    /**
     * Accepted by the $params parameter of TexEnvf, TexEnvi, TexEnvfv, and TexEnviv when the $pname parameter value is
     * COMBINE_RGB or COMBINE_ALPHA.
     *
     * @since 1.3
     * @var int
     */
    public const
        GL_ADD_SIGNED  = 0x8574,
        GL_INTERPOLATE = 0x8575,
        GL_SUBTRACT    = 0x84E7;

    /**
     * Accepted by the $params parameter of TexEnvf, TexEnvi, TexEnvfv, and TexEnviv when the $pname parameter value is
     * SOURCE0_RGB, SOURCE1_RGB, SOURCE2_RGB, SOURCE0_ALPHA, SOURCE1_ALPHA, or SOURCE2_ALPHA.
     *
     * @since 1.3
     * @var int
     */
    public const
        GL_CONSTANT      = 0x8576,
        GL_PRIMARY_COLOR = 0x8577,
        GL_PREVIOUS      = 0x8578;

    /**
     * Accepted by the $params parameter of TexEnvf, TexEnvi, TexEnvfv, and TexEnviv when the $pname parameter value
     * is COMBINE_RGB_ARB.
     *
     * @since 1.3
     * @var int
     */
    public const
        GL_DOT3_RGB  = 0x86AE,
        GL_DOT3_RGBA = 0x86AF;

    /**
     * Accepted by the $param parameter of TexParameteri and TexParameterf, and by the $params parameter of
     * TexParameteriv and TexParameterfv, when their $pname parameter is TEXTURE_WRAP_S, TEXTURE_WRAP_T, or
     * TEXTURE_WRAP_R.
     *
     * @since 1.3
     * @var int
     */
    public const GL_CLAMP_TO_BORDER = 0x812D;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetIntegerv, GetFloatv, and GetDoublev.
     *
     * @since 1.3
     * @var int
     */
    public const
        GL_TRANSPOSE_MODELVIEW_MATRIX  = 0x84E3,
        GL_TRANSPOSE_PROJECTION_MATRIX = 0x84E4,
        GL_TRANSPOSE_TEXTURE_MATRIX    = 0x84E5,
        GL_TRANSPOSE_COLOR_MATRIX      = 0x84E6;

    /**
     * {@see GL13::activeTexture} selects which texture unit subsequent texture state calls will affect. The number
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
        $__proc = $this->proc('glActiveTexture', 'void (*)(GLenum texture)');
        $__proc($texture);
    }

    /**
     * Texturing allows elements of an image array to be read by shaders.
     *
     * {@see GL13::compressedTexImage1D} loads a previously defined, and retrieved, compressed one-dimensional
     * texture image if $target is {@see GL13::GL_TEXTURE_1D} (see {@see GL13::texImage1D}).
     *
     * If $target is {@see GL13::GL_PROXY_TEXTURE_1D}, no data is read from $data, but all of the texture image state
     * is recalculated, checked for consistency, and checked against the implementation's capabilities. If the
     * implementation cannot handle a texture of the requested texture size, it sets all of the image state to 0, but
     * does not generate an error (see {@see GL13::getError}). To query for an entire mipmap array, use an image
     * array level greater than or equal to 1.
     *
     * $internalformat must be an extension-specified compressed-texture format. When a texture is loaded with
     * {@see GL13::texImage1D} using a generic compressed texture format (e.g., {@see GL13::GL_COMPRESSED_RGB}) the
     * GL selects from one of its extensions supporting compressed textures. In order to load the compressed texture
     * image using {@see GL13::compressedTexImage1D}, query the compressed texture image's size and format using
     * {@see GL13::getTexLevelParameter}.
     *
     * If a non-zero named buffer object is bound to the {@see GL13::GL_PIXEL_UNPACK_BUFFER} target (see
     * {@see GL13::bindBuffer}) while a texture image is specified, $data is treated as a byte offset into the
     * buffer object's data store.
     *
     * If the compressed data are arranged into fixed-size blocks of texels, the pixel storage modes can be used to
     * select a sub-rectangle from a larger containing rectangle. These pixel storage modes operate in the same way
     * as they do for {@see GL13::texImage1D}. In the following description, denote by  bs ,  bw ,  bh , and  bd
     * the values of pixel storage modes {@see GL13::GL_UNPACK_COMPRESSED_BLOCK_SIZE},
     * {@see GL13::GL_UNPACK_COMPRESSED_BLOCK_WIDTH}, {@see GL13::GL_UNPACK_COMPRESSED_BLOCK_HEIGHT}, and
     * {@see GL13::GL_UNPACK_COMPRESSED_BLOCK_DEPTH}, respectively.  bs  is the compressed block size in bytes;  bw ,
     *  bh , and  bd  are the compressed block width, height, and depth in pixels.
     *
     * By default the pixel storage modes {@see GL13::GL_UNPACK_ROW_LENGTH}, {@see GL13::GL_UNPACK_SKIP_ROWS},
     * {@see GL13::GL_UNPACK_SKIP_PIXELS}, {@see GL13::GL_UNPACK_IMAGE_HEIGHT} and {@see GL13::GL_UNPACK_SKIP_IMAGES}
     * are ignored for compressed images. To enable {@see GL13::GL_UNPACK_SKIP_PIXELS} and
     * {@see GL13::GL_UNPACK_ROW_LENGTH},  bs  and  bw  must both be non-zero. To also enable
     * {@see GL13::GL_UNPACK_SKIP_ROWS} and {@see GL13::GL_UNPACK_IMAGE_HEIGHT},  bh  must be non-zero. To also
     * enable {@see GL13::GL_UNPACK_SKIP_IMAGES},  bd  must be non-zero. All parameters must be consistent with the
     * compressed format to produce the desired results.
     *
     * When selecting a sub-rectangle from a compressed image,    the value of {@see GL13::GL_UNPACK_SKIP_PIXELS}
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
     * @param CData|null $data
     * @return void
     */
    public function compressedTexImage1D(int $target, int $level, int $internalformat, int $width, int $border, int $imageSize, ?CData $data): void
    {
        $__proc = $this->proc('glCompressedTexImage1D', 'void (*)(GLenum target, GLint level, GLenum internalformat, GLsizei width, GLint border, GLsizei imageSize, const void *data)');
        $__proc($target, $level, $internalformat, $width, $border, $imageSize, $data);
    }

    /**
     * Texturing allows elements of an image array to be read by shaders.
     *
     * {@see GL13::compressedTexImage2D} loads a previously defined, and retrieved, compressed two-dimensional
     * texture image if $target is {@see GL13::GL_TEXTURE_2D}, or one of the cube map faces such as
     * {@see GL13::GL_TEXTURE_CUBE_MAP_POSITIVE_X}. (see {@see GL13::texImage2D}).
     *
     * If $target is {@see GL13::GL_TEXTURE_1D_ARRAY}, $data is treated as an array of compressed 1D textures.
     *
     * If $target is {@see GL13::GL_PROXY_TEXTURE_2D}, {@see GL13::GL_PROXY_TEXTURE_1D_ARRAY} or
     * {@see GL13::GL_PROXY_TEXTURE_CUBE_MAP}, no data is read from $data, but all of the texture image state is
     * recalculated, checked for consistency, and checked against the implementation's capabilities. If the
     * implementation cannot handle a texture of the requested texture size, it sets all of the image state to 0, but
     * does not generate an error (see {@see GL13::getError}). To query for an entire mipmap array, use an image
     * array level greater than or equal to 1.
     *
     * $internalformat must be a known compressed image format (such as {@see GL13::GL_RGTC}) or an
     * extension-specified compressed-texture format. When a texture is loaded with {@see GL13::texImage2D} using a
     * generic compressed texture format (e.g., {@see GL13::GL_COMPRESSED_RGB}), the GL selects from one of its
     * extensions supporting compressed textures. In order to load the compressed texture image using
     * {@see GL13::compressedTexImage2D}, query the compressed texture image's size and format using
     * {@see GL13::getTexLevelParameter}.
     *
     * If a non-zero named buffer object is bound to the {@see GL13::GL_PIXEL_UNPACK_BUFFER} target (see
     * {@see GL13::bindBuffer}) while a texture image is specified, $data is treated as a byte offset into the
     * buffer object's data store.
     *
     * If the compressed data are arranged into fixed-size blocks of texels, the pixel storage modes can be used to
     * select a sub-rectangle from a larger containing rectangle. These pixel storage modes operate in the same way
     * as they do for {@see GL13::texImage2D}. In the following description, denote by  bs ,  bw ,  bh , and  bd ,
     * the values of pixel storage modes {@see GL13::GL_UNPACK_COMPRESSED_BLOCK_SIZE},
     * {@see GL13::GL_UNPACK_COMPRESSED_BLOCK_WIDTH}, {@see GL13::GL_UNPACK_COMPRESSED_BLOCK_HEIGHT}, and
     * {@see GL13::GL_UNPACK_COMPRESSED_BLOCK_DEPTH}, respectively.  bs  is the compressed block size in bytes;  bw ,
     *  bh , and  bd  are the compressed block width, height, and depth in pixels.
     *
     * By default the pixel storage modes {@see GL13::GL_UNPACK_ROW_LENGTH}, {@see GL13::GL_UNPACK_SKIP_ROWS},
     * {@see GL13::GL_UNPACK_SKIP_PIXELS}, {@see GL13::GL_UNPACK_IMAGE_HEIGHT} and {@see GL13::GL_UNPACK_SKIP_IMAGES}
     * are ignored for compressed images. To enable {@see GL13::GL_UNPACK_SKIP_PIXELS} and
     * {@see GL13::GL_UNPACK_ROW_LENGTH},  bs  and  bw  must both be non-zero. To also enable
     * {@see GL13::GL_UNPACK_SKIP_ROWS} and {@see GL13::GL_UNPACK_IMAGE_HEIGHT},  bh  must be non-zero. To also
     * enable {@see GL13::GL_UNPACK_SKIP_IMAGES},  bd  must be non-zero. All parameters must be consistent with the
     * compressed format to produce the desired results.
     *
     * When selecting a sub-rectangle from a compressed image:    The value of {@see GL13::GL_UNPACK_SKIP_PIXELS}
     * must be a multiple of  bw ;     the value of {@see GL13::GL_UNPACK_SKIP_ROWS} must be a multiple of  bw .
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
     * @param CData|null $data
     * @return void
     */
    public function compressedTexImage2D(int $target, int $level, int $internalformat, int $width, int $height, int $border, int $imageSize, ?CData $data): void
    {
        $__proc = $this->proc('glCompressedTexImage2D', 'void (*)(GLenum target, GLint level, GLenum internalformat, GLsizei width, GLsizei height, GLint border, GLsizei imageSize, const void *data)');
        $__proc($target, $level, $internalformat, $width, $height, $border, $imageSize, $data);
    }

    /**
     * Texturing allows elements of an image array to be read by shaders.
     *
     * {@see GL13::compressedTexImage3D} loads a previously defined, and retrieved, compressed three-dimensional
     * texture image if $target is {@see GL13::GL_TEXTURE_3D} (see {@see GL13::texImage3D}).
     *
     * If $target is {@see GL13::GL_TEXTURE_2D_ARRAY}, $data is treated as an array of compressed 2D textures.
     *
     * If $target is {@see GL13::GL_PROXY_TEXTURE_3D} or {@see GL13::GL_PROXY_TEXTURE_2D_ARRAY}, no data is read from
     * $data, but all of the texture image state is recalculated, checked for consistency, and checked against the
     * implementation's capabilities. If the implementation cannot handle a texture of the requested texture size, it
     * sets all of the image state to 0, but does not generate an error (see {@see GL13::getError}). To query for
     * an entire mipmap array, use an image array level greater than or equal to 1.
     *
     * $internalformat must be a known compressed image format (such as {@see GL13::GL_RGTC}) or an
     * extension-specified compressed-texture format. When a texture is loaded with {@see GL13::texImage2D} using a
     * generic compressed texture format (e.g., {@see GL13::GL_COMPRESSED_RGB}), the GL selects from one of its
     * extensions supporting compressed textures. In order to load the compressed texture image using
     * {@see GL13::compressedTexImage3D}, query the compressed texture image's size and format using
     * {@see GL13::getTexLevelParameter}.
     *
     * If a non-zero named buffer object is bound to the {@see GL13::GL_PIXEL_UNPACK_BUFFER} target (see
     * {@see GL13::bindBuffer}) while a texture image is specified, $data is treated as a byte offset into the
     * buffer object's data store.
     *
     * If the compressed data are arranged into fixed-size blocks of texels, the pixel storage modes can be used to
     * select a sub-rectangle from a larger containing rectangle. These pixel storage modes operate in the same way
     * as they do for {@see GL13::texImage1D}. In the following description, denote by  bs ,  bw ,  bh , and  bd
     * the values of pixel storage modes {@see GL13::GL_UNPACK_COMPRESSED_BLOCK_SIZE},
     * {@see GL13::GL_UNPACK_COMPRESSED_BLOCK_WIDTH}, {@see GL13::GL_UNPACK_COMPRESSED_BLOCK_HEIGHT}, and
     * {@see GL13::GL_UNPACK_COMPRESSED_BLOCK_DEPTH}, respectively.  bs  is the compressed block size in bytes;  bw ,
     *  bh , and  bd  are the compressed block width, height, and depth in pixels.
     *
     * By default the pixel storage modes {@see GL13::GL_UNPACK_ROW_LENGTH}, {@see GL13::GL_UNPACK_SKIP_ROWS},
     * {@see GL13::GL_UNPACK_SKIP_PIXELS}, {@see GL13::GL_UNPACK_IMAGE_HEIGHT} and {@see GL13::GL_UNPACK_SKIP_IMAGES}
     * are ignored for compressed images. To enable {@see GL13::GL_UNPACK_SKIP_PIXELS} and
     * {@see GL13::GL_UNPACK_ROW_LENGTH},  bs  and  bw  must both be non-zero. To also enable
     * {@see GL13::GL_UNPACK_SKIP_ROWS} and {@see GL13::GL_UNPACK_IMAGE_HEIGHT},  bh  must be non-zero. To also
     * enable {@see GL13::GL_UNPACK_SKIP_IMAGES},  bd  must be non-zero. All parameters must be consistent with the
     * compressed format to produce the desired results.
     *
     * When selecting a sub-rectangle from a compressed image:    the value of {@see GL13::GL_UNPACK_SKIP_PIXELS}
     * must be a multiple of  bw ;     the value of {@see GL13::GL_UNPACK_SKIP_ROWS} must be a multiple of  bw ;
     * the value of {@see GL13::GL_UNPACK_SKIP_IMAGES} must be a multiple of  bw .
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
     * @param CData|null $data
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
        ?CData $data
    ): void {
        $__proc = $this->proc('glCompressedTexImage3D', 'void (*)(GLenum target, GLint level, GLenum internalformat, GLsizei width, GLsizei height, GLsizei depth, GLint border, GLsizei imageSize, const void *data)');
        $__proc($target, $level, $internalformat, $width, $height, $depth, $border, $imageSize, $data);
    }

    /**
     * Texturing allows elements of an image array to be read by shaders.
     *
     * {@see GL13::compressedTexSubImage1D} and {@see GL13::compressedTextureSubImage1D} redefine a contiguous
     * subregion of an existing one-dimensional texture image. The texels referenced by $data replace the portion of
     * the existing texture array with x indices $xoffset and    xoffset + width - 1  , inclusive. This region may
     * not include any texels outside the range of the texture array as it was originally specified. It is not an
     * error to specify a subtexture with width of 0, but such a specification has no effect.
     *
     * $internalformat must be a known compressed image format (such as {@see GL13::GL_RGTC}) or an
     * extension-specified compressed-texture format. The $format of the compressed texture image is selected by the
     * GL implementation that compressed it (see {@see GL13::texImage1D}), and should be queried at the time the
     * texture was compressed with {@see GL13::getTexLevelParameter}.
     *
     * If a non-zero named buffer object is bound to the {@see GL13::GL_PIXEL_UNPACK_BUFFER} target (see
     * {@see GL13::bindBuffer}) while a texture image is specified, $data is treated as a byte offset into the
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
     * @param CData|null $data
     * @return void
     */
    public function compressedTexSubImage1D(int $target, int $level, int $xoffset, int $width, int $format, int $imageSize, ?CData $data): void
    {
        $__proc = $this->proc('glCompressedTexSubImage1D', 'void (*)(GLenum target, GLint level, GLint xoffset, GLsizei width, GLenum format, GLsizei imageSize, const void *data)');
        $__proc($target, $level, $xoffset, $width, $format, $imageSize, $data);
    }

    /**
     * Texturing allows elements of an image array to be read by shaders.
     *
     * {@see GL13::compressedTexSubImage2D} and {@see GL13::compressedTextureSubImage2D} redefine a contiguous
     * subregion of an existing two-dimensional texture image. The texels referenced by $data replace the portion of
     * the existing texture array with x indices $xoffset and    xoffset + width - 1  , and the y indices $yoffset
     * and    yoffset + height - 1  , inclusive. This region may not include any texels outside the range of the
     * texture array as it was originally specified. It is not an error to specify a subtexture with width of 0, but
     * such a specification has no effect.
     *
     * $internalformat must be a known compressed image format (such as {@see GL13::GL_RGTC}) or an
     * extension-specified compressed-texture format. The $format of the compressed texture image is selected by the
     * GL implementation that compressed it (see {@see GL13::texImage2D}) and should be queried at the time the
     * texture was compressed with {@see GL13::getTexLevelParameter}.
     *
     * If a non-zero named buffer object is bound to the {@see GL13::GL_PIXEL_UNPACK_BUFFER} target (see
     * {@see GL13::bindBuffer}) while a texture image is specified, $data is treated as a byte offset into the
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
     * @param CData|null $data
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
        ?CData $data
    ): void {
        $__proc = $this->proc('glCompressedTexSubImage2D', 'void (*)(GLenum target, GLint level, GLint xoffset, GLint yoffset, GLsizei width, GLsizei height, GLenum format, GLsizei imageSize, const void *data)');
        $__proc($target, $level, $xoffset, $yoffset, $width, $height, $format, $imageSize, $data);
    }

    /**
     * Texturing allows elements of an image array to be read by shaders.
     *
     * {@see GL13::compressedTexSubImage3D} and {@see GL13::compressedTextureSubImage3D} redefine a contiguous
     * subregion of an existing three-dimensional texture image. The texels referenced by $data replace the portion
     * of the existing texture array with x indices $xoffset and    xoffset + width - 1  , and the y indices $yoffset
     * and    yoffset + height - 1  , and the z indices $zoffset and    zoffset + depth - 1  , inclusive. This region
     * may not include any texels outside the range of the texture array as it was originally specified. It is not an
     * error to specify a subtexture with width of 0, but such a specification has no effect.
     *
     * $internalformat must be a known compressed image format (such as {@see GL13::GL_RGTC}) or an
     * extension-specified compressed-texture format. The $format of the compressed texture image is selected by the
     * GL implementation that compressed it (see {@see GL13::texImage3D}) and should be queried at the time the
     * texture was compressed with {@see GL13::getTexLevelParameter}.
     *
     * If a non-zero named buffer object is bound to the {@see GL13::GL_PIXEL_UNPACK_BUFFER} target (see
     * {@see GL13::bindBuffer}) while a texture image is specified, $data is treated as a byte offset into the
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
     * @param CData|null $data
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
        ?CData $data
    ): void {
        $__proc = $this->proc('glCompressedTexSubImage3D', 'void (*)(GLenum target, GLint level, GLint xoffset, GLint yoffset, GLint zoffset, GLsizei width, GLsizei height, GLsizei depth, GLenum format, GLsizei imageSize, const void *data)');
        $__proc($target, $level, $xoffset, $yoffset, $zoffset, $width, $height, $depth, $format, $imageSize, $data);
    }

    /**
     * {@see GL13::getCompressedTexImage} and {@see GL13::getnCompressedTexImage} return the compressed texture
     * image associated with $target and $lod into $pixels. {@see GL13::getCompressedTextureImage} serves the same
     * purpose, but instead of taking a texture target, it takes the ID of the texture object. $pixels should be an
     * array of $bufSize bytes for {@see GL13::getnCompresedTexImage} and {@see GL13::getCompressedTextureImage}
     * functions, and of {@see GL13::GL_TEXTURE_COMPRESSED_IMAGE_SIZE} bytes in case of
     * {@see GL13::getCompressedTexImage}. If the actual data takes less space than $bufSize, the remaining bytes
     * will not be touched. $target specifies the texture target, to which the texture the data the function should
     * extract the data from is bound to. $lod specifies the level-of-detail number of the desired image.
     *
     * If a non-zero named buffer object is bound to the {@see GL13::GL_PIXEL_PACK_BUFFER} target (see
     * {@see GL13::bindBuffer}) while a texture image is requested, $pixels is treated as a byte offset into the
     * buffer object's data store.
     *
     * To minimize errors, first verify that the texture is compressed by calling {@see GL13::getTexLevelParameter}
     * with argument {@see GL13::GL_TEXTURE_COMPRESSED}. If the texture is compressed, you can determine the amount
     * of memory required to store the compressed texture by calling {@see GL13::getTexLevelParameter} with
     * argument {@see GL13::GL_TEXTURE_COMPRESSED_IMAGE_SIZE}. Finally, retrieve the internal format of the texture
     * by calling {@see GL13::getTexLevelParameter} with argument {@see GL13::GL_TEXTURE_INTERNAL_FORMAT}. To store
     * the texture for later use, associate the internal format and size with the retrieved texture image. These data
     * can be used by the respective texture or subtexture loading routine used for loading $target textures.
     *
     * @see http://docs.gl/gl2/glGetCompressedTexImage
     * @see http://docs.gl/gl4/glGetCompressedTexImage
     * @since 1.3
     * @param int $target
     * @param int $level
     * @param CData|null $img
     * @return void
     */
    public function getCompressedTexImage(int $target, int $level, ?CData $img): void
    {
        $__proc = $this->proc('glGetCompressedTexImage', 'void (*)(GLenum target, GLint level, void *img)');
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
        $__proc = $this->proc('glSampleCoverage', 'void (*)(GLfloat value, GLboolean invert)');
        $__proc($value, $invert);
    }
}
