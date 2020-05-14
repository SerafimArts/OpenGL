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
 *
 * @version 4.3
 */
class GL43 extends GL42
{
    /**
     * No. of supported Shading Language Versions. Accepted by the $pname parameter of GetIntegerv.
     *
     * @since 4.3
     * @var int 
    */
    public const GL_NUM_SHADING_LANGUAGE_VERSIONS = 0x82E9;

    /**
     * Vertex attrib array has unconverted doubles. Accepted by the $pname parameter of GetVertexAttribiv.
     *
     * @since 4.3
     * @var int 
    */
    public const GL_VERTEX_ATTRIB_ARRAY_LONG = 0x874E;

    /**
     * Accepted by the $internalformat parameter of CompressedTexImage2D.
     *
     * @since 4.3
     * @var int 
    */
    public const
        GL_COMPRESSED_RGB8_ETC2                      = 0x9274,
        GL_COMPRESSED_SRGB8_ETC2                     = 0x9275,
        GL_COMPRESSED_RGB8_PUNCHTHROUGH_ALPHA1_ETC2  = 0x9276,
        GL_COMPRESSED_SRGB8_PUNCHTHROUGH_ALPHA1_ETC2 = 0x9277,
        GL_COMPRESSED_RGBA8_ETC2_EAC                 = 0x9278,
        GL_COMPRESSED_SRGB8_ALPHA8_ETC2_EAC          = 0x9279,
        GL_COMPRESSED_R11_EAC                        = 0x9270,
        GL_COMPRESSED_SIGNED_R11_EAC                 = 0x9271,
        GL_COMPRESSED_RG11_EAC                       = 0x9272,
        GL_COMPRESSED_SIGNED_RG11_EAC                = 0x9273;

    /**
     * Accepted by the $target parameter of Enable and Disable.
     *
     * @since 4.3
     * @var int 
    */
    public const GL_PRIMITIVE_RESTART_FIXED_INDEX = 0x8D69;

    /**
     * Accepted by the $target parameter of BeginQuery, EndQuery, GetQueryIndexediv and GetQueryiv.
     *
     * @since 4.3
     * @var int 
    */
    public const GL_ANY_SAMPLES_PASSED_CONSERVATIVE = 0x8D6A;

    /**
     * Accepted by the $value parameter of the GetInteger* functions.
     *
     * @since 4.3
     * @var int 
    */
    public const GL_MAX_ELEMENT_INDEX = 0x8D6B;

    /**
     * Accepted by the $pname parameters of GetTexParameterfv and  GetTexParameteriv.
     *
     * @since 4.3
     * @var int 
    */
    public const GL_TEXTURE_IMMUTABLE_LEVELS = 0x82DF;

    /**
     * Accepted by the $type parameter of CreateShader and returned in the $params parameter by GetShaderiv.
     *
     * @since 4.3
     * @var int 
    */
    public const GL_COMPUTE_SHADER = 0x91B9;

    /**
     * Accepted by the $pname parameter of GetIntegerv, GetBooleanv, GetFloatv, GetDoublev and GetInteger64v.
     *
     * @since 4.3
     * @var int 
    */
    public const
        GL_MAX_COMPUTE_UNIFORM_BLOCKS              = 0x91BB,
        GL_MAX_COMPUTE_TEXTURE_IMAGE_UNITS         = 0x91BC,
        GL_MAX_COMPUTE_IMAGE_UNIFORMS              = 0x91BD,
        GL_MAX_COMPUTE_SHARED_MEMORY_SIZE          = 0x8262,
        GL_MAX_COMPUTE_UNIFORM_COMPONENTS          = 0x8263,
        GL_MAX_COMPUTE_ATOMIC_COUNTER_BUFFERS      = 0x8264,
        GL_MAX_COMPUTE_ATOMIC_COUNTERS             = 0x8265,
        GL_MAX_COMBINED_COMPUTE_UNIFORM_COMPONENTS = 0x8266,
        GL_MAX_COMPUTE_WORK_GROUP_INVOCATIONS      = 0x90EB;

    /**
     * Accepted by the $pname parameter of GetIntegeri_v, GetBooleani_v, GetFloati_v, GetDoublei_v and GetInteger64i_v.
     *
     * @since 4.3
     * @var int 
    */
    public const
        GL_MAX_COMPUTE_WORK_GROUP_COUNT = 0x91BE,
        GL_MAX_COMPUTE_WORK_GROUP_SIZE  = 0x91BF;

    /**
     * Accepted by the $pname parameter of GetProgramiv.
     *
     * @since 4.3
     * @var int 
    */
    public const GL_COMPUTE_WORK_GROUP_SIZE = 0x8267;

    /**
     * Accepted by the $pname parameter of GetActiveUniformBlockiv.
     *
     * @since 4.3
     * @var int 
    */
    public const GL_UNIFORM_BLOCK_REFERENCED_BY_COMPUTE_SHADER = 0x90EC;

    /**
     * Accepted by the $pname parameter of GetActiveAtomicCounterBufferiv.
     *
     * @since 4.3
     * @var int 
    */
    public const GL_ATOMIC_COUNTER_BUFFER_REFERENCED_BY_COMPUTE_SHADER = 0x90ED;

    /**
     * Accepted by the $target parameters of BindBuffer, BufferData, BufferSubData, MapBuffer, UnmapBuffer,
     * GetBufferSubData, and GetBufferPointerv.
     *
     * @since 4.3
     * @var int 
    */
    public const GL_DISPATCH_INDIRECT_BUFFER = 0x90EE;

    /**
     * Accepted by the $value parameter of GetIntegerv, GetBooleanv, GetInteger64v, GetFloatv, and GetDoublev.
     *
     * @since 4.3
     * @var int 
    */
    public const GL_DISPATCH_INDIRECT_BUFFER_BINDING = 0x90EF;

    /**
     * Accepted by the $stages parameter of UseProgramStages.
     *
     * @since 4.3
     * @var int 
    */
    public const GL_COMPUTE_SHADER_BIT = 0x20;

    /**
     * Tokens accepted by the $target parameters of Enable, Disable, and  IsEnabled.
     *
     * @since 4.3
     * @var int 
    */
    public const
        GL_DEBUG_OUTPUT             = 0x92E0,
        GL_DEBUG_OUTPUT_SYNCHRONOUS = 0x8242;

    /**
     * Returned by GetIntegerv when $pname is CONTEXT_FLAGS.
     *
     * @since 4.3
     * @var int 
    */
    public const GL_CONTEXT_FLAG_DEBUG_BIT = 0x2;

    /**
     * Tokens accepted by the $value parameters of GetBooleanv, GetIntegerv,  GetFloatv, GetDoublev and
     * GetInteger64v.
     *
     * @since 4.3
     * @var int 
    */
    public const
        GL_MAX_DEBUG_MESSAGE_LENGTH         = 0x9143,
        GL_MAX_DEBUG_LOGGED_MESSAGES        = 0x9144,
        GL_DEBUG_LOGGED_MESSAGES            = 0x9145,
        GL_DEBUG_NEXT_LOGGED_MESSAGE_LENGTH = 0x8243,
        GL_MAX_DEBUG_GROUP_STACK_DEPTH      = 0x826C,
        GL_DEBUG_GROUP_STACK_DEPTH          = 0x826D,
        GL_MAX_LABEL_LENGTH                 = 0x82E8;

    /**
     * Tokens accepted by the $pname parameter of GetPointerv.
     *
     * @since 4.3
     * @var int 
    */
    public const
        GL_DEBUG_CALLBACK_FUNCTION   = 0x8244,
        GL_DEBUG_CALLBACK_USER_PARAM = 0x8245;

    /**
     * Tokens accepted or provided by the $source parameters of DebugMessageControl, DebugMessageInsert and
     * DEBUGPROC, and the $sources parameter
     * of GetDebugMessageLog.
     *
     * @since 4.3
     * @var int 
    */
    public const
        GL_DEBUG_SOURCE_API             = 0x8246,
        GL_DEBUG_SOURCE_WINDOW_SYSTEM   = 0x8247,
        GL_DEBUG_SOURCE_SHADER_COMPILER = 0x8248,
        GL_DEBUG_SOURCE_THIRD_PARTY     = 0x8249,
        GL_DEBUG_SOURCE_APPLICATION     = 0x824A,
        GL_DEBUG_SOURCE_OTHER           = 0x824B;

    /**
     * Tokens accepted or provided by the $type parameters of DebugMessageControl, DebugMessageInsert and
     * DEBUGPROC, and the $types parameter of GetDebugMessageLog.
     *
     * @since 4.3
     * @var int 
    */
    public const
        GL_DEBUG_TYPE_ERROR               = 0x824C,
        GL_DEBUG_TYPE_DEPRECATED_BEHAVIOR = 0x824D,
        GL_DEBUG_TYPE_UNDEFINED_BEHAVIOR  = 0x824E,
        GL_DEBUG_TYPE_PORTABILITY         = 0x824F,
        GL_DEBUG_TYPE_PERFORMANCE         = 0x8250,
        GL_DEBUG_TYPE_OTHER               = 0x8251,
        GL_DEBUG_TYPE_MARKER              = 0x8268;

    /**
     * Tokens accepted or provided by the $type parameters of DebugMessageControl and DEBUGPROC, and the
     * $types parameter of GetDebugMessageLog.
     *
     * @since 4.3
     * @var int 
    */
    public const
        GL_DEBUG_TYPE_PUSH_GROUP = 0x8269,
        GL_DEBUG_TYPE_POP_GROUP  = 0x826A;

    /**
     * Tokens accepted or provided by the $severity parameters of DebugMessageControl, DebugMessageInsert and
     * DEBUGPROC callback functions, and the
     * $severities parameter of GetDebugMessageLog.
     *
     * @since 4.3
     * @var int 
    */
    public const
        GL_DEBUG_SEVERITY_HIGH         = 0x9146,
        GL_DEBUG_SEVERITY_MEDIUM       = 0x9147,
        GL_DEBUG_SEVERITY_LOW          = 0x9148,
        GL_DEBUG_SEVERITY_NOTIFICATION = 0x826B;

    /**
     * Tokens accepted or provided by the $identifier parameters of ObjectLabel and GetObjectLabel.
     *
     * @since 4.3
     * @var int 
    */
    public const
        GL_BUFFER           = 0x82E0,
        GL_SHADER           = 0x82E1,
        GL_PROGRAM          = 0x82E2,
        GL_QUERY            = 0x82E3,
        GL_PROGRAM_PIPELINE = 0x82E4,
        GL_SAMPLER          = 0x82E6,
        GL_DISPLAY_LIST     = 0x82E7;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetIntegerv, GetFloatv, GetDoublev, and GetInteger64v.
     *
     * @since 4.3
     * @var int 
    */
    public const GL_MAX_UNIFORM_LOCATIONS = 0x826E;

    /**
     * Accepted by the $pname parameter of FramebufferParameteri, GetFramebufferParameteriv,
     * NamedFramebufferParameteriEXT, and GetNamedFramebufferParameterivEXT.
     *
     * @since 4.3
     * @var int 
    */
    public const
        GL_FRAMEBUFFER_DEFAULT_WIDTH                  = 0x9310,
        GL_FRAMEBUFFER_DEFAULT_HEIGHT                 = 0x9311,
        GL_FRAMEBUFFER_DEFAULT_LAYERS                 = 0x9312,
        GL_FRAMEBUFFER_DEFAULT_SAMPLES                = 0x9313,
        GL_FRAMEBUFFER_DEFAULT_FIXED_SAMPLE_LOCATIONS = 0x9314;

    /**
     * Accepted by the $pname parameter of GetIntegerv, GetBooleanv, GetInteger64v, GetFloatv, and GetDoublev.
     *
     * @since 4.3
     * @var int 
    */
    public const
        GL_MAX_FRAMEBUFFER_WIDTH   = 0x9315,
        GL_MAX_FRAMEBUFFER_HEIGHT  = 0x9316,
        GL_MAX_FRAMEBUFFER_LAYERS  = 0x9317,
        GL_MAX_FRAMEBUFFER_SAMPLES = 0x9318;

    /**
     * Accepted by the $pname parameter of GetInternalformativ and GetInternalformati64v.
     *
     * @since 4.3
     * @var int 
    */
    public const
        GL_INTERNALFORMAT_SUPPORTED               = 0x826F,
        GL_INTERNALFORMAT_PREFERRED               = 0x8270,
        GL_INTERNALFORMAT_RED_SIZE                = 0x8271,
        GL_INTERNALFORMAT_GREEN_SIZE              = 0x8272,
        GL_INTERNALFORMAT_BLUE_SIZE               = 0x8273,
        GL_INTERNALFORMAT_ALPHA_SIZE              = 0x8274,
        GL_INTERNALFORMAT_DEPTH_SIZE              = 0x8275,
        GL_INTERNALFORMAT_STENCIL_SIZE            = 0x8276,
        GL_INTERNALFORMAT_SHARED_SIZE             = 0x8277,
        GL_INTERNALFORMAT_RED_TYPE                = 0x8278,
        GL_INTERNALFORMAT_GREEN_TYPE              = 0x8279,
        GL_INTERNALFORMAT_BLUE_TYPE               = 0x827A,
        GL_INTERNALFORMAT_ALPHA_TYPE              = 0x827B,
        GL_INTERNALFORMAT_DEPTH_TYPE              = 0x827C,
        GL_INTERNALFORMAT_STENCIL_TYPE            = 0x827D,
        GL_MAX_WIDTH                              = 0x827E,
        GL_MAX_HEIGHT                             = 0x827F,
        GL_MAX_DEPTH                              = 0x8280,
        GL_MAX_LAYERS                             = 0x8281,
        GL_MAX_COMBINED_DIMENSIONS                = 0x8282,
        GL_COLOR_COMPONENTS                       = 0x8283,
        GL_DEPTH_COMPONENTS                       = 0x8284,
        GL_STENCIL_COMPONENTS                     = 0x8285,
        GL_COLOR_RENDERABLE                       = 0x8286,
        GL_DEPTH_RENDERABLE                       = 0x8287,
        GL_STENCIL_RENDERABLE                     = 0x8288,
        GL_FRAMEBUFFER_RENDERABLE                 = 0x8289,
        GL_FRAMEBUFFER_RENDERABLE_LAYERED         = 0x828A,
        GL_FRAMEBUFFER_BLEND                      = 0x828B,
        GL_READ_PIXELS                            = 0x828C,
        GL_READ_PIXELS_FORMAT                     = 0x828D,
        GL_READ_PIXELS_TYPE                       = 0x828E,
        GL_TEXTURE_IMAGE_FORMAT                   = 0x828F,
        GL_TEXTURE_IMAGE_TYPE                     = 0x8290,
        GL_GET_TEXTURE_IMAGE_FORMAT               = 0x8291,
        GL_GET_TEXTURE_IMAGE_TYPE                 = 0x8292,
        GL_MIPMAP                                 = 0x8293,
        GL_MANUAL_GENERATE_MIPMAP                 = 0x8294,
        GL_AUTO_GENERATE_MIPMAP                   = 0x8295,
        GL_COLOR_ENCODING                         = 0x8296,
        GL_SRGB_READ                              = 0x8297,
        GL_SRGB_WRITE                             = 0x8298,
        GL_FILTER                                 = 0x829A,
        GL_VERTEX_TEXTURE                         = 0x829B,
        GL_TESS_CONTROL_TEXTURE                   = 0x829C,
        GL_TESS_EVALUATION_TEXTURE                = 0x829D,
        GL_GEOMETRY_TEXTURE                       = 0x829E,
        GL_FRAGMENT_TEXTURE                       = 0x829F,
        GL_COMPUTE_TEXTURE                        = 0x82A0,
        GL_TEXTURE_SHADOW                         = 0x82A1,
        GL_TEXTURE_GATHER                         = 0x82A2,
        GL_TEXTURE_GATHER_SHADOW                  = 0x82A3,
        GL_SHADER_IMAGE_LOAD                      = 0x82A4,
        GL_SHADER_IMAGE_STORE                     = 0x82A5,
        GL_SHADER_IMAGE_ATOMIC                    = 0x82A6,
        GL_IMAGE_TEXEL_SIZE                       = 0x82A7,
        GL_IMAGE_COMPATIBILITY_CLASS              = 0x82A8,
        GL_IMAGE_PIXEL_FORMAT                     = 0x82A9,
        GL_IMAGE_PIXEL_TYPE                       = 0x82AA,
        GL_SIMULTANEOUS_TEXTURE_AND_DEPTH_TEST    = 0x82AC,
        GL_SIMULTANEOUS_TEXTURE_AND_STENCIL_TEST  = 0x82AD,
        GL_SIMULTANEOUS_TEXTURE_AND_DEPTH_WRITE   = 0x82AE,
        GL_SIMULTANEOUS_TEXTURE_AND_STENCIL_WRITE = 0x82AF,
        GL_TEXTURE_COMPRESSED_BLOCK_WIDTH         = 0x82B1,
        GL_TEXTURE_COMPRESSED_BLOCK_HEIGHT        = 0x82B2,
        GL_TEXTURE_COMPRESSED_BLOCK_SIZE          = 0x82B3,
        GL_CLEAR_BUFFER                           = 0x82B4,
        GL_TEXTURE_VIEW                           = 0x82B5,
        GL_VIEW_COMPATIBILITY_CLASS               = 0x82B6;

    /**
     * Returned as possible responses for various $pname queries to GetInternalformativ and GetInternalformati64v.
     *
     * @since 4.3
     * @var int 
    */
    public const
        GL_FULL_SUPPORT              = 0x82B7,
        GL_CAVEAT_SUPPORT            = 0x82B8,
        GL_IMAGE_CLASS_4_X_32        = 0x82B9,
        GL_IMAGE_CLASS_2_X_32        = 0x82BA,
        GL_IMAGE_CLASS_1_X_32        = 0x82BB,
        GL_IMAGE_CLASS_4_X_16        = 0x82BC,
        GL_IMAGE_CLASS_2_X_16        = 0x82BD,
        GL_IMAGE_CLASS_1_X_16        = 0x82BE,
        GL_IMAGE_CLASS_4_X_8         = 0x82BF,
        GL_IMAGE_CLASS_2_X_8         = 0x82C0,
        GL_IMAGE_CLASS_1_X_8         = 0x82C1,
        GL_IMAGE_CLASS_11_11_10      = 0x82C2,
        GL_IMAGE_CLASS_10_10_10_2    = 0x82C3,
        GL_VIEW_CLASS_128_BITS       = 0x82C4,
        GL_VIEW_CLASS_96_BITS        = 0x82C5,
        GL_VIEW_CLASS_64_BITS        = 0x82C6,
        GL_VIEW_CLASS_48_BITS        = 0x82C7,
        GL_VIEW_CLASS_32_BITS        = 0x82C8,
        GL_VIEW_CLASS_24_BITS        = 0x82C9,
        GL_VIEW_CLASS_16_BITS        = 0x82CA,
        GL_VIEW_CLASS_8_BITS         = 0x82CB,
        GL_VIEW_CLASS_S3TC_DXT1_RGB  = 0x82CC,
        GL_VIEW_CLASS_S3TC_DXT1_RGBA = 0x82CD,
        GL_VIEW_CLASS_S3TC_DXT3_RGBA = 0x82CE,
        GL_VIEW_CLASS_S3TC_DXT5_RGBA = 0x82CF,
        GL_VIEW_CLASS_RGTC1_RED      = 0x82D0,
        GL_VIEW_CLASS_RGTC2_RG       = 0x82D1,
        GL_VIEW_CLASS_BPTC_UNORM     = 0x82D2,
        GL_VIEW_CLASS_BPTC_FLOAT     = 0x82D3;

    /**
     * Accepted by the $programInterface parameter of GetProgramInterfaceiv, GetProgramResourceIndex,
     * GetProgramResourceName, GetProgramResourceiv, GetProgramResourceLocation, and GetProgramResourceLocationIndex.
     *
     * @since 4.3
     * @var int 
    */
    public const
        GL_UNIFORM                            = 0x92E1,
        GL_UNIFORM_BLOCK                      = 0x92E2,
        GL_PROGRAM_INPUT                      = 0x92E3,
        GL_PROGRAM_OUTPUT                     = 0x92E4,
        GL_BUFFER_VARIABLE                    = 0x92E5,
        GL_SHADER_STORAGE_BLOCK               = 0x92E6,
        GL_VERTEX_SUBROUTINE                  = 0x92E8,
        GL_TESS_CONTROL_SUBROUTINE            = 0x92E9,
        GL_TESS_EVALUATION_SUBROUTINE         = 0x92EA,
        GL_GEOMETRY_SUBROUTINE                = 0x92EB,
        GL_FRAGMENT_SUBROUTINE                = 0x92EC,
        GL_COMPUTE_SUBROUTINE                 = 0x92ED,
        GL_VERTEX_SUBROUTINE_UNIFORM          = 0x92EE,
        GL_TESS_CONTROL_SUBROUTINE_UNIFORM    = 0x92EF,
        GL_TESS_EVALUATION_SUBROUTINE_UNIFORM = 0x92F0,
        GL_GEOMETRY_SUBROUTINE_UNIFORM        = 0x92F1,
        GL_FRAGMENT_SUBROUTINE_UNIFORM        = 0x92F2,
        GL_COMPUTE_SUBROUTINE_UNIFORM         = 0x92F3,
        GL_TRANSFORM_FEEDBACK_VARYING         = 0x92F4;

    /**
     * Accepted by the $pname parameter of GetProgramInterfaceiv.
     *
     * @since 4.3
     * @var int 
    */
    public const
        GL_ACTIVE_RESOURCES               = 0x92F5,
        GL_MAX_NAME_LENGTH                = 0x92F6,
        GL_MAX_NUM_ACTIVE_VARIABLES       = 0x92F7,
        GL_MAX_NUM_COMPATIBLE_SUBROUTINES = 0x92F8;

    /**
     * Accepted in the $props array of GetProgramResourceiv.
     *
     * @since 4.3
     * @var int 
    */
    public const
        GL_NAME_LENGTH                          = 0x92F9,
        GL_TYPE                                 = 0x92FA,
        GL_ARRAY_SIZE                           = 0x92FB,
        GL_OFFSET                               = 0x92FC,
        GL_BLOCK_INDEX                          = 0x92FD,
        GL_ARRAY_STRIDE                         = 0x92FE,
        GL_MATRIX_STRIDE                        = 0x92FF,
        GL_IS_ROW_MAJOR                         = 0x9300,
        GL_ATOMIC_COUNTER_BUFFER_INDEX          = 0x9301,
        GL_BUFFER_BINDING                       = 0x9302,
        GL_BUFFER_DATA_SIZE                     = 0x9303,
        GL_NUM_ACTIVE_VARIABLES                 = 0x9304,
        GL_ACTIVE_VARIABLES                     = 0x9305,
        GL_REFERENCED_BY_VERTEX_SHADER          = 0x9306,
        GL_REFERENCED_BY_TESS_CONTROL_SHADER    = 0x9307,
        GL_REFERENCED_BY_TESS_EVALUATION_SHADER = 0x9308,
        GL_REFERENCED_BY_GEOMETRY_SHADER        = 0x9309,
        GL_REFERENCED_BY_FRAGMENT_SHADER        = 0x930A,
        GL_REFERENCED_BY_COMPUTE_SHADER         = 0x930B,
        GL_TOP_LEVEL_ARRAY_SIZE                 = 0x930C,
        GL_TOP_LEVEL_ARRAY_STRIDE               = 0x930D,
        GL_LOCATION                             = 0x930E,
        GL_LOCATION_INDEX                       = 0x930F,
        GL_IS_PER_PATCH                         = 0x92E7;

    /**
     * Accepted by the $target parameters of BindBuffer, BufferData, BufferSubData, MapBuffer, UnmapBuffer, GetBufferSubData, and GetBufferPointerv.
     *
     * @since 4.3
     * @var int 
    */
    public const GL_SHADER_STORAGE_BUFFER = 0x90D2;

    /**
     * Accepted by the $pname parameter of GetIntegerv, GetIntegeri_v, GetBooleanv, GetInteger64v, GetFloatv,
     * GetDoublev, GetBooleani_v, GetIntegeri_v, GetFloati_v, GetDoublei_v, and GetInteger64i_v.
     *
     * @since 4.3
     * @var int 
    */
    public const GL_SHADER_STORAGE_BUFFER_BINDING = 0x90D3;

    /**
     * Accepted by the $pname parameter of GetIntegeri_v, GetBooleani_v, GetIntegeri_v, GetFloati_v,
     * GetDoublei_v, and GetInteger64i_v.
     *
     * @since 4.3
     * @var int 
    */
    public const
        GL_SHADER_STORAGE_BUFFER_START = 0x90D4,
        GL_SHADER_STORAGE_BUFFER_SIZE  = 0x90D5;

    /**
     * Accepted by the $pname parameter of GetIntegerv, GetBooleanv, GetInteger64v, GetFloatv, and GetDoublev.
     *
     * @since 4.3
     * @var int 
    */
    public const
        GL_MAX_VERTEX_SHADER_STORAGE_BLOCKS          = 0x90D6,
        GL_MAX_GEOMETRY_SHADER_STORAGE_BLOCKS        = 0x90D7,
        GL_MAX_TESS_CONTROL_SHADER_STORAGE_BLOCKS    = 0x90D8,
        GL_MAX_TESS_EVALUATION_SHADER_STORAGE_BLOCKS = 0x90D9,
        GL_MAX_FRAGMENT_SHADER_STORAGE_BLOCKS        = 0x90DA,
        GL_MAX_COMPUTE_SHADER_STORAGE_BLOCKS         = 0x90DB,
        GL_MAX_COMBINED_SHADER_STORAGE_BLOCKS        = 0x90DC,
        GL_MAX_SHADER_STORAGE_BUFFER_BINDINGS        = 0x90DD,
        GL_MAX_SHADER_STORAGE_BLOCK_SIZE             = 0x90DE,
        GL_SHADER_STORAGE_BUFFER_OFFSET_ALIGNMENT    = 0x90DF;

    /**
     * Accepted in the $barriers bitfield in glMemoryBarrier.
     *
     * @since 4.3
     * @var int 
    */
    public const GL_SHADER_STORAGE_BARRIER_BIT = 0x2000;

    /**
     * Alias for the existing token MAX_COMBINED_IMAGE_UNITS_AND_FRAGMENT_OUTPUTS.
     *
     * @since 4.3
     * @var int 
    */
    public const GL_MAX_COMBINED_SHADER_OUTPUT_RESOURCES = 0x8F39;

    /**
     * Accepted by the $pname parameter of TexParameter* and GetTexParameter*.
     *
     * @since 4.3
     * @var int 
    */
    public const GL_DEPTH_STENCIL_TEXTURE_MODE = 0x90EA;

    /**
     * Accepted by the $pname parameter of GetTexLevelParameter.
     *
     * @since 4.3
     * @var int 
    */
    public const
        GL_TEXTURE_BUFFER_OFFSET = 0x919D,
        GL_TEXTURE_BUFFER_SIZE   = 0x919E;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetIntegerv, GetFloatv, and GetDoublev.
     *
     * @since 4.3
     * @var int 
    */
    public const GL_TEXTURE_BUFFER_OFFSET_ALIGNMENT = 0x919F;

    /**
     * Accepted by the $pname parameters of GetTexParameterfv and  GetTexParameteriv.
     *
     * @since 4.3
     * @var int 
    */
    public const
        GL_TEXTURE_VIEW_MIN_LEVEL  = 0x82DB,
        GL_TEXTURE_VIEW_NUM_LEVELS = 0x82DC,
        GL_TEXTURE_VIEW_MIN_LAYER  = 0x82DD,
        GL_TEXTURE_VIEW_NUM_LAYERS = 0x82DE;

    /**
     * Accepted by the $pname parameter of GetVertexAttrib*v.
     *
     * @since 4.3
     * @var int 
    */
    public const
        GL_VERTEX_ATTRIB_BINDING         = 0x82D4,
        GL_VERTEX_ATTRIB_RELATIVE_OFFSET = 0x82D5;

    /**
     * Accepted by the $target parameter of GetBooleani_v, GetIntegeri_v, GetFloati_v, GetDoublei_v, and GetInteger64i_v.
     *
     * @since 4.3
     * @var int 
    */
    public const
        GL_VERTEX_BINDING_DIVISOR = 0x82D6,
        GL_VERTEX_BINDING_OFFSET  = 0x82D7,
        GL_VERTEX_BINDING_STRIDE  = 0x82D8,
        GL_VERTEX_BINDING_BUFFER  = 0x8F4F;

    /**
     * Accepted by the $pname parameter of GetIntegerv, ....
     *
     * @since 4.3
     * @var int 
    */
    public const
        GL_MAX_VERTEX_ATTRIB_RELATIVE_OFFSET = 0x82D9,
        GL_MAX_VERTEX_ATTRIB_BINDINGS        = 0x82DA;

    /**
     * {@see GL43::bindVertexBuffer} and {@see GL43::vertexArrayVertexBuffer} bind the buffer named $buffer to
     * the vertex buffer binding point whose index is given by $bindingindex. {@see GL43::bindVertexBuffer}
     * modifies the binding of the currently bound vertex array object, whereas
     * {@see GL43::vertexArrayVertexBuffer} allows the caller to specify ID of the vertex array object with an
     * argument named $vaobj, for which the binding should be modified. $offset and $stride specify the offset of the
     * first element within the buffer and the distance between elements within the buffer, respectively, and are
     * both measured in basic machine units. $bindingindex must be less than the value of
     * {@see GL43::GL_MAX_VERTEX_ATTRIB_BINDINGS}. $offset and $stride must be greater than or equal to zero. If
     * $buffer is zero, then any buffer currently bound to the specified binding point is unbound.
     *
     * If $buffer is not the name of an existing buffer object, the GL first creates a new state vector, initialized
     * with a zero-sized memory buffer and comprising all the state and with the same initial values as in case of
     * {@see GL43::bindBuffer}. $buffer is then attached to the specified $bindingindex of the vertex array object.
     *
     * @see http://docs.gl/gl4/glBindVertexBuffer
     * @since 4.3
     * @param int $bindingIndex
     * @param int $buffer
     * @param int $offset
     * @param int $stride
     * @return void
     */
    public function bindVertexBuffer(int $bindingIndex, int $buffer, int $offset, int $stride): void
    {
        $__proc = $this->proc('glBindVertexBuffer', 'void (*)(GLuint bindingindex, GLuint buffer, GLintptr offset, GLsizei stride)');
        $__proc($bindingIndex, $buffer, $offset, $stride);
    }

    /**
     * {@see GL43::clearBufferData} and {@see GL43::clearNamedBufferData} fill the entirety of a buffer object's
     * data store with data from client memory.
     *
     * Data, initially supplied in a format specified by $format in data type $type is read from the memory address
     * given by $data and converted into the internal representation given by $internalformat, which must be one of
     * the following sized internal formats:
     *
     * | {@see GL43::GL_R8}       | ubyte  | 1 | YES | R | 0 | 0 | 1 |
     * | {@see GL43::GL_R16}      | ushort | 1 | YES | R | 0 | 0 | 1 |
     * | {@see GL43::GL_R16F}     | half   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL43::GL_R32F}     | float  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL43::GL_R8I}      | byte   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL43::GL_R16I}     | short  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL43::GL_R32I}     | int    | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL43::GL_R8UI}     | ubyte  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL43::GL_R16UI}    | ushort | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL43::GL_R32UI}    | uint   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL43::GL_RG8}      | ubyte  | 2 | YES | R | G | 0 | 1 |
     * | {@see GL43::GL_RG16}     | ushort | 2 | YES | R | G | 0 | 1 |
     * | {@see GL43::GL_RG16F}    | half   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL43::GL_RG32F}    | float  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL43::GL_RG8I}     | byte   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL43::GL_RG16I}    | short  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL43::GL_RG32I}    | int    | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL43::GL_RG8UI}    | ubyte  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL43::GL_RG16UI}   | ushort | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL43::GL_RG32UI}   | uint   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL43::GL_RGB32F}   | float  | 3 | NO  | R | G | B | 1 |
     * | {@see GL43::GL_RGB32I}   | int    | 3 | NO  | R | G | B | 1 |
     * | {@see GL43::GL_RGB32UI}  | uint   | 3 | NO  | R | G | B | 1 |
     * | {@see GL43::GL_RGBA8}    | uint   | 4 | YES | R | G | B | A |
     * | {@see GL43::GL_RGBA16}   | short  | 4 | YES | R | G | B | A |
     * | {@see GL43::GL_RGBA16F}  | half   | 4 | NO  | R | G | B | A |
     * | {@see GL43::GL_RGBA32F}  | float  | 4 | NO  | R | G | B | A |
     * | {@see GL43::GL_RGBA8I}   | byte   | 4 | NO  | R | G | B | A |
     * | {@see GL43::GL_RGBA16I}  | short  | 4 | NO  | R | G | B | A |
     * | {@see GL43::GL_RGBA32I}  | int    | 4 | NO  | R | G | B | A |
     * | {@see GL43::GL_RGBA8UI}  | ubyte  | 4 | NO  | R | G | B | A |
     * | {@see GL43::GL_RGBA16UI} | ushort | 4 | NO  | R | G | B | A |
     * | {@see GL43::GL_RGBA32UI} | uint   | 4 | NO  | R | G | B | A |
     *
     * This converted data is then replicated throughout the buffer object's data store. If $data is NULL, then the
     * buffer's data store is filled with zeros.
     *
     * @see http://docs.gl/gl4/glClearBufferData
     * @since 4.3
     * @param int $target
     * @param int $internalFormat
     * @param int $format
     * @param int $type
     * @param CData|null $data
     * @return void
     */
    public function clearBufferData(int $target, int $internalFormat, int $format, int $type, ?CData $data): void
    {
        $__proc = $this->proc('glClearBufferData', 'void (*)(GLenum target, GLenum internalformat, GLenum format, GLenum type, const void *data)');
        $__proc($target, $internalFormat, $format, $type, $data);
    }

    /**
     * {@see GL43::clearBufferSubData} and {@see GL43::clearNamedBufferSubData} fill a specified region of a
     * buffer object's data store with data from client memory.
     *
     * $offset and $size specify the extent of the region within the data store of the buffer object to fill with
     * data. Data, initially supplied in a format specified by $format in data type $type is read from the memory
     * address given by $data and converted into the internal representation given by $internalformat, which must be
     * one of the following sized internal formats:
     *
     * | {@see GL43::GL_R8}       | ubyte  | 1 | YES | R | 0 | 0 | 1 |
     * | {@see GL43::GL_R16}      | ushort | 1 | YES | R | 0 | 0 | 1 |
     * | {@see GL43::GL_R16F}     | half   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL43::GL_R32F}     | float  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL43::GL_R8I}      | byte   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL43::GL_R16I}     | short  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL43::GL_R32I}     | int    | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL43::GL_R8UI}     | ubyte  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL43::GL_R16UI}    | ushort | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL43::GL_R32UI}    | uint   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL43::GL_RG8}      | ubyte  | 2 | YES | R | G | 0 | 1 |
     * | {@see GL43::GL_RG16}     | ushort | 2 | YES | R | G | 0 | 1 |
     * | {@see GL43::GL_RG16F}    | half   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL43::GL_RG32F}    | float  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL43::GL_RG8I}     | byte   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL43::GL_RG16I}    | short  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL43::GL_RG32I}    | int    | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL43::GL_RG8UI}    | ubyte  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL43::GL_RG16UI}   | ushort | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL43::GL_RG32UI}   | uint   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL43::GL_RGB32F}   | float  | 3 | NO  | R | G | B | 1 |
     * | {@see GL43::GL_RGB32I}   | int    | 3 | NO  | R | G | B | 1 |
     * | {@see GL43::GL_RGB32UI}  | uint   | 3 | NO  | R | G | B | 1 |
     * | {@see GL43::GL_RGBA8}    | uint   | 4 | YES | R | G | B | A |
     * | {@see GL43::GL_RGBA16}   | short  | 4 | YES | R | G | B | A |
     * | {@see GL43::GL_RGBA16F}  | half   | 4 | NO  | R | G | B | A |
     * | {@see GL43::GL_RGBA32F}  | float  | 4 | NO  | R | G | B | A |
     * | {@see GL43::GL_RGBA8I}   | byte   | 4 | NO  | R | G | B | A |
     * | {@see GL43::GL_RGBA16I}  | short  | 4 | NO  | R | G | B | A |
     * | {@see GL43::GL_RGBA32I}  | int    | 4 | NO  | R | G | B | A |
     * | {@see GL43::GL_RGBA8UI}  | ubyte  | 4 | NO  | R | G | B | A |
     * | {@see GL43::GL_RGBA16UI} | ushort | 4 | NO  | R | G | B | A |
     * | {@see GL43::GL_RGBA32UI} | uint   | 4 | NO  | R | G | B | A |
     *
     * This converted data is then replicated throughout the specified region of the buffer object's data store. If
     * $data is NULL, then the subrange of the buffer's data store is filled with zeros.
     *
     * @see http://docs.gl/gl4/glClearBufferSubData
     * @since 4.3
     * @param int $target
     * @param int $internalformat
     * @param int $offset
     * @param int $size
     * @param int $format
     * @param int $type
     * @param CData|null $data
     * @return void
     */
    public function clearBufferSubData(int $target, int $internalformat, int $offset, int $size, int $format, int $type, ?CData $data): void
    {
        $__proc = $this->proc('glClearBufferSubData', 'void (*)(GLenum target, GLenum internalformat, GLintptr offset, GLsizeiptr size, GLenum format, GLenum type, const void *data)');
        $__proc($target, $internalformat, $offset, $size, $format, $type, $data);
    }

    /**
     * {@see GL43::copyImageSubData} may be used to copy data from one image (i.e. texture or renderbuffer) to
     * another. {@see GL43::copyImageSubData} does not perform general-purpose conversions such as scaling,
     * resizing, blending, color-space, or format conversions. It should be considered to operate in a manner similar
     * to a CPU memcpy. CopyImageSubData can copy between images with different internal formats, provided the
     * formats are compatible.
     *
     * {@see GL43::copyImageSubData} also allows copying between certain types of compressed and uncompressed
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
     * parameter. If $target is {@see GL43::GL_RENDERBUFFER}, the name is interpreted as the name of a renderbuffer
     * object. If the target parameter is a texture target, the name is interpreted as a texture object. All
     * non-proxy texture targets are accepted, with the exception of {@see GL43::GL_TEXTURE_BUFFER} and the cubemap
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
     * Slices of a {@see GL43::GL_TEXTURE_1D_ARRAY}, {@see GL43::GL_TEXTURE_2D_ARRAY},
     * {@see GL43::GL_TEXTURE_CUBE_MAP_ARRAY} {@see GL43::GL_TEXTURE_3D} and faces of
     * {@see GL43::GL_TEXTURE_CUBE_MAP} are all compatible provided they share a compatible internal format, and
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
     * | 64-bit  | {@see GL43::GL_RGBA32UI}, {@see GL43::GL_RGBA32I}, {@see GL43::GL_RGBA32F}                                                                                                                             | {@see GL43::GL_COMPRESSED_RGBA_S3TC_DXT3_EXT}, {@see GL43::GL_COMPRESSED_SRGB_ALPHA_S3TC_DXT3_EXT},
     * {@see GL43::GL_COMPRESSED_RGBA_S3TC_DXT5_EXT}, {@see GL43::GL_COMPRESSED_SRGB_ALPHA_S3TC_DXT5_EXT},
     * {@see GL43::GL_COMPRESSED_RG_RGTC2}, {@see GL43::GL_COMPRESSED_SIGNED_RG_RGTC2},
     * {@see GL43::GL_COMPRESSED_RGBA_BPTC_UNORM}, {@see GL43::GL_COMPRESSED_SRGB_ALPHA_BPTC_UNORM},
     * {@see GL43::GL_COMPRESSED_RGB_BPTC_SIGNED_FLOAT}, {@see GL43::GL_COMPRESSED_RGB_BPTC_UNSIGNED_FLOAT} |
     * | 128-bit | {@see GL43::GL_RGBA16UI}, {@see GL43::GL_RGBA16I}, {@see GL43::GL_RGBA16F}, {@see GL43::GL_RG32F},
     * {@see GL43::GL_RG32UI}, {@see GL43::GL_RG32I}, {@see GL43::GL_RGBA16}, {@see GL43::GL_RGBA16_SNORM} | {@see GL43::GL_COMPRESSED_RGB_S3TC_DXT1_EXT}, {@see GL43::GL_COMPRESSED_SRGB_S3TC_DXT1_EXT},
     * {@see GL43::GL_COMPRESSED_RGBA_S3TC_DXT1_EXT}, {@see GL43::GL_COMPRESSED_SRGB_ALPHA_S3TC_DXT1_EXT},
     * {@see GL43::GL_COMPRESSED_RED_RGTC1}, {@see GL43::GL_COMPRESSED_SIGNED_RED_RGTC1}                                                                                                                                                                                                          |
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
    public function copyImageSubData(
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
        $__proc = $this->proc('glCopyImageSubData', 'void (*)(GLuint srcName, GLenum srcTarget, GLint srcLevel, GLint srcX, GLint srcY, GLint srcZ, GLuint dstName, GLenum dstTarget, GLint dstLevel, GLint dstX, GLint dstY, GLint dstZ, GLsizei srcWidth, GLsizei srcHeight, GLsizei srcDepth)');
        $__proc($srcName, $srcTarget, $srcLevel, $srcX, $srcY, $srcZ, $dstName, $dstTarget, $dstLevel, $dstX, $dstY, $dstZ, $srcWidth, $srcHeight, $srcDepth);
    }

    /**
     * {@see GL43::debugMessageCallback} sets the current debug output callback function to the function whose
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
     * parameter to the most recent call to {@see GL43::debugMessageCallback}.
     *
     * @see http://docs.gl/gl4/glDebugMessageCallback
     * @since 4.3
     * @param callable|\Closure $callback
     * @param CData|null $userParam
     * @return void
     */
    public function debugMessageCallback(callable $callback, ?CData $userParam): void
    {
        $__proc = $this->proc('glDebugMessageCallback', 'void (*)(GLDEBUGPROC callback, const void *userParam)');
        $__proc($callback, $userParam);
    }

    /**
     * {@see GL43::debugMessageControl} controls the reporting of debug messages generated by a debug context. The
     * parameters $source, $type and $severity form a filter to select messages from the pool of potential messages
     * generated by the GL.
     *
     * $source may be {@see GL43::GL_DEBUG_SOURCE_API}, {@see GL43::GL_DEBUG_SOURCE_WINDOW_SYSTEM_},
     * {@see GL43::GL_DEBUG_SOURCE_SHADER_COMPILER}, {@see GL43::GL_DEBUG_SOURCE_THIRD_PARTY},
     * {@see GL43::GL_DEBUG_SOURCE_APPLICATION}, {@see GL43::GL_DEBUG_SOURCE_OTHER} to select messages generated by
     * usage of the GL API, the window system, the shader compiler, third party tools or libraries, explicitly by the
     * application or by some other source, respectively. It may also take the value {@see GL43::GL_DONT_CARE}. If
     * $source is not {@see GL43::GL_DONT_CARE} then only messages whose source matches $source will be referenced.
     *
     * $type may be one of {@see GL43::GL_DEBUG_TYPE_ERROR}, {@see GL43::GL_DEBUG_TYPE_DEPRECATED_BEHAVIOR},
     * {@see GL43::GL_DEBUG_TYPE_UNDEFINED_BEHAVIOR}, {@see GL43::GL_DEBUG_TYPE_PORTABILITY},
     * {@see GL43::GL_DEBUG_TYPE_PERFORMANCE}, {@see GL43::GL_DEBUG_TYPE_MARKER},
     * {@see GL43::GL_DEBUG_TYPE_PUSH_GROUP}, {@see GL43::GL_DEBUG_TYPE_POP_GROUP}, or
     * {@see GL43::GL_DEBUG_TYPE_OTHER} to indicate the type of messages describing GL errors, attempted use of
     * deprecated features, triggering of undefined behavior, portability issues, performance notifications, markers,
     * group push and pop events, and other types of messages, respectively. It may also take the value
     * {@see GL43::GL_DONT_CARE}. If $type is not {@see GL43::GL_DONT_CARE} then only messages whose type matches
     * $type will be referenced.
     *
     * $severity may be one of {@see GL43::GL_DEBUG_SEVERITY_LOW}, {@see GL43::GL_DEBUG_SEVERITY_MEDIUM}, or
     * {@see GL43::GL_DEBUG_SEVERITY_HIGH} to select messages of low, medium or high severity messages or to
     * {@see GL43::GL_DEBUG_SEVERITY_NOTIFICATION} for notifications. It may also take the value
     * {@see GL43::GL_DONT_CARE}. If $severity is not {@see GL43::GL_DONT_CARE} then only messages whose severity
     * matches $severity will be referenced.
     *
     * $ids contains a list of $count message identifiers to select specific messages from the pool of available
     * messages. If $count is zero then the value of $ids is ignored. Otherwise, only messages appearing in this list
     * are selected. In this case, $source and $type may not be {@see GL43::GL_DONT_CARE} and $severity must be
     * {@see GL43::GL_DONT_CARE}.
     *
     * If $enabled is {@see GL43::GL_TRUE} then messages that match the filter formed by $source, $type, $severity
     * and $ids are enabled. Otherwise, those messages are disabled.
     *
     * @see http://docs.gl/gl4/glDebugMessageControl
     * @since 4.3
     * @param int $source
     * @param int $type
     * @param int $severity
     * @param int $count
     * @param CData|null $ids
     * @param int $enabled
     * @return void
     */
    public function debugMessageControl(int $source, int $type, int $severity, int $count, ?CData $ids, int $enabled): void
    {
        $__proc = $this->proc('glDebugMessageControl', 'void (*)(GLenum source, GLenum type, GLenum severity, GLsizei count, const GLuint *ids, GLboolean enabled)');
        $__proc($source, $type, $severity, $count, $ids, $enabled);
    }

    /**
     * {@see GL43::debugMessageInsert} inserts a user-supplied message into the debug output queue. $source
     * specifies the source that will be used to classify the message and must be
     * {@see GL43::GL_DEBUG_SOURCE_APPLICATION} or {@see GL43::GL_DEBUG_SOURCE_THIRD_PARTY}. All other sources are
     * reserved for use by the GL implementation. $type indicates the type of the message to be inserted and may be
     * one of {@see GL43::GL_DEBUG_TYPE_ERROR}, {@see GL43::GL_DEBUG_TYPE_DEPRECATED_BEHAVIOR},
     * {@see GL43::GL_DEBUG_TYPE_UNDEFINED_BEHAVIOR}, {@see GL43::GL_DEBUG_TYPE_PORTABILITY},
     * {@see GL43::GL_DEBUG_TYPE_PERFORMANCE}, {@see GL43::GL_DEBUG_TYPE_MARKER},
     * {@see GL43::GL_DEBUG_TYPE_PUSH_GROUP}, {@see GL43::GL_DEBUG_TYPE_POP_GROUP}, or
     * {@see GL43::GL_DEBUG_TYPE_OTHER}. $severity indicates the severity of the message and may be
     * {@see GL43::GL_DEBUG_SEVERITY_LOW}, {@see GL43::GL_DEBUG_SEVERITY_MEDIUM}, {@see GL43::GL_DEBUG_SEVERITY_HIGH}
     * or {@see GL43::GL_DEBUG_SEVERITY_NOTIFICATION}. $id is available for application defined use and may be any
     * value. This value will be recorded and used to identify the message.
     *
     * $length contains a count of the characters in the character array whose address is given in $message. If
     * $length is negative then $message is treated as a null-terminated string. The length of the message, whether
     * specified explicitly or implicitly, must be less than or equal to the implementation defined constant
     * {@see GL43::GL_MAX_DEBUG_MESSAGE_LENGTH}.
     *
     * @see http://docs.gl/gl4/glDebugMessageInsert
     * @since 4.3
     * @param int $source
     * @param int $type
     * @param int $id
     * @param int $severity
     * @param int $length
     * @param CData|null $buf
     * @return void
     */
    public function debugMessageInsert(int $source, int $type, int $id, int $severity, int $length, ?CData $buf): void
    {
        $__proc = $this->proc('glDebugMessageInsert', 'void (*)(GLenum source, GLenum type, GLuint id, GLenum severity, GLsizei length, const GLchar *buf)');
        $__proc($source, $type, $id, $severity, $length, $buf);
    }

    /**
     * {@see GL43::dispatchCompute} launches one or more compute work groups. Each work group is processed by the
     * active program object for the compute shader stage. While the individual shader invocations within a work
     * group are executed as a unit, work groups are executed completely independently and in unspecified order.
     * $num_groups_x, $num_groups_y and $num_groups_z specify the number of local work groups that will be dispatched
     * in the X, Y and Z dimensions, respectively.
     *
     * @see http://docs.gl/gl4/glDispatchCompute
     * @since 4.3
     * @param int $num_groups_x
     * @param int $num_groups_y
     * @param int $num_groups_z
     * @return void
     */
    public function dispatchCompute(int $num_groups_x, int $num_groups_y, int $num_groups_z): void
    {
        $__proc = $this->proc('glDispatchCompute', 'void (*)(GLuint num_groups_x, GLuint num_groups_y, GLuint num_groups_z)');
        $__proc($num_groups_x, $num_groups_y, $num_groups_z);
    }

    /**
     * {@see GL43::dispatchComputeIndirect} launches one or more compute work groups using parameters stored in the
     * buffer object currently bound to the {@see GL43::GL_DISPATCH_INDIRECT_BUFFER} target. Each work group is
     * processed by the active program object for the compute shader stage. While the individual shader invocations
     * within a work group are executed as a unit, work groups are executed completely independently and in
     * unspecified order. $indirect contains the offset into the data store of the buffer object bound to the
     * {@see GL43::GL_DISPATCH_INDIRECT_BUFFER} target at which the parameters are stored.
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
     * A call to {@see GL43::dispatchComputeIndirect} is equivalent, assuming no errors are generated, to:
     *
     * <code>
     *     cmd = (const DispatchIndirectCommand  *)indirect;
     *     glDispatchCompute(cmd->num_groups_x, cmd->num_groups_y, cmd->num_groups_z);
     * </code>
     *
     * Unlike {@see GL43::dispatchCompute}, no error is generated if any of the `num_groups_x`, `num_groups_y` or
     * `num_groups_z` members of the `DispatchIndirectCommand` is larger than the value of
     * {@see GL43::GL_MAX_COMPUTE_WORK_GROUP_COUNT} for the corresponding dimension. In such circumstances, behavior
     * is undefined and may lead to application termination.
     *
     * @see http://docs.gl/gl4/glDispatchComputeIndirect
     * @since 4.3
     * @param int $indirect
     * @return void
     */
    public function dispatchComputeIndirect(int $indirect): void
    {
        $__proc = $this->proc('glDispatchComputeIndirect', 'void (*)(GLintptr indirect)');
        $__proc($indirect);
    }

    /**
     * {@see GL43::framebufferParameteri} and {@see GL43::namedFramebufferParameteri} modify the value of the
     * parameter named $pname in the specified framebuffer object. There are no modifiable parameters of the default
     * draw and read framebuffer, so they are not valid targets of these commands.
     *
     * For {@see GL43::framebufferParameteri}, the framebuffer object is that bound to $target, which must be
     * {@see GL43::GL_DRAW_FRAMEBUFFER}, {@see GL43::GL_READ_FRAMEBUFFER} or {@see GL43::GL_FRAMEBUFFER}.
     * {@see GL43::GL_FRAMEBUFFER} is equivalent to {@see GL43::GL_DRAW_FRAMEBUFFER}.
     *
     * For {@see GL43::namedFramebufferParameteri}, $framebuffer is the name of the framebuffer object.
     *
     * $pname specifies the parameter to be modified. The following values are accepted:
     *
     *  - {@see GL43::GL_FRAMEBUFFER_DEFAULT_WIDTH}: $param specifies the
     *    assumed with for a framebuffer object with no attachments. If a
     *    framebuffer has
     *    attachments then the width of those attachments is used, otherwise the
     *    value of
     *    {@see GL43::GL_FRAMEBUFFER_DEFAULT_WIDTH} is used for the framebuffer.
     *    $param must be greater than or equal to
     *    zero and less than or equal to the value of {@see
     *    GL43::GL_MAX_FRAMEBUFFER_WIDTH}.
     *
     *  - {@see GL43::GL_FRAMEBUFFER_DEFAULT_HEIGHT}: $param specifies the
     *    assumed height for a framebuffer object with no attachments. If a
     *    framebuffer has
     *    attachments then the height of those attachments is used, otherwise
     *    the value of
     *    {@see GL43::GL_FRAMEBUFFER_DEFAULT_HEIGHT} is used for the
     *    framebuffer. $param must be greater than or equal
     *    to zero and less than or equal to the value of {@see
     *    GL43::GL_MAX_FRAMEBUFFER_HEIGHT}.
     *
     *  - {@see GL43::GL_FRAMEBUFFER_DEFAULT_LAYERS}: $param specifies the
     *    assumed number of layers for a framebuffer object with no attachments.
     *    If a framebuffer
     *    has attachments then the layer count of those attachments is used,
     *    otherwise the value of
     *    {@see GL43::GL_FRAMEBUFFER_DEFAULT_LAYERS} is used for the
     *    framebuffer. $param must be greater than or equal
     *    to zero and less than or equal to the value of {@see
     *    GL43::GL_MAX_FRAMEBUFFER_LAYERS}.
     *
     *  - {@see GL43::GL_FRAMEBUFFER_DEFAULT_SAMPLES}: $param specifies the
     *    assumed number of samples in a framebuffer object with no attachments.
     *    If a framebuffer
     *    has attachments then the sample count of those attachments is used,
     *    otherwise the value of
     *    {@see GL43::GL_FRAMEBUFFER_DEFAULT_SAMPLES} is used for the
     *    framebuffer. $param must be greater than or equal
     *    to zero and less than or equal to the value of {@see
     *    GL43::GL_MAX_FRAMEBUFFER_SAMPLE}.
     *
     *  - {@see GL43::GL_FRAMEBUFFER_DEFAULT_FIXED_SAMPLE_LOCATIONS}: $param
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
     * @param int $target
     * @param int $pname
     * @param int $param
     * @return void
     */
    public function framebufferParameteri(int $target, int $pname, int $param): void
    {
        $__proc = $this->proc('glFramebufferParameteri', 'void (*)(GLenum target, GLenum pname, GLint param)');
        $__proc($target, $pname, $param);
    }

    /**
     * {@see GL43::getDebugMessageLog} retrieves messages from the debug message log. A maximum of $count messages
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
     * If {@see GL43::getDebugMessageLog} returns zero then no messages are present in the debug log, or there was
     * not enough space in $messageLog to retrieve the first message in the queue. If $messageLog is NULL then no
     * messages are written and the value of $bufSize is ignored.
     *
     * @see http://docs.gl/gl4/glGetDebugMessageLog
     * @since 4.3
     * @param int $count
     * @param int $bufSize
     * @param int|null $sources
     * @param int|null $types
     * @param int|null $ids
     * @param int|null $severities
     * @param int|null $lengths
     * @param string|null $messageLog
     * @return int
     */
    public function getDebugMessageLog(
        int $count,
        int $bufSize,
        ?int &$sources,
        ?int &$types,
        ?int &$ids,
        ?int &$severities,
        ?int &$lengths,
        ?string &$messageLog
    ): int {
        $sourcesCType = $this->info->ffi->new('GLenum', false);
        $typesCType = $this->info->ffi->new('GLenum', false);
        $idsCType = $this->info->ffi->new('GLuint', false);
        $severitiesCType = $this->info->ffi->new('GLenum', false);
        $lengthsCType = $this->info->ffi->new('GLsizei', false);
        $messageLogCType = \FFI::addr($this->info->ffi->new('GLchar[' . $bufSize . ']', false)[0]);
        try {
            $__proc = $this->proc('glGetDebugMessageLog', 'GLuint (*)(GLuint count, GLsizei bufSize, GLenum *sources, GLenum *types, GLuint *ids, GLenum *severities, GLsizei *lengths, GLchar *messageLog)');
            return $__proc($count, $bufSize, \FFI::addr($sourcesCType), \FFI::addr($typesCType), \FFI::addr($idsCType), \FFI::addr($severitiesCType), \FFI::addr($lengthsCType), $messageLogCType);
        } finally {
            $sources = $sourcesCType->cdata;
            \FFI::free($sourcesCType);
            $types = $typesCType->cdata;
            \FFI::free($typesCType);
            $ids = $idsCType->cdata;
            \FFI::free($idsCType);
            $severities = $severitiesCType->cdata;
            \FFI::free($severitiesCType);
            $lengths = $lengthsCType->cdata;
            \FFI::free($lengthsCType);
            $messageLog = \FFI::string($messageLogCType);
            \FFI::free($messageLogCType);
        }
    }

    /**
     * {@see GL43::getFramebufferParameteriv} and {@see GL43::getNamedFramebufferParameteriv} query parameters of
     * a specified framebuffer object.
     *
     * For {@see GL43::getFramebufferParameteriv}, the framebuffer object is that bound to $target, which must be
     * one of {@see GL43::GL_DRAW_FRAMEBUFFER}, {@see GL43::GL_READ_FRAMEBUFFER} or {@see GL43::GL_FRAMEBUFFER}.
     * {@see GL43::GL_FRAMEBUFFER} is equivalent to {@see GL43::GL_DRAW_FRAMEBUFFER}. Default framebuffers may also
     * be queried if bound to $target.
     *
     * For {@see GL43::getNamedFramebufferParameteriv}, $framebuffer is the name of the framebuffer object. If
     * $framebuffer is zero, the default draw framebuffer is queried.
     *
     * Upon successful return, $param will contain the value of the framebuffer parameter specified by $pname, as
     * described below.
     *
     * The following parameters can only be queried for framebuffer objects:
     *
     *  - {@see GL43::GL_FRAMEBUFFER_DEFAULT_WIDTH}: $params returns the value
     *    of {@see GL43::GL_FRAMEBUFFER_DEFAULT_WIDTH} for the framebuffer
     *    object.
     *
     *  - {@see GL43::GL_FRAMEBUFFER_DEFAULT_HEIGHT}: $params returns the value
     *    of {@see GL43::GL_FRAMEBUFFER_DEFAULT_HEIGHT} for the framebuffer
     *    object.
     *
     *  - {@see GL43::GL_FRAMEBUFFER_DEFAULT_LAYERS}: $params returns the value
     *    of {@see GL43::GL_FRAMEBUFFER_DEFAULT_LAYERS} for the framebuffer
     *    object.
     *
     *  - {@see GL43::GL_FRAMEBUFFER_DEFAULT_SAMPLES}: $params returns the value
     *    of {@see GL43::GL_FRAMEBUFFER_DEFAULT_SAMPLES} for the framebuffer
     *    object.
     *
     *  - {@see GL43::GL_FRAMEBUFFER_DEFAULT_FIXED_SAMPLE_LOCATIONS}: $params
     *    returns the boolean value of {@see
     *    GL43::GL_FRAMEBUFFER_DEFAULT_FIXED_SAMPLE_LOCATIONS}.
     *
     * The following parameters can be queried for both default framebuffers and framebuffer objects:
     *
     *  - {@see GL43::GL_DOUBLEBUFFER}: $param returns a boolean value
     *    indicating whether double buffering is supported for the framebuffer
     *    object.
     *
     *  - {@see GL43::GL_IMPLEMENTATION_COLOR_READ_FORMAT}: $param returns a
     *    GLenum value indicating the preferred pixel data format for the
     *    framebuffer object. See
     *    {@see GL43::readPixels}.
     *
     *  - {@see GL43::GL_IMPLEMENTATION_COLOR_READ_TYPE}: $param returns a
     *    GLenum value indicating the implementation's preferred pixel data type
     *    for the framebuffer
     *    object. See {@see GL43::readPixels}.
     *
     *  - {@see GL43::GL_SAMPLES}: $param returns an integer value indicating
     *    the coverage mask size for the framebuffer object. See
     *    {@see GL43::sampleCoverage}.
     *
     *  - {@see GL43::GL_SAMPLE_BUFFERS}: $param returns an integer value
     *    indicating the number of sample buffers associated with the
     *    framebuffer
     *    object. See {@see GL43::sampleCoverage}.
     *
     *  - {@see GL43::GL_STEREO}: $param returns a boolean value indicating
     *    whether stereo buffers (left and right) are supported for the
     *    framebuffer object.
     *
     * @see http://docs.gl/gl4/glGetFramebufferParameter
     * @since 4.3
     * @param int $target
     * @param int $pname
     * @param int|null $params
     * @return void
     */
    public function getFramebufferParameteriv(int $target, int $pname, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->proc('glGetFramebufferParameteriv', 'void (*)(GLenum target, GLenum pname, GLint *params)');
            $__proc($target, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL43::getInternalformativ} and {@see GL43::getInternalformati64v} retrieve information about
     * implementation-dependent support for internal formats. $target indicates the target with which the internal
     * format will be used and must be one of {@see GL43::GL_RENDERBUFFER}, {@see GL43::GL_TEXTURE_2D_MULTISAMPLE},
     * or {@see GL43::GL_TEXTURE_2D_MULTISAMPLE_ARRAY}, corresponding to usage as a renderbuffer, two-dimensional
     * multisample texture or two-dimensional multisample array texture, respectively.
     *
     * $internalformat specifies the internal format about which to retrieve information and must be a
     * color-renderable, depth-renderable or stencil-renderable format.
     *
     * The information retrieved will be written to memory addressed by the pointer specified in $params. No more
     * than $bufSize integers will be written to this memory.
     *
     * If $pname is {@see GL43::GL_NUM_SAMPLE_COUNTS}, the number of sample counts that would be returned by querying
     * {@see GL43::GL_SAMPLES} will be returned in $params.
     *
     * If $pname is {@see GL43::GL_SAMPLES}, the sample counts supported for $internalformat and $target are written
     * into $params in descending numeric order. Only positive values are returned. Querying {@see GL43::GL_SAMPLES}
     * with $bufSize of one will return just the maximum supported number of samples for this format. The maximum
     * value in {@see GL43::GL_SAMPLES} is guaranteed to be at least the lowest of the following:    The value of
     * {@see GL43::GL_MAX_INTEGER_SAMPLES} if $internalformat is a signed or unsigned integer format.     The value
     * of {@see GL43::GL_MAX_DEPTH_TEXTURE_SAMPLES} if $internalformat is a depth- or stencil-renderable format and
     * $target is {@see GL43::GL_TEXTURE_2D_MULTISAMPLE}, {@see GL43::GL_TEXTURE_2D_MULTISAMPLE_ARRAY}.     The value
     * of {@see GL43::GL_MAX_COLOR_TEXTURE_SAMPLES} if $internalformat is a color-renderable format and $target is
     * {@see GL43::GL_TEXTURE_2D_MULTISAMPLE} or {@see GL43::GL_TEXTURE_2D_MULTISAMPLE_ARRAY}.    The value of
     * {@see GL43::GL_MAX_SAMPLES}.
     *
     * If $pname is {@see GL43::GL_INTERNALFORMAT_SUPPORTED}, $params is set to {@see GL43::GL_TRUE} if
     * $internalformat is a supported internal format for $target and to {@see GL43::GL_FALSE} otherwise.
     *
     * If $pname is {@see GL43::GL_INTERNALFORMAT_PREFERRED}, $params is set to {@see GL43::GL_TRUE} if
     * $internalformat is an format for $target that is preferred by the implementation and to {@see GL43::GL_FALSE}
     * otherwise.
     *
     * If $pname is {@see GL43::GL_INTERNALFORMAT_RED_SIZE}, {@see GL43::GL_INTERNALFORMAT_GREEN_SIZE},
     * {@see GL43::GL_INTERNALFORMAT_BLUE_SIZE}, {@see GL43::GL_INTERNALFORMAT_ALPHA_SIZE},
     * {@see GL43::GL_INTERNALFORMAT_DEPTH_SIZE}, {@see GL43::GL_INTERNALFORMAT_STENCIL_SIZE}, or
     * {@see GL43::GL_INTERNALFORMAT_SHARED_SIZE} then $params is set to the actual resolutions that would be used
     * for storing image array components for the resource for the red, green, blue, alpha, depth, stencil and shared
     * channels respectively. If $internalformat is a compressed internal format, then $params is set to the
     * component resolution of an uncompressed internal format that produces an image of roughly the same quality as
     * the compressed algorithm. If the internal format is unsupported, or if a particular component is not present
     * in the format, 0 is written to $params.
     *
     * If $pname is {@see GL43::GL_INTERNALFORMAT_RED_TYPE}, {@see GL43::GL_INTERNALFORMAT_GREEN_TYPE},
     * {@see GL43::GL_INTERNALFORMAT_BLUE_TYPE}, {@see GL43::GL_INTERNALFORMAT_ALPHA_TYPE},
     * {@see GL43::GL_INTERNALFORMAT_DEPTH_TYPE}, or {@see GL43::GL_INTERNALFORMAT_STENCIL_TYPE} then $params is set
     * to a token identifying the data type used to store the respective component. If the $internalformat represents
     * a compressed internal format then the types returned specify how components are interpreted after
     * decompression.
     *
     * If $pname is {@see GL43::GL_MAX_WIDTH}, {@see GL43::GL_MAX_HEIGHT}, {@see GL43::GL_MAX_DEPTH}, or
     * {@see GL43::GL_MAX_LAYERS} then $pname is filled with the maximum width, height, depth or layer count for
     * textures with internal format $internalformat, respectively. If $pname is
     * {@see GL43::GL_MAX_COMBINED_DIMENSIONS} then $pname is filled with the maximum combined dimensions of a
     * texture of the specified internal format.
     *
     * If $pname is {@see GL43::GL_COLOR_COMPONENTS} then $params is set to the value {@see GL43::GL_TRUE} if the
     * internal format contains any color component (i.e., red, green, blue or alpha) and to {@see GL43::GL_FALSE}
     * otherwise. If $pname is {@see GL43::GL_DEPTH_COMPONENTS} or {@see GL43::GL_STENCIL_COMPONENTS} then $params is
     * set to {@see GL43::GL_TRUE} if the internal format contains a depth or stencil component, respectively, and to
     * {@see GL43::GL_FALSE} otherwise.
     *
     * If $pname is {@see GL43::GL_COLOR_RENDERABLE}, {@see GL43::GL_DEPTH_RENDERABLE} or
     * {@see GL43::GL_STENCIL_RENDERABLE} then $params is set to {@see GL43::GL_TRUE} if the specified internal
     * format is color, depth or stencil renderable, respectively, and to {@see GL43::GL_FALSE} otherwise.
     *
     * If $pname is {@see GL43::GL_FRAMEBUFFER_RENDERABLE} or {@see GL43::GL_FRAMEBUFFER_RENDERABLE_LAYERED} then
     * $params is set to one of {@see GL43::GL_FULL_SUPPORT}, {@see GL43::GL_CAVEAT_SUPPORT} or {@see GL43::GL_NONE}
     * to indicate that framebuffer attachments (layered attachments in the case of
     * {@see GL43::GL_FRAMEBUFFER_RENDERABLE_LAYERED}) with that internal format are either renderable with no
     * restrictions, renderable with some restrictions or not renderable at all.
     *
     * If $pname is {@see GL43::GL_FRAMEBUFFER_BLEND}, $params is set to {@see GL43::GL_TRUE} to indicate that the
     * internal format is supported for blending operations when attached to a framebuffer, and to
     * {@see GL43::GL_FALSE} otherwise.
     *
     * If $pname is {@see GL43::GL_READ_PIXELS} then $params is set to {@see GL43::GL_FULL_SUPPORT},
     * {@see GL43::GL_CAVEAT_SUPPORT} or {@see GL43::GL_NONE} to that either full support, limited support or no
     * support at all is supplied for reading pixels from framebuffer attachments in the specified internal format.
     *
     * If $pname is {@see GL43::GL_READ_PIXELS_FORMAT} or {@see GL43::GL_READ_PIXELS_TYPE} then $params is filled
     * with the format or type, respectively, most recommended to obtain the highest image quality and performance.
     * For {@see GL43::GL_READ_PIXELS_FORMAT}, the value returned in $params is a token that is accepted for the
     * $format argument to {@see GL43::readPixels}. For {@see GL43::GL_READ_PIXELS_TYPE}, the value returned in
     * $params is a token that is accepted for the $type argument to {@see GL43::readPixels}.
     *
     * If $pname is {@see GL43::GL_TEXTURE_IMAGE_FORMAT} or {@see GL43::GL_TEXTURE_IMAGE_TYPE} then $params is filled
     * with the implementation-recommended format or type to be used in calls to {@see GL43::texImage2D} and other
     * similar functions. For {@see GL43::GL_TEXTURE_IMAGE_FORMAT}, $params is filled with a token suitable for use
     * as the $format argument to {@see GL43::texImage2D}. For {@see GL43::GL_TEXTURE_IMAGE_TYPE}, $params is
     * filled with a token suitable for use as the $type argument to {@see GL43::texImage2D}.
     *
     * If $pname is {@see GL43::GL_GET_TEXTURE_IMAGE_FORMAT} or {@see GL43::GL_GET_TEXTURE_IMAGE_TYPE} then $params
     * is filled with the implementation-recommended format or type to be used in calls to {@see GL43::getTexImage}
     * and other similar functions. For {@see GL43::GL_GET_TEXTURE_IMAGE_FORMAT}, $params is filled with a token
     * suitable for use as the $format argument to {@see GL43::getTexImage}. For
     * {@see GL43::GL_GET_TEXTURE_IMAGE_TYPE}, $params is filled with a token suitable for use as the $type argument
     * to {@see GL43::getTexImage}.
     *
     * If $pname is {@see GL43::GL_MIPMAP} then $pname is set to {@see GL43::GL_TRUE} to indicate that the specified
     * internal format supports mipmaps and to {@see GL43::GL_FALSE} otherwise.
     *
     * If $pname is {@see GL43::GL_GENERATE_MIPMAP} or {@see GL43::GL_AUTO_GENERATE_MIPMAP} then $params is indicates
     * the level of support for manual or automatic mipmap generation for the specified internal format,
     * respectively. Returned values may be one of {@see GL43::GL_FULL_SUPPORT}, {@see GL43::GL_CAVEAT_SUPPORT} and
     * {@see GL43::GL_NONE} to indicate either full support, limited support or no support at all.
     *
     * If $pname is {@see GL43::GL_COLOR_ENCODING} then the color encoding for the resource is returned in $params.
     * Possible values for color buffers are {@see GL43::GL_LINEAR} or {@see GL43::GL_SRGB}, for linear or
     * sRGB-encoded color components, respectively. For non-color formats (such as depth or stencil), or for
     * unsupported resources, the value {@see GL43::GL_NONE} is returned.
     *
     * If $pname is {@see GL43::GL_SRGB_READ}, or {@see GL43::GL_SRGB_WRITE} then $params indicates the level of
     * support for reading and writing to sRGB encoded images, respectively. For {@see GL43::GL_SRGB_READ}, support
     * for converting from sRGB colorspace on read operations is returned in $params and for
     * {@see GL43::GL_SRGB_WRITE}, support for converting to sRGB colorspace on write operations to the resource is
     * returned in $params. $params may be set to {@see GL43::GL_FULL_SUPPORT}, {@see GL43::GL_CAVEAT_SUPPORT}, or
     * {@see GL43::GL_NONE} to indicate full support, limited support or no support at all, respecitively.
     *
     * If $pname is {@see GL43::GL_FILTER} the $params is set to either {@see GL43::GL_TRUE} or {@see GL43::GL_FALSE}
     * to indicate support or lack thereof for filter modes other than {@see GL43::GL_NEAREST} or
     * {@see GL43::GL_NEAREST_MIPMAP} for the specified internal format.
     *
     * If $pname is {@see GL43::GL_VERTEX_TEXTURE}, {@see GL43::GL_TESS_CONTROL_TEXTURE},
     * {@see GL43::GL_TESS_EVALUATION_TEXTURE}, {@see GL43::GL_GEOMETRY_TEXTURE}, {@see GL43::GL_FRAGMENT_TEXTURE},
     * or {@see GL43::GL_COMPUTE_TEXTURE}, then the value written to $params indicates support for use of the
     * resource as a source of texturing in the vertex, tessellation control, tessellation evaluation, geometry,
     * fragment and compute shader stages, respectively. $params may be set to {@see GL43::GL_FULL_SUPPORT},
     * {@see GL43::GL_CAVEAT_SUPPORT} or {@see GL43::GL_NONE} to indicate full support, limited support or no support
     * at all, respectively.
     *
     * If $pname is {@see GL43::GL_TEXTURE_SHADOW}, {@see GL43::GL_TEXTURE_GATHER} or
     * {@see GL43::GL_TEXTURE_GATHER_SHADOW} then the value written to $params indicates the level of support for
     * using the resource with a shadow sampler, in gather operations or as a shadow sampler in gather operations,
     * respectively. Returned values may be {@see GL43::GL_FULL_SUPPORT}, {@see GL43::GL_CAVEAT_SUPPORT} or
     * {@see GL43::GL_NONE} to indicate full support, limited support or no support at all, respectively.
     *
     * If $pname is {@see GL43::GL_SHADER_IMAGE_LOAD}, {@see GL43::GL_SHADER_IMAGE_STORE} or
     * {@see GL43::GL_SHADER_IMAGE_ATOMIC} then the value returned in $params indicates the level of support for
     * image loads, stores and atomics for resources of the specified internal format. Returned values may be
     * {@see GL43::GL_FULL_SUPPORT}, {@see GL43::GL_CAVEAT_SUPPORT} or {@see GL43::GL_NONE} to indicate full support,
     * limited support or no support at all, respectively.
     *
     * If $pname is {@see GL43::GL_IMAGE_TEXEL_SIZE} then the size of a texel when the resource when used as an image
     * texture is returned in $params. If the resource is not supported for image textures zero is returned.
     *
     * If $pname is {@see GL43::GL_IMAGE_COMPATIBILITY_CLASS} then the compatibility class of the resource when used
     * as an image texture is returned in $params. The possible values returned are
     * {@see GL43::GL_IMAGE_CLASS_4_X_32}, {@see GL43::GL_IMAGE_CLASS_2_X_32}, {@see GL43::GL_IMAGE_CLASS_1_X_32},
     * {@see GL43::GL_IMAGE_CLASS_4_X_16}, {@see GL43::GL_IMAGE_CLASS_2_X_16}, {@see GL43::GL_IMAGE_CLASS_1_X_16},
     * {@see GL43::GL_IMAGE_CLASS_4_X_8}, {@see GL43::GL_IMAGE_CLASS_2_X_8}, {@see GL43::GL_IMAGE_CLASS_1_X_8},
     * {@see GL43::GL_IMAGE_CLASS_11_11_10}, and {@see GL43::GL_IMAGE_CLASS_10_10_10_2}, which correspond to the
     * 4x32, 2x32, 1x32, 4x16, 2x16, 1x16, 4x8, 2x8, 1x8, the class (a) 11/11/10 packed floating-point format, and
     * the class (b) 10/10/10/2 packed formats, respectively. If the resource is not supported for image textures,
     * {@see GL43::GL_NONE} is returned.
     *
     * If $pname is {@see GL43::GL_IMAGE_PIXEL_FORMAT} or {@see GL43::GL_IMAGE_PIXEL_TYPE} then the pixel format or
     * type of the resource when used as an image texture is returned in $params, respectively. In either case, the
     * resource is not supported for image textures {@see GL43::GL_NONE} is returned.
     *
     * If $pname is {@see GL43::GL_IMAGE_FORMAT_COMPATIBILITY_TYPE}, the matching criteria use for the resource when
     * used as an image textures is returned in $params. Possible values returned in $params are
     * {@see GL43::GL_IMAGE_FORMAT_COMPATIBILITY_BY_SIZE} or {@see GL43::GL_IMAGE_FORMAT_COMPATIBILITY_BY_CLASS}. If
     * the resource is not supported for image textures, {@see GL43::GL_NONE} is returned.
     *
     * If $pname is {@see GL43::GL_SIMULTANEOUS_TEXTURE_AND_DEPTH_TEST} or
     * {@see GL43::GL_SIMULTANEOUS_TEXTURE_AND_STENCIL_TEST}, support for using the resource both as a source for
     * texture sampling while it is bound as a buffer for depth or stencil test, respectively, is written to $params.
     * Possible values returned are {@see GL43::GL_FULL_SUPPORT}, {@see GL43::GL_CAVEAT_SUPPORT}, or
     * {@see GL43::GL_NONE} to indicate full support, limited support or no support at all. If the resource or
     * operation is not supported, {@see GL43::GL_NONE} is returned.
     *
     * If $pname is {@see GL43::GL_SIMULTANEOUS_TEXTURE_AND_DEPTH_WRITE} or
     * {@see GL43::GL_SIMULTANEOUS_TEXTURE_AND_STENCIL_WRITE}, support for using the resource both as a source for
     * texture sampling while performing depth or stencil writes to the resources, respectively, is written to
     * $params. Possible values returned are {@see GL43::GL_FULL_SUPPORT}, {@see GL43::GL_CAVEAT_SUPPORT}, or
     * {@see GL43::GL_NONE} to indicate full support, limited support or no support at all. If the resource or
     * operation is not supported, {@see GL43::GL_NONE} is returned.
     *
     * If $pname is {@see GL43::GL_TEXTURE_COMPRESSED} then {@see GL43::GL_TRUE} is returned in $params if
     * $internalformat is a compressed internal format. {@see GL43::GL_FALSE} is returned in $params otherwise.
     *
     * If $pname is {@see GL43::GL_TEXTURE_COMPRESSED_BLOCK_WIDTH}, {@see GL43::GL_TEXTURE_COMPRESSED_BLOCK_HEIGHT}
     * or {@see GL43::GL_TEXTURE_COMPRESSED_BLOCK_SIZE} then the width, height or total size, respectively of a block
     * (in basic machine units) is returned in $params. If the internal format is not compressed, or the resource is
     * not supported, 0 is returned.
     *
     * If $pname is {@see GL43::GL_CLEAR_BUFFER}, the level of support for using the resource with
     * {@see GL43::clearBufferData} and {@see GL43::clearBufferSubData} is returned in $params. Possible values
     * returned are {@see GL43::GL_FULL_SUPPORT}, {@see GL43::GL_CAVEAT_SUPPORT}, or {@see GL43::GL_NONE} to indicate
     * full support, limited support or no support at all, respectively. If the resource or operation is not
     * supported, {@see GL43::GL_NONE} is returned.
     *
     * If $pname is {@see GL43::GL_TEXTURE_VIEW}, the level of support for using the resource with the
     * {@see GL43::textureView} command is returned in $params. Possible values returned are
     * {@see GL43::GL_FULL_SUPPORT}, {@see GL43::GL_CAVEAT_SUPPORT}, or {@see GL43::GL_NONE} to indicate full
     * support, limited support or no support at all, respectively. If the resource or operation is not supported,
     * {@see GL43::GL_NONE} is returned.
     *
     * If $pname is {@see GL43::GL_VIEW_COMPATIBILITY_CLASS} then the compatibility class of the resource when used
     * as a texture view is returned in $params. The possible values returned are
     * {@see GL43::GL_VIEW_CLASS_128_BITS}, {@see GL43::GL_VIEW_CLASS_96_BITS}, {@see GL43::GL_VIEW_CLASS_64_BITS},
     * {@see GL43::GL_VIEW_CLASS_48_BITS}, {@see GL43::GL_VIEW_CLASS_32_BITS}, {@see GL43::GL_VIEW_CLASS_24_BITS},
     * {@see GL43::GL_VIEW_CLASS_16_BITS}, {@see GL43::GL_VIEW_CLASS_8_BITS},
     * {@see GL43::GL_VIEW_CLASS_S3TC_DXT1_RGB}, {@see GL43::GL_VIEW_CLASS_S3TC_DXT1_RGBA},
     * {@see GL43::GL_VIEW_CLASS_S3TC_DXT3_RGBA}, {@see GL43::GL_VIEW_CLASS_S3TC_DXT5_RGBA},
     * {@see GL43::GL_VIEW_CLASS_RGTC1_RED}, {@see GL43::GL_VIEW_CLASS_RGTC2_RG},
     * {@see GL43::GL_VIEW_CLASS_BPTC_UNORM}, and {@see GL43::GL_VIEW_CLASS_BPTC_FLOAT}.
     *
     * If $pname is {@see GL43::GL_CLEAR_TEXTURE} then the presence of support for using the
     * {@see GL43::clearTexImage} and {@see GL43::clearTexSubImage} commands with the resource is written to
     * $params. Possible values written are {@see GL43::GL_FULL_SUPPORT}, {@see GL43::GL_CAVEAT_SUPPORT}, or
     * {@see GL43::GL_NONE} to indicate full support, limited support or no support at all, respectively. If the
     * resource or operation is not supported, {@see GL43::GL_NONE} is returned.
     *
     * @see http://docs.gl/gl4/glGetInternalformat
     * @since 4.3
     * @param int $target
     * @param int $internalformat
     * @param int $pname
     * @param int $bufSize
     * @param int|null $params
     * @return void
     */
    public function getInternalformati64v(int $target, int $internalformat, int $pname, int $bufSize, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLint64', false);
        try {
            $__proc = $this->proc('glGetInternalformati64v', 'void (*)(GLenum target, GLenum internalformat, GLenum pname, GLsizei bufSize, GLint64 *params)');
            $__proc($target, $internalformat, $pname, $bufSize, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL43::getObjectLabel} retrieves the label of the object identified by $name within the namespace given
     * by $identifier. $identifier must be one of {@see GL43::GL_BUFFER}, {@see GL43::GL_SHADER},
     * {@see GL43::GL_PROGRAM}, {@see GL43::GL_VERTEX_ARRAY}, {@see GL43::GL_QUERY},
     * {@see GL43::GL_PROGRAM_PIPELINE}, {@see GL43::GL_TRANSFORM_FEEDBACK}, {@see GL43::GL_SAMPLER},
     * {@see GL43::GL_TEXTURE}, {@see GL43::GL_RENDERBUFFER}, {@see GL43::GL_FRAMEBUFFER}, to indicate the namespace
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
     * @param int $identifier
     * @param int $name
     * @param int $bufSize
     * @param int|null $length
     * @param string|null $label
     * @return void
     */
    public function getObjectLabel(int $identifier, int $name, int $bufSize, ?int &$length, ?string &$label): void
    {
        $lengthCType = $this->info->ffi->new('GLsizei', false);
        $labelCType = \FFI::addr($this->info->ffi->new('GLchar[' . $bufSize . ']', false)[0]);
        try {
            $__proc = $this->proc('glGetObjectLabel', 'void (*)(GLenum identifier, GLuint name, GLsizei bufSize, GLsizei *length, GLchar *label)');
            $__proc($identifier, $name, $bufSize, \FFI::addr($lengthCType), $labelCType);
        } finally {
            $length = $lengthCType->cdata;
            \FFI::free($lengthCType);
            $label = \FFI::string($labelCType);
            \FFI::free($labelCType);
        }
    }

    /**
     * {@see GL43::getObjectPtrLabel} retrieves the label of the sync object identified by $ptr.
     *
     * $label is the address of a string that will be used to store the object label. $bufSize specifies the number
     * of characters in the array identified by $label. $length contains the address of a variable which will receive
     * the number of characters in the object label. If $length is NULL, then it is ignored and no data is written.
     * Likewise, if $label is NULL, or if $bufSize is zero then no data is written to $label.
     *
     * @see http://docs.gl/gl4/glGetObjectPtrLabel
     * @since 4.3
     * @param CData|null $ptr
     * @param int $bufSize
     * @param int|null $length
     * @param string|null $label
     * @return void
     */
    public function getObjectPtrLabel(?CData $ptr, int $bufSize, ?int &$length, ?string &$label): void
    {
        $lengthCType = $this->info->ffi->new('GLsizei', false);
        $labelCType = \FFI::addr($this->info->ffi->new('GLchar[' . $bufSize . ']', false)[0]);
        try {
            $__proc = $this->proc('glGetObjectPtrLabel', 'void (*)(const void *ptr, GLsizei bufSize, GLsizei *length, GLchar *label)');
            $__proc($ptr, $bufSize, \FFI::addr($lengthCType), $labelCType);
        } finally {
            $length = $lengthCType->cdata;
            \FFI::free($lengthCType);
            $label = \FFI::string($labelCType);
            \FFI::free($labelCType);
        }
    }

    /**
     * {@see GL43::getProgramInterfaceiv} queries the property of the interface identifed by $programInterface in
     * $program, the property name of which is given by $pname.
     *
     * $program must be the name of an existing program object. $programInterface is the name of the interface within
     * $program to query and must be one of the following values:
     *
     *  - {@see GL43::GL_UNIFORM}: The query is targeted at the set of active
     *    uniforms within $program.
     *
     *  - {@see GL43::GL_UNIFORM_BLOCK}: The query is targeted at the set of
     *    active uniform blocks within $program.
     *
     *  - {@see GL43::GL_ATOMIC_COUNTER_BUFFER}: The query is targeted at the
     *    set of active atomic counter buffer binding points within $program.
     *
     *  - {@see GL43::GL_PROGRAM_INPUT}: The query is targeted at the set of
     *    active input variables used by the first shader stage of $program. If
     *    $program contains multiple shader stages then input variables from any
     *    stage other than the first will not be
     *    enumerated.
     *
     *  - {@see GL43::GL_PROGRAM_OUTPUT}: The query is targeted at the set of
     *    active output variables produced by the last shader stage of $program.
     *    If
     *    $program contains multiple shader stages then output variables from
     *    any stage other than the last will not be
     *    enumerated.
     *
     *  - {@see GL43::GL_VERTEX_SUBROUTINE}: The query is targeted at the set of
     *    active subroutines for the vertex, tessellation control, tessellation
     *    evaluation, geometry, fragment and compute shader stages of $program,
     *    respectively.
     *
     *  - {@see GL43::GL_VERTEX_SUBROUTINE_UNIFORM}: The query is targeted at
     *    the set of active subroutine uniform variables used by the vertex,
     *    tessellation
     *    control, tessellation evaluation, geometry, fragment and compute
     *    shader stages of $program, respectively.
     *
     *  - {@see GL43::GL_TRANSFORM_FEEDBACK_VARYING}: The query is targeted at
     *    the set of output variables from the last non-fragment stage of
     *    $program that would
     *    be captured if transform feedback were active.
     *
     *  - {@see GL43::GL_BUFFER_VARIABLE}: The query is targeted at the set of
     *    active buffer variables used by $program.
     *
     *  - {@see GL43::GL_SHADER_STORAGE_BLOCK}: The query is targeted at the set
     *    of active shader storage blocks used by $program.
     *
     *  - {@see GL43::GL_TRANSFORM_FEEDBACK_BUFFER}: The query is targeted at
     *    the set of active buffer binding points to which output variables in
     *    the
     *    {@see GL43::GL_TRANSFORM_FEEDBACK_VARYING} interface are written.
     *
     * $pname identifies the property of $programInterface to return in $params.
     *
     * If $pname is {@see GL43::GL_ACTIVE_RESOURCES}, the value returned is the number of resources in the active
     * resource list for $programInterface. If the list of active resources for $programInterface is empty, zero is
     * returned.
     *
     * If $pname is {@see GL43::GL_MAX_NAME_LENGTH}, the value returned is the length of the longest active name
     * string for an active resource in $programInterface. This length includes an extra character for the null
     * terminator. If the list of active resources for $programInterface is empty, zero is returned. It is an error
     * to specify {@see GL43::GL_MAX_NAME_LENGTH} when $programInterface is {@see GL43::GL_ATOMIC_COUNTER_BUFFER}, as
     * active atomic counter buffer resources are not assigned name strings.
     *
     * If $pname is {@see GL43::GL_MAX_NUM_ACTIVE_VARIABLES}, the value returned is the number of active variables
     * belonging to the interface block or atomic counter buffer resource in $programInterface with the most active
     * variables. If the list of active resources for $programInterface is empty, zero is returned. When $pname is
     * {@see GL43::GL_MAX_NUM_ACTIVE_VARIABLES}, $programInterface must be {@see GL43::GL_UNIFORM_BLOCK},
     * {@see GL43::GL_ATOMIC_COUNTER_BUFFER}, or {@see GL43::GL_SHADER_STORAGE_BLOCK}.
     *
     * If $pname is {@see GL43::GL_MAX_NUM_COMPATIBLE_SUBROUTINES}, the value returned is the number of compatible
     * subroutines belonging to the active subroutine uniform in $programInterface with the most compatible
     * subroutines. If the list of active resources for $programInterface is empty, zero is returned. When $pname is
     * {@see GL43::GL_MAX_NUM_COMPATIBLE_SUBROUTINES}, $programInterface must be one of
     * {@see GL43::GL_VERTEX_SUBROUTINE_UNIFORM}, {@see GL43::GL_TESS_CONTROL_SUBROUTINE_UNIFORM},
     * {@see GL43::GL_TESS_EVALUATION_SUBROUTINE_UNIFORM}, {@see GL43::GL_GEOMETRY_SUBROUTINE_UNIFORM},
     * {@see GL43::GL_FRAGMENT_SUBROUTINE_UNIFORM}, or {@see GL43::GL_COMPUTE_SUBROUTINE_UNIFORM}.
     *
     * @see http://docs.gl/gl4/glGetProgramInterface
     * @since 4.3
     * @param int $program
     * @param int $programInterface
     * @param int $pname
     * @param int|null $params
     * @return void
     */
    public function getProgramInterfaceiv(int $program, int $programInterface, int $pname, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->proc('glGetProgramInterfaceiv', 'void (*)(GLuint program, GLenum programInterface, GLenum pname, GLint *params)');
            $__proc($program, $programInterface, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL43::getProgramResourceIndex} returns the unsigned integer index assigned to a resource named $name
     * in the interface type $programInterface of program object $program.
     *
     * $program must be the name of an existing program object. $programInterface is the name of the interface within
     * $program which contains the resource named $nameand must be one of the following values:
     *
     *  - {@see GL43::GL_UNIFORM}: The query is targeted at the set of active
     *    uniforms within $program.
     *
     *  - {@see GL43::GL_UNIFORM_BLOCK}: The query is targeted at the set of
     *    active uniform blocks within $program.
     *
     *  - {@see GL43::GL_PROGRAM_INPUT}: The query is targeted at the set of
     *    active input variables used by the first shader stage of $program. If
     *    $program contains multiple shader stages then input variables from any
     *    stage other than the first will not be
     *    enumerated.
     *
     *  - {@see GL43::GL_PROGRAM_OUTPUT}: The query is targeted at the set of
     *    active output variables produced by the last shader stage of $program.
     *    If
     *    $program contains multiple shader stages then output variables from
     *    any stage other than the last will not be
     *    enumerated.
     *
     *  - {@see GL43::GL_VERTEX_SUBROUTINE}: The query is targeted at the set of
     *    active subroutines for the vertex, tessellation control, tessellation
     *    evaluation, geometry, fragment and compute shader stages of $program,
     *    respectively.
     *
     *  - {@see GL43::GL_VERTEX_SUBROUTINE_UNIFORM}: The query is targeted at
     *    the set of active subroutine uniform variables used by the vertex,
     *    tessellation
     *    control, tessellation evaluation, geometry, fragment and compute
     *    shader stages of $program, respectively.
     *
     *  - {@see GL43::GL_TRANSFORM_FEEDBACK_VARYING}: The query is targeted at
     *    the set of output variables from the last non-fragment stage of
     *    $program that would
     *    be captured if transform feedback were active.
     *
     *  - {@see GL43::GL_TRANSFORM_FEEDBACK_BUFFER}: The query is targeted at
     *    the set of active buffer binding points to which output variables in
     *    the
     *    {@see GL43::GL_TRANSFORM_FEEDBACK_VARYING} interface are written.
     *
     *  - {@see GL43::GL_BUFFER_VARIABLE}: The query is targeted at the set of
     *    active buffer variables used by $program.
     *
     *  - {@see GL43::GL_SHADER_STORAGE_BLOCK}: The query is targeted at the set
     *    of active shader storage blocks used by $program.
     *
     * If $name exactly matches the name string of one of the active resources for $programInterface, the index of
     * the matched resource is returned. Additionally, if $name would exactly match the name string of an active
     * resource if "[0]" were appended to $name, the index of the matched resource is returned. Otherwise, $name is
     * considered not to be the name of an active resource, and {@see GL43::GL_INVALID_INDEX} is returned.
     *
     * For the interface {@see GL43::GL_TRANSFORM_FEEDBACK_VARYING}, the value {@see GL43::GL_INVALID_INDEX} should
     * be returned when querying the index assigned to the special names `gl_NextBuffer`, `gl_SkipComponents1`,
     * `gl_SkipComponents2`, `gl_SkipComponents3`, or `gl_SkipComponents4`.
     *
     * @see http://docs.gl/gl4/glGetProgramResourceIndex
     * @since 4.3
     * @param int $program
     * @param int $programInterface
     * @param CData|null $name
     * @return int
     */
    public function getProgramResourceIndex(int $program, int $programInterface, ?CData $name): int
    {
        $__proc = $this->proc('glGetProgramResourceIndex', 'GLuint (*)(GLuint program, GLenum programInterface, const GLchar *name)');
        return $__proc($program, $programInterface, $name);
    }

    /**
     * {@see GL43::getProgramResourceLocation} returns the location assigned to the variable named $name in
     * interface $programInterface of program object $program. $program must be the name of a program that has been
     * linked successfully. $programInterface must be one of {@see GL43::GL_UNIFORM}, {@see GL43::GL_PROGRAM_INPUT},
     * {@see GL43::GL_PROGRAM_OUTPUT}, {@see GL43::GL_VERTEX_SUBROUTINE_UNIFORM},
     * {@see GL43::GL_TESS_CONTROL_SUBROUTINE_UNIFORM}, {@see GL43::GL_TESS_EVALUATION_SUBROUTINE_UNIFORM},
     * {@see GL43::GL_GEOMETRY_SUBROUTINE_UNIFORM}, {@see GL43::GL_FRAGMENT_SUBROUTINE_UNIFORM},
     * {@see GL43::GL_COMPUTE_SUBROUTINE_UNIFORM}, or {@see GL43::GL_TRANSFORM_FEEDBACK_BUFFER}.
     *
     * The value -1 will be returned if an error occurs, if $name does not identify an active variable on
     * $programInterface, or if $name identifies an active variable that does not have a valid location assigned, as
     * described above. The locations returned by these commands are the same locations returned when querying the
     * {@see GL43::GL_LOCATION} and {@see GL43::GL_LOCATION_INDEX} resource properties.
     *
     * A string provided to {@see GL43::getProgramResourceLocation} is considered to match an active variable if:
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
     * array variable, {@see GL43::getProgramResourceLocation} returns the location assigned to that element. If it
     * specifies the base name of an array, it identifies the resources associated with the first element of the
     * array.
     *
     * @see http://docs.gl/gl4/glGetProgramResourceLocation
     * @since 4.3
     * @param int $program
     * @param int $programInterface
     * @param CData|null $name
     * @return int
     */
    public function getProgramResourceLocation(int $program, int $programInterface, ?CData $name): int
    {
        $__proc = $this->proc('glGetProgramResourceLocation', 'GLint (*)(GLuint program, GLenum programInterface, const GLchar *name)');
        return $__proc($program, $programInterface, $name);
    }

    /**
     * {@see GL43::getProgramResourceLocationIndex} returns the fragment color index assigned to the variable named
     * $name in interface $programInterface of program object $program. $program must be the name of a program that
     * has been linked successfully. $programInterface must be {@see GL43::GL_PROGRAM_OUTPUT}.
     *
     * The value -1 will be returned if an error occurs, if $name does not identify an active variable on
     * $programInterface, or if $name identifies an active variable that does not have a valid location assigned, as
     * described above. The locations returned by these commands are the same locations returned when querying the
     * {@see GL43::GL_LOCATION} and {@see GL43::GL_LOCATION_INDEX} resource properties.
     *
     * A string provided to {@see GL43::getProgramResourceLocationIndex} is considered to match an active variable
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
     * array variable, {@see GL43::getProgramResourceLocation} returns the location assigned to that element. If it
     * specifies the base name of an array, it identifies the resources associated with the first element of the
     * array.
     *
     * @see http://docs.gl/gl4/glGetProgramResourceLocationIndex
     * @since 4.3
     * @param int $program
     * @param int $programInterface
     * @param CData|null $name
     * @return int
     */
    public function getProgramResourceLocationIndex(int $program, int $programInterface, ?CData $name): int
    {
        $__proc = $this->proc('glGetProgramResourceLocationIndex', 'GLint (*)(GLuint program, GLenum programInterface, const GLchar *name)');
        return $__proc($program, $programInterface, $name);
    }

    /**
     * {@see GL43::getProgramResourceName} retrieves the name string assigned to the single active resource with an
     * index of $index in the interface $programInterface of program object $program. $index must be less than the
     * number of entries in the active resource list for $programInterface.
     *
     * $program must be the name of an existing program object. $programInterface is the name of the interface within
     * $program which contains the resource and must be one of the following values:
     *
     *  - {@see GL43::GL_UNIFORM}: The query is targeted at the set of active
     *    uniforms within $program.
     *
     *  - {@see GL43::GL_UNIFORM_BLOCK}: The query is targeted at the set of
     *    active uniform blocks within $program.
     *
     *  - {@see GL43::GL_PROGRAM_INPUT}: The query is targeted at the set of
     *    active input variables used by the first shader stage of $program. If
     *    $program contains multiple shader stages then input variables from any
     *    stage other than the first will not be
     *    enumerated.
     *
     *  - {@see GL43::GL_PROGRAM_OUTPUT}: The query is targeted at the set of
     *    active output variables produced by the last shader stage of $program.
     *    If
     *    $program contains multiple shader stages then output variables from
     *    any stage other than the last will not be
     *    enumerated.
     *
     *  - {@see GL43::GL_VERTEX_SUBROUTINE}: The query is targeted at the set of
     *    active subroutines for the vertex, tessellation control, tessellation
     *    evaluation, geometry, fragment and compute shader stages of $program,
     *    respectively.
     *
     *  - {@see GL43::GL_VERTEX_SUBROUTINE_UNIFORM}: The query is targeted at
     *    the set of active subroutine uniform variables used by the vertex,
     *    tessellation
     *    control, tessellation evaluation, geometry, fragment and compute
     *    shader stages of $program, respectively.
     *
     *  - {@see GL43::GL_TRANSFORM_FEEDBACK_VARYING}: The query is targeted at
     *    the set of output variables from the last non-fragment stage of
     *    $program that would
     *    be captured if transform feedback were active.
     *
     *  - {@see GL43::GL_BUFFER_VARIABLE}: The query is targeted at the set of
     *    active buffer variables used by $program.
     *
     *  - {@see GL43::GL_SHADER_STORAGE_BLOCK}: The query is targeted at the set
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
     * {@see GL43::getProgramInterface} with a $pname of {@see GL43::GL_MAX_NAME_LENGTH}.
     *
     * @see http://docs.gl/gl4/glGetProgramResourceName
     * @since 4.3
     * @param int $program
     * @param int $programInterface
     * @param int $index
     * @param int $bufSize
     * @param int|null $length
     * @param string|null $name
     * @return void
     */
    public function getProgramResourceName(int $program, int $programInterface, int $index, int $bufSize, ?int &$length, ?string &$name): void
    {
        $lengthCType = $this->info->ffi->new('GLsizei', false);
        $nameCType = \FFI::addr($this->info->ffi->new('GLchar[' . $bufSize . ']', false)[0]);
        try {
            $__proc = $this->proc('glGetProgramResourceName', 'void (*)(GLuint program, GLenum programInterface, GLuint index, GLsizei bufSize, GLsizei *length, GLchar *name)');
            $__proc($program, $programInterface, $index, $bufSize, \FFI::addr($lengthCType), $nameCType);
        } finally {
            $length = $lengthCType->cdata;
            \FFI::free($lengthCType);
            $name = \FFI::string($nameCType);
            \FFI::free($nameCType);
        }
    }

    /**
     * {@see GL43::getProgramResourceiv} returns values for multiple properties of a single active resource with an
     * index of $index in the interface $programInterface of program object $program. For each resource, values for
     * $propCount properties specified by the array $props are returned. $propCount may not be zero. An error is
     * generated if any value in $props is not one of the properties described immediately belowor if any value in
     * $props is not allowed for $programInterface. The set of allowed $programInterface values for each property can
     * be found in the following table:
     *
     * | {@see GL43::GL_NAME_LENGTH}                          | Any except {@see GL43::GL_ATOMIC_COUNTER_BUFFER} and {@see GL43::GL_TRANSFORM_FEEDBACK_BUFFER}                                                                                                                                                                                                                                                                                                                                            |
     * | {@see GL43::GL_TYPE}                                 | {@see GL43::GL_UNIFORM}, {@see GL43::GL_PROGRAM_INPUT}, {@see GL43::GL_PROGRAM_OUTPUT},
     * {@see GL43::GL_TRANSFORM_FEEDBACK_VARYING}, {@see GL43::GL_BUFFER_VARIABLE}                                                                                                                                                                                                                                                                       |
     * | {@see GL43::GL_ARRAY_SIZE}                           | {@see GL43::GL_UNIFORM}, {@see GL43::GL_BUFFER_VARIABLE}, {@see GL43::GL_PROGRAM_INPUT},
     * {@see GL43::GL_PROGRAM_OUTPUT, VERTEX_SUBROUTINE_UNIFORM}, {@see GL43::GL_TESS_CONTROL_SUBROUTINE_UNIFORM},
     * {@see GL43::GL_TESS_EVALUATION_SUBROUTINE_UNIFORM}, {@see GL43::GL_GEOMETRY_SUBROUTINE_UNIFORM},
     * {@see GL43::GL_FRAGMENT_SUBROUTINE_UNIFORM}, {@see GL43::GL_COMPUTE_SUBROUTINE_UNIFORM},
     * {@see GL43::GL_TRANSFORM_FEEDBACK_VARYING} |
     * | {@see GL43::GL_OFFSET}                               | {@see GL43::GL_UNIFORM}, {@see GL43::GL_BUFFER_VARIABLE}, {@see GL43::GL_TRANSFORM_FEEDBACK_VARYING}                                                                                                                                                                                                                                                                                                                                      |
     * | {@see GL43::GL_BLOCK_INDEX}                          | {@see GL43::GL_UNIFORM}, {@see GL43::GL_BUFFER_VARIABLE}                                                                                                                                                                                                                                                                                                                                                                                  |
     * | {@see GL43::GL_ARRAY_STRIDE}                         | {@see GL43::GL_UNIFORM}, {@see GL43::GL_BUFFER_VARIABLE}                                                                                                                                                                                                                                                                                                                                                                                  |
     * | {@see GL43::GL_MATRIX_STRIDE}                        | {@see GL43::GL_UNIFORM}, {@see GL43::GL_BUFFER_VARIABLE}                                                                                                                                                                                                                                                                                                                                                                                  |
     * | {@see GL43::GL_IS_ROW_MAJOR}                         | {@see GL43::GL_UNIFORM}, {@see GL43::GL_BUFFER_VARIABLE}                                                                                                                                                                                                                                                                                                                                                                                  |
     * | {@see GL43::GL_ATOMIC_COUNTER_BUFFER_INDEX}          | {@see GL43::GL_UNIFORM}                                                                                                                                                                                                                                                                                                                                                                                                                   |
     * | {@see GL43::GL_TEXTURE_BUFFER}                       | none                                                                                                                                                                                                                                                                                                                                                                                                                                      |
     * | {@see GL43::GL_BUFFER_BINDING}                       | {@see GL43::GL_UNIFORM_BLOCK}, {@see GL43::GL_ATOMIC_COUNTER_BUFFER}, {@see GL43::GL_SHADER_STORAGE_BLOCK},
     * {@see GL43::GL_TRANSFORM_FEEDBACK_BUFFER}                                                                                                                                                                                                                                                                                     |
     * | {@see GL43::GL_BUFFER_DATA_SIZE}                     | {@see GL43::GL_UNIFORM_BLOCK}, {@see GL43::GL_ATOMIC_COUNTER_BUFFER}, {@see GL43::GL_SHADER_STORAGE_BLOCK}                                                                                                                                                                                                                                                                                                                                |
     * | {@see GL43::GL_NUM_ACTIVE_VARIABLES}                 | {@see GL43::GL_UNIFORM_BLOCK}, {@see GL43::GL_ATOMIC_COUNTER_BUFFER}, {@see GL43::GL_SHADER_STORAGE_BLOCK},
     * {@see GL43::GL_TRANSFORM_FEEDBACK_BUFFER}                                                                                                                                                                                                                                                                                     |
     * | {@see GL43::GL_ACTIVE_VARIABLES}                     | {@see GL43::GL_UNIFORM_BLOCK}, {@see GL43::GL_ATOMIC_COUNTER_BUFFER}, {@see GL43::GL_SHADER_STORAGE_BLOCK},
     * {@see GL43::GL_TRANSFORM_FEEDBACK_BUFFER}                                                                                                                                                                                                                                                                                     |
     * | {@see GL43::GL_REFERENCED_BY_VERTEX_SHADER}          | {@see GL43::GL_UNIFORM}, {@see GL43::GL_UNIFORM_BLOCK}, {@see GL43::GL_ATOMIC_COUNTER_SHADER},
     * {@see GL43::GL_BUFFER}, {@see GL43::GL_SHADER_STORAGE_BLOCK}, {@see GL43::GL_BUFFER_VARIABLE},
     * {@see GL43::GL_PROGRAM_INPUT}, {@see GL43::GL_PROGRAM_OUTPUT}                                                                                                                                                                               |
     * | {@see GL43::GL_REFERENCED_BY_TESS_CONTROL_SHADER}    | {@see GL43::GL_UNIFORM}, {@see GL43::GL_UNIFORM_BLOCK}, {@see GL43::GL_ATOMIC_COUNTER_SHADER},
     * {@see GL43::GL_BUFFER}, {@see GL43::GL_SHADER_STORAGE_BLOCK}, {@see GL43::GL_BUFFER_VARIABLE},
     * {@see GL43::GL_PROGRAM_INPUT}, {@see GL43::GL_PROGRAM_OUTPUT}                                                                                                                                                                               |
     * | {@see GL43::GL_REFERENCED_BY_TESS_EVALUATION_SHADER} | {@see GL43::GL_UNIFORM}, {@see GL43::GL_UNIFORM_BLOCK}, {@see GL43::GL_ATOMIC_COUNTER_SHADER},
     * {@see GL43::GL_BUFFER}, {@see GL43::GL_SHADER_STORAGE_BLOCK}, {@see GL43::GL_BUFFER_VARIABLE},
     * {@see GL43::GL_PROGRAM_INPUT}, {@see GL43::GL_PROGRAM_OUTPUT}                                                                                                                                                                               |
     * | {@see GL43::GL_REFERENCED_BY_GEOMETRY_SHADER}        | {@see GL43::GL_UNIFORM}, {@see GL43::GL_UNIFORM_BLOCK}, {@see GL43::GL_ATOMIC_COUNTER_SHADER},
     * {@see GL43::GL_BUFFER}, {@see GL43::GL_SHADER_STORAGE_BLOCK}, {@see GL43::GL_BUFFER_VARIABLE},
     * {@see GL43::GL_PROGRAM_INPUT}, {@see GL43::GL_PROGRAM_OUTPUT}                                                                                                                                                                               |
     * | {@see GL43::GL_REFERENCED_BY_FRAGMENT_SHADER}        | {@see GL43::GL_UNIFORM}, {@see GL43::GL_UNIFORM_BLOCK}, {@see GL43::GL_ATOMIC_COUNTER_SHADER},
     * {@see GL43::GL_BUFFER}, {@see GL43::GL_SHADER_STORAGE_BLOCK}, {@see GL43::GL_BUFFER_VARIABLE},
     * {@see GL43::GL_PROGRAM_INPUT}, {@see GL43::GL_PROGRAM_OUTPUT}                                                                                                                                                                               |
     * | {@see GL43::GL_REFERENCED_BY_COMPUTE_SHADER}         | {@see GL43::GL_UNIFORM}, {@see GL43::GL_UNIFORM_BLOCK}, {@see GL43::GL_ATOMIC_COUNTER_SHADER},
     * {@see GL43::GL_BUFFER}, {@see GL43::GL_SHADER_STORAGE_BLOCK}, {@see GL43::GL_BUFFER_VARIABLE},
     * {@see GL43::GL_PROGRAM_INPUT}, {@see GL43::GL_PROGRAM_OUTPUT}                                                                                                                                                                               |
     * | {@see GL43::GL_NUM_COMPATIBLE_SUBROUTINES}           | {@see GL43::GL_VERTEX_SUBROUTINE_UNIFORM}, {@see GL43::GL_TESS_CONTROL_SUBROUTINE_UNIFORM},
     * {@see GL43::GL_TESS_EVALUATION_SUBROUTINE_UNIFORM}, {@see GL43::GL_GEOMETRY_SUBROUTINE_UNIFORM},
     * {@see GL43::GL_FRAGMENT_SUBROUTINE_UNIFORM}, {@see GL43::GL_COMPUTE_SUBROUTINE_UNIFORM}                                                                                                                                                      |
     * | {@see GL43::GL_COMPATIBLE_SUBROUTINES}               | {@see GL43::GL_VERTEX_SUBROUTINE_UNIFORM}, {@see GL43::GL_TESS_CONTROL_SUBROUTINE_UNIFORM},
     * {@see GL43::GL_TESS_EVALUATION_SUBROUTINE_UNIFORM}, {@see GL43::GL_GEOMETRY_SUBROUTINE_UNIFORM},
     * {@see GL43::GL_FRAGMENT_SUBROUTINE_UNIFORM}, {@see GL43::GL_COMPUTE_SUBROUTINE_UNIFORM}                                                                                                                                                      |
     * | {@see GL43::GL_TOP_LEVEL_ARRAY_SIZE}                 | {@see GL43::GL_BUFFER_VARIABLE}                                                                                                                                                                                                                                                                                                                                                                                                           |
     * | {@see GL43::GL_TOP_LEVEL_ARRAY_STRIDE}               | {@see GL43::GL_BUFFER_VARIABLE}                                                                                                                                                                                                                                                                                                                                                                                                           |
     * | {@see GL43::GL_LOCATION}                             | {@see GL43::GL_UNIFORM}, {@see GL43::GL_PROGRAM_INPUT}, {@see GL43::GL_PROGRAM_OUTPUT},
     * {@see GL43::GL_VERTEX_SUBROUTINE_UNIFORM}, {@see GL43::GL_TESS_CONTROL_SUBROUTINE_UNIFORM},
     * {@see GL43::GL_TESS_EVALUATION_SUBROUTINE_UNIFORM}, {@see GL43::GL_GEOMETRY_SUBROUTINE_UNIFORM},
     * {@see GL43::GL_FRAGMENT_SUBROUTINE_UNIFORM}, {@see GL43::GL_COMPUTE_SUBROUTINE_UNIFORM}                                                              |
     * | {@see GL43::GL_LOCATION_INDEX}                       | {@see GL43::GL_PROGRAM_OUTPUT}                                                                                                                                                                                                                                                                                                                                                                                                            |
     * | {@see GL43::GL_IS_PER_PATCH}                         | {@see GL43::GL_PROGRAM_INPUT}, {@see GL43::GL_PROGRAM_OUTPUT}                                                                                                                                                                                                                                                                                                                                                                             |
     * | {@see GL43::GL_LOCATION_COMPONENT}                   | {@see GL43::GL_PROGRAM_INPUT}, {@see GL43::GL_PROGRAM_OUTPUT}                                                                                                                                                                                                                                                                                                                                                                             |
     * | {@see GL43::GL_TRANSFORM_FEEDBACK_BUFFER_INDEX}      | {@see GL43::GL_TRANSFORM_FEEDBACK_VARYING}                                                                                                                                                                                                                                                                                                                                                                                                |
     * | {@see GL43::GL_TRANSFORM_FEEDBACK_BUFFER_STRIDE}     | {@see GL43::GL_TRANSFORM_FEEDBACK_BUFFER}                                                                                                                                                                                                                                                                                                                                                                                                 |
     * For the property {@see GL43::GL_NAME_LENGTH}, a single integer identifying the length of the name string
     * associated with an active variable, interface block, or subroutine is written to $params. The name length
     * includes a terminating null character.
     *
     * For the property {@see GL43::GL_TYPE}, a single integer identifying the type of an active variable is written
     * to $params. The integer returned is one of the values found in table 2.16.
     *
     * For the property {@see GL43::GL_ARRAY_SIZE}, a single integer identifying the number of active array elements
     * of an active variable is written to $params. The array size returned is in units of the type associated with
     * the property {@see GL43::GL_TYPE}. For active variables not corresponding to an array of basic types, the
     * value zero is written to $params.
     *
     * For the property {@see GL43::GL_BLOCK_INDEX}, a single integer identifying the index of the active interface
     * block containing an active variable is written to $params. If the variable is not the member of an interface
     * block, the value -1 is written to $params.
     *
     * For the property {@see GL43::GL_OFFSET}, a single integer identifying the offset of an active variable is
     * written to $params. For variables in the {@see GL43::GL_UNIFORM} and {@see GL43::GL_BUFFER_VARIABLE}
     * interfaces that are backed by a buffer object, the value written is the offset of that variable relative to
     * the base of the buffer range holding its value. For variables in the
     * {@see GL43::GL_TRANSFORM_FEEDBACK_VARYING} interface, the value written is the offset in the transform
     * feedback buffer storage assigned to each vertex captured in transform feedback mode where the value of the
     * variable will be stored. Such offsets are specified via the `xfb_offset` layout qualifier or assigned
     * according to the variables position in the list of strings passed to {@see GL43::transformFeedbackVaryings}.
     * Offsets are expressed in basic machine units. For all variables not recorded in transform feedback mode,
     * including the special names `"gl_NextBuffer"`, `"gl_SkipComponents1"`, `"gl_SkipComponents2"`,
     * `"gl_SkipComponents3"`, and `"gl_SkipComponents4"`, -1 is written to $params.
     *
     * For the property {@see GL43::GL_ARRAY_STRIDE}, a single integer identifying the stride between array elements
     * in an active variable is written to $params. For active variables declared as an array of basic types, the
     * value written is the difference, in basic machine units, between the offsets of consecutive elements in an
     * array. For active variables not declared as an array of basic types, zero is written to $params. For active
     * variables not backed by a buffer object, -1 is written to $params, regardless of the variable type.
     *
     * For the property {@see GL43::GL_MATRIX_STRIDE}, a single integer identifying the stride between columns of a
     * column-major matrix or rows of a row-major matrix is written to $params. For active variables declared a
     * single matrix or array of matrices, the value written is the difference, in basic machine units, between the
     * offsets of consecutive columns or rows in each matrix. For active variables not declared as a matrix or array
     * of matrices, zero is written to $params. For active variables not backed by a buffer object, -1 is written to
     * $params, regardless of the variable type.
     *
     * For the property {@see GL43::GL_IS_ROW_MAJOR}, a single integer identifying whether an active variable is a
     * row-major matrix is written to $params. For active variables backed by a buffer object, declared as a single
     * matrix or array of matrices, and stored in row-major order, one is written to $params. For all other active
     * variables, zero is written to $params.
     *
     * For the property {@see GL43::GL_ATOMIC_COUNTER_BUFFER_INDEX}, a single integer identifying the index of the
     * active atomic counter buffer containing an active variable is written to $params. If the variable is not an
     * atomic counter uniform, the value -1 is written to $params.
     *
     * For the property {@see GL43::GL_BUFFER_BINDING}, to index of the buffer binding point associated with the
     * active uniform block, shader storage block, atomic counter buffer or transform feedback buffer is written to
     * $params.
     *
     * For the property {@see GL43::GL_BUFFER_DATA_SIZE}, then the implementation-dependent minimum total buffer
     * object size, in basic machine units, required to hold all active variables associated with an active uniform
     * block, shader storage block, or atomic counter buffer is written to $params. If the final member of an active
     * shader storage block is array with no declared size, the minimum buffer size is computed assuming the array
     * was declared as an array with one element.
     *
     * For the property {@see GL43::GL_NUM_ACTIVE_VARIABLES}, the number of active variables associated with an
     * active uniform block, shader storage block, atomic counter buffer or transform feedback buffer is written to
     * $params.
     *
     * For the property {@see GL43::GL_ACTIVE_VARIABLES}, an array of active variable indices associated with an
     * active uniform block, shader storage block, atomic counter buffer or transform feedback buffer is written to
     * $params. The number of values written to $params for an active resource is given by the value of the property
     * {@see GL43::GL_NUM_ACTIVE_VARIABLES} for the resource.
     *
     * For the properties {@see GL43::GL_REFERENCED_BY_VERTEX_SHADER},
     * {@see GL43::GL_REFERENCED_BY_TESS_CONTROL_SHADER}, {@see GL43::GL_REFERENCED_BY_TESS_EVALUATION_SHADER},
     * {@see GL43::GL_REFERENCED_BY_GEOMETRY_SHADER}, {@see GL43::GL_REFERENCED_BY_FRAGMENT_SHADER}, and
     * {@see GL43::GL_REFERENCED_BY_COMPUTE_SHADER}, a single integer is written to $params, identifying whether the
     * active resource is referenced by the vertex, tessellation control, tessellation evaluation, geometry, or
     * fragment shaders, respectively, in the program object. The value one is written to $params if an active
     * variable is referenced by the corresponding shader, or if an active uniform block, shader storage block, or
     * atomic counter buffer contains at least one variable referenced by the corresponding shader. Otherwise, the
     * value zero is written to $params.
     *
     * For the property {@see GL43::GL_TOP_LEVEL_ARRAY_SIZE}, a single integer identifying the number of active array
     * elements of the top-level shader storage block member containing to the active variable is written to $params.
     * If the top-level block member is not declared as an array, the value one is written to $params. If the
     * top-level block member is an array with no declared size, the value zero is written to $params.
     *
     * For the property {@see GL43::GL_TOP_LEVEL_ARRAY_STRIDE}, a single integer identifying the stride between array
     * elements of the top-level shader storage block member containing the active variable is written to $params.
     * For top-level block members declared as arrays, the value written is the difference, in basic machine units,
     * between the offsets of the active variable for consecutive elements in the top-level array. For top-level
     * block members not declared as an array, zero is written to $params.
     *
     * For the property {@see GL43::GL_LOCATION}, a single integer identifying the assigned location for an active
     * uniform, input, output, or subroutine uniform variable is written to $params. For input, output, or uniform
     * variables with locations specified by a layout qualifier, the specified location is used. For vertex shader
     * input or fragment shader output variables without a layout qualifier, the location assigned when a program is
     * linked is written to $params. For all other input and output variables, the value -1 is written to $params.
     * For uniforms in uniform blocks, the value -1 is written to $params.
     *
     * For the property {@see GL43::GL_LOCATION_INDEX}, a single integer identifying the fragment color index of an
     * active fragment shader output variable is written to $params. If the active variable is an output for a
     * non-fragment shader, the value -1 will be written to $params.
     *
     * For the property {@see GL43::GL_IS_PER_PATCH}, a single integer identifying whether the input or output is a
     * per-patch attribute. If the active variable is a per-patch attribute (declared with the `patch` qualifier),
     * the value one is written to $params; otherwise, the value zero is written to $params.
     *
     * For the property {@see GL43::GL_LOCATION_COMPONENT}, a single integer indicating the first component of the
     * location assigned to an active input or output variable is written to $params. For input and output variables
     * with a component specified by a `layout` qualifier, the specified component is written. For all other input
     * and output variables, the value zero is written.
     *
     * For the property {@see GL43::GL_TRANSFORM_FEEDBACK_BUFFER_INDEX}, a single integer identifying the index of
     * the active transform feedback buffer associated with an active variable is written to $params. For variables
     * corresponding to the special names `"gl_NextBuffer"`, `"gl_SkipComponents1"`, `"gl_SkipComponents2"`,
     * `"gl_SkipComponents3"`, and `"gl_SkipComponents4"`, -1 is written to $params.
     *
     * For the property {@see GL43::GL_TRANSFORM_FEEDBACK_BUFFER_STRIDE}, a single integer identifying the stride, in
     * basic machine units, between consecutive vertices written to the transform feedback buffer is written to
     * $params.
     *
     * @see http://docs.gl/gl4/glGetProgramResource
     * @since 4.3
     * @param int $program
     * @param int $programInterface
     * @param int $index
     * @param int $propCount
     * @param CData|null $props
     * @param int $bufSize
     * @param int|null $length
     * @param int|null $params
     * @return void
     */
    public function getProgramResourceiv(
        int $program,
        int $programInterface,
        int $index,
        int $propCount,
        ?CData $props,
        int $bufSize,
        ?int &$length,
        ?int &$params
    ): void {
        $lengthCType = $this->info->ffi->new('GLsizei', false);
        $paramsCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->proc('glGetProgramResourceiv', 'void (*)(GLuint program, GLenum programInterface, GLuint index, GLsizei propCount, const GLenum *props, GLsizei bufSize, GLsizei *length, GLint *params)');
            $__proc($program, $programInterface, $index, $propCount, $props, $bufSize, \FFI::addr($lengthCType), \FFI::addr($paramsCType));
        } finally {
            $length = $lengthCType->cdata;
            \FFI::free($lengthCType);
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL43::invalidateBufferData} invalidates all of the content of the data store of a buffer object. After
     * invalidation, the content of the buffer's data store becomes undefined.
     *
     * @see http://docs.gl/gl4/glInvalidateBufferData
     * @since 4.3
     * @param int $buffer
     * @return void
     */
    public function invalidateBufferData(int $buffer): void
    {
        $__proc = $this->proc('glInvalidateBufferData', 'void (*)(GLuint buffer)');
        $__proc($buffer);
    }

    /**
     * {@see GL43::invalidateBufferSubData} invalidates all or part of the content of the data store of a buffer
     * object. After invalidation, the content of the specified range of the buffer's data store becomes undefined.
     * The start of the range is given by $offset and its size is given by $length, both measured in basic machine
     * units.
     *
     * @see http://docs.gl/gl4/glInvalidateBufferSubData
     * @since 4.3
     * @param int $buffer
     * @param int $offset
     * @param int $length
     * @return void
     */
    public function invalidateBufferSubData(int $buffer, int $offset, int $length): void
    {
        $__proc = $this->proc('glInvalidateBufferSubData', 'void (*)(GLuint buffer, GLintptr offset, GLsizeiptr length)');
        $__proc($buffer, $offset, $length);
    }

    /**
     * {@see GL43::invalidateFramebuffer} and {@see GL43::invalidateNamedFramebufferData} invalidate the entire
     * contents of a specified set of attachments of a framebuffer.
     *
     * For {@see GL43::invalidateFramebuffer}, the framebuffer object is that bound to $target. $target must be
     * {@see GL43::GL_FRAMEBUFFER}, {@see GL43::GL_READ_FRAMEBUFFER} or {@see GL43::GL_DRAW_FRAMEBUFFER}.
     * {@see GL43::GL_FRAMEBUFFER} is equivalent to {@see GL43::GL_DRAW_FRAMEBUFFER}. Default framebuffers may also
     * be invalidated if bound to $target.
     *
     * For {@see GL43::invalidateNamedFramebufferData}, $framebuffer is the name of the framebuffer object. If
     * $framebuffer is zero, the default draw framebuffer is affected.
     *
     * The set of attachments whose contents are to be invalidated are specified in the $attachments array, which
     * contains $numAttachments elements.
     *
     * If the specified framebuffer is a framebuffer object, each element of $attachments must be one of
     * {@see GL43::GL_DEPTH_ATTACHMENT}, {@see GL43::GL_STENCIL_ATTACHMENT} {@see GL43::GL_DEPTH_STENCIL_ATTACHMENT},
     * or {@see GL43::GL_COLOR_ATTACHMENT}i, where i is between zero and the value of
     * {@see GL43::GL_MAX_FRAMEBUFFER_ATTACHMENTS} minus one.
     *
     * If the specified framebuffer is a default framebuffer, each element of $attachments must be one of
     * {@see GL43::GL_FRONT_LEFT}, {@see GL43::GL_FRONT_RIGHT}, {@see GL43::GL_BACK_LEFT},
     * {@see GL43::GL_BACK_RIGHT}, {@see GL43::GL_AUX}i, {@see GL43::GL_ACCUM}, {@see GL43::GL_COLOR},
     * {@see GL43::GL_DEPTH}, or {@see GL43::GL_STENCIL}. {@see GL43::GL_COLOR}, is treated as
     * {@see GL43::GL_BACK_LEFT} for a double-buffered context and {@see GL43::GL_FRONT_LEFT} for a single-buffered
     * context. The other attachments identify the corresponding specific buffer.
     *
     * The entire contents of each specified attachment become undefined after execution of
     * {@see GL43::invalidateFramebuffer} or {@see GL43::invalidateNamedFramebufferData}.
     *
     * If the framebuffer object is not complete, {@see GL43::invalidateFramebuffer} and
     * {@see GL43::invalidateNamedFramebufferData} may be ignored. This is not an error.
     *
     * @see http://docs.gl/gl4/glInvalidateFramebuffer
     * @since 4.3
     * @param int $target
     * @param int $numAttachments
     * @param CData|null $attachments
     * @return void
     */
    public function invalidateFramebuffer(int $target, int $numAttachments, ?CData $attachments): void
    {
        $__proc = $this->proc('glInvalidateFramebuffer', 'void (*)(GLenum target, GLsizei numAttachments, const GLenum *attachments)');
        $__proc($target, $numAttachments, $attachments);
    }

    /**
     * {@see GL43::invalidateSubFramebuffer} and {@see GL43::invalidateNamedFramebufferSubData} invalidate the
     * contents of a specified region of a specified set of attachments of a framebuffer.
     *
     * For {@see GL43::invalidateSubFramebuffer}, the framebuffer object is that bound to $target, which must be
     * one of {@see GL43::GL_FRAMEBUFFER}, {@see GL43::GL_READ_FRAMEBUFFER} or {@see GL43::GL_DRAW_FRAMEBUFFER}.
     * {@see GL43::GL_FRAMEBUFFER} is equivalent to {@see GL43::GL_DRAW_FRAMEBUFFER}. Default framebuffers may also
     * be invalidated if bound to $target.
     *
     * For {@see GL43::invalidateNamedFramebufferSubData}, $framebuffer is the name of the framebuffer object. If
     * $framebuffer is zero, the default draw framebuffer is affected.
     *
     * The set of attachments of which a region is to be invalidated are specified in the $attachments array, which
     * contains $numAttachments elements.
     *
     * If the specified framebuffer is a framebuffer object, each element of $attachments must be one of
     * {@see GL43::GL_DEPTH_ATTACHMENT}, {@see GL43::GL_STENCIL_ATTACHMENT} {@see GL43::GL_DEPTH_STENCIL_ATTACHMENT},
     * or {@see GL43::GL_COLOR_ATTACHMENT}i, where i is between zero and the value of
     * {@see GL43::GL_MAX_FRAMEBUFFER_ATTACHMENTS} minus one.
     *
     * If the specified framebuffer is a default framebuffer, each element of $attachments must be one of
     * {@see GL43::GL_FRONT_LEFT}, {@see GL43::GL_FRONT_RIGHT}, {@see GL43::GL_BACK_LEFT},
     * {@see GL43::GL_BACK_RIGHT}, {@see GL43::GL_AUX}i, {@see GL43::GL_ACCUM}, {@see GL43::GL_COLOR},
     * {@see GL43::GL_DEPTH}, or {@see GL43::GL_STENCIL}. {@see GL43::GL_COLOR}, is treated as
     * {@see GL43::GL_BACK_LEFT} for a double-buffered context and {@see GL43::GL_FRONT_LEFT} for a single-buffered
     * context. The other attachments identify the corresponding specific buffer.
     *
     * The contents of the specified region of each specified attachment become undefined after execution of
     * {@see GL43::invalidateSubFramebuffer} or {@see GL43::invalidateNamedFramebufferSubData}. The region to be
     * invalidated is specified by $x, $y, $width and $height where $x and $y give the offset from the origin (with
     * lower-left corner at $(0,0)$) and $width and $height are the width and height, respectively, of the region.
     * Any pixels lying outside of the window allocated to the current GL context (for the default framebuffer), or
     * outside of the attachments of the framebuffer object, are ignored. If the framebuffer object is not complete,
     * these commands may be ignored.
     *
     * If the framebuffer object is not complete, {@see GL43::invalidateSubFramebuffer} and
     * {@see GL43::invalidateNamedFramebufferSubData} may be ignored. This is not an error.
     *
     * @see http://docs.gl/gl4/glInvalidateSubFramebuffer
     * @since 4.3
     * @param int $target
     * @param int $numAttachments
     * @param CData|null $attachments
     * @param int $x
     * @param int $y
     * @param int $width
     * @param int $height
     * @return void
     */
    public function invalidateSubFramebuffer(int $target, int $numAttachments, ?CData $attachments, int $x, int $y, int $width, int $height): void
    {
        $__proc = $this->proc('glInvalidateSubFramebuffer', 'void (*)(GLenum target, GLsizei numAttachments, const GLenum *attachments, GLint x, GLint y, GLsizei width, GLsizei height)');
        $__proc($target, $numAttachments, $attachments, $x, $y, $width, $height);
    }

    /**
     * {@see GL43::invalidateTexSubImage} invalidates all of a texture image. $texture and $level indicated which
     * texture image is being invalidated. After this command, data in the texture image has undefined values.
     *
     * $level must be greater than or equal to zero and be less than the base 2 logarithm of the maximum texture
     * width, height, or depth.
     *
     * For textures of targets {@see GL43::GL_TEXTURE_RECTANGLE}, {@see GL43::GL_TEXTURE_BUFFER},
     * {@see GL43::GL_TEXTURE_2D_MULTISAMPLE}, or {@see GL43::GL_TEXTURE_2D_MULTISAMPLE_ARRAY}, level must be zero.
     *
     * @see http://docs.gl/gl4/glInvalidateTexImage
     * @since 4.3
     * @param int $texture
     * @param int $level
     * @return void
     */
    public function invalidateTexImage(int $texture, int $level): void
    {
        $__proc = $this->proc('glInvalidateTexImage', 'void (*)(GLuint texture, GLint level)');
        $__proc($texture, $level);
    }

    /**
     * {@see GL43::invalidateTexSubImage} invalidates all or part of a texture image. $texture and $level indicated
     * which texture image is being invalidated. After this command, data in that subregion have undefined values.
     * $xoffset, $yoffset, $zoffset, $width, $height, and $depth are interpreted as they are in
     * {@see GL43::texSubImage3D}. For texture targets that don't have certain dimensions, this command treats
     * those dimensions as having a size of 1. For example, to invalidate a portion of a two- dimensional texture,
     * the application would use $zoffset equal to zero and $depth equal to one. Cube map textures are treated as an
     * array of six slices in the z-dimension, where a value of $zoffset is interpreted as specifying face
     * {@see GL43::GL_TEXTURE_CUBE_MAP_POSITIVE_X} + $zoffset.
     *
     * $level must be greater than or equal to zero and be less than the base 2 logarithm of the maximum texture
     * width, height, or depth. $xoffset, $yoffset and $zoffset must be greater than or equal to zero and be less
     * than the width, height or depth of the image, respectively. Furthermore, $xoffset + $width, $yoffset +
     * $height, and $zoffset + $depth must be less than or equal to the width, height or depth of the image,
     * respectively.
     *
     * For textures of targets {@see GL43::GL_TEXTURE_RECTANGLE}, {@see GL43::GL_TEXTURE_BUFFER},
     * {@see GL43::GL_TEXTURE_2D_MULTISAMPLE}, or {@see GL43::GL_TEXTURE_2D_MULTISAMPLE_ARRAY}, level must be zero.
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
    public function invalidateTexSubImage(int $texture, int $level, int $xoffset, int $yoffset, int $zoffset, int $width, int $height, int $depth): void
    {
        $__proc = $this->proc('glInvalidateTexSubImage', 'void (*)(GLuint texture, GLint level, GLint xoffset, GLint yoffset, GLint zoffset, GLsizei width, GLsizei height, GLsizei depth)');
        $__proc($texture, $level, $xoffset, $yoffset, $zoffset, $width, $height, $depth);
    }

    /**
     * {@see GL43::multiDrawArraysIndirect} specifies multiple geometric primitives with very few subroutine calls.
     * {@see GL43::multiDrawArraysIndirect} behaves similarly to a multitude of calls to
     * {@see GL43::drawArraysInstancedBaseInstance}, execept that the parameters to each call to
     * {@see GL43::drawArraysInstancedBaseInstance} are stored in an array in memory at the address given by
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
     * A single call to {@see GL43::multiDrawArraysIndirect} is equivalent, assuming no errors are generated to:
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
     * If a buffer is bound to the {@see GL43::GL_DRAW_INDIRECT_BUFFER} binding at the time of a call to
     * {@see GL43::multiDrawArraysIndirect}, $indirect is interpreted as an offset, in basic machine units, into
     * that buffer and the parameter data is read from the buffer rather than from client memory.
     *
     * In contrast to {@see GL43::drawArraysInstancedBaseInstance}, the `first` member of the parameter structure
     * is unsigned, and out-of-range indices do not generate an error.
     *
     * Vertex attributes that are modified by {@see GL43::multiDrawArraysIndirect} have an unspecified value after
     * {@see GL43::multiDrawArraysIndirect} returns. Attributes that aren't modified remain well defined.
     *
     * @see http://docs.gl/gl4/glMultiDrawArraysIndirect
     * @since 4.3
     * @param int $mode
     * @param CData|null $indirect
     * @param int $drawcount
     * @param int $stride
     * @return void
     */
    public function multiDrawArraysIndirect(int $mode, ?CData $indirect, int $drawcount, int $stride): void
    {
        $__proc = $this->proc('glMultiDrawArraysIndirect', 'void (*)(GLenum mode, const void *indirect, GLsizei drawcount, GLsizei stride)');
        $__proc($mode, $indirect, $drawcount, $stride);
    }

    /**
     * {@see GL43::multiDrawElementsIndirect} specifies multiple indexed geometric primitives with very few
     * subroutine calls. {@see GL43::multiDrawElementsIndirect} behaves similarly to a multitude of calls to
     * {@see GL43::drawElementsInstancedBaseVertexBaseInstance}, execpt that the parameters to
     * {@see GL43::drawElementsInstancedBaseVertexBaseInstance} are stored in an array in memory at the address
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
     * A single call to {@see GL43::multiDrawElementsIndirect} is equivalent, assuming no errors are generated to:
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
     * If a buffer is bound to the {@see GL43::GL_DRAW_INDIRECT_BUFFER} binding at the time of a call to
     * {@see GL43::drawElementsIndirect}, $indirect is interpreted as an offset, in basic machine units, into that
     * buffer and the parameter data is read from the buffer rather than from client memory.
     *
     * Note that indices stored in client memory are not supported. If no buffer is bound to the
     * {@see GL43::GL_ELEMENT_ARRAY_BUFFER} binding, an error will be generated.
     *
     * The results of the operation are undefined if the `reservedMustBeZero` member of the parameter structure is
     * non-zero. However, no error is generated in this case.
     *
     * Vertex attributes that are modified by {@see GL43::drawElementsIndirect} have an unspecified value after
     * {@see GL43::drawElementsIndirect} returns. Attributes that aren't modified remain well defined.
     *
     * @see http://docs.gl/gl4/glMultiDrawElementsIndirect
     * @since 4.3
     * @param int $mode
     * @param int $type
     * @param CData|null $indirect
     * @param int $drawcount
     * @param int $stride
     * @return void
     */
    public function multiDrawElementsIndirect(int $mode, int $type, ?CData $indirect, int $drawcount, int $stride): void
    {
        $__proc = $this->proc('glMultiDrawElementsIndirect', 'void (*)(GLenum mode, GLenum type, const void *indirect, GLsizei drawcount, GLsizei stride)');
        $__proc($mode, $type, $indirect, $drawcount, $stride);
    }

    /**
     * {@see GL43::objectLabel} labels the object identified by $name within the namespace given by $identifier.
     * $identifier must be one of {@see GL43::GL_BUFFER}, {@see GL43::GL_SHADER}, {@see GL43::GL_PROGRAM},
     * {@see GL43::GL_VERTEX_ARRAY}, {@see GL43::GL_QUERY}, {@see GL43::GL_PROGRAM_PIPELINE},
     * {@see GL43::GL_TRANSFORM_FEEDBACK}, {@see GL43::GL_SAMPLER}, {@see GL43::GL_TEXTURE},
     * {@see GL43::GL_RENDERBUFFER}, {@see GL43::GL_FRAMEBUFFER}, to indicate the namespace containing the names of
     * buffers, shaders, programs, vertex array objects, query objects, program pipelines, transform feedback
     * objects, samplers, textures, renderbuffers and frame buffers, respectively.
     *
     * $label is the address of a string that will be used to label an object. $length contains the number of
     * characters in $label. If $length is negative, it is implied that $label contains a null-terminated string. If
     * $label is NULL, any debug label is effectively removed from the object.
     *
     * @see http://docs.gl/gl4/glObjectLabel
     * @since 4.3
     * @param int $identifier
     * @param int $name
     * @param int $length
     * @param CData|null $label
     * @return void
     */
    public function objectLabel(int $identifier, int $name, int $length, ?CData $label): void
    {
        $__proc = $this->proc('glObjectLabel', 'void (*)(GLenum identifier, GLuint name, GLsizei length, const GLchar *label)');
        $__proc($identifier, $name, $length, $label);
    }

    /**
     * {@see GL43::objectPtrLabel} labels the sync object identified by $ptr.
     *
     * $label is the address of a string that will be used to label the object. $length contains the number of
     * characters in $label. If $length is negative, it is implied that $label contains a null-terminated string. If
     * $label is NULL, any debug label is effectively removed from the object.
     *
     * @see http://docs.gl/gl4/glObjectPtrLabel
     * @since 4.3
     * @param CData|null $ptr
     * @param int $length
     * @param CData|null $label
     * @return void
     */
    public function objectPtrLabel(?CData $ptr, int $length, ?CData $label): void
    {
        $__proc = $this->proc('glObjectPtrLabel', 'void (*)(const void *ptr, GLsizei length, const GLchar *label)');
        $__proc($ptr, $length, $label);
    }

    /**
     * {@see GL43::popDebugGroup} pops the active debug group. After popping a debug group, the GL will also
     * generate a debug output message describing its cause based on the $message string, the source $source, and an
     * ID $id submitted to the corresponding {@see GL43::pushDebugGroup} command.
     * {@see GL43::GL_DEBUG_TYPE_PUSH_GROUP} and {@see GL43::GL_DEBUG_TYPE_POP_GROUP} share a single namespace for
     * message $id. $severity has the value {@see GL43::GL_DEBUG_SEVERITY_NOTIFICATION}. The $type has the value
     * {@see GL43::GL_DEBUG_TYPE_POP_GROUP}. Popping a debug group restores the debug output volume control of the
     * parent debug group.
     *
     * @see http://docs.gl/gl4/glPopDebugGroup
     * @since 4.3
     * @return void
     */
    public function popDebugGroup(): void
    {
        $__proc = $this->proc('glPopDebugGroup', 'void (*)()');
        $__proc();
    }

    /**
     * {@see GL43::pushDebugGroup} pushes a debug group described by the string $message into the command stream.
     * The value of $id specifies the ID of messages generated. The parameter $length contains the number of
     * characters in $message. If $length is negative, it is implied that $message contains a null terminated string.
     * The message has the specified $source and $id, the $type {@see GL43::GL_DEBUG_TYPE_PUSH_GROUP}, and $severity
     * {@see GL43::GL_DEBUG_SEVERITY_NOTIFICATION}. The GL will put a new debug group on top of the debug group stack
     * which inherits the control of the volume of debug output of the debug group previously residing on the top of
     * the debug group stack. Because debug groups are strictly hierarchical, any additional control of the debug
     * output volume will only apply within the active debug group and the debug groups pushed on top of the active
     * debug group.
     *
     * @see http://docs.gl/gl4/glPushDebugGroup
     * @since 4.3
     * @param int $source
     * @param int $id
     * @param int $length
     * @param CData|null $message
     * @return void
     */
    public function pushDebugGroup(int $source, int $id, int $length, ?CData $message): void
    {
        $__proc = $this->proc('glPushDebugGroup', 'void (*)(GLenum source, GLuint id, GLsizei length, const GLchar *message)');
        $__proc($source, $id, $length, $message);
    }

    /**
     * {@see GL43::shaderStorageBlockBinding}, changes the active shader storage block with an assigned index of
     * $storageBlockIndex in program object $program. $storageBlockIndex must be an active shader storage block index
     * in $program. $storageBlockBinding must be less than the value of
     * {@see GL43::GL_MAX_SHADER_STORAGE_BUFFER_BINDINGS}. If successful, {@see GL43::shaderStorageBlockBinding}
     * specifies that $program will use the data store of the buffer object bound to the binding point
     * $storageBlockBinding to read and write the values of the buffer variables in the shader storage block
     * identified by $storageBlockIndex.
     *
     * @see http://docs.gl/gl4/glShaderStorageBlockBinding
     * @since 4.3
     * @param int $program
     * @param int $storageBlockIndex
     * @param int $storageBlockBinding
     * @return void
     */
    public function shaderStorageBlockBinding(int $program, int $storageBlockIndex, int $storageBlockBinding): void
    {
        $__proc = $this->proc('glShaderStorageBlockBinding', 'void (*)(GLuint program, GLuint storageBlockIndex, GLuint storageBlockBinding)');
        $__proc($program, $storageBlockIndex, $storageBlockBinding);
    }

    /**
     * {@see GL43::texBufferRange} and {@see GL43::textureBufferRange} attach a range of the data store of a
     * specified buffer object to a specified texture object, and specify the storage format for the texture image
     * found in the buffer object. The texture object must be a buffer texture.
     *
     * If $buffer is zero, any buffer object attached to the buffer texture is detached and no new buffer object is
     * attached. If $buffer is non-zero, it must be the name of an existing buffer object.
     *
     * The start and size of the range are specified by $offset and $size respectively, both measured in basic
     * machine units. $offset must be greater than or equal to zero, $size must be greater than zero, and the sum of
     * $offset and $size must not exceed the value of {@see GL43::GL_BUFFER_SIZE} for $buffer. Furthermore, $offset
     * must be an integer multiple of the value of {@see GL43::GL_TEXTURE_BUFFER_OFFSET_ALIGNMENT}.
     *
     * $internalformat specifies the storage format, and must be one of the following sized internal formats:
     *
     * | {@see GL43::GL_R8}       | ubyte  | 1 | YES | R | 0 | 0 | 1 |
     * | {@see GL43::GL_R16}      | ushort | 1 | YES | R | 0 | 0 | 1 |
     * | {@see GL43::GL_R16F}     | half   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL43::GL_R32F}     | float  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL43::GL_R8I}      | byte   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL43::GL_R16I}     | short  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL43::GL_R32I}     | int    | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL43::GL_R8UI}     | ubyte  | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL43::GL_R16UI}    | ushort | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL43::GL_R32UI}    | uint   | 1 | NO  | R | 0 | 0 | 1 |
     * | {@see GL43::GL_RG8}      | ubyte  | 2 | YES | R | G | 0 | 1 |
     * | {@see GL43::GL_RG16}     | ushort | 2 | YES | R | G | 0 | 1 |
     * | {@see GL43::GL_RG16F}    | half   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL43::GL_RG32F}    | float  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL43::GL_RG8I}     | byte   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL43::GL_RG16I}    | short  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL43::GL_RG32I}    | int    | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL43::GL_RG8UI}    | ubyte  | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL43::GL_RG16UI}   | ushort | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL43::GL_RG32UI}   | uint   | 2 | NO  | R | G | 0 | 1 |
     * | {@see GL43::GL_RGB32F}   | float  | 3 | NO  | R | G | B | 1 |
     * | {@see GL43::GL_RGB32I}   | int    | 3 | NO  | R | G | B | 1 |
     * | {@see GL43::GL_RGB32UI}  | uint   | 3 | NO  | R | G | B | 1 |
     * | {@see GL43::GL_RGBA8}    | uint   | 4 | YES | R | G | B | A |
     * | {@see GL43::GL_RGBA16}   | short  | 4 | YES | R | G | B | A |
     * | {@see GL43::GL_RGBA16F}  | half   | 4 | NO  | R | G | B | A |
     * | {@see GL43::GL_RGBA32F}  | float  | 4 | NO  | R | G | B | A |
     * | {@see GL43::GL_RGBA8I}   | byte   | 4 | NO  | R | G | B | A |
     * | {@see GL43::GL_RGBA16I}  | short  | 4 | NO  | R | G | B | A |
     * | {@see GL43::GL_RGBA32I}  | int    | 4 | NO  | R | G | B | A |
     * | {@see GL43::GL_RGBA8UI}  | ubyte  | 4 | NO  | R | G | B | A |
     * | {@see GL43::GL_RGBA16UI} | ushort | 4 | NO  | R | G | B | A |
     * | {@see GL43::GL_RGBA32UI} | uint   | 4 | NO  | R | G | B | A |
     *
     * When a range of a buffer object is attached to a buffer texture, the specified range of the buffer object's
     * data store is taken as the texture's texel array. The number of texels in the buffer texture's texel array is
     * given by $$ \\left\\lfloor { size \\over { components \\times sizeof(base\\_type) } } \\right\\rfloor $$ where
     * $components$ and $base\\_type$ are the element count and base data type for elements, as specified in the
     * table above. The number of texels in the texel array is then clamped to the value of the
     * implementation-dependent limit {@see GL43::GL_MAX_TEXTURE_BUFFER_SIZE}. When a buffer texture is accessed in a
     * shader, the results of a texel fetch are undefined if the specified texel coordinate is negative, or greater
     * than or equal to the clamped number of texels in the texel array.
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
    public function texBufferRange(int $target, int $internalformat, int $buffer, int $offset, int $size): void
    {
        $__proc = $this->proc('glTexBufferRange', 'void (*)(GLenum target, GLenum internalformat, GLuint buffer, GLintptr offset, GLsizeiptr size)');
        $__proc($target, $internalformat, $buffer, $offset, $size);
    }

    /**
     * {@see GL43::texStorage2DMultisample} and {@see GL43::textureStorage2DMultisample} specify the storage
     * requirements for a two-dimensional multisample texture. Once a texture is specified with this command, its
     * format and dimensions become immutable unless it is a proxy texture. The contents of the image may still be
     * modified, however, its storage requirements may not change. Such a texture is referred to as an
     * immutable-format texture.
     *
     * $samples specifies the number of samples to be used for the texture and must be greater than zero and less
     * than or equal to the value of {@see GL43::GL_MAX_SAMPLES}. $internalformat must be a color-renderable,
     * depth-renderable, or stencil-renderable format. $width and $height specify the width and height, respectively,
     * of the texture. If $fixedsamplelocations is {@see GL43::GL_TRUE}, the image will use identical sample
     * locations and the same number of samples for all texels in the image, and the sample locations will not depend
     * on the internal format or size of the image.
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
    public function texStorage2DMultisample(int $target, int $samples, int $internalformat, int $width, int $height, int $fixedsamplelocations): void
    {
        $__proc = $this->proc('glTexStorage2DMultisample', 'void (*)(GLenum target, GLsizei samples, GLenum internalformat, GLsizei width, GLsizei height, GLboolean fixedsamplelocations)');
        $__proc($target, $samples, $internalformat, $width, $height, $fixedsamplelocations);
    }

    /**
     * {@see GL43::texStorage3DMultisample} and {@see GL43::textureStorage3DMultisample} specify the storage
     * requirements for a two-dimensional multisample array texture. Once a texture is specified with this command,
     * its format and dimensions become immutable unless it is a proxy texture. The contents of the image may still
     * be modified, however, its storage requirements may not change. Such a texture is referred to as an
     * immutable-format texture.
     *
     * $samples specifies the number of samples to be used for the texture and must be greater than zero and less
     * than or equal to the value of {@see GL43::GL_MAX_SAMPLES}. $internalformat must be a color-renderable,
     * depth-renderable, or stencil-renderable format. $width and $height specify the width and height, respectively,
     * of the texture and $depth specifies the depth (or the number of layers) of the texture. If
     * $fixedsamplelocations is {@see GL43::GL_TRUE}, the image will use identical sample locations and the same
     * number of samples for all texels in the image, and the sample locations will not depend on the internal format
     * or size of the image.
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
    public function texStorage3DMultisample(int $target, int $samples, int $internalformat, int $width, int $height, int $depth, int $fixedsamplelocations): void
    {
        $__proc = $this->proc('glTexStorage3DMultisample', 'void (*)(GLenum target, GLsizei samples, GLenum internalformat, GLsizei width, GLsizei height, GLsizei depth, GLboolean fixedsamplelocations)');
        $__proc($target, $samples, $internalformat, $width, $height, $depth, $fixedsamplelocations);
    }

    /**
     * {@see GL43::textureView} initializes a texture object as an alias, or view of another texture object,
     * sharing some or all of the parent texture's data store with the initialized texture. $texture specifies a name
     * previously reserved by a successful call to {@see GL43::genTextures} but that has not yet been bound or
     * given a target. $target specifies the target for the newly initialized texture and must be compatible with the
     * target of the parent texture, given in $origtexture as specified in the following table:
     *
     * | {@see GL43::GL_TEXTURE_1D}                   | {@see GL43::GL_TEXTURE_1D}, {@see GL43::GL_TEXTURE_1D_ARRAY}                                                                           |
     * | {@see GL43::GL_TEXTURE_2D}                   | {@see GL43::GL_TEXTURE_2D}, {@see GL43::GL_TEXTURE_2D_ARRAY}                                                                           |
     * | {@see GL43::GL_TEXTURE_3D}                   | {@see GL43::GL_TEXTURE_3D}                                                                                                             |
     * | {@see GL43::GL_TEXTURE_CUBE_MAP}             | {@see GL43::GL_TEXTURE_CUBE_MAP}, {@see GL43::GL_TEXTURE_2D}, {@see GL43::GL_TEXTURE_2D_ARRAY},
     * {@see GL43::GL_TEXTURE_CUBE_MAP_ARRAY} |
     * | {@see GL43::GL_TEXTURE_RECTANGLE}            | {@see GL43::GL_TEXTURE_RECTANGLE}                                                                                                      |
     * | {@see GL43::GL_TEXTURE_BUFFER}               | none                                                                                                                                   |
     * | {@see GL43::GL_TEXTURE_1D_ARRAY}             | {@see GL43::GL_TEXTURE_1D}, {@see GL43::GL_TEXTURE_1D_ARRAY}                                                                           |
     * | {@see GL43::GL_TEXTURE_2D_ARRAY}             | {@see GL43::GL_TEXTURE_2D}, {@see GL43::GL_TEXTURE_2D_ARRAY}                                                                           |
     * | {@see GL43::GL_TEXTURE_CUBE_MAP_ARRAY}       | {@see GL43::GL_TEXTURE_CUBE_MAP}, {@see GL43::GL_TEXTURE_2D}, {@see GL43::GL_TEXTURE_2D_ARRAY},
     * {@see GL43::GL_TEXTURE_CUBE_MAP_ARRAY} |
     * | {@see GL43::GL_TEXTURE_2D_MULTISAMPLE}       | {@see GL43::GL_TEXTURE_2D_MULTISAMPLE}, {@see GL43::GL_TEXTURE_MULTISAMPLE_ARRAY}                                                      |
     * | {@see GL43::GL_TEXTURE_2D_MULTISAMPLE_ARRAY} | {@see GL43::GL_TEXTURE_2D_MULTISAMPLE}, {@see GL43::GL_TEXTURE_MULTISAMPLE_ARRAY}                                                      |
     * The value of {@see GL43::GL_TEXTURE_IMMUTABLE_FORMAT} for $origtexture must be {@see GL43::GL_TRUE}. After
     * initialization, $texture inherits the data store of the parent texture, $origtexture and is usable as a normal
     * texture object with target $target. Data in the shared store is reinterpreted with the new internal format
     * specified by $internalformat. $internalformat must be compatible with the internal format of the parent
     * texture as specified in the following table:
     *
     * | 128-bit                    | {@see GL43::GL_RGBA32F}, {@see GL43::GL_RGBA32UI}, {@see GL43::GL_RGBA32I}                                                                                                                                                                                                                                                                                                                                                                  |
     * | 96-bit                     | {@see GL43::GL_RGB32F}, {@see GL43::GL_RGB32UI}, {@see GL43::GL_RGB32I}                                                                                                                                                                                                                                                                                                                                                                     |
     * | 64-bit                     | {@see GL43::GL_RGBA16F}, {@see GL43::GL_RG32F}, {@see GL43::GL_RGBA16UI}, {@see GL43::GL_RG32UI},
     * {@see GL43::GL_RGBA16I}, {@see GL43::GL_RG32I}, {@see GL43::GL_RGBA16}, {@see GL43::GL_RGBA16_SNORM}                                                                                                                                                                                                                                      |
     * | 48-bit                     | {@see GL43::GL_RGB16}, {@see GL43::GL_RGB16_SNORM}, {@see GL43::GL_RGB16F}, {@see GL43::GL_RGB16UI},
     * {@see GL43::GL_RGB16I}                                                                                                                                                                                                                                                                                                                 |
     * | 32-bit                     | {@see GL43::GL_RG16F}, {@see GL43::GL_R11F_G11F_B10F}, {@see GL43::GL_R32F}, {@see GL43::GL_RGB10_A2UI},
     * {@see GL43::GL_RGBA8UI}, {@see GL43::GL_RG16UI}, {@see GL43::GL_R32UI}, {@see GL43::GL_RGBA8I},
     * {@see GL43::GL_RG16I}, {@see GL43::GL_R32I}, {@see GL43::GL_RGB10_A2}, {@see GL43::GL_RGBA8},
     * {@see GL43::GL_RG16}, {@see GL43::GL_RGBA8_SNORM}, {@see GL43::GL_RG16_SNORM}, {@see GL43::GL_SRGB8_ALPHA8},
     * {@see GL43::GL_RGB9_E5} |
     * | 24-bit                     | {@see GL43::GL_RGB8}, {@see GL43::GL_RGB8_SNORM}, {@see GL43::GL_SRGB8}, {@see GL43::GL_RGB8UI},
     * {@see GL43::GL_RGB8I}                                                                                                                                                                                                                                                                                                                      |
     * | 16-bit                     | {@see GL43::GL_R16F}, {@see GL43::GL_RG8UI}, {@see GL43::GL_R16UI}, {@see GL43::GL_RG8I},
     * {@see GL43::GL_R16I}, {@see GL43::GL_RG8}, {@see GL43::GL_R16}, {@see GL43::GL_RG8_SNORM},
     * {@see GL43::GL_R16_SNORM}                                                                                                                                                                                                                              |
     * | 8-bit                      | {@see GL43::GL_R8UI}, {@see GL43::GL_R8I}, {@see GL43::GL_R8}, {@see GL43::GL_R8_SNORM}                                                                                                                                                                                                                                                                                                                                                     |
     * | {@see GL43::GL_RGTC1_RED}  | {@see GL43::GL_COMPRESSED_RED_RGTC1}, {@see GL43::GL_COMPRESSED_SIGNED_RED_RGTC1}                                                                                                                                                                                                                                                                                                                                                           |
     * | {@see GL43::GL_RGTC2_RG}   | {@see GL43::GL_COMPRESSED_RG_RGTC2}, {@see GL43::GL_COMPRESSED_SIGNED_RG_RGTC2}                                                                                                                                                                                                                                                                                                                                                             |
     * | {@see GL43::GL_BPTC_UNORM} | {@see GL43::GL_COMPRESSED_RGBA_BPTC_UNORM}, {@see GL43::GL_COMPRESSED_SRGB_ALPHA_BPTC_UNORM}                                                                                                                                                                                                                                                                                                                                                |
     * | {@see GL43::GL_BPTC_FLOAT} | {@see GL43::GL_COMPRESSED_RGB_BPTC_SIGNED_FLOAT}, {@see GL43::GL_COMPRESSED_RGB_BPTC_UNSIGNED_FLOAT}                                                                                                                                                                                                                                                                                                                                        |
     * If the original texture is an array or has multiple mipmap levels, the parameters $minlayer, $numlayers,
     * $minlevel, and $numlevels control which of those slices and levels are considered part of the texture. The
     * $minlevel and $minlayer parameters are relative to the view of the original texture. If $numlayers or
     * $numlevels extend beyond the original texture, they are clamped to the max extent of the original texture.
     *
     * If the new texture's target is {@see GL43::GL_TEXTURE_CUBE_MAP}, the clamped $numlayers must be equal to 6. If
     * the new texture's target is {@see GL43::GL_TEXTURE_CUBE_MAP_ARRAY}, then $numlayers counts layer-faces rather
     * than layers, and the clamped $numlayers must be a multiple of 6. If the new texture's target is
     * {@see GL43::GL_TEXTURE_CUBE_MAP} or {@see GL43::GL_TEXTURE_CUBE_MAP_ARRAY}, the width and height of the
     * original texture's levels must be equal.
     *
     * When the original texture's target is {@see GL43::GL_TEXTURE_CUBE_MAP}, the layer parameters are interpreted
     * in the same order as if it were a {@see GL43::GL_TEXTURE_CUBE_MAP_ARRAY} with 6 layer-faces.
     *
     * If $target is {@see GL43::GL_TEXTURE_1D}, {@see GL43::GL_TEXTURE_2D}, {@see GL43::GL_TEXTURE_3D},
     * {@see GL43::GL_TEXTURE_RECTANGLE}, or {@see GL43::GL_TEXTURE_2D_MULTISAMPLE}, $numlayers must equal 1.
     *
     * The dimensions of the original texture must be less than or equal to the maximum supported dimensions of the
     * new target. For example, if the original texture has a {@see GL43::GL_TEXTURE_2D_ARRAY} target and its width
     * is greater than {@see GL43::GL_MAX_CUBE_MAP_TEXTURE_SIZE}, an error will be generated if
     * {@see GL43::textureView} is called to create a {@see GL43::GL_TEXTURE_CUBE_MAP} view.
     *
     * Texture commands that take a $level or $layer parameter, such as {@see GL43::texSubImage2D}, interpret that
     * parameter to be relative to the view of the texture. i.e. the mipmap level of the data store that would be
     * updated via {@see GL43::texSubImage2D} would be the sum of $level and the value of
     * {@see GL43::GL_TEXTURE_VIEW_MIN_LEVEL}.
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
    public function textureView(
        int $texture,
        int $target,
        int $origtexture,
        int $internalformat,
        int $minlevel,
        int $numlevels,
        int $minlayer,
        int $numlayers
    ): void {
        $__proc = $this->proc('glTextureView', 'void (*)(GLuint texture, GLenum target, GLuint origtexture, GLenum internalformat, GLuint minlevel, GLuint numlevels, GLuint minlayer, GLuint numlayers)');
        $__proc($texture, $target, $origtexture, $internalformat, $minlevel, $numlevels, $minlayer, $numlayers);
    }

    /**
     * {@see GL43::vertexAttribBinding} and {@see GL43::vertexArrayAttribBinding} establishes an association
     * between the generic vertex attribute of a vertex array object whose index is given by $attribindex, and a
     * vertex buffer binding whose index is given by $bindingindex. For {@see GL43::vertexAttribBinding}, the
     * vertex array object affected is that currently bound. For {@see GL43::vertexArrayAttribBinding}, $vaobj is
     * the name of the vertex array object.
     *
     * $attribindex must be less than the value of {@see GL43::GL_MAX_VERTEX_ATTRIBS} and $bindingindex must be less
     * than the value of {@see GL43::GL_MAX_VERTEX_ATTRIB_BINDINGS}.
     *
     * @see http://docs.gl/gl4/glVertexAttribBinding
     * @since 4.3
     * @param int $attribindex
     * @param int $bindingindex
     * @return void
     */
    public function vertexAttribBinding(int $attribindex, int $bindingindex): void
    {
        $__proc = $this->proc('glVertexAttribBinding', 'void (*)(GLuint attribindex, GLuint bindingindex)');
        $__proc($attribindex, $bindingindex);
    }

    /**
     * {@see GL43::vertexAttribFormat}, {@see GL43::vertexAttribIFormat} and {@see GL43::vertexAttribLFormat},
     * as well as {@see GL43::vertexArrayAttribFormat}, {@see GL43::vertexArrayAttribIFormat} and
     * {@see GL43::vertexArrayAttribLFormat} specify the organization of data in vertex arrays. The first three
     * calls operate on the bound vertex array object, whereas the last three ones modify the state of a vertex array
     * object with ID $vaobj. $attribindex specifies the index of the generic vertex attribute array whose data
     * layout is being described, and must be less than the value of {@see GL43::GL_MAX_VERTEX_ATTRIBS}.
     *
     * $size determines the number of components per vertex are allocated to the specified attribute and must be 1,
     * 2, 3 or 4. $type indicates the type of the data. If $type is one of {@see GL43::GL_BYTE},
     * {@see GL43::GL_SHORT}, {@see GL43::GL_INT}, {@see GL43::GL_FIXED}, {@see GL43::GL_FLOAT},
     * {@see GL43::GL_HALF_FLOAT}, and {@see GL43::GL_DOUBLE} indicate types `GLbyte`, `GLshort`, `GLint`, `GLfixed`,
     * `GLfloat`, `GLhalf`, and `GLdouble`, respectively; the values {@see GL43::GL_UNSIGNED_BYTE},
     * {@see GL43::GL_UNSIGNED_SHORT}, and {@see GL43::GL_UNSIGNED_INT} indicate types `GLubyte`, `GLushort`, and
     * `GLuint`, respectively; the values {@see GL43::GL_INT_2_10_10_10_REV} and
     * {@see GL43::GL_UNSIGNED_INT_2_10_10_10_REV} indicating respectively four signed or unsigned elements packed
     * into a single `GLuint`; and the value {@see GL43::GL_UNSIGNED_INT_10F_11F_11F_REV} indicating three floating
     * point values packed into a single `GLuint`.
     *
     * {@see GL43::vertexAttribLFormat} and {@see GL43::vertexArrayAttribLFormat} is used to specify layout for
     * data associated with a generic attribute variable declared as 64-bit double precision components. For
     * {@see GL43::vertexAttribLFormat} and {@see GL43::vertexArrayAttribLFormat}, $type must be
     * {@see GL43::GL_DOUBLE}. In contrast to {@see GL43::vertexAttribFormat} or
     * {@see GL43::vertexArrayAttribFormat}, which will cause data declared as {@see GL43::GL_DOUBLE} to be
     * converted to 32-bit representation, {@see GL43::vertexAttribLFormat} and
     * {@see GL43::vertexArrayAttribLFormat} cause such data to be left in its natural, 64-bit representation.
     *
     * For {@see GL43::vertexAttribFormat} and {@see GL43::vertexArrayAttribFormat}, if $normalized is
     * {@see GL43::GL_TRUE}, then integer data is normalized to the range [-1, 1] or [0, 1] if it is signed or
     * unsigned, respectively. If $normalized is {@see GL43::GL_FALSE} then integer data is directly converted to
     * floating point.
     *
     * $relativeoffset is the offset, measured in basic machine units of the first element relative to the start of
     * the vertex buffer binding this attribute fetches from.
     *
     * {@see GL43::vertexAttribFormat} and {@see GL43::vertexArrayAttribFormat} should be used to describe vertex
     * attribute layout for floating-point vertex attributes, {@see GL43::vertexAttribIFormat} and
     * {@see GL43::vertexArrayAttribIFormat} should be used to describe vertex attribute layout for integer vertex
     * attribute, and {@see GL43::vertexAttribLFormat} and {@see GL43::vertexArrayAttribLFormat} should be used
     * to describe the layout for 64-bit vertex attributes. Data for an array specified by
     * {@see GL43::vertexAttribIFormat} and {@see GL43::vertexArrayAttribIFormat} will always be left as integer
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
    public function vertexAttribFormat(int $attribindex, int $size, int $type, int $normalized, int $relativeoffset): void
    {
        $__proc = $this->proc('glVertexAttribFormat', 'void (*)(GLuint attribindex, GLint size, GLenum type, GLboolean normalized, GLuint relativeoffset)');
        $__proc($attribindex, $size, $type, $normalized, $relativeoffset);
    }

    /**
     * {@see GL43::vertexAttribFormat}, {@see GL43::vertexAttribIFormat} and {@see GL43::vertexAttribLFormat},
     * as well as {@see GL43::vertexArrayAttribFormat}, {@see GL43::vertexArrayAttribIFormat} and
     * {@see GL43::vertexArrayAttribLFormat} specify the organization of data in vertex arrays. The first three
     * calls operate on the bound vertex array object, whereas the last three ones modify the state of a vertex array
     * object with ID $vaobj. $attribindex specifies the index of the generic vertex attribute array whose data
     * layout is being described, and must be less than the value of {@see GL43::GL_MAX_VERTEX_ATTRIBS}.
     *
     * $size determines the number of components per vertex are allocated to the specified attribute and must be 1,
     * 2, 3 or 4. $type indicates the type of the data. If $type is one of {@see GL43::GL_BYTE},
     * {@see GL43::GL_SHORT}, {@see GL43::GL_INT}, {@see GL43::GL_FIXED}, {@see GL43::GL_FLOAT},
     * {@see GL43::GL_HALF_FLOAT}, and {@see GL43::GL_DOUBLE} indicate types `GLbyte`, `GLshort`, `GLint`, `GLfixed`,
     * `GLfloat`, `GLhalf`, and `GLdouble`, respectively; the values {@see GL43::GL_UNSIGNED_BYTE},
     * {@see GL43::GL_UNSIGNED_SHORT}, and {@see GL43::GL_UNSIGNED_INT} indicate types `GLubyte`, `GLushort`, and
     * `GLuint`, respectively; the values {@see GL43::GL_INT_2_10_10_10_REV} and
     * {@see GL43::GL_UNSIGNED_INT_2_10_10_10_REV} indicating respectively four signed or unsigned elements packed
     * into a single `GLuint`; and the value {@see GL43::GL_UNSIGNED_INT_10F_11F_11F_REV} indicating three floating
     * point values packed into a single `GLuint`.
     *
     * {@see GL43::vertexAttribLFormat} and {@see GL43::vertexArrayAttribLFormat} is used to specify layout for
     * data associated with a generic attribute variable declared as 64-bit double precision components. For
     * {@see GL43::vertexAttribLFormat} and {@see GL43::vertexArrayAttribLFormat}, $type must be
     * {@see GL43::GL_DOUBLE}. In contrast to {@see GL43::vertexAttribFormat} or
     * {@see GL43::vertexArrayAttribFormat}, which will cause data declared as {@see GL43::GL_DOUBLE} to be
     * converted to 32-bit representation, {@see GL43::vertexAttribLFormat} and
     * {@see GL43::vertexArrayAttribLFormat} cause such data to be left in its natural, 64-bit representation.
     *
     * For {@see GL43::vertexAttribFormat} and {@see GL43::vertexArrayAttribFormat}, if $normalized is
     * {@see GL43::GL_TRUE}, then integer data is normalized to the range [-1, 1] or [0, 1] if it is signed or
     * unsigned, respectively. If $normalized is {@see GL43::GL_FALSE} then integer data is directly converted to
     * floating point.
     *
     * $relativeoffset is the offset, measured in basic machine units of the first element relative to the start of
     * the vertex buffer binding this attribute fetches from.
     *
     * {@see GL43::vertexAttribFormat} and {@see GL43::vertexArrayAttribFormat} should be used to describe vertex
     * attribute layout for floating-point vertex attributes, {@see GL43::vertexAttribIFormat} and
     * {@see GL43::vertexArrayAttribIFormat} should be used to describe vertex attribute layout for integer vertex
     * attribute, and {@see GL43::vertexAttribLFormat} and {@see GL43::vertexArrayAttribLFormat} should be used
     * to describe the layout for 64-bit vertex attributes. Data for an array specified by
     * {@see GL43::vertexAttribIFormat} and {@see GL43::vertexArrayAttribIFormat} will always be left as integer
     * values; such data are referred to as pure integers.
     *
     * @see http://docs.gl/gl4/glVertexAttribFormat
     * @since 4.3
     * @param int $attribindex
     * @param int $size
     * @param int $type
     * @param int $relativeoffset
     * @return void
     */
    public function vertexAttribIFormat(int $attribindex, int $size, int $type, int $relativeoffset): void
    {
        $__proc = $this->proc('glVertexAttribIFormat', 'void (*)(GLuint attribindex, GLint size, GLenum type, GLuint relativeoffset)');
        $__proc($attribindex, $size, $type, $relativeoffset);
    }

    /**
     * {@see GL43::vertexAttribFormat}, {@see GL43::vertexAttribIFormat} and {@see GL43::vertexAttribLFormat},
     * as well as {@see GL43::vertexArrayAttribFormat}, {@see GL43::vertexArrayAttribIFormat} and
     * {@see GL43::vertexArrayAttribLFormat} specify the organization of data in vertex arrays. The first three
     * calls operate on the bound vertex array object, whereas the last three ones modify the state of a vertex array
     * object with ID $vaobj. $attribindex specifies the index of the generic vertex attribute array whose data
     * layout is being described, and must be less than the value of {@see GL43::GL_MAX_VERTEX_ATTRIBS}.
     *
     * $size determines the number of components per vertex are allocated to the specified attribute and must be 1,
     * 2, 3 or 4. $type indicates the type of the data. If $type is one of {@see GL43::GL_BYTE},
     * {@see GL43::GL_SHORT}, {@see GL43::GL_INT}, {@see GL43::GL_FIXED}, {@see GL43::GL_FLOAT},
     * {@see GL43::GL_HALF_FLOAT}, and {@see GL43::GL_DOUBLE} indicate types `GLbyte`, `GLshort`, `GLint`, `GLfixed`,
     * `GLfloat`, `GLhalf`, and `GLdouble`, respectively; the values {@see GL43::GL_UNSIGNED_BYTE},
     * {@see GL43::GL_UNSIGNED_SHORT}, and {@see GL43::GL_UNSIGNED_INT} indicate types `GLubyte`, `GLushort`, and
     * `GLuint`, respectively; the values {@see GL43::GL_INT_2_10_10_10_REV} and
     * {@see GL43::GL_UNSIGNED_INT_2_10_10_10_REV} indicating respectively four signed or unsigned elements packed
     * into a single `GLuint`; and the value {@see GL43::GL_UNSIGNED_INT_10F_11F_11F_REV} indicating three floating
     * point values packed into a single `GLuint`.
     *
     * {@see GL43::vertexAttribLFormat} and {@see GL43::vertexArrayAttribLFormat} is used to specify layout for
     * data associated with a generic attribute variable declared as 64-bit double precision components. For
     * {@see GL43::vertexAttribLFormat} and {@see GL43::vertexArrayAttribLFormat}, $type must be
     * {@see GL43::GL_DOUBLE}. In contrast to {@see GL43::vertexAttribFormat} or
     * {@see GL43::vertexArrayAttribFormat}, which will cause data declared as {@see GL43::GL_DOUBLE} to be
     * converted to 32-bit representation, {@see GL43::vertexAttribLFormat} and
     * {@see GL43::vertexArrayAttribLFormat} cause such data to be left in its natural, 64-bit representation.
     *
     * For {@see GL43::vertexAttribFormat} and {@see GL43::vertexArrayAttribFormat}, if $normalized is
     * {@see GL43::GL_TRUE}, then integer data is normalized to the range [-1, 1] or [0, 1] if it is signed or
     * unsigned, respectively. If $normalized is {@see GL43::GL_FALSE} then integer data is directly converted to
     * floating point.
     *
     * $relativeoffset is the offset, measured in basic machine units of the first element relative to the start of
     * the vertex buffer binding this attribute fetches from.
     *
     * {@see GL43::vertexAttribFormat} and {@see GL43::vertexArrayAttribFormat} should be used to describe vertex
     * attribute layout for floating-point vertex attributes, {@see GL43::vertexAttribIFormat} and
     * {@see GL43::vertexArrayAttribIFormat} should be used to describe vertex attribute layout for integer vertex
     * attribute, and {@see GL43::vertexAttribLFormat} and {@see GL43::vertexArrayAttribLFormat} should be used
     * to describe the layout for 64-bit vertex attributes. Data for an array specified by
     * {@see GL43::vertexAttribIFormat} and {@see GL43::vertexArrayAttribIFormat} will always be left as integer
     * values; such data are referred to as pure integers.
     *
     * @see http://docs.gl/gl4/glVertexAttribFormat
     * @since 4.3
     * @param int $attribindex
     * @param int $size
     * @param int $type
     * @param int $relativeoffset
     * @return void
     */
    public function vertexAttribLFormat(int $attribindex, int $size, int $type, int $relativeoffset): void
    {
        $__proc = $this->proc('glVertexAttribLFormat', 'void (*)(GLuint attribindex, GLint size, GLenum type, GLuint relativeoffset)');
        $__proc($attribindex, $size, $type, $relativeoffset);
    }

    /**
     * {@see GL43::vertexBindingDivisor} and {@see GL43::vertexArrayBindingDivisor} modify the rate at which
     * generic vertex attributes advance when rendering multiple instances of primitives in a single draw command. If
     * $divisor is zero, the attributes using the buffer bound to $bindingindex advance once per vertex. If $divisor
     * is non-zero, the attributes advance once per $divisor instances of the set(s) of vertices being rendered. An
     * attribute is referred to as instanced if the corresponding $divisor value is non-zero.
     *
     * {@see GL43::vertexBindingDivisor} uses currently bound vertex array object , whereas
     * {@see GL43::vertexArrayBindingDivisor} updates state of the vertex array object with ID $vaobj.
     *
     * @see http://docs.gl/gl4/glVertexBindingDivisor
     * @since 4.3
     * @param int $bindingindex
     * @param int $divisor
     * @return void
     */
    public function vertexBindingDivisor(int $bindingindex, int $divisor): void
    {
        $__proc = $this->proc('glVertexBindingDivisor', 'void (*)(GLuint bindingindex, GLuint divisor)');
        $__proc($bindingindex, $divisor);
    }
}
