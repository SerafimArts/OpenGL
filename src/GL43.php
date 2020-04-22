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
     * {@see GL46::glClearBufferData} and {@see GL46::glClearNamedBufferData} fill the entirety of a buffer object's
     * data store with data from client memory.
     *
     * Data, initially supplied in a format specified by $format in data type $type is read from the memory address
     * given by $data and converted into the internal representation given by $internalformat, which must be one of
     * the following sized internal formats:
     *
     * | {@see GL46::GL_R8}       | ubyte  | 1 | YES | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R16}      | ushort | 1 | YES | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R16F}     | half   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R32F}     | float  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R8I}      | byte   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R16I}     | short  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R32I}     | int    | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R8UI}     | ubyte  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R16UI}    | ushort | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R32UI}    | uint   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL46::GL_RG8}      | ubyte  | 2 | YES | R | G | 0 | 1 |
     * | {@see GL46::GL_RG16}     | ushort | 2 | YES | R | G | 0 | 1 |
     * | {@see GL46::GL_RG16F}    | half   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL46::GL_RG32F}    | float  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL46::GL_RG8I}     | byte   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL46::GL_RG16I}    | short  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL46::GL_RG32I}    | int    | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL46::GL_RG8UI}    | ubyte  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL46::GL_RG16UI}   | ushort | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL46::GL_RG32UI}   | uint   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL46::GL_RGB32F}   | float  | 3 | NO  | R | G | B | 1 |
     * | {@see GL46::GL_RGB32I}   | int    | 3 | NO  | R | G | B | 1 |
     * | {@see GL46::GL_RGB32UI}  | uint   | 3 | NO  | R | G | B | 1 |
     * | {@see GL46::GL_RGBA8}    | uint   | 4 | YES | R | G | B | A |
     * | {@see GL46::GL_RGBA16}   | short  | 4 | YES | R | G | B | A |
     * | {@see GL46::GL_RGBA16F}  | half   | 4 | NO  | R | G | B | A |
     * | {@see GL46::GL_RGBA32F}  | float  | 4 | NO  | R | G | B | A |
     * | {@see GL46::GL_RGBA8I}   | byte   | 4 | NO  | R | G | B | A |
     * | {@see GL46::GL_RGBA16I}  | short  | 4 | NO  | R | G | B | A |
     * | {@see GL46::GL_RGBA32I}  | int    | 4 | NO  | R | G | B | A |
     * | {@see GL46::GL_RGBA8UI}  | ubyte  | 4 | NO  | R | G | B | A |
     * | {@see GL46::GL_RGBA16UI} | ushort | 4 | NO  | R | G | B | A |
     * | {@see GL46::GL_RGBA32UI} | uint   | 4 | NO  | R | G | B | A |
     *
     * This converted data is then replicated throughout the buffer object's data store. If $data is NULL, then the
     * buffer's data store is filled with zeros.
     *
     * @see http://docs.gl/gl4/glClearBufferData
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $internalformat
     * @param int|\FFI\CData|\FFI\CInt $format
     * @param int|\FFI\CData|\FFI\CInt $type
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @return void
     */
    public function glClearBufferData($target, $internalformat, $format, $type, ?\FFI\CData $data): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $internalformat = $internalformat instanceof \FFI\CData ? $internalformat->cdata : $internalformat;
        $format = $format instanceof \FFI\CData ? $format->cdata : $format;
        $type = $type instanceof \FFI\CData ? $type->cdata : $type;

        assert(Assert::uint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($internalformat), 'Argument $internalformat must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($format), 'Argument $format must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($type), 'Argument $type must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glClearBufferData', 'void (*)(GLenum target, GLenum internalformat, GLenum format, GLenum type, const void *data)');
        $proc($target, $internalformat, $format, $type, $data);
    }

    /**
     * {@see GL46::glClearBufferSubData} and {@see GL46::glClearNamedBufferSubData} fill a specified region of a
     * buffer object's data store with data from client memory.
     *
     * $offset and $size specify the extent of the region within the data store of the buffer object to fill with
     * data. Data, initially supplied in a format specified by $format in data type $type is read from the memory
     * address given by $data and converted into the internal representation given by $internalformat, which must be
     * one of the following sized internal formats:
     *
     * | {@see GL46::GL_R8}       | ubyte  | 1 | YES | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R16}      | ushort | 1 | YES | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R16F}     | half   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R32F}     | float  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R8I}      | byte   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R16I}     | short  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R32I}     | int    | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R8UI}     | ubyte  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R16UI}    | ushort | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R32UI}    | uint   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL46::GL_RG8}      | ubyte  | 2 | YES | R | G | 0 | 1 |
     * | {@see GL46::GL_RG16}     | ushort | 2 | YES | R | G | 0 | 1 |
     * | {@see GL46::GL_RG16F}    | half   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL46::GL_RG32F}    | float  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL46::GL_RG8I}     | byte   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL46::GL_RG16I}    | short  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL46::GL_RG32I}    | int    | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL46::GL_RG8UI}    | ubyte  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL46::GL_RG16UI}   | ushort | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL46::GL_RG32UI}   | uint   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL46::GL_RGB32F}   | float  | 3 | NO  | R | G | B | 1 |
     * | {@see GL46::GL_RGB32I}   | int    | 3 | NO  | R | G | B | 1 |
     * | {@see GL46::GL_RGB32UI}  | uint   | 3 | NO  | R | G | B | 1 |
     * | {@see GL46::GL_RGBA8}    | uint   | 4 | YES | R | G | B | A |
     * | {@see GL46::GL_RGBA16}   | short  | 4 | YES | R | G | B | A |
     * | {@see GL46::GL_RGBA16F}  | half   | 4 | NO  | R | G | B | A |
     * | {@see GL46::GL_RGBA32F}  | float  | 4 | NO  | R | G | B | A |
     * | {@see GL46::GL_RGBA8I}   | byte   | 4 | NO  | R | G | B | A |
     * | {@see GL46::GL_RGBA16I}  | short  | 4 | NO  | R | G | B | A |
     * | {@see GL46::GL_RGBA32I}  | int    | 4 | NO  | R | G | B | A |
     * | {@see GL46::GL_RGBA8UI}  | ubyte  | 4 | NO  | R | G | B | A |
     * | {@see GL46::GL_RGBA16UI} | ushort | 4 | NO  | R | G | B | A |
     * | {@see GL46::GL_RGBA32UI} | uint   | 4 | NO  | R | G | B | A |
     *
     * This converted data is then replicated throughout the specified region of the buffer object's data store. If
     * $data is NULL, then the subrange of the buffer's data store is filled with zeros.
     *
     * @see http://docs.gl/gl4/glClearBufferSubData
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $internalformat
     * @param mixed|float|string|int|\FFI\CData|\FFI\CInt $offset
     * @param mixed|float|string|int|\FFI\CData|\FFI\CInt $size
     * @param int|\FFI\CData|\FFI\CInt $format
     * @param int|\FFI\CData|\FFI\CInt $type
     * @param \FFI\CData|\FFI\CPtr|null $data
     * @return void
     */
    public function glClearBufferSubData($target, $internalformat, $offset, $size, $format, $type, ?\FFI\CData $data): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $internalformat = $internalformat instanceof \FFI\CData ? $internalformat->cdata : $internalformat;
        $format = $format instanceof \FFI\CData ? $format->cdata : $format;
        $type = $type instanceof \FFI\CData ? $type->cdata : $type;

        assert(Assert::uint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($internalformat), 'Argument $internalformat must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int64($offset), 'Argument $offset must be a C-like GLintptr, but incompatible or overflow value given');
        assert(Assert::int64($size), 'Argument $size must be a C-like GLsizeiptr, but incompatible or overflow value given');
        assert(Assert::uint16($format), 'Argument $format must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($type), 'Argument $type must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glClearBufferSubData', 'void (*)(GLenum target, GLenum internalformat, GLintptr offset, GLsizeiptr size, GLenum format, GLenum type, const void *data)');
        $proc($target, $internalformat, $offset, $size, $format, $type, $data);
    }

    /**
     * {@see GL46::glDispatchCompute} launches one or more compute work groups. Each work group is processed by the
     * active program object for the compute shader stage. While the individual shader invocations within a work
     * group are executed as a unit, work groups are executed completely independently and in unspecified order.
     * $num_groups_x, $num_groups_y and $num_groups_z specify the number of local work groups that will be dispatched
     * in the X, Y and Z dimensions, respectively.
     *
     * @see http://docs.gl/gl4/glDispatchCompute
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $num_groups_x
     * @param int|\FFI\CData|\FFI\CInt $num_groups_y
     * @param int|\FFI\CData|\FFI\CInt $num_groups_z
     * @return void
     */
    public function glDispatchCompute($num_groups_x, $num_groups_y, $num_groups_z): void
    {
        $num_groups_x = $num_groups_x instanceof \FFI\CData ? $num_groups_x->cdata : $num_groups_x;
        $num_groups_y = $num_groups_y instanceof \FFI\CData ? $num_groups_y->cdata : $num_groups_y;
        $num_groups_z = $num_groups_z instanceof \FFI\CData ? $num_groups_z->cdata : $num_groups_z;

        assert(Assert::uint16($num_groups_x), 'Argument $num_groups_x must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($num_groups_y), 'Argument $num_groups_y must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($num_groups_z), 'Argument $num_groups_z must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glDispatchCompute', 'void (*)(GLuint num_groups_x, GLuint num_groups_y, GLuint num_groups_z)');
        $proc($num_groups_x, $num_groups_y, $num_groups_z);
    }

    /**
     * {@see GL46::glDispatchComputeIndirect} launches one or more compute work groups using parameters stored in the
     * buffer object currently bound to the {@see GL46::GL_DISPATCH_INDIRECT_BUFFER} target. Each work group is
     * processed by the active program object for the compute shader stage. While the individual shader invocations
     * within a work group are executed as a unit, work groups are executed completely independently and in
     * unspecified order. $indirect contains the offset into the data store of the buffer object bound to the
     * {@see GL46::GL_DISPATCH_INDIRECT_BUFFER} target at which the parameters are stored.
     *
     * The parameters addressed by $indirect are packed a structure, which takes the form (in C):
     *
     * <code>
     *     typedef  struct {
     *         uint  num_groups_x;
     *         uint  num_groups_y;
     *         uint  num_groups_z;
     *     } DispatchIndirectCommand;
     * </code>
     *
     * A call to {@see GL46::glDispatchComputeIndirect} is equivalent, assuming no errors are generated, to:
     *
     * <code>
     *     cmd = (const DispatchIndirectCommand  *)indirect;
     *     glDispatchCompute(cmd->num_groups_x, cmd->num_groups_y, cmd->num_groups_z);
     * </code>
     *
     * Unlike {@see GL46::glDispatchCompute}, no error is generated if any of the `num_groups_x`, `num_groups_y` or
     * `num_groups_z` members of the `DispatchIndirectCommand` is larger than the value of
     * {@see GL46::GL_MAX_COMPUTE_WORK_GROUP_COUNT} for the corresponding dimension. In such circumstances, behavior
     * is undefined and may lead to application termination.
     *
     * @see http://docs.gl/gl4/glDispatchComputeIndirect
     * @since 4.3
     * @param mixed|float|string|int|\FFI\CData|\FFI\CInt $indirect
     * @return void
     */
    public function glDispatchComputeIndirect($indirect): void
    {
        assert(Assert::int64($indirect), 'Argument $indirect must be a C-like GLintptr, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glDispatchComputeIndirect', 'void (*)(GLintptr indirect)');
        $proc($indirect);
    }

    /**
     * {@see GL46::glCopyImageSubData} may be used to copy data from one image (i.e. texture or renderbuffer) to
     * another. {@see GL46::glCopyImageSubData} does not perform general-purpose conversions such as scaling,
     * resizing, blending, color-space, or format conversions. It should be considered to operate in a manner similar
     * to a CPU memcpy. CopyImageSubData can copy between images with different internal formats, provided the
     * formats are compatible.
     *
     * {@see GL46::glCopyImageSubData} also allows copying between certain types of compressed and uncompressed
     * internal formats. This copy does not perform on-the-fly compression or decompression. When copying from an
     * uncompressed internal format to a compressed internal format, each texel of uncompressed data becomes a single
     * block of compressed data. When copying from a compressed internal format to an uncompressed internal format, a
     * block of compressed data becomes a single texel of uncompressed data. The texel size of the uncompressed
     * format must be the same size the block size of the compressed formats. Thus it is permitted to copy between a
     * 128-bit uncompressed format and a compressed format which uses 8-bit 4x4 blocks, or between a 64-bit
     * uncompressed format and a compressed format which uses 4-bit 4x4 blocks.
     *
     * The source object is identified by $srcName and $srcTarget and the destination object is identified by
     * $dstName and $dstTarget. The interpretation of the name depends on the value of the corresponding $target
     * parameter. If $target is {@see GL46::GL_RENDERBUFFER}, the name is interpreted as the name of a renderbuffer
     * object. If the target parameter is a texture target, the name is interpreted as a texture object. All
     * non-proxy texture targets are accepted, with the exception of {@see GL46::GL_TEXTURE_BUFFER} and the cubemap
     * face selectors.
     *
     * $srcLevel and $dstLevel identify the source and destination level of detail. For textures, this must be a
     * valid level of detail in the texture object. For renderbuffers, this value must be zero.
     *
     * $srcX, $srcY, and $srcZ specify the lower left texel coordinates of a $srcWidth-wide by $srcHeight-high by
     * $srcDepth-deep rectangular subregion of the source texel array. Similarly, $dstX, $dstY and $dstZ specify the
     * coordinates of a subregion of the destination texel array. The source and destination subregions must be
     * contained entirely within the specified level of the corresponding image objects.
     *
     * The dimensions are always specified in texels, even for compressed texture formats. However, it should be
     * noted that if only one of the source and destination textures is compressed then the number of texels touched
     * in the compressed image will be a factor of the block size larger than in the uncompressed image.
     *
     * Slices of a {@see GL46::GL_TEXTURE_1D_ARRAY}, {@see GL46::GL_TEXTURE_2D_ARRAY},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_ARRAY} {@see GL46::GL_TEXTURE_3D} and faces of
     * {@see GL46::GL_TEXTURE_CUBE_MAP} are all compatible provided they share a compatible internal format, and
     * multiple slices or faces may be copied between these objects with a single call by specifying the starting
     * slice with $srcZ and $dstZ, and the number of slices to be copied with $srcDepth. Cubemap textures always have
     * six faces which are selected by a zero-based face index.
     *
     * For the purposes of CopyImageSubData, two internal formats are considered compatible if any of the following
     * conditions are met:    the formats are the same,     the formats are considered compatible according to the
     * compatibility rules used for texture views as defined in section 3.9.X. In particular, if both internal
     * formats are listed in the same entry of Table 3.X.2, they are considered compatible, or     one format is
     * compressed and the other is uncompressed and Table 4.X.1 lists the two formats in the same row.    If the
     * formats are not compatible, an INVALID_OPERATION error is generated.
     *
     * | 64-bit  | {@see GL46::GL_RGBA32UI}, {@see GL46::GL_RGBA32I}, {@see GL46::GL_RGBA32F}                                                                                                                             | {@see GL46::GL_COMPRESSED_RGBA_S3TC_DXT3_EXT}, {@see GL46::GL_COMPRESSED_SRGB_ALPHA_S3TC_DXT3_EXT},
     * {@see GL46::GL_COMPRESSED_RGBA_S3TC_DXT5_EXT}, {@see GL46::GL_COMPRESSED_SRGB_ALPHA_S3TC_DXT5_EXT},
     * {@see GL46::GL_COMPRESSED_RG_RGTC2}, {@see GL46::GL_COMPRESSED_SIGNED_RG_RGTC2},
     * {@see GL46::GL_COMPRESSED_RGBA_BPTC_UNORM}, {@see GL46::GL_COMPRESSED_SRGB_ALPHA_BPTC_UNORM},
     * {@see GL46::GL_COMPRESSED_RGB_BPTC_SIGNED_FLOAT}, {@see GL46::GL_COMPRESSED_RGB_BPTC_UNSIGNED_FLOAT} |
     * | 128-bit | {@see GL46::GL_RGBA16UI}, {@see GL46::GL_RGBA16I}, {@see GL46::GL_RGBA16F}, {@see GL46::GL_RG32F},
     * {@see GL46::GL_RG32UI}, {@see GL46::GL_RG32I}, {@see GL46::GL_RGBA16}, {@see GL46::GL_RGBA16_SNORM} | {@see GL46::GL_COMPRESSED_RGB_S3TC_DXT1_EXT}, {@see GL46::GL_COMPRESSED_SRGB_S3TC_DXT1_EXT},
     * {@see GL46::GL_COMPRESSED_RGBA_S3TC_DXT1_EXT}, {@see GL46::GL_COMPRESSED_SRGB_ALPHA_S3TC_DXT1_EXT},
     * {@see GL46::GL_COMPRESSED_RED_RGTC1}, {@see GL46::GL_COMPRESSED_SIGNED_RED_RGTC1}                                                                                                                                                                                                          |
     * @see http://docs.gl/gl4/glCopyImageSubData
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $srcName
     * @param int|\FFI\CData|\FFI\CInt $srcTarget
     * @param int|\FFI\CData|\FFI\CInt $srcLevel
     * @param int|\FFI\CData|\FFI\CInt $srcX
     * @param int|\FFI\CData|\FFI\CInt $srcY
     * @param int|\FFI\CData|\FFI\CInt $srcZ
     * @param int|\FFI\CData|\FFI\CInt $dstName
     * @param int|\FFI\CData|\FFI\CInt $dstTarget
     * @param int|\FFI\CData|\FFI\CInt $dstLevel
     * @param int|\FFI\CData|\FFI\CInt $dstX
     * @param int|\FFI\CData|\FFI\CInt $dstY
     * @param int|\FFI\CData|\FFI\CInt $dstZ
     * @param int|\FFI\CData|\FFI\CInt $srcWidth
     * @param int|\FFI\CData|\FFI\CInt $srcHeight
     * @param int|\FFI\CData|\FFI\CInt $srcDepth
     * @return void
     */
    public function glCopyImageSubData(
        $srcName,
        $srcTarget,
        $srcLevel,
        $srcX,
        $srcY,
        $srcZ,
        $dstName,
        $dstTarget,
        $dstLevel,
        $dstX,
        $dstY,
        $dstZ,
        $srcWidth,
        $srcHeight,
        $srcDepth
    ): void {
        $srcName = $srcName instanceof \FFI\CData ? $srcName->cdata : $srcName;
        $srcTarget = $srcTarget instanceof \FFI\CData ? $srcTarget->cdata : $srcTarget;
        $srcLevel = $srcLevel instanceof \FFI\CData ? $srcLevel->cdata : $srcLevel;
        $srcX = $srcX instanceof \FFI\CData ? $srcX->cdata : $srcX;
        $srcY = $srcY instanceof \FFI\CData ? $srcY->cdata : $srcY;
        $srcZ = $srcZ instanceof \FFI\CData ? $srcZ->cdata : $srcZ;
        $dstName = $dstName instanceof \FFI\CData ? $dstName->cdata : $dstName;
        $dstTarget = $dstTarget instanceof \FFI\CData ? $dstTarget->cdata : $dstTarget;
        $dstLevel = $dstLevel instanceof \FFI\CData ? $dstLevel->cdata : $dstLevel;
        $dstX = $dstX instanceof \FFI\CData ? $dstX->cdata : $dstX;
        $dstY = $dstY instanceof \FFI\CData ? $dstY->cdata : $dstY;
        $dstZ = $dstZ instanceof \FFI\CData ? $dstZ->cdata : $dstZ;
        $srcWidth = $srcWidth instanceof \FFI\CData ? $srcWidth->cdata : $srcWidth;
        $srcHeight = $srcHeight instanceof \FFI\CData ? $srcHeight->cdata : $srcHeight;
        $srcDepth = $srcDepth instanceof \FFI\CData ? $srcDepth->cdata : $srcDepth;

        assert(Assert::uint16($srcName), 'Argument $srcName must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($srcTarget), 'Argument $srcTarget must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($srcLevel), 'Argument $srcLevel must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($srcX), 'Argument $srcX must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($srcY), 'Argument $srcY must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($srcZ), 'Argument $srcZ must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::uint16($dstName), 'Argument $dstName must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($dstTarget), 'Argument $dstTarget must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($dstLevel), 'Argument $dstLevel must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($dstX), 'Argument $dstX must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($dstY), 'Argument $dstY must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($dstZ), 'Argument $dstZ must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($srcWidth), 'Argument $srcWidth must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::int16($srcHeight), 'Argument $srcHeight must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::int16($srcDepth), 'Argument $srcDepth must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glCopyImageSubData', 'void (*)(GLuint srcName, GLenum srcTarget, GLint srcLevel, GLint srcX, GLint srcY, GLint srcZ, GLuint dstName, GLenum dstTarget, GLint dstLevel, GLint dstX, GLint dstY, GLint dstZ, GLsizei srcWidth, GLsizei srcHeight, GLsizei srcDepth)');
        $proc($srcName, $srcTarget, $srcLevel, $srcX, $srcY, $srcZ, $dstName, $dstTarget, $dstLevel, $dstX, $dstY, $dstZ, $srcWidth, $srcHeight, $srcDepth);
    }

    /**
     * {@see GL46::glFramebufferParameteri} and {@see GL46::glNamedFramebufferParameteri} modify the value of the
     * parameter named $pname in the specified framebuffer object. There are no modifiable parameters of the default
     * draw and read framebuffer, so they are not valid targets of these commands.
     *
     * For {@see GL46::glFramebufferParameteri}, the framebuffer object is that bound to $target, which must be
     * {@see GL46::GL_DRAW_FRAMEBUFFER}, {@see GL46::GL_READ_FRAMEBUFFER} or {@see GL46::GL_FRAMEBUFFER}.
     * {@see GL46::GL_FRAMEBUFFER} is equivalent to {@see GL46::GL_DRAW_FRAMEBUFFER}.
     *
     * For {@see GL46::glNamedFramebufferParameteri}, $framebuffer is the name of the framebuffer object.
     *
     * $pname specifies the parameter to be modified. The following values are accepted:
     *
     *  - {@see GL46::GL_FRAMEBUFFER_DEFAULT_WIDTH}: $param specifies the
     *    assumed with for a framebuffer object with no attachments. If a
     *    framebuffer has
     *    attachments then the width of those attachments is used, otherwise the
     *    value of
     *    {@see GL46::GL_FRAMEBUFFER_DEFAULT_WIDTH} is used for the framebuffer.
     *    $param must be greater than or equal to
     *    zero and less than or equal to the value of {@see
     *    GL46::GL_MAX_FRAMEBUFFER_WIDTH}.
     *
     *  - {@see GL46::GL_FRAMEBUFFER_DEFAULT_HEIGHT}: $param specifies the
     *    assumed height for a framebuffer object with no attachments. If a
     *    framebuffer has
     *    attachments then the height of those attachments is used, otherwise
     *    the value of
     *    {@see GL46::GL_FRAMEBUFFER_DEFAULT_HEIGHT} is used for the
     *    framebuffer. $param must be greater than or equal
     *    to zero and less than or equal to the value of {@see
     *    GL46::GL_MAX_FRAMEBUFFER_HEIGHT}.
     *
     *  - {@see GL46::GL_FRAMEBUFFER_DEFAULT_LAYERS}: $param specifies the
     *    assumed number of layers for a framebuffer object with no attachments.
     *    If a framebuffer
     *    has attachments then the layer count of those attachments is used,
     *    otherwise the value of
     *    {@see GL46::GL_FRAMEBUFFER_DEFAULT_LAYERS} is used for the
     *    framebuffer. $param must be greater than or equal
     *    to zero and less than or equal to the value of {@see
     *    GL46::GL_MAX_FRAMEBUFFER_LAYERS}.
     *
     *  - {@see GL46::GL_FRAMEBUFFER_DEFAULT_SAMPLES}: $param specifies the
     *    assumed number of samples in a framebuffer object with no attachments.
     *    If a framebuffer
     *    has attachments then the sample count of those attachments is used,
     *    otherwise the value of
     *    {@see GL46::GL_FRAMEBUFFER_DEFAULT_SAMPLES} is used for the
     *    framebuffer. $param must be greater than or equal
     *    to zero and less than or equal to the value of {@see
     *    GL46::GL_MAX_FRAMEBUFFER_SAMPLE}.
     *
     *  - {@see GL46::GL_FRAMEBUFFER_DEFAULT_FIXED_SAMPLE_LOCATIONS}: $param
     *    specifies whether the framebuffer should assume identical sample
     *    locations and the same number of
     *    samples for all texels in the virtual image. If $param is zero, then
     *    the implementation may vary the position
     *    or the count of samples within the virtual image from pixel to pixel,
     *    otherwise it will use the same sample
     *    position and count for all pixels in the virtual image.
     *
     * @see http://docs.gl/gl4/glFramebufferParameteri
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param int|\FFI\CData|\FFI\CInt $param
     * @return void
     */
    public function glFramebufferParameteri($target, $pname, $param): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;
        $param = $param instanceof \FFI\CData ? $param->cdata : $param;

        assert(Assert::uint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($param), 'Argument $param must be a C-like GLint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glFramebufferParameteri', 'void (*)(GLenum target, GLenum pname, GLint param)');
        $proc($target, $pname, $param);
    }

    /**
     * {@see GL46::glGetFramebufferParameteriv} and {@see GL46::glGetNamedFramebufferParameteriv} query parameters of
     * a specified framebuffer object.
     *
     * For {@see GL46::glGetFramebufferParameteriv}, the framebuffer object is that bound to $target, which must be
     * one of {@see GL46::GL_DRAW_FRAMEBUFFER}, {@see GL46::GL_READ_FRAMEBUFFER} or {@see GL46::GL_FRAMEBUFFER}.
     * {@see GL46::GL_FRAMEBUFFER} is equivalent to {@see GL46::GL_DRAW_FRAMEBUFFER}. Default framebuffers may also
     * be queried if bound to $target.
     *
     * For {@see GL46::glGetNamedFramebufferParameteriv}, $framebuffer is the name of the framebuffer object. If
     * $framebuffer is zero, the default draw framebuffer is queried.
     *
     * Upon successful return, $param will contain the value of the framebuffer parameter specified by $pname, as
     * described below.
     *
     * The following parameters can only be queried for framebuffer objects:
     *
     *  - {@see GL46::GL_FRAMEBUFFER_DEFAULT_WIDTH}: $params returns the value
     *    of {@see GL46::GL_FRAMEBUFFER_DEFAULT_WIDTH} for the framebuffer
     *    object.
     *
     *  - {@see GL46::GL_FRAMEBUFFER_DEFAULT_HEIGHT}: $params returns the value
     *    of {@see GL46::GL_FRAMEBUFFER_DEFAULT_HEIGHT} for the framebuffer
     *    object.
     *
     *  - {@see GL46::GL_FRAMEBUFFER_DEFAULT_LAYERS}: $params returns the value
     *    of {@see GL46::GL_FRAMEBUFFER_DEFAULT_LAYERS} for the framebuffer
     *    object.
     *
     *  - {@see GL46::GL_FRAMEBUFFER_DEFAULT_SAMPLES}: $params returns the value
     *    of {@see GL46::GL_FRAMEBUFFER_DEFAULT_SAMPLES} for the framebuffer
     *    object.
     *
     *  - {@see GL46::GL_FRAMEBUFFER_DEFAULT_FIXED_SAMPLE_LOCATIONS}: $params
     *    returns the boolean value of {@see
     *    GL46::GL_FRAMEBUFFER_DEFAULT_FIXED_SAMPLE_LOCATIONS}.
     *
     * The following parameters can be queried for both default framebuffers and framebuffer objects:
     *
     *  - {@see GL46::GL_DOUBLEBUFFER}: $param returns a boolean value
     *    indicating whether double buffering is supported for the framebuffer
     *    object.
     *
     *  - {@see GL46::GL_IMPLEMENTATION_COLOR_READ_FORMAT}: $param returns a
     *    GLenum value indicating the preferred pixel data format for the
     *    framebuffer object. See
     *    {@see GL46::glReadPixels}.
     *
     *  - {@see GL46::GL_IMPLEMENTATION_COLOR_READ_TYPE}: $param returns a
     *    GLenum value indicating the implementation's preferred pixel data type
     *    for the framebuffer
     *    object. See {@see GL46::glReadPixels}.
     *
     *  - {@see GL46::GL_SAMPLES}: $param returns an integer value indicating
     *    the coverage mask size for the framebuffer object. See
     *    {@see GL46::glSampleCoverage}.
     *
     *  - {@see GL46::GL_SAMPLE_BUFFERS}: $param returns an integer value
     *    indicating the number of sample buffers associated with the
     *    framebuffer
     *    object. See {@see GL46::glSampleCoverage}.
     *
     *  - {@see GL46::GL_STEREO}: $param returns a boolean value indicating
     *    whether stereo buffers (left and right) are supported for the
     *    framebuffer object.
     *
     * @see http://docs.gl/gl4/glGetFramebufferParameter
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public function glGetFramebufferParameteriv($target, $pname, ?\FFI\CData $params): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;

        assert(Assert::uint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetFramebufferParameteriv', 'void (*)(GLenum target, GLenum pname, GLint *params)');
        $proc($target, $pname, $params);
    }

    /**
     * {@see GL46::glGetInternalformativ} and {@see GL46::glGetInternalformati64v} retrieve information about
     * implementation-dependent support for internal formats. $target indicates the target with which the internal
     * format will be used and must be one of {@see GL46::GL_RENDERBUFFER}, {@see GL46::GL_TEXTURE_2D_MULTISAMPLE},
     * or {@see GL46::GL_TEXTURE_2D_MULTISAMPLE_ARRAY}, corresponding to usage as a renderbuffer, two-dimensional
     * multisample texture or two-dimensional multisample array texture, respectively.
     *
     * $internalformat specifies the internal format about which to retrieve information and must be a
     * color-renderable, depth-renderable or stencil-renderable format.
     *
     * The information retrieved will be written to memory addressed by the pointer specified in $params. No more
     * than $bufSize integers will be written to this memory.
     *
     * If $pname is {@see GL46::GL_NUM_SAMPLE_COUNTS}, the number of sample counts that would be returned by querying
     * {@see GL46::GL_SAMPLES} will be returned in $params.
     *
     * If $pname is {@see GL46::GL_SAMPLES}, the sample counts supported for $internalformat and $target are written
     * into $params in descending numeric order. Only positive values are returned. Querying {@see GL46::GL_SAMPLES}
     * with $bufSize of one will return just the maximum supported number of samples for this format. The maximum
     * value in {@see GL46::GL_SAMPLES} is guaranteed to be at least the lowest of the following:    The value of
     * {@see GL46::GL_MAX_INTEGER_SAMPLES} if $internalformat is a signed or unsigned integer format.     The value
     * of {@see GL46::GL_MAX_DEPTH_TEXTURE_SAMPLES} if $internalformat is a depth- or stencil-renderable format and
     * $target is {@see GL46::GL_TEXTURE_2D_MULTISAMPLE}, {@see GL46::GL_TEXTURE_2D_MULTISAMPLE_ARRAY}.     The value
     * of {@see GL46::GL_MAX_COLOR_TEXTURE_SAMPLES} if $internalformat is a color-renderable format and $target is
     * {@see GL46::GL_TEXTURE_2D_MULTISAMPLE} or {@see GL46::GL_TEXTURE_2D_MULTISAMPLE_ARRAY}.    The value of
     * {@see GL46::GL_MAX_SAMPLES}.
     *
     * If $pname is {@see GL46::GL_INTERNALFORMAT_SUPPORTED}, $params is set to {@see GL46::GL_TRUE} if
     * $internalformat is a supported internal format for $target and to {@see GL46::GL_FALSE} otherwise.
     *
     * If $pname is {@see GL46::GL_INTERNALFORMAT_PREFERRED}, $params is set to {@see GL46::GL_TRUE} if
     * $internalformat is an format for $target that is preferred by the implementation and to {@see GL46::GL_FALSE}
     * otherwise.
     *
     * If $pname is {@see GL46::GL_INTERNALFORMAT_RED_SIZE}, {@see GL46::GL_INTERNALFORMAT_GREEN_SIZE},
     * {@see GL46::GL_INTERNALFORMAT_BLUE_SIZE}, {@see GL46::GL_INTERNALFORMAT_ALPHA_SIZE},
     * {@see GL46::GL_INTERNALFORMAT_DEPTH_SIZE}, {@see GL46::GL_INTERNALFORMAT_STENCIL_SIZE}, or
     * {@see GL46::GL_INTERNALFORMAT_SHARED_SIZE} then $params is set to the actual resolutions that would be used
     * for storing image array components for the resource for the red, green, blue, alpha, depth, stencil and shared
     * channels respectively. If $internalformat is a compressed internal format, then $params is set to the
     * component resolution of an uncompressed internal format that produces an image of roughly the same quality as
     * the compressed algorithm. If the internal format is unsupported, or if a particular component is not present
     * in the format, 0 is written to $params.
     *
     * If $pname is {@see GL46::GL_INTERNALFORMAT_RED_TYPE}, {@see GL46::GL_INTERNALFORMAT_GREEN_TYPE},
     * {@see GL46::GL_INTERNALFORMAT_BLUE_TYPE}, {@see GL46::GL_INTERNALFORMAT_ALPHA_TYPE},
     * {@see GL46::GL_INTERNALFORMAT_DEPTH_TYPE}, or {@see GL46::GL_INTERNALFORMAT_STENCIL_TYPE} then $params is set
     * to a token identifying the data type used to store the respective component. If the $internalformat represents
     * a compressed internal format then the types returned specify how components are interpreted after
     * decompression.
     *
     * If $pname is {@see GL46::GL_MAX_WIDTH}, {@see GL46::GL_MAX_HEIGHT}, {@see GL46::GL_MAX_DEPTH}, or
     * {@see GL46::GL_MAX_LAYERS} then $pname is filled with the maximum width, height, depth or layer count for
     * textures with internal format $internalformat, respectively. If $pname is
     * {@see GL46::GL_MAX_COMBINED_DIMENSIONS} then $pname is filled with the maximum combined dimensions of a
     * texture of the specified internal format.
     *
     * If $pname is {@see GL46::GL_COLOR_COMPONENTS} then $params is set to the value {@see GL46::GL_TRUE} if the
     * internal format contains any color component (i.e., red, green, blue or alpha) and to {@see GL46::GL_FALSE}
     * otherwise. If $pname is {@see GL46::GL_DEPTH_COMPONENTS} or {@see GL46::GL_STENCIL_COMPONENTS} then $params is
     * set to {@see GL46::GL_TRUE} if the internal format contains a depth or stencil component, respectively, and to
     * {@see GL46::GL_FALSE} otherwise.
     *
     * If $pname is {@see GL46::GL_COLOR_RENDERABLE}, {@see GL46::GL_DEPTH_RENDERABLE} or
     * {@see GL46::GL_STENCIL_RENDERABLE} then $params is set to {@see GL46::GL_TRUE} if the specified internal
     * format is color, depth or stencil renderable, respectively, and to {@see GL46::GL_FALSE} otherwise.
     *
     * If $pname is {@see GL46::GL_FRAMEBUFFER_RENDERABLE} or {@see GL46::GL_FRAMEBUFFER_RENDERABLE_LAYERED} then
     * $params is set to one of {@see GL46::GL_FULL_SUPPORT}, {@see GL46::GL_CAVEAT_SUPPORT} or {@see GL46::GL_NONE}
     * to indicate that framebuffer attachments (layered attachments in the case of
     * {@see GL46::GL_FRAMEBUFFER_RENDERABLE_LAYERED}) with that internal format are either renderable with no
     * restrictions, renderable with some restrictions or not renderable at all.
     *
     * If $pname is {@see GL46::GL_FRAMEBUFFER_BLEND}, $params is set to {@see GL46::GL_TRUE} to indicate that the
     * internal format is supported for blending operations when attached to a framebuffer, and to
     * {@see GL46::GL_FALSE} otherwise.
     *
     * If $pname is {@see GL46::GL_READ_PIXELS} then $params is set to {@see GL46::GL_FULL_SUPPORT},
     * {@see GL46::GL_CAVEAT_SUPPORT} or {@see GL46::GL_NONE} to that either full support, limited support or no
     * support at all is supplied for reading pixels from framebuffer attachments in the specified internal format.
     *
     * If $pname is {@see GL46::GL_READ_PIXELS_FORMAT} or {@see GL46::GL_READ_PIXELS_TYPE} then $params is filled
     * with the format or type, respectively, most recommended to obtain the highest image quality and performance.
     * For {@see GL46::GL_READ_PIXELS_FORMAT}, the value returned in $params is a token that is accepted for the
     * $format argument to {@see GL46::glReadPixels}. For {@see GL46::GL_READ_PIXELS_TYPE}, the value returned in
     * $params is a token that is accepted for the $type argument to {@see GL46::glReadPixels}.
     *
     * If $pname is {@see GL46::GL_TEXTURE_IMAGE_FORMAT} or {@see GL46::GL_TEXTURE_IMAGE_TYPE} then $params is filled
     * with the implementation-recommended format or type to be used in calls to {@see GL46::glTexImage2D} and other
     * similar functions. For {@see GL46::GL_TEXTURE_IMAGE_FORMAT}, $params is filled with a token suitable for use
     * as the $format argument to {@see GL46::glTexImage2D}. For {@see GL46::GL_TEXTURE_IMAGE_TYPE}, $params is
     * filled with a token suitable for use as the $type argument to {@see GL46::glTexImage2D}.
     *
     * If $pname is {@see GL46::GL_GET_TEXTURE_IMAGE_FORMAT} or {@see GL46::GL_GET_TEXTURE_IMAGE_TYPE} then $params
     * is filled with the implementation-recommended format or type to be used in calls to {@see GL46::glGetTexImage}
     * and other similar functions. For {@see GL46::GL_GET_TEXTURE_IMAGE_FORMAT}, $params is filled with a token
     * suitable for use as the $format argument to {@see GL46::glGetTexImage}. For
     * {@see GL46::GL_GET_TEXTURE_IMAGE_TYPE}, $params is filled with a token suitable for use as the $type argument
     * to {@see GL46::glGetTexImage}.
     *
     * If $pname is {@see GL46::GL_MIPMAP} then $pname is set to {@see GL46::GL_TRUE} to indicate that the specified
     * internal format supports mipmaps and to {@see GL46::GL_FALSE} otherwise.
     *
     * If $pname is {@see GL46::GL_GENERATE_MIPMAP} or {@see GL46::GL_AUTO_GENERATE_MIPMAP} then $params is indicates
     * the level of support for manual or automatic mipmap generation for the specified internal format,
     * respectively. Returned values may be one of {@see GL46::GL_FULL_SUPPORT}, {@see GL46::GL_CAVEAT_SUPPORT} and
     * {@see GL46::GL_NONE} to indicate either full support, limited support or no support at all.
     *
     * If $pname is {@see GL46::GL_COLOR_ENCODING} then the color encoding for the resource is returned in $params.
     * Possible values for color buffers are {@see GL46::GL_LINEAR} or {@see GL46::GL_SRGB}, for linear or
     * sRGB-encoded color components, respectively. For non-color formats (such as depth or stencil), or for
     * unsupported resources, the value {@see GL46::GL_NONE} is returned.
     *
     * If $pname is {@see GL46::GL_SRGB_READ}, or {@see GL46::GL_SRGB_WRITE} then $params indicates the level of
     * support for reading and writing to sRGB encoded images, respectively. For {@see GL46::GL_SRGB_READ}, support
     * for converting from sRGB colorspace on read operations is returned in $params and for
     * {@see GL46::GL_SRGB_WRITE}, support for converting to sRGB colorspace on write operations to the resource is
     * returned in $params. $params may be set to {@see GL46::GL_FULL_SUPPORT}, {@see GL46::GL_CAVEAT_SUPPORT}, or
     * {@see GL46::GL_NONE} to indicate full support, limited support or no support at all, respecitively.
     *
     * If $pname is {@see GL46::GL_FILTER} the $params is set to either {@see GL46::GL_TRUE} or {@see GL46::GL_FALSE}
     * to indicate support or lack thereof for filter modes other than {@see GL46::GL_NEAREST} or
     * {@see GL46::GL_NEAREST_MIPMAP} for the specified internal format.
     *
     * If $pname is {@see GL46::GL_VERTEX_TEXTURE}, {@see GL46::GL_TESS_CONTROL_TEXTURE},
     * {@see GL46::GL_TESS_EVALUATION_TEXTURE}, {@see GL46::GL_GEOMETRY_TEXTURE}, {@see GL46::GL_FRAGMENT_TEXTURE},
     * or {@see GL46::GL_COMPUTE_TEXTURE}, then the value written to $params indicates support for use of the
     * resource as a source of texturing in the vertex, tessellation control, tessellation evaluation, geometry,
     * fragment and compute shader stages, respectively. $params may be set to {@see GL46::GL_FULL_SUPPORT},
     * {@see GL46::GL_CAVEAT_SUPPORT} or {@see GL46::GL_NONE} to indicate full support, limited support or no support
     * at all, respectively.
     *
     * If $pname is {@see GL46::GL_TEXTURE_SHADOW}, {@see GL46::GL_TEXTURE_GATHER} or
     * {@see GL46::GL_TEXTURE_GATHER_SHADOW} then the value written to $params indicates the level of support for
     * using the resource with a shadow sampler, in gather operations or as a shadow sampler in gather operations,
     * respectively. Returned values may be {@see GL46::GL_FULL_SUPPORT}, {@see GL46::GL_CAVEAT_SUPPORT} or
     * {@see GL46::GL_NONE} to indicate full support, limited support or no support at all, respectively.
     *
     * If $pname is {@see GL46::GL_SHADER_IMAGE_LOAD}, {@see GL46::GL_SHADER_IMAGE_STORE} or
     * {@see GL46::GL_SHADER_IMAGE_ATOMIC} then the value returned in $params indicates the level of support for
     * image loads, stores and atomics for resources of the specified internal format. Returned values may be
     * {@see GL46::GL_FULL_SUPPORT}, {@see GL46::GL_CAVEAT_SUPPORT} or {@see GL46::GL_NONE} to indicate full support,
     * limited support or no support at all, respectively.
     *
     * If $pname is {@see GL46::GL_IMAGE_TEXEL_SIZE} then the size of a texel when the resource when used as an image
     * texture is returned in $params. If the resource is not supported for image textures zero is returned.
     *
     * If $pname is {@see GL46::GL_IMAGE_COMPATIBILITY_CLASS} then the compatibility class of the resource when used
     * as an image texture is returned in $params. The possible values returned are
     * {@see GL46::GL_IMAGE_CLASS_4_X_32}, {@see GL46::GL_IMAGE_CLASS_2_X_32}, {@see GL46::GL_IMAGE_CLASS_1_X_32},
     * {@see GL46::GL_IMAGE_CLASS_4_X_16}, {@see GL46::GL_IMAGE_CLASS_2_X_16}, {@see GL46::GL_IMAGE_CLASS_1_X_16},
     * {@see GL46::GL_IMAGE_CLASS_4_X_8}, {@see GL46::GL_IMAGE_CLASS_2_X_8}, {@see GL46::GL_IMAGE_CLASS_1_X_8},
     * {@see GL46::GL_IMAGE_CLASS_11_11_10}, and {@see GL46::GL_IMAGE_CLASS_10_10_10_2}, which correspond to the
     * 4x32, 2x32, 1x32, 4x16, 2x16, 1x16, 4x8, 2x8, 1x8, the class (a) 11/11/10 packed floating-point format, and
     * the class (b) 10/10/10/2 packed formats, respectively. If the resource is not supported for image textures,
     * {@see GL46::GL_NONE} is returned.
     *
     * If $pname is {@see GL46::GL_IMAGE_PIXEL_FORMAT} or {@see GL46::GL_IMAGE_PIXEL_TYPE} then the pixel format or
     * type of the resource when used as an image texture is returned in $params, respectively. In either case, the
     * resource is not supported for image textures {@see GL46::GL_NONE} is returned.
     *
     * If $pname is {@see GL46::GL_IMAGE_FORMAT_COMPATIBILITY_TYPE}, the matching criteria use for the resource when
     * used as an image textures is returned in $params. Possible values returned in $params are
     * {@see GL46::GL_IMAGE_FORMAT_COMPATIBILITY_BY_SIZE} or {@see GL46::GL_IMAGE_FORMAT_COMPATIBILITY_BY_CLASS}. If
     * the resource is not supported for image textures, {@see GL46::GL_NONE} is returned.
     *
     * If $pname is {@see GL46::GL_SIMULTANEOUS_TEXTURE_AND_DEPTH_TEST} or
     * {@see GL46::GL_SIMULTANEOUS_TEXTURE_AND_STENCIL_TEST}, support for using the resource both as a source for
     * texture sampling while it is bound as a buffer for depth or stencil test, respectively, is written to $params.
     * Possible values returned are {@see GL46::GL_FULL_SUPPORT}, {@see GL46::GL_CAVEAT_SUPPORT}, or
     * {@see GL46::GL_NONE} to indicate full support, limited support or no support at all. If the resource or
     * operation is not supported, {@see GL46::GL_NONE} is returned.
     *
     * If $pname is {@see GL46::GL_SIMULTANEOUS_TEXTURE_AND_DEPTH_WRITE} or
     * {@see GL46::GL_SIMULTANEOUS_TEXTURE_AND_STENCIL_WRITE}, support for using the resource both as a source for
     * texture sampling while performing depth or stencil writes to the resources, respectively, is written to
     * $params. Possible values returned are {@see GL46::GL_FULL_SUPPORT}, {@see GL46::GL_CAVEAT_SUPPORT}, or
     * {@see GL46::GL_NONE} to indicate full support, limited support or no support at all. If the resource or
     * operation is not supported, {@see GL46::GL_NONE} is returned.
     *
     * If $pname is {@see GL46::GL_TEXTURE_COMPRESSED} then {@see GL46::GL_TRUE} is returned in $params if
     * $internalformat is a compressed internal format. {@see GL46::GL_FALSE} is returned in $params otherwise.
     *
     * If $pname is {@see GL46::GL_TEXTURE_COMPRESSED_BLOCK_WIDTH}, {@see GL46::GL_TEXTURE_COMPRESSED_BLOCK_HEIGHT}
     * or {@see GL46::GL_TEXTURE_COMPRESSED_BLOCK_SIZE} then the width, height or total size, respectively of a block
     * (in basic machine units) is returned in $params. If the internal format is not compressed, or the resource is
     * not supported, 0 is returned.
     *
     * If $pname is {@see GL46::GL_CLEAR_BUFFER}, the level of support for using the resource with
     * {@see GL46::glClearBufferData} and {@see GL46::glClearBufferSubData} is returned in $params. Possible values
     * returned are {@see GL46::GL_FULL_SUPPORT}, {@see GL46::GL_CAVEAT_SUPPORT}, or {@see GL46::GL_NONE} to indicate
     * full support, limited support or no support at all, respectively. If the resource or operation is not
     * supported, {@see GL46::GL_NONE} is returned.
     *
     * If $pname is {@see GL46::GL_TEXTURE_VIEW}, the level of support for using the resource with the
     * {@see GL46::glTextureView} command is returned in $params. Possible values returned are
     * {@see GL46::GL_FULL_SUPPORT}, {@see GL46::GL_CAVEAT_SUPPORT}, or {@see GL46::GL_NONE} to indicate full
     * support, limited support or no support at all, respectively. If the resource or operation is not supported,
     * {@see GL46::GL_NONE} is returned.
     *
     * If $pname is {@see GL46::GL_VIEW_COMPATIBILITY_CLASS} then the compatibility class of the resource when used
     * as a texture view is returned in $params. The possible values returned are
     * {@see GL46::GL_VIEW_CLASS_128_BITS}, {@see GL46::GL_VIEW_CLASS_96_BITS}, {@see GL46::GL_VIEW_CLASS_64_BITS},
     * {@see GL46::GL_VIEW_CLASS_48_BITS}, {@see GL46::GL_VIEW_CLASS_32_BITS}, {@see GL46::GL_VIEW_CLASS_24_BITS},
     * {@see GL46::GL_VIEW_CLASS_16_BITS}, {@see GL46::GL_VIEW_CLASS_8_BITS},
     * {@see GL46::GL_VIEW_CLASS_S3TC_DXT1_RGB}, {@see GL46::GL_VIEW_CLASS_S3TC_DXT1_RGBA},
     * {@see GL46::GL_VIEW_CLASS_S3TC_DXT3_RGBA}, {@see GL46::GL_VIEW_CLASS_S3TC_DXT5_RGBA},
     * {@see GL46::GL_VIEW_CLASS_RGTC1_RED}, {@see GL46::GL_VIEW_CLASS_RGTC2_RG},
     * {@see GL46::GL_VIEW_CLASS_BPTC_UNORM}, and {@see GL46::GL_VIEW_CLASS_BPTC_FLOAT}.
     *
     * If $pname is {@see GL46::GL_CLEAR_TEXTURE} then the presence of support for using the
     * {@see GL46::glClearTexImage} and {@see GL46::glClearTexSubImage} commands with the resource is written to
     * $params. Possible values written are {@see GL46::GL_FULL_SUPPORT}, {@see GL46::GL_CAVEAT_SUPPORT}, or
     * {@see GL46::GL_NONE} to indicate full support, limited support or no support at all, respectively. If the
     * resource or operation is not supported, {@see GL46::GL_NONE} is returned.
     *
     * @see http://docs.gl/gl4/glGetInternalformat
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $internalformat
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param int|\FFI\CData|\FFI\CInt $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public function glGetInternalformati64v($target, $internalformat, $pname, $bufSize, ?\FFI\CData $params): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $internalformat = $internalformat instanceof \FFI\CData ? $internalformat->cdata : $internalformat;
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;
        $bufSize = $bufSize instanceof \FFI\CData ? $bufSize->cdata : $bufSize;

        assert(Assert::uint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($internalformat), 'Argument $internalformat must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($bufSize), 'Argument $bufSize must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetInternalformati64v', 'void (*)(GLenum target, GLenum internalformat, GLenum pname, GLsizei bufSize, GLint64 *params)');
        $proc($target, $internalformat, $pname, $bufSize, $params);
    }

    /**
     * {@see GL46::glInvalidateTexSubImage} invalidates all or part of a texture image. $texture and $level indicated
     * which texture image is being invalidated. After this command, data in that subregion have undefined values.
     * $xoffset, $yoffset, $zoffset, $width, $height, and $depth are interpreted as they are in
     * {@see GL46::glTexSubImage3D}. For texture targets that don't have certain dimensions, this command treats
     * those dimensions as having a size of 1. For example, to invalidate a portion of a two- dimensional texture,
     * the application would use $zoffset equal to zero and $depth equal to one. Cube map textures are treated as an
     * array of six slices in the z-dimension, where a value of $zoffset is interpreted as specifying face
     * {@see GL46::GL_TEXTURE_CUBE_MAP_POSITIVE_X} + $zoffset.
     *
     * $level must be greater than or equal to zero and be less than the base 2 logarithm of the maximum texture
     * width, height, or depth. $xoffset, $yoffset and $zoffset must be greater than or equal to zero and be less
     * than the width, height or depth of the image, respectively. Furthermore, $xoffset + $width, $yoffset +
     * $height, and $zoffset + $depth must be less than or equal to the width, height or depth of the image,
     * respectively.
     *
     * For textures of targets {@see GL46::GL_TEXTURE_RECTANGLE}, {@see GL46::GL_TEXTURE_BUFFER},
     * {@see GL46::GL_TEXTURE_2D_MULTISAMPLE}, or {@see GL46::GL_TEXTURE_2D_MULTISAMPLE_ARRAY}, level must be zero.
     *
     * @see http://docs.gl/gl4/glInvalidateTexSubImage
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $texture
     * @param int|\FFI\CData|\FFI\CInt $level
     * @param int|\FFI\CData|\FFI\CInt $xoffset
     * @param int|\FFI\CData|\FFI\CInt $yoffset
     * @param int|\FFI\CData|\FFI\CInt $zoffset
     * @param int|\FFI\CData|\FFI\CInt $width
     * @param int|\FFI\CData|\FFI\CInt $height
     * @param int|\FFI\CData|\FFI\CInt $depth
     * @return void
     */
    public function glInvalidateTexSubImage($texture, $level, $xoffset, $yoffset, $zoffset, $width, $height, $depth): void
    {
        $texture = $texture instanceof \FFI\CData ? $texture->cdata : $texture;
        $level = $level instanceof \FFI\CData ? $level->cdata : $level;
        $xoffset = $xoffset instanceof \FFI\CData ? $xoffset->cdata : $xoffset;
        $yoffset = $yoffset instanceof \FFI\CData ? $yoffset->cdata : $yoffset;
        $zoffset = $zoffset instanceof \FFI\CData ? $zoffset->cdata : $zoffset;
        $width = $width instanceof \FFI\CData ? $width->cdata : $width;
        $height = $height instanceof \FFI\CData ? $height->cdata : $height;
        $depth = $depth instanceof \FFI\CData ? $depth->cdata : $depth;

        assert(Assert::uint16($texture), 'Argument $texture must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($level), 'Argument $level must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($xoffset), 'Argument $xoffset must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($yoffset), 'Argument $yoffset must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($zoffset), 'Argument $zoffset must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($width), 'Argument $width must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::int16($height), 'Argument $height must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::int16($depth), 'Argument $depth must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glInvalidateTexSubImage', 'void (*)(GLuint texture, GLint level, GLint xoffset, GLint yoffset, GLint zoffset, GLsizei width, GLsizei height, GLsizei depth)');
        $proc($texture, $level, $xoffset, $yoffset, $zoffset, $width, $height, $depth);
    }

    /**
     * {@see GL46::glInvalidateTexSubImage} invalidates all of a texture image. $texture and $level indicated which
     * texture image is being invalidated. After this command, data in the texture image has undefined values.
     *
     * $level must be greater than or equal to zero and be less than the base 2 logarithm of the maximum texture
     * width, height, or depth.
     *
     * For textures of targets {@see GL46::GL_TEXTURE_RECTANGLE}, {@see GL46::GL_TEXTURE_BUFFER},
     * {@see GL46::GL_TEXTURE_2D_MULTISAMPLE}, or {@see GL46::GL_TEXTURE_2D_MULTISAMPLE_ARRAY}, level must be zero.
     *
     * @see http://docs.gl/gl4/glInvalidateTexImage
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $texture
     * @param int|\FFI\CData|\FFI\CInt $level
     * @return void
     */
    public function glInvalidateTexImage($texture, $level): void
    {
        $texture = $texture instanceof \FFI\CData ? $texture->cdata : $texture;
        $level = $level instanceof \FFI\CData ? $level->cdata : $level;

        assert(Assert::uint16($texture), 'Argument $texture must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($level), 'Argument $level must be a C-like GLint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glInvalidateTexImage', 'void (*)(GLuint texture, GLint level)');
        $proc($texture, $level);
    }

    /**
     * {@see GL46::glInvalidateBufferSubData} invalidates all or part of the content of the data store of a buffer
     * object. After invalidation, the content of the specified range of the buffer's data store becomes undefined.
     * The start of the range is given by $offset and its size is given by $length, both measured in basic machine
     * units.
     *
     * @see http://docs.gl/gl4/glInvalidateBufferSubData
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $buffer
     * @param mixed|float|string|int|\FFI\CData|\FFI\CInt $offset
     * @param mixed|float|string|int|\FFI\CData|\FFI\CInt $length
     * @return void
     */
    public function glInvalidateBufferSubData($buffer, $offset, $length): void
    {
        $buffer = $buffer instanceof \FFI\CData ? $buffer->cdata : $buffer;

        assert(Assert::uint16($buffer), 'Argument $buffer must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int64($offset), 'Argument $offset must be a C-like GLintptr, but incompatible or overflow value given');
        assert(Assert::int64($length), 'Argument $length must be a C-like GLsizeiptr, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glInvalidateBufferSubData', 'void (*)(GLuint buffer, GLintptr offset, GLsizeiptr length)');
        $proc($buffer, $offset, $length);
    }

    /**
     * {@see GL46::glInvalidateBufferData} invalidates all of the content of the data store of a buffer object. After
     * invalidation, the content of the buffer's data store becomes undefined.
     *
     * @see http://docs.gl/gl4/glInvalidateBufferData
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $buffer
     * @return void
     */
    public function glInvalidateBufferData($buffer): void
    {
        $buffer = $buffer instanceof \FFI\CData ? $buffer->cdata : $buffer;

        assert(Assert::uint16($buffer), 'Argument $buffer must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glInvalidateBufferData', 'void (*)(GLuint buffer)');
        $proc($buffer);
    }

    /**
     * {@see GL46::glInvalidateFramebuffer} and {@see GL46::glInvalidateNamedFramebufferData} invalidate the entire
     * contents of a specified set of attachments of a framebuffer.
     *
     * For {@see GL46::glInvalidateFramebuffer}, the framebuffer object is that bound to $target. $target must be
     * {@see GL46::GL_FRAMEBUFFER}, {@see GL46::GL_READ_FRAMEBUFFER} or {@see GL46::GL_DRAW_FRAMEBUFFER}.
     * {@see GL46::GL_FRAMEBUFFER} is equivalent to {@see GL46::GL_DRAW_FRAMEBUFFER}. Default framebuffers may also
     * be invalidated if bound to $target.
     *
     * For {@see GL46::glInvalidateNamedFramebufferData}, $framebuffer is the name of the framebuffer object. If
     * $framebuffer is zero, the default draw framebuffer is affected.
     *
     * The set of attachments whose contents are to be invalidated are specified in the $attachments array, which
     * contains $numAttachments elements.
     *
     * If the specified framebuffer is a framebuffer object, each element of $attachments must be one of
     * {@see GL46::GL_DEPTH_ATTACHMENT}, {@see GL46::GL_STENCIL_ATTACHMENT} {@see GL46::GL_DEPTH_STENCIL_ATTACHMENT},
     * or {@see GL46::GL_COLOR_ATTACHMENT}i, where i is between zero and the value of
     * {@see GL46::GL_MAX_FRAMEBUFFER_ATTACHMENTS} minus one.
     *
     * If the specified framebuffer is a default framebuffer, each element of $attachments must be one of
     * {@see GL46::GL_FRONT_LEFT}, {@see GL46::GL_FRONT_RIGHT}, {@see GL46::GL_BACK_LEFT},
     * {@see GL46::GL_BACK_RIGHT}, {@see GL46::GL_AUX}i, {@see GL46::GL_ACCUM}, {@see GL46::GL_COLOR},
     * {@see GL46::GL_DEPTH}, or {@see GL46::GL_STENCIL}. {@see GL46::GL_COLOR}, is treated as
     * {@see GL46::GL_BACK_LEFT} for a double-buffered context and {@see GL46::GL_FRONT_LEFT} for a single-buffered
     * context. The other attachments identify the corresponding specific buffer.
     *
     * The entire contents of each specified attachment become undefined after execution of
     * {@see GL46::glInvalidateFramebuffer} or {@see GL46::glInvalidateNamedFramebufferData}.
     *
     * If the framebuffer object is not complete, {@see GL46::glInvalidateFramebuffer} and
     * {@see GL46::glInvalidateNamedFramebufferData} may be ignored. This is not an error.
     *
     * @see http://docs.gl/gl4/glInvalidateFramebuffer
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $numAttachments
     * @param \FFI\CData|\FFI\CIntPtr|null $attachments
     * @return void
     */
    public function glInvalidateFramebuffer($target, $numAttachments, ?\FFI\CData $attachments): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $numAttachments = $numAttachments instanceof \FFI\CData ? $numAttachments->cdata : $numAttachments;

        assert(Assert::uint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($numAttachments), 'Argument $numAttachments must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glInvalidateFramebuffer', 'void (*)(GLenum target, GLsizei numAttachments, const GLenum *attachments)');
        $proc($target, $numAttachments, $attachments);
    }

    /**
     * {@see GL46::glInvalidateSubFramebuffer} and {@see GL46::glInvalidateNamedFramebufferSubData} invalidate the
     * contents of a specified region of a specified set of attachments of a framebuffer.
     *
     * For {@see GL46::glInvalidateSubFramebuffer}, the framebuffer object is that bound to $target, which must be
     * one of {@see GL46::GL_FRAMEBUFFER}, {@see GL46::GL_READ_FRAMEBUFFER} or {@see GL46::GL_DRAW_FRAMEBUFFER}.
     * {@see GL46::GL_FRAMEBUFFER} is equivalent to {@see GL46::GL_DRAW_FRAMEBUFFER}. Default framebuffers may also
     * be invalidated if bound to $target.
     *
     * For {@see GL46::glInvalidateNamedFramebufferSubData}, $framebuffer is the name of the framebuffer object. If
     * $framebuffer is zero, the default draw framebuffer is affected.
     *
     * The set of attachments of which a region is to be invalidated are specified in the $attachments array, which
     * contains $numAttachments elements.
     *
     * If the specified framebuffer is a framebuffer object, each element of $attachments must be one of
     * {@see GL46::GL_DEPTH_ATTACHMENT}, {@see GL46::GL_STENCIL_ATTACHMENT} {@see GL46::GL_DEPTH_STENCIL_ATTACHMENT},
     * or {@see GL46::GL_COLOR_ATTACHMENT}i, where i is between zero and the value of
     * {@see GL46::GL_MAX_FRAMEBUFFER_ATTACHMENTS} minus one.
     *
     * If the specified framebuffer is a default framebuffer, each element of $attachments must be one of
     * {@see GL46::GL_FRONT_LEFT}, {@see GL46::GL_FRONT_RIGHT}, {@see GL46::GL_BACK_LEFT},
     * {@see GL46::GL_BACK_RIGHT}, {@see GL46::GL_AUX}i, {@see GL46::GL_ACCUM}, {@see GL46::GL_COLOR},
     * {@see GL46::GL_DEPTH}, or {@see GL46::GL_STENCIL}. {@see GL46::GL_COLOR}, is treated as
     * {@see GL46::GL_BACK_LEFT} for a double-buffered context and {@see GL46::GL_FRONT_LEFT} for a single-buffered
     * context. The other attachments identify the corresponding specific buffer.
     *
     * The contents of the specified region of each specified attachment become undefined after execution of
     * {@see GL46::glInvalidateSubFramebuffer} or {@see GL46::glInvalidateNamedFramebufferSubData}. The region to be
     * invalidated is specified by $x, $y, $width and $height where $x and $y give the offset from the origin (with
     * lower-left corner at $(0,0)$) and $width and $height are the width and height, respectively, of the region.
     * Any pixels lying outside of the window allocated to the current GL context (for the default framebuffer), or
     * outside of the attachments of the framebuffer object, are ignored. If the framebuffer object is not complete,
     * these commands may be ignored.
     *
     * If the framebuffer object is not complete, {@see GL46::glInvalidateSubFramebuffer} and
     * {@see GL46::glInvalidateNamedFramebufferSubData} may be ignored. This is not an error.
     *
     * @see http://docs.gl/gl4/glInvalidateSubFramebuffer
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $numAttachments
     * @param \FFI\CData|\FFI\CIntPtr|null $attachments
     * @param int|\FFI\CData|\FFI\CInt $x
     * @param int|\FFI\CData|\FFI\CInt $y
     * @param int|\FFI\CData|\FFI\CInt $width
     * @param int|\FFI\CData|\FFI\CInt $height
     * @return void
     */
    public function glInvalidateSubFramebuffer($target, $numAttachments, ?\FFI\CData $attachments, $x, $y, $width, $height): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $numAttachments = $numAttachments instanceof \FFI\CData ? $numAttachments->cdata : $numAttachments;
        $x = $x instanceof \FFI\CData ? $x->cdata : $x;
        $y = $y instanceof \FFI\CData ? $y->cdata : $y;
        $width = $width instanceof \FFI\CData ? $width->cdata : $width;
        $height = $height instanceof \FFI\CData ? $height->cdata : $height;

        assert(Assert::uint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($numAttachments), 'Argument $numAttachments must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::int16($x), 'Argument $x must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($y), 'Argument $y must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($width), 'Argument $width must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::int16($height), 'Argument $height must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glInvalidateSubFramebuffer', 'void (*)(GLenum target, GLsizei numAttachments, const GLenum *attachments, GLint x, GLint y, GLsizei width, GLsizei height)');
        $proc($target, $numAttachments, $attachments, $x, $y, $width, $height);
    }

    /**
     * {@see GL46::glMultiDrawArraysIndirect} specifies multiple geometric primitives with very few subroutine calls.
     * {@see GL46::glMultiDrawArraysIndirect} behaves similarly to a multitude of calls to
     * {@see GL46::glDrawArraysInstancedBaseInstance}, execept that the parameters to each call to
     * {@see GL46::glDrawArraysInstancedBaseInstance} are stored in an array in memory at the address given by
     * $indirect, separated by the stride, in basic machine units, specified by $stride. If $stride is zero, then the
     * array is assumed to be tightly packed in memory.
     *
     * The parameters addressed by $indirect are packed into an array of structures, each element of which takes the
     * form (in C):
     *
     * <code>
     *     typedef  struct {
     *         uint  count;
     *         uint  instanceCount;
     *         uint  first;
     *         uint  baseInstance;
     *     } DrawArraysIndirectCommand;
     * </code>
     *
     * A single call to {@see GL46::glMultiDrawArraysIndirect} is equivalent, assuming no errors are generated to:
     *
     * <code>
     *     GLsizei n;
     *     for (n = 0; n < drawcount; n++) {
     *         const DrawArraysIndirectCommand *cmd;
     *         if (stride != 0) {
     *             cmd = (const DrawArraysIndirectCommand  *)((uintptr)indirect + n * stride);
     *         } else  {
     *             cmd = (const DrawArraysIndirectCommand  *)indirect + n;
     *         }
     *
     *         glDrawArraysInstancedBaseInstance(mode, cmd->first, cmd->count, cmd->instanceCount,
     * cmd->baseInstance);
     *     }
     * </code>
     *
     * If a buffer is bound to the {@see GL46::GL_DRAW_INDIRECT_BUFFER} binding at the time of a call to
     * {@see GL46::glMultiDrawArraysIndirect}, $indirect is interpreted as an offset, in basic machine units, into
     * that buffer and the parameter data is read from the buffer rather than from client memory.
     *
     * In contrast to {@see GL46::glDrawArraysInstancedBaseInstance}, the `first` member of the parameter structure
     * is unsigned, and out-of-range indices do not generate an error.
     *
     * Vertex attributes that are modified by {@see GL46::glMultiDrawArraysIndirect} have an unspecified value after
     * {@see GL46::glMultiDrawArraysIndirect} returns. Attributes that aren't modified remain well defined.
     *
     * @see http://docs.gl/gl4/glMultiDrawArraysIndirect
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $mode
     * @param \FFI\CData|\FFI\CPtr|null $indirect
     * @param int|\FFI\CData|\FFI\CInt $drawcount
     * @param int|\FFI\CData|\FFI\CInt $stride
     * @return void
     */
    public function glMultiDrawArraysIndirect($mode, ?\FFI\CData $indirect, $drawcount, $stride): void
    {
        $mode = $mode instanceof \FFI\CData ? $mode->cdata : $mode;
        $drawcount = $drawcount instanceof \FFI\CData ? $drawcount->cdata : $drawcount;
        $stride = $stride instanceof \FFI\CData ? $stride->cdata : $stride;

        assert(Assert::uint16($mode), 'Argument $mode must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($drawcount), 'Argument $drawcount must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::int16($stride), 'Argument $stride must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glMultiDrawArraysIndirect', 'void (*)(GLenum mode, const void *indirect, GLsizei drawcount, GLsizei stride)');
        $proc($mode, $indirect, $drawcount, $stride);
    }

    /**
     * {@see GL46::glMultiDrawElementsIndirect} specifies multiple indexed geometric primitives with very few
     * subroutine calls. {@see GL46::glMultiDrawElementsIndirect} behaves similarly to a multitude of calls to
     * {@see GL46::glDrawElementsInstancedBaseVertexBaseInstance}, execpt that the parameters to
     * {@see GL46::glDrawElementsInstancedBaseVertexBaseInstance} are stored in an array in memory at the address
     * given by $indirect, separated by the stride, in basic machine units, specified by $stride. If $stride is zero,
     * then the array is assumed to be tightly packed in memory.
     *
     * The parameters addressed by $indirect are packed into a structure that takes the form (in C):
     *
     * <code>
     *     typedef  struct {
     *         uint  count;
     *         uint  instanceCount;
     *         uint  firstIndex;
     *         uint  baseVertex;
     *         uint  baseInstance;
     *     } DrawElementsIndirectCommand;
     * </code>
     *
     * A single call to {@see GL46::glMultiDrawElementsIndirect} is equivalent, assuming no errors are generated to:
     *
     * <code>
     *     GLsizei n;
     *     for (n = 0; n < drawcount; n++) {
     *         const DrawElementsIndirectCommand *cmd;
     *         if (stride != 0) {
     *             cmd = (const DrawElementsIndirectCommand  *)((uintptr)indirect + n * stride);
     *         } else {
     *             cmd = (const DrawElementsIndirectCommand  *)indirect + n;
     *         }
     *
     *         glDrawElementsInstancedBaseVertexBaseInstance(mode,
     *                                                       cmd->count,
     *                                                       type,
     *                                                       cmd->firstIndex * size-of-type,
     *                                                       cmd->instanceCount,
     *                                                       cmd->baseVertex,
     *                                                       cmd->baseInstance);
     *     }
     * </code>
     *
     * If a buffer is bound to the {@see GL46::GL_DRAW_INDIRECT_BUFFER} binding at the time of a call to
     * {@see GL46::glDrawElementsIndirect}, $indirect is interpreted as an offset, in basic machine units, into that
     * buffer and the parameter data is read from the buffer rather than from client memory.
     *
     * Note that indices stored in client memory are not supported. If no buffer is bound to the
     * {@see GL46::GL_ELEMENT_ARRAY_BUFFER} binding, an error will be generated.
     *
     * The results of the operation are undefined if the `reservedMustBeZero` member of the parameter structure is
     * non-zero. However, no error is generated in this case.
     *
     * Vertex attributes that are modified by {@see GL46::glDrawElementsIndirect} have an unspecified value after
     * {@see GL46::glDrawElementsIndirect} returns. Attributes that aren't modified remain well defined.
     *
     * @see http://docs.gl/gl4/glMultiDrawElementsIndirect
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $mode
     * @param int|\FFI\CData|\FFI\CInt $type
     * @param \FFI\CData|\FFI\CPtr|null $indirect
     * @param int|\FFI\CData|\FFI\CInt $drawcount
     * @param int|\FFI\CData|\FFI\CInt $stride
     * @return void
     */
    public function glMultiDrawElementsIndirect($mode, $type, ?\FFI\CData $indirect, $drawcount, $stride): void
    {
        $mode = $mode instanceof \FFI\CData ? $mode->cdata : $mode;
        $type = $type instanceof \FFI\CData ? $type->cdata : $type;
        $drawcount = $drawcount instanceof \FFI\CData ? $drawcount->cdata : $drawcount;
        $stride = $stride instanceof \FFI\CData ? $stride->cdata : $stride;

        assert(Assert::uint16($mode), 'Argument $mode must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($type), 'Argument $type must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($drawcount), 'Argument $drawcount must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::int16($stride), 'Argument $stride must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glMultiDrawElementsIndirect', 'void (*)(GLenum mode, GLenum type, const void *indirect, GLsizei drawcount, GLsizei stride)');
        $proc($mode, $type, $indirect, $drawcount, $stride);
    }

    /**
     * {@see GL46::glGetProgramInterfaceiv} queries the property of the interface identifed by $programInterface in
     * $program, the property name of which is given by $pname.
     *
     * $program must be the name of an existing program object. $programInterface is the name of the interface within
     * $program to query and must be one of the following values:
     *
     *  - {@see GL46::GL_UNIFORM}: The query is targeted at the set of active
     *    uniforms within $program.
     *
     *  - {@see GL46::GL_UNIFORM_BLOCK}: The query is targeted at the set of
     *    active uniform blocks within $program.
     *
     *  - {@see GL46::GL_ATOMIC_COUNTER_BUFFER}: The query is targeted at the
     *    set of active atomic counter buffer binding points within $program.
     *
     *  - {@see GL46::GL_PROGRAM_INPUT}: The query is targeted at the set of
     *    active input variables used by the first shader stage of $program. If
     *    $program contains multiple shader stages then input variables from any
     *    stage other than the first will not be
     *    enumerated.
     *
     *  - {@see GL46::GL_PROGRAM_OUTPUT}: The query is targeted at the set of
     *    active output variables produced by the last shader stage of $program.
     *    If
     *    $program contains multiple shader stages then output variables from
     *    any stage other than the last will not be
     *    enumerated.
     *
     *  - {@see GL46::GL_VERTEX_SUBROUTINE}: The query is targeted at the set of
     *    active subroutines for the vertex, tessellation control, tessellation
     *    evaluation, geometry, fragment and compute shader stages of $program,
     *    respectively.
     *
     *  - {@see GL46::GL_VERTEX_SUBROUTINE_UNIFORM}: The query is targeted at
     *    the set of active subroutine uniform variables used by the vertex,
     *    tessellation
     *    control, tessellation evaluation, geometry, fragment and compute
     *    shader stages of $program, respectively.
     *
     *  - {@see GL46::GL_TRANSFORM_FEEDBACK_VARYING}: The query is targeted at
     *    the set of output variables from the last non-fragment stage of
     *    $program that would
     *    be captured if transform feedback were active.
     *
     *  - {@see GL46::GL_BUFFER_VARIABLE}: The query is targeted at the set of
     *    active buffer variables used by $program.
     *
     *  - {@see GL46::GL_SHADER_STORAGE_BLOCK}: The query is targeted at the set
     *    of active shader storage blocks used by $program.
     *
     *  - {@see GL46::GL_TRANSFORM_FEEDBACK_BUFFER}: The query is targeted at
     *    the set of active buffer binding points to which output variables in
     *    the
     *    {@see GL46::GL_TRANSFORM_FEEDBACK_VARYING} interface are written.
     *
     * $pname identifies the property of $programInterface to return in $params.
     *
     * If $pname is {@see GL46::GL_ACTIVE_RESOURCES}, the value returned is the number of resources in the active
     * resource list for $programInterface. If the list of active resources for $programInterface is empty, zero is
     * returned.
     *
     * If $pname is {@see GL46::GL_MAX_NAME_LENGTH}, the value returned is the length of the longest active name
     * string for an active resource in $programInterface. This length includes an extra character for the null
     * terminator. If the list of active resources for $programInterface is empty, zero is returned. It is an error
     * to specify {@see GL46::GL_MAX_NAME_LENGTH} when $programInterface is {@see GL46::GL_ATOMIC_COUNTER_BUFFER}, as
     * active atomic counter buffer resources are not assigned name strings.
     *
     * If $pname is {@see GL46::GL_MAX_NUM_ACTIVE_VARIABLES}, the value returned is the number of active variables
     * belonging to the interface block or atomic counter buffer resource in $programInterface with the most active
     * variables. If the list of active resources for $programInterface is empty, zero is returned. When $pname is
     * {@see GL46::GL_MAX_NUM_ACTIVE_VARIABLES}, $programInterface must be {@see GL46::GL_UNIFORM_BLOCK},
     * {@see GL46::GL_ATOMIC_COUNTER_BUFFER}, or {@see GL46::GL_SHADER_STORAGE_BLOCK}.
     *
     * If $pname is {@see GL46::GL_MAX_NUM_COMPATIBLE_SUBROUTINES}, the value returned is the number of compatible
     * subroutines belonging to the active subroutine uniform in $programInterface with the most compatible
     * subroutines. If the list of active resources for $programInterface is empty, zero is returned. When $pname is
     * {@see GL46::GL_MAX_NUM_COMPATIBLE_SUBROUTINES}, $programInterface must be one of
     * {@see GL46::GL_VERTEX_SUBROUTINE_UNIFORM}, {@see GL46::GL_TESS_CONTROL_SUBROUTINE_UNIFORM},
     * {@see GL46::GL_TESS_EVALUATION_SUBROUTINE_UNIFORM}, {@see GL46::GL_GEOMETRY_SUBROUTINE_UNIFORM},
     * {@see GL46::GL_FRAGMENT_SUBROUTINE_UNIFORM}, or {@see GL46::GL_COMPUTE_SUBROUTINE_UNIFORM}.
     *
     * @see http://docs.gl/gl4/glGetProgramInterface
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $programInterface
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public function glGetProgramInterfaceiv($program, $programInterface, $pname, ?\FFI\CData $params): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $programInterface = $programInterface instanceof \FFI\CData ? $programInterface->cdata : $programInterface;
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($programInterface), 'Argument $programInterface must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetProgramInterfaceiv', 'void (*)(GLuint program, GLenum programInterface, GLenum pname, GLint *params)');
        $proc($program, $programInterface, $pname, $params);
    }

    /**
     * {@see GL46::glGetProgramResourceIndex} returns the unsigned integer index assigned to a resource named $name
     * in the interface type $programInterface of program object $program.
     *
     * $program must be the name of an existing program object. $programInterface is the name of the interface within
     * $program which contains the resource named $nameand must be one of the following values:
     *
     *  - {@see GL46::GL_UNIFORM}: The query is targeted at the set of active
     *    uniforms within $program.
     *
     *  - {@see GL46::GL_UNIFORM_BLOCK}: The query is targeted at the set of
     *    active uniform blocks within $program.
     *
     *  - {@see GL46::GL_PROGRAM_INPUT}: The query is targeted at the set of
     *    active input variables used by the first shader stage of $program. If
     *    $program contains multiple shader stages then input variables from any
     *    stage other than the first will not be
     *    enumerated.
     *
     *  - {@see GL46::GL_PROGRAM_OUTPUT}: The query is targeted at the set of
     *    active output variables produced by the last shader stage of $program.
     *    If
     *    $program contains multiple shader stages then output variables from
     *    any stage other than the last will not be
     *    enumerated.
     *
     *  - {@see GL46::GL_VERTEX_SUBROUTINE}: The query is targeted at the set of
     *    active subroutines for the vertex, tessellation control, tessellation
     *    evaluation, geometry, fragment and compute shader stages of $program,
     *    respectively.
     *
     *  - {@see GL46::GL_VERTEX_SUBROUTINE_UNIFORM}: The query is targeted at
     *    the set of active subroutine uniform variables used by the vertex,
     *    tessellation
     *    control, tessellation evaluation, geometry, fragment and compute
     *    shader stages of $program, respectively.
     *
     *  - {@see GL46::GL_TRANSFORM_FEEDBACK_VARYING}: The query is targeted at
     *    the set of output variables from the last non-fragment stage of
     *    $program that would
     *    be captured if transform feedback were active.
     *
     *  - {@see GL46::GL_TRANSFORM_FEEDBACK_BUFFER}: The query is targeted at
     *    the set of active buffer binding points to which output variables in
     *    the
     *    {@see GL46::GL_TRANSFORM_FEEDBACK_VARYING} interface are written.
     *
     *  - {@see GL46::GL_BUFFER_VARIABLE}: The query is targeted at the set of
     *    active buffer variables used by $program.
     *
     *  - {@see GL46::GL_SHADER_STORAGE_BLOCK}: The query is targeted at the set
     *    of active shader storage blocks used by $program.
     *
     * If $name exactly matches the name string of one of the active resources for $programInterface, the index of
     * the matched resource is returned. Additionally, if $name would exactly match the name string of an active
     * resource if "[0]" were appended to $name, the index of the matched resource is returned. Otherwise, $name is
     * considered not to be the name of an active resource, and {@see GL46::GL_INVALID_INDEX} is returned.
     *
     * For the interface {@see GL46::GL_TRANSFORM_FEEDBACK_VARYING}, the value {@see GL46::GL_INVALID_INDEX} should
     * be returned when querying the index assigned to the special names `gl_NextBuffer`, `gl_SkipComponents1`,
     * `gl_SkipComponents2`, `gl_SkipComponents3`, or `gl_SkipComponents4`.
     *
     * @see http://docs.gl/gl4/glGetProgramResourceIndex
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $programInterface
     * @param \FFI\CData|\FFI\CIntPtr|null $name
     * @return int|\FFI\CData|\FFI\CInt
     */
    public function glGetProgramResourceIndex($program, $programInterface, ?\FFI\CData $name): int
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $programInterface = $programInterface instanceof \FFI\CData ? $programInterface->cdata : $programInterface;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($programInterface), 'Argument $programInterface must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetProgramResourceIndex', 'GLuint (*)(GLuint program, GLenum programInterface, const GLchar *name)');
        return $proc($program, $programInterface, $name);
    }

    /**
     * {@see GL46::glGetProgramResourceName} retrieves the name string assigned to the single active resource with an
     * index of $index in the interface $programInterface of program object $program. $index must be less than the
     * number of entries in the active resource list for $programInterface.
     *
     * $program must be the name of an existing program object. $programInterface is the name of the interface within
     * $program which contains the resource and must be one of the following values:
     *
     *  - {@see GL46::GL_UNIFORM}: The query is targeted at the set of active
     *    uniforms within $program.
     *
     *  - {@see GL46::GL_UNIFORM_BLOCK}: The query is targeted at the set of
     *    active uniform blocks within $program.
     *
     *  - {@see GL46::GL_PROGRAM_INPUT}: The query is targeted at the set of
     *    active input variables used by the first shader stage of $program. If
     *    $program contains multiple shader stages then input variables from any
     *    stage other than the first will not be
     *    enumerated.
     *
     *  - {@see GL46::GL_PROGRAM_OUTPUT}: The query is targeted at the set of
     *    active output variables produced by the last shader stage of $program.
     *    If
     *    $program contains multiple shader stages then output variables from
     *    any stage other than the last will not be
     *    enumerated.
     *
     *  - {@see GL46::GL_VERTEX_SUBROUTINE}: The query is targeted at the set of
     *    active subroutines for the vertex, tessellation control, tessellation
     *    evaluation, geometry, fragment and compute shader stages of $program,
     *    respectively.
     *
     *  - {@see GL46::GL_VERTEX_SUBROUTINE_UNIFORM}: The query is targeted at
     *    the set of active subroutine uniform variables used by the vertex,
     *    tessellation
     *    control, tessellation evaluation, geometry, fragment and compute
     *    shader stages of $program, respectively.
     *
     *  - {@see GL46::GL_TRANSFORM_FEEDBACK_VARYING}: The query is targeted at
     *    the set of output variables from the last non-fragment stage of
     *    $program that would
     *    be captured if transform feedback were active.
     *
     *  - {@see GL46::GL_BUFFER_VARIABLE}: The query is targeted at the set of
     *    active buffer variables used by $program.
     *
     *  - {@see GL46::GL_SHADER_STORAGE_BLOCK}: The query is targeted at the set
     *    of active shader storage blocks used by $program.
     *
     * The name string assigned to the active resource identified by $index is returned as a null-terminated string
     * in the character array whose address is given in $name. The actual number of characters written into $name,
     * excluding the null terminator, is returned in $length. If $length is NULL, no length is returned. The maximum
     * number of characters that may be written into $name, including the null terminator, is specified by $bufSize.
     * If the length of the name string including the null terminator is greater than $bufSize, the first $bufSize-1
     * characters of the name string will be written to $name, followed by a null terminator. If $bufSize is zero, no
     * error will be generated but no characters will be written to $name. The length of the longest name string for
     * $programInterface&gt;, including a null terminator, can be queried by calling
     * {@see GL46::glGetProgramInterface} with a $pname of {@see GL46::GL_MAX_NAME_LENGTH}.
     *
     * @see http://docs.gl/gl4/glGetProgramResourceName
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $programInterface
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param int|\FFI\CData|\FFI\CInt $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @param \FFI\CData|\FFI\CIntPtr|null $name
     * @return void
     */
    public function glGetProgramResourceName($program, $programInterface, $index, $bufSize, ?\FFI\CData $length, ?\FFI\CData $name): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $programInterface = $programInterface instanceof \FFI\CData ? $programInterface->cdata : $programInterface;
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $bufSize = $bufSize instanceof \FFI\CData ? $bufSize->cdata : $bufSize;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($programInterface), 'Argument $programInterface must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($bufSize), 'Argument $bufSize must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetProgramResourceName', 'void (*)(GLuint program, GLenum programInterface, GLuint index, GLsizei bufSize, GLsizei *length, GLchar *name)');
        $proc($program, $programInterface, $index, $bufSize, $length, $name);
    }

    /**
     * {@see GL46::glGetProgramResourceiv} returns values for multiple properties of a single active resource with an
     * index of $index in the interface $programInterface of program object $program. For each resource, values for
     * $propCount properties specified by the array $props are returned. $propCount may not be zero. An error is
     * generated if any value in $props is not one of the properties described immediately belowor if any value in
     * $props is not allowed for $programInterface. The set of allowed $programInterface values for each property can
     * be found in the following table:
     *
     * | {@see GL46::GL_NAME_LENGTH}                          | Any except {@see GL46::GL_ATOMIC_COUNTER_BUFFER} and {@see GL46::GL_TRANSFORM_FEEDBACK_BUFFER}                                                                                                                                                                                                                                                                                                                                            |
     * | {@see GL46::GL_TYPE}                                 | {@see GL46::GL_UNIFORM}, {@see GL46::GL_PROGRAM_INPUT}, {@see GL46::GL_PROGRAM_OUTPUT},
     * {@see GL46::GL_TRANSFORM_FEEDBACK_VARYING}, {@see GL46::GL_BUFFER_VARIABLE}                                                                                                                                                                                                                                                                       |
     * | {@see GL46::GL_ARRAY_SIZE}                           | {@see GL46::GL_UNIFORM}, {@see GL46::GL_BUFFER_VARIABLE}, {@see GL46::GL_PROGRAM_INPUT},
     * {@see GL46::GL_PROGRAM_OUTPUT, VERTEX_SUBROUTINE_UNIFORM}, {@see GL46::GL_TESS_CONTROL_SUBROUTINE_UNIFORM},
     * {@see GL46::GL_TESS_EVALUATION_SUBROUTINE_UNIFORM}, {@see GL46::GL_GEOMETRY_SUBROUTINE_UNIFORM},
     * {@see GL46::GL_FRAGMENT_SUBROUTINE_UNIFORM}, {@see GL46::GL_COMPUTE_SUBROUTINE_UNIFORM},
     * {@see GL46::GL_TRANSFORM_FEEDBACK_VARYING} |
     * | {@see GL46::GL_OFFSET}                               | {@see GL46::GL_UNIFORM}, {@see GL46::GL_BUFFER_VARIABLE}, {@see GL46::GL_TRANSFORM_FEEDBACK_VARYING}                                                                                                                                                                                                                                                                                                                                      |
     * | {@see GL46::GL_BLOCK_INDEX}                          | {@see GL46::GL_UNIFORM}, {@see GL46::GL_BUFFER_VARIABLE}                                                                                                                                                                                                                                                                                                                                                                                  |
     * | {@see GL46::GL_ARRAY_STRIDE}                         | {@see GL46::GL_UNIFORM}, {@see GL46::GL_BUFFER_VARIABLE}                                                                                                                                                                                                                                                                                                                                                                                  |
     * | {@see GL46::GL_MATRIX_STRIDE}                        | {@see GL46::GL_UNIFORM}, {@see GL46::GL_BUFFER_VARIABLE}                                                                                                                                                                                                                                                                                                                                                                                  |
     * | {@see GL46::GL_IS_ROW_MAJOR}                         | {@see GL46::GL_UNIFORM}, {@see GL46::GL_BUFFER_VARIABLE}                                                                                                                                                                                                                                                                                                                                                                                  |
     * | {@see GL46::GL_ATOMIC_COUNTER_BUFFER_INDEX}          | {@see GL46::GL_UNIFORM}                                                                                                                                                                                                                                                                                                                                                                                                                   |
     * | {@see GL46::GL_TEXTURE_BUFFER}                       | none                                                                                                                                                                                                                                                                                                                                                                                                                                      |
     * | {@see GL46::GL_BUFFER_BINDING}                       | {@see GL46::GL_UNIFORM_BLOCK}, {@see GL46::GL_ATOMIC_COUNTER_BUFFER}, {@see GL46::GL_SHADER_STORAGE_BLOCK},
     * {@see GL46::GL_TRANSFORM_FEEDBACK_BUFFER}                                                                                                                                                                                                                                                                                     |
     * | {@see GL46::GL_BUFFER_DATA_SIZE}                     | {@see GL46::GL_UNIFORM_BLOCK}, {@see GL46::GL_ATOMIC_COUNTER_BUFFER}, {@see GL46::GL_SHADER_STORAGE_BLOCK}                                                                                                                                                                                                                                                                                                                                |
     * | {@see GL46::GL_NUM_ACTIVE_VARIABLES}                 | {@see GL46::GL_UNIFORM_BLOCK}, {@see GL46::GL_ATOMIC_COUNTER_BUFFER}, {@see GL46::GL_SHADER_STORAGE_BLOCK},
     * {@see GL46::GL_TRANSFORM_FEEDBACK_BUFFER}                                                                                                                                                                                                                                                                                     |
     * | {@see GL46::GL_ACTIVE_VARIABLES}                     | {@see GL46::GL_UNIFORM_BLOCK}, {@see GL46::GL_ATOMIC_COUNTER_BUFFER}, {@see GL46::GL_SHADER_STORAGE_BLOCK},
     * {@see GL46::GL_TRANSFORM_FEEDBACK_BUFFER}                                                                                                                                                                                                                                                                                     |
     * | {@see GL46::GL_REFERENCED_BY_VERTEX_SHADER}          | {@see GL46::GL_UNIFORM}, {@see GL46::GL_UNIFORM_BLOCK}, {@see GL46::GL_ATOMIC_COUNTER_SHADER},
     * {@see GL46::GL_BUFFER}, {@see GL46::GL_SHADER_STORAGE_BLOCK}, {@see GL46::GL_BUFFER_VARIABLE},
     * {@see GL46::GL_PROGRAM_INPUT}, {@see GL46::GL_PROGRAM_OUTPUT}                                                                                                                                                                               |
     * | {@see GL46::GL_REFERENCED_BY_TESS_CONTROL_SHADER}    | {@see GL46::GL_UNIFORM}, {@see GL46::GL_UNIFORM_BLOCK}, {@see GL46::GL_ATOMIC_COUNTER_SHADER},
     * {@see GL46::GL_BUFFER}, {@see GL46::GL_SHADER_STORAGE_BLOCK}, {@see GL46::GL_BUFFER_VARIABLE},
     * {@see GL46::GL_PROGRAM_INPUT}, {@see GL46::GL_PROGRAM_OUTPUT}                                                                                                                                                                               |
     * | {@see GL46::GL_REFERENCED_BY_TESS_EVALUATION_SHADER} | {@see GL46::GL_UNIFORM}, {@see GL46::GL_UNIFORM_BLOCK}, {@see GL46::GL_ATOMIC_COUNTER_SHADER},
     * {@see GL46::GL_BUFFER}, {@see GL46::GL_SHADER_STORAGE_BLOCK}, {@see GL46::GL_BUFFER_VARIABLE},
     * {@see GL46::GL_PROGRAM_INPUT}, {@see GL46::GL_PROGRAM_OUTPUT}                                                                                                                                                                               |
     * | {@see GL46::GL_REFERENCED_BY_GEOMETRY_SHADER}        | {@see GL46::GL_UNIFORM}, {@see GL46::GL_UNIFORM_BLOCK}, {@see GL46::GL_ATOMIC_COUNTER_SHADER},
     * {@see GL46::GL_BUFFER}, {@see GL46::GL_SHADER_STORAGE_BLOCK}, {@see GL46::GL_BUFFER_VARIABLE},
     * {@see GL46::GL_PROGRAM_INPUT}, {@see GL46::GL_PROGRAM_OUTPUT}                                                                                                                                                                               |
     * | {@see GL46::GL_REFERENCED_BY_FRAGMENT_SHADER}        | {@see GL46::GL_UNIFORM}, {@see GL46::GL_UNIFORM_BLOCK}, {@see GL46::GL_ATOMIC_COUNTER_SHADER},
     * {@see GL46::GL_BUFFER}, {@see GL46::GL_SHADER_STORAGE_BLOCK}, {@see GL46::GL_BUFFER_VARIABLE},
     * {@see GL46::GL_PROGRAM_INPUT}, {@see GL46::GL_PROGRAM_OUTPUT}                                                                                                                                                                               |
     * | {@see GL46::GL_REFERENCED_BY_COMPUTE_SHADER}         | {@see GL46::GL_UNIFORM}, {@see GL46::GL_UNIFORM_BLOCK}, {@see GL46::GL_ATOMIC_COUNTER_SHADER},
     * {@see GL46::GL_BUFFER}, {@see GL46::GL_SHADER_STORAGE_BLOCK}, {@see GL46::GL_BUFFER_VARIABLE},
     * {@see GL46::GL_PROGRAM_INPUT}, {@see GL46::GL_PROGRAM_OUTPUT}                                                                                                                                                                               |
     * | {@see GL46::GL_NUM_COMPATIBLE_SUBROUTINES}           | {@see GL46::GL_VERTEX_SUBROUTINE_UNIFORM}, {@see GL46::GL_TESS_CONTROL_SUBROUTINE_UNIFORM},
     * {@see GL46::GL_TESS_EVALUATION_SUBROUTINE_UNIFORM}, {@see GL46::GL_GEOMETRY_SUBROUTINE_UNIFORM},
     * {@see GL46::GL_FRAGMENT_SUBROUTINE_UNIFORM}, {@see GL46::GL_COMPUTE_SUBROUTINE_UNIFORM}                                                                                                                                                      |
     * | {@see GL46::GL_COMPATIBLE_SUBROUTINES}               | {@see GL46::GL_VERTEX_SUBROUTINE_UNIFORM}, {@see GL46::GL_TESS_CONTROL_SUBROUTINE_UNIFORM},
     * {@see GL46::GL_TESS_EVALUATION_SUBROUTINE_UNIFORM}, {@see GL46::GL_GEOMETRY_SUBROUTINE_UNIFORM},
     * {@see GL46::GL_FRAGMENT_SUBROUTINE_UNIFORM}, {@see GL46::GL_COMPUTE_SUBROUTINE_UNIFORM}                                                                                                                                                      |
     * | {@see GL46::GL_TOP_LEVEL_ARRAY_SIZE}                 | {@see GL46::GL_BUFFER_VARIABLE}                                                                                                                                                                                                                                                                                                                                                                                                           |
     * | {@see GL46::GL_TOP_LEVEL_ARRAY_STRIDE}               | {@see GL46::GL_BUFFER_VARIABLE}                                                                                                                                                                                                                                                                                                                                                                                                           |
     * | {@see GL46::GL_LOCATION}                             | {@see GL46::GL_UNIFORM}, {@see GL46::GL_PROGRAM_INPUT}, {@see GL46::GL_PROGRAM_OUTPUT},
     * {@see GL46::GL_VERTEX_SUBROUTINE_UNIFORM}, {@see GL46::GL_TESS_CONTROL_SUBROUTINE_UNIFORM},
     * {@see GL46::GL_TESS_EVALUATION_SUBROUTINE_UNIFORM}, {@see GL46::GL_GEOMETRY_SUBROUTINE_UNIFORM},
     * {@see GL46::GL_FRAGMENT_SUBROUTINE_UNIFORM}, {@see GL46::GL_COMPUTE_SUBROUTINE_UNIFORM}                                                              |
     * | {@see GL46::GL_LOCATION_INDEX}                       | {@see GL46::GL_PROGRAM_OUTPUT}                                                                                                                                                                                                                                                                                                                                                                                                            |
     * | {@see GL46::GL_IS_PER_PATCH}                         | {@see GL46::GL_PROGRAM_INPUT}, {@see GL46::GL_PROGRAM_OUTPUT}                                                                                                                                                                                                                                                                                                                                                                             |
     * | {@see GL46::GL_LOCATION_COMPONENT}                   | {@see GL46::GL_PROGRAM_INPUT}, {@see GL46::GL_PROGRAM_OUTPUT}                                                                                                                                                                                                                                                                                                                                                                             |
     * | {@see GL46::GL_TRANSFORM_FEEDBACK_BUFFER_INDEX}      | {@see GL46::GL_TRANSFORM_FEEDBACK_VARYING}                                                                                                                                                                                                                                                                                                                                                                                                |
     * | {@see GL46::GL_TRANSFORM_FEEDBACK_BUFFER_STRIDE}     | {@see GL46::GL_TRANSFORM_FEEDBACK_BUFFER}                                                                                                                                                                                                                                                                                                                                                                                                 |
     * For the property {@see GL46::GL_NAME_LENGTH}, a single integer identifying the length of the name string
     * associated with an active variable, interface block, or subroutine is written to $params. The name length
     * includes a terminating null character.
     *
     * For the property {@see GL46::GL_TYPE}, a single integer identifying the type of an active variable is written
     * to $params. The integer returned is one of the values found in table 2.16.
     *
     * For the property {@see GL46::GL_ARRAY_SIZE}, a single integer identifying the number of active array elements
     * of an active variable is written to $params. The array size returned is in units of the type associated with
     * the property {@see GL46::GL_TYPE}. For active variables not corresponding to an array of basic types, the
     * value zero is written to $params.
     *
     * For the property {@see GL46::GL_BLOCK_INDEX}, a single integer identifying the index of the active interface
     * block containing an active variable is written to $params. If the variable is not the member of an interface
     * block, the value -1 is written to $params.
     *
     * For the property {@see GL46::GL_OFFSET}, a single integer identifying the offset of an active variable is
     * written to $params. For variables in the {@see GL46::GL_UNIFORM} and {@see GL46::GL_BUFFER_VARIABLE}
     * interfaces that are backed by a buffer object, the value written is the offset of that variable relative to
     * the base of the buffer range holding its value. For variables in the
     * {@see GL46::GL_TRANSFORM_FEEDBACK_VARYING} interface, the value written is the offset in the transform
     * feedback buffer storage assigned to each vertex captured in transform feedback mode where the value of the
     * variable will be stored. Such offsets are specified via the `xfb_offset` layout qualifier or assigned
     * according to the variables position in the list of strings passed to {@see GL46::glTransformFeedbackVaryings}.
     * Offsets are expressed in basic machine units. For all variables not recorded in transform feedback mode,
     * including the special names `"gl_NextBuffer"`, `"gl_SkipComponents1"`, `"gl_SkipComponents2"`,
     * `"gl_SkipComponents3"`, and `"gl_SkipComponents4"`, -1 is written to $params.
     *
     * For the property {@see GL46::GL_ARRAY_STRIDE}, a single integer identifying the stride between array elements
     * in an active variable is written to $params. For active variables declared as an array of basic types, the
     * value written is the difference, in basic machine units, between the offsets of consecutive elements in an
     * array. For active variables not declared as an array of basic types, zero is written to $params. For active
     * variables not backed by a buffer object, -1 is written to $params, regardless of the variable type.
     *
     * For the property {@see GL46::GL_MATRIX_STRIDE}, a single integer identifying the stride between columns of a
     * column-major matrix or rows of a row-major matrix is written to $params. For active variables declared a
     * single matrix or array of matrices, the value written is the difference, in basic machine units, between the
     * offsets of consecutive columns or rows in each matrix. For active variables not declared as a matrix or array
     * of matrices, zero is written to $params. For active variables not backed by a buffer object, -1 is written to
     * $params, regardless of the variable type.
     *
     * For the property {@see GL46::GL_IS_ROW_MAJOR}, a single integer identifying whether an active variable is a
     * row-major matrix is written to $params. For active variables backed by a buffer object, declared as a single
     * matrix or array of matrices, and stored in row-major order, one is written to $params. For all other active
     * variables, zero is written to $params.
     *
     * For the property {@see GL46::GL_ATOMIC_COUNTER_BUFFER_INDEX}, a single integer identifying the index of the
     * active atomic counter buffer containing an active variable is written to $params. If the variable is not an
     * atomic counter uniform, the value -1 is written to $params.
     *
     * For the property {@see GL46::GL_BUFFER_BINDING}, to index of the buffer binding point associated with the
     * active uniform block, shader storage block, atomic counter buffer or transform feedback buffer is written to
     * $params.
     *
     * For the property {@see GL46::GL_BUFFER_DATA_SIZE}, then the implementation-dependent minimum total buffer
     * object size, in basic machine units, required to hold all active variables associated with an active uniform
     * block, shader storage block, or atomic counter buffer is written to $params. If the final member of an active
     * shader storage block is array with no declared size, the minimum buffer size is computed assuming the array
     * was declared as an array with one element.
     *
     * For the property {@see GL46::GL_NUM_ACTIVE_VARIABLES}, the number of active variables associated with an
     * active uniform block, shader storage block, atomic counter buffer or transform feedback buffer is written to
     * $params.
     *
     * For the property {@see GL46::GL_ACTIVE_VARIABLES}, an array of active variable indices associated with an
     * active uniform block, shader storage block, atomic counter buffer or transform feedback buffer is written to
     * $params. The number of values written to $params for an active resource is given by the value of the property
     * {@see GL46::GL_NUM_ACTIVE_VARIABLES} for the resource.
     *
     * For the properties {@see GL46::GL_REFERENCED_BY_VERTEX_SHADER},
     * {@see GL46::GL_REFERENCED_BY_TESS_CONTROL_SHADER}, {@see GL46::GL_REFERENCED_BY_TESS_EVALUATION_SHADER},
     * {@see GL46::GL_REFERENCED_BY_GEOMETRY_SHADER}, {@see GL46::GL_REFERENCED_BY_FRAGMENT_SHADER}, and
     * {@see GL46::GL_REFERENCED_BY_COMPUTE_SHADER}, a single integer is written to $params, identifying whether the
     * active resource is referenced by the vertex, tessellation control, tessellation evaluation, geometry, or
     * fragment shaders, respectively, in the program object. The value one is written to $params if an active
     * variable is referenced by the corresponding shader, or if an active uniform block, shader storage block, or
     * atomic counter buffer contains at least one variable referenced by the corresponding shader. Otherwise, the
     * value zero is written to $params.
     *
     * For the property {@see GL46::GL_TOP_LEVEL_ARRAY_SIZE}, a single integer identifying the number of active array
     * elements of the top-level shader storage block member containing to the active variable is written to $params.
     * If the top-level block member is not declared as an array, the value one is written to $params. If the
     * top-level block member is an array with no declared size, the value zero is written to $params.
     *
     * For the property {@see GL46::GL_TOP_LEVEL_ARRAY_STRIDE}, a single integer identifying the stride between array
     * elements of the top-level shader storage block member containing the active variable is written to $params.
     * For top-level block members declared as arrays, the value written is the difference, in basic machine units,
     * between the offsets of the active variable for consecutive elements in the top-level array. For top-level
     * block members not declared as an array, zero is written to $params.
     *
     * For the property {@see GL46::GL_LOCATION}, a single integer identifying the assigned location for an active
     * uniform, input, output, or subroutine uniform variable is written to $params. For input, output, or uniform
     * variables with locations specified by a layout qualifier, the specified location is used. For vertex shader
     * input or fragment shader output variables without a layout qualifier, the location assigned when a program is
     * linked is written to $params. For all other input and output variables, the value -1 is written to $params.
     * For uniforms in uniform blocks, the value -1 is written to $params.
     *
     * For the property {@see GL46::GL_LOCATION_INDEX}, a single integer identifying the fragment color index of an
     * active fragment shader output variable is written to $params. If the active variable is an output for a
     * non-fragment shader, the value -1 will be written to $params.
     *
     * For the property {@see GL46::GL_IS_PER_PATCH}, a single integer identifying whether the input or output is a
     * per-patch attribute. If the active variable is a per-patch attribute (declared with the `patch` qualifier),
     * the value one is written to $params; otherwise, the value zero is written to $params.
     *
     * For the property {@see GL46::GL_LOCATION_COMPONENT}, a single integer indicating the first component of the
     * location assigned to an active input or output variable is written to $params. For input and output variables
     * with a component specified by a `layout` qualifier, the specified component is written. For all other input
     * and output variables, the value zero is written.
     *
     * For the property {@see GL46::GL_TRANSFORM_FEEDBACK_BUFFER_INDEX}, a single integer identifying the index of
     * the active transform feedback buffer associated with an active variable is written to $params. For variables
     * corresponding to the special names `"gl_NextBuffer"`, `"gl_SkipComponents1"`, `"gl_SkipComponents2"`,
     * `"gl_SkipComponents3"`, and `"gl_SkipComponents4"`, -1 is written to $params.
     *
     * For the property {@see GL46::GL_TRANSFORM_FEEDBACK_BUFFER_STRIDE}, a single integer identifying the stride, in
     * basic machine units, between consecutive vertices written to the transform feedback buffer is written to
     * $params.
     *
     * @see http://docs.gl/gl4/glGetProgramResource
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $programInterface
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param int|\FFI\CData|\FFI\CInt $propCount
     * @param \FFI\CData|\FFI\CIntPtr|null $props
     * @param int|\FFI\CData|\FFI\CInt $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public function glGetProgramResourceiv($program, $programInterface, $index, $propCount, ?\FFI\CData $props, $bufSize, ?\FFI\CData $length, ?\FFI\CData $params): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $programInterface = $programInterface instanceof \FFI\CData ? $programInterface->cdata : $programInterface;
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $propCount = $propCount instanceof \FFI\CData ? $propCount->cdata : $propCount;
        $bufSize = $bufSize instanceof \FFI\CData ? $bufSize->cdata : $bufSize;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($programInterface), 'Argument $programInterface must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($propCount), 'Argument $propCount must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::int16($bufSize), 'Argument $bufSize must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetProgramResourceiv', 'void (*)(GLuint program, GLenum programInterface, GLuint index, GLsizei propCount, const GLenum *props, GLsizei bufSize, GLsizei *length, GLint *params)');
        $proc($program, $programInterface, $index, $propCount, $props, $bufSize, $length, $params);
    }

    /**
     * {@see GL46::glGetProgramResourceLocation} returns the location assigned to the variable named $name in
     * interface $programInterface of program object $program. $program must be the name of a program that has been
     * linked successfully. $programInterface must be one of {@see GL46::GL_UNIFORM}, {@see GL46::GL_PROGRAM_INPUT},
     * {@see GL46::GL_PROGRAM_OUTPUT}, {@see GL46::GL_VERTEX_SUBROUTINE_UNIFORM},
     * {@see GL46::GL_TESS_CONTROL_SUBROUTINE_UNIFORM}, {@see GL46::GL_TESS_EVALUATION_SUBROUTINE_UNIFORM},
     * {@see GL46::GL_GEOMETRY_SUBROUTINE_UNIFORM}, {@see GL46::GL_FRAGMENT_SUBROUTINE_UNIFORM},
     * {@see GL46::GL_COMPUTE_SUBROUTINE_UNIFORM}, or {@see GL46::GL_TRANSFORM_FEEDBACK_BUFFER}.
     *
     * The value -1 will be returned if an error occurs, if $name does not identify an active variable on
     * $programInterface, or if $name identifies an active variable that does not have a valid location assigned, as
     * described above. The locations returned by these commands are the same locations returned when querying the
     * {@see GL46::GL_LOCATION} and {@see GL46::GL_LOCATION_INDEX} resource properties.
     *
     * A string provided to {@see GL46::glGetProgramResourceLocation} is considered to match an active variable if:
     *
     *  -  the string exactly matches the name of the active variable
     *  -  if the string identifies the base name of an active array, where the string would exactly match the name of
     *    the variable if the suffix "[0]" were appended to the string
     *  -  if the string identifies an active element of the array, where the string ends with the concatenation of the
     *    "[" character, an integer with no "+" sign, extra leading zeroes, or whitespace identifying an array element,
     *    and the "]" character, the integer is less than the number of active elements of the array variable, and where
     *    the string would exactly match the enumerated name of the array if the decimal integer were replaced with
     *    zero.
     *
     * Any other string is considered not to identify an active variable. If the string specifies an element of an
     * array variable, {@see GL46::glGetProgramResourceLocation} returns the location assigned to that element. If it
     * specifies the base name of an array, it identifies the resources associated with the first element of the
     * array.
     *
     * @see http://docs.gl/gl4/glGetProgramResourceLocation
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $programInterface
     * @param \FFI\CData|\FFI\CIntPtr|null $name
     * @return int|\FFI\CData|\FFI\CInt
     */
    public function glGetProgramResourceLocation($program, $programInterface, ?\FFI\CData $name): int
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $programInterface = $programInterface instanceof \FFI\CData ? $programInterface->cdata : $programInterface;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($programInterface), 'Argument $programInterface must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetProgramResourceLocation', 'GLint (*)(GLuint program, GLenum programInterface, const GLchar *name)');
        return $proc($program, $programInterface, $name);
    }

    /**
     * {@see GL46::glGetProgramResourceLocationIndex} returns the fragment color index assigned to the variable named
     * $name in interface $programInterface of program object $program. $program must be the name of a program that
     * has been linked successfully. $programInterface must be {@see GL46::GL_PROGRAM_OUTPUT}.
     *
     * The value -1 will be returned if an error occurs, if $name does not identify an active variable on
     * $programInterface, or if $name identifies an active variable that does not have a valid location assigned, as
     * described above. The locations returned by these commands are the same locations returned when querying the
     * {@see GL46::GL_LOCATION} and {@see GL46::GL_LOCATION_INDEX} resource properties.
     *
     * A string provided to {@see GL46::glGetProgramResourceLocationIndex} is considered to match an active variable
     * if:
     *
     *  -  the string exactly matches the name of the active variable
     *  -  if the string identifies the base name of an active array, where the string would exactly match the name of
     *    the variable if the suffix "[0]" were appended to the string
     *  -  if the string identifies an active element of the array, where the string ends with the concatenation of the
     *    "[" character, an integer with no "+" sign, extra leading zeroes, or whitespace identifying an array element,
     *    and the "]" character, the integer is less than the number of active elements of the array variable, and where
     *    the string would exactly match the enumerated name of the array if the decimal integer were replaced with
     *    zero.
     *
     * Any other string is considered not to identify an active variable. If the string specifies an element of an
     * array variable, {@see GL46::glGetProgramResourceLocation} returns the location assigned to that element. If it
     * specifies the base name of an array, it identifies the resources associated with the first element of the
     * array.
     *
     * @see http://docs.gl/gl4/glGetProgramResourceLocationIndex
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $programInterface
     * @param \FFI\CData|\FFI\CIntPtr|null $name
     * @return int|\FFI\CData|\FFI\CInt
     */
    public function glGetProgramResourceLocationIndex($program, $programInterface, ?\FFI\CData $name): int
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $programInterface = $programInterface instanceof \FFI\CData ? $programInterface->cdata : $programInterface;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($programInterface), 'Argument $programInterface must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetProgramResourceLocationIndex', 'GLint (*)(GLuint program, GLenum programInterface, const GLchar *name)');
        return $proc($program, $programInterface, $name);
    }

    /**
     * {@see GL46::glShaderStorageBlockBinding}, changes the active shader storage block with an assigned index of
     * $storageBlockIndex in program object $program. $storageBlockIndex must be an active shader storage block index
     * in $program. $storageBlockBinding must be less than the value of
     * {@see GL46::GL_MAX_SHADER_STORAGE_BUFFER_BINDINGS}. If successful, {@see GL46::glShaderStorageBlockBinding}
     * specifies that $program will use the data store of the buffer object bound to the binding point
     * $storageBlockBinding to read and write the values of the buffer variables in the shader storage block
     * identified by $storageBlockIndex.
     *
     * @see http://docs.gl/gl4/glShaderStorageBlockBinding
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $storageBlockIndex
     * @param int|\FFI\CData|\FFI\CInt $storageBlockBinding
     * @return void
     */
    public function glShaderStorageBlockBinding($program, $storageBlockIndex, $storageBlockBinding): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $storageBlockIndex = $storageBlockIndex instanceof \FFI\CData ? $storageBlockIndex->cdata : $storageBlockIndex;
        $storageBlockBinding = $storageBlockBinding instanceof \FFI\CData ? $storageBlockBinding->cdata : $storageBlockBinding;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($storageBlockIndex), 'Argument $storageBlockIndex must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($storageBlockBinding), 'Argument $storageBlockBinding must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glShaderStorageBlockBinding', 'void (*)(GLuint program, GLuint storageBlockIndex, GLuint storageBlockBinding)');
        $proc($program, $storageBlockIndex, $storageBlockBinding);
    }

    /**
     * {@see GL46::glTexBufferRange} and {@see GL46::glTextureBufferRange} attach a range of the data store of a
     * specified buffer object to a specified texture object, and specify the storage format for the texture image
     * found in the buffer object. The texture object must be a buffer texture.
     *
     * If $buffer is zero, any buffer object attached to the buffer texture is detached and no new buffer object is
     * attached. If $buffer is non-zero, it must be the name of an existing buffer object.
     *
     * The start and size of the range are specified by $offset and $size respectively, both measured in basic
     * machine units. $offset must be greater than or equal to zero, $size must be greater than zero, and the sum of
     * $offset and $size must not exceed the value of {@see GL46::GL_BUFFER_SIZE} for $buffer. Furthermore, $offset
     * must be an integer multiple of the value of {@see GL46::GL_TEXTURE_BUFFER_OFFSET_ALIGNMENT}.
     *
     * $internalformat specifies the storage format, and must be one of the following sized internal formats:
     *
     * | {@see GL46::GL_R8}       | ubyte  | 1 | YES | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R16}      | ushort | 1 | YES | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R16F}     | half   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R32F}     | float  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R8I}      | byte   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R16I}     | short  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R32I}     | int    | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R8UI}     | ubyte  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R16UI}    | ushort | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL46::GL_R32UI}    | uint   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL46::GL_RG8}      | ubyte  | 2 | YES | R | G | 0 | 1 |
     * | {@see GL46::GL_RG16}     | ushort | 2 | YES | R | G | 0 | 1 |
     * | {@see GL46::GL_RG16F}    | half   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL46::GL_RG32F}    | float  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL46::GL_RG8I}     | byte   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL46::GL_RG16I}    | short  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL46::GL_RG32I}    | int    | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL46::GL_RG8UI}    | ubyte  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL46::GL_RG16UI}   | ushort | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL46::GL_RG32UI}   | uint   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL46::GL_RGB32F}   | float  | 3 | NO  | R | G | B | 1 |
     * | {@see GL46::GL_RGB32I}   | int    | 3 | NO  | R | G | B | 1 |
     * | {@see GL46::GL_RGB32UI}  | uint   | 3 | NO  | R | G | B | 1 |
     * | {@see GL46::GL_RGBA8}    | uint   | 4 | YES | R | G | B | A |
     * | {@see GL46::GL_RGBA16}   | short  | 4 | YES | R | G | B | A |
     * | {@see GL46::GL_RGBA16F}  | half   | 4 | NO  | R | G | B | A |
     * | {@see GL46::GL_RGBA32F}  | float  | 4 | NO  | R | G | B | A |
     * | {@see GL46::GL_RGBA8I}   | byte   | 4 | NO  | R | G | B | A |
     * | {@see GL46::GL_RGBA16I}  | short  | 4 | NO  | R | G | B | A |
     * | {@see GL46::GL_RGBA32I}  | int    | 4 | NO  | R | G | B | A |
     * | {@see GL46::GL_RGBA8UI}  | ubyte  | 4 | NO  | R | G | B | A |
     * | {@see GL46::GL_RGBA16UI} | ushort | 4 | NO  | R | G | B | A |
     * | {@see GL46::GL_RGBA32UI} | uint   | 4 | NO  | R | G | B | A |
     *
     * When a range of a buffer object is attached to a buffer texture, the specified range of the buffer object's
     * data store is taken as the texture's texel array. The number of texels in the buffer texture's texel array is
     * given by $$ \\left\\lfloor { size \\over { components \\times sizeof(base\\_type) } } \\right\\rfloor $$ where
     * $components$ and $base\\_type$ are the element count and base data type for elements, as specified in the
     * table above. The number of texels in the texel array is then clamped to the value of the
     * implementation-dependent limit {@see GL46::GL_MAX_TEXTURE_BUFFER_SIZE}. When a buffer texture is accessed in a
     * shader, the results of a texel fetch are undefined if the specified texel coordinate is negative, or greater
     * than or equal to the clamped number of texels in the texel array.
     *
     * @see http://docs.gl/gl4/glTexBufferRange
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $internalformat
     * @param int|\FFI\CData|\FFI\CInt $buffer
     * @param mixed|float|string|int|\FFI\CData|\FFI\CInt $offset
     * @param mixed|float|string|int|\FFI\CData|\FFI\CInt $size
     * @return void
     */
    public function glTexBufferRange($target, $internalformat, $buffer, $offset, $size): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $internalformat = $internalformat instanceof \FFI\CData ? $internalformat->cdata : $internalformat;
        $buffer = $buffer instanceof \FFI\CData ? $buffer->cdata : $buffer;

        assert(Assert::uint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($internalformat), 'Argument $internalformat must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($buffer), 'Argument $buffer must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int64($offset), 'Argument $offset must be a C-like GLintptr, but incompatible or overflow value given');
        assert(Assert::int64($size), 'Argument $size must be a C-like GLsizeiptr, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glTexBufferRange', 'void (*)(GLenum target, GLenum internalformat, GLuint buffer, GLintptr offset, GLsizeiptr size)');
        $proc($target, $internalformat, $buffer, $offset, $size);
    }

    /**
     * {@see GL46::glTexStorage2DMultisample} and {@see GL46::glTextureStorage2DMultisample} specify the storage
     * requirements for a two-dimensional multisample texture. Once a texture is specified with this command, its
     * format and dimensions become immutable unless it is a proxy texture. The contents of the image may still be
     * modified, however, its storage requirements may not change. Such a texture is referred to as an
     * immutable-format texture.
     *
     * $samples specifies the number of samples to be used for the texture and must be greater than zero and less
     * than or equal to the value of {@see GL46::GL_MAX_SAMPLES}. $internalformat must be a color-renderable,
     * depth-renderable, or stencil-renderable format. $width and $height specify the width and height, respectively,
     * of the texture. If $fixedsamplelocations is {@see GL46::GL_TRUE}, the image will use identical sample
     * locations and the same number of samples for all texels in the image, and the sample locations will not depend
     * on the internal format or size of the image.
     *
     * @see http://docs.gl/gl4/glTexStorage2DMultisample
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $samples
     * @param int|\FFI\CData|\FFI\CInt $internalformat
     * @param int|\FFI\CData|\FFI\CInt $width
     * @param int|\FFI\CData|\FFI\CInt $height
     * @param int|\FFI\CData|\FFI\CInt $fixedsamplelocations
     * @return void
     */
    public function glTexStorage2DMultisample($target, $samples, $internalformat, $width, $height, $fixedsamplelocations): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $samples = $samples instanceof \FFI\CData ? $samples->cdata : $samples;
        $internalformat = $internalformat instanceof \FFI\CData ? $internalformat->cdata : $internalformat;
        $width = $width instanceof \FFI\CData ? $width->cdata : $width;
        $height = $height instanceof \FFI\CData ? $height->cdata : $height;
        $fixedsamplelocations = $fixedsamplelocations instanceof \FFI\CData ? $fixedsamplelocations->cdata : $fixedsamplelocations;

        assert(Assert::uint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($samples), 'Argument $samples must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint16($internalformat), 'Argument $internalformat must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($width), 'Argument $width must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::int16($height), 'Argument $height must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint8($fixedsamplelocations), 'Argument $fixedsamplelocations must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glTexStorage2DMultisample', 'void (*)(GLenum target, GLsizei samples, GLenum internalformat, GLsizei width, GLsizei height, GLboolean fixedsamplelocations)');
        $proc($target, $samples, $internalformat, $width, $height, $fixedsamplelocations);
    }

    /**
     * {@see GL46::glTexStorage3DMultisample} and {@see GL46::glTextureStorage3DMultisample} specify the storage
     * requirements for a two-dimensional multisample array texture. Once a texture is specified with this command,
     * its format and dimensions become immutable unless it is a proxy texture. The contents of the image may still
     * be modified, however, its storage requirements may not change. Such a texture is referred to as an
     * immutable-format texture.
     *
     * $samples specifies the number of samples to be used for the texture and must be greater than zero and less
     * than or equal to the value of {@see GL46::GL_MAX_SAMPLES}. $internalformat must be a color-renderable,
     * depth-renderable, or stencil-renderable format. $width and $height specify the width and height, respectively,
     * of the texture and $depth specifies the depth (or the number of layers) of the texture. If
     * $fixedsamplelocations is {@see GL46::GL_TRUE}, the image will use identical sample locations and the same
     * number of samples for all texels in the image, and the sample locations will not depend on the internal format
     * or size of the image.
     *
     * @see http://docs.gl/gl4/glTexStorage3DMultisample
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $samples
     * @param int|\FFI\CData|\FFI\CInt $internalformat
     * @param int|\FFI\CData|\FFI\CInt $width
     * @param int|\FFI\CData|\FFI\CInt $height
     * @param int|\FFI\CData|\FFI\CInt $depth
     * @param int|\FFI\CData|\FFI\CInt $fixedsamplelocations
     * @return void
     */
    public function glTexStorage3DMultisample($target, $samples, $internalformat, $width, $height, $depth, $fixedsamplelocations): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $samples = $samples instanceof \FFI\CData ? $samples->cdata : $samples;
        $internalformat = $internalformat instanceof \FFI\CData ? $internalformat->cdata : $internalformat;
        $width = $width instanceof \FFI\CData ? $width->cdata : $width;
        $height = $height instanceof \FFI\CData ? $height->cdata : $height;
        $depth = $depth instanceof \FFI\CData ? $depth->cdata : $depth;
        $fixedsamplelocations = $fixedsamplelocations instanceof \FFI\CData ? $fixedsamplelocations->cdata : $fixedsamplelocations;

        assert(Assert::uint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($samples), 'Argument $samples must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint16($internalformat), 'Argument $internalformat must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($width), 'Argument $width must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::int16($height), 'Argument $height must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::int16($depth), 'Argument $depth must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint8($fixedsamplelocations), 'Argument $fixedsamplelocations must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glTexStorage3DMultisample', 'void (*)(GLenum target, GLsizei samples, GLenum internalformat, GLsizei width, GLsizei height, GLsizei depth, GLboolean fixedsamplelocations)');
        $proc($target, $samples, $internalformat, $width, $height, $depth, $fixedsamplelocations);
    }

    /**
     * {@see GL46::glTextureView} initializes a texture object as an alias, or view of another texture object,
     * sharing some or all of the parent texture's data store with the initialized texture. $texture specifies a name
     * previously reserved by a successful call to {@see GL46::glGenTextures} but that has not yet been bound or
     * given a target. $target specifies the target for the newly initialized texture and must be compatible with the
     * target of the parent texture, given in $origtexture as specified in the following table:
     *
     * | {@see GL46::GL_TEXTURE_1D}                   | {@see GL46::GL_TEXTURE_1D}, {@see GL46::GL_TEXTURE_1D_ARRAY}                                                                           |
     * | {@see GL46::GL_TEXTURE_2D}                   | {@see GL46::GL_TEXTURE_2D}, {@see GL46::GL_TEXTURE_2D_ARRAY}                                                                           |
     * | {@see GL46::GL_TEXTURE_3D}                   | {@see GL46::GL_TEXTURE_3D}                                                                                                             |
     * | {@see GL46::GL_TEXTURE_CUBE_MAP}             | {@see GL46::GL_TEXTURE_CUBE_MAP}, {@see GL46::GL_TEXTURE_2D}, {@see GL46::GL_TEXTURE_2D_ARRAY},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_ARRAY} |
     * | {@see GL46::GL_TEXTURE_RECTANGLE}            | {@see GL46::GL_TEXTURE_RECTANGLE}                                                                                                      |
     * | {@see GL46::GL_TEXTURE_BUFFER}               | none                                                                                                                                   |
     * | {@see GL46::GL_TEXTURE_1D_ARRAY}             | {@see GL46::GL_TEXTURE_1D}, {@see GL46::GL_TEXTURE_1D_ARRAY}                                                                           |
     * | {@see GL46::GL_TEXTURE_2D_ARRAY}             | {@see GL46::GL_TEXTURE_2D}, {@see GL46::GL_TEXTURE_2D_ARRAY}                                                                           |
     * | {@see GL46::GL_TEXTURE_CUBE_MAP_ARRAY}       | {@see GL46::GL_TEXTURE_CUBE_MAP}, {@see GL46::GL_TEXTURE_2D}, {@see GL46::GL_TEXTURE_2D_ARRAY},
     * {@see GL46::GL_TEXTURE_CUBE_MAP_ARRAY} |
     * | {@see GL46::GL_TEXTURE_2D_MULTISAMPLE}       | {@see GL46::GL_TEXTURE_2D_MULTISAMPLE}, {@see GL46::GL_TEXTURE_MULTISAMPLE_ARRAY}                                                      |
     * | {@see GL46::GL_TEXTURE_2D_MULTISAMPLE_ARRAY} | {@see GL46::GL_TEXTURE_2D_MULTISAMPLE}, {@see GL46::GL_TEXTURE_MULTISAMPLE_ARRAY}                                                      |
     * The value of {@see GL46::GL_TEXTURE_IMMUTABLE_FORMAT} for $origtexture must be {@see GL46::GL_TRUE}. After
     * initialization, $texture inherits the data store of the parent texture, $origtexture and is usable as a normal
     * texture object with target $target. Data in the shared store is reinterpreted with the new internal format
     * specified by $internalformat. $internalformat must be compatible with the internal format of the parent
     * texture as specified in the following table:
     *
     * | 128-bit                    | {@see GL46::GL_RGBA32F}, {@see GL46::GL_RGBA32UI}, {@see GL46::GL_RGBA32I}                                                                                                                                                                                                                                                                                                                                                                  |
     * | 96-bit                     | {@see GL46::GL_RGB32F}, {@see GL46::GL_RGB32UI}, {@see GL46::GL_RGB32I}                                                                                                                                                                                                                                                                                                                                                                     |
     * | 64-bit                     | {@see GL46::GL_RGBA16F}, {@see GL46::GL_RG32F}, {@see GL46::GL_RGBA16UI}, {@see GL46::GL_RG32UI},
     * {@see GL46::GL_RGBA16I}, {@see GL46::GL_RG32I}, {@see GL46::GL_RGBA16}, {@see GL46::GL_RGBA16_SNORM}                                                                                                                                                                                                                                      |
     * | 48-bit                     | {@see GL46::GL_RGB16}, {@see GL46::GL_RGB16_SNORM}, {@see GL46::GL_RGB16F}, {@see GL46::GL_RGB16UI},
     * {@see GL46::GL_RGB16I}                                                                                                                                                                                                                                                                                                                 |
     * | 32-bit                     | {@see GL46::GL_RG16F}, {@see GL46::GL_R11F_G11F_B10F}, {@see GL46::GL_R32F}, {@see GL46::GL_RGB10_A2UI},
     * {@see GL46::GL_RGBA8UI}, {@see GL46::GL_RG16UI}, {@see GL46::GL_R32UI}, {@see GL46::GL_RGBA8I},
     * {@see GL46::GL_RG16I}, {@see GL46::GL_R32I}, {@see GL46::GL_RGB10_A2}, {@see GL46::GL_RGBA8},
     * {@see GL46::GL_RG16}, {@see GL46::GL_RGBA8_SNORM}, {@see GL46::GL_RG16_SNORM}, {@see GL46::GL_SRGB8_ALPHA8},
     * {@see GL46::GL_RGB9_E5} |
     * | 24-bit                     | {@see GL46::GL_RGB8}, {@see GL46::GL_RGB8_SNORM}, {@see GL46::GL_SRGB8}, {@see GL46::GL_RGB8UI},
     * {@see GL46::GL_RGB8I}                                                                                                                                                                                                                                                                                                                      |
     * | 16-bit                     | {@see GL46::GL_R16F}, {@see GL46::GL_RG8UI}, {@see GL46::GL_R16UI}, {@see GL46::GL_RG8I},
     * {@see GL46::GL_R16I}, {@see GL46::GL_RG8}, {@see GL46::GL_R16}, {@see GL46::GL_RG8_SNORM},
     * {@see GL46::GL_R16_SNORM}                                                                                                                                                                                                                              |
     * | 8-bit                      | {@see GL46::GL_R8UI}, {@see GL46::GL_R8I}, {@see GL46::GL_R8}, {@see GL46::GL_R8_SNORM}                                                                                                                                                                                                                                                                                                                                                     |
     * | {@see GL46::GL_RGTC1_RED}  | {@see GL46::GL_COMPRESSED_RED_RGTC1}, {@see GL46::GL_COMPRESSED_SIGNED_RED_RGTC1}                                                                                                                                                                                                                                                                                                                                                           |
     * | {@see GL46::GL_RGTC2_RG}   | {@see GL46::GL_COMPRESSED_RG_RGTC2}, {@see GL46::GL_COMPRESSED_SIGNED_RG_RGTC2}                                                                                                                                                                                                                                                                                                                                                             |
     * | {@see GL46::GL_BPTC_UNORM} | {@see GL46::GL_COMPRESSED_RGBA_BPTC_UNORM}, {@see GL46::GL_COMPRESSED_SRGB_ALPHA_BPTC_UNORM}                                                                                                                                                                                                                                                                                                                                                |
     * | {@see GL46::GL_BPTC_FLOAT} | {@see GL46::GL_COMPRESSED_RGB_BPTC_SIGNED_FLOAT}, {@see GL46::GL_COMPRESSED_RGB_BPTC_UNSIGNED_FLOAT}                                                                                                                                                                                                                                                                                                                                        |
     * If the original texture is an array or has multiple mipmap levels, the parameters $minlayer, $numlayers,
     * $minlevel, and $numlevels control which of those slices and levels are considered part of the texture. The
     * $minlevel and $minlayer parameters are relative to the view of the original texture. If $numlayers or
     * $numlevels extend beyond the original texture, they are clamped to the max extent of the original texture.
     *
     * If the new texture's target is {@see GL46::GL_TEXTURE_CUBE_MAP}, the clamped $numlayers must be equal to 6. If
     * the new texture's target is {@see GL46::GL_TEXTURE_CUBE_MAP_ARRAY}, then $numlayers counts layer-faces rather
     * than layers, and the clamped $numlayers must be a multiple of 6. If the new texture's target is
     * {@see GL46::GL_TEXTURE_CUBE_MAP} or {@see GL46::GL_TEXTURE_CUBE_MAP_ARRAY}, the width and height of the
     * original texture's levels must be equal.
     *
     * When the original texture's target is {@see GL46::GL_TEXTURE_CUBE_MAP}, the layer parameters are interpreted
     * in the same order as if it were a {@see GL46::GL_TEXTURE_CUBE_MAP_ARRAY} with 6 layer-faces.
     *
     * If $target is {@see GL46::GL_TEXTURE_1D}, {@see GL46::GL_TEXTURE_2D}, {@see GL46::GL_TEXTURE_3D},
     * {@see GL46::GL_TEXTURE_RECTANGLE}, or {@see GL46::GL_TEXTURE_2D_MULTISAMPLE}, $numlayers must equal 1.
     *
     * The dimensions of the original texture must be less than or equal to the maximum supported dimensions of the
     * new target. For example, if the original texture has a {@see GL46::GL_TEXTURE_2D_ARRAY} target and its width
     * is greater than {@see GL46::GL_MAX_CUBE_MAP_TEXTURE_SIZE}, an error will be generated if
     * {@see GL46::glTextureView} is called to create a {@see GL46::GL_TEXTURE_CUBE_MAP} view.
     *
     * Texture commands that take a $level or $layer parameter, such as {@see GL46::glTexSubImage2D}, interpret that
     * parameter to be relative to the view of the texture. i.e. the mipmap level of the data store that would be
     * updated via {@see GL46::glTexSubImage2D} would be the sum of $level and the value of
     * {@see GL46::GL_TEXTURE_VIEW_MIN_LEVEL}.
     *
     * @see http://docs.gl/gl4/glTextureView
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $texture
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $origtexture
     * @param int|\FFI\CData|\FFI\CInt $internalformat
     * @param int|\FFI\CData|\FFI\CInt $minlevel
     * @param int|\FFI\CData|\FFI\CInt $numlevels
     * @param int|\FFI\CData|\FFI\CInt $minlayer
     * @param int|\FFI\CData|\FFI\CInt $numlayers
     * @return void
     */
    public function glTextureView($texture, $target, $origtexture, $internalformat, $minlevel, $numlevels, $minlayer, $numlayers): void
    {
        $texture = $texture instanceof \FFI\CData ? $texture->cdata : $texture;
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $origtexture = $origtexture instanceof \FFI\CData ? $origtexture->cdata : $origtexture;
        $internalformat = $internalformat instanceof \FFI\CData ? $internalformat->cdata : $internalformat;
        $minlevel = $minlevel instanceof \FFI\CData ? $minlevel->cdata : $minlevel;
        $numlevels = $numlevels instanceof \FFI\CData ? $numlevels->cdata : $numlevels;
        $minlayer = $minlayer instanceof \FFI\CData ? $minlayer->cdata : $minlayer;
        $numlayers = $numlayers instanceof \FFI\CData ? $numlayers->cdata : $numlayers;

        assert(Assert::uint16($texture), 'Argument $texture must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($origtexture), 'Argument $origtexture must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($internalformat), 'Argument $internalformat must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($minlevel), 'Argument $minlevel must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($numlevels), 'Argument $numlevels must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($minlayer), 'Argument $minlayer must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($numlayers), 'Argument $numlayers must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glTextureView', 'void (*)(GLuint texture, GLenum target, GLuint origtexture, GLenum internalformat, GLuint minlevel, GLuint numlevels, GLuint minlayer, GLuint numlayers)');
        $proc($texture, $target, $origtexture, $internalformat, $minlevel, $numlevels, $minlayer, $numlayers);
    }

    /**
     * {@see GL46::glBindVertexBuffer} and {@see GL46::glVertexArrayVertexBuffer} bind the buffer named $buffer to
     * the vertex buffer binding point whose index is given by $bindingindex. {@see GL46::glBindVertexBuffer}
     * modifies the binding of the currently bound vertex array object, whereas
     * {@see GL46::glVertexArrayVertexBuffer} allows the caller to specify ID of the vertex array object with an
     * argument named $vaobj, for which the binding should be modified. $offset and $stride specify the offset of the
     * first element within the buffer and the distance between elements within the buffer, respectively, and are
     * both measured in basic machine units. $bindingindex must be less than the value of
     * {@see GL46::GL_MAX_VERTEX_ATTRIB_BINDINGS}. $offset and $stride must be greater than or equal to zero. If
     * $buffer is zero, then any buffer currently bound to the specified binding point is unbound.
     *
     * If $buffer is not the name of an existing buffer object, the GL first creates a new state vector, initialized
     * with a zero-sized memory buffer and comprising all the state and with the same initial values as in case of
     * {@see GL46::glBindBuffer}. $buffer is then attached to the specified $bindingindex of the vertex array object.
     *
     * @see http://docs.gl/gl4/glBindVertexBuffer
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $bindingindex
     * @param int|\FFI\CData|\FFI\CInt $buffer
     * @param mixed|float|string|int|\FFI\CData|\FFI\CInt $offset
     * @param int|\FFI\CData|\FFI\CInt $stride
     * @return void
     */
    public function glBindVertexBuffer($bindingindex, $buffer, $offset, $stride): void
    {
        $bindingindex = $bindingindex instanceof \FFI\CData ? $bindingindex->cdata : $bindingindex;
        $buffer = $buffer instanceof \FFI\CData ? $buffer->cdata : $buffer;
        $stride = $stride instanceof \FFI\CData ? $stride->cdata : $stride;

        assert(Assert::uint16($bindingindex), 'Argument $bindingindex must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($buffer), 'Argument $buffer must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int64($offset), 'Argument $offset must be a C-like GLintptr, but incompatible or overflow value given');
        assert(Assert::int16($stride), 'Argument $stride must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glBindVertexBuffer', 'void (*)(GLuint bindingindex, GLuint buffer, GLintptr offset, GLsizei stride)');
        $proc($bindingindex, $buffer, $offset, $stride);
    }

    /**
     * {@see GL46::glVertexAttribFormat}, {@see GL46::glVertexAttribIFormat} and {@see GL46::glVertexAttribLFormat},
     * as well as {@see GL46::glVertexArrayAttribFormat}, {@see GL46::glVertexArrayAttribIFormat} and
     * {@see GL46::glVertexArrayAttribLFormat} specify the organization of data in vertex arrays. The first three
     * calls operate on the bound vertex array object, whereas the last three ones modify the state of a vertex array
     * object with ID $vaobj. $attribindex specifies the index of the generic vertex attribute array whose data
     * layout is being described, and must be less than the value of {@see GL46::GL_MAX_VERTEX_ATTRIBS}.
     *
     * $size determines the number of components per vertex are allocated to the specified attribute and must be 1,
     * 2, 3 or 4. $type indicates the type of the data. If $type is one of {@see GL46::GL_BYTE},
     * {@see GL46::GL_SHORT}, {@see GL46::GL_INT}, {@see GL46::GL_FIXED}, {@see GL46::GL_FLOAT},
     * {@see GL46::GL_HALF_FLOAT}, and {@see GL46::GL_DOUBLE} indicate types `GLbyte`, `GLshort`, `GLint`, `GLfixed`,
     * `GLfloat`, `GLhalf`, and `GLdouble`, respectively; the values {@see GL46::GL_UNSIGNED_BYTE},
     * {@see GL46::GL_UNSIGNED_SHORT}, and {@see GL46::GL_UNSIGNED_INT} indicate types `GLubyte`, `GLushort`, and
     * `GLuint`, respectively; the values {@see GL46::GL_INT_2_10_10_10_REV} and
     * {@see GL46::GL_UNSIGNED_INT_2_10_10_10_REV} indicating respectively four signed or unsigned elements packed
     * into a single `GLuint`; and the value {@see GL46::GL_UNSIGNED_INT_10F_11F_11F_REV} indicating three floating
     * point values packed into a single `GLuint`.
     *
     * {@see GL46::glVertexAttribLFormat} and {@see GL46::glVertexArrayAttribLFormat} is used to specify layout for
     * data associated with a generic attribute variable declared as 64-bit double precision components. For
     * {@see GL46::glVertexAttribLFormat} and {@see GL46::glVertexArrayAttribLFormat}, $type must be
     * {@see GL46::GL_DOUBLE}. In contrast to {@see GL46::glVertexAttribFormat} or
     * {@see GL46::glVertexArrayAttribFormat}, which will cause data declared as {@see GL46::GL_DOUBLE} to be
     * converted to 32-bit representation, {@see GL46::glVertexAttribLFormat} and
     * {@see GL46::glVertexArrayAttribLFormat} cause such data to be left in its natural, 64-bit representation.
     *
     * For {@see GL46::glVertexAttribFormat} and {@see GL46::glVertexArrayAttribFormat}, if $normalized is
     * {@see GL46::GL_TRUE}, then integer data is normalized to the range [-1, 1] or [0, 1] if it is signed or
     * unsigned, respectively. If $normalized is {@see GL46::GL_FALSE} then integer data is directly converted to
     * floating point.
     *
     * $relativeoffset is the offset, measured in basic machine units of the first element relative to the start of
     * the vertex buffer binding this attribute fetches from.
     *
     * {@see GL46::glVertexAttribFormat} and {@see GL46::glVertexArrayAttribFormat} should be used to describe vertex
     * attribute layout for floating-point vertex attributes, {@see GL46::glVertexAttribIFormat} and
     * {@see GL46::glVertexArrayAttribIFormat} should be used to describe vertex attribute layout for integer vertex
     * attribute, and {@see GL46::glVertexAttribLFormat} and {@see GL46::glVertexArrayAttribLFormat} should be used
     * to describe the layout for 64-bit vertex attributes. Data for an array specified by
     * {@see GL46::glVertexAttribIFormat} and {@see GL46::glVertexArrayAttribIFormat} will always be left as integer
     * values; such data are referred to as pure integers.
     *
     * @see http://docs.gl/gl4/glVertexAttribFormat
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $attribindex
     * @param int|\FFI\CData|\FFI\CInt $size
     * @param int|\FFI\CData|\FFI\CInt $type
     * @param int|\FFI\CData|\FFI\CInt $normalized
     * @param int|\FFI\CData|\FFI\CInt $relativeoffset
     * @return void
     */
    public function glVertexAttribFormat($attribindex, $size, $type, $normalized, $relativeoffset): void
    {
        $attribindex = $attribindex instanceof \FFI\CData ? $attribindex->cdata : $attribindex;
        $size = $size instanceof \FFI\CData ? $size->cdata : $size;
        $type = $type instanceof \FFI\CData ? $type->cdata : $type;
        $normalized = $normalized instanceof \FFI\CData ? $normalized->cdata : $normalized;
        $relativeoffset = $relativeoffset instanceof \FFI\CData ? $relativeoffset->cdata : $relativeoffset;

        assert(Assert::uint16($attribindex), 'Argument $attribindex must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($size), 'Argument $size must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::uint16($type), 'Argument $type must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint8($normalized), 'Argument $normalized must be a C-like GLboolean, but incompatible or overflow value given');
        assert(Assert::uint16($relativeoffset), 'Argument $relativeoffset must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribFormat', 'void (*)(GLuint attribindex, GLint size, GLenum type, GLboolean normalized, GLuint relativeoffset)');
        $proc($attribindex, $size, $type, $normalized, $relativeoffset);
    }

    /**
     * {@see GL46::glVertexAttribFormat}, {@see GL46::glVertexAttribIFormat} and {@see GL46::glVertexAttribLFormat},
     * as well as {@see GL46::glVertexArrayAttribFormat}, {@see GL46::glVertexArrayAttribIFormat} and
     * {@see GL46::glVertexArrayAttribLFormat} specify the organization of data in vertex arrays. The first three
     * calls operate on the bound vertex array object, whereas the last three ones modify the state of a vertex array
     * object with ID $vaobj. $attribindex specifies the index of the generic vertex attribute array whose data
     * layout is being described, and must be less than the value of {@see GL46::GL_MAX_VERTEX_ATTRIBS}.
     *
     * $size determines the number of components per vertex are allocated to the specified attribute and must be 1,
     * 2, 3 or 4. $type indicates the type of the data. If $type is one of {@see GL46::GL_BYTE},
     * {@see GL46::GL_SHORT}, {@see GL46::GL_INT}, {@see GL46::GL_FIXED}, {@see GL46::GL_FLOAT},
     * {@see GL46::GL_HALF_FLOAT}, and {@see GL46::GL_DOUBLE} indicate types `GLbyte`, `GLshort`, `GLint`, `GLfixed`,
     * `GLfloat`, `GLhalf`, and `GLdouble`, respectively; the values {@see GL46::GL_UNSIGNED_BYTE},
     * {@see GL46::GL_UNSIGNED_SHORT}, and {@see GL46::GL_UNSIGNED_INT} indicate types `GLubyte`, `GLushort`, and
     * `GLuint`, respectively; the values {@see GL46::GL_INT_2_10_10_10_REV} and
     * {@see GL46::GL_UNSIGNED_INT_2_10_10_10_REV} indicating respectively four signed or unsigned elements packed
     * into a single `GLuint`; and the value {@see GL46::GL_UNSIGNED_INT_10F_11F_11F_REV} indicating three floating
     * point values packed into a single `GLuint`.
     *
     * {@see GL46::glVertexAttribLFormat} and {@see GL46::glVertexArrayAttribLFormat} is used to specify layout for
     * data associated with a generic attribute variable declared as 64-bit double precision components. For
     * {@see GL46::glVertexAttribLFormat} and {@see GL46::glVertexArrayAttribLFormat}, $type must be
     * {@see GL46::GL_DOUBLE}. In contrast to {@see GL46::glVertexAttribFormat} or
     * {@see GL46::glVertexArrayAttribFormat}, which will cause data declared as {@see GL46::GL_DOUBLE} to be
     * converted to 32-bit representation, {@see GL46::glVertexAttribLFormat} and
     * {@see GL46::glVertexArrayAttribLFormat} cause such data to be left in its natural, 64-bit representation.
     *
     * For {@see GL46::glVertexAttribFormat} and {@see GL46::glVertexArrayAttribFormat}, if $normalized is
     * {@see GL46::GL_TRUE}, then integer data is normalized to the range [-1, 1] or [0, 1] if it is signed or
     * unsigned, respectively. If $normalized is {@see GL46::GL_FALSE} then integer data is directly converted to
     * floating point.
     *
     * $relativeoffset is the offset, measured in basic machine units of the first element relative to the start of
     * the vertex buffer binding this attribute fetches from.
     *
     * {@see GL46::glVertexAttribFormat} and {@see GL46::glVertexArrayAttribFormat} should be used to describe vertex
     * attribute layout for floating-point vertex attributes, {@see GL46::glVertexAttribIFormat} and
     * {@see GL46::glVertexArrayAttribIFormat} should be used to describe vertex attribute layout for integer vertex
     * attribute, and {@see GL46::glVertexAttribLFormat} and {@see GL46::glVertexArrayAttribLFormat} should be used
     * to describe the layout for 64-bit vertex attributes. Data for an array specified by
     * {@see GL46::glVertexAttribIFormat} and {@see GL46::glVertexArrayAttribIFormat} will always be left as integer
     * values; such data are referred to as pure integers.
     *
     * @see http://docs.gl/gl4/glVertexAttribFormat
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $attribindex
     * @param int|\FFI\CData|\FFI\CInt $size
     * @param int|\FFI\CData|\FFI\CInt $type
     * @param int|\FFI\CData|\FFI\CInt $relativeoffset
     * @return void
     */
    public function glVertexAttribIFormat($attribindex, $size, $type, $relativeoffset): void
    {
        $attribindex = $attribindex instanceof \FFI\CData ? $attribindex->cdata : $attribindex;
        $size = $size instanceof \FFI\CData ? $size->cdata : $size;
        $type = $type instanceof \FFI\CData ? $type->cdata : $type;
        $relativeoffset = $relativeoffset instanceof \FFI\CData ? $relativeoffset->cdata : $relativeoffset;

        assert(Assert::uint16($attribindex), 'Argument $attribindex must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($size), 'Argument $size must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::uint16($type), 'Argument $type must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($relativeoffset), 'Argument $relativeoffset must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribIFormat', 'void (*)(GLuint attribindex, GLint size, GLenum type, GLuint relativeoffset)');
        $proc($attribindex, $size, $type, $relativeoffset);
    }

    /**
     * {@see GL46::glVertexAttribFormat}, {@see GL46::glVertexAttribIFormat} and {@see GL46::glVertexAttribLFormat},
     * as well as {@see GL46::glVertexArrayAttribFormat}, {@see GL46::glVertexArrayAttribIFormat} and
     * {@see GL46::glVertexArrayAttribLFormat} specify the organization of data in vertex arrays. The first three
     * calls operate on the bound vertex array object, whereas the last three ones modify the state of a vertex array
     * object with ID $vaobj. $attribindex specifies the index of the generic vertex attribute array whose data
     * layout is being described, and must be less than the value of {@see GL46::GL_MAX_VERTEX_ATTRIBS}.
     *
     * $size determines the number of components per vertex are allocated to the specified attribute and must be 1,
     * 2, 3 or 4. $type indicates the type of the data. If $type is one of {@see GL46::GL_BYTE},
     * {@see GL46::GL_SHORT}, {@see GL46::GL_INT}, {@see GL46::GL_FIXED}, {@see GL46::GL_FLOAT},
     * {@see GL46::GL_HALF_FLOAT}, and {@see GL46::GL_DOUBLE} indicate types `GLbyte`, `GLshort`, `GLint`, `GLfixed`,
     * `GLfloat`, `GLhalf`, and `GLdouble`, respectively; the values {@see GL46::GL_UNSIGNED_BYTE},
     * {@see GL46::GL_UNSIGNED_SHORT}, and {@see GL46::GL_UNSIGNED_INT} indicate types `GLubyte`, `GLushort`, and
     * `GLuint`, respectively; the values {@see GL46::GL_INT_2_10_10_10_REV} and
     * {@see GL46::GL_UNSIGNED_INT_2_10_10_10_REV} indicating respectively four signed or unsigned elements packed
     * into a single `GLuint`; and the value {@see GL46::GL_UNSIGNED_INT_10F_11F_11F_REV} indicating three floating
     * point values packed into a single `GLuint`.
     *
     * {@see GL46::glVertexAttribLFormat} and {@see GL46::glVertexArrayAttribLFormat} is used to specify layout for
     * data associated with a generic attribute variable declared as 64-bit double precision components. For
     * {@see GL46::glVertexAttribLFormat} and {@see GL46::glVertexArrayAttribLFormat}, $type must be
     * {@see GL46::GL_DOUBLE}. In contrast to {@see GL46::glVertexAttribFormat} or
     * {@see GL46::glVertexArrayAttribFormat}, which will cause data declared as {@see GL46::GL_DOUBLE} to be
     * converted to 32-bit representation, {@see GL46::glVertexAttribLFormat} and
     * {@see GL46::glVertexArrayAttribLFormat} cause such data to be left in its natural, 64-bit representation.
     *
     * For {@see GL46::glVertexAttribFormat} and {@see GL46::glVertexArrayAttribFormat}, if $normalized is
     * {@see GL46::GL_TRUE}, then integer data is normalized to the range [-1, 1] or [0, 1] if it is signed or
     * unsigned, respectively. If $normalized is {@see GL46::GL_FALSE} then integer data is directly converted to
     * floating point.
     *
     * $relativeoffset is the offset, measured in basic machine units of the first element relative to the start of
     * the vertex buffer binding this attribute fetches from.
     *
     * {@see GL46::glVertexAttribFormat} and {@see GL46::glVertexArrayAttribFormat} should be used to describe vertex
     * attribute layout for floating-point vertex attributes, {@see GL46::glVertexAttribIFormat} and
     * {@see GL46::glVertexArrayAttribIFormat} should be used to describe vertex attribute layout for integer vertex
     * attribute, and {@see GL46::glVertexAttribLFormat} and {@see GL46::glVertexArrayAttribLFormat} should be used
     * to describe the layout for 64-bit vertex attributes. Data for an array specified by
     * {@see GL46::glVertexAttribIFormat} and {@see GL46::glVertexArrayAttribIFormat} will always be left as integer
     * values; such data are referred to as pure integers.
     *
     * @see http://docs.gl/gl4/glVertexAttribFormat
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $attribindex
     * @param int|\FFI\CData|\FFI\CInt $size
     * @param int|\FFI\CData|\FFI\CInt $type
     * @param int|\FFI\CData|\FFI\CInt $relativeoffset
     * @return void
     */
    public function glVertexAttribLFormat($attribindex, $size, $type, $relativeoffset): void
    {
        $attribindex = $attribindex instanceof \FFI\CData ? $attribindex->cdata : $attribindex;
        $size = $size instanceof \FFI\CData ? $size->cdata : $size;
        $type = $type instanceof \FFI\CData ? $type->cdata : $type;
        $relativeoffset = $relativeoffset instanceof \FFI\CData ? $relativeoffset->cdata : $relativeoffset;

        assert(Assert::uint16($attribindex), 'Argument $attribindex must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($size), 'Argument $size must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::uint16($type), 'Argument $type must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($relativeoffset), 'Argument $relativeoffset must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribLFormat', 'void (*)(GLuint attribindex, GLint size, GLenum type, GLuint relativeoffset)');
        $proc($attribindex, $size, $type, $relativeoffset);
    }

    /**
     * {@see GL46::glVertexAttribBinding} and {@see GL46::glVertexArrayAttribBinding} establishes an association
     * between the generic vertex attribute of a vertex array object whose index is given by $attribindex, and a
     * vertex buffer binding whose index is given by $bindingindex. For {@see GL46::glVertexAttribBinding}, the
     * vertex array object affected is that currently bound. For {@see GL46::glVertexArrayAttribBinding}, $vaobj is
     * the name of the vertex array object.
     *
     * $attribindex must be less than the value of {@see GL46::GL_MAX_VERTEX_ATTRIBS} and $bindingindex must be less
     * than the value of {@see GL46::GL_MAX_VERTEX_ATTRIB_BINDINGS}.
     *
     * @see http://docs.gl/gl4/glVertexAttribBinding
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $attribindex
     * @param int|\FFI\CData|\FFI\CInt $bindingindex
     * @return void
     */
    public function glVertexAttribBinding($attribindex, $bindingindex): void
    {
        $attribindex = $attribindex instanceof \FFI\CData ? $attribindex->cdata : $attribindex;
        $bindingindex = $bindingindex instanceof \FFI\CData ? $bindingindex->cdata : $bindingindex;

        assert(Assert::uint16($attribindex), 'Argument $attribindex must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($bindingindex), 'Argument $bindingindex must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribBinding', 'void (*)(GLuint attribindex, GLuint bindingindex)');
        $proc($attribindex, $bindingindex);
    }

    /**
     * {@see GL46::glVertexBindingDivisor} and {@see GL46::glVertexArrayBindingDivisor} modify the rate at which
     * generic vertex attributes advance when rendering multiple instances of primitives in a single draw command. If
     * $divisor is zero, the attributes using the buffer bound to $bindingindex advance once per vertex. If $divisor
     * is non-zero, the attributes advance once per $divisor instances of the set(s) of vertices being rendered. An
     * attribute is referred to as instanced if the corresponding $divisor value is non-zero.
     *
     * {@see GL46::glVertexBindingDivisor} uses currently bound vertex array object , whereas
     * {@see GL46::glVertexArrayBindingDivisor} updates state of the vertex array object with ID $vaobj.
     *
     * @see http://docs.gl/gl4/glVertexBindingDivisor
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $bindingindex
     * @param int|\FFI\CData|\FFI\CInt $divisor
     * @return void
     */
    public function glVertexBindingDivisor($bindingindex, $divisor): void
    {
        $bindingindex = $bindingindex instanceof \FFI\CData ? $bindingindex->cdata : $bindingindex;
        $divisor = $divisor instanceof \FFI\CData ? $divisor->cdata : $divisor;

        assert(Assert::uint16($bindingindex), 'Argument $bindingindex must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($divisor), 'Argument $divisor must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexBindingDivisor', 'void (*)(GLuint bindingindex, GLuint divisor)');
        $proc($bindingindex, $divisor);
    }

    /**
     * {@see GL46::glDebugMessageControl} controls the reporting of debug messages generated by a debug context. The
     * parameters $source, $type and $severity form a filter to select messages from the pool of potential messages
     * generated by the GL.
     *
     * $source may be {@see GL46::GL_DEBUG_SOURCE_API}, {@see GL46::GL_DEBUG_SOURCE_WINDOW_SYSTEM_},
     * {@see GL46::GL_DEBUG_SOURCE_SHADER_COMPILER}, {@see GL46::GL_DEBUG_SOURCE_THIRD_PARTY},
     * {@see GL46::GL_DEBUG_SOURCE_APPLICATION}, {@see GL46::GL_DEBUG_SOURCE_OTHER} to select messages generated by
     * usage of the GL API, the window system, the shader compiler, third party tools or libraries, explicitly by the
     * application or by some other source, respectively. It may also take the value {@see GL46::GL_DONT_CARE}. If
     * $source is not {@see GL46::GL_DONT_CARE} then only messages whose source matches $source will be referenced.
     *
     * $type may be one of {@see GL46::GL_DEBUG_TYPE_ERROR}, {@see GL46::GL_DEBUG_TYPE_DEPRECATED_BEHAVIOR},
     * {@see GL46::GL_DEBUG_TYPE_UNDEFINED_BEHAVIOR}, {@see GL46::GL_DEBUG_TYPE_PORTABILITY},
     * {@see GL46::GL_DEBUG_TYPE_PERFORMANCE}, {@see GL46::GL_DEBUG_TYPE_MARKER},
     * {@see GL46::GL_DEBUG_TYPE_PUSH_GROUP}, {@see GL46::GL_DEBUG_TYPE_POP_GROUP}, or
     * {@see GL46::GL_DEBUG_TYPE_OTHER} to indicate the type of messages describing GL errors, attempted use of
     * deprecated features, triggering of undefined behavior, portability issues, performance notifications, markers,
     * group push and pop events, and other types of messages, respectively. It may also take the value
     * {@see GL46::GL_DONT_CARE}. If $type is not {@see GL46::GL_DONT_CARE} then only messages whose type matches
     * $type will be referenced.
     *
     * $severity may be one of {@see GL46::GL_DEBUG_SEVERITY_LOW}, {@see GL46::GL_DEBUG_SEVERITY_MEDIUM}, or
     * {@see GL46::GL_DEBUG_SEVERITY_HIGH} to select messages of low, medium or high severity messages or to
     * {@see GL46::GL_DEBUG_SEVERITY_NOTIFICATION} for notifications. It may also take the value
     * {@see GL46::GL_DONT_CARE}. If $severity is not {@see GL46::GL_DONT_CARE} then only messages whose severity
     * matches $severity will be referenced.
     *
     * $ids contains a list of $count message identifiers to select specific messages from the pool of available
     * messages. If $count is zero then the value of $ids is ignored. Otherwise, only messages appearing in this list
     * are selected. In this case, $source and $type may not be {@see GL46::GL_DONT_CARE} and $severity must be
     * {@see GL46::GL_DONT_CARE}.
     *
     * If $enabled is {@see GL46::GL_TRUE} then messages that match the filter formed by $source, $type, $severity
     * and $ids are enabled. Otherwise, those messages are disabled.
     *
     * @see http://docs.gl/gl4/glDebugMessageControl
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $source
     * @param int|\FFI\CData|\FFI\CInt $type
     * @param int|\FFI\CData|\FFI\CInt $severity
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CIntPtr|null $ids
     * @param int|\FFI\CData|\FFI\CInt $enabled
     * @return void
     */
    public function glDebugMessageControl($source, $type, $severity, $count, ?\FFI\CData $ids, $enabled): void
    {
        $source = $source instanceof \FFI\CData ? $source->cdata : $source;
        $type = $type instanceof \FFI\CData ? $type->cdata : $type;
        $severity = $severity instanceof \FFI\CData ? $severity->cdata : $severity;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $enabled = $enabled instanceof \FFI\CData ? $enabled->cdata : $enabled;

        assert(Assert::uint16($source), 'Argument $source must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($type), 'Argument $type must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($severity), 'Argument $severity must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint8($enabled), 'Argument $enabled must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glDebugMessageControl', 'void (*)(GLenum source, GLenum type, GLenum severity, GLsizei count, const GLuint *ids, GLboolean enabled)');
        $proc($source, $type, $severity, $count, $ids, $enabled);
    }

    /**
     * {@see GL46::glDebugMessageInsert} inserts a user-supplied message into the debug output queue. $source
     * specifies the source that will be used to classify the message and must be
     * {@see GL46::GL_DEBUG_SOURCE_APPLICATION} or {@see GL46::GL_DEBUG_SOURCE_THIRD_PARTY}. All other sources are
     * reserved for use by the GL implementation. $type indicates the type of the message to be inserted and may be
     * one of {@see GL46::GL_DEBUG_TYPE_ERROR}, {@see GL46::GL_DEBUG_TYPE_DEPRECATED_BEHAVIOR},
     * {@see GL46::GL_DEBUG_TYPE_UNDEFINED_BEHAVIOR}, {@see GL46::GL_DEBUG_TYPE_PORTABILITY},
     * {@see GL46::GL_DEBUG_TYPE_PERFORMANCE}, {@see GL46::GL_DEBUG_TYPE_MARKER},
     * {@see GL46::GL_DEBUG_TYPE_PUSH_GROUP}, {@see GL46::GL_DEBUG_TYPE_POP_GROUP}, or
     * {@see GL46::GL_DEBUG_TYPE_OTHER}. $severity indicates the severity of the message and may be
     * {@see GL46::GL_DEBUG_SEVERITY_LOW}, {@see GL46::GL_DEBUG_SEVERITY_MEDIUM}, {@see GL46::GL_DEBUG_SEVERITY_HIGH}
     * or {@see GL46::GL_DEBUG_SEVERITY_NOTIFICATION}. $id is available for application defined use and may be any
     * value. This value will be recorded and used to identify the message.
     *
     * $length contains a count of the characters in the character array whose address is given in $message. If
     * $length is negative then $message is treated as a null-terminated string. The length of the message, whether
     * specified explicitly or implicitly, must be less than or equal to the implementation defined constant
     * {@see GL46::GL_MAX_DEBUG_MESSAGE_LENGTH}.
     *
     * @see http://docs.gl/gl4/glDebugMessageInsert
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $source
     * @param int|\FFI\CData|\FFI\CInt $type
     * @param int|\FFI\CData|\FFI\CInt $id
     * @param int|\FFI\CData|\FFI\CInt $severity
     * @param int|\FFI\CData|\FFI\CInt $length
     * @param \FFI\CData|\FFI\CIntPtr|null $buf
     * @return void
     */
    public function glDebugMessageInsert($source, $type, $id, $severity, $length, ?\FFI\CData $buf): void
    {
        $source = $source instanceof \FFI\CData ? $source->cdata : $source;
        $type = $type instanceof \FFI\CData ? $type->cdata : $type;
        $id = $id instanceof \FFI\CData ? $id->cdata : $id;
        $severity = $severity instanceof \FFI\CData ? $severity->cdata : $severity;
        $length = $length instanceof \FFI\CData ? $length->cdata : $length;

        assert(Assert::uint16($source), 'Argument $source must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($type), 'Argument $type must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($id), 'Argument $id must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($severity), 'Argument $severity must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($length), 'Argument $length must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glDebugMessageInsert', 'void (*)(GLenum source, GLenum type, GLuint id, GLenum severity, GLsizei length, const GLchar *buf)');
        $proc($source, $type, $id, $severity, $length, $buf);
    }

    /**
     * {@see GL46::glDebugMessageCallback} sets the current debug output callback function to the function whose
     * address is given in $callback. The callback function should have the following prototype (in C), or be
     * otherwise compatible with such a prototype:
     *
     * <code>
     *         typedef void (APIENTRY *DEBUGPROC)(GLenum source,
     *             GLenum type,
     *             GLuint id,
     *             GLenum severity,
     *             GLsizei length,
     *             const GLchar *message,
     *             const void *userParam);
     * </code>
     * This function is defined to have the same calling convention as the GL API functions. In most cases this is
     * defined as `APIENTRY`, although it will vary depending on platform, language and compiler.
     *
     * Each time a debug message is generated the debug callback function will be invoked with $source, $type, $id,
     * and $severity associated with the message, and $length set to the length of debug message whose character
     * string is in the array pointed to by $message $userParam will be set to the value passed in the $userParam
     * parameter to the most recent call to {@see GL46::glDebugMessageCallback}.
     *
     * @see http://docs.gl/gl4/glDebugMessageCallback
     * @since 4.3
     * @param \Closure $callback
     * @param \FFI\CData|\FFI\CPtr|null $userParam
     * @return void
     */
    public function glDebugMessageCallback(\Closure $callback, ?\FFI\CData $userParam): void
    {
        $proc = $this->getProcAddress('glDebugMessageCallback', 'void (*)(GLDEBUGPROC callback, const void *userParam)');
        $proc($callback, $userParam);
    }

    /**
     * {@see GL46::glGetDebugMessageLog} retrieves messages from the debug message log. A maximum of $count messages
     * are retrieved from the log. If $sources is not NULL then the source of each message is written into up to
     * $count elements of the array. If $types is not NULL then the type of each message is written into up to $count
     * elements of the array. If $id is not NULL then the identifier of each message is written into up to $count
     * elements of the array. If $severities is not NULL then the severity of each message is written into up to
     * $count elements of the array. If $lengths is not NULL then the length of each message is written into up to
     * $count elements of the array.
     *
     * $messageLog specifies the address of a character array into which the debug messages will be written. Each
     * message will be concatenated onto the array starting at the first element of $messageLog. $bufSize specifies
     * the size of the array $messageLog. If a message will not fit into the remaining space in $messageLog then the
     * function terminates and returns the number of messages written so far, which may be zero.
     *
     * If {@see GL46::glGetDebugMessageLog} returns zero then no messages are present in the debug log, or there was
     * not enough space in $messageLog to retrieve the first message in the queue. If $messageLog is NULL then no
     * messages are written and the value of $bufSize is ignored.
     *
     * @see http://docs.gl/gl4/glGetDebugMessageLog
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $sources
     * @param \FFI\CData|\FFI\CIntPtr|null $types
     * @param \FFI\CData|\FFI\CIntPtr|null $ids
     * @param \FFI\CData|\FFI\CIntPtr|null $severities
     * @param \FFI\CData|\FFI\CIntPtr|null $lengths
     * @param \FFI\CData|\FFI\CIntPtr|null $messageLog
     * @return int|\FFI\CData|\FFI\CInt
     */
    public function glGetDebugMessageLog(
        $count,
        $bufSize,
        ?\FFI\CData $sources,
        ?\FFI\CData $types,
        ?\FFI\CData $ids,
        ?\FFI\CData $severities,
        ?\FFI\CData $lengths,
        ?\FFI\CData $messageLog
    ): int {
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $bufSize = $bufSize instanceof \FFI\CData ? $bufSize->cdata : $bufSize;

        assert(Assert::uint16($count), 'Argument $count must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($bufSize), 'Argument $bufSize must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetDebugMessageLog', 'GLuint (*)(GLuint count, GLsizei bufSize, GLenum *sources, GLenum *types, GLuint *ids, GLenum *severities, GLsizei *lengths, GLchar *messageLog)');
        return $proc($count, $bufSize, $sources, $types, $ids, $severities, $lengths, $messageLog);
    }

    /**
     * {@see GL46::glPushDebugGroup} pushes a debug group described by the string $message into the command stream.
     * The value of $id specifies the ID of messages generated. The parameter $length contains the number of
     * characters in $message. If $length is negative, it is implied that $message contains a null terminated string.
     * The message has the specified $source and $id, the $type {@see GL46::GL_DEBUG_TYPE_PUSH_GROUP}, and $severity
     * {@see GL46::GL_DEBUG_SEVERITY_NOTIFICATION}. The GL will put a new debug group on top of the debug group stack
     * which inherits the control of the volume of debug output of the debug group previously residing on the top of
     * the debug group stack. Because debug groups are strictly hierarchical, any additional control of the debug
     * output volume will only apply within the active debug group and the debug groups pushed on top of the active
     * debug group.
     *
     * @see http://docs.gl/gl4/glPushDebugGroup
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $source
     * @param int|\FFI\CData|\FFI\CInt $id
     * @param int|\FFI\CData|\FFI\CInt $length
     * @param \FFI\CData|\FFI\CIntPtr|null $message
     * @return void
     */
    public function glPushDebugGroup($source, $id, $length, ?\FFI\CData $message): void
    {
        $source = $source instanceof \FFI\CData ? $source->cdata : $source;
        $id = $id instanceof \FFI\CData ? $id->cdata : $id;
        $length = $length instanceof \FFI\CData ? $length->cdata : $length;

        assert(Assert::uint16($source), 'Argument $source must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($id), 'Argument $id must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($length), 'Argument $length must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glPushDebugGroup', 'void (*)(GLenum source, GLuint id, GLsizei length, const GLchar *message)');
        $proc($source, $id, $length, $message);
    }

    /**
     * {@see GL46::glPopDebugGroup} pops the active debug group. After popping a debug group, the GL will also
     * generate a debug output message describing its cause based on the $message string, the source $source, and an
     * ID $id submitted to the corresponding {@see GL46::glPushDebugGroup} command.
     * {@see GL46::GL_DEBUG_TYPE_PUSH_GROUP} and {@see GL46::GL_DEBUG_TYPE_POP_GROUP} share a single namespace for
     * message $id. $severity has the value {@see GL46::GL_DEBUG_SEVERITY_NOTIFICATION}. The $type has the value
     * {@see GL46::GL_DEBUG_TYPE_POP_GROUP}. Popping a debug group restores the debug output volume control of the
     * parent debug group.
     *
     * @see http://docs.gl/gl4/glPopDebugGroup
     * @since 4.3
     * @return void
     */
    public function glPopDebugGroup(): void
    {
        $proc = $this->getProcAddress('glPopDebugGroup', 'void (*)(void)');
        $proc();
    }

    /**
     * {@see GL46::glObjectLabel} labels the object identified by $name within the namespace given by $identifier.
     * $identifier must be one of {@see GL46::GL_BUFFER}, {@see GL46::GL_SHADER}, {@see GL46::GL_PROGRAM},
     * {@see GL46::GL_VERTEX_ARRAY}, {@see GL46::GL_QUERY}, {@see GL46::GL_PROGRAM_PIPELINE},
     * {@see GL46::GL_TRANSFORM_FEEDBACK}, {@see GL46::GL_SAMPLER}, {@see GL46::GL_TEXTURE},
     * {@see GL46::GL_RENDERBUFFER}, {@see GL46::GL_FRAMEBUFFER}, to indicate the namespace containing the names of
     * buffers, shaders, programs, vertex array objects, query objects, program pipelines, transform feedback
     * objects, samplers, textures, renderbuffers and frame buffers, respectively.
     *
     * $label is the address of a string that will be used to label an object. $length contains the number of
     * characters in $label. If $length is negative, it is implied that $label contains a null-terminated string. If
     * $label is NULL, any debug label is effectively removed from the object.
     *
     * @see http://docs.gl/gl4/glObjectLabel
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $identifier
     * @param int|\FFI\CData|\FFI\CInt $name
     * @param int|\FFI\CData|\FFI\CInt $length
     * @param \FFI\CData|\FFI\CIntPtr|null $label
     * @return void
     */
    public function glObjectLabel($identifier, $name, $length, ?\FFI\CData $label): void
    {
        $identifier = $identifier instanceof \FFI\CData ? $identifier->cdata : $identifier;
        $name = $name instanceof \FFI\CData ? $name->cdata : $name;
        $length = $length instanceof \FFI\CData ? $length->cdata : $length;

        assert(Assert::uint16($identifier), 'Argument $identifier must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($name), 'Argument $name must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($length), 'Argument $length must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glObjectLabel', 'void (*)(GLenum identifier, GLuint name, GLsizei length, const GLchar *label)');
        $proc($identifier, $name, $length, $label);
    }

    /**
     * {@see GL46::glGetObjectLabel} retrieves the label of the object identified by $name within the namespace given
     * by $identifier. $identifier must be one of {@see GL46::GL_BUFFER}, {@see GL46::GL_SHADER},
     * {@see GL46::GL_PROGRAM}, {@see GL46::GL_VERTEX_ARRAY}, {@see GL46::GL_QUERY},
     * {@see GL46::GL_PROGRAM_PIPELINE}, {@see GL46::GL_TRANSFORM_FEEDBACK}, {@see GL46::GL_SAMPLER},
     * {@see GL46::GL_TEXTURE}, {@see GL46::GL_RENDERBUFFER}, {@see GL46::GL_FRAMEBUFFER}, to indicate the namespace
     * containing the names of buffers, shaders, programs, vertex array objects, query objects, program pipelines,
     * transform feedback objects, samplers, textures, renderbuffers and frame buffers, respectively.
     *
     * $label is the address of a string that will be used to store the object label. $bufSize specifies the number
     * of characters in the array identified by $label. $length contains the address of a variable which will receive
     * the number of characters in the object label. If $length is NULL, then it is ignored and no data is written.
     * Likewise, if $label is NULL, or if $bufSize is zero then no data is written to $label.
     *
     * @see http://docs.gl/gl4/glGetObjectLabel
     * @since 4.3
     * @param int|\FFI\CData|\FFI\CInt $identifier
     * @param int|\FFI\CData|\FFI\CInt $name
     * @param int|\FFI\CData|\FFI\CInt $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @param \FFI\CData|\FFI\CIntPtr|null $label
     * @return void
     */
    public function glGetObjectLabel($identifier, $name, $bufSize, ?\FFI\CData $length, ?\FFI\CData $label): void
    {
        $identifier = $identifier instanceof \FFI\CData ? $identifier->cdata : $identifier;
        $name = $name instanceof \FFI\CData ? $name->cdata : $name;
        $bufSize = $bufSize instanceof \FFI\CData ? $bufSize->cdata : $bufSize;

        assert(Assert::uint16($identifier), 'Argument $identifier must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($name), 'Argument $name must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($bufSize), 'Argument $bufSize must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetObjectLabel', 'void (*)(GLenum identifier, GLuint name, GLsizei bufSize, GLsizei *length, GLchar *label)');
        $proc($identifier, $name, $bufSize, $length, $label);
    }

    /**
     * {@see GL46::glObjectPtrLabel} labels the sync object identified by $ptr.
     *
     * $label is the address of a string that will be used to label the object. $length contains the number of
     * characters in $label. If $length is negative, it is implied that $label contains a null-terminated string. If
     * $label is NULL, any debug label is effectively removed from the object.
     *
     * @see http://docs.gl/gl4/glObjectPtrLabel
     * @since 4.3
     * @param \FFI\CData|\FFI\CPtr|null $ptr
     * @param int|\FFI\CData|\FFI\CInt $length
     * @param \FFI\CData|\FFI\CIntPtr|null $label
     * @return void
     */
    public function glObjectPtrLabel(?\FFI\CData $ptr, $length, ?\FFI\CData $label): void
    {
        $length = $length instanceof \FFI\CData ? $length->cdata : $length;

        assert(Assert::int16($length), 'Argument $length must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glObjectPtrLabel', 'void (*)(const void *ptr, GLsizei length, const GLchar *label)');
        $proc($ptr, $length, $label);
    }

    /**
     * {@see GL46::glGetObjectPtrLabel} retrieves the label of the sync object identified by $ptr.
     *
     * $label is the address of a string that will be used to store the object label. $bufSize specifies the number
     * of characters in the array identified by $label. $length contains the address of a variable which will receive
     * the number of characters in the object label. If $length is NULL, then it is ignored and no data is written.
     * Likewise, if $label is NULL, or if $bufSize is zero then no data is written to $label.
     *
     * @see http://docs.gl/gl4/glGetObjectPtrLabel
     * @since 4.3
     * @param \FFI\CData|\FFI\CPtr|null $ptr
     * @param int|\FFI\CData|\FFI\CInt $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @param \FFI\CData|\FFI\CIntPtr|null $label
     * @return void
     */
    public function glGetObjectPtrLabel(?\FFI\CData $ptr, $bufSize, ?\FFI\CData $length, ?\FFI\CData $label): void
    {
        $bufSize = $bufSize instanceof \FFI\CData ? $bufSize->cdata : $bufSize;

        assert(Assert::int16($bufSize), 'Argument $bufSize must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetObjectPtrLabel', 'void (*)(const void *ptr, GLsizei bufSize, GLsizei *length, GLchar *label)');
        $proc($ptr, $bufSize, $length, $label);
    }
}
