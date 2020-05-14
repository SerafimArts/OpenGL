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
 * The OpenGL functionality up to version 2.0. Includes the deprecated symbols of the Compatibility Profile.
 *
 * Extensions promoted to core in this release:
 *
 * - ARB_shader_objects @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_shader_objects.txt
 * - ARB_vertex_shader @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_vertex_shader.txt
 * - ARB_fragment_shader @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_fragment_shader.txt
 * - ARB_shading_language_100 @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_shading_language_100.txt
 * - ARB_draw_buffers @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_draw_buffers.txt
 * - ARB_texture_non_power_of_two @see
 * https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_texture_non_power_of_two.txt
 * - ARB_point_sprite @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_point_sprite.txt
 * - ATI_separate_stencil @see https://www.khronos.org/registry/OpenGL/extensions/ATI/ATI_separate_stencil.txt
 * - EXT_stencil_two_side @see https://www.khronos.org/registry/OpenGL/extensions/EXT/EXT_stencil_two_side.txt
 *
 * @version 2.0
 */
class GL20 extends GL15
{

    /**
     * Accepted by the $name parameter of GetString.
     *
     * @since 2.0
     * @var int
     */
    public const GL_SHADING_LANGUAGE_VERSION = 0x8B8C;

    /**
     * Accepted by the $pname parameter of GetInteger.
     *
     * @since 2.0
     * @var int
     */
    public const GL_CURRENT_PROGRAM = 0x8B8D;

    /**
     * Accepted by the $pname parameter of GetShaderiv.
     *
     * @since 2.0
     * @var int
     */
    public const
        GL_SHADER_TYPE = 0x8B4F,
        GL_DELETE_STATUS = 0x8B80,
        GL_COMPILE_STATUS = 0x8B81,
        GL_LINK_STATUS = 0x8B82,
        GL_VALIDATE_STATUS = 0x8B83,
        GL_INFO_LOG_LENGTH = 0x8B84,
        GL_ATTACHED_SHADERS = 0x8B85,
        GL_ACTIVE_UNIFORMS = 0x8B86,
        GL_ACTIVE_UNIFORM_MAX_LENGTH = 0x8B87,
        GL_ACTIVE_ATTRIBUTES = 0x8B89,
        GL_ACTIVE_ATTRIBUTE_MAX_LENGTH = 0x8B8A,
        GL_SHADER_SOURCE_LENGTH = 0x8B88;

    /**
     * Returned by the $type parameter of GetActiveUniform.
     *
     * @since 2.0
     * @var int
     */
    public const
        GL_FLOAT_VEC2 = 0x8B50,
        GL_FLOAT_VEC3 = 0x8B51,
        GL_FLOAT_VEC4 = 0x8B52,
        GL_INT_VEC2 = 0x8B53,
        GL_INT_VEC3 = 0x8B54,
        GL_INT_VEC4 = 0x8B55,
        GL_BOOL = 0x8B56,
        GL_BOOL_VEC2 = 0x8B57,
        GL_BOOL_VEC3 = 0x8B58,
        GL_BOOL_VEC4 = 0x8B59,
        GL_FLOAT_MAT2 = 0x8B5A,
        GL_FLOAT_MAT3 = 0x8B5B,
        GL_FLOAT_MAT4 = 0x8B5C,
        GL_SAMPLER_1D = 0x8B5D,
        GL_SAMPLER_2D = 0x8B5E,
        GL_SAMPLER_3D = 0x8B5F,
        GL_SAMPLER_CUBE = 0x8B60,
        GL_SAMPLER_1D_SHADOW = 0x8B61,
        GL_SAMPLER_2D_SHADOW = 0x8B62;

    /**
     * Accepted by the $type argument of CreateShader and returned by the $params parameter of GetShaderiv.
     *
     * @since 2.0
     * @var int
     */
    public const GL_VERTEX_SHADER = 0x8B31;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetIntegerv, GetFloatv, and GetDoublev.
     *
     * @since 2.0
     * @var int
     */
    public const
        GL_MAX_VERTEX_UNIFORM_COMPONENTS = 0x8B4A,
        GL_MAX_VARYING_FLOATS = 0x8B4B,
        GL_MAX_VERTEX_ATTRIBS = 0x8869,
        GL_MAX_TEXTURE_IMAGE_UNITS = 0x8872,
        GL_MAX_VERTEX_TEXTURE_IMAGE_UNITS = 0x8B4C,
        GL_MAX_COMBINED_TEXTURE_IMAGE_UNITS = 0x8B4D,
        GL_MAX_TEXTURE_COORDS = 0x8871;

    /**
     * Accepted by the $cap parameter of Disable, Enable, and IsEnabled, and by the $pname parameter of GetBooleanv,
     * GetIntegerv, GetFloatv, and GetDoublev.
     *
     * @since 2.0
     * @var int
     */
    public const
        GL_VERTEX_PROGRAM_POINT_SIZE = 0x8642,
        GL_VERTEX_PROGRAM_TWO_SIDE = 0x8643;

    /**
     * Accepted by the $pname parameter of GetVertexAttrib{dfi}v.
     *
     * @since 2.0
     * @var int
     */
    public const
        GL_VERTEX_ATTRIB_ARRAY_ENABLED = 0x8622,
        GL_VERTEX_ATTRIB_ARRAY_SIZE = 0x8623,
        GL_VERTEX_ATTRIB_ARRAY_STRIDE = 0x8624,
        GL_VERTEX_ATTRIB_ARRAY_TYPE = 0x8625,
        GL_VERTEX_ATTRIB_ARRAY_NORMALIZED = 0x886A,
        GL_CURRENT_VERTEX_ATTRIB = 0x8626;

    /**
     * Accepted by the $pname parameter of GetVertexAttribPointerv.
     *
     * @since 2.0
     * @var int
     */
    public const GL_VERTEX_ATTRIB_ARRAY_POINTER = 0x8645;

    /**
     * Accepted by the $type argument of CreateShader and returned by the $params parameter of GetShaderiv.
     *
     * @since 2.0
     * @var int
     */
    public const GL_FRAGMENT_SHADER = 0x8B30;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetIntegerv, GetFloatv, and GetDoublev.
     *
     * @since 2.0
     * @var int
     */
    public const GL_MAX_FRAGMENT_UNIFORM_COMPONENTS = 0x8B49;

    /**
     * Accepted by the $target parameter of Hint and the $pname parameter of GetBooleanv, GetIntegerv, GetFloatv, and
     * GetDoublev.
     *
     * @since 2.0
     * @var int
     */
    public const GL_FRAGMENT_SHADER_DERIVATIVE_HINT = 0x8B8B;

    /**
     * Accepted by the $pname parameters of GetIntegerv, GetFloatv, and GetDoublev.
     *
     * @since 2.0
     * @var int
     */
    public const
        GL_MAX_DRAW_BUFFERS = 0x8824,
        GL_DRAW_BUFFER0 = 0x8825,
        GL_DRAW_BUFFER1 = 0x8826,
        GL_DRAW_BUFFER2 = 0x8827,
        GL_DRAW_BUFFER3 = 0x8828,
        GL_DRAW_BUFFER4 = 0x8829,
        GL_DRAW_BUFFER5 = 0x882A,
        GL_DRAW_BUFFER6 = 0x882B,
        GL_DRAW_BUFFER7 = 0x882C,
        GL_DRAW_BUFFER8 = 0x882D,
        GL_DRAW_BUFFER9 = 0x882E,
        GL_DRAW_BUFFER10 = 0x882F,
        GL_DRAW_BUFFER11 = 0x8830,
        GL_DRAW_BUFFER12 = 0x8831,
        GL_DRAW_BUFFER13 = 0x8832,
        GL_DRAW_BUFFER14 = 0x8833,
        GL_DRAW_BUFFER15 = 0x8834;

    /**
     * Accepted by the $cap parameter of Enable, Disable, and IsEnabled, by the $pname parameter of GetBooleanv,
     * GetIntegerv, GetFloatv, and GetDoublev, and by the $target parameter of TexEnvi, TexEnviv, TexEnvf, TexEnvfv,
     * GetTexEnviv, and GetTexEnvfv.
     *
     * @since 2.0
     * @var int
     */
    public const GL_POINT_SPRITE = 0x8861;

    /**
     * When the $target parameter of TexEnvf, TexEnvfv, TexEnvi, TexEnviv, GetTexEnvfv, or GetTexEnviv is POINT_SPRITE,
     * then the value of
     * $pname may be.
     *
     * @since 2.0
     * @var int
     */
    public const GL_COORD_REPLACE = 0x8862;

    /**
     * Accepted by the $pname parameter of PointParameter{if}v.
     *
     * @since 2.0
     * @var int
     */
    public const GL_POINT_SPRITE_COORD_ORIGIN = 0x8CA0;

    /**
     * Accepted by the $param parameter of PointParameter{if}v.
     *
     * @since 2.0
     * @var int
     */
    public const
        GL_LOWER_LEFT = 0x8CA1,
        GL_UPPER_LEFT = 0x8CA2;

    /**
     * Accepted by the $pname parameter of GetBooleanv, GetIntegerv, GetFloatv, and GetDoublev.
     *
     * @since 2.0
     * @var int
     */
    public const
        GL_BLEND_EQUATION_RGB = 0x8009,
        GL_BLEND_EQUATION_ALPHA = 0x883D;

    /**
     * Accepted by the $pname parameter of GetIntegerv.
     *
     * @since 2.0
     * @var int
     */
    public const
        GL_STENCIL_BACK_FUNC = 0x8800,
        GL_STENCIL_BACK_FAIL = 0x8801,
        GL_STENCIL_BACK_PASS_DEPTH_FAIL = 0x8802,
        GL_STENCIL_BACK_PASS_DEPTH_PASS = 0x8803,
        GL_STENCIL_BACK_REF = 0x8CA3,
        GL_STENCIL_BACK_VALUE_MASK = 0x8CA4,
        GL_STENCIL_BACK_WRITEMASK = 0x8CA5;

    /**
     * In order to create a complete shader program, there must be a way to specify the list of things that will be
     * linked together. Program objects provide this mechanism. Shaders that are to be linked together in a program
     * object must first be attached to that program object. {@see GL20::attachShader} attaches the shader object
     * specified by $shader to the program object specified by $program. This indicates that $shader will be included
     * in link operations that will be performed on $program.
     *
     * All operations that can be performed on a shader object are valid whether or not the shader object is attached
     * to a program object. It is permissible to attach a shader object to a program object before source code has
     * been loaded into the shader object or before the shader object has been compiled. It is permissible to attach
     * multiple shader objects of the same type because each may contain a portion of the complete shader. It is also
     * permissible to attach a shader object to more than one program object. If a shader object is deleted while it
     * is attached to a program object, it will be flagged for deletion, and deletion will not occur until
     * {@see GL20::detachShader} is called to detach it from all program objects to which it is attached.
     *
     * @see http://docs.gl/gl2/glAttachShader
     * @see http://docs.gl/gl4/glAttachShader
     * @since 2.0
     * @param int $program
     * @param int $shader
     * @return void
     */
    public function attachShader(int $program, int $shader): void
    {
        $__proc = $this->proc('glAttachShader', 'void (*)(GLuint program, GLuint shader)');
        $__proc($program, $shader);
    }

    /**
     * {@see GL20::bindAttribLocation} is used to associate a user-defined attribute variable in the program object
     * specified by $program with a generic vertex attribute index. The name of the user-defined attribute variable
     * is passed as a null terminated string in $name. The generic vertex attribute index to be bound to this
     * variable is specified by $index. When $program is made part of current state, values provided via the generic
     * vertex attribute $index will modify the value of the user-defined attribute variable specified by $name.
     *
     * If $name refers to a matrix attribute variable, $index refers to the first column of the matrix. Other matrix
     * columns are then automatically bound to locations $index+1 for a matrix of type {@see GL46::mat2}; $index+1
     * and $index+2 for a matrix of type {@see GL46::mat3}; and $index+1, $index+2, and $index+3 for a matrix of type
     * {@see GL46::mat4}.
     *
     * This command makes it possible for vertex shaders to use descriptive names for attribute variables rather than
     * generic variables that are numbered from zero to the value of {@see GL20::GL_MAX_VERTEX_ATTRIBS} minus one.
     * The values sent to each generic attribute index are part of current state. If a different program object is
     * made current by calling {@see GL20::useProgram}, the generic vertex attributes are tracked in such a way
     * that the same values will be observed by attributes in the new program object that are also bound to $index.
     *
     * Attribute variable name-to-generic attribute index bindings for a program object can be explicitly assigned at
     * any time by calling {@see GL20::bindAttribLocation}. Attribute bindings do not go into effect until
     * {@see GL20::linkProgram} is called. After a program object has been linked successfully, the index values
     * for generic attributes remain fixed (and their values can be queried) until the next link command occurs.
     *
     * Any attribute binding that occurs after the program object has been linked will not take effect until the next
     * time the program object is linked.
     *
     * @see http://docs.gl/gl2/glBindAttribLocation
     * @see http://docs.gl/gl4/glBindAttribLocation
     * @since 2.0
     * @param int $program
     * @param int $index
     * @param CData|null $name
     * @return void
     */
    public function bindAttribLocation(int $program, int $index, ?CData $name): void
    {
        $__proc = $this->proc('glBindAttribLocation',
            'void (*)(GLuint program, GLuint index, const GLchar *name)');
        $__proc($program, $index, $name);
    }

    /**
     * The blend equations determines how a new pixel (the ''source'' color) is combined with a pixel already in the
     * framebuffer (the ''destination'' color). These functions specify one blend equation for the RGB-color
     * components and one blend equation for the alpha component. {@see GL20::blendEquationSeparatei} specifies the
     * blend equations for a single draw buffer whereas {@see GL20::blendEquationSeparate} sets the blend equations
     * for all draw buffers.
     *
     * The blend equations use the source and destination blend factors specified by either {@see GL20::blendFunc}
     * or {@see GL20::blendFuncSeparate}. See {@see GL20::blendFunc} or {@see GL20::blendFuncSeparate} for a
     * description of the various blend factors.
     *
     * In the equations that follow, source and destination color components are referred to as    R s  G s  B s  A s
     *    and    R d  G d  B d  A d   , respectively. The result color is referred to as    R r  G r  B r  A r   .
     * The source and destination blend factors are denoted    s R  s G  s B  s A    and    d R  d G  d B  d A   ,
     * respectively. For these equations all color components are understood to have values in the range    0 1  .
     *       Mode     RGB Components     Alpha Component        {@see GL20::GL_FUNC_ADD}      Rr =  R s  &amp;it; s R
     *  + R d  &amp;it; d R        Gr =  G s  &amp;it; s G  + G d  &amp;it; d G        Br =  B s  &amp;it; s B  + B d
     *  &amp;it; d B          Ar =  A s  &amp;it; s A  + A d  &amp;it; d A         {@see GL20::GL_FUNC_SUBTRACT}
     * Rr =  R s  &amp;it; s R  - R d  &amp;it; d R        Gr =  G s  &amp;it; s G  - G d  &amp;it; d G        Br =
     * B s  &amp;it; s B  - B d  &amp;it; d B          Ar =  A s  &amp;it; s A  - A d  &amp;it; d A
     * {@see GL20::GL_FUNC_REVERSE_SUBTRACT}      Rr =  R d  &amp;it; d R  - R s  &amp;it; s R        Gr =  G d
     * &amp;it; d G  - G s  &amp;it; s G        Br =  B d  &amp;it; d B  - B s  &amp;it; s B          Ar =  A d
     * &amp;it; d A  - A s  &amp;it; s A         {@see GL20::GL_MIN}      Rr =  min &amp;af;   R s    R d          Gr
     * =  min &amp;af;   G s    G d          Br =  min &amp;af;   B s    B d            Ar =  min &amp;af;   A s    A
     * d           {@see GL20::GL_MAX}      Rr =  max &amp;af;   R s    R d          Gr =  max &amp;af;   G s    G d
     *         Br =  max &amp;af;   B s    B d            Ar =  max &amp;af;   A s    A d
     *
     * The results of these equations are clamped to the range    0 1  .
     *
     * The {@see GL20::GL_MIN} and {@see GL20::GL_MAX} equations are useful for applications that analyze image data
     * (image thresholding against a constant color, for example). The {@see GL20::GL_FUNC_ADD} equation is useful
     * for antialiasing and transparency, among other things.
     *
     * Initially, both the RGB blend equation and the alpha blend equation are set to {@see GL20::GL_FUNC_ADD}.
     *
     * @see http://docs.gl/gl2/glBlendEquationSeparate
     * @see http://docs.gl/gl4/glBlendEquationSeparate
     * @since 2.0
     * @param int $modeRGB
     * @param int $modeAlpha
     * @return void
     */
    public function blendEquationSeparate(int $modeRGB, int $modeAlpha): void
    {
        $__proc = $this->proc('glBlendEquationSeparate', 'void (*)(GLenum modeRGB, GLenum modeAlpha)');
        $__proc($modeRGB, $modeAlpha);
    }

    /**
     * {@see GL20::compileShader} compiles the source code strings that have been stored in the shader object
     * specified by $shader.
     *
     * The compilation status will be stored as part of the shader object's state. This value will be set to
     * {@see GL20::GL_TRUE} if the shader was compiled without errors and is ready for use, and {@see GL20::GL_FALSE}
     * otherwise. It can be queried by calling {@see GL20::getShader} with arguments $shader and
     * {@see GL20::GL_COMPILE_STATUS}.
     *
     * Compilation of a shader can fail for a number of reasons as specified by the OpenGL Shading Language
     * Specification. Whether or not the compilation was successful, information about the compilation can be
     * obtained from the shader object's information log by calling {@see GL20::getShaderInfoLog}.
     *
     * @see http://docs.gl/gl2/glCompileShader
     * @see http://docs.gl/gl4/glCompileShader
     * @since 2.0
     * @param int $shader
     * @return void
     */
    public function compileShader(int $shader): void
    {
        $__proc = $this->proc('glCompileShader', 'void (*)(GLuint shader)');
        $__proc($shader);
    }

    /**
     * {@see GL20::createProgram} creates an empty program object and returns a non-zero value by which it can be
     * referenced. A program object is an object to which shader objects can be attached. This provides a mechanism
     * to specify the shader objects that will be linked to create a program. It also provides a means for checking
     * the compatibility of the shaders that will be used to create a program (for instance, checking the
     * compatibility between a vertex shader and a fragment shader). When no longer needed as part of a program
     * object, shader objects can be detached.
     *
     * One or more executables are created in a program object by successfully attaching shader objects to it with
     * {@see GL20::attachShader}, successfully compiling the shader objects with {@see GL20::compileShader}, and
     * successfully linking the program object with {@see GL20::linkProgram}. These executables are made part of
     * current state when {@see GL20::useProgram} is called. Program objects can be deleted by calling
     * {@see GL20::deleteProgram}. The memory associated with the program object will be deleted when it is no
     * longer part of current rendering state for any context.
     *
     * @see http://docs.gl/gl2/glCreateProgram
     * @see http://docs.gl/gl4/glCreateProgram
     * @since 2.0
     * @return int
     */
    public function createProgram(): int
    {
        $__proc = $this->proc('glCreateProgram', 'GLuint (*)()');

        return $__proc();
    }

    /**
     * {@see GL20::createShader} creates an empty shader object and returns a non-zero value by which it can be
     * referenced. A shader object is used to maintain the source code strings that define a shader. $shaderType
     * indicates the type of shader to be created. Five types of shader are supported. A shader of type
     * {@see GL20::GL_COMPUTE_SHADER} is a shader that is intended to run on the programmable compute processor. A
     * shader of type {@see GL20::GL_VERTEX_SHADER} is a shader that is intended to run on the programmable vertex
     * processor. A shader of type {@see GL20::GL_TESS_CONTROL_SHADER} is a shader that is intended to run on the
     * programmable tessellation processor in the control stage. A shader of type
     * {@see GL20::GL_TESS_EVALUATION_SHADER} is a shader that is intended to run on the programmable tessellation
     * processor in the evaluation stage. A shader of type {@see GL20::GL_GEOMETRY_SHADER} is a shader that is
     * intended to run on the programmable geometry processor. A shader of type {@see GL20::GL_FRAGMENT_SHADER} is a
     * shader that is intended to run on the programmable fragment processor.
     *
     * When created, a shader object's {@see GL20::GL_SHADER_TYPE} parameter is set to either
     * {@see GL20::GL_COMPUTE_SHADER}, {@see GL20::GL_VERTEX_SHADER}, {@see GL20::GL_TESS_CONTROL_SHADER},
     * {@see GL20::GL_TESS_EVALUATION_SHADER}, {@see GL20::GL_GEOMETRY_SHADER} or {@see GL20::GL_FRAGMENT_SHADER},
     * depending on the value of $shaderType.
     *
     * @see http://docs.gl/gl2/glCreateShader
     * @see http://docs.gl/gl4/glCreateShader
     * @since 2.0
     * @param int $type
     * @return int
     */
    public function createShader(int $type): int
    {
        $__proc = $this->proc('glCreateShader', 'GLuint (*)(GLenum type)');

        return $__proc($type);
    }

    /**
     * {@see GL20::deleteProgram} frees the memory and invalidates the name associated with the program object
     * specified by $program. This command effectively undoes the effects of a call to {@see GL20::createProgram}.
     *
     * If a program object is in use as part of current rendering state, it will be flagged for deletion, but it will
     * not be deleted until it is no longer part of current state for any rendering context. If a program object to
     * be deleted has shader objects attached to it, those shader objects will be automatically detached but not
     * deleted unless they have already been flagged for deletion by a previous call to {@see GL20::deleteShader}.
     * A value of 0 for $program will be silently ignored.
     *
     * To determine whether a program object has been flagged for deletion, call {@see GL20::getProgram} with
     * arguments $program and {@see GL20::GL_DELETE_STATUS}.
     *
     * @see http://docs.gl/gl2/glDeleteProgram
     * @see http://docs.gl/gl4/glDeleteProgram
     * @since 2.0
     * @param int $program
     * @return void
     */
    public function deleteProgram(int $program): void
    {
        $__proc = $this->proc('glDeleteProgram', 'void (*)(GLuint program)');
        $__proc($program);
    }

    /**
     * {@see GL20::deleteShader} frees the memory and invalidates the name associated with the shader object
     * specified by $shader. This command effectively undoes the effects of a call to {@see GL20::createShader}.
     *
     * If a shader object to be deleted is attached to a program object, it will be flagged for deletion, but it will
     * not be deleted until it is no longer attached to any program object, for any rendering context (i.e., it must
     * be detached from wherever it was attached before it will be deleted). A value of 0 for $shader will be
     * silently ignored.
     *
     * To determine whether an object has been flagged for deletion, call {@see GL20::getShader} with arguments
     * $shader and {@see GL20::GL_DELETE_STATUS}.
     *
     * @see http://docs.gl/gl2/glDeleteShader
     * @see http://docs.gl/gl4/glDeleteShader
     * @since 2.0
     * @param int $shader
     * @return void
     */
    public function deleteShader(int $shader): void
    {
        $__proc = $this->proc('glDeleteShader', 'void (*)(GLuint shader)');
        $__proc($shader);
    }

    /**
     * {@see GL20::detachShader} detaches the shader object specified by $shader from the program object specified
     * by $program. This command can be used to undo the effect of the command {@see GL20::attachShader}.
     *
     * If $shader has already been flagged for deletion by a call to {@see GL20::deleteShader} and it is not
     * attached to any other program object, it will be deleted after it has been detached.
     *
     * @see http://docs.gl/gl2/glDetachShader
     * @see http://docs.gl/gl4/glDetachShader
     * @since 2.0
     * @param int $program
     * @param int $shader
     * @return void
     */
    public function detachShader(int $program, int $shader): void
    {
        $__proc = $this->proc('glDetachShader', 'void (*)(GLuint program, GLuint shader)');
        $__proc($program, $shader);
    }

    /**
     * {@see GL20::enableVertexAttribArray} and {@see GL20::enableVertexArrayAttrib} enable the generic vertex
     * attribute array specified by $index. {@see GL20::enableVertexAttribArray} uses currently bound vertex array
     * object for the operation, whereas {@see GL20::enableVertexArrayAttrib} updates state of the vertex array
     * object with ID $vaobj.
     *
     * {@see GL20::disableVertexAttribArray} and {@see GL20::disableVertexArrayAttrib} disable the generic vertex
     * attribute array specified by $index. {@see GL20::disableVertexAttribArray} uses currently bound vertex array
     * object for the operation, whereas {@see GL20::disableVertexArrayAttrib} updates state of the vertex array
     * object with ID $vaobj.
     *
     * By default, all client-side capabilities are disabled, including all generic vertex attribute arrays. If
     * enabled, the values in the generic vertex attribute array will be accessed and used for rendering when calls
     * are made to vertex array commands such as {@see GL20::drawArrays}, {@see GL20::drawElements},
     * {@see GL20::drawRangeElements}, {@see GL20::multiDrawElements}, or {@see GL20::multiDrawArrays}.
     *
     * @see http://docs.gl/gl2/glEnableVertexAttribArray
     * @see http://docs.gl/gl4/glEnableVertexAttribArray
     * @since 2.0
     * @param int $index
     * @return void
     */
    public function disableVertexAttribArray(int $index): void
    {
        $__proc = $this->proc('glDisableVertexAttribArray', 'void (*)(GLuint index)');
        $__proc($index);
    }

    /**
     * {@see GL20::drawBuffers} and {@see GL20::namedFramebufferDrawBuffers} define an array of buffers into
     * which outputs from the fragment shader data will be written. If a fragment shader writes a value to one or
     * more user defined output variables, then the value of each variable will be written into the buffer specified
     * at a location within $bufs corresponding to the location assigned to that user defined output. The draw buffer
     * used for user defined outputs assigned to locations greater than or equal to $n is implicitly set to
     * {@see GL20::GL_NONE} and any data written to such an output is discarded.
     *
     * For {@see GL20::drawBuffers}, the framebuffer object that is bound to the {@see GL20::GL_DRAW_FRAMEBUFFER}
     * binding will be used. For {@see GL20::namedFramebufferDrawBuffers}, $framebuffer is the name of the
     * framebuffer object. If $framebuffer is zero, then the default framebuffer is affected.
     *
     * The symbolic constants contained in $bufs may be any of the following:
     *
     *  - {@see GL20::GL_NONE}: The fragment shader output value is not written
     *    into any color buffer.
     *
     *  - {@see GL20::GL_FRONT_LEFT}: The fragment shader output value is
     *    written into the front left color buffer.
     *
     *  - {@see GL20::GL_FRONT_RIGHT}: The fragment shader output value is
     *    written into the front right color buffer.
     *
     *  - {@see GL20::GL_BACK_LEFT}: The fragment shader output value is written
     *    into the back left color buffer.
     *
     *  - {@see GL20::GL_BACK_RIGHT}: The fragment shader output value is
     *    written into the back right color buffer.
     *
     *  - {@see GL20::GL_COLOR_ATTACHMENTn}: The fragment shader output value is
     *    written into the nth color attachment of the current framebuffer. n
     *    may
     *    range from zero to the value of {@see GL20::GL_MAX_COLOR_ATTACHMENTS}.
     *
     * Except for {@see GL20::GL_NONE}, the preceding symbolic constants may not appear more than once in $bufs. The
     * maximum number of draw buffers supported is implementation dependent and can be queried by calling
     * {@see GL20::get} with the argument {@see GL20::GL_MAX_DRAW_BUFFERS}.
     *
     * @see http://docs.gl/gl2/glDrawBuffers
     * @see http://docs.gl/gl4/glDrawBuffers
     * @since 2.0
     * @param int $n
     * @param CData|null $bufs
     * @return void
     */
    public function drawBuffers(int $n, ?CData $bufs): void
    {
        $__proc = $this->proc('glDrawBuffers', 'void (*)(GLsizei n, const GLenum *bufs)');
        $__proc($n, $bufs);
    }

    /**
     * {@see GL20::enableVertexAttribArray} and {@see GL20::enableVertexArrayAttrib} enable the generic vertex
     * attribute array specified by $index. {@see GL20::enableVertexAttribArray} uses currently bound vertex array
     * object for the operation, whereas {@see GL20::enableVertexArrayAttrib} updates state of the vertex array
     * object with ID $vaobj.
     *
     * {@see GL20::disableVertexAttribArray} and {@see GL20::disableVertexArrayAttrib} disable the generic vertex
     * attribute array specified by $index. {@see GL20::disableVertexAttribArray} uses currently bound vertex array
     * object for the operation, whereas {@see GL20::disableVertexArrayAttrib} updates state of the vertex array
     * object with ID $vaobj.
     *
     * By default, all client-side capabilities are disabled, including all generic vertex attribute arrays. If
     * enabled, the values in the generic vertex attribute array will be accessed and used for rendering when calls
     * are made to vertex array commands such as {@see GL20::drawArrays}, {@see GL20::drawElements},
     * {@see GL20::drawRangeElements}, {@see GL20::multiDrawElements}, or {@see GL20::multiDrawArrays}.
     *
     * @see http://docs.gl/gl2/glEnableVertexAttribArray
     * @see http://docs.gl/gl4/glEnableVertexAttribArray
     * @since 2.0
     * @param int $index
     * @return void
     */
    public function enableVertexAttribArray(int $index): void
    {
        $__proc = $this->proc('glEnableVertexAttribArray', 'void (*)(GLuint index)');
        $__proc($index);
    }

    /**
     * {@see GL20::getActiveAttrib} returns information about an active attribute variable in the program object
     * specified by $program. The number of active attributes can be obtained by calling {@see GL20::getProgram}
     * with the value {@see GL20::GL_ACTIVE_ATTRIBUTES}. A value of 0 for $index selects the first active attribute
     * variable. Permissible values for $index range from zero to the number of active attribute variables minus one.
     *
     * A vertex shader may use either built-in attribute variables, user-defined attribute variables, or both.
     * Built-in attribute variables have a prefix of "gl_" and reference conventional OpenGL vertex attribtes (e.g.,
     * $gl_Vertex, $gl_Normal, etc., see the OpenGL Shading Language specification for a complete list.) User-defined
     * attribute variables have arbitrary names and obtain their values through numbered generic vertex attributes.
     * An attribute variable (either built-in or user-defined) is considered active if it is determined during the
     * link operation that it may be accessed during program execution. Therefore, $program should have previously
     * been the target of a call to {@see GL20::linkProgram}, but it is not necessary for it to have been linked
     * successfully.
     *
     * The size of the character buffer required to store the longest attribute variable name in $program can be
     * obtained by calling {@see GL20::getProgram} with the value {@see GL20::GL_ACTIVE_ATTRIBUTE_MAX_LENGTH}. This
     * value should be used to allocate a buffer of sufficient size to store the returned attribute name. The size of
     * this character buffer is passed in $bufSize, and a pointer to this character buffer is passed in $name.
     *
     * {@see GL20::getActiveAttrib} returns the name of the attribute variable indicated by $index, storing it in
     * the character buffer specified by $name. The string returned will be null terminated. The actual number of
     * characters written into this buffer is returned in $length, and this count does not include the null
     * termination character. If the length of the returned string is not required, a value of {@see GL46::NULL} can
     * be passed in the $length argument.
     *
     * The $type argument specifies a pointer to a variable into which the attribute variable's data type will be
     * written. The symbolic constants {@see GL20::GL_FLOAT}, {@see GL20::GL_FLOAT_VEC2}, {@see GL20::GL_FLOAT_VEC3},
     * {@see GL20::GL_FLOAT_VEC4}, {@see GL20::GL_FLOAT_MAT2}, {@see GL20::GL_FLOAT_MAT3},
     * {@see GL20::GL_FLOAT_MAT4}, {@see GL20::GL_FLOAT_MAT2x3}, {@see GL20::GL_FLOAT_MAT2x4},
     * {@see GL20::GL_FLOAT_MAT3x2}, {@see GL20::GL_FLOAT_MAT3x4}, {@see GL20::GL_FLOAT_MAT4x2},
     * {@see GL20::GL_FLOAT_MAT4x3}, {@see GL20::GL_INT}, {@see GL20::GL_INT_VEC2}, {@see GL20::GL_INT_VEC3},
     * {@see GL20::GL_INT_VEC4}, {@see GL20::GL_UNSIGNED_INT}, {@see GL20::GL_UNSIGNED_INT_VEC2},
     * {@see GL20::GL_UNSIGNED_INT_VEC3}, {@see GL20::GL_UNSIGNED_INT_VEC4}, {@see GL20::GL_DOUBLE},
     * {@see GL20::GL_DOUBLE_VEC2}, {@see GL20::GL_DOUBLE_VEC3}, {@see GL20::GL_DOUBLE_VEC4},
     * {@see GL20::GL_DOUBLE_MAT2}, {@see GL20::GL_DOUBLE_MAT3}, {@see GL20::GL_DOUBLE_MAT4},
     * {@see GL20::GL_DOUBLE_MAT2x3}, {@see GL20::GL_DOUBLE_MAT2x4}, {@see GL20::GL_DOUBLE_MAT3x2},
     * {@see GL20::GL_DOUBLE_MAT3x4}, {@see GL20::GL_DOUBLE_MAT4x2}, or {@see GL20::GL_DOUBLE_MAT4x3} may be
     * returned. The $size argument will return the size of the attribute, in units of the type returned in $type.
     *
     * The list of active attribute variables may include both built-in attribute variables (which begin with the
     * prefix "gl_") as well as user-defined attribute variable names.
     *
     * This function will return as much information as it can about the specified active attribute variable. If no
     * information is available, $length will be 0, and $name will be an empty string. This situation could occur if
     * this function is called after a link operation that failed. If an error occurs, the return values $length,
     * $size, $type, and $name will be unmodified.
     *
     * @see http://docs.gl/gl2/glGetActiveAttrib
     * @see http://docs.gl/gl4/glGetActiveAttrib
     * @since 2.0
     * @param int $program
     * @param int $index
     * @param int $bufSize
     * @param int|null $length
     * @param int|null $size
     * @param int|null $type
     * @param string|null $name
     * @return void
     */
    public function getActiveAttrib(
        int $program,
        int $index,
        int $bufSize,
        ?int &$length,
        ?int &$size,
        ?int &$type,
        ?string &$name
    ): void {
        $lengthCType = $this->info->ffi->new('GLsizei', false);
        $sizeCType = $this->info->ffi->new('GLint', false);
        $typeCType = $this->info->ffi->new('GLenum', false);
        $nameCType = \FFI::addr($this->info->ffi->new('GLchar[' . $bufSize . ']', false)[0]);
        try {
            $__proc = $this->proc('glGetActiveAttrib',
                'void (*)(GLuint program, GLuint index, GLsizei bufSize, GLsizei *length, GLint *size, GLenum *type, GLchar *name)');
            $__proc($program, $index, $bufSize, \FFI::addr($lengthCType), \FFI::addr($sizeCType),
                \FFI::addr($typeCType), $nameCType);
        } finally {
            $length = $lengthCType->cdata;
            \FFI::free($lengthCType);
            $size = $sizeCType->cdata;
            \FFI::free($sizeCType);
            $type = $typeCType->cdata;
            \FFI::free($typeCType);
            $name = \FFI::string($nameCType);
            \FFI::free($nameCType);
        }
    }

    /**
     * {@see GL20::getActiveUniform} returns information about an active uniform variable in the program object
     * specified by $program. The number of active uniform variables can be obtained by calling
     * {@see GL20::getProgram} with the value {@see GL20::GL_ACTIVE_UNIFORMS}. A value of 0 for $index selects the
     * first active uniform variable. Permissible values for $index range from zero to the number of active uniform
     * variables minus one.
     *
     * Shaders may use either built-in uniform variables, user-defined uniform variables, or both. Built-in uniform
     * variables have a prefix of "gl_" and reference existing OpenGL state or values derived from such state (e.g.,
     * $gl_DepthRangeParameters, see the OpenGL Shading Language specification for a complete list.) User-defined
     * uniform variables have arbitrary names and obtain their values from the application through calls to
     * {@see GL20::uniform}. A uniform variable (either built-in or user-defined) is considered active if it is
     * determined during the link operation that it may be accessed during program execution. Therefore, $program
     * should have previously been the target of a call to {@see GL20::linkProgram}, but it is not necessary for it
     * to have been linked successfully.
     *
     * The size of the character buffer required to store the longest uniform variable name in $program can be
     * obtained by calling {@see GL20::getProgram} with the value {@see GL20::GL_ACTIVE_UNIFORM_MAX_LENGTH}. This
     * value should be used to allocate a buffer of sufficient size to store the returned uniform variable name. The
     * size of this character buffer is passed in $bufSize, and a pointer to this character buffer is passed in
     * $name.
     *
     * {@see GL20::getActiveUniform} returns the name of the uniform variable indicated by $index, storing it in
     * the character buffer specified by $name. The string returned will be null terminated. The actual number of
     * characters written into this buffer is returned in $length, and this count does not include the null
     * termination character. If the length of the returned string is not required, a value of {@see GL46::NULL} can
     * be passed in the $length argument.
     *
     * The $type argument will return a pointer to the uniform variable's data type. The symbolic constants returned
     * for uniform types are shown in the table below.         Returned Symbolic Contant     Shader Uniform Type
     *   {@see GL20::GL_FLOAT}   {@see GL46::float}     {@see GL20::GL_FLOAT_VEC2}   {@see GL46::vec2}
     * {@see GL20::GL_FLOAT_VEC3}   {@see GL46::vec3}     {@see GL20::GL_FLOAT_VEC4}   {@see GL46::vec4}
     * {@see GL20::GL_DOUBLE}   {@see GL46::double}     {@see GL20::GL_DOUBLE_VEC2}   {@see GL46::dvec2}
     * {@see GL20::GL_DOUBLE_VEC3}   {@see GL46::dvec3}     {@see GL20::GL_DOUBLE_VEC4}   {@see GL46::dvec4}
     * {@see GL20::GL_INT}   {@see GL46::int}     {@see GL20::GL_INT_VEC2}   {@see GL46::ivec2}
     * {@see GL20::GL_INT_VEC3}   {@see GL46::ivec3}     {@see GL20::GL_INT_VEC4}   {@see GL46::ivec4}
     * {@see GL20::GL_UNSIGNED_INT}   {@see GL46::unsigned int}     {@see GL20::GL_UNSIGNED_INT_VEC2}
     * {@see GL46::uvec2}     {@see GL20::GL_UNSIGNED_INT_VEC3}   {@see GL46::uvec3}
     * {@see GL20::GL_UNSIGNED_INT_VEC4}   {@see GL46::uvec4}     {@see GL20::GL_BOOL}   {@see GL46::bool}
     * {@see GL20::GL_BOOL_VEC2}   {@see GL46::bvec2}     {@see GL20::GL_BOOL_VEC3}   {@see GL46::bvec3}
     * {@see GL20::GL_BOOL_VEC4}   {@see GL46::bvec4}     {@see GL20::GL_FLOAT_MAT2}   {@see GL46::mat2}
     * {@see GL20::GL_FLOAT_MAT3}   {@see GL46::mat3}     {@see GL20::GL_FLOAT_MAT4}   {@see GL46::mat4}
     * {@see GL20::GL_FLOAT_MAT2x3}   {@see GL46::mat2x3}     {@see GL20::GL_FLOAT_MAT2x4}   {@see GL46::mat2x4}
     * {@see GL20::GL_FLOAT_MAT3x2}   {@see GL46::mat3x2}     {@see GL20::GL_FLOAT_MAT3x4}   {@see GL46::mat3x4}
     * {@see GL20::GL_FLOAT_MAT4x2}   {@see GL46::mat4x2}     {@see GL20::GL_FLOAT_MAT4x3}   {@see GL46::mat4x3}
     * {@see GL20::GL_DOUBLE_MAT2}   {@see GL46::dmat2}     {@see GL20::GL_DOUBLE_MAT3}   {@see GL46::dmat3}
     * {@see GL20::GL_DOUBLE_MAT4}   {@see GL46::dmat4}     {@see GL20::GL_DOUBLE_MAT2x3}   {@see GL46::dmat2x3}
     * {@see GL20::GL_DOUBLE_MAT2x4}   {@see GL46::dmat2x4}     {@see GL20::GL_DOUBLE_MAT3x2}   {@see GL46::dmat3x2}
     *    {@see GL20::GL_DOUBLE_MAT3x4}   {@see GL46::dmat3x4}     {@see GL20::GL_DOUBLE_MAT4x2}
     * {@see GL46::dmat4x2}     {@see GL20::GL_DOUBLE_MAT4x3}   {@see GL46::dmat4x3}     {@see GL20::GL_SAMPLER_1D}
     * {@see GL46::sampler1D}     {@see GL20::GL_SAMPLER_2D}   {@see GL46::sampler2D}     {@see GL20::GL_SAMPLER_3D}
     *  {@see GL46::sampler3D}     {@see GL20::GL_SAMPLER_CUBE}   {@see GL46::samplerCube}
     * {@see GL20::GL_SAMPLER_1D_SHADOW}   {@see GL46::sampler1DShadow}     {@see GL20::GL_SAMPLER_2D_SHADOW}
     * {@see GL46::sampler2DShadow}     {@see GL20::GL_SAMPLER_1D_ARRAY}   {@see GL46::sampler1DArray}
     * {@see GL20::GL_SAMPLER_2D_ARRAY}   {@see GL46::sampler2DArray}     {@see GL20::GL_SAMPLER_1D_ARRAY_SHADOW}
     * {@see GL46::sampler1DArrayShadow}     {@see GL20::GL_SAMPLER_2D_ARRAY_SHADOW}
     * {@see GL46::sampler2DArrayShadow}     {@see GL20::GL_SAMPLER_2D_MULTISAMPLE}   {@see GL46::sampler2DMS}
     * {@see GL20::GL_SAMPLER_2D_MULTISAMPLE_ARRAY}   {@see GL46::sampler2DMSArray}
     * {@see GL20::GL_SAMPLER_CUBE_SHADOW}   {@see GL46::samplerCubeShadow}     {@see GL20::GL_SAMPLER_BUFFER}
     * {@see GL46::samplerBuffer}     {@see GL20::GL_SAMPLER_2D_RECT}   {@see GL46::sampler2DRect}
     * {@see GL20::GL_SAMPLER_2D_RECT_SHADOW}   {@see GL46::sampler2DRectShadow}     {@see GL20::GL_INT_SAMPLER_1D}
     * {@see GL46::isampler1D}     {@see GL20::GL_INT_SAMPLER_2D}   {@see GL46::isampler2D}
     * {@see GL20::GL_INT_SAMPLER_3D}   {@see GL46::isampler3D}     {@see GL20::GL_INT_SAMPLER_CUBE}
     * {@see GL46::isamplerCube}     {@see GL20::GL_INT_SAMPLER_1D_ARRAY}   {@see GL46::isampler1DArray}
     * {@see GL20::GL_INT_SAMPLER_2D_ARRAY}   {@see GL46::isampler2DArray}
     * {@see GL20::GL_INT_SAMPLER_2D_MULTISAMPLE}   {@see GL46::isampler2DMS}
     * {@see GL20::GL_INT_SAMPLER_2D_MULTISAMPLE_ARRAY}   {@see GL46::isampler2DMSArray}
     * {@see GL20::GL_INT_SAMPLER_BUFFER}   {@see GL46::isamplerBuffer}     {@see GL20::GL_INT_SAMPLER_2D_RECT}
     * {@see GL46::isampler2DRect}     {@see GL20::GL_UNSIGNED_INT_SAMPLER_1D}   {@see GL46::usampler1D}
     * {@see GL20::GL_UNSIGNED_INT_SAMPLER_2D}   {@see GL46::usampler2D}     {@see GL20::GL_UNSIGNED_INT_SAMPLER_3D}
     *  {@see GL46::usampler3D}     {@see GL20::GL_UNSIGNED_INT_SAMPLER_CUBE}   {@see GL46::usamplerCube}
     * {@see GL20::GL_UNSIGNED_INT_SAMPLER_1D_ARRAY}   {@see GL46::usampler2DArray}
     * {@see GL20::GL_UNSIGNED_INT_SAMPLER_2D_ARRAY}   {@see GL46::usampler2DArray}
     * {@see GL20::GL_UNSIGNED_INT_SAMPLER_2D_MULTISAMPLE}   {@see GL46::usampler2DMS}
     * {@see GL20::GL_UNSIGNED_INT_SAMPLER_2D_MULTISAMPLE_ARRAY}   {@see GL46::usampler2DMSArray}
     * {@see GL20::GL_UNSIGNED_INT_SAMPLER_BUFFER}   {@see GL46::usamplerBuffer}
     * {@see GL20::GL_UNSIGNED_INT_SAMPLER_2D_RECT}   {@see GL46::usampler2DRect}     {@see GL20::GL_IMAGE_1D}
     * {@see GL46::image1D}     {@see GL20::GL_IMAGE_2D}   {@see GL46::image2D}     {@see GL20::GL_IMAGE_3D}
     * {@see GL46::image3D}     {@see GL20::GL_IMAGE_2D_RECT}   {@see GL46::image2DRect}
     * {@see GL20::GL_IMAGE_CUBE}   {@see GL46::imageCube}     {@see GL20::GL_IMAGE_BUFFER}
     * {@see GL46::imageBuffer}     {@see GL20::GL_IMAGE_1D_ARRAY}   {@see GL46::image1DArray}
     * {@see GL20::GL_IMAGE_2D_ARRAY}   {@see GL46::image2DArray}     {@see GL20::GL_IMAGE_2D_MULTISAMPLE}
     * {@see GL46::image2DMS}     {@see GL20::GL_IMAGE_2D_MULTISAMPLE_ARRAY}   {@see GL46::image2DMSArray}
     * {@see GL20::GL_INT_IMAGE_1D}   {@see GL46::iimage1D}     {@see GL20::GL_INT_IMAGE_2D}   {@see GL46::iimage2D}
     *    {@see GL20::GL_INT_IMAGE_3D}   {@see GL46::iimage3D}     {@see GL20::GL_INT_IMAGE_2D_RECT}
     * {@see GL46::iimage2DRect}     {@see GL20::GL_INT_IMAGE_CUBE}   {@see GL46::iimageCube}
     * {@see GL20::GL_INT_IMAGE_BUFFER}   {@see GL46::iimageBuffer}     {@see GL20::GL_INT_IMAGE_1D_ARRAY}
     * {@see GL46::iimage1DArray}     {@see GL20::GL_INT_IMAGE_2D_ARRAY}   {@see GL46::iimage2DArray}
     * {@see GL20::GL_INT_IMAGE_2D_MULTISAMPLE}   {@see GL46::iimage2DMS}
     * {@see GL20::GL_INT_IMAGE_2D_MULTISAMPLE_ARRAY}   {@see GL46::iimage2DMSArray}
     * {@see GL20::GL_UNSIGNED_INT_IMAGE_1D}   {@see GL46::uimage1D}     {@see GL20::GL_UNSIGNED_INT_IMAGE_2D}
     * {@see GL46::uimage2D}     {@see GL20::GL_UNSIGNED_INT_IMAGE_3D}   {@see GL46::uimage3D}
     * {@see GL20::GL_UNSIGNED_INT_IMAGE_2D_RECT}   {@see GL46::uimage2DRect}
     * {@see GL20::GL_UNSIGNED_INT_IMAGE_CUBE}   {@see GL46::uimageCube}
     * {@see GL20::GL_UNSIGNED_INT_IMAGE_BUFFER}   {@see GL46::uimageBuffer}
     * {@see GL20::GL_UNSIGNED_INT_IMAGE_1D_ARRAY}   {@see GL46::uimage1DArray}
     * {@see GL20::GL_UNSIGNED_INT_IMAGE_2D_ARRAY}   {@see GL46::uimage2DArray}
     * {@see GL20::GL_UNSIGNED_INT_IMAGE_2D_MULTISAMPLE}   {@see GL46::uimage2DMS}
     * {@see GL20::GL_UNSIGNED_INT_IMAGE_2D_MULTISAMPLE_ARRAY}   {@see GL46::uimage2DMSArray}
     * {@see GL20::GL_UNSIGNED_INT_ATOMIC_COUNTER}   {@see GL46::atomic_uint}
     *
     * If one or more elements of an array are active, the name of the array is returned in $name, the type is
     * returned in $type, and the $size parameter returns the highest array element index used, plus one, as
     * determined by the compiler and/or linker. Only one active uniform variable will be reported for a uniform
     * array.
     *
     * Uniform variables that are declared as structures or arrays of structures will not be returned directly by
     * this function. Instead, each of these uniform variables will be reduced to its fundamental components
     * containing the "." and "[]" operators such that each of the names is valid as an argument to
     * {@see GL20::getUniformLocation}. Each of these reduced uniform variables is counted as one active uniform
     * variable and is assigned an index. A valid name cannot be a structure, an array of structures, or a
     * subcomponent of a vector or matrix.
     *
     * The size of the uniform variable will be returned in $size. Uniform variables other than arrays will have a
     * size of 1. Structures and arrays of structures will be reduced as described earlier, such that each of the
     * names returned will be a data type in the earlier list. If this reduction results in an array, the size
     * returned will be as described for uniform arrays; otherwise, the size returned will be 1.
     *
     * The list of active uniform variables may include both built-in uniform variables (which begin with the prefix
     * "gl_") as well as user-defined uniform variable names.
     *
     * This function will return as much information as it can about the specified active uniform variable. If no
     * information is available, $length will be 0, and $name will be an empty string. This situation could occur if
     * this function is called after a link operation that failed. If an error occurs, the return values $length,
     * $size, $type, and $name will be unmodified.
     *
     * @see http://docs.gl/gl2/glGetActiveUniform
     * @see http://docs.gl/gl4/glGetActiveUniform
     * @since 2.0
     * @param int $program
     * @param int $index
     * @param int $bufSize
     * @param int|null $length
     * @param int|null $size
     * @param int|null $type
     * @param string|null $name
     * @return void
     */
    public function getActiveUniform(
        int $program,
        int $index,
        int $bufSize,
        ?int &$length,
        ?int &$size,
        ?int &$type,
        ?string &$name
    ): void {
        $lengthCType = $this->info->ffi->new('GLsizei', false);
        $sizeCType = $this->info->ffi->new('GLint', false);
        $typeCType = $this->info->ffi->new('GLenum', false);
        $nameCType = \FFI::addr($this->info->ffi->new('GLchar[' . $bufSize . ']', false)[0]);
        try {
            $__proc = $this->proc('glGetActiveUniform',
                'void (*)(GLuint program, GLuint index, GLsizei bufSize, GLsizei *length, GLint *size, GLenum *type, GLchar *name)');
            $__proc($program, $index, $bufSize, \FFI::addr($lengthCType), \FFI::addr($sizeCType),
                \FFI::addr($typeCType), $nameCType);
        } finally {
            $length = $lengthCType->cdata;
            \FFI::free($lengthCType);
            $size = $sizeCType->cdata;
            \FFI::free($sizeCType);
            $type = $typeCType->cdata;
            \FFI::free($typeCType);
            $name = \FFI::string($nameCType);
            \FFI::free($nameCType);
        }
    }

    /**
     * {@see GL20::getAttachedShaders} returns the names of the shader objects attached to $program. The names of
     * shader objects that are attached to $program will be returned in $shaders. The actual number of shader names
     * written into $shaders is returned in $count. If no shader objects are attached to $program, $count is set to
     * 0. The maximum number of shader names that may be returned in $shaders is specified by $maxCount.
     *
     * If the number of names actually returned is not required (for instance, if it has just been obtained by
     * calling {@see GL20::getProgram}), a value of {@see GL46::NULL} may be passed for count. If no shader objects
     * are attached to $program, a value of 0 will be returned in $count. The actual number of attached shaders can
     * be obtained by calling {@see GL20::getProgram} with the value {@see GL20::GL_ATTACHED_SHADERS}.
     *
     * @see http://docs.gl/gl2/glGetAttachedShaders
     * @see http://docs.gl/gl4/glGetAttachedShaders
     * @since 2.0
     * @param int $program
     * @param int $maxCount
     * @param int|null $count
     * @param int|null $shaders
     * @return void
     */
    public function getAttachedShaders(int $program, int $maxCount, ?int &$count, ?int &$shaders): void
    {
        $countCType = $this->info->ffi->new('GLsizei', false);
        $shadersCType = $this->info->ffi->new('GLuint', false);
        try {
            $__proc = $this->proc('glGetAttachedShaders',
                'void (*)(GLuint program, GLsizei maxCount, GLsizei *count, GLuint *shaders)');
            $__proc($program, $maxCount, \FFI::addr($countCType), \FFI::addr($shadersCType));
        } finally {
            $count = $countCType->cdata;
            \FFI::free($countCType);
            $shaders = $shadersCType->cdata;
            \FFI::free($shadersCType);
        }
    }

    /**
     * {@see GL20::getAttribLocation} queries the previously linked program object specified by $program for the
     * attribute variable specified by $name and returns the index of the generic vertex attribute that is bound to
     * that attribute variable. If $name is a matrix attribute variable, the index of the first column of the matrix
     * is returned. If the named attribute variable is not an active attribute in the specified program object or if
     * $name starts with the reserved prefix "gl_", a value of -1 is returned.
     *
     * The association between an attribute variable name and a generic attribute index can be specified at any time
     * by calling {@see GL20::bindAttribLocation}. Attribute bindings do not go into effect until
     * {@see GL20::linkProgram} is called. After a program object has been linked successfully, the index values
     * for attribute variables remain fixed until the next link command occurs. The attribute values can only be
     * queried after a link if the link was successful. {@see GL20::getAttribLocation} returns the binding that
     * actually went into effect the last time {@see GL20::linkProgram} was called for the specified program
     * object. Attribute bindings that have been specified since the last link operation are not returned by
     * {@see GL20::getAttribLocation}.
     *
     * @see http://docs.gl/gl2/glGetAttribLocation
     * @see http://docs.gl/gl4/glGetAttribLocation
     * @since 2.0
     * @param int $program
     * @param CData|null $name
     * @return int
     */
    public function getAttribLocation(int $program, ?CData $name): int
    {
        $__proc = $this->proc('glGetAttribLocation', 'GLint (*)(GLuint program, const GLchar *name)');

        return $__proc($program, $name);
    }

    /**
     * {@see GL20::getProgramInfoLog} returns the information log for the specified program object. The information
     * log for a program object is modified when the program object is linked or validated. The string that is
     * returned will be null terminated.
     *
     * {@see GL20::getProgramInfoLog} returns in $infoLog as much of the information log as it can, up to a maximum
     * of $maxLength characters. The number of characters actually returned, excluding the null termination
     * character, is specified by $length. If the length of the returned string is not required, a value of
     * {@see GL46::NULL} can be passed in the $length argument. The size of the buffer required to store the returned
     * information log can be obtained by calling {@see GL20::getProgram} with the value
     * {@see GL20::GL_INFO_LOG_LENGTH}.
     *
     * The information log for a program object is either an empty string, or a string containing information about
     * the last link operation, or a string containing information about the last validation operation. It may
     * contain diagnostic messages, warning messages, and other information. When a program object is created, its
     * information log will be a string of length 0.
     *
     * @see http://docs.gl/gl2/glGetProgramInfoLog
     * @see http://docs.gl/gl4/glGetProgramInfoLog
     * @since 2.0
     * @param int $program
     * @param int $bufSize
     * @param int|null $length
     * @param string|null $infoLog
     * @return void
     */
    public function getProgramInfoLog(int $program, int $bufSize, ?int &$length, ?string &$infoLog): void
    {
        $lengthCType = $this->info->ffi->new('GLsizei', false);
        $infoLogCType = \FFI::addr($this->info->ffi->new('GLchar[' . $bufSize . ']', false)[0]);
        try {
            $__proc = $this->proc('glGetProgramInfoLog',
                'void (*)(GLuint program, GLsizei bufSize, GLsizei *length, GLchar *infoLog)');
            $__proc($program, $bufSize, \FFI::addr($lengthCType), $infoLogCType);
        } finally {
            $length = $lengthCType->cdata;
            \FFI::free($lengthCType);
            $infoLog = \FFI::string($infoLogCType);
            \FFI::free($infoLogCType);
        }
    }

    /**
     * {@see GL20::getProgram} returns in $params the value of a parameter for a specific program object. The
     * following parameters are defined:
     *
     *  - {@see GL20::GL_DELETE_STATUS}: $params returns {@see GL20::GL_TRUE} if
     *    $program is currently flagged for deletion, and
     *    {@see GL20::GL_FALSE} otherwise.
     *
     *  - {@see GL20::GL_LINK_STATUS}: $params returns {@see GL20::GL_TRUE} if
     *    the last link operation on $program was successful, and
     *    {@see GL20::GL_FALSE} otherwise.
     *
     *  - {@see GL20::GL_VALIDATE_STATUS}: $params returns {@see GL20::GL_TRUE}
     *    or if the last validation operation on $program was successful, and
     *    {@see GL20::GL_FALSE} otherwise.
     *
     *  - {@see GL20::GL_INFO_LOG_LENGTH}: $params returns the number of
     *    characters in the information log for $program including the null
     *    termination
     *    character (i.e., the size of the character buffer required to store
     *    the information log). If $program has no
     *    information log, a value of 0 is returned.
     *
     *  - {@see GL20::GL_ATTACHED_SHADERS}: $params returns the number of shader
     *    objects attached to $program.
     *
     *  - {@see GL20::GL_ACTIVE_ATOMIC_COUNTER_BUFFERS}: $params returns the
     *    number of active attribute atomic counter buffers used by $program.
     *
     *  - {@see GL20::GL_ACTIVE_ATTRIBUTES}: $params returns the number of
     *    active attribute variables for $program.
     *
     *  - {@see GL20::GL_ACTIVE_ATTRIBUTE_MAX_LENGTH}: $params returns the
     *    length of the longest active attribute name for $program, including
     *    the null
     *    termination character (i.e., the size of the character buffer required
     *    to store the longest attribute name).
     *    If no active attributes exist, 0 is returned.
     *
     *  - {@see GL20::GL_ACTIVE_UNIFORMS}: $params returns the number of active
     *    uniform variables for $program.
     *
     *  - {@see GL20::GL_ACTIVE_UNIFORM_MAX_LENGTH}: $params returns the length
     *    of the longest active uniform variable name for $program, including
     *    the null
     *    termination character (i.e., the size of the character buffer required
     *    to store the longest uniform variable
     *    name). If no active uniform variables exist, 0 is returned.
     *
     *  - {@see GL20::GL_PROGRAM_BINARY_LENGTH}: $params returns the length of
     *    the program binary, in bytes that will be returned by a call to
     *    {@see GL20::getProgramBinary}. When a progam's {@see
     *    GL20::GL_LINK_STATUS} is {@see GL20::GL_FALSE}, its
     *    program binary length is zero.
     *
     *  - {@see GL20::GL_COMPUTE_WORK_GROUP_SIZE}: $params returns an array of
     *    three integers containing the local work group size of the compute
     *    program as
     *    specified by its input layout qualifier(s). $program must be the name
     *    of a program object that has been
     *    previously linked successfully and contains a binary for the compute
     *    shader stage.
     *
     *  - {@see GL20::GL_TRANSFORM_FEEDBACK_BUFFER_MODE}: $params returns a
     *    symbolic constant indicating the buffer mode used when transform
     *    feedback is active. This
     *    may be {@see GL20::GL_SEPARATE_ATTRIBS} or {@see
     *    GL20::GL_INTERLEAVED_ATTRIBS}.
     *
     *  - {@see GL20::GL_TRANSFORM_FEEDBACK_VARYINGS}: $params returns the
     *    number of varying variables to capture in transform feedback mode for
     *    the program.
     *
     *  - {@see GL20::GL_TRANSFORM_FEEDBACK_VARYING_MAX_LENGTH}: $params returns
     *    the length of the longest variable name to be used for transform
     *    feedback, including the
     *    null-terminator.
     *
     *  - {@see GL20::GL_GEOMETRY_VERTICES_OUT}: $params returns the maximum
     *    number of vertices that the geometry shader in $program will output.
     *
     *  - {@see GL20::GL_GEOMETRY_INPUT_TYPE}: $params returns a symbolic
     *    constant indicating the primitive type accepted as input to the
     *    geometry shader
     *    contained in $program.
     *
     *  - {@see GL20::GL_GEOMETRY_OUTPUT_TYPE}: $params returns a symbolic
     *    constant indicating the primitive type that will be output by the
     *    geometry
     *    shader contained in $program.
     *
     * @see http://docs.gl/gl2/glGetProgram
     * @see http://docs.gl/gl4/glGetProgram
     * @since 2.0
     * @param int $program
     * @param int $pname
     * @param int|null $params
     * @return void
     */
    public function getProgramiv(int $program, int $pname, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->proc('glGetProgramiv', 'void (*)(GLuint program, GLenum pname, GLint *params)');
            $__proc($program, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL20::getShaderInfoLog} returns the information log for the specified shader object. The information
     * log for a shader object is modified when the shader is compiled. The string that is returned will be null
     * terminated.
     *
     * {@see GL20::getShaderInfoLog} returns in $infoLog as much of the information log as it can, up to a maximum
     * of $maxLength characters. The number of characters actually returned, excluding the null termination
     * character, is specified by $length. If the length of the returned string is not required, a value of
     * {@see GL46::NULL} can be passed in the $length argument. The size of the buffer required to store the returned
     * information log can be obtained by calling {@see GL20::getShader} with the value
     * {@see GL20::GL_INFO_LOG_LENGTH}.
     *
     * The information log for a shader object is a string that may contain diagnostic messages, warning messages,
     * and other information about the last compile operation. When a shader object is created, its information log
     * will be a string of length 0.
     *
     * @see http://docs.gl/gl2/glGetShaderInfoLog
     * @see http://docs.gl/gl4/glGetShaderInfoLog
     * @since 2.0
     * @param int $shader
     * @param int $bufSize
     * @param int|null $length
     * @param string|null $infoLog
     * @return void
     */
    public function getShaderInfoLog(int $shader, int $bufSize, ?int &$length, ?string &$infoLog): void
    {
        $lengthCType = $this->info->ffi->new('GLsizei', false);
        $infoLogCType = \FFI::addr($this->info->ffi->new('GLchar[' . $bufSize . ']', false)[0]);
        try {
            $__proc = $this->proc('glGetShaderInfoLog',
                'void (*)(GLuint shader, GLsizei bufSize, GLsizei *length, GLchar *infoLog)');
            $__proc($shader, $bufSize, \FFI::addr($lengthCType), $infoLogCType);
        } finally {
            $length = $lengthCType->cdata;
            \FFI::free($lengthCType);
            $infoLog = \FFI::string($infoLogCType);
            \FFI::free($infoLogCType);
        }
    }

    /**
     * {@see GL20::getShaderSource} returns the concatenation of the source code strings from the shader object
     * specified by $shader. The source code strings for a shader object are the result of a previous call to
     * {@see GL20::shaderSource}. The string returned by the function will be null terminated.
     *
     * {@see GL20::getShaderSource} returns in $source as much of the source code string as it can, up to a maximum
     * of $bufSize characters. The number of characters actually returned, excluding the null termination character,
     * is specified by $length. If the length of the returned string is not required, a value of {@see GL46::NULL}
     * can be passed in the $length argument. The size of the buffer required to store the returned source code
     * string can be obtained by calling {@see GL20::getShader} with the value
     * {@see GL20::GL_SHADER_SOURCE_LENGTH}.
     *
     * @see http://docs.gl/gl2/glGetShaderSource
     * @see http://docs.gl/gl4/glGetShaderSource
     * @since 2.0
     * @param int $shader
     * @param int $bufSize
     * @param int|null $length
     * @param string|null $source
     * @return void
     */
    public function getShaderSource(int $shader, int $bufSize, ?int &$length, ?string &$source): void
    {
        $lengthCType = $this->info->ffi->new('GLsizei', false);
        $sourceCType = \FFI::addr($this->info->ffi->new('GLchar[' . $bufSize . ']', false)[0]);
        try {
            $__proc = $this->proc('glGetShaderSource',
                'void (*)(GLuint shader, GLsizei bufSize, GLsizei *length, GLchar *source)');
            $__proc($shader, $bufSize, \FFI::addr($lengthCType), $sourceCType);
        } finally {
            $length = $lengthCType->cdata;
            \FFI::free($lengthCType);
            $source = \FFI::string($sourceCType);
            \FFI::free($sourceCType);
        }
    }

    /**
     * {@see GL20::getShader} returns in $params the value of a parameter for a specific shader object. The
     * following parameters are defined:
     *
     *  - {@see GL20::GL_SHADER_TYPE}: $params returns {@see
     *    GL20::GL_VERTEX_SHADER} if $shader is a vertex shader object,
     *    {@see GL20::GL_GEOMETRY_SHADER} if $shader is a geometry shader
     *    object, and {@see GL20::GL_FRAGMENT_SHADER} if
     *    $shader is a fragment shader object.
     *
     *  - {@see GL20::GL_DELETE_STATUS}: $params returns {@see GL20::GL_TRUE} if
     *    $shader is currently flagged for deletion, and {@see GL20::GL_FALSE}
     *    otherwise.
     *
     *  - {@see GL20::GL_COMPILE_STATUS}: $params returns {@see GL20::GL_TRUE}
     *    if the last compile operation on $shader was successful, and
     *    {@see GL20::GL_FALSE} otherwise.
     *
     *  - {@see GL20::GL_INFO_LOG_LENGTH}: $params returns the number of
     *    characters in the information log for $shader including the null
     *    termination
     *    character (i.e., the size of the character buffer required to store
     *    the information log). If $shader has no
     *    information log, a value of 0 is returned.
     *
     *  - {@see GL20::GL_SHADER_SOURCE_LENGTH}: $params returns the length of
     *    the concatenation of the source strings that make up the shader source
     *    for the
     *    $shader, including the null termination character. (i.e., the size of
     *    the character buffer required to store
     *    the shader source). If no source code exists, 0 is returned.
     *
     * @see http://docs.gl/gl2/glGetShader
     * @see http://docs.gl/gl4/glGetShader
     * @since 2.0
     * @param int $shader
     * @param int $pname
     * @param int|null $params
     * @return void
     */
    public function getShaderiv(int $shader, int $pname, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->proc('glGetShaderiv', 'void (*)(GLuint shader, GLenum pname, GLint *params)');
            $__proc($shader, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL20::getUniformLocation } returns an integer that represents the location of a specific uniform
     * variable within a program object. $name must be a null terminated string that contains no white space. $name
     * must be an active uniform variable name in $program that is not a structure, an array of structures, or a
     * subcomponent of a vector or a matrix. This function returns -1 if $name does not correspond to an active
     * uniform variable in $program, if $name starts with the reserved prefix "gl_", or if $name is associated with
     * an atomic counter or a named uniform block.
     *
     * Uniform variables that are structures or arrays of structures may be queried by calling
     * {@see GL20::getUniformLocation} for each field within the structure. The array element operator "[]" and the
     * structure field operator "." may be used in $name in order to select elements within an array or fields within
     * a structure. The result of using these operators is not allowed to be another structure, an array of
     * structures, or a subcomponent of a vector or a matrix. Except if the last part of $name indicates a uniform
     * variable array, the location of the first element of an array can be retrieved by using the name of the array,
     * or by using the name appended by "[0]".
     *
     * The actual locations assigned to uniform variables are not known until the program object is linked
     * successfully. After linking has occurred, the command {@see GL20::getUniformLocation} can be used to obtain
     * the location of a uniform variable. This location value can then be passed to {@see GL20::uniform} to set
     * the value of the uniform variable or to {@see GL20::getUniform} in order to query the current value of the
     * uniform variable. After a program object has been linked successfully, the index values for uniform variables
     * remain fixed until the next link command occurs. Uniform variable locations and values can only be queried
     * after a link if the link was successful.
     *
     * @see http://docs.gl/gl2/glGetUniformLocation
     * @see http://docs.gl/gl4/glGetUniformLocation
     * @since 2.0
     * @param int $program
     * @param CData|null $name
     * @return int
     */
    public function getUniformLocation(int $program, ?CData $name): int
    {
        $__proc = $this->proc('glGetUniformLocation', 'GLint (*)(GLuint program, const GLchar *name)');

        return $__proc($program, $name);
    }

    /**
     * {@see GL20::getUniform} and {@see GL20::getnUniform} return in $params the value(s) of the specified
     * uniform variable. The type of the uniform variable specified by $location determines the number of values
     * returned. If the uniform variable is defined in the shader as a boolean, int, or float, a single value will be
     * returned. If it is defined as a vec2, ivec2, or bvec2, two values will be returned. If it is defined as a
     * vec3, ivec3, or bvec3, three values will be returned, and so on. To query values stored in uniform variables
     * declared as arrays, call {@see GL20::getUniform} for each element of the array. To query values stored in
     * uniform variables declared as structures, call {@see GL20::getUniform} for each field in the structure. The
     * values for uniform variables declared as a matrix will be returned in column major order.
     *
     * The locations assigned to uniform variables are not known until the program object is linked. After linking
     * has occurred, the command {@see GL20::getUniformLocation} can be used to obtain the location of a uniform
     * variable. This location value can then be passed to {@see GL20::getUniform} or {@see GL20::getnUniform} in
     * order to query the current value of the uniform variable. After a program object has been linked successfully,
     * the index values for uniform variables remain fixed until the next link command occurs. The uniform variable
     * values can only be queried after a link if the link was successful.
     *
     * The only difference between {@see GL20::getUniform} and {@see GL20::getnUniform} is that
     * {@see GL20::getnUniform} will generate an error if size of the $params buffer,as described by $bufSize, is
     * not large enough to hold the result data.
     *
     * @see http://docs.gl/gl2/glGetUniform
     * @see http://docs.gl/gl4/glGetUniform
     * @since 2.0
     * @param int $program
     * @param int $location
     * @param float|null $params
     * @return void
     */
    public function getUniformfv(int $program, int $location, ?float &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLfloat', false);
        try {
            $__proc = $this->proc('glGetUniformfv', 'void (*)(GLuint program, GLint location, GLfloat *params)');
            $__proc($program, $location, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL20::getUniform} and {@see GL20::getnUniform} return in $params the value(s) of the specified
     * uniform variable. The type of the uniform variable specified by $location determines the number of values
     * returned. If the uniform variable is defined in the shader as a boolean, int, or float, a single value will be
     * returned. If it is defined as a vec2, ivec2, or bvec2, two values will be returned. If it is defined as a
     * vec3, ivec3, or bvec3, three values will be returned, and so on. To query values stored in uniform variables
     * declared as arrays, call {@see GL20::getUniform} for each element of the array. To query values stored in
     * uniform variables declared as structures, call {@see GL20::getUniform} for each field in the structure. The
     * values for uniform variables declared as a matrix will be returned in column major order.
     *
     * The locations assigned to uniform variables are not known until the program object is linked. After linking
     * has occurred, the command {@see GL20::getUniformLocation} can be used to obtain the location of a uniform
     * variable. This location value can then be passed to {@see GL20::getUniform} or {@see GL20::getnUniform} in
     * order to query the current value of the uniform variable. After a program object has been linked successfully,
     * the index values for uniform variables remain fixed until the next link command occurs. The uniform variable
     * values can only be queried after a link if the link was successful.
     *
     * The only difference between {@see GL20::getUniform} and {@see GL20::getnUniform} is that
     * {@see GL20::getnUniform} will generate an error if size of the $params buffer,as described by $bufSize, is
     * not large enough to hold the result data.
     *
     * @see http://docs.gl/gl2/glGetUniform
     * @see http://docs.gl/gl4/glGetUniform
     * @since 2.0
     * @param int $program
     * @param int $location
     * @param int|null $params
     * @return void
     */
    public function getUniformiv(int $program, int $location, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->proc('glGetUniformiv', 'void (*)(GLuint program, GLint location, GLint *params)');
            $__proc($program, $location, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL20::getVertexAttribPointerv} returns pointer information. $index is the generic vertex attribute to
     * be queried, $pname is a symbolic constant indicating the pointer to be returned, and $params is a pointer to a
     * location in which to place the returned data.
     *
     * The $pointer returned is a byte offset into the data store of the buffer object that was bound to the
     * {@see GL20::GL_ARRAY_BUFFER} target (see {@see GL20::bindBuffer}) when the desired pointer was previously
     * specified.
     *
     * @see http://docs.gl/gl2/glGetVertexAttribPointerv
     * @see http://docs.gl/gl4/glGetVertexAttribPointerv
     * @since 2.0
     * @param int $index
     * @param int $pname
     * @param CData|null $pointer
     * @return void
     */
    public function getVertexAttribPointerv(int $index, int $pname, ?CData $pointer): void
    {
        $__proc = $this->proc('glGetVertexAttribPointerv', 'void (*)(GLuint index, GLenum pname, void **pointer)');
        $__proc($index, $pname, $pointer);
    }

    /**
     * {@see GL20::getVertexAttrib} returns in $params the value of a generic vertex attribute parameter. The
     * generic vertex attribute to be queried is specified by $index, and the parameter to be queried is specified by
     * $pname.
     *
     * The accepted parameter names are as follows:
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_ARRAY_BUFFER_BINDING}: $params returns a
     *    single value, the name of the buffer object currently bound to the
     *    binding point
     *    corresponding to generic vertex attribute array $index. If no buffer
     *    object is bound, 0 is returned. The
     *    initial value is 0.
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_ARRAY_ENABLED}: $params returns a single
     *    value that is non-zero (true) if the vertex attribute array for $index
     *    is enabled
     *    and 0 (false) if it is disabled. The initial value is {@see
     *    GL20::GL_FALSE}.
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_ARRAY_SIZE}: $params returns a single
     *    value, the size of the vertex attribute array for $index. The size is
     *    the number
     *    of values for each element of the vertex attribute array, and it will
     *    be 1, 2, 3, or 4. The initial value is
     *    4.
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_ARRAY_STRIDE}: $params returns a single
     *    value, the array stride for (number of bytes between successive
     *    elements in) the
     *    vertex attribute array for $index. A value of 0 indicates that the
     *    array elements are stored sequentially in
     *    memory. The initial value is 0.
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_ARRAY_TYPE}: $params returns a single
     *    value, a symbolic constant indicating the array type for the vertex
     *    attribute
     *    array for $index. Possible values are {@see GL20::GL_BYTE}, {@see
     *    GL20::GL_UNSIGNED_BYTE},
     *    {@see GL20::GL_SHORT}, {@see GL20::GL_UNSIGNED_SHORT}, {@see
     *    GL20::GL_INT}, {@see GL20::GL_UNSIGNED_INT},
     *    {@see GL20::GL_FLOAT}, and {@see GL20::GL_DOUBLE}. The initial value
     *    is {@see GL20::GL_FLOAT}.
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_ARRAY_NORMALIZED}: $params returns a
     *    single value that is non-zero (true) if fixed-point data types for the
     *    vertex attribute
     *    array indicated by $index are normalized when they are converted to
     *    floating point, and 0 (false) otherwise.
     *    The initial value is {@see GL20::GL_FALSE}.
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_ARRAY_INTEGER}: $params returns a single
     *    value that is non-zero (true) if fixed-point data types for the vertex
     *    attribute
     *    array indicated by $index have integer data types, and 0 (false)
     *    otherwise. The initial value is 0
     *    ({@see GL20::GL_FALSE}).
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_ARRAY_LONG}: $param returns a single
     *    value that is non-zero (true) if a vertex attribute is stored as an
     *    unconverted
     *    double, and 0 (false) otherwise. The initial value is 0 ({@see
     *    GL20::GL_FALSE}).
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_ARRAY_DIVISOR}: $params returns a single
     *    value that is the frequency divisor used for instanced rendering. See
     *    {@see GL20::vertexAttribDivisor}. The initial value is 0.
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_BINDING}: $params returns a single value,
     *    the vertex buffer binding of the vertex attribute array $index.
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_RELATIVE_OFFSET}: $params returns a
     *    single value that is the byte offset of the first element relative to
     *    the start of the
     *    vertex buffer binding specified attribute fetches from. The initial
     *    value is 0.
     *
     *  - {@see GL20::GL_CURRENT_VERTEX_ATTRIB}: $params returns four values
     *    that represent the current value for the generic vertex attribute
     *    specified by
     *    index. Generic vertex attribute 0 is unique in that it has no current
     *    state, so an error will be generated if
     *    $index is 0. The initial value for all other generic vertex attributes
     *    is (0,0,0,1).
     *    {@see GL20::getVertexAttribdv} and {@see GL20::getVertexAttribfv}
     *    return the current attribute values as
     *    four single-precision floating-point values; {@see
     *    GL20::getVertexAttribiv} reads them as floating-point
     *    values and converts them to four integer values; {@see
     *    GL20::getVertexAttribIiv} and
     *    {@see GL20::getVertexAttribIuiv} read and return them as signed or
     *    unsigned integer values, respectively;
     *    {@see GL20::getVertexAttribLdv} reads and returns them as four
     *    double-precision floating-point values.
     *
     * All of the parameters except {@see GL20::GL_CURRENT_VERTEX_ATTRIB} represent state stored in the currently
     * bound vertex array object.
     *
     * @see http://docs.gl/gl2/glGetVertexAttrib
     * @see http://docs.gl/gl4/glGetVertexAttrib
     * @since 2.0
     * @param int $index
     * @param int $pname
     * @param float|null $params
     * @return void
     */
    public function getVertexAttribdv(int $index, int $pname, ?float &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLdouble', false);
        try {
            $__proc = $this->proc('glGetVertexAttribdv', 'void (*)(GLuint index, GLenum pname, GLdouble *params)');
            $__proc($index, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL20::getVertexAttrib} returns in $params the value of a generic vertex attribute parameter. The
     * generic vertex attribute to be queried is specified by $index, and the parameter to be queried is specified by
     * $pname.
     *
     * The accepted parameter names are as follows:
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_ARRAY_BUFFER_BINDING}: $params returns a
     *    single value, the name of the buffer object currently bound to the
     *    binding point
     *    corresponding to generic vertex attribute array $index. If no buffer
     *    object is bound, 0 is returned. The
     *    initial value is 0.
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_ARRAY_ENABLED}: $params returns a single
     *    value that is non-zero (true) if the vertex attribute array for $index
     *    is enabled
     *    and 0 (false) if it is disabled. The initial value is {@see
     *    GL20::GL_FALSE}.
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_ARRAY_SIZE}: $params returns a single
     *    value, the size of the vertex attribute array for $index. The size is
     *    the number
     *    of values for each element of the vertex attribute array, and it will
     *    be 1, 2, 3, or 4. The initial value is
     *    4.
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_ARRAY_STRIDE}: $params returns a single
     *    value, the array stride for (number of bytes between successive
     *    elements in) the
     *    vertex attribute array for $index. A value of 0 indicates that the
     *    array elements are stored sequentially in
     *    memory. The initial value is 0.
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_ARRAY_TYPE}: $params returns a single
     *    value, a symbolic constant indicating the array type for the vertex
     *    attribute
     *    array for $index. Possible values are {@see GL20::GL_BYTE}, {@see
     *    GL20::GL_UNSIGNED_BYTE},
     *    {@see GL20::GL_SHORT}, {@see GL20::GL_UNSIGNED_SHORT}, {@see
     *    GL20::GL_INT}, {@see GL20::GL_UNSIGNED_INT},
     *    {@see GL20::GL_FLOAT}, and {@see GL20::GL_DOUBLE}. The initial value
     *    is {@see GL20::GL_FLOAT}.
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_ARRAY_NORMALIZED}: $params returns a
     *    single value that is non-zero (true) if fixed-point data types for the
     *    vertex attribute
     *    array indicated by $index are normalized when they are converted to
     *    floating point, and 0 (false) otherwise.
     *    The initial value is {@see GL20::GL_FALSE}.
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_ARRAY_INTEGER}: $params returns a single
     *    value that is non-zero (true) if fixed-point data types for the vertex
     *    attribute
     *    array indicated by $index have integer data types, and 0 (false)
     *    otherwise. The initial value is 0
     *    ({@see GL20::GL_FALSE}).
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_ARRAY_LONG}: $param returns a single
     *    value that is non-zero (true) if a vertex attribute is stored as an
     *    unconverted
     *    double, and 0 (false) otherwise. The initial value is 0 ({@see
     *    GL20::GL_FALSE}).
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_ARRAY_DIVISOR}: $params returns a single
     *    value that is the frequency divisor used for instanced rendering. See
     *    {@see GL20::vertexAttribDivisor}. The initial value is 0.
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_BINDING}: $params returns a single value,
     *    the vertex buffer binding of the vertex attribute array $index.
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_RELATIVE_OFFSET}: $params returns a
     *    single value that is the byte offset of the first element relative to
     *    the start of the
     *    vertex buffer binding specified attribute fetches from. The initial
     *    value is 0.
     *
     *  - {@see GL20::GL_CURRENT_VERTEX_ATTRIB}: $params returns four values
     *    that represent the current value for the generic vertex attribute
     *    specified by
     *    index. Generic vertex attribute 0 is unique in that it has no current
     *    state, so an error will be generated if
     *    $index is 0. The initial value for all other generic vertex attributes
     *    is (0,0,0,1).
     *    {@see GL20::getVertexAttribdv} and {@see GL20::getVertexAttribfv}
     *    return the current attribute values as
     *    four single-precision floating-point values; {@see
     *    GL20::getVertexAttribiv} reads them as floating-point
     *    values and converts them to four integer values; {@see
     *    GL20::getVertexAttribIiv} and
     *    {@see GL20::getVertexAttribIuiv} read and return them as signed or
     *    unsigned integer values, respectively;
     *    {@see GL20::getVertexAttribLdv} reads and returns them as four
     *    double-precision floating-point values.
     *
     * All of the parameters except {@see GL20::GL_CURRENT_VERTEX_ATTRIB} represent state stored in the currently
     * bound vertex array object.
     *
     * @see http://docs.gl/gl2/glGetVertexAttrib
     * @see http://docs.gl/gl4/glGetVertexAttrib
     * @since 2.0
     * @param int $index
     * @param int $pname
     * @param float|null $params
     * @return void
     */
    public function getVertexAttribfv(int $index, int $pname, ?float &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLfloat', false);
        try {
            $__proc = $this->proc('glGetVertexAttribfv', 'void (*)(GLuint index, GLenum pname, GLfloat *params)');
            $__proc($index, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL20::getVertexAttrib} returns in $params the value of a generic vertex attribute parameter. The
     * generic vertex attribute to be queried is specified by $index, and the parameter to be queried is specified by
     * $pname.
     *
     * The accepted parameter names are as follows:
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_ARRAY_BUFFER_BINDING}: $params returns a
     *    single value, the name of the buffer object currently bound to the
     *    binding point
     *    corresponding to generic vertex attribute array $index. If no buffer
     *    object is bound, 0 is returned. The
     *    initial value is 0.
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_ARRAY_ENABLED}: $params returns a single
     *    value that is non-zero (true) if the vertex attribute array for $index
     *    is enabled
     *    and 0 (false) if it is disabled. The initial value is {@see
     *    GL20::GL_FALSE}.
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_ARRAY_SIZE}: $params returns a single
     *    value, the size of the vertex attribute array for $index. The size is
     *    the number
     *    of values for each element of the vertex attribute array, and it will
     *    be 1, 2, 3, or 4. The initial value is
     *    4.
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_ARRAY_STRIDE}: $params returns a single
     *    value, the array stride for (number of bytes between successive
     *    elements in) the
     *    vertex attribute array for $index. A value of 0 indicates that the
     *    array elements are stored sequentially in
     *    memory. The initial value is 0.
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_ARRAY_TYPE}: $params returns a single
     *    value, a symbolic constant indicating the array type for the vertex
     *    attribute
     *    array for $index. Possible values are {@see GL20::GL_BYTE}, {@see
     *    GL20::GL_UNSIGNED_BYTE},
     *    {@see GL20::GL_SHORT}, {@see GL20::GL_UNSIGNED_SHORT}, {@see
     *    GL20::GL_INT}, {@see GL20::GL_UNSIGNED_INT},
     *    {@see GL20::GL_FLOAT}, and {@see GL20::GL_DOUBLE}. The initial value
     *    is {@see GL20::GL_FLOAT}.
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_ARRAY_NORMALIZED}: $params returns a
     *    single value that is non-zero (true) if fixed-point data types for the
     *    vertex attribute
     *    array indicated by $index are normalized when they are converted to
     *    floating point, and 0 (false) otherwise.
     *    The initial value is {@see GL20::GL_FALSE}.
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_ARRAY_INTEGER}: $params returns a single
     *    value that is non-zero (true) if fixed-point data types for the vertex
     *    attribute
     *    array indicated by $index have integer data types, and 0 (false)
     *    otherwise. The initial value is 0
     *    ({@see GL20::GL_FALSE}).
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_ARRAY_LONG}: $param returns a single
     *    value that is non-zero (true) if a vertex attribute is stored as an
     *    unconverted
     *    double, and 0 (false) otherwise. The initial value is 0 ({@see
     *    GL20::GL_FALSE}).
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_ARRAY_DIVISOR}: $params returns a single
     *    value that is the frequency divisor used for instanced rendering. See
     *    {@see GL20::vertexAttribDivisor}. The initial value is 0.
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_BINDING}: $params returns a single value,
     *    the vertex buffer binding of the vertex attribute array $index.
     *
     *  - {@see GL20::GL_VERTEX_ATTRIB_RELATIVE_OFFSET}: $params returns a
     *    single value that is the byte offset of the first element relative to
     *    the start of the
     *    vertex buffer binding specified attribute fetches from. The initial
     *    value is 0.
     *
     *  - {@see GL20::GL_CURRENT_VERTEX_ATTRIB}: $params returns four values
     *    that represent the current value for the generic vertex attribute
     *    specified by
     *    index. Generic vertex attribute 0 is unique in that it has no current
     *    state, so an error will be generated if
     *    $index is 0. The initial value for all other generic vertex attributes
     *    is (0,0,0,1).
     *    {@see GL20::getVertexAttribdv} and {@see GL20::getVertexAttribfv}
     *    return the current attribute values as
     *    four single-precision floating-point values; {@see
     *    GL20::getVertexAttribiv} reads them as floating-point
     *    values and converts them to four integer values; {@see
     *    GL20::getVertexAttribIiv} and
     *    {@see GL20::getVertexAttribIuiv} read and return them as signed or
     *    unsigned integer values, respectively;
     *    {@see GL20::getVertexAttribLdv} reads and returns them as four
     *    double-precision floating-point values.
     *
     * All of the parameters except {@see GL20::GL_CURRENT_VERTEX_ATTRIB} represent state stored in the currently
     * bound vertex array object.
     *
     * @see http://docs.gl/gl2/glGetVertexAttrib
     * @see http://docs.gl/gl4/glGetVertexAttrib
     * @since 2.0
     * @param int $index
     * @param int $pname
     * @param int|null $params
     * @return void
     */
    public function getVertexAttribiv(int $index, int $pname, ?int &$params): void
    {
        $paramsCType = $this->info->ffi->new('GLint', false);
        try {
            $__proc = $this->proc('glGetVertexAttribiv', 'void (*)(GLuint index, GLenum pname, GLint *params)');
            $__proc($index, $pname, \FFI::addr($paramsCType));
        } finally {
            $params = $paramsCType->cdata;
            \FFI::free($paramsCType);
        }
    }

    /**
     * {@see GL20::isProgram} returns {@see GL20::GL_TRUE} if $program is the name of a program object previously
     * created with {@see GL20::createProgram} and not yet deleted with {@see GL20::deleteProgram}. If $program
     * is zero or a non-zero value that is not the name of a program object, or if an error occurs,
     * {@see GL20::isProgram} returns {@see GL20::GL_FALSE}.
     *
     * @see http://docs.gl/gl2/glIsProgram
     * @see http://docs.gl/gl4/glIsProgram
     * @since 2.0
     * @param int $program
     * @return bool
     */
    public function isProgram(int $program): bool
    {
        $__proc = $this->proc('glIsProgram', 'GLboolean (*)(GLuint program)');

        return $__proc($program) !== 0;
    }

    /**
     * {@see GL20::isShader} returns {@see GL20::GL_TRUE} if $shader is the name of a shader object previously
     * created with {@see GL20::createShader} and not yet deleted with {@see GL20::deleteShader}. If $shader is
     * zero or a non-zero value that is not the name of a shader object, or if an error occurs,
     * {@see GL20::isShader } returns {@see GL20::GL_FALSE}.
     *
     * @see http://docs.gl/gl2/glIsShader
     * @see http://docs.gl/gl4/glIsShader
     * @since 2.0
     * @param int $shader
     * @return bool
     */
    public function isShader(int $shader): bool
    {
        $__proc = $this->proc('glIsShader', 'GLboolean (*)(GLuint shader)');

        return $__proc($shader) !== 0;
    }

    /**
     * {@see GL20::linkProgram} links the program object specified by $program. If any shader objects of type
     * {@see GL20::GL_VERTEX_SHADER} are attached to $program, they will be used to create an executable that will
     * run on the programmable vertex processor. If any shader objects of type {@see GL20::GL_GEOMETRY_SHADER} are
     * attached to $program, they will be used to create an executable that will run on the programmable geometry
     * processor. If any shader objects of type {@see GL20::GL_FRAGMENT_SHADER} are attached to $program, they will
     * be used to create an executable that will run on the programmable fragment processor.
     *
     * The status of the link operation will be stored as part of the program object's state. This value will be set
     * to {@see GL20::GL_TRUE} if the program object was linked without errors and is ready for use, and
     * {@see GL20::GL_FALSE} otherwise. It can be queried by calling {@see GL20::getProgram} with arguments
     * $program and {@see GL20::GL_LINK_STATUS}.
     *
     * As a result of a successful link operation, all active user-defined uniform variables belonging to $program
     * will be initialized to 0, and each of the program object's active uniform variables will be assigned a
     * location that can be queried by calling {@see GL20::getUniformLocation}. Also, any active user-defined
     * attribute variables that have not been bound to a generic vertex attribute index will be bound to one at this
     * time.
     *
     * Linking of a program object can fail for a number of reasons as specified in the OpenGL Shading Language
     * Specification. The following lists some of the conditions that will cause a link error.
     *
     *  - The number of active attribute variables supported by the implementation has been exceeded.
     *  - The storage limit for uniform variables has been exceeded.
     *  - The number of active uniform variables supported by the implementation has been exceeded.
     *  - The {@see GL46::main} function is missing for the vertex, geometry or fragment shader.
     *  - A varying variable actually used in the fragment shader is not declared in the same way (or is not declared at
     *    all) in the vertex shader, or geometry shader if present.
     *  - A reference to a function or variable name is unresolved.
     *  - A shared global is declared with two different types or two different initial values.
     *  - One or more of the attached shader objects has not been successfully compiled.
     *  - Binding a generic attribute matrix caused some rows of the matrix to fall outside the allowed maximum of
     *    {@see GL20::GL_MAX_VERTEX_ATTRIBS}.
     *  - Not enough contiguous vertex attribute slots could be found to bind attribute matrices.
     *  - The program object contains objects to form a fragment shader but does not contain objects to form a vertex
     *    shader.
     *  - The program object contains objects to form a geometry shader but does not contain objects to form a vertex
     *    shader.
     *  - The program object contains objects to form a geometry shader and the input primitive type, output primitive
     *    type, or maximum output vertex count is not specified in any compiled geometry shader object.
     *  - The program object contains objects to form a geometry shader and the input primitive type, output primitive
     *    type, or maximum output vertex count is specified differently in multiple geometry shader objects.
     *  - The number of active outputs in the fragment shader is greater than the value of
     *    {@see GL20::GL_MAX_DRAW_BUFFERS}.
     *  - The program has an active output assigned to a location greater than or equal to the value of
     *    {@see GL20::GL_MAX_DUAL_SOURCE_DRAW_BUFFERS} and has an active output assigned an index greater than or equal
     *    to one.
     *  - More than one varying out variable is bound to the same number and index.
     *  - The explicit binding assigments do not leave enough space for the linker to automatically assign a location
     *    for a varying out array, which requires multiple contiguous locations.
     *  - The $count specified by {@see GL20::transformFeedbackVaryings} is non-zero, but the program object has no
     *    vertex or geometry shader.
     *  - Any variable name specified to {@see GL20::transformFeedbackVaryings} in the $varyings array is not declared
     *    as an output in the vertex shader (or the geometry shader, if active).
     *  - Any two entries in the $varyings array given {@see GL20::transformFeedbackVaryings} specify the same varying
     *    variable.
     *  - The total number of components to capture in any transform feedback varying variable is greater than the
     *    constant {@see GL20::GL_MAX_TRANSFORM_FEEDBACK_SEPARATE_COMPONENTS} and the buffer mode is
     *    {@see GL20::GL_SEPARATE_ATTRIBS}.
     *
     * When a program object has been successfully linked, the program object can be made part of current state by
     * calling {@see GL20::useProgram}. Whether or not the link operation was successful, the program object's
     * information log will be overwritten. The information log can be retrieved by calling
     * {@see GL20::getProgramInfoLog}.
     *
     * {@see GL20::linkProgram} will also install the generated executables as part of the current rendering state
     * if the link operation was successful and the specified program object is already currently in use as a result
     * of a previous call to {@see GL20::useProgram}. If the program object currently in use is relinked
     * unsuccessfully, its link status will be set to {@see GL20::GL_FALSE} , but the executables and associated
     * state will remain part of the current state until a subsequent call to {@see GL20::useProgram} removes it
     * from use. After it is removed from use, it cannot be made part of current state until it has been successfully
     * relinked.
     *
     * If $program contains shader objects of type {@see GL20::GL_VERTEX_SHADER}, and optionally of type
     * {@see GL20::GL_GEOMETRY_SHADER}, but does not contain shader objects of type {@see GL20::GL_FRAGMENT_SHADER},
     * the vertex shader executable will be installed on the programmable vertex processor, the geometry shader
     * executable, if present, will be installed on the programmable geometry processor, but no executable will be
     * installed on the fragment processor. The results of rasterizing primitives with such a program will be
     * undefined.
     *
     * The program object's information log is updated and the program is generated at the time of the link
     * operation. After the link operation, applications are free to modify attached shader objects, compile attached
     * shader objects, detach shader objects, delete shader objects, and attach additional shader objects. None of
     * these operations affects the information log or the program that is part of the program object.
     *
     * @see http://docs.gl/gl2/glLinkProgram
     * @see http://docs.gl/gl4/glLinkProgram
     * @since 2.0
     * @param int $program
     * @return void
     */
    public function linkProgram(int $program): void
    {
        $__proc = $this->proc('glLinkProgram', 'void (*)(GLuint program)');
        $__proc($program);
    }

    /**
     * {@see GL20::shaderSource} sets the source code in $shader to the source code in the array of strings
     * specified by $string. Any source code previously stored in the shader object is completely replaced. The
     * number of strings in the array is specified by $count. If $length is {@see GL46::NULL}, each string is assumed
     * to be null terminated. If $length is a value other than {@see GL46::NULL}, it points to an array containing a
     * string length for each of the corresponding elements of $string. Each element in the $length array may contain
     * the length of the corresponding string (the null character is not counted as part of the string length) or a
     * value less than 0 to indicate that the string is null terminated. The source code strings are not scanned or
     * parsed at this time; they are simply copied into the specified shader object.
     *
     * @see http://docs.gl/gl2/glShaderSource
     * @see http://docs.gl/gl4/glShaderSource
     * @since 2.0
     * @param int $shader
     * @param int $count
     * @param array|string[] $string
     * @param CData|null $length
     * @return void
     */
    public function shaderSource(int $shader, int $count, array $string, ?CData $length): void
    {
        $stringCType = \FFI::new('char*[' . \count($string) . ']');
        foreach ($string as $i => $v) {
            $stringCType[$i] = Util::charPtr($v);
        }

        $__proc = $this->proc('glShaderSource',
            'void (*)(GLuint shader, GLsizei count, const GLchar *const *string, const GLint *length)');
        $__proc($shader, $count, $stringCType, $length);
    }

    /**
     * Stenciling, like depth-buffering, enables and disables drawing on a per-pixel basis. You draw into the stencil
     * planes using GL drawing primitives, then render geometry and images, using the stencil planes to mask out
     * portions of the screen. Stenciling is typically used in multipass rendering algorithms to achieve special
     * effects, such as decals, outlining, and constructive solid geometry rendering.
     *
     * The stencil test conditionally eliminates a pixel based on the outcome of a comparison between the reference
     * value and the value in the stencil buffer. To enable and disable the test, call {@see GL20::enable} and
     * {@see GL20::disable} with argument {@see GL20::GL_STENCIL_TEST}. To specify actions based on the outcome of
     * the stencil test, call {@see GL20::stencilOp} or {@see GL20::stencilOpSeparate}.
     *
     * There can be two separate sets of $func, $ref, and $mask parameters; one affects back-facing polygons, and the
     * other affects front-facing polygons as well as other non-polygon primitives. {@see GL20::stencilFunc} sets
     * both front and back stencil state to the same values, as if {@see GL20::stencilFuncSeparate} were called
     * with $face set to {@see GL20::GL_FRONT_AND_BACK}.
     *
     * $func is a symbolic constant that determines the stencil comparison function. It accepts one of eight values,
     * shown in the following list. $ref is an integer reference value that is used in the stencil comparison. It is
     * clamped to the range    0  2 n  - 1   , where n is the number of bitplanes in the stencil buffer. $mask is
     * bitwise ANDed with both the reference value and the stored stencil value, with the ANDed values participating
     * in the comparison.
     *
     * If stencil represents the value stored in the corresponding stencil buffer location, the following list shows
     * the effect of each comparison function that can be specified by $func. Only if the comparison succeeds is the
     * pixel passed through to the next stage in the rasterization process (see {@see GL20::stencilOp}). All tests
     * treat stencil values as unsigned integers in the range    0  2 n  - 1   , where n is the number of bitplanes
     * in the stencil buffer.
     *
     * The following values are accepted by $func:
     *
     *  - {@see GL20::GL_NEVER}: Always fails.
     *
     *  - {@see GL20::GL_LESS}: Passes if ( $ref &amp; $mask ) &lt; ( stencil
     *    &amp; $mask ).
     *
     *  - {@see GL20::GL_LEQUAL}: Passes if ( $ref &amp; $mask ) &lt;= ( stencil
     *    &amp; $mask ).
     *
     *  - {@see GL20::GL_GREATER}: Passes if ( $ref &amp; $mask ) &gt; ( stencil
     *    &amp; $mask ).
     *
     *  - {@see GL20::GL_GEQUAL}: Passes if ( $ref &amp; $mask ) &gt;= ( stencil
     *    &amp; $mask ).
     *
     *  - {@see GL20::GL_EQUAL}: Passes if ( $ref &amp; $mask ) = ( stencil
     *    &amp; $mask ).
     *
     *  - {@see GL20::GL_NOTEQUAL}: Passes if ( $ref &amp; $mask ) != ( stencil
     *    &amp; $mask ).
     *
     *  - {@see GL20::GL_ALWAYS}: Always passes.
     *
     * @see http://docs.gl/gl2/glStencilFuncSeparate
     * @see http://docs.gl/gl4/glStencilFuncSeparate
     * @since 2.0
     * @param int $face
     * @param int $func
     * @param int $ref
     * @param int $mask
     * @return void
     */
    public function stencilFuncSeparate(int $face, int $func, int $ref, int $mask): void
    {
        $__proc = $this->proc('glStencilFuncSeparate',
            'void (*)(GLenum face, GLenum func, GLint ref, GLuint mask)');
        $__proc($face, $func, $ref, $mask);
    }

    /**
     * {@see GL20::stencilMaskSeparate} controls the writing of individual bits in the stencil planes. The least
     * significant n bits of $mask, where n is the number of bits in the stencil buffer, specify a mask. Where a 1
     * appears in the mask, it's possible to write to the corresponding bit in the stencil buffer. Where a 0 appears,
     * the corresponding bit is write-protected. Initially, all bits are enabled for writing.
     *
     * There can be two separate $mask writemasks; one affects back-facing polygons, and the other affects
     * front-facing polygons as well as other non-polygon primitives. {@see GL20::stencilMask} sets both front and
     * back stencil writemasks to the same values, as if {@see GL20::stencilMaskSeparate} were called with $face
     * set to {@see GL20::GL_FRONT_AND_BACK}.
     *
     * @see http://docs.gl/gl2/glStencilMaskSeparate
     * @see http://docs.gl/gl4/glStencilMaskSeparate
     * @since 2.0
     * @param int $face
     * @param int $mask
     * @return void
     */
    public function stencilMaskSeparate(int $face, int $mask): void
    {
        $__proc = $this->proc('glStencilMaskSeparate', 'void (*)(GLenum face, GLuint mask)');
        $__proc($face, $mask);
    }

    /**
     * Stenciling, like depth-buffering, enables and disables drawing on a per-pixel basis. You draw into the stencil
     * planes using GL drawing primitives, then render geometry and images, using the stencil planes to mask out
     * portions of the screen. Stenciling is typically used in multipass rendering algorithms to achieve special
     * effects, such as decals, outlining, and constructive solid geometry rendering.
     *
     * The stencil test conditionally eliminates a pixel based on the outcome of a comparison between the value in
     * the stencil buffer and a reference value. To enable and disable the test, call {@see GL20::enable} and
     * {@see GL20::disable} with argument {@see GL20::GL_STENCIL_TEST}; to control it, call
     * {@see GL20::stencilFunc} or {@see GL20::stencilFuncSeparate}.
     *
     * There can be two separate sets of $sfail, $dpfail, and $dppass parameters; one affects back-facing polygons,
     * and the other affects front-facing polygons as well as other non-polygon primitives. {@see GL20::stencilOp}
     * sets both front and back stencil state to the same values, as if {@see GL20::stencilOpSeparate} were called
     * with $face set to {@see GL20::GL_FRONT_AND_BACK}.
     *
     * {@see GL20::stencilOpSeparate} takes three arguments that indicate what happens to the stored stencil value
     * while stenciling is enabled. If the stencil test fails, no change is made to the pixel's color or depth
     * buffers, and $sfail specifies what happens to the stencil buffer contents. The following eight actions are
     * possible.
     *
     *  - {@see GL20::GL_KEEP}: Keeps the current value.
     *
     *  - {@see GL20::GL_ZERO}: Sets the stencil buffer value to 0.
     *
     *  - {@see GL20::GL_REPLACE}: Sets the stencil buffer value to ref, as
     *    specified by {@see GL20::stencilFunc}.
     *
     *  - {@see GL20::GL_INCR}: Increments the current stencil buffer value.
     *    Clamps to the maximum representable unsigned value.
     *
     *  - {@see GL20::GL_INCR_WRAP}: Increments the current stencil buffer
     *    value. Wraps stencil buffer value to zero when incrementing the
     *    maximum
     *    representable unsigned value.
     *
     *  - {@see GL20::GL_DECR}: Decrements the current stencil buffer value.
     *    Clamps to 0.
     *
     *  - {@see GL20::GL_DECR_WRAP}: Decrements the current stencil buffer
     *    value. Wraps stencil buffer value to the maximum representable
     *    unsigned
     *    value when decrementing a stencil buffer value of zero.
     *
     *  - {@see GL20::GL_INVERT}: Bitwise inverts the current stencil buffer
     *    value.
     *
     * Stencil buffer values are treated as unsigned integers. When incremented and decremented, values are clamped
     * to 0 and    2 n  - 1  , where n is the value returned by querying {@see GL20::GL_STENCIL_BITS}.
     *
     * The other two arguments to {@see GL20::stencilOpSeparate} specify stencil buffer actions that depend on
     * whether subsequent depth buffer tests succeed ($dppass) or fail ($dpfail) (see {@see GL20::depthFunc}). The
     * actions are specified using the same eight symbolic constants as $sfail. Note that $dpfail is ignored when
     * there is no depth buffer, or when the depth buffer is not enabled. In these cases, $sfail and $dppass specify
     * stencil action when the stencil test fails and passes, respectively.
     *
     * @see http://docs.gl/gl2/glStencilOpSeparate
     * @see http://docs.gl/gl4/glStencilOpSeparate
     * @since 2.0
     * @param int $face
     * @param int $sfail
     * @param int $dpfail
     * @param int $dppass
     * @return void
     */
    public function stencilOpSeparate(int $face, int $sfail, int $dpfail, int $dppass): void
    {
        $__proc = $this->proc('glStencilOpSeparate',
            'void (*)(GLenum face, GLenum sfail, GLenum dpfail, GLenum dppass)');
        $__proc($face, $sfail, $dpfail, $dppass);
    }

    /**
     * {@see GL20::uniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL20::getUniformLocation}. {@see GL20::uniform} operates on the program object that was made part of
     * current state by calling {@see GL20::useProgram}.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
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
     * linked successfully. They retain the values assigned to them by a call to {@see GL20::uniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
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
     * {@see GL20::uniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL20::uniform3f} or {@see GL20::uniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL20::uniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL20::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL20::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param float $v0
     * @return void
     */
    public function uniform1f(int $location, float $v0): void
    {
        $__proc = $this->proc('glUniform1f', 'void (*)(GLint location, GLfloat v0)');
        $__proc($location, $v0);
    }

    /**
     * {@see GL20::uniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL20::getUniformLocation}. {@see GL20::uniform} operates on the program object that was made part of
     * current state by calling {@see GL20::useProgram}.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
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
     * linked successfully. They retain the values assigned to them by a call to {@see GL20::uniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
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
     * {@see GL20::uniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL20::uniform3f} or {@see GL20::uniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL20::uniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL20::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL20::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param int $count
     * @param CData|null $value
     * @return void
     */
    public function uniform1fv(int $location, int $count, ?CData $value): void
    {
        $__proc = $this->proc('glUniform1fv', 'void (*)(GLint location, GLsizei count, const GLfloat *value)');
        $__proc($location, $count, $value);
    }

    /**
     * {@see GL20::uniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL20::getUniformLocation}. {@see GL20::uniform} operates on the program object that was made part of
     * current state by calling {@see GL20::useProgram}.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
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
     * linked successfully. They retain the values assigned to them by a call to {@see GL20::uniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
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
     * {@see GL20::uniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL20::uniform3f} or {@see GL20::uniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL20::uniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL20::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL20::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param int $v0
     * @return void
     */
    public function uniform1i(int $location, int $v0): void
    {
        $__proc = $this->proc('glUniform1i', 'void (*)(GLint location, GLint v0)');
        $__proc($location, $v0);
    }

    /**
     * {@see GL20::uniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL20::getUniformLocation}. {@see GL20::uniform} operates on the program object that was made part of
     * current state by calling {@see GL20::useProgram}.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
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
     * linked successfully. They retain the values assigned to them by a call to {@see GL20::uniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
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
     * {@see GL20::uniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL20::uniform3f} or {@see GL20::uniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL20::uniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL20::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL20::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param int $count
     * @param CData|null $value
     * @return void
     */
    public function uniform1iv(int $location, int $count, ?CData $value): void
    {
        $__proc = $this->proc('glUniform1iv', 'void (*)(GLint location, GLsizei count, const GLint *value)');
        $__proc($location, $count, $value);
    }

    /**
     * {@see GL20::uniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL20::getUniformLocation}. {@see GL20::uniform} operates on the program object that was made part of
     * current state by calling {@see GL20::useProgram}.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
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
     * linked successfully. They retain the values assigned to them by a call to {@see GL20::uniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
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
     * {@see GL20::uniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL20::uniform3f} or {@see GL20::uniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL20::uniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL20::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL20::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param float $v0
     * @param float $v1
     * @return void
     */
    public function uniform2f(int $location, float $v0, float $v1): void
    {
        $__proc = $this->proc('glUniform2f', 'void (*)(GLint location, GLfloat v0, GLfloat v1)');
        $__proc($location, $v0, $v1);
    }

    /**
     * {@see GL20::uniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL20::getUniformLocation}. {@see GL20::uniform} operates on the program object that was made part of
     * current state by calling {@see GL20::useProgram}.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
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
     * linked successfully. They retain the values assigned to them by a call to {@see GL20::uniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
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
     * {@see GL20::uniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL20::uniform3f} or {@see GL20::uniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL20::uniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL20::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL20::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param int $count
     * @param CData|null $value
     * @return void
     */
    public function uniform2fv(int $location, int $count, ?CData $value): void
    {
        $__proc = $this->proc('glUniform2fv', 'void (*)(GLint location, GLsizei count, const GLfloat *value)');
        $__proc($location, $count, $value);
    }

    /**
     * {@see GL20::uniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL20::getUniformLocation}. {@see GL20::uniform} operates on the program object that was made part of
     * current state by calling {@see GL20::useProgram}.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
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
     * linked successfully. They retain the values assigned to them by a call to {@see GL20::uniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
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
     * {@see GL20::uniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL20::uniform3f} or {@see GL20::uniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL20::uniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL20::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL20::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param int $v0
     * @param int $v1
     * @return void
     */
    public function uniform2i(int $location, int $v0, int $v1): void
    {
        $__proc = $this->proc('glUniform2i', 'void (*)(GLint location, GLint v0, GLint v1)');
        $__proc($location, $v0, $v1);
    }

    /**
     * {@see GL20::uniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL20::getUniformLocation}. {@see GL20::uniform} operates on the program object that was made part of
     * current state by calling {@see GL20::useProgram}.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
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
     * linked successfully. They retain the values assigned to them by a call to {@see GL20::uniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
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
     * {@see GL20::uniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL20::uniform3f} or {@see GL20::uniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL20::uniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL20::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL20::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param int $count
     * @param CData|null $value
     * @return void
     */
    public function uniform2iv(int $location, int $count, ?CData $value): void
    {
        $__proc = $this->proc('glUniform2iv', 'void (*)(GLint location, GLsizei count, const GLint *value)');
        $__proc($location, $count, $value);
    }

    /**
     * {@see GL20::uniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL20::getUniformLocation}. {@see GL20::uniform} operates on the program object that was made part of
     * current state by calling {@see GL20::useProgram}.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
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
     * linked successfully. They retain the values assigned to them by a call to {@see GL20::uniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
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
     * {@see GL20::uniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL20::uniform3f} or {@see GL20::uniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL20::uniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL20::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL20::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param float $v0
     * @param float $v1
     * @param float $v2
     * @return void
     */
    public function uniform3f(int $location, float $v0, float $v1, float $v2): void
    {
        $__proc = $this->proc('glUniform3f', 'void (*)(GLint location, GLfloat v0, GLfloat v1, GLfloat v2)');
        $__proc($location, $v0, $v1, $v2);
    }

    /**
     * {@see GL20::uniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL20::getUniformLocation}. {@see GL20::uniform} operates on the program object that was made part of
     * current state by calling {@see GL20::useProgram}.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
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
     * linked successfully. They retain the values assigned to them by a call to {@see GL20::uniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
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
     * {@see GL20::uniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL20::uniform3f} or {@see GL20::uniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL20::uniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL20::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL20::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param int $count
     * @param CData|null $value
     * @return void
     */
    public function uniform3fv(int $location, int $count, ?CData $value): void
    {
        $__proc = $this->proc('glUniform3fv', 'void (*)(GLint location, GLsizei count, const GLfloat *value)');
        $__proc($location, $count, $value);
    }

    /**
     * {@see GL20::uniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL20::getUniformLocation}. {@see GL20::uniform} operates on the program object that was made part of
     * current state by calling {@see GL20::useProgram}.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
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
     * linked successfully. They retain the values assigned to them by a call to {@see GL20::uniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
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
     * {@see GL20::uniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL20::uniform3f} or {@see GL20::uniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL20::uniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL20::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL20::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param int $v0
     * @param int $v1
     * @param int $v2
     * @return void
     */
    public function uniform3i(int $location, int $v0, int $v1, int $v2): void
    {
        $__proc = $this->proc('glUniform3i', 'void (*)(GLint location, GLint v0, GLint v1, GLint v2)');
        $__proc($location, $v0, $v1, $v2);
    }

    /**
     * {@see GL20::uniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL20::getUniformLocation}. {@see GL20::uniform} operates on the program object that was made part of
     * current state by calling {@see GL20::useProgram}.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
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
     * linked successfully. They retain the values assigned to them by a call to {@see GL20::uniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
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
     * {@see GL20::uniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL20::uniform3f} or {@see GL20::uniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL20::uniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL20::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL20::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param int $count
     * @param CData|null $value
     * @return void
     */
    public function uniform3iv(int $location, int $count, ?CData $value): void
    {
        $__proc = $this->proc('glUniform3iv', 'void (*)(GLint location, GLsizei count, const GLint *value)');
        $__proc($location, $count, $value);
    }

    /**
     * {@see GL20::uniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL20::getUniformLocation}. {@see GL20::uniform} operates on the program object that was made part of
     * current state by calling {@see GL20::useProgram}.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
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
     * linked successfully. They retain the values assigned to them by a call to {@see GL20::uniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
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
     * {@see GL20::uniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL20::uniform3f} or {@see GL20::uniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL20::uniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL20::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL20::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param float $v0
     * @param float $v1
     * @param float $v2
     * @param float $v3
     * @return void
     */
    public function uniform4f(int $location, float $v0, float $v1, float $v2, float $v3): void
    {
        $__proc = $this->proc('glUniform4f',
            'void (*)(GLint location, GLfloat v0, GLfloat v1, GLfloat v2, GLfloat v3)');
        $__proc($location, $v0, $v1, $v2, $v3);
    }

    /**
     * {@see GL20::uniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL20::getUniformLocation}. {@see GL20::uniform} operates on the program object that was made part of
     * current state by calling {@see GL20::useProgram}.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
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
     * linked successfully. They retain the values assigned to them by a call to {@see GL20::uniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
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
     * {@see GL20::uniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL20::uniform3f} or {@see GL20::uniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL20::uniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL20::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL20::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param int $count
     * @param CData|null $value
     * @return void
     */
    public function uniform4fv(int $location, int $count, ?CData $value): void
    {
        $__proc = $this->proc('glUniform4fv', 'void (*)(GLint location, GLsizei count, const GLfloat *value)');
        $__proc($location, $count, $value);
    }

    /**
     * {@see GL20::uniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL20::getUniformLocation}. {@see GL20::uniform} operates on the program object that was made part of
     * current state by calling {@see GL20::useProgram}.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
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
     * linked successfully. They retain the values assigned to them by a call to {@see GL20::uniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
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
     * {@see GL20::uniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL20::uniform3f} or {@see GL20::uniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL20::uniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL20::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL20::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param int $v0
     * @param int $v1
     * @param int $v2
     * @param int $v3
     * @return void
     */
    public function uniform4i(int $location, int $v0, int $v1, int $v2, int $v3): void
    {
        $__proc = $this->proc('glUniform4i', 'void (*)(GLint location, GLint v0, GLint v1, GLint v2, GLint v3)');
        $__proc($location, $v0, $v1, $v2, $v3);
    }

    /**
     * {@see GL20::uniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL20::getUniformLocation}. {@see GL20::uniform} operates on the program object that was made part of
     * current state by calling {@see GL20::useProgram}.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
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
     * linked successfully. They retain the values assigned to them by a call to {@see GL20::uniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
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
     * {@see GL20::uniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL20::uniform3f} or {@see GL20::uniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL20::uniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL20::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL20::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param int $count
     * @param CData|null $value
     * @return void
     */
    public function uniform4iv(int $location, int $count, ?CData $value): void
    {
        $__proc = $this->proc('glUniform4iv', 'void (*)(GLint location, GLsizei count, const GLint *value)');
        $__proc($location, $count, $value);
    }

    /**
     * {@see GL20::uniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL20::getUniformLocation}. {@see GL20::uniform} operates on the program object that was made part of
     * current state by calling {@see GL20::useProgram}.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
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
     * linked successfully. They retain the values assigned to them by a call to {@see GL20::uniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
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
     * {@see GL20::uniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL20::uniform3f} or {@see GL20::uniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL20::uniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL20::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL20::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glLoadMatrix
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl2/gluPickMatrix
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function uniformMatrix2fv(int $location, int $count, int $transpose, ?CData $value): void
    {
        $__proc = $this->proc('glUniformMatrix2fv',
            'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $__proc($location, $count, $transpose, $value);
    }

    /**
     * {@see GL20::uniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL20::getUniformLocation}. {@see GL20::uniform} operates on the program object that was made part of
     * current state by calling {@see GL20::useProgram}.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
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
     * linked successfully. They retain the values assigned to them by a call to {@see GL20::uniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
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
     * {@see GL20::uniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL20::uniform3f} or {@see GL20::uniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL20::uniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL20::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL20::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glLoadMatrix
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl2/gluPickMatrix
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function uniformMatrix3fv(int $location, int $count, int $transpose, ?CData $value): void
    {
        $__proc = $this->proc('glUniformMatrix3fv',
            'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $__proc($location, $count, $transpose, $value);
    }

    /**
     * {@see GL20::uniform} modifies the value of a uniform variable or a uniform variable array. The location of
     * the uniform variable to be modified is specified by $location, which should be a value returned by
     * {@see GL20::getUniformLocation}. {@see GL20::uniform} operates on the program object that was made part of
     * current state by calling {@see GL20::useProgram}.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}} are used to change the value of the uniform variable
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
     * linked successfully. They retain the values assigned to them by a call to {@see GL20::uniform } until the
     * next successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands {@see GL20::uniform{1|2|3|4}{f|i|ui}v} can be used to modify a single uniform variable or a
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
     * {@see GL20::uniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., {@see GL20::uniform3f} or {@see GL20::uniform3fv} can be used to load a uniform
     * variable array of type vec3). The number of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands {@see GL20::uniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv} are used to modify a matrix or an
     * array of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The
     * number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values), the number {@see GL46::3} indicates a 3 × 3
     * matrix (i.e., 9 values), and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16 values). Non-square
     * matrix dimensionality is explicit, with the first number representing the number of columns and the second
     * number representing the number of rows. For example, {@see GL46::2x4} indicates a 2 × 4 matrix with 2 columns
     * and 4 rows (i.e., 8 values). If $transpose is {@see GL20::GL_FALSE}, each matrix is assumed to be supplied in
     * column major order. If $transpose is {@see GL20::GL_TRUE}, each matrix is assumed to be supplied in row major
     * order. The $count argument indicates the number of matrices to be passed. A count of 1 should be used if
     * modifying the value of a single matrix, and a count greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl2/glLoadMatrix
     * @see http://docs.gl/gl2/glUniform
     * @see http://docs.gl/gl2/gluPickMatrix
     * @see http://docs.gl/gl4/glUniform
     * @since 2.0
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param CData|null $value
     * @return void
     */
    public function uniformMatrix4fv(int $location, int $count, int $transpose, ?CData $value): void
    {
        $__proc = $this->proc('glUniformMatrix4fv',
            'void (*)(GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $__proc($location, $count, $transpose, $value);
    }

    /**
     * {@see GL20::useProgram} installs the program object specified by $program as part of current rendering
     * state. One or more executables are created in a program object by successfully attaching shader objects to it
     * with {@see GL20::attachShader}, successfully compiling the shader objects with {@see GL20::compileShader},
     * and successfully linking the program object with {@see GL20::linkProgram}.
     *
     * A program object will contain an executable that will run on the vertex processor if it contains one or more
     * shader objects of type {@see GL20::GL_VERTEX_SHADER} that have been successfully compiled and linked. A
     * program object will contain an executable that will run on the geometry processor if it contains one or more
     * shader objects of type {@see GL20::GL_GEOMETRY_SHADER} that have been successfully compiled and linked.
     * Similarly, a program object will contain an executable that will run on the fragment processor if it contains
     * one or more shader objects of type {@see GL20::GL_FRAGMENT_SHADER} that have been successfully compiled and
     * linked.
     *
     * While a program object is in use, applications are free to modify attached shader objects, compile attached
     * shader objects, attach additional shader objects, and detach or delete shader objects. None of these
     * operations will affect the executables that are part of the current state. However, relinking the program
     * object that is currently in use will install the program object as part of the current rendering state if the
     * link operation was successful (see {@see GL20::linkProgram} ). If the program object currently in use is
     * relinked unsuccessfully, its link status will be set to {@see GL20::GL_FALSE}, but the executables and
     * associated state will remain part of the current state until a subsequent call to {@see GL20::useProgram}
     * removes it from use. After it is removed from use, it cannot be made part of current state until it has been
     * successfully relinked.
     *
     * If $program is zero, then the current rendering state refers to an invalid program object and the results of
     * shader execution are undefined. However, this is not an error.
     *
     * If $program does not contain shader objects of type {@see GL20::GL_FRAGMENT_SHADER}, an executable will be
     * installed on the vertex, and possibly geometry processors, but the results of fragment shader execution will
     * be undefined.
     *
     * @see http://docs.gl/gl2/glUseProgram
     * @see http://docs.gl/gl4/glUseProgram
     * @since 2.0
     * @param int $program
     * @return void
     */
    public function useProgram(int $program): void
    {
        $__proc = $this->proc('glUseProgram', 'void (*)(GLuint program)');
        $__proc($program);
    }

    /**
     * {@see GL20::validateProgram} checks to see whether the executables contained in $program can execute given
     * the current OpenGL state. The information generated by the validation process will be stored in $program's
     * information log. The validation information may consist of an empty string, or it may be a string containing
     * information about how the current program object interacts with the rest of current OpenGL state. This
     * provides a way for OpenGL implementers to convey more information about why the current program is
     * inefficient, suboptimal, failing to execute, and so on.
     *
     * The status of the validation operation will be stored as part of the program object's state. This value will
     * be set to {@see GL20::GL_TRUE} if the validation succeeded, and {@see GL20::GL_FALSE} otherwise. It can be
     * queried by calling {@see GL20::getProgram} with arguments $program and {@see GL20::GL_VALIDATE_STATUS}. If
     * validation is successful, $program is guaranteed to execute given the current state. Otherwise, $program is
     * guaranteed to not execute.
     *
     * This function is typically useful only during application development. The informational string stored in the
     * information log is completely implementation dependent; therefore, an application should not expect different
     * OpenGL implementations to produce identical information strings.
     *
     * @see http://docs.gl/gl2/glValidateProgram
     * @see http://docs.gl/gl4/glValidateProgram
     * @since 2.0
     * @param int $program
     * @return void
     */
    public function validateProgram(int $program): void
    {
        $__proc = $this->proc('glValidateProgram', 'void (*)(GLuint program)');
        $__proc($program);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param float $x
     * @return void
     */
    public function vertexAttrib1d(int $index, float $x): void
    {
        $__proc = $this->proc('glVertexAttrib1d', 'void (*)(GLuint index, GLdouble x)');
        $__proc($index, $x);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param CData|null $v
     * @return void
     */
    public function vertexAttrib1dv(int $index, ?CData $v): void
    {
        $__proc = $this->proc('glVertexAttrib1dv', 'void (*)(GLuint index, const GLdouble *v)');
        $__proc($index, $v);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param float $x
     * @return void
     */
    public function vertexAttrib1f(int $index, float $x): void
    {
        $__proc = $this->proc('glVertexAttrib1f', 'void (*)(GLuint index, GLfloat x)');
        $__proc($index, $x);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param CData|null $v
     * @return void
     */
    public function vertexAttrib1fv(int $index, ?CData $v): void
    {
        $__proc = $this->proc('glVertexAttrib1fv', 'void (*)(GLuint index, const GLfloat *v)');
        $__proc($index, $v);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param int $x
     * @return void
     */
    public function vertexAttrib1s(int $index, int $x): void
    {
        $__proc = $this->proc('glVertexAttrib1s', 'void (*)(GLuint index, GLshort x)');
        $__proc($index, $x);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param CData|null $v
     * @return void
     */
    public function vertexAttrib1sv(int $index, ?CData $v): void
    {
        $__proc = $this->proc('glVertexAttrib1sv', 'void (*)(GLuint index, const GLshort *v)');
        $__proc($index, $v);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param float $x
     * @param float $y
     * @return void
     */
    public function vertexAttrib2d(int $index, float $x, float $y): void
    {
        $__proc = $this->proc('glVertexAttrib2d', 'void (*)(GLuint index, GLdouble x, GLdouble y)');
        $__proc($index, $x, $y);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param CData|null $v
     * @return void
     */
    public function vertexAttrib2dv(int $index, ?CData $v): void
    {
        $__proc = $this->proc('glVertexAttrib2dv', 'void (*)(GLuint index, const GLdouble *v)');
        $__proc($index, $v);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param float $x
     * @param float $y
     * @return void
     */
    public function vertexAttrib2f(int $index, float $x, float $y): void
    {
        $__proc = $this->proc('glVertexAttrib2f', 'void (*)(GLuint index, GLfloat x, GLfloat y)');
        $__proc($index, $x, $y);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param CData|null $v
     * @return void
     */
    public function vertexAttrib2fv(int $index, ?CData $v): void
    {
        $__proc = $this->proc('glVertexAttrib2fv', 'void (*)(GLuint index, const GLfloat *v)');
        $__proc($index, $v);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param int $x
     * @param int $y
     * @return void
     */
    public function vertexAttrib2s(int $index, int $x, int $y): void
    {
        $__proc = $this->proc('glVertexAttrib2s', 'void (*)(GLuint index, GLshort x, GLshort y)');
        $__proc($index, $x, $y);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param CData|null $v
     * @return void
     */
    public function vertexAttrib2sv(int $index, ?CData $v): void
    {
        $__proc = $this->proc('glVertexAttrib2sv', 'void (*)(GLuint index, const GLshort *v)');
        $__proc($index, $v);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param float $x
     * @param float $y
     * @param float $z
     * @return void
     */
    public function vertexAttrib3d(int $index, float $x, float $y, float $z): void
    {
        $__proc = $this->proc('glVertexAttrib3d', 'void (*)(GLuint index, GLdouble x, GLdouble y, GLdouble z)');
        $__proc($index, $x, $y, $z);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param CData|null $v
     * @return void
     */
    public function vertexAttrib3dv(int $index, ?CData $v): void
    {
        $__proc = $this->proc('glVertexAttrib3dv', 'void (*)(GLuint index, const GLdouble *v)');
        $__proc($index, $v);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param float $x
     * @param float $y
     * @param float $z
     * @return void
     */
    public function vertexAttrib3f(int $index, float $x, float $y, float $z): void
    {
        $__proc = $this->proc('glVertexAttrib3f', 'void (*)(GLuint index, GLfloat x, GLfloat y, GLfloat z)');
        $__proc($index, $x, $y, $z);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param CData|null $v
     * @return void
     */
    public function vertexAttrib3fv(int $index, ?CData $v): void
    {
        $__proc = $this->proc('glVertexAttrib3fv', 'void (*)(GLuint index, const GLfloat *v)');
        $__proc($index, $v);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param int $x
     * @param int $y
     * @param int $z
     * @return void
     */
    public function vertexAttrib3s(int $index, int $x, int $y, int $z): void
    {
        $__proc = $this->proc('glVertexAttrib3s', 'void (*)(GLuint index, GLshort x, GLshort y, GLshort z)');
        $__proc($index, $x, $y, $z);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param CData|null $v
     * @return void
     */
    public function vertexAttrib3sv(int $index, ?CData $v): void
    {
        $__proc = $this->proc('glVertexAttrib3sv', 'void (*)(GLuint index, const GLshort *v)');
        $__proc($index, $v);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param CData|null $v
     * @return void
     */
    public function vertexAttrib4Nbv(int $index, ?CData $v): void
    {
        $__proc = $this->proc('glVertexAttrib4Nbv', 'void (*)(GLuint index, const GLbyte *v)');
        $__proc($index, $v);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param CData|null $v
     * @return void
     */
    public function vertexAttrib4Niv(int $index, ?CData $v): void
    {
        $__proc = $this->proc('glVertexAttrib4Niv', 'void (*)(GLuint index, const GLint *v)');
        $__proc($index, $v);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param CData|null $v
     * @return void
     */
    public function vertexAttrib4Nsv(int $index, ?CData $v): void
    {
        $__proc = $this->proc('glVertexAttrib4Nsv', 'void (*)(GLuint index, const GLshort *v)');
        $__proc($index, $v);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param int $x
     * @param int $y
     * @param int $z
     * @param int $w
     * @return void
     */
    public function vertexAttrib4Nub(int $index, int $x, int $y, int $z, int $w): void
    {
        $__proc = $this->proc('glVertexAttrib4Nub',
            'void (*)(GLuint index, GLubyte x, GLubyte y, GLubyte z, GLubyte w)');
        $__proc($index, $x, $y, $z, $w);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param CData|null $v
     * @return void
     */
    public function vertexAttrib4Nubv(int $index, ?CData $v): void
    {
        $__proc = $this->proc('glVertexAttrib4Nubv', 'void (*)(GLuint index, const GLubyte *v)');
        $__proc($index, $v);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param CData|null $v
     * @return void
     */
    public function vertexAttrib4Nuiv(int $index, ?CData $v): void
    {
        $__proc = $this->proc('glVertexAttrib4Nuiv', 'void (*)(GLuint index, const GLuint *v)');
        $__proc($index, $v);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param CData|null $v
     * @return void
     */
    public function vertexAttrib4Nusv(int $index, ?CData $v): void
    {
        $__proc = $this->proc('glVertexAttrib4Nusv', 'void (*)(GLuint index, const GLushort *v)');
        $__proc($index, $v);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param CData|null $v
     * @return void
     */
    public function vertexAttrib4bv(int $index, ?CData $v): void
    {
        $__proc = $this->proc('glVertexAttrib4bv', 'void (*)(GLuint index, const GLbyte *v)');
        $__proc($index, $v);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param float $x
     * @param float $y
     * @param float $z
     * @param float $w
     * @return void
     */
    public function vertexAttrib4d(int $index, float $x, float $y, float $z, float $w): void
    {
        $__proc = $this->proc('glVertexAttrib4d',
            'void (*)(GLuint index, GLdouble x, GLdouble y, GLdouble z, GLdouble w)');
        $__proc($index, $x, $y, $z, $w);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param CData|null $v
     * @return void
     */
    public function vertexAttrib4dv(int $index, ?CData $v): void
    {
        $__proc = $this->proc('glVertexAttrib4dv', 'void (*)(GLuint index, const GLdouble *v)');
        $__proc($index, $v);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param float $x
     * @param float $y
     * @param float $z
     * @param float $w
     * @return void
     */
    public function vertexAttrib4f(int $index, float $x, float $y, float $z, float $w): void
    {
        $__proc = $this->proc('glVertexAttrib4f',
            'void (*)(GLuint index, GLfloat x, GLfloat y, GLfloat z, GLfloat w)');
        $__proc($index, $x, $y, $z, $w);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param CData|null $v
     * @return void
     */
    public function vertexAttrib4fv(int $index, ?CData $v): void
    {
        $__proc = $this->proc('glVertexAttrib4fv', 'void (*)(GLuint index, const GLfloat *v)');
        $__proc($index, $v);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param CData|null $v
     * @return void
     */
    public function vertexAttrib4iv(int $index, ?CData $v): void
    {
        $__proc = $this->proc('glVertexAttrib4iv', 'void (*)(GLuint index, const GLint *v)');
        $__proc($index, $v);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param int $x
     * @param int $y
     * @param int $z
     * @param int $w
     * @return void
     */
    public function vertexAttrib4s(int $index, int $x, int $y, int $z, int $w): void
    {
        $__proc = $this->proc('glVertexAttrib4s',
            'void (*)(GLuint index, GLshort x, GLshort y, GLshort z, GLshort w)');
        $__proc($index, $x, $y, $z, $w);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param CData|null $v
     * @return void
     */
    public function vertexAttrib4sv(int $index, ?CData $v): void
    {
        $__proc = $this->proc('glVertexAttrib4sv', 'void (*)(GLuint index, const GLshort *v)');
        $__proc($index, $v);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param CData|null $v
     * @return void
     */
    public function vertexAttrib4ubv(int $index, ?CData $v): void
    {
        $__proc = $this->proc('glVertexAttrib4ubv', 'void (*)(GLuint index, const GLubyte *v)');
        $__proc($index, $v);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param CData|null $v
     * @return void
     */
    public function vertexAttrib4uiv(int $index, ?CData $v): void
    {
        $__proc = $this->proc('glVertexAttrib4uiv', 'void (*)(GLuint index, const GLuint *v)');
        $__proc($index, $v);
    }

    /**
     * The {@see GL20::vertexAttrib} family of entry points allows an application to pass generic vertex attributes
     * in numbered locations.
     *
     * Generic attributes are defined as four-component values that are organized into an array. The first entry of
     * this array is numbered 0, and the size of the array is specified by the implementation-dependent constant
     * {@see GL20::GL_MAX_VERTEX_ATTRIBS}. Individual elements of this array can be modified with a
     * {@see GL20::vertexAttrib} call that specifies the index of the element to be modified and a value for that
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
     * types may be loaded using the {@see GL20::vertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one column of the matrix in each generic
     * attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be bound to a generic attribute index by
     * calling {@see GL20::bindAttribLocation}. This allows an application to use more descriptive variable names
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
     * @since 2.0
     * @param int $index
     * @param CData|null $v
     * @return void
     */
    public function vertexAttrib4usv(int $index, ?CData $v): void
    {
        $__proc = $this->proc('glVertexAttrib4usv', 'void (*)(GLuint index, const GLushort *v)');
        $__proc($index, $v);
    }

    /**
     * {@see GL20::vertexAttribPointer}, {@see GL20::vertexAttribIPointer} and
     * {@see GL20::vertexAttribLPointer} specify the location and data format of the array of generic vertex
     * attributes at index $index to use when rendering. $size specifies the number of components per attribute and
     * must be 1, 2, 3, 4, or {@see GL20::GL_BGRA}. $type specifies the data type of each component, and $stride
     * specifies the byte stride from one attribute to the next, allowing vertices and attributes to be packed into a
     * single array or stored in separate arrays.
     *
     * For {@see GL20::vertexAttribPointer}, if $normalized is set to {@see GL20::GL_TRUE}, it indicates that
     * values stored in an integer format are to be mapped to the range [-1,1] (for signed values) or [0,1] (for
     * unsigned values) when they are accessed and converted to floating point. Otherwise, values will be converted
     * to floats directly without normalization.
     *
     * For {@see GL20::vertexAttribIPointer}, only the integer types {@see GL20::GL_BYTE},
     * {@see GL20::GL_UNSIGNED_BYTE}, {@see GL20::GL_SHORT}, {@see GL20::GL_UNSIGNED_SHORT}, {@see GL20::GL_INT},
     * {@see GL20::GL_UNSIGNED_INT} are accepted. Values are always left as integer values.
     *
     * {@see GL20::vertexAttribLPointer} specifies state for a generic vertex attribute array associated with a
     * shader attribute variable declared with 64-bit double precision components. $type must be
     * {@see GL20::GL_DOUBLE}. $index, $size, and $stride behave as described for {@see GL20::vertexAttribPointer}
     * and {@see GL20::vertexAttribIPointer}.
     *
     * If $pointer is not `NULL`, a non-zero named buffer object must be bound to the {@see GL20::GL_ARRAY_BUFFER}
     * target (see {@see GL20::bindBuffer}), otherwise an error is generated. $pointer is treated as a byte offset
     * into the buffer object's data store. The buffer object binding ({@see GL20::GL_ARRAY_BUFFER_BINDING}) is saved
     * as generic vertex attribute array state ({@see GL20::GL_VERTEX_ATTRIB_ARRAY_BUFFER_BINDING}) for index $index.
     *
     * When a generic vertex attribute array is specified, $size, $type, $normalized, $stride, and $pointer are saved
     * as vertex array state, in addition to the current vertex array buffer object binding.
     *
     * To enable and disable a generic vertex attribute array, call {@see GL20::enableVertexAttribArray} and
     * {@see GL20::disableVertexAttribArray} with $index. If enabled, the generic vertex attribute array is used
     * when {@see GL20::drawArrays}, {@see GL20::multiDrawArrays}, {@see GL20::drawElements},
     * {@see GL20::multiDrawElements}, or {@see GL20::drawRangeElements} is called.
     *
     * @see http://docs.gl/gl2/glVertexAttribPointer
     * @see http://docs.gl/gl4/glVertexAttribPointer
     * @since 2.0
     * @param int $index
     * @param int $size
     * @param int $type
     * @param int $normalized
     * @param int $stride
     * @param CData|null $pointer
     * @return void
     */
    public function vertexAttribPointer(
        int $index,
        int $size,
        int $type,
        int $normalized,
        int $stride,
        ?CData $pointer
    ): void {
        $__proc = $this->proc('glVertexAttribPointer',
            'void (*)(GLuint index, GLint size, GLenum type, GLboolean normalized, GLsizei stride, const void *pointer)');
        $__proc($index, $size, $type, $normalized, $stride, $pointer);
    }
}
