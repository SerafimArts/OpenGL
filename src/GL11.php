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
 * The OpenGL functionality up to version 1.1. Includes the deprecated symbols of the Compatibility Profile.
 *
 * Extensions promoted to core in this release:
 *
 * - EXT_vertex_array @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_vertex_array.txt
 * - EXT_polygon_offset @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_polygon_offset.txt
 * - EXT_blend_logic_op @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_blend_logic_op.txt
 * - EXT_texture @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_texture.txt
 * - EXT_copy_texture @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_copy_texture.txt
 * - EXT_subtexture @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_subtexture.txt
 * - EXT_texture_object @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_texture_object.txt
 */
class GL11 extends GL
{
    /**
     * @var int
     * @since 1.1
     */
    public const GL_ACCUM = 0x0100;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LOAD = 0x0101;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_RETURN = 0x0102;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MULT = 0x0103;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_ADD = 0x0104;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_NEVER = 0x0200;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LESS = 0x0201;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_EQUAL = 0x0202;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LEQUAL = 0x0203;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_GREATER = 0x0204;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_NOTEQUAL = 0x0205;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_GEQUAL = 0x0206;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_ALWAYS = 0x0207;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_CURRENT_BIT = 0x0001;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_POINT_BIT = 0x0002;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LINE_BIT = 0x0004;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_POLYGON_BIT = 0x0008;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_POLYGON_STIPPLE_BIT = 0x0010;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PIXEL_MODE_BIT = 0x0020;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LIGHTING_BIT = 0x0040;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_FOG_BIT = 0x0080;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_DEPTH_BUFFER_BIT = 0x0100;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_ACCUM_BUFFER_BIT = 0x0200;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_STENCIL_BUFFER_BIT = 0x0400;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_VIEWPORT_BIT = 0x0800;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TRANSFORM_BIT = 0x1000;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_ENABLE_BIT = 0x2000;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_COLOR_BUFFER_BIT = 0x4000;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_HINT_BIT = 0x8000;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_EVAL_BIT = 0x10000;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LIST_BIT = 0x20000;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_BIT = 0x40000;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_SCISSOR_BIT = 0x80000;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_ALL_ATTRIB_BITS = 0xfffff;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_POINTS = 0x0000;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LINES = 0x0001;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LINE_LOOP = 0x0002;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LINE_STRIP = 0x0003;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TRIANGLES = 0x0004;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TRIANGLE_STRIP = 0x0005;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TRIANGLE_FAN = 0x0006;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_QUADS = 0x0007;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_QUAD_STRIP = 0x0008;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_POLYGON = 0x0009;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_ZERO = 0x0000;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_ONE = 0x0001;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_SRC_COLOR = 0x0300;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_ONE_MINUS_SRC_COLOR = 0x0301;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_SRC_ALPHA = 0x0302;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_ONE_MINUS_SRC_ALPHA = 0x0303;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_DST_ALPHA = 0x0304;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_ONE_MINUS_DST_ALPHA = 0x0305;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_DST_COLOR = 0x0306;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_ONE_MINUS_DST_COLOR = 0x0307;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_SRC_ALPHA_SATURATE = 0x0308;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TRUE = 0x0001;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_FALSE = 0x0000;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_CLIP_PLANE0 = 0x3000;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_CLIP_PLANE1 = 0x3001;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_CLIP_PLANE2 = 0x3002;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_CLIP_PLANE3 = 0x3003;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_CLIP_PLANE4 = 0x3004;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_CLIP_PLANE5 = 0x3005;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_BYTE = 0x1400;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_UNSIGNED_BYTE = 0x1401;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_SHORT = 0x1402;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_UNSIGNED_SHORT = 0x1403;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_INT = 0x1404;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_UNSIGNED_INT = 0x1405;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_FLOAT = 0x1406;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_2_BYTES = 0x1407;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_3_BYTES = 0x1408;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_4_BYTES = 0x1409;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_DOUBLE = 0x140a;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_NONE = 0x0000;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_FRONT_LEFT = 0x0400;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_FRONT_RIGHT = 0x0401;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_BACK_LEFT = 0x0402;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_BACK_RIGHT = 0x0403;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_FRONT = 0x0404;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_BACK = 0x0405;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LEFT = 0x0406;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_RIGHT = 0x0407;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_FRONT_AND_BACK = 0x0408;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_AUX0 = 0x0409;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_AUX1 = 0x040a;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_AUX2 = 0x040b;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_AUX3 = 0x040c;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_NO_ERROR = 0x0000;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_INVALID_ENUM = 0x0500;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_INVALID_VALUE = 0x0501;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_INVALID_OPERATION = 0x0502;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_STACK_OVERFLOW = 0x0503;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_STACK_UNDERFLOW = 0x0504;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_OUT_OF_MEMORY = 0x0505;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_2D = 0x0600;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_3D = 0x0601;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_3D_COLOR = 0x0602;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_3D_COLOR_TEXTURE = 0x0603;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_4D_COLOR_TEXTURE = 0x0604;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PASS_THROUGH_TOKEN = 0x0700;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_POINT_TOKEN = 0x0701;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LINE_TOKEN = 0x0702;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_POLYGON_TOKEN = 0x0703;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_BITMAP_TOKEN = 0x0704;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_DRAW_PIXEL_TOKEN = 0x0705;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_COPY_PIXEL_TOKEN = 0x0706;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LINE_RESET_TOKEN = 0x0707;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_EXP = 0x0800;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_EXP2 = 0x0801;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_CW = 0x0900;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_CCW = 0x0901;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_COEFF = 0x0a00;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_ORDER = 0x0a01;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_DOMAIN = 0x0a02;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_CURRENT_COLOR = 0x0b00;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_CURRENT_INDEX = 0x0b01;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_CURRENT_NORMAL = 0x0b02;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_CURRENT_TEXTURE_COORDS = 0x0b03;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_CURRENT_RASTER_COLOR = 0x0b04;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_CURRENT_RASTER_INDEX = 0x0b05;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_CURRENT_RASTER_TEXTURE_COORDS = 0x0b06;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_CURRENT_RASTER_POSITION = 0x0b07;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_CURRENT_RASTER_POSITION_VALID = 0x0b08;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_CURRENT_RASTER_DISTANCE = 0x0b09;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_POINT_SMOOTH = 0x0b10;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_POINT_SIZE = 0x0b11;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_POINT_SIZE_RANGE = 0x0b12;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_POINT_SIZE_GRANULARITY = 0x0b13;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LINE_SMOOTH = 0x0b20;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LINE_WIDTH = 0x0b21;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LINE_WIDTH_RANGE = 0x0b22;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LINE_WIDTH_GRANULARITY = 0x0b23;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LINE_STIPPLE = 0x0b24;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LINE_STIPPLE_PATTERN = 0x0b25;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LINE_STIPPLE_REPEAT = 0x0b26;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LIST_MODE = 0x0b30;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAX_LIST_NESTING = 0x0b31;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LIST_BASE = 0x0b32;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LIST_INDEX = 0x0b33;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_POLYGON_MODE = 0x0b40;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_POLYGON_SMOOTH = 0x0b41;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_POLYGON_STIPPLE = 0x0b42;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_EDGE_FLAG = 0x0b43;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_CULL_FACE = 0x0b44;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_CULL_FACE_MODE = 0x0b45;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_FRONT_FACE = 0x0b46;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LIGHTING = 0x0b50;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LIGHT_MODEL_LOCAL_VIEWER = 0x0b51;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LIGHT_MODEL_TWO_SIDE = 0x0b52;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LIGHT_MODEL_AMBIENT = 0x0b53;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_SHADE_MODEL = 0x0b54;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_COLOR_MATERIAL_FACE = 0x0b55;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_COLOR_MATERIAL_PARAMETER = 0x0b56;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_COLOR_MATERIAL = 0x0b57;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_FOG = 0x0b60;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_FOG_INDEX = 0x0b61;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_FOG_DENSITY = 0x0b62;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_FOG_START = 0x0b63;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_FOG_END = 0x0b64;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_FOG_MODE = 0x0b65;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_FOG_COLOR = 0x0b66;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_DEPTH_RANGE = 0x0b70;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_DEPTH_TEST = 0x0b71;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_DEPTH_WRITEMASK = 0x0b72;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_DEPTH_CLEAR_VALUE = 0x0b73;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_DEPTH_FUNC = 0x0b74;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_ACCUM_CLEAR_VALUE = 0x0b80;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_STENCIL_TEST = 0x0b90;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_STENCIL_CLEAR_VALUE = 0x0b91;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_STENCIL_FUNC = 0x0b92;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_STENCIL_VALUE_MASK = 0x0b93;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_STENCIL_FAIL = 0x0b94;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_STENCIL_PASS_DEPTH_FAIL = 0x0b95;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_STENCIL_PASS_DEPTH_PASS = 0x0b96;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_STENCIL_REF = 0x0b97;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_STENCIL_WRITEMASK = 0x0b98;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MATRIX_MODE = 0x0ba0;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_NORMALIZE = 0x0ba1;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_VIEWPORT = 0x0ba2;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MODELVIEW_STACK_DEPTH = 0x0ba3;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PROJECTION_STACK_DEPTH = 0x0ba4;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_STACK_DEPTH = 0x0ba5;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MODELVIEW_MATRIX = 0x0ba6;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PROJECTION_MATRIX = 0x0ba7;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_MATRIX = 0x0ba8;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_ATTRIB_STACK_DEPTH = 0x0bb0;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_CLIENT_ATTRIB_STACK_DEPTH = 0x0bb1;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_ALPHA_TEST = 0x0bc0;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_ALPHA_TEST_FUNC = 0x0bc1;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_ALPHA_TEST_REF = 0x0bc2;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_DITHER = 0x0bd0;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_BLEND_DST = 0x0be0;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_BLEND_SRC = 0x0be1;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_BLEND = 0x0be2;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LOGIC_OP_MODE = 0x0bf0;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_INDEX_LOGIC_OP = 0x0bf1;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LOGIC_OP = 0x0bf1;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_COLOR_LOGIC_OP = 0x0bf2;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_AUX_BUFFERS = 0x0c00;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_DRAW_BUFFER = 0x0c01;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_READ_BUFFER = 0x0c02;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_SCISSOR_BOX = 0x0c10;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_SCISSOR_TEST = 0x0c11;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_INDEX_CLEAR_VALUE = 0x0c20;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_INDEX_WRITEMASK = 0x0c21;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_COLOR_CLEAR_VALUE = 0x0c22;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_COLOR_WRITEMASK = 0x0c23;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_INDEX_MODE = 0x0c30;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_RGBA_MODE = 0x0c31;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_DOUBLEBUFFER = 0x0c32;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_STEREO = 0x0c33;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_RENDER_MODE = 0x0c40;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PERSPECTIVE_CORRECTION_HINT = 0x0c50;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_POINT_SMOOTH_HINT = 0x0c51;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LINE_SMOOTH_HINT = 0x0c52;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_POLYGON_SMOOTH_HINT = 0x0c53;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_FOG_HINT = 0x0c54;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_GEN_S = 0x0c60;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_GEN_T = 0x0c61;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_GEN_R = 0x0c62;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_GEN_Q = 0x0c63;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PIXEL_MAP_I_TO_I = 0x0c70;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PIXEL_MAP_S_TO_S = 0x0c71;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PIXEL_MAP_I_TO_R = 0x0c72;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PIXEL_MAP_I_TO_G = 0x0c73;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PIXEL_MAP_I_TO_B = 0x0c74;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PIXEL_MAP_I_TO_A = 0x0c75;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PIXEL_MAP_R_TO_R = 0x0c76;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PIXEL_MAP_G_TO_G = 0x0c77;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PIXEL_MAP_B_TO_B = 0x0c78;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PIXEL_MAP_A_TO_A = 0x0c79;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PIXEL_MAP_I_TO_I_SIZE = 0x0cb0;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PIXEL_MAP_S_TO_S_SIZE = 0x0cb1;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PIXEL_MAP_I_TO_R_SIZE = 0x0cb2;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PIXEL_MAP_I_TO_G_SIZE = 0x0cb3;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PIXEL_MAP_I_TO_B_SIZE = 0x0cb4;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PIXEL_MAP_I_TO_A_SIZE = 0x0cb5;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PIXEL_MAP_R_TO_R_SIZE = 0x0cb6;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PIXEL_MAP_G_TO_G_SIZE = 0x0cb7;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PIXEL_MAP_B_TO_B_SIZE = 0x0cb8;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PIXEL_MAP_A_TO_A_SIZE = 0x0cb9;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_UNPACK_SWAP_BYTES = 0x0cf0;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_UNPACK_LSB_FIRST = 0x0cf1;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_UNPACK_ROW_LENGTH = 0x0cf2;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_UNPACK_SKIP_ROWS = 0x0cf3;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_UNPACK_SKIP_PIXELS = 0x0cf4;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_UNPACK_ALIGNMENT = 0x0cf5;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PACK_SWAP_BYTES = 0x0d00;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PACK_LSB_FIRST = 0x0d01;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PACK_ROW_LENGTH = 0x0d02;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PACK_SKIP_ROWS = 0x0d03;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PACK_SKIP_PIXELS = 0x0d04;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PACK_ALIGNMENT = 0x0d05;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAP_COLOR = 0x0d10;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAP_STENCIL = 0x0d11;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_INDEX_SHIFT = 0x0d12;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_INDEX_OFFSET = 0x0d13;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_RED_SCALE = 0x0d14;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_RED_BIAS = 0x0d15;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_ZOOM_X = 0x0d16;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_ZOOM_Y = 0x0d17;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_GREEN_SCALE = 0x0d18;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_GREEN_BIAS = 0x0d19;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_BLUE_SCALE = 0x0d1a;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_BLUE_BIAS = 0x0d1b;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_ALPHA_SCALE = 0x0d1c;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_ALPHA_BIAS = 0x0d1d;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_DEPTH_SCALE = 0x0d1e;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_DEPTH_BIAS = 0x0d1f;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAX_EVAL_ORDER = 0x0d30;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAX_LIGHTS = 0x0d31;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAX_CLIP_PLANES = 0x0d32;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAX_TEXTURE_SIZE = 0x0d33;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAX_PIXEL_MAP_TABLE = 0x0d34;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAX_ATTRIB_STACK_DEPTH = 0x0d35;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAX_MODELVIEW_STACK_DEPTH = 0x0d36;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAX_NAME_STACK_DEPTH = 0x0d37;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAX_PROJECTION_STACK_DEPTH = 0x0d38;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAX_TEXTURE_STACK_DEPTH = 0x0d39;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAX_VIEWPORT_DIMS = 0x0d3a;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAX_CLIENT_ATTRIB_STACK_DEPTH = 0x0d3b;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_SUBPIXEL_BITS = 0x0d50;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_INDEX_BITS = 0x0d51;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_RED_BITS = 0x0d52;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_GREEN_BITS = 0x0d53;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_BLUE_BITS = 0x0d54;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_ALPHA_BITS = 0x0d55;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_DEPTH_BITS = 0x0d56;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_STENCIL_BITS = 0x0d57;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_ACCUM_RED_BITS = 0x0d58;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_ACCUM_GREEN_BITS = 0x0d59;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_ACCUM_BLUE_BITS = 0x0d5a;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_ACCUM_ALPHA_BITS = 0x0d5b;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_NAME_STACK_DEPTH = 0x0d70;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_AUTO_NORMAL = 0x0d80;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAP1_COLOR_4 = 0x0d90;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAP1_INDEX = 0x0d91;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAP1_NORMAL = 0x0d92;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAP1_TEXTURE_COORD_1 = 0x0d93;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAP1_TEXTURE_COORD_2 = 0x0d94;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAP1_TEXTURE_COORD_3 = 0x0d95;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAP1_TEXTURE_COORD_4 = 0x0d96;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAP1_VERTEX_3 = 0x0d97;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAP1_VERTEX_4 = 0x0d98;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAP2_COLOR_4 = 0x0db0;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAP2_INDEX = 0x0db1;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAP2_NORMAL = 0x0db2;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAP2_TEXTURE_COORD_1 = 0x0db3;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAP2_TEXTURE_COORD_2 = 0x0db4;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAP2_TEXTURE_COORD_3 = 0x0db5;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAP2_TEXTURE_COORD_4 = 0x0db6;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAP2_VERTEX_3 = 0x0db7;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAP2_VERTEX_4 = 0x0db8;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAP1_GRID_DOMAIN = 0x0dd0;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAP1_GRID_SEGMENTS = 0x0dd1;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAP2_GRID_DOMAIN = 0x0dd2;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MAP2_GRID_SEGMENTS = 0x0dd3;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_1D = 0x0de0;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_2D = 0x0de1;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_FEEDBACK_BUFFER_POINTER = 0x0df0;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_FEEDBACK_BUFFER_SIZE = 0x0df1;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_FEEDBACK_BUFFER_TYPE = 0x0df2;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_SELECTION_BUFFER_POINTER = 0x0df3;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_SELECTION_BUFFER_SIZE = 0x0df4;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_WIDTH = 0x1000;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_HEIGHT = 0x1001;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_INTERNAL_FORMAT = 0x1003;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_COMPONENTS = 0x1003;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_BORDER_COLOR = 0x1004;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_BORDER = 0x1005;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_DONT_CARE = 0x1100;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_FASTEST = 0x1101;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_NICEST = 0x1102;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LIGHT0 = 0x4000;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LIGHT1 = 0x4001;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LIGHT2 = 0x4002;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LIGHT3 = 0x4003;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LIGHT4 = 0x4004;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LIGHT5 = 0x4005;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LIGHT6 = 0x4006;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LIGHT7 = 0x4007;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_AMBIENT = 0x1200;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_DIFFUSE = 0x1201;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_SPECULAR = 0x1202;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_POSITION = 0x1203;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_SPOT_DIRECTION = 0x1204;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_SPOT_EXPONENT = 0x1205;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_SPOT_CUTOFF = 0x1206;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_CONSTANT_ATTENUATION = 0x1207;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LINEAR_ATTENUATION = 0x1208;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_QUADRATIC_ATTENUATION = 0x1209;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_COMPILE = 0x1300;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_COMPILE_AND_EXECUTE = 0x1301;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_CLEAR = 0x1500;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_AND = 0x1501;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_AND_REVERSE = 0x1502;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_COPY = 0x1503;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_AND_INVERTED = 0x1504;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_NOOP = 0x1505;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_XOR = 0x1506;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_OR = 0x1507;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_NOR = 0x1508;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_EQUIV = 0x1509;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_INVERT = 0x150a;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_OR_REVERSE = 0x150b;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_COPY_INVERTED = 0x150c;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_OR_INVERTED = 0x150d;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_NAND = 0x150e;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_SET = 0x150f;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_EMISSION = 0x1600;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_SHININESS = 0x1601;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_AMBIENT_AND_DIFFUSE = 0x1602;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_COLOR_INDEXES = 0x1603;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MODELVIEW = 0x1700;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PROJECTION = 0x1701;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE = 0x1702;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_COLOR = 0x1800;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_DEPTH = 0x1801;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_STENCIL = 0x1802;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_COLOR_INDEX = 0x1900;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_STENCIL_INDEX = 0x1901;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_DEPTH_COMPONENT = 0x1902;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_RED = 0x1903;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_GREEN = 0x1904;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_BLUE = 0x1905;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_ALPHA = 0x1906;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_RGB = 0x1907;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_RGBA = 0x1908;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LUMINANCE = 0x1909;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LUMINANCE_ALPHA = 0x190a;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_BITMAP = 0x1a00;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_POINT = 0x1b00;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LINE = 0x1b01;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_FILL = 0x1b02;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_RENDER = 0x1c00;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_FEEDBACK = 0x1c01;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_SELECT = 0x1c02;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_FLAT = 0x1d00;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_SMOOTH = 0x1d01;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_KEEP = 0x1e00;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_REPLACE = 0x1e01;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_INCR = 0x1e02;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_DECR = 0x1e03;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_VENDOR = 0x1f00;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_RENDERER = 0x1f01;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_VERSION = 0x1f02;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_EXTENSIONS = 0x1f03;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_S = 0x2000;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_T = 0x2001;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_R = 0x2002;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_Q = 0x2003;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_MODULATE = 0x2100;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_DECAL = 0x2101;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_ENV_MODE = 0x2200;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_ENV_COLOR = 0x2201;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_ENV = 0x2300;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_EYE_LINEAR = 0x2400;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_OBJECT_LINEAR = 0x2401;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_SPHERE_MAP = 0x2402;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_GEN_MODE = 0x2500;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_OBJECT_PLANE = 0x2501;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_EYE_PLANE = 0x2502;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_NEAREST = 0x2600;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LINEAR = 0x2601;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_NEAREST_MIPMAP_NEAREST = 0x2700;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LINEAR_MIPMAP_NEAREST = 0x2701;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_NEAREST_MIPMAP_LINEAR = 0x2702;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LINEAR_MIPMAP_LINEAR = 0x2703;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_MAG_FILTER = 0x2800;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_MIN_FILTER = 0x2801;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_WRAP_S = 0x2802;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_WRAP_T = 0x2803;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_CLAMP = 0x2900;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_REPEAT = 0x2901;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_CLIENT_PIXEL_STORE_BIT = 0x0001;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_CLIENT_VERTEX_ARRAY_BIT = 0x0002;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_CLIENT_ALL_ATTRIB_BITS = 0xffffffff;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_POLYGON_OFFSET_FACTOR = 0x8038;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_POLYGON_OFFSET_UNITS = 0x2a00;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_POLYGON_OFFSET_POINT = 0x2a01;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_POLYGON_OFFSET_LINE = 0x2a02;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_POLYGON_OFFSET_FILL = 0x8037;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_ALPHA4 = 0x803b;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_ALPHA8 = 0x803c;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_ALPHA12 = 0x803d;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_ALPHA16 = 0x803e;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LUMINANCE4 = 0x803f;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LUMINANCE8 = 0x8040;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LUMINANCE12 = 0x8041;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LUMINANCE16 = 0x8042;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LUMINANCE4_ALPHA4 = 0x8043;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LUMINANCE6_ALPHA2 = 0x8044;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LUMINANCE8_ALPHA8 = 0x8045;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LUMINANCE12_ALPHA4 = 0x8046;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LUMINANCE12_ALPHA12 = 0x8047;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_LUMINANCE16_ALPHA16 = 0x8048;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_INTENSITY = 0x8049;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_INTENSITY4 = 0x804a;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_INTENSITY8 = 0x804b;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_INTENSITY12 = 0x804c;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_INTENSITY16 = 0x804d;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_R3_G3_B2 = 0x2a10;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_RGB4 = 0x804f;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_RGB5 = 0x8050;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_RGB8 = 0x8051;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_RGB10 = 0x8052;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_RGB12 = 0x8053;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_RGB16 = 0x8054;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_RGBA2 = 0x8055;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_RGBA4 = 0x8056;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_RGB5_A1 = 0x8057;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_RGBA8 = 0x8058;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_RGB10_A2 = 0x8059;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_RGBA12 = 0x805a;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_RGBA16 = 0x805b;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_RED_SIZE = 0x805c;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_GREEN_SIZE = 0x805d;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_BLUE_SIZE = 0x805e;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_ALPHA_SIZE = 0x805f;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_LUMINANCE_SIZE = 0x8060;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_INTENSITY_SIZE = 0x8061;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PROXY_TEXTURE_1D = 0x8063;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_PROXY_TEXTURE_2D = 0x8064;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_PRIORITY = 0x8066;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_RESIDENT = 0x8067;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_BINDING_1D = 0x8068;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_BINDING_2D = 0x8069;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_VERTEX_ARRAY = 0x8074;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_NORMAL_ARRAY = 0x8075;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_COLOR_ARRAY = 0x8076;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_INDEX_ARRAY = 0x8077;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_COORD_ARRAY = 0x8078;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_EDGE_FLAG_ARRAY = 0x8079;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_VERTEX_ARRAY_SIZE = 0x807a;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_VERTEX_ARRAY_TYPE = 0x807b;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_VERTEX_ARRAY_STRIDE = 0x807c;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_NORMAL_ARRAY_TYPE = 0x807e;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_NORMAL_ARRAY_STRIDE = 0x807f;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_COLOR_ARRAY_SIZE = 0x8081;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_COLOR_ARRAY_TYPE = 0x8082;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_COLOR_ARRAY_STRIDE = 0x8083;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_INDEX_ARRAY_TYPE = 0x8085;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_INDEX_ARRAY_STRIDE = 0x8086;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_COORD_ARRAY_SIZE = 0x8088;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_COORD_ARRAY_TYPE = 0x8089;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_COORD_ARRAY_STRIDE = 0x808a;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_EDGE_FLAG_ARRAY_STRIDE = 0x808c;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_VERTEX_ARRAY_POINTER = 0x808e;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_NORMAL_ARRAY_POINTER = 0x808f;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_COLOR_ARRAY_POINTER = 0x8090;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_INDEX_ARRAY_POINTER = 0x8091;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_TEXTURE_COORD_ARRAY_POINTER = 0x8092;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_EDGE_FLAG_ARRAY_POINTER = 0x8093;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_V2F = 0x2a20;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_V3F = 0x2a21;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_C4UB_V2F = 0x2a22;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_C4UB_V3F = 0x2a23;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_C3F_V3F = 0x2a24;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_N3F_V3F = 0x2a25;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_C4F_N3F_V3F = 0x2a26;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_T2F_V3F = 0x2a27;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_T4F_V4F = 0x2a28;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_T2F_C4UB_V3F = 0x2a29;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_T2F_C3F_V3F = 0x2a2a;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_T2F_N3F_V3F = 0x2a2b;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_T2F_C4F_N3F_V3F = 0x2a2c;
    /**
     * @var int
     * @since 1.1
     */
    public const GL_T4F_C4F_N3F_V4F = 0x2a2d;

    /**
     * Sets the rasterization mode. It takes one argument, *`mode`*, which can assume one of three predefined values:
     *
     *  - `GL_RENDER` Render mode. Primitives are rasterized, producing pixel fragments, which are written into the
     * frame buffer. This is the normal mode and also the default mode.
     *
     *  - `GL_SELECT` Selection mode. No pixel fragments are produced, and no change to the frame buffer contents is
     * made. Instead, a record of the names of primitives that would have been drawn if the render mode had been
     * `GL_RENDER` is returned in a select buffer, which must be created (see {@see glSelectBuffer})
     * before selection mode is entered.
     *
     *  - `GL_FEEDBACK` Feedback mode. No pixel fragments are produced, and no change to the frame buffer contents is
     * made. Instead, the coordinates and attributes of vertices that would have been drawn if the render mode had
     * been `GL_RENDER` is returned in a feedback buffer, which must be created (see
     * {@see glFeedbackBuffer}) before feedback mode is entered.
     *
     * The return value of `glRenderMode` is determined by the render mode at the time `glRenderMode` is called,
     * rather than by *`mode`*. The values returned for the three render modes are as follows:
     *
     *  - `GL_RENDER` 0.
     *
     *  - `GL_SELECT` The number of hit records transferred to the select buffer.
     *
     *  - `GL_FEEDBACK` The number of values (not vertices) transferred to the feedback buffer.
     *
     * See the {@see glSelectBuffer} and {@see glFeedbackBuffer} reference pages for more
     * details concerning selection and feedback operation.
     *
     * @see http://docs.gl/gl2/glRenderMode
     * @since 1.1
     * @param int $mode
     * @return int
     */
    public static function glRenderMode(int $mode): int
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');

        return self::$ffi->glRenderMode($mode);
    }

    /**
     * Has one argument, *`range`*. It returns an integer *n* such that *`range`* contiguous empty display lists,
     * named n, n + 1 , ... , n + range - 1 , are created. If *`range`* is 0, if there is no group of *`range`*
     * contiguous names available, or if any error is generated, no display lists are generated, and 0 is returned.
     *
     * @see http://docs.gl/gl2/glGenLists
     * @since 1.1
     * @param int $range
     * @return int
     */
    public static function glGenLists(int $range): int
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($range >= \PHP_INT_MIN && $range <= \PHP_INT_MAX, 'Argument $range overflow: C type GLsizei is required');

        return self::$ffi->glGenLists($range);
    }

    /**
     * Returns the value of the error flag. Each detectable error is assigned a numeric code and symbolic name. When
     * an error occurs, the error flag is set to the appropriate error code value. No other errors are recorded until
     * `glGetError` is called, the error code is returned, and the flag is reset to `GL_NO_ERROR`. If a call to
     * `glGetError` returns `GL_NO_ERROR`, there has been no detectable error since the last call to `glGetError`, or
     * since the GL was initialized.
     *
     * To allow for distributed implementations, there may be several error flags. If any single error flag has
     * recorded an error, the value of that flag is returned and that flag is reset to `GL_NO_ERROR` when
     * `glGetError` is called. If more than one flag has recorded an error, `glGetError` returns and clears an
     * arbitrary error flag value. Thus, `glGetError` should always be called in a loop, until it returns
     * `GL_NO_ERROR`, if all error flags are to be reset.
     *
     * Initially, all error flags are set to `GL_NO_ERROR`.
     *
     * The following errors are currently defined:
     *
     *  - `GL_NO_ERROR` No error has been recorded. The value of this symbolic constant is guaranteed to be 0.
     *
     *  - `GL_INVALID_ENUM` An unacceptable value is specified for an enumerated argument. The offending command is
     * ignored and has no other side effect than to set the error flag.
     *
     *  - `GL_INVALID_VALUE` A numeric argument is out of range. The offending command is ignored and has no other
     * side effect than to set the error flag.
     *
     *  - `GL_INVALID_OPERATION` The specified operation is not allowed in the current state. The offending command
     * is ignored and has no other side effect than to set the error flag.
     *
     *  - `GL_STACK_OVERFLOW` This command would cause a stack overflow. The offending command is ignored and has no
     * other side effect than to set the error flag.
     *
     *  - `GL_STACK_UNDERFLOW` This command would cause a stack underflow. The offending command is ignored and has
     * no other side effect than to set the error flag.
     *
     *  - `GL_OUT_OF_MEMORY` There is not enough memory left to execute the command. The state of the GL is
     * undefined, except for the state of the error flags, after this error is recorded.
     *
     *  - `GL_TABLE_TOO_LARGE` The specified table exceeds the implementation's maximum supported table size. The
     * offending command is ignored and has no other side effect than to set the error flag.
     *
     * When an error flag is set, results of a GL operation are undefined only if `GL_OUT_OF_MEMORY` has occurred. In
     * all other cases, the command generating the error is ignored and has no effect on the GL state or frame buffer
     * contents. If the generating command returns a value, it returns 0. If `glGetError` itself generates an error,
     * it returns 0.
     *
     * @see http://docs.gl/gl2/glGetError
     * @see http://docs.gl/gl3/glGetError
     * @see http://docs.gl/gl4/glGetError
     * @since 1.1
     * @return int
     */
    public static function glGetError(): int
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        return self::$ffi->glGetError();
    }

    /**
     * GL establishes a ``working set'' of textures that are resident in texture memory. These textures can be bound
     * to a texture target much more efficiently than textures that are not resident.
     *
     *  - `glAreTexturesResident` queries the texture residence status of the *`n`* textures named by the elements of
     * *`textures`*. If all the named textures are resident, `glAreTexturesResident` returns `GL_TRUE`, and the
     * contents of *`residences`* are undisturbed. If not all the named textures are resident,
     * `glAreTexturesResident` returns `GL_FALSE`, and detailed status is returned in the *`n`* elements of
     * *`residences`*. If an element of *`residences`* is `GL_TRUE`, then the texture named by the corresponding
     * element of *`textures`* is resident.
     *
     * The residence status of a single bound texture may also be queried by calling
     * {@see glGetTexParameter} with the *target* argument set to the target to which the texture is
     * bound, and the *pname* argument set to `GL_TEXTURE_RESIDENT`. This is the only way that the residence status
     * of a default texture can be queried.
     *
     * @see http://docs.gl/gl2/glAreTexturesResident
     * @since 1.1
     * @param int $n
     * @param \FFI\CData|\FFI\CIntPtr|null $textures
     * @param \FFI\CData|\FFI\CIntPtr|null $residences
     * @return int
     */
    public static function glAreTexturesResident(int $n, ?\FFI\CData $textures, ?\FFI\CData $residences): int
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($n >= \PHP_INT_MIN && $n <= \PHP_INT_MAX, 'Argument $n overflow: C type GLsizei is required');

        return self::$ffi->glAreTexturesResident($n, $textures, $residences);
    }

    /**
     * Returns `GL_TRUE` if *`cap`* is an enabled capability and returns `GL_FALSE` otherwise. Initially all
     * capabilities except `GL_DITHER` are disabled; `GL_DITHER` is initially enabled.
     *
     * The following capabilities are accepted for *`cap`*:
     *
     * **Constant** **See** `GL_ALPHA_TEST` {@see glAlphaFunc} `GL_AUTO_NORMAL` {@see glEvalCoord}
     * `GL_BLEND` {@see glBlendFunc}, {@see glLogicOp} `GL_CLIP_PLANE`*i* {@see glClipPlane}
     * `GL_COLOR_ARRAY` {@see glColorPointer} `GL_COLOR_LOGIC_OP` {@see glLogicOp}
     * `GL_COLOR_MATERIAL` {@see glColorMaterial} `GL_COLOR_SUM` {@see glSecondaryColor}
     * `GL_COLOR_TABLE` {@see glColorTable} `GL_CONVOLUTION_1D`
     * {@see glConvolutionFilter1D} `GL_CONVOLUTION_2D`
     * {@see glConvolutionFilter2D} `GL_CULL_FACE` {@see glCullFace} `GL_DEPTH_TEST`
     * {@see glDepthFunc}, {@see glDepthRange} `GL_DITHER` {@see glEnable} `GL_EDGE_FLAG_ARRAY`
     * {@see glEdgeFlagPointer} `GL_FOG` {@see glFog} `GL_FOG_COORD_ARRAY`
     * {@see glFogCoordPointer} `GL_HISTOGRAM` {@see glHistogram} `GL_INDEX_ARRAY`
     * {@see glIndexPointer} `GL_INDEX_LOGIC_OP` {@see glLogicOp} `GL_LIGHT`*i*
     * {@see glLightModel}, {@see glLight} `GL_LIGHTING` {@see glMaterial},
     * {@see glLightModel}, {@see glLight} `GL_LINE_SMOOTH` {@see glLineWidth} `GL_LINE_STIPPLE`
     * {@see glLineStipple} `GL_MAP1_COLOR_4` {@see glMap1} `GL_MAP1_INDEX` {@see glMap1}
     * `GL_MAP1_NORMAL` {@see glMap1} `GL_MAP1_TEXTURE_COORD_1` {@see glMap1} `GL_MAP1_TEXTURE_COORD_2`
     * {@see glMap1} `GL_MAP1_TEXTURE_COORD_3` {@see glMap1} `GL_MAP1_TEXTURE_COORD_4` {@see glMap1}
     * `GL_MAP2_COLOR_4` {@see glMap2} `GL_MAP2_INDEX` {@see glMap2} `GL_MAP2_NORMAL` {@see glMap2}
     * `GL_MAP2_TEXTURE_COORD_1` {@see glMap2} `GL_MAP2_TEXTURE_COORD_2` {@see glMap2}
     * `GL_MAP2_TEXTURE_COORD_3` {@see glMap2} `GL_MAP2_TEXTURE_COORD_4` {@see glMap2} `GL_MAP2_VERTEX_3`
     * {@see glMap2} `GL_MAP2_VERTEX_4` {@see glMap2} `GL_MINMAX` {@see glMinmax} `GL_MULTISAMPLE`
     * {@see glSampleCoverage} `GL_NORMAL_ARRAY` {@see glNormalPointer} `GL_NORMALIZE`
     * {@see glNormal} `GL_POINT_SMOOTH` {@see glPointSize} `GL_POINT_SPRITE` {@see glEnable}
     * `GL_POLYGON_SMOOTH` {@see glPolygonMode} `GL_POLYGON_OFFSET_FILL` {@see glPolygonOffset}
     * `GL_POLYGON_OFFSET_LINE` {@see glPolygonOffset} `GL_POLYGON_OFFSET_POINT`
     * {@see glPolygonOffset} `GL_POLYGON_STIPPLE` {@see glPolygonStipple}
     * `GL_POST_COLOR_MATRIX_COLOR_TABLE` {@see glColorTable} `GL_POST_CONVOLUTION_COLOR_TABLE`
     * {@see glColorTable} `GL_RESCALE_NORMAL` {@see glNormal} `GL_SAMPLE_ALPHA_TO_COVERAGE`
     * {@see glSampleCoverage} `GL_SAMPLE_ALPHA_TO_ONE` {@see glSampleCoverage}
     * `GL_SAMPLE_COVERAGE` {@see glSampleCoverage} `GL_SCISSOR_TEST` {@see glScissor}
     * `GL_SECONDARY_COLOR_ARRAY` {@see glSecondaryColorPointer} `GL_SEPARABLE_2D`
     * {@see glSeparableFilter2D} `GL_STENCIL_TEST` {@see glStencilFunc},
     * {@see glStencilOp} `GL_TEXTURE_1D` {@see glTexImage1D} `GL_TEXTURE_2D`
     * {@see glTexImage2D} `GL_TEXTURE_3D` {@see glTexImage3D} `GL_TEXTURE_COORD_ARRAY`
     * {@see glTexCoordPointer} `GL_TEXTURE_CUBE_MAP` {@see glTexImage2D} `GL_TEXTURE_GEN_Q`
     * {@see glTexGen} `GL_TEXTURE_GEN_R` {@see glTexGen} `GL_TEXTURE_GEN_S` {@see glTexGen}
     * `GL_TEXTURE_GEN_T` {@see glTexGen} `GL_VERTEX_ARRAY` {@see glVertexPointer}
     * `GL_VERTEX_PROGRAM_POINT_SIZE` {@see glEnable} `GL_VERTEX_PROGRAM_TWO_SIDE` {@see glEnable}
     *
     * @see http://docs.gl/gl2/glIsEnabled
     * @see http://docs.gl/gl3/glIsEnabled
     * @see http://docs.gl/gl4/glIsEnabled
     * @since 1.1
     * @param int $cap
     * @return int
     */
    public static function glIsEnabled(int $cap): int
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($cap >= 0 && $cap <= 4_294_967_295, 'Argument $cap overflow: C type GLenum is required');

        return self::$ffi->glIsEnabled($cap);
    }

    /**
     * Returns `GL_TRUE` if *`list`* is the name of a display list and returns `GL_FALSE` if it is not, or if an
     * error occurs.
     *
     * A name returned by {@see glGenLists}, but not yet associated with a display list by calling
     * {@see glNewList}, is not the name of a display list.
     *
     * @see http://docs.gl/gl2/glIsList
     * @since 1.1
     * @param int $list
     * @return int
     */
    public static function glIsList(int $list): int
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($list >= 0 && $list <= 4_294_967_295, 'Argument $list overflow: C type GLuint is required');

        return self::$ffi->glIsList($list);
    }

    /**
     * Returns `GL_TRUE` if *`texture`* is currently the name of a texture. If *`texture`* is zero, or is a non-zero
     * value that is not currently the name of a texture, or if an error occurs, `glIsTexture` returns `GL_FALSE`.
     *
     * A name returned by {@see glGenTextures}, but not yet associated with a texture by calling
     * {@see glBindTexture}, is not the name of a texture.
     *
     * @see http://docs.gl/gl2/glIsTexture
     * @see http://docs.gl/gl3/glIsTexture
     * @see http://docs.gl/gl4/glIsTexture
     * @since 1.1
     * @param int $texture
     * @return int
     */
    public static function glIsTexture(int $texture): int
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');

        return self::$ffi->glIsTexture($texture);
    }

    /**
     * Returns a pointer to a static string describing some aspect of the current GL connection. *`name`* can be one
     * of the following:
     *
     *  - `GL_VENDOR` Returns the company responsible for this GL implementation. This name does not change from
     * release to release.
     *
     *  - `GL_RENDERER` Returns the name of the renderer. This name is typically specific to a particular
     * configuration of a hardware platform. It does not change from release to release.
     *
     *  - `GL_VERSION` Returns a version or release number.
     *
     *  - `GL_SHADING_LANGUAGE_VERSION` Returns a version or release number for the shading language.
     *
     *  - `GL_EXTENSIONS` Returns a space-separated list of supported extensions to GL.
     *
     * Because the GL does not include queries for the performance characteristics of an implementation, some
     * applications are written to recognize known platforms and modify their GL usage based on known performance
     * characteristics of these platforms. Strings `GL_VENDOR` and `GL_RENDERER` together uniquely specify a
     * platform. They do not change from release to release and should be used by platform-recognition algorithms.
     *
     * Some applications want to make use of features that are not part of the standard GL. These features may be
     * implemented as extensions to the standard GL. The `GL_EXTENSIONS` string is a space-separated list of
     * supported GL extensions. (Extension names never contain a space character.)
     *
     * The `GL_VERSION` and `GL_SHADING_LANGUAGE_VERSION` strings begin with a version number. The version number
     * uses one of these forms:
     *
     * *major_number.minor_number* *major_number.minor_number.release_number*
     *
     * Vendor-specific information may follow the version number. Its format depends on the implementation, but a
     * space always separates the version number and the vendor-specific information.
     *
     * All strings are null-terminated.
     *
     * @see http://docs.gl/gl2/glGetString
     * @see http://docs.gl/gl3/glGetString
     * @see http://docs.gl/gl4/glGetString
     * @since 1.1
     * @param int $name
     * @return \FFI\CData|\FFI\CIntPtr|null
     */
    public static function glGetString(int $name): \FFI\CData
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($name >= 0 && $name <= 4_294_967_295, 'Argument $name overflow: C type GLenum is required');

        return self::$ffi->glGetString($name);
    }

    /**
     * The accumulation buffer is an extended-range color buffer. Images are not rendered into it. Rather, images
     * rendered into one of the color buffers are added to the contents of the accumulation buffer after rendering.
     * Effects such as antialiasing (of points, lines, and polygons), motion blur, and depth of field can be created
     * by accumulating images generated with different transformation matrices.
     *
     * Each pixel in the accumulation buffer consists of red, green, blue, and alpha values. The number of bits per
     * component in the accumulation buffer depends on the implementation. You can examine this number by calling
     * {@see glGetIntegerv} four times, with arguments `GL_ACCUM_RED_BITS`, `GL_ACCUM_GREEN_BITS`,
     * `GL_ACCUM_BLUE_BITS`, and `GL_ACCUM_ALPHA_BITS`. Regardless of the number of bits per component, the range of
     * values stored by each component is -1 1 . The accumulation buffer pixels are mapped one-to-one with frame
     * buffer pixels.
     *
     *  - `glAccum` operates on the accumulation buffer. The first argument, *`op`*, is a symbolic constant that
     * selects an accumulation buffer operation. The second argument, *`value`*, is a floating-point value to be used
     * in that operation. Five operations are specified: `GL_ACCUM`, `GL_LOAD`, `GL_ADD`, `GL_MULT`, and `GL_RETURN`.
     *
     * All accumulation buffer operations are limited to the area of the current scissor box and applied identically
     * to the red, green, blue, and alpha components of each pixel. If a `glAccum` operation results in a value
     * outside the range -1 1 , the contents of an accumulation buffer pixel component are undefined.
     *
     * The operations are as follows:
     *
     *  - `GL_ACCUM` Obtains R, G, B, and A values from the buffer currently selected for reading (see
     * {@see glReadBuffer}). Each component value is divided by 2 n - 1 , where n is the number of bits
     * allocated to each color component in the currently selected buffer. The result is a floating-point value in
     * the range 0 1 , which is multiplied by *`value`* and added to the corresponding pixel component in the
     * accumulation buffer, thereby updating the accumulation buffer.
     *
     *  - `GL_LOAD` Similar to `GL_ACCUM`, except that the current value in the accumulation buffer is not used in
     * the calculation of the new value. That is, the R, G, B, and A values from the currently selected buffer are
     * divided by 2 n - 1 , multiplied by *`value`*, and then stored in the corresponding accumulation buffer cell,
     * overwriting the current value.
     *
     *  - `GL_ADD` Adds *`value`* to each R, G, B, and A in the accumulation buffer.
     *
     *  - `GL_MULT` Multiplies each R, G, B, and A in the accumulation buffer by *`value`* and returns the scaled
     * component to its corresponding accumulation buffer location.
     *
     *  - `GL_RETURN` Transfers accumulation buffer values to the color buffer or buffers currently selected for
     * writing. Each R, G, B, and A component is multiplied by *`value`*, then multiplied by 2 n - 1 , clamped to the
     * range 0 2 n - 1 , and stored in the corresponding display buffer cell. The only fragment operations that are
     * applied to this transfer are pixel ownership, scissor, dithering, and color writemasks.
     *
     * To clear the accumulation buffer, call {@see glClearAccum} with R, G, B, and A values to set it to,
     * then call {@see glClear} with the accumulation buffer enabled.
     *
     * @see http://docs.gl/gl2/glAccum
     * @since 1.1
     * @param int $op
     * @param float $value
     * @return void
     */
    public static function glAccum(int $op, float $value): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($op >= 0 && $op <= 4_294_967_295, 'Argument $op overflow: C type GLenum is required');
        assert($value >= -3.40282e38 && $value <= 3.40282e38, 'Argument $value overflow: C type GLfloat is required');

        self::$ffi->glAccum($op, $value);
    }

    /**
     * The alpha test discards fragments depending on the outcome of a comparison between an incoming fragment's
     * alpha value and a constant reference value. `glAlphaFunc` specifies the reference value and the comparison
     * function. The comparison is performed only if alpha testing is enabled. By default, it is not enabled. (See
     * {@see glEnable} and {@see glDisable} of `GL_ALPHA_TEST`.)
     *
     * *`func`* and *`ref`* specify the conditions under which the pixel is drawn. The incoming alpha value is
     * compared to *`ref`* using the function specified by *`func`*. If the value passes the comparison, the incoming
     * fragment is drawn if it also passes subsequent stencil and depth buffer tests. If the value fails the
     * comparison, no change is made to the frame buffer at that pixel location. The comparison functions are as
     * follows:
     *
     *  - `GL_NEVER` Never passes.
     *
     *  - `GL_LESS` Passes if the incoming alpha value is less than the reference value.
     *
     *  - `GL_EQUAL` Passes if the incoming alpha value is equal to the reference value.
     *
     *  - `GL_LEQUAL` Passes if the incoming alpha value is less than or equal to the reference value.
     *
     *  - `GL_GREATER` Passes if the incoming alpha value is greater than the reference value.
     *
     *  - `GL_NOTEQUAL` Passes if the incoming alpha value is not equal to the reference value.
     *
     *  - `GL_GEQUAL` Passes if the incoming alpha value is greater than or equal to the reference value.
     *
     *  - `GL_ALWAYS` Always passes (initial value).
     *
     *  - `glAlphaFunc` operates on all pixel write operations, including those resulting from the scan conversion of
     * points, lines, polygons, and bitmaps, and from pixel draw and copy operations. `glAlphaFunc` does not affect
     * screen clear operations.
     *
     * @see http://docs.gl/gl2/glAlphaFunc
     * @since 1.1
     * @param int $func
     * @param float $ref
     * @return void
     */
    public static function glAlphaFunc(int $func, float $ref): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($func >= 0 && $func <= 4_294_967_295, 'Argument $func overflow: C type GLenum is required');
        assert($ref >= -3.40282e38 && $ref <= 3.40282e38, 'Argument $ref overflow: C type GLclampf is required');

        self::$ffi->glAlphaFunc($func, $ref);
    }

    /**
     * Commands are used within {@see glBegin}/{@see glEnd} pairs to specify vertex and attribute data for
     * point, line, and polygon primitives. If `GL_VERTEX_ARRAY` is enabled when `glArrayElement` is called, a single
     * vertex is drawn, using vertex and attribute data taken from location *`i`* of the enabled arrays. If
     * `GL_VERTEX_ARRAY` is not enabled, no drawing occurs but the attributes corresponding to the enabled arrays are
     * modified.
     *
     * Use `glArrayElement` to construct primitives by indexing vertex data, rather than by streaming through arrays
     * of data in first-to-last order. Because each call specifies only a single vertex, it is possible to explicitly
     * specify per-primitive attributes such as a single normal for each triangle.
     *
     * Changes made to array data between the execution of {@see glBegin} and the corresponding execution of
     * {@see glEnd} may affect calls to `glArrayElement` that are made within the same
     * {@see glBegin}/{@see glEnd} period in nonsequential ways. That is, a call to `glArrayElement` that
     * precedes a change to array data may access the changed data, and a call that follows a change to array data
     * may access original data.
     *
     * @see http://docs.gl/gl2/glArrayElement
     * @since 1.1
     * @param int $i
     * @return void
     */
    public static function glArrayElement(int $i): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($i >= \PHP_INT_MIN && $i <= \PHP_INT_MAX, 'Argument $i overflow: C type GLint is required');

        self::$ffi->glArrayElement($i);
    }

    /**
     * And {@see glEnd} delimit the vertices that define a primitive or a group of like primitives. `glBegin`
     * accepts a single argument that specifies in which of ten ways the vertices are interpreted. Taking n as an
     * integer count starting at one, and N as the total number of vertices specified, the interpretations are as
     * follows:
     *
     *  - `GL_POINTS` Treats each vertex as a single point. Vertex n defines point n. N points are drawn.
     *
     *  - `GL_LINES` Treats each pair of vertices as an independent line segment. Vertices 2 ⁢ n - 1 and 2 ⁢ n
     * define line n. N 2 lines are drawn.
     *
     *  - `GL_LINE_STRIP` Draws a connected group of line segments from the first vertex to the last. Vertices n and
     * n + 1 define line n. N - 1 lines are drawn.
     *
     *  - `GL_LINE_LOOP` Draws a connected group of line segments from the first vertex to the last, then back to the
     * first. Vertices n and n + 1 define line n. The last line, however, is defined by vertices N and 1 . N lines
     * are drawn.
     *
     *  - `GL_TRIANGLES` Treats each triplet of vertices as an independent triangle. Vertices 3 ⁢ n - 2 , 3 ⁢ n -
     * 1 , and 3 ⁢ n define triangle n. N 3 triangles are drawn.
     *
     *  - `GL_TRIANGLE_STRIP` Draws a connected group of triangles. One triangle is defined for each vertex presented
     * after the first two vertices. For odd n, vertices n, n + 1 , and n + 2 define triangle n. For even n, vertices
     * n + 1 , n, and n + 2 define triangle n. N - 2 triangles are drawn.
     *
     *  - `GL_TRIANGLE_FAN` Draws a connected group of triangles. One triangle is defined for each vertex presented
     * after the first two vertices. Vertices 1 , n + 1 , and n + 2 define triangle n. N - 2 triangles are drawn.
     *
     *  - `GL_QUADS` Treats each group of four vertices as an independent quadrilateral. Vertices 4 ⁢ n - 3 , 4 ⁢
     * n - 2 , 4 ⁢ n - 1 , and 4 ⁢ n define quadrilateral n. N 4 quadrilaterals are drawn.
     *
     *  - `GL_QUAD_STRIP` Draws a connected group of quadrilaterals. One quadrilateral is defined for each pair of
     * vertices presented after the first pair. Vertices 2 ⁢ n - 1 , 2 ⁢ n , 2 ⁢ n + 2 , and 2 ⁢ n + 1 define
     * quadrilateral n. N 2 - 1 quadrilaterals are drawn. Note that the order in which vertices are used to construct
     * a quadrilateral from strip data is different from that used with independent data.
     *
     *  - `GL_POLYGON` Draws a single, convex polygon. Vertices 1 through N define this polygon.
     *
     * Only a subset of GL commands can be used between `glBegin` and {@see glEnd}. The commands are
     * {@see glVertex}, {@see glColor}, {@see glSecondaryColor}, {@see glIndex},
     * {@see glNormal}, {@see glFogCoord}, {@see glTexCoord}, {@see glMultiTexCoord},
     * {@see glVertexAttrib}, {@see glEvalCoord}, {@see glEvalPoint},
     * {@see glArrayElement}, {@see glMaterial}, and {@see glEdgeFlag}. Also, it is
     * acceptable to use {@see glCallList} or {@see glCallLists} to execute display lists that include
     * only the preceding commands. If any other GL command is executed between `glBegin` and {@see glEnd}, the
     * error flag is set and the command is ignored.
     *
     * Regardless of the value chosen for *`mode`*, there is no limit to the number of vertices that can be defined
     * between `glBegin` and {@see glEnd}. Lines, triangles, quadrilaterals, and polygons that are incompletely
     * specified are not drawn. Incomplete specification results when either too few vertices are provided to specify
     * even a single primitive or when an incorrect multiple of vertices is specified. The incomplete primitive is
     * ignored; the rest are drawn.
     *
     * The minimum specification of vertices for each primitive is as follows: 1 for a point, 2 for a line, 3 for a
     * triangle, 4 for a quadrilateral, and 3 for a polygon. Modes that require a certain multiple of vertices are
     * `GL_LINES` (2), `GL_TRIANGLES` (3), `GL_QUADS` (4), and `GL_QUAD_STRIP` (2).
     *
     * @see http://docs.gl/gl2/glBegin
     * @since 1.1
     * @param int $mode
     * @return void
     */
    public static function glBegin(int $mode): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');

        self::$ffi->glBegin($mode);
    }

    /**
     * Lets you create or use a named texture. Calling `glBindTexture` with *`target`* set to `GL_TEXTURE_1D`,
     * `GL_TEXTURE_2D`, `GL_TEXTURE_3D` or `GL_TEXTURE_CUBE_MAP` and *`texture`* set to the name of the new texture
     * binds the texture name to the target. When a texture is bound to a target, the previous binding for that
     * target is automatically broken.
     *
     * Texture names are unsigned integers. The value zero is reserved to represent the default texture for each
     * texture target. Texture names and the corresponding texture contents are local to the shared display-list
     * space (see {@see glXCreateContext}) of the current GL rendering context; two rendering contexts
     * share texture names only if they also share display lists.
     *
     * You may use {@see glGenTextures} to generate a set of new texture names.
     *
     * When a texture is first bound, it assumes the specified target: A texture first bound to `GL_TEXTURE_1D`
     * becomes one-dimensional texture, a texture first bound to `GL_TEXTURE_2D` becomes two-dimensional texture, a
     * texture first bound to `GL_TEXTURE_3D` becomes three-dimensional texture, and a texture first bound to
     * `GL_TEXTURE_CUBE_MAP` becomes a cube-mapped texture. The state of a one-dimensional texture immediately after
     * it is first bound is equivalent to the state of the default `GL_TEXTURE_1D` at GL initialization, and
     * similarly for two- and three-dimensional textures and cube-mapped textures.
     *
     * While a texture is bound, GL operations on the target to which it is bound affect the bound texture, and
     * queries of the target to which it is bound return state from the bound texture. If texture mapping is active
     * on the target to which a texture is bound, the bound texture is used. In effect, the texture targets become
     * aliases for the textures currently bound to them, and the texture name zero refers to the default textures
     * that were bound to them at initialization.
     *
     * A texture binding created with `glBindTexture` remains active until a different texture is bound to the same
     * target, or until the bound texture is deleted with {@see glDeleteTextures}.
     *
     * Once created, a named texture may be re-bound to its same original target as often as needed. It is usually
     * much faster to use `glBindTexture` to bind an existing named texture to one of the texture targets than it is
     * to reload the texture image using {@see glTexImage1D}, {@see glTexImage2D}, or
     * {@see glTexImage3D}. For additional control over performance, use
     * {@see glPrioritizeTextures}.
     *
     *  - `glBindTexture` is included in display lists.
     *
     * @see http://docs.gl/gl2/glBindTexture
     * @see http://docs.gl/gl3/glBindTexture
     * @see http://docs.gl/gl4/glBindTexture
     * @since 1.1
     * @param int $target
     * @param int $texture
     * @return void
     */
    public static function glBindTexture(int $target, int $texture): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($texture >= 0 && $texture <= 4_294_967_295, 'Argument $texture overflow: C type GLuint is required');

        self::$ffi->glBindTexture($target, $texture);
    }

    /**
     * A bitmap is a binary image. When drawn, the bitmap is positioned relative to the current raster position, and
     * frame buffer pixels corresponding to 1's in the bitmap are written using the current raster color or index.
     * Frame buffer pixels corresponding to 0's in the bitmap are not modified.
     *
     *  - `glBitmap` takes seven arguments. The first pair specifies the width and height of the bitmap image. The
     * second pair specifies the location of the bitmap origin relative to the lower left corner of the bitmap image.
     * The third pair of arguments specifies *x* and *y* offsets to be added to the current raster position after the
     * bitmap has been drawn. The final argument is a pointer to the bitmap image itself.
     *
     * If a non-zero named buffer object is bound to the `GL_PIXEL_UNPACK_BUFFER` target (see
     * {@see glBindBuffer}) while a bitmap image is specified, *`bitmap`* is treated as a byte offset into
     * the buffer object's data store.
     *
     * The bitmap image is interpreted like image data for the {@see glDrawPixels} command, with *`width`*
     * and *`height`* corresponding to the width and height arguments of that command, and with *type* set to
     * `GL_BITMAP` and *format* set to `GL_COLOR_INDEX`. Modes specified using {@see glPixelStore} affect
     * the interpretation of bitmap image data; modes specified using {@see glPixelTransfer} do not.
     *
     * If the current raster position is invalid, `glBitmap` is ignored. Otherwise, the lower left corner of the
     * bitmap image is positioned at the window coordinates
     *
     * x w = x r - x o
     *
     * y w = y r - y o
     *
     * where x r y r is the raster position and x o y o is the bitmap origin. Fragments are then generated for each
     * pixel corresponding to a 1 (one) in the bitmap image. These fragments are generated using the current raster
     * *z* coordinate, color or color index, and current raster texture coordinates. They are then treated just as if
     * they had been generated by a point, line, or polygon, including texture mapping, fogging, and all per-fragment
     * operations such as alpha and depth testing.
     *
     * After the bitmap has been drawn, the *x* and *y* coordinates of the current raster position are offset by
     * *`xmove`* and *`ymove`*. No change is made to the *z* coordinate of the current raster position, or to the
     * current raster color, texture coordinates, or index.
     *
     * @see http://docs.gl/gl2/glBitmap
     * @since 1.1
     * @param int $width
     * @param int $height
     * @param float $xorig
     * @param float $yorig
     * @param float $xmove
     * @param float $ymove
     * @param \FFI\CData|\FFI\CIntPtr|null $bitmap
     * @return void
     */
    public static function glBitmap(int $width, int $height, float $xorig, float $yorig, float $xmove, float $ymove, ?\FFI\CData $bitmap): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');
        assert($xorig >= -3.40282e38 && $xorig <= 3.40282e38, 'Argument $xorig overflow: C type GLfloat is required');
        assert($yorig >= -3.40282e38 && $yorig <= 3.40282e38, 'Argument $yorig overflow: C type GLfloat is required');
        assert($xmove >= -3.40282e38 && $xmove <= 3.40282e38, 'Argument $xmove overflow: C type GLfloat is required');
        assert($ymove >= -3.40282e38 && $ymove <= 3.40282e38, 'Argument $ymove overflow: C type GLfloat is required');

        self::$ffi->glBitmap($width, $height, $xorig, $yorig, $xmove, $ymove, $bitmap);
    }

    /**
     * In RGBA mode, pixels can be drawn using a function that blends the incoming (source) RGBA values with the RGBA
     * values that are already in the frame buffer (the destination values). Blending is initially disabled. Use
     * {@see glEnable} and {@see glDisable} with argument `GL_BLEND` to enable and disable blending.
     *
     *  - `glBlendFunc` defines the operation of blending when it is enabled. *`sfactor`* specifies which method is
     * used to scale the source color components. *`dfactor`* specifies which method is used to scale the destination
     * color components. The possible methods are described in the following table. Each method defines four scale
     * factors, one each for red, green, blue, and alpha. In the table and in subsequent equations, source and
     * destination color components are referred to as R s G s B s A s and R d G d B d A d . The color specified by
     * {@see glBlendColor} is referred to as R c G c B c A c . They are understood to have integer values
     * between 0 and k R k G k B k A , where
     *
     * k c = 2 m c - 1
     *
     * and m R m G m B m A is the number of red, green, blue, and alpha bitplanes.
     *
     * Source and destination scale factors are referred to as s R s G s B s A and d R d G d B d A . The scale
     * factors described in the table, denoted f R f G f B f A , represent either source or destination factors. All
     * scale factors have range 0 1 .
     *
     * **Parameter** **f R f G f B f A** `GL_ZERO` 0 0 0 0 `GL_ONE` 1 1 1 1 `GL_SRC_COLOR` R s k R G s k G B s k B A
     * s k A `GL_ONE_MINUS_SRC_COLOR` 1 1 1 1 - R s k R G s k G B s k B A s k A `GL_DST_COLOR` R d k R G d k G B d k
     * B A d k A `GL_ONE_MINUS_DST_COLOR` 1 1 1 1 - R d k R G d k G B d k B A d k A `GL_SRC_ALPHA` A s k A A s k A A
     * s k A A s k A `GL_ONE_MINUS_SRC_ALPHA` 1 1 1 1 - A s k A A s k A A s k A A s k A `GL_DST_ALPHA` A d k A A d k
     * A A d k A A d k A `GL_ONE_MINUS_DST_ALPHA` 1 1 1 1 - A d k A A d k A A d k A A d k A `GL_CONSTANT_COLOR` R c G
     * c B c A c `GL_ONE_MINUS_CONSTANT_COLOR` 1 1 1 1 - R c G c B c A c `GL_CONSTANT_ALPHA` A c A c A c A c
     * `GL_ONE_MINUS_CONSTANT_ALPHA` 1 1 1 1 - A c A c A c A c `GL_SRC_ALPHA_SATURATE` i i i 1
     *
     * In the table,
     *
     * i = min ⁡ A s k A - A d k A
     *
     * To determine the blended RGBA values of a pixel when drawing in RGBA mode, the system uses the following
     * equations:
     *
     * R d = min ⁡ k R R s ⁢ s R + R d ⁢ d R G d = min ⁡ k G G s ⁢ s G + G d ⁢ d G B d = min ⁡ k B B s
     * ⁢ s B + B d ⁢ d B A d = min ⁡ k A A s ⁢ s A + A d ⁢ d A
     *
     * Despite the apparent precision of the above equations, blending arithmetic is not exactly specified, because
     * blending operates with imprecise integer color values. However, a blend factor that should be equal to 1 is
     * guaranteed not to modify its multiplicand, and a blend factor equal to 0 reduces its multiplicand to 0. For
     * example, when *`sfactor`* is `GL_SRC_ALPHA`, *`dfactor`* is `GL_ONE_MINUS_SRC_ALPHA`, and A s is equal to k A
     * , the equations reduce to simple replacement:
     *
     * R d = R s G d = G s B d = B s A d = A s
     *
     * @see http://docs.gl/gl2/glBlendFunc
     * @see http://docs.gl/gl3/glBlendFunc
     * @see http://docs.gl/gl4/glBlendFunc
     * @since 1.1
     * @param int $sfactor
     * @param int $dfactor
     * @return void
     */
    public static function glBlendFunc(int $sfactor, int $dfactor): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($sfactor >= 0 && $sfactor <= 4_294_967_295, 'Argument $sfactor overflow: C type GLenum is required');
        assert($dfactor >= 0 && $dfactor <= 4_294_967_295, 'Argument $dfactor overflow: C type GLenum is required');

        self::$ffi->glBlendFunc($sfactor, $dfactor);
    }

    /**
     * Causes the named display list to be executed. The commands saved in the display list are executed in order,
     * just as if they were called without using a display list. If *`list`* has not been defined as a display list,
     * `glCallList` is ignored.
     *
     *  - `glCallList` can appear inside a display list. To avoid the possibility of infinite recursion resulting
     * from display lists calling one another, a limit is placed on the nesting level of display lists during
     * display-list execution. This limit is at least 64, and it depends on the implementation.
     *
     * GL state is not saved and restored across a call to `glCallList`. Thus, changes made to GL state during the
     * execution of a display list remain after execution of the display list is completed. Use
     * {@see glPushAttrib}, {@see glPopAttrib}, {@see glPushMatrix}, and
     * {@see glPopMatrix} to preserve GL state across `glCallList` calls.
     *
     * @see http://docs.gl/gl2/glCallList
     * @since 1.1
     * @param int $list
     * @return void
     */
    public static function glCallList(int $list): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($list >= 0 && $list <= 4_294_967_295, 'Argument $list overflow: C type GLuint is required');

        self::$ffi->glCallList($list);
    }

    /**
     * Causes each display list in the list of names passed as *`lists`* to be executed. As a result, the commands
     * saved in each display list are executed in order, just as if they were called without using a display list.
     * Names of display lists that have not been defined are ignored.
     *
     *  - `glCallLists` provides an efficient means for executing more than one display list. *`type`* allows lists
     * with various name formats to be accepted. The formats are as follows:
     *
     *  - `GL_BYTE` *`lists`* is treated as an array of signed bytes, each in the range -128 through 127.
     *
     *  - `GL_UNSIGNED_BYTE` *`lists`* is treated as an array of unsigned bytes, each in the range 0 through 255.
     *
     *  - `GL_SHORT` *`lists`* is treated as an array of signed two-byte integers, each in the range -32768 through
     * 32767.
     *
     *  - `GL_UNSIGNED_SHORT` *`lists`* is treated as an array of unsigned two-byte integers, each in the range 0
     * through 65535.
     *
     *  - `GL_INT` *`lists`* is treated as an array of signed four-byte integers.
     *
     *  - `GL_UNSIGNED_INT` *`lists`* is treated as an array of unsigned four-byte integers.
     *
     *  - `GL_FLOAT` *`lists`* is treated as an array of four-byte floating-point values.
     *
     *  - `GL_2_BYTES` *`lists`* is treated as an array of unsigned bytes. Each pair of bytes specifies a single
     * display-list name. The value of the pair is computed as 256 times the unsigned value of the first byte plus
     * the unsigned value of the second byte.
     *
     *  - `GL_3_BYTES` *`lists`* is treated as an array of unsigned bytes. Each triplet of bytes specifies a single
     * display-list name. The value of the triplet is computed as 65536 times the unsigned value of the first byte,
     * plus 256 times the unsigned value of the second byte, plus the unsigned value of the third byte.
     *
     *  - `GL_4_BYTES` *`lists`* is treated as an array of unsigned bytes. Each quadruplet of bytes specifies a
     * single display-list name. The value of the quadruplet is computed as 16777216 times the unsigned value of the
     * first byte, plus 65536 times the unsigned value of the second byte, plus 256 times the unsigned value of the
     * third byte, plus the unsigned value of the fourth byte.
     *
     * The list of display-list names is not null-terminated. Rather, *`n`* specifies how many names are to be taken
     * from *`lists`*.
     *
     * An additional level of indirection is made available with the {@see glListBase} command, which
     * specifies an unsigned offset that is added to each display-list name specified in *`lists`* before that
     * display list is executed.
     *
     *  - `glCallLists` can appear inside a display list. To avoid the possibility of infinite recursion resulting
     * from display lists calling one another, a limit is placed on the nesting level of display lists during
     * display-list execution. This limit must be at least 64, and it depends on the implementation.
     *
     * GL state is not saved and restored across a call to `glCallLists`. Thus, changes made to GL state during the
     * execution of the display lists remain after execution is completed. Use {@see glPushAttrib},
     * {@see glPopAttrib}, {@see glPushMatrix}, and {@see glPopMatrix} to preserve GL state
     * across `glCallLists` calls.
     *
     * @see http://docs.gl/gl2/glCallLists
     * @since 1.1
     * @param int $n
     * @param int $type
     * @param \FFI\CData|\FFI\CPtr|null $lists
     * @return void
     */
    public static function glCallLists(int $n, int $type, ?\FFI\CData $lists): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($n >= \PHP_INT_MIN && $n <= \PHP_INT_MAX, 'Argument $n overflow: C type GLsizei is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');

        self::$ffi->glCallLists($n, $type, $lists);
    }

    /**
     * Sets the bitplane area of the window to values previously selected by `glClearColor`, `glClearIndex`,
     * `glClearDepth`, `glClearStencil`, and `glClearAccum`. Multiple color buffers can be cleared simultaneously by
     * selecting more than one buffer at a time using {@see glDrawBuffer}.
     *
     * The pixel ownership test, the scissor test, dithering, and the buffer writemasks affect the operation of
     * `glClear`. The scissor box bounds the cleared region. Alpha function, blend function, logical operation,
     * stenciling, texture mapping, and depth-buffering are ignored by `glClear`.
     *
     *  - `glClear` takes a single argument that is the bitwise OR of several values indicating which buffer is to be
     * cleared.
     *
     * The values are as follows:
     *
     *  - `GL_COLOR_BUFFER_BIT` Indicates the buffers currently enabled for color writing.
     *
     *  - `GL_DEPTH_BUFFER_BIT` Indicates the depth buffer.
     *
     *  - `GL_ACCUM_BUFFER_BIT` Indicates the accumulation buffer.
     *
     *  - `GL_STENCIL_BUFFER_BIT` Indicates the stencil buffer.
     *
     * The value to which each buffer is cleared depends on the setting of the clear value for that buffer.
     *
     * @see http://docs.gl/gl2/glClear
     * @see http://docs.gl/gl3/glClear
     * @see http://docs.gl/gl4/glClear
     * @since 1.1
     * @param int $mask
     * @return void
     */
    public static function glClear(int $mask): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($mask >= 0 && $mask <= 4_294_967_295, 'Argument $mask overflow: C type GLbitfield is required');

        self::$ffi->glClear($mask);
    }

    /**
     * Specifies the red, green, blue, and alpha values used by {@see glClear} to clear the accumulation buffer.
     *
     * Values specified by `glClearAccum` are clamped to the range -1 1 .
     *
     * @see http://docs.gl/gl2/glClearAccum
     * @since 1.1
     * @param float $red
     * @param float $green
     * @param float $blue
     * @param float $alpha
     * @return void
     */
    public static function glClearAccum(float $red, float $green, float $blue, float $alpha): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($red >= -3.40282e38 && $red <= 3.40282e38, 'Argument $red overflow: C type GLfloat is required');
        assert($green >= -3.40282e38 && $green <= 3.40282e38, 'Argument $green overflow: C type GLfloat is required');
        assert($blue >= -3.40282e38 && $blue <= 3.40282e38, 'Argument $blue overflow: C type GLfloat is required');
        assert($alpha >= -3.40282e38 && $alpha <= 3.40282e38, 'Argument $alpha overflow: C type GLfloat is required');

        self::$ffi->glClearAccum($red, $green, $blue, $alpha);
    }

    /**
     * Specifies the red, green, blue, and alpha values used by {@see glClear} to clear the color buffers. Values
     * specified by `glClearColor` are clamped to the range 0 1 .
     *
     * @see http://docs.gl/gl2/glClearColor
     * @see http://docs.gl/gl3/glClearColor
     * @see http://docs.gl/gl4/glClearColor
     * @since 1.1
     * @param float $red
     * @param float $green
     * @param float $blue
     * @param float $alpha
     * @return void
     */
    public static function glClearColor(float $red, float $green, float $blue, float $alpha): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($red >= -3.40282e38 && $red <= 3.40282e38, 'Argument $red overflow: C type GLclampf is required');
        assert($green >= -3.40282e38 && $green <= 3.40282e38, 'Argument $green overflow: C type GLclampf is required');
        assert($blue >= -3.40282e38 && $blue <= 3.40282e38, 'Argument $blue overflow: C type GLclampf is required');
        assert($alpha >= -3.40282e38 && $alpha <= 3.40282e38, 'Argument $alpha overflow: C type GLclampf is required');

        self::$ffi->glClearColor($red, $green, $blue, $alpha);
    }

    /**
     * Specifies the depth value used by {@see glClear} to clear the depth buffer. Values specified by
     * `glClearDepth` are clamped to the range 0 1 .
     *
     * @see http://docs.gl/gl2/glClearDepth
     * @see http://docs.gl/gl3/glClearDepth
     * @see http://docs.gl/gl4/glClearDepth
     * @since 1.1
     * @param float $depth
     * @return void
     */
    public static function glClearDepth(float $depth): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($depth >= \PHP_FLOAT_MIN && $depth <= \PHP_FLOAT_MAX, 'Argument $depth overflow: C type GLclampd is required');

        self::$ffi->glClearDepth($depth);
    }

    /**
     * Specifies the index used by {@see glClear} to clear the color index buffers. *`c`* is not clamped. Rather,
     * *`c`* is converted to a fixed-point value with unspecified precision to the right of the binary point. The
     * integer part of this value is then masked with 2 m - 1 , where m is the number of bits in a color index stored
     * in the frame buffer.
     *
     * @see http://docs.gl/gl2/glClearIndex
     * @since 1.1
     * @param float $c
     * @return void
     */
    public static function glClearIndex(float $c): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($c >= -3.40282e38 && $c <= 3.40282e38, 'Argument $c overflow: C type GLfloat is required');

        self::$ffi->glClearIndex($c);
    }

    /**
     * Specifies the index used by {@see glClear} to clear the stencil buffer. *`s`* is masked with 2 m - 1 ,
     * where m is the number of bits in the stencil buffer.
     *
     * @see http://docs.gl/gl2/glClearStencil
     * @see http://docs.gl/gl3/glClearStencil
     * @see http://docs.gl/gl4/glClearStencil
     * @since 1.1
     * @param int $s
     * @return void
     */
    public static function glClearStencil(int $s): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($s >= \PHP_INT_MIN && $s <= \PHP_INT_MAX, 'Argument $s overflow: C type GLint is required');

        self::$ffi->glClearStencil($s);
    }

    /**
     * Geometry is always clipped against the boundaries of a six-plane frustum in *x*, *y*, and *z*. `glClipPlane`
     * allows the specification of additional planes, not necessarily perpendicular to the *x*, *y*, or *z* axis,
     * against which all geometry is clipped. To determine the maximum number of additional clipping planes, call
     * {@see glGetIntegerv} with argument `GL_MAX_CLIP_PLANES`. All implementations support at least six
     * such clipping planes. Because the resulting clipping region is the intersection of the defined half-spaces, it
     * is always convex.
     *
     *  - `glClipPlane` specifies a half-space using a four-component plane equation. When `glClipPlane` is called,
     * *`equation`* is transformed by the inverse of the modelview matrix and stored in the resulting eye
     * coordinates. Subsequent changes to the modelview matrix have no effect on the stored plane-equation
     * components. If the dot product of the eye coordinates of a vertex with the stored plane equation components is
     * positive or zero, the vertex is *in* with respect to that clipping plane. Otherwise, it is *out*.
     *
     * To enable and disable clipping planes, call {@see glEnable} and {@see glDisable} with the argument
     * `GL_CLIP_PLANE`*i*, where *i* is the plane number.
     *
     * All clipping planes are initially defined as (0, 0, 0, 0) in eye coordinates and are disabled.
     *
     * @see http://docs.gl/gl2/glClipPlane
     * @since 1.1
     * @param int $plane
     * @param \FFI\CData|\FFI\CFloatPtr|null $equation
     * @return void
     */
    public static function glClipPlane(int $plane, ?\FFI\CData $equation): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($plane >= 0 && $plane <= 4_294_967_295, 'Argument $plane overflow: C type GLenum is required');

        self::$ffi->glClipPlane($plane, $equation);
    }

    /**
     * The GL stores both a current single-valued color index and a current four-valued RGBA color. `glColor` sets a
     * new four-valued RGBA color. `glColor` has two major variants: `glColor3` and `glColor4`. `glColor3` variants
     * specify new red, green, and blue values explicitly and set the current alpha value to 1.0 (full intensity)
     * implicitly. `glColor4` variants specify all four color components explicitly.
     *
     *  - `glColor3b`, `glColor4b`, `glColor3s`, `glColor4s`, `glColor3i`, and `glColor4i` take three or four signed
     * byte, short, or long integers as arguments. When **v** is appended to the name, the color commands can take a
     * pointer to an array of such values.
     *
     * Current color values are stored in floating-point format, with unspecified mantissa and exponent sizes.
     * Unsigned integer color components, when specified, are linearly mapped to floating-point values such that the
     * largest representable value maps to 1.0 (full intensity), and 0 maps to 0.0 (zero intensity). Signed integer
     * color components, when specified, are linearly mapped to floating-point values such that the most positive
     * representable value maps to 1.0, and the most negative representable value maps to -1.0 . (Note that this
     * mapping does not convert 0 precisely to 0.0.) Floating-point values are mapped directly.
     *
     * Neither floating-point nor signed integer values are clamped to the range 0 1 before the current color is
     * updated. However, color components are clamped to this range before they are interpolated or written into a
     * color buffer.
     *
     * @see http://docs.gl/gl2/glColor
     * @since 1.1
     * @param int $red
     * @param int $green
     * @param int $blue
     * @return void
     */
    public static function glColor3b(int $red, int $green, int $blue): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($red >= -128 && $red <= 127, 'Argument $red overflow: C type GLbyte is required');
        assert($green >= -128 && $green <= 127, 'Argument $green overflow: C type GLbyte is required');
        assert($blue >= -128 && $blue <= 127, 'Argument $blue overflow: C type GLbyte is required');

        self::$ffi->glColor3b($red, $green, $blue);
    }

    /**
     * The GL stores both a current single-valued color index and a current four-valued RGBA color. `glColor` sets a
     * new four-valued RGBA color. `glColor` has two major variants: `glColor3` and `glColor4`. `glColor3` variants
     * specify new red, green, and blue values explicitly and set the current alpha value to 1.0 (full intensity)
     * implicitly. `glColor4` variants specify all four color components explicitly.
     *
     *  - `glColor3b`, `glColor4b`, `glColor3s`, `glColor4s`, `glColor3i`, and `glColor4i` take three or four signed
     * byte, short, or long integers as arguments. When **v** is appended to the name, the color commands can take a
     * pointer to an array of such values.
     *
     * Current color values are stored in floating-point format, with unspecified mantissa and exponent sizes.
     * Unsigned integer color components, when specified, are linearly mapped to floating-point values such that the
     * largest representable value maps to 1.0 (full intensity), and 0 maps to 0.0 (zero intensity). Signed integer
     * color components, when specified, are linearly mapped to floating-point values such that the most positive
     * representable value maps to 1.0, and the most negative representable value maps to -1.0 . (Note that this
     * mapping does not convert 0 precisely to 0.0.) Floating-point values are mapped directly.
     *
     * Neither floating-point nor signed integer values are clamped to the range 0 1 before the current color is
     * updated. However, color components are clamped to this range before they are interpolated or written into a
     * color buffer.
     *
     * @see http://docs.gl/gl2/glColor
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glColor3bv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glColor3bv($v);
    }

    /**
     * The GL stores both a current single-valued color index and a current four-valued RGBA color. `glColor` sets a
     * new four-valued RGBA color. `glColor` has two major variants: `glColor3` and `glColor4`. `glColor3` variants
     * specify new red, green, and blue values explicitly and set the current alpha value to 1.0 (full intensity)
     * implicitly. `glColor4` variants specify all four color components explicitly.
     *
     *  - `glColor3b`, `glColor4b`, `glColor3s`, `glColor4s`, `glColor3i`, and `glColor4i` take three or four signed
     * byte, short, or long integers as arguments. When **v** is appended to the name, the color commands can take a
     * pointer to an array of such values.
     *
     * Current color values are stored in floating-point format, with unspecified mantissa and exponent sizes.
     * Unsigned integer color components, when specified, are linearly mapped to floating-point values such that the
     * largest representable value maps to 1.0 (full intensity), and 0 maps to 0.0 (zero intensity). Signed integer
     * color components, when specified, are linearly mapped to floating-point values such that the most positive
     * representable value maps to 1.0, and the most negative representable value maps to -1.0 . (Note that this
     * mapping does not convert 0 precisely to 0.0.) Floating-point values are mapped directly.
     *
     * Neither floating-point nor signed integer values are clamped to the range 0 1 before the current color is
     * updated. However, color components are clamped to this range before they are interpolated or written into a
     * color buffer.
     *
     * @see http://docs.gl/gl2/glColor
     * @since 1.1
     * @param float $red
     * @param float $green
     * @param float $blue
     * @return void
     */
    public static function glColor3d(float $red, float $green, float $blue): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($red >= \PHP_FLOAT_MIN && $red <= \PHP_FLOAT_MAX, 'Argument $red overflow: C type GLdouble is required');
        assert($green >= \PHP_FLOAT_MIN && $green <= \PHP_FLOAT_MAX, 'Argument $green overflow: C type GLdouble is required');
        assert($blue >= \PHP_FLOAT_MIN && $blue <= \PHP_FLOAT_MAX, 'Argument $blue overflow: C type GLdouble is required');

        self::$ffi->glColor3d($red, $green, $blue);
    }

    /**
     * The GL stores both a current single-valued color index and a current four-valued RGBA color. `glColor` sets a
     * new four-valued RGBA color. `glColor` has two major variants: `glColor3` and `glColor4`. `glColor3` variants
     * specify new red, green, and blue values explicitly and set the current alpha value to 1.0 (full intensity)
     * implicitly. `glColor4` variants specify all four color components explicitly.
     *
     *  - `glColor3b`, `glColor4b`, `glColor3s`, `glColor4s`, `glColor3i`, and `glColor4i` take three or four signed
     * byte, short, or long integers as arguments. When **v** is appended to the name, the color commands can take a
     * pointer to an array of such values.
     *
     * Current color values are stored in floating-point format, with unspecified mantissa and exponent sizes.
     * Unsigned integer color components, when specified, are linearly mapped to floating-point values such that the
     * largest representable value maps to 1.0 (full intensity), and 0 maps to 0.0 (zero intensity). Signed integer
     * color components, when specified, are linearly mapped to floating-point values such that the most positive
     * representable value maps to 1.0, and the most negative representable value maps to -1.0 . (Note that this
     * mapping does not convert 0 precisely to 0.0.) Floating-point values are mapped directly.
     *
     * Neither floating-point nor signed integer values are clamped to the range 0 1 before the current color is
     * updated. However, color components are clamped to this range before they are interpolated or written into a
     * color buffer.
     *
     * @see http://docs.gl/gl2/glColor
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glColor3dv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glColor3dv($v);
    }

    /**
     * The GL stores both a current single-valued color index and a current four-valued RGBA color. `glColor` sets a
     * new four-valued RGBA color. `glColor` has two major variants: `glColor3` and `glColor4`. `glColor3` variants
     * specify new red, green, and blue values explicitly and set the current alpha value to 1.0 (full intensity)
     * implicitly. `glColor4` variants specify all four color components explicitly.
     *
     *  - `glColor3b`, `glColor4b`, `glColor3s`, `glColor4s`, `glColor3i`, and `glColor4i` take three or four signed
     * byte, short, or long integers as arguments. When **v** is appended to the name, the color commands can take a
     * pointer to an array of such values.
     *
     * Current color values are stored in floating-point format, with unspecified mantissa and exponent sizes.
     * Unsigned integer color components, when specified, are linearly mapped to floating-point values such that the
     * largest representable value maps to 1.0 (full intensity), and 0 maps to 0.0 (zero intensity). Signed integer
     * color components, when specified, are linearly mapped to floating-point values such that the most positive
     * representable value maps to 1.0, and the most negative representable value maps to -1.0 . (Note that this
     * mapping does not convert 0 precisely to 0.0.) Floating-point values are mapped directly.
     *
     * Neither floating-point nor signed integer values are clamped to the range 0 1 before the current color is
     * updated. However, color components are clamped to this range before they are interpolated or written into a
     * color buffer.
     *
     * @see http://docs.gl/gl2/glColor
     * @since 1.1
     * @param float $red
     * @param float $green
     * @param float $blue
     * @return void
     */
    public static function glColor3f(float $red, float $green, float $blue): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($red >= -3.40282e38 && $red <= 3.40282e38, 'Argument $red overflow: C type GLfloat is required');
        assert($green >= -3.40282e38 && $green <= 3.40282e38, 'Argument $green overflow: C type GLfloat is required');
        assert($blue >= -3.40282e38 && $blue <= 3.40282e38, 'Argument $blue overflow: C type GLfloat is required');

        self::$ffi->glColor3f($red, $green, $blue);
    }

    /**
     * The GL stores both a current single-valued color index and a current four-valued RGBA color. `glColor` sets a
     * new four-valued RGBA color. `glColor` has two major variants: `glColor3` and `glColor4`. `glColor3` variants
     * specify new red, green, and blue values explicitly and set the current alpha value to 1.0 (full intensity)
     * implicitly. `glColor4` variants specify all four color components explicitly.
     *
     *  - `glColor3b`, `glColor4b`, `glColor3s`, `glColor4s`, `glColor3i`, and `glColor4i` take three or four signed
     * byte, short, or long integers as arguments. When **v** is appended to the name, the color commands can take a
     * pointer to an array of such values.
     *
     * Current color values are stored in floating-point format, with unspecified mantissa and exponent sizes.
     * Unsigned integer color components, when specified, are linearly mapped to floating-point values such that the
     * largest representable value maps to 1.0 (full intensity), and 0 maps to 0.0 (zero intensity). Signed integer
     * color components, when specified, are linearly mapped to floating-point values such that the most positive
     * representable value maps to 1.0, and the most negative representable value maps to -1.0 . (Note that this
     * mapping does not convert 0 precisely to 0.0.) Floating-point values are mapped directly.
     *
     * Neither floating-point nor signed integer values are clamped to the range 0 1 before the current color is
     * updated. However, color components are clamped to this range before they are interpolated or written into a
     * color buffer.
     *
     * @see http://docs.gl/gl2/glColor
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glColor3fv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glColor3fv($v);
    }

    /**
     * The GL stores both a current single-valued color index and a current four-valued RGBA color. `glColor` sets a
     * new four-valued RGBA color. `glColor` has two major variants: `glColor3` and `glColor4`. `glColor3` variants
     * specify new red, green, and blue values explicitly and set the current alpha value to 1.0 (full intensity)
     * implicitly. `glColor4` variants specify all four color components explicitly.
     *
     *  - `glColor3b`, `glColor4b`, `glColor3s`, `glColor4s`, `glColor3i`, and `glColor4i` take three or four signed
     * byte, short, or long integers as arguments. When **v** is appended to the name, the color commands can take a
     * pointer to an array of such values.
     *
     * Current color values are stored in floating-point format, with unspecified mantissa and exponent sizes.
     * Unsigned integer color components, when specified, are linearly mapped to floating-point values such that the
     * largest representable value maps to 1.0 (full intensity), and 0 maps to 0.0 (zero intensity). Signed integer
     * color components, when specified, are linearly mapped to floating-point values such that the most positive
     * representable value maps to 1.0, and the most negative representable value maps to -1.0 . (Note that this
     * mapping does not convert 0 precisely to 0.0.) Floating-point values are mapped directly.
     *
     * Neither floating-point nor signed integer values are clamped to the range 0 1 before the current color is
     * updated. However, color components are clamped to this range before they are interpolated or written into a
     * color buffer.
     *
     * @see http://docs.gl/gl2/glColor
     * @since 1.1
     * @param int $red
     * @param int $green
     * @param int $blue
     * @return void
     */
    public static function glColor3i(int $red, int $green, int $blue): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($red >= \PHP_INT_MIN && $red <= \PHP_INT_MAX, 'Argument $red overflow: C type GLint is required');
        assert($green >= \PHP_INT_MIN && $green <= \PHP_INT_MAX, 'Argument $green overflow: C type GLint is required');
        assert($blue >= \PHP_INT_MIN && $blue <= \PHP_INT_MAX, 'Argument $blue overflow: C type GLint is required');

        self::$ffi->glColor3i($red, $green, $blue);
    }

    /**
     * The GL stores both a current single-valued color index and a current four-valued RGBA color. `glColor` sets a
     * new four-valued RGBA color. `glColor` has two major variants: `glColor3` and `glColor4`. `glColor3` variants
     * specify new red, green, and blue values explicitly and set the current alpha value to 1.0 (full intensity)
     * implicitly. `glColor4` variants specify all four color components explicitly.
     *
     *  - `glColor3b`, `glColor4b`, `glColor3s`, `glColor4s`, `glColor3i`, and `glColor4i` take three or four signed
     * byte, short, or long integers as arguments. When **v** is appended to the name, the color commands can take a
     * pointer to an array of such values.
     *
     * Current color values are stored in floating-point format, with unspecified mantissa and exponent sizes.
     * Unsigned integer color components, when specified, are linearly mapped to floating-point values such that the
     * largest representable value maps to 1.0 (full intensity), and 0 maps to 0.0 (zero intensity). Signed integer
     * color components, when specified, are linearly mapped to floating-point values such that the most positive
     * representable value maps to 1.0, and the most negative representable value maps to -1.0 . (Note that this
     * mapping does not convert 0 precisely to 0.0.) Floating-point values are mapped directly.
     *
     * Neither floating-point nor signed integer values are clamped to the range 0 1 before the current color is
     * updated. However, color components are clamped to this range before they are interpolated or written into a
     * color buffer.
     *
     * @see http://docs.gl/gl2/glColor
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glColor3iv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glColor3iv($v);
    }

    /**
     * The GL stores both a current single-valued color index and a current four-valued RGBA color. `glColor` sets a
     * new four-valued RGBA color. `glColor` has two major variants: `glColor3` and `glColor4`. `glColor3` variants
     * specify new red, green, and blue values explicitly and set the current alpha value to 1.0 (full intensity)
     * implicitly. `glColor4` variants specify all four color components explicitly.
     *
     *  - `glColor3b`, `glColor4b`, `glColor3s`, `glColor4s`, `glColor3i`, and `glColor4i` take three or four signed
     * byte, short, or long integers as arguments. When **v** is appended to the name, the color commands can take a
     * pointer to an array of such values.
     *
     * Current color values are stored in floating-point format, with unspecified mantissa and exponent sizes.
     * Unsigned integer color components, when specified, are linearly mapped to floating-point values such that the
     * largest representable value maps to 1.0 (full intensity), and 0 maps to 0.0 (zero intensity). Signed integer
     * color components, when specified, are linearly mapped to floating-point values such that the most positive
     * representable value maps to 1.0, and the most negative representable value maps to -1.0 . (Note that this
     * mapping does not convert 0 precisely to 0.0.) Floating-point values are mapped directly.
     *
     * Neither floating-point nor signed integer values are clamped to the range 0 1 before the current color is
     * updated. However, color components are clamped to this range before they are interpolated or written into a
     * color buffer.
     *
     * @see http://docs.gl/gl2/glColor
     * @since 1.1
     * @param int $red
     * @param int $green
     * @param int $blue
     * @return void
     */
    public static function glColor3s(int $red, int $green, int $blue): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($red >= -32768 && $red <= 32767, 'Argument $red overflow: C type GLshort is required');
        assert($green >= -32768 && $green <= 32767, 'Argument $green overflow: C type GLshort is required');
        assert($blue >= -32768 && $blue <= 32767, 'Argument $blue overflow: C type GLshort is required');

        self::$ffi->glColor3s($red, $green, $blue);
    }

    /**
     * The GL stores both a current single-valued color index and a current four-valued RGBA color. `glColor` sets a
     * new four-valued RGBA color. `glColor` has two major variants: `glColor3` and `glColor4`. `glColor3` variants
     * specify new red, green, and blue values explicitly and set the current alpha value to 1.0 (full intensity)
     * implicitly. `glColor4` variants specify all four color components explicitly.
     *
     *  - `glColor3b`, `glColor4b`, `glColor3s`, `glColor4s`, `glColor3i`, and `glColor4i` take three or four signed
     * byte, short, or long integers as arguments. When **v** is appended to the name, the color commands can take a
     * pointer to an array of such values.
     *
     * Current color values are stored in floating-point format, with unspecified mantissa and exponent sizes.
     * Unsigned integer color components, when specified, are linearly mapped to floating-point values such that the
     * largest representable value maps to 1.0 (full intensity), and 0 maps to 0.0 (zero intensity). Signed integer
     * color components, when specified, are linearly mapped to floating-point values such that the most positive
     * representable value maps to 1.0, and the most negative representable value maps to -1.0 . (Note that this
     * mapping does not convert 0 precisely to 0.0.) Floating-point values are mapped directly.
     *
     * Neither floating-point nor signed integer values are clamped to the range 0 1 before the current color is
     * updated. However, color components are clamped to this range before they are interpolated or written into a
     * color buffer.
     *
     * @see http://docs.gl/gl2/glColor
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glColor3sv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glColor3sv($v);
    }

    /**
     * The GL stores both a current single-valued color index and a current four-valued RGBA color. `glColor` sets a
     * new four-valued RGBA color. `glColor` has two major variants: `glColor3` and `glColor4`. `glColor3` variants
     * specify new red, green, and blue values explicitly and set the current alpha value to 1.0 (full intensity)
     * implicitly. `glColor4` variants specify all four color components explicitly.
     *
     *  - `glColor3b`, `glColor4b`, `glColor3s`, `glColor4s`, `glColor3i`, and `glColor4i` take three or four signed
     * byte, short, or long integers as arguments. When **v** is appended to the name, the color commands can take a
     * pointer to an array of such values.
     *
     * Current color values are stored in floating-point format, with unspecified mantissa and exponent sizes.
     * Unsigned integer color components, when specified, are linearly mapped to floating-point values such that the
     * largest representable value maps to 1.0 (full intensity), and 0 maps to 0.0 (zero intensity). Signed integer
     * color components, when specified, are linearly mapped to floating-point values such that the most positive
     * representable value maps to 1.0, and the most negative representable value maps to -1.0 . (Note that this
     * mapping does not convert 0 precisely to 0.0.) Floating-point values are mapped directly.
     *
     * Neither floating-point nor signed integer values are clamped to the range 0 1 before the current color is
     * updated. However, color components are clamped to this range before they are interpolated or written into a
     * color buffer.
     *
     * @see http://docs.gl/gl2/glColor
     * @since 1.1
     * @param int $red
     * @param int $green
     * @param int $blue
     * @return void
     */
    public static function glColor3ub(int $red, int $green, int $blue): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($red >= 0 && $red <= 255, 'Argument $red overflow: C type GLubyte is required');
        assert($green >= 0 && $green <= 255, 'Argument $green overflow: C type GLubyte is required');
        assert($blue >= 0 && $blue <= 255, 'Argument $blue overflow: C type GLubyte is required');

        self::$ffi->glColor3ub($red, $green, $blue);
    }

    /**
     * The GL stores both a current single-valued color index and a current four-valued RGBA color. `glColor` sets a
     * new four-valued RGBA color. `glColor` has two major variants: `glColor3` and `glColor4`. `glColor3` variants
     * specify new red, green, and blue values explicitly and set the current alpha value to 1.0 (full intensity)
     * implicitly. `glColor4` variants specify all four color components explicitly.
     *
     *  - `glColor3b`, `glColor4b`, `glColor3s`, `glColor4s`, `glColor3i`, and `glColor4i` take three or four signed
     * byte, short, or long integers as arguments. When **v** is appended to the name, the color commands can take a
     * pointer to an array of such values.
     *
     * Current color values are stored in floating-point format, with unspecified mantissa and exponent sizes.
     * Unsigned integer color components, when specified, are linearly mapped to floating-point values such that the
     * largest representable value maps to 1.0 (full intensity), and 0 maps to 0.0 (zero intensity). Signed integer
     * color components, when specified, are linearly mapped to floating-point values such that the most positive
     * representable value maps to 1.0, and the most negative representable value maps to -1.0 . (Note that this
     * mapping does not convert 0 precisely to 0.0.) Floating-point values are mapped directly.
     *
     * Neither floating-point nor signed integer values are clamped to the range 0 1 before the current color is
     * updated. However, color components are clamped to this range before they are interpolated or written into a
     * color buffer.
     *
     * @see http://docs.gl/gl2/glColor
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glColor3ubv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glColor3ubv($v);
    }

    /**
     * The GL stores both a current single-valued color index and a current four-valued RGBA color. `glColor` sets a
     * new four-valued RGBA color. `glColor` has two major variants: `glColor3` and `glColor4`. `glColor3` variants
     * specify new red, green, and blue values explicitly and set the current alpha value to 1.0 (full intensity)
     * implicitly. `glColor4` variants specify all four color components explicitly.
     *
     *  - `glColor3b`, `glColor4b`, `glColor3s`, `glColor4s`, `glColor3i`, and `glColor4i` take three or four signed
     * byte, short, or long integers as arguments. When **v** is appended to the name, the color commands can take a
     * pointer to an array of such values.
     *
     * Current color values are stored in floating-point format, with unspecified mantissa and exponent sizes.
     * Unsigned integer color components, when specified, are linearly mapped to floating-point values such that the
     * largest representable value maps to 1.0 (full intensity), and 0 maps to 0.0 (zero intensity). Signed integer
     * color components, when specified, are linearly mapped to floating-point values such that the most positive
     * representable value maps to 1.0, and the most negative representable value maps to -1.0 . (Note that this
     * mapping does not convert 0 precisely to 0.0.) Floating-point values are mapped directly.
     *
     * Neither floating-point nor signed integer values are clamped to the range 0 1 before the current color is
     * updated. However, color components are clamped to this range before they are interpolated or written into a
     * color buffer.
     *
     * @see http://docs.gl/gl2/glColor
     * @since 1.1
     * @param int $red
     * @param int $green
     * @param int $blue
     * @return void
     */
    public static function glColor3ui(int $red, int $green, int $blue): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($red >= 0 && $red <= 4_294_967_295, 'Argument $red overflow: C type GLuint is required');
        assert($green >= 0 && $green <= 4_294_967_295, 'Argument $green overflow: C type GLuint is required');
        assert($blue >= 0 && $blue <= 4_294_967_295, 'Argument $blue overflow: C type GLuint is required');

        self::$ffi->glColor3ui($red, $green, $blue);
    }

    /**
     * The GL stores both a current single-valued color index and a current four-valued RGBA color. `glColor` sets a
     * new four-valued RGBA color. `glColor` has two major variants: `glColor3` and `glColor4`. `glColor3` variants
     * specify new red, green, and blue values explicitly and set the current alpha value to 1.0 (full intensity)
     * implicitly. `glColor4` variants specify all four color components explicitly.
     *
     *  - `glColor3b`, `glColor4b`, `glColor3s`, `glColor4s`, `glColor3i`, and `glColor4i` take three or four signed
     * byte, short, or long integers as arguments. When **v** is appended to the name, the color commands can take a
     * pointer to an array of such values.
     *
     * Current color values are stored in floating-point format, with unspecified mantissa and exponent sizes.
     * Unsigned integer color components, when specified, are linearly mapped to floating-point values such that the
     * largest representable value maps to 1.0 (full intensity), and 0 maps to 0.0 (zero intensity). Signed integer
     * color components, when specified, are linearly mapped to floating-point values such that the most positive
     * representable value maps to 1.0, and the most negative representable value maps to -1.0 . (Note that this
     * mapping does not convert 0 precisely to 0.0.) Floating-point values are mapped directly.
     *
     * Neither floating-point nor signed integer values are clamped to the range 0 1 before the current color is
     * updated. However, color components are clamped to this range before they are interpolated or written into a
     * color buffer.
     *
     * @see http://docs.gl/gl2/glColor
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glColor3uiv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glColor3uiv($v);
    }

    /**
     * The GL stores both a current single-valued color index and a current four-valued RGBA color. `glColor` sets a
     * new four-valued RGBA color. `glColor` has two major variants: `glColor3` and `glColor4`. `glColor3` variants
     * specify new red, green, and blue values explicitly and set the current alpha value to 1.0 (full intensity)
     * implicitly. `glColor4` variants specify all four color components explicitly.
     *
     *  - `glColor3b`, `glColor4b`, `glColor3s`, `glColor4s`, `glColor3i`, and `glColor4i` take three or four signed
     * byte, short, or long integers as arguments. When **v** is appended to the name, the color commands can take a
     * pointer to an array of such values.
     *
     * Current color values are stored in floating-point format, with unspecified mantissa and exponent sizes.
     * Unsigned integer color components, when specified, are linearly mapped to floating-point values such that the
     * largest representable value maps to 1.0 (full intensity), and 0 maps to 0.0 (zero intensity). Signed integer
     * color components, when specified, are linearly mapped to floating-point values such that the most positive
     * representable value maps to 1.0, and the most negative representable value maps to -1.0 . (Note that this
     * mapping does not convert 0 precisely to 0.0.) Floating-point values are mapped directly.
     *
     * Neither floating-point nor signed integer values are clamped to the range 0 1 before the current color is
     * updated. However, color components are clamped to this range before they are interpolated or written into a
     * color buffer.
     *
     * @see http://docs.gl/gl2/glColor
     * @since 1.1
     * @param int $red
     * @param int $green
     * @param int $blue
     * @return void
     */
    public static function glColor3us(int $red, int $green, int $blue): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($red >= 0 && $red <= 65_535, 'Argument $red overflow: C type GLushort is required');
        assert($green >= 0 && $green <= 65_535, 'Argument $green overflow: C type GLushort is required');
        assert($blue >= 0 && $blue <= 65_535, 'Argument $blue overflow: C type GLushort is required');

        self::$ffi->glColor3us($red, $green, $blue);
    }

    /**
     * The GL stores both a current single-valued color index and a current four-valued RGBA color. `glColor` sets a
     * new four-valued RGBA color. `glColor` has two major variants: `glColor3` and `glColor4`. `glColor3` variants
     * specify new red, green, and blue values explicitly and set the current alpha value to 1.0 (full intensity)
     * implicitly. `glColor4` variants specify all four color components explicitly.
     *
     *  - `glColor3b`, `glColor4b`, `glColor3s`, `glColor4s`, `glColor3i`, and `glColor4i` take three or four signed
     * byte, short, or long integers as arguments. When **v** is appended to the name, the color commands can take a
     * pointer to an array of such values.
     *
     * Current color values are stored in floating-point format, with unspecified mantissa and exponent sizes.
     * Unsigned integer color components, when specified, are linearly mapped to floating-point values such that the
     * largest representable value maps to 1.0 (full intensity), and 0 maps to 0.0 (zero intensity). Signed integer
     * color components, when specified, are linearly mapped to floating-point values such that the most positive
     * representable value maps to 1.0, and the most negative representable value maps to -1.0 . (Note that this
     * mapping does not convert 0 precisely to 0.0.) Floating-point values are mapped directly.
     *
     * Neither floating-point nor signed integer values are clamped to the range 0 1 before the current color is
     * updated. However, color components are clamped to this range before they are interpolated or written into a
     * color buffer.
     *
     * @see http://docs.gl/gl2/glColor
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glColor3usv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glColor3usv($v);
    }

    /**
     * The GL stores both a current single-valued color index and a current four-valued RGBA color. `glColor` sets a
     * new four-valued RGBA color. `glColor` has two major variants: `glColor3` and `glColor4`. `glColor3` variants
     * specify new red, green, and blue values explicitly and set the current alpha value to 1.0 (full intensity)
     * implicitly. `glColor4` variants specify all four color components explicitly.
     *
     *  - `glColor3b`, `glColor4b`, `glColor3s`, `glColor4s`, `glColor3i`, and `glColor4i` take three or four signed
     * byte, short, or long integers as arguments. When **v** is appended to the name, the color commands can take a
     * pointer to an array of such values.
     *
     * Current color values are stored in floating-point format, with unspecified mantissa and exponent sizes.
     * Unsigned integer color components, when specified, are linearly mapped to floating-point values such that the
     * largest representable value maps to 1.0 (full intensity), and 0 maps to 0.0 (zero intensity). Signed integer
     * color components, when specified, are linearly mapped to floating-point values such that the most positive
     * representable value maps to 1.0, and the most negative representable value maps to -1.0 . (Note that this
     * mapping does not convert 0 precisely to 0.0.) Floating-point values are mapped directly.
     *
     * Neither floating-point nor signed integer values are clamped to the range 0 1 before the current color is
     * updated. However, color components are clamped to this range before they are interpolated or written into a
     * color buffer.
     *
     * @see http://docs.gl/gl2/glColor
     * @since 1.1
     * @param int $red
     * @param int $green
     * @param int $blue
     * @param int $alpha
     * @return void
     */
    public static function glColor4b(int $red, int $green, int $blue, int $alpha): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($red >= -128 && $red <= 127, 'Argument $red overflow: C type GLbyte is required');
        assert($green >= -128 && $green <= 127, 'Argument $green overflow: C type GLbyte is required');
        assert($blue >= -128 && $blue <= 127, 'Argument $blue overflow: C type GLbyte is required');
        assert($alpha >= -128 && $alpha <= 127, 'Argument $alpha overflow: C type GLbyte is required');

        self::$ffi->glColor4b($red, $green, $blue, $alpha);
    }

    /**
     * The GL stores both a current single-valued color index and a current four-valued RGBA color. `glColor` sets a
     * new four-valued RGBA color. `glColor` has two major variants: `glColor3` and `glColor4`. `glColor3` variants
     * specify new red, green, and blue values explicitly and set the current alpha value to 1.0 (full intensity)
     * implicitly. `glColor4` variants specify all four color components explicitly.
     *
     *  - `glColor3b`, `glColor4b`, `glColor3s`, `glColor4s`, `glColor3i`, and `glColor4i` take three or four signed
     * byte, short, or long integers as arguments. When **v** is appended to the name, the color commands can take a
     * pointer to an array of such values.
     *
     * Current color values are stored in floating-point format, with unspecified mantissa and exponent sizes.
     * Unsigned integer color components, when specified, are linearly mapped to floating-point values such that the
     * largest representable value maps to 1.0 (full intensity), and 0 maps to 0.0 (zero intensity). Signed integer
     * color components, when specified, are linearly mapped to floating-point values such that the most positive
     * representable value maps to 1.0, and the most negative representable value maps to -1.0 . (Note that this
     * mapping does not convert 0 precisely to 0.0.) Floating-point values are mapped directly.
     *
     * Neither floating-point nor signed integer values are clamped to the range 0 1 before the current color is
     * updated. However, color components are clamped to this range before they are interpolated or written into a
     * color buffer.
     *
     * @see http://docs.gl/gl2/glColor
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glColor4bv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glColor4bv($v);
    }

    /**
     * The GL stores both a current single-valued color index and a current four-valued RGBA color. `glColor` sets a
     * new four-valued RGBA color. `glColor` has two major variants: `glColor3` and `glColor4`. `glColor3` variants
     * specify new red, green, and blue values explicitly and set the current alpha value to 1.0 (full intensity)
     * implicitly. `glColor4` variants specify all four color components explicitly.
     *
     *  - `glColor3b`, `glColor4b`, `glColor3s`, `glColor4s`, `glColor3i`, and `glColor4i` take three or four signed
     * byte, short, or long integers as arguments. When **v** is appended to the name, the color commands can take a
     * pointer to an array of such values.
     *
     * Current color values are stored in floating-point format, with unspecified mantissa and exponent sizes.
     * Unsigned integer color components, when specified, are linearly mapped to floating-point values such that the
     * largest representable value maps to 1.0 (full intensity), and 0 maps to 0.0 (zero intensity). Signed integer
     * color components, when specified, are linearly mapped to floating-point values such that the most positive
     * representable value maps to 1.0, and the most negative representable value maps to -1.0 . (Note that this
     * mapping does not convert 0 precisely to 0.0.) Floating-point values are mapped directly.
     *
     * Neither floating-point nor signed integer values are clamped to the range 0 1 before the current color is
     * updated. However, color components are clamped to this range before they are interpolated or written into a
     * color buffer.
     *
     * @see http://docs.gl/gl2/glColor
     * @since 1.1
     * @param float $red
     * @param float $green
     * @param float $blue
     * @param float $alpha
     * @return void
     */
    public static function glColor4d(float $red, float $green, float $blue, float $alpha): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($red >= \PHP_FLOAT_MIN && $red <= \PHP_FLOAT_MAX, 'Argument $red overflow: C type GLdouble is required');
        assert($green >= \PHP_FLOAT_MIN && $green <= \PHP_FLOAT_MAX, 'Argument $green overflow: C type GLdouble is required');
        assert($blue >= \PHP_FLOAT_MIN && $blue <= \PHP_FLOAT_MAX, 'Argument $blue overflow: C type GLdouble is required');
        assert($alpha >= \PHP_FLOAT_MIN && $alpha <= \PHP_FLOAT_MAX, 'Argument $alpha overflow: C type GLdouble is required');

        self::$ffi->glColor4d($red, $green, $blue, $alpha);
    }

    /**
     * The GL stores both a current single-valued color index and a current four-valued RGBA color. `glColor` sets a
     * new four-valued RGBA color. `glColor` has two major variants: `glColor3` and `glColor4`. `glColor3` variants
     * specify new red, green, and blue values explicitly and set the current alpha value to 1.0 (full intensity)
     * implicitly. `glColor4` variants specify all four color components explicitly.
     *
     *  - `glColor3b`, `glColor4b`, `glColor3s`, `glColor4s`, `glColor3i`, and `glColor4i` take three or four signed
     * byte, short, or long integers as arguments. When **v** is appended to the name, the color commands can take a
     * pointer to an array of such values.
     *
     * Current color values are stored in floating-point format, with unspecified mantissa and exponent sizes.
     * Unsigned integer color components, when specified, are linearly mapped to floating-point values such that the
     * largest representable value maps to 1.0 (full intensity), and 0 maps to 0.0 (zero intensity). Signed integer
     * color components, when specified, are linearly mapped to floating-point values such that the most positive
     * representable value maps to 1.0, and the most negative representable value maps to -1.0 . (Note that this
     * mapping does not convert 0 precisely to 0.0.) Floating-point values are mapped directly.
     *
     * Neither floating-point nor signed integer values are clamped to the range 0 1 before the current color is
     * updated. However, color components are clamped to this range before they are interpolated or written into a
     * color buffer.
     *
     * @see http://docs.gl/gl2/glColor
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glColor4dv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glColor4dv($v);
    }

    /**
     * The GL stores both a current single-valued color index and a current four-valued RGBA color. `glColor` sets a
     * new four-valued RGBA color. `glColor` has two major variants: `glColor3` and `glColor4`. `glColor3` variants
     * specify new red, green, and blue values explicitly and set the current alpha value to 1.0 (full intensity)
     * implicitly. `glColor4` variants specify all four color components explicitly.
     *
     *  - `glColor3b`, `glColor4b`, `glColor3s`, `glColor4s`, `glColor3i`, and `glColor4i` take three or four signed
     * byte, short, or long integers as arguments. When **v** is appended to the name, the color commands can take a
     * pointer to an array of such values.
     *
     * Current color values are stored in floating-point format, with unspecified mantissa and exponent sizes.
     * Unsigned integer color components, when specified, are linearly mapped to floating-point values such that the
     * largest representable value maps to 1.0 (full intensity), and 0 maps to 0.0 (zero intensity). Signed integer
     * color components, when specified, are linearly mapped to floating-point values such that the most positive
     * representable value maps to 1.0, and the most negative representable value maps to -1.0 . (Note that this
     * mapping does not convert 0 precisely to 0.0.) Floating-point values are mapped directly.
     *
     * Neither floating-point nor signed integer values are clamped to the range 0 1 before the current color is
     * updated. However, color components are clamped to this range before they are interpolated or written into a
     * color buffer.
     *
     * @see http://docs.gl/gl2/glColor
     * @since 1.1
     * @param float $red
     * @param float $green
     * @param float $blue
     * @param float $alpha
     * @return void
     */
    public static function glColor4f(float $red, float $green, float $blue, float $alpha): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($red >= -3.40282e38 && $red <= 3.40282e38, 'Argument $red overflow: C type GLfloat is required');
        assert($green >= -3.40282e38 && $green <= 3.40282e38, 'Argument $green overflow: C type GLfloat is required');
        assert($blue >= -3.40282e38 && $blue <= 3.40282e38, 'Argument $blue overflow: C type GLfloat is required');
        assert($alpha >= -3.40282e38 && $alpha <= 3.40282e38, 'Argument $alpha overflow: C type GLfloat is required');

        self::$ffi->glColor4f($red, $green, $blue, $alpha);
    }

    /**
     * The GL stores both a current single-valued color index and a current four-valued RGBA color. `glColor` sets a
     * new four-valued RGBA color. `glColor` has two major variants: `glColor3` and `glColor4`. `glColor3` variants
     * specify new red, green, and blue values explicitly and set the current alpha value to 1.0 (full intensity)
     * implicitly. `glColor4` variants specify all four color components explicitly.
     *
     *  - `glColor3b`, `glColor4b`, `glColor3s`, `glColor4s`, `glColor3i`, and `glColor4i` take three or four signed
     * byte, short, or long integers as arguments. When **v** is appended to the name, the color commands can take a
     * pointer to an array of such values.
     *
     * Current color values are stored in floating-point format, with unspecified mantissa and exponent sizes.
     * Unsigned integer color components, when specified, are linearly mapped to floating-point values such that the
     * largest representable value maps to 1.0 (full intensity), and 0 maps to 0.0 (zero intensity). Signed integer
     * color components, when specified, are linearly mapped to floating-point values such that the most positive
     * representable value maps to 1.0, and the most negative representable value maps to -1.0 . (Note that this
     * mapping does not convert 0 precisely to 0.0.) Floating-point values are mapped directly.
     *
     * Neither floating-point nor signed integer values are clamped to the range 0 1 before the current color is
     * updated. However, color components are clamped to this range before they are interpolated or written into a
     * color buffer.
     *
     * @see http://docs.gl/gl2/glColor
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glColor4fv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glColor4fv($v);
    }

    /**
     * The GL stores both a current single-valued color index and a current four-valued RGBA color. `glColor` sets a
     * new four-valued RGBA color. `glColor` has two major variants: `glColor3` and `glColor4`. `glColor3` variants
     * specify new red, green, and blue values explicitly and set the current alpha value to 1.0 (full intensity)
     * implicitly. `glColor4` variants specify all four color components explicitly.
     *
     *  - `glColor3b`, `glColor4b`, `glColor3s`, `glColor4s`, `glColor3i`, and `glColor4i` take three or four signed
     * byte, short, or long integers as arguments. When **v** is appended to the name, the color commands can take a
     * pointer to an array of such values.
     *
     * Current color values are stored in floating-point format, with unspecified mantissa and exponent sizes.
     * Unsigned integer color components, when specified, are linearly mapped to floating-point values such that the
     * largest representable value maps to 1.0 (full intensity), and 0 maps to 0.0 (zero intensity). Signed integer
     * color components, when specified, are linearly mapped to floating-point values such that the most positive
     * representable value maps to 1.0, and the most negative representable value maps to -1.0 . (Note that this
     * mapping does not convert 0 precisely to 0.0.) Floating-point values are mapped directly.
     *
     * Neither floating-point nor signed integer values are clamped to the range 0 1 before the current color is
     * updated. However, color components are clamped to this range before they are interpolated or written into a
     * color buffer.
     *
     * @see http://docs.gl/gl2/glColor
     * @since 1.1
     * @param int $red
     * @param int $green
     * @param int $blue
     * @param int $alpha
     * @return void
     */
    public static function glColor4i(int $red, int $green, int $blue, int $alpha): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($red >= \PHP_INT_MIN && $red <= \PHP_INT_MAX, 'Argument $red overflow: C type GLint is required');
        assert($green >= \PHP_INT_MIN && $green <= \PHP_INT_MAX, 'Argument $green overflow: C type GLint is required');
        assert($blue >= \PHP_INT_MIN && $blue <= \PHP_INT_MAX, 'Argument $blue overflow: C type GLint is required');
        assert($alpha >= \PHP_INT_MIN && $alpha <= \PHP_INT_MAX, 'Argument $alpha overflow: C type GLint is required');

        self::$ffi->glColor4i($red, $green, $blue, $alpha);
    }

    /**
     * The GL stores both a current single-valued color index and a current four-valued RGBA color. `glColor` sets a
     * new four-valued RGBA color. `glColor` has two major variants: `glColor3` and `glColor4`. `glColor3` variants
     * specify new red, green, and blue values explicitly and set the current alpha value to 1.0 (full intensity)
     * implicitly. `glColor4` variants specify all four color components explicitly.
     *
     *  - `glColor3b`, `glColor4b`, `glColor3s`, `glColor4s`, `glColor3i`, and `glColor4i` take three or four signed
     * byte, short, or long integers as arguments. When **v** is appended to the name, the color commands can take a
     * pointer to an array of such values.
     *
     * Current color values are stored in floating-point format, with unspecified mantissa and exponent sizes.
     * Unsigned integer color components, when specified, are linearly mapped to floating-point values such that the
     * largest representable value maps to 1.0 (full intensity), and 0 maps to 0.0 (zero intensity). Signed integer
     * color components, when specified, are linearly mapped to floating-point values such that the most positive
     * representable value maps to 1.0, and the most negative representable value maps to -1.0 . (Note that this
     * mapping does not convert 0 precisely to 0.0.) Floating-point values are mapped directly.
     *
     * Neither floating-point nor signed integer values are clamped to the range 0 1 before the current color is
     * updated. However, color components are clamped to this range before they are interpolated or written into a
     * color buffer.
     *
     * @see http://docs.gl/gl2/glColor
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glColor4iv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glColor4iv($v);
    }

    /**
     * The GL stores both a current single-valued color index and a current four-valued RGBA color. `glColor` sets a
     * new four-valued RGBA color. `glColor` has two major variants: `glColor3` and `glColor4`. `glColor3` variants
     * specify new red, green, and blue values explicitly and set the current alpha value to 1.0 (full intensity)
     * implicitly. `glColor4` variants specify all four color components explicitly.
     *
     *  - `glColor3b`, `glColor4b`, `glColor3s`, `glColor4s`, `glColor3i`, and `glColor4i` take three or four signed
     * byte, short, or long integers as arguments. When **v** is appended to the name, the color commands can take a
     * pointer to an array of such values.
     *
     * Current color values are stored in floating-point format, with unspecified mantissa and exponent sizes.
     * Unsigned integer color components, when specified, are linearly mapped to floating-point values such that the
     * largest representable value maps to 1.0 (full intensity), and 0 maps to 0.0 (zero intensity). Signed integer
     * color components, when specified, are linearly mapped to floating-point values such that the most positive
     * representable value maps to 1.0, and the most negative representable value maps to -1.0 . (Note that this
     * mapping does not convert 0 precisely to 0.0.) Floating-point values are mapped directly.
     *
     * Neither floating-point nor signed integer values are clamped to the range 0 1 before the current color is
     * updated. However, color components are clamped to this range before they are interpolated or written into a
     * color buffer.
     *
     * @see http://docs.gl/gl2/glColor
     * @since 1.1
     * @param int $red
     * @param int $green
     * @param int $blue
     * @param int $alpha
     * @return void
     */
    public static function glColor4s(int $red, int $green, int $blue, int $alpha): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($red >= -32768 && $red <= 32767, 'Argument $red overflow: C type GLshort is required');
        assert($green >= -32768 && $green <= 32767, 'Argument $green overflow: C type GLshort is required');
        assert($blue >= -32768 && $blue <= 32767, 'Argument $blue overflow: C type GLshort is required');
        assert($alpha >= -32768 && $alpha <= 32767, 'Argument $alpha overflow: C type GLshort is required');

        self::$ffi->glColor4s($red, $green, $blue, $alpha);
    }

    /**
     * The GL stores both a current single-valued color index and a current four-valued RGBA color. `glColor` sets a
     * new four-valued RGBA color. `glColor` has two major variants: `glColor3` and `glColor4`. `glColor3` variants
     * specify new red, green, and blue values explicitly and set the current alpha value to 1.0 (full intensity)
     * implicitly. `glColor4` variants specify all four color components explicitly.
     *
     *  - `glColor3b`, `glColor4b`, `glColor3s`, `glColor4s`, `glColor3i`, and `glColor4i` take three or four signed
     * byte, short, or long integers as arguments. When **v** is appended to the name, the color commands can take a
     * pointer to an array of such values.
     *
     * Current color values are stored in floating-point format, with unspecified mantissa and exponent sizes.
     * Unsigned integer color components, when specified, are linearly mapped to floating-point values such that the
     * largest representable value maps to 1.0 (full intensity), and 0 maps to 0.0 (zero intensity). Signed integer
     * color components, when specified, are linearly mapped to floating-point values such that the most positive
     * representable value maps to 1.0, and the most negative representable value maps to -1.0 . (Note that this
     * mapping does not convert 0 precisely to 0.0.) Floating-point values are mapped directly.
     *
     * Neither floating-point nor signed integer values are clamped to the range 0 1 before the current color is
     * updated. However, color components are clamped to this range before they are interpolated or written into a
     * color buffer.
     *
     * @see http://docs.gl/gl2/glColor
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glColor4sv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glColor4sv($v);
    }

    /**
     * The GL stores both a current single-valued color index and a current four-valued RGBA color. `glColor` sets a
     * new four-valued RGBA color. `glColor` has two major variants: `glColor3` and `glColor4`. `glColor3` variants
     * specify new red, green, and blue values explicitly and set the current alpha value to 1.0 (full intensity)
     * implicitly. `glColor4` variants specify all four color components explicitly.
     *
     *  - `glColor3b`, `glColor4b`, `glColor3s`, `glColor4s`, `glColor3i`, and `glColor4i` take three or four signed
     * byte, short, or long integers as arguments. When **v** is appended to the name, the color commands can take a
     * pointer to an array of such values.
     *
     * Current color values are stored in floating-point format, with unspecified mantissa and exponent sizes.
     * Unsigned integer color components, when specified, are linearly mapped to floating-point values such that the
     * largest representable value maps to 1.0 (full intensity), and 0 maps to 0.0 (zero intensity). Signed integer
     * color components, when specified, are linearly mapped to floating-point values such that the most positive
     * representable value maps to 1.0, and the most negative representable value maps to -1.0 . (Note that this
     * mapping does not convert 0 precisely to 0.0.) Floating-point values are mapped directly.
     *
     * Neither floating-point nor signed integer values are clamped to the range 0 1 before the current color is
     * updated. However, color components are clamped to this range before they are interpolated or written into a
     * color buffer.
     *
     * @see http://docs.gl/gl2/glColor
     * @since 1.1
     * @param int $red
     * @param int $green
     * @param int $blue
     * @param int $alpha
     * @return void
     */
    public static function glColor4ub(int $red, int $green, int $blue, int $alpha): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($red >= 0 && $red <= 255, 'Argument $red overflow: C type GLubyte is required');
        assert($green >= 0 && $green <= 255, 'Argument $green overflow: C type GLubyte is required');
        assert($blue >= 0 && $blue <= 255, 'Argument $blue overflow: C type GLubyte is required');
        assert($alpha >= 0 && $alpha <= 255, 'Argument $alpha overflow: C type GLubyte is required');

        self::$ffi->glColor4ub($red, $green, $blue, $alpha);
    }

    /**
     * The GL stores both a current single-valued color index and a current four-valued RGBA color. `glColor` sets a
     * new four-valued RGBA color. `glColor` has two major variants: `glColor3` and `glColor4`. `glColor3` variants
     * specify new red, green, and blue values explicitly and set the current alpha value to 1.0 (full intensity)
     * implicitly. `glColor4` variants specify all four color components explicitly.
     *
     *  - `glColor3b`, `glColor4b`, `glColor3s`, `glColor4s`, `glColor3i`, and `glColor4i` take three or four signed
     * byte, short, or long integers as arguments. When **v** is appended to the name, the color commands can take a
     * pointer to an array of such values.
     *
     * Current color values are stored in floating-point format, with unspecified mantissa and exponent sizes.
     * Unsigned integer color components, when specified, are linearly mapped to floating-point values such that the
     * largest representable value maps to 1.0 (full intensity), and 0 maps to 0.0 (zero intensity). Signed integer
     * color components, when specified, are linearly mapped to floating-point values such that the most positive
     * representable value maps to 1.0, and the most negative representable value maps to -1.0 . (Note that this
     * mapping does not convert 0 precisely to 0.0.) Floating-point values are mapped directly.
     *
     * Neither floating-point nor signed integer values are clamped to the range 0 1 before the current color is
     * updated. However, color components are clamped to this range before they are interpolated or written into a
     * color buffer.
     *
     * @see http://docs.gl/gl2/glColor
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glColor4ubv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glColor4ubv($v);
    }

    /**
     * The GL stores both a current single-valued color index and a current four-valued RGBA color. `glColor` sets a
     * new four-valued RGBA color. `glColor` has two major variants: `glColor3` and `glColor4`. `glColor3` variants
     * specify new red, green, and blue values explicitly and set the current alpha value to 1.0 (full intensity)
     * implicitly. `glColor4` variants specify all four color components explicitly.
     *
     *  - `glColor3b`, `glColor4b`, `glColor3s`, `glColor4s`, `glColor3i`, and `glColor4i` take three or four signed
     * byte, short, or long integers as arguments. When **v** is appended to the name, the color commands can take a
     * pointer to an array of such values.
     *
     * Current color values are stored in floating-point format, with unspecified mantissa and exponent sizes.
     * Unsigned integer color components, when specified, are linearly mapped to floating-point values such that the
     * largest representable value maps to 1.0 (full intensity), and 0 maps to 0.0 (zero intensity). Signed integer
     * color components, when specified, are linearly mapped to floating-point values such that the most positive
     * representable value maps to 1.0, and the most negative representable value maps to -1.0 . (Note that this
     * mapping does not convert 0 precisely to 0.0.) Floating-point values are mapped directly.
     *
     * Neither floating-point nor signed integer values are clamped to the range 0 1 before the current color is
     * updated. However, color components are clamped to this range before they are interpolated or written into a
     * color buffer.
     *
     * @see http://docs.gl/gl2/glColor
     * @since 1.1
     * @param int $red
     * @param int $green
     * @param int $blue
     * @param int $alpha
     * @return void
     */
    public static function glColor4ui(int $red, int $green, int $blue, int $alpha): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($red >= 0 && $red <= 4_294_967_295, 'Argument $red overflow: C type GLuint is required');
        assert($green >= 0 && $green <= 4_294_967_295, 'Argument $green overflow: C type GLuint is required');
        assert($blue >= 0 && $blue <= 4_294_967_295, 'Argument $blue overflow: C type GLuint is required');
        assert($alpha >= 0 && $alpha <= 4_294_967_295, 'Argument $alpha overflow: C type GLuint is required');

        self::$ffi->glColor4ui($red, $green, $blue, $alpha);
    }

    /**
     * The GL stores both a current single-valued color index and a current four-valued RGBA color. `glColor` sets a
     * new four-valued RGBA color. `glColor` has two major variants: `glColor3` and `glColor4`. `glColor3` variants
     * specify new red, green, and blue values explicitly and set the current alpha value to 1.0 (full intensity)
     * implicitly. `glColor4` variants specify all four color components explicitly.
     *
     *  - `glColor3b`, `glColor4b`, `glColor3s`, `glColor4s`, `glColor3i`, and `glColor4i` take three or four signed
     * byte, short, or long integers as arguments. When **v** is appended to the name, the color commands can take a
     * pointer to an array of such values.
     *
     * Current color values are stored in floating-point format, with unspecified mantissa and exponent sizes.
     * Unsigned integer color components, when specified, are linearly mapped to floating-point values such that the
     * largest representable value maps to 1.0 (full intensity), and 0 maps to 0.0 (zero intensity). Signed integer
     * color components, when specified, are linearly mapped to floating-point values such that the most positive
     * representable value maps to 1.0, and the most negative representable value maps to -1.0 . (Note that this
     * mapping does not convert 0 precisely to 0.0.) Floating-point values are mapped directly.
     *
     * Neither floating-point nor signed integer values are clamped to the range 0 1 before the current color is
     * updated. However, color components are clamped to this range before they are interpolated or written into a
     * color buffer.
     *
     * @see http://docs.gl/gl2/glColor
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glColor4uiv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glColor4uiv($v);
    }

    /**
     * The GL stores both a current single-valued color index and a current four-valued RGBA color. `glColor` sets a
     * new four-valued RGBA color. `glColor` has two major variants: `glColor3` and `glColor4`. `glColor3` variants
     * specify new red, green, and blue values explicitly and set the current alpha value to 1.0 (full intensity)
     * implicitly. `glColor4` variants specify all four color components explicitly.
     *
     *  - `glColor3b`, `glColor4b`, `glColor3s`, `glColor4s`, `glColor3i`, and `glColor4i` take three or four signed
     * byte, short, or long integers as arguments. When **v** is appended to the name, the color commands can take a
     * pointer to an array of such values.
     *
     * Current color values are stored in floating-point format, with unspecified mantissa and exponent sizes.
     * Unsigned integer color components, when specified, are linearly mapped to floating-point values such that the
     * largest representable value maps to 1.0 (full intensity), and 0 maps to 0.0 (zero intensity). Signed integer
     * color components, when specified, are linearly mapped to floating-point values such that the most positive
     * representable value maps to 1.0, and the most negative representable value maps to -1.0 . (Note that this
     * mapping does not convert 0 precisely to 0.0.) Floating-point values are mapped directly.
     *
     * Neither floating-point nor signed integer values are clamped to the range 0 1 before the current color is
     * updated. However, color components are clamped to this range before they are interpolated or written into a
     * color buffer.
     *
     * @see http://docs.gl/gl2/glColor
     * @since 1.1
     * @param int $red
     * @param int $green
     * @param int $blue
     * @param int $alpha
     * @return void
     */
    public static function glColor4us(int $red, int $green, int $blue, int $alpha): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($red >= 0 && $red <= 65_535, 'Argument $red overflow: C type GLushort is required');
        assert($green >= 0 && $green <= 65_535, 'Argument $green overflow: C type GLushort is required');
        assert($blue >= 0 && $blue <= 65_535, 'Argument $blue overflow: C type GLushort is required');
        assert($alpha >= 0 && $alpha <= 65_535, 'Argument $alpha overflow: C type GLushort is required');

        self::$ffi->glColor4us($red, $green, $blue, $alpha);
    }

    /**
     * The GL stores both a current single-valued color index and a current four-valued RGBA color. `glColor` sets a
     * new four-valued RGBA color. `glColor` has two major variants: `glColor3` and `glColor4`. `glColor3` variants
     * specify new red, green, and blue values explicitly and set the current alpha value to 1.0 (full intensity)
     * implicitly. `glColor4` variants specify all four color components explicitly.
     *
     *  - `glColor3b`, `glColor4b`, `glColor3s`, `glColor4s`, `glColor3i`, and `glColor4i` take three or four signed
     * byte, short, or long integers as arguments. When **v** is appended to the name, the color commands can take a
     * pointer to an array of such values.
     *
     * Current color values are stored in floating-point format, with unspecified mantissa and exponent sizes.
     * Unsigned integer color components, when specified, are linearly mapped to floating-point values such that the
     * largest representable value maps to 1.0 (full intensity), and 0 maps to 0.0 (zero intensity). Signed integer
     * color components, when specified, are linearly mapped to floating-point values such that the most positive
     * representable value maps to 1.0, and the most negative representable value maps to -1.0 . (Note that this
     * mapping does not convert 0 precisely to 0.0.) Floating-point values are mapped directly.
     *
     * Neither floating-point nor signed integer values are clamped to the range 0 1 before the current color is
     * updated. However, color components are clamped to this range before they are interpolated or written into a
     * color buffer.
     *
     * @see http://docs.gl/gl2/glColor
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glColor4usv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glColor4usv($v);
    }

    /**
     * Specifies whether the individual color components in the frame buffer can or cannot be written. If *`red`* is
     * `GL_FALSE`, for example, no change is made to the red component of any pixel in any of the color buffers,
     * regardless of the drawing operation attempted.
     *
     * Changes to individual bits of components cannot be controlled. Rather, changes are either enabled or disabled
     * for entire color components.
     *
     * @see http://docs.gl/gl2/glColorMask
     * @see http://docs.gl/gl3/glColorMask
     * @see http://docs.gl/gl4/glColorMask
     * @since 1.1
     * @param int $red
     * @param int $green
     * @param int $blue
     * @param int $alpha
     * @return void
     */
    public static function glColorMask(int $red, int $green, int $blue, int $alpha): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($red >= 0 && $red <= 255, 'Argument $red overflow: C type GLboolean is required');
        assert($green >= 0 && $green <= 255, 'Argument $green overflow: C type GLboolean is required');
        assert($blue >= 0 && $blue <= 255, 'Argument $blue overflow: C type GLboolean is required');
        assert($alpha >= 0 && $alpha <= 255, 'Argument $alpha overflow: C type GLboolean is required');

        self::$ffi->glColorMask($red, $green, $blue, $alpha);
    }

    /**
     * Specifies which material parameters track the current color. When `GL_COLOR_MATERIAL` is enabled, the material
     * parameter or parameters specified by *`mode`*, of the material or materials specified by *`face`*, track the
     * current color at all times.
     *
     * To enable and disable `GL_COLOR_MATERIAL`, call {@see glEnable} and {@see glDisable} with argument
     * `GL_COLOR_MATERIAL`. `GL_COLOR_MATERIAL` is initially disabled.
     *
     * @see http://docs.gl/gl2/glColorMaterial
     * @since 1.1
     * @param int $face
     * @param int $mode
     * @return void
     */
    public static function glColorMaterial(int $face, int $mode): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($face >= 0 && $face <= 4_294_967_295, 'Argument $face overflow: C type GLenum is required');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');

        self::$ffi->glColorMaterial($face, $mode);
    }

    /**
     * Specifies the location and data format of an array of color components to use when rendering. *`size`*
     * specifies the number of components per color, and must be 3 or 4. *`type`* specifies the data type of each
     * color component, and *`stride`* specifies the byte stride from one color to the next, allowing vertices and
     * attributes to be packed into a single array or stored in separate arrays. (Single-array storage may be more
     * efficient on some implementations; see {@see glInterleavedArrays}.)
     *
     * If a non-zero named buffer object is bound to the `GL_ARRAY_BUFFER` target (see {@see glBindBuffer})
     * while a color array is specified, *`pointer`* is treated as a byte offset into the buffer object's data store.
     * Also, the buffer object binding (`GL_ARRAY_BUFFER_BINDING`) is saved as color vertex array client-side state
     * (`GL_COLOR_ARRAY_BUFFER_BINDING`).
     *
     * When a color array is specified, *`size`*, *`type`*, *`stride`*, and *`pointer`* are saved as client-side
     * state, in addition to the current vertex array buffer object binding.
     *
     * To enable and disable the color array, call {@see glEnableClientState} and
     * {@see glDisableClientState} with the argument `GL_COLOR_ARRAY`. If enabled, the color array
     * is used when {@see glDrawArrays}, {@see glMultiDrawArrays},
     * {@see glDrawElements}, {@see glMultiDrawElements},
     * {@see glDrawRangeElements}, or {@see glArrayElement} is called.
     *
     * @see http://docs.gl/gl2/glColorPointer
     * @since 1.1
     * @param int $size
     * @param int $type
     * @param int $stride
     * @param \FFI\CData|\FFI\CPtr|null $pointer
     * @return void
     */
    public static function glColorPointer(int $size, int $type, int $stride, ?\FFI\CData $pointer): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($size >= \PHP_INT_MIN && $size <= \PHP_INT_MAX, 'Argument $size overflow: C type GLint is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');
        assert($stride >= \PHP_INT_MIN && $stride <= \PHP_INT_MAX, 'Argument $stride overflow: C type GLsizei is required');

        self::$ffi->glColorPointer($size, $type, $stride, $pointer);
    }

    /**
     * Copies a screen-aligned rectangle of pixels from the specified frame buffer location to a region relative to
     * the current raster position. Its operation is well defined only if the entire pixel source region is within
     * the exposed portion of the window. Results of copies from outside the window, or from regions of the window
     * that are not exposed, are hardware dependent and undefined.
     *
     * *`x`* and *`y`* specify the window coordinates of the lower left corner of the rectangular region to be
     * copied. *`width`* and *`height`* specify the dimensions of the rectangular region to be copied. Both *`width`*
     * and *`height`* must not be negative.
     *
     * Several parameters control the processing of the pixel data while it is being copied. These parameters are set
     * with three commands: {@see glPixelTransfer}, {@see glPixelMap}, and
     * {@see glPixelZoom}. This reference page describes the effects on `glCopyPixels` of most, but not all,
     * of the parameters specified by these three commands.
     *
     *  - `glCopyPixels` copies values from each pixel with the lower left-hand corner at x + i y + j for 0 &lt;= i
     * &lt; width and 0 &lt;= j &lt; height . This pixel is said to be the ith pixel in the jth row. Pixels are
     * copied in row order from the lowest to the highest row, left to right in each row.
     *
     * *`type`* specifies whether color, depth, or stencil data is to be copied. The details of the transfer for each
     * data type are as follows:
     *
     *  - `GL_COLOR` Indices or RGBA colors are read from the buffer currently specified as the read source buffer
     * (see {@see glReadBuffer}). If the GL is in color index mode, each index that is read from this buffer
     * is converted to a fixed-point format with an unspecified number of bits to the right of the binary point. Each
     * index is then shifted left by `GL_INDEX_SHIFT` bits, and added to `GL_INDEX_OFFSET`. If `GL_INDEX_SHIFT` is
     * negative, the shift is to the right. In either case, zero bits fill otherwise unspecified bit locations in the
     * result. If `GL_MAP_COLOR` is true, the index is replaced with the value that it references in lookup table
     * `GL_PIXEL_MAP_I_TO_I`. Whether the lookup replacement of the index is done or not, the integer part of the
     * index is then ANDed with 2 b - 1 , where b is the number of bits in a color index buffer.
     *
     * If the GL is in RGBA mode, the red, green, blue, and alpha components of each pixel that is read are converted
     * to an internal floating-point format with unspecified precision. The conversion maps the largest representable
     * component value to 1.0, and component value 0 to 0.0. The resulting floating-point color values are then
     * multiplied by `GL_c_SCALE` and added to `GL_c_BIAS`, where *c* is RED, GREEN, BLUE, and ALPHA for the
     * respective color components. The results are clamped to the range [0,1]. If `GL_MAP_COLOR` is true, each color
     * component is scaled by the size of lookup table `GL_PIXEL_MAP_c_TO_c`, then replaced by the value that it
     * references in that table. *c* is R, G, B, or A.
     *
     * If the `ARB_imaging` extension is supported, the color values may be additionally processed by color-table
     * lookups, color-matrix transformations, and convolution filters.
     *
     * The GL then converts the resulting indices or RGBA colors to fragments by attaching the current raster
     * position *z* coordinate and texture coordinates to each pixel, then assigning window coordinates x r + i y r +
     * j , where x r y r is the current raster position, and the pixel was the ith pixel in the jth row. These pixel
     * fragments are then treated just like the fragments generated by rasterizing points, lines, or polygons.
     * Texture mapping, fog, and all the fragment operations are applied before the fragments are written to the
     * frame buffer.
     *
     *  - `GL_DEPTH` Depth values are read from the depth buffer and converted directly to an internal floating-point
     * format with unspecified precision. The resulting floating-point depth value is then multiplied by
     * `GL_DEPTH_SCALE` and added to `GL_DEPTH_BIAS`. The result is clamped to the range [0,1].
     *
     * The GL then converts the resulting depth components to fragments by attaching the current raster position
     * color or color index and texture coordinates to each pixel, then assigning window coordinates x r + i y r + j
     * , where x r y r is the current raster position, and the pixel was the ith pixel in the jth row. These pixel
     * fragments are then treated just like the fragments generated by rasterizing points, lines, or polygons.
     * Texture mapping, fog, and all the fragment operations are applied before the fragments are written to the
     * frame buffer.
     *
     *  - `GL_STENCIL` Stencil indices are read from the stencil buffer and converted to an internal fixed-point
     * format with an unspecified number of bits to the right of the binary point. Each fixed-point index is then
     * shifted left by `GL_INDEX_SHIFT` bits, and added to `GL_INDEX_OFFSET`. If `GL_INDEX_SHIFT` is negative, the
     * shift is to the right. In either case, zero bits fill otherwise unspecified bit locations in the result. If
     * `GL_MAP_STENCIL` is true, the index is replaced with the value that it references in lookup table
     * `GL_PIXEL_MAP_S_TO_S`. Whether the lookup replacement of the index is done or not, the integer part of the
     * index is then ANDed with 2 b - 1 , where b is the number of bits in the stencil buffer. The resulting stencil
     * indices are then written to the stencil buffer such that the index read from the ith location of the jth row
     * is written to location x r + i y r + j , where x r y r is the current raster position. Only the pixel
     * ownership test, the scissor test, and the stencil writemask affect these write operations.
     *
     * The rasterization described thus far assumes pixel zoom factors of 1.0. If {@see glPixelZoom} is used
     * to change the x and y pixel zoom factors, pixels are converted to fragments as follows. If x r y r is the
     * current raster position, and a given pixel is in the ith location in the jth row of the source pixel
     * rectangle, then fragments are generated for pixels whose centers are in the rectangle with corners at
     *
     * x r + zoom x ⁢ i y r + zoom y ⁢ j
     *
     * and
     *
     * x r + zoom x ⁡ i + 1 y r + zoom y ⁡ j + 1
     *
     * where zoom x is the value of `GL_ZOOM_X` and zoom y is the value of `GL_ZOOM_Y`.
     *
     * @see http://docs.gl/gl2/glCopyPixels
     * @since 1.1
     * @param int $x
     * @param int $y
     * @param int $width
     * @param int $height
     * @param int $type
     * @return void
     */
    public static function glCopyPixels(int $x, int $y, int $width, int $height, int $type): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= \PHP_INT_MIN && $x <= \PHP_INT_MAX, 'Argument $x overflow: C type GLint is required');
        assert($y >= \PHP_INT_MIN && $y <= \PHP_INT_MAX, 'Argument $y overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');

        self::$ffi->glCopyPixels($x, $y, $width, $height, $type);
    }

    /**
     * Defines a one-dimensional texture image with pixels from the current `GL_READ_BUFFER`.
     *
     * The screen-aligned pixel row with left corner at x y and with a length of width + 2 ⁡ border defines the
     * texture array at the mipmap level specified by *`level`*. *`internalformat`* specifies the internal format of
     * the texture array.
     *
     * The pixels in the row are processed exactly as if {@see glCopyPixels} had been called, but the
     * process stops just before final conversion. At this point all pixel component values are clamped to the range
     * 0 1 and then converted to the texture's internal format for storage in the texel array.
     *
     * Pixel ordering is such that lower x screen coordinates correspond to lower texture coordinates.
     *
     * If any of the pixels within the specified row of the current `GL_READ_BUFFER` are outside the window
     * associated with the current rendering context, then the values obtained for those pixels are undefined.
     *
     *  - `glCopyTexImage1D` defines a one-dimensional texture image with pixels from the current `GL_READ_BUFFER`.
     *
     * When *`internalformat`* is one of the sRGB types, the GL does not automatically convert the source pixels to
     * the sRGB color space. In this case, the `glPixelMap` function can be used to accomplish the conversion.
     *
     * @see http://docs.gl/gl2/glCopyTexImage1D
     * @see http://docs.gl/gl3/glCopyTexImage1D
     * @see http://docs.gl/gl4/glCopyTexImage1D
     * @since 1.1
     * @param int $target
     * @param int $level
     * @param int $internalFormat
     * @param int $x
     * @param int $y
     * @param int $width
     * @param int $border
     * @return void
     */
    public static function glCopyTexImage1D(int $target, int $level, int $internalFormat, int $x, int $y, int $width, int $border): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($internalFormat >= 0 && $internalFormat <= 4_294_967_295, 'Argument $internalFormat overflow: C type GLenum is required');
        assert($x >= \PHP_INT_MIN && $x <= \PHP_INT_MAX, 'Argument $x overflow: C type GLint is required');
        assert($y >= \PHP_INT_MIN && $y <= \PHP_INT_MAX, 'Argument $y overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($border >= \PHP_INT_MIN && $border <= \PHP_INT_MAX, 'Argument $border overflow: C type GLint is required');

        self::$ffi->glCopyTexImage1D($target, $level, $internalFormat, $x, $y, $width, $border);
    }

    /**
     * Defines a two-dimensional texture image, or cube-map texture image with pixels from the current
     * `GL_READ_BUFFER`.
     *
     * The screen-aligned pixel rectangle with lower left corner at (*`x`*, *`y`*) and with a width of width + 2 ⁡
     * border and a height of height + 2 ⁡ border defines the texture array at the mipmap level specified by
     * *`level`*. *`internalformat`* specifies the internal format of the texture array.
     *
     * The pixels in the rectangle are processed exactly as if {@see glCopyPixels} had been called, but the
     * process stops just before final conversion. At this point all pixel component values are clamped to the range
     * 0 1 and then converted to the texture's internal format for storage in the texel array.
     *
     * Pixel ordering is such that lower x and y screen coordinates correspond to lower s and t texture coordinates.
     *
     * If any of the pixels within the specified rectangle of the current `GL_READ_BUFFER` are outside the window
     * associated with the current rendering context, then the values obtained for those pixels are undefined.
     *
     * When *`internalformat`* is one of the sRGB types, the GL does not automatically convert the source pixels to
     * the sRGB color space. In this case, the `glPixelMap` function can be used to accomplish the conversion.
     *
     * @see http://docs.gl/gl2/glCopyTexImage2D
     * @see http://docs.gl/gl3/glCopyTexImage2D
     * @see http://docs.gl/gl4/glCopyTexImage2D
     * @since 1.1
     * @param int $target
     * @param int $level
     * @param int $internalFormat
     * @param int $x
     * @param int $y
     * @param int $width
     * @param int $height
     * @param int $border
     * @return void
     */
    public static function glCopyTexImage2D(int $target, int $level, int $internalFormat, int $x, int $y, int $width, int $height, int $border): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($internalFormat >= 0 && $internalFormat <= 4_294_967_295, 'Argument $internalFormat overflow: C type GLenum is required');
        assert($x >= \PHP_INT_MIN && $x <= \PHP_INT_MAX, 'Argument $x overflow: C type GLint is required');
        assert($y >= \PHP_INT_MIN && $y <= \PHP_INT_MAX, 'Argument $y overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');
        assert($border >= \PHP_INT_MIN && $border <= \PHP_INT_MAX, 'Argument $border overflow: C type GLint is required');

        self::$ffi->glCopyTexImage2D($target, $level, $internalFormat, $x, $y, $width, $height, $border);
    }

    /**
     * Replaces a portion of a one-dimensional texture image with pixels from the current `GL_READ_BUFFER` (rather
     * than from main memory, as is the case for {@see glTexSubImage1D}).
     *
     * The screen-aligned pixel row with left corner at (*`x`*,\\ *`y`*), and with length *`width`* replaces the
     * portion of the texture array with x indices *`xoffset`* through xoffset + width - 1 , inclusive. The
     * destination in the texture array may not include any texels outside the texture array as it was originally
     * specified.
     *
     * The pixels in the row are processed exactly as if {@see glCopyPixels} had been called, but the
     * process stops just before final conversion. At this point, all pixel component values are clamped to the range
     * 0 1 and then converted to the texture's internal format for storage in the texel array.
     *
     * It is not an error to specify a subtexture with zero width, but such a specification has no effect. If any of
     * the pixels within the specified row of the current `GL_READ_BUFFER` are outside the read window associated
     * with the current rendering context, then the values obtained for those pixels are undefined.
     *
     * No change is made to the *internalformat*, *width*, or *border* parameters of the specified texture array or
     * to texel values outside the specified subregion.
     *
     * @see http://docs.gl/gl2/glCopyTexSubImage1D
     * @see http://docs.gl/gl3/glCopyTexSubImage1D
     * @see http://docs.gl/gl4/glCopyTexSubImage1D
     * @since 1.1
     * @param int $target
     * @param int $level
     * @param int $xoffset
     * @param int $x
     * @param int $y
     * @param int $width
     * @return void
     */
    public static function glCopyTexSubImage1D(int $target, int $level, int $xoffset, int $x, int $y, int $width): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($xoffset >= \PHP_INT_MIN && $xoffset <= \PHP_INT_MAX, 'Argument $xoffset overflow: C type GLint is required');
        assert($x >= \PHP_INT_MIN && $x <= \PHP_INT_MAX, 'Argument $x overflow: C type GLint is required');
        assert($y >= \PHP_INT_MIN && $y <= \PHP_INT_MAX, 'Argument $y overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');

        self::$ffi->glCopyTexSubImage1D($target, $level, $xoffset, $x, $y, $width);
    }

    /**
     * Replaces a rectangular portion of a two-dimensional texture image or cube-map texture image with pixels from
     * the current `GL_READ_BUFFER` (rather than from main memory, as is the case for
     * {@see glTexSubImage2D}).
     *
     * The screen-aligned pixel rectangle with lower left corner at x y and with width *`width`* and height
     * *`height`* replaces the portion of the texture array with x indices *`xoffset`* through xoffset + width - 1 ,
     * inclusive, and y indices *`yoffset`* through yoffset + height - 1 , inclusive, at the mipmap level specified
     * by *`level`*.
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
     * No change is made to the *internalformat*, *width*, *height*, or *border* parameters of the specified texture
     * array or to texel values outside the specified subregion.
     *
     * @see http://docs.gl/gl2/glCopyTexSubImage2D
     * @see http://docs.gl/gl3/glCopyTexSubImage2D
     * @see http://docs.gl/gl4/glCopyTexSubImage2D
     * @since 1.1
     * @param int $target
     * @param int $level
     * @param int $xoffset
     * @param int $yoffset
     * @param int $x
     * @param int $y
     * @param int $width
     * @param int $height
     * @return void
     */
    public static function glCopyTexSubImage2D(int $target, int $level, int $xoffset, int $yoffset, int $x, int $y, int $width, int $height): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($xoffset >= \PHP_INT_MIN && $xoffset <= \PHP_INT_MAX, 'Argument $xoffset overflow: C type GLint is required');
        assert($yoffset >= \PHP_INT_MIN && $yoffset <= \PHP_INT_MAX, 'Argument $yoffset overflow: C type GLint is required');
        assert($x >= \PHP_INT_MIN && $x <= \PHP_INT_MAX, 'Argument $x overflow: C type GLint is required');
        assert($y >= \PHP_INT_MIN && $y <= \PHP_INT_MAX, 'Argument $y overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');

        self::$ffi->glCopyTexSubImage2D($target, $level, $xoffset, $yoffset, $x, $y, $width, $height);
    }

    /**
     * Specifies whether front- or back-facing facets are culled (as specified by *mode*) when facet culling is
     * enabled. Facet culling is initially disabled. To enable and disable facet culling, call the
     * {@see glEnable} and {@see glDisable} commands with the argument `GL_CULL_FACE`. Facets include
     * triangles, quadrilaterals, polygons, and rectangles.
     *
     * {@see glFrontFace} specifies which of the clockwise and counterclockwise facets are front-facing and
     * back-facing. See {@see glFrontFace}.
     *
     * @see http://docs.gl/gl2/glCullFace
     * @see http://docs.gl/gl3/glCullFace
     * @see http://docs.gl/gl4/glCullFace
     * @since 1.1
     * @param int $mode
     * @return void
     */
    public static function glCullFace(int $mode): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');

        self::$ffi->glCullFace($mode);
    }

    /**
     * Causes a contiguous group of display lists to be deleted. *`list`* is the name of the first display list to be
     * deleted, and *`range`* is the number of display lists to delete. All display lists d with list &lt;= d &lt;=
     * list + range - 1 are deleted.
     *
     * All storage locations allocated to the specified display lists are freed, and the names are available for
     * reuse at a later time. Names within the range that do not have an associated display list are ignored. If
     * *`range`* is 0, nothing happens.
     *
     * @see http://docs.gl/gl2/glDeleteLists
     * @since 1.1
     * @param int $list
     * @param int $range
     * @return void
     */
    public static function glDeleteLists(int $list, int $range): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($list >= 0 && $list <= 4_294_967_295, 'Argument $list overflow: C type GLuint is required');
        assert($range >= \PHP_INT_MIN && $range <= \PHP_INT_MAX, 'Argument $range overflow: C type GLsizei is required');

        self::$ffi->glDeleteLists($list, $range);
    }

    /**
     * Deletes *`n`* textures named by the elements of the array *`textures`*. After a texture is deleted, it has no
     * contents or dimensionality, and its name is free for reuse (for example by {@see glGenTextures}). If
     * a texture that is currently bound is deleted, the binding reverts to 0 (the default texture).
     *
     *  - `glDeleteTextures` silently ignores 0's and names that do not correspond to existing textures.
     *
     * @see http://docs.gl/gl2/glDeleteTextures
     * @see http://docs.gl/gl3/glDeleteTextures
     * @see http://docs.gl/gl4/glDeleteTextures
     * @since 1.1
     * @param int $n
     * @param \FFI\CData|\FFI\CIntPtr|null $textures
     * @return void
     */
    public static function glDeleteTextures(int $n, ?\FFI\CData $textures): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($n >= \PHP_INT_MIN && $n <= \PHP_INT_MAX, 'Argument $n overflow: C type GLsizei is required');

        self::$ffi->glDeleteTextures($n, $textures);
    }

    /**
     * Specifies the function used to compare each incoming pixel depth value with the depth value present in the
     * depth buffer. The comparison is performed only if depth testing is enabled. (See {@see glEnable} and
     * {@see glDisable} of `GL_DEPTH_TEST`.)
     *
     * *`func`* specifies the conditions under which the pixel will be drawn. The comparison functions are as
     * follows:
     *
     *  - `GL_NEVER` Never passes.
     *
     *  - `GL_LESS` Passes if the incoming depth value is less than the stored depth value.
     *
     *  - `GL_EQUAL` Passes if the incoming depth value is equal to the stored depth value.
     *
     *  - `GL_LEQUAL` Passes if the incoming depth value is less than or equal to the stored depth value.
     *
     *  - `GL_GREATER` Passes if the incoming depth value is greater than the stored depth value.
     *
     *  - `GL_NOTEQUAL` Passes if the incoming depth value is not equal to the stored depth value.
     *
     *  - `GL_GEQUAL` Passes if the incoming depth value is greater than or equal to the stored depth value.
     *
     *  - `GL_ALWAYS` Always passes.
     *
     * The initial value of *`func`* is `GL_LESS`. Initially, depth testing is disabled. If depth testing is disabled
     * or if no depth buffer exists, it is as if the depth test always passes.
     *
     * @see http://docs.gl/gl2/glDepthFunc
     * @see http://docs.gl/gl3/glDepthFunc
     * @see http://docs.gl/gl4/glDepthFunc
     * @since 1.1
     * @param int $func
     * @return void
     */
    public static function glDepthFunc(int $func): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($func >= 0 && $func <= 4_294_967_295, 'Argument $func overflow: C type GLenum is required');

        self::$ffi->glDepthFunc($func);
    }

    /**
     * Specifies whether the depth buffer is enabled for writing. If *`flag`* is `GL_FALSE`, depth buffer writing is
     * disabled. Otherwise, it is enabled. Initially, depth buffer writing is enabled.
     *
     * @see http://docs.gl/gl2/glDepthMask
     * @see http://docs.gl/gl3/glDepthMask
     * @see http://docs.gl/gl4/glDepthMask
     * @since 1.1
     * @param int $flag
     * @return void
     */
    public static function glDepthMask(int $flag): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($flag >= 0 && $flag <= 255, 'Argument $flag overflow: C type GLboolean is required');

        self::$ffi->glDepthMask($flag);
    }

    /**
     * After clipping and division by *w*, depth coordinates range from -1 to 1, corresponding to the near and far
     * clipping planes. `glDepthRange` specifies a linear mapping of the normalized depth coordinates in this range
     * to window depth coordinates. Regardless of the actual depth buffer implementation, window coordinate depth
     * values are treated as though they range from 0 through 1 (like color components). Thus, the values accepted by
     * `glDepthRange` are both clamped to this range before they are accepted.
     *
     * The setting of (0,1) maps the near plane to 0 and the far plane to 1. With this mapping, the depth buffer
     * range is fully utilized.
     *
     * @see http://docs.gl/gl2/glDepthRange
     * @see http://docs.gl/gl3/glDepthRange
     * @see http://docs.gl/gl4/glDepthRange
     * @since 1.1
     * @param float $zNear
     * @param float $zFar
     * @return void
     */
    public static function glDepthRange(float $zNear, float $zFar): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($zNear >= \PHP_FLOAT_MIN && $zNear <= \PHP_FLOAT_MAX, 'Argument $zNear overflow: C type GLclampd is required');
        assert($zFar >= \PHP_FLOAT_MIN && $zFar <= \PHP_FLOAT_MAX, 'Argument $zFar overflow: C type GLclampd is required');

        self::$ffi->glDepthRange($zNear, $zFar);
    }

    /**
     * @see http://docs.gl/gl2/glDisable
     * @see http://docs.gl/gl3/glDisable
     * @since 1.1
     * @param int $cap
     * @return void
     */
    public static function glDisable(int $cap): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($cap >= 0 && $cap <= 4_294_967_295, 'Argument $cap overflow: C type GLenum is required');

        self::$ffi->glDisable($cap);
    }

    /**
     * @see http://docs.gl/gl2/glDisableClientState
     * @since 1.1
     * @param int $array
     * @return void
     */
    public static function glDisableClientState(int $array): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($array >= 0 && $array <= 4_294_967_295, 'Argument $array overflow: C type GLenum is required');

        self::$ffi->glDisableClientState($array);
    }

    /**
     * Specifies multiple geometric primitives with very few subroutine calls. Instead of calling a GL procedure to
     * pass each individual vertex, normal, texture coordinate, edge flag, or color, you can prespecify separate
     * arrays of vertices, normals, and colors and use them to construct a sequence of primitives with a single call
     * to `glDrawArrays`.
     *
     * When `glDrawArrays` is called, it uses *`count`* sequential elements from each enabled array to construct a
     * sequence of geometric primitives, beginning with element *`first`*. *`mode`* specifies what kind of primitives
     * are constructed and how the array elements construct those primitives. If `GL_VERTEX_ARRAY` is not enabled, no
     * geometric primitives are generated.
     *
     * Vertex attributes that are modified by `glDrawArrays` have an unspecified value after `glDrawArrays` returns.
     * For example, if `GL_COLOR_ARRAY` is enabled, the value of the current color is undefined after `glDrawArrays`
     * executes. Attributes that aren't modified remain well defined.
     *
     * @see http://docs.gl/gl2/glDrawArrays
     * @see http://docs.gl/gl3/glDrawArrays
     * @see http://docs.gl/gl4/glDrawArrays
     * @since 1.1
     * @param int $mode
     * @param int $first
     * @param int $count
     * @return void
     */
    public static function glDrawArrays(int $mode, int $first, int $count): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');
        assert($first >= \PHP_INT_MIN && $first <= \PHP_INT_MAX, 'Argument $first overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        self::$ffi->glDrawArrays($mode, $first, $count);
    }

    /**
     * When colors are written to the frame buffer, they are written into the color buffers specified by
     * `glDrawBuffer`. The specifications are as follows:
     *
     *  - `GL_NONE` No color buffers are written.
     *
     *  - `GL_FRONT_LEFT` Only the front left color buffer is written.
     *
     *  - `GL_FRONT_RIGHT` Only the front right color buffer is written.
     *
     *  - `GL_BACK_LEFT` Only the back left color buffer is written.
     *
     *  - `GL_BACK_RIGHT` Only the back right color buffer is written.
     *
     *  - `GL_FRONT` Only the front left and front right color buffers are written. If there is no front right color
     * buffer, only the front left color buffer is written.
     *
     *  - `GL_BACK` Only the back left and back right color buffers are written. If there is no back right color
     * buffer, only the back left color buffer is written.
     *
     *  - `GL_LEFT` Only the front left and back left color buffers are written. If there is no back left color
     * buffer, only the front left color buffer is written.
     *
     *  - `GL_RIGHT` Only the front right and back right color buffers are written. If there is no back right color
     * buffer, only the front right color buffer is written.
     *
     *  - `GL_FRONT_AND_BACK` All the front and back color buffers (front left, front right, back left, back right)
     * are written. If there are no back color buffers, only the front left and front right color buffers are
     * written. If there are no right color buffers, only the front left and back left color buffers are written. If
     * there are no right or back color buffers, only the front left color buffer is written.
     *
     *  - `GL_AUX`*i* Only auxiliary color buffer *i* is written.
     *
     * If more than one color buffer is selected for drawing, then blending or logical operations are computed and
     * applied independently for each color buffer and can produce different results in each buffer.
     *
     * Monoscopic contexts include only *left* buffers, and stereoscopic contexts include both *left* and *right*
     * buffers. Likewise, single-buffered contexts include only *front* buffers, and double-buffered contexts include
     * both *front* and *back* buffers. The context is selected at GL initialization.
     *
     * @see http://docs.gl/gl2/glDrawBuffer
     * @see http://docs.gl/gl3/glDrawBuffer
     * @see http://docs.gl/gl4/glDrawBuffer
     * @since 1.1
     * @param int $mode
     * @return void
     */
    public static function glDrawBuffer(int $mode): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');

        self::$ffi->glDrawBuffer($mode);
    }

    /**
     * Specifies multiple geometric primitives with very few subroutine calls. Instead of calling a GL function to
     * pass each individual vertex, normal, texture coordinate, edge flag, or color, you can prespecify separate
     * arrays of vertices, normals, and so on, and use them to construct a sequence of primitives with a single call
     * to `glDrawElements`.
     *
     * When `glDrawElements` is called, it uses *`count`* sequential elements from an enabled array, starting at
     * *`indices`* to construct a sequence of geometric primitives. *`mode`* specifies what kind of primitives are
     * constructed and how the array elements construct these primitives. If more than one array is enabled, each is
     * used. If `GL_VERTEX_ARRAY` is not enabled, no geometric primitives are constructed.
     *
     * Vertex attributes that are modified by `glDrawElements` have an unspecified value after `glDrawElements`
     * returns. For example, if `GL_COLOR_ARRAY` is enabled, the value of the current color is undefined after
     * `glDrawElements` executes. Attributes that aren't modified maintain their previous values.
     *
     * @see http://docs.gl/gl2/glDrawElements
     * @see http://docs.gl/gl3/glDrawElements
     * @see http://docs.gl/gl4/glDrawElements
     * @since 1.1
     * @param int $mode
     * @param int $count
     * @param int $type
     * @param \FFI\CData|\FFI\CPtr|null $indices
     * @return void
     */
    public static function glDrawElements(int $mode, int $count, int $type, ?\FFI\CData $indices): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');

        self::$ffi->glDrawElements($mode, $count, $type, $indices);
    }

    /**
     * Reads pixel data from memory and writes it into the frame buffer relative to the current raster position,
     * provided that the raster position is valid. Use {@see glRasterPos} or {@see glWindowPos} to
     * set the current raster position; use {@see glGet} with argument `GL_CURRENT_RASTER_POSITION_VALID` to
     * determine if the specified raster position is valid, and {@see glGet} with argument
     * `GL_CURRENT_RASTER_POSITION` to query the raster position.
     *
     * Several parameters define the encoding of pixel data in memory and control the processing of the pixel data
     * before it is placed in the frame buffer. These parameters are set with four commands:
     * {@see glPixelStore}, {@see glPixelTransfer}, {@see glPixelMap}, and
     * {@see glPixelZoom}. This reference page describes the effects on `glDrawPixels` of many, but not all,
     * of the parameters specified by these four commands.
     *
     * Data is read from *`data`* as a sequence of signed or unsigned bytes, signed or unsigned shorts, signed or
     * unsigned integers, or single-precision floating-point values, depending on *`type`*. When *`type`* is one of
     * `GL_UNSIGNED_BYTE`, `GL_BYTE`, `GL_UNSIGNED_SHORT`, `GL_SHORT`, `GL_UNSIGNED_INT`, `GL_INT`, or `GL_FLOAT`
     * each of these bytes, shorts, integers, or floating-point values is interpreted as one color or depth
     * component, or one index, depending on *`format`*. When *`type`* is one of `GL_UNSIGNED_BYTE_3_3_2`,
     * `GL_UNSIGNED_SHORT_5_6_5`, `GL_UNSIGNED_SHORT_4_4_4_4`, `GL_UNSIGNED_SHORT_5_5_5_1`,
     * `GL_UNSIGNED_INT_8_8_8_8`, or `GL_UNSIGNED_INT_10_10_10_2`, each unsigned value is interpreted as containing
     * all the components for a single pixel, with the color components arranged according to *`format`*. When
     * *`type`* is one of `GL_UNSIGNED_BYTE_2_3_3_REV`, `GL_UNSIGNED_SHORT_5_6_5_REV`,
     * `GL_UNSIGNED_SHORT_4_4_4_4_REV`, `GL_UNSIGNED_SHORT_1_5_5_5_REV`, `GL_UNSIGNED_INT_8_8_8_8_REV`, or
     * `GL_UNSIGNED_INT_2_10_10_10_REV`, each unsigned value is interpreted as containing all color components,
     * specified by *`format`*, for a single pixel in a reversed order. Indices are always treated individually.
     * Color components are treated as groups of one, two, three, or four values, again based on *`format`*. Both
     * individual indices and groups of components are referred to as pixels. If *`type`* is `GL_BITMAP`, the data
     * must be unsigned bytes, and *`format`* must be either `GL_COLOR_INDEX` or `GL_STENCIL_INDEX`. Each unsigned
     * byte is treated as eight 1-bit pixels, with bit ordering determined by `GL_UNPACK_LSB_FIRST` (see
     * {@see glPixelStore}).
     *
     * width × height pixels are read from memory, starting at location *`data`*. By default, these pixels are taken
     * from adjacent memory locations, except that after all *`width`* pixels are read, the read pointer is advanced
     * to the next four-byte boundary. The four-byte row alignment is specified by {@see glPixelStore} with
     * argument `GL_UNPACK_ALIGNMENT`, and it can be set to one, two, four, or eight bytes. Other pixel store
     * parameters specify different read pointer advancements, both before the first pixel is read and after all
     * *`width`* pixels are read. See the {@see glPixelStore} reference page for details on these options.
     *
     * If a non-zero named buffer object is bound to the `GL_PIXEL_UNPACK_BUFFER` target (see
     * {@see glBindBuffer}) while a block of pixels is specified, *`data`* is treated as a byte offset into
     * the buffer object's data store.
     *
     * The width × height pixels that are read from memory are each operated on in the same way, based on the values
     * of several parameters specified by {@see glPixelTransfer} and {@see glPixelMap}. The
     * details of these operations, as well as the target buffer into which the pixels are drawn, are specific to the
     * format of the pixels, as specified by *`format`*. *`format`* can assume one of 13 symbolic values:
     *
     *  - `GL_COLOR_INDEX` Each pixel is a single value, a color index. It is converted to fixed-point format, with
     * an unspecified number of bits to the right of the binary point, regardless of the memory data type.
     * Floating-point values convert to true fixed-point values. Signed and unsigned integer data is converted with
     * all fraction bits set to 0. Bitmap data convert to either 0 or 1.
     *
     * Each fixed-point index is then shifted left by `GL_INDEX_SHIFT` bits and added to `GL_INDEX_OFFSET`. If
     * `GL_INDEX_SHIFT` is negative, the shift is to the right. In either case, zero bits fill otherwise unspecified
     * bit locations in the result.
     *
     * If the GL is in RGBA mode, the resulting index is converted to an RGBA pixel with the help of the
     * `GL_PIXEL_MAP_I_TO_R`, `GL_PIXEL_MAP_I_TO_G`, `GL_PIXEL_MAP_I_TO_B`, and `GL_PIXEL_MAP_I_TO_A` tables. If the
     * GL is in color index mode, and if `GL_MAP_COLOR` is true, the index is replaced with the value that it
     * references in lookup table `GL_PIXEL_MAP_I_TO_I`. Whether the lookup replacement of the index is done or not,
     * the integer part of the index is then ANDed with 2 b - 1 , where b is the number of bits in a color index
     * buffer.
     *
     * The GL then converts the resulting indices or RGBA colors to fragments by attaching the current raster
     * position *z* coordinate and texture coordinates to each pixel, then assigning x and y window coordinates to
     * the nth fragment such that
     *
     * x n = x r + n % width
     *
     * y n = y r + n width
     *
     * where x r y r is the current raster position. These pixel fragments are then treated just like the fragments
     * generated by rasterizing points, lines, or polygons. Texture mapping, fog, and all the fragment operations are
     * applied before the fragments are written to the frame buffer.
     *
     *  - `GL_STENCIL_INDEX` Each pixel is a single value, a stencil index. It is converted to fixed-point format,
     * with an unspecified number of bits to the right of the binary point, regardless of the memory data type.
     * Floating-point values convert to true fixed-point values. Signed and unsigned integer data is converted with
     * all fraction bits set to 0. Bitmap data convert to either 0 or 1.
     *
     * Each fixed-point index is then shifted left by `GL_INDEX_SHIFT` bits, and added to `GL_INDEX_OFFSET`. If
     * `GL_INDEX_SHIFT` is negative, the shift is to the right. In either case, zero bits fill otherwise unspecified
     * bit locations in the result. If `GL_MAP_STENCIL` is true, the index is replaced with the value that it
     * references in lookup table `GL_PIXEL_MAP_S_TO_S`. Whether the lookup replacement of the index is done or not,
     * the integer part of the index is then ANDed with 2 b - 1 , where b is the number of bits in the stencil
     * buffer. The resulting stencil indices are then written to the stencil buffer such that the nth index is
     * written to location
     *
     * x n = x r + n % width
     *
     * y n = y r + n width
     *
     * where x r y r is the current raster position. Only the pixel ownership test, the scissor test, and the stencil
     * writemask affect these write operations.
     *
     *  - `GL_DEPTH_COMPONENT` Each pixel is a single-depth component. Floating-point data is converted directly to
     * an internal floating-point format with unspecified precision. Signed integer data is mapped linearly to the
     * internal floating-point format such that the most positive representable integer value maps to 1.0, and the
     * most negative representable value maps to -1.0 . Unsigned integer data is mapped similarly: the largest
     * integer value maps to 1.0, and 0 maps to 0.0. The resulting floating-point depth value is then multiplied by
     * `GL_DEPTH_SCALE` and added to `GL_DEPTH_BIAS`. The result is clamped to the range 0 1 .
     *
     * The GL then converts the resulting depth components to fragments by attaching the current raster position
     * color or color index and texture coordinates to each pixel, then assigning x and y window coordinates to the
     * nth fragment such that
     *
     * x n = x r + n % width
     *
     * y n = y r + n width
     *
     * where x r y r is the current raster position. These pixel fragments are then treated just like the fragments
     * generated by rasterizing points, lines, or polygons. Texture mapping, fog, and all the fragment operations are
     * applied before the fragments are written to the frame buffer.
     *
     *  - `GL_RGBA``GL_BGRA` Each pixel is a four-component group: For `GL_RGBA`, the red component is first,
     * followed by green, followed by blue, followed by alpha; for `GL_BGRA` the order is blue, green, red and then
     * alpha. Floating-point values are converted directly to an internal floating-point format with unspecified
     * precision. Signed integer values are mapped linearly to the internal floating-point format such that the most
     * positive representable integer value maps to 1.0, and the most negative representable value maps to -1.0 .
     * (Note that this mapping does not convert 0 precisely to 0.0.) Unsigned integer data is mapped similarly: The
     * largest integer value maps to 1.0, and 0 maps to 0.0. The resulting floating-point color values are then
     * multiplied by `GL_c_SCALE` and added to `GL_c_BIAS`, where *c* is RED, GREEN, BLUE, and ALPHA for the
     * respective color components. The results are clamped to the range 0 1 .
     *
     * If `GL_MAP_COLOR` is true, each color component is scaled by the size of lookup table `GL_PIXEL_MAP_c_TO_c`,
     * then replaced by the value that it references in that table. *c* is R, G, B, or A respectively.
     *
     * The GL then converts the resulting RGBA colors to fragments by attaching the current raster position *z*
     * coordinate and texture coordinates to each pixel, then assigning x and y window coordinates to the nth
     * fragment such that
     *
     * x n = x r + n % width
     *
     * y n = y r + n width
     *
     * where x r y r is the current raster position. These pixel fragments are then treated just like the fragments
     * generated by rasterizing points, lines, or polygons. Texture mapping, fog, and all the fragment operations are
     * applied before the fragments are written to the frame buffer.
     *
     *  - `GL_RED` Each pixel is a single red component. This component is converted to the internal floating-point
     * format in the same way the red component of an RGBA pixel is. It is then converted to an RGBA pixel with green
     * and blue set to 0, and alpha set to 1. After this conversion, the pixel is treated as if it had been read as
     * an RGBA pixel.
     *
     *  - `GL_GREEN` Each pixel is a single green component. This component is converted to the internal
     * floating-point format in the same way the green component of an RGBA pixel is. It is then converted to an RGBA
     * pixel with red and blue set to 0, and alpha set to 1. After this conversion, the pixel is treated as if it had
     * been read as an RGBA pixel.
     *
     *  - `GL_BLUE` Each pixel is a single blue component. This component is converted to the internal floating-point
     * format in the same way the blue component of an RGBA pixel is. It is then converted to an RGBA pixel with red
     * and green set to 0, and alpha set to 1. After this conversion, the pixel is treated as if it had been read as
     * an RGBA pixel.
     *
     *  - `GL_ALPHA` Each pixel is a single alpha component. This component is converted to the internal
     * floating-point format in the same way the alpha component of an RGBA pixel is. It is then converted to an RGBA
     * pixel with red, green, and blue set to 0. After this conversion, the pixel is treated as if it had been read
     * as an RGBA pixel.
     *
     *  - `GL_RGB``GL_BGR` Each pixel is a three-component group: red first, followed by green, followed by blue; for
     * `GL_BGR`, the first component is blue, followed by green and then red. Each component is converted to the
     * internal floating-point format in the same way the red, green, and blue components of an RGBA pixel are. The
     * color triple is converted to an RGBA pixel with alpha set to 1. After this conversion, the pixel is treated as
     * if it had been read as an RGBA pixel.
     *
     *  - `GL_LUMINANCE` Each pixel is a single luminance component. This component is converted to the internal
     * floating-point format in the same way the red component of an RGBA pixel is. It is then converted to an RGBA
     * pixel with red, green, and blue set to the converted luminance value, and alpha set to 1. After this
     * conversion, the pixel is treated as if it had been read as an RGBA pixel.
     *
     *  - `GL_LUMINANCE_ALPHA` Each pixel is a two-component group: luminance first, followed by alpha. The two
     * components are converted to the internal floating-point format in the same way the red component of an RGBA
     * pixel is. They are then converted to an RGBA pixel with red, green, and blue set to the converted luminance
     * value, and alpha set to the converted alpha value. After this conversion, the pixel is treated as if it had
     * been read as an RGBA pixel.
     *
     * The following table summarizes the meaning of the valid constants for the *type* parameter:
     *
     * **Type** **Corresponding Type** `GL_UNSIGNED_BYTE` unsigned 8-bit integer `GL_BYTE` signed 8-bit integer
     * `GL_BITMAP` single bits in unsigned 8-bit integers `GL_UNSIGNED_SHORT` unsigned 16-bit integer `GL_SHORT`
     * signed 16-bit integer `GL_UNSIGNED_INT` unsigned 32-bit integer `GL_INT` 32-bit integer `GL_FLOAT`
     * single-precision floating-point `GL_UNSIGNED_BYTE_3_3_2` unsigned 8-bit integer `GL_UNSIGNED_BYTE_2_3_3_REV`
     * unsigned 8-bit integer with reversed component ordering `GL_UNSIGNED_SHORT_5_6_5` unsigned 16-bit integer
     * `GL_UNSIGNED_SHORT_5_6_5_REV` unsigned 16-bit integer with reversed component ordering
     * `GL_UNSIGNED_SHORT_4_4_4_4` unsigned 16-bit integer `GL_UNSIGNED_SHORT_4_4_4_4_REV` unsigned 16-bit integer
     * with reversed component ordering `GL_UNSIGNED_SHORT_5_5_5_1` unsigned 16-bit integer
     * `GL_UNSIGNED_SHORT_1_5_5_5_REV` unsigned 16-bit integer with reversed component ordering
     * `GL_UNSIGNED_INT_8_8_8_8` unsigned 32-bit integer `GL_UNSIGNED_INT_8_8_8_8_REV` unsigned 32-bit integer with
     * reversed component ordering `GL_UNSIGNED_INT_10_10_10_2` unsigned 32-bit integer
     * `GL_UNSIGNED_INT_2_10_10_10_REV` unsigned 32-bit integer with reversed component ordering
     *
     * The rasterization described so far assumes pixel zoom factors of 1. If {@see glPixelZoom} is used to
     * change the x and y pixel zoom factors, pixels are converted to fragments as follows. If x r y r is the current
     * raster position, and a given pixel is in the nth column and mth row of the pixel rectangle, then fragments are
     * generated for pixels whose centers are in the rectangle with corners at
     *
     * x r + zoom x ⁢ n y r + zoom y ⁢ m
     *
     * x r + zoom x ⁡ n + 1 y r + zoom y ⁡ m + 1
     *
     * where zoom x is the value of `GL_ZOOM_X` and zoom y is the value of `GL_ZOOM_Y`.
     *
     * @see http://docs.gl/gl2/glDrawPixels
     * @since 1.1
     * @param int $width
     * @param int $height
     * @param int $format
     * @param int $type
     * @param \FFI\CData|\FFI\CPtr|null $pixels
     * @return void
     */
    public static function glDrawPixels(int $width, int $height, int $format, int $type, ?\FFI\CData $pixels): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');
        assert($format >= 0 && $format <= 4_294_967_295, 'Argument $format overflow: C type GLenum is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');

        self::$ffi->glDrawPixels($width, $height, $format, $type, $pixels);
    }

    /**
     * Each vertex of a polygon, separate triangle, or separate quadrilateral specified between a
     * {@see glBegin}/{@see glEnd} pair is marked as the start of either a boundary or nonboundary edge. If the
     * current edge flag is true when the vertex is specified, the vertex is marked as the start of a boundary edge.
     * Otherwise, the vertex is marked as the start of a nonboundary edge. `glEdgeFlag` sets the edge flag bit to
     * `GL_TRUE` if *`flag`* is `GL_TRUE` and to `GL_FALSE` otherwise.
     *
     * The vertices of connected triangles and connected quadrilaterals are always marked as boundary, regardless of
     * the value of the edge flag.
     *
     * Boundary and nonboundary edge flags on vertices are significant only if `GL_POLYGON_MODE` is set to `GL_POINT`
     * or `GL_LINE`. See {@see glPolygonMode}.
     *
     * @see http://docs.gl/gl2/glEdgeFlag
     * @since 1.1
     * @param int $flag
     * @return void
     */
    public static function glEdgeFlag(int $flag): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($flag >= 0 && $flag <= 255, 'Argument $flag overflow: C type GLboolean is required');

        self::$ffi->glEdgeFlag($flag);
    }

    /**
     * Specifies the location and data format of an array of boolean edge flags to use when rendering. *`stride`*
     * specifies the byte stride from one edge flag to the next, allowing vertices and attributes to be packed into a
     * single array or stored in separate arrays.
     *
     * If a non-zero named buffer object is bound to the `GL_ARRAY_BUFFER` target (see {@see glBindBuffer})
     * while an edge flag array is specified, *`pointer`* is treated as a byte offset into the buffer object's data
     * store. Also, the buffer object binding (`GL_ARRAY_BUFFER_BINDING`) is saved as edge flag vertex array
     * client-side state (`GL_EDGE_FLAG_ARRAY_BUFFER_BINDING`).
     *
     * When an edge flag array is specified, *`stride`* and *`pointer`* are saved as client-side state, in addition
     * to the current vertex array buffer object binding.
     *
     * To enable and disable the edge flag array, call {@see glEnableClientState} and
     * {@see glDisableClientState} with the argument `GL_EDGE_FLAG_ARRAY`. If enabled, the edge flag
     * array is used when {@see glDrawArrays}, {@see glMultiDrawArrays},
     * {@see glDrawElements}, {@see glMultiDrawElements},
     * {@see glDrawRangeElements}, or {@see glArrayElement} is called.
     *
     * @see http://docs.gl/gl2/glEdgeFlagPointer
     * @since 1.1
     * @param int $stride
     * @param \FFI\CData|\FFI\CPtr|null $pointer
     * @return void
     */
    public static function glEdgeFlagPointer(int $stride, ?\FFI\CData $pointer): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($stride >= \PHP_INT_MIN && $stride <= \PHP_INT_MAX, 'Argument $stride overflow: C type GLsizei is required');

        self::$ffi->glEdgeFlagPointer($stride, $pointer);
    }

    /**
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $flag
     * @return void
     */
    public static function glEdgeFlagv(?\FFI\CData $flag): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glEdgeFlagv($flag);
    }

    /**
     * And {@see glDisable} enable and disable various capabilities. Use {@see glIsEnabled} or
     * {@see glGet} to determine the current setting of any capability. The initial value for each capability with
     * the exception of `GL_DITHER` and `GL_MULTISAMPLE` is `GL_FALSE`. The initial value for `GL_DITHER` and
     * `GL_MULTISAMPLE` is `GL_TRUE`.
     *
     * Both `glEnable` and {@see glDisable} take a single argument, *`cap`*, which can assume one of the
     * following values:
     *
     *  - `GL_ALPHA_TEST` If enabled, do alpha testing. See {@see glAlphaFunc}.
     *
     *  - `GL_AUTO_NORMAL` If enabled, generate normal vectors when either `GL_MAP2_VERTEX_3` or `GL_MAP2_VERTEX_4`
     * is used to generate vertices. See {@see glMap2}.
     *
     *  - `GL_BLEND` If enabled, blend the computed fragment color values with the values in the color buffers. See
     * {@see glBlendFunc}.
     *
     *  - `GL_CLIP_PLANE`*i* If enabled, clip geometry against user-defined clipping plane *i*. See
     * {@see glClipPlane}.
     *
     *  - `GL_COLOR_LOGIC_OP` If enabled, apply the currently selected logical operation to the computed fragment
     * color and color buffer values. See {@see glLogicOp}.
     *
     *  - `GL_COLOR_MATERIAL` If enabled, have one or more material parameters track the current color. See
     * {@see glColorMaterial}.
     *
     *  - `GL_COLOR_SUM` If enabled and no fragment shader is active, add the secondary color value to the computed
     * fragment color. See {@see glSecondaryColor}.
     *
     *  - `GL_COLOR_TABLE` If enabled, perform a color table lookup on the incoming RGBA color values. See
     * {@see glColorTable}.
     *
     *  - `GL_CONVOLUTION_1D` If enabled, perform a 1D convolution operation on incoming RGBA color values. See
     * {@see glConvolutionFilter1D}.
     *
     *  - `GL_CONVOLUTION_2D` If enabled, perform a 2D convolution operation on incoming RGBA color values. See
     * {@see glConvolutionFilter2D}.
     *
     *  - `GL_CULL_FACE` If enabled, cull polygons based on their winding in window coordinates. See
     * {@see glCullFace}.
     *
     *  - `GL_DEPTH_TEST` If enabled, do depth comparisons and update the depth buffer. Note that even if the depth
     * buffer exists and the depth mask is non-zero, the depth buffer is not updated if the depth test is disabled.
     * See {@see glDepthFunc} and {@see glDepthRange}.
     *
     *  - `GL_DITHER` If enabled, dither color components or indices before they are written to the color buffer.
     *
     *  - `GL_FOG` If enabled and no fragment shader is active, blend a fog color into the post-texturing color. See
     * {@see glFog}.
     *
     *  - `GL_HISTOGRAM` If enabled, histogram incoming RGBA color values. See {@see glHistogram}.
     *
     *  - `GL_INDEX_LOGIC_OP` If enabled, apply the currently selected logical operation to the incoming index and
     * color buffer indices. See {@see glLogicOp}.
     *
     *  - `GL_LIGHT`*i* If enabled, include light *i* in the evaluation of the lighting equation. See
     * {@see glLightModel} and {@see glLight}.
     *
     *  - `GL_LIGHTING` If enabled and no vertex shader is active, use the current lighting parameters to compute the
     * vertex color or index. Otherwise, simply associate the current color or index with each vertex. See
     * {@see glMaterial}, {@see glLightModel}, and {@see glLight}.
     *
     *  - `GL_LINE_SMOOTH` If enabled, draw lines with correct filtering. Otherwise, draw aliased lines. See
     * {@see glLineWidth}.
     *
     *  - `GL_LINE_STIPPLE` If enabled, use the current line stipple pattern when drawing lines. See
     * {@see glLineStipple}.
     *
     *  - `GL_MAP1_COLOR_4` If enabled, calls to {@see glEvalCoord1}, {@see glEvalMesh1}, and
     * {@see glEvalPoint1} generate RGBA values. See {@see glMap1}.
     *
     *  - `GL_MAP1_INDEX` If enabled, calls to {@see glEvalCoord1}, {@see glEvalMesh1}, and
     * {@see glEvalPoint1} generate color indices. See {@see glMap1}.
     *
     *  - `GL_MAP1_NORMAL` If enabled, calls to {@see glEvalCoord1}, {@see glEvalMesh1}, and
     * {@see glEvalPoint1} generate normals. See {@see glMap1}.
     *
     *  - `GL_MAP1_TEXTURE_COORD_1` If enabled, calls to {@see glEvalCoord1}, {@see glEvalMesh1},
     * and {@see glEvalPoint1} generate *s* texture coordinates. See {@see glMap1}.
     *
     *  - `GL_MAP1_TEXTURE_COORD_2` If enabled, calls to {@see glEvalCoord1}, {@see glEvalMesh1},
     * and {@see glEvalPoint1} generate *s* and *t* texture coordinates. See {@see glMap1}.
     *
     *  - `GL_MAP1_TEXTURE_COORD_3` If enabled, calls to {@see glEvalCoord1}, {@see glEvalMesh1},
     * and {@see glEvalPoint1} generate *s*, *t*, and *r* texture coordinates. See {@see glMap1}.
     *
     *  - `GL_MAP1_TEXTURE_COORD_4` If enabled, calls to {@see glEvalCoord1}, {@see glEvalMesh1},
     * and {@see glEvalPoint1} generate *s*, *t*, *r*, and *q* texture coordinates. See {@see glMap1}.
     *
     *  - `GL_MAP1_VERTEX_3` If enabled, calls to {@see glEvalCoord1}, {@see glEvalMesh1}, and
     * {@see glEvalPoint1} generate *x*, *y*, and *z* vertex coordinates. See {@see glMap1}.
     *
     *  - `GL_MAP1_VERTEX_4` If enabled, calls to {@see glEvalCoord1}, {@see glEvalMesh1}, and
     * {@see glEvalPoint1} generate homogeneous *x*, *y*, *z*, and *w* vertex coordinates. See
     * {@see glMap1}.
     *
     *  - `GL_MAP2_COLOR_4` If enabled, calls to {@see glEvalCoord2}, {@see glEvalMesh2}, and
     * {@see glEvalPoint2} generate RGBA values. See {@see glMap2}.
     *
     *  - `GL_MAP2_INDEX` If enabled, calls to {@see glEvalCoord2}, {@see glEvalMesh2}, and
     * {@see glEvalPoint2} generate color indices. See {@see glMap2}.
     *
     *  - `GL_MAP2_NORMAL` If enabled, calls to {@see glEvalCoord2}, {@see glEvalMesh2}, and
     * {@see glEvalPoint2} generate normals. See {@see glMap2}.
     *
     *  - `GL_MAP2_TEXTURE_COORD_1` If enabled, calls to {@see glEvalCoord2}, {@see glEvalMesh2},
     * and {@see glEvalPoint2} generate *s* texture coordinates. See {@see glMap2}.
     *
     *  - `GL_MAP2_TEXTURE_COORD_2` If enabled, calls to {@see glEvalCoord2}, {@see glEvalMesh2},
     * and {@see glEvalPoint2} generate *s* and *t* texture coordinates. See {@see glMap2}.
     *
     *  - `GL_MAP2_TEXTURE_COORD_3` If enabled, calls to {@see glEvalCoord2}, {@see glEvalMesh2},
     * and {@see glEvalPoint2} generate *s*, *t*, and *r* texture coordinates. See {@see glMap2}.
     *
     *  - `GL_MAP2_TEXTURE_COORD_4` If enabled, calls to {@see glEvalCoord2}, {@see glEvalMesh2},
     * and {@see glEvalPoint2} generate *s*, *t*, *r*, and *q* texture coordinates. See {@see glMap2}.
     *
     *  - `GL_MAP2_VERTEX_3` If enabled, calls to {@see glEvalCoord2}, {@see glEvalMesh2}, and
     * {@see glEvalPoint2} generate *x*, *y*, and *z* vertex coordinates. See {@see glMap2}.
     *
     *  - `GL_MAP2_VERTEX_4` If enabled, calls to {@see glEvalCoord2}, {@see glEvalMesh2}, and
     * {@see glEvalPoint2} generate homogeneous *x*, *y*, *z*, and *w* vertex coordinates. See
     * {@see glMap2}.
     *
     *  - `GL_MINMAX` If enabled, compute the minimum and maximum values of incoming RGBA color values. See
     * {@see glMinmax}.
     *
     *  - `GL_MULTISAMPLE` If enabled, use multiple fragment samples in computing the final color of a pixel. See
     * {@see glSampleCoverage}.
     *
     *  - `GL_NORMALIZE` If enabled and no vertex shader is active, normal vectors are normalized to unit length
     * after transformation and before lighting. This method is generally less efficient than `GL_RESCALE_NORMAL`.
     * See {@see glNormal} and {@see glNormalPointer}.
     *
     *  - `GL_POINT_SMOOTH` If enabled, draw points with proper filtering. Otherwise, draw aliased points. See
     * {@see glPointSize}.
     *
     *  - `GL_POINT_SPRITE` If enabled, calculate texture coordinates for points based on texture environment and
     * point parameter settings. Otherwise texture coordinates are constant across points.
     *
     *  - `GL_POLYGON_OFFSET_FILL` If enabled, and if the polygon is rendered in `GL_FILL` mode, an offset is added
     * to depth values of a polygon's fragments before the depth comparison is performed. See
     * {@see glPolygonOffset}.
     *
     *  - `GL_POLYGON_OFFSET_LINE` If enabled, and if the polygon is rendered in `GL_LINE` mode, an offset is added
     * to depth values of a polygon's fragments before the depth comparison is performed. See
     * {@see glPolygonOffset}.
     *
     *  - `GL_POLYGON_OFFSET_POINT` If enabled, an offset is added to depth values of a polygon's fragments before
     * the depth comparison is performed, if the polygon is rendered in `GL_POINT` mode. See
     * {@see glPolygonOffset}.
     *
     *  - `GL_POLYGON_SMOOTH` If enabled, draw polygons with proper filtering. Otherwise, draw aliased polygons. For
     * correct antialiased polygons, an alpha buffer is needed and the polygons must be sorted front to back.
     *
     *  - `GL_POLYGON_STIPPLE` If enabled, use the current polygon stipple pattern when rendering polygons. See
     * {@see glPolygonStipple}.
     *
     *  - `GL_POST_COLOR_MATRIX_COLOR_TABLE` If enabled, perform a color table lookup on RGBA color values after
     * color matrix transformation. See {@see glColorTable}.
     *
     *  - `GL_POST_CONVOLUTION_COLOR_TABLE` If enabled, perform a color table lookup on RGBA color values after
     * convolution. See {@see glColorTable}.
     *
     *  - `GL_RESCALE_NORMAL` If enabled and no vertex shader is active, normal vectors are scaled after
     * transformation and before lighting by a factor computed from the modelview matrix. If the modelview matrix
     * scales space uniformly, this has the effect of restoring the transformed normal to unit length. This method is
     * generally more efficient than `GL_NORMALIZE`. See {@see glNormal} and {@see glNormalPointer}.
     *
     *  - `GL_SAMPLE_ALPHA_TO_COVERAGE` If enabled, compute a temporary coverage value where each bit is determined
     * by the alpha value at the corresponding sample location. The temporary coverage value is then ANDed with the
     * fragment coverage value.
     *
     *  - `GL_SAMPLE_ALPHA_TO_ONE` If enabled, each sample alpha value is replaced by the maximum representable alpha
     * value.
     *
     *  - `GL_SAMPLE_COVERAGE` If enabled, the fragment's coverage is ANDed with the temporary coverage value. If
     * `GL_SAMPLE_COVERAGE_INVERT` is set to `GL_TRUE`, invert the coverage value. See
     * {@see glSampleCoverage}.
     *
     *  - `GL_SEPARABLE_2D` If enabled, perform a two-dimensional convolution operation using a separable convolution
     * filter on incoming RGBA color values. See {@see glSeparableFilter2D}.
     *
     *  - `GL_SCISSOR_TEST` If enabled, discard fragments that are outside the scissor rectangle. See
     * {@see glScissor}.
     *
     *  - `GL_STENCIL_TEST` If enabled, do stencil testing and update the stencil buffer. See
     * {@see glStencilFunc} and {@see glStencilOp}.
     *
     *  - `GL_TEXTURE_1D` If enabled and no fragment shader is active, one-dimensional texturing is performed (unless
     * two- or three-dimensional or cube-mapped texturing is also enabled). See {@see glTexImage1D}.
     *
     *  - `GL_TEXTURE_2D` If enabled and no fragment shader is active, two-dimensional texturing is performed (unless
     * three-dimensional or cube-mapped texturing is also enabled). See {@see glTexImage2D}.
     *
     *  - `GL_TEXTURE_3D` If enabled and no fragment shader is active, three-dimensional texturing is performed
     * (unless cube-mapped texturing is also enabled). See {@see glTexImage3D}.
     *
     *  - `GL_TEXTURE_CUBE_MAP` If enabled and no fragment shader is active, cube-mapped texturing is performed. See
     * {@see glTexImage2D}.
     *
     *  - `GL_TEXTURE_GEN_Q` If enabled and no vertex shader is active, the *q* texture coordinate is computed using
     * the texture generation function defined with {@see glTexGen}. Otherwise, the current *q* texture
     * coordinate is used. See {@see glTexGen}.
     *
     *  - `GL_TEXTURE_GEN_R` If enabled and no vertex shader is active, the *r* texture coordinate is computed using
     * the texture generation function defined with {@see glTexGen}. Otherwise, the current *r* texture
     * coordinate is used. See {@see glTexGen}.
     *
     *  - `GL_TEXTURE_GEN_S` If enabled and no vertex shader is active, the *s* texture coordinate is computed using
     * the texture generation function defined with {@see glTexGen}. Otherwise, the current *s* texture
     * coordinate is used. See {@see glTexGen}.
     *
     *  - `GL_TEXTURE_GEN_T` If enabled and no vertex shader is active, the *t* texture coordinate is computed using
     * the texture generation function defined with {@see glTexGen}. Otherwise, the current *t* texture
     * coordinate is used. See {@see glTexGen}.
     *
     *  - `GL_VERTEX_PROGRAM_POINT_SIZE` If enabled and a vertex shader is active, then the derived point size is
     * taken from the (potentially clipped) shader builtin `gl_PointSize` and clamped to the implementation-dependent
     * point size range.
     *
     *  - `GL_VERTEX_PROGRAM_TWO_SIDE` If enabled and a vertex shader is active, it specifies that the GL will choose
     * between front and back colors based on the polygon's face direction of which the vertex being shaded is a
     * part. It has no effect on points or lines.
     *
     * @see http://docs.gl/gl2/glEnable
     * @see http://docs.gl/gl3/glEnable
     * @see http://docs.gl/gl4/glEnable
     * @since 1.1
     * @param int $cap
     * @return void
     */
    public static function glEnable(int $cap): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($cap >= 0 && $cap <= 4_294_967_295, 'Argument $cap overflow: C type GLenum is required');

        self::$ffi->glEnable($cap);
    }

    /**
     * And {@see glDisableClientState} enable or disable individual client-side capabilities. By
     * default, all client-side capabilities are disabled. Both `glEnableClientState` and
     * {@see glDisableClientState} take a single argument, *`cap`*, which can assume one of the
     * following values:
     *
     *  - `GL_COLOR_ARRAY` If enabled, the color array is enabled for writing and used during rendering when
     * {@see glArrayElement}, {@see glDrawArrays}, {@see glDrawElements},
     * {@see glDrawRangeElements} {@see glMultiDrawArrays}, or
     * {@see glMultiDrawElements} is called. See {@see glColorPointer}.
     *
     *  - `GL_EDGE_FLAG_ARRAY` If enabled, the edge flag array is enabled for writing and used during rendering when
     * {@see glArrayElement}, {@see glDrawArrays}, {@see glDrawElements},
     * {@see glDrawRangeElements} {@see glMultiDrawArrays}, or
     * {@see glMultiDrawElements} is called. See {@see glEdgeFlagPointer}.
     *
     *  - `GL_FOG_COORD_ARRAY` If enabled, the fog coordinate array is enabled for writing and used during rendering
     * when {@see glArrayElement}, {@see glDrawArrays}, {@see glDrawElements},
     * {@see glDrawRangeElements} {@see glMultiDrawArrays}, or
     * {@see glMultiDrawElements} is called. See {@see glFogCoordPointer}.
     *
     *  - `GL_INDEX_ARRAY` If enabled, the index array is enabled for writing and used during rendering when
     * {@see glArrayElement}, {@see glDrawArrays}, {@see glDrawElements},
     * {@see glDrawRangeElements} {@see glMultiDrawArrays}, or
     * {@see glMultiDrawElements} is called. See {@see glIndexPointer}.
     *
     *  - `GL_NORMAL_ARRAY` If enabled, the normal array is enabled for writing and used during rendering when
     * {@see glArrayElement}, {@see glDrawArrays}, {@see glDrawElements},
     * {@see glDrawRangeElements} {@see glMultiDrawArrays}, or
     * {@see glMultiDrawElements} is called. See {@see glNormalPointer}.
     *
     *  - `GL_SECONDARY_COLOR_ARRAY` If enabled, the secondary color array is enabled for writing and used during
     * rendering when {@see glArrayElement}, {@see glDrawArrays},
     * {@see glDrawElements}, {@see glDrawRangeElements}
     * {@see glMultiDrawArrays}, or {@see glMultiDrawElements} is called. See
     * {@see glColorPointer}.
     *
     *  - `GL_TEXTURE_COORD_ARRAY` If enabled, the texture coordinate array is enabled for writing and used during
     * rendering when {@see glArrayElement}, {@see glDrawArrays},
     * {@see glDrawElements}, {@see glDrawRangeElements}
     * {@see glMultiDrawArrays}, or {@see glMultiDrawElements} is called. See
     * {@see glTexCoordPointer}.
     *
     *  - `GL_VERTEX_ARRAY` If enabled, the vertex array is enabled for writing and used during rendering when
     * {@see glArrayElement}, {@see glDrawArrays}, {@see glDrawElements},
     * {@see glDrawRangeElements} {@see glMultiDrawArrays}, or
     * {@see glMultiDrawElements} is called. See {@see glVertexPointer}.
     *
     * @see http://docs.gl/gl2/glEnableClientState
     * @since 1.1
     * @param int $array
     * @return void
     */
    public static function glEnableClientState(int $array): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($array >= 0 && $array <= 4_294_967_295, 'Argument $array overflow: C type GLenum is required');

        self::$ffi->glEnableClientState($array);
    }

    /**
     * @see http://docs.gl/gl2/glEnd
     * @since 1.1
     * @return void
     */
    public static function glEnd(): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glEnd();
    }

    /**
     * @see http://docs.gl/gl2/glEndList
     * @since 1.1
     * @return void
     */
    public static function glEndList(): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glEndList();
    }

    /**
     * Evaluates enabled one-dimensional maps at argument *`u`*. `glEvalCoord2` does the same for two-dimensional
     * maps using two domain values, *`u`* and *`v`*. To define a map, call {@see glMap1} and {@see glMap2}; to
     * enable and disable it, call {@see glEnable} and {@see glDisable}.
     *
     * When one of the `glEvalCoord` commands is issued, all currently enabled maps of the indicated dimension are
     * evaluated. Then, for each enabled map, it is as if the corresponding GL command had been issued with the
     * computed value. That is, if `GL_MAP1_INDEX` or `GL_MAP2_INDEX` is enabled, a {@see glIndex} command is
     * simulated. If `GL_MAP1_COLOR_4` or `GL_MAP2_COLOR_4` is enabled, a {@see glColor} command is simulated. If
     * `GL_MAP1_NORMAL` or `GL_MAP2_NORMAL` is enabled, a normal vector is produced, and if any of
     * `GL_MAP1_TEXTURE_COORD_1`, `GL_MAP1_TEXTURE_COORD_2`, `GL_MAP1_TEXTURE_COORD_3`, `GL_MAP1_TEXTURE_COORD_4`,
     * `GL_MAP2_TEXTURE_COORD_1`, `GL_MAP2_TEXTURE_COORD_2`, `GL_MAP2_TEXTURE_COORD_3`, or `GL_MAP2_TEXTURE_COORD_4`
     * is enabled, then an appropriate {@see glTexCoord} command is simulated.
     *
     * For color, color index, normal, and texture coordinates the GL uses evaluated values instead of current values
     * for those evaluations that are enabled, and current values otherwise, However, the evaluated values do not
     * update the current values. Thus, if {@see glVertex} commands are interspersed with `glEvalCoord`
     * commands, the color, normal, and texture coordinates associated with the {@see glVertex} commands are not
     * affected by the values generated by the `glEvalCoord` commands, but only by the most recent
     * {@see glColor}, {@see glIndex}, {@see glNormal}, and {@see glTexCoord} commands.
     *
     * No commands are issued for maps that are not enabled. If more than one texture evaluation is enabled for a
     * particular dimension (for example, `GL_MAP2_TEXTURE_COORD_1` and `GL_MAP2_TEXTURE_COORD_2`), then only the
     * evaluation of the map that produces the larger number of coordinates (in this case, `GL_MAP2_TEXTURE_COORD_2`)
     * is carried out. `GL_MAP1_VERTEX_4` overrides `GL_MAP1_VERTEX_3`, and `GL_MAP2_VERTEX_4` overrides
     * `GL_MAP2_VERTEX_3`, in the same manner. If neither a three- nor a four-component vertex map is enabled for the
     * specified dimension, the `glEvalCoord` command is ignored.
     *
     * If you have enabled automatic normal generation, by calling {@see glEnable} with argument
     * `GL_AUTO_NORMAL`, `glEvalCoord2` generates surface normals analytically, regardless of the contents or
     * enabling of the `GL_MAP2_NORMAL` map. Let
     *
     * m = ∂ p ∂ u × ∂ p ∂ v
     *
     * Then the generated normal n is n = m m
     *
     * If automatic normal generation is disabled, the corresponding normal map `GL_MAP2_NORMAL`, if enabled, is used
     * to produce a normal. If neither automatic normal generation nor a normal map is enabled, no normal is
     * generated for `glEvalCoord2` commands.
     *
     * @see http://docs.gl/gl2/glEvalCoord
     * @since 1.1
     * @param float $u
     * @return void
     */
    public static function glEvalCoord1d(float $u): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($u >= \PHP_FLOAT_MIN && $u <= \PHP_FLOAT_MAX, 'Argument $u overflow: C type GLdouble is required');

        self::$ffi->glEvalCoord1d($u);
    }

    /**
     * Evaluates enabled one-dimensional maps at argument *`u`*. `glEvalCoord2` does the same for two-dimensional
     * maps using two domain values, *`u`* and *`v`*. To define a map, call {@see glMap1} and {@see glMap2}; to
     * enable and disable it, call {@see glEnable} and {@see glDisable}.
     *
     * When one of the `glEvalCoord` commands is issued, all currently enabled maps of the indicated dimension are
     * evaluated. Then, for each enabled map, it is as if the corresponding GL command had been issued with the
     * computed value. That is, if `GL_MAP1_INDEX` or `GL_MAP2_INDEX` is enabled, a {@see glIndex} command is
     * simulated. If `GL_MAP1_COLOR_4` or `GL_MAP2_COLOR_4` is enabled, a {@see glColor} command is simulated. If
     * `GL_MAP1_NORMAL` or `GL_MAP2_NORMAL` is enabled, a normal vector is produced, and if any of
     * `GL_MAP1_TEXTURE_COORD_1`, `GL_MAP1_TEXTURE_COORD_2`, `GL_MAP1_TEXTURE_COORD_3`, `GL_MAP1_TEXTURE_COORD_4`,
     * `GL_MAP2_TEXTURE_COORD_1`, `GL_MAP2_TEXTURE_COORD_2`, `GL_MAP2_TEXTURE_COORD_3`, or `GL_MAP2_TEXTURE_COORD_4`
     * is enabled, then an appropriate {@see glTexCoord} command is simulated.
     *
     * For color, color index, normal, and texture coordinates the GL uses evaluated values instead of current values
     * for those evaluations that are enabled, and current values otherwise, However, the evaluated values do not
     * update the current values. Thus, if {@see glVertex} commands are interspersed with `glEvalCoord`
     * commands, the color, normal, and texture coordinates associated with the {@see glVertex} commands are not
     * affected by the values generated by the `glEvalCoord` commands, but only by the most recent
     * {@see glColor}, {@see glIndex}, {@see glNormal}, and {@see glTexCoord} commands.
     *
     * No commands are issued for maps that are not enabled. If more than one texture evaluation is enabled for a
     * particular dimension (for example, `GL_MAP2_TEXTURE_COORD_1` and `GL_MAP2_TEXTURE_COORD_2`), then only the
     * evaluation of the map that produces the larger number of coordinates (in this case, `GL_MAP2_TEXTURE_COORD_2`)
     * is carried out. `GL_MAP1_VERTEX_4` overrides `GL_MAP1_VERTEX_3`, and `GL_MAP2_VERTEX_4` overrides
     * `GL_MAP2_VERTEX_3`, in the same manner. If neither a three- nor a four-component vertex map is enabled for the
     * specified dimension, the `glEvalCoord` command is ignored.
     *
     * If you have enabled automatic normal generation, by calling {@see glEnable} with argument
     * `GL_AUTO_NORMAL`, `glEvalCoord2` generates surface normals analytically, regardless of the contents or
     * enabling of the `GL_MAP2_NORMAL` map. Let
     *
     * m = ∂ p ∂ u × ∂ p ∂ v
     *
     * Then the generated normal n is n = m m
     *
     * If automatic normal generation is disabled, the corresponding normal map `GL_MAP2_NORMAL`, if enabled, is used
     * to produce a normal. If neither automatic normal generation nor a normal map is enabled, no normal is
     * generated for `glEvalCoord2` commands.
     *
     * @see http://docs.gl/gl2/glEvalCoord
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $u
     * @return void
     */
    public static function glEvalCoord1dv(?\FFI\CData $u): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glEvalCoord1dv($u);
    }

    /**
     * Evaluates enabled one-dimensional maps at argument *`u`*. `glEvalCoord2` does the same for two-dimensional
     * maps using two domain values, *`u`* and *`v`*. To define a map, call {@see glMap1} and {@see glMap2}; to
     * enable and disable it, call {@see glEnable} and {@see glDisable}.
     *
     * When one of the `glEvalCoord` commands is issued, all currently enabled maps of the indicated dimension are
     * evaluated. Then, for each enabled map, it is as if the corresponding GL command had been issued with the
     * computed value. That is, if `GL_MAP1_INDEX` or `GL_MAP2_INDEX` is enabled, a {@see glIndex} command is
     * simulated. If `GL_MAP1_COLOR_4` or `GL_MAP2_COLOR_4` is enabled, a {@see glColor} command is simulated. If
     * `GL_MAP1_NORMAL` or `GL_MAP2_NORMAL` is enabled, a normal vector is produced, and if any of
     * `GL_MAP1_TEXTURE_COORD_1`, `GL_MAP1_TEXTURE_COORD_2`, `GL_MAP1_TEXTURE_COORD_3`, `GL_MAP1_TEXTURE_COORD_4`,
     * `GL_MAP2_TEXTURE_COORD_1`, `GL_MAP2_TEXTURE_COORD_2`, `GL_MAP2_TEXTURE_COORD_3`, or `GL_MAP2_TEXTURE_COORD_4`
     * is enabled, then an appropriate {@see glTexCoord} command is simulated.
     *
     * For color, color index, normal, and texture coordinates the GL uses evaluated values instead of current values
     * for those evaluations that are enabled, and current values otherwise, However, the evaluated values do not
     * update the current values. Thus, if {@see glVertex} commands are interspersed with `glEvalCoord`
     * commands, the color, normal, and texture coordinates associated with the {@see glVertex} commands are not
     * affected by the values generated by the `glEvalCoord` commands, but only by the most recent
     * {@see glColor}, {@see glIndex}, {@see glNormal}, and {@see glTexCoord} commands.
     *
     * No commands are issued for maps that are not enabled. If more than one texture evaluation is enabled for a
     * particular dimension (for example, `GL_MAP2_TEXTURE_COORD_1` and `GL_MAP2_TEXTURE_COORD_2`), then only the
     * evaluation of the map that produces the larger number of coordinates (in this case, `GL_MAP2_TEXTURE_COORD_2`)
     * is carried out. `GL_MAP1_VERTEX_4` overrides `GL_MAP1_VERTEX_3`, and `GL_MAP2_VERTEX_4` overrides
     * `GL_MAP2_VERTEX_3`, in the same manner. If neither a three- nor a four-component vertex map is enabled for the
     * specified dimension, the `glEvalCoord` command is ignored.
     *
     * If you have enabled automatic normal generation, by calling {@see glEnable} with argument
     * `GL_AUTO_NORMAL`, `glEvalCoord2` generates surface normals analytically, regardless of the contents or
     * enabling of the `GL_MAP2_NORMAL` map. Let
     *
     * m = ∂ p ∂ u × ∂ p ∂ v
     *
     * Then the generated normal n is n = m m
     *
     * If automatic normal generation is disabled, the corresponding normal map `GL_MAP2_NORMAL`, if enabled, is used
     * to produce a normal. If neither automatic normal generation nor a normal map is enabled, no normal is
     * generated for `glEvalCoord2` commands.
     *
     * @see http://docs.gl/gl2/glEvalCoord
     * @since 1.1
     * @param float $u
     * @return void
     */
    public static function glEvalCoord1f(float $u): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($u >= -3.40282e38 && $u <= 3.40282e38, 'Argument $u overflow: C type GLfloat is required');

        self::$ffi->glEvalCoord1f($u);
    }

    /**
     * Evaluates enabled one-dimensional maps at argument *`u`*. `glEvalCoord2` does the same for two-dimensional
     * maps using two domain values, *`u`* and *`v`*. To define a map, call {@see glMap1} and {@see glMap2}; to
     * enable and disable it, call {@see glEnable} and {@see glDisable}.
     *
     * When one of the `glEvalCoord` commands is issued, all currently enabled maps of the indicated dimension are
     * evaluated. Then, for each enabled map, it is as if the corresponding GL command had been issued with the
     * computed value. That is, if `GL_MAP1_INDEX` or `GL_MAP2_INDEX` is enabled, a {@see glIndex} command is
     * simulated. If `GL_MAP1_COLOR_4` or `GL_MAP2_COLOR_4` is enabled, a {@see glColor} command is simulated. If
     * `GL_MAP1_NORMAL` or `GL_MAP2_NORMAL` is enabled, a normal vector is produced, and if any of
     * `GL_MAP1_TEXTURE_COORD_1`, `GL_MAP1_TEXTURE_COORD_2`, `GL_MAP1_TEXTURE_COORD_3`, `GL_MAP1_TEXTURE_COORD_4`,
     * `GL_MAP2_TEXTURE_COORD_1`, `GL_MAP2_TEXTURE_COORD_2`, `GL_MAP2_TEXTURE_COORD_3`, or `GL_MAP2_TEXTURE_COORD_4`
     * is enabled, then an appropriate {@see glTexCoord} command is simulated.
     *
     * For color, color index, normal, and texture coordinates the GL uses evaluated values instead of current values
     * for those evaluations that are enabled, and current values otherwise, However, the evaluated values do not
     * update the current values. Thus, if {@see glVertex} commands are interspersed with `glEvalCoord`
     * commands, the color, normal, and texture coordinates associated with the {@see glVertex} commands are not
     * affected by the values generated by the `glEvalCoord` commands, but only by the most recent
     * {@see glColor}, {@see glIndex}, {@see glNormal}, and {@see glTexCoord} commands.
     *
     * No commands are issued for maps that are not enabled. If more than one texture evaluation is enabled for a
     * particular dimension (for example, `GL_MAP2_TEXTURE_COORD_1` and `GL_MAP2_TEXTURE_COORD_2`), then only the
     * evaluation of the map that produces the larger number of coordinates (in this case, `GL_MAP2_TEXTURE_COORD_2`)
     * is carried out. `GL_MAP1_VERTEX_4` overrides `GL_MAP1_VERTEX_3`, and `GL_MAP2_VERTEX_4` overrides
     * `GL_MAP2_VERTEX_3`, in the same manner. If neither a three- nor a four-component vertex map is enabled for the
     * specified dimension, the `glEvalCoord` command is ignored.
     *
     * If you have enabled automatic normal generation, by calling {@see glEnable} with argument
     * `GL_AUTO_NORMAL`, `glEvalCoord2` generates surface normals analytically, regardless of the contents or
     * enabling of the `GL_MAP2_NORMAL` map. Let
     *
     * m = ∂ p ∂ u × ∂ p ∂ v
     *
     * Then the generated normal n is n = m m
     *
     * If automatic normal generation is disabled, the corresponding normal map `GL_MAP2_NORMAL`, if enabled, is used
     * to produce a normal. If neither automatic normal generation nor a normal map is enabled, no normal is
     * generated for `glEvalCoord2` commands.
     *
     * @see http://docs.gl/gl2/glEvalCoord
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $u
     * @return void
     */
    public static function glEvalCoord1fv(?\FFI\CData $u): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glEvalCoord1fv($u);
    }

    /**
     * Evaluates enabled one-dimensional maps at argument *`u`*. `glEvalCoord2` does the same for two-dimensional
     * maps using two domain values, *`u`* and *`v`*. To define a map, call {@see glMap1} and {@see glMap2}; to
     * enable and disable it, call {@see glEnable} and {@see glDisable}.
     *
     * When one of the `glEvalCoord` commands is issued, all currently enabled maps of the indicated dimension are
     * evaluated. Then, for each enabled map, it is as if the corresponding GL command had been issued with the
     * computed value. That is, if `GL_MAP1_INDEX` or `GL_MAP2_INDEX` is enabled, a {@see glIndex} command is
     * simulated. If `GL_MAP1_COLOR_4` or `GL_MAP2_COLOR_4` is enabled, a {@see glColor} command is simulated. If
     * `GL_MAP1_NORMAL` or `GL_MAP2_NORMAL` is enabled, a normal vector is produced, and if any of
     * `GL_MAP1_TEXTURE_COORD_1`, `GL_MAP1_TEXTURE_COORD_2`, `GL_MAP1_TEXTURE_COORD_3`, `GL_MAP1_TEXTURE_COORD_4`,
     * `GL_MAP2_TEXTURE_COORD_1`, `GL_MAP2_TEXTURE_COORD_2`, `GL_MAP2_TEXTURE_COORD_3`, or `GL_MAP2_TEXTURE_COORD_4`
     * is enabled, then an appropriate {@see glTexCoord} command is simulated.
     *
     * For color, color index, normal, and texture coordinates the GL uses evaluated values instead of current values
     * for those evaluations that are enabled, and current values otherwise, However, the evaluated values do not
     * update the current values. Thus, if {@see glVertex} commands are interspersed with `glEvalCoord`
     * commands, the color, normal, and texture coordinates associated with the {@see glVertex} commands are not
     * affected by the values generated by the `glEvalCoord` commands, but only by the most recent
     * {@see glColor}, {@see glIndex}, {@see glNormal}, and {@see glTexCoord} commands.
     *
     * No commands are issued for maps that are not enabled. If more than one texture evaluation is enabled for a
     * particular dimension (for example, `GL_MAP2_TEXTURE_COORD_1` and `GL_MAP2_TEXTURE_COORD_2`), then only the
     * evaluation of the map that produces the larger number of coordinates (in this case, `GL_MAP2_TEXTURE_COORD_2`)
     * is carried out. `GL_MAP1_VERTEX_4` overrides `GL_MAP1_VERTEX_3`, and `GL_MAP2_VERTEX_4` overrides
     * `GL_MAP2_VERTEX_3`, in the same manner. If neither a three- nor a four-component vertex map is enabled for the
     * specified dimension, the `glEvalCoord` command is ignored.
     *
     * If you have enabled automatic normal generation, by calling {@see glEnable} with argument
     * `GL_AUTO_NORMAL`, `glEvalCoord2` generates surface normals analytically, regardless of the contents or
     * enabling of the `GL_MAP2_NORMAL` map. Let
     *
     * m = ∂ p ∂ u × ∂ p ∂ v
     *
     * Then the generated normal n is n = m m
     *
     * If automatic normal generation is disabled, the corresponding normal map `GL_MAP2_NORMAL`, if enabled, is used
     * to produce a normal. If neither automatic normal generation nor a normal map is enabled, no normal is
     * generated for `glEvalCoord2` commands.
     *
     * @see http://docs.gl/gl2/glEvalCoord
     * @since 1.1
     * @param float $u
     * @param float $v
     * @return void
     */
    public static function glEvalCoord2d(float $u, float $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($u >= \PHP_FLOAT_MIN && $u <= \PHP_FLOAT_MAX, 'Argument $u overflow: C type GLdouble is required');
        assert($v >= \PHP_FLOAT_MIN && $v <= \PHP_FLOAT_MAX, 'Argument $v overflow: C type GLdouble is required');

        self::$ffi->glEvalCoord2d($u, $v);
    }

    /**
     * Evaluates enabled one-dimensional maps at argument *`u`*. `glEvalCoord2` does the same for two-dimensional
     * maps using two domain values, *`u`* and *`v`*. To define a map, call {@see glMap1} and {@see glMap2}; to
     * enable and disable it, call {@see glEnable} and {@see glDisable}.
     *
     * When one of the `glEvalCoord` commands is issued, all currently enabled maps of the indicated dimension are
     * evaluated. Then, for each enabled map, it is as if the corresponding GL command had been issued with the
     * computed value. That is, if `GL_MAP1_INDEX` or `GL_MAP2_INDEX` is enabled, a {@see glIndex} command is
     * simulated. If `GL_MAP1_COLOR_4` or `GL_MAP2_COLOR_4` is enabled, a {@see glColor} command is simulated. If
     * `GL_MAP1_NORMAL` or `GL_MAP2_NORMAL` is enabled, a normal vector is produced, and if any of
     * `GL_MAP1_TEXTURE_COORD_1`, `GL_MAP1_TEXTURE_COORD_2`, `GL_MAP1_TEXTURE_COORD_3`, `GL_MAP1_TEXTURE_COORD_4`,
     * `GL_MAP2_TEXTURE_COORD_1`, `GL_MAP2_TEXTURE_COORD_2`, `GL_MAP2_TEXTURE_COORD_3`, or `GL_MAP2_TEXTURE_COORD_4`
     * is enabled, then an appropriate {@see glTexCoord} command is simulated.
     *
     * For color, color index, normal, and texture coordinates the GL uses evaluated values instead of current values
     * for those evaluations that are enabled, and current values otherwise, However, the evaluated values do not
     * update the current values. Thus, if {@see glVertex} commands are interspersed with `glEvalCoord`
     * commands, the color, normal, and texture coordinates associated with the {@see glVertex} commands are not
     * affected by the values generated by the `glEvalCoord` commands, but only by the most recent
     * {@see glColor}, {@see glIndex}, {@see glNormal}, and {@see glTexCoord} commands.
     *
     * No commands are issued for maps that are not enabled. If more than one texture evaluation is enabled for a
     * particular dimension (for example, `GL_MAP2_TEXTURE_COORD_1` and `GL_MAP2_TEXTURE_COORD_2`), then only the
     * evaluation of the map that produces the larger number of coordinates (in this case, `GL_MAP2_TEXTURE_COORD_2`)
     * is carried out. `GL_MAP1_VERTEX_4` overrides `GL_MAP1_VERTEX_3`, and `GL_MAP2_VERTEX_4` overrides
     * `GL_MAP2_VERTEX_3`, in the same manner. If neither a three- nor a four-component vertex map is enabled for the
     * specified dimension, the `glEvalCoord` command is ignored.
     *
     * If you have enabled automatic normal generation, by calling {@see glEnable} with argument
     * `GL_AUTO_NORMAL`, `glEvalCoord2` generates surface normals analytically, regardless of the contents or
     * enabling of the `GL_MAP2_NORMAL` map. Let
     *
     * m = ∂ p ∂ u × ∂ p ∂ v
     *
     * Then the generated normal n is n = m m
     *
     * If automatic normal generation is disabled, the corresponding normal map `GL_MAP2_NORMAL`, if enabled, is used
     * to produce a normal. If neither automatic normal generation nor a normal map is enabled, no normal is
     * generated for `glEvalCoord2` commands.
     *
     * @see http://docs.gl/gl2/glEvalCoord
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $u
     * @return void
     */
    public static function glEvalCoord2dv(?\FFI\CData $u): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glEvalCoord2dv($u);
    }

    /**
     * Evaluates enabled one-dimensional maps at argument *`u`*. `glEvalCoord2` does the same for two-dimensional
     * maps using two domain values, *`u`* and *`v`*. To define a map, call {@see glMap1} and {@see glMap2}; to
     * enable and disable it, call {@see glEnable} and {@see glDisable}.
     *
     * When one of the `glEvalCoord` commands is issued, all currently enabled maps of the indicated dimension are
     * evaluated. Then, for each enabled map, it is as if the corresponding GL command had been issued with the
     * computed value. That is, if `GL_MAP1_INDEX` or `GL_MAP2_INDEX` is enabled, a {@see glIndex} command is
     * simulated. If `GL_MAP1_COLOR_4` or `GL_MAP2_COLOR_4` is enabled, a {@see glColor} command is simulated. If
     * `GL_MAP1_NORMAL` or `GL_MAP2_NORMAL` is enabled, a normal vector is produced, and if any of
     * `GL_MAP1_TEXTURE_COORD_1`, `GL_MAP1_TEXTURE_COORD_2`, `GL_MAP1_TEXTURE_COORD_3`, `GL_MAP1_TEXTURE_COORD_4`,
     * `GL_MAP2_TEXTURE_COORD_1`, `GL_MAP2_TEXTURE_COORD_2`, `GL_MAP2_TEXTURE_COORD_3`, or `GL_MAP2_TEXTURE_COORD_4`
     * is enabled, then an appropriate {@see glTexCoord} command is simulated.
     *
     * For color, color index, normal, and texture coordinates the GL uses evaluated values instead of current values
     * for those evaluations that are enabled, and current values otherwise, However, the evaluated values do not
     * update the current values. Thus, if {@see glVertex} commands are interspersed with `glEvalCoord`
     * commands, the color, normal, and texture coordinates associated with the {@see glVertex} commands are not
     * affected by the values generated by the `glEvalCoord` commands, but only by the most recent
     * {@see glColor}, {@see glIndex}, {@see glNormal}, and {@see glTexCoord} commands.
     *
     * No commands are issued for maps that are not enabled. If more than one texture evaluation is enabled for a
     * particular dimension (for example, `GL_MAP2_TEXTURE_COORD_1` and `GL_MAP2_TEXTURE_COORD_2`), then only the
     * evaluation of the map that produces the larger number of coordinates (in this case, `GL_MAP2_TEXTURE_COORD_2`)
     * is carried out. `GL_MAP1_VERTEX_4` overrides `GL_MAP1_VERTEX_3`, and `GL_MAP2_VERTEX_4` overrides
     * `GL_MAP2_VERTEX_3`, in the same manner. If neither a three- nor a four-component vertex map is enabled for the
     * specified dimension, the `glEvalCoord` command is ignored.
     *
     * If you have enabled automatic normal generation, by calling {@see glEnable} with argument
     * `GL_AUTO_NORMAL`, `glEvalCoord2` generates surface normals analytically, regardless of the contents or
     * enabling of the `GL_MAP2_NORMAL` map. Let
     *
     * m = ∂ p ∂ u × ∂ p ∂ v
     *
     * Then the generated normal n is n = m m
     *
     * If automatic normal generation is disabled, the corresponding normal map `GL_MAP2_NORMAL`, if enabled, is used
     * to produce a normal. If neither automatic normal generation nor a normal map is enabled, no normal is
     * generated for `glEvalCoord2` commands.
     *
     * @see http://docs.gl/gl2/glEvalCoord
     * @since 1.1
     * @param float $u
     * @param float $v
     * @return void
     */
    public static function glEvalCoord2f(float $u, float $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($u >= -3.40282e38 && $u <= 3.40282e38, 'Argument $u overflow: C type GLfloat is required');
        assert($v >= -3.40282e38 && $v <= 3.40282e38, 'Argument $v overflow: C type GLfloat is required');

        self::$ffi->glEvalCoord2f($u, $v);
    }

    /**
     * Evaluates enabled one-dimensional maps at argument *`u`*. `glEvalCoord2` does the same for two-dimensional
     * maps using two domain values, *`u`* and *`v`*. To define a map, call {@see glMap1} and {@see glMap2}; to
     * enable and disable it, call {@see glEnable} and {@see glDisable}.
     *
     * When one of the `glEvalCoord` commands is issued, all currently enabled maps of the indicated dimension are
     * evaluated. Then, for each enabled map, it is as if the corresponding GL command had been issued with the
     * computed value. That is, if `GL_MAP1_INDEX` or `GL_MAP2_INDEX` is enabled, a {@see glIndex} command is
     * simulated. If `GL_MAP1_COLOR_4` or `GL_MAP2_COLOR_4` is enabled, a {@see glColor} command is simulated. If
     * `GL_MAP1_NORMAL` or `GL_MAP2_NORMAL` is enabled, a normal vector is produced, and if any of
     * `GL_MAP1_TEXTURE_COORD_1`, `GL_MAP1_TEXTURE_COORD_2`, `GL_MAP1_TEXTURE_COORD_3`, `GL_MAP1_TEXTURE_COORD_4`,
     * `GL_MAP2_TEXTURE_COORD_1`, `GL_MAP2_TEXTURE_COORD_2`, `GL_MAP2_TEXTURE_COORD_3`, or `GL_MAP2_TEXTURE_COORD_4`
     * is enabled, then an appropriate {@see glTexCoord} command is simulated.
     *
     * For color, color index, normal, and texture coordinates the GL uses evaluated values instead of current values
     * for those evaluations that are enabled, and current values otherwise, However, the evaluated values do not
     * update the current values. Thus, if {@see glVertex} commands are interspersed with `glEvalCoord`
     * commands, the color, normal, and texture coordinates associated with the {@see glVertex} commands are not
     * affected by the values generated by the `glEvalCoord` commands, but only by the most recent
     * {@see glColor}, {@see glIndex}, {@see glNormal}, and {@see glTexCoord} commands.
     *
     * No commands are issued for maps that are not enabled. If more than one texture evaluation is enabled for a
     * particular dimension (for example, `GL_MAP2_TEXTURE_COORD_1` and `GL_MAP2_TEXTURE_COORD_2`), then only the
     * evaluation of the map that produces the larger number of coordinates (in this case, `GL_MAP2_TEXTURE_COORD_2`)
     * is carried out. `GL_MAP1_VERTEX_4` overrides `GL_MAP1_VERTEX_3`, and `GL_MAP2_VERTEX_4` overrides
     * `GL_MAP2_VERTEX_3`, in the same manner. If neither a three- nor a four-component vertex map is enabled for the
     * specified dimension, the `glEvalCoord` command is ignored.
     *
     * If you have enabled automatic normal generation, by calling {@see glEnable} with argument
     * `GL_AUTO_NORMAL`, `glEvalCoord2` generates surface normals analytically, regardless of the contents or
     * enabling of the `GL_MAP2_NORMAL` map. Let
     *
     * m = ∂ p ∂ u × ∂ p ∂ v
     *
     * Then the generated normal n is n = m m
     *
     * If automatic normal generation is disabled, the corresponding normal map `GL_MAP2_NORMAL`, if enabled, is used
     * to produce a normal. If neither automatic normal generation nor a normal map is enabled, no normal is
     * generated for `glEvalCoord2` commands.
     *
     * @see http://docs.gl/gl2/glEvalCoord
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $u
     * @return void
     */
    public static function glEvalCoord2fv(?\FFI\CData $u): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glEvalCoord2fv($u);
    }

    /**
     * @since 1.1
     * @param int $mode
     * @param int $i1
     * @param int $i2
     * @return void
     */
    public static function glEvalMesh1(int $mode, int $i1, int $i2): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');
        assert($i1 >= \PHP_INT_MIN && $i1 <= \PHP_INT_MAX, 'Argument $i1 overflow: C type GLint is required');
        assert($i2 >= \PHP_INT_MIN && $i2 <= \PHP_INT_MAX, 'Argument $i2 overflow: C type GLint is required');

        self::$ffi->glEvalMesh1($mode, $i1, $i2);
    }

    /**
     * @since 1.1
     * @param int $mode
     * @param int $i1
     * @param int $i2
     * @param int $j1
     * @param int $j2
     * @return void
     */
    public static function glEvalMesh2(int $mode, int $i1, int $i2, int $j1, int $j2): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');
        assert($i1 >= \PHP_INT_MIN && $i1 <= \PHP_INT_MAX, 'Argument $i1 overflow: C type GLint is required');
        assert($i2 >= \PHP_INT_MIN && $i2 <= \PHP_INT_MAX, 'Argument $i2 overflow: C type GLint is required');
        assert($j1 >= \PHP_INT_MIN && $j1 <= \PHP_INT_MAX, 'Argument $j1 overflow: C type GLint is required');
        assert($j2 >= \PHP_INT_MIN && $j2 <= \PHP_INT_MAX, 'Argument $j2 overflow: C type GLint is required');

        self::$ffi->glEvalMesh2($mode, $i1, $i2, $j1, $j2);
    }

    /**
     * @since 1.1
     * @param int $i
     * @return void
     */
    public static function glEvalPoint1(int $i): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($i >= \PHP_INT_MIN && $i <= \PHP_INT_MAX, 'Argument $i overflow: C type GLint is required');

        self::$ffi->glEvalPoint1($i);
    }

    /**
     * @since 1.1
     * @param int $i
     * @param int $j
     * @return void
     */
    public static function glEvalPoint2(int $i, int $j): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($i >= \PHP_INT_MIN && $i <= \PHP_INT_MAX, 'Argument $i overflow: C type GLint is required');
        assert($j >= \PHP_INT_MIN && $j <= \PHP_INT_MAX, 'Argument $j overflow: C type GLint is required');

        self::$ffi->glEvalPoint2($i, $j);
    }

    /**
     * The `glFeedbackBuffer` function controls feedback. Feedback, like selection, is a GL mode. The mode is
     * selected by calling {@see glRenderMode} with `GL_FEEDBACK`. When the GL is in feedback mode, no
     * pixels are produced by rasterization. Instead, information about primitives that would have been rasterized is
     * fed back to the application using the GL.
     *
     *  - `glFeedbackBuffer` has three arguments: *`buffer`* is a pointer to an array of floating-point values into
     * which feedback information is placed. *`size`* indicates the size of the array. *`type`* is a symbolic
     * constant describing the information that is fed back for each vertex. `glFeedbackBuffer` must be issued before
     * feedback mode is enabled (by calling {@see glRenderMode} with argument `GL_FEEDBACK`). Setting
     * `GL_FEEDBACK` without establishing the feedback buffer, or calling `glFeedbackBuffer` while the GL is in
     * feedback mode, is an error.
     *
     * When {@see glRenderMode} is called while in feedback mode, it returns the number of entries placed in
     * the feedback array and resets the feedback array pointer to the base of the feedback buffer. The returned
     * value never exceeds *`size`*. If the feedback data required more room than was available in *`buffer`*,
     * {@see glRenderMode} returns a negative value. To take the GL out of feedback mode, call
     * {@see glRenderMode} with a parameter value other than `GL_FEEDBACK`.
     *
     * While in feedback mode, each primitive, bitmap, or pixel rectangle that would be rasterized generates a block
     * of values that are copied into the feedback array. If doing so would cause the number of entries to exceed the
     * maximum, the block is partially written so as to fill the array (if there is any room left at all), and an
     * overflow flag is set. Each block begins with a code indicating the primitive type, followed by values that
     * describe the primitive's vertices and associated data. Entries are also written for bitmaps and pixel
     * rectangles. Feedback occurs after polygon culling and {@see glPolygonMode} interpretation of
     * polygons has taken place, so polygons that are culled are not returned in the feedback buffer. It can also
     * occur after polygons with more than three edges are broken up into triangles, if the GL implementation renders
     * polygons by performing this decomposition.
     *
     * The {@see glPassThrough} command can be used to insert a marker into the feedback buffer. See
     * {@see glPassThrough}.
     *
     * Following is the grammar for the blocks of values written into the feedback buffer. Each primitive is
     * indicated with a unique identifying value followed by some number of vertices. Polygon entries include an
     * integer value indicating how many vertices follow. A vertex is fed back as some number of floating-point
     * values, as determined by *`type`*. Colors are fed back as four values in RGBA mode and one value in color
     * index mode.
     *
     * feedbackList ← feedbackItem feedbackList | feedbackItem
     *
     * feedbackItem ← point | lineSegment | polygon | bitmap | pixelRectangle | passThru
     *
     * point ← `GL_POINT_TOKEN` vertex
     *
     * lineSegment ← `GL_LINE_TOKEN` vertex vertex | `GL_LINE_RESET_TOKEN` vertex vertex
     *
     * polygon ← `GL_POLYGON_TOKEN` n polySpec
     *
     * polySpec ← polySpec vertex | vertex vertex vertex
     *
     * bitmap ← `GL_BITMAP_TOKEN` vertex
     *
     * pixelRectangle ← `GL_DRAW_PIXEL_TOKEN` vertex | `GL_COPY_PIXEL_TOKEN` vertex
     *
     * passThru ← `GL_PASS_THROUGH_TOKEN` value
     *
     * vertex ← 2d | 3d | 3dColor | 3dColorTexture | 4dColorTexture
     *
     * 2d ← value value
     *
     * 3d ← value value value
     *
     * 3dColor ← value value value color
     *
     * 3dColorTexture ← value value value color tex
     *
     * 4dColorTexture ← value value value value color tex
     *
     * color ← rgba | index
     *
     * rgba ← value value value value
     *
     * index ← value
     *
     * tex ← value value value value
     *
     * *value* is a floating-point number, and *n* is a floating-point integer giving the number of vertices in the
     * polygon. `GL_POINT_TOKEN`, `GL_LINE_TOKEN`, `GL_LINE_RESET_TOKEN`, `GL_POLYGON_TOKEN`, `GL_BITMAP_TOKEN`,
     * `GL_DRAW_PIXEL_TOKEN`, `GL_COPY_PIXEL_TOKEN` and `GL_PASS_THROUGH_TOKEN` are symbolic floating-point
     * constants. `GL_LINE_RESET_TOKEN` is returned whenever the line stipple pattern is reset. The data returned as
     * a vertex depends on the feedback *`type`*.
     *
     * The following table gives the correspondence between *`type`* and the number of values per vertex. *k* is 1 in
     * color index mode and 4 in RGBA mode.
     *
     * **Type** **Coordinates** **Color** **Texture** **Total Number of Values** `GL_2D` *x*, *y* 2 `GL_3D` *x*, *y*,
     * *z* 3 `GL_3D_COLOR` *x*, *y*, *z* k 3 + k `GL_3D_COLOR_TEXTURE` *x*, *y*, *z* k 4 7 + k `GL_4D_COLOR_TEXTURE`
     * *x*, *y*, *z*, *w* k 4 8 + k
     *
     * Feedback vertex coordinates are in window coordinates, except *w*, which is in clip coordinates. Feedback
     * colors are lighted, if lighting is enabled. Feedback texture coordinates are generated, if texture coordinate
     * generation is enabled. They are always transformed by the texture matrix.
     *
     * @see http://docs.gl/gl2/glFeedbackBuffer
     * @since 1.1
     * @param int $size
     * @param int $type
     * @param \FFI\CData|\FFI\CFloatPtr|null $buffer
     * @return void
     */
    public static function glFeedbackBuffer(int $size, int $type, ?\FFI\CData $buffer): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($size >= \PHP_INT_MIN && $size <= \PHP_INT_MAX, 'Argument $size overflow: C type GLsizei is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');

        self::$ffi->glFeedbackBuffer($size, $type, $buffer);
    }

    /**
     * Does not return until the effects of all previously called GL commands are complete. Such effects include all
     * changes to GL state, all changes to connection state, and all changes to the frame buffer contents.
     *
     * @see http://docs.gl/gl2/glFinish
     * @see http://docs.gl/gl3/glFinish
     * @see http://docs.gl/gl4/glFinish
     * @since 1.1
     * @return void
     */
    public static function glFinish(): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glFinish();
    }

    /**
     * Different GL implementations buffer commands in several different locations, including network buffers and the
     * graphics accelerator itself. `glFlush` empties all of these buffers, causing all issued commands to be
     * executed as quickly as they are accepted by the actual rendering engine. Though this execution may not be
     * completed in any particular time period, it does complete in finite time.
     *
     * Because any GL program might be executed over a network, or on an accelerator that buffers commands, all
     * programs should call `glFlush` whenever they count on having all of their previously issued commands
     * completed. For example, call `glFlush` before waiting for user input that depends on the generated image.
     *
     * @see http://docs.gl/gl2/glFlush
     * @see http://docs.gl/gl3/glFlush
     * @see http://docs.gl/gl4/glFlush
     * @since 1.1
     * @return void
     */
    public static function glFlush(): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glFlush();
    }

    /**
     * @since 1.1
     * @param int $pname
     * @param float $param
     * @return void
     */
    public static function glFogf(int $pname, float $param): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($param >= -3.40282e38 && $param <= 3.40282e38, 'Argument $param overflow: C type GLfloat is required');

        self::$ffi->glFogf($pname, $param);
    }

    /**
     * @since 1.1
     * @param int $pname
     * @param \FFI\CData|\FFI\CFloatPtr|null $params
     * @return void
     */
    public static function glFogfv(int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glFogfv($pname, $params);
    }

    /**
     * @since 1.1
     * @param int $pname
     * @param int $param
     * @return void
     */
    public static function glFogi(int $pname, int $param): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($param >= \PHP_INT_MIN && $param <= \PHP_INT_MAX, 'Argument $param overflow: C type GLint is required');

        self::$ffi->glFogi($pname, $param);
    }

    /**
     * @since 1.1
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glFogiv(int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glFogiv($pname, $params);
    }

    /**
     * In a scene composed entirely of opaque closed surfaces, back-facing polygons are never visible. Eliminating
     * these invisible polygons has the obvious benefit of speeding up the rendering of the image. To enable and
     * disable elimination of back-facing polygons, call {@see glEnable} and {@see glDisable} with
     * argument `GL_CULL_FACE`.
     *
     * The projection of a polygon to window coordinates is said to have clockwise winding if an imaginary object
     * following the path from its first vertex, its second vertex, and so on, to its last vertex, and finally back
     * to its first vertex, moves in a clockwise direction about the interior of the polygon. The polygon's winding
     * is said to be counterclockwise if the imaginary object following the same path moves in a counterclockwise
     * direction about the interior of the polygon. `glFrontFace` specifies whether polygons with clockwise winding
     * in window coordinates, or counterclockwise winding in window coordinates, are taken to be front-facing.
     * Passing `GL_CCW` to *`mode`* selects counterclockwise polygons as front-facing; `GL_CW` selects clockwise
     * polygons as front-facing. By default, counterclockwise polygons are taken to be front-facing.
     *
     * @see http://docs.gl/gl2/glFrontFace
     * @see http://docs.gl/gl3/glFrontFace
     * @see http://docs.gl/gl4/glFrontFace
     * @since 1.1
     * @param int $mode
     * @return void
     */
    public static function glFrontFace(int $mode): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');

        self::$ffi->glFrontFace($mode);
    }

    /**
     * Describes a perspective matrix that produces a perspective projection. The current matrix (see
     * {@see glMatrixMode}) is multiplied by this matrix and the result replaces the current matrix, as if
     * {@see glMultMatrix} were called with the following matrix as its argument:
     *
     * 2 ⁢ nearVal right - left 0 A 0 0 2 ⁢ nearVal top - bottom B 0 0 0 C D 0 0 -1 0
     *
     * A = right + left right - left
     *
     * B = top + bottom top - bottom
     *
     * C = - farVal + nearVal farVal - nearVal
     *
     * D = - 2 ⁢ farVal ⁢ nearVal farVal - nearVal
     *
     * Typically, the matrix mode is `GL_PROJECTION`, and left bottom - nearVal and right top - nearVal specify the
     * points on the near clipping plane that are mapped to the lower left and upper right corners of the window,
     * assuming that the eye is located at (0, 0, 0). - farVal specifies the location of the far clipping plane. Both
     * *`nearVal`* and *`farVal`* must be positive.
     *
     * Use {@see glPushMatrix} and {@see glPopMatrix} to save and restore the current matrix stack.
     *
     * @see http://docs.gl/gl2/glFrustum
     * @since 1.1
     * @param float $left
     * @param float $right
     * @param float $bottom
     * @param float $top
     * @param float $zNear
     * @param float $zFar
     * @return void
     */
    public static function glFrustum(float $left, float $right, float $bottom, float $top, float $zNear, float $zFar): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($left >= \PHP_FLOAT_MIN && $left <= \PHP_FLOAT_MAX, 'Argument $left overflow: C type GLdouble is required');
        assert($right >= \PHP_FLOAT_MIN && $right <= \PHP_FLOAT_MAX, 'Argument $right overflow: C type GLdouble is required');
        assert($bottom >= \PHP_FLOAT_MIN && $bottom <= \PHP_FLOAT_MAX, 'Argument $bottom overflow: C type GLdouble is required');
        assert($top >= \PHP_FLOAT_MIN && $top <= \PHP_FLOAT_MAX, 'Argument $top overflow: C type GLdouble is required');
        assert($zNear >= \PHP_FLOAT_MIN && $zNear <= \PHP_FLOAT_MAX, 'Argument $zNear overflow: C type GLdouble is required');
        assert($zFar >= \PHP_FLOAT_MIN && $zFar <= \PHP_FLOAT_MAX, 'Argument $zFar overflow: C type GLdouble is required');

        self::$ffi->glFrustum($left, $right, $bottom, $top, $zNear, $zFar);
    }

    /**
     * Returns *`n`* texture names in *`textures`*. There is no guarantee that the names form a contiguous set of
     * integers; however, it is guaranteed that none of the returned names was in use immediately before the call to
     * `glGenTextures`.
     *
     * The generated textures have no dimensionality; they assume the dimensionality of the texture target to which
     * they are first bound (see {@see glBindTexture}).
     *
     * Texture names returned by a call to `glGenTextures` are not returned by subsequent calls, unless they are
     * first deleted with {@see glDeleteTextures}.
     *
     * @see http://docs.gl/gl2/glGenTextures
     * @see http://docs.gl/gl3/glGenTextures
     * @see http://docs.gl/gl4/glGenTextures
     * @since 1.1
     * @param int $n
     * @param \FFI\CData|\FFI\CIntPtr|null $textures
     * @return void
     */
    public static function glGenTextures(int $n, ?\FFI\CData $textures): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($n >= \PHP_INT_MIN && $n <= \PHP_INT_MAX, 'Argument $n overflow: C type GLsizei is required');

        self::$ffi->glGenTextures($n, $textures);
    }

    /**
     * @since 1.1
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetBooleanv(int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glGetBooleanv($pname, $params);
    }

    /**
     * Returns in *`equation`* the four coefficients of the plane equation for *`plane`*.
     *
     * @see http://docs.gl/gl2/glGetClipPlane
     * @since 1.1
     * @param int $plane
     * @param \FFI\CData|\FFI\CFloatPtr|null $equation
     * @return void
     */
    public static function glGetClipPlane(int $plane, ?\FFI\CData $equation): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($plane >= 0 && $plane <= 4_294_967_295, 'Argument $plane overflow: C type GLenum is required');

        self::$ffi->glGetClipPlane($plane, $equation);
    }

    /**
     * @since 1.1
     * @param int $pname
     * @param \FFI\CData|\FFI\CFloatPtr|null $params
     * @return void
     */
    public static function glGetDoublev(int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glGetDoublev($pname, $params);
    }

    /**
     * @since 1.1
     * @param int $pname
     * @param \FFI\CData|\FFI\CFloatPtr|null $params
     * @return void
     */
    public static function glGetFloatv(int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glGetFloatv($pname, $params);
    }

    /**
     * @since 1.1
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetIntegerv(int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glGetIntegerv($pname, $params);
    }

    /**
     * @since 1.1
     * @param int $light
     * @param int $pname
     * @param \FFI\CData|\FFI\CFloatPtr|null $params
     * @return void
     */
    public static function glGetLightfv(int $light, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($light >= 0 && $light <= 4_294_967_295, 'Argument $light overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glGetLightfv($light, $pname, $params);
    }

    /**
     * @since 1.1
     * @param int $light
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetLightiv(int $light, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($light >= 0 && $light <= 4_294_967_295, 'Argument $light overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glGetLightiv($light, $pname, $params);
    }

    /**
     * @since 1.1
     * @param int $target
     * @param int $query
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glGetMapdv(int $target, int $query, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($query >= 0 && $query <= 4_294_967_295, 'Argument $query overflow: C type GLenum is required');

        self::$ffi->glGetMapdv($target, $query, $v);
    }

    /**
     * @since 1.1
     * @param int $target
     * @param int $query
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glGetMapfv(int $target, int $query, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($query >= 0 && $query <= 4_294_967_295, 'Argument $query overflow: C type GLenum is required');

        self::$ffi->glGetMapfv($target, $query, $v);
    }

    /**
     * @since 1.1
     * @param int $target
     * @param int $query
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glGetMapiv(int $target, int $query, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($query >= 0 && $query <= 4_294_967_295, 'Argument $query overflow: C type GLenum is required');

        self::$ffi->glGetMapiv($target, $query, $v);
    }

    /**
     * @since 1.1
     * @param int $face
     * @param int $pname
     * @param \FFI\CData|\FFI\CFloatPtr|null $params
     * @return void
     */
    public static function glGetMaterialfv(int $face, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($face >= 0 && $face <= 4_294_967_295, 'Argument $face overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glGetMaterialfv($face, $pname, $params);
    }

    /**
     * @since 1.1
     * @param int $face
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetMaterialiv(int $face, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($face >= 0 && $face <= 4_294_967_295, 'Argument $face overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glGetMaterialiv($face, $pname, $params);
    }

    /**
     * @since 1.1
     * @param int $map
     * @param \FFI\CData|\FFI\CFloatPtr|null $values
     * @return void
     */
    public static function glGetPixelMapfv(int $map, ?\FFI\CData $values): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($map >= 0 && $map <= 4_294_967_295, 'Argument $map overflow: C type GLenum is required');

        self::$ffi->glGetPixelMapfv($map, $values);
    }

    /**
     * @since 1.1
     * @param int $map
     * @param \FFI\CData|\FFI\CIntPtr|null $values
     * @return void
     */
    public static function glGetPixelMapuiv(int $map, ?\FFI\CData $values): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($map >= 0 && $map <= 4_294_967_295, 'Argument $map overflow: C type GLenum is required');

        self::$ffi->glGetPixelMapuiv($map, $values);
    }

    /**
     * @since 1.1
     * @param int $map
     * @param \FFI\CData|\FFI\CIntPtr|null $values
     * @return void
     */
    public static function glGetPixelMapusv(int $map, ?\FFI\CData $values): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($map >= 0 && $map <= 4_294_967_295, 'Argument $map overflow: C type GLenum is required');

        self::$ffi->glGetPixelMapusv($map, $values);
    }

    /**
     * Returns pointer information. *`pname`* is a symbolic constant indicating the pointer to be returned, and
     * *`params`* is a pointer to a location in which to place the returned data.
     *
     * For all *`pname`* arguments except `GL_FEEDBACK_BUFFER_POINTER` and `GL_SELECTION_BUFFER_POINTER`, if a
     * non-zero named buffer object was bound to the `GL_ARRAY_BUFFER` target (see {@see glBindBuffer}) when
     * the desired pointer was previously specified, the pointer returned is a byte offset into the buffer object's
     * data store. Buffer objects are only available in OpenGL versions 1.5 and greater.
     *
     * @see http://docs.gl/gl2/glGetPointerv
     * @see http://docs.gl/gl4/glGetPointerv
     * @since 1.1
     * @param int $pname
     * @param \FFI\CData|\FFI\CPtrPtr|null $params
     * @return void
     */
    public static function glGetPointerv(int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glGetPointerv($pname, $params);
    }

    /**
     * Returns to *`pattern`* a 32 × 32 polygon stipple pattern. The pattern is packed into memory as if
     * {@see glReadPixels} with both *height* and *width* of 32, *type* of `GL_BITMAP`, and *format* of
     * `GL_COLOR_INDEX` were called, and the stipple pattern were stored in an internal 32 × 32 color index buffer.
     * Unlike {@see glReadPixels}, however, pixel transfer operations (shift, offset, pixel map) are not
     * applied to the returned stipple image.
     *
     * If a non-zero named buffer object is bound to the `GL_PIXEL_PACK_BUFFER` target (see
     * {@see glBindBuffer}) while a polygon stipple pattern is requested, *`pattern`* is treated as a byte
     * offset into the buffer object's data store.
     *
     * @see http://docs.gl/gl2/glGetPolygonStipple
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $mask
     * @return void
     */
    public static function glGetPolygonStipple(?\FFI\CData $mask): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glGetPolygonStipple($mask);
    }

    /**
     * @since 1.1
     * @param int $target
     * @param int $pname
     * @param \FFI\CData|\FFI\CFloatPtr|null $params
     * @return void
     */
    public static function glGetTexEnvfv(int $target, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glGetTexEnvfv($target, $pname, $params);
    }

    /**
     * @since 1.1
     * @param int $target
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetTexEnviv(int $target, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glGetTexEnviv($target, $pname, $params);
    }

    /**
     * @since 1.1
     * @param int $coord
     * @param int $pname
     * @param \FFI\CData|\FFI\CFloatPtr|null $params
     * @return void
     */
    public static function glGetTexGendv(int $coord, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($coord >= 0 && $coord <= 4_294_967_295, 'Argument $coord overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glGetTexGendv($coord, $pname, $params);
    }

    /**
     * @since 1.1
     * @param int $coord
     * @param int $pname
     * @param \FFI\CData|\FFI\CFloatPtr|null $params
     * @return void
     */
    public static function glGetTexGenfv(int $coord, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($coord >= 0 && $coord <= 4_294_967_295, 'Argument $coord overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glGetTexGenfv($coord, $pname, $params);
    }

    /**
     * @since 1.1
     * @param int $coord
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetTexGeniv(int $coord, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($coord >= 0 && $coord <= 4_294_967_295, 'Argument $coord overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glGetTexGeniv($coord, $pname, $params);
    }

    /**
     * Returns a texture image into *`img`*. *`target`* specifies whether the desired texture image is one specified
     * by {@see glTexImage1D} (`GL_TEXTURE_1D`), {@see glTexImage2D} (`GL_TEXTURE_2D` or any of
     * `GL_TEXTURE_CUBE_MAP_*`), or {@see glTexImage3D} (`GL_TEXTURE_3D`). *`level`* specifies the
     * level-of-detail number of the desired image. *`format`* and *`type`* specify the format and type of the
     * desired image array. See the reference pages {@see glTexImage1D} and {@see glDrawPixels} for
     * a description of the acceptable values for the *`format`* and *`type`* parameters, respectively.
     *
     * If a non-zero named buffer object is bound to the `GL_PIXEL_PACK_BUFFER` target (see
     * {@see glBindBuffer}) while a texture image is requested, *`img`* is treated as a byte offset into the
     * buffer object's data store.
     *
     * To understand the operation of `glGetTexImage`, consider the selected internal four-component texture image to
     * be an RGBA color buffer the size of the image. The semantics of `glGetTexImage` are then identical to those of
     * {@see glReadPixels}, with the exception that no pixel transfer operations are performed, when called
     * with the same *`format`* and *`type`*, with *x* and *y* set to 0, *width* set to the width of the texture
     * image (including border if one was specified), and *height* set to 1 for 1D images, or to the height of the
     * texture image (including border if one was specified) for 2D images. Because the internal texture image is an
     * RGBA image, pixel formats `GL_COLOR_INDEX`, `GL_STENCIL_INDEX`, and `GL_DEPTH_COMPONENT` are not accepted, and
     * pixel type `GL_BITMAP` is not accepted.
     *
     * If the selected texture image does not contain four components, the following mappings are applied.
     * Single-component textures are treated as RGBA buffers with red set to the single-component value, green set to
     * 0, blue set to 0, and alpha set to 1. Two-component textures are treated as RGBA buffers with red set to the
     * value of component zero, alpha set to the value of component one, and green and blue set to 0. Finally,
     * three-component textures are treated as RGBA buffers with red set to component zero, green set to component
     * one, blue set to component two, and alpha set to 1.
     *
     * To determine the required size of *`img`*, use {@see glGetTexLevelParameter} to determine
     * the dimensions of the internal texture image, then scale the required number of pixels by the storage required
     * for each pixel, based on *`format`* and *`type`*. Be sure to take the pixel storage parameters into account,
     * especially `GL_PACK_ALIGNMENT`.
     *
     * @see http://docs.gl/gl2/glGetTexImage
     * @see http://docs.gl/gl3/glGetTexImage
     * @see http://docs.gl/gl4/glGetTexImage
     * @since 1.1
     * @param int $target
     * @param int $level
     * @param int $format
     * @param int $type
     * @param \FFI\CData|\FFI\CPtr|null $pixels
     * @return void
     */
    public static function glGetTexImage(int $target, int $level, int $format, int $type, ?\FFI\CData $pixels): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($format >= 0 && $format <= 4_294_967_295, 'Argument $format overflow: C type GLenum is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');

        self::$ffi->glGetTexImage($target, $level, $format, $type, $pixels);
    }

    /**
     * @since 1.1
     * @param int $target
     * @param int $level
     * @param int $pname
     * @param \FFI\CData|\FFI\CFloatPtr|null $params
     * @return void
     */
    public static function glGetTexLevelParameterfv(int $target, int $level, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glGetTexLevelParameterfv($target, $level, $pname, $params);
    }

    /**
     * @since 1.1
     * @param int $target
     * @param int $level
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetTexLevelParameteriv(int $target, int $level, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glGetTexLevelParameteriv($target, $level, $pname, $params);
    }

    /**
     * @since 1.1
     * @param int $target
     * @param int $pname
     * @param \FFI\CData|\FFI\CFloatPtr|null $params
     * @return void
     */
    public static function glGetTexParameterfv(int $target, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glGetTexParameterfv($target, $pname, $params);
    }

    /**
     * @since 1.1
     * @param int $target
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetTexParameteriv(int $target, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glGetTexParameteriv($target, $pname, $params);
    }

    /**
     * Certain aspects of GL behavior, when there is room for interpretation, can be controlled with hints. A hint is
     * specified with two arguments. *`target`* is a symbolic constant indicating the behavior to be controlled, and
     * *`mode`* is another symbolic constant indicating the desired behavior. The initial value for each *`target`*
     * is `GL_DONT_CARE`. *`mode`* can be one of the following:
     *
     *  - `GL_FASTEST` The most efficient option should be chosen.
     *
     *  - `GL_NICEST` The most correct, or highest quality, option should be chosen.
     *
     *  - `GL_DONT_CARE` No preference.
     *
     * Though the implementation aspects that can be hinted are well defined, the interpretation of the hints depends
     * on the implementation. The hint aspects that can be specified with *`target`*, along with suggested semantics,
     * are as follows:
     *
     *  - `GL_FOG_HINT` Indicates the accuracy of fog calculation. If per-pixel fog calculation is not efficiently
     * supported by the GL implementation, hinting `GL_DONT_CARE` or `GL_FASTEST` can result in per-vertex
     * calculation of fog effects.
     *
     *  - `GL_FRAGMENT_SHADER_DERIVATIVE_HINT` Indicates the accuracy of the derivative calculation for the GL
     * shading language fragment processing built-in functions: `dFdx`, `dFdy`, and `fwidth`.
     *
     *  - `GL_GENERATE_MIPMAP_HINT` Indicates the quality of filtering when generating mipmap images.
     *
     *  - `GL_LINE_SMOOTH_HINT` Indicates the sampling quality of antialiased lines. If a larger filter function is
     * applied, hinting `GL_NICEST` can result in more pixel fragments being generated during rasterization.
     *
     *  - `GL_PERSPECTIVE_CORRECTION_HINT` Indicates the quality of color, texture coordinate, and fog coordinate
     * interpolation. If perspective-corrected parameter interpolation is not efficiently supported by the GL
     * implementation, hinting `GL_DONT_CARE` or `GL_FASTEST` can result in simple linear interpolation of colors
     * and/or texture coordinates.
     *
     *  - `GL_POINT_SMOOTH_HINT` Indicates the sampling quality of antialiased points. If a larger filter function is
     * applied, hinting `GL_NICEST` can result in more pixel fragments being generated during rasterization.
     *
     *  - `GL_POLYGON_SMOOTH_HINT` Indicates the sampling quality of antialiased polygons. Hinting `GL_NICEST` can
     * result in more pixel fragments being generated during rasterization, if a larger filter function is applied.
     *
     *  - `GL_TEXTURE_COMPRESSION_HINT` Indicates the quality and performance of the compressing texture images.
     * Hinting `GL_FASTEST` indicates that texture images should be compressed as quickly as possible, while
     * `GL_NICEST` indicates that texture images should be compressed with as little image quality loss as possible.
     * `GL_NICEST` should be selected if the texture is to be retrieved by
     * {@see glGetCompressedTexImage} for reuse.
     *
     * @see http://docs.gl/gl2/glHint
     * @see http://docs.gl/gl3/glHint
     * @see http://docs.gl/gl4/glHint
     * @since 1.1
     * @param int $target
     * @param int $mode
     * @return void
     */
    public static function glHint(int $target, int $mode): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');

        self::$ffi->glHint($target, $mode);
    }

    /**
     * Controls the writing of individual bits in the color index buffers. The least significant n bits of *`mask`*,
     * where n is the number of bits in a color index buffer, specify a mask. Where a 1 (one) appears in the mask,
     * it's possible to write to the corresponding bit in the color index buffer (or buffers). Where a 0 (zero)
     * appears, the corresponding bit is write-protected.
     *
     * This mask is used only in color index mode, and it affects only the buffers currently selected for writing
     * (see {@see glDrawBuffer}). Initially, all bits are enabled for writing.
     *
     * @see http://docs.gl/gl2/glIndexMask
     * @since 1.1
     * @param int $mask
     * @return void
     */
    public static function glIndexMask(int $mask): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($mask >= 0 && $mask <= 4_294_967_295, 'Argument $mask overflow: C type GLuint is required');

        self::$ffi->glIndexMask($mask);
    }

    /**
     * Specifies the location and data format of an array of color indexes to use when rendering. *`type`* specifies
     * the data type of each color index and *`stride`* specifies the byte stride from one color index to the next,
     * allowing vertices and attributes to be packed into a single array or stored in separate arrays.
     *
     * If a non-zero named buffer object is bound to the `GL_ARRAY_BUFFER` target (see {@see glBindBuffer})
     * while a color index array is specified, *`pointer`* is treated as a byte offset into the buffer object's data
     * store. Also, the buffer object binding (`GL_ARRAY_BUFFER_BINDING`) is saved as color index vertex array
     * client-side state (`GL_INDEX_ARRAY_BUFFER_BINDING`).
     *
     * When a color index array is specified, *`type`*, *`stride`*, and *`pointer`* are saved as client-side state,
     * in addition to the current vertex array buffer object binding.
     *
     * To enable and disable the color index array, call {@see glEnableClientState} and
     * {@see glDisableClientState} with the argument `GL_INDEX_ARRAY`. If enabled, the color index
     * array is used when {@see glDrawArrays}, {@see glMultiDrawArrays},
     * {@see glDrawElements}, {@see glMultiDrawElements},
     * {@see glDrawRangeElements}, or {@see glArrayElement} is called.
     *
     * @see http://docs.gl/gl2/glIndexPointer
     * @since 1.1
     * @param int $type
     * @param int $stride
     * @param \FFI\CData|\FFI\CPtr|null $pointer
     * @return void
     */
    public static function glIndexPointer(int $type, int $stride, ?\FFI\CData $pointer): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');
        assert($stride >= \PHP_INT_MIN && $stride <= \PHP_INT_MAX, 'Argument $stride overflow: C type GLsizei is required');

        self::$ffi->glIndexPointer($type, $stride, $pointer);
    }

    /**
     * @since 1.1
     * @param float $c
     * @return void
     */
    public static function glIndexd(float $c): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($c >= \PHP_FLOAT_MIN && $c <= \PHP_FLOAT_MAX, 'Argument $c overflow: C type GLdouble is required');

        self::$ffi->glIndexd($c);
    }

    /**
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $c
     * @return void
     */
    public static function glIndexdv(?\FFI\CData $c): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glIndexdv($c);
    }

    /**
     * @since 1.1
     * @param float $c
     * @return void
     */
    public static function glIndexf(float $c): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($c >= -3.40282e38 && $c <= 3.40282e38, 'Argument $c overflow: C type GLfloat is required');

        self::$ffi->glIndexf($c);
    }

    /**
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $c
     * @return void
     */
    public static function glIndexfv(?\FFI\CData $c): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glIndexfv($c);
    }

    /**
     * @since 1.1
     * @param int $c
     * @return void
     */
    public static function glIndexi(int $c): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($c >= \PHP_INT_MIN && $c <= \PHP_INT_MAX, 'Argument $c overflow: C type GLint is required');

        self::$ffi->glIndexi($c);
    }

    /**
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $c
     * @return void
     */
    public static function glIndexiv(?\FFI\CData $c): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glIndexiv($c);
    }

    /**
     * @since 1.1
     * @param int $c
     * @return void
     */
    public static function glIndexs(int $c): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($c >= -32768 && $c <= 32767, 'Argument $c overflow: C type GLshort is required');

        self::$ffi->glIndexs($c);
    }

    /**
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $c
     * @return void
     */
    public static function glIndexsv(?\FFI\CData $c): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glIndexsv($c);
    }

    /**
     * @since 1.1
     * @param int $c
     * @return void
     */
    public static function glIndexub(int $c): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($c >= 0 && $c <= 255, 'Argument $c overflow: C type GLubyte is required');

        self::$ffi->glIndexub($c);
    }

    /**
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $c
     * @return void
     */
    public static function glIndexubv(?\FFI\CData $c): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glIndexubv($c);
    }

    /**
     * The name stack is used during selection mode to allow sets of rendering commands to be uniquely identified. It
     * consists of an ordered set of unsigned integers. `glInitNames` causes the name stack to be initialized to its
     * default empty state.
     *
     * The name stack is always empty while the render mode is not `GL_SELECT`. Calls to `glInitNames` while the
     * render mode is not `GL_SELECT` are ignored.
     *
     * @see http://docs.gl/gl2/glInitNames
     * @since 1.1
     * @return void
     */
    public static function glInitNames(): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glInitNames();
    }

    /**
     * Lets you specify and enable individual color, normal, texture and vertex arrays whose elements are part of a
     * larger aggregate array element. For some implementations, this is more efficient than specifying the arrays
     * separately.
     *
     * If *`stride`* is 0, the aggregate elements are stored consecutively. Otherwise, *`stride`* bytes occur between
     * the beginning of one aggregate array element and the beginning of the next aggregate array element.
     *
     * *`format`* serves as a ``key'' describing the extraction of individual arrays from the aggregate array. If
     * *`format`* contains a T, then texture coordinates are extracted from the interleaved array. If C is present,
     * color values are extracted. If N is present, normal coordinates are extracted. Vertex coordinates are always
     * extracted.
     *
     * The digits 2, 3, and 4 denote how many values are extracted. F indicates that values are extracted as
     * floating-point values. Colors may also be extracted as 4 unsigned bytes if 4UB follows the C. If a color is
     * extracted as 4 unsigned bytes, the vertex array element which follows is located at the first possible
     * floating-point aligned address.
     *
     * @see http://docs.gl/gl2/glInterleavedArrays
     * @since 1.1
     * @param int $format
     * @param int $stride
     * @param \FFI\CData|\FFI\CPtr|null $pointer
     * @return void
     */
    public static function glInterleavedArrays(int $format, int $stride, ?\FFI\CData $pointer): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($format >= 0 && $format <= 4_294_967_295, 'Argument $format overflow: C type GLenum is required');
        assert($stride >= \PHP_INT_MIN && $stride <= \PHP_INT_MAX, 'Argument $stride overflow: C type GLsizei is required');

        self::$ffi->glInterleavedArrays($format, $stride, $pointer);
    }

    /**
     * @since 1.1
     * @param int $pname
     * @param float $param
     * @return void
     */
    public static function glLightModelf(int $pname, float $param): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($param >= -3.40282e38 && $param <= 3.40282e38, 'Argument $param overflow: C type GLfloat is required');

        self::$ffi->glLightModelf($pname, $param);
    }

    /**
     * @since 1.1
     * @param int $pname
     * @param \FFI\CData|\FFI\CFloatPtr|null $params
     * @return void
     */
    public static function glLightModelfv(int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glLightModelfv($pname, $params);
    }

    /**
     * @since 1.1
     * @param int $pname
     * @param int $param
     * @return void
     */
    public static function glLightModeli(int $pname, int $param): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($param >= \PHP_INT_MIN && $param <= \PHP_INT_MAX, 'Argument $param overflow: C type GLint is required');

        self::$ffi->glLightModeli($pname, $param);
    }

    /**
     * @since 1.1
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glLightModeliv(int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glLightModeliv($pname, $params);
    }

    /**
     * @since 1.1
     * @param int $light
     * @param int $pname
     * @param float $param
     * @return void
     */
    public static function glLightf(int $light, int $pname, float $param): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($light >= 0 && $light <= 4_294_967_295, 'Argument $light overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($param >= -3.40282e38 && $param <= 3.40282e38, 'Argument $param overflow: C type GLfloat is required');

        self::$ffi->glLightf($light, $pname, $param);
    }

    /**
     * @since 1.1
     * @param int $light
     * @param int $pname
     * @param \FFI\CData|\FFI\CFloatPtr|null $params
     * @return void
     */
    public static function glLightfv(int $light, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($light >= 0 && $light <= 4_294_967_295, 'Argument $light overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glLightfv($light, $pname, $params);
    }

    /**
     * @since 1.1
     * @param int $light
     * @param int $pname
     * @param int $param
     * @return void
     */
    public static function glLighti(int $light, int $pname, int $param): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($light >= 0 && $light <= 4_294_967_295, 'Argument $light overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($param >= \PHP_INT_MIN && $param <= \PHP_INT_MAX, 'Argument $param overflow: C type GLint is required');

        self::$ffi->glLighti($light, $pname, $param);
    }

    /**
     * @since 1.1
     * @param int $light
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glLightiv(int $light, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($light >= 0 && $light <= 4_294_967_295, 'Argument $light overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glLightiv($light, $pname, $params);
    }

    /**
     * Line stippling masks out certain fragments produced by rasterization; those fragments will not be drawn. The
     * masking is achieved by using three parameters: the 16-bit line stipple pattern *`pattern`*, the repeat count
     * *`factor`*, and an integer stipple counter s.
     *
     * Counter s is reset to 0 whenever {@see glBegin} is called and before each line segment of a
     * {@see glBegin}(`GL_LINES`)/{@see glEnd} sequence is generated. It is incremented after each fragment of
     * a unit width aliased line segment is generated or after each i fragments of an i width line segment are
     * generated. The i fragments associated with count s are masked out if
     *
     * *`pattern`* bit s factor % 16
     *
     * is 0, otherwise these fragments are sent to the frame buffer. Bit zero of *`pattern`* is the least significant
     * bit.
     *
     * Antialiased lines are treated as a sequence of 1 × width rectangles for purposes of stippling. Whether
     * rectangle s is rasterized or not depends on the fragment rule described for aliased lines, counting rectangles
     * rather than groups of fragments.
     *
     * To enable and disable line stippling, call {@see glEnable} and {@see glDisable} with argument
     * `GL_LINE_STIPPLE`. When enabled, the line stipple pattern is applied as described above. When disabled, it is
     * as if the pattern were all 1's. Initially, line stippling is disabled.
     *
     * @see http://docs.gl/gl2/glLineStipple
     * @since 1.1
     * @param int $factor
     * @param int $pattern
     * @return void
     */
    public static function glLineStipple(int $factor, int $pattern): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($factor >= \PHP_INT_MIN && $factor <= \PHP_INT_MAX, 'Argument $factor overflow: C type GLint is required');
        assert($pattern >= 0 && $pattern <= 65_535, 'Argument $pattern overflow: C type GLushort is required');

        self::$ffi->glLineStipple($factor, $pattern);
    }

    /**
     * Specifies the rasterized width of both aliased and antialiased lines. Using a line width other than 1 has
     * different effects, depending on whether line antialiasing is enabled. To enable and disable line antialiasing,
     * call {@see glEnable} and {@see glDisable} with argument `GL_LINE_SMOOTH`. Line antialiasing is
     * initially disabled.
     *
     * If line antialiasing is disabled, the actual width is determined by rounding the supplied width to the nearest
     * integer. (If the rounding results in the value 0, it is as if the line width were 1.) If Δ x &gt;= Δ y , *i*
     * pixels are filled in each column that is rasterized, where *i* is the rounded value of *`width`*. Otherwise,
     * *i* pixels are filled in each row that is rasterized.
     *
     * If antialiasing is enabled, line rasterization produces a fragment for each pixel square that intersects the
     * region lying within the rectangle having width equal to the current line width, length equal to the actual
     * length of the line, and centered on the mathematical line segment. The coverage value for each fragment is the
     * window coordinate area of the intersection of the rectangular region with the corresponding pixel square. This
     * value is saved and used in the final rasterization step.
     *
     * Not all widths can be supported when line antialiasing is enabled. If an unsupported width is requested, the
     * nearest supported width is used. Only width 1 is guaranteed to be supported; others depend on the
     * implementation. Likewise, there is a range for aliased line widths as well. To query the range of supported
     * widths and the size difference between supported widths within the range, call {@see glGet} with arguments
     * `GL_ALIASED_LINE_WIDTH_RANGE`, `GL_SMOOTH_LINE_WIDTH_RANGE`, and `GL_SMOOTH_LINE_WIDTH_GRANULARITY`.
     *
     * @see http://docs.gl/gl2/glLineWidth
     * @see http://docs.gl/gl3/glLineWidth
     * @see http://docs.gl/gl4/glLineWidth
     * @since 1.1
     * @param float $width
     * @return void
     */
    public static function glLineWidth(float $width): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($width >= -3.40282e38 && $width <= 3.40282e38, 'Argument $width overflow: C type GLfloat is required');

        self::$ffi->glLineWidth($width);
    }

    /**
     * {@see glCallLists} specifies an array of offsets. Display-list names are generated by adding *`base`*
     * to each offset. Names that reference valid display lists are executed; the others are ignored.
     *
     * @see http://docs.gl/gl2/glListBase
     * @since 1.1
     * @param int $base
     * @return void
     */
    public static function glListBase(int $base): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($base >= 0 && $base <= 4_294_967_295, 'Argument $base overflow: C type GLuint is required');

        self::$ffi->glListBase($base);
    }

    /**
     * Replaces the current matrix with the identity matrix. It is semantically equivalent to calling
     * {@see glLoadMatrix} with the identity matrix
     *
     * 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0 1
     *
     * but in some cases it is more efficient.
     *
     * @see http://docs.gl/gl2/glLoadIdentity
     * @since 1.1
     * @return void
     */
    public static function glLoadIdentity(): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glLoadIdentity();
    }

    /**
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $m
     * @return void
     */
    public static function glLoadMatrixd(?\FFI\CData $m): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glLoadMatrixd($m);
    }

    /**
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $m
     * @return void
     */
    public static function glLoadMatrixf(?\FFI\CData $m): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glLoadMatrixf($m);
    }

    /**
     * The name stack is used during selection mode to allow sets of rendering commands to be uniquely identified. It
     * consists of an ordered set of unsigned integers and is initially empty.
     *
     *  - `glLoadName` causes *`name`* to replace the value on the top of the name stack.
     *
     * The name stack is always empty while the render mode is not `GL_SELECT`. Calls to `glLoadName` while the
     * render mode is not `GL_SELECT` are ignored.
     *
     * @see http://docs.gl/gl2/glLoadName
     * @since 1.1
     * @param int $name
     * @return void
     */
    public static function glLoadName(int $name): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($name >= 0 && $name <= 4_294_967_295, 'Argument $name overflow: C type GLuint is required');

        self::$ffi->glLoadName($name);
    }

    /**
     * Specifies a logical operation that, when enabled, is applied between the incoming color index or RGBA color
     * and the color index or RGBA color at the corresponding location in the frame buffer. To enable or disable the
     * logical operation, call {@see glEnable} and {@see glDisable} using the symbolic constant
     * `GL_COLOR_LOGIC_OP` for RGBA mode or `GL_INDEX_LOGIC_OP` for color index mode. The initial value is disabled
     * for both operations.
     *
     * **Opcode** **Resulting Operation** `GL_CLEAR` 0 `GL_SET` 1 `GL_COPY` s `GL_COPY_INVERTED` ~s `GL_NOOP` d
     * `GL_INVERT` ~d `GL_AND` s &amp; d `GL_NAND` ~(s &amp; d) `GL_OR` s | d `GL_NOR` ~(s | d) `GL_XOR` s ^ d
     * `GL_EQUIV` ~(s ^ d) `GL_AND_REVERSE` s &amp; ~d `GL_AND_INVERTED` ~s &amp; d `GL_OR_REVERSE` s | ~d
     * `GL_OR_INVERTED` ~s | d
     *
     * *`opcode`* is a symbolic constant chosen from the list above. In the explanation of the logical operations,
     * *s* represents the incoming color index and *d* represents the index in the frame buffer. Standard C-language
     * operators are used. As these bitwise operators suggest, the logical operation is applied independently to each
     * bit pair of the source and destination indices or colors.
     *
     * @see http://docs.gl/gl2/glLogicOp
     * @see http://docs.gl/gl3/glLogicOp
     * @see http://docs.gl/gl4/glLogicOp
     * @since 1.1
     * @param int $opcode
     * @return void
     */
    public static function glLogicOp(int $opcode): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($opcode >= 0 && $opcode <= 4_294_967_295, 'Argument $opcode overflow: C type GLenum is required');

        self::$ffi->glLogicOp($opcode);
    }

    /**
     * @since 1.1
     * @param int $target
     * @param float $u1
     * @param float $u2
     * @param int $stride
     * @param int $order
     * @param \FFI\CData|\FFI\CFloatPtr|null $points
     * @return void
     */
    public static function glMap1d(int $target, float $u1, float $u2, int $stride, int $order, ?\FFI\CData $points): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($u1 >= \PHP_FLOAT_MIN && $u1 <= \PHP_FLOAT_MAX, 'Argument $u1 overflow: C type GLdouble is required');
        assert($u2 >= \PHP_FLOAT_MIN && $u2 <= \PHP_FLOAT_MAX, 'Argument $u2 overflow: C type GLdouble is required');
        assert($stride >= \PHP_INT_MIN && $stride <= \PHP_INT_MAX, 'Argument $stride overflow: C type GLint is required');
        assert($order >= \PHP_INT_MIN && $order <= \PHP_INT_MAX, 'Argument $order overflow: C type GLint is required');

        self::$ffi->glMap1d($target, $u1, $u2, $stride, $order, $points);
    }

    /**
     * @since 1.1
     * @param int $target
     * @param float $u1
     * @param float $u2
     * @param int $stride
     * @param int $order
     * @param \FFI\CData|\FFI\CFloatPtr|null $points
     * @return void
     */
    public static function glMap1f(int $target, float $u1, float $u2, int $stride, int $order, ?\FFI\CData $points): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($u1 >= -3.40282e38 && $u1 <= 3.40282e38, 'Argument $u1 overflow: C type GLfloat is required');
        assert($u2 >= -3.40282e38 && $u2 <= 3.40282e38, 'Argument $u2 overflow: C type GLfloat is required');
        assert($stride >= \PHP_INT_MIN && $stride <= \PHP_INT_MAX, 'Argument $stride overflow: C type GLint is required');
        assert($order >= \PHP_INT_MIN && $order <= \PHP_INT_MAX, 'Argument $order overflow: C type GLint is required');

        self::$ffi->glMap1f($target, $u1, $u2, $stride, $order, $points);
    }

    /**
     * @since 1.1
     * @param int $target
     * @param float $u1
     * @param float $u2
     * @param int $ustride
     * @param int $uorder
     * @param float $v1
     * @param float $v2
     * @param int $vstride
     * @param int $vorder
     * @param \FFI\CData|\FFI\CFloatPtr|null $points
     * @return void
     */
    public static function glMap2d(
        int $target,
        float $u1,
        float $u2,
        int $ustride,
        int $uorder,
        float $v1,
        float $v2,
        int $vstride,
        int $vorder,
        ?\FFI\CData $points
    ): void {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($u1 >= \PHP_FLOAT_MIN && $u1 <= \PHP_FLOAT_MAX, 'Argument $u1 overflow: C type GLdouble is required');
        assert($u2 >= \PHP_FLOAT_MIN && $u2 <= \PHP_FLOAT_MAX, 'Argument $u2 overflow: C type GLdouble is required');
        assert($ustride >= \PHP_INT_MIN && $ustride <= \PHP_INT_MAX, 'Argument $ustride overflow: C type GLint is required');
        assert($uorder >= \PHP_INT_MIN && $uorder <= \PHP_INT_MAX, 'Argument $uorder overflow: C type GLint is required');
        assert($v1 >= \PHP_FLOAT_MIN && $v1 <= \PHP_FLOAT_MAX, 'Argument $v1 overflow: C type GLdouble is required');
        assert($v2 >= \PHP_FLOAT_MIN && $v2 <= \PHP_FLOAT_MAX, 'Argument $v2 overflow: C type GLdouble is required');
        assert($vstride >= \PHP_INT_MIN && $vstride <= \PHP_INT_MAX, 'Argument $vstride overflow: C type GLint is required');
        assert($vorder >= \PHP_INT_MIN && $vorder <= \PHP_INT_MAX, 'Argument $vorder overflow: C type GLint is required');

        self::$ffi->glMap2d($target, $u1, $u2, $ustride, $uorder, $v1, $v2, $vstride, $vorder, $points);
    }

    /**
     * @since 1.1
     * @param int $target
     * @param float $u1
     * @param float $u2
     * @param int $ustride
     * @param int $uorder
     * @param float $v1
     * @param float $v2
     * @param int $vstride
     * @param int $vorder
     * @param \FFI\CData|\FFI\CFloatPtr|null $points
     * @return void
     */
    public static function glMap2f(
        int $target,
        float $u1,
        float $u2,
        int $ustride,
        int $uorder,
        float $v1,
        float $v2,
        int $vstride,
        int $vorder,
        ?\FFI\CData $points
    ): void {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($u1 >= -3.40282e38 && $u1 <= 3.40282e38, 'Argument $u1 overflow: C type GLfloat is required');
        assert($u2 >= -3.40282e38 && $u2 <= 3.40282e38, 'Argument $u2 overflow: C type GLfloat is required');
        assert($ustride >= \PHP_INT_MIN && $ustride <= \PHP_INT_MAX, 'Argument $ustride overflow: C type GLint is required');
        assert($uorder >= \PHP_INT_MIN && $uorder <= \PHP_INT_MAX, 'Argument $uorder overflow: C type GLint is required');
        assert($v1 >= -3.40282e38 && $v1 <= 3.40282e38, 'Argument $v1 overflow: C type GLfloat is required');
        assert($v2 >= -3.40282e38 && $v2 <= 3.40282e38, 'Argument $v2 overflow: C type GLfloat is required');
        assert($vstride >= \PHP_INT_MIN && $vstride <= \PHP_INT_MAX, 'Argument $vstride overflow: C type GLint is required');
        assert($vorder >= \PHP_INT_MIN && $vorder <= \PHP_INT_MAX, 'Argument $vorder overflow: C type GLint is required');

        self::$ffi->glMap2f($target, $u1, $u2, $ustride, $uorder, $v1, $v2, $vstride, $vorder, $points);
    }

    /**
     * And {@see glEvalMesh} are used together to efficiently generate and evaluate a series of evenly-spaced
     * map domain values. {@see glEvalMesh} steps through the integer domain of a one- or two-dimensional
     * grid, whose range is the domain of the evaluation maps specified by {@see glMap1} and {@see glMap2}.
     *
     *  - `glMapGrid1` and `glMapGrid2` specify the linear grid mappings between the i (or i and j) integer grid
     * coordinates, to the u (or u and v) floating-point evaluation map coordinates. See {@see glMap1} and
     * {@see glMap2} for details of how u and v coordinates are evaluated.
     *
     *  - `glMapGrid1` specifies a single linear mapping such that integer grid coordinate 0 maps exactly to *`u1`*,
     * and integer grid coordinate *`un`* maps exactly to *`u2`*. All other integer grid coordinates i are mapped so
     * that
     *
     * u = i ⁡ u2 - u1 un + u1
     *
     *  - `glMapGrid2` specifies two such linear mappings. One maps integer grid coordinate i = 0 exactly to *`u1`*,
     * and integer grid coordinate i = un exactly to *`u2`*. The other maps integer grid coordinate j = 0 exactly to
     * *`v1`*, and integer grid coordinate j = vn exactly to *`v2`*. Other integer grid coordinates i and j are
     * mapped such that
     *
     * u = i ⁡ u2 - u1 un + u1
     *
     * v = j ⁡ v2 - v1 vn + v1
     *
     * The mappings specified by `glMapGrid` are used identically by {@see glEvalMesh} and
     * {@see glEvalPoint}.
     *
     * @see http://docs.gl/gl2/glMapGrid
     * @since 1.1
     * @param int $un
     * @param float $u1
     * @param float $u2
     * @return void
     */
    public static function glMapGrid1d(int $un, float $u1, float $u2): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($un >= \PHP_INT_MIN && $un <= \PHP_INT_MAX, 'Argument $un overflow: C type GLint is required');
        assert($u1 >= \PHP_FLOAT_MIN && $u1 <= \PHP_FLOAT_MAX, 'Argument $u1 overflow: C type GLdouble is required');
        assert($u2 >= \PHP_FLOAT_MIN && $u2 <= \PHP_FLOAT_MAX, 'Argument $u2 overflow: C type GLdouble is required');

        self::$ffi->glMapGrid1d($un, $u1, $u2);
    }

    /**
     * And {@see glEvalMesh} are used together to efficiently generate and evaluate a series of evenly-spaced
     * map domain values. {@see glEvalMesh} steps through the integer domain of a one- or two-dimensional
     * grid, whose range is the domain of the evaluation maps specified by {@see glMap1} and {@see glMap2}.
     *
     *  - `glMapGrid1` and `glMapGrid2` specify the linear grid mappings between the i (or i and j) integer grid
     * coordinates, to the u (or u and v) floating-point evaluation map coordinates. See {@see glMap1} and
     * {@see glMap2} for details of how u and v coordinates are evaluated.
     *
     *  - `glMapGrid1` specifies a single linear mapping such that integer grid coordinate 0 maps exactly to *`u1`*,
     * and integer grid coordinate *`un`* maps exactly to *`u2`*. All other integer grid coordinates i are mapped so
     * that
     *
     * u = i ⁡ u2 - u1 un + u1
     *
     *  - `glMapGrid2` specifies two such linear mappings. One maps integer grid coordinate i = 0 exactly to *`u1`*,
     * and integer grid coordinate i = un exactly to *`u2`*. The other maps integer grid coordinate j = 0 exactly to
     * *`v1`*, and integer grid coordinate j = vn exactly to *`v2`*. Other integer grid coordinates i and j are
     * mapped such that
     *
     * u = i ⁡ u2 - u1 un + u1
     *
     * v = j ⁡ v2 - v1 vn + v1
     *
     * The mappings specified by `glMapGrid` are used identically by {@see glEvalMesh} and
     * {@see glEvalPoint}.
     *
     * @see http://docs.gl/gl2/glMapGrid
     * @since 1.1
     * @param int $un
     * @param float $u1
     * @param float $u2
     * @return void
     */
    public static function glMapGrid1f(int $un, float $u1, float $u2): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($un >= \PHP_INT_MIN && $un <= \PHP_INT_MAX, 'Argument $un overflow: C type GLint is required');
        assert($u1 >= -3.40282e38 && $u1 <= 3.40282e38, 'Argument $u1 overflow: C type GLfloat is required');
        assert($u2 >= -3.40282e38 && $u2 <= 3.40282e38, 'Argument $u2 overflow: C type GLfloat is required');

        self::$ffi->glMapGrid1f($un, $u1, $u2);
    }

    /**
     * And {@see glEvalMesh} are used together to efficiently generate and evaluate a series of evenly-spaced
     * map domain values. {@see glEvalMesh} steps through the integer domain of a one- or two-dimensional
     * grid, whose range is the domain of the evaluation maps specified by {@see glMap1} and {@see glMap2}.
     *
     *  - `glMapGrid1` and `glMapGrid2` specify the linear grid mappings between the i (or i and j) integer grid
     * coordinates, to the u (or u and v) floating-point evaluation map coordinates. See {@see glMap1} and
     * {@see glMap2} for details of how u and v coordinates are evaluated.
     *
     *  - `glMapGrid1` specifies a single linear mapping such that integer grid coordinate 0 maps exactly to *`u1`*,
     * and integer grid coordinate *`un`* maps exactly to *`u2`*. All other integer grid coordinates i are mapped so
     * that
     *
     * u = i ⁡ u2 - u1 un + u1
     *
     *  - `glMapGrid2` specifies two such linear mappings. One maps integer grid coordinate i = 0 exactly to *`u1`*,
     * and integer grid coordinate i = un exactly to *`u2`*. The other maps integer grid coordinate j = 0 exactly to
     * *`v1`*, and integer grid coordinate j = vn exactly to *`v2`*. Other integer grid coordinates i and j are
     * mapped such that
     *
     * u = i ⁡ u2 - u1 un + u1
     *
     * v = j ⁡ v2 - v1 vn + v1
     *
     * The mappings specified by `glMapGrid` are used identically by {@see glEvalMesh} and
     * {@see glEvalPoint}.
     *
     * @see http://docs.gl/gl2/glMapGrid
     * @since 1.1
     * @param int $un
     * @param float $u1
     * @param float $u2
     * @param int $vn
     * @param float $v1
     * @param float $v2
     * @return void
     */
    public static function glMapGrid2d(int $un, float $u1, float $u2, int $vn, float $v1, float $v2): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($un >= \PHP_INT_MIN && $un <= \PHP_INT_MAX, 'Argument $un overflow: C type GLint is required');
        assert($u1 >= \PHP_FLOAT_MIN && $u1 <= \PHP_FLOAT_MAX, 'Argument $u1 overflow: C type GLdouble is required');
        assert($u2 >= \PHP_FLOAT_MIN && $u2 <= \PHP_FLOAT_MAX, 'Argument $u2 overflow: C type GLdouble is required');
        assert($vn >= \PHP_INT_MIN && $vn <= \PHP_INT_MAX, 'Argument $vn overflow: C type GLint is required');
        assert($v1 >= \PHP_FLOAT_MIN && $v1 <= \PHP_FLOAT_MAX, 'Argument $v1 overflow: C type GLdouble is required');
        assert($v2 >= \PHP_FLOAT_MIN && $v2 <= \PHP_FLOAT_MAX, 'Argument $v2 overflow: C type GLdouble is required');

        self::$ffi->glMapGrid2d($un, $u1, $u2, $vn, $v1, $v2);
    }

    /**
     * And {@see glEvalMesh} are used together to efficiently generate and evaluate a series of evenly-spaced
     * map domain values. {@see glEvalMesh} steps through the integer domain of a one- or two-dimensional
     * grid, whose range is the domain of the evaluation maps specified by {@see glMap1} and {@see glMap2}.
     *
     *  - `glMapGrid1` and `glMapGrid2` specify the linear grid mappings between the i (or i and j) integer grid
     * coordinates, to the u (or u and v) floating-point evaluation map coordinates. See {@see glMap1} and
     * {@see glMap2} for details of how u and v coordinates are evaluated.
     *
     *  - `glMapGrid1` specifies a single linear mapping such that integer grid coordinate 0 maps exactly to *`u1`*,
     * and integer grid coordinate *`un`* maps exactly to *`u2`*. All other integer grid coordinates i are mapped so
     * that
     *
     * u = i ⁡ u2 - u1 un + u1
     *
     *  - `glMapGrid2` specifies two such linear mappings. One maps integer grid coordinate i = 0 exactly to *`u1`*,
     * and integer grid coordinate i = un exactly to *`u2`*. The other maps integer grid coordinate j = 0 exactly to
     * *`v1`*, and integer grid coordinate j = vn exactly to *`v2`*. Other integer grid coordinates i and j are
     * mapped such that
     *
     * u = i ⁡ u2 - u1 un + u1
     *
     * v = j ⁡ v2 - v1 vn + v1
     *
     * The mappings specified by `glMapGrid` are used identically by {@see glEvalMesh} and
     * {@see glEvalPoint}.
     *
     * @see http://docs.gl/gl2/glMapGrid
     * @since 1.1
     * @param int $un
     * @param float $u1
     * @param float $u2
     * @param int $vn
     * @param float $v1
     * @param float $v2
     * @return void
     */
    public static function glMapGrid2f(int $un, float $u1, float $u2, int $vn, float $v1, float $v2): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($un >= \PHP_INT_MIN && $un <= \PHP_INT_MAX, 'Argument $un overflow: C type GLint is required');
        assert($u1 >= -3.40282e38 && $u1 <= 3.40282e38, 'Argument $u1 overflow: C type GLfloat is required');
        assert($u2 >= -3.40282e38 && $u2 <= 3.40282e38, 'Argument $u2 overflow: C type GLfloat is required');
        assert($vn >= \PHP_INT_MIN && $vn <= \PHP_INT_MAX, 'Argument $vn overflow: C type GLint is required');
        assert($v1 >= -3.40282e38 && $v1 <= 3.40282e38, 'Argument $v1 overflow: C type GLfloat is required');
        assert($v2 >= -3.40282e38 && $v2 <= 3.40282e38, 'Argument $v2 overflow: C type GLfloat is required');

        self::$ffi->glMapGrid2f($un, $u1, $u2, $vn, $v1, $v2);
    }

    /**
     * @since 1.1
     * @param int $face
     * @param int $pname
     * @param float $param
     * @return void
     */
    public static function glMaterialf(int $face, int $pname, float $param): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($face >= 0 && $face <= 4_294_967_295, 'Argument $face overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($param >= -3.40282e38 && $param <= 3.40282e38, 'Argument $param overflow: C type GLfloat is required');

        self::$ffi->glMaterialf($face, $pname, $param);
    }

    /**
     * @since 1.1
     * @param int $face
     * @param int $pname
     * @param \FFI\CData|\FFI\CFloatPtr|null $params
     * @return void
     */
    public static function glMaterialfv(int $face, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($face >= 0 && $face <= 4_294_967_295, 'Argument $face overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glMaterialfv($face, $pname, $params);
    }

    /**
     * @since 1.1
     * @param int $face
     * @param int $pname
     * @param int $param
     * @return void
     */
    public static function glMateriali(int $face, int $pname, int $param): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($face >= 0 && $face <= 4_294_967_295, 'Argument $face overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($param >= \PHP_INT_MIN && $param <= \PHP_INT_MAX, 'Argument $param overflow: C type GLint is required');

        self::$ffi->glMateriali($face, $pname, $param);
    }

    /**
     * @since 1.1
     * @param int $face
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glMaterialiv(int $face, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($face >= 0 && $face <= 4_294_967_295, 'Argument $face overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glMaterialiv($face, $pname, $params);
    }

    /**
     * Sets the current matrix mode. *`mode`* can assume one of four values:
     *
     *  - `GL_MODELVIEW` Applies subsequent matrix operations to the modelview matrix stack.
     *
     *  - `GL_PROJECTION` Applies subsequent matrix operations to the projection matrix stack.
     *
     *  - `GL_TEXTURE` Applies subsequent matrix operations to the texture matrix stack.
     *
     *  - `GL_COLOR` Applies subsequent matrix operations to the color matrix stack.
     *
     * To find out which matrix stack is currently the target of all matrix operations, call {@see glGet} with
     * argument `GL_MATRIX_MODE`. The initial value is `GL_MODELVIEW`.
     *
     * @see http://docs.gl/gl2/glMatrixMode
     * @since 1.1
     * @param int $mode
     * @return void
     */
    public static function glMatrixMode(int $mode): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');

        self::$ffi->glMatrixMode($mode);
    }

    /**
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $m
     * @return void
     */
    public static function glMultMatrixd(?\FFI\CData $m): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glMultMatrixd($m);
    }

    /**
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $m
     * @return void
     */
    public static function glMultMatrixf(?\FFI\CData $m): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glMultMatrixf($m);
    }

    /**
     * Display lists are groups of GL commands that have been stored for subsequent execution. Display lists are
     * created with `glNewList`. All subsequent commands are placed in the display list, in the order issued, until
     * {@see glEndList} is called.
     *
     *  - `glNewList` has two arguments. The first argument, *`list`*, is a positive integer that becomes the unique
     * name for the display list. Names can be created and reserved with {@see glGenLists} and tested for
     * uniqueness with {@see glIsList}. The second argument, *`mode`*, is a symbolic constant that can assume
     * one of two values:
     *
     *  - `GL_COMPILE` Commands are merely compiled.
     *
     *  - `GL_COMPILE_AND_EXECUTE` Commands are executed as they are compiled into the display list.
     *
     * Certain commands are not compiled into the display list but are executed immediately, regardless of the
     * display-list mode. These commands are {@see glAreTexturesResident},
     * {@see glColorPointer}, {@see glDeleteLists}, {@see glDeleteTextures},
     * {@see glDisableClientState}, {@see glEdgeFlagPointer},
     * {@see glEnableClientState}, {@see glFeedbackBuffer}, {@see glFinish},
     * {@see glFlush}, {@see glGenLists}, {@see glGenTextures},
     * {@see glIndexPointer}, {@see glInterleavedArrays}, {@see glIsEnabled},
     * {@see glIsList}, {@see glIsTexture}, {@see glNormalPointer},
     * {@see glPopClientAttrib}, {@see glPixelStore},
     * {@see glPushClientAttrib}, {@see glReadPixels}, {@see glRenderMode},
     * {@see glSelectBuffer}, {@see glTexCoordPointer}, {@see glVertexPointer},
     * and all of the {@see glGet} commands.
     *
     * Similarly, {@see glTexImage1D}, {@see glTexImage2D}, and {@see glTexImage3D} are
     * executed immediately and not compiled into the display list when their first argument is
     * `GL_PROXY_TEXTURE_1D`, `GL_PROXY_TEXTURE_1D`, or `GL_PROXY_TEXTURE_3D`, respectively.
     *
     * When the `ARB_imaging` extension is supported, {@see glHistogram} executes immediately when its
     * argument is `GL_PROXY_HISTOGRAM`. Similarly, {@see glColorTable} executes immediately when its first
     * argument is `GL_PROXY_COLOR_TABLE`, `GL_PROXY_POST_CONVOLUTION_COLOR_TABLE`, or
     * `GL_PROXY_POST_COLOR_MATRIX_COLOR_TABLE`.
     *
     * For OpenGL versions 1.3 and greater, or when the `ARB_multitexture` extension is supported,
     * {@see glClientActiveTexture} is not compiled into display lists, but executed immediately.
     *
     * When {@see glEndList} is encountered, the display-list definition is completed by associating the list
     * with the unique name *`list`* (specified in the `glNewList` command). If a display list with name *`list`*
     * already exists, it is replaced only when {@see glEndList} is called.
     *
     * @see http://docs.gl/gl2/glNewList
     * @since 1.1
     * @param int $list
     * @param int $mode
     * @return void
     */
    public static function glNewList(int $list, int $mode): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($list >= 0 && $list <= 4_294_967_295, 'Argument $list overflow: C type GLuint is required');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');

        self::$ffi->glNewList($list, $mode);
    }

    /**
     * The current normal is set to the given coordinates whenever `glNormal` is issued. Byte, short, or integer
     * arguments are converted to floating-point format with a linear mapping that maps the most positive
     * representable integer value to 1.0 and the most negative representable integer value to -1.0 .
     *
     * Normals specified with `glNormal` need not have unit length. If `GL_NORMALIZE` is enabled, then normals of any
     * length specified with `glNormal` are normalized after transformation. If `GL_RESCALE_NORMAL` is enabled,
     * normals are scaled by a scaling factor derived from the modelview matrix. `GL_RESCALE_NORMAL` requires that
     * the originally specified normals were of unit length, and that the modelview matrix contain only uniform
     * scales for proper results. To enable and disable normalization, call {@see glEnable} and
     * {@see glDisable} with either `GL_NORMALIZE` or `GL_RESCALE_NORMAL`. Normalization is initially disabled.
     *
     * @see http://docs.gl/gl2/glNormal
     * @since 1.1
     * @param int $nx
     * @param int $ny
     * @param int $nz
     * @return void
     */
    public static function glNormal3b(int $nx, int $ny, int $nz): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($nx >= -128 && $nx <= 127, 'Argument $nx overflow: C type GLbyte is required');
        assert($ny >= -128 && $ny <= 127, 'Argument $ny overflow: C type GLbyte is required');
        assert($nz >= -128 && $nz <= 127, 'Argument $nz overflow: C type GLbyte is required');

        self::$ffi->glNormal3b($nx, $ny, $nz);
    }

    /**
     * The current normal is set to the given coordinates whenever `glNormal` is issued. Byte, short, or integer
     * arguments are converted to floating-point format with a linear mapping that maps the most positive
     * representable integer value to 1.0 and the most negative representable integer value to -1.0 .
     *
     * Normals specified with `glNormal` need not have unit length. If `GL_NORMALIZE` is enabled, then normals of any
     * length specified with `glNormal` are normalized after transformation. If `GL_RESCALE_NORMAL` is enabled,
     * normals are scaled by a scaling factor derived from the modelview matrix. `GL_RESCALE_NORMAL` requires that
     * the originally specified normals were of unit length, and that the modelview matrix contain only uniform
     * scales for proper results. To enable and disable normalization, call {@see glEnable} and
     * {@see glDisable} with either `GL_NORMALIZE` or `GL_RESCALE_NORMAL`. Normalization is initially disabled.
     *
     * @see http://docs.gl/gl2/glNormal
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glNormal3bv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glNormal3bv($v);
    }

    /**
     * The current normal is set to the given coordinates whenever `glNormal` is issued. Byte, short, or integer
     * arguments are converted to floating-point format with a linear mapping that maps the most positive
     * representable integer value to 1.0 and the most negative representable integer value to -1.0 .
     *
     * Normals specified with `glNormal` need not have unit length. If `GL_NORMALIZE` is enabled, then normals of any
     * length specified with `glNormal` are normalized after transformation. If `GL_RESCALE_NORMAL` is enabled,
     * normals are scaled by a scaling factor derived from the modelview matrix. `GL_RESCALE_NORMAL` requires that
     * the originally specified normals were of unit length, and that the modelview matrix contain only uniform
     * scales for proper results. To enable and disable normalization, call {@see glEnable} and
     * {@see glDisable} with either `GL_NORMALIZE` or `GL_RESCALE_NORMAL`. Normalization is initially disabled.
     *
     * @see http://docs.gl/gl2/glNormal
     * @since 1.1
     * @param float $nx
     * @param float $ny
     * @param float $nz
     * @return void
     */
    public static function glNormal3d(float $nx, float $ny, float $nz): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($nx >= \PHP_FLOAT_MIN && $nx <= \PHP_FLOAT_MAX, 'Argument $nx overflow: C type GLdouble is required');
        assert($ny >= \PHP_FLOAT_MIN && $ny <= \PHP_FLOAT_MAX, 'Argument $ny overflow: C type GLdouble is required');
        assert($nz >= \PHP_FLOAT_MIN && $nz <= \PHP_FLOAT_MAX, 'Argument $nz overflow: C type GLdouble is required');

        self::$ffi->glNormal3d($nx, $ny, $nz);
    }

    /**
     * The current normal is set to the given coordinates whenever `glNormal` is issued. Byte, short, or integer
     * arguments are converted to floating-point format with a linear mapping that maps the most positive
     * representable integer value to 1.0 and the most negative representable integer value to -1.0 .
     *
     * Normals specified with `glNormal` need not have unit length. If `GL_NORMALIZE` is enabled, then normals of any
     * length specified with `glNormal` are normalized after transformation. If `GL_RESCALE_NORMAL` is enabled,
     * normals are scaled by a scaling factor derived from the modelview matrix. `GL_RESCALE_NORMAL` requires that
     * the originally specified normals were of unit length, and that the modelview matrix contain only uniform
     * scales for proper results. To enable and disable normalization, call {@see glEnable} and
     * {@see glDisable} with either `GL_NORMALIZE` or `GL_RESCALE_NORMAL`. Normalization is initially disabled.
     *
     * @see http://docs.gl/gl2/glNormal
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glNormal3dv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glNormal3dv($v);
    }

    /**
     * The current normal is set to the given coordinates whenever `glNormal` is issued. Byte, short, or integer
     * arguments are converted to floating-point format with a linear mapping that maps the most positive
     * representable integer value to 1.0 and the most negative representable integer value to -1.0 .
     *
     * Normals specified with `glNormal` need not have unit length. If `GL_NORMALIZE` is enabled, then normals of any
     * length specified with `glNormal` are normalized after transformation. If `GL_RESCALE_NORMAL` is enabled,
     * normals are scaled by a scaling factor derived from the modelview matrix. `GL_RESCALE_NORMAL` requires that
     * the originally specified normals were of unit length, and that the modelview matrix contain only uniform
     * scales for proper results. To enable and disable normalization, call {@see glEnable} and
     * {@see glDisable} with either `GL_NORMALIZE` or `GL_RESCALE_NORMAL`. Normalization is initially disabled.
     *
     * @see http://docs.gl/gl2/glNormal
     * @since 1.1
     * @param float $nx
     * @param float $ny
     * @param float $nz
     * @return void
     */
    public static function glNormal3f(float $nx, float $ny, float $nz): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($nx >= -3.40282e38 && $nx <= 3.40282e38, 'Argument $nx overflow: C type GLfloat is required');
        assert($ny >= -3.40282e38 && $ny <= 3.40282e38, 'Argument $ny overflow: C type GLfloat is required');
        assert($nz >= -3.40282e38 && $nz <= 3.40282e38, 'Argument $nz overflow: C type GLfloat is required');

        self::$ffi->glNormal3f($nx, $ny, $nz);
    }

    /**
     * The current normal is set to the given coordinates whenever `glNormal` is issued. Byte, short, or integer
     * arguments are converted to floating-point format with a linear mapping that maps the most positive
     * representable integer value to 1.0 and the most negative representable integer value to -1.0 .
     *
     * Normals specified with `glNormal` need not have unit length. If `GL_NORMALIZE` is enabled, then normals of any
     * length specified with `glNormal` are normalized after transformation. If `GL_RESCALE_NORMAL` is enabled,
     * normals are scaled by a scaling factor derived from the modelview matrix. `GL_RESCALE_NORMAL` requires that
     * the originally specified normals were of unit length, and that the modelview matrix contain only uniform
     * scales for proper results. To enable and disable normalization, call {@see glEnable} and
     * {@see glDisable} with either `GL_NORMALIZE` or `GL_RESCALE_NORMAL`. Normalization is initially disabled.
     *
     * @see http://docs.gl/gl2/glNormal
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glNormal3fv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glNormal3fv($v);
    }

    /**
     * The current normal is set to the given coordinates whenever `glNormal` is issued. Byte, short, or integer
     * arguments are converted to floating-point format with a linear mapping that maps the most positive
     * representable integer value to 1.0 and the most negative representable integer value to -1.0 .
     *
     * Normals specified with `glNormal` need not have unit length. If `GL_NORMALIZE` is enabled, then normals of any
     * length specified with `glNormal` are normalized after transformation. If `GL_RESCALE_NORMAL` is enabled,
     * normals are scaled by a scaling factor derived from the modelview matrix. `GL_RESCALE_NORMAL` requires that
     * the originally specified normals were of unit length, and that the modelview matrix contain only uniform
     * scales for proper results. To enable and disable normalization, call {@see glEnable} and
     * {@see glDisable} with either `GL_NORMALIZE` or `GL_RESCALE_NORMAL`. Normalization is initially disabled.
     *
     * @see http://docs.gl/gl2/glNormal
     * @since 1.1
     * @param int $nx
     * @param int $ny
     * @param int $nz
     * @return void
     */
    public static function glNormal3i(int $nx, int $ny, int $nz): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($nx >= \PHP_INT_MIN && $nx <= \PHP_INT_MAX, 'Argument $nx overflow: C type GLint is required');
        assert($ny >= \PHP_INT_MIN && $ny <= \PHP_INT_MAX, 'Argument $ny overflow: C type GLint is required');
        assert($nz >= \PHP_INT_MIN && $nz <= \PHP_INT_MAX, 'Argument $nz overflow: C type GLint is required');

        self::$ffi->glNormal3i($nx, $ny, $nz);
    }

    /**
     * The current normal is set to the given coordinates whenever `glNormal` is issued. Byte, short, or integer
     * arguments are converted to floating-point format with a linear mapping that maps the most positive
     * representable integer value to 1.0 and the most negative representable integer value to -1.0 .
     *
     * Normals specified with `glNormal` need not have unit length. If `GL_NORMALIZE` is enabled, then normals of any
     * length specified with `glNormal` are normalized after transformation. If `GL_RESCALE_NORMAL` is enabled,
     * normals are scaled by a scaling factor derived from the modelview matrix. `GL_RESCALE_NORMAL` requires that
     * the originally specified normals were of unit length, and that the modelview matrix contain only uniform
     * scales for proper results. To enable and disable normalization, call {@see glEnable} and
     * {@see glDisable} with either `GL_NORMALIZE` or `GL_RESCALE_NORMAL`. Normalization is initially disabled.
     *
     * @see http://docs.gl/gl2/glNormal
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glNormal3iv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glNormal3iv($v);
    }

    /**
     * The current normal is set to the given coordinates whenever `glNormal` is issued. Byte, short, or integer
     * arguments are converted to floating-point format with a linear mapping that maps the most positive
     * representable integer value to 1.0 and the most negative representable integer value to -1.0 .
     *
     * Normals specified with `glNormal` need not have unit length. If `GL_NORMALIZE` is enabled, then normals of any
     * length specified with `glNormal` are normalized after transformation. If `GL_RESCALE_NORMAL` is enabled,
     * normals are scaled by a scaling factor derived from the modelview matrix. `GL_RESCALE_NORMAL` requires that
     * the originally specified normals were of unit length, and that the modelview matrix contain only uniform
     * scales for proper results. To enable and disable normalization, call {@see glEnable} and
     * {@see glDisable} with either `GL_NORMALIZE` or `GL_RESCALE_NORMAL`. Normalization is initially disabled.
     *
     * @see http://docs.gl/gl2/glNormal
     * @since 1.1
     * @param int $nx
     * @param int $ny
     * @param int $nz
     * @return void
     */
    public static function glNormal3s(int $nx, int $ny, int $nz): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($nx >= -32768 && $nx <= 32767, 'Argument $nx overflow: C type GLshort is required');
        assert($ny >= -32768 && $ny <= 32767, 'Argument $ny overflow: C type GLshort is required');
        assert($nz >= -32768 && $nz <= 32767, 'Argument $nz overflow: C type GLshort is required');

        self::$ffi->glNormal3s($nx, $ny, $nz);
    }

    /**
     * The current normal is set to the given coordinates whenever `glNormal` is issued. Byte, short, or integer
     * arguments are converted to floating-point format with a linear mapping that maps the most positive
     * representable integer value to 1.0 and the most negative representable integer value to -1.0 .
     *
     * Normals specified with `glNormal` need not have unit length. If `GL_NORMALIZE` is enabled, then normals of any
     * length specified with `glNormal` are normalized after transformation. If `GL_RESCALE_NORMAL` is enabled,
     * normals are scaled by a scaling factor derived from the modelview matrix. `GL_RESCALE_NORMAL` requires that
     * the originally specified normals were of unit length, and that the modelview matrix contain only uniform
     * scales for proper results. To enable and disable normalization, call {@see glEnable} and
     * {@see glDisable} with either `GL_NORMALIZE` or `GL_RESCALE_NORMAL`. Normalization is initially disabled.
     *
     * @see http://docs.gl/gl2/glNormal
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glNormal3sv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glNormal3sv($v);
    }

    /**
     * Specifies the location and data format of an array of normals to use when rendering. *`type`* specifies the
     * data type of each normal coordinate, and *`stride`* specifies the byte stride from one normal to the next,
     * allowing vertices and attributes to be packed into a single array or stored in separate arrays. (Single-array
     * storage may be more efficient on some implementations; see {@see glInterleavedArrays}.)
     *
     * If a non-zero named buffer object is bound to the `GL_ARRAY_BUFFER` target (see {@see glBindBuffer})
     * while a normal array is specified, *`pointer`* is treated as a byte offset into the buffer object's data
     * store. Also, the buffer object binding (`GL_ARRAY_BUFFER_BINDING`) is saved as normal vertex array client-side
     * state (`GL_NORMAL_ARRAY_BUFFER_BINDING`).
     *
     * When a normal array is specified, *`type`*, *`stride`*, and *`pointer`* are saved as client-side state, in
     * addition to the current vertex array buffer object binding.
     *
     * To enable and disable the normal array, call {@see glEnableClientState} and
     * {@see glDisableClientState} with the argument `GL_NORMAL_ARRAY`. If enabled, the normal array
     * is used when {@see glDrawArrays}, {@see glMultiDrawArrays},
     * {@see glDrawElements}, {@see glMultiDrawElements},
     * {@see glDrawRangeElements}, or {@see glArrayElement} is called.
     *
     * @see http://docs.gl/gl2/glNormalPointer
     * @since 1.1
     * @param int $type
     * @param int $stride
     * @param \FFI\CData|\FFI\CPtr|null $pointer
     * @return void
     */
    public static function glNormalPointer(int $type, int $stride, ?\FFI\CData $pointer): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');
        assert($stride >= \PHP_INT_MIN && $stride <= \PHP_INT_MAX, 'Argument $stride overflow: C type GLsizei is required');

        self::$ffi->glNormalPointer($type, $stride, $pointer);
    }

    /**
     * Describes a transformation that produces a parallel projection. The current matrix (see
     * {@see glMatrixMode}) is multiplied by this matrix and the result replaces the current matrix, as if
     * {@see glMultMatrix} were called with the following matrix as its argument:
     *
     * 2 right - left 0 0 t x 0 2 top - bottom 0 t y 0 0 -2 farVal - nearVal t z 0 0 0 1
     *
     * where
     *
     * t x = - right + left right - left
     *
     * t y = - top + bottom top - bottom
     *
     * t z = - farVal + nearVal farVal - nearVal
     *
     * Typically, the matrix mode is `GL_PROJECTION`, and left bottom - nearVal and right top - nearVal specify the
     * points on the near clipping plane that are mapped to the lower left and upper right corners of the window,
     * respectively, assuming that the eye is located at (0, 0, 0). - farVal specifies the location of the far
     * clipping plane. Both *`nearVal`* and *`farVal`* can be either positive or negative.
     *
     * Use {@see glPushMatrix} and {@see glPopMatrix} to save and restore the current matrix stack.
     *
     * @see http://docs.gl/gl2/glOrtho
     * @since 1.1
     * @param float $left
     * @param float $right
     * @param float $bottom
     * @param float $top
     * @param float $zNear
     * @param float $zFar
     * @return void
     */
    public static function glOrtho(float $left, float $right, float $bottom, float $top, float $zNear, float $zFar): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($left >= \PHP_FLOAT_MIN && $left <= \PHP_FLOAT_MAX, 'Argument $left overflow: C type GLdouble is required');
        assert($right >= \PHP_FLOAT_MIN && $right <= \PHP_FLOAT_MAX, 'Argument $right overflow: C type GLdouble is required');
        assert($bottom >= \PHP_FLOAT_MIN && $bottom <= \PHP_FLOAT_MAX, 'Argument $bottom overflow: C type GLdouble is required');
        assert($top >= \PHP_FLOAT_MIN && $top <= \PHP_FLOAT_MAX, 'Argument $top overflow: C type GLdouble is required');
        assert($zNear >= \PHP_FLOAT_MIN && $zNear <= \PHP_FLOAT_MAX, 'Argument $zNear overflow: C type GLdouble is required');
        assert($zFar >= \PHP_FLOAT_MIN && $zFar <= \PHP_FLOAT_MAX, 'Argument $zFar overflow: C type GLdouble is required');

        self::$ffi->glOrtho($left, $right, $bottom, $top, $zNear, $zFar);
    }

    /**
     * Feedback is a GL render mode. The mode is selected by calling {@see glRenderMode} with `GL_FEEDBACK`.
     * When the GL is in feedback mode, no pixels are produced by rasterization. Instead, information about
     * primitives that would have been rasterized is fed back to the application using the GL. See the
     * {@see glFeedbackBuffer} reference page for a description of the feedback buffer and the values in
     * it.
     *
     *  - `glPassThrough` inserts a user-defined marker in the feedback buffer when it is executed in feedback mode.
     * *`token`* is returned as if it were a primitive; it is indicated with its own unique identifying value:
     * `GL_PASS_THROUGH_TOKEN`. The order of `glPassThrough` commands with respect to the specification of graphics
     * primitives is maintained.
     *
     * @see http://docs.gl/gl2/glPassThrough
     * @since 1.1
     * @param float $token
     * @return void
     */
    public static function glPassThrough(float $token): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($token >= -3.40282e38 && $token <= 3.40282e38, 'Argument $token overflow: C type GLfloat is required');

        self::$ffi->glPassThrough($token);
    }

    /**
     * @since 1.1
     * @param int $map
     * @param int $mapsize
     * @param \FFI\CData|\FFI\CFloatPtr|null $values
     * @return void
     */
    public static function glPixelMapfv(int $map, int $mapsize, ?\FFI\CData $values): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($map >= 0 && $map <= 4_294_967_295, 'Argument $map overflow: C type GLenum is required');
        assert($mapsize >= \PHP_INT_MIN && $mapsize <= \PHP_INT_MAX, 'Argument $mapsize overflow: C type GLsizei is required');

        self::$ffi->glPixelMapfv($map, $mapsize, $values);
    }

    /**
     * @since 1.1
     * @param int $map
     * @param int $mapsize
     * @param \FFI\CData|\FFI\CIntPtr|null $values
     * @return void
     */
    public static function glPixelMapuiv(int $map, int $mapsize, ?\FFI\CData $values): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($map >= 0 && $map <= 4_294_967_295, 'Argument $map overflow: C type GLenum is required');
        assert($mapsize >= \PHP_INT_MIN && $mapsize <= \PHP_INT_MAX, 'Argument $mapsize overflow: C type GLsizei is required');

        self::$ffi->glPixelMapuiv($map, $mapsize, $values);
    }

    /**
     * @since 1.1
     * @param int $map
     * @param int $mapsize
     * @param \FFI\CData|\FFI\CIntPtr|null $values
     * @return void
     */
    public static function glPixelMapusv(int $map, int $mapsize, ?\FFI\CData $values): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($map >= 0 && $map <= 4_294_967_295, 'Argument $map overflow: C type GLenum is required');
        assert($mapsize >= \PHP_INT_MIN && $mapsize <= \PHP_INT_MAX, 'Argument $mapsize overflow: C type GLsizei is required');

        self::$ffi->glPixelMapusv($map, $mapsize, $values);
    }

    /**
     * @since 1.1
     * @param int $pname
     * @param float $param
     * @return void
     */
    public static function glPixelStoref(int $pname, float $param): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($param >= -3.40282e38 && $param <= 3.40282e38, 'Argument $param overflow: C type GLfloat is required');

        self::$ffi->glPixelStoref($pname, $param);
    }

    /**
     * @since 1.1
     * @param int $pname
     * @param int $param
     * @return void
     */
    public static function glPixelStorei(int $pname, int $param): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($param >= \PHP_INT_MIN && $param <= \PHP_INT_MAX, 'Argument $param overflow: C type GLint is required');

        self::$ffi->glPixelStorei($pname, $param);
    }

    /**
     * @since 1.1
     * @param int $pname
     * @param float $param
     * @return void
     */
    public static function glPixelTransferf(int $pname, float $param): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($param >= -3.40282e38 && $param <= 3.40282e38, 'Argument $param overflow: C type GLfloat is required');

        self::$ffi->glPixelTransferf($pname, $param);
    }

    /**
     * @since 1.1
     * @param int $pname
     * @param int $param
     * @return void
     */
    public static function glPixelTransferi(int $pname, int $param): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($param >= \PHP_INT_MIN && $param <= \PHP_INT_MAX, 'Argument $param overflow: C type GLint is required');

        self::$ffi->glPixelTransferi($pname, $param);
    }

    /**
     * Specifies values for the x and y zoom factors. During the execution of {@see glDrawPixels} or
     * {@see glCopyPixels}, if ( xr , yr ) is the current raster position, and a given element is in the mth
     * row and nth column of the pixel rectangle, then pixels whose centers are in the rectangle with corners at
     *
     * ( xr + n · xfactor , yr + m · yfactor )
     *
     * ( xr + n + 1 · xfactor , yr + m + 1 · yfactor )
     *
     * are candidates for replacement. Any pixel whose center lies on the bottom or left edge of this rectangular
     * region is also modified.
     *
     * Pixel zoom factors are not limited to positive values. Negative zoom factors reflect the resulting image about
     * the current raster position.
     *
     * @see http://docs.gl/gl2/glPixelZoom
     * @since 1.1
     * @param float $xfactor
     * @param float $yfactor
     * @return void
     */
    public static function glPixelZoom(float $xfactor, float $yfactor): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($xfactor >= -3.40282e38 && $xfactor <= 3.40282e38, 'Argument $xfactor overflow: C type GLfloat is required');
        assert($yfactor >= -3.40282e38 && $yfactor <= 3.40282e38, 'Argument $yfactor overflow: C type GLfloat is required');

        self::$ffi->glPixelZoom($xfactor, $yfactor);
    }

    /**
     * Specifies the rasterized diameter of both aliased and antialiased points. Using a point size other than 1 has
     * different effects, depending on whether point antialiasing is enabled. To enable and disable point
     * antialiasing, call {@see glEnable} and {@see glDisable} with argument `GL_POINT_SMOOTH`. Point
     * antialiasing is initially disabled.
     *
     * The specified point size is multiplied with a distance attenuation factor and clamped to the specified point
     * size range, and further clamped to the implementation-dependent point size range to produce the derived point
     * size using
     *
     * pointSize = clamp ⁢ size × 1 a + b × d + c × d 2
     *
     * where d is the eye-coordinate distance from the eye to the vertex, and a, b, and c are the distance
     * attenuation coefficients (see {@see glPointParameter}).
     *
     * If multisampling is disabled, the computed point size is used as the point's width.
     *
     * If multisampling is enabled, the point may be faded by modifying the point alpha value (see
     * {@see glSampleCoverage}) instead of allowing the point width to go below a given threshold (see
     * {@see glPointParameter}). In this case, the width is further modified in the following manner:
     *
     * pointWidth = pointSize threshold ⁢ pointSize &gt;= threshold otherwise
     *
     * The point alpha value is modified by computing:
     *
     * pointAlpha = 1 pointSize threshold 2 ⁢ pointSize &gt;= threshold otherwise
     *
     * If point antialiasing is disabled, the actual size is determined by rounding the supplied size to the nearest
     * integer. (If the rounding results in the value 0, it is as if the point size were 1.) If the rounded size is
     * odd, then the center point ( x , y ) of the pixel fragment that represents the point is computed as
     *
     * x w + .5 y w + .5
     *
     * where w subscripts indicate window coordinates. All pixels that lie within the square grid of the rounded size
     * centered at ( x , y ) make up the fragment. If the size is even, the center point is
     *
     * x w + .5 y w + .5
     *
     * and the rasterized fragment's centers are the half-integer window coordinates within the square of the rounded
     * size centered at x y . All pixel fragments produced in rasterizing a nonantialiased point are assigned the
     * same associated data, that of the vertex corresponding to the point.
     *
     * If antialiasing is enabled, then point rasterization produces a fragment for each pixel square that intersects
     * the region lying within the circle having diameter equal to the current point size and centered at the point's
     * x w y w . The coverage value for each fragment is the window coordinate area of the intersection of the
     * circular region with the corresponding pixel square. This value is saved and used in the final rasterization
     * step. The data associated with each fragment is the data associated with the point being rasterized.
     *
     * Not all sizes are supported when point antialiasing is enabled. If an unsupported size is requested, the
     * nearest supported size is used. Only size 1 is guaranteed to be supported; others depend on the
     * implementation. To query the range of supported sizes and the size difference between supported sizes within
     * the range, call {@see glGet} with arguments `GL_SMOOTH_POINT_SIZE_RANGE` and
     * `GL_SMOOTH_POINT_SIZE_GRANULARITY`. For aliased points, query the supported ranges and granularity with
     * {@see glGet} with arguments `GL_ALIASED_POINT_SIZE_RANGE`.
     *
     * @see http://docs.gl/gl2/glPointSize
     * @see http://docs.gl/gl3/glPointSize
     * @see http://docs.gl/gl4/glPointSize
     * @since 1.1
     * @param float $size
     * @return void
     */
    public static function glPointSize(float $size): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($size >= -3.40282e38 && $size <= 3.40282e38, 'Argument $size overflow: C type GLfloat is required');

        self::$ffi->glPointSize($size);
    }

    /**
     * Controls the interpretation of polygons for rasterization. *`face`* describes which polygons *`mode`* applies
     * to: front-facing polygons (`GL_FRONT`), back-facing polygons (`GL_BACK`), or both (`GL_FRONT_AND_BACK`). The
     * polygon mode affects only the final rasterization of polygons. In particular, a polygon's vertices are lit and
     * the polygon is clipped and possibly culled before these modes are applied.
     *
     * Three modes are defined and can be specified in *`mode`*:
     *
     *  - `GL_POINT` Polygon vertices that are marked as the start of a boundary edge are drawn as points. Point
     * attributes such as `GL_POINT_SIZE` and `GL_POINT_SMOOTH` control the rasterization of the points. Polygon
     * rasterization attributes other than `GL_POLYGON_MODE` have no effect.
     *
     *  - `GL_LINE` Boundary edges of the polygon are drawn as line segments. They are treated as connected line
     * segments for line stippling; the line stipple counter and pattern are not reset between segments (see
     * {@see glLineStipple}). Line attributes such as `GL_LINE_WIDTH` and `GL_LINE_SMOOTH` control the
     * rasterization of the lines. Polygon rasterization attributes other than `GL_POLYGON_MODE` have no effect.
     *
     *  - `GL_FILL` The interior of the polygon is filled. Polygon attributes such as `GL_POLYGON_STIPPLE` and
     * `GL_POLYGON_SMOOTH` control the rasterization of the polygon.
     *
     * @see http://docs.gl/gl2/glPolygonMode
     * @see http://docs.gl/gl3/glPolygonMode
     * @see http://docs.gl/gl4/glPolygonMode
     * @since 1.1
     * @param int $face
     * @param int $mode
     * @return void
     */
    public static function glPolygonMode(int $face, int $mode): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($face >= 0 && $face <= 4_294_967_295, 'Argument $face overflow: C type GLenum is required');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');

        self::$ffi->glPolygonMode($face, $mode);
    }

    /**
     * When `GL_POLYGON_OFFSET_FILL`, `GL_POLYGON_OFFSET_LINE`, or `GL_POLYGON_OFFSET_POINT` is enabled, each
     * fragment's *depth* value will be offset after it is interpolated from the *depth* values of the appropriate
     * vertices. The value of the offset is factor × DZ + r × units , where DZ is a measurement of the change in
     * depth relative to the screen area of the polygon, and r is the smallest value that is guaranteed to produce a
     * resolvable offset for a given implementation. The offset is added before the depth test is performed and
     * before the value is written into the depth buffer.
     *
     *  - `glPolygonOffset` is useful for rendering hidden-line images, for applying decals to surfaces, and for
     * rendering solids with highlighted edges.
     *
     * @see http://docs.gl/gl2/glPolygonOffset
     * @see http://docs.gl/gl3/glPolygonOffset
     * @see http://docs.gl/gl4/glPolygonOffset
     * @since 1.1
     * @param float $factor
     * @param float $units
     * @return void
     */
    public static function glPolygonOffset(float $factor, float $units): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($factor >= -3.40282e38 && $factor <= 3.40282e38, 'Argument $factor overflow: C type GLfloat is required');
        assert($units >= -3.40282e38 && $units <= 3.40282e38, 'Argument $units overflow: C type GLfloat is required');

        self::$ffi->glPolygonOffset($factor, $units);
    }

    /**
     * Polygon stippling, like line stippling (see {@see glLineStipple}), masks out certain fragments
     * produced by rasterization, creating a pattern. Stippling is independent of polygon antialiasing.
     *
     * *`pattern`* is a pointer to a 32 × 32 stipple pattern that is stored in memory just like the pixel data
     * supplied to a {@see glDrawPixels} call with height and *width* both equal to 32, a pixel format of
     * `GL_COLOR_INDEX`, and data type of `GL_BITMAP`. That is, the stipple pattern is represented as a 32 × 32
     * array of 1-bit color indices packed in unsigned bytes. {@see glPixelStore} parameters like
     * `GL_UNPACK_SWAP_BYTES` and `GL_UNPACK_LSB_FIRST` affect the assembling of the bits into a stipple pattern.
     * Pixel transfer operations (shift, offset, pixel map) are not applied to the stipple image, however.
     *
     * If a non-zero named buffer object is bound to the `GL_PIXEL_UNPACK_BUFFER` target (see
     * {@see glBindBuffer}) while a stipple pattern is specified, *`pattern`* is treated as a byte offset
     * into the buffer object's data store.
     *
     * To enable and disable polygon stippling, call {@see glEnable} and {@see glDisable} with argument
     * `GL_POLYGON_STIPPLE`. Polygon stippling is initially disabled. If it's enabled, a rasterized polygon fragment
     * with window coordinates x w and y w is sent to the next stage of the GL if and only if the ( x w % 32 )th bit
     * in the ( y w % 32 )th row of the stipple pattern is 1 (one). When polygon stippling is disabled, it is as if
     * the stipple pattern consists of all 1's.
     *
     * @see http://docs.gl/gl2/glPolygonStipple
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $mask
     * @return void
     */
    public static function glPolygonStipple(?\FFI\CData $mask): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glPolygonStipple($mask);
    }

    /**
     * @see http://docs.gl/gl2/glPopAttrib
     * @since 1.1
     * @return void
     */
    public static function glPopAttrib(): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glPopAttrib();
    }

    /**
     * @see http://docs.gl/gl2/glPopClientAttrib
     * @since 1.1
     * @return void
     */
    public static function glPopClientAttrib(): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glPopClientAttrib();
    }

    /**
     * @see http://docs.gl/gl2/glPopMatrix
     * @since 1.1
     * @return void
     */
    public static function glPopMatrix(): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glPopMatrix();
    }

    /**
     * @see http://docs.gl/gl2/glPopName
     * @since 1.1
     * @return void
     */
    public static function glPopName(): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glPopName();
    }

    /**
     * Assigns the *`n`* texture priorities given in *`priorities`* to the *`n`* textures named in *`textures`*.
     *
     * The GL establishes a ``working set'' of textures that are resident in texture memory. These textures may be
     * bound to a texture target much more efficiently than textures that are not resident. By specifying a priority
     * for each texture, `glPrioritizeTextures` allows applications to guide the GL implementation in determining
     * which textures should be resident.
     *
     * The priorities given in *`priorities`* are clamped to the range 0 1 before they are assigned. 0 indicates the
     * lowest priority; textures with priority 0 are least likely to be resident. 1 indicates the highest priority;
     * textures with priority 1 are most likely to be resident. However, textures are not guaranteed to be resident
     * until they are used.
     *
     *  - `glPrioritizeTextures` silently ignores attempts to prioritize texture 0 or any texture name that does not
     * correspond to an existing texture.
     *
     *  - `glPrioritizeTextures` does not require that any of the textures named by *`textures`* be bound to a
     * texture target. {@see glTexParameter} may also be used to set a texture's priority, but only if the
     * texture is currently bound. This is the only way to set the priority of a default texture.
     *
     * @see http://docs.gl/gl2/glPrioritizeTextures
     * @since 1.1
     * @param int $n
     * @param \FFI\CData|\FFI\CIntPtr|null $textures
     * @param \FFI\CData|\FFI\CFloatPtr|null $priorities
     * @return void
     */
    public static function glPrioritizeTextures(int $n, ?\FFI\CData $textures, ?\FFI\CData $priorities): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($n >= \PHP_INT_MIN && $n <= \PHP_INT_MAX, 'Argument $n overflow: C type GLsizei is required');

        self::$ffi->glPrioritizeTextures($n, $textures, $priorities);
    }

    /**
     * Takes one argument, a mask that indicates which groups of state variables to save on the attribute stack.
     * Symbolic constants are used to set bits in the mask. *`mask`* is typically constructed by specifying the
     * bitwise-or of several of these constants together. The special mask `GL_ALL_ATTRIB_BITS` can be used to save
     * all stackable states.
     *
     * The symbolic mask constants and their associated GL state are as follows (the second column lists which
     * attributes are saved):
     *
     *  - `GL_ACCUM_BUFFER_BIT` Accumulation buffer clear value `GL_COLOR_BUFFER_BIT` `GL_ALPHA_TEST` enable bit
     * Alpha test function and reference value `GL_BLEND` enable bit Blending source and destination functions
     * Constant blend color Blending equation `GL_DITHER` enable bit `GL_DRAW_BUFFER` setting `GL_COLOR_LOGIC_OP`
     * enable bit `GL_INDEX_LOGIC_OP` enable bit Logic op function Color mode and index mode clear values Color mode
     * and index mode writemasks `GL_CURRENT_BIT` Current RGBA color Current color index Current normal vector
     * Current texture coordinates Current raster position `GL_CURRENT_RASTER_POSITION_VALID` flag RGBA color
     * associated with current raster position Color index associated with current raster position Texture
     * coordinates associated with current raster position `GL_EDGE_FLAG` flag `GL_DEPTH_BUFFER_BIT` `GL_DEPTH_TEST`
     * enable bit Depth buffer test function Depth buffer clear value `GL_DEPTH_WRITEMASK` enable bit `GL_ENABLE_BIT`
     * `GL_ALPHA_TEST` flag `GL_AUTO_NORMAL` flag `GL_BLEND` flag Enable bits for the user-definable clipping planes
     * `GL_COLOR_MATERIAL` `GL_CULL_FACE` flag `GL_DEPTH_TEST` flag `GL_DITHER` flag `GL_FOG` flag `GL_LIGHT`*i*
     * where `0` &lt;= *i* &lt; `GL_MAX_LIGHTS` `GL_LIGHTING` flag `GL_LINE_SMOOTH` flag `GL_LINE_STIPPLE` flag
     * `GL_COLOR_LOGIC_OP` flag `GL_INDEX_LOGIC_OP` flag `GL_MAP1_`*x* where *x* is a map type `GL_MAP2_`*x* where
     * *x* is a map type `GL_MULTISAMPLE` flag `GL_NORMALIZE` flag `GL_POINT_SMOOTH` flag `GL_POLYGON_OFFSET_LINE`
     * flag `GL_POLYGON_OFFSET_FILL` flag `GL_POLYGON_OFFSET_POINT` flag `GL_POLYGON_SMOOTH` flag
     * `GL_POLYGON_STIPPLE` flag `GL_SAMPLE_ALPHA_TO_COVERAGE` flag `GL_SAMPLE_ALPHA_TO_ONE` flag
     * `GL_SAMPLE_COVERAGE` flag `GL_SCISSOR_TEST` flag `GL_STENCIL_TEST` flag `GL_TEXTURE_1D` flag `GL_TEXTURE_2D`
     * flag `GL_TEXTURE_3D` flag Flags `GL_TEXTURE_GEN_`*x* where *x* is S, T, R, or Q `GL_EVAL_BIT` `GL_MAP1_`*x*
     * enable bits, where *x* is a map type `GL_MAP2_`*x* enable bits, where *x* is a map type 1D grid endpoints and
     * divisions 2D grid endpoints and divisions `GL_AUTO_NORMAL` enable bit `GL_FOG_BIT` `GL_FOG` enable bit Fog
     * color Fog density Linear fog start Linear fog end Fog index `GL_FOG_MODE` value `GL_HINT_BIT`
     * `GL_PERSPECTIVE_CORRECTION_HINT` setting `GL_POINT_SMOOTH_HINT` setting `GL_LINE_SMOOTH_HINT` setting
     * `GL_POLYGON_SMOOTH_HINT` setting `GL_FOG_HINT` setting `GL_GENERATE_MIPMAP_HINT` setting
     * `GL_TEXTURE_COMPRESSION_HINT` setting `GL_LIGHTING_BIT` `GL_COLOR_MATERIAL` enable bit
     * `GL_COLOR_MATERIAL_FACE` value Color material parameters that are tracking the current color Ambient scene
     * color `GL_LIGHT_MODEL_LOCAL_VIEWER` value `GL_LIGHT_MODEL_TWO_SIDE` setting `GL_LIGHTING` enable bit Enable
     * bit for each light Ambient, diffuse, and specular intensity for each light Direction, position, exponent, and
     * cutoff angle for each light Constant, linear, and quadratic attenuation factors for each light Ambient,
     * diffuse, specular, and emissive color for each material Ambient, diffuse, and specular color indices for each
     * material Specular exponent for each material `GL_SHADE_MODEL` setting `GL_LINE_BIT` `GL_LINE_SMOOTH` flag
     * `GL_LINE_STIPPLE` enable bit Line stipple pattern and repeat counter Line width `GL_LIST_BIT` `GL_LIST_BASE`
     * setting `GL_MULTISAMPLE_BIT` `GL_MULTISAMPLE` flag `GL_SAMPLE_ALPHA_TO_COVERAGE` flag `GL_SAMPLE_ALPHA_TO_ONE`
     * flag `GL_SAMPLE_COVERAGE` flag `GL_SAMPLE_COVERAGE_VALUE` value `GL_SAMPLE_COVERAGE_INVERT` value
     * `GL_PIXEL_MODE_BIT` `GL_RED_BIAS` and `GL_RED_SCALE` settings `GL_GREEN_BIAS` and `GL_GREEN_SCALE` values
     * `GL_BLUE_BIAS` and `GL_BLUE_SCALE` `GL_ALPHA_BIAS` and `GL_ALPHA_SCALE` `GL_DEPTH_BIAS` and `GL_DEPTH_SCALE`
     * `GL_INDEX_OFFSET` and `GL_INDEX_SHIFT` values `GL_MAP_COLOR` and `GL_MAP_STENCIL` flags `GL_ZOOM_X` and
     * `GL_ZOOM_Y` factors `GL_READ_BUFFER` setting `GL_POINT_BIT` `GL_POINT_SMOOTH` flag Point size `GL_POLYGON_BIT`
     * `GL_CULL_FACE` enable bit `GL_CULL_FACE_MODE` value `GL_FRONT_FACE` indicator `GL_POLYGON_MODE` setting
     * `GL_POLYGON_SMOOTH` flag `GL_POLYGON_STIPPLE` enable bit `GL_POLYGON_OFFSET_FILL` flag
     * `GL_POLYGON_OFFSET_LINE` flag `GL_POLYGON_OFFSET_POINT` flag `GL_POLYGON_OFFSET_FACTOR`
     * `GL_POLYGON_OFFSET_UNITS` `GL_POLYGON_STIPPLE_BIT` Polygon stipple image `GL_SCISSOR_BIT` `GL_SCISSOR_TEST`
     * flag Scissor box `GL_STENCIL_BUFFER_BIT` `GL_STENCIL_TEST` enable bit Stencil function and reference value
     * Stencil value mask Stencil fail, pass, and depth buffer pass actions Stencil buffer clear value Stencil buffer
     * writemask `GL_TEXTURE_BIT` Enable bits for the four texture coordinates Border color for each texture image
     * Minification function for each texture image Magnification function for each texture image Texture coordinates
     * and wrap mode for each texture image Color and mode for each texture environment Enable bits
     * `GL_TEXTURE_GEN_`*x*, *x* is S, T, R, and Q `GL_TEXTURE_GEN_MODE` setting for S, T, R, and Q
     * {@see glTexGen} plane equations for S, T, R, and Q Current texture bindings (for example,
     * `GL_TEXTURE_BINDING_2D`) `GL_TRANSFORM_BIT` Coefficients of the six clipping planes Enable bits for the
     * user-definable clipping planes `GL_MATRIX_MODE` value `GL_NORMALIZE` flag `GL_RESCALE_NORMAL` flag
     * `GL_VIEWPORT_BIT` Depth range (near and far) Viewport origin and extent
     *
     * {@see glPopAttrib} restores the values of the state variables saved with the last `glPushAttrib`
     * command. Those not saved are left unchanged.
     *
     * It is an error to push attributes onto a full stack or to pop attributes off an empty stack. In either case,
     * the error flag is set and no other change is made to GL state.
     *
     * Initially, the attribute stack is empty.
     *
     * @see http://docs.gl/gl2/glPushAttrib
     * @since 1.1
     * @param int $mask
     * @return void
     */
    public static function glPushAttrib(int $mask): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($mask >= 0 && $mask <= 4_294_967_295, 'Argument $mask overflow: C type GLbitfield is required');

        self::$ffi->glPushAttrib($mask);
    }

    /**
     * Takes one argument, a mask that indicates which groups of client-state variables to save on the client
     * attribute stack. Symbolic constants are used to set bits in the mask. *`mask`* is typically constructed by
     * specifying the bitwise-or of several of these constants together. The special mask `GL_CLIENT_ALL_ATTRIB_BITS`
     * can be used to save all stackable client state.
     *
     * The symbolic mask constants and their associated GL client state are as follows (the second column lists which
     * attributes are saved):
     *
     *  - `GL_CLIENT_PIXEL_STORE_BIT` Pixel storage modes `GL_CLIENT_VERTEX_ARRAY_BIT` Vertex arrays (and enables)
     *
     * {@see glPopClientAttrib} restores the values of the client-state variables saved with the last
     * `glPushClientAttrib`. Those not saved are left unchanged.
     *
     * It is an error to push attributes onto a full client attribute stack or to pop attributes off an empty stack.
     * In either case, the error flag is set, and no other change is made to GL state.
     *
     * Initially, the client attribute stack is empty.
     *
     * @see http://docs.gl/gl2/glPushClientAttrib
     * @since 1.1
     * @param int $mask
     * @return void
     */
    public static function glPushClientAttrib(int $mask): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($mask >= 0 && $mask <= 4_294_967_295, 'Argument $mask overflow: C type GLbitfield is required');

        self::$ffi->glPushClientAttrib($mask);
    }

    /**
     * There is a stack of matrices for each of the matrix modes. In `GL_MODELVIEW` mode, the stack depth is at least
     * 32. In the other modes, `GL_COLOR`, `GL_PROJECTION`, and `GL_TEXTURE`, the depth is at least 2. The current
     * matrix in any mode is the matrix on the top of the stack for that mode.
     *
     *  - `glPushMatrix` pushes the current matrix stack down by one, duplicating the current matrix. That is, after
     * a `glPushMatrix` call, the matrix on top of the stack is identical to the one below it.
     *
     * {@see glPopMatrix} pops the current matrix stack, replacing the current matrix with the one below it
     * on the stack.
     *
     * Initially, each of the stacks contains one matrix, an identity matrix.
     *
     * It is an error to push a full matrix stack or to pop a matrix stack that contains only a single matrix. In
     * either case, the error flag is set and no other change is made to GL state.
     *
     * @see http://docs.gl/gl2/glPushMatrix
     * @since 1.1
     * @return void
     */
    public static function glPushMatrix(): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glPushMatrix();
    }

    /**
     * The name stack is used during selection mode to allow sets of rendering commands to be uniquely identified. It
     * consists of an ordered set of unsigned integers and is initially empty.
     *
     *  - `glPushName` causes *`name`* to be pushed onto the name stack. {@see glPopName} pops one name off the
     * top of the stack.
     *
     * The maximum name stack depth is implementation-dependent; call `GL_MAX_NAME_STACK_DEPTH` to find out the value
     * for a particular implementation. It is an error to push a name onto a full stack or to pop a name off an empty
     * stack. It is also an error to manipulate the name stack between the execution of {@see glBegin} and the
     * corresponding execution of {@see glEnd}. In any of these cases, the error flag is set and no other change is
     * made to GL state.
     *
     * The name stack is always empty while the render mode is not `GL_SELECT`. Calls to `glPushName` or
     * {@see glPopName} while the render mode is not `GL_SELECT` are ignored.
     *
     * @see http://docs.gl/gl2/glPushName
     * @since 1.1
     * @param int $name
     * @return void
     */
    public static function glPushName(int $name): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($name >= 0 && $name <= 4_294_967_295, 'Argument $name overflow: C type GLuint is required');

        self::$ffi->glPushName($name);
    }

    /**
     * The GL maintains a 3D position in window coordinates. This position, called the raster position, is used to
     * position pixel and bitmap write operations. It is maintained with subpixel accuracy. See {@see glBitmap},
     * {@see glDrawPixels}, and {@see glCopyPixels}.
     *
     * The current raster position consists of three window coordinates (x, y, z), a clip coordinate value (w), an
     * eye coordinate distance, a valid bit, and associated color data and texture coordinates. The w coordinate is a
     * clip coordinate, because w is not projected to window coordinates. `glRasterPos4` specifies object coordinates
     * x, y, z, and w explicitly. `glRasterPos3` specifies object coordinate x, y, and z explicitly, while w is
     * implicitly set to 1. `glRasterPos2` uses the argument values for x and y while implicitly setting z and w to 0
     * and 1.
     *
     * The object coordinates presented by `glRasterPos` are treated just like those of a {@see glVertex}
     * command: They are transformed by the current modelview and projection matrices and passed to the clipping
     * stage. If the vertex is not culled, then it is projected and scaled to window coordinates, which become the
     * new current raster position, and the `GL_CURRENT_RASTER_POSITION_VALID` flag is set. If the vertex *is*
     * culled, then the valid bit is cleared and the current raster position and associated color and texture
     * coordinates are undefined.
     *
     * The current raster position also includes some associated color data and texture coordinates. If lighting is
     * enabled, then `GL_CURRENT_RASTER_COLOR` (in RGBA mode) or `GL_CURRENT_RASTER_INDEX` (in color index mode) is
     * set to the color produced by the lighting calculation (see {@see glLight}, {@see glLightModel},
     * and {@see glShadeModel}). If lighting is disabled, current color (in RGBA mode, state variable
     * `GL_CURRENT_COLOR`) or color index (in color index mode, state variable `GL_CURRENT_INDEX`) is used to update
     * the current raster color. `GL_CURRENT_RASTER_SECONDARY_COLOR` (in RGBA mode) is likewise updated.
     *
     * Likewise, `GL_CURRENT_RASTER_TEXTURE_COORDS` is updated as a function of `GL_CURRENT_TEXTURE_COORDS`, based on
     * the texture matrix and the texture generation functions (see {@see glTexGen}). Finally, the distance from
     * the origin of the eye coordinate system to the vertex as transformed by only the modelview matrix replaces
     * `GL_CURRENT_RASTER_DISTANCE`.
     *
     * Initially, the current raster position is (0, 0, 0, 1), the current raster distance is 0, the valid bit is
     * set, the associated RGBA color is (1, 1, 1, 1), the associated color index is 1, and the associated texture
     * coordinates are (0, 0, 0, 1). In RGBA mode, `GL_CURRENT_RASTER_INDEX` is always 1; in color index mode, the
     * current raster RGBA color always maintains its initial value.
     *
     * @see http://docs.gl/gl2/glRasterPos
     * @since 1.1
     * @param float $x
     * @param float $y
     * @return void
     */
    public static function glRasterPos2d(float $x, float $y): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= \PHP_FLOAT_MIN && $x <= \PHP_FLOAT_MAX, 'Argument $x overflow: C type GLdouble is required');
        assert($y >= \PHP_FLOAT_MIN && $y <= \PHP_FLOAT_MAX, 'Argument $y overflow: C type GLdouble is required');

        self::$ffi->glRasterPos2d($x, $y);
    }

    /**
     * The GL maintains a 3D position in window coordinates. This position, called the raster position, is used to
     * position pixel and bitmap write operations. It is maintained with subpixel accuracy. See {@see glBitmap},
     * {@see glDrawPixels}, and {@see glCopyPixels}.
     *
     * The current raster position consists of three window coordinates (x, y, z), a clip coordinate value (w), an
     * eye coordinate distance, a valid bit, and associated color data and texture coordinates. The w coordinate is a
     * clip coordinate, because w is not projected to window coordinates. `glRasterPos4` specifies object coordinates
     * x, y, z, and w explicitly. `glRasterPos3` specifies object coordinate x, y, and z explicitly, while w is
     * implicitly set to 1. `glRasterPos2` uses the argument values for x and y while implicitly setting z and w to 0
     * and 1.
     *
     * The object coordinates presented by `glRasterPos` are treated just like those of a {@see glVertex}
     * command: They are transformed by the current modelview and projection matrices and passed to the clipping
     * stage. If the vertex is not culled, then it is projected and scaled to window coordinates, which become the
     * new current raster position, and the `GL_CURRENT_RASTER_POSITION_VALID` flag is set. If the vertex *is*
     * culled, then the valid bit is cleared and the current raster position and associated color and texture
     * coordinates are undefined.
     *
     * The current raster position also includes some associated color data and texture coordinates. If lighting is
     * enabled, then `GL_CURRENT_RASTER_COLOR` (in RGBA mode) or `GL_CURRENT_RASTER_INDEX` (in color index mode) is
     * set to the color produced by the lighting calculation (see {@see glLight}, {@see glLightModel},
     * and {@see glShadeModel}). If lighting is disabled, current color (in RGBA mode, state variable
     * `GL_CURRENT_COLOR`) or color index (in color index mode, state variable `GL_CURRENT_INDEX`) is used to update
     * the current raster color. `GL_CURRENT_RASTER_SECONDARY_COLOR` (in RGBA mode) is likewise updated.
     *
     * Likewise, `GL_CURRENT_RASTER_TEXTURE_COORDS` is updated as a function of `GL_CURRENT_TEXTURE_COORDS`, based on
     * the texture matrix and the texture generation functions (see {@see glTexGen}). Finally, the distance from
     * the origin of the eye coordinate system to the vertex as transformed by only the modelview matrix replaces
     * `GL_CURRENT_RASTER_DISTANCE`.
     *
     * Initially, the current raster position is (0, 0, 0, 1), the current raster distance is 0, the valid bit is
     * set, the associated RGBA color is (1, 1, 1, 1), the associated color index is 1, and the associated texture
     * coordinates are (0, 0, 0, 1). In RGBA mode, `GL_CURRENT_RASTER_INDEX` is always 1; in color index mode, the
     * current raster RGBA color always maintains its initial value.
     *
     * @see http://docs.gl/gl2/glRasterPos
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glRasterPos2dv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glRasterPos2dv($v);
    }

    /**
     * The GL maintains a 3D position in window coordinates. This position, called the raster position, is used to
     * position pixel and bitmap write operations. It is maintained with subpixel accuracy. See {@see glBitmap},
     * {@see glDrawPixels}, and {@see glCopyPixels}.
     *
     * The current raster position consists of three window coordinates (x, y, z), a clip coordinate value (w), an
     * eye coordinate distance, a valid bit, and associated color data and texture coordinates. The w coordinate is a
     * clip coordinate, because w is not projected to window coordinates. `glRasterPos4` specifies object coordinates
     * x, y, z, and w explicitly. `glRasterPos3` specifies object coordinate x, y, and z explicitly, while w is
     * implicitly set to 1. `glRasterPos2` uses the argument values for x and y while implicitly setting z and w to 0
     * and 1.
     *
     * The object coordinates presented by `glRasterPos` are treated just like those of a {@see glVertex}
     * command: They are transformed by the current modelview and projection matrices and passed to the clipping
     * stage. If the vertex is not culled, then it is projected and scaled to window coordinates, which become the
     * new current raster position, and the `GL_CURRENT_RASTER_POSITION_VALID` flag is set. If the vertex *is*
     * culled, then the valid bit is cleared and the current raster position and associated color and texture
     * coordinates are undefined.
     *
     * The current raster position also includes some associated color data and texture coordinates. If lighting is
     * enabled, then `GL_CURRENT_RASTER_COLOR` (in RGBA mode) or `GL_CURRENT_RASTER_INDEX` (in color index mode) is
     * set to the color produced by the lighting calculation (see {@see glLight}, {@see glLightModel},
     * and {@see glShadeModel}). If lighting is disabled, current color (in RGBA mode, state variable
     * `GL_CURRENT_COLOR`) or color index (in color index mode, state variable `GL_CURRENT_INDEX`) is used to update
     * the current raster color. `GL_CURRENT_RASTER_SECONDARY_COLOR` (in RGBA mode) is likewise updated.
     *
     * Likewise, `GL_CURRENT_RASTER_TEXTURE_COORDS` is updated as a function of `GL_CURRENT_TEXTURE_COORDS`, based on
     * the texture matrix and the texture generation functions (see {@see glTexGen}). Finally, the distance from
     * the origin of the eye coordinate system to the vertex as transformed by only the modelview matrix replaces
     * `GL_CURRENT_RASTER_DISTANCE`.
     *
     * Initially, the current raster position is (0, 0, 0, 1), the current raster distance is 0, the valid bit is
     * set, the associated RGBA color is (1, 1, 1, 1), the associated color index is 1, and the associated texture
     * coordinates are (0, 0, 0, 1). In RGBA mode, `GL_CURRENT_RASTER_INDEX` is always 1; in color index mode, the
     * current raster RGBA color always maintains its initial value.
     *
     * @see http://docs.gl/gl2/glRasterPos
     * @since 1.1
     * @param float $x
     * @param float $y
     * @return void
     */
    public static function glRasterPos2f(float $x, float $y): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= -3.40282e38 && $x <= 3.40282e38, 'Argument $x overflow: C type GLfloat is required');
        assert($y >= -3.40282e38 && $y <= 3.40282e38, 'Argument $y overflow: C type GLfloat is required');

        self::$ffi->glRasterPos2f($x, $y);
    }

    /**
     * The GL maintains a 3D position in window coordinates. This position, called the raster position, is used to
     * position pixel and bitmap write operations. It is maintained with subpixel accuracy. See {@see glBitmap},
     * {@see glDrawPixels}, and {@see glCopyPixels}.
     *
     * The current raster position consists of three window coordinates (x, y, z), a clip coordinate value (w), an
     * eye coordinate distance, a valid bit, and associated color data and texture coordinates. The w coordinate is a
     * clip coordinate, because w is not projected to window coordinates. `glRasterPos4` specifies object coordinates
     * x, y, z, and w explicitly. `glRasterPos3` specifies object coordinate x, y, and z explicitly, while w is
     * implicitly set to 1. `glRasterPos2` uses the argument values for x and y while implicitly setting z and w to 0
     * and 1.
     *
     * The object coordinates presented by `glRasterPos` are treated just like those of a {@see glVertex}
     * command: They are transformed by the current modelview and projection matrices and passed to the clipping
     * stage. If the vertex is not culled, then it is projected and scaled to window coordinates, which become the
     * new current raster position, and the `GL_CURRENT_RASTER_POSITION_VALID` flag is set. If the vertex *is*
     * culled, then the valid bit is cleared and the current raster position and associated color and texture
     * coordinates are undefined.
     *
     * The current raster position also includes some associated color data and texture coordinates. If lighting is
     * enabled, then `GL_CURRENT_RASTER_COLOR` (in RGBA mode) or `GL_CURRENT_RASTER_INDEX` (in color index mode) is
     * set to the color produced by the lighting calculation (see {@see glLight}, {@see glLightModel},
     * and {@see glShadeModel}). If lighting is disabled, current color (in RGBA mode, state variable
     * `GL_CURRENT_COLOR`) or color index (in color index mode, state variable `GL_CURRENT_INDEX`) is used to update
     * the current raster color. `GL_CURRENT_RASTER_SECONDARY_COLOR` (in RGBA mode) is likewise updated.
     *
     * Likewise, `GL_CURRENT_RASTER_TEXTURE_COORDS` is updated as a function of `GL_CURRENT_TEXTURE_COORDS`, based on
     * the texture matrix and the texture generation functions (see {@see glTexGen}). Finally, the distance from
     * the origin of the eye coordinate system to the vertex as transformed by only the modelview matrix replaces
     * `GL_CURRENT_RASTER_DISTANCE`.
     *
     * Initially, the current raster position is (0, 0, 0, 1), the current raster distance is 0, the valid bit is
     * set, the associated RGBA color is (1, 1, 1, 1), the associated color index is 1, and the associated texture
     * coordinates are (0, 0, 0, 1). In RGBA mode, `GL_CURRENT_RASTER_INDEX` is always 1; in color index mode, the
     * current raster RGBA color always maintains its initial value.
     *
     * @see http://docs.gl/gl2/glRasterPos
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glRasterPos2fv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glRasterPos2fv($v);
    }

    /**
     * The GL maintains a 3D position in window coordinates. This position, called the raster position, is used to
     * position pixel and bitmap write operations. It is maintained with subpixel accuracy. See {@see glBitmap},
     * {@see glDrawPixels}, and {@see glCopyPixels}.
     *
     * The current raster position consists of three window coordinates (x, y, z), a clip coordinate value (w), an
     * eye coordinate distance, a valid bit, and associated color data and texture coordinates. The w coordinate is a
     * clip coordinate, because w is not projected to window coordinates. `glRasterPos4` specifies object coordinates
     * x, y, z, and w explicitly. `glRasterPos3` specifies object coordinate x, y, and z explicitly, while w is
     * implicitly set to 1. `glRasterPos2` uses the argument values for x and y while implicitly setting z and w to 0
     * and 1.
     *
     * The object coordinates presented by `glRasterPos` are treated just like those of a {@see glVertex}
     * command: They are transformed by the current modelview and projection matrices and passed to the clipping
     * stage. If the vertex is not culled, then it is projected and scaled to window coordinates, which become the
     * new current raster position, and the `GL_CURRENT_RASTER_POSITION_VALID` flag is set. If the vertex *is*
     * culled, then the valid bit is cleared and the current raster position and associated color and texture
     * coordinates are undefined.
     *
     * The current raster position also includes some associated color data and texture coordinates. If lighting is
     * enabled, then `GL_CURRENT_RASTER_COLOR` (in RGBA mode) or `GL_CURRENT_RASTER_INDEX` (in color index mode) is
     * set to the color produced by the lighting calculation (see {@see glLight}, {@see glLightModel},
     * and {@see glShadeModel}). If lighting is disabled, current color (in RGBA mode, state variable
     * `GL_CURRENT_COLOR`) or color index (in color index mode, state variable `GL_CURRENT_INDEX`) is used to update
     * the current raster color. `GL_CURRENT_RASTER_SECONDARY_COLOR` (in RGBA mode) is likewise updated.
     *
     * Likewise, `GL_CURRENT_RASTER_TEXTURE_COORDS` is updated as a function of `GL_CURRENT_TEXTURE_COORDS`, based on
     * the texture matrix and the texture generation functions (see {@see glTexGen}). Finally, the distance from
     * the origin of the eye coordinate system to the vertex as transformed by only the modelview matrix replaces
     * `GL_CURRENT_RASTER_DISTANCE`.
     *
     * Initially, the current raster position is (0, 0, 0, 1), the current raster distance is 0, the valid bit is
     * set, the associated RGBA color is (1, 1, 1, 1), the associated color index is 1, and the associated texture
     * coordinates are (0, 0, 0, 1). In RGBA mode, `GL_CURRENT_RASTER_INDEX` is always 1; in color index mode, the
     * current raster RGBA color always maintains its initial value.
     *
     * @see http://docs.gl/gl2/glRasterPos
     * @since 1.1
     * @param int $x
     * @param int $y
     * @return void
     */
    public static function glRasterPos2i(int $x, int $y): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= \PHP_INT_MIN && $x <= \PHP_INT_MAX, 'Argument $x overflow: C type GLint is required');
        assert($y >= \PHP_INT_MIN && $y <= \PHP_INT_MAX, 'Argument $y overflow: C type GLint is required');

        self::$ffi->glRasterPos2i($x, $y);
    }

    /**
     * The GL maintains a 3D position in window coordinates. This position, called the raster position, is used to
     * position pixel and bitmap write operations. It is maintained with subpixel accuracy. See {@see glBitmap},
     * {@see glDrawPixels}, and {@see glCopyPixels}.
     *
     * The current raster position consists of three window coordinates (x, y, z), a clip coordinate value (w), an
     * eye coordinate distance, a valid bit, and associated color data and texture coordinates. The w coordinate is a
     * clip coordinate, because w is not projected to window coordinates. `glRasterPos4` specifies object coordinates
     * x, y, z, and w explicitly. `glRasterPos3` specifies object coordinate x, y, and z explicitly, while w is
     * implicitly set to 1. `glRasterPos2` uses the argument values for x and y while implicitly setting z and w to 0
     * and 1.
     *
     * The object coordinates presented by `glRasterPos` are treated just like those of a {@see glVertex}
     * command: They are transformed by the current modelview and projection matrices and passed to the clipping
     * stage. If the vertex is not culled, then it is projected and scaled to window coordinates, which become the
     * new current raster position, and the `GL_CURRENT_RASTER_POSITION_VALID` flag is set. If the vertex *is*
     * culled, then the valid bit is cleared and the current raster position and associated color and texture
     * coordinates are undefined.
     *
     * The current raster position also includes some associated color data and texture coordinates. If lighting is
     * enabled, then `GL_CURRENT_RASTER_COLOR` (in RGBA mode) or `GL_CURRENT_RASTER_INDEX` (in color index mode) is
     * set to the color produced by the lighting calculation (see {@see glLight}, {@see glLightModel},
     * and {@see glShadeModel}). If lighting is disabled, current color (in RGBA mode, state variable
     * `GL_CURRENT_COLOR`) or color index (in color index mode, state variable `GL_CURRENT_INDEX`) is used to update
     * the current raster color. `GL_CURRENT_RASTER_SECONDARY_COLOR` (in RGBA mode) is likewise updated.
     *
     * Likewise, `GL_CURRENT_RASTER_TEXTURE_COORDS` is updated as a function of `GL_CURRENT_TEXTURE_COORDS`, based on
     * the texture matrix and the texture generation functions (see {@see glTexGen}). Finally, the distance from
     * the origin of the eye coordinate system to the vertex as transformed by only the modelview matrix replaces
     * `GL_CURRENT_RASTER_DISTANCE`.
     *
     * Initially, the current raster position is (0, 0, 0, 1), the current raster distance is 0, the valid bit is
     * set, the associated RGBA color is (1, 1, 1, 1), the associated color index is 1, and the associated texture
     * coordinates are (0, 0, 0, 1). In RGBA mode, `GL_CURRENT_RASTER_INDEX` is always 1; in color index mode, the
     * current raster RGBA color always maintains its initial value.
     *
     * @see http://docs.gl/gl2/glRasterPos
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glRasterPos2iv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glRasterPos2iv($v);
    }

    /**
     * The GL maintains a 3D position in window coordinates. This position, called the raster position, is used to
     * position pixel and bitmap write operations. It is maintained with subpixel accuracy. See {@see glBitmap},
     * {@see glDrawPixels}, and {@see glCopyPixels}.
     *
     * The current raster position consists of three window coordinates (x, y, z), a clip coordinate value (w), an
     * eye coordinate distance, a valid bit, and associated color data and texture coordinates. The w coordinate is a
     * clip coordinate, because w is not projected to window coordinates. `glRasterPos4` specifies object coordinates
     * x, y, z, and w explicitly. `glRasterPos3` specifies object coordinate x, y, and z explicitly, while w is
     * implicitly set to 1. `glRasterPos2` uses the argument values for x and y while implicitly setting z and w to 0
     * and 1.
     *
     * The object coordinates presented by `glRasterPos` are treated just like those of a {@see glVertex}
     * command: They are transformed by the current modelview and projection matrices and passed to the clipping
     * stage. If the vertex is not culled, then it is projected and scaled to window coordinates, which become the
     * new current raster position, and the `GL_CURRENT_RASTER_POSITION_VALID` flag is set. If the vertex *is*
     * culled, then the valid bit is cleared and the current raster position and associated color and texture
     * coordinates are undefined.
     *
     * The current raster position also includes some associated color data and texture coordinates. If lighting is
     * enabled, then `GL_CURRENT_RASTER_COLOR` (in RGBA mode) or `GL_CURRENT_RASTER_INDEX` (in color index mode) is
     * set to the color produced by the lighting calculation (see {@see glLight}, {@see glLightModel},
     * and {@see glShadeModel}). If lighting is disabled, current color (in RGBA mode, state variable
     * `GL_CURRENT_COLOR`) or color index (in color index mode, state variable `GL_CURRENT_INDEX`) is used to update
     * the current raster color. `GL_CURRENT_RASTER_SECONDARY_COLOR` (in RGBA mode) is likewise updated.
     *
     * Likewise, `GL_CURRENT_RASTER_TEXTURE_COORDS` is updated as a function of `GL_CURRENT_TEXTURE_COORDS`, based on
     * the texture matrix and the texture generation functions (see {@see glTexGen}). Finally, the distance from
     * the origin of the eye coordinate system to the vertex as transformed by only the modelview matrix replaces
     * `GL_CURRENT_RASTER_DISTANCE`.
     *
     * Initially, the current raster position is (0, 0, 0, 1), the current raster distance is 0, the valid bit is
     * set, the associated RGBA color is (1, 1, 1, 1), the associated color index is 1, and the associated texture
     * coordinates are (0, 0, 0, 1). In RGBA mode, `GL_CURRENT_RASTER_INDEX` is always 1; in color index mode, the
     * current raster RGBA color always maintains its initial value.
     *
     * @see http://docs.gl/gl2/glRasterPos
     * @since 1.1
     * @param int $x
     * @param int $y
     * @return void
     */
    public static function glRasterPos2s(int $x, int $y): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= -32768 && $x <= 32767, 'Argument $x overflow: C type GLshort is required');
        assert($y >= -32768 && $y <= 32767, 'Argument $y overflow: C type GLshort is required');

        self::$ffi->glRasterPos2s($x, $y);
    }

    /**
     * The GL maintains a 3D position in window coordinates. This position, called the raster position, is used to
     * position pixel and bitmap write operations. It is maintained with subpixel accuracy. See {@see glBitmap},
     * {@see glDrawPixels}, and {@see glCopyPixels}.
     *
     * The current raster position consists of three window coordinates (x, y, z), a clip coordinate value (w), an
     * eye coordinate distance, a valid bit, and associated color data and texture coordinates. The w coordinate is a
     * clip coordinate, because w is not projected to window coordinates. `glRasterPos4` specifies object coordinates
     * x, y, z, and w explicitly. `glRasterPos3` specifies object coordinate x, y, and z explicitly, while w is
     * implicitly set to 1. `glRasterPos2` uses the argument values for x and y while implicitly setting z and w to 0
     * and 1.
     *
     * The object coordinates presented by `glRasterPos` are treated just like those of a {@see glVertex}
     * command: They are transformed by the current modelview and projection matrices and passed to the clipping
     * stage. If the vertex is not culled, then it is projected and scaled to window coordinates, which become the
     * new current raster position, and the `GL_CURRENT_RASTER_POSITION_VALID` flag is set. If the vertex *is*
     * culled, then the valid bit is cleared and the current raster position and associated color and texture
     * coordinates are undefined.
     *
     * The current raster position also includes some associated color data and texture coordinates. If lighting is
     * enabled, then `GL_CURRENT_RASTER_COLOR` (in RGBA mode) or `GL_CURRENT_RASTER_INDEX` (in color index mode) is
     * set to the color produced by the lighting calculation (see {@see glLight}, {@see glLightModel},
     * and {@see glShadeModel}). If lighting is disabled, current color (in RGBA mode, state variable
     * `GL_CURRENT_COLOR`) or color index (in color index mode, state variable `GL_CURRENT_INDEX`) is used to update
     * the current raster color. `GL_CURRENT_RASTER_SECONDARY_COLOR` (in RGBA mode) is likewise updated.
     *
     * Likewise, `GL_CURRENT_RASTER_TEXTURE_COORDS` is updated as a function of `GL_CURRENT_TEXTURE_COORDS`, based on
     * the texture matrix and the texture generation functions (see {@see glTexGen}). Finally, the distance from
     * the origin of the eye coordinate system to the vertex as transformed by only the modelview matrix replaces
     * `GL_CURRENT_RASTER_DISTANCE`.
     *
     * Initially, the current raster position is (0, 0, 0, 1), the current raster distance is 0, the valid bit is
     * set, the associated RGBA color is (1, 1, 1, 1), the associated color index is 1, and the associated texture
     * coordinates are (0, 0, 0, 1). In RGBA mode, `GL_CURRENT_RASTER_INDEX` is always 1; in color index mode, the
     * current raster RGBA color always maintains its initial value.
     *
     * @see http://docs.gl/gl2/glRasterPos
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glRasterPos2sv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glRasterPos2sv($v);
    }

    /**
     * The GL maintains a 3D position in window coordinates. This position, called the raster position, is used to
     * position pixel and bitmap write operations. It is maintained with subpixel accuracy. See {@see glBitmap},
     * {@see glDrawPixels}, and {@see glCopyPixels}.
     *
     * The current raster position consists of three window coordinates (x, y, z), a clip coordinate value (w), an
     * eye coordinate distance, a valid bit, and associated color data and texture coordinates. The w coordinate is a
     * clip coordinate, because w is not projected to window coordinates. `glRasterPos4` specifies object coordinates
     * x, y, z, and w explicitly. `glRasterPos3` specifies object coordinate x, y, and z explicitly, while w is
     * implicitly set to 1. `glRasterPos2` uses the argument values for x and y while implicitly setting z and w to 0
     * and 1.
     *
     * The object coordinates presented by `glRasterPos` are treated just like those of a {@see glVertex}
     * command: They are transformed by the current modelview and projection matrices and passed to the clipping
     * stage. If the vertex is not culled, then it is projected and scaled to window coordinates, which become the
     * new current raster position, and the `GL_CURRENT_RASTER_POSITION_VALID` flag is set. If the vertex *is*
     * culled, then the valid bit is cleared and the current raster position and associated color and texture
     * coordinates are undefined.
     *
     * The current raster position also includes some associated color data and texture coordinates. If lighting is
     * enabled, then `GL_CURRENT_RASTER_COLOR` (in RGBA mode) or `GL_CURRENT_RASTER_INDEX` (in color index mode) is
     * set to the color produced by the lighting calculation (see {@see glLight}, {@see glLightModel},
     * and {@see glShadeModel}). If lighting is disabled, current color (in RGBA mode, state variable
     * `GL_CURRENT_COLOR`) or color index (in color index mode, state variable `GL_CURRENT_INDEX`) is used to update
     * the current raster color. `GL_CURRENT_RASTER_SECONDARY_COLOR` (in RGBA mode) is likewise updated.
     *
     * Likewise, `GL_CURRENT_RASTER_TEXTURE_COORDS` is updated as a function of `GL_CURRENT_TEXTURE_COORDS`, based on
     * the texture matrix and the texture generation functions (see {@see glTexGen}). Finally, the distance from
     * the origin of the eye coordinate system to the vertex as transformed by only the modelview matrix replaces
     * `GL_CURRENT_RASTER_DISTANCE`.
     *
     * Initially, the current raster position is (0, 0, 0, 1), the current raster distance is 0, the valid bit is
     * set, the associated RGBA color is (1, 1, 1, 1), the associated color index is 1, and the associated texture
     * coordinates are (0, 0, 0, 1). In RGBA mode, `GL_CURRENT_RASTER_INDEX` is always 1; in color index mode, the
     * current raster RGBA color always maintains its initial value.
     *
     * @see http://docs.gl/gl2/glRasterPos
     * @since 1.1
     * @param float $x
     * @param float $y
     * @param float $z
     * @return void
     */
    public static function glRasterPos3d(float $x, float $y, float $z): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= \PHP_FLOAT_MIN && $x <= \PHP_FLOAT_MAX, 'Argument $x overflow: C type GLdouble is required');
        assert($y >= \PHP_FLOAT_MIN && $y <= \PHP_FLOAT_MAX, 'Argument $y overflow: C type GLdouble is required');
        assert($z >= \PHP_FLOAT_MIN && $z <= \PHP_FLOAT_MAX, 'Argument $z overflow: C type GLdouble is required');

        self::$ffi->glRasterPos3d($x, $y, $z);
    }

    /**
     * The GL maintains a 3D position in window coordinates. This position, called the raster position, is used to
     * position pixel and bitmap write operations. It is maintained with subpixel accuracy. See {@see glBitmap},
     * {@see glDrawPixels}, and {@see glCopyPixels}.
     *
     * The current raster position consists of three window coordinates (x, y, z), a clip coordinate value (w), an
     * eye coordinate distance, a valid bit, and associated color data and texture coordinates. The w coordinate is a
     * clip coordinate, because w is not projected to window coordinates. `glRasterPos4` specifies object coordinates
     * x, y, z, and w explicitly. `glRasterPos3` specifies object coordinate x, y, and z explicitly, while w is
     * implicitly set to 1. `glRasterPos2` uses the argument values for x and y while implicitly setting z and w to 0
     * and 1.
     *
     * The object coordinates presented by `glRasterPos` are treated just like those of a {@see glVertex}
     * command: They are transformed by the current modelview and projection matrices and passed to the clipping
     * stage. If the vertex is not culled, then it is projected and scaled to window coordinates, which become the
     * new current raster position, and the `GL_CURRENT_RASTER_POSITION_VALID` flag is set. If the vertex *is*
     * culled, then the valid bit is cleared and the current raster position and associated color and texture
     * coordinates are undefined.
     *
     * The current raster position also includes some associated color data and texture coordinates. If lighting is
     * enabled, then `GL_CURRENT_RASTER_COLOR` (in RGBA mode) or `GL_CURRENT_RASTER_INDEX` (in color index mode) is
     * set to the color produced by the lighting calculation (see {@see glLight}, {@see glLightModel},
     * and {@see glShadeModel}). If lighting is disabled, current color (in RGBA mode, state variable
     * `GL_CURRENT_COLOR`) or color index (in color index mode, state variable `GL_CURRENT_INDEX`) is used to update
     * the current raster color. `GL_CURRENT_RASTER_SECONDARY_COLOR` (in RGBA mode) is likewise updated.
     *
     * Likewise, `GL_CURRENT_RASTER_TEXTURE_COORDS` is updated as a function of `GL_CURRENT_TEXTURE_COORDS`, based on
     * the texture matrix and the texture generation functions (see {@see glTexGen}). Finally, the distance from
     * the origin of the eye coordinate system to the vertex as transformed by only the modelview matrix replaces
     * `GL_CURRENT_RASTER_DISTANCE`.
     *
     * Initially, the current raster position is (0, 0, 0, 1), the current raster distance is 0, the valid bit is
     * set, the associated RGBA color is (1, 1, 1, 1), the associated color index is 1, and the associated texture
     * coordinates are (0, 0, 0, 1). In RGBA mode, `GL_CURRENT_RASTER_INDEX` is always 1; in color index mode, the
     * current raster RGBA color always maintains its initial value.
     *
     * @see http://docs.gl/gl2/glRasterPos
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glRasterPos3dv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glRasterPos3dv($v);
    }

    /**
     * The GL maintains a 3D position in window coordinates. This position, called the raster position, is used to
     * position pixel and bitmap write operations. It is maintained with subpixel accuracy. See {@see glBitmap},
     * {@see glDrawPixels}, and {@see glCopyPixels}.
     *
     * The current raster position consists of three window coordinates (x, y, z), a clip coordinate value (w), an
     * eye coordinate distance, a valid bit, and associated color data and texture coordinates. The w coordinate is a
     * clip coordinate, because w is not projected to window coordinates. `glRasterPos4` specifies object coordinates
     * x, y, z, and w explicitly. `glRasterPos3` specifies object coordinate x, y, and z explicitly, while w is
     * implicitly set to 1. `glRasterPos2` uses the argument values for x and y while implicitly setting z and w to 0
     * and 1.
     *
     * The object coordinates presented by `glRasterPos` are treated just like those of a {@see glVertex}
     * command: They are transformed by the current modelview and projection matrices and passed to the clipping
     * stage. If the vertex is not culled, then it is projected and scaled to window coordinates, which become the
     * new current raster position, and the `GL_CURRENT_RASTER_POSITION_VALID` flag is set. If the vertex *is*
     * culled, then the valid bit is cleared and the current raster position and associated color and texture
     * coordinates are undefined.
     *
     * The current raster position also includes some associated color data and texture coordinates. If lighting is
     * enabled, then `GL_CURRENT_RASTER_COLOR` (in RGBA mode) or `GL_CURRENT_RASTER_INDEX` (in color index mode) is
     * set to the color produced by the lighting calculation (see {@see glLight}, {@see glLightModel},
     * and {@see glShadeModel}). If lighting is disabled, current color (in RGBA mode, state variable
     * `GL_CURRENT_COLOR`) or color index (in color index mode, state variable `GL_CURRENT_INDEX`) is used to update
     * the current raster color. `GL_CURRENT_RASTER_SECONDARY_COLOR` (in RGBA mode) is likewise updated.
     *
     * Likewise, `GL_CURRENT_RASTER_TEXTURE_COORDS` is updated as a function of `GL_CURRENT_TEXTURE_COORDS`, based on
     * the texture matrix and the texture generation functions (see {@see glTexGen}). Finally, the distance from
     * the origin of the eye coordinate system to the vertex as transformed by only the modelview matrix replaces
     * `GL_CURRENT_RASTER_DISTANCE`.
     *
     * Initially, the current raster position is (0, 0, 0, 1), the current raster distance is 0, the valid bit is
     * set, the associated RGBA color is (1, 1, 1, 1), the associated color index is 1, and the associated texture
     * coordinates are (0, 0, 0, 1). In RGBA mode, `GL_CURRENT_RASTER_INDEX` is always 1; in color index mode, the
     * current raster RGBA color always maintains its initial value.
     *
     * @see http://docs.gl/gl2/glRasterPos
     * @since 1.1
     * @param float $x
     * @param float $y
     * @param float $z
     * @return void
     */
    public static function glRasterPos3f(float $x, float $y, float $z): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= -3.40282e38 && $x <= 3.40282e38, 'Argument $x overflow: C type GLfloat is required');
        assert($y >= -3.40282e38 && $y <= 3.40282e38, 'Argument $y overflow: C type GLfloat is required');
        assert($z >= -3.40282e38 && $z <= 3.40282e38, 'Argument $z overflow: C type GLfloat is required');

        self::$ffi->glRasterPos3f($x, $y, $z);
    }

    /**
     * The GL maintains a 3D position in window coordinates. This position, called the raster position, is used to
     * position pixel and bitmap write operations. It is maintained with subpixel accuracy. See {@see glBitmap},
     * {@see glDrawPixels}, and {@see glCopyPixels}.
     *
     * The current raster position consists of three window coordinates (x, y, z), a clip coordinate value (w), an
     * eye coordinate distance, a valid bit, and associated color data and texture coordinates. The w coordinate is a
     * clip coordinate, because w is not projected to window coordinates. `glRasterPos4` specifies object coordinates
     * x, y, z, and w explicitly. `glRasterPos3` specifies object coordinate x, y, and z explicitly, while w is
     * implicitly set to 1. `glRasterPos2` uses the argument values for x and y while implicitly setting z and w to 0
     * and 1.
     *
     * The object coordinates presented by `glRasterPos` are treated just like those of a {@see glVertex}
     * command: They are transformed by the current modelview and projection matrices and passed to the clipping
     * stage. If the vertex is not culled, then it is projected and scaled to window coordinates, which become the
     * new current raster position, and the `GL_CURRENT_RASTER_POSITION_VALID` flag is set. If the vertex *is*
     * culled, then the valid bit is cleared and the current raster position and associated color and texture
     * coordinates are undefined.
     *
     * The current raster position also includes some associated color data and texture coordinates. If lighting is
     * enabled, then `GL_CURRENT_RASTER_COLOR` (in RGBA mode) or `GL_CURRENT_RASTER_INDEX` (in color index mode) is
     * set to the color produced by the lighting calculation (see {@see glLight}, {@see glLightModel},
     * and {@see glShadeModel}). If lighting is disabled, current color (in RGBA mode, state variable
     * `GL_CURRENT_COLOR`) or color index (in color index mode, state variable `GL_CURRENT_INDEX`) is used to update
     * the current raster color. `GL_CURRENT_RASTER_SECONDARY_COLOR` (in RGBA mode) is likewise updated.
     *
     * Likewise, `GL_CURRENT_RASTER_TEXTURE_COORDS` is updated as a function of `GL_CURRENT_TEXTURE_COORDS`, based on
     * the texture matrix and the texture generation functions (see {@see glTexGen}). Finally, the distance from
     * the origin of the eye coordinate system to the vertex as transformed by only the modelview matrix replaces
     * `GL_CURRENT_RASTER_DISTANCE`.
     *
     * Initially, the current raster position is (0, 0, 0, 1), the current raster distance is 0, the valid bit is
     * set, the associated RGBA color is (1, 1, 1, 1), the associated color index is 1, and the associated texture
     * coordinates are (0, 0, 0, 1). In RGBA mode, `GL_CURRENT_RASTER_INDEX` is always 1; in color index mode, the
     * current raster RGBA color always maintains its initial value.
     *
     * @see http://docs.gl/gl2/glRasterPos
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glRasterPos3fv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glRasterPos3fv($v);
    }

    /**
     * The GL maintains a 3D position in window coordinates. This position, called the raster position, is used to
     * position pixel and bitmap write operations. It is maintained with subpixel accuracy. See {@see glBitmap},
     * {@see glDrawPixels}, and {@see glCopyPixels}.
     *
     * The current raster position consists of three window coordinates (x, y, z), a clip coordinate value (w), an
     * eye coordinate distance, a valid bit, and associated color data and texture coordinates. The w coordinate is a
     * clip coordinate, because w is not projected to window coordinates. `glRasterPos4` specifies object coordinates
     * x, y, z, and w explicitly. `glRasterPos3` specifies object coordinate x, y, and z explicitly, while w is
     * implicitly set to 1. `glRasterPos2` uses the argument values for x and y while implicitly setting z and w to 0
     * and 1.
     *
     * The object coordinates presented by `glRasterPos` are treated just like those of a {@see glVertex}
     * command: They are transformed by the current modelview and projection matrices and passed to the clipping
     * stage. If the vertex is not culled, then it is projected and scaled to window coordinates, which become the
     * new current raster position, and the `GL_CURRENT_RASTER_POSITION_VALID` flag is set. If the vertex *is*
     * culled, then the valid bit is cleared and the current raster position and associated color and texture
     * coordinates are undefined.
     *
     * The current raster position also includes some associated color data and texture coordinates. If lighting is
     * enabled, then `GL_CURRENT_RASTER_COLOR` (in RGBA mode) or `GL_CURRENT_RASTER_INDEX` (in color index mode) is
     * set to the color produced by the lighting calculation (see {@see glLight}, {@see glLightModel},
     * and {@see glShadeModel}). If lighting is disabled, current color (in RGBA mode, state variable
     * `GL_CURRENT_COLOR`) or color index (in color index mode, state variable `GL_CURRENT_INDEX`) is used to update
     * the current raster color. `GL_CURRENT_RASTER_SECONDARY_COLOR` (in RGBA mode) is likewise updated.
     *
     * Likewise, `GL_CURRENT_RASTER_TEXTURE_COORDS` is updated as a function of `GL_CURRENT_TEXTURE_COORDS`, based on
     * the texture matrix and the texture generation functions (see {@see glTexGen}). Finally, the distance from
     * the origin of the eye coordinate system to the vertex as transformed by only the modelview matrix replaces
     * `GL_CURRENT_RASTER_DISTANCE`.
     *
     * Initially, the current raster position is (0, 0, 0, 1), the current raster distance is 0, the valid bit is
     * set, the associated RGBA color is (1, 1, 1, 1), the associated color index is 1, and the associated texture
     * coordinates are (0, 0, 0, 1). In RGBA mode, `GL_CURRENT_RASTER_INDEX` is always 1; in color index mode, the
     * current raster RGBA color always maintains its initial value.
     *
     * @see http://docs.gl/gl2/glRasterPos
     * @since 1.1
     * @param int $x
     * @param int $y
     * @param int $z
     * @return void
     */
    public static function glRasterPos3i(int $x, int $y, int $z): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= \PHP_INT_MIN && $x <= \PHP_INT_MAX, 'Argument $x overflow: C type GLint is required');
        assert($y >= \PHP_INT_MIN && $y <= \PHP_INT_MAX, 'Argument $y overflow: C type GLint is required');
        assert($z >= \PHP_INT_MIN && $z <= \PHP_INT_MAX, 'Argument $z overflow: C type GLint is required');

        self::$ffi->glRasterPos3i($x, $y, $z);
    }

    /**
     * The GL maintains a 3D position in window coordinates. This position, called the raster position, is used to
     * position pixel and bitmap write operations. It is maintained with subpixel accuracy. See {@see glBitmap},
     * {@see glDrawPixels}, and {@see glCopyPixels}.
     *
     * The current raster position consists of three window coordinates (x, y, z), a clip coordinate value (w), an
     * eye coordinate distance, a valid bit, and associated color data and texture coordinates. The w coordinate is a
     * clip coordinate, because w is not projected to window coordinates. `glRasterPos4` specifies object coordinates
     * x, y, z, and w explicitly. `glRasterPos3` specifies object coordinate x, y, and z explicitly, while w is
     * implicitly set to 1. `glRasterPos2` uses the argument values for x and y while implicitly setting z and w to 0
     * and 1.
     *
     * The object coordinates presented by `glRasterPos` are treated just like those of a {@see glVertex}
     * command: They are transformed by the current modelview and projection matrices and passed to the clipping
     * stage. If the vertex is not culled, then it is projected and scaled to window coordinates, which become the
     * new current raster position, and the `GL_CURRENT_RASTER_POSITION_VALID` flag is set. If the vertex *is*
     * culled, then the valid bit is cleared and the current raster position and associated color and texture
     * coordinates are undefined.
     *
     * The current raster position also includes some associated color data and texture coordinates. If lighting is
     * enabled, then `GL_CURRENT_RASTER_COLOR` (in RGBA mode) or `GL_CURRENT_RASTER_INDEX` (in color index mode) is
     * set to the color produced by the lighting calculation (see {@see glLight}, {@see glLightModel},
     * and {@see glShadeModel}). If lighting is disabled, current color (in RGBA mode, state variable
     * `GL_CURRENT_COLOR`) or color index (in color index mode, state variable `GL_CURRENT_INDEX`) is used to update
     * the current raster color. `GL_CURRENT_RASTER_SECONDARY_COLOR` (in RGBA mode) is likewise updated.
     *
     * Likewise, `GL_CURRENT_RASTER_TEXTURE_COORDS` is updated as a function of `GL_CURRENT_TEXTURE_COORDS`, based on
     * the texture matrix and the texture generation functions (see {@see glTexGen}). Finally, the distance from
     * the origin of the eye coordinate system to the vertex as transformed by only the modelview matrix replaces
     * `GL_CURRENT_RASTER_DISTANCE`.
     *
     * Initially, the current raster position is (0, 0, 0, 1), the current raster distance is 0, the valid bit is
     * set, the associated RGBA color is (1, 1, 1, 1), the associated color index is 1, and the associated texture
     * coordinates are (0, 0, 0, 1). In RGBA mode, `GL_CURRENT_RASTER_INDEX` is always 1; in color index mode, the
     * current raster RGBA color always maintains its initial value.
     *
     * @see http://docs.gl/gl2/glRasterPos
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glRasterPos3iv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glRasterPos3iv($v);
    }

    /**
     * The GL maintains a 3D position in window coordinates. This position, called the raster position, is used to
     * position pixel and bitmap write operations. It is maintained with subpixel accuracy. See {@see glBitmap},
     * {@see glDrawPixels}, and {@see glCopyPixels}.
     *
     * The current raster position consists of three window coordinates (x, y, z), a clip coordinate value (w), an
     * eye coordinate distance, a valid bit, and associated color data and texture coordinates. The w coordinate is a
     * clip coordinate, because w is not projected to window coordinates. `glRasterPos4` specifies object coordinates
     * x, y, z, and w explicitly. `glRasterPos3` specifies object coordinate x, y, and z explicitly, while w is
     * implicitly set to 1. `glRasterPos2` uses the argument values for x and y while implicitly setting z and w to 0
     * and 1.
     *
     * The object coordinates presented by `glRasterPos` are treated just like those of a {@see glVertex}
     * command: They are transformed by the current modelview and projection matrices and passed to the clipping
     * stage. If the vertex is not culled, then it is projected and scaled to window coordinates, which become the
     * new current raster position, and the `GL_CURRENT_RASTER_POSITION_VALID` flag is set. If the vertex *is*
     * culled, then the valid bit is cleared and the current raster position and associated color and texture
     * coordinates are undefined.
     *
     * The current raster position also includes some associated color data and texture coordinates. If lighting is
     * enabled, then `GL_CURRENT_RASTER_COLOR` (in RGBA mode) or `GL_CURRENT_RASTER_INDEX` (in color index mode) is
     * set to the color produced by the lighting calculation (see {@see glLight}, {@see glLightModel},
     * and {@see glShadeModel}). If lighting is disabled, current color (in RGBA mode, state variable
     * `GL_CURRENT_COLOR`) or color index (in color index mode, state variable `GL_CURRENT_INDEX`) is used to update
     * the current raster color. `GL_CURRENT_RASTER_SECONDARY_COLOR` (in RGBA mode) is likewise updated.
     *
     * Likewise, `GL_CURRENT_RASTER_TEXTURE_COORDS` is updated as a function of `GL_CURRENT_TEXTURE_COORDS`, based on
     * the texture matrix and the texture generation functions (see {@see glTexGen}). Finally, the distance from
     * the origin of the eye coordinate system to the vertex as transformed by only the modelview matrix replaces
     * `GL_CURRENT_RASTER_DISTANCE`.
     *
     * Initially, the current raster position is (0, 0, 0, 1), the current raster distance is 0, the valid bit is
     * set, the associated RGBA color is (1, 1, 1, 1), the associated color index is 1, and the associated texture
     * coordinates are (0, 0, 0, 1). In RGBA mode, `GL_CURRENT_RASTER_INDEX` is always 1; in color index mode, the
     * current raster RGBA color always maintains its initial value.
     *
     * @see http://docs.gl/gl2/glRasterPos
     * @since 1.1
     * @param int $x
     * @param int $y
     * @param int $z
     * @return void
     */
    public static function glRasterPos3s(int $x, int $y, int $z): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= -32768 && $x <= 32767, 'Argument $x overflow: C type GLshort is required');
        assert($y >= -32768 && $y <= 32767, 'Argument $y overflow: C type GLshort is required');
        assert($z >= -32768 && $z <= 32767, 'Argument $z overflow: C type GLshort is required');

        self::$ffi->glRasterPos3s($x, $y, $z);
    }

    /**
     * The GL maintains a 3D position in window coordinates. This position, called the raster position, is used to
     * position pixel and bitmap write operations. It is maintained with subpixel accuracy. See {@see glBitmap},
     * {@see glDrawPixels}, and {@see glCopyPixels}.
     *
     * The current raster position consists of three window coordinates (x, y, z), a clip coordinate value (w), an
     * eye coordinate distance, a valid bit, and associated color data and texture coordinates. The w coordinate is a
     * clip coordinate, because w is not projected to window coordinates. `glRasterPos4` specifies object coordinates
     * x, y, z, and w explicitly. `glRasterPos3` specifies object coordinate x, y, and z explicitly, while w is
     * implicitly set to 1. `glRasterPos2` uses the argument values for x and y while implicitly setting z and w to 0
     * and 1.
     *
     * The object coordinates presented by `glRasterPos` are treated just like those of a {@see glVertex}
     * command: They are transformed by the current modelview and projection matrices and passed to the clipping
     * stage. If the vertex is not culled, then it is projected and scaled to window coordinates, which become the
     * new current raster position, and the `GL_CURRENT_RASTER_POSITION_VALID` flag is set. If the vertex *is*
     * culled, then the valid bit is cleared and the current raster position and associated color and texture
     * coordinates are undefined.
     *
     * The current raster position also includes some associated color data and texture coordinates. If lighting is
     * enabled, then `GL_CURRENT_RASTER_COLOR` (in RGBA mode) or `GL_CURRENT_RASTER_INDEX` (in color index mode) is
     * set to the color produced by the lighting calculation (see {@see glLight}, {@see glLightModel},
     * and {@see glShadeModel}). If lighting is disabled, current color (in RGBA mode, state variable
     * `GL_CURRENT_COLOR`) or color index (in color index mode, state variable `GL_CURRENT_INDEX`) is used to update
     * the current raster color. `GL_CURRENT_RASTER_SECONDARY_COLOR` (in RGBA mode) is likewise updated.
     *
     * Likewise, `GL_CURRENT_RASTER_TEXTURE_COORDS` is updated as a function of `GL_CURRENT_TEXTURE_COORDS`, based on
     * the texture matrix and the texture generation functions (see {@see glTexGen}). Finally, the distance from
     * the origin of the eye coordinate system to the vertex as transformed by only the modelview matrix replaces
     * `GL_CURRENT_RASTER_DISTANCE`.
     *
     * Initially, the current raster position is (0, 0, 0, 1), the current raster distance is 0, the valid bit is
     * set, the associated RGBA color is (1, 1, 1, 1), the associated color index is 1, and the associated texture
     * coordinates are (0, 0, 0, 1). In RGBA mode, `GL_CURRENT_RASTER_INDEX` is always 1; in color index mode, the
     * current raster RGBA color always maintains its initial value.
     *
     * @see http://docs.gl/gl2/glRasterPos
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glRasterPos3sv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glRasterPos3sv($v);
    }

    /**
     * The GL maintains a 3D position in window coordinates. This position, called the raster position, is used to
     * position pixel and bitmap write operations. It is maintained with subpixel accuracy. See {@see glBitmap},
     * {@see glDrawPixels}, and {@see glCopyPixels}.
     *
     * The current raster position consists of three window coordinates (x, y, z), a clip coordinate value (w), an
     * eye coordinate distance, a valid bit, and associated color data and texture coordinates. The w coordinate is a
     * clip coordinate, because w is not projected to window coordinates. `glRasterPos4` specifies object coordinates
     * x, y, z, and w explicitly. `glRasterPos3` specifies object coordinate x, y, and z explicitly, while w is
     * implicitly set to 1. `glRasterPos2` uses the argument values for x and y while implicitly setting z and w to 0
     * and 1.
     *
     * The object coordinates presented by `glRasterPos` are treated just like those of a {@see glVertex}
     * command: They are transformed by the current modelview and projection matrices and passed to the clipping
     * stage. If the vertex is not culled, then it is projected and scaled to window coordinates, which become the
     * new current raster position, and the `GL_CURRENT_RASTER_POSITION_VALID` flag is set. If the vertex *is*
     * culled, then the valid bit is cleared and the current raster position and associated color and texture
     * coordinates are undefined.
     *
     * The current raster position also includes some associated color data and texture coordinates. If lighting is
     * enabled, then `GL_CURRENT_RASTER_COLOR` (in RGBA mode) or `GL_CURRENT_RASTER_INDEX` (in color index mode) is
     * set to the color produced by the lighting calculation (see {@see glLight}, {@see glLightModel},
     * and {@see glShadeModel}). If lighting is disabled, current color (in RGBA mode, state variable
     * `GL_CURRENT_COLOR`) or color index (in color index mode, state variable `GL_CURRENT_INDEX`) is used to update
     * the current raster color. `GL_CURRENT_RASTER_SECONDARY_COLOR` (in RGBA mode) is likewise updated.
     *
     * Likewise, `GL_CURRENT_RASTER_TEXTURE_COORDS` is updated as a function of `GL_CURRENT_TEXTURE_COORDS`, based on
     * the texture matrix and the texture generation functions (see {@see glTexGen}). Finally, the distance from
     * the origin of the eye coordinate system to the vertex as transformed by only the modelview matrix replaces
     * `GL_CURRENT_RASTER_DISTANCE`.
     *
     * Initially, the current raster position is (0, 0, 0, 1), the current raster distance is 0, the valid bit is
     * set, the associated RGBA color is (1, 1, 1, 1), the associated color index is 1, and the associated texture
     * coordinates are (0, 0, 0, 1). In RGBA mode, `GL_CURRENT_RASTER_INDEX` is always 1; in color index mode, the
     * current raster RGBA color always maintains its initial value.
     *
     * @see http://docs.gl/gl2/glRasterPos
     * @since 1.1
     * @param float $x
     * @param float $y
     * @param float $z
     * @param float $w
     * @return void
     */
    public static function glRasterPos4d(float $x, float $y, float $z, float $w): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= \PHP_FLOAT_MIN && $x <= \PHP_FLOAT_MAX, 'Argument $x overflow: C type GLdouble is required');
        assert($y >= \PHP_FLOAT_MIN && $y <= \PHP_FLOAT_MAX, 'Argument $y overflow: C type GLdouble is required');
        assert($z >= \PHP_FLOAT_MIN && $z <= \PHP_FLOAT_MAX, 'Argument $z overflow: C type GLdouble is required');
        assert($w >= \PHP_FLOAT_MIN && $w <= \PHP_FLOAT_MAX, 'Argument $w overflow: C type GLdouble is required');

        self::$ffi->glRasterPos4d($x, $y, $z, $w);
    }

    /**
     * The GL maintains a 3D position in window coordinates. This position, called the raster position, is used to
     * position pixel and bitmap write operations. It is maintained with subpixel accuracy. See {@see glBitmap},
     * {@see glDrawPixels}, and {@see glCopyPixels}.
     *
     * The current raster position consists of three window coordinates (x, y, z), a clip coordinate value (w), an
     * eye coordinate distance, a valid bit, and associated color data and texture coordinates. The w coordinate is a
     * clip coordinate, because w is not projected to window coordinates. `glRasterPos4` specifies object coordinates
     * x, y, z, and w explicitly. `glRasterPos3` specifies object coordinate x, y, and z explicitly, while w is
     * implicitly set to 1. `glRasterPos2` uses the argument values for x and y while implicitly setting z and w to 0
     * and 1.
     *
     * The object coordinates presented by `glRasterPos` are treated just like those of a {@see glVertex}
     * command: They are transformed by the current modelview and projection matrices and passed to the clipping
     * stage. If the vertex is not culled, then it is projected and scaled to window coordinates, which become the
     * new current raster position, and the `GL_CURRENT_RASTER_POSITION_VALID` flag is set. If the vertex *is*
     * culled, then the valid bit is cleared and the current raster position and associated color and texture
     * coordinates are undefined.
     *
     * The current raster position also includes some associated color data and texture coordinates. If lighting is
     * enabled, then `GL_CURRENT_RASTER_COLOR` (in RGBA mode) or `GL_CURRENT_RASTER_INDEX` (in color index mode) is
     * set to the color produced by the lighting calculation (see {@see glLight}, {@see glLightModel},
     * and {@see glShadeModel}). If lighting is disabled, current color (in RGBA mode, state variable
     * `GL_CURRENT_COLOR`) or color index (in color index mode, state variable `GL_CURRENT_INDEX`) is used to update
     * the current raster color. `GL_CURRENT_RASTER_SECONDARY_COLOR` (in RGBA mode) is likewise updated.
     *
     * Likewise, `GL_CURRENT_RASTER_TEXTURE_COORDS` is updated as a function of `GL_CURRENT_TEXTURE_COORDS`, based on
     * the texture matrix and the texture generation functions (see {@see glTexGen}). Finally, the distance from
     * the origin of the eye coordinate system to the vertex as transformed by only the modelview matrix replaces
     * `GL_CURRENT_RASTER_DISTANCE`.
     *
     * Initially, the current raster position is (0, 0, 0, 1), the current raster distance is 0, the valid bit is
     * set, the associated RGBA color is (1, 1, 1, 1), the associated color index is 1, and the associated texture
     * coordinates are (0, 0, 0, 1). In RGBA mode, `GL_CURRENT_RASTER_INDEX` is always 1; in color index mode, the
     * current raster RGBA color always maintains its initial value.
     *
     * @see http://docs.gl/gl2/glRasterPos
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glRasterPos4dv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glRasterPos4dv($v);
    }

    /**
     * The GL maintains a 3D position in window coordinates. This position, called the raster position, is used to
     * position pixel and bitmap write operations. It is maintained with subpixel accuracy. See {@see glBitmap},
     * {@see glDrawPixels}, and {@see glCopyPixels}.
     *
     * The current raster position consists of three window coordinates (x, y, z), a clip coordinate value (w), an
     * eye coordinate distance, a valid bit, and associated color data and texture coordinates. The w coordinate is a
     * clip coordinate, because w is not projected to window coordinates. `glRasterPos4` specifies object coordinates
     * x, y, z, and w explicitly. `glRasterPos3` specifies object coordinate x, y, and z explicitly, while w is
     * implicitly set to 1. `glRasterPos2` uses the argument values for x and y while implicitly setting z and w to 0
     * and 1.
     *
     * The object coordinates presented by `glRasterPos` are treated just like those of a {@see glVertex}
     * command: They are transformed by the current modelview and projection matrices and passed to the clipping
     * stage. If the vertex is not culled, then it is projected and scaled to window coordinates, which become the
     * new current raster position, and the `GL_CURRENT_RASTER_POSITION_VALID` flag is set. If the vertex *is*
     * culled, then the valid bit is cleared and the current raster position and associated color and texture
     * coordinates are undefined.
     *
     * The current raster position also includes some associated color data and texture coordinates. If lighting is
     * enabled, then `GL_CURRENT_RASTER_COLOR` (in RGBA mode) or `GL_CURRENT_RASTER_INDEX` (in color index mode) is
     * set to the color produced by the lighting calculation (see {@see glLight}, {@see glLightModel},
     * and {@see glShadeModel}). If lighting is disabled, current color (in RGBA mode, state variable
     * `GL_CURRENT_COLOR`) or color index (in color index mode, state variable `GL_CURRENT_INDEX`) is used to update
     * the current raster color. `GL_CURRENT_RASTER_SECONDARY_COLOR` (in RGBA mode) is likewise updated.
     *
     * Likewise, `GL_CURRENT_RASTER_TEXTURE_COORDS` is updated as a function of `GL_CURRENT_TEXTURE_COORDS`, based on
     * the texture matrix and the texture generation functions (see {@see glTexGen}). Finally, the distance from
     * the origin of the eye coordinate system to the vertex as transformed by only the modelview matrix replaces
     * `GL_CURRENT_RASTER_DISTANCE`.
     *
     * Initially, the current raster position is (0, 0, 0, 1), the current raster distance is 0, the valid bit is
     * set, the associated RGBA color is (1, 1, 1, 1), the associated color index is 1, and the associated texture
     * coordinates are (0, 0, 0, 1). In RGBA mode, `GL_CURRENT_RASTER_INDEX` is always 1; in color index mode, the
     * current raster RGBA color always maintains its initial value.
     *
     * @see http://docs.gl/gl2/glRasterPos
     * @since 1.1
     * @param float $x
     * @param float $y
     * @param float $z
     * @param float $w
     * @return void
     */
    public static function glRasterPos4f(float $x, float $y, float $z, float $w): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= -3.40282e38 && $x <= 3.40282e38, 'Argument $x overflow: C type GLfloat is required');
        assert($y >= -3.40282e38 && $y <= 3.40282e38, 'Argument $y overflow: C type GLfloat is required');
        assert($z >= -3.40282e38 && $z <= 3.40282e38, 'Argument $z overflow: C type GLfloat is required');
        assert($w >= -3.40282e38 && $w <= 3.40282e38, 'Argument $w overflow: C type GLfloat is required');

        self::$ffi->glRasterPos4f($x, $y, $z, $w);
    }

    /**
     * The GL maintains a 3D position in window coordinates. This position, called the raster position, is used to
     * position pixel and bitmap write operations. It is maintained with subpixel accuracy. See {@see glBitmap},
     * {@see glDrawPixels}, and {@see glCopyPixels}.
     *
     * The current raster position consists of three window coordinates (x, y, z), a clip coordinate value (w), an
     * eye coordinate distance, a valid bit, and associated color data and texture coordinates. The w coordinate is a
     * clip coordinate, because w is not projected to window coordinates. `glRasterPos4` specifies object coordinates
     * x, y, z, and w explicitly. `glRasterPos3` specifies object coordinate x, y, and z explicitly, while w is
     * implicitly set to 1. `glRasterPos2` uses the argument values for x and y while implicitly setting z and w to 0
     * and 1.
     *
     * The object coordinates presented by `glRasterPos` are treated just like those of a {@see glVertex}
     * command: They are transformed by the current modelview and projection matrices and passed to the clipping
     * stage. If the vertex is not culled, then it is projected and scaled to window coordinates, which become the
     * new current raster position, and the `GL_CURRENT_RASTER_POSITION_VALID` flag is set. If the vertex *is*
     * culled, then the valid bit is cleared and the current raster position and associated color and texture
     * coordinates are undefined.
     *
     * The current raster position also includes some associated color data and texture coordinates. If lighting is
     * enabled, then `GL_CURRENT_RASTER_COLOR` (in RGBA mode) or `GL_CURRENT_RASTER_INDEX` (in color index mode) is
     * set to the color produced by the lighting calculation (see {@see glLight}, {@see glLightModel},
     * and {@see glShadeModel}). If lighting is disabled, current color (in RGBA mode, state variable
     * `GL_CURRENT_COLOR`) or color index (in color index mode, state variable `GL_CURRENT_INDEX`) is used to update
     * the current raster color. `GL_CURRENT_RASTER_SECONDARY_COLOR` (in RGBA mode) is likewise updated.
     *
     * Likewise, `GL_CURRENT_RASTER_TEXTURE_COORDS` is updated as a function of `GL_CURRENT_TEXTURE_COORDS`, based on
     * the texture matrix and the texture generation functions (see {@see glTexGen}). Finally, the distance from
     * the origin of the eye coordinate system to the vertex as transformed by only the modelview matrix replaces
     * `GL_CURRENT_RASTER_DISTANCE`.
     *
     * Initially, the current raster position is (0, 0, 0, 1), the current raster distance is 0, the valid bit is
     * set, the associated RGBA color is (1, 1, 1, 1), the associated color index is 1, and the associated texture
     * coordinates are (0, 0, 0, 1). In RGBA mode, `GL_CURRENT_RASTER_INDEX` is always 1; in color index mode, the
     * current raster RGBA color always maintains its initial value.
     *
     * @see http://docs.gl/gl2/glRasterPos
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glRasterPos4fv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glRasterPos4fv($v);
    }

    /**
     * The GL maintains a 3D position in window coordinates. This position, called the raster position, is used to
     * position pixel and bitmap write operations. It is maintained with subpixel accuracy. See {@see glBitmap},
     * {@see glDrawPixels}, and {@see glCopyPixels}.
     *
     * The current raster position consists of three window coordinates (x, y, z), a clip coordinate value (w), an
     * eye coordinate distance, a valid bit, and associated color data and texture coordinates. The w coordinate is a
     * clip coordinate, because w is not projected to window coordinates. `glRasterPos4` specifies object coordinates
     * x, y, z, and w explicitly. `glRasterPos3` specifies object coordinate x, y, and z explicitly, while w is
     * implicitly set to 1. `glRasterPos2` uses the argument values for x and y while implicitly setting z and w to 0
     * and 1.
     *
     * The object coordinates presented by `glRasterPos` are treated just like those of a {@see glVertex}
     * command: They are transformed by the current modelview and projection matrices and passed to the clipping
     * stage. If the vertex is not culled, then it is projected and scaled to window coordinates, which become the
     * new current raster position, and the `GL_CURRENT_RASTER_POSITION_VALID` flag is set. If the vertex *is*
     * culled, then the valid bit is cleared and the current raster position and associated color and texture
     * coordinates are undefined.
     *
     * The current raster position also includes some associated color data and texture coordinates. If lighting is
     * enabled, then `GL_CURRENT_RASTER_COLOR` (in RGBA mode) or `GL_CURRENT_RASTER_INDEX` (in color index mode) is
     * set to the color produced by the lighting calculation (see {@see glLight}, {@see glLightModel},
     * and {@see glShadeModel}). If lighting is disabled, current color (in RGBA mode, state variable
     * `GL_CURRENT_COLOR`) or color index (in color index mode, state variable `GL_CURRENT_INDEX`) is used to update
     * the current raster color. `GL_CURRENT_RASTER_SECONDARY_COLOR` (in RGBA mode) is likewise updated.
     *
     * Likewise, `GL_CURRENT_RASTER_TEXTURE_COORDS` is updated as a function of `GL_CURRENT_TEXTURE_COORDS`, based on
     * the texture matrix and the texture generation functions (see {@see glTexGen}). Finally, the distance from
     * the origin of the eye coordinate system to the vertex as transformed by only the modelview matrix replaces
     * `GL_CURRENT_RASTER_DISTANCE`.
     *
     * Initially, the current raster position is (0, 0, 0, 1), the current raster distance is 0, the valid bit is
     * set, the associated RGBA color is (1, 1, 1, 1), the associated color index is 1, and the associated texture
     * coordinates are (0, 0, 0, 1). In RGBA mode, `GL_CURRENT_RASTER_INDEX` is always 1; in color index mode, the
     * current raster RGBA color always maintains its initial value.
     *
     * @see http://docs.gl/gl2/glRasterPos
     * @since 1.1
     * @param int $x
     * @param int $y
     * @param int $z
     * @param int $w
     * @return void
     */
    public static function glRasterPos4i(int $x, int $y, int $z, int $w): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= \PHP_INT_MIN && $x <= \PHP_INT_MAX, 'Argument $x overflow: C type GLint is required');
        assert($y >= \PHP_INT_MIN && $y <= \PHP_INT_MAX, 'Argument $y overflow: C type GLint is required');
        assert($z >= \PHP_INT_MIN && $z <= \PHP_INT_MAX, 'Argument $z overflow: C type GLint is required');
        assert($w >= \PHP_INT_MIN && $w <= \PHP_INT_MAX, 'Argument $w overflow: C type GLint is required');

        self::$ffi->glRasterPos4i($x, $y, $z, $w);
    }

    /**
     * The GL maintains a 3D position in window coordinates. This position, called the raster position, is used to
     * position pixel and bitmap write operations. It is maintained with subpixel accuracy. See {@see glBitmap},
     * {@see glDrawPixels}, and {@see glCopyPixels}.
     *
     * The current raster position consists of three window coordinates (x, y, z), a clip coordinate value (w), an
     * eye coordinate distance, a valid bit, and associated color data and texture coordinates. The w coordinate is a
     * clip coordinate, because w is not projected to window coordinates. `glRasterPos4` specifies object coordinates
     * x, y, z, and w explicitly. `glRasterPos3` specifies object coordinate x, y, and z explicitly, while w is
     * implicitly set to 1. `glRasterPos2` uses the argument values for x and y while implicitly setting z and w to 0
     * and 1.
     *
     * The object coordinates presented by `glRasterPos` are treated just like those of a {@see glVertex}
     * command: They are transformed by the current modelview and projection matrices and passed to the clipping
     * stage. If the vertex is not culled, then it is projected and scaled to window coordinates, which become the
     * new current raster position, and the `GL_CURRENT_RASTER_POSITION_VALID` flag is set. If the vertex *is*
     * culled, then the valid bit is cleared and the current raster position and associated color and texture
     * coordinates are undefined.
     *
     * The current raster position also includes some associated color data and texture coordinates. If lighting is
     * enabled, then `GL_CURRENT_RASTER_COLOR` (in RGBA mode) or `GL_CURRENT_RASTER_INDEX` (in color index mode) is
     * set to the color produced by the lighting calculation (see {@see glLight}, {@see glLightModel},
     * and {@see glShadeModel}). If lighting is disabled, current color (in RGBA mode, state variable
     * `GL_CURRENT_COLOR`) or color index (in color index mode, state variable `GL_CURRENT_INDEX`) is used to update
     * the current raster color. `GL_CURRENT_RASTER_SECONDARY_COLOR` (in RGBA mode) is likewise updated.
     *
     * Likewise, `GL_CURRENT_RASTER_TEXTURE_COORDS` is updated as a function of `GL_CURRENT_TEXTURE_COORDS`, based on
     * the texture matrix and the texture generation functions (see {@see glTexGen}). Finally, the distance from
     * the origin of the eye coordinate system to the vertex as transformed by only the modelview matrix replaces
     * `GL_CURRENT_RASTER_DISTANCE`.
     *
     * Initially, the current raster position is (0, 0, 0, 1), the current raster distance is 0, the valid bit is
     * set, the associated RGBA color is (1, 1, 1, 1), the associated color index is 1, and the associated texture
     * coordinates are (0, 0, 0, 1). In RGBA mode, `GL_CURRENT_RASTER_INDEX` is always 1; in color index mode, the
     * current raster RGBA color always maintains its initial value.
     *
     * @see http://docs.gl/gl2/glRasterPos
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glRasterPos4iv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glRasterPos4iv($v);
    }

    /**
     * The GL maintains a 3D position in window coordinates. This position, called the raster position, is used to
     * position pixel and bitmap write operations. It is maintained with subpixel accuracy. See {@see glBitmap},
     * {@see glDrawPixels}, and {@see glCopyPixels}.
     *
     * The current raster position consists of three window coordinates (x, y, z), a clip coordinate value (w), an
     * eye coordinate distance, a valid bit, and associated color data and texture coordinates. The w coordinate is a
     * clip coordinate, because w is not projected to window coordinates. `glRasterPos4` specifies object coordinates
     * x, y, z, and w explicitly. `glRasterPos3` specifies object coordinate x, y, and z explicitly, while w is
     * implicitly set to 1. `glRasterPos2` uses the argument values for x and y while implicitly setting z and w to 0
     * and 1.
     *
     * The object coordinates presented by `glRasterPos` are treated just like those of a {@see glVertex}
     * command: They are transformed by the current modelview and projection matrices and passed to the clipping
     * stage. If the vertex is not culled, then it is projected and scaled to window coordinates, which become the
     * new current raster position, and the `GL_CURRENT_RASTER_POSITION_VALID` flag is set. If the vertex *is*
     * culled, then the valid bit is cleared and the current raster position and associated color and texture
     * coordinates are undefined.
     *
     * The current raster position also includes some associated color data and texture coordinates. If lighting is
     * enabled, then `GL_CURRENT_RASTER_COLOR` (in RGBA mode) or `GL_CURRENT_RASTER_INDEX` (in color index mode) is
     * set to the color produced by the lighting calculation (see {@see glLight}, {@see glLightModel},
     * and {@see glShadeModel}). If lighting is disabled, current color (in RGBA mode, state variable
     * `GL_CURRENT_COLOR`) or color index (in color index mode, state variable `GL_CURRENT_INDEX`) is used to update
     * the current raster color. `GL_CURRENT_RASTER_SECONDARY_COLOR` (in RGBA mode) is likewise updated.
     *
     * Likewise, `GL_CURRENT_RASTER_TEXTURE_COORDS` is updated as a function of `GL_CURRENT_TEXTURE_COORDS`, based on
     * the texture matrix and the texture generation functions (see {@see glTexGen}). Finally, the distance from
     * the origin of the eye coordinate system to the vertex as transformed by only the modelview matrix replaces
     * `GL_CURRENT_RASTER_DISTANCE`.
     *
     * Initially, the current raster position is (0, 0, 0, 1), the current raster distance is 0, the valid bit is
     * set, the associated RGBA color is (1, 1, 1, 1), the associated color index is 1, and the associated texture
     * coordinates are (0, 0, 0, 1). In RGBA mode, `GL_CURRENT_RASTER_INDEX` is always 1; in color index mode, the
     * current raster RGBA color always maintains its initial value.
     *
     * @see http://docs.gl/gl2/glRasterPos
     * @since 1.1
     * @param int $x
     * @param int $y
     * @param int $z
     * @param int $w
     * @return void
     */
    public static function glRasterPos4s(int $x, int $y, int $z, int $w): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= -32768 && $x <= 32767, 'Argument $x overflow: C type GLshort is required');
        assert($y >= -32768 && $y <= 32767, 'Argument $y overflow: C type GLshort is required');
        assert($z >= -32768 && $z <= 32767, 'Argument $z overflow: C type GLshort is required');
        assert($w >= -32768 && $w <= 32767, 'Argument $w overflow: C type GLshort is required');

        self::$ffi->glRasterPos4s($x, $y, $z, $w);
    }

    /**
     * The GL maintains a 3D position in window coordinates. This position, called the raster position, is used to
     * position pixel and bitmap write operations. It is maintained with subpixel accuracy. See {@see glBitmap},
     * {@see glDrawPixels}, and {@see glCopyPixels}.
     *
     * The current raster position consists of three window coordinates (x, y, z), a clip coordinate value (w), an
     * eye coordinate distance, a valid bit, and associated color data and texture coordinates. The w coordinate is a
     * clip coordinate, because w is not projected to window coordinates. `glRasterPos4` specifies object coordinates
     * x, y, z, and w explicitly. `glRasterPos3` specifies object coordinate x, y, and z explicitly, while w is
     * implicitly set to 1. `glRasterPos2` uses the argument values for x and y while implicitly setting z and w to 0
     * and 1.
     *
     * The object coordinates presented by `glRasterPos` are treated just like those of a {@see glVertex}
     * command: They are transformed by the current modelview and projection matrices and passed to the clipping
     * stage. If the vertex is not culled, then it is projected and scaled to window coordinates, which become the
     * new current raster position, and the `GL_CURRENT_RASTER_POSITION_VALID` flag is set. If the vertex *is*
     * culled, then the valid bit is cleared and the current raster position and associated color and texture
     * coordinates are undefined.
     *
     * The current raster position also includes some associated color data and texture coordinates. If lighting is
     * enabled, then `GL_CURRENT_RASTER_COLOR` (in RGBA mode) or `GL_CURRENT_RASTER_INDEX` (in color index mode) is
     * set to the color produced by the lighting calculation (see {@see glLight}, {@see glLightModel},
     * and {@see glShadeModel}). If lighting is disabled, current color (in RGBA mode, state variable
     * `GL_CURRENT_COLOR`) or color index (in color index mode, state variable `GL_CURRENT_INDEX`) is used to update
     * the current raster color. `GL_CURRENT_RASTER_SECONDARY_COLOR` (in RGBA mode) is likewise updated.
     *
     * Likewise, `GL_CURRENT_RASTER_TEXTURE_COORDS` is updated as a function of `GL_CURRENT_TEXTURE_COORDS`, based on
     * the texture matrix and the texture generation functions (see {@see glTexGen}). Finally, the distance from
     * the origin of the eye coordinate system to the vertex as transformed by only the modelview matrix replaces
     * `GL_CURRENT_RASTER_DISTANCE`.
     *
     * Initially, the current raster position is (0, 0, 0, 1), the current raster distance is 0, the valid bit is
     * set, the associated RGBA color is (1, 1, 1, 1), the associated color index is 1, and the associated texture
     * coordinates are (0, 0, 0, 1). In RGBA mode, `GL_CURRENT_RASTER_INDEX` is always 1; in color index mode, the
     * current raster RGBA color always maintains its initial value.
     *
     * @see http://docs.gl/gl2/glRasterPos
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glRasterPos4sv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glRasterPos4sv($v);
    }

    /**
     * Specifies a color buffer as the source for subsequent {@see glReadPixels},
     * {@see glCopyTexImage1D}, {@see glCopyTexImage2D},
     * {@see glCopyTexSubImage1D}, {@see glCopyTexSubImage2D},
     * {@see glCopyTexSubImage3D}, and {@see glCopyPixels} commands. *`mode`* accepts one of
     * twelve or more predefined values. (`GL_AUX0` through `GL_AUX3` are always defined.) In a fully configured
     * system, `GL_FRONT`, `GL_LEFT`, and `GL_FRONT_LEFT` all name the front left buffer, `GL_FRONT_RIGHT` and
     * `GL_RIGHT` name the front right buffer, and `GL_BACK_LEFT` and `GL_BACK` name the back left buffer.
     *
     * Nonstereo double-buffered configurations have only a front left and a back left buffer. Single-buffered
     * configurations have a front left and a front right buffer if stereo, and only a front left buffer if
     * nonstereo. It is an error to specify a nonexistent buffer to `glReadBuffer`.
     *
     * *`mode`* is initially `GL_FRONT` in single-buffered configurations and `GL_BACK` in double-buffered
     * configurations.
     *
     * @see http://docs.gl/gl2/glReadBuffer
     * @see http://docs.gl/gl3/glReadBuffer
     * @see http://docs.gl/gl4/glReadBuffer
     * @since 1.1
     * @param int $mode
     * @return void
     */
    public static function glReadBuffer(int $mode): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');

        self::$ffi->glReadBuffer($mode);
    }

    /**
     * Returns pixel data from the frame buffer, starting with the pixel whose lower left corner is at location
     * (*`x`*, *`y`*), into client memory starting at location *`data`*. Several parameters control the processing of
     * the pixel data before it is placed into client memory. These parameters are set with three commands:
     * {@see glPixelStore}, {@see glPixelTransfer}, and {@see glPixelMap}. This reference
     * page describes the effects on `glReadPixels` of most, but not all of the parameters specified by these three
     * commands.
     *
     * If a non-zero named buffer object is bound to the `GL_PIXEL_PACK_BUFFER` target (see
     * {@see glBindBuffer}) while a block of pixels is requested, *`data`* is treated as a byte offset into
     * the buffer object's data store rather than a pointer to client memory.
     *
     * When the `ARB_imaging` extension is supported, the pixel data may be processed by additional operations
     * including color table lookup, color matrix transformations, convolutions, histograms, and minimum and maximum
     * pixel value computations.
     *
     *  - `glReadPixels` returns values from each pixel with lower left corner at x + i y + j for 0 &lt;= i &lt;
     * width and 0 &lt;= j &lt; height . This pixel is said to be the ith pixel in the jth row. Pixels are returned
     * in row order from the lowest to the highest row, left to right in each row.
     *
     * *`format`* specifies the format for the returned pixel values; accepted values are:
     *
     *  - `GL_COLOR_INDEX` Color indices are read from the color buffer selected by {@see glReadBuffer}.
     * Each index is converted to fixed point, shifted left or right depending on the value and sign of
     * `GL_INDEX_SHIFT`, and added to `GL_INDEX_OFFSET`. If `GL_MAP_COLOR` is `GL_TRUE`, indices are replaced by
     * their mappings in the table `GL_PIXEL_MAP_I_TO_I`.
     *
     *  - `GL_STENCIL_INDEX` Stencil values are read from the stencil buffer. Each index is converted to fixed point,
     * shifted left or right depending on the value and sign of `GL_INDEX_SHIFT`, and added to `GL_INDEX_OFFSET`. If
     * `GL_MAP_STENCIL` is `GL_TRUE`, indices are replaced by their mappings in the table `GL_PIXEL_MAP_S_TO_S`.
     *
     *  - `GL_DEPTH_COMPONENT` Depth values are read from the depth buffer. Each component is converted to floating
     * point such that the minimum depth value maps to 0 and the maximum value maps to 1. Each component is then
     * multiplied by `GL_DEPTH_SCALE`, added to `GL_DEPTH_BIAS`, and finally clamped to the range 0 1 .
     *
     *  - `GL_RED``GL_GREEN``GL_BLUE``GL_ALPHA``GL_RGB``GL_BGR``GL_RGBA``GL_BGRA``GL_LUMINANCE``GL_LUMINANCE_ALPHA`
     * Processing differs depending on whether color buffers store color indices or RGBA color components. If color
     * indices are stored, they are read from the color buffer selected by {@see glReadBuffer}. Each index
     * is converted to fixed point, shifted left or right depending on the value and sign of `GL_INDEX_SHIFT`, and
     * added to `GL_INDEX_OFFSET`. Indices are then replaced by the red, green, blue, and alpha values obtained by
     * indexing the tables `GL_PIXEL_MAP_I_TO_R`, `GL_PIXEL_MAP_I_TO_G`, `GL_PIXEL_MAP_I_TO_B`, and
     * `GL_PIXEL_MAP_I_TO_A`. Each table must be of size 2 n , but n may be different for different tables. Before an
     * index is used to look up a value in a table of size 2 n , it must be masked against 2 n - 1 .
     *
     * If RGBA color components are stored in the color buffers, they are read from the color buffer selected by
     * {@see glReadBuffer}. Each color component is converted to floating point such that zero intensity
     * maps to 0.0 and full intensity maps to 1.0. Each component is then multiplied by `GL_c_SCALE` and added to
     * `GL_c_BIAS`, where *c* is RED, GREEN, BLUE, or ALPHA. Finally, if `GL_MAP_COLOR` is `GL_TRUE`, each component
     * is clamped to the range 0 1 , scaled to the size of its corresponding table, and is then replaced by its
     * mapping in the table `GL_PIXEL_MAP_c_TO_c`, where *c* is R, G, B, or A.
     *
     * Unneeded data is then discarded. For example, `GL_RED` discards the green, blue, and alpha components, while
     * `GL_RGB` discards only the alpha component. `GL_LUMINANCE` computes a single-component value as the sum of the
     * red, green, and blue components, and `GL_LUMINANCE_ALPHA` does the same, while keeping alpha as a second
     * value. The final values are clamped to the range 0 1 .
     *
     * The shift, scale, bias, and lookup factors just described are all specified by
     * {@see glPixelTransfer}. The lookup table contents themselves are specified by
     * {@see glPixelMap}.
     *
     * Finally, the indices or components are converted to the proper format, as specified by *`type`*. If *`format`*
     * is `GL_COLOR_INDEX` or `GL_STENCIL_INDEX` and *`type`* is not `GL_FLOAT`, each index is masked with the mask
     * value given in the following table. If *`type`* is `GL_FLOAT`, then each integer index is converted to
     * single-precision floating-point format.
     *
     * If *`format`* is `GL_RED`, `GL_GREEN`, `GL_BLUE`, `GL_ALPHA`, `GL_RGB`, `GL_BGR`, `GL_RGBA`, `GL_BGRA`,
     * `GL_LUMINANCE`, or `GL_LUMINANCE_ALPHA` and *`type`* is not `GL_FLOAT`, each component is multiplied by the
     * multiplier shown in the following table. If type is `GL_FLOAT`, then each component is passed as is (or
     * converted to the client's single-precision floating-point format if it is different from the one used by the
     * GL).
     *
     * *`type`* **Index Mask** **Component Conversion** `GL_UNSIGNED_BYTE` 2 8 - 1 2 8 - 1 ⁢ c `GL_BYTE` 2 7 - 1 2
     * 8 - 1 ⁢ c - 1 2 `GL_BITMAP` 1 1 `GL_UNSIGNED_SHORT` 2 16 - 1 2 16 - 1 ⁢ c `GL_SHORT` 2 15 - 1 2 16 - 1 ⁢
     * c - 1 2 `GL_UNSIGNED_INT` 2 32 - 1 2 32 - 1 ⁢ c `GL_INT` 2 31 - 1 2 32 - 1 ⁢ c - 1 2 `GL_FLOAT` none c
     *
     * Return values are placed in memory as follows. If *`format`* is `GL_COLOR_INDEX`, `GL_STENCIL_INDEX`,
     * `GL_DEPTH_COMPONENT`, `GL_RED`, `GL_GREEN`, `GL_BLUE`, `GL_ALPHA`, or `GL_LUMINANCE`, a single value is
     * returned and the data for the ith pixel in the jth row is placed in location j ⁢ width + i . `GL_RGB` and
     * `GL_BGR` return three values, `GL_RGBA` and `GL_BGRA` return four values, and `GL_LUMINANCE_ALPHA` returns two
     * values for each pixel, with all values corresponding to a single pixel occupying contiguous space in *`data`*.
     * Storage parameters set by {@see glPixelStore}, such as `GL_PACK_LSB_FIRST` and `GL_PACK_SWAP_BYTES`,
     * affect the way that data is written into memory. See {@see glPixelStore} for a description.
     *
     * @see http://docs.gl/gl2/glReadPixels
     * @see http://docs.gl/gl3/glReadPixels
     * @see http://docs.gl/gl4/glReadPixels
     * @since 1.1
     * @param int $x
     * @param int $y
     * @param int $width
     * @param int $height
     * @param int $format
     * @param int $type
     * @param \FFI\CData|\FFI\CPtr|null $pixels
     * @return void
     */
    public static function glReadPixels(int $x, int $y, int $width, int $height, int $format, int $type, ?\FFI\CData $pixels): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= \PHP_INT_MIN && $x <= \PHP_INT_MAX, 'Argument $x overflow: C type GLint is required');
        assert($y >= \PHP_INT_MIN && $y <= \PHP_INT_MAX, 'Argument $y overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');
        assert($format >= 0 && $format <= 4_294_967_295, 'Argument $format overflow: C type GLenum is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');

        self::$ffi->glReadPixels($x, $y, $width, $height, $format, $type, $pixels);
    }

    /**
     * @since 1.1
     * @param float $x1
     * @param float $y1
     * @param float $x2
     * @param float $y2
     * @return void
     */
    public static function glRectd(float $x1, float $y1, float $x2, float $y2): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x1 >= \PHP_FLOAT_MIN && $x1 <= \PHP_FLOAT_MAX, 'Argument $x1 overflow: C type GLdouble is required');
        assert($y1 >= \PHP_FLOAT_MIN && $y1 <= \PHP_FLOAT_MAX, 'Argument $y1 overflow: C type GLdouble is required');
        assert($x2 >= \PHP_FLOAT_MIN && $x2 <= \PHP_FLOAT_MAX, 'Argument $x2 overflow: C type GLdouble is required');
        assert($y2 >= \PHP_FLOAT_MIN && $y2 <= \PHP_FLOAT_MAX, 'Argument $y2 overflow: C type GLdouble is required');

        self::$ffi->glRectd($x1, $y1, $x2, $y2);
    }

    /**
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $v1
     * @param \FFI\CData|\FFI\CFloatPtr|null $v2
     * @return void
     */
    public static function glRectdv(?\FFI\CData $v1, ?\FFI\CData $v2): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glRectdv($v1, $v2);
    }

    /**
     * @since 1.1
     * @param float $x1
     * @param float $y1
     * @param float $x2
     * @param float $y2
     * @return void
     */
    public static function glRectf(float $x1, float $y1, float $x2, float $y2): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x1 >= -3.40282e38 && $x1 <= 3.40282e38, 'Argument $x1 overflow: C type GLfloat is required');
        assert($y1 >= -3.40282e38 && $y1 <= 3.40282e38, 'Argument $y1 overflow: C type GLfloat is required');
        assert($x2 >= -3.40282e38 && $x2 <= 3.40282e38, 'Argument $x2 overflow: C type GLfloat is required');
        assert($y2 >= -3.40282e38 && $y2 <= 3.40282e38, 'Argument $y2 overflow: C type GLfloat is required');

        self::$ffi->glRectf($x1, $y1, $x2, $y2);
    }

    /**
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $v1
     * @param \FFI\CData|\FFI\CFloatPtr|null $v2
     * @return void
     */
    public static function glRectfv(?\FFI\CData $v1, ?\FFI\CData $v2): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glRectfv($v1, $v2);
    }

    /**
     * @since 1.1
     * @param int $x1
     * @param int $y1
     * @param int $x2
     * @param int $y2
     * @return void
     */
    public static function glRecti(int $x1, int $y1, int $x2, int $y2): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x1 >= \PHP_INT_MIN && $x1 <= \PHP_INT_MAX, 'Argument $x1 overflow: C type GLint is required');
        assert($y1 >= \PHP_INT_MIN && $y1 <= \PHP_INT_MAX, 'Argument $y1 overflow: C type GLint is required');
        assert($x2 >= \PHP_INT_MIN && $x2 <= \PHP_INT_MAX, 'Argument $x2 overflow: C type GLint is required');
        assert($y2 >= \PHP_INT_MIN && $y2 <= \PHP_INT_MAX, 'Argument $y2 overflow: C type GLint is required');

        self::$ffi->glRecti($x1, $y1, $x2, $y2);
    }

    /**
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v1
     * @param \FFI\CData|\FFI\CIntPtr|null $v2
     * @return void
     */
    public static function glRectiv(?\FFI\CData $v1, ?\FFI\CData $v2): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glRectiv($v1, $v2);
    }

    /**
     * @since 1.1
     * @param int $x1
     * @param int $y1
     * @param int $x2
     * @param int $y2
     * @return void
     */
    public static function glRects(int $x1, int $y1, int $x2, int $y2): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x1 >= -32768 && $x1 <= 32767, 'Argument $x1 overflow: C type GLshort is required');
        assert($y1 >= -32768 && $y1 <= 32767, 'Argument $y1 overflow: C type GLshort is required');
        assert($x2 >= -32768 && $x2 <= 32767, 'Argument $x2 overflow: C type GLshort is required');
        assert($y2 >= -32768 && $y2 <= 32767, 'Argument $y2 overflow: C type GLshort is required');

        self::$ffi->glRects($x1, $y1, $x2, $y2);
    }

    /**
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v1
     * @param \FFI\CData|\FFI\CIntPtr|null $v2
     * @return void
     */
    public static function glRectsv(?\FFI\CData $v1, ?\FFI\CData $v2): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glRectsv($v1, $v2);
    }

    /**
     * @since 1.1
     * @param float $angle
     * @param float $x
     * @param float $y
     * @param float $z
     * @return void
     */
    public static function glRotated(float $angle, float $x, float $y, float $z): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($angle >= \PHP_FLOAT_MIN && $angle <= \PHP_FLOAT_MAX, 'Argument $angle overflow: C type GLdouble is required');
        assert($x >= \PHP_FLOAT_MIN && $x <= \PHP_FLOAT_MAX, 'Argument $x overflow: C type GLdouble is required');
        assert($y >= \PHP_FLOAT_MIN && $y <= \PHP_FLOAT_MAX, 'Argument $y overflow: C type GLdouble is required');
        assert($z >= \PHP_FLOAT_MIN && $z <= \PHP_FLOAT_MAX, 'Argument $z overflow: C type GLdouble is required');

        self::$ffi->glRotated($angle, $x, $y, $z);
    }

    /**
     * @since 1.1
     * @param float $angle
     * @param float $x
     * @param float $y
     * @param float $z
     * @return void
     */
    public static function glRotatef(float $angle, float $x, float $y, float $z): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($angle >= -3.40282e38 && $angle <= 3.40282e38, 'Argument $angle overflow: C type GLfloat is required');
        assert($x >= -3.40282e38 && $x <= 3.40282e38, 'Argument $x overflow: C type GLfloat is required');
        assert($y >= -3.40282e38 && $y <= 3.40282e38, 'Argument $y overflow: C type GLfloat is required');
        assert($z >= -3.40282e38 && $z <= 3.40282e38, 'Argument $z overflow: C type GLfloat is required');

        self::$ffi->glRotatef($angle, $x, $y, $z);
    }

    /**
     * @since 1.1
     * @param float $x
     * @param float $y
     * @param float $z
     * @return void
     */
    public static function glScaled(float $x, float $y, float $z): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= \PHP_FLOAT_MIN && $x <= \PHP_FLOAT_MAX, 'Argument $x overflow: C type GLdouble is required');
        assert($y >= \PHP_FLOAT_MIN && $y <= \PHP_FLOAT_MAX, 'Argument $y overflow: C type GLdouble is required');
        assert($z >= \PHP_FLOAT_MIN && $z <= \PHP_FLOAT_MAX, 'Argument $z overflow: C type GLdouble is required');

        self::$ffi->glScaled($x, $y, $z);
    }

    /**
     * @since 1.1
     * @param float $x
     * @param float $y
     * @param float $z
     * @return void
     */
    public static function glScalef(float $x, float $y, float $z): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= -3.40282e38 && $x <= 3.40282e38, 'Argument $x overflow: C type GLfloat is required');
        assert($y >= -3.40282e38 && $y <= 3.40282e38, 'Argument $y overflow: C type GLfloat is required');
        assert($z >= -3.40282e38 && $z <= 3.40282e38, 'Argument $z overflow: C type GLfloat is required');

        self::$ffi->glScalef($x, $y, $z);
    }

    /**
     * Defines a rectangle, called the scissor box, in window coordinates. The first two arguments, *`x`* and *`y`*,
     * specify the lower left corner of the box. *`width`* and *`height`* specify the width and height of the box.
     *
     * To enable and disable the scissor test, call {@see glEnable} and {@see glDisable} with argument
     * `GL_SCISSOR_TEST`. The test is initially disabled. While the test is enabled, only pixels that lie within the
     * scissor box can be modified by drawing commands. Window coordinates have integer values at the shared corners
     * of frame buffer pixels. `glScissor(0,0,1,1)` allows modification of only the lower left pixel in the window,
     * and `glScissor(0,0,0,0)` doesn't allow modification of any pixels in the window.
     *
     * When the scissor test is disabled, it is as though the scissor box includes the entire window.
     *
     * @see http://docs.gl/gl2/glScissor
     * @see http://docs.gl/gl3/glScissor
     * @see http://docs.gl/gl4/glScissor
     * @since 1.1
     * @param int $x
     * @param int $y
     * @param int $width
     * @param int $height
     * @return void
     */
    public static function glScissor(int $x, int $y, int $width, int $height): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= \PHP_INT_MIN && $x <= \PHP_INT_MAX, 'Argument $x overflow: C type GLint is required');
        assert($y >= \PHP_INT_MIN && $y <= \PHP_INT_MAX, 'Argument $y overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');

        self::$ffi->glScissor($x, $y, $width, $height);
    }

    /**
     * Has two arguments: *`buffer`* is a pointer to an array of unsigned integers, and *`size`* indicates the size
     * of the array. *`buffer`* returns values from the name stack (see {@see glInitNames},
     * {@see glLoadName}, {@see glPushName}) when the rendering mode is `GL_SELECT` (see
     * {@see glRenderMode}). `glSelectBuffer` must be issued before selection mode is enabled, and it must
     * not be issued while the rendering mode is `GL_SELECT`.
     *
     * A programmer can use selection to determine which primitives are drawn into some region of a window. The
     * region is defined by the current modelview and perspective matrices.
     *
     * In selection mode, no pixel fragments are produced from rasterization. Instead, if a primitive or a raster
     * position intersects the clipping volume defined by the viewing frustum and the user-defined clipping planes,
     * this primitive causes a selection hit. (With polygons, no hit occurs if the polygon is culled.) When a change
     * is made to the name stack, or when {@see glRenderMode} is called, a hit record is copied to
     * *`buffer`* if any hits have occurred since the last such event (name stack change or
     * {@see glRenderMode} call). The hit record consists of the number of names in the name stack at the
     * time of the event, followed by the minimum and maximum depth values of all vertices that hit since the
     * previous event, followed by the name stack contents, bottom name first.
     *
     * Depth values (which are in the range [0,1]) are multiplied by 2 32 - 1 , before being placed in the hit
     * record.
     *
     * An internal index into *`buffer`* is reset to 0 whenever selection mode is entered. Each time a hit record is
     * copied into *`buffer`*, the index is incremented to point to the cell just past the end of the block of
     * names\\(emthat is, to the next available cell If the hit record is larger than the number of remaining
     * locations in *`buffer`*, as much data as can fit is copied, and the overflow flag is set. If the name stack is
     * empty when a hit record is copied, that record consists of 0 followed by the minimum and maximum depth values.
     *
     * To exit selection mode, call {@see glRenderMode} with an argument other than `GL_SELECT`. Whenever
     * {@see glRenderMode} is called while the render mode is `GL_SELECT`, it returns the number of hit
     * records copied to *`buffer`*, resets the overflow flag and the selection buffer pointer, and initializes the
     * name stack to be empty. If the overflow bit was set when {@see glRenderMode} was called, a negative
     * hit record count is returned.
     *
     * @see http://docs.gl/gl2/glSelectBuffer
     * @since 1.1
     * @param int $size
     * @param \FFI\CData|\FFI\CIntPtr|null $buffer
     * @return void
     */
    public static function glSelectBuffer(int $size, ?\FFI\CData $buffer): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($size >= \PHP_INT_MIN && $size <= \PHP_INT_MAX, 'Argument $size overflow: C type GLsizei is required');

        self::$ffi->glSelectBuffer($size, $buffer);
    }

    /**
     * GL primitives can have either flat or smooth shading. Smooth shading, the default, causes the computed colors
     * of vertices to be interpolated as the primitive is rasterized, typically assigning different colors to each
     * resulting pixel fragment. Flat shading selects the computed color of just one vertex and assigns it to all the
     * pixel fragments generated by rasterizing a single primitive. In either case, the computed color of a vertex is
     * the result of lighting if lighting is enabled, or it is the current color at the time the vertex was specified
     * if lighting is disabled.
     *
     * Flat and smooth shading are indistinguishable for points. Starting when {@see glBegin} is issued and
     * counting vertices and primitives from 1, the GL gives each flat-shaded line segment i the computed color of
     * vertex i + 1 , its second vertex. Counting similarly from 1, the GL gives each flat-shaded polygon the
     * computed color of the vertex listed in the following table. This is the last vertex to specify the polygon in
     * all cases except single polygons, where the first vertex specifies the flat-shaded color.
     *
     * **Primitive Type of Polygon i** **Vertex** Single polygon ( i == 1 ) 1 Triangle strip i + 2 Triangle fan i + 2
     * Independent triangle 3 ⁢ i Quad strip 2 ⁢ i + 2 Independent quad 4 ⁢ i
     *
     * Flat and smooth shading are specified by `glShadeModel` with *`mode`* set to `GL_FLAT` and `GL_SMOOTH`,
     * respectively.
     *
     * @see http://docs.gl/gl2/glShadeModel
     * @since 1.1
     * @param int $mode
     * @return void
     */
    public static function glShadeModel(int $mode): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($mode >= 0 && $mode <= 4_294_967_295, 'Argument $mode overflow: C type GLenum is required');

        self::$ffi->glShadeModel($mode);
    }

    /**
     * Stenciling, like depth-buffering, enables and disables drawing on a per-pixel basis. Stencil planes are first
     * drawn into using GL drawing primitives, then geometry and images are rendered using the stencil planes to mask
     * out portions of the screen. Stenciling is typically used in multipass rendering algorithms to achieve special
     * effects, such as decals, outlining, and constructive solid geometry rendering.
     *
     * The stencil test conditionally eliminates a pixel based on the outcome of a comparison between the reference
     * value and the value in the stencil buffer. To enable and disable the test, call {@see glEnable} and
     * {@see glDisable} with argument `GL_STENCIL_TEST`. To specify actions based on the outcome of the stencil
     * test, call {@see glStencilOp} or {@see glStencilOpSeparate}.
     *
     * There can be two separate sets of *`func`*, *`ref`*, and *`mask`* parameters; one affects back-facing
     * polygons, and the other affects front-facing polygons as well as other non-polygon primitives.
     * {@see glStencilFunc} sets both front and back stencil state to the same values. Use
     * {@see glStencilFuncSeparate} to set front and back stencil state to different values.
     *
     * *`func`* is a symbolic constant that determines the stencil comparison function. It accepts one of eight
     * values, shown in the following list. *`ref`* is an integer reference value that is used in the stencil
     * comparison. It is clamped to the range 0 2 n - 1 , where n is the number of bitplanes in the stencil buffer.
     * *`mask`* is bitwise ANDed with both the reference value and the stored stencil value, with the ANDed values
     * participating in the comparison.
     *
     * If *stencil* represents the value stored in the corresponding stencil buffer location, the following list
     * shows the effect of each comparison function that can be specified by *`func`*. Only if the comparison
     * succeeds is the pixel passed through to the next stage in the rasterization process (see
     * {@see glStencilOp}). All tests treat *stencil* values as unsigned integers in the range 0 2 n - 1 ,
     * where n is the number of bitplanes in the stencil buffer.
     *
     * The following values are accepted by *`func`*:
     *
     *  - `GL_NEVER` Always fails.
     *
     *  - `GL_LESS` Passes if ( *`ref`* &amp; *`mask`* ) &lt; ( *stencil* &amp; *`mask`* ).
     *
     *  - `GL_LEQUAL` Passes if ( *`ref`* &amp; *`mask`* ) &lt;= ( *stencil* &amp; *`mask`* ).
     *
     *  - `GL_GREATER` Passes if ( *`ref`* &amp; *`mask`* ) &gt; ( *stencil* &amp; *`mask`* ).
     *
     *  - `GL_GEQUAL` Passes if ( *`ref`* &amp; *`mask`* ) &gt;= ( *stencil* &amp; *`mask`* ).
     *
     *  - `GL_EQUAL` Passes if ( *`ref`* &amp; *`mask`* ) = ( *stencil* &amp; *`mask`* ).
     *
     *  - `GL_NOTEQUAL` Passes if ( *`ref`* &amp; *`mask`* ) != ( *stencil* &amp; *`mask`* ).
     *
     *  - `GL_ALWAYS` Always passes.
     *
     * @see http://docs.gl/gl2/glStencilFunc
     * @see http://docs.gl/gl3/glStencilFunc
     * @see http://docs.gl/gl4/glStencilFunc
     * @since 1.1
     * @param int $func
     * @param int $ref
     * @param int $mask
     * @return void
     */
    public static function glStencilFunc(int $func, int $ref, int $mask): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($func >= 0 && $func <= 4_294_967_295, 'Argument $func overflow: C type GLenum is required');
        assert($ref >= \PHP_INT_MIN && $ref <= \PHP_INT_MAX, 'Argument $ref overflow: C type GLint is required');
        assert($mask >= 0 && $mask <= 4_294_967_295, 'Argument $mask overflow: C type GLuint is required');

        self::$ffi->glStencilFunc($func, $ref, $mask);
    }

    /**
     * Controls the writing of individual bits in the stencil planes. The least significant n bits of *`mask`*, where
     * n is the number of bits in the stencil buffer, specify a mask. Where a 1 appears in the mask, it's possible to
     * write to the corresponding bit in the stencil buffer. Where a 0 appears, the corresponding bit is
     * write-protected. Initially, all bits are enabled for writing.
     *
     * There can be two separate *`mask`* writemasks; one affects back-facing polygons, and the other affects
     * front-facing polygons as well as other non-polygon primitives. {@see glStencilMask} sets both front
     * and back stencil writemasks to the same values. Use {@see glStencilMaskSeparate} to set
     * front and back stencil writemasks to different values.
     *
     * @see http://docs.gl/gl2/glStencilMask
     * @see http://docs.gl/gl3/glStencilMask
     * @see http://docs.gl/gl4/glStencilMask
     * @since 1.1
     * @param int $mask
     * @return void
     */
    public static function glStencilMask(int $mask): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($mask >= 0 && $mask <= 4_294_967_295, 'Argument $mask overflow: C type GLuint is required');

        self::$ffi->glStencilMask($mask);
    }

    /**
     * Stenciling, like depth-buffering, enables and disables drawing on a per-pixel basis. You draw into the stencil
     * planes using GL drawing primitives, then render geometry and images, using the stencil planes to mask out
     * portions of the screen. Stenciling is typically used in multipass rendering algorithms to achieve special
     * effects, such as decals, outlining, and constructive solid geometry rendering.
     *
     * The stencil test conditionally eliminates a pixel based on the outcome of a comparison between the value in
     * the stencil buffer and a reference value. To enable and disable the test, call {@see glEnable} and
     * {@see glDisable} with argument `GL_STENCIL_TEST`; to control it, call {@see glStencilFunc} or
     * {@see glStencilFuncSeparate}.
     *
     * There can be two separate sets of *`sfail`*, *`dpfail`*, and *`dppass`* parameters; one affects back-facing
     * polygons, and the other affects front-facing polygons as well as other non-polygon primitives.
     * {@see glStencilOp} sets both front and back stencil state to the same values. Use
     * {@see glStencilOpSeparate} to set front and back stencil state to different values.
     *
     *  - `glStencilOp` takes three arguments that indicate what happens to the stored stencil value while stenciling
     * is enabled. If the stencil test fails, no change is made to the pixel's color or depth buffers, and *`sfail`*
     * specifies what happens to the stencil buffer contents. The following eight actions are possible.
     *
     *  - `GL_KEEP` Keeps the current value.
     *
     *  - `GL_ZERO` Sets the stencil buffer value to 0.
     *
     *  - `GL_REPLACE` Sets the stencil buffer value to *ref*, as specified by {@see glStencilFunc}.
     *
     *  - `GL_INCR` Increments the current stencil buffer value. Clamps to the maximum representable unsigned value.
     *
     *  - `GL_INCR_WRAP` Increments the current stencil buffer value. Wraps stencil buffer value to zero when
     * incrementing the maximum representable unsigned value.
     *
     *  - `GL_DECR` Decrements the current stencil buffer value. Clamps to 0.
     *
     *  - `GL_DECR_WRAP` Decrements the current stencil buffer value. Wraps stencil buffer value to the maximum
     * representable unsigned value when decrementing a stencil buffer value of zero.
     *
     *  - `GL_INVERT` Bitwise inverts the current stencil buffer value.
     *
     * Stencil buffer values are treated as unsigned integers. When incremented and decremented, values are clamped
     * to 0 and 2 n - 1 , where n is the value returned by querying `GL_STENCIL_BITS`.
     *
     * The other two arguments to `glStencilOp` specify stencil buffer actions that depend on whether subsequent
     * depth buffer tests succeed (*`dppass`*) or fail (*`dpfail`*) (see {@see glDepthFunc}). The actions are
     * specified using the same eight symbolic constants as *`sfail`*. Note that *`dpfail`* is ignored when there is
     * no depth buffer, or when the depth buffer is not enabled. In these cases, *`sfail`* and *`dppass`* specify
     * stencil action when the stencil test fails and passes, respectively.
     *
     * @see http://docs.gl/gl2/glStencilOp
     * @see http://docs.gl/gl3/glStencilOp
     * @see http://docs.gl/gl4/glStencilOp
     * @since 1.1
     * @param int $fail
     * @param int $zfail
     * @param int $zpass
     * @return void
     */
    public static function glStencilOp(int $fail, int $zfail, int $zpass): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($fail >= 0 && $fail <= 4_294_967_295, 'Argument $fail overflow: C type GLenum is required');
        assert($zfail >= 0 && $zfail <= 4_294_967_295, 'Argument $zfail overflow: C type GLenum is required');
        assert($zpass >= 0 && $zpass <= 4_294_967_295, 'Argument $zpass overflow: C type GLenum is required');

        self::$ffi->glStencilOp($fail, $zfail, $zpass);
    }

    /**
     * Specifies texture coordinates in one, two, three, or four dimensions. `glTexCoord1` sets the current texture
     * coordinates to s 0 0 1 ; a call to `glTexCoord2` sets them to s t 0 1 . Similarly, `glTexCoord3` specifies the
     * texture coordinates as s t r 1 , and `glTexCoord4` defines all four components explicitly as s t r q .
     *
     * The current texture coordinates are part of the data that is associated with each vertex and with the current
     * raster position. Initially, the values for *s*, *t*, *r*, and *q* are (0, 0, 0, 1).
     *
     * @see http://docs.gl/gl2/glTexCoord
     * @since 1.1
     * @param float $s
     * @return void
     */
    public static function glTexCoord1d(float $s): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($s >= \PHP_FLOAT_MIN && $s <= \PHP_FLOAT_MAX, 'Argument $s overflow: C type GLdouble is required');

        self::$ffi->glTexCoord1d($s);
    }

    /**
     * Specifies texture coordinates in one, two, three, or four dimensions. `glTexCoord1` sets the current texture
     * coordinates to s 0 0 1 ; a call to `glTexCoord2` sets them to s t 0 1 . Similarly, `glTexCoord3` specifies the
     * texture coordinates as s t r 1 , and `glTexCoord4` defines all four components explicitly as s t r q .
     *
     * The current texture coordinates are part of the data that is associated with each vertex and with the current
     * raster position. Initially, the values for *s*, *t*, *r*, and *q* are (0, 0, 0, 1).
     *
     * @see http://docs.gl/gl2/glTexCoord
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glTexCoord1dv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glTexCoord1dv($v);
    }

    /**
     * Specifies texture coordinates in one, two, three, or four dimensions. `glTexCoord1` sets the current texture
     * coordinates to s 0 0 1 ; a call to `glTexCoord2` sets them to s t 0 1 . Similarly, `glTexCoord3` specifies the
     * texture coordinates as s t r 1 , and `glTexCoord4` defines all four components explicitly as s t r q .
     *
     * The current texture coordinates are part of the data that is associated with each vertex and with the current
     * raster position. Initially, the values for *s*, *t*, *r*, and *q* are (0, 0, 0, 1).
     *
     * @see http://docs.gl/gl2/glTexCoord
     * @since 1.1
     * @param float $s
     * @return void
     */
    public static function glTexCoord1f(float $s): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($s >= -3.40282e38 && $s <= 3.40282e38, 'Argument $s overflow: C type GLfloat is required');

        self::$ffi->glTexCoord1f($s);
    }

    /**
     * Specifies texture coordinates in one, two, three, or four dimensions. `glTexCoord1` sets the current texture
     * coordinates to s 0 0 1 ; a call to `glTexCoord2` sets them to s t 0 1 . Similarly, `glTexCoord3` specifies the
     * texture coordinates as s t r 1 , and `glTexCoord4` defines all four components explicitly as s t r q .
     *
     * The current texture coordinates are part of the data that is associated with each vertex and with the current
     * raster position. Initially, the values for *s*, *t*, *r*, and *q* are (0, 0, 0, 1).
     *
     * @see http://docs.gl/gl2/glTexCoord
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glTexCoord1fv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glTexCoord1fv($v);
    }

    /**
     * Specifies texture coordinates in one, two, three, or four dimensions. `glTexCoord1` sets the current texture
     * coordinates to s 0 0 1 ; a call to `glTexCoord2` sets them to s t 0 1 . Similarly, `glTexCoord3` specifies the
     * texture coordinates as s t r 1 , and `glTexCoord4` defines all four components explicitly as s t r q .
     *
     * The current texture coordinates are part of the data that is associated with each vertex and with the current
     * raster position. Initially, the values for *s*, *t*, *r*, and *q* are (0, 0, 0, 1).
     *
     * @see http://docs.gl/gl2/glTexCoord
     * @since 1.1
     * @param int $s
     * @return void
     */
    public static function glTexCoord1i(int $s): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($s >= \PHP_INT_MIN && $s <= \PHP_INT_MAX, 'Argument $s overflow: C type GLint is required');

        self::$ffi->glTexCoord1i($s);
    }

    /**
     * Specifies texture coordinates in one, two, three, or four dimensions. `glTexCoord1` sets the current texture
     * coordinates to s 0 0 1 ; a call to `glTexCoord2` sets them to s t 0 1 . Similarly, `glTexCoord3` specifies the
     * texture coordinates as s t r 1 , and `glTexCoord4` defines all four components explicitly as s t r q .
     *
     * The current texture coordinates are part of the data that is associated with each vertex and with the current
     * raster position. Initially, the values for *s*, *t*, *r*, and *q* are (0, 0, 0, 1).
     *
     * @see http://docs.gl/gl2/glTexCoord
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glTexCoord1iv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glTexCoord1iv($v);
    }

    /**
     * Specifies texture coordinates in one, two, three, or four dimensions. `glTexCoord1` sets the current texture
     * coordinates to s 0 0 1 ; a call to `glTexCoord2` sets them to s t 0 1 . Similarly, `glTexCoord3` specifies the
     * texture coordinates as s t r 1 , and `glTexCoord4` defines all four components explicitly as s t r q .
     *
     * The current texture coordinates are part of the data that is associated with each vertex and with the current
     * raster position. Initially, the values for *s*, *t*, *r*, and *q* are (0, 0, 0, 1).
     *
     * @see http://docs.gl/gl2/glTexCoord
     * @since 1.1
     * @param int $s
     * @return void
     */
    public static function glTexCoord1s(int $s): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($s >= -32768 && $s <= 32767, 'Argument $s overflow: C type GLshort is required');

        self::$ffi->glTexCoord1s($s);
    }

    /**
     * Specifies texture coordinates in one, two, three, or four dimensions. `glTexCoord1` sets the current texture
     * coordinates to s 0 0 1 ; a call to `glTexCoord2` sets them to s t 0 1 . Similarly, `glTexCoord3` specifies the
     * texture coordinates as s t r 1 , and `glTexCoord4` defines all four components explicitly as s t r q .
     *
     * The current texture coordinates are part of the data that is associated with each vertex and with the current
     * raster position. Initially, the values for *s*, *t*, *r*, and *q* are (0, 0, 0, 1).
     *
     * @see http://docs.gl/gl2/glTexCoord
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glTexCoord1sv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glTexCoord1sv($v);
    }

    /**
     * Specifies texture coordinates in one, two, three, or four dimensions. `glTexCoord1` sets the current texture
     * coordinates to s 0 0 1 ; a call to `glTexCoord2` sets them to s t 0 1 . Similarly, `glTexCoord3` specifies the
     * texture coordinates as s t r 1 , and `glTexCoord4` defines all four components explicitly as s t r q .
     *
     * The current texture coordinates are part of the data that is associated with each vertex and with the current
     * raster position. Initially, the values for *s*, *t*, *r*, and *q* are (0, 0, 0, 1).
     *
     * @see http://docs.gl/gl2/glTexCoord
     * @since 1.1
     * @param float $s
     * @param float $t
     * @return void
     */
    public static function glTexCoord2d(float $s, float $t): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($s >= \PHP_FLOAT_MIN && $s <= \PHP_FLOAT_MAX, 'Argument $s overflow: C type GLdouble is required');
        assert($t >= \PHP_FLOAT_MIN && $t <= \PHP_FLOAT_MAX, 'Argument $t overflow: C type GLdouble is required');

        self::$ffi->glTexCoord2d($s, $t);
    }

    /**
     * Specifies texture coordinates in one, two, three, or four dimensions. `glTexCoord1` sets the current texture
     * coordinates to s 0 0 1 ; a call to `glTexCoord2` sets them to s t 0 1 . Similarly, `glTexCoord3` specifies the
     * texture coordinates as s t r 1 , and `glTexCoord4` defines all four components explicitly as s t r q .
     *
     * The current texture coordinates are part of the data that is associated with each vertex and with the current
     * raster position. Initially, the values for *s*, *t*, *r*, and *q* are (0, 0, 0, 1).
     *
     * @see http://docs.gl/gl2/glTexCoord
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glTexCoord2dv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glTexCoord2dv($v);
    }

    /**
     * Specifies texture coordinates in one, two, three, or four dimensions. `glTexCoord1` sets the current texture
     * coordinates to s 0 0 1 ; a call to `glTexCoord2` sets them to s t 0 1 . Similarly, `glTexCoord3` specifies the
     * texture coordinates as s t r 1 , and `glTexCoord4` defines all four components explicitly as s t r q .
     *
     * The current texture coordinates are part of the data that is associated with each vertex and with the current
     * raster position. Initially, the values for *s*, *t*, *r*, and *q* are (0, 0, 0, 1).
     *
     * @see http://docs.gl/gl2/glTexCoord
     * @since 1.1
     * @param float $s
     * @param float $t
     * @return void
     */
    public static function glTexCoord2f(float $s, float $t): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($s >= -3.40282e38 && $s <= 3.40282e38, 'Argument $s overflow: C type GLfloat is required');
        assert($t >= -3.40282e38 && $t <= 3.40282e38, 'Argument $t overflow: C type GLfloat is required');

        self::$ffi->glTexCoord2f($s, $t);
    }

    /**
     * Specifies texture coordinates in one, two, three, or four dimensions. `glTexCoord1` sets the current texture
     * coordinates to s 0 0 1 ; a call to `glTexCoord2` sets them to s t 0 1 . Similarly, `glTexCoord3` specifies the
     * texture coordinates as s t r 1 , and `glTexCoord4` defines all four components explicitly as s t r q .
     *
     * The current texture coordinates are part of the data that is associated with each vertex and with the current
     * raster position. Initially, the values for *s*, *t*, *r*, and *q* are (0, 0, 0, 1).
     *
     * @see http://docs.gl/gl2/glTexCoord
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glTexCoord2fv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glTexCoord2fv($v);
    }

    /**
     * Specifies texture coordinates in one, two, three, or four dimensions. `glTexCoord1` sets the current texture
     * coordinates to s 0 0 1 ; a call to `glTexCoord2` sets them to s t 0 1 . Similarly, `glTexCoord3` specifies the
     * texture coordinates as s t r 1 , and `glTexCoord4` defines all four components explicitly as s t r q .
     *
     * The current texture coordinates are part of the data that is associated with each vertex and with the current
     * raster position. Initially, the values for *s*, *t*, *r*, and *q* are (0, 0, 0, 1).
     *
     * @see http://docs.gl/gl2/glTexCoord
     * @since 1.1
     * @param int $s
     * @param int $t
     * @return void
     */
    public static function glTexCoord2i(int $s, int $t): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($s >= \PHP_INT_MIN && $s <= \PHP_INT_MAX, 'Argument $s overflow: C type GLint is required');
        assert($t >= \PHP_INT_MIN && $t <= \PHP_INT_MAX, 'Argument $t overflow: C type GLint is required');

        self::$ffi->glTexCoord2i($s, $t);
    }

    /**
     * Specifies texture coordinates in one, two, three, or four dimensions. `glTexCoord1` sets the current texture
     * coordinates to s 0 0 1 ; a call to `glTexCoord2` sets them to s t 0 1 . Similarly, `glTexCoord3` specifies the
     * texture coordinates as s t r 1 , and `glTexCoord4` defines all four components explicitly as s t r q .
     *
     * The current texture coordinates are part of the data that is associated with each vertex and with the current
     * raster position. Initially, the values for *s*, *t*, *r*, and *q* are (0, 0, 0, 1).
     *
     * @see http://docs.gl/gl2/glTexCoord
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glTexCoord2iv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glTexCoord2iv($v);
    }

    /**
     * Specifies texture coordinates in one, two, three, or four dimensions. `glTexCoord1` sets the current texture
     * coordinates to s 0 0 1 ; a call to `glTexCoord2` sets them to s t 0 1 . Similarly, `glTexCoord3` specifies the
     * texture coordinates as s t r 1 , and `glTexCoord4` defines all four components explicitly as s t r q .
     *
     * The current texture coordinates are part of the data that is associated with each vertex and with the current
     * raster position. Initially, the values for *s*, *t*, *r*, and *q* are (0, 0, 0, 1).
     *
     * @see http://docs.gl/gl2/glTexCoord
     * @since 1.1
     * @param int $s
     * @param int $t
     * @return void
     */
    public static function glTexCoord2s(int $s, int $t): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($s >= -32768 && $s <= 32767, 'Argument $s overflow: C type GLshort is required');
        assert($t >= -32768 && $t <= 32767, 'Argument $t overflow: C type GLshort is required');

        self::$ffi->glTexCoord2s($s, $t);
    }

    /**
     * Specifies texture coordinates in one, two, three, or four dimensions. `glTexCoord1` sets the current texture
     * coordinates to s 0 0 1 ; a call to `glTexCoord2` sets them to s t 0 1 . Similarly, `glTexCoord3` specifies the
     * texture coordinates as s t r 1 , and `glTexCoord4` defines all four components explicitly as s t r q .
     *
     * The current texture coordinates are part of the data that is associated with each vertex and with the current
     * raster position. Initially, the values for *s*, *t*, *r*, and *q* are (0, 0, 0, 1).
     *
     * @see http://docs.gl/gl2/glTexCoord
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glTexCoord2sv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glTexCoord2sv($v);
    }

    /**
     * Specifies texture coordinates in one, two, three, or four dimensions. `glTexCoord1` sets the current texture
     * coordinates to s 0 0 1 ; a call to `glTexCoord2` sets them to s t 0 1 . Similarly, `glTexCoord3` specifies the
     * texture coordinates as s t r 1 , and `glTexCoord4` defines all four components explicitly as s t r q .
     *
     * The current texture coordinates are part of the data that is associated with each vertex and with the current
     * raster position. Initially, the values for *s*, *t*, *r*, and *q* are (0, 0, 0, 1).
     *
     * @see http://docs.gl/gl2/glTexCoord
     * @since 1.1
     * @param float $s
     * @param float $t
     * @param float $r
     * @return void
     */
    public static function glTexCoord3d(float $s, float $t, float $r): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($s >= \PHP_FLOAT_MIN && $s <= \PHP_FLOAT_MAX, 'Argument $s overflow: C type GLdouble is required');
        assert($t >= \PHP_FLOAT_MIN && $t <= \PHP_FLOAT_MAX, 'Argument $t overflow: C type GLdouble is required');
        assert($r >= \PHP_FLOAT_MIN && $r <= \PHP_FLOAT_MAX, 'Argument $r overflow: C type GLdouble is required');

        self::$ffi->glTexCoord3d($s, $t, $r);
    }

    /**
     * Specifies texture coordinates in one, two, three, or four dimensions. `glTexCoord1` sets the current texture
     * coordinates to s 0 0 1 ; a call to `glTexCoord2` sets them to s t 0 1 . Similarly, `glTexCoord3` specifies the
     * texture coordinates as s t r 1 , and `glTexCoord4` defines all four components explicitly as s t r q .
     *
     * The current texture coordinates are part of the data that is associated with each vertex and with the current
     * raster position. Initially, the values for *s*, *t*, *r*, and *q* are (0, 0, 0, 1).
     *
     * @see http://docs.gl/gl2/glTexCoord
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glTexCoord3dv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glTexCoord3dv($v);
    }

    /**
     * Specifies texture coordinates in one, two, three, or four dimensions. `glTexCoord1` sets the current texture
     * coordinates to s 0 0 1 ; a call to `glTexCoord2` sets them to s t 0 1 . Similarly, `glTexCoord3` specifies the
     * texture coordinates as s t r 1 , and `glTexCoord4` defines all four components explicitly as s t r q .
     *
     * The current texture coordinates are part of the data that is associated with each vertex and with the current
     * raster position. Initially, the values for *s*, *t*, *r*, and *q* are (0, 0, 0, 1).
     *
     * @see http://docs.gl/gl2/glTexCoord
     * @since 1.1
     * @param float $s
     * @param float $t
     * @param float $r
     * @return void
     */
    public static function glTexCoord3f(float $s, float $t, float $r): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($s >= -3.40282e38 && $s <= 3.40282e38, 'Argument $s overflow: C type GLfloat is required');
        assert($t >= -3.40282e38 && $t <= 3.40282e38, 'Argument $t overflow: C type GLfloat is required');
        assert($r >= -3.40282e38 && $r <= 3.40282e38, 'Argument $r overflow: C type GLfloat is required');

        self::$ffi->glTexCoord3f($s, $t, $r);
    }

    /**
     * Specifies texture coordinates in one, two, three, or four dimensions. `glTexCoord1` sets the current texture
     * coordinates to s 0 0 1 ; a call to `glTexCoord2` sets them to s t 0 1 . Similarly, `glTexCoord3` specifies the
     * texture coordinates as s t r 1 , and `glTexCoord4` defines all four components explicitly as s t r q .
     *
     * The current texture coordinates are part of the data that is associated with each vertex and with the current
     * raster position. Initially, the values for *s*, *t*, *r*, and *q* are (0, 0, 0, 1).
     *
     * @see http://docs.gl/gl2/glTexCoord
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glTexCoord3fv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glTexCoord3fv($v);
    }

    /**
     * Specifies texture coordinates in one, two, three, or four dimensions. `glTexCoord1` sets the current texture
     * coordinates to s 0 0 1 ; a call to `glTexCoord2` sets them to s t 0 1 . Similarly, `glTexCoord3` specifies the
     * texture coordinates as s t r 1 , and `glTexCoord4` defines all four components explicitly as s t r q .
     *
     * The current texture coordinates are part of the data that is associated with each vertex and with the current
     * raster position. Initially, the values for *s*, *t*, *r*, and *q* are (0, 0, 0, 1).
     *
     * @see http://docs.gl/gl2/glTexCoord
     * @since 1.1
     * @param int $s
     * @param int $t
     * @param int $r
     * @return void
     */
    public static function glTexCoord3i(int $s, int $t, int $r): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($s >= \PHP_INT_MIN && $s <= \PHP_INT_MAX, 'Argument $s overflow: C type GLint is required');
        assert($t >= \PHP_INT_MIN && $t <= \PHP_INT_MAX, 'Argument $t overflow: C type GLint is required');
        assert($r >= \PHP_INT_MIN && $r <= \PHP_INT_MAX, 'Argument $r overflow: C type GLint is required');

        self::$ffi->glTexCoord3i($s, $t, $r);
    }

    /**
     * Specifies texture coordinates in one, two, three, or four dimensions. `glTexCoord1` sets the current texture
     * coordinates to s 0 0 1 ; a call to `glTexCoord2` sets them to s t 0 1 . Similarly, `glTexCoord3` specifies the
     * texture coordinates as s t r 1 , and `glTexCoord4` defines all four components explicitly as s t r q .
     *
     * The current texture coordinates are part of the data that is associated with each vertex and with the current
     * raster position. Initially, the values for *s*, *t*, *r*, and *q* are (0, 0, 0, 1).
     *
     * @see http://docs.gl/gl2/glTexCoord
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glTexCoord3iv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glTexCoord3iv($v);
    }

    /**
     * Specifies texture coordinates in one, two, three, or four dimensions. `glTexCoord1` sets the current texture
     * coordinates to s 0 0 1 ; a call to `glTexCoord2` sets them to s t 0 1 . Similarly, `glTexCoord3` specifies the
     * texture coordinates as s t r 1 , and `glTexCoord4` defines all four components explicitly as s t r q .
     *
     * The current texture coordinates are part of the data that is associated with each vertex and with the current
     * raster position. Initially, the values for *s*, *t*, *r*, and *q* are (0, 0, 0, 1).
     *
     * @see http://docs.gl/gl2/glTexCoord
     * @since 1.1
     * @param int $s
     * @param int $t
     * @param int $r
     * @return void
     */
    public static function glTexCoord3s(int $s, int $t, int $r): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($s >= -32768 && $s <= 32767, 'Argument $s overflow: C type GLshort is required');
        assert($t >= -32768 && $t <= 32767, 'Argument $t overflow: C type GLshort is required');
        assert($r >= -32768 && $r <= 32767, 'Argument $r overflow: C type GLshort is required');

        self::$ffi->glTexCoord3s($s, $t, $r);
    }

    /**
     * Specifies texture coordinates in one, two, three, or four dimensions. `glTexCoord1` sets the current texture
     * coordinates to s 0 0 1 ; a call to `glTexCoord2` sets them to s t 0 1 . Similarly, `glTexCoord3` specifies the
     * texture coordinates as s t r 1 , and `glTexCoord4` defines all four components explicitly as s t r q .
     *
     * The current texture coordinates are part of the data that is associated with each vertex and with the current
     * raster position. Initially, the values for *s*, *t*, *r*, and *q* are (0, 0, 0, 1).
     *
     * @see http://docs.gl/gl2/glTexCoord
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glTexCoord3sv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glTexCoord3sv($v);
    }

    /**
     * Specifies texture coordinates in one, two, three, or four dimensions. `glTexCoord1` sets the current texture
     * coordinates to s 0 0 1 ; a call to `glTexCoord2` sets them to s t 0 1 . Similarly, `glTexCoord3` specifies the
     * texture coordinates as s t r 1 , and `glTexCoord4` defines all four components explicitly as s t r q .
     *
     * The current texture coordinates are part of the data that is associated with each vertex and with the current
     * raster position. Initially, the values for *s*, *t*, *r*, and *q* are (0, 0, 0, 1).
     *
     * @see http://docs.gl/gl2/glTexCoord
     * @since 1.1
     * @param float $s
     * @param float $t
     * @param float $r
     * @param float $q
     * @return void
     */
    public static function glTexCoord4d(float $s, float $t, float $r, float $q): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($s >= \PHP_FLOAT_MIN && $s <= \PHP_FLOAT_MAX, 'Argument $s overflow: C type GLdouble is required');
        assert($t >= \PHP_FLOAT_MIN && $t <= \PHP_FLOAT_MAX, 'Argument $t overflow: C type GLdouble is required');
        assert($r >= \PHP_FLOAT_MIN && $r <= \PHP_FLOAT_MAX, 'Argument $r overflow: C type GLdouble is required');
        assert($q >= \PHP_FLOAT_MIN && $q <= \PHP_FLOAT_MAX, 'Argument $q overflow: C type GLdouble is required');

        self::$ffi->glTexCoord4d($s, $t, $r, $q);
    }

    /**
     * Specifies texture coordinates in one, two, three, or four dimensions. `glTexCoord1` sets the current texture
     * coordinates to s 0 0 1 ; a call to `glTexCoord2` sets them to s t 0 1 . Similarly, `glTexCoord3` specifies the
     * texture coordinates as s t r 1 , and `glTexCoord4` defines all four components explicitly as s t r q .
     *
     * The current texture coordinates are part of the data that is associated with each vertex and with the current
     * raster position. Initially, the values for *s*, *t*, *r*, and *q* are (0, 0, 0, 1).
     *
     * @see http://docs.gl/gl2/glTexCoord
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glTexCoord4dv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glTexCoord4dv($v);
    }

    /**
     * Specifies texture coordinates in one, two, three, or four dimensions. `glTexCoord1` sets the current texture
     * coordinates to s 0 0 1 ; a call to `glTexCoord2` sets them to s t 0 1 . Similarly, `glTexCoord3` specifies the
     * texture coordinates as s t r 1 , and `glTexCoord4` defines all four components explicitly as s t r q .
     *
     * The current texture coordinates are part of the data that is associated with each vertex and with the current
     * raster position. Initially, the values for *s*, *t*, *r*, and *q* are (0, 0, 0, 1).
     *
     * @see http://docs.gl/gl2/glTexCoord
     * @since 1.1
     * @param float $s
     * @param float $t
     * @param float $r
     * @param float $q
     * @return void
     */
    public static function glTexCoord4f(float $s, float $t, float $r, float $q): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($s >= -3.40282e38 && $s <= 3.40282e38, 'Argument $s overflow: C type GLfloat is required');
        assert($t >= -3.40282e38 && $t <= 3.40282e38, 'Argument $t overflow: C type GLfloat is required');
        assert($r >= -3.40282e38 && $r <= 3.40282e38, 'Argument $r overflow: C type GLfloat is required');
        assert($q >= -3.40282e38 && $q <= 3.40282e38, 'Argument $q overflow: C type GLfloat is required');

        self::$ffi->glTexCoord4f($s, $t, $r, $q);
    }

    /**
     * Specifies texture coordinates in one, two, three, or four dimensions. `glTexCoord1` sets the current texture
     * coordinates to s 0 0 1 ; a call to `glTexCoord2` sets them to s t 0 1 . Similarly, `glTexCoord3` specifies the
     * texture coordinates as s t r 1 , and `glTexCoord4` defines all four components explicitly as s t r q .
     *
     * The current texture coordinates are part of the data that is associated with each vertex and with the current
     * raster position. Initially, the values for *s*, *t*, *r*, and *q* are (0, 0, 0, 1).
     *
     * @see http://docs.gl/gl2/glTexCoord
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glTexCoord4fv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glTexCoord4fv($v);
    }

    /**
     * Specifies texture coordinates in one, two, three, or four dimensions. `glTexCoord1` sets the current texture
     * coordinates to s 0 0 1 ; a call to `glTexCoord2` sets them to s t 0 1 . Similarly, `glTexCoord3` specifies the
     * texture coordinates as s t r 1 , and `glTexCoord4` defines all four components explicitly as s t r q .
     *
     * The current texture coordinates are part of the data that is associated with each vertex and with the current
     * raster position. Initially, the values for *s*, *t*, *r*, and *q* are (0, 0, 0, 1).
     *
     * @see http://docs.gl/gl2/glTexCoord
     * @since 1.1
     * @param int $s
     * @param int $t
     * @param int $r
     * @param int $q
     * @return void
     */
    public static function glTexCoord4i(int $s, int $t, int $r, int $q): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($s >= \PHP_INT_MIN && $s <= \PHP_INT_MAX, 'Argument $s overflow: C type GLint is required');
        assert($t >= \PHP_INT_MIN && $t <= \PHP_INT_MAX, 'Argument $t overflow: C type GLint is required');
        assert($r >= \PHP_INT_MIN && $r <= \PHP_INT_MAX, 'Argument $r overflow: C type GLint is required');
        assert($q >= \PHP_INT_MIN && $q <= \PHP_INT_MAX, 'Argument $q overflow: C type GLint is required');

        self::$ffi->glTexCoord4i($s, $t, $r, $q);
    }

    /**
     * Specifies texture coordinates in one, two, three, or four dimensions. `glTexCoord1` sets the current texture
     * coordinates to s 0 0 1 ; a call to `glTexCoord2` sets them to s t 0 1 . Similarly, `glTexCoord3` specifies the
     * texture coordinates as s t r 1 , and `glTexCoord4` defines all four components explicitly as s t r q .
     *
     * The current texture coordinates are part of the data that is associated with each vertex and with the current
     * raster position. Initially, the values for *s*, *t*, *r*, and *q* are (0, 0, 0, 1).
     *
     * @see http://docs.gl/gl2/glTexCoord
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glTexCoord4iv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glTexCoord4iv($v);
    }

    /**
     * Specifies texture coordinates in one, two, three, or four dimensions. `glTexCoord1` sets the current texture
     * coordinates to s 0 0 1 ; a call to `glTexCoord2` sets them to s t 0 1 . Similarly, `glTexCoord3` specifies the
     * texture coordinates as s t r 1 , and `glTexCoord4` defines all four components explicitly as s t r q .
     *
     * The current texture coordinates are part of the data that is associated with each vertex and with the current
     * raster position. Initially, the values for *s*, *t*, *r*, and *q* are (0, 0, 0, 1).
     *
     * @see http://docs.gl/gl2/glTexCoord
     * @since 1.1
     * @param int $s
     * @param int $t
     * @param int $r
     * @param int $q
     * @return void
     */
    public static function glTexCoord4s(int $s, int $t, int $r, int $q): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($s >= -32768 && $s <= 32767, 'Argument $s overflow: C type GLshort is required');
        assert($t >= -32768 && $t <= 32767, 'Argument $t overflow: C type GLshort is required');
        assert($r >= -32768 && $r <= 32767, 'Argument $r overflow: C type GLshort is required');
        assert($q >= -32768 && $q <= 32767, 'Argument $q overflow: C type GLshort is required');

        self::$ffi->glTexCoord4s($s, $t, $r, $q);
    }

    /**
     * Specifies texture coordinates in one, two, three, or four dimensions. `glTexCoord1` sets the current texture
     * coordinates to s 0 0 1 ; a call to `glTexCoord2` sets them to s t 0 1 . Similarly, `glTexCoord3` specifies the
     * texture coordinates as s t r 1 , and `glTexCoord4` defines all four components explicitly as s t r q .
     *
     * The current texture coordinates are part of the data that is associated with each vertex and with the current
     * raster position. Initially, the values for *s*, *t*, *r*, and *q* are (0, 0, 0, 1).
     *
     * @see http://docs.gl/gl2/glTexCoord
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glTexCoord4sv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glTexCoord4sv($v);
    }

    /**
     * Specifies the location and data format of an array of texture coordinates to use when rendering. *`size`*
     * specifies the number of coordinates per texture coordinate set, and must be 1, 2, 3, or 4. *`type`* specifies
     * the data type of each texture coordinate, and *`stride`* specifies the byte stride from one texture coordinate
     * set to the next, allowing vertices and attributes to be packed into a single array or stored in separate
     * arrays. (Single-array storage may be more efficient on some implementations; see
     * {@see glInterleavedArrays}.)
     *
     * If a non-zero named buffer object is bound to the `GL_ARRAY_BUFFER` target (see {@see glBindBuffer})
     * while a texture coordinate array is specified, *`pointer`* is treated as a byte offset into the buffer
     * object's data store. Also, the buffer object binding (`GL_ARRAY_BUFFER_BINDING`) is saved as texture
     * coordinate vertex array client-side state (`GL_TEXTURE_COORD_ARRAY_BUFFER_BINDING`).
     *
     * When a texture coordinate array is specified, *`size`*, *`type`*, *`stride`*, and *`pointer`* are saved as
     * client-side state, in addition to the current vertex array buffer object binding.
     *
     * To enable and disable a texture coordinate array, call {@see glEnableClientState} and
     * {@see glDisableClientState} with the argument `GL_TEXTURE_COORD_ARRAY`. If enabled, the
     * texture coordinate array is used when {@see glArrayElement}, {@see glDrawArrays},
     * {@see glMultiDrawArrays}, {@see glDrawElements},
     * {@see glMultiDrawElements}, or {@see glDrawRangeElements} is called.
     *
     * @see http://docs.gl/gl2/glTexCoordPointer
     * @since 1.1
     * @param int $size
     * @param int $type
     * @param int $stride
     * @param \FFI\CData|\FFI\CPtr|null $pointer
     * @return void
     */
    public static function glTexCoordPointer(int $size, int $type, int $stride, ?\FFI\CData $pointer): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($size >= \PHP_INT_MIN && $size <= \PHP_INT_MAX, 'Argument $size overflow: C type GLint is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');
        assert($stride >= \PHP_INT_MIN && $stride <= \PHP_INT_MAX, 'Argument $stride overflow: C type GLsizei is required');

        self::$ffi->glTexCoordPointer($size, $type, $stride, $pointer);
    }

    /**
     * @since 1.1
     * @param int $target
     * @param int $pname
     * @param float $param
     * @return void
     */
    public static function glTexEnvf(int $target, int $pname, float $param): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($param >= -3.40282e38 && $param <= 3.40282e38, 'Argument $param overflow: C type GLfloat is required');

        self::$ffi->glTexEnvf($target, $pname, $param);
    }

    /**
     * @since 1.1
     * @param int $target
     * @param int $pname
     * @param \FFI\CData|\FFI\CFloatPtr|null $params
     * @return void
     */
    public static function glTexEnvfv(int $target, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glTexEnvfv($target, $pname, $params);
    }

    /**
     * @since 1.1
     * @param int $target
     * @param int $pname
     * @param int $param
     * @return void
     */
    public static function glTexEnvi(int $target, int $pname, int $param): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($param >= \PHP_INT_MIN && $param <= \PHP_INT_MAX, 'Argument $param overflow: C type GLint is required');

        self::$ffi->glTexEnvi($target, $pname, $param);
    }

    /**
     * @since 1.1
     * @param int $target
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glTexEnviv(int $target, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glTexEnviv($target, $pname, $params);
    }

    /**
     * @since 1.1
     * @param int $coord
     * @param int $pname
     * @param float $param
     * @return void
     */
    public static function glTexGend(int $coord, int $pname, float $param): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($coord >= 0 && $coord <= 4_294_967_295, 'Argument $coord overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($param >= \PHP_FLOAT_MIN && $param <= \PHP_FLOAT_MAX, 'Argument $param overflow: C type GLdouble is required');

        self::$ffi->glTexGend($coord, $pname, $param);
    }

    /**
     * @since 1.1
     * @param int $coord
     * @param int $pname
     * @param \FFI\CData|\FFI\CFloatPtr|null $params
     * @return void
     */
    public static function glTexGendv(int $coord, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($coord >= 0 && $coord <= 4_294_967_295, 'Argument $coord overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glTexGendv($coord, $pname, $params);
    }

    /**
     * @since 1.1
     * @param int $coord
     * @param int $pname
     * @param float $param
     * @return void
     */
    public static function glTexGenf(int $coord, int $pname, float $param): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($coord >= 0 && $coord <= 4_294_967_295, 'Argument $coord overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($param >= -3.40282e38 && $param <= 3.40282e38, 'Argument $param overflow: C type GLfloat is required');

        self::$ffi->glTexGenf($coord, $pname, $param);
    }

    /**
     * @since 1.1
     * @param int $coord
     * @param int $pname
     * @param \FFI\CData|\FFI\CFloatPtr|null $params
     * @return void
     */
    public static function glTexGenfv(int $coord, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($coord >= 0 && $coord <= 4_294_967_295, 'Argument $coord overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glTexGenfv($coord, $pname, $params);
    }

    /**
     * @since 1.1
     * @param int $coord
     * @param int $pname
     * @param int $param
     * @return void
     */
    public static function glTexGeni(int $coord, int $pname, int $param): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($coord >= 0 && $coord <= 4_294_967_295, 'Argument $coord overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($param >= \PHP_INT_MIN && $param <= \PHP_INT_MAX, 'Argument $param overflow: C type GLint is required');

        self::$ffi->glTexGeni($coord, $pname, $param);
    }

    /**
     * @since 1.1
     * @param int $coord
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glTexGeniv(int $coord, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($coord >= 0 && $coord <= 4_294_967_295, 'Argument $coord overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glTexGeniv($coord, $pname, $params);
    }

    /**
     * Texturing maps a portion of a specified texture image onto each graphical primitive for which texturing is
     * enabled. To enable and disable one-dimensional texturing, call {@see glEnable} and {@see glDisable}
     * with argument `GL_TEXTURE_1D`.
     *
     * Texture images are defined with `glTexImage1D`. The arguments describe the parameters of the texture image,
     * such as width, width of the border, level-of-detail number (see {@see glTexParameter}), and the
     * internal resolution and format used to store the image. The last three arguments describe how the image is
     * represented in memory; they are identical to the pixel formats used for {@see glDrawPixels}.
     *
     * If *`target`* is `GL_PROXY_TEXTURE_1D`, no data is read from *`data`*, but all of the texture image state is
     * recalculated, checked for consistency, and checked against the implementation's capabilities. If the
     * implementation cannot handle a texture of the requested texture size, it sets all of the image state to 0, but
     * does not generate an error (see {@see glGetError}). To query for an entire mipmap array, use an image
     * array level greater than or equal to 1.
     *
     * If *`target`* is `GL_TEXTURE_1D`, data is read from *`data`* as a sequence of signed or unsigned bytes,
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
     * The first element corresponds to the left end of the texture array. Subsequent elements progress left-to-right
     * through the remaining texels in the texture array. The final element corresponds to the right end of the
     * texture array.
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
     *  - `GL_DEPTH_COMPONENT` Each element is a single depth value. The GL converts it to floating point, multiplies
     * by the signed scale factor `GL_DEPTH_SCALE`, adds the signed bias `GL_DEPTH_BIAS`, and clamps to the range
     * {@see 0,1] (see [glPixelTransfer}).
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
     * Use the `GL_PROXY_TEXTURE_1D` target to try out a resolution and format. The implementation will update and
     * recompute its best match for the requested storage resolution and format. To then query this state, call
     * {@see glGetTexLevelParameter}. If the texture cannot be accommodated, texture state is set
     * to 0.
     *
     * A one-component texture image uses only the red component of the RGBA color from *`data`*. A two-component
     * image uses the R and A values. A three-component image uses the R, G, and B values. A four-component image
     * uses all of the RGBA components.
     *
     * Depth textures can be treated as LUMINANCE, INTENSITY or ALPHA textures during texture filtering and
     * application. Image-based shadowing can be enabled by comparing texture r coordinates to depth texture values
     * to generate a boolean result. See {@see glTexParameter} for details on texture comparison.
     *
     * @see http://docs.gl/gl2/glTexImage1D
     * @see http://docs.gl/gl3/glTexImage1D
     * @see http://docs.gl/gl4/glTexImage1D
     * @since 1.1
     * @param int $target
     * @param int $level
     * @param int $internalformat
     * @param int $width
     * @param int $border
     * @param int $format
     * @param int $type
     * @param \FFI\CData|\FFI\CPtr|null $pixels
     * @return void
     */
    public static function glTexImage1D(int $target, int $level, int $internalformat, int $width, int $border, int $format, int $type, ?\FFI\CData $pixels): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($internalformat >= \PHP_INT_MIN && $internalformat <= \PHP_INT_MAX, 'Argument $internalformat overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($border >= \PHP_INT_MIN && $border <= \PHP_INT_MAX, 'Argument $border overflow: C type GLint is required');
        assert($format >= 0 && $format <= 4_294_967_295, 'Argument $format overflow: C type GLenum is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');

        self::$ffi->glTexImage1D($target, $level, $internalformat, $width, $border, $format, $type, $pixels);
    }

    /**
     * Texturing maps a portion of a specified texture image onto each graphical primitive for which texturing is
     * enabled. To enable and disable two-dimensional texturing, call {@see glEnable} and {@see glDisable}
     * with argument `GL_TEXTURE_2D`. To enable and disable texturing using cube-mapped texture, call
     * {@see glEnable} and {@see glDisable} with argument `GL_TEXTURE_CUBE_MAP`.
     *
     * To define texture images, call `glTexImage2D`. The arguments describe the parameters of the texture image,
     * such as height, width, width of the border, level-of-detail number (see {@see glTexParameter}), and
     * number of color components provided. The last three arguments describe how the image is represented in memory;
     * they are identical to the pixel formats used for {@see glDrawPixels}.
     *
     * If *`target`* is `GL_PROXY_TEXTURE_2D` or `GL_PROXY_TEXTURE_CUBE_MAP`, no data is read from *`data`*, but all
     * of the texture image state is recalculated, checked for consistency, and checked against the implementation's
     * capabilities. If the implementation cannot handle a texture of the requested texture size, it sets all of the
     * image state to 0, but does not generate an error (see {@see glGetError}). To query for an entire mipmap
     * array, use an image array level greater than or equal to 1.
     *
     * If *`target`* is `GL_TEXTURE_2D`, or one of the `GL_TEXTURE_CUBE_MAP` targets, data is read from *`data`* as a
     * sequence of signed or unsigned bytes, shorts, or longs, or single-precision floating-point values, depending
     * on *`type`*. These values are grouped into sets of one, two, three, or four values, depending on *`format`*,
     * to form elements. If *`type`* is `GL_BITMAP`, the data is considered as a string of unsigned bytes (and
     * *`format`* must be `GL_COLOR_INDEX`). Each data byte is treated as eight 1-bit elements, with bit ordering
     * determined by `GL_UNPACK_LSB_FIRST` (see {@see glPixelStore}).
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
     *  - `GL_DEPTH_COMPONENT` Each element is a single depth value. The GL converts it to floating point, multiplies
     * by the signed scale factor `GL_DEPTH_SCALE`, adds the signed bias `GL_DEPTH_BIAS`, and clamps to the range
     * {@see 0,1] (see [glPixelTransfer}).
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
     * Use the `GL_PROXY_TEXTURE_2D` or `GL_PROXY_TEXTURE_CUBE_MAP` target to try out a resolution and format. The
     * implementation will update and recompute its best match for the requested storage resolution and format. To
     * then query this state, call {@see glGetTexLevelParameter}. If the texture cannot be
     * accommodated, texture state is set to 0.
     *
     * A one-component texture image uses only the red component of the RGBA color extracted from *`data`*. A
     * two-component image uses the R and A values. A three-component image uses the R, G, and B values. A
     * four-component image uses all of the RGBA components.
     *
     * Depth textures can be treated as LUMINANCE, INTENSITY or ALPHA textures during texture filtering and
     * application. Image-based shadowing can be enabled by comparing texture r coordinates to depth texture values
     * to generate a boolean result. See {@see glTexParameter} for details on texture comparison.
     *
     * @see http://docs.gl/gl2/glTexImage2D
     * @see http://docs.gl/gl3/glTexImage2D
     * @see http://docs.gl/gl4/glTexImage2D
     * @since 1.1
     * @param int $target
     * @param int $level
     * @param int $internalformat
     * @param int $width
     * @param int $height
     * @param int $border
     * @param int $format
     * @param int $type
     * @param \FFI\CData|\FFI\CPtr|null $pixels
     * @return void
     */
    public static function glTexImage2D(
        int $target,
        int $level,
        int $internalformat,
        int $width,
        int $height,
        int $border,
        int $format,
        int $type,
        ?\FFI\CData $pixels
    ): void {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($internalformat >= \PHP_INT_MIN && $internalformat <= \PHP_INT_MAX, 'Argument $internalformat overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');
        assert($border >= \PHP_INT_MIN && $border <= \PHP_INT_MAX, 'Argument $border overflow: C type GLint is required');
        assert($format >= 0 && $format <= 4_294_967_295, 'Argument $format overflow: C type GLenum is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');

        self::$ffi->glTexImage2D($target, $level, $internalformat, $width, $height, $border, $format, $type, $pixels);
    }

    /**
     * @since 1.1
     * @param int $target
     * @param int $pname
     * @param float $param
     * @return void
     */
    public static function glTexParameterf(int $target, int $pname, float $param): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($param >= -3.40282e38 && $param <= 3.40282e38, 'Argument $param overflow: C type GLfloat is required');

        self::$ffi->glTexParameterf($target, $pname, $param);
    }

    /**
     * @since 1.1
     * @param int $target
     * @param int $pname
     * @param \FFI\CData|\FFI\CFloatPtr|null $params
     * @return void
     */
    public static function glTexParameterfv(int $target, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glTexParameterfv($target, $pname, $params);
    }

    /**
     * @since 1.1
     * @param int $target
     * @param int $pname
     * @param int $param
     * @return void
     */
    public static function glTexParameteri(int $target, int $pname, int $param): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($param >= \PHP_INT_MIN && $param <= \PHP_INT_MAX, 'Argument $param overflow: C type GLint is required');

        self::$ffi->glTexParameteri($target, $pname, $param);
    }

    /**
     * @since 1.1
     * @param int $target
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glTexParameteriv(int $target, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        self::$ffi->glTexParameteriv($target, $pname, $params);
    }

    /**
     * Texturing maps a portion of a specified texture image onto each graphical primitive for which texturing is
     * enabled. To enable or disable one-dimensional texturing, call {@see glEnable} and {@see glDisable}
     * with argument `GL_TEXTURE_1D`.
     *
     *  - `glTexSubImage1D` redefines a contiguous subregion of an existing one-dimensional texture image. The texels
     * referenced by *`data`* replace the portion of the existing texture array with x indices *`xoffset`* and
     * xoffset + width - 1 , inclusive. This region may not include any texels outside the range of the texture array
     * as it was originally specified. It is not an error to specify a subtexture with width of 0, but such a
     * specification has no effect.
     *
     * If a non-zero named buffer object is bound to the `GL_PIXEL_UNPACK_BUFFER` target (see
     * {@see glBindBuffer}) while a texture image is specified, *`data`* is treated as a byte offset into
     * the buffer object's data store.
     *
     * @see http://docs.gl/gl2/glTexSubImage1D
     * @see http://docs.gl/gl3/glTexSubImage1D
     * @see http://docs.gl/gl4/glTexSubImage1D
     * @since 1.1
     * @param int $target
     * @param int $level
     * @param int $xoffset
     * @param int $width
     * @param int $format
     * @param int $type
     * @param \FFI\CData|\FFI\CPtr|null $pixels
     * @return void
     */
    public static function glTexSubImage1D(int $target, int $level, int $xoffset, int $width, int $format, int $type, ?\FFI\CData $pixels): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($xoffset >= \PHP_INT_MIN && $xoffset <= \PHP_INT_MAX, 'Argument $xoffset overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($format >= 0 && $format <= 4_294_967_295, 'Argument $format overflow: C type GLenum is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');

        self::$ffi->glTexSubImage1D($target, $level, $xoffset, $width, $format, $type, $pixels);
    }

    /**
     * Texturing maps a portion of a specified texture image onto each graphical primitive for which texturing is
     * enabled. To enable and disable two-dimensional texturing, call {@see glEnable} and {@see glDisable}
     * with argument `GL_TEXTURE_2D`.
     *
     *  - `glTexSubImage2D` redefines a contiguous subregion of an existing two-dimensional texture image. The texels
     * referenced by *`data`* replace the portion of the existing texture array with x indices *`xoffset`* and
     * xoffset + width - 1 , inclusive, and y indices *`yoffset`* and yoffset + height - 1 , inclusive. This region
     * may not include any texels outside the range of the texture array as it was originally specified. It is not an
     * error to specify a subtexture with zero width or height, but such a specification has no effect.
     *
     * If a non-zero named buffer object is bound to the `GL_PIXEL_UNPACK_BUFFER` target (see
     * {@see glBindBuffer}) while a texture image is specified, *`data`* is treated as a byte offset into
     * the buffer object's data store.
     *
     * @see http://docs.gl/gl2/glTexSubImage2D
     * @see http://docs.gl/gl3/glTexSubImage2D
     * @see http://docs.gl/gl4/glTexSubImage2D
     * @since 1.1
     * @param int $target
     * @param int $level
     * @param int $xoffset
     * @param int $yoffset
     * @param int $width
     * @param int $height
     * @param int $format
     * @param int $type
     * @param \FFI\CData|\FFI\CPtr|null $pixels
     * @return void
     */
    public static function glTexSubImage2D(
        int $target,
        int $level,
        int $xoffset,
        int $yoffset,
        int $width,
        int $height,
        int $format,
        int $type,
        ?\FFI\CData $pixels
    ): void {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($level >= \PHP_INT_MIN && $level <= \PHP_INT_MAX, 'Argument $level overflow: C type GLint is required');
        assert($xoffset >= \PHP_INT_MIN && $xoffset <= \PHP_INT_MAX, 'Argument $xoffset overflow: C type GLint is required');
        assert($yoffset >= \PHP_INT_MIN && $yoffset <= \PHP_INT_MAX, 'Argument $yoffset overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');
        assert($format >= 0 && $format <= 4_294_967_295, 'Argument $format overflow: C type GLenum is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');

        self::$ffi->glTexSubImage2D($target, $level, $xoffset, $yoffset, $width, $height, $format, $type, $pixels);
    }

    /**
     * @since 1.1
     * @param float $x
     * @param float $y
     * @param float $z
     * @return void
     */
    public static function glTranslated(float $x, float $y, float $z): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= \PHP_FLOAT_MIN && $x <= \PHP_FLOAT_MAX, 'Argument $x overflow: C type GLdouble is required');
        assert($y >= \PHP_FLOAT_MIN && $y <= \PHP_FLOAT_MAX, 'Argument $y overflow: C type GLdouble is required');
        assert($z >= \PHP_FLOAT_MIN && $z <= \PHP_FLOAT_MAX, 'Argument $z overflow: C type GLdouble is required');

        self::$ffi->glTranslated($x, $y, $z);
    }

    /**
     * @since 1.1
     * @param float $x
     * @param float $y
     * @param float $z
     * @return void
     */
    public static function glTranslatef(float $x, float $y, float $z): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= -3.40282e38 && $x <= 3.40282e38, 'Argument $x overflow: C type GLfloat is required');
        assert($y >= -3.40282e38 && $y <= 3.40282e38, 'Argument $y overflow: C type GLfloat is required');
        assert($z >= -3.40282e38 && $z <= 3.40282e38, 'Argument $z overflow: C type GLfloat is required');

        self::$ffi->glTranslatef($x, $y, $z);
    }

    /**
     * Commands are used within {@see glBegin}/{@see glEnd} pairs to specify point, line, and polygon vertices.
     * The current color, normal, texture coordinates, and fog coordinate are associated with the vertex when
     * `glVertex` is called.
     *
     * When only x and y are specified, z defaults to 0 and w defaults to 1. When x, y, and z are specified, w
     * defaults to 1.
     *
     * @see http://docs.gl/gl2/glVertex
     * @since 1.1
     * @param float $x
     * @param float $y
     * @return void
     */
    public static function glVertex2d(float $x, float $y): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= \PHP_FLOAT_MIN && $x <= \PHP_FLOAT_MAX, 'Argument $x overflow: C type GLdouble is required');
        assert($y >= \PHP_FLOAT_MIN && $y <= \PHP_FLOAT_MAX, 'Argument $y overflow: C type GLdouble is required');

        self::$ffi->glVertex2d($x, $y);
    }

    /**
     * Commands are used within {@see glBegin}/{@see glEnd} pairs to specify point, line, and polygon vertices.
     * The current color, normal, texture coordinates, and fog coordinate are associated with the vertex when
     * `glVertex` is called.
     *
     * When only x and y are specified, z defaults to 0 and w defaults to 1. When x, y, and z are specified, w
     * defaults to 1.
     *
     * @see http://docs.gl/gl2/glVertex
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glVertex2dv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glVertex2dv($v);
    }

    /**
     * Commands are used within {@see glBegin}/{@see glEnd} pairs to specify point, line, and polygon vertices.
     * The current color, normal, texture coordinates, and fog coordinate are associated with the vertex when
     * `glVertex` is called.
     *
     * When only x and y are specified, z defaults to 0 and w defaults to 1. When x, y, and z are specified, w
     * defaults to 1.
     *
     * @see http://docs.gl/gl2/glVertex
     * @since 1.1
     * @param float $x
     * @param float $y
     * @return void
     */
    public static function glVertex2f(float $x, float $y): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= -3.40282e38 && $x <= 3.40282e38, 'Argument $x overflow: C type GLfloat is required');
        assert($y >= -3.40282e38 && $y <= 3.40282e38, 'Argument $y overflow: C type GLfloat is required');

        self::$ffi->glVertex2f($x, $y);
    }

    /**
     * Commands are used within {@see glBegin}/{@see glEnd} pairs to specify point, line, and polygon vertices.
     * The current color, normal, texture coordinates, and fog coordinate are associated with the vertex when
     * `glVertex` is called.
     *
     * When only x and y are specified, z defaults to 0 and w defaults to 1. When x, y, and z are specified, w
     * defaults to 1.
     *
     * @see http://docs.gl/gl2/glVertex
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glVertex2fv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glVertex2fv($v);
    }

    /**
     * Commands are used within {@see glBegin}/{@see glEnd} pairs to specify point, line, and polygon vertices.
     * The current color, normal, texture coordinates, and fog coordinate are associated with the vertex when
     * `glVertex` is called.
     *
     * When only x and y are specified, z defaults to 0 and w defaults to 1. When x, y, and z are specified, w
     * defaults to 1.
     *
     * @see http://docs.gl/gl2/glVertex
     * @since 1.1
     * @param int $x
     * @param int $y
     * @return void
     */
    public static function glVertex2i(int $x, int $y): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= \PHP_INT_MIN && $x <= \PHP_INT_MAX, 'Argument $x overflow: C type GLint is required');
        assert($y >= \PHP_INT_MIN && $y <= \PHP_INT_MAX, 'Argument $y overflow: C type GLint is required');

        self::$ffi->glVertex2i($x, $y);
    }

    /**
     * Commands are used within {@see glBegin}/{@see glEnd} pairs to specify point, line, and polygon vertices.
     * The current color, normal, texture coordinates, and fog coordinate are associated with the vertex when
     * `glVertex` is called.
     *
     * When only x and y are specified, z defaults to 0 and w defaults to 1. When x, y, and z are specified, w
     * defaults to 1.
     *
     * @see http://docs.gl/gl2/glVertex
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertex2iv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glVertex2iv($v);
    }

    /**
     * Commands are used within {@see glBegin}/{@see glEnd} pairs to specify point, line, and polygon vertices.
     * The current color, normal, texture coordinates, and fog coordinate are associated with the vertex when
     * `glVertex` is called.
     *
     * When only x and y are specified, z defaults to 0 and w defaults to 1. When x, y, and z are specified, w
     * defaults to 1.
     *
     * @see http://docs.gl/gl2/glVertex
     * @since 1.1
     * @param int $x
     * @param int $y
     * @return void
     */
    public static function glVertex2s(int $x, int $y): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= -32768 && $x <= 32767, 'Argument $x overflow: C type GLshort is required');
        assert($y >= -32768 && $y <= 32767, 'Argument $y overflow: C type GLshort is required');

        self::$ffi->glVertex2s($x, $y);
    }

    /**
     * Commands are used within {@see glBegin}/{@see glEnd} pairs to specify point, line, and polygon vertices.
     * The current color, normal, texture coordinates, and fog coordinate are associated with the vertex when
     * `glVertex` is called.
     *
     * When only x and y are specified, z defaults to 0 and w defaults to 1. When x, y, and z are specified, w
     * defaults to 1.
     *
     * @see http://docs.gl/gl2/glVertex
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertex2sv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glVertex2sv($v);
    }

    /**
     * Commands are used within {@see glBegin}/{@see glEnd} pairs to specify point, line, and polygon vertices.
     * The current color, normal, texture coordinates, and fog coordinate are associated with the vertex when
     * `glVertex` is called.
     *
     * When only x and y are specified, z defaults to 0 and w defaults to 1. When x, y, and z are specified, w
     * defaults to 1.
     *
     * @see http://docs.gl/gl2/glVertex
     * @since 1.1
     * @param float $x
     * @param float $y
     * @param float $z
     * @return void
     */
    public static function glVertex3d(float $x, float $y, float $z): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= \PHP_FLOAT_MIN && $x <= \PHP_FLOAT_MAX, 'Argument $x overflow: C type GLdouble is required');
        assert($y >= \PHP_FLOAT_MIN && $y <= \PHP_FLOAT_MAX, 'Argument $y overflow: C type GLdouble is required');
        assert($z >= \PHP_FLOAT_MIN && $z <= \PHP_FLOAT_MAX, 'Argument $z overflow: C type GLdouble is required');

        self::$ffi->glVertex3d($x, $y, $z);
    }

    /**
     * Commands are used within {@see glBegin}/{@see glEnd} pairs to specify point, line, and polygon vertices.
     * The current color, normal, texture coordinates, and fog coordinate are associated with the vertex when
     * `glVertex` is called.
     *
     * When only x and y are specified, z defaults to 0 and w defaults to 1. When x, y, and z are specified, w
     * defaults to 1.
     *
     * @see http://docs.gl/gl2/glVertex
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glVertex3dv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glVertex3dv($v);
    }

    /**
     * Commands are used within {@see glBegin}/{@see glEnd} pairs to specify point, line, and polygon vertices.
     * The current color, normal, texture coordinates, and fog coordinate are associated with the vertex when
     * `glVertex` is called.
     *
     * When only x and y are specified, z defaults to 0 and w defaults to 1. When x, y, and z are specified, w
     * defaults to 1.
     *
     * @see http://docs.gl/gl2/glVertex
     * @since 1.1
     * @param float $x
     * @param float $y
     * @param float $z
     * @return void
     */
    public static function glVertex3f(float $x, float $y, float $z): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= -3.40282e38 && $x <= 3.40282e38, 'Argument $x overflow: C type GLfloat is required');
        assert($y >= -3.40282e38 && $y <= 3.40282e38, 'Argument $y overflow: C type GLfloat is required');
        assert($z >= -3.40282e38 && $z <= 3.40282e38, 'Argument $z overflow: C type GLfloat is required');

        self::$ffi->glVertex3f($x, $y, $z);
    }

    /**
     * Commands are used within {@see glBegin}/{@see glEnd} pairs to specify point, line, and polygon vertices.
     * The current color, normal, texture coordinates, and fog coordinate are associated with the vertex when
     * `glVertex` is called.
     *
     * When only x and y are specified, z defaults to 0 and w defaults to 1. When x, y, and z are specified, w
     * defaults to 1.
     *
     * @see http://docs.gl/gl2/glVertex
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glVertex3fv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glVertex3fv($v);
    }

    /**
     * Commands are used within {@see glBegin}/{@see glEnd} pairs to specify point, line, and polygon vertices.
     * The current color, normal, texture coordinates, and fog coordinate are associated with the vertex when
     * `glVertex` is called.
     *
     * When only x and y are specified, z defaults to 0 and w defaults to 1. When x, y, and z are specified, w
     * defaults to 1.
     *
     * @see http://docs.gl/gl2/glVertex
     * @since 1.1
     * @param int $x
     * @param int $y
     * @param int $z
     * @return void
     */
    public static function glVertex3i(int $x, int $y, int $z): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= \PHP_INT_MIN && $x <= \PHP_INT_MAX, 'Argument $x overflow: C type GLint is required');
        assert($y >= \PHP_INT_MIN && $y <= \PHP_INT_MAX, 'Argument $y overflow: C type GLint is required');
        assert($z >= \PHP_INT_MIN && $z <= \PHP_INT_MAX, 'Argument $z overflow: C type GLint is required');

        self::$ffi->glVertex3i($x, $y, $z);
    }

    /**
     * Commands are used within {@see glBegin}/{@see glEnd} pairs to specify point, line, and polygon vertices.
     * The current color, normal, texture coordinates, and fog coordinate are associated with the vertex when
     * `glVertex` is called.
     *
     * When only x and y are specified, z defaults to 0 and w defaults to 1. When x, y, and z are specified, w
     * defaults to 1.
     *
     * @see http://docs.gl/gl2/glVertex
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertex3iv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glVertex3iv($v);
    }

    /**
     * Commands are used within {@see glBegin}/{@see glEnd} pairs to specify point, line, and polygon vertices.
     * The current color, normal, texture coordinates, and fog coordinate are associated with the vertex when
     * `glVertex` is called.
     *
     * When only x and y are specified, z defaults to 0 and w defaults to 1. When x, y, and z are specified, w
     * defaults to 1.
     *
     * @see http://docs.gl/gl2/glVertex
     * @since 1.1
     * @param int $x
     * @param int $y
     * @param int $z
     * @return void
     */
    public static function glVertex3s(int $x, int $y, int $z): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= -32768 && $x <= 32767, 'Argument $x overflow: C type GLshort is required');
        assert($y >= -32768 && $y <= 32767, 'Argument $y overflow: C type GLshort is required');
        assert($z >= -32768 && $z <= 32767, 'Argument $z overflow: C type GLshort is required');

        self::$ffi->glVertex3s($x, $y, $z);
    }

    /**
     * Commands are used within {@see glBegin}/{@see glEnd} pairs to specify point, line, and polygon vertices.
     * The current color, normal, texture coordinates, and fog coordinate are associated with the vertex when
     * `glVertex` is called.
     *
     * When only x and y are specified, z defaults to 0 and w defaults to 1. When x, y, and z are specified, w
     * defaults to 1.
     *
     * @see http://docs.gl/gl2/glVertex
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertex3sv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glVertex3sv($v);
    }

    /**
     * Commands are used within {@see glBegin}/{@see glEnd} pairs to specify point, line, and polygon vertices.
     * The current color, normal, texture coordinates, and fog coordinate are associated with the vertex when
     * `glVertex` is called.
     *
     * When only x and y are specified, z defaults to 0 and w defaults to 1. When x, y, and z are specified, w
     * defaults to 1.
     *
     * @see http://docs.gl/gl2/glVertex
     * @since 1.1
     * @param float $x
     * @param float $y
     * @param float $z
     * @param float $w
     * @return void
     */
    public static function glVertex4d(float $x, float $y, float $z, float $w): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= \PHP_FLOAT_MIN && $x <= \PHP_FLOAT_MAX, 'Argument $x overflow: C type GLdouble is required');
        assert($y >= \PHP_FLOAT_MIN && $y <= \PHP_FLOAT_MAX, 'Argument $y overflow: C type GLdouble is required');
        assert($z >= \PHP_FLOAT_MIN && $z <= \PHP_FLOAT_MAX, 'Argument $z overflow: C type GLdouble is required');
        assert($w >= \PHP_FLOAT_MIN && $w <= \PHP_FLOAT_MAX, 'Argument $w overflow: C type GLdouble is required');

        self::$ffi->glVertex4d($x, $y, $z, $w);
    }

    /**
     * Commands are used within {@see glBegin}/{@see glEnd} pairs to specify point, line, and polygon vertices.
     * The current color, normal, texture coordinates, and fog coordinate are associated with the vertex when
     * `glVertex` is called.
     *
     * When only x and y are specified, z defaults to 0 and w defaults to 1. When x, y, and z are specified, w
     * defaults to 1.
     *
     * @see http://docs.gl/gl2/glVertex
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glVertex4dv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glVertex4dv($v);
    }

    /**
     * Commands are used within {@see glBegin}/{@see glEnd} pairs to specify point, line, and polygon vertices.
     * The current color, normal, texture coordinates, and fog coordinate are associated with the vertex when
     * `glVertex` is called.
     *
     * When only x and y are specified, z defaults to 0 and w defaults to 1. When x, y, and z are specified, w
     * defaults to 1.
     *
     * @see http://docs.gl/gl2/glVertex
     * @since 1.1
     * @param float $x
     * @param float $y
     * @param float $z
     * @param float $w
     * @return void
     */
    public static function glVertex4f(float $x, float $y, float $z, float $w): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= -3.40282e38 && $x <= 3.40282e38, 'Argument $x overflow: C type GLfloat is required');
        assert($y >= -3.40282e38 && $y <= 3.40282e38, 'Argument $y overflow: C type GLfloat is required');
        assert($z >= -3.40282e38 && $z <= 3.40282e38, 'Argument $z overflow: C type GLfloat is required');
        assert($w >= -3.40282e38 && $w <= 3.40282e38, 'Argument $w overflow: C type GLfloat is required');

        self::$ffi->glVertex4f($x, $y, $z, $w);
    }

    /**
     * Commands are used within {@see glBegin}/{@see glEnd} pairs to specify point, line, and polygon vertices.
     * The current color, normal, texture coordinates, and fog coordinate are associated with the vertex when
     * `glVertex` is called.
     *
     * When only x and y are specified, z defaults to 0 and w defaults to 1. When x, y, and z are specified, w
     * defaults to 1.
     *
     * @see http://docs.gl/gl2/glVertex
     * @since 1.1
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glVertex4fv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glVertex4fv($v);
    }

    /**
     * Commands are used within {@see glBegin}/{@see glEnd} pairs to specify point, line, and polygon vertices.
     * The current color, normal, texture coordinates, and fog coordinate are associated with the vertex when
     * `glVertex` is called.
     *
     * When only x and y are specified, z defaults to 0 and w defaults to 1. When x, y, and z are specified, w
     * defaults to 1.
     *
     * @see http://docs.gl/gl2/glVertex
     * @since 1.1
     * @param int $x
     * @param int $y
     * @param int $z
     * @param int $w
     * @return void
     */
    public static function glVertex4i(int $x, int $y, int $z, int $w): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= \PHP_INT_MIN && $x <= \PHP_INT_MAX, 'Argument $x overflow: C type GLint is required');
        assert($y >= \PHP_INT_MIN && $y <= \PHP_INT_MAX, 'Argument $y overflow: C type GLint is required');
        assert($z >= \PHP_INT_MIN && $z <= \PHP_INT_MAX, 'Argument $z overflow: C type GLint is required');
        assert($w >= \PHP_INT_MIN && $w <= \PHP_INT_MAX, 'Argument $w overflow: C type GLint is required');

        self::$ffi->glVertex4i($x, $y, $z, $w);
    }

    /**
     * Commands are used within {@see glBegin}/{@see glEnd} pairs to specify point, line, and polygon vertices.
     * The current color, normal, texture coordinates, and fog coordinate are associated with the vertex when
     * `glVertex` is called.
     *
     * When only x and y are specified, z defaults to 0 and w defaults to 1. When x, y, and z are specified, w
     * defaults to 1.
     *
     * @see http://docs.gl/gl2/glVertex
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertex4iv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glVertex4iv($v);
    }

    /**
     * Commands are used within {@see glBegin}/{@see glEnd} pairs to specify point, line, and polygon vertices.
     * The current color, normal, texture coordinates, and fog coordinate are associated with the vertex when
     * `glVertex` is called.
     *
     * When only x and y are specified, z defaults to 0 and w defaults to 1. When x, y, and z are specified, w
     * defaults to 1.
     *
     * @see http://docs.gl/gl2/glVertex
     * @since 1.1
     * @param int $x
     * @param int $y
     * @param int $z
     * @param int $w
     * @return void
     */
    public static function glVertex4s(int $x, int $y, int $z, int $w): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= -32768 && $x <= 32767, 'Argument $x overflow: C type GLshort is required');
        assert($y >= -32768 && $y <= 32767, 'Argument $y overflow: C type GLshort is required');
        assert($z >= -32768 && $z <= 32767, 'Argument $z overflow: C type GLshort is required');
        assert($w >= -32768 && $w <= 32767, 'Argument $w overflow: C type GLshort is required');

        self::$ffi->glVertex4s($x, $y, $z, $w);
    }

    /**
     * Commands are used within {@see glBegin}/{@see glEnd} pairs to specify point, line, and polygon vertices.
     * The current color, normal, texture coordinates, and fog coordinate are associated with the vertex when
     * `glVertex` is called.
     *
     * When only x and y are specified, z defaults to 0 and w defaults to 1. When x, y, and z are specified, w
     * defaults to 1.
     *
     * @see http://docs.gl/gl2/glVertex
     * @since 1.1
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glVertex4sv(?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');

        self::$ffi->glVertex4sv($v);
    }

    /**
     * Specifies the location and data format of an array of vertex coordinates to use when rendering. *`size`*
     * specifies the number of coordinates per vertex, and must be 2, 3, or 4. *`type`* specifies the data type of
     * each coordinate, and *`stride`* specifies the byte stride from one vertex to the next, allowing vertices and
     * attributes to be packed into a single array or stored in separate arrays. (Single-array storage may be more
     * efficient on some implementations; see {@see glInterleavedArrays}.)
     *
     * If a non-zero named buffer object is bound to the `GL_ARRAY_BUFFER` target (see {@see glBindBuffer})
     * while a vertex array is specified, *`pointer`* is treated as a byte offset into the buffer object's data
     * store. Also, the buffer object binding (`GL_ARRAY_BUFFER_BINDING`) is saved as vertex array client-side state
     * (`GL_VERTEX_ARRAY_BUFFER_BINDING`).
     *
     * When a vertex array is specified, *`size`*, *`type`*, *`stride`*, and *`pointer`* are saved as client-side
     * state, in addition to the current vertex array buffer object binding.
     *
     * To enable and disable the vertex array, call {@see glEnableClientState} and
     * {@see glDisableClientState} with the argument `GL_VERTEX_ARRAY`. If enabled, the vertex array
     * is used when {@see glArrayElement}, {@see glDrawArrays},
     * {@see glMultiDrawArrays}, {@see glDrawElements},
     * {@see glMultiDrawElements}, or {@see glDrawRangeElements} is called.
     *
     * @see http://docs.gl/gl2/glVertexPointer
     * @since 1.1
     * @param int $size
     * @param int $type
     * @param int $stride
     * @param \FFI\CData|\FFI\CPtr|null $pointer
     * @return void
     */
    public static function glVertexPointer(int $size, int $type, int $stride, ?\FFI\CData $pointer): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($size >= \PHP_INT_MIN && $size <= \PHP_INT_MAX, 'Argument $size overflow: C type GLint is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');
        assert($stride >= \PHP_INT_MIN && $stride <= \PHP_INT_MAX, 'Argument $stride overflow: C type GLsizei is required');

        self::$ffi->glVertexPointer($size, $type, $stride, $pointer);
    }

    /**
     * Specifies the affine transformation of x and y from normalized device coordinates to window coordinates. Let x
     * nd y nd be normalized device coordinates. Then the window coordinates x w y w are computed as follows:
     *
     * x w = x nd + 1 ⁢ width 2 + x
     *
     * y w = y nd + 1 ⁢ height 2 + y
     *
     * Viewport width and height are silently clamped to a range that depends on the implementation. To query this
     * range, call {@see glGet} with argument `GL_MAX_VIEWPORT_DIMS`.
     *
     * @see http://docs.gl/gl2/glViewport
     * @see http://docs.gl/gl3/glViewport
     * @see http://docs.gl/gl4/glViewport
     * @since 1.1
     * @param int $x
     * @param int $y
     * @param int $width
     * @param int $height
     * @return void
     */
    public static function glViewport(int $x, int $y, int $width, int $height): void
    {
        assert(version_compare(self::$info->version, '1.1') >= 0, __FUNCTION__ . ' is available since OpenGL 1.1, but only OpenGL '. self::$info->version . ' is available');
        assert($x >= \PHP_INT_MIN && $x <= \PHP_INT_MAX, 'Argument $x overflow: C type GLint is required');
        assert($y >= \PHP_INT_MIN && $y <= \PHP_INT_MAX, 'Argument $y overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');

        self::$ffi->glViewport($x, $y, $width, $height);
    }
}
