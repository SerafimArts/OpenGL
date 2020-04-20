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
     * @since 3.0
     * @param int $index
     * @param int $r
     * @param int $g
     * @param int $b
     * @param int $a
     * @return void
     */
    public static function glColorMaski(int $index, int $r, int $g, int $b, int $a): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($r >= 0 && $r <= 255, 'Argument $r overflow: C type GLboolean is required');
        assert($g >= 0 && $g <= 255, 'Argument $g overflow: C type GLboolean is required');
        assert($b >= 0 && $b <= 255, 'Argument $b overflow: C type GLboolean is required');
        assert($a >= 0 && $a <= 255, 'Argument $a overflow: C type GLboolean is required');

        $proc = self::getProc('glColorMaski', 'void (*)(GLuint index, GLboolean r, GLboolean g, GLboolean b, GLboolean a)');
        $proc($index, $r, $g, $b, $a);
    }

    /**
     * @since 3.0
     * @param int $target
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $data
     * @return void
     */
    public static function glGetBooleani_v(int $target, int $index, ?\FFI\CData $data): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glGetBooleani_v', 'void (*)(GLenum target, GLuint index, GLboolean *data)');
        $proc($target, $index, $data);
    }

    /**
     * @since 3.0
     * @param int $target
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $data
     * @return void
     */
    public static function glGetIntegeri_v(int $target, int $index, ?\FFI\CData $data): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glGetIntegeri_v', 'void (*)(GLenum target, GLuint index, GLint *data)');
        $proc($target, $index, $data);
    }

    /**
     * @see http://docs.gl/gl3/glEnablei
     * @since 3.0
     * @param int $target
     * @param int $index
     * @return void
     */
    public static function glEnablei(int $target, int $index): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glEnablei', 'void (*)(GLenum target, GLuint index)');
        $proc($target, $index);
    }

    /**
     * @see http://docs.gl/gl3/glDisablei
     * @since 3.0
     * @param int $target
     * @param int $index
     * @return void
     */
    public static function glDisablei(int $target, int $index): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glDisablei', 'void (*)(GLenum target, GLuint index)');
        $proc($target, $index);
    }

    /**
     * @since 3.0
     * @param int $target
     * @param int $index
     * @return int
     */
    public static function glIsEnabledi(int $target, int $index): int
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glIsEnabledi', 'GLboolean (*)(GLenum target, GLuint index)');
        return $proc($target, $index);
    }

    /**
     * Transform feedback mode captures the values of varying variables written by the vertex shader (or, if active,
     * the geometry shader). Transform feedback is said to be active after a call to `glBeginTransformFeedback` until
     * a subsequent call to {@see glEndTransformFeedback}. Transform feedback commands must be
     * paired.
     *
     * If no geometry shader is present, while transform feedback is active the *`mode`* parameter to
     * {@see glDrawArrays} must match those specified in the following table:
     *
     * **Transform Feedback *`primitiveMode`*** **Allowed Render Primitive *`modes`*** `GL_POINTS` `GL_POINTS`
     * `GL_LINES` `GL_LINES`, `GL_LINE_LOOP`, `GL_LINE_STRIP`, `GL_LINES_ADJACENCY`, `GL_LINE_STRIP_ADJACENCY`
     * `GL_TRIANGLES` `GL_TRIANGLES`, `GL_TRIANGLE_STRIP`, `GL_TRIANGLE_FAN`, `GL_TRIANGLES_ADJACENCY`,
     * `GL_TRIANGLE_STRIP_ADJACENCY`
     *
     * If a geometry shader is present, the output primitive type from the geometry shader must match those provided
     * in the following table:
     *
     * **Transform Feedback *`primitiveMode`*** **Allowed Geometry Shader Output Primitive Type** `GL_POINTS`
     * `points` `GL_LINES` `line_strip` `GL_TRIANGLES` `triangle_strip`
     *
     * @see http://docs.gl/gl3/glBeginTransformFeedback
     * @see http://docs.gl/gl4/glBeginTransformFeedback
     * @since 3.0
     * @param int $primitiveMode
     * @return void
     */
    public static function glBeginTransformFeedback(int $primitiveMode): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($primitiveMode >= 0 && $primitiveMode <= 4_294_967_295, 'Argument $primitiveMode overflow: C type GLenum is required');

        $proc = self::getProc('glBeginTransformFeedback', 'void (*)(GLenum primitiveMode)');
        $proc($primitiveMode);
    }

    /**
     * @see http://docs.gl/gl3/glEndTransformFeedback
     * @see http://docs.gl/gl4/glEndTransformFeedback
     * @since 3.0
     * @return void
     */
    public static function glEndTransformFeedback(): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');

        $proc = self::getProc('glEndTransformFeedback', 'void (*)(void)');
        $proc();
    }

    /**
     * Binds a range the buffer object *`buffer`* represented by *`offset`* and *`size`* to the binding point at
     * index *`index`* of the array of targets specified by *`target`*. Each *`target`* represents an indexed array
     * of buffer binding points, as well as a single general binding point that can be used by other buffer
     * manipulation functions such as {@see glBindBuffer} or {@see glMapBuffer}. In addition to
     * binding a range of *`buffer`* to the indexed buffer binding target, `glBindBufferRange` also binds the range
     * to the generic buffer binding point specified by *`target`*.
     *
     * *`offset`* specifies the offset in basic machine units into the buffer object *`buffer`* and *`size`*
     * specifies the amount of data that can be read from the buffer object while used as an indexed target.
     *
     * @see http://docs.gl/gl3/glBindBufferRange
     * @see http://docs.gl/gl4/glBindBufferRange
     * @since 3.0
     * @param int $target
     * @param int $index
     * @param int $buffer
     * @param int $offset
     * @param int $size
     * @return void
     */
    public static function glBindBufferRange(int $target, int $index, int $buffer, int $offset, int $size): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLuint is required');
        assert($offset >= 0 && $offset <= \PHP_INT_MAX, 'Argument $offset overflow: C type GLintptr is required');
        assert($size >= 0 && $size <= \PHP_INT_MAX, 'Argument $size overflow: C type GLsizeiptr is required');

        $proc = self::getProc('glBindBufferRange', 'void (*)(GLenum target, GLuint index, GLuint buffer, GLintptr offset, GLsizeiptr size)');
        $proc($target, $index, $buffer, $offset, $size);
    }

    /**
     * Binds the buffer object *`buffer`* to the binding point at index *`index`* of the array of targets specified
     * by *`target`*. Each *`target`* represents an indexed array of buffer binding points, as well as a single
     * general binding point that can be used by other buffer manipulation functions such as
     * {@see glBindBuffer} or {@see glMapBuffer}. In addition to binding *`buffer`* to the indexed
     * buffer binding target, `glBindBufferBase` also binds *`buffer`* to the generic buffer binding point specified
     * by *`target`*.
     *
     * @see http://docs.gl/gl3/glBindBufferBase
     * @see http://docs.gl/gl4/glBindBufferBase
     * @since 3.0
     * @param int $target
     * @param int $index
     * @param int $buffer
     * @return void
     */
    public static function glBindBufferBase(int $target, int $index, int $buffer): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLuint is required');

        $proc = self::getProc('glBindBufferBase', 'void (*)(GLenum target, GLuint index, GLuint buffer)');
        $proc($target, $index, $buffer);
    }

    /**
     * The names of the vertex or geometry shader outputs to be recorded in transform feedback mode are specified
     * using `glTransformFeedbackVaryings`. When a geometry shader is active, transform feedback records the values
     * of selected geometry shader output variables from the emitted vertices. Otherwise, the values of the selected
     * vertex shader outputs are recorded.
     *
     * The state set by `glTranformFeedbackVaryings` is stored and takes effect next time
     * {@see glLinkProgram} is called on *`program`*. When {@see glLinkProgram} is called,
     * *`program`* is linked so that the values of the specified varying variables for the vertices of each primitive
     * generated by the GL are written to a single buffer object if *`bufferMode`* is `GL_INTERLEAVED_ATTRIBS` or
     * multiple buffer objects if *`bufferMode`* is `GL_SEPARATE_ATTRIBS`.
     *
     * In addition to the errors generated by `glTransformFeedbackVaryings`, the program *`program`* will fail to
     * link if:
     *
     * - The count specified by `glTransformFeedbackVaryings` is non-zero, but the program object has no vertex or
     * geometry shader.
     * - Any variable name specified in the *`varyings`* array is not declared as an output in the vertex shader (or
     * the geometry shader, if active).
     * - Any two entries in the *`varyings`* array specify the same varying variable.
     * - The total number of components to capture in any varying variable in *`varyings`* is greater than the
     * constant `GL_MAX_TRANSFORM_FEEDBACK_SEPARATE_COMPONENTS` and the buffer mode is `GL_SEPARATE_ATTRIBS`.
     * - The total number of components to capture is greater than the constant
     * `GL_MAX_TRANSFORM_FEEDBACK_INTERLEAVED_COMPONENTS` and the buffer mode is `GL_INTERLEAVED_ATTRIBS`.
     *
     * @see http://docs.gl/gl3/glTransformFeedbackVaryings
     * @see http://docs.gl/gl4/glTransformFeedbackVaryings
     * @since 3.0
     * @param int $program
     * @param int $count
     * @param \FFI\CData|\FFI\CIntPtrPtr|null $varyings
     * @param int $bufferMode
     * @return void
     */
    public static function glTransformFeedbackVaryings(int $program, int $count, ?\FFI\CData $varyings, int $bufferMode): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($bufferMode >= 0 && $bufferMode <= 4_294_967_295, 'Argument $bufferMode overflow: C type GLenum is required');

        $proc = self::getProc('glTransformFeedbackVaryings', 'void (*)(GLuint program, GLsizei count, const GLchar *const*varyings, GLenum bufferMode)');
        $proc($program, $count, $varyings, $bufferMode);
    }

    /**
     * Information about the set of varying variables in a linked program that will be captured during transform
     * feedback may be retrieved by calling `glGetTransformFeedbackVarying`. `glGetTransformFeedbackVarying` provides
     * information about the varying variable selected by *`index`*. An *`index`* of 0 selects the first varying
     * variable specified in the *`varyings`* array passed to
     * {@see glTransformFeedbackVaryings}, and an *`index`* of
     * `GL_TRANSFORM_FEEDBACK_VARYINGS` - 1 selects the last such variable.
     *
     * The name of the selected varying is returned as a null-terminated string in *`name`*. The actual number of
     * characters written into *`name`*, excluding the null terminator, is returned in *`length`*. If *`length`* is
     * NULL, no length is returned. The maximum number of characters that may be written into *`name`*, including the
     * null terminator, is specified by *`bufSize`*.
     *
     * The length of the longest varying name in program is given by `GL_TRANSFORM_FEEDBACK_VARYING_MAX_LENGTH`,
     * which can be queried with {@see glGetProgram}.
     *
     * For the selected varying variable, its type is returned into *`type`*. The size of the varying is returned
     * into *`size`*. The value in *`size`* is in units of the type returned in *`type`*. The type returned can be
     * any of the scalar, vector, or matrix attribute types returned by {@see glGetActiveAttrib}. If an
     * error occurred, the return parameters *`length`*, *`size`*, *`type`* and *`name`* will be unmodified. This
     * command will return as much information about the varying variables as possible. If no information is
     * available, *`length`* will be set to zero and *`name`* will be an empty string. This situation could arise if
     * `glGetTransformFeedbackVarying` is called after a failed link.
     *
     * @see http://docs.gl/gl3/glGetTransformFeedbackVarying
     * @see http://docs.gl/gl4/glGetTransformFeedbackVarying
     * @since 3.0
     * @param int $program
     * @param int $index
     * @param int $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @param \FFI\CData|\FFI\CIntPtr|null $size
     * @param \FFI\CData|\FFI\CIntPtr|null $type
     * @param \FFI\CData|\FFI\CIntPtr|null $name
     * @return void
     */
    public static function glGetTransformFeedbackVarying(int $program, int $index, int $bufSize, ?\FFI\CData $length, ?\FFI\CData $size, ?\FFI\CData $type, ?\FFI\CData $name): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($bufSize >= \PHP_INT_MIN && $bufSize <= \PHP_INT_MAX, 'Argument $bufSize overflow: C type GLsizei is required');

        $proc = self::getProc('glGetTransformFeedbackVarying', 'void (*)(GLuint program, GLuint index, GLsizei bufSize, GLsizei *length, GLsizei *size, GLenum *type, GLchar *name)');
        $proc($program, $index, $bufSize, $length, $size, $type, $name);
    }

    /**
     * Controls color clamping that is performed during {@see glReadPixels}. *`target`* must be
     * `GL_CLAMP_READ_COLOR`. If *`clamp`* is `GL_TRUE`, read color clamping is enabled; if *`clamp`* is `GL_FALSE`,
     * read color clamping is disabled. If *`clamp`* is `GL_FIXED_ONLY`, read color clamping is enabled only if the
     * selected read buffer has fixed point components and disabled otherwise.
     *
     * @see http://docs.gl/gl3/glClampColor
     * @see http://docs.gl/gl4/glClampColor
     * @since 3.0
     * @param int $target
     * @param int $clamp
     * @return void
     */
    public static function glClampColor(int $target, int $clamp): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($clamp >= 0 && $clamp <= 4_294_967_295, 'Argument $clamp overflow: C type GLenum is required');

        $proc = self::getProc('glClampColor', 'void (*)(GLenum target, GLenum clamp)');
        $proc($target, $clamp);
    }

    /**
     * Conditional rendering is started using `glBeginConditionalRender` and ended using `glEndConditionalRender`.
     * During conditional rendering, all vertex array commands, as well as {@see glClear} and
     * {@see glClearBuffer} have no effect if the (`GL_SAMPLES_PASSED`) result of the query object *`id`*
     * is zero, or if the (`GL_ANY_SAMPLES_PASSED`) result is `GL_FALSE`. The results of commands setting the current
     * vertex state, such as {@see glVertexAttrib} are undefined. If the (`GL_SAMPLES_PASSED`) result is
     * non-zero or if the (`GL_ANY_SAMPLES_PASSED`) result is `GL_TRUE`, such commands are not discarded. The *`id`*
     * parameter to `glBeginConditionalRender` must be the name of a query object previously returned from a call to
     * {@see glGenQueries}. *`mode`* specifies how the results of the query object are to be interpreted. If
     * *`mode`* is `GL_QUERY_WAIT`, the GL waits for the results of the query to be available and then uses the
     * results to determine if subsequent rendering commands are discarded. If *`mode`* is `GL_QUERY_NO_WAIT`, the GL
     * may choose to unconditionally execute the subsequent rendering commands without waiting for the query to
     * complete.
     *
     * If *`mode`* is `GL_QUERY_BY_REGION_WAIT`, the GL will also wait for occlusion query results and discard
     * rendering commands if the result of the occlusion query is zero. If the query result is non-zero, subsequent
     * rendering commands are executed, but the GL may discard the results of the commands for any region of the
     * framebuffer that did not contribute to the sample count in the specified occlusion query. Any such discarding
     * is done in an implementation-dependent manner, but the rendering command results may not be discarded for any
     * samples that contributed to the occlusion query sample count. If *`mode`* is `GL_QUERY_BY_REGION_NO_WAIT`, the
     * GL operates as in `GL_QUERY_BY_REGION_WAIT`, but may choose to unconditionally execute the subsequent
     * rendering commands without waiting for the query to complete.
     *
     * @see http://docs.gl/gl3/glBeginConditionalRender
     * @see http://docs.gl/gl4/glBeginConditionalRender
     * @since 3.0
     * @param int $id
     * @param int $mode
     * @return void
     */
    public static function glBeginConditionalRender(int $id, int $mode): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($id >= 0 && $id <= 4_294_967_295, 'Argument $id overflow: C type GLuint is required');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');

        $proc = self::getProc('glBeginConditionalRender', 'void (*)(GLuint id, GLenum mode)');
        $proc($id, $mode);
    }

    /**
     * @see http://docs.gl/gl3/glEndConditionalRender
     * @see http://docs.gl/gl4/glEndConditionalRender
     * @since 3.0
     * @return void
     */
    public static function glEndConditionalRender(): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');

        $proc = self::getProc('glEndConditionalRender', 'void (*)(void)');
        $proc();
    }

    /**
     * @since 3.0
     * @param int $index
     * @param int $size
     * @param int $type
     * @param int $stride
     * @param \FFI\CData|\FFI\CPtr|null $pointer
     * @return void
     */
    public static function glVertexAttribIPointer(int $index, int $size, int $type, int $stride, ?\FFI\CData $pointer): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($size >= \PHP_INT_MIN && $size <= \PHP_INT_MAX, 'Argument $size overflow: C type GLint is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');
        assert($stride >= \PHP_INT_MIN && $stride <= \PHP_INT_MAX, 'Argument $stride overflow: C type GLsizei is required');

        $proc = self::getProc('glVertexAttribIPointer', 'void (*)(GLuint index, GLint size, GLenum type, GLsizei stride, const void *pointer)');
        $proc($index, $size, $type, $stride, $pointer);
    }

    /**
     * @since 3.0
     * @param int $index
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetVertexAttribIiv(int $index, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetVertexAttribIiv', 'void (*)(GLuint index, GLenum pname, GLint *params)');
        $proc($index, $pname, $params);
    }

    /**
     * @since 3.0
     * @param int $index
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetVertexAttribIuiv(int $index, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetVertexAttribIuiv', 'void (*)(GLuint index, GLenum pname, GLuint *params)');
        $proc($index, $pname, $params);
    }

    /**
     * @since 3.0
     * @param int $index
     * @param int $x
     * @return void
     */
    public static function glVertexAttribI1i(int $index, int $x): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($x >= \PHP_INT_MIN && $x <= \PHP_INT_MAX, 'Argument $x overflow: C type GLint is required');

        $proc = self::getProc('glVertexAttribI1i', 'void (*)(GLuint index, GLint x)');
        $proc($index, $x);
    }

    /**
     * @since 3.0
     * @param int $index
     * @param int $x
     * @param int $y
     * @return void
     */
    public static function glVertexAttribI2i(int $index, int $x, int $y): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($x >= \PHP_INT_MIN && $x <= \PHP_INT_MAX, 'Argument $x overflow: C type GLint is required');
        assert($y >= \PHP_INT_MIN && $y <= \PHP_INT_MAX, 'Argument $y overflow: C type GLint is required');

        $proc = self::getProc('glVertexAttribI2i', 'void (*)(GLuint index, GLint x, GLint y)');
        $proc($index, $x, $y);
    }

    /**
     * @since 3.0
     * @param int $index
     * @param int $x
     * @param int $y
     * @param int $z
     * @return void
     */
    public static function glVertexAttribI3i(int $index, int $x, int $y, int $z): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($x >= \PHP_INT_MIN && $x <= \PHP_INT_MAX, 'Argument $x overflow: C type GLint is required');
        assert($y >= \PHP_INT_MIN && $y <= \PHP_INT_MAX, 'Argument $y overflow: C type GLint is required');
        assert($z >= \PHP_INT_MIN && $z <= \PHP_INT_MAX, 'Argument $z overflow: C type GLint is required');

        $proc = self::getProc('glVertexAttribI3i', 'void (*)(GLuint index, GLint x, GLint y, GLint z)');
        $proc($index, $x, $y, $z);
    }

    /**
     * @since 3.0
     * @param int $index
     * @param int $x
     * @param int $y
     * @param int $z
     * @param int $w
     * @return void
     */
    public static function glVertexAttribI4i(int $index, int $x, int $y, int $z, int $w): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($x >= \PHP_INT_MIN && $x <= \PHP_INT_MAX, 'Argument $x overflow: C type GLint is required');
        assert($y >= \PHP_INT_MIN && $y <= \PHP_INT_MAX, 'Argument $y overflow: C type GLint is required');
        assert($z >= \PHP_INT_MIN && $z <= \PHP_INT_MAX, 'Argument $z overflow: C type GLint is required');
        assert($w >= \PHP_INT_MIN && $w <= \PHP_INT_MAX, 'Argument $w overflow: C type GLint is required');

        $proc = self::getProc('glVertexAttribI4i', 'void (*)(GLuint index, GLint x, GLint y, GLint z, GLint w)');
        $proc($index, $x, $y, $z, $w);
    }

    /**
     * @since 3.0
     * @param int $index
     * @param int $x
     * @return void
     */
    public static function glVertexAttribI1ui(int $index, int $x): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($x >= 0 && $x <= 4_294_967_295, 'Argument $x overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttribI1ui', 'void (*)(GLuint index, GLuint x)');
        $proc($index, $x);
    }

    /**
     * @since 3.0
     * @param int $index
     * @param int $x
     * @param int $y
     * @return void
     */
    public static function glVertexAttribI2ui(int $index, int $x, int $y): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($x >= 0 && $x <= 4_294_967_295, 'Argument $x overflow: C type GLuint is required');
        assert($y >= 0 && $y <= 4_294_967_295, 'Argument $y overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttribI2ui', 'void (*)(GLuint index, GLuint x, GLuint y)');
        $proc($index, $x, $y);
    }

    /**
     * @since 3.0
     * @param int $index
     * @param int $x
     * @param int $y
     * @param int $z
     * @return void
     */
    public static function glVertexAttribI3ui(int $index, int $x, int $y, int $z): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($x >= 0 && $x <= 4_294_967_295, 'Argument $x overflow: C type GLuint is required');
        assert($y >= 0 && $y <= 4_294_967_295, 'Argument $y overflow: C type GLuint is required');
        assert($z >= 0 && $z <= 4_294_967_295, 'Argument $z overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttribI3ui', 'void (*)(GLuint index, GLuint x, GLuint y, GLuint z)');
        $proc($index, $x, $y, $z);
    }

    /**
     * @since 3.0
     * @param int $index
     * @param int $x
     * @param int $y
     * @param int $z
     * @param int $w
     * @return void
     */
    public static function glVertexAttribI4ui(int $index, int $x, int $y, int $z, int $w): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($x >= 0 && $x <= 4_294_967_295, 'Argument $x overflow: C type GLuint is required');
        assert($y >= 0 && $y <= 4_294_967_295, 'Argument $y overflow: C type GLuint is required');
        assert($z >= 0 && $z <= 4_294_967_295, 'Argument $z overflow: C type GLuint is required');
        assert($w >= 0 && $w <= 4_294_967_295, 'Argument $w overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttribI4ui', 'void (*)(GLuint index, GLuint x, GLuint y, GLuint z, GLuint w)');
        $proc($index, $x, $y, $z, $w);
    }

    /**
     * @since 3.0
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertexAttribI1iv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttribI1iv', 'void (*)(GLuint index, const GLint *v)');
        $proc($index, $v);
    }

    /**
     * @since 3.0
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertexAttribI2iv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttribI2iv', 'void (*)(GLuint index, const GLint *v)');
        $proc($index, $v);
    }

    /**
     * @since 3.0
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertexAttribI3iv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttribI3iv', 'void (*)(GLuint index, const GLint *v)');
        $proc($index, $v);
    }

    /**
     * @since 3.0
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertexAttribI4iv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttribI4iv', 'void (*)(GLuint index, const GLint *v)');
        $proc($index, $v);
    }

    /**
     * @since 3.0
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertexAttribI1uiv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttribI1uiv', 'void (*)(GLuint index, const GLuint *v)');
        $proc($index, $v);
    }

    /**
     * @since 3.0
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertexAttribI2uiv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttribI2uiv', 'void (*)(GLuint index, const GLuint *v)');
        $proc($index, $v);
    }

    /**
     * @since 3.0
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertexAttribI3uiv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttribI3uiv', 'void (*)(GLuint index, const GLuint *v)');
        $proc($index, $v);
    }

    /**
     * @since 3.0
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertexAttribI4uiv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttribI4uiv', 'void (*)(GLuint index, const GLuint *v)');
        $proc($index, $v);
    }

    /**
     * @since 3.0
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertexAttribI4bv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttribI4bv', 'void (*)(GLuint index, const GLbyte *v)');
        $proc($index, $v);
    }

    /**
     * @since 3.0
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertexAttribI4sv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttribI4sv', 'void (*)(GLuint index, const GLshort *v)');
        $proc($index, $v);
    }

    /**
     * @since 3.0
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertexAttribI4ubv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttribI4ubv', 'void (*)(GLuint index, const GLubyte *v)');
        $proc($index, $v);
    }

    /**
     * @since 3.0
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertexAttribI4usv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttribI4usv', 'void (*)(GLuint index, const GLushort *v)');
        $proc($index, $v);
    }

    /**
     * @since 3.0
     * @param int $program
     * @param int $location
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetUniformuiv(int $program, int $location, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');

        $proc = self::getProc('glGetUniformuiv', 'void (*)(GLuint program, GLint location, GLuint *params)');
        $proc($program, $location, $params);
    }

    /**
     * Explicitly specifies the binding of the user-defined varying out variable *`name`* to fragment shader color
     * number *`colorNumber`* for program *`program`*. If *`name`* was bound previously, its assigned binding is
     * replaced with *`colorNumber`*. *`name`* must be a null-terminated string. *`colorNumber`* must be less than
     * `GL_MAX_DRAW_BUFFERS`.
     *
     * The bindings specified by `glBindFragDataLocation` have no effect until *`program`* is next linked. Bindings
     * may be specified at any time after *`program`* has been created. Specifically, they may be specified before
     * shader objects are attached to the program. Therefore, any name may be specified in *`name`*, including a name
     * that is never used as a varying out variable in any fragment shader object. Names beginning with `gl_` are
     * reserved by the GL.
     *
     * In addition to the errors generated by `glBindFragDataLocation`, the program *`program`* will fail to link if:
     *
     * - The number of active outputs is greater than the value `GL_MAX_DRAW_BUFFERS`.
     * - More than one varying out variable is bound to the same color number.
     *
     * @see http://docs.gl/gl3/glBindFragDataLocation
     * @see http://docs.gl/gl4/glBindFragDataLocation
     * @since 3.0
     * @param int $program
     * @param int $color
     * @param \FFI\CData|\FFI\CIntPtr|null $name
     * @return void
     */
    public static function glBindFragDataLocation(int $program, int $color, ?\FFI\CData $name): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($color >= 0 && $color <= 4_294_967_295, 'Argument $color overflow: C type GLuint is required');

        $proc = self::getProc('glBindFragDataLocation', 'void (*)(GLuint program, GLuint color, const GLchar *name)');
        $proc($program, $color, $name);
    }

    /**
     * Retrieves the assigned color number binding for the user-defined varying out variable *`name`* for program
     * *`program`*. *`program`* must have previously been linked. *`name`* must be a null-terminated string. If
     * *`name`* is not the name of an active user-defined varying out fragment shader variable within *`program`*, -1
     * will be returned.
     *
     * @see http://docs.gl/gl3/glGetFragDataLocation
     * @see http://docs.gl/gl4/glGetFragDataLocation
     * @since 3.0
     * @param int $program
     * @param \FFI\CData|\FFI\CIntPtr|null $name
     * @return int
     */
    public static function glGetFragDataLocation(int $program, ?\FFI\CData $name): int
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');

        $proc = self::getProc('glGetFragDataLocation', 'GLint (*)(GLuint program, const GLchar *name)');
        return $proc($program, $name);
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
     * @since 3.0
     * @param int $location
     * @param int $v0
     * @return void
     */
    public static function glUniform1ui(int $location, int $v0): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($v0 >= 0 && $v0 <= 4_294_967_295, 'Argument $v0 overflow: C type GLuint is required');

        $proc = self::getProc('glUniform1ui', 'void (*)(GLint location, GLuint v0)');
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
     * @since 3.0
     * @param int $location
     * @param int $v0
     * @param int $v1
     * @return void
     */
    public static function glUniform2ui(int $location, int $v0, int $v1): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($v0 >= 0 && $v0 <= 4_294_967_295, 'Argument $v0 overflow: C type GLuint is required');
        assert($v1 >= 0 && $v1 <= 4_294_967_295, 'Argument $v1 overflow: C type GLuint is required');

        $proc = self::getProc('glUniform2ui', 'void (*)(GLint location, GLuint v0, GLuint v1)');
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
     * @since 3.0
     * @param int $location
     * @param int $v0
     * @param int $v1
     * @param int $v2
     * @return void
     */
    public static function glUniform3ui(int $location, int $v0, int $v1, int $v2): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($v0 >= 0 && $v0 <= 4_294_967_295, 'Argument $v0 overflow: C type GLuint is required');
        assert($v1 >= 0 && $v1 <= 4_294_967_295, 'Argument $v1 overflow: C type GLuint is required');
        assert($v2 >= 0 && $v2 <= 4_294_967_295, 'Argument $v2 overflow: C type GLuint is required');

        $proc = self::getProc('glUniform3ui', 'void (*)(GLint location, GLuint v0, GLuint v1, GLuint v2)');
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
     * @since 3.0
     * @param int $location
     * @param int $v0
     * @param int $v1
     * @param int $v2
     * @param int $v3
     * @return void
     */
    public static function glUniform4ui(int $location, int $v0, int $v1, int $v2, int $v3): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($v0 >= 0 && $v0 <= 4_294_967_295, 'Argument $v0 overflow: C type GLuint is required');
        assert($v1 >= 0 && $v1 <= 4_294_967_295, 'Argument $v1 overflow: C type GLuint is required');
        assert($v2 >= 0 && $v2 <= 4_294_967_295, 'Argument $v2 overflow: C type GLuint is required');
        assert($v3 >= 0 && $v3 <= 4_294_967_295, 'Argument $v3 overflow: C type GLuint is required');

        $proc = self::getProc('glUniform4ui', 'void (*)(GLint location, GLuint v0, GLuint v1, GLuint v2, GLuint v3)');
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
     * @since 3.0
     * @param int $location
     * @param int $count
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public static function glUniform1uiv(int $location, int $count, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glUniform1uiv', 'void (*)(GLint location, GLsizei count, const GLuint *value)');
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
     * @since 3.0
     * @param int $location
     * @param int $count
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public static function glUniform2uiv(int $location, int $count, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glUniform2uiv', 'void (*)(GLint location, GLsizei count, const GLuint *value)');
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
     * @since 3.0
     * @param int $location
     * @param int $count
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public static function glUniform3uiv(int $location, int $count, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glUniform3uiv', 'void (*)(GLint location, GLsizei count, const GLuint *value)');
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
     * @since 3.0
     * @param int $location
     * @param int $count
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public static function glUniform4uiv(int $location, int $count, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glUniform4uiv', 'void (*)(GLint location, GLsizei count, const GLuint *value)');
        $proc($location, $count, $value);
    }

    /**
     * @since 3.0
     * @param int $target
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glTexParameterIiv(int $target, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glTexParameterIiv', 'void (*)(GLenum target, GLenum pname, const GLint *params)');
        $proc($target, $pname, $params);
    }

    /**
     * @since 3.0
     * @param int $target
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glTexParameterIuiv(int $target, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glTexParameterIuiv', 'void (*)(GLenum target, GLenum pname, const GLuint *params)');
        $proc($target, $pname, $params);
    }

    /**
     * @since 3.0
     * @param int $target
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetTexParameterIiv(int $target, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetTexParameterIiv', 'void (*)(GLenum target, GLenum pname, GLint *params)');
        $proc($target, $pname, $params);
    }

    /**
     * @since 3.0
     * @param int $target
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetTexParameterIuiv(int $target, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetTexParameterIuiv', 'void (*)(GLenum target, GLenum pname, GLuint *params)');
        $proc($target, $pname, $params);
    }

    /**
     * @since 3.0
     * @param int $buffer
     * @param int $drawbuffer
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public static function glClearBufferiv(int $buffer, int $drawbuffer, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLenum is required');
        assert($drawbuffer >= \PHP_INT_MIN && $drawbuffer <= \PHP_INT_MAX, 'Argument $drawbuffer overflow: C type GLint is required');

        $proc = self::getProc('glClearBufferiv', 'void (*)(GLenum buffer, GLint drawbuffer, const GLint *value)');
        $proc($buffer, $drawbuffer, $value);
    }

    /**
     * @since 3.0
     * @param int $buffer
     * @param int $drawbuffer
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public static function glClearBufferuiv(int $buffer, int $drawbuffer, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLenum is required');
        assert($drawbuffer >= \PHP_INT_MIN && $drawbuffer <= \PHP_INT_MAX, 'Argument $drawbuffer overflow: C type GLint is required');

        $proc = self::getProc('glClearBufferuiv', 'void (*)(GLenum buffer, GLint drawbuffer, const GLuint *value)');
        $proc($buffer, $drawbuffer, $value);
    }

    /**
     * @since 3.0
     * @param int $buffer
     * @param int $drawbuffer
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glClearBufferfv(int $buffer, int $drawbuffer, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLenum is required');
        assert($drawbuffer >= \PHP_INT_MIN && $drawbuffer <= \PHP_INT_MAX, 'Argument $drawbuffer overflow: C type GLint is required');

        $proc = self::getProc('glClearBufferfv', 'void (*)(GLenum buffer, GLint drawbuffer, const GLfloat *value)');
        $proc($buffer, $drawbuffer, $value);
    }

    /**
     * @since 3.0
     * @param int $buffer
     * @param int $drawbuffer
     * @param float $depth
     * @param int $stencil
     * @return void
     */
    public static function glClearBufferfi(int $buffer, int $drawbuffer, float $depth, int $stencil): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLenum is required');
        assert($drawbuffer >= \PHP_INT_MIN && $drawbuffer <= \PHP_INT_MAX, 'Argument $drawbuffer overflow: C type GLint is required');
        assert($depth >= -3.40282e38 && $depth <= 3.40282e38, 'Argument $depth overflow: C type GLfloat is required');
        assert($stencil >= \PHP_INT_MIN && $stencil <= \PHP_INT_MAX, 'Argument $stencil overflow: C type GLint is required');

        $proc = self::getProc('glClearBufferfi', 'void (*)(GLenum buffer, GLint drawbuffer, GLfloat depth, GLint stencil)');
        $proc($buffer, $drawbuffer, $depth, $stencil);
    }

    /**
     * @since 3.0
     * @param int $name
     * @param int $index
     * @return \FFI\CData|\FFI\CIntPtr|null
     */
    public static function glGetStringi(int $name, int $index): \FFI\CData
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($name >= 0 && $name <= 4_294_967_295, 'Argument $name overflow: C type GLenum is required');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glGetStringi', 'const GLubyte * (*)(GLenum name, GLuint index)');
        return $proc($name, $index);
    }

    /**
     * Returns `GL_TRUE` if *`renderbuffer`* is currently the name of a renderbuffer object. If *`renderbuffer`* is
     * zero, or if *`renderbuffer`* is not the name of a renderbuffer object, or if an error occurs,
     * `glIsRenderbuffer` returns `GL_FALSE`. If *`renderbuffer`* is a name returned by
     * {@see glGenRenderbuffers}, by that has not yet been bound through a call to
     * {@see glBindRenderbuffer} or {@see glFramebufferRenderbuffer}, then the
     * name is not a renderbuffer object and `glIsRenderbuffer` returns `GL_FALSE`.
     *
     * @see http://docs.gl/gl3/glIsRenderbuffer
     * @see http://docs.gl/gl4/glIsRenderbuffer
     * @since 3.0
     * @param int $renderbuffer
     * @return int
     */
    public static function glIsRenderbuffer(int $renderbuffer): int
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($renderbuffer >= 0 && $renderbuffer <= 4_294_967_295, 'Argument $renderbuffer overflow: C type GLuint is required');

        $proc = self::getProc('glIsRenderbuffer', 'GLboolean (*)(GLuint renderbuffer)');
        return $proc($renderbuffer);
    }

    /**
     * Binds the renderbuffer object with name *`renderbuffer`* to the renderbuffer target specified by *`target`*.
     * *`target`* must be `GL_RENDERBUFFER`. *`renderbuffer`* is the name of a renderbuffer object previously
     * returned from a call to {@see glGenRenderbuffers}, or zero to break the existing binding of a
     * renderbuffer object to *`target`*.
     *
     * @see http://docs.gl/gl3/glBindRenderbuffer
     * @see http://docs.gl/gl4/glBindRenderbuffer
     * @since 3.0
     * @param int $target
     * @param int $renderbuffer
     * @return void
     */
    public static function glBindRenderbuffer(int $target, int $renderbuffer): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($renderbuffer >= 0 && $renderbuffer <= 4_294_967_295, 'Argument $renderbuffer overflow: C type GLuint is required');

        $proc = self::getProc('glBindRenderbuffer', 'void (*)(GLenum target, GLuint renderbuffer)');
        $proc($target, $renderbuffer);
    }

    /**
     * Deletes the *`n`* renderbuffer objects whose names are stored in the array addressed by *`renderbuffers`*. The
     * name zero is reserved by the GL and is silently ignored, should it occur in *`renderbuffers`*, as are other
     * unused names. Once a renderbuffer object is deleted, its name is again unused and it has no contents. If a
     * renderbuffer that is currently bound to the target `GL_RENDERBUFFER` is deleted, it is as though
     * {@see glBindRenderbuffer} had been executed with a *`target`* of `GL_RENDERBUFFER` and a
     * *`name`* of zero.
     *
     * If a renderbuffer object is attached to one or more attachment points in the currently bound framebuffer, then
     * it as if {@see glFramebufferRenderbuffer} had been called, with a *`renderbuffer`* of
     * zero for each attachment point to which this image was attached in the currently bound framebuffer. In other
     * words, this renderbuffer object is first detached from all attachment ponits in the currently bound
     * framebuffer. Note that the renderbuffer image is specifically *not* detached from any non-bound framebuffers.
     *
     * @see http://docs.gl/gl3/glDeleteRenderbuffers
     * @see http://docs.gl/gl4/glDeleteRenderbuffers
     * @since 3.0
     * @param int $n
     * @param \FFI\CData|\FFI\CIntPtr|null $renderbuffers
     * @return void
     */
    public static function glDeleteRenderbuffers(int $n, ?\FFI\CData $renderbuffers): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($n >= \PHP_INT_MIN && $n <= \PHP_INT_MAX, 'Argument $n overflow: C type GLsizei is required');

        $proc = self::getProc('glDeleteRenderbuffers', 'void (*)(GLsizei n, const GLuint *renderbuffers)');
        $proc($n, $renderbuffers);
    }

    /**
     * Returns *`n`* renderbuffer object names in *`renderbuffers`*. There is no guarantee that the names form a
     * contiguous set of integers; however, it is guaranteed that none of the returned names was in use immediately
     * before the call to `glGenRenderbuffers`.
     *
     * Renderbuffer object names returned by a call to `glGenRenderbuffers` are not returned by subsequent calls,
     * unless they are first deleted with {@see glDeleteRenderbuffers}.
     *
     * The names returned in *`renderbuffers`* are marked as used, for the purposes of `glGenRenderbuffers` only, but
     * they acquire state and type only when they are first bound.
     *
     * @see http://docs.gl/gl3/glGenRenderbuffers
     * @see http://docs.gl/gl4/glGenRenderbuffers
     * @since 3.0
     * @param int $n
     * @param \FFI\CData|\FFI\CIntPtr|null $renderbuffers
     * @return void
     */
    public static function glGenRenderbuffers(int $n, ?\FFI\CData $renderbuffers): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($n >= \PHP_INT_MIN && $n <= \PHP_INT_MAX, 'Argument $n overflow: C type GLsizei is required');

        $proc = self::getProc('glGenRenderbuffers', 'void (*)(GLsizei n, GLuint *renderbuffers)');
        $proc($n, $renderbuffers);
    }

    /**
     * Is equivalent to calling {@see glRenderbufferStorageMultisample} with the
     * *`samples`* set to zero.
     *
     * The target of the operation, specified by *`target`* must be `GL_RENDERBUFFER`. *`internalformat`* specifies
     * the internal format to be used for the renderbuffer object's storage and must be a color-renderable,
     * depth-renderable, or stencil-renderable format. *`width`* and *`height`* are the dimensions, in pixels, of the
     * renderbuffer. Both *`width`* and *`height`* must be less than or equal to the value of
     * `GL_MAX_RENDERBUFFER_SIZE`.
     *
     * Upon success, `glRenderbufferStorage` deletes any existing data store for the renderbuffer image and the
     * contents of the data store after calling `glRenderbufferStorage` are undefined.
     *
     * @see http://docs.gl/gl3/glRenderbufferStorage
     * @see http://docs.gl/gl4/glRenderbufferStorage
     * @since 3.0
     * @param int $target
     * @param int $internalformat
     * @param int $width
     * @param int $height
     * @return void
     */
    public static function glRenderbufferStorage(int $target, int $internalformat, int $width, int $height): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($internalformat >= 0 && $internalformat <= 4_294_967_295, 'Argument $internalformat overflow: C type GLenum is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');

        $proc = self::getProc('glRenderbufferStorage', 'void (*)(GLenum target, GLenum internalformat, GLsizei width, GLsizei height)');
        $proc($target, $internalformat, $width, $height);
    }

    /**
     * @since 3.0
     * @param int $target
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetRenderbufferParameteriv(int $target, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetRenderbufferParameteriv', 'void (*)(GLenum target, GLenum pname, GLint *params)');
        $proc($target, $pname, $params);
    }

    /**
     * Returns `GL_TRUE` if *`framebuffer`* is currently the name of a framebuffer object. If *`framebuffer`* is
     * zero, or if `framebuffer` is not the name of a framebuffer object, or if an error occurs, `glIsFramebuffer`
     * returns `GL_FALSE`. If *`framebuffer`* is a name returned by {@see glGenFramebuffers}, by that
     * has not yet been bound through a call to {@see glBindFramebuffer}, then the name is not a
     * framebuffer object and `glIsFramebuffer` returns `GL_FALSE`.
     *
     * @see http://docs.gl/gl3/glIsFramebuffer
     * @see http://docs.gl/gl4/glIsFramebuffer
     * @since 3.0
     * @param int $framebuffer
     * @return int
     */
    public static function glIsFramebuffer(int $framebuffer): int
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($framebuffer >= 0 && $framebuffer <= 4_294_967_295, 'Argument $framebuffer overflow: C type GLuint is required');

        $proc = self::getProc('glIsFramebuffer', 'GLboolean (*)(GLuint framebuffer)');
        return $proc($framebuffer);
    }

    /**
     * Binds the framebuffer object with name *`framebuffer`* to the framebuffer target specified by *`target`*.
     * *`target`* must be either `GL_DRAW_FRAMEBUFFER`, `GL_READ_FRAMEBUFFER` or `GL_FRAMEBUFFER`. If a framebuffer
     * object is bound to `GL_DRAW_FRAMEBUFFER` or `GL_READ_FRAMEBUFFER`, it becomes the target for rendering or
     * readback operations, respectively, until it is deleted or another framebuffer is bound to the corresponding
     * bind point. Calling `glBindFramebuffer` with *`target`* set to `GL_FRAMEBUFFER` binds *`framebuffer`* to both
     * the read and draw framebuffer targets. *`framebuffer`* is the name of a framebuffer object previously returned
     * from a call to {@see glGenFramebuffers}, or zero to break the existing binding of a framebuffer
     * object to *`target`*.
     *
     * @see http://docs.gl/gl3/glBindFramebuffer
     * @see http://docs.gl/gl4/glBindFramebuffer
     * @since 3.0
     * @param int $target
     * @param int $framebuffer
     * @return void
     */
    public static function glBindFramebuffer(int $target, int $framebuffer): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($framebuffer >= 0 && $framebuffer <= 4_294_967_295, 'Argument $framebuffer overflow: C type GLuint is required');

        $proc = self::getProc('glBindFramebuffer', 'void (*)(GLenum target, GLuint framebuffer)');
        $proc($target, $framebuffer);
    }

    /**
     * Deletes the *`n`* framebuffer objects whose names are stored in the array addressed by *`framebuffers`*. The
     * name zero is reserved by the GL and is silently ignored, should it occur in *`framebuffers`*, as are other
     * unused names. Once a framebuffer object is deleted, its name is again unused and it has no attachments. If a
     * framebuffer that is currently bound to one or more of the targets `GL_DRAW_FRAMEBUFFER` or
     * `GL_READ_FRAMEBUFFER` is deleted, it is as though {@see glBindFramebuffer} had been executed
     * with the corresponding *`target`* and *`framebuffer`* zero.
     *
     * @see http://docs.gl/gl3/glDeleteFramebuffers
     * @see http://docs.gl/gl4/glDeleteFramebuffers
     * @since 3.0
     * @param int $n
     * @param \FFI\CData|\FFI\CIntPtr|null $framebuffers
     * @return void
     */
    public static function glDeleteFramebuffers(int $n, ?\FFI\CData $framebuffers): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($n >= \PHP_INT_MIN && $n <= \PHP_INT_MAX, 'Argument $n overflow: C type GLsizei is required');

        $proc = self::getProc('glDeleteFramebuffers', 'void (*)(GLsizei n, const GLuint *framebuffers)');
        $proc($n, $framebuffers);
    }

    /**
     * Returns *`n`* framebuffer object names in *`ids`*. There is no guarantee that the names form a contiguous set
     * of integers; however, it is guaranteed that none of the returned names was in use immediately before the call
     * to `glGenFramebuffers`.
     *
     * Framebuffer object names returned by a call to `glGenFramebuffers` are not returned by subsequent calls,
     * unless they are first deleted with {@see glDeleteFramebuffers}.
     *
     * The names returned in *`ids`* are marked as used, for the purposes of `glGenFramebuffers` only, but they
     * acquire state and type only when they are first bound.
     *
     * @see http://docs.gl/gl3/glGenFramebuffers
     * @see http://docs.gl/gl4/glGenFramebuffers
     * @since 3.0
     * @param int $n
     * @param \FFI\CData|\FFI\CIntPtr|null $framebuffers
     * @return void
     */
    public static function glGenFramebuffers(int $n, ?\FFI\CData $framebuffers): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($n >= \PHP_INT_MIN && $n <= \PHP_INT_MAX, 'Argument $n overflow: C type GLsizei is required');

        $proc = self::getProc('glGenFramebuffers', 'void (*)(GLsizei n, GLuint *framebuffers)');
        $proc($n, $framebuffers);
    }

    /**
     * Queries the completeness status of the framebuffer object currently bound to *`target`*. *`target`* must be
     * `GL_DRAW_FRAMEBUFFER`, `GL_READ_FRAMEBUFFER` or `GL_FRAMEBUFFER`. `GL_FRAMEBUFFER` is equivalent to
     * `GL_DRAW_FRAMEBUFFER`.
     *
     * The return value is `GL_FRAMEBUFFER_COMPLETE` if the framebuffer bound to *`target`* is complete. Otherwise,
     * the return value is determined as follows:
     *
     * - `GL_FRAMEBUFFER_UNDEFINED` is returned if *`target`* is the default framebuffer, but the default framebuffer
     * does not exist.
     * - `GL_FRAMEBUFFER_INCOMPLETE_ATTACHMENT` is returned if any of the framebuffer attachment points are
     * framebuffer incomplete.
     * - `GL_FRAMEBUFFER_INCOMPLETE_MISSING_ATTACHMENT` is returned if the framebuffer does not have at least one
     * image attached to it.
     * - `GL_FRAMEBUFFER_INCOMPLETE_DRAW_BUFFER` is returned if the value of `GL_FRAMEBUFFER_ATTACHMENT_OBJECT_TYPE`
     * is `GL_NONE` for any color attachment point(s) named by `GL_DRAW_BUFFERi`.
     * - `GL_FRAMEBUFFER_INCOMPLETE_READ_BUFFER` is returned if `GL_READ_BUFFER` is not `GL_NONE` and the value of
     * `GL_FRAMEBUFFER_ATTACHMENT_OBJECT_TYPE` is `GL_NONE` for the color attachment point named by `GL_READ_BUFFER`.
     * - `GL_FRAMEBUFFER_UNSUPPORTED` is returned if the combination of internal formats of the attached images
     * violates an implementation-dependent set of restrictions.
     * - `GL_FRAMEBUFFER_INCOMPLETE_MULTISAMPLE` is returned if the value of `GL_RENDERBUFFER_SAMPLES` is not the
     * same for all attached renderbuffers; if the value of `GL_TEXTURE_SAMPLES` is the not same for all attached
     * textures; or, if the attached images are a mix of renderbuffers and textures, the value of
     * `GL_RENDERBUFFER_SAMPLES` does not match the value of `GL_TEXTURE_SAMPLES`.
     * - `GL_FRAMEBUFFER_INCOMPLETE_MULTISAMPLE` is also returned if the value of `GL_TEXTURE_FIXED_SAMPLE_LOCATIONS`
     * is not the same for all attached textures; or, if the attached images are a mix of renderbuffers and textures,
     * the value of `GL_TEXTURE_FIXED_SAMPLE_LOCATIONS` is not `GL_TRUE` for all attached textures.
     * - `GL_FRAMEBUFFER_INCOMPLETE_LAYER_TARGETS` is returned if any framebuffer attachment is layered, and any
     * populated attachment is not layered, or if all populated color attachments are not from textures of the same
     * target.
     *
     * Additionally, if an error occurs, zero is returned.
     *
     * @see http://docs.gl/gl3/glCheckFramebufferStatus
     * @see http://docs.gl/gl4/glCheckFramebufferStatus
     * @since 3.0
     * @param int $target
     * @return int
     */
    public static function glCheckFramebufferStatus(int $target): int
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');

        $proc = self::getProc('glCheckFramebufferStatus', 'GLenum (*)(GLenum target)');
        return $proc($target);
    }

    /**
     * - `glFramebufferTexture`, `glFramebufferTexture1D`, `glFramebufferTexture2D`, and `glFramebufferTexture`
     * attach a selected mipmap level or image of a texture object as one of the logical buffers of the framebuffer
     * object currently bound to *`target`*. *`target`* must be `GL_DRAW_FRAMEBUFFER`, `GL_READ_FRAMEBUFFER`, or
     * `GL_FRAMEBUFFER`. `GL_FRAMEBUFFER` is equivalent to `GL_DRAW_FRAMEBUFFER`.
     *
     * *`attachment`* specifies the logical attachment of the framebuffer and must be `GL_COLOR_ATTACHMENTi`,
     * `GL_DEPTH_ATTACHMENT`, `GL_STENCIL_ATTACHMENT` or `GL_DEPTH_STENCIL_ATTACHMENT`. *i* in `GL_COLOR_ATTACHMENTi`
     * may range from zero to the value of `GL_MAX_COLOR_ATTACHMENTS` - 1. Attaching a level of a texture to
     * `GL_DEPTH_STENCIL_ATTACHMENT` is equivalent to attaching that level to both the `GL_DEPTH_ATTACHMENT` *and*
     * the `GL_STENCIL_ATTACHMENT` attachment points simultaneously.
     *
     * *`textarget`* specifies what type of texture is named by *`texture`*, and for cube map textures, specifies the
     * face that is to be attached. If *`texture`* is not zero, it must be the name of an existing texture with type
     * *`textarget`*, unless it is a cube map texture, in which case *`textarget`* must be
     * `GL_TEXTURE_CUBE_MAP_POSITIVE_X` `GL_TEXTURE_CUBE_MAP_NEGATIVE_X`, `GL_TEXTURE_CUBE_MAP_POSITIVE_Y`,
     * `GL_TEXTURE_CUBE_MAP_NEGATIVE_Y`, `GL_TEXTURE_CUBE_MAP_POSITIVE_Z`, or `GL_TEXTURE_CUBE_MAP_NEGATIVE_Z`.
     *
     * If *`texture`* is non-zero, the specified *`level`* of the texture object named *`texture`* is attached to the
     * framebfufer attachment point named by *`attachment`*. For `glFramebufferTexture1D`, `glFramebufferTexture2D`,
     * and `glFramebufferTexture3D`, *`texture`* must be zero or the name of an existing texture with a target of
     * *`textarget`*, or *`texture`* must be the name of an existing cube-map texture and *`textarget`* must be one
     * of `GL_TEXTURE_CUBE_MAP_POSITIVE_X`, `GL_TEXTURE_CUBE_MAP_POSITIVE_Y`, `GL_TEXTURE_CUBE_MAP_POSITIVE_Z`,
     * `GL_TEXTURE_CUBE_MAP_NEGATIVE_X`, `GL_TEXTURE_CUBE_MAP_NEGATIVE_Y`, or `GL_TEXTURE_CUBE_MAP_NEGATIVE_Z`.
     *
     * If *`textarget`* is `GL_TEXTURE_RECTANGLE`, `GL_TEXTURE_2D_MULTISAMPLE`, or `GL_TEXTURE_2D_MULTISAMPLE_ARRAY`,
     * then *`level`* must be zero. If *`textarget`* is `GL_TEXTURE_3D`, then level must be greater than or equal to
     * zero and less than or equal to log2 of the value of `GL_MAX_3D_TEXTURE_SIZE`. If *`textarget`* is one of
     * `GL_TEXTURE_CUBE_MAP_POSITIVE_X`, `GL_TEXTURE_CUBE_MAP_POSITIVE_Y`, `GL_TEXTURE_CUBE_MAP_POSITIVE_Z`,
     * `GL_TEXTURE_CUBE_MAP_NEGATIVE_X`, `GL_TEXTURE_CUBE_MAP_NEGATIVE_Y`, or `GL_TEXTURE_CUBE_MAP_NEGATIVE_Z`, then
     * *`level`* must be greater than or equal to zero and less than or equal to log2 of the value of
     * `GL_MAX_CUBE_MAP_TEXTURE_SIZE`. For all other values of *`textarget`*, *`level`* must be greater than or equal
     * to zero and no larger than log2 of the value of `GL_MAX_TEXTURE_SIZE`.
     *
     * *`layer`* specifies the layer of a 2-dimensional image within a 3-dimensional texture.
     *
     * For `glFramebufferTexture1D`, if *`texture`* is not zero, then *`textarget`* must be `GL_TEXTURE_1D`. For
     * `glFramebufferTexture2D`, if *`texture`* is not zero, *`textarget`* must be one of `GL_TEXTURE_2D`,
     * `GL_TEXTURE_RECTANGLE`, `GL_TEXTURE_CUBE_MAP_POSITIVE_X`, `GL_TEXTURE_CUBE_MAP_POSITIVE_Y`,
     * `GL_TEXTURE_CUBE_MAP_POSITIVE_Z`, `GL_TEXTURE_CUBE_MAP_NEGATIVE_X`, `GL_TEXTURE_CUBE_MAP_NEGATIVE_Y`,
     * `GL_TEXTURE_CUBE_MAP_NEGATIVE_Z`, or `GL_TEXTURE_2D_MULTISAMPLE`. For `glFramebufferTexture3D`, if *`texture`*
     * is not zero, then *`textarget`* must be `GL_TEXTURE_3D`.
     *
     * @see http://docs.gl/gl3/glFramebufferTexture
     * @see http://docs.gl/gl4/glFramebufferTexture
     * @since 3.0
     * @param int $target
     * @param int $attachment
     * @param int $textarget
     * @param int $texture
     * @param int $level
     * @return void
     */
    public static function glFramebufferTexture1D(int $target, int $attachment, int $textarget, int $texture, int $level): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($attachment >= 0 && $attachment <= 4_294_967_295, 'Argument $attachment overflow: C type GLenum is required');
        assert($textarget >= 0 && $textarget <= 4_294_967_295, 'Argument $textarget overflow: C type GLenum is required');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');

        $proc = self::getProc('glFramebufferTexture1D', 'void (*)(GLenum target, GLenum attachment, GLenum textarget, GLuint texture, GLint level)');
        $proc($target, $attachment, $textarget, $texture, $level);
    }

    /**
     * - `glFramebufferTexture`, `glFramebufferTexture1D`, `glFramebufferTexture2D`, and `glFramebufferTexture`
     * attach a selected mipmap level or image of a texture object as one of the logical buffers of the framebuffer
     * object currently bound to *`target`*. *`target`* must be `GL_DRAW_FRAMEBUFFER`, `GL_READ_FRAMEBUFFER`, or
     * `GL_FRAMEBUFFER`. `GL_FRAMEBUFFER` is equivalent to `GL_DRAW_FRAMEBUFFER`.
     *
     * *`attachment`* specifies the logical attachment of the framebuffer and must be `GL_COLOR_ATTACHMENTi`,
     * `GL_DEPTH_ATTACHMENT`, `GL_STENCIL_ATTACHMENT` or `GL_DEPTH_STENCIL_ATTACHMENT`. *i* in `GL_COLOR_ATTACHMENTi`
     * may range from zero to the value of `GL_MAX_COLOR_ATTACHMENTS` - 1. Attaching a level of a texture to
     * `GL_DEPTH_STENCIL_ATTACHMENT` is equivalent to attaching that level to both the `GL_DEPTH_ATTACHMENT` *and*
     * the `GL_STENCIL_ATTACHMENT` attachment points simultaneously.
     *
     * *`textarget`* specifies what type of texture is named by *`texture`*, and for cube map textures, specifies the
     * face that is to be attached. If *`texture`* is not zero, it must be the name of an existing texture with type
     * *`textarget`*, unless it is a cube map texture, in which case *`textarget`* must be
     * `GL_TEXTURE_CUBE_MAP_POSITIVE_X` `GL_TEXTURE_CUBE_MAP_NEGATIVE_X`, `GL_TEXTURE_CUBE_MAP_POSITIVE_Y`,
     * `GL_TEXTURE_CUBE_MAP_NEGATIVE_Y`, `GL_TEXTURE_CUBE_MAP_POSITIVE_Z`, or `GL_TEXTURE_CUBE_MAP_NEGATIVE_Z`.
     *
     * If *`texture`* is non-zero, the specified *`level`* of the texture object named *`texture`* is attached to the
     * framebfufer attachment point named by *`attachment`*. For `glFramebufferTexture1D`, `glFramebufferTexture2D`,
     * and `glFramebufferTexture3D`, *`texture`* must be zero or the name of an existing texture with a target of
     * *`textarget`*, or *`texture`* must be the name of an existing cube-map texture and *`textarget`* must be one
     * of `GL_TEXTURE_CUBE_MAP_POSITIVE_X`, `GL_TEXTURE_CUBE_MAP_POSITIVE_Y`, `GL_TEXTURE_CUBE_MAP_POSITIVE_Z`,
     * `GL_TEXTURE_CUBE_MAP_NEGATIVE_X`, `GL_TEXTURE_CUBE_MAP_NEGATIVE_Y`, or `GL_TEXTURE_CUBE_MAP_NEGATIVE_Z`.
     *
     * If *`textarget`* is `GL_TEXTURE_RECTANGLE`, `GL_TEXTURE_2D_MULTISAMPLE`, or `GL_TEXTURE_2D_MULTISAMPLE_ARRAY`,
     * then *`level`* must be zero. If *`textarget`* is `GL_TEXTURE_3D`, then level must be greater than or equal to
     * zero and less than or equal to log2 of the value of `GL_MAX_3D_TEXTURE_SIZE`. If *`textarget`* is one of
     * `GL_TEXTURE_CUBE_MAP_POSITIVE_X`, `GL_TEXTURE_CUBE_MAP_POSITIVE_Y`, `GL_TEXTURE_CUBE_MAP_POSITIVE_Z`,
     * `GL_TEXTURE_CUBE_MAP_NEGATIVE_X`, `GL_TEXTURE_CUBE_MAP_NEGATIVE_Y`, or `GL_TEXTURE_CUBE_MAP_NEGATIVE_Z`, then
     * *`level`* must be greater than or equal to zero and less than or equal to log2 of the value of
     * `GL_MAX_CUBE_MAP_TEXTURE_SIZE`. For all other values of *`textarget`*, *`level`* must be greater than or equal
     * to zero and no larger than log2 of the value of `GL_MAX_TEXTURE_SIZE`.
     *
     * *`layer`* specifies the layer of a 2-dimensional image within a 3-dimensional texture.
     *
     * For `glFramebufferTexture1D`, if *`texture`* is not zero, then *`textarget`* must be `GL_TEXTURE_1D`. For
     * `glFramebufferTexture2D`, if *`texture`* is not zero, *`textarget`* must be one of `GL_TEXTURE_2D`,
     * `GL_TEXTURE_RECTANGLE`, `GL_TEXTURE_CUBE_MAP_POSITIVE_X`, `GL_TEXTURE_CUBE_MAP_POSITIVE_Y`,
     * `GL_TEXTURE_CUBE_MAP_POSITIVE_Z`, `GL_TEXTURE_CUBE_MAP_NEGATIVE_X`, `GL_TEXTURE_CUBE_MAP_NEGATIVE_Y`,
     * `GL_TEXTURE_CUBE_MAP_NEGATIVE_Z`, or `GL_TEXTURE_2D_MULTISAMPLE`. For `glFramebufferTexture3D`, if *`texture`*
     * is not zero, then *`textarget`* must be `GL_TEXTURE_3D`.
     *
     * @see http://docs.gl/gl3/glFramebufferTexture
     * @see http://docs.gl/gl4/glFramebufferTexture
     * @since 3.0
     * @param int $target
     * @param int $attachment
     * @param int $textarget
     * @param int $texture
     * @param int $level
     * @return void
     */
    public static function glFramebufferTexture2D(int $target, int $attachment, int $textarget, int $texture, int $level): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($attachment >= 0 && $attachment <= 4_294_967_295, 'Argument $attachment overflow: C type GLenum is required');
        assert($textarget >= 0 && $textarget <= 4_294_967_295, 'Argument $textarget overflow: C type GLenum is required');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');

        $proc = self::getProc('glFramebufferTexture2D', 'void (*)(GLenum target, GLenum attachment, GLenum textarget, GLuint texture, GLint level)');
        $proc($target, $attachment, $textarget, $texture, $level);
    }

    /**
     * - `glFramebufferTexture`, `glFramebufferTexture1D`, `glFramebufferTexture2D`, and `glFramebufferTexture`
     * attach a selected mipmap level or image of a texture object as one of the logical buffers of the framebuffer
     * object currently bound to *`target`*. *`target`* must be `GL_DRAW_FRAMEBUFFER`, `GL_READ_FRAMEBUFFER`, or
     * `GL_FRAMEBUFFER`. `GL_FRAMEBUFFER` is equivalent to `GL_DRAW_FRAMEBUFFER`.
     *
     * *`attachment`* specifies the logical attachment of the framebuffer and must be `GL_COLOR_ATTACHMENTi`,
     * `GL_DEPTH_ATTACHMENT`, `GL_STENCIL_ATTACHMENT` or `GL_DEPTH_STENCIL_ATTACHMENT`. *i* in `GL_COLOR_ATTACHMENTi`
     * may range from zero to the value of `GL_MAX_COLOR_ATTACHMENTS` - 1. Attaching a level of a texture to
     * `GL_DEPTH_STENCIL_ATTACHMENT` is equivalent to attaching that level to both the `GL_DEPTH_ATTACHMENT` *and*
     * the `GL_STENCIL_ATTACHMENT` attachment points simultaneously.
     *
     * *`textarget`* specifies what type of texture is named by *`texture`*, and for cube map textures, specifies the
     * face that is to be attached. If *`texture`* is not zero, it must be the name of an existing texture with type
     * *`textarget`*, unless it is a cube map texture, in which case *`textarget`* must be
     * `GL_TEXTURE_CUBE_MAP_POSITIVE_X` `GL_TEXTURE_CUBE_MAP_NEGATIVE_X`, `GL_TEXTURE_CUBE_MAP_POSITIVE_Y`,
     * `GL_TEXTURE_CUBE_MAP_NEGATIVE_Y`, `GL_TEXTURE_CUBE_MAP_POSITIVE_Z`, or `GL_TEXTURE_CUBE_MAP_NEGATIVE_Z`.
     *
     * If *`texture`* is non-zero, the specified *`level`* of the texture object named *`texture`* is attached to the
     * framebfufer attachment point named by *`attachment`*. For `glFramebufferTexture1D`, `glFramebufferTexture2D`,
     * and `glFramebufferTexture3D`, *`texture`* must be zero or the name of an existing texture with a target of
     * *`textarget`*, or *`texture`* must be the name of an existing cube-map texture and *`textarget`* must be one
     * of `GL_TEXTURE_CUBE_MAP_POSITIVE_X`, `GL_TEXTURE_CUBE_MAP_POSITIVE_Y`, `GL_TEXTURE_CUBE_MAP_POSITIVE_Z`,
     * `GL_TEXTURE_CUBE_MAP_NEGATIVE_X`, `GL_TEXTURE_CUBE_MAP_NEGATIVE_Y`, or `GL_TEXTURE_CUBE_MAP_NEGATIVE_Z`.
     *
     * If *`textarget`* is `GL_TEXTURE_RECTANGLE`, `GL_TEXTURE_2D_MULTISAMPLE`, or `GL_TEXTURE_2D_MULTISAMPLE_ARRAY`,
     * then *`level`* must be zero. If *`textarget`* is `GL_TEXTURE_3D`, then level must be greater than or equal to
     * zero and less than or equal to log2 of the value of `GL_MAX_3D_TEXTURE_SIZE`. If *`textarget`* is one of
     * `GL_TEXTURE_CUBE_MAP_POSITIVE_X`, `GL_TEXTURE_CUBE_MAP_POSITIVE_Y`, `GL_TEXTURE_CUBE_MAP_POSITIVE_Z`,
     * `GL_TEXTURE_CUBE_MAP_NEGATIVE_X`, `GL_TEXTURE_CUBE_MAP_NEGATIVE_Y`, or `GL_TEXTURE_CUBE_MAP_NEGATIVE_Z`, then
     * *`level`* must be greater than or equal to zero and less than or equal to log2 of the value of
     * `GL_MAX_CUBE_MAP_TEXTURE_SIZE`. For all other values of *`textarget`*, *`level`* must be greater than or equal
     * to zero and no larger than log2 of the value of `GL_MAX_TEXTURE_SIZE`.
     *
     * *`layer`* specifies the layer of a 2-dimensional image within a 3-dimensional texture.
     *
     * For `glFramebufferTexture1D`, if *`texture`* is not zero, then *`textarget`* must be `GL_TEXTURE_1D`. For
     * `glFramebufferTexture2D`, if *`texture`* is not zero, *`textarget`* must be one of `GL_TEXTURE_2D`,
     * `GL_TEXTURE_RECTANGLE`, `GL_TEXTURE_CUBE_MAP_POSITIVE_X`, `GL_TEXTURE_CUBE_MAP_POSITIVE_Y`,
     * `GL_TEXTURE_CUBE_MAP_POSITIVE_Z`, `GL_TEXTURE_CUBE_MAP_NEGATIVE_X`, `GL_TEXTURE_CUBE_MAP_NEGATIVE_Y`,
     * `GL_TEXTURE_CUBE_MAP_NEGATIVE_Z`, or `GL_TEXTURE_2D_MULTISAMPLE`. For `glFramebufferTexture3D`, if *`texture`*
     * is not zero, then *`textarget`* must be `GL_TEXTURE_3D`.
     *
     * @see http://docs.gl/gl3/glFramebufferTexture
     * @see http://docs.gl/gl4/glFramebufferTexture
     * @since 3.0
     * @param int $target
     * @param int $attachment
     * @param int $textarget
     * @param int $texture
     * @param int $level
     * @param int $zoffset
     * @return void
     */
    public static function glFramebufferTexture3D(int $target, int $attachment, int $textarget, int $texture, int $level, int $zoffset): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($attachment >= 0 && $attachment <= 4_294_967_295, 'Argument $attachment overflow: C type GLenum is required');
        assert($textarget >= 0 && $textarget <= 4_294_967_295, 'Argument $textarget overflow: C type GLenum is required');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($zoffset >= \PHP_INT_MIN && $zoffset <= \PHP_INT_MAX, 'Argument $zoffset overflow: C type GLint is required');

        $proc = self::getProc('glFramebufferTexture3D', 'void (*)(GLenum target, GLenum attachment, GLenum textarget, GLuint texture, GLint level, GLint zoffset)');
        $proc($target, $attachment, $textarget, $texture, $level, $zoffset);
    }

    /**
     * Attaches a renderbuffer as one of the logical buffers of the currently bound framebuffer object.
     * *`renderbuffer`* is the name of the renderbuffer object to attach and must be either zero, or the name of an
     * existing renderbuffer object of type *`renderbuffertarget`*. If *`renderbuffer`* is not zero and if
     * `glFramebufferRenderbuffer` is successful, then the renderbuffer name *`renderbuffer`* will be used as the
     * logical buffer identified by *`attachment`* of the framebuffer currently bound to *`target`*.
     *
     * The value of `GL_FRAMEBUFFER_ATTACHMENT_OBJECT_TYPE` for the specified attachment point is set to
     * `GL_RENDERBUFFER` and the value of `GL_FRAMEBUFFER_ATTACHMENT_OBJECT_NAME` is set to *`renderbuffer`*. All
     * other state values of the attachment point specified by *`attachment`* are set to their default values. No
     * change is made to the state of the renderbuuffer object and any previous attachment to the *`attachment`*
     * logical buffer of the framebuffer *`target`* is broken.
     *
     * Calling `glFramebufferRenderbuffer` with the renderbuffer name zero will detach the image, if any, identified
     * by *`attachment`*, in the framebuffer currently bound to *`target`*. All state values of the attachment point
     * specified by attachment in the object bound to target are set to their default values.
     *
     * Setting *`attachment`* to the value `GL_DEPTH_STENCIL_ATTACHMENT` is a special case causing both the depth and
     * stencil attachments of the framebuffer object to be set to *`renderbuffer`*, which should have the base
     * internal format `GL_DEPTH_STENCIL`.
     *
     * @see http://docs.gl/gl3/glFramebufferRenderbuffer
     * @see http://docs.gl/gl4/glFramebufferRenderbuffer
     * @since 3.0
     * @param int $target
     * @param int $attachment
     * @param int $renderbuffertarget
     * @param int $renderbuffer
     * @return void
     */
    public static function glFramebufferRenderbuffer(int $target, int $attachment, int $renderbuffertarget, int $renderbuffer): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($attachment >= 0 && $attachment <= 4_294_967_295, 'Argument $attachment overflow: C type GLenum is required');
        assert($renderbuffertarget >= 0 && $renderbuffertarget <= 4_294_967_295, 'Argument $renderbuffertarget overflow: C type GLenum is required');
        assert($renderbuffer >= 0 && $renderbuffer <= 4_294_967_295, 'Argument $renderbuffer overflow: C type GLuint is required');

        $proc = self::getProc('glFramebufferRenderbuffer', 'void (*)(GLenum target, GLenum attachment, GLenum renderbuffertarget, GLuint renderbuffer)');
        $proc($target, $attachment, $renderbuffertarget, $renderbuffer);
    }

    /**
     * @since 3.0
     * @param int $target
     * @param int $attachment
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetFramebufferAttachmentParameteriv(int $target, int $attachment, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($attachment >= 0 && $attachment <= 4_294_967_295, 'Argument $attachment overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetFramebufferAttachmentParameteriv', 'void (*)(GLenum target, GLenum attachment, GLenum pname, GLint *params)');
        $proc($target, $attachment, $pname, $params);
    }

    /**
     * Generates mipmaps for the texture attached to *`target`* of the active texture unit. For cube map textures, a
     * `GL_INVALID_OPERATION` error is generated if the texture attached to *`target`* is not cube complete.
     *
     * Mipmap generation replaces texel array levels level base + 1 through q with arrays derived from the level base
     * array, regardless of their previous contents. All other mimap arrays, including the level base array, are left
     * unchanged by this computation.
     *
     * The internal formats of the derived mipmap arrays all match those of the level base array. The contents of the
     * derived arrays are computed by repeated, filtered reduction of the level base array. For one- and
     * two-dimensional texture arrays, each layer is filtered independently.
     *
     * @see http://docs.gl/gl3/glGenerateMipmap
     * @see http://docs.gl/gl4/glGenerateMipmap
     * @since 3.0
     * @param int $target
     * @return void
     */
    public static function glGenerateMipmap(int $target): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');

        $proc = self::getProc('glGenerateMipmap', 'void (*)(GLenum target)');
        $proc($target);
    }

    /**
     * Transfers a rectangle of pixel values from one region of the read framebuffer to another region in the draw
     * framebuffer. *`mask`* is the bitwise OR of a number of values indicating which buffers are to be copied. The
     * values are `GL_COLOR_BUFFER_BIT`, `GL_DEPTH_BUFFER_BIT`, and `GL_STENCIL_BUFFER_BIT`. The pixels corresponding
     * to these buffers are copied from the source rectangle bounded by the locations (*`srcX0`*; *`srcY0`*) and
     * (*`srcX1`*; *`srcY1`*) to the destination rectangle bounded by the locations (*`dstX0`*; *`dstY0`*) and
     * (*`dstX1`*; *`dstY1`*). The lower bounds of the rectangle are inclusive, while the upper bounds are exclusive.
     *
     * The actual region taken from the read framebuffer is limited to the intersection of the source buffers being
     * transferred, which may include the color buffer selected by the read buffer, the depth buffer, and/or the
     * stencil buffer depending on mask. The actual region written to the draw framebuffer is limited to the
     * intersection of the destination buffers being written, which may include multiple draw buffers, the depth
     * buffer, and/or the stencil buffer depending on mask. Whether or not the source or destination regions are
     * altered due to these limits, the scaling and offset applied to pixels being transferred is performed as though
     * no such limits were present.
     *
     * If the sizes of the source and destination rectangles are not equal, *`filter`* specifies the interpolation
     * method that will be applied to resize the source image , and must be `GL_NEAREST` or `GL_LINEAR`. `GL_LINEAR`
     * is only a valid interpolation method for the color buffer. If *`filter`* is not `GL_NEAREST` and *`mask`*
     * includes `GL_DEPTH_BUFFER_BIT` or `GL_STENCIL_BUFFER_BIT`, no data is transferred and a `GL_INVALID_OPERATION`
     * error is generated.
     *
     * If *`filter`* is `GL_LINEAR` and the source rectangle would require sampling outside the bounds of the source
     * framebuffer, values are read as if the `GL_CLAMP_TO_EDGE` texture wrapping mode were applied.
     *
     * When the color buffer is transferred, values are taken from the read buffer of the read framebuffer and
     * written to each of the draw buffers of the draw framebuffer.
     *
     * If the source and destination rectangles overlap or are the same, and the read and draw buffers are the same,
     * the result of the operation is undefined.
     *
     * @see http://docs.gl/gl3/glBlitFramebuffer
     * @see http://docs.gl/gl4/glBlitFramebuffer
     * @since 3.0
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
    public static function glBlitFramebuffer(int $srcX0, int $srcY0, int $srcX1, int $srcY1, int $dstX0, int $dstY0, int $dstX1, int $dstY1, int $mask, int $filter): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($srcX0 >= \PHP_INT_MIN && $srcX0 <= \PHP_INT_MAX, 'Argument $srcX0 overflow: C type GLint is required');
        assert($srcY0 >= \PHP_INT_MIN && $srcY0 <= \PHP_INT_MAX, 'Argument $srcY0 overflow: C type GLint is required');
        assert($srcX1 >= \PHP_INT_MIN && $srcX1 <= \PHP_INT_MAX, 'Argument $srcX1 overflow: C type GLint is required');
        assert($srcY1 >= \PHP_INT_MIN && $srcY1 <= \PHP_INT_MAX, 'Argument $srcY1 overflow: C type GLint is required');
        assert($dstX0 >= \PHP_INT_MIN && $dstX0 <= \PHP_INT_MAX, 'Argument $dstX0 overflow: C type GLint is required');
        assert($dstY0 >= \PHP_INT_MIN && $dstY0 <= \PHP_INT_MAX, 'Argument $dstY0 overflow: C type GLint is required');
        assert($dstX1 >= \PHP_INT_MIN && $dstX1 <= \PHP_INT_MAX, 'Argument $dstX1 overflow: C type GLint is required');
        assert($dstY1 >= \PHP_INT_MIN && $dstY1 <= \PHP_INT_MAX, 'Argument $dstY1 overflow: C type GLint is required');
        assert($mask >= 0 && $mask <= 4_294_967_295, 'Argument $mask overflow: C type GLbitfield is required');
        assert($filter >= 0 && $filter <= 4_294_967_295, 'Argument $filter overflow: C type GLenum is required');

        $proc = self::getProc('glBlitFramebuffer', 'void (*)(GLint srcX0, GLint srcY0, GLint srcX1, GLint srcY1, GLint dstX0, GLint dstY0, GLint dstX1, GLint dstY1, GLbitfield mask, GLenum filter)');
        $proc($srcX0, $srcY0, $srcX1, $srcY1, $dstX0, $dstY0, $dstX1, $dstY1, $mask, $filter);
    }

    /**
     * Establishes the data storage, format, dimensions and number of samples of a renderbuffer object's image.
     *
     * The target of the operation, specified by *`target`* must be `GL_RENDERBUFFER`. *`internalformat`* specifies
     * the internal format to be used for the renderbuffer object's storage and must be a color-renderable,
     * depth-renderable, or stencil-renderable format. *`width`* and *`height`* are the dimensions, in pixels, of the
     * renderbuffer. Both *`width`* and *`height`* must be less than or equal to the value of
     * `GL_MAX_RENDERBUFFER_SIZE`. *`samples`* specifies the number of samples to be used for the renderbuffer
     * object's image, and must be less than or equal to the value of `GL_MAX_SAMPLES`. If *`internalformat`* is a
     * signed or unsigned integer format then *`samples`* must be less than or equal to the value of
     * `GL_MAX_INTEGER_SAMPLES`.
     *
     * Upon success, `glRenderbufferStorageMultisample` deletes any existing data store for the renderbuffer image
     * and the contents of the data store after calling `glRenderbufferStorageMultisample` are undefined.
     *
     * @see http://docs.gl/gl3/glRenderbufferStorageMultisample
     * @see http://docs.gl/gl4/glRenderbufferStorageMultisample
     * @since 3.0
     * @param int $target
     * @param int $samples
     * @param int $internalformat
     * @param int $width
     * @param int $height
     * @return void
     */
    public static function glRenderbufferStorageMultisample(int $target, int $samples, int $internalformat, int $width, int $height): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($samples >= \PHP_INT_MIN && $samples <= \PHP_INT_MAX, 'Argument $samples overflow: C type GLsizei is required');
        assert($internalformat >= 0 && $internalformat <= 4_294_967_295, 'Argument $internalformat overflow: C type GLenum is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');

        $proc = self::getProc('glRenderbufferStorageMultisample', 'void (*)(GLenum target, GLsizei samples, GLenum internalformat, GLsizei width, GLsizei height)');
        $proc($target, $samples, $internalformat, $width, $height);
    }

    /**
     * Operates like {@see glFramebufferTexture}, except that only a single layer of the texture
     * level, given by *`layer`*, is attached to the attachment point. If *`texture`* is not zero, *`layer`* must be
     * greater than or equal to zero. *`texture`* must either be zero or the name of an existing three-dimensional
     * texture, one- or two-dimensional array texture, or multisample array texture.
     *
     * @see http://docs.gl/gl3/glFramebufferTextureLayer
     * @see http://docs.gl/gl4/glFramebufferTextureLayer
     * @since 3.0
     * @param int $target
     * @param int $attachment
     * @param int $texture
     * @param int $level
     * @param int $layer
     * @return void
     */
    public static function glFramebufferTextureLayer(int $target, int $attachment, int $texture, int $level, int $layer): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($attachment >= 0 && $attachment <= 4_294_967_295, 'Argument $attachment overflow: C type GLenum is required');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($layer >= \PHP_INT_MIN && $layer <= \PHP_INT_MAX, 'Argument $layer overflow: C type GLint is required');

        $proc = self::getProc('glFramebufferTextureLayer', 'void (*)(GLenum target, GLenum attachment, GLuint texture, GLint level, GLint layer)');
        $proc($target, $attachment, $texture, $level, $layer);
    }

    /**
     * Maps all or part of the data store of a buffer object into the client's address space. *`target`* specifies
     * the target to which the buffer is bound and must be one of `GL_ARRAY_BUFFER`, `GL_COPY_READ_BUFFER`,
     * `GL_COPY_WRITE_BUFFER`, `GL_ELEMENT_ARRAY_BUFFER`, `GL_PIXEL_PACK_BUFFER`, `GL_PIXEL_UNPACK_BUFFER`,
     * `GL_TEXTURE_BUFFER`, `GL_TRANSFORM_FEEDBACK_BUFFER`, or `GL_UNIFORM_BUFFER`. *`offset`* and *`length`*
     * indicate the range of data in the buffer object htat is to be mapped, in terms of basic machine units.
     * *`access`* is a bitfield containing flags which describe the requested mapping. These flags are described
     * below.
     *
     * If no error occurs, a pointer to the beginning of the mapped range is returned once all pending operations on
     * that buffer have completed, and may be used to modify and/or query the corresponding range of the buffer,
     * according to the following flag bits set in *`access`*:
     *
     * - `GL_MAP_READ_BIT` indicates that the returned pointer may be used to read buffer object data. No GL error is
     * generated if the pointer is used to query a mapping which excludes this flag, but the result is undefined and
     * system errors (possibly including program termination) may occur.
     * - `GL_MAP_WRITE_BIT` indicates that the returned pointer may be used to modify buffer object data. No GL error
     * is generated if the pointer is used to modify a mapping which excludes this flag, but the result is undefined
     * and system errors (possibly including program termination) may occur.
     *
     * Furthermore, the following *optional* flag bits in *`access`* may be used to modify the mapping:
     *
     * - `GL_MAP_INVALIDATE_RANGE_BIT` indicates that the previous contents of the specified range may be discarded.
     * Data within this range are undefined with the exception of subsequently written data. No GL error is generated
     * if sub- sequent GL operations access unwritten data, but the result is undefined and system errors (possibly
     * including program termination) may occur. This flag may not be used in combination with `GL_MAP_READ_BIT`.
     * - `GL_MAP_INVALIDATE_BUFFER_BIT` indicates that the previous contents of the entire buffer may be discarded.
     * Data within the entire buffer are undefined with the exception of subsequently written data. No GL error is
     * generated if subsequent GL operations access unwritten data, but the result is undefined and system errors
     * (possibly including program termination) may occur. This flag may not be used in combination with
     * `GL_MAP_READ_BIT`.
     * - `GL_MAP_FLUSH_EXPLICIT_BIT` indicates that one or more discrete subranges of the mapping may be modified.
     * When this flag is set, modifications to each subrange must be explicitly flushed by calling
     * {@see glFlushMappedBufferRange}. No GL error is set if a subrange of the mapping is
     * modified and not flushed, but data within the corresponding subrange of the buffer are undefined. This flag
     * may only be used in conjunction with `GL_MAP_WRITE_BIT`. When this option is selected, flushing is strictly
     * limited to regions that are explicitly indicated with calls to
     * {@see glFlushMappedBufferRange} prior to unmap; if this option is not selected
     * {@see glUnmapBuffer} will automatically flush the entire mapped range when called.
     * - `GL_MAP_UNSYNCHRONIZED_BIT` indicates that the GL should not attempt to synchronize pending operations on
     * the buffer prior to returning from `glMapBufferRange`. No GL error is generated if pending operations which
     * source or modify the buffer overlap the mapped region, but the result of such previous and any subsequent
     * operations is undefined.
     *
     * If an error occurs, `glMapBufferRange` returns a `NULL` pointer.
     *
     * @see http://docs.gl/gl3/glMapBufferRange
     * @see http://docs.gl/gl4/glMapBufferRange
     * @since 3.0
     * @param int $target
     * @param int $offset
     * @param int $length
     * @param int $access
     * @return \FFI\CData|\FFI\CPtr|null
     */
    public static function glMapBufferRange(int $target, int $offset, int $length, int $access): \FFI\CData
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($offset >= 0 && $offset <= \PHP_INT_MAX, 'Argument $offset overflow: C type GLintptr is required');
        assert($length >= 0 && $length <= \PHP_INT_MAX, 'Argument $length overflow: C type GLsizeiptr is required');
        assert($access >= 0 && $access <= 4_294_967_295, 'Argument $access overflow: C type GLbitfield is required');

        $proc = self::getProc('glMapBufferRange', 'void * (*)(GLenum target, GLintptr offset, GLsizeiptr length, GLbitfield access)');
        return $proc($target, $offset, $length, $access);
    }

    /**
     * Indicates that modifications have been made to a range of a mapped buffer. The buffer must previously have
     * been mapped with the `GL_MAP_FLUSH_EXPLICIT_BIT` flag. *`offset`* and *`length`* indicate the modified
     * subrange of the mapping, in basic units. The specified subrange to flush is relative to the start of the
     * currently mapped range of the buffer. `glFlushMappedBufferRange` may be called multiple times to indicate
     * distinct subranges of the mapping which require flushing.
     *
     * @see http://docs.gl/gl3/glFlushMappedBufferRange
     * @see http://docs.gl/gl4/glFlushMappedBufferRange
     * @since 3.0
     * @param int $target
     * @param int $offset
     * @param int $length
     * @return void
     */
    public static function glFlushMappedBufferRange(int $target, int $offset, int $length): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($offset >= 0 && $offset <= \PHP_INT_MAX, 'Argument $offset overflow: C type GLintptr is required');
        assert($length >= 0 && $length <= \PHP_INT_MAX, 'Argument $length overflow: C type GLsizeiptr is required');

        $proc = self::getProc('glFlushMappedBufferRange', 'void (*)(GLenum target, GLintptr offset, GLsizeiptr length)');
        $proc($target, $offset, $length);
    }

    /**
     * Binds the vertex array object with name *`array`*. *`array`* is the name of a vertex array object previously
     * returned from a call to {@see glGenVertexArrays}, or zero to break the existing vertex array
     * object binding.
     *
     * If no vertex array object with name *`array`* exists, one is created when *`array`* is first bound. If the
     * bind is successful no change is made to the state of the vertex array object, and any previous vertex array
     * object binding is broken.
     *
     * @see http://docs.gl/gl3/glBindVertexArray
     * @see http://docs.gl/gl4/glBindVertexArray
     * @since 3.0
     * @param int $array
     * @return void
     */
    public static function glBindVertexArray(int $array): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($array >= 0 && $array <= 4_294_967_295, 'Argument $array overflow: C type GLuint is required');

        $proc = self::getProc('glBindVertexArray', 'void (*)(GLuint array)');
        $proc($array);
    }

    /**
     * Deletes *`n`* vertex array objects whose names are stored in the array addressed by *`arrays`*. Once a vertex
     * array object is deleted it has no contents and its name is again unused. If a vertex array object that is
     * currently bound is deleted, the binding for that object reverts to zero and the default vertex array becomes
     * current. Unused names in *`arrays`* are silently ignored, as is the value zero.
     *
     * @see http://docs.gl/gl3/glDeleteVertexArrays
     * @see http://docs.gl/gl4/glDeleteVertexArrays
     * @since 3.0
     * @param int $n
     * @param \FFI\CData|\FFI\CIntPtr|null $arrays
     * @return void
     */
    public static function glDeleteVertexArrays(int $n, ?\FFI\CData $arrays): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($n >= \PHP_INT_MIN && $n <= \PHP_INT_MAX, 'Argument $n overflow: C type GLsizei is required');

        $proc = self::getProc('glDeleteVertexArrays', 'void (*)(GLsizei n, const GLuint *arrays)');
        $proc($n, $arrays);
    }

    /**
     * Returns *`n`* vertex array object names in *`arrays`*. There is no guarantee that the names form a contiguous
     * set of integers; however, it is guaranteed that none of the returned names was in use immediately before the
     * call to `glGenVertexArrays`.
     *
     * Vertex array object names returned by a call to `glGenVertexArrays` are not returned by subsequent calls,
     * unless they are first deleted with {@see glDeleteVertexArrays}.
     *
     * The names returned in *`arrays`* are marked as used, for the purposes of `glGenVertexArrays` only, but they
     * acquire state and type only when they are first bound.
     *
     * @see http://docs.gl/gl3/glGenVertexArrays
     * @see http://docs.gl/gl4/glGenVertexArrays
     * @since 3.0
     * @param int $n
     * @param \FFI\CData|\FFI\CIntPtr|null $arrays
     * @return void
     */
    public static function glGenVertexArrays(int $n, ?\FFI\CData $arrays): void
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($n >= \PHP_INT_MIN && $n <= \PHP_INT_MAX, 'Argument $n overflow: C type GLsizei is required');

        $proc = self::getProc('glGenVertexArrays', 'void (*)(GLsizei n, GLuint *arrays)');
        $proc($n, $arrays);
    }

    /**
     * Returns `GL_TRUE` if *`array`* is currently the name of a renderbuffer object. If *`renderbuffer`* is zero, or
     * if *`array`* is not the name of a renderbuffer object, or if an error occurs, `glIsVertexArray` returns
     * `GL_FALSE`. If *`array`* is a name returned by {@see glGenVertexArrays}, by that has not yet
     * been bound through a call to {@see glBindVertexArray}, then the name is not a vertex array
     * object and `glIsVertexArray` returns `GL_FALSE`.
     *
     * @see http://docs.gl/gl3/glIsVertexArray
     * @see http://docs.gl/gl4/glIsVertexArray
     * @since 3.0
     * @param int $array
     * @return int
     */
    public static function glIsVertexArray(int $array): int
    {
        assert(version_compare(self::$info->version, '3.0') >= 0, __FUNCTION__ . ' is available since OpenGL 3.0, but only OpenGL '. self::$info->version . ' is available');
        assert($array >= 0 && $array <= 4_294_967_295, 'Argument $array overflow: C type GLuint is required');

        $proc = self::getProc('glIsVertexArray', 'GLboolean (*)(GLuint array)');
        return $proc($array);
    }
}
