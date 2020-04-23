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
 * The OpenGL functionality up to version 3.0. Includes the deprecated symbols of the Compatibility Profile.
 *
 * OpenGL 3.0 implementations are guaranteed to support at least versions 1.10, 1.20 and 1.30 of the shading language,
 * although versions 1.10 and 1.20 are deprecated in a forward-compatible context.
 *
 * Extensions promoted to core in this release:
 *
 * - EXT_gpu_shader4 @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_gpu_shader4.txt
 * - NV_conditional_render @see https://www.khronos.org/registry/OpenGL/extensions/NV/NV_conditional_render.txt
 * - APPLE_flush_buffer_range @see https://www.khronos.org/registry/OpenGL/extensions/APPLE/APPLE_flush_buffer_range.txt
 * - ARB_color_buffer_float @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_color_buffer_float.txt
 * - NV_depth_buffer_float @see https://www.khronos.org/registry/OpenGL/extensions/NV/NV_depth_buffer_float.txt
 * - ARB_texture_float @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_texture_float.txt
 * - EXT_packed_float @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_packed_float.txt
 * - EXT_texture_shared_exponent @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_texture_shared_exponent.txt
 * - EXT_framebuffer_object @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_framebuffer_object.txt
 * - NV_half_float](https://www.khronos.org/registry/OpenGL/extensions/NV/NV_half_float.txt
 * - ARB_half_FLOAT_pixel @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_half_FLOAT_pixel.txt
 * - EXT_framebuffer_multisample](https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_framebuffer_multisample.txt
 * - EXT_framebuffer_blit @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_framebuffer_blit.txt
 * - EXT_texture_integer @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_texture_integer.txt
 * - EXT_texture_array @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_texture_array.txt
 * - EXT_packed_depth_stencil @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_packed_depth_stencil.txt
 * - EXT_draw_buffers2 @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_draw_buffers2.txt
 * - EXT_texture_compression_rgtc @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_texture_compression_rgtc.txt
 * - EXT_transform_feedback @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_transform_feedback.txt
 * - APPLE_vertex_array_object @see https://www.khronos.org/registry/OpenGL/extensions/APPLE/APPLE_vertex_array_object.txt
 * - EXT_framebuffer_sRGB @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_framebuffer_sRGB.txt
 */
class GL30 extends GL21
{
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COMPARE_REF_TO_TEXTURE = 0x884e;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_CLIP_DISTANCE0 = 0x3000;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_CLIP_DISTANCE1 = 0x3001;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_CLIP_DISTANCE2 = 0x3002;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_CLIP_DISTANCE3 = 0x3003;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_CLIP_DISTANCE4 = 0x3004;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_CLIP_DISTANCE5 = 0x3005;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_CLIP_DISTANCE6 = 0x3006;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_CLIP_DISTANCE7 = 0x3007;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_MAX_CLIP_DISTANCES = 0x0d32;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_MAJOR_VERSION = 0x821b;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_MINOR_VERSION = 0x821c;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_NUM_EXTENSIONS = 0x821d;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_CONTEXT_FLAGS = 0x821e;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COMPRESSED_RED = 0x8225;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COMPRESSED_RG = 0x8226;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_CONTEXT_FLAG_FORWARD_COMPATIBLE_BIT = 0x0001;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RGBA32F = 0x8814;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RGB32F = 0x8815;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RGBA16F = 0x881a;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RGB16F = 0x881b;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_VERTEX_ATTRIB_ARRAY_INTEGER = 0x88fd;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_MAX_ARRAY_TEXTURE_LAYERS = 0x88ff;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_MIN_PROGRAM_TEXEL_OFFSET = 0x8904;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_MAX_PROGRAM_TEXEL_OFFSET = 0x8905;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_CLAMP_READ_COLOR = 0x891c;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_FIXED_ONLY = 0x891d;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_MAX_VARYING_COMPONENTS = 0x8b4b;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_TEXTURE_1D_ARRAY = 0x8c18;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_PROXY_TEXTURE_1D_ARRAY = 0x8c19;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_TEXTURE_2D_ARRAY = 0x8c1a;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_PROXY_TEXTURE_2D_ARRAY = 0x8c1b;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_TEXTURE_BINDING_1D_ARRAY = 0x8c1c;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_TEXTURE_BINDING_2D_ARRAY = 0x8c1d;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_R11F_G11F_B10F = 0x8c3a;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_UNSIGNED_INT_10F_11F_11F_REV = 0x8c3b;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RGB9_E5 = 0x8c3d;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_UNSIGNED_INT_5_9_9_9_REV = 0x8c3e;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_TEXTURE_SHARED_SIZE = 0x8c3f;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_TRANSFORM_FEEDBACK_VARYING_MAX_LENGTH = 0x8c76;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_TRANSFORM_FEEDBACK_BUFFER_MODE = 0x8c7f;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_MAX_TRANSFORM_FEEDBACK_SEPARATE_COMPONENTS = 0x8c80;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_TRANSFORM_FEEDBACK_VARYINGS = 0x8c83;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_TRANSFORM_FEEDBACK_BUFFER_START = 0x8c84;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_TRANSFORM_FEEDBACK_BUFFER_SIZE = 0x8c85;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_PRIMITIVES_GENERATED = 0x8c87;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_TRANSFORM_FEEDBACK_PRIMITIVES_WRITTEN = 0x8c88;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RASTERIZER_DISCARD = 0x8c89;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_MAX_TRANSFORM_FEEDBACK_INTERLEAVED_COMPONENTS = 0x8c8a;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_MAX_TRANSFORM_FEEDBACK_SEPARATE_ATTRIBS = 0x8c8b;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_INTERLEAVED_ATTRIBS = 0x8c8c;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_SEPARATE_ATTRIBS = 0x8c8d;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_TRANSFORM_FEEDBACK_BUFFER = 0x8c8e;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_TRANSFORM_FEEDBACK_BUFFER_BINDING = 0x8c8f;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RGBA32UI = 0x8d70;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RGB32UI = 0x8d71;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RGBA16UI = 0x8d76;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RGB16UI = 0x8d77;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RGBA8UI = 0x8d7c;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RGB8UI = 0x8d7d;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RGBA32I = 0x8d82;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RGB32I = 0x8d83;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RGBA16I = 0x8d88;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RGB16I = 0x8d89;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RGBA8I = 0x8d8e;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RGB8I = 0x8d8f;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RED_INTEGER = 0x8d94;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_GREEN_INTEGER = 0x8d95;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_BLUE_INTEGER = 0x8d96;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RGB_INTEGER = 0x8d98;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RGBA_INTEGER = 0x8d99;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_BGR_INTEGER = 0x8d9a;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_BGRA_INTEGER = 0x8d9b;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_SAMPLER_1D_ARRAY = 0x8dc0;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_SAMPLER_2D_ARRAY = 0x8dc1;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_SAMPLER_1D_ARRAY_SHADOW = 0x8dc3;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_SAMPLER_2D_ARRAY_SHADOW = 0x8dc4;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_SAMPLER_CUBE_SHADOW = 0x8dc5;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_UNSIGNED_INT_VEC2 = 0x8dc6;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_UNSIGNED_INT_VEC3 = 0x8dc7;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_UNSIGNED_INT_VEC4 = 0x8dc8;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_INT_SAMPLER_1D = 0x8dc9;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_INT_SAMPLER_2D = 0x8dca;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_INT_SAMPLER_3D = 0x8dcb;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_INT_SAMPLER_CUBE = 0x8dcc;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_INT_SAMPLER_1D_ARRAY = 0x8dce;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_INT_SAMPLER_2D_ARRAY = 0x8dcf;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_UNSIGNED_INT_SAMPLER_1D = 0x8dd1;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_UNSIGNED_INT_SAMPLER_2D = 0x8dd2;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_UNSIGNED_INT_SAMPLER_3D = 0x8dd3;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_UNSIGNED_INT_SAMPLER_CUBE = 0x8dd4;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_UNSIGNED_INT_SAMPLER_1D_ARRAY = 0x8dd6;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_UNSIGNED_INT_SAMPLER_2D_ARRAY = 0x8dd7;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_QUERY_WAIT = 0x8e13;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_QUERY_NO_WAIT = 0x8e14;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_QUERY_BY_REGION_WAIT = 0x8e15;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_QUERY_BY_REGION_NO_WAIT = 0x8e16;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_BUFFER_ACCESS_FLAGS = 0x911f;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_BUFFER_MAP_LENGTH = 0x9120;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_BUFFER_MAP_OFFSET = 0x9121;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_DEPTH_COMPONENT32F = 0x8cac;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_DEPTH32F_STENCIL8 = 0x8cad;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_FLOAT_32_UNSIGNED_INT_24_8_REV = 0x8dad;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_INVALID_FRAMEBUFFER_OPERATION = 0x0506;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_FRAMEBUFFER_ATTACHMENT_COLOR_ENCODING = 0x8210;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_FRAMEBUFFER_ATTACHMENT_COMPONENT_TYPE = 0x8211;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_FRAMEBUFFER_ATTACHMENT_RED_SIZE = 0x8212;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_FRAMEBUFFER_ATTACHMENT_GREEN_SIZE = 0x8213;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_FRAMEBUFFER_ATTACHMENT_BLUE_SIZE = 0x8214;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_FRAMEBUFFER_ATTACHMENT_ALPHA_SIZE = 0x8215;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_FRAMEBUFFER_ATTACHMENT_DEPTH_SIZE = 0x8216;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_FRAMEBUFFER_ATTACHMENT_STENCIL_SIZE = 0x8217;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_FRAMEBUFFER_DEFAULT = 0x8218;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_FRAMEBUFFER_UNDEFINED = 0x8219;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_DEPTH_STENCIL_ATTACHMENT = 0x821a;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_MAX_RENDERBUFFER_SIZE = 0x84e8;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_DEPTH_STENCIL = 0x84f9;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_UNSIGNED_INT_24_8 = 0x84fa;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_DEPTH24_STENCIL8 = 0x88f0;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_TEXTURE_STENCIL_SIZE = 0x88f1;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_TEXTURE_RED_TYPE = 0x8c10;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_TEXTURE_GREEN_TYPE = 0x8c11;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_TEXTURE_BLUE_TYPE = 0x8c12;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_TEXTURE_ALPHA_TYPE = 0x8c13;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_TEXTURE_DEPTH_TYPE = 0x8c16;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_UNSIGNED_NORMALIZED = 0x8c17;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_FRAMEBUFFER_BINDING = 0x8ca6;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_DRAW_FRAMEBUFFER_BINDING = 0x8ca6;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RENDERBUFFER_BINDING = 0x8ca7;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_READ_FRAMEBUFFER = 0x8ca8;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_DRAW_FRAMEBUFFER = 0x8ca9;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_READ_FRAMEBUFFER_BINDING = 0x8caa;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RENDERBUFFER_SAMPLES = 0x8cab;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_FRAMEBUFFER_ATTACHMENT_OBJECT_TYPE = 0x8cd0;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_FRAMEBUFFER_ATTACHMENT_OBJECT_NAME = 0x8cd1;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_FRAMEBUFFER_ATTACHMENT_TEXTURE_LEVEL = 0x8cd2;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_FRAMEBUFFER_ATTACHMENT_TEXTURE_CUBE_MAP_FACE = 0x8cd3;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_FRAMEBUFFER_ATTACHMENT_TEXTURE_LAYER = 0x8cd4;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_FRAMEBUFFER_COMPLETE = 0x8cd5;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_FRAMEBUFFER_INCOMPLETE_ATTACHMENT = 0x8cd6;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_FRAMEBUFFER_INCOMPLETE_MISSING_ATTACHMENT = 0x8cd7;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_FRAMEBUFFER_INCOMPLETE_DRAW_BUFFER = 0x8cdb;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_FRAMEBUFFER_INCOMPLETE_READ_BUFFER = 0x8cdc;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_FRAMEBUFFER_UNSUPPORTED = 0x8cdd;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_MAX_COLOR_ATTACHMENTS = 0x8cdf;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COLOR_ATTACHMENT0 = 0x8ce0;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COLOR_ATTACHMENT1 = 0x8ce1;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COLOR_ATTACHMENT2 = 0x8ce2;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COLOR_ATTACHMENT3 = 0x8ce3;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COLOR_ATTACHMENT4 = 0x8ce4;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COLOR_ATTACHMENT5 = 0x8ce5;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COLOR_ATTACHMENT6 = 0x8ce6;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COLOR_ATTACHMENT7 = 0x8ce7;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COLOR_ATTACHMENT8 = 0x8ce8;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COLOR_ATTACHMENT9 = 0x8ce9;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COLOR_ATTACHMENT10 = 0x8cea;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COLOR_ATTACHMENT11 = 0x8ceb;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COLOR_ATTACHMENT12 = 0x8cec;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COLOR_ATTACHMENT13 = 0x8ced;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COLOR_ATTACHMENT14 = 0x8cee;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COLOR_ATTACHMENT15 = 0x8cef;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COLOR_ATTACHMENT16 = 0x8cf0;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COLOR_ATTACHMENT17 = 0x8cf1;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COLOR_ATTACHMENT18 = 0x8cf2;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COLOR_ATTACHMENT19 = 0x8cf3;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COLOR_ATTACHMENT20 = 0x8cf4;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COLOR_ATTACHMENT21 = 0x8cf5;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COLOR_ATTACHMENT22 = 0x8cf6;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COLOR_ATTACHMENT23 = 0x8cf7;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COLOR_ATTACHMENT24 = 0x8cf8;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COLOR_ATTACHMENT25 = 0x8cf9;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COLOR_ATTACHMENT26 = 0x8cfa;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COLOR_ATTACHMENT27 = 0x8cfb;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COLOR_ATTACHMENT28 = 0x8cfc;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COLOR_ATTACHMENT29 = 0x8cfd;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COLOR_ATTACHMENT30 = 0x8cfe;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COLOR_ATTACHMENT31 = 0x8cff;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_DEPTH_ATTACHMENT = 0x8d00;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_STENCIL_ATTACHMENT = 0x8d20;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_FRAMEBUFFER = 0x8d40;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RENDERBUFFER = 0x8d41;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RENDERBUFFER_WIDTH = 0x8d42;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RENDERBUFFER_HEIGHT = 0x8d43;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RENDERBUFFER_INTERNAL_FORMAT = 0x8d44;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_STENCIL_INDEX1 = 0x8d46;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_STENCIL_INDEX4 = 0x8d47;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_STENCIL_INDEX8 = 0x8d48;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_STENCIL_INDEX16 = 0x8d49;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RENDERBUFFER_RED_SIZE = 0x8d50;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RENDERBUFFER_GREEN_SIZE = 0x8d51;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RENDERBUFFER_BLUE_SIZE = 0x8d52;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RENDERBUFFER_ALPHA_SIZE = 0x8d53;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RENDERBUFFER_DEPTH_SIZE = 0x8d54;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RENDERBUFFER_STENCIL_SIZE = 0x8d55;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_FRAMEBUFFER_INCOMPLETE_MULTISAMPLE = 0x8d56;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_MAX_SAMPLES = 0x8d57;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_FRAMEBUFFER_SRGB = 0x8db9;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_HALF_FLOAT = 0x140b;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_MAP_READ_BIT = 0x0001;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_MAP_WRITE_BIT = 0x0002;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_MAP_INVALIDATE_RANGE_BIT = 0x0004;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_MAP_INVALIDATE_BUFFER_BIT = 0x0008;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_MAP_FLUSH_EXPLICIT_BIT = 0x0010;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_MAP_UNSYNCHRONIZED_BIT = 0x0020;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COMPRESSED_RED_RGTC1 = 0x8dbb;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COMPRESSED_SIGNED_RED_RGTC1 = 0x8dbc;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COMPRESSED_RG_RGTC2 = 0x8dbd;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_COMPRESSED_SIGNED_RG_RGTC2 = 0x8dbe;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RG = 0x8227;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RG_INTEGER = 0x8228;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_R8 = 0x8229;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_R16 = 0x822a;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RG8 = 0x822b;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RG16 = 0x822c;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_R16F = 0x822d;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_R32F = 0x822e;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RG16F = 0x822f;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RG32F = 0x8230;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_R8I = 0x8231;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_R8UI = 0x8232;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_R16I = 0x8233;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_R16UI = 0x8234;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_R32I = 0x8235;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_R32UI = 0x8236;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RG8I = 0x8237;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RG8UI = 0x8238;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RG16I = 0x8239;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RG16UI = 0x823a;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RG32I = 0x823b;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_RG32UI = 0x823c;
    /**
     * @var int
     * @since 3.0
     */
    public const GL_VERTEX_ARRAY_BINDING = 0x85b5;

    /**
     * {@see GL46::glColorMask} and {@see GL46::glColorMaski} specify whether the individual color components in the
     * frame buffer can or cannot be written. {@see GL46::glColorMaski} sets the mask for a specific draw buffer,
     * whereas {@see GL46::glColorMask} sets the mask for all draw buffers. If $red is {@see GL46::GL_FALSE}, for
     * example, no change is made to the red component of any pixel in any of the color buffers, regardless of the
     * drawing operation attempted.
     *
     * Changes to individual bits of components cannot be controlled. Rather, changes are either enabled or disabled
     * for entire color components.
     *
     * @see http://docs.gl/gl2/glColorMask
     * @see http://docs.gl/gl4/glColorMask
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param int|\FFI\CData|\FFI\CInt $r
     * @param int|\FFI\CData|\FFI\CInt $g
     * @param int|\FFI\CData|\FFI\CInt $b
     * @param int|\FFI\CData|\FFI\CInt $a
     * @return void
     */
    public function colorMaski($index, $r, $g, $b, $a): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $r = $r instanceof \FFI\CData ? $r->cdata : $r;
        $g = $g instanceof \FFI\CData ? $g->cdata : $g;
        $b = $b instanceof \FFI\CData ? $b->cdata : $b;
        $a = $a instanceof \FFI\CData ? $a->cdata : $a;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint8($r), 'Argument $r must be a C-like GLboolean, but incompatible or overflow value given');
        assert(Type::isUint8($g), 'Argument $g must be a C-like GLboolean, but incompatible or overflow value given');
        assert(Type::isUint8($b), 'Argument $b must be a C-like GLboolean, but incompatible or overflow value given');
        assert(Type::isUint8($a), 'Argument $a must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glColorMaski', 'void (*)(GLuint index, GLboolean r, GLboolean g, GLboolean b, GLboolean a)');
        $proc($index, $r, $g, $b, $a);
    }

    /**
     * {@see GL46::glGetQueryiv} returns in $params a selected parameter of the query object target specified by
     * $target.
     *
     * $pname names a specific query object target parameter. When $pname is {@see GL46::GL_CURRENT_QUERY}, the name
     * of the currently active query for $target, or zero if no query is active, will be placed in $params. If $pname
     * is {@see GL46::GL_QUERY_COUNTER_BITS}, the implementation-dependent number of bits used to hold the result of
     * queries for $target is returned in $params.
     *
     * @see http://docs.gl/gl2/glGetQueryiv
     * @see http://docs.gl/gl4/glGetQueryiv
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CIntPtr|null $data
     * @return void
     */
    public function getBooleani_v($target, $index, ?\FFI\CData $data): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetBooleani_v', 'void (*)(GLenum target, GLuint index, GLboolean *data)');
        $proc($target, $index, $data);
    }

    /**
     * {@see GL46::glGetMaterial} returns in $params the value or values of parameter $pname of material $face. Six
     * parameters are defined:
     *
     *  - {@see GL46::GL_AMBIENT}: $params returns four integer or
     *    floating-point values representing the ambient reflectance of the
     *    material.
     *    Integer values, when requested, are linearly mapped from the internal
     *    floating-point representation such that
     *    1.0 maps to the most positive representable integer value, and   -1.0
     *    maps to the most negative representable
     *    integer value. If the internal value is outside the range    -1 1  ,
     *    the corresponding integer return value is
     *    undefined. The initial value is (0.2, 0.2, 0.2, 1.0)
     *
     *  - {@see GL46::GL_DIFFUSE}: $params returns four integer or
     *    floating-point values representing the diffuse reflectance of the
     *    material.
     *    Integer values, when requested, are linearly mapped from the internal
     *    floating-point representation such that
     *    1.0 maps to the most positive representable integer value, and   -1.0
     *    maps to the most negative representable
     *    integer value. If the internal value is outside the range    -1 1  ,
     *    the corresponding integer return value is
     *    undefined. The initial value is (0.8, 0.8, 0.8, 1.0).
     *
     *  - {@see GL46::GL_SPECULAR}: $params returns four integer or
     *    floating-point values representing the specular reflectance of the
     *    material.
     *    Integer values, when requested, are linearly mapped from the internal
     *    floating-point representation such that
     *    1.0 maps to the most positive representable integer value, and   -1.0
     *    maps to the most negative representable
     *    integer value. If the internal value is outside the range    -1 1  ,
     *    the corresponding integer return value is
     *    undefined. The initial value is (0, 0, 0, 1).
     *
     *  - {@see GL46::GL_EMISSION}: $params returns four integer or
     *    floating-point values representing the emitted light intensity of the
     *    material. Integer values, when requested, are linearly mapped from the
     *    internal floating-point representation
     *    such that 1.0 maps to the most positive representable integer value,
     *    and   -1.0  maps to the most negative
     *    representable integer value. If the internal value is outside the
     *    range    -1 1  , the corresponding integer
     *    return value is undefined. The initial value is (0, 0, 0, 1).
     *
     *  - {@see GL46::GL_SHININESS}: $params returns one integer or
     *    floating-point value representing the specular exponent of the
     *    material.
     *    Integer values, when requested, are computed by rounding the internal
     *    floating-point value to the nearest
     *    integer value. The initial value is 0.
     *
     *  - {@see GL46::GL_COLOR_INDEXES}: $params returns three integer or
     *    floating-point values representing the ambient, diffuse, and specular
     *    indices of the material. These indices are used only for color index
     *    lighting. (All the other parameters are
     *    used only for RGBA lighting.) Integer values, when requested, are
     *    computed by rounding the internal
     *    floating-point values to the nearest integer values.
     *
     * @see http://docs.gl/gl2/glGetMaterial
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CIntPtr|null $data
     * @return void
     */
    public function getIntegeri_v($target, $index, ?\FFI\CData $data): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetIntegeri_v', 'void (*)(GLenum target, GLuint index, GLint *data)');
        $proc($target, $index, $data);
    }

    /**
     * {@see GL46::glEnable} and {@see GL46::glDisable} enable and disable various capabilities. Use
     * {@see GL46::glIsEnabled} or {@see GL46::glGet} to determine the current setting of any capability. The initial
     * value for each capability with the exception of {@see GL46::GL_DITHER} and {@see GL46::GL_MULTISAMPLE} is
     * {@see GL46::GL_FALSE}. The initial value for {@see GL46::GL_DITHER} and {@see GL46::GL_MULTISAMPLE} is
     * {@see GL46::GL_TRUE}.
     *
     * Both {@see GL46::glEnable} and {@see GL46::glDisable} take a single argument, $cap, which can assume one of
     * the following values:
     *
     * Some of the GL's capabilities are indexed. {@see GL46::glEnablei} and {@see GL46::glDisablei} enable and
     * disable indexed capabilities.
     *
     *  - {@see GL46::GL_BLEND}: If enabled, blend the computed fragment color
     *    values with the values in the color buffers. See
     *    {@see GL46::glBlendFunc}.
     *
     *  - {@see GL46::GL_CLIP_DISTANCEi}: If enabled, clip geometry against
     *    user-defined half space i.
     *
     *  - {@see GL46::GL_COLOR_LOGIC_OP}: If enabled, apply the currently
     *    selected logical operation to the computed fragment color and color
     *    buffer
     *    values. See {@see GL46::glLogicOp}.
     *
     *  - {@see GL46::GL_CULL_FACE}: If enabled, cull polygons based on their
     *    winding in window coordinates. See {@see GL46::glCullFace}.
     *
     *  - {@see GL46::GL_DEBUG_OUTPUT}: If enabled, debug messages are produced
     *    by a debug context. When disabled, the debug message log is
     *    silenced. Note that in a non-debug context, very few, if any messages
     *    might be produced, even when
     *    {@see GL46::GL_DEBUG_OUTPUT} is enabled.
     *
     *  - {@see GL46::GL_DEBUG_OUTPUT_SYNCHRONOUS}: If enabled, debug messages
     *    are produced synchronously by a debug context. If disabled, debug
     *    messages may
     *    be produced asynchronously. In particular, they may be delayed
     *    relative to the execution of GL commands, and
     *    the debug callback function may be called from a thread other than
     *    that in which the commands are executed.
     *    See {@see GL46::glDebugMessageCallback}.
     *
     *  - {@see GL46::GL_DEPTH_CLAMP}: If enabled, the   -wc≤zc≤wc  plane
     *    equation is ignored by view volume clipping (effectively, there is
     *    no near or far plane clipping). See {@see GL46::glDepthRange}.
     *
     *  - {@see GL46::GL_DEPTH_TEST}: If enabled, do depth comparisons and
     *    update the depth buffer. Note that even if the depth buffer exists and
     *    the depth mask is non-zero, the depth buffer is not updated if the
     *    depth test is disabled. See
     *    {@see GL46::glDepthFunc} and {@see GL46::glDepthRange}.
     *
     *  - {@see GL46::GL_DITHER}: If enabled, dither color components or indices
     *    before they are written to the color buffer.
     *
     *  - {@see GL46::GL_FRAMEBUFFER_SRGB}: If enabled and the value of {@see
     *    GL46::GL_FRAMEBUFFER_ATTACHMENT_COLOR_ENCODING} for the framebuffer
     *    attachment corresponding to the destination buffer is {@see
     *    GL46::GL_SRGB}, the R, G, and B destination color
     *    values (after conversion from fixed-point to floating-point) are
     *    considered to be encoded for the sRGB color
     *    space and hence are linearized prior to their use in blending.
     *
     *  - {@see GL46::GL_LINE_SMOOTH}: If enabled, draw lines with correct
     *    filtering. Otherwise, draw aliased lines. See {@see
     *    GL46::glLineWidth}.
     *
     *  - {@see GL46::GL_MULTISAMPLE}: If enabled, use multiple fragment samples
     *    in computing the final color of a pixel. See
     *    {@see GL46::glSampleCoverage}.
     *
     *  - {@see GL46::GL_POLYGON_OFFSET_FILL}: If enabled, and if the polygon is
     *    rendered in {@see GL46::GL_FILL} mode, an offset is added to depth
     *    values
     *    of a polygon's fragments before the depth comparison is performed. See
     *    {@see GL46::glPolygonOffset}.
     *
     *  - {@see GL46::GL_POLYGON_OFFSET_LINE}: If enabled, and if the polygon is
     *    rendered in {@see GL46::GL_LINE} mode, an offset is added to depth
     *    values
     *    of a polygon's fragments before the depth comparison is performed. See
     *    {@see GL46::glPolygonOffset}.
     *
     *  - {@see GL46::GL_POLYGON_OFFSET_POINT}: If enabled, an offset is added
     *    to depth values of a polygon's fragments before the depth comparison
     *    is
     *    performed, if the polygon is rendered in {@see GL46::GL_POINT} mode.
     *    See {@see GL46::glPolygonOffset}.
     *
     *  - {@see GL46::GL_POLYGON_SMOOTH}: If enabled, draw polygons with proper
     *    filtering. Otherwise, draw aliased polygons. For correct antialiased
     *    polygons, an alpha buffer is needed and the polygons must be sorted
     *    front to back.
     *
     *  - {@see GL46::GL_PRIMITIVE_RESTART}: Enables primitive restarting. If
     *    enabled, any one of the draw commands which transfers a set of generic
     *    attribute array elements to the GL will restart the primitive when the
     *    index of the vertex is equal to the
     *    primitive restart index. See {@see GL46::glPrimitiveRestartIndex}.
     *
     *  - {@see GL46::GL_PRIMITIVE_RESTART_FIXED_INDEX}: Enables primitive
     *    restarting with a fixed index. If enabled, any one of the draw
     *    commands which transfers a
     *    set of generic attribute array elements to the GL will restart the
     *    primitive when the index of the vertex is
     *    equal to the fixed primitive index for the specified index type. The
     *    fixed index is equal to 2n−1 where n is
     *    equal to 8 for {@see GL46::GL_UNSIGNED_BYTE}, 16 for {@see
     *    GL46::GL_UNSIGNED_SHORT} and 32 for
     *    {@see GL46::GL_UNSIGNED_INT}.
     *
     *  - {@see GL46::GL_RASTERIZER_DISCARD}: If enabled, primitives are
     *    discarded after the optional transform feedback stage, but before
     *    rasterization.
     *    Furthermore, when enabled, {@see GL46::glClear}, {@see
     *    GL46::glClearBufferData},
     *    {@see GL46::glClearBufferSubData}, {@see GL46::glClearTexImage}, and
     *    {@see GL46::glClearTexSubImage} are
     *    ignored.
     *
     *  - {@see GL46::GL_SAMPLE_ALPHA_TO_COVERAGE}: If enabled, compute a
     *    temporary coverage value where each bit is determined by the alpha
     *    value at the
     *    corresponding sample location. The temporary coverage value is then
     *    ANDed with the fragment coverage value.
     *
     *  - {@see GL46::GL_SAMPLE_ALPHA_TO_ONE}: If enabled, each sample alpha
     *    value is replaced by the maximum representable alpha value.
     *
     *  - {@see GL46::GL_SAMPLE_COVERAGE}: If enabled, the fragment's coverage
     *    is ANDed with the temporary coverage value. If
     *    {@see GL46::GL_SAMPLE_COVERAGE_INVERT} is set to {@see GL46::GL_TRUE},
     *    invert the coverage value. See
     *    {@see GL46::glSampleCoverage}.
     *
     *  - {@see GL46::GL_SAMPLE_SHADING}: If enabled, the active fragment shader
     *    is run once for each covered sample, or at fraction of this rate as
     *    determined by the current value of {@see
     *    GL46::GL_MIN_SAMPLE_SHADING_VALUE}. See
     *    {@see GL46::glMinSampleShading}.
     *
     *  - {@see GL46::GL_SAMPLE_MASK}: If enabled, the sample coverage mask
     *    generated for a fragment during rasterization will be ANDed with the
     *    value of {@see GL46::GL_SAMPLE_MASK_VALUE} before shading occurs. See
     *    {@see GL46::glSampleMaski}.
     *
     *  - {@see GL46::GL_SCISSOR_TEST}: If enabled, discard fragments that are
     *    outside the scissor rectangle. See {@see GL46::glScissor}.
     *
     *  - {@see GL46::GL_STENCIL_TEST}: If enabled, do stencil testing and
     *    update the stencil buffer. See {@see GL46::glStencilFunc} and
     *    {@see GL46::glStencilOp}.
     *
     *  - {@see GL46::GL_TEXTURE_CUBE_MAP_SEAMLESS}: If enabled, cubemap
     *    textures are sampled such that when linearly sampling from the border
     *    between two
     *    adjacent faces, texels from both faces are used to generate the final
     *    sample value. When disabled, texels from
     *    only a single face are used to construct the final sample value.
     *
     *  - {@see GL46::GL_PROGRAM_POINT_SIZE}: If enabled and a vertex or
     *    geometry shader is active, then the derived point size is taken from
     *    the
     *    (potentially clipped) shader builtin {@see GL46::gl_PointSize} and
     *    clamped to the implementation-dependent
     *    point size range.
     *
     * @see http://docs.gl/gl2/glEnable
     * @see http://docs.gl/gl4/glEnable
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $index
     * @return void
     */
    public function enablei($target, $index): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glEnablei', 'void (*)(GLenum target, GLuint index)');
        $proc($target, $index);
    }

    /**
     * {@see GL46::glEnable} and {@see GL46::glDisable} enable and disable various capabilities. Use
     * {@see GL46::glIsEnabled} or {@see GL46::glGet} to determine the current setting of any capability. The initial
     * value for each capability with the exception of {@see GL46::GL_DITHER} and {@see GL46::GL_MULTISAMPLE} is
     * {@see GL46::GL_FALSE}. The initial value for {@see GL46::GL_DITHER} and {@see GL46::GL_MULTISAMPLE} is
     * {@see GL46::GL_TRUE}.
     *
     * Both {@see GL46::glEnable} and {@see GL46::glDisable} take a single argument, $cap, which can assume one of
     * the following values:
     *
     * Some of the GL's capabilities are indexed. {@see GL46::glEnablei} and {@see GL46::glDisablei} enable and
     * disable indexed capabilities.
     *
     *  - {@see GL46::GL_BLEND}: If enabled, blend the computed fragment color
     *    values with the values in the color buffers. See
     *    {@see GL46::glBlendFunc}.
     *
     *  - {@see GL46::GL_CLIP_DISTANCEi}: If enabled, clip geometry against
     *    user-defined half space i.
     *
     *  - {@see GL46::GL_COLOR_LOGIC_OP}: If enabled, apply the currently
     *    selected logical operation to the computed fragment color and color
     *    buffer
     *    values. See {@see GL46::glLogicOp}.
     *
     *  - {@see GL46::GL_CULL_FACE}: If enabled, cull polygons based on their
     *    winding in window coordinates. See {@see GL46::glCullFace}.
     *
     *  - {@see GL46::GL_DEBUG_OUTPUT}: If enabled, debug messages are produced
     *    by a debug context. When disabled, the debug message log is
     *    silenced. Note that in a non-debug context, very few, if any messages
     *    might be produced, even when
     *    {@see GL46::GL_DEBUG_OUTPUT} is enabled.
     *
     *  - {@see GL46::GL_DEBUG_OUTPUT_SYNCHRONOUS}: If enabled, debug messages
     *    are produced synchronously by a debug context. If disabled, debug
     *    messages may
     *    be produced asynchronously. In particular, they may be delayed
     *    relative to the execution of GL commands, and
     *    the debug callback function may be called from a thread other than
     *    that in which the commands are executed.
     *    See {@see GL46::glDebugMessageCallback}.
     *
     *  - {@see GL46::GL_DEPTH_CLAMP}: If enabled, the   -wc≤zc≤wc  plane
     *    equation is ignored by view volume clipping (effectively, there is
     *    no near or far plane clipping). See {@see GL46::glDepthRange}.
     *
     *  - {@see GL46::GL_DEPTH_TEST}: If enabled, do depth comparisons and
     *    update the depth buffer. Note that even if the depth buffer exists and
     *    the depth mask is non-zero, the depth buffer is not updated if the
     *    depth test is disabled. See
     *    {@see GL46::glDepthFunc} and {@see GL46::glDepthRange}.
     *
     *  - {@see GL46::GL_DITHER}: If enabled, dither color components or indices
     *    before they are written to the color buffer.
     *
     *  - {@see GL46::GL_FRAMEBUFFER_SRGB}: If enabled and the value of {@see
     *    GL46::GL_FRAMEBUFFER_ATTACHMENT_COLOR_ENCODING} for the framebuffer
     *    attachment corresponding to the destination buffer is {@see
     *    GL46::GL_SRGB}, the R, G, and B destination color
     *    values (after conversion from fixed-point to floating-point) are
     *    considered to be encoded for the sRGB color
     *    space and hence are linearized prior to their use in blending.
     *
     *  - {@see GL46::GL_LINE_SMOOTH}: If enabled, draw lines with correct
     *    filtering. Otherwise, draw aliased lines. See {@see
     *    GL46::glLineWidth}.
     *
     *  - {@see GL46::GL_MULTISAMPLE}: If enabled, use multiple fragment samples
     *    in computing the final color of a pixel. See
     *    {@see GL46::glSampleCoverage}.
     *
     *  - {@see GL46::GL_POLYGON_OFFSET_FILL}: If enabled, and if the polygon is
     *    rendered in {@see GL46::GL_FILL} mode, an offset is added to depth
     *    values
     *    of a polygon's fragments before the depth comparison is performed. See
     *    {@see GL46::glPolygonOffset}.
     *
     *  - {@see GL46::GL_POLYGON_OFFSET_LINE}: If enabled, and if the polygon is
     *    rendered in {@see GL46::GL_LINE} mode, an offset is added to depth
     *    values
     *    of a polygon's fragments before the depth comparison is performed. See
     *    {@see GL46::glPolygonOffset}.
     *
     *  - {@see GL46::GL_POLYGON_OFFSET_POINT}: If enabled, an offset is added
     *    to depth values of a polygon's fragments before the depth comparison
     *    is
     *    performed, if the polygon is rendered in {@see GL46::GL_POINT} mode.
     *    See {@see GL46::glPolygonOffset}.
     *
     *  - {@see GL46::GL_POLYGON_SMOOTH}: If enabled, draw polygons with proper
     *    filtering. Otherwise, draw aliased polygons. For correct antialiased
     *    polygons, an alpha buffer is needed and the polygons must be sorted
     *    front to back.
     *
     *  - {@see GL46::GL_PRIMITIVE_RESTART}: Enables primitive restarting. If
     *    enabled, any one of the draw commands which transfers a set of generic
     *    attribute array elements to the GL will restart the primitive when the
     *    index of the vertex is equal to the
     *    primitive restart index. See {@see GL46::glPrimitiveRestartIndex}.
     *
     *  - {@see GL46::GL_PRIMITIVE_RESTART_FIXED_INDEX}: Enables primitive
     *    restarting with a fixed index. If enabled, any one of the draw
     *    commands which transfers a
     *    set of generic attribute array elements to the GL will restart the
     *    primitive when the index of the vertex is
     *    equal to the fixed primitive index for the specified index type. The
     *    fixed index is equal to 2n−1 where n is
     *    equal to 8 for {@see GL46::GL_UNSIGNED_BYTE}, 16 for {@see
     *    GL46::GL_UNSIGNED_SHORT} and 32 for
     *    {@see GL46::GL_UNSIGNED_INT}.
     *
     *  - {@see GL46::GL_RASTERIZER_DISCARD}: If enabled, primitives are
     *    discarded after the optional transform feedback stage, but before
     *    rasterization.
     *    Furthermore, when enabled, {@see GL46::glClear}, {@see
     *    GL46::glClearBufferData},
     *    {@see GL46::glClearBufferSubData}, {@see GL46::glClearTexImage}, and
     *    {@see GL46::glClearTexSubImage} are
     *    ignored.
     *
     *  - {@see GL46::GL_SAMPLE_ALPHA_TO_COVERAGE}: If enabled, compute a
     *    temporary coverage value where each bit is determined by the alpha
     *    value at the
     *    corresponding sample location. The temporary coverage value is then
     *    ANDed with the fragment coverage value.
     *
     *  - {@see GL46::GL_SAMPLE_ALPHA_TO_ONE}: If enabled, each sample alpha
     *    value is replaced by the maximum representable alpha value.
     *
     *  - {@see GL46::GL_SAMPLE_COVERAGE}: If enabled, the fragment's coverage
     *    is ANDed with the temporary coverage value. If
     *    {@see GL46::GL_SAMPLE_COVERAGE_INVERT} is set to {@see GL46::GL_TRUE},
     *    invert the coverage value. See
     *    {@see GL46::glSampleCoverage}.
     *
     *  - {@see GL46::GL_SAMPLE_SHADING}: If enabled, the active fragment shader
     *    is run once for each covered sample, or at fraction of this rate as
     *    determined by the current value of {@see
     *    GL46::GL_MIN_SAMPLE_SHADING_VALUE}. See
     *    {@see GL46::glMinSampleShading}.
     *
     *  - {@see GL46::GL_SAMPLE_MASK}: If enabled, the sample coverage mask
     *    generated for a fragment during rasterization will be ANDed with the
     *    value of {@see GL46::GL_SAMPLE_MASK_VALUE} before shading occurs. See
     *    {@see GL46::glSampleMaski}.
     *
     *  - {@see GL46::GL_SCISSOR_TEST}: If enabled, discard fragments that are
     *    outside the scissor rectangle. See {@see GL46::glScissor}.
     *
     *  - {@see GL46::GL_STENCIL_TEST}: If enabled, do stencil testing and
     *    update the stencil buffer. See {@see GL46::glStencilFunc} and
     *    {@see GL46::glStencilOp}.
     *
     *  - {@see GL46::GL_TEXTURE_CUBE_MAP_SEAMLESS}: If enabled, cubemap
     *    textures are sampled such that when linearly sampling from the border
     *    between two
     *    adjacent faces, texels from both faces are used to generate the final
     *    sample value. When disabled, texels from
     *    only a single face are used to construct the final sample value.
     *
     *  - {@see GL46::GL_PROGRAM_POINT_SIZE}: If enabled and a vertex or
     *    geometry shader is active, then the derived point size is taken from
     *    the
     *    (potentially clipped) shader builtin {@see GL46::gl_PointSize} and
     *    clamped to the implementation-dependent
     *    point size range.
     *
     * @see http://docs.gl/gl2/glEnable
     * @see http://docs.gl/gl4/glEnable
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $index
     * @return void
     */
    public function disablei($target, $index): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glDisablei', 'void (*)(GLenum target, GLuint index)');
        $proc($target, $index);
    }

    /**
     * {@see GL46::glIsEnabled} returns {@see GL46::GL_TRUE} if $cap is an enabled capability and returns
     * {@see GL46::GL_FALSE} otherwise. Boolean states that are indexed may be tested with {@see GL46::glIsEnabledi}.
     * For {@see GL46::glIsEnabledi}, $index specifies the index of the capability to test. $index must be between
     * zero and the count of indexed capabilities for $cap. Initially all capabilities except {@see GL46::GL_DITHER}
     * are disabled; {@see GL46::GL_DITHER} is initially enabled.
     *
     * The following capabilities are accepted for $cap:
     *
     * | {@see GL46::GL_BLEND}                     | {@see GL46::glBlendFunc}, {@see GL46::glLogicOp}            |
     * | {@see GL46::GL_CLIP_DISTANCE}i            | {@see GL46::glEnable}                                       |
     * | {@see GL46::GL_COLOR_LOGIC_OP}            | {@see GL46::glLogicOp}                                      |
     * | {@see GL46::GL_CULL_FACE}                 | {@see GL46::glCullFace}                                     |
     * | {@see GL46::GL_DEPTH_CLAMP}               | {@see GL46::glEnable}                                       |
     * | {@see GL46::GL_DEBUG_OUTPUT}              | {@see GL46::glEnable}                                       |
     * | {@see GL46::GL_DEBUG_OUTPUT_SYNCHRONOUS}  | {@see GL46::glEnable}                                       |
     * | {@see GL46::GL_DEPTH_TEST}                | {@see GL46::glDepthFunc}, {@see GL46::glDepthRange}         |
     * | {@see GL46::GL_DITHER}                    | {@see GL46::glEnable}                                       |
     * | {@see GL46::GL_FRAMEBUFFER_SRGB}          | {@see GL46::glEnable}                                       |
     * | {@see GL46::GL_LINE_SMOOTH}               | {@see GL46::glLineWidth}                                    |
     * | {@see GL46::GL_MULTISAMPLE}               | {@see GL46::glSampleCoverage}                               |
     * | {@see GL46::GL_POLYGON_SMOOTH}            | {@see GL46::glPolygonMode}                                  |
     * | {@see GL46::GL_POLYGON_OFFSET_FILL}       | {@see GL46::glPolygonOffset}                                |
     * | {@see GL46::GL_POLYGON_OFFSET_LINE}       | {@see GL46::glPolygonOffset}                                |
     * | {@see GL46::GL_POLYGON_OFFSET_POINT}      | {@see GL46::glPolygonOffset}                                |
     * | {@see GL46::GL_PROGRAM_POINT_SIZE}        | {@see GL46::glEnable}                                       |
     * | {@see GL46::GL_PRIMITIVE_RESTART}         | {@see GL46::glEnable}, {@see GL46::glPrimitiveRestartIndex} |
     * | {@see GL46::GL_SAMPLE_ALPHA_TO_COVERAGE}  | {@see GL46::glSampleCoverage}                               |
     * | {@see GL46::GL_SAMPLE_ALPHA_TO_ONE}       | {@see GL46::glSampleCoverage}                               |
     * | {@see GL46::GL_SAMPLE_COVERAGE}           | {@see GL46::glSampleCoverage}                               |
     * | {@see GL46::GL_SAMPLE_MASK}               | {@see GL46::glEnable}                                       |
     * | {@see GL46::GL_SCISSOR_TEST}              | {@see GL46::glScissor}                                      |
     * | {@see GL46::GL_STENCIL_TEST}              | {@see GL46::glStencilFunc}, {@see GL46::glStencilOp}        |
     * | {@see GL46::GL_TEXTURE_CUBE_MAP_SEAMLESS} | {@see GL46::glEnable}                                       |
     * @see http://docs.gl/gl2/glIsEnabled
     * @see http://docs.gl/gl4/glIsEnabled
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $index
     * @return int|\FFI\CData|\FFI\CInt
     */
    public function isEnabledi($target, $index): int
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glIsEnabledi', 'GLboolean (*)(GLenum target, GLuint index)');
        return $proc($target, $index);
    }

    /**
     * Transform feedback mode captures the values of varying variables written by the vertex shader (or, if active,
     * the geometry shader). Transform feedback is said to be active after a call to
     * {@see GL46::glBeginTransformFeedback} until a subsequent call to  {@see GL46::glEndTransformFeedback}.
     * Transform feedback commands must be paired.
     *
     * If no geometry shader is present, while transform feedback is active the $mode parameter to
     * {@see GL46::glDrawArrays} must match those specified in the following table:
     *
     * | {@see GL46::GL_POINTS}    | {@see GL46::GL_POINTS}                                                                                                                                                 |
     * | {@see GL46::GL_LINES}     | {@see GL46::GL_LINES}, {@see GL46::GL_LINE_LOOP}, {@see GL46::GL_LINE_STRIP}, {@see GL46::GL_LINES_ADJACENCY},
     * {@see GL46::GL_LINE_STRIP_ADJACENCY}                    |
     * | {@see GL46::GL_TRIANGLES} | {@see GL46::GL_TRIANGLES}, {@see GL46::GL_TRIANGLE_STRIP}, {@see GL46::GL_TRIANGLE_FAN},
     * {@see GL46::GL_TRIANGLES_ADJACENCY}, {@see GL46::GL_TRIANGLE_STRIP_ADJACENCY} |
     * If a geometry shader is present, the output primitive type from the geometry shader must match those provided
     * in the following table:
     *
     * | {@see GL46::GL_POINTS}    | {@see GL46::points}         |
     * | {@see GL46::GL_LINES}     | {@see GL46::line_strip}     |
     * | {@see GL46::GL_TRIANGLES} | {@see GL46::triangle_strip} |
     * @see http://docs.gl/gl4/glBeginTransformFeedback
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $primitiveMode
     * @return void
     */
    public function beginTransformFeedback($primitiveMode): void
    {
        $primitiveMode = $primitiveMode instanceof \FFI\CData ? $primitiveMode->cdata : $primitiveMode;

        assert(Type::isUint16($primitiveMode), 'Argument $primitiveMode must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glBeginTransformFeedback', 'void (*)(GLenum primitiveMode)');
        $proc($primitiveMode);
    }

    /**
     * {@see GL46::glBindTransformFeedback} binds the transform feedback object with name $id to the current GL
     * state. $id must be a name previously returned from a call to {@see GL46::glGenTransformFeedbacks}. If $id has
     * not previously been bound, a new transform feedback object with name $id and initialized with the default
     * transform state vector is created.
     *
     * In the initial state, a default transform feedback object is bound and treated as a transform feedback object
     * with a name of zero. If the name zero is subsequently bound, the default transform feedback object is again
     * bound to the GL state.
     *
     * While a transform feedback buffer object is bound, GL operations on the target to which it is bound affect the
     * bound transform feedback object, and queries of the target to which a transform feedback object is bound
     * return state from the bound object. When buffer objects are bound for transform feedback, they are attached to
     * the currently bound transform feedback object. Buffer objects are used for trans- form feedback only if they
     * are attached to the currently bound transform feedback object.
     *
     * @see http://docs.gl/gl4/glBindTransformFeedback
     * @since 3.0
     * @return void
     */
    public function endTransformFeedback(): void
    {
        $proc = $this->getProcAddress('glEndTransformFeedback', 'void (*)(void)');
        $proc();
    }

    /**
     * {@see GL46::glBindBufferRange} binds a range the buffer object $buffer represented by $offset and $size to the
     * binding point at index $index of the array of targets specified by $target. Each $target represents an indexed
     * array of buffer binding points, as well as a single general binding point that can be used by other buffer
     * manipulation functions such as {@see GL46::glBindBuffer} or {@see GL46::glMapBuffer}. In addition to binding a
     * range of $buffer to the indexed buffer binding target, {@see GL46::glBindBufferRange} also binds the range to
     * the generic buffer binding point specified by $target.
     *
     * $offset specifies the offset in basic machine units into the buffer object $buffer and $size specifies the
     * amount of data that can be read from the buffer object while used as an indexed target.
     *
     * @see http://docs.gl/gl4/glBindBufferRange
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param int|\FFI\CData|\FFI\CInt $buffer
     * @param mixed|float|string|int|\FFI\CData|\FFI\CInt $offset
     * @param mixed|float|string|int|\FFI\CData|\FFI\CInt $size
     * @return void
     */
    public function bindBufferRange($target, $index, $buffer, $offset, $size): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $buffer = $buffer instanceof \FFI\CData ? $buffer->cdata : $buffer;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($buffer), 'Argument $buffer must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isInt64($offset), 'Argument $offset must be a C-like GLintptr, but incompatible or overflow value given');
        assert(Type::isInt64($size), 'Argument $size must be a C-like GLsizeiptr, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glBindBufferRange', 'void (*)(GLenum target, GLuint index, GLuint buffer, GLintptr offset, GLsizeiptr size)');
        $proc($target, $index, $buffer, $offset, $size);
    }

    /**
     * {@see GL46::glBindBufferBase} binds the buffer object $buffer to the binding point at index $index of the
     * array of targets specified by $target. Each $target represents an indexed array of buffer binding points, as
     * well as a single general binding point that can be used by other buffer manipulation functions such as
     * {@see GL46::glBindBuffer} or {@see GL46::glMapBuffer}. In addition to binding $buffer to the indexed buffer
     * binding target, {@see GL46::glBindBufferBase} also binds $buffer to the generic buffer binding point specified
     * by $target.
     *
     * @see http://docs.gl/gl4/glBindBufferBase
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param int|\FFI\CData|\FFI\CInt $buffer
     * @return void
     */
    public function bindBufferBase($target, $index, $buffer): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $buffer = $buffer instanceof \FFI\CData ? $buffer->cdata : $buffer;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($buffer), 'Argument $buffer must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glBindBufferBase', 'void (*)(GLenum target, GLuint index, GLuint buffer)');
        $proc($target, $index, $buffer);
    }

    /**
     * The names of the vertex or geometry shader outputs to be recorded in transform feedback mode are specified
     * using {@see GL46::glTransformFeedbackVaryings}. When a geometry shader is active, transform feedback records
     * the values of selected geometry shader output variables from the emitted vertices. Otherwise, the values of
     * the selected vertex shader outputs are recorded.
     *
     * The state set by {@see GL46::glTranformFeedbackVaryings} is stored and takes effect next time
     * {@see GL46::glLinkProgram} is called on $program. When {@see GL46::glLinkProgram} is called, $program is
     * linked so that the values of the specified varying variables for the vertices of each primitive generated by
     * the GL are written to a single buffer object if $bufferMode is {@see GL46::GL_INTERLEAVED_ATTRIBS} or multiple
     * buffer objects if $bufferMode is {@see GL46::GL_SEPARATE_ATTRIBS}.
     *
     * {@see GL46::glTransformFeedbackVaryings} can also special identifiers if $bufferMode is
     * {@see GL46::GL_INTERLEAVED_ATTRIBS}:
     *
     *  - gl_NextBuffer
     *    Subsequent variables in $varyings will be assigned to the next buffer binding point.
     *
     *  - gl_SkipComponents#
     *    Where # may be 1, 2, 3, or 4. The variable is treated as having this number of components, but the contents of
     *    the memory are preserved under feedback operations.
     *
     *
     * In addition to the errors generated by {@see GL46::glTransformFeedbackVaryings}, the program $program will
     * fail to link if:    The count specified by {@see GL46::glTransformFeedbackVaryings} is non-zero, but the
     * program object has no vertex or geometry shader.     Any variable name specified in the $varyings array is not
     * declared as an output in the vertex shader (or the geometry shader, if active), or is not one of the special
     * identifiers listed above.     Special identifiers appear in a $varyings array where $bufferMode is not
     * {@see GL46::GL_INTERLEAVED_ATTRIBS}.     Any two entries in the $varyings array, which are not one of the
     * special varyings above, specify the same varying variable.     Discounting any special identifiers, the total
     * number of components to capture in any varying variable in $varyings is greater than the constant
     * {@see GL46::GL_MAX_TRANSFORM_FEEDBACK_SEPARATE_COMPONENTS} and the buffer mode is
     * {@see GL46::GL_SEPARATE_ATTRIBS}.     The total number of components to capture is greater than the constant
     * {@see GL46::GL_MAX_TRANSFORM_FEEDBACK_INTERLEAVED_COMPONENTS} and the buffer mode is
     * {@see GL46::GL_INTERLEAVED_ATTRIBS}.
     *
     * @see http://docs.gl/gl4/glTransformFeedbackVaryings
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CIntPtrPtr|null $varyings
     * @param int|\FFI\CData|\FFI\CInt $bufferMode
     * @return void
     */
    public function transformFeedbackVaryings($program, $count, ?\FFI\CData $varyings, $bufferMode): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $bufferMode = $bufferMode instanceof \FFI\CData ? $bufferMode->cdata : $bufferMode;

        assert(Type::isUint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isInt16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Type::isUint16($bufferMode), 'Argument $bufferMode must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glTransformFeedbackVaryings', 'void (*)(GLuint program, GLsizei count, const GLchar *const*varyings, GLenum bufferMode)');
        $proc($program, $count, $varyings, $bufferMode);
    }

    /**
     * Information about the set of varying variables in a linked program that will be captured during transform
     * feedback may be retrieved by calling {@see GL46::glGetTransformFeedbackVarying}.
     * {@see GL46::glGetTransformFeedbackVarying} provides information about the varying variable selected by $index.
     * An $index of 0 selects the first varying variable specified in the $varyings array passed to
     * {@see GL46::glTransformFeedbackVaryings}, and an $index of the value of
     * {@see GL46::GL_TRANSFORM_FEEDBACK_VARYINGS} minus one selects the last such variable.
     *
     * The name of the selected varying is returned as a null-terminated string in $name. The actual number of
     * characters written into $name, excluding the null terminator, is returned in $length. If $length is NULL, no
     * length is returned. The maximum number of characters that may be written into $name, including the null
     * terminator, is specified by $bufSize.
     *
     * The length of the longest varying name in program is given by
     * {@see GL46::GL_TRANSFORM_FEEDBACK_VARYING_MAX_LENGTH}, which can be queried with {@see GL46::glGetProgram}.
     *
     * For the selected varying variable, its type is returned into $type. The size of the varying is returned into
     * $size. The value in $size is in units of the type returned in $type. The type returned can be any of the
     * scalar, vector, or matrix attribute types returned by {@see GL46::glGetActiveAttrib}. If an error occurred,
     * the return parameters $length, $size, $type and $name will be unmodified. This command will return as much
     * information about the varying variables as possible. If no information is available, $length will be set to
     * zero and $name will be an empty string. This situation could arise if
     * {@see GL46::glGetTransformFeedbackVarying} is called after a failed link.
     *
     * @see http://docs.gl/gl4/glGetTransformFeedbackVarying
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param int|\FFI\CData|\FFI\CInt $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @param \FFI\CData|\FFI\CIntPtr|null $size
     * @param \FFI\CData|\FFI\CIntPtr|null $type
     * @param \FFI\CData|\FFI\CIntPtr|null $name
     * @return void
     */
    public function getTransformFeedbackVarying($program, $index, $bufSize, ?\FFI\CData $length, ?\FFI\CData $size, ?\FFI\CData $type, ?\FFI\CData $name): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $bufSize = $bufSize instanceof \FFI\CData ? $bufSize->cdata : $bufSize;

        assert(Type::isUint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isInt16($bufSize), 'Argument $bufSize must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetTransformFeedbackVarying', 'void (*)(GLuint program, GLuint index, GLsizei bufSize, GLsizei *length, GLsizei *size, GLenum *type, GLchar *name)');
        $proc($program, $index, $bufSize, $length, $size, $type, $name);
    }

    /**
     * {@see GL46::glClampColor} controls color clamping that is performed during {@see GL46::glReadPixels}. $target
     * must be {@see GL46::GL_CLAMP_READ_COLOR}. If $clamp is {@see GL46::GL_TRUE}, read color clamping is enabled;
     * if $clamp is {@see GL46::GL_FALSE}, read color clamping is disabled. If $clamp is {@see GL46::GL_FIXED_ONLY},
     * read color clamping is enabled only if the selected read buffer has fixed point components and disabled
     * otherwise.
     *
     * @see http://docs.gl/gl4/glClampColor
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $clamp
     * @return void
     */
    public function clampColor($target, $clamp): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $clamp = $clamp instanceof \FFI\CData ? $clamp->cdata : $clamp;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($clamp), 'Argument $clamp must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glClampColor', 'void (*)(GLenum target, GLenum clamp)');
        $proc($target, $clamp);
    }

    /**
     * Conditional rendering is started using {@see GL46::glBeginConditionalRender} and ended using
     * {@see GL46::glEndConditionalRender}. During conditional rendering, all vertex array commands, as well as
     * {@see GL46::glClear} and {@see GL46::glClearBuffer} have no effect if the ({@see GL46::GL_SAMPLES_PASSED})
     * result of the query object $id is zero, or if the ({@see GL46::GL_ANY_SAMPLES_PASSED}) result is
     * {@see GL46::GL_FALSE}. The results of commands setting the current vertex state, such as
     * {@see GL46::glVertexAttrib} are undefined. If the ({@see GL46::GL_SAMPLES_PASSED}) result is non-zero or if
     * the ({@see GL46::GL_ANY_SAMPLES_PASSED}) result is {@see GL46::GL_TRUE}, such commands are not discarded. The
     * $id parameter to {@see GL46::glBeginConditionalRender} must be the name of a query object previously returned
     * from a call to {@see GL46::glGenQueries}. $mode specifies how the results of the query object are to be
     * interpreted. If $mode is {@see GL46::GL_QUERY_WAIT}, the GL waits for the results of the query to be available
     * and then uses the results to determine if subsequent rendering commands are discarded. If $mode is
     * {@see GL46::GL_QUERY_NO_WAIT}, the GL may choose to unconditionally execute the subsequent rendering commands
     * without waiting for the query to complete.
     *
     * If $mode is {@see GL46::GL_QUERY_BY_REGION_WAIT}, the GL will also wait for occlusion query results and
     * discard rendering commands if the result of the occlusion query is zero. If the query result is non-zero,
     * subsequent rendering commands are executed, but the GL may discard the results of the commands for any region
     * of the framebuffer that did not contribute to the sample count in the specified occlusion query. Any such
     * discarding is done in an implementation-dependent manner, but the rendering command results may not be
     * discarded for any samples that contributed to the occlusion query sample count. If $mode is
     * {@see GL46::GL_QUERY_BY_REGION_NO_WAIT}, the GL operates as in {@see GL46::GL_QUERY_BY_REGION_WAIT}, but may
     * choose to unconditionally execute the subsequent rendering commands without waiting for the query to complete.
     *
     * @see http://docs.gl/gl4/glBeginConditionalRender
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $id
     * @param int|\FFI\CData|\FFI\CInt $mode
     * @return void
     */
    public function beginConditionalRender($id, $mode): void
    {
        $id = $id instanceof \FFI\CData ? $id->cdata : $id;
        $mode = $mode instanceof \FFI\CData ? $mode->cdata : $mode;

        assert(Type::isUint16($id), 'Argument $id must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($mode), 'Argument $mode must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glBeginConditionalRender', 'void (*)(GLuint id, GLenum mode)');
        $proc($id, $mode);
    }

    /**
     * Conditional rendering is started using {@see GL46::glBeginConditionalRender} and ended using
     * {@see GL46::glEndConditionalRender}. During conditional rendering, all vertex array commands, as well as
     * {@see GL46::glClear} and {@see GL46::glClearBuffer} have no effect if the ({@see GL46::GL_SAMPLES_PASSED})
     * result of the query object $id is zero, or if the ({@see GL46::GL_ANY_SAMPLES_PASSED}) result is
     * {@see GL46::GL_FALSE}. The results of commands setting the current vertex state, such as
     * {@see GL46::glVertexAttrib} are undefined. If the ({@see GL46::GL_SAMPLES_PASSED}) result is non-zero or if
     * the ({@see GL46::GL_ANY_SAMPLES_PASSED}) result is {@see GL46::GL_TRUE}, such commands are not discarded. The
     * $id parameter to {@see GL46::glBeginConditionalRender} must be the name of a query object previously returned
     * from a call to {@see GL46::glGenQueries}. $mode specifies how the results of the query object are to be
     * interpreted. If $mode is {@see GL46::GL_QUERY_WAIT}, the GL waits for the results of the query to be available
     * and then uses the results to determine if subsequent rendering commands are discarded. If $mode is
     * {@see GL46::GL_QUERY_NO_WAIT}, the GL may choose to unconditionally execute the subsequent rendering commands
     * without waiting for the query to complete.
     *
     * If $mode is {@see GL46::GL_QUERY_BY_REGION_WAIT}, the GL will also wait for occlusion query results and
     * discard rendering commands if the result of the occlusion query is zero. If the query result is non-zero,
     * subsequent rendering commands are executed, but the GL may discard the results of the commands for any region
     * of the framebuffer that did not contribute to the sample count in the specified occlusion query. Any such
     * discarding is done in an implementation-dependent manner, but the rendering command results may not be
     * discarded for any samples that contributed to the occlusion query sample count. If $mode is
     * {@see GL46::GL_QUERY_BY_REGION_NO_WAIT}, the GL operates as in {@see GL46::GL_QUERY_BY_REGION_WAIT}, but may
     * choose to unconditionally execute the subsequent rendering commands without waiting for the query to complete.
     *
     * @see http://docs.gl/gl4/glBeginConditionalRender
     * @since 3.0
     * @return void
     */
    public function endConditionalRender(): void
    {
        $proc = $this->getProcAddress('glEndConditionalRender', 'void (*)(void)');
        $proc();
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param int|\FFI\CData|\FFI\CInt $size
     * @param int|\FFI\CData|\FFI\CInt $type
     * @param int|\FFI\CData|\FFI\CInt $stride
     * @param \FFI\CData|\FFI\CPtr|null $pointer
     * @return void
     */
    public function vertexAttribIPointer($index, $size, $type, $stride, ?\FFI\CData $pointer): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $size = $size instanceof \FFI\CData ? $size->cdata : $size;
        $type = $type instanceof \FFI\CData ? $type->cdata : $type;
        $stride = $stride instanceof \FFI\CData ? $stride->cdata : $stride;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isInt16($size), 'Argument $size must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isUint16($type), 'Argument $type must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isInt16($stride), 'Argument $stride must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribIPointer', 'void (*)(GLuint index, GLint size, GLenum type, GLsizei stride, const void *pointer)');
        $proc($index, $size, $type, $stride, $pointer);
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public function getVertexAttribIiv($index, $pname, ?\FFI\CData $params): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetVertexAttribIiv', 'void (*)(GLuint index, GLenum pname, GLint *params)');
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public function getVertexAttribIuiv($index, $pname, ?\FFI\CData $params): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetVertexAttribIuiv', 'void (*)(GLuint index, GLenum pname, GLuint *params)');
        $proc($index, $pname, $params);
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param int|\FFI\CData|\FFI\CInt $x
     * @return void
     */
    public function vertexAttribI1i($index, $x): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $x = $x instanceof \FFI\CData ? $x->cdata : $x;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isInt16($x), 'Argument $x must be a C-like GLint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribI1i', 'void (*)(GLuint index, GLint x)');
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param int|\FFI\CData|\FFI\CInt $x
     * @param int|\FFI\CData|\FFI\CInt $y
     * @return void
     */
    public function vertexAttribI2i($index, $x, $y): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $x = $x instanceof \FFI\CData ? $x->cdata : $x;
        $y = $y instanceof \FFI\CData ? $y->cdata : $y;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isInt16($x), 'Argument $x must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($y), 'Argument $y must be a C-like GLint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribI2i', 'void (*)(GLuint index, GLint x, GLint y)');
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param int|\FFI\CData|\FFI\CInt $x
     * @param int|\FFI\CData|\FFI\CInt $y
     * @param int|\FFI\CData|\FFI\CInt $z
     * @return void
     */
    public function vertexAttribI3i($index, $x, $y, $z): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $x = $x instanceof \FFI\CData ? $x->cdata : $x;
        $y = $y instanceof \FFI\CData ? $y->cdata : $y;
        $z = $z instanceof \FFI\CData ? $z->cdata : $z;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isInt16($x), 'Argument $x must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($y), 'Argument $y must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($z), 'Argument $z must be a C-like GLint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribI3i', 'void (*)(GLuint index, GLint x, GLint y, GLint z)');
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param int|\FFI\CData|\FFI\CInt $x
     * @param int|\FFI\CData|\FFI\CInt $y
     * @param int|\FFI\CData|\FFI\CInt $z
     * @param int|\FFI\CData|\FFI\CInt $w
     * @return void
     */
    public function vertexAttribI4i($index, $x, $y, $z, $w): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $x = $x instanceof \FFI\CData ? $x->cdata : $x;
        $y = $y instanceof \FFI\CData ? $y->cdata : $y;
        $z = $z instanceof \FFI\CData ? $z->cdata : $z;
        $w = $w instanceof \FFI\CData ? $w->cdata : $w;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isInt16($x), 'Argument $x must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($y), 'Argument $y must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($z), 'Argument $z must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($w), 'Argument $w must be a C-like GLint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribI4i', 'void (*)(GLuint index, GLint x, GLint y, GLint z, GLint w)');
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param int|\FFI\CData|\FFI\CInt $x
     * @return void
     */
    public function vertexAttribI1ui($index, $x): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $x = $x instanceof \FFI\CData ? $x->cdata : $x;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($x), 'Argument $x must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribI1ui', 'void (*)(GLuint index, GLuint x)');
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param int|\FFI\CData|\FFI\CInt $x
     * @param int|\FFI\CData|\FFI\CInt $y
     * @return void
     */
    public function vertexAttribI2ui($index, $x, $y): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $x = $x instanceof \FFI\CData ? $x->cdata : $x;
        $y = $y instanceof \FFI\CData ? $y->cdata : $y;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($x), 'Argument $x must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($y), 'Argument $y must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribI2ui', 'void (*)(GLuint index, GLuint x, GLuint y)');
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param int|\FFI\CData|\FFI\CInt $x
     * @param int|\FFI\CData|\FFI\CInt $y
     * @param int|\FFI\CData|\FFI\CInt $z
     * @return void
     */
    public function vertexAttribI3ui($index, $x, $y, $z): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $x = $x instanceof \FFI\CData ? $x->cdata : $x;
        $y = $y instanceof \FFI\CData ? $y->cdata : $y;
        $z = $z instanceof \FFI\CData ? $z->cdata : $z;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($x), 'Argument $x must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($y), 'Argument $y must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($z), 'Argument $z must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribI3ui', 'void (*)(GLuint index, GLuint x, GLuint y, GLuint z)');
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param int|\FFI\CData|\FFI\CInt $x
     * @param int|\FFI\CData|\FFI\CInt $y
     * @param int|\FFI\CData|\FFI\CInt $z
     * @param int|\FFI\CData|\FFI\CInt $w
     * @return void
     */
    public function vertexAttribI4ui($index, $x, $y, $z, $w): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $x = $x instanceof \FFI\CData ? $x->cdata : $x;
        $y = $y instanceof \FFI\CData ? $y->cdata : $y;
        $z = $z instanceof \FFI\CData ? $z->cdata : $z;
        $w = $w instanceof \FFI\CData ? $w->cdata : $w;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($x), 'Argument $x must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($y), 'Argument $y must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($z), 'Argument $z must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($w), 'Argument $w must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribI4ui', 'void (*)(GLuint index, GLuint x, GLuint y, GLuint z, GLuint w)');
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public function vertexAttribI1iv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribI1iv', 'void (*)(GLuint index, const GLint *v)');
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public function vertexAttribI2iv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribI2iv', 'void (*)(GLuint index, const GLint *v)');
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public function vertexAttribI3iv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribI3iv', 'void (*)(GLuint index, const GLint *v)');
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public function vertexAttribI4iv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribI4iv', 'void (*)(GLuint index, const GLint *v)');
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public function vertexAttribI1uiv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribI1uiv', 'void (*)(GLuint index, const GLuint *v)');
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public function vertexAttribI2uiv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribI2uiv', 'void (*)(GLuint index, const GLuint *v)');
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public function vertexAttribI3uiv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribI3uiv', 'void (*)(GLuint index, const GLuint *v)');
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public function vertexAttribI4uiv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribI4uiv', 'void (*)(GLuint index, const GLuint *v)');
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public function vertexAttribI4bv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribI4bv', 'void (*)(GLuint index, const GLbyte *v)');
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public function vertexAttribI4sv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribI4sv', 'void (*)(GLuint index, const GLshort *v)');
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public function vertexAttribI4ubv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribI4ubv', 'void (*)(GLuint index, const GLubyte *v)');
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public function vertexAttribI4usv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribI4usv', 'void (*)(GLuint index, const GLushort *v)');
        $proc($index, $v);
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public function getUniformuiv($program, $location, ?\FFI\CData $params): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;

        assert(Type::isUint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isInt16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetUniformuiv', 'void (*)(GLuint program, GLint location, GLuint *params)');
        $proc($program, $location, $params);
    }

    /**
     * {@see GL46::glBindFragDataLocation} explicitly specifies the binding of the user-defined varying out variable
     * $name to fragment shader color number $colorNumber for program $program. If $name was bound previously, its
     * assigned binding is replaced with $colorNumber. $name must be a null-terminated string. $colorNumber must be
     * less than {@see GL46::GL_MAX_DRAW_BUFFERS}.
     *
     * The bindings specified by {@see GL46::glBindFragDataLocation} have no effect until $program is next linked.
     * Bindings may be specified at any time after $program has been created. Specifically, they may be specified
     * before shader objects are attached to the program. Therefore, any name may be specified in $name, including a
     * name that is never used as a varying out variable in any fragment shader object. Names beginning with
     * {@see GL46::gl_} are reserved by the GL.
     *
     * In addition to the errors generated by {@see GL46::glBindFragDataLocation}, the program $program will fail to
     * link if:    The number of active outputs is greater than the value {@see GL46::GL_MAX_DRAW_BUFFERS}.     More
     * than one varying out variable is bound to the same color number.
     *
     * @see http://docs.gl/gl4/glBindFragDataLocation
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $color
     * @param \FFI\CData|\FFI\CIntPtr|null $name
     * @return void
     */
    public function bindFragDataLocation($program, $color, ?\FFI\CData $name): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $color = $color instanceof \FFI\CData ? $color->cdata : $color;

        assert(Type::isUint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($color), 'Argument $color must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glBindFragDataLocation', 'void (*)(GLuint program, GLuint color, const GLchar *name)');
        $proc($program, $color, $name);
    }

    /**
     * {@see GL46::glGetFragDataLocation} retrieves the assigned color number binding for the user-defined varying
     * out variable $name for program $program. $program must have previously been linked. $name must be a
     * null-terminated string. If $name is not the name of an active user-defined varying out fragment shader
     * variable within $program, -1 will be returned.
     *
     * @see http://docs.gl/gl4/glGetFragDataLocation
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param \FFI\CData|\FFI\CIntPtr|null $name
     * @return int|\FFI\CData|\FFI\CInt
     */
    public function getFragDataLocation($program, ?\FFI\CData $name): int
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;

        assert(Type::isUint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetFragDataLocation', 'GLint (*)(GLuint program, const GLchar *name)');
        return $proc($program, $name);
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $v0
     * @return void
     */
    public function uniform1ui($location, $v0): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $v0 = $v0 instanceof \FFI\CData ? $v0->cdata : $v0;

        assert(Type::isInt16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isUint16($v0), 'Argument $v0 must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniform1ui', 'void (*)(GLint location, GLuint v0)');
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $v0
     * @param int|\FFI\CData|\FFI\CInt $v1
     * @return void
     */
    public function uniform2ui($location, $v0, $v1): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $v0 = $v0 instanceof \FFI\CData ? $v0->cdata : $v0;
        $v1 = $v1 instanceof \FFI\CData ? $v1->cdata : $v1;

        assert(Type::isInt16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isUint16($v0), 'Argument $v0 must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($v1), 'Argument $v1 must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniform2ui', 'void (*)(GLint location, GLuint v0, GLuint v1)');
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $v0
     * @param int|\FFI\CData|\FFI\CInt $v1
     * @param int|\FFI\CData|\FFI\CInt $v2
     * @return void
     */
    public function uniform3ui($location, $v0, $v1, $v2): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $v0 = $v0 instanceof \FFI\CData ? $v0->cdata : $v0;
        $v1 = $v1 instanceof \FFI\CData ? $v1->cdata : $v1;
        $v2 = $v2 instanceof \FFI\CData ? $v2->cdata : $v2;

        assert(Type::isInt16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isUint16($v0), 'Argument $v0 must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($v1), 'Argument $v1 must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($v2), 'Argument $v2 must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniform3ui', 'void (*)(GLint location, GLuint v0, GLuint v1, GLuint v2)');
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $v0
     * @param int|\FFI\CData|\FFI\CInt $v1
     * @param int|\FFI\CData|\FFI\CInt $v2
     * @param int|\FFI\CData|\FFI\CInt $v3
     * @return void
     */
    public function uniform4ui($location, $v0, $v1, $v2, $v3): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $v0 = $v0 instanceof \FFI\CData ? $v0->cdata : $v0;
        $v1 = $v1 instanceof \FFI\CData ? $v1->cdata : $v1;
        $v2 = $v2 instanceof \FFI\CData ? $v2->cdata : $v2;
        $v3 = $v3 instanceof \FFI\CData ? $v3->cdata : $v3;

        assert(Type::isInt16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isUint16($v0), 'Argument $v0 must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($v1), 'Argument $v1 must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($v2), 'Argument $v2 must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isUint16($v3), 'Argument $v3 must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniform4ui', 'void (*)(GLint location, GLuint v0, GLuint v1, GLuint v2, GLuint v3)');
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public function uniform1uiv($location, $count, ?\FFI\CData $value): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Type::isInt16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniform1uiv', 'void (*)(GLint location, GLsizei count, const GLuint *value)');
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public function uniform2uiv($location, $count, ?\FFI\CData $value): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Type::isInt16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniform2uiv', 'void (*)(GLint location, GLsizei count, const GLuint *value)');
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public function uniform3uiv($location, $count, ?\FFI\CData $value): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Type::isInt16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniform3uiv', 'void (*)(GLint location, GLsizei count, const GLuint *value)');
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public function uniform4uiv($location, $count, ?\FFI\CData $value): void
    {
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Type::isInt16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUniform4uiv', 'void (*)(GLint location, GLsizei count, const GLuint *value)');
        $proc($location, $count, $value);
    }

    /**
     * {@see GL46::glTexParameter} and {@see GL46::glTextureParameter} assign the value or values in $params to the
     * texture parameter specified as $pname. For {@see GL46::glTexParameter}, $target defines the target texture,
     * either {@see GL46::GL_TEXTURE_1D}, {@see GL46::GL_TEXTURE_1D_ARRAY}, {@see GL46::GL_TEXTURE_2D},
     * {@see GL46::GL_TEXTURE_2D_ARRAY}, {@see GL46::GL_TEXTURE_2D_MULTISAMPLE},
     * {@see GL46::GL_TEXTURE_2D_MULTISAMPLE_ARRAY}, {@see GL46::GL_TEXTURE_3D}, {@see GL46::GL_TEXTURE_CUBE_MAP},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_ARRAY}, or {@see GL46::GL_TEXTURE_RECTANGLE}. The following symbols are
     * accepted in $pname:
     *
     *  - {@see GL46::GL_DEPTH_STENCIL_TEXTURE_MODE}: Specifies the mode used to
     *    read from depth-stencil format textures. $params must be one of
     *    {@see GL46::GL_DEPTH_COMPONENT} or {@see GL46::GL_STENCIL_INDEX}. If
     *    the depth stencil mode is
     *    {@see GL46::GL_DEPTH_COMPONENT}, then reads from depth-stencil format
     *    textures will return the depth component
     *    of the texel in Rt and the stencil component will be discarded. If the
     *    depth stencil mode is
     *    {@see GL46::GL_STENCIL_INDEX} then the stencil component is returned
     *    in Rt and the depth component is
     *    discarded. The initial value is {@see GL46::GL_DEPTH_COMPONENT}.
     *
     *  - {@see GL46::GL_TEXTURE_BASE_LEVEL}: Specifies the index of the lowest
     *    defined mipmap level. This is an integer value. The initial value is
     *    0.
     *
     *  - {@see GL46::GL_TEXTURE_BORDER_COLOR}: The data in $params specifies
     *    four values that define the border values that should be used for
     *    border
     *    texels. If a texel is sampled from the border of the texture, the
     *    values of
     *    {@see GL46::GL_TEXTURE_BORDER_COLOR} are interpreted as an RGBA color
     *    to match the texture's internal format
     *    and substituted for the non-existent texel data. If the texture
     *    contains depth components, the first component
     *    of {@see GL46::GL_TEXTURE_BORDER_COLOR} is interpreted as a depth
     *    value. The initial value is     0.0 , 0.0 ,
     *    0.0 , 0.0    .   If the values for {@see
     *    GL46::GL_TEXTURE_BORDER_COLOR} are specified with
     *    {@see GL46::glTexParameterIiv} or {@see GL46::glTexParameterIuiv}, the
     *    values are stored unmodified with an
     *    internal data type of integer. If specified with {@see
     *    GL46::glTexParameteriv}, they are converted to floating
     *    point with the following equation:   f =   2 c + 1    2 b  - 1    . If
     *    specified with
     *    {@see GL46::glTexParameterfv}, they are stored unmodified as
     *    floating-point values.
     *
     *  - {@see GL46::GL_TEXTURE_COMPARE_FUNC}: Specifies the comparison
     *    operator used when {@see GL46::GL_TEXTURE_COMPARE_MODE} is set to
     *    {@see GL46::GL_COMPARE_REF_TO_TEXTURE}. Permissible values are:
     *     Texture Comparison Function
     *    Computed result        {@see GL46::GL_LEQUAL}      result =     1.0
     *    0.0   &amp;it;     r &lt;=  D t       r
     *    &gt;  D t              {@see GL46::GL_GEQUAL}      result =     1.0
     *    0.0   &amp;it;     r &gt;=  D t       r
     *    &lt;  D t              {@see GL46::GL_LESS}      result =     1.0
     *    0.0   &amp;it;     r &lt;  D t       r
     *    &gt;=  D t              {@see GL46::GL_GREATER}      result =     1.0
     *     0.0   &amp;it;     r &gt;  D t       r
     *    &lt;=  D t              {@see GL46::GL_EQUAL}      result =     1.0
     *    0.0   &amp;it;     r =  D t       r ≠
     *    D t              {@see GL46::GL_NOTEQUAL}      result =     1.0   0.0
     *     &amp;it;     r ≠  D t       r =  D t
     *                 {@see GL46::GL_ALWAYS}      result = 1.0        {@see
     *    GL46::GL_NEVER}      result = 0.0
     *    where r is the current interpolated texture coordinate, and   D t   is
     *    the depth texture value sampled from
     *    the currently bound depth texture. result is assigned to the red
     *    channel.
     *
     *  - {@see GL46::GL_TEXTURE_COMPARE_MODE}: Specifies the texture comparison
     *    mode for currently bound depth textures. That is, a texture whose
     *    internal
     *    format is {@see GL46::GL_DEPTH_COMPONENT_*}; see {@see
     *    GL46::glTexImage2D}) Permissible values are:
     *    {@see GL46::GL_COMPARE_REF_TO_TEXTURE}   Specifies that the
     *    interpolated and clamped r texture coordinate
     *    should be compared to the value in the currently bound depth texture.
     *    See the discussion of
     *    {@see GL46::GL_TEXTURE_COMPARE_FUNC} for details of how the comparison
     *    is evaluated. The result of the
     *    comparison is assigned to the red channel.     {@see GL46::GL_NONE}
     *    Specifies that the red channel should be
     *    assigned the appropriate value from the currently bound depth texture.
     *
     *  - {@see GL46::GL_TEXTURE_LOD_BIAS}: $params specifies a fixed bias value
     *    that is to be added to the level-of-detail parameter for the texture
     *    before texture sampling. The specified value is added to the
     *    shader-supplied bias value (if any) and
     *    subsequently clamped into the implementation-defined range     -  bias
     *    max        bias max      , where   bias
     *    max    is the value of the implementation defined constant {@see
     *    GL46::GL_MAX_TEXTURE_LOD_BIAS}. The initial
     *    value is 0.0.
     *
     *  - {@see GL46::GL_TEXTURE_MIN_FILTER}: The texture minifying function is
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
     *    1 × 1  . To define the mipmaps, call {@see GL46::glTexImage1D}, {@see
     *    GL46::glTexImage2D},
     *    {@see GL46::glTexImage3D}, {@see GL46::glCopyTexImage1D}, or {@see
     *    GL46::glCopyTexImage2D} with the level
     *    argument indicating the order of the mipmaps. Level 0 is the original
     *    texture; level    max &amp;af;  n m
     *    is the final    1 × 1   mipmap.   $params supplies a function for
     *    minifying the texture as one of the
     *    following:   {@see GL46::GL_NEAREST}   Returns the value of the
     *    texture element that is nearest (in Manhattan
     *    distance) to the specified texture coordinates.     {@see
     *    GL46::GL_LINEAR}   Returns the weighted average of
     *    the four texture elements that are closest to the specified texture
     *    coordinates. These can include items
     *    wrapped or repeated from other parts of a texture, depending on the
     *    values of {@see GL46::GL_TEXTURE_WRAP_S}
     *    and {@see GL46::GL_TEXTURE_WRAP_T}, and on the exact mapping.
     *    {@see GL46::GL_NEAREST_MIPMAP_NEAREST}
     *    Chooses the mipmap that most closely matches the size of the pixel
     *    being textured and uses the
     *    {@see GL46::GL_NEAREST} criterion (the texture element closest to the
     *    specified texture coordinates) to
     *    produce a texture value.     {@see GL46::GL_LINEAR_MIPMAP_NEAREST}
     *    Chooses the mipmap that most closely
     *    matches the size of the pixel being textured and uses the {@see
     *    GL46::GL_LINEAR} criterion (a weighted average
     *    of the four texture elements that are closest to the specified texture
     *    coordinates) to produce a texture
     *    value.     {@see GL46::GL_NEAREST_MIPMAP_LINEAR}   Chooses the two
     *    mipmaps that most closely match the size of
     *    the pixel being textured and uses the {@see GL46::GL_NEAREST}
     *    criterion (the texture element closest to the
     *    specified texture coordinates ) to produce a texture value from each
     *    mipmap. The final texture value is a
     *    weighted average of those two values.     {@see
     *    GL46::GL_LINEAR_MIPMAP_LINEAR}   Chooses the two mipmaps that
     *    most closely match the size of the pixel being textured and uses the
     *    {@see GL46::GL_LINEAR} criterion (a
     *    weighted average of the texture elements that are closest to the
     *    specified texture coordinates) to produce a
     *    texture value from each mipmap. The final texture value is a weighted
     *    average of those two values.       As
     *    more texture elements are sampled in the minification process, fewer
     *    aliasing artifacts will be apparent.
     *    While the {@see GL46::GL_NEAREST} and {@see GL46::GL_LINEAR}
     *    minification functions can be faster than the
     *    other four, they sample only one or multiple texture elements to
     *    determine the texture value of the pixel
     *    being rendered and can produce moire patterns or ragged transitions.
     *    The initial value of
     *    {@see GL46::GL_TEXTURE_MIN_FILTER} is {@see
     *    GL46::GL_NEAREST_MIPMAP_LINEAR}.
     *
     *  - {@see GL46::GL_TEXTURE_MAG_FILTER}: The texture magnification function
     *    is used whenever the level-of-detail function used when sampling from
     *    the
     *    texture determines that the texture should be magified. It sets the
     *    texture magnification function to either
     *    {@see GL46::GL_NEAREST} or {@see GL46::GL_LINEAR} (see below). {@see
     *    GL46::GL_NEAREST} is generally faster
     *    than {@see GL46::GL_LINEAR}, but it can produce textured images with
     *    sharper edges because the transition
     *    between texture elements is not as smooth. The initial value of {@see
     *    GL46::GL_TEXTURE_MAG_FILTER} is
     *    {@see GL46::GL_LINEAR}.   {@see GL46::GL_NEAREST}   Returns the value
     *    of the texture element that is nearest
     *    (in Manhattan distance) to the specified texture coordinates.
     *    {@see GL46::GL_LINEAR}   Returns the
     *    weighted average of the texture elements that are closest to the
     *    specified texture coordinates. These can
     *    include items wrapped or repeated from other parts of a texture,
     *    depending on the values of
     *    {@see GL46::GL_TEXTURE_WRAP_S} and {@see GL46::GL_TEXTURE_WRAP_T}, and
     *    on the exact mapping.
     *
     *  - {@see GL46::GL_TEXTURE_MIN_LOD}: Sets the minimum level-of-detail
     *    parameter. This floating-point value limits the selection of highest
     *    resolution mipmap (lowest mipmap level). The initial value is -1000.
     *
     *  - {@see GL46::GL_TEXTURE_MAX_LOD}: Sets the maximum level-of-detail
     *    parameter. This floating-point value limits the selection of the
     *    lowest
     *    resolution mipmap (highest mipmap level). The initial value is 1000.
     *
     *  - {@see GL46::GL_TEXTURE_MAX_LEVEL}: Sets the index of the highest
     *    defined mipmap level. This is an integer value. The initial value is
     *    1000.
     *
     *  - {@see GL46::GL_TEXTURE_SWIZZLE_R}: Sets the swizzle that will be
     *    applied to the r component of a texel before it is returned to the
     *    shader.
     *    Valid values for $param are {@see GL46::GL_RED}, {@see
     *    GL46::GL_GREEN}, {@see GL46::GL_BLUE},
     *    {@see GL46::GL_ALPHA}, {@see GL46::GL_ZERO} and {@see GL46::GL_ONE}.
     *    If {@see GL46::GL_TEXTURE_SWIZZLE_R} is
     *    {@see GL46::GL_RED}, the value for r will be taken from the first
     *    channel of the fetched texel. If
     *    {@see GL46::GL_TEXTURE_SWIZZLE_R} is {@see GL46::GL_GREEN}, the value
     *    for r will be taken from the second
     *    channel of the fetched texel. If {@see GL46::GL_TEXTURE_SWIZZLE_R} is
     *    {@see GL46::GL_BLUE}, the value for r
     *    will be taken from the third channel of the fetched texel. If {@see
     *    GL46::GL_TEXTURE_SWIZZLE_R} is
     *    {@see GL46::GL_ALPHA}, the value for r will be taken from the fourth
     *    channel of the fetched texel. If
     *    {@see GL46::GL_TEXTURE_SWIZZLE_R} is {@see GL46::GL_ZERO}, the value
     *    for r will be subtituted with 0.0. If
     *    {@see GL46::GL_TEXTURE_SWIZZLE_R} is {@see GL46::GL_ONE}, the value
     *    for r will be subtituted with 1.0. The
     *    initial value is {@see GL46::GL_RED}.
     *
     *  - {@see GL46::GL_TEXTURE_SWIZZLE_G}: Sets the swizzle that will be
     *    applied to the g component of a texel before it is returned to the
     *    shader.
     *    Valid values for $param and their effects are similar to those of
     *    {@see GL46::GL_TEXTURE_SWIZZLE_R}. The
     *    initial value is {@see GL46::GL_GREEN}.
     *
     *  - {@see GL46::GL_TEXTURE_SWIZZLE_B}: Sets the swizzle that will be
     *    applied to the b component of a texel before it is returned to the
     *    shader.
     *    Valid values for $param and their effects are similar to those of
     *    {@see GL46::GL_TEXTURE_SWIZZLE_R}. The
     *    initial value is {@see GL46::GL_BLUE}.
     *
     *  - {@see GL46::GL_TEXTURE_SWIZZLE_A}: Sets the swizzle that will be
     *    applied to the a component of a texel before it is returned to the
     *    shader.
     *    Valid values for $param and their effects are similar to those of
     *    {@see GL46::GL_TEXTURE_SWIZZLE_R}. The
     *    initial value is {@see GL46::GL_ALPHA}.
     *
     *  - {@see GL46::GL_TEXTURE_SWIZZLE_RGBA}: Sets the swizzles that will be
     *    applied to the r, g, b, and a components of a texel before they are
     *    returned
     *    to the shader. Valid values for $params and their effects are similar
     *    to those of
     *    {@see GL46::GL_TEXTURE_SWIZZLE_R}, except that all channels are
     *    specified simultaneously. Setting the value of
     *    {@see GL46::GL_TEXTURE_SWIZZLE_RGBA} is equivalent (assuming no errors
     *    are generated) to setting the
     *    parameters of each of {@see GL46::GL_TEXTURE_SWIZZLE_R}, {@see
     *    GL46::GL_TEXTURE_SWIZZLE_G},
     *    {@see GL46::GL_TEXTURE_SWIZZLE_B}, and {@see
     *    GL46::GL_TEXTURE_SWIZZLE_A} successively.
     *
     *  - {@see GL46::GL_TEXTURE_WRAP_S}: Sets the wrap parameter for texture
     *    coordinate s to either {@see GL46::GL_CLAMP_TO_EDGE},
     *    {@see GL46::GL_CLAMP_TO_BORDER}, {@see GL46::GL_MIRRORED_REPEAT},
     *    {@see GL46::GL_REPEAT}, or
     *    {@see GL46::GL_MIRROR_CLAMP_TO_EDGE}. {@see GL46::GL_CLAMP_TO_EDGE}
     *    causes s coordinates to be clamped to the
     *    range       1  2N      1 -    1  2N       , where N is the size of the
     *    texture in the direction of clamping.
     *    {@see GL46::GL_CLAMP_TO_BORDER} evaluates s coordinates in a similar
     *    manner to {@see GL46::GL_CLAMP_TO_EDGE}.
     *    However, in cases where clamping would have occurred in {@see
     *    GL46::GL_CLAMP_TO_EDGE} mode, the fetched texel
     *    data is substituted with the values specified by {@see
     *    GL46::GL_TEXTURE_BORDER_COLOR}. {@see GL46::GL_REPEAT}
     *    causes the integer part of the s coordinate to be ignored; the GL uses
     *    only the fractional part, thereby
     *    creating a repeating pattern. {@see GL46::GL_MIRRORED_REPEAT} causes
     *    the s coordinate to be set to the
     *    fractional part of the texture coordinate if the integer part of s is
     *    even; if the integer part of s is odd,
     *    then the s texture coordinate is set to    1 -  frac &amp;af;  s    ,
     *    where    frac &amp;af;  s    represents
     *    the fractional part of s. {@see GL46::GL_MIRROR_CLAMP_TO_EDGE} causes
     *    the s coordinate to be repeated as for
     *    {@see GL46::GL_MIRRORED_REPEAT} for one repetition of the texture, at
     *    which point the coordinate to be clamped
     *    as in {@see GL46::GL_CLAMP_TO_EDGE}. Initially, {@see
     *    GL46::GL_TEXTURE_WRAP_S} is set to
     *    {@see GL46::GL_REPEAT}.
     *
     *  - {@see GL46::GL_TEXTURE_WRAP_T}: Sets the wrap parameter for texture
     *    coordinate t to either {@see GL46::GL_CLAMP_TO_EDGE},
     *    {@see GL46::GL_CLAMP_TO_BORDER}, {@see GL46::GL_MIRRORED_REPEAT},
     *    {@see GL46::GL_REPEAT}, or
     *    {@see GL46::GL_MIRROR_CLAMP_TO_EDGE}. See the discussion under {@see
     *    GL46::GL_TEXTURE_WRAP_S}. Initially,
     *    {@see GL46::GL_TEXTURE_WRAP_T} is set to {@see GL46::GL_REPEAT}.
     *
     *  - {@see GL46::GL_TEXTURE_WRAP_R}: Sets the wrap parameter for texture
     *    coordinate r to either {@see GL46::GL_CLAMP_TO_EDGE},
     *    {@see GL46::GL_CLAMP_TO_BORDER}, {@see GL46::GL_MIRRORED_REPEAT},
     *    {@see GL46::GL_REPEAT}, or
     *    {@see GL46::GL_MIRROR_CLAMP_TO_EDGE}. See the discussion under {@see
     *    GL46::GL_TEXTURE_WRAP_S}. Initially,
     *    {@see GL46::GL_TEXTURE_WRAP_R} is set to {@see GL46::GL_REPEAT}.
     *
     * @see http://docs.gl/gl2/glTexParameter
     * @see http://docs.gl/gl4/glTexParameter
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public function texParameterIiv($target, $pname, ?\FFI\CData $params): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glTexParameterIiv', 'void (*)(GLenum target, GLenum pname, const GLint *params)');
        $proc($target, $pname, $params);
    }

    /**
     * {@see GL46::glTexParameter} and {@see GL46::glTextureParameter} assign the value or values in $params to the
     * texture parameter specified as $pname. For {@see GL46::glTexParameter}, $target defines the target texture,
     * either {@see GL46::GL_TEXTURE_1D}, {@see GL46::GL_TEXTURE_1D_ARRAY}, {@see GL46::GL_TEXTURE_2D},
     * {@see GL46::GL_TEXTURE_2D_ARRAY}, {@see GL46::GL_TEXTURE_2D_MULTISAMPLE},
     * {@see GL46::GL_TEXTURE_2D_MULTISAMPLE_ARRAY}, {@see GL46::GL_TEXTURE_3D}, {@see GL46::GL_TEXTURE_CUBE_MAP},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_ARRAY}, or {@see GL46::GL_TEXTURE_RECTANGLE}. The following symbols are
     * accepted in $pname:
     *
     *  - {@see GL46::GL_DEPTH_STENCIL_TEXTURE_MODE}: Specifies the mode used to
     *    read from depth-stencil format textures. $params must be one of
     *    {@see GL46::GL_DEPTH_COMPONENT} or {@see GL46::GL_STENCIL_INDEX}. If
     *    the depth stencil mode is
     *    {@see GL46::GL_DEPTH_COMPONENT}, then reads from depth-stencil format
     *    textures will return the depth component
     *    of the texel in Rt and the stencil component will be discarded. If the
     *    depth stencil mode is
     *    {@see GL46::GL_STENCIL_INDEX} then the stencil component is returned
     *    in Rt and the depth component is
     *    discarded. The initial value is {@see GL46::GL_DEPTH_COMPONENT}.
     *
     *  - {@see GL46::GL_TEXTURE_BASE_LEVEL}: Specifies the index of the lowest
     *    defined mipmap level. This is an integer value. The initial value is
     *    0.
     *
     *  - {@see GL46::GL_TEXTURE_BORDER_COLOR}: The data in $params specifies
     *    four values that define the border values that should be used for
     *    border
     *    texels. If a texel is sampled from the border of the texture, the
     *    values of
     *    {@see GL46::GL_TEXTURE_BORDER_COLOR} are interpreted as an RGBA color
     *    to match the texture's internal format
     *    and substituted for the non-existent texel data. If the texture
     *    contains depth components, the first component
     *    of {@see GL46::GL_TEXTURE_BORDER_COLOR} is interpreted as a depth
     *    value. The initial value is     0.0 , 0.0 ,
     *    0.0 , 0.0    .   If the values for {@see
     *    GL46::GL_TEXTURE_BORDER_COLOR} are specified with
     *    {@see GL46::glTexParameterIiv} or {@see GL46::glTexParameterIuiv}, the
     *    values are stored unmodified with an
     *    internal data type of integer. If specified with {@see
     *    GL46::glTexParameteriv}, they are converted to floating
     *    point with the following equation:   f =   2 c + 1    2 b  - 1    . If
     *    specified with
     *    {@see GL46::glTexParameterfv}, they are stored unmodified as
     *    floating-point values.
     *
     *  - {@see GL46::GL_TEXTURE_COMPARE_FUNC}: Specifies the comparison
     *    operator used when {@see GL46::GL_TEXTURE_COMPARE_MODE} is set to
     *    {@see GL46::GL_COMPARE_REF_TO_TEXTURE}. Permissible values are:
     *     Texture Comparison Function
     *    Computed result        {@see GL46::GL_LEQUAL}      result =     1.0
     *    0.0   &amp;it;     r &lt;=  D t       r
     *    &gt;  D t              {@see GL46::GL_GEQUAL}      result =     1.0
     *    0.0   &amp;it;     r &gt;=  D t       r
     *    &lt;  D t              {@see GL46::GL_LESS}      result =     1.0
     *    0.0   &amp;it;     r &lt;  D t       r
     *    &gt;=  D t              {@see GL46::GL_GREATER}      result =     1.0
     *     0.0   &amp;it;     r &gt;  D t       r
     *    &lt;=  D t              {@see GL46::GL_EQUAL}      result =     1.0
     *    0.0   &amp;it;     r =  D t       r ≠
     *    D t              {@see GL46::GL_NOTEQUAL}      result =     1.0   0.0
     *     &amp;it;     r ≠  D t       r =  D t
     *                 {@see GL46::GL_ALWAYS}      result = 1.0        {@see
     *    GL46::GL_NEVER}      result = 0.0
     *    where r is the current interpolated texture coordinate, and   D t   is
     *    the depth texture value sampled from
     *    the currently bound depth texture. result is assigned to the red
     *    channel.
     *
     *  - {@see GL46::GL_TEXTURE_COMPARE_MODE}: Specifies the texture comparison
     *    mode for currently bound depth textures. That is, a texture whose
     *    internal
     *    format is {@see GL46::GL_DEPTH_COMPONENT_*}; see {@see
     *    GL46::glTexImage2D}) Permissible values are:
     *    {@see GL46::GL_COMPARE_REF_TO_TEXTURE}   Specifies that the
     *    interpolated and clamped r texture coordinate
     *    should be compared to the value in the currently bound depth texture.
     *    See the discussion of
     *    {@see GL46::GL_TEXTURE_COMPARE_FUNC} for details of how the comparison
     *    is evaluated. The result of the
     *    comparison is assigned to the red channel.     {@see GL46::GL_NONE}
     *    Specifies that the red channel should be
     *    assigned the appropriate value from the currently bound depth texture.
     *
     *  - {@see GL46::GL_TEXTURE_LOD_BIAS}: $params specifies a fixed bias value
     *    that is to be added to the level-of-detail parameter for the texture
     *    before texture sampling. The specified value is added to the
     *    shader-supplied bias value (if any) and
     *    subsequently clamped into the implementation-defined range     -  bias
     *    max        bias max      , where   bias
     *    max    is the value of the implementation defined constant {@see
     *    GL46::GL_MAX_TEXTURE_LOD_BIAS}. The initial
     *    value is 0.0.
     *
     *  - {@see GL46::GL_TEXTURE_MIN_FILTER}: The texture minifying function is
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
     *    1 × 1  . To define the mipmaps, call {@see GL46::glTexImage1D}, {@see
     *    GL46::glTexImage2D},
     *    {@see GL46::glTexImage3D}, {@see GL46::glCopyTexImage1D}, or {@see
     *    GL46::glCopyTexImage2D} with the level
     *    argument indicating the order of the mipmaps. Level 0 is the original
     *    texture; level    max &amp;af;  n m
     *    is the final    1 × 1   mipmap.   $params supplies a function for
     *    minifying the texture as one of the
     *    following:   {@see GL46::GL_NEAREST}   Returns the value of the
     *    texture element that is nearest (in Manhattan
     *    distance) to the specified texture coordinates.     {@see
     *    GL46::GL_LINEAR}   Returns the weighted average of
     *    the four texture elements that are closest to the specified texture
     *    coordinates. These can include items
     *    wrapped or repeated from other parts of a texture, depending on the
     *    values of {@see GL46::GL_TEXTURE_WRAP_S}
     *    and {@see GL46::GL_TEXTURE_WRAP_T}, and on the exact mapping.
     *    {@see GL46::GL_NEAREST_MIPMAP_NEAREST}
     *    Chooses the mipmap that most closely matches the size of the pixel
     *    being textured and uses the
     *    {@see GL46::GL_NEAREST} criterion (the texture element closest to the
     *    specified texture coordinates) to
     *    produce a texture value.     {@see GL46::GL_LINEAR_MIPMAP_NEAREST}
     *    Chooses the mipmap that most closely
     *    matches the size of the pixel being textured and uses the {@see
     *    GL46::GL_LINEAR} criterion (a weighted average
     *    of the four texture elements that are closest to the specified texture
     *    coordinates) to produce a texture
     *    value.     {@see GL46::GL_NEAREST_MIPMAP_LINEAR}   Chooses the two
     *    mipmaps that most closely match the size of
     *    the pixel being textured and uses the {@see GL46::GL_NEAREST}
     *    criterion (the texture element closest to the
     *    specified texture coordinates ) to produce a texture value from each
     *    mipmap. The final texture value is a
     *    weighted average of those two values.     {@see
     *    GL46::GL_LINEAR_MIPMAP_LINEAR}   Chooses the two mipmaps that
     *    most closely match the size of the pixel being textured and uses the
     *    {@see GL46::GL_LINEAR} criterion (a
     *    weighted average of the texture elements that are closest to the
     *    specified texture coordinates) to produce a
     *    texture value from each mipmap. The final texture value is a weighted
     *    average of those two values.       As
     *    more texture elements are sampled in the minification process, fewer
     *    aliasing artifacts will be apparent.
     *    While the {@see GL46::GL_NEAREST} and {@see GL46::GL_LINEAR}
     *    minification functions can be faster than the
     *    other four, they sample only one or multiple texture elements to
     *    determine the texture value of the pixel
     *    being rendered and can produce moire patterns or ragged transitions.
     *    The initial value of
     *    {@see GL46::GL_TEXTURE_MIN_FILTER} is {@see
     *    GL46::GL_NEAREST_MIPMAP_LINEAR}.
     *
     *  - {@see GL46::GL_TEXTURE_MAG_FILTER}: The texture magnification function
     *    is used whenever the level-of-detail function used when sampling from
     *    the
     *    texture determines that the texture should be magified. It sets the
     *    texture magnification function to either
     *    {@see GL46::GL_NEAREST} or {@see GL46::GL_LINEAR} (see below). {@see
     *    GL46::GL_NEAREST} is generally faster
     *    than {@see GL46::GL_LINEAR}, but it can produce textured images with
     *    sharper edges because the transition
     *    between texture elements is not as smooth. The initial value of {@see
     *    GL46::GL_TEXTURE_MAG_FILTER} is
     *    {@see GL46::GL_LINEAR}.   {@see GL46::GL_NEAREST}   Returns the value
     *    of the texture element that is nearest
     *    (in Manhattan distance) to the specified texture coordinates.
     *    {@see GL46::GL_LINEAR}   Returns the
     *    weighted average of the texture elements that are closest to the
     *    specified texture coordinates. These can
     *    include items wrapped or repeated from other parts of a texture,
     *    depending on the values of
     *    {@see GL46::GL_TEXTURE_WRAP_S} and {@see GL46::GL_TEXTURE_WRAP_T}, and
     *    on the exact mapping.
     *
     *  - {@see GL46::GL_TEXTURE_MIN_LOD}: Sets the minimum level-of-detail
     *    parameter. This floating-point value limits the selection of highest
     *    resolution mipmap (lowest mipmap level). The initial value is -1000.
     *
     *  - {@see GL46::GL_TEXTURE_MAX_LOD}: Sets the maximum level-of-detail
     *    parameter. This floating-point value limits the selection of the
     *    lowest
     *    resolution mipmap (highest mipmap level). The initial value is 1000.
     *
     *  - {@see GL46::GL_TEXTURE_MAX_LEVEL}: Sets the index of the highest
     *    defined mipmap level. This is an integer value. The initial value is
     *    1000.
     *
     *  - {@see GL46::GL_TEXTURE_SWIZZLE_R}: Sets the swizzle that will be
     *    applied to the r component of a texel before it is returned to the
     *    shader.
     *    Valid values for $param are {@see GL46::GL_RED}, {@see
     *    GL46::GL_GREEN}, {@see GL46::GL_BLUE},
     *    {@see GL46::GL_ALPHA}, {@see GL46::GL_ZERO} and {@see GL46::GL_ONE}.
     *    If {@see GL46::GL_TEXTURE_SWIZZLE_R} is
     *    {@see GL46::GL_RED}, the value for r will be taken from the first
     *    channel of the fetched texel. If
     *    {@see GL46::GL_TEXTURE_SWIZZLE_R} is {@see GL46::GL_GREEN}, the value
     *    for r will be taken from the second
     *    channel of the fetched texel. If {@see GL46::GL_TEXTURE_SWIZZLE_R} is
     *    {@see GL46::GL_BLUE}, the value for r
     *    will be taken from the third channel of the fetched texel. If {@see
     *    GL46::GL_TEXTURE_SWIZZLE_R} is
     *    {@see GL46::GL_ALPHA}, the value for r will be taken from the fourth
     *    channel of the fetched texel. If
     *    {@see GL46::GL_TEXTURE_SWIZZLE_R} is {@see GL46::GL_ZERO}, the value
     *    for r will be subtituted with 0.0. If
     *    {@see GL46::GL_TEXTURE_SWIZZLE_R} is {@see GL46::GL_ONE}, the value
     *    for r will be subtituted with 1.0. The
     *    initial value is {@see GL46::GL_RED}.
     *
     *  - {@see GL46::GL_TEXTURE_SWIZZLE_G}: Sets the swizzle that will be
     *    applied to the g component of a texel before it is returned to the
     *    shader.
     *    Valid values for $param and their effects are similar to those of
     *    {@see GL46::GL_TEXTURE_SWIZZLE_R}. The
     *    initial value is {@see GL46::GL_GREEN}.
     *
     *  - {@see GL46::GL_TEXTURE_SWIZZLE_B}: Sets the swizzle that will be
     *    applied to the b component of a texel before it is returned to the
     *    shader.
     *    Valid values for $param and their effects are similar to those of
     *    {@see GL46::GL_TEXTURE_SWIZZLE_R}. The
     *    initial value is {@see GL46::GL_BLUE}.
     *
     *  - {@see GL46::GL_TEXTURE_SWIZZLE_A}: Sets the swizzle that will be
     *    applied to the a component of a texel before it is returned to the
     *    shader.
     *    Valid values for $param and their effects are similar to those of
     *    {@see GL46::GL_TEXTURE_SWIZZLE_R}. The
     *    initial value is {@see GL46::GL_ALPHA}.
     *
     *  - {@see GL46::GL_TEXTURE_SWIZZLE_RGBA}: Sets the swizzles that will be
     *    applied to the r, g, b, and a components of a texel before they are
     *    returned
     *    to the shader. Valid values for $params and their effects are similar
     *    to those of
     *    {@see GL46::GL_TEXTURE_SWIZZLE_R}, except that all channels are
     *    specified simultaneously. Setting the value of
     *    {@see GL46::GL_TEXTURE_SWIZZLE_RGBA} is equivalent (assuming no errors
     *    are generated) to setting the
     *    parameters of each of {@see GL46::GL_TEXTURE_SWIZZLE_R}, {@see
     *    GL46::GL_TEXTURE_SWIZZLE_G},
     *    {@see GL46::GL_TEXTURE_SWIZZLE_B}, and {@see
     *    GL46::GL_TEXTURE_SWIZZLE_A} successively.
     *
     *  - {@see GL46::GL_TEXTURE_WRAP_S}: Sets the wrap parameter for texture
     *    coordinate s to either {@see GL46::GL_CLAMP_TO_EDGE},
     *    {@see GL46::GL_CLAMP_TO_BORDER}, {@see GL46::GL_MIRRORED_REPEAT},
     *    {@see GL46::GL_REPEAT}, or
     *    {@see GL46::GL_MIRROR_CLAMP_TO_EDGE}. {@see GL46::GL_CLAMP_TO_EDGE}
     *    causes s coordinates to be clamped to the
     *    range       1  2N      1 -    1  2N       , where N is the size of the
     *    texture in the direction of clamping.
     *    {@see GL46::GL_CLAMP_TO_BORDER} evaluates s coordinates in a similar
     *    manner to {@see GL46::GL_CLAMP_TO_EDGE}.
     *    However, in cases where clamping would have occurred in {@see
     *    GL46::GL_CLAMP_TO_EDGE} mode, the fetched texel
     *    data is substituted with the values specified by {@see
     *    GL46::GL_TEXTURE_BORDER_COLOR}. {@see GL46::GL_REPEAT}
     *    causes the integer part of the s coordinate to be ignored; the GL uses
     *    only the fractional part, thereby
     *    creating a repeating pattern. {@see GL46::GL_MIRRORED_REPEAT} causes
     *    the s coordinate to be set to the
     *    fractional part of the texture coordinate if the integer part of s is
     *    even; if the integer part of s is odd,
     *    then the s texture coordinate is set to    1 -  frac &amp;af;  s    ,
     *    where    frac &amp;af;  s    represents
     *    the fractional part of s. {@see GL46::GL_MIRROR_CLAMP_TO_EDGE} causes
     *    the s coordinate to be repeated as for
     *    {@see GL46::GL_MIRRORED_REPEAT} for one repetition of the texture, at
     *    which point the coordinate to be clamped
     *    as in {@see GL46::GL_CLAMP_TO_EDGE}. Initially, {@see
     *    GL46::GL_TEXTURE_WRAP_S} is set to
     *    {@see GL46::GL_REPEAT}.
     *
     *  - {@see GL46::GL_TEXTURE_WRAP_T}: Sets the wrap parameter for texture
     *    coordinate t to either {@see GL46::GL_CLAMP_TO_EDGE},
     *    {@see GL46::GL_CLAMP_TO_BORDER}, {@see GL46::GL_MIRRORED_REPEAT},
     *    {@see GL46::GL_REPEAT}, or
     *    {@see GL46::GL_MIRROR_CLAMP_TO_EDGE}. See the discussion under {@see
     *    GL46::GL_TEXTURE_WRAP_S}. Initially,
     *    {@see GL46::GL_TEXTURE_WRAP_T} is set to {@see GL46::GL_REPEAT}.
     *
     *  - {@see GL46::GL_TEXTURE_WRAP_R}: Sets the wrap parameter for texture
     *    coordinate r to either {@see GL46::GL_CLAMP_TO_EDGE},
     *    {@see GL46::GL_CLAMP_TO_BORDER}, {@see GL46::GL_MIRRORED_REPEAT},
     *    {@see GL46::GL_REPEAT}, or
     *    {@see GL46::GL_MIRROR_CLAMP_TO_EDGE}. See the discussion under {@see
     *    GL46::GL_TEXTURE_WRAP_S}. Initially,
     *    {@see GL46::GL_TEXTURE_WRAP_R} is set to {@see GL46::GL_REPEAT}.
     *
     * @see http://docs.gl/gl2/glTexParameter
     * @see http://docs.gl/gl4/glTexParameter
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public function texParameterIuiv($target, $pname, ?\FFI\CData $params): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glTexParameterIuiv', 'void (*)(GLenum target, GLenum pname, const GLuint *params)');
        $proc($target, $pname, $params);
    }

    /**
     * {@see GL46::glGetTexParameter} and {@see GL46::glGetTextureParameter} return in $params the value or values of
     * the texture parameter specified as $pname. $target defines the target texture. {@see GL46::GL_TEXTURE_1D},
     * {@see GL46::GL_TEXTURE_2D}, {@see GL46::GL_TEXTURE_3D}, {@see GL46::GL_TEXTURE_1D_ARRAY},
     * {@see GL46::GL_TEXTURE_2D_ARRAY}, {@see GL46::GL_TEXTURE_RECTANGLE}, {@see GL46::GL_TEXTURE_CUBE_MAP},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_ARRAY}, {@see GL46::GL_TEXTURE_2D_MULTISAMPLE}, or
     * {@see GL46::GL_TEXTURE_2D_MULTISAMPLE_ARRAY} specify one-, two-, or three-dimensional, one-dimensional array,
     * two-dimensional array, rectangle, cube-mapped or cube-mapped array, two-dimensional multisample, or
     * two-dimensional multisample array texturing, respectively. $pname accepts the same symbols as
     * {@see GL46::glTexParameter}, with the same interpretations:
     *
     *  - {@see GL46::GL_DEPTH_STENCIL_TEXTURE_MODE}: Returns the single-value
     *    depth stencil texture mode, a symbolic constant. The initial value is
     *    {@see GL46::GL_DEPTH_COMPONENT}.
     *
     *  - {@see GL46::GL_TEXTURE_MAG_FILTER}: Returns the single-valued texture
     *    magnification filter, a symbolic constant. The initial value is
     *    {@see GL46::GL_LINEAR}.
     *
     *  - {@see GL46::GL_TEXTURE_MIN_FILTER}: Returns the single-valued texture
     *    minification filter, a symbolic constant. The initial value is
     *    {@see GL46::GL_NEAREST_MIPMAP_LINEAR}.
     *
     *  - {@see GL46::GL_TEXTURE_MIN_LOD}: Returns the single-valued texture
     *    minimum level-of-detail value. The initial value is   -1000  .
     *
     *  - {@see GL46::GL_TEXTURE_MAX_LOD}: Returns the single-valued texture
     *    maximum level-of-detail value. The initial value is 1000.
     *
     *  - {@see GL46::GL_TEXTURE_BASE_LEVEL}: Returns the single-valued base
     *    texture mipmap level. The initial value is 0.
     *
     *  - {@see GL46::GL_TEXTURE_MAX_LEVEL}: Returns the single-valued maximum
     *    texture mipmap array level. The initial value is 1000.
     *
     *  - {@see GL46::GL_TEXTURE_SWIZZLE_R}: Returns the red component swizzle.
     *    The initial value is {@see GL46::GL_RED}.
     *
     *  - {@see GL46::GL_TEXTURE_SWIZZLE_G}: Returns the green component
     *    swizzle. The initial value is {@see GL46::GL_GREEN}.
     *
     *  - {@see GL46::GL_TEXTURE_SWIZZLE_B}: Returns the blue component swizzle.
     *    The initial value is {@see GL46::GL_BLUE}.
     *
     *  - {@see GL46::GL_TEXTURE_SWIZZLE_A}: Returns the alpha component
     *    swizzle. The initial value is {@see GL46::GL_ALPHA}.
     *
     *  - {@see GL46::GL_TEXTURE_SWIZZLE_RGBA}: Returns the component swizzle
     *    for all channels in a single query.
     *
     *  - {@see GL46::GL_TEXTURE_WRAP_S}: Returns the single-valued wrapping
     *    function for texture coordinate s, a symbolic constant. The initial
     *    value
     *    is {@see GL46::GL_REPEAT}.
     *
     *  - {@see GL46::GL_TEXTURE_WRAP_T}: Returns the single-valued wrapping
     *    function for texture coordinate t, a symbolic constant. The initial
     *    value
     *    is {@see GL46::GL_REPEAT}.
     *
     *  - {@see GL46::GL_TEXTURE_WRAP_R}: Returns the single-valued wrapping
     *    function for texture coordinate r, a symbolic constant. The initial
     *    value
     *    is {@see GL46::GL_REPEAT}.
     *
     *  - {@see GL46::GL_TEXTURE_BORDER_COLOR}: Returns four integer or
     *    floating-point numbers that comprise the RGBA color of the texture
     *    border.
     *    Floating-point values are returned in the range    0 1  . Integer
     *    values are returned as a linear mapping of
     *    the internal floating-point representation such that 1.0 maps to the
     *    most positive representable integer and
     *    -1.0  maps to the most negative representable integer. The initial
     *    value is (0, 0, 0, 0).
     *
     *  - {@see GL46::GL_TEXTURE_COMPARE_MODE}: Returns a single-valued texture
     *    comparison mode, a symbolic constant. The initial value is
     *    {@see GL46::GL_NONE}. See {@see GL46::glTexParameter}.
     *
     *  - {@see GL46::GL_TEXTURE_COMPARE_FUNC}: Returns a single-valued texture
     *    comparison function, a symbolic constant. The initial value is
     *    {@see GL46::GL_LEQUAL}. See {@see GL46::glTexParameter}.
     *
     *  - {@see GL46::GL_TEXTURE_VIEW_MIN_LEVEL}: Returns a single-valued base
     *    level of a texture view relative to its parent. The initial value is
     *    0. See
     *    {@see GL46::glTextureView}.
     *
     *  - {@see GL46::GL_TEXTURE_VIEW_NUM_LEVELS}: Returns a single-valued
     *    number of levels of detail of a texture view. See {@see
     *    GL46::glTextureView}.
     *
     *  - {@see GL46::GL_TEXTURE_VIEW_MIN_LAYER}: Returns a single-valued first
     *    level of a texture array view relative to its parent. See
     *    {@see GL46::glTextureView}.
     *
     *  - {@see GL46::GL_TEXTURE_VIEW_NUM_LAYERS}: Returns a single-valued
     *    number of layers in a texture array view. See {@see
     *    GL46::glTextureView}.
     *
     *  - {@see GL46::GL_TEXTURE_IMMUTABLE_LEVELS}: Returns a single-valued
     *    number of immutable texture levels in a texture view. See {@see
     *    GL46::glTextureView}.
     *
     * In addition to the parameters that may be set with {@see GL46::glTexParameter}, {@see GL46::glGetTexParameter}
     * and {@see GL46::glGetTextureParameter} accept the following read-only parameters:
     *
     *  - {@see GL46::GL_IMAGE_FORMAT_COMPATIBILITY_TYPE}: Returns the matching
     *    criteria use for the texture when used as an image texture. Can return
     *    {@see GL46::GL_IMAGE_FORMAT_COMPATIBILITY_BY_SIZE}, {@see
     *    GL46::GL_IMAGE_FORMAT_COMPATIBILITY_BY_CLASS} or
     *    {@see GL46::GL_NONE}.
     *
     *  - {@see GL46::GL_TEXTURE_IMMUTABLE_FORMAT}: Returns non-zero if the
     *    texture has an immutable format. Textures become immutable if their
     *    storage is
     *    specified with {@see GL46::glTexStorage1D}, {@see
     *    GL46::glTexStorage2D} or {@see GL46::glTexStorage3D}. The
     *    initial value is {@see GL46::GL_FALSE}.
     *
     *  - {@see GL46::GL_TEXTURE_TARGET}: Returns the effective target of the
     *    texture object. For {@see GL46::glGetTex*Parameter} functions, this is
     *    the
     *    target parameter. For {@see GL46::glGetTextureParameter*}, it is the
     *    target to which the texture was initially
     *    bound when it was created, or the value of the target parameter to the
     *    call to {@see GL46::glCreateTextures}
     *    which created the texture.
     *
     * @see http://docs.gl/gl2/glGetTexParameter
     * @see http://docs.gl/gl4/glGetTexParameter
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public function getTexParameterIiv($target, $pname, ?\FFI\CData $params): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetTexParameterIiv', 'void (*)(GLenum target, GLenum pname, GLint *params)');
        $proc($target, $pname, $params);
    }

    /**
     * {@see GL46::glGetTexParameter} and {@see GL46::glGetTextureParameter} return in $params the value or values of
     * the texture parameter specified as $pname. $target defines the target texture. {@see GL46::GL_TEXTURE_1D},
     * {@see GL46::GL_TEXTURE_2D}, {@see GL46::GL_TEXTURE_3D}, {@see GL46::GL_TEXTURE_1D_ARRAY},
     * {@see GL46::GL_TEXTURE_2D_ARRAY}, {@see GL46::GL_TEXTURE_RECTANGLE}, {@see GL46::GL_TEXTURE_CUBE_MAP},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_ARRAY}, {@see GL46::GL_TEXTURE_2D_MULTISAMPLE}, or
     * {@see GL46::GL_TEXTURE_2D_MULTISAMPLE_ARRAY} specify one-, two-, or three-dimensional, one-dimensional array,
     * two-dimensional array, rectangle, cube-mapped or cube-mapped array, two-dimensional multisample, or
     * two-dimensional multisample array texturing, respectively. $pname accepts the same symbols as
     * {@see GL46::glTexParameter}, with the same interpretations:
     *
     *  - {@see GL46::GL_DEPTH_STENCIL_TEXTURE_MODE}: Returns the single-value
     *    depth stencil texture mode, a symbolic constant. The initial value is
     *    {@see GL46::GL_DEPTH_COMPONENT}.
     *
     *  - {@see GL46::GL_TEXTURE_MAG_FILTER}: Returns the single-valued texture
     *    magnification filter, a symbolic constant. The initial value is
     *    {@see GL46::GL_LINEAR}.
     *
     *  - {@see GL46::GL_TEXTURE_MIN_FILTER}: Returns the single-valued texture
     *    minification filter, a symbolic constant. The initial value is
     *    {@see GL46::GL_NEAREST_MIPMAP_LINEAR}.
     *
     *  - {@see GL46::GL_TEXTURE_MIN_LOD}: Returns the single-valued texture
     *    minimum level-of-detail value. The initial value is   -1000  .
     *
     *  - {@see GL46::GL_TEXTURE_MAX_LOD}: Returns the single-valued texture
     *    maximum level-of-detail value. The initial value is 1000.
     *
     *  - {@see GL46::GL_TEXTURE_BASE_LEVEL}: Returns the single-valued base
     *    texture mipmap level. The initial value is 0.
     *
     *  - {@see GL46::GL_TEXTURE_MAX_LEVEL}: Returns the single-valued maximum
     *    texture mipmap array level. The initial value is 1000.
     *
     *  - {@see GL46::GL_TEXTURE_SWIZZLE_R}: Returns the red component swizzle.
     *    The initial value is {@see GL46::GL_RED}.
     *
     *  - {@see GL46::GL_TEXTURE_SWIZZLE_G}: Returns the green component
     *    swizzle. The initial value is {@see GL46::GL_GREEN}.
     *
     *  - {@see GL46::GL_TEXTURE_SWIZZLE_B}: Returns the blue component swizzle.
     *    The initial value is {@see GL46::GL_BLUE}.
     *
     *  - {@see GL46::GL_TEXTURE_SWIZZLE_A}: Returns the alpha component
     *    swizzle. The initial value is {@see GL46::GL_ALPHA}.
     *
     *  - {@see GL46::GL_TEXTURE_SWIZZLE_RGBA}: Returns the component swizzle
     *    for all channels in a single query.
     *
     *  - {@see GL46::GL_TEXTURE_WRAP_S}: Returns the single-valued wrapping
     *    function for texture coordinate s, a symbolic constant. The initial
     *    value
     *    is {@see GL46::GL_REPEAT}.
     *
     *  - {@see GL46::GL_TEXTURE_WRAP_T}: Returns the single-valued wrapping
     *    function for texture coordinate t, a symbolic constant. The initial
     *    value
     *    is {@see GL46::GL_REPEAT}.
     *
     *  - {@see GL46::GL_TEXTURE_WRAP_R}: Returns the single-valued wrapping
     *    function for texture coordinate r, a symbolic constant. The initial
     *    value
     *    is {@see GL46::GL_REPEAT}.
     *
     *  - {@see GL46::GL_TEXTURE_BORDER_COLOR}: Returns four integer or
     *    floating-point numbers that comprise the RGBA color of the texture
     *    border.
     *    Floating-point values are returned in the range    0 1  . Integer
     *    values are returned as a linear mapping of
     *    the internal floating-point representation such that 1.0 maps to the
     *    most positive representable integer and
     *    -1.0  maps to the most negative representable integer. The initial
     *    value is (0, 0, 0, 0).
     *
     *  - {@see GL46::GL_TEXTURE_COMPARE_MODE}: Returns a single-valued texture
     *    comparison mode, a symbolic constant. The initial value is
     *    {@see GL46::GL_NONE}. See {@see GL46::glTexParameter}.
     *
     *  - {@see GL46::GL_TEXTURE_COMPARE_FUNC}: Returns a single-valued texture
     *    comparison function, a symbolic constant. The initial value is
     *    {@see GL46::GL_LEQUAL}. See {@see GL46::glTexParameter}.
     *
     *  - {@see GL46::GL_TEXTURE_VIEW_MIN_LEVEL}: Returns a single-valued base
     *    level of a texture view relative to its parent. The initial value is
     *    0. See
     *    {@see GL46::glTextureView}.
     *
     *  - {@see GL46::GL_TEXTURE_VIEW_NUM_LEVELS}: Returns a single-valued
     *    number of levels of detail of a texture view. See {@see
     *    GL46::glTextureView}.
     *
     *  - {@see GL46::GL_TEXTURE_VIEW_MIN_LAYER}: Returns a single-valued first
     *    level of a texture array view relative to its parent. See
     *    {@see GL46::glTextureView}.
     *
     *  - {@see GL46::GL_TEXTURE_VIEW_NUM_LAYERS}: Returns a single-valued
     *    number of layers in a texture array view. See {@see
     *    GL46::glTextureView}.
     *
     *  - {@see GL46::GL_TEXTURE_IMMUTABLE_LEVELS}: Returns a single-valued
     *    number of immutable texture levels in a texture view. See {@see
     *    GL46::glTextureView}.
     *
     * In addition to the parameters that may be set with {@see GL46::glTexParameter}, {@see GL46::glGetTexParameter}
     * and {@see GL46::glGetTextureParameter} accept the following read-only parameters:
     *
     *  - {@see GL46::GL_IMAGE_FORMAT_COMPATIBILITY_TYPE}: Returns the matching
     *    criteria use for the texture when used as an image texture. Can return
     *    {@see GL46::GL_IMAGE_FORMAT_COMPATIBILITY_BY_SIZE}, {@see
     *    GL46::GL_IMAGE_FORMAT_COMPATIBILITY_BY_CLASS} or
     *    {@see GL46::GL_NONE}.
     *
     *  - {@see GL46::GL_TEXTURE_IMMUTABLE_FORMAT}: Returns non-zero if the
     *    texture has an immutable format. Textures become immutable if their
     *    storage is
     *    specified with {@see GL46::glTexStorage1D}, {@see
     *    GL46::glTexStorage2D} or {@see GL46::glTexStorage3D}. The
     *    initial value is {@see GL46::GL_FALSE}.
     *
     *  - {@see GL46::GL_TEXTURE_TARGET}: Returns the effective target of the
     *    texture object. For {@see GL46::glGetTex*Parameter} functions, this is
     *    the
     *    target parameter. For {@see GL46::glGetTextureParameter*}, it is the
     *    target to which the texture was initially
     *    bound when it was created, or the value of the target parameter to the
     *    call to {@see GL46::glCreateTextures}
     *    which created the texture.
     *
     * @see http://docs.gl/gl2/glGetTexParameter
     * @see http://docs.gl/gl4/glGetTexParameter
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public function getTexParameterIuiv($target, $pname, ?\FFI\CData $params): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetTexParameterIuiv', 'void (*)(GLenum target, GLenum pname, GLuint *params)');
        $proc($target, $pname, $params);
    }

    /**
     * These commands clear a specified buffer of a framebuffer to specified value(s). For
     * {@see GL46::glClearBuffer*}, the framebuffer is the currently bound draw framebuffer object. For
     * {@see GL46::glClearNamedFramebuffer*}, $framebuffer is zero, indicating the default draw framebuffer, or the
     * name of a framebuffer object.
     *
     * $buffer and $drawbuffer identify the buffer to clear.
     *
     * If $buffer is {@see GL46::GL_COLOR}, a particular draw buffer {@see GL46::GL_DRAW_BUFFER}$i is specified by
     * passing $i as $drawbuffer, and $value points to a four-element vector specifying the R, G, B and A color to
     * clear that draw buffer to. If the value of {@see GL46::GL_DRAW_BUFFER}$i is {@see GL46::GL_NONE}, the command
     * has no effect. Otherwise, the value of {@see GL46::GL_DRAW_BUFFER}$i identifies one or more color buffers,
     * each of which is cleared to the same value. Clamping and type conversion for fixed-point color buffers are
     * performed in the same fashion as for {@see GL46::glClearColor}. The {@see GL46::*fv}, {@see GL46::*iv} and
     * {@see GL46::*uiv} forms of these commands should be used to clear fixed- and floating-point, signed integer,
     * and unsigned integer color buffers respectively.
     *
     * If $buffer is {@see GL46::GL_DEPTH}, $drawbuffer must be zero, and $value points to a single value to clear
     * the depth buffer to. Clamping and type conversion for fixed-point depth buffers are performed in the same
     * fashion as for {@see GL46::glClearDepth}. Only the {@see GL46::*fv} forms of these commands should be used to
     * clear depth buffers; other forms do not accept a $buffer of {@see GL46::GL_DEPTH}.
     *
     * If $buffer is {@see GL46::GL_STENCIL}, $drawbuffer must be zero, and $value points to a single value to clear
     * the stencil buffer to. Masking is performed in the same fashion as for {@see GL46::glClearStencil}. Only the
     * {@see GL46::*iv} forms of these commands should be used to clear stencil buffers; be used to clear stencil
     * buffers; other forms do not accept a $buffer of {@see GL46::GL_STENCIL}.
     *
     * {@see GL46::glClearBufferfi} and {@see GL46::glClearNamedFramebufferfi} are used to clear the depth and
     * stencil buffers simultaneously. $buffer must be {@see GL46::GL_DEPTH_STENCIL} and $drawbuffer must be zero.
     * $depth and $stencil are the values to clear the depth and stencil buffers to, respectively. Clamping and type
     * conversion of $depth for fixed-point depth buffers are performed in the same fashion as for
     * {@see GL46::glClearDepth}. Masking of $stencil for stencil buffers is performed in the same fashion as for
     * {@see GL46::glClearStencil}. These commands are equivalent to clearing the depth and stencil buffers
     * separately, but may be faster when a buffer of internal format {@see GL46::GL_DEPTH_STENCIL} is being cleared.
     * The same per-fragment and masking operations defined for {@see GL46::glClear} are applied.
     *
     * The result of these commands is undefined if no conversion between the type of the specified $value and the
     * type of the buffer being cleared is defined (for example, if {@see GL46::glClearBufferiv} is called for a
     * fixed- or floating-point buffer, or if {@see GL46::glClearBufferfv} is called for a signed or unsigned integer
     * buffer). This is not an error.
     *
     * @see http://docs.gl/gl4/glClearBuffer
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $buffer
     * @param int|\FFI\CData|\FFI\CInt $drawbuffer
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public function clearBufferiv($buffer, $drawbuffer, ?\FFI\CData $value): void
    {
        $buffer = $buffer instanceof \FFI\CData ? $buffer->cdata : $buffer;
        $drawbuffer = $drawbuffer instanceof \FFI\CData ? $drawbuffer->cdata : $drawbuffer;

        assert(Type::isUint16($buffer), 'Argument $buffer must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isInt16($drawbuffer), 'Argument $drawbuffer must be a C-like GLint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glClearBufferiv', 'void (*)(GLenum buffer, GLint drawbuffer, const GLint *value)');
        $proc($buffer, $drawbuffer, $value);
    }

    /**
     * These commands clear a specified buffer of a framebuffer to specified value(s). For
     * {@see GL46::glClearBuffer*}, the framebuffer is the currently bound draw framebuffer object. For
     * {@see GL46::glClearNamedFramebuffer*}, $framebuffer is zero, indicating the default draw framebuffer, or the
     * name of a framebuffer object.
     *
     * $buffer and $drawbuffer identify the buffer to clear.
     *
     * If $buffer is {@see GL46::GL_COLOR}, a particular draw buffer {@see GL46::GL_DRAW_BUFFER}$i is specified by
     * passing $i as $drawbuffer, and $value points to a four-element vector specifying the R, G, B and A color to
     * clear that draw buffer to. If the value of {@see GL46::GL_DRAW_BUFFER}$i is {@see GL46::GL_NONE}, the command
     * has no effect. Otherwise, the value of {@see GL46::GL_DRAW_BUFFER}$i identifies one or more color buffers,
     * each of which is cleared to the same value. Clamping and type conversion for fixed-point color buffers are
     * performed in the same fashion as for {@see GL46::glClearColor}. The {@see GL46::*fv}, {@see GL46::*iv} and
     * {@see GL46::*uiv} forms of these commands should be used to clear fixed- and floating-point, signed integer,
     * and unsigned integer color buffers respectively.
     *
     * If $buffer is {@see GL46::GL_DEPTH}, $drawbuffer must be zero, and $value points to a single value to clear
     * the depth buffer to. Clamping and type conversion for fixed-point depth buffers are performed in the same
     * fashion as for {@see GL46::glClearDepth}. Only the {@see GL46::*fv} forms of these commands should be used to
     * clear depth buffers; other forms do not accept a $buffer of {@see GL46::GL_DEPTH}.
     *
     * If $buffer is {@see GL46::GL_STENCIL}, $drawbuffer must be zero, and $value points to a single value to clear
     * the stencil buffer to. Masking is performed in the same fashion as for {@see GL46::glClearStencil}. Only the
     * {@see GL46::*iv} forms of these commands should be used to clear stencil buffers; be used to clear stencil
     * buffers; other forms do not accept a $buffer of {@see GL46::GL_STENCIL}.
     *
     * {@see GL46::glClearBufferfi} and {@see GL46::glClearNamedFramebufferfi} are used to clear the depth and
     * stencil buffers simultaneously. $buffer must be {@see GL46::GL_DEPTH_STENCIL} and $drawbuffer must be zero.
     * $depth and $stencil are the values to clear the depth and stencil buffers to, respectively. Clamping and type
     * conversion of $depth for fixed-point depth buffers are performed in the same fashion as for
     * {@see GL46::glClearDepth}. Masking of $stencil for stencil buffers is performed in the same fashion as for
     * {@see GL46::glClearStencil}. These commands are equivalent to clearing the depth and stencil buffers
     * separately, but may be faster when a buffer of internal format {@see GL46::GL_DEPTH_STENCIL} is being cleared.
     * The same per-fragment and masking operations defined for {@see GL46::glClear} are applied.
     *
     * The result of these commands is undefined if no conversion between the type of the specified $value and the
     * type of the buffer being cleared is defined (for example, if {@see GL46::glClearBufferiv} is called for a
     * fixed- or floating-point buffer, or if {@see GL46::glClearBufferfv} is called for a signed or unsigned integer
     * buffer). This is not an error.
     *
     * @see http://docs.gl/gl4/glClearBuffer
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $buffer
     * @param int|\FFI\CData|\FFI\CInt $drawbuffer
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public function clearBufferuiv($buffer, $drawbuffer, ?\FFI\CData $value): void
    {
        $buffer = $buffer instanceof \FFI\CData ? $buffer->cdata : $buffer;
        $drawbuffer = $drawbuffer instanceof \FFI\CData ? $drawbuffer->cdata : $drawbuffer;

        assert(Type::isUint16($buffer), 'Argument $buffer must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isInt16($drawbuffer), 'Argument $drawbuffer must be a C-like GLint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glClearBufferuiv', 'void (*)(GLenum buffer, GLint drawbuffer, const GLuint *value)');
        $proc($buffer, $drawbuffer, $value);
    }

    /**
     * These commands clear a specified buffer of a framebuffer to specified value(s). For
     * {@see GL46::glClearBuffer*}, the framebuffer is the currently bound draw framebuffer object. For
     * {@see GL46::glClearNamedFramebuffer*}, $framebuffer is zero, indicating the default draw framebuffer, or the
     * name of a framebuffer object.
     *
     * $buffer and $drawbuffer identify the buffer to clear.
     *
     * If $buffer is {@see GL46::GL_COLOR}, a particular draw buffer {@see GL46::GL_DRAW_BUFFER}$i is specified by
     * passing $i as $drawbuffer, and $value points to a four-element vector specifying the R, G, B and A color to
     * clear that draw buffer to. If the value of {@see GL46::GL_DRAW_BUFFER}$i is {@see GL46::GL_NONE}, the command
     * has no effect. Otherwise, the value of {@see GL46::GL_DRAW_BUFFER}$i identifies one or more color buffers,
     * each of which is cleared to the same value. Clamping and type conversion for fixed-point color buffers are
     * performed in the same fashion as for {@see GL46::glClearColor}. The {@see GL46::*fv}, {@see GL46::*iv} and
     * {@see GL46::*uiv} forms of these commands should be used to clear fixed- and floating-point, signed integer,
     * and unsigned integer color buffers respectively.
     *
     * If $buffer is {@see GL46::GL_DEPTH}, $drawbuffer must be zero, and $value points to a single value to clear
     * the depth buffer to. Clamping and type conversion for fixed-point depth buffers are performed in the same
     * fashion as for {@see GL46::glClearDepth}. Only the {@see GL46::*fv} forms of these commands should be used to
     * clear depth buffers; other forms do not accept a $buffer of {@see GL46::GL_DEPTH}.
     *
     * If $buffer is {@see GL46::GL_STENCIL}, $drawbuffer must be zero, and $value points to a single value to clear
     * the stencil buffer to. Masking is performed in the same fashion as for {@see GL46::glClearStencil}. Only the
     * {@see GL46::*iv} forms of these commands should be used to clear stencil buffers; be used to clear stencil
     * buffers; other forms do not accept a $buffer of {@see GL46::GL_STENCIL}.
     *
     * {@see GL46::glClearBufferfi} and {@see GL46::glClearNamedFramebufferfi} are used to clear the depth and
     * stencil buffers simultaneously. $buffer must be {@see GL46::GL_DEPTH_STENCIL} and $drawbuffer must be zero.
     * $depth and $stencil are the values to clear the depth and stencil buffers to, respectively. Clamping and type
     * conversion of $depth for fixed-point depth buffers are performed in the same fashion as for
     * {@see GL46::glClearDepth}. Masking of $stencil for stencil buffers is performed in the same fashion as for
     * {@see GL46::glClearStencil}. These commands are equivalent to clearing the depth and stencil buffers
     * separately, but may be faster when a buffer of internal format {@see GL46::GL_DEPTH_STENCIL} is being cleared.
     * The same per-fragment and masking operations defined for {@see GL46::glClear} are applied.
     *
     * The result of these commands is undefined if no conversion between the type of the specified $value and the
     * type of the buffer being cleared is defined (for example, if {@see GL46::glClearBufferiv} is called for a
     * fixed- or floating-point buffer, or if {@see GL46::glClearBufferfv} is called for a signed or unsigned integer
     * buffer). This is not an error.
     *
     * @see http://docs.gl/gl4/glClearBuffer
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $buffer
     * @param int|\FFI\CData|\FFI\CInt $drawbuffer
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function clearBufferfv($buffer, $drawbuffer, ?\FFI\CData $value): void
    {
        $buffer = $buffer instanceof \FFI\CData ? $buffer->cdata : $buffer;
        $drawbuffer = $drawbuffer instanceof \FFI\CData ? $drawbuffer->cdata : $drawbuffer;

        assert(Type::isUint16($buffer), 'Argument $buffer must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isInt16($drawbuffer), 'Argument $drawbuffer must be a C-like GLint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glClearBufferfv', 'void (*)(GLenum buffer, GLint drawbuffer, const GLfloat *value)');
        $proc($buffer, $drawbuffer, $value);
    }

    /**
     * These commands clear a specified buffer of a framebuffer to specified value(s). For
     * {@see GL46::glClearBuffer*}, the framebuffer is the currently bound draw framebuffer object. For
     * {@see GL46::glClearNamedFramebuffer*}, $framebuffer is zero, indicating the default draw framebuffer, or the
     * name of a framebuffer object.
     *
     * $buffer and $drawbuffer identify the buffer to clear.
     *
     * If $buffer is {@see GL46::GL_COLOR}, a particular draw buffer {@see GL46::GL_DRAW_BUFFER}$i is specified by
     * passing $i as $drawbuffer, and $value points to a four-element vector specifying the R, G, B and A color to
     * clear that draw buffer to. If the value of {@see GL46::GL_DRAW_BUFFER}$i is {@see GL46::GL_NONE}, the command
     * has no effect. Otherwise, the value of {@see GL46::GL_DRAW_BUFFER}$i identifies one or more color buffers,
     * each of which is cleared to the same value. Clamping and type conversion for fixed-point color buffers are
     * performed in the same fashion as for {@see GL46::glClearColor}. The {@see GL46::*fv}, {@see GL46::*iv} and
     * {@see GL46::*uiv} forms of these commands should be used to clear fixed- and floating-point, signed integer,
     * and unsigned integer color buffers respectively.
     *
     * If $buffer is {@see GL46::GL_DEPTH}, $drawbuffer must be zero, and $value points to a single value to clear
     * the depth buffer to. Clamping and type conversion for fixed-point depth buffers are performed in the same
     * fashion as for {@see GL46::glClearDepth}. Only the {@see GL46::*fv} forms of these commands should be used to
     * clear depth buffers; other forms do not accept a $buffer of {@see GL46::GL_DEPTH}.
     *
     * If $buffer is {@see GL46::GL_STENCIL}, $drawbuffer must be zero, and $value points to a single value to clear
     * the stencil buffer to. Masking is performed in the same fashion as for {@see GL46::glClearStencil}. Only the
     * {@see GL46::*iv} forms of these commands should be used to clear stencil buffers; be used to clear stencil
     * buffers; other forms do not accept a $buffer of {@see GL46::GL_STENCIL}.
     *
     * {@see GL46::glClearBufferfi} and {@see GL46::glClearNamedFramebufferfi} are used to clear the depth and
     * stencil buffers simultaneously. $buffer must be {@see GL46::GL_DEPTH_STENCIL} and $drawbuffer must be zero.
     * $depth and $stencil are the values to clear the depth and stencil buffers to, respectively. Clamping and type
     * conversion of $depth for fixed-point depth buffers are performed in the same fashion as for
     * {@see GL46::glClearDepth}. Masking of $stencil for stencil buffers is performed in the same fashion as for
     * {@see GL46::glClearStencil}. These commands are equivalent to clearing the depth and stencil buffers
     * separately, but may be faster when a buffer of internal format {@see GL46::GL_DEPTH_STENCIL} is being cleared.
     * The same per-fragment and masking operations defined for {@see GL46::glClear} are applied.
     *
     * The result of these commands is undefined if no conversion between the type of the specified $value and the
     * type of the buffer being cleared is defined (for example, if {@see GL46::glClearBufferiv} is called for a
     * fixed- or floating-point buffer, or if {@see GL46::glClearBufferfv} is called for a signed or unsigned integer
     * buffer). This is not an error.
     *
     * @see http://docs.gl/gl4/glClearBuffer
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $buffer
     * @param int|\FFI\CData|\FFI\CInt $drawbuffer
     * @param float|\FFI\CData|\FFI\CFloat $depth
     * @param int|\FFI\CData|\FFI\CInt $stencil
     * @return void
     */
    public function clearBufferfi($buffer, $drawbuffer, $depth, $stencil): void
    {
        $buffer = $buffer instanceof \FFI\CData ? $buffer->cdata : $buffer;
        $drawbuffer = $drawbuffer instanceof \FFI\CData ? $drawbuffer->cdata : $drawbuffer;
        $depth = $depth instanceof \FFI\CData ? $depth->cdata : $depth;
        $stencil = $stencil instanceof \FFI\CData ? $stencil->cdata : $stencil;

        assert(Type::isUint16($buffer), 'Argument $buffer must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isInt16($drawbuffer), 'Argument $drawbuffer must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isFloat32($depth), 'Argument $depth must be a C-like GLfloat, but incompatible or overflow value given');
        assert(Type::isInt16($stencil), 'Argument $stencil must be a C-like GLint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glClearBufferfi', 'void (*)(GLenum buffer, GLint drawbuffer, GLfloat depth, GLint stencil)');
        $proc($buffer, $drawbuffer, $depth, $stencil);
    }

    /**
     * {@see GL46::glGetString} returns a pointer to a static string describing some aspect of the current GL
     * connection. $name can be one of the following:
     *
     *  - {@see GL46::GL_VENDOR}: Returns the company responsible for this GL
     *    implementation. This name does not change from release to
     *    release.
     *
     *  - {@see GL46::GL_RENDERER}: Returns the name of the renderer. This name
     *    is typically specific to a particular configuration of a hardware
     *    platform. It does not change from release to release.
     *
     *  - {@see GL46::GL_VERSION}: Returns a version or release number.
     *
     *  - {@see GL46::GL_SHADING_LANGUAGE_VERSION}: Returns a version or release
     *    number for the shading language.
     *
     * {@see GL46::glGetStringi} returns a pointer to a static string indexed by $index. $name can be one of the
     * following:
     *
     *  - {@see GL46::GL_EXTENSIONS}: For {@see GL46::glGetStringi} only,
     *    returns the extension string supported by the implementation at
     *    $index.
     *
     * Strings {@see GL46::GL_VENDOR} and {@see GL46::GL_RENDERER} together uniquely specify a platform. They do not
     * change from release to release and should be used by platform-recognition algorithms.
     *
     * The {@see GL46::GL_VERSION} and {@see GL46::GL_SHADING_LANGUAGE_VERSION} strings begin with a version number.
     * The version number uses one of these forms:
     *
     * major_number.minor_number major_number.minor_number.release_number
     *
     * Vendor-specific information may follow the version number. Its format depends on the implementation, but a
     * space always separates the version number and the vendor-specific information.
     *
     * All strings are null-terminated.
     *
     * @see http://docs.gl/gl2/glGetString
     * @see http://docs.gl/gl4/glGetString
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $name
     * @param int|\FFI\CData|\FFI\CInt $index
     * @return \FFI\CData|\FFI\CIntPtr|null
     */
    public function getStringi($name, $index): \FFI\CData
    {
        $name = $name instanceof \FFI\CData ? $name->cdata : $name;
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Type::isUint16($name), 'Argument $name must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetStringi', 'const GLubyte * (*)(GLenum name, GLuint index)');
        return $proc($name, $index);
    }

    /**
     * {@see GL46::glIsRenderbuffer} returns {@see GL46::GL_TRUE} if $renderbuffer is currently the name of a
     * renderbuffer object. If $renderbuffer is zero, or if $renderbuffer is not the name of a renderbuffer object,
     * or if an error occurs, {@see GL46::glIsRenderbuffer} returns {@see GL46::GL_FALSE}. If $renderbuffer is a name
     * returned by {@see GL46::glGenRenderbuffers}, by that has not yet been bound through a call to
     * {@see GL46::glBindRenderbuffer} or {@see GL46::glFramebufferRenderbuffer}, then the name is not a renderbuffer
     * object and {@see GL46::glIsRenderbuffer} returns {@see GL46::GL_FALSE}.
     *
     * @see http://docs.gl/gl4/glIsRenderbuffer
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $renderbuffer
     * @return int|\FFI\CData|\FFI\CInt
     */
    public function isRenderbuffer($renderbuffer): int
    {
        $renderbuffer = $renderbuffer instanceof \FFI\CData ? $renderbuffer->cdata : $renderbuffer;

        assert(Type::isUint16($renderbuffer), 'Argument $renderbuffer must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glIsRenderbuffer', 'GLboolean (*)(GLuint renderbuffer)');
        return $proc($renderbuffer);
    }

    /**
     * {@see GL46::glBindRenderbuffer} binds the renderbuffer object with name $renderbuffer to the renderbuffer
     * target specified by $target. $target must be {@see GL46::GL_RENDERBUFFER}. $renderbuffer is the name of a
     * renderbuffer object previously returned from a call to {@see GL46::glGenRenderbuffers}, or zero to break the
     * existing binding of a renderbuffer object to $target.
     *
     * @see http://docs.gl/gl4/glBindRenderbuffer
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $renderbuffer
     * @return void
     */
    public function bindRenderbuffer($target, $renderbuffer): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $renderbuffer = $renderbuffer instanceof \FFI\CData ? $renderbuffer->cdata : $renderbuffer;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($renderbuffer), 'Argument $renderbuffer must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glBindRenderbuffer', 'void (*)(GLenum target, GLuint renderbuffer)');
        $proc($target, $renderbuffer);
    }

    /**
     * {@see GL46::glDeleteRenderbuffers} deletes the $n renderbuffer objects whose names are stored in the array
     * addressed by $renderbuffers. The name zero is reserved by the GL and is silently ignored, should it occur in
     * $renderbuffers, as are other unused names. Once a renderbuffer object is deleted, its name is again unused and
     * it has no contents. If a renderbuffer that is currently bound to the target {@see GL46::GL_RENDERBUFFER} is
     * deleted, it is as though {@see GL46::glBindRenderbuffer} had been executed with a $target of
     * {@see GL46::GL_RENDERBUFFER} and a $name of zero.
     *
     * If a renderbuffer object is attached to one or more attachment points in the currently bound framebuffer, then
     * it as if {@see GL46::glFramebufferRenderbuffer} had been called, with a $renderbuffer of zero for each
     * attachment point to which this image was attached in the currently bound framebuffer. In other words, this
     * renderbuffer object is first detached from all attachment ponits in the currently bound framebuffer. Note that
     * the renderbuffer image is specifically not detached from any non-bound framebuffers.
     *
     * @see http://docs.gl/gl4/glDeleteRenderbuffers
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $n
     * @param \FFI\CData|\FFI\CIntPtr|null $renderbuffers
     * @return void
     */
    public function deleteRenderbuffers($n, ?\FFI\CData $renderbuffers): void
    {
        $n = $n instanceof \FFI\CData ? $n->cdata : $n;

        assert(Type::isInt16($n), 'Argument $n must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glDeleteRenderbuffers', 'void (*)(GLsizei n, const GLuint *renderbuffers)');
        $proc($n, $renderbuffers);
    }

    /**
     * {@see GL46::glGenRenderbuffers} returns $n renderbuffer object names in $renderbuffers. There is no guarantee
     * that the names form a contiguous set of integers; however, it is guaranteed that none of the returned names
     * was in use immediately before the call to {@see GL46::glGenRenderbuffers}.
     *
     * Renderbuffer object names returned by a call to {@see GL46::glGenRenderbuffers} are not returned by subsequent
     * calls, unless they are first deleted with {@see GL46::glDeleteRenderbuffers}.
     *
     * The names returned in $renderbuffers are marked as used, for the purposes of {@see GL46::glGenRenderbuffers}
     * only, but they acquire state and type only when they are first bound.
     *
     * @see http://docs.gl/gl4/glGenRenderbuffers
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $n
     * @param \FFI\CData|\FFI\CIntPtr|null $renderbuffers
     * @return void
     */
    public function genRenderbuffers($n, ?\FFI\CData $renderbuffers): void
    {
        $n = $n instanceof \FFI\CData ? $n->cdata : $n;

        assert(Type::isInt16($n), 'Argument $n must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGenRenderbuffers', 'void (*)(GLsizei n, GLuint *renderbuffers)');
        $proc($n, $renderbuffers);
    }

    /**
     * {@see GL46::glRenderbufferStorage} is equivalent to calling {@see GL46::glRenderbufferStorageMultisample} with
     * the $samples set to zero, and {@see GL46::glNamedRenderbufferStorage} is equivalent to calling
     * {@see GL46::glNamedRenderbufferStorageMultisample} with the samples set to zero.
     *
     * For {@see GL46::glRenderbufferStorage}, the target of the operation, specified by $target must be
     * {@see GL46::GL_RENDERBUFFER}. For {@see GL46::glNamedRenderbufferStorage}, $renderbuffer must be a name of an
     * existing renderbuffer object. $internalformat specifies the internal format to be used for the renderbuffer
     * object's storage and must be a color-renderable, depth-renderable, or stencil-renderable format. $width and
     * $height are the dimensions, in pixels, of the renderbuffer. Both $width and $height must be less than or equal
     * to the value of {@see GL46::GL_MAX_RENDERBUFFER_SIZE}.
     *
     * Upon success, {@see GL46::glRenderbufferStorage} and {@see GL46::glNamedRenderbufferStorage} delete any
     * existing data store for the renderbuffer image and the contents of the data store after calling
     * {@see GL46::glRenderbufferStorage} are undefined.
     *
     * @see http://docs.gl/gl4/glRenderbufferStorage
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $internalformat
     * @param int|\FFI\CData|\FFI\CInt $width
     * @param int|\FFI\CData|\FFI\CInt $height
     * @return void
     */
    public function renderbufferStorage($target, $internalformat, $width, $height): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $internalformat = $internalformat instanceof \FFI\CData ? $internalformat->cdata : $internalformat;
        $width = $width instanceof \FFI\CData ? $width->cdata : $width;
        $height = $height instanceof \FFI\CData ? $height->cdata : $height;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($internalformat), 'Argument $internalformat must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isInt16($width), 'Argument $width must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Type::isInt16($height), 'Argument $height must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glRenderbufferStorage', 'void (*)(GLenum target, GLenum internalformat, GLsizei width, GLsizei height)');
        $proc($target, $internalformat, $width, $height);
    }

    /**
     * {@see GL46::glGetRenderbufferParameteriv} and {@see GL46::glGetNamedRenderbufferParameteriv} query parameters
     * of a specified renderbuffer object.
     *
     * For {@see GL46::glGetRenderbufferParameteriv}, the renderbuffer object is that bound to $target, which must be
     * {@see GL46::GL_RENDERBUFFER}.
     *
     * For {@see GL46::glGetNamedRenderbufferParameteriv}, $renderbuffer is the name of the renderbuffer object.
     *
     * Upon successful return, $param will contain the value of the renderbuffer parameter specified by $pname, as
     * described below.
     *
     *  - {@see GL46::GL_RENDERBUFFER_WIDTH, GL_RENDERBUFFER_HEIGHT,
     *    GL_RENDERBUFFER_INTERNAL_FORMAT or GL_RENDERBUFFER_SAMPLES}: $params
     *    returns the width in pixels, the height in pixels, internal format, or
     *    the number of samples,
     *    respectively, of the image of the specified renderbuffer object.
     *
     *  - {@see GL46::GL_RENDERBUFFER_RED_SIZE, GL_RENDERBUFFER_GREEN_SIZE,
     *    GL_RENDERBUFFER_BLUE_SIZE, GL_RENDERBUFFER_ALPHA_SIZE,
     *    GL_RENDERBUFFER_DEPTH_SIZE or GL_RENDERBUFFER_STENCIL_SIZE}: $params
     *    returns the actual resolution in bits (not the resolution specified
     *    when the image was defined) for
     *    the red, green, blue, alpha, depth or stencil components,
     *    respectively, of the image of the renderbuffer
     *    object.
     *
     * @see http://docs.gl/gl4/glGetRenderbufferParameter
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public function getRenderbufferParameteriv($target, $pname, ?\FFI\CData $params): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetRenderbufferParameteriv', 'void (*)(GLenum target, GLenum pname, GLint *params)');
        $proc($target, $pname, $params);
    }

    /**
     * {@see GL46::glIsFramebuffer} returns {@see GL46::GL_TRUE} if $framebuffer is currently the name of a
     * framebuffer object. If $framebuffer is zero, or if {@see GL46::framebuffer} is not the name of a framebuffer
     * object, or if an error occurs, {@see GL46::glIsFramebuffer} returns {@see GL46::GL_FALSE}. If $framebuffer is
     * a name returned by {@see GL46::glGenFramebuffers}, by that has not yet been bound through a call to
     * {@see GL46::glBindFramebuffer}, then the name is not a framebuffer object and {@see GL46::glIsFramebuffer}
     * returns {@see GL46::GL_FALSE}.
     *
     * @see http://docs.gl/gl4/glIsFramebuffer
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $framebuffer
     * @return int|\FFI\CData|\FFI\CInt
     */
    public function isFramebuffer($framebuffer): int
    {
        $framebuffer = $framebuffer instanceof \FFI\CData ? $framebuffer->cdata : $framebuffer;

        assert(Type::isUint16($framebuffer), 'Argument $framebuffer must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glIsFramebuffer', 'GLboolean (*)(GLuint framebuffer)');
        return $proc($framebuffer);
    }

    /**
     * {@see GL46::glBindFramebuffer} binds the framebuffer object with name $framebuffer to the framebuffer target
     * specified by $target. $target must be either {@see GL46::GL_DRAW_FRAMEBUFFER},
     * {@see GL46::GL_READ_FRAMEBUFFER} or {@see GL46::GL_FRAMEBUFFER}. If a framebuffer object is bound to
     * {@see GL46::GL_DRAW_FRAMEBUFFER} or {@see GL46::GL_READ_FRAMEBUFFER}, it becomes the target for rendering or
     * readback operations, respectively, until it is deleted or another framebuffer is bound to the corresponding
     * bind point. Calling {@see GL46::glBindFramebuffer} with $target set to {@see GL46::GL_FRAMEBUFFER} binds
     * $framebuffer to both the read and draw framebuffer targets. $framebuffer is the name of a framebuffer object
     * previously returned from a call to {@see GL46::glGenFramebuffers}, or zero to break the existing binding of a
     * framebuffer object to $target.
     *
     * @see http://docs.gl/gl4/glBindFramebuffer
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $framebuffer
     * @return void
     */
    public function bindFramebuffer($target, $framebuffer): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $framebuffer = $framebuffer instanceof \FFI\CData ? $framebuffer->cdata : $framebuffer;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($framebuffer), 'Argument $framebuffer must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glBindFramebuffer', 'void (*)(GLenum target, GLuint framebuffer)');
        $proc($target, $framebuffer);
    }

    /**
     * {@see GL46::glDeleteFramebuffers} deletes the $n framebuffer objects whose names are stored in the array
     * addressed by $framebuffers. The name zero is reserved by the GL and is silently ignored, should it occur in
     * $framebuffers, as are other unused names. Once a framebuffer object is deleted, its name is again unused and
     * it has no attachments. If a framebuffer that is currently bound to one or more of the targets
     * {@see GL46::GL_DRAW_FRAMEBUFFER} or {@see GL46::GL_READ_FRAMEBUFFER} is deleted, it is as though
     * {@see GL46::glBindFramebuffer} had been executed with the corresponding $target and $framebuffer zero.
     *
     * @see http://docs.gl/gl4/glDeleteFramebuffers
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $n
     * @param \FFI\CData|\FFI\CIntPtr|null $framebuffers
     * @return void
     */
    public function deleteFramebuffers($n, ?\FFI\CData $framebuffers): void
    {
        $n = $n instanceof \FFI\CData ? $n->cdata : $n;

        assert(Type::isInt16($n), 'Argument $n must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glDeleteFramebuffers', 'void (*)(GLsizei n, const GLuint *framebuffers)');
        $proc($n, $framebuffers);
    }

    /**
     * {@see GL46::glGenFramebuffers} returns $n framebuffer object names in $ids. There is no guarantee that the
     * names form a contiguous set of integers; however, it is guaranteed that none of the returned names was in use
     * immediately before the call to {@see GL46::glGenFramebuffers}.
     *
     * Framebuffer object names returned by a call to {@see GL46::glGenFramebuffers} are not returned by subsequent
     * calls, unless they are first deleted with {@see GL46::glDeleteFramebuffers}.
     *
     * The names returned in $ids are marked as used, for the purposes of {@see GL46::glGenFramebuffers} only, but
     * they acquire state and type only when they are first bound.
     *
     * @see http://docs.gl/gl4/glGenFramebuffers
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $n
     * @param \FFI\CData|\FFI\CIntPtr|null $framebuffers
     * @return void
     */
    public function genFramebuffers($n, ?\FFI\CData $framebuffers): void
    {
        $n = $n instanceof \FFI\CData ? $n->cdata : $n;

        assert(Type::isInt16($n), 'Argument $n must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGenFramebuffers', 'void (*)(GLsizei n, GLuint *framebuffers)');
        $proc($n, $framebuffers);
    }

    /**
     * {@see GL46::glCheckFramebufferStatus} and {@see GL46::glCheckNamedFramebufferStatus} return the completeness
     * status of a framebuffer object when treated as a read or draw framebuffer, depending on the value of $target.
     *
     * For {@see GL46::glCheckFramebufferStatus}, the framebuffer checked is that bound to $target, which must be
     * {@see GL46::GL_DRAW_FRAMEBUFFER}, {@see GL46::GL_READ_FRAMEBUFFER} or {@see GL46::GL_FRAMEBUFFER}.
     * {@see GL46::GL_FRAMEBUFFER} is equivalent to {@see GL46::GL_DRAW_FRAMEBUFFER}.
     *
     * For {@see GL46::glCheckNamedFramebufferStatus}, $framebuffer is zero or the name of the framebuffer object to
     * check. If $framebuffer is zero, then the status of the default read or draw framebuffer, as determined by
     * $target, is returned.
     *
     * The return value is {@see GL46::GL_FRAMEBUFFER_COMPLETE} if the specified framebuffer is complete. Otherwise,
     * the return value is determined as follows:    {@see GL46::GL_FRAMEBUFFER_UNDEFINED} is returned if the
     * specified framebuffer is the default read or draw framebuffer, but the default framebuffer does not exist.
     * {@see GL46::GL_FRAMEBUFFER_INCOMPLETE_ATTACHMENT} is returned if any of the framebuffer attachment points are
     * framebuffer incomplete.     {@see GL46::GL_FRAMEBUFFER_INCOMPLETE_MISSING_ATTACHMENT} is returned if the
     * framebuffer does not have at least one image attached to it.
     * {@see GL46::GL_FRAMEBUFFER_INCOMPLETE_DRAW_BUFFER} is returned if the value of
     * {@see GL46::GL_FRAMEBUFFER_ATTACHMENT_OBJECT_TYPE} is {@see GL46::GL_NONE} for any color attachment point(s)
     * named by {@see GL46::GL_DRAW_BUFFERi}.     {@see GL46::GL_FRAMEBUFFER_INCOMPLETE_READ_BUFFER} is returned if
     * {@see GL46::GL_READ_BUFFER} is not {@see GL46::GL_NONE} and the value of
     * {@see GL46::GL_FRAMEBUFFER_ATTACHMENT_OBJECT_TYPE} is {@see GL46::GL_NONE} for the color attachment point
     * named by {@see GL46::GL_READ_BUFFER}.     {@see GL46::GL_FRAMEBUFFER_UNSUPPORTED} is returned if the
     * combination of internal formats of the attached images violates an implementation-dependent set of
     * restrictions.     {@see GL46::GL_FRAMEBUFFER_INCOMPLETE_MULTISAMPLE} is returned if the value of
     * {@see GL46::GL_RENDERBUFFER_SAMPLES} is not the same for all attached renderbuffers; if the value of
     * {@see GL46::GL_TEXTURE_SAMPLES} is the not same for all attached textures; or, if the attached images are a
     * mix of renderbuffers and textures, the value of {@see GL46::GL_RENDERBUFFER_SAMPLES} does not match the value
     * of {@see GL46::GL_TEXTURE_SAMPLES}.     {@see GL46::GL_FRAMEBUFFER_INCOMPLETE_MULTISAMPLE} is also returned if
     * the value of {@see GL46::GL_TEXTURE_FIXED_SAMPLE_LOCATIONS} is not the same for all attached textures; or, if
     * the attached images are a mix of renderbuffers and textures, the value of
     * {@see GL46::GL_TEXTURE_FIXED_SAMPLE_LOCATIONS} is not {@see GL46::GL_TRUE} for all attached textures.
     * {@see GL46::GL_FRAMEBUFFER_INCOMPLETE_LAYER_TARGETS} is returned if any framebuffer attachment is layered, and
     * any populated attachment is not layered, or if all populated color attachments are not from textures of the
     * same target.
     *
     * Additionally, if an error occurs, zero is returned.
     *
     * @see http://docs.gl/gl4/glCheckFramebufferStatus
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $target
     * @return int|\FFI\CData|\FFI\CInt
     */
    public function checkFramebufferStatus($target): int
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glCheckFramebufferStatus', 'GLenum (*)(GLenum target)');
        return $proc($target);
    }

    /**
     * These commands attach a selected mipmap level or image of a texture object as one of the logical buffers of
     * the specified framebuffer object. Textures cannot be attached to the default draw and read framebuffer, so
     * they are not valid targets of these commands.
     *
     * For all commands except {@see GL46::glNamedFramebufferTexture}, the framebuffer object is that bound to
     * $target, which must be {@see GL46::GL_DRAW_FRAMEBUFFER}, {@see GL46::GL_READ_FRAMEBUFFER}, or
     * {@see GL46::GL_FRAMEBUFFER}. {@see GL46::GL_FRAMEBUFFER} is equivalent to {@see GL46::GL_DRAW_FRAMEBUFFER}.
     *
     * For {@see GL46::glNamedFramebufferTexture}, $framebuffer is the name of the framebuffer object.
     *
     * $attachment specifies the logical attachment of the framebuffer and must be {@see GL46::GL_COLOR_ATTACHMENT}i,
     * {@see GL46::GL_DEPTH_ATTACHMENT}, {@see GL46::GL_STENCIL_ATTACHMENT} or
     * {@see GL46::GL_DEPTH_STENCIL_ATTACHMENT}. i in {@see GL46::GL_COLOR_ATTACHMENT}i may range from zero to the
     * value of {@see GL46::GL_MAX_COLOR_ATTACHMENTS} minus one. Attaching a level of a texture to
     * {@see GL46::GL_DEPTH_STENCIL_ATTACHMENT} is equivalent to attaching that level to both the
     * {@see GL46::GL_DEPTH_ATTACHMENT} and the {@see GL46::GL_STENCIL_ATTACHMENT} attachment points simultaneously.
     *
     * For {@see GL46::glFramebufferTexture1D}, {@see GL46::glFramebufferTexture2D} and
     * {@see GL46::glFramebufferTexture3D}, $textarget specifies what type of texture is named by $texture, and for
     * cube map textures, specifies the face that is to be attached. If $texture is not zero, it must be the name of
     * an existing texture object with effective target $textarget unless it is a cube map texture, in which case
     * $textarget must be {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_X} {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_X},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_Y}, {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_Y},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_Z}, or {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_Z}.
     *
     * If $texture is non-zero, the specified $level of the texture object named $texture is attached to the
     * framebfufer attachment point named by $attachment. For {@see GL46::glFramebufferTexture1D},
     * {@see GL46::glFramebufferTexture2D}, and {@see GL46::glFramebufferTexture3D}, $texture must be zero or the
     * name of an existing texture with an effective target of $textarget, or $texture must be the name of an
     * existing cube-map texture and $textarget must be one of {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_X},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_Y}, {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_Z},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_X}, {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_Y}, or
     * {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_Z}.
     *
     * If $textarget is {@see GL46::GL_TEXTURE_RECTANGLE}, {@see GL46::GL_TEXTURE_2D_MULTISAMPLE}, or
     * {@see GL46::GL_TEXTURE_2D_MULTISAMPLE_ARRAY}, then $level must be zero.
     *
     * If $textarget is {@see GL46::GL_TEXTURE_3D}, then $level must be greater than or equal to zero and less than
     * or equal to $log_2$ of the value of {@see GL46::GL_MAX_3D_TEXTURE_SIZE}.
     *
     * If $textarget is one of {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_X},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_Y}, {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_Z},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_X}, {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_Y}, or
     * {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_Z}, then $level must be greater than or equal to zero and less than
     * or equal to $log_2$ of the value of {@see GL46::GL_MAX_CUBE_MAP_TEXTURE_SIZE}.
     *
     * For all other values of $textarget, $level must be greater than or equal to zero and less than or equal to
     * $log_2$ of the value of {@see GL46::GL_MAX_TEXTURE_SIZE}.
     *
     * $layer specifies the layer of a 2-dimensional image within a 3-dimensional texture.
     *
     * For {@see GL46::glFramebufferTexture1D}, if $texture is not zero, then $textarget must be
     * {@see GL46::GL_TEXTURE_1D}. For {@see GL46::glFramebufferTexture2D}, if $texture is not zero, $textarget must
     * be one of {@see GL46::GL_TEXTURE_2D}, {@see GL46::GL_TEXTURE_RECTANGLE},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_X}, {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_Y},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_Z}, {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_X},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_Y}, {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_Z}, or
     * {@see GL46::GL_TEXTURE_2D_MULTISAMPLE}. For {@see GL46::glFramebufferTexture3D}, if $texture is not zero, then
     * $textarget must be {@see GL46::GL_TEXTURE_3D}.
     *
     * For {@see GL46::glFramebufferTexture} and {@see GL46::glNamedFramebufferTexture}, if $texture is the name of a
     * three-dimensional, cube map array, cube map, one- or two-dimensional array, or two-dimensional multisample
     * array texture, the specified texture level is an array of images, and the framebuffer attachment is considered
     * to be layered.
     *
     * @see http://docs.gl/gl4/glFramebufferTexture
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $attachment
     * @param int|\FFI\CData|\FFI\CInt $textarget
     * @param int|\FFI\CData|\FFI\CInt $texture
     * @param int|\FFI\CData|\FFI\CInt $level
     * @return void
     */
    public function framebufferTexture1D($target, $attachment, $textarget, $texture, $level): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $attachment = $attachment instanceof \FFI\CData ? $attachment->cdata : $attachment;
        $textarget = $textarget instanceof \FFI\CData ? $textarget->cdata : $textarget;
        $texture = $texture instanceof \FFI\CData ? $texture->cdata : $texture;
        $level = $level instanceof \FFI\CData ? $level->cdata : $level;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($attachment), 'Argument $attachment must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($textarget), 'Argument $textarget must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($texture), 'Argument $texture must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isInt16($level), 'Argument $level must be a C-like GLint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glFramebufferTexture1D', 'void (*)(GLenum target, GLenum attachment, GLenum textarget, GLuint texture, GLint level)');
        $proc($target, $attachment, $textarget, $texture, $level);
    }

    /**
     * These commands attach a selected mipmap level or image of a texture object as one of the logical buffers of
     * the specified framebuffer object. Textures cannot be attached to the default draw and read framebuffer, so
     * they are not valid targets of these commands.
     *
     * For all commands except {@see GL46::glNamedFramebufferTexture}, the framebuffer object is that bound to
     * $target, which must be {@see GL46::GL_DRAW_FRAMEBUFFER}, {@see GL46::GL_READ_FRAMEBUFFER}, or
     * {@see GL46::GL_FRAMEBUFFER}. {@see GL46::GL_FRAMEBUFFER} is equivalent to {@see GL46::GL_DRAW_FRAMEBUFFER}.
     *
     * For {@see GL46::glNamedFramebufferTexture}, $framebuffer is the name of the framebuffer object.
     *
     * $attachment specifies the logical attachment of the framebuffer and must be {@see GL46::GL_COLOR_ATTACHMENT}i,
     * {@see GL46::GL_DEPTH_ATTACHMENT}, {@see GL46::GL_STENCIL_ATTACHMENT} or
     * {@see GL46::GL_DEPTH_STENCIL_ATTACHMENT}. i in {@see GL46::GL_COLOR_ATTACHMENT}i may range from zero to the
     * value of {@see GL46::GL_MAX_COLOR_ATTACHMENTS} minus one. Attaching a level of a texture to
     * {@see GL46::GL_DEPTH_STENCIL_ATTACHMENT} is equivalent to attaching that level to both the
     * {@see GL46::GL_DEPTH_ATTACHMENT} and the {@see GL46::GL_STENCIL_ATTACHMENT} attachment points simultaneously.
     *
     * For {@see GL46::glFramebufferTexture1D}, {@see GL46::glFramebufferTexture2D} and
     * {@see GL46::glFramebufferTexture3D}, $textarget specifies what type of texture is named by $texture, and for
     * cube map textures, specifies the face that is to be attached. If $texture is not zero, it must be the name of
     * an existing texture object with effective target $textarget unless it is a cube map texture, in which case
     * $textarget must be {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_X} {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_X},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_Y}, {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_Y},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_Z}, or {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_Z}.
     *
     * If $texture is non-zero, the specified $level of the texture object named $texture is attached to the
     * framebfufer attachment point named by $attachment. For {@see GL46::glFramebufferTexture1D},
     * {@see GL46::glFramebufferTexture2D}, and {@see GL46::glFramebufferTexture3D}, $texture must be zero or the
     * name of an existing texture with an effective target of $textarget, or $texture must be the name of an
     * existing cube-map texture and $textarget must be one of {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_X},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_Y}, {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_Z},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_X}, {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_Y}, or
     * {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_Z}.
     *
     * If $textarget is {@see GL46::GL_TEXTURE_RECTANGLE}, {@see GL46::GL_TEXTURE_2D_MULTISAMPLE}, or
     * {@see GL46::GL_TEXTURE_2D_MULTISAMPLE_ARRAY}, then $level must be zero.
     *
     * If $textarget is {@see GL46::GL_TEXTURE_3D}, then $level must be greater than or equal to zero and less than
     * or equal to $log_2$ of the value of {@see GL46::GL_MAX_3D_TEXTURE_SIZE}.
     *
     * If $textarget is one of {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_X},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_Y}, {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_Z},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_X}, {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_Y}, or
     * {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_Z}, then $level must be greater than or equal to zero and less than
     * or equal to $log_2$ of the value of {@see GL46::GL_MAX_CUBE_MAP_TEXTURE_SIZE}.
     *
     * For all other values of $textarget, $level must be greater than or equal to zero and less than or equal to
     * $log_2$ of the value of {@see GL46::GL_MAX_TEXTURE_SIZE}.
     *
     * $layer specifies the layer of a 2-dimensional image within a 3-dimensional texture.
     *
     * For {@see GL46::glFramebufferTexture1D}, if $texture is not zero, then $textarget must be
     * {@see GL46::GL_TEXTURE_1D}. For {@see GL46::glFramebufferTexture2D}, if $texture is not zero, $textarget must
     * be one of {@see GL46::GL_TEXTURE_2D}, {@see GL46::GL_TEXTURE_RECTANGLE},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_X}, {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_Y},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_Z}, {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_X},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_Y}, {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_Z}, or
     * {@see GL46::GL_TEXTURE_2D_MULTISAMPLE}. For {@see GL46::glFramebufferTexture3D}, if $texture is not zero, then
     * $textarget must be {@see GL46::GL_TEXTURE_3D}.
     *
     * For {@see GL46::glFramebufferTexture} and {@see GL46::glNamedFramebufferTexture}, if $texture is the name of a
     * three-dimensional, cube map array, cube map, one- or two-dimensional array, or two-dimensional multisample
     * array texture, the specified texture level is an array of images, and the framebuffer attachment is considered
     * to be layered.
     *
     * @see http://docs.gl/gl4/glFramebufferTexture
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $attachment
     * @param int|\FFI\CData|\FFI\CInt $textarget
     * @param int|\FFI\CData|\FFI\CInt $texture
     * @param int|\FFI\CData|\FFI\CInt $level
     * @return void
     */
    public function framebufferTexture2D($target, $attachment, $textarget, $texture, $level): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $attachment = $attachment instanceof \FFI\CData ? $attachment->cdata : $attachment;
        $textarget = $textarget instanceof \FFI\CData ? $textarget->cdata : $textarget;
        $texture = $texture instanceof \FFI\CData ? $texture->cdata : $texture;
        $level = $level instanceof \FFI\CData ? $level->cdata : $level;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($attachment), 'Argument $attachment must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($textarget), 'Argument $textarget must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($texture), 'Argument $texture must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isInt16($level), 'Argument $level must be a C-like GLint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glFramebufferTexture2D', 'void (*)(GLenum target, GLenum attachment, GLenum textarget, GLuint texture, GLint level)');
        $proc($target, $attachment, $textarget, $texture, $level);
    }

    /**
     * These commands attach a selected mipmap level or image of a texture object as one of the logical buffers of
     * the specified framebuffer object. Textures cannot be attached to the default draw and read framebuffer, so
     * they are not valid targets of these commands.
     *
     * For all commands except {@see GL46::glNamedFramebufferTexture}, the framebuffer object is that bound to
     * $target, which must be {@see GL46::GL_DRAW_FRAMEBUFFER}, {@see GL46::GL_READ_FRAMEBUFFER}, or
     * {@see GL46::GL_FRAMEBUFFER}. {@see GL46::GL_FRAMEBUFFER} is equivalent to {@see GL46::GL_DRAW_FRAMEBUFFER}.
     *
     * For {@see GL46::glNamedFramebufferTexture}, $framebuffer is the name of the framebuffer object.
     *
     * $attachment specifies the logical attachment of the framebuffer and must be {@see GL46::GL_COLOR_ATTACHMENT}i,
     * {@see GL46::GL_DEPTH_ATTACHMENT}, {@see GL46::GL_STENCIL_ATTACHMENT} or
     * {@see GL46::GL_DEPTH_STENCIL_ATTACHMENT}. i in {@see GL46::GL_COLOR_ATTACHMENT}i may range from zero to the
     * value of {@see GL46::GL_MAX_COLOR_ATTACHMENTS} minus one. Attaching a level of a texture to
     * {@see GL46::GL_DEPTH_STENCIL_ATTACHMENT} is equivalent to attaching that level to both the
     * {@see GL46::GL_DEPTH_ATTACHMENT} and the {@see GL46::GL_STENCIL_ATTACHMENT} attachment points simultaneously.
     *
     * For {@see GL46::glFramebufferTexture1D}, {@see GL46::glFramebufferTexture2D} and
     * {@see GL46::glFramebufferTexture3D}, $textarget specifies what type of texture is named by $texture, and for
     * cube map textures, specifies the face that is to be attached. If $texture is not zero, it must be the name of
     * an existing texture object with effective target $textarget unless it is a cube map texture, in which case
     * $textarget must be {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_X} {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_X},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_Y}, {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_Y},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_Z}, or {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_Z}.
     *
     * If $texture is non-zero, the specified $level of the texture object named $texture is attached to the
     * framebfufer attachment point named by $attachment. For {@see GL46::glFramebufferTexture1D},
     * {@see GL46::glFramebufferTexture2D}, and {@see GL46::glFramebufferTexture3D}, $texture must be zero or the
     * name of an existing texture with an effective target of $textarget, or $texture must be the name of an
     * existing cube-map texture and $textarget must be one of {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_X},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_Y}, {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_Z},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_X}, {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_Y}, or
     * {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_Z}.
     *
     * If $textarget is {@see GL46::GL_TEXTURE_RECTANGLE}, {@see GL46::GL_TEXTURE_2D_MULTISAMPLE}, or
     * {@see GL46::GL_TEXTURE_2D_MULTISAMPLE_ARRAY}, then $level must be zero.
     *
     * If $textarget is {@see GL46::GL_TEXTURE_3D}, then $level must be greater than or equal to zero and less than
     * or equal to $log_2$ of the value of {@see GL46::GL_MAX_3D_TEXTURE_SIZE}.
     *
     * If $textarget is one of {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_X},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_Y}, {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_Z},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_X}, {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_Y}, or
     * {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_Z}, then $level must be greater than or equal to zero and less than
     * or equal to $log_2$ of the value of {@see GL46::GL_MAX_CUBE_MAP_TEXTURE_SIZE}.
     *
     * For all other values of $textarget, $level must be greater than or equal to zero and less than or equal to
     * $log_2$ of the value of {@see GL46::GL_MAX_TEXTURE_SIZE}.
     *
     * $layer specifies the layer of a 2-dimensional image within a 3-dimensional texture.
     *
     * For {@see GL46::glFramebufferTexture1D}, if $texture is not zero, then $textarget must be
     * {@see GL46::GL_TEXTURE_1D}. For {@see GL46::glFramebufferTexture2D}, if $texture is not zero, $textarget must
     * be one of {@see GL46::GL_TEXTURE_2D}, {@see GL46::GL_TEXTURE_RECTANGLE},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_X}, {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_Y},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_Z}, {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_X},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_Y}, {@see GL46::GL_TEXTURE_CUBE_MAP_NEGATIVE_Z}, or
     * {@see GL46::GL_TEXTURE_2D_MULTISAMPLE}. For {@see GL46::glFramebufferTexture3D}, if $texture is not zero, then
     * $textarget must be {@see GL46::GL_TEXTURE_3D}.
     *
     * For {@see GL46::glFramebufferTexture} and {@see GL46::glNamedFramebufferTexture}, if $texture is the name of a
     * three-dimensional, cube map array, cube map, one- or two-dimensional array, or two-dimensional multisample
     * array texture, the specified texture level is an array of images, and the framebuffer attachment is considered
     * to be layered.
     *
     * @see http://docs.gl/gl4/glFramebufferTexture
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $attachment
     * @param int|\FFI\CData|\FFI\CInt $textarget
     * @param int|\FFI\CData|\FFI\CInt $texture
     * @param int|\FFI\CData|\FFI\CInt $level
     * @param int|\FFI\CData|\FFI\CInt $zoffset
     * @return void
     */
    public function framebufferTexture3D($target, $attachment, $textarget, $texture, $level, $zoffset): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $attachment = $attachment instanceof \FFI\CData ? $attachment->cdata : $attachment;
        $textarget = $textarget instanceof \FFI\CData ? $textarget->cdata : $textarget;
        $texture = $texture instanceof \FFI\CData ? $texture->cdata : $texture;
        $level = $level instanceof \FFI\CData ? $level->cdata : $level;
        $zoffset = $zoffset instanceof \FFI\CData ? $zoffset->cdata : $zoffset;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($attachment), 'Argument $attachment must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($textarget), 'Argument $textarget must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($texture), 'Argument $texture must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isInt16($level), 'Argument $level must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($zoffset), 'Argument $zoffset must be a C-like GLint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glFramebufferTexture3D', 'void (*)(GLenum target, GLenum attachment, GLenum textarget, GLuint texture, GLint level, GLint zoffset)');
        $proc($target, $attachment, $textarget, $texture, $level, $zoffset);
    }

    /**
     * {@see GL46::glFramebufferRenderbuffer} and {@see GL46::glNamedFramebufferRenderbuffer} attaches a renderbuffer
     * as one of the logical buffers of the specified framebuffer object. Renderbuffers cannot be attached to the
     * default draw and read framebuffer, so they are not valid targets of these commands.
     *
     * For {@see GL46::glFramebufferRenderbuffer}, the framebuffer object is that bound to $target, which must be
     * {@see GL46::GL_DRAW_FRAMEBUFFER}, {@see GL46::GL_READ_FRAMEBUFFER} or {@see GL46::GL_FRAMEBUFFER}.
     * {@see GL46::GL_FRAMEBUFFER} is equivalent to {@see GL46::GL_DRAW_FRAMEBUFFER}.
     *
     * For {@see GL46::glNamedFramebufferRenderbuffer}, $framebuffer is the name of the framebuffer object.
     *
     * $renderbuffertarget must be {@see GL46::GL_RENDERBUFFER}.
     *
     * $renderbuffer must be zero or the name of an existing renderbuffer object of type $renderbuffertarget. If
     * $renderbuffer is not zero, then the specified renderbuffer will be used as the logical buffer identified by
     * $attachment of the specified framebuffer object. If $renderbuffer is zero, then the value of
     * $renderbuffertarget is ignored.
     *
     * $attachment specifies the logical attachment of the framebuffer and must be {@see GL46::GL_COLOR_ATTACHMENT}i,
     * {@see GL46::GL_DEPTH_ATTACHMENT}, {@see GL46::GL_STENCIL_ATTACHMENT} or
     * {@see GL46::GL_DEPTH_STENCIL_ATTACHMENT}. i in may range from zero to the value of
     * {@see GL46::GL_MAX_COLOR_ATTACHMENTS} minus one. Setting $attachment to the value
     * {@see GL46::GL_DEPTH_STENCIL_ATTACHMENT} is a special case causing both the depth and stencil attachments of
     * the specified framebuffer object to be set to $renderbuffer, which should have the base internal format
     * {@see GL46::GL_DEPTH_STENCIL}.
     *
     * The value of {@see GL46::GL_FRAMEBUFFER_ATTACHMENT_OBJECT_TYPE} for the specified attachment point is set to
     * {@see GL46::GL_RENDERBUFFER} and the value of {@see GL46::GL_FRAMEBUFFER_ATTACHMENT_OBJECT_NAME} is set to
     * $renderbuffer. All other state values of specified attachment point are set to their default values. No change
     * is made to the state of the renderbuuffer object and any previous attachment to the $attachment logical buffer
     * of the specified framebuffer object is broken.
     *
     * If $renderbuffer is zero, these commands will detach the image, if any, identified by the specified attachment
     * point of the specified framebuffer object. All state values of the attachment point are set to their default
     * values.
     *
     * @see http://docs.gl/gl4/glFramebufferRenderbuffer
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $attachment
     * @param int|\FFI\CData|\FFI\CInt $renderbuffertarget
     * @param int|\FFI\CData|\FFI\CInt $renderbuffer
     * @return void
     */
    public function framebufferRenderbuffer($target, $attachment, $renderbuffertarget, $renderbuffer): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $attachment = $attachment instanceof \FFI\CData ? $attachment->cdata : $attachment;
        $renderbuffertarget = $renderbuffertarget instanceof \FFI\CData ? $renderbuffertarget->cdata : $renderbuffertarget;
        $renderbuffer = $renderbuffer instanceof \FFI\CData ? $renderbuffer->cdata : $renderbuffer;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($attachment), 'Argument $attachment must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($renderbuffertarget), 'Argument $renderbuffertarget must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($renderbuffer), 'Argument $renderbuffer must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glFramebufferRenderbuffer', 'void (*)(GLenum target, GLenum attachment, GLenum renderbuffertarget, GLuint renderbuffer)');
        $proc($target, $attachment, $renderbuffertarget, $renderbuffer);
    }

    /**
     * {@see GL46::glGetFramebufferAttachmentParameteriv} and {@see GL46::glGetNamedFramebufferAttachmentParameteriv}
     * return parameters of attachments of a specified framebuffer object.
     *
     * For {@see GL46::glGetFramebufferAttachmentParameteriv}, the framebuffer object is that bound to $target, which
     * must be one of {@see GL46::GL_DRAW_FRAMEBUFFER}, {@see GL46::GL_READ_FRAMEBUFFER} or
     * {@see GL46::GL_FRAMEBUFFER}. {@see GL46::GL_FRAMEBUFFER} is equivalent to {@see GL46::GL_DRAW_FRAMEBUFFER}.
     * Buffers of default framebuffers may also be queried if bound to $target.
     *
     * For {@see GL46::glGetNamedFramebufferAttachmentParameteriv}, $framebuffer is the name of the framebuffer
     * object. If $framebuffer is zero, the default draw framebuffer is queried.
     *
     * If the specified framebuffer is a framebuffer object, $attachment must be one of
     * {@see GL46::GL_DEPTH_ATTACHMENT}, {@see GL46::GL_STENCIL_ATTACHMENT} {@see GL46::GL_DEPTH_STENCIL_ATTACHMENT},
     * or {@see GL46::GL_COLOR_ATTACHMENT}i, where i is between zero and the value of
     * {@see GL46::GL_MAX_COLOR_ATTACHMENTS} minus one.
     *
     * If the specified framebuffer is a default framebuffer, $target, $attachment must be one of
     * {@see GL46::GL_FRONT_LEFT}, {@see GL46::GL_FRONT_RIGHT}, {@see GL46::GL_BACK_LEFT},
     * {@see GL46::GL_BACK_RIGHT}, {@see GL46::GL_DEPTH} or {@see GL46::GL_STENCIL}, identifying the corresponding
     * buffer.
     *
     * If $attachment is {@see GL46::GL_DEPTH_STENCIL_ATTACHMENT}, the same object must be bound to both the depth
     * and stencil attachment points of the framebuffer object, and information about that object is returned.
     *
     * Upon successful return, if $pname is {@see GL46::GL_FRAMEBUFFER_ATTACHMENT_OBJECT_TYPE}, then $params will
     * contain one of {@see GL46::GL_NONE}, {@see GL46::GL_FRAMEBUFFER_DEFAULT}, {@see GL46::GL_TEXTURE}, or
     * {@see GL46::GL_RENDERBUFFER}, identifying the type of object which contains the attached image. Other values
     * accepted for $pname depend on the type of object, as described below.
     *
     * If the value of {@see GL46::GL_FRAMEBUFFER_ATTACHMENT_OBJECT_TYPE} is {@see GL46::GL_NONE}, then either no
     * framebuffer is bound to $target; or a default framebuffer is queried, $attachment is {@see GL46::GL_DEPTH} or
     * {@see GL46::GL_STENCIL}, and the number of depth or stencil bits, respectively, is zero. In this case querying
     * $pname {@see GL46::GL_FRAMEBUFFER_ATTACHMENT_OBJECT_NAME} will return zero, and all other queries will
     * generate an error.
     *
     * If the value of {@see GL46::GL_FRAMEBUFFER_ATTACHMENT_OBJECT_TYPE} is not {@see GL46::GL_NONE}, these queries
     * apply to all other framebuffer types:
     *
     *  -  If $pname is {@see GL46::GL_FRAMEBUFFER_ATTACHMENT_RED_SIZE},
     *    {@see GL46::GL_FRAMEBUFFER_ATTACHMENT_GREEN_SIZE}, {@see GL46::GL_FRAMEBUFFER_ATTACHMENT_BLUE_SIZE},
     *    {@see GL46::GL_FRAMEBUFFER_ATTACHMENT_ALPHA_SIZE}, {@see GL46::GL_FRAMEBUFFER_ATTACHMENT_DEPTH_SIZE} or
     *    {@see GL46::GL_FRAMEBUFFER_ATTACHMENT_STENCIL_SIZE}, then $params will contain the number of bits in the
     *    corresponding red, green, blue, alpha, depth, or stencil component of the specified attachment. If the
     *    requested component is not present in the attachment, or if no data storage or texture image has been
     *    specified for the attachment, then $params will contain zero.
     *  -  If $pname is {@see GL46::GL_FRAMEBUFFER_ATTACHMENT_COMPONENT_TYPE}, then $params will contain the format of
     *    components of the specified attachment, one of {@see GL46::GL_FLOAT}, {@see GL46::GL_INT},
     *    {@see GL46::GL_UNSIGNED_INT}, {@see GL46::GL_SIGNED_NORMALIZED}, or {@see GL46::GL_UNSIGNED_NORMALIZED} for
     *    floating-point, signed integer, unsigned integer, signed normalized fixed-point, or unsigned normalized
     *    fixed-point components respectively. Only color buffers may have integer components. If no data storage or
     *    texture image has been specified for the attachment, then $params will contain {@see GL46::GL_NONE}. This
     *    query cannot be performed for a combined depth+stencil attachment, since it does not have a single format.
     *  -  If $pname is {@see GL46::GL_FRAMEBUFFER_ATTACHMENT_COLOR_ENCODING}, then $params will contain the encoding of
     *    components of the specified attachment, one of {@see GL46::GL_LINEAR} or {@see GL46::GL_SRGB} for linear or
     *    sRGB-encoded components, respectively. Only color buffer components may be sRGB-encoded; such components are
     *    treated as described in the OpenGL Specification. For a default framebuffer, color encoding is determined by
     *    the implementation. For framebuffer objects, components are sRGB-encoded if the internal format of a color
     *    attachment is one of the color-renderable SRGB formats. If the attachment is not a color attachment, or if no
     *    data storage or texture image has been specified for the attachment, then $params will contain
     *    {@see GL46::GL_LINEAR}.
     *
     * If the value of {@see GL46::GL_FRAMEBUFFER_ATTACHMENT_OBJECT_TYPE} is {@see GL46::GL_RENDERBUFFER}, then
     *
     *  -  If $pname is {@see GL46::GL_FRAMEBUFFER_ATTACHMENT_OBJECT_NAME}, $params will contain the name of the
     *    renderbuffer object which contains the attached image.
     *
     * If the value of {@see GL46::GL_FRAMEBUFFER_ATTACHMENT_OBJECT_TYPE} is {@see GL46::GL_TEXTURE}, then
     *
     *  -  If $pname is {@see GL46::GL_FRAMEBUFFER_ATTACHMENT_OBJECT_NAME}, then $params will contain the name of the
     *    texture object which contains the attached image.
     *  -  If $pname is {@see GL46::GL_FRAMEBUFFER_ATTACHMENT_TEXTURE_LEVEL}, then $params will contain the mipmap level
     *    of the texture object which contains the attached image.
     *  -  If $pname is {@see GL46::GL_FRAMEBUFFER_ATTACHMENT_TEXTURE_CUBE_MAP_FACE} and the value of
     *    {@see GL46::GL_FRAMEBUFFER_ATTACHMENT_OBJECT_NAME} is the name of a cube map texture object, then $params will
     *    contain the cube map face of the cubemap texture object which contains the attached image. Otherwise $params
     *    will contain zero.
     *  -  If $pname is {@see GL46::GL_FRAMEBUFFER_ATTACHMENT_LAYERED}, then $params will contain {@see GL46::GL_TRUE}
     *    if an entire level of a three-dimensional texture, cube map texture, or one-or two-dimensional array texture
     *    is attached. Otherwise, $params will contain {@see GL46::GL_FALSE}.
     *  -  If $pname is {@see GL46::GL_FRAMEBUFFER_ATTACHMENT_TEXTURE_LAYER}; the value of
     *    {@see GL46::GL_FRAMEBUFFER_ATTACHMENT_OBJECT_NAME} is the name of a three-dimensional, or a one- or
     *    two-dimensional array texture; and the value of {@see GL46::GL_FRAMEBUFFER_ATTACHMENT_LAYERED} is
     *    {@see GL46::GL_FALSE}, then $params will contain the texture layer which contains the attached image.
     *    Otherwise $params will contain zero.
     *
     * @see http://docs.gl/gl4/glGetFramebufferAttachmentParameter
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $attachment
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public function getFramebufferAttachmentParameteriv($target, $attachment, $pname, ?\FFI\CData $params): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $attachment = $attachment instanceof \FFI\CData ? $attachment->cdata : $attachment;
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($attachment), 'Argument $attachment must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetFramebufferAttachmentParameteriv', 'void (*)(GLenum target, GLenum attachment, GLenum pname, GLint *params)');
        $proc($target, $attachment, $pname, $params);
    }

    /**
     * {@see GL46::glGenerateMipmap} and {@see GL46::glGenerateTextureMipmap} generates mipmaps for the specified
     * texture object. For {@see GL46::glGenerateMipmap}, the texture object that is bound to $target. For
     * {@see GL46::glGenerateTextureMipmap}, $texture is the name of the texture object.
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
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $target
     * @return void
     */
    public function generateMipmap($target): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGenerateMipmap', 'void (*)(GLenum target)');
        $proc($target);
    }

    /**
     * {@see GL46::glBlitFramebuffer} and {@see GL46::glBlitNamedFramebuffer} transfer a rectangle of pixel values
     * from one region of a read framebuffer to another region of a draw framebuffer.
     *
     * For {@see GL46::glBlitFramebuffer}, the read and draw framebuffers are those bound to the
     * {@see GL46::GL_READ_FRAMEBUFFER} and {@see GL46::GL_DRAW_FRAMEBUFFER} targets respectively.
     *
     * For {@see GL46::glBlitNamedFramebuffer}, $readFramebuffer and $drawFramebuffer are the names of the read and
     * draw framebuffer objects respectively. If $readFramebuffer or $drawFramebuffer is zero, then the default read
     * or draw framebuffer respectively is used.
     *
     * $mask is the bitwise OR of a number of values indicating which buffers are to be copied. The values are
     * {@see GL46::GL_COLOR_BUFFER_BIT}, {@see GL46::GL_DEPTH_BUFFER_BIT}, and {@see GL46::GL_STENCIL_BUFFER_BIT}.
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
     * method that will be applied to resize the source image , and must be {@see GL46::GL_NEAREST} or
     * {@see GL46::GL_LINEAR}. {@see GL46::GL_LINEAR} is only a valid interpolation method for the color buffer. If
     * $filter is not {@see GL46::GL_NEAREST} and $mask includes {@see GL46::GL_DEPTH_BUFFER_BIT} or
     * {@see GL46::GL_STENCIL_BUFFER_BIT}, no data is transferred and a {@see GL46::GL_INVALID_OPERATION} error is
     * generated.
     *
     * If $filter is {@see GL46::GL_LINEAR} and the source rectangle would require sampling outside the bounds of the
     * source framebuffer, values are read as if the {@see GL46::GL_CLAMP_TO_EDGE} texture wrapping mode were
     * applied.
     *
     * When the color buffer is transferred, values are taken from the read buffer of the specified read framebuffer
     * and written to each of the draw buffers of the specified draw framebuffer.
     *
     * If the source and destination rectangles overlap or are the same, and the read and draw buffers are the same,
     * the result of the operation is undefined.
     *
     * @see http://docs.gl/gl4/glBlitFramebuffer
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $srcX0
     * @param int|\FFI\CData|\FFI\CInt $srcY0
     * @param int|\FFI\CData|\FFI\CInt $srcX1
     * @param int|\FFI\CData|\FFI\CInt $srcY1
     * @param int|\FFI\CData|\FFI\CInt $dstX0
     * @param int|\FFI\CData|\FFI\CInt $dstY0
     * @param int|\FFI\CData|\FFI\CInt $dstX1
     * @param int|\FFI\CData|\FFI\CInt $dstY1
     * @param int|\FFI\CData|\FFI\CInt $mask
     * @param int|\FFI\CData|\FFI\CInt $filter
     * @return void
     */
    public function blitFramebuffer($srcX0, $srcY0, $srcX1, $srcY1, $dstX0, $dstY0, $dstX1, $dstY1, $mask, $filter): void
    {
        $srcX0 = $srcX0 instanceof \FFI\CData ? $srcX0->cdata : $srcX0;
        $srcY0 = $srcY0 instanceof \FFI\CData ? $srcY0->cdata : $srcY0;
        $srcX1 = $srcX1 instanceof \FFI\CData ? $srcX1->cdata : $srcX1;
        $srcY1 = $srcY1 instanceof \FFI\CData ? $srcY1->cdata : $srcY1;
        $dstX0 = $dstX0 instanceof \FFI\CData ? $dstX0->cdata : $dstX0;
        $dstY0 = $dstY0 instanceof \FFI\CData ? $dstY0->cdata : $dstY0;
        $dstX1 = $dstX1 instanceof \FFI\CData ? $dstX1->cdata : $dstX1;
        $dstY1 = $dstY1 instanceof \FFI\CData ? $dstY1->cdata : $dstY1;
        $mask = $mask instanceof \FFI\CData ? $mask->cdata : $mask;
        $filter = $filter instanceof \FFI\CData ? $filter->cdata : $filter;

        assert(Type::isInt16($srcX0), 'Argument $srcX0 must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($srcY0), 'Argument $srcY0 must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($srcX1), 'Argument $srcX1 must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($srcY1), 'Argument $srcY1 must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($dstX0), 'Argument $dstX0 must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($dstY0), 'Argument $dstY0 must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($dstX1), 'Argument $dstX1 must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($dstY1), 'Argument $dstY1 must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isUint16($mask), 'Argument $mask must be a C-like GLbitfield, but incompatible or overflow value given');
        assert(Type::isUint16($filter), 'Argument $filter must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glBlitFramebuffer', 'void (*)(GLint srcX0, GLint srcY0, GLint srcX1, GLint srcY1, GLint dstX0, GLint dstY0, GLint dstX1, GLint dstY1, GLbitfield mask, GLenum filter)');
        $proc($srcX0, $srcY0, $srcX1, $srcY1, $dstX0, $dstY0, $dstX1, $dstY1, $mask, $filter);
    }

    /**
     * {@see GL46::glRenderbufferStorageMultisample} and {@see GL46::glNamedRenderbufferStorageMultisample} establish
     * the data storage, format, dimensions and number of samples of a renderbuffer object's image.
     *
     * For {@see GL46::glRenderbufferStorageMultisample}, the target of the operation, specified by $target must be
     * {@see GL46::GL_RENDERBUFFER}. For {@see GL46::glNamedRenderbufferStorageMultisample}, $renderbuffer must be an
     * ID of an existing renderbuffer object. $internalformat specifies the internal format to be used for the
     * renderbuffer object's storage and must be a color-renderable, depth-renderable, or stencil-renderable format.
     * $width and $height are the dimensions, in pixels, of the renderbuffer. Both $width and $height must be less
     * than or equal to the value of {@see GL46::GL_MAX_RENDERBUFFER_SIZE}. $samples specifies the number of samples
     * to be used for the renderbuffer object's image, and must be less than or equal to the value of
     * {@see GL46::GL_MAX_SAMPLES}. If $internalformat is a signed or unsigned integer format then $samples must be
     * less than or equal to the value of {@see GL46::GL_MAX_INTEGER_SAMPLES}.
     *
     * Upon success, {@see GL46::glRenderbufferStorageMultisample} and
     * {@see GL46::glNamedRenderbufferStorageMultisample} delete any existing data store for the renderbuffer image
     * and the contents of the data store after calling either of the functions are undefined.
     *
     * @see http://docs.gl/gl4/glRenderbufferStorageMultisample
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $samples
     * @param int|\FFI\CData|\FFI\CInt $internalformat
     * @param int|\FFI\CData|\FFI\CInt $width
     * @param int|\FFI\CData|\FFI\CInt $height
     * @return void
     */
    public function renderbufferStorageMultisample($target, $samples, $internalformat, $width, $height): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $samples = $samples instanceof \FFI\CData ? $samples->cdata : $samples;
        $internalformat = $internalformat instanceof \FFI\CData ? $internalformat->cdata : $internalformat;
        $width = $width instanceof \FFI\CData ? $width->cdata : $width;
        $height = $height instanceof \FFI\CData ? $height->cdata : $height;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isInt16($samples), 'Argument $samples must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Type::isUint16($internalformat), 'Argument $internalformat must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isInt16($width), 'Argument $width must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Type::isInt16($height), 'Argument $height must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glRenderbufferStorageMultisample', 'void (*)(GLenum target, GLsizei samples, GLenum internalformat, GLsizei width, GLsizei height)');
        $proc($target, $samples, $internalformat, $width, $height);
    }

    /**
     * {@see GL46::glFramebufferTextureLayer} and {@see GL46::glNamedFramebufferTextureLayer} attach a single layer
     * of a three-dimensional or array texture object as one of the logical buffers of the specified framebuffer
     * object. Textures cannot be attached to the default draw and read framebuffer, so they are not valid targets of
     * these commands.
     *
     * For {@see GL46::glFramebufferTextureLayer}, the framebuffer object is that bound to $target, which must be
     * {@see GL46::GL_DRAW_FRAMEBUFFER}, {@see GL46::GL_READ_FRAMEBUFFER}, or {@see GL46::GL_FRAMEBUFFER}.
     * {@see GL46::GL_FRAMEBUFFER} is equivalent to {@see GL46::GL_DRAW_FRAMEBUFFER}.
     *
     * For {@see GL46::glNamedFramebufferTextureLayer}, $framebuffer is the name of the framebuffer object.
     *
     * $attachment specifies the logical attachment of the framebuffer and must be {@see GL46::GL_COLOR_ATTACHMENT}i,
     * {@see GL46::GL_DEPTH_ATTACHMENT}, {@see GL46::GL_STENCIL_ATTACHMENT} or
     * {@see GL46::GL_DEPTH_STENCIL_ATTACHMENT}. i in {@see GL46::GL_COLOR_ATTACHMENT}i may range from zero to the
     * value of {@see GL46::GL_MAX_COLOR_ATTACHMENTS} minus one. Attaching a level of a texture to
     * {@see GL46::GL_DEPTH_STENCIL_ATTACHMENT} is equivalent to attaching that level to both the
     * {@see GL46::GL_DEPTH_ATTACHMENT} and the {@see GL46::GL_STENCIL_ATTACHMENT} attachment points simultaneously.
     *
     * If $texture is not zero, it must be the name of a three-dimensional, two-dimensional multisample array, one-
     * or two-dimensional array, or cube map array texture.
     *
     * If $texture is a three-dimensional texture, then $level must be greater than or equal to zero and less than or
     * equal to $log_2$ of the value of {@see GL46::GL_MAX_3D_TEXTURE_SIZE}.
     *
     * If $texture is a two-dimensional array texture, then $level must be greater than or equal to zero and less
     * than or equal to $log_2$ of the value of {@see GL46::GL_MAX_TEXTURE_SIZE}.
     *
     * For cube map textures, $layer is translated into a cube map face according to $$ face = k \\bmod 6. $$ For
     * cube map array textures, $layer is translated into an array layer and face according to $$ layer =
     * \\left\\lfloor { layer \\over 6 } \\right\\rfloor$$ and $$ face = k \\bmod 6. $$
     *
     * @see http://docs.gl/gl4/glFramebufferTextureLayer
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $attachment
     * @param int|\FFI\CData|\FFI\CInt $texture
     * @param int|\FFI\CData|\FFI\CInt $level
     * @param int|\FFI\CData|\FFI\CInt $layer
     * @return void
     */
    public function framebufferTextureLayer($target, $attachment, $texture, $level, $layer): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $attachment = $attachment instanceof \FFI\CData ? $attachment->cdata : $attachment;
        $texture = $texture instanceof \FFI\CData ? $texture->cdata : $texture;
        $level = $level instanceof \FFI\CData ? $level->cdata : $level;
        $layer = $layer instanceof \FFI\CData ? $layer->cdata : $layer;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($attachment), 'Argument $attachment must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isUint16($texture), 'Argument $texture must be a C-like GLuint, but incompatible or overflow value given');
        assert(Type::isInt16($level), 'Argument $level must be a C-like GLint, but incompatible or overflow value given');
        assert(Type::isInt16($layer), 'Argument $layer must be a C-like GLint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glFramebufferTextureLayer', 'void (*)(GLenum target, GLenum attachment, GLuint texture, GLint level, GLint layer)');
        $proc($target, $attachment, $texture, $level, $layer);
    }

    /**
     * {@see GL46::glMapBufferRange} and {@see GL46::glMapNamedBufferRange} map all or part of the data store of a
     * specified buffer object into the client's address space. $offset and $length indicate the range of data in the
     * buffer object that is to be mapped, in terms of basic machine units. $access is a bitfield containing flags
     * which describe the requested mapping. These flags are described below.
     *
     * A pointer to the beginning of the mapped range is returned once all pending operations on the buffer object
     * have completed, and may be used to modify and/or query the corresponding range of the data store according to
     * the following flag bits set in $access:    {@see GL46::GL_MAP_READ_BIT} indicates that the returned pointer
     * may be used to read buffer object data. No GL error is generated if the pointer is used to query a mapping
     * which excludes this flag, but the result is undefined and system errors (possibly including program
     * termination) may occur.     {@see GL46::GL_MAP_WRITE_BIT} indicates that the returned pointer may be used to
     * modify buffer object data. No GL error is generated if the pointer is used to modify a mapping which excludes
     * this flag, but the result is undefined and system errors (possibly including program termination) may occur.
     *   {@see GL46::GL_MAP_PERSISTENT_BIT} indicates that the mapping is to be made in a persistent fassion and that
     * the client intends to hold and use the returned pointer during subsequent GL operation. It is not an error to
     * call drawing commands (render) while buffers are mapped using this flag. It is an error to specify this flag
     * if the buffer's data store was not allocated through a call to the {@see GL46::glBufferStorage} command in
     * which the {@see GL46::GL_MAP_PERSISTENT_BIT} was also set.     {@see GL46::GL_MAP_COHERENT_BIT} indicates that
     * a persistent mapping is also to be coherent. Coherent maps guarantee that the effect of writes to a buffer's
     * data store by either the client or server will eventually become visible to the other without further
     * intervention from the application. In the absence of this bit, persistent mappings are not coherent and
     * modified ranges of the buffer store must be explicitly communicated to the GL, either by unmapping the buffer,
     * or through a call to {@see GL46::glFlushMappedBufferRange} or {@see GL46::glMemoryBarrier}.
     *
     * The following optional flag bits in $access may be used to modify the mapping:
     * {@see GL46::GL_MAP_INVALIDATE_RANGE_BIT} indicates that the previous contents of the specified range may be
     * discarded. Data within this range are undefined with the exception of subsequently written data. No GL error
     * is generated if subsequent GL operations access unwritten data, but the result is undefined and system errors
     * (possibly including program termination) may occur. This flag may not be used in combination with
     * {@see GL46::GL_MAP_READ_BIT}.     {@see GL46::GL_MAP_INVALIDATE_BUFFER_BIT} indicates that the previous
     * contents of the entire buffer may be discarded. Data within the entire buffer are undefined with the exception
     * of subsequently written data. No GL error is generated if subsequent GL operations access unwritten data, but
     * the result is undefined and system errors (possibly including program termination) may occur. This flag may
     * not be used in combination with {@see GL46::GL_MAP_READ_BIT}.     {@see GL46::GL_MAP_FLUSH_EXPLICIT_BIT}
     * indicates that one or more discrete subranges of the mapping may be modified. When this flag is set,
     * modifications to each subrange must be explicitly flushed by calling {@see GL46::glFlushMappedBufferRange}. No
     * GL error is set if a subrange of the mapping is modified and not flushed, but data within the corresponding
     * subrange of the buffer are undefined. This flag may only be used in conjunction with
     * {@see GL46::GL_MAP_WRITE_BIT}. When this option is selected, flushing is strictly limited to regions that are
     * explicitly indicated with calls to {@see GL46::glFlushMappedBufferRange} prior to unmap; if this option is not
     * selected {@see GL46::glUnmapBuffer} will automatically flush the entire mapped range when called.
     * {@see GL46::GL_MAP_UNSYNCHRONIZED_BIT} indicates that the GL should not attempt to synchronize pending
     * operations on the buffer prior to returning from {@see GL46::glMapBufferRange} or
     * {@see GL46::glMapNamedBufferRange}. No GL error is generated if pending operations which source or modify the
     * buffer overlap the mapped region, but the result of such previous and any subsequent operations is undefined.
     *
     * If an error occurs, a `NULL` pointer is returned.
     *
     * If no error occurs, the returned pointer will reflect an allocation aligned to the value of
     * {@see GL46::GL_MIN_MAP_BUFFER_ALIGNMENT} basic machine units. Subtracting $offset from this returned pointer
     * will always produce a multiple of the value of {@see GL46::GL_MIN_MAP_BUFFER_ALIGNMENT}.
     *
     * The returned pointer values may not be passed as parameter values to GL commands. For example, they may not be
     * used to specify array pointers, or to specify or query pixel or texture image data; such actions produce
     * undefined results, although implementations may not check for such behavior for performance reasons.
     *
     * Mappings to the data stores of buffer objects may have nonstandard performance characteristics. For example,
     * such mappings may be marked as uncacheable regions of memory, and in such cases reading from them may be very
     * slow. To ensure optimal performance, the client should use the mapping in a fashion consistent with the values
     * of {@see GL46::GL_BUFFER_USAGE} for the buffer object and of $access. Using a mapping in a fashion
     * inconsistent with these values is liable to be multiple orders of magnitude slower than using normal memory.
     *
     * @see http://docs.gl/gl4/glMapBufferRange
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param mixed|float|string|int|\FFI\CData|\FFI\CInt $offset
     * @param mixed|float|string|int|\FFI\CData|\FFI\CInt $length
     * @param int|\FFI\CData|\FFI\CInt $access
     * @return \FFI\CData|\FFI\CPtr|null
     */
    public function mapBufferRange($target, $offset, $length, $access): \FFI\CData
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $access = $access instanceof \FFI\CData ? $access->cdata : $access;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isInt64($offset), 'Argument $offset must be a C-like GLintptr, but incompatible or overflow value given');
        assert(Type::isInt64($length), 'Argument $length must be a C-like GLsizeiptr, but incompatible or overflow value given');
        assert(Type::isUint16($access), 'Argument $access must be a C-like GLbitfield, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glMapBufferRange', 'void * (*)(GLenum target, GLintptr offset, GLsizeiptr length, GLbitfield access)');
        return $proc($target, $offset, $length, $access);
    }

    /**
     * {@see GL46::glFlushMappedBufferRange} indicates that modifications have been made to a range of a mapped
     * buffer object. The buffer object must previously have been mapped with the
     * {@see GL46::GL_MAP_FLUSH_EXPLICIT_BIT} flag.
     *
     * $offset and $length indicate the modified subrange of the mapping, in basic machine units. The specified
     * subrange to flush is relative to the start of the currently mapped range of the buffer. These commands may be
     * called multiple times to indicate distinct subranges of the mapping which require flushing.
     *
     * If a buffer range is mapped with both {@see GL46::GL_MAP_PERSISTENT_BIT} and
     * {@see GL46::GL_MAP_FLUSH_EXPLICIT_BIT} set, then these commands may be called to ensure that data written by
     * the client into the flushed region becomes visible to the server. Data written to a coherent store will always
     * become visible to the server after an unspecified period of time.
     *
     * @see http://docs.gl/gl4/glFlushMappedBufferRange
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param mixed|float|string|int|\FFI\CData|\FFI\CInt $offset
     * @param mixed|float|string|int|\FFI\CData|\FFI\CInt $length
     * @return void
     */
    public function flushMappedBufferRange($target, $offset, $length): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;

        assert(Type::isUint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Type::isInt64($offset), 'Argument $offset must be a C-like GLintptr, but incompatible or overflow value given');
        assert(Type::isInt64($length), 'Argument $length must be a C-like GLsizeiptr, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glFlushMappedBufferRange', 'void (*)(GLenum target, GLintptr offset, GLsizeiptr length)');
        $proc($target, $offset, $length);
    }

    /**
     * {@see GL46::glBindVertexArray} binds the vertex array object with name $array. $array is the name of a vertex
     * array object previously returned from a call to {@see GL46::glGenVertexArrays}, or zero to break the existing
     * vertex array object binding.
     *
     * If no vertex array object with name $array exists, one is created when $array is first bound. If the bind is
     * successful no change is made to the state of the vertex array object, and any previous vertex array object
     * binding is broken.
     *
     * @see http://docs.gl/gl4/glBindVertexArray
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $array
     * @return void
     */
    public function bindVertexArray($array): void
    {
        $array = $array instanceof \FFI\CData ? $array->cdata : $array;

        assert(Type::isUint16($array), 'Argument $array must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glBindVertexArray', 'void (*)(GLuint array)');
        $proc($array);
    }

    /**
     * {@see GL46::glDeleteVertexArrays} deletes $n vertex array objects whose names are stored in the array
     * addressed by $arrays. Once a vertex array object is deleted it has no contents and its name is again unused.
     * If a vertex array object that is currently bound is deleted, the binding for that object reverts to zero and
     * the default vertex array becomes current. Unused names in $arrays are silently ignored, as is the value zero.
     *
     * @see http://docs.gl/gl4/glDeleteVertexArrays
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $n
     * @param \FFI\CData|\FFI\CIntPtr|null $arrays
     * @return void
     */
    public function deleteVertexArrays($n, ?\FFI\CData $arrays): void
    {
        $n = $n instanceof \FFI\CData ? $n->cdata : $n;

        assert(Type::isInt16($n), 'Argument $n must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glDeleteVertexArrays', 'void (*)(GLsizei n, const GLuint *arrays)');
        $proc($n, $arrays);
    }

    /**
     * {@see GL46::glGenVertexArrays} returns $n vertex array object names in $arrays. There is no guarantee that the
     * names form a contiguous set of integers; however, it is guaranteed that none of the returned names was in use
     * immediately before the call to {@see GL46::glGenVertexArrays}.
     *
     * Vertex array object names returned by a call to {@see GL46::glGenVertexArrays} are not returned by subsequent
     * calls, unless they are first deleted with {@see GL46::glDeleteVertexArrays}.
     *
     * The names returned in $arrays are marked as used, for the purposes of {@see GL46::glGenVertexArrays} only, but
     * they acquire state and type only when they are first bound.
     *
     * @see http://docs.gl/gl4/glGenVertexArrays
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $n
     * @param \FFI\CData|\FFI\CIntPtr|null $arrays
     * @return void
     */
    public function genVertexArrays($n, ?\FFI\CData $arrays): void
    {
        $n = $n instanceof \FFI\CData ? $n->cdata : $n;

        assert(Type::isInt16($n), 'Argument $n must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGenVertexArrays', 'void (*)(GLsizei n, GLuint *arrays)');
        $proc($n, $arrays);
    }

    /**
     * {@see GL46::glIsVertexArray} returns {@see GL46::GL_TRUE} if $array is currently the name of a vertex array
     * object. If $array is zero, or if $array is not the name of a vertex array object, or if an error occurs,
     * {@see GL46::glIsVertexArray} returns {@see GL46::GL_FALSE}. If $array is a name returned by
     * {@see GL46::glGenVertexArrays}, by that has not yet been bound through a call to
     * {@see GL46::glBindVertexArray}, then the name is not a vertex array object and {@see GL46::glIsVertexArray}
     * returns {@see GL46::GL_FALSE}.
     *
     * @see http://docs.gl/gl4/glIsVertexArray
     * @since 3.0
     * @param int|\FFI\CData|\FFI\CInt $array
     * @return int|\FFI\CData|\FFI\CInt
     */
    public function isVertexArray($array): int
    {
        $array = $array instanceof \FFI\CData ? $array->cdata : $array;

        assert(Type::isUint16($array), 'Argument $array must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glIsVertexArray', 'GLboolean (*)(GLuint array)');
        return $proc($array);
    }
}
