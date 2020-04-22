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
     * {@see GL46::glReleaseShaderCompiler} provides a hint to the
     * implementation that it may free internal resources associated with its
     * shader compiler. {@see GL46::glCompileShader} may subsequently be
     * called and the implementation may at that time reallocate resources
     * previously freed by the call to {@see GL46::glReleaseShaderCompiler}.
     *
     * @see http://docs.gl/gl4/glReleaseShaderCompiler
     * @since 4.1
     * @return void
     */
    public function glReleaseShaderCompiler(): void
    {
        $proc = $this->getProcAddress('glReleaseShaderCompiler', 'void (*)(void)');
        $proc();
    }

    /**
     * {@see GL46::glShaderBinary} loads pre-compiled shader binary code into
     * the $count shader objects whose handles are given in $shaders. $binary
     * points to $length bytes of binary shader code stored in client memory.
     * $binaryFormat specifies the format of the pre-compiled code.
     *
     * The binary image contained in $binary will be decoded according to the
     * extension specification defining the specified $binaryFormat token.
     * OpenGL does not define any specific binary formats, but it does
     * provide a mechanism to obtain token vaues for such formats provided by
     * such extensions.
     *
     * Depending on the types of the shader objects in $shaders,
     * {@see GL46::glShaderBinary} will individually load binary vertex or
     * fragment shaders, or load an executable binary that contains an
     * optimized pair of vertex and fragment shaders stored in the same
     * binary.
     *
     * @see http://docs.gl/gl4/glShaderBinary
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CIntPtr|null $shaders
     * @param int|\FFI\CData|\FFI\CInt $binaryformat
     * @param \FFI\CData|\FFI\CPtr|null $binary
     * @param int|\FFI\CData|\FFI\CInt $length
     * @return void
     */
    public function glShaderBinary($count, ?\FFI\CData $shaders, $binaryformat, ?\FFI\CData $binary, $length): void
    {
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $binaryformat = $binaryformat instanceof \FFI\CData ? $binaryformat->cdata : $binaryformat;
        $length = $length instanceof \FFI\CData ? $length->cdata : $length;

        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint16($binaryformat), 'Argument $binaryformat must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($length), 'Argument $length must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glShaderBinary', 'void (*)(GLsizei count, const GLuint *shaders, GLenum binaryformat, const void *binary, GLsizei length)');
        $proc($count, $shaders, $binaryformat, $binary, $length);
    }

    /**
     * {@see GL46::glGetShaderPrecisionFormat} retrieves the numeric range
     * and precision for the implementation's representation of quantities in
     * different numeric formats in specified shader type. $shaderType
     * specifies the type of shader for which the numeric precision and range
     * is to be retrieved and must be one of {@see GL46::GL_VERTEX_SHADER} or
     * {@see GL46::GL_FRAGMENT_SHADER}. $precisionType specifies the numeric
     * format to query and must be one of {@see GL46::GL_LOW_FLOAT},
     * {@see GL46::GL_MEDIUM_FLOAT} {@see GL46::GL_HIGH_FLOAT},
     * {@see GL46::GL_LOW_INT}, {@see GL46::GL_MEDIUM_INT}, or
     * {@see GL46::GL_HIGH_INT}.
     *
     * $range points to an array of two integers into which the format's
     * numeric range will be returned. If min and max are the smallest values
     * representable in the format, then the values returned are defined to
     * be: $range[0] = floor(log2(|min|)) and $range[1] = floor(log2(|max|)).
     *
     * $precision specifies the address of an integer into which will be
     * written the log2 value of the number of bits of precision of the
     * format. If the smallest representable value greater than 1 is 1 + eps,
     * then the integer addressed by $precision will contain
     * floor(-log2(eps)).
     *
     * @see http://docs.gl/gl4/glGetShaderPrecisionFormat
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $shadertype
     * @param int|\FFI\CData|\FFI\CInt $precisiontype
     * @param \FFI\CData|\FFI\CIntPtr|null $range
     * @param \FFI\CData|\FFI\CIntPtr|null $precision
     * @return void
     */
    public function glGetShaderPrecisionFormat($shadertype, $precisiontype, ?\FFI\CData $range, ?\FFI\CData $precision): void
    {
        $shadertype = $shadertype instanceof \FFI\CData ? $shadertype->cdata : $shadertype;
        $precisiontype = $precisiontype instanceof \FFI\CData ? $precisiontype->cdata : $precisiontype;

        assert(Assert::uint16($shadertype), 'Argument $shadertype must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($precisiontype), 'Argument $precisiontype must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetShaderPrecisionFormat', 'void (*)(GLenum shadertype, GLenum precisiontype, GLint *range, GLint *precision)');
        $proc($shadertype, $precisiontype, $range, $precision);
    }

    /**
     * After clipping and division by w, depth coordinates range from   -1
     * to 1, corresponding to the near and far clipping planes.
     * {@see GL46::glDepthRange} specifies a linear mapping of the normalized
     * depth coordinates in this range to window depth coordinates.
     * Regardless of the actual depth buffer implementation, window
     * coordinate depth values are treated as though they range from 0
     * through 1 (like color components). Thus, the values accepted by
     * {@see GL46::glDepthRange} are both clamped to this range before they
     * are accepted.
     *
     * The setting of (0,1) maps the near plane to 0 and the far plane to 1.
     * With this mapping, the depth buffer range is fully utilized.
     *
     * @see http://docs.gl/gl2/glDepthRange
     * @see http://docs.gl/gl4/glDepthRange
     * @since 4.1
     * @param float|\FFI\CData|\FFI\CFloat $n
     * @param float|\FFI\CData|\FFI\CFloat $f
     * @return void
     */
    public function glDepthRangef($n, $f): void
    {
        $n = $n instanceof \FFI\CData ? $n->cdata : $n;
        $f = $f instanceof \FFI\CData ? $f->cdata : $f;

        assert(Assert::float32($n), 'Argument $n must be a C-like GLfloat, but incompatible or overflow value given');
        assert(Assert::float32($f), 'Argument $f must be a C-like GLfloat, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glDepthRangef', 'void (*)(GLfloat n, GLfloat f)');
        $proc($n, $f);
    }

    /**
     * {@see GL46::glClearDepth} specifies the depth value used by
     * {@see GL46::glClear} to clear the depth buffer. Values specified by
     * {@see GL46::glClearDepth} are clamped to the range    0 1  .
     *
     * @see http://docs.gl/gl2/glClearDepth
     * @see http://docs.gl/gl4/glClearDepth
     * @since 4.1
     * @param float|\FFI\CData|\FFI\CFloat $d
     * @return void
     */
    public function glClearDepthf($d): void
    {
        $d = $d instanceof \FFI\CData ? $d->cdata : $d;

        assert(Assert::float32($d), 'Argument $d must be a C-like GLfloat, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glClearDepthf', 'void (*)(GLfloat d)');
        $proc($d);
    }

    /**
     * {@see GL46::glGetProgramBinary} returns a binary representation of the
     * compiled and linked executable for $program into the array of bytes
     * whose address is specified in $binary. The maximum number of bytes
     * that may be written into $binary is specified by $bufSize. If the
     * program binary is greater in size than $bufSize bytes, then an error
     * is generated, otherwise the actual number of bytes written into
     * $binary is returned in the variable whose address is given by $length.
     * If $length is {@see GL46::NULL}, then no length is returned.
     *
     * The format of the program binary written into $binary is returned in
     * the variable whose address is given by $binaryFormat, and may be
     * implementation dependent. The binary produced by the GL may
     * subsequently be returned to the GL by calling
     * {@see GL46::glProgramBinary}, with $binaryFormat and $length set to
     * the values returned by {@see GL46::glGetProgramBinary}, and passing
     * the returned binary data in the $binary parameter.
     *
     * @see http://docs.gl/gl4/glGetProgramBinary
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @param \FFI\CData|\FFI\CIntPtr|null $binaryFormat
     * @param \FFI\CData|\FFI\CPtr|null $binary
     * @return void
     */
    public function glGetProgramBinary($program, $bufSize, ?\FFI\CData $length, ?\FFI\CData $binaryFormat, ?\FFI\CData $binary): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $bufSize = $bufSize instanceof \FFI\CData ? $bufSize->cdata : $bufSize;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($bufSize), 'Argument $bufSize must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetProgramBinary', 'void (*)(GLuint program, GLsizei bufSize, GLsizei *length, GLenum *binaryFormat, void *binary)');
        $proc($program, $bufSize, $length, $binaryFormat, $binary);
    }

    /**
     * {@see GL46::glProgramBinary} loads a program object with a program
     * binary previously returned from {@see GL46::glGetProgramBinary}.
     * $binaryFormat and $binary must be those returned by a previous call to
     * {@see GL46::glGetProgramBinary}, and $length must be the length
     * returned by {@see GL46::glGetProgramBinary}, or by
     * {@see GL46::glGetProgram} when called with $pname set to
     * {@see GL46::GL_PROGRAM_BINARY_LENGTH}. If these conditions are not
     * met, loading the program binary will fail and $program's
     * {@see GL46::GL_LINK_STATUS} will be set to {@see GL46::GL_FALSE}.
     *
     * A program object's program binary is replaced by calls to
     * {@see GL46::glLinkProgram} or {@see GL46::glProgramBinary}. When
     * linking success or failure is concerned, {@see GL46::glProgramBinary}
     * can be considered to perform an implicit linking operation.
     * {@see GL46::glLinkProgram} and {@see GL46::glProgramBinary} both set
     * the program object's {@see GL46::GL_LINK_STATUS} to
     * {@see GL46::GL_TRUE} or {@see GL46::GL_FALSE}.
     *
     * A successful call to {@see GL46::glProgramBinary} will reset all
     * uniform variables to their initial values. The initial value is either
     * the value of the variable's initializer as specified in the original
     * shader source, or zero if no initializer was present. Additionally,
     * all vertex shader input and fragment shader output assignments that
     * were in effect when the program was linked before saving are restored
     * with {@see GL46::glProgramBinary} is called.
     *
     * @see http://docs.gl/gl4/glProgramBinary
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $binaryFormat
     * @param \FFI\CData|\FFI\CPtr|null $binary
     * @param int|\FFI\CData|\FFI\CInt $length
     * @return void
     */
    public function glProgramBinary($program, $binaryFormat, ?\FFI\CData $binary, $length): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $binaryFormat = $binaryFormat instanceof \FFI\CData ? $binaryFormat->cdata : $binaryFormat;
        $length = $length instanceof \FFI\CData ? $length->cdata : $length;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($binaryFormat), 'Argument $binaryFormat must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($length), 'Argument $length must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramBinary', 'void (*)(GLuint program, GLenum binaryFormat, const void *binary, GLsizei length)');
        $proc($program, $binaryFormat, $binary, $length);
    }

    /**
     * {@see GL46::glProgramParameter} specifies a new value for the
     * parameter nameed by $pname for the program object $program.
     *
     * If $pname is {@see GL46::GL_PROGRAM_BINARY_RETRIEVABLE_HINT}, $value
     * should be {@see GL46::GL_FALSE} or {@see GL46::GL_TRUE} to indicate to
     * the implementation the intention of the application to retrieve the
     * program's binary representation with {@see GL46::glGetProgramBinary}.
     * The implementation may use this information to store information that
     * may be useful for a future query of the program's binary. It is
     * recommended to set {@see GL46::GL_PROGRAM_BINARY_RETRIEVABLE_HINT} for
     * the program to {@see GL46::GL_TRUE} before calling
     * {@see GL46::glLinkProgram}, and using the program at run-time if the
     * binary is to be retrieved later.
     *
     * If $pname is {@see GL46::GL_PROGRAM_SEPARABLE}, $value must be
     * {@see GL46::GL_TRUE} or {@see GL46::GL_FALSE} and indicates whether
     * $program can be bound to individual pipeline stages via
     * {@see GL46::glUseProgramStages}. A program's
     * {@see GL46::GL_PROGRAM_SEPARABLE} parameter must be set to
     * {@see GL46::GL_TRUE} before {@see GL46::glLinkProgram} is called in
     * order for it to be usable with a program pipeline object. The initial
     * state of {@see GL46::GL_PROGRAM_SEPARABLE} is {@see GL46::GL_FALSE}.
     *
     * @see http://docs.gl/gl4/glProgramParameter
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param int|\FFI\CData|\FFI\CInt $value
     * @return void
     */
    public function glProgramParameteri($program, $pname, $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;
        $value = $value instanceof \FFI\CData ? $value->cdata : $value;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($value), 'Argument $value must be a C-like GLint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramParameteri', 'void (*)(GLuint program, GLenum pname, GLint value)');
        $proc($program, $pname, $value);
    }

    /**
     * {@see GL46::glUseProgramStages} binds executables from a program
     * object associated with a specified set of shader stages to the program
     * pipeline object given by $pipeline. $pipeline specifies the program
     * pipeline object to which to bind the executables. $stages contains a
     * logical combination of bits indicating the shader stages to use within
     * $program with the program pipeline object $pipeline. $stages must be a
     * logical combination of {@see GL46::GL_VERTEX_SHADER_BIT},
     * {@see GL46::GL_TESS_CONTROL_SHADER_BIT},
     * {@see GL46::GL_TESS_EVALUATION_SHADER_BIT},
     * {@see GL46::GL_GEOMETRY_SHADER_BIT},
     * {@see GL46::GL_FRAGMENT_SHADER_BIT} and
     * {@see GL46::GL_COMPUTE_SHADER_BIT}. Additionally, the special value
     * {@see GL46::GL_ALL_SHADER_BITS} may be specified to indicate that all
     * executables contained in $program should be installed in $pipeline.
     *
     * If $program refers to a program object with a valid shader attached
     * for an indicated shader stage, {@see GL46::glUseProgramStages}
     * installs the executable code for that stage in the indicated program
     * pipeline object $pipeline. If $program is zero, or refers to a program
     * object with no valid shader executable for a given stage, it is as if
     * the pipeline object has no programmable stage configured for the
     * indicated shader stages. If $stages contains bits other than those
     * listed above, and is not equal to {@see GL46::GL_ALL_SHADER_BITS}, an
     * error is generated.
     *
     * @see http://docs.gl/gl4/glUseProgramStages
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $pipeline
     * @param int|\FFI\CData|\FFI\CInt $stages
     * @param int|\FFI\CData|\FFI\CInt $program
     * @return void
     */
    public function glUseProgramStages($pipeline, $stages, $program): void
    {
        $pipeline = $pipeline instanceof \FFI\CData ? $pipeline->cdata : $pipeline;
        $stages = $stages instanceof \FFI\CData ? $stages->cdata : $stages;
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;

        assert(Assert::uint16($pipeline), 'Argument $pipeline must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($stages), 'Argument $stages must be a C-like GLbitfield, but incompatible or overflow value given');
        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glUseProgramStages', 'void (*)(GLuint pipeline, GLbitfield stages, GLuint program)');
        $proc($pipeline, $stages, $program);
    }

    /**
     * {@see GL46::glActiveShaderProgram} sets the linked program named by
     * $program to be the active program for the program pipeline object
     * $pipeline. The active program in the active program pipeline object is
     * the target of calls to {@see GL46::glUniform} when no program has been
     * made current through a call to {@see GL46::glUseProgram}.
     *
     * @see http://docs.gl/gl4/glActiveShaderProgram
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $pipeline
     * @param int|\FFI\CData|\FFI\CInt $program
     * @return void
     */
    public function glActiveShaderProgram($pipeline, $program): void
    {
        $pipeline = $pipeline instanceof \FFI\CData ? $pipeline->cdata : $pipeline;
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;

        assert(Assert::uint16($pipeline), 'Argument $pipeline must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glActiveShaderProgram', 'void (*)(GLuint pipeline, GLuint program)');
        $proc($pipeline, $program);
    }

    /**
     * {@see GL46::glCreateShaderProgram} creates a program object containing
     * compiled and linked shaders for a single stage specified by $type.
     * $strings refers to an array of $count strings from which to create the
     * shader executables.
     *
     * {@see GL46::glCreateShaderProgram} is equivalent (assuming no errors
     * are generated) to:
     *
     * <code>
     *     const GLuint shader = glCreateShader(type);
     *     if (shader) {
     *         glShaderSource(shader, count, strings, NULL);
     *         glCompileShader(shader);
     *         const GLuint program = glCreateProgram();
     *         if (program) {
     *             GLint compiled = GL_FALSE;
     *             glGetShaderiv(shader, GL_COMPILE_STATUS, &compiled);
     *             glProgramParameteri(program, GL_PROGRAM_SEPARABLE, GL_TRUE);
     *             if (compiled) {
     *                 glAttachShader(program, shader);
     *                 glLinkProgram(program);
     *                 glDetachShader(program, shader);
     *             }
     *             /* append-shader-info-log-to-program-info-log *\/
     *         }
     *         glDeleteShader(shader);
     *         return program;
     *     } else {
     *         return 0;
     *     }
     * </code>
     * The program object created by {@see GL46::glCreateShaderProgram} has
     * its {@see GL46::GL_PROGRAM_SEPARABLE} status set to
     * {@see GL46::GL_TRUE}.
     *
     * @see http://docs.gl/gl4/glCreateShaderProgram
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $type
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CIntPtrPtr|null $strings
     * @return int|\FFI\CData|\FFI\CInt
     */
    public function glCreateShaderProgramv($type, $count, ?\FFI\CData $strings): int
    {
        $type = $type instanceof \FFI\CData ? $type->cdata : $type;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Assert::uint16($type), 'Argument $type must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glCreateShaderProgramv', 'GLuint (*)(GLenum type, GLsizei count, const GLchar *const*strings)');
        return $proc($type, $count, $strings);
    }

    /**
     * {@see GL46::glBindProgramPipeline} binds a program pipeline object to
     * the current context. $pipeline must be a name previously returned from
     * a call to {@see GL46::glGenProgramPipelines}. If no program pipeline
     * exists with name $pipeline then a new pipeline object is created with
     * that name and initialized to the default state vector.
     *
     * When a program pipeline object is bound using
     * {@see GL46::glBindProgramPipeline}, any previous binding is broken and
     * is replaced with a binding to the specified pipeline object. If
     * $pipeline is zero, the previous binding is broken and is not replaced,
     * leaving no pipeline object bound. If no current program object has
     * been established by {@see GL46::glUseProgram}, the program objects
     * used for each stage and for uniform updates are taken from the bound
     * program pipeline object, if any. If there is a current program object
     * established by {@see GL46::glUseProgram}, the bound program pipeline
     * object has no effect on rendering or uniform updates. When a bound
     * program pipeline object is used for rendering, individual shader
     * executables are taken from its program objects.
     *
     * @see http://docs.gl/gl4/glBindProgramPipeline
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $pipeline
     * @return void
     */
    public function glBindProgramPipeline($pipeline): void
    {
        $pipeline = $pipeline instanceof \FFI\CData ? $pipeline->cdata : $pipeline;

        assert(Assert::uint16($pipeline), 'Argument $pipeline must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glBindProgramPipeline', 'void (*)(GLuint pipeline)');
        $proc($pipeline);
    }

    /**
     * {@see GL46::glDeleteProgramPipelines} deletes the $n program pipeline
     * objects whose names are stored in the array $pipelines. Unused names
     * in $pipelines are ignored, as is the name zero. After a program
     * pipeline object is deleted, its name is again unused and it has no
     * contents. If program pipeline object that is currently bound is
     * deleted, the binding for that object reverts to zero and no program
     * pipeline object becomes current.
     *
     * @see http://docs.gl/gl4/glDeleteProgramPipelines
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $n
     * @param \FFI\CData|\FFI\CIntPtr|null $pipelines
     * @return void
     */
    public function glDeleteProgramPipelines($n, ?\FFI\CData $pipelines): void
    {
        $n = $n instanceof \FFI\CData ? $n->cdata : $n;

        assert(Assert::int16($n), 'Argument $n must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glDeleteProgramPipelines', 'void (*)(GLsizei n, const GLuint *pipelines)');
        $proc($n, $pipelines);
    }

    /**
     * {@see GL46::glGenProgramPipelines} returns $n previously unused
     * program pipeline object names in $pipelines. These names are marked as
     * used, for the purposes of {@see GL46::glGenProgramPipelines} only, but
     * they acquire program pipeline state only when they are first bound.
     *
     * @see http://docs.gl/gl4/glGenProgramPipelines
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $n
     * @param \FFI\CData|\FFI\CIntPtr|null $pipelines
     * @return void
     */
    public function glGenProgramPipelines($n, ?\FFI\CData $pipelines): void
    {
        $n = $n instanceof \FFI\CData ? $n->cdata : $n;

        assert(Assert::int16($n), 'Argument $n must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGenProgramPipelines', 'void (*)(GLsizei n, GLuint *pipelines)');
        $proc($n, $pipelines);
    }

    /**
     * {@see GL46::glIsProgramPipeline} returns {@see GL46::GL_TRUE} if
     * $pipeline is currently the name of a program pipeline object. If
     * $pipeline is zero, or if {@see GL46::pipeline} is not the name of a
     * program pipeline object, or if an error occurs,
     * {@see GL46::glIsProgramPipeline} returns {@see GL46::GL_FALSE}. If
     * $pipeline is a name returned by {@see GL46::glGenProgramPipelines},
     * but that has not yet been bound through a call to
     * {@see GL46::glBindProgramPipeline}, then the name is not a program
     * pipeline object and {@see GL46::glIsProgramPipeline} returns
     * {@see GL46::GL_FALSE}.
     *
     * @see http://docs.gl/gl4/glIsProgramPipeline
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $pipeline
     * @return int|\FFI\CData|\FFI\CInt
     */
    public function glIsProgramPipeline($pipeline): int
    {
        $pipeline = $pipeline instanceof \FFI\CData ? $pipeline->cdata : $pipeline;

        assert(Assert::uint16($pipeline), 'Argument $pipeline must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glIsProgramPipeline', 'GLboolean (*)(GLuint pipeline)');
        return $proc($pipeline);
    }

    /**
     * {@see GL46::glGetProgramPipelineiv} retrieves the value of a property
     * of the program pipeline object $pipeline. $pname specifies the name of
     * the parameter whose value to retrieve. The value of the parameter is
     * written to the variable whose address is given by $params.
     *
     * If $pname is {@see GL46::GL_ACTIVE_PROGRAM}, the name of the active
     * program object of the program pipeline object is returned in $params.
     *
     * If $pname is {@see GL46::GL_VERTEX_SHADER}, the name of the current
     * program object for the vertex shader type of the program pipeline
     * object is returned in $params.
     *
     * If $pname is {@see GL46::GL_TESS_CONTROL_SHADER}, the name of the
     * current program object for the tessellation control shader type of the
     * program pipeline object is returned in $params.
     *
     * If $pname is {@see GL46::GL_TESS_EVALUATION_SHADER}, the name of the
     * current program object for the tessellation evaluation shader type of
     * the program pipeline object is returned in $params.
     *
     * If $pname is {@see GL46::GL_GEOMETRY_SHADER}, the name of the current
     * program object for the geometry shader type of the program pipeline
     * object is returned in $params.
     *
     * If $pname is {@see GL46::GL_FRAGMENT_SHADER}, the name of the current
     * program object for the fragment shader type of the program pipeline
     * object is returned in $params.
     *
     * If $pname is {@see GL46::GL_INFO_LOG_LENGTH}, the length of the info
     * log, including the null terminator, is returned in $params. If there
     * is no info log, zero is returned.
     *
     * @see http://docs.gl/gl4/glGetProgramPipeline
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $pipeline
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param \FFI\CData|\FFI\CIntPtr|null $params
     * @return void
     */
    public function glGetProgramPipelineiv($pipeline, $pname, ?\FFI\CData $params): void
    {
        $pipeline = $pipeline instanceof \FFI\CData ? $pipeline->cdata : $pipeline;
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;

        assert(Assert::uint16($pipeline), 'Argument $pipeline must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetProgramPipelineiv', 'void (*)(GLuint pipeline, GLenum pname, GLint *params)');
        $proc($pipeline, $pname, $params);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $v0
     * @return void
     */
    public function glProgramUniform1i($program, $location, $v0): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $v0 = $v0 instanceof \FFI\CData ? $v0->cdata : $v0;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($v0), 'Argument $v0 must be a C-like GLint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniform1i', 'void (*)(GLuint program, GLint location, GLint v0)');
        $proc($program, $location, $v0);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public function glProgramUniform1iv($program, $location, $count, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniform1iv', 'void (*)(GLuint program, GLint location, GLsizei count, const GLint *value)');
        $proc($program, $location, $count, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param float|\FFI\CData|\FFI\CFloat $v0
     * @return void
     */
    public function glProgramUniform1f($program, $location, $v0): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $v0 = $v0 instanceof \FFI\CData ? $v0->cdata : $v0;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::float32($v0), 'Argument $v0 must be a C-like GLfloat, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniform1f', 'void (*)(GLuint program, GLint location, GLfloat v0)');
        $proc($program, $location, $v0);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function glProgramUniform1fv($program, $location, $count, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniform1fv', 'void (*)(GLuint program, GLint location, GLsizei count, const GLfloat *value)');
        $proc($program, $location, $count, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param float|\FFI\CData|\FFI\CFloat $v0
     * @return void
     */
    public function glProgramUniform1d($program, $location, $v0): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $v0 = $v0 instanceof \FFI\CData ? $v0->cdata : $v0;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::float64($v0), 'Argument $v0 must be a C-like GLdouble, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniform1d', 'void (*)(GLuint program, GLint location, GLdouble v0)');
        $proc($program, $location, $v0);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function glProgramUniform1dv($program, $location, $count, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniform1dv', 'void (*)(GLuint program, GLint location, GLsizei count, const GLdouble *value)');
        $proc($program, $location, $count, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $v0
     * @return void
     */
    public function glProgramUniform1ui($program, $location, $v0): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $v0 = $v0 instanceof \FFI\CData ? $v0->cdata : $v0;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::uint16($v0), 'Argument $v0 must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniform1ui', 'void (*)(GLuint program, GLint location, GLuint v0)');
        $proc($program, $location, $v0);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public function glProgramUniform1uiv($program, $location, $count, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniform1uiv', 'void (*)(GLuint program, GLint location, GLsizei count, const GLuint *value)');
        $proc($program, $location, $count, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $v0
     * @param int|\FFI\CData|\FFI\CInt $v1
     * @return void
     */
    public function glProgramUniform2i($program, $location, $v0, $v1): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $v0 = $v0 instanceof \FFI\CData ? $v0->cdata : $v0;
        $v1 = $v1 instanceof \FFI\CData ? $v1->cdata : $v1;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($v0), 'Argument $v0 must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($v1), 'Argument $v1 must be a C-like GLint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniform2i', 'void (*)(GLuint program, GLint location, GLint v0, GLint v1)');
        $proc($program, $location, $v0, $v1);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public function glProgramUniform2iv($program, $location, $count, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniform2iv', 'void (*)(GLuint program, GLint location, GLsizei count, const GLint *value)');
        $proc($program, $location, $count, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param float|\FFI\CData|\FFI\CFloat $v0
     * @param float|\FFI\CData|\FFI\CFloat $v1
     * @return void
     */
    public function glProgramUniform2f($program, $location, $v0, $v1): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $v0 = $v0 instanceof \FFI\CData ? $v0->cdata : $v0;
        $v1 = $v1 instanceof \FFI\CData ? $v1->cdata : $v1;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::float32($v0), 'Argument $v0 must be a C-like GLfloat, but incompatible or overflow value given');
        assert(Assert::float32($v1), 'Argument $v1 must be a C-like GLfloat, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniform2f', 'void (*)(GLuint program, GLint location, GLfloat v0, GLfloat v1)');
        $proc($program, $location, $v0, $v1);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function glProgramUniform2fv($program, $location, $count, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniform2fv', 'void (*)(GLuint program, GLint location, GLsizei count, const GLfloat *value)');
        $proc($program, $location, $count, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param float|\FFI\CData|\FFI\CFloat $v0
     * @param float|\FFI\CData|\FFI\CFloat $v1
     * @return void
     */
    public function glProgramUniform2d($program, $location, $v0, $v1): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $v0 = $v0 instanceof \FFI\CData ? $v0->cdata : $v0;
        $v1 = $v1 instanceof \FFI\CData ? $v1->cdata : $v1;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::float64($v0), 'Argument $v0 must be a C-like GLdouble, but incompatible or overflow value given');
        assert(Assert::float64($v1), 'Argument $v1 must be a C-like GLdouble, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniform2d', 'void (*)(GLuint program, GLint location, GLdouble v0, GLdouble v1)');
        $proc($program, $location, $v0, $v1);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function glProgramUniform2dv($program, $location, $count, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniform2dv', 'void (*)(GLuint program, GLint location, GLsizei count, const GLdouble *value)');
        $proc($program, $location, $count, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $v0
     * @param int|\FFI\CData|\FFI\CInt $v1
     * @return void
     */
    public function glProgramUniform2ui($program, $location, $v0, $v1): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $v0 = $v0 instanceof \FFI\CData ? $v0->cdata : $v0;
        $v1 = $v1 instanceof \FFI\CData ? $v1->cdata : $v1;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::uint16($v0), 'Argument $v0 must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($v1), 'Argument $v1 must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniform2ui', 'void (*)(GLuint program, GLint location, GLuint v0, GLuint v1)');
        $proc($program, $location, $v0, $v1);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public function glProgramUniform2uiv($program, $location, $count, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniform2uiv', 'void (*)(GLuint program, GLint location, GLsizei count, const GLuint *value)');
        $proc($program, $location, $count, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $v0
     * @param int|\FFI\CData|\FFI\CInt $v1
     * @param int|\FFI\CData|\FFI\CInt $v2
     * @return void
     */
    public function glProgramUniform3i($program, $location, $v0, $v1, $v2): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $v0 = $v0 instanceof \FFI\CData ? $v0->cdata : $v0;
        $v1 = $v1 instanceof \FFI\CData ? $v1->cdata : $v1;
        $v2 = $v2 instanceof \FFI\CData ? $v2->cdata : $v2;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($v0), 'Argument $v0 must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($v1), 'Argument $v1 must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($v2), 'Argument $v2 must be a C-like GLint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniform3i', 'void (*)(GLuint program, GLint location, GLint v0, GLint v1, GLint v2)');
        $proc($program, $location, $v0, $v1, $v2);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public function glProgramUniform3iv($program, $location, $count, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniform3iv', 'void (*)(GLuint program, GLint location, GLsizei count, const GLint *value)');
        $proc($program, $location, $count, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param float|\FFI\CData|\FFI\CFloat $v0
     * @param float|\FFI\CData|\FFI\CFloat $v1
     * @param float|\FFI\CData|\FFI\CFloat $v2
     * @return void
     */
    public function glProgramUniform3f($program, $location, $v0, $v1, $v2): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $v0 = $v0 instanceof \FFI\CData ? $v0->cdata : $v0;
        $v1 = $v1 instanceof \FFI\CData ? $v1->cdata : $v1;
        $v2 = $v2 instanceof \FFI\CData ? $v2->cdata : $v2;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::float32($v0), 'Argument $v0 must be a C-like GLfloat, but incompatible or overflow value given');
        assert(Assert::float32($v1), 'Argument $v1 must be a C-like GLfloat, but incompatible or overflow value given');
        assert(Assert::float32($v2), 'Argument $v2 must be a C-like GLfloat, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniform3f', 'void (*)(GLuint program, GLint location, GLfloat v0, GLfloat v1, GLfloat v2)');
        $proc($program, $location, $v0, $v1, $v2);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function glProgramUniform3fv($program, $location, $count, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniform3fv', 'void (*)(GLuint program, GLint location, GLsizei count, const GLfloat *value)');
        $proc($program, $location, $count, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param float|\FFI\CData|\FFI\CFloat $v0
     * @param float|\FFI\CData|\FFI\CFloat $v1
     * @param float|\FFI\CData|\FFI\CFloat $v2
     * @return void
     */
    public function glProgramUniform3d($program, $location, $v0, $v1, $v2): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $v0 = $v0 instanceof \FFI\CData ? $v0->cdata : $v0;
        $v1 = $v1 instanceof \FFI\CData ? $v1->cdata : $v1;
        $v2 = $v2 instanceof \FFI\CData ? $v2->cdata : $v2;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::float64($v0), 'Argument $v0 must be a C-like GLdouble, but incompatible or overflow value given');
        assert(Assert::float64($v1), 'Argument $v1 must be a C-like GLdouble, but incompatible or overflow value given');
        assert(Assert::float64($v2), 'Argument $v2 must be a C-like GLdouble, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniform3d', 'void (*)(GLuint program, GLint location, GLdouble v0, GLdouble v1, GLdouble v2)');
        $proc($program, $location, $v0, $v1, $v2);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function glProgramUniform3dv($program, $location, $count, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniform3dv', 'void (*)(GLuint program, GLint location, GLsizei count, const GLdouble *value)');
        $proc($program, $location, $count, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $v0
     * @param int|\FFI\CData|\FFI\CInt $v1
     * @param int|\FFI\CData|\FFI\CInt $v2
     * @return void
     */
    public function glProgramUniform3ui($program, $location, $v0, $v1, $v2): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $v0 = $v0 instanceof \FFI\CData ? $v0->cdata : $v0;
        $v1 = $v1 instanceof \FFI\CData ? $v1->cdata : $v1;
        $v2 = $v2 instanceof \FFI\CData ? $v2->cdata : $v2;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::uint16($v0), 'Argument $v0 must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($v1), 'Argument $v1 must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($v2), 'Argument $v2 must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniform3ui', 'void (*)(GLuint program, GLint location, GLuint v0, GLuint v1, GLuint v2)');
        $proc($program, $location, $v0, $v1, $v2);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public function glProgramUniform3uiv($program, $location, $count, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniform3uiv', 'void (*)(GLuint program, GLint location, GLsizei count, const GLuint *value)');
        $proc($program, $location, $count, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $v0
     * @param int|\FFI\CData|\FFI\CInt $v1
     * @param int|\FFI\CData|\FFI\CInt $v2
     * @param int|\FFI\CData|\FFI\CInt $v3
     * @return void
     */
    public function glProgramUniform4i($program, $location, $v0, $v1, $v2, $v3): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $v0 = $v0 instanceof \FFI\CData ? $v0->cdata : $v0;
        $v1 = $v1 instanceof \FFI\CData ? $v1->cdata : $v1;
        $v2 = $v2 instanceof \FFI\CData ? $v2->cdata : $v2;
        $v3 = $v3 instanceof \FFI\CData ? $v3->cdata : $v3;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($v0), 'Argument $v0 must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($v1), 'Argument $v1 must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($v2), 'Argument $v2 must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($v3), 'Argument $v3 must be a C-like GLint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniform4i', 'void (*)(GLuint program, GLint location, GLint v0, GLint v1, GLint v2, GLint v3)');
        $proc($program, $location, $v0, $v1, $v2, $v3);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public function glProgramUniform4iv($program, $location, $count, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniform4iv', 'void (*)(GLuint program, GLint location, GLsizei count, const GLint *value)');
        $proc($program, $location, $count, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param float|\FFI\CData|\FFI\CFloat $v0
     * @param float|\FFI\CData|\FFI\CFloat $v1
     * @param float|\FFI\CData|\FFI\CFloat $v2
     * @param float|\FFI\CData|\FFI\CFloat $v3
     * @return void
     */
    public function glProgramUniform4f($program, $location, $v0, $v1, $v2, $v3): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $v0 = $v0 instanceof \FFI\CData ? $v0->cdata : $v0;
        $v1 = $v1 instanceof \FFI\CData ? $v1->cdata : $v1;
        $v2 = $v2 instanceof \FFI\CData ? $v2->cdata : $v2;
        $v3 = $v3 instanceof \FFI\CData ? $v3->cdata : $v3;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::float32($v0), 'Argument $v0 must be a C-like GLfloat, but incompatible or overflow value given');
        assert(Assert::float32($v1), 'Argument $v1 must be a C-like GLfloat, but incompatible or overflow value given');
        assert(Assert::float32($v2), 'Argument $v2 must be a C-like GLfloat, but incompatible or overflow value given');
        assert(Assert::float32($v3), 'Argument $v3 must be a C-like GLfloat, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniform4f', 'void (*)(GLuint program, GLint location, GLfloat v0, GLfloat v1, GLfloat v2, GLfloat v3)');
        $proc($program, $location, $v0, $v1, $v2, $v3);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function glProgramUniform4fv($program, $location, $count, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniform4fv', 'void (*)(GLuint program, GLint location, GLsizei count, const GLfloat *value)');
        $proc($program, $location, $count, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param float|\FFI\CData|\FFI\CFloat $v0
     * @param float|\FFI\CData|\FFI\CFloat $v1
     * @param float|\FFI\CData|\FFI\CFloat $v2
     * @param float|\FFI\CData|\FFI\CFloat $v3
     * @return void
     */
    public function glProgramUniform4d($program, $location, $v0, $v1, $v2, $v3): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $v0 = $v0 instanceof \FFI\CData ? $v0->cdata : $v0;
        $v1 = $v1 instanceof \FFI\CData ? $v1->cdata : $v1;
        $v2 = $v2 instanceof \FFI\CData ? $v2->cdata : $v2;
        $v3 = $v3 instanceof \FFI\CData ? $v3->cdata : $v3;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::float64($v0), 'Argument $v0 must be a C-like GLdouble, but incompatible or overflow value given');
        assert(Assert::float64($v1), 'Argument $v1 must be a C-like GLdouble, but incompatible or overflow value given');
        assert(Assert::float64($v2), 'Argument $v2 must be a C-like GLdouble, but incompatible or overflow value given');
        assert(Assert::float64($v3), 'Argument $v3 must be a C-like GLdouble, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniform4d', 'void (*)(GLuint program, GLint location, GLdouble v0, GLdouble v1, GLdouble v2, GLdouble v3)');
        $proc($program, $location, $v0, $v1, $v2, $v3);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function glProgramUniform4dv($program, $location, $count, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniform4dv', 'void (*)(GLuint program, GLint location, GLsizei count, const GLdouble *value)');
        $proc($program, $location, $count, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $v0
     * @param int|\FFI\CData|\FFI\CInt $v1
     * @param int|\FFI\CData|\FFI\CInt $v2
     * @param int|\FFI\CData|\FFI\CInt $v3
     * @return void
     */
    public function glProgramUniform4ui($program, $location, $v0, $v1, $v2, $v3): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $v0 = $v0 instanceof \FFI\CData ? $v0->cdata : $v0;
        $v1 = $v1 instanceof \FFI\CData ? $v1->cdata : $v1;
        $v2 = $v2 instanceof \FFI\CData ? $v2->cdata : $v2;
        $v3 = $v3 instanceof \FFI\CData ? $v3->cdata : $v3;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::uint16($v0), 'Argument $v0 must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($v1), 'Argument $v1 must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($v2), 'Argument $v2 must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($v3), 'Argument $v3 must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniform4ui', 'void (*)(GLuint program, GLint location, GLuint v0, GLuint v1, GLuint v2, GLuint v3)');
        $proc($program, $location, $v0, $v1, $v2, $v3);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CIntPtr|null $value
     * @return void
     */
    public function glProgramUniform4uiv($program, $location, $count, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniform4uiv', 'void (*)(GLuint program, GLint location, GLsizei count, const GLuint *value)');
        $proc($program, $location, $count, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function glProgramUniformMatrix2fv($program, $location, $count, $transpose, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $transpose = $transpose instanceof \FFI\CData ? $transpose->cdata : $transpose;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint8($transpose), 'Argument $transpose must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniformMatrix2fv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function glProgramUniformMatrix3fv($program, $location, $count, $transpose, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $transpose = $transpose instanceof \FFI\CData ? $transpose->cdata : $transpose;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint8($transpose), 'Argument $transpose must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniformMatrix3fv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function glProgramUniformMatrix4fv($program, $location, $count, $transpose, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $transpose = $transpose instanceof \FFI\CData ? $transpose->cdata : $transpose;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint8($transpose), 'Argument $transpose must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniformMatrix4fv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function glProgramUniformMatrix2dv($program, $location, $count, $transpose, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $transpose = $transpose instanceof \FFI\CData ? $transpose->cdata : $transpose;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint8($transpose), 'Argument $transpose must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniformMatrix2dv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function glProgramUniformMatrix3dv($program, $location, $count, $transpose, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $transpose = $transpose instanceof \FFI\CData ? $transpose->cdata : $transpose;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint8($transpose), 'Argument $transpose must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniformMatrix3dv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function glProgramUniformMatrix4dv($program, $location, $count, $transpose, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $transpose = $transpose instanceof \FFI\CData ? $transpose->cdata : $transpose;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint8($transpose), 'Argument $transpose must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniformMatrix4dv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function glProgramUniformMatrix2x3fv($program, $location, $count, $transpose, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $transpose = $transpose instanceof \FFI\CData ? $transpose->cdata : $transpose;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint8($transpose), 'Argument $transpose must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniformMatrix2x3fv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function glProgramUniformMatrix3x2fv($program, $location, $count, $transpose, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $transpose = $transpose instanceof \FFI\CData ? $transpose->cdata : $transpose;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint8($transpose), 'Argument $transpose must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniformMatrix3x2fv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function glProgramUniformMatrix2x4fv($program, $location, $count, $transpose, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $transpose = $transpose instanceof \FFI\CData ? $transpose->cdata : $transpose;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint8($transpose), 'Argument $transpose must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniformMatrix2x4fv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function glProgramUniformMatrix4x2fv($program, $location, $count, $transpose, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $transpose = $transpose instanceof \FFI\CData ? $transpose->cdata : $transpose;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint8($transpose), 'Argument $transpose must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniformMatrix4x2fv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function glProgramUniformMatrix3x4fv($program, $location, $count, $transpose, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $transpose = $transpose instanceof \FFI\CData ? $transpose->cdata : $transpose;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint8($transpose), 'Argument $transpose must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniformMatrix3x4fv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function glProgramUniformMatrix4x3fv($program, $location, $count, $transpose, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $transpose = $transpose instanceof \FFI\CData ? $transpose->cdata : $transpose;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint8($transpose), 'Argument $transpose must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniformMatrix4x3fv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLfloat *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function glProgramUniformMatrix2x3dv($program, $location, $count, $transpose, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $transpose = $transpose instanceof \FFI\CData ? $transpose->cdata : $transpose;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint8($transpose), 'Argument $transpose must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniformMatrix2x3dv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function glProgramUniformMatrix3x2dv($program, $location, $count, $transpose, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $transpose = $transpose instanceof \FFI\CData ? $transpose->cdata : $transpose;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint8($transpose), 'Argument $transpose must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniformMatrix3x2dv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function glProgramUniformMatrix2x4dv($program, $location, $count, $transpose, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $transpose = $transpose instanceof \FFI\CData ? $transpose->cdata : $transpose;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint8($transpose), 'Argument $transpose must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniformMatrix2x4dv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function glProgramUniformMatrix4x2dv($program, $location, $count, $transpose, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $transpose = $transpose instanceof \FFI\CData ? $transpose->cdata : $transpose;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint8($transpose), 'Argument $transpose must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniformMatrix4x2dv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function glProgramUniformMatrix3x4dv($program, $location, $count, $transpose, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $transpose = $transpose instanceof \FFI\CData ? $transpose->cdata : $transpose;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint8($transpose), 'Argument $transpose must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniformMatrix3x4dv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glProgramUniform} modifies the value of a uniform variable
     * or a uniform variable array. The location of the uniform variable to
     * be modified is specified by $location, which should be a value
     * returned by {@see GL46::glGetUniformLocation}.
     * {@see GL46::glProgramUniform} operates on the program object specified
     * by $program.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}} are used
     * to change the value of the uniform variable specified by $location
     * using the values passed as arguments. The number specified in the
     * command should match the number of components in the data type of the
     * specified uniform variable (e.g., {@see GL46::1} for `float`, `int`,
     * `unsigned int`, `bool`; {@see GL46::2} for `vec2`, `ivec2`, `uvec2`,
     * `bvec2`, etc.). The suffix {@see GL46::f} indicates that
     * floating-point values are being passed; the suffix {@see GL46::i}
     * indicates that integer values are being passed; the suffix
     * {@see GL46::ui} indicates that unsigned integer values are being
     * passed, and this type should also match the data type of the specified
     * uniform variable. The {@see GL46::i} variants of this function should
     * be used to provide values for uniform variables defined as `int`,
     * `ivec2`, `ivec3`, `ivec4`, or arrays of these. The {@see GL46::ui}
     * variants of this function should be used to provide values for uniform
     * variables defined as `unsigned int`, `uvec2`, `uvec3`, `uvec4`, or
     * arrays of these. The {@see GL46::f} variants should be used to provide
     * values for uniform variables of type `float`, `vec2`, `vec3`, `vec4`,
     * or arrays of these. Either the {@see GL46::i}, {@see GL46::ui} or
     * {@see GL46::f} variants may be used to provide values for uniform
     * variables of type `bool`, `bvec2`, `bvec3`, `bvec4`, or arrays of
     * these. The uniform variable will be set to `false` if the input value
     * is 0 or 0.0f, and it will be set to `true` otherwise.
     *
     * All active uniform variables defined in a program object are
     * initialized to 0 when the program object is linked successfully. They
     * retain the values assigned to them by a call to
     * {@see GL46::glProgramUniform} until the next successful link operation
     * occurs on the program object, when they are once again initialized to
     * 0.
     *
     * The commands {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}v} can be
     * used to modify a single uniform variable or a uniform variable array.
     * These commands pass a count and a pointer to the values to be loaded
     * into a uniform variable or a uniform variable array. A count of 1
     * should be used if modifying the value of a single uniform variable,
     * and a count of 1 or greater can be used to modify an entire array or
     * part of an array. When loading n elements starting at an arbitrary
     * position m in a uniform variable array, elements m + n - 1 in the
     * array will be replaced with the new values. If $m + $n - 1 is larger
     * than the size of the uniform variable array, values for all array
     * elements beyond the end of the array will be ignored. The number
     * specified in the name of the command indicates the number of
     * components for each element in $value, and it should match the number
     * of components in the data type of the specified uniform variable
     * (e.g., {@see GL46::1} for `float`, `int`, `bool`; {@see GL46::2} for
     * `vec2`, `ivec2`, `bvec2`, etc.). The data type specified in the name
     * of the command must match the data type for the specified uniform
     * variable as described previously for
     * {@see GL46::glProgramUniform{1|2|3|4}{f|i|ui}}.
     *
     * For uniform variable arrays, each element of the array is considered
     * to be of the type indicated in the name of the command (e.g.,
     * {@see GL46::glProgramUniform3f} or {@see GL46::glProgramUniform3fv}
     * can be used to load a uniform variable array of type vec3). The number
     * of elements of the uniform variable array to be modified is specified
     * by $count
     *
     * The commands
     * {@see GL46::glProgramUniformMatrix{2|3|4|2x3|3x2|2x4|4x2|3x4|4x3}fv}
     * are used to modify a matrix or an array of matrices. The numbers in
     * the command name are interpreted as the dimensionality of the matrix.
     * The number {@see GL46::2} indicates a 2 × 2 matrix (i.e., 4 values),
     * the number {@see GL46::3} indicates a 3 × 3 matrix (i.e., 9 values),
     * and the number {@see GL46::4} indicates a 4 × 4 matrix (i.e., 16
     * values). Non-square matrix dimensionality is explicit, with the first
     * number representing the number of columns and the second number
     * representing the number of rows. For example, {@see GL46::2x4}
     * indicates a 2 × 4 matrix with 2 columns and 4 rows (i.e., 8 values).
     * If $transpose is {@see GL46::GL_FALSE}, each matrix is assumed to be
     * supplied in column major order. If $transpose is {@see GL46::GL_TRUE},
     * each matrix is assumed to be supplied in row major order. The $count
     * argument indicates the number of matrices to be passed. A count of 1
     * should be used if modifying the value of a single matrix, and a count
     * greater than 1 can be used to modify an array of matrices.
     *
     * @see http://docs.gl/gl4/glProgramUniform
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $program
     * @param int|\FFI\CData|\FFI\CInt $location
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param int|\FFI\CData|\FFI\CInt $transpose
     * @param \FFI\CData|\FFI\CFloatPtr|null $value
     * @return void
     */
    public function glProgramUniformMatrix4x3dv($program, $location, $count, $transpose, ?\FFI\CData $value): void
    {
        $program = $program instanceof \FFI\CData ? $program->cdata : $program;
        $location = $location instanceof \FFI\CData ? $location->cdata : $location;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;
        $transpose = $transpose instanceof \FFI\CData ? $transpose->cdata : $transpose;

        assert(Assert::uint16($program), 'Argument $program must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($location), 'Argument $location must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::uint8($transpose), 'Argument $transpose must be a C-like GLboolean, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glProgramUniformMatrix4x3dv', 'void (*)(GLuint program, GLint location, GLsizei count, GLboolean transpose, const GLdouble *value)');
        $proc($program, $location, $count, $transpose, $value);
    }

    /**
     * {@see GL46::glValidateProgramPipeline} instructs the implementation to
     * validate the shader executables contained in $pipeline against the
     * current GL state. The implementation may use this as an opportunity to
     * perform any internal shader modifications that may be required to
     * ensure correct operation of the installed shaders given the current GL
     * state.
     *
     * After a program pipeline has been validated, its validation status is
     * set to {@see GL46::GL_TRUE}. The validation status of a program
     * pipeline object may be queried by calling
     * {@see GL46::glGetProgramPipeline} with parameter
     * {@see GL46::GL_VALIDATE_STATUS}.
     *
     * If $pipeline is a name previously returned from a call to
     * {@see GL46::glGenProgramPipelines} but that has not yet been bound by
     * a call to {@see GL46::glBindProgramPipeline}, a new program pipeline
     * object is created with name $pipeline and the default state vector.
     *
     * @see http://docs.gl/gl4/glValidateProgramPipeline
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $pipeline
     * @return void
     */
    public function glValidateProgramPipeline($pipeline): void
    {
        $pipeline = $pipeline instanceof \FFI\CData ? $pipeline->cdata : $pipeline;

        assert(Assert::uint16($pipeline), 'Argument $pipeline must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glValidateProgramPipeline', 'void (*)(GLuint pipeline)');
        $proc($pipeline);
    }

    /**
     * {@see GL46::glGetProgramPipelineInfoLog} retrieves the info log for
     * the program pipeline object $pipeline. The info log, including its
     * null terminator, is written into the array of characters whose address
     * is given by $infoLog. The maximum number of characters that may be
     * written into $infoLog is given by $bufSize, and the actual number of
     * characters written into $infoLog is returned in the integer whose
     * address is given by $length. If $length is {@see GL46::NULL}, no
     * length is returned.
     *
     * The actual length of the info log for the program pipeline may be
     * determined by calling {@see GL46::glGetProgramPipeline} with $pname
     * set to {@see GL46::GL_INFO_LOG_LENGTH}.
     *
     * @see http://docs.gl/gl4/glGetProgramPipelineInfoLog
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $pipeline
     * @param int|\FFI\CData|\FFI\CInt $bufSize
     * @param \FFI\CData|\FFI\CIntPtr|null $length
     * @param \FFI\CData|\FFI\CIntPtr|null $infoLog
     * @return void
     */
    public function glGetProgramPipelineInfoLog($pipeline, $bufSize, ?\FFI\CData $length, ?\FFI\CData $infoLog): void
    {
        $pipeline = $pipeline instanceof \FFI\CData ? $pipeline->cdata : $pipeline;
        $bufSize = $bufSize instanceof \FFI\CData ? $bufSize->cdata : $bufSize;

        assert(Assert::uint16($pipeline), 'Argument $pipeline must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($bufSize), 'Argument $bufSize must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetProgramPipelineInfoLog', 'void (*)(GLuint pipeline, GLsizei bufSize, GLsizei *length, GLchar *infoLog)');
        $proc($pipeline, $bufSize, $length, $infoLog);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are
     * organized into an array. The first entry of this array is numbered 0,
     * and the size of the array is specified by the implementation-dependent
     * constant {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of
     * this array can be modified with a {@see GL46::glVertexAttrib} call
     * that specifies the index of the element to be modified and a value for
     * that element.
     *
     * These commands can be used to specify one, two, three, or all four
     * components of the generic vertex attribute specified by $index. A
     * {@see GL46::1} in the name of the command indicates that only one
     * value is passed, and it will be used to modify the first component of
     * the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a
     * {@see GL46::2} in the name of the command indicates that values are
     * provided for the first two components, the third component will be set
     * to 0, and the fourth component will be set to 1. A {@see GL46::3} in
     * the name of the command indicates that values are provided for the
     * first three components and the fourth component will be set to 1,
     * whereas a {@see GL46::4} in the name indicates that values are
     * provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i},
     * {@see GL46::d}, {@see GL46::ub}, {@see GL46::us}, and {@see GL46::ui}
     * indicate whether the arguments are of type short, float, int, double,
     * unsigned byte, unsigned short, or unsigned int. When {@see GL46::v} is
     * appended to the name, the commands can take a pointer to an array of
     * such values.
     *
     * Additional capitalized letters can indicate further alterations to the
     * default behavior of the glVertexAttrib function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments
     * will be passed as fixed-point values that are scaled to a normalized
     * range according to the component conversion rules defined by the
     * OpenGL specification. Signed values are understood to represent
     * fixed-point values in the range [-1,1], and unsigned values are
     * understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are
     * extended to full signed or unsigned integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are
     * stored as packed components within a larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are
     * full 64-bit quantities and should be passed directly to shader inputs
     * declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type
     * mat2, mat3, or mat4. Attributes of these types may be loaded using the
     * {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one
     * column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be
     * bound to a generic attribute index by calling
     * {@see GL46::glBindAttribLocation}. This allows an application to use
     * more descriptive variable names in a vertex shader. A subsequent
     * change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the
     * vertex shader.
     *
     * The binding between a generic vertex attribute index and a
     * user-defined attribute variable in a vertex shader is part of the
     * state of a program object, but the current value of the generic vertex
     * attribute is not. The value of each generic vertex attribute is part
     * of current state, just like standard vertex attributes, and it is
     * maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are
     * not bound to a named vertex shader attribute variable. These values
     * are simply maintained as part of current state and will not be
     * accessed by the vertex shader. If a generic vertex attribute bound to
     * an attribute variable in a vertex shader is not updated while the
     * vertex shader is executing, the vertex shader will repeatedly use the
     * current value for the generic vertex attribute.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param float|\FFI\CData|\FFI\CFloat $x
     * @return void
     */
    public function glVertexAttribL1d($index, $x): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $x = $x instanceof \FFI\CData ? $x->cdata : $x;

        assert(Assert::uint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::float64($x), 'Argument $x must be a C-like GLdouble, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribL1d', 'void (*)(GLuint index, GLdouble x)');
        $proc($index, $x);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are
     * organized into an array. The first entry of this array is numbered 0,
     * and the size of the array is specified by the implementation-dependent
     * constant {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of
     * this array can be modified with a {@see GL46::glVertexAttrib} call
     * that specifies the index of the element to be modified and a value for
     * that element.
     *
     * These commands can be used to specify one, two, three, or all four
     * components of the generic vertex attribute specified by $index. A
     * {@see GL46::1} in the name of the command indicates that only one
     * value is passed, and it will be used to modify the first component of
     * the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a
     * {@see GL46::2} in the name of the command indicates that values are
     * provided for the first two components, the third component will be set
     * to 0, and the fourth component will be set to 1. A {@see GL46::3} in
     * the name of the command indicates that values are provided for the
     * first three components and the fourth component will be set to 1,
     * whereas a {@see GL46::4} in the name indicates that values are
     * provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i},
     * {@see GL46::d}, {@see GL46::ub}, {@see GL46::us}, and {@see GL46::ui}
     * indicate whether the arguments are of type short, float, int, double,
     * unsigned byte, unsigned short, or unsigned int. When {@see GL46::v} is
     * appended to the name, the commands can take a pointer to an array of
     * such values.
     *
     * Additional capitalized letters can indicate further alterations to the
     * default behavior of the glVertexAttrib function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments
     * will be passed as fixed-point values that are scaled to a normalized
     * range according to the component conversion rules defined by the
     * OpenGL specification. Signed values are understood to represent
     * fixed-point values in the range [-1,1], and unsigned values are
     * understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are
     * extended to full signed or unsigned integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are
     * stored as packed components within a larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are
     * full 64-bit quantities and should be passed directly to shader inputs
     * declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type
     * mat2, mat3, or mat4. Attributes of these types may be loaded using the
     * {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one
     * column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be
     * bound to a generic attribute index by calling
     * {@see GL46::glBindAttribLocation}. This allows an application to use
     * more descriptive variable names in a vertex shader. A subsequent
     * change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the
     * vertex shader.
     *
     * The binding between a generic vertex attribute index and a
     * user-defined attribute variable in a vertex shader is part of the
     * state of a program object, but the current value of the generic vertex
     * attribute is not. The value of each generic vertex attribute is part
     * of current state, just like standard vertex attributes, and it is
     * maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are
     * not bound to a named vertex shader attribute variable. These values
     * are simply maintained as part of current state and will not be
     * accessed by the vertex shader. If a generic vertex attribute bound to
     * an attribute variable in a vertex shader is not updated while the
     * vertex shader is executing, the vertex shader will repeatedly use the
     * current value for the generic vertex attribute.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param float|\FFI\CData|\FFI\CFloat $x
     * @param float|\FFI\CData|\FFI\CFloat $y
     * @return void
     */
    public function glVertexAttribL2d($index, $x, $y): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $x = $x instanceof \FFI\CData ? $x->cdata : $x;
        $y = $y instanceof \FFI\CData ? $y->cdata : $y;

        assert(Assert::uint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::float64($x), 'Argument $x must be a C-like GLdouble, but incompatible or overflow value given');
        assert(Assert::float64($y), 'Argument $y must be a C-like GLdouble, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribL2d', 'void (*)(GLuint index, GLdouble x, GLdouble y)');
        $proc($index, $x, $y);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are
     * organized into an array. The first entry of this array is numbered 0,
     * and the size of the array is specified by the implementation-dependent
     * constant {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of
     * this array can be modified with a {@see GL46::glVertexAttrib} call
     * that specifies the index of the element to be modified and a value for
     * that element.
     *
     * These commands can be used to specify one, two, three, or all four
     * components of the generic vertex attribute specified by $index. A
     * {@see GL46::1} in the name of the command indicates that only one
     * value is passed, and it will be used to modify the first component of
     * the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a
     * {@see GL46::2} in the name of the command indicates that values are
     * provided for the first two components, the third component will be set
     * to 0, and the fourth component will be set to 1. A {@see GL46::3} in
     * the name of the command indicates that values are provided for the
     * first three components and the fourth component will be set to 1,
     * whereas a {@see GL46::4} in the name indicates that values are
     * provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i},
     * {@see GL46::d}, {@see GL46::ub}, {@see GL46::us}, and {@see GL46::ui}
     * indicate whether the arguments are of type short, float, int, double,
     * unsigned byte, unsigned short, or unsigned int. When {@see GL46::v} is
     * appended to the name, the commands can take a pointer to an array of
     * such values.
     *
     * Additional capitalized letters can indicate further alterations to the
     * default behavior of the glVertexAttrib function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments
     * will be passed as fixed-point values that are scaled to a normalized
     * range according to the component conversion rules defined by the
     * OpenGL specification. Signed values are understood to represent
     * fixed-point values in the range [-1,1], and unsigned values are
     * understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are
     * extended to full signed or unsigned integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are
     * stored as packed components within a larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are
     * full 64-bit quantities and should be passed directly to shader inputs
     * declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type
     * mat2, mat3, or mat4. Attributes of these types may be loaded using the
     * {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one
     * column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be
     * bound to a generic attribute index by calling
     * {@see GL46::glBindAttribLocation}. This allows an application to use
     * more descriptive variable names in a vertex shader. A subsequent
     * change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the
     * vertex shader.
     *
     * The binding between a generic vertex attribute index and a
     * user-defined attribute variable in a vertex shader is part of the
     * state of a program object, but the current value of the generic vertex
     * attribute is not. The value of each generic vertex attribute is part
     * of current state, just like standard vertex attributes, and it is
     * maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are
     * not bound to a named vertex shader attribute variable. These values
     * are simply maintained as part of current state and will not be
     * accessed by the vertex shader. If a generic vertex attribute bound to
     * an attribute variable in a vertex shader is not updated while the
     * vertex shader is executing, the vertex shader will repeatedly use the
     * current value for the generic vertex attribute.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param float|\FFI\CData|\FFI\CFloat $x
     * @param float|\FFI\CData|\FFI\CFloat $y
     * @param float|\FFI\CData|\FFI\CFloat $z
     * @return void
     */
    public function glVertexAttribL3d($index, $x, $y, $z): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $x = $x instanceof \FFI\CData ? $x->cdata : $x;
        $y = $y instanceof \FFI\CData ? $y->cdata : $y;
        $z = $z instanceof \FFI\CData ? $z->cdata : $z;

        assert(Assert::uint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::float64($x), 'Argument $x must be a C-like GLdouble, but incompatible or overflow value given');
        assert(Assert::float64($y), 'Argument $y must be a C-like GLdouble, but incompatible or overflow value given');
        assert(Assert::float64($z), 'Argument $z must be a C-like GLdouble, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribL3d', 'void (*)(GLuint index, GLdouble x, GLdouble y, GLdouble z)');
        $proc($index, $x, $y, $z);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are
     * organized into an array. The first entry of this array is numbered 0,
     * and the size of the array is specified by the implementation-dependent
     * constant {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of
     * this array can be modified with a {@see GL46::glVertexAttrib} call
     * that specifies the index of the element to be modified and a value for
     * that element.
     *
     * These commands can be used to specify one, two, three, or all four
     * components of the generic vertex attribute specified by $index. A
     * {@see GL46::1} in the name of the command indicates that only one
     * value is passed, and it will be used to modify the first component of
     * the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a
     * {@see GL46::2} in the name of the command indicates that values are
     * provided for the first two components, the third component will be set
     * to 0, and the fourth component will be set to 1. A {@see GL46::3} in
     * the name of the command indicates that values are provided for the
     * first three components and the fourth component will be set to 1,
     * whereas a {@see GL46::4} in the name indicates that values are
     * provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i},
     * {@see GL46::d}, {@see GL46::ub}, {@see GL46::us}, and {@see GL46::ui}
     * indicate whether the arguments are of type short, float, int, double,
     * unsigned byte, unsigned short, or unsigned int. When {@see GL46::v} is
     * appended to the name, the commands can take a pointer to an array of
     * such values.
     *
     * Additional capitalized letters can indicate further alterations to the
     * default behavior of the glVertexAttrib function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments
     * will be passed as fixed-point values that are scaled to a normalized
     * range according to the component conversion rules defined by the
     * OpenGL specification. Signed values are understood to represent
     * fixed-point values in the range [-1,1], and unsigned values are
     * understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are
     * extended to full signed or unsigned integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are
     * stored as packed components within a larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are
     * full 64-bit quantities and should be passed directly to shader inputs
     * declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type
     * mat2, mat3, or mat4. Attributes of these types may be loaded using the
     * {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one
     * column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be
     * bound to a generic attribute index by calling
     * {@see GL46::glBindAttribLocation}. This allows an application to use
     * more descriptive variable names in a vertex shader. A subsequent
     * change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the
     * vertex shader.
     *
     * The binding between a generic vertex attribute index and a
     * user-defined attribute variable in a vertex shader is part of the
     * state of a program object, but the current value of the generic vertex
     * attribute is not. The value of each generic vertex attribute is part
     * of current state, just like standard vertex attributes, and it is
     * maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are
     * not bound to a named vertex shader attribute variable. These values
     * are simply maintained as part of current state and will not be
     * accessed by the vertex shader. If a generic vertex attribute bound to
     * an attribute variable in a vertex shader is not updated while the
     * vertex shader is executing, the vertex shader will repeatedly use the
     * current value for the generic vertex attribute.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param float|\FFI\CData|\FFI\CFloat $x
     * @param float|\FFI\CData|\FFI\CFloat $y
     * @param float|\FFI\CData|\FFI\CFloat $z
     * @param float|\FFI\CData|\FFI\CFloat $w
     * @return void
     */
    public function glVertexAttribL4d($index, $x, $y, $z, $w): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $x = $x instanceof \FFI\CData ? $x->cdata : $x;
        $y = $y instanceof \FFI\CData ? $y->cdata : $y;
        $z = $z instanceof \FFI\CData ? $z->cdata : $z;
        $w = $w instanceof \FFI\CData ? $w->cdata : $w;

        assert(Assert::uint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::float64($x), 'Argument $x must be a C-like GLdouble, but incompatible or overflow value given');
        assert(Assert::float64($y), 'Argument $y must be a C-like GLdouble, but incompatible or overflow value given');
        assert(Assert::float64($z), 'Argument $z must be a C-like GLdouble, but incompatible or overflow value given');
        assert(Assert::float64($w), 'Argument $w must be a C-like GLdouble, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribL4d', 'void (*)(GLuint index, GLdouble x, GLdouble y, GLdouble z, GLdouble w)');
        $proc($index, $x, $y, $z, $w);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are
     * organized into an array. The first entry of this array is numbered 0,
     * and the size of the array is specified by the implementation-dependent
     * constant {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of
     * this array can be modified with a {@see GL46::glVertexAttrib} call
     * that specifies the index of the element to be modified and a value for
     * that element.
     *
     * These commands can be used to specify one, two, three, or all four
     * components of the generic vertex attribute specified by $index. A
     * {@see GL46::1} in the name of the command indicates that only one
     * value is passed, and it will be used to modify the first component of
     * the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a
     * {@see GL46::2} in the name of the command indicates that values are
     * provided for the first two components, the third component will be set
     * to 0, and the fourth component will be set to 1. A {@see GL46::3} in
     * the name of the command indicates that values are provided for the
     * first three components and the fourth component will be set to 1,
     * whereas a {@see GL46::4} in the name indicates that values are
     * provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i},
     * {@see GL46::d}, {@see GL46::ub}, {@see GL46::us}, and {@see GL46::ui}
     * indicate whether the arguments are of type short, float, int, double,
     * unsigned byte, unsigned short, or unsigned int. When {@see GL46::v} is
     * appended to the name, the commands can take a pointer to an array of
     * such values.
     *
     * Additional capitalized letters can indicate further alterations to the
     * default behavior of the glVertexAttrib function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments
     * will be passed as fixed-point values that are scaled to a normalized
     * range according to the component conversion rules defined by the
     * OpenGL specification. Signed values are understood to represent
     * fixed-point values in the range [-1,1], and unsigned values are
     * understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are
     * extended to full signed or unsigned integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are
     * stored as packed components within a larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are
     * full 64-bit quantities and should be passed directly to shader inputs
     * declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type
     * mat2, mat3, or mat4. Attributes of these types may be loaded using the
     * {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one
     * column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be
     * bound to a generic attribute index by calling
     * {@see GL46::glBindAttribLocation}. This allows an application to use
     * more descriptive variable names in a vertex shader. A subsequent
     * change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the
     * vertex shader.
     *
     * The binding between a generic vertex attribute index and a
     * user-defined attribute variable in a vertex shader is part of the
     * state of a program object, but the current value of the generic vertex
     * attribute is not. The value of each generic vertex attribute is part
     * of current state, just like standard vertex attributes, and it is
     * maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are
     * not bound to a named vertex shader attribute variable. These values
     * are simply maintained as part of current state and will not be
     * accessed by the vertex shader. If a generic vertex attribute bound to
     * an attribute variable in a vertex shader is not updated while the
     * vertex shader is executing, the vertex shader will repeatedly use the
     * current value for the generic vertex attribute.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public function glVertexAttribL1dv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Assert::uint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribL1dv', 'void (*)(GLuint index, const GLdouble *v)');
        $proc($index, $v);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are
     * organized into an array. The first entry of this array is numbered 0,
     * and the size of the array is specified by the implementation-dependent
     * constant {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of
     * this array can be modified with a {@see GL46::glVertexAttrib} call
     * that specifies the index of the element to be modified and a value for
     * that element.
     *
     * These commands can be used to specify one, two, three, or all four
     * components of the generic vertex attribute specified by $index. A
     * {@see GL46::1} in the name of the command indicates that only one
     * value is passed, and it will be used to modify the first component of
     * the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a
     * {@see GL46::2} in the name of the command indicates that values are
     * provided for the first two components, the third component will be set
     * to 0, and the fourth component will be set to 1. A {@see GL46::3} in
     * the name of the command indicates that values are provided for the
     * first three components and the fourth component will be set to 1,
     * whereas a {@see GL46::4} in the name indicates that values are
     * provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i},
     * {@see GL46::d}, {@see GL46::ub}, {@see GL46::us}, and {@see GL46::ui}
     * indicate whether the arguments are of type short, float, int, double,
     * unsigned byte, unsigned short, or unsigned int. When {@see GL46::v} is
     * appended to the name, the commands can take a pointer to an array of
     * such values.
     *
     * Additional capitalized letters can indicate further alterations to the
     * default behavior of the glVertexAttrib function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments
     * will be passed as fixed-point values that are scaled to a normalized
     * range according to the component conversion rules defined by the
     * OpenGL specification. Signed values are understood to represent
     * fixed-point values in the range [-1,1], and unsigned values are
     * understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are
     * extended to full signed or unsigned integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are
     * stored as packed components within a larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are
     * full 64-bit quantities and should be passed directly to shader inputs
     * declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type
     * mat2, mat3, or mat4. Attributes of these types may be loaded using the
     * {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one
     * column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be
     * bound to a generic attribute index by calling
     * {@see GL46::glBindAttribLocation}. This allows an application to use
     * more descriptive variable names in a vertex shader. A subsequent
     * change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the
     * vertex shader.
     *
     * The binding between a generic vertex attribute index and a
     * user-defined attribute variable in a vertex shader is part of the
     * state of a program object, but the current value of the generic vertex
     * attribute is not. The value of each generic vertex attribute is part
     * of current state, just like standard vertex attributes, and it is
     * maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are
     * not bound to a named vertex shader attribute variable. These values
     * are simply maintained as part of current state and will not be
     * accessed by the vertex shader. If a generic vertex attribute bound to
     * an attribute variable in a vertex shader is not updated while the
     * vertex shader is executing, the vertex shader will repeatedly use the
     * current value for the generic vertex attribute.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public function glVertexAttribL2dv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Assert::uint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribL2dv', 'void (*)(GLuint index, const GLdouble *v)');
        $proc($index, $v);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are
     * organized into an array. The first entry of this array is numbered 0,
     * and the size of the array is specified by the implementation-dependent
     * constant {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of
     * this array can be modified with a {@see GL46::glVertexAttrib} call
     * that specifies the index of the element to be modified and a value for
     * that element.
     *
     * These commands can be used to specify one, two, three, or all four
     * components of the generic vertex attribute specified by $index. A
     * {@see GL46::1} in the name of the command indicates that only one
     * value is passed, and it will be used to modify the first component of
     * the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a
     * {@see GL46::2} in the name of the command indicates that values are
     * provided for the first two components, the third component will be set
     * to 0, and the fourth component will be set to 1. A {@see GL46::3} in
     * the name of the command indicates that values are provided for the
     * first three components and the fourth component will be set to 1,
     * whereas a {@see GL46::4} in the name indicates that values are
     * provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i},
     * {@see GL46::d}, {@see GL46::ub}, {@see GL46::us}, and {@see GL46::ui}
     * indicate whether the arguments are of type short, float, int, double,
     * unsigned byte, unsigned short, or unsigned int. When {@see GL46::v} is
     * appended to the name, the commands can take a pointer to an array of
     * such values.
     *
     * Additional capitalized letters can indicate further alterations to the
     * default behavior of the glVertexAttrib function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments
     * will be passed as fixed-point values that are scaled to a normalized
     * range according to the component conversion rules defined by the
     * OpenGL specification. Signed values are understood to represent
     * fixed-point values in the range [-1,1], and unsigned values are
     * understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are
     * extended to full signed or unsigned integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are
     * stored as packed components within a larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are
     * full 64-bit quantities and should be passed directly to shader inputs
     * declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type
     * mat2, mat3, or mat4. Attributes of these types may be loaded using the
     * {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one
     * column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be
     * bound to a generic attribute index by calling
     * {@see GL46::glBindAttribLocation}. This allows an application to use
     * more descriptive variable names in a vertex shader. A subsequent
     * change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the
     * vertex shader.
     *
     * The binding between a generic vertex attribute index and a
     * user-defined attribute variable in a vertex shader is part of the
     * state of a program object, but the current value of the generic vertex
     * attribute is not. The value of each generic vertex attribute is part
     * of current state, just like standard vertex attributes, and it is
     * maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are
     * not bound to a named vertex shader attribute variable. These values
     * are simply maintained as part of current state and will not be
     * accessed by the vertex shader. If a generic vertex attribute bound to
     * an attribute variable in a vertex shader is not updated while the
     * vertex shader is executing, the vertex shader will repeatedly use the
     * current value for the generic vertex attribute.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public function glVertexAttribL3dv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Assert::uint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribL3dv', 'void (*)(GLuint index, const GLdouble *v)');
        $proc($index, $v);
    }

    /**
     * The {@see GL46::glVertexAttrib} family of entry points allows an
     * application to pass generic vertex attributes in numbered locations.
     *
     * Generic attributes are defined as four-component values that are
     * organized into an array. The first entry of this array is numbered 0,
     * and the size of the array is specified by the implementation-dependent
     * constant {@see GL46::GL_MAX_VERTEX_ATTRIBS}. Individual elements of
     * this array can be modified with a {@see GL46::glVertexAttrib} call
     * that specifies the index of the element to be modified and a value for
     * that element.
     *
     * These commands can be used to specify one, two, three, or all four
     * components of the generic vertex attribute specified by $index. A
     * {@see GL46::1} in the name of the command indicates that only one
     * value is passed, and it will be used to modify the first component of
     * the generic vertex attribute. The second and third components will be
     * set to 0, and the fourth component will be set to 1. Similarly, a
     * {@see GL46::2} in the name of the command indicates that values are
     * provided for the first two components, the third component will be set
     * to 0, and the fourth component will be set to 1. A {@see GL46::3} in
     * the name of the command indicates that values are provided for the
     * first three components and the fourth component will be set to 1,
     * whereas a {@see GL46::4} in the name indicates that values are
     * provided for all four components.
     *
     * The letters {@see GL46::s}, {@see GL46::f}, {@see GL46::i},
     * {@see GL46::d}, {@see GL46::ub}, {@see GL46::us}, and {@see GL46::ui}
     * indicate whether the arguments are of type short, float, int, double,
     * unsigned byte, unsigned short, or unsigned int. When {@see GL46::v} is
     * appended to the name, the commands can take a pointer to an array of
     * such values.
     *
     * Additional capitalized letters can indicate further alterations to the
     * default behavior of the glVertexAttrib function:
     *
     * The commands containing {@see GL46::N} indicate that the arguments
     * will be passed as fixed-point values that are scaled to a normalized
     * range according to the component conversion rules defined by the
     * OpenGL specification. Signed values are understood to represent
     * fixed-point values in the range [-1,1], and unsigned values are
     * understood to represent fixed-point values in the range [0,1].
     *
     * The commands containing {@see GL46::I} indicate that the arguments are
     * extended to full signed or unsigned integers.
     *
     * The commands containing {@see GL46::P} indicate that the arguments are
     * stored as packed components within a larger natural type.
     *
     * The commands containing {@see GL46::L} indicate that the arguments are
     * full 64-bit quantities and should be passed directly to shader inputs
     * declared as 64-bit double precision types.
     *
     * OpenGL Shading Language attribute variables are allowed to be of type
     * mat2, mat3, or mat4. Attributes of these types may be loaded using the
     * {@see GL46::glVertexAttrib} entry points. Matrices must be loaded into
     * successive generic attribute slots in column major order, with one
     * column of the matrix in each generic attribute slot.
     *
     * A user-defined attribute variable declared in a vertex shader can be
     * bound to a generic attribute index by calling
     * {@see GL46::glBindAttribLocation}. This allows an application to use
     * more descriptive variable names in a vertex shader. A subsequent
     * change to the specified generic vertex attribute will be immediately
     * reflected as a change to the corresponding attribute variable in the
     * vertex shader.
     *
     * The binding between a generic vertex attribute index and a
     * user-defined attribute variable in a vertex shader is part of the
     * state of a program object, but the current value of the generic vertex
     * attribute is not. The value of each generic vertex attribute is part
     * of current state, just like standard vertex attributes, and it is
     * maintained even if a different program object is used.
     *
     * An application may freely modify generic vertex attributes that are
     * not bound to a named vertex shader attribute variable. These values
     * are simply maintained as part of current state and will not be
     * accessed by the vertex shader. If a generic vertex attribute bound to
     * an attribute variable in a vertex shader is not updated while the
     * vertex shader is executing, the vertex shader will repeatedly use the
     * current value for the generic vertex attribute.
     *
     * @see http://docs.gl/gl2/glVertexAttrib
     * @see http://docs.gl/gl4/glVertexAttrib
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public function glVertexAttribL4dv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Assert::uint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribL4dv', 'void (*)(GLuint index, const GLdouble *v)');
        $proc($index, $v);
    }

    /**
     * {@see GL46::glVertexAttribPointer},
     * {@see GL46::glVertexAttribIPointer} and
     * {@see GL46::glVertexAttribLPointer} specify the location and data
     * format of the array of generic vertex attributes at index $index to
     * use when rendering. $size specifies the number of components per
     * attribute and must be 1, 2, 3, 4, or {@see GL46::GL_BGRA}. $type
     * specifies the data type of each component, and $stride specifies the
     * byte stride from one attribute to the next, allowing vertices and
     * attributes to be packed into a single array or stored in separate
     * arrays.
     *
     * For {@see GL46::glVertexAttribPointer}, if $normalized is set to
     * {@see GL46::GL_TRUE}, it indicates that values stored in an integer
     * format are to be mapped to the range [-1,1] (for signed values) or
     * [0,1] (for unsigned values) when they are accessed and converted to
     * floating point. Otherwise, values will be converted to floats directly
     * without normalization.
     *
     * For {@see GL46::glVertexAttribIPointer}, only the integer types
     * {@see GL46::GL_BYTE}, {@see GL46::GL_UNSIGNED_BYTE},
     * {@see GL46::GL_SHORT}, {@see GL46::GL_UNSIGNED_SHORT},
     * {@see GL46::GL_INT}, {@see GL46::GL_UNSIGNED_INT} are accepted. Values
     * are always left as integer values.
     *
     * {@see GL46::glVertexAttribLPointer} specifies state for a generic
     * vertex attribute array associated with a shader attribute variable
     * declared with 64-bit double precision components. $type must be
     * {@see GL46::GL_DOUBLE}. $index, $size, and $stride behave as described
     * for {@see GL46::glVertexAttribPointer} and
     * {@see GL46::glVertexAttribIPointer}.
     *
     * If $pointer is not `NULL`, a non-zero named buffer object must be
     * bound to the {@see GL46::GL_ARRAY_BUFFER} target (see
     * {@see GL46::glBindBuffer}), otherwise an error is generated. $pointer
     * is treated as a byte offset into the buffer object's data store. The
     * buffer object binding ({@see GL46::GL_ARRAY_BUFFER_BINDING}) is saved
     * as generic vertex attribute array state
     * ({@see GL46::GL_VERTEX_ATTRIB_ARRAY_BUFFER_BINDING}) for index $index.
     *
     * When a generic vertex attribute array is specified, $size, $type,
     * $normalized, $stride, and $pointer are saved as vertex array state, in
     * addition to the current vertex array buffer object binding.
     *
     * To enable and disable a generic vertex attribute array, call
     * {@see GL46::glEnableVertexAttribArray} and
     * {@see GL46::glDisableVertexAttribArray} with $index. If enabled, the
     * generic vertex attribute array is used when {@see GL46::glDrawArrays},
     * {@see GL46::glMultiDrawArrays}, {@see GL46::glDrawElements},
     * {@see GL46::glMultiDrawElements}, or {@see GL46::glDrawRangeElements}
     * is called.
     *
     * @see http://docs.gl/gl2/glVertexAttribPointer
     * @see http://docs.gl/gl4/glVertexAttribPointer
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param int|\FFI\CData|\FFI\CInt $size
     * @param int|\FFI\CData|\FFI\CInt $type
     * @param int|\FFI\CData|\FFI\CInt $stride
     * @param \FFI\CData|\FFI\CPtr|null $pointer
     * @return void
     */
    public function glVertexAttribLPointer($index, $size, $type, $stride, ?\FFI\CData $pointer): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $size = $size instanceof \FFI\CData ? $size->cdata : $size;
        $type = $type instanceof \FFI\CData ? $type->cdata : $type;
        $stride = $stride instanceof \FFI\CData ? $stride->cdata : $stride;

        assert(Assert::uint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($size), 'Argument $size must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::uint16($type), 'Argument $type must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::int16($stride), 'Argument $stride must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glVertexAttribLPointer', 'void (*)(GLuint index, GLint size, GLenum type, GLsizei stride, const void *pointer)');
        $proc($index, $size, $type, $stride, $pointer);
    }

    /**
     * {@see GL46::glGetVertexAttrib} returns in $params the value of a
     * generic vertex attribute parameter. The generic vertex attribute to be
     * queried is specified by $index, and the parameter to be queried is
     * specified by $pname.
     *
     * The accepted parameter names are as follows:
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_BUFFER_BINDING}: $params returns a
     *    single value, the name of the buffer object
     *    currently bound to the binding point corresponding to generic vertex
     *    attribute array $index. If no buffer object is bound, 0 is returned.
     *    The initial value is 0.
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_ENABLED}: $params returns a single
     *    value that is non-zero (true) if the
     *    vertex attribute array for $index is enabled and 0 (false) if it is
     *    disabled. The initial value is {@see GL46::GL_FALSE}.
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_SIZE}: $params returns a single
     *    value, the size of the vertex attribute
     *    array for $index. The size is the number of values for each element of
     *    the vertex attribute array, and it will be 1, 2, 3, or 4. The initial
     *    value is 4.
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_STRIDE}: $params returns a single
     *    value, the array stride for (number of
     *    bytes between successive elements in) the vertex attribute array for
     *    $index. A value of 0 indicates that the array elements are stored
     *    sequentially in memory. The initial value is 0.
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_TYPE}: $params returns a single
     *    value, a symbolic constant indicating the
     *    array type for the vertex attribute array for $index. Possible values
     *    are {@see GL46::GL_BYTE}, {@see GL46::GL_UNSIGNED_BYTE},
     *    {@see GL46::GL_SHORT}, {@see GL46::GL_UNSIGNED_SHORT},
     *    {@see GL46::GL_INT}, {@see GL46::GL_UNSIGNED_INT},
     *    {@see GL46::GL_FLOAT}, and {@see GL46::GL_DOUBLE}. The initial value
     *    is {@see GL46::GL_FLOAT}.
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_NORMALIZED}: $params returns a
     *    single value that is non-zero (true) if
     *    fixed-point data types for the vertex attribute array indicated by
     *    $index are normalized when they are converted to floating point, and 0
     *    (false) otherwise. The initial value is {@see GL46::GL_FALSE}.
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_INTEGER}: $params returns a single
     *    value that is non-zero (true) if
     *    fixed-point data types for the vertex attribute array indicated by
     *    $index have integer data types, and 0 (false) otherwise. The initial
     *    value is 0 ({@see GL46::GL_FALSE}).
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_LONG}: $param returns a single
     *    value that is non-zero (true) if a vertex
     *    attribute is stored as an unconverted double, and 0 (false) otherwise.
     *    The initial value is 0 ({@see GL46::GL_FALSE}).
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_ARRAY_DIVISOR}: $params returns a single
     *    value that is the frequency divisor used
     *    for instanced rendering. See {@see GL46::glVertexAttribDivisor}. The
     *    initial value is 0.
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_BINDING}: $params returns a single value,
     *    the vertex buffer binding of the
     *    vertex attribute array $index.
     *
     *  - {@see GL46::GL_VERTEX_ATTRIB_RELATIVE_OFFSET}: $params returns a
     *    single value that is the byte offset of the first
     *    element relative to the start of the vertex buffer binding specified
     *    attribute fetches from. The initial value is 0.
     *
     *  - {@see GL46::GL_CURRENT_VERTEX_ATTRIB}: $params returns four values
     *    that represent the current value for
     *    the generic vertex attribute specified by index. Generic vertex
     *    attribute 0 is unique in that it has no current state, so an error
     *    will be generated if $index is 0. The initial value for all other
     *    generic vertex attributes is (0,0,0,1).
     *    {@see GL46::glGetVertexAttribdv} and {@see GL46::glGetVertexAttribfv}
     *    return the current attribute values as four single-precision
     *    floating-point values; {@see GL46::glGetVertexAttribiv} reads them as
     *    floating-point values and converts them to four integer values;
     *    {@see GL46::glGetVertexAttribIiv} and
     *    {@see GL46::glGetVertexAttribIuiv} read and return them as signed or
     *    unsigned integer values, respectively;
     *    {@see GL46::glGetVertexAttribLdv} reads and returns them as four
     *    double-precision floating-point values.
     *
     * All of the parameters except {@see GL46::GL_CURRENT_VERTEX_ATTRIB}
     * represent state stored in the currently bound vertex array object.
     *
     * @see http://docs.gl/gl2/glGetVertexAttrib
     * @see http://docs.gl/gl4/glGetVertexAttrib
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param int|\FFI\CData|\FFI\CInt $pname
     * @param \FFI\CData|\FFI\CFloatPtr|null $params
     * @return void
     */
    public function glGetVertexAttribLdv($index, $pname, ?\FFI\CData $params): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $pname = $pname instanceof \FFI\CData ? $pname->cdata : $pname;

        assert(Assert::uint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::uint16($pname), 'Argument $pname must be a C-like GLenum, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetVertexAttribLdv', 'void (*)(GLuint index, GLenum pname, GLdouble *params)');
        $proc($index, $pname, $params);
    }

    /**
     * {@see GL46::glViewportArrayv} specifies the parameters for multiple
     * viewports simulataneously. $first specifies the index of the first
     * viewport to modify and $count specifies the number of viewports to
     * modify. $first must be less than the value of
     * {@see GL46::GL_MAX_VIEWPORTS}, and $first + $count must be less than
     * or equal to the value of {@see GL46::GL_MAX_VIEWPORTS}. Viewports
     * whose indices lie outside the range [$first, $first + $count) are not
     * modified. $v contains the address of an array of floating point values
     * specifying the left (x), bottom (y), width (w), and height (h) of each
     * viewport, in that order. x and y give the location of the viewport's
     * lower left corner, and w and h give the width and height of the
     * viewport, respectively. The viewport specifies the affine
     * transformation of x and y from normalized device coordinates to window
     * coordinates. Let    x nd  y nd    be normalized device coordinates.
     * Then the window coordinates    x w  y w    are computed as follows:
     *
     *    x w  =    x nd  + 1   &amp;it;   width 2   + x
     *
     *    y w  =    y nd  + 1   &amp;it;   height 2   + y
     *
     * The location of the viewport's bottom left corner, given by (x, y) is
     * clamped to be within the implementaiton-dependent viewport bounds
     * range. The viewport bounds range [min, max] can be determined by
     * calling {@see GL46::glGet} with argument
     * {@see GL46::GL_VIEWPORT_BOUNDS_RANGE}. Viewport width and height are
     * silently clamped to a range that depends on the implementation. To
     * query this range, call {@see GL46::glGet} with argument
     * {@see GL46::GL_MAX_VIEWPORT_DIMS}.
     *
     * The precision with which the GL interprets the floating point viewport
     * bounds is implementation-dependent and may be determined by querying
     * the impementation-defined constant
     * {@see GL46::GL_VIEWPORT_SUBPIXEL_BITS}.
     *
     * @see http://docs.gl/gl4/glViewportArray
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $first
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public function glViewportArrayv($first, $count, ?\FFI\CData $v): void
    {
        $first = $first instanceof \FFI\CData ? $first->cdata : $first;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Assert::uint16($first), 'Argument $first must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glViewportArrayv', 'void (*)(GLuint first, GLsizei count, const GLfloat *v)');
        $proc($first, $count, $v);
    }

    /**
     * {@see GL46::glViewportIndexedf} and {@see GL46::glViewportIndexedfv}
     * specify the parameters for a single viewport. $index specifies the
     * index of the viewport to modify. $index must be less than the value of
     * {@see GL46::GL_MAX_VIEWPORTS}. For {@see GL46::glViewportIndexedf},
     * $x, $y, $w, and $h specify the left, bottom, width and height of the
     * viewport in pixels, respectively. For
     * {@see GL46::glViewportIndexedfv}, $v contains the address of an array
     * of floating point values specifying the left (x), bottom (y), width
     * (w), and height (h) of each viewport, in that order. x and y give the
     * location of the viewport's lower left corner, and w and h give the
     * width and height of the viewport, respectively. The viewport specifies
     * the affine transformation of x and y from normalized device
     * coordinates to window coordinates. Let    x nd  y nd    be normalized
     * device coordinates. Then the window coordinates    x w  y w    are
     * computed as follows:
     *
     *    x w  =    x nd  + 1   &amp;it;   width 2   + x
     *
     *    y w  =    y nd  + 1   &amp;it;   height 2   + y
     *
     * The location of the viewport's bottom left corner, given by (x, y) is
     * clamped to be within the implementaiton-dependent viewport bounds
     * range. The viewport bounds range [min, max] can be determined by
     * calling {@see GL46::glGet} with argument
     * {@see GL46::GL_VIEWPORT_BOUNDS_RANGE}. Viewport width and height are
     * silently clamped to a range that depends on the implementation. To
     * query this range, call {@see GL46::glGet} with argument
     * {@see GL46::GL_MAX_VIEWPORT_DIMS}.
     *
     * The precision with which the GL interprets the floating point viewport
     * bounds is implementation-dependent and may be determined by querying
     * the impementation-defined constant
     * {@see GL46::GL_VIEWPORT_SUBPIXEL_BITS}.
     *
     * Calling {@see GL46::glViewportIndexedfv} is equivalent to calling
     * {@see GL46::glViewportArray} with $first set to $index, $count set to
     * 1 and $v passsed directly. {@see GL46::glViewportIndexedf} is
     * equivalent to:
     *
     * <code>
     *     void glViewportIndexedf(GLuint index, GLfloat x, GLfloat y, GLfloat w, GLfloat h) {
     *         const float v[4]  = { x, y, w, h };
     *         glViewportArrayv(index, 1, v);
     *     }
     * </code>
     * @see http://docs.gl/gl4/glViewportIndexed
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param float|\FFI\CData|\FFI\CFloat $x
     * @param float|\FFI\CData|\FFI\CFloat $y
     * @param float|\FFI\CData|\FFI\CFloat $w
     * @param float|\FFI\CData|\FFI\CFloat $h
     * @return void
     */
    public function glViewportIndexedf($index, $x, $y, $w, $h): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $x = $x instanceof \FFI\CData ? $x->cdata : $x;
        $y = $y instanceof \FFI\CData ? $y->cdata : $y;
        $w = $w instanceof \FFI\CData ? $w->cdata : $w;
        $h = $h instanceof \FFI\CData ? $h->cdata : $h;

        assert(Assert::uint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::float32($x), 'Argument $x must be a C-like GLfloat, but incompatible or overflow value given');
        assert(Assert::float32($y), 'Argument $y must be a C-like GLfloat, but incompatible or overflow value given');
        assert(Assert::float32($w), 'Argument $w must be a C-like GLfloat, but incompatible or overflow value given');
        assert(Assert::float32($h), 'Argument $h must be a C-like GLfloat, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glViewportIndexedf', 'void (*)(GLuint index, GLfloat x, GLfloat y, GLfloat w, GLfloat h)');
        $proc($index, $x, $y, $w, $h);
    }

    /**
     * {@see GL46::glViewportIndexedf} and {@see GL46::glViewportIndexedfv}
     * specify the parameters for a single viewport. $index specifies the
     * index of the viewport to modify. $index must be less than the value of
     * {@see GL46::GL_MAX_VIEWPORTS}. For {@see GL46::glViewportIndexedf},
     * $x, $y, $w, and $h specify the left, bottom, width and height of the
     * viewport in pixels, respectively. For
     * {@see GL46::glViewportIndexedfv}, $v contains the address of an array
     * of floating point values specifying the left (x), bottom (y), width
     * (w), and height (h) of each viewport, in that order. x and y give the
     * location of the viewport's lower left corner, and w and h give the
     * width and height of the viewport, respectively. The viewport specifies
     * the affine transformation of x and y from normalized device
     * coordinates to window coordinates. Let    x nd  y nd    be normalized
     * device coordinates. Then the window coordinates    x w  y w    are
     * computed as follows:
     *
     *    x w  =    x nd  + 1   &amp;it;   width 2   + x
     *
     *    y w  =    y nd  + 1   &amp;it;   height 2   + y
     *
     * The location of the viewport's bottom left corner, given by (x, y) is
     * clamped to be within the implementaiton-dependent viewport bounds
     * range. The viewport bounds range [min, max] can be determined by
     * calling {@see GL46::glGet} with argument
     * {@see GL46::GL_VIEWPORT_BOUNDS_RANGE}. Viewport width and height are
     * silently clamped to a range that depends on the implementation. To
     * query this range, call {@see GL46::glGet} with argument
     * {@see GL46::GL_MAX_VIEWPORT_DIMS}.
     *
     * The precision with which the GL interprets the floating point viewport
     * bounds is implementation-dependent and may be determined by querying
     * the impementation-defined constant
     * {@see GL46::GL_VIEWPORT_SUBPIXEL_BITS}.
     *
     * Calling {@see GL46::glViewportIndexedfv} is equivalent to calling
     * {@see GL46::glViewportArray} with $first set to $index, $count set to
     * 1 and $v passsed directly. {@see GL46::glViewportIndexedf} is
     * equivalent to:
     *
     * <code>
     *     void glViewportIndexedf(GLuint index, GLfloat x, GLfloat y, GLfloat w, GLfloat h) {
     *         const float v[4]  = { x, y, w, h };
     *         glViewportArrayv(index, 1, v);
     *     }
     * </code>
     * @see http://docs.gl/gl4/glViewportIndexed
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public function glViewportIndexedfv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Assert::uint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glViewportIndexedfv', 'void (*)(GLuint index, const GLfloat *v)');
        $proc($index, $v);
    }

    /**
     * {@see GL46::glScissorArrayv} defines rectangles, called scissor boxes,
     * in window coordinates for each viewport. $first specifies the index of
     * the first scissor box to modify and $count specifies the number of
     * scissor boxes to modify. $first must be less than the value of
     * {@see GL46::GL_MAX_VIEWPORTS}, and $first + $count must be less than
     * or equal to the value of {@see GL46::GL_MAX_VIEWPORTS}. $v specifies
     * the address of an array containing integers specifying the lower left
     * corner of the scissor boxes, and the width and height of the scissor
     * boxes, in that order.
     *
     * To enable and disable the scissor test, call {@see GL46::glEnable} and
     *  {@see GL46::glDisable} with argument {@see GL46::GL_SCISSOR_TEST}.
     * The test is initially disabled for all viewports. While the test is
     * enabled, only pixels that lie within the scissor box can be modified
     * by drawing commands. Window coordinates have integer values at the
     * shared corners of frame buffer pixels. `glScissor(0,0,1,1)` allows
     * modification of only the lower left pixel in the window, and
     * `glScissor(0,0,0,0)` doesn't allow modification of any pixels in the
     * window.
     *
     * When the scissor test is disabled, it is as though the scissor box
     * includes the entire window.
     *
     * @see http://docs.gl/gl4/glScissorArray
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $first
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public function glScissorArrayv($first, $count, ?\FFI\CData $v): void
    {
        $first = $first instanceof \FFI\CData ? $first->cdata : $first;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Assert::uint16($first), 'Argument $first must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glScissorArrayv', 'void (*)(GLuint first, GLsizei count, const GLint *v)');
        $proc($first, $count, $v);
    }

    /**
     * {@see GL46::glScissorIndexed} defines the scissor box for a specified
     * viewport. $index specifies the index of scissor box to modify. $index
     * must be less than the value of {@see GL46::GL_MAX_VIEWPORTS}. For
     * {@see GL46::glScissorIndexed}, $left, $bottom, $width and $height
     * specify the left, bottom, width and height of the scissor box, in
     * pixels, respectively. For {@see GL46::glScissorIndexedv}, $v specifies
     * the address of an array containing integers specifying the lower left
     * corner of the scissor box, and the width and height of the scissor
     * box, in that order.
     *
     * To enable and disable the scissor test, call {@see GL46::glEnable} and
     *  {@see GL46::glDisable} with argument {@see GL46::GL_SCISSOR_TEST}.
     * The test is initially disabled for all viewports. While the test is
     * enabled, only pixels that lie within the scissor box can be modified
     * by drawing commands. Window coordinates have integer values at the
     * shared corners of frame buffer pixels. `glScissor(0,0,1,1)` allows
     * modification of only the lower left pixel in the window, and
     * `glScissor(0,0,0,0)` doesn't allow modification of any pixels in the
     * window.
     *
     * When the scissor test is disabled, it is as though the scissor box
     * includes the entire window.
     *
     * @see http://docs.gl/gl4/glScissorIndexed
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param int|\FFI\CData|\FFI\CInt $left
     * @param int|\FFI\CData|\FFI\CInt $bottom
     * @param int|\FFI\CData|\FFI\CInt $width
     * @param int|\FFI\CData|\FFI\CInt $height
     * @return void
     */
    public function glScissorIndexed($index, $left, $bottom, $width, $height): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $left = $left instanceof \FFI\CData ? $left->cdata : $left;
        $bottom = $bottom instanceof \FFI\CData ? $bottom->cdata : $bottom;
        $width = $width instanceof \FFI\CData ? $width->cdata : $width;
        $height = $height instanceof \FFI\CData ? $height->cdata : $height;

        assert(Assert::uint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($left), 'Argument $left must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($bottom), 'Argument $bottom must be a C-like GLint, but incompatible or overflow value given');
        assert(Assert::int16($width), 'Argument $width must be a C-like GLsizei, but incompatible or overflow value given');
        assert(Assert::int16($height), 'Argument $height must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glScissorIndexed', 'void (*)(GLuint index, GLint left, GLint bottom, GLsizei width, GLsizei height)');
        $proc($index, $left, $bottom, $width, $height);
    }

    /**
     * {@see GL46::glScissorIndexed} defines the scissor box for a specified
     * viewport. $index specifies the index of scissor box to modify. $index
     * must be less than the value of {@see GL46::GL_MAX_VIEWPORTS}. For
     * {@see GL46::glScissorIndexed}, $left, $bottom, $width and $height
     * specify the left, bottom, width and height of the scissor box, in
     * pixels, respectively. For {@see GL46::glScissorIndexedv}, $v specifies
     * the address of an array containing integers specifying the lower left
     * corner of the scissor box, and the width and height of the scissor
     * box, in that order.
     *
     * To enable and disable the scissor test, call {@see GL46::glEnable} and
     *  {@see GL46::glDisable} with argument {@see GL46::GL_SCISSOR_TEST}.
     * The test is initially disabled for all viewports. While the test is
     * enabled, only pixels that lie within the scissor box can be modified
     * by drawing commands. Window coordinates have integer values at the
     * shared corners of frame buffer pixels. `glScissor(0,0,1,1)` allows
     * modification of only the lower left pixel in the window, and
     * `glScissor(0,0,0,0)` doesn't allow modification of any pixels in the
     * window.
     *
     * When the scissor test is disabled, it is as though the scissor box
     * includes the entire window.
     *
     * @see http://docs.gl/gl4/glScissorIndexed
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CIntPtr|null $v
     * @return void
     */
    public function glScissorIndexedv($index, ?\FFI\CData $v): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Assert::uint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glScissorIndexedv', 'void (*)(GLuint index, const GLint *v)');
        $proc($index, $v);
    }

    /**
     * After clipping and division by w, depth coordinates range from   -1
     * to 1, corresponding to the near and far clipping planes. Each viewport
     * has an independent depth range specified as a linear mapping of the
     * normalized depth coordinates in this range to window depth
     * coordinates. Regardless of the actual depth buffer implementation,
     * window coordinate depth values are treated as though they range from 0
     * through 1 (like color components). {@see GL46::glDepthRangeArray}
     * specifies a linear mapping of the normalized depth coordinates in this
     * range to window depth coordinates for each viewport in the range
     * [$first, $first + $count). Thus, the values accepted by
     * {@see GL46::glDepthRangeArray} are both clamped to this range before
     * they are accepted.
     *
     * The $first parameter specifies the index of the first viewport whose
     * depth range to modify and must be less than the value of
     * {@see GL46::GL_MAX_VIEWPORTS}. $count specifies the number of
     * viewports whose depth range to modify. $first + $count must be less
     * than or equal to the value of {@see GL46::GL_MAX_VIEWPORTS}. $v
     * specifies the address of an array of pairs of double precision
     * floating point values representing the near and far values of the
     * depth range for each viewport, in that order.
     *
     * The setting of (0,1) maps the near plane to 0 and the far plane to 1.
     * With this mapping, the depth buffer range is fully utilized.
     *
     * @see http://docs.gl/gl4/glDepthRangeArray
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $first
     * @param int|\FFI\CData|\FFI\CInt $count
     * @param \FFI\CData|\FFI\CFloatPtr|null $v
     * @return void
     */
    public function glDepthRangeArrayv($first, $count, ?\FFI\CData $v): void
    {
        $first = $first instanceof \FFI\CData ? $first->cdata : $first;
        $count = $count instanceof \FFI\CData ? $count->cdata : $count;

        assert(Assert::uint16($first), 'Argument $first must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::int16($count), 'Argument $count must be a C-like GLsizei, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glDepthRangeArrayv', 'void (*)(GLuint first, GLsizei count, const GLdouble *v)');
        $proc($first, $count, $v);
    }

    /**
     * After clipping and division by w, depth coordinates range from   -1
     * to 1, corresponding to the near and far clipping planes. Each viewport
     * has an independent depth range specified as a linear mapping of the
     * normalized depth coordinates in this range to window depth
     * coordinates. Regardless of the actual depth buffer implementation,
     * window coordinate depth values are treated as though they range from 0
     * through 1 (like color components). {@see GL46::glDepthRangeIndexed}
     * specifies a linear mapping of the normalized depth coordinates in this
     * range to window depth coordinates for a specified viewport. Thus, the
     * values accepted by {@see GL46::glDepthRangeIndexed} are both clamped
     * to this range before they are accepted.
     *
     * The $index parameter specifies the index of first viewport whose depth
     * range to modify and must be less than the value of
     * {@see GL46::GL_MAX_VIEWPORTS}. $nearVal and $farVal specify near and
     * far values of the depth range for the specified viewport,
     * respectively.
     *
     * The setting of (0,1) maps the near plane to 0 and the far plane to 1.
     * With this mapping, the depth buffer range is fully utilized.
     *
     * @see http://docs.gl/gl4/glDepthRangeIndexed
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param float|\FFI\CData|\FFI\CFloat $n
     * @param float|\FFI\CData|\FFI\CFloat $f
     * @return void
     */
    public function glDepthRangeIndexed($index, $n, $f): void
    {
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;
        $n = $n instanceof \FFI\CData ? $n->cdata : $n;
        $f = $f instanceof \FFI\CData ? $f->cdata : $f;

        assert(Assert::uint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');
        assert(Assert::float64($n), 'Argument $n must be a C-like GLdouble, but incompatible or overflow value given');
        assert(Assert::float64($f), 'Argument $f must be a C-like GLdouble, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glDepthRangeIndexed', 'void (*)(GLuint index, GLdouble n, GLdouble f)');
        $proc($index, $n, $f);
    }

    /**
     * {@see GL46::glGetQueryiv} returns in $params a selected parameter of
     * the query object target specified by $target.
     *
     * $pname names a specific query object target parameter. When $pname is
     * {@see GL46::GL_CURRENT_QUERY}, the name of the currently active query
     * for $target, or zero if no query is active, will be placed in $params.
     * If $pname is {@see GL46::GL_QUERY_COUNTER_BITS}, the
     * implementation-dependent number of bits used to hold the result of
     * queries for $target is returned in $params.
     *
     * @see http://docs.gl/gl2/glGetPointerv
     * @see http://docs.gl/gl2/glGetQueryiv
     * @see http://docs.gl/gl4/glGetPointerv
     * @see http://docs.gl/gl4/glGetQueryiv
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CFloatPtr|null $data
     * @return void
     */
    public function glGetFloati_v($target, $index, ?\FFI\CData $data): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Assert::uint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetFloati_v', 'void (*)(GLenum target, GLuint index, GLfloat *data)');
        $proc($target, $index, $data);
    }

    /**
     * {@see GL46::glGetQueryiv} returns in $params a selected parameter of
     * the query object target specified by $target.
     *
     * $pname names a specific query object target parameter. When $pname is
     * {@see GL46::GL_CURRENT_QUERY}, the name of the currently active query
     * for $target, or zero if no query is active, will be placed in $params.
     * If $pname is {@see GL46::GL_QUERY_COUNTER_BITS}, the
     * implementation-dependent number of bits used to hold the result of
     * queries for $target is returned in $params.
     *
     * @see http://docs.gl/gl2/glGetPointerv
     * @see http://docs.gl/gl2/glGetQueryiv
     * @see http://docs.gl/gl4/glGetPointerv
     * @see http://docs.gl/gl4/glGetQueryiv
     * @since 4.1
     * @param int|\FFI\CData|\FFI\CInt $target
     * @param int|\FFI\CData|\FFI\CInt $index
     * @param \FFI\CData|\FFI\CFloatPtr|null $data
     * @return void
     */
    public function glGetDoublei_v($target, $index, ?\FFI\CData $data): void
    {
        $target = $target instanceof \FFI\CData ? $target->cdata : $target;
        $index = $index instanceof \FFI\CData ? $index->cdata : $index;

        assert(Assert::uint16($target), 'Argument $target must be a C-like GLenum, but incompatible or overflow value given');
        assert(Assert::uint16($index), 'Argument $index must be a C-like GLuint, but incompatible or overflow value given');

        $proc = $this->getProcAddress('glGetDoublei_v', 'void (*)(GLenum target, GLuint index, GLdouble *data)');
        $proc($target, $index, $data);
    }
}
