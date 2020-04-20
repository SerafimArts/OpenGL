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
 * The OpenGL functionality up to version 4.1. Includes the deprecated symbols of the Compatibility Profile.
 *
 * OpenGL 4.1 implementations support revision 4.10 of the OpenGL Shading Language.
 *
 * Extensions promoted to core in this release:
 *
 * - ARB_ES2_compatibility @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_ES2_compatibility.txt
 * - ARB_get_program_binary @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_get_program_binary.txt
 * - ARB_separate_shader_objects @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_separate_shader_objects.txt
 * - ARB_shader_precision @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_shader_precision.txt
 * - ARB_vertex_attrib_64bit @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_vertex_attrib_64bit.txt
 * - ARB_viewport_array @see https://www.khronos.org/registry/OpenGL/extensions/ARB/ARB_viewport_array.txt
 */
class GL41 extends GL40
{
    /**
     * @var int
     * @since 4.1
     */
    public const GL_FIXED = 0x140c;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_IMPLEMENTATION_COLOR_READ_TYPE = 0x8b9a;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_IMPLEMENTATION_COLOR_READ_FORMAT = 0x8b9b;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_LOW_FLOAT = 0x8df0;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_MEDIUM_FLOAT = 0x8df1;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_HIGH_FLOAT = 0x8df2;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_LOW_INT = 0x8df3;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_MEDIUM_INT = 0x8df4;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_HIGH_INT = 0x8df5;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_SHADER_COMPILER = 0x8dfa;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_SHADER_BINARY_FORMATS = 0x8df8;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_NUM_SHADER_BINARY_FORMATS = 0x8df9;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_MAX_VERTEX_UNIFORM_VECTORS = 0x8dfb;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_MAX_VARYING_VECTORS = 0x8dfc;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_MAX_FRAGMENT_UNIFORM_VECTORS = 0x8dfd;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_RGB565 = 0x8d62;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_PROGRAM_BINARY_RETRIEVABLE_HINT = 0x8257;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_PROGRAM_BINARY_LENGTH = 0x8741;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_NUM_PROGRAM_BINARY_FORMATS = 0x87fe;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_PROGRAM_BINARY_FORMATS = 0x87ff;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_VERTEX_SHADER_BIT = 0x0001;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_FRAGMENT_SHADER_BIT = 0x0002;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_GEOMETRY_SHADER_BIT = 0x0004;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_TESS_CONTROL_SHADER_BIT = 0x0008;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_TESS_EVALUATION_SHADER_BIT = 0x0010;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_ALL_SHADER_BITS = 0xffffffff;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_PROGRAM_SEPARABLE = 0x8258;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_ACTIVE_PROGRAM = 0x8259;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_PROGRAM_PIPELINE_BINDING = 0x825a;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_MAX_VIEWPORTS = 0x825b;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_VIEWPORT_SUBPIXEL_BITS = 0x825c;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_VIEWPORT_BOUNDS_RANGE = 0x825d;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_LAYER_PROVOKING_VERTEX = 0x825e;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_VIEWPORT_INDEX_PROVOKING_VERTEX = 0x825f;
    /**
     * @var int
     * @since 4.1
     */
    public const GL_UNDEFINED_VERTEX = 0x8260;

    /**
     * Provides a hint to the implementation that it may free internal resources associated with its shader compiler.
     * {@see glCompileShader} may subsequently be called and the implementation may at that time
     * reallocate resources previously freed by the call to `glReleaseShaderCompiler`.
     *
     * @see http://docs.gl/gl4/glReleaseShaderCompiler
     * @since 4.1
     * @return void
     */
    public static function glReleaseShaderCompiler(): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');

        $proc = self::getProc('glReleaseShaderCompiler', 'void (*)(void)');
        $proc();
    }

    /**
     * Loads pre-compiled shader binary code into the *`count`* shader objects whose handles are given in
     * *`shaders`*. *`binary`* points to *`length`* bytes of binary shader code stored in client memory.
     * *`binaryFormat`* specifies the format of the pre-compiled code.
     *
     * The binary image contained in *`binary`* will be decoded according to the extension specification defining the
     * specified *`binaryFormat`* token. OpenGL does not define any specific binary formats, but it does provide a
     * mechanism to obtain token vaues for such formats provided by such extensions.
     *
     * Depending on the types of the shader objects in *`shaders`*, `glShaderBinary` will individually load binary
     * vertex or fragment shaders, or load an executable binary that contains an optimized pair of vertex and
     * fragment shaders stored in the same binary.
     *
     * @see http://docs.gl/gl4/glShaderBinary
     * @since 4.1
     * @param int $count
     * @param \FFI\CData|\FFI\CIntPtr|null $shaders
     * @param int $binaryformat
     * @param \FFI\CData|\FFI\CPtr|null $binary
     * @param int $length
     * @return void
     */
    public static function glShaderBinary(int $count, ?\FFI\CData $shaders, int $binaryformat, ?\FFI\CData $binary, int $length): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($binaryformat >= 0 && $binaryformat <= 4_294_967_295, 'Argument $binaryformat overflow: C type GLenum is required');
        assert($length >= \PHP_INT_MIN && $length <= \PHP_INT_MAX, 'Argument $length overflow: C type GLsizei is required');

        $proc = self::getProc('glShaderBinary', 'void (*)(GLsizei count, const GLuint *shaders, GLenum binaryformat, const void *binary, GLsizei length)');
        $proc($count, $shaders, $binaryformat, $binary, $length);
    }

    /**
     * Retrieves the numeric range and precision for the implementation's representation of quantities in different
     * numeric formats in specified shader type. *`shaderType`* specifies the type of shader for which the numeric
     * precision and range is to be retrieved and must be one of `GL_VERTEX_SHADER` or `GL_FRAGMENT_SHADER`.
     * *`precisionType`* specifies the numeric format to query and must be one of `GL_LOW_FLOAT`, `GL_MEDIUM_FLOAT`
     * `GL_HIGH_FLOAT`, `GL_LOW_INT`, `GL_MEDIUM_INT`, or `GL_HIGH_INT`.
     *
     * *`range`* points to an array of two integers into which the format's numeric range will be returned. If min
     * and max are the smallest values representable in the format, then the values returned are defined to be:
     * *`range`*[0] = floor(log2(|min|)) and *`range`*[1] = floor(log2(|max|)).
     *
     * *`precision`* specifies the address of an integer into which will be written the log2 value of the number of
     * bits of precision of the format. If the smallest representable value greater than 1 is 1 + *eps*, then the
     * integer addressed by *`precision`* will contain floor(-log2(eps)).
     *
     * @see http://docs.gl/gl4/glGetShaderPrecisionFormat
     * @since 4.1
     * @param int $shadertype
     * @param int $precisiontype
     * @param \FFI\CData|\FFI\CIntPtr|null $range
     * @param \FFI\CData|\FFI\CIntPtr|null $precision
     * @return void
     */
    public static function glGetShaderPrecisionFormat(int $shadertype, int $precisiontype, ?\FFI\CData $range, ?\FFI\CData $precision): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($shadertype >= 0 && $shadertype <= 4_294_967_295, 'Argument $shadertype overflow: C type GLenum is required');
        assert($precisiontype >= 0 && $precisiontype <= 4_294_967_295, 'Argument $precisiontype overflow: C type GLenum is required');

        $proc = self::getProc('glGetShaderPrecisionFormat', 'void (*)(GLenum shadertype, GLenum precisiontype, GLint *range, GLint *precision)');
        $proc($shadertype, $precisiontype, $range, $precision);
    }

    /**
     * @since 4.1
     * @param float $n
     * @param float $f
     * @return void
     */
    public static function glDepthRangef(float $n, float $f): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($n >= -3.40282e38 && $n <= 3.40282e38, 'Argument $n overflow: C type GLfloat is required');
        assert($f >= -3.40282e38 && $f <= 3.40282e38, 'Argument $f overflow: C type GLfloat is required');

        $proc = self::getProc('glDepthRangef', 'void (*)(GLfloat n, GLfloat f)');
        $proc($n, $f);
    }

    /**
     * @since 4.1
     * @param float $d
     * @return void
     */
    public static function glClearDepthf(float $d): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($d >= -3.40282e38 && $d <= 3.40282e38, 'Argument $d overflow: C type GLfloat is required');

        $proc = self::getProc('glClearDepthf', 'void (*)(GLfloat d)');
        $proc($d);
    }

    /**
     * Returns a binary representation of the compiled and linked executable for *`program`* into the array of bytes
     * whose address is specified in *`binary`*. The maximum number of bytes that may be written into *`binary`* is
     * specified by *`bufSize`*. If the program binary is greater in size than *`bufSize`* bytes, then an error is
     * generated, otherwise the actual number of bytes written into *`binary`* is returned in the variable whose
     * address is given by *`length`*. If *`length`* is `NULL`, then no length is returned.
     *
     * The format of the program binary written into *`binary`* is returned in the variable whose address is given by
     * *`binaryFormat`*, and may be implementation dependent. The binary produced by the GL may subsequently be
     * returned to the GL by calling {@see glProgramBinary}, with *`binaryFormat`* and *`length`* set to
     * the values returned by `glGetProgramBinary`, and passing the returned binary data in the *`binary`* parameter.
     *
     * @see http://docs.gl/gl4/glGetProgramBinary
     * @since 4.1
     * @param int $program
     * @param int $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @param \FFI\CData|\FFI\CIntPtr|null $binaryFormat
     * @param \FFI\CData|\FFI\CPtr|null $binary
     * @return void
     */
    public static function glGetProgramBinary(int $program, int $bufSize, ?\FFI\CData $length, ?\FFI\CData $binaryFormat, ?\FFI\CData $binary): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($bufSize >= \PHP_INT_MIN && $bufSize <= \PHP_INT_MAX, 'Argument $bufSize overflow: C type GLsizei is required');

        $proc = self::getProc('glGetProgramBinary', 'void (*)(GLuint program, GLsizei bufSize, GLsizei *length, GLenum *binaryFormat, void *binary)');
        $proc($program, $bufSize, $length, $binaryFormat, $binary);
    }

    /**
     * Loads a program object with a program binary previously returned from
     * {@see glGetProgramBinary}. *`binaryFormat`* and *`binary`* must be those returned by a previous
     * call to {@see glGetProgramBinary}, and *`length`* must be the length returned by
     * {@see glGetProgramBinary}, or by {@see glGetProgram} when called with *`pname`* set to
     * `GL_PROGRAM_BINARY_LENGTH`. If these conditions are not met, loading the program binary will fail and
     * *`program`*'s `GL_LINK_STATUS` will be set to `GL_FALSE`.
     *
     * A program object's program binary is replaced by calls to {@see glLinkProgram} or `glProgramBinary`.
     * When linking success or failure is concerned, `glProgramBinary` can be considered to perform an implicit
     * linking operation. {@see glLinkProgram} and `glProgramBinary` both set the program object's
     * `GL_LINK_STATUS` to `GL_TRUE` or `GL_FALSE`.
     *
     * A successful call to `glProgramBinary` will reset all uniform variables to their initial values. The initial
     * value is either the value of the variable's initializer as specified in the original shader source, or zero if
     * no initializer was present. Additionally, all vertex shader input and fragment shader output assignments that
     * were in effect when the program was linked before saving are restored with `glProgramBinary` is called.
     *
     * @see http://docs.gl/gl4/glProgramBinary
     * @since 4.1
     * @param int $program
     * @param int $binaryFormat
     * @param \FFI\CData|\FFI\CPtr|null $binary
     * @param int $length
     * @return void
     */
    public static function glProgramBinary(int $program, int $binaryFormat, ?\FFI\CData $binary, int $length): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($binaryFormat >= 0 && $binaryFormat <= 4_294_967_295, 'Argument $binaryFormat overflow: C type GLenum is required');
        assert($length >= \PHP_INT_MIN && $length <= \PHP_INT_MAX, 'Argument $length overflow: C type GLsizei is required');

        $proc = self::getProc('glProgramBinary', 'void (*)(GLuint program, GLenum binaryFormat, const void *binary, GLsizei length)');
        $proc($program, $binaryFormat, $binary, $length);
    }

    /**
     * @since 4.1
     * @param int $program
     * @param int $pname
     * @param int $value
     * @return void
     */
    public static function glProgramParameteri(int $program, int $pname, int $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');
        assert($value >= \PHP_INT_MIN && $value <= \PHP_INT_MAX, 'Argument $value overflow: C type GLint is required');

        $proc = self::getProc('glProgramParameteri', 'void (*)(GLuint program, GLenum pname, GLint value)');
        $proc($program, $pname, $value);
    }

    /**
     * Binds executables from a program object associated with a specified set of shader stages to the program
     * pipeline object given by *`pipeline`*. *`pipeline`* specifies the program pipeline object to which to bind the
     * executables. *`stages`* contains a logical combination of bits indicating the shader stages to use within
     * *`program`* with the program pipeline object *`pipeline`*. *`stages`* must be a logical combination of
     * `GL_VERTEX_SHADER_BIT`, `GL_TESS_CONTROL_SHADER_BIT`, `GL_TESS_EVALUATION_SHADER_BIT`,
     * `GL_GEOMETRY_SHADER_BIT`, `GL_FRAGMENT_SHADER_BIT` and `GL_COMPUTE_SHADER_BIT`. Additionally, the special
     * value `GL_ALL_SHADER_BITS` may be specified to indicate that all executables contained in *`program`* should
     * be installed in *`pipeline`*.
     *
     * If *`program`* refers to a program object with a valid shader attached for an indicated shader stage,
     * `glUseProgramStages` installs the executable code for that stage in the indicated program pipeline object
     * *`pipeline`*. If *`program`* is zero, or refers to a program object with no valid shader executable for a
     * given stage, it is as if the pipeline object has no programmable stage configured for the indicated shader
     * stages. If *`stages`* contains bits other than those listed above, and is not equal to `GL_ALL_SHADER_BITS`,
     * an error is generated.
     *
     * @see http://docs.gl/gl4/glUseProgramStages
     * @since 4.1
     * @param int $pipeline
     * @param int $stages
     * @param int $program
     * @return void
     */
    public static function glUseProgramStages(int $pipeline, int $stages, int $program): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($pipeline >= 0 && $pipeline <= 4_294_967_295, 'Argument $pipeline overflow: C type GLuint is required');
        assert($stages >= 0 && $stages <= 4_294_967_295, 'Argument $stages overflow: C type GLbitfield is required');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');

        $proc = self::getProc('glUseProgramStages', 'void (*)(GLuint pipeline, GLbitfield stages, GLuint program)');
        $proc($pipeline, $stages, $program);
    }

    /**
     * Sets the linked program named by *`program`* to be the active program for the program pipeline object
     * *`pipeline`*. The active program in the active program pipeline object is the target of calls to
     * {@see glUniform} when no program has been made current through a call to {@see glUseProgram}.
     *
     * @see http://docs.gl/gl4/glActiveShaderProgram
     * @since 4.1
     * @param int $pipeline
     * @param int $program
     * @return void
     */
    public static function glActiveShaderProgram(int $pipeline, int $program): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($pipeline >= 0 && $pipeline <= 4_294_967_295, 'Argument $pipeline overflow: C type GLuint is required');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');

        $proc = self::getProc('glActiveShaderProgram', 'void (*)(GLuint pipeline, GLuint program)');
        $proc($pipeline, $program);
    }

    /**
     * @since 4.1
     * @param int $type
     * @param int $count
     * @param \FFI\CData|\FFI\CIntPtrPtr|null $strings
     * @return int
     */
    public static function glCreateShaderProgramv(int $type, int $count, ?\FFI\CData $strings): int
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glCreateShaderProgramv', 'GLuint (*)(GLenum type, GLsizei count, const GLchar *const*strings)');
        return $proc($type, $count, $strings);
    }

    /**
     * Binds a program pipeline object to the current context. *`pipeline`* must be a name previously returned from a
     * call to {@see glGenProgramPipelines}. If no program pipeline exists with name *`pipeline`*
     * then a new pipeline object is created with that name and initialized to the default state vector.
     *
     * When a program pipeline object is bound using `glBindProgramPipeline`, any previous binding is broken and is
     * replaced with a binding to the specified pipeline object. If *`pipeline`* is zero, the previous binding is
     * broken and is not replaced, leaving no pipeline object bound. If no current program object has been
     * established by {@see glUseProgram}, the program objects used for each stage and for uniform updates
     * are taken from the bound program pipeline object, if any. If there is a current program object established by
     * {@see glUseProgram}, the bound program pipeline object has no effect on rendering or uniform updates.
     * When a bound program pipeline object is used for rendering, individual shader executables are taken from its
     * program objects.
     *
     * @see http://docs.gl/gl4/glBindProgramPipeline
     * @since 4.1
     * @param int $pipeline
     * @return void
     */
    public static function glBindProgramPipeline(int $pipeline): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($pipeline >= 0 && $pipeline <= 4_294_967_295, 'Argument $pipeline overflow: C type GLuint is required');

        $proc = self::getProc('glBindProgramPipeline', 'void (*)(GLuint pipeline)');
        $proc($pipeline);
    }

    /**
     * Deletes the *`n`* program pipeline objects whose names are stored in the array *`pipelines`*. Unused names in
     * *`pipelines`* are ignored, as is the name zero. After a program pipeline object is deleted, its name is again
     * unused and it has no contents. If program pipeline object that is currently bound is deleted, the binding for
     * that object reverts to zero and no program pipeline object becomes current.
     *
     * @see http://docs.gl/gl4/glDeleteProgramPipelines
     * @since 4.1
     * @param int $n
     * @param \FFI\CData|\FFI\CIntPtr|null $pipelines
     * @return void
     */
    public static function glDeleteProgramPipelines(int $n, ?\FFI\CData $pipelines): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($n >= \PHP_INT_MIN && $n <= \PHP_INT_MAX, 'Argument $n overflow: C type GLsizei is required');

        $proc = self::getProc('glDeleteProgramPipelines', 'void (*)(GLsizei n, const GLuint *pipelines)');
        $proc($n, $pipelines);
    }

    /**
     * Returns *`n`* previously unused program pipeline object names in *`pipelines`*. These names are marked as
     * used, for the purposes of `glGenProgramPipelines` only, but they acquire program pipeline state only when they
     * are first bound.
     *
     * @see http://docs.gl/gl4/glGenProgramPipelines
     * @since 4.1
     * @param int $n
     * @param \FFI\CData|\FFI\CIntPtr|null $pipelines
     * @return void
     */
    public static function glGenProgramPipelines(int $n, ?\FFI\CData $pipelines): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($n >= \PHP_INT_MIN && $n <= \PHP_INT_MAX, 'Argument $n overflow: C type GLsizei is required');

        $proc = self::getProc('glGenProgramPipelines', 'void (*)(GLsizei n, GLuint *pipelines)');
        $proc($n, $pipelines);
    }

    /**
     * Returns `GL_TRUE` if *`pipeline`* is currently the name of a program pipeline object. If *`pipeline`* is zero,
     * or if `pipeline` is not the name of a program pipeline object, or if an error occurs, `glIsProgramPipeline`
     * returns `GL_FALSE`. If *`pipeline`* is a name returned by {@see glGenProgramPipelines}, but
     * that has not yet been bound through a call to {@see glBindProgramPipeline}, then the name is
     * not a program pipeline object and `glIsProgramPipeline` returns `GL_FALSE`.
     *
     * @see http://docs.gl/gl4/glIsProgramPipeline
     * @since 4.1
     * @param int $pipeline
     * @return int
     */
    public static function glIsProgramPipeline(int $pipeline): int
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($pipeline >= 0 && $pipeline <= 4_294_967_295, 'Argument $pipeline overflow: C type GLuint is required');

        $proc = self::getProc('glIsProgramPipeline', 'GLboolean (*)(GLuint pipeline)');
        return $proc($pipeline);
    }

    /**
     * @since 4.1
     * @param int $pipeline
     * @param int $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public static function glGetProgramPipelineiv(int $pipeline, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($pipeline >= 0 && $pipeline <= 4_294_967_295, 'Argument $pipeline overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetProgramPipelineiv', 'void (*)(GLuint pipeline, GLenum pname, GLint *params)');
        $proc($pipeline, $pname, $params);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glProgramUniform` operates on the program object specified by
     * *`program`*.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}` are used to change the value of the uniform variable
     * specified by *`location`* using the values passed as arguments. The number specified in the command should
     * match the number of components in the data type of the specified uniform variable (e.g., `1` for `float`,
     * `int`, `unsigned int`, `bool`; `2` for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix `f` indicates that
     * floating-point values are being passed; the suffix `i` indicates that integer values are being passed; the
     * suffix `ui` indicates that unsigned integer values are being passed, and this type should also match the data
     * type of the specified uniform variable. The `i` variants of this function should be used to provide values for
     * uniform variables defined as `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The `ui` variants of this
     * function should be used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`,
     * `uvec4`, or arrays of these. The `f` variants should be used to provide values for uniform variables of type
     * `float`, `vec2`, `vec3`, `vec4`, or arrays of these. Either the `i`, `ui` or `f` variants may be used to
     * provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these. The
     * uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glProgramUniform` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}v` can be used to modify a single uniform variable or a uniform
     * variable array. These commands pass a count and a pointer to the values to be loaded into a uniform variable
     * or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or part of an array. When loading *n*
     * elements starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the
     * array will be replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform
     * variable array, values for all array elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of components for each element in *`value`*, and it
     * should match the number of components in the data type of the specified uniform variable (e.g., `1` for
     * `float`, `int`, `bool`; `2` for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * `glProgramUniform{1|2|3|4}{f|i|ui}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glProgramUniform3f` or `glProgramUniform3fv` can be used to load a uniform variable
     * array of type vec3). The number of elements of the uniform variable array to be modified is specified by
     * *`count`*
     *
     * The commands `glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array
     * of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number
     * `2` indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and
     * the number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with
     * the first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $v0
     * @return void
     */
    public static function glProgramUniform1i(int $program, int $location, int $v0): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($v0 >= \PHP_INT_MIN && $v0 <= \PHP_INT_MAX, 'Argument $v0 overflow: C type GLint is required');

        $proc = self::getProc('glProgramUniform1i', 'void (*)(GLuint program, GLint location, GLint v0)');
        $proc($program, $location, $v0);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glProgramUniform` operates on the program object specified by
     * *`program`*.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}` are used to change the value of the uniform variable
     * specified by *`location`* using the values passed as arguments. The number specified in the command should
     * match the number of components in the data type of the specified uniform variable (e.g., `1` for `float`,
     * `int`, `unsigned int`, `bool`; `2` for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix `f` indicates that
     * floating-point values are being passed; the suffix `i` indicates that integer values are being passed; the
     * suffix `ui` indicates that unsigned integer values are being passed, and this type should also match the data
     * type of the specified uniform variable. The `i` variants of this function should be used to provide values for
     * uniform variables defined as `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The `ui` variants of this
     * function should be used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`,
     * `uvec4`, or arrays of these. The `f` variants should be used to provide values for uniform variables of type
     * `float`, `vec2`, `vec3`, `vec4`, or arrays of these. Either the `i`, `ui` or `f` variants may be used to
     * provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these. The
     * uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glProgramUniform` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}v` can be used to modify a single uniform variable or a uniform
     * variable array. These commands pass a count and a pointer to the values to be loaded into a uniform variable
     * or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or part of an array. When loading *n*
     * elements starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the
     * array will be replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform
     * variable array, values for all array elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of components for each element in *`value`*, and it
     * should match the number of components in the data type of the specified uniform variable (e.g., `1` for
     * `float`, `int`, `bool`; `2` for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * `glProgramUniform{1|2|3|4}{f|i|ui}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glProgramUniform3f` or `glProgramUniform3fv` can be used to load a uniform variable
     * array of type vec3). The number of elements of the uniform variable array to be modified is specified by
     * *`count`*
     *
     * The commands `glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array
     * of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number
     * `2` indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and
     * the number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with
     * the first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public static function glProgramUniform1iv(int $program, int $location, int $count, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glProgramUniform1iv', 'void (*)(GLuint program, GLint location, GLsizei count, const GLint *value)');
        $proc($program, $location, $count, $value);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glProgramUniform` operates on the program object specified by
     * *`program`*.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}` are used to change the value of the uniform variable
     * specified by *`location`* using the values passed as arguments. The number specified in the command should
     * match the number of components in the data type of the specified uniform variable (e.g., `1` for `float`,
     * `int`, `unsigned int`, `bool`; `2` for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix `f` indicates that
     * floating-point values are being passed; the suffix `i` indicates that integer values are being passed; the
     * suffix `ui` indicates that unsigned integer values are being passed, and this type should also match the data
     * type of the specified uniform variable. The `i` variants of this function should be used to provide values for
     * uniform variables defined as `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The `ui` variants of this
     * function should be used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`,
     * `uvec4`, or arrays of these. The `f` variants should be used to provide values for uniform variables of type
     * `float`, `vec2`, `vec3`, `vec4`, or arrays of these. Either the `i`, `ui` or `f` variants may be used to
     * provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these. The
     * uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glProgramUniform` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}v` can be used to modify a single uniform variable or a uniform
     * variable array. These commands pass a count and a pointer to the values to be loaded into a uniform variable
     * or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or part of an array. When loading *n*
     * elements starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the
     * array will be replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform
     * variable array, values for all array elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of components for each element in *`value`*, and it
     * should match the number of components in the data type of the specified uniform variable (e.g., `1` for
     * `float`, `int`, `bool`; `2` for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * `glProgramUniform{1|2|3|4}{f|i|ui}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glProgramUniform3f` or `glProgramUniform3fv` can be used to load a uniform variable
     * array of type vec3). The number of elements of the uniform variable array to be modified is specified by
     * *`count`*
     *
     * The commands `glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array
     * of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number
     * `2` indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and
     * the number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with
     * the first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param float $v0
     * @return void
     */
    public static function glProgramUniform1f(int $program, int $location, float $v0): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($v0 >= -3.40282e38 && $v0 <= 3.40282e38, 'Argument $v0 overflow: C type GLfloat is required');

        $proc = self::getProc('glProgramUniform1f', 'void (*)(GLuint program, GLint location, GLfloat v0)');
        $proc($program, $location, $v0);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glProgramUniform` operates on the program object specified by
     * *`program`*.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}` are used to change the value of the uniform variable
     * specified by *`location`* using the values passed as arguments. The number specified in the command should
     * match the number of components in the data type of the specified uniform variable (e.g., `1` for `float`,
     * `int`, `unsigned int`, `bool`; `2` for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix `f` indicates that
     * floating-point values are being passed; the suffix `i` indicates that integer values are being passed; the
     * suffix `ui` indicates that unsigned integer values are being passed, and this type should also match the data
     * type of the specified uniform variable. The `i` variants of this function should be used to provide values for
     * uniform variables defined as `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The `ui` variants of this
     * function should be used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`,
     * `uvec4`, or arrays of these. The `f` variants should be used to provide values for uniform variables of type
     * `float`, `vec2`, `vec3`, `vec4`, or arrays of these. Either the `i`, `ui` or `f` variants may be used to
     * provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these. The
     * uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glProgramUniform` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}v` can be used to modify a single uniform variable or a uniform
     * variable array. These commands pass a count and a pointer to the values to be loaded into a uniform variable
     * or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or part of an array. When loading *n*
     * elements starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the
     * array will be replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform
     * variable array, values for all array elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of components for each element in *`value`*, and it
     * should match the number of components in the data type of the specified uniform variable (e.g., `1` for
     * `float`, `int`, `bool`; `2` for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * `glProgramUniform{1|2|3|4}{f|i|ui}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glProgramUniform3f` or `glProgramUniform3fv` can be used to load a uniform variable
     * array of type vec3). The number of elements of the uniform variable array to be modified is specified by
     * *`count`*
     *
     * The commands `glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array
     * of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number
     * `2` indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and
     * the number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with
     * the first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glProgramUniform1fv(int $program, int $location, int $count, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glProgramUniform1fv', 'void (*)(GLuint program, GLint location, GLsizei count, const GLfloat *value)');
        $proc($program, $location, $count, $value);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glProgramUniform` operates on the program object specified by
     * *`program`*.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}` are used to change the value of the uniform variable
     * specified by *`location`* using the values passed as arguments. The number specified in the command should
     * match the number of components in the data type of the specified uniform variable (e.g., `1` for `float`,
     * `int`, `unsigned int`, `bool`; `2` for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix `f` indicates that
     * floating-point values are being passed; the suffix `i` indicates that integer values are being passed; the
     * suffix `ui` indicates that unsigned integer values are being passed, and this type should also match the data
     * type of the specified uniform variable. The `i` variants of this function should be used to provide values for
     * uniform variables defined as `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The `ui` variants of this
     * function should be used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`,
     * `uvec4`, or arrays of these. The `f` variants should be used to provide values for uniform variables of type
     * `float`, `vec2`, `vec3`, `vec4`, or arrays of these. Either the `i`, `ui` or `f` variants may be used to
     * provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these. The
     * uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glProgramUniform` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}v` can be used to modify a single uniform variable or a uniform
     * variable array. These commands pass a count and a pointer to the values to be loaded into a uniform variable
     * or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or part of an array. When loading *n*
     * elements starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the
     * array will be replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform
     * variable array, values for all array elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of components for each element in *`value`*, and it
     * should match the number of components in the data type of the specified uniform variable (e.g., `1` for
     * `float`, `int`, `bool`; `2` for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * `glProgramUniform{1|2|3|4}{f|i|ui}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glProgramUniform3f` or `glProgramUniform3fv` can be used to load a uniform variable
     * array of type vec3). The number of elements of the uniform variable array to be modified is specified by
     * *`count`*
     *
     * The commands `glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array
     * of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number
     * `2` indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and
     * the number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with
     * the first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param float $v0
     * @return void
     */
    public static function glProgramUniform1d(int $program, int $location, float $v0): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($v0 >= \PHP_FLOAT_MIN && $v0 <= \PHP_FLOAT_MAX, 'Argument $v0 overflow: C type GLdouble is required');

        $proc = self::getProc('glProgramUniform1d', 'void (*)(GLuint program, GLint location, GLdouble v0)');
        $proc($program, $location, $v0);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glProgramUniform` operates on the program object specified by
     * *`program`*.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}` are used to change the value of the uniform variable
     * specified by *`location`* using the values passed as arguments. The number specified in the command should
     * match the number of components in the data type of the specified uniform variable (e.g., `1` for `float`,
     * `int`, `unsigned int`, `bool`; `2` for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix `f` indicates that
     * floating-point values are being passed; the suffix `i` indicates that integer values are being passed; the
     * suffix `ui` indicates that unsigned integer values are being passed, and this type should also match the data
     * type of the specified uniform variable. The `i` variants of this function should be used to provide values for
     * uniform variables defined as `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The `ui` variants of this
     * function should be used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`,
     * `uvec4`, or arrays of these. The `f` variants should be used to provide values for uniform variables of type
     * `float`, `vec2`, `vec3`, `vec4`, or arrays of these. Either the `i`, `ui` or `f` variants may be used to
     * provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these. The
     * uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glProgramUniform` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}v` can be used to modify a single uniform variable or a uniform
     * variable array. These commands pass a count and a pointer to the values to be loaded into a uniform variable
     * or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or part of an array. When loading *n*
     * elements starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the
     * array will be replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform
     * variable array, values for all array elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of components for each element in *`value`*, and it
     * should match the number of components in the data type of the specified uniform variable (e.g., `1` for
     * `float`, `int`, `bool`; `2` for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * `glProgramUniform{1|2|3|4}{f|i|ui}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glProgramUniform3f` or `glProgramUniform3fv` can be used to load a uniform variable
     * array of type vec3). The number of elements of the uniform variable array to be modified is specified by
     * *`count`*
     *
     * The commands `glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array
     * of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number
     * `2` indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and
     * the number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with
     * the first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glProgramUniform1dv(int $program, int $location, int $count, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glProgramUniform1dv', 'void (*)(GLuint program, GLint location, GLsizei count, const GLdouble *value)');
        $proc($program, $location, $count, $value);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glProgramUniform` operates on the program object specified by
     * *`program`*.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}` are used to change the value of the uniform variable
     * specified by *`location`* using the values passed as arguments. The number specified in the command should
     * match the number of components in the data type of the specified uniform variable (e.g., `1` for `float`,
     * `int`, `unsigned int`, `bool`; `2` for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix `f` indicates that
     * floating-point values are being passed; the suffix `i` indicates that integer values are being passed; the
     * suffix `ui` indicates that unsigned integer values are being passed, and this type should also match the data
     * type of the specified uniform variable. The `i` variants of this function should be used to provide values for
     * uniform variables defined as `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The `ui` variants of this
     * function should be used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`,
     * `uvec4`, or arrays of these. The `f` variants should be used to provide values for uniform variables of type
     * `float`, `vec2`, `vec3`, `vec4`, or arrays of these. Either the `i`, `ui` or `f` variants may be used to
     * provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these. The
     * uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glProgramUniform` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}v` can be used to modify a single uniform variable or a uniform
     * variable array. These commands pass a count and a pointer to the values to be loaded into a uniform variable
     * or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or part of an array. When loading *n*
     * elements starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the
     * array will be replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform
     * variable array, values for all array elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of components for each element in *`value`*, and it
     * should match the number of components in the data type of the specified uniform variable (e.g., `1` for
     * `float`, `int`, `bool`; `2` for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * `glProgramUniform{1|2|3|4}{f|i|ui}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glProgramUniform3f` or `glProgramUniform3fv` can be used to load a uniform variable
     * array of type vec3). The number of elements of the uniform variable array to be modified is specified by
     * *`count`*
     *
     * The commands `glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array
     * of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number
     * `2` indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and
     * the number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with
     * the first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $v0
     * @return void
     */
    public static function glProgramUniform1ui(int $program, int $location, int $v0): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($v0 >= 0 && $v0 <= 4_294_967_295, 'Argument $v0 overflow: C type GLuint is required');

        $proc = self::getProc('glProgramUniform1ui', 'void (*)(GLuint program, GLint location, GLuint v0)');
        $proc($program, $location, $v0);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glProgramUniform` operates on the program object specified by
     * *`program`*.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}` are used to change the value of the uniform variable
     * specified by *`location`* using the values passed as arguments. The number specified in the command should
     * match the number of components in the data type of the specified uniform variable (e.g., `1` for `float`,
     * `int`, `unsigned int`, `bool`; `2` for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix `f` indicates that
     * floating-point values are being passed; the suffix `i` indicates that integer values are being passed; the
     * suffix `ui` indicates that unsigned integer values are being passed, and this type should also match the data
     * type of the specified uniform variable. The `i` variants of this function should be used to provide values for
     * uniform variables defined as `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The `ui` variants of this
     * function should be used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`,
     * `uvec4`, or arrays of these. The `f` variants should be used to provide values for uniform variables of type
     * `float`, `vec2`, `vec3`, `vec4`, or arrays of these. Either the `i`, `ui` or `f` variants may be used to
     * provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these. The
     * uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glProgramUniform` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}v` can be used to modify a single uniform variable or a uniform
     * variable array. These commands pass a count and a pointer to the values to be loaded into a uniform variable
     * or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or part of an array. When loading *n*
     * elements starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the
     * array will be replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform
     * variable array, values for all array elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of components for each element in *`value`*, and it
     * should match the number of components in the data type of the specified uniform variable (e.g., `1` for
     * `float`, `int`, `bool`; `2` for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * `glProgramUniform{1|2|3|4}{f|i|ui}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glProgramUniform3f` or `glProgramUniform3fv` can be used to load a uniform variable
     * array of type vec3). The number of elements of the uniform variable array to be modified is specified by
     * *`count`*
     *
     * The commands `glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array
     * of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number
     * `2` indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and
     * the number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with
     * the first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public static function glProgramUniform1uiv(int $program, int $location, int $count, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glProgramUniform1uiv', 'void (*)(GLuint program, GLint location, GLsizei count, const GLuint *value)');
        $proc($program, $location, $count, $value);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glProgramUniform` operates on the program object specified by
     * *`program`*.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}` are used to change the value of the uniform variable
     * specified by *`location`* using the values passed as arguments. The number specified in the command should
     * match the number of components in the data type of the specified uniform variable (e.g., `1` for `float`,
     * `int`, `unsigned int`, `bool`; `2` for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix `f` indicates that
     * floating-point values are being passed; the suffix `i` indicates that integer values are being passed; the
     * suffix `ui` indicates that unsigned integer values are being passed, and this type should also match the data
     * type of the specified uniform variable. The `i` variants of this function should be used to provide values for
     * uniform variables defined as `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The `ui` variants of this
     * function should be used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`,
     * `uvec4`, or arrays of these. The `f` variants should be used to provide values for uniform variables of type
     * `float`, `vec2`, `vec3`, `vec4`, or arrays of these. Either the `i`, `ui` or `f` variants may be used to
     * provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these. The
     * uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glProgramUniform` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}v` can be used to modify a single uniform variable or a uniform
     * variable array. These commands pass a count and a pointer to the values to be loaded into a uniform variable
     * or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or part of an array. When loading *n*
     * elements starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the
     * array will be replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform
     * variable array, values for all array elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of components for each element in *`value`*, and it
     * should match the number of components in the data type of the specified uniform variable (e.g., `1` for
     * `float`, `int`, `bool`; `2` for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * `glProgramUniform{1|2|3|4}{f|i|ui}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glProgramUniform3f` or `glProgramUniform3fv` can be used to load a uniform variable
     * array of type vec3). The number of elements of the uniform variable array to be modified is specified by
     * *`count`*
     *
     * The commands `glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array
     * of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number
     * `2` indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and
     * the number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with
     * the first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $v0
     * @param int $v1
     * @return void
     */
    public static function glProgramUniform2i(int $program, int $location, int $v0, int $v1): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($v0 >= \PHP_INT_MIN && $v0 <= \PHP_INT_MAX, 'Argument $v0 overflow: C type GLint is required');
        assert($v1 >= \PHP_INT_MIN && $v1 <= \PHP_INT_MAX, 'Argument $v1 overflow: C type GLint is required');

        $proc = self::getProc('glProgramUniform2i', 'void (*)(GLuint program, GLint location, GLint v0, GLint v1)');
        $proc($program, $location, $v0, $v1);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glProgramUniform` operates on the program object specified by
     * *`program`*.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}` are used to change the value of the uniform variable
     * specified by *`location`* using the values passed as arguments. The number specified in the command should
     * match the number of components in the data type of the specified uniform variable (e.g., `1` for `float`,
     * `int`, `unsigned int`, `bool`; `2` for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix `f` indicates that
     * floating-point values are being passed; the suffix `i` indicates that integer values are being passed; the
     * suffix `ui` indicates that unsigned integer values are being passed, and this type should also match the data
     * type of the specified uniform variable. The `i` variants of this function should be used to provide values for
     * uniform variables defined as `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The `ui` variants of this
     * function should be used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`,
     * `uvec4`, or arrays of these. The `f` variants should be used to provide values for uniform variables of type
     * `float`, `vec2`, `vec3`, `vec4`, or arrays of these. Either the `i`, `ui` or `f` variants may be used to
     * provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these. The
     * uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glProgramUniform` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}v` can be used to modify a single uniform variable or a uniform
     * variable array. These commands pass a count and a pointer to the values to be loaded into a uniform variable
     * or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or part of an array. When loading *n*
     * elements starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the
     * array will be replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform
     * variable array, values for all array elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of components for each element in *`value`*, and it
     * should match the number of components in the data type of the specified uniform variable (e.g., `1` for
     * `float`, `int`, `bool`; `2` for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * `glProgramUniform{1|2|3|4}{f|i|ui}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glProgramUniform3f` or `glProgramUniform3fv` can be used to load a uniform variable
     * array of type vec3). The number of elements of the uniform variable array to be modified is specified by
     * *`count`*
     *
     * The commands `glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array
     * of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number
     * `2` indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and
     * the number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with
     * the first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public static function glProgramUniform2iv(int $program, int $location, int $count, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glProgramUniform2iv', 'void (*)(GLuint program, GLint location, GLsizei count, const GLint *value)');
        $proc($program, $location, $count, $value);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glProgramUniform` operates on the program object specified by
     * *`program`*.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}` are used to change the value of the uniform variable
     * specified by *`location`* using the values passed as arguments. The number specified in the command should
     * match the number of components in the data type of the specified uniform variable (e.g., `1` for `float`,
     * `int`, `unsigned int`, `bool`; `2` for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix `f` indicates that
     * floating-point values are being passed; the suffix `i` indicates that integer values are being passed; the
     * suffix `ui` indicates that unsigned integer values are being passed, and this type should also match the data
     * type of the specified uniform variable. The `i` variants of this function should be used to provide values for
     * uniform variables defined as `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The `ui` variants of this
     * function should be used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`,
     * `uvec4`, or arrays of these. The `f` variants should be used to provide values for uniform variables of type
     * `float`, `vec2`, `vec3`, `vec4`, or arrays of these. Either the `i`, `ui` or `f` variants may be used to
     * provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these. The
     * uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glProgramUniform` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}v` can be used to modify a single uniform variable or a uniform
     * variable array. These commands pass a count and a pointer to the values to be loaded into a uniform variable
     * or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or part of an array. When loading *n*
     * elements starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the
     * array will be replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform
     * variable array, values for all array elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of components for each element in *`value`*, and it
     * should match the number of components in the data type of the specified uniform variable (e.g., `1` for
     * `float`, `int`, `bool`; `2` for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * `glProgramUniform{1|2|3|4}{f|i|ui}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glProgramUniform3f` or `glProgramUniform3fv` can be used to load a uniform variable
     * array of type vec3). The number of elements of the uniform variable array to be modified is specified by
     * *`count`*
     *
     * The commands `glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array
     * of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number
     * `2` indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and
     * the number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with
     * the first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param float $v0
     * @param float $v1
     * @return void
     */
    public static function glProgramUniform2f(int $program, int $location, float $v0, float $v1): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($v0 >= -3.40282e38 && $v0 <= 3.40282e38, 'Argument $v0 overflow: C type GLfloat is required');
        assert($v1 >= -3.40282e38 && $v1 <= 3.40282e38, 'Argument $v1 overflow: C type GLfloat is required');

        $proc = self::getProc('glProgramUniform2f', 'void (*)(GLuint program, GLint location, GLfloat v0, GLfloat v1)');
        $proc($program, $location, $v0, $v1);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glProgramUniform` operates on the program object specified by
     * *`program`*.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}` are used to change the value of the uniform variable
     * specified by *`location`* using the values passed as arguments. The number specified in the command should
     * match the number of components in the data type of the specified uniform variable (e.g., `1` for `float`,
     * `int`, `unsigned int`, `bool`; `2` for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix `f` indicates that
     * floating-point values are being passed; the suffix `i` indicates that integer values are being passed; the
     * suffix `ui` indicates that unsigned integer values are being passed, and this type should also match the data
     * type of the specified uniform variable. The `i` variants of this function should be used to provide values for
     * uniform variables defined as `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The `ui` variants of this
     * function should be used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`,
     * `uvec4`, or arrays of these. The `f` variants should be used to provide values for uniform variables of type
     * `float`, `vec2`, `vec3`, `vec4`, or arrays of these. Either the `i`, `ui` or `f` variants may be used to
     * provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these. The
     * uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glProgramUniform` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}v` can be used to modify a single uniform variable or a uniform
     * variable array. These commands pass a count and a pointer to the values to be loaded into a uniform variable
     * or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or part of an array. When loading *n*
     * elements starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the
     * array will be replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform
     * variable array, values for all array elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of components for each element in *`value`*, and it
     * should match the number of components in the data type of the specified uniform variable (e.g., `1` for
     * `float`, `int`, `bool`; `2` for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * `glProgramUniform{1|2|3|4}{f|i|ui}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glProgramUniform3f` or `glProgramUniform3fv` can be used to load a uniform variable
     * array of type vec3). The number of elements of the uniform variable array to be modified is specified by
     * *`count`*
     *
     * The commands `glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array
     * of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number
     * `2` indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and
     * the number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with
     * the first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glProgramUniform2fv(int $program, int $location, int $count, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glProgramUniform2fv', 'void (*)(GLuint program, GLint location, GLsizei count, const GLfloat *value)');
        $proc($program, $location, $count, $value);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glProgramUniform` operates on the program object specified by
     * *`program`*.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}` are used to change the value of the uniform variable
     * specified by *`location`* using the values passed as arguments. The number specified in the command should
     * match the number of components in the data type of the specified uniform variable (e.g., `1` for `float`,
     * `int`, `unsigned int`, `bool`; `2` for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix `f` indicates that
     * floating-point values are being passed; the suffix `i` indicates that integer values are being passed; the
     * suffix `ui` indicates that unsigned integer values are being passed, and this type should also match the data
     * type of the specified uniform variable. The `i` variants of this function should be used to provide values for
     * uniform variables defined as `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The `ui` variants of this
     * function should be used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`,
     * `uvec4`, or arrays of these. The `f` variants should be used to provide values for uniform variables of type
     * `float`, `vec2`, `vec3`, `vec4`, or arrays of these. Either the `i`, `ui` or `f` variants may be used to
     * provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these. The
     * uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glProgramUniform` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}v` can be used to modify a single uniform variable or a uniform
     * variable array. These commands pass a count and a pointer to the values to be loaded into a uniform variable
     * or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or part of an array. When loading *n*
     * elements starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the
     * array will be replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform
     * variable array, values for all array elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of components for each element in *`value`*, and it
     * should match the number of components in the data type of the specified uniform variable (e.g., `1` for
     * `float`, `int`, `bool`; `2` for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * `glProgramUniform{1|2|3|4}{f|i|ui}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glProgramUniform3f` or `glProgramUniform3fv` can be used to load a uniform variable
     * array of type vec3). The number of elements of the uniform variable array to be modified is specified by
     * *`count`*
     *
     * The commands `glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array
     * of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number
     * `2` indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and
     * the number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with
     * the first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param float $v0
     * @param float $v1
     * @return void
     */
    public static function glProgramUniform2d(int $program, int $location, float $v0, float $v1): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($v0 >= \PHP_FLOAT_MIN && $v0 <= \PHP_FLOAT_MAX, 'Argument $v0 overflow: C type GLdouble is required');
        assert($v1 >= \PHP_FLOAT_MIN && $v1 <= \PHP_FLOAT_MAX, 'Argument $v1 overflow: C type GLdouble is required');

        $proc = self::getProc('glProgramUniform2d', 'void (*)(GLuint program, GLint location, GLdouble v0, GLdouble v1)');
        $proc($program, $location, $v0, $v1);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glProgramUniform` operates on the program object specified by
     * *`program`*.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}` are used to change the value of the uniform variable
     * specified by *`location`* using the values passed as arguments. The number specified in the command should
     * match the number of components in the data type of the specified uniform variable (e.g., `1` for `float`,
     * `int`, `unsigned int`, `bool`; `2` for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix `f` indicates that
     * floating-point values are being passed; the suffix `i` indicates that integer values are being passed; the
     * suffix `ui` indicates that unsigned integer values are being passed, and this type should also match the data
     * type of the specified uniform variable. The `i` variants of this function should be used to provide values for
     * uniform variables defined as `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The `ui` variants of this
     * function should be used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`,
     * `uvec4`, or arrays of these. The `f` variants should be used to provide values for uniform variables of type
     * `float`, `vec2`, `vec3`, `vec4`, or arrays of these. Either the `i`, `ui` or `f` variants may be used to
     * provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these. The
     * uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glProgramUniform` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}v` can be used to modify a single uniform variable or a uniform
     * variable array. These commands pass a count and a pointer to the values to be loaded into a uniform variable
     * or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or part of an array. When loading *n*
     * elements starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the
     * array will be replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform
     * variable array, values for all array elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of components for each element in *`value`*, and it
     * should match the number of components in the data type of the specified uniform variable (e.g., `1` for
     * `float`, `int`, `bool`; `2` for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * `glProgramUniform{1|2|3|4}{f|i|ui}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glProgramUniform3f` or `glProgramUniform3fv` can be used to load a uniform variable
     * array of type vec3). The number of elements of the uniform variable array to be modified is specified by
     * *`count`*
     *
     * The commands `glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array
     * of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number
     * `2` indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and
     * the number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with
     * the first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glProgramUniform2dv(int $program, int $location, int $count, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glProgramUniform2dv', 'void (*)(GLuint program, GLint location, GLsizei count, const GLdouble *value)');
        $proc($program, $location, $count, $value);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glProgramUniform` operates on the program object specified by
     * *`program`*.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}` are used to change the value of the uniform variable
     * specified by *`location`* using the values passed as arguments. The number specified in the command should
     * match the number of components in the data type of the specified uniform variable (e.g., `1` for `float`,
     * `int`, `unsigned int`, `bool`; `2` for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix `f` indicates that
     * floating-point values are being passed; the suffix `i` indicates that integer values are being passed; the
     * suffix `ui` indicates that unsigned integer values are being passed, and this type should also match the data
     * type of the specified uniform variable. The `i` variants of this function should be used to provide values for
     * uniform variables defined as `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The `ui` variants of this
     * function should be used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`,
     * `uvec4`, or arrays of these. The `f` variants should be used to provide values for uniform variables of type
     * `float`, `vec2`, `vec3`, `vec4`, or arrays of these. Either the `i`, `ui` or `f` variants may be used to
     * provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these. The
     * uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glProgramUniform` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}v` can be used to modify a single uniform variable or a uniform
     * variable array. These commands pass a count and a pointer to the values to be loaded into a uniform variable
     * or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or part of an array. When loading *n*
     * elements starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the
     * array will be replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform
     * variable array, values for all array elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of components for each element in *`value`*, and it
     * should match the number of components in the data type of the specified uniform variable (e.g., `1` for
     * `float`, `int`, `bool`; `2` for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * `glProgramUniform{1|2|3|4}{f|i|ui}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glProgramUniform3f` or `glProgramUniform3fv` can be used to load a uniform variable
     * array of type vec3). The number of elements of the uniform variable array to be modified is specified by
     * *`count`*
     *
     * The commands `glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array
     * of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number
     * `2` indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and
     * the number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with
     * the first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $v0
     * @param int $v1
     * @return void
     */
    public static function glProgramUniform2ui(int $program, int $location, int $v0, int $v1): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($v0 >= 0 && $v0 <= 4_294_967_295, 'Argument $v0 overflow: C type GLuint is required');
        assert($v1 >= 0 && $v1 <= 4_294_967_295, 'Argument $v1 overflow: C type GLuint is required');

        $proc = self::getProc('glProgramUniform2ui', 'void (*)(GLuint program, GLint location, GLuint v0, GLuint v1)');
        $proc($program, $location, $v0, $v1);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glProgramUniform` operates on the program object specified by
     * *`program`*.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}` are used to change the value of the uniform variable
     * specified by *`location`* using the values passed as arguments. The number specified in the command should
     * match the number of components in the data type of the specified uniform variable (e.g., `1` for `float`,
     * `int`, `unsigned int`, `bool`; `2` for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix `f` indicates that
     * floating-point values are being passed; the suffix `i` indicates that integer values are being passed; the
     * suffix `ui` indicates that unsigned integer values are being passed, and this type should also match the data
     * type of the specified uniform variable. The `i` variants of this function should be used to provide values for
     * uniform variables defined as `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The `ui` variants of this
     * function should be used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`,
     * `uvec4`, or arrays of these. The `f` variants should be used to provide values for uniform variables of type
     * `float`, `vec2`, `vec3`, `vec4`, or arrays of these. Either the `i`, `ui` or `f` variants may be used to
     * provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these. The
     * uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glProgramUniform` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}v` can be used to modify a single uniform variable or a uniform
     * variable array. These commands pass a count and a pointer to the values to be loaded into a uniform variable
     * or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or part of an array. When loading *n*
     * elements starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the
     * array will be replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform
     * variable array, values for all array elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of components for each element in *`value`*, and it
     * should match the number of components in the data type of the specified uniform variable (e.g., `1` for
     * `float`, `int`, `bool`; `2` for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * `glProgramUniform{1|2|3|4}{f|i|ui}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glProgramUniform3f` or `glProgramUniform3fv` can be used to load a uniform variable
     * array of type vec3). The number of elements of the uniform variable array to be modified is specified by
     * *`count`*
     *
     * The commands `glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array
     * of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number
     * `2` indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and
     * the number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with
     * the first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public static function glProgramUniform2uiv(int $program, int $location, int $count, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glProgramUniform2uiv', 'void (*)(GLuint program, GLint location, GLsizei count, const GLuint *value)');
        $proc($program, $location, $count, $value);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glProgramUniform` operates on the program object specified by
     * *`program`*.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}` are used to change the value of the uniform variable
     * specified by *`location`* using the values passed as arguments. The number specified in the command should
     * match the number of components in the data type of the specified uniform variable (e.g., `1` for `float`,
     * `int`, `unsigned int`, `bool`; `2` for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix `f` indicates that
     * floating-point values are being passed; the suffix `i` indicates that integer values are being passed; the
     * suffix `ui` indicates that unsigned integer values are being passed, and this type should also match the data
     * type of the specified uniform variable. The `i` variants of this function should be used to provide values for
     * uniform variables defined as `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The `ui` variants of this
     * function should be used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`,
     * `uvec4`, or arrays of these. The `f` variants should be used to provide values for uniform variables of type
     * `float`, `vec2`, `vec3`, `vec4`, or arrays of these. Either the `i`, `ui` or `f` variants may be used to
     * provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these. The
     * uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glProgramUniform` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}v` can be used to modify a single uniform variable or a uniform
     * variable array. These commands pass a count and a pointer to the values to be loaded into a uniform variable
     * or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or part of an array. When loading *n*
     * elements starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the
     * array will be replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform
     * variable array, values for all array elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of components for each element in *`value`*, and it
     * should match the number of components in the data type of the specified uniform variable (e.g., `1` for
     * `float`, `int`, `bool`; `2` for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * `glProgramUniform{1|2|3|4}{f|i|ui}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glProgramUniform3f` or `glProgramUniform3fv` can be used to load a uniform variable
     * array of type vec3). The number of elements of the uniform variable array to be modified is specified by
     * *`count`*
     *
     * The commands `glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array
     * of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number
     * `2` indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and
     * the number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with
     * the first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $v0
     * @param int $v1
     * @param int $v2
     * @return void
     */
    public static function glProgramUniform3i(int $program, int $location, int $v0, int $v1, int $v2): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($v0 >= \PHP_INT_MIN && $v0 <= \PHP_INT_MAX, 'Argument $v0 overflow: C type GLint is required');
        assert($v1 >= \PHP_INT_MIN && $v1 <= \PHP_INT_MAX, 'Argument $v1 overflow: C type GLint is required');
        assert($v2 >= \PHP_INT_MIN && $v2 <= \PHP_INT_MAX, 'Argument $v2 overflow: C type GLint is required');

        $proc = self::getProc('glProgramUniform3i', 'void (*)(GLuint program, GLint location, GLint v0, GLint v1, GLint v2)');
        $proc($program, $location, $v0, $v1, $v2);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glProgramUniform` operates on the program object specified by
     * *`program`*.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}` are used to change the value of the uniform variable
     * specified by *`location`* using the values passed as arguments. The number specified in the command should
     * match the number of components in the data type of the specified uniform variable (e.g., `1` for `float`,
     * `int`, `unsigned int`, `bool`; `2` for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix `f` indicates that
     * floating-point values are being passed; the suffix `i` indicates that integer values are being passed; the
     * suffix `ui` indicates that unsigned integer values are being passed, and this type should also match the data
     * type of the specified uniform variable. The `i` variants of this function should be used to provide values for
     * uniform variables defined as `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The `ui` variants of this
     * function should be used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`,
     * `uvec4`, or arrays of these. The `f` variants should be used to provide values for uniform variables of type
     * `float`, `vec2`, `vec3`, `vec4`, or arrays of these. Either the `i`, `ui` or `f` variants may be used to
     * provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these. The
     * uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glProgramUniform` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}v` can be used to modify a single uniform variable or a uniform
     * variable array. These commands pass a count and a pointer to the values to be loaded into a uniform variable
     * or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or part of an array. When loading *n*
     * elements starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the
     * array will be replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform
     * variable array, values for all array elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of components for each element in *`value`*, and it
     * should match the number of components in the data type of the specified uniform variable (e.g., `1` for
     * `float`, `int`, `bool`; `2` for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * `glProgramUniform{1|2|3|4}{f|i|ui}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glProgramUniform3f` or `glProgramUniform3fv` can be used to load a uniform variable
     * array of type vec3). The number of elements of the uniform variable array to be modified is specified by
     * *`count`*
     *
     * The commands `glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array
     * of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number
     * `2` indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and
     * the number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with
     * the first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public static function glProgramUniform3iv(int $program, int $location, int $count, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glProgramUniform3iv', 'void (*)(GLuint program, GLint location, GLsizei count, const GLint *value)');
        $proc($program, $location, $count, $value);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glProgramUniform` operates on the program object specified by
     * *`program`*.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}` are used to change the value of the uniform variable
     * specified by *`location`* using the values passed as arguments. The number specified in the command should
     * match the number of components in the data type of the specified uniform variable (e.g., `1` for `float`,
     * `int`, `unsigned int`, `bool`; `2` for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix `f` indicates that
     * floating-point values are being passed; the suffix `i` indicates that integer values are being passed; the
     * suffix `ui` indicates that unsigned integer values are being passed, and this type should also match the data
     * type of the specified uniform variable. The `i` variants of this function should be used to provide values for
     * uniform variables defined as `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The `ui` variants of this
     * function should be used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`,
     * `uvec4`, or arrays of these. The `f` variants should be used to provide values for uniform variables of type
     * `float`, `vec2`, `vec3`, `vec4`, or arrays of these. Either the `i`, `ui` or `f` variants may be used to
     * provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these. The
     * uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glProgramUniform` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}v` can be used to modify a single uniform variable or a uniform
     * variable array. These commands pass a count and a pointer to the values to be loaded into a uniform variable
     * or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or part of an array. When loading *n*
     * elements starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the
     * array will be replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform
     * variable array, values for all array elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of components for each element in *`value`*, and it
     * should match the number of components in the data type of the specified uniform variable (e.g., `1` for
     * `float`, `int`, `bool`; `2` for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * `glProgramUniform{1|2|3|4}{f|i|ui}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glProgramUniform3f` or `glProgramUniform3fv` can be used to load a uniform variable
     * array of type vec3). The number of elements of the uniform variable array to be modified is specified by
     * *`count`*
     *
     * The commands `glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array
     * of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number
     * `2` indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and
     * the number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with
     * the first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param float $v0
     * @param float $v1
     * @param float $v2
     * @return void
     */
    public static function glProgramUniform3f(int $program, int $location, float $v0, float $v1, float $v2): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($v0 >= -3.40282e38 && $v0 <= 3.40282e38, 'Argument $v0 overflow: C type GLfloat is required');
        assert($v1 >= -3.40282e38 && $v1 <= 3.40282e38, 'Argument $v1 overflow: C type GLfloat is required');
        assert($v2 >= -3.40282e38 && $v2 <= 3.40282e38, 'Argument $v2 overflow: C type GLfloat is required');

        $proc = self::getProc('glProgramUniform3f', 'void (*)(GLuint program, GLint location, GLfloat v0, GLfloat v1, GLfloat v2)');
        $proc($program, $location, $v0, $v1, $v2);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glProgramUniform` operates on the program object specified by
     * *`program`*.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}` are used to change the value of the uniform variable
     * specified by *`location`* using the values passed as arguments. The number specified in the command should
     * match the number of components in the data type of the specified uniform variable (e.g., `1` for `float`,
     * `int`, `unsigned int`, `bool`; `2` for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix `f` indicates that
     * floating-point values are being passed; the suffix `i` indicates that integer values are being passed; the
     * suffix `ui` indicates that unsigned integer values are being passed, and this type should also match the data
     * type of the specified uniform variable. The `i` variants of this function should be used to provide values for
     * uniform variables defined as `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The `ui` variants of this
     * function should be used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`,
     * `uvec4`, or arrays of these. The `f` variants should be used to provide values for uniform variables of type
     * `float`, `vec2`, `vec3`, `vec4`, or arrays of these. Either the `i`, `ui` or `f` variants may be used to
     * provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these. The
     * uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glProgramUniform` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}v` can be used to modify a single uniform variable or a uniform
     * variable array. These commands pass a count and a pointer to the values to be loaded into a uniform variable
     * or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or part of an array. When loading *n*
     * elements starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the
     * array will be replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform
     * variable array, values for all array elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of components for each element in *`value`*, and it
     * should match the number of components in the data type of the specified uniform variable (e.g., `1` for
     * `float`, `int`, `bool`; `2` for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * `glProgramUniform{1|2|3|4}{f|i|ui}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glProgramUniform3f` or `glProgramUniform3fv` can be used to load a uniform variable
     * array of type vec3). The number of elements of the uniform variable array to be modified is specified by
     * *`count`*
     *
     * The commands `glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array
     * of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number
     * `2` indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and
     * the number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with
     * the first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glProgramUniform3fv(int $program, int $location, int $count, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glProgramUniform3fv', 'void (*)(GLuint program, GLint location, GLsizei count, const GLfloat *value)');
        $proc($program, $location, $count, $value);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glProgramUniform` operates on the program object specified by
     * *`program`*.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}` are used to change the value of the uniform variable
     * specified by *`location`* using the values passed as arguments. The number specified in the command should
     * match the number of components in the data type of the specified uniform variable (e.g., `1` for `float`,
     * `int`, `unsigned int`, `bool`; `2` for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix `f` indicates that
     * floating-point values are being passed; the suffix `i` indicates that integer values are being passed; the
     * suffix `ui` indicates that unsigned integer values are being passed, and this type should also match the data
     * type of the specified uniform variable. The `i` variants of this function should be used to provide values for
     * uniform variables defined as `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The `ui` variants of this
     * function should be used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`,
     * `uvec4`, or arrays of these. The `f` variants should be used to provide values for uniform variables of type
     * `float`, `vec2`, `vec3`, `vec4`, or arrays of these. Either the `i`, `ui` or `f` variants may be used to
     * provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these. The
     * uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glProgramUniform` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}v` can be used to modify a single uniform variable or a uniform
     * variable array. These commands pass a count and a pointer to the values to be loaded into a uniform variable
     * or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or part of an array. When loading *n*
     * elements starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the
     * array will be replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform
     * variable array, values for all array elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of components for each element in *`value`*, and it
     * should match the number of components in the data type of the specified uniform variable (e.g., `1` for
     * `float`, `int`, `bool`; `2` for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * `glProgramUniform{1|2|3|4}{f|i|ui}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glProgramUniform3f` or `glProgramUniform3fv` can be used to load a uniform variable
     * array of type vec3). The number of elements of the uniform variable array to be modified is specified by
     * *`count`*
     *
     * The commands `glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array
     * of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number
     * `2` indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and
     * the number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with
     * the first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param float $v0
     * @param float $v1
     * @param float $v2
     * @return void
     */
    public static function glProgramUniform3d(int $program, int $location, float $v0, float $v1, float $v2): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($v0 >= \PHP_FLOAT_MIN && $v0 <= \PHP_FLOAT_MAX, 'Argument $v0 overflow: C type GLdouble is required');
        assert($v1 >= \PHP_FLOAT_MIN && $v1 <= \PHP_FLOAT_MAX, 'Argument $v1 overflow: C type GLdouble is required');
        assert($v2 >= \PHP_FLOAT_MIN && $v2 <= \PHP_FLOAT_MAX, 'Argument $v2 overflow: C type GLdouble is required');

        $proc = self::getProc('glProgramUniform3d', 'void (*)(GLuint program, GLint location, GLdouble v0, GLdouble v1, GLdouble v2)');
        $proc($program, $location, $v0, $v1, $v2);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glProgramUniform` operates on the program object specified by
     * *`program`*.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}` are used to change the value of the uniform variable
     * specified by *`location`* using the values passed as arguments. The number specified in the command should
     * match the number of components in the data type of the specified uniform variable (e.g., `1` for `float`,
     * `int`, `unsigned int`, `bool`; `2` for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix `f` indicates that
     * floating-point values are being passed; the suffix `i` indicates that integer values are being passed; the
     * suffix `ui` indicates that unsigned integer values are being passed, and this type should also match the data
     * type of the specified uniform variable. The `i` variants of this function should be used to provide values for
     * uniform variables defined as `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The `ui` variants of this
     * function should be used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`,
     * `uvec4`, or arrays of these. The `f` variants should be used to provide values for uniform variables of type
     * `float`, `vec2`, `vec3`, `vec4`, or arrays of these. Either the `i`, `ui` or `f` variants may be used to
     * provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these. The
     * uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glProgramUniform` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}v` can be used to modify a single uniform variable or a uniform
     * variable array. These commands pass a count and a pointer to the values to be loaded into a uniform variable
     * or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or part of an array. When loading *n*
     * elements starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the
     * array will be replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform
     * variable array, values for all array elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of components for each element in *`value`*, and it
     * should match the number of components in the data type of the specified uniform variable (e.g., `1` for
     * `float`, `int`, `bool`; `2` for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * `glProgramUniform{1|2|3|4}{f|i|ui}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glProgramUniform3f` or `glProgramUniform3fv` can be used to load a uniform variable
     * array of type vec3). The number of elements of the uniform variable array to be modified is specified by
     * *`count`*
     *
     * The commands `glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array
     * of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number
     * `2` indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and
     * the number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with
     * the first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glProgramUniform3dv(int $program, int $location, int $count, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glProgramUniform3dv', 'void (*)(GLuint program, GLint location, GLsizei count, const GLdouble *value)');
        $proc($program, $location, $count, $value);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glProgramUniform` operates on the program object specified by
     * *`program`*.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}` are used to change the value of the uniform variable
     * specified by *`location`* using the values passed as arguments. The number specified in the command should
     * match the number of components in the data type of the specified uniform variable (e.g., `1` for `float`,
     * `int`, `unsigned int`, `bool`; `2` for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix `f` indicates that
     * floating-point values are being passed; the suffix `i` indicates that integer values are being passed; the
     * suffix `ui` indicates that unsigned integer values are being passed, and this type should also match the data
     * type of the specified uniform variable. The `i` variants of this function should be used to provide values for
     * uniform variables defined as `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The `ui` variants of this
     * function should be used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`,
     * `uvec4`, or arrays of these. The `f` variants should be used to provide values for uniform variables of type
     * `float`, `vec2`, `vec3`, `vec4`, or arrays of these. Either the `i`, `ui` or `f` variants may be used to
     * provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these. The
     * uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glProgramUniform` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}v` can be used to modify a single uniform variable or a uniform
     * variable array. These commands pass a count and a pointer to the values to be loaded into a uniform variable
     * or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or part of an array. When loading *n*
     * elements starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the
     * array will be replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform
     * variable array, values for all array elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of components for each element in *`value`*, and it
     * should match the number of components in the data type of the specified uniform variable (e.g., `1` for
     * `float`, `int`, `bool`; `2` for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * `glProgramUniform{1|2|3|4}{f|i|ui}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glProgramUniform3f` or `glProgramUniform3fv` can be used to load a uniform variable
     * array of type vec3). The number of elements of the uniform variable array to be modified is specified by
     * *`count`*
     *
     * The commands `glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array
     * of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number
     * `2` indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and
     * the number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with
     * the first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $v0
     * @param int $v1
     * @param int $v2
     * @return void
     */
    public static function glProgramUniform3ui(int $program, int $location, int $v0, int $v1, int $v2): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($v0 >= 0 && $v0 <= 4_294_967_295, 'Argument $v0 overflow: C type GLuint is required');
        assert($v1 >= 0 && $v1 <= 4_294_967_295, 'Argument $v1 overflow: C type GLuint is required');
        assert($v2 >= 0 && $v2 <= 4_294_967_295, 'Argument $v2 overflow: C type GLuint is required');

        $proc = self::getProc('glProgramUniform3ui', 'void (*)(GLuint program, GLint location, GLuint v0, GLuint v1, GLuint v2)');
        $proc($program, $location, $v0, $v1, $v2);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glProgramUniform` operates on the program object specified by
     * *`program`*.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}` are used to change the value of the uniform variable
     * specified by *`location`* using the values passed as arguments. The number specified in the command should
     * match the number of components in the data type of the specified uniform variable (e.g., `1` for `float`,
     * `int`, `unsigned int`, `bool`; `2` for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix `f` indicates that
     * floating-point values are being passed; the suffix `i` indicates that integer values are being passed; the
     * suffix `ui` indicates that unsigned integer values are being passed, and this type should also match the data
     * type of the specified uniform variable. The `i` variants of this function should be used to provide values for
     * uniform variables defined as `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The `ui` variants of this
     * function should be used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`,
     * `uvec4`, or arrays of these. The `f` variants should be used to provide values for uniform variables of type
     * `float`, `vec2`, `vec3`, `vec4`, or arrays of these. Either the `i`, `ui` or `f` variants may be used to
     * provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these. The
     * uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glProgramUniform` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}v` can be used to modify a single uniform variable or a uniform
     * variable array. These commands pass a count and a pointer to the values to be loaded into a uniform variable
     * or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or part of an array. When loading *n*
     * elements starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the
     * array will be replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform
     * variable array, values for all array elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of components for each element in *`value`*, and it
     * should match the number of components in the data type of the specified uniform variable (e.g., `1` for
     * `float`, `int`, `bool`; `2` for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * `glProgramUniform{1|2|3|4}{f|i|ui}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glProgramUniform3f` or `glProgramUniform3fv` can be used to load a uniform variable
     * array of type vec3). The number of elements of the uniform variable array to be modified is specified by
     * *`count`*
     *
     * The commands `glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array
     * of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number
     * `2` indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and
     * the number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with
     * the first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public static function glProgramUniform3uiv(int $program, int $location, int $count, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glProgramUniform3uiv', 'void (*)(GLuint program, GLint location, GLsizei count, const GLuint *value)');
        $proc($program, $location, $count, $value);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glProgramUniform` operates on the program object specified by
     * *`program`*.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}` are used to change the value of the uniform variable
     * specified by *`location`* using the values passed as arguments. The number specified in the command should
     * match the number of components in the data type of the specified uniform variable (e.g., `1` for `float`,
     * `int`, `unsigned int`, `bool`; `2` for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix `f` indicates that
     * floating-point values are being passed; the suffix `i` indicates that integer values are being passed; the
     * suffix `ui` indicates that unsigned integer values are being passed, and this type should also match the data
     * type of the specified uniform variable. The `i` variants of this function should be used to provide values for
     * uniform variables defined as `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The `ui` variants of this
     * function should be used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`,
     * `uvec4`, or arrays of these. The `f` variants should be used to provide values for uniform variables of type
     * `float`, `vec2`, `vec3`, `vec4`, or arrays of these. Either the `i`, `ui` or `f` variants may be used to
     * provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these. The
     * uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glProgramUniform` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}v` can be used to modify a single uniform variable or a uniform
     * variable array. These commands pass a count and a pointer to the values to be loaded into a uniform variable
     * or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or part of an array. When loading *n*
     * elements starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the
     * array will be replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform
     * variable array, values for all array elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of components for each element in *`value`*, and it
     * should match the number of components in the data type of the specified uniform variable (e.g., `1` for
     * `float`, `int`, `bool`; `2` for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * `glProgramUniform{1|2|3|4}{f|i|ui}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glProgramUniform3f` or `glProgramUniform3fv` can be used to load a uniform variable
     * array of type vec3). The number of elements of the uniform variable array to be modified is specified by
     * *`count`*
     *
     * The commands `glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array
     * of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number
     * `2` indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and
     * the number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with
     * the first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $v0
     * @param int $v1
     * @param int $v2
     * @param int $v3
     * @return void
     */
    public static function glProgramUniform4i(int $program, int $location, int $v0, int $v1, int $v2, int $v3): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($v0 >= \PHP_INT_MIN && $v0 <= \PHP_INT_MAX, 'Argument $v0 overflow: C type GLint is required');
        assert($v1 >= \PHP_INT_MIN && $v1 <= \PHP_INT_MAX, 'Argument $v1 overflow: C type GLint is required');
        assert($v2 >= \PHP_INT_MIN && $v2 <= \PHP_INT_MAX, 'Argument $v2 overflow: C type GLint is required');
        assert($v3 >= \PHP_INT_MIN && $v3 <= \PHP_INT_MAX, 'Argument $v3 overflow: C type GLint is required');

        $proc = self::getProc('glProgramUniform4i', 'void (*)(GLuint program, GLint location, GLint v0, GLint v1, GLint v2, GLint v3)');
        $proc($program, $location, $v0, $v1, $v2, $v3);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glProgramUniform` operates on the program object specified by
     * *`program`*.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}` are used to change the value of the uniform variable
     * specified by *`location`* using the values passed as arguments. The number specified in the command should
     * match the number of components in the data type of the specified uniform variable (e.g., `1` for `float`,
     * `int`, `unsigned int`, `bool`; `2` for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix `f` indicates that
     * floating-point values are being passed; the suffix `i` indicates that integer values are being passed; the
     * suffix `ui` indicates that unsigned integer values are being passed, and this type should also match the data
     * type of the specified uniform variable. The `i` variants of this function should be used to provide values for
     * uniform variables defined as `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The `ui` variants of this
     * function should be used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`,
     * `uvec4`, or arrays of these. The `f` variants should be used to provide values for uniform variables of type
     * `float`, `vec2`, `vec3`, `vec4`, or arrays of these. Either the `i`, `ui` or `f` variants may be used to
     * provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these. The
     * uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glProgramUniform` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}v` can be used to modify a single uniform variable or a uniform
     * variable array. These commands pass a count and a pointer to the values to be loaded into a uniform variable
     * or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or part of an array. When loading *n*
     * elements starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the
     * array will be replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform
     * variable array, values for all array elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of components for each element in *`value`*, and it
     * should match the number of components in the data type of the specified uniform variable (e.g., `1` for
     * `float`, `int`, `bool`; `2` for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * `glProgramUniform{1|2|3|4}{f|i|ui}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glProgramUniform3f` or `glProgramUniform3fv` can be used to load a uniform variable
     * array of type vec3). The number of elements of the uniform variable array to be modified is specified by
     * *`count`*
     *
     * The commands `glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array
     * of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number
     * `2` indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and
     * the number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with
     * the first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public static function glProgramUniform4iv(int $program, int $location, int $count, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glProgramUniform4iv', 'void (*)(GLuint program, GLint location, GLsizei count, const GLint *value)');
        $proc($program, $location, $count, $value);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glProgramUniform` operates on the program object specified by
     * *`program`*.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}` are used to change the value of the uniform variable
     * specified by *`location`* using the values passed as arguments. The number specified in the command should
     * match the number of components in the data type of the specified uniform variable (e.g., `1` for `float`,
     * `int`, `unsigned int`, `bool`; `2` for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix `f` indicates that
     * floating-point values are being passed; the suffix `i` indicates that integer values are being passed; the
     * suffix `ui` indicates that unsigned integer values are being passed, and this type should also match the data
     * type of the specified uniform variable. The `i` variants of this function should be used to provide values for
     * uniform variables defined as `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The `ui` variants of this
     * function should be used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`,
     * `uvec4`, or arrays of these. The `f` variants should be used to provide values for uniform variables of type
     * `float`, `vec2`, `vec3`, `vec4`, or arrays of these. Either the `i`, `ui` or `f` variants may be used to
     * provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these. The
     * uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glProgramUniform` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}v` can be used to modify a single uniform variable or a uniform
     * variable array. These commands pass a count and a pointer to the values to be loaded into a uniform variable
     * or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or part of an array. When loading *n*
     * elements starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the
     * array will be replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform
     * variable array, values for all array elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of components for each element in *`value`*, and it
     * should match the number of components in the data type of the specified uniform variable (e.g., `1` for
     * `float`, `int`, `bool`; `2` for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * `glProgramUniform{1|2|3|4}{f|i|ui}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glProgramUniform3f` or `glProgramUniform3fv` can be used to load a uniform variable
     * array of type vec3). The number of elements of the uniform variable array to be modified is specified by
     * *`count`*
     *
     * The commands `glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array
     * of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number
     * `2` indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and
     * the number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with
     * the first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param float $v0
     * @param float $v1
     * @param float $v2
     * @param float $v3
     * @return void
     */
    public static function glProgramUniform4f(int $program, int $location, float $v0, float $v1, float $v2, float $v3): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($v0 >= -3.40282e38 && $v0 <= 3.40282e38, 'Argument $v0 overflow: C type GLfloat is required');
        assert($v1 >= -3.40282e38 && $v1 <= 3.40282e38, 'Argument $v1 overflow: C type GLfloat is required');
        assert($v2 >= -3.40282e38 && $v2 <= 3.40282e38, 'Argument $v2 overflow: C type GLfloat is required');
        assert($v3 >= -3.40282e38 && $v3 <= 3.40282e38, 'Argument $v3 overflow: C type GLfloat is required');

        $proc = self::getProc('glProgramUniform4f', 'void (*)(GLuint program, GLint location, GLfloat v0, GLfloat v1, GLfloat v2, GLfloat v3)');
        $proc($program, $location, $v0, $v1, $v2, $v3);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glProgramUniform` operates on the program object specified by
     * *`program`*.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}` are used to change the value of the uniform variable
     * specified by *`location`* using the values passed as arguments. The number specified in the command should
     * match the number of components in the data type of the specified uniform variable (e.g., `1` for `float`,
     * `int`, `unsigned int`, `bool`; `2` for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix `f` indicates that
     * floating-point values are being passed; the suffix `i` indicates that integer values are being passed; the
     * suffix `ui` indicates that unsigned integer values are being passed, and this type should also match the data
     * type of the specified uniform variable. The `i` variants of this function should be used to provide values for
     * uniform variables defined as `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The `ui` variants of this
     * function should be used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`,
     * `uvec4`, or arrays of these. The `f` variants should be used to provide values for uniform variables of type
     * `float`, `vec2`, `vec3`, `vec4`, or arrays of these. Either the `i`, `ui` or `f` variants may be used to
     * provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these. The
     * uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glProgramUniform` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}v` can be used to modify a single uniform variable or a uniform
     * variable array. These commands pass a count and a pointer to the values to be loaded into a uniform variable
     * or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or part of an array. When loading *n*
     * elements starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the
     * array will be replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform
     * variable array, values for all array elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of components for each element in *`value`*, and it
     * should match the number of components in the data type of the specified uniform variable (e.g., `1` for
     * `float`, `int`, `bool`; `2` for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * `glProgramUniform{1|2|3|4}{f|i|ui}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glProgramUniform3f` or `glProgramUniform3fv` can be used to load a uniform variable
     * array of type vec3). The number of elements of the uniform variable array to be modified is specified by
     * *`count`*
     *
     * The commands `glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array
     * of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number
     * `2` indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and
     * the number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with
     * the first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glProgramUniform4fv(int $program, int $location, int $count, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glProgramUniform4fv', 'void (*)(GLuint program, GLint location, GLsizei count, const GLfloat *value)');
        $proc($program, $location, $count, $value);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glProgramUniform` operates on the program object specified by
     * *`program`*.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}` are used to change the value of the uniform variable
     * specified by *`location`* using the values passed as arguments. The number specified in the command should
     * match the number of components in the data type of the specified uniform variable (e.g., `1` for `float`,
     * `int`, `unsigned int`, `bool`; `2` for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix `f` indicates that
     * floating-point values are being passed; the suffix `i` indicates that integer values are being passed; the
     * suffix `ui` indicates that unsigned integer values are being passed, and this type should also match the data
     * type of the specified uniform variable. The `i` variants of this function should be used to provide values for
     * uniform variables defined as `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The `ui` variants of this
     * function should be used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`,
     * `uvec4`, or arrays of these. The `f` variants should be used to provide values for uniform variables of type
     * `float`, `vec2`, `vec3`, `vec4`, or arrays of these. Either the `i`, `ui` or `f` variants may be used to
     * provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these. The
     * uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glProgramUniform` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}v` can be used to modify a single uniform variable or a uniform
     * variable array. These commands pass a count and a pointer to the values to be loaded into a uniform variable
     * or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or part of an array. When loading *n*
     * elements starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the
     * array will be replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform
     * variable array, values for all array elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of components for each element in *`value`*, and it
     * should match the number of components in the data type of the specified uniform variable (e.g., `1` for
     * `float`, `int`, `bool`; `2` for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * `glProgramUniform{1|2|3|4}{f|i|ui}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glProgramUniform3f` or `glProgramUniform3fv` can be used to load a uniform variable
     * array of type vec3). The number of elements of the uniform variable array to be modified is specified by
     * *`count`*
     *
     * The commands `glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array
     * of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number
     * `2` indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and
     * the number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with
     * the first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param float $v0
     * @param float $v1
     * @param float $v2
     * @param float $v3
     * @return void
     */
    public static function glProgramUniform4d(int $program, int $location, float $v0, float $v1, float $v2, float $v3): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($v0 >= \PHP_FLOAT_MIN && $v0 <= \PHP_FLOAT_MAX, 'Argument $v0 overflow: C type GLdouble is required');
        assert($v1 >= \PHP_FLOAT_MIN && $v1 <= \PHP_FLOAT_MAX, 'Argument $v1 overflow: C type GLdouble is required');
        assert($v2 >= \PHP_FLOAT_MIN && $v2 <= \PHP_FLOAT_MAX, 'Argument $v2 overflow: C type GLdouble is required');
        assert($v3 >= \PHP_FLOAT_MIN && $v3 <= \PHP_FLOAT_MAX, 'Argument $v3 overflow: C type GLdouble is required');

        $proc = self::getProc('glProgramUniform4d', 'void (*)(GLuint program, GLint location, GLdouble v0, GLdouble v1, GLdouble v2, GLdouble v3)');
        $proc($program, $location, $v0, $v1, $v2, $v3);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glProgramUniform` operates on the program object specified by
     * *`program`*.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}` are used to change the value of the uniform variable
     * specified by *`location`* using the values passed as arguments. The number specified in the command should
     * match the number of components in the data type of the specified uniform variable (e.g., `1` for `float`,
     * `int`, `unsigned int`, `bool`; `2` for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix `f` indicates that
     * floating-point values are being passed; the suffix `i` indicates that integer values are being passed; the
     * suffix `ui` indicates that unsigned integer values are being passed, and this type should also match the data
     * type of the specified uniform variable. The `i` variants of this function should be used to provide values for
     * uniform variables defined as `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The `ui` variants of this
     * function should be used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`,
     * `uvec4`, or arrays of these. The `f` variants should be used to provide values for uniform variables of type
     * `float`, `vec2`, `vec3`, `vec4`, or arrays of these. Either the `i`, `ui` or `f` variants may be used to
     * provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these. The
     * uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glProgramUniform` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}v` can be used to modify a single uniform variable or a uniform
     * variable array. These commands pass a count and a pointer to the values to be loaded into a uniform variable
     * or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or part of an array. When loading *n*
     * elements starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the
     * array will be replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform
     * variable array, values for all array elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of components for each element in *`value`*, and it
     * should match the number of components in the data type of the specified uniform variable (e.g., `1` for
     * `float`, `int`, `bool`; `2` for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * `glProgramUniform{1|2|3|4}{f|i|ui}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glProgramUniform3f` or `glProgramUniform3fv` can be used to load a uniform variable
     * array of type vec3). The number of elements of the uniform variable array to be modified is specified by
     * *`count`*
     *
     * The commands `glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array
     * of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number
     * `2` indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and
     * the number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with
     * the first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glProgramUniform4dv(int $program, int $location, int $count, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glProgramUniform4dv', 'void (*)(GLuint program, GLint location, GLsizei count, const GLdouble *value)');
        $proc($program, $location, $count, $value);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glProgramUniform` operates on the program object specified by
     * *`program`*.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}` are used to change the value of the uniform variable
     * specified by *`location`* using the values passed as arguments. The number specified in the command should
     * match the number of components in the data type of the specified uniform variable (e.g., `1` for `float`,
     * `int`, `unsigned int`, `bool`; `2` for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix `f` indicates that
     * floating-point values are being passed; the suffix `i` indicates that integer values are being passed; the
     * suffix `ui` indicates that unsigned integer values are being passed, and this type should also match the data
     * type of the specified uniform variable. The `i` variants of this function should be used to provide values for
     * uniform variables defined as `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The `ui` variants of this
     * function should be used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`,
     * `uvec4`, or arrays of these. The `f` variants should be used to provide values for uniform variables of type
     * `float`, `vec2`, `vec3`, `vec4`, or arrays of these. Either the `i`, `ui` or `f` variants may be used to
     * provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these. The
     * uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glProgramUniform` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}v` can be used to modify a single uniform variable or a uniform
     * variable array. These commands pass a count and a pointer to the values to be loaded into a uniform variable
     * or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or part of an array. When loading *n*
     * elements starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the
     * array will be replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform
     * variable array, values for all array elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of components for each element in *`value`*, and it
     * should match the number of components in the data type of the specified uniform variable (e.g., `1` for
     * `float`, `int`, `bool`; `2` for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * `glProgramUniform{1|2|3|4}{f|i|ui}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glProgramUniform3f` or `glProgramUniform3fv` can be used to load a uniform variable
     * array of type vec3). The number of elements of the uniform variable array to be modified is specified by
     * *`count`*
     *
     * The commands `glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array
     * of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number
     * `2` indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and
     * the number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with
     * the first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $v0
     * @param int $v1
     * @param int $v2
     * @param int $v3
     * @return void
     */
    public static function glProgramUniform4ui(int $program, int $location, int $v0, int $v1, int $v2, int $v3): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($v0 >= 0 && $v0 <= 4_294_967_295, 'Argument $v0 overflow: C type GLuint is required');
        assert($v1 >= 0 && $v1 <= 4_294_967_295, 'Argument $v1 overflow: C type GLuint is required');
        assert($v2 >= 0 && $v2 <= 4_294_967_295, 'Argument $v2 overflow: C type GLuint is required');
        assert($v3 >= 0 && $v3 <= 4_294_967_295, 'Argument $v3 overflow: C type GLuint is required');

        $proc = self::getProc('glProgramUniform4ui', 'void (*)(GLuint program, GLint location, GLuint v0, GLuint v1, GLuint v2, GLuint v3)');
        $proc($program, $location, $v0, $v1, $v2, $v3);
    }

    /**
     * Modifies the value of a uniform variable or a uniform variable array. The location of the uniform variable to
     * be modified is specified by *`location`*, which should be a value returned by
     * {@see glGetUniformLocation}. `glProgramUniform` operates on the program object specified by
     * *`program`*.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}` are used to change the value of the uniform variable
     * specified by *`location`* using the values passed as arguments. The number specified in the command should
     * match the number of components in the data type of the specified uniform variable (e.g., `1` for `float`,
     * `int`, `unsigned int`, `bool`; `2` for `vec2`, `ivec2`, `uvec2`, `bvec2`, etc.). The suffix `f` indicates that
     * floating-point values are being passed; the suffix `i` indicates that integer values are being passed; the
     * suffix `ui` indicates that unsigned integer values are being passed, and this type should also match the data
     * type of the specified uniform variable. The `i` variants of this function should be used to provide values for
     * uniform variables defined as `int`, `ivec2`, `ivec3`, `ivec4`, or arrays of these. The `ui` variants of this
     * function should be used to provide values for uniform variables defined as `unsigned int`, `uvec2`, `uvec3`,
     * `uvec4`, or arrays of these. The `f` variants should be used to provide values for uniform variables of type
     * `float`, `vec2`, `vec3`, `vec4`, or arrays of these. Either the `i`, `ui` or `f` variants may be used to
     * provide values for uniform variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of these. The
     * uniform variable will be set to `false` if the input value is 0 or 0.0f, and it will be set to `true`
     * otherwise.
     *
     * All active uniform variables defined in a program object are initialized to 0 when the program object is
     * linked successfully. They retain the values assigned to them by a call to `glProgramUniform` until the next
     * successful link operation occurs on the program object, when they are once again initialized to 0.
     *
     * The commands `glProgramUniform{1|2|3|4}{f|i|ui}v` can be used to modify a single uniform variable or a uniform
     * variable array. These commands pass a count and a pointer to the values to be loaded into a uniform variable
     * or a uniform variable array. A count of 1 should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or part of an array. When loading *n*
     * elements starting at an arbitrary position *m* in a uniform variable array, elements *m* + *n* - 1 in the
     * array will be replaced with the new values. If *`m`* + *`n`* - 1 is larger than the size of the uniform
     * variable array, values for all array elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of components for each element in *`value`*, and it
     * should match the number of components in the data type of the specified uniform variable (e.g., `1` for
     * `float`, `int`, `bool`; `2` for `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name of the
     * command must match the data type for the specified uniform variable as described previously for
     * `glProgramUniform{1|2|3|4}{f|i|ui}`.
     *
     * For uniform variable arrays, each element of the array is considered to be of the type indicated in the name
     * of the command (e.g., `glProgramUniform3f` or `glProgramUniform3fv` can be used to load a uniform variable
     * array of type vec3). The number of elements of the uniform variable array to be modified is specified by
     * *`count`*
     *
     * The commands `glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv` are used to modify a matrix or an array
     * of matrices. The numbers in the command name are interpreted as the dimensionality of the matrix. The number
     * `2` indicates a 2 × 2 matrix (i.e., 4 values), the number `3` indicates a 3 × 3 matrix (i.e., 9 values), and
     * the number `4` indicates a 4 × 4 matrix (i.e., 16 values). Non-square matrix dimensionality is explicit, with
     * the first number representing the number of columns and the second number representing the number of rows. For
     * example, `2x4` indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values). If *`transpose`* is
     * `GL_FALSE`, each matrix is assumed to be supplied in column major order. If *`transpose`* is `GL_TRUE`, each
     * matrix is assumed to be supplied in row major order. The *`count`* argument indicates the number of matrices
     * to be passed. A count of 1 should be used if modifying the value of a single matrix, and a count greater than
     * 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public static function glProgramUniform4uiv(int $program, int $location, int $count, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glProgramUniform4uiv', 'void (*)(GLuint program, GLint location, GLsizei count, const GLuint *value)');
        $proc($program, $location, $count, $value);
    }

    /**
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glProgramUniformMatrix2fv(int $program, int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glProgramUniformMatrix2fv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glProgramUniformMatrix3fv(int $program, int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glProgramUniformMatrix3fv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glProgramUniformMatrix4fv(int $program, int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glProgramUniformMatrix4fv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glProgramUniformMatrix2dv(int $program, int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glProgramUniformMatrix2dv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glProgramUniformMatrix3dv(int $program, int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glProgramUniformMatrix3dv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glProgramUniformMatrix4dv(int $program, int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glProgramUniformMatrix4dv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glProgramUniformMatrix2x3fv(int $program, int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glProgramUniformMatrix2x3fv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glProgramUniformMatrix3x2fv(int $program, int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glProgramUniformMatrix3x2fv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glProgramUniformMatrix2x4fv(int $program, int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glProgramUniformMatrix2x4fv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glProgramUniformMatrix4x2fv(int $program, int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glProgramUniformMatrix4x2fv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glProgramUniformMatrix3x4fv(int $program, int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glProgramUniformMatrix3x4fv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glProgramUniformMatrix4x3fv(int $program, int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glProgramUniformMatrix4x3fv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glProgramUniformMatrix2x3dv(int $program, int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glProgramUniformMatrix2x3dv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glProgramUniformMatrix3x2dv(int $program, int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glProgramUniformMatrix3x2dv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glProgramUniformMatrix2x4dv(int $program, int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glProgramUniformMatrix2x4dv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glProgramUniformMatrix4x2dv(int $program, int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glProgramUniformMatrix4x2dv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glProgramUniformMatrix3x4dv(int $program, int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glProgramUniformMatrix3x4dv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * @since 4.1
     * @param int $program
     * @param int $location
     * @param int $count
     * @param int $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public static function glProgramUniformMatrix4x3dv(int $program, int $location, int $count, int $transpose, ?\FFI\CData $value): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($program >= 0 && $program <= 4_294_967_295, 'Argument $program overflow: C type GLuint is required');
        assert($location >= \PHP_INT_MIN && $location <= \PHP_INT_MAX, 'Argument $location overflow: C type GLint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');
        assert($transpose >= 0 && $transpose <= 255, 'Argument $transpose overflow: C type GLboolean is required');

        $proc = self::getProc('glProgramUniformMatrix4x3dv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * Instructs the implementation to validate the shader executables contained in *`pipeline`* against the current
     * GL state. The implementation may use this as an opportunity to perform any internal shader modifications that
     * may be required to ensure correct operation of the installed shaders given the current GL state.
     *
     * After a program pipeline has been validated, its validation status is set to `GL_TRUE`. The validation status
     * of a program pipeline object may be queried by calling {@see glGetProgramPipeline} with
     * parameter `GL_VALIDATE_STATUS`.
     *
     * If *`pipeline`* is a name previously returned from a call to {@see glGenProgramPipelines}
     * but that has not yet been bound by a call to {@see glBindProgramPipeline}, a new program
     * pipeline object is created with name *`pipeline`* and the default state vector.
     *
     * @see http://docs.gl/gl4/glValidateProgramPipeline
     * @since 4.1
     * @param int $pipeline
     * @return void
     */
    public static function glValidateProgramPipeline(int $pipeline): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($pipeline >= 0 && $pipeline <= 4_294_967_295, 'Argument $pipeline overflow: C type GLuint is required');

        $proc = self::getProc('glValidateProgramPipeline', 'void (*)(GLuint pipeline)');
        $proc($pipeline);
    }

    /**
     * Retrieves the info log for the program pipeline object *`pipeline`*. The info log, including its null
     * terminator, is written into the array of characters whose address is given by *`infoLog`*. The maximum number
     * of characters that may be written into *`infoLog`* is given by *`bufSize`*, and the actual number of
     * characters written into *`infoLog`* is returned in the integer whose address is given by *`length`*. If
     * *`length`* is `NULL`, no length is returned.
     *
     * The actual length of the info log for the program pipeline may be determined by calling
     * {@see glGetProgramPipeline} with *`pname`* set to `GL_INFO_LOG_LENGTH`.
     *
     * @see http://docs.gl/gl4/glGetProgramPipelineInfoLog
     * @since 4.1
     * @param int $pipeline
     * @param int $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @param \FFI\CData|\FFI\CIntPtr|null $infoLog
     * @return void
     */
    public static function glGetProgramPipelineInfoLog(int $pipeline, int $bufSize, ?\FFI\CData $length, ?\FFI\CData $infoLog): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($pipeline >= 0 && $pipeline <= 4_294_967_295, 'Argument $pipeline overflow: C type GLuint is required');
        assert($bufSize >= \PHP_INT_MIN && $bufSize <= \PHP_INT_MAX, 'Argument $bufSize overflow: C type GLsizei is required');

        $proc = self::getProc('glGetProgramPipelineInfoLog', 'void (*)(GLuint pipeline, GLsizei bufSize, GLsizei *length, GLchar *infoLog)');
        $proc($pipeline, $bufSize, $length, $infoLog);
    }

    /**
     * @since 4.1
     * @param int $index
     * @param float $x
     * @return void
     */
    public static function glVertexAttribL1d(int $index, float $x): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($x >= \PHP_FLOAT_MIN && $x <= \PHP_FLOAT_MAX, 'Argument $x overflow: C type GLdouble is required');

        $proc = self::getProc('glVertexAttribL1d', 'void (*)(GLuint index, GLdouble x)');
        $proc($index, $x);
    }

    /**
     * @since 4.1
     * @param int $index
     * @param float $x
     * @param float $y
     * @return void
     */
    public static function glVertexAttribL2d(int $index, float $x, float $y): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($x >= \PHP_FLOAT_MIN && $x <= \PHP_FLOAT_MAX, 'Argument $x overflow: C type GLdouble is required');
        assert($y >= \PHP_FLOAT_MIN && $y <= \PHP_FLOAT_MAX, 'Argument $y overflow: C type GLdouble is required');

        $proc = self::getProc('glVertexAttribL2d', 'void (*)(GLuint index, GLdouble x, GLdouble y)');
        $proc($index, $x, $y);
    }

    /**
     * @since 4.1
     * @param int $index
     * @param float $x
     * @param float $y
     * @param float $z
     * @return void
     */
    public static function glVertexAttribL3d(int $index, float $x, float $y, float $z): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($x >= \PHP_FLOAT_MIN && $x <= \PHP_FLOAT_MAX, 'Argument $x overflow: C type GLdouble is required');
        assert($y >= \PHP_FLOAT_MIN && $y <= \PHP_FLOAT_MAX, 'Argument $y overflow: C type GLdouble is required');
        assert($z >= \PHP_FLOAT_MIN && $z <= \PHP_FLOAT_MAX, 'Argument $z overflow: C type GLdouble is required');

        $proc = self::getProc('glVertexAttribL3d', 'void (*)(GLuint index, GLdouble x, GLdouble y, GLdouble z)');
        $proc($index, $x, $y, $z);
    }

    /**
     * @since 4.1
     * @param int $index
     * @param float $x
     * @param float $y
     * @param float $z
     * @param float $w
     * @return void
     */
    public static function glVertexAttribL4d(int $index, float $x, float $y, float $z, float $w): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($x >= \PHP_FLOAT_MIN && $x <= \PHP_FLOAT_MAX, 'Argument $x overflow: C type GLdouble is required');
        assert($y >= \PHP_FLOAT_MIN && $y <= \PHP_FLOAT_MAX, 'Argument $y overflow: C type GLdouble is required');
        assert($z >= \PHP_FLOAT_MIN && $z <= \PHP_FLOAT_MAX, 'Argument $z overflow: C type GLdouble is required');
        assert($w >= \PHP_FLOAT_MIN && $w <= \PHP_FLOAT_MAX, 'Argument $w overflow: C type GLdouble is required');

        $proc = self::getProc('glVertexAttribL4d', 'void (*)(GLuint index, GLdouble x, GLdouble y, GLdouble z, GLdouble w)');
        $proc($index, $x, $y, $z, $w);
    }

    /**
     * @since 4.1
     * @param int $index
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glVertexAttribL1dv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttribL1dv', 'void (*)(GLuint index, const GLdouble *v)');
        $proc($index, $v);
    }

    /**
     * @since 4.1
     * @param int $index
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glVertexAttribL2dv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttribL2dv', 'void (*)(GLuint index, const GLdouble *v)');
        $proc($index, $v);
    }

    /**
     * @since 4.1
     * @param int $index
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glVertexAttribL3dv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttribL3dv', 'void (*)(GLuint index, const GLdouble *v)');
        $proc($index, $v);
    }

    /**
     * @since 4.1
     * @param int $index
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glVertexAttribL4dv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glVertexAttribL4dv', 'void (*)(GLuint index, const GLdouble *v)');
        $proc($index, $v);
    }

    /**
     * @since 4.1
     * @param int $index
     * @param int $size
     * @param int $type
     * @param int $stride
     * @param \FFI\CData|\FFI\CPtr|null $pointer
     * @return void
     */
    public static function glVertexAttribLPointer(int $index, int $size, int $type, int $stride, ?\FFI\CData $pointer): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($size >= \PHP_INT_MIN && $size <= \PHP_INT_MAX, 'Argument $size overflow: C type GLint is required');
        assert($type >= 0 && $type <= 4_294_967_295, 'Argument $type overflow: C type GLenum is required');
        assert($stride >= \PHP_INT_MIN && $stride <= \PHP_INT_MAX, 'Argument $stride overflow: C type GLsizei is required');

        $proc = self::getProc('glVertexAttribLPointer', 'void (*)(GLuint index, GLint size, GLenum type, GLsizei stride, const void *pointer)');
        $proc($index, $size, $type, $stride, $pointer);
    }

    /**
     * @since 4.1
     * @param int $index
     * @param int $pname
     * @param \FFI\CData|\FFI\CFloatPtr|null $params
     * @return void
     */
    public static function glGetVertexAttribLdv(int $index, int $pname, ?\FFI\CData $params): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($pname >= 0 && $pname <= 4_294_967_295, 'Argument $pname overflow: C type GLenum is required');

        $proc = self::getProc('glGetVertexAttribLdv', 'void (*)(GLuint index, GLenum pname, GLdouble *params)');
        $proc($index, $pname, $params);
    }

    /**
     * @since 4.1
     * @param int $first
     * @param int $count
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glViewportArrayv(int $first, int $count, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($first >= 0 && $first <= 4_294_967_295, 'Argument $first overflow: C type GLuint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glViewportArrayv', 'void (*)(GLuint first, GLsizei count, const GLfloat *v)');
        $proc($first, $count, $v);
    }

    /**
     * @since 4.1
     * @param int $index
     * @param float $x
     * @param float $y
     * @param float $w
     * @param float $h
     * @return void
     */
    public static function glViewportIndexedf(int $index, float $x, float $y, float $w, float $h): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($x >= -3.40282e38 && $x <= 3.40282e38, 'Argument $x overflow: C type GLfloat is required');
        assert($y >= -3.40282e38 && $y <= 3.40282e38, 'Argument $y overflow: C type GLfloat is required');
        assert($w >= -3.40282e38 && $w <= 3.40282e38, 'Argument $w overflow: C type GLfloat is required');
        assert($h >= -3.40282e38 && $h <= 3.40282e38, 'Argument $h overflow: C type GLfloat is required');

        $proc = self::getProc('glViewportIndexedf', 'void (*)(GLuint index, GLfloat x, GLfloat y, GLfloat w, GLfloat h)');
        $proc($index, $x, $y, $w, $h);
    }

    /**
     * @since 4.1
     * @param int $index
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glViewportIndexedfv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glViewportIndexedfv', 'void (*)(GLuint index, const GLfloat *v)');
        $proc($index, $v);
    }

    /**
     * @since 4.1
     * @param int $first
     * @param int $count
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glScissorArrayv(int $first, int $count, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($first >= 0 && $first <= 4_294_967_295, 'Argument $first overflow: C type GLuint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glScissorArrayv', 'void (*)(GLuint first, GLsizei count, const GLint *v)');
        $proc($first, $count, $v);
    }

    /**
     * Defines the scissor box for a specified viewport. *`index`* specifies the index of scissor box to modify.
     * *`index`* must be less than the value of `GL_MAX_VIEWPORTS`. For `glScissorIndexed`, *`left`*, *`bottom`*,
     * *`width`* and *`height`* specify the left, bottom, width and height of the scissor box, in pixels,
     * respectively. For `glScissorIndexedv`, *`v`* specifies the address of an array containing integers specifying
     * the lower left corner of the scissor box, and the width and height of the scissor box, in that order.
     *
     * To enable and disable the scissor test, call {@see glEnable} and {@see glDisable} with argument
     * `GL_SCISSOR_TEST`. The test is initially disabled for all viewports. While the test is enabled, only pixels
     * that lie within the scissor box can be modified by drawing commands. Window coordinates have integer values at
     * the shared corners of frame buffer pixels. `glScissor(0,0,1,1)` allows modification of only the lower left
     * pixel in the window, and `glScissor(0,0,0,0)` doesn't allow modification of any pixels in the window.
     *
     * When the scissor test is disabled, it is as though the scissor box includes the entire window.
     *
     * @see http://docs.gl/gl4/glScissorIndexed
     * @since 4.1
     * @param int $index
     * @param int $left
     * @param int $bottom
     * @param int $width
     * @param int $height
     * @return void
     */
    public static function glScissorIndexed(int $index, int $left, int $bottom, int $width, int $height): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($left >= \PHP_INT_MIN && $left <= \PHP_INT_MAX, 'Argument $left overflow: C type GLint is required');
        assert($bottom >= \PHP_INT_MIN && $bottom <= \PHP_INT_MAX, 'Argument $bottom overflow: C type GLint is required');
        assert($width >= \PHP_INT_MIN && $width <= \PHP_INT_MAX, 'Argument $width overflow: C type GLsizei is required');
        assert($height >= \PHP_INT_MIN && $height <= \PHP_INT_MAX, 'Argument $height overflow: C type GLsizei is required');

        $proc = self::getProc('glScissorIndexed', 'void (*)(GLuint index, GLint left, GLint bottom, GLsizei width, GLsizei height)');
        $proc($index, $left, $bottom, $width, $height);
    }

    /**
     * @since 4.1
     * @param int $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public static function glScissorIndexedv(int $index, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glScissorIndexedv', 'void (*)(GLuint index, const GLint *v)');
        $proc($index, $v);
    }

    /**
     * @since 4.1
     * @param int $first
     * @param int $count
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public static function glDepthRangeArrayv(int $first, int $count, ?\FFI\CData $v): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($first >= 0 && $first <= 4_294_967_295, 'Argument $first overflow: C type GLuint is required');
        assert($count >= \PHP_INT_MIN && $count <= \PHP_INT_MAX, 'Argument $count overflow: C type GLsizei is required');

        $proc = self::getProc('glDepthRangeArrayv', 'void (*)(GLuint first, GLsizei count, const GLdouble *v)');
        $proc($first, $count, $v);
    }

    /**
     * After clipping and division by *w*, depth coordinates range from -1 to 1, corresponding to the near and far
     * clipping planes. Each viewport has an independent depth range specified as a linear mapping of the normalized
     * depth coordinates in this range to window depth coordinates. Regardless of the actual depth buffer
     * implementation, window coordinate depth values are treated as though they range from 0 through 1 (like color
     * components). `glDepthRangeIndexed` specifies a linear mapping of the normalized depth coordinates in this
     * range to window depth coordinates for a specified viewport. Thus, the values accepted by `glDepthRangeIndexed`
     * are both clamped to this range before they are accepted.
     *
     * The *`index`* parameter specifies the index of first viewport whose depth range to modify and must be less
     * than the value of `GL_MAX_VIEWPORTS`. *`nearVal`* and *`farVal`* specify near and far values of the depth
     * range for the specified viewport, respectively.
     *
     * The setting of (0,1) maps the near plane to 0 and the far plane to 1. With this mapping, the depth buffer
     * range is fully utilized.
     *
     * @see http://docs.gl/gl4/glDepthRangeIndexed
     * @since 4.1
     * @param int $index
     * @param float $n
     * @param float $f
     * @return void
     */
    public static function glDepthRangeIndexed(int $index, float $n, float $f): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');
        assert($n >= \PHP_FLOAT_MIN && $n <= \PHP_FLOAT_MAX, 'Argument $n overflow: C type GLdouble is required');
        assert($f >= \PHP_FLOAT_MIN && $f <= \PHP_FLOAT_MAX, 'Argument $f overflow: C type GLdouble is required');

        $proc = self::getProc('glDepthRangeIndexed', 'void (*)(GLuint index, GLdouble n, GLdouble f)');
        $proc($index, $n, $f);
    }

    /**
     * @since 4.1
     * @param int $target
     * @param int $index
     * @param \FFI\CData|\FFI\CFloatPtr|null $data
     * @return void
     */
    public static function glGetFloati_v(int $target, int $index, ?\FFI\CData $data): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glGetFloati_v', 'void (*)(GLenum target, GLuint index, GLfloat *data)');
        $proc($target, $index, $data);
    }

    /**
     * @since 4.1
     * @param int $target
     * @param int $index
     * @param \FFI\CData|\FFI\CFloatPtr|null $data
     * @return void
     */
    public static function glGetDoublei_v(int $target, int $index, ?\FFI\CData $data): void
    {
        assert(version_compare(self::$info->version, '4.1') >= 0, __FUNCTION__ . ' is available since OpenGL 4.1, but only OpenGL '. self::$info->version . ' is available');
        assert($target >= 0 && $target <= 4_294_967_295, 'Argument $target overflow: C type GLenum is required');
        assert($index >= 0 && $index <= 4_294_967_295, 'Argument $index overflow: C type GLuint is required');

        $proc = self::getProc('glGetDoublei_v', 'void (*)(GLenum target, GLuint index, GLdouble *data)');
        $proc($target, $index, $data);
    }
}
