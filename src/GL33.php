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
 * The OpenGL functionality up to version 3.3. Includes the deprecated symbols of the Compatibility Profile.
 *
 * OpenGL 3.3 implementations support revision 3.30 of the OpenGL Shading Language.
 *
 * Extensions promoted to core in this release:
 *
 * - ARB_shader_bit_encoding @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_shader_bit_encoding.txt
 * - ARB_blend_func_extended @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_blend_func_extended.txt
 * - ARB_explicit_attrib_location @see
 * https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_explicit_attrib_location.txt
 * - ARB_occlusion_query2 @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_occlusion_query2.txt
 * - ARB_sampler_objects @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_sampler_objects.txt
 * - ARB_texture_rgb10_a2ui @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_texture_rgb10_a2ui.txt
 * - ARB_texture_swizzle @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_texture_swizzle.txt
 * - ARB_timer_query @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_timer_query.txt
 * - ARB_instanced_arrays @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_instanced_arrays.txt
 * - ARB_vertex_type_2_10_10_10_rev @see
 * https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_vertex_type_2_10_10_10_rev.txt
 *
 * @version 3.3
 */
class GL33 extends GL32
{
    /**
     * Accepted by the $src and $dst parameters of BlendFunc and BlendFunci, and by the $srcRGB,
     * $dstRGB, $srcAlpha and $dstAlpha parameters of BlendFuncSeparate and BlendFuncSeparatei.
     *
     * @since 3.3
     * @var int
     */
    public const
        GL_SRC1_COLOR = 0x88F9,
        GL_ONE_MINUS_SRC1_COLOR = 0x88FA,
        GL_ONE_MINUS_SRC1_ALPHA = 0x88FB;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetIntegerv, GetFloatv and GetDoublev.
     *
     * @since 3.3
     * @var int
     */
    public const GL_MAX_DUAL_SOURCE_DRAW_BUFFERS = 0x88FC;

    /**
     * Accepted by the $target parameter of BeginQuery, EndQuery, and GetQueryiv.
     *
     * @since 3.3
     * @var int
     */
    public const GL_ANY_SAMPLES_PASSED = 0x8C2F;

    /**
     * Accepted by the $value parameter of the GetBooleanv, GetIntegerv, GetInteger64v, GetFloatv and
     * GetDoublev functions.
     *
     * @since 3.3
     * @var int
     */
    public const GL_SAMPLER_BINDING = 0x8919;

    /**
     * Accepted by the $internalFormat parameter of TexImage1D, TexImage2D, TexImage3D, CopyTexImage1D,
     * CopyTexImage2D, RenderbufferStorage and RenderbufferStorageMultisample.
     *
     * @since 3.3
     * @var int
     */
    public const GL_RGB10_A2UI = 0x906F;

    /**
     * Accepted by the $pname parameters of TexParameteri, TexParameterf, TexParameteriv, TexParameterfv,
     * GetTexParameterfv, and GetTexParameteriv.
     *
     * @since 3.3
     * @var int
     */
    public const
        GL_TEXTURE_SWIZZLE_R = 0x8E42,
        GL_TEXTURE_SWIZZLE_G = 0x8E43,
        GL_TEXTURE_SWIZZLE_B = 0x8E44,
        GL_TEXTURE_SWIZZLE_A = 0x8E45;

    /**
     * Accepted by the $pname parameters of TexParameteriv,  TexParameterfv, GetTexParameterfv, and
     * GetTexParameteriv.
     *
     * @since 3.3
     * @var int
     */
    public const GL_TEXTURE_SWIZZLE_RGBA = 0x8E46;

    /**
     * Accepted by the $target parameter of BeginQuery, EndQuery, and GetQueryiv.
     *
     * @since 3.3
     * @var int
     */
    public const GL_TIME_ELAPSED = 0x88BF;

    /**
     * Accepted by the $target parameter of GetQueryiv and QueryCounter. Accepted by the $value parameter
     * of GetBooleanv, GetIntegerv, GetInteger64v, GetFloatv, and GetDoublev.
     *
     * @since 3.3
     * @var int
     */
    public const GL_TIMESTAMP = 0x8E28;

    /**
     * Accepted by the $pname parameters of GetVertexAttribdv, GetVertexAttribfv, and GetVertexAttribiv.
     *
     * @since 3.3
     * @var int
     */
    public const GL_VERTEX_ATTRIB_ARRAY_DIVISOR = 0x88FE;

    /**
     * Accepted by the $type parameter of VertexAttribPointer, VertexPointer, NormalPointer, ColorPointer,
     * SecondaryColorPointer, TexCoordPointer, VertexAttribP{1234}ui, VertexP*, TexCoordP*, MultiTexCoordP*,
     * NormalP3ui, ColorP*, SecondaryColorP* and VertexAttribP*.
     *
     * @since 3.3
     * @var int
     */
    public const GL_INT_2_10_10_10_REV = 0x8D9F;

    /**
     * {@see GL33::bindFragDataLocationIndexed} specifies that the varying out variable $name in $program should be
     * bound to fragment color $colorNumber when the program is next linked. $index may be zero or one to specify
     * that the color be used as either the first or second color input to the blend equation, respectively.
     *
     * The bindings specified by {@see GL33::bindFragDataLocationIndexed} have no effect until $program is next
     * linked. Bindings may be specified at any time after $program has been created. Specifically, they may be
     * specified before shader objects are attached to the program. Therefore, any name may be specified in $name,
     * including a name that is never used as a varying out variable in any fragment shader object.
     *
     * If $name was bound previously, its assigned binding is replaced with $colorNumber and $index. $name must be a
     * null-terminated string. $index must be less than or equal to one, and $colorNumber must be less than the value
     * of {@see GL33::GL_MAX_DRAW_BUFFERS} if $index is zero, and less than the value of
     * {@see GL33::GL_MAX_DUAL_SOURCE_DRAW_BUFFERS} if index is greater than or equal to one.
     *
     * In addition to the errors generated by {@see GL33::bindFragDataLocationIndexed}, the program $program will
     * fail to link if:    The number of active outputs is greater than the value {@see GL33::GL_MAX_DRAW_BUFFERS}.
     *   More than one varying out variable is bound to the same color number.
     *
     * @see http://docs.gl/gl4/glBindFragDataLocationIndexed
     * @since 3.3
     * @param int $program
     * @param int $colorNumber
     * @param int $index
     * @param CData|null $name
     * @return void
     */
    public function bindFragDataLocationIndexed(int $program, int $colorNumber, int $index, ?CData $name): void
    {
        $__proc = $this->proc('glBindFragDataLocationIndexed',
            'void (*)(GLuint program, GLuint colorNumber, GLuint index, const GLchar *name)');
        $__proc($program, $colorNumber, $index, $name);
    }

    /**
     * {@see GL33::bindSampler} binds $sampler to the texture unit at index $unit. $sampler must be zero or the
     * name of a sampler object previously returned from a call to {@see GL33::genSamplers}. $unit must be less
     * than the value of {@see GL33::GL_MAX_COMBINED_TEXTURE_IMAGE_UNITS}.
     *
     * When a sampler object is bound to a texture unit, its state supersedes that of the texture object bound to
     * that texture unit. If the sampler name zero is bound to a texture unit, the currently bound texture's sampler
     * state becomes active. A single sampler object may be bound to multiple texture units simultaneously.
     *
     * @see http://docs.gl/gl4/glBindSampler
     * @since 3.3
     * @param int $unit
     * @param int $sampler
     * @return void
     */
    public function bindSampler(int $unit, int $sampler): void
    {
        $__proc = $this->proc('glBindSampler', 'void (*)(GLuint unit, GLuint sampler)');
        $__proc($unit, $sampler);
    }

    /**
     * {@see GL33::deleteSamplers} deletes $n sampler objects named by the elements of the array $samplers. After a
     * sampler object is deleted, its name is again unused. If a sampler object that is currently bound to a sampler
     * unit is deleted, it is as though {@see GL33::bindSampler} is called with unit set to the unit the sampler is
     * bound to and sampler zero. Unused names in samplers are silently ignored, as is the reserved name zero.
     *
     * @see http://docs.gl/gl4/glDeleteSamplers
     * @since 3.3
     * @param int $count
     * @param CData|null $samplers
     * @return void
     */
    public function deleteSamplers(int $count, ?CData $samplers): void
    {
        $__proc = $this->proc('glDeleteSamplers', 'void (*)(GLsizei count, const GLuint *samplers)');
        $__proc($count, $samplers);
    }

    /**
     * {@see GL33::genSamplers} returns $n sampler object names in $samplers. There is no guarantee that the names
     * form a contiguous set of integers; however, it is guaranteed that none of the returned names was in use
     * immediately before the call to {@see GL33::genSamplers}.
     *
     * Sampler object names returned by a call to {@see GL33::genSamplers} are not returned by subsequent calls,
     * unless they are first deleted with {@see GL33::deleteSamplers}.
     *
     * The names returned in $samplers are marked as used, for the purposes of {@see GL33::genSamplers} only, but
     * they acquire state and type only when they are first bound.
     *
     * @see http://docs.gl/gl4/glGenSamplers
     * @since 3.3
     * @param int $count
     * @param int|null $samplers
     * @return void
     */
    public function genSamplers(int $count, ?int &$samplers): void
    {
        $samplersCType = $this->info->ffi->new('GLuint', false);
        try {
            $__proc = $this->proc('glGenSamplers', 'void (*)(GLsizei count, GLuint *samplers)');
            $__proc($count, \FFI::addr($samplersCType));
        } finally {
            $samplers = $samplersCType->cdata;
            \FFI::free($samplersCType);
        }
    }

    /**
     * {@see GL33::getFragDataIndex} returns the index of the fragment color to which the variable $name was bound
     * when the program object $program was last linked. If $name is not a varying out variable of $program, or if an
     * error occurs, -1 will be returned.
     *
     * @see http://docs.gl/gl4/glGetFragDataIndex
     * @since 3.3
     * @param int $program
     * @param CData|null $name
     * @return int
     */
    public function getFragDataIndex(int $program, ?CData $name): int
    {
        $__proc = $this->proc('glGetFragDataIndex', 'GLint (*)(GLuint program, const GLchar *name)');

        return $__proc($program, $name);
    }

    /**
     * These commands return a selected parameter of the query object specified by $id. {@see GL33::getQueryObject}
     * returns in $params a selected parameter of the query object specified by $id.
     * {@see GL33::getQueryBufferObject} returns in $buffer a selected parameter of the query object specified by
     * $id, by writing it to $buffer's data store at the byte offset specified by $offset.
     *
     * $pname names a specific query object parameter. $pname can be as follows:
     *
     *  - {@see GL33::GL_QUERY_RESULT}: $params or $buffer returns the value of
     *    the query object's passed samples counter. The initial value is 0.
     *
     *  - {@see GL33::GL_QUERY_RESULT_NO_WAIT}: If the result of the query is
     *    available (that is, a query of {@see GL33::GL_QUERY_RESULT_AVAILABLE}
     *    would
     *    return non-zero), then $params or $buffer returns the value of the
     *    query object's passed samples counter,
     *    otherwise, the data referred to by $params or $buffer is not modified.
     *    The initial value is 0.
     *
     *  - {@see GL33::GL_QUERY_RESULT_AVAILABLE}: $params or $buffer returns
     *    whether the passed samples counter is immediately available. If a
     *    delay would
     *    occur waiting for the query result, {@see GL33::GL_FALSE} is returned.
     *    Otherwise, {@see GL33::GL_TRUE} is
     *    returned, which also indicates that the results of all previous
     *    queries are available as well.
     *
     * @see http://docs.gl/gl2/glGetQueryObject
     * @see http://docs.gl/gl4/glGetQueryObject
     * @since 3.3
     * @param int $id
     * @param int $pname
     * @param int|null $params
     * @return void
     */
    public function getQueryObjecti64v(int $id, int $pname, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLint64', false);
        try {
            $__proc = $this->proc('glGetQueryObjecti64v', 'void (*)(GLuint id, GLenum pname, GLint64 *params)');
            $__proc($id, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * These commands return a selected parameter of the query object specified by $id. {@see GL33::getQueryObject}
     * returns in $params a selected parameter of the query object specified by $id.
     * {@see GL33::getQueryBufferObject} returns in $buffer a selected parameter of the query object specified by
     * $id, by writing it to $buffer's data store at the byte offset specified by $offset.
     *
     * $pname names a specific query object parameter. $pname can be as follows:
     *
     *  - {@see GL33::GL_QUERY_RESULT}: $params or $buffer returns the value of
     *    the query object's passed samples counter. The initial value is 0.
     *
     *  - {@see GL33::GL_QUERY_RESULT_NO_WAIT}: If the result of the query is
     *    available (that is, a query of {@see GL33::GL_QUERY_RESULT_AVAILABLE}
     *    would
     *    return non-zero), then $params or $buffer returns the value of the
     *    query object's passed samples counter,
     *    otherwise, the data referred to by $params or $buffer is not modified.
     *    The initial value is 0.
     *
     *  - {@see GL33::GL_QUERY_RESULT_AVAILABLE}: $params or $buffer returns
     *    whether the passed samples counter is immediately available. If a
     *    delay would
     *    occur waiting for the query result, {@see GL33::GL_FALSE} is returned.
     *    Otherwise, {@see GL33::GL_TRUE} is
     *    returned, which also indicates that the results of all previous
     *    queries are available as well.
     *
     * @see http://docs.gl/gl2/glGetQueryObject
     * @see http://docs.gl/gl4/glGetQueryObject
     * @since 3.3
     * @param int $id
     * @param int $pname
     * @param int|null $params
     * @return void
     */
    public function getQueryObjectui64v(int $id, int $pname, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLuint64', false);
        try {
            $__proc = $this->proc('glGetQueryObjectui64v', 'void (*)(GLuint id, GLenum pname, GLuint64 *params)');
            $__proc($id, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL33::getSamplerParameter} returns in $params the value or values of the sampler parameter specified
     * as $pname. $sampler defines the target sampler, and must be the name of an existing sampler object, returned
     * from a previous call to {@see GL33::genSamplers}. $pname accepts the same symbols as
     * {@see GL33::samplerParameter}, with the same interpretations:
     *
     *  - {@see GL33::GL_TEXTURE_MAG_FILTER}: Returns the single-valued texture
     *    magnification filter, a symbolic constant. The initial value is
     *    {@see GL33::GL_LINEAR}.
     *
     *  - {@see GL33::GL_TEXTURE_MIN_FILTER}: Returns the single-valued texture
     *    minification filter, a symbolic constant. The initial value is
     *    {@see GL33::GL_NEAREST_MIPMAP_LINEAR}.
     *
     *  - {@see GL33::GL_TEXTURE_MIN_LOD}: Returns the single-valued texture
     *    minimum level-of-detail value. The initial value is   -1000 .
     *
     *  - {@see GL33::GL_TEXTURE_MAX_LOD}: Returns the single-valued texture
     *    maximum level-of-detail value. The initial value is 1000.
     *
     *  - {@see GL33::GL_TEXTURE_WRAP_S}: Returns the single-valued wrapping
     *    function for texture coordinate s, a symbolic constant. The initial
     *    value
     *    is {@see GL33::GL_REPEAT}.
     *
     *  - {@see GL33::GL_TEXTURE_WRAP_T}: Returns the single-valued wrapping
     *    function for texture coordinate t, a symbolic constant. The initial
     *    value
     *    is {@see GL33::GL_REPEAT}.
     *
     *  - {@see GL33::GL_TEXTURE_WRAP_R}: Returns the single-valued wrapping
     *    function for texture coordinate r, a symbolic constant. The initial
     *    value
     *    is {@see GL33::GL_REPEAT}.
     *
     *  - {@see GL33::GL_TEXTURE_BORDER_COLOR}: Returns four integer or
     *    floating-point numbers that comprise the RGBA color of the texture
     *    border.
     *    Floating-point values are returned in the range    0 1  . Integer
     *    values are returned as a linear mapping of
     *    the internal floating-point representation such that 1.0 maps to the
     *    most positive representable integer and
     *    -1.0  maps to the most negative representable integer. The initial
     *    value is (0, 0, 0, 0).
     *
     *  - {@see GL33::GL_TEXTURE_COMPARE_MODE}: Returns a single-valued texture
     *    comparison mode, a symbolic constant. The initial value is
     *    {@see GL33::GL_NONE}. See {@see GL33::samplerParameter}.
     *
     *  - {@see GL33::GL_TEXTURE_COMPARE_FUNC}: Returns a single-valued texture
     *    comparison function, a symbolic constant. The initial value is
     *    {@see GL33::GL_LEQUAL}. See {@see GL33::samplerParameter}.
     *
     * @see http://docs.gl/gl4/glGetSamplerParameter
     * @since 3.3
     * @param int $sampler
     * @param int $pname
     * @param int|null $params
     * @return void
     */
    public function getSamplerParameterIiv(int $sampler, int $pname, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->proc('glGetSamplerParameterIiv',
                'void (*)(GLuint sampler, GLenum pname, GLint *params)');
            $__proc($sampler, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL33::getSamplerParameter} returns in $params the value or values of the sampler parameter specified
     * as $pname. $sampler defines the target sampler, and must be the name of an existing sampler object, returned
     * from a previous call to {@see GL33::genSamplers}. $pname accepts the same symbols as
     * {@see GL33::samplerParameter}, with the same interpretations:
     *
     *  - {@see GL33::GL_TEXTURE_MAG_FILTER}: Returns the single-valued texture
     *    magnification filter, a symbolic constant. The initial value is
     *    {@see GL33::GL_LINEAR}.
     *
     *  - {@see GL33::GL_TEXTURE_MIN_FILTER}: Returns the single-valued texture
     *    minification filter, a symbolic constant. The initial value is
     *    {@see GL33::GL_NEAREST_MIPMAP_LINEAR}.
     *
     *  - {@see GL33::GL_TEXTURE_MIN_LOD}: Returns the single-valued texture
     *    minimum level-of-detail value. The initial value is   -1000 .
     *
     *  - {@see GL33::GL_TEXTURE_MAX_LOD}: Returns the single-valued texture
     *    maximum level-of-detail value. The initial value is 1000.
     *
     *  - {@see GL33::GL_TEXTURE_WRAP_S}: Returns the single-valued wrapping
     *    function for texture coordinate s, a symbolic constant. The initial
     *    value
     *    is {@see GL33::GL_REPEAT}.
     *
     *  - {@see GL33::GL_TEXTURE_WRAP_T}: Returns the single-valued wrapping
     *    function for texture coordinate t, a symbolic constant. The initial
     *    value
     *    is {@see GL33::GL_REPEAT}.
     *
     *  - {@see GL33::GL_TEXTURE_WRAP_R}: Returns the single-valued wrapping
     *    function for texture coordinate r, a symbolic constant. The initial
     *    value
     *    is {@see GL33::GL_REPEAT}.
     *
     *  - {@see GL33::GL_TEXTURE_BORDER_COLOR}: Returns four integer or
     *    floating-point numbers that comprise the RGBA color of the texture
     *    border.
     *    Floating-point values are returned in the range    0 1  . Integer
     *    values are returned as a linear mapping of
     *    the internal floating-point representation such that 1.0 maps to the
     *    most positive representable integer and
     *    -1.0  maps to the most negative representable integer. The initial
     *    value is (0, 0, 0, 0).
     *
     *  - {@see GL33::GL_TEXTURE_COMPARE_MODE}: Returns a single-valued texture
     *    comparison mode, a symbolic constant. The initial value is
     *    {@see GL33::GL_NONE}. See {@see GL33::samplerParameter}.
     *
     *  - {@see GL33::GL_TEXTURE_COMPARE_FUNC}: Returns a single-valued texture
     *    comparison function, a symbolic constant. The initial value is
     *    {@see GL33::GL_LEQUAL}. See {@see GL33::samplerParameter}.
     *
     * @see http://docs.gl/gl4/glGetSamplerParameter
     * @since 3.3
     * @param int $sampler
     * @param int $pname
     * @param int|null $params
     * @return void
     */
    public function getSamplerParameterIuiv(int $sampler, int $pname, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLuint', false);
        try {
            $__proc = $this->proc('glGetSamplerParameterIuiv',
                'void (*)(GLuint sampler, GLenum pname, GLuint *params)');
            $__proc($sampler, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL33::getSamplerParameter} returns in $params the value or values of the sampler parameter specified
     * as $pname. $sampler defines the target sampler, and must be the name of an existing sampler object, returned
     * from a previous call to {@see GL33::genSamplers}. $pname accepts the same symbols as
     * {@see GL33::samplerParameter}, with the same interpretations:
     *
     *  - {@see GL33::GL_TEXTURE_MAG_FILTER}: Returns the single-valued texture
     *    magnification filter, a symbolic constant. The initial value is
     *    {@see GL33::GL_LINEAR}.
     *
     *  - {@see GL33::GL_TEXTURE_MIN_FILTER}: Returns the single-valued texture
     *    minification filter, a symbolic constant. The initial value is
     *    {@see GL33::GL_NEAREST_MIPMAP_LINEAR}.
     *
     *  - {@see GL33::GL_TEXTURE_MIN_LOD}: Returns the single-valued texture
     *    minimum level-of-detail value. The initial value is   -1000 .
     *
     *  - {@see GL33::GL_TEXTURE_MAX_LOD}: Returns the single-valued texture
     *    maximum level-of-detail value. The initial value is 1000.
     *
     *  - {@see GL33::GL_TEXTURE_WRAP_S}: Returns the single-valued wrapping
     *    function for texture coordinate s, a symbolic constant. The initial
     *    value
     *    is {@see GL33::GL_REPEAT}.
     *
     *  - {@see GL33::GL_TEXTURE_WRAP_T}: Returns the single-valued wrapping
     *    function for texture coordinate t, a symbolic constant. The initial
     *    value
     *    is {@see GL33::GL_REPEAT}.
     *
     *  - {@see GL33::GL_TEXTURE_WRAP_R}: Returns the single-valued wrapping
     *    function for texture coordinate r, a symbolic constant. The initial
     *    value
     *    is {@see GL33::GL_REPEAT}.
     *
     *  - {@see GL33::GL_TEXTURE_BORDER_COLOR}: Returns four integer or
     *    floating-point numbers that comprise the RGBA color of the texture
     *    border.
     *    Floating-point values are returned in the range    0 1  . Integer
     *    values are returned as a linear mapping of
     *    the internal floating-point representation such that 1.0 maps to the
     *    most positive representable integer and
     *    -1.0  maps to the most negative representable integer. The initial
     *    value is (0, 0, 0, 0).
     *
     *  - {@see GL33::GL_TEXTURE_COMPARE_MODE}: Returns a single-valued texture
     *    comparison mode, a symbolic constant. The initial value is
     *    {@see GL33::GL_NONE}. See {@see GL33::samplerParameter}.
     *
     *  - {@see GL33::GL_TEXTURE_COMPARE_FUNC}: Returns a single-valued texture
     *    comparison function, a symbolic constant. The initial value is
     *    {@see GL33::GL_LEQUAL}. See {@see GL33::samplerParameter}.
     *
     * @see http://docs.gl/gl4/glGetSamplerParameter
     * @since 3.3
     * @param int $sampler
     * @param int $pname
     * @param float|null $params
     * @return void
     */
    public function getSamplerParameterfv(int $sampler, int $pname, ?float &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLfloat', false);
        try {
            $__proc = $this->proc('glGetSamplerParameterfv',
                'void (*)(GLuint sampler, GLenum pname, GLfloat *params)');
            $__proc($sampler, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL33::getSamplerParameter} returns in $params the value or values of the sampler parameter specified
     * as $pname. $sampler defines the target sampler, and must be the name of an existing sampler object, returned
     * from a previous call to {@see GL33::genSamplers}. $pname accepts the same symbols as
     * {@see GL33::samplerParameter}, with the same interpretations:
     *
     *  - {@see GL33::GL_TEXTURE_MAG_FILTER}: Returns the single-valued texture
     *    magnification filter, a symbolic constant. The initial value is
     *    {@see GL33::GL_LINEAR}.
     *
     *  - {@see GL33::GL_TEXTURE_MIN_FILTER}: Returns the single-valued texture
     *    minification filter, a symbolic constant. The initial value is
     *    {@see GL33::GL_NEAREST_MIPMAP_LINEAR}.
     *
     *  - {@see GL33::GL_TEXTURE_MIN_LOD}: Returns the single-valued texture
     *    minimum level-of-detail value. The initial value is   -1000 .
     *
     *  - {@see GL33::GL_TEXTURE_MAX_LOD}: Returns the single-valued texture
     *    maximum level-of-detail value. The initial value is 1000.
     *
     *  - {@see GL33::GL_TEXTURE_WRAP_S}: Returns the single-valued wrapping
     *    function for texture coordinate s, a symbolic constant. The initial
     *    value
     *    is {@see GL33::GL_REPEAT}.
     *
     *  - {@see GL33::GL_TEXTURE_WRAP_T}: Returns the single-valued wrapping
     *    function for texture coordinate t, a symbolic constant. The initial
     *    value
     *    is {@see GL33::GL_REPEAT}.
     *
     *  - {@see GL33::GL_TEXTURE_WRAP_R}: Returns the single-valued wrapping
     *    function for texture coordinate r, a symbolic constant. The initial
     *    value
     *    is {@see GL33::GL_REPEAT}.
     *
     *  - {@see GL33::GL_TEXTURE_BORDER_COLOR}: Returns four integer or
     *    floating-point numbers that comprise the RGBA color of the texture
     *    border.
     *    Floating-point values are returned in the range    0 1  . Integer
     *    values are returned as a linear mapping of
     *    the internal floating-point representation such that 1.0 maps to the
     *    most positive representable integer and
     *    -1.0  maps to the most negative representable integer. The initial
     *    value is (0, 0, 0, 0).
     *
     *  - {@see GL33::GL_TEXTURE_COMPARE_MODE}: Returns a single-valued texture
     *    comparison mode, a symbolic constant. The initial value is
     *    {@see GL33::GL_NONE}. See {@see GL33::samplerParameter}.
     *
     *  - {@see GL33::GL_TEXTURE_COMPARE_FUNC}: Returns a single-valued texture
     *    comparison function, a symbolic constant. The initial value is
     *    {@see GL33::GL_LEQUAL}. See {@see GL33::samplerParameter}.
     *
     * @see http://docs.gl/gl4/glGetSamplerParameter
     * @since 3.3
     * @param int $sampler
     * @param int $pname
     * @param int|null $params
     * @return void
     */
    public function getSamplerParameteriv(int $sampler, int $pname, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->proc('glGetSamplerParameteriv',
                'void (*)(GLuint sampler, GLenum pname, GLint *params)');
            $__proc($sampler, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL33::isSampler} returns {@see GL33::GL_TRUE} if $id is currently the name of a sampler object. If $id
     * is zero, or is a non-zero value that is not currently the name of a sampler object, or if an error occurs,
     * {@see GL33::isSampler} returns {@see GL33::GL_FALSE}.
     *
     * A name returned by {@see GL33::genSamplers}, is the name of a sampler object.
     *
     * @see http://docs.gl/gl4/glIsSampler
     * @since 3.3
     * @param int $sampler
     * @return bool
     */
    public function isSampler(int $sampler): bool
    {
        $__proc = $this->proc('glIsSampler', 'GLboolean (*)(GLuint sampler)');

        return $__proc($sampler) !== 0;
    }

    /**
     * {@see GL33::queryCounter} causes the GL to record the current time into the query object named $id. $target
     * must be {@see GL33::GL_TIMESTAMP}. The time is recorded after all previous commands on the GL client and
     * server state and the framebuffer have been fully realized. When the time is recorded, the query result for
     * that object is marked available. {@see GL33::queryCounter} timer queries can be used within a
     * {@see GL33::beginQuery} /  {@see GL33::endQuery} block where the target is {@see GL33::GL_TIME_ELAPSED}
     * and it does not affect the result of that query object.
     *
     * @see http://docs.gl/gl4/glQueryCounter
     * @since 3.3
     * @param int $id
     * @param int $target
     * @return void
     */
    public function queryCounter(int $id, int $target): void
    {
        $__proc = $this->proc('glQueryCounter', 'void (*)(GLuint id, GLenum target)');
        $__proc($id, $target);
    }

    /**
     * {@see GL33::samplerParameter} assigns the value or values in $params to the sampler parameter specified as
     * $pname. $sampler specifies the sampler object to be modified, and must be the name of a sampler object
     * previously returned from a call to {@see GL33::genSamplers}. The following symbols are accepted in $pname:
     *
     *  - {@see GL33::GL_TEXTURE_MIN_FILTER}: The texture minifying function is
     *    used whenever the pixel being textured maps to an area greater than
     *    one
     *    texture element. There are six defined minifying functions. Two of
     *    them use the nearest one or nearest four
     *    texture elements to compute the texture value. The other four use
     *    mipmaps.   A mipmap is an ordered set of
     *    arrays representing the same image at progressively lower resolutions.
     *    If the texture has dimensions    2 n
     *    × 2 m   , there are     max &amp;af;  n m   + 1   mipmaps. The first
     *    mipmap is the original texture, with
     *    dimensions    2 n  × 2 m   . Each subsequent mipmap has dimensions
     *    2   k - 1    × 2   l - 1     , where
     *     2 k  × 2 l    are the dimensions of the previous mipmap, until
     *    either    k = 0   or    l = 0  . At that
     *    point, subsequent mipmaps have dimension    1 × 2   l - 1      or
     *    2   k - 1    × 1   until the final
     *    mipmap, which has dimension    1 × 1  . To define the mipmaps, call
     *    {@see GL33::texImage1D},
     *    {@see GL33::texImage2D}, {@see GL33::texImage3D}, {@see
     *    GL33::copyTexImage1D}, or
     *    {@see GL33::copyTexImage2D} with the level argument indicating the
     *    order of the mipmaps. Level 0 is the
     *    original texture; level    max &amp;af;  n m    is the final    1 × 1
     *      mipmap.   $params supplies a function
     *    for minifying the texture as one of the following:   {@see
     *    GL33::GL_NEAREST}   Returns the value of the
     *    texture element that is nearest (in Manhattan distance) to the center
     *    of the pixel being textured.
     *    {@see GL33::GL_LINEAR}   Returns the weighted average of the four
     *    texture elements that are closest to the
     *    center of the pixel being textured. These can include border texture
     *    elements, depending on the values of
     *    {@see GL33::GL_TEXTURE_WRAP_S} and {@see GL33::GL_TEXTURE_WRAP_T}, and
     *    on the exact mapping.
     *    {@see GL33::GL_NEAREST_MIPMAP_NEAREST}   Chooses the mipmap that most
     *    closely matches the size of the pixel
     *    being textured and uses the {@see GL33::GL_NEAREST} criterion (the
     *    texture element nearest to the center of
     *    the pixel) to produce a texture value.     {@see
     *    GL33::GL_LINEAR_MIPMAP_NEAREST}   Chooses the mipmap that
     *    most closely matches the size of the pixel being textured and uses the
     *    {@see GL33::GL_LINEAR} criterion (a
     *    weighted average of the four texture elements that are closest to the
     *    center of the pixel) to produce a
     *    texture value.     {@see GL33::GL_NEAREST_MIPMAP_LINEAR}   Chooses the
     *    two mipmaps that most closely match the
     *    size of the pixel being textured and uses the {@see GL33::GL_NEAREST}
     *    criterion (the texture element nearest
     *    to the center of the pixel) to produce a texture value from each
     *    mipmap. The final texture value is a weighted
     *    average of those two values.     {@see GL33::GL_LINEAR_MIPMAP_LINEAR}
     *     Chooses the two mipmaps that most
     *    closely match the size of the pixel being textured and uses the {@see
     *    GL33::GL_LINEAR} criterion (a weighted
     *    average of the four texture elements that are closest to the center of
     *    the pixel) to produce a texture value
     *    from each mipmap. The final texture value is a weighted average of
     *    those two values.       As more texture
     *    elements are sampled in the minification process, fewer aliasing
     *    artifacts will be apparent. While the
     *    {@see GL33::GL_NEAREST} and {@see GL33::GL_LINEAR} minification
     *    functions can be faster than the other four,
     *    they sample only one or four texture elements to determine the texture
     *    value of the pixel being rendered and
     *    can produce moire patterns or ragged transitions. The initial value of
     *    {@see GL33::GL_TEXTURE_MIN_FILTER} is
     *    {@see GL33::GL_NEAREST_MIPMAP_LINEAR}.
     *
     *  - {@see GL33::GL_TEXTURE_MAG_FILTER}: The texture magnification function
     *    is used when the pixel being textured maps to an area less than or
     *    equal
     *    to one texture element. It sets the texture magnification function to
     *    either {@see GL33::GL_NEAREST} or
     *    {@see GL33::GL_LINEAR} (see below). {@see GL33::GL_NEAREST} is
     *    generally faster than {@see GL33::GL_LINEAR},
     *    but it can produce textured images with sharper edges because the
     *    transition between texture elements is not
     *    as smooth. The initial value of {@see GL33::GL_TEXTURE_MAG_FILTER} is
     *    {@see GL33::GL_LINEAR}.
     *    {@see GL33::GL_NEAREST}   Returns the value of the texture element
     *    that is nearest (in Manhattan distance) to
     *    the center of the pixel being textured.     {@see GL33::GL_LINEAR}
     *    Returns the weighted average of the four
     *    texture elements that are closest to the center of the pixel being
     *    textured. These can include border texture
     *    elements, depending on the values of {@see GL33::GL_TEXTURE_WRAP_S}
     *    and {@see GL33::GL_TEXTURE_WRAP_T}, and on
     *    the exact mapping.
     *
     *  - {@see GL33::GL_TEXTURE_MIN_LOD}: Sets the minimum level-of-detail
     *    parameter. This floating-point value limits the selection of highest
     *    resolution mipmap (lowest mipmap level). The initial value is -1000.
     *
     *  - {@see GL33::GL_TEXTURE_MAX_LOD}: Sets the maximum level-of-detail
     *    parameter. This floating-point value limits the selection of the
     *    lowest
     *    resolution mipmap (highest mipmap level). The initial value is 1000.
     *
     *  - {@see GL33::GL_TEXTURE_WRAP_S}: Sets the wrap parameter for texture
     *    coordinate s to either {@see GL33::GL_CLAMP_TO_EDGE},
     *    {@see GL33::GL_MIRRORED_REPEAT}, {@see GL33::GL_REPEAT}, or {@see
     *    GL33::GL_MIRROR_CLAMP_TO_EDGE}.
     *    {@see GL33::GL_CLAMP_TO_BORDER} causes the s coordinate to be clamped
     *    to the range       -1  2N      1 +    1
     *    2N       , where N is the size of the texture in the direction of
     *    clamping.{@see GL33::GL_CLAMP_TO_EDGE}
     *    causes s coordinates to be clamped to the range       1  2N      1 -
     *     1  2N       , where N is the size of
     *    the texture in the direction of clamping. {@see GL33::GL_REPEAT}
     *    causes the integer part of the s coordinate
     *    to be ignored; the GL uses only the fractional part, thereby creating
     *    a repeating pattern.
     *    {@see GL33::GL_MIRRORED_REPEAT} causes the s coordinate to be set to
     *    the fractional part of the texture
     *    coordinate if the integer part of s is even; if the integer part of s
     *    is odd, then the s texture coordinate is
     *    set to    1 -  frac &amp;af;  s    , where    frac &amp;af;  s
     *    represents the fractional part of s.
     *    {@see GL33::GL_MIRROR_CLAMP_TO_EDGE} causes the s coordinate to be
     *    repeated as for
     *    {@see GL33::GL_MIRRORED_REPEAT} for one repetition of the texture, at
     *    which point the coordinate to be clamped
     *    as in {@see GL33::GL_CLAMP_TO_EDGE}. Initially, {@see
     *    GL33::GL_TEXTURE_WRAP_S} is set to
     *    {@see GL33::GL_REPEAT}.
     *
     *  - {@see GL33::GL_TEXTURE_WRAP_T}: Sets the wrap parameter for texture
     *    coordinate t to either {@see GL33::GL_CLAMP_TO_EDGE},
     *    {@see GL33::GL_MIRRORED_REPEAT}, {@see GL33::GL_REPEAT}, or {@see
     *    GL33::GL_MIRROR_CLAMP_TO_EDGE}. See the
     *    discussion under {@see GL33::GL_TEXTURE_WRAP_S}. Initially, {@see
     *    GL33::GL_TEXTURE_WRAP_T} is set to
     *    {@see GL33::GL_REPEAT}.
     *
     *  - {@see GL33::GL_TEXTURE_WRAP_R}: Sets the wrap parameter for texture
     *    coordinate r to either {@see GL33::GL_CLAMP_TO_EDGE},
     *    {@see GL33::GL_MIRRORED_REPEAT}, {@see GL33::GL_REPEAT}, or {@see
     *    GL33::GL_MIRROR_CLAMP_TO_EDGE}. See the
     *    discussion under {@see GL33::GL_TEXTURE_WRAP_S}. Initially, {@see
     *    GL33::GL_TEXTURE_WRAP_R} is set to
     *    {@see GL33::GL_REPEAT}.
     *
     *  - {@see GL33::GL_TEXTURE_BORDER_COLOR}: The data in $params specifies
     *    four values that define the border values that should be used for
     *    border
     *    texels. If a texel is sampled from the border of the texture, the
     *    values of
     *    {@see GL33::GL_TEXTURE_BORDER_COLOR} are interpreted as an RGBA color
     *    to match the texture's internal format
     *    and substituted for the non-existent texel data. If the texture
     *    contains depth components, the first component
     *    of {@see GL33::GL_TEXTURE_BORDER_COLOR} is interpreted as a depth
     *    value. The initial value is     0.0 , 0.0 ,
     *    0.0 , 0.0    .
     *
     *  - {@see GL33::GL_TEXTURE_COMPARE_MODE}: Specifies the texture comparison
     *    mode for currently bound textures. That is, a texture whose internal
     *    format
     *    is {@see GL33::GL_DEPTH_COMPONENT_*}; see {@see GL33::texImage2D})
     *    Permissible values are:
     *    {@see GL33::GL_COMPARE_REF_TO_TEXTURE}   Specifies that the
     *    interpolated and clamped r texture coordinate
     *    should be compared to the value in the currently bound texture. See
     *    the discussion of
     *    {@see GL33::GL_TEXTURE_COMPARE_FUNC} for details of how the comparison
     *    is evaluated. The result of the
     *    comparison is assigned to the red channel.     {@see GL33::GL_NONE}
     *    Specifies that the red channel should be
     *    assigned the appropriate value from the currently bound texture.
     *
     *  - {@see GL33::GL_TEXTURE_COMPARE_FUNC}: Specifies the comparison
     *    operator used when {@see GL33::GL_TEXTURE_COMPARE_MODE} is set to
     *    {@see GL33::GL_COMPARE_REF_TO_TEXTURE}. Permissible values are:
     *     Texture Comparison Function
     *    Computed result        {@see GL33::GL_LEQUAL}      result =     1.0
     *    0.0   &amp;it;     r &lt;=  D t       r
     *    &gt;  D t              {@see GL33::GL_GEQUAL}      result =     1.0
     *    0.0   &amp;it;     r &gt;=  D t       r
     *    &lt;  D t              {@see GL33::GL_LESS}      result =     1.0
     *    0.0   &amp;it;     r &lt;  D t       r
     *    &gt;=  D t              {@see GL33::GL_GREATER}      result =     1.0
     *     0.0   &amp;it;     r &gt;  D t       r
     *    &lt;=  D t              {@see GL33::GL_EQUAL}      result =     1.0
     *    0.0   &amp;it;     r =  D t       r ≠
     *    D t              {@see GL33::GL_NOTEQUAL}      result =     1.0   0.0
     *     &amp;it;     r ≠  D t       r =  D t
     *                 {@see GL33::GL_ALWAYS}      result = 1.0        {@see
     *    GL33::GL_NEVER}      result = 0.0
     *    where r is the current interpolated texture coordinate, and   D t   is
     *    the texture value sampled from the
     *    currently bound texture. result is assigned to   R t  .
     *
     * @see http://docs.gl/gl4/glSamplerParameter
     * @since 3.3
     * @param int $sampler
     * @param int $pname
     * @param CData|null $param
     * @return void
     */
    public function samplerParameterIiv(int $sampler, int $pname, ?CData $param): void
    {
        $__proc = $this->proc('glSamplerParameterIiv',
            'void (*)(GLuint sampler, GLenum pname, const GLint *param)');
        $__proc($sampler, $pname, $param);
    }

    /**
     * {@see GL33::samplerParameter} assigns the value or values in $params to the sampler parameter specified as
     * $pname. $sampler specifies the sampler object to be modified, and must be the name of a sampler object
     * previously returned from a call to {@see GL33::genSamplers}. The following symbols are accepted in $pname:
     *
     *  - {@see GL33::GL_TEXTURE_MIN_FILTER}: The texture minifying function is
     *    used whenever the pixel being textured maps to an area greater than
     *    one
     *    texture element. There are six defined minifying functions. Two of
     *    them use the nearest one or nearest four
     *    texture elements to compute the texture value. The other four use
     *    mipmaps.   A mipmap is an ordered set of
     *    arrays representing the same image at progressively lower resolutions.
     *    If the texture has dimensions    2 n
     *    × 2 m   , there are     max &amp;af;  n m   + 1   mipmaps. The first
     *    mipmap is the original texture, with
     *    dimensions    2 n  × 2 m   . Each subsequent mipmap has dimensions
     *    2   k - 1    × 2   l - 1     , where
     *     2 k  × 2 l    are the dimensions of the previous mipmap, until
     *    either    k = 0   or    l = 0  . At that
     *    point, subsequent mipmaps have dimension    1 × 2   l - 1      or
     *    2   k - 1    × 1   until the final
     *    mipmap, which has dimension    1 × 1  . To define the mipmaps, call
     *    {@see GL33::texImage1D},
     *    {@see GL33::texImage2D}, {@see GL33::texImage3D}, {@see
     *    GL33::copyTexImage1D}, or
     *    {@see GL33::copyTexImage2D} with the level argument indicating the
     *    order of the mipmaps. Level 0 is the
     *    original texture; level    max &amp;af;  n m    is the final    1 × 1
     *      mipmap.   $params supplies a function
     *    for minifying the texture as one of the following:   {@see
     *    GL33::GL_NEAREST}   Returns the value of the
     *    texture element that is nearest (in Manhattan distance) to the center
     *    of the pixel being textured.
     *    {@see GL33::GL_LINEAR}   Returns the weighted average of the four
     *    texture elements that are closest to the
     *    center of the pixel being textured. These can include border texture
     *    elements, depending on the values of
     *    {@see GL33::GL_TEXTURE_WRAP_S} and {@see GL33::GL_TEXTURE_WRAP_T}, and
     *    on the exact mapping.
     *    {@see GL33::GL_NEAREST_MIPMAP_NEAREST}   Chooses the mipmap that most
     *    closely matches the size of the pixel
     *    being textured and uses the {@see GL33::GL_NEAREST} criterion (the
     *    texture element nearest to the center of
     *    the pixel) to produce a texture value.     {@see
     *    GL33::GL_LINEAR_MIPMAP_NEAREST}   Chooses the mipmap that
     *    most closely matches the size of the pixel being textured and uses the
     *    {@see GL33::GL_LINEAR} criterion (a
     *    weighted average of the four texture elements that are closest to the
     *    center of the pixel) to produce a
     *    texture value.     {@see GL33::GL_NEAREST_MIPMAP_LINEAR}   Chooses the
     *    two mipmaps that most closely match the
     *    size of the pixel being textured and uses the {@see GL33::GL_NEAREST}
     *    criterion (the texture element nearest
     *    to the center of the pixel) to produce a texture value from each
     *    mipmap. The final texture value is a weighted
     *    average of those two values.     {@see GL33::GL_LINEAR_MIPMAP_LINEAR}
     *     Chooses the two mipmaps that most
     *    closely match the size of the pixel being textured and uses the {@see
     *    GL33::GL_LINEAR} criterion (a weighted
     *    average of the four texture elements that are closest to the center of
     *    the pixel) to produce a texture value
     *    from each mipmap. The final texture value is a weighted average of
     *    those two values.       As more texture
     *    elements are sampled in the minification process, fewer aliasing
     *    artifacts will be apparent. While the
     *    {@see GL33::GL_NEAREST} and {@see GL33::GL_LINEAR} minification
     *    functions can be faster than the other four,
     *    they sample only one or four texture elements to determine the texture
     *    value of the pixel being rendered and
     *    can produce moire patterns or ragged transitions. The initial value of
     *    {@see GL33::GL_TEXTURE_MIN_FILTER} is
     *    {@see GL33::GL_NEAREST_MIPMAP_LINEAR}.
     *
     *  - {@see GL33::GL_TEXTURE_MAG_FILTER}: The texture magnification function
     *    is used when the pixel being textured maps to an area less than or
     *    equal
     *    to one texture element. It sets the texture magnification function to
     *    either {@see GL33::GL_NEAREST} or
     *    {@see GL33::GL_LINEAR} (see below). {@see GL33::GL_NEAREST} is
     *    generally faster than {@see GL33::GL_LINEAR},
     *    but it can produce textured images with sharper edges because the
     *    transition between texture elements is not
     *    as smooth. The initial value of {@see GL33::GL_TEXTURE_MAG_FILTER} is
     *    {@see GL33::GL_LINEAR}.
     *    {@see GL33::GL_NEAREST}   Returns the value of the texture element
     *    that is nearest (in Manhattan distance) to
     *    the center of the pixel being textured.     {@see GL33::GL_LINEAR}
     *    Returns the weighted average of the four
     *    texture elements that are closest to the center of the pixel being
     *    textured. These can include border texture
     *    elements, depending on the values of {@see GL33::GL_TEXTURE_WRAP_S}
     *    and {@see GL33::GL_TEXTURE_WRAP_T}, and on
     *    the exact mapping.
     *
     *  - {@see GL33::GL_TEXTURE_MIN_LOD}: Sets the minimum level-of-detail
     *    parameter. This floating-point value limits the selection of highest
     *    resolution mipmap (lowest mipmap level). The initial value is -1000.
     *
     *  - {@see GL33::GL_TEXTURE_MAX_LOD}: Sets the maximum level-of-detail
     *    parameter. This floating-point value limits the selection of the
     *    lowest
     *    resolution mipmap (highest mipmap level). The initial value is 1000.
     *
     *  - {@see GL33::GL_TEXTURE_WRAP_S}: Sets the wrap parameter for texture
     *    coordinate s to either {@see GL33::GL_CLAMP_TO_EDGE},
     *    {@see GL33::GL_MIRRORED_REPEAT}, {@see GL33::GL_REPEAT}, or {@see
     *    GL33::GL_MIRROR_CLAMP_TO_EDGE}.
     *    {@see GL33::GL_CLAMP_TO_BORDER} causes the s coordinate to be clamped
     *    to the range       -1  2N      1 +    1
     *    2N       , where N is the size of the texture in the direction of
     *    clamping.{@see GL33::GL_CLAMP_TO_EDGE}
     *    causes s coordinates to be clamped to the range       1  2N      1 -
     *     1  2N       , where N is the size of
     *    the texture in the direction of clamping. {@see GL33::GL_REPEAT}
     *    causes the integer part of the s coordinate
     *    to be ignored; the GL uses only the fractional part, thereby creating
     *    a repeating pattern.
     *    {@see GL33::GL_MIRRORED_REPEAT} causes the s coordinate to be set to
     *    the fractional part of the texture
     *    coordinate if the integer part of s is even; if the integer part of s
     *    is odd, then the s texture coordinate is
     *    set to    1 -  frac &amp;af;  s    , where    frac &amp;af;  s
     *    represents the fractional part of s.
     *    {@see GL33::GL_MIRROR_CLAMP_TO_EDGE} causes the s coordinate to be
     *    repeated as for
     *    {@see GL33::GL_MIRRORED_REPEAT} for one repetition of the texture, at
     *    which point the coordinate to be clamped
     *    as in {@see GL33::GL_CLAMP_TO_EDGE}. Initially, {@see
     *    GL33::GL_TEXTURE_WRAP_S} is set to
     *    {@see GL33::GL_REPEAT}.
     *
     *  - {@see GL33::GL_TEXTURE_WRAP_T}: Sets the wrap parameter for texture
     *    coordinate t to either {@see GL33::GL_CLAMP_TO_EDGE},
     *    {@see GL33::GL_MIRRORED_REPEAT}, {@see GL33::GL_REPEAT}, or {@see
     *    GL33::GL_MIRROR_CLAMP_TO_EDGE}. See the
     *    discussion under {@see GL33::GL_TEXTURE_WRAP_S}. Initially, {@see
     *    GL33::GL_TEXTURE_WRAP_T} is set to
     *    {@see GL33::GL_REPEAT}.
     *
     *  - {@see GL33::GL_TEXTURE_WRAP_R}: Sets the wrap parameter for texture
     *    coordinate r to either {@see GL33::GL_CLAMP_TO_EDGE},
     *    {@see GL33::GL_MIRRORED_REPEAT}, {@see GL33::GL_REPEAT}, or {@see
     *    GL33::GL_MIRROR_CLAMP_TO_EDGE}. See the
     *    discussion under {@see GL33::GL_TEXTURE_WRAP_S}. Initially, {@see
     *    GL33::GL_TEXTURE_WRAP_R} is set to
     *    {@see GL33::GL_REPEAT}.
     *
     *  - {@see GL33::GL_TEXTURE_BORDER_COLOR}: The data in $params specifies
     *    four values that define the border values that should be used for
     *    border
     *    texels. If a texel is sampled from the border of the texture, the
     *    values of
     *    {@see GL33::GL_TEXTURE_BORDER_COLOR} are interpreted as an RGBA color
     *    to match the texture's internal format
     *    and substituted for the non-existent texel data. If the texture
     *    contains depth components, the first component
     *    of {@see GL33::GL_TEXTURE_BORDER_COLOR} is interpreted as a depth
     *    value. The initial value is     0.0 , 0.0 ,
     *    0.0 , 0.0    .
     *
     *  - {@see GL33::GL_TEXTURE_COMPARE_MODE}: Specifies the texture comparison
     *    mode for currently bound textures. That is, a texture whose internal
     *    format
     *    is {@see GL33::GL_DEPTH_COMPONENT_*}; see {@see GL33::texImage2D})
     *    Permissible values are:
     *    {@see GL33::GL_COMPARE_REF_TO_TEXTURE}   Specifies that the
     *    interpolated and clamped r texture coordinate
     *    should be compared to the value in the currently bound texture. See
     *    the discussion of
     *    {@see GL33::GL_TEXTURE_COMPARE_FUNC} for details of how the comparison
     *    is evaluated. The result of the
     *    comparison is assigned to the red channel.     {@see GL33::GL_NONE}
     *    Specifies that the red channel should be
     *    assigned the appropriate value from the currently bound texture.
     *
     *  - {@see GL33::GL_TEXTURE_COMPARE_FUNC}: Specifies the comparison
     *    operator used when {@see GL33::GL_TEXTURE_COMPARE_MODE} is set to
     *    {@see GL33::GL_COMPARE_REF_TO_TEXTURE}. Permissible values are:
     *     Texture Comparison Function
     *    Computed result        {@see GL33::GL_LEQUAL}      result =     1.0
     *    0.0   &amp;it;     r &lt;=  D t       r
     *    &gt;  D t              {@see GL33::GL_GEQUAL}      result =     1.0
     *    0.0   &amp;it;     r &gt;=  D t       r
     *    &lt;  D t              {@see GL33::GL_LESS}      result =     1.0
     *    0.0   &amp;it;     r &lt;  D t       r
     *    &gt;=  D t              {@see GL33::GL_GREATER}      result =     1.0
     *     0.0   &amp;it;     r &gt;  D t       r
     *    &lt;=  D t              {@see GL33::GL_EQUAL}      result =     1.0
     *    0.0   &amp;it;     r =  D t       r ≠
     *    D t              {@see GL33::GL_NOTEQUAL}      result =     1.0   0.0
     *     &amp;it;     r ≠  D t       r =  D t
     *                 {@see GL33::GL_ALWAYS}      result = 1.0        {@see
     *    GL33::GL_NEVER}      result = 0.0
     *    where r is the current interpolated texture coordinate, and   D t   is
     *    the texture value sampled from the
     *    currently bound texture. result is assigned to   R t  .
     *
     * @see http://docs.gl/gl4/glSamplerParameter
     * @since 3.3
     * @param int $sampler
     * @param int $pname
     * @param CData|null $param
     * @return void
     */
    public function samplerParameterIuiv(int $sampler, int $pname, ?CData $param): void
    {
        $__proc = $this->proc('glSamplerParameterIuiv',
            'void (*)(GLuint sampler, GLenum pname, const GLuint *param)');
        $__proc($sampler, $pname, $param);
    }

    /**
     * {@see GL33::samplerParameter} assigns the value or values in $params to the sampler parameter specified as
     * $pname. $sampler specifies the sampler object to be modified, and must be the name of a sampler object
     * previously returned from a call to {@see GL33::genSamplers}. The following symbols are accepted in $pname:
     *
     *  - {@see GL33::GL_TEXTURE_MIN_FILTER}: The texture minifying function is
     *    used whenever the pixel being textured maps to an area greater than
     *    one
     *    texture element. There are six defined minifying functions. Two of
     *    them use the nearest one or nearest four
     *    texture elements to compute the texture value. The other four use
     *    mipmaps.   A mipmap is an ordered set of
     *    arrays representing the same image at progressively lower resolutions.
     *    If the texture has dimensions    2 n
     *    × 2 m   , there are     max &amp;af;  n m   + 1   mipmaps. The first
     *    mipmap is the original texture, with
     *    dimensions    2 n  × 2 m   . Each subsequent mipmap has dimensions
     *    2   k - 1    × 2   l - 1     , where
     *     2 k  × 2 l    are the dimensions of the previous mipmap, until
     *    either    k = 0   or    l = 0  . At that
     *    point, subsequent mipmaps have dimension    1 × 2   l - 1      or
     *    2   k - 1    × 1   until the final
     *    mipmap, which has dimension    1 × 1  . To define the mipmaps, call
     *    {@see GL33::texImage1D},
     *    {@see GL33::texImage2D}, {@see GL33::texImage3D}, {@see
     *    GL33::copyTexImage1D}, or
     *    {@see GL33::copyTexImage2D} with the level argument indicating the
     *    order of the mipmaps. Level 0 is the
     *    original texture; level    max &amp;af;  n m    is the final    1 × 1
     *      mipmap.   $params supplies a function
     *    for minifying the texture as one of the following:   {@see
     *    GL33::GL_NEAREST}   Returns the value of the
     *    texture element that is nearest (in Manhattan distance) to the center
     *    of the pixel being textured.
     *    {@see GL33::GL_LINEAR}   Returns the weighted average of the four
     *    texture elements that are closest to the
     *    center of the pixel being textured. These can include border texture
     *    elements, depending on the values of
     *    {@see GL33::GL_TEXTURE_WRAP_S} and {@see GL33::GL_TEXTURE_WRAP_T}, and
     *    on the exact mapping.
     *    {@see GL33::GL_NEAREST_MIPMAP_NEAREST}   Chooses the mipmap that most
     *    closely matches the size of the pixel
     *    being textured and uses the {@see GL33::GL_NEAREST} criterion (the
     *    texture element nearest to the center of
     *    the pixel) to produce a texture value.     {@see
     *    GL33::GL_LINEAR_MIPMAP_NEAREST}   Chooses the mipmap that
     *    most closely matches the size of the pixel being textured and uses the
     *    {@see GL33::GL_LINEAR} criterion (a
     *    weighted average of the four texture elements that are closest to the
     *    center of the pixel) to produce a
     *    texture value.     {@see GL33::GL_NEAREST_MIPMAP_LINEAR}   Chooses the
     *    two mipmaps that most closely match the
     *    size of the pixel being textured and uses the {@see GL33::GL_NEAREST}
     *    criterion (the texture element nearest
     *    to the center of the pixel) to produce a texture value from each
     *    mipmap. The final texture value is a weighted
     *    average of those two values.     {@see GL33::GL_LINEAR_MIPMAP_LINEAR}
     *     Chooses the two mipmaps that most
     *    closely match the size of the pixel being textured and uses the {@see
     *    GL33::GL_LINEAR} criterion (a weighted
     *    average of the four texture elements that are closest to the center of
     *    the pixel) to produce a texture value
     *    from each mipmap. The final texture value is a weighted average of
     *    those two values.       As more texture
     *    elements are sampled in the minification process, fewer aliasing
     *    artifacts will be apparent. While the
     *    {@see GL33::GL_NEAREST} and {@see GL33::GL_LINEAR} minification
     *    functions can be faster than the other four,
     *    they sample only one or four texture elements to determine the texture
     *    value of the pixel being rendered and
     *    can produce moire patterns or ragged transitions. The initial value of
     *    {@see GL33::GL_TEXTURE_MIN_FILTER} is
     *    {@see GL33::GL_NEAREST_MIPMAP_LINEAR}.
     *
     *  - {@see GL33::GL_TEXTURE_MAG_FILTER}: The texture magnification function
     *    is used when the pixel being textured maps to an area less than or
     *    equal
     *    to one texture element. It sets the texture magnification function to
     *    either {@see GL33::GL_NEAREST} or
     *    {@see GL33::GL_LINEAR} (see below). {@see GL33::GL_NEAREST} is
     *    generally faster than {@see GL33::GL_LINEAR},
     *    but it can produce textured images with sharper edges because the
     *    transition between texture elements is not
     *    as smooth. The initial value of {@see GL33::GL_TEXTURE_MAG_FILTER} is
     *    {@see GL33::GL_LINEAR}.
     *    {@see GL33::GL_NEAREST}   Returns the value of the texture element
     *    that is nearest (in Manhattan distance) to
     *    the center of the pixel being textured.     {@see GL33::GL_LINEAR}
     *    Returns the weighted average of the four
     *    texture elements that are closest to the center of the pixel being
     *    textured. These can include border texture
     *    elements, depending on the values of {@see GL33::GL_TEXTURE_WRAP_S}
     *    and {@see GL33::GL_TEXTURE_WRAP_T}, and on
     *    the exact mapping.
     *
     *  - {@see GL33::GL_TEXTURE_MIN_LOD}: Sets the minimum level-of-detail
     *    parameter. This floating-point value limits the selection of highest
     *    resolution mipmap (lowest mipmap level). The initial value is -1000.
     *
     *  - {@see GL33::GL_TEXTURE_MAX_LOD}: Sets the maximum level-of-detail
     *    parameter. This floating-point value limits the selection of the
     *    lowest
     *    resolution mipmap (highest mipmap level). The initial value is 1000.
     *
     *  - {@see GL33::GL_TEXTURE_WRAP_S}: Sets the wrap parameter for texture
     *    coordinate s to either {@see GL33::GL_CLAMP_TO_EDGE},
     *    {@see GL33::GL_MIRRORED_REPEAT}, {@see GL33::GL_REPEAT}, or {@see
     *    GL33::GL_MIRROR_CLAMP_TO_EDGE}.
     *    {@see GL33::GL_CLAMP_TO_BORDER} causes the s coordinate to be clamped
     *    to the range       -1  2N      1 +    1
     *    2N       , where N is the size of the texture in the direction of
     *    clamping.{@see GL33::GL_CLAMP_TO_EDGE}
     *    causes s coordinates to be clamped to the range       1  2N      1 -
     *     1  2N       , where N is the size of
     *    the texture in the direction of clamping. {@see GL33::GL_REPEAT}
     *    causes the integer part of the s coordinate
     *    to be ignored; the GL uses only the fractional part, thereby creating
     *    a repeating pattern.
     *    {@see GL33::GL_MIRRORED_REPEAT} causes the s coordinate to be set to
     *    the fractional part of the texture
     *    coordinate if the integer part of s is even; if the integer part of s
     *    is odd, then the s texture coordinate is
     *    set to    1 -  frac &amp;af;  s    , where    frac &amp;af;  s
     *    represents the fractional part of s.
     *    {@see GL33::GL_MIRROR_CLAMP_TO_EDGE} causes the s coordinate to be
     *    repeated as for
     *    {@see GL33::GL_MIRRORED_REPEAT} for one repetition of the texture, at
     *    which point the coordinate to be clamped
     *    as in {@see GL33::GL_CLAMP_TO_EDGE}. Initially, {@see
     *    GL33::GL_TEXTURE_WRAP_S} is set to
     *    {@see GL33::GL_REPEAT}.
     *
     *  - {@see GL33::GL_TEXTURE_WRAP_T}: Sets the wrap parameter for texture
     *    coordinate t to either {@see GL33::GL_CLAMP_TO_EDGE},
     *    {@see GL33::GL_MIRRORED_REPEAT}, {@see GL33::GL_REPEAT}, or {@see
     *    GL33::GL_MIRROR_CLAMP_TO_EDGE}. See the
     *    discussion under {@see GL33::GL_TEXTURE_WRAP_S}. Initially, {@see
     *    GL33::GL_TEXTURE_WRAP_T} is set to
     *    {@see GL33::GL_REPEAT}.
     *
     *  - {@see GL33::GL_TEXTURE_WRAP_R}: Sets the wrap parameter for texture
     *    coordinate r to either {@see GL33::GL_CLAMP_TO_EDGE},
     *    {@see GL33::GL_MIRRORED_REPEAT}, {@see GL33::GL_REPEAT}, or {@see
     *    GL33::GL_MIRROR_CLAMP_TO_EDGE}. See the
     *    discussion under {@see GL33::GL_TEXTURE_WRAP_S}. Initially, {@see
     *    GL33::GL_TEXTURE_WRAP_R} is set to
     *    {@see GL33::GL_REPEAT}.
     *
     *  - {@see GL33::GL_TEXTURE_BORDER_COLOR}: The data in $params specifies
     *    four values that define the border values that should be used for
     *    border
     *    texels. If a texel is sampled from the border of the texture, the
     *    values of
     *    {@see GL33::GL_TEXTURE_BORDER_COLOR} are interpreted as an RGBA color
     *    to match the texture's internal format
     *    and substituted for the non-existent texel data. If the texture
     *    contains depth components, the first component
     *    of {@see GL33::GL_TEXTURE_BORDER_COLOR} is interpreted as a depth
     *    value. The initial value is     0.0 , 0.0 ,
     *    0.0 , 0.0    .
     *
     *  - {@see GL33::GL_TEXTURE_COMPARE_MODE}: Specifies the texture comparison
     *    mode for currently bound textures. That is, a texture whose internal
     *    format
     *    is {@see GL33::GL_DEPTH_COMPONENT_*}; see {@see GL33::texImage2D})
     *    Permissible values are:
     *    {@see GL33::GL_COMPARE_REF_TO_TEXTURE}   Specifies that the
     *    interpolated and clamped r texture coordinate
     *    should be compared to the value in the currently bound texture. See
     *    the discussion of
     *    {@see GL33::GL_TEXTURE_COMPARE_FUNC} for details of how the comparison
     *    is evaluated. The result of the
     *    comparison is assigned to the red channel.     {@see GL33::GL_NONE}
     *    Specifies that the red channel should be
     *    assigned the appropriate value from the currently bound texture.
     *
     *  - {@see GL33::GL_TEXTURE_COMPARE_FUNC}: Specifies the comparison
     *    operator used when {@see GL33::GL_TEXTURE_COMPARE_MODE} is set to
     *    {@see GL33::GL_COMPARE_REF_TO_TEXTURE}. Permissible values are:
     *     Texture Comparison Function
     *    Computed result        {@see GL33::GL_LEQUAL}      result =     1.0
     *    0.0   &amp;it;     r &lt;=  D t       r
     *    &gt;  D t              {@see GL33::GL_GEQUAL}      result =     1.0
     *    0.0   &amp;it;     r &gt;=  D t       r
     *    &lt;  D t              {@see GL33::GL_LESS}      result =     1.0
     *    0.0   &amp;it;     r &lt;  D t       r
     *    &gt;=  D t              {@see GL33::GL_GREATER}      result =     1.0
     *     0.0   &amp;it;     r &gt;  D t       r
     *    &lt;=  D t              {@see GL33::GL_EQUAL}      result =     1.0
     *    0.0   &amp;it;     r =  D t       r ≠
     *    D t              {@see GL33::GL_NOTEQUAL}      result =     1.0   0.0
     *     &amp;it;     r ≠  D t       r =  D t
     *                 {@see GL33::GL_ALWAYS}      result = 1.0        {@see
     *    GL33::GL_NEVER}      result = 0.0
     *    where r is the current interpolated texture coordinate, and   D t   is
     *    the texture value sampled from the
     *    currently bound texture. result is assigned to   R t  .
     *
     * @see http://docs.gl/gl4/glSamplerParameter
     * @since 3.3
     * @param int $sampler
     * @param int $pname
     * @param float $param
     * @return void
     */
    public function samplerParameterf(int $sampler, int $pname, float $param): void
    {
        $__proc = $this->proc('glSamplerParameterf', 'void (*)(GLuint sampler, GLenum pname, GLfloat param)');
        $__proc($sampler, $pname, $param);
    }

    /**
     * {@see GL33::samplerParameter} assigns the value or values in $params to the sampler parameter specified as
     * $pname. $sampler specifies the sampler object to be modified, and must be the name of a sampler object
     * previously returned from a call to {@see GL33::genSamplers}. The following symbols are accepted in $pname:
     *
     *  - {@see GL33::GL_TEXTURE_MIN_FILTER}: The texture minifying function is
     *    used whenever the pixel being textured maps to an area greater than
     *    one
     *    texture element. There are six defined minifying functions. Two of
     *    them use the nearest one or nearest four
     *    texture elements to compute the texture value. The other four use
     *    mipmaps.   A mipmap is an ordered set of
     *    arrays representing the same image at progressively lower resolutions.
     *    If the texture has dimensions    2 n
     *    × 2 m   , there are     max &amp;af;  n m   + 1   mipmaps. The first
     *    mipmap is the original texture, with
     *    dimensions    2 n  × 2 m   . Each subsequent mipmap has dimensions
     *    2   k - 1    × 2   l - 1     , where
     *     2 k  × 2 l    are the dimensions of the previous mipmap, until
     *    either    k = 0   or    l = 0  . At that
     *    point, subsequent mipmaps have dimension    1 × 2   l - 1      or
     *    2   k - 1    × 1   until the final
     *    mipmap, which has dimension    1 × 1  . To define the mipmaps, call
     *    {@see GL33::texImage1D},
     *    {@see GL33::texImage2D}, {@see GL33::texImage3D}, {@see
     *    GL33::copyTexImage1D}, or
     *    {@see GL33::copyTexImage2D} with the level argument indicating the
     *    order of the mipmaps. Level 0 is the
     *    original texture; level    max &amp;af;  n m    is the final    1 × 1
     *      mipmap.   $params supplies a function
     *    for minifying the texture as one of the following:   {@see
     *    GL33::GL_NEAREST}   Returns the value of the
     *    texture element that is nearest (in Manhattan distance) to the center
     *    of the pixel being textured.
     *    {@see GL33::GL_LINEAR}   Returns the weighted average of the four
     *    texture elements that are closest to the
     *    center of the pixel being textured. These can include border texture
     *    elements, depending on the values of
     *    {@see GL33::GL_TEXTURE_WRAP_S} and {@see GL33::GL_TEXTURE_WRAP_T}, and
     *    on the exact mapping.
     *    {@see GL33::GL_NEAREST_MIPMAP_NEAREST}   Chooses the mipmap that most
     *    closely matches the size of the pixel
     *    being textured and uses the {@see GL33::GL_NEAREST} criterion (the
     *    texture element nearest to the center of
     *    the pixel) to produce a texture value.     {@see
     *    GL33::GL_LINEAR_MIPMAP_NEAREST}   Chooses the mipmap that
     *    most closely matches the size of the pixel being textured and uses the
     *    {@see GL33::GL_LINEAR} criterion (a
     *    weighted average of the four texture elements that are closest to the
     *    center of the pixel) to produce a
     *    texture value.     {@see GL33::GL_NEAREST_MIPMAP_LINEAR}   Chooses the
     *    two mipmaps that most closely match the
     *    size of the pixel being textured and uses the {@see GL33::GL_NEAREST}
     *    criterion (the texture element nearest
     *    to the center of the pixel) to produce a texture value from each
     *    mipmap. The final texture value is a weighted
     *    average of those two values.     {@see GL33::GL_LINEAR_MIPMAP_LINEAR}
     *     Chooses the two mipmaps that most
     *    closely match the size of the pixel being textured and uses the {@see
     *    GL33::GL_LINEAR} criterion (a weighted
     *    average of the four texture elements that are closest to the center of
     *    the pixel) to produce a texture value
     *    from each mipmap. The final texture value is a weighted average of
     *    those two values.       As more texture
     *    elements are sampled in the minification process, fewer aliasing
     *    artifacts will be apparent. While the
     *    {@see GL33::GL_NEAREST} and {@see GL33::GL_LINEAR} minification
     *    functions can be faster than the other four,
     *    they sample only one or four texture elements to determine the texture
     *    value of the pixel being rendered and
     *    can produce moire patterns or ragged transitions. The initial value of
     *    {@see GL33::GL_TEXTURE_MIN_FILTER} is
     *    {@see GL33::GL_NEAREST_MIPMAP_LINEAR}.
     *
     *  - {@see GL33::GL_TEXTURE_MAG_FILTER}: The texture magnification function
     *    is used when the pixel being textured maps to an area less than or
     *    equal
     *    to one texture element. It sets the texture magnification function to
     *    either {@see GL33::GL_NEAREST} or
     *    {@see GL33::GL_LINEAR} (see below). {@see GL33::GL_NEAREST} is
     *    generally faster than {@see GL33::GL_LINEAR},
     *    but it can produce textured images with sharper edges because the
     *    transition between texture elements is not
     *    as smooth. The initial value of {@see GL33::GL_TEXTURE_MAG_FILTER} is
     *    {@see GL33::GL_LINEAR}.
     *    {@see GL33::GL_NEAREST}   Returns the value of the texture element
     *    that is nearest (in Manhattan distance) to
     *    the center of the pixel being textured.     {@see GL33::GL_LINEAR}
     *    Returns the weighted average of the four
     *    texture elements that are closest to the center of the pixel being
     *    textured. These can include border texture
     *    elements, depending on the values of {@see GL33::GL_TEXTURE_WRAP_S}
     *    and {@see GL33::GL_TEXTURE_WRAP_T}, and on
     *    the exact mapping.
     *
     *  - {@see GL33::GL_TEXTURE_MIN_LOD}: Sets the minimum level-of-detail
     *    parameter. This floating-point value limits the selection of highest
     *    resolution mipmap (lowest mipmap level). The initial value is -1000.
     *
     *  - {@see GL33::GL_TEXTURE_MAX_LOD}: Sets the maximum level-of-detail
     *    parameter. This floating-point value limits the selection of the
     *    lowest
     *    resolution mipmap (highest mipmap level). The initial value is 1000.
     *
     *  - {@see GL33::GL_TEXTURE_WRAP_S}: Sets the wrap parameter for texture
     *    coordinate s to either {@see GL33::GL_CLAMP_TO_EDGE},
     *    {@see GL33::GL_MIRRORED_REPEAT}, {@see GL33::GL_REPEAT}, or {@see
     *    GL33::GL_MIRROR_CLAMP_TO_EDGE}.
     *    {@see GL33::GL_CLAMP_TO_BORDER} causes the s coordinate to be clamped
     *    to the range       -1  2N      1 +    1
     *    2N       , where N is the size of the texture in the direction of
     *    clamping.{@see GL33::GL_CLAMP_TO_EDGE}
     *    causes s coordinates to be clamped to the range       1  2N      1 -
     *     1  2N       , where N is the size of
     *    the texture in the direction of clamping. {@see GL33::GL_REPEAT}
     *    causes the integer part of the s coordinate
     *    to be ignored; the GL uses only the fractional part, thereby creating
     *    a repeating pattern.
     *    {@see GL33::GL_MIRRORED_REPEAT} causes the s coordinate to be set to
     *    the fractional part of the texture
     *    coordinate if the integer part of s is even; if the integer part of s
     *    is odd, then the s texture coordinate is
     *    set to    1 -  frac &amp;af;  s    , where    frac &amp;af;  s
     *    represents the fractional part of s.
     *    {@see GL33::GL_MIRROR_CLAMP_TO_EDGE} causes the s coordinate to be
     *    repeated as for
     *    {@see GL33::GL_MIRRORED_REPEAT} for one repetition of the texture, at
     *    which point the coordinate to be clamped
     *    as in {@see GL33::GL_CLAMP_TO_EDGE}. Initially, {@see
     *    GL33::GL_TEXTURE_WRAP_S} is set to
     *    {@see GL33::GL_REPEAT}.
     *
     *  - {@see GL33::GL_TEXTURE_WRAP_T}: Sets the wrap parameter for texture
     *    coordinate t to either {@see GL33::GL_CLAMP_TO_EDGE},
     *    {@see GL33::GL_MIRRORED_REPEAT}, {@see GL33::GL_REPEAT}, or {@see
     *    GL33::GL_MIRROR_CLAMP_TO_EDGE}. See the
     *    discussion under {@see GL33::GL_TEXTURE_WRAP_S}. Initially, {@see
     *    GL33::GL_TEXTURE_WRAP_T} is set to
     *    {@see GL33::GL_REPEAT}.
     *
     *  - {@see GL33::GL_TEXTURE_WRAP_R}: Sets the wrap parameter for texture
     *    coordinate r to either {@see GL33::GL_CLAMP_TO_EDGE},
     *    {@see GL33::GL_MIRRORED_REPEAT}, {@see GL33::GL_REPEAT}, or {@see
     *    GL33::GL_MIRROR_CLAMP_TO_EDGE}. See the
     *    discussion under {@see GL33::GL_TEXTURE_WRAP_S}. Initially, {@see
     *    GL33::GL_TEXTURE_WRAP_R} is set to
     *    {@see GL33::GL_REPEAT}.
     *
     *  - {@see GL33::GL_TEXTURE_BORDER_COLOR}: The data in $params specifies
     *    four values that define the border values that should be used for
     *    border
     *    texels. If a texel is sampled from the border of the texture, the
     *    values of
     *    {@see GL33::GL_TEXTURE_BORDER_COLOR} are interpreted as an RGBA color
     *    to match the texture's internal format
     *    and substituted for the non-existent texel data. If the texture
     *    contains depth components, the first component
     *    of {@see GL33::GL_TEXTURE_BORDER_COLOR} is interpreted as a depth
     *    value. The initial value is     0.0 , 0.0 ,
     *    0.0 , 0.0    .
     *
     *  - {@see GL33::GL_TEXTURE_COMPARE_MODE}: Specifies the texture comparison
     *    mode for currently bound textures. That is, a texture whose internal
     *    format
     *    is {@see GL33::GL_DEPTH_COMPONENT_*}; see {@see GL33::texImage2D})
     *    Permissible values are:
     *    {@see GL33::GL_COMPARE_REF_TO_TEXTURE}   Specifies that the
     *    interpolated and clamped r texture coordinate
     *    should be compared to the value in the currently bound texture. See
     *    the discussion of
     *    {@see GL33::GL_TEXTURE_COMPARE_FUNC} for details of how the comparison
     *    is evaluated. The result of the
     *    comparison is assigned to the red channel.     {@see GL33::GL_NONE}
     *    Specifies that the red channel should be
     *    assigned the appropriate value from the currently bound texture.
     *
     *  - {@see GL33::GL_TEXTURE_COMPARE_FUNC}: Specifies the comparison
     *    operator used when {@see GL33::GL_TEXTURE_COMPARE_MODE} is set to
     *    {@see GL33::GL_COMPARE_REF_TO_TEXTURE}. Permissible values are:
     *     Texture Comparison Function
     *    Computed result        {@see GL33::GL_LEQUAL}      result =     1.0
     *    0.0   &amp;it;     r &lt;=  D t       r
     *    &gt;  D t              {@see GL33::GL_GEQUAL}      result =     1.0
     *    0.0   &amp;it;     r &gt;=  D t       r
     *    &lt;  D t              {@see GL33::GL_LESS}      result =     1.0
     *    0.0   &amp;it;     r &lt;  D t       r
     *    &gt;=  D t              {@see GL33::GL_GREATER}      result =     1.0
     *     0.0   &amp;it;     r &gt;  D t       r
     *    &lt;=  D t              {@see GL33::GL_EQUAL}      result =     1.0
     *    0.0   &amp;it;     r =  D t       r ≠
     *    D t              {@see GL33::GL_NOTEQUAL}      result =     1.0   0.0
     *     &amp;it;     r ≠  D t       r =  D t
     *                 {@see GL33::GL_ALWAYS}      result = 1.0        {@see
     *    GL33::GL_NEVER}      result = 0.0
     *    where r is the current interpolated texture coordinate, and   D t   is
     *    the texture value sampled from the
     *    currently bound texture. result is assigned to   R t  .
     *
     * @see http://docs.gl/gl4/glSamplerParameter
     * @since 3.3
     * @param int $sampler
     * @param int $pname
     * @param CData|null $param
     * @return void
     */
    public function samplerParameterfv(int $sampler, int $pname, ?CData $param): void
    {
        $__proc = $this->proc('glSamplerParameterfv',
            'void (*)(GLuint sampler, GLenum pname, const GLfloat *param)');
        $__proc($sampler, $pname, $param);
    }

    /**
     * {@see GL33::samplerParameter} assigns the value or values in $params to the sampler parameter specified as
     * $pname. $sampler specifies the sampler object to be modified, and must be the name of a sampler object
     * previously returned from a call to {@see GL33::genSamplers}. The following symbols are accepted in $pname:
     *
     *  - {@see GL33::GL_TEXTURE_MIN_FILTER}: The texture minifying function is
     *    used whenever the pixel being textured maps to an area greater than
     *    one
     *    texture element. There are six defined minifying functions. Two of
     *    them use the nearest one or nearest four
     *    texture elements to compute the texture value. The other four use
     *    mipmaps.   A mipmap is an ordered set of
     *    arrays representing the same image at progressively lower resolutions.
     *    If the texture has dimensions    2 n
     *    × 2 m   , there are     max &amp;af;  n m   + 1   mipmaps. The first
     *    mipmap is the original texture, with
     *    dimensions    2 n  × 2 m   . Each subsequent mipmap has dimensions
     *    2   k - 1    × 2   l - 1     , where
     *     2 k  × 2 l    are the dimensions of the previous mipmap, until
     *    either    k = 0   or    l = 0  . At that
     *    point, subsequent mipmaps have dimension    1 × 2   l - 1      or
     *    2   k - 1    × 1   until the final
     *    mipmap, which has dimension    1 × 1  . To define the mipmaps, call
     *    {@see GL33::texImage1D},
     *    {@see GL33::texImage2D}, {@see GL33::texImage3D}, {@see
     *    GL33::copyTexImage1D}, or
     *    {@see GL33::copyTexImage2D} with the level argument indicating the
     *    order of the mipmaps. Level 0 is the
     *    original texture; level    max &amp;af;  n m    is the final    1 × 1
     *      mipmap.   $params supplies a function
     *    for minifying the texture as one of the following:   {@see
     *    GL33::GL_NEAREST}   Returns the value of the
     *    texture element that is nearest (in Manhattan distance) to the center
     *    of the pixel being textured.
     *    {@see GL33::GL_LINEAR}   Returns the weighted average of the four
     *    texture elements that are closest to the
     *    center of the pixel being textured. These can include border texture
     *    elements, depending on the values of
     *    {@see GL33::GL_TEXTURE_WRAP_S} and {@see GL33::GL_TEXTURE_WRAP_T}, and
     *    on the exact mapping.
     *    {@see GL33::GL_NEAREST_MIPMAP_NEAREST}   Chooses the mipmap that most
     *    closely matches the size of the pixel
     *    being textured and uses the {@see GL33::GL_NEAREST} criterion (the
     *    texture element nearest to the center of
     *    the pixel) to produce a texture value.     {@see
     *    GL33::GL_LINEAR_MIPMAP_NEAREST}   Chooses the mipmap that
     *    most closely matches the size of the pixel being textured and uses the
     *    {@see GL33::GL_LINEAR} criterion (a
     *    weighted average of the four texture elements that are closest to the
     *    center of the pixel) to produce a
     *    texture value.     {@see GL33::GL_NEAREST_MIPMAP_LINEAR}   Chooses the
     *    two mipmaps that most closely match the
     *    size of the pixel being textured and uses the {@see GL33::GL_NEAREST}
     *    criterion (the texture element nearest
     *    to the center of the pixel) to produce a texture value from each
     *    mipmap. The final texture value is a weighted
     *    average of those two values.     {@see GL33::GL_LINEAR_MIPMAP_LINEAR}
     *     Chooses the two mipmaps that most
     *    closely match the size of the pixel being textured and uses the {@see
     *    GL33::GL_LINEAR} criterion (a weighted
     *    average of the four texture elements that are closest to the center of
     *    the pixel) to produce a texture value
     *    from each mipmap. The final texture value is a weighted average of
     *    those two values.       As more texture
     *    elements are sampled in the minification process, fewer aliasing
     *    artifacts will be apparent. While the
     *    {@see GL33::GL_NEAREST} and {@see GL33::GL_LINEAR} minification
     *    functions can be faster than the other four,
     *    they sample only one or four texture elements to determine the texture
     *    value of the pixel being rendered and
     *    can produce moire patterns or ragged transitions. The initial value of
     *    {@see GL33::GL_TEXTURE_MIN_FILTER} is
     *    {@see GL33::GL_NEAREST_MIPMAP_LINEAR}.
     *
     *  - {@see GL33::GL_TEXTURE_MAG_FILTER}: The texture magnification function
     *    is used when the pixel being textured maps to an area less than or
     *    equal
     *    to one texture element. It sets the texture magnification function to
     *    either {@see GL33::GL_NEAREST} or
     *    {@see GL33::GL_LINEAR} (see below). {@see GL33::GL_NEAREST} is
     *    generally faster than {@see GL33::GL_LINEAR},
     *    but it can produce textured images with sharper edges because the
     *    transition between texture elements is not
     *    as smooth. The initial value of {@see GL33::GL_TEXTURE_MAG_FILTER} is
     *    {@see GL33::GL_LINEAR}.
     *    {@see GL33::GL_NEAREST}   Returns the value of the texture element
     *    that is nearest (in Manhattan distance) to
     *    the center of the pixel being textured.     {@see GL33::GL_LINEAR}
     *    Returns the weighted average of the four
     *    texture elements that are closest to the center of the pixel being
     *    textured. These can include border texture
     *    elements, depending on the values of {@see GL33::GL_TEXTURE_WRAP_S}
     *    and {@see GL33::GL_TEXTURE_WRAP_T}, and on
     *    the exact mapping.
     *
     *  - {@see GL33::GL_TEXTURE_MIN_LOD}: Sets the minimum level-of-detail
     *    parameter. This floating-point value limits the selection of highest
     *    resolution mipmap (lowest mipmap level). The initial value is -1000.
     *
     *  - {@see GL33::GL_TEXTURE_MAX_LOD}: Sets the maximum level-of-detail
     *    parameter. This floating-point value limits the selection of the
     *    lowest
     *    resolution mipmap (highest mipmap level). The initial value is 1000.
     *
     *  - {@see GL33::GL_TEXTURE_WRAP_S}: Sets the wrap parameter for texture
     *    coordinate s to either {@see GL33::GL_CLAMP_TO_EDGE},
     *    {@see GL33::GL_MIRRORED_REPEAT}, {@see GL33::GL_REPEAT}, or {@see
     *    GL33::GL_MIRROR_CLAMP_TO_EDGE}.
     *    {@see GL33::GL_CLAMP_TO_BORDER} causes the s coordinate to be clamped
     *    to the range       -1  2N      1 +    1
     *    2N       , where N is the size of the texture in the direction of
     *    clamping.{@see GL33::GL_CLAMP_TO_EDGE}
     *    causes s coordinates to be clamped to the range       1  2N      1 -
     *     1  2N       , where N is the size of
     *    the texture in the direction of clamping. {@see GL33::GL_REPEAT}
     *    causes the integer part of the s coordinate
     *    to be ignored; the GL uses only the fractional part, thereby creating
     *    a repeating pattern.
     *    {@see GL33::GL_MIRRORED_REPEAT} causes the s coordinate to be set to
     *    the fractional part of the texture
     *    coordinate if the integer part of s is even; if the integer part of s
     *    is odd, then the s texture coordinate is
     *    set to    1 -  frac &amp;af;  s    , where    frac &amp;af;  s
     *    represents the fractional part of s.
     *    {@see GL33::GL_MIRROR_CLAMP_TO_EDGE} causes the s coordinate to be
     *    repeated as for
     *    {@see GL33::GL_MIRRORED_REPEAT} for one repetition of the texture, at
     *    which point the coordinate to be clamped
     *    as in {@see GL33::GL_CLAMP_TO_EDGE}. Initially, {@see
     *    GL33::GL_TEXTURE_WRAP_S} is set to
     *    {@see GL33::GL_REPEAT}.
     *
     *  - {@see GL33::GL_TEXTURE_WRAP_T}: Sets the wrap parameter for texture
     *    coordinate t to either {@see GL33::GL_CLAMP_TO_EDGE},
     *    {@see GL33::GL_MIRRORED_REPEAT}, {@see GL33::GL_REPEAT}, or {@see
     *    GL33::GL_MIRROR_CLAMP_TO_EDGE}. See the
     *    discussion under {@see GL33::GL_TEXTURE_WRAP_S}. Initially, {@see
     *    GL33::GL_TEXTURE_WRAP_T} is set to
     *    {@see GL33::GL_REPEAT}.
     *
     *  - {@see GL33::GL_TEXTURE_WRAP_R}: Sets the wrap parameter for texture
     *    coordinate r to either {@see GL33::GL_CLAMP_TO_EDGE},
     *    {@see GL33::GL_MIRRORED_REPEAT}, {@see GL33::GL_REPEAT}, or {@see
     *    GL33::GL_MIRROR_CLAMP_TO_EDGE}. See the
     *    discussion under {@see GL33::GL_TEXTURE_WRAP_S}. Initially, {@see
     *    GL33::GL_TEXTURE_WRAP_R} is set to
     *    {@see GL33::GL_REPEAT}.
     *
     *  - {@see GL33::GL_TEXTURE_BORDER_COLOR}: The data in $params specifies
     *    four values that define the border values that should be used for
     *    border
     *    texels. If a texel is sampled from the border of the texture, the
     *    values of
     *    {@see GL33::GL_TEXTURE_BORDER_COLOR} are interpreted as an RGBA color
     *    to match the texture's internal format
     *    and substituted for the non-existent texel data. If the texture
     *    contains depth components, the first component
     *    of {@see GL33::GL_TEXTURE_BORDER_COLOR} is interpreted as a depth
     *    value. The initial value is     0.0 , 0.0 ,
     *    0.0 , 0.0    .
     *
     *  - {@see GL33::GL_TEXTURE_COMPARE_MODE}: Specifies the texture comparison
     *    mode for currently bound textures. That is, a texture whose internal
     *    format
     *    is {@see GL33::GL_DEPTH_COMPONENT_*}; see {@see GL33::texImage2D})
     *    Permissible values are:
     *    {@see GL33::GL_COMPARE_REF_TO_TEXTURE}   Specifies that the
     *    interpolated and clamped r texture coordinate
     *    should be compared to the value in the currently bound texture. See
     *    the discussion of
     *    {@see GL33::GL_TEXTURE_COMPARE_FUNC} for details of how the comparison
     *    is evaluated. The result of the
     *    comparison is assigned to the red channel.     {@see GL33::GL_NONE}
     *    Specifies that the red channel should be
     *    assigned the appropriate value from the currently bound texture.
     *
     *  - {@see GL33::GL_TEXTURE_COMPARE_FUNC}: Specifies the comparison
     *    operator used when {@see GL33::GL_TEXTURE_COMPARE_MODE} is set to
     *    {@see GL33::GL_COMPARE_REF_TO_TEXTURE}. Permissible values are:
     *     Texture Comparison Function
     *    Computed result        {@see GL33::GL_LEQUAL}      result =     1.0
     *    0.0   &amp;it;     r &lt;=  D t       r
     *    &gt;  D t              {@see GL33::GL_GEQUAL}      result =     1.0
     *    0.0   &amp;it;     r &gt;=  D t       r
     *    &lt;  D t              {@see GL33::GL_LESS}      result =     1.0
     *    0.0   &amp;it;     r &lt;  D t       r
     *    &gt;=  D t              {@see GL33::GL_GREATER}      result =     1.0
     *     0.0   &amp;it;     r &gt;  D t       r
     *    &lt;=  D t              {@see GL33::GL_EQUAL}      result =     1.0
     *    0.0   &amp;it;     r =  D t       r ≠
     *    D t              {@see GL33::GL_NOTEQUAL}      result =     1.0   0.0
     *     &amp;it;     r ≠  D t       r =  D t
     *                 {@see GL33::GL_ALWAYS}      result = 1.0        {@see
     *    GL33::GL_NEVER}      result = 0.0
     *    where r is the current interpolated texture coordinate, and   D t   is
     *    the texture value sampled from the
     *    currently bound texture. result is assigned to   R t  .
     *
     * @see http://docs.gl/gl4/glSamplerParameter
     * @since 3.3
     * @param int $sampler
     * @param int $pname
     * @param int $param
     * @return void
     */
    public function samplerParameteri(int $sampler, int $pname, int $param): void
    {
        $__proc = $this->proc('glSamplerParameteri', 'void (*)(GLuint sampler, GLenum pname, GLint param)');
        $__proc($sampler, $pname, $param);
    }

    /**
     * {@see GL33::samplerParameter} assigns the value or values in $params to the sampler parameter specified as
     * $pname. $sampler specifies the sampler object to be modified, and must be the name of a sampler object
     * previously returned from a call to {@see GL33::genSamplers}. The following symbols are accepted in $pname:
     *
     *  - {@see GL33::GL_TEXTURE_MIN_FILTER}: The texture minifying function is
     *    used whenever the pixel being textured maps to an area greater than
     *    one
     *    texture element. There are six defined minifying functions. Two of
     *    them use the nearest one or nearest four
     *    texture elements to compute the texture value. The other four use
     *    mipmaps.   A mipmap is an ordered set of
     *    arrays representing the same image at progressively lower resolutions.
     *    If the texture has dimensions    2 n
     *    × 2 m   , there are     max &amp;af;  n m   + 1   mipmaps. The first
     *    mipmap is the original texture, with
     *    dimensions    2 n  × 2 m   . Each subsequent mipmap has dimensions
     *    2   k - 1    × 2   l - 1     , where
     *     2 k  × 2 l    are the dimensions of the previous mipmap, until
     *    either    k = 0   or    l = 0  . At that
     *    point, subsequent mipmaps have dimension    1 × 2   l - 1      or
     *    2   k - 1    × 1   until the final
     *    mipmap, which has dimension    1 × 1  . To define the mipmaps, call
     *    {@see GL33::texImage1D},
     *    {@see GL33::texImage2D}, {@see GL33::texImage3D}, {@see
     *    GL33::copyTexImage1D}, or
     *    {@see GL33::copyTexImage2D} with the level argument indicating the
     *    order of the mipmaps. Level 0 is the
     *    original texture; level    max &amp;af;  n m    is the final    1 × 1
     *      mipmap.   $params supplies a function
     *    for minifying the texture as one of the following:   {@see
     *    GL33::GL_NEAREST}   Returns the value of the
     *    texture element that is nearest (in Manhattan distance) to the center
     *    of the pixel being textured.
     *    {@see GL33::GL_LINEAR}   Returns the weighted average of the four
     *    texture elements that are closest to the
     *    center of the pixel being textured. These can include border texture
     *    elements, depending on the values of
     *    {@see GL33::GL_TEXTURE_WRAP_S} and {@see GL33::GL_TEXTURE_WRAP_T}, and
     *    on the exact mapping.
     *    {@see GL33::GL_NEAREST_MIPMAP_NEAREST}   Chooses the mipmap that most
     *    closely matches the size of the pixel
     *    being textured and uses the {@see GL33::GL_NEAREST} criterion (the
     *    texture element nearest to the center of
     *    the pixel) to produce a texture value.     {@see
     *    GL33::GL_LINEAR_MIPMAP_NEAREST}   Chooses the mipmap that
     *    most closely matches the size of the pixel being textured and uses the
     *    {@see GL33::GL_LINEAR} criterion (a
     *    weighted average of the four texture elements that are closest to the
     *    center of the pixel) to produce a
     *    texture value.     {@see GL33::GL_NEAREST_MIPMAP_LINEAR}   Chooses the
     *    two mipmaps that most closely match the
     *    size of the pixel being textured and uses the {@see GL33::GL_NEAREST}
     *    criterion (the texture element nearest
     *    to the center of the pixel) to produce a texture value from each
     *    mipmap. The final texture value is a weighted
     *    average of those two values.     {@see GL33::GL_LINEAR_MIPMAP_LINEAR}
     *     Chooses the two mipmaps that most
     *    closely match the size of the pixel being textured and uses the {@see
     *    GL33::GL_LINEAR} criterion (a weighted
     *    average of the four texture elements that are closest to the center of
     *    the pixel) to produce a texture value
     *    from each mipmap. The final texture value is a weighted average of
     *    those two values.       As more texture
     *    elements are sampled in the minification process, fewer aliasing
     *    artifacts will be apparent. While the
     *    {@see GL33::GL_NEAREST} and {@see GL33::GL_LINEAR} minification
     *    functions can be faster than the other four,
     *    they sample only one or four texture elements to determine the texture
     *    value of the pixel being rendered and
     *    can produce moire patterns or ragged transitions. The initial value of
     *    {@see GL33::GL_TEXTURE_MIN_FILTER} is
     *    {@see GL33::GL_NEAREST_MIPMAP_LINEAR}.
     *
     *  - {@see GL33::GL_TEXTURE_MAG_FILTER}: The texture magnification function
     *    is used when the pixel being textured maps to an area less than or
     *    equal
     *    to one texture element. It sets the texture magnification function to
     *    either {@see GL33::GL_NEAREST} or
     *    {@see GL33::GL_LINEAR} (see below). {@see GL33::GL_NEAREST} is
     *    generally faster than {@see GL33::GL_LINEAR},
     *    but it can produce textured images with sharper edges because the
     *    transition between texture elements is not
     *    as smooth. The initial value of {@see GL33::GL_TEXTURE_MAG_FILTER} is
     *    {@see GL33::GL_LINEAR}.
     *    {@see GL33::GL_NEAREST}   Returns the value of the texture element
     *    that is nearest (in Manhattan distance) to
     *    the center of the pixel being textured.     {@see GL33::GL_LINEAR}
     *    Returns the weighted average of the four
     *    texture elements that are closest to the center of the pixel being
     *    textured. These can include border texture
     *    elements, depending on the values of {@see GL33::GL_TEXTURE_WRAP_S}
     *    and {@see GL33::GL_TEXTURE_WRAP_T}, and on
     *    the exact mapping.
     *
     *  - {@see GL33::GL_TEXTURE_MIN_LOD}: Sets the minimum level-of-detail
     *    parameter. This floating-point value limits the selection of highest
     *    resolution mipmap (lowest mipmap level). The initial value is -1000.
     *
     *  - {@see GL33::GL_TEXTURE_MAX_LOD}: Sets the maximum level-of-detail
     *    parameter. This floating-point value limits the selection of the
     *    lowest
     *    resolution mipmap (highest mipmap level). The initial value is 1000.
     *
     *  - {@see GL33::GL_TEXTURE_WRAP_S}: Sets the wrap parameter for texture
     *    coordinate s to either {@see GL33::GL_CLAMP_TO_EDGE},
     *    {@see GL33::GL_MIRRORED_REPEAT}, {@see GL33::GL_REPEAT}, or {@see
     *    GL33::GL_MIRROR_CLAMP_TO_EDGE}.
     *    {@see GL33::GL_CLAMP_TO_BORDER} causes the s coordinate to be clamped
     *    to the range       -1  2N      1 +    1
     *    2N       , where N is the size of the texture in the direction of
     *    clamping.{@see GL33::GL_CLAMP_TO_EDGE}
     *    causes s coordinates to be clamped to the range       1  2N      1 -
     *     1  2N       , where N is the size of
     *    the texture in the direction of clamping. {@see GL33::GL_REPEAT}
     *    causes the integer part of the s coordinate
     *    to be ignored; the GL uses only the fractional part, thereby creating
     *    a repeating pattern.
     *    {@see GL33::GL_MIRRORED_REPEAT} causes the s coordinate to be set to
     *    the fractional part of the texture
     *    coordinate if the integer part of s is even; if the integer part of s
     *    is odd, then the s texture coordinate is
     *    set to    1 -  frac &amp;af;  s    , where    frac &amp;af;  s
     *    represents the fractional part of s.
     *    {@see GL33::GL_MIRROR_CLAMP_TO_EDGE} causes the s coordinate to be
     *    repeated as for
     *    {@see GL33::GL_MIRRORED_REPEAT} for one repetition of the texture, at
     *    which point the coordinate to be clamped
     *    as in {@see GL33::GL_CLAMP_TO_EDGE}. Initially, {@see
     *    GL33::GL_TEXTURE_WRAP_S} is set to
     *    {@see GL33::GL_REPEAT}.
     *
     *  - {@see GL33::GL_TEXTURE_WRAP_T}: Sets the wrap parameter for texture
     *    coordinate t to either {@see GL33::GL_CLAMP_TO_EDGE},
     *    {@see GL33::GL_MIRRORED_REPEAT}, {@see GL33::GL_REPEAT}, or {@see
     *    GL33::GL_MIRROR_CLAMP_TO_EDGE}. See the
     *    discussion under {@see GL33::GL_TEXTURE_WRAP_S}. Initially, {@see
     *    GL33::GL_TEXTURE_WRAP_T} is set to
     *    {@see GL33::GL_REPEAT}.
     *
     *  - {@see GL33::GL_TEXTURE_WRAP_R}: Sets the wrap parameter for texture
     *    coordinate r to either {@see GL33::GL_CLAMP_TO_EDGE},
     *    {@see GL33::GL_MIRRORED_REPEAT}, {@see GL33::GL_REPEAT}, or {@see
     *    GL33::GL_MIRROR_CLAMP_TO_EDGE}. See the
     *    discussion under {@see GL33::GL_TEXTURE_WRAP_S}. Initially, {@see
     *    GL33::GL_TEXTURE_WRAP_R} is set to
     *    {@see GL33::GL_REPEAT}.
     *
     *  - {@see GL33::GL_TEXTURE_BORDER_COLOR}: The data in $params specifies
     *    four values that define the border values that should be used for
     *    border
     *    texels. If a texel is sampled from the border of the texture, the
     *    values of
     *    {@see GL33::GL_TEXTURE_BORDER_COLOR} are interpreted as an RGBA color
     *    to match the texture's internal format
     *    and substituted for the non-existent texel data. If the texture
     *    contains depth components, the first component
     *    of {@see GL33::GL_TEXTURE_BORDER_COLOR} is interpreted as a depth
     *    value. The initial value is     0.0 , 0.0 ,
     *    0.0 , 0.0    .
     *
     *  - {@see GL33::GL_TEXTURE_COMPARE_MODE}: Specifies the texture comparison
     *    mode for currently bound textures. That is, a texture whose internal
     *    format
     *    is {@see GL33::GL_DEPTH_COMPONENT_*}; see {@see GL33::texImage2D})
     *    Permissible values are:
     *    {@see GL33::GL_COMPARE_REF_TO_TEXTURE}   Specifies that the
     *    interpolated and clamped r texture coordinate
     *    should be compared to the value in the currently bound texture. See
     *    the discussion of
     *    {@see GL33::GL_TEXTURE_COMPARE_FUNC} for details of how the comparison
     *    is evaluated. The result of the
     *    comparison is assigned to the red channel.     {@see GL33::GL_NONE}
     *    Specifies that the red channel should be
     *    assigned the appropriate value from the currently bound texture.
     *
     *  - {@see GL33::GL_TEXTURE_COMPARE_FUNC}: Specifies the comparison
     *    operator used when {@see GL33::GL_TEXTURE_COMPARE_MODE} is set to
     *    {@see GL33::GL_COMPARE_REF_TO_TEXTURE}. Permissible values are:
     *     Texture Comparison Function
     *    Computed result        {@see GL33::GL_LEQUAL}      result =     1.0
     *    0.0   &amp;it;     r &lt;=  D t       r
     *    &gt;  D t              {@see GL33::GL_GEQUAL}      result =     1.0
     *    0.0   &amp;it;     r &gt;=  D t       r
     *    &lt;  D t              {@see GL33::GL_LESS}      result =     1.0
     *    0.0   &amp;it;     r &lt;  D t       r
     *    &gt;=  D t              {@see GL33::GL_GREATER}      result =     1.0
     *     0.0   &amp;it;     r &gt;  D t       r
     *    &lt;=  D t              {@see GL33::GL_EQUAL}      result =     1.0
     *    0.0   &amp;it;     r =  D t       r ≠
     *    D t              {@see GL33::GL_NOTEQUAL}      result =     1.0   0.0
     *     &amp;it;     r ≠  D t       r =  D t
     *                 {@see GL33::GL_ALWAYS}      result = 1.0        {@see
     *    GL33::GL_NEVER}      result = 0.0
     *    where r is the current interpolated texture coordinate, and   D t   is
     *    the texture value sampled from the
     *    currently bound texture. result is assigned to   R t  .
     *
     * @see http://docs.gl/gl4/glSamplerParameter
     * @since 3.3
     * @param int $sampler
     * @param int $pname
     * @param CData|null $param
     * @return void
     */
    public function samplerParameteriv(int $sampler, int $pname, ?CData $param): void
    {
        $__proc = $this->proc('glSamplerParameteriv',
            'void (*)(GLuint sampler, GLenum pname, const GLint *param)');
        $__proc($sampler, $pname, $param);
    }

    /**
     * {@see GL33::vertexAttribDivisor} modifies the rate at which generic vertex attributes advance when rendering
     * multiple instances of primitives in a single draw call. If $divisor is zero, the attribute at slot $index
     * advances once per vertex. If $divisor is non-zero, the attribute advances once per $divisor instances of the
     * set(s) of vertices being rendered. An attribute is referred to as instanced if its
     * {@see GL33::GL_VERTEX_ATTRIB_ARRAY_DIVISOR} value is non-zero.
     *
     * $index must be less than the value of {@see GL33::GL_MAX_VERTEX_ATTRIBS}.
     *
     * @see http://docs.gl/gl4/glVertexAttribDivisor
     * @since 3.3
     * @param int $index
     * @param int $divisor
     * @return void
     */
    public function vertexAttribDivisor(int $index, int $divisor): void
    {
        $__proc = $this->proc('glVertexAttribDivisor', 'void (*)(GLuint index, GLuint divisor)');
        $__proc($index, $divisor);
    }

    /**
     * The {@see GL33::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL33::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL33::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL33::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL33::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 3.3
     * @param int $index
     * @param int $type
     * @param int $normalized
     * @param int $value
     * @return void
     */
    public function vertexAttribP1ui(int $index, int $type, int $normalized, int $value): void
    {
        $__proc = $this->proc('glVertexAttribP1ui',
            'void (*)(GLuint index, GLenum type, GLboolean normalized, GLuint value)');
        $__proc($index, $type, $normalized, $value);
    }

    /**
     * The {@see GL33::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL33::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL33::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL33::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL33::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 3.3
     * @param int $index
     * @param int $type
     * @param int $normalized
     * @param CData|null $value
     * @return void
     */
    public function vertexAttribP1uiv(int $index, int $type, int $normalized, ?CData $value): void
    {
        $__proc = $this->proc('glVertexAttribP1uiv',
            'void (*)(GLuint index, GLenum type, GLboolean normalized, const GLuint *value)');
        $__proc($index, $type, $normalized, $value);
    }

    /**
     * The {@see GL33::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL33::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL33::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL33::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL33::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 3.3
     * @param int $index
     * @param int $type
     * @param int $normalized
     * @param int $value
     * @return void
     */
    public function vertexAttribP2ui(int $index, int $type, int $normalized, int $value): void
    {
        $__proc = $this->proc('glVertexAttribP2ui',
            'void (*)(GLuint index, GLenum type, GLboolean normalized, GLuint value)');
        $__proc($index, $type, $normalized, $value);
    }

    /**
     * The {@see GL33::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL33::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL33::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL33::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL33::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 3.3
     * @param int $index
     * @param int $type
     * @param int $normalized
     * @param CData|null $value
     * @return void
     */
    public function vertexAttribP2uiv(int $index, int $type, int $normalized, ?CData $value): void
    {
        $__proc = $this->proc('glVertexAttribP2uiv',
            'void (*)(GLuint index, GLenum type, GLboolean normalized, const GLuint *value)');
        $__proc($index, $type, $normalized, $value);
    }

    /**
     * The {@see GL33::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL33::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL33::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL33::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL33::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 3.3
     * @param int $index
     * @param int $type
     * @param int $normalized
     * @param int $value
     * @return void
     */
    public function vertexAttribP3ui(int $index, int $type, int $normalized, int $value): void
    {
        $__proc = $this->proc('glVertexAttribP3ui',
            'void (*)(GLuint index, GLenum type, GLboolean normalized, GLuint value)');
        $__proc($index, $type, $normalized, $value);
    }

    /**
     * The {@see GL33::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL33::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL33::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL33::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL33::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 3.3
     * @param int $index
     * @param int $type
     * @param int $normalized
     * @param CData|null $value
     * @return void
     */
    public function vertexAttribP3uiv(int $index, int $type, int $normalized, ?CData $value): void
    {
        $__proc = $this->proc('glVertexAttribP3uiv',
            'void (*)(GLuint index, GLenum type, GLboolean normalized, const GLuint *value)');
        $__proc($index, $type, $normalized, $value);
    }

    /**
     * The {@see GL33::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL33::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL33::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL33::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL33::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 3.3
     * @param int $index
     * @param int $type
     * @param int $normalized
     * @param int $value
     * @return void
     */
    public function vertexAttribP4ui(int $index, int $type, int $normalized, int $value): void
    {
        $__proc = $this->proc('glVertexAttribP4ui',
            'void (*)(GLuint index, GLenum type, GLboolean normalized, GLuint value)');
        $__proc($index, $type, $normalized, $value);
    }

    /**
     * The {@see GL33::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL33::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL33::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL33::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL33::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 3.3
     * @param int $index
     * @param int $type
     * @param int $normalized
     * @param CData|null $value
     * @return void
     */
    public function vertexAttribP4uiv(int $index, int $type, int $normalized, ?CData $value): void
    {
        $__proc = $this->proc('glVertexAttribP4uiv',
            'void (*)(GLuint index, GLenum type, GLboolean normalized, const GLuint *value)');
        $__proc($index, $type, $normalized, $value);
    }
}
