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
 * The OpenGL functionality up to version 4.3. Includes the deprecated symbols of the Compatibility Profile.
 *
 * OpenGL 4.3 implementations support revision 4.30 of the OpenGL Shading Language.
 *
 * Extensions promoted to core in this release:
 *
 * - ARB_arrays_of_arrays @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_arrays_of_arrays.txt
 * - ARB_ES3_compatibility @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_ES3_compatibility.txt
 * - ARB_clear_buffer_object @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_clear_buffer_object.txt
 * - ARB_compute_shader @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_compute_shader.txt
 * - ARB_copy_image @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_copy_image.txt
 * - EXT_debug_label @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_debug_label.txt
 * - ARB_debug_output @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_debug_output.txt
 * - ARB_explicit_uniform_location @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_explicit_uniform_location.txt
 * - ARB_fragment_layer_viewport @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_fragment_layer_viewport.txt
 * - ARB_framebuffer_no_attachments @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_framebuffer_no_attachments.txt
 * - ARB_internalformat_query2 @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_internalformat_query2.txt
 * - ARB_invalidate_subdata @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_invalidate_subdata.txt
 * - ARB_multi_draw_indirect @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_multi_draw_indirect.txt
 * - ARB_program_interface_query @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_program_interface_query.txt
 * - ARB_robust_buffer_access_behavior @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_robust_buffer_access_behavior.txt
 * - ARB_shader_image_size @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_shader_image_size.txt
 * - ARB_shader_storage_buffer_object @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_shader_storage_buffer_object.txt
 * - ARB_stencil_texturing @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_stencil_texturing.txt
 * - ARB_texture_buffer_range @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_texture_buffer_range.txt
 * - ARB_texture_query_levels @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_texture_query_levels.txt
 * - ARB_texture_storage_multisample @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_texture_storage_multisample.txt
 * - ARB_texture_view @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_texture_view.txt
 * - ARB_vertex_attrib_binding @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_vertex_attrib_binding.txt
 */
class GL43 extends GL42
{
    /**
     * @var int
     * @since 4.3
     */
    public const GL_NUM_SHADING_LANGUAGE_VERSIONS = 0x82e9;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_VERTEX_ATTRIB_ARRAY_LONG = 0x874e;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_COMPRESSED_RGB8_ETC2 = 0x9274;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_COMPRESSED_SRGB8_ETC2 = 0x9275;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_COMPRESSED_RGB8_PUNCHTHROUGH_ALPHA1_ETC2 = 0x9276;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_COMPRESSED_SRGB8_PUNCHTHROUGH_ALPHA1_ETC2 = 0x9277;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_COMPRESSED_RGBA8_ETC2_EAC = 0x9278;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_COMPRESSED_SRGB8_ALPHA8_ETC2_EAC = 0x9279;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_COMPRESSED_R11_EAC = 0x9270;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_COMPRESSED_SIGNED_R11_EAC = 0x9271;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_COMPRESSED_RG11_EAC = 0x9272;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_COMPRESSED_SIGNED_RG11_EAC = 0x9273;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_PRIMITIVE_RESTART_FIXED_INDEX = 0x8d69;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_ANY_SAMPLES_PASSED_CONSERVATIVE = 0x8d6a;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_ELEMENT_INDEX = 0x8d6b;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_COMPUTE_SHADER = 0x91b9;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_COMPUTE_UNIFORM_BLOCKS = 0x91bb;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_COMPUTE_TEXTURE_IMAGE_UNITS = 0x91bc;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_COMPUTE_IMAGE_UNIFORMS = 0x91bd;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_COMPUTE_SHARED_MEMORY_SIZE = 0x8262;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_COMPUTE_UNIFORM_COMPONENTS = 0x8263;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_COMPUTE_ATOMIC_COUNTER_BUFFERS = 0x8264;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_COMPUTE_ATOMIC_COUNTERS = 0x8265;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_COMBINED_COMPUTE_UNIFORM_COMPONENTS = 0x8266;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_COMPUTE_WORK_GROUP_INVOCATIONS = 0x90eb;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_COMPUTE_WORK_GROUP_COUNT = 0x91be;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_COMPUTE_WORK_GROUP_SIZE = 0x91bf;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_COMPUTE_WORK_GROUP_SIZE = 0x8267;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_UNIFORM_BLOCK_REFERENCED_BY_COMPUTE_SHADER = 0x90ec;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_ATOMIC_COUNTER_BUFFER_REFERENCED_BY_COMPUTE_SHADER = 0x90ed;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_DISPATCH_INDIRECT_BUFFER = 0x90ee;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_DISPATCH_INDIRECT_BUFFER_BINDING = 0x90ef;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_COMPUTE_SHADER_BIT = 0x0020;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_DEBUG_OUTPUT_SYNCHRONOUS = 0x8242;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_DEBUG_NEXT_LOGGED_MESSAGE_LENGTH = 0x8243;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_DEBUG_CALLBACK_FUNCTION = 0x8244;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_DEBUG_CALLBACK_USER_PARAM = 0x8245;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_DEBUG_SOURCE_API = 0x8246;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_DEBUG_SOURCE_WINDOW_SYSTEM = 0x8247;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_DEBUG_SOURCE_SHADER_COMPILER = 0x8248;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_DEBUG_SOURCE_THIRD_PARTY = 0x8249;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_DEBUG_SOURCE_APPLICATION = 0x824a;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_DEBUG_SOURCE_OTHER = 0x824b;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_DEBUG_TYPE_ERROR = 0x824c;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_DEBUG_TYPE_DEPRECATED_BEHAVIOR = 0x824d;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_DEBUG_TYPE_UNDEFINED_BEHAVIOR = 0x824e;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_DEBUG_TYPE_PORTABILITY = 0x824f;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_DEBUG_TYPE_PERFORMANCE = 0x8250;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_DEBUG_TYPE_OTHER = 0x8251;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_DEBUG_MESSAGE_LENGTH = 0x9143;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_DEBUG_LOGGED_MESSAGES = 0x9144;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_DEBUG_LOGGED_MESSAGES = 0x9145;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_DEBUG_SEVERITY_HIGH = 0x9146;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_DEBUG_SEVERITY_MEDIUM = 0x9147;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_DEBUG_SEVERITY_LOW = 0x9148;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_DEBUG_TYPE_MARKER = 0x8268;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_DEBUG_TYPE_PUSH_GROUP = 0x8269;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_DEBUG_TYPE_POP_GROUP = 0x826a;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_DEBUG_SEVERITY_NOTIFICATION = 0x826b;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_DEBUG_GROUP_STACK_DEPTH = 0x826c;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_DEBUG_GROUP_STACK_DEPTH = 0x826d;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_BUFFER = 0x82e0;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_SHADER = 0x82e1;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_PROGRAM = 0x82e2;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_QUERY = 0x82e3;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_PROGRAM_PIPELINE = 0x82e4;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_SAMPLER = 0x82e6;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_LABEL_LENGTH = 0x82e8;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_DEBUG_OUTPUT = 0x92e0;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_CONTEXT_FLAG_DEBUG_BIT = 0x0002;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_UNIFORM_LOCATIONS = 0x826e;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_FRAMEBUFFER_DEFAULT_WIDTH = 0x9310;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_FRAMEBUFFER_DEFAULT_HEIGHT = 0x9311;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_FRAMEBUFFER_DEFAULT_LAYERS = 0x9312;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_FRAMEBUFFER_DEFAULT_SAMPLES = 0x9313;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_FRAMEBUFFER_DEFAULT_FIXED_SAMPLE_LOCATIONS = 0x9314;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_FRAMEBUFFER_WIDTH = 0x9315;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_FRAMEBUFFER_HEIGHT = 0x9316;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_FRAMEBUFFER_LAYERS = 0x9317;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_FRAMEBUFFER_SAMPLES = 0x9318;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_INTERNALFORMAT_SUPPORTED = 0x826f;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_INTERNALFORMAT_PREFERRED = 0x8270;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_INTERNALFORMAT_RED_SIZE = 0x8271;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_INTERNALFORMAT_GREEN_SIZE = 0x8272;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_INTERNALFORMAT_BLUE_SIZE = 0x8273;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_INTERNALFORMAT_ALPHA_SIZE = 0x8274;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_INTERNALFORMAT_DEPTH_SIZE = 0x8275;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_INTERNALFORMAT_STENCIL_SIZE = 0x8276;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_INTERNALFORMAT_SHARED_SIZE = 0x8277;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_INTERNALFORMAT_RED_TYPE = 0x8278;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_INTERNALFORMAT_GREEN_TYPE = 0x8279;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_INTERNALFORMAT_BLUE_TYPE = 0x827a;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_INTERNALFORMAT_ALPHA_TYPE = 0x827b;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_INTERNALFORMAT_DEPTH_TYPE = 0x827c;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_INTERNALFORMAT_STENCIL_TYPE = 0x827d;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_WIDTH = 0x827e;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_HEIGHT = 0x827f;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_DEPTH = 0x8280;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_LAYERS = 0x8281;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_COMBINED_DIMENSIONS = 0x8282;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_COLOR_COMPONENTS = 0x8283;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_DEPTH_COMPONENTS = 0x8284;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_STENCIL_COMPONENTS = 0x8285;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_COLOR_RENDERABLE = 0x8286;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_DEPTH_RENDERABLE = 0x8287;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_STENCIL_RENDERABLE = 0x8288;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_FRAMEBUFFER_RENDERABLE = 0x8289;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_FRAMEBUFFER_RENDERABLE_LAYERED = 0x828a;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_FRAMEBUFFER_BLEND = 0x828b;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_READ_PIXELS = 0x828c;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_READ_PIXELS_FORMAT = 0x828d;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_READ_PIXELS_TYPE = 0x828e;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_TEXTURE_IMAGE_FORMAT = 0x828f;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_TEXTURE_IMAGE_TYPE = 0x8290;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_GET_TEXTURE_IMAGE_FORMAT = 0x8291;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_GET_TEXTURE_IMAGE_TYPE = 0x8292;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MIPMAP = 0x8293;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MANUAL_GENERATE_MIPMAP = 0x8294;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_AUTO_GENERATE_MIPMAP = 0x8295;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_COLOR_ENCODING = 0x8296;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_SRGB_READ = 0x8297;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_SRGB_WRITE = 0x8298;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_FILTER = 0x829a;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_VERTEX_TEXTURE = 0x829b;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_TESS_CONTROL_TEXTURE = 0x829c;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_TESS_EVALUATION_TEXTURE = 0x829d;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_GEOMETRY_TEXTURE = 0x829e;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_FRAGMENT_TEXTURE = 0x829f;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_COMPUTE_TEXTURE = 0x82a0;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_TEXTURE_SHADOW = 0x82a1;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_TEXTURE_GATHER = 0x82a2;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_TEXTURE_GATHER_SHADOW = 0x82a3;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_SHADER_IMAGE_LOAD = 0x82a4;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_SHADER_IMAGE_STORE = 0x82a5;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_SHADER_IMAGE_ATOMIC = 0x82a6;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_IMAGE_TEXEL_SIZE = 0x82a7;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_IMAGE_COMPATIBILITY_CLASS = 0x82a8;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_IMAGE_PIXEL_FORMAT = 0x82a9;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_IMAGE_PIXEL_TYPE = 0x82aa;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_SIMULTANEOUS_TEXTURE_AND_DEPTH_TEST = 0x82ac;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_SIMULTANEOUS_TEXTURE_AND_STENCIL_TEST = 0x82ad;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_SIMULTANEOUS_TEXTURE_AND_DEPTH_WRITE = 0x82ae;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_SIMULTANEOUS_TEXTURE_AND_STENCIL_WRITE = 0x82af;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_TEXTURE_COMPRESSED_BLOCK_WIDTH = 0x82b1;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_TEXTURE_COMPRESSED_BLOCK_HEIGHT = 0x82b2;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_TEXTURE_COMPRESSED_BLOCK_SIZE = 0x82b3;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_CLEAR_BUFFER = 0x82b4;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_TEXTURE_VIEW = 0x82b5;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_VIEW_COMPATIBILITY_CLASS = 0x82b6;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_FULL_SUPPORT = 0x82b7;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_CAVEAT_SUPPORT = 0x82b8;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_IMAGE_CLASS_4_X_32 = 0x82b9;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_IMAGE_CLASS_2_X_32 = 0x82ba;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_IMAGE_CLASS_1_X_32 = 0x82bb;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_IMAGE_CLASS_4_X_16 = 0x82bc;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_IMAGE_CLASS_2_X_16 = 0x82bd;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_IMAGE_CLASS_1_X_16 = 0x82be;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_IMAGE_CLASS_4_X_8 = 0x82bf;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_IMAGE_CLASS_2_X_8 = 0x82c0;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_IMAGE_CLASS_1_X_8 = 0x82c1;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_IMAGE_CLASS_11_11_10 = 0x82c2;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_IMAGE_CLASS_10_10_10_2 = 0x82c3;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_VIEW_CLASS_128_BITS = 0x82c4;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_VIEW_CLASS_96_BITS = 0x82c5;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_VIEW_CLASS_64_BITS = 0x82c6;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_VIEW_CLASS_48_BITS = 0x82c7;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_VIEW_CLASS_32_BITS = 0x82c8;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_VIEW_CLASS_24_BITS = 0x82c9;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_VIEW_CLASS_16_BITS = 0x82ca;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_VIEW_CLASS_8_BITS = 0x82cb;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_VIEW_CLASS_S3TC_DXT1_RGB = 0x82cc;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_VIEW_CLASS_S3TC_DXT1_RGBA = 0x82cd;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_VIEW_CLASS_S3TC_DXT3_RGBA = 0x82ce;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_VIEW_CLASS_S3TC_DXT5_RGBA = 0x82cf;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_VIEW_CLASS_RGTC1_RED = 0x82d0;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_VIEW_CLASS_RGTC2_RG = 0x82d1;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_VIEW_CLASS_BPTC_UNORM = 0x82d2;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_VIEW_CLASS_BPTC_FLOAT = 0x82d3;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_UNIFORM = 0x92e1;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_UNIFORM_BLOCK = 0x92e2;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_PROGRAM_INPUT = 0x92e3;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_PROGRAM_OUTPUT = 0x92e4;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_BUFFER_VARIABLE = 0x92e5;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_SHADER_STORAGE_BLOCK = 0x92e6;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_VERTEX_SUBROUTINE = 0x92e8;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_TESS_CONTROL_SUBROUTINE = 0x92e9;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_TESS_EVALUATION_SUBROUTINE = 0x92ea;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_GEOMETRY_SUBROUTINE = 0x92eb;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_FRAGMENT_SUBROUTINE = 0x92ec;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_COMPUTE_SUBROUTINE = 0x92ed;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_VERTEX_SUBROUTINE_UNIFORM = 0x92ee;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_TESS_CONTROL_SUBROUTINE_UNIFORM = 0x92ef;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_TESS_EVALUATION_SUBROUTINE_UNIFORM = 0x92f0;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_GEOMETRY_SUBROUTINE_UNIFORM = 0x92f1;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_FRAGMENT_SUBROUTINE_UNIFORM = 0x92f2;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_COMPUTE_SUBROUTINE_UNIFORM = 0x92f3;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_TRANSFORM_FEEDBACK_VARYING = 0x92f4;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_ACTIVE_RESOURCES = 0x92f5;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_NAME_LENGTH = 0x92f6;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_NUM_ACTIVE_VARIABLES = 0x92f7;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_NUM_COMPATIBLE_SUBROUTINES = 0x92f8;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_NAME_LENGTH = 0x92f9;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_TYPE = 0x92fa;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_ARRAY_SIZE = 0x92fb;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_OFFSET = 0x92fc;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_BLOCK_INDEX = 0x92fd;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_ARRAY_STRIDE = 0x92fe;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MATRIX_STRIDE = 0x92ff;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_IS_ROW_MAJOR = 0x9300;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_ATOMIC_COUNTER_BUFFER_INDEX = 0x9301;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_BUFFER_BINDING = 0x9302;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_BUFFER_DATA_SIZE = 0x9303;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_NUM_ACTIVE_VARIABLES = 0x9304;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_ACTIVE_VARIABLES = 0x9305;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_REFERENCED_BY_VERTEX_SHADER = 0x9306;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_REFERENCED_BY_TESS_CONTROL_SHADER = 0x9307;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_REFERENCED_BY_TESS_EVALUATION_SHADER = 0x9308;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_REFERENCED_BY_GEOMETRY_SHADER = 0x9309;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_REFERENCED_BY_FRAGMENT_SHADER = 0x930a;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_REFERENCED_BY_COMPUTE_SHADER = 0x930b;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_TOP_LEVEL_ARRAY_SIZE = 0x930c;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_TOP_LEVEL_ARRAY_STRIDE = 0x930d;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_LOCATION = 0x930e;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_LOCATION_INDEX = 0x930f;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_IS_PER_PATCH = 0x92e7;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_SHADER_STORAGE_BUFFER = 0x90d2;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_SHADER_STORAGE_BUFFER_BINDING = 0x90d3;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_SHADER_STORAGE_BUFFER_START = 0x90d4;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_SHADER_STORAGE_BUFFER_SIZE = 0x90d5;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_VERTEX_SHADER_STORAGE_BLOCKS = 0x90d6;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_GEOMETRY_SHADER_STORAGE_BLOCKS = 0x90d7;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_TESS_CONTROL_SHADER_STORAGE_BLOCKS = 0x90d8;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_TESS_EVALUATION_SHADER_STORAGE_BLOCKS = 0x90d9;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_FRAGMENT_SHADER_STORAGE_BLOCKS = 0x90da;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_COMPUTE_SHADER_STORAGE_BLOCKS = 0x90db;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_COMBINED_SHADER_STORAGE_BLOCKS = 0x90dc;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_SHADER_STORAGE_BUFFER_BINDINGS = 0x90dd;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_SHADER_STORAGE_BLOCK_SIZE = 0x90de;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_SHADER_STORAGE_BUFFER_OFFSET_ALIGNMENT = 0x90df;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_SHADER_STORAGE_BARRIER_BIT = 0x2000;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_COMBINED_SHADER_OUTPUT_RESOURCES = 0x8f39;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_DEPTH_STENCIL_TEXTURE_MODE = 0x90ea;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_TEXTURE_BUFFER_OFFSET = 0x919d;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_TEXTURE_BUFFER_SIZE = 0x919e;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_TEXTURE_BUFFER_OFFSET_ALIGNMENT = 0x919f;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_TEXTURE_VIEW_MIN_LEVEL = 0x82db;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_TEXTURE_VIEW_NUM_LEVELS = 0x82dc;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_TEXTURE_VIEW_MIN_LAYER = 0x82dd;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_TEXTURE_VIEW_NUM_LAYERS = 0x82de;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_TEXTURE_IMMUTABLE_LEVELS = 0x82df;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_VERTEX_ATTRIB_BINDING = 0x82d4;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_VERTEX_ATTRIB_RELATIVE_OFFSET = 0x82d5;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_VERTEX_BINDING_DIVISOR = 0x82d6;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_VERTEX_BINDING_OFFSET = 0x82d7;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_VERTEX_BINDING_STRIDE = 0x82d8;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_VERTEX_ATTRIB_RELATIVE_OFFSET = 0x82d9;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_MAX_VERTEX_ATTRIB_BINDINGS = 0x82da;
    /**
     * @var int
     * @since 4.3
     */
    public const GL_VERTEX_BINDING_BUFFER = 0x8f4f;

    /**
     * And `glClearNamedBufferData` fill the entirety of a buffer object's data store with data from client memory.
     *
     * Data, initially supplied in a format specified by *`format`* in data type *`type`* is read from the memory
     * address given by *`data`* and converted into the internal representation given by *`internalformat`*, which
     * must be one of the following sized internal formats:
     *
     * **Component** **Sized Internal Format** **Base Type** **Components** **Norm** 0 1 2 3 `GL_R8` ubyte 1 YES R 0
     * 0 1 `GL_R16` ushort 1 YES R 0 0 1 `GL_R16F` half 1 NO R 0 0 1 `GL_R32F` float 1 NO R 0 0 1 `GL_R8I` byte 1 NO
     * R 0 0 1 `GL_R16I` short 1 NO R 0 0 1 `GL_R32I` int 1 NO R 0 0 1 `GL_R8UI` ubyte 1 NO R 0 0 1 `GL_R16UI` ushort
     * 1 NO R 0 0 1 `GL_R32UI` uint 1 NO R 0 0 1 `GL_RG8` ubyte 2 YES R G 0 1 `GL_RG16` ushort 2 YES R G 0 1
     * `GL_RG16F` half 2 NO R G 0 1 `GL_RG32F` float 2 NO R G 0 1 `GL_RG8I` byte 2 NO R G 0 1 `GL_RG16I` short 2 NO R
     * G 0 1 `GL_RG32I` int 2 NO R G 0 1 `GL_RG8UI` ubyte 2 NO R G 0 1 `GL_RG16UI` ushort 2 NO R G 0 1 `GL_RG32UI`
     * uint 2 NO R G 0 1 `GL_RGB32F` float 3 NO R G B 1 `GL_RGB32I` int 3 NO R G B 1 `GL_RGB32UI` uint 3 NO R G B 1
     * `GL_RGBA8` uint 4 YES R G B A `GL_RGBA16` short 4 YES R G B A `GL_RGBA16F` half 4 NO R G B A `GL_RGBA32F`
     * float 4 NO R G B A `GL_RGBA8I` byte 4 NO R G B A `GL_RGBA16I` short 4 NO R G B A `GL_RGBA32I` int 4 NO R G B A
     * `GL_RGBA8UI` ubyte 4 NO R G B A `GL_RGBA16UI` ushort 4 NO R G B A `GL_RGBA32UI` uint 4 NO R G B A
     *
     * This converted data is then replicated throughout the buffer object's data store. If *`data`* is NULL, then
     * the buffer's data store is filled with zeros.
     *
     * @see http://docs.gl/gl4/glClearBufferData
     * @since 4.3
     * @param int $target
     * @param int $internalformat
     * @param int $format
     * @param int $type
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @return void
     */
    public static function glClearBufferData(int $target, int $internalformat, int $format, int $type, ?\FFI\CData $data): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($internalformat >= 0 && $internalformat <= 4_294_967_295, 'Argument $internalformat overflow: C type GLenum is required');
        assert($format >= 0 && $format <= 4_294_967_295, 'Argument $format overflow: C type GLenum is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');

        $proc = self::getProc('glClearBufferData', 'void (*)(GLenum target, GLenum internalformat, GLenum format, GLenum type, const void *data)');
        $proc($target, $internalformat, $format, $type, $data);
    }

    /**
     * And `glClearNamedBufferSubData` fill a specified region of a buffer object's data store with data from client
     * memory.
     *
     * *`offset`* and *`size`* specify the extent of the region within the data store of the buffer object to fill
     * with data. Data, initially supplied in a format specified by *`format`* in data type *`type`* is read from the
     * memory address given by *`data`* and converted into the internal representation given by *`internalformat`*,
     * which must be one of the following sized internal formats:
     *
     * **Component** **Sized Internal Format** **Base Type** **Components** **Norm** 0 1 2 3 `GL_R8` ubyte 1 YES R 0
     * 0 1 `GL_R16` ushort 1 YES R 0 0 1 `GL_R16F` half 1 NO R 0 0 1 `GL_R32F` float 1 NO R 0 0 1 `GL_R8I` byte 1 NO
     * R 0 0 1 `GL_R16I` short 1 NO R 0 0 1 `GL_R32I` int 1 NO R 0 0 1 `GL_R8UI` ubyte 1 NO R 0 0 1 `GL_R16UI` ushort
     * 1 NO R 0 0 1 `GL_R32UI` uint 1 NO R 0 0 1 `GL_RG8` ubyte 2 YES R G 0 1 `GL_RG16` ushort 2 YES R G 0 1
     * `GL_RG16F` half 2 NO R G 0 1 `GL_RG32F` float 2 NO R G 0 1 `GL_RG8I` byte 2 NO R G 0 1 `GL_RG16I` short 2 NO R
     * G 0 1 `GL_RG32I` int 2 NO R G 0 1 `GL_RG8UI` ubyte 2 NO R G 0 1 `GL_RG16UI` ushort 2 NO R G 0 1 `GL_RG32UI`
     * uint 2 NO R G 0 1 `GL_RGB32F` float 3 NO R G B 1 `GL_RGB32I` int 3 NO R G B 1 `GL_RGB32UI` uint 3 NO R G B 1
     * `GL_RGBA8` uint 4 YES R G B A `GL_RGBA16` short 4 YES R G B A `GL_RGBA16F` half 4 NO R G B A `GL_RGBA32F`
     * float 4 NO R G B A `GL_RGBA8I` byte 4 NO R G B A `GL_RGBA16I` short 4 NO R G B A `GL_RGBA32I` int 4 NO R G B A
     * `GL_RGBA8UI` ubyte 4 NO R G B A `GL_RGBA16UI` ushort 4 NO R G B A `GL_RGBA32UI` uint 4 NO R G B A
     *
     * This converted data is then replicated throughout the specified region of the buffer object's data store. If
     * *`data`* is NULL, then the subrange of the buffer's data store is filled with zeros.
     *
     * @see http://docs.gl/gl4/glClearBufferSubData
     * @since 4.3
     * @param int $target
     * @param int $internalformat
     * @param int $offset
     * @param int $size
     * @param int $format
     * @param int $type
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @return void
     */
    public static function glClearBufferSubData(int $target, int $internalformat, int $offset, int $size, int $format, int $type, ?\FFI\CData $data): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($internalformat >= 0 && $internalformat <= 4_294_967_295, 'Argument $internalformat overflow: C type GLenum is required');
        assert($offset >= 0 && $offset <= \PHP_INT_MAX, 'Argument $offset overflow: C type GLintptr is required');
        assert($size >= 0 && $size <= \PHP_INT_MAX, 'Argument $size overflow: C type GLsizeiptr is required');
        assert($format >= 0 && $format <= 4_294_967_295, 'Argument $format overflow: C type GLenum is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');

        $proc = self::getProc('glClearBufferSubData', 'void (*)(GLenum target, GLenum internalformat, GLintptr offset, GLsizeiptr size, GLenum format, GLenum type, const void *data)');
        $proc($target, $internalformat, $offset, $size, $format, $type, $data);
    }

    /**
     * Launches one or more compute work groups. Each work group is processed by the active program object for the
     * compute shader stage. While the individual shader invocations within a work group are executed as a unit, work
     * groups are executed completely independently and in unspecified order. *`num_groups_x`*, *`num_groups_y`* and
     * *`num_groups_z`* specify the number of local work groups that will be dispatched in the X, Y and Z dimensions,
     * respectively.
     *
     * @see http://docs.gl/gl4/glDispatchCompute
     * @since 4.3
     * @param int $num_groups_x
     * @param int $num_groups_y
     * @param int $num_groups_z
     * @return void
     */
    public static function glDispatchCompute(int $num_groups_x, int $num_groups_y, int $num_groups_z): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($num_groups_x >= 0 && $num_groups_x <= 4_294_967_295, 'Argument $num_groups_x overflow: C type GLuint is required');
        assert($num_groups_y >= 0 && $num_groups_y <= 4_294_967_295, 'Argument $num_groups_y overflow: C type GLuint is required');
        assert($num_groups_z >= 0 && $num_groups_z <= 4_294_967_295, 'Argument $num_groups_z overflow: C type GLuint is required');

        $proc = self::getProc('glDispatchCompute', 'void (*)(GLuint num_groups_x, GLuint num_groups_y, GLuint num_groups_z)');
        $proc($num_groups_x, $num_groups_y, $num_groups_z);
    }

    /**
     * Launches one or more compute work groups using parameters stored in the buffer object currently bound to the
     * `GL_DISPATCH_INDIRECT_BUFFER` target. Each work group is processed by the active program object for the
     * compute shader stage. While the individual shader invocations within a work group are executed as a unit, work
     * groups are executed completely independently and in unspecified order. *`indirect`* contains the offset into
     * the data store of the buffer object bound to the `GL_DISPATCH_INDIRECT_BUFFER` target at which the parameters
     * are stored.
     *
     * The parameters addressed by *`indirect`* are packed a structure, which takes the form (in C):
     *
     *  - ```
     * typedef struct {
     * uint num_groups_x;
     * uint num_groups_y;
     * uint num_groups_z;
     * } DispatchIndirectCommand;
     *  - ```
     *
     * A call to `glDispatchComputeIndirect` is equivalent, assuming no errors are generated, to:
     *
     *  - ```
     * cmd = (const DispatchIndirectCommand *)indirect;
     * glDispatchComputeIndirect(cmd->num_groups_x, cmd->num_groups_y, cmd->num_groups_z);
     *  - ```
     *
     * Unlike {@see glDispatchCompute}, no error is generated if any of the `num_groups_x`,
     * `num_groups_y` or `num_groups_z` members of the `DispatchIndirectCommand` is larger than the value of
     * `GL_MAX_COMPUTE_WORK_GROUP_COUNT` for the corresponding dimension. In such circumstances, behavior is
     * undefined and may lead to application termination.
     *
     * @see http://docs.gl/gl4/glDispatchComputeIndirect
     * @since 4.3
     * @param int $indirect
     * @return void
     */
    public static function glDispatchComputeIndirect(int $indirect): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($indirect >= 0 && $indirect <= \PHP_INT_MAX, 'Argument $indirect overflow: C type GLintptr is required');

        $proc = self::getProc('glDispatchComputeIndirect', 'void (*)(GLintptr indirect)');
        $proc($indirect);
    }

    /**
     * May be used to copy data from one image (i.e. texture or renderbuffer) to another. `glCopyImageSubData` does
     * not perform general-purpose conversions such as scaling, resizing, blending, color-space, or format
     * conversions. It should be considered to operate in a manner similar to a CPU memcpy. CopyImageSubData can copy
     * between images with different internal formats, provided the formats are compatible.
     *
     *  - `glCopyImageSubData` also allows copying between certain types of compressed and uncompressed internal
     * formats. This copy does not perform on-the-fly compression or decompression. When copying from an uncompressed
     * internal format to a compressed internal format, each texel of uncompressed data becomes a single block of
     * compressed data. When copying from a compressed internal format to an uncompressed internal format, a block of
     * compressed data becomes a single texel of uncompressed data. The texel size of the uncompressed format must be
     * the same size the block size of the compressed formats. Thus it is permitted to copy between a 128-bit
     * uncompressed format and a compressed format which uses 8-bit 4x4 blocks, or between a 64-bit uncompressed
     * format and a compressed format which uses 4-bit 4x4 blocks.
     *
     * The source object is identified by *`srcName`* and *`srcTarget`* and the destination object is identified by
     * *`dstName`* and *`dstTarget`*. The interpretation of the name depends on the value of the corresponding
     * *`target`* parameter. If *`target`* is `GL_RENDERBUFFER`, the name is interpreted as the name of a
     * renderbuffer object. If the target parameter is a texture target, the name is interpreted as a texture object.
     * All non-proxy texture targets are accepted, with the exception of `GL_TEXTURE_BUFFER` and the cubemap face
     * selectors.
     *
     * *`srcLevel`* and *`dstLevel`* identify the source and destination level of detail. For textures, this must be
     * a valid level of detail in the texture object. For renderbuffers, this value must be zero.
     *
     * *`srcX`*, *`srcY`*, and *`srcZ`* specify the lower left texel coordinates of a *`srcWidth`*-wide by
     * *`srcHeight`*-high by *`srcDepth`*-deep rectangular subregion of the source texel array. Similarly, *`dstX`*,
     * *`dstY`* and *`dstZ`* specify the coordinates of a subregion of the destination texel array. The source and
     * destination subregions must be contained entirely within the specified level of the corresponding image
     * objects.
     *
     * The dimensions are always specified in texels, even for compressed texture formats. However, it should be
     * noted that if only one of the source and destination textures is compressed then the number of texels touched
     * in the compressed image will be a factor of the block size larger than in the uncompressed image.
     *
     * Slices of a `GL_TEXTURE_1D_ARRAY`, `GL_TEXTURE_2D_ARRAY`, `GL_TEXTURE_CUBE_MAP_ARRAY` `GL_TEXTURE_3D` and
     * faces of `GL_TEXTURE_CUBE_MAP` are all compatible provided they share a compatible internal format, and
     * multiple slices or faces may be copied between these objects with a single call by specifying the starting
     * slice with *`srcZ`* and *`dstZ`*, and the number of slices to be copied with *`srcDepth`*. Cubemap textures
     * always have six faces which are selected by a zero-based face index.
     *
     * For the purposes of CopyImageSubData, two internal formats are considered compatible if any of the following
     * conditions are met:
     *
     * - the formats are the same,
     * - the formats are considered compatible according to the compatibility rules used for texture views as defined
     * in section 3.9.X. In particular, if both internal formats are listed in the same entry of Table 3.X.2, they
     * are considered compatible, or
     * - one format is compressed and the other is uncompressed and Table 4.X.1 lists the two formats in the same
     * row.
     *
     *
     *
     * If the formats are not compatible, an INVALID_OPERATION error is generated.
     *
     * Table 1. Sized Internal Formats
     *
     * **Texel / Block Size** **Uncompressed Internal Format** **Compressed Internal Format(s)** 64-bit
     * `GL_RGBA32UI`, `GL_RGBA32I`, `GL_RGBA32F` `GL_COMPRESSED_RGBA_S3TC_DXT3_EXT`,
     * `GL_COMPRESSED_SRGB_ALPHA_S3TC_DXT3_EXT`, `GL_COMPRESSED_RGBA_S3TC_DXT5_EXT`,
     * `GL_COMPRESSED_SRGB_ALPHA_S3TC_DXT5_EXT`, `GL_COMPRESSED_RG_RGTC2`, `GL_COMPRESSED_SIGNED_RG_RGTC2`,
     * `GL_COMPRESSED_RGBA_BPTC_UNORM`, `GL_COMPRESSED_SRGB_ALPHA_BPTC_UNORM`, `GL_COMPRESSED_RGB_BPTC_SIGNED_FLOAT`,
     * `GL_COMPRESSED_RGB_BPTC_UNSIGNED_FLOAT` 128-bit `GL_RGBA16UI`, `GL_RGBA16I`, `GL_RGBA16F`, `GL_RG32F`,
     * `GL_RG32UI`, `GL_RG32I`, `GL_RGBA16`, `GL_RGBA16_SNORM` `GL_COMPRESSED_RGB_S3TC_DXT1_EXT`,
     * `GL_COMPRESSED_SRGB_S3TC_DXT1_EXT`, `GL_COMPRESSED_RGBA_S3TC_DXT1_EXT`,
     * `GL_COMPRESSED_SRGB_ALPHA_S3TC_DXT1_EXT`, `GL_COMPRESSED_RED_RGTC1`, `GL_COMPRESSED_SIGNED_RED_RGTC1`
     *
     * @see http://docs.gl/gl4/glCopyImageSubData
     * @since 4.3
     * @param int $srcName
     * @param int $srcTarget
     * @param int $srcLevel
     * @param int $srcX
     * @param int $srcY
     * @param int $srcZ
     * @param int $dstName
     * @param int $dstTarget
     * @param int $dstLevel
     * @param int $dstX
     * @param int $dstY
     * @param int $dstZ
     * @param int $srcWidth
     * @param int $srcHeight
     * @param int $srcDepth
     * @return void
     */
    public static function glCopyImageSubData(
        int $srcName,
        int $srcTarget,
        int $srcLevel,
        int $srcX,
        int $srcY,
        int $srcZ,
        int $dstName,
        int $dstTarget,
        int $dstLevel,
        int $dstX,
        int $dstY,
        int $dstZ,
        int $srcWidth,
        int $srcHeight,
        int $srcDepth
    ): void {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($srcName >= 0 && $srcName <= 4_294_967_295, 'Argument $srcName overflow: C type GLuint is required');
        assert($srcTarget >= 0 && $srcTarget <= 4_294_967_295, 'Argument $srcTarget overflow: C type GLenum is required');
        assert($srcLevel >= \PHP_INT_MIN && $srcLevel <= \PHP_INT_MAX, 'Argument $srcLevel overflow: C type GLint is required');
        assert($srcX >= \PHP_INT_MIN && $srcX <= \PHP_INT_MAX, 'Argument $srcX overflow: C type GLint is required');
        assert($srcY >= \PHP_INT_MIN && $srcY <= \PHP_INT_MAX, 'Argument $srcY overflow: C type GLint is required');
        assert($srcZ >= \PHP_INT_MIN && $srcZ <= \PHP_INT_MAX, 'Argument $srcZ overflow: C type GLint is required');
        assert($dstName >= 0 && $dstName <= 4_294_967_295, 'Argument $dstName overflow: C type GLuint is required');
        assert($dstTarget >= 0 && $dstTarget <= 4_294_967_295, 'Argument $dstTarget overflow: C type GLenum is required');
        assert($dstLevel >= \PHP_INT_MIN && $dstLevel <= \PHP_INT_MAX, 'Argument $dstLevel overflow: C type GLint is required');
        assert($dstX >= \PHP_INT_MIN && $dstX <= \PHP_INT_MAX, 'Argument $dstX overflow: C type GLint is required');
        assert($dstY >= \PHP_INT_MIN && $dstY <= \PHP_INT_MAX, 'Argument $dstY overflow: C type GLint is required');
        assert($dstZ >= \PHP_INT_MIN && $dstZ <= \PHP_INT_MAX, 'Argument $dstZ overflow: C type GLint is required');
        assert($srcWidth >= \PHP_INT_MIN && $srcWidth <= \PHP_INT_MAX, 'Argument $srcWidth overflow: C type GLsizei is required');
        assert($srcHeight >= \PHP_INT_MIN && $srcHeight <= \PHP_INT_MAX, 'Argument $srcHeight overflow: C type GLsizei is required');
        assert($srcDepth >= \PHP_INT_MIN && $srcDepth <= \PHP_INT_MAX, 'Argument $srcDepth overflow: C type GLsizei is required');

        $proc = self::getProc('glCopyImageSubData', 'void (*)(GLuint srcName, GLenum srcTarget, GLint srcLevel, GLint srcX, GLint srcY, GLint srcZ, GLuint dstName, GLenum dstTarget, GLint dstLevel, GLint dstX, GLint dstY, GLint dstZ, GLsizei srcWidth, GLsizei srcHeight, GLsizei srcDepth)');
        $proc($srcName, $srcTarget, $srcLevel, $srcX, $srcY, $srcZ, $dstName, $dstTarget, $dstLevel, $dstX, $dstY, $dstZ, $srcWidth, $srcHeight, $srcDepth);
    }

    /**
     * And `glNamedFramebufferParameteri` modify the value of the parameter named *`pname`* in the specified
     * framebuffer object. There are no modifiable parameters of the default draw and read framebuffer, so they are
     * not valid targets of these commands.
     *
     * For `glFramebufferParameteri`, the framebuffer object is that bound to *`target`*, which must be
     * `GL_DRAW_FRAMEBUFFER`, `GL_READ_FRAMEBUFFER` or `GL_FRAMEBUFFER`. `GL_FRAMEBUFFER` is equivalent to
     * `GL_DRAW_FRAMEBUFFER`.
     *
     * For `glNamedFramebufferParameteri`, *`framebuffer`* is the name of the framebuffer object.
     *
     * *`pname`* specifies the parameter to be modified. The following values are accepted:
     *
     *  - `GL_FRAMEBUFFER_DEFAULT_WIDTH` *`param`* specifies the assumed with for a framebuffer object with no
     * attachments. If a framebuffer has attachments then the width of those attachments is used, otherwise the value
     * of `GL_FRAMEBUFFER_DEFAULT_WIDTH` is used for the framebuffer. *`param`* must be greater than or equal to zero
     * and less than or equal to the value of `GL_MAX_FRAMEBUFFER_WIDTH`.
     *
     *  - `GL_FRAMEBUFFER_DEFAULT_HEIGHT` *`param`* specifies the assumed height for a framebuffer object with no
     * attachments. If a framebuffer has attachments then the height of those attachments is used, otherwise the
     * value of `GL_FRAMEBUFFER_DEFAULT_HEIGHT` is used for the framebuffer. *`param`* must be greater than or equal
     * to zero and less than or equal to the value of `GL_MAX_FRAMEBUFFER_HEIGHT`.
     *
     *  - `GL_FRAMEBUFFER_DEFAULT_LAYERS` *`param`* specifies the assumed number of layers for a framebuffer object
     * with no attachments. If a framebuffer has attachments then the layer count of those attachments is used,
     * otherwise the value of `GL_FRAMEBUFFER_DEFAULT_LAYERS` is used for the framebuffer. *`param`* must be greater
     * than or equal to zero and less than or equal to the value of `GL_MAX_FRAMEBUFFER_LAYERS`.
     *
     *  - `GL_FRAMEBUFFER_DEFAULT_SAMPLES` *`param`* specifies the assumed number of samples in a framebuffer object
     * with no attachments. If a framebuffer has attachments then the sample count of those attachments is used,
     * otherwise the value of `GL_FRAMEBUFFER_DEFAULT_SAMPLES` is used for the framebuffer. *`param`* must be greater
     * than or equal to zero and less than or equal to the value of `GL_MAX_FRAMEBUFFER_SAMPLE`.
     *
     *  - `GL_FRAMEBUFFER_DEFAULT_FIXED_SAMPLE_LOCATIONS` *`param`* specifies whether the framebuffer should assume
     * identical sample locations and the same number of samples for all texels in the virtual image. If *`param`* is
     * zero, then the implementation may vary the position or the count of samples within the virtual image from
     * pixel to pixel, otherwise it will use the same sample position and count for all pixels in the virtual image.
     *
     * @see http://docs.gl/gl4/glFramebufferParameteri
     * @since 4.3
     * @param int $target
     * @param int $pname
     * @param int $param
     * @return void
     */
    public static function glFramebufferParameteri(int $target, int $pname, int $param): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($param >= \PHP_INT_MIN && $param <= \PHP_INT_MAX, 'Argument $param overflow: C type GLint is required');

        $proc = self::getProc('glFramebufferParameteri', 'void (*)(GLenum target, GLenum pname, GLint param)');
        $proc($target, $pname, $param);
    }

    /**
     * @since 4.3
     * @param int $target
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetFramebufferParameteriv(int $target, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetFramebufferParameteriv', 'void (*)(GLenum target, GLenum pname, GLint *params)');
        $proc($target, $pname, $params);
    }

    /**
     * @since 4.3
     * @param int $target
     * @param int $internalformat
     * @param int $pname
     * @param int $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetInternalformati64v(int $target, int $internalformat, int $pname, int $bufSize, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($internalformat >= 0 && $internalformat <= 4_294_967_295, 'Argument $internalformat overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($bufSize >= \PHP_INT_MIN && $bufSize <= \PHP_INT_MAX, 'Argument $bufSize overflow: C type GLsizei is required');

        $proc = self::getProc('glGetInternalformati64v', 'void (*)(GLenum target, GLenum internalformat, GLenum pname, GLsizei bufSize, GLint64 *params)');
        $proc($target, $internalformat, $pname, $bufSize, $params);
    }

    /**
     * Invalidates all or part of a texture image. *`texture`* and *`level`* indicated which texture image is being
     * invalidated. After this command, data in that subregion have undefined values. *`xoffset`*, *`yoffset`*,
     * *`zoffset`*, *`width`*, *`height`*, and *`depth`* are interpreted as they are in
     * {@see glTexSubImage3D}. For texture targets that don't have certain dimensions, this command
     * treats those dimensions as having a size of 1. For example, to invalidate a portion of a two- dimensional
     * texture, the application would use *`zoffset`* equal to zero and *`depth`* equal to one. Cube map textures are
     * treated as an array of six slices in the z-dimension, where a value of *`zoffset`* is interpreted as
     * specifying face `GL_TEXTURE_CUBE_MAP_POSITIVE_X` + *`zoffset`*.
     *
     * *`level`* must be greater than or equal to zero and be less than the base 2 logarithm of the maximum texture
     * width, height, or depth. *`xoffset`*, *`yoffset`* and *`zoffset`* must be greater than or equal to zero and be
     * less than the width, height or depth of the image, respectively. Furthermore, *`xoffset`* + *`width`*,
     * *`yoffset`* + *`height`*, and *`zoffset`* + *`depth`* must be less than or equal to the width, height or depth
     * of the image, respectively.
     *
     * For textures of targets `GL_TEXTURE_RECTANGLE`, `GL_TEXTURE_BUFFER`, `GL_TEXTURE_2D_MULTISAMPLE`, or
     * `GL_TEXTURE_2D_MULTISAMPLE_ARRAY`, level must be zero.
     *
     * @see http://docs.gl/gl4/glInvalidateTexSubImage
     * @since 4.3
     * @param int $texture
     * @param int $level
     * @param int $xoffset
     * @param int $yoffset
     * @param int $zoffset
     * @param int $width
     * @param int $height
     * @param int $depth
     * @return void
     */
    public static function glInvalidateTexSubImage(int $texture, int $level, int $xoffset, int $yoffset, int $zoffset, int $width, int $height, int $depth): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($xoffset >= \PHP_INT_MIN && $xoffset <= \PHP_INT_MAX, 'Argument $xoffset overflow: C type GLint is required');
        assert($yoffset >= \PHP_INT_MIN && $yoffset <= \PHP_INT_MAX, 'Argument $yoffset overflow: C type GLint is required');
        assert($zoffset >= \PHP_INT_MIN && $zoffset <= \PHP_INT_MAX, 'Argument $zoffset overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');
        assert($depth >= \PHP_INT_MIN && $depth <= \PHP_INT_MAX, 'Argument $depth overflow: C type GLsizei is required');

        $proc = self::getProc('glInvalidateTexSubImage', 'void (*)(GLuint texture, GLint level, GLint xoffset, GLint yoffset, GLint zoffset, GLsizei width, GLsizei height, GLsizei depth)');
        $proc($texture, $level, $xoffset, $yoffset, $zoffset, $width, $height, $depth);
    }

    /**
     * Invalidates all of a texture image. *`texture`* and *`level`* indicated which texture image is being
     * invalidated. After this command, data in the texture image has undefined values.
     *
     * *`level`* must be greater than or equal to zero and be less than the base 2 logarithm of the maximum texture
     * width, height, or depth.
     *
     * For textures of targets `GL_TEXTURE_RECTANGLE`, `GL_TEXTURE_BUFFER`, `GL_TEXTURE_2D_MULTISAMPLE`, or
     * `GL_TEXTURE_2D_MULTISAMPLE_ARRAY`, level must be zero.
     *
     * @see http://docs.gl/gl4/glInvalidateTexImage
     * @since 4.3
     * @param int $texture
     * @param int $level
     * @return void
     */
    public static function glInvalidateTexImage(int $texture, int $level): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');

        $proc = self::getProc('glInvalidateTexImage', 'void (*)(GLuint texture, GLint level)');
        $proc($texture, $level);
    }

    /**
     * Invalidates all or part of the content of the data store of a buffer object. After invalidation, the content
     * of the specified range of the buffer's data store becomes undefined. The start of the range is given by
     * *`offset`* and its size is given by *`length`*, both measured in basic machine units.
     *
     * @see http://docs.gl/gl4/glInvalidateBufferSubData
     * @since 4.3
     * @param int $buffer
     * @param int $offset
     * @param int $length
     * @return void
     */
    public static function glInvalidateBufferSubData(int $buffer, int $offset, int $length): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLuint is required');
        assert($offset >= 0 && $offset <= \PHP_INT_MAX, 'Argument $offset overflow: C type GLintptr is required');
        assert($length >= 0 && $length <= \PHP_INT_MAX, 'Argument $length overflow: C type GLsizeiptr is required');

        $proc = self::getProc('glInvalidateBufferSubData', 'void (*)(GLuint buffer, GLintptr offset, GLsizeiptr length)');
        $proc($buffer, $offset, $length);
    }

    /**
     * Invalidates all of the content of the data store of a buffer object. After invalidation, the content of the
     * buffer's data store becomes undefined.
     *
     * @see http://docs.gl/gl4/glInvalidateBufferData
     * @since 4.3
     * @param int $buffer
     * @return void
     */
    public static function glInvalidateBufferData(int $buffer): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLuint is required');

        $proc = self::getProc('glInvalidateBufferData', 'void (*)(GLuint buffer)');
        $proc($buffer);
    }

    /**
     * And `glInvalidateNamedFramebufferData` invalidate the entire contents of a specified set of attachments of a
     * framebuffer.
     *
     * For `glInvalidateFramebuffer`, the framebuffer object is that bound to *`target`*. *`target`* must be
     * `GL_FRAMEBUFFER`, `GL_READ_FRAMEBUFFER` or `GL_DRAW_FRAMEBUFFER`. `GL_FRAMEBUFFER` is equivalent to
     * `GL_DRAW_FRAMEBUFFER`. Default framebuffers may also be invalidated if bound to *`target`*.
     *
     * For `glInvalidateNamedFramebufferData`, *`framebuffer`* is the name of the framebuffer object. If
     * *`framebuffer`* is zero, the default draw framebuffer is affected.
     *
     * The set of attachments whose contents are to be invalidated are specified in the *`attachments`* array, which
     * contains *`numAttachments`* elements.
     *
     * If the specified framebuffer is a framebuffer object, each element of *`attachments`* must be one of
     * `GL_DEPTH_ATTACHMENT`, `GL_STENCIL_ATTACHMENT` `GL_DEPTH_STENCIL_ATTACHMENT`, or `GL_COLOR_ATTACHMENT`*i*,
     * where *i* is between zero and the value of `GL_MAX_FRAMEBUFFER_ATTACHMENTS` minus one.
     *
     * If the specified framebuffer is a default framebuffer, each element of *`attachments`* must be one of
     * `GL_FRONT_LEFT`, `GL_FRONT_RIGHT`, `GL_BACK_LEFT`, `GL_BACK_RIGHT`, `GL_AUX`*i*, `GL_ACCUM`, `GL_COLOR`,
     * `GL_DEPTH`, or `GL_STENCIL`. `GL_COLOR`, is treated as `GL_BACK_LEFT` for a double-buffered context and
     * `GL_FRONT_LEFT` for a single-buffered context. The other attachments identify the corresponding specific
     * buffer.
     *
     * The entire contents of each specified attachment become undefined after execution of `glInvalidateFramebuffer`
     * or `glInvalidateNamedFramebufferData`.
     *
     * If the framebuffer object is not complete, `glInvalidateFramebuffer` and `glInvalidateNamedFramebufferData`
     * may be ignored. This is not an error.
     *
     * @see http://docs.gl/gl4/glInvalidateFramebuffer
     * @since 4.3
     * @param int $target
     * @param int $numAttachments
     * @param \FFI\CData|\FFI\CIntPtr|null $attachments
     * @return void
     */
    public static function glInvalidateFramebuffer(int $target, int $numAttachments, ?\FFI\CData $attachments): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($numAttachments >= \PHP_INT_MIN && $numAttachments <= \PHP_INT_MAX, 'Argument $numAttachments overflow: C type GLsizei is required');

        $proc = self::getProc('glInvalidateFramebuffer', 'void (*)(GLenum target, GLsizei numAttachments, const GLenum *attachments)');
        $proc($target, $numAttachments, $attachments);
    }

    /**
     * And `glInvalidateNamedFramebufferSubData` invalidate the contents of a specified region of a specified set of
     * attachments of a framebuffer.
     *
     * For `glInvalidateSubFramebuffer`, the framebuffer object is that bound to *`target`*, which must be one of
     * `GL_FRAMEBUFFER`, `GL_READ_FRAMEBUFFER` or `GL_DRAW_FRAMEBUFFER`. `GL_FRAMEBUFFER` is equivalent to
     * `GL_DRAW_FRAMEBUFFER`. Default framebuffers may also be invalidated if bound to *`target`*.
     *
     * For `glInvalidateNamedFramebufferSubData`, *`framebuffer`* is the name of the framebuffer object. If
     * *`framebuffer`* is zero, the default draw framebuffer is affected.
     *
     * The set of attachments of which a region is to be invalidated are specified in the *`attachments`* array,
     * which contains *`numAttachments`* elements.
     *
     * If the specified framebuffer is a framebuffer object, each element of *`attachments`* must be one of
     * `GL_DEPTH_ATTACHMENT`, `GL_STENCIL_ATTACHMENT` `GL_DEPTH_STENCIL_ATTACHMENT`, or `GL_COLOR_ATTACHMENT`*i*,
     * where *i* is between zero and the value of `GL_MAX_FRAMEBUFFER_ATTACHMENTS` minus one.
     *
     * If the specified framebuffer is a default framebuffer, each element of *`attachments`* must be one of
     * `GL_FRONT_LEFT`, `GL_FRONT_RIGHT`, `GL_BACK_LEFT`, `GL_BACK_RIGHT`, `GL_AUX`*i*, `GL_ACCUM`, `GL_COLOR`,
     * `GL_DEPTH`, or `GL_STENCIL`. `GL_COLOR`, is treated as `GL_BACK_LEFT` for a double-buffered context and
     * `GL_FRONT_LEFT` for a single-buffered context. The other attachments identify the corresponding specific
     * buffer.
     *
     * The contents of the specified region of each specified attachment become undefined after execution of
     * `glInvalidateSubFramebuffer` or `glInvalidateNamedFramebufferSubData`. The region to be invalidated is
     * specified by *`x`*, *`y`*, *`width`* and *`height`* where *`x`* and *`y`* give the offset from the origin
     * (with lower-left corner at $(0,0)$) and *`width`* and *`height`* are the width and height, respectively, of
     * the region. Any pixels lying outside of the window allocated to the current GL context (for the default
     * framebuffer), or outside of the attachments of the framebuffer object, are ignored. If the framebuffer object
     * is not complete, these commands may be ignored.
     *
     * If the framebuffer object is not complete, `glInvalidateSubFramebuffer` and
     * `glInvalidateNamedFramebufferSubData` may be ignored. This is not an error.
     *
     * @see http://docs.gl/gl4/glInvalidateSubFramebuffer
     * @since 4.3
     * @param int $target
     * @param int $numAttachments
     * @param \FFI\CData|\FFI\CIntPtr|null $attachments
     * @param int $x
     * @param int $y
     * @param int $width
     * @param int $height
     * @return void
     */
    public static function glInvalidateSubFramebuffer(int $target, int $numAttachments, ?\FFI\CData $attachments, int $x, int $y, int $width, int $height): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($numAttachments >= \PHP_INT_MIN && $numAttachments <= \PHP_INT_MAX, 'Argument $numAttachments overflow: C type GLsizei is required');
        assert($x >= \PHP_INT_MIN && $x <= \PHP_INT_MAX, 'Argument $x overflow: C type GLint is required');
        assert($y >= \PHP_INT_MIN && $y <= \PHP_INT_MAX, 'Argument $y overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');

        $proc = self::getProc('glInvalidateSubFramebuffer', 'void (*)(GLenum target, GLsizei numAttachments, const GLenum *attachments, GLint x, GLint y, GLsizei width, GLsizei height)');
        $proc($target, $numAttachments, $attachments, $x, $y, $width, $height);
    }

    /**
     * Specifies multiple geometric primitives with very few subroutine calls. `glMultiDrawArraysIndirect` behaves
     * similarly to a multitude of calls to {@see glDrawArraysInstancedBaseInstance},
     * execept that the parameters to each call to
     * {@see glDrawArraysInstancedBaseInstance} are stored in an array in memory at the
     * address given by *`indirect`*, separated by the stride, in basic machine units, specified by *`stride`*. If
     * *`stride`* is zero, then the array is assumed to be tightly packed in memory.
     *
     * The parameters addressed by *`indirect`* are packed into an array of structures, each element of which takes
     * the form (in C):
     *
     *  - ```
     * typedef struct {
     * uint count;
     * uint instanceCount;
     * uint first;
     * uint baseInstance;
     * } DrawArraysIndirectCommand;
     *  - ```
     *
     * A single call to `glMultiDrawArraysIndirect` is equivalent, assuming no errors are generated to:
     *
     *  - ```
     * GLsizei n;
     * for (n = 0; n < drawcount; n++) {
     * const DrawArraysIndirectCommand *cmd;
     * if (stride != 0) {
     * cmd = (const DrawArraysIndirectCommand *)((uintptr)indirect + n * stride);
     * } else {
     * cmd = (const DrawArraysIndirectCommand *)indirect + n;
     * }
     *
     * glDrawArraysInstancedBaseInstance(mode, cmd->first, cmd->count, cmd->instanceCount, cmd->baseInstance);
     * }
     *  - ```
     *
     * If a buffer is bound to the `GL_DRAW_INDIRECT_BUFFER` binding at the time of a call to
     * `glMultiDrawArraysIndirect`, *`indirect`* is interpreted as an offset, in basic machine units, into that
     * buffer and the parameter data is read from the buffer rather than from client memory.
     *
     * In contrast to {@see glDrawArraysInstancedBaseInstance}, the `first` member of
     * the parameter structure is unsigned, and out-of-range indices do not generate an error.
     *
     * Vertex attributes that are modified by `glMultiDrawArraysIndirect` have an unspecified value after
     * `glMultiDrawArraysIndirect` returns. Attributes that aren't modified remain well defined.
     *
     * @see http://docs.gl/gl4/glMultiDrawArraysIndirect
     * @since 4.3
     * @param int $mode
     * @param \FFI\CData|\FFI\CPtr|null $indirect
     * @param int $drawcount
     * @param int $stride
     * @return void
     */
    public static function glMultiDrawArraysIndirect(int $mode, ?\FFI\CData $indirect, int $drawcount, int $stride): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');
        assert($drawcount >= \PHP_INT_MIN && $drawcount <= \PHP_INT_MAX, 'Argument $drawcount overflow: C type GLsizei is required');
        assert($stride >= \PHP_INT_MIN && $stride <= \PHP_INT_MAX, 'Argument $stride overflow: C type GLsizei is required');

        $proc = self::getProc('glMultiDrawArraysIndirect', 'void (*)(GLenum mode, const void *indirect, GLsizei drawcount, GLsizei stride)');
        $proc($mode, $indirect, $drawcount, $stride);
    }

    /**
     * Specifies multiple indexed geometric primitives with very few subroutine calls. `glMultiDrawElementsIndirect`
     * behaves similarly to a multitude of calls to
     * {@see glDrawElementsInstancedBaseVertexBaseInstance}, execpt that
     * the parameters to
     * {@see glDrawElementsInstancedBaseVertexBaseInstance} are stored in
     * an array in memory at the address given by *`indirect`*, separated by the stride, in basic machine units,
     * specified by *`stride`*. If *`stride`* is zero, then the array is assumed to be tightly packed in memory.
     *
     * The parameters addressed by *`indirect`* are packed into a structure that takes the form (in C):
     *
     *  - ```
     * typedef struct {
     * uint count;
     * uint instanceCount;
     * uint firstIndex;
     * uint baseVertex;
     * uint baseInstance;
     * } DrawElementsIndirectCommand;
     *  - ```
     *
     * A single call to `glMultiDrawElementsIndirect` is equivalent, assuming no errors are generated to:
     *
     *  - ```
     * GLsizei n;
     * for (n = 0; n < drawcount; n++) {
     * const DrawElementsIndirectCommand *cmd;
     * if (stride != 0) {
     * cmd = (const DrawElementsIndirectCommand *)((uintptr)indirect + n * stride);
     * } else {
     * cmd = (const DrawElementsIndirectCommand *)indirect + n;
     * }
     *
     * glDrawElementsInstancedBaseVertexBaseInstance(mode,
     * cmd->count,
     * type,
     * cmd->firstIndex * size-of-type,
     * cmd->instanceCount,
     * cmd->baseVertex,
     * cmd->baseInstance);
     * }
     *  - ```
     *
     * If a buffer is bound to the `GL_DRAW_INDIRECT_BUFFER` binding at the time of a call to
     * `glDrawElementsIndirect`, *`indirect`* is interpreted as an offset, in basic machine units, into that buffer
     * and the parameter data is read from the buffer rather than from client memory.
     *
     * Note that indices stored in client memory are not supported. If no buffer is bound to the
     * `GL_ELEMENT_ARRAY_BUFFER` binding, an error will be generated.
     *
     * The results of the operation are undefined if the `reservedMustBeZero` member of the parameter structure is
     * non-zero. However, no error is generated in this case.
     *
     * Vertex attributes that are modified by `glDrawElementsIndirect` have an unspecified value after
     * `glDrawElementsIndirect` returns. Attributes that aren't modified remain well defined.
     *
     * @see http://docs.gl/gl4/glMultiDrawElementsIndirect
     * @since 4.3
     * @param int $mode
     * @param int $type
     * @param \FFI\CData|\FFI\CPtr|null $indirect
     * @param int $drawcount
     * @param int $stride
     * @return void
     */
    public static function glMultiDrawElementsIndirect(int $mode, int $type, ?\FFI\CData $indirect, int $drawcount, int $stride): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');
        assert($drawcount >= \PHP_INT_MIN && $drawcount <= \PHP_INT_MAX, 'Argument $drawcount overflow: C type GLsizei is required');
        assert($stride >= \PHP_INT_MIN && $stride <= \PHP_INT_MAX, 'Argument $stride overflow: C type GLsizei is required');

        $proc = self::getProc('glMultiDrawElementsIndirect', 'void (*)(GLenum mode, GLenum type, const void *indirect, GLsizei drawcount, GLsizei stride)');
        $proc($mode, $type, $indirect, $drawcount, $stride);
    }

    /**
     * @since 4.3
     * @param int $program
     * @param int $programInterface
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetProgramInterfaceiv(int $program, int $programInterface, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($programInterface >= 0 && $programInterface <= 4_294_967_295, 'Argument $programInterface overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetProgramInterfaceiv', 'void (*)(GLuint program, GLenum programInterface, GLenum pname, GLint *params)');
        $proc($program, $programInterface, $pname, $params);
    }

    /**
     * Returns the unsigned integer index assigned to a resource named *`name`* in the interface type
     * *`programInterface`* of program object *`program`*.
     *
     * *`program`* must be the name of an existing program object. *`programInterface`* is the name of the interface
     * within *`program`* which contains the resource named *`name`*and must be one of the following values:
     *
     *  - `GL_UNIFORM` The query is targeted at the set of active uniforms within *`program`*.
     *
     *  - `GL_UNIFORM_BLOCK` The query is targeted at the set of active uniform blocks within *`program`*.
     *
     *  - `GL_PROGRAM_INPUT` The query is targeted at the set of active input variables used by the first shader
     * stage of *`program`*. If *`program`* contains multiple shader stages then input variables from any stage other
     * than the first will not be enumerated.
     *
     *  - `GL_PROGRAM_OUTPUT` The query is targeted at the set of active output variables produced by the last shader
     * stage of *`program`*. If *`program`* contains multiple shader stages then output variables from any stage
     * other than the last will not be enumerated.
     *
     *  - `GL_VERTEX_SUBROUTINE`, `GL_TESS_CONTROL_SUBROUTINE`, `GL_TESS_EVALUATION_SUBROUTINE`,
     * `GL_GEOMETRY_SUBROUTINE`, `GL_FRAGMENT_SUBROUTINE`, `GL_COMPUTE_SUBROUTINE` The query is targeted at the set
     * of active subroutines for the vertex, tessellation control, tessellation evaluation, geometry, fragment and
     * compute shader stages of *`program`*, respectively.
     *
     *  - `GL_VERTEX_SUBROUTINE_UNIFORM`, `GL_TESS_CONTROL_SUBROUTINE_UNIFORM`,
     * `GL_TESS_EVALUATION_SUBROUTINE_UNIFORM`, `GL_GEOMETRY_SUBROUTINE_UNIFORM`, `GL_FRAGMENT_SUBROUTINE_UNIFORM`,
     * `GL_COMPUTE_SUBROUTINE_UNIFORM` The query is targeted at the set of active subroutine uniform variables used
     * by the vertex, tessellation control, tessellation evaluation, geometry, fragment and compute shader stages of
     * *`program`*, respectively.
     *
     *  - `GL_TRANSFORM_FEEDBACK_VARYING` The query is targeted at the set of output variables from the last
     * non-fragment stage of *`program`* that would be captured if transform feedback were active.
     *
     *  - `GL_TRANSFORM_FEEDBACK_BUFFER` The query is targeted at the set of active buffer binding points to which
     * output variables in the `GL_TRANSFORM_FEEDBACK_VARYING` interface are written.
     *
     *  - `GL_BUFFER_VARIABLE` The query is targeted at the set of active buffer variables used by *`program`*.
     *
     *  - `GL_SHADER_STORAGE_BLOCK` The query is targeted at the set of active shader storage blocks used by
     * *`program`*.
     *
     *
     *
     * If *`name`* exactly matches the name string of one of the active resources for *`programInterface`*, the index
     * of the matched resource is returned. Additionally, if *`name`* would exactly match the name string of an
     * active resource if "[0]" were appended to *`name`*, the index of the matched resource is returned. Otherwise,
     * *`name`* is considered not to be the name of an active resource, and `GL_INVALID_INDEX` is returned.
     *
     * For the interface `GL_TRANSFORM_FEEDBACK_VARYING`, the value `GL_INVALID_INDEX` should be returned when
     * querying the index assigned to the special names `gl_NextBuffer`, `gl_SkipComponents1`, `gl_SkipComponents2`,
     * `gl_SkipComponents3`, or `gl_SkipComponents4`.
     *
     * @see http://docs.gl/gl4/glGetProgramResourceIndex
     * @since 4.3
     * @param int $program
     * @param int $programInterface
     * @param \FFI\CData|\FFI\CIntPtr|null $name
     * @return int
     */
    public static function glGetProgramResourceIndex(int $program, int $programInterface, ?\FFI\CData $name): int
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($programInterface >= 0 && $programInterface <= 4_294_967_295, 'Argument $programInterface overflow: C type GLenum is required');

        $proc = self::getProc('glGetProgramResourceIndex', 'GLuint (*)(GLuint program, GLenum programInterface, const GLchar *name)');
        return $proc($program, $programInterface, $name);
    }

    /**
     * Retrieves the name string assigned to the single active resource with an index of *`index`* in the interface
     * *`programInterface`* of program object *`program`*. *`index`* must be less than the number of entries in the
     * active resource list for *`programInterface`*.
     *
     * *`program`* must be the name of an existing program object. *`programInterface`* is the name of the interface
     * within *`program`* which contains the resource and must be one of the following values:
     *
     *  - `GL_UNIFORM` The query is targeted at the set of active uniforms within *`program`*.
     *
     *  - `GL_UNIFORM_BLOCK` The query is targeted at the set of active uniform blocks within *`program`*.
     *
     *  - `GL_PROGRAM_INPUT` The query is targeted at the set of active input variables used by the first shader
     * stage of *`program`*. If *`program`* contains multiple shader stages then input variables from any stage other
     * than the first will not be enumerated.
     *
     *  - `GL_PROGRAM_OUTPUT` The query is targeted at the set of active output variables produced by the last shader
     * stage of *`program`*. If *`program`* contains multiple shader stages then output variables from any stage
     * other than the last will not be enumerated.
     *
     *  - `GL_VERTEX_SUBROUTINE`, `GL_TESS_CONTROL_SUBROUTINE`, `GL_TESS_EVALUATION_SUBROUTINE`,
     * `GL_GEOMETRY_SUBROUTINE`, `GL_FRAGMENT_SUBROUTINE`, `GL_COMPUTE_SUBROUTINE` The query is targeted at the set
     * of active subroutines for the vertex, tessellation control, tessellation evaluation, geometry, fragment and
     * compute shader stages of *`program`*, respectively.
     *
     *  - `GL_VERTEX_SUBROUTINE_UNIFORM`, `GL_TESS_CONTROL_SUBROUTINE_UNIFORM`,
     * `GL_TESS_EVALUATION_SUBROUTINE_UNIFORM`, `GL_GEOMETRY_SUBROUTINE_UNIFORM`, `GL_FRAGMENT_SUBROUTINE_UNIFORM`,
     * `GL_COMPUTE_SUBROUTINE_UNIFORM` The query is targeted at the set of active subroutine uniform variables used
     * by the vertex, tessellation control, tessellation evaluation, geometry, fragment and compute shader stages of
     * *`program`*, respectively.
     *
     *  - `GL_TRANSFORM_FEEDBACK_VARYING` The query is targeted at the set of output variables from the last
     * non-fragment stage of *`program`* that would be captured if transform feedback were active.
     *
     *  - `GL_BUFFER_VARIABLE` The query is targeted at the set of active buffer variables used by *`program`*.
     *
     *  - `GL_SHADER_STORAGE_BLOCK` The query is targeted at the set of active shader storage blocks used by
     * *`program`*.
     *
     *
     *
     * The name string assigned to the active resource identified by *`index`* is returned as a null-terminated
     * string in the character array whose address is given in *`name`*. The actual number of characters written into
     * *`name`*, excluding the null terminator, is returned in *`length`*. If *`length`* is NULL, no length is
     * returned. The maximum number of characters that may be written into *`name`*, including the null terminator,
     * is specified by *`bufSize`*. If the length of the name string *including the null terminator* is greater than
     * *`bufSize`*, the first *`bufSize`*-1 characters of the name string will be written to *`name`*, followed by a
     * null terminator. If *`bufSize`* is zero, no error will be generated but no characters will be written to
     * *`name`*. The length of the longest name string for *`programInterface`*&gt;, including a null terminator, can
     * be queried by calling {@see glGetProgramInterface} with a *`pname`* of `GL_MAX_NAME_LENGTH`.
     *
     * @see http://docs.gl/gl4/glGetProgramResourceName
     * @since 4.3
     * @param int $program
     * @param int $programInterface
     * @param int $index
     * @param int $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @param \FFI\CData|\FFI\CIntPtr|null $name
     * @return void
     */
    public static function glGetProgramResourceName(int $program, int $programInterface, int $index, int $bufSize, ?\FFI\CData $length, ?\FFI\CData $name): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($programInterface >= 0 && $programInterface <= 4_294_967_295, 'Argument $programInterface overflow: C type GLenum is required');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($bufSize >= \PHP_INT_MIN && $bufSize <= \PHP_INT_MAX, 'Argument $bufSize overflow: C type GLsizei is required');

        $proc = self::getProc('glGetProgramResourceName', 'void (*)(GLuint program, GLenum programInterface, GLuint index, GLsizei bufSize, GLsizei *length, GLchar *name)');
        $proc($program, $programInterface, $index, $bufSize, $length, $name);
    }

    /**
     * @since 4.3
     * @param int $program
     * @param int $programInterface
     * @param int $index
     * @param int $propCount
     * @param \FFI\CData|\FFI\CIntPtr|null $props
     * @param int $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetProgramResourceiv(
        int $program,
        int $programInterface,
        int $index,
        int $propCount,
        ?\FFI\CData $props,
        int $bufSize,
        ?\FFI\CData $length,
        ?\FFI\CData $params
    ): void {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($programInterface >= 0 && $programInterface <= 4_294_967_295, 'Argument $programInterface overflow: C type GLenum is required');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($propCount >= \PHP_INT_MIN && $propCount <= \PHP_INT_MAX, 'Argument $propCount overflow: C type GLsizei is required');
        assert($bufSize >= \PHP_INT_MIN && $bufSize <= \PHP_INT_MAX, 'Argument $bufSize overflow: C type GLsizei is required');

        $proc = self::getProc('glGetProgramResourceiv', 'void (*)(GLuint program, GLenum programInterface, GLuint index, GLsizei propCount, const GLenum *props, GLsizei bufSize, GLsizei *length, GLint *params)');
        $proc($program, $programInterface, $index, $propCount, $props, $bufSize, $length, $params);
    }

    /**
     * Returns the location assigned to the variable named *`name`* in interface *`programInterface`* of program
     * object *`program`*. *`program`* must be the name of a program that has been linked successfully.
     * *`programInterface`* must be one of `GL_UNIFORM`, `GL_PROGRAM_INPUT`, `GL_PROGRAM_OUTPUT`,
     * `GL_VERTEX_SUBROUTINE_UNIFORM`, `GL_TESS_CONTROL_SUBROUTINE_UNIFORM`, `GL_TESS_EVALUATION_SUBROUTINE_UNIFORM`,
     * `GL_GEOMETRY_SUBROUTINE_UNIFORM`, `GL_FRAGMENT_SUBROUTINE_UNIFORM`, `GL_COMPUTE_SUBROUTINE_UNIFORM`, or
     * `GL_TRANSFORM_FEEDBACK_BUFFER`.
     *
     * The value -1 will be returned if an error occurs, if *`name`* does not identify an active variable on
     * *`programInterface`*, or if *`name`* identifies an active variable that does not have a valid location
     * assigned, as described above. The locations returned by these commands are the same locations returned when
     * querying the `GL_LOCATION` and `GL_LOCATION_INDEX` resource properties.
     *
     * A string provided to `glGetProgramResourceLocation` is considered to match an active variable if:
     *
     * - the string exactly matches the name of the active variable
     * - if the string identifies the base name of an active array, where the string would exactly match the name of
     * the variable if the suffix "[0]" were appended to the string
     * - if the string identifies an active element of the array, where the string ends with the concatenation of the
     * "[" character, an integer *with no "+" sign, extra leading zeroes, or whitespace* identifying an array
     * element, and the "]" character, the integer is less than the number of active elements of the array variable,
     * and where the string would exactly match the enumerated name of the array if the decimal integer were replaced
     * with zero.
     *
     *
     *
     * Any other string is considered not to identify an active variable. If the string specifies an element of an
     * array variable, `glGetProgramResourceLocation` returns the location assigned to that element. If it specifies
     * the base name of an array, it identifies the resources associated with the first element of the array.
     *
     * @see http://docs.gl/gl4/glGetProgramResourceLocation
     * @since 4.3
     * @param int $program
     * @param int $programInterface
     * @param \FFI\CData|\FFI\CIntPtr|null $name
     * @return int
     */
    public static function glGetProgramResourceLocation(int $program, int $programInterface, ?\FFI\CData $name): int
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($programInterface >= 0 && $programInterface <= 4_294_967_295, 'Argument $programInterface overflow: C type GLenum is required');

        $proc = self::getProc('glGetProgramResourceLocation', 'GLint (*)(GLuint program, GLenum programInterface, const GLchar *name)');
        return $proc($program, $programInterface, $name);
    }

    /**
     * Returns the fragment color index assigned to the variable named *`name`* in interface *`programInterface`* of
     * program object *`program`*. *`program`* must be the name of a program that has been linked successfully.
     * *`programInterface`* must be `GL_PROGRAM_OUTPUT`.
     *
     * The value -1 will be returned if an error occurs, if *`name`* does not identify an active variable on
     * *`programInterface`*, or if *`name`* identifies an active variable that does not have a valid location
     * assigned, as described above. The locations returned by these commands are the same locations returned when
     * querying the `GL_LOCATION` and `GL_LOCATION_INDEX` resource properties.
     *
     * A string provided to `glGetProgramResourceLocationIndex` is considered to match an active variable if:
     *
     * - the string exactly matches the name of the active variable
     * - if the string identifies the base name of an active array, where the string would exactly match the name of
     * the variable if the suffix "[0]" were appended to the string
     * - if the string identifies an active element of the array, where the string ends with the concatenation of the
     * "[" character, an integer *with no "+" sign, extra leading zeroes, or whitespace* identifying an array
     * element, and the "]" character, the integer is less than the number of active elements of the array variable,
     * and where the string would exactly match the enumerated name of the array if the decimal integer were replaced
     * with zero.
     *
     *
     *
     * Any other string is considered not to identify an active variable. If the string specifies an element of an
     * array variable, `glGetProgramResourceLocation` returns the location assigned to that element. If it specifies
     * the base name of an array, it identifies the resources associated with the first element of the array.
     *
     * @see http://docs.gl/gl4/glGetProgramResourceLocationIndex
     * @since 4.3
     * @param int $program
     * @param int $programInterface
     * @param \FFI\CData|\FFI\CIntPtr|null $name
     * @return int
     */
    public static function glGetProgramResourceLocationIndex(int $program, int $programInterface, ?\FFI\CData $name): int
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($programInterface >= 0 && $programInterface <= 4_294_967_295, 'Argument $programInterface overflow: C type GLenum is required');

        $proc = self::getProc('glGetProgramResourceLocationIndex', 'GLint (*)(GLuint program, GLenum programInterface, const GLchar *name)');
        return $proc($program, $programInterface, $name);
    }

    /**
     * - `glShaderStorageBlockBinding`, changes the active shader storage block with an assigned index of
     * *`storageBlockIndex`* in program object *`program`*. *`storageBlockIndex`* must be an active shader storage
     * block index in *`program`*. *`storageBlockBinding`* must be less than the value of
     * `GL_MAX_SHADER_STORAGE_BUFFER_BINDINGS`. If successful, `glShaderStorageBinding` specifies that *`program`*
     * will use the data store of the buffer object bound to the binding point *`storageBlockBinding`* to read and
     * write the values of the buffer variables in the shader storage block identified by *`storageBlockIndex`*.
     *
     * @see http://docs.gl/gl4/glShaderStorageBlockBinding
     * @since 4.3
     * @param int $program
     * @param int $storageBlockIndex
     * @param int $storageBlockBinding
     * @return void
     */
    public static function glShaderStorageBlockBinding(int $program, int $storageBlockIndex, int $storageBlockBinding): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($storageBlockIndex >= 0 && $storageBlockIndex <= 4_294_967_295, 'Argument $storageBlockIndex overflow: C type GLuint is required');
        assert($storageBlockBinding >= 0 && $storageBlockBinding <= 4_294_967_295, 'Argument $storageBlockBinding overflow: C type GLuint is required');

        $proc = self::getProc('glShaderStorageBlockBinding', 'void (*)(GLuint program, GLuint storageBlockIndex, GLuint storageBlockBinding)');
        $proc($program, $storageBlockIndex, $storageBlockBinding);
    }

    /**
     * And `glTextureBufferRange` attach a range of the data store of a specified buffer object to a specified
     * texture object, and specify the storage format for the texture image found found in the buffer object. The
     * texture object must be a buffer texture.
     *
     * If *`buffer`* is zero, any buffer object attached to the buffer texture is detached and no new buffer object
     * is attached. If *`buffer`* is non-zero, it must be the name of an existing buffer object.
     *
     * The start and size of the range are specified by *`offset`* and *`size`* respectively, both measured in basic
     * machine units. *`offset`* must be greater than or equal to zero, *`size`* must be greater than zero, and the
     * sum of *`offset`* and *`size`* must not exceed the value of `GL_BUFFER_SIZE` for *`buffer`*. Furthermore,
     * *`offset`* must be an integer multiple of the value of `GL_TEXTURE_BUFFER_OFFSET_ALIGNMENT`.
     *
     * *`internalformat`* specifies the storage format, and must be one of the following sized internal formats:
     *
     * **Component** **Sized Internal Format** **Base Type** **Components** **Norm** 0 1 2 3 `GL_R8` ubyte 1 YES R 0
     * 0 1 `GL_R16` ushort 1 YES R 0 0 1 `GL_R16F` half 1 NO R 0 0 1 `GL_R32F` float 1 NO R 0 0 1 `GL_R8I` byte 1 NO
     * R 0 0 1 `GL_R16I` short 1 NO R 0 0 1 `GL_R32I` int 1 NO R 0 0 1 `GL_R8UI` ubyte 1 NO R 0 0 1 `GL_R16UI` ushort
     * 1 NO R 0 0 1 `GL_R32UI` uint 1 NO R 0 0 1 `GL_RG8` ubyte 2 YES R G 0 1 `GL_RG16` ushort 2 YES R G 0 1
     * `GL_RG16F` half 2 NO R G 0 1 `GL_RG32F` float 2 NO R G 0 1 `GL_RG8I` byte 2 NO R G 0 1 `GL_RG16I` short 2 NO R
     * G 0 1 `GL_RG32I` int 2 NO R G 0 1 `GL_RG8UI` ubyte 2 NO R G 0 1 `GL_RG16UI` ushort 2 NO R G 0 1 `GL_RG32UI`
     * uint 2 NO R G 0 1 `GL_RGB32F` float 3 NO R G B 1 `GL_RGB32I` int 3 NO R G B 1 `GL_RGB32UI` uint 3 NO R G B 1
     * `GL_RGBA8` uint 4 YES R G B A `GL_RGBA16` short 4 YES R G B A `GL_RGBA16F` half 4 NO R G B A `GL_RGBA32F`
     * float 4 NO R G B A `GL_RGBA8I` byte 4 NO R G B A `GL_RGBA16I` short 4 NO R G B A `GL_RGBA32I` int 4 NO R G B A
     * `GL_RGBA8UI` ubyte 4 NO R G B A `GL_RGBA16UI` ushort 4 NO R G B A `GL_RGBA32UI` uint 4 NO R G B A
     *
     * When a range of a buffer object is attached to a buffer texture, the specified range of the buffer object's
     * data store is taken as the texture's texel array. The number of texels in the buffer texture's texel array is
     * given by $$ \\left\\lfloor { size \\over { components \\times sizeof(base\\_type) } } \\right\\rfloor $$ where
     * $components$ and $base\\_type$ are the element count and base data type for elements, as specified in the
     * table above. The number of texels in the texel array is then clamped to the value of the
     * implementation-dependent limit `GL_MAX_TEXTURE_BUFFER_SIZE`. When a buffer texture is accessed in a shader,
     * the results of a texel fetch are undefined if the specified texel coordinate is negative, or greater than or
     * equal to the clamped number of texels in the texel array.
     *
     * @see http://docs.gl/gl4/glTexBufferRange
     * @since 4.3
     * @param int $target
     * @param int $internalformat
     * @param int $buffer
     * @param int $offset
     * @param int $size
     * @return void
     */
    public static function glTexBufferRange(int $target, int $internalformat, int $buffer, int $offset, int $size): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($internalformat >= 0 && $internalformat <= 4_294_967_295, 'Argument $internalformat overflow: C type GLenum is required');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLuint is required');
        assert($offset >= 0 && $offset <= \PHP_INT_MAX, 'Argument $offset overflow: C type GLintptr is required');
        assert($size >= 0 && $size <= \PHP_INT_MAX, 'Argument $size overflow: C type GLsizeiptr is required');

        $proc = self::getProc('glTexBufferRange', 'void (*)(GLenum target, GLenum internalformat, GLuint buffer, GLintptr offset, GLsizeiptr size)');
        $proc($target, $internalformat, $buffer, $offset, $size);
    }

    /**
     * And `glTextureStorage2DMultisample` specify the storage requirements for a two-dimensional multisample
     * texture. Once a texture is specified with this command, its format and dimensions become immutable unless it
     * is a proxy texture. The contents of the image may still be modified, however, its storage requirements may not
     * change. Such a texture is referred to as an *immutable-format* texture.
     *
     * *`samples`* specifies the number of samples to be used for the texture and must be greater than zero and less
     * than or equal to the value of `GL_MAX_SAMPLES`. *`internalformat`* must be a color-renderable,
     * depth-renderable, or stencil-renderable format. *`width`* and *`height`* specify the width and height,
     * respectively, of the texture. If *`fixedsamplelocations`* is `GL_TRUE`, the image will use identical sample
     * locations and the same number of samples for all texels in the image, and the sample locations will not depend
     * on the internal format or size of the image.
     *
     * Table 1. Sized Internal Formats
     *
     * **Sized Internal Format** **Base Internal Format** **Red Bits** **Green Bits** **Blue Bits** **Alpha Bits**
     * **Shared Bits** `GL_R8` `GL_RED` 8 `GL_R8_SNORM` `GL_RED` s8 `GL_R16` `GL_RED` 16 `GL_R16_SNORM` `GL_RED` s16
     * `GL_RG8` `GL_RG` 8 8 `GL_RG8_SNORM` `GL_RG` s8 s8 `GL_RG16` `GL_RG` 16 16 `GL_RG16_SNORM` `GL_RG` s16 s16
     * `GL_R3_G3_B2` `GL_RGB` 3 3 2 `GL_RGB4` `GL_RGB` 4 4 4 `GL_RGB5` `GL_RGB` 5 5 5 `GL_RGB8` `GL_RGB` 8 8 8
     * `GL_RGB8_SNORM` `GL_RGB` s8 s8 s8 `GL_RGB10` `GL_RGB` 10 10 10 `GL_RGB12` `GL_RGB` 12 12 12 `GL_RGB16_SNORM`
     * `GL_RGB` 16 16 16 `GL_RGBA2` `GL_RGB` 2 2 2 2 `GL_RGBA4` `GL_RGB` 4 4 4 4 `GL_RGB5_A1` `GL_RGBA` 5 5 5 1
     * `GL_RGBA8` `GL_RGBA` 8 8 8 8 `GL_RGBA8_SNORM` `GL_RGBA` s8 s8 s8 s8 `GL_RGB10_A2` `GL_RGBA` 10 10 10 2
     * `GL_RGB10_A2UI` `GL_RGBA` ui10 ui10 ui10 ui2 `GL_RGBA12` `GL_RGBA` 12 12 12 12 `GL_RGBA16` `GL_RGBA` 16 16 16
     * 16 `GL_SRGB8` `GL_RGB` 8 8 8 `GL_SRGB8_ALPHA8` `GL_RGBA` 8 8 8 8 `GL_R16F` `GL_RED` f16 `GL_RG16F` `GL_RG` f16
     * f16 `GL_RGB16F` `GL_RGB` f16 f16 f16 `GL_RGBA16F` `GL_RGBA` f16 f16 f16 f16 `GL_R32F` `GL_RED` f32 `GL_RG32F`
     * `GL_RG` f32 f32 `GL_RGB32F` `GL_RGB` f32 f32 f32 `GL_RGBA32F` `GL_RGBA` f32 f32 f32 f32 `GL_R11F_G11F_B10F`
     * `GL_RGB` f11 f11 f10 `GL_RGB9_E5` `GL_RGB` 9 9 9 5 `GL_R8I` `GL_RED` i8 `GL_R8UI` `GL_RED` ui8 `GL_R16I`
     * `GL_RED` i16 `GL_R16UI` `GL_RED` ui16 `GL_R32I` `GL_RED` i32 `GL_R32UI` `GL_RED` ui32 `GL_RG8I` `GL_RG` i8 i8
     * `GL_RG8UI` `GL_RG` ui8 ui8 `GL_RG16I` `GL_RG` i16 i16 `GL_RG16UI` `GL_RG` ui16 ui16 `GL_RG32I` `GL_RG` i32 i32
     * `GL_RG32UI` `GL_RG` ui32 ui32 `GL_RGB8I` `GL_RGB` i8 i8 i8 `GL_RGB8UI` `GL_RGB` ui8 ui8 ui8 `GL_RGB16I`
     * `GL_RGB` i16 i16 i16 `GL_RGB16UI` `GL_RGB` ui16 ui16 ui16 `GL_RGB32I` `GL_RGB` i32 i32 i32 `GL_RGB32UI`
     * `GL_RGB` ui32 ui32 ui32 `GL_RGBA8I` `GL_RGBA` i8 i8 i8 i8 `GL_RGBA8UI` `GL_RGBA` ui8 ui8 ui8 ui8 `GL_RGBA16I`
     * `GL_RGBA` i16 i16 i16 i16 `GL_RGBA16UI` `GL_RGBA` ui16 ui16 ui16 ui16 `GL_RGBA32I` `GL_RGBA` i32 i32 i32 i32
     * `GL_RGBA32UI` `GL_RGBA` ui32 ui32 ui32 ui32
     *
     * @see http://docs.gl/gl4/glTexStorage2DMultisample
     * @since 4.3
     * @param int $target
     * @param int $samples
     * @param int $internalformat
     * @param int $width
     * @param int $height
     * @param int $fixedsamplelocations
     * @return void
     */
    public static function glTexStorage2DMultisample(int $target, int $samples, int $internalformat, int $width, int $height, int $fixedsamplelocations): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($samples >= \PHP_INT_MIN && $samples <= \PHP_INT_MAX, 'Argument $samples overflow: C type GLsizei is required');
        assert($internalformat >= 0 && $internalformat <= 4_294_967_295, 'Argument $internalformat overflow: C type GLenum is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');
        assert($fixedsamplelocations >= 0 && $fixedsamplelocations <= 255, 'Argument $fixedsamplelocations overflow: C type GLboolean is required');

        $proc = self::getProc('glTexStorage2DMultisample', 'void (*)(GLenum target, GLsizei samples, GLenum internalformat, GLsizei width, GLsizei height, GLboolean fixedsamplelocations)');
        $proc($target, $samples, $internalformat, $width, $height, $fixedsamplelocations);
    }

    /**
     * And `glTextureStorage3DMultisample` specify the storage requirements for a two-dimensional multisample array
     * texture. Once a texture is specified with this command, its format and dimensions become immutable unless it
     * is a proxy texture. The contents of the image may still be modified, however, its storage requirements may not
     * change. Such a texture is referred to as an *immutable-format* texture.
     *
     * *`samples`* specifies the number of samples to be used for the texture and must be greater than zero and less
     * than or equal to the value of `GL_MAX_SAMPLES`. *`internalformat`* must be a color-renderable,
     * depth-renderable, or stencil-renderable format. *`width`* and *`height`* specify the width and height,
     * respectively, of the texture and *`depth`* specifies the depth (or the number of layers) of the texture. If
     * *`fixedsamplelocations`* is `GL_TRUE`, the image will use identical sample locations and the same number of
     * samples for all texels in the image, and the sample locations will not depend on the internal format or size
     * of the image.
     *
     * Table 1. Sized Internal Formats
     *
     * **Sized Internal Format** **Base Internal Format** **Red Bits** **Green Bits** **Blue Bits** **Alpha Bits**
     * **Shared Bits** `GL_R8` `GL_RED` 8 `GL_R8_SNORM` `GL_RED` s8 `GL_R16` `GL_RED` 16 `GL_R16_SNORM` `GL_RED` s16
     * `GL_RG8` `GL_RG` 8 8 `GL_RG8_SNORM` `GL_RG` s8 s8 `GL_RG16` `GL_RG` 16 16 `GL_RG16_SNORM` `GL_RG` s16 s16
     * `GL_R3_G3_B2` `GL_RGB` 3 3 2 `GL_RGB4` `GL_RGB` 4 4 4 `GL_RGB5` `GL_RGB` 5 5 5 `GL_RGB8` `GL_RGB` 8 8 8
     * `GL_RGB8_SNORM` `GL_RGB` s8 s8 s8 `GL_RGB10` `GL_RGB` 10 10 10 `GL_RGB12` `GL_RGB` 12 12 12 `GL_RGB16_SNORM`
     * `GL_RGB` 16 16 16 `GL_RGBA2` `GL_RGB` 2 2 2 2 `GL_RGBA4` `GL_RGB` 4 4 4 4 `GL_RGB5_A1` `GL_RGBA` 5 5 5 1
     * `GL_RGBA8` `GL_RGBA` 8 8 8 8 `GL_RGBA8_SNORM` `GL_RGBA` s8 s8 s8 s8 `GL_RGB10_A2` `GL_RGBA` 10 10 10 2
     * `GL_RGB10_A2UI` `GL_RGBA` ui10 ui10 ui10 ui2 `GL_RGBA12` `GL_RGBA` 12 12 12 12 `GL_RGBA16` `GL_RGBA` 16 16 16
     * 16 `GL_SRGB8` `GL_RGB` 8 8 8 `GL_SRGB8_ALPHA8` `GL_RGBA` 8 8 8 8 `GL_R16F` `GL_RED` f16 `GL_RG16F` `GL_RG` f16
     * f16 `GL_RGB16F` `GL_RGB` f16 f16 f16 `GL_RGBA16F` `GL_RGBA` f16 f16 f16 f16 `GL_R32F` `GL_RED` f32 `GL_RG32F`
     * `GL_RG` f32 f32 `GL_RGB32F` `GL_RGB` f32 f32 f32 `GL_RGBA32F` `GL_RGBA` f32 f32 f32 f32 `GL_R11F_G11F_B10F`
     * `GL_RGB` f11 f11 f10 `GL_RGB9_E5` `GL_RGB` 9 9 9 5 `GL_R8I` `GL_RED` i8 `GL_R8UI` `GL_RED` ui8 `GL_R16I`
     * `GL_RED` i16 `GL_R16UI` `GL_RED` ui16 `GL_R32I` `GL_RED` i32 `GL_R32UI` `GL_RED` ui32 `GL_RG8I` `GL_RG` i8 i8
     * `GL_RG8UI` `GL_RG` ui8 ui8 `GL_RG16I` `GL_RG` i16 i16 `GL_RG16UI` `GL_RG` ui16 ui16 `GL_RG32I` `GL_RG` i32 i32
     * `GL_RG32UI` `GL_RG` ui32 ui32 `GL_RGB8I` `GL_RGB` i8 i8 i8 `GL_RGB8UI` `GL_RGB` ui8 ui8 ui8 `GL_RGB16I`
     * `GL_RGB` i16 i16 i16 `GL_RGB16UI` `GL_RGB` ui16 ui16 ui16 `GL_RGB32I` `GL_RGB` i32 i32 i32 `GL_RGB32UI`
     * `GL_RGB` ui32 ui32 ui32 `GL_RGBA8I` `GL_RGBA` i8 i8 i8 i8 `GL_RGBA8UI` `GL_RGBA` ui8 ui8 ui8 ui8 `GL_RGBA16I`
     * `GL_RGBA` i16 i16 i16 i16 `GL_RGBA16UI` `GL_RGBA` ui16 ui16 ui16 ui16 `GL_RGBA32I` `GL_RGBA` i32 i32 i32 i32
     * `GL_RGBA32UI` `GL_RGBA` ui32 ui32 ui32 ui32
     *
     * @see http://docs.gl/gl4/glTexStorage3DMultisample
     * @since 4.3
     * @param int $target
     * @param int $samples
     * @param int $internalformat
     * @param int $width
     * @param int $height
     * @param int $depth
     * @param int $fixedsamplelocations
     * @return void
     */
    public static function glTexStorage3DMultisample(int $target, int $samples, int $internalformat, int $width, int $height, int $depth, int $fixedsamplelocations): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($samples >= \PHP_INT_MIN && $samples <= \PHP_INT_MAX, 'Argument $samples overflow: C type GLsizei is required');
        assert($internalformat >= 0 && $internalformat <= 4_294_967_295, 'Argument $internalformat overflow: C type GLenum is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');
        assert($depth >= \PHP_INT_MIN && $depth <= \PHP_INT_MAX, 'Argument $depth overflow: C type GLsizei is required');
        assert($fixedsamplelocations >= 0 && $fixedsamplelocations <= 255, 'Argument $fixedsamplelocations overflow: C type GLboolean is required');

        $proc = self::getProc('glTexStorage3DMultisample', 'void (*)(GLenum target, GLsizei samples, GLenum internalformat, GLsizei width, GLsizei height, GLsizei depth, GLboolean fixedsamplelocations)');
        $proc($target, $samples, $internalformat, $width, $height, $depth, $fixedsamplelocations);
    }

    /**
     * Initializes a texture object as an alias, or view of another texture object, sharing some or all of the parent
     * texture's data store with the initialized texture. *`texture`* specifies a name previously reserved by a
     * successful call to {@see glGenTextures} but that has not yet been bound or given a target.
     * *`target`* specifies the target for the newly initialized texture and must be compatible with the target of
     * the parent texture, given in *`origtexture`* as specified in the following table:
     *
     * Original Target Compatible New Targets `GL_TEXTURE_1D` `GL_TEXTURE_1D`, `GL_TEXTURE_1D_ARRAY` `GL_TEXTURE_2D`
     * `GL_TEXTURE_2D`, `GL_TEXTURE_2D_ARRAY` `GL_TEXTURE_3D` `GL_TEXTURE_3D` `GL_TEXTURE_CUBE_MAP`
     * `GL_TEXTURE_CUBE_MAP`, `GL_TEXTURE_2D`, `GL_TEXTURE_2D_ARRAY`, `GL_TEXTUER_CUBE_MAP_ARRAY`
     * `GL_TEXTURE_RECTANGLE` `GL_TEXTURE_RECTANGLE` `GL_TEXTURE_BUFFER` *none* `GL_TEXTURE_1D_ARRAY`
     * `GL_TEXTURE_1D`, `GL_TEXTURE_1D_ARRAY` `GL_TEXTURE_2D_ARRAY` `GL_TEXTURE_2D`, `GL_TEXTURE_2D_ARRAY`
     * `GL_TEXTURE_CUBE_MAP_ARRAY` `GL_TEXTURE_CUBE_MAP`, `GL_TEXTURE_2D`, `GL_TEXTURE_2D_ARRAY`,
     * `GL_TEXTUER_CUBE_MAP_ARRAY` `GL_TEXTURE_2D_MULTISAMPLE` `GL_TEXTURE_2D_MULTISAMPLE`,
     * `GL_TEXTURE_MULTISAMPLE_ARRAY` `GL_TEXTURE_2D_MULTISAMPLE_ARRAY` `GL_TEXTURE_2D_MULTISAMPLE`,
     * `GL_TEXTURE_MULTISAMPLE_ARRAY`
     *
     * The value of `GL_TEXTURE_IMMUTABLE_FORMAT` for *`origtexture`* must be `GL_TRUE`. After initialization,
     * *`texture`* inherits the data store of the parent texture, *`origtexture`* and is usable as a normal texture
     * object with target *`target`*. Data in the shared store is reinterpreted with the new internal format
     * specified by *`internalformat`*. *`internalformat`* must be compatible with the internal format of the parent
     * texture as specified in the following table:
     *
     * Class Internal Formats 128-bit `GL_RGBA32F`, `GL_RGBA32UI`, `GL_RGBA32I` 96-bit `GL_RGB32F`, `GL_RGB32UI`,
     * `GL_RGB32I` 64-bit `GL_RGBA16F`, `GL_RG32F`, `GL_RGBA16UI`, `GL_RG32UI`, `GL_RGBA16I`, `GL_RG32I`,
     * `GL_RGBA16`, `GL_RGBA16_SNORM` 48-bit `GL_RGB16`, `GL_RGB16_SNORM`, `GL_RGB16F`, `GL_RGB16UI`, `GL_RGB16I`
     * 32-bit `GL_RG16F`, `GL_R11F_G11F_B10F`, `GL_R32F`, `GL_RGB10_A2UI`, `GL_RGBA8UI`, `GL_RG16UI`, `GL_R32UI`,
     * `GL_RGBA8I`, `GL_RG16I`, `GL_R32I`, `GL_RGB10_A2`, `GL_RGBA8`, `GL_RG16`, `GL_RGBA8_SNORM`, `GL_RG16_SNORM`,
     * `GL_SRGB8_ALPHA8`, `GL_RGB9_E5` 24-bit `GL_RGB8`, `GL_RGB8_SNORM`, `GL_SRGB8`, `GL_RGB8UI`, `GL_RGB8I` 16-bit
     * `GL_R16F`, `GL_RG8UI`, `GL_R16UI`, `GL_RG8I`, `GL_R16I`, `GL_RG8`, `GL_R16`, `GL_RG8_SNORM`, `GL_R16_SNORM`
     * 8-bit `GL_R8UI`, `GL_R8I`, `GL_R8`, `GL_R8_SNORM` `GL_RGTC1_RED` `GL_COMPRESSED_RED_RGTC1`,
     * `GL_COMPRESSED_SIGNED_RED_RGTC1` `GL_RGTC2_RG` `GL_COMPRESSED_RG_RGTC2`, `GL_COMPRESSED_SIGNED_RG_RGTC2`
     * `GL_BPTC_UNORM` `GL_COMPRESSED_RGBA_BPTC_UNORM`, `GL_COMPRESSED_SRGB_ALPHA_BPTC_UNORM` `GL_BPTC_FLOAT`
     * `GL_COMPRESSED_RGB_BPTC_SIGNED_FLOAT`, `GL_COMPRESSED_RGB_BPTC_UNSIGNED_FLOAT`
     *
     * If the original texture is an array or has multiple mipmap levels, the parameters *`minlayer`*, *`numlayers`*,
     * *`minlevel`*, and *`numlevels`* control which of those slices and levels are considered part of the texture.
     * The *`minlevel`* and *`minlayer`* parameters are relative to the view of the original texture. If
     * *`numlayers`* or *`numlevels`* extend beyond the original texture, they are clamped to the max extent of the
     * original texture.
     *
     * If the new texture's target is `GL_TEXTURE_CUBE_MAP`, the clamped *`numlayers`* must be equal to 6. If the new
     * texture's target is `GL_TEXTURE_CUBE_MAP_ARRAY`, then *`numlayers`* counts layer-faces rather than layers, and
     * the clamped *`numlayers`* must be a multiple of 6. If the new texture's target is `GL_TEXTURE_CUBE_MAP` or
     * `GL_TEXTURE_CUBE_MAP_ARRAY`, the width and height of the original texture's levels must be equal.
     *
     * When the original texture's target is `GL_TEXTURE_CUBE_MAP`, the layer parameters are interpreted in the same
     * order as if it were a `GL_TEXTURE_CUBE_MAP_ARRAY` with 6 layer-faces.
     *
     * If *`target`* is `GL_TEXTURE_1D`, `GL_TEXTURE_2D`, `GL_TEXTURE_3D`, `GL_TEXTURE_RECTANGLE`, or
     * `GL_TEXTURE_2D_MULTISAMPLE`, *`numlayers`* must equal 1.
     *
     * The dimensions of the original texture must be less than or equal to the maximum supported dimensions of the
     * new target. For example, if the original texture has a `GL_TEXTURE_2D_ARRAY` target and its width is greater
     * than `GL_MAX_CUBE_MAP_TEXTURE_SIZE`, an error will be generated if `glTextureView` is called to create a
     * `GL_TEXTURE_CUBE_MAP` view.
     *
     * Texture commands that take a *`level`* or *`layer`* parameter, such as {@see glTexSubImage2D},
     * interpret that parameter to be relative to the view of the texture. i.e. the mipmap level of the data store
     * that would be updated via {@see TexSubImage2D} would be the sum of *`level`* and the value of
     * `GL_TEXTURE_VIEW_MIN_LEVEL`.
     *
     * @see http://docs.gl/gl4/glTextureView
     * @since 4.3
     * @param int $texture
     * @param int $target
     * @param int $origtexture
     * @param int $internalformat
     * @param int $minlevel
     * @param int $numlevels
     * @param int $minlayer
     * @param int $numlayers
     * @return void
     */
    public static function glTextureView(
        int $texture,
        int $target,
        int $origtexture,
        int $internalformat,
        int $minlevel,
        int $numlevels,
        int $minlayer,
        int $numlayers
    ): void {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($origtexture >= 0 && $origtexture <= 4_294_967_295, 'Argument $origtexture overflow: C type GLuint is required');
        assert($internalformat >= 0 && $internalformat <= 4_294_967_295, 'Argument $internalformat overflow: C type GLenum is required');
        assert($minlevel >= 0 && $minlevel <= 4_294_967_295, 'Argument $minlevel overflow: C type GLuint is required');
        assert($numlevels >= 0 && $numlevels <= 4_294_967_295, 'Argument $numlevels overflow: C type GLuint is required');
        assert($minlayer >= 0 && $minlayer <= 4_294_967_295, 'Argument $minlayer overflow: C type GLuint is required');
        assert($numlayers >= 0 && $numlayers <= 4_294_967_295, 'Argument $numlayers overflow: C type GLuint is required');

        $proc = self::getProc('glTextureView', 'void (*)(GLuint texture, GLenum target, GLuint origtexture, GLenum internalformat, GLuint minlevel, GLuint numlevels, GLuint minlayer, GLuint numlayers)');
        $proc($texture, $target, $origtexture, $internalformat, $minlevel, $numlevels, $minlayer, $numlayers);
    }

    /**
     * And `glVertexArrayVertexBuffer` bind the buffer named *`buffer`* to the vertex buffer binding point whose
     * index is given by *`bindingindex`*. `glBindVertexBuffer` modifies the binding of the currently bound vertex
     * array object, whereas `glVertexArrayVertexBuffer` allows the caller to specify ID of the vertex array object
     * with an argument named *`vaobj`*, for which the binding should be modified. *`offset`* and *`stride`* specify
     * the offset of the first element within the buffer and the distance between elements within the buffer,
     * respectively, and are both measured in basic machine units. *`bindingindex`* must be less than the value of
     * `GL_MAX_VERTEX_ATTRIB_BINDINGS`. *`offset`* and *`stride`* must be greater than or equal to zero. If
     * *`buffer`* is zero, then any buffer currently bound to the specified binding point is unbound.
     *
     * If *`buffer`* is not the name of an existing buffer object, the GL first creates a new state vector,
     * initialized with a zero-sized memory buffer and comprising all the state and with the same initial values as
     * in case of `glBindBuffer`. *`buffer`* is then attached to the specified *`bindingindex`* of the vertex array
     * object.
     *
     * @see http://docs.gl/gl4/glBindVertexBuffer
     * @since 4.3
     * @param int $bindingindex
     * @param int $buffer
     * @param int $offset
     * @param int $stride
     * @return void
     */
    public static function glBindVertexBuffer(int $bindingindex, int $buffer, int $offset, int $stride): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($bindingindex >= 0 && $bindingindex <= 4_294_967_295, 'Argument $bindingindex overflow: C type GLuint is required');
        assert($buffer >= 0 && $buffer <= 4_294_967_295, 'Argument $buffer overflow: C type GLuint is required');
        assert($offset >= 0 && $offset <= \PHP_INT_MAX, 'Argument $offset overflow: C type GLintptr is required');
        assert($stride >= \PHP_INT_MIN && $stride <= \PHP_INT_MAX, 'Argument $stride overflow: C type GLsizei is required');

        $proc = self::getProc('glBindVertexBuffer', 'void (*)(GLuint bindingindex, GLuint buffer, GLintptr offset, GLsizei stride)');
        $proc($bindingindex, $buffer, $offset, $stride);
    }

    /**
     * - `glVertexAttribFormat`, `glVertexAttribIFormat` and `glVertexAttribLFormat`, as well as
     * `glVertexArrayAttribFormat`, `glVertexArrayAttribIFormat` and `glVertexArrayAttribLFormat` specify the
     * organization of data in vertex arrays. The first three calls operate on the bound vertex array object, whereas
     * the last three ones modify the state of a vertex array object with ID *`vaobj`*. *`attribindex`* specifies the
     * index of the generic vertex attribute array whose data layout is being described, and must be less than the
     * value of `GL_MAX_VERTEX_ATTRIBS`.
     *
     * *`size`* determines the number of components per vertex are allocated to the specified attribute and must be
     * 1, 2, 3 or 4. *`type`* indicates the type of the data. If *`type`* is one of `GL_BYTE`, `GL_SHORT`, `GL_INT`,
     * `GL_FIXED`, `GL_FLOAT`, `GL_HALF_FLOAT`, and `GL_DOUBLE` indicate types `GLbyte`, `GLshort`, `GLint`,
     * `GLfixed`, `GLfloat`, `GLhalf`, and `GLdouble`, respectively; the values `GL_UNSIGNED_BYTE`,
     * `GL_UNSIGNED_SHORT`, and `GL_UNSIGNED_INT` indicate types `GLubyte`, `GLushort`, and `GLuint`, respectively;
     * the values `GL_INT_2_10_10_10_REV` and `GL_UNSIGNED_INT_2_10_10_10_REV` indicating respectively four signed or
     * unsigned elements packed into a single `GLuint`; and the value `GL_UNSIGNED_INT_10F_11F_11F_REV` indicating
     * three floating point values packed into a single `GLuint`.
     *
     *  - `glVertexAttribLFormat` and `glVertexArrayAttribLFormat` is used to specify layout for data associated with
     * a generic attribute variable declared as 64-bit double precision components. For `glVertexAttribLFormat` and
     * `glVertexArrayAttribLFormat`, *`type`* must be `GL_DOUBLE`. In contrast to `glVertexAttribFormat` or
     * `glVertexArrayAttribFormat`, which will cause data declared as `GL_DOUBLE` to be converted to 32-bit
     * representation, `glVertexAttribLFormat` and `glVertexArrayAttribLFormat` cause such data to be left in its
     * natural, 64-bit representation.
     *
     * For `glVertexAttribFormat` and `glVertexArrayAttribFormat`, if *`normalized`* is `GL_TRUE`, then integer data
     * is normalized to the range [-1, 1] or [0, 1] if it is signed or unsigned, respectively. If *`normalized`* is
     * `GL_FALSE` then integer data is directly converted to floating point.
     *
     * *`relativeoffset`* is the offset, measured in basic machine units of the first element relative to the start
     * of the vertex buffer binding this attribute fetches from.
     *
     *  - `glVertexAttribFormat` and `glVertexArrayAttribFormat` should be used to describe vertex attribute layout
     * for floating-point vertex attributes, `glVertexAttribIFormat` and `glVertexArrayAttribIFormat` should be used
     * to describe vertex attribute layout for integer vertex attribute, and `glVertexAttribLFormat` and
     * `glVertexArrayAttribLFormat` should be used to describe the layout for 64-bit vertex attributes. Data for an
     * array specified by `glVertexAttribIFormat` and `glVertexArrayAttribIFormat` will always be left as integer
     * values; such data are referred to as pure integers.
     *
     * @see http://docs.gl/gl4/glVertexAttribFormat
     * @since 4.3
     * @param int $attribindex
     * @param int $size
     * @param int $type
     * @param int $normalized
     * @param int $relativeoffset
     * @return void
     */
    public static function glVertexAttribFormat(int $attribindex, int $size, int $type, int $normalized, int $relativeoffset): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($attribindex >= 0 && $attribindex <= 4_294_967_295, 'Argument $attribindex overflow: C type GLuint is required');
        assert($size >= \PHP_INT_MIN && $size <= \PHP_INT_MAX, 'Argument $size overflow: C type GLint is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');
        assert($normalized >= 0 && $normalized <= 255, 'Argument $normalized overflow: C type GLboolean is required');
        assert($relativeoffset >= 0 && $relativeoffset <= 4_294_967_295, 'Argument $relativeoffset overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttribFormat', 'void (*)(GLuint attribindex, GLint size, GLenum type, GLboolean normalized, GLuint relativeoffset)');
        $proc($attribindex, $size, $type, $normalized, $relativeoffset);
    }

    /**
     * @since 4.3
     * @param int $attribindex
     * @param int $size
     * @param int $type
     * @param int $relativeoffset
     * @return void
     */
    public static function glVertexAttribIFormat(int $attribindex, int $size, int $type, int $relativeoffset): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($attribindex >= 0 && $attribindex <= 4_294_967_295, 'Argument $attribindex overflow: C type GLuint is required');
        assert($size >= \PHP_INT_MIN && $size <= \PHP_INT_MAX, 'Argument $size overflow: C type GLint is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');
        assert($relativeoffset >= 0 && $relativeoffset <= 4_294_967_295, 'Argument $relativeoffset overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttribIFormat', 'void (*)(GLuint attribindex, GLint size, GLenum type, GLuint relativeoffset)');
        $proc($attribindex, $size, $type, $relativeoffset);
    }

    /**
     * @since 4.3
     * @param int $attribindex
     * @param int $size
     * @param int $type
     * @param int $relativeoffset
     * @return void
     */
    public static function glVertexAttribLFormat(int $attribindex, int $size, int $type, int $relativeoffset): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($attribindex >= 0 && $attribindex <= 4_294_967_295, 'Argument $attribindex overflow: C type GLuint is required');
        assert($size >= \PHP_INT_MIN && $size <= \PHP_INT_MAX, 'Argument $size overflow: C type GLint is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');
        assert($relativeoffset >= 0 && $relativeoffset <= 4_294_967_295, 'Argument $relativeoffset overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttribLFormat', 'void (*)(GLuint attribindex, GLint size, GLenum type, GLuint relativeoffset)');
        $proc($attribindex, $size, $type, $relativeoffset);
    }

    /**
     * And `glVertexArrayAttribBinding` establishes an association between the generic vertex attribute of a vertex
     * array object whose index is given by *`attribindex`*, and a vertex buffer binding whose index is given by
     * *`bindingindex`*. For `glVertexAttribBinding`, the vertex array object affected is that currently bound. For
     * `glVertexArrayAttribBinding`, *`vaobj`* is the name of the vertex array object.
     *
     * *`attribindex`* must be less than the value of `GL_MAX_VERTEX_ATTRIBS` and *`bindingindex`* must be less than
     * the value of `GL_MAX_VERTEX_ATTRIB_BINDINGS`.
     *
     * @see http://docs.gl/gl4/glVertexAttribBinding
     * @since 4.3
     * @param int $attribindex
     * @param int $bindingindex
     * @return void
     */
    public static function glVertexAttribBinding(int $attribindex, int $bindingindex): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($attribindex >= 0 && $attribindex <= 4_294_967_295, 'Argument $attribindex overflow: C type GLuint is required');
        assert($bindingindex >= 0 && $bindingindex <= 4_294_967_295, 'Argument $bindingindex overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttribBinding', 'void (*)(GLuint attribindex, GLuint bindingindex)');
        $proc($attribindex, $bindingindex);
    }

    /**
     * And `glVertexArrayBindingDivisor` modify the rate at which generic vertex attributes advance when rendering
     * multiple instances of primitives in a single draw command. If *`divisor`* is zero, the attributes using the
     * buffer bound to *`bindingindex`* advance once per vertex. If *`divisor`* is non-zero, the attributes advance
     * once per *`divisor`* instances of the set(s) of vertices being rendered. An attribute is referred to as
     * *instanced* if the corresponding *`divisor`* value is non-zero.
     *
     *  - `glVertexBindingDivisor` uses currently bound vertex array object , whereas `glVertexArrayBindingDivisor`
     * updates state of the vertex array object with ID *`vaobj`*.
     *
     * @see http://docs.gl/gl4/glVertexBindingDivisor
     * @since 4.3
     * @param int $bindingindex
     * @param int $divisor
     * @return void
     */
    public static function glVertexBindingDivisor(int $bindingindex, int $divisor): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($bindingindex >= 0 && $bindingindex <= 4_294_967_295, 'Argument $bindingindex overflow: C type GLuint is required');
        assert($divisor >= 0 && $divisor <= 4_294_967_295, 'Argument $divisor overflow: C type GLuint is required');

        $proc = self::getProc('glVertexBindingDivisor', 'void (*)(GLuint bindingindex, GLuint divisor)');
        $proc($bindingindex, $divisor);
    }

    /**
     * Controls the reporting of debug messages generated by a debug context. The parameters *`source`*, *`type`* and
     * *`severity`* form a filter to select messages from the pool of potential messages generated by the GL.
     *
     * *`source`* may be `GL_DEBUG_SOURCE_API`, `GL_DEBUG_SOURCE_WINDOW_SYSTEM`, `GL_DEBUG_SOURCE_SHADER_COMPILER`,
     * `GL_DEBUG_SOURCE_THIRD_PARTY`, `GL_DEBUG_SOURCE_APPLICATION`, `GL_DEBUG_SOURCE_OTHER` to select messages
     * generated by usage of the GL API, the window system, the shader compiler, third party tools or libraries,
     * explicitly by the application or by some other source, respectively. It may also take the value
     * `GL_DONT_CARE`. If *`source`* is not `GL_DONT_CARE` then only messages whose source matches *`source`* will be
     * referenced.
     *
     * *`type`* may be one of `GL_DEBUG_TYPE_ERROR`, `GL_DEBUG_TYPE_DEPRECATED_BEHAVIOR`,
     * `GL_DEBUG_TYPE_UNDEFINED_BEHAVIOR`, `GL_DEBUG_TYPE_PORTABILITY`, `GL_DEBUG_TYPE_PERFORMANCE`,
     * `GL_DEBUG_TYPE_MARKER`, `GL_DEBUG_TYPE_PUSH_GROUP`, `GL_DEBUG_TYPE_POP_GROUP`, or `GL_DEBUG_TYPE_OTHER` to
     * indicate the type of messages describing GL errors, attempted use of deprecated features, triggering of
     * undefined behavior, portability issues, performance notifications, markers, group push and pop events, and
     * other types of messages, respectively. It may also take the value `GL_DONT_CARE`. If *`type`* is not
     * `GL_DONT_CARE` then only messages whose type matches *`type`* will be referenced.
     *
     * *`severity`* may be one of `GL_DEBUG_SEVERITY_LOW`, `GL_DEBUG_SEVERITY_MEDIUM`, or `GL_DEBUG_SEVERITY_HIGH` to
     * select messages of low, medium or high severity messages or to `GL_DEBUG_SEVERITY_NOTIFICATION` for
     * notifications. It may also take the value `GL_DONT_CARE`. If *`severity`* is not `GL_DONT_CARE` then only
     * messages whose severity matches *`severity`* will be referenced.
     *
     * *`ids`* contains a list of *`count`* message identifiers to select specific messages from the pool of
     * available messages. If *`count`* is zero then the value of *`ids`* is ignored. Otherwise, only messages
     * appearing in this list are selected. In this case, *`source`* and *`type`* may not be `GL_DONT_CARE` and
     * *`severity`* must be `GL_DONT_CARE`.
     *
     * If *`enabled`* is `GL_TRUE` then messages that match the filter formed by *`source`*, *`type`*, *`severity`*
     * and *`ids`* are enabled. Otherwise, those messages are disabled.
     *
     * @see http://docs.gl/gl4/glDebugMessageControl
     * @since 4.3
     * @param int $source
     * @param int $type
     * @param int $severity
     * @param int $count
     * @param \FFI\CData|\FFI\CIntPtr|null $ids
     * @param int $enabled
     * @return void
     */
    public static function glDebugMessageControl(int $source, int $type, int $severity, int $count, ?\FFI\CData $ids, int $enabled): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($source >= 0 && $source <= 4_294_967_295, 'Argument $source overflow: C type GLenum is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');
        assert($severity >= 0 && $severity <= 4_294_967_295, 'Argument $severity overflow: C type GLenum is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($enabled >= 0 && $enabled <= 255, 'Argument $enabled overflow: C type GLboolean is required');

        $proc = self::getProc('glDebugMessageControl', 'void (*)(GLenum source, GLenum type, GLenum severity, GLsizei count, const GLuint *ids, GLboolean enabled)');
        $proc($source, $type, $severity, $count, $ids, $enabled);
    }

    /**
     * Inserts a user-supplied message into the debug output queue. *`source`* specifies the source that will be used
     * to classify the message and must be `GL_DEBUG_SOURCE_APPLICATION` or `GL_DEBUG_SOURCE_THIRD_PARTY`. All other
     * sources are reserved for use by the GL implementation. *`type`* indicates the type of the message to be
     * inserted and may be one of `GL_DEBUG_TYPE_ERROR`, `GL_DEBUG_TYPE_DEPRECATED_BEHAVIOR`,
     * `GL_DEBUG_TYPE_UNDEFINED_BEHAVIOR`, `GL_DEBUG_TYPE_PORTABILITY`, `GL_DEBUG_TYPE_PERFORMANCE`,
     * `GL_DEBUG_TYPE_MARKER`, `GL_DEBUG_TYPE_PUSH_GROUP`, `GL_DEBUG_TYPE_POP_GROUP`, or `GL_DEBUG_TYPE_OTHER`.
     * *`severity`* indicates the severity of the message and may be `GL_DEBUG_SEVERITY_LOW`,
     * `GL_DEBUG_SEVERITY_MEDIUM`, `GL_DEBUG_SEVERITY_HIGH` or `GL_DEBUG_SEVERITY_NOTIFICATION`. *`id`* is available
     * for application defined use and may be any value. This value will be recorded and used to identify the
     * message.
     *
     * *`length`* contains a count of the characters in the character array whose address is given in *`message`*. If
     * *`length`* is negative then *`message`* is treated as a null-terminated string. The length of the message,
     * whether specified explicitly or implicitly, must be less than or equal to the implementation defined constant
     * `GL_MAX_DEBUG_MESSAGE_LENGTH`.
     *
     * @see http://docs.gl/gl4/glDebugMessageInsert
     * @since 4.3
     * @param int $source
     * @param int $type
     * @param int $id
     * @param int $severity
     * @param int $length
     * @param \FFI\CData|\FFI\CIntPtr|null $buf
     * @return void
     */
    public static function glDebugMessageInsert(int $source, int $type, int $id, int $severity, int $length, ?\FFI\CData $buf): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($source >= 0 && $source <= 4_294_967_295, 'Argument $source overflow: C type GLenum is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');
        assert($id >= 0 && $id <= 4_294_967_295, 'Argument $id overflow: C type GLuint is required');
        assert($severity >= 0 && $severity <= 4_294_967_295, 'Argument $severity overflow: C type GLenum is required');
        assert($length >= \PHP_INT_MIN && $length <= \PHP_INT_MAX, 'Argument $length overflow: C type GLsizei is required');

        $proc = self::getProc('glDebugMessageInsert', 'void (*)(GLenum source, GLenum type, GLuint id, GLenum severity, GLsizei length, const GLchar *buf)');
        $proc($source, $type, $id, $severity, $length, $buf);
    }

    /**
     * Sets the current debug output callback function to the function whose address is given in *`callback`*. The
     * callback function should have the following prototype (in C), or be otherwise compatible with such a
     * prototype:
     *
     *  - ```
     * typedef void (APIENTRY *DEBUGPROC)(GLenum source,
     * GLenum type,
     * GLuint id,
     * GLenum severity,
     * GLsizei length,
     * const GLchar *message,
     * const void *userParam);
     *  - ```
     *
     * This function is defined to have the same calling convention as the GL API functions. In most cases this is
     * defined as `APIENTRY`, although it will vary depending on platform, language and compiler.
     *
     * Each time a debug message is generated the debug callback function will be invoked with *`source`*, *`type`*,
     * *`id`*, and *`severity`* associated with the message, and *`length`* set to the length of debug message whose
     * character string is in the array pointed to by *`message`* *`userParam`* will be set to the value passed in
     * the *`userParam`* parameter to the most recent call to `glDebugMessageCallback`.
     *
     * @see http://docs.gl/gl4/glDebugMessageCallback
     * @since 4.3
     * @param \Closure $callback
     * @param \FFI\CData|\FFI\CPtr|null $userParam
     * @return void
     */
    public static function glDebugMessageCallback(\Closure $callback, ?\FFI\CData $userParam): void
    {
        //assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');

        $proc = self::getProc('glDebugMessageCallback', 'void (*)(GLDEBUGPROC callback, const void *userParam)');
        $proc($callback, $userParam);
    }

    /**
     * Retrieves messages from the debug message log. A maximum of *`count`* messages are retrieved from the log. If
     * *`sources`* is not NULL then the source of each message is written into up to *`count`* elements of the array.
     * If *`types`* is not NULL then the type of each message is written into up to *`count`* elements of the array.
     * If *`id`* is not NULL then the identifier of each message is written into up to *`count`* elements of the
     * array. If *`severities`* is not NULL then the severity of each message is written into up to *`count`*
     * elements of the array. If *`lengths`* is not NULL then the length of each message is written into up to
     * *`count`* elements of the array.
     *
     * *`messageLog`* specifies the address of a character array into which the debug messages will be written. Each
     * message will be concatenated onto the array starting at the first element of *`messageLog`*. *`bufSize`*
     * specifies the size of the array *`messageLog`*. If a message will not fit into the remaining space in
     * *`messageLog`* then the function terminates and returns the number of messages written so far, which may be
     * zero.
     *
     * If `glGetDebugMessageLog` returns zero then no messages are present in the debug log, or there was not enough
     * space in *`messageLog`* to retrieve the first message in the queue. If *`messageLog`* is NULL then no messages
     * are written and the value of *`bufSize`* is ignored.
     *
     * @see http://docs.gl/gl4/glGetDebugMessageLog
     * @since 4.3
     * @param int $count
     * @param int $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $sources
     * @param \FFI\CData|\FFI\CIntPtr|null $types
     * @param \FFI\CData|\FFI\CIntPtr|null $ids
     * @param \FFI\CData|\FFI\CIntPtr|null $severities
     * @param \FFI\CData|\FFI\CIntPtr|null $lengths
     * @param \FFI\CData|\FFI\CIntPtr|null $messageLog
     * @return int
     */
    public static function glGetDebugMessageLog(
        int $count,
        int $bufSize,
        ?\FFI\CData $sources,
        ?\FFI\CData $types,
        ?\FFI\CData $ids,
        ?\FFI\CData $severities,
        ?\FFI\CData $lengths,
        ?\FFI\CData $messageLog
    ): int {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($count >= 0 && $count <= 4_294_967_295, 'Argument $count overflow: C type GLuint is required');
        assert($bufSize >= \PHP_INT_MIN && $bufSize <= \PHP_INT_MAX, 'Argument $bufSize overflow: C type GLsizei is required');

        $proc = self::getProc('glGetDebugMessageLog', 'GLuint (*)(GLuint count, GLsizei bufSize, GLenum *sources, GLenum *types, GLuint *ids, GLenum *severities, GLsizei *lengths, GLchar *messageLog)');
        return $proc($count, $bufSize, $sources, $types, $ids, $severities, $lengths, $messageLog);
    }

    /**
     * Pushes a debug group described by the string *`message`* into the command stream. The value of *`id`*
     * specifies the ID of messages generated. The parameter *`length`* contains the number of characters in
     * *`message`*. If *`length`* is negative, it is implied that *`message`* contains a null terminated string. The
     * message has the specified *`source`* and *`id`*, the *`type`* `GL_DEBUG_TYPE_PUSH_GROUP`, and *`severity`*
     * `GL_DEBUG_SEVERITY_NOTIFICATION`. The GL will put a new debug group on top of the debug group stack which
     * inherits the control of the volume of debug output of the debug group previously residing on the top of the
     * debug group stack. Because debug groups are strictly hierarchical, any additional control of the debug output
     * volume will only apply within the active debug group and the debug groups pushed on top of the active debug
     * group.
     *
     * @see http://docs.gl/gl4/glPushDebugGroup
     * @since 4.3
     * @param int $source
     * @param int $id
     * @param int $length
     * @param \FFI\CData|\FFI\CIntPtr|null $message
     * @return void
     */
    public static function glPushDebugGroup(int $source, int $id, int $length, ?\FFI\CData $message): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($source >= 0 && $source <= 4_294_967_295, 'Argument $source overflow: C type GLenum is required');
        assert($id >= 0 && $id <= 4_294_967_295, 'Argument $id overflow: C type GLuint is required');
        assert($length >= \PHP_INT_MIN && $length <= \PHP_INT_MAX, 'Argument $length overflow: C type GLsizei is required');

        $proc = self::getProc('glPushDebugGroup', 'void (*)(GLenum source, GLuint id, GLsizei length, const GLchar *message)');
        $proc($source, $id, $length, $message);
    }

    /**
     * Pops the active debug group. After popping a debug group, the GL will also generate a debug output message
     * describing its cause based on the *`message`* string, the source *`source`*, and an ID *`id`* submitted to the
     * corresponding {@see glPushDebugGroup} command. `GL_DEBUG_TYPE_PUSH_GROUP` and
     * `GL_DEBUG_TYPE_POP_GROUP` share a single namespace for message *`id`*. *`severity`* has the value
     * `GL_DEBUG_SEVERITY_NOTIFICATION`. The *`type`* has the value `GL_DEBUG_TYPE_POP_GROUP`. Popping a debug group
     * restores the debug output volume control of the parent debug group.
     *
     * @see http://docs.gl/gl4/glPopDebugGroup
     * @since 4.3
     * @return void
     */
    public static function glPopDebugGroup(): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');

        $proc = self::getProc('glPopDebugGroup', 'void (*)(void)');
        $proc();
    }

    /**
     * Labels the object identified by *`name`* within the namespace given by *`identifier`*. *`identifier`* must be
     * one of `GL_BUFFER`, `GL_SHADER`, `GL_PROGRAM`, `GL_VERTEX_ARRAY`, `GL_QUERY`, `GL_PROGRAM_PIPELINE`,
     * `GL_TRANSFORM_FEEDBACK`, `GL_SAMPLER`, `GL_TEXTURE`, `GL_RENDERBUFFER`, `GL_FRAMEBUFFER`, to indicate the
     * namespace containing the names of buffers, shaders, programs, vertex array objects, query objects, program
     * pipelines, transform feedback objects, samplers, textures, renderbuffers and frame buffers, respectively.
     *
     * *`label`* is the address of a string that will be used to label an object. *`length`* contains the number of
     * characters in *`label`*. If *`length`* is negative, it is implied that *`label`* contains a null-terminated
     * string. If *`label`* is NULL, any debug label is effectively removed from the object.
     *
     * @see http://docs.gl/gl4/glObjectLabel
     * @since 4.3
     * @param int $identifier
     * @param int $name
     * @param int $length
     * @param \FFI\CData|\FFI\CIntPtr|null $label
     * @return void
     */
    public static function glObjectLabel(int $identifier, int $name, int $length, ?\FFI\CData $label): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($identifier >= 0 && $identifier <= 4_294_967_295, 'Argument $identifier overflow: C type GLenum is required');
        assert($name >= 0 && $name <= 4_294_967_295, 'Argument $name overflow: C type GLuint is required');
        assert($length >= \PHP_INT_MIN && $length <= \PHP_INT_MAX, 'Argument $length overflow: C type GLsizei is required');

        $proc = self::getProc('glObjectLabel', 'void (*)(GLenum identifier, GLuint name, GLsizei length, const GLchar *label)');
        $proc($identifier, $name, $length, $label);
    }

    /**
     * Retrieves the label of the object identified by *`name`* within the namespace given by *`identifier`*.
     * *`identifier`* must be one of `GL_BUFFER`, `GL_SHADER`, `GL_PROGRAM`, `GL_VERTEX_ARRAY`, `GL_QUERY`,
     * `GL_PROGRAM_PIPELINE`, `GL_TRANSFORM_FEEDBACK`, `GL_SAMPLER`, `GL_TEXTURE`, `GL_RENDERBUFFER`,
     * `GL_FRAMEBUFFER`, to indicate the namespace containing the names of buffers, shaders, programs, vertex array
     * objects, query objects, program pipelines, transform feedback objects, samplers, textures, renderbuffers and
     * frame buffers, respectively.
     *
     * *`label`* is the address of a string that will be used to store the object label. *`bufSize`* specifies the
     * number of characters in the array identified by *`label`*. *`length`* contains the address of a variable which
     * will receive the the number of characters in the object label. If *`length`* is NULL, then it is ignored and
     * no data is written. Likewise, if *`label`* is NULL, or if *`bufSize`* is zero then no data is written to
     * *`label`*.
     *
     * @see http://docs.gl/gl4/glGetObjectLabel
     * @since 4.3
     * @param int $identifier
     * @param int $name
     * @param int $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @param \FFI\CData|\FFI\CIntPtr|null $label
     * @return void
     */
    public static function glGetObjectLabel(int $identifier, int $name, int $bufSize, ?\FFI\CData $length, ?\FFI\CData $label): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($identifier >= 0 && $identifier <= 4_294_967_295, 'Argument $identifier overflow: C type GLenum is required');
        assert($name >= 0 && $name <= 4_294_967_295, 'Argument $name overflow: C type GLuint is required');
        assert($bufSize >= \PHP_INT_MIN && $bufSize <= \PHP_INT_MAX, 'Argument $bufSize overflow: C type GLsizei is required');

        $proc = self::getProc('glGetObjectLabel', 'void (*)(GLenum identifier, GLuint name, GLsizei bufSize, GLsizei *length, GLchar *label)');
        $proc($identifier, $name, $bufSize, $length, $label);
    }

    /**
     * Labels the sync object identified by *`ptr`*.
     *
     * *`label`* is the address of a string that will be used to label the object. *`length`* contains the number of
     * characters in *`label`*. If *`length`* is negative, it is implied that *`label`* contains a null-terminated
     * string. If *`label`* is NULL, any debug label is effectively removed from the object.
     *
     * @see http://docs.gl/gl4/glObjectPtrLabel
     * @since 4.3
     * @param \FFI\CData|\FFI\CPtr|null $ptr
     * @param int $length
     * @param \FFI\CData|\FFI\CIntPtr|null $label
     * @return void
     */
    public static function glObjectPtrLabel(?\FFI\CData $ptr, int $length, ?\FFI\CData $label): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($length >= \PHP_INT_MIN && $length <= \PHP_INT_MAX, 'Argument $length overflow: C type GLsizei is required');

        $proc = self::getProc('glObjectPtrLabel', 'void (*)(const void *ptr, GLsizei length, const GLchar *label)');
        $proc($ptr, $length, $label);
    }

    /**
     * Retrieves the label of the sync object identified by *`ptr`*.
     *
     * *`label`* is the address of a string that will be used to store the object label. *`bufSize`* specifies the
     * number of characters in the array identified by *`label`*. *`length`* contains the address of a variable which
     * will receive the the number of characters in the object label. If *`length`* is NULL, then it is ignored and
     * no data is written. Likewise, if *`label`* is NULL, or if *`bufSize`* is zero then no data is written to
     * *`label`*.
     *
     * @see http://docs.gl/gl4/glGetObjectPtrLabel
     * @since 4.3
     * @param \FFI\CData|\FFI\CPtr|null $ptr
     * @param int $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @param \FFI\CData|\FFI\CIntPtr|null $label
     * @return void
     */
    public static function glGetObjectPtrLabel(?\FFI\CData $ptr, int $bufSize, ?\FFI\CData $length, ?\FFI\CData $label): void
    {
        assert(version_compare(self::$info->version, '4.3') >= 0, __FUNCTION__ . ' is available since OpenGL 4.3, but only OpenGL '. self::$info->version . ' is available');
        assert($bufSize >= \PHP_INT_MIN && $bufSize <= \PHP_INT_MAX, 'Argument $bufSize overflow: C type GLsizei is required');

        $proc = self::getProc('glGetObjectPtrLabel', 'void (*)(const void *ptr, GLsizei bufSize, GLsizei *length, GLchar *label)');
        $proc($ptr, $bufSize, $length, $label);
    }
}
